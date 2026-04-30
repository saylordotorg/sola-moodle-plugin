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
 * Per-course Instructor & Instructional Designer Dashboard.
 *
 * Aggregate-only by default. Reveal-real-names toggle requires the same
 * `viewanalytics` capability and writes a FERPA audit row on every reveal.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\instructor_analytics;
use local_ai_course_assistant\objective_manager;
use local_ai_course_assistant\audit_logger;
use local_ai_course_assistant\security;

require_login();

$courseid = required_param('courseid', PARAM_INT);
$range    = optional_param('range', 30, PARAM_INT);   // 7, 30, 90, 0=all
$gapdays  = optional_param('gapdays', 7, PARAM_INT);
$action   = optional_param('action', '', PARAM_ALPHA);

$course = get_course($courseid);
$coursecontext = context_course::instance($courseid);
require_capability('local/ai_course_assistant:viewanalytics', $coursecontext);

$pageurl = new moodle_url('/local/ai_course_assistant/instructor_dashboard.php',
    ['courseid' => $courseid, 'range' => $range, 'gapdays' => $gapdays]);

$PAGE->set_url($pageurl);
$PAGE->set_context($coursecontext);
$PAGE->set_pagelayout('incourse');
$PAGE->set_course($course);
$PAGE->set_title(get_string('instructor_dashboard:title', 'local_ai_course_assistant',
    \local_ai_course_assistant\branding::short_name()));
$PAGE->set_heading($course->fullname);

security::send_security_headers();

// v4.8.0: needs-review queue resolve action.
if ($action === 'resolvereview' && confirm_sesskey()) {
    $source = required_param('source', PARAM_ALPHA);
    $sourceid = required_param('sourceid', PARAM_INT);
    $note = optional_param('note', '', PARAM_TEXT);
    \local_ai_course_assistant\review_queue::mark_resolved(
        $source, $sourceid, $courseid, (int) $USER->id, $note
    );
    redirect($pageurl, get_string('instructor_dashboard:review_resolved', 'local_ai_course_assistant'),
        null, \core\output\notification::NOTIFY_SUCCESS);
}

// Reveal-real-names toggle (session-scoped + audit logged).
if ($action === 'togglenames' && confirm_sesskey()) {
    $key = 'sola_id_show_real_names_' . $courseid;
    if (!empty($_SESSION[$key])) {
        unset($_SESSION[$key]);
    } else {
        $_SESSION[$key] = true;
        audit_logger::log(
            'instructor_reveal_learner_identities',
            (int) $USER->id,
            $courseid,
            ['range_days' => (int) $range]
        );
    }
    redirect($pageurl);
}
$showrealnames = !empty($_SESSION['sola_id_show_real_names_' . $courseid]);

$since = $range > 0 ? (time() - ($range * 86400)) : 0;

// Compute everything up front so the page renders deterministically.
$summary       = instructor_analytics::summary($courseid, $since);
$mastery       = instructor_analytics::mastery_aggregate($courseid);
$topics        = instructor_analytics::top_topics($courseid, $since, 10);
$confusion     = instructor_analytics::confusion_heatmap($courseid, $since, 15);
$ratings       = instructor_analytics::ratings_summary($courseid, $since);
$gap           = instructor_analytics::engagement_gap($courseid, $gapdays);
$reviewqueue   = \local_ai_course_assistant\review_queue::pending_for_course($courseid, 50);

echo $OUTPUT->header();

// ── Top navigation strip ────────────────────────────────────────────────────
// v4.3.3: explicit links back to the course, the SOLA course-level settings,
// and the SOLA analytics drill-down for this course. Visible to anyone who
// reaches this page (cap-gated above) so designers can hop between the
// dashboard, the controls, and the cross-course analytics in one click.
$navlinks = [
    html_writer::link(
        new moodle_url('/course/view.php', ['id' => $courseid]),
        get_string('instructor_dashboard:nav_back_course', 'local_ai_course_assistant'),
        ['class' => 'btn btn-sm btn-outline-secondary']
    ),
    html_writer::link(
        new moodle_url('/local/ai_course_assistant/course_settings.php', ['courseid' => $courseid]),
        get_string('instructor_dashboard:nav_settings', 'local_ai_course_assistant'),
        ['class' => 'btn btn-sm btn-outline-secondary']
    ),
    html_writer::link(
        new moodle_url('/local/ai_course_assistant/analytics.php', ['courseid' => $courseid, 'range' => $range]),
        get_string('instructor_dashboard:nav_analytics', 'local_ai_course_assistant'),
        ['class' => 'btn btn-sm btn-outline-secondary']
    ),
];
echo html_writer::div(implode(' ', $navlinks),
    'aica-id-nav mb-3 d-flex flex-wrap',
    ['style' => 'gap:8px']);

// ── Header card ────────────────────────────────────────────────────────────
echo html_writer::start_div('aica-id-dashboard');
echo html_writer::tag('h2', get_string('instructor_dashboard:title', 'local_ai_course_assistant',
    \local_ai_course_assistant\branding::short_name()));
echo html_writer::tag('p', get_string('instructor_dashboard:intro', 'local_ai_course_assistant'),
    ['class' => 'text-muted']);

// Period + reveal-names + gap-days controls.
echo html_writer::start_div('aica-id-controls', ['style' => 'display:flex;gap:16px;align-items:center;margin:14px 0']);

echo html_writer::start_tag('form', ['method' => 'get', 'action' => $pageurl->out(false), 'class' => 'd-inline']);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'courseid', 'value' => $courseid]);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'gapdays', 'value' => $gapdays]);
echo html_writer::tag('label', get_string('instructor_dashboard:period', 'local_ai_course_assistant')
    . ' ' . html_writer::select(
        [7 => '7d', 30 => '30d', 90 => '90d', 0 => get_string('instructor_dashboard:period_all', 'local_ai_course_assistant')],
        'range', $range, false, ['onchange' => 'this.form.submit()']
    ),
    ['style' => 'margin-bottom:0']);
echo html_writer::end_tag('form');

echo html_writer::start_tag('form', ['method' => 'get', 'action' => $pageurl->out(false), 'class' => 'd-inline']);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'courseid', 'value' => $courseid]);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'range', 'value' => $range]);
echo html_writer::tag('label', get_string('instructor_dashboard:gap_days', 'local_ai_course_assistant')
    . ' ' . html_writer::empty_tag('input', [
        'type' => 'number', 'name' => 'gapdays', 'value' => $gapdays, 'min' => 1, 'max' => 365,
        'style' => 'width:60px;margin-left:4px',
        'onchange' => 'this.form.submit()',
    ]),
    ['style' => 'margin-bottom:0']);
echo html_writer::end_tag('form');

$togglelabel = $showrealnames
    ? get_string('instructor_dashboard:hide_names', 'local_ai_course_assistant')
    : get_string('instructor_dashboard:show_names', 'local_ai_course_assistant');
echo html_writer::start_tag('form', ['method' => 'get', 'action' => $pageurl->out(false), 'class' => 'd-inline']);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'courseid', 'value' => $courseid]);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'range', 'value' => $range]);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'gapdays', 'value' => $gapdays]);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'action', 'value' => 'togglenames']);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'sesskey', 'value' => sesskey()]);
echo html_writer::tag('button', $togglelabel, [
    'type' => 'submit',
    'class' => 'btn btn-sm ' . ($showrealnames ? 'btn-warning' : 'btn-secondary'),
]);
echo html_writer::end_tag('form');

echo html_writer::end_div();

// Summary tiles.
echo html_writer::start_div('aica-id-tiles', ['style' => 'display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin-bottom:18px']);
$tiles = [
    ['label' => get_string('instructor_dashboard:active_learners', 'local_ai_course_assistant'),
     'value' => number_format($summary['active'])],
    ['label' => get_string('instructor_dashboard:total_messages', 'local_ai_course_assistant'),
     'value' => number_format($summary['total_messages'])],
    ['label' => get_string('instructor_dashboard:avg_per_learner', 'local_ai_course_assistant'),
     'value' => number_format($summary['avg_per_learner'], 1)],
    ['label' => get_string('instructor_dashboard:last_activity', 'local_ai_course_assistant'),
     'value' => $summary['last_activity'] > 0 ? userdate($summary['last_activity'], '%b %e, %H:%M') : '—'],
];
foreach ($tiles as $t) {
    echo html_writer::start_div('', ['style' => 'background:#f9fafb;border:1px solid #e5e7eb;border-radius:8px;padding:14px']);
    echo html_writer::tag('div', s($t['label']),
        ['style' => 'font-size:11px;text-transform:uppercase;letter-spacing:0.04em;color:#6b7280;font-weight:600']);
    echo html_writer::tag('div', s((string) $t['value']),
        ['style' => 'font-size:22px;font-weight:700;color:#111827;margin-top:4px']);
    echo html_writer::end_div();
}
echo html_writer::end_div();

// ── Mastery aggregate ─────────────────────────────────────────────────────
echo html_writer::tag('h3', get_string('instructor_dashboard:mastery_heading', 'local_ai_course_assistant'));
if (empty($mastery)) {
    echo html_writer::tag('p', get_string('instructor_dashboard:mastery_off', 'local_ai_course_assistant'),
        ['class' => 'text-muted']);
} else {
    echo '<table class="generaltable" style="width:100%">';
    echo '<thead><tr>';
    echo '<th>' . s(get_string('instructor_dashboard:col_objective', 'local_ai_course_assistant')) . '</th>';
    echo '<th>' . s(get_string('instructor_dashboard:col_mastered', 'local_ai_course_assistant')) . '</th>';
    echo '<th>' . s(get_string('instructor_dashboard:col_learning', 'local_ai_course_assistant')) . '</th>';
    echo '<th>' . s(get_string('instructor_dashboard:col_not_started', 'local_ai_course_assistant')) . '</th>';
    echo '<th>' . s(get_string('instructor_dashboard:col_attempts', 'local_ai_course_assistant')) . '</th>';
    echo '</tr></thead><tbody>';
    foreach ($mastery as $row) {
        echo '<tr>';
        echo '<td>' . ($row['code'] !== '' ? '<code>' . s($row['code']) . '</code> ' : '') . s($row['title']) . '</td>';
        echo '<td><span style="color:#0a7d2c;font-weight:600">' . $row['mastered'] . '</span> ('
            . $row['mastered_pct'] . '%)</td>';
        echo '<td><span style="color:#92400e">' . $row['learning'] . '</span> ('
            . $row['learning_pct'] . '%)</td>';
        echo '<td><span style="color:#6b7280">' . $row['not_started'] . '</span> ('
            . $row['not_started_pct'] . '%)</td>';
        echo '<td>' . number_format($row['attempts']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

// ── Most-asked topics ─────────────────────────────────────────────────────
echo html_writer::tag('h3', get_string('instructor_dashboard:topics_heading', 'local_ai_course_assistant'),
    ['style' => 'margin-top:24px']);
if (empty($topics)) {
    echo html_writer::tag('p', get_string('instructor_dashboard:topics_empty', 'local_ai_course_assistant'),
        ['class' => 'text-muted']);
} else {
    echo '<ol style="line-height:1.8">';
    foreach ($topics as $t) {
        $cat = $t['category'] !== '' ? ' <span style="color:#9ca3af;font-size:11px">[' . s($t['category']) . ']</span>' : '';
        echo '<li>' . s($t['keyword']) . ' <span style="color:#6b7280">(' . $t['frequency'] . ')</span>' . $cat . '</li>';
    }
    echo '</ol>';
}

// ── Confusion heatmap ─────────────────────────────────────────────────────
echo html_writer::tag('h3', get_string('instructor_dashboard:confusion_heading', 'local_ai_course_assistant'),
    ['style' => 'margin-top:24px']);
if (empty($confusion)) {
    echo html_writer::tag('p', get_string('instructor_dashboard:confusion_empty', 'local_ai_course_assistant'),
        ['class' => 'text-muted']);
} else {
    echo '<table class="generaltable" style="width:100%">';
    echo '<thead><tr>';
    echo '<th>' . s(get_string('instructor_dashboard:col_module', 'local_ai_course_assistant')) . '</th>';
    echo '<th>' . s(get_string('instructor_dashboard:col_questions', 'local_ai_course_assistant')) . '</th>';
    echo '<th>' . s(get_string('instructor_dashboard:col_distinct_learners', 'local_ai_course_assistant')) . '</th>';
    echo '</tr></thead><tbody>';
    foreach ($confusion as $row) {
        $modlabel = $row['name'] !== '' ? $row['name'] : ('cmid ' . $row['cmid']);
        if ($row['cmid'] > 0 && $row['name'] !== '' && $row['modname'] !== '') {
            $modurl = new moodle_url('/mod/' . $row['modname'] . '/view.php', ['id' => $row['cmid']]);
            $modlabel = html_writer::link($modurl, s($row['name']), ['target' => '_blank']);
        } else {
            $modlabel = s($modlabel);
        }
        echo '<tr>';
        echo '<td>' . $modlabel . '</td>';
        echo '<td>' . number_format($row['question_count']) . '</td>';
        echo '<td>' . number_format($row['distinct_learners']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}

// ── Helpful / unhelpful rates ─────────────────────────────────────────────
echo html_writer::tag('h3', get_string('instructor_dashboard:ratings_heading', 'local_ai_course_assistant'),
    ['style' => 'margin-top:24px']);
$total = $ratings['positive'] + $ratings['negative'];
echo '<p>';
echo s(get_string('instructor_dashboard:ratings_summary', 'local_ai_course_assistant', (object) [
    'positive'       => $ratings['positive'],
    'negative'       => $ratings['negative'],
    'hallucinations' => $ratings['hallucinations'],
    'pct'            => $total > 0 ? round(($ratings['positive'] / $total) * 100, 1) : 0,
]));
echo '</p>';
if (!empty($ratings['low_rated_by_module'])) {
    echo '<details style="margin-top:8px">';
    echo '<summary style="cursor:pointer;font-weight:600">'
        . s(get_string('instructor_dashboard:ratings_low_module', 'local_ai_course_assistant')) . '</summary>';
    echo '<table class="generaltable" style="width:100%;margin-top:8px">';
    echo '<thead><tr><th>'
        . s(get_string('instructor_dashboard:col_module', 'local_ai_course_assistant'))
        . '</th><th>' . s(get_string('instructor_dashboard:col_low_rated', 'local_ai_course_assistant'))
        . '</th></tr></thead><tbody>';
    foreach ($ratings['low_rated_by_module'] as $row) {
        $name = $row['name'] !== '' ? $row['name'] : ('cmid ' . $row['cmid']);
        echo '<tr><td>' . s($name) . '</td><td>' . $row['low_rated'] . '</td></tr>';
    }
    echo '</tbody></table></details>';
}

// ── Engagement gap ────────────────────────────────────────────────────────
echo html_writer::tag('h3', get_string('instructor_dashboard:gap_heading', 'local_ai_course_assistant'),
    ['style' => 'margin-top:24px']);
echo '<p>';
echo s(get_string('instructor_dashboard:gap_summary', 'local_ai_course_assistant', (object) [
    'not_seen' => $gap['not_seen'],
    'enrolled' => $gap['enrolled'],
    'days'     => $gapdays,
]));
echo '</p>';
if ($showrealnames && !empty($gap['sample_userids'])) {
    global $DB;
    list($insql, $inparams) = $DB->get_in_or_equal($gap['sample_userids'], SQL_PARAMS_NAMED, 'uid');
    $users = $DB->get_records_sql(
        "SELECT id, firstname, lastname FROM {user} WHERE id $insql ORDER BY lastname, firstname",
        $inparams
    );
    echo '<details><summary style="cursor:pointer;font-weight:600">'
        . s(get_string('instructor_dashboard:gap_show_sample', 'local_ai_course_assistant'))
        . '</summary><ul>';
    foreach ($users as $u) {
        echo '<li>' . s(fullname($u)) . '</li>';
    }
    echo '</ul></details>';
}

// ── v4.8.0: Needs-review queue ────────────────────────────────────────────
echo html_writer::tag('h3', get_string('instructor_dashboard:review_heading', 'local_ai_course_assistant'),
    ['style' => 'margin-top:32px']);
echo html_writer::tag('p',
    get_string('instructor_dashboard:review_intro', 'local_ai_course_assistant'),
    ['class' => 'text-muted', 'style' => 'max-width:820px']);
if (empty($reviewqueue)) {
    echo html_writer::tag('p',
        get_string('instructor_dashboard:review_empty', 'local_ai_course_assistant'),
        ['class' => 'text-success']);
} else {
    echo '<table class="generaltable"><thead><tr>'
        . '<th>' . s(get_string('instructor_dashboard:review_col_when', 'local_ai_course_assistant')) . '</th>'
        . '<th>' . s(get_string('instructor_dashboard:review_col_source', 'local_ai_course_assistant')) . '</th>'
        . '<th>' . s(get_string('instructor_dashboard:review_col_who', 'local_ai_course_assistant')) . '</th>'
        . '<th>' . s(get_string('instructor_dashboard:review_col_summary', 'local_ai_course_assistant')) . '</th>'
        . '<th></th></tr></thead><tbody>';
    foreach ($reviewqueue as $row) {
        $sourcelabel = get_string('instructor_dashboard:review_source_' . $row['source'],
            'local_ai_course_assistant');
        $resolveurl = new moodle_url('/local/ai_course_assistant/instructor_dashboard.php',
            [
                'courseid' => $courseid,
                'range'    => $range,
                'gapdays'  => $gapdays,
                'action'   => 'resolvereview',
                'source'   => $row['source'],
                'sourceid' => $row['sourceid'],
                'sesskey'  => sesskey(),
            ]);
        echo '<tr>'
            . '<td><small>' . s(userdate($row['when'], '%Y-%m-%d %H:%M')) . '</small></td>'
            . '<td><span class="badge badge-secondary">' . s($sourcelabel) . '</span></td>'
            . '<td>' . s($row['who']) . '</td>'
            . '<td><small>' . s($row['summary']) . '</small></td>'
            . '<td><a href="' . $resolveurl->out(false) . '" class="btn btn-sm btn-outline-success">'
            . s(get_string('instructor_dashboard:review_resolve', 'local_ai_course_assistant'))
            . '</a></td>'
            . '</tr>';
    }
    echo '</tbody></table>';
}

echo html_writer::end_div();

echo $OUTPUT->footer();
