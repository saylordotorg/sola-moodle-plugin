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

use local_ai_course_assistant\provider\stub_provider;

/**
 * Tests for provider_benchmark (v5.4.4).
 *
 * The stub provider stands in for every chat path so PHPUnit doesn't
 * burn real API calls. Tests pin the contract: list_chat_providers,
 * recommend(), run_chat / run_analytics happy paths, single-provider
 * fallback, and the JSON / CSV / Markdown / text exports.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_ai_course_assistant\provider_benchmark
 */
final class provider_benchmark_test extends \advanced_testcase {

    private function setup_stub_primary(): void {
        stub_provider::reset();
        set_config('provider', 'stub', 'local_ai_course_assistant');
        set_config('apikey', 'stub-key', 'local_ai_course_assistant');
        set_config('model', 'stub-model', 'local_ai_course_assistant');
    }

    public function test_list_chat_providers_returns_primary_first(): void {
        $this->resetAfterTest();
        $this->setup_stub_primary();
        // No comparison_providers row.
        $providers = provider_benchmark::list_chat_providers();
        $this->assertNotEmpty($providers);
        $this->assertEquals('stub', $providers[0]['id']);
        $this->assertTrue($providers[0]['is_primary']);
    }

    public function test_list_chat_providers_includes_comparison_rows(): void {
        $this->resetAfterTest();
        $this->setup_stub_primary();
        // Comparison config: one extra (fake) provider line. The benchmark
        // never actually instantiates this in the test (we filter to stub
        // before run_*), but list_chat_providers must surface it.
        set_config('comparison_providers',
            "claude|sk-claude-test|claude-3-5-sonnet|0.7\nopenai|sk-openai-test|gpt-4o-mini|0.7",
            'local_ai_course_assistant');
        $providers = provider_benchmark::list_chat_providers();
        $ids = array_column($providers, 'id');
        $this->assertContains('stub', $ids);
        $this->assertContains('claude', $ids);
        $this->assertContains('openai', $ids);
    }

    public function test_run_chat_runs_each_prompt_against_primary(): void {
        $this->resetAfterTest();
        $this->setup_stub_primary();

        $r = provider_benchmark::run_chat();

        $this->assertNotEmpty($r['providers']);
        $this->assertCount(count(provider_benchmark::CHAT_PROMPTS), $r['results']);
        foreach ($r['results'] as $row) {
            $this->assertEquals('stub', $row['provider']);
            $this->assertTrue($row['ok'], 'stub provider must complete every prompt');
            $this->assertNotEmpty($row['response_excerpt']);
        }
    }

    public function test_run_analytics_runs_each_prompt(): void {
        $this->resetAfterTest();
        $this->setup_stub_primary();

        $r = provider_benchmark::run_analytics();

        $this->assertCount(count(provider_benchmark::ANALYTICS_PROMPTS), $r['results']);
        foreach ($r['results'] as $row) {
            $this->assertTrue($row['ok']);
        }
    }

    public function test_run_chat_records_latency_for_every_prompt(): void {
        $this->resetAfterTest();
        $this->setup_stub_primary();

        $r = provider_benchmark::run_chat();

        foreach ($r['results'] as $row) {
            $this->assertGreaterThanOrEqual(0, (int) $row['latency_ms']);
        }
    }

    public function test_run_chat_returns_note_when_no_provider_configured(): void {
        $this->resetAfterTest();
        unset_config('provider', 'local_ai_course_assistant');
        unset_config('comparison_providers', 'local_ai_course_assistant');

        $r = provider_benchmark::run_chat();

        $this->assertEmpty($r['providers']);
        $this->assertEmpty($r['results']);
        $this->assertNull($r['recommendation']);
        $this->assertStringContainsString('No chat provider', $r['note']);
    }

    public function test_recommend_returns_single_provider_message_when_only_one(): void {
        $rows = [
            ['provider' => 'stub', 'model' => 'stub-model', 'ok' => true,
             'cost_usd' => 0.01, 'latency_ms' => 100, 'prompt_tokens' => 50, 'completion_tokens' => 25,
             'prompt_label' => 'a'],
            ['provider' => 'stub', 'model' => 'stub-model', 'ok' => true,
             'cost_usd' => 0.02, 'latency_ms' => 110, 'prompt_tokens' => 50, 'completion_tokens' => 25,
             'prompt_label' => 'b'],
        ];
        $rec = provider_benchmark::recommend($rows, 2);
        $this->assertNotNull($rec);
        $this->assertEquals('stub', $rec['provider']);
        $this->assertStringContainsString('Only provider that completed', $rec['reason']);
    }

    public function test_recommend_picks_lowest_cost_among_eligible(): void {
        $rows = [
            // Provider A: cheap
            ['provider' => 'a', 'model' => 'a-1', 'ok' => true, 'cost_usd' => 0.001,
             'latency_ms' => 200, 'prompt_label' => 'p1', 'prompt_tokens' => 0, 'completion_tokens' => 0],
            ['provider' => 'a', 'model' => 'a-1', 'ok' => true, 'cost_usd' => 0.001,
             'latency_ms' => 200, 'prompt_label' => 'p2', 'prompt_tokens' => 0, 'completion_tokens' => 0],
            // Provider B: more expensive
            ['provider' => 'b', 'model' => 'b-1', 'ok' => true, 'cost_usd' => 0.010,
             'latency_ms' => 100, 'prompt_label' => 'p1', 'prompt_tokens' => 0, 'completion_tokens' => 0],
            ['provider' => 'b', 'model' => 'b-1', 'ok' => true, 'cost_usd' => 0.010,
             'latency_ms' => 100, 'prompt_label' => 'p2', 'prompt_tokens' => 0, 'completion_tokens' => 0],
        ];
        $rec = provider_benchmark::recommend($rows, 2);
        $this->assertEquals('a', $rec['provider']);
        $this->assertStringContainsString('Lowest total cost', $rec['reason']);
    }

    public function test_recommend_excludes_providers_that_did_not_complete_every_prompt(): void {
        $rows = [
            // Provider A: completes both
            ['provider' => 'a', 'model' => 'a-1', 'ok' => true, 'cost_usd' => 0.010,
             'latency_ms' => 200, 'prompt_label' => 'p1', 'prompt_tokens' => 0, 'completion_tokens' => 0],
            ['provider' => 'a', 'model' => 'a-1', 'ok' => true, 'cost_usd' => 0.010,
             'latency_ms' => 200, 'prompt_label' => 'p2', 'prompt_tokens' => 0, 'completion_tokens' => 0],
            // Provider B: cheaper but failed one
            ['provider' => 'b', 'model' => 'b-1', 'ok' => true, 'cost_usd' => 0.001,
             'latency_ms' => 100, 'prompt_label' => 'p1', 'prompt_tokens' => 0, 'completion_tokens' => 0],
            ['provider' => 'b', 'model' => 'b-1', 'ok' => false, 'cost_usd' => null,
             'latency_ms' => 100, 'prompt_label' => 'p2', 'prompt_tokens' => 0, 'completion_tokens' => 0,
             'error' => 'rate limited'],
        ];
        $rec = provider_benchmark::recommend($rows, 2);
        $this->assertNotNull($rec);
        $this->assertEquals('a', $rec['provider'],
            'Provider B was cheaper but did not complete every prompt — must be excluded.');
    }

    public function test_recommend_returns_null_when_zero_providers_complete(): void {
        $rows = [
            ['provider' => 'a', 'model' => 'a-1', 'ok' => false, 'cost_usd' => null,
             'latency_ms' => 100, 'prompt_label' => 'p1', 'prompt_tokens' => 0, 'completion_tokens' => 0,
             'error' => 'auth failed'],
        ];
        $this->assertNull(provider_benchmark::recommend($rows, 1));
    }

    // ───────────────────────────────────────────────────────────
    // Exports
    // ───────────────────────────────────────────────────────────

    public function test_export_json_round_trips_through_decode(): void {
        $this->resetAfterTest();
        $this->setup_stub_primary();
        $payload = provider_benchmark::run_all();
        $json = provider_benchmark::export_json($payload);
        $decoded = json_decode($json, true);
        $this->assertIsArray($decoded);
        $this->assertArrayHasKey('chat', $decoded);
        $this->assertArrayHasKey('analytics', $decoded);
        $this->assertArrayHasKey('voice', $decoded);
        $this->assertArrayHasKey('rag', $decoded);
        $this->assertArrayHasKey('generated_at', $decoded);
    }

    public function test_export_csv_includes_header_and_data_rows(): void {
        $this->resetAfterTest();
        $this->setup_stub_primary();
        $payload = provider_benchmark::run_all();
        $csv = provider_benchmark::export_csv($payload);
        $this->assertStringContainsString(
            'capability,provider,model,prompt_label,ok,prompt_tokens,completion_tokens,cost_usd,latency_ms',
            $csv);
        // Should include at least one chat data row.
        $this->assertStringContainsString('chat,stub,', $csv);
        // Recommendation summary block.
        $this->assertStringContainsString('# Recommendations', $csv);
    }

    public function test_export_markdown_includes_section_headers(): void {
        $this->resetAfterTest();
        $this->setup_stub_primary();
        $payload = provider_benchmark::run_all();
        $md = provider_benchmark::export_markdown($payload);
        $this->assertStringContainsString('Provider Benchmark', $md);
        $this->assertStringContainsString('## Chat', $md);
        $this->assertStringContainsString('## Analytics', $md);
        $this->assertStringContainsString('## RAG', $md);
        $this->assertStringContainsString('## Voice', $md);
    }

    public function test_export_text_strips_markdown_markers(): void {
        $this->resetAfterTest();
        $this->setup_stub_primary();
        $payload = provider_benchmark::run_all();
        $text = provider_benchmark::export_text($payload);
        $this->assertStringNotContainsString('|---', $text);
        $this->assertStringNotContainsString('**', $text);
        // Still contains the recognisable section headers as plain lines.
        $this->assertStringContainsString('Chat', $text);
    }
}
