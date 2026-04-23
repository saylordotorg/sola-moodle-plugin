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
 * Single source of truth for product and institution branding strings.
 *
 * Every user-facing surface (widget, admin pages, privacy notice, download
 * filenames, consent banner, audit log action labels) routes through this
 * class so an operator can rebrand the plugin end to end by setting a
 * handful of admin config values — no code changes, no string file edits.
 *
 * Admin config keys consulted:
 *   display_name              → full product name, e.g. "Saylor Online Learning Assistant"
 *   short_name                → short product name, e.g. "SOLA"
 *   institution_name          → full institution name
 *   institution_short_name    → short institution name
 *   dpo_email                 → Data Protection Officer contact email
 *   privacy_external_url      → institution-level privacy page URL
 *
 * Defaults are the original Saylor values so existing installations keep
 * the current behavior without any config flip required.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class branding {

    /**
     * Full product name, used in UI headings and learner-facing docs.
     */
    public static function display_name(): string {
        $v = get_config('local_ai_course_assistant', 'display_name');
        return $v !== false && $v !== '' ? $v : 'Saylor Online Learning Assistant';
    }

    /**
     * Short product name, used in buttons, tooltips, filenames, and tight
     * text where the full display name would not fit.
     */
    public static function short_name(): string {
        $v = get_config('local_ai_course_assistant', 'short_name');
        return $v !== false && $v !== '' ? $v : 'SOLA';
    }

    /**
     * Full institution name, used in the privacy notice, consent banner,
     * and any operator-branded copy.
     */
    public static function institution_name(): string {
        $v = get_config('local_ai_course_assistant', 'institution_name');
        return $v !== false && $v !== '' ? $v : 'Saylor University';
    }

    /**
     * Short institution name, used where space is tight.
     */
    public static function institution_short_name(): string {
        $v = get_config('local_ai_course_assistant', 'institution_short_name');
        return $v !== false && $v !== '' ? $v : 'Saylor U';
    }

    /**
     * Data Protection Officer contact email surfaced in the privacy notice.
     * Operators who do not set this see a neutral placeholder.
     */
    public static function dpo_email(): string {
        $v = get_config('local_ai_course_assistant', 'dpo_email');
        return $v !== false && $v !== '' ? $v : 'dpo@saylor.org';
    }

    /**
     * Institution-level privacy page URL surfaced in the privacy notice.
     */
    public static function privacy_external_url(): string {
        $v = get_config('local_ai_course_assistant', 'privacy_external_url');
        return $v !== false && $v !== '' ? $v : 'https://www.saylor.org/privacy';
    }

    /**
     * Lowercase dash-safe slug derived from the short product name. Used
     * for filenames and identifiers that must be filesystem-friendly.
     *
     * Example: "Saylor AI Assistant" → "saylor-ai-assistant"
     */
    public static function filename_slug(): string {
        $short = self::short_name();
        $slug = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $short));
        $slug = trim($slug, '-');
        return $slug !== '' ? $slug : 'ai-course-assistant';
    }
}
