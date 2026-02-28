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
use core_external\external_value;
use local_ai_course_assistant\reminder_manager;

/**
 * Subscribe or update reminder preferences for the current user.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class update_reminder_preferences extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
            'channel' => new external_value(PARAM_ALPHA, 'Channel: email or whatsapp'),
            'destination' => new external_value(PARAM_RAW, 'Email address or phone number'),
            'country_code' => new external_value(PARAM_ALPHA, 'ISO country code', VALUE_DEFAULT, ''),
            'frequency' => new external_value(PARAM_ALPHANUMEXT, 'Frequency: daily, every_other_day, weekly', VALUE_DEFAULT, 'daily'),
            'enabled' => new external_value(PARAM_BOOL, 'Enable or disable', VALUE_DEFAULT, true),
        ]);
    }

    public static function execute(
        int $courseid,
        string $channel,
        string $destination,
        string $country_code = '',
        string $frequency = 'daily',
        bool $enabled = true
    ): array {
        global $USER;

        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
            'channel' => $channel,
            'destination' => $destination,
            'country_code' => $country_code,
            'frequency' => $frequency,
            'enabled' => $enabled,
        ]);

        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        if ($params['enabled']) {
            reminder_manager::subscribe(
                $USER->id,
                $params['courseid'],
                $params['channel'],
                $params['destination'],
                $params['country_code'],
                $params['frequency']
            );
        } else {
            // Disable existing reminder.
            global $DB;
            $existing = $DB->get_record('local_ai_course_assistant_reminders', [
                'userid' => $USER->id,
                'courseid' => $params['courseid'],
                'channel' => $params['channel'],
            ]);
            if ($existing) {
                $existing->enabled = 0;
                $existing->timemodified = time();
                $DB->update_record('local_ai_course_assistant_reminders', $existing);
            }
        }

        return ['success' => true];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'success' => new external_value(PARAM_BOOL, 'Success flag'),
        ]);
    }
}
