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
 * Detects RAG index staleness — i.e., source modules whose
 * `timemodified` is later than the indexed chunk's `timeindexed`.
 *
 * `content_indexer` already does content-hash-based change detection on
 * each indexer run, but the daily {@see task\index_course_content} only
 * processes courses with active enrolments. Authors editing a not-yet-
 * enrolled course leave a stale index that is never refreshed. This
 * helper plus the {@see task\auto_reindex_rag_drifted} scheduled task
 * close the gap.
 *
 * Supported source modules: `mod_page`, `mod_book` chapters. Match the
 * set indexed by `content_indexer`; new module types added there should
 * also be added here.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class rag_drift_detector {

    /**
     * Find drifted course modules across all RAG-enabled visible courses.
     *
     * @return array<int, array{courseid:int, cmid:int, modtype:string, modtime:int, indexed:int}>
     */
    public static function detect_all(): array {
        global $DB;
        $courses = $DB->get_records_sql(
            "SELECT c.id FROM {course} c WHERE c.id > 1 AND c.visible = 1");
        $out = [];
        foreach ($courses as $c) {
            foreach (self::detect_for_course((int) $c->id) as $entry) {
                $out[] = $entry;
            }
        }
        return $out;
    }

    /**
     * Find drifted modules in a single course.
     *
     * @param int $courseid
     * @return array<int, array{courseid:int, cmid:int, modtype:string, modtime:int, indexed:int}>
     */
    public static function detect_for_course(int $courseid): array {
        global $DB;
        if (!self::rag_enabled_for_course($courseid)) {
            return [];
        }

        // Newest chunk-index time per cmid, narrowed to this course.
        $chunkages = $DB->get_records_sql(
            "SELECT cmid, MAX(COALESCE(timeindexed, timecreated)) AS maxindexed
               FROM {local_ai_course_assistant_chunks}
              WHERE courseid = :courseid AND cmid IS NOT NULL
              GROUP BY cmid",
            ['courseid' => $courseid]
        );
        if (empty($chunkages)) {
            return [];
        }

        $drifted = [];

        // mod_page: course_modules.id → page.id via instance, page.timemodified.
        $pagerows = $DB->get_records_sql(
            "SELECT cm.id AS cmid, p.timemodified
               FROM {course_modules} cm
               JOIN {modules} m ON m.id = cm.module AND m.name = 'page'
               JOIN {page} p ON p.id = cm.instance
              WHERE cm.course = :courseid AND cm.deletioninprogress = 0",
            ['courseid' => $courseid]
        );
        foreach ($pagerows as $r) {
            if (isset($chunkages[$r->cmid])
                    && (int) $r->timemodified > (int) $chunkages[$r->cmid]->maxindexed) {
                $drifted[] = [
                    'courseid' => $courseid,
                    'cmid'     => (int) $r->cmid,
                    'modtype'  => 'page',
                    'modtime'  => (int) $r->timemodified,
                    'indexed'  => (int) $chunkages[$r->cmid]->maxindexed,
                ];
            }
        }

        // mod_book: any chapter timemodified later than the cmid's newest indexed time.
        $bookrows = $DB->get_records_sql(
            "SELECT cm.id AS cmid, MAX(bc.timemodified) AS maxchaptertime
               FROM {course_modules} cm
               JOIN {modules} m ON m.id = cm.module AND m.name = 'book'
               JOIN {book_chapters} bc ON bc.bookid = cm.instance AND bc.hidden = 0
              WHERE cm.course = :courseid AND cm.deletioninprogress = 0
              GROUP BY cm.id",
            ['courseid' => $courseid]
        );
        foreach ($bookrows as $r) {
            if (isset($chunkages[$r->cmid])
                    && (int) $r->maxchaptertime > (int) $chunkages[$r->cmid]->maxindexed) {
                $drifted[] = [
                    'courseid' => $courseid,
                    'cmid'     => (int) $r->cmid,
                    'modtype'  => 'book',
                    'modtime'  => (int) $r->maxchaptertime,
                    'indexed'  => (int) $chunkages[$r->cmid]->maxindexed,
                ];
            }
        }

        return $drifted;
    }

    /**
     * Whether RAG is on for a given course (site-wide enabled and not
     * explicitly disabled per-course).
     *
     * @param int $courseid
     * @return bool
     */
    private static function rag_enabled_for_course(int $courseid): bool {
        if (!get_config('local_ai_course_assistant', 'rag_enabled')) {
            return false;
        }
        $raw = get_config('local_ai_course_assistant', 'rag_enabled_course_' . $courseid);
        return $raw !== '0';
    }
}
