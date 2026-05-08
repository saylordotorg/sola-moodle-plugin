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

use local_ai_course_assistant\validators\memory_leak_validator;

/**
 * Unit tests for memory_leak_validator (v5.3.35).
 *
 * The static corpus exercises the regex from outside; these tests verify
 * the validator's contract directly — name(), result severity, hit
 * details, and that benign tutoring text passes cleanly.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_ai_course_assistant\validators\memory_leak_validator
 */
final class memory_leak_validator_test extends \advanced_testcase {

    private function v(): memory_leak_validator {
        return new memory_leak_validator();
    }

    public function test_name_is_stable_machine_id(): void {
        $this->assertEquals('memory_leak', $this->v()->name(),
            'CLI runner and audit logs key off this name; do not change without migrating fixtures.');
    }

    public function test_clean_response_passes(): void {
        $r = $this->v()->validate(
            'Photosynthesis is the process by which plants convert light energy into chemical energy.');
        $this->assertTrue($r->passed());
        $this->assertEmpty($r->messages);
    }

    public function test_false_memory_phrase_fails(): void {
        $r = $this->v()->validate(
            'I remember from our last session that you struggled with stoichiometry.');
        $this->assertTrue($r->blocked());
        $this->assertNotEmpty($r->messages);
        $this->assertEquals('false_memory', $r->details['hits'][0]['kind']);
    }

    public function test_other_learners_aggregate_claim_fails(): void {
        $r = $this->v()->validate(
            'Most students in this course tend to confuse mitosis and meiosis.');
        $this->assertTrue($r->blocked());
        $this->assertEquals('other_learners', $r->details['hits'][0]['kind']);
    }

    public function test_named_classmate_fails(): void {
        $r = $this->v()->validate(
            'Another student named Sarah Johnson asked something similar.');
        $this->assertTrue($r->blocked());
        $this->assertEquals('other_learners', $r->details['hits'][0]['kind']);
    }

    public function test_percentage_of_students_fails(): void {
        $r = $this->v()->validate(
            '40% of students get this wrong on the first try.');
        $this->assertTrue($r->blocked());
        $this->assertEquals('other_learners', $r->details['hits'][0]['kind']);
    }

    public function test_in_session_reference_passes(): void {
        // Referring to something the learner said earlier in the SAME chat is
        // fine — the model has the current conversation in context. Only
        // claims about prior SESSIONS or other LEARNERS are blocked.
        $r = $this->v()->validate(
            "Earlier in this chat you asked about stoichiometry. Let's revisit that.");
        $this->assertTrue($r->passed(),
            'Same-session backreferences must pass; only prior-session claims are leaks.');
    }

    public function test_classmates_keyword_alone_passes(): void {
        // The word "classmates" alone is not a leak — only "your classmates
        // are/have/find/struggle/etc" is. A definition-style sentence is
        // legitimate course material.
        $r = $this->v()->validate(
            'Classmates is a synonym for fellow students.');
        $this->assertTrue($r->passed());
    }

    public function test_fail_includes_phrase_in_details(): void {
        // Spot-check that hit details include the matched phrase, so
        // future incident review can see exactly what tripped the regex.
        $r = $this->v()->validate(
            'Other learners in this course are also working on this topic.');
        $this->assertTrue($r->blocked());
        $this->assertArrayHasKey('phrase', $r->details['hits'][0]);
        $this->assertNotEmpty($r->details['hits'][0]['phrase']);
    }

    public function test_multiple_hits_collected(): void {
        // Output that triggers BOTH false-memory AND other-learners
        // patterns must collect at least one hit of each kind. Some
        // strings hit multiple patterns within the same kind (e.g.
        // "I remember" + "in our last session"); we don't require
        // exactly two hits, just that BOTH kinds are represented.
        $r = $this->v()->validate(
            "I remember from our last session that other students in this course "
            . "tend to skip the introduction.");
        $this->assertTrue($r->blocked());
        $this->assertGreaterThanOrEqual(2, count($r->details['hits']));
        $kinds = array_column($r->details['hits'], 'kind');
        $this->assertContains('false_memory', $kinds);
        $this->assertContains('other_learners', $kinds);
    }
}
