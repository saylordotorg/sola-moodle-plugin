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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
        'services' => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_get_history' => [
        'classname' => \local_ai_course_assistant\external\get_history::class,
        'description' => 'Get conversation history for a course.',
        'type' => 'read',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
        'services' => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_clear_history' => [
        'classname' => \local_ai_course_assistant\external\clear_history::class,
        'description' => 'Clear conversation history for a course.',
        'type' => 'write',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
        'services' => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_get_config' => [
        'classname' => \local_ai_course_assistant\external\get_config::class,
        'description' => 'Get client-side configuration.',
        'type' => 'read',
        'ajax' => true,
        'capabilities' => 'local/ai_course_assistant:use',
        'services' => [MOODLE_OFFICIAL_MOBILE_SERVICE],
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
    'local_ai_course_assistant_set_digest_optin' => [
        'classname' => \local_ai_course_assistant\external\set_digest_optin::class,
        'description' => 'Record learner opt-in / opt-out for the per-course weekly mastery digest email (v4.0 / M3).',
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
    'local_ai_course_assistant_get_survey' => [
        'classname'    => \local_ai_course_assistant\external\get_survey::class,
        'description'  => 'Get the active survey for a course.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_submit_survey_response' => [
        'classname'    => \local_ai_course_assistant\external\submit_survey_response::class,
        'description'  => 'Submit survey answers.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_get_usertesting' => [
        'classname'    => \local_ai_course_assistant\external\get_usertesting::class,
        'description'  => 'Get the active usability testing task set for a course.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_submit_usertesting_response' => [
        'classname'    => \local_ai_course_assistant\external\submit_usertesting_response::class,
        'description'  => 'Submit a usability testing task response.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_get_rubric' => [
        'classname'    => \local_ai_course_assistant\external\get_rubric::class,
        'description'  => 'Get the active scoring rubric for a practice session type.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_save_practice_score' => [
        'classname'    => \local_ai_course_assistant\external\save_practice_score::class,
        'description'  => 'Save a practice session score.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_generate_insights' => [
        'classname'    => \local_ai_course_assistant\external\generate_insights::class,
        'description'  => 'Generate AI-powered insights from feedback and usability testing data.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'moodle/site:config',
    ],
    'local_ai_course_assistant_get_analytics_overall' => [
        'classname'    => \local_ai_course_assistant\external\get_analytics_overall::class,
        'description'  => 'Get overall analytics overview data.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'moodle/site:config',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_get_analytics_by_course' => [
        'classname'    => \local_ai_course_assistant\external\get_analytics_by_course::class,
        'description'  => 'Get analytics data broken down by course.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'moodle/site:config',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_get_analytics_comparison' => [
        'classname'    => \local_ai_course_assistant\external\get_analytics_comparison::class,
        'description'  => 'Get AI users vs non-users comparison data.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'moodle/site:config',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_get_analytics_by_unit' => [
        'classname'    => \local_ai_course_assistant\external\get_analytics_by_unit::class,
        'description'  => 'Get per-section (unit) usage data.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'moodle/site:config',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_get_analytics_usage_types' => [
        'classname'    => \local_ai_course_assistant\external\get_analytics_usage_types::class,
        'description'  => 'Get interaction type breakdown.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'moodle/site:config',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_get_analytics_themes' => [
        'classname'    => \local_ai_course_assistant\external\get_analytics_themes::class,
        'description'  => 'Get keyword/theme analytics data.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'moodle/site:config',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_get_analytics_feedback' => [
        'classname'    => \local_ai_course_assistant\external\get_analytics_feedback::class,
        'description'  => 'Get combined feedback analytics data.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'moodle/site:config',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_rate_message' => [
        'classname'    => \local_ai_course_assistant\external\rate_message::class,
        'description'  => 'Rate an AI message (thumbs up/down).',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_get_mastery_summary' => [
        'classname'    => \local_ai_course_assistant\external\get_mastery_summary::class,
        'description'  => 'Get current mastery summary for the caller in a course.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_record_objective_attempt' => [
        'classname'    => \local_ai_course_assistant\external\record_objective_attempt::class,
        'description'  => 'Record a mastery attempt against a learning objective.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
    ],
    'local_ai_course_assistant_export_analytics_csv' => [
        'classname'    => \local_ai_course_assistant\external\export_analytics_csv::class,
        'description'  => 'Export analytics data as CSV.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'moodle/site:config',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    // Mastery tracking (v3.9.17).
    'local_ai_course_assistant_get_mastery_summary' => [
        'classname'    => \local_ai_course_assistant\external\get_mastery_summary::class,
        'description'  => 'Return the learner mastery summary for a course; empty when mastery is disabled.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_record_objective_attempt' => [
        'classname'    => \local_ai_course_assistant\external\record_objective_attempt::class,
        'description'  => 'Record a single learner attempt against a learning objective.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    // Spaced-repetition flashcards (v3.9.22).
    'local_ai_course_assistant_generate_flashcards' => [
        'classname'    => \local_ai_course_assistant\external\generate_flashcards::class,
        'description'  => 'Extract a small batch of flashcards from a course module via the configured AI provider, then persist them.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    'local_ai_course_assistant_review_flashcard' => [
        'classname'    => \local_ai_course_assistant\external\review_flashcard::class,
        'description'  => 'Record a learner self-grade on a flashcard and reschedule via SM-2 lite.',
        'type'         => 'write',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
    // Essay feedback (v3.9.25).
    'local_ai_course_assistant_score_essay' => [
        'classname'    => \local_ai_course_assistant\external\score_essay::class,
        'description'  => 'Score a learner essay against an optional rubric via the configured AI provider.',
        'type'         => 'read',
        'ajax'         => true,
        'capabilities' => 'local/ai_course_assistant:use',
        'services'     => [MOODLE_OFFICIAL_MOBILE_SERVICE],
    ],
];
