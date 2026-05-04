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
 * Admin page — view the assembled prompt debug log in the browser.
 *
 * v5.0.0 patch 10 — surfaces the rolling log written by sse.php when
 * the `prompt_debug_enabled` admin flag is on. Saves admins from SSHing
 * into the server to read `moodledata/temp/sola_prompt_debug.log` by
 * hand. Each entry is rendered as a collapsible card with the per-turn
 * metadata, per-section breakdown, full assembled system prompt,
 * conversation history, and current user message — i.e. the exact
 * payload the model received that turn.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

require_login();
$syscontext = context_system::instance();
require_capability('moodle/site:config', $syscontext);

$limit = optional_param('limit', 10, PARAM_INT);
$limit = max(1, min(50, $limit));

$pageurl = new moodle_url('/local/ai_course_assistant/prompt_debug_view.php', ['limit' => $limit]);
$PAGE->set_url($pageurl);
$PAGE->set_context($syscontext);
$PAGE->set_title(get_string('prompt_debug_view:title', 'local_ai_course_assistant'));
$PAGE->set_heading(get_string('prompt_debug_view:title', 'local_ai_course_assistant'));
$PAGE->set_pagelayout('admin');

$enabled = (bool) get_config('local_ai_course_assistant', 'prompt_debug_enabled');
$logpath = $CFG->dataroot . '/temp/sola_prompt_debug.log';
$logexists = file_exists($logpath);
$logsize = $logexists ? filesize($logpath) : 0;

$entries = [];
if ($logexists && $logsize > 0) {
    $content = file_get_contents($logpath);
    if ($content !== false) {
        $entries = parse_entries($content, $limit);
    }
}

$settingsurl = new moodle_url('/admin/category.php', ['category' => 'local_ai_course_assistant']);

$templatedata = [
    'enabled'      => $enabled,
    'log_exists'   => $logexists,
    'log_size_kb'  => $logexists ? number_format($logsize / 1024, 1) : '0',
    'has_entries'  => !empty($entries),
    'entries'      => $entries,
    'limit'        => $limit,
    'next_limit'   => min(50, $limit + 10),
    'can_show_more' => count($entries) === $limit,
    'settings_url' => $settingsurl->out(false),
];

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('local_ai_course_assistant/prompt_debug_view', $templatedata);
echo $OUTPUT->footer();

/**
 * Parse the rolling debug log into structured entries, most recent first.
 *
 * The log file is written by sse.php in this format (one block per chat turn):
 *
 *     === YYYY-MM-DD HH:MM:SS courseid=N userid=N provider=X ===
 *     Total: N chars (~T tokens)
 *     Budget: N chars
 *     Sections (by category):
 *       (table rows)
 *     --- ASSEMBLED SYSTEM PROMPT ---
 *     <body>
 *
 *     --- HISTORY (N messages) ---
 *     [0] role (N chars): content
 *     ...
 *
 *     --- CURRENT USER MESSAGE (N chars) ---
 *     <message>
 *
 *     --- ATTACHMENT ---            (optional)
 *     filename=... mime=... size=N
 *
 *     ================================================================
 *
 * @param string $content Raw file content.
 * @param int $limit Maximum number of entries to return.
 * @return array<int, array<string, mixed>>
 */
function parse_entries(string $content, int $limit): array {
    // Split on the closing delimiter row. Empty trailing chunks are dropped.
    $blocks = preg_split('/^={60,}\s*$/m', $content, -1, PREG_SPLIT_NO_EMPTY);
    $blocks = array_reverse($blocks); // Most recent first.

    $out = [];
    foreach ($blocks as $block) {
        if (count($out) >= $limit) {
            break;
        }
        $block = trim($block);
        if ($block === '' || strpos($block, '=== ') !== 0) {
            continue;
        }
        $parsed = parse_one_entry($block);
        if ($parsed !== null) {
            $out[] = $parsed;
        }
    }
    return $out;
}

/**
 * Parse a single entry block into structured data for the mustache template.
 *
 * @param string $block Trimmed block content (no closing delimiter).
 * @return array<string, mixed>|null
 */
function parse_one_entry(string $block): ?array {
    // Header line: === YYYY-MM-DD HH:MM:SS courseid=N userid=N provider=X ===
    if (!preg_match('/^=== (.+?) ===\s*$/m', $block, $hm)) {
        return null;
    }
    $headerline = $hm[1];
    $timestamp = '';
    $courseid = 0;
    $userid = 0;
    $provider = '';
    if (preg_match('/^(\S+ \S+) courseid=(\d+) userid=(\d+) provider=(\S*)$/', $headerline, $pm)) {
        $timestamp = $pm[1];
        $courseid = (int) $pm[2];
        $userid = (int) $pm[3];
        $provider = $pm[4];
    } else {
        $timestamp = $headerline;
    }

    // Total / Budget lines.
    $total = '';
    $budget = '';
    if (preg_match('/^Total:\s*(.+)$/m', $block, $tm)) {
        $total = trim($tm[1]);
    }
    if (preg_match('/^Budget:\s*(.+)$/m', $block, $bm)) {
        $budget = trim($bm[1]);
    }

    // Section breakdown table (between "Sections" line and the next "--- " marker).
    $sections_text = '';
    if (preg_match('/Sections[^\n]*:\n(.*?)(?=\n---|\n$)/s', $block, $sm)) {
        $sections_text = rtrim($sm[1]);
    }

    // Named delimited blocks: --- NAME ---\n...\n
    $system_prompt = extract_named_block($block, 'ASSEMBLED SYSTEM PROMPT');
    $history = extract_named_block($block, 'HISTORY');
    $message = extract_named_block($block, 'CURRENT USER MESSAGE');
    $attachment = extract_named_block($block, 'ATTACHMENT');

    // v5.0.0 patch 13: previous "did the page section land?" badges were a
    // false-positive trap. The regex matched the section name appearing
    // anywhere in the breakdown text — so a section with [DROPPED] still
    // turned the badge green, exactly the case Tomi hit when his admin's
    // tight prompt budget dropped current_page_content. Now both badges
    // require non-zero chars AND no DROPPED flag in the breakdown line.
    // The TRUNCATED state surfaces as a separate badge so the diagnosis
    // is unambiguous from the card header alone.
    $page_state = section_state($sections_text, 'current_page_content', (string) $system_prompt, '## Current Page Content');
    $topic_state = section_state($sections_text, 'topic_focus', (string) $system_prompt, '## Current focus');

    return [
        'timestamp'         => $timestamp,
        'courseid'          => $courseid,
        'userid'            => $userid,
        'provider'          => $provider,
        'total'             => $total,
        'budget'            => $budget,
        'sections'          => $sections_text,
        'system_prompt'     => (string) $system_prompt,
        'history'           => (string) $history,
        'message'           => (string) $message,
        'attachment'        => (string) $attachment,
        'has_attachment'    => $attachment !== null && trim($attachment) !== '',
        // 'kept' / 'truncated' / 'dropped' / 'absent' for the page-content
        // and topic-focus sections. 'absent' = the section was never even
        // added (page module not detected, get_module_content empty, or
        // pageid never reached the server). The mustache template renders
        // a different badge per state so admins can read the diagnosis
        // straight from the card header.
        'page_state'        => $page_state,
        'page_kept'         => $page_state === 'kept',
        'page_truncated'    => $page_state === 'truncated',
        'page_dropped'      => $page_state === 'dropped',
        'page_absent'       => $page_state === 'absent',
        'topic_state'       => $topic_state,
        'topic_kept'        => $topic_state === 'kept',
        'topic_truncated'   => $topic_state === 'truncated',
        'topic_dropped'     => $topic_state === 'dropped',
        'topic_absent'      => $topic_state === 'absent',
    ];
}

/**
 * Resolve a section's state from the breakdown text and (as a fallback)
 * from whether its heading appears in the assembled prompt body.
 *
 * Returns one of:
 *   'kept'      — non-zero chars, no flags
 *   'truncated' — non-zero chars, [TRUNCATED] flag
 *   'dropped'   — section appears in breakdown but flagged [DROPPED]
 *   'absent'    — section name never appears in breakdown (never added)
 *
 * @param string $sections_text The "Sections (by category):" body.
 * @param string $section_name  e.g. "current_page_content".
 * @param string $prompt_body   The full assembled system prompt (fallback heading match).
 * @param string $heading       Heading to look for in the body (e.g. "## Current Page Content").
 * @return string
 */
function section_state(string $sections_text, string $section_name, string $prompt_body, string $heading): string {
    // Match a breakdown line like:
    //     1880  current_page_content
    //        0  current_page_content [DROPPED]
    //      500  current_page_content [TRUNCATED]
    $pattern = '/^\s*(\d+)\s+' . preg_quote($section_name, '/') . '\b(.*)$/m';
    if (preg_match($pattern, $sections_text, $m)) {
        $chars = (int) $m[1];
        $flags = (string) $m[2];
        if (stripos($flags, 'DROPPED') !== false || $chars === 0) {
            return 'dropped';
        }
        if (stripos($flags, 'TRUNCATED') !== false) {
            return 'truncated';
        }
        return 'kept';
    }
    // Fallback: if the breakdown is missing (legacy entries or malformed),
    // fall back to a body-heading match.
    if ($heading !== '' && strpos($prompt_body, $heading) !== false) {
        return 'kept';
    }
    return 'absent';
}

/**
 * Extract the body of a `--- NAME ---` block within an entry. Returns null
 * when the named block is absent (so the template can hide its row).
 *
 * @param string $block
 * @param string $name
 * @return string|null
 */
function extract_named_block(string $block, string $name): ?string {
    $pattern = '/--- ' . preg_quote($name, '/') . '[^\n]*---\n(.*?)(?=\n--- |\Z)/s';
    if (preg_match($pattern, $block, $m)) {
        return rtrim($m[1]);
    }
    return null;
}
