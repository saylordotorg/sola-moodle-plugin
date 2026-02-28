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

namespace local_ai_course_assistant\provider;

/**
 * AI provider interface.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
interface provider_interface {

    /**
     * Send a chat completion request (non-streaming).
     *
     * @param string $systemprompt The system prompt.
     * @param array $messages Array of ['role' => 'user'|'assistant', 'content' => '...'].
     * @param array $options Additional options (temperature, etc.).
     * @return string The assistant's response text.
     * @throws \moodle_exception On API errors.
     */
    public function chat_completion(string $systemprompt, array $messages, array $options = []): string;

    /**
     * Send a streaming chat completion request.
     *
     * @param string $systemprompt The system prompt.
     * @param array $messages Array of ['role' => 'user'|'assistant', 'content' => '...'].
     * @param callable $callback Called with each text chunk: function(string $chunk): void.
     * @param array $options Additional options (temperature, etc.).
     * @throws \moodle_exception On API errors.
     */
    public function chat_completion_stream(string $systemprompt, array $messages, callable $callback, array $options = []): void;
}
