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

/**
 * Daily retention sweeper for SOLA conversation records.
 *
 * Deletes conversation and message rows older than
 * `conversation_retention_days` (default 730 days; 0 disables).
 * Operationalizes GDPR Article 5 storage limitation and the Records
 * Retention Policy referenced in the AI use policy.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class conversation_retention extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:conversation_retention', 'local_ai_course_assistant');
    }

    public function execute(): void {
        global $DB;
        $days = (int) (get_config('local_ai_course_assistant', 'conversation_retention_days') ?: 730);
        if ($days <= 0) {
            return;
        }
        $cutoff = time() - ($days * 86400);

        // Find stale conversations, delete their messages, then the conversation rows.
        $convids = $DB->get_fieldset_select(
            'local_ai_course_assistant_convs',
            'id',
            'timemodified < :cutoff',
            ['cutoff' => $cutoff]
        );
        if (empty($convids)) {
            mtrace('conversation_retention: nothing to purge (cutoff ' . $days . 'd).');
            return;
        }
        list($insql, $params) = $DB->get_in_or_equal($convids);
        $DB->delete_records_select('local_ai_course_assistant_msgs',
            "conversationid {$insql}", $params);
        $DB->delete_records_select('local_ai_course_assistant_convs',
            "id {$insql}", $params);
        mtrace('conversation_retention: purged ' . count($convids)
            . ' conversation(s) older than ' . $days . ' days.');
    }
}
