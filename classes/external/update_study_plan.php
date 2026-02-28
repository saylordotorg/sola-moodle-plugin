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
 * Update or create a study plan for the current user.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class update_study_plan extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
            'hours_per_week' => new external_value(PARAM_FLOAT, 'Hours per week'),
            'preferred_days' => new external_value(PARAM_TEXT, 'Preferred days, comma-separated', VALUE_DEFAULT, ''),
            'preferred_time' => new external_value(PARAM_ALPHA, 'Preferred study time', VALUE_DEFAULT, ''),
            'plan_data' => new external_value(PARAM_RAW, 'JSON plan data', VALUE_DEFAULT, '{}'),
        ]);
    }

    public static function execute(
        int $courseid,
        float $hours_per_week,
        string $preferred_days = '',
        string $preferred_time = '',
        string $plan_data = '{}'
    ): array {
        global $USER;

        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
            'hours_per_week' => $hours_per_week,
            'preferred_days' => $preferred_days,
            'preferred_time' => $preferred_time,
            'plan_data' => $plan_data,
        ]);

        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        $plandata = json_decode($params['plan_data'], true) ?: [];

        study_planner::save_plan(
            $USER->id,
            $params['courseid'],
            $params['hours_per_week'],
            $plandata,
            $params['preferred_days'],
            $params['preferred_time']
        );

        return ['success' => true];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'success' => new external_value(PARAM_BOOL, 'Success flag'),
        ]);
    }
}
