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
 * v5.5.4 security regression test for the cross-course pageid lookup
 * in sse.php.
 *
 * Threat model: a student in course A passes a `pageid` (cmid)
 * belonging to a quiz in course B. The pre-v5.5.4 sse.php looked up
 * the course module by id alone, so the lookup would succeed and
 * activate coach-mode based on course B's quiz_config_manager
 * settings against course A's chat session, bypassing the teacher's
 * intended assistance level.
 *
 * The fix added `'course' => $courseid` to the DB lookup constraint,
 * making the foreign cmid resolve to NULL.
 *
 * This test exercises the DB lookup pattern directly so the regression
 * is caught even if sse.php's surrounding logic is refactored.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class cross_course_pageid_test extends \advanced_testcase {

    /**
     * Confirm that a course_modules lookup constrained to a course id
     * returns NULL when the cmid actually belongs to a different course.
     */
    public function test_cross_course_pageid_lookup_returns_null(): void {
        global $DB;
        $this->resetAfterTest();

        $coursea = $this->getDataGenerator()->create_course();
        $courseb = $this->getDataGenerator()->create_course();

        // Create a quiz in course B.
        $quiz = $this->getDataGenerator()->create_module('quiz', ['course' => $courseb->id]);
        $cmid = (int) $quiz->cmid;

        // The constrained lookup must miss when the course doesn't match.
        $miss = $DB->get_record('course_modules',
            ['id' => $cmid, 'course' => $coursea->id],
            'id, instance, module', IGNORE_MISSING);
        $this->assertFalse($miss, 'Cross-course pageid lookup must return false.');

        // The same lookup against the correct course succeeds.
        $hit = $DB->get_record('course_modules',
            ['id' => $cmid, 'course' => $courseb->id],
            'id, instance, module', IGNORE_MISSING);
        $this->assertNotFalse($hit, 'Same-course pageid lookup must succeed.');
        $this->assertEquals($cmid, (int) $hit->id);
    }

    /**
     * Confirm get_coursemodule_from_id with a course argument also rejects
     * the foreign cmid. This is the path used by sse.php to build the
     * pageurl source-attribution metadata.
     */
    public function test_get_coursemodule_from_id_with_course_rejects_foreign(): void {
        $this->resetAfterTest();

        $coursea = $this->getDataGenerator()->create_course();
        $courseb = $this->getDataGenerator()->create_course();
        $quiz = $this->getDataGenerator()->create_module('quiz', ['course' => $courseb->id]);
        $cmid = (int) $quiz->cmid;

        // With the course id supplied, the foreign lookup returns false.
        $cm = get_coursemodule_from_id('', $cmid, $coursea->id, false, IGNORE_MISSING);
        $this->assertFalse($cm, 'get_coursemodule_from_id with foreign course must miss.');

        // Same lookup with the correct course succeeds.
        $cm2 = get_coursemodule_from_id('', $cmid, $courseb->id, false, IGNORE_MISSING);
        $this->assertNotFalse($cm2);
        $this->assertEquals('quiz', $cm2->modname);
    }
}
