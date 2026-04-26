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
 * Scheduled task definitions for local_ai_course_assistant.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$tasks = [
    [
        'classname' => \local_ai_course_assistant\task\send_reminders::class,
        'blocking' => 0,
        'minute' => '0',
        'hour' => '8',       // Run at 8 AM server time.
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ],
    [
        'classname' => \local_ai_course_assistant\task\index_course_content::class,
        'blocking' => 0,
        'minute' => '0',
        'hour' => '2',       // Run at 2 AM server time.
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ],
    [
        'classname' => \local_ai_course_assistant\task\send_inactivity_reminders::class,
        'blocking' => 0,
        'minute' => '0',
        'hour' => '9',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '1',
    ],
    [
        'classname' => \local_ai_course_assistant\task\run_integrity_checks::class,
        'blocking' => 0,
        'minute' => '0',
        'hour' => '3',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ],
    [
        'classname' => \local_ai_course_assistant\task\run_meta_ai_query::class,
        'blocking' => 0,
        'minute' => '0',
        'hour' => '6',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ],
    [
        'classname' => \local_ai_course_assistant\task\audit_cleanup::class,
        'blocking' => 0,
        'minute' => '30',
        'hour' => '4',       // Daily at 4:30 AM server time.
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ],
    [
        'classname' => \local_ai_course_assistant\task\conversation_retention::class,
        'blocking' => 0,
        'minute' => '45',
        'hour' => '4',       // Daily at 4:45 AM server time.
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ],
    [
        // Weekly digest email to course authors / instructional designers
        // for every course with the per-course digest toggle on.
        'classname' => \local_ai_course_assistant\task\instructor_weekly_digest::class,
        'blocking' => 0,
        'minute' => '0',
        'hour' => '9',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '1',  // Mondays at 09:00 server time.
    ],
    [
        // v4.0 / M3 — Per-learner weekly digest. Opt-in only; only fires for
        // (userid, courseid) pairs where mastery is enabled and the learner
        // has the digest_optin user preference set to '1' on that course.
        'classname' => \local_ai_course_assistant\task\learner_weekly_digest::class,
        'blocking' => 0,
        'minute' => '15',
        'hour' => '9',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '1',  // Mondays at 09:15 server time.
    ],
];
