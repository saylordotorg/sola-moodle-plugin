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
 * FAQ manager — parses and provides FAQ content for the AI system prompt.
 *
 * FAQ entries are stored in admin settings as plain text, one per line:
 * Q: question text | A: answer text
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class faq_manager {

    /**
     * Get the FAQ content formatted for inclusion in the system prompt.
     *
     * @return string Formatted FAQ text, or empty string if no FAQ configured.
     */
    public static function get_faq_for_prompt(): string {
        $raw = get_config('local_ai_course_assistant', 'faq_content');
        if (empty($raw)) {
            return '';
        }

        $entries = self::parse_faq($raw);
        if (empty($entries)) {
            return '';
        }

        $lines = ["Here is a FAQ you should use to answer common support questions:"];
        foreach ($entries as $entry) {
            $lines[] = "Q: {$entry['question']}";
            $lines[] = "A: {$entry['answer']}";
            $lines[] = '';
        }

        return implode("\n", $lines);
    }

    /**
     * Parse raw FAQ text into structured entries.
     *
     * Supports two formats:
     * - Single line: Q: question | A: answer
     * - Multi-line: Q: question (newline) A: answer
     *
     * @param string $raw
     * @return array Array of ['question' => '...', 'answer' => '...'].
     */
    public static function parse_faq(string $raw): array {
        $entries = [];
        $lines = explode("\n", str_replace("\r\n", "\n", $raw));

        $currentq = null;
        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) {
                continue;
            }

            // Single-line format: Q: ... | A: ...
            if (preg_match('/^Q:\s*(.+?)\s*\|\s*A:\s*(.+)$/i', $line, $matches)) {
                $entries[] = [
                    'question' => trim($matches[1]),
                    'answer' => trim($matches[2]),
                ];
                $currentq = null;
                continue;
            }

            // Multi-line format.
            if (preg_match('/^Q:\s*(.+)$/i', $line, $matches)) {
                $currentq = trim($matches[1]);
                continue;
            }

            if ($currentq !== null && preg_match('/^A:\s*(.+)$/i', $line, $matches)) {
                $entries[] = [
                    'question' => $currentq,
                    'answer' => trim($matches[1]),
                ];
                $currentq = null;
                continue;
            }
        }

        return $entries;
    }
}
