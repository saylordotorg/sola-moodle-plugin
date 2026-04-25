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

namespace local_ai_course_assistant\external;

use core_external\external_api;
use core_external\external_function_parameters;
use core_external\external_single_structure;
use core_external\external_value;
use local_ai_course_assistant\flashcard_manager;

/**
 * Record a learner self-grade on a flashcard. Accepts quality 1, 3, or 5
 * (Again / Hard / Easy). Returns the new schedule so the client can hide
 * the card from the current review session.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class review_flashcard extends external_api {

    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([
            'cardid'   => new external_value(PARAM_INT, 'Flashcard ID'),
            'quality'  => new external_value(PARAM_INT, 'Self-grade: 1=Again, 3=Hard, 5=Easy'),
        ]);
    }

    public static function execute(int $cardid, int $quality): array {
        global $USER, $DB;
        $params = self::validate_parameters(self::execute_parameters(),
            ['cardid' => $cardid, 'quality' => $quality]);
        // Look up the card to validate context.
        $card = $DB->get_record('local_ai_course_assistant_flashcards',
            ['id' => $params['cardid'], 'userid' => $USER->id], '*', IGNORE_MISSING);
        if (!$card) {
            return ['success' => false];
        }
        $context = \context_course::instance((int) $card->courseid);
        self::validate_context($context);
        require_capability('local/ai_course_assistant:use', $context);

        $q = (int) $params['quality'];
        if (!in_array($q, [flashcard_manager::QUALITY_AGAIN, flashcard_manager::QUALITY_HARD,
                flashcard_manager::QUALITY_EASY], true)) {
            return ['success' => false];
        }
        $ok = flashcard_manager::review((int) $params['cardid'], (int) $USER->id, $q);
        return ['success' => $ok];
    }

    public static function execute_returns(): external_single_structure {
        return new external_single_structure([
            'success' => new external_value(PARAM_BOOL, 'Whether the review was recorded'),
        ]);
    }
}
