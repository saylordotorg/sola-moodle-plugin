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
 * Format conversion and outbound delivery for Learning Radar responses.
 *
 * Used by both the schedule cron and the manual export endpoint to produce
 * a response in the requested format and deliver it via email, Slack, or
 * Teams. Webhook URLs are validated against the SSRF allowlist before any
 * outbound POST.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class radar_delivery {

    /**
     * Build a payload string in the requested format.
     *
     * @param string $format text|csv|json|markdown
     * @param string $query
     * @param string $response
     * @param array $meta Optional metadata (provider, model, range, etc.).
     * @return string
     */
    public static function format(string $format, string $query, string $response, array $meta = []): string {
        $disclaimer = 'All student data in this report is anonymized.';
        $when = userdate(time(), '%Y-%m-%d %H:%M');

        // v5.1.6: strip the SOLA marker tags from $response before rendering.
        // SOLA_NEXT / SOURCE / SOLA_SCORE are designed to be parsed and
        // rendered as chips by the web client (amd/src/learning_radar.js
        // does this). The email / CSV / JSON / markdown delivery path
        // bypasses that stripper, so the literal `[SOLA_NEXT]chip||...||
        // [/SOLA_NEXT]` block was leaking into admin inboxes. Strip here
        // so every delivery format renders cleanly.
        $response = self::strip_marker_tags($response);

        switch ($format) {
            case 'csv':
                $rows = [
                    ['Field', 'Value'],
                    ['Generated', $when],
                    ['Query', $query],
                    ['Response', $response],
                    ['Disclaimer', $disclaimer],
                ];
                foreach ($meta as $k => $v) {
                    $rows[] = [(string) $k, (string) $v];
                }
                $out = fopen('php://temp', 'r+');
                foreach ($rows as $r) {
                    fputcsv($out, $r);
                }
                rewind($out);
                $csv = stream_get_contents($out);
                fclose($out);
                return $csv;

            case 'json':
                return json_encode([
                    'generated_at' => date('c'),
                    'query' => $query,
                    'response' => $response,
                    'meta' => $meta,
                    'disclaimer' => $disclaimer,
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

            case 'markdown':
                $md = "# Learning Radar Report\n\n";
                $md .= "_Generated " . $when . "_\n\n";
                if (!empty($meta)) {
                    foreach ($meta as $k => $v) {
                        $md .= "- **" . ucfirst((string) $k) . "**: " . (string) $v . "\n";
                    }
                    $md .= "\n";
                }
                $md .= "## Query\n\n" . $query . "\n\n";
                $md .= "## Response\n\n" . $response . "\n\n";
                $md .= "---\n_" . $disclaimer . "_\n";
                return $md;

            default:
                $out = "Learning Radar Report\n";
                $out .= "Generated: {$when}\n\n";
                $out .= "Query:\n" . $query . "\n\n";
                $out .= "Response:\n" . $response . "\n\n";
                $out .= "---\n" . $disclaimer . "\n";
                return $out;
        }
    }

    /**
     * Map a format key to a sensible filename + content-type.
     *
     * @param string $format
     * @return array [filename, contenttype]
     */
    public static function format_meta(string $format): array {
        switch ($format) {
            case 'csv':
                return ['radar-report.csv', 'text/csv; charset=utf-8'];
            case 'json':
                return ['radar-report.json', 'application/json; charset=utf-8'];
            case 'markdown':
                return ['radar-report.md', 'text/markdown; charset=utf-8'];
            default:
                return ['radar-report.txt', 'text/plain; charset=utf-8'];
        }
    }

    /**
     * Send the report via email.
     *
     * @param string $emailaddress Recipient address (validated by caller).
     * @param string $query
     * @param string $response
     * @param string $format
     * @param string $subjectprefix Subject prefix (e.g., "Scheduled" or "On-demand").
     * @param array $meta Optional metadata for the body footer.
     * @return bool
     */
    public static function send_email(
        string $emailaddress,
        string $query,
        string $response,
        string $format = 'text',
        string $subjectprefix = 'On-demand',
        array $meta = []
    ): bool {
        $admin = get_admin();
        $recipient = \core_user::get_user_by_email($emailaddress);
        if (!$recipient) {
            // Construct a minimal user record when the recipient is not a Moodle user.
            $recipient = new \stdClass();
            $recipient->id = -1;
            $recipient->email = $emailaddress;
            $recipient->firstname = '';
            $recipient->lastname = '';
            $recipient->maildisplay = 0;
            $recipient->mailformat = 1;
            $recipient->emailstop = 0;
            $recipient->deleted = 0;
            $recipient->auth = 'manual';
            $recipient->suspended = 0;
            $recipient->confirmed = 1;
            $recipient->lang = current_language();
            $recipient->timezone = '99';
            $recipient->firstnamephonetic = '';
            $recipient->lastnamephonetic = '';
            $recipient->middlename = '';
            $recipient->alternatename = '';
        }

        $subject = "SOLA Learning Radar — {$subjectprefix}";

        // v5.4.3: per-recipient opt-out check + unsubscribe footer.
        // Recipients who clicked the unsubscribe link in a prior report
        // are silently skipped here. The footer goes on every send.
        if (email_optout::is_opted_out($emailaddress, email_optout::TYPE_LEARNING_RADAR)) {
            return false;
        }
        $reason = 'You receive this report because your address is configured '
            . 'as a SOLA Learning Radar recipient.';

        $payload = self::format($format, $query, $response, $meta);

        if ($format === 'text') {
            $payload = email_footer::append_text($payload, $emailaddress,
                email_optout::TYPE_LEARNING_RADAR, $reason);
            return (bool) email_to_user($recipient, $admin, $subject, $payload);
        }

        // Non-text formats: attach as a file with a brief plain-text body.
        // The unsubscribe footer goes on the human-readable body, not the
        // attached CSV/JSON/markdown payload.
        global $CFG;
        list($filename, ) = self::format_meta($format);
        $tmpdir = $CFG->tempdir . '/sola_radar';
        if (!is_dir($tmpdir)) {
            @mkdir($tmpdir, 0700, true);
        }
        $tmpfile = $tmpdir . '/' . uniqid('radar_', true) . '_' . $filename;
        file_put_contents($tmpfile, $payload);
        $body = "Your SOLA Learning Radar report is attached.\n\n"
            . "Query: {$query}\n\nAll student data is anonymized.";
        $body = email_footer::append_text($body, $emailaddress,
            email_optout::TYPE_LEARNING_RADAR, $reason);
        $sent = (bool) email_to_user($recipient, $admin, $subject, $body, '', $tmpfile, $filename);
        @unlink($tmpfile);
        return $sent;
    }

    /**
     * Post the report to a Slack incoming webhook.
     *
     * @param string $webhookurl
     * @param string $query
     * @param string $response
     * @param array $meta
     * @return bool
     */
    public static function send_slack(string $webhookurl, string $query, string $response, array $meta = []): bool {
        if (!security::is_safe_provider_url($webhookurl)) {
            debugging('Learning Radar Slack webhook rejected by SSRF allowlist', DEBUG_DEVELOPER);
            return false;
        }

        $blocks = [
            ['type' => 'header', 'text' => ['type' => 'plain_text', 'text' => 'SOLA Learning Radar']],
            ['type' => 'section', 'text' => ['type' => 'mrkdwn', 'text' => "*Query:*\n{$query}"]],
            ['type' => 'section', 'text' => ['type' => 'mrkdwn', 'text' => self::truncate_for_slack($response)]],
        ];
        if (!empty($meta)) {
            $fields = [];
            foreach ($meta as $k => $v) {
                $fields[] = ['type' => 'mrkdwn', 'text' => '*' . ucfirst((string) $k) . ':*\n' . (string) $v];
            }
            $blocks[] = ['type' => 'section', 'fields' => array_slice($fields, 0, 10)];
        }
        $blocks[] = ['type' => 'context', 'elements' => [
            ['type' => 'mrkdwn', 'text' => '_All student data is anonymized._'],
        ]];

        $payload = ['blocks' => $blocks, 'text' => 'SOLA Learning Radar report'];
        return self::http_post($webhookurl, json_encode($payload), 'application/json');
    }

    /**
     * Post the report to a Microsoft Teams incoming webhook.
     *
     * @param string $webhookurl
     * @param string $query
     * @param string $response
     * @param array $meta
     * @return bool
     */
    public static function send_teams(string $webhookurl, string $query, string $response, array $meta = []): bool {
        if (!security::is_safe_provider_url($webhookurl)) {
            debugging('Learning Radar Teams webhook rejected by SSRF allowlist', DEBUG_DEVELOPER);
            return false;
        }

        $facts = [];
        foreach ($meta as $k => $v) {
            $facts[] = ['name' => ucfirst((string) $k), 'value' => (string) $v];
        }
        $card = [
            '@type' => 'MessageCard',
            '@context' => 'http://schema.org/extensions',
            'themeColor' => '0078D4',
            'summary' => 'SOLA Learning Radar report',
            'title' => 'SOLA Learning Radar',
            'sections' => [
                [
                    'activityTitle' => 'Query',
                    'text' => $query,
                ],
                [
                    'activityTitle' => 'Response',
                    'text' => self::truncate_for_teams($response),
                    'facts' => $facts,
                ],
                [
                    'text' => '_All student data is anonymized._',
                ],
            ],
        ];
        return self::http_post($webhookurl, json_encode($card), 'application/json');
    }

    /**
     * SSRF-checked HTTP POST helper.
     *
     * @param string $url
     * @param string $body
     * @param string $contenttype
     * @return bool
     */
    private static function http_post(string $url, string $body, string $contenttype): bool {
        global $CFG;
        require_once($CFG->dirroot . '/lib/filelib.php');
        $curl = new \curl();
        $curl->setHeader(['Content-Type: ' . $contenttype]);
        $result = $curl->post($url, $body);
        $code = (int) $curl->get_info()['http_code'];
        if ($code < 200 || $code >= 300) {
            debugging('Learning Radar webhook delivery failed (' . $code . '): ' . $result, DEBUG_DEVELOPER);
            return false;
        }
        return true;
    }

    /**
     * Slack mrkdwn section text caps at ~3000 chars; truncate cleanly.
     *
     * @param string $text
     * @return string
     */
    private static function truncate_for_slack(string $text): string {
        $max = 2800;
        if (strlen($text) <= $max) {
            return $text;
        }
        return substr($text, 0, $max) . "\n\n_(truncated)_";
    }

    /**
     * Teams card sections are similarly bounded; keep things under 24KB total.
     *
     * @param string $text
     * @return string
     */
    private static function truncate_for_teams(string $text): string {
        $max = 18000;
        if (strlen($text) <= $max) {
            return $text;
        }
        return substr($text, 0, $max) . "\n\n_(truncated)_";
    }

    /**
     * Strip SOLA's UI-marker tags from a response body so they do not leak
     * into email / CSV / JSON / markdown deliveries. Matches the regexes
     * in amd/src/chat.js and amd/src/learning_radar.js.
     *
     * @param string $text
     * @return string
     */
    private static function strip_marker_tags(string $text): string {
        // SOLA_NEXT block (with leading newlines collapsed).
        $text = preg_replace('/\n*\[SOLA_NEXT\][\s\S]*?\[\/SOLA_NEXT\]\s*/', '', $text);
        // SOLA_SCORE block (used in practice scoring).
        $text = preg_replace('/\n*\[SOLA_SCORE\][\s\S]*?\[\/SOLA_SCORE\]\s*/', '', $text);
        // SOURCE marker — single line, e.g. [SOURCE:page] or [SOURCE:activity:123].
        $text = preg_replace('/\n*\[SOURCE:[^\]]*\]\s*/', '', $text);
        // OFF_TOPIC and NEEDS_ESCALATION single-line markers.
        $text = preg_replace('/\n*\[(OFF_TOPIC|NEEDS_ESCALATION)\]\s*/', '', $text);
        return rtrim((string) $text);
    }
}
