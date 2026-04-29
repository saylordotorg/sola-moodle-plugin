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
 * Learner-facing essay feedback page (v3.9.25).
 *
 * Paste essay + optional rubric → AI returns rubric-scored feedback with
 * concrete revision suggestions. Per-course toggle.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\security;

require_login();

$courseid = required_param('courseid', PARAM_INT);
$course = get_course($courseid);
$context = context_course::instance($courseid);
require_capability('local/ai_course_assistant:use', $context);

if (!\local_ai_course_assistant\feature_flags::resolve('essay_feedback', $courseid)) {
    throw new \moodle_exception('essay_feedback:disabled', 'local_ai_course_assistant');
}

$pageurl = new moodle_url('/local/ai_course_assistant/essay_feedback.php', ['courseid' => $courseid]);
$PAGE->set_url($pageurl);
$PAGE->set_context($context);
$PAGE->set_pagelayout('incourse');
$PAGE->set_course($course);
$PAGE->set_title(get_string('essay_feedback:title', 'local_ai_course_assistant'));
$PAGE->set_heading($course->fullname);

security::send_security_headers();

echo $OUTPUT->header();
?>
<div style="max-width:860px;margin:0 auto">
    <h2><?php echo get_string('essay_feedback:title', 'local_ai_course_assistant'); ?></h2>
    <p class="text-muted"><?php echo get_string('essay_feedback:intro', 'local_ai_course_assistant'); ?></p>

    <form id="aica-essay-form" style="margin-top:14px">
        <input type="hidden" name="courseid" value="<?php echo $courseid; ?>" />
        <div class="form-group">
            <label for="aica-essay-rubric"><strong><?php
                echo get_string('essay_feedback:rubric_label', 'local_ai_course_assistant'); ?></strong></label>
            <small class="form-text text-muted"><?php
                echo get_string('essay_feedback:rubric_help', 'local_ai_course_assistant'); ?></small>
            <textarea id="aica-essay-rubric" name="rubric" rows="4"
                      style="width:100%;font-family:inherit;font-size:14px"></textarea>
        </div>
        <div class="form-group" style="margin-top:12px">
            <label for="aica-essay-text"><strong><?php
                echo get_string('essay_feedback:essay_label', 'local_ai_course_assistant'); ?></strong></label>
            <textarea id="aica-essay-text" name="essay" rows="14"
                      style="width:100%;font-family:inherit;font-size:14px"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2" id="aica-essay-submit">
            <?php echo get_string('essay_feedback:submit', 'local_ai_course_assistant'); ?>
        </button>
        <span id="aica-essay-status" class="ml-2 text-muted" style="display:none">
            <?php echo get_string('essay_feedback:scoring', 'local_ai_course_assistant'); ?>
        </span>
    </form>

    <div id="aica-essay-result" style="display:none;margin-top:24px"></div>
</div>

<script>
(function() {
    var form = document.getElementById('aica-essay-form');
    var submitBtn = document.getElementById('aica-essay-submit');
    var status = document.getElementById('aica-essay-status');
    var out = document.getElementById('aica-essay-result');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        var essay = document.getElementById('aica-essay-text').value || '';
        var rubric = document.getElementById('aica-essay-rubric').value || '';
        if (essay.trim().length < 80) {
            alert('<?php echo get_string('essay_feedback:too_short', 'local_ai_course_assistant'); ?>');
            return;
        }
        submitBtn.disabled = true;
        status.style.display = 'inline';
        out.style.display = 'none';
        var payload = JSON.stringify([{
            index: 0,
            methodname: 'local_ai_course_assistant_score_essay',
            args: { courseid: <?php echo (int) $courseid; ?>, essay: essay, rubric: rubric }
        }]);
        fetch('<?php echo (new moodle_url('/lib/ajax/service.php', ['sesskey' => sesskey()]))->out(false); ?>', {
            method: 'POST', credentials: 'same-origin',
            headers: { 'Content-Type': 'application/json' }, body: payload
        })
        .then(function(r) { return r.json(); })
        .then(function(resp) {
            submitBtn.disabled = false;
            status.style.display = 'none';
            var res = resp && resp[0] && resp[0].data;
            if (!res || !res.success) {
                out.style.display = 'block';
                out.innerHTML = '<div class="alert alert-warning">' +
                    '<?php echo get_string('essay_feedback:error', 'local_ai_course_assistant'); ?>' +
                    ' <code>' + (res && res.message ? res.message : 'unknown') + '</code></div>';
                return;
            }
            var html = '<h3><?php echo get_string('essay_feedback:result_heading', 'local_ai_course_assistant'); ?></h3>';
            html += '<table class="generaltable" style="width:100%">';
            html += '<thead><tr><th><?php echo get_string('essay_feedback:col_criterion', 'local_ai_course_assistant'); ?></th>' +
                    '<th style="width:80px"><?php echo get_string('essay_feedback:col_score', 'local_ai_course_assistant'); ?></th>' +
                    '<th><?php echo get_string('essay_feedback:col_feedback', 'local_ai_course_assistant'); ?></th></tr></thead><tbody>';
            res.criteria.forEach(function(c) {
                var stars = ''; for (var i = 0; i < 4; i++) { stars += i < c.score ? '●' : '○'; }
                html += '<tr><td>' + (c.name || '') + '</td>' +
                        '<td style="font-family:monospace">' + stars + ' ' + c.score + '/4</td>' +
                        '<td>' + (c.feedback || '') + '</td></tr>';
            });
            html += '</tbody></table>';
            if (res.overall) {
                html += '<h4 style="margin-top:18px"><?php echo get_string('essay_feedback:overall_heading', 'local_ai_course_assistant'); ?></h4>';
                html += '<p>' + res.overall + '</p>';
            }
            if (res.revisions && res.revisions.length) {
                html += '<h4 style="margin-top:14px"><?php echo get_string('essay_feedback:revisions_heading', 'local_ai_course_assistant'); ?></h4>';
                html += '<ol>';
                res.revisions.forEach(function(r) { html += '<li>' + r + '</li>'; });
                html += '</ol>';
            }
            out.style.display = 'block';
            out.innerHTML = html;
        })
        .catch(function() {
            submitBtn.disabled = false;
            status.style.display = 'none';
            out.style.display = 'block';
            out.innerHTML = '<div class="alert alert-danger"><?php echo get_string('essay_feedback:error', 'local_ai_course_assistant'); ?></div>';
        });
    });
})();
</script>
<?php
echo $OUTPUT->footer();
