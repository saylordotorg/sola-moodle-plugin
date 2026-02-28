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

namespace local_ai_course_assistant;

/**
 * Audit logging for security and compliance (SOC2).
 *
 * Logs all sensitive operations for security auditing and compliance.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class audit_logger {

    /**
     * Log an event for audit trail.
     *
     * @param string $action Action performed (e.g., 'message_sent', 'data_deleted', 'settings_changed')
     * @param int $userid User who performed the action
     * @param int $courseid Related course ID (0 if not applicable)
     * @param array $details Additional details as key-value pairs
     */
    public static function log(string $action, int $userid, int $courseid = 0, array $details = []): void {
        global $DB;

        $record = new \stdClass();
        $record->action = $action;
        $record->userid = $userid;
        $record->courseid = $courseid;
        $record->ipaddress = getremoteaddr();
        $record->useragent = substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 255);
        $record->details = json_encode($details);
        $record->timecreated = time();

        try {
            $DB->insert_record('local_ai_course_assistant_audit', $record);
        } catch (\dml_exception $e) {
            // Silently fail audit logging to avoid breaking the main flow.
            // This could be logged to error_log in production.
            debugging('Audit log failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
        }
    }

    /**
     * Get audit logs for a user.
     *
     * @param int $userid
     * @param int $limit
     * @return array
     */
    public static function get_user_logs(int $userid, int $limit = 100): array {
        global $DB;

        return $DB->get_records('local_ai_course_assistant_audit',
            ['userid' => $userid],
            'timecreated DESC',
            '*',
            0,
            $limit
        );
    }

    /**
     * Get audit logs for a course.
     *
     * @param int $courseid
     * @param int $limit
     * @return array
     */
    public static function get_course_logs(int $courseid, int $limit = 100): array {
        global $DB;

        return $DB->get_records('local_ai_course_assistant_audit',
            ['courseid' => $courseid],
            'timecreated DESC',
            '*',
            0,
            $limit
        );
    }

    /**
     * Get all audit logs (admin only).
     *
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public static function get_all_logs(int $limit = 100, int $offset = 0): array {
        global $DB;

        return $DB->get_records('local_ai_course_assistant_audit',
            null,
            'timecreated DESC',
            '*',
            $offset,
            $limit
        );
    }

    /**
     * Delete old audit logs (retention policy).
     *
     * @param int $retentiondays Number of days to retain logs (default 365)
     */
    public static function clean_old_logs(int $retentiondays = 365): void {
        global $DB;

        $cutoff = time() - ($retentiondays * 86400);
        $DB->delete_records_select('local_ai_course_assistant_audit', 'timecreated < ?', [$cutoff]);
    }
}
