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

namespace local_ai_course_assistant\external;

use core_external\external_api;
use core_external\external_function_parameters;
use core_external\external_single_structure;
use core_external\external_value;
use local_ai_course_assistant\conversation_manager;
use local_ai_course_assistant\context_builder;
use local_ai_course_assistant\provider\base_provider;
use local_ai_course_assistant\content_indexer;
use local_ai_course_assistant\rag_retriever;

/**
 * Send a message to the AI tutor (non-streaming fallback).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class send_message extends external_api {

    /**
     * Parameter definition.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
            'message' => new external_value(PARAM_RAW, 'User message'),
        ]);
    }

    /**
     * Execute the function.
     *
     * @param int $courseid
     * @param string $message
     * @return array
     */
    public static function execute(int $courseid, string $message): array {
        global $USER;

        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
            'message' => $message,
        ]);

        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        $userid = $USER->id;
        $conv = conversation_manager::get_or_create_conversation($userid, $params['courseid']);

        // Save user message.
        conversation_manager::add_message($conv->id, $userid, $params['courseid'], 'user', $params['message']);

        // RAG retrieval.
        $retrievedchunks = [];
        if (get_config('local_ai_course_assistant', 'rag_enabled')) {
            try {
                if (!content_indexer::is_course_indexed($params['courseid'])) {
                    content_indexer::index_course($params['courseid']);
                }
                $topk = (int) (get_config('local_ai_course_assistant', 'rag_topk') ?: 5);
                $retrievedchunks = rag_retriever::retrieve($params['courseid'], $params['message'], $topk);
            } catch (\Exception $e) {
                debugging('RAG retrieval failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
                $retrievedchunks = [];
            }
        }

        // Build context and get history.
        $systemprompt = context_builder::build_system_prompt($params['courseid'], $userid, '', $retrievedchunks);
        $history = conversation_manager::get_history_for_api($conv->id);

        // Get AI response.
        $provider = base_provider::create_from_config();
        $response = $provider->chat_completion($systemprompt, $history);

        // Save assistant response.
        conversation_manager::add_message($conv->id, $userid, $params['courseid'], 'assistant', $response);

        return [
            'response' => $response,
            'success' => true,
        ];
    }

    /**
     * Return definition.
     *
     * @return external_single_structure
     */
    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'response' => new external_value(PARAM_RAW, 'AI response'),
            'success' => new external_value(PARAM_BOOL, 'Success flag'),
        ]);
    }
}
