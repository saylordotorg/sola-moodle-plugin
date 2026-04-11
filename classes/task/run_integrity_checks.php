<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace local_ai_course_assistant\task;

defined('MOODLE_INTERNAL') || die();

/**
 * Scheduled task: run daily integrity checks and email report on failure.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class run_integrity_checks extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:run_integrity_checks', 'local_ai_course_assistant');
    }

    public function execute(): void {
        global $CFG;

        // Check if integrity checks are enabled.
        $enabled = get_config('local_ai_course_assistant', 'integrity_enabled');
        if ($enabled === '0') {
            mtrace('SOLA integrity checks disabled, skipping.');
            return;
        }

        $results = \local_ai_course_assistant\integrity_checker::run_all();

        // Store results for the admin page.
        set_config('integrity_last_results', json_encode($results), 'local_ai_course_assistant');
        set_config('integrity_last_run', time(), 'local_ai_course_assistant');

        mtrace("SOLA integrity: {$results['passed']} passed, {$results['failed']} failed, {$results['warned']} warnings.");

        // Only send email if there are failures.
        if ($results['failed'] > 0) {
            $this->send_report($results);
        }
    }

    /**
     * Send failure report via email.
     *
     * @param array $results Integrity check results.
     * @return void
     */
    private function send_report(array $results): void {
        global $CFG;

        $email = get_config('local_ai_course_assistant', 'integrity_email');
        if (empty($email)) {
            // Fall back to the primary admin.
            $admins = get_admins();
            $admin = reset($admins);
            if (!$admin) {
                mtrace('No admin user found for integrity report.');
                return;
            }
        }

        $sitename = format_string($CFG->shortname ?? 'Moodle');
        $displayname = get_config('local_ai_course_assistant', 'display_name') ?: 'SOLA';
        $subject = "[{$displayname}] Integrity Check Failed: {$results['failed']} issue(s) on {$sitename}";

        // Build report body.
        $body = "{$displayname} Plugin Integrity Report\n";
        $body .= "Date: " . userdate(time(), '%Y-%m-%d %H:%M %Z') . "\n";
        $body .= "Server: " . ($CFG->wwwroot ?? 'unknown') . "\n\n";

        // Failed items first.
        $faillines = [];
        $warnlines = [];
        $passlines = [];
        foreach ($results['results'] as $r) {
            $line = "[" . strtoupper($r['status']) . "] {$r['name']}: {$r['message']}";
            if ($r['status'] === 'fail') {
                $faillines[] = $line;
            } else if ($r['status'] === 'warn') {
                $warnlines[] = $line;
            } else {
                $passlines[] = $line;
            }
        }

        if ($faillines) {
            $body .= "FAILED ({$results['failed']}):\n  " . implode("\n  ", $faillines) . "\n\n";
        }
        if ($warnlines) {
            $body .= "WARNINGS ({$results['warned']}):\n  " . implode("\n  ", $warnlines) . "\n\n";
        }
        if ($passlines) {
            $body .= "PASSED ({$results['passed']}):\n  " . implode("\n  ", $passlines) . "\n";
        }

        // Send using Moodle messaging.
        if (!empty($email)) {
            // Support comma-separated email addresses.
            $emails = array_map('trim', explode(',', $email));
            $fromuser = \core_user::get_noreply_user();

            foreach ($emails as $addr) {
                if (!validate_email($addr)) {
                    mtrace("Skipping invalid email: {$addr}");
                    continue;
                }
                $touser = \core_user::get_noreply_user();
                $touser->email = $addr;
                $touser->id = -1;
                $touser->firstaccess = 0;
                $touser->username = 'integrity_report';
                $touser->firstname = 'SOLA';
                $touser->lastname = 'Admin';
                $touser->maildisplay = 1;
                $touser->mailformat = 1;
                $touser->deleted = 0;
                $touser->suspended = 0;
                $touser->auth = 'manual';
                $touser->confirmed = 1;

                email_to_user($touser, $fromuser, $subject, $body, nl2br(s($body)));
                mtrace("Integrity report sent to {$addr}.");
            }
        } else {
            // Send via Moodle message to admin.
            $message = new \core\message\message();
            $message->component = 'local_ai_course_assistant';
            $message->name = 'integrity_report';
            $message->userfrom = \core_user::get_noreply_user();
            $message->userto = $admin;
            $message->subject = $subject;
            $message->fullmessage = $body;
            $message->fullmessageformat = FORMAT_PLAIN;
            $message->fullmessagehtml = nl2br(s($body));
            $message->smallmessage = $subject;
            $message->notification = 1;
            message_send($message);
            mtrace("Integrity report sent to admin user #{$admin->id}.");
        }
    }
}
