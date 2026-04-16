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
 * Builds anonymized transcript context for the Meta-AI Chat and cron reports.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class meta_ai_data_builder {

    private const SYSTEM_PROMPT = <<<'PROMPT'
You are an analytics assistant for an institution's AI learning assistant (SOLA).

You have access to anonymized conversation transcripts between students and the AI tutor across one or more courses. Student names have been replaced with pseudonyms like "Student 4217."

Your job is to answer the admin's questions about patterns, themes, engagement, and quality based on the data provided. Be specific: cite student pseudonyms and course names when relevant. If the data is insufficient to answer a question, say so.

Do not attempt to identify real students. Do not fabricate data.
PROMPT;

    /**
     * Build the system prompt containing anonymized transcripts.
     *
     * @param int $courseid 0 = all courses, >0 = specific course.
     * @param int $since Unix timestamp. 0 = all time.
     * @param int $maxchars Truncate transcript block to this many chars.
     * @return string System prompt with embedded transcript data.
     */
    public static function build_system_prompt(int $courseid = 0, int $since = 0, int $maxchars = 100000): string {
        $transcript = self::build_transcript($courseid, $since, $maxchars);
        return self::SYSTEM_PROMPT . "\n\n## Transcript Data\n\n" . $transcript;
    }

    /**
     * Build the anonymized transcript block.
     *
     * @param int $courseid
     * @param int $since
     * @param int $maxchars
     * @return string
     */
    public static function build_transcript(int $courseid = 0, int $since = 0, int $maxchars = 100000): string {
        global $DB;

        $params = [];
        $where = ['m.courseid > 1'];

        if ($courseid > 0) {
            $where[] = 'm.courseid = :courseid';
            $params['courseid'] = $courseid;
        }
        if ($since > 0) {
            $where[] = 'm.timecreated >= :since';
            $params['since'] = $since;
        }

        $sql = "SELECT m.id, m.userid, m.role, m.message, m.courseid, m.timecreated,
                       c.fullname AS coursename
                  FROM {local_ai_course_assistant_msgs} m
                  JOIN {course} c ON c.id = m.courseid
                 WHERE " . implode(' AND ', $where) . "
                 ORDER BY m.courseid ASC, m.userid ASC, m.timecreated ASC";

        $messages = $DB->get_records_sql($sql, $params);

        if (empty($messages)) {
            return "(No conversation data found for the selected time range.)\n";
        }

        $lines = [];
        $currentcourse = 0;
        $totalchars = 0;
        $truncated = false;

        foreach ($messages as $msg) {
            if ($msg->courseid !== $currentcourse) {
                $currentcourse = $msg->courseid;
                $header = "\n### Course: " . $msg->coursename . "\n";
                $totalchars += strlen($header);
                if ($totalchars > $maxchars) {
                    $truncated = true;
                    break;
                }
                $lines[] = $header;
            }

            $who = $msg->role === 'user'
                ? anonymizer::name((int) $msg->userid)
                : 'SOLA';
            $date = userdate($msg->timecreated, '%Y-%m-%d %H:%M');
            $text = trim($msg->message);
            if (strlen($text) > 2000) {
                $text = substr($text, 0, 2000) . '... [truncated]';
            }

            $line = "[{$date}] {$who}: {$text}\n";
            $totalchars += strlen($line);
            if ($totalchars > $maxchars) {
                $truncated = true;
                break;
            }
            $lines[] = $line;
        }

        $result = implode('', $lines);
        if ($truncated) {
            $result .= "\n(Data truncated to ~" . number_format($maxchars) . " characters. Oldest messages omitted.)\n";
        }

        $total = count($messages);
        $result = "Total messages in dataset: {$total}\n" . $result;

        return $result;
    }

    /**
     * Build a summary stats block for lighter-weight context.
     *
     * @param int $courseid
     * @param int $since
     * @return string
     */
    public static function build_stats_summary(int $courseid = 0, int $since = 0): string {
        global $DB;

        $params = [];
        $where = ['m.courseid > 1'];
        if ($courseid > 0) {
            $where[] = 'm.courseid = :courseid';
            $params['courseid'] = $courseid;
        }
        if ($since > 0) {
            $where[] = 'm.timecreated >= :since';
            $params['since'] = $since;
        }
        $wcl = implode(' AND ', $where);

        $totalmsg = $DB->count_records_sql(
            "SELECT COUNT(*) FROM {local_ai_course_assistant_msgs} m WHERE {$wcl}", $params);
        $totalusers = $DB->count_records_sql(
            "SELECT COUNT(DISTINCT m.userid) FROM {local_ai_course_assistant_msgs} m WHERE {$wcl} AND m.role = 'user'", $params);
        $totalcourses = $DB->count_records_sql(
            "SELECT COUNT(DISTINCT m.courseid) FROM {local_ai_course_assistant_msgs} m WHERE {$wcl}", $params);

        return "Summary: {$totalmsg} messages from {$totalusers} students across {$totalcourses} courses.\n";
    }
}
