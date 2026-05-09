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
 * Admin UI for the SOLA provider benchmark (v5.4.4).
 *
 * GET (default): renders an admin page with a "Run benchmark now" button
 *                and last-run results when available.
 * GET ?run=1:    runs the full benchmark synchronously, then renders.
 * GET ?export=json|csv|markdown: streams the last-run results as a
 *                downloadable file. Requires a prior run in the session.
 *
 * Capability: site:config — admin-only by design. Each LLM call costs
 * money and we don't want unprivileged staff inflating the bill.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->dirroot . '/lib/filelib.php');

use local_ai_course_assistant\provider_benchmark;

require_login();
$context = \context_system::instance();
require_capability('moodle/site:config', $context);

$run = optional_param('run', 0, PARAM_INT);
$export = optional_param('export', '', PARAM_ALPHA);

$cachekey = 'provider_benchmark_last_payload';
$cache = \cache::make_from_params(\cache_store::MODE_APPLICATION,
    'local_ai_course_assistant', 'provider_benchmark');

// Run path: execute, store, redirect to clear the ?run=1 from the URL.
if ($run) {
    require_sesskey();
    $payload = provider_benchmark::run_all(0);
    $cache->set($cachekey, $payload);
    redirect(new moodle_url('/local/ai_course_assistant/provider_benchmark.php'));
}

// Export path: stream a download of the last-run payload.
if ($export !== '') {
    require_sesskey();
    $payload = $cache->get($cachekey);
    if (!$payload) {
        throw new \moodle_exception('error', 'local_ai_course_assistant', '',
            'No benchmark run available to export. Run the benchmark first.');
    }
    $stamp = date('Ymd-His', (int) ($payload['generated_at'] ?? time()));
    $filename = "sola-provider-benchmark-{$stamp}";
    switch ($export) {
        case 'json':
            send_file_handler(provider_benchmark::export_json($payload),
                $filename . '.json', 'application/json; charset=utf-8');
        case 'csv':
            send_file_handler(provider_benchmark::export_csv($payload),
                $filename . '.csv', 'text/csv; charset=utf-8');
        case 'markdown':
            send_file_handler(provider_benchmark::export_markdown($payload),
                $filename . '.md', 'text/markdown; charset=utf-8');
        default:
            throw new \moodle_exception('error', 'local_ai_course_assistant', '',
                'Unknown export format.');
    }
}

/**
 * Tiny inline file-streamer. Avoids the full Moodle file API since the
 * payload is in-memory and ephemeral. Sets Content-Disposition: attachment.
 */
function send_file_handler(string $body, string $filename, string $contenttype): void {
    header('Content-Type: ' . $contenttype);
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . strlen($body));
    echo $body;
    exit(0);
}

$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/ai_course_assistant/provider_benchmark.php'));
$PAGE->set_title('SOLA Provider Benchmark');
$PAGE->set_heading('SOLA Provider Benchmark');
$PAGE->set_pagelayout('admin');

echo $OUTPUT->header();
echo $OUTPUT->heading('SOLA Provider Benchmark');

echo \html_writer::tag('p',
    'Sends a fixed set of typical SOLA prompts to every configured AI provider, '
    . 'records token usage / cost / latency, and recommends one provider per capability. '
    . 'Each run makes real API calls — runs cost roughly &cent;5–&cent;20 depending on how many '
    . 'providers are configured.');

$payload = $cache->get($cachekey);

// Run button.
$runurl = new moodle_url('/local/ai_course_assistant/provider_benchmark.php',
    ['run' => 1, 'sesskey' => sesskey()]);
echo \html_writer::start_div('mb-3');
echo \html_writer::tag('a', $payload ? 'Re-run benchmark' : 'Run benchmark now',
    ['href' => $runurl->out(false), 'class' => 'btn btn-primary']);
if ($payload) {
    echo ' &nbsp; ';
    foreach (['markdown' => 'Export Markdown', 'csv' => 'Export CSV', 'json' => 'Export JSON'] as $fmt => $label) {
        $u = new moodle_url('/local/ai_course_assistant/provider_benchmark.php',
            ['export' => $fmt, 'sesskey' => sesskey()]);
        echo \html_writer::tag('a', $label,
            ['href' => $u->out(false), 'class' => 'btn btn-secondary mr-2']);
        echo ' ';
    }
}
echo \html_writer::end_div();

if (!$payload) {
    echo \html_writer::tag('p', \html_writer::tag('em',
        'No benchmark has been run yet. Click the button above to run.'));
    echo $OUTPUT->footer();
    exit;
}

// Render the results inline as HTML using the markdown export as a base.
$md = provider_benchmark::export_markdown($payload);
echo \html_writer::tag('div', format_text($md, FORMAT_MARKDOWN, ['noclean' => true]),
    ['class' => 'sola-benchmark-results']);

$generated = userdate((int) ($payload['generated_at'] ?? time()), '%Y-%m-%d %H:%M %Z');
echo \html_writer::tag('p', \html_writer::tag('em', 'Last run: ' . $generated),
    ['class' => 'text-muted']);

echo $OUTPUT->footer();
