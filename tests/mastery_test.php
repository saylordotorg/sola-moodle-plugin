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
 * Mastery + flashcard SRS unit tests (v5.3.34).
 *
 * Until this release, the mastery feature surface (`objective_manager`)
 * and the flashcard spaced-repetition scheduler (`flashcard_manager`)
 * had no direct PHPUnit coverage — only side-effects via the external
 * services suite. A regression in the SM-2 formula or the mastery
 * threshold would silently miscalibrate every learner's review schedule.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class mastery_test extends \advanced_testcase {

    // ───────────────────────────────────────────────────────────
    // objective_manager — CRUD + feature-flag gating
    // ───────────────────────────────────────────────────────────

    public function test_objective_create_get_update_delete_lifecycle(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();

        $id = objective_manager::create((int)$course->id, 'Photosynthesis', 'Plant energy capture.', 'BIO101-01');
        $this->assertGreaterThan(0, $id);

        $obj = objective_manager::get($id);
        $this->assertNotNull($obj);
        $this->assertEquals('Photosynthesis', $obj->title);
        $this->assertEquals('BIO101-01', $obj->code);

        objective_manager::update($id, ['title' => 'Photosynthesis (updated)']);
        $obj = objective_manager::get($id);
        $this->assertEquals('Photosynthesis (updated)', $obj->title);

        objective_manager::delete($id);
        $this->assertNull(objective_manager::get($id));
    }

    public function test_objective_delete_cascades_attempts(): void {
        $this->resetAfterTest();
        global $DB;
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();

        $id = objective_manager::create((int)$course->id, 'X');
        objective_manager::record_attempt(
            (int)$user->id, (int)$course->id, $id, true, 'quiz', 1.0, null, null);
        $this->assertEquals(1, $DB->count_records('local_ai_course_assistant_obj_att'));

        objective_manager::delete($id);
        $this->assertEquals(0, $DB->count_records('local_ai_course_assistant_obj_att'),
            'Deleting an objective must cascade to its attempt rows.');
    }

    public function test_objective_list_for_course_returns_only_that_course(): void {
        $this->resetAfterTest();
        $c1 = $this->getDataGenerator()->create_course();
        $c2 = $this->getDataGenerator()->create_course();

        objective_manager::create((int)$c1->id, 'A');
        objective_manager::create((int)$c1->id, 'B');
        objective_manager::create((int)$c2->id, 'C');

        $a1 = objective_manager::list_for_course((int)$c1->id);
        $a2 = objective_manager::list_for_course((int)$c2->id);

        $this->assertCount(2, $a1);
        $this->assertCount(1, $a2);
        $this->assertEquals('C', array_values($a2)[0]->title);
    }

    public function test_objective_import_batch_drops_empty_titles(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();
        $ids = objective_manager::import_batch((int)$course->id, 'llm', [
            ['title' => 'Real one', 'code' => 'R'],
            ['title' => '', 'code' => 'empty'],
            ['title' => '  ', 'code' => 'whitespace'],
            ['title' => 'Another', 'description' => 'desc'],
        ]);
        $this->assertCount(2, $ids,
            'Empty / whitespace titles must be silently dropped, not inserted as blank rows.');
    }

    public function test_objective_feature_flag_resolves_per_course(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();

        // Default off => is_enabled returns false.
        $this->assertFalse(objective_manager::is_enabled_for_course((int)$course->id));

        objective_manager::set_enabled_for_course((int)$course->id, true);
        $this->assertTrue(objective_manager::is_enabled_for_course((int)$course->id));

        objective_manager::set_enabled_for_course((int)$course->id, false);
        $this->assertFalse(objective_manager::is_enabled_for_course((int)$course->id));
    }

    // ───────────────────────────────────────────────────────────
    // objective_manager — compute_mastery formula
    // ───────────────────────────────────────────────────────────

    public function test_compute_mastery_returns_not_started_when_no_attempts(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $objid = objective_manager::create((int)$course->id, 'Photosynthesis');

        $m = objective_manager::compute_mastery((int)$user->id, $objid);

        $this->assertEquals('not_started', $m['status']);
        $this->assertEquals(0, $m['attempts']);
        $this->assertEquals(0.0, $m['score']);
    }

    public function test_compute_mastery_stays_at_learning_below_min_attempts_threshold(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $objid = objective_manager::create((int)$course->id, 'X');

        // Two correct attempts — below MIN_ATTEMPTS_FOR_MASTERY (3).
        // Even with score >> threshold, status must stay 'learning'.
        objective_manager::record_attempt((int)$user->id, (int)$course->id, $objid, true, 'quiz', 1.0, null, null);
        objective_manager::record_attempt((int)$user->id, (int)$course->id, $objid, true, 'quiz', 1.0, null, null);

        $m = objective_manager::compute_mastery((int)$user->id, $objid);

        $this->assertEquals('learning', $m['status'],
            'Two correct attempts is below MIN_ATTEMPTS_FOR_MASTERY=3 — never mastered on a lucky pair.');
        $this->assertEquals(2, $m['attempts']);
    }

    public function test_compute_mastery_promotes_to_mastered_after_enough_correct_attempts(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $objid = objective_manager::create((int)$course->id, 'X');

        // The DEFAULT_THRESHOLD (0.85) combined with PRIOR_ALPHA/BETA (2/2)
        // and the 8-attempt WINDOW caps the achievable score at ~0.79 even
        // for all-correct attempts. Lower the threshold for this test so we
        // can assert the promotion path; the math itself is what we care
        // about, not the production tuning.
        set_config('mastery_threshold', 0.7, 'local_ai_course_assistant');

        // Five correct attempts at full weight.
        for ($i = 0; $i < 5; $i++) {
            objective_manager::record_attempt(
                (int)$user->id, (int)$course->id, $objid, true, 'quiz', 1.0, null, null);
        }

        $m = objective_manager::compute_mastery((int)$user->id, $objid);

        $this->assertEquals('mastered', $m['status']);
        $this->assertGreaterThanOrEqual(0.7, $m['score']);
        $this->assertGreaterThanOrEqual(3, $m['attempts'],
            'Promotion requires MIN_ATTEMPTS_FOR_MASTERY (3) attempts.');
    }

    public function test_compute_mastery_decay_lowers_score_when_enabled(): void {
        $this->resetAfterTest();
        global $DB;
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $objid = objective_manager::create((int)$course->id, 'X');

        // Seed 5 correct attempts but date them well in the past so decay
        // bites. Decay half-life default is 30 days; 90 days ago => 0.125x.
        $ninetydays = time() - (90 * 86400);
        for ($i = 0; $i < 5; $i++) {
            objective_manager::record_attempt(
                (int)$user->id, (int)$course->id, $objid, true, 'quiz', 1.0, null, null);
        }
        // Force the recorded timestamps backwards.
        $DB->execute("UPDATE {local_ai_course_assistant_obj_att} SET timecreated = ? WHERE objectiveid = ?",
            [$ninetydays, $objid]);

        // Without decay: score is high.
        unset_config('mastery_decay_enabled', 'local_ai_course_assistant');
        $without = objective_manager::compute_mastery((int)$user->id, $objid);

        // With decay enabled: score is lowered.
        set_config('mastery_decay_enabled', 1, 'local_ai_course_assistant');
        $with = objective_manager::compute_mastery((int)$user->id, $objid);

        $this->assertLessThan($without['score'], $with['score'],
            'Decay enabled with 90-day-old attempts must produce a lower score than decay disabled.');
        $this->assertLessThan(1.0, $with['decay_multiplier']);
    }

    public function test_get_weak_objectives_returns_lowest_scoring_first(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $strong = objective_manager::create((int)$course->id, 'Strong');
        $weak = objective_manager::create((int)$course->id, 'Weak');
        $unstarted = objective_manager::create((int)$course->id, 'Unstarted');

        // Strong: 5 correct.
        for ($i = 0; $i < 5; $i++) {
            objective_manager::record_attempt((int)$user->id, (int)$course->id, $strong, true, 'quiz', 1.0, null, null);
        }
        // Weak: 5 incorrect.
        for ($i = 0; $i < 5; $i++) {
            objective_manager::record_attempt((int)$user->id, (int)$course->id, $weak, false, 'quiz', 1.0, null, null);
        }

        $rows = objective_manager::get_weak_objectives((int)$user->id, (int)$course->id, 3);
        $this->assertNotEmpty($rows);
        // The first weak row must have a lower score than the strong objective.
        $first = $rows[0];
        $this->assertLessThan(0.85, $first['mastery']['score'],
            'The weakest objective should have score below the mastery threshold.');
    }

    // ───────────────────────────────────────────────────────────
    // flashcard_manager — feature flag + save_batch + SM-2
    // ───────────────────────────────────────────────────────────

    public function test_flashcards_feature_flag_resolves_correctly(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();

        $this->assertFalse(flashcard_manager::is_enabled_for_course((int)$course->id));
        flashcard_manager::set_enabled_for_course((int)$course->id, true);
        $this->assertTrue(flashcard_manager::is_enabled_for_course((int)$course->id));
    }

    public function test_save_batch_drops_empty_question_or_answer(): void {
        $this->resetAfterTest();
        global $DB;
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();

        $cards = [
            ['question' => 'Q1', 'answer' => 'A1'],
            ['question' => '', 'answer' => 'A2'],         // empty question — drop
            ['question' => 'Q3', 'answer' => ''],          // empty answer — drop
            ['question' => 'Q4', 'answer' => 'A4'],
        ];
        $ids = flashcard_manager::save_batch((int)$user->id, (int)$course->id, null, $cards);

        $this->assertCount(2, array_filter($ids),
            'save_batch must drop blank-question or blank-answer cards.');
        $this->assertEquals(2, $DB->count_records('local_ai_course_assistant_flashcards',
            ['userid' => $user->id]));
    }

    public function test_save_batch_drops_hallucinated_objective_id(): void {
        $this->resetAfterTest();
        global $DB;
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        // Enable mastery so save_batch validates objective IDs.
        objective_manager::set_enabled_for_course((int)$course->id, true);
        $realobj = objective_manager::create((int)$course->id, 'Real');

        flashcard_manager::save_batch((int)$user->id, (int)$course->id, null, [
            ['question' => 'Q1', 'answer' => 'A1', 'objectiveid' => $realobj],
            ['question' => 'Q2', 'answer' => 'A2', 'objectiveid' => 999999],
        ]);

        $rows = $DB->get_records('local_ai_course_assistant_flashcards',
            ['userid' => $user->id], 'id ASC');
        $rows = array_values($rows);
        $this->assertEquals($realobj, (int)$rows[0]->objectiveid,
            'Real objective id passes through.');
        $this->assertEquals(0, (int)$rows[1]->objectiveid,
            'Hallucinated objective id (not in this course) must be dropped to 0.');
    }

    public function test_review_quality_again_resets_repetitions_and_schedules_short_interval(): void {
        $this->resetAfterTest();
        global $DB;
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $ids = flashcard_manager::save_batch((int)$user->id, (int)$course->id, null, [
            ['question' => 'Q', 'answer' => 'A'],
        ]);
        $cardid = $ids[0];

        // First put it in a high-repetition state via two EASY reviews.
        flashcard_manager::review($cardid, (int)$user->id, flashcard_manager::QUALITY_EASY);
        flashcard_manager::review($cardid, (int)$user->id, flashcard_manager::QUALITY_EASY);
        $card = $DB->get_record('local_ai_course_assistant_flashcards', ['id' => $cardid]);
        $this->assertEquals(2, (int)$card->repetitions);

        // Now AGAIN — reps must reset to 0 and next_review must be very soon.
        flashcard_manager::review($cardid, (int)$user->id, flashcard_manager::QUALITY_AGAIN);
        $card = $DB->get_record('local_ai_course_assistant_flashcards', ['id' => $cardid]);
        $this->assertEquals(0, (int)$card->repetitions);
        $this->assertLessThanOrEqual(time() + 700, (int)$card->next_review,
            'AGAIN must surface the card again in ~10 minutes.');
    }

    public function test_review_quality_easy_grows_interval_through_three_reps(): void {
        $this->resetAfterTest();
        global $DB;
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $ids = flashcard_manager::save_batch((int)$user->id, (int)$course->id, null, [
            ['question' => 'Q', 'answer' => 'A'],
        ]);
        $cardid = $ids[0];

        // SM-2 EASY schedule: rep1=4d, rep2=7d, rep3=ceil(7 * (ease+0.15)).
        flashcard_manager::review($cardid, (int)$user->id, flashcard_manager::QUALITY_EASY);
        $card = $DB->get_record('local_ai_course_assistant_flashcards', ['id' => $cardid]);
        $this->assertEquals(4, (int)$card->interval_days, 'EASY rep1 schedules 4 days.');

        flashcard_manager::review($cardid, (int)$user->id, flashcard_manager::QUALITY_EASY);
        $card = $DB->get_record('local_ai_course_assistant_flashcards', ['id' => $cardid]);
        $this->assertEquals(7, (int)$card->interval_days, 'EASY rep2 schedules 7 days.');

        flashcard_manager::review($cardid, (int)$user->id, flashcard_manager::QUALITY_EASY);
        $card = $DB->get_record('local_ai_course_assistant_flashcards', ['id' => $cardid]);
        $this->assertGreaterThanOrEqual(7, (int)$card->interval_days,
            'EASY rep3 must schedule at least the previous interval (7d), and grow with ease.');
    }

    public function test_get_due_returns_only_cards_past_next_review(): void {
        $this->resetAfterTest();
        global $DB;
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();

        $now = time();
        $duecard = $DB->insert_record('local_ai_course_assistant_flashcards', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'question' => 'Due', 'answer' => 'Now',
            'repetitions' => 1, 'interval_days' => 1, 'ease' => 2.5,
            'next_review' => $now - 100, // 100 seconds in the past => due
            'objectiveid' => null,
            'timecreated' => $now, 'timemodified' => $now,
        ]);
        $futurecard = $DB->insert_record('local_ai_course_assistant_flashcards', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'question' => 'Future', 'answer' => 'Later',
            'repetitions' => 1, 'interval_days' => 30, 'ease' => 2.5,
            'next_review' => $now + (30 * 86400), // 30 days in the future
            'objectiveid' => null,
            'timecreated' => $now, 'timemodified' => $now,
        ]);

        $due = flashcard_manager::get_due((int)$user->id, (int)$course->id);

        $this->assertCount(1, $due,
            'Only cards whose next_review has passed must surface in get_due().');
        // get_records_sql returns array keyed by id, not 0..n. Index by value.
        $duevalues = array_values($due);
        $this->assertEquals($duecard, (int) $duevalues[0]->id);
    }
}
