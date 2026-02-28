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
 * Analytics dashboard for AI tutor chat.
 *
 * Accessible to Academic Support and Administrator roles.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\analytics;

$courseid = required_param('courseid', PARAM_INT);
$range = optional_param('range', '30', PARAM_INT); // Days: 7, 30, or 0 (all).

$course = $DB->get_record('course', ['id' => $courseid], '*', MUST_EXIST);
$context = context_course::instance($courseid);

require_login($course);
require_capability('local/ai_course_assistant:viewanalytics', $context);

$PAGE->set_url(new moodle_url('/local/ai_course_assistant/analytics.php', ['courseid' => $courseid, 'range' => $range]));
$PAGE->set_title(get_string('analytics:title', 'local_ai_course_assistant'));
$PAGE->set_heading($course->fullname . ': ' . get_string('analytics:title', 'local_ai_course_assistant'));
$PAGE->set_pagelayout('report');

// Calculate since timestamp.
$since = $range > 0 ? time() - ($range * 86400) : 0;

// Gather data.
$overview = analytics::get_overview($courseid, $since);
$dailyusage = analytics::get_daily_usage($courseid, $range > 0 ? $range : 90);
$hotspots = analytics::get_hotspots($courseid, $since);
$commonprompts = analytics::get_common_prompts($courseid, $since);
$studentusage = analytics::get_student_usage($courseid, $since);
$providercomparison = analytics::get_provider_comparison($courseid, $since);

// Build template data.
$templatedata = [
    'courseid' => $courseid,
    'overview' => $overview,
    'has_data' => $overview['total_messages'] > 0,
    'daily_usage_json' => json_encode($dailyusage),
    'hotspots' => $hotspots,
    'has_hotspots' => !empty($hotspots),
    'common_prompts' => $commonprompts,
    'has_common_prompts' => !empty($commonprompts),
    'provider_comparison' => $providercomparison,
    'has_provider_comparison' => !empty($providercomparison),
    'students' => array_values(array_map(function($s) {
        return [
            'name' => $s->firstname . ' ' . $s->lastname,
            'message_count' => $s->message_count,
            'last_active' => userdate($s->last_active),
        ];
    }, $studentusage)),
    'has_students' => !empty($studentusage),
    'range' => $range,
    'range_7_selected' => $range == 7,
    'range_30_selected' => $range == 30,
    'range_all_selected' => $range == 0,
    'url_7' => (new moodle_url('/local/ai_course_assistant/analytics.php', ['courseid' => $courseid, 'range' => 7]))->out(false),
    'url_30' => (new moodle_url('/local/ai_course_assistant/analytics.php', ['courseid' => $courseid, 'range' => 30]))->out(false),
    'url_all' => (new moodle_url('/local/ai_course_assistant/analytics.php', ['courseid' => $courseid, 'range' => 0]))->out(false),
];

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('local_ai_course_assistant/analytics_dashboard', $templatedata);
echo $OUTPUT->footer();
