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
 * Registry for voice API providers (Realtime, TTS, STT).
 *
 * Admins configure one or more voice providers via the `voice_providers` admin
 * setting. Each row supplies a provider id (openai|xai), an API key, a human
 * label, and default voice choices. Three separate admin settings then pick
 * which configured label is active for each capability:
 *   - voice_active_realtime
 *   - voice_active_tts
 *   - voice_active_stt
 *
 * This class parses the stored config and resolves the endpoint, key, and
 * voice for a given capability, falling back to the legacy realtime_apikey /
 * main apikey when no row is configured.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class voice_registry {

    public const CAPABILITY_REALTIME = 'realtime';
    public const CAPABILITY_TTS = 'tts';
    public const CAPABILITY_STT = 'stt';

    /**
     * Parse the voice_providers config into structured rows.
     * Stored format: provider|apikey|label|realtime_voice|tts_voice
     *
     * @return array List of rows with keys: provider, apikey, label, realtime_voice, tts_voice
     */
    public static function parse_rows(): array {
        $raw = get_config('local_ai_course_assistant', 'voice_providers') ?: '';
        $rows = [];
        foreach (explode("\n", $raw) as $line) {
            $line = trim($line);
            if ($line === '' || $line[0] === '#') {
                continue;
            }
            $parts = array_map('trim', explode('|', $line));
            $provider = strtolower($parts[0] ?? '');
            if ($provider === '') {
                continue;
            }
            $rows[] = [
                'provider'       => $provider,
                'apikey'         => $parts[1] ?? '',
                'label'          => $parts[2] ?? '',
                'realtime_voice' => $parts[3] ?? '',
                'tts_voice'      => $parts[4] ?? '',
            ];
        }
        return $rows;
    }

    /**
     * Resolve the active voice provider config for a given capability.
     *
     * Looks up the voice_active_{capability} admin setting, matches against
     * the parsed voice_providers rows by label (or falls back to first row),
     * and returns a full endpoint+key+voice bundle. Returns null when no
     * provider is configured at all.
     *
     * @param string $capability One of the CAPABILITY_* constants.
     * @return array|null ['provider', 'apikey', 'voice', 'endpoint']
     */
    public static function resolve(string $capability): ?array {
        // Spend guard: if voice is over cap, swap in the failover chain voice
        // provider (if any) before resolving. Failover returns null when none
        // is configured — in that case we still try the normal resolution so
        // the caller sees a nullable config and can surface "voice paused".
        try {
            $guardlevel = spend_guard::check(0, 'voice');
            if ($guardlevel === spend_guard::CAP_BLOCKED) {
                $failover = spend_guard::resolve_failover('voice');
                if ($failover !== null) {
                    return [
                        'provider' => $failover['provider'],
                        'apikey'   => $failover['apikey'],
                        'voice'    => self::default_voice_for($failover['provider']),
                        'endpoint' => self::endpoint_for($failover['provider'], $capability),
                        'label'    => $failover['label'] . ' (failover)',
                    ];
                }
                // No failover — block voice for this period.
                debugging('SOLA voice spend cap reached; no failover configured. Voice paused.', DEBUG_DEVELOPER);
                return null;
            }
        } catch (\Throwable $ignore) {
            // Guard errors never block the primary path.
        }

        $rows = self::parse_rows();
        $activelabel = get_config('local_ai_course_assistant', 'voice_active_' . $capability);

        $row = null;
        if ($activelabel !== false && $activelabel !== '') {
            foreach ($rows as $r) {
                if ($r['label'] === $activelabel) {
                    $row = $r;
                    break;
                }
            }
        }
        if ($row === null && !empty($rows)) {
            // Fallback: first configured row.
            $row = $rows[0];
        }

        if ($row === null) {
            // Legacy fallback: pre-v3.9.5 single-key config (realtime_apikey or main OpenAI key).
            $legacykey = get_config('local_ai_course_assistant', 'realtime_apikey');
            if (empty($legacykey)) {
                $mainprovider = get_config('local_ai_course_assistant', 'provider');
                if ($mainprovider === 'openai') {
                    $legacykey = get_config('local_ai_course_assistant', 'apikey');
                }
            }
            if (empty($legacykey)) {
                return null;
            }
            return [
                'provider' => 'openai',
                'apikey'   => $legacykey,
                'voice'    => get_config('local_ai_course_assistant', 'realtime_voice') ?: 'shimmer',
                'endpoint' => self::endpoint_for('openai', $capability),
                'label'    => '',
            ];
        }

        $voice = '';
        if ($capability === self::CAPABILITY_REALTIME) {
            $voice = $row['realtime_voice'];
        } else if ($capability === self::CAPABILITY_TTS) {
            $voice = $row['tts_voice'];
        }
        if ($voice === '') {
            $voice = self::default_voice_for($row['provider']);
        }

        return [
            'provider' => $row['provider'],
            'apikey'   => $row['apikey'],
            'voice'    => $voice,
            'endpoint' => self::endpoint_for($row['provider'], $capability),
            'label'    => $row['label'],
        ];
    }

    /**
     * Map provider+capability to the correct HTTPS/WebSocket endpoint.
     *
     * @param string $provider
     * @param string $capability
     * @return string
     */
    public static function endpoint_for(string $provider, string $capability): string {
        if ($provider === 'xai') {
            switch ($capability) {
                case self::CAPABILITY_REALTIME:
                    return 'wss://api.x.ai/v1/realtime';
                case self::CAPABILITY_TTS:
                    return 'https://api.x.ai/v1/tts';
                case self::CAPABILITY_STT:
                    return 'https://api.x.ai/v1/stt';
            }
        }
        // OpenAI is the default for any unknown provider id.
        switch ($capability) {
            case self::CAPABILITY_REALTIME:
                return 'wss://api.openai.com/v1/realtime?model=gpt-realtime-mini';
            case self::CAPABILITY_TTS:
                return 'https://api.openai.com/v1/audio/speech';
            case self::CAPABILITY_STT:
                return 'https://api.openai.com/v1/audio/transcriptions';
        }
        return '';
    }

    /**
     * Default voice identifier when a row leaves the voice column blank.
     *
     * @param string $provider
     * @return string
     */
    public static function default_voice_for(string $provider): string {
        return $provider === 'xai' ? 'eve' : 'shimmer';
    }

    /**
     * Voice identifiers known to each provider, used to populate UI selects.
     *
     * @param string $provider
     * @return array
     */
    public static function voices_for(string $provider): array {
        if ($provider === 'xai') {
            return ['eve', 'ara', 'leo', 'rex', 'sal'];
        }
        return ['shimmer', 'alloy', 'echo', 'fable', 'onyx', 'nova'];
    }

    /**
     * Return true when any voice capability (Realtime, TTS, or STT) resolves
     * to a configured provider. Used by the widget to suppress mic, speaker,
     * and voice tab affordances (and the matching help and welcome copy) on
     * installs where voice is not set up.
     *
     * @return bool
     */
    public static function any_voice_enabled(): bool {
        return self::resolve(self::CAPABILITY_REALTIME) !== null
            || self::resolve(self::CAPABILITY_TTS) !== null
            || self::resolve(self::CAPABILITY_STT) !== null;
    }

    /**
     * List of label strings from configured voice_providers rows, for UI dropdowns.
     *
     * @return array keyed by label => display string
     */
    public static function active_choices(): array {
        $rows = self::parse_rows();
        $out = [];
        foreach ($rows as $r) {
            $label = $r['label'] !== '' ? $r['label'] : ucfirst($r['provider']);
            $out[$label] = $label . ' (' . $r['provider'] . ')';
        }
        return $out;
    }
}
