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

use local_ai_course_assistant\content_indexer;

/**
 * Scheduled task: nightly RAG content indexing.
 *
 * Runs at 2 AM server time. For each course that has the plugin active
 * (at least one enrolled student + plugin enabled globally), this task
 * calls content_indexer::index_course() which handles change detection —
 * only new or changed chunks are re-embedded.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class index_course_content extends \core\task\scheduled_task {

    /**
     * Return the task's human-readable name.
     *
     * @return string
     */
    public function get_name(): string {
        return get_string('task:index_course_content', 'local_ai_course_assistant');
    }

    /**
     * Execute the task.
     *
     * Finds all courses that have at least one student enrolled (as a proxy
     * for "active" courses), then indexes each one incrementally.
     */
    public function execute(): void {
        global $DB;

        if (!get_config('local_ai_course_assistant', 'rag_enabled')) {
            mtrace('local_ai_course_assistant: RAG disabled — skipping indexing task.');
            return;
        }

        // Find all courses that have at least one active enrolment.
        // We exclude the site course (id=1).
        $sql = "SELECT DISTINCT c.id, c.fullname
                  FROM {course} c
                  JOIN {enrol} e ON e.courseid = c.id AND e.status = 0
                  JOIN {user_enrolments} ue ON ue.enrolid = e.id AND ue.status = 0
                 WHERE c.id > 1 AND c.visible = 1";

        $courses = $DB->get_records_sql($sql);

        if (empty($courses)) {
            mtrace('local_ai_course_assistant: No active courses found for RAG indexing.');
            return;
        }

        mtrace('local_ai_course_assistant: Indexing ' . count($courses) . ' course(s).');

        $totalindexed = 0;
        $totalskipped = 0;
        $totalerrors  = 0;

        foreach ($courses as $course) {
            try {
                mtrace("  Indexing course {$course->id}: {$course->fullname}");
                $stats = content_indexer::index_course((int) $course->id);
                $totalindexed += $stats['indexed'];
                $totalskipped += $stats['skipped'];
                $totalerrors  += $stats['errors'];
                mtrace("    indexed={$stats['indexed']}, skipped={$stats['skipped']}, errors={$stats['errors']}");
            } catch (\Exception $e) {
                mtrace("    ERROR: " . $e->getMessage());
                $totalerrors++;
            }
        }

        mtrace("local_ai_course_assistant: RAG indexing complete. "
            . "Total — indexed={$totalindexed}, skipped={$totalskipped}, errors={$totalerrors}");
    }
}
