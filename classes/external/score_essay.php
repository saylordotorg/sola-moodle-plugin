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
use local_ai_course_assistant\provider\base_provider;

/**
 * Rubric-based essay feedback via the configured AI provider.
 *
 * Accepts learner essay text plus an optional rubric; the AI returns
 * per-criterion scores (0-4), overall feedback, and revision
 * suggestions. Non-streaming; called from essay_feedback.php.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class score_essay extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
            'essay'    => new external_value(PARAM_RAW, 'Essay text'),
            'rubric'   => new external_value(PARAM_RAW, 'Optional rubric text', VALUE_DEFAULT, ''),
        ]);
    }

    public static function execute(int $courseid, string $essay, string $rubric = ''): array {
        global $USER;
        $params = self::validate_parameters(self::execute_parameters(),
            ['courseid' => $courseid, 'essay' => $essay, 'rubric' => $rubric]);
        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        if (!\local_ai_course_assistant\feature_flags::resolve('essay_feedback', (int) $params['courseid'])) {
            return self::empty_result('disabled');
        }

        $essayText = trim($params['essay']);
        if (mb_strlen($essayText) < 80) {
            return self::empty_result('too_short');
        }
        if (mb_strlen($essayText) > 40000) {
            $essayText = mb_substr($essayText, 0, 40000);
        }
        $rubricText = trim($params['rubric']);
        if (mb_strlen($rubricText) > 8000) {
            $rubricText = mb_substr($rubricText, 0, 8000);
        }

        $defaultRubric = "If no rubric is provided, score on these four default criteria: "
            . "1) Thesis clarity, 2) Evidence and support, 3) Organisation and flow, 4) Mechanics and style.";
        $rubricBlock = $rubricText !== '' ? "RUBRIC:\n{$rubricText}" : $defaultRubric;

        $sysprompt = "You are a writing coach giving formative feedback on a learner's essay. "
            . "Score each rubric criterion from 0 (not evident) to 4 (strong mastery). "
            . "For each criterion, give one or two sentences of concrete feedback naming specific strengths and the single highest-leverage revision. "
            . "Then give a short overall comment and three concrete revision suggestions ordered by impact. "
            . "Encourage revision; do not grade harshly. Respond with JSON only, in this shape:\n"
            . '{"criteria":[{"name":"...","score":3,"feedback":"..."}], "overall":"...", "revisions":["...","...","..."]}'
            . "\n\n{$rubricBlock}\n\nESSAY:\n{$essayText}";

        try {
            $provider = base_provider::create_from_config((int) $params['courseid']);
            $response = $provider->chat_completion(
                $sysprompt,
                [['role' => 'user', 'content' => 'Produce the feedback JSON now.']],
                [
                    'response_schema' => [
                        'type' => 'object',
                        'properties' => [
                            'criteria' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'name'     => ['type' => 'string'],
                                        'score'    => ['type' => 'integer'],
                                        'feedback' => ['type' => 'string'],
                                    ],
                                    'required' => ['name', 'score', 'feedback'],
                                ],
                            ],
                            'overall'   => ['type' => 'string'],
                            'revisions' => ['type' => 'array', 'items' => ['type' => 'string']],
                        ],
                        'required' => ['criteria', 'overall', 'revisions'],
                    ],
                ]
            );
        } catch (\Throwable $e) {
            return self::empty_result('provider_error');
        }

        $decoded = json_decode($response, true);
        if (!$decoded || !isset($decoded['criteria'])) {
            if (preg_match('/\{[\s\S]*\}/', $response, $m)) {
                $decoded = json_decode($m[0], true);
            }
        }
        if (!$decoded || !isset($decoded['criteria']) || !is_array($decoded['criteria'])) {
            return self::empty_result('parse_error');
        }

        $criteria = [];
        foreach ($decoded['criteria'] as $c) {
            $criteria[] = [
                'name'     => (string) ($c['name'] ?? ''),
                'score'    => (int) ($c['score'] ?? 0),
                'feedback' => (string) ($c['feedback'] ?? ''),
            ];
        }
        return [
            'success'   => true,
            'message'   => 'ok',
            'criteria'  => $criteria,
            'overall'   => (string) ($decoded['overall'] ?? ''),
            'revisions' => array_map('strval', (array) ($decoded['revisions'] ?? [])),
        ];
    }

    private static function empty_result(string $code): array {
        return [
            'success'   => false,
            'message'   => $code,
            'criteria'  => [],
            'overall'   => '',
            'revisions' => [],
        ];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'success'  => new external_value(PARAM_BOOL, 'Whether feedback was produced'),
            'message'  => new external_value(PARAM_ALPHAEXT, 'Status code'),
            'criteria' => new external_multiple_structure(
                new external_single_structure([
                    'name'     => new external_value(PARAM_RAW, 'Criterion name'),
                    'score'    => new external_value(PARAM_INT,  'Score 0-4'),
                    'feedback' => new external_value(PARAM_RAW,  'Feedback text'),
                ])
            ),
            'overall'   => new external_value(PARAM_RAW, 'Overall comment'),
            'revisions' => new external_multiple_structure(
                new external_value(PARAM_RAW, 'Revision suggestion')
            ),
        ]);
    }
}
