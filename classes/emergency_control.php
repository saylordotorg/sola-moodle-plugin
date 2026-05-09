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
 * Emergency-disable mechanism for SOLA (v5.4.5).
 *
 * Single source of truth for the "kill switch" surface. Used by:
 *   - admin/cli/emergency_disable.php (one-shot CLI for ops)
 *   - PHPUnit tests pinning the disable / restore round-trip
 *   - Future admin UI panic button (v5.5+)
 *
 * Design choices the runbook depends on:
 *   - Each disable() call writes an audit row keyed `emergency_disable`
 *     with the invoker, flags, and reason — incident review starts there.
 *   - Voice's `voice_active_realtime` is stashed into a backup config row
 *     before being cleared, so restore() can put it back exactly.
 *   - The chat-only kill leaves the widget rendering and uses
 *     spend_cap_site=0 so learners get the friendly "budget paused" path.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class emergency_control {

    /** Master kill (full chat widget + scheduled tasks + SSE). */
    public const FLAG_ALL = 'all';
    /** Voice realtime + TTS only. */
    public const FLAG_VOICE = 'voice';
    /** RAG retrieval and indexing only. */
    public const FLAG_RAG = 'rag';
    /** Outreach / digest / milestone emails only. */
    public const FLAG_OUTREACH = 'outreach';
    /** Chat-only kill via spend_cap_site=0 (widget keeps rendering). */
    public const FLAG_CHAT = 'chat';

    /**
     * Disable the named subsystems and write an audit row.
     *
     * @param array<int,string> $flags Subset of FLAG_* constants.
     * @param string $reason Free-text reason recorded in the audit row.
     * @param string $invoker 'cli' | 'admin_ui' | 'test' — recorded only.
     * @return array<int,string> Human-readable list of touched config keys.
     */
    public static function disable(array $flags, string $reason = '', string $invoker = 'cli'): array {
        $set = self::flag_set($flags);
        $touched = [];

        if ($set[self::FLAG_ALL]) {
            set_config('enabled', '0', 'local_ai_course_assistant');
            $touched[] = 'enabled (master)';
        }
        if ($set[self::FLAG_VOICE] || $set[self::FLAG_ALL]) {
            // Stash before clear so restore() can put it back exactly.
            $current = (string) get_config('local_ai_course_assistant', 'voice_active_realtime');
            if ($current !== '') {
                set_config('voice_active_realtime_backup', $current, 'local_ai_course_assistant');
            }
            set_config('voice_active_realtime', '', 'local_ai_course_assistant');
            $touched[] = 'voice_active_realtime';
        }
        if ($set[self::FLAG_RAG] || $set[self::FLAG_ALL]) {
            set_config('rag_enabled', '0', 'local_ai_course_assistant');
            set_config('rag_auto_reindex_drifted', '0', 'local_ai_course_assistant');
            $touched[] = 'rag_enabled, rag_auto_reindex_drifted';
        }
        if ($set[self::FLAG_OUTREACH] || $set[self::FLAG_ALL]) {
            set_config('outreach_master_enabled', '0', 'local_ai_course_assistant');
            $touched[] = 'outreach_master_enabled';
        }
        if ($set[self::FLAG_CHAT] && !$set[self::FLAG_ALL]) {
            // Chat-only: leave widget rendering, set spend cap to 0 so the
            // existing budget-paused path returns a friendly message.
            // Stash the prior cap so restore() can put it back.
            $current = (string) get_config('local_ai_course_assistant', 'spend_cap_site');
            if ($current !== '' && $current !== '0') {
                set_config('spend_cap_site_backup', $current, 'local_ai_course_assistant');
            }
            set_config('spend_cap_site', '0', 'local_ai_course_assistant');
            $touched[] = 'spend_cap_site (set to 0 = paused)';
        }

        self::write_audit('disable', $flags, $reason, $invoker, $touched);
        return $touched;
    }

    /**
     * Restore the named subsystems. Call with the same flags you used
     * to disable; pass FLAG_ALL to restore everything that was touched.
     *
     * @param array<int,string> $flags Subset of FLAG_* constants.
     * @param string $reason Free-text reason recorded in the audit row.
     * @param string $invoker
     * @return array<int,string>
     */
    public static function restore(array $flags, string $reason = '', string $invoker = 'cli'): array {
        $set = self::flag_set($flags);
        $touched = [];

        if ($set[self::FLAG_ALL]) {
            set_config('enabled', '1', 'local_ai_course_assistant');
            $touched[] = 'enabled (master)';
        }
        if ($set[self::FLAG_VOICE] || $set[self::FLAG_ALL]) {
            $backup = (string) get_config('local_ai_course_assistant', 'voice_active_realtime_backup');
            if ($backup !== '') {
                set_config('voice_active_realtime', $backup, 'local_ai_course_assistant');
                unset_config('voice_active_realtime_backup', 'local_ai_course_assistant');
            }
            $touched[] = 'voice_active_realtime (restored from backup)';
        }
        if ($set[self::FLAG_RAG] || $set[self::FLAG_ALL]) {
            set_config('rag_enabled', '1', 'local_ai_course_assistant');
            set_config('rag_auto_reindex_drifted', '1', 'local_ai_course_assistant');
            $touched[] = 'rag_enabled, rag_auto_reindex_drifted';
        }
        if ($set[self::FLAG_OUTREACH] || $set[self::FLAG_ALL]) {
            set_config('outreach_master_enabled', '1', 'local_ai_course_assistant');
            $touched[] = 'outreach_master_enabled';
        }
        if ($set[self::FLAG_CHAT] && !$set[self::FLAG_ALL]) {
            $backup = (string) get_config('local_ai_course_assistant', 'spend_cap_site_backup');
            if ($backup !== '') {
                set_config('spend_cap_site', $backup, 'local_ai_course_assistant');
                unset_config('spend_cap_site_backup', 'local_ai_course_assistant');
            }
            $touched[] = 'spend_cap_site (restored from backup)';
        }

        self::write_audit('restore', $flags, $reason, $invoker, $touched);
        return $touched;
    }

    /**
     * Normalise an array of flag strings into a boolean-keyed lookup.
     * Unknown flags are ignored — defensive against partner-tooling drift.
     *
     * @param array<int,string> $flags
     * @return array<string,bool>
     */
    private static function flag_set(array $flags): array {
        $valid = [self::FLAG_ALL, self::FLAG_VOICE, self::FLAG_RAG,
                  self::FLAG_OUTREACH, self::FLAG_CHAT];
        $set = array_fill_keys($valid, false);
        foreach ($flags as $f) {
            if (in_array($f, $valid, true)) {
                $set[$f] = true;
            }
        }
        return $set;
    }

    /**
     * Write the audit row. Failures are mtraced (CLI) or debugging()'d
     * (web) and never re-thrown — losing the audit row must not block
     * the actual disable from taking effect.
     *
     * @param string $action 'disable' | 'restore'
     * @param array<int,string> $flags
     * @param string $reason
     * @param string $invoker
     * @param array<int,string> $touched
     * @return void
     */
    private static function write_audit(string $action, array $flags, string $reason,
            string $invoker, array $touched): void {
        try {
            audit_logger::log('emergency_' . $action, 0, 0, [
                'flags' => array_values($flags),
                'touched' => $touched,
                'reason' => $reason,
                'invoked_by' => $invoker,
            ]);
        } catch (\Throwable $e) {
            debugging('emergency_control: audit logging failed: ' . $e->getMessage(),
                DEBUG_DEVELOPER);
        }
    }
}
