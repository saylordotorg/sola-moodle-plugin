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
 * Resolver for site-wide pedagogy defaults with per-course overrides.
 *
 * v4.5.0 — admins can flip a feature on for every course in one place
 * (Site administration → Plugins → Local plugins → AI Course Assistant →
 * Pedagogy defaults). Per-course overrides remain authoritative when set.
 *
 * Resolution order for every feature:
 *   1. Per-course key  `<feature>_enabled_course_<id>` — '1' force on, '0' force off
 *   2. Site-wide key   `<feature>_enabled`             — boolean
 *   3. Default                                          — false
 *
 * Existing call sites read the per-course key directly. They should be
 * migrated to call {@see resolve()} so the global default takes effect
 * everywhere consistently.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class feature_flags {

    /**
     * Resolve whether a pedagogy feature is enabled for a given course.
     *
     * @param string $feature Feature key. Examples: 'mastery', 'socratic_mode',
     *                        'worked_examples', 'flashcards', 'code_sandbox',
     *                        'essay_feedback'.
     * @param int $courseid
     * @return bool
     */
    public static function resolve(string $feature, int $courseid): bool {
        $override = get_config('local_ai_course_assistant', $feature . '_enabled_course_' . $courseid);
        if ($override === '1') {
            return true;
        }
        if ($override === '0') {
            return false;
        }
        return (bool) get_config('local_ai_course_assistant', $feature . '_enabled');
    }

    /**
     * Resolve and report which level decided the answer. Useful for the
     * course settings page to show "Inherit (currently on)" labels.
     *
     * @param string $feature
     * @param int $courseid
     * @return array{enabled:bool, source:string}
     *               source ∈ {'override', 'global', 'default'}
     */
    public static function resolve_with_source(string $feature, int $courseid): array {
        $override = get_config('local_ai_course_assistant', $feature . '_enabled_course_' . $courseid);
        if ($override === '1') {
            return ['enabled' => true, 'source' => 'override'];
        }
        if ($override === '0') {
            return ['enabled' => false, 'source' => 'override'];
        }
        $global = (bool) get_config('local_ai_course_assistant', $feature . '_enabled');
        return ['enabled' => $global, 'source' => $global ? 'global' : 'default'];
    }
}
