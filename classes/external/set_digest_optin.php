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
 * v4.0 / M3 — Record the learner's choice on the weekly digest opt-in
 * for a given course.
 *
 * Stored as a per-user preference, not in `course_config_manager`, because
 * this is a learner-level decision, not a course-author setting:
 *
 *   `local_ai_course_assistant_digest_optin_<courseid>` = '1' (opt-in),
 *   '0' (declined / unsubscribed), or absent (never asked yet).
 *
 * The scheduled task `learner_weekly_digest` reads only the '1' rows.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class set_digest_optin extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course id the opt-in applies to'),
            'optin'    => new external_value(PARAM_INT, '1 to opt in, 0 to decline / unsubscribe'),
        ]);
    }

    public static function execute(int $courseid, int $optin): array {
        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
            'optin'    => $optin,
        ]);
        $courseid = (int) $params['courseid'];
        $optin = (int) $params['optin'] ? 1 : 0;

        $coursecontext = \context_course::instance($courseid);
        self::validate_context($coursecontext);
        require_capability('local/ai_course_assistant:use', $coursecontext);

        set_user_preference('local_ai_course_assistant_digest_optin_' . $courseid, (string) $optin);

        return [
            'success' => true,
            'optin'   => $optin,
        ];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'success' => new external_value(PARAM_BOOL, 'Whether the preference was saved'),
            'optin'   => new external_value(PARAM_INT, 'The recorded value (0 or 1)'),
        ]);
    }
}
