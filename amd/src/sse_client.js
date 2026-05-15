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

/**
 * SSE streaming client using fetch + ReadableStream.
 *
 * Uses POST with fetch() instead of EventSource (which only supports GET).
 * Parses SSE lines: data: {"token":"..."} and data: {"done":true}.
 *
 * @module     local_ai_course_assistant/sse_client
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define([], function() {

    /**
     * Start an SSE stream via POST.
     *
     * @param {string} url The SSE endpoint URL
     * @param {Object} body POST body data
     * @param {Object} callbacks Callback functions
     * @param {Function} callbacks.onToken Called with each token string
     * @param {Function} callbacks.onDone Called when stream completes
     * @param {Function} callbacks.onError Called on error with error message string
     * @param {Function} [callbacks.onMeta] Called with metadata object (type, pageurl, courseurl, pagetitle)
     * @returns {AbortController} Controller to cancel the stream
     */
    const startStream = function(url, body, callbacks) {
        const controller = new AbortController();

        const formData = new FormData();
        for (const key in body) {
            if (body.hasOwnProperty(key)) {
                formData.append(key, body[key]);
            }
        }

        fetch(url, {
            method: 'POST',
            body: formData,
            signal: controller.signal,
        }).then(function(response) {
            if (!response.ok) {
                response.text().then(function(text) {
                    callbacks.onError(text);
                }).catch(function() {
                    callbacks.onError('Unknown error');
                });
                return;
            }

            const reader = response.body.getReader();
            const decoder = new TextDecoder();
            let buffer = '';
            // v5.5.4 security hardening: cap the SSE accumulator so a
            // malicious provider sending an unbounded chunk without a
            // newline can not exhaust client memory. 1 MB is roughly
            // 100x the size of the longest legitimate SSE payload we
            // emit (a large RAG chunk). Beyond this we surface an error
            // and stop reading.
            const MAX_BUFFER_BYTES = 1024 * 1024;
            // Same cap for a single data: line's JSON parse, since a
            // single oversized line could OOM the parser even if the
            // buffer is healthy.
            const MAX_JSON_BYTES = 256 * 1024;

            const processStream = function() {
                reader.read().then(function(result) {
                    if (result.done) {
                        // Process any remaining buffer.
                        if (buffer.trim().startsWith('data: ')) {
                            try {
                                const data = JSON.parse(buffer.trim().substring(6));
                                if (data.done) {
                                    callbacks.onDone(data);
                                } else if (data.token !== undefined) {
                                    callbacks.onToken(data.token);
                                }
                            } catch (e) {
                                // Ignore.
                            }
                        }

                        // If we reach here without onDone, call it anyway.
                        callbacks.onDone({});
                        return;
                    }

                    buffer += decoder.decode(result.value, {stream: true});

                    if (buffer.length > MAX_BUFFER_BYTES) {
                        callbacks.onError('Stream payload exceeded safety cap');
                        try { reader.cancel(); } catch (e) { /* noop */ }
                        return;
                    }

                    // Process complete SSE lines.
                    const lines = buffer.split('\n');
                    // Keep the last incomplete line in the buffer.
                    buffer = lines.pop();

                    for (let i = 0; i < lines.length; i++) {
                        const line = lines[i];
                        const trimmed = line.trim();
                        if (!trimmed || !trimmed.startsWith('data: ')) {
                            continue;
                        }

                        const jsonStr = trimmed.substring(6);
                        if (jsonStr.length > MAX_JSON_BYTES) {
                            callbacks.onError('Stream payload line exceeded safety cap');
                            try { reader.cancel(); } catch (e) { /* noop */ }
                            return;
                        }
                        try {
                            const data = JSON.parse(jsonStr);

                            if (data.error) {
                                callbacks.onError(data.error);
                                return;
                            }

                            if (data.type === 'meta') {
                                if (callbacks.onMeta) {
                                    callbacks.onMeta(data);
                                }
                                continue;
                            }

                            if (data.done) {
                                callbacks.onDone(data);
                                return;
                            }

                            if (data.token !== undefined) {
                                callbacks.onToken(data.token);
                            }
                        } catch (e) {
                            // Skip malformed JSON lines.
                        }
                    }

                    // Continue reading.
                    processStream();
                }).catch(function(err) {
                    if (err.name === 'AbortError') {
                        return;
                    }
                    callbacks.onError(err.message || 'Stream connection failed');
                });
            };

            processStream();

        }).catch(function(err) {
            if (err.name === 'AbortError') {
                return;
            }
            callbacks.onError(err.message || 'Stream connection failed');
        });

        return controller;
    };

    return {
        startStream: startStream
    };
});
