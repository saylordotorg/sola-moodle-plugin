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

use local_ai_course_assistant\provider\base_provider;
use local_ai_course_assistant\provider\openai_compatible_provider;

/**
 * Tests for v5.5.2 base_url 5th column on comparison_providers.
 *
 * Covers: backward compatibility with 4-field rows; forward compatibility with
 * 5-field rows; failover chain propagation of apibaseurl; harness parsing.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_ai_course_assistant\provider\base_provider
 * @covers     \local_ai_course_assistant\spend_guard
 */
final class comparison_providers_baseurl_test extends \advanced_testcase {

    /**
     * 4-field row (no base URL) still parses correctly into create_for_comparison.
     * The instantiated provider should use its class's default base URL.
     */
    public function test_four_field_row_uses_class_default_base_url(): void {
        $this->resetAfterTest();
        set_config(
            'comparison_providers',
            "together|tk-test|meta-llama/Llama-3.1-8B-Instruct-Lite|0.4",
            'local_ai_course_assistant'
        );
        $p = base_provider::create_for_comparison('together', 'meta-llama/Llama-3.1-8B-Instruct-Lite', 0);
        $this->assertInstanceOf(openai_compatible_provider::class, $p);
        // Use reflection to inspect the baseurl property; the base class declares
        // it as protected so direct access would be a fight with the linter.
        $ref = new \ReflectionProperty(base_provider::class, 'baseurl');
        $ref->setAccessible(true);
        $this->assertEquals('https://api.together.xyz', $ref->getValue($p));
    }

    /**
     * 5-field row with an explicit base URL overrides the class default.
     */
    public function test_five_field_row_overrides_base_url(): void {
        $this->resetAfterTest();
        $custom = 'https://example-proxy.test/v1';
        set_config(
            'comparison_providers',
            "together|tk-test|meta-llama/Llama-3.1-8B-Instruct-Lite|0.4|$custom",
            'local_ai_course_assistant'
        );
        $p = base_provider::create_for_comparison('together', 'meta-llama/Llama-3.1-8B-Instruct-Lite', 0);
        $ref = new \ReflectionProperty(base_provider::class, 'baseurl');
        $ref->setAccessible(true);
        $this->assertEquals($custom, $ref->getValue($p));
    }

    /**
     * Empty 5th field (trailing |) is equivalent to a 4-field row.
     */
    public function test_empty_fifth_field_falls_through_to_default(): void {
        $this->resetAfterTest();
        set_config(
            'comparison_providers',
            "together|tk-test|meta-llama/Llama-3.1-8B-Instruct-Lite|0.4|",
            'local_ai_course_assistant'
        );
        $p = base_provider::create_for_comparison('together', 'meta-llama/Llama-3.1-8B-Instruct-Lite', 0);
        $ref = new \ReflectionProperty(base_provider::class, 'baseurl');
        $ref->setAccessible(true);
        $this->assertEquals('https://api.together.xyz', $ref->getValue($p));
    }

    /**
     * spend_guard::resolve_failover_chain returns apibaseurl in each chain entry
     * for chat capability, including blank when the 5th column is absent.
     */
    public function test_failover_chain_returns_apibaseurl_field(): void {
        $this->resetAfterTest();
        $custom = 'https://example-proxy.test/v1';
        set_config(
            'comparison_providers',
            "together|tk-test|meta-llama/Llama-3.1-8B-Instruct-Lite|0.4|$custom\n"
            . "openai|sk-test|gpt-4o-mini|0.4",
            'local_ai_course_assistant'
        );
        set_config(
            'spend_failover_chain',
            "chat:together\nchat:openai",
            'local_ai_course_assistant'
        );
        $chain = spend_guard::resolve_failover_chain('chat');
        $this->assertCount(2, $chain);
        $this->assertEquals('together', $chain[0]['provider']);
        $this->assertEquals($custom, $chain[0]['apibaseurl']);
        $this->assertEquals('openai', $chain[1]['provider']);
        $this->assertEquals('', $chain[1]['apibaseurl']);
    }
}
