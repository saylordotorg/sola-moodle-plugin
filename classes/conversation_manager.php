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
 * Conversation manager for chat history CRUD.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class conversation_manager {

    /**
     * Get or create a conversation for a user in a course.
     *
     * Each user has one active conversation per course.
     *
     * @param int $userid
     * @param int $courseid
     * @return \stdClass The conversation record.
     */
    public static function get_or_create_conversation(int $userid, int $courseid): \stdClass {
        global $DB;

        $conv = $DB->get_record('local_ai_course_assistant_convs', [
            'userid' => $userid,
            'courseid' => $courseid,
        ]);

        if ($conv) {
            return $conv;
        }

        $now = time();
        $conv = new \stdClass();
        $conv->userid = $userid;
        $conv->courseid = $courseid;
        $conv->title = '';
        $conv->timecreated = $now;
        $conv->timemodified = $now;
        try {
            $conv->id = $DB->insert_record('local_ai_course_assistant_convs', $conv);
        } catch (\dml_write_exception $e) {
            // Race condition: another request created the conversation first.
            $conv = $DB->get_record('local_ai_course_assistant_convs', [
                'userid' => $userid,
                'courseid' => $courseid,
            ]);
            if (!$conv) {
                throw $e;
            }
        }

        return $conv;
    }

    /**
     * Add a message to a conversation.
     *
     * @param int $conversationid
     * @param int $userid
     * @param int $courseid
     * @param string $role 'user' or 'assistant'
     * @param string $message
     * @param int $tokensused
     * @param string $provider AI provider name (for assistant messages, used in analytics)
     * @param int|null $prompttokens Prompt token count.
     * @param int|null $completiontokens Completion token count.
     * @param string|null $modelname Model name used to generate the response.
     * @param string $interactiontype Interaction type for analytics.
     * @param int|null $cmid Course module ID when available.
     * @return int The message ID.
     */
    public static function add_message(
        int $conversationid,
        int $userid,
        int $courseid,
        string $role,
        string $message,
        int $tokensused = 0,
        string $provider = '',
        ?int $prompttokens = null,
        ?int $completiontokens = null,
        ?string $modelname = null,
        string $interactiontype = 'chat',
        ?int $cmid = null
    ): int {
        global $DB;

        $record = new \stdClass();
        $record->conversationid = $conversationid;
        $record->userid = $userid;
        $record->courseid = $courseid;
        $record->role = $role;
        $record->message = $message;
        // Keep tokens_used as the sum for backward compatibility with existing analytics queries.
        $record->tokens_used = ($prompttokens !== null && $completiontokens !== null)
            ? ($prompttokens + $completiontokens)
            : $tokensused;
        $record->prompt_tokens     = $prompttokens;
        $record->completion_tokens = $completiontokens;
        $record->model_name        = ($role === 'assistant' && $modelname !== null) ? $modelname : null;
        $record->provider = ($role === 'assistant' && $provider !== '') ? $provider : null;
        $record->interaction_type  = $interactiontype ?: 'chat';
        $record->cmid              = $cmid ?: null;
        $record->timecreated = time();

        $id = $DB->insert_record('local_ai_course_assistant_msgs', $record);

        // Update conversation timemodified.
        $DB->set_field('local_ai_course_assistant_convs', 'timemodified', time(), ['id' => $conversationid]);

        // Enforce 50-pair (100 message) cap: delete oldest messages beyond the limit.
        $totalcount = $DB->count_records('local_ai_course_assistant_msgs', ['conversationid' => $conversationid]);
        if ($totalcount > 100) {
            $excess  = $totalcount - 100;
            $oldest  = $DB->get_records(
                'local_ai_course_assistant_msgs',
                ['conversationid' => $conversationid],
                'timecreated ASC',
                'id',
                0,
                $excess
            );
            if (!empty($oldest)) {
                list($insql, $inparams) = $DB->get_in_or_equal(array_keys($oldest));
                $DB->delete_records_select('local_ai_course_assistant_msgs', "id {$insql}", $inparams);
            }
        }

        return $id;
    }

    /**
     * Record a Learning Radar (meta-AI) query and its response so the pair
     * is exportable via redash_export.php.
     *
     * Bypasses the 100-message conversation cap that {@see add_message()}
     * enforces — the cap is for student-chat hygiene; admin Learning Radar
     * queries are kept indefinitely so they can be exported to BI tools.
     *
     * Writes two rows: a `user` row with the query text and prompt tokens,
     * and an `assistant` row with the response text and completion tokens.
     * Both use `interaction_type='meta'` (ad-hoc) or `'meta_scheduled'`
     * (cron-driven), so analytics that filter on interaction_type can
     * include or exclude admin queries cleanly.
     *
     * @param int $userid
     * @param string $query Full text the admin asked.
     * @param string $response Full LLM response.
     * @param string $provider Provider id.
     * @param string $modelname Model id.
     * @param int $prompttokens Approximate input tokens.
     * @param int $completiontokens Approximate output tokens.
     * @param bool $scheduled True for cron-driven runs.
     * @return void
     */
    public static function record_meta_query(
        int $userid,
        string $query,
        string $response,
        string $provider,
        string $modelname,
        int $prompttokens,
        int $completiontokens,
        bool $scheduled = false
    ): void {
        global $DB;

        $convid = self::get_or_create_conversation($userid, SITEID)->id;
        $now = time();
        $itype = $scheduled ? 'meta_scheduled' : 'meta';

        $userrow = new \stdClass();
        $userrow->conversationid = $convid;
        $userrow->userid = $userid;
        $userrow->courseid = SITEID;
        $userrow->role = 'user';
        $userrow->message = $query;
        $userrow->tokens_used = $prompttokens;
        $userrow->prompt_tokens = $prompttokens;
        $userrow->completion_tokens = 0;
        $userrow->model_name = null;
        $userrow->provider = null;
        $userrow->interaction_type = $itype;
        $userrow->cmid = null;
        $userrow->timecreated = $now;
        $DB->insert_record('local_ai_course_assistant_msgs', $userrow);

        $assistrow = clone $userrow;
        $assistrow->role = 'assistant';
        $assistrow->message = $response;
        $assistrow->tokens_used = $completiontokens;
        $assistrow->prompt_tokens = 0;
        $assistrow->completion_tokens = $completiontokens;
        $assistrow->model_name = $modelname !== '' ? $modelname : null;
        $assistrow->provider = $provider !== '' ? $provider : null;
        // +1 second so the user row sorts strictly before the assistant row
        // even when both are inserted in the same wall-clock second.
        $assistrow->timecreated = $now + 1;
        $DB->insert_record('local_ai_course_assistant_msgs', $assistrow);

        $DB->set_field('local_ai_course_assistant_convs', 'timemodified', $now + 1, ['id' => $convid]);
    }

    /**
     * Get all messages for a conversation, ordered by time.
     *
     * @param int $conversationid
     * @return array
     */
    public static function get_messages(int $conversationid): array {
        global $DB;
        return $DB->get_records('local_ai_course_assistant_msgs', [
            'conversationid' => $conversationid,
        ], 'timecreated ASC');
    }

    /**
     * Get message history formatted for the AI provider API.
     *
     * Respects the maxhistory config setting (number of message pairs).
     *
     * @param int $conversationid
     * @return array Array of ['role' => '...', 'content' => '...'].
     */
    public static function get_history_for_api(int $conversationid): array {
        $rawmax = get_config('local_ai_course_assistant', 'maxhistory');
        $maxpairs = ($rawmax === false || $rawmax === '') ? 20 : (int) $rawmax;
        $maxmessages = $maxpairs * 2;

        $messages = self::get_messages($conversationid);
        $messages = array_values($messages);

        // Trim to max messages, keeping the most recent.
        if (count($messages) > $maxmessages) {
            $messages = array_slice($messages, -$maxmessages);
        }

        return array_map(function ($msg) {
            return [
                'role' => $msg->role,
                'content' => $msg->message,
            ];
        }, $messages);
    }

    /**
     * Clear a conversation (delete all messages and the conversation record).
     *
     * @param int $conversationid
     * @param int $userid The user requesting the clear (ownership check).
     * @throws \moodle_exception If user doesn't own the conversation.
     */
    public static function clear_conversation(int $conversationid, int $userid): void {
        global $DB;

        $conv = $DB->get_record('local_ai_course_assistant_convs', ['id' => $conversationid], '*', MUST_EXIST);
        if ((int) $conv->userid !== $userid) {
            throw new \moodle_exception('nopermissions', 'error');
        }

        $DB->delete_records('local_ai_course_assistant_msgs', ['conversationid' => $conversationid]);
        $DB->delete_records('local_ai_course_assistant_convs', ['id' => $conversationid]);
    }

    /**
     * Delete every SOLA record tied to a single user across all courses.
     *
     * v5.3.7: previously only purged convs + msgs; now sweeps every table
     * in the plugin that stores per-user state, so a learner who clicks
     * "Delete all my SOLA data" actually gets a clean slate. Returns a
     * per-table count of deleted rows for the audit log and for tests.
     *
     * Tables purged (in dependency order):
     *   - msgs (FK to convs)
     *   - convs
     *   - msg_ratings, plans, reminders, feedback, survey_resp, ut_resp,
     *     practice_scores, profiles
     *   - learner_goals, learner_memory, streak (v5.2.0/v5.3.0)
     *   - struggle_signal (v5.3.0)
     *   - outreach_log (v5.3.0)
     *   - audit (every audit row authored by this user)
     *
     * Quiz_cfg is per-quiz not per-user; not touched here.
     *
     * @param int $userid
     * @return array<string, int> table => rows deleted
     */
    public static function delete_user_data(int $userid): array {
        global $DB;
        $counts = [];

        // 1. Messages (FK to conversations).
        $convids = $DB->get_fieldset_select('local_ai_course_assistant_convs', 'id', 'userid = ?', [$userid]);
        if (!empty($convids)) {
            list($insql, $params) = $DB->get_in_or_equal($convids);
            $counts['messages'] = $DB->count_records_select('local_ai_course_assistant_msgs', "conversationid {$insql}", $params);
            $DB->delete_records_select('local_ai_course_assistant_msgs', "conversationid {$insql}", $params);
        } else {
            $counts['messages'] = 0;
        }

        // 2. Per-user records keyed directly on userid.
        $simple = [
            'conversations'   => 'local_ai_course_assistant_convs',
            'msg_ratings'     => 'local_ai_course_assistant_msg_ratings',
            'plans'           => 'local_ai_course_assistant_plans',
            'reminders'       => 'local_ai_course_assistant_reminders',
            'feedback'        => 'local_ai_course_assistant_feedback',
            'survey_resp'     => 'local_ai_course_assistant_survey_resp',
            'ut_resp'         => 'local_ai_course_assistant_ut_resp',
            'practice_scores' => 'local_ai_course_assistant_practice_scores',
            'profiles'        => 'local_ai_course_assistant_profiles',
            'learner_goals'   => 'local_ai_course_assistant_learner_goals',
            'learner_memory'  => 'local_ai_course_assistant_learner_memory',
            'streak'          => 'local_ai_course_assistant_streak',
            'struggle_signal' => 'local_ai_course_assistant_struggle_signal',
            'outreach_log'    => 'local_ai_course_assistant_outreach_log',
            'audit'           => 'local_ai_course_assistant_audit',
        ];
        foreach ($simple as $label => $table) {
            try {
                $counts[$label] = $DB->count_records($table, ['userid' => $userid]);
                $DB->delete_records($table, ['userid' => $userid]);
            } catch (\Throwable $e) {
                // Table may not exist on older installs; skip gracefully.
                $counts[$label] = 0;
            }
        }

        return $counts;
    }

    /**
     * Delete every SOLA record tied to a (userid, courseid) pair, or to a
     * whole courseid if $userid is omitted.
     *
     * v5.3.7: same coverage expansion as delete_user_data — sweeps every
     * SOLA table that holds per-(course, user) state, not just convs+msgs.
     *
     * @param int $courseid
     * @param int|null $userid Optional. When set, only the (courseid, userid) pair is deleted.
     * @return array<string, int> table => rows deleted
     */
    public static function delete_course_data(int $courseid, ?int $userid = null): array {
        global $DB;
        $counts = [];

        // Conversation messages first (FK to convs).
        $convparams = ['courseid' => $courseid];
        $convwhere = 'courseid = :courseid';
        if ($userid) {
            $convwhere .= ' AND userid = :userid';
            $convparams['userid'] = $userid;
        }
        $convids = $DB->get_fieldset_select('local_ai_course_assistant_convs', 'id', $convwhere, $convparams);
        if (!empty($convids)) {
            list($insql, $inparams) = $DB->get_in_or_equal($convids);
            $counts['messages'] = $DB->count_records_select('local_ai_course_assistant_msgs', "conversationid {$insql}", $inparams);
            $DB->delete_records_select('local_ai_course_assistant_msgs', "conversationid {$insql}", $inparams);
        } else {
            $counts['messages'] = 0;
        }

        // Tables keyed on (courseid[, userid]).
        $tables = [
            'conversations'   => 'local_ai_course_assistant_convs',
            'msg_ratings'     => 'local_ai_course_assistant_msg_ratings',
            'plans'           => 'local_ai_course_assistant_plans',
            'reminders'       => 'local_ai_course_assistant_reminders',
            'feedback'        => 'local_ai_course_assistant_feedback',
            'survey_resp'     => 'local_ai_course_assistant_survey_resp',
            'ut_resp'         => 'local_ai_course_assistant_ut_resp',
            'practice_scores' => 'local_ai_course_assistant_practice_scores',
            'profiles'        => 'local_ai_course_assistant_profiles',
            'learner_goals'   => 'local_ai_course_assistant_learner_goals',
            'learner_memory'  => 'local_ai_course_assistant_learner_memory',
            'streak'          => 'local_ai_course_assistant_streak',
            'struggle_signal' => 'local_ai_course_assistant_struggle_signal',
            'outreach_log'    => 'local_ai_course_assistant_outreach_log',
            'audit'           => 'local_ai_course_assistant_audit',
        ];
        foreach ($tables as $label => $table) {
            try {
                $params = ['courseid' => $courseid];
                $where = 'courseid = :courseid';
                if ($userid) {
                    $where .= ' AND userid = :userid';
                    $params['userid'] = $userid;
                }
                $counts[$label] = $DB->count_records_select($table, $where, $params);
                $DB->delete_records_select($table, $where, $params);
            } catch (\Throwable $e) {
                $counts[$label] = 0;
            }
        }

        return $counts;
    }

    /**
     * Get user's data usage statistics.
     *
     * @param int $userid
     * @return array Statistics array with totals and per-course breakdown
     */
    public static function get_user_stats(int $userid): array {
        global $DB;

        // Get total conversations.
        $totalconvs = $DB->count_records('local_ai_course_assistant_convs', ['userid' => $userid]);

        // Get total messages.
        $sql = "SELECT COUNT(m.id)
                  FROM {local_ai_course_assistant_msgs} m
                  JOIN {local_ai_course_assistant_convs} c ON c.id = m.conversationid
                 WHERE c.userid = :userid";
        $totalmessages = $DB->count_records_sql($sql, ['userid' => $userid]);

        // Get per-course breakdown.
        $sql = "SELECT c.courseid,
                       COUNT(DISTINCT c.id) as convcount,
                       COUNT(m.id) as msgcount,
                       MAX(m.timecreated) as lastactivity
                  FROM {local_ai_course_assistant_convs} c
             LEFT JOIN {local_ai_course_assistant_msgs} m ON m.conversationid = c.id
                 WHERE c.userid = :userid
              GROUP BY c.courseid";
        $coursedata = $DB->get_records_sql($sql, ['userid' => $userid]);

        $courses = [];
        foreach ($coursedata as $data) {
            $courses[$data->courseid] = [
                'conversations' => $data->convcount,
                'messages' => $data->msgcount,
                'lastactivity' => $data->lastactivity,
            ];
        }

        return [
            'total_conversations' => $totalconvs,
            'total_messages' => $totalmessages,
            'courses' => $courses,
        ];
    }
}
