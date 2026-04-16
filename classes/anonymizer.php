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
 * Student identity anonymizer for analytics and Meta-AI Chat.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class anonymizer {

    /**
     * Return a consistent pseudonym for a student. Same user ID always
     * produces the same label so cross-references within a single analytics
     * session are meaningful ("Student 4217 asked X and later asked Y").
     *
     * @param int $userid Moodle user ID.
     * @return string e.g. "Student 4217"
     */
    public static function name(int $userid): string {
        return 'Student ' . (abs(crc32('sola_anon_' . $userid)) % 9999 + 1);
    }
}
