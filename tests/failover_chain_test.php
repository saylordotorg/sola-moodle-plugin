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
 * Tests for the v5.5.0 per-call failover chain decorator.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_ai_course_assistant\provider\failover_chain
 */
final class failover_chain_test extends \advanced_testcase {

    /**
     * Primary succeeds: fallback is never invoked, returned text comes from primary.
     */
    public function test_primary_success_short_circuits_chain(): void {
        $this->resetAfterTest();
        $primary = self::fake_provider('PRIMARY-OUT', false);
        $fallback = self::fake_provider('FALLBACK-OUT', false);
        $chain = new failover_chain($primary, 'primary-label', [
            ['provider' => $fallback, 'label' => 'fallback-label'],
        ]);
        $result = $chain->chat_completion('sys', [['role' => 'user', 'content' => 'hi']]);
        $this->assertEquals('PRIMARY-OUT', $result);
        $this->assertEquals(0, $fallback->callcount);
    }

    /**
     * Primary throws: fallback is invoked, returned text comes from fallback,
     * and an audit row is written.
     */
    public function test_primary_failure_falls_over_to_fallback_and_audits(): void {
        global $DB;
        $this->resetAfterTest();
        $primary = self::fake_provider('PRIMARY-OUT', true);
        $fallback = self::fake_provider('FALLBACK-OUT', false);
        $chain = new failover_chain($primary, 'primary-label', [
            ['provider' => $fallback, 'label' => 'fallback-label'],
        ], ['audit' => true, 'courseid' => 0, 'userid' => 0]);

        $beforecount = $DB->count_records('local_ai_course_assistant_audit',
            ['action' => failover_chain::AUDIT_EVENT_FALLTHROUGH]);

        $result = $chain->chat_completion('sys', [['role' => 'user', 'content' => 'hi']]);

        $this->assertEquals('FALLBACK-OUT', $result);
        $this->assertEquals(1, $primary->callcount);
        $this->assertEquals(1, $fallback->callcount);

        $aftercount = $DB->count_records('local_ai_course_assistant_audit',
            ['action' => failover_chain::AUDIT_EVENT_FALLTHROUGH]);
        $this->assertEquals($beforecount + 1, $aftercount,
            'Expected exactly one failover_fallthrough audit row to be written.');
    }

    /**
     * All entries fail: the last exception propagates out.
     */
    public function test_all_paths_fail_propagates_last_error(): void {
        $this->resetAfterTest();
        $primary = self::fake_provider('PRIMARY-OUT', true);
        $fallback = self::fake_provider('FALLBACK-OUT', true);
        $chain = new failover_chain($primary, 'primary-label', [
            ['provider' => $fallback, 'label' => 'fallback-label'],
        ]);
        $this->expectException(\Throwable::class);
        $chain->chat_completion('sys', [['role' => 'user', 'content' => 'hi']]);
    }

    /**
     * After a failure, the failing provider's circuit is open and subsequent
     * calls skip it (no second call against the failing primary).
     */
    public function test_circuit_open_skips_failing_primary_on_next_call(): void {
        $this->resetAfterTest();
        $primary = self::fake_provider('PRIMARY-OUT', true);
        $fallback = self::fake_provider('FALLBACK-OUT', false);
        $chain = new failover_chain($primary, 'circuit-test-primary', [
            ['provider' => $fallback, 'label' => 'circuit-test-fallback'],
        ]);
        // First call opens the circuit on the primary.
        $chain->chat_completion('sys', [['role' => 'user', 'content' => 'hi']]);
        $this->assertEquals(1, $primary->callcount);
        // Second call should skip the primary (circuit open) and go straight to fallback.
        $result = $chain->chat_completion('sys', [['role' => 'user', 'content' => 'hi again']]);
        $this->assertEquals('FALLBACK-OUT', $result);
        $this->assertEquals(1, $primary->callcount,
            'Primary should NOT have been called a second time while its circuit is open.');
        $this->assertEquals(2, $fallback->callcount);
    }

    /**
     * Streaming: primary emits first token, then errors mid-stream.
     * The error must propagate (no fall-through) so the user's partial
     * response stays coherent.
     */
    public function test_stream_post_first_token_error_does_not_fall_over(): void {
        $this->resetAfterTest();
        $primary = self::fake_streaming_provider(['hello'], true);
        $fallback = self::fake_streaming_provider(['fallback-text'], false);
        $chain = new failover_chain($primary, 'stream-primary', [
            ['provider' => $fallback, 'label' => 'stream-fallback'],
        ]);
        $captured = [];
        try {
            $chain->chat_completion_stream('sys', [['role' => 'user', 'content' => 'hi']],
                function (string $chunk) use (&$captured) {
                    $captured[] = $chunk;
                });
            $this->fail('Expected an exception to propagate after mid-stream failure.');
        } catch (\Throwable $e) {
            $this->assertEquals(['hello'], $captured,
                'Expected the first chunk from the primary to have been delivered before the failure.');
            $this->assertEquals(0, $fallback->callcount,
                'Fallback must NOT be invoked when streaming has already started.');
        }
    }

    /**
     * Build an in-memory provider_interface implementation for tests.
     * If $shouldfail is true, every chat_completion call throws.
     *
     * @param string $output Returned by chat_completion on success.
     * @param bool $shouldfail
     * @return object Anonymous class implementing provider_interface with a public $callcount.
     */
    private static function fake_provider(string $output, bool $shouldfail): object {
        return new class($output, $shouldfail) implements provider_interface {
            public int $callcount = 0;
            public function __construct(private string $output, private bool $shouldfail) {}
            public function chat_completion(string $systemprompt, array $messages, array $options = []): string {
                $this->callcount++;
                if ($this->shouldfail) {
                    throw new \moodle_exception('error', 'local_ai_course_assistant', '', 'fake failure');
                }
                return $this->output;
            }
            public function chat_completion_stream(string $systemprompt, array $messages, callable $cb, array $options = []): void {
                $this->callcount++;
                if ($this->shouldfail) {
                    throw new \moodle_exception('error', 'local_ai_course_assistant', '', 'fake stream failure');
                }
                $cb($this->output);
            }
            public function get_last_token_usage(): ?array {
                return null;
            }
        };
    }

    /**
     * Build an in-memory streaming provider. Emits each chunk in $chunks
     * in order. If $failafterfirst is true, throws after the first chunk.
     *
     * @param array $chunks
     * @param bool $failafterfirst
     * @return object
     */
    private static function fake_streaming_provider(array $chunks, bool $failafterfirst): object {
        return new class($chunks, $failafterfirst) implements provider_interface {
            public int $callcount = 0;
            public function __construct(private array $chunks, private bool $failafterfirst) {}
            public function chat_completion(string $systemprompt, array $messages, array $options = []): string {
                $this->callcount++;
                return implode('', $this->chunks);
            }
            public function chat_completion_stream(string $systemprompt, array $messages, callable $cb, array $options = []): void {
                $this->callcount++;
                $first = true;
                foreach ($this->chunks as $chunk) {
                    $cb($chunk);
                    if ($first && $this->failafterfirst) {
                        throw new \moodle_exception('error', 'local_ai_course_assistant', '', 'stream error post-first-token');
                    }
                    $first = false;
                }
            }
            public function get_last_token_usage(): ?array {
                return null;
            }
        };
    }
}
