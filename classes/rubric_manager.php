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
 * Rubric manager — handles practice scoring rubric CRUD and score storage.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class rubric_manager {

    /** @var string Table name for rubrics. */
    private const TABLE_RUBRICS = 'local_ai_course_assistant_rubrics';

    /** @var string Table name for practice scores. */
    private const TABLE_SCORES = 'local_ai_course_assistant_practice_scores';

    /** @var array Default conversation practice rubric criteria. */
    const DEFAULT_CONVERSATION_CRITERIA = [
        [
            'name' => 'Fluency & Coherence',
            'description' => 'How smoothly and logically did the student express ideas?',
            'max_score' => 5,
        ],
        [
            'name' => 'Grammar & Sentence Structure',
            'description' => 'How accurately did the student use grammar?',
            'max_score' => 5,
        ],
        [
            'name' => 'Vocabulary Range',
            'description' => 'How varied and appropriate was the student\'s word choice?',
            'max_score' => 5,
        ],
        [
            'name' => 'Comprehension',
            'description' => 'How well did the student understand and respond to prompts?',
            'max_score' => 5,
        ],
        [
            'name' => 'Engagement & Initiative',
            'description' => 'How actively did the student participate and ask questions?',
            'max_score' => 5,
        ],
    ];

    /** @var array Default pronunciation practice rubric criteria. */
    const DEFAULT_PRONUNCIATION_CRITERIA = [
        [
            'name' => 'Sound Accuracy',
            'description' => 'How correctly did the student produce individual sounds?',
            'max_score' => 5,
        ],
        [
            'name' => 'Stress & Rhythm',
            'description' => 'How well did the student use word and sentence stress?',
            'max_score' => 5,
        ],
        [
            'name' => 'Intonation',
            'description' => 'How natural was the student\'s pitch pattern?',
            'max_score' => 5,
        ],
        [
            'name' => 'Clarity',
            'description' => 'How easily could a native speaker understand the student?',
            'max_score' => 5,
        ],
    ];

    /**
     * Get the active rubric for a course and type.
     *
     * Checks for a course-level rubric first, then falls back to the global default (courseid=0).
     *
     * @param int $courseid
     * @param string $type 'conversation' or 'pronunciation'
     * @return object|null Rubric record with decoded criteria, or null if none found.
     */
    public static function get_active_rubric(int $courseid, string $type): ?object {
        global $DB;

        // Try course-specific first.
        $rubric = $DB->get_record(self::TABLE_RUBRICS, [
            'courseid' => $courseid,
            'type' => $type,
            'active' => 1,
        ]);

        // Fall back to global default.
        if (!$rubric) {
            $rubric = $DB->get_record(self::TABLE_RUBRICS, [
                'courseid' => 0,
                'type' => $type,
                'active' => 1,
            ]);
        }

        if (!$rubric) {
            return null;
        }

        $rubric->criteria = json_decode($rubric->criteria, true);
        return $rubric;
    }

    /**
     * Create a rubric.
     *
     * Deactivates any other active rubric for the same courseid and type first.
     *
     * @param int $courseid 0 for global default, or a specific course ID.
     * @param string $type 'conversation' or 'pronunciation'.
     * @param string $title Rubric title.
     * @param array $criteria Array of criterion definitions.
     * @return int The new rubric ID.
     */
    public static function create_rubric(int $courseid, string $type, string $title, array $criteria): int {
        global $DB;

        $now = time();

        // Deactivate any existing active rubric for this scope and type.
        $DB->set_field(self::TABLE_RUBRICS, 'active', 0, [
            'courseid' => $courseid,
            'type' => $type,
            'active' => 1,
        ]);

        $record = new \stdClass();
        $record->courseid = $courseid;
        $record->type = $type;
        $record->title = $title;
        $record->criteria = json_encode($criteria);
        $record->active = 1;
        $record->timecreated = $now;
        $record->timemodified = $now;

        return $DB->insert_record(self::TABLE_RUBRICS, $record);
    }

    /**
     * Update an existing rubric.
     *
     * @param int $rubricid
     * @param string $title
     * @param array $criteria
     * @param bool $active
     */
    public static function update_rubric(int $rubricid, string $title, array $criteria, bool $active): void {
        global $DB;

        $record = $DB->get_record(self::TABLE_RUBRICS, ['id' => $rubricid], '*', MUST_EXIST);

        // If activating this rubric, deactivate others for the same scope and type.
        if ($active) {
            $DB->set_field(self::TABLE_RUBRICS, 'active', 0, [
                'courseid' => $record->courseid,
                'type' => $record->type,
                'active' => 1,
            ]);
        }

        $record->title = $title;
        $record->criteria = json_encode($criteria);
        $record->active = $active ? 1 : 0;
        $record->timemodified = time();

        $DB->update_record(self::TABLE_RUBRICS, $record);
    }

    /**
     * Ensure the global default rubrics exist.
     *
     * Creates both conversation and pronunciation defaults if no active global rubric
     * is found for each type.
     */
    public static function ensure_default_rubrics(): void {
        global $DB;

        $conversationexists = $DB->record_exists(self::TABLE_RUBRICS, [
            'courseid' => 0,
            'type' => 'conversation',
            'active' => 1,
        ]);

        if (!$conversationexists) {
            self::create_rubric(0, 'conversation', 'Conversation Practice Rubric', self::DEFAULT_CONVERSATION_CRITERIA);
        }

        $pronunciationexists = $DB->record_exists(self::TABLE_RUBRICS, [
            'courseid' => 0,
            'type' => 'pronunciation',
            'active' => 1,
        ]);

        if (!$pronunciationexists) {
            self::create_rubric(0, 'pronunciation', 'Pronunciation Practice Rubric', self::DEFAULT_PRONUNCIATION_CRITERIA);
        }
    }

    /**
     * Save a practice score.
     *
     * @param int $rubricid
     * @param int $userid
     * @param int $courseid
     * @param string $sessiontype 'conversation' or 'pronunciation'
     * @param array $scores Array of per-criterion scores [{name, score, feedback}, ...]
     * @param int $overallscore Overall score for the session.
     * @param string $aifeedback AI-generated feedback text.
     * @param int $duration Session duration in seconds.
     * @return int The new score record ID.
     */
    public static function save_score(int $rubricid, int $userid, int $courseid, string $sessiontype,
            array $scores, int $overallscore, string $aifeedback, int $duration): int {
        global $DB;

        $record = new \stdClass();
        $record->rubricid = $rubricid;
        $record->userid = $userid;
        $record->courseid = $courseid;
        $record->session_type = $sessiontype;
        $record->scores = json_encode($scores);
        $record->overall_score = $overallscore;
        $record->ai_feedback = $aifeedback;
        $record->session_duration = $duration;
        $record->timecreated = time();

        return $DB->insert_record(self::TABLE_SCORES, $record);
    }

    /**
     * Get the active rubric for a given course and type (alias used by admin page).
     *
     * @param int $courseid
     * @param string $type
     * @return object|null
     */
    public static function get_rubric(int $courseid, string $type): ?object {
        return self::get_active_rubric($courseid, $type);
    }

    /**
     * Delete rubric(s) for a given course and type.
     *
     * @param int $courseid
     * @param string $type
     */
    public static function delete_rubric(int $courseid, string $type): void {
        global $DB;
        $DB->delete_records(self::TABLE_RUBRICS, [
            'courseid' => $courseid,
            'type' => $type,
        ]);
    }

    /**
     * Ensure the default rubric exists for a single type.
     *
     * @param string $type 'conversation' or 'pronunciation'
     */
    public static function ensure_default_rubric(string $type): void {
        global $DB;
        $exists = $DB->record_exists(self::TABLE_RUBRICS, [
            'courseid' => 0,
            'type' => $type,
            'active' => 1,
        ]);
        if (!$exists) {
            $criteria = self::get_default_criteria($type);
            $title = $type === 'pronunciation' ? 'Pronunciation Practice Rubric' : 'Conversation Practice Rubric';
            self::create_rubric(0, $type, $title, $criteria);
        }
    }

    /**
     * Get the built-in default criteria for a type.
     *
     * @param string $type
     * @return array
     */
    public static function get_default_criteria(string $type): array {
        return $type === 'pronunciation' ? self::DEFAULT_PRONUNCIATION_CRITERIA : self::DEFAULT_CONVERSATION_CRITERIA;
    }

    /**
     * Get a user's practice scores for a course.
     *
     * @param int $userid
     * @param int $courseid
     * @param string $type Filter by session type ('' for all).
     * @param int $limit Maximum number of records to return.
     * @return array Array of score records with decoded scores.
     */
    public static function get_user_scores(int $userid, int $courseid, string $type = '', int $limit = 10): array {
        global $DB;

        $params = [
            'userid' => $userid,
            'courseid' => $courseid,
        ];

        $typeclause = '';
        if ($type !== '') {
            $typeclause = ' AND s.session_type = :session_type';
            $params['session_type'] = $type;
        }

        $sql = "SELECT s.*
                  FROM {" . self::TABLE_SCORES . "} s
                 WHERE s.userid = :userid
                   AND s.courseid = :courseid" . $typeclause .
               " ORDER BY s.timecreated DESC";

        $records = $DB->get_records_sql($sql, $params, 0, $limit);

        foreach ($records as $record) {
            $record->scores = json_decode($record->scores, true);
        }

        return array_values($records);
    }
}
