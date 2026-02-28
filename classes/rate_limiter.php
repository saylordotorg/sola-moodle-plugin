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
 * Rate limiter for API endpoints.
 *
 * Uses Moodle's cache API for efficient distributed rate limiting.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class rate_limiter {

    /** @var \cache Cache instance */
    private static $cache = null;

    /**
     * Get cache instance.
     *
     * @return \cache
     */
    private static function get_cache(): \cache {
        if (self::$cache === null) {
            self::$cache = \cache::make('local_ai_course_assistant', 'ratelimit');
        }
        return self::$cache;
    }

    /**
     * Check if a request should be rate limited.
     *
     * Uses sliding window algorithm with per-user and per-IP limits.
     *
     * @param int $userid User ID
     * @param string $endpoint Endpoint identifier
     * @param int $maxrequests Maximum requests per window
     * @param int $windowseconds Window size in seconds (default 60)
     * @return bool True if rate limit exceeded
     */
    public static function is_rate_limited(
        int $userid,
        string $endpoint,
        int $maxrequests = 20,
        int $windowseconds = 60
    ): bool {
        $cache = self::get_cache();
        $now = time();

        // Key based on user + endpoint.
        $key = "user_{$userid}_{$endpoint}";

        // Get current window data.
        $data = $cache->get($key);
        if (!$data) {
            $data = ['count' => 0, 'window_start' => $now];
        }

        // Check if we need to reset the window.
        if ($now - $data['window_start'] >= $windowseconds) {
            $data = ['count' => 0, 'window_start' => $now];
        }

        // Increment counter.
        $data['count']++;

        // Store back in cache.
        $cache->set($key, $data);

        // Check if limit exceeded.
        return $data['count'] > $maxrequests;
    }

    /**
     * Get IP-based rate limit check (additional security layer).
     *
     * @param string $endpoint Endpoint identifier
     * @param int $maxrequests Maximum requests per window
     * @param int $windowseconds Window size in seconds
     * @return bool True if rate limit exceeded
     */
    public static function is_ip_rate_limited(
        string $endpoint,
        int $maxrequests = 100,
        int $windowseconds = 60
    ): bool {
        $cache = self::get_cache();
        $now = time();
        $ip = getremoteaddr();

        // Key based on IP + endpoint.
        $key = "ip_" . md5($ip) . "_{$endpoint}";

        // Get current window data.
        $data = $cache->get($key);
        if (!$data) {
            $data = ['count' => 0, 'window_start' => $now];
        }

        // Check if we need to reset the window.
        if ($now - $data['window_start'] >= $windowseconds) {
            $data = ['count' => 0, 'window_start' => $now];
        }

        // Increment counter.
        $data['count']++;

        // Store back in cache.
        $cache->set($key, $data);

        // Check if limit exceeded.
        return $data['count'] > $maxrequests;
    }

    /**
     * Reset rate limit for a user (admin function).
     *
     * @param int $userid
     * @param string $endpoint
     */
    public static function reset_user_limit(int $userid, string $endpoint): void {
        $cache = self::get_cache();
        $key = "user_{$userid}_{$endpoint}";
        $cache->delete($key);
    }
}
