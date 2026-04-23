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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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

// Handle "Download my SOLA data" action — GDPR Article 15 right of access,
// FERPA student right to inspect. Produces a JSON bundle of every SOLA record
// tied to the authenticated user across all courses.
if ($action === 'download' && confirm_sesskey()) {
    global $DB;
    $uid = (int)$USER->id;
    $bundle = [
        'generated_at' => date('c'),
        'userid' => $uid,
        'plugin' => 'local_ai_course_assistant',
        'release' => get_config('local_ai_course_assistant', 'release') ?: '3.9.11',
    ];
    $tables = [
        'conversations'   => 'local_ai_course_assistant_convs',
        'messages'        => 'local_ai_course_assistant_msgs',
        'ratings'         => 'local_ai_course_assistant_msg_ratings',
        'study_plans'     => 'local_ai_course_assistant_plans',
        'reminders'       => 'local_ai_course_assistant_reminders',
        'feedback'        => 'local_ai_course_assistant_feedback',
        'survey_responses'=> 'local_ai_course_assistant_survey_resp',
        'ut_responses'    => 'local_ai_course_assistant_ut_resp',
        'audit'           => 'local_ai_course_assistant_audit',
        'practice_scores' => 'local_ai_course_assistant_practice_scores',
        'profiles'        => 'local_ai_course_assistant_profiles',
    ];
    foreach ($tables as $label => $table) {
        try {
            if ($label === 'messages') {
                // messages live under conversations (joined via conversationid).
                $sql = "SELECT m.* FROM {local_ai_course_assistant_msgs} m
                        JOIN {local_ai_course_assistant_convs} c ON c.id = m.conversationid
                        WHERE c.userid = :uid ORDER BY m.timecreated ASC";
                $bundle[$label] = array_values($DB->get_records_sql($sql, ['uid' => $uid]));
            } else {
                $bundle[$label] = array_values($DB->get_records($table, ['userid' => $uid]));
            }
        } catch (\Throwable $e) {
            $bundle[$label] = ['error' => 'table unavailable'];
        }
    }
    \local_ai_course_assistant\audit_logger::log('data_download_self', $uid, 0, ['bundle_keys' => array_keys($bundle)]);
    $filename = \local_ai_course_assistant\branding::filename_slug() . '-data-' . $uid . '-' . date('Ymd') . '.json';
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Cache-Control: no-store');
    echo json_encode($bundle, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

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
    'downloadurl' => new moodle_url($PAGE->url, ['action' => 'download', 'sesskey' => sesskey()]),
    'privacyurl' => new moodle_url('/local/ai_course_assistant/privacy.php'),
];

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('local_ai_course_assistant/user_settings', $templatedata);
echo $OUTPUT->footer();
