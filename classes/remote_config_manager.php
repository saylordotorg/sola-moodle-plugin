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

namespace local_ai_course_assistant;

/**
 * Fetches and caches remote SOLA configuration from a GitHub-hosted JSON file.
 *
 * Allows Saylor to push prompt/config updates without a plugin release.
 * Local admin settings always take priority over remote values.
 * Falls back to empty array (hardcoded defaults) on any failure.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class remote_config_manager {

    /** Default remote config URL (overridable in plugin settings). */
    const DEFAULT_URL = 'https://raw.githubusercontent.com/saylordotorg/sola-moodle-plugin/main/sola-config.json';

    /** Cache TTL in seconds (1 hour). */
    const CACHE_TTL = 3600;

    /**
     * Return remote config as decoded array. Returns [] on any failure.
     *
     * @return array
     */
    public static function get(): array {
        $cache = \cache::make('local_ai_course_assistant', 'remoteconfig');
        $cached = $cache->get('config');
        if ($cached !== false) {
            return $cached;
        }

        $url = get_config('local_ai_course_assistant', 'remoteconfigurl') ?: self::DEFAULT_URL;
        $url = trim($url);

        // Security: only allow HTTPS URLs.
        if (!$url || strpos($url, 'https://') !== 0) {
            $cache->set('config', []);
            return [];
        }

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS      => 3,
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_USERAGENT      => 'SOLA-Moodle-Plugin/1.0',
        ]);
        $body = curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($code !== 200 || !$body) {
            $cache->set('config', []);
            return [];
        }

        $data = json_decode($body, true);
        if (!is_array($data)) {
            $cache->set('config', []);
            return [];
        }

        $cache->set('config', $data);
        return $data;
    }

    /**
     * Get a single key from remote config with a fallback value.
     *
     * @param string $key     Top-level key in the remote config JSON.
     * @param mixed  $fallback Value to return if key is absent or fetch failed.
     * @return mixed
     */
    public static function get_value(string $key, $fallback = null) {
        $config = self::get();
        return $config[$key] ?? $fallback;
    }

    /**
     * Invalidate the remote config cache (e.g. after saving settings).
     *
     * @return void
     */
    public static function invalidate(): void {
        \cache::make('local_ai_course_assistant', 'remoteconfig')->delete('config');
    }
}
