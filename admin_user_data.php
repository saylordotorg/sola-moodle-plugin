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
 * Admin page: find a learner and export or purge their SOLA data.
 *
 * This is the operational path for a GDPR Article 15 (access) or Article 17
 * (erasure) request. Wraps the Moodle Privacy API plus the plugin's own
 * conversation manager, with a preview of row counts per table and a two
 * step confirmation for the purge action.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

require_login();

$syscontext = context_system::instance();
require_capability('moodle/site:config', $syscontext);

$targetuserid = optional_param('targetuserid', 0, PARAM_INT);
$action       = optional_param('action', '', PARAM_ALPHA);
$confirm      = optional_param('confirm', 0, PARAM_INT);

$PAGE->set_url('/local/ai_course_assistant/admin_user_data.php');
$PAGE->set_context($syscontext);
$PAGE->set_title(get_string('admin:user_data:title', 'local_ai_course_assistant',
    \local_ai_course_assistant\branding::short_name()));
$PAGE->set_heading(get_string('admin:user_data:title', 'local_ai_course_assistant',
    \local_ai_course_assistant\branding::short_name()));

$tables = [
    'convs'          => 'local_ai_course_assistant_convs',
    'ratings'        => 'local_ai_course_assistant_msg_ratings',
    'plans'          => 'local_ai_course_assistant_plans',
    'reminders'      => 'local_ai_course_assistant_reminders',
    'feedback'       => 'local_ai_course_assistant_feedback',
    'survey_resp'    => 'local_ai_course_assistant_survey_resp',
    'ut_resp'        => 'local_ai_course_assistant_ut_resp',
    'audit'          => 'local_ai_course_assistant_audit',
    'practice_scores'=> 'local_ai_course_assistant_practice_scores',
    'profiles'       => 'local_ai_course_assistant_profiles',
];

// Handle download JSON action.
if ($action === 'download' && $targetuserid && confirm_sesskey()) {
    global $DB;
    $bundle = [
        'generated_at' => date('c'),
        'userid' => $targetuserid,
        'exported_by' => (int)$USER->id,
    ];
    foreach ($tables as $label => $table) {
        try {
            $bundle[$label] = array_values($DB->get_records($table, ['userid' => $targetuserid]));
        } catch (\Throwable $e) {
            $bundle[$label] = ['error' => 'table unavailable'];
        }
    }
    // Messages join through convs.
    try {
        $sql = "SELECT m.* FROM {local_ai_course_assistant_msgs} m
                JOIN {local_ai_course_assistant_convs} c ON c.id = m.conversationid
                WHERE c.userid = :uid ORDER BY m.timecreated ASC";
        $bundle['messages'] = array_values($DB->get_records_sql($sql, ['uid' => $targetuserid]));
    } catch (\Throwable $e) {
        $bundle['messages'] = ['error' => 'table unavailable'];
    }
    \local_ai_course_assistant\audit_logger::log('admin_export_learner_data',
        (int)$USER->id, 0, ['target_userid' => $targetuserid]);
    header('Content-Type: application/json; charset=utf-8');
    $fnslug = \local_ai_course_assistant\branding::filename_slug();
    header('Content-Disposition: attachment; filename="' . $fnslug . '-data-' . $targetuserid . '-' . date('Ymd') . '.json"');
    header('Cache-Control: no-store');
    echo json_encode($bundle, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

// Handle purge action (two step confirm).
if ($action === 'purge' && $targetuserid && confirm_sesskey()) {
    if ($confirm) {
        \local_ai_course_assistant\conversation_manager::delete_user_data($targetuserid);
        try {
            $contextlist = \core_privacy\manager::get_contexts_for_userid(
                $targetuserid, 'local_ai_course_assistant');
            if ($contextlist && $contextlist->count() > 0) {
                $approved = new \core_privacy\local\request\approved_contextlist(
                    \core\user::get_user($targetuserid) ?: (object)['id' => $targetuserid],
                    'local_ai_course_assistant',
                    $contextlist->get_contextids()
                );
                \local_ai_course_assistant\privacy\provider::delete_data_for_user($approved);
            }
        } catch (\Throwable $e) {
            debugging('Privacy API purge threw: ' . $e->getMessage(), DEBUG_DEVELOPER);
        }
        \local_ai_course_assistant\audit_logger::log('admin_purge_learner_data',
            (int)$USER->id, 0, ['target_userid' => $targetuserid]);
        redirect($PAGE->url, get_string('admin:user_data:purged', 'local_ai_course_assistant'),
            null, \core\output\notification::NOTIFY_SUCCESS);
    } else {
        echo $OUTPUT->header();
        $target = core_user::get_user($targetuserid);
        $targetname = $target ? fullname($target) : ('id ' . $targetuserid);
        echo $OUTPUT->confirm(
            get_string('admin:user_data:confirm_purge', 'local_ai_course_assistant', $targetname),
            new moodle_url($PAGE->url, [
                'action' => 'purge',
                'targetuserid' => $targetuserid,
                'confirm' => 1,
                'sesskey' => sesskey(),
            ]),
            $PAGE->url
        );
        echo $OUTPUT->footer();
        die;
    }
}

echo $OUTPUT->header();

echo \html_writer::tag('p',
    get_string('admin:user_data:intro', 'local_ai_course_assistant'),
    ['style' => 'max-width:720px']);

// User search form.
echo '<form method="get" action="' . $PAGE->url->out() . '" style="margin:16px 0">';
echo '<label style="display:block;margin-bottom:6px;font-weight:600">'
    . get_string('admin:user_data:search_label', 'local_ai_course_assistant')
    . '</label>';
echo '<input type="number" name="targetuserid" value="' . $targetuserid
    . '" min="1" style="padding:6px 10px;font-size:14px;width:160px" placeholder="user id" />';
echo ' <button type="submit" class="btn btn-primary" style="padding:6px 14px">'
    . get_string('admin:user_data:lookup', 'local_ai_course_assistant') . '</button>';
echo '</form>';

if ($targetuserid) {
    $target = core_user::get_user($targetuserid);
    if (!$target) {
        echo $OUTPUT->notification(get_string('admin:user_data:not_found', 'local_ai_course_assistant'),
            'notifyerror');
    } else {
        echo '<h3>' . s(fullname($target)) . ' <small style="color:#888">(id ' . $targetuserid
            . ')</small></h3>';

        // Row count preview.
        global $DB;
        echo '<table class="generaltable" style="margin-top:12px">';
        echo '<thead><tr><th>Table</th><th>Rows for this user</th></tr></thead><tbody>';
        $totalrows = 0;
        foreach ($tables as $label => $table) {
            try {
                $count = $DB->count_records($table, ['userid' => $targetuserid]);
            } catch (\Throwable $e) {
                $count = 0;
            }
            $totalrows += $count;
            echo '<tr><td><code>' . $label . '</code></td><td>' . $count . '</td></tr>';
        }
        // Messages join.
        try {
            $msgsql = "SELECT COUNT(m.id) FROM {local_ai_course_assistant_msgs} m
                       JOIN {local_ai_course_assistant_convs} c ON c.id = m.conversationid
                       WHERE c.userid = :uid";
            $msgcount = $DB->count_records_sql($msgsql, ['uid' => $targetuserid]);
        } catch (\Throwable $e) {
            $msgcount = 0;
        }
        $totalrows += $msgcount;
        echo '<tr><td><code>messages</code></td><td>' . $msgcount . '</td></tr>';
        echo '<tr><th>total</th><th>' . $totalrows . '</th></tr>';
        echo '</tbody></table>';

        // Actions.
        echo '<div style="margin-top:16px;display:flex;gap:12px">';
        $downloadurl = new moodle_url($PAGE->url, [
            'action' => 'download',
            'targetuserid' => $targetuserid,
            'sesskey' => sesskey(),
        ]);
        echo '<a class="btn btn-secondary" href="' . $downloadurl->out(false) . '">'
            . get_string('admin:user_data:download', 'local_ai_course_assistant') . '</a>';
        $purgeurl = new moodle_url($PAGE->url, [
            'action' => 'purge',
            'targetuserid' => $targetuserid,
            'sesskey' => sesskey(),
        ]);
        echo '<a class="btn btn-danger" href="' . $purgeurl->out(false) . '">'
            . get_string('admin:user_data:purge', 'local_ai_course_assistant') . '</a>';
        echo '</div>';
    }
}

echo $OUTPUT->footer();
