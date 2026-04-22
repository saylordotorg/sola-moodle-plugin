#!/usr/bin/env python3
"""Deploy SOLA plugin to Saylor dev Moodle sites via AWS SSM + S3 + rsync.

This bypasses Moodle's plugin installer (which doesn't reliably extract all
files) and copies the plugin directly to the server filesystem via AWS Systems
Manager Session Manager.

All 4 dev Moodles live on the same EC2 instance (i-04c58928fad484d97) under
/var/www/html/moodle{,405,500,501}.

Requirements:
    - AWS CLI configured with credentials (aws configure)
    - Access to EC2 instance i-04c58928fad484d97 (moodle-test)
    - Access to S3 bucket archive-course

Usage:
    python3 deploy_dev.py                 # deploys to dev.sylr.org only
    python3 deploy_dev.py --target 405    # deploys to dev405.sylr.org only
    python3 deploy_dev.py --target all    # deploys to all 4 dev sites
    python3 deploy_dev.py --seed-bus101   # restore BUS101 fixture to dev (idempotent)
"""

import argparse
import json
import os
import pathlib
import subprocess
import sys
import time

# AWS infrastructure.
S3_BUCKET = "archive-course"
S3_KEY = "ai_course_assistant_deploy.tar.gz"
FIXTURE_S3_KEY = "dev-fixtures/bus101.mbz"
FIXTURE_SHORTNAME = "BUS101"

# Shared instance that hosts the original four dev sites under one EC2 VM.
LEGACY_INSTANCE_ID = "i-04c58928fad484d97"

# Deploy targets: name -> (hostname, moodle_dir, plugin_subdir, instance_id).
# moodle_dir is the top-level Moodle repo (where admin/cli/* lives).
# plugin_subdir is where local plugins live relative to moodle_dir.
# instance_id is the EC2 instance the site runs on (SSM target).
#
# Layout evolution across Moodle versions:
#   Moodle 4.5 / 5.0: local plugins at <moodle_dir>/local/*
#   Moodle 5.1:       web root moved to public/; local plugins at
#                     <moodle_dir>/public/local/*
#   Moodle 5.2+:      same as 5.1 (public/ layout) unless noted
TARGETS = {
    "dev": ("dev.sylr.org",    "/var/www/html/moodle",    "local",        LEGACY_INSTANCE_ID),
    "405": ("dev405.sylr.org", "/var/www/html/moodle405", "local",        LEGACY_INSTANCE_ID),
    "500": ("dev500.sylr.org", "/var/www/html/moodle500", "local",        LEGACY_INSTANCE_ID),
    "501": ("dev501.sylr.org", "/var/www/html/moodle501", "public/local", LEGACY_INSTANCE_ID),
    # dev503 runs Moodle 5.2 on its own EC2 instance (moodle-dev503).
    # Different filesystem layout: Moodle lives at /var/www/moodle (not
    # /var/www/html/moodleNNN like the shared instance). public/local is the
    # standard Moodle 5.1+ web-root-moved-into-public/ layout.
    "503": ("dev503.sylr.org", "/var/www/moodle", "public/local", "i-01c8aaf0d2e9dcab1"),
}

# Local paths.
PLUGIN_DIR = pathlib.Path(__file__).resolve().parent
PARENT_DIR = PLUGIN_DIR.parent
LOCAL_TAR = pathlib.Path("/tmp/ai_course_assistant_deploy.tar.gz")


def run(cmd, **kwargs):
    """Run a shell command and return the result."""
    return subprocess.run(cmd, capture_output=True, text=True, **kwargs)


def ssm_send(commands, wait=True, timeout=120, instance_id=None):
    """Send a shell command to an EC2 instance via SSM and wait for result.

    instance_id defaults to LEGACY_INSTANCE_ID for backwards compatibility;
    pass the target's instance_id explicitly when deploying to a site that
    lives on a different EC2 VM (e.g., dev503).
    """
    iid = instance_id or LEGACY_INSTANCE_ID
    payload = {"commands": commands}
    result = run([
        "aws", "ssm", "send-command",
        "--instance-ids", iid,
        "--document-name", "AWS-RunShellScript",
        "--parameters", json.dumps(payload),
        "--query", "Command.CommandId",
        "--output", "text",
    ])
    if result.returncode != 0:
        print(f"  ERROR: {result.stderr}")
        return None
    command_id = result.stdout.strip()

    if not wait:
        return command_id

    # Poll for completion.
    start = time.time()
    while time.time() - start < timeout:
        time.sleep(2)
        r = run([
            "aws", "ssm", "get-command-invocation",
            "--command-id", command_id,
            "--instance-id", iid,
            "--query", "[Status,StandardOutputContent,StandardErrorContent]",
            "--output", "json",
        ])
        if r.returncode != 0:
            continue
        try:
            status, stdout, stderr = json.loads(r.stdout)
        except (json.JSONDecodeError, ValueError):
            continue
        if status in ("Success", "Failed", "Cancelled", "TimedOut"):
            return {"status": status, "stdout": stdout or "", "stderr": stderr or ""}
    return {"status": "Timeout", "stdout": "", "stderr": "Command polling timed out"}


def deploy_to_target(name, hostname, moodle_dir, plugin_subdir, instance_id=None):
    """Rsync, upgrade, purge, verify on a single Moodle install."""
    plugin_dir = f"{moodle_dir}/{plugin_subdir}/ai_course_assistant"
    print(f"\n--- Deploying to {hostname} ({moodle_dir}) ---")

    print("  Syncing files via SSM...")
    deploy_commands = [
        "set -e",
        "cd /tmp",
        f"aws s3 cp s3://{S3_BUCKET}/{S3_KEY} ./ai_course_assistant_deploy.tar.gz",
        f"rm -rf /tmp/sola_extract_{name} && mkdir -p /tmp/sola_extract_{name}",
        f"tar -xzf /tmp/ai_course_assistant_deploy.tar.gz -C /tmp/sola_extract_{name} 2>&1 | grep -v 'LIBARCHIVE' || true",
        f"sudo rsync -a --delete /tmp/sola_extract_{name}/ai_course_assistant/ {plugin_dir}/",
        f"sudo chown -R www-data:www-data {plugin_dir}",
        f"sudo find {plugin_dir} -type f -exec chmod 644 {{}} \\;",
        f"sudo find {plugin_dir} -type d -exec chmod 755 {{}} \\;",
        f"rm -rf /tmp/sola_extract_{name}",
        "echo Deploy complete",
    ]
    result = ssm_send(deploy_commands, timeout=180, instance_id=instance_id)
    if not result or result["status"] != "Success":
        print(f"  ERROR: {result}")
        return False
    print("  Files synced")

    print("  Running Moodle database upgrade...")
    upgrade_commands = [
        f"sudo -u www-data php {moodle_dir}/admin/cli/upgrade.php --non-interactive 2>&1 | tail -30",
    ]
    result = ssm_send(upgrade_commands, timeout=180, instance_id=instance_id)
    if result:
        output = result.get("stdout", "")
        for line in output.split("\n"):
            if line.strip() and not line.startswith("++") and "LIBARCHIVE" not in line:
                print(f"    {line}")

    print("  Purging caches...")
    result = ssm_send([f"sudo -u www-data php {moodle_dir}/admin/cli/purge_caches.php"], timeout=60, instance_id=instance_id)
    print("  Caches purged")

    print("  Verifying...")
    verify_commands = [
        f"cat {plugin_dir}/version.php | grep -E 'version|release'",
        f"ls {plugin_dir}/*.php | wc -l",
        f"grep -c cdn_url {plugin_dir}/settings.php",
    ]
    result = ssm_send([" && ".join(verify_commands)], timeout=30, instance_id=instance_id)
    if result and result.get("stdout"):
        for line in result["stdout"].strip().split("\n"):
            print(f"    {line}")

    smoke_test_bus101(hostname, moodle_dir, instance_id=instance_id)

    print(f"  Deployed to https://{hostname}")
    return True


def course_exists(moodle_dir, shortname, instance_id=None):
    """Return True if a course whose shortname starts with the given prefix exists."""
    php = (
        "define('CLI_SCRIPT', true); "
        f"require('{moodle_dir}/config.php'); "
        f"\\$n = \\$DB->count_records_select('course', "
        f"\\\"shortname LIKE '{shortname}%'\\\"); "
        "echo \\$n > 0 ? 'YES' : 'NO';"
    )
    result = ssm_send([f"sudo -u www-data php -r \"{php}\""], timeout=30, instance_id=instance_id)
    return bool(result and "YES" in (result.get("stdout") or ""))


def smoke_test_bus101(hostname, moodle_dir, instance_id=None):
    """Hit the BUS101 course page to catch hook-level regressions like v3.4.7.

    Skips silently if BUS101 has not been seeded yet. Only logs failures.
    """
    if not course_exists(moodle_dir, FIXTURE_SHORTNAME, instance_id=instance_id):
        return
    url = f"https://{hostname}/course/view.php?name={FIXTURE_SHORTNAME}"
    # Match only genuine error markers. Avoid bare words like "exception" (hits
    # YUI module names like moodle-core-notification-exception) or "debug info"
    # (hits the static lang-string label M.str.debug.debuginfo embedded on every page).
    pattern = (
        r'dml_missing_record'
        r'|PHP Fatal error'
        r'|PHP Parse error'
        r'|class="[^"]*\berrorbox\b'
        r'|class="[^"]*\bnotifyproblem\b'
        r'|class="[^"]*\balert-danger\b'
        r'|<title>Error</title>'
    )
    check = (
        f"code=$(curl -sk -o /tmp/bus101_smoke.html -w '%{{http_code}}' '{url}'); "
        "if [ \"$code\" != \"200\" ]; then echo \"BAD HTTP $code\"; exit 1; fi; "
        f"if grep -qE '{pattern}' /tmp/bus101_smoke.html; then "
        "echo 'BAD error markers in response'; exit 1; fi; "
        "echo OK"
    )
    result = ssm_send([check], timeout=30, instance_id=instance_id)
    out = (result.get("stdout") or "").strip() if result else ""
    status = (result or {}).get("status")
    if status == "Success" and out.endswith("OK"):
        print(f"    BUS101 smoke: OK")
    else:
        print(f"    BUS101 smoke: FAILED ({out or status})")


def seed_bus101(name, hostname, moodle_dir, instance_id=None):
    """Restore the BUS101 fixture backup. Idempotent: skips if already present."""
    print(f"\n--- Seeding BUS101 on {hostname} ({moodle_dir}) ---")

    if course_exists(moodle_dir, FIXTURE_SHORTNAME, instance_id=instance_id):
        print(f"  BUS101 already present, skipping")
        return True

    fixture_path = f"/tmp/bus101_{name}.mbz"
    seed_commands = [
        "set -e",
        f"aws s3 cp s3://{S3_BUCKET}/{FIXTURE_S3_KEY} {fixture_path}",
        f"sudo chown www-data:www-data {fixture_path}",
        (
            f"sudo -u www-data php {moodle_dir}/admin/cli/restore_backup.php "
            f"--file={fixture_path} --categoryid=1 2>&1 | tail -40"
        ),
        f"rm -f {fixture_path}",
    ]
    result = ssm_send(seed_commands, timeout=600, instance_id=instance_id)
    if not result or result["status"] != "Success":
        print(f"  ERROR: {result}")
        return False
    for line in (result.get("stdout") or "").split("\n"):
        if line.strip():
            print(f"    {line}")

    if course_exists(moodle_dir, FIXTURE_SHORTNAME, instance_id=instance_id):
        print(f"  BUS101 seeded on {hostname}")
        return True
    print(f"  ERROR: restore completed but course {FIXTURE_SHORTNAME} not found")
    return False


def parse_args():
    parser = argparse.ArgumentParser(description="Deploy SOLA plugin to Saylor dev Moodle sites")
    parser.add_argument(
        "--target",
        default="dev",
        help="Target Moodle (dev, 405, 500, 501, or 'all' for all four). Default: dev",
    )
    parser.add_argument(
        "--seed-bus101",
        action="store_true",
        help="Restore the BUS101 fixture backup on the target(s) instead of deploying the plugin. Idempotent.",
    )
    return parser.parse_args()


def main():
    args = parse_args()

    if args.target == "all":
        selected = list(TARGETS.keys())
    elif args.target in TARGETS:
        selected = [args.target]
    else:
        print(f"Unknown target '{args.target}'. Choices: {', '.join(TARGETS.keys())}, all")
        sys.exit(2)

    mode = "seed BUS101" if args.seed_bus101 else "deploy"
    print("=" * 60)
    print(f"SOLA dev {mode} (AWS SSM + rsync)  →  {', '.join(selected)}")
    print("=" * 60)

    # Step 1: Verify AWS CLI is available and configured.
    print("\nStep 1: Verifying AWS credentials...")
    r = run(["aws", "sts", "get-caller-identity", "--query", "Arn", "--output", "text"])
    if r.returncode != 0:
        print("  ERROR: AWS CLI not configured. Run 'aws configure' first.")
        sys.exit(1)
    print(f"  Authenticated as: {r.stdout.strip()}")

    if args.seed_bus101:
        failures = []
        for name in selected:
            hostname, moodle_dir, _plugin_subdir, instance_id = TARGETS[name]
            if not seed_bus101(name, hostname, moodle_dir, instance_id=instance_id):
                failures.append(hostname)
        print("\n" + "=" * 60)
        if failures:
            print(f"Seed finished with {len(failures)} failure(s): {', '.join(failures)}")
            sys.exit(1)
        print(f"Seed complete: {', '.join(TARGETS[n][0] for n in selected)}")
        print("=" * 60)
        return

    # Step 2: Create tarball excluding bloat.
    print("\nStep 2: Creating plugin tarball...")
    if LOCAL_TAR.exists():
        LOCAL_TAR.unlink()
    r = run([
        "tar", "-czf", str(LOCAL_TAR),
        "-C", str(PARENT_DIR),
        "--exclude=ai_course_assistant/cdn/node_modules",
        "--exclude=ai_course_assistant/cdn/dist",
        "--exclude=ai_course_assistant/.wiki",
        "--exclude=ai_course_assistant/.git",
        "--exclude=ai_course_assistant/.claude",
        "--exclude=ai_course_assistant/.drafts",
        "--exclude=.DS_Store",
        # AppleDouble metadata from Dropbox/macOS sync. These files have the
        # same name as a real JS/PHP file prefixed with "._" and contain raw
        # binary xattrs. Moodle's AMD aggregator concatenates every file in
        # amd/build/, which means a ._chat.min.js file breaks the whole JS
        # bundle with a SyntaxError and kills the admin user menu, drawer,
        # and widget. Exclude them aggressively.
        "--exclude=._*",
        "ai_course_assistant",
    ])
    if r.returncode != 0:
        print(f"  ERROR creating tarball: {r.stderr}")
        sys.exit(1)
    size_mb = LOCAL_TAR.stat().st_size / 1024 / 1024
    print(f"  Created: {LOCAL_TAR} ({size_mb:.1f} MB)")

    # Step 3: Upload tarball to S3 once; every target pulls from there.
    print("\nStep 3: Uploading to S3...")
    r = run(["aws", "s3", "cp", str(LOCAL_TAR), f"s3://{S3_BUCKET}/{S3_KEY}"])
    if r.returncode != 0:
        print(f"  ERROR uploading to S3: {r.stderr}")
        sys.exit(1)
    print(f"  Uploaded to s3://{S3_BUCKET}/{S3_KEY}")

    # Step 4: Deploy to every selected target in sequence.
    failures = []
    for name in selected:
        hostname, moodle_dir, plugin_subdir, instance_id = TARGETS[name]
        if not deploy_to_target(name, hostname, moodle_dir, plugin_subdir, instance_id=instance_id):
            failures.append(hostname)

    # Clean up local tarball.
    if LOCAL_TAR.exists():
        LOCAL_TAR.unlink()

    print("\n" + "=" * 60)
    if failures:
        print(f"Deploy finished with {len(failures)} failure(s): {', '.join(failures)}")
        sys.exit(1)
    else:
        print(f"Deploy complete: {', '.join(TARGETS[n][0] for n in selected)}")
    print("=" * 60)


if __name__ == "__main__":
    main()
