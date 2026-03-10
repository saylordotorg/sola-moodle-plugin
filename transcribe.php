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
 * OpenAI Whisper transcription proxy endpoint.
 * Accepts POST multipart { audio (file), sesskey, courseid, lang }.
 * Returns JSON { text: "transcribed text" }.
 *
 * Used as a fallback for browsers without Web Speech API (e.g. iOS Chrome).
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

$courseid = optional_param('courseid', 0, PARAM_INT);
if ($courseid > 0) {
    $context = context_course::instance($courseid);
} else {
    $context = context_system::instance();
}
require_capability('local/ai_course_assistant:use', $context);

// Require the uploaded audio file.
if (empty($_FILES['audio']['tmp_name']) || !is_uploaded_file($_FILES['audio']['tmp_name'])) {
    http_response_code(400);
    echo json_encode(['error' => 'No audio file provided.']);
    exit;
}

// Resolve API key — same priority as tts.php.
$apikey = get_config('local_ai_course_assistant', 'realtime_apikey');
if (empty($apikey)) {
    $provider   = get_config('local_ai_course_assistant', 'provider');
    $mainapikey = get_config('local_ai_course_assistant', 'apikey');
    if ($provider === 'openai' && !empty($mainapikey)) {
        $apikey = $mainapikey;
    }
}
if (empty($apikey)) {
    http_response_code(503);
    echo json_encode(['error' => 'No OpenAI API key configured for transcription.']);
    exit;
}

// Optional ISO 639-1 language hint (e.g. 'en', 'es').
$lang = optional_param('lang', '', PARAM_ALPHA);

$tmpfile  = $_FILES['audio']['tmp_name'];
$mimetype = !empty($_FILES['audio']['type']) ? $_FILES['audio']['type'] : 'audio/webm';

// Map MIME type to a file extension Whisper will recognise.
$ext_map = [
    'audio/webm'  => 'webm',
    'audio/ogg'   => 'ogg',
    'audio/mp4'   => 'mp4',
    'audio/mpeg'  => 'mp3',
    'audio/wav'   => 'wav',
    'audio/x-wav' => 'wav',
];
$ext      = $ext_map[$mimetype] ?? 'webm';
$filename = 'audio.' . $ext;

$post = [
    'file'  => new CURLFile($tmpfile, $mimetype, $filename),
    'model' => 'whisper-1',
];
if (!empty($lang)) {
    $post['language'] = $lang;
}

$ch = curl_init('https://api.openai.com/v1/audio/transcriptions');
curl_setopt_array($ch, \local_ai_course_assistant\raw_curl_helper::with_moodle_defaults([
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $post,
    CURLOPT_HTTPHEADER     => [
        'Authorization: Bearer ' . $apikey,
    ],
    CURLOPT_TIMEOUT        => 30,
]));
$response = curl_exec($ch);
$httpcode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpcode !== 200) {
    http_response_code(502);
    echo json_encode(['error' => 'Transcription API error ' . $httpcode]);
    exit;
}

$data = json_decode($response, true);
if (!isset($data['text'])) {
    http_response_code(502);
    echo json_encode(['error' => 'Invalid transcription response.']);
    exit;
}

echo json_encode(['text' => $data['text']]);
