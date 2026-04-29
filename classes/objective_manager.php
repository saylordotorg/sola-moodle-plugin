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

use local_ai_course_assistant\provider\base_provider;

/**
 * Per-course learning objectives and student mastery tracking.
 *
 * Mastery model: exponentially weighted rolling accuracy with a Bayesian
 * Beta(prior_alpha, prior_beta) prior so a single attempt can't pin a
 * student at 0 or 1. Recent attempts weigh more. Threshold for "mastered"
 * is configurable.
 *
 * Objective sourcing: instructors rarely author from scratch. Most
 * Saylor courses already have objectives somewhere. detect_best_source()
 * walks an ordered list of candidates (Moodle competencies, course
 * summary text, section summaries + first-page content, LLM extraction)
 * and returns the first one that yields a usable list.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class objective_manager {

    public const TABLE_OBJS = 'local_ai_course_assistant_objs';
    public const TABLE_ATTS = 'local_ai_course_assistant_obj_att';

    /** Default decay factor: recent attempts weigh more than older ones. */
    private const DEFAULT_DECAY = 0.90;
    /** Default Bayesian prior (α, β) for the mastery estimator. */
    private const PRIOR_ALPHA = 2.0;
    private const PRIOR_BETA = 2.0;
    /** How many most-recent attempts feed the estimator by default. */
    private const DEFAULT_WINDOW = 8;
    /** Default mastery threshold. */
    private const DEFAULT_THRESHOLD = 0.85;
    /** Minimum attempts before the status can flip to "mastered". */
    private const MIN_ATTEMPTS_FOR_MASTERY = 3;
    /** v4.0 / M4 — Default half-life for the time-decay factor in days. */
    private const DEFAULT_DECAY_HALF_LIFE_DAYS = 30;

    // ------------------------------------------------------------------
    //  Feature gates
    // ------------------------------------------------------------------

    /**
     * Mastery tracking master switch for a course. Off by default so
     * courses without curated objectives never show partial data.
     *
     * @param int $courseid
     * @return bool
     */
    public static function is_enabled_for_course(int $courseid): bool {
        // v4.5.0: per-course override wins, else fall back to the site-wide
        // `mastery_enabled` default. Default off if neither is set.
        return feature_flags::resolve('mastery', $courseid);
    }

    /**
     * Whether to show the compact mastery chip in the widget. Off by
     * default; takes effect only when the master switch is on.
     *
     * @param int $courseid
     * @return bool
     */
    public static function is_chip_enabled_for_course(int $courseid): bool {
        if (!self::is_enabled_for_course($courseid)) {
            return false;
        }
        return (bool) get_config('local_ai_course_assistant', 'mastery_chip_enabled_course_' . $courseid);
    }

    /**
     * @param int  $courseid
     * @param bool $enabled
     */
    public static function set_enabled_for_course(int $courseid, bool $enabled): void {
        set_config('mastery_enabled_course_' . $courseid, $enabled ? 1 : 0, 'local_ai_course_assistant');
    }

    /**
     * @param int  $courseid
     * @param bool $enabled
     */
    public static function set_chip_enabled_for_course(int $courseid, bool $enabled): void {
        set_config('mastery_chip_enabled_course_' . $courseid, $enabled ? 1 : 0, 'local_ai_course_assistant');
    }

    /**
     * Whether the per-course Progress dashboard tab should render. Always
     * gated on the master switch so the tab cannot appear without mastery
     * tracking actively running.
     *
     * @param int $courseid
     * @return bool
     */
    public static function is_dashboard_enabled_for_course(int $courseid): bool {
        if (!self::is_enabled_for_course($courseid)) {
            return false;
        }
        return (bool) get_config('local_ai_course_assistant', 'mastery_dashboard_enabled_course_' . $courseid);
    }

    /**
     * @param int  $courseid
     * @param bool $enabled
     */
    public static function set_dashboard_enabled_for_course(int $courseid, bool $enabled): void {
        set_config('mastery_dashboard_enabled_course_' . $courseid, $enabled ? 1 : 0, 'local_ai_course_assistant');
    }

    // ------------------------------------------------------------------
    //  CRUD
    // ------------------------------------------------------------------

    /**
     * @param int $courseid
     * @return array[] Objective rows keyed by id, sorted by sortorder.
     */
    public static function list_for_course(int $courseid): array {
        global $DB;
        return $DB->get_records(self::TABLE_OBJS, ['courseid' => $courseid], 'sortorder ASC, id ASC');
    }

    /**
     * @param int $id
     * @return \stdClass|null
     */
    public static function get(int $id): ?\stdClass {
        global $DB;
        $rec = $DB->get_record(self::TABLE_OBJS, ['id' => $id]);
        return $rec ?: null;
    }

    /**
     * Create a new objective.
     *
     * @param int    $courseid
     * @param string $title
     * @param string $description
     * @param string $code
     * @param string $source       One of manual, competency, summary, section, llm.
     * @param string $externalref
     * @return int New objective id.
     */
    public static function create(
        int $courseid,
        string $title,
        string $description = '',
        string $code = '',
        string $source = 'manual',
        string $externalref = ''
    ): int {
        global $DB;
        $now = time();
        // Append to end unless the caller overrides later.
        $maxorder = (int) $DB->get_field_sql(
            'SELECT COALESCE(MAX(sortorder), -1) FROM {' . self::TABLE_OBJS . '} WHERE courseid = ?',
            [$courseid]
        );
        $record = (object) [
            'courseid' => $courseid,
            'sortorder' => $maxorder + 1,
            'code' => $code !== '' ? substr($code, 0, 40) : null,
            'title' => substr($title, 0, 255),
            'description' => $description !== '' ? $description : null,
            'source' => $source,
            'external_ref' => $externalref !== '' ? substr($externalref, 0, 64) : null,
            'timecreated' => $now,
            'timemodified' => $now,
        ];
        return (int) $DB->insert_record(self::TABLE_OBJS, $record);
    }

    /**
     * Partial update. Only `title`, `description`, `code`, `sortorder` are writable.
     *
     * @param int   $id
     * @param array $fields
     * @return bool
     */
    public static function update(int $id, array $fields): bool {
        global $DB;
        $allowed = ['title', 'description', 'code', 'sortorder'];
        $record = (object) ['id' => $id, 'timemodified' => time()];
        foreach ($allowed as $k) {
            if (array_key_exists($k, $fields)) {
                $record->$k = $fields[$k];
            }
        }
        return (bool) $DB->update_record(self::TABLE_OBJS, $record);
    }

    /**
     * Delete an objective and all its attempts.
     *
     * @param int $id
     */
    public static function delete(int $id): void {
        global $DB;
        $DB->delete_records(self::TABLE_ATTS, ['objectiveid' => $id]);
        $DB->delete_records(self::TABLE_OBJS, ['id' => $id]);
    }

    /**
     * Import a batch of objectives for a course.
     *
     * @param int    $courseid
     * @param string $source
     * @param array  $items     List of ['title'=>..., 'description'=>..., 'code'=>..., 'external_ref'=>...]
     * @return int[] New objective ids, in source order.
     */
    public static function import_batch(int $courseid, string $source, array $items): array {
        $ids = [];
        foreach ($items as $item) {
            $title = trim((string) ($item['title'] ?? ''));
            if ($title === '') {
                continue;
            }
            $ids[] = self::create(
                $courseid,
                $title,
                (string) ($item['description'] ?? ''),
                (string) ($item['code'] ?? ''),
                $source,
                (string) ($item['external_ref'] ?? '')
            );
        }
        return $ids;
    }

    // ------------------------------------------------------------------
    //  Attempts
    // ------------------------------------------------------------------

    /**
     * Record a mastery attempt.
     *
     * @param int        $userid
     * @param int        $courseid
     * @param int        $objectiveid
     * @param bool       $iscorrect
     * @param string     $source      quiz|conversation
     * @param float      $weight      Quiz attempts 1.0; classifier signals 0.3.
     * @param int|null   $msgid       Optional pointer to the originating message.
     * @param float|null $confidence  Classifier confidence (0..1) when source=conversation.
     * @return int Attempt row id.
     */
    public static function record_attempt(
        int $userid,
        int $courseid,
        int $objectiveid,
        bool $iscorrect,
        string $source = 'quiz',
        float $weight = 1.0,
        ?int $msgid = null,
        ?float $confidence = null
    ): int {
        global $DB;
        return (int) $DB->insert_record(self::TABLE_ATTS, (object) [
            'userid' => $userid,
            'courseid' => $courseid,
            'objectiveid' => $objectiveid,
            'source' => $source,
            'msgid' => $msgid,
            'iscorrect' => $iscorrect ? 1 : 0,
            'weight' => $weight,
            'confidence' => $confidence,
            'timecreated' => time(),
        ]);
    }

    /**
     * Get the most recent attempts for (userid, objectiveid), newest first.
     *
     * @param int $userid
     * @param int $objectiveid
     * @param int $limit
     * @return array
     */
    public static function get_attempts(int $userid, int $objectiveid, int $limit = 0): array {
        global $DB;
        $limit = $limit ?: self::DEFAULT_WINDOW;
        return $DB->get_records(
            self::TABLE_ATTS,
            ['userid' => $userid, 'objectiveid' => $objectiveid],
            'timecreated DESC',
            '*',
            0,
            $limit
        );
    }

    // ------------------------------------------------------------------
    //  Mastery math
    // ------------------------------------------------------------------

    /**
     * Compute mastery for one (userid, objectiveid).
     *
     * Formula:
     *   numerator   = prior_alpha + Σ w_i * iscorrect_i * decay^i
     *   denominator = prior_alpha + prior_beta + Σ w_i * decay^i
     *   score       = numerator / denominator
     * where i is the index from the most recent attempt (i=0).
     *
     * @param int $userid
     * @param int $objectiveid
     * @return array{score:float, attempts:int, status:string, last:int}
     */
    public static function compute_mastery(int $userid, int $objectiveid): array {
        $threshold = (float) (get_config('local_ai_course_assistant', 'mastery_threshold') ?: self::DEFAULT_THRESHOLD);
        $window = (int) (get_config('local_ai_course_assistant', 'mastery_window') ?: self::DEFAULT_WINDOW);

        $attempts = self::get_attempts($userid, $objectiveid, $window);
        $count = count($attempts);

        if ($count === 0) {
            return [
                'score' => 0.0,
                'attempts' => 0,
                'status' => 'not_started',
                'last' => 0,
            ];
        }

        $numerator = self::PRIOR_ALPHA;
        $denominator = self::PRIOR_ALPHA + self::PRIOR_BETA;
        $last = 0;
        $i = 0;
        foreach ($attempts as $att) {
            $decay = self::DEFAULT_DECAY ** $i;
            $w = (float) $att->weight * $decay;
            $denominator += $w;
            if ((int) $att->iscorrect === 1) {
                $numerator += $w;
            }
            if ($i === 0) {
                $last = (int) $att->timecreated;
            }
            $i++;
        }

        $score = $denominator > 0 ? ($numerator / $denominator) : 0.0;

        // v4.0 / M4 — Time-decay against the most recent attempt timestamp.
        // Multiplies the raw score by 0.5 ^ (days_since_last / half_life)
        // so a previously-mastered objective drops back to "learning" once
        // it has been long enough since the learner last touched it. Read-
        // side only; no schema change. Behind a feature flag, default off
        // in v4.0 — flipped default-on in v4.1 once tuning data lands.
        // Never demotes past 'learning': a learner who has any attempts at
        // all stays at least at 'learning', never returns to 'not_started'.
        $decayenabled = (bool) get_config('local_ai_course_assistant', 'mastery_decay_enabled');
        $decaymultiplier = 1.0;
        if ($decayenabled && $last > 0) {
            $halflifedays = (int) (get_config('local_ai_course_assistant', 'mastery_decay_half_life_days')
                ?: self::DEFAULT_DECAY_HALF_LIFE_DAYS);
            if ($halflifedays > 0) {
                $agedays = max(0, (time() - $last) / 86400);
                $decaymultiplier = pow(0.5, $agedays / $halflifedays);
            }
        }
        $adjusted = $score * $decaymultiplier;

        $status = 'learning';
        if ($count >= self::MIN_ATTEMPTS_FOR_MASTERY && $adjusted >= $threshold) {
            $status = 'mastered';
        }

        return [
            'score' => round($adjusted, 4),
            'raw_score' => round($score, 4),
            'attempts' => $count,
            'status' => $status,
            'last' => $last,
            'decay_multiplier' => round($decaymultiplier, 4),
        ];
    }

    /**
     * Per-course mastery summary for a student.
     *
     * @param int $userid
     * @param int $courseid
     * @return array{total:int, mastered:int, learning:int, not_started:int, objectives:array}
     */
    public static function compute_course_summary(int $userid, int $courseid): array {
        $objectives = self::list_for_course($courseid);
        $rows = [];
        $mastered = $learning = $notstarted = 0;
        foreach ($objectives as $obj) {
            $m = self::compute_mastery($userid, (int) $obj->id);
            $rows[] = [
                'objective' => $obj,
                'mastery' => $m,
            ];
            if ($m['status'] === 'mastered') {
                $mastered++;
            } else if ($m['status'] === 'learning') {
                $learning++;
            } else {
                $notstarted++;
            }
        }
        return [
            'total' => count($objectives),
            'mastered' => $mastered,
            'learning' => $learning,
            'not_started' => $notstarted,
            'objectives' => $rows,
        ];
    }

    /**
     * Return the N objectives the student should work on next. Preference
     * order: unstarted > lowest-score learning > least-recently-practiced
     * non-mastered. Mastered objectives are excluded.
     *
     * @param int $userid
     * @param int $courseid
     * @param int $limit
     * @return array List of ['objective'=>row, 'mastery'=>array] entries.
     */
    public static function get_weak_objectives(int $userid, int $courseid, int $limit = 3): array {
        $summary = self::compute_course_summary($userid, $courseid);
        $candidates = array_filter($summary['objectives'], function ($row) {
            return $row['mastery']['status'] !== 'mastered';
        });
        usort($candidates, function ($a, $b) {
            // Unstarted first.
            $aa = $a['mastery']['attempts'] === 0 ? 1 : 0;
            $ba = $b['mastery']['attempts'] === 0 ? 1 : 0;
            if ($aa !== $ba) {
                return $ba <=> $aa;
            }
            // Then lower score first.
            return $a['mastery']['score'] <=> $b['mastery']['score'];
        });
        return array_slice(array_values($candidates), 0, $limit);
    }

    /**
     * Build the system-prompt mastery block. Kept terse on purpose — SOLA
     * should read the state and steer, not dump it at the student.
     *
     * @param int $userid
     * @param int $courseid
     * @return string Markdown block to append to the system prompt, or '' if nothing to say.
     */
    public static function build_prompt_injection(int $userid, int $courseid): string {
        if (!self::is_enabled_for_course($courseid)) {
            return '';
        }
        $summary = self::compute_course_summary($userid, $courseid);
        if ($summary['total'] === 0) {
            return '';
        }
        // Index by id for prereq lookup.
        $byid = [];
        foreach ($summary['objectives'] as $row) {
            $byid[(int) $row['objective']->id] = $row;
        }
        $lines = [];
        foreach ($summary['objectives'] as $row) {
            $obj = $row['objective'];
            $m = $row['mastery'];
            $label = $obj->code ? "[{$obj->code}] {$obj->title}" : $obj->title;
            $lines[] = "- {$label} — {$m['status']}";
        }

        // v3.9.24: Prerequisite gap detection. For each weak objective
        // (learning or not_started) that has declared prereqs also in a
        // weak state, name the upstream so the assistant can route the
        // learner back to the prereq in natural language.
        $gaplines = [];
        foreach ($summary['objectives'] as $row) {
            $obj = $row['objective'];
            $m = $row['mastery'];
            if ($m['status'] === 'mastered') {
                continue;
            }
            $preqs = self::get_prereq_ids($obj);
            if (empty($preqs)) {
                continue;
            }
            $weakprereqs = [];
            foreach ($preqs as $pid) {
                if (isset($byid[$pid])) {
                    $pmat = $byid[$pid]['mastery'];
                    if ($pmat['status'] !== 'mastered') {
                        $pobj = $byid[$pid]['objective'];
                        $weakprereqs[] = $pobj->code ? "[{$pobj->code}] {$pobj->title}" : $pobj->title;
                    }
                }
            }
            if (!empty($weakprereqs)) {
                $label = $obj->code ? "[{$obj->code}] {$obj->title}" : $obj->title;
                $gaplines[] = "- {$label} is gated by: " . implode('; ', $weakprereqs);
            }
        }

        $block = "\n\n## Learning Objectives (mastery state)\n"
            . "This course has the following objectives. The student's status per objective is shown. "
            . "Use this to subtly steer the conversation — offer to practice underpracticed objectives, "
            . "connect answers to the relevant objective when it fits naturally, and vary your "
            . "follow-up suggestions to broaden coverage. Do NOT quote the status text, do NOT "
            . "read the list to the student, do NOT mention mastery percentages. If asked directly "
            . "how they're doing, summarise in warm prose ('you're solid on X and Y, still working "
            . "on Z') — never a table, never numbers.\n\n"
            . implode("\n", $lines);

        if (!empty($gaplines)) {
            $block .= "\n\n### Prerequisite gaps detected\n"
                . "The student is struggling with objectives whose upstream prerequisites are also weak. "
                . "When a topic the student is working on appears below, first offer to shore up the "
                . "upstream prerequisite before pushing deeper. Use natural phrasing ('this builds on X — "
                . "want to review that quickly before we continue?'), never technical prereq language.\n\n"
                . implode("\n", $gaplines);
        }
        return $block;
    }

    /**
     * Read the stored comma-separated prereq ids for an objective row and
     * return them as an int[]. v3.9.24.
     *
     * @param \stdClass $obj Objective row as returned by list_for_course / get.
     * @return int[]
     */
    public static function get_prereq_ids($obj): array {
        $raw = isset($obj->prereq_ids) ? trim((string) $obj->prereq_ids) : '';
        if ($raw === '') {
            return [];
        }
        $ids = [];
        foreach (explode(',', $raw) as $part) {
            $n = (int) trim($part);
            if ($n > 0) {
                $ids[] = $n;
            }
        }
        return array_values(array_unique($ids));
    }

    /**
     * Persist the upstream prereqs for an objective. Accepts an array of
     * ids and silently drops any that don't belong to the same course.
     *
     * @param int   $objectiveid
     * @param int[] $prereq_ids
     * @return bool True on success.
     */
    public static function set_prereq_ids(int $objectiveid, array $prereq_ids): bool {
        global $DB;
        $obj = $DB->get_record('local_ai_course_assistant_objs', ['id' => $objectiveid]);
        if (!$obj) {
            return false;
        }
        $clean = [];
        foreach ($prereq_ids as $pid) {
            $pid = (int) $pid;
            if ($pid <= 0 || $pid === $objectiveid) {
                continue;
            }
            $prow = $DB->get_record('local_ai_course_assistant_objs', ['id' => $pid]);
            if ($prow && (int) $prow->courseid === (int) $obj->courseid) {
                $clean[] = $pid;
            }
        }
        $clean = array_values(array_unique($clean));
        $DB->set_field('local_ai_course_assistant_objs', 'prereq_ids',
            implode(',', $clean), ['id' => $objectiveid]);
        return true;
    }

    // ------------------------------------------------------------------
    //  Source scanners (look-first authoring)
    // ------------------------------------------------------------------

    /**
     * Walk candidate sources in order and return the first one that yields
     * a usable list (at least 3 objectives).
     *
     * @param int $courseid
     * @return array{source:string, objectives:array}
     */
    public static function detect_best_source(int $courseid): array {
        $candidates = [
            ['competency', [self::class, 'find_moodle_competencies']],
            ['summary', [self::class, 'extract_from_course_summary']],
            ['section', [self::class, 'extract_from_section_content']],
        ];
        foreach ($candidates as [$source, $fn]) {
            try {
                $objectives = $fn($courseid);
            } catch (\Throwable $e) {
                debugging('objective source scan failed (' . $source . '): ' . $e->getMessage(), DEBUG_DEVELOPER);
                $objectives = [];
            }
            if (count($objectives) >= 3) {
                return ['source' => $source, 'objectives' => $objectives];
            }
        }
        return ['source' => 'none', 'objectives' => []];
    }

    /**
     * Read Moodle core competencies linked to the course.
     *
     * @param int $courseid
     * @return array
     */
    public static function find_moodle_competencies(int $courseid): array {
        global $DB;
        $dbman = $DB->get_manager();
        // Guard against installs where the competency subsystem is disabled.
        if (!$dbman->table_exists('competency_coursecomp') || !$dbman->table_exists('competency')) {
            return [];
        }
        $sql = "SELECT c.id, c.shortname, c.description, c.descriptionformat, c.idnumber
                  FROM {competency_coursecomp} cc
                  JOIN {competency} c ON c.id = cc.competencyid
                 WHERE cc.courseid = :courseid
              ORDER BY cc.sortorder ASC, c.id ASC";
        $rows = $DB->get_records_sql($sql, ['courseid' => $courseid]);
        $out = [];
        foreach ($rows as $r) {
            $desc = self::format_to_plain_text((string) $r->description, (int) ($r->descriptionformat ?? FORMAT_HTML));
            $out[] = [
                'title' => (string) $r->shortname,
                'description' => $desc,
                'code' => (string) ($r->idnumber ?? ''),
                'external_ref' => 'competency:' . $r->id,
            ];
        }
        return $out;
    }

    /**
     * Extract objectives from the course summary HTML.
     *
     * Looks for the common "Learning Objectives" / "Upon completion" /
     * "Students will" sections and pulls the list that follows.
     *
     * @param int $courseid
     * @return array
     */
    public static function extract_from_course_summary(int $courseid): array {
        global $DB;
        $course = $DB->get_record('course', ['id' => $courseid], 'id, summary, summaryformat', IGNORE_MISSING);
        if (!$course || trim((string) $course->summary) === '') {
            return [];
        }
        $plain = self::format_to_plain_text((string) $course->summary, (int) ($course->summaryformat ?? FORMAT_HTML));
        return self::extract_bullet_list_from_text($plain);
    }

    /**
     * Scan the first section summary and the first page/book content for
     * a bullet list following an objectives-style heading.
     *
     * @param int $courseid
     * @return array
     */
    public static function extract_from_section_content(int $courseid): array {
        global $DB;
        // First section summary.
        $section = $DB->get_record_sql(
            "SELECT id, summary, summaryformat
               FROM {course_sections}
              WHERE course = ? AND section >= 0
           ORDER BY section ASC",
            [$courseid],
            IGNORE_MULTIPLE
        );
        if ($section && trim((string) $section->summary) !== '') {
            $plain = self::format_to_plain_text((string) $section->summary, (int) ($section->summaryformat ?? FORMAT_HTML));
            $items = self::extract_bullet_list_from_text($plain);
            if (count($items) >= 3) {
                return $items;
            }
        }

        // First visible page or book in the course.
        try {
            $modinfo = get_fast_modinfo($courseid);
            foreach ($modinfo->get_cms() as $cm) {
                if (!$cm->uservisible || !in_array($cm->modname, ['page', 'book'], true)) {
                    continue;
                }
                $text = context_builder::get_module_content((int) $cm->id, 12000);
                if ($text === '') {
                    continue;
                }
                $items = self::extract_bullet_list_from_text($text);
                if (count($items) >= 3) {
                    return $items;
                }
            }
        } catch (\Throwable $e) {
            debugging('extract_from_section_content modinfo failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
        }

        return [];
    }

    /**
     * Ask the configured LLM to propose 6–12 objectives for the course.
     * Used as a last resort when no structured source is available.
     *
     * @param int $courseid
     * @return array
     */
    public static function extract_via_llm(int $courseid): array {
        $topics = context_builder::get_course_topics_text($courseid);
        if (trim($topics) === '') {
            return [];
        }
        $schema = [
            'name' => 'learning_objectives',
            'schema' => [
                'type' => 'object',
                'properties' => [
                    'objectives' => [
                        'type' => 'array',
                        'minItems' => 6,
                        'maxItems' => 12,
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'title' => ['type' => 'string'],
                                'description' => ['type' => 'string'],
                            ],
                            'required' => ['title', 'description'],
                            'additionalProperties' => false,
                        ],
                    ],
                ],
                'required' => ['objectives'],
                'additionalProperties' => false,
            ],
        ];
        $sys = "You are an instructional designer helping Saylor produce measurable, "
            . "observable learning objectives for an online college course. Given the course "
            . "structure below, propose between 6 and 12 objectives covering the breadth of the "
            . "course. Each objective should start with a Bloom-style verb (Describe, Explain, "
            . "Apply, Analyze, Evaluate, etc.), be specific to this course's content, and be "
            . "short enough to read in one line (under 140 characters for the title). Description "
            . "should be 1–2 sentences clarifying what mastery looks like.\n\n"
            . "## Course Structure\n{$topics}";
        try {
            $provider = base_provider::create_from_config($courseid);
            $response = $provider->chat_completion(
                $sys,
                [['role' => 'user', 'content' => 'Return the objectives now.']],
                ['response_schema' => $schema]
            );
        } catch (\Throwable $e) {
            debugging('LLM objective extraction failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
            return [];
        }
        $decoded = json_decode($response, true);
        if (!is_array($decoded) || empty($decoded['objectives'])) {
            return [];
        }
        $out = [];
        foreach ($decoded['objectives'] as $item) {
            $title = trim((string) ($item['title'] ?? ''));
            if ($title === '') {
                continue;
            }
            $out[] = [
                'title' => substr($title, 0, 255),
                'description' => trim((string) ($item['description'] ?? '')),
                'code' => '',
                'external_ref' => '',
            ];
        }
        return $out;
    }

    // ------------------------------------------------------------------
    //  Internal helpers
    // ------------------------------------------------------------------

    /**
     * Convert Moodle-formatted text to plain lines preserving list breaks.
     *
     * @param string $html
     * @param int    $format
     * @return string
     */
    private static function format_to_plain_text(string $html, int $format): string {
        if (trim($html) === '') {
            return '';
        }
        $rendered = format_text($html, $format, ['noclean' => true, 'para' => false]);
        $rendered = preg_replace('/<\s*br\s*\/?\s*>/i', "\n", $rendered);
        $rendered = preg_replace('/<\/(p|li|h[1-6]|div)>/i', "\n", $rendered);
        $rendered = preg_replace('/<li[^>]*>/i', "\n- ", $rendered);
        $plain = strip_tags($rendered);
        $plain = html_entity_decode($plain, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $plain = preg_replace('/[ \t]+/', ' ', $plain);
        $plain = preg_replace('/\n{2,}/', "\n\n", $plain);
        return trim($plain);
    }

    /**
     * Pull a bullet list that follows an objectives-style heading in text.
     *
     * Recognised headings (case-insensitive): "Learning Objectives",
     * "Course Objectives", "Upon completion", "By the end", "Students will",
     * "Learners will", "You will be able to".
     *
     * @param string $text
     * @return array
     */
    private static function extract_bullet_list_from_text(string $text): array {
        if (trim($text) === '') {
            return [];
        }
        $patterns = [
            '/learning\s+objectives?\s*:?/i',
            '/course\s+objectives?\s*:?/i',
            '/upon\s+completion[^\n]*:?/i',
            '/by\s+the\s+end[^\n]*:?/i',
            '/students?\s+will[^\n]*:?/i',
            '/learners?\s+will[^\n]*:?/i',
            '/you\s+will\s+be\s+able\s+to[^\n]*:?/i',
        ];
        $startpos = false;
        foreach ($patterns as $re) {
            if (preg_match($re, $text, $m, PREG_OFFSET_CAPTURE)) {
                $candidate = $m[0][1] + strlen($m[0][0]);
                if ($startpos === false || $candidate < $startpos) {
                    $startpos = $candidate;
                }
            }
        }
        if ($startpos === false) {
            // No heading — try to detect a standalone bulleted list near the top.
            $startpos = 0;
        }
        $tail = substr($text, $startpos);

        // Stop at the next markdown-style heading or "---" separator.
        $endmatch = preg_match('/\n(?:#{1,6}\s|---\s*\n)/', $tail, $m, PREG_OFFSET_CAPTURE);
        if ($endmatch) {
            $tail = substr($tail, 0, $m[0][1]);
        }

        $items = [];
        foreach (preg_split('/\n+/', $tail) as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }
            // Strip leading bullets, numbering, colons.
            if (preg_match('/^(?:[-*•·]|(\d+)[\.\)])\s+(.+)$/u', $line, $m)) {
                $body = trim($m[2] ?? $m[0]);
            } else {
                continue; // Non-list line: stop collecting.
            }
            // Skip sub-bullets that repeat a parent heading.
            if (preg_match('/^(learning|course)\s+objectives?/i', $body)) {
                continue;
            }
            if (mb_strlen($body) < 8 || mb_strlen($body) > 260) {
                continue;
            }
            $items[] = [
                'title' => $body,
                'description' => '',
                'code' => '',
                'external_ref' => '',
            ];
            if (count($items) >= 20) {
                break;
            }
        }
        return $items;
    }
}
