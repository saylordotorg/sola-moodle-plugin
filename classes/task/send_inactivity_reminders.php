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
 * Scheduled task: send weekly inactivity reminders.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class send_inactivity_reminders extends \core\task\scheduled_task {
    public function get_name(): string {
        return get_string('task:send_inactivity_reminders', 'local_ai_course_assistant');
    }

    public function execute(): void {
        global $DB;

        $threshold = (int) get_config('local_ai_course_assistant', 'inactivity_threshold_days') ?: 7;
        $cutoff = time() - ($threshold * 86400);
        $displayName = get_config('local_ai_course_assistant', 'display_name') ?: 'SOLA';

        // Find users with active email reminders who haven't accessed their course recently.
        $sql = "SELECT r.id, r.userid, r.courseid, r.destination, r.last_sent,
                       c.fullname AS coursename, u.firstname, u.lastname,
                       COALESCE(la.timeaccess, 0) AS lastaccess
                  FROM {local_ai_course_assistant_reminders} r
                  JOIN {user} u ON u.id = r.userid
                  JOIN {course} c ON c.id = r.courseid
                  LEFT JOIN {user_lastaccess} la ON la.userid = r.userid AND la.courseid = r.courseid
                 WHERE r.channel = 'email' AND r.enabled = 1
                   AND (la.timeaccess IS NULL OR la.timeaccess < :cutoff)
                   AND (r.last_sent IS NULL OR r.last_sent < :weeksince)";

        $weeksince = time() - (7 * 86400); // Don't send more than once per week.
        $records = $DB->get_records_sql($sql, ['cutoff' => $cutoff, 'weeksince' => $weeksince]);

        $sent = 0;
        foreach ($records as $rec) {
            // Check if student has a study plan — skip if plan covers their absence.
            $plan = $DB->get_record('local_ai_course_assistant_plans', [
                'userid' => $rec->userid, 'courseid' => $rec->courseid,
            ]);
            if ($plan && !empty($plan->preferred_days)) {
                // If today is not one of their preferred study days, they might be on schedule.
                $today = strtolower(date('l'));
                $days = array_map('trim', explode(',', strtolower($plan->preferred_days)));
                if (!in_array($today, $days)) {
                    continue; // Respect their study schedule.
                }
            }

            $daysSince = $rec->lastaccess > 0 ? round((time() - $rec->lastaccess) / 86400) : 0;
            $subject = "We miss you in {$rec->coursename}!";
            $body = "Hi {$rec->firstname},\n\n"
                . "It's been " . ($daysSince > 0 ? "{$daysSince} days" : "a while")
                . " since you last visited {$rec->coursename}. "
                . "{$displayName} is ready to help you pick up where you left off.\n\n"
                . "Even 10 minutes of review can make a difference. Log in and let's keep your momentum going!\n\n"
                . "— {$displayName}";

            try {
                \local_ai_course_assistant\reminder_manager::send_email_reminder(
                    $rec->userid, $rec->destination, $subject, $body
                );
                \local_ai_course_assistant\reminder_manager::mark_sent($rec->id);
                $sent++;
            } catch (\Throwable $e) {
                mtrace("  Inactivity reminder failed for user {$rec->userid}: " . $e->getMessage());
            }
        }

        mtrace("Inactivity reminders done. Sent: {$sent}");
    }
}
