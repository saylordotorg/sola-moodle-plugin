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
 * Manages student learning profiles for personalized tutoring.
 *
 * After every N messages (configurable, default 10), SOLA generates a
 * short profile summary using the LLM: strengths, weaknesses, learning
 * style, interests, and preferred explanation depth. The profile is
 * injected into the system prompt so SOLA can personalize responses
 * without sending the full conversation history.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class student_profile_manager {

    private const PROFILE_PROMPT = <<<'PROMPT'
You are analyzing a student's conversation history with an AI learning assistant. Based on the messages below, create a brief student learning profile in exactly this format:

**Strengths:** [topics/skills the student demonstrates understanding of]
**Weaknesses:** [topics/skills the student struggles with or asks about repeatedly]
**Learning style:** [how the student prefers to learn: examples, definitions, visual, step-by-step, etc.]
**Interests:** [topics the student shows enthusiasm about or asks about voluntarily]
**Depth preference:** [surface/moderate/deep — how much detail the student typically wants]
**Mood and tone:** [encouraging words that work, how formal/casual the student prefers]

Keep the profile under 200 words. Be specific to this student and course. This profile will be used to personalize future responses.
PROMPT;

    /**
     * Get the profile for a student in a course.
     *
     * @param int $userid
     * @param int $courseid
     * @return string|null Profile text, or null if none exists.
     */
    public static function get_profile(int $userid, int $courseid): ?string {
        global $DB;
        $record = $DB->get_record('local_ai_course_assistant_profiles', [
            'userid' => $userid,
            'courseid' => $courseid,
        ]);
        return $record ? $record->profile_summary : null;
    }

    /**
     * Check whether the profile needs regenerating based on message count.
     *
     * @param int $userid
     * @param int $courseid
     * @return bool True if the profile should be regenerated.
     */
    public static function needs_update(int $userid, int $courseid): bool {
        global $DB;

        $interval = (int) (get_config('local_ai_course_assistant', 'profile_update_interval') ?: 10);
        if ($interval <= 0) {
            return false;
        }

        $msgcount = $DB->count_records_select(
            'local_ai_course_assistant_msgs',
            "userid = :userid AND courseid = :courseid AND role = 'user'",
            ['userid' => $userid, 'courseid' => $courseid]
        );

        if ($msgcount < $interval) {
            return false;
        }

        $profile = $DB->get_record('local_ai_course_assistant_profiles', [
            'userid' => $userid,
            'courseid' => $courseid,
        ]);

        if (!$profile) {
            return true;
        }

        $msgsSinceProfile = $DB->count_records_select(
            'local_ai_course_assistant_msgs',
            "userid = :userid AND courseid = :courseid AND role = 'user' AND timecreated > :since",
            ['userid' => $userid, 'courseid' => $courseid, 'since' => $profile->timemodified]
        );

        return $msgsSinceProfile >= $interval;
    }

    /**
     * Generate and save a student profile using the LLM.
     *
     * @param int $userid
     * @param int $courseid
     * @return string The generated profile text.
     */
    public static function generate_profile(int $userid, int $courseid): string {
        global $DB, $CFG;
        require_once($CFG->dirroot . '/lib/filelib.php');

        $messages = $DB->get_records_sql(
            "SELECT m.role, m.message, m.timecreated
               FROM {local_ai_course_assistant_msgs} m
              WHERE m.userid = :userid AND m.courseid = :courseid
              ORDER BY m.timecreated DESC",
            ['userid' => $userid, 'courseid' => $courseid],
            0, 40
        );

        $messages = array_reverse(array_values($messages));

        $transcript = '';
        foreach ($messages as $m) {
            $role = $m->role === 'user' ? 'Student' : 'SOLA';
            $text = trim($m->message);
            if (strlen($text) > 500) {
                $text = substr($text, 0, 500) . '...';
            }
            $transcript .= $role . ': ' . $text . "\n\n";
        }

        $prompt = self::PROFILE_PROMPT . "\n\n## Recent conversation\n\n" . $transcript;
        $llmMessages = [['role' => 'user', 'content' => $prompt]];

        try {
            $provider = provider\base_provider::create_from_config($courseid);
            $profile = $provider->chat_completion('', $llmMessages, ['max_tokens' => 512]);
        } catch (\Throwable $e) {
            debugging('Student profile generation failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
            return '';
        }

        $profile = trim($profile);
        if (empty($profile)) {
            return '';
        }

        self::save_profile($userid, $courseid, $profile);
        return $profile;
    }

    /**
     * Save or update a student profile.
     *
     * @param int $userid
     * @param int $courseid
     * @param string $profile
     */
    private static function save_profile(int $userid, int $courseid, string $profile): void {
        global $DB;

        $existing = $DB->get_record('local_ai_course_assistant_profiles', [
            'userid' => $userid,
            'courseid' => $courseid,
        ]);

        $now = time();
        if ($existing) {
            $existing->profile_summary = $profile;
            $existing->timemodified = $now;
            $DB->update_record('local_ai_course_assistant_profiles', $existing);
        } else {
            $DB->insert_record('local_ai_course_assistant_profiles', (object) [
                'userid' => $userid,
                'courseid' => $courseid,
                'profile_summary' => $profile,
                'timecreated' => $now,
                'timemodified' => $now,
            ]);
        }
    }
}
