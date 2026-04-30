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
use local_ai_course_assistant\rag_drift_detector;

/**
 * Daily cron task that re-indexes RAG modules whose source content has
 * been edited since their last index time.
 *
 * Closes the gap left by `index_course_content`, which only reindexes
 * courses with active enrolments. Authors editing not-yet-enrolled
 * courses (or modules whose chunks happen to be skipped on the daily
 * pass) get fresh embeddings here on the next nightly run.
 *
 * Default ON via the `rag_auto_reindex_drifted` setting. Cheap when
 * nothing has drifted (single grouped query per course, no LLM calls).
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class auto_reindex_rag_drifted extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:auto_reindex_rag_drifted', 'local_ai_course_assistant');
    }

    public function execute(): void {
        if (!get_config('local_ai_course_assistant', 'rag_auto_reindex_drifted')) {
            mtrace('  RAG drift auto-reindex: disabled, skipping.');
            return;
        }
        if (!get_config('local_ai_course_assistant', 'rag_enabled')) {
            mtrace('  RAG drift auto-reindex: RAG disabled site-wide, skipping.');
            return;
        }

        $drifted = rag_drift_detector::detect_all();
        if (empty($drifted)) {
            mtrace('  RAG drift auto-reindex: no drift detected.');
            return;
        }

        mtrace('  RAG drift auto-reindex: re-indexing ' . count($drifted) . ' drifted module(s).');
        $reindexed = 0;
        $errors = 0;
        foreach ($drifted as $entry) {
            try {
                $ok = content_indexer::index_module((int) $entry['cmid'], true);
                if ($ok) {
                    $reindexed++;
                    mtrace('    cmid=' . $entry['cmid'] . ' (' . $entry['modtype']
                        . ', course=' . $entry['courseid'] . ') reindexed.');
                }
            } catch (\Throwable $e) {
                $errors++;
                mtrace('    cmid=' . $entry['cmid'] . ' ERROR: ' . $e->getMessage());
            }
        }
        mtrace("  RAG drift auto-reindex: done. reindexed={$reindexed}, errors={$errors}");
    }
}
