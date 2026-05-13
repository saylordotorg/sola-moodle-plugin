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
 * Spend guard: enforce monthly/weekly/daily LLM spend caps per site,
 * per course, and per capability (Chat / Voice / RAG / Analytics).
 *
 * A thin read-mostly gate consulted by provider factories before an LLM call.
 * Under the cap: returns SCOPE_OK. Over the cap: returns SCOPE_BLOCKED
 * and lets the caller decide whether to fail the request or fall back to
 * a cheaper provider from the admin-configured failover chain.
 *
 * All dollar figures come from token_cost_manager's rate card plus the
 * per-message prompt/completion tokens we already log. Spend queries are
 * cached in MUC for 60 seconds to keep the per-request overhead negligible.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class spend_guard {

    public const SCOPE_SITE      = 'site';
    public const SCOPE_COURSE    = 'course';

    public const CAP_OK        = 'ok';
    public const CAP_WARN_80   = 'warn80';
    public const CAP_WARN_95   = 'warn95';
    public const CAP_BLOCKED   = 'blocked';

    /** @var int Seconds of MUC caching on current-period spend. */
    private const CACHE_TTL = 60;

    /**
     * Compute the start-of-period Unix timestamp for the configured period.
     * Calendar-aligned: monthly starts on the 1st, weekly on Monday, daily at 00:00.
     *
     * @return int
     */
    public static function period_start(): int {
        $period = get_config('local_ai_course_assistant', 'spend_cap_period') ?: 'monthly';
        $now = time();
        switch ($period) {
            case 'daily':
                return strtotime('today', $now) ?: $now;
            case 'weekly':
                return strtotime('monday this week 00:00', $now) ?: $now;
            case 'monthly':
            default:
                return strtotime('first day of this month 00:00', $now) ?: $now;
        }
    }

    /**
     * Human-readable name for the current period.
     *
     * @return string
     */
    public static function period_label(): string {
        $period = get_config('local_ai_course_assistant', 'spend_cap_period') ?: 'monthly';
        return ucfirst($period);
    }

    /**
     * Get the spend cap in USD for a scope and capability. 0 = unlimited.
     *
     * Precedence: per-course override (if a positive course cap is set)
     * beats site cap. Per-capability cap (if set) stacks on top.
     *
     * @param int $courseid 0 for site-wide
     * @param string|null $capability One of: chat, voice, rag, analytics, or null for total
     * @return float USD cap; 0.0 if unlimited
     */
    public static function get_cap(int $courseid = 0, ?string $capability = null): float {
        if ($capability !== null) {
            $key = 'spend_cap_' . $capability;
            $val = (float) (get_config('local_ai_course_assistant', $key) ?: 0);
            if ($val > 0) {
                return $val;
            }
        }
        // Per-course cap takes priority when positive.
        if ($courseid > 0) {
            $coursecfg = course_config_manager::get_effective_config($courseid);
            if (!empty($coursecfg['spend_cap_monthly']) && (float) $coursecfg['spend_cap_monthly'] > 0) {
                return (float) $coursecfg['spend_cap_monthly'];
            }
        }
        return (float) (get_config('local_ai_course_assistant', 'spend_cap_site') ?: 0);
    }

    /**
     * Compute the current-period spend in USD for a scope and capability.
     * Cached in MUC for CACHE_TTL seconds.
     *
     * @param int $courseid 0 for site-wide
     * @param string|null $capability One of: chat, voice, rag, analytics, or null for total
     * @return float USD spent
     */
    public static function get_spend(int $courseid = 0, ?string $capability = null): float {
        try {
            $cache = \cache::make('local_ai_course_assistant', 'spend');
            $key = "spend_{$courseid}_" . ($capability ?? 'all');
            $cached = $cache->get($key);
            if ($cached !== false && is_array($cached) && $cached['time'] > time() - self::CACHE_TTL) {
                return (float) $cached['value'];
            }
        } catch (\Throwable $e) {
            $cache = null;
        }

        $value = self::compute_spend($courseid, $capability);
        if ($cache !== null) {
            $cache->set($key, ['value' => $value, 'time' => time()]);
        }
        return $value;
    }

    /**
     * Actually compute the spend by querying the msgs table and applying the rate card.
     *
     * @param int $courseid
     * @param string|null $capability
     * @return float
     */
    private static function compute_spend(int $courseid, ?string $capability): float {
        global $DB, $CFG;
        require_once($CFG->dirroot . '/local/ai_course_assistant/classes/token_cost_manager.php');

        $since = self::period_start();
        $params = ['since' => $since];
        $where = "m.role = 'assistant' AND m.model_name IS NOT NULL AND m.timecreated >= :since";

        if ($courseid > 0) {
            $where .= ' AND m.courseid = :courseid';
            $params['courseid'] = $courseid;
        }
        if ($capability !== null) {
            $where .= ' AND ' . self::capability_sql($capability);
        }

        $rows = $DB->get_records_sql(
            "SELECT " . $DB->sql_concat('m.model_name', "'_'", 'm.provider') . " AS id,
                    m.model_name AS model,
                    SUM(COALESCE(m.prompt_tokens, 0))     AS prompt,
                    SUM(COALESCE(m.completion_tokens, 0)) AS completion
               FROM {local_ai_course_assistant_msgs} m
              WHERE {$where}
              GROUP BY m.model_name, m.provider",
            $params
        );

        $total = 0.0;
        foreach ($rows as $r) {
            $cost = token_cost_manager::estimate_cost(
                (string) $r->model,
                (int) $r->prompt,
                (int) $r->completion
            );
            if ($cost !== null) {
                $total += (float) $cost;
            }
        }
        return $total;
    }

    /**
     * SQL fragment mapping a capability to interaction_type values.
     *
     * @param string $capability
     * @return string SQL clause
     */
    private static function capability_sql(string $capability): string {
        switch ($capability) {
            case 'chat':
                return "(m.interaction_type IS NULL OR m.interaction_type IN ('chat','quiz',''))";
            case 'voice':
                return "m.interaction_type IN ('voice','openai_tts','xai_tts','openai_whisper','openai_stt','xai_stt')";
            case 'rag':
                return "m.interaction_type IN ('embedding','embed')";
            case 'analytics':
                return "m.interaction_type = 'meta'";
            default:
                return '1=1';
        }
    }

    /**
     * Check whether a new request under this scope/capability is allowed.
     * Emits notification emails when crossing 80% and 95% thresholds.
     *
     * @param int $courseid 0 for site-wide
     * @param string|null $capability
     * @return string One of the CAP_* constants
     */
    public static function check(int $courseid = 0, ?string $capability = null): string {
        $cap = self::get_cap($courseid, $capability);
        if ($cap <= 0) {
            return self::CAP_OK;
        }
        $spent = self::get_spend($courseid, $capability);
        $pct = $cap > 0 ? ($spent / $cap) : 0;

        if ($pct >= 1.0) {
            self::maybe_notify(self::CAP_BLOCKED, $courseid, $capability, $spent, $cap);
            return self::CAP_BLOCKED;
        }
        if ($pct >= 0.95) {
            self::maybe_notify(self::CAP_WARN_95, $courseid, $capability, $spent, $cap);
            return self::CAP_WARN_95;
        }
        if ($pct >= 0.80) {
            self::maybe_notify(self::CAP_WARN_80, $courseid, $capability, $spent, $cap);
            return self::CAP_WARN_80;
        }
        return self::CAP_OK;
    }

    /**
     * Email admins when a threshold is crossed for the first time in this period.
     * Uses config_plugins to store the "last notified" state so we don't spam.
     *
     * @param string $level Threshold level constant
     * @param int $courseid
     * @param string|null $capability
     * @param float $spent
     * @param float $cap
     */
    private static function maybe_notify(string $level, int $courseid, ?string $capability, float $spent, float $cap): void {
        $flagkey = 'spend_notify_' . md5($level . '|' . $courseid . '|' . ($capability ?? 'all') . '|' . self::period_start());
        if (get_config('local_ai_course_assistant', $flagkey)) {
            return; // Already notified this threshold in this period.
        }

        $recipients = trim((string) (get_config('local_ai_course_assistant', 'spend_notify_emails') ?: ''));
        if ($recipients === '') {
            // Fall back to site admins.
            $admins = get_admins();
            $recipients = implode(',', array_map(function($a) { return $a->email; }, $admins));
        }
        if ($recipients === '') {
            return;
        }

        $scope = $courseid > 0 ? "course $courseid" : 'site-wide';
        $scope .= $capability ? " / {$capability}" : ' / all capabilities';
        $subject = '[SOLA spend guard] ' . strtoupper($level) . ' — ' . $scope;
        $body = "SOLA spend has crossed a configured threshold.\n\n"
            . "Scope: {$scope}\n"
            . "Period: " . self::period_label() . " (since " . userdate(self::period_start()) . ")\n"
            . sprintf("Spent: \$%.2f of \$%.2f cap (%d%%)\n",
                $spent, $cap, (int) round(($spent / $cap) * 100))
            . "Level: {$level}\n\n"
            . "If the level is 'blocked', new requests under this scope are currently paused. "
            . "They will resume automatically at the start of the next period, or when the cap is raised.\n\n"
            . "Manage spend caps: Site admin > Plugins > Local plugins > AI Course Assistant > Settings.";

        // v5.4.3: per-recipient unsubscribe footer + opt-out check.
        $reason = 'You receive this alert because your address is configured '
            . 'as a SOLA spend-guard recipient.';
        foreach (array_filter(array_map('trim', explode(',', $recipients))) as $email) {
            if (email_optout::is_opted_out($email, email_optout::TYPE_SPEND_ALERT)) {
                continue;
            }
            $bodywithfooter = email_footer::append_text($body, $email,
                email_optout::TYPE_SPEND_ALERT, $reason);
            $user = \core_user::get_noreply_user();
            $to = clone $user;
            $to->email = $email;
            $to->id = -99;
            email_to_user($to, $user, $subject, $bodywithfooter);
        }

        set_config($flagkey, 1, 'local_ai_course_assistant');
    }

    /**
     * Resolve a failover provider for a given capability.
     * Returns only the FIRST matching entry from the configured chain.
     * Kept for backward compatibility with the budget-cap-triggered
     * failover path in base_provider::create_from_config.
     *
     * v5.5.0: callers that want the whole chain should use
     * resolve_failover_chain() instead.
     *
     * @param string $capability
     * @return array|null ['provider' => string, 'apikey' => string, 'label' => string] or null
     */
    public static function resolve_failover(string $capability): ?array {
        $chain = self::resolve_failover_chain($capability);
        return $chain === [] ? null : $chain[0];
    }

    /**
     * Resolve the full ordered failover chain for a given capability.
     * Each entry is the result of looking up one line of
     * spend_failover_chain against the appropriate registry
     * (comparison_providers for chat/analytics, voice_registry for
     * voice/realtime/tts/stt).
     *
     * Order is preserved from the spend_failover_chain config; the
     * head of the returned array is the first fallback to try.
     * Lines that don't resolve (missing label, missing apikey) are
     * silently dropped rather than failing the whole chain.
     *
     * v5.5.0: feeds the per-call failover_chain decorator. The pre-v5.5.0
     * budget-cap failover only consumed the first entry (via the wrapper
     * resolve_failover() above), so behavior on the budget path is
     * unchanged.
     *
     * @param string $capability
     * @return array Each entry: ['provider' => string, 'apikey' => string, 'label' => string]
     */
    public static function resolve_failover_chain(string $capability): array {
        $raw = trim((string) (get_config('local_ai_course_assistant', 'spend_failover_chain') ?: ''));
        if ($raw === '') {
            return [];
        }
        $isvoice = in_array($capability, ['voice', 'realtime', 'tts', 'stt'], true);
        $cmpraw  = !$isvoice ? (string) (get_config('local_ai_course_assistant', 'comparison_providers') ?: '') : '';
        $result = [];
        foreach (preg_split("/\r?\n/", $raw) as $line) {
            $line = trim($line);
            if ($line === '' || $line[0] === '#') {
                continue;
            }
            // Each line: capability:label (e.g. "chat:claude-cheap" or "voice:openai-prod").
            [$chaincap, $label] = array_pad(array_map('trim', explode(':', $line, 2)), 2, '');
            if ($chaincap !== $capability || $label === '') {
                continue;
            }
            $entry = $isvoice
                ? self::lookup_voice_label($label)
                : self::lookup_chat_label($label, $cmpraw);
            if ($entry !== null) {
                $result[] = $entry;
            }
        }
        return $result;
    }

    /**
     * Look up a chat/analytics failover label against the
     * comparison_providers registry. Lines are pipe-delimited:
     * label | apikey | models | temperature [ | apibaseurl ].
     *
     * v5.5.2: 5th column is an optional per-row base URL override that
     * threads through to the failover_chain decorator.
     *
     * @param string $label
     * @param string $raw Raw comparison_providers config (passed in so callers can read once).
     * @return array|null ['provider' => string, 'apikey' => string, 'label' => string, 'apibaseurl' => string] or null
     */
    private static function lookup_chat_label(string $label, string $raw): ?array {
        foreach (preg_split("/\r?\n/", $raw) as $cprow) {
            $cprow = trim($cprow);
            if ($cprow === '' || $cprow[0] === '#') {
                continue;
            }
            $parts = array_map('trim', explode('|', $cprow));
            if (strtolower($parts[0] ?? '') === strtolower($label) && !empty($parts[1])) {
                return [
                    'provider'   => strtolower($parts[0]),
                    'apikey'     => $parts[1],
                    'label'      => $label,
                    'apibaseurl' => $parts[4] ?? '',
                ];
            }
        }
        return null;
    }

    /**
     * Look up a voice/realtime failover label against the voice_registry.
     *
     * @param string $label
     * @return array|null ['provider' => string, 'apikey' => string, 'label' => string] or null
     */
    private static function lookup_voice_label(string $label): ?array {
        foreach (voice_registry::parse_rows() as $row) {
            if ($row['label'] === $label && !empty($row['apikey'])) {
                return [
                    'provider' => $row['provider'],
                    'apikey'   => $row['apikey'],
                    'label'    => $label,
                ];
            }
        }
        return null;
    }

    /**
     * Produce a compact status array suitable for the Spend status admin card.
     *
     * @return array Each entry: ['label' => str, 'spent' => float, 'cap' => float,
     *                            'pct' => float, 'level' => str]
     */
    public static function status_rows(): array {
        $rows = [];
        $scopes = [
            ['label' => 'All capabilities (site)', 'capability' => null],
            ['label' => 'Chat',      'capability' => 'chat'],
            ['label' => 'Voice',     'capability' => 'voice'],
            ['label' => 'RAG',       'capability' => 'rag'],
            ['label' => 'Analytics', 'capability' => 'analytics'],
        ];
        foreach ($scopes as $s) {
            $cap = self::get_cap(0, $s['capability']);
            $spent = self::get_spend(0, $s['capability']);
            $pct = $cap > 0 ? min(1.0, $spent / $cap) : 0;
            $rows[] = [
                'label' => $s['label'],
                'spent' => $spent,
                'cap'   => $cap,
                'pct'   => $pct,
                'level' => self::check(0, $s['capability']),
            ];
        }
        return $rows;
    }
}
