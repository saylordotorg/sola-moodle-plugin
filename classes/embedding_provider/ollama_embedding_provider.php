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
 * Ollama embedding provider (nomic-embed-text, mxbai-embed-large, etc.).
 *
 * Calls the Ollama /api/embeddings endpoint (one request per text).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class ollama_embedding_provider extends base_embedding_provider {

    protected function get_default_model(): string {
        return 'nomic-embed-text';
    }

    protected function get_default_base_url(): string {
        return 'http://localhost:11434/api';
    }

    public function embed(string $text): array {
        $headers = ['Content-Type: application/json'];
        $payload = ['model' => $this->model, 'prompt' => $text];

        $response = $this->http_post(
            $this->baseurl . '/embeddings',
            $headers,
            json_encode($payload)
        );

        $data = json_decode($response, true);

        if (!isset($data['embedding']) || !is_array($data['embedding'])) {
            throw new \moodle_exception(
                'chat:error',
                'local_ai_course_assistant',
                '',
                null,
                'Ollama embeddings response missing embedding field'
            );
        }

        return $data['embedding'];
    }

    public function embed_batch(array $texts): array {
        // Ollama does not have a native batch endpoint — call embed() for each.
        $embeddings = [];
        foreach ($texts as $text) {
            $embeddings[] = $this->embed($text);
        }
        return $embeddings;
    }
}
