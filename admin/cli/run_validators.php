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
 * Static validator runner for the security corpus.
 *
 * Loads every *.json fixture under the named corpus directory, runs
 * each through its declared validator, and asserts the outcome matches
 * the fixture's "expect" field. No LLM round-trip — fixtures supply
 * both input and output.
 *
 * Usage:
 *   php admin/cli/run_validators.php
 *   php admin/cli/run_validators.php --corpus=tests/security/
 *   php admin/cli/run_validators.php --corpus=tests/security/pii_echo --verbose
 *
 * Exit code 0 on full pass, 1 on any failure.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('CLI_SCRIPT', true);

require(__DIR__ . '/../../../../config.php');

use local_ai_course_assistant\validators\credential_leak_validator;
use local_ai_course_assistant\validators\hallucination_validator;
use local_ai_course_assistant\validators\pii_echo_validator;
use local_ai_course_assistant\validators\result;
use local_ai_course_assistant\validators\validator_interface;

$corpus = __DIR__ . '/../../tests/security/';
$verbose = false;
foreach ($argv as $arg) {
    if (preg_match('/^--corpus=(.+)$/', $arg, $m)) {
        $corpus = $m[1];
    }
    if ($arg === '--verbose' || $arg === '-v') {
        $verbose = true;
    }
}

if (!is_dir($corpus)) {
    fwrite(STDERR, "Corpus directory not found: {$corpus}\n");
    exit(2);
}

$validators = [
    'pii_echo' => new pii_echo_validator(),
    'credential_leak' => new credential_leak_validator(),
    'hallucination' => new hallucination_validator(),
];

mtrace("SOLA Validator Suite");
mtrace("====================");
mtrace("Corpus: {$corpus}");
mtrace("");

$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($corpus));
$fixtures = [];
foreach ($rii as $file) {
    if ($file->isFile() && strtolower($file->getExtension()) === 'json') {
        $fixtures[] = $file->getPathname();
    }
}
sort($fixtures);

if (empty($fixtures)) {
    mtrace("No fixtures found.");
    exit(0);
}

$pass = 0;
$fail = 0;
$skipped = 0;
$failures = [];

foreach ($fixtures as $path) {
    $relative = ltrim(str_replace(realpath($corpus), '', realpath($path)), '/');
    $raw = file_get_contents($path);
    $fx = json_decode($raw, true);
    if (!is_array($fx)) {
        $skipped++;
        mtrace("SKIP  {$relative}  (invalid JSON)");
        continue;
    }

    $vname = $fx['validator'] ?? '';
    if (!isset($validators[$vname])) {
        $skipped++;
        mtrace("SKIP  {$relative}  (unknown validator '{$vname}')");
        continue;
    }

    /** @var validator_interface $validator */
    $validator = $validators[$vname];
    $context = ['input' => (string) ($fx['input'] ?? '')];
    if (isset($fx['rag_chunks']) && is_array($fx['rag_chunks'])) {
        $context['rag_chunks'] = $fx['rag_chunks'];
    }
    $r = $validator->validate((string) ($fx['output'] ?? ''), $context);

    $expect = $fx['expect'] ?? 'pass';
    $actual = $r->severity === result::SEVERITY_PASS ? 'pass' : 'fail';

    if ($expect === $actual) {
        $pass++;
        if ($verbose) {
            mtrace("PASS  {$relative}");
        }
    } else {
        $fail++;
        $name = $fx['name'] ?? $relative;
        $failures[] = [
            'path' => $relative,
            'name' => $name,
            'expect' => $expect,
            'actual' => $actual,
            'messages' => $r->messages,
        ];
        mtrace("FAIL  {$relative}  expected={$expect} actual={$actual}");
        foreach ($r->messages as $msg) {
            mtrace("        {$msg}");
        }
    }
}

mtrace("");
mtrace(sprintf(
    "Result: %d passed, %d failed, %d skipped (%d total)",
    $pass,
    $fail,
    $skipped,
    count($fixtures)
));

exit($fail === 0 ? 0 : 1);
