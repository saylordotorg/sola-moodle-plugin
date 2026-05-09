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

use local_ai_course_assistant\provider\base_provider;

defined('MOODLE_INTERNAL') || die();

/**
 * Provider benchmark — runs a fixed set of typical SOLA prompts against
 * every configured provider and reports token usage, cost, latency, and
 * a recommended provider per capability (v5.4.4).
 *
 * Capabilities exercised:
 *   - chat:       5 typical learner prompts via base_provider
 *   - analytics:  3 analyst-shaped prompts via base_provider
 *   - voice:      enumerate configured voice providers (no live test;
 *                 realtime is WebSocket-only, not LLM-prompt-shaped)
 *   - rag:        embed 3 sample passages, record latency + dimensions
 *
 * Single-provider sites are first-class: the run still produces a row of
 * metrics and the recommendation is "this is the only provider you have".
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider_benchmark {

    /**
     * Typical learner prompts. Short and zero-context — this is a cost /
     * latency / contract benchmark, not a tutoring-quality benchmark.
     */
    public const CHAT_PROMPTS = [
        ['label' => 'concept_definition', 'prompt' => 'What is photosynthesis? Answer in two sentences.'],
        ['label' => 'one_sentence',       'prompt' => 'Explain Newton\'s second law in one sentence.'],
        ['label' => 'example',            'prompt' => 'Give a concrete example of supply and demand.'],
        ['label' => 'next_step',          'prompt' => 'I finished the unit on cell biology. What\'s a good next concept to study?'],
        ['label' => 'summarize',          'prompt' => 'Summarize what a quadratic equation is, in 2 sentences.'],
    ];

    /**
     * Analyst-shaped prompts that mirror what Learning Radar sends.
     */
    public const ANALYTICS_PROMPTS = [
        ['label' => 'count',     'prompt' => 'How would you measure active-learner engagement on a Moodle site?'],
        ['label' => 'cluster',   'prompt' => 'What are common sticking points first-year STEM students hit?'],
        ['label' => 'cost_qual', 'prompt' => 'Briefly: how do you balance LLM cost against response quality at scale?'],
    ];

    /**
     * Sample passages for the RAG embedding benchmark.
     */
    public const RAG_PASSAGES = [
        'Photosynthesis is the biological process by which plants convert sunlight into chemical energy stored in glucose, using carbon dioxide and water.',
        'Supply and demand describes the relationship between the quantity of a good producers wish to sell and the quantity buyers wish to purchase, given a price.',
        'A binary search algorithm finds the position of a target value within a sorted array by repeatedly dividing the search interval in half.',
    ];

    /**
     * Run every benchmark and return the full result set.
     *
     * @param int $courseid Optional course context for provider resolution.
     * @return array {
     *     chat: array, analytics: array, voice: array, rag: array,
     *     generated_at: int (epoch),
     *     site_brand: string
     * }
     */
    public static function run_all(int $courseid = 0): array {
        return [
            'chat' => self::run_chat($courseid),
            'analytics' => self::run_analytics($courseid),
            'voice' => self::list_voice_providers(),
            'rag' => self::run_rag($courseid),
            'generated_at' => time(),
            'site_brand' => self::brand(),
        ];
    }

    /**
     * Run the chat benchmark across every configured chat provider.
     *
     * @param int $courseid
     * @return array{providers:array,results:array,recommendation:?array,note:?string}
     */
    public static function run_chat(int $courseid = 0): array {
        return self::run_prompt_set(self::CHAT_PROMPTS, $courseid, 'chat');
    }

    /**
     * Run the analytics benchmark.
     *
     * @param int $courseid
     * @return array{providers:array,results:array,recommendation:?array,note:?string}
     */
    public static function run_analytics(int $courseid = 0): array {
        return self::run_prompt_set(self::ANALYTICS_PROMPTS, $courseid, 'analytics');
    }

    /**
     * Voice providers (Realtime). No live prompt — Realtime is WebSocket
     * and auth is per-session ephemeral. List the configured providers
     * and surface their model + voice; admin can read it as a config
     * snapshot.
     *
     * @return array{providers:array,recommendation:?array,note:?string}
     */
    public static function list_voice_providers(): array {
        $rows = [];
        try {
            $rows = voice_registry::parse_rows();
        } catch (\Throwable $e) {
            return [
                'providers' => [],
                'recommendation' => null,
                'note' => 'voice_registry unavailable: ' . $e->getMessage(),
            ];
        }
        $providers = [];
        foreach ($rows as $row) {
            $providers[] = [
                'id' => $row['provider'] ?? '',
                'label' => $row['label'] ?? ($row['provider'] ?? ''),
                'realtime_voice' => $row['realtime_voice'] ?? '',
                'tts_voice' => $row['tts_voice'] ?? '',
                'configured' => !empty($row['apikey']),
            ];
        }
        $recommendation = null;
        $active = (string) get_config('local_ai_course_assistant', 'voice_active_realtime');
        if ($active !== '') {
            foreach ($providers as $p) {
                if ($p['label'] === $active) {
                    $recommendation = ['provider' => $p['id'], 'label' => $p['label'],
                        'reason' => "Currently active for realtime (voice_active_realtime={$active})."];
                    break;
                }
            }
        }
        $note = empty($providers)
            ? 'No voice providers configured. Voice mode is unavailable until at least one row is added to the voice_providers admin setting.'
            : null;
        return [
            'providers' => $providers,
            'recommendation' => $recommendation,
            'note' => $note,
        ];
    }

    /**
     * Run the RAG embedding benchmark — embed each sample passage and
     * record latency + returned vector dimensions. RAG today uses a
     * single configured embedding provider, but the result row is still
     * useful for cost/latency snapshots.
     *
     * @param int $courseid
     * @return array{providers:array,results:array,recommendation:?array,note:?string}
     */
    public static function run_rag(int $courseid = 0): array {
        if (!get_config('local_ai_course_assistant', 'rag_enabled')) {
            return [
                'providers' => [],
                'results' => [],
                'recommendation' => null,
                'note' => 'RAG is disabled site-wide. Enable rag_enabled to benchmark embeddings.',
            ];
        }
        $providerid = (string) (get_config('local_ai_course_assistant', 'embed_provider') ?: '');
        $modelname = (string) (get_config('local_ai_course_assistant', 'embed_model') ?: '');

        if ($providerid === '') {
            return [
                'providers' => [],
                'results' => [],
                'recommendation' => null,
                'note' => 'rag_enabled is on but no embed_provider is configured.',
            ];
        }

        try {
            $provider = embedding_provider\base_embedding_provider::create_from_config();
        } catch (\Throwable $e) {
            return [
                'providers' => [['id' => $providerid, 'model' => $modelname]],
                'results' => [],
                'recommendation' => null,
                'note' => 'embedding provider factory failed: ' . $e->getMessage(),
            ];
        }

        $results = [];
        foreach (self::RAG_PASSAGES as $i => $passage) {
            $start = microtime(true);
            try {
                $vector = $provider->embed($passage);
                $latencyms = (int) round((microtime(true) - $start) * 1000);
                $results[] = [
                    'provider' => $providerid,
                    'model' => $modelname,
                    'prompt_label' => 'passage_' . ($i + 1),
                    'prompt_tokens' => 0,
                    'completion_tokens' => 0,
                    'cost_usd' => null,
                    'latency_ms' => $latencyms,
                    'ok' => is_array($vector) && !empty($vector),
                    'dimensions' => is_array($vector) ? count($vector) : 0,
                    'error' => '',
                ];
            } catch (\Throwable $e) {
                $latencyms = (int) round((microtime(true) - $start) * 1000);
                $results[] = [
                    'provider' => $providerid, 'model' => $modelname,
                    'prompt_label' => 'passage_' . ($i + 1),
                    'prompt_tokens' => 0, 'completion_tokens' => 0,
                    'cost_usd' => null, 'latency_ms' => $latencyms,
                    'ok' => false, 'dimensions' => 0,
                    'error' => $e->getMessage(),
                ];
            }
        }

        $recommendation = ['provider' => $providerid, 'model' => $modelname,
            'reason' => 'Only embedding provider configured. Embedding latency averaged ' .
            self::avg_latency($results) . 'ms across ' . count($results) . ' sample passage(s).'];

        return [
            'providers' => [['id' => $providerid, 'model' => $modelname]],
            'results' => $results,
            'recommendation' => $recommendation,
            'note' => null,
        ];
    }

    /**
     * Recommend the lowest-cost-per-prompt provider that completed every
     * prompt successfully. Falls back to lowest-latency when cost data is
     * unavailable. Returns null when zero providers completed cleanly.
     *
     * @param array $results Rows produced by run_chat/run_analytics.
     * @param int $promptcount How many prompts make a "complete" run.
     * @return array{provider:string,model:string,reason:string}|null
     */
    public static function recommend(array $results, int $promptcount): ?array {
        // Group by (provider, model) and reject any group that didn't
        // complete every prompt successfully.
        $groups = [];
        foreach ($results as $r) {
            $key = $r['provider'] . '|' . $r['model'];
            $groups[$key] ??= [
                'provider' => $r['provider'], 'model' => $r['model'],
                'rows' => [], 'success' => 0, 'total_cost' => 0.0,
                'total_latency' => 0, 'cost_known' => true,
            ];
            $groups[$key]['rows'][] = $r;
            if (!empty($r['ok'])) {
                $groups[$key]['success']++;
            }
            if ($r['cost_usd'] !== null) {
                $groups[$key]['total_cost'] += (float) $r['cost_usd'];
            } else {
                $groups[$key]['cost_known'] = false;
            }
            $groups[$key]['total_latency'] += (int) ($r['latency_ms'] ?? 0);
        }

        $eligible = array_filter($groups, static fn($g) => $g['success'] === $promptcount);
        if (empty($eligible)) {
            return null;
        }

        // Single eligible group — call it out explicitly so the admin sees
        // they've been handed the only option, not a comparison winner.
        if (count($eligible) === 1) {
            $g = reset($eligible);
            $cost = $g['cost_known']
                ? sprintf('$%.6f total across %d prompt(s)', $g['total_cost'], $promptcount)
                : 'cost data unavailable';
            return [
                'provider' => $g['provider'], 'model' => $g['model'],
                'reason' => "Only provider that completed every prompt; {$cost}.",
            ];
        }

        // Sort by (cost asc when known, then latency asc).
        usort($eligible, static function ($a, $b) {
            if ($a['cost_known'] && $b['cost_known']) {
                $cmp = $a['total_cost'] <=> $b['total_cost'];
                return $cmp !== 0 ? $cmp : ($a['total_latency'] <=> $b['total_latency']);
            }
            if ($a['cost_known'] !== $b['cost_known']) {
                // Known cost ranks above unknown.
                return $a['cost_known'] ? -1 : 1;
            }
            return $a['total_latency'] <=> $b['total_latency'];
        });
        $winner = $eligible[0];
        $reason = $winner['cost_known']
            ? sprintf('Lowest total cost ($%.6f) across %d prompts; latency %dms.',
                $winner['total_cost'], $promptcount, $winner['total_latency'])
            : sprintf('Cost data unavailable; lowest total latency (%dms) across %d prompts.',
                $winner['total_latency'], $promptcount);
        return [
            'provider' => $winner['provider'],
            'model' => $winner['model'],
            'reason' => $reason,
        ];
    }

    /**
     * Enumerate every chat-capable provider configured on the site:
     * the primary provider plus every row in comparison_providers.
     * De-duplicated by (id, model).
     *
     * @return array<int,array{id:string,label:string,model:string,apikey:string,
     *     temperature:?float,is_primary:bool}>
     */
    public static function list_chat_providers(): array {
        $rows = [];

        // 1. Primary provider — always first in the list.
        $primaryid = (string) (get_config('local_ai_course_assistant', 'provider') ?: '');
        if ($primaryid !== '') {
            $rows[] = [
                'id' => $primaryid,
                'label' => $primaryid . ' (primary)',
                'model' => (string) (get_config('local_ai_course_assistant', 'model') ?: ''),
                'apikey' => '',
                'temperature' => null,
                'is_primary' => true,
            ];
        }

        // 2. Comparison providers — multi-line config: provider|apikey|models|temperature
        $raw = (string) (get_config('local_ai_course_assistant', 'comparison_providers') ?: '');
        foreach (explode("\n", $raw) as $line) {
            $line = trim($line);
            if ($line === '' || $line[0] === '#') {
                continue;
            }
            $parts = array_map('trim', explode('|', $line));
            $id = strtolower($parts[0] ?? '');
            if ($id === '') {
                continue;
            }
            // For multiple-models rows, the first model is the one we test;
            // the comparison setting allows comma-separated alternatives.
            $models = array_filter(array_map('trim', explode(',', $parts[2] ?? '')));
            $model = $models[0] ?? '';
            $rows[] = [
                'id' => $id,
                'label' => $id,
                'model' => $model,
                'apikey' => $parts[1] ?? '',
                'temperature' => isset($parts[3]) && $parts[3] !== ''
                    ? (float) $parts[3] : null,
                'is_primary' => false,
            ];
        }

        // De-dupe by (id, model) — keep first occurrence so primary wins.
        $seen = [];
        $out = [];
        foreach ($rows as $r) {
            $key = $r['id'] . '|' . $r['model'];
            if (isset($seen[$key])) {
                continue;
            }
            $seen[$key] = true;
            $out[] = $r;
        }
        return $out;
    }

    /**
     * Internal: run a fixed prompt set against every chat provider,
     * shared by run_chat() and run_analytics().
     *
     * @param array $prompts
     * @param int $courseid
     * @param string $capability For diagnostic context.
     * @return array
     */
    private static function run_prompt_set(array $prompts, int $courseid, string $capability): array {
        $providers = self::list_chat_providers();
        if (empty($providers)) {
            return [
                'providers' => [],
                'results' => [],
                'recommendation' => null,
                'note' => 'No chat provider is configured. Set provider= in plugin '
                    . 'settings (and optionally fill comparison_providers to test alternatives).',
            ];
        }

        $systemprompt = self::system_prompt_for($capability);
        $results = [];

        foreach ($providers as $p) {
            foreach ($prompts as $promptdef) {
                $start = microtime(true);
                $row = [
                    'provider' => $p['id'],
                    'model' => $p['model'],
                    'prompt_label' => $promptdef['label'],
                    'prompt_tokens' => 0,
                    'completion_tokens' => 0,
                    'cost_usd' => null,
                    'latency_ms' => 0,
                    'ok' => false,
                    'response_excerpt' => '',
                    'error' => '',
                ];
                try {
                    if ($p['is_primary']) {
                        $instance = base_provider::create_from_config($courseid);
                    } else {
                        $instance = base_provider::create_for_comparison($p['id'], $p['model'], $courseid);
                    }
                    $response = $instance->chat_completion(
                        $systemprompt,
                        [['role' => 'user', 'content' => $promptdef['prompt']]],
                        ['max_tokens' => 256]
                    );
                    $row['latency_ms'] = (int) round((microtime(true) - $start) * 1000);
                    $row['response_excerpt'] = self::excerpt($response);
                    $row['ok'] = $response !== '';

                    // Many providers report usage via get_last_token_usage() AFTER a
                    // streaming call. The non-streaming chat_completion path may not
                    // expose token counts uniformly; cost will be null when unavailable.
                    $usage = method_exists($instance, 'get_last_token_usage')
                        ? $instance->get_last_token_usage()
                        : null;
                    if (is_array($usage)) {
                        $row['prompt_tokens'] = (int) ($usage['prompt_tokens'] ?? 0);
                        $row['completion_tokens'] = (int) ($usage['completion_tokens'] ?? 0);
                    }
                    if ($p['model'] !== '' && ($row['prompt_tokens'] > 0 || $row['completion_tokens'] > 0)) {
                        $row['cost_usd'] = token_cost_manager::estimate_cost(
                            $p['model'], $row['prompt_tokens'], $row['completion_tokens']);
                    }
                } catch (\Throwable $e) {
                    $row['latency_ms'] = (int) round((microtime(true) - $start) * 1000);
                    $row['error'] = $e->getMessage();
                }
                $results[] = $row;
            }
        }

        return [
            'providers' => $providers,
            'results' => $results,
            'recommendation' => self::recommend($results, count($prompts)),
            'note' => null,
        ];
    }

    /**
     * Short, neutral system prompt per capability. Kept minimal — the
     * benchmark is for cost / latency / contract, not prompt-engineering
     * comparison.
     *
     * @param string $capability chat|analytics
     * @return string
     */
    private static function system_prompt_for(string $capability): string {
        switch ($capability) {
            case 'analytics':
                return 'You are an analytics assistant. Answer concisely with concrete points.';
            default:
                return 'You are a course tutor. Answer concisely and stay on topic.';
        }
    }

    /**
     * Truncate a response to 240 chars with ellipsis. Keeps the result
     * table compact while still showing whether the model engaged.
     *
     * @param string $text
     * @return string
     */
    private static function excerpt(string $text): string {
        $text = trim((string) $text);
        if (mb_strlen($text) <= 240) {
            return $text;
        }
        return mb_substr($text, 0, 237) . '...';
    }

    /**
     * Average latency across a set of result rows.
     *
     * @param array $rows
     * @return int
     */
    private static function avg_latency(array $rows): int {
        if (empty($rows)) {
            return 0;
        }
        $total = 0;
        foreach ($rows as $r) {
            $total += (int) ($r['latency_ms'] ?? 0);
        }
        return (int) round($total / count($rows));
    }

    private static function brand(): string {
        try {
            return branding::short_name();
        } catch (\Throwable $e) {
            return 'SOLA';
        }
    }

    // ───────────────────────────────────────────────────────────
    // Exports — render run_all() output as JSON / CSV / Markdown / text.
    // ───────────────────────────────────────────────────────────

    /**
     * Pretty-printed JSON of the full result set. Suitable for email,
     * Redash, or audit retention.
     *
     * @param array $payload Output of run_all().
     * @return string
     */
    public static function export_json(array $payload): string {
        return json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    /**
     * CSV with one row per (capability, provider, model, prompt). Includes
     * a header row. Tokens, cost, latency, ok flag, error, and the
     * response excerpt are columns. Recommendations are written as a
     * trailing comment-style summary section.
     *
     * @param array $payload Output of run_all().
     * @return string
     */
    public static function export_csv(array $payload): string {
        $out = fopen('php://temp', 'r+');
        $headers = [
            'capability', 'provider', 'model', 'prompt_label',
            'ok', 'prompt_tokens', 'completion_tokens', 'cost_usd',
            'latency_ms', 'response_excerpt', 'error',
        ];
        fputcsv($out, $headers);
        foreach (['chat', 'analytics', 'rag'] as $cap) {
            foreach (($payload[$cap]['results'] ?? []) as $r) {
                fputcsv($out, [
                    $cap,
                    $r['provider'] ?? '', $r['model'] ?? '',
                    $r['prompt_label'] ?? '',
                    !empty($r['ok']) ? '1' : '0',
                    $r['prompt_tokens'] ?? '', $r['completion_tokens'] ?? '',
                    $r['cost_usd'] !== null ? sprintf('%.6f', $r['cost_usd']) : '',
                    $r['latency_ms'] ?? '',
                    $r['response_excerpt'] ?? ($r['dimensions'] ?? ''),
                    $r['error'] ?? '',
                ]);
            }
        }
        // Voice has no per-prompt rows — write the configured-providers list.
        foreach (($payload['voice']['providers'] ?? []) as $p) {
            fputcsv($out, [
                'voice', $p['id'] ?? '', $p['realtime_voice'] ?? '',
                'config_only', !empty($p['configured']) ? '1' : '0',
                '', '', '', '', $p['label'] ?? '', '',
            ]);
        }
        // Recommendation summary at the bottom.
        fputcsv($out, []);
        fputcsv($out, ['# Recommendations']);
        foreach (['chat', 'analytics', 'voice', 'rag'] as $cap) {
            $rec = $payload[$cap]['recommendation'] ?? null;
            if ($rec) {
                fputcsv($out, [
                    $cap,
                    $rec['provider'] ?? '',
                    $rec['model'] ?? '',
                    $rec['reason'] ?? '',
                ]);
            } else {
                $note = $payload[$cap]['note'] ?? '(no recommendation)';
                fputcsv($out, [$cap, '', '', $note]);
            }
        }
        rewind($out);
        $csv = (string) stream_get_contents($out);
        fclose($out);
        return $csv;
    }

    /**
     * Markdown table per capability, plus a summary section at the bottom.
     * Renders cleanly in GitHub issues, Confluence pages, and Slack
     * snippets. Suitable for the email export path too.
     *
     * @param array $payload Output of run_all().
     * @return string
     */
    public static function export_markdown(array $payload): string {
        $brand = (string) ($payload['site_brand'] ?? 'SOLA');
        $when = userdate((int) ($payload['generated_at'] ?? time()), '%Y-%m-%d %H:%M %Z');
        $out = "# {$brand} Provider Benchmark\n\n_Generated {$when}_\n\n";

        foreach ([
            'chat' => 'Chat',
            'analytics' => 'Analytics (Learning Radar)',
            'rag' => 'RAG (embeddings)',
        ] as $cap => $title) {
            $section = $payload[$cap] ?? [];
            $out .= "## {$title}\n\n";
            if (!empty($section['note'])) {
                $out .= '> ' . $section['note'] . "\n\n";
            }
            $rows = $section['results'] ?? [];
            if (empty($rows)) {
                $out .= "_(no results)_\n\n";
            } else {
                $out .= "| Provider | Model | Prompt | OK | Prompt tok | Compl tok | Cost (USD) | Latency (ms) | Response excerpt / Dims |\n";
                $out .= "|---|---|---|---|---|---|---|---|---|\n";
                foreach ($rows as $r) {
                    $cost = $r['cost_usd'] !== null ? sprintf('$%.6f', $r['cost_usd']) : '—';
                    $excerpt = $r['response_excerpt'] ?? '';
                    if ($cap === 'rag') {
                        $excerpt = isset($r['dimensions']) ? ($r['dimensions'] . ' dims') : '';
                    }
                    if (!empty($r['error'])) {
                        $excerpt = '⚠ ' . $r['error'];
                    }
                    // Pipe-escape for table-safe output.
                    $excerpt = str_replace('|', '\\|', (string) $excerpt);
                    $excerpt = str_replace("\n", ' ', $excerpt);
                    $out .= sprintf("| %s | %s | %s | %s | %d | %d | %s | %d | %s |\n",
                        (string) ($r['provider'] ?? ''),
                        (string) ($r['model'] ?? ''),
                        (string) ($r['prompt_label'] ?? ''),
                        !empty($r['ok']) ? '✓' : '✗',
                        (int) ($r['prompt_tokens'] ?? 0),
                        (int) ($r['completion_tokens'] ?? 0),
                        $cost,
                        (int) ($r['latency_ms'] ?? 0),
                        $excerpt);
                }
                $out .= "\n";
            }
            $rec = $section['recommendation'] ?? null;
            if ($rec) {
                $out .= '**Recommendation:** `' . ($rec['provider'] ?? '');
                if (!empty($rec['model'])) {
                    $out .= ' / ' . $rec['model'];
                }
                $out .= '` — ' . ($rec['reason'] ?? '') . "\n\n";
            }
        }

        // Voice — config snapshot only.
        $voice = $payload['voice'] ?? [];
        $out .= "## Voice (Realtime)\n\n";
        if (!empty($voice['note'])) {
            $out .= '> ' . $voice['note'] . "\n\n";
        }
        if (!empty($voice['providers'])) {
            $out .= "| Provider | Label | Realtime voice | TTS voice | Configured |\n";
            $out .= "|---|---|---|---|---|\n";
            foreach ($voice['providers'] as $p) {
                $out .= sprintf("| %s | %s | %s | %s | %s |\n",
                    (string) ($p['id'] ?? ''),
                    (string) ($p['label'] ?? ''),
                    (string) ($p['realtime_voice'] ?? ''),
                    (string) ($p['tts_voice'] ?? ''),
                    !empty($p['configured']) ? '✓' : '✗');
            }
            $out .= "\n";
        }
        $rec = $voice['recommendation'] ?? null;
        if ($rec) {
            $out .= '**Active:** `' . ($rec['provider'] ?? '') . '` — ' . ($rec['reason'] ?? '') . "\n\n";
        }

        return $out;
    }

    /**
     * Plain-text rendering — same content as markdown but without the
     * markdown markers. Used for emailable text bodies.
     *
     * @param array $payload
     * @return string
     */
    public static function export_text(array $payload): string {
        $md = self::export_markdown($payload);
        // Strip markdown table pipes / headers; this is best-effort but
        // sufficient for plain-text email bodies.
        $md = preg_replace('/\|---[^\n]*/', '', $md);
        $md = str_replace(['|', '`', '**'], '', $md);
        return $md;
    }
}
