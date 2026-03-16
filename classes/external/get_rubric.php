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
use local_ai_course_assistant\rubric_manager;

/**
 * External function to get the active rubric for a course.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_rubric extends external_api {

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
            'type' => new external_value(PARAM_ALPHA, 'Rubric type: conversation or pronunciation'),
        ]);
    }

    /**
     * Get the active rubric for a course and type.
     *
     * @param int $courseid
     * @param string $type
     * @return array
     */
    public static function execute(int $courseid, string $type): array {
        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
            'type' => $type,
        ]);

        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        // Ensure defaults exist before querying.
        rubric_manager::ensure_default_rubrics();

        $rubric = rubric_manager::get_active_rubric($params['courseid'], $params['type']);

        if (!$rubric) {
            return [
                'has_rubric' => false,
                'rubric_id' => 0,
                'title' => '',
                'criteria' => '',
                'type' => $params['type'],
            ];
        }

        return [
            'has_rubric' => true,
            'rubric_id' => (int) $rubric->id,
            'title' => $rubric->title,
            'criteria' => json_encode($rubric->criteria),
            'type' => $rubric->type,
        ];
    }

    /**
     * Returns description of method result value.
     *
     * @return external_single_structure
     */
    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'has_rubric' => new external_value(PARAM_BOOL, 'Whether an active rubric exists'),
            'rubric_id' => new external_value(PARAM_INT, 'Rubric ID (0 if none)'),
            'title' => new external_value(PARAM_TEXT, 'Rubric title'),
            'criteria' => new external_value(PARAM_RAW, 'JSON-encoded array of criterion definitions'),
            'type' => new external_value(PARAM_TEXT, 'Rubric type'),
        ]);
    }
}
