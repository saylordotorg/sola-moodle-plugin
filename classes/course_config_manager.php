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
 * Per-course AI provider configuration manager.
 *
 * Allows site admins to override the global AI provider settings on a
 * per-course basis. Blank fields inherit the global plugin config value.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_config_manager {

    /**
     * Fetch the raw course config record (or null if none exists).
     *
     * @param int $courseid
     * @return \stdClass|null
     */
    public static function get(int $courseid): ?\stdClass {
        global $DB;
        $record = $DB->get_record('local_ai_course_assistant_course_cfg', ['courseid' => $courseid]);
        return $record ?: null;
    }

    /**
     * Insert or update course config overrides.
     *
     * @param int $courseid
     * @param array $data Associative array with keys: enabled, provider, apikey,
     *                    model, apibaseurl, systemprompt, temperature.
     */
    public static function save(int $courseid, array $data): void {
        global $DB;

        $existing = $DB->get_record('local_ai_course_assistant_course_cfg', ['courseid' => $courseid]);
        $now = time();

        if ($existing) {
            $record = new \stdClass();
            $record->id = $existing->id;
            $record->enabled = (int) ($data['enabled'] ?? 0);
            $record->provider = $data['provider'] ?? '';
            $record->apikey = $data['apikey'] ?? '';
            $record->model = $data['model'] ?? '';
            $record->apibaseurl = $data['apibaseurl'] ?? '';
            $record->systemprompt = $data['systemprompt'] ?? '';
            $record->temperature = isset($data['temperature']) && $data['temperature'] !== ''
                ? (float) $data['temperature'] : null;
            $record->timemodified = $now;
            $DB->update_record('local_ai_course_assistant_course_cfg', $record);
        } else {
            $record = new \stdClass();
            $record->courseid = $courseid;
            $record->enabled = (int) ($data['enabled'] ?? 0);
            $record->provider = $data['provider'] ?? '';
            $record->apikey = $data['apikey'] ?? '';
            $record->model = $data['model'] ?? '';
            $record->apibaseurl = $data['apibaseurl'] ?? '';
            $record->systemprompt = $data['systemprompt'] ?? '';
            $record->temperature = isset($data['temperature']) && $data['temperature'] !== ''
                ? (float) $data['temperature'] : null;
            $record->timecreated = $now;
            $record->timemodified = $now;
            $DB->insert_record('local_ai_course_assistant_course_cfg', $record);
        }
    }

    /**
     * Get the effective config for a course, merging course overrides onto globals.
     *
     * Blank course fields fall through to the global plugin config value.
     * If no course record exists, or the override is disabled, returns global config.
     *
     * @param int $courseid
     * @return array Effective config with keys: provider, apikey, model,
     *               apibaseurl, systemprompt, temperature.
     */
    public static function get_effective_config(int $courseid): array {
        $global = [
            'provider'    => get_config('local_ai_course_assistant', 'provider') ?: 'claude',
            'apikey'      => get_config('local_ai_course_assistant', 'apikey') ?: '',
            'model'       => get_config('local_ai_course_assistant', 'model') ?: '',
            'apibaseurl'  => get_config('local_ai_course_assistant', 'apibaseurl') ?: '',
            'systemprompt' => get_config('local_ai_course_assistant', 'systemprompt') ?: '',
            'temperature'  => get_config('local_ai_course_assistant', 'temperature') ?: '0.7',
        ];

        if ($courseid <= 0) {
            return $global;
        }

        $course = self::get($courseid);
        if (!$course || !(int) $course->enabled) {
            return $global;
        }

        return [
            'provider'    => !empty($course->provider)    ? $course->provider    : $global['provider'],
            'apikey'      => !empty($course->apikey)      ? $course->apikey      : $global['apikey'],
            'model'       => !empty($course->model)       ? $course->model       : $global['model'],
            'apibaseurl'  => !empty($course->apibaseurl)  ? $course->apibaseurl  : $global['apibaseurl'],
            'systemprompt' => !empty($course->systemprompt) ? $course->systemprompt : $global['systemprompt'],
            'temperature'  => isset($course->temperature) && $course->temperature !== null
                ? (string) $course->temperature
                : $global['temperature'],
        ];
    }
}
