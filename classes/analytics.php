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

        // Get all messages in the range, group by day.
        $sql = "SELECT m.timecreated
                  FROM {local_ai_course_assistant_msgs} m
                 WHERE m.courseid = :courseid AND m.timecreated >= :since AND m.role = 'user'
                 ORDER BY m.timecreated ASC";
        $records = $DB->get_records_sql($sql, ['courseid' => $courseid, 'since' => $since]);

        // Aggregate by day.
        $dailycounts = [];
        foreach ($records as $record) {
            $day = date('Y-m-d', $record->timecreated);
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
}
