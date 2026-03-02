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

        // Get API key: prefer dedicated realtime key, fall back to main key when provider=openai.
        $apikey = get_config('local_ai_course_assistant', 'realtime_apikey');
        if (empty($apikey)) {
            $provider = get_config('local_ai_course_assistant', 'provider');
            if ($provider === 'openai') {
                $apikey = get_config('local_ai_course_assistant', 'apikey');
            }
        }

        if (empty($apikey)) {
            throw new \moodle_exception('error', 'local_ai_course_assistant', '', null,
                'No OpenAI API key configured for voice mode.');
        }

        $voice = get_config('local_ai_course_assistant', 'realtime_voice') ?: 'shimmer';

        // Call OpenAI Realtime sessions endpoint to get an ephemeral token.
        $curl = new \curl();
        $curl->setHeader([
            'Authorization: Bearer ' . $apikey,
            'Content-Type: application/json',
        ]);

        $body = json_encode([
            'session' => [
                'type'  => 'realtime',
                'model' => 'gpt-4o-mini-realtime',
                'audio' => [
                    'output' => ['voice' => $voice],
                ],
            ],
        ]);

        $response = $curl->post('https://api.openai.com/v1/realtime/client_secrets', $body);
        $info = $curl->get_info();

        if ($info['http_code'] !== 200) {
            $errdata = json_decode($response, true);
            $errmsg = isset($errdata['error']['message']) ? $errdata['error']['message'] : 'API error ' . $info['http_code'];
            throw new \moodle_exception('error', 'local_ai_course_assistant', '', null, $errmsg);
        }

        $data = json_decode($response, true);
        if (empty($data['value'])) {
            throw new \moodle_exception('error', 'local_ai_course_assistant', '', null,
                'Unexpected response from OpenAI Realtime API.');
        }

        return [
            'token' => $data['value'],
            'voice' => $voice,
        ];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'token' => new external_value(PARAM_RAW, 'Ephemeral session token'),
            'voice' => new external_value(PARAM_ALPHANUMEXT, 'Voice identifier'),
        ]);
    }
}
