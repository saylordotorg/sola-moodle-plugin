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
 * Per-recipient opt-out tracking for SOLA-sent emails (v5.4.3).
 *
 * One row per (email, optout_type) pair. Used by every SOLA email
 * pathway to suppress sends for recipients who clicked an unsubscribe
 * link. Designed to handle BOTH learner emails (where the recipient is
 * a Moodle user we can also track via user_preferences) AND admin or
 * staff destinations (which are arbitrary email addresses outside
 * Moodle's user table — Learning Radar reports, anomaly digests,
 * integrity alerts, spend caps).
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class email_optout {

    /** @var string Learning Radar scheduled / on-demand email reports. */
    public const TYPE_LEARNING_RADAR = 'learning_radar';
    /** @var string Daily anomaly digest. */
    public const TYPE_ANOMALY_DIGEST = 'anomaly_digest';
    /** @var string Integrity check failure alerts. */
    public const TYPE_INTEGRITY_REPORT = 'integrity_report';
    /** @var string Spend-cap warning emails. */
    public const TYPE_SPEND_ALERT = 'spend_alert';
    /** @var string Instructor weekly digest. */
    public const TYPE_INSTRUCTOR_DIGEST = 'instructor_digest';
    /** @var string Learner weekly digest. */
    public const TYPE_LEARNER_DIGEST = 'learner_digest';
    /** @var string Daily / scheduled study reminders. */
    public const TYPE_STUDY_REMINDER = 'study_reminder';
    /** @var string Inactivity nudge reminders. */
    public const TYPE_INACTIVITY_REMINDER = 'inactivity_reminder';
    /** @var string Milestone outreach (streak / completion). */
    public const TYPE_OUTREACH = 'outreach';
    /** @var string Student-triggered email-my-notes export. */
    public const TYPE_STUDY_NOTES = 'study_notes';

    /**
     * True when (email, type) has an opt-out row.
     *
     * @param string $email
     * @param string $type
     * @return bool
     */
    public static function is_opted_out(string $email, string $type): bool {
        global $DB;
        if ($email === '' || $type === '') {
            return false;
        }
        return $DB->record_exists('local_ai_course_assistant_email_optout', [
            'email' => self::normalize($email),
            'optout_type' => $type,
        ]);
    }

    /**
     * Record an opt-out. Idempotent — repeated clicks of the same
     * unsubscribe link are silently a no-op.
     *
     * @param string $email
     * @param string $type
     * @param int|null $userid Optional Moodle user id for admin diagnostics.
     * @param int|null $courseid Optional course context.
     * @return void
     */
    public static function record(string $email, string $type, ?int $userid = null, ?int $courseid = null): void {
        global $DB;
        if ($email === '' || $type === '') {
            return;
        }
        $email = self::normalize($email);
        if (self::is_opted_out($email, $type)) {
            return;
        }
        $DB->insert_record('local_ai_course_assistant_email_optout', (object)[
            'email' => $email,
            'optout_type' => $type,
            'userid' => $userid,
            'courseid' => $courseid,
            'timecreated' => time(),
        ]);
    }

    /**
     * Re-subscribe a recipient. Used by the admin UI on the GDPR
     * self-service page if a learner asks to be put back on the list.
     *
     * @param string $email
     * @param string $type
     * @return void
     */
    public static function clear(string $email, string $type): void {
        global $DB;
        $DB->delete_records('local_ai_course_assistant_email_optout', [
            'email' => self::normalize($email),
            'optout_type' => $type,
        ]);
    }

    /**
     * Lowercase + trim — the same normalisation we apply on insert and
     * on lookup so capitalisation in different mail clients still
     * resolves to the same opt-out row.
     *
     * @param string $email
     * @return string
     */
    public static function normalize(string $email): string {
        return strtolower(trim($email));
    }

    /**
     * Mint an HMAC unsubscribe token. Validates back to (email, type) via
     * {@see verify()}. Same shape as digest_unsubscribe_token but keyed
     * on email + type, so it works for non-Moodle-user destinations too.
     *
     * @param string $email
     * @param string $type
     * @param int $ttl Seconds. Defaults to 60 days.
     * @return string URL-safe token, no padding.
     */
    public static function mint_token(string $email, string $type, int $ttl = 5184000): string {
        $expiry = time() + $ttl;
        $payload = self::normalize($email) . '|' . $type . '|' . $expiry;
        $sig = self::sign($payload);
        return self::b64url_encode($payload) . '.' . self::b64url_encode($sig);
    }

    /**
     * Validate a token. Returns ['email' => ..., 'type' => ...] on success
     * or null on any failure: malformed, bad signature, expired.
     *
     * @param string $token
     * @return array{email:string,type:string}|null
     */
    public static function verify_token(string $token): ?array {
        $parts = explode('.', $token);
        if (count($parts) !== 2) {
            return null;
        }
        $payload = self::b64url_decode($parts[0]);
        $sig     = self::b64url_decode($parts[1]);
        if ($payload === false || $sig === false) {
            return null;
        }
        $expected = self::sign($payload);
        if (!hash_equals($expected, $sig)) {
            return null;
        }
        $segments = explode('|', $payload, 3);
        if (count($segments) !== 3) {
            return null;
        }
        [$email, $type, $expiry] = $segments;
        if (!ctype_digit($expiry) || (int) $expiry < time()) {
            return null;
        }
        return ['email' => $email, 'type' => $type];
    }

    /**
     * Build the unsubscribe URL the email body and List-Unsubscribe
     * header should point at. Same URL serves the GET click (renders a
     * confirmation page) and the RFC 8058 List-Unsubscribe-Post (silent
     * unsubscribe via mail-client button).
     *
     * @param string $email
     * @param string $type
     * @return string
     */
    public static function url(string $email, string $type): string {
        return (new \moodle_url('/local/ai_course_assistant/email_unsubscribe.php', [
            'token' => self::mint_token($email, $type),
        ]))->out(false);
    }

    private static function sign(string $payload): string {
        global $CFG;
        $key = (string) ($CFG->siteidentifier ?? '');
        if ($key === '') {
            $key = 'aica-email-optout-fallback';
        }
        return hash_hmac('sha256', $payload, $key, true);
    }

    private static function b64url_encode(string $bytes): string {
        return rtrim(strtr(base64_encode($bytes), '+/', '-_'), '=');
    }

    private static function b64url_decode(string $s) {
        $padded = strtr($s, '-_', '+/');
        $pad = strlen($padded) % 4;
        if ($pad > 0) {
            $padded .= str_repeat('=', 4 - $pad);
        }
        return base64_decode($padded, true);
    }
}
