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
 * Provider adapter for Moodle's core_ai subsystem (Moodle 4.5+).
 *
 * Routes SOLA chat calls through \core_ai\manager::process_action() using the
 * generate_text action. The actual LLM connection, keys, and model selection
 * are configured site-wide by the admin under Site admin > AI.
 *
 * Limitations (tracked in .wiki/Roadmap-Moodle-AI-Provider.md):
 *
 *  - core_ai has no streaming API. chat_completion_stream() falls back to a
 *    single non-streamed call and emits the full response as one chunk.
 *  - core_ai's generate_text action accepts a single prompttext string, so
 *    SOLA's system prompt and conversation history are flattened into one
 *    prompt. Multi-turn nuance and prompt caching are lost versus direct
 *    providers.
 *  - No structured outputs, tool_use, adaptive thinking, or cache_control.
 *  - Per-course provider overrides still work for selecting core_ai vs a
 *    direct provider, but they cannot steer core_ai to a specific site-level
 *    provider (that is a site-wide decision inside core_ai itself).
 *
 * Recommended for courses that do not need streaming or provider-specific
 * features. For the best student experience, use a direct provider.
 */
class coreai_provider extends base_provider {

    /** @var array|null Token usage from the last successful call. */
    private ?array $lasttokenusage = null;

    /**
     * Override: core_ai has its own provider config surface, so skip the
     * apikey/model/baseurl parsing the parent does. Temperature is still read
     * for consistency even though core_ai does not expose it through
     * generate_text today.
     */
    public function __construct(array $overrides = []) {
        $this->apikey = '';
        $this->model = 'moodle_core_ai';
        $this->baseurl = '';
        $this->temperature = isset($overrides['temperature']) && $overrides['temperature'] !== ''
            ? (float) $overrides['temperature']
            : (float) (get_config('local_ai_course_assistant', 'temperature') ?: 0.7);
    }

    protected function get_default_model(): string {
        return 'moodle_core_ai';
    }

    protected function get_default_base_url(): string {
        return '';
    }

    public function chat_completion(string $systemprompt, array $messages, array $options = []): string {
        global $USER;

        if (!class_exists('\\core_ai\\manager') || !class_exists('\\core_ai\\aiactions\\generate_text')) {
            throw new \moodle_exception(
                'chat:error', 'local_ai_course_assistant', '', null,
                'Moodle core_ai subsystem not available. The Moodle provider requires Moodle 4.5 or later with an aiprovider plugin configured.'
            );
        }

        $prompttext = self::flatten_conversation($systemprompt, $messages);

        $contextid = isset($options['contextid']) && (int) $options['contextid'] > 0
            ? (int) $options['contextid']
            : \context_system::instance()->id;

        $action = new \core_ai\aiactions\generate_text(
            contextid: $contextid,
            userid: (int) $USER->id,
            prompttext: $prompttext,
        );

        $manager = new \core_ai\manager();
        $response = $manager->process_action($action);

        if (!$response->get_success()) {
            $msg = $response->get_errormessage() ?: 'core_ai returned an error.';
            $code = $response->get_errorcode();
            throw new \moodle_exception(
                'chat:error', 'local_ai_course_assistant', '', null,
                "Moodle core_ai error ({$code}): {$msg}"
            );
        }

        $data = $response->get_response_data();
        $text = (string) ($data['generatedcontent'] ?? '');

        $prompttokens = isset($data['prompttokens']) ? (int) $data['prompttokens'] : 0;
        $completiontokens = isset($data['completiontokens']) ? (int) $data['completiontokens'] : 0;
        if ($prompttokens > 0 || $completiontokens > 0) {
            $this->lasttokenusage = [
                'prompt_tokens' => $prompttokens,
                'completion_tokens' => $completiontokens,
                'model' => 'moodle_core_ai',
            ];
        } else {
            $this->lasttokenusage = null;
        }

        return $text;
    }

    public function chat_completion_stream(
        string $systemprompt,
        array $messages,
        callable $callback,
        array $options = []
    ): void {
        $text = $this->chat_completion($systemprompt, $messages, $options);
        if ($text !== '') {
            $callback($text);
        }
    }

    public function get_last_token_usage(): ?array {
        return $this->lasttokenusage;
    }

    /**
     * Flatten the system prompt + chat history into a single prompttext string,
     * since core_ai's generate_text action does not accept multi-turn messages.
     *
     * @param string $systemprompt
     * @param array $messages Array of ['role' => 'user'|'assistant', 'content' => '...'].
     * @return string
     */
    private static function flatten_conversation(string $systemprompt, array $messages): string {
        $parts = [];
        if (trim($systemprompt) !== '') {
            $parts[] = "[System instructions]\n" . $systemprompt;
        }
        foreach ($messages as $m) {
            $role = ($m['role'] ?? '') === 'assistant' ? 'Assistant' : 'User';
            $content = (string) ($m['content'] ?? '');
            if ($content === '') {
                continue;
            }
            $parts[] = $role . ': ' . $content;
        }
        $parts[] = 'Assistant:';
        return implode("\n\n", $parts);
    }
}
