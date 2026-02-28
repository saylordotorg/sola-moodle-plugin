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

/**
 * Get client-side configuration.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_config extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
        ]);
    }

    public static function execute(int $courseid): array {
        global $USER;

        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
        ]);

        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        $userrole = \local_ai_course_assistant\context_builder::detect_role($params['courseid'], $USER->id);
        $canviewanalytics = has_capability('local/ai_course_assistant:viewanalytics', $context, $USER->id);

        return [
            'enabled' => (bool) get_config('local_ai_course_assistant', 'enabled'),
            'position' => get_config('local_ai_course_assistant', 'position') ?: 'bottom-right',
            'userrole' => $userrole,
            'canviewanalytics' => $canviewanalytics,
        ];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'enabled' => new external_value(PARAM_BOOL, 'Plugin enabled'),
            'position' => new external_value(PARAM_TEXT, 'Widget position'),
            'userrole' => new external_value(PARAM_ALPHANUMEXT, 'User role'),
            'canviewanalytics' => new external_value(PARAM_BOOL, 'Can view analytics'),
        ]);
    }
}
