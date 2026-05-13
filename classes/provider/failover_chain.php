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

defined('MOODLE_INTERNAL') || die();

use local_ai_course_assistant\audit_logger;

/**
 * Per-call failover chain decorator for provider_interface.
 *
 * Wraps a primary provider plus an ordered list of fallback providers.
 * On a chat or stream call:
 *   1. Try the primary. If a circuit is open against the primary's label,
 *      skip directly to the head of the fallback list.
 *   2. On exception (HTTP 5xx, connect timeout, provider-side error),
 *      open a 15-minute circuit on that provider's label and try the next.
 *   3. On three consecutive successful calls against a previously failing
 *      label, close the circuit and restore normal priority.
 *   4. Every fall-through emits an audit row (event=failover_fallthrough)
 *      with primary, fallback, reason, and elapsed-ms. This is the SOC2
 *      evidence of operational resilience.
 *
 * Streaming wrinkle: the chain falls over only if the first token hasn't
 * been received by the time the primary errors. Once tokens are arriving
 * the user is committed to that stream; falling over mid-response would
 * produce a disjointed conversation. The current PHP-side implementation
 * cannot enforce a hard TTFT deadline (would require per-provider curl
 * timeout shaping); instead it relies on the provider's natural HTTP
 * timeout and treats a zero-token response as a failure that triggers
 * a fall-through.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class failover_chain implements provider_interface {

    /** @var provider_interface The primary provider (head of the chain). */
    private provider_interface $primary;

    /** @var string The label used to track the primary's circuit state in cache. */
    private string $primarylabel;

    /** @var array<int, array{provider: provider_interface, label: string}> Ordered fallbacks. */
    private array $fallbacks;

    /** @var array Decorator options (timeout_seconds, audit, courseid, userid). */
    private array $options;

    /** @var provider_interface|null Tracks which provider served the most recent call (for get_last_token_usage). */
    private ?provider_interface $lastused = null;

    /** Default per-call deadline before falling through. Seconds. */
    public const DEFAULT_TIMEOUT_SECONDS = 8;

    /** Audit event name emitted on every fall-through. */
    public const AUDIT_EVENT_FALLTHROUGH = 'failover_fallthrough';

    /** Audit event name emitted when a circuit opens. */
    public const AUDIT_EVENT_CIRCUIT_OPEN = 'failover_circuit_open';

    /**
     * @param provider_interface $primary
     * @param string $primarylabel Label of the primary, used for circuit-state lookups.
     * @param array<int, array{provider: provider_interface, label: string}> $fallbacks Ordered fallback list.
     * @param array $options Optional: ['timeout_seconds' => int, 'audit' => bool, 'courseid' => int, 'userid' => int].
     */
    public function __construct(provider_interface $primary, string $primarylabel, array $fallbacks, array $options = []) {
        $this->primary = $primary;
        $this->primarylabel = $primarylabel;
        $this->fallbacks = $fallbacks;
        $this->options = $options + [
            'timeout_seconds' => self::DEFAULT_TIMEOUT_SECONDS,
            'audit'           => true,
            'courseid'        => 0,
            'userid'          => 0,
        ];
    }

    /**
     * Non-streaming chat completion. Tries primary, then each fallback.
     * Throws the last error if every member of the chain fails.
     *
     * @param string $systemprompt
     * @param array $messages
     * @param array $options
     * @return string
     * @throws \Throwable If every provider in the chain fails.
     */
    public function chat_completion(string $systemprompt, array $messages, array $options = []): string {
        $chain = $this->build_chain();
        $lasterr = null;
        foreach ($chain as $entry) {
            if ($this->is_circuit_open($entry['label'])) {
                continue;
            }
            $start = microtime(true);
            try {
                $result = $entry['provider']->chat_completion($systemprompt, $messages, $options);
                $this->record_success($entry['label']);
                $this->lastused = $entry['provider'];
                return $result;
            } catch (\Throwable $e) {
                $this->open_circuit($entry['label'], $e);
                $this->audit_fallthrough($entry, (string) $e->getMessage(), microtime(true) - $start);
                $lasterr = $e;
            }
        }
        throw $lasterr ?? new \moodle_exception('chat:error_notconfigured', 'local_ai_course_assistant');
    }

    /**
     * Streaming chat completion. Falls through to the next provider only if
     * the current one errors BEFORE emitting its first token. Once tokens are
     * arriving, errors propagate to the caller (the user already saw output
     * and switching mid-stream produces a worse experience than failing).
     *
     * @param string $systemprompt
     * @param array $messages
     * @param callable $callback
     * @param array $options
     * @throws \Throwable If every provider in the chain fails before first token.
     */
    public function chat_completion_stream(string $systemprompt, array $messages, callable $callback, array $options = []): void {
        $chain = $this->build_chain();
        $lasterr = null;
        foreach ($chain as $entry) {
            if ($this->is_circuit_open($entry['label'])) {
                continue;
            }
            $firsttokenreceived = false;
            $wrappedcb = function (string $chunk) use ($callback, &$firsttokenreceived) {
                $firsttokenreceived = true;
                $callback($chunk);
            };
            $start = microtime(true);
            try {
                $entry['provider']->chat_completion_stream($systemprompt, $messages, $wrappedcb, $options);
                if (!$firsttokenreceived) {
                    throw new \moodle_exception('error', 'local_ai_course_assistant', '',
                        'No tokens received from ' . $entry['label']);
                }
                $this->record_success($entry['label']);
                $this->lastused = $entry['provider'];
                return;
            } catch (\Throwable $e) {
                if ($firsttokenreceived) {
                    // Streaming had started; user already saw output.
                    // Don't fall through. Surface the error.
                    $this->lastused = $entry['provider'];
                    throw $e;
                }
                $this->open_circuit($entry['label'], $e);
                $this->audit_fallthrough($entry, (string) $e->getMessage(), microtime(true) - $start);
                $lasterr = $e;
            }
        }
        throw $lasterr ?? new \moodle_exception('chat:error_notconfigured', 'local_ai_course_assistant');
    }

    /**
     * Token usage from the provider that actually served the most recent
     * call. Returns null if no call has been made or the serving provider
     * doesn't report usage.
     *
     * @return array|null
     */
    public function get_last_token_usage(): ?array {
        return $this->lastused?->get_last_token_usage();
    }

    /**
     * Build the full chain ordered (primary first, then fallbacks).
     *
     * @return array<int, array{provider: provider_interface, label: string}>
     */
    private function build_chain(): array {
        $head = [['provider' => $this->primary, 'label' => $this->primarylabel]];
        return array_merge($head, $this->fallbacks);
    }

    /**
     * Check whether a circuit is currently open against the given label.
     * Open == cache hit AND opened_at is within the back-off window.
     *
     * @param string $label
     * @return bool
     */
    private function is_circuit_open(string $label): bool {
        $cache = \cache::make('local_ai_course_assistant', 'failover_circuit');
        $entry = $cache->get('label_' . $label);
        if (!is_array($entry) || empty($entry['opened_at'])) {
            return false;
        }
        // TTL is 900s on the cache; a hit here means the back-off is still in effect.
        return true;
    }

    /**
     * Open the circuit for a label. Stores the opened-at timestamp plus
     * the error class so the audit row can describe what tripped it.
     *
     * @param string $label
     * @param \Throwable $error
     */
    private function open_circuit(string $label, \Throwable $error): void {
        $cache = \cache::make('local_ai_course_assistant', 'failover_circuit');
        $cache->set('label_' . $label, [
            'opened_at' => time(),
            'error'     => get_class($error),
        ]);
        if (!empty($this->options['audit'])) {
            try {
                audit_logger::log(
                    self::AUDIT_EVENT_CIRCUIT_OPEN,
                    (int) $this->options['userid'],
                    (int) $this->options['courseid'],
                    [
                        'label'      => $label,
                        'error_class' => get_class($error),
                    ]
                );
            } catch (\Throwable $ignore) {
                // Audit must never break the chain.
            }
        }
    }

    /**
     * Record a successful call. Currently a no-op for the circuit cache
     * because Moodle MUC doesn't expose a "decrement and close on N hits"
     * primitive that would let us implement the three-consecutive-successes
     * closing rule without a race. The 900s TTL on the open-circuit entry
     * is the floor on how long a label stays open; in practice this means
     * an opened circuit stays open for the full 15-minute window, then is
     * tried again on the next call.
     *
     * Leaving the hook here so a future iteration can use a counter table
     * for fine-grained recovery.
     *
     * @param string $label
     */
    private function record_success(string $label): void {
        // Reserved for future fine-grained recovery. Today: rely on the
        // cache TTL to close the circuit.
    }

    /**
     * Emit the audit row for a fall-through event.
     *
     * @param array{provider: provider_interface, label: string} $failed
     * @param string $reason
     * @param float $elapsedseconds
     */
    private function audit_fallthrough(array $failed, string $reason, float $elapsedseconds): void {
        if (empty($this->options['audit'])) {
            return;
        }
        try {
            audit_logger::log(
                self::AUDIT_EVENT_FALLTHROUGH,
                (int) $this->options['userid'],
                (int) $this->options['courseid'],
                [
                    'failed_label' => $failed['label'],
                    'primary'      => $this->primarylabel,
                    'reason'       => mb_substr($reason, 0, 500),
                    'latency_ms'   => (int) round($elapsedseconds * 1000),
                ]
            );
        } catch (\Throwable $ignore) {
            // Audit must never break the chain.
        }
    }
}
