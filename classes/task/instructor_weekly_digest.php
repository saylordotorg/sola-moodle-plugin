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

use local_ai_course_assistant\instructor_analytics;
use local_ai_course_assistant\branding;

/**
 * Weekly digest email to course authors and instructional designers.
 *
 * For each course where the per-course digest toggle is on, computes the
 * trailing-7-day numbers from `instructor_analytics` and emails everyone
 * holding the `local/ai_course_assistant:viewanalytics` capability on
 * that course. Aggregate-only — no learner names ever appear in the
 * email body, even when an admin has the reveal-names toggle on.
 *
 * Default schedule: Mondays 09:00 server time. Disable a course by
 * flipping `digest_email_enabled_course_<id>` off; the task itself stays
 * scheduled.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class instructor_weekly_digest extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:instructor_weekly_digest', 'local_ai_course_assistant');
    }

    public function execute(): void {
        global $DB;

        // Find every course with the digest flag on. The flag lives in
        // `mdl_config_plugins` under `local_ai_course_assistant` with a
        // course-id-suffixed name, so a single LIKE query is the cheapest
        // way to enumerate enabled courses without scanning every course.
        $rows = $DB->get_records_sql(
            "SELECT name, value FROM {config_plugins}
              WHERE plugin = :plugin
                AND " . $DB->sql_like('name', ':pattern') . "
                AND value = '1'",
            [
                'plugin' => 'local_ai_course_assistant',
                'pattern' => 'digest_email_enabled_course_%',
            ]
        );
        if (empty($rows)) {
            mtrace('instructor_weekly_digest: no courses opted in.');
            return;
        }

        $since = time() - (7 * 86400);
        $sent = 0;
        $skipped = 0;
        foreach ($rows as $row) {
            $cid = (int) substr($row->name, strlen('digest_email_enabled_course_'));
            if ($cid <= 0) {
                continue;
            }
            try {
                $course = $DB->get_record('course', ['id' => $cid]);
                if (!$course) {
                    $skipped++;
                    continue;
                }
                $coursecontext = \context_course::instance($cid);
                $recipients = get_users_by_capability(
                    $coursecontext,
                    'local/ai_course_assistant:viewanalytics',
                    'u.id, u.firstname, u.lastname, u.email, u.maildisplay, u.mailformat',
                    'u.lastname, u.firstname'
                );
                if (empty($recipients)) {
                    $skipped++;
                    continue;
                }

                $summary = instructor_analytics::summary($cid, $since);
                $mastery = instructor_analytics::mastery_aggregate($cid);
                $confusion = instructor_analytics::confusion_heatmap($cid, $since, 5);
                $ratings = instructor_analytics::ratings_summary($cid, $since);
                $gap = instructor_analytics::engagement_gap($cid, 7);

                $subject = get_string(
                    'digest:subject',
                    'local_ai_course_assistant',
                    (object) [
                        'product' => branding::short_name(),
                        'course'  => $course->fullname,
                    ]
                );

                $html = $this->render_html(
                    $course,
                    $summary,
                    $mastery,
                    $confusion,
                    $ratings,
                    $gap
                );
                $text = $this->render_text(
                    $course,
                    $summary,
                    $mastery,
                    $confusion,
                    $ratings,
                    $gap
                );

                $supportuser = \core_user::get_support_user();
                foreach ($recipients as $user) {
                    if (empty($user->email)) {
                        continue;
                    }
                    email_to_user($user, $supportuser, $subject, $text, $html);
                    $sent++;
                }
            } catch (\Throwable $e) {
                mtrace('instructor_weekly_digest: course ' . $cid . ' failed: ' . $e->getMessage());
            }
        }
        mtrace('instructor_weekly_digest: sent ' . $sent . ' email(s), skipped ' . $skipped . ' course(s).');
    }

    /**
     * Plain text version of the digest body.
     *
     * @param \stdClass $course Course record.
     * @param array $s Summary stats (active, total_messages, avg_per_learner, last_activity).
     * @param array $mastery Weakest objectives (title, mastered_pct).
     * @param array $confusion Modules ranked by question count (name, cmid, question_count, distinct_learners).
     * @param array $r Rating counts (positive, negative, hallucinations).
     * @param array $gap Engagement gap (enrolled, not_seen).
     * @return string Plain-text email body.
     */
    protected function render_text($course, array $s, array $mastery, array $confusion, array $r, array $gap): string {
        $product = branding::short_name();
        $lines = [];
        $lines[] = $product . ' — Weekly Digest for ' . $course->fullname;
        $lines[] = '';
        $lines[] = "Last 7 days:";
        $lines[] = '  Active learners: ' . $s['active'];
        $lines[] = '  Total messages:  ' . $s['total_messages'];
        $lines[] = '  Avg / learner:   ' . $s['avg_per_learner'];
        if ($s['last_activity'] > 0) {
            $lines[] = '  Last activity:   ' . userdate($s['last_activity']);
        }
        $lines[] = '';
        if (!empty($mastery)) {
            $lines[] = 'Weakest objectives (cohort % mastered):';
            foreach (array_slice($mastery, 0, 5) as $row) {
                $lines[] = '  - ' . $row['title'] . ' (' . $row['mastered_pct'] . '%)';
            }
            $lines[] = '';
        }
        if (!empty($confusion)) {
            $lines[] = 'Modules generating the most questions:';
            foreach ($confusion as $row) {
                $name = $row['name'] !== '' ? $row['name'] : ('cmid ' . $row['cmid']);
                $lines[] = '  - ' . $name . ' (' . $row['question_count'] . ' question(s) from '
                    . $row['distinct_learners'] . ' learner(s))';
            }
            $lines[] = '';
        }
        $lines[] = 'Helpful / unhelpful:  ' . $r['positive'] . ' up, ' . $r['negative'] . ' down, '
            . $r['hallucinations'] . ' hallucination flags.';
        $lines[] = 'Engagement gap:       ' . $gap['not_seen'] . ' of ' . $gap['enrolled']
            . ' enrolled learners not seen in the last 7 days.';
        $lines[] = '';
        $url = (new \moodle_url('/local/ai_course_assistant/instructor_dashboard.php',
            ['courseid' => $course->id]))->out(false);
        $lines[] = 'Open the live dashboard: ' . $url;
        return implode("\n", $lines);
    }

    /**
     * HTML version of the digest body.
     *
     * @param \stdClass $course Course record.
     * @param array $s Summary stats (active, total_messages, avg_per_learner, last_activity).
     * @param array $mastery Weakest objectives (title, mastered_pct).
     * @param array $confusion Modules ranked by question count (name, cmid, question_count, distinct_learners).
     * @param array $r Rating counts (positive, negative, hallucinations).
     * @param array $gap Engagement gap (enrolled, not_seen).
     * @return string HTML email body.
     */
    protected function render_html($course, array $s, array $mastery, array $confusion, array $r, array $gap): string {
        $product = s(branding::short_name());
        $coursename = s($course->fullname);
        $url = (new \moodle_url('/local/ai_course_assistant/instructor_dashboard.php',
            ['courseid' => $course->id]))->out(false);

        $html = '<div style="font-family:Helvetica,Arial,sans-serif;line-height:1.5;color:#1f2937">';
        $html .= '<h2 style="color:#111827;margin:0 0 4px">' . $product . ' weekly digest</h2>';
        $html .= '<p style="color:#6b7280;margin:0 0 18px">' . $coursename . '</p>';

        // Summary tiles row.
        $tiles = [
            ['Active learners', number_format($s['active'])],
            ['Total messages', number_format($s['total_messages'])],
            ['Avg / learner', number_format($s['avg_per_learner'], 1)],
            ['Last activity', $s['last_activity'] > 0 ? userdate($s['last_activity'], '%b %e') : '—'],
        ];
        $html .= '<table cellpadding="10" cellspacing="0" border="0" style="border-collapse:collapse;width:100%;margin-bottom:18px"><tr>';
        foreach ($tiles as $t) {
            $html .= '<td style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:6px;width:25%;text-align:center">';
            $html .= '<div style="font-size:11px;color:#6b7280;text-transform:uppercase;letter-spacing:0.04em;font-weight:600">'
                  . s($t[0]) . '</div>';
            $html .= '<div style="font-size:18px;font-weight:700;color:#111827;margin-top:4px">'
                  . s($t[1]) . '</div>';
            $html .= '</td>';
        }
        $html .= '</tr></table>';

        if (!empty($mastery)) {
            $html .= '<h3 style="color:#111827;margin:18px 0 6px">Weakest objectives</h3><ul>';
            foreach (array_slice($mastery, 0, 5) as $row) {
                $html .= '<li><strong>' . s($row['title']) . '</strong> — '
                      . $row['mastered_pct'] . '% of cohort mastered</li>';
            }
            $html .= '</ul>';
        }

        if (!empty($confusion)) {
            $html .= '<h3 style="color:#111827;margin:18px 0 6px">Modules generating the most questions</h3><ol>';
            foreach ($confusion as $row) {
                $name = $row['name'] !== '' ? s($row['name']) : ('cmid ' . (int)$row['cmid']);
                $html .= '<li>' . $name . ' &mdash; ' . $row['question_count']
                      . ' question(s) from ' . $row['distinct_learners'] . ' learner(s)</li>';
            }
            $html .= '</ol>';
        }

        $total = $r['positive'] + $r['negative'];
        $pct = $total > 0 ? round(($r['positive'] / $total) * 100, 1) : 0;
        $html .= '<p style="margin:14px 0 6px"><strong>Helpful / unhelpful:</strong> '
              . $r['positive'] . ' up, ' . $r['negative'] . ' down ('
              . $pct . '% positive). ' . $r['hallucinations'] . ' hallucination flags.</p>';
        $html .= '<p style="margin:0 0 14px"><strong>Engagement gap:</strong> '
              . $gap['not_seen'] . ' of ' . $gap['enrolled']
              . ' enrolled learners not seen in the last 7 days.</p>';

        $html .= '<p style="margin-top:18px"><a href="' . $url
              . '" style="background:#023e8a;color:#fff;padding:10px 18px;border-radius:6px;text-decoration:none;font-weight:600">Open the live dashboard</a></p>';
        $html .= '<p style="font-size:11px;color:#9ca3af;margin-top:18px">You are receiving this because you have analytics access to the course above. Course owners can disable digests per course on the AI Course Assistant settings page.</p>';
        $html .= '</div>';
        return $html;
    }
}
