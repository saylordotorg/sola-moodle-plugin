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

defined('MOODLE_INTERNAL') || die();

/**
 * Spaced-repetition flashcards. Lite SM-2 with three self-grade buttons
 * (Again / Hard / Easy) instead of the canonical 0–5 scale; this matches
 * the affordances learners actually use and avoids decision fatigue.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class flashcard_manager {

    public const QUALITY_AGAIN = 1;  // Did not recall.
    public const QUALITY_HARD  = 3;  // Recalled with effort.
    public const QUALITY_EASY  = 5;  // Recalled fluently.

    public static function is_enabled_for_course(int $courseid): bool {
        return (bool) get_config('local_ai_course_assistant', 'flashcards_enabled_course_' . $courseid);
    }

    public static function set_enabled_for_course(int $courseid, bool $enabled): void {
        set_config('flashcards_enabled_course_' . $courseid, $enabled ? 1 : 0, 'local_ai_course_assistant');
    }

    /**
     * Persist a batch of {question, answer} cards. Called by the AI
     * extraction external function and by manual save flows.
     *
     * @param int    $userid
     * @param int    $courseid
     * @param int|null $cmid
     * @param array  $cards Each: ['question' => str, 'answer' => str]
     * @return int[] Inserted ids.
     */
    public static function save_batch(int $userid, int $courseid, ?int $cmid, array $cards): array {
        global $DB;
        $now = time();
        $ids = [];
        foreach ($cards as $card) {
            $q = trim((string) ($card['question'] ?? ''));
            $a = trim((string) ($card['answer'] ?? ''));
            if ($q === '' || $a === '') {
                continue;
            }
            $row = (object) [
                'userid'        => $userid,
                'courseid'      => $courseid,
                'cmid'          => $cmid,
                'question'      => $q,
                'answer'        => $a,
                'ease'          => 2.50,
                'interval_days' => 0,
                'repetitions'   => 0,
                'next_review'   => $now,  // Available for review immediately.
                'timecreated'   => $now,
                'timemodified'  => $now,
            ];
            $ids[] = (int) $DB->insert_record('local_ai_course_assistant_flashcards', $row);
        }
        return $ids;
    }

    /**
     * Cards due for review now or overdue. Sorted by overdue-first.
     *
     * @param int $userid
     * @param int $courseid
     * @param int $limit
     * @return array
     */
    public static function get_due(int $userid, int $courseid, int $limit = 25): array {
        global $DB;
        $now = time();
        return $DB->get_records_sql(
            "SELECT * FROM {local_ai_course_assistant_flashcards}
              WHERE userid = :userid AND courseid = :courseid
                AND next_review <= :now
              ORDER BY next_review ASC, id ASC",
            ['userid' => $userid, 'courseid' => $courseid, 'now' => $now],
            0, $limit
        );
    }

    /**
     * Apply an SM-2-lite review. Updates ease, interval, repetitions,
     * and next_review on the card.
     *
     * @param int $cardid
     * @param int $userid Caller — for ownership check.
     * @param int $quality One of QUALITY_AGAIN / HARD / EASY.
     * @return bool True on success.
     */
    public static function review(int $cardid, int $userid, int $quality): bool {
        global $DB;
        $card = $DB->get_record('local_ai_course_assistant_flashcards',
            ['id' => $cardid, 'userid' => $userid]);
        if (!$card) {
            return false;
        }
        $now = time();
        $reps = (int) $card->repetitions;
        $prev = max(1, (int) $card->interval_days);
        $ease = (float) $card->ease;

        if ($quality === self::QUALITY_AGAIN) {
            // Reset; surface again in 10 minutes.
            $card->repetitions = 0;
            $card->interval_days = 0;
            $card->next_review = $now + 600;
            // Ease decays slightly so chronic miss lengthens future intervals.
            $card->ease = max(1.30, $ease - 0.20);
        } else {
            $newrep = $reps + 1;
            if ($quality === self::QUALITY_HARD) {
                $newease = max(1.30, $ease - 0.15);
                if ($newrep === 1) { $iv = 1; }
                else if ($newrep === 2) { $iv = 4; }
                else { $iv = (int) ceil($prev * ($newease - 0.15)); }
            } else { // QUALITY_EASY
                $newease = $ease + 0.15;
                if ($newrep === 1) { $iv = 4; }
                else if ($newrep === 2) { $iv = 7; }
                else { $iv = (int) ceil($prev * ($newease + 0.15)); }
            }
            $card->repetitions = $newrep;
            $card->interval_days = max(1, $iv);
            $card->ease = $newease;
            $card->next_review = $now + ($card->interval_days * 86400);
        }
        $card->timemodified = $now;
        $DB->update_record('local_ai_course_assistant_flashcards', $card);
        return true;
    }

    public static function delete_user_data(int $userid): void {
        global $DB;
        $DB->delete_records('local_ai_course_assistant_flashcards', ['userid' => $userid]);
    }
}
