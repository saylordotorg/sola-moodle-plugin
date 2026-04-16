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
 * SOLA Analytics dashboard — site-admin only.
 *
 * Shows cross-course summary + per-course analytics with SOLA enable/disable toggles.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\analytics;

require_login();

// Site-admin only.
$syscontext = context_system::instance();
require_capability('moodle/site:config', $syscontext);

$courseid = optional_param('courseid', 0, PARAM_INT);
$range    = optional_param('range', 30, PARAM_INT); // 7, 30, 0 = all.
$action   = optional_param('action', '', PARAM_ALPHA);

// ── Handle SOLA enable/disable toggle POST ──────────────────────────────────
if ($action === 'toggle' && confirm_sesskey()) {
    $togglecourseid = required_param('togglecourseid', PARAM_INT);
    $enabled = required_param('enabled', PARAM_INT);
    set_config('sola_enabled_course_' . $togglecourseid, $enabled ? '1' : '0', 'local_ai_course_assistant');
    redirect(new moodle_url('/local/ai_course_assistant/analytics.php',
        ['courseid' => $courseid, 'range' => $range]));
}

// ── Handle per-course user testing toggle POST ──────────────────────────────
if ($action === 'toggleut' && confirm_sesskey()) {
    $togglecourseid = required_param('togglecourseid', PARAM_INT);
    $utvalue = required_param('utvalue', PARAM_RAW);
    // '' = inherit global, '1' = force on, '0' = force off.
    if ($utvalue === '') {
        unset_config('sola_usertesting_course_' . $togglecourseid, 'local_ai_course_assistant');
    } else {
        set_config('sola_usertesting_course_' . $togglecourseid, $utvalue, 'local_ai_course_assistant');
    }
    redirect(new moodle_url('/local/ai_course_assistant/analytics.php',
        ['courseid' => $courseid, 'range' => $range]));
}

// ── Handle bulk actions (SOLA enable/disable, user testing enable/disable) ──
if ($action === 'bulktoggle' && confirm_sesskey()) {
    $enabled = required_param('enabled', PARAM_INT);
    $scope = optional_param('scope', 'all', PARAM_ALPHA); // 'all' or 'selected'.
    $selected_ids = optional_param('selected_ids', '', PARAM_RAW);
    if ($scope === 'selected' && !empty($selected_ids)) {
        $ids = array_map('intval', explode(',', $selected_ids));
    } else {
        $ids = array_map(function($c) { return (int)$c->id; },
            $DB->get_records_sql("SELECT c.id FROM {course} c WHERE c.id > 1 AND c.visible = 1"));
    }
    foreach ($ids as $cid) {
        set_config('sola_enabled_course_' . $cid, $enabled ? '1' : '0', 'local_ai_course_assistant');
    }
    redirect(new moodle_url('/local/ai_course_assistant/analytics.php',
        ['courseid' => $courseid, 'range' => $range]));
}

if ($action === 'bulktoggleut' && confirm_sesskey()) {
    $utvalue = required_param('utvalue', PARAM_RAW);
    $scope = optional_param('scope', 'all', PARAM_ALPHA);
    $selected_ids = optional_param('selected_ids', '', PARAM_RAW);
    if ($scope === 'selected' && !empty($selected_ids)) {
        $ids = array_map('intval', explode(',', $selected_ids));
    } else {
        $ids = array_map(function($c) { return (int)$c->id; },
            $DB->get_records_sql("SELECT c.id FROM {course} c WHERE c.id > 1 AND c.visible = 1"));
    }
    foreach ($ids as $cid) {
        if ($utvalue === '') {
            unset_config('sola_usertesting_course_' . $cid, 'local_ai_course_assistant');
        } else {
            set_config('sola_usertesting_course_' . $cid, $utvalue, 'local_ai_course_assistant');
        }
    }
    redirect(new moodle_url('/local/ai_course_assistant/analytics.php',
        ['courseid' => $courseid, 'range' => $range]));
}

$PAGE->set_url(new moodle_url('/local/ai_course_assistant/analytics.php',
    ['courseid' => $courseid, 'range' => $range]));
$PAGE->set_context($syscontext);
$PAGE->set_title('AI Course Assistant Analytics');
$PAGE->set_heading('AI Course Assistant Analytics');
$PAGE->set_pagelayout('admin');

$since = $range > 0 ? time() - ($range * 86400) : 0;

// ── Build course list with stats ────────────────────────────────────────────
// Get all courses that have at least one SOLA message.
$courses_with_data = $DB->get_records_sql(
    "SELECT DISTINCT m.courseid, c.fullname, c.shortname
       FROM {local_ai_course_assistant_msgs} m
       JOIN {course} c ON c.id = m.courseid
      WHERE c.id > 1
      ORDER BY c.fullname ASC"
);

// Also get all visible courses (for the enable/disable toggle even if no data yet).
$all_courses = $DB->get_records_sql(
    "SELECT c.id, c.fullname, c.shortname
       FROM {course} c
      WHERE c.id > 1 AND c.visible = 1
      ORDER BY c.fullname ASC"
);

// Merge: courses with data + all visible courses.
$course_list = [];
foreach ($all_courses as $c) {
    $has_data = isset($courses_with_data[$c->id]);
    $is_enabled = \local_ai_course_assistant\course_config_manager::is_enabled_for_course((int) $c->id);
    $ut_val = get_config('local_ai_course_assistant', 'sola_usertesting_course_' . $c->id);
    // User testing state: '' = inherit, '1' = on, '0' = off.
    $ut_state = ($ut_val === '1') ? 'on' : (($ut_val === '0') ? 'off' : 'inherit');
    $ut_global = (bool) get_config('local_ai_course_assistant', 'usertesting_enabled');
    $ut_effective = ($ut_val === '1') || ($ut_val !== '0' && $ut_global);
    $course_list[] = [
        'id'        => (int) $c->id,
        'fullname'  => $c->fullname,
        'shortname' => $c->shortname,
        'has_data'  => $has_data,
        'enabled'   => $is_enabled,
        'selected'  => ((int) $c->id === $courseid),
        'ut_on'     => $ut_state === 'on',
        'ut_off'    => $ut_state === 'off',
        'ut_inherit'=> $ut_state === 'inherit',
        'ut_effective' => $ut_effective,
        'sesskey'   => sesskey(),
        'range'     => $range,
        'courseid_param' => $courseid,
        'form_action' => (new \moodle_url('/local/ai_course_assistant/analytics.php'))->out(false),
    ];
}

// ── Cross-course summary stats ──────────────────────────────────────────────
$total_msgs_all = $DB->count_records_sql(
    "SELECT COUNT(m.id) FROM {local_ai_course_assistant_msgs} m
       JOIN {course} c ON c.id = m.courseid WHERE c.id > 1"
);
$active_students_all = $DB->count_records_sql(
    "SELECT COUNT(DISTINCT m.userid) FROM {local_ai_course_assistant_msgs} m
       JOIN {course} c ON c.id = m.courseid WHERE c.id > 1 AND m.role = 'user'"
);
$active_courses = count($courses_with_data);
$enabled_courses = 0;
foreach ($course_list as $cl) {
    if ($cl['enabled']) {
        $enabled_courses++;
    }
}

// ── Per-course analytics (if a course is selected) ──────────────────────────
$course_data = null;
$course_name = '';
if ($courseid > 0) {
    $course = $DB->get_record('course', ['id' => $courseid]);
    if ($course) {
        $course_name = $course->fullname;
        $overview = analytics::get_overview($courseid, $since);
        $dailyusage = analytics::get_daily_usage($courseid, $range > 0 ? $range : 90);
        $hotspots = analytics::get_hotspots($courseid, $since);
        $commonprompts = analytics::get_common_prompts($courseid, $since);
        $studentusage = analytics::get_student_usage($courseid, $since);
        $providercomparison = analytics::get_provider_comparison($courseid, $since);

        // Feedback.
        $feedbackparams = ['courseid' => $courseid];
        $feedbacktimewhere = '';
        if ($since > 0) {
            $feedbacktimewhere = ' AND f.timecreated >= :since';
            $feedbackparams['since'] = $since;
        }
        $feedbacksummary = $DB->get_record_sql(
            "SELECT COUNT(f.id) AS total_count, AVG(f.rating) AS avg_rating
               FROM {local_ai_course_assistant_feedback} f
              WHERE f.courseid = :courseid{$feedbacktimewhere}",
            $feedbackparams
        );
        $ratingdist = $DB->get_records_sql(
            "SELECT f.rating AS id, f.rating, COUNT(f.id) AS cnt
               FROM {local_ai_course_assistant_feedback} f
              WHERE f.courseid = :courseid{$feedbacktimewhere}
              GROUP BY f.rating ORDER BY f.rating DESC",
            $feedbackparams
        );
        $ratingrows = [];
        for ($r = 5; $r >= 1; $r--) {
            $cnt = 0;
            foreach ($ratingdist as $row) {
                if ((int) $row->rating === $r) {
                    $cnt = (int) $row->cnt;
                    break;
                }
            }
            $ratingrows[] = ['stars' => $r, 'count' => $cnt];
        }
        $recentfeedback = $DB->get_records_sql(
            "SELECT f.id, f.rating, f.comment, f.browser, f.os, f.device,
                    f.screen_size, f.timecreated, u.firstname, u.lastname
               FROM {local_ai_course_assistant_feedback} f
               JOIN {user} u ON u.id = f.userid
              WHERE f.courseid = :courseid{$feedbacktimewhere}
              ORDER BY f.timecreated DESC",
            $feedbackparams, 0, 50
        );
        $feedbackentries = [];
        foreach ($recentfeedback as $fb) {
            $stars = '';
            for ($s = 0; $s < 5; $s++) {
                $stars .= $s < (int) $fb->rating ? '&#9733;' : '&#9734;';
            }
            $feedbackentries[] = [
                'name'        => htmlspecialchars($fb->firstname . ' ' . $fb->lastname),
                'stars'       => $stars,
                'rating'      => (int) $fb->rating,
                'comment'     => htmlspecialchars($fb->comment ?: ''),
                'has_comment' => !empty($fb->comment),
                'browser'     => htmlspecialchars($fb->browser ?: ''),
                'os'          => htmlspecialchars($fb->os ?: ''),
                'device'      => htmlspecialchars($fb->device ?: ''),
                'screen'      => htmlspecialchars($fb->screen_size ?: ''),
                'date'        => userdate($fb->timecreated),
            ];
        }

        $feedbacktotal = $feedbacksummary ? (int) $feedbacksummary->total_count : 0;
        $feedbackavg = $feedbacksummary && $feedbacksummary->avg_rating
            ? round((float) $feedbacksummary->avg_rating, 1) : 0;

        // Survey results.
        $survey_data = null;
        try {
            $survey_results = \local_ai_course_assistant\survey_manager::get_survey_results($courseid, $since);
            if ($survey_results['total_responses'] > 0) {
                $survey_questions = [];
                foreach ($survey_results['questions'] as $q) {
                    $sq = [
                        'text' => $q['text'],
                        'type' => $q['type'],
                        'response_count' => $q['response_count'],
                        'is_multiple_choice' => $q['type'] === 'multiple_choice',
                        'is_rating' => $q['type'] === 'rating',
                        'is_long_text' => $q['type'] === 'long_text',
                    ];
                    if ($q['type'] === 'multiple_choice' && !empty($q['option_counts'])) {
                        $opts = [];
                        foreach ($q['option_counts'] as $label => $cnt) {
                            $opts[] = ['label' => $label, 'count' => $cnt];
                        }
                        $sq['options'] = $opts;
                    }
                    if ($q['type'] === 'rating') {
                        $sq['average'] = $q['average'] ?? 0;
                        $dist = [];
                        if (!empty($q['distribution'])) {
                            foreach ($q['distribution'] as $val => $cnt) {
                                $dist[] = ['value' => $val, 'count' => $cnt];
                            }
                        }
                        $sq['distribution'] = $dist;
                    }
                    if ($q['type'] === 'long_text' && !empty($q['answers'])) {
                        $text_answers = [];
                        foreach (array_slice($q['answers'], 0, 20) as $a) {
                            $text_answers[] = ['text' => htmlspecialchars($a)];
                        }
                        $sq['answers'] = $text_answers;
                        $sq['has_answers'] = true;
                    }
                    $survey_questions[] = $sq;
                }
                $survey_data = [
                    'total_responses' => $survey_results['total_responses'],
                    'questions' => $survey_questions,
                ];
            }
        } catch (\Throwable $e) {
            // Survey tables may not exist yet on older installs.
        }

        // User testing results.
        $ut_data = null;
        try {
            $ut_results = \local_ai_course_assistant\usertesting_manager::get_results($courseid);
            if ($ut_results['total_respondents'] > 0) {
                $ut_tasks = [];
                foreach ($ut_results['tasks'] as $t) {
                    $ut = [
                        'instruction' => $t['instruction'],
                        'type' => $t['type'],
                        'response_count' => $t['response_count'],
                        'avg_messages' => $t['avg_messages'],
                        'avg_session_minutes' => $t['avg_session_minutes'],
                        'is_action_then_rate' => $t['type'] === 'action_then_rate',
                        'is_multiple_choice' => $t['type'] === 'multiple_choice',
                        'is_free_response' => $t['type'] === 'free_response',
                    ];
                    if ($t['type'] === 'action_then_rate') {
                        $ut['avg_rating'] = $t['avg_rating'] ?? 0;
                        $comments = [];
                        foreach (array_slice($t['comments'] ?? [], 0, 20) as $c) {
                            $comments[] = ['text' => htmlspecialchars($c)];
                        }
                        $ut['comments'] = $comments;
                        $ut['has_comments'] = !empty($comments);
                    }
                    if ($t['type'] === 'multiple_choice' && !empty($t['option_counts'])) {
                        $opts = [];
                        foreach ($t['option_counts'] as $label => $cnt) {
                            $opts[] = ['label' => $label, 'count' => $cnt];
                        }
                        $ut['options'] = $opts;
                    }
                    if ($t['type'] === 'free_response' && !empty($t['answers'])) {
                        $answers = [];
                        foreach (array_slice($t['answers'], 0, 20) as $a) {
                            $answers[] = ['text' => htmlspecialchars($a)];
                        }
                        $ut['answers'] = $answers;
                        $ut['has_answers'] = !empty($answers);
                    }
                    $ut_tasks[] = $ut;
                }
                $ut_data = [
                    'total_respondents' => $ut_results['total_respondents'],
                    'tasks' => $ut_tasks,
                ];
            }
        } catch (\Throwable $e) {
            // User testing tables may not exist yet.
        }

        $course_data = [
            'courseid'   => $courseid,
            'coursename' => $course_name,
            'overview'   => $overview,
            'has_data'   => $overview['total_messages'] > 0,
            'daily_usage_json' => json_encode($dailyusage),
            'hotspots'         => $hotspots,
            'has_hotspots'     => !empty($hotspots),
            'common_prompts'   => $commonprompts,
            'has_common_prompts' => !empty($commonprompts),
            'provider_comparison' => $providercomparison,
            'has_provider_comparison' => !empty($providercomparison),
            'students' => array_values(array_map(function($s) {
                return [
                    'name'          => $s->firstname . ' ' . $s->lastname,
                    'message_count' => $s->message_count,
                    'last_active'   => userdate($s->last_active),
                ];
            }, $studentusage)),
            'has_students'    => !empty($studentusage),
            'feedback_total'  => $feedbacktotal,
            'feedback_avg'    => $feedbackavg,
            'feedback_ratings' => $ratingrows,
            'feedback_entries' => $feedbackentries,
            'has_feedback'    => $feedbacktotal > 0,
            'survey_data'     => $survey_data,
            'has_survey_data' => ($survey_data !== null),
            'usertesting_data' => $ut_data,
            'has_usertesting_data' => ($ut_data !== null),
            'has_any_feedback_data' => ($feedbacktotal > 0 || $survey_data !== null || $ut_data !== null),
            'token_analytics_url' => (new moodle_url('/local/ai_course_assistant/token_analytics.php',
                ['courseid' => $courseid, 'range' => $range]))->out(false),
        ];
    }
}

// ── Build template data ─────────────────────────────────────────────────────
$templatedata = [
    // Cross-course summary.
    'total_messages_all'  => $total_msgs_all,
    'active_students_all' => $active_students_all,
    'active_courses'      => $active_courses,
    'enabled_courses'     => $enabled_courses,
    'total_courses'       => count($course_list),

    // Course list for selector + toggle table.
    'courses'     => $course_list,
    'has_courses' => !empty($course_list),

    // Per-course analytics (null if none selected).
    'has_course_selected' => ($course_data !== null),
    'course'              => $course_data,

    // Time range.
    'range'              => $range,
    'range_7_selected'   => $range == 7,
    'range_30_selected'  => $range == 30,
    'range_all_selected' => $range == 0,
    'url_7'  => (new moodle_url('/local/ai_course_assistant/analytics.php',
        ['courseid' => $courseid, 'range' => 7]))->out(false),
    'url_30' => (new moodle_url('/local/ai_course_assistant/analytics.php',
        ['courseid' => $courseid, 'range' => 30]))->out(false),
    'url_all' => (new moodle_url('/local/ai_course_assistant/analytics.php',
        ['courseid' => $courseid, 'range' => 0]))->out(false),

    // Toggle form helpers.
    'sesskey'        => sesskey(),
    'form_action'    => (new moodle_url('/local/ai_course_assistant/analytics.php'))->out(false),
    'courseid_param' => $courseid,

    // Links.
    'token_analytics_url' => (new moodle_url('/local/ai_course_assistant/token_analytics.php',
        ['range' => $range]))->out(false),
    'settings_url' => (new moodle_url('/admin/category.php',
        ['category' => 'local_ai_course_assistant']))->out(false),
    'analytics_base_url' => (new moodle_url('/local/ai_course_assistant/analytics.php',
        ['range' => $range]))->out(false),
];

// Load Chart.js and analytics dashboard AMD module.
$PAGE->requires->js(new moodle_url('/local/ai_course_assistant/cdn/chartjs/chart.umd.min.js'));
$PAGE->requires->js_call_amd('local_ai_course_assistant/analytics_dashboard', 'init', [[
    'courseid' => $courseid,
    'since' => $since,
]]);

// Build course list for tabs filter dropdown.
$tabscourses = [];
foreach ($all_courses as $c) {
    $tabscourses[] = ['id' => $c->id, 'shortname' => $c->shortname];
}

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('local_ai_course_assistant/analytics_tabs', ['courses' => $tabscourses]);
echo $OUTPUT->render_from_template('local_ai_course_assistant/analytics_dashboard', $templatedata);
echo $OUTPUT->footer();
