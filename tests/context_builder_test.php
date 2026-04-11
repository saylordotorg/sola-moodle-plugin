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
 * Tests for context_builder.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_ai_course_assistant\context_builder
 */
final class context_builder_test extends \advanced_testcase {
    public function test_build_system_prompt_contains_course_name(): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course(['fullname' => 'Introduction to Testing']);
        $student = $this->getDataGenerator()->create_and_enrol($course, 'student');

        set_config('systemprompt', 'You are a tutor for {{coursename}}. Role: {{userrole}}.', 'local_ai_course_assistant');

        $prompt = context_builder::build_system_prompt($course->id, $student->id);

        $this->assertStringContainsString('Introduction to Testing', $prompt);
        $this->assertStringContainsString('student', $prompt);
    }

    public function test_build_system_prompt_detects_academic_support_role(): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course(['fullname' => 'Test Course']);
        $teacher = $this->getDataGenerator()->create_and_enrol($course, 'editingteacher');

        set_config('systemprompt', 'Role: {{userrole}}.', 'local_ai_course_assistant');

        $prompt = context_builder::build_system_prompt($course->id, $teacher->id);

        $this->assertStringContainsString('academic_support', $prompt);
        $this->assertStringContainsString('monitoring trends', $prompt);
    }

    public function test_build_system_prompt_includes_socratic_for_students(): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course(['fullname' => 'Test Course']);
        $student = $this->getDataGenerator()->create_and_enrol($course, 'student');

        set_config('systemprompt', 'Tutor for {{coursename}}.', 'local_ai_course_assistant');

        $prompt = context_builder::build_system_prompt($course->id, $student->id);

        $this->assertStringContainsString('Socratic', $prompt);
    }

    public function test_build_system_prompt_uses_default_template(): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course(['fullname' => 'My Course']);
        $student = $this->getDataGenerator()->create_and_enrol($course, 'student');

        // No custom template set — should use the default.
        set_config('systemprompt', '', 'local_ai_course_assistant');

        $prompt = context_builder::build_system_prompt($course->id, $student->id);

        $this->assertStringContainsString('My Course', $prompt);
        $this->assertNotEmpty($prompt);
    }
}
