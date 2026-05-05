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

namespace local_ai_course_assistant\task;

defined('MOODLE_INTERNAL') || die();

use local_ai_course_assistant\struggle_classifier;

/**
 * Scheduled task: aggregate stage-1 struggle candidates into per-session
 * labels, write sticking-point notes for "frustrated" sessions, and
 * purge expired signals (v5.3.0).
 *
 * Runs hourly. Output is private learner-memory notes only — never an
 * email, never a notification, never a dashboard entry.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class struggle_signal_review extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:struggle_signal_review', 'local_ai_course_assistant');
    }

    public function execute(): void {
        if (!(bool)get_config('local_ai_course_assistant', 'struggle_classifier_enabled')) {
            mtrace('struggle_signal_review: classifier disabled; skipping.');
            return;
        }
        $notes = struggle_classifier::process_pending();
        $purged = struggle_classifier::purge_old();
        mtrace("struggle_signal_review: wrote {$notes} memory notes, purged {$purged} expired signals.");
    }
}
