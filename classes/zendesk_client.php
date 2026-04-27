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
 * Zendesk API client for creating support tickets.
 *
 * Creates tickets when the AI tutor cannot resolve a student's support question,
 * including a summary of the conversation so far.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class zendesk_client {

    /**
     * Check if Zendesk integration is configured and enabled.
     *
     * @return bool
     */
    public static function is_enabled(): bool {
        return (bool) get_config('local_ai_course_assistant', 'zendesk_enabled')
            && !empty(get_config('local_ai_course_assistant', 'zendesk_subdomain'))
            && !empty(get_config('local_ai_course_assistant', 'zendesk_token'));
    }

    /**
     * Create a Zendesk support ticket from a chat conversation.
     *
     * @param int $userid The Moodle user ID.
     * @param int $courseid The course ID.
     * @param string $question The student's original question.
     * @param string $conversationsummary A summary of the chat conversation so far.
     * @return string|null The ticket ID/URL if created, or null on failure.
     */
    public static function create_ticket(
        int $userid,
        int $courseid,
        string $question,
        string $conversationsummary
    ): ?string {
        global $DB, $CFG;
        require_once($CFG->libdir . '/filelib.php'); // For \curl.

        if (!self::is_enabled()) {
            return null;
        }

        $subdomain = get_config('local_ai_course_assistant', 'zendesk_subdomain');
        $email = get_config('local_ai_course_assistant', 'zendesk_email');
        $token = get_config('local_ai_course_assistant', 'zendesk_token');

        $user = $DB->get_record('user', ['id' => $userid], 'id, firstname, lastname, email', MUST_EXIST);
        $course = $DB->get_record('course', ['id' => $courseid], 'id, fullname', MUST_EXIST);

        $subject = "AI Tutor Support: {$course->fullname} - " . shorten_text($question, 80);
        $body = "Student: {$user->firstname} {$user->lastname} ({$user->email})\n"
            . "Course: {$course->fullname}\n"
            . "Original Question: {$question}\n\n"
            . "--- Conversation Summary ---\n{$conversationsummary}\n\n"
            . "--- End of AI Tutor Conversation ---\n"
            . "The AI tutor was unable to resolve this question. Please follow up with the student.";

        $url = "https://{$subdomain}.zendesk.com/api/v2/tickets.json";

        // Subdomain comes from admin config; defend against malformed or
        // hijacked values (e.g. injection of /, embedded port, IDN homograph).
        if (!security::is_safe_provider_url($url)) {
            debugging("Zendesk URL failed SSRF validation: {$url}", DEBUG_DEVELOPER);
            return null;
        }

        $ticketdata = [
            'ticket' => [
                'subject' => $subject,
                'description' => $body,
                'requester' => [
                    'name' => "{$user->firstname} {$user->lastname}",
                    'email' => $user->email,
                ],
                'tags' => ['ai_tutor_chat', 'auto_escalated'],
                'priority' => 'normal',
            ],
        ];

        $curl = new \curl();
        $curl->setopt([
            'CURLOPT_HTTPHEADER' => [
                'Content-Type: application/json',
            ],
            'CURLOPT_USERPWD' => "{$email}/token:{$token}",
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_TIMEOUT' => 30,
        ]);

        $response = $curl->post($url, json_encode($ticketdata));
        $httpcode = $curl->get_info()['http_code'] ?? 0;

        if ($httpcode >= 200 && $httpcode < 300) {
            $data = json_decode($response, true);
            $ticketid = $data['ticket']['id'] ?? 'unknown';
            return "#{$ticketid}";
        }

        debugging("Zendesk ticket creation failed: HTTP {$httpcode} - {$response}", DEBUG_DEVELOPER);
        return null;
    }

    /**
     * Build a conversation summary from recent messages.
     *
     * @param array $messages Array of message records from the database.
     * @param int $maxmessages Maximum number of messages to include.
     * @return string Formatted conversation summary.
     */
    public static function build_conversation_summary(array $messages, int $maxmessages = 10): string {
        $messages = array_values($messages);
        if (count($messages) > $maxmessages) {
            $messages = array_slice($messages, -$maxmessages);
        }

        $lines = [];
        foreach ($messages as $msg) {
            $role = $msg->role === 'user' ? 'Student' : 'AI Tutor';
            $text = shorten_text($msg->message, 500);
            $lines[] = "[{$role}]: {$text}";
        }

        return implode("\n\n", $lines);
    }
}
