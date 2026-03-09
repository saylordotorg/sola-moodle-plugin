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
 * Email study session notes to the current user.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class email_study_notes extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
            'notes' => new external_value(PARAM_RAW, 'Study session notes content'),
        ]);
    }

    public static function execute(int $courseid, string $notes): array {
        global $USER, $DB;

        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid, 'notes' => $notes,
        ]);

        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        $course = $DB->get_record('course', ['id' => $params['courseid']], 'id,fullname', MUST_EXIST);
        $displayName = get_config('local_ai_course_assistant', 'display_name') ?: 'SOLA';

        $message = new \core\message\message();
        $message->component = 'local_ai_course_assistant';
        $message->name = 'study_notes';
        $message->userfrom = \core_user::get_noreply_user();
        $message->userto = $USER;
        $message->subject = $displayName . ' Study Notes — ' . $course->fullname;
        $message->fullmessage = $params['notes'];
        $message->fullmessageformat = FORMAT_PLAIN;
        $message->fullmessagehtml = '<div style="font-family:sans-serif;max-width:600px">'
            . '<h2>' . $displayName . ' Study Notes</h2>'
            . '<p><strong>Course:</strong> ' . htmlspecialchars($course->fullname) . '</p>'
            . '<hr>'
            . '<div style="white-space:pre-wrap">' . htmlspecialchars($params['notes']) . '</div>'
            . '</div>';
        $message->smallmessage = 'Your study notes from ' . $course->fullname;
        $message->notification = 1;

        $sent = message_send($message);

        return ['success' => !empty($sent)];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'success' => new external_value(PARAM_BOOL, 'Whether the email was sent'),
        ]);
    }
}
