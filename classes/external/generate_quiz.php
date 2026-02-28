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
use local_ai_course_assistant\context_builder;
use local_ai_course_assistant\provider\base_provider;

/**
 * Generate a practice quiz for a course.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class generate_quiz extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT, 'Course ID'),
            'count'    => new external_value(PARAM_INT, 'Number of questions (3-10)', VALUE_DEFAULT, 3),
            'topic'    => new external_value(PARAM_TEXT, 'Topic or __guided__ or empty', VALUE_DEFAULT, '__guided__'),
            'cmid'     => new external_value(PARAM_INT, 'Current module/page ID (0 if not on a resource page)', VALUE_DEFAULT, 0),
        ]);
    }

    public static function execute(int $courseid, int $count = 3, string $topic = '__guided__', int $cmid = 0): array {
        global $DB, $USER;

        $params = self::validate_parameters(self::execute_parameters(), [
            'courseid' => $courseid,
            'count'    => $count,
            'topic'    => $topic,
            'cmid'     => $cmid,
        ]);

        $context = \context_course::instance($params['courseid']);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        $courseid = (int) $params['courseid'];
        $count    = max(1, min(10, (int) $params['count']));
        $topic    = trim($params['topic']);
        $cmid     = (int) $params['cmid'];
        $userid   = (int) $USER->id;

        $course = $DB->get_record('course', ['id' => $courseid], 'id,fullname', MUST_EXIST);
        $coursetopics = context_builder::get_course_topics_text($courseid);

        // Build the system prompt.
        if ($topic === '__guided__') {
            // AI-guided mode: gather grade data and recent chat history.
            $gradecontext = self::build_grade_summary($courseid, $userid);
            $chatcontext  = self::build_recent_chat_context($courseid, $userid);

            $systemprompt =
                "You are an expert educational quiz generator for the course \"{$course->fullname}\".\n\n" .
                "Course topics:\n{$coursetopics}\n\n" .
                "## Student grade summary\n{$gradecontext}\n\n" .
                "## Recent student questions\n{$chatcontext}\n\n" .
                "Analyse the grade data and chat history to identify areas where this student needs the most practice. " .
                "Select the most beneficial topic(s) for a {$count}-question quiz focused on weak or under-explored areas.\n\n" .
                self::get_quiz_format_instructions($count);
        } else {
            if (empty($topic) && $cmid > 0) {
                // "Current page" mode: generate from the specific module's content.
                $pagecontent = context_builder::get_module_content($cmid);
                if (!empty($pagecontent)) {
                    $systemprompt =
                        "You are an expert educational quiz generator for the course \"{$course->fullname}\".\n\n" .
                        "## Current Page Content\n{$pagecontent}\n\n" .
                        "Generate a {$count}-question multiple-choice quiz based on this specific page's content. " .
                        "Focus only on the key concepts presented on this page.\n\n" .
                        self::get_quiz_format_instructions($count);
                } else {
                    // Fallback: page content unavailable, use course topics.
                    $systemprompt =
                        "You are an expert educational quiz generator for the course \"{$course->fullname}\".\n\n" .
                        "Course topics:\n{$coursetopics}\n\n" .
                        "Generate a {$count}-question multiple-choice quiz on the current course content.\n\n" .
                        self::get_quiz_format_instructions($count);
                }
            } else {
                $topictext = !empty($topic) ? $topic : 'the current course content';
                $systemprompt =
                    "You are an expert educational quiz generator for the course \"{$course->fullname}\".\n\n" .
                    "Course topics:\n{$coursetopics}\n\n" .
                    "Generate a {$count}-question multiple-choice quiz on the topic: {$topictext}.\n\n" .
                    self::get_quiz_format_instructions($count);
            }
        }

        try {
            $provider = base_provider::create_from_config($courseid);
            $response = $provider->chat_completion(
                $systemprompt,
                [['role' => 'user', 'content' => 'Generate the quiz now.']]
            );
        } catch (\Throwable $e) {
            return ['success' => false, 'error' => $e->getMessage(), 'topic' => '', 'questions' => []];
        }

        // Extract JSON from <quiz>…</quiz> delimiters.
        if (!preg_match('/<quiz>(.*?)<\/quiz>/s', $response, $matches)) {
            return ['success' => false, 'error' => 'Invalid response format from AI.', 'topic' => '', 'questions' => []];
        }

        $decoded = json_decode(trim($matches[1]), true);
        if (!$decoded || !isset($decoded['questions']) || !is_array($decoded['questions'])) {
            return ['success' => false, 'error' => 'Could not parse quiz JSON.', 'topic' => '', 'questions' => []];
        }

        // Normalise and validate questions.
        $questions = [];
        foreach ($decoded['questions'] as $q) {
            if (empty($q['question']) || empty($q['choices']) || empty($q['correct'])) {
                continue;
            }
            $questions[] = [
                'id'          => (int) ($q['id'] ?? count($questions) + 1),
                'question'    => (string) $q['question'],
                'choices'     => array_values(array_map('strval', (array) $q['choices'])),
                'correct'     => (string) $q['correct'],
                'explanation' => (string) ($q['explanation'] ?? ''),
            ];
        }

        if (empty($questions)) {
            return ['success' => false, 'error' => 'No valid questions in AI response.', 'topic' => '', 'questions' => []];
        }

        return [
            'success'   => true,
            'error'     => '',
            'topic'     => (string) ($decoded['topic'] ?? $topic),
            'questions' => $questions,
        ];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'success'   => new external_value(PARAM_BOOL, 'Whether the quiz was generated successfully'),
            'error'     => new external_value(PARAM_TEXT, 'Error message if not successful'),
            'topic'     => new external_value(PARAM_TEXT, 'Quiz topic'),
            'questions' => new external_multiple_structure(
                new external_single_structure([
                    'id'          => new external_value(PARAM_INT, 'Question index'),
                    'question'    => new external_value(PARAM_RAW, 'Question text'),
                    'choices'     => new external_multiple_structure(
                        new external_value(PARAM_RAW, 'Choice text')
                    ),
                    'correct'     => new external_value(PARAM_TEXT, 'Correct answer letter (A/B/C/D)'),
                    'explanation' => new external_value(PARAM_RAW, 'Explanation of the correct answer'),
                ])
            ),
        ]);
    }

    // -------------------------------------------------------------------------
    // Private helpers
    // -------------------------------------------------------------------------

    /**
     * Return the strict JSON output instructions for the AI.
     */
    private static function get_quiz_format_instructions(int $count): string {
        return <<<INSTRUCTIONS
IMPORTANT: Return ONLY valid JSON wrapped in <quiz> tags. No other text before or after.
Schema:
<quiz>
{
  "topic": "Topic name",
  "questions": [
    {
      "id": 1,
      "question": "Question text?",
      "choices": ["A) ...", "B) ...", "C) ...", "D) ..."],
      "correct": "A",
      "explanation": "Why A is correct."
    }
  ]
}
</quiz>
Requirements:
- Exactly {$count} questions.
- Each question has exactly 4 choices labelled A) B) C) D).
- "correct" is one of: A, B, C, D.
- "explanation" is 1–2 sentences explaining the correct answer.
INSTRUCTIONS;
    }

    /**
     * Build a grade summary string for the student.
     */
    private static function build_grade_summary(int $courseid, int $userid): string {
        try {
            $items = \grade_item::fetch_all(['courseid' => $courseid, 'itemtype' => 'mod']);
            if (empty($items)) {
                return 'No grade data available.';
            }
            $lines = [];
            foreach ($items as $item) {
                $grade = $item->get_grade($userid, false);
                if (!$grade || $grade->finalgrade === null) {
                    continue;
                }
                $max = (float) $item->grademax ?: 100;
                $pct = round(($grade->finalgrade / $max) * 100);
                $lines[] = "- {$item->itemname}: {$pct}%";
            }
            return !empty($lines) ? implode("\n", $lines) : 'No graded items completed yet.';
        } catch (\Throwable $e) {
            return 'Grade data unavailable.';
        }
    }

    /**
     * Build a summary of the student's recent chat messages.
     */
    private static function build_recent_chat_context(int $courseid, int $userid): string {
        global $DB;
        try {
            $sql = "SELECT m.message
                      FROM {local_ai_course_assistant_msgs} m
                      JOIN {local_ai_course_assistant_convs} c ON c.id = m.conversationid
                     WHERE c.courseid = :courseid
                       AND c.userid = :userid
                       AND m.role = 'user'
                  ORDER BY m.timecreated DESC";
            $records = $DB->get_records_sql($sql, ['courseid' => $courseid, 'userid' => $userid], 0, 20);
            if (empty($records)) {
                return 'No recent questions.';
            }
            $lines = array_map(function($r) { return '- ' . shorten_text($r->message, 120); }, array_values($records));
            return implode("\n", $lines);
        } catch (\Throwable $e) {
            return 'Chat history unavailable.';
        }
    }
}
