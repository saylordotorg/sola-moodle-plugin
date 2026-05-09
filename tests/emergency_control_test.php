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
 * Tests for the v5.4.5 emergency-disable kill switch.
 *
 * The disable / restore round-trip is the production safety surface for
 * the entire incident-response runbook. These tests pin every flag's
 * effect on the corresponding config keys, the audit-row contract, and
 * the voice / chat backup-and-restore path so a regression here cannot
 * silently make the kill-switch ineffective.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_ai_course_assistant\emergency_control
 */
final class emergency_control_test extends \advanced_testcase {

    public function test_full_kill_disables_master_switch(): void {
        $this->resetAfterTest();
        set_config('enabled', '1', 'local_ai_course_assistant');

        emergency_control::disable([emergency_control::FLAG_ALL], 'unit test', 'test');

        $this->assertEquals('0', get_config('local_ai_course_assistant', 'enabled'));
    }

    public function test_full_kill_disables_rag_and_outreach(): void {
        $this->resetAfterTest();
        set_config('rag_enabled', '1', 'local_ai_course_assistant');
        set_config('rag_auto_reindex_drifted', '1', 'local_ai_course_assistant');
        set_config('outreach_master_enabled', '1', 'local_ai_course_assistant');

        emergency_control::disable([emergency_control::FLAG_ALL], '', 'test');

        $this->assertEquals('0', get_config('local_ai_course_assistant', 'rag_enabled'));
        $this->assertEquals('0', get_config('local_ai_course_assistant', 'rag_auto_reindex_drifted'));
        $this->assertEquals('0', get_config('local_ai_course_assistant', 'outreach_master_enabled'));
    }

    public function test_voice_kill_stashes_active_realtime_then_clears_it(): void {
        $this->resetAfterTest();
        set_config('voice_active_realtime', 'MyOpenAIVoice', 'local_ai_course_assistant');

        emergency_control::disable([emergency_control::FLAG_VOICE], '', 'test');

        $this->assertEquals('', get_config('local_ai_course_assistant', 'voice_active_realtime'));
        $this->assertEquals('MyOpenAIVoice',
            get_config('local_ai_course_assistant', 'voice_active_realtime_backup'));
    }

    public function test_voice_restore_round_trips_to_original_value(): void {
        $this->resetAfterTest();
        set_config('voice_active_realtime', 'MyOpenAIVoice', 'local_ai_course_assistant');

        emergency_control::disable([emergency_control::FLAG_VOICE], '', 'test');
        $this->assertEquals('', get_config('local_ai_course_assistant', 'voice_active_realtime'));

        emergency_control::restore([emergency_control::FLAG_VOICE], '', 'test');
        $this->assertEquals('MyOpenAIVoice',
            get_config('local_ai_course_assistant', 'voice_active_realtime'),
            'restore must put the stashed voice provider back exactly.');
        $this->assertFalse(get_config('local_ai_course_assistant', 'voice_active_realtime_backup'),
            'backup row must be cleaned up after restore.');
    }

    public function test_chat_kill_uses_spend_cap_zero(): void {
        $this->resetAfterTest();
        set_config('spend_cap_site', '500', 'local_ai_course_assistant');

        emergency_control::disable([emergency_control::FLAG_CHAT], '', 'test');

        $this->assertEquals('0', get_config('local_ai_course_assistant', 'spend_cap_site'),
            'chat-only kill sets spend_cap_site to 0 so existing budget-paused path fires.');
        $this->assertEquals('500',
            get_config('local_ai_course_assistant', 'spend_cap_site_backup'));
    }

    public function test_chat_restore_round_trips_spend_cap(): void {
        $this->resetAfterTest();
        set_config('spend_cap_site', '500', 'local_ai_course_assistant');

        emergency_control::disable([emergency_control::FLAG_CHAT], '', 'test');
        emergency_control::restore([emergency_control::FLAG_CHAT], '', 'test');

        $this->assertEquals('500', get_config('local_ai_course_assistant', 'spend_cap_site'));
        $this->assertFalse(get_config('local_ai_course_assistant', 'spend_cap_site_backup'));
    }

    public function test_disable_writes_audit_row_with_reason_and_invoker(): void {
        $this->resetAfterTest();
        global $DB;

        emergency_control::disable(
            [emergency_control::FLAG_VOICE],
            'provider returning 401',
            'test'
        );

        $row = $DB->get_record_select('local_ai_course_assistant_audit',
            "action = 'emergency_disable'", []);
        $this->assertNotFalse($row, 'disable() must write an emergency_disable audit row.');
        $details = json_decode($row->details, true);
        $this->assertEquals('provider returning 401', $details['reason']);
        $this->assertEquals('test', $details['invoked_by']);
        $this->assertContains('voice', $details['flags']);
    }

    public function test_restore_writes_separate_audit_row(): void {
        $this->resetAfterTest();
        global $DB;
        emergency_control::disable([emergency_control::FLAG_ALL], '', 'test');
        emergency_control::restore([emergency_control::FLAG_ALL], '', 'test');

        $count = $DB->count_records_select('local_ai_course_assistant_audit',
            "action LIKE 'emergency_%'");
        $this->assertEquals(2, $count,
            'disable + restore must produce exactly 2 audit rows (emergency_disable + emergency_restore).');
    }

    public function test_unknown_flags_are_ignored(): void {
        $this->resetAfterTest();
        set_config('enabled', '1', 'local_ai_course_assistant');
        // Garbage flag should not change anything; valid flags still apply.
        emergency_control::disable(['nonsense', emergency_control::FLAG_ALL], '', 'test');

        $this->assertEquals('0', get_config('local_ai_course_assistant', 'enabled'));
    }

    public function test_subsystem_flags_do_not_touch_master_enabled(): void {
        $this->resetAfterTest();
        set_config('enabled', '1', 'local_ai_course_assistant');

        // Disabling RAG should NOT flip the master switch; the chat widget
        // keeps rendering, only RAG retrieval stops.
        emergency_control::disable([emergency_control::FLAG_RAG], '', 'test');

        $this->assertEquals('1', get_config('local_ai_course_assistant', 'enabled'));
        $this->assertEquals('0', get_config('local_ai_course_assistant', 'rag_enabled'));
    }
}
