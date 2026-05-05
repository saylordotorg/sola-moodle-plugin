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
 * Carryover personalisation memory (v5.3.0).
 *
 * Holds short, bounded notes that persist across chat sessions for one
 * (userid, courseid) pair. Replaces the never-implemented "send a follow
 * up email when the learner struggles" path: instead we keep the note
 * private to the chat. The system prompt picks it up the next time
 * the learner opens the drawer in the same course, and SOLA can offer a
 * different angle if the learner raises the topic — never bring it up
 * uninvited.
 *
 * Storage: a single JSON blob per (userid, courseid) row. Bounded by:
 *   - At most 5 sticking-point entries per learner per course.
 *   - Sticking-point entries older than 90 days drop on next write.
 *   - Free-text fields capped at 200 chars each.
 *
 * Visibility: learner-only. Edit/clear surface lives in the in-drawer
 * Communications/Goals settings card. Never appears on any instructor
 * dashboard, Learning Radar export, or admin user-data page.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class learner_memory_manager {

    /** Table. */
    const TABLE = 'local_ai_course_assistant_learner_memory';

    /** Max sticking-point entries kept per (userid, courseid). */
    const MAX_STICKING = 5;

    /** Sticking-point entry TTL (90 days). */
    const STICKING_TTL_SEC = 90 * 86400;

    /** Per-field free-text cap. */
    const FIELD_CAP_CHARS = 200;

    /**
     * Read the raw row (or null).
     */
    public static function get(int $userid, int $courseid): ?\stdClass {
        global $DB;
        $row = $DB->get_record(self::TABLE, ['userid' => $userid, 'courseid' => $courseid]);
        return $row ?: null;
    }

    /**
     * Decode the notes JSON into a normalised array. Always returns a
     * full-shape array even when the row is missing.
     *
     * @param int $userid
     * @param int $courseid
     * @return array{sticking:array, style_prefs:array, last_active:int}
     */
    public static function get_notes(int $userid, int $courseid): array {
        $row = self::get($userid, $courseid);
        if (!$row || !is_string($row->notes_json) || $row->notes_json === '') {
            return self::empty_notes();
        }
        $decoded = json_decode($row->notes_json, true);
        if (!is_array($decoded)) {
            return self::empty_notes();
        }
        return self::normalise_notes($decoded);
    }

    /**
     * Record (or upgrade) a sticking-point entry. Increments the count
     * if the topic is already present; otherwise pushes a new entry.
     * After write, prunes entries past the TTL and trims to MAX_STICKING.
     *
     * @param int $userid
     * @param int $courseid
     * @param string $topic Short label, e.g. "Cellular respiration" or
     *                     a course module name. Capped to FIELD_CAP_CHARS.
     */
    public static function record_sticking_point(int $userid, int $courseid, string $topic): void {
        $topic = self::trim_field($topic);
        if ($topic === '') {
            return;
        }
        $notes = self::get_notes($userid, $courseid);

        $found = false;
        foreach ($notes['sticking'] as &$entry) {
            if (isset($entry['topic']) && strcasecmp((string)$entry['topic'], $topic) === 0) {
                $entry['count'] = (int)($entry['count'] ?? 0) + 1;
                $entry['last_seen'] = time();
                $found = true;
                break;
            }
        }
        unset($entry);

        if (!$found) {
            $notes['sticking'][] = [
                'topic' => $topic,
                'count' => 1,
                'last_seen' => time(),
            ];
        }

        $notes = self::prune_notes($notes);
        self::write_notes($userid, $courseid, $notes);
    }

    /**
     * Clear a single sticking-point entry by topic (case-insensitive).
     * No-op if the entry is absent.
     */
    public static function forget_sticking_point(int $userid, int $courseid, string $topic): void {
        $topic = self::trim_field($topic);
        if ($topic === '') {
            return;
        }
        $notes = self::get_notes($userid, $courseid);
        $notes['sticking'] = array_values(array_filter(
            $notes['sticking'],
            fn($e) => strcasecmp((string)($e['topic'] ?? ''), $topic) !== 0
        ));
        self::write_notes($userid, $courseid, $notes);
    }

    /**
     * Set or clear a style preference key (e.g. 'coaching_style' = 'tutor').
     * Pass empty string to unset.
     */
    public static function set_style_pref(int $userid, int $courseid, string $key, string $value): void {
        $key = self::trim_field($key);
        $value = self::trim_field($value);
        if ($key === '') {
            return;
        }
        $notes = self::get_notes($userid, $courseid);
        if ($value === '') {
            unset($notes['style_prefs'][$key]);
        } else {
            $notes['style_prefs'][$key] = $value;
        }
        self::write_notes($userid, $courseid, $notes);
    }

    /**
     * Wipe all notes for this learner+course. Learner can call this from
     * the Communications settings panel.
     */
    public static function clear(int $userid, int $courseid): void {
        global $DB;
        $row = self::get($userid, $courseid);
        if (!$row) {
            return;
        }
        $row->notes_json = json_encode(self::empty_notes());
        $row->timemodified = time();
        $DB->update_record(self::TABLE, $row);
    }

    /**
     * Build the system-prompt section for this learner's carryover notes.
     * Empty string when no useful notes exist.
     *
     * The prompt section is intentionally cautious: SOLA may use the
     * notes to inform tone and depth but should NOT volunteer them, and
     * should not say "I remember you struggled with X" — that creates a
     * surveillance impression we want to avoid.
     *
     * @param int $userid
     * @param int $courseid
     * @return string
     */
    public static function build_prompt_section(int $userid, int $courseid): string {
        if (!(bool)get_config('local_ai_course_assistant', 'memory_feature_enabled')) {
            return '';
        }
        $notes = self::get_notes($userid, $courseid);
        $notes = self::prune_notes($notes);

        $haveSticking = !empty($notes['sticking']);
        $haveStyle = !empty($notes['style_prefs']);
        if (!$haveSticking && !$haveStyle) {
            return '';
        }

        $lines = ["\n\n## What you have learned about this learner over time"];
        $lines[] = "Use the notes below to adjust depth, examples, and tone — never quote them back, and never bring them up uninvited. If the learner asks again about a topic flagged below, offer a different angle (analogy, simpler example, real-world application) before repeating yourself.";
        $lines[] = '';

        if ($haveSticking) {
            $lines[] = "Topics that have been hard for this learner before:";
            foreach ($notes['sticking'] as $entry) {
                $topic = (string)($entry['topic'] ?? '');
                $count = (int)($entry['count'] ?? 1);
                if ($topic === '') {
                    continue;
                }
                $lines[] = "- " . $topic . ($count > 1 ? " (came up {$count} times)" : '');
            }
            $lines[] = '';
        }

        if ($haveStyle) {
            $lines[] = "Style preferences the learner has confirmed:";
            foreach ($notes['style_prefs'] as $k => $v) {
                $lines[] = "- " . $k . ': ' . (string)$v;
            }
            $lines[] = '';
        }

        $lines[] = "Treat all of the above as private context for your own decisions. Do not narrate it.";
        return implode("\n", $lines);
    }

    /**
     * Persist the notes back to the row, normalising and bounding first.
     */
    private static function write_notes(int $userid, int $courseid, array $notes): void {
        global $DB;
        $notes = self::normalise_notes($notes);
        $notes = self::prune_notes($notes);
        $json = json_encode($notes);
        $now = time();
        $existing = self::get($userid, $courseid);
        if ($existing) {
            $existing->notes_json = $json;
            $existing->timemodified = $now;
            $DB->update_record(self::TABLE, $existing);
            return;
        }
        $DB->insert_record(self::TABLE, (object)[
            'userid' => $userid,
            'courseid' => $courseid,
            'notes_json' => $json,
            'timecreated' => $now,
            'timemodified' => $now,
        ]);
    }

    /**
     * Apply size and TTL bounds.
     */
    private static function prune_notes(array $notes): array {
        $cutoff = time() - self::STICKING_TTL_SEC;
        $sticking = [];
        foreach ($notes['sticking'] as $entry) {
            if (!isset($entry['last_seen']) || (int)$entry['last_seen'] >= $cutoff) {
                $sticking[] = $entry;
            }
        }
        // Keep most-recent-first ordering, then trim.
        usort($sticking, fn($a, $b) => (int)($b['last_seen'] ?? 0) <=> (int)($a['last_seen'] ?? 0));
        if (count($sticking) > self::MAX_STICKING) {
            $sticking = array_slice($sticking, 0, self::MAX_STICKING);
        }
        $notes['sticking'] = $sticking;
        $notes['last_active'] = time();
        return $notes;
    }

    /**
     * Force every input into the canonical shape so the rest of the
     * class can assume keys exist.
     */
    private static function normalise_notes(array $notes): array {
        $out = self::empty_notes();
        if (isset($notes['sticking']) && is_array($notes['sticking'])) {
            foreach ($notes['sticking'] as $e) {
                if (!is_array($e) || empty($e['topic'])) {
                    continue;
                }
                $out['sticking'][] = [
                    'topic' => self::trim_field((string)$e['topic']),
                    'count' => (int)($e['count'] ?? 1),
                    'last_seen' => (int)($e['last_seen'] ?? time()),
                ];
            }
        }
        if (isset($notes['style_prefs']) && is_array($notes['style_prefs'])) {
            foreach ($notes['style_prefs'] as $k => $v) {
                $k = self::trim_field((string)$k);
                $v = self::trim_field((string)$v);
                if ($k !== '' && $v !== '') {
                    $out['style_prefs'][$k] = $v;
                }
            }
        }
        if (isset($notes['last_active'])) {
            $out['last_active'] = (int)$notes['last_active'];
        }
        return $out;
    }

    /**
     * Default empty shape.
     */
    private static function empty_notes(): array {
        return [
            'sticking' => [],
            'style_prefs' => [],
            'last_active' => 0,
        ];
    }

    /**
     * Trim and cap a free-text field.
     */
    private static function trim_field(string $s): string {
        $s = trim($s);
        if (function_exists('mb_substr')) {
            return mb_substr($s, 0, self::FIELD_CAP_CHARS);
        }
        return substr($s, 0, self::FIELD_CAP_CHARS);
    }
}
