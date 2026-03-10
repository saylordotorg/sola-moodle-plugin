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

defined('MOODLE_INTERNAL') || die();

/**
 * Shared helper for native PHP cURL requests.
 *
 * Mirrors Moodle's CA bundle lookup so raw curl calls behave the same way
 * as Moodle's \curl wrapper on Windows and other custom deployments.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class raw_curl_helper {

    /**
     * Merge Moodle-compatible SSL and proxy options into a curl_setopt_array map.
     *
     * @param array $options Native curl_setopt_array options keyed by CURLOPT_* constants.
     * @return array
     */
    public static function with_moodle_defaults(array $options): array {
        return $options + self::get_network_options();
    }

    /**
     * Get shared network options for raw cURL calls.
     *
     * @return array
     */
    private static function get_network_options(): array {
        global $CFG;

        $options = [];
        $cacert = self::get_cacert();
        if (!empty($cacert)) {
            $options[CURLOPT_CAINFO] = $cacert;
        }

        if (!empty($CFG->proxyhost)) {
            $options[CURLOPT_PROXY] = $CFG->proxyhost;
            if (!empty($CFG->proxyport)) {
                $options[CURLOPT_PROXYPORT] = $CFG->proxyport;
            }
            if (!empty($CFG->proxyuser)) {
                $options[CURLOPT_PROXYUSERPWD] = $CFG->proxyuser . ':' . ($CFG->proxypassword ?? '');
            }
        }

        return $options;
    }

    /**
     * Resolve the CA bundle to use for native curl requests.
     *
     * @return string|null
     */
    private static function get_cacert(): ?string {
        global $CFG;

        if (class_exists('\curl') && method_exists('\curl', 'get_cacert')) {
            $cacert = \curl::get_cacert();
            if (!empty($cacert) && is_readable($cacert)) {
                return realpath($cacert) ?: $cacert;
            }
        }

        $candidates = [
            $CFG->dataroot . '/moodleorgca.crt',
            (string) ini_get('curl.cainfo'),
        ];

        if (!empty($CFG->ostype) && $CFG->ostype === 'WINDOWS') {
            $candidates[] = $CFG->libdir . '/cacert.pem';
        }

        foreach ($candidates as $candidate) {
            $candidate = trim((string) $candidate);
            if ($candidate !== '' && is_readable($candidate)) {
                return realpath($candidate) ?: $candidate;
            }
        }

        return null;
    }
}
