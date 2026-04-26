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

use local_ai_course_assistant\objective_manager;
use local_ai_course_assistant\branding;

/**
 * v4.0 / M3 — Learner-facing weekly digest email.
 *
 * For every learner who opted in to the per-course digest (preference
 * `local_ai_course_assistant_digest_optin_<courseid> = 1`) and who is
 * still enrolled on a mastery-enabled course, computes their two-to-three
 * weakest objectives and emails a personalized summary with deep links
 * back into the course (and SOLA).
 *
 * Default schedule: Mondays 09:00 server time. Opt-in is the *only* way
 * an email goes out — there is no auto-enrolment of learners.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class learner_weekly_digest extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:learner_weekly_digest', 'local_ai_course_assistant');
    }

    public function execute(): void {
        global $DB;

        // Find every (userid, courseid) pair where the opt-in preference
        // is set to '1'. The user_preferences `name` carries the courseid
        // suffix, so a single LIKE query enumerates all opted-in pairs
        // without scanning every user.
        $rows = $DB->get_records_sql(
            "SELECT id, userid, name, value FROM {user_preferences}
              WHERE " . $DB->sql_like('name', ':pattern') . "
                AND value = '1'",
            ['pattern' => 'local_ai_course_assistant_digest_optin_%']
        );
        if (empty($rows)) {
            mtrace('learner_weekly_digest: no opt-ins.');
            return;
        }

        $sent = 0;
        $skipped = 0;
        $supportuser = \core_user::get_support_user();
        $prefix = 'local_ai_course_assistant_digest_optin_';

        foreach ($rows as $row) {
            $courseid = (int) substr($row->name, strlen($prefix));
            $userid = (int) $row->userid;
            if ($courseid <= 0 || $userid <= 0) {
                continue;
            }
            try {
                // Skip if mastery is no longer enabled on this course.
                if (!objective_manager::is_enabled_for_course($courseid)) {
                    $skipped++;
                    continue;
                }
                $course = $DB->get_record('course', ['id' => $courseid]);
                if (!$course || $course->visible == 0) {
                    $skipped++;
                    continue;
                }
                $user = $DB->get_record('user', ['id' => $userid]);
                if (!$user || empty($user->email) || !empty($user->deleted) || !empty($user->suspended)) {
                    $skipped++;
                    continue;
                }
                // Skip if learner is no longer enrolled on the course. Cheap
                // check: any role in the course context.
                $coursecontext = \context_course::instance($courseid);
                if (!is_enrolled($coursecontext, $user, '', true)) {
                    $skipped++;
                    continue;
                }
                $weak = objective_manager::get_weak_objectives($userid, $courseid, 3);
                if (empty($weak)) {
                    // Nothing to nudge about this week — silent skip is the
                    // right call for a "weekly recap" tone. Sending an empty
                    // email teaches the learner to ignore the channel.
                    $skipped++;
                    continue;
                }

                $subject = get_string(
                    'learner_digest:subject',
                    'local_ai_course_assistant',
                    (object) [
                        'product' => branding::short_name(),
                        'course'  => $course->fullname,
                    ]
                );
                $text = $this->render_text($course, $user, $weak);
                $html = $this->render_html($course, $user, $weak);

                email_to_user($user, $supportuser, $subject, $text, $html);
                $sent++;
            } catch (\Throwable $e) {
                mtrace('learner_weekly_digest: user ' . $userid . ' course ' . $courseid . ' failed: ' . $e->getMessage());
            }
        }
        mtrace('learner_weekly_digest: sent ' . $sent . ' email(s), skipped ' . $skipped . '.');
    }

    /**
     * Plain-text email body.
     *
     * @param \stdClass $course
     * @param \stdClass $user
     * @param array $weak Weakest-objectives rows from objective_manager::get_weak_objectives.
     * @return string
     */
    protected function render_text(\stdClass $course, \stdClass $user, array $weak): string {
        $product = branding::short_name();
        $courseurl = (new \moodle_url('/course/view.php', ['id' => $course->id]))->out(false);
        $prefurl   = (new \moodle_url('/local/ai_course_assistant/settings_user.php'))->out(false);

        $lines = [];
        $lines[] = 'Hi ' . trim($user->firstname) . ',';
        $lines[] = '';
        $lines[] = 'Quick weekly check-in for ' . $course->fullname . '.';
        $lines[] = '';
        $lines[] = 'Based on your progress so far, here is what I would focus on this week:';
        $lines[] = '';
        foreach ($weak as $row) {
            $obj = $row['objective'];
            $st = $row['mastery']['status'];
            $label = $obj->code ? "[{$obj->code}] {$obj->title}" : $obj->title;
            $verb = ($st === 'not_started') ? 'Get started on' : 'Build on what you have';
            $lines[] = '  - ' . $label;
            $lines[] = '    ' . $verb . '. Open ' . $product . ' on the course and ask "help me with ' . $obj->title . '".';
        }
        $lines[] = '';
        $lines[] = 'Open the course: ' . $courseurl;
        $lines[] = '';
        $lines[] = 'Manage these emails (or unsubscribe): ' . $prefurl;
        $lines[] = '';
        $lines[] = '— ' . $product;
        return implode("\n", $lines);
    }

    /**
     * HTML email body.
     *
     * @param \stdClass $course
     * @param \stdClass $user
     * @param array $weak
     * @return string
     */
    protected function render_html(\stdClass $course, \stdClass $user, array $weak): string {
        $product = s(branding::short_name());
        $coursename = s($course->fullname);
        $firstname = s(trim($user->firstname));
        $courseurl = (new \moodle_url('/course/view.php', ['id' => $course->id]))->out(false);
        $prefurl   = (new \moodle_url('/local/ai_course_assistant/settings_user.php'))->out(false);

        $html  = '<div style="font-family:Helvetica,Arial,sans-serif;line-height:1.5;color:#1f2937;max-width:560px">';
        $html .= '<p style="margin:0 0 12px">Hi ' . $firstname . ',</p>';
        $html .= '<p style="margin:0 0 12px">Quick weekly check-in for <strong>' . $coursename . '</strong>.</p>';
        $html .= '<p style="margin:0 0 6px">Based on your progress so far, here is what I would focus on this week:</p>';
        $html .= '<ul style="padding-left:20px;margin:0 0 18px">';
        foreach ($weak as $row) {
            $obj = $row['objective'];
            $st = $row['mastery']['status'];
            $label = $obj->code ? '[' . s($obj->code) . '] ' . s($obj->title) : s($obj->title);
            $verb = ($st === 'not_started') ? 'Get started on this' : 'Build on what you have';
            $hint = 'Open ' . $product . ' on the course and ask &ldquo;help me with ' . s($obj->title) . '&rdquo;.';
            $html .= '<li style="margin-bottom:10px"><strong>' . $label . '</strong><br>'
                . '<span style="color:#4b5563">' . $verb . '. ' . $hint . '</span></li>';
        }
        $html .= '</ul>';
        $html .= '<p style="margin:0 0 14px">'
            . '<a href="' . $courseurl . '" style="display:inline-block;padding:10px 16px;background:#1f2937;color:#fff;text-decoration:none;border-radius:6px;font-weight:600">Open the course</a>'
            . '</p>';
        $html .= '<p style="margin:18px 0 0;color:#9ca3af;font-size:12px">'
            . 'You are receiving this because you opted in to weekly progress emails for this course. '
            . '<a href="' . $prefurl . '" style="color:#9ca3af">Manage these emails</a>.'
            . '</p>';
        $html .= '<p style="margin:8px 0 0;color:#9ca3af;font-size:12px">— ' . $product . '</p>';
        $html .= '</div>';
        return $html;
    }
}
