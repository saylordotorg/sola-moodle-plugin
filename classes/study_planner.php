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
 * Study planner — manages student study plans and provides context for the AI.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class study_planner {

    /**
     * Get or create a study plan for a user in a course.
     *
     * @param int $userid
     * @param int $courseid
     * @return \stdClass|null The plan record, or null if none exists yet.
     */
    public static function get_plan(int $userid, int $courseid): ?\stdClass {
        global $DB;
        return $DB->get_record('local_ai_course_assistant_plans', [
            'userid' => $userid,
            'courseid' => $courseid,
        ]) ?: null;
    }

    /**
     * Save or update a study plan.
     *
     * @param int $userid
     * @param int $courseid
     * @param float $hoursperweek
     * @param array $plandata Structured plan data from AI.
     * @param string $preferreddays Comma-separated days (e.g. "mon,wed,fri").
     * @param string $preferredtime E.g. "morning", "afternoon", "evening".
     * @return \stdClass The saved plan record.
     */
    public static function save_plan(
        int $userid,
        int $courseid,
        float $hoursperweek,
        array $plandata = [],
        string $preferreddays = '',
        string $preferredtime = ''
    ): \stdClass {
        global $DB;

        $now = time();
        $existing = self::get_plan($userid, $courseid);

        if ($existing) {
            $existing->hours_per_week = $hoursperweek;
            $existing->plan_data = json_encode($plandata);
            $existing->preferred_days = $preferreddays;
            $existing->preferred_time = $preferredtime;
            $existing->timemodified = $now;
            $DB->update_record('local_ai_course_assistant_plans', $existing);
            return $existing;
        }

        $plan = new \stdClass();
        $plan->userid = $userid;
        $plan->courseid = $courseid;
        $plan->hours_per_week = $hoursperweek;
        $plan->plan_data = json_encode($plandata);
        $plan->preferred_days = $preferreddays;
        $plan->preferred_time = $preferredtime;
        $plan->timecreated = $now;
        $plan->timemodified = $now;
        $plan->id = $DB->insert_record('local_ai_course_assistant_plans', $plan);

        return $plan;
    }

    /**
     * Build study plan context for the system prompt.
     *
     * If the student has an existing plan, include it. Otherwise, instruct
     * the AI to offer study planning help.
     *
     * @param int $userid
     * @param int $courseid
     * @return string Text to append to system prompt.
     */
    public static function get_plan_context(int $userid, int $courseid): string {
        if (!get_config('local_ai_course_assistant', 'studyplan_enabled')) {
            return '';
        }

        $plan = self::get_plan($userid, $courseid);

        $context = "\n\n## Study Planning\n";
        $context .= "You can help students plan their studies. If a student asks about study planning, "
            . "time management, or how to organize their learning, help them create a structured plan.\n";
        $context .= "Ask about: how many hours per week they can study, preferred days and times, "
            . "and their learning goals. Then suggest a weekly schedule distributing topics across their available time.\n";
        $context .= "Also promote good study skills: spaced repetition, active recall, the Pomodoro technique, "
            . "taking breaks, and mixing different types of study activities.\n";

        if ($plan) {
            $context .= "\nThis student has an existing study plan:\n";
            $context .= "- Hours per week: {$plan->hours_per_week}\n";
            if (!empty($plan->preferred_days)) {
                $context .= "- Preferred days: {$plan->preferred_days}\n";
            }
            if (!empty($plan->preferred_time)) {
                $context .= "- Preferred time: {$plan->preferred_time}\n";
            }
            $plandata = json_decode($plan->plan_data, true);
            if (!empty($plandata['schedule'])) {
                $context .= "- Current schedule:\n";
                foreach ($plandata['schedule'] as $day => $topics) {
                    $context .= "  - {$day}: {$topics}\n";
                }
            }
        }

        // Reminder opt-in information.
        $emailenabled = get_config('local_ai_course_assistant', 'reminders_email_enabled');
        $whatsappenabled = get_config('local_ai_course_assistant', 'reminders_whatsapp_enabled');

        if ($emailenabled || $whatsappenabled) {
            $channels = [];
            if ($emailenabled) {
                $channels[] = 'email';
            }
            if ($whatsappenabled) {
                $channels[] = 'WhatsApp';
            }
            $channelstr = implode(' or ', $channels);
            $context .= "\nStudents can opt in to study reminders via {$channelstr}. "
                . "If a student asks about reminders or wants to be reminded to study, "
                . "let them know this option is available. They should mention the channel "
                . "they prefer and (for WhatsApp) their phone number with country code. "
                . "All reminders include an easy opt-out link. "
                . "Reminders are motivational messages that reference their study plan.\n";
        }

        return $context;
    }

    /**
     * Get the next study topic suggestion based on the plan and course progress.
     *
     * @param int $userid
     * @param int $courseid
     * @return string A study tip/suggestion for use in reminders.
     */
    public static function get_study_tip(int $userid, int $courseid): string {
        $plan = self::get_plan($userid, $courseid);

        // Build a contextual tip based on the course sections.
        try {
            $modinfo = get_fast_modinfo($courseid);
            $sections = $modinfo->get_section_info_all();
            $visiblesections = [];
            foreach ($sections as $section) {
                if ($section->visible) {
                    $name = get_section_name($courseid, $section);
                    if (!empty($name) && $name !== 'General') {
                        $visiblesections[] = $name;
                    }
                }
            }
        } catch (\Throwable $e) {
            $visiblesections = [];
        }

        // Study tips pool.
        $tips = [
            'Try the Pomodoro technique: 25 minutes of focused study, then a 5-minute break.',
            'Review your notes from the last session before starting new material.',
            'Test yourself on what you learned recently — active recall strengthens memory.',
            'Take a few minutes to summarize what you\'ve learned in your own words.',
            'Mix different types of study: reading, practice problems, and teaching concepts to others.',
            'Start with the most challenging topic while your energy is highest.',
            'Create connections between new concepts and what you already know.',
            'Take short breaks to stay focused — a refreshed mind learns better.',
        ];

        $tip = $tips[array_rand($tips)];

        if (!empty($visiblesections)) {
            $section = $visiblesections[array_rand($visiblesections)];
            return "Focus area: \"{$section}\". {$tip}";
        }

        return $tip;
    }

    /**
     * Delete all study plans for a user (GDPR).
     *
     * @param int $userid
     */
    public static function delete_user_data(int $userid): void {
        global $DB;
        $DB->delete_records('local_ai_course_assistant_plans', ['userid' => $userid]);
    }
}
