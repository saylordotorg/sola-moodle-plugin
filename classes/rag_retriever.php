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

use local_ai_course_assistant\embedding_provider\base_embedding_provider;

/**
 * Retrieves semantically relevant chunks for a user query via cosine similarity.
 *
 * Algorithm:
 *  1. Embed the user query (single embedding API call).
 *  2. Load all embedded chunks for the course from DB.
 *  3. Compute cosine similarity for each chunk.
 *  4. Return top-k chunks sorted by descending similarity.
 *
 * Performance: cosine similarity in PHP is fast for < ~2000 chunks.
 * For larger corpora consider a vector DB or pgvector extension.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class rag_retriever {

    /**
     * Retrieve the top-k most relevant chunks for a user query.
     *
     * @param int    $courseid
     * @param string $query    The user's message / question.
     * @param int    $topk     Number of chunks to return.
     * @return array Array of ['content' => string, 'score' => float] sorted by score desc.
     *               Empty array if no chunks or embedding fails.
     */
    public static function retrieve(int $courseid, string $query, int $topk = 5): array {
        global $DB;

        // Embed the query.
        $provider   = base_embedding_provider::create_from_config();
        $queryvec   = $provider->embed($query);

        if (empty($queryvec)) {
            return [];
        }

        // Load all embedded chunks for this course.
        $rows = $DB->get_records_select(
            'local_ai_course_assistant_chunks',
            'courseid = :courseid AND embedding IS NOT NULL',
            ['courseid' => $courseid],
            '',
            'id, content, embedding'
        );

        if (empty($rows)) {
            return [];
        }

        // Score each chunk.
        $scored = [];
        foreach ($rows as $row) {
            $chunkvec = json_decode($row->embedding, true);
            if (!is_array($chunkvec) || empty($chunkvec)) {
                continue;
            }
            $score    = self::cosine($queryvec, $chunkvec);
            $scored[] = ['content' => $row->content, 'score' => $score];
        }

        if (empty($scored)) {
            return [];
        }

        // Sort descending by score.
        usort($scored, fn($a, $b) => $b['score'] <=> $a['score']);

        return array_slice($scored, 0, $topk);
    }

    /**
     * Compute cosine similarity between two equal-length float vectors.
     *
     * @param float[] $a
     * @param float[] $b
     * @return float Value in [-1, 1]; returns 0.0 if either vector has zero norm.
     */
    private static function cosine(array $a, array $b): float {
        $dot = $norma = $normb = 0.0;
        $len = count($a);
        for ($i = 0; $i < $len; $i++) {
            $ai     = (float) ($a[$i] ?? 0.0);
            $bi     = (float) ($b[$i] ?? 0.0);
            $dot   += $ai * $bi;
            $norma += $ai * $ai;
            $normb += $bi * $bi;
        }
        if ($norma == 0.0 || $normb == 0.0) {
            return 0.0;
        }
        return $dot / (sqrt($norma) * sqrt($normb));
    }
}
