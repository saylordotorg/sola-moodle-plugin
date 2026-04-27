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
 * Analytics engine for AI tutor chat usage data.
 *
 * Provides aggregated data for the analytics dashboard, including
 * usage trends, course hotspots, and common prompt patterns.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class analytics {

    /**
     * Get overview statistics for a course.
     *
     * @param int $courseid
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Associative array of stats.
     */
    public static function get_overview(int $courseid, int $since = 0): array {
        global $DB;

        $params = ['courseid' => $courseid];
        $timewhere = '';
        if ($since > 0) {
            $timewhere = ' AND m.timecreated >= :since';
            $params['since'] = $since;
        }

        // Total conversations.
        $totalconvs = $DB->count_records('local_ai_course_assistant_convs', ['courseid' => $courseid]);

        // Total messages.
        $sql = "SELECT COUNT(m.id)
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE m.courseid = :courseid{$timewhere}";
        $totalmessages = $DB->count_records_sql($sql, $params);

        // Active students (users who sent at least one message).
        $sql = "SELECT COUNT(DISTINCT m.userid)
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE m.courseid = :courseid AND m.role = 'user'{$timewhere}";
        $activestudents = $DB->count_records_sql($sql, $params);

        // Average messages per student.
        $avgmessages = $activestudents > 0 ? round($totalmessages / $activestudents, 1) : 0;

        // User messages count (for off-topic rate calculation).
        $paramsuser = ['courseid' => $courseid];
        $timewhereuser = '';
        if ($since > 0) {
            $timewhereuser = ' AND m.timecreated >= :since';
            $paramsuser['since'] = $since;
        }
        $sql = "SELECT COUNT(m.id)
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE m.courseid = :courseid AND m.role = 'user'{$timewhereuser}";
        $usermessages = $DB->count_records_sql($sql, $paramsuser);

        // Off-topic conversations (those with offtopic_count > 0).
        $sql = "SELECT SUM(c.offtopic_count)
                  FROM {local_ai_course_assistant_convs} c
                 WHERE c.courseid = :courseid";
        $offtopiccount = (int) $DB->get_field_sql($sql, ['courseid' => $courseid]);
        $offtopicrate = $usermessages > 0 ? round(($offtopiccount / $usermessages) * 100, 1) : 0;

        // Escalation count (messages containing ticket references).
        $sql = "SELECT COUNT(m.id)
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE m.courseid = :courseid AND m.role = 'assistant'
                   AND m.message LIKE '%support ticket%'{$timewhere}";
        $escalations = $DB->count_records_sql($sql, $params);

        // Students with study plans.
        $studyplans = $DB->count_records('local_ai_course_assistant_plans', ['courseid' => $courseid]);

        return [
            'total_conversations' => $totalconvs,
            'total_messages' => $totalmessages,
            'active_students' => $activestudents,
            'avg_messages_per_student' => $avgmessages,
            'offtopic_rate' => $offtopicrate,
            'escalation_count' => $escalations,
            'studyplan_adoption' => $studyplans,
        ];
    }

    /**
     * Get daily message counts for trend chart.
     *
     * @param int $courseid
     * @param int $days Number of days to look back.
     * @return array Array of ['date' => 'YYYY-MM-DD', 'count' => int].
     */
    public static function get_daily_usage(int $courseid, int $days = 30): array {
        global $DB;

        $since = time() - ($days * 86400);

        // Get all message timestamps in the range, group by day.
        // get_fieldset_sql returns a flat array of values rather than a
        // map keyed on the first column — necessary here because
        // timecreated values collide for messages sent in the same second.
        $sql = "SELECT m.timecreated
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE m.courseid = :courseid AND m.timecreated >= :since AND m.role = 'user'
                 ORDER BY m.timecreated ASC";
        $timestamps = $DB->get_fieldset_sql($sql, ['courseid' => $courseid, 'since' => $since]);

        // Aggregate by day.
        $dailycounts = [];
        foreach ($timestamps as $ts) {
            $day = date('Y-m-d', $ts);
            if (!isset($dailycounts[$day])) {
                $dailycounts[$day] = 0;
            }
            $dailycounts[$day]++;
        }

        // Fill in missing days with zeros.
        $result = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $day = date('Y-m-d', time() - ($i * 86400));
            $result[] = [
                'date' => $day,
                'count' => $dailycounts[$day] ?? 0,
            ];
        }

        return $result;
    }

    /**
     * Identify course "hotspots" — sections most frequently referenced in questions.
     *
     * Scans user messages for mentions of course section names.
     *
     * @param int $courseid
     * @param int $since Timestamp filter.
     * @return array Array of ['section' => name, 'count' => int], sorted by count desc.
     */
    public static function get_hotspots(int $courseid, int $since = 0): array {
        global $DB;

        // Get course sections.
        try {
            $modinfo = get_fast_modinfo($courseid);
        } catch (\Throwable $e) {
            return [];
        }

        $sections = $modinfo->get_section_info_all();
        $sectionnames = [];
        foreach ($sections as $section) {
            $name = get_section_name($courseid, $section);
            if (!empty($name) && $name !== 'General') {
                $sectionnames[] = $name;
            }
        }

        if (empty($sectionnames)) {
            return [];
        }

        // Get user messages.
        $params = ['courseid' => $courseid, 'role' => 'user'];
        $timewhere = '';
        if ($since > 0) {
            $timewhere = ' AND timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT message FROM {local_ai_course_assistant_msgs}
                 WHERE courseid = :courseid AND role = :role{$timewhere}";
        $messages = $DB->get_fieldset_sql($sql, $params);

        // Count mentions of each section.
        $counts = [];
        foreach ($sectionnames as $name) {
            $count = 0;
            $lname = strtolower($name);
            foreach ($messages as $msg) {
                if (stripos($msg, $lname) !== false) {
                    $count++;
                }
            }
            if ($count > 0) {
                $counts[] = ['section' => $name, 'count' => $count];
            }
        }

        // Sort by count descending.
        usort($counts, fn($a, $b) => $b['count'] - $a['count']);

        return array_slice($counts, 0, 15);
    }

    /**
     * Find common prompt patterns from student messages.
     *
     * Groups messages by their opening phrases to identify recurring question types.
     *
     * @param int $courseid
     * @param int $since Timestamp filter.
     * @return array Array of ['pattern' => text, 'frequency' => int].
     */
    public static function get_common_prompts(int $courseid, int $since = 0): array {
        global $DB;

        $params = ['courseid' => $courseid, 'role' => 'user'];
        $timewhere = '';
        if ($since > 0) {
            $timewhere = ' AND timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT message FROM {local_ai_course_assistant_msgs}
                 WHERE courseid = :courseid AND role = :role{$timewhere}";
        $messages = $DB->get_fieldset_sql($sql, $params);

        if (empty($messages)) {
            return [];
        }

        // Extract first N words as a "pattern".
        $patterns = [];
        foreach ($messages as $msg) {
            $msg = trim($msg);
            if (strlen($msg) < 5) {
                continue;
            }

            // Normalize: lowercase, take first 6 words.
            $words = preg_split('/\s+/', strtolower($msg));
            $patternwords = array_slice($words, 0, min(6, count($words)));
            $pattern = implode(' ', $patternwords);

            // Truncate long patterns.
            if (strlen($pattern) > 60) {
                $pattern = substr($pattern, 0, 57) . '...';
            }

            if (!isset($patterns[$pattern])) {
                $patterns[$pattern] = 0;
            }
            $patterns[$pattern]++;
        }

        // Now cluster similar patterns — merge those sharing the first 3 words.
        $clustered = [];
        foreach ($patterns as $pattern => $count) {
            $words = explode(' ', $pattern);
            $key = implode(' ', array_slice($words, 0, min(3, count($words))));

            if (!isset($clustered[$key])) {
                $clustered[$key] = ['pattern' => $pattern, 'frequency' => 0];
            }
            $clustered[$key]['frequency'] += $count;
            // Keep the longer, more descriptive pattern.
            if (strlen($pattern) > strlen($clustered[$key]['pattern'])) {
                $clustered[$key]['pattern'] = $pattern;
            }
        }

        $result = array_values($clustered);

        // Sort by frequency descending.
        usort($result, fn($a, $b) => $b['frequency'] - $a['frequency']);

        // Only return patterns that appear more than once, up to 20.
        $result = array_filter($result, fn($item) => $item['frequency'] > 1);
        return array_slice($result, 0, 20);
    }

    /**
     * Get per-provider performance comparison for a course.
     *
     * Groups assistant messages by provider to show response counts,
     * average response length, and token usage.
     *
     * @param int $courseid
     * @param int $since Timestamp filter.
     * @return array Array of ['provider' => string, 'response_count' => int,
     *               'avg_response_length' => int, 'total_tokens' => int, 'avg_tokens' => float].
     */
    public static function get_provider_comparison(int $courseid, int $since = 0): array {
        global $DB;

        $params = ['courseid' => $courseid, 'role' => 'assistant'];
        $timewhere = '';
        if ($since > 0) {
            $timewhere = ' AND m.timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT COALESCE(m.provider, 'unknown') AS provider,
                       COUNT(m.id) AS response_count,
                       AVG(LENGTH(m.message)) AS avg_response_length,
                       SUM(COALESCE(m.tokens_used, 0)) AS total_tokens,
                       AVG(COALESCE(m.tokens_used, 0)) AS avg_tokens
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE m.courseid = :courseid AND m.role = :role{$timewhere}
                 GROUP BY COALESCE(m.provider, 'unknown')
                 ORDER BY response_count DESC";

        $rows = $DB->get_records_sql($sql, $params);
        $result = [];
        foreach ($rows as $row) {
            $result[] = [
                'provider'             => $row->provider,
                'response_count'       => (int) $row->response_count,
                'avg_response_length'  => (int) round($row->avg_response_length),
                'total_tokens'         => (int) $row->total_tokens,
                'avg_tokens'           => round((float) $row->avg_tokens, 1),
            ];
        }
        return $result;
    }

    /**
     * Get per-student usage summary for a course.
     *
     * @param int $courseid
     * @param int $since Timestamp filter.
     * @return array Array of student usage data.
     */
    public static function get_student_usage(int $courseid, int $since = 0): array {
        global $DB;

        $params = ['courseid' => $courseid];
        $timewhere = '';
        if ($since > 0) {
            $timewhere = ' AND m.timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT m.userid,
                       u.firstname,
                       u.lastname,
                       COUNT(m.id) AS message_count,
                       MAX(m.timecreated) AS last_active
                  FROM {local_ai_course_assistant_msgs} m
                  JOIN {user} u ON u.id = m.userid
                 WHERE m.courseid = :courseid AND m.role = 'user'{$timewhere}
                 GROUP BY m.userid, u.firstname, u.lastname
                 ORDER BY message_count DESC";

        return $DB->get_records_sql($sql, $params);
    }

    /**
     * Get enrollment counts per course or for a specific course.
     *
     * @param int $courseid Course ID (0 = all courses).
     * @return array Enrollment data.
     */
    public static function get_enrollment_counts(int $courseid = 0): array {
        global $DB;

        if ($courseid > 0) {
            $sql = "SELECT COUNT(ue.id) AS total_enrolled
                      FROM {user_enrolments} ue
                      JOIN {enrol} e ON e.id = ue.enrolid
                     WHERE e.courseid = :courseid AND ue.status = 0";
            $count = $DB->count_records_sql($sql, ['courseid' => $courseid]);
            return ['total_enrolled' => (int) $count];
        }

        $sql = "SELECT e.courseid, COUNT(ue.id) AS total_enrolled
                  FROM {user_enrolments} ue
                  JOIN {enrol} e ON e.id = ue.enrolid
                 WHERE ue.status = 0
                 GROUP BY e.courseid
                 ORDER BY e.courseid ASC";
        $rows = $DB->get_records_sql($sql);
        $result = [];
        foreach ($rows as $row) {
            $result[] = [
                'courseid' => (int) $row->courseid,
                'total_enrolled' => (int) $row->total_enrolled,
            ];
        }
        return $result;
    }

    /**
     * Get session statistics inferred from message timestamps.
     *
     * A "session" is a group of messages by the same user in the same course
     * where consecutive messages are less than 30 minutes apart.
     *
     * @param int $courseid Course ID (0 = all courses).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Session statistics.
     */
    public static function get_session_stats(int $courseid, int $since = 0): array {
        global $DB;

        $params = [];
        $where = "m.role = 'user'";
        if ($courseid > 0) {
            $where .= ' AND m.courseid = :courseid';
            $params['courseid'] = $courseid;
        }
        if ($since > 0) {
            $where .= ' AND m.timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT m.userid, m.timecreated
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE {$where}
                 ORDER BY m.userid ASC, m.timecreated ASC";
        $records = $DB->get_records_sql($sql, $params);

        $sessions = [];
        $currentuserid = null;
        $sessionstart = 0;
        $sessionend = 0;
        $sessionmsgcount = 0;

        foreach ($records as $record) {
            if ($record->userid !== $currentuserid || ($record->timecreated - $sessionend) > 1800) {
                // Save previous session.
                if ($currentuserid !== null && $sessionmsgcount > 0) {
                    $sessions[] = [
                        'duration' => $sessionend - $sessionstart,
                        'messages' => $sessionmsgcount,
                    ];
                }
                // Start new session.
                $currentuserid = $record->userid;
                $sessionstart = $record->timecreated;
                $sessionend = $record->timecreated;
                $sessionmsgcount = 1;
            } else {
                $sessionend = $record->timecreated;
                $sessionmsgcount++;
            }
        }
        // Save last session.
        if ($currentuserid !== null && $sessionmsgcount > 0) {
            $sessions[] = [
                'duration' => $sessionend - $sessionstart,
                'messages' => $sessionmsgcount,
            ];
        }

        $totalsessions = count($sessions);
        if ($totalsessions === 0) {
            return ['total_sessions' => 0, 'avg_duration_minutes' => 0.0, 'avg_messages_per_session' => 0.0];
        }

        $totalduration = array_sum(array_column($sessions, 'duration'));
        $totalmessages = array_sum(array_column($sessions, 'messages'));

        return [
            'total_sessions' => $totalsessions,
            'avg_duration_minutes' => round($totalduration / $totalsessions / 60, 1),
            'avg_messages_per_session' => round($totalmessages / $totalsessions, 1),
        ];
    }

    /**
     * Get return rate — users who came back on 2+ distinct calendar days.
     *
     * @param int $courseid Course ID (0 = all courses).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Return rate data.
     */
    public static function get_return_rate(int $courseid, int $since = 0): array {
        global $DB;

        $params = [];
        $where = "m.role = 'user'";
        if ($courseid > 0) {
            $where .= ' AND m.courseid = :courseid';
            $params['courseid'] = $courseid;
        }
        if ($since > 0) {
            $where .= ' AND m.timecreated >= :since';
            $params['since'] = $since;
        }

        // Total unique users.
        $sql = "SELECT COUNT(DISTINCT m.userid)
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE {$where}";
        $totalusers = (int) $DB->count_records_sql($sql, $params);

        if ($totalusers === 0) {
            return ['total_users' => 0, 'returning_users' => 0, 'return_rate_pct' => 0.0];
        }

        // Users with messages on 2+ distinct days.
        $sql = "SELECT COUNT(*) FROM (
                    SELECT m.userid
                      FROM {local_ai_course_assistant_msgs} m
                     WHERE {$where}
                     GROUP BY m.userid
                    HAVING COUNT(DISTINCT FROM_UNIXTIME(m.timecreated, '%Y-%m-%d')) >= 2
                ) returning_users";
        $returningusers = (int) $DB->count_records_sql($sql, $params);

        return [
            'total_users' => $totalusers,
            'returning_users' => $returningusers,
            'return_rate_pct' => round(($returningusers / $totalusers) * 100, 1),
        ];
    }

    /**
     * Get hourly and day-of-week message distribution.
     *
     * @param int $courseid Course ID (0 = all courses).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Distribution data with 'hourly' and 'daily' keys.
     */
    public static function get_time_distribution(int $courseid, int $since = 0): array {
        global $DB;

        $params = [];
        $where = "m.role = 'user'";
        if ($courseid > 0) {
            $where .= ' AND m.courseid = :courseid';
            $params['courseid'] = $courseid;
        }
        if ($since > 0) {
            $where .= ' AND m.timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT m.timecreated
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE {$where}";
        $records = $DB->get_records_sql($sql, $params);

        // Initialize distributions.
        $hourly = array_fill(0, 24, 0);
        $daily = ['Mon' => 0, 'Tue' => 0, 'Wed' => 0, 'Thu' => 0, 'Fri' => 0, 'Sat' => 0, 'Sun' => 0];

        foreach ($records as $record) {
            $hour = (int) date('G', $record->timecreated);
            $hourly[$hour]++;

            $dayname = date('D', $record->timecreated);
            if (isset($daily[$dayname])) {
                $daily[$dayname]++;
            }
        }

        return [
            'hourly' => $hourly,
            'daily' => $daily,
        ];
    }

    /**
     * Compare AI users vs non-users on grades, completion, and time-to-completion.
     *
     * @param int $courseid Course ID (must be > 0).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Comparison data for AI users and non-users.
     */
    public static function get_ai_vs_nonusers(int $courseid, int $since = 0): array {
        global $DB;

        $emptygroup = ['count' => 0, 'avg_grade' => 0.0, 'completion_rate' => 0.0, 'avg_days_to_completion' => 0.0];

        if ($courseid <= 0) {
            return ['ai_users' => $emptygroup, 'non_users' => $emptygroup];
        }

        // Get all enrolled students.
        $sql = "SELECT DISTINCT ue.userid
                  FROM {user_enrolments} ue
                  JOIN {enrol} e ON e.id = ue.enrolid
                 WHERE e.courseid = :courseid AND ue.status = 0";
        $enrolled = $DB->get_fieldset_sql($sql, ['courseid' => $courseid]);

        if (empty($enrolled)) {
            return ['ai_users' => $emptygroup, 'non_users' => $emptygroup];
        }

        // Get AI users (those who sent at least one message).
        $msgparams = ['courseid' => $courseid];
        $timewhere = '';
        if ($since > 0) {
            $timewhere = ' AND m.timecreated >= :since';
            $msgparams['since'] = $since;
        }
        $sql = "SELECT DISTINCT m.userid
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE m.courseid = :courseid AND m.role = 'user'{$timewhere}";
        $aiuserids = $DB->get_fieldset_sql($sql, $msgparams);

        $aiuserset = array_flip($aiuserids);
        $nonuserids = [];
        foreach ($enrolled as $uid) {
            if (!isset($aiuserset[$uid])) {
                $nonuserids[] = $uid;
            }
        }
        // Ensure aiuserids only includes enrolled students.
        $aiuserids = array_intersect($aiuserids, $enrolled);

        $result = [];
        foreach (['ai_users' => $aiuserids, 'non_users' => $nonuserids] as $label => $userids) {
            $count = count($userids);
            if ($count === 0) {
                $result[$label] = $emptygroup;
                continue;
            }

            // Average grade from course total grade item.
            $avggrade = 0.0;
            try {
                list($insql, $inparams) = $DB->get_in_or_equal($userids, SQL_PARAMS_NAMED, 'u');
                $inparams['courseid'] = $courseid;
                $sql = "SELECT AVG(gg.finalgrade) AS avg_grade
                          FROM {grade_grades} gg
                          JOIN {grade_items} gi ON gi.id = gg.itemid
                         WHERE gi.courseid = :courseid
                           AND gi.itemtype = 'course'
                           AND gg.userid {$insql}
                           AND gg.finalgrade IS NOT NULL";
                $row = $DB->get_record_sql($sql, $inparams);
                if ($row && $row->avg_grade !== null) {
                    $avggrade = round((float) $row->avg_grade, 2);
                }
            } catch (\Throwable $e) {
                $avggrade = 0.0;
            }

            // Completion rate.
            $completionrate = 0.0;
            try {
                list($insql, $inparams) = $DB->get_in_or_equal($userids, SQL_PARAMS_NAMED, 'u');
                $inparams['courseid'] = $courseid;
                $sql = "SELECT COUNT(cc.id) AS completed
                          FROM {course_completions} cc
                         WHERE cc.course = :courseid
                           AND cc.userid {$insql}
                           AND cc.timecompleted IS NOT NULL";
                $completed = (int) $DB->count_records_sql($sql, $inparams);
                $completionrate = round(($completed / $count) * 100, 1);
            } catch (\Throwable $e) {
                $completionrate = 0.0;
            }

            // Average days to completion.
            $avgdays = 0.0;
            try {
                list($insql, $inparams) = $DB->get_in_or_equal($userids, SQL_PARAMS_NAMED, 'u');
                $inparams['courseid'] = $courseid;
                $sql = "SELECT AVG(cc.timecompleted - ue.timestart) AS avg_seconds
                          FROM {course_completions} cc
                          JOIN {user_enrolments} ue ON ue.userid = cc.userid
                          JOIN {enrol} e ON e.id = ue.enrolid AND e.courseid = :courseid
                         WHERE cc.course = e.courseid
                           AND cc.userid {$insql}
                           AND cc.timecompleted IS NOT NULL
                           AND ue.timestart > 0";
                $row = $DB->get_record_sql($sql, $inparams);
                if ($row && $row->avg_seconds !== null && $row->avg_seconds > 0) {
                    $avgdays = round((float) $row->avg_seconds / 86400, 1);
                }
            } catch (\Throwable $e) {
                $avgdays = 0.0;
            }

            $result[$label] = [
                'count' => $count,
                'avg_grade' => $avggrade,
                'completion_rate' => $completionrate,
                'avg_days_to_completion' => $avgdays,
            ];
        }

        return $result;
    }

    /**
     * Get per-unit (course module / section) usage from the cmid column.
     *
     * @param int $courseid Course ID.
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Usage data grouped by section.
     */
    public static function get_unit_usage(int $courseid, int $since = 0): array {
        global $DB;

        if ($courseid <= 0) {
            return [];
        }

        $params = ['courseid' => $courseid];
        $timewhere = '';
        if ($since > 0) {
            $timewhere = ' AND m.timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT m.cmid, COUNT(m.id) AS message_count, COUNT(DISTINCT m.userid) AS student_count
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE m.courseid = :courseid AND m.cmid IS NOT NULL AND m.role = 'user'{$timewhere}
                 GROUP BY m.cmid";
        $rows = $DB->get_records_sql($sql, $params);

        if (empty($rows)) {
            return [];
        }

        // Map cmid to section via modinfo.
        try {
            $modinfo = get_fast_modinfo($courseid);
        } catch (\Throwable $e) {
            return [];
        }

        $sectiondata = [];
        foreach ($rows as $row) {
            try {
                $cm = $modinfo->get_cm($row->cmid);
                $sectionnum = $cm->sectionnum;
                $sectioninfo = $modinfo->get_section_info($sectionnum);
                $sectionname = get_section_name($courseid, $sectioninfo);
            } catch (\Throwable $e) {
                continue;
            }

            if (!isset($sectiondata[$sectionnum])) {
                $sectiondata[$sectionnum] = [
                    'section_name' => $sectionname,
                    'section_num' => (int) $sectionnum,
                    'student_count' => 0,
                    'message_count' => 0,
                ];
            }
            $sectiondata[$sectionnum]['message_count'] += (int) $row->message_count;
            // Student count needs re-aggregation across cmids in same section.
            $sectiondata[$sectionnum]['student_count'] += (int) $row->student_count;
        }

        // Sort by section_num.
        ksort($sectiondata);

        return array_values($sectiondata);
    }

    /**
     * Get message breakdown by interaction type.
     *
     * @param int $courseid Course ID (0 = all courses).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Breakdown by interaction type.
     */
    public static function get_usage_type_breakdown(int $courseid, int $since = 0): array {
        global $DB;

        $params = [];
        $where = "m.role = 'user'";
        if ($courseid > 0) {
            $where .= ' AND m.courseid = :courseid';
            $params['courseid'] = $courseid;
        }
        if ($since > 0) {
            $where .= ' AND m.timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT COALESCE(m.interaction_type, 'chat') AS type, COUNT(m.id) AS cnt
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE {$where}
                 GROUP BY COALESCE(m.interaction_type, 'chat')
                 ORDER BY cnt DESC";
        $rows = $DB->get_records_sql($sql, $params);

        $total = 0;
        $items = [];
        foreach ($rows as $row) {
            $cnt = (int) $row->cnt;
            $total += $cnt;
            $items[] = ['type' => $row->type, 'count' => $cnt];
        }

        // Compute percentages.
        foreach ($items as &$item) {
            $item['pct'] = $total > 0 ? round(($item['count'] / $total) * 100, 1) : 0.0;
        }

        return $items;
    }

    /**
     * Extract top keywords from user messages with categorization.
     *
     * @param int $courseid Course ID (0 = all courses).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Top 50 keywords with frequency and category.
     */
    public static function extract_keywords(int $courseid, int $since = 0): array {
        global $DB;

        $params = [];
        $where = "m.role = 'user'";
        if ($courseid > 0) {
            $where .= ' AND m.courseid = :courseid';
            $params['courseid'] = $courseid;
        }
        if ($since > 0) {
            $where .= ' AND m.timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT m.message
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE {$where}";
        $messages = $DB->get_fieldset_sql($sql, $params);

        if (empty($messages)) {
            return [];
        }

        // English stopwords.
        $stopwords = array_flip([
            'the', 'is', 'a', 'an', 'in', 'on', 'at', 'to', 'for', 'of', 'and', 'or', 'but', 'not',
            'with', 'this', 'that', 'what', 'how', 'can', 'do', 'does', 'did', 'will', 'would', 'could',
            'should', 'have', 'has', 'had', 'be', 'been', 'being', 'was', 'were', 'are', 'am', 'my',
            'your', 'we', 'they', 'them', 'their', 'you', 'it', 'its', 'from', 'by', 'about', 'as',
            'if', 'when', 'where', 'which', 'who', 'whom', 'than', 'then', 'into', 'out', 'up', 'down',
            'more', 'some', 'other', 'just', 'also', 'like', 'make', 'know', 'very', 'much', 'all',
            'only', 'most', 'over', 'such', 'each', 'so', 'no', 'there', 'here', 'these', 'those',
            'may', 'both', 'still', 'between', 'through', 'because', 'after', 'before',
        ]);

        // Navigation keywords.
        $navigationwords = array_flip([
            'navigate', 'button', 'click', 'submit', 'find', 'page', 'link', 'menu', 'course',
            'assignment', 'grade', 'deadline', 'login', 'enroll', 'access', 'download', 'upload',
            'tab', 'setting',
        ]);

        // UX keywords.
        $uxwords = array_flip([
            'error', 'bug', 'broken', 'slow', 'crash', 'freeze', 'confusing', 'difficult', 'unclear', 'wrong',
        ]);

        // Tokenize and count.
        $freq = [];
        foreach ($messages as $msg) {
            $tokens = preg_split('/[^a-zA-Z]+/', strtolower($msg), -1, PREG_SPLIT_NO_EMPTY);
            foreach ($tokens as $token) {
                if (strlen($token) < 3) {
                    continue;
                }
                if (isset($stopwords[$token])) {
                    continue;
                }
                if (!isset($freq[$token])) {
                    $freq[$token] = 0;
                }
                $freq[$token]++;
            }
        }

        // Sort by frequency descending.
        arsort($freq);

        // Take top 50 and categorize.
        $result = [];
        $i = 0;
        foreach ($freq as $word => $count) {
            if ($i >= 50) {
                break;
            }
            if (isset($navigationwords[$word])) {
                $category = 'navigation';
            } else if (isset($uxwords[$word])) {
                $category = 'ux';
            } else {
                $category = 'concept';
            }
            $result[] = [
                'keyword' => $word,
                'frequency' => $count,
                'category' => $category,
            ];
            $i++;
        }

        return $result;
    }

    /**
     * Get message rating summary (thumbs up/down, hallucination flags).
     *
     * @param int $courseid Course ID (0 = all courses).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Rating summary.
     */
    public static function get_message_rating_summary(int $courseid, int $since = 0): array {
        global $DB;

        $params = [];
        $where = '1 = 1';
        if ($courseid > 0) {
            $where .= ' AND m.courseid = :courseid';
            $params['courseid'] = $courseid;
        }
        if ($since > 0) {
            $where .= ' AND r.timecreated >= :since';
            $params['since'] = $since;
        }

        try {
            $sql = "SELECT
                        SUM(CASE WHEN r.rating = 1 THEN 1 ELSE 0 END) AS thumbs_up,
                        SUM(CASE WHEN r.rating = -1 THEN 1 ELSE 0 END) AS thumbs_down,
                        SUM(CASE WHEN r.is_hallucination = 1 THEN 1 ELSE 0 END) AS hallucination_flags,
                        COUNT(r.id) AS total_ratings
                      FROM {local_ai_course_assistant_msg_ratings} r
                      JOIN {local_ai_course_assistant_msgs} m ON m.id = r.messageid
                     WHERE {$where}";
            $row = $DB->get_record_sql($sql, $params);

            return [
                'thumbs_up' => (int) ($row->thumbs_up ?? 0),
                'thumbs_down' => (int) ($row->thumbs_down ?? 0),
                'hallucination_flags' => (int) ($row->hallucination_flags ?? 0),
                'total_ratings' => (int) ($row->total_ratings ?? 0),
            ];
        } catch (\Throwable $e) {
            return ['thumbs_up' => 0, 'thumbs_down' => 0, 'hallucination_flags' => 0, 'total_ratings' => 0];
        }
    }

    /**
     * Get average messages to resolution (first thumbs-up in a session).
     *
     * Uses the same 30-minute gap session logic as get_session_stats.
     *
     * @param int $courseid Course ID (0 = all courses).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Resolution metrics.
     */
    public static function get_messages_to_resolution(int $courseid, int $since = 0): array {
        global $DB;

        $zeroresult = ['avg_messages' => 0.0, 'median_messages' => 0, 'sample_size' => 0];

        try {
            // Get all user messages with their ratings.
            $params = [];
            $where = "m.role = 'user'";
            if ($courseid > 0) {
                $where .= ' AND m.courseid = :courseid';
                $params['courseid'] = $courseid;
            }
            if ($since > 0) {
                $where .= ' AND m.timecreated >= :since';
                $params['since'] = $since;
            }

            // Get user messages.
            $sql = "SELECT m.id, m.userid, m.timecreated
                      FROM {local_ai_course_assistant_msgs} m
                     WHERE {$where}
                     ORDER BY m.userid ASC, m.timecreated ASC";
            $messages = $DB->get_records_sql($sql, $params);

            if (empty($messages)) {
                return $zeroresult;
            }

            // Get all thumbs-up rated message IDs.
            $ratingparams = [];
            $ratingwhere = 'r.rating = 1';
            if ($courseid > 0) {
                $ratingwhere .= ' AND msg.courseid = :courseid';
                $ratingparams['courseid'] = $courseid;
            }
            if ($since > 0) {
                $ratingwhere .= ' AND r.timecreated >= :since';
                $ratingparams['since'] = $since;
            }
            $sql = "SELECT r.messageid
                      FROM {local_ai_course_assistant_msg_ratings} r
                      JOIN {local_ai_course_assistant_msgs} msg ON msg.id = r.messageid
                     WHERE {$ratingwhere}";
            $ratedids = $DB->get_fieldset_sql($sql, $ratingparams);
            $ratedset = array_flip($ratedids);

            if (empty($ratedset)) {
                return $zeroresult;
            }

            // Build sessions and find first thumbs-up in each.
            $resolutioncounts = [];
            $currentuserid = null;
            $sessionmsgcount = 0;
            $sessionend = 0;
            $sessionresolved = false;

            foreach ($messages as $msg) {
                if ($msg->userid !== $currentuserid || ($msg->timecreated - $sessionend) > 1800) {
                    // New session.
                    $currentuserid = $msg->userid;
                    $sessionmsgcount = 1;
                    $sessionend = $msg->timecreated;
                    $sessionresolved = false;
                } else {
                    $sessionend = $msg->timecreated;
                    $sessionmsgcount++;
                }

                // Check if this message has a thumbs-up.
                if (!$sessionresolved && isset($ratedset[$msg->id])) {
                    $resolutioncounts[] = $sessionmsgcount;
                    $sessionresolved = true;
                }
            }

            if (empty($resolutioncounts)) {
                return $zeroresult;
            }

            sort($resolutioncounts);
            $samplesize = count($resolutioncounts);
            $avg = round(array_sum($resolutioncounts) / $samplesize, 1);
            $mid = (int) floor($samplesize / 2);
            $median = $samplesize % 2 === 0
                ? (int) round(($resolutioncounts[$mid - 1] + $resolutioncounts[$mid]) / 2)
                : $resolutioncounts[$mid];

            return [
                'avg_messages' => $avg,
                'median_messages' => $median,
                'sample_size' => $samplesize,
            ];
        } catch (\Throwable $e) {
            return $zeroresult;
        }
    }

    /**
     * Get details of negatively-rated messages.
     *
     * @param int $courseid Course ID (0 = all courses).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @param int $limit Maximum number of results.
     * @return array Negative feedback details.
     */
    public static function get_negative_feedback_details(int $courseid, int $since = 0, int $limit = 50): array {
        global $DB;

        try {
            $params = [];
            $where = 'r.rating = -1';
            if ($courseid > 0) {
                $where .= ' AND m.courseid = :courseid';
                $params['courseid'] = $courseid;
            }
            if ($since > 0) {
                $where .= ' AND r.timecreated >= :since';
                $params['since'] = $since;
            }

            $sql = "SELECT r.id, SUBSTRING(m.message, 1, 200) AS message_excerpt,
                           r.comment, r.is_hallucination, r.timecreated, r.userid
                      FROM {local_ai_course_assistant_msg_ratings} r
                      JOIN {local_ai_course_assistant_msgs} m ON m.id = r.messageid
                     WHERE {$where}
                     ORDER BY r.timecreated DESC";
            $rows = $DB->get_records_sql($sql, $params, 0, $limit);

            $result = [];
            foreach ($rows as $row) {
                $result[] = [
                    'message_excerpt' => $row->message_excerpt,
                    'comment' => $row->comment ?? '',
                    'is_hallucination' => (int) ($row->is_hallucination ?? 0),
                    'timecreated' => (int) $row->timecreated,
                    'userid' => (int) $row->userid,
                ];
            }
            return $result;
        } catch (\Throwable $e) {
            return [];
        }
    }

    /**
     * Get feedback survey summary (star ratings and survey respondent count).
     *
     * @param int $courseid Course ID (0 = all courses).
     * @param int $since Timestamp for time range filter (0 = all time).
     * @return array Feedback summary.
     */
    public static function get_feedback_survey_summary(int $courseid, int $since = 0): array {
        global $DB;

        $default = [
            'avg_star_rating' => 0.0,
            'total_feedback' => 0,
            'rating_distribution' => [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0],
            'survey_respondents' => 0,
        ];

        try {
            $params = [];
            $where = '1 = 1';
            if ($courseid > 0) {
                $where .= ' AND f.courseid = :courseid';
                $params['courseid'] = $courseid;
            }
            if ($since > 0) {
                $where .= ' AND f.timecreated >= :since';
                $params['since'] = $since;
            }

            // Star rating distribution.
            $sql = "SELECT f.rating, COUNT(f.id) AS cnt
                      FROM {local_ai_course_assistant_feedback} f
                     WHERE {$where}
                     GROUP BY f.rating";
            $rows = $DB->get_records_sql($sql, $params);

            $distribution = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
            $totalfeedback = 0;
            $ratingsum = 0;
            foreach ($rows as $row) {
                $rating = (int) $row->rating;
                $cnt = (int) $row->cnt;
                if ($rating >= 1 && $rating <= 5) {
                    $distribution[$rating] = $cnt;
                }
                $totalfeedback += $cnt;
                $ratingsum += $rating * $cnt;
            }

            $avgrating = $totalfeedback > 0 ? round($ratingsum / $totalfeedback, 2) : 0.0;

            // Survey respondents (distinct users who left feedback).
            $sql = "SELECT COUNT(DISTINCT f.userid)
                      FROM {local_ai_course_assistant_feedback} f
                     WHERE {$where}";
            $surveyrespondents = (int) $DB->count_records_sql($sql, $params);

            return [
                'avg_star_rating' => $avgrating,
                'total_feedback' => $totalfeedback,
                'rating_distribution' => $distribution,
                'survey_respondents' => $surveyrespondents,
            ];
        } catch (\Throwable $e) {
            return $default;
        }
    }
}
