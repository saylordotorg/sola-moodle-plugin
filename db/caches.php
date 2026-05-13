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

/**
 * Cache definitions for local_ai_course_assistant.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$definitions = [
    // Rate limiting cache.
    'ratelimit' => [
        'mode' => cache_store::MODE_APPLICATION,
        'simplekeys' => true,
        'simpledata' => false,
        'ttl' => 120, // 2 minutes.
    ],
    // System prompt cache (per-course).
    'systemprompt' => [
        'mode' => cache_store::MODE_APPLICATION,
        'simplekeys' => true,
        'simpledata' => false,
        'ttl' => 3600, // 1 hour.
        'invalidationevents' => [
            'changesincourse',
        ],
    ],
    // Remote config cache (fetched from GitHub-hosted JSON, 1 hour TTL).
    'remoteconfig' => [
        'mode'       => cache_store::MODE_APPLICATION,
        'simplekeys' => true,
        'ttl'        => 3600, // 1 hour.
    ],
    // Spend-guard per-period spend totals. Short TTL: the cached value is only
    // consulted on the hot path (every LLM call). 60s is a reasonable
    // accuracy-vs-performance trade, and our thresholds are coarse (80/95/100%).
    'spend' => [
        'mode'       => cache_store::MODE_APPLICATION,
        'simplekeys' => true,
        'simpledata' => false,
        'ttl'        => 60,
    ],
    // v5.5.0: per-provider failover circuit state. Stores the timestamp at which
    // a label's circuit was opened (after a failed call). Lookups treat an
    // open circuit as "skip this provider until TTL elapses." TTL of 900s
    // matches the 15-minute back-off in failover_chain. Keyed by failover
    // label (e.g. "fireworks-llama8b") so the same provider used by
    // multiple groups shares circuit state.
    'failover_circuit' => [
        'mode'       => cache_store::MODE_APPLICATION,
        'simplekeys' => true,
        'simpledata' => false,
        'ttl'        => 900,
    ],
];
