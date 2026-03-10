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
 * SSE streaming endpoint for AI tutor chat.
 *
 * This endpoint receives a user message, streams the AI response
 * token-by-token using Server-Sent Events.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('AJAX_SCRIPT', true);

require_once(__DIR__ . '/../../config.php');
require_once($CFG->dirroot . '/lib/filelib.php'); // Required for \curl class used by embedding providers.

use local_ai_course_assistant\conversation_manager;
use local_ai_course_assistant\context_builder;
use local_ai_course_assistant\provider\base_provider;
use local_ai_course_assistant\zendesk_client;
use local_ai_course_assistant\rate_limiter;
use local_ai_course_assistant\audit_logger;
use local_ai_course_assistant\content_indexer;
use local_ai_course_assistant\rag_retriever;

// Enforce POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die();
}

require_login();
require_sesskey();

$courseid   = required_param('courseid', PARAM_INT);
$message    = required_param('message', PARAM_RAW);
$lang       = optional_param('lang', '', PARAM_ALPHA);      // ISO 639-1 language preference.
$pageid     = optional_param('pageid', 0, PARAM_INT);       // Course-module ID of the current page.
$pagetitle  = optional_param('pagetitle', '', PARAM_TEXT);  // Title of the current resource/activity.
$coachstyle = optional_param('coachingstyle', '', PARAM_ALPHA); // Coaching style: coach, buddy, tutor.
$timelimit  = optional_param('timelimit', 0, PARAM_INT);      // Time constraint in minutes (0 = none).
$firstgen   = optional_param('firstgen', 0, PARAM_BOOL);      // First-generation student mode.
$completion = optional_param('completion', 0, PARAM_INT);      // Course completion percentage (0-100).

// Validate context and capability.
$context = context_course::instance($courseid);
require_capability('local/ai_course_assistant:use', $context);

// Rate limiting checks.
if (rate_limiter::is_rate_limited($USER->id, 'sse_stream', 20, 60)) {
    http_response_code(429);
    header('Retry-After: 60');
    echo json_encode(['error' => get_string('chat:error_ratelimit', 'local_ai_course_assistant')]);
    die();
}

if (rate_limiter::is_ip_rate_limited('sse_stream', 100, 60)) {
    http_response_code(429);
    header('Retry-After: 60');
    echo json_encode(['error' => 'Too many requests from your IP address']);
    die();
}

// Disable compression — it buffers output and breaks SSE streaming.
if (function_exists('apache_setenv')) {
    @apache_setenv('no-gzip', 1);
}
@ini_set('zlib.output_compression', 'Off');
@ini_set('output_buffering', 'Off');

// Set SSE headers.
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('X-Accel-Buffering: no');
header('Connection: keep-alive');

// Critical: close the session to avoid blocking other user requests.
\core\session\manager::write_close();

// Discard all output buffers (do NOT flush — that sends buffered Moodle
// init content which would corrupt the SSE stream).
while (ob_get_level() > 0) {
    ob_end_clean();
}

// Ensure each echo/flush goes directly to the client without buffering.
ob_implicit_flush(true);

/**
 * Send an SSE data event.
 *
 * @param array $data Data to encode as JSON.
 */
function sse_send(array $data): void {
    echo 'data: ' . json_encode($data) . "\n\n";
    if (ob_get_level() > 0) {
        ob_flush();
    }
    flush();
}

try {
    $userid = $USER->id;

    // Check plugin is enabled.
    if (!get_config('local_ai_course_assistant', 'enabled')) {
        sse_send(['error' => get_string('chat:error_notconfigured', 'local_ai_course_assistant')]);
        die();
    }

    // Get or create conversation.
    $conv = conversation_manager::get_or_create_conversation($userid, $courseid);

    // Check if off-topic lockout is active.
    $offtopicenabled = get_config('local_ai_course_assistant', 'offtopic_enabled');
    $offtopicmax = (int) (get_config('local_ai_course_assistant', 'offtopic_max') ?: 3);
    $offtopicaction = get_config('local_ai_course_assistant', 'offtopic_action') ?: 'warn';
    $lockoutminutes = (int) (get_config('local_ai_course_assistant', 'offtopic_lockout_duration') ?: 30);

    // Check time-based lockout.
    if ($offtopicenabled && !empty($conv->offtopic_locked_until) && time() < (int) $conv->offtopic_locked_until) {
        $remaining = (int) $conv->offtopic_locked_until - time();
        $remainingmins = ceil($remaining / 60);
        $lockoutmsg = get_string('chat:offtopic_locked', 'local_ai_course_assistant', $remainingmins);
        sse_send(['token' => $lockoutmsg]);
        sse_send(['done' => true, 'locked' => true, 'locked_until' => (int) $conv->offtopic_locked_until]);
        die();
    }

    // Clear expired lockout.
    if (!empty($conv->offtopic_locked_until) && time() >= (int) $conv->offtopic_locked_until) {
        global $DB;
        $DB->set_field('local_ai_course_assistant_convs', 'offtopic_locked_until', null, ['id' => $conv->id]);
        $DB->set_field('local_ai_course_assistant_convs', 'offtopic_count', 0, ['id' => $conv->id]);
        $conv->offtopic_count = 0;
        $conv->offtopic_locked_until = null;
    }

    // Save user message.
    conversation_manager::add_message($conv->id, $userid, $courseid, 'user', $message);

    // Audit log the message.
    audit_logger::log('message_sent', $userid, $courseid, [
        'conversation_id' => $conv->id,
        'role' => 'user',
        'message_length' => strlen($message),
    ]);

    // RAG retrieval: embed user query and fetch relevant chunks.
    $retrievedchunks = [];
    $ragcourseraw = get_config('local_ai_course_assistant', 'rag_enabled_course_' . $courseid);
    $ragcourseenabled = ($ragcourseraw === false) || (bool)$ragcourseraw; // default enabled
    if (get_config('local_ai_course_assistant', 'rag_enabled') && $ragcourseenabled) {
        try {
            if (!content_indexer::is_course_indexed($courseid)) {
                content_indexer::index_course($courseid);
            }
            $topk = (int) (get_config('local_ai_course_assistant', 'rag_topk') ?: 5);
            $retrievedchunks = rag_retriever::retrieve($courseid, $message, $topk);
        } catch (\Throwable $e) {
            // Fallback to content stuffing — log but don't fail the request.
            debugging('RAG retrieval failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
            $retrievedchunks = [];
        }
    }

    // Build system prompt and get history.
    $systemprompt = context_builder::build_system_prompt(
        $courseid, $userid, $lang, $retrievedchunks, $pageid, $pagetitle
    );

    // Inject full page content when the student is viewing a specific resource.
    if ($pageid > 0) {
        $pagecontent = context_builder::get_module_content($pageid, 12000);
        if (!empty($pagecontent)) {
            // Replace the title-only page context with full content.
            $marker = "## Current Page\n";
            $pos = strpos($systemprompt, $marker);
            if ($pos !== false) {
                // Remove everything from the marker to the end.
                $systemprompt = substr($systemprompt, 0, $pos);
            }
            $systemprompt .= "## Current Page Content\n"
                . "The student is currently viewing \"{$pagetitle}\". Here is the full text of this page:\n\n"
                . $pagecontent
                . "\n\nUse this content to give specific, grounded answers. Quote relevant passages when helpful.";
        }
    }

    // Append coaching style instruction if the student set a preference.
    if (!empty($coachstyle)) {
        $styles = [
            'coach' => 'You are a Motivational Coach. Be enthusiastic, encouraging, and upbeat. '
                . 'Celebrate effort and progress. Use phrases like "Great thinking!", "You\'re making real progress!", '
                . '"Let\'s keep that momentum going!". Frame challenges as opportunities.',
            'buddy' => 'You are a Study Buddy. Be casual, friendly, and conversational. '
                . 'Use informal language as if talking to a friend. Say things like "Oh nice question!", '
                . '"Yeah that\'s a tricky one", "Let\'s figure this out together". Keep it relaxed and supportive.',
            'tutor' => 'You are a Direct Tutor. Be clear, concise, and efficient. '
                . 'Get straight to the point. Provide structured explanations with minimal filler. '
                . 'Focus on accuracy and completeness rather than encouragement.',
        ];
        if (isset($styles[$coachstyle])) {
            $systemprompt .= "\n\n## Coaching Style\n" . $styles[$coachstyle];
        }
    }

    // Append time constraint instruction if the student declared a time limit.
    if ($timelimit > 0 && $timelimit <= 120) {
        $systemprompt .= "\n\n## Time Constraint\n"
            . "The student has indicated they only have {$timelimit} minutes. "
            . "Keep responses concise and action-oriented. Prioritize the most important concept. "
            . "Skip lengthy introductions — get straight to the core content. "
            . "If covering multiple points, use bullet points for quick scanning.";
    }

    // Append first-generation student support if enabled.
    if ($firstgen) {
        $systemprompt .= "\n\n## First-Generation Student Support\n"
            . "This student has identified as a first-generation college student. "
            . "Be mindful that they may not have family experience with higher education to draw on. "
            . "When relevant:\n"
            . "- Explain academic conventions that others might take for granted "
            . "(e.g., office hours, syllabi, citation styles, study groups).\n"
            . "- Normalize asking questions and seeking help — it's a strength, not a weakness.\n"
            . "- Be extra encouraging about their achievements — they're blazing a trail.\n"
            . "- If they mention feeling out of place or like an impostor, validate those feelings "
            . "and remind them they earned their spot.\n"
            . "- Avoid jargon unless you explain it. Don't assume knowledge of academic systems.\n"
            . "Do NOT mention 'first-generation' explicitly unless they bring it up — just adapt your tone naturally.";
    }

    // Append progress awareness if completion data is available.
    if ($completion > 0) {
        $systemprompt .= "\n\n## Student Progress\n"
            . "The student has completed approximately {$completion}% of this course. ";
        if ($completion < 25) {
            $systemprompt .= "They are just getting started. Focus on building foundational understanding "
                . "and confidence. Avoid referencing advanced topics they haven't reached yet.";
        } else if ($completion < 50) {
            $systemprompt .= "They are building momentum. Connect new concepts to what they've already learned. "
                . "Encourage them — they're making real progress.";
        } else if ($completion < 75) {
            $systemprompt .= "They are past the halfway mark. Help them see connections between earlier and later topics. "
                . "Start encouraging synthesis and deeper understanding.";
        } else {
            $systemprompt .= "They are nearing completion. Help them consolidate their learning and prepare for "
                . "any final assessments. Celebrate how far they've come.";
        }
    }

    $history = conversation_manager::get_history_for_api($conv->id);

    // Create provider and stream (uses per-course overrides if configured).
    $provider = base_provider::create_from_config($courseid);
    $fullresponse = '';

    // Pass max_tokens from config (0 = no limit / provider default).
    $streamoptions = [];
    $maxtokens = (int) get_config('local_ai_course_assistant', 'max_tokens');
    if ($maxtokens > 0) {
        $streamoptions['max_tokens'] = $maxtokens;
    }

    $provider->chat_completion_stream($systemprompt, $history, function (string $chunk) use (&$fullresponse) {
        $fullresponse .= $chunk;
        sse_send(['token' => $chunk]);
    }, $streamoptions);

    // Capture token usage immediately after streaming — before any other operations.
    $tokenusage = $provider->get_last_token_usage();

    // Process markers in the response before saving.
    $cleanresponse = $fullresponse;
    $wasofftopic = false;
    $needsescalation = false;

    // Check for off-topic marker.
    if (str_contains($fullresponse, '[OFF_TOPIC]')) {
        $wasofftopic = true;
        $cleanresponse = str_replace('[OFF_TOPIC]', '', $cleanresponse);
    }

    // Check for escalation marker.
    if (str_contains($fullresponse, '[NEEDS_ESCALATION]')) {
        $needsescalation = true;
        $cleanresponse = str_replace('[NEEDS_ESCALATION]', '', $cleanresponse);
    }

    $cleanresponse = trim($cleanresponse);

    // Save the clean assistant response (without markers), recording which provider was used.
    $effectivecfg = \local_ai_course_assistant\course_config_manager::get_effective_config($courseid);
    $providername = $effectivecfg['provider'] ?? get_config('local_ai_course_assistant', 'provider');
    conversation_manager::add_message(
        $conv->id,
        $userid,
        $courseid,
        'assistant',
        $cleanresponse,
        0,
        $providername,
        $tokenusage['prompt_tokens'] ?? null,
        $tokenusage['completion_tokens'] ?? null,
        $tokenusage['model'] ?? null
    );

    // Handle off-topic tracking.
    if ($offtopicenabled) {
        if (!isset($DB)) {
            global $DB;
        }
        if ($wasofftopic) {
            $newcount = (int) $conv->offtopic_count + 1;
            $DB->set_field('local_ai_course_assistant_convs', 'offtopic_count', $newcount, ['id' => $conv->id]);

            // Check if we've hit the limit — apply lockout.
            if ($newcount >= $offtopicmax && $offtopicaction === 'end') {
                $lockeduntil = time() + ($lockoutminutes * 60);
                $DB->set_field('local_ai_course_assistant_convs', 'offtopic_locked_until', $lockeduntil, ['id' => $conv->id]);

                $lockoutmsg = get_string('chat:offtopic_ended', 'local_ai_course_assistant', $lockoutminutes);
                sse_send(['token' => "\n\n" . $lockoutmsg]);
                sse_send(['done' => true, 'locked' => true, 'locked_until' => $lockeduntil]);
                die();
            }
        } else {
            // Reset counter on on-topic message.
            if ((int) $conv->offtopic_count > 0) {
                $DB->set_field('local_ai_course_assistant_convs', 'offtopic_count', 0, ['id' => $conv->id]);
            }
        }
    }

    // Handle Zendesk escalation.
    if ($needsescalation && zendesk_client::is_enabled()) {
        $messages = conversation_manager::get_messages($conv->id);
        $summary = zendesk_client::build_conversation_summary($messages);
        $ticketref = zendesk_client::create_ticket($userid, $courseid, $message, $summary);

        if ($ticketref) {
            $escalationmsg = get_string('chat:escalated_to_support', 'local_ai_course_assistant', $ticketref);
            sse_send(['token' => "\n\n" . $escalationmsg]);
            conversation_manager::add_message($conv->id, $userid, $courseid, 'assistant', $escalationmsg);
        }
    }

    // Signal completion.
    sse_send(['done' => true]);

} catch (\moodle_exception $e) {
    // Include debuginfo (curl errors, HTTP details) alongside the user message.
    $errmsg = $e->getMessage();
    if (!empty($e->debuginfo)) {
        $errmsg .= ' [' . $e->debuginfo . ']';
    }
    sse_send(['error' => $errmsg]);
} catch (\Throwable $e) {
    // Send actual message in debug mode, generic otherwise.
    global $CFG;
    $msg = (!empty($CFG->debugdeveloper) || !empty($CFG->debug))
        ? get_class($e) . ': ' . $e->getMessage()
        : get_string('chat:error', 'local_ai_course_assistant');
    sse_send(['error' => $msg]);
}
