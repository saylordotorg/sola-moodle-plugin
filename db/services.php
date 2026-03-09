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

/**
 * External function declarations for local_ai_course_assistant.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = [
    'local_ai_course_assistant_send_message' => [
        'classname' => \local_ai_course_assistant\external\send_message::class,
        'description' => 'Send a message to the AI tutor (non-streaming fallback).',
        'type' => 'write',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_get_history' => [
        'classname' => \local_ai_course_assistant\external\get_history::class,
        'description' => 'Get conversation history for a course.',
        'type' => 'read',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_clear_history' => [
        'classname' => \local_ai_course_assistant\external\clear_history::class,
        'description' => 'Clear conversation history for a course.',
        'type' => 'write',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_get_config' => [
        'classname' => \local_ai_course_assistant\external\get_config::class,
        'description' => 'Get client-side configuration.',
        'type' => 'read',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_update_study_plan' => [
        'classname' => \local_ai_course_assistant\external\update_study_plan::class,
        'description' => 'Create or update a study plan.',
        'type' => 'write',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_get_study_plan' => [
        'classname' => \local_ai_course_assistant\external\get_study_plan::class,
        'description' => 'Get the current study plan.',
        'type' => 'read',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_update_reminder_preferences' => [
        'classname' => \local_ai_course_assistant\external\update_reminder_preferences::class,
        'description' => 'Subscribe or update study reminder preferences.',
        'type' => 'write',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_get_reminder_preferences' => [
        'classname' => \local_ai_course_assistant\external\get_reminder_preferences::class,
        'description' => 'Get study reminder preferences.',
        'type' => 'read',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_dismiss_intro' => [
        'classname' => \local_ai_course_assistant\external\dismiss_intro::class,
        'description' => 'Dismiss the first-time introduction modal.',
        'type' => 'write',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_generate_quiz' => [
        'classname'    => \local_ai_course_assistant\external\generate_quiz::class,
        'description'  => 'Generate a practice quiz for a course.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_save_avatar_preference' => [
        'classname'    => \local_ai_course_assistant\external\save_avatar_preference::class,
        'description'  => 'Save the user\'s preferred avatar.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_get_realtime_token' => [
        'classname'    => \local_ai_course_assistant\external\get_realtime_token::class,
        'description'  => 'Get an ephemeral token for OpenAI Realtime voice mode.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_submit_feedback' => [
        'classname'    => \local_ai_course_assistant\external\submit_feedback::class,
        'description'  => 'Submit user feedback about SOLA.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_email_study_notes' => [
        'classname'    => \local_ai_course_assistant\external\email_study_notes::class,
        'description'  => 'Email study session notes to the current user.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
];
