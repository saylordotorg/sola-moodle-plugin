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

/**
 * Daily cleanup of SOLA audit rows older than `audit_retention_days`.
 *
 * Default 365 days. 0 disables purge. Bounds the IP address and user agent
 * exposure window on the audit table, which otherwise accumulates
 * indefinitely.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class audit_cleanup extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:audit_cleanup', 'local_ai_course_assistant');
    }

    public function execute(): void {
        global $DB;
        $days = (int) (get_config('local_ai_course_assistant', 'audit_retention_days') ?: 365);
        if ($days <= 0) {
            return;
        }
        $cutoff = time() - ($days * 86400);
        $deleted = $DB->delete_records_select(
            'local_ai_course_assistant_audit',
            'timecreated < :cutoff',
            ['cutoff' => $cutoff]
        );
        mtrace('audit_cleanup: removed rows older than ' . $days . ' days.');
    }
}
