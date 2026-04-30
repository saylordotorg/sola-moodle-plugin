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
 * Aggregates the three signals that an instructor would want to triage —
 * negative ratings, off-topic flags, integrity flags — into a single
 * per-course queue with a "Mark resolved" action.
 *
 * Each row in the queue is keyed by `(source, sourceid)` where source is
 * one of:
 *   - 'rating'     : a thumbs-down on an assistant message
 *                    (`local_ai_course_assistant_msg_ratings.id`)
 *   - 'offtopic'   : a conversation that hit the off-topic threshold
 *                    (`local_ai_course_assistant_convs.id`)
 *   - 'integrity'  : an audit row flagged by the integrity classifier
 *                    (`local_ai_course_assistant_audit.id`)
 *
 * Resolution state lives in `local_ai_course_assistant_review_res`. A
 * UNIQUE index on `(source, sourceid)` guarantees idempotent resolves.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class review_queue {

    /**
     * Pending (unresolved) queue rows for a course, newest first.
     *
     * @param int $courseid
     * @param int $limit Maximum rows to return.
     * @return array<int, array{source:string, sourceid:int, when:int, summary:string, who:string}>
     */
    public static function pending_for_course(int $courseid, int $limit = 50): array {
        global $DB;

        $resolved = $DB->get_records('local_ai_course_assistant_review_res',
            ['courseid' => $courseid], '', 'id, source, sourceid');
        $resolvedkeys = [];
        foreach ($resolved as $r) {
            $resolvedkeys[$r->source . ':' . $r->sourceid] = true;
        }

        $rows = [];

        // 1. Negative ratings on assistant messages in this course.
        $rsql = "SELECT r.id AS sourceid, r.timecreated AS twhen, r.rating, r.userid,
                        m.message, m.courseid
                   FROM {local_ai_course_assistant_msg_ratings} r
                   JOIN {local_ai_course_assistant_msgs} m ON m.id = r.messageid
                  WHERE m.courseid = :courseid AND r.rating = -1
                  ORDER BY r.timecreated DESC";
        try {
            foreach ($DB->get_records_sql($rsql, ['courseid' => $courseid], 0, $limit) as $r) {
                if (isset($resolvedkeys['rating:' . $r->sourceid])) {
                    continue;
                }
                $rows[] = [
                    'source'   => 'rating',
                    'sourceid' => (int) $r->sourceid,
                    'when'     => (int) $r->twhen,
                    'summary'  => mb_substr((string) $r->message, 0, 200),
                    'who'      => anonymizer::name((int) $r->userid),
                ];
            }
        } catch (\Throwable $e) { /* tables may not exist on stripped installs */ }

        // 2. Conversations that hit the off-topic threshold.
        $offtopicmin = (int) (get_config('local_ai_course_assistant', 'offtopic_max_per_session') ?: 3);
        try {
            $convs = $DB->get_records_sql(
                "SELECT id AS sourceid, userid, offtopic_count, timemodified AS twhen
                   FROM {local_ai_course_assistant_convs}
                  WHERE courseid = :courseid AND offtopic_count >= :minct
                  ORDER BY timemodified DESC",
                ['courseid' => $courseid, 'minct' => $offtopicmin], 0, $limit);
            foreach ($convs as $c) {
                if (isset($resolvedkeys['offtopic:' . $c->sourceid])) {
                    continue;
                }
                $rows[] = [
                    'source'   => 'offtopic',
                    'sourceid' => (int) $c->sourceid,
                    'when'     => (int) $c->twhen,
                    'summary'  => 'Off-topic count: ' . (int) $c->offtopic_count,
                    'who'      => anonymizer::name((int) $c->userid),
                ];
            }
        } catch (\Throwable $e) { /* ignored */ }

        // 3. Integrity audit flags for this course.
        try {
            $audit = $DB->get_records_sql(
                "SELECT id AS sourceid, userid, payload, timecreated AS twhen
                   FROM {local_ai_course_assistant_audit}
                  WHERE event = :event AND courseid = :courseid
                  ORDER BY timecreated DESC",
                ['event' => 'integrity_flagged', 'courseid' => $courseid], 0, $limit);
            foreach ($audit as $a) {
                if (isset($resolvedkeys['integrity:' . $a->sourceid])) {
                    continue;
                }
                $payload = is_string($a->payload) ? json_decode($a->payload, true) : null;
                $kind = is_array($payload) && isset($payload['kind']) ? (string) $payload['kind'] : 'integrity';
                $rows[] = [
                    'source'   => 'integrity',
                    'sourceid' => (int) $a->sourceid,
                    'when'     => (int) $a->twhen,
                    'summary'  => 'Integrity: ' . $kind,
                    'who'      => anonymizer::name((int) $a->userid),
                ];
            }
        } catch (\Throwable $e) { /* ignored */ }

        // Sort newest-first across all sources, then cap.
        usort($rows, static function ($a, $b) {
            return $b['when'] - $a['when'];
        });
        return array_slice($rows, 0, $limit);
    }

    /**
     * Mark a queue row resolved. Idempotent — a duplicate resolve is a
     * no-op.
     *
     * @param string $source 'rating' | 'offtopic' | 'integrity'
     * @param int $sourceid
     * @param int $courseid
     * @param int $userid Resolver's user id.
     * @param string $note Optional free-text note.
     * @return void
     */
    public static function mark_resolved(string $source, int $sourceid, int $courseid, int $userid, string $note = ''): void {
        global $DB;
        if (!in_array($source, ['rating', 'offtopic', 'integrity'], true)) {
            return;
        }
        if ($DB->record_exists('local_ai_course_assistant_review_res',
                ['source' => $source, 'sourceid' => $sourceid])) {
            return;
        }
        $row = new \stdClass();
        $row->source = $source;
        $row->sourceid = $sourceid;
        $row->courseid = $courseid;
        $row->resolved_by = $userid;
        $row->note = $note !== '' ? $note : null;
        $row->timecreated = time();
        $DB->insert_record('local_ai_course_assistant_review_res', $row);
    }
}
