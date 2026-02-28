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
 * Splits extracted module text into overlapping chunks for embedding.
 *
 * Strategy:
 *  1. Split on paragraph boundaries (\n\n).
 *  2. Merge paragraphs until target word count is reached.
 *  3. Prefix each chunk with "[{section}] {title}: " for retrieval context.
 *  4. Overlap: last N words of previous chunk prepended to next chunk.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class content_chunker {

    /**
     * Chunk a block of text into overlapping segments ready for embedding.
     *
     * @param string $text    The plain-text content to chunk.
     * @param string $title   Module title — prepended to each chunk.
     * @param string $section Section name — prepended to each chunk.
     * @param int    $wordsize Target words per chunk (default 400).
     * @param int    $overlap  Words from previous chunk to prepend (default 50).
     * @return array Array of ['content' => string, 'contenthash' => string]
     */
    public static function chunk(
        string $text,
        string $title,
        string $section,
        int $wordsize = 400,
        int $overlap = 50
    ): array {
        // Build the context prefix for every chunk.
        $prefix = '';
        if (!empty($section) && $section !== 'General') {
            $prefix = "[{$section}] ";
        }
        $prefix .= !empty($title) ? "{$title}: " : '';

        // Split on paragraph breaks, filter empties.
        $paragraphs = array_values(array_filter(
            preg_split('/\n{2,}/', $text),
            fn($p) => strlen(trim($p)) > 0
        ));

        if (empty($paragraphs)) {
            return [];
        }

        // Merge paragraphs into chunks of approximately $wordsize words.
        $rawchunks  = [];
        $current    = '';
        $currentwc  = 0;

        foreach ($paragraphs as $para) {
            $para   = trim($para);
            $parawc = str_word_count($para);

            if ($currentwc > 0 && ($currentwc + $parawc) > $wordsize) {
                // Flush current accumulation as a chunk.
                $rawchunks[] = $current;
                $current     = $para;
                $currentwc   = $parawc;
            } else {
                $current   = $current === '' ? $para : $current . "\n\n" . $para;
                $currentwc += $parawc;
            }
        }

        if (!empty($current)) {
            $rawchunks[] = $current;
        }

        // Add overlapping tail words from previous chunk and prepend context prefix.
        $chunks       = [];
        $prevtailwords = [];

        foreach ($rawchunks as $raw) {
            $words = preg_split('/\s+/', $raw, -1, PREG_SPLIT_NO_EMPTY);

            // Prepend overlap from previous chunk.
            if (!empty($prevtailwords)) {
                $content = $prefix . implode(' ', $prevtailwords) . ' ' . $raw;
            } else {
                $content = $prefix . $raw;
            }

            // Store last $overlap words as next chunk's tail.
            $prevtailwords = array_slice($words, -$overlap);

            $chunks[] = [
                'content'     => $content,
                'contenthash' => sha1($content),
            ];
        }

        return $chunks;
    }
}
