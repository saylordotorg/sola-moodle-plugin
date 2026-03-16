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
 * External function to save a practice score.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class save_practice_score extends external_api {

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
            'rubricid' => new external_value(PARAM_INT, 'Rubric ID'),
            'session_type' => new external_value(PARAM_ALPHA, 'Session type: conversation or pronunciation'),
            'scores' => new external_value(PARAM_RAW, 'JSON-encoded array of per-criterion scores'),
            'overall_score' => new external_value(PARAM_INT, 'Overall score for the session'),
            'ai_feedback' => new external_value(PARAM_RAW, 'AI-generated feedback text'),
            'session_duration' => new external_value(PARAM_INT, 'Session duration in seconds'),
        ]);
    }

    /**
     * Save a practice score.
     *
     * @param int $courseid
     * @param int $rubricid
     * @param string $sessiontype
     * @param string $scores JSON-encoded scores.
     * @param int $overallscore
     * @param string $aifeedback
     * @param int $sessionduration
     * @return array
     */
    public static function execute(int $courseid, int $rubricid, string $sessiontype,
            string $scores, int $overallscore, string $aifeedback, int $sessionduration): array {
        global $USER;

        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
            'rubricid' => $rubricid,
            'session_type' => $sessiontype,
            'scores' => $scores,
            'overall_score' => $overallscore,
            'ai_feedback' => $aifeedback,
            'session_duration' => $sessionduration,
        ]);

        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        $decoded = json_decode($params['scores'], true);
        if (!is_array($decoded)) {
            return ['success' => false, 'scoreid' => 0];
        }

        // Validate each score entry has the required keys.
        $clean = [];
        foreach ($decoded as $entry) {
            if (!isset($entry['name']) || !isset($entry['score'])) {
                continue;
            }
            $item = [
                'name' => (string) $entry['name'],
                'score' => (int) $entry['score'],
            ];
            if (isset($entry['feedback'])) {
                $item['feedback'] = (string) $entry['feedback'];
            }
            $clean[] = $item;
        }

        if (empty($clean)) {
            return ['success' => false, 'scoreid' => 0];
        }

        $scoreid = rubric_manager::save_score(
            $params['rubricid'],
            $USER->id,
            $params['courseid'],
            $params['session_type'],
            $clean,
            $params['overall_score'],
            $params['ai_feedback'],
            $params['session_duration']
        );

        return ['success' => true, 'scoreid' => $scoreid];
    }

    /**
     * Returns description of method result value.
     *
     * @return external_single_structure
     */
    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'success' => new external_value(PARAM_BOOL, 'Whether the score was saved'),
            'scoreid' => new external_value(PARAM_INT, 'The new score record ID (0 on failure)'),
        ]);
    }
}
