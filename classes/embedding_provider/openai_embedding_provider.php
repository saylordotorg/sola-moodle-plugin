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

namespace local_ai_course_assistant\embedding_provider;

/**
 * OpenAI embedding provider (text-embedding-3-small / text-embedding-3-large).
 *
 * Also compatible with any OpenAI-compatible embeddings API.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class openai_embedding_provider extends base_embedding_provider {

    /** Maximum texts per batch request. */
    private const BATCH_SIZE = 100;

    protected function get_default_model(): string {
        return 'text-embedding-3-small';
    }

    protected function get_default_base_url(): string {
        return 'https://api.openai.com/v1';
    }

    public function embed(string $text): array {
        $results = $this->embed_batch([$text]);
        return $results[0];
    }

    public function embed_batch(array $texts): array {
        if (empty($texts)) {
            return [];
        }

        $embeddings = [];

        // Process in batches to respect API limits.
        foreach (array_chunk($texts, self::BATCH_SIZE) as $batch) {
            $payload = ['model' => $this->model, 'input' => $batch];

            // Optionally request specific dimensions (text-embedding-3 models support this).
            if ($this->dimensions > 0 && $this->dimensions !== 1536) {
                $payload['dimensions'] = $this->dimensions;
            }

            $headers = [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->apikey,
            ];

            $response = $this->http_post(
                $this->baseurl . '/embeddings',
                $headers,
                json_encode($payload)
            );

            $data = json_decode($response, true);

            if (!isset($data['data']) || !is_array($data['data'])) {
                throw new \moodle_exception(
                    'chat:error',
                    'local_ai_course_assistant',
                    '',
                    null,
                    'OpenAI embeddings response missing data array'
                );
            }

            // OpenAI returns embeddings in the same order as input.
            foreach ($data['data'] as $item) {
                $embeddings[] = $item['embedding'];
            }
        }

        return $embeddings;
    }
}
