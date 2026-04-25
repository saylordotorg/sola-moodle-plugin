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
 * Learner-facing flashcard review page (v3.9.22).
 *
 * Lists all due cards and lets the learner self-grade each one with three
 * buttons (Again / Hard / Easy) that map to SM-2 lite quality 1 / 3 / 5.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\flashcard_manager;
use local_ai_course_assistant\security;

require_login();

$courseid = required_param('courseid', PARAM_INT);
$course = get_course($courseid);
$context = context_course::instance($courseid);
require_capability('local/ai_course_assistant:use', $context);

if (!flashcard_manager::is_enabled_for_course($courseid)) {
    print_error('flashcards_disabled', 'local_ai_course_assistant');
}

$pageurl = new moodle_url('/local/ai_course_assistant/flashcards.php', ['courseid' => $courseid]);
$PAGE->set_url($pageurl);
$PAGE->set_context($context);
$PAGE->set_pagelayout('incourse');
$PAGE->set_course($course);
$PAGE->set_title(get_string('flashcards:title', 'local_ai_course_assistant'));
$PAGE->set_heading($course->fullname);

security::send_security_headers();

$due = flashcard_manager::get_due((int) $USER->id, $courseid, 30);

echo $OUTPUT->header();
echo '<div class="aica-flashcards" style="max-width:720px;margin:0 auto">';
echo html_writer::tag('h2', get_string('flashcards:title', 'local_ai_course_assistant'));
echo html_writer::tag('p', get_string('flashcards:intro', 'local_ai_course_assistant'),
    ['class' => 'text-muted']);

if (empty($due)) {
    echo '<div style="padding:24px;border:1px dashed #d1d5db;border-radius:10px;text-align:center;color:#6b7280">';
    echo s(get_string('flashcards:no_due', 'local_ai_course_assistant'));
    echo '</div>';
    echo $OUTPUT->footer();
    return;
}

// Inline JS does the reveal + self-grade flow; one card visible at a time.
echo '<div id="aica-fc-stack" data-sesskey="' . sesskey() . '" data-courseid="' . $courseid . '">';
foreach ($due as $card) {
    echo '<div class="aica-fc-card" data-card-id="' . (int) $card->id . '" '
        . 'style="display:none;border:1px solid #e5e7eb;border-radius:10px;padding:18px;background:#fff;margin-bottom:12px">';
    echo '<div style="font-size:13px;color:#6b7280;text-transform:uppercase;letter-spacing:0.04em;font-weight:600;margin-bottom:8px">'
        . s(get_string('flashcards:question', 'local_ai_course_assistant')) . '</div>';
    echo '<div class="aica-fc-q" style="font-size:16px;color:#111827;line-height:1.55;margin-bottom:14px">'
        . format_text($card->question, FORMAT_PLAIN) . '</div>';
    echo '<button type="button" class="aica-fc-reveal btn btn-primary">'
        . s(get_string('flashcards:reveal', 'local_ai_course_assistant')) . '</button>';
    echo '<div class="aica-fc-back" style="display:none;margin-top:14px;padding-top:14px;border-top:1px solid #e5e7eb">';
    echo '<div style="font-size:13px;color:#6b7280;text-transform:uppercase;letter-spacing:0.04em;font-weight:600;margin-bottom:8px">'
        . s(get_string('flashcards:answer', 'local_ai_course_assistant')) . '</div>';
    echo '<div style="font-size:15px;color:#1f2937;line-height:1.55;margin-bottom:14px">'
        . format_text($card->answer, FORMAT_PLAIN) . '</div>';
    echo '<div style="display:flex;gap:8px">';
    echo '<button type="button" class="aica-fc-grade btn btn-warning" data-q="1">'
        . s(get_string('flashcards:again', 'local_ai_course_assistant')) . '</button>';
    echo '<button type="button" class="aica-fc-grade btn btn-secondary" data-q="3">'
        . s(get_string('flashcards:hard', 'local_ai_course_assistant')) . '</button>';
    echo '<button type="button" class="aica-fc-grade btn btn-success" data-q="5">'
        . s(get_string('flashcards:easy', 'local_ai_course_assistant')) . '</button>';
    echo '</div>';
    echo '</div>'; // .aica-fc-back
    echo '</div>'; // .aica-fc-card
}
echo '</div>'; // #aica-fc-stack
echo '<div id="aica-fc-done" style="display:none;padding:24px;border:1px solid #d1fae5;border-radius:10px;background:#ecfdf5;color:#065f46;text-align:center;font-weight:600">'
    . s(get_string('flashcards:session_complete', 'local_ai_course_assistant')) . '</div>';
echo '</div>'; // .aica-flashcards
?>
<script>
(function() {
    var stack = document.getElementById('aica-fc-stack');
    if (!stack) { return; }
    var cards = Array.prototype.slice.call(stack.querySelectorAll('.aica-fc-card'));
    var done  = document.getElementById('aica-fc-done');
    var idx = 0;
    var sesskey = stack.dataset.sesskey;
    function showNext() {
        cards.forEach(function(c) { c.style.display = 'none'; });
        if (idx >= cards.length) {
            done.style.display = 'block';
            return;
        }
        cards[idx].style.display = 'block';
    }
    function recordReview(cardid, quality, cb) {
        var fd = new URLSearchParams();
        fd.append('sesskey', sesskey);
        fd.append('info', 'local_ai_course_assistant_review_flashcard');
        fd.append('args[0][cardid]', String(cardid));
        fd.append('args[0][quality]', String(quality));
        var body = JSON.stringify([{
            index: 0,
            methodname: 'local_ai_course_assistant_review_flashcard',
            args: { cardid: parseInt(cardid, 10), quality: parseInt(quality, 10) }
        }]);
        fetch('<?php echo (new moodle_url('/lib/ajax/service.php', ['sesskey' => sesskey()]))->out(false); ?>', {
            method: 'POST',
            credentials: 'same-origin',
            headers: { 'Content-Type': 'application/json' },
            body: body
        }).finally(cb);
    }
    cards.forEach(function(card) {
        var revealBtn = card.querySelector('.aica-fc-reveal');
        var back = card.querySelector('.aica-fc-back');
        var gradeBtns = card.querySelectorAll('.aica-fc-grade');
        revealBtn.addEventListener('click', function() {
            back.style.display = 'block';
            revealBtn.style.display = 'none';
        });
        gradeBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var q = parseInt(btn.dataset.q, 10);
                gradeBtns.forEach(function(b) { b.disabled = true; });
                recordReview(card.dataset.cardId, q, function() {
                    idx++;
                    showNext();
                });
            });
        });
    });
    showNext();
})();
</script>
<?php
echo $OUTPUT->footer();
