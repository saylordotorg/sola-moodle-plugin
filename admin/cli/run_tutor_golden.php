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
 * SOLA golden tutor benchmark harness (v5.5.1).
 *
 * The fast-path provider selection protocol from
 * `.drafts/sola-multi-provider-optimization-plan.md` section 3.5.
 *
 * Three modes:
 *
 *   --mode=run     Send each prompt in tests/golden/tutor_prompts.json
 *                  through each row of `comparison_providers` (or the
 *                  filtered subset), capture response + token counts +
 *                  TTFT + total latency + cost. CSV out.
 *
 *   --mode=judge   For each row of the run CSV, send (prompt, response)
 *                  to a rubric LLM (default Claude Sonnet 4.6) that scores
 *                  Socratic guidance, factual accuracy, and tone match
 *                  on 1-5 each. CSV out.
 *
 *   --mode=report  Join run + judge CSVs, compute Pareto frontier on
 *                  cost vs. quality, print a Markdown decision matrix.
 *
 *   --mode=all     run, then judge, then report. Default.
 *
 * Usage:
 *   php admin/cli/run_tutor_golden.php
 *   php admin/cli/run_tutor_golden.php --mode=run --providers=together-llama8b,openai-mini
 *   php admin/cli/run_tutor_golden.php --mode=judge --in=runs/2026-05-13-run.csv
 *   php admin/cli/run_tutor_golden.php --mode=report --in=runs/2026-05-13-run.csv,runs/2026-05-13-judge.csv
 *
 * Output files default to runs/YYYY-MM-DD-{run,judge,report}.{csv,md}.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('CLI_SCRIPT', true);
require(__DIR__ . '/../../../../config.php');
global $CFG;
require_once($CFG->dirroot . '/lib/filelib.php');

use local_ai_course_assistant\provider\base_provider;
use local_ai_course_assistant\token_cost_manager;

// ---------- CLI args ----------
$mode = 'all';
$providersfilter = '';
$runin = '';
$judgein = '';
$outdir = __DIR__ . '/../../runs';
$datetag = date('Y-m-d-His');
$judgeprovider = 'claude';
$judgemodel = 'claude-sonnet-4-6';
$limit = 0; // 0 = all prompts

foreach ($argv as $arg) {
    if (preg_match('/^--mode=(run|judge|report|all)$/', $arg, $m)) {
        $mode = $m[1];
    } else if (preg_match('/^--providers=(.+)$/', $arg, $m)) {
        $providersfilter = trim($m[1]);
    } else if (preg_match('/^--in=(.+)$/', $arg, $m)) {
        $parts = explode(',', $m[1]);
        $runin = trim($parts[0] ?? '');
        $judgein = trim($parts[1] ?? '');
    } else if (preg_match('/^--out=(.+)$/', $arg, $m)) {
        $outdir = rtrim($m[1], '/');
    } else if (preg_match('/^--judge-provider=(.+)$/', $arg, $m)) {
        $judgeprovider = trim($m[1]);
    } else if (preg_match('/^--judge-model=(.+)$/', $arg, $m)) {
        $judgemodel = trim($m[1]);
    } else if (preg_match('/^--limit=(\d+)$/', $arg, $m)) {
        $limit = (int) $m[1];
    } else if ($arg === '--help' || $arg === '-h') {
        $help = <<<TXT
Usage: php run_tutor_golden.php [--mode=run|judge|report|all] [options]

Modes:
  run     Send golden prompts through every comparison_providers row.
  judge   Score each captured response via a rubric LLM.
  report  Pareto-frontier report on cost vs. quality.
  all     run, then judge, then report (default).

Options:
  --providers=label1,label2     Limit run to a subset of comparison_providers labels.
  --limit=N                     Limit run to the first N prompts (for smoke tests).
  --in=run.csv[,judge.csv]      Input CSV(s) for judge/report modes.
  --out=DIR                     Output directory (default: <plugin>/runs).
  --judge-provider=ID           Provider id for the rubric judge (default: claude).
  --judge-model=NAME            Model name for the rubric judge (default: claude-sonnet-4-6).
TXT;
        echo $help . "\n";
        exit(0);
    }
}

if (!is_dir($outdir)) {
    mkdir($outdir, 0775, true);
}

if ($mode === 'run' || $mode === 'all') {
    $runin = mode_run($providersfilter, $outdir, $datetag, $limit);
}
if ($mode === 'judge' || $mode === 'all') {
    if ($runin === '') {
        fwrite(STDERR, "ERROR: --mode=judge requires --in=<run.csv>\n");
        exit(1);
    }
    $judgein = mode_judge($runin, $outdir, $datetag, $judgeprovider, $judgemodel);
}
if ($mode === 'report' || $mode === 'all') {
    if ($runin === '' || $judgein === '') {
        fwrite(STDERR, "ERROR: --mode=report requires --in=<run.csv>,<judge.csv>\n");
        exit(1);
    }
    mode_report($runin, $judgein, $outdir, $datetag);
}
exit(0);

// ---------- mode: run ----------

/**
 * Send the golden prompt set through every (or filtered) comparison_providers
 * row. Captures response + token use + TTFT + total latency + cost. Returns
 * the absolute path of the resulting run CSV.
 *
 * @param string $providersfilter Comma list of labels, or empty for all.
 * @param string $outdir
 * @param string $datetag
 * @param int $limit Max prompts to send, 0 = all.
 * @return string Path to run CSV.
 */
function mode_run(string $providersfilter, string $outdir, string $datetag, int $limit): string {
    $prompts = load_prompts();
    if ($limit > 0) {
        $prompts = array_slice($prompts, 0, $limit);
    }
    $rows = parse_comparison_providers();
    if ($providersfilter !== '') {
        $wanted = array_map('strtolower', array_map('trim', explode(',', $providersfilter)));
        $rows = array_filter($rows, fn($r) => in_array(strtolower($r['label']), $wanted, true));
    }
    if (empty($rows)) {
        fwrite(STDERR, "ERROR: no comparison_providers rows to run against.\n");
        exit(1);
    }

    $outfile = "$outdir/$datetag-run.csv";
    $fh = fopen($outfile, 'w');
    fputcsv($fh, [
        'provider_label', 'provider_id', 'model', 'prompt_id', 'category',
        'response_text', 'prompt_tokens', 'completion_tokens',
        'ttft_ms', 'total_latency_ms', 'cost_cents', 'error', 'timestamp',
    ]);

    $systemprompt = "You are SOLA, Saylor University's AI learning coach. "
        . "Coach learners toward understanding rather than handing over answers. "
        . "Match the learner's language. Stay focused on the course material.";

    foreach ($rows as $row) {
        $urltag = !empty($row['apibaseurl']) ? ' @ ' . $row['apibaseurl'] : '';
        printf("\n[provider] %s (%s)%s\n", $row['label'], $row['models'], $urltag);
        foreach ($prompts as $p) {
            $result = run_one_call($row, $systemprompt, $p['text']);
            fputcsv($fh, [
                $row['label'],
                $row['provider'],
                $row['models'],
                $p['id'],
                $p['category'],
                str_replace(["\r\n", "\r", "\n"], ' ', $result['response']),
                $result['prompt_tokens'] ?? '',
                $result['completion_tokens'] ?? '',
                $result['ttft_ms'] ?? '',
                $result['total_latency_ms'] ?? '',
                $result['cost_cents'] ?? '',
                $result['error'] ?? '',
                date('c'),
            ]);
            printf("  %s [%s] %s\n", $p['id'],
                ($result['error'] ?? '') === '' ? 'ok' : 'err',
                $result['error'] ?? sprintf('%dms', $result['total_latency_ms'] ?? 0));
        }
    }
    fclose($fh);
    echo "\nrun CSV: $outfile\n";
    return $outfile;
}

/**
 * Execute one chat completion against one provider with one prompt.
 * Measures TTFT and total latency by using streaming. Captures token
 * usage and computes cost via token_cost_manager.
 *
 * @param array{label: string, provider: string, models: string, apikey: string, temperature: string} $row
 * @param string $systemprompt
 * @param string $userprompt
 * @return array{response: string, prompt_tokens: ?int, completion_tokens: ?int, ttft_ms: ?int, total_latency_ms: ?int, cost_cents: ?float, error: string}
 */
function run_one_call(array $row, string $systemprompt, string $userprompt): array {
    try {
        $provider = base_provider::create_for_comparison($row['provider'], $row['models'], 0);
        $start = microtime(true);
        $ttft = null;
        $response = '';
        $callback = function (string $chunk) use (&$ttft, &$response, $start) {
            if ($ttft === null && $chunk !== '') {
                $ttft = (int) round((microtime(true) - $start) * 1000);
            }
            $response .= $chunk;
        };
        $provider->chat_completion_stream($systemprompt, [
            ['role' => 'user', 'content' => $userprompt],
        ], $callback, ['temperature' => (float) ($row['temperature'] ?: 0.4)]);
        $total = (int) round((microtime(true) - $start) * 1000);
        $usage = $provider->get_last_token_usage();
        $cost = null;
        if (!empty($usage['prompt_tokens']) && isset($usage['completion_tokens']) && !empty($usage['model'])) {
            $estimate = token_cost_manager::estimate_cost(
                $usage['model'],
                (int) $usage['prompt_tokens'],
                (int) $usage['completion_tokens']
            );
            if ($estimate !== null) {
                $cost = round($estimate * 100, 6); // dollars -> cents
            }
        }
        return [
            'response'           => $response,
            'prompt_tokens'      => $usage['prompt_tokens'] ?? null,
            'completion_tokens'  => $usage['completion_tokens'] ?? null,
            'ttft_ms'            => $ttft,
            'total_latency_ms'   => $total,
            'cost_cents'         => $cost,
            'error'              => '',
        ];
    } catch (\Throwable $e) {
        return [
            'response'           => '',
            'prompt_tokens'      => null,
            'completion_tokens'  => null,
            'ttft_ms'            => null,
            'total_latency_ms'   => null,
            'cost_cents'         => null,
            'error'              => mb_substr((string) $e->getMessage(), 0, 200),
        ];
    }
}

// ---------- mode: judge ----------

/**
 * Read the run CSV; for each row, ask the rubric LLM to score the response
 * on Socratic guidance, factual accuracy, and tone match. Writes a judge
 * CSV with one row per scored response.
 *
 * @param string $runcsv Path to the run CSV.
 * @param string $outdir
 * @param string $datetag
 * @param string $judgeprovider Provider id (must be in comparison_providers OR have an apikey via standard config).
 * @param string $judgemodel Model name passed to the judge.
 * @return string Path to judge CSV.
 */
function mode_judge(string $runcsv, string $outdir, string $datetag, string $judgeprovider, string $judgemodel): string {
    if (!is_readable($runcsv)) {
        fwrite(STDERR, "ERROR: run CSV not readable: $runcsv\n");
        exit(1);
    }
    $outfile = "$outdir/$datetag-judge.csv";
    $fh = fopen($outfile, 'w');
    fputcsv($fh, ['provider_label', 'prompt_id', 'category', 'score_socratic', 'score_accuracy', 'score_tone', 'score_total', 'judge_notes', 'judge_error']);

    $judge = base_provider::create_for_comparison($judgeprovider, $judgemodel, 0);
    $in = fopen($runcsv, 'r');
    $header = fgetcsv($in);
    $col = array_flip($header);

    $prompts = load_prompts();
    $promptmap = [];
    foreach ($prompts as $p) {
        $promptmap[$p['id']] = $p['text'];
    }

    while (($r = fgetcsv($in)) !== false) {
        $promptid = $r[$col['prompt_id']];
        $label    = $r[$col['provider_label']];
        $category = $r[$col['category']];
        $response = $r[$col['response_text']];
        $error    = $r[$col['error']];
        if ($error !== '' || $response === '') {
            fputcsv($fh, [$label, $promptid, $category, '', '', '', '', '', 'skipped: response empty or errored']);
            continue;
        }
        $rubric = score_one($judge, $promptmap[$promptid] ?? '', $response);
        $total = ($rubric['socratic'] ?? 0) + ($rubric['accuracy'] ?? 0) + ($rubric['tone'] ?? 0);
        fputcsv($fh, [
            $label, $promptid, $category,
            $rubric['socratic'] ?? '',
            $rubric['accuracy'] ?? '',
            $rubric['tone']     ?? '',
            $total > 0 ? $total : '',
            $rubric['notes']    ?? '',
            $rubric['error']    ?? '',
        ]);
        printf("  judged %s/%s: socratic=%s accuracy=%s tone=%s\n",
            $label, $promptid,
            $rubric['socratic'] ?? 'x',
            $rubric['accuracy'] ?? 'x',
            $rubric['tone'] ?? 'x'
        );
    }
    fclose($in);
    fclose($fh);
    echo "\njudge CSV: $outfile\n";
    return $outfile;
}

/**
 * Send (prompt, response) to the rubric judge and parse a strict-JSON score.
 *
 * @param \local_ai_course_assistant\provider\provider_interface $judge
 * @param string $prompt
 * @param string $response
 * @return array{socratic?: int, accuracy?: int, tone?: int, notes?: string, error?: string}
 */
function score_one($judge, string $prompt, string $response): array {
    $systemprompt = <<<TXT
You are evaluating a tutoring AI's response on three dimensions. Score 1 to 5 on each.

Original student prompt is provided. Tutor response is provided. Score the response.

1. SOCRATIC (1 to 5): Does the tutor guide the student toward discovering the answer rather than handing it over?
   5 = excellent Socratic guidance, asks clarifying questions, scaffolds hints
   3 = mixed; gives some direct content but also asks/scaffolds
   1 = pure spoonfeeding; states the answer directly without engaging the learner

2. ACCURACY (1 to 5): Is the content factually correct and well grounded?
   5 = factually solid; no errors
   3 = mostly accurate; minor issues or oversimplifications
   1 = significant factual errors

3. TONE (1 to 5): Does the response sound like a warm, encouraging, professional tutor for adult learners at a free university? Not condescending, not robotic, not overly casual.
   5 = excellent tone match
   3 = neutral / acceptable
   1 = poor tone (cold, condescending, or off)

Output STRICT JSON only, no markdown fencing, no commentary:
{"socratic": N, "accuracy": N, "tone": N, "notes": "one sentence"}
TXT;

    $user = "STUDENT PROMPT:\n" . $prompt . "\n\nTUTOR RESPONSE:\n" . $response;

    try {
        $out = $judge->chat_completion($systemprompt, [
            ['role' => 'user', 'content' => $user],
        ], ['temperature' => 0.0]);
        // Strip optional code-fence wrapper.
        $out = preg_replace('/^```(?:json)?\s*|\s*```$/m', '', trim($out));
        $parsed = json_decode($out, true);
        if (!is_array($parsed)) {
            return ['error' => 'judge returned non-JSON: ' . mb_substr($out, 0, 80)];
        }
        return [
            'socratic' => (int) ($parsed['socratic'] ?? 0),
            'accuracy' => (int) ($parsed['accuracy'] ?? 0),
            'tone'     => (int) ($parsed['tone'] ?? 0),
            'notes'    => (string) ($parsed['notes'] ?? ''),
        ];
    } catch (\Throwable $e) {
        return ['error' => mb_substr($e->getMessage(), 0, 200)];
    }
}

// ---------- mode: report ----------

/**
 * Join the run + judge CSVs, compute per-provider aggregates, identify the
 * Pareto frontier on (cost, quality), and write a Markdown decision matrix.
 *
 * @param string $runcsv
 * @param string $judgecsv
 * @param string $outdir
 * @param string $datetag
 */
function mode_report(string $runcsv, string $judgecsv, string $outdir, string $datetag): void {
    $runrows = read_csv($runcsv);
    $judgerows = read_csv($judgecsv);

    $stats = []; // label -> aggregates
    foreach ($runrows as $r) {
        $label = $r['provider_label'];
        $stats[$label] ??= [
            'calls' => 0, 'errors' => 0,
            'cost_sum' => 0.0, 'cost_n' => 0,
            'ttft_ms' => [], 'total_ms' => [],
            'rubric_sum' => 0, 'rubric_n' => 0,
            'model' => $r['model'],
            'provider_id' => $r['provider_id'],
        ];
        $stats[$label]['calls']++;
        if (($r['error'] ?? '') !== '') {
            $stats[$label]['errors']++;
        }
        if ($r['cost_cents'] !== '' && $r['cost_cents'] !== null) {
            $stats[$label]['cost_sum'] += (float) $r['cost_cents'];
            $stats[$label]['cost_n']++;
        }
        if ($r['ttft_ms'] !== '' && $r['ttft_ms'] !== null) {
            $stats[$label]['ttft_ms'][] = (int) $r['ttft_ms'];
        }
        if ($r['total_latency_ms'] !== '' && $r['total_latency_ms'] !== null) {
            $stats[$label]['total_ms'][] = (int) $r['total_latency_ms'];
        }
    }
    foreach ($judgerows as $j) {
        $label = $j['provider_label'];
        if (!isset($stats[$label])) {
            continue;
        }
        if ($j['score_total'] !== '' && $j['score_total'] !== null) {
            $stats[$label]['rubric_sum'] += (int) $j['score_total'];
            $stats[$label]['rubric_n']++;
        }
    }

    // Compute summary rows for the report.
    $summary = [];
    foreach ($stats as $label => $s) {
        $summary[] = [
            'label'         => $label,
            'provider_id'   => $s['provider_id'],
            'model'         => $s['model'],
            'calls'         => $s['calls'],
            'errors'        => $s['errors'],
            'avg_cost_cents' => $s['cost_n'] > 0 ? $s['cost_sum'] / $s['cost_n'] : null,
            'p50_ttft_ms'   => percentile($s['ttft_ms'], 50),
            'p95_ttft_ms'   => percentile($s['ttft_ms'], 95),
            'p50_total_ms'  => percentile($s['total_ms'], 50),
            'avg_rubric'    => $s['rubric_n'] > 0 ? $s['rubric_sum'] / $s['rubric_n'] : null,
            'rubric_n'      => $s['rubric_n'],
        ];
    }

    // Sort by (rubric desc, cost asc) for the headline table.
    usort($summary, function ($a, $b) {
        $ra = $a['avg_rubric'] ?? -1;
        $rb = $b['avg_rubric'] ?? -1;
        if ($ra !== $rb) {
            return $rb <=> $ra;
        }
        $ca = $a['avg_cost_cents'] ?? PHP_INT_MAX;
        $cb = $b['avg_cost_cents'] ?? PHP_INT_MAX;
        return $ca <=> $cb;
    });

    // Pareto frontier: a provider is on the frontier if no other provider is
    // strictly better on BOTH cost (lower) and rubric (higher).
    $pareto = [];
    foreach ($summary as $a) {
        $dominated = false;
        foreach ($summary as $b) {
            if ($a === $b) continue;
            $bcost = $b['avg_cost_cents'] ?? PHP_INT_MAX;
            $brub = $b['avg_rubric'] ?? -1;
            $acost = $a['avg_cost_cents'] ?? PHP_INT_MAX;
            $arub = $a['avg_rubric'] ?? -1;
            if ($bcost <= $acost && $brub >= $arub && ($bcost < $acost || $brub > $arub)) {
                $dominated = true;
                break;
            }
        }
        if (!$dominated && ($a['avg_rubric'] !== null)) {
            $pareto[] = $a['label'];
        }
    }

    // Decision rule from .drafts/sola-multi-provider-optimization-plan.md section 3.5.
    $topscore = $summary[0]['avg_rubric'] ?? null;
    $winner = null;
    if ($topscore !== null) {
        foreach ($summary as $s) {
            if (($s['avg_rubric'] ?? -1) >= ($topscore - 0.3) && $s['avg_cost_cents'] !== null) {
                // Find the second-best on rubric to compare cost.
                $second = null;
                foreach ($summary as $t) {
                    if ($t['label'] !== $s['label'] && ($t['avg_rubric'] ?? -1) >= ($topscore - 0.3)) {
                        if ($second === null || ($t['avg_cost_cents'] ?? PHP_INT_MAX) < ($second['avg_cost_cents'] ?? PHP_INT_MAX)) {
                            $second = $t;
                        }
                    }
                }
                if ($second === null) {
                    $winner = $s; // only one within the rubric band; pick it.
                    break;
                }
                if (($s['avg_cost_cents'] ?? PHP_INT_MAX) < 0.6 * ($second['avg_cost_cents'] ?? PHP_INT_MAX)) {
                    $winner = $s;
                    break;
                }
            }
        }
    }

    // Render Markdown.
    $outfile = "$outdir/$datetag-report.md";
    $md = "# SOLA Golden Tutor Benchmark Report\n\n";
    $md .= "Generated: " . date('c') . "\n\n";
    $md .= "Sources:\n";
    $md .= "- run: `" . basename($runcsv) . "`\n";
    $md .= "- judge: `" . basename($judgecsv) . "`\n\n";
    $md .= "## Per-provider summary (sorted by rubric mean desc, then cost asc)\n\n";
    $md .= "| Provider | Model | Calls | Errors | Avg cost (cents/call) | P50 TTFT (ms) | P95 TTFT (ms) | P50 total (ms) | Avg rubric (max 15) | Pareto? |\n";
    $md .= "|----------|-------|------:|------:|---:|---:|---:|---:|---:|:-:|\n";
    foreach ($summary as $s) {
        $onpareto = in_array($s['label'], $pareto, true) ? 'yes' : '';
        $md .= sprintf("| %s | %s | %d | %d | %s | %s | %s | %s | %s | %s |\n",
            $s['label'], $s['model'], $s['calls'], $s['errors'],
            $s['avg_cost_cents'] !== null ? number_format($s['avg_cost_cents'], 3) : 'n/a',
            $s['p50_ttft_ms']  !== null ? $s['p50_ttft_ms']  : 'n/a',
            $s['p95_ttft_ms']  !== null ? $s['p95_ttft_ms']  : 'n/a',
            $s['p50_total_ms'] !== null ? $s['p50_total_ms'] : 'n/a',
            $s['avg_rubric']   !== null ? number_format($s['avg_rubric'], 2) : 'n/a',
            $onpareto
        );
    }
    $md .= "\n## Decision\n\n";
    if ($winner !== null) {
        $md .= "Winner per the section 3.5 decision rule: **" . $winner['label'] . "** ("
            . $winner['provider_id'] . " / " . $winner['model'] . ").\n";
        $md .= "- Avg rubric: " . number_format($winner['avg_rubric'], 2) . " (within 0.3 of the top score).\n";
        $md .= "- Avg cost: " . number_format($winner['avg_cost_cents'], 3) . " cents/call.\n";
        $md .= "- Pareto frontier: " . (in_array($winner['label'], $pareto, true) ? 'yes' : 'no') . ".\n";
    } else {
        $md .= "No single provider meets the section 3.5 decision rule (within 0.3 of top rubric AND less than 60% of second-place cost). ";
        $md .= "Keep the existing three-group A/B/C configuration. Refresh the failover chain to put the second-place provider in each group's first failover slot.\n";
    }
    $md .= "\n## Pareto frontier (rubric vs. cost)\n\n";
    $md .= "These providers are not dominated by any other on BOTH cost (lower) and rubric (higher):\n\n";
    foreach ($pareto as $label) {
        $md .= "- " . $label . "\n";
    }
    if (empty($pareto)) {
        $md .= "(none; no rubric data)\n";
    }
    file_put_contents($outfile, $md);
    echo "\nreport: $outfile\n";
    echo file_get_contents($outfile);
}

// ---------- helpers ----------

/**
 * Load the golden prompt set.
 *
 * @return array<int, array{id: string, category: string, text: string}>
 */
function load_prompts(): array {
    $path = __DIR__ . '/../../tests/golden/tutor_prompts.json';
    $raw = file_get_contents($path);
    if ($raw === false) {
        fwrite(STDERR, "ERROR: cannot read $path\n");
        exit(1);
    }
    $j = json_decode($raw, true);
    if (!is_array($j) || empty($j['prompts'])) {
        fwrite(STDERR, "ERROR: tutor_prompts.json is malformed\n");
        exit(1);
    }
    return $j['prompts'];
}

/**
 * Parse comparison_providers admin setting into an array of rows.
 *
 * v5.5.2: 5th column is an optional per-row base URL. Blank or absent means
 * the provider class's hardcoded default is used. The harness reads it here
 * for log display only; the actual provider construction picks it up via
 * base_provider::lookup_comparison_row, which reads the same config row.
 *
 * @return array<int, array{label: string, provider: string, models: string, apikey: string, temperature: string, apibaseurl: string}>
 */
function parse_comparison_providers(): array {
    $raw = (string) (get_config('local_ai_course_assistant', 'comparison_providers') ?: '');
    $out = [];
    foreach (preg_split("/\r?\n/", $raw) as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#') {
            continue;
        }
        $parts = array_map('trim', explode('|', $line));
        if (count($parts) < 3 || empty($parts[1])) {
            continue;
        }
        $out[] = [
            'label'       => strtolower($parts[0]),
            'provider'    => strtolower($parts[0]),
            'apikey'      => $parts[1],
            'models'      => $parts[2],
            'temperature' => $parts[3] ?? '',
            'apibaseurl'  => $parts[4] ?? '',
        ];
    }
    return $out;
}

/**
 * Read a CSV with header row into an array of associative arrays.
 *
 * @param string $path
 * @return array<int, array<string, string>>
 */
function read_csv(string $path): array {
    if (!is_readable($path)) {
        fwrite(STDERR, "ERROR: CSV not readable: $path\n");
        exit(1);
    }
    $fh = fopen($path, 'r');
    $header = fgetcsv($fh);
    $rows = [];
    while (($r = fgetcsv($fh)) !== false) {
        $rows[] = array_combine($header, $r);
    }
    fclose($fh);
    return $rows;
}

/**
 * Nearest-rank percentile.
 *
 * @param array<int, int|float> $values
 * @param int $p 0..100
 * @return int|float|null
 */
function percentile(array $values, int $p) {
    if (empty($values)) return null;
    sort($values);
    $idx = (int) ceil(($p / 100) * count($values)) - 1;
    return $values[max(0, min(count($values) - 1, $idx))];
}
