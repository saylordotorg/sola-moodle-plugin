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
 * Per-turn prompt metrics — file-based capture and aggregation.
 *
 * v5.0.0 patch 3 — when the `prompt_metrics_enabled` admin flag is on,
 * sse.php records one JSON line per chat turn to a daily rotating file
 * under `moodledata/sola_prompt_metrics/YYYY-MM-DD.log`. The metrics
 * admin page aggregates the last 7 days for per-category averages and
 * a budget recommendation. No DB schema; survives in moodledata until
 * the rotation window passes.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class prompt_metrics_logger {

    /** Number of days kept on disk. */
    public const RETENTION_DAYS = 7;

    /**
     * Append one record for a single chat turn. Best-effort — never throws.
     *
     * @param int $courseid
     * @param int $userid
     * @param int $totalchars Total assembled prompt size.
     * @param int $budgetchars Configured budget at the time.
     * @param array $breakdown Output of {@see \local_ai_course_assistant\prompt\builder::assemble}.
     * @return void
     */
    public static function record(int $courseid, int $userid, int $totalchars, int $budgetchars, array $breakdown): void {
        global $CFG;
        try {
            $dir = $CFG->dataroot . '/sola_prompt_metrics';
            if (!is_dir($dir)) {
                mkdir($dir, 0700, true);
            }
            // Aggregate by category.
            $by_cat = ['identity' => 0, 'context' => 0, 'learner' => 0, 'behavior' => 0, 'markers' => 0, 'safety' => 0];
            $dropped = 0;
            $truncated = 0;
            foreach ($breakdown as $info) {
                if (isset($by_cat[$info['category']])) {
                    $by_cat[$info['category']] += (int) $info['chars'];
                }
                if (empty($info['used'])) {
                    $dropped++;
                }
                if (!empty($info['truncated'])) {
                    $truncated++;
                }
            }
            $row = [
                't'         => time(),
                'course'    => $courseid,
                'user'      => $userid,
                'total'     => $totalchars,
                'budget'    => $budgetchars,
                'cats'      => $by_cat,
                'dropped'   => $dropped,
                'truncated' => $truncated,
            ];
            $path = $dir . '/' . date('Y-m-d') . '.log';
            file_put_contents($path, json_encode($row) . "\n", FILE_APPEND | LOCK_EX);
            // Cleanup older than retention window.
            self::cleanup_old($dir);
        } catch (\Throwable $e) {
            // Metrics logging is best-effort.
        }
    }

    /**
     * Aggregate the last N days of records.
     *
     * @param int $days Window in days (default RETENTION_DAYS).
     * @return array{
     *     samples: int,
     *     avg_total: int,
     *     max_total: int,
     *     avg_budget: int,
     *     pct_truncated: float,
     *     pct_dropped: float,
     *     by_cat_avg: array<string, int>,
     *     last_seen: int|null
     * }
     */
    public static function aggregate(int $days = self::RETENTION_DAYS): array {
        global $CFG;
        $dir = $CFG->dataroot . '/sola_prompt_metrics';
        $out = [
            'samples'       => 0,
            'avg_total'     => 0,
            'max_total'     => 0,
            'avg_budget'    => 0,
            'pct_truncated' => 0.0,
            'pct_dropped'   => 0.0,
            'by_cat_avg'    => ['identity' => 0, 'context' => 0, 'learner' => 0, 'behavior' => 0, 'markers' => 0, 'safety' => 0],
            'last_seen'     => null,
        ];
        if (!is_dir($dir)) {
            return $out;
        }
        $totalsum = 0;
        $budgetsum = 0;
        $maxtotal = 0;
        $truncatedturns = 0;
        $droppedturns = 0;
        $catsums = ['identity' => 0, 'context' => 0, 'learner' => 0, 'behavior' => 0, 'markers' => 0, 'safety' => 0];
        $samples = 0;
        $lastseen = null;
        for ($i = 0; $i < $days; $i++) {
            $path = $dir . '/' . date('Y-m-d', time() - $i * 86400) . '.log';
            if (!file_exists($path)) {
                continue;
            }
            $fh = fopen($path, 'r');
            if (!$fh) {
                continue;
            }
            while (($line = fgets($fh)) !== false) {
                $row = json_decode(trim($line), true);
                if (!is_array($row) || empty($row['total'])) {
                    continue;
                }
                $samples++;
                $totalsum += (int) $row['total'];
                $budgetsum += (int) ($row['budget'] ?? 0);
                $maxtotal = max($maxtotal, (int) $row['total']);
                if (!empty($row['truncated'])) {
                    $truncatedturns++;
                }
                if (!empty($row['dropped'])) {
                    $droppedturns++;
                }
                if (isset($row['cats']) && is_array($row['cats'])) {
                    foreach ($row['cats'] as $cat => $chars) {
                        if (isset($catsums[$cat])) {
                            $catsums[$cat] += (int) $chars;
                        }
                    }
                }
                $lastseen = max($lastseen ?? 0, (int) ($row['t'] ?? 0));
            }
            fclose($fh);
        }
        if ($samples === 0) {
            return $out;
        }
        $out['samples']       = $samples;
        $out['avg_total']     = (int) round($totalsum / $samples);
        $out['avg_budget']    = (int) round($budgetsum / $samples);
        $out['max_total']     = $maxtotal;
        $out['pct_truncated'] = round(100.0 * $truncatedturns / $samples, 1);
        $out['pct_dropped']   = round(100.0 * $droppedturns / $samples, 1);
        foreach ($catsums as $cat => $sum) {
            $out['by_cat_avg'][$cat] = (int) round($sum / $samples);
        }
        $out['last_seen'] = $lastseen ?: null;
        return $out;
    }

    /**
     * Recommend a `prompt_budget_chars` value from observed metrics.
     *
     * Strategy: take the 95th-percentile-ish (max_total + 200 char buffer)
     * if truncation was happening, or trim the average + 10% if there was
     * substantial unused headroom (avg below 80% of budget for >100 turns).
     *
     * @param array $agg Output of {@see aggregate}.
     * @return array{budget: int, rationale: string} | null Null if no data.
     */
    public static function recommend(array $agg): ?array {
        if ($agg['samples'] < 30) {
            return null;
        }
        $budget = (int) $agg['avg_budget'];
        $max = (int) $agg['max_total'];
        $avg = (int) $agg['avg_total'];

        if ($agg['pct_truncated'] > 1.0) {
            // Truncations happening — raise budget to clear them.
            $rec = (int) (ceil(($max + 500) / 1000) * 1000);
            return [
                'budget'    => $rec,
                'rationale' => sprintf('Raise budget to %d chars to eliminate truncation (currently truncating %.1f%% of turns; max observed %d chars).',
                    $rec, $agg['pct_truncated'], $max),
            ];
        }
        if ($budget > 0 && $avg < $budget * 0.7) {
            // Heavy headroom — could trim.
            $rec = (int) (ceil(($avg + 1000) / 1000) * 1000);
            if ($rec >= $budget) {
                return null;
            }
            return [
                'budget'    => $rec,
                'rationale' => sprintf('Trim budget to %d chars to save tokens (avg prompt is only %d chars vs current %d budget; headroom unused).',
                    $rec, $avg, $budget),
            ];
        }
        return null;
    }

    /**
     * Apply the recommended budget. Used by the auto-tune cron task.
     *
     * @return array{applied: bool, old: int, new: int|null, reason: string}
     */
    public static function apply_recommendation(): array {
        $agg = self::aggregate();
        $rec = self::recommend($agg);
        $rawcurrent = get_config('local_ai_course_assistant', 'prompt_budget_chars');
        $current = ($rawcurrent === false || $rawcurrent === '') ? 12000 : (int) $rawcurrent;
        if ($rec === null) {
            return ['applied' => false, 'old' => $current, 'new' => null, 'reason' => 'no recommendation (insufficient data or current value already optimal)'];
        }
        if ($rec['budget'] === $current) {
            return ['applied' => false, 'old' => $current, 'new' => $rec['budget'], 'reason' => 'recommendation matches current'];
        }
        set_config('prompt_budget_chars', $rec['budget'], 'local_ai_course_assistant');
        return ['applied' => true, 'old' => $current, 'new' => $rec['budget'], 'reason' => $rec['rationale']];
    }

    /**
     * Drop log files older than retention window.
     *
     * @param string $dir
     */
    private static function cleanup_old(string $dir): void {
        $cutoff = time() - (self::RETENTION_DAYS + 1) * 86400;
        foreach (glob($dir . '/*.log') as $f) {
            if (filemtime($f) < $cutoff) {
                @unlink($f);
            }
        }
    }
}
