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

namespace local_ai_course_assistant\external;

use core_external\external_api;
use core_external\external_function_parameters;
use core_external\external_single_structure;
use core_external\external_multiple_structure;
use core_external\external_value;

/**
 * Get reminder preferences for the current user.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_reminder_preferences extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
        ]);
    }

    public static function execute(int $courseid): array {
        global $USER, $DB;

        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
        ]);

        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        $reminders = $DB->get_records('local_ai_course_assistant_reminders', [
            'userid' => $USER->id,
            'courseid' => $params['courseid'],
        ]);

        $result = [];
        foreach ($reminders as $r) {
            $result[] = [
                'channel' => $r->channel,
                'destination' => $r->destination,
                'frequency' => $r->frequency,
                'enabled' => (bool) $r->enabled,
            ];
        }

        return [
            'reminders' => $result,
            'email_available' => (bool) get_config('local_ai_course_assistant', 'reminders_email_enabled'),
            'whatsapp_available' => (bool) get_config('local_ai_course_assistant', 'reminders_whatsapp_enabled'),
        ];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'reminders' => new external_multiple_structure(
                new external_single_structure([
                    'channel' => new external_value(PARAM_ALPHA, 'Reminder channel'),
                    'destination' => new external_value(PARAM_RAW, 'Destination address'),
                    'frequency' => new external_value(PARAM_ALPHANUMEXT, 'Frequency'),
                    'enabled' => new external_value(PARAM_BOOL, 'Enabled status'),
                ])
            ),
            'email_available' => new external_value(PARAM_BOOL, 'Email reminders available'),
            'whatsapp_available' => new external_value(PARAM_BOOL, 'WhatsApp reminders available'),
        ]);
    }
}
