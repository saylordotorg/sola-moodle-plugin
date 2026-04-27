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

namespace local_ai_course_assistant\embedding_provider;

/**
 * Abstract base for embedding providers.
 *
 * Concrete implementations: openai_embedding_provider, ollama_embedding_provider.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class base_embedding_provider {

    /** @var string API key (may be empty for local providers). */
    protected string $apikey;

    /** @var string Model name. */
    protected string $model;

    /** @var string Base URL. */
    protected string $baseurl;

    /** @var int Expected embedding dimensions. */
    protected int $dimensions;

    /**
     * Constructor — reads plugin RAG config.
     */
    public function __construct() {
        $this->apikey     = (string) (get_config('local_ai_course_assistant', 'embed_apikey') ?: '');
        $this->model      = (string) (get_config('local_ai_course_assistant', 'embed_model') ?: $this->get_default_model());
        $this->dimensions = (int)   (get_config('local_ai_course_assistant', 'embed_dimensions') ?: 1536);

        $configurl = get_config('local_ai_course_assistant', 'embed_apibaseurl');
        $this->baseurl = !empty($configurl) ? rtrim($configurl, '/') : $this->get_default_base_url();
    }

    /**
     * Get the default model name for this provider.
     *
     * @return string
     */
    abstract protected function get_default_model(): string;

    /**
     * Get the default API base URL for this provider.
     *
     * @return string
     */
    abstract protected function get_default_base_url(): string;

    /**
     * Embed a single text string.
     *
     * @param string $text
     * @return float[] Embedding vector.
     * @throws \moodle_exception On API error.
     */
    abstract public function embed(string $text): array;

    /**
     * Embed multiple texts in a batch (may make multiple API calls).
     *
     * @param string[] $texts
     * @return float[][] Array of embedding vectors (same order as input).
     * @throws \moodle_exception On API error.
     */
    abstract public function embed_batch(array $texts): array;

    /**
     * Factory: create the configured embedding provider from plugin settings.
     *
     * @return base_embedding_provider
     * @throws \moodle_exception If embed_provider is not set or unsupported.
     */
    public static function create_from_config(): base_embedding_provider {
        $provider = (string) (get_config('local_ai_course_assistant', 'embed_provider') ?: 'openai');

        switch ($provider) {
            case 'openai':
                return new openai_embedding_provider();
            case 'ollama':
                return new ollama_embedding_provider();
            default:
                throw new \moodle_exception(
                    'chat:error_notconfigured',
                    'local_ai_course_assistant',
                    '',
                    null,
                    "Unknown embed_provider: {$provider}"
                );
        }
    }

    /**
     * Log embedding token usage to the msgs table for cost tracking.
     *
     * Uses a system-level conversation record so the cost appears in analytics
     * alongside chat token costs.
     *
     * @param int $tokens Total tokens used in this embedding call.
     */
    protected function log_embedding_cost(int $tokens): void {
        global $DB;
        try {
            // Use site-level (courseid=1) system record for embedding costs.
            // These are background indexing costs, not per-student.
            $record = new \stdClass();
            $record->conversationid = 0;
            $record->userid = 0;
            $record->courseid = SITEID;
            $record->role = 'system';
            $record->message = '[Embedding]';
            $record->tokens_used = $tokens;
            $record->prompt_tokens = $tokens;
            $record->completion_tokens = 0;
            $record->model_name = $this->model;
            $record->provider = 'embedding';
            $record->interaction_type = 'embedding';
            $record->timecreated = time();
            $DB->insert_record('local_ai_course_assistant_msgs', $record);
        } catch (\Throwable $e) {
            // Non-critical — don't break indexing if cost logging fails.
        }
    }

    /**
     * Make a POST request using Moodle's curl class.
     *
     * @param string $url
     * @param array  $headers
     * @param string $body JSON-encoded request body.
     * @return string Raw response body.
     * @throws \moodle_exception On HTTP errors.
     */
    protected function http_post(string $url, array $headers, string $body): string {
        global $CFG;
        if (!\local_ai_course_assistant\security::is_safe_provider_url($url)) {
            throw new \moodle_exception('chat:error_generic', 'local_ai_course_assistant',
                '', null, "embedding endpoint failed SSRF validation: {$url}");
        }
        require_once($CFG->libdir . '/filelib.php'); // For \curl.
        $curl = new \curl();
        $curl->setopt([
            'CURLOPT_HTTPHEADER'    => $headers,
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_TIMEOUT'       => 120,
        ]);

        $response = $curl->post($url, $body);
        $httpcode = $curl->get_info()['http_code'] ?? 0;

        if ($httpcode < 200 || $httpcode >= 300) {
            if ($httpcode === 401 || $httpcode === 403) {
                throw new \moodle_exception('chat:error_auth', 'local_ai_course_assistant');
            }
            if ($httpcode === 429) {
                throw new \moodle_exception('chat:error_ratelimit', 'local_ai_course_assistant');
            }
            throw new \moodle_exception(
                'chat:error',
                'local_ai_course_assistant',
                '',
                null,
                "Embedding API HTTP {$httpcode}: {$response}"
            );
        }

        return $response;
    }
}
