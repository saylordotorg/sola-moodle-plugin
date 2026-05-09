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
 * SOLA provider benchmark CLI (v5.4.4).
 *
 * Sends a fixed set of typical SOLA prompts to every configured chat /
 * analytics / voice / RAG provider, records token usage + cost +
 * latency, and prints a recommendation per capability.
 *
 * Usage:
 *   php admin/cli/provider_benchmark.php
 *   php admin/cli/provider_benchmark.php --courseid=2
 *   php admin/cli/provider_benchmark.php --format=json
 *   php admin/cli/provider_benchmark.php --format=csv > report.csv
 *   php admin/cli/provider_benchmark.php --format=markdown
 *
 * Default format is markdown. Exit code 0 always (this is a diagnostic,
 * not a CI gate — partial provider failures are expected and reported).
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('CLI_SCRIPT', true);

require(__DIR__ . '/../../../../config.php');
global $CFG;
require_once($CFG->dirroot . '/lib/filelib.php');

use local_ai_course_assistant\provider_benchmark;

$courseid = 0;
$format = 'markdown';
foreach ($argv as $arg) {
    if (preg_match('/^--courseid=(\d+)$/', $arg, $m)) {
        $courseid = (int) $m[1];
    }
    if (preg_match('/^--format=(json|csv|markdown|text)$/', $arg, $m)) {
        $format = $m[1];
    }
}

$payload = provider_benchmark::run_all($courseid);

switch ($format) {
    case 'json':
        echo provider_benchmark::export_json($payload) . "\n";
        break;
    case 'csv':
        echo provider_benchmark::export_csv($payload);
        break;
    case 'text':
        echo provider_benchmark::export_text($payload);
        break;
    case 'markdown':
    default:
        echo provider_benchmark::export_markdown($payload);
        break;
}
exit(0);
