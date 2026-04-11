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
"""

import argparse
import json
import os
import pathlib
import subprocess
import sys
import time

# AWS infrastructure.
INSTANCE_ID = "i-04c58928fad484d97"
S3_BUCKET = "archive-course"
S3_KEY = "ai_course_assistant_deploy.tar.gz"

# Deploy targets: name -> (hostname, remote moodle dir).
# Plugin dir is always <moodle_dir>/local/ai_course_assistant.
TARGETS = {
    "dev": ("dev.sylr.org",    "/var/www/html/moodle"),
    "405": ("dev405.sylr.org", "/var/www/html/moodle405"),
    "500": ("dev500.sylr.org", "/var/www/html/moodle500"),
    "501": ("dev501.sylr.org", "/var/www/html/moodle501"),
}

# Local paths.
PLUGIN_DIR = pathlib.Path(__file__).resolve().parent
PARENT_DIR = PLUGIN_DIR.parent
LOCAL_TAR = pathlib.Path("/tmp/ai_course_assistant_deploy.tar.gz")


def run(cmd, **kwargs):
    """Run a shell command and return the result."""
    return subprocess.run(cmd, capture_output=True, text=True, **kwargs)


def ssm_send(commands, wait=True, timeout=120):
    """Send a shell command to the EC2 instance via SSM and wait for result."""
    payload = {"commands": commands}
    result = run([
        "aws", "ssm", "send-command",
        "--instance-ids", INSTANCE_ID,
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
            "--instance-id", INSTANCE_ID,
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


def deploy_to_target(name, hostname, moodle_dir):
    """Rsync, upgrade, purge, verify on a single Moodle install."""
    plugin_dir = f"{moodle_dir}/local/ai_course_assistant"
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
    result = ssm_send(deploy_commands, timeout=180)
    if not result or result["status"] != "Success":
        print(f"  ERROR: {result}")
        return False
    print("  Files synced")

    print("  Running Moodle database upgrade...")
    upgrade_commands = [
        f"sudo -u www-data php {moodle_dir}/admin/cli/upgrade.php --non-interactive 2>&1 | tail -30",
    ]
    result = ssm_send(upgrade_commands, timeout=180)
    if result:
        output = result.get("stdout", "")
        for line in output.split("\n"):
            if line.strip() and not line.startswith("++") and "LIBARCHIVE" not in line:
                print(f"    {line}")

    print("  Purging caches...")
    result = ssm_send([f"sudo -u www-data php {moodle_dir}/admin/cli/purge_caches.php"], timeout=60)
    print("  Caches purged")

    print("  Verifying...")
    verify_commands = [
        f"cat {plugin_dir}/version.php | grep -E 'version|release'",
        f"ls {plugin_dir}/*.php | wc -l",
        f"grep -c cdn_url {plugin_dir}/settings.php",
    ]
    result = ssm_send([" && ".join(verify_commands)], timeout=30)
    if result and result.get("stdout"):
        for line in result["stdout"].strip().split("\n"):
            print(f"    {line}")

    print(f"  Deployed to https://{hostname}")
    return True


def parse_args():
    parser = argparse.ArgumentParser(description="Deploy SOLA plugin to Saylor dev Moodle sites")
    parser.add_argument(
        "--target",
        default="dev",
        help="Target Moodle (dev, 405, 500, 501, or 'all' for all four). Default: dev",
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

    print("=" * 60)
    print(f"SOLA dev deploy (AWS SSM + rsync)  →  {', '.join(selected)}")
    print("=" * 60)

    # Step 1: Verify AWS CLI is available and configured.
    print("\nStep 1: Verifying AWS credentials...")
    r = run(["aws", "sts", "get-caller-identity", "--query", "Arn", "--output", "text"])
    if r.returncode != 0:
        print("  ERROR: AWS CLI not configured. Run 'aws configure' first.")
        sys.exit(1)
    print(f"  Authenticated as: {r.stdout.strip()}")

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
        "--exclude=.DS_Store",
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
        hostname, moodle_dir = TARGETS[name]
        if not deploy_to_target(name, hostname, moodle_dir):
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
