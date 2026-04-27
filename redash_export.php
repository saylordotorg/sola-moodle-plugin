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
 * Redash analytics export endpoint.
 *
 * Provides JSON export of usage analytics, feedback, and token cost data
 * for external analytics platforms like Redash. Authenticated via API key.
 *
 * GET parameters:
 *   apikey   (required) - must match the configured redash_api_key setting
 *   courseid (optional) - specific course ID, or 0 for all courses (default: 0)
 *   since    (optional) - Unix timestamp to filter data from (default: 0 = all time)
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('NO_MOODLE_COOKIES', true);

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\analytics;
use local_ai_course_assistant\token_cost_manager;

// CORS and content type headers.
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Cache-Control: no-cache, no-store, must-revalidate');

// Handle CORS preflight.
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// Only accept GET requests.
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Validate API key.
$apikey = optional_param('apikey', '', PARAM_RAW);
$configuredkey = get_config('local_ai_course_assistant', 'redash_api_key');

if (empty($configuredkey)) {
    http_response_code(403);
    echo json_encode(['error' => 'Redash export is not configured. Set an API key in plugin settings.']);
    exit;
}

if (empty($apikey) || !hash_equals($configuredkey, $apikey)) {
    http_response_code(401);
    echo json_encode(['error' => 'Invalid API key']);
    exit;
}

// Parse parameters.
$courseid = optional_param('courseid', 0, PARAM_INT);
$since = optional_param('since', 0, PARAM_INT);

// Get plugin version from version.php.
$plugin = new stdClass();
require(__DIR__ . '/version.php');
$pluginversion = $plugin->release ?? 'unknown';

// Determine which courses to export.
$courseids = [];
if ($courseid > 0) {
    $courseids = [$courseid];
} else {
    // Get all courses that have at least one message.
    $courseids = $DB->get_fieldset_sql(
        "SELECT DISTINCT courseid FROM {local_ai_course_assistant_msgs}"
    );
}

// Build course data.
$courses = [];
foreach ($courseids as $cid) {
    $cid = (int) $cid;

    // Get course name.
    $coursename = $DB->get_field('course', 'fullname', ['id' => $cid]);
    if ($coursename === false) {
        $coursename = 'Unknown (id=' . $cid . ')';
    }

    $coursedata = [
        'courseid' => $cid,
        'coursename' => $coursename,
        'overview' => analytics::get_overview($cid, $since),
        'daily_usage' => analytics::get_daily_usage($cid, 30),
        'common_prompts' => analytics::get_common_prompts($cid, $since),
        'provider_comparison' => analytics::get_provider_comparison($cid, $since),
    ];

    // Hotspots require course modinfo, which may fail for deleted/broken courses.
    try {
        $coursedata['hotspots'] = analytics::get_hotspots($cid, $since);
    } catch (\Throwable $e) {
        $coursedata['hotspots'] = [];
    }

    // Student usage: anonymize by default; pass ?anonymize=0 to reveal real names.
    $anonymize = optional_param('anonymize', 1, PARAM_INT);
    $studentrecords = analytics::get_student_usage($cid, $since);
    $studentusage = [];
    foreach ($studentrecords as $record) {
        $entry = [
            'userid' => (int) $record->userid,
            'message_count' => (int) $record->message_count,
            'last_active' => (int) $record->last_active,
        ];
        if ($anonymize) {
            $entry['name'] = \local_ai_course_assistant\anonymizer::name((int) $record->userid);
        } else {
            $entry['firstname'] = $record->firstname;
            $entry['lastname'] = $record->lastname;
        }
        $studentusage[] = $entry;
    }
    $coursedata['student_usage'] = $studentusage;

    $courses[] = $coursedata;
}

// Feedback data.
$feedbackparams = [];
$feedbackwhere = '';
if ($courseid > 0) {
    $feedbackwhere .= ' WHERE courseid = :courseid';
    $feedbackparams['courseid'] = $courseid;
}
if ($since > 0) {
    $feedbackwhere .= ($feedbackwhere ? ' AND' : ' WHERE') . ' timecreated >= :since';
    $feedbackparams['since'] = $since;
}

$feedbackrecords = $DB->get_records_sql(
    "SELECT id, userid, courseid, rating, comment, browser, os, device,
            screen_size, user_agent, page_url, timecreated
       FROM {local_ai_course_assistant_feedback}" . $feedbackwhere .
    " ORDER BY timecreated DESC",
    $feedbackparams
);

$feedback = [];
foreach ($feedbackrecords as $record) {
    $feedback[] = [
        'id' => (int) $record->id,
        'userid' => (int) $record->userid,
        'courseid' => (int) $record->courseid,
        'rating' => (int) $record->rating,
        'comment' => $record->comment,
        'browser' => $record->browser,
        'os' => $record->os,
        'device' => $record->device,
        'screen_size' => $record->screen_size,
        'user_agent' => $record->user_agent,
        'page_url' => $record->page_url,
        'timecreated' => (int) $record->timecreated,
    ];
}

// Token costs: aggregate by model.
$tokenwhere = " WHERE role = 'assistant' AND model_name IS NOT NULL AND model_name != ''";
$tokenparams = [];
if ($courseid > 0) {
    $tokenwhere .= ' AND courseid = :courseid';
    $tokenparams['courseid'] = $courseid;
}
if ($since > 0) {
    $tokenwhere .= ' AND timecreated >= :since';
    $tokenparams['since'] = $since;
}

$tokenrecords = $DB->get_records_sql(
    "SELECT model_name,
            COUNT(id) AS response_count,
            SUM(COALESCE(prompt_tokens, 0)) AS total_prompt_tokens,
            SUM(COALESCE(completion_tokens, 0)) AS total_completion_tokens,
            SUM(COALESCE(tokens_used, 0)) AS total_tokens
       FROM {local_ai_course_assistant_msgs}" . $tokenwhere .
    " GROUP BY model_name
      ORDER BY total_tokens DESC",
    $tokenparams
);

$tokencosts = [];
foreach ($tokenrecords as $record) {
    $prompttokens = (int) $record->total_prompt_tokens;
    $completiontokens = (int) $record->total_completion_tokens;
    $cost = token_cost_manager::estimate_cost($record->model_name, $prompttokens, $completiontokens);

    $tokencosts[] = [
        'model' => $record->model_name,
        'response_count' => (int) $record->response_count,
        'total_prompt_tokens' => $prompttokens,
        'total_completion_tokens' => $completiontokens,
        'total_tokens' => (int) $record->total_tokens,
        'estimated_cost_usd' => $cost,
    ];
}

// Survey response data.
$surveydata = [];
try {
    $surveywhere = '';
    $surveyparams = [];
    if ($courseid > 0) {
        $surveywhere .= ' WHERE r.courseid = :courseid';
        $surveyparams['courseid'] = $courseid;
    }
    if ($since > 0) {
        $surveywhere .= ($surveywhere ? ' AND' : ' WHERE') . ' r.timecreated >= :since';
        $surveyparams['since'] = $since;
    }

    $surveyrecords = $DB->get_records_sql(
        "SELECT r.id, r.surveyid, r.userid, r.courseid, r.question_index, r.answer, r.timecreated,
                s.title AS survey_title
           FROM {local_ai_course_assistant_survey_resp} r
           JOIN {local_ai_course_assistant_surveys} s ON s.id = r.surveyid" .
        $surveywhere . " ORDER BY r.timecreated DESC",
        $surveyparams
    );

    foreach ($surveyrecords as $record) {
        // Decode the survey questions to get the question text.
        $surveydata[] = [
            'id' => (int) $record->id,
            'surveyid' => (int) $record->surveyid,
            'survey_title' => $record->survey_title,
            'userid' => (int) $record->userid,
            'courseid' => (int) $record->courseid,
            'question_index' => (int) $record->question_index,
            'answer' => $record->answer,
            'timecreated' => (int) $record->timecreated,
        ];
    }
} catch (\Throwable $e) {
    // Table may not exist yet on older installs.
    $surveydata = [];
}

// Learning Radar analytics: anonymized stats and transcript excerpt for Redash dashboards.
$metaai = [
    'summary' => \local_ai_course_assistant\meta_ai_data_builder::build_stats_summary($courseid, $since),
    'transcript_excerpt' => \local_ai_course_assistant\meta_ai_data_builder::build_transcript($courseid, $since, 50000),
];

// Learning Radar query log: every admin query (ad-hoc + scheduled) and its
// response, paired by (conversationid, sequential timecreated). Each record
// is one query/response pair with provider, model, approximate token counts,
// and a `scheduled` flag distinguishing cron-driven runs from ad-hoc ones.
$radarwhere = "interaction_type IN ('meta', 'meta_scheduled')";
$radarparams = [];
if ($since > 0) {
    $radarwhere .= ' AND timecreated >= :since';
    $radarparams['since'] = $since;
}
// Sort by `id` (auto-increment sequence) rather than `timecreated`. Two
// queries persisted within the same wall-clock second would otherwise
// interleave (all `user` rows before all `assistant` rows when sharing a
// timestamp), and the pairing walk below would cross-pair them. `id` is
// monotonic at insertion and preserves insertion order regardless of
// timestamp ties.
$radarrecords = $DB->get_records_sql(
    "SELECT id, conversationid, userid, role, message, prompt_tokens, completion_tokens,
            model_name, provider, interaction_type, timecreated
       FROM {local_ai_course_assistant_msgs}
      WHERE {$radarwhere}
      ORDER BY conversationid ASC, id ASC",
    $radarparams
);

$radarpairs = [];
$pendinguser = null;
foreach ($radarrecords as $row) {
    if ($row->role === 'user') {
        $pendinguser = $row;
        continue;
    }
    if ($row->role === 'assistant' && $pendinguser !== null
            && (int) $pendinguser->conversationid === (int) $row->conversationid) {
        $radarpairs[] = [
            'id'                => (int) $row->id,
            'userid'            => (int) $row->userid,
            'query'             => (string) $pendinguser->message,
            'response'          => (string) $row->message,
            'provider'          => $row->provider,
            'model'             => $row->model_name,
            'prompt_tokens'     => (int) ($pendinguser->prompt_tokens ?? 0),
            'completion_tokens' => (int) ($row->completion_tokens ?? 0),
            'scheduled'         => $row->interaction_type === 'meta_scheduled',
            'asked_at'          => (int) $pendinguser->timecreated,
            'answered_at'       => (int) $row->timecreated,
        ];
        $pendinguser = null;
    }
}

// Build response.
$response = [
    'generated_at' => date('c'),
    'plugin_version' => $pluginversion,
    'anonymized' => !empty($anonymize),
    'courses' => $courses,
    'feedback' => $feedback,
    'token_costs' => $tokencosts,
    'survey_responses' => $surveydata,
    'meta_ai' => $metaai,
    'learning_radar_queries' => $radarpairs,
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
