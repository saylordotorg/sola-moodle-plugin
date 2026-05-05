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

namespace local_ai_course_assistant\task;

defined('MOODLE_INTERNAL') || die();

use local_ai_course_assistant\outreach_sender;
use local_ai_course_assistant\streak_tracker;
use local_ai_course_assistant\learner_goals_manager;

/**
 * Daily scheduled task: scan streak rows and send milestone reflection
 * emails for any learner who crossed a 7-day streak, 30-day streak, or
 * course completion threshold since the last run.
 *
 * Course completion is detected by comparing Moodle's
 * course_completions.timecompleted with the streak row's
 * last_milestone_at; we never re-fire a completion email for the same
 * (userid, courseid).
 *
 * Email body is plain English, references only data the learner can see
 * themselves (activity dates, completion). Never references chat content.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class milestone_check extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:milestone_check', 'local_ai_course_assistant');
    }

    public function execute(): void {
        global $DB;

        if (!(bool)get_config('local_ai_course_assistant', 'milestones_feature_enabled')) {
            mtrace('milestone_check: milestones_feature_enabled is off; skipping.');
            return;
        }

        $sent = 0;
        $sent += $this->process_streak_milestones();
        $sent += $this->process_completion_milestones();

        mtrace("milestone_check: dispatched {$sent} emails.");
    }

    /**
     * Walk the streak table for rows whose current_streak_days is exactly
     * 7 or 30 and whose last_milestone_kind does not yet match. The
     * streak_tracker is updated on activity, but the milestone send
     * itself is gated by the cron run (so we never send from inside the
     * web request and risk doubling up under race).
     *
     * @return int Number of emails dispatched.
     */
    private function process_streak_milestones(): int {
        global $DB;
        $sent = 0;

        $sql = "SELECT s.* FROM {local_ai_course_assistant_streak} s
                 WHERE s.current_streak_days IN (7, 30)
                   AND (
                       (s.current_streak_days = 7 AND s.last_milestone_kind <> 'streak7')
                       OR (s.current_streak_days = 30 AND s.last_milestone_kind <> 'streak30')
                   )";
        $rows = $DB->get_records_sql($sql);
        foreach ($rows as $row) {
            $kind = ((int)$row->current_streak_days === 7) ? 'streak7' : 'streak30';
            $channel = ($kind === 'streak7') ? outreach_sender::CH_STREAK7 : outreach_sender::CH_STREAK30;

            // Cooldown short-circuit so we do not load user data needlessly.
            if (!outreach_sender::cooldown_clear((int)$row->userid)) {
                continue;
            }

            [$subject, $text, $html] = $this->build_streak_email((int)$row->userid, (int)$row->courseid, (int)$row->current_streak_days);
            if ($subject === '') {
                continue;
            }
            $reason = ($kind === 'streak7')
                ? get_string('milestone:trigger_streak7', 'local_ai_course_assistant')
                : get_string('milestone:trigger_streak30', 'local_ai_course_assistant');

            $ok = outreach_sender::send((int)$row->userid, (int)$row->courseid, $channel, $subject, $text, $html, $reason);
            if ($ok) {
                streak_tracker::mark_sent((int)$row->userid, (int)$row->courseid, $kind);
                $sent++;
            }
        }

        return $sent;
    }

    /**
     * Look at course_completions rows for users with a streak row in the
     * same course; if the completion timestamp is newer than the row's
     * last_milestone_at and the kind is not 'completion', dispatch.
     *
     * @return int Number of emails dispatched.
     */
    private function process_completion_milestones(): int {
        global $DB;
        $sent = 0;

        $sql = "SELECT s.id AS sid, s.userid, s.courseid, cc.timecompleted, s.last_milestone_kind, s.last_milestone_at
                  FROM {local_ai_course_assistant_streak} s
                  JOIN {course_completions} cc
                    ON cc.userid = s.userid AND cc.course = s.courseid
                 WHERE cc.timecompleted IS NOT NULL
                   AND cc.timecompleted > 0
                   AND (s.last_milestone_kind <> 'completion' OR s.last_milestone_at < cc.timecompleted)";
        $rows = $DB->get_records_sql($sql);
        foreach ($rows as $row) {
            if (!outreach_sender::cooldown_clear((int)$row->userid)) {
                continue;
            }
            [$subject, $text, $html] = $this->build_completion_email((int)$row->userid, (int)$row->courseid);
            if ($subject === '') {
                continue;
            }
            $reason = get_string('milestone:trigger_completion', 'local_ai_course_assistant');

            $ok = outreach_sender::send((int)$row->userid, (int)$row->courseid, outreach_sender::CH_COMPLETION,
                $subject, $text, $html, $reason);
            if ($ok) {
                streak_tracker::mark_sent((int)$row->userid, (int)$row->courseid, 'completion');
                $sent++;
            }
        }

        return $sent;
    }

    /**
     * Render a streak email. Returns ['', '', ''] if the user/course is
     * not in a sendable state (deleted user, hidden course, etc.).
     *
     * @param int $userid
     * @param int $courseid
     * @param int $days
     * @return array{0:string,1:string,2:string} [subject, text, html]
     */
    private function build_streak_email(int $userid, int $courseid, int $days): array {
        global $DB;
        $user = $DB->get_record('user', ['id' => $userid], 'id, firstname', IGNORE_MISSING);
        $course = $DB->get_record('course', ['id' => $courseid], 'id, fullname, shortname, visible', IGNORE_MISSING);
        if (!$user || !$course || empty($course->visible)) {
            return ['', '', ''];
        }
        $a = (object)[
            'firstname' => $user->firstname ?: '',
            'days' => $days,
            'coursename' => $course->fullname,
            'institution' => get_config('local_ai_course_assistant', 'institution_name') ?: 'Saylor University',
        ];
        $subject = get_string('milestone:streak_subject', 'local_ai_course_assistant', $a);
        $text = get_string('milestone:streak_body_text', 'local_ai_course_assistant', $a);
        $html = format_text($text, FORMAT_MARKDOWN);
        return [$subject, $text, $html];
    }

    /**
     * Render a completion email. Same return contract as streak email.
     *
     * @param int $userid
     * @param int $courseid
     * @return array{0:string,1:string,2:string}
     */
    private function build_completion_email(int $userid, int $courseid): array {
        global $DB;
        $user = $DB->get_record('user', ['id' => $userid], 'id, firstname', IGNORE_MISSING);
        $course = $DB->get_record('course', ['id' => $courseid], 'id, fullname, visible', IGNORE_MISSING);
        if (!$user || !$course || empty($course->visible)) {
            return ['', '', ''];
        }
        $a = (object)[
            'firstname' => $user->firstname ?: '',
            'coursename' => $course->fullname,
            'institution' => get_config('local_ai_course_assistant', 'institution_name') ?: 'Saylor University',
        ];
        $subject = get_string('milestone:completion_subject', 'local_ai_course_assistant', $a);
        $text = get_string('milestone:completion_body_text', 'local_ai_course_assistant', $a);
        $html = format_text($text, FORMAT_MARKDOWN);
        return [$subject, $text, $html];
    }
}
