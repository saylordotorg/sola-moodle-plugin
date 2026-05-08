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

use local_ai_course_assistant\external\get_realtime_token;

/**
 * Contract tests for get_realtime_token (v5.3.36).
 *
 * Until this release, the only LLM-calling external service without
 * unit-test coverage was get_realtime_token. It bypasses the chat
 * provider abstraction and hits OpenAI's REST endpoint directly (or
 * mints a JWT for the xAI proxy path). This test file covers the
 * code paths that DON'T require an upstream network call:
 *
 *   - capability rejection for unenrolled users
 *   - voice provider missing => exception
 *   - xAI happy path: JWT minting, return shape, instructions non-empty
 *   - xAI proxy not configured => exception
 *   - xAI URL fails SSRF allowlist => exception
 *   - clean_returnvalue round-trip
 *
 * The OpenAI happy path requires a real API key and is left for future
 * work — a curl mock layer is the right tool there, not a fixture.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class realtime_token_test extends \advanced_testcase {

    /**
     * Wire up an xAI voice provider as the active realtime provider, with
     * the proxy URL + JWT secret needed for the xAI mint path.
     */
    private function configure_xai_voice(): void {
        // Format: provider|apikey|label|realtime_voice|tts_voice
        set_config('voice_providers',
            "xai|sk-xai-test|MyXai|alloy|alloy",
            'local_ai_course_assistant');
        set_config('voice_active_realtime', 'MyXai', 'local_ai_course_assistant');
        set_config('xai_proxy_url', 'wss://proxy.example.com/realtime',
            'local_ai_course_assistant');
        set_config('xai_proxy_jwt_secret', str_repeat('a', 64),
            'local_ai_course_assistant');
        // Allow proxy.example.com via the admin-managed SSRF trusted-endpoints
        // allowlist — the host wouldn't resolve via DNS in CI.
        set_config('ssrf_trusted_endpoints', 'https://proxy.example.com',
            'local_ai_course_assistant');
    }

    /**
     * Common: enrolled student + setUser, returns the course/user pair.
     *
     * @return array{0: \stdClass, 1: \stdClass}
     */
    private function enrolled_student(): array {
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $this->getDataGenerator()->enrol_user($user->id, $course->id, 'student');
        $this->setUser($user);
        return [$course, $user];
    }

    public function test_unenrolled_user_is_rejected(): void {
        $this->resetAfterTest();
        $this->configure_xai_voice();
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        // Not enrolled — capability check (or the require_login that runs
        // first inside validate_context) must reject. Both extend
        // moodle_exception; assert against the parent for robustness.
        $this->setUser($user);

        $this->expectException(\moodle_exception::class);
        get_realtime_token::execute((int)$course->id);
    }

    public function test_no_voice_provider_throws(): void {
        $this->resetAfterTest();
        // Deliberately do NOT configure a voice provider.
        unset_config('voice_providers', 'local_ai_course_assistant');
        unset_config('voice_active_realtime', 'local_ai_course_assistant');
        [$course, $user] = $this->enrolled_student();

        $this->expectException(\moodle_exception::class);
        $this->expectExceptionMessageMatches('/[Nn]o voice provider configured/');
        get_realtime_token::execute((int)$course->id);
    }

    public function test_xai_happy_path_returns_jwt_in_endpoint(): void {
        $this->resetAfterTest();
        $this->configure_xai_voice();
        [$course, $user] = $this->enrolled_student();

        $result = get_realtime_token::execute((int)$course->id);

        $this->assertEquals('xai', $result['provider']);
        $this->assertEquals('alloy', $result['voice']);
        $this->assertEquals('', $result['token'],
            'xAI path returns empty token; auth lives in the URL JWT.');
        $this->assertStringContainsString('proxy.example.com', $result['endpoint']);
        $this->assertStringContainsString('token=', $result['endpoint'],
            'xAI endpoint must carry the minted JWT in a `token` query param.');
        $this->assertNotEmpty($result['instructions'],
            'instructions must include the system prompt + voice tail.');
    }

    public function test_xai_jwt_carries_user_and_course_claims(): void {
        $this->resetAfterTest();
        $this->configure_xai_voice();
        [$course, $user] = $this->enrolled_student();

        $result = get_realtime_token::execute((int)$course->id);

        // Extract the JWT from the endpoint URL.
        parse_str(parse_url($result['endpoint'], PHP_URL_QUERY) ?? '', $qs);
        $jwt = $qs['token'] ?? '';
        $this->assertNotEmpty($jwt, 'endpoint must carry token=...');
        $parts = explode('.', $jwt);
        $this->assertCount(3, $parts, 'JWT must be header.payload.signature.');

        $payload = json_decode(base64_decode(strtr($parts[1], '-_', '+/')), true);
        $this->assertEquals((int)$user->id, $payload['sub']);
        $this->assertEquals((int)$course->id, $payload['courseid']);
        $this->assertEquals('xai', $payload['provider']);
        $this->assertEquals('alloy', $payload['voice']);
        $this->assertGreaterThan(time() - 5, $payload['iat']);
        $this->assertLessThan(time() + 70, $payload['exp']);
        $this->assertNotEmpty($payload['nonce']);
    }

    public function test_xai_missing_proxy_url_throws(): void {
        $this->resetAfterTest();
        // Configure xAI as active provider but omit the proxy URL.
        set_config('voice_providers',
            "xai|sk-xai-test|MyXai|alloy|alloy",
            'local_ai_course_assistant');
        set_config('voice_active_realtime', 'MyXai', 'local_ai_course_assistant');
        unset_config('xai_proxy_url', 'local_ai_course_assistant');
        set_config('xai_proxy_jwt_secret', str_repeat('a', 64),
            'local_ai_course_assistant');
        [$course, $user] = $this->enrolled_student();

        $this->expectException(\moodle_exception::class);
        $this->expectExceptionMessageMatches('/[Pp]roxy is not configured|xai_proxy_url/');
        get_realtime_token::execute((int)$course->id);
    }

    public function test_xai_missing_jwt_secret_throws(): void {
        $this->resetAfterTest();
        set_config('voice_providers',
            "xai|sk-xai-test|MyXai|alloy|alloy",
            'local_ai_course_assistant');
        set_config('voice_active_realtime', 'MyXai', 'local_ai_course_assistant');
        set_config('xai_proxy_url', 'wss://proxy.example.com/realtime',
            'local_ai_course_assistant');
        unset_config('xai_proxy_jwt_secret', 'local_ai_course_assistant');
        [$course, $user] = $this->enrolled_student();

        $this->expectException(\moodle_exception::class);
        get_realtime_token::execute((int)$course->id);
    }

    public function test_xai_proxy_url_fails_ssrf_check(): void {
        $this->resetAfterTest();
        $this->configure_xai_voice();
        // Override proxy URL to a localhost target the SSRF allowlist rejects.
        set_config('xai_proxy_url', 'wss://localhost:9999/realtime',
            'local_ai_course_assistant');
        [$course, $user] = $this->enrolled_student();

        $this->expectException(\moodle_exception::class);
        $this->expectExceptionMessageMatches('/SSRF|safe.*url/i');
        get_realtime_token::execute((int)$course->id);
    }

    public function test_clean_returnvalue_round_trip_xai(): void {
        $this->resetAfterTest();
        $this->configure_xai_voice();
        [$course, $user] = $this->enrolled_student();

        $result = get_realtime_token::execute((int)$course->id);
        $clean = \core_external\external_api::clean_returnvalue(
            get_realtime_token::execute_returns(), $result);
        $this->assertEquals($result, $clean,
            'Return shape must round-trip through external_api validation '
            . '(was a real bug in v5.1.3 — PARAM_URL rejected wss:// endpoints).');
    }

    public function test_pageid_and_pagetitle_passed_to_instructions(): void {
        $this->resetAfterTest();
        $this->configure_xai_voice();
        [$course, $user] = $this->enrolled_student();

        // Pass a fake pageid + pagetitle. Even though the cmid won't resolve
        // to a real module (context_builder swallows that), the pagetitle
        // must propagate into the voice tail.
        $result = get_realtime_token::execute((int)$course->id, 0, 'Photosynthesis Basics', 'en');

        $this->assertStringContainsString('Photosynthesis Basics', $result['instructions'],
            'pagetitle must surface in the voice-mode instructions tail.');
    }

    // ───────────────────────────────────────────────────────────
    // v5.4.0 — OpenAI Realtime path with curl mocking.
    // ───────────────────────────────────────────────────────────

    /**
     * Wire up an OpenAI voice provider as the active realtime provider.
     * Pairs with get_realtime_token::$test_http_response to short-circuit
     * the upstream curl call.
     */
    private function configure_openai_voice(): void {
        // Format: provider|apikey|label|realtime_voice|tts_voice
        set_config('voice_providers',
            "openai|sk-openai-test|MyOpenAI|alloy|alloy",
            'local_ai_course_assistant');
        set_config('voice_active_realtime', 'MyOpenAI', 'local_ai_course_assistant');
    }

    protected function tearDown(): void {
        // Always clear the test override so a leak from one test cannot
        // affect the next or, worse, leak into a non-test path.
        get_realtime_token::$test_http_response = null;
        parent::tearDown();
    }

    public function test_openai_happy_path_returns_minted_ephemeral_token(): void {
        $this->resetAfterTest();
        $this->configure_openai_voice();
        [$course, $user] = $this->enrolled_student();

        // Mock the OpenAI Realtime client_secrets endpoint response.
        get_realtime_token::$test_http_response = [
            'body' => json_encode([
                'client_secret' => ['value' => 'eph_sk_test_abcdef123456'],
            ]),
            'http_code' => 200,
        ];

        $result = get_realtime_token::execute((int)$course->id);

        $this->assertEquals('openai', $result['provider']);
        $this->assertEquals('alloy', $result['voice']);
        $this->assertEquals('eph_sk_test_abcdef123456', $result['token'],
            'The minted ephemeral secret must be returned verbatim to the client.');
        $this->assertNotEmpty($result['endpoint'],
            'The OpenAI Realtime endpoint URL is sourced from voice_registry config.');
    }

    public function test_openai_falls_back_to_top_level_value_field(): void {
        // Older OpenAI Realtime API responses returned `{"value": "..."}` at
        // the top level instead of the nested `client_secret.value`. The
        // service has a fallback for both shapes.
        $this->resetAfterTest();
        $this->configure_openai_voice();
        [$course, $user] = $this->enrolled_student();

        get_realtime_token::$test_http_response = [
            'body' => json_encode(['value' => 'eph_sk_legacy_shape']),
            'http_code' => 200,
        ];

        $result = get_realtime_token::execute((int)$course->id);
        $this->assertEquals('eph_sk_legacy_shape', $result['token']);
    }

    public function test_openai_401_unauthorized_throws_with_provider_message(): void {
        $this->resetAfterTest();
        $this->configure_openai_voice();
        [$course, $user] = $this->enrolled_student();

        get_realtime_token::$test_http_response = [
            'body' => json_encode([
                'error' => ['message' => 'Incorrect API key provided'],
            ]),
            'http_code' => 401,
        ];

        $this->expectException(\moodle_exception::class);
        $this->expectExceptionMessageMatches('/Incorrect API key/');
        get_realtime_token::execute((int)$course->id);
    }

    public function test_openai_500_throws_with_generic_message_when_no_error_field(): void {
        $this->resetAfterTest();
        $this->configure_openai_voice();
        [$course, $user] = $this->enrolled_student();

        get_realtime_token::$test_http_response = [
            'body' => '<html>500 Internal Server Error</html>',
            'http_code' => 500,
        ];

        $this->expectException(\moodle_exception::class);
        $this->expectExceptionMessageMatches('/API error 500/');
        get_realtime_token::execute((int)$course->id);
    }

    public function test_openai_200_with_no_token_throws_unexpected_response(): void {
        $this->resetAfterTest();
        $this->configure_openai_voice();
        [$course, $user] = $this->enrolled_student();

        get_realtime_token::$test_http_response = [
            'body' => json_encode(['client_secret' => ['value' => '']]),
            'http_code' => 200,
        ];

        $this->expectException(\moodle_exception::class);
        $this->expectExceptionMessageMatches('/Unexpected response/');
        get_realtime_token::execute((int)$course->id);
    }

    public function test_openai_clean_returnvalue_round_trip(): void {
        $this->resetAfterTest();
        $this->configure_openai_voice();
        [$course, $user] = $this->enrolled_student();
        get_realtime_token::$test_http_response = [
            'body' => json_encode(['client_secret' => ['value' => 'eph_sk_round_trip']]),
            'http_code' => 200,
        ];

        $result = get_realtime_token::execute((int)$course->id);
        $clean = \core_external\external_api::clean_returnvalue(
            get_realtime_token::execute_returns(), $result);
        $this->assertEquals($result, $clean);
    }
}
