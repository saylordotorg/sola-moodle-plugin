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

namespace local_ai_course_assistant\provider;

/**
 * Base provider for all OpenAI-compatible APIs.
 *
 * Handles the standard OpenAI chat completions format. Subclasses only need
 * to override default base URL, auth header, and endpoint path.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class openai_compatible_provider extends base_provider {

    /**
     * Get the chat completions endpoint path.
     *
     * @return string
     */
    protected function get_endpoint(): string {
        return '/v1/chat/completions';
    }

    /**
     * Get request headers.
     *
     * @return array
     */
    protected function get_headers(): array {
        $headers = [
            'Content-Type: application/json',
        ];
        if (!empty($this->apikey)) {
            $headers[] = 'Authorization: Bearer ' . $this->apikey;
        }
        return $headers;
    }

    /**
     * Build the request body.
     *
     * @param string $systemprompt
     * @param array $messages
     * @param bool $stream
     * @param array $options
     * @return string JSON body.
     */
    protected function build_body(string $systemprompt, array $messages, bool $stream, array $options): string {
        // Prepend system message.
        $apimessages = [];
        if (!empty($systemprompt)) {
            $apimessages[] = ['role' => 'system', 'content' => $systemprompt];
        }

        foreach ($messages as $msg) {
            $apimessages[] = [
                'role' => $msg['role'],
                'content' => $msg['content'],
            ];
        }

        $body = [
            'model' => $this->model,
            'messages' => $apimessages,
            'temperature' => $options['temperature'] ?? $this->temperature,
        ];

        if (isset($options['max_tokens'])) {
            $body['max_tokens'] = $options['max_tokens'];
        }

        if ($stream) {
            $body['stream'] = true;
        }

        return json_encode($body);
    }

    public function chat_completion(string $systemprompt, array $messages, array $options = []): string {
        $url = $this->baseurl . $this->get_endpoint();
        $body = $this->build_body($systemprompt, $messages, false, $options);
        $response = $this->http_post($url, $this->get_headers(), $body);

        $data = json_decode($response, true);
        if (!$data || !isset($data['choices'][0]['message']['content'])) {
            throw new \moodle_exception('chat:error', 'local_ai_course_assistant', '', null, 'Invalid API response');
        }

        return $data['choices'][0]['message']['content'];
    }

    public function chat_completion_stream(string $systemprompt, array $messages, callable $callback, array $options = []): void {
        $url = $this->baseurl . $this->get_endpoint();
        $body = $this->build_body($systemprompt, $messages, true, $options);

        $buffer = '';

        $this->http_post_stream($url, $this->get_headers(), $body, function ($data) use ($callback, &$buffer) {
            $buffer .= $data;

            while (($pos = strpos($buffer, "\n")) !== false) {
                $line = substr($buffer, 0, $pos);
                $buffer = substr($buffer, $pos + 1);
                $line = trim($line);

                if (empty($line) || !str_starts_with($line, 'data: ')) {
                    continue;
                }

                $json = substr($line, 6);
                if ($json === '[DONE]') {
                    return;
                }

                $event = json_decode($json, true);
                if (!$event) {
                    continue;
                }

                $content = $event['choices'][0]['delta']['content'] ?? '';
                if ($content !== '') {
                    $callback($content);
                }
            }
        });
    }
}
