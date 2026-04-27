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
 * Learning Radar SSE endpoint for the analytics dashboard.
 *
 * Admin-only. Streams an LLM response based on anonymized student
 * conversation transcripts. Uses the same SSE protocol as sse.php
 * so the client-side EventSource handler works unchanged.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_once($CFG->dirroot . '/lib/filelib.php');

use local_ai_course_assistant\meta_ai_data_builder;
use local_ai_course_assistant\provider\base_provider;

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('X-Accel-Buffering: no');

if (ob_get_level()) {
    ob_end_clean();
}

function sse_send(string $event, string $data): void {
    echo "event: {$event}\ndata: {$data}\n\n";
    if (ob_get_level()) {
        ob_flush();
    }
    flush();
}

require_login();
require_sesskey();

$syscontext = context_system::instance();
require_capability('moodle/site:config', $syscontext);

$query    = required_param('query', PARAM_RAW);
$provider = optional_param('provider', '', PARAM_ALPHA);
$model    = optional_param('model', '', PARAM_RAW_TRIMMED);
$courseid = optional_param('courseid', 0, PARAM_INT);
$courseids_raw = optional_param('courseids', '', PARAM_RAW_TRIMMED);
$range    = optional_param('range', 30, PARAM_INT);
$filterprovider = optional_param('filterprovider', '', PARAM_ALPHA);
$history  = optional_param('history', '[]', PARAM_RAW);

$since = $range > 0 ? time() - ($range * 86400) : 0;

// Build course ID list: explicit list > single courseid > all courses.
$courseids = [];
if (!empty($courseids_raw)) {
    $courseids = array_filter(array_map('intval', explode(',', $courseids_raw)));
} else if ($courseid > 0) {
    $courseids = [$courseid];
}

$systemprompt = meta_ai_data_builder::build_system_prompt($courseids, $since, $filterprovider);

$messages = [];
$historyarr = json_decode($history, true);
if (is_array($historyarr)) {
    foreach ($historyarr as $h) {
        if (!empty($h['role']) && !empty($h['content'])) {
            $messages[] = [
                'role' => $h['role'] === 'assistant' ? 'assistant' : 'user',
                'content' => (string) $h['content'],
            ];
        }
    }
}
$messages[] = ['role' => 'user', 'content' => $query];

try {
    if (!empty($provider)) {
        $llm = base_provider::create_for_comparison($provider, $model);
    } else {
        $llm = base_provider::create_from_config(0);
    }

    $fullresponse = '';
    $llm->chat_completion_stream($systemprompt, $messages, function (string $chunk) use (&$fullresponse) {
        $lines = explode("\n", $chunk);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }
            if (strpos($line, 'data: ') === 0) {
                $json = substr($line, 6);
                if ($json === '[DONE]') {
                    return;
                }
                $decoded = json_decode($json, true);
                if (!$decoded) {
                    continue;
                }
                $token = $decoded['choices'][0]['delta']['content']
                    ?? $decoded['delta']['text']
                    ?? $decoded['choices'][0]['text']
                    ?? '';
                if ($token !== '') {
                    $fullresponse .= $token;
                    sse_send('token', json_encode(['token' => $token]));
                }
            } else {
                $decoded = json_decode($line, true);
                if ($decoded) {
                    $token = $decoded['choices'][0]['delta']['content']
                        ?? $decoded['delta']['text']
                        ?? $decoded['choices'][0]['text']
                        ?? '';
                    if ($token !== '') {
                        $fullresponse .= $token;
                        sse_send('token', json_encode(['token' => $token]));
                    }
                }
            }
        }
    });

    if ($fullresponse === '') {
        $fullresponse = $llm->chat_completion($systemprompt, $messages);
        sse_send('token', json_encode(['token' => $fullresponse]));
    }

    // Persist the Learning Radar query and response (interaction_type='meta')
    // so it shows up under the "Analytics" category in Token Cost analytics
    // AND is exportable via redash_export.php. Tokens are approximated from
    // content length (~4 chars/token) since the SSE stream does not surface
    // an official usage total for every provider.
    try {
        $promptchars = strlen($systemprompt);
        $lastquerytext = '';
        foreach ($messages as $m) {
            $content = (string) ($m['content'] ?? '');
            $promptchars += strlen($content);
            if (($m['role'] ?? '') === 'user') {
                $lastquerytext = $content;
            }
        }
        $approxprompt = (int) ceil($promptchars / 4);
        $approxcompletion = (int) ceil(strlen($fullresponse) / 4);

        $llmconf = method_exists($llm, 'get_config_snapshot') ? $llm->get_config_snapshot() : [];
        $modelname = $model !== '' ? $model : ($llmconf['model'] ?? 'unknown');
        $providerid = $provider !== '' ? $provider
            : ($llmconf['provider'] ?? (get_config('local_ai_course_assistant', 'provider') ?: 'unknown'));

        \local_ai_course_assistant\conversation_manager::record_meta_query(
            (int) $USER->id,
            $lastquerytext,
            $fullresponse,
            $providerid,
            $modelname,
            $approxprompt,
            $approxcompletion,
            false /* ad-hoc, not scheduled */
        );
    } catch (\Throwable $logerr) {
        debugging('Learning Radar meta-log failed: ' . $logerr->getMessage(), DEBUG_DEVELOPER);
    }

    sse_send('done', json_encode(['full' => $fullresponse]));

} catch (\Throwable $e) {
    sse_send('error', json_encode(['message' => $e->getMessage()]));
}
