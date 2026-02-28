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

/**
 * Unsubscribe page for study reminders.
 *
 * Accessible without login — uses a unique token for authentication.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\reminder_manager;

$token = required_param('token', PARAM_ALPHANUM);

$PAGE->set_context(\context_system::instance());
$PAGE->set_url(new moodle_url('/local/ai_course_assistant/unsubscribe.php', ['token' => $token]));
$PAGE->set_title(get_string('unsubscribe:title', 'local_ai_course_assistant'));
$PAGE->set_pagelayout('standard');

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('unsubscribe:title', 'local_ai_course_assistant'));

$result = reminder_manager::unsubscribe_by_token($token);

if ($result) {
    echo $OUTPUT->notification(
        get_string('unsubscribe:success', 'local_ai_course_assistant'),
        \core\output\notification::NOTIFY_SUCCESS
    );
    echo \html_writer::tag('p', get_string('unsubscribe:resubscribe', 'local_ai_course_assistant'));
} else {
    echo $OUTPUT->notification(
        get_string('unsubscribe:invalid', 'local_ai_course_assistant'),
        \core\output\notification::NOTIFY_ERROR
    );
}

echo $OUTPUT->footer();
