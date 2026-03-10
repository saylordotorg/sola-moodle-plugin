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
 * Claude (Anthropic) provider.
 *
 * Uses the Anthropic Messages API with x-api-key authentication.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class claude_provider extends base_provider {

    /** @var string Anthropic API version */
    private const API_VERSION = '2023-06-01';

    /** @var array|null Token usage from the last streaming call */
    private ?array $last_token_usage = null;

    /**
     * Get token usage from the last streaming call.
     *
     * @return array|null ['prompt_tokens', 'completion_tokens', 'model'] or null.
     */
    public function get_last_token_usage(): ?array {
        return $this->last_token_usage;
    }

    protected function get_default_model(): string {
        return 'claude-haiku-4-5-20251001';
    }

    protected function get_default_base_url(): string {
        return 'https://api.anthropic.com';
    }

    /**
     * Get request headers for Anthropic API.
     *
     * @return array
     */
    private function get_headers(): array {
        return [
            'Content-Type: application/json',
            'x-api-key: ' . $this->apikey,
            'anthropic-version: ' . self::API_VERSION,
        ];
    }

    /**
     * Build the request body for Anthropic Messages API.
     *
     * @param string $systemprompt
     * @param array $messages
     * @param bool $stream
     * @param array $options
     * @return string JSON body.
     */
    private function build_body(string $systemprompt, array $messages, bool $stream, array $options): string {
        $body = [
            'model' => $this->model,
            'max_tokens' => $options['max_tokens'] ?? 4096,
            'temperature' => $options['temperature'] ?? $this->temperature,
            'system' => $systemprompt,
            'messages' => array_map(function ($msg) {
                return [
                    'role' => $msg['role'],
                    'content' => $msg['content'],
                ];
            }, $messages),
        ];

        if ($stream) {
            $body['stream'] = true;
        }

        return json_encode($body);
    }

    public function chat_completion(string $systemprompt, array $messages, array $options = []): string {
        $url = $this->baseurl . '/v1/messages';
        $body = $this->build_body($systemprompt, $messages, false, $options);
        $response = $this->http_post($url, $this->get_headers(), $body);

        $data = json_decode($response, true);
        if (!$data || !isset($data['content'][0]['text'])) {
            throw new \moodle_exception('chat:error', 'local_ai_course_assistant', '', null, 'Invalid API response');
        }

        return $data['content'][0]['text'];
    }

    public function chat_completion_stream(string $systemprompt, array $messages, callable $callback, array $options = []): void {
        $url = $this->baseurl . '/v1/messages';
        $body = $this->build_body($systemprompt, $messages, true, $options);

        $buffer = '';
        $this->last_token_usage = null;

        $this->http_post_stream($url, $this->get_headers(), $body, function ($data) use ($callback, &$buffer) {
            $buffer .= $data;

            // Process complete SSE lines.
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

                $eventtype = $event['type'] ?? '';

                // message_start carries input token count and the model name.
                if ($eventtype === 'message_start') {
                    $this->last_token_usage = [
                        'prompt_tokens'     => (int) ($event['message']['usage']['input_tokens'] ?? 0),
                        'completion_tokens' => 0,
                        'model'             => $event['message']['model'] ?? $this->model,
                    ];
                }

                // message_delta carries output (completion) token count.
                if ($eventtype === 'message_delta' && isset($event['usage']['output_tokens'])) {
                    if ($this->last_token_usage !== null) {
                        $this->last_token_usage['completion_tokens'] = (int) $event['usage']['output_tokens'];
                    }
                }

                // content_block_delta carries the actual text chunks.
                if ($eventtype === 'content_block_delta') {
                    $text = $event['delta']['text'] ?? '';
                    if ($text !== '') {
                        $callback($text);
                    }
                }
            }
        });
    }
}
