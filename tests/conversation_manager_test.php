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
 * Tests for conversation_manager.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \local_ai_course_assistant\conversation_manager
 */
class conversation_manager_test extends \advanced_testcase {

    public function test_get_or_create_conversation_creates_new(): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();

        $conv = conversation_manager::get_or_create_conversation($user->id, $course->id);

        $this->assertNotEmpty($conv->id);
        $this->assertEquals($user->id, $conv->userid);
        $this->assertEquals($course->id, $conv->courseid);
    }

    public function test_get_or_create_conversation_returns_existing(): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();

        $conv1 = conversation_manager::get_or_create_conversation($user->id, $course->id);
        $conv2 = conversation_manager::get_or_create_conversation($user->id, $course->id);

        $this->assertEquals($conv1->id, $conv2->id);
    }

    public function test_add_and_get_messages(): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $conv = conversation_manager::get_or_create_conversation($user->id, $course->id);

        conversation_manager::add_message($conv->id, $user->id, $course->id, 'user', 'Hello');
        conversation_manager::add_message($conv->id, $user->id, $course->id, 'assistant', 'Hi there!');

        $messages = conversation_manager::get_messages($conv->id);
        $messages = array_values($messages);

        $this->assertCount(2, $messages);
        $this->assertEquals('user', $messages[0]->role);
        $this->assertEquals('Hello', $messages[0]->message);
        $this->assertEquals('assistant', $messages[1]->role);
        $this->assertEquals('Hi there!', $messages[1]->message);
    }

    public function test_get_history_for_api_respects_maxhistory(): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $conv = conversation_manager::get_or_create_conversation($user->id, $course->id);

        // Set max to 2 pairs (4 messages).
        set_config('maxhistory', '2', 'local_ai_course_assistant');

        // Add 6 messages (3 pairs).
        for ($i = 0; $i < 3; $i++) {
            conversation_manager::add_message($conv->id, $user->id, $course->id, 'user', "Q{$i}");
            conversation_manager::add_message($conv->id, $user->id, $course->id, 'assistant', "A{$i}");
        }

        $history = conversation_manager::get_history_for_api($conv->id);

        $this->assertCount(4, $history);
        // Should have the last 2 pairs.
        $this->assertEquals('Q1', $history[0]['content']);
        $this->assertEquals('A2', $history[3]['content']);
    }

    public function test_clear_conversation(): void {
        $this->resetAfterTest();
        global $DB;

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $conv = conversation_manager::get_or_create_conversation($user->id, $course->id);

        conversation_manager::add_message($conv->id, $user->id, $course->id, 'user', 'Test');
        conversation_manager::clear_conversation($conv->id, $user->id);

        $this->assertFalse($DB->record_exists('local_ai_course_assistant_convs', ['id' => $conv->id]));
        $this->assertFalse($DB->record_exists('local_ai_course_assistant_msgs', ['conversationid' => $conv->id]));
    }

    public function test_clear_conversation_blocks_other_users(): void {
        $this->resetAfterTest();

        $course = $this->getDataGenerator()->create_course();
        $user1 = $this->getDataGenerator()->create_user();
        $user2 = $this->getDataGenerator()->create_user();
        $conv = conversation_manager::get_or_create_conversation($user1->id, $course->id);

        $this->expectException(\moodle_exception::class);
        conversation_manager::clear_conversation($conv->id, $user2->id);
    }

    public function test_delete_user_data(): void {
        $this->resetAfterTest();
        global $DB;

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $conv = conversation_manager::get_or_create_conversation($user->id, $course->id);
        conversation_manager::add_message($conv->id, $user->id, $course->id, 'user', 'Test');

        conversation_manager::delete_user_data($user->id);

        $this->assertFalse($DB->record_exists('local_ai_course_assistant_convs', ['userid' => $user->id]));
        $this->assertFalse($DB->record_exists('local_ai_course_assistant_msgs', ['conversationid' => $conv->id]));
    }
}
