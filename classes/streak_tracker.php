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
 * Per-(learner, course) activity-streak counter (v5.3.0).
 *
 * Records one row per learner per course tracking consecutive-day
 * activity. "Activity" is any qualifying signal: a chat turn, a course
 * module completion, etc. The exact set is determined by the callers
 * (currently sse.php on every chat turn, and the milestone scheduled
 * task on Moodle's course_module_completion_updated observer).
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class streak_tracker {

    /** Table. */
    const TABLE = 'local_ai_course_assistant_streak';

    /**
     * Record activity for (userid, courseid) on the current server day.
     * Idempotent within the same day.
     *
     * Returns true if the streak just crossed a milestone threshold
     * (7-day, 30-day, etc.) so the caller can fire a reflection email.
     *
     * @param int $userid
     * @param int $courseid
     * @return string|null Milestone kind crossed today, or null if none.
     */
    public static function record_activity(int $userid, int $courseid): ?string {
        global $DB;

        $today = self::today_str();
        $row = $DB->get_record(self::TABLE, ['userid' => $userid, 'courseid' => $courseid]);
        $now = time();

        if (!$row) {
            $DB->insert_record(self::TABLE, (object)[
                'userid' => $userid,
                'courseid' => $courseid,
                'current_streak_days' => 1,
                'longest_streak_days' => 1,
                'last_active_date' => $today,
                'last_milestone_kind' => '',
                'last_milestone_at' => 0,
                'timecreated' => $now,
                'timemodified' => $now,
            ]);
            return null;
        }

        // Already recorded today.
        if ($row->last_active_date === $today) {
            return null;
        }

        $prev = self::date_diff_days($row->last_active_date, $today);
        if ($prev === 1) {
            $row->current_streak_days = (int)$row->current_streak_days + 1;
        } else {
            $row->current_streak_days = 1;
        }
        $row->longest_streak_days = max((int)$row->longest_streak_days, $row->current_streak_days);
        $row->last_active_date = $today;
        $row->timemodified = $now;
        $DB->update_record(self::TABLE, $row);

        // Did we just cross a threshold?
        return self::milestone_crossed_today($row);
    }

    /**
     * Mark a milestone as sent so the same threshold does not re-fire.
     *
     * @param int $userid
     * @param int $courseid
     * @param string $kind streak7|streak30|completion
     */
    public static function mark_sent(int $userid, int $courseid, string $kind): void {
        global $DB;
        $row = $DB->get_record(self::TABLE, ['userid' => $userid, 'courseid' => $courseid]);
        if (!$row) {
            return;
        }
        $row->last_milestone_kind = $kind;
        $row->last_milestone_at = time();
        $row->timemodified = time();
        $DB->update_record(self::TABLE, $row);
    }

    /**
     * Get the row for a learner+course (for diagnostic/UI purposes).
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
     * Determine if today's increment crossed a streak threshold AND that
     * threshold has not been fired before for this learner+course.
     *
     * @param \stdClass $row Already-updated streak row.
     * @return string|null
     */
    private static function milestone_crossed_today(\stdClass $row): ?string {
        $current = (int)$row->current_streak_days;
        if ($current === 7 && $row->last_milestone_kind !== 'streak7') {
            return 'streak7';
        }
        if ($current === 30 && $row->last_milestone_kind !== 'streak30') {
            return 'streak30';
        }
        return null;
    }

    /**
     * YYYY-MM-DD in the Moodle server timezone.
     *
     * @return string
     */
    public static function today_str(): string {
        return userdate(time(), '%Y-%m-%d', \core_date::get_server_timezone());
    }

    /**
     * Days between two YYYY-MM-DD strings (b - a). Assumes well-formed
     * input from this class only.
     *
     * @param string $a
     * @param string $b
     * @return int
     */
    public static function date_diff_days(string $a, string $b): int {
        if ($a === '' || $b === '') {
            return 9999;
        }
        $da = \DateTime::createFromFormat('Y-m-d', $a);
        $db = \DateTime::createFromFormat('Y-m-d', $b);
        if ($da === false || $db === false) {
            return 9999;
        }
        $diff = $da->diff($db);
        return (int)$diff->days * ($diff->invert ? -1 : 1);
    }
}
