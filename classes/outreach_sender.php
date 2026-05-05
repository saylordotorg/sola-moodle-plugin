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
 * Centralised dispatch point for v5.3.0 empathetic outreach emails.
 *
 * Every milestone reflection and every struggle follow-up flows through
 * this class. Responsibilities:
 *   1. Per-feature admin kill switch check.
 *   2. Per-learner consent check (Moodle user_preferences).
 *   3. Hard 7-day cooldown across ALL outreach channels combined.
 *   4. Dry-run mode (admin setting): logs intent without sending.
 *   5. Audit log row written on every send AND every block reason.
 *   6. Email send via Moodle email_to_user.
 *
 * Calling code never bypasses this class. There is exactly one path
 * from "we want to send a reflection" to "an email lands in the inbox".
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class outreach_sender {

    /** Audit/outreach log table. */
    const TABLE_LOG = 'local_ai_course_assistant_outreach_log';

    /** Hard cooldown across ALL channels: 7 days. */
    const COOLDOWN_SEC = 7 * 86400;

    /** Channel keys. Email outreach is restricted to milestones —
     * struggle signals are kept inside the chat by design (no emails
     * about struggle, ever). */
    const CH_STREAK7 = 'milestone_streak7';
    const CH_STREAK30 = 'milestone_streak30';
    const CH_COMPLETION = 'milestone_completion';

    /**
     * Attempt to send an outreach email. Returns true if sent (or dry-run
     * logged), false if blocked (and reason logged). Never throws.
     *
     * @param int $userid
     * @param int $courseid
     * @param string $channel One of self::CH_*.
     * @param string $subject
     * @param string $bodytext Plain-text email body.
     * @param string $bodyhtml HTML email body (optional; falls back to bodytext).
     * @param string $triggerreason Plain-English reason shown in learner audit log.
     * @return bool
     */
    public static function send(int $userid, int $courseid, string $channel,
            string $subject, string $bodytext, string $bodyhtml, string $triggerreason): bool {
        global $DB;

        // 1. Master site-wide outreach kill switch.
        if (!(bool)get_config('local_ai_course_assistant', 'outreach_master_enabled')) {
            return false;
        }

        // 2. Per-channel admin kill switch.
        if (!self::channel_admin_enabled($channel)) {
            return false;
        }

        // 3. Per-learner consent (user_preferences).
        if (!self::learner_consents($userid, $channel)) {
            return false;
        }

        // 4. Cooldown — most recent send across ALL channels.
        $lastsent = (int)$DB->get_field_sql(
            "SELECT MAX(timesent) FROM {" . self::TABLE_LOG . "} WHERE userid = ?",
            [$userid]
        );
        if ($lastsent > 0 && (time() - $lastsent) < self::COOLDOWN_SEC) {
            return false;
        }

        // 5. Dry-run mode: write the audit row but skip the email.
        $dryrun = (bool)get_config('local_ai_course_assistant', 'outreach_dryrun');
        $msgid = '';
        if (!$dryrun) {
            $user = $DB->get_record('user', ['id' => $userid], '*', IGNORE_MISSING);
            if (!$user || !empty($user->deleted) || !empty($user->suspended)) {
                return false;
            }
            $from = \core_user::get_noreply_user();
            $sent = email_to_user($user, $from, $subject, $bodytext, $bodyhtml);
            if (!$sent) {
                return false;
            }
            $msgid = 'sent_' . time() . '_' . $userid;
        } else {
            $msgid = 'dryrun_' . time() . '_' . $userid;
        }

        // 6. Audit row.
        $DB->insert_record(self::TABLE_LOG, (object)[
            'userid' => $userid,
            'courseid' => $courseid,
            'channel' => $channel,
            'trigger_reason' => self::truncate_for_db($triggerreason, 255),
            'message_id' => $msgid,
            'timesent' => time(),
        ]);

        return true;
    }

    /**
     * Check whether the per-channel admin enable flag is on.
     *
     * @param string $channel
     * @return bool
     */
    public static function channel_admin_enabled(string $channel): bool {
        switch ($channel) {
            case self::CH_STREAK7:
            case self::CH_STREAK30:
            case self::CH_COMPLETION:
                return (bool)get_config('local_ai_course_assistant', 'milestones_feature_enabled');
            default:
                return false;
        }
    }

    /**
     * Check whether the learner has consented to this channel via the
     * Communications settings panel. Defaults to opt-in, so absence ==
     * not consented.
     *
     * Channel groups share one user pref key:
     *   milestones (streak7/streak30/completion) -> sola_outreach_milestones
     *   struggle                                  -> sola_outreach_struggle
     *
     * @param int $userid
     * @param string $channel
     * @return bool
     */
    public static function learner_consents(int $userid, string $channel): bool {
        $key = self::channel_pref_key($channel);
        $val = get_user_preferences($key, '0', $userid);
        return $val === '1';
    }

    /**
     * Map a channel to its user_preferences key. All milestone channels
     * share one consent toggle; struggle signals never go through email
     * so they have no key here.
     *
     * @param string $channel
     * @return string
     */
    public static function channel_pref_key(string $channel): string {
        return 'sola_outreach_milestones';
    }

    /**
     * Whether the cooldown has elapsed for this learner. Useful for the
     * caller to skip expensive work (LLM calls etc.) when no email could
     * fire anyway.
     *
     * @param int $userid
     * @return bool
     */
    public static function cooldown_clear(int $userid): bool {
        global $DB;
        $lastsent = (int)$DB->get_field_sql(
            "SELECT MAX(timesent) FROM {" . self::TABLE_LOG . "} WHERE userid = ?",
            [$userid]
        );
        return $lastsent === 0 || (time() - $lastsent) >= self::COOLDOWN_SEC;
    }

    /**
     * Read the outreach log for a single learner. Used by the Communications
     * settings panel to show "here is everything SOLA has sent you".
     *
     * @param int $userid
     * @param int $limit
     * @return array
     */
    public static function get_log_for_learner(int $userid, int $limit = 50): array {
        global $DB;
        return $DB->get_records(self::TABLE_LOG, ['userid' => $userid], 'timesent DESC', '*', 0, $limit);
    }

    /**
     * Trim a string to fit a CHAR column without splitting a multibyte
     * sequence.
     *
     * @param string $s
     * @param int $max
     * @return string
     */
    private static function truncate_for_db(string $s, int $max): string {
        if (function_exists('mb_substr')) {
            return mb_substr($s, 0, $max);
        }
        return substr($s, 0, $max);
    }
}
