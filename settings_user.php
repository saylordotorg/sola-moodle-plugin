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
 * Student-facing settings page for AI Course Assistant.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

require_login();

$courseid = optional_param('courseid', 0, PARAM_INT);
$action = optional_param('action', '', PARAM_ALPHA);
$confirm = optional_param('confirm', 0, PARAM_INT);

$PAGE->set_url('/local/ai_course_assistant/settings_user.php', ['courseid' => $courseid]);
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('usersettings:title', 'local_ai_course_assistant'));
$PAGE->set_heading(get_string('usersettings:title', 'local_ai_course_assistant'));

// Handle delete actions.
if ($action === 'delete_course' && $courseid && confirm_sesskey()) {
    if ($confirm) {
        $manager = new \local_ai_course_assistant\conversation_manager();
        $manager->delete_course_data($courseid, $USER->id);
        redirect($PAGE->url, get_string('usersettings:data_deleted', 'local_ai_course_assistant'), null, \core\output\notification::NOTIFY_SUCCESS);
    } else {
        // Show confirmation page.
        echo $OUTPUT->header();
        $course = get_course($courseid);
        echo $OUTPUT->confirm(
            get_string('usersettings:confirm_delete_course', 'local_ai_course_assistant', $course->fullname),
            new moodle_url($PAGE->url, ['action' => 'delete_course', 'courseid' => $courseid, 'confirm' => 1, 'sesskey' => sesskey()]),
            $PAGE->url
        );
        echo $OUTPUT->footer();
        die;
    }
}

if ($action === 'delete_all' && confirm_sesskey()) {
    if ($confirm) {
        $manager = new \local_ai_course_assistant\conversation_manager();
        $manager->delete_user_data($USER->id);
        redirect($PAGE->url, get_string('usersettings:data_deleted', 'local_ai_course_assistant'), null, \core\output\notification::NOTIFY_SUCCESS);
    } else {
        // Show confirmation page.
        echo $OUTPUT->header();
        echo $OUTPUT->confirm(
            get_string('usersettings:confirm_delete_all', 'local_ai_course_assistant'),
            new moodle_url($PAGE->url, ['action' => 'delete_all', 'confirm' => 1, 'sesskey' => sesskey()]),
            $PAGE->url
        );
        echo $OUTPUT->footer();
        die;
    }
}

// Get user's data usage stats.
$manager = new \local_ai_course_assistant\conversation_manager();
$stats = $manager->get_user_stats($USER->id);

// Get per-course breakdown.
$coursedata = [];
foreach ($stats['courses'] as $cid => $coursestat) {
    $course = get_course($cid);
    $coursedata[] = [
        'courseid' => $cid,
        'coursename' => $course->fullname,
        'messagecount' => $coursestat['messages'],
        'lastactivity' => $coursestat['lastactivity'] ? userdate($coursestat['lastactivity']) : get_string('never'),
        'deleteurl' => new moodle_url($PAGE->url, [
            'action' => 'delete_course',
            'courseid' => $cid,
            'sesskey' => sesskey()
        ]),
    ];
}

$templatedata = [
    'totalmessages' => $stats['total_messages'],
    'totalconversations' => $stats['total_conversations'],
    'coursedata' => $coursedata,
    'deleteallurl' => new moodle_url($PAGE->url, ['action' => 'delete_all', 'sesskey' => sesskey()]),
];

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('local_ai_course_assistant/user_settings', $templatedata);
echo $OUTPUT->footer();
