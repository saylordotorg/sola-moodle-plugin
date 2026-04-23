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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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

// Rate limit: 30 TTS requests per 60 seconds per user. TTS is a per-character
// spend vector; without this cap an authenticated learner can burn an unbounded
// amount of OpenAI or xAI credit.
if (\local_ai_course_assistant\rate_limiter::is_rate_limited($USER->id, 'tts', 30, 60)) {
    http_response_code(429);
    header('Retry-After: 60');
    echo json_encode(['error' => get_string('chat:error_ratelimit', 'local_ai_course_assistant')]);
    exit;
}

// Resolve active TTS provider via the voice_providers registry.
$cfg = \local_ai_course_assistant\voice_registry::resolve(
    \local_ai_course_assistant\voice_registry::CAPABILITY_TTS);
if ($cfg === null) {
    http_response_code(503);
    echo json_encode(['error' => get_string('error_no_tts_key', 'local_ai_course_assistant')]);
    exit;
}

$voiceparam = optional_param('voice', '', PARAM_ALPHA);
$voice = $voiceparam !== '' ? $voiceparam : $cfg['voice'];

// Truncate text to avoid excessive API costs.
$text = mb_substr(trim($text), 0, 4096);

// Build provider-specific request body.
if ($cfg['provider'] === 'xai') {
    // xAI TTS: {text, voice_id, language}. Returns raw audio.
    $body = json_encode([
        'text'     => $text,
        'voice_id' => $voice,
        'language' => optional_param('lang', 'en', PARAM_ALPHA) ?: 'en',
    ]);
    $model = 'grok-tts';
} else {
    // OpenAI TTS: {model, voice, input, format}. Returns raw audio.
    $body = json_encode([
        'model'  => 'tts-1',
        'voice'  => $voice,
        'input'  => $text,
        'format' => 'mp3',
    ]);
    $model = 'tts-1';
}

$ch = curl_init($cfg['endpoint']);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $body,
    CURLOPT_HTTPHEADER     => [
        'Authorization: Bearer ' . $cfg['apikey'],
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
            $cfg['provider'] . '_tts',
            $approxtokens,
            0,
            $model
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
