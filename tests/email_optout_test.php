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
 * Tests for email_optout + email_footer (v5.4.3).
 *
 * Covers the storage layer (record / is_opted_out / clear), the HMAC
 * token mint+verify lifecycle, and the footer string composition.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_ai_course_assistant\email_optout
 * @covers     \local_ai_course_assistant\email_footer
 */
final class email_optout_test extends \advanced_testcase {

    // ───────────────────────────────────────────────────────────
    // Storage
    // ───────────────────────────────────────────────────────────

    public function test_is_opted_out_returns_false_for_unknown_pair(): void {
        $this->resetAfterTest();
        $this->assertFalse(email_optout::is_opted_out('a@example.com',
            email_optout::TYPE_LEARNING_RADAR));
    }

    public function test_record_then_is_opted_out_returns_true(): void {
        $this->resetAfterTest();
        email_optout::record('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        $this->assertTrue(email_optout::is_opted_out('a@example.com',
            email_optout::TYPE_LEARNING_RADAR));
    }

    public function test_record_is_idempotent_on_duplicate(): void {
        $this->resetAfterTest();
        global $DB;
        email_optout::record('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        // Second record call must not throw on the unique index.
        email_optout::record('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        $this->assertEquals(1, $DB->count_records('local_ai_course_assistant_email_optout',
            ['email' => 'a@example.com']));
    }

    public function test_record_normalizes_case_and_whitespace(): void {
        $this->resetAfterTest();
        email_optout::record('  Person@EXAMPLE.com  ', email_optout::TYPE_LEARNING_RADAR);
        $this->assertTrue(email_optout::is_opted_out('person@example.com',
            email_optout::TYPE_LEARNING_RADAR));
        $this->assertTrue(email_optout::is_opted_out('PERSON@example.com',
            email_optout::TYPE_LEARNING_RADAR));
    }

    public function test_optout_is_per_type(): void {
        $this->resetAfterTest();
        email_optout::record('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        // Same email, different type — should NOT count as opted out.
        $this->assertTrue(email_optout::is_opted_out('a@example.com',
            email_optout::TYPE_LEARNING_RADAR));
        $this->assertFalse(email_optout::is_opted_out('a@example.com',
            email_optout::TYPE_ANOMALY_DIGEST));
    }

    public function test_clear_removes_optout(): void {
        $this->resetAfterTest();
        email_optout::record('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        $this->assertTrue(email_optout::is_opted_out('a@example.com',
            email_optout::TYPE_LEARNING_RADAR));
        email_optout::clear('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        $this->assertFalse(email_optout::is_opted_out('a@example.com',
            email_optout::TYPE_LEARNING_RADAR));
    }

    public function test_record_with_empty_email_or_type_is_a_noop(): void {
        $this->resetAfterTest();
        global $DB;
        email_optout::record('', email_optout::TYPE_LEARNING_RADAR);
        email_optout::record('a@example.com', '');
        $this->assertEquals(0, $DB->count_records('local_ai_course_assistant_email_optout'));
    }

    // ───────────────────────────────────────────────────────────
    // Token mint + verify
    // ───────────────────────────────────────────────────────────

    public function test_mint_then_verify_round_trips_email_and_type(): void {
        $this->resetAfterTest();
        $token = email_optout::mint_token('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        $verified = email_optout::verify_token($token);
        $this->assertNotNull($verified);
        $this->assertEquals('a@example.com', $verified['email']);
        $this->assertEquals(email_optout::TYPE_LEARNING_RADAR, $verified['type']);
    }

    public function test_verify_rejects_tampered_signature(): void {
        $this->resetAfterTest();
        $token = email_optout::mint_token('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        // Flip a character in the signature half.
        $parts = explode('.', $token);
        $parts[1] = strtolower($parts[1]) . 'x';
        $tampered = $parts[0] . '.' . $parts[1];
        $this->assertNull(email_optout::verify_token($tampered));
    }

    public function test_verify_rejects_expired_token(): void {
        $this->resetAfterTest();
        // ttl = -1 second mints an already-expired token.
        $token = email_optout::mint_token('a@example.com',
            email_optout::TYPE_LEARNING_RADAR, -1);
        $this->assertNull(email_optout::verify_token($token));
    }

    public function test_verify_rejects_malformed_token(): void {
        $this->resetAfterTest();
        $this->assertNull(email_optout::verify_token(''));
        $this->assertNull(email_optout::verify_token('not.a.valid.token'));
        $this->assertNull(email_optout::verify_token('only-one-segment'));
    }

    public function test_url_includes_signed_token(): void {
        $this->resetAfterTest();
        $url = email_optout::url('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        $this->assertStringContainsString('email_unsubscribe.php', $url);
        $this->assertStringContainsString('token=', $url);
    }

    // ───────────────────────────────────────────────────────────
    // email_footer
    // ───────────────────────────────────────────────────────────

    public function test_text_footer_includes_unsubscribe_url_and_call_to_action(): void {
        $this->resetAfterTest();
        $footer = email_footer::text('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        $this->assertStringContainsString('email_unsubscribe.php', $footer);
        $this->assertStringContainsString('token=', $footer);
        // The call-to-action wording is fixed regardless of the configured
        // brand name (which an admin may override site-wide).
        $this->assertStringContainsString('sent this email', $footer);
        $this->assertStringContainsString('stop receiving', $footer);
    }

    public function test_text_footer_includes_optional_reason_line(): void {
        $this->resetAfterTest();
        $footer = email_footer::text('a@example.com',
            email_optout::TYPE_LEARNING_RADAR,
            'You are on the test list.');
        $this->assertStringContainsString('You are on the test list.', $footer);
    }

    public function test_html_footer_renders_anchor_tag(): void {
        $this->resetAfterTest();
        $html = email_footer::html('a@example.com', email_optout::TYPE_LEARNING_RADAR);
        $this->assertStringContainsString('<a href="', $html);
        $this->assertStringContainsString('email_unsubscribe.php', $html);
        $this->assertStringContainsString('Unsubscribe', $html);
    }

    public function test_append_text_concatenates_to_existing_body(): void {
        $this->resetAfterTest();
        $original = 'Daily report.';
        $combined = email_footer::append_text($original, 'a@example.com',
            email_optout::TYPE_ANOMALY_DIGEST);
        $this->assertStringStartsWith('Daily report.', $combined);
        $this->assertStringContainsString('email_unsubscribe.php', $combined);
    }

    public function test_round_trip_token_in_footer_resolves_to_same_email_type(): void {
        $this->resetAfterTest();
        // The end-to-end contract: footer URL + verify_token round-trip
        // must yield the same (email, type) the footer was built from.
        $email = 'desk@example.com';
        $type = email_optout::TYPE_INTEGRITY_REPORT;
        $footer = email_footer::text($email, $type);
        $this->assertMatchesRegularExpression('/token=([\w.-]+)/', $footer, 'footer must carry token');
        preg_match('/token=([\w.-]+)/', $footer, $m);
        $verified = email_optout::verify_token(urldecode($m[1]));
        $this->assertNotNull($verified);
        $this->assertEquals($email, $verified['email']);
        $this->assertEquals($type, $verified['type']);
    }
}
