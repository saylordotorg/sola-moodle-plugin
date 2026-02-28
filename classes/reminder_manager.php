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
 * Reminder manager — handles study reminder subscriptions and sending.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class reminder_manager {

    /** @var int Seconds in a day. */
    private const DAY = 86400;

    /**
     * Subscribe a user to study reminders.
     *
     * @param int $userid
     * @param int $courseid
     * @param string $channel 'email' or 'whatsapp'.
     * @param string $destination Email address or phone number.
     * @param string $countrycode ISO 3166-1 alpha-2 country code.
     * @param string $frequency 'daily', 'every_other_day', or 'weekly'.
     * @return \stdClass The reminder record.
     * @throws \moodle_exception If channel is blocked in user's country.
     */
    public static function subscribe(
        int $userid,
        int $courseid,
        string $channel,
        string $destination,
        string $countrycode = '',
        string $frequency = 'daily'
    ): \stdClass {
        global $DB;

        // Validate channel.
        if (!in_array($channel, ['email', 'whatsapp'])) {
            throw new \moodle_exception('invalidparameter', 'error', '', 'channel');
        }

        // Check channel is enabled.
        if ($channel === 'email' && !get_config('local_ai_course_assistant', 'reminders_email_enabled')) {
            throw new \moodle_exception('invalidparameter', 'error', '', 'Email reminders are not enabled.');
        }
        if ($channel === 'whatsapp' && !get_config('local_ai_course_assistant', 'reminders_whatsapp_enabled')) {
            throw new \moodle_exception('invalidparameter', 'error', '', 'WhatsApp reminders are not enabled.');
        }

        // Check country restrictions for WhatsApp.
        if ($channel === 'whatsapp' && !empty($countrycode)) {
            if (self::is_country_blocked($countrycode)) {
                throw new \moodle_exception('invalidparameter', 'error', '',
                    'WhatsApp reminders are not available in your country.');
            }
        }

        // Validate frequency.
        if (!in_array($frequency, ['daily', 'every_other_day', 'weekly'])) {
            $frequency = 'daily';
        }

        $now = time();
        $token = self::generate_unsubscribe_token();

        // Check for existing subscription.
        $existing = $DB->get_record('local_ai_course_assistant_reminders', [
            'userid' => $userid,
            'courseid' => $courseid,
            'channel' => $channel,
        ]);

        if ($existing) {
            $existing->destination = $destination;
            $existing->country_code = $countrycode;
            $existing->frequency = $frequency;
            $existing->enabled = 1;
            $existing->timemodified = $now;
            $DB->update_record('local_ai_course_assistant_reminders', $existing);
            return $existing;
        }

        $record = new \stdClass();
        $record->userid = $userid;
        $record->courseid = $courseid;
        $record->channel = $channel;
        $record->destination = $destination;
        $record->country_code = $countrycode;
        $record->frequency = $frequency;
        $record->enabled = 1;
        $record->unsubscribe_token = $token;
        $record->timecreated = $now;
        $record->timemodified = $now;
        $record->id = $DB->insert_record('local_ai_course_assistant_reminders', $record);

        return $record;
    }

    /**
     * Unsubscribe using a token (for opt-out links).
     *
     * @param string $token The unsubscribe token.
     * @return bool True if unsubscribed, false if token not found.
     */
    public static function unsubscribe_by_token(string $token): bool {
        global $DB;

        $record = $DB->get_record('local_ai_course_assistant_reminders', ['unsubscribe_token' => $token]);
        if (!$record) {
            return false;
        }

        if (!$record->enabled) {
            return true; // Already unsubscribed.
        }

        $record->enabled = 0;
        $record->timemodified = time();
        $DB->update_record('local_ai_course_assistant_reminders', $record);
        return true;
    }

    /**
     * Get all active reminders for a user in a course.
     *
     * @param int $userid
     * @param int $courseid
     * @return array
     */
    public static function get_user_reminders(int $userid, int $courseid): array {
        global $DB;
        return $DB->get_records('local_ai_course_assistant_reminders', [
            'userid' => $userid,
            'courseid' => $courseid,
            'enabled' => 1,
        ]);
    }

    /**
     * Get all reminders that are due to be sent.
     *
     * @return array Array of reminder records.
     */
    public static function get_due_reminders(): array {
        global $DB;

        $now = time();

        // Get all enabled reminders.
        $reminders = $DB->get_records('local_ai_course_assistant_reminders', ['enabled' => 1]);
        $due = [];

        foreach ($reminders as $reminder) {
            if (self::is_reminder_due($reminder, $now)) {
                $due[] = $reminder;
            }
        }

        return $due;
    }

    /**
     * Check if a reminder is due based on its frequency.
     *
     * @param \stdClass $reminder
     * @param int $now Current timestamp.
     * @return bool
     */
    private static function is_reminder_due(\stdClass $reminder, int $now): bool {
        $lastsent = $reminder->last_sent ?? 0;

        switch ($reminder->frequency) {
            case 'daily':
                return ($now - $lastsent) >= self::DAY;
            case 'every_other_day':
                return ($now - $lastsent) >= (self::DAY * 2);
            case 'weekly':
                return ($now - $lastsent) >= (self::DAY * 7);
            default:
                return ($now - $lastsent) >= self::DAY;
        }
    }

    /**
     * Send a reminder via email.
     *
     * @param \stdClass $reminder The reminder record.
     * @param string $message The reminder message content.
     * @return bool Success.
     */
    public static function send_email_reminder(\stdClass $reminder, string $message): bool {
        global $DB;

        $user = $DB->get_record('user', ['id' => $reminder->userid], '*', MUST_EXIST);
        $course = $DB->get_record('course', ['id' => $reminder->courseid], '*', MUST_EXIST);

        $unsubscribeurl = new \moodle_url('/local/ai_course_assistant/unsubscribe.php', [
            'token' => $reminder->unsubscribe_token,
        ]);

        $subject = get_string('reminder:email_subject', 'local_ai_course_assistant', $course->fullname);

        $plan = study_planner::get_plan($reminder->userid, $reminder->courseid);
        $hoursperweek = $plan ? $plan->hours_per_week : '(not set)';

        $bodydata = (object) [
            'firstname' => $user->firstname,
            'coursename' => $course->fullname,
            'message' => $message,
            'hours_per_week' => $hoursperweek,
            'unsubscribe_url' => $unsubscribeurl->out(false),
        ];
        $body = get_string('reminder:email_body', 'local_ai_course_assistant', $bodydata);

        $noreplyuser = \core_user::get_noreply_user();

        $eventdata = new \core\message\message();
        $eventdata->component = 'local_ai_course_assistant';
        $eventdata->name = 'study_reminder';
        $eventdata->userfrom = $noreplyuser;
        $eventdata->userto = $user;
        $eventdata->subject = $subject;
        $eventdata->fullmessage = $body;
        $eventdata->fullmessageformat = FORMAT_PLAIN;
        $eventdata->fullmessagehtml = nl2br(s($body));
        $eventdata->smallmessage = $message;
        $eventdata->notification = 1;

        $result = message_send($eventdata);
        return !empty($result);
    }

    /**
     * Send a reminder via WhatsApp.
     *
     * @param \stdClass $reminder The reminder record.
     * @param string $message The reminder message content.
     * @return bool Success.
     */
    public static function send_whatsapp_reminder(\stdClass $reminder, string $message): bool {
        global $DB;

        $apiurl = get_config('local_ai_course_assistant', 'whatsapp_api_url');
        $apitoken = get_config('local_ai_course_assistant', 'whatsapp_api_token');
        $fromnumber = get_config('local_ai_course_assistant', 'whatsapp_from_number');

        if (empty($apiurl) || empty($apitoken) || empty($fromnumber)) {
            debugging('WhatsApp API not configured', DEBUG_DEVELOPER);
            return false;
        }

        $course = $DB->get_record('course', ['id' => $reminder->courseid], 'id, fullname', MUST_EXIST);

        $unsubscribeurl = new \moodle_url('/local/ai_course_assistant/unsubscribe.php', [
            'token' => $reminder->unsubscribe_token,
        ]);

        $bodydata = (object) [
            'coursename' => $course->fullname,
            'message' => $message,
            'unsubscribe_url' => $unsubscribeurl->out(false),
        ];
        $body = get_string('reminder:whatsapp_body', 'local_ai_course_assistant', $bodydata);

        $payload = json_encode([
            'to' => $reminder->destination,
            'from' => $fromnumber,
            'body' => $body,
        ]);

        $curl = new \curl();
        $curl->setopt([
            'CURLOPT_HTTPHEADER' => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $apitoken,
            ],
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_TIMEOUT' => 30,
        ]);

        $response = $curl->post($apiurl, $payload);
        $httpcode = $curl->get_info()['http_code'] ?? 0;

        return ($httpcode >= 200 && $httpcode < 300);
    }

    /**
     * Mark a reminder as sent.
     *
     * @param int $reminderid
     */
    public static function mark_sent(int $reminderid): void {
        global $DB;
        $DB->set_field('local_ai_course_assistant_reminders', 'last_sent', time(), ['id' => $reminderid]);
    }

    /**
     * Check if WhatsApp is blocked in a given country.
     *
     * @param string $countrycode ISO 3166-1 alpha-2 code.
     * @return bool
     */
    public static function is_country_blocked(string $countrycode): bool {
        $blocked = get_config('local_ai_course_assistant', 'whatsapp_blocked_countries');
        if (empty($blocked)) {
            return false;
        }

        $codes = array_map('trim', explode(',', strtoupper($blocked)));
        return in_array(strtoupper($countrycode), $codes);
    }

    /**
     * Generate a unique unsubscribe token.
     *
     * @return string
     */
    private static function generate_unsubscribe_token(): string {
        return bin2hex(random_bytes(32));
    }

    /**
     * Delete all reminder data for a user (GDPR).
     *
     * @param int $userid
     */
    public static function delete_user_data(int $userid): void {
        global $DB;
        $DB->delete_records('local_ai_course_assistant_reminders', ['userid' => $userid]);
    }
}
