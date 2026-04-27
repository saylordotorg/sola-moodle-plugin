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

namespace local_ai_course_assistant\external;

use core_external\external_api;
use core_external\external_function_parameters;
use core_external\external_single_structure;
use core_external\external_value;

/**
 * External function to get an ephemeral token for OpenAI Realtime voice mode.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_realtime_token extends external_api {

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
        ]);
    }

    /**
     * Get an ephemeral OpenAI Realtime session token.
     *
     * @param int $courseid
     * @return array
     */
    public static function execute(int $courseid): array {
        $params = self::validate_parameters(self::execute_parameters(), ['courseid' => $courseid]);

        $coursecontext = \context_course::instance($params['courseid']);
        self::validate_context($coursecontext);
        require_capability('local/ai_course_assistant:use', $coursecontext);

        // Resolve active Realtime provider via the voice_providers registry.
        $cfg = \local_ai_course_assistant\voice_registry::resolve(
            \local_ai_course_assistant\voice_registry::CAPABILITY_REALTIME);
        if ($cfg === null) {
            throw new \moodle_exception('error', 'local_ai_course_assistant', '',
                'No voice provider configured for Realtime.');
        }

        // xAI Realtime: the master API key must never leave the server, so
        // we mint a short-lived HS256 JWT scoped to this learner + course +
        // voice + a fresh nonce and return the proxy URL with the token
        // embedded. The standalone `services/xai_rt_proxy/` daemon validates
        // the token and opens the upstream WebSocket to api.x.ai itself.
        if ($cfg['provider'] === 'xai') {
            $proxyurl = get_config('local_ai_course_assistant', 'xai_proxy_url');
            $jwtsecret = get_config('local_ai_course_assistant', 'xai_proxy_jwt_secret');
            if (empty($proxyurl) || empty($jwtsecret)) {
                throw new \moodle_exception('error', 'local_ai_course_assistant', '',
                    'xAI Realtime proxy is not configured. Set xai_proxy_url and xai_proxy_jwt_secret in SOLA admin settings, or switch voice to OpenAI.');
            }
            // SSRF check: the proxy URL is wss://; the validator wants https://
            // for the host-and-IP-range check, so map for validation only.
            $proxyurlforcheck = preg_replace('/^wss:\/\//i', 'https://', $proxyurl);
            if (!\local_ai_course_assistant\security::is_safe_provider_url($proxyurlforcheck)) {
                throw new \moodle_exception('error', 'local_ai_course_assistant', '',
                    'xAI Realtime proxy URL failed SSRF validation.');
            }
            $now = time();
            $header = self::b64url(json_encode(['alg' => 'HS256', 'typ' => 'JWT']));
            $payload = self::b64url(json_encode([
                'sub'      => (int)$USER->id,
                'courseid' => (int)$params['courseid'],
                'provider' => 'xai',
                'voice'    => $cfg['voice'],
                'iat'      => $now,
                'nbf'      => $now,
                'exp'      => $now + 60,
                'nonce'    => bin2hex(random_bytes(12)),
            ]));
            $sig = self::b64url(hash_hmac('sha256', $header . '.' . $payload, $jwtsecret, true));
            $jwt = $header . '.' . $payload . '.' . $sig;
            $sep = (strpos($proxyurl, '?') === false) ? '?' : '&';
            return [
                // Empty token: the proxy URL carries the auth. The client must
                // not pass a subprotocol bearer for the xAI-via-proxy path.
                'token'    => '',
                'voice'    => $cfg['voice'],
                'provider' => 'xai',
                'endpoint' => $proxyurl . $sep . 'token=' . rawurlencode($jwt),
            ];
        }

        // OpenAI: mint an ephemeral client secret so the key never reaches the browser.
        $body = '{}';
        $ch = curl_init('https://api.openai.com/v1/realtime/client_secrets');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $body,
            CURLOPT_HTTPHEADER     => [
                'Authorization: Bearer ' . $cfg['apikey'],
                'Content-Type: application/json',
                'Content-Length: ' . strlen($body),
            ],
            CURLOPT_TIMEOUT        => 5,
        ]);
        $response = curl_exec($ch);
        $httpcode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpcode !== 200) {
            $errdata = json_decode($response, true);
            $errmsg = isset($errdata['error']['message'])
                ? $errdata['error']['message']
                : 'API error ' . $httpcode . ': ' . substr($response, 0, 300);
            throw new \moodle_exception('error', 'local_ai_course_assistant', '', $errmsg);
        }

        $data = json_decode($response, true);
        $token = $data['client_secret']['value'] ?? ($data['value'] ?? '');
        if (empty($token)) {
            throw new \moodle_exception('error', 'local_ai_course_assistant', '',
                'Unexpected response from OpenAI Realtime API: ' . substr($response, 0, 200));
        }

        return [
            'token'    => $token,
            'voice'    => $cfg['voice'],
            'provider' => 'openai',
            'endpoint' => $cfg['endpoint'],
        ];
    }

    /**
     * base64url encoder used for the JWT header/payload/signature.
     *
     * @param string $data
     * @return string
     */
    private static function b64url(string $data): string {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    /**
     * Returns description of method result value.
     *
     * @return external_single_structure
     */
    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'token'    => new external_value(PARAM_RAW, 'Ephemeral session token (or raw API key for providers without ephemeral support)'),
            'voice'    => new external_value(PARAM_ALPHANUMEXT, 'Voice identifier'),
            'provider' => new external_value(PARAM_ALPHANUMEXT, 'Provider id (openai|xai)'),
            'endpoint' => new external_value(PARAM_URL, 'WebSocket endpoint URL'),
        ]);
    }
}
