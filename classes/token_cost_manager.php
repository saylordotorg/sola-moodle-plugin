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
 * Token cost manager — rate cards and cost estimation.
 *
 * Rates are USD per 1,000,000 tokens (industry standard as of early 2026).
 * Model strings are matched by prefix (longest match wins) so new dated
 * model variants (e.g. gpt-4o-2024-11-20) are covered automatically.
 *
 * Update the rate card when providers change pricing.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class token_cost_manager {

    /**
     * Rate card: USD per 1,000,000 tokens.
     * Keys are model prefix strings matched with str_starts_with.
     * Values: ['input' => float, 'output' => float].
     *
     * Prices sourced from provider pricing pages (March 2026).
     */
    private static array $rate_cards = [
        // ── OpenAI Chat ───────────────────────────────────────────────────────
        'gpt-4o-mini'       => ['input' =>  0.15, 'output' =>  0.60],
        'gpt-4o'            => ['input' =>  2.50, 'output' => 10.00],
        'gpt-4-turbo'       => ['input' => 10.00, 'output' => 30.00],
        'gpt-4'             => ['input' => 30.00, 'output' => 60.00],
        'gpt-3.5-turbo'     => ['input' =>  0.50, 'output' =>  1.50],
        'o1-mini'           => ['input' =>  3.00, 'output' => 12.00],
        'o1-preview'        => ['input' => 15.00, 'output' => 60.00],
        'o1'                => ['input' => 15.00, 'output' => 60.00],
        'o3-mini'           => ['input' =>  1.10, 'output' =>  4.40],
        'o3'                => ['input' => 10.00, 'output' => 40.00],

        // ── OpenAI Realtime (voice) ─────────────────────────────────────────
        'gpt-4o-realtime'   => ['input' =>  5.00, 'output' => 20.00],

        // ── OpenAI TTS ──────────────────────────────────────────────────────
        // TTS-1 charges per character (~$15/M chars). Approximated as per-token
        // at ~4 chars/token for consistency with the token-based rate card.
        'tts-1'             => ['input' =>  60.00, 'output' =>  0.00],
        'tts-1-hd'          => ['input' => 120.00, 'output' =>  0.00],

        // ── OpenAI Embeddings ───────────────────────────────────────────────
        'text-embedding-3-small' => ['input' => 0.02, 'output' => 0.00],
        'text-embedding-3-large' => ['input' => 0.13, 'output' => 0.00],
        'text-embedding-ada'     => ['input' => 0.10, 'output' => 0.00],

        // ── OpenAI Whisper (transcription) ──────────────────────────────────
        // Whisper charges ~$0.006/min. Approximated per token for the rate card.
        'whisper'           => ['input' =>  0.36, 'output' =>  0.00],

        // ── Anthropic Claude ──────────────────────────────────────────────────
        'claude-haiku'      => ['input' =>  0.80, 'output' =>  4.00],
        'claude-sonnet'     => ['input' =>  3.00, 'output' => 15.00],
        'claude-opus'       => ['input' => 15.00, 'output' => 75.00],

        // ── DeepSeek ──────────────────────────────────────────────────────────
        'deepseek-chat'     => ['input' =>  0.14, 'output' =>  0.28],
        'deepseek-reasoner' => ['input' =>  0.55, 'output' =>  2.19],

        // ── Google Gemini ─────────────────────────────────────────────────────
        'gemini-2.0-flash'  => ['input' =>  0.10, 'output' =>  0.40],
        'gemini-1.5-flash'  => ['input' =>  0.075, 'output' => 0.30],
        'gemini-1.5-pro'    => ['input' =>  1.25, 'output' =>  5.00],
        'gemini-pro'        => ['input' =>  0.50, 'output' =>  1.50],

        // ── Mistral AI ────────────────────────────────────────────────────────
        'mistral-large'     => ['input' =>  2.00, 'output' =>  6.00],
        'mistral-medium'    => ['input' =>  2.70, 'output' =>  8.10],
        'mistral-small'     => ['input' =>  0.20, 'output' =>  0.60],
        'open-mistral'      => ['input' =>  0.25, 'output' =>  0.25],
        'open-mixtral'      => ['input' =>  0.65, 'output' =>  0.65],
        'codestral'         => ['input' =>  0.30, 'output' =>  0.90],

        // ── Groq (open-source models) ─────────────────────────────────────────
        // Groq charges vary by model; these are approximate hosted rates.
        'llama-3.3-70b'     => ['input' =>  0.59, 'output' =>  0.79],
        'llama-3.1-70b'     => ['input' =>  0.59, 'output' =>  0.79],
        'llama-3.1-8b'      => ['input' =>  0.05, 'output' =>  0.08],
        'llama-3-70b'       => ['input' =>  0.59, 'output' =>  0.79],
        'llama-3-8b'        => ['input' =>  0.05, 'output' =>  0.08],
        'mixtral-8x7b'      => ['input' =>  0.24, 'output' =>  0.24],
        'gemma2-9b'         => ['input' =>  0.20, 'output' =>  0.20],

        // ── xAI (Grok) ───────────────────────────────────────────────────────
        'grok-3'            => ['input' =>  3.00, 'output' => 15.00],
        'grok-3-mini'       => ['input' =>  0.30, 'output' =>  0.50],
        'grok-2'            => ['input' =>  2.00, 'output' => 10.00],

        // ── MiniMax ───────────────────────────────────────────────────────────
        'abab5.5'           => ['input' =>  0.50, 'output' =>  0.50],
        'abab6.5'           => ['input' =>  1.00, 'output' =>  1.00],
    ];

    /**
     * Estimate the cost of a single API call in USD.
     *
     * Returns null if the model is not in the rate card (e.g. Ollama local models).
     *
     * @param string $modelname  Exact model string from the API response.
     * @param int    $prompttokens
     * @param int    $completiontokens
     * @return float|null  Cost in USD, or null if model is not known.
     */
    public static function estimate_cost(string $modelname, int $prompttokens, int $completiontokens): ?float {
        $rates = self::get_rates($modelname);
        if ($rates === null) {
            return null;
        }
        $inputcost  = ($prompttokens     / 1_000_000) * $rates['input'];
        $outputcost = ($completiontokens / 1_000_000) * $rates['output'];
        return $inputcost + $outputcost;
    }

    /**
     * Look up rate card by model name (prefix match, longest prefix wins).
     *
     * @param string $modelname
     * @return array|null ['input' => float, 'output' => float] or null.
     */
    public static function get_rates(string $modelname): ?array {
        $modelname = strtolower(trim($modelname));
        $best    = null;
        $bestlen = 0;
        foreach (self::$rate_cards as $prefix => $rates) {
            if (str_starts_with($modelname, $prefix) && strlen($prefix) > $bestlen) {
                $best    = $rates;
                $bestlen = strlen($prefix);
            }
        }
        return $best;
    }

    /**
     * Format a dollar amount for display.
     *
     * Uses more decimal places for sub-cent amounts so the value is meaningful.
     *
     * @param float|null $cost
     * @return string  e.g. "$0.000142", "$0.0183", "$1.24", or "—" if null.
     */
    public static function format_cost(?float $cost): string {
        if ($cost === null) {
            return '—';
        }
        if ($cost < 0.0001) {
            return '$' . number_format($cost, 6);
        }
        if ($cost < 0.01) {
            return '$' . number_format($cost, 4);
        }
        if ($cost < 1.0) {
            return '$' . number_format($cost, 3);
        }
        return '$' . number_format($cost, 2);
    }

    /**
     * Return all rate card entries for display in the admin UI.
     *
     * @return array  [['model', 'input_per_1m', 'output_per_1m'], ...]
     */
    public static function get_all_rates(): array {
        $result = [];
        foreach (self::$rate_cards as $prefix => $rates) {
            $result[] = [
                'model'         => $prefix . '…',
                'input_per_1m'  => '$' . number_format($rates['input'],  2),
                'output_per_1m' => '$' . number_format($rates['output'], 2),
            ];
        }
        return $result;
    }
}
