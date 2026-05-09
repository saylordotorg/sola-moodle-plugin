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

defined('MOODLE_INTERNAL') || die();

/**
 * Build the unsubscribe footer that every SOLA email appends (v5.4.3).
 *
 * Centralises the wording, the institution branding, and the unsubscribe
 * URL minting. Called by every email-sending pathway just before the
 * body goes to email_to_user / message_send / radar_delivery::send_email.
 *
 * Three forms:
 *   - text(): plain-text two-line footer for text/plain bodies.
 *   - html(): HTML footer with an actual anchor tag.
 *   - append_text() / append_html(): convenience wrappers that append
 *     the footer to an existing body string with a sensible separator.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class email_footer {

    /**
     * Return the plain-text unsubscribe footer for an outbound email.
     *
     * @param string $email Recipient email address.
     * @param string $type One of email_optout::TYPE_*.
     * @param string|null $reason Optional human-readable line explaining
     *                            why the recipient is on this list.
     *                            Caller is responsible for the wording.
     * @return string
     */
    public static function text(string $email, string $type, ?string $reason = null): string {
        $url = email_optout::url($email, $type);
        $brand = self::brand();
        $reasonline = $reason !== null && $reason !== ''
            ? rtrim($reason) . "\n"
            : '';
        return
            "\n\n---\n"
            . $reasonline
            . "{$brand} sent this email. To stop receiving this type of message, "
            . "click the link below:\n"
            . $url . "\n";
    }

    /**
     * Return the HTML unsubscribe footer for an outbound email.
     *
     * @param string $email
     * @param string $type
     * @param string|null $reason
     * @return string
     */
    public static function html(string $email, string $type, ?string $reason = null): string {
        $url = email_optout::url($email, $type);
        $brand = s(self::brand());
        // Use plain inline styles only — no embedded fonts, no dark-mode
        // colour swaps. Email-client coverage matters more than polish here,
        // and several admin clients (Outlook desktop, Apple Mail dark mode)
        // mangle backgrounds and named colours. Keep it plain.
        $reasonblock = '';
        if ($reason !== null && $reason !== '') {
            $reasonblock = '<div style="color:#555;margin-bottom:6px">' . s($reason) . '</div>';
        }
        return
            '<hr style="border:none;border-top:1px solid #ddd;margin:24px 0 12px">'
            . '<div style="font-size:12px;color:#666;line-height:1.55">'
            . $reasonblock
            . $brand . ' sent this email. '
            . '<a href="' . s($url) . '" style="color:#0a66c2">Unsubscribe</a> '
            . 'to stop receiving this type of message.'
            . '</div>';
    }

    /**
     * Append the text footer to a plain-text body. Returns the combined
     * string. Caller passes the original body unchanged when they want
     * to skip the footer (e.g. test-only paths).
     *
     * @param string $body
     * @param string $email
     * @param string $type
     * @param string|null $reason
     * @return string
     */
    public static function append_text(string $body, string $email, string $type, ?string $reason = null): string {
        return rtrim($body) . self::text($email, $type, $reason);
    }

    /**
     * Append the HTML footer to an HTML body. Returns the combined string.
     *
     * @param string $body
     * @param string $email
     * @param string $type
     * @param string|null $reason
     * @return string
     */
    public static function append_html(string $body, string $email, string $type, ?string $reason = null): string {
        return rtrim($body) . self::html($email, $type, $reason);
    }

    /**
     * Resolve the current institution display name. Falls back through
     * the same chain branding::short_name uses.
     *
     * @return string
     */
    private static function brand(): string {
        try {
            return branding::short_name();
        } catch (\Throwable $e) {
            return (string) (get_config('local_ai_course_assistant', 'short_name') ?: 'SOLA');
        }
    }
}
