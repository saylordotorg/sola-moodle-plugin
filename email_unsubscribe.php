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
 * v5.4.3 — Universal one-click email unsubscribe for SOLA emails.
 *
 * Two paths land here:
 *   1. GET from the link in the email body — renders a confirmation page.
 *   2. POST from RFC 8058 List-Unsubscribe-Post with body
 *      `List-Unsubscribe=One-Click` — silent 200 response.
 *
 * Both validate the HMAC token in `?token=...`, write a row to
 * local_ai_course_assistant_email_optout for (email, type), and finish.
 * Replay-safe (idempotent) and works for both Moodle-user recipients and
 * arbitrary admin/staff destinations (Learning Radar, anomaly digest, etc.).
 *
 * Auth: token-only. NOT capability-gated and NOT login-gated — that is the
 * point of one-click unsubscribe.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// phpcs:disable moodle.Files.RequireLogin.Missing
define('NO_MOODLE_COOKIES', false);
require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\branding;
use local_ai_course_assistant\email_optout;

$token = optional_param('token', '', PARAM_RAW_TRIMMED);
$isoneclick = ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST'
    && (string) ($_POST['List-Unsubscribe'] ?? '') === 'One-Click';

if ($token === '') {
    if ($isoneclick) {
        http_response_code(400);
        exit;
    }
    throw new \moodle_exception('invalidaccess', 'error');
}

$verified = email_optout::verify_token($token);
if ($verified === null) {
    if ($isoneclick) {
        http_response_code(400);
        exit;
    }
    $PAGE->set_context(\context_system::instance());
    $PAGE->set_url(new moodle_url('/local/ai_course_assistant/email_unsubscribe.php'));
    $PAGE->set_title(get_string('email_unsubscribe:invalid_title', 'local_ai_course_assistant'));
    $PAGE->set_pagelayout('login');
    echo $OUTPUT->header();
    echo $OUTPUT->box(
        get_string('email_unsubscribe:invalid_body', 'local_ai_course_assistant'),
        'generalbox'
    );
    echo $OUTPUT->footer();
    exit;
}

email_optout::record($verified['email'], $verified['type']);

if ($isoneclick) {
    http_response_code(200);
    exit;
}

$PAGE->set_context(\context_system::instance());
$PAGE->set_url(new moodle_url('/local/ai_course_assistant/email_unsubscribe.php'));
$PAGE->set_title(get_string('email_unsubscribe:done_title', 'local_ai_course_assistant'));
$PAGE->set_pagelayout('login');

echo $OUTPUT->header();
echo $OUTPUT->box(
    get_string('email_unsubscribe:done_body', 'local_ai_course_assistant',
        (object)['product' => branding::short_name(), 'email' => s($verified['email'])]),
    'generalbox'
);
echo $OUTPUT->footer();
