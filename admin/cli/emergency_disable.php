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
 * SOLA emergency-disable CLI (v5.4.5).
 *
 * Thin wrapper around emergency_control. The actual disable / restore /
 * audit logic lives in classes/emergency_control.php so PHPUnit can
 * exercise it directly. Run this from the on-call admin's shell when:
 *
 *   - a vulnerability is reported and the plugin must be taken offline immediately,
 *   - an LLM provider is misbehaving and needs to be cut off,
 *   - a runaway cost spike is in progress and spend caps haven't kicked in.
 *
 * Default action (no flags): full kill via FLAG_ALL.
 *
 * Subsystem flags target specific surfaces:
 *   --voice    only voice realtime / TTS
 *   --rag      only RAG retrieval and indexing
 *   --outreach only milestone / digest emails
 *   --chat     only chat (sets spend cap to 0; widget keeps rendering)
 *   --all      same as default
 *
 * Reverse with --restore.
 *
 * Usage:
 *   php admin/cli/emergency_disable.php
 *   php admin/cli/emergency_disable.php --voice --reason="provider auth bug"
 *   php admin/cli/emergency_disable.php --restore --voice
 *
 * Full incident-response runbook: .wiki/Security-Incident-Response.md.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('CLI_SCRIPT', true);

require(__DIR__ . '/../../../../config.php');

use local_ai_course_assistant\emergency_control;

$flags = [];
$restore = false;
$reason = '';
foreach ($argv as $arg) {
    foreach ([emergency_control::FLAG_ALL, emergency_control::FLAG_VOICE,
              emergency_control::FLAG_RAG, emergency_control::FLAG_OUTREACH,
              emergency_control::FLAG_CHAT] as $f) {
        if ($arg === '--' . $f) {
            $flags[] = $f;
        }
    }
    if ($arg === '--restore') {
        $restore = true;
    }
    if (preg_match('/^--reason=(.+)$/', $arg, $m)) {
        $reason = $m[1];
    }
}

if (empty($flags)) {
    $flags = [emergency_control::FLAG_ALL];
}

$action = $restore ? 'RESTORE' : 'DISABLE';
$touched = $restore
    ? emergency_control::restore($flags, $reason, 'cli')
    : emergency_control::disable($flags, $reason, 'cli');

purge_all_caches();

mtrace('SOLA emergency ' . $action);
mtrace('=============================');
mtrace('Touched config keys:');
foreach ($touched as $t) {
    mtrace('  - ' . $t);
}
if ($reason !== '') {
    mtrace('Reason: ' . $reason);
}
mtrace('Audit row written. Caches purged. Effect is immediate.');

if (!$restore) {
    mtrace('');
    mtrace('To reverse:');
    mtrace('  php admin/cli/emergency_disable.php --restore '
        . implode(' ', array_map(static fn($f) => '--' . $f, $flags)));
}

exit(0);
