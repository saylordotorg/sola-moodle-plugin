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
use local_ai_course_assistant\study_planner;

/**
 * Get the study plan for the current user in a course.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_study_plan extends external_api {

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

        $plan = study_planner::get_plan($USER->id, $params['courseid']);

        if (!$plan) {
            return [
                'hasplan' => false,
                'hours_per_week' => 0.0,
                'preferred_days' => '',
                'preferred_time' => '',
                'plan_data' => '{}',
            ];
        }

        return [
            'hasplan' => true,
            'hours_per_week' => (float) $plan->hours_per_week,
            'preferred_days' => $plan->preferred_days ?? '',
            'preferred_time' => $plan->preferred_time ?? '',
            'plan_data' => $plan->plan_data ?? '{}',
        ];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'hasplan' => new external_value(PARAM_BOOL, 'Whether a plan exists'),
            'hours_per_week' => new external_value(PARAM_FLOAT, 'Hours per week'),
            'preferred_days' => new external_value(PARAM_TEXT, 'Preferred days'),
            'preferred_time' => new external_value(PARAM_TEXT, 'Preferred study time'),
            'plan_data' => new external_value(PARAM_RAW, 'JSON plan data'),
        ]);
    }
}
