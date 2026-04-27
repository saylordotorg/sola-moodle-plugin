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
 * Admin page for managing survey questions.
 *
 * Supports editing the global default survey (courseid=0) and per-course overrides.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_login();
require_capability('moodle/site:config', \context_system::instance());

use local_ai_course_assistant\survey_manager;

$courseid = optional_param('courseid', 0, PARAM_INT);

$PAGE->set_context(\context_system::instance());
$PAGE->set_url(new moodle_url('/local/ai_course_assistant/survey_admin.php', ['courseid' => $courseid]));
$PAGE->set_pagelayout('admin');

$coursename = '';
if ($courseid > 0) {
    $course = $DB->get_record('course', ['id' => $courseid], 'id,fullname', MUST_EXIST);
    $coursename = $course->fullname;
    $PAGE->set_title('Survey Editor: ' . $coursename);
    $PAGE->set_heading('Survey Editor: ' . $coursename);
} else {
    $PAGE->set_title('Survey Editor: Global Default');
    $PAGE->set_heading('Survey Editor: Global Default');
}

// Handle POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_sesskey();

    $action = required_param('action', PARAM_ALPHA);

    if ($action === 'save') {
        $title = required_param('survey_title', PARAM_TEXT);
        $questionsraw = required_param('questions_json', PARAM_RAW);
        $questions = json_decode($questionsraw, true);
        $active = optional_param('survey_active', 0, PARAM_INT);

        if (!is_array($questions) || empty($questions)) {
            \core\notification::error('Questions data is invalid or empty.');
            redirect($PAGE->url);
        }

        // Clean questions.
        $clean = [];
        foreach ($questions as $q) {
            if (empty($q['text']) || empty($q['type'])) {
                continue;
            }
            $item = ['type' => $q['type'], 'text' => $q['text']];
            if ($q['type'] === 'multiple_choice') {
                $opts = [];
                foreach (($q['options'] ?? []) as $opt) {
                    $opt = trim($opt);
                    if ($opt !== '') {
                        $opts[] = $opt;
                    }
                }
                if (empty($opts)) {
                    continue; // Skip MC without options.
                }
                $item['options'] = $opts;
            }
            if ($q['type'] === 'rating') {
                $item['min'] = (int) ($q['min'] ?? 1);
                $item['max'] = (int) ($q['max'] ?? 5);
                if (!empty($q['min_label'])) {
                    $item['min_label'] = $q['min_label'];
                }
                if (!empty($q['max_label'])) {
                    $item['max_label'] = $q['max_label'];
                }
            }
            $clean[] = $item;
        }

        if (empty($clean)) {
            \core\notification::error('No valid questions after cleaning.');
            redirect($PAGE->url);
        }

        // Check if a survey already exists for this scope.
        $existing = survey_manager::get_active_survey($courseid);
        if ($existing && (int) $existing->courseid === $courseid) {
            survey_manager::update_survey((int) $existing->id, $title, $clean, (bool) $active);
            \core\notification::success('Survey updated.');
        } else {
            survey_manager::create_survey($courseid, $title, $clean);
            \core\notification::success('Survey created.');
        }

        redirect($PAGE->url);
    }

    if ($action === 'reset') {
        // Delete course-level survey (falls back to global).
        if ($courseid > 0) {
            $existing = $DB->get_records('local_ai_course_assistant_surveys', ['courseid' => $courseid]);
            foreach ($existing as $s) {
                $DB->delete_records('local_ai_course_assistant_surveys', ['id' => $s->id]);
            }
            \core\notification::success('Course survey removed. The global default will be used.');
        } else {
            // Reset global to defaults.
            $existing = $DB->get_records('local_ai_course_assistant_surveys', ['courseid' => 0]);
            foreach ($existing as $s) {
                $DB->delete_records('local_ai_course_assistant_surveys', ['id' => $s->id]);
            }
            survey_manager::ensure_default_survey();
            \core\notification::success('Global survey reset to defaults.');
        }
        redirect($PAGE->url);
    }
}

// Load current survey.
survey_manager::ensure_default_survey();
$survey = survey_manager::get_active_survey($courseid);
$is_inherited = ($survey && (int) $survey->courseid !== $courseid && $courseid > 0);
$questions = $survey ? $survey->questions : survey_manager::DEFAULT_QUESTIONS;
$title = $survey ? $survey->title : 'SOLA End-of-Course Survey';

// Get list of courses for the scope selector.
$courses = $DB->get_records_sql(
    "SELECT c.id, c.fullname, c.shortname FROM {course} c WHERE c.id > 1 AND c.visible = 1 ORDER BY c.fullname ASC"
);

echo $OUTPUT->header();
?>

<style>
.aica-survey-admin { max-width: 800px; margin: 0 auto; }
.aica-sq-card {
    border: 1px solid #dee2e6; border-radius: 8px; margin-bottom: 12px;
    background: #fff; padding: 16px;
}
.aica-sq-card.dragging { opacity: 0.4; }
.aica-sq-header {
    display: flex; align-items: center; gap: 10px; margin-bottom: 12px;
}
.aica-sq-header .aica-sq-num {
    width: 28px; height: 28px; border-radius: 50%; background: #e2e8f0;
    display: flex; align-items: center; justify-content: center;
    font-weight: 700; font-size: 13px; color: #475569; flex-shrink: 0;
}
.aica-sq-header .aica-sq-type {
    font-size: 12px; color: #94a3b8; background: #f1f5f9; padding: 2px 8px;
    border-radius: 4px; text-transform: uppercase; letter-spacing: 0.5px;
}
.aica-sq-actions {
    margin-left: auto; display: flex; gap: 6px;
}
.aica-sq-actions button {
    border: none; background: none; cursor: pointer; padding: 4px 6px;
    color: #94a3b8; font-size: 16px; border-radius: 4px;
}
.aica-sq-actions button:hover { background: #f1f5f9; color: #475569; }
.aica-sq-actions button.aica-sq-delete:hover { color: #dc3545; }
.aica-sq-field { margin-bottom: 10px; }
.aica-sq-field label { display: block; font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 4px; }
.aica-sq-field input, .aica-sq-field textarea, .aica-sq-field select {
    width: 100%; padding: 8px 10px; border: 1px solid #d1d5db; border-radius: 6px;
    font-size: 14px; font-family: inherit;
}
.aica-sq-field textarea { min-height: 60px; resize: vertical; }
.aica-sq-options-list { margin-top: 6px; }
.aica-sq-opt-row {
    display: flex; align-items: center; gap: 6px; margin-bottom: 6px;
}
.aica-sq-opt-row input { flex: 1; }
.aica-sq-opt-row button {
    border: none; background: none; cursor: pointer; color: #dc3545; font-size: 18px; padding: 2px 6px;
}
.aica-sq-add-opt {
    border: 1px dashed #d1d5db; background: #f8fafc; padding: 6px 12px;
    border-radius: 6px; cursor: pointer; font-size: 13px; color: #64748b;
    margin-top: 4px;
}
.aica-sq-add-opt:hover { background: #e2e8f0; }
.aica-sq-add-question {
    border: 2px dashed #d1d5db; border-radius: 8px; padding: 16px;
    text-align: center; cursor: pointer; color: #64748b; font-size: 14px;
    margin-bottom: 16px; transition: all 0.15s;
}
.aica-sq-add-question:hover { border-color: #94a3b8; background: #f8fafc; }
.aica-sq-inherited-badge {
    display: inline-block; background: #fef3c7; color: #92400e; padding: 4px 10px;
    border-radius: 6px; font-size: 12px; font-weight: 600; margin-bottom: 12px;
}
.aica-sq-rating-fields { display: flex; gap: 10px; flex-wrap: wrap; }
.aica-sq-rating-fields .aica-sq-field { flex: 1; min-width: 120px; }
</style>

<div class="aica-survey-admin">

    <div class="mb-3 d-flex flex-wrap" style="gap:8px">
        <a href="<?php echo (new moodle_url('/admin/category.php', ['category' => 'local_ai_course_assistant']))->out(); ?>"
           class="btn btn-sm btn-outline-secondary">&larr; Plugin Settings</a>
        <a href="<?php echo (new moodle_url('/local/ai_course_assistant/analytics.php'))->out(); ?>"
           class="btn btn-sm btn-outline-secondary">Analytics Dashboard</a>
    </div>

    <!-- Scope selector -->
    <div class="card mb-4">
        <div class="card-body">
            <form method="get" action="<?php echo $PAGE->url->out_omit_querystring(); ?>" class="form-inline" style="display:flex;align-items:center;gap:10px;flex-wrap:wrap">
                <label for="aica-scope-select" style="font-weight:600;white-space:nowrap">Editing survey for:</label>
                <select id="aica-scope-select" name="courseid" class="form-control form-control-sm" style="max-width:350px"
                        onchange="this.form.submit()">
                    <option value="0" <?php echo $courseid === 0 ? 'selected' : ''; ?>>Global Default (all courses)</option>
                    <?php foreach ($courses as $c): ?>
                    <option value="<?php echo $c->id; ?>" <?php echo (int) $c->id === $courseid ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($c->fullname); ?> (<?php echo htmlspecialchars($c->shortname); ?>)
                    </option>
                    <?php endforeach; ?>
                </select>
            </form>
        </div>
    </div>

    <?php if ($is_inherited): ?>
    <div class="aica-sq-inherited-badge">
        This course has no custom survey. Showing the global default. Edit below to create a course-specific override.
    </div>
    <?php endif; ?>

    <form method="post" action="<?php echo $PAGE->url->out(false); ?>" id="aica-survey-form">
        <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
        <input type="hidden" name="action" value="save">
        <input type="hidden" name="survey_active" value="1">
        <input type="hidden" name="questions_json" id="aica-questions-json" value="">

        <div class="aica-sq-field mb-3">
            <label for="aica-survey-title">Survey Title</label>
            <input type="text" id="aica-survey-title" name="survey_title"
                   value="<?php echo htmlspecialchars($title); ?>"
                   placeholder="e.g. SOLA End-of-Course Survey">
        </div>

        <div id="aica-questions-container"></div>

        <div class="aica-sq-add-question" id="aica-add-question-btn">+ Add Question</div>

        <div class="d-flex flex-wrap" style="gap:8px;margin-top:16px">
            <button type="submit" class="btn btn-primary">Save Survey</button>
            <button type="button" class="btn btn-outline-secondary" id="aica-preview-btn">Preview</button>
            <?php if ($courseid > 0 && !$is_inherited): ?>
            <button type="button" class="btn btn-outline-danger" id="aica-reset-btn">Remove Course Override</button>
            <?php elseif ($courseid === 0): ?>
            <button type="button" class="btn btn-outline-danger" id="aica-reset-btn">Reset to Defaults</button>
            <?php endif; ?>
        </div>
    </form>

    <!-- Hidden reset form -->
    <form method="post" action="<?php echo $PAGE->url->out(false); ?>" id="aica-reset-form" style="display:none">
        <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
        <input type="hidden" name="action" value="reset">
    </form>
</div>

<script>
(function() {
    var questions = <?php echo json_encode($questions); ?>;
    var container = document.getElementById('aica-questions-container');
    var addBtn = document.getElementById('aica-add-question-btn');
    var resetBtn = document.getElementById('aica-reset-btn');

    function renderAll() {
        container.innerHTML = '';
        questions.forEach(function(q, idx) {
            container.appendChild(buildCard(q, idx));
        });
        updateNumbers();
    }

    function updateNumbers() {
        var cards = container.querySelectorAll('.aica-sq-card');
        cards.forEach(function(card, i) {
            var num = card.querySelector('.aica-sq-num');
            if (num) num.textContent = (i + 1);
        });
    }

    function buildCard(q, idx) {
        var card = document.createElement('div');
        card.className = 'aica-sq-card';
        card.draggable = true;
        card.dataset.idx = idx;

        // Drag events.
        card.addEventListener('dragstart', function(e) {
            card.classList.add('dragging');
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/plain', idx);
        });
        card.addEventListener('dragend', function() { card.classList.remove('dragging'); });
        card.addEventListener('dragover', function(e) { e.preventDefault(); });
        card.addEventListener('drop', function(e) {
            e.preventDefault();
            var fromIdx = parseInt(e.dataTransfer.getData('text/plain'), 10);
            var toIdx = parseInt(card.dataset.idx, 10);
            if (fromIdx !== toIdx) {
                var moved = questions.splice(fromIdx, 1)[0];
                questions.splice(toIdx, 0, moved);
                renderAll();
            }
        });

        // Header.
        var header = document.createElement('div');
        header.className = 'aica-sq-header';
        var num = document.createElement('div');
        num.className = 'aica-sq-num';
        num.textContent = (idx + 1);
        header.appendChild(num);

        var typeLabel = document.createElement('span');
        typeLabel.className = 'aica-sq-type';
        typeLabel.textContent = q.type === 'multiple_choice' ? 'Multiple Choice'
            : q.type === 'rating' ? 'Rating' : 'Open Text';
        header.appendChild(typeLabel);

        var actions = document.createElement('div');
        actions.className = 'aica-sq-actions';

        var upBtn = document.createElement('button');
        upBtn.type = 'button'; upBtn.innerHTML = '&#8593;'; upBtn.title = 'Move up';
        upBtn.addEventListener('click', function() {
            if (idx > 0) { var tmp = questions[idx]; questions[idx] = questions[idx-1]; questions[idx-1] = tmp; renderAll(); }
        });
        actions.appendChild(upBtn);

        var downBtn = document.createElement('button');
        downBtn.type = 'button'; downBtn.innerHTML = '&#8595;'; downBtn.title = 'Move down';
        downBtn.addEventListener('click', function() {
            if (idx < questions.length - 1) { var tmp = questions[idx]; questions[idx] = questions[idx+1]; questions[idx+1] = tmp; renderAll(); }
        });
        actions.appendChild(downBtn);

        var delBtn = document.createElement('button');
        delBtn.type = 'button'; delBtn.className = 'aica-sq-delete';
        delBtn.innerHTML = '&#10005;'; delBtn.title = 'Delete question';
        delBtn.addEventListener('click', function() {
            if (confirm('Delete this question?')) { questions.splice(idx, 1); renderAll(); }
        });
        actions.appendChild(delBtn);

        header.appendChild(actions);
        card.appendChild(header);

        // Type selector.
        var typeField = document.createElement('div');
        typeField.className = 'aica-sq-field';
        var typeLbl = document.createElement('label');
        typeLbl.textContent = 'Question Type';
        typeField.appendChild(typeLbl);
        var typeSelect = document.createElement('select'); typeSelect.setAttribute('aria-label', 'Question type');
        [['multiple_choice', 'Multiple Choice'], ['long_text', 'Open Text'], ['rating', 'Rating Scale']].forEach(function(opt) {
            var o = document.createElement('option');
            o.value = opt[0]; o.textContent = opt[1];
            if (q.type === opt[0]) o.selected = true;
            typeSelect.appendChild(o);
        });
        typeSelect.addEventListener('change', function() {
            q.type = typeSelect.value;
            if (q.type === 'multiple_choice' && !q.options) q.options = ['Option 1', 'Option 2'];
            if (q.type === 'rating') { q.min = q.min || 1; q.max = q.max || 5; }
            renderAll();
        });
        typeField.appendChild(typeSelect);
        card.appendChild(typeField);

        // Question text.
        var textField = document.createElement('div');
        textField.className = 'aica-sq-field';
        var textLbl = document.createElement('label');
        textLbl.textContent = 'Question Text';
        textField.appendChild(textLbl);
        var textInput = document.createElement('textarea');
        textInput.setAttribute('aria-label', 'Question text');
        textInput.value = q.text || '';
        textInput.rows = 2;
        textInput.addEventListener('input', function() { q.text = textInput.value; });
        textField.appendChild(textInput);
        card.appendChild(textField);

        // Type-specific fields.
        if (q.type === 'multiple_choice') {
            var optLabel = document.createElement('label');
            optLabel.textContent = 'Options';
            optLabel.style.cssText = 'font-size:12px;font-weight:600;color:#64748b;margin-bottom:4px;display:block';
            card.appendChild(optLabel);

            var optList = document.createElement('div');
            optList.className = 'aica-sq-options-list';
            (q.options || []).forEach(function(opt, oi) {
                var row = document.createElement('div');
                row.className = 'aica-sq-opt-row';
                var inp = document.createElement('input');
                inp.type = 'text'; inp.setAttribute('aria-label', 'Option ' + (oi + 1)); inp.value = opt;
                inp.addEventListener('input', function() { q.options[oi] = inp.value; });
                row.appendChild(inp);
                var rmBtn = document.createElement('button');
                rmBtn.type = 'button'; rmBtn.innerHTML = '&times;'; rmBtn.title = 'Remove option';
                rmBtn.addEventListener('click', function() { q.options.splice(oi, 1); renderAll(); });
                row.appendChild(rmBtn);
                optList.appendChild(row);
            });
            card.appendChild(optList);

            var addOpt = document.createElement('div');
            addOpt.className = 'aica-sq-add-opt';
            addOpt.textContent = '+ Add Option';
            addOpt.addEventListener('click', function() {
                if (!q.options) q.options = [];
                q.options.push('New option');
                renderAll();
            });
            card.appendChild(addOpt);
        }

        if (q.type === 'rating') {
            var ratingFields = document.createElement('div');
            ratingFields.className = 'aica-sq-rating-fields';

            // Min.
            var minField = document.createElement('div');
            minField.className = 'aica-sq-field';
            var minLbl = document.createElement('label'); minLbl.textContent = 'Min Value';
            minField.appendChild(minLbl);
            var minInp = document.createElement('input');
            minInp.type = 'number'; minInp.setAttribute('aria-label', 'Minimum rating value'); minInp.value = q.min || 1; minInp.min = 0; minInp.max = 10;
            minInp.addEventListener('input', function() { q.min = parseInt(minInp.value, 10) || 1; });
            minField.appendChild(minInp);
            ratingFields.appendChild(minField);

            // Max.
            var maxField = document.createElement('div');
            maxField.className = 'aica-sq-field';
            var maxLbl = document.createElement('label'); maxLbl.textContent = 'Max Value';
            maxField.appendChild(maxLbl);
            var maxInp = document.createElement('input');
            maxInp.type = 'number'; maxInp.setAttribute('aria-label', 'Maximum rating value'); maxInp.value = q.max || 5; maxInp.min = 1; maxInp.max = 10;
            maxInp.addEventListener('input', function() { q.max = parseInt(maxInp.value, 10) || 5; });
            maxField.appendChild(maxInp);
            ratingFields.appendChild(maxField);

            // Min label.
            var minLblField = document.createElement('div');
            minLblField.className = 'aica-sq-field';
            var minLblLbl = document.createElement('label'); minLblLbl.textContent = 'Min Label (e.g. "Not at all")';
            minLblField.appendChild(minLblLbl);
            var minLblInp = document.createElement('input');
            minLblInp.type = 'text'; minLblInp.setAttribute('aria-label', 'Minimum rating label'); minLblInp.value = q.min_label || '';
            minLblInp.placeholder = 'e.g. Not at all';
            minLblInp.addEventListener('input', function() { q.min_label = minLblInp.value; });
            minLblField.appendChild(minLblInp);
            ratingFields.appendChild(minLblField);

            // Max label.
            var maxLblField = document.createElement('div');
            maxLblField.className = 'aica-sq-field';
            var maxLblLbl = document.createElement('label'); maxLblLbl.textContent = 'Max Label (e.g. "Very happy")';
            maxLblField.appendChild(maxLblLbl);
            var maxLblInp = document.createElement('input');
            maxLblInp.type = 'text'; maxLblInp.setAttribute('aria-label', 'Maximum rating label'); maxLblInp.value = q.max_label || '';
            maxLblInp.placeholder = 'e.g. Very happy';
            maxLblInp.addEventListener('input', function() { q.max_label = maxLblInp.value; });
            maxLblField.appendChild(maxLblInp);
            ratingFields.appendChild(maxLblField);

            card.appendChild(ratingFields);
        }

        return card;
    }

    // Add question button.
    addBtn.addEventListener('click', function() {
        questions.push({type: 'long_text', text: ''});
        renderAll();
        // Scroll to new card.
        var cards = container.querySelectorAll('.aica-sq-card');
        if (cards.length) cards[cards.length - 1].scrollIntoView({behavior: 'smooth', block: 'center'});
    });

    // Save: serialize questions to hidden field.
    document.getElementById('aica-survey-form').addEventListener('submit', function() {
        document.getElementById('aica-questions-json').value = JSON.stringify(questions);
    });

    // Reset button.
    if (resetBtn) {
        resetBtn.addEventListener('click', function() {
            var msg = <?php echo $courseid > 0
                ? "'Remove the custom survey for this course? Students will see the global default instead.'"
                : "'Reset the global survey to the built-in default questions?'"; ?>;
            if (confirm(msg)) {
                document.getElementById('aica-reset-form').submit();
            }
        });
    }

    // Preview button.
    var previewBtn = document.getElementById('aica-preview-btn');
    if (previewBtn) {
        previewBtn.addEventListener('click', function() {
            var overlay = document.createElement('div');
            overlay.style.cssText = 'position:fixed;inset:0;background:rgba(0,0,0,0.5);z-index:9999;display:flex;align-items:center;justify-content:center';
            overlay.addEventListener('click', function(e) { if (e.target === overlay) document.body.removeChild(overlay); });

            var panel = document.createElement('div');
            panel.style.cssText = 'background:#fff;border-radius:12px;padding:24px;max-width:500px;width:90%;max-height:80vh;overflow-y:auto;box-shadow:0 8px 32px rgba(0,0,0,0.2)';

            var h = document.createElement('h4');
            h.textContent = document.getElementById('aica-survey-title').value || 'Survey Preview';
            h.style.marginBottom = '16px';
            panel.appendChild(h);

            questions.forEach(function(q, idx) {
                var qDiv = document.createElement('div');
                qDiv.style.cssText = 'margin-bottom:16px;padding-bottom:16px;border-bottom:1px solid #e2e8f0';

                var qText = document.createElement('p');
                qText.style.cssText = 'font-weight:600;font-size:14px;margin-bottom:8px';
                qText.textContent = (idx + 1) + '. ' + (q.text || '(no text)');
                qDiv.appendChild(qText);

                if (q.type === 'multiple_choice') {
                    (q.options || []).forEach(function(opt) {
                        var row = document.createElement('div');
                        row.style.cssText = 'display:flex;align-items:center;gap:8px;padding:6px 10px;margin-bottom:4px;background:#f8fafc;border-radius:6px;font-size:13px';
                        row.innerHTML = '<span style="width:16px;height:16px;border:2px solid #d1d5db;border-radius:50%;flex-shrink:0"></span>' + opt;
                        qDiv.appendChild(row);
                    });
                } else if (q.type === 'rating') {
                    var rRow = document.createElement('div');
                    rRow.style.cssText = 'display:flex;gap:8px;align-items:center';
                    if (q.min_label) {
                        var ml = document.createElement('span');
                        ml.style.cssText = 'font-size:11px;color:#94a3b8';
                        ml.textContent = q.min_label;
                        rRow.appendChild(ml);
                    }
                    for (var r = (q.min||1); r <= (q.max||5); r++) {
                        var btn = document.createElement('span');
                        btn.style.cssText = 'width:36px;height:36px;border-radius:50%;border:2px solid #d1d5db;display:flex;align-items:center;justify-content:center;font-weight:600;font-size:14px;color:#475569';
                        btn.textContent = r;
                        rRow.appendChild(btn);
                    }
                    if (q.max_label) {
                        var xl = document.createElement('span');
                        xl.style.cssText = 'font-size:11px;color:#94a3b8';
                        xl.textContent = q.max_label;
                        rRow.appendChild(xl);
                    }
                    qDiv.appendChild(rRow);
                } else {
                    var ta = document.createElement('div');
                    ta.style.cssText = 'width:100%;min-height:60px;border:1px solid #d1d5db;border-radius:6px;background:#f8fafc;padding:8px';
                    ta.innerHTML = '<span style="color:#94a3b8;font-size:13px">Type your answer here...</span>';
                    qDiv.appendChild(ta);
                }

                panel.appendChild(qDiv);
            });

            var closeBtn = document.createElement('button');
            closeBtn.textContent = 'Close Preview';
            closeBtn.className = 'btn btn-sm btn-outline-secondary';
            closeBtn.addEventListener('click', function() { document.body.removeChild(overlay); });
            panel.appendChild(closeBtn);

            overlay.appendChild(panel);
            document.body.appendChild(overlay);
        });
    }

    renderAll();
})();
</script>

<?php
echo $OUTPUT->footer();
