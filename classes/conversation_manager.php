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
        $conv->id = $DB->insert_record('local_ai_course_assistant_convs', $conv);

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
     * @return int The message ID.
     */
    public static function add_message(
        int $conversationid,
        int $userid,
        int $courseid,
        string $role,
        string $message,
        int $tokensused = 0,
        string $provider = ''
    ): int {
        global $DB;

        $record = new \stdClass();
        $record->conversationid = $conversationid;
        $record->userid = $userid;
        $record->courseid = $courseid;
        $record->role = $role;
        $record->message = $message;
        $record->tokens_used = $tokensused;
        $record->provider = ($role === 'assistant' && $provider !== '') ? $provider : null;
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
        $maxpairs = (int) (get_config('local_ai_course_assistant', 'maxhistory') ?: 20);
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
     * Delete all data for a user (GDPR).
     *
     * @param int $userid
     */
    public static function delete_user_data(int $userid): void {
        global $DB;

        $convids = $DB->get_fieldset_select('local_ai_course_assistant_convs', 'id', 'userid = ?', [$userid]);
        if (!empty($convids)) {
            list($insql, $params) = $DB->get_in_or_equal($convids);
            $DB->delete_records_select('local_ai_course_assistant_msgs', "conversationid {$insql}", $params);
        }
        $DB->delete_records('local_ai_course_assistant_convs', ['userid' => $userid]);
    }

    /**
     * Delete all data for a course context (GDPR).
     *
     * @param int $courseid
     * @param int|null $userid Optional user ID to delete only specific user's data in course
     */
    public static function delete_course_data(int $courseid, ?int $userid = null): void {
        global $DB;

        $params = ['courseid' => $courseid];
        $where = 'courseid = :courseid';
        if ($userid) {
            $where .= ' AND userid = :userid';
            $params['userid'] = $userid;
        }

        $convids = $DB->get_fieldset_select('local_ai_course_assistant_convs', 'id', $where, $params);
        if (!empty($convids)) {
            list($insql, $inparams) = $DB->get_in_or_equal($convids);
            $DB->delete_records_select('local_ai_course_assistant_msgs', "conversationid {$insql}", $inparams);
        }
        $DB->delete_records_select('local_ai_course_assistant_convs', $where, $params);
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
