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
 * OpenAI TTS proxy endpoint.
 * Accepts POST {text, sesskey, courseid}, returns JSON {audio: base64, type: 'audio/mpeg'}.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('AJAX_SCRIPT', true);
require_once('../../config.php');

require_login();
require_sesskey();

header('Content-Type: application/json');

$text = required_param('text', PARAM_TEXT);
$courseid = optional_param('courseid', 0, PARAM_INT);

// Verify capability.
if ($courseid > 0) {
    $context = context_course::instance($courseid);
} else {
    $context = context_system::instance();
}
require_capability('local/ai_course_assistant:use', $context);

// TTS requires any OpenAI API key — realtime key takes priority, then main key if provider=openai.
// Does NOT require realtime to be enabled or OpenAI to be the chat provider.
$apikey = get_config('local_ai_course_assistant', 'realtime_apikey');
if (empty($apikey)) {
    $provider = get_config('local_ai_course_assistant', 'provider');
    $mainapikey = get_config('local_ai_course_assistant', 'apikey');
    if ($provider === 'openai' && !empty($mainapikey)) {
        $apikey = $mainapikey;
    }
}
if (empty($apikey)) {
    http_response_code(503);
    echo json_encode(['error' => get_string('error_no_tts_key', 'local_ai_course_assistant')]);
    exit;
}

// Student's saved voice preference takes priority over the site default.
$voiceparam = optional_param('voice', '', PARAM_ALPHA);
$voice = $voiceparam ?: (get_config('local_ai_course_assistant', 'realtime_voice') ?: 'shimmer');

// Truncate text to avoid excessive API costs.
$text = mb_substr(trim($text), 0, 4096);

// Use native PHP curl to guarantee the JSON body is sent with the correct Content-Type.
// Moodle's \curl wrapper can corrupt JSON POST bodies.
$body = json_encode([
    'model'  => 'tts-1',
    'voice'  => $voice,
    'input'  => $text,
    'format' => 'mp3',
]);

$ch = curl_init('https://api.openai.com/v1/audio/speech');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $body,
    CURLOPT_HTTPHEADER     => [
        'Authorization: Bearer ' . $apikey,
        'Content-Type: application/json',
        'Content-Length: ' . strlen($body),
    ],
    CURLOPT_TIMEOUT        => 30,
]);
$response = curl_exec($ch);
$httpcode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpcode !== 200) {
    http_response_code(502);
    echo json_encode(['error' => 'TTS API error ' . $httpcode]);
    exit;
}

// Log TTS cost: approximate tokens from character count (~4 chars/token).
$charcount = mb_strlen($text);
$approxtokens = (int) ceil($charcount / 4);
try {
    $conv = $DB->get_record('local_ai_course_assistant_convs', [
        'userid' => $USER->id,
        'courseid' => $courseid > 0 ? $courseid : SITEID,
    ]);
    if ($conv) {
        \local_ai_course_assistant\conversation_manager::add_message(
            $conv->id,
            $USER->id,
            $courseid > 0 ? $courseid : SITEID,
            'system',
            '[TTS]',
            0,
            'openai_tts',
            $approxtokens,
            0,
            'tts-1'
        );
    }
} catch (\Throwable $e) {
    unset($e);
    // Non-critical — don't block audio delivery.
}

echo json_encode([
    'audio' => base64_encode($response),
    'type'  => 'audio/mpeg',
]);
