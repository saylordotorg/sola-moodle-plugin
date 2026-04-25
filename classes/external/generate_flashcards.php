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
use core_external\external_multiple_structure;
use core_external\external_single_structure;
use core_external\external_value;
use local_ai_course_assistant\flashcard_manager;
use local_ai_course_assistant\context_builder;
use local_ai_course_assistant\provider\base_provider;

/**
 * Extract a small batch of flashcards from the current page content via
 * the configured AI provider, then persist them. Synchronous server-side
 * AI call (not streaming) — analogous to `generate_quiz`. Returns the
 * inserted ids and the cards so the client can display them.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class generate_flashcards extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
            'cmid'     => new external_value(PARAM_INT, 'Course module id', VALUE_DEFAULT, 0),
            'count'    => new external_value(PARAM_INT, 'Cards to generate', VALUE_DEFAULT, 5),
        ]);
    }

    public static function execute(int $courseid, int $cmid = 0, int $count = 5): array {
        global $USER;
        $params = self::validate_parameters(self::execute_parameters(),
            ['courseid' => $courseid, 'cmid' => $cmid, 'count' => $count]);
        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        if (!flashcard_manager::is_enabled_for_course($params['courseid'])) {
            return ['success' => false, 'message' => 'flashcards_disabled', 'cards' => []];
        }

        $count = max(3, min(10, (int) $params['count']));
        $content = $params['cmid'] > 0
            ? context_builder::get_module_content((int) $params['cmid'], 8000)
            : '';
        if ($content === '') {
            return ['success' => false, 'message' => 'no_page_content', 'cards' => []];
        }

        $sysprompt = "You generate study flashcards for a learner. "
            . "Read the source content and produce exactly {$count} concise question-and-answer pairs that capture the most important takeaways. "
            . "Question and answer must each be one or two sentences. Avoid trivia, dates, and direct quotes. "
            . "Respond with raw JSON only, in this shape:\n"
            . '{"cards":[{"question":"...","answer":"..."}, ...]}'
            . "\n\nSOURCE:\n" . $content;

        try {
            $provider = base_provider::create_from_config((int) $params['courseid']);
            $response = $provider->chat_completion(
                $sysprompt,
                [['role' => 'user', 'content' => "Generate the {$count} flashcards now."]],
                [
                    'response_schema' => [
                        'type' => 'object',
                        'properties' => [
                            'cards' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'question' => ['type' => 'string'],
                                        'answer'   => ['type' => 'string'],
                                    ],
                                    'required' => ['question', 'answer'],
                                ],
                            ],
                        ],
                        'required' => ['cards'],
                    ],
                ]
            );
        } catch (\Throwable $e) {
            return ['success' => false, 'message' => 'provider_error', 'cards' => []];
        }

        $decoded = json_decode($response, true);
        if (!$decoded || empty($decoded['cards']) || !is_array($decoded['cards'])) {
            // Try to extract JSON object from the response if structured-output wasn't honored.
            if (preg_match('/\{[\s\S]*\}/', $response, $m)) {
                $decoded = json_decode($m[0], true);
            }
        }
        if (!$decoded || empty($decoded['cards']) || !is_array($decoded['cards'])) {
            return ['success' => false, 'message' => 'parse_error', 'cards' => []];
        }

        $ids = flashcard_manager::save_batch(
            (int) $USER->id,
            (int) $params['courseid'],
            $params['cmid'] > 0 ? (int) $params['cmid'] : null,
            $decoded['cards']
        );
        $cards = [];
        foreach ($decoded['cards'] as $i => $c) {
            $cards[] = [
                'id'       => $ids[$i] ?? 0,
                'question' => (string) ($c['question'] ?? ''),
                'answer'   => (string) ($c['answer'] ?? ''),
            ];
        }
        return ['success' => true, 'message' => 'ok', 'cards' => $cards];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'success' => new external_value(PARAM_BOOL, 'Whether cards were generated'),
            'message' => new external_value(PARAM_ALPHAEXT, 'Status code'),
            'cards'   => new external_multiple_structure(
                new external_single_structure([
                    'id'       => new external_value(PARAM_INT, 'Card id (0 if not saved)'),
                    'question' => new external_value(PARAM_RAW, 'Question'),
                    'answer'   => new external_value(PARAM_RAW, 'Answer'),
                ])
            ),
        ]);
    }
}
