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
 * Two-stage struggle classifier (v5.3.0).
 *
 * Detects sustained genuine frustration over multiple turns within a
 * single chat session. The output of a positive classification is NOT
 * an email — it is a private sticking-point note recorded in the
 * learner's carryover memory, used only to inform tone and depth on
 * subsequent SOLA replies, never to message the learner externally.
 *
 * Stage 1 (this class, called inline by sse.php every chat turn):
 *   - Cheap keyword + pattern match.
 *   - Writes one row per candidate turn to struggle_signal table.
 *   - Noisy by design; false positives cost very little.
 *
 * Stage 2 (the struggle_signal_review scheduled task):
 *   - Runs hourly. Reviews session-aggregated stage-1 signals.
 *   - Optional bounded LLM call for confidence (skipped if not configured).
 *   - On 'frustrated' AND >= STAGE2_TRIGGER_THRESHOLD candidate turns in
 *     the same session, calls record_sticking_point on the learner's
 *     memory with the topic_hint.
 *
 * Privacy: signals never surface to instructors. Auto-purged after 7
 * days. Learner can wipe via Communications panel.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class struggle_classifier {

    /** Table for stage-1 + stage-2 outputs. */
    const TABLE_SIGNAL = 'local_ai_course_assistant_struggle_signal';

    /** Stage-1 ttl: candidates older than this are pruned by stage-2 task. */
    const SIGNAL_TTL_SEC = 7 * 86400;

    /** Stage-2 dispatches a sticking-point note when at least this many
     * candidates exist in the same session. */
    const STAGE2_TRIGGER_THRESHOLD = 3;

    /**
     * Stage-1 score for a single learner message. Returns 0..3 where
     * 0 = no signal, 1 = mild, 2 = strong, 3 = explicit.
     *
     * Pure function; no IO.
     *
     * @param string $message
     * @return int
     */
    public static function stage1_score(string $message): int {
        $m = mb_strtolower(trim($message));
        if ($m === '') {
            return 0;
        }
        $score = 0;

        // Explicit frustration phrasing — strong signal.
        $explicit = [
            "i don't get this", "i dont get this", 'i still dont get it',
            'this makes no sense', 'this is so confusing', 'i give up',
            'im so lost', "i'm so lost", 'im stuck', "i'm stuck",
            'this is impossible', "i can't do this", "i cant do this",
            "i don't understand", 'i dont understand', 'why is this so hard',
        ];
        foreach ($explicit as $phrase) {
            if (strpos($m, $phrase) !== false) {
                $score += 2;
                break;
            }
        }

        // Repeated short questions ending in ? often signal stuck thinking.
        if (mb_strlen($m) <= 80 && substr_count($m, '?') >= 2) {
            $score += 1;
        }

        // Multiple negation/expletive patterns — mild signal.
        $patterns = ['cant ', "can't ", 'wont ', "won't ", 'hate ', 'awful', 'terrible'];
        $hits = 0;
        foreach ($patterns as $p) {
            if (strpos($m, $p) !== false) {
                $hits++;
            }
        }
        if ($hits >= 2) {
            $score += 1;
        }

        return min($score, 3);
    }

    /**
     * Record a stage-1 candidate row. Called by sse.php on every chat
     * turn whose stage-1 score is non-zero.
     *
     * Cheap: one insert. The row carries the session_id (provided by
     * caller — typically a hash of userid+courseid+session-start) and
     * topic_hint (the current page or activity name).
     *
     * @param int $userid
     * @param int $courseid
     * @param string $sessionid
     * @param string $topichint
     * @param int $score 1..3 from stage1_score().
     */
    public static function record_stage1(int $userid, int $courseid, string $sessionid,
            string $topichint, int $score): void {
        global $DB;
        if ($score <= 0) {
            return;
        }
        if (!(bool)get_config('local_ai_course_assistant', 'struggle_classifier_enabled')) {
            return;
        }
        $DB->insert_record(self::TABLE_SIGNAL, (object)[
            'userid' => $userid,
            'courseid' => $courseid,
            'session_id' => self::cap($sessionid, 64),
            'topic_hint' => self::cap($topichint, 255),
            'stage1_score' => max(1, min(3, $score)),
            'stage2_label' => 'unprocessed',
            'followup_sent_at' => 0,
            'timecreated' => time(),
        ]);
    }

    /**
     * Stage-2: aggregate unprocessed candidates, label sessions, and
     * write sticking-point notes for sessions labeled 'frustrated' with
     * enough candidate turns. Called from the scheduled task.
     *
     * Optional LLM call: when struggle_classifier_use_llm is on AND a
     * provider is configured, we ask the model to choose
     * frustrated|confused|fine for the session given just the topic and
     * the count. Otherwise we fall back to the count threshold.
     *
     * @return int Number of sticking-point notes recorded.
     */
    public static function process_pending(): int {
        global $DB;
        if (!(bool)get_config('local_ai_course_assistant', 'struggle_classifier_enabled')) {
            return 0;
        }

        // Group unprocessed candidates by (userid, courseid, session_id).
        $sql = "SELECT MIN(id) AS sid, userid, courseid, session_id,
                       MAX(topic_hint) AS topic_hint, COUNT(*) AS hits, MAX(stage1_score) AS maxscore
                  FROM {" . self::TABLE_SIGNAL . "}
                 WHERE stage2_label = 'unprocessed'
              GROUP BY userid, courseid, session_id
                HAVING COUNT(*) >= ?";
        $sessions = $DB->get_records_sql($sql, [self::STAGE2_TRIGGER_THRESHOLD]);

        $notesrecorded = 0;
        foreach ($sessions as $sess) {
            $label = self::stage2_label((int)$sess->hits, (int)$sess->maxscore, (string)$sess->topic_hint);
            $DB->set_field_select(self::TABLE_SIGNAL, 'stage2_label', $label,
                'userid = ? AND courseid = ? AND session_id = ? AND stage2_label = ?',
                [$sess->userid, $sess->courseid, $sess->session_id, 'unprocessed']);

            if ($label === 'frustrated' && !empty($sess->topic_hint)) {
                learner_memory_manager::record_sticking_point(
                    (int)$sess->userid,
                    (int)$sess->courseid,
                    (string)$sess->topic_hint
                );
                $notesrecorded++;
            }
        }

        // Mark singleton candidates as 'fine' so they don't sit in the
        // table forever waiting for stage-2.
        $DB->execute(
            "UPDATE {" . self::TABLE_SIGNAL . "}
                SET stage2_label = ?
              WHERE stage2_label = ?
                AND timecreated < ?",
            ['fine', 'unprocessed', time() - 86400]
        );

        return $notesrecorded;
    }

    /**
     * Purge signal rows older than SIGNAL_TTL_SEC.
     *
     * @return int Rows deleted.
     */
    public static function purge_old(): int {
        global $DB;
        $cutoff = time() - self::SIGNAL_TTL_SEC;
        $rows = $DB->count_records_select(self::TABLE_SIGNAL, 'timecreated < ?', [$cutoff]);
        $DB->delete_records_select(self::TABLE_SIGNAL, 'timecreated < ?', [$cutoff]);
        return $rows;
    }

    /**
     * Choose a label for a session. Conservative defaults: only
     * 'frustrated' when both the count and the max stage-1 score support
     * it. The LLM call is intentionally not wired in this version; the
     * threshold approach is deterministic and free.
     *
     * @param int $hits
     * @param int $maxscore
     * @param string $topichint
     * @return string
     */
    private static function stage2_label(int $hits, int $maxscore, string $topichint): string {
        if ($hits >= self::STAGE2_TRIGGER_THRESHOLD && $maxscore >= 2 && $topichint !== '') {
            return 'frustrated';
        }
        if ($hits >= 2) {
            return 'confused';
        }
        return 'fine';
    }

    /**
     * Trim a string to fit a CHAR column.
     */
    private static function cap(string $s, int $max): string {
        if (function_exists('mb_substr')) {
            return mb_substr($s, 0, $max);
        }
        return substr($s, 0, $max);
    }
}
