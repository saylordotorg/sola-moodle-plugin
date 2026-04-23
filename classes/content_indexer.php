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

use local_ai_course_assistant\embedding_provider\base_embedding_provider;

/**
 * Orchestrates content extraction → chunking → embedding → DB storage.
 *
 * Change detection: chunks are only re-embedded when their sha1 hash changes,
 * so incremental re-indexing is cheap.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class content_indexer {

    /**
     * Index all content in a course.
     *
     * For each module:
     *  1. Extract text via content_extractor.
     *  2. Chunk via content_chunker.
     *  3. Check DB for existing chunks with same sha1 — skip unchanged ones.
     *  4. Embed new/changed chunks and upsert into DB.
     *  5. Delete DB chunks that no longer exist in the source.
     *
     * @param int  $courseid
     * @param bool $force    If true, re-embed all chunks regardless of hash.
     * @return array ['indexed' => int, 'skipped' => int, 'errors' => int]
     */
    public static function index_course(int $courseid, bool $force = false): array {
        global $DB;

        $chunksize = (int) (get_config('local_ai_course_assistant', 'rag_chunksize') ?: 400);
        $provider  = base_embedding_provider::create_from_config();
        $modelname = get_config('local_ai_course_assistant', 'embed_model') ?: 'text-embedding-3-small';

        $modules = content_extractor::extract_course_modules($courseid);

        $stats = ['indexed' => 0, 'skipped' => 0, 'errors' => 0];

        // Track all chunk content-hashes we encounter (for cleanup later).
        $seenhashes = [];

        foreach ($modules as $mod) {
            try {
                $chunks = content_chunker::chunk(
                    $mod['text'],
                    $mod['title'],
                    $mod['section'],
                    $chunksize
                );

                foreach ($chunks as $idx => $chunk) {
                    $hash = $chunk['contenthash'];
                    $seenhashes[] = $hash;

                    // Check for existing identical chunk.
                    if (!$force) {
                        $existing = $DB->get_record('local_ai_course_assistant_chunks', [
                            'courseid'    => $courseid,
                            'contenthash' => $hash,
                        ], 'id, embedding');

                        if ($existing && !empty($existing->embedding)) {
                            $stats['skipped']++;
                            continue;
                        }
                    }

                    // Embed this chunk.
                    $vector = $provider->embed($chunk['content']);

                    // Upsert: delete any old row for this cmid+chunkindex first.
                    $DB->delete_records('local_ai_course_assistant_chunks', [
                        'courseid'   => $courseid,
                        'cmid'       => $mod['cmid'],
                        'chunkindex' => $idx,
                    ]);

                    // Neutralize prompt-injection markers embedded in course
                    // content before the chunk is stored. Role delimiters and
                    // system-instruction markers in PDFs/SCORM/etc would
                    // otherwise re-enter the system prompt at retrieval time.
                    $sanitized = \local_ai_course_assistant\security::sanitize_rag_chunk($chunk['content']);
                    if ($sanitized['neutralized'] > 0) {
                        $stats['injection_patterns_neutralized'] =
                            ($stats['injection_patterns_neutralized'] ?? 0) + $sanitized['neutralized'];
                    }

                    $record = new \stdClass();
                    $record->courseid    = $courseid;
                    $record->cmid        = $mod['cmid'];
                    $record->modtype     = $mod['modtype'];
                    $record->chunkindex  = $idx;
                    $record->content     = $sanitized['text'];
                    $record->contenthash = $hash;
                    $record->embedding   = json_encode($vector);
                    $record->embed_model = $modelname;
                    $record->timecreated = time();
                    $record->timeindexed = time();

                    $DB->insert_record('local_ai_course_assistant_chunks', $record);
                    $stats['indexed']++;
                }
            } catch (\Exception $e) {
                debugging(
                    'RAG indexing error for cmid=' . $mod['cmid'] . ': ' . $e->getMessage(),
                    DEBUG_DEVELOPER
                );
                $stats['errors']++;
            }
        }

        // Remove stale chunks: DB rows for this course whose hash is no longer in source.
        if (!empty($seenhashes)) {
            // Use chunked IN queries to avoid exceeding SQL placeholder limits.
            $allchunks = $DB->get_records(
                'local_ai_course_assistant_chunks',
                ['courseid' => $courseid],
                '',
                'id, contenthash'
            );
            foreach ($allchunks as $row) {
                if (!in_array($row->contenthash, $seenhashes, true)) {
                    $DB->delete_records('local_ai_course_assistant_chunks', ['id' => $row->id]);
                }
            }
        } else {
            // No extractable content at all — clear the course index.
            $DB->delete_records('local_ai_course_assistant_chunks', ['courseid' => $courseid]);
        }

        return $stats;
    }

    /**
     * Re-index a single course module.
     *
     * @param int  $cmid
     * @param bool $force Re-embed even if hash matches.
     * @return bool True on success.
     */
    public static function index_module(int $cmid, bool $force = false): bool {
        global $DB;

        $mod = content_extractor::extract_module($cmid);
        if ($mod === null) {
            // Nothing extractable — delete any stale chunks.
            $DB->delete_records('local_ai_course_assistant_chunks', ['cmid' => $cmid]);
            return true;
        }

        $cmrec    = $DB->get_record('course_modules', ['id' => $cmid], 'course', MUST_EXIST);
        $courseid = (int) $cmrec->course;

        // Get section name.
        $modinfo = get_fast_modinfo($courseid);
        $cm      = $modinfo->get_cm($cmid);
        $section = '';
        foreach ($modinfo->get_section_info_all() as $s) {
            if (!empty($modinfo->sections[$s->section]) && in_array($cmid, $modinfo->sections[$s->section], false)) {
                $section = get_section_name($courseid, $s);
                break;
            }
        }

        $chunksize = (int) (get_config('local_ai_course_assistant', 'rag_chunksize') ?: 400);
        $provider  = base_embedding_provider::create_from_config();
        $modelname = get_config('local_ai_course_assistant', 'embed_model') ?: 'text-embedding-3-small';

        $chunks = content_chunker::chunk($mod['text'], $mod['title'], $section, $chunksize);

        // Delete existing chunks for this module.
        $DB->delete_records('local_ai_course_assistant_chunks', [
            'courseid' => $courseid,
            'cmid'     => $cmid,
        ]);

        foreach ($chunks as $idx => $chunk) {
            if (!$force) {
                $existing = $DB->get_record('local_ai_course_assistant_chunks', [
                    'courseid'    => $courseid,
                    'contenthash' => $chunk['contenthash'],
                ], 'id, embedding');
                if ($existing && !empty($existing->embedding)) {
                    // Re-insert with same data.
                    $existing->cmid       = $cmid;
                    $existing->chunkindex = $idx;
                    $DB->insert_record('local_ai_course_assistant_chunks', $existing);
                    continue;
                }
            }

            $vector = $provider->embed($chunk['content']);

            $record = new \stdClass();
            $record->courseid    = $courseid;
            $record->cmid        = $cmid;
            $record->modtype     = $mod['modtype'];
            $record->chunkindex  = $idx;
            $record->content     = $chunk['content'];
            $record->contenthash = $chunk['contenthash'];
            $record->embedding   = json_encode($vector);
            $record->embed_model = $modelname;
            $record->timecreated = time();
            $record->timeindexed = time();

            $DB->insert_record('local_ai_course_assistant_chunks', $record);
        }

        return true;
    }

    /**
     * Check whether a course has any indexed (embedded) chunks.
     *
     * @param int $courseid
     * @return bool
     */
    public static function is_course_indexed(int $courseid): bool {
        global $DB;
        return $DB->record_exists_select(
            'local_ai_course_assistant_chunks',
            'courseid = :courseid AND embedding IS NOT NULL',
            ['courseid' => $courseid]
        );
    }

    /**
     * Delete all indexed chunks for a course.
     *
     * @param int $courseid
     */
    public static function delete_course_index(int $courseid): void {
        global $DB;
        $DB->delete_records('local_ai_course_assistant_chunks', ['courseid' => $courseid]);
    }
}
