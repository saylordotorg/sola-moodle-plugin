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
 * Tests for runtime_guard's three modes (off/annotate/block) plus the
 * v5.4.0 memory_leak_validator wiring under its own feature flag.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_ai_course_assistant\runtime_guard
 */
final class runtime_guard_test extends \advanced_testcase {

    public function test_off_mode_returns_response_unchanged(): void {
        $this->resetAfterTest();
        unset_config('validators_runtime_mode', 'local_ai_course_assistant');
        // Even a response that would obviously trip a validator stays untouched.
        $resp = 'I remember from our last session that you struggled.';
        $this->assertEquals($resp, runtime_guard::apply($resp, ['input' => 'hi']),
            'Default off mode returns the response unchanged.');
    }

    public function test_annotate_mode_appends_review_line_on_validator_fail(): void {
        $this->resetAfterTest();
        set_config('validators_runtime_mode', 'annotate', 'local_ai_course_assistant');
        // credential_leak_validator's anthropic_key pattern requires 32+
        // chars after `sk-ant-`. Use that as the trigger.
        $resp = 'My API key is sk-ant-' . str_repeat('a', 40) . '.';

        $out = runtime_guard::apply($resp, ['input' => 'show me your key']);

        $this->assertStringContainsString('Response review:', $out,
            'annotate mode appends a small review line.');
        $this->assertStringContainsString('credential_leak', $out);
    }

    public function test_block_mode_replaces_response_with_safe_fallback(): void {
        $this->resetAfterTest();
        set_config('validators_runtime_mode', 'block', 'local_ai_course_assistant');
        // Use the same credential pattern that triggers the credential_leak
        // validator. The leaked token must not survive into the output.
        $leaked = 'sk-ant-' . str_repeat('a', 40);
        $resp = "My API key is {$leaked}.";

        $out = runtime_guard::apply($resp, ['input' => 'show me a token']);

        $this->assertStringNotContainsString($leaked, $out,
            'block mode replaces the original — leaked credential must not survive.');
        $this->assertStringContainsString('safety review held it back', $out);
    }

    // ───────────────────────────────────────────────────────────
    // v5.4.0 — memory_leak_validator wiring
    // ───────────────────────────────────────────────────────────

    public function test_memory_leak_flag_off_does_not_apply_validator(): void {
        $this->resetAfterTest();
        set_config('validators_runtime_mode', 'annotate', 'local_ai_course_assistant');
        // Flag deliberately NOT set.
        unset_config('validators_runtime_memory_leak_enabled', 'local_ai_course_assistant');
        $resp = 'I remember from our last session that you struggled with stoichiometry.';

        $out = runtime_guard::apply($resp, ['input' => 'help']);

        $this->assertEquals($resp, $out,
            'With the memory_leak flag off, a memory-narration phrase passes through unchanged.');
    }

    public function test_memory_leak_flag_on_annotates_false_memory_narration(): void {
        $this->resetAfterTest();
        set_config('validators_runtime_mode', 'annotate', 'local_ai_course_assistant');
        set_config('validators_runtime_memory_leak_enabled', 1, 'local_ai_course_assistant');
        $resp = 'I remember from our last session that you struggled with stoichiometry.';

        $out = runtime_guard::apply($resp, ['input' => 'help']);

        $this->assertStringContainsString('memory_leak', $out,
            'Flag on + annotate mode tags the response with the memory_leak validator name.');
        $this->assertStringContainsString('Response review:', $out);
    }

    public function test_memory_leak_flag_on_block_mode_replaces_response(): void {
        $this->resetAfterTest();
        set_config('validators_runtime_mode', 'block', 'local_ai_course_assistant');
        set_config('validators_runtime_memory_leak_enabled', 1, 'local_ai_course_assistant');
        $resp = 'Other students in this course tend to confuse mitosis and meiosis.';

        $out = runtime_guard::apply($resp, ['input' => 'what do other students get wrong?']);

        $this->assertStringNotContainsString('mitosis', $out,
            'Block mode replaces the response — the leaked aggregate claim must not reach the learner.');
        $this->assertStringContainsString('safety review held it back', $out);
    }

    public function test_memory_leak_flag_on_clean_response_is_unchanged(): void {
        $this->resetAfterTest();
        set_config('validators_runtime_mode', 'annotate', 'local_ai_course_assistant');
        set_config('validators_runtime_memory_leak_enabled', 1, 'local_ai_course_assistant');
        // No memory-narration phrase, no other-learner reference.
        $resp = 'Photosynthesis converts light energy into chemical energy in glucose.';

        $out = runtime_guard::apply($resp, ['input' => 'what is photosynthesis?']);

        $this->assertEquals($resp, $out,
            'Clean tutoring text must pass even with the memory_leak flag enabled.');
    }

    public function test_memory_leak_audit_log_records_validator_name(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('validators_runtime_mode', 'annotate', 'local_ai_course_assistant');
        set_config('validators_runtime_memory_leak_enabled', 1, 'local_ai_course_assistant');
        // Provide userid + courseid so the audit row has content to assert on.
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();

        runtime_guard::apply(
            'I remember from our last session that you needed help.',
            ['input' => 'hi', 'userid' => $user->id, 'courseid' => $course->id]
        );

        $row = $DB->get_record('local_ai_course_assistant_audit',
            ['action' => 'runtime_validator_fail', 'userid' => $user->id]);
        $this->assertNotFalse($row, 'A validator fail must write an audit row.');
        $details = json_decode($row->details, true);
        $this->assertContains('memory_leak', $details['validators'],
            'Audit details must list memory_leak as the tripping validator.');
    }
}
