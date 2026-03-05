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
 * Base provider with shared configuration and cURL helpers.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class base_provider implements provider_interface {

    /** @var string API key */
    protected string $apikey;

    /** @var string Model name */
    protected string $model;

    /** @var string Base URL */
    protected string $baseurl;

    /** @var float Temperature */
    protected float $temperature;

    /**
     * Constructor. Reads plugin config, with optional per-course overrides.
     *
     * @param array $overrides Optional config overrides from course_config_manager::get_effective_config().
     *                         Blank/absent keys fall through to the global plugin config.
     */
    public function __construct(array $overrides = []) {
        $rawkey = !empty($overrides['apikey'])
            ? $overrides['apikey']
            : (get_config('local_ai_course_assistant', 'apikey') ?: '');
        // Strip any descriptive label accidentally saved before the key
        // e.g. "OpenAI API Key sk-proj-..." → "sk-proj-..."
        $rawkey = trim($rawkey);
        $parts = preg_split('/\s+/', $rawkey);
        $this->apikey = count($parts) > 1 ? trim(end($parts)) : $rawkey;

        $adminmodel = get_config('local_ai_course_assistant', 'model');
        $this->model = !empty($overrides['model'])
            ? $overrides['model']
            : (!empty($adminmodel)
                ? $adminmodel
                : (\local_ai_course_assistant\remote_config_manager::get_value('model_default') ?: $this->get_default_model()));

        $this->temperature = isset($overrides['temperature']) && $overrides['temperature'] !== ''
            ? (float) $overrides['temperature']
            : (float) (get_config('local_ai_course_assistant', 'temperature') ?: 0.7);

        $configurl = !empty($overrides['apibaseurl'])
            ? $overrides['apibaseurl']
            : get_config('local_ai_course_assistant', 'apibaseurl');
        $this->baseurl = !empty($configurl) ? rtrim($configurl, '/') : $this->get_default_base_url();
    }

    /**
     * Get the default model for this provider.
     *
     * @return string
     */
    abstract protected function get_default_model(): string;

    /**
     * Get the default base URL for this provider.
     *
     * @return string
     */
    abstract protected function get_default_base_url(): string;

    /**
     * Make a non-streaming HTTP POST request using Moodle's curl class.
     *
     * @param string $url Full URL.
     * @param array $headers HTTP headers.
     * @param string $body JSON body.
     * @return string Response body.
     * @throws \moodle_exception On HTTP errors.
     */
    protected function http_post(string $url, array $headers, string $body): string {
        $curl = new \curl();
        $curl->setopt([
            'CURLOPT_HTTPHEADER' => $headers,
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_TIMEOUT' => 120,
        ]);

        $response = $curl->post($url, $body);
        $httpcode = $curl->get_info()['http_code'] ?? 0;

        $this->check_http_error($httpcode, $response);

        return $response;
    }

    /**
     * Make a streaming HTTP POST request using raw curl with WRITEFUNCTION.
     *
     * @param string $url Full URL.
     * @param array $headers HTTP headers.
     * @param string $body JSON body.
     * @param callable $writecallback Called with each chunk of response data.
     * @throws \moodle_exception On HTTP errors.
     */
    protected function http_post_stream(string $url, array $headers, string $body, callable $writecallback): void {
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => false,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_WRITEFUNCTION => function ($ch, $data) use ($writecallback) {
                $writecallback($data);
                return strlen($data);
            },
        ]);

        // Add proxy settings from Moodle config if present.
        global $CFG;
        if (!empty($CFG->proxyhost)) {
            curl_setopt($ch, CURLOPT_PROXY, $CFG->proxyhost);
            if (!empty($CFG->proxyport)) {
                curl_setopt($ch, CURLOPT_PROXYPORT, $CFG->proxyport);
            }
            if (!empty($CFG->proxyuser)) {
                curl_setopt($ch, CURLOPT_PROXYUSERPWD, $CFG->proxyuser . ':' . ($CFG->proxypassword ?? ''));
            }
        }

        curl_exec($ch);

        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            throw new \moodle_exception('chat:error', 'local_ai_course_assistant', '', null, $error);
        }

        if ($httpcode >= 400) {
            $this->check_http_error($httpcode, '');
        }
    }

    /**
     * Check HTTP status code and throw appropriate exception.
     *
     * @param int $httpcode
     * @param string $response
     * @throws \moodle_exception
     */
    protected function check_http_error(int $httpcode, string $response): void {
        if ($httpcode >= 200 && $httpcode < 300) {
            return;
        }

        if ($httpcode === 401 || $httpcode === 403) {
            throw new \moodle_exception('chat:error_auth', 'local_ai_course_assistant');
        }

        if ($httpcode === 429) {
            throw new \moodle_exception('chat:error_ratelimit', 'local_ai_course_assistant');
        }

        if ($httpcode >= 500) {
            throw new \moodle_exception('chat:error_unavailable', 'local_ai_course_assistant');
        }

        throw new \moodle_exception('chat:error', 'local_ai_course_assistant', '', null, "HTTP {$httpcode}: {$response}");
    }

    /**
     * Factory method to create a provider from plugin config, with optional per-course overrides.
     *
     * @param int $courseid Course ID to look up per-course overrides (0 = use global only).
     * @return provider_interface
     * @throws \moodle_exception If provider is not configured.
     */
    public static function create_from_config(int $courseid = 0): provider_interface {
        $overrides = \local_ai_course_assistant\course_config_manager::get_effective_config($courseid);
        $provider = !empty($overrides['provider'])
            ? $overrides['provider']
            : (get_config('local_ai_course_assistant', 'provider') ?: '');

        switch ($provider) {
            case 'claude':
                return new claude_provider($overrides);
            case 'openai':
                return new openai_provider($overrides);
            case 'ollama':
                return new ollama_provider($overrides);
            case 'minimax':
                return new minimax_provider($overrides);
            case 'deepseek':
                return new deepseek_provider($overrides);
            case 'custom':
                return new custom_provider($overrides);
            default:
                throw new \moodle_exception('chat:error_notconfigured', 'local_ai_course_assistant');
        }
    }
}
