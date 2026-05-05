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
 * Per-learner career goals manager (v5.3.0).
 *
 * Stores three opt-in free-text answers volunteered by the learner about
 * why they are taking the course and what they hope to become. Surfaces
 * the answers in the system prompt so SOLA's replies connect with the
 * learner's stated purpose. Never visible to instructors.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class learner_goals_manager {

    /** Table name. */
    const TABLE = 'local_ai_course_assistant_learner_goals';

    /** Re-ask cooldown after dismissal: 30 days. */
    const REASK_COOLDOWN_SEC = 30 * 86400;

    /**
     * Fetch the row for (userid, courseid) or null.
     *
     * @param int $userid
     * @param int $courseid
     * @return \stdClass|null
     */
    public static function get(int $userid, int $courseid): ?\stdClass {
        global $DB;
        $row = $DB->get_record(self::TABLE, ['userid' => $userid, 'courseid' => $courseid]);
        return $row ?: null;
    }

    /**
     * Save (insert or update) free-text answers and mark consent.
     *
     * Empty strings are stored as null so the prompt builder can omit
     * absent answers cleanly.
     *
     * @param int $userid
     * @param int $courseid
     * @param string $q1 Why are you here?
     * @param string $q2 What do you want to become?
     * @param string $q3 Anything else SOLA should keep in mind?
     */
    public static function save(int $userid, int $courseid, string $q1, string $q2 = '', string $q3 = ''): void {
        global $DB;
        $now = time();
        $existing = self::get($userid, $courseid);
        $row = (object)[
            'userid' => $userid,
            'courseid' => $courseid,
            'q1_answer' => trim($q1) === '' ? null : trim($q1),
            'q2_answer' => trim($q2) === '' ? null : trim($q2),
            'q3_answer' => trim($q3) === '' ? null : trim($q3),
            'consented_at' => $existing && !empty($existing->consented_at) ? (int)$existing->consented_at : $now,
            'dismissed_at' => $existing ? (int)$existing->dismissed_at : 0,
            'timemodified' => $now,
        ];
        if ($existing) {
            $row->id = $existing->id;
            $DB->update_record(self::TABLE, $row);
        } else {
            $row->timecreated = $now;
            $DB->insert_record(self::TABLE, $row);
        }
    }

    /**
     * Wipe all three answers but keep the consent record so the learner
     * is not re-prompted unless they explicitly request it.
     *
     * @param int $userid
     * @param int $courseid
     */
    public static function clear(int $userid, int $courseid): void {
        global $DB;
        $existing = self::get($userid, $courseid);
        if (!$existing) {
            return;
        }
        $now = time();
        $existing->q1_answer = null;
        $existing->q2_answer = null;
        $existing->q3_answer = null;
        $existing->timemodified = $now;
        $DB->update_record(self::TABLE, $existing);
    }

    /**
     * Mark that the learner dismissed the goals prompt. Used to
     * rate-limit the re-ask so we do not nag.
     *
     * @param int $userid
     * @param int $courseid
     */
    public static function dismiss(int $userid, int $courseid): void {
        global $DB;
        $now = time();
        $existing = self::get($userid, $courseid);
        if ($existing) {
            $existing->dismissed_at = $now;
            $existing->timemodified = $now;
            $DB->update_record(self::TABLE, $existing);
            return;
        }
        $row = (object)[
            'userid' => $userid,
            'courseid' => $courseid,
            'dismissed_at' => $now,
            'consented_at' => 0,
            'timecreated' => $now,
            'timemodified' => $now,
        ];
        $DB->insert_record(self::TABLE, $row);
    }

    /**
     * Should we surface the goals prompt to this learner right now?
     *
     * Yes if: (a) feature is enabled site-wide, (b) no answers stored
     * yet, and (c) either no prior dismissal, or the dismissal is
     * older than the re-ask cooldown.
     *
     * @param int $userid
     * @param int $courseid
     * @return bool
     */
    public static function should_prompt(int $userid, int $courseid): bool {
        if (!(bool)get_config('local_ai_course_assistant', 'goals_feature_enabled')) {
            return false;
        }
        $row = self::get($userid, $courseid);
        if (!$row) {
            return true;
        }
        if (!empty($row->q1_answer) || !empty($row->q2_answer) || !empty($row->q3_answer)) {
            return false;
        }
        if (empty($row->dismissed_at)) {
            return true;
        }
        return (time() - (int)$row->dismissed_at) > self::REASK_COOLDOWN_SEC;
    }

    /**
     * Build the system-prompt section for this learner's goals (or empty
     * string if no answers stored). Plain text, no formatting tricks; the
     * learner volunteered every word, so we just hand it to the model.
     *
     * @param int $userid
     * @param int $courseid
     * @return string
     */
    public static function build_prompt_section(int $userid, int $courseid): string {
        $row = self::get($userid, $courseid);
        if (!$row || (empty($row->q1_answer) && empty($row->q2_answer) && empty($row->q3_answer))) {
            return '';
        }
        $lines = ["\n\n## What this learner is working toward"];
        if (!empty($row->q1_answer)) {
            $lines[] = "Why they are taking this course: " . $row->q1_answer;
        }
        if (!empty($row->q2_answer)) {
            $lines[] = "What they want to become: " . $row->q2_answer;
        }
        if (!empty($row->q3_answer)) {
            $lines[] = "Other context: " . $row->q3_answer;
        }
        $lines[] = '';
        $lines[] = "When you give explanations or examples, prefer ones that connect to this goal where natural. Do not force a connection if none exists, and do not quote the learner's words back at them.";
        return implode("\n", $lines);
    }
}
