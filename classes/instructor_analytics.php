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
 * Aggregation queries powering the per-course Instructor & Instructional
 * Designer Dashboard. Every query is scoped to a single courseid + a
 * since-timestamp window, so the same shape works for the 7d / 30d / 90d /
 * all selectors on the page.
 *
 * Queries return aggregate-only data by default (counts, percentages); the
 * dashboard's reveal-real-names toggle is what binds aggregate rows to
 * specific learner identities, and that toggle writes a FERPA audit row in
 * the same audit table the site analytics page uses.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class instructor_analytics {

    /**
     * Header summary tile. Active learners (with at least one user-role msg
     * in the period), total user messages, average per learner, last
     * activity timestamp.
     *
     * @param int $courseid
     * @param int $since Unix timestamp; 0 means all time.
     * @return array{active:int,total_messages:int,avg_per_learner:float,last_activity:int}
     */
    public static function summary(int $courseid, int $since): array {
        global $DB;
        $params = ['courseid' => $courseid, 'since' => $since];
        $where = "courseid = :courseid AND role = 'user' AND timecreated > :since";

        $active = (int) $DB->get_field_sql(
            "SELECT COUNT(DISTINCT userid)
               FROM {local_ai_course_assistant_msgs}
              WHERE $where",
            $params
        );
        $total = (int) $DB->get_field_sql(
            "SELECT COUNT(id) FROM {local_ai_course_assistant_msgs}
              WHERE $where",
            $params
        );
        $last = (int) ($DB->get_field_sql(
            "SELECT MAX(timecreated) FROM {local_ai_course_assistant_msgs}
              WHERE courseid = :courseid AND timecreated > :since",
            $params
        ) ?: 0);

        return [
            'active'          => $active,
            'total_messages'  => $total,
            'avg_per_learner' => $active > 0 ? round($total / $active, 1) : 0.0,
            'last_activity'   => $last,
        ];
    }

    /**
     * Mastery aggregate by objective. For each course objective, returns
     * cohort-wide counts (mastered, learning, not_started) and the total
     * number of attempts logged. Uses objective_manager::compute_mastery
     * so the threshold + window settings stay in one place.
     *
     * @param int $courseid
     * @return array[]
     */
    public static function mastery_aggregate(int $courseid): array {
        global $DB;
        if (!objective_manager::is_enabled_for_course($courseid)) {
            return [];
        }
        $objectives = objective_manager::list_for_course($courseid);
        if (empty($objectives)) {
            return [];
        }
        $rows = [];
        foreach ($objectives as $obj) {
            $userids = $DB->get_fieldset_sql(
                "SELECT DISTINCT userid FROM {local_ai_course_assistant_obj_att}
                  WHERE objectiveid = :oid",
                ['oid' => (int) $obj->id]
            );
            $mastered = $learning = $notstarted = 0;
            // Enrolled learners not in $userids count as not_started.
            $coursecontext = \context_course::instance($courseid);
            $enrolledusers = get_enrolled_users($coursecontext, '', 0, 'u.id', null, 0, 0, true);
            $enrolledset = [];
            foreach ($enrolledusers as $u) {
                $enrolledset[(int) $u->id] = true;
            }
            $attempted = [];
            foreach ($userids as $uid) {
                $attempted[(int) $uid] = true;
                $m = objective_manager::compute_mastery((int) $uid, (int) $obj->id);
                if (!empty($m['mastered'])) {
                    $mastered++;
                } else {
                    $learning++;
                }
            }
            $notstarted = max(0, count($enrolledset) - count($attempted));
            $totalattempts = (int) $DB->count_records(
                'local_ai_course_assistant_obj_att',
                ['objectiveid' => (int) $obj->id]
            );
            $cohortsize = max(1, count($enrolledset));
            $rows[] = [
                'id'              => (int) $obj->id,
                'code'            => (string) ($obj->code ?? ''),
                'title'           => (string) $obj->title,
                'mastered'        => $mastered,
                'learning'        => $learning,
                'not_started'     => $notstarted,
                'cohort_size'     => $cohortsize,
                'mastered_pct'    => round(($mastered / $cohortsize) * 100, 0),
                'learning_pct'    => round(($learning / $cohortsize) * 100, 0),
                'not_started_pct' => round(($notstarted / $cohortsize) * 100, 0),
                'attempts'        => $totalattempts,
            ];
        }
        // Sort weakest first: ascending mastered_pct, descending cohort_size.
        usort($rows, function ($a, $b) {
            return [$a['mastered_pct'], -$a['attempts']]
                <=> [$b['mastered_pct'], -$b['attempts']];
        });
        return $rows;
    }

    /**
     * Top topics from the keywords table for this course and period.
     *
     * @param int $courseid
     * @param int $since
     * @param int $limit
     * @return array[] Each row: keyword, frequency, category.
     */
    public static function top_topics(int $courseid, int $since, int $limit = 10): array {
        global $DB;
        $sql = "SELECT keyword, SUM(frequency) AS freq, MAX(category) AS category
                  FROM {local_ai_course_assistant_keywords}
                 WHERE courseid = :courseid AND period_end > :since
                 GROUP BY keyword
                 ORDER BY freq DESC, keyword ASC";
        $rows = $DB->get_records_sql($sql, ['courseid' => $courseid, 'since' => $since], 0, $limit);
        $out = [];
        foreach ($rows as $r) {
            $out[] = [
                'keyword'   => (string) $r->keyword,
                'frequency' => (int) $r->freq,
                'category'  => (string) $r->category,
            ];
        }
        return $out;
    }

    /**
     * Confusion heatmap. Modules the cohort asked the most questions on,
     * which usually maps to either intrinsic difficulty or unclear content.
     *
     * @param int $courseid
     * @param int $since
     * @param int $limit
     * @return array[] cmid, name, modname, question_count, distinct_learners
     */
    public static function confusion_heatmap(int $courseid, int $since, int $limit = 15): array {
        global $DB;
        $sql = "SELECT cmid, COUNT(id) AS q_count, COUNT(DISTINCT userid) AS d_users
                  FROM {local_ai_course_assistant_msgs}
                 WHERE courseid = :courseid
                   AND role = 'user'
                   AND cmid IS NOT NULL
                   AND timecreated > :since
                 GROUP BY cmid
                 ORDER BY q_count DESC";
        $rows = $DB->get_records_sql($sql,
            ['courseid' => $courseid, 'since' => $since], 0, $limit);
        $out = [];
        foreach ($rows as $r) {
            $cmid = (int) $r->cmid;
            $name = '';
            $modname = '';
            try {
                $modinfo = get_fast_modinfo($courseid);
                $cm = $modinfo->get_cm($cmid);
                if ($cm) {
                    $name = $cm->name;
                    $modname = $cm->modname;
                }
            } catch (\Throwable $e) {
                // Module may have been deleted since the message was sent.
                $name = '(deleted)';
            }
            $out[] = [
                'cmid'              => $cmid,
                'name'              => $name,
                'modname'           => $modname,
                'question_count'    => (int) $r->q_count,
                'distinct_learners' => (int) $r->d_users,
            ];
        }
        return $out;
    }

    /**
     * Per-message ratings rollup for the course/period. Adds a per-module
     * breakdown of low-rated assistant responses for follow-up.
     *
     * @param int $courseid
     * @param int $since
     * @return array{positive:int,negative:int,hallucinations:int,low_rated_by_module:array}
     */
    public static function ratings_summary(int $courseid, int $since): array {
        global $DB;
        $params = ['courseid' => $courseid, 'since' => $since];
        $positive = (int) $DB->get_field_sql(
            "SELECT COUNT(id) FROM {local_ai_course_assistant_msg_ratings}
              WHERE courseid = :courseid AND rating = 1 AND timecreated > :since",
            $params
        );
        $negative = (int) $DB->get_field_sql(
            "SELECT COUNT(id) FROM {local_ai_course_assistant_msg_ratings}
              WHERE courseid = :courseid AND rating = -1 AND timecreated > :since",
            $params
        );
        $halluc = (int) $DB->get_field_sql(
            "SELECT COUNT(id) FROM {local_ai_course_assistant_msg_ratings}
              WHERE courseid = :courseid AND is_hallucination = 1 AND timecreated > :since",
            $params
        );

        $sql = "SELECT m.cmid, COUNT(r.id) AS neg
                  FROM {local_ai_course_assistant_msg_ratings} r
                  JOIN {local_ai_course_assistant_msgs} m ON m.id = r.messageid
                 WHERE r.courseid = :courseid
                   AND r.rating = -1
                   AND r.timecreated > :since
                   AND m.cmid IS NOT NULL
                 GROUP BY m.cmid
                 ORDER BY neg DESC";
        $perModule = $DB->get_records_sql($sql, $params, 0, 10);
        $bymodule = [];
        foreach ($perModule as $row) {
            $cmid = (int) $row->cmid;
            $name = '';
            try {
                $modinfo = get_fast_modinfo($courseid);
                $cm = $modinfo->get_cm($cmid);
                if ($cm) {
                    $name = $cm->name;
                }
            } catch (\Throwable $e) {
                $name = '(deleted)';
            }
            $bymodule[] = [
                'cmid'         => $cmid,
                'name'         => $name,
                'low_rated'    => (int) $row->neg,
            ];
        }
        return [
            'positive'             => $positive,
            'negative'             => $negative,
            'hallucinations'       => $halluc,
            'low_rated_by_module'  => $bymodule,
        ];
    }

    /**
     * Engagement gap. Counts enrolled learners who have not used SOLA in
     * the last $days days. Returns aggregate count + a sample of user ids
     * for the names-revealed view.
     *
     * @param int $courseid
     * @param int $days
     * @return array{not_seen:int,enrolled:int,sample_userids:int[]}
     */
    public static function engagement_gap(int $courseid, int $days): array {
        global $DB;
        $coursecontext = \context_course::instance($courseid);
        $enrolled = get_enrolled_users($coursecontext, '', 0, 'u.id', null, 0, 0, true);
        $enrolledids = array_map(function ($u) { return (int) $u->id; }, array_values($enrolled));
        if (empty($enrolledids)) {
            return ['not_seen' => 0, 'enrolled' => 0, 'sample_userids' => []];
        }
        $threshold = time() - ($days * 86400);
        list($insql, $params) = $DB->get_in_or_equal($enrolledids, SQL_PARAMS_NAMED, 'uid');
        $params['courseid'] = $courseid;
        $params['threshold'] = $threshold;
        $activeids = $DB->get_fieldset_sql(
            "SELECT DISTINCT userid
               FROM {local_ai_course_assistant_msgs}
              WHERE userid $insql
                AND courseid = :courseid
                AND timecreated > :threshold",
            $params
        );
        $activeset = array_flip(array_map('intval', $activeids));
        $notseen = [];
        foreach ($enrolledids as $uid) {
            if (!isset($activeset[$uid])) {
                $notseen[] = $uid;
            }
        }
        return [
            'not_seen'       => count($notseen),
            'enrolled'       => count($enrolledids),
            'sample_userids' => array_slice($notseen, 0, 50),
        ];
    }
}
