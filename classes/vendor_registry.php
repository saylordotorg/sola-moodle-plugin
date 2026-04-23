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
 * Operator-maintained inventory of AI provider DPA status.
 *
 * Drives the Vendor DPA column on the admin provider info page so an admin
 * can tell at a glance which drivers ship enabled with a workable
 * training-opt-out contract versus which need the Approved AI Vendor
 * review before being routed any Tier 2 or higher data.
 *
 * Update this table when a vendor ToS change lands; do not bury DPA
 * metadata in individual provider drivers.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class vendor_registry {

    public const TIER_1 = 1;
    public const TIER_2 = 2;
    public const TIER_3 = 3;
    public const TIER_4 = 4;

    /**
     * Status values. `training_opt_out`:
     *   - 'contractual': vendor's standard ToS blocks training on our inputs.
     *   - 'default_on':  vendor trains by default; admins must opt out per account.
     *   - 'none':        vendor does not offer an opt out at all.
     *   - 'local':       model runs entirely on Saylor infra, no vendor in the loop.
     *   - 'unknown':     not yet reviewed.
     *
     * `dpa_status`:
     *   - 'signed', 'available', 'negotiating', 'not_offered', 'not_applicable'.
     *
     * `retention`: free-form short string (e.g., '30 days', 'indefinite', 'none').
     */
    public const DPA_STATUS = [
        'openai' => [
            'label'            => 'OpenAI',
            'training_opt_out' => 'contractual',
            'dpa_status'       => 'signed',
            'retention'        => '30 days (abuse logs only)',
            'dpa_link'         => 'https://openai.com/policies/data-processing-addendum',
            'tier_ok'          => self::TIER_2,
        ],
        'anthropic' => [
            'label'            => 'Anthropic Claude',
            'training_opt_out' => 'contractual',
            'dpa_status'       => 'signed',
            'retention'        => '30 days (abuse logs only)',
            'dpa_link'         => 'https://www.anthropic.com/legal/dpa',
            'tier_ok'          => self::TIER_2,
        ],
        'claude' => [
            'label'            => 'Anthropic Claude',
            'training_opt_out' => 'contractual',
            'dpa_status'       => 'signed',
            'retention'        => '30 days (abuse logs only)',
            'dpa_link'         => 'https://www.anthropic.com/legal/dpa',
            'tier_ok'          => self::TIER_2,
        ],
        'xai' => [
            'label'            => 'xAI Grok',
            'training_opt_out' => 'default_on',
            'dpa_status'       => 'negotiating',
            'retention'        => 'unknown',
            'dpa_link'         => 'https://x.ai/legal/terms-of-service',
            'tier_ok'          => self::TIER_1,
        ],
        'mistral' => [
            'label'            => 'Mistral',
            'training_opt_out' => 'contractual',
            'dpa_status'       => 'available',
            'retention'        => '30 days',
            'dpa_link'         => 'https://mistral.ai/terms/',
            'tier_ok'          => self::TIER_2,
        ],
        'deepseek' => [
            'label'            => 'Deepseek',
            'training_opt_out' => 'default_on',
            'dpa_status'       => 'not_offered',
            'retention'        => 'unknown',
            'dpa_link'         => '',
            'tier_ok'          => self::TIER_1,
        ],
        'gemini' => [
            'label'            => 'Google Gemini (API)',
            'training_opt_out' => 'contractual',
            'dpa_status'       => 'signed',
            'retention'        => 'per Google Cloud DPA',
            'dpa_link'         => 'https://cloud.google.com/terms/data-processing-addendum',
            'tier_ok'          => self::TIER_2,
        ],
        'minimax' => [
            'label'            => 'MiniMax',
            'training_opt_out' => 'unknown',
            'dpa_status'       => 'negotiating',
            'retention'        => 'unknown',
            'dpa_link'         => '',
            'tier_ok'          => self::TIER_1,
        ],
        'openrouter' => [
            'label'            => 'OpenRouter',
            'training_opt_out' => 'contractual',
            'dpa_status'       => 'available',
            'retention'        => 'per upstream model',
            'dpa_link'         => 'https://openrouter.ai/terms',
            'tier_ok'          => self::TIER_2,
        ],
        'ollama' => [
            'label'            => 'Ollama (local)',
            'training_opt_out' => 'local',
            'dpa_status'       => 'not_applicable',
            'retention'        => 'none (local)',
            'dpa_link'         => '',
            'tier_ok'          => self::TIER_3,
        ],
        'coreai' => [
            'label'            => 'CoreAI',
            'training_opt_out' => 'unknown',
            'dpa_status'       => 'negotiating',
            'retention'        => 'unknown',
            'dpa_link'         => '',
            'tier_ok'          => self::TIER_1,
        ],
        'openai_compatible' => [
            'label'            => 'OpenAI-compatible (custom endpoint)',
            'training_opt_out' => 'unknown',
            'dpa_status'       => 'not_applicable',
            'retention'        => 'per operator',
            'dpa_link'         => '',
            'tier_ok'          => self::TIER_1,
        ],
        'custom' => [
            'label'            => 'Custom endpoint',
            'training_opt_out' => 'unknown',
            'dpa_status'       => 'not_applicable',
            'retention'        => 'per operator',
            'dpa_link'         => '',
            'tier_ok'          => self::TIER_1,
        ],
    ];

    /**
     * Look up DPA status for a provider id. Returns a fallback "unknown"
     * row for unrecognised providers so the UI always renders something.
     *
     * @param string $providerid
     * @return array
     */
    public static function for_provider(string $providerid): array {
        $key = strtolower(trim($providerid));
        if (isset(self::DPA_STATUS[$key])) {
            return self::DPA_STATUS[$key];
        }
        return [
            'label'            => $providerid,
            'training_opt_out' => 'unknown',
            'dpa_status'       => 'unknown',
            'retention'        => 'unknown',
            'dpa_link'         => '',
            'tier_ok'          => self::TIER_1,
        ];
    }

    /**
     * Return every entry in the registry (useful for admin overview tables).
     *
     * @return array[]
     */
    public static function all(): array {
        $out = [];
        foreach (self::DPA_STATUS as $key => $row) {
            $out[$key] = $row + ['provider' => $key];
        }
        return $out;
    }
}
