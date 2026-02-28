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

use local_ai_course_assistant\reminder_manager;
use local_ai_course_assistant\study_planner;

/**
 * Scheduled task to send study reminders.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class send_reminders extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:send_reminders', 'local_ai_course_assistant');
    }

    public function execute(): void {
        if (!get_config('local_ai_course_assistant', 'enabled')) {
            return;
        }

        $reminders = reminder_manager::get_due_reminders();

        if (empty($reminders)) {
            mtrace('No study reminders due.');
            return;
        }

        mtrace('Processing ' . count($reminders) . ' study reminders...');

        $sent = 0;
        $failed = 0;

        foreach ($reminders as $reminder) {
            try {
                $tip = study_planner::get_study_tip($reminder->userid, $reminder->courseid);
                $message = get_string('reminder:study_tip_prefix', 'local_ai_course_assistant') . $tip;

                $success = false;
                if ($reminder->channel === 'email') {
                    $success = reminder_manager::send_email_reminder($reminder, $message);
                } else if ($reminder->channel === 'whatsapp') {
                    $success = reminder_manager::send_whatsapp_reminder($reminder, $message);
                }

                if ($success) {
                    reminder_manager::mark_sent($reminder->id);
                    $sent++;
                } else {
                    $failed++;
                    mtrace("  Failed to send {$reminder->channel} reminder #{$reminder->id}");
                }
            } catch (\Throwable $e) {
                $failed++;
                mtrace("  Error sending reminder #{$reminder->id}: " . $e->getMessage());
            }
        }

        mtrace("Done. Sent: {$sent}, Failed: {$failed}");
    }
}
