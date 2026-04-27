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
 * Admin page for managing practice scoring rubrics.
 *
 * Supports editing the global default rubric (courseid=0) and per-course overrides,
 * for both conversation and pronunciation practice types.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_login();
require_capability('moodle/site:config', \context_system::instance());

use local_ai_course_assistant\rubric_manager;

$courseid = optional_param('courseid', 0, PARAM_INT);
$type = optional_param('type', 'conversation', PARAM_ALPHA);

// Validate type.
if (!in_array($type, ['conversation', 'pronunciation'])) {
    $type = 'conversation';
}

$PAGE->set_context(\context_system::instance());
$PAGE->set_url(new moodle_url('/local/ai_course_assistant/rubric_admin.php', ['courseid' => $courseid, 'type' => $type]));
$PAGE->set_pagelayout('admin');

$coursename = '';
if ($courseid > 0) {
    $course = $DB->get_record('course', ['id' => $courseid], 'id,fullname', MUST_EXIST);
    $coursename = $course->fullname;
    $PAGE->set_title('Practice Scoring Rubric Editor: ' . $coursename);
    $PAGE->set_heading('Practice Scoring Rubric Editor: ' . $coursename);
} else {
    $PAGE->set_title('Practice Scoring Rubric Editor: Global Default');
    $PAGE->set_heading('Practice Scoring Rubric Editor: Global Default');
}

// Handle POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_sesskey();

    $action = required_param('action', PARAM_ALPHA);
    $posttype = required_param('rubric_type', PARAM_ALPHA);
    if (!in_array($posttype, ['conversation', 'pronunciation'])) {
        $posttype = 'conversation';
    }

    if ($action === 'save') {
        $criteriaraw = required_param('criteria_json', PARAM_RAW);
        $criteria = json_decode($criteriaraw, true);

        if (!is_array($criteria) || empty($criteria)) {
            \core\notification::error('Criteria data is invalid or empty.');
            redirect(new moodle_url($PAGE->url, ['type' => $posttype]));
        }

        // Clean criteria.
        $clean = [];
        foreach ($criteria as $c) {
            if (empty(trim($c['name'] ?? ''))) {
                continue;
            }
            $clean[] = [
                'name' => trim($c['name']),
                'description' => trim($c['description'] ?? ''),
                'max_score' => max(1, (int) ($c['max_score'] ?? 5)),
            ];
        }

        if (empty($clean)) {
            \core\notification::error('No valid criteria after cleaning.');
            redirect(new moodle_url($PAGE->url, ['type' => $posttype]));
        }

        // Check if a rubric already exists for this scope and type.
        $title = ucfirst($posttype) . ' Practice Rubric';
        $existing = rubric_manager::get_rubric($courseid, $posttype);
        if ($existing && (int) $existing->courseid === $courseid) {
            rubric_manager::update_rubric((int) $existing->id, $title, $clean, true);
            \core\notification::success('Rubric updated.');
        } else {
            rubric_manager::create_rubric($courseid, $posttype, $title, $clean);
            \core\notification::success('Rubric created.');
        }

        redirect(new moodle_url($PAGE->url, ['type' => $posttype]));
    }

    if ($action === 'reset') {
        // Delete course-level rubric (falls back to global).
        if ($courseid > 0) {
            rubric_manager::delete_rubric($courseid, $posttype);
            \core\notification::success('Course rubric removed. The global default will be used.');
        } else {
            // Reset global to defaults.
            rubric_manager::delete_rubric(0, $posttype);
            rubric_manager::ensure_default_rubric($posttype);
            \core\notification::success('Global rubric reset to defaults.');
        }
        redirect(new moodle_url($PAGE->url, ['type' => $posttype]));
    }
}

// Load current rubric.
rubric_manager::ensure_default_rubric($type);
$rubric = rubric_manager::get_rubric($courseid, $type);
$is_inherited = ($rubric && (int) $rubric->courseid !== $courseid && $courseid > 0);
$criteria = $rubric ? $rubric->criteria : rubric_manager::get_default_criteria($type);

// Get list of courses for the scope selector.
$courses = $DB->get_records_sql(
    "SELECT c.id, c.fullname, c.shortname FROM {course} c WHERE c.id > 1 AND c.visible = 1 ORDER BY c.fullname ASC"
);

echo $OUTPUT->header();
?>

<style>
.aica-rubric-admin { max-width: 800px; margin: 0 auto; }
.aica-rb-card {
    border: 1px solid #dee2e6; border-radius: 8px; margin-bottom: 12px;
    background: #fff; padding: 16px;
}
.aica-rb-card.dragging { opacity: 0.4; }
.aica-rb-header {
    display: flex; align-items: center; gap: 10px; margin-bottom: 12px;
}
.aica-rb-header .aica-rb-num {
    width: 28px; height: 28px; border-radius: 50%; background: #e2e8f0;
    display: flex; align-items: center; justify-content: center;
    font-weight: 700; font-size: 13px; color: #475569; flex-shrink: 0;
}
.aica-rb-header .aica-rb-type {
    font-size: 12px; color: #94a3b8; background: #f1f5f9; padding: 2px 8px;
    border-radius: 4px; text-transform: uppercase; letter-spacing: 0.5px;
}
.aica-rb-actions {
    margin-left: auto; display: flex; gap: 6px;
}
.aica-rb-actions button {
    border: none; background: none; cursor: pointer; padding: 4px 6px;
    color: #94a3b8; font-size: 16px; border-radius: 4px;
}
.aica-rb-actions button:hover { background: #f1f5f9; color: #475569; }
.aica-rb-actions button.aica-rb-delete:hover { color: #dc3545; }
.aica-rb-field { margin-bottom: 10px; }
.aica-rb-field label { display: block; font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 4px; }
.aica-rb-field input, .aica-rb-field textarea, .aica-rb-field select {
    width: 100%; padding: 8px 10px; border: 1px solid #d1d5db; border-radius: 6px;
    font-size: 14px; font-family: inherit;
}
.aica-rb-field textarea { min-height: 60px; resize: vertical; }
.aica-rb-score-field input { width: 80px; }
.aica-rb-add-criterion {
    border: 2px dashed #d1d5db; border-radius: 8px; padding: 16px;
    text-align: center; cursor: pointer; color: #64748b; font-size: 14px;
    margin-bottom: 16px; transition: all 0.15s;
}
.aica-rb-add-criterion:hover { border-color: #94a3b8; background: #f8fafc; }
.aica-rb-inherited-badge {
    display: inline-block; background: #fef3c7; color: #92400e; padding: 4px 10px;
    border-radius: 6px; font-size: 12px; font-weight: 600; margin-bottom: 12px;
}
.aica-rb-type-selector {
    display: flex; gap: 0; margin-bottom: 16px; border: 1px solid #d1d5db; border-radius: 8px; overflow: hidden;
}
.aica-rb-type-selector a {
    flex: 1; padding: 10px 16px; text-align: center; text-decoration: none;
    font-weight: 600; font-size: 14px; color: #64748b; background: #f8fafc;
    border-right: 1px solid #d1d5db; transition: all 0.15s;
}
.aica-rb-type-selector a:last-child { border-right: none; }
.aica-rb-type-selector a:hover { background: #e2e8f0; color: #334155; }
.aica-rb-type-selector a.active { background: #3b82f6; color: #fff; }
.aica-rb-inline-fields { display: flex; gap: 10px; flex-wrap: wrap; }
.aica-rb-inline-fields .aica-rb-field:first-child { flex: 1; min-width: 200px; }
.aica-rb-inline-fields .aica-rb-score-field { flex: 0 0 auto; }
</style>

<div class="aica-rubric-admin">

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
                <input type="hidden" name="type" value="<?php echo $type; ?>">
                <label for="aica-scope-select" style="font-weight:600;white-space:nowrap">Editing rubric for:</label>
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

    <!-- Type selector -->
    <div class="aica-rb-type-selector">
        <a href="<?php echo (new moodle_url('/local/ai_course_assistant/rubric_admin.php', ['courseid' => $courseid, 'type' => 'conversation']))->out(); ?>"
           class="<?php echo $type === 'conversation' ? 'active' : ''; ?>">Conversation Practice</a>
        <a href="<?php echo (new moodle_url('/local/ai_course_assistant/rubric_admin.php', ['courseid' => $courseid, 'type' => 'pronunciation']))->out(); ?>"
           class="<?php echo $type === 'pronunciation' ? 'active' : ''; ?>">Pronunciation Practice</a>
    </div>

    <?php if ($is_inherited): ?>
    <div class="aica-rb-inherited-badge">
        This course has no custom rubric. Showing the global default. Edit below to create a course-specific override.
    </div>
    <?php endif; ?>

    <form method="post" action="<?php echo $PAGE->url->out(false); ?>" id="aica-rubric-form">
        <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
        <input type="hidden" name="action" value="save">
        <input type="hidden" name="rubric_type" value="<?php echo $type; ?>">
        <input type="hidden" name="criteria_json" id="aica-criteria-json" value="">

        <div id="aica-criteria-container"></div>

        <div class="aica-rb-add-criterion" id="aica-add-criterion-btn">+ Add Criterion</div>

        <div class="d-flex flex-wrap" style="gap:8px;margin-top:16px">
            <button type="submit" class="btn btn-primary">Save Rubric</button>
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
        <input type="hidden" name="rubric_type" value="<?php echo $type; ?>">
    </form>
</div>

<script>
(function() {
    var criteria = <?php echo json_encode($criteria); ?>;
    var container = document.getElementById('aica-criteria-container');
    var addBtn = document.getElementById('aica-add-criterion-btn');
    var resetBtn = document.getElementById('aica-reset-btn');

    function renderAll() {
        container.innerHTML = '';
        criteria.forEach(function(c, idx) {
            container.appendChild(buildCard(c, idx));
        });
        updateNumbers();
    }

    function updateNumbers() {
        var cards = container.querySelectorAll('.aica-rb-card');
        cards.forEach(function(card, i) {
            var num = card.querySelector('.aica-rb-num');
            if (num) num.textContent = (i + 1);
        });
    }

    function buildCard(c, idx) {
        var card = document.createElement('div');
        card.className = 'aica-rb-card';
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
                var moved = criteria.splice(fromIdx, 1)[0];
                criteria.splice(toIdx, 0, moved);
                renderAll();
            }
        });

        // Header.
        var header = document.createElement('div');
        header.className = 'aica-rb-header';
        var num = document.createElement('div');
        num.className = 'aica-rb-num';
        num.textContent = (idx + 1);
        header.appendChild(num);

        var typeLabel = document.createElement('span');
        typeLabel.className = 'aica-rb-type';
        typeLabel.textContent = 'Criterion';
        header.appendChild(typeLabel);

        var actions = document.createElement('div');
        actions.className = 'aica-rb-actions';

        var upBtn = document.createElement('button');
        upBtn.type = 'button'; upBtn.innerHTML = '&#8593;'; upBtn.title = 'Move up';
        upBtn.addEventListener('click', function() {
            if (idx > 0) { var tmp = criteria[idx]; criteria[idx] = criteria[idx-1]; criteria[idx-1] = tmp; renderAll(); }
        });
        actions.appendChild(upBtn);

        var downBtn = document.createElement('button');
        downBtn.type = 'button'; downBtn.innerHTML = '&#8595;'; downBtn.title = 'Move down';
        downBtn.addEventListener('click', function() {
            if (idx < criteria.length - 1) { var tmp = criteria[idx]; criteria[idx] = criteria[idx+1]; criteria[idx+1] = tmp; renderAll(); }
        });
        actions.appendChild(downBtn);

        var delBtn = document.createElement('button');
        delBtn.type = 'button'; delBtn.className = 'aica-rb-delete';
        delBtn.innerHTML = '&#10005;'; delBtn.title = 'Delete criterion';
        delBtn.addEventListener('click', function() {
            if (confirm('Delete this criterion?')) { criteria.splice(idx, 1); renderAll(); }
        });
        actions.appendChild(delBtn);

        header.appendChild(actions);
        card.appendChild(header);

        // Criterion name + max score (inline).
        var inlineFields = document.createElement('div');
        inlineFields.className = 'aica-rb-inline-fields';

        var nameField = document.createElement('div');
        nameField.className = 'aica-rb-field';
        var nameLbl = document.createElement('label');
        nameLbl.textContent = 'Criterion Name';
        nameField.appendChild(nameLbl);
        var nameInp = document.createElement('input');
        nameInp.type = 'text';
        nameInp.setAttribute('aria-label', 'Criterion name');
        nameInp.value = c.name || '';
        nameInp.placeholder = 'e.g. Grammar & Accuracy';
        nameInp.addEventListener('input', function() { c.name = nameInp.value; });
        nameField.appendChild(nameInp);
        inlineFields.appendChild(nameField);

        var scoreField = document.createElement('div');
        scoreField.className = 'aica-rb-field aica-rb-score-field';
        var scoreLbl = document.createElement('label');
        scoreLbl.textContent = 'Max Score';
        scoreField.appendChild(scoreLbl);
        var scoreInp = document.createElement('input');
        scoreInp.type = 'number';
        scoreInp.setAttribute('aria-label', 'Maximum score for this criterion');
        scoreInp.value = c.max_score || 5;
        scoreInp.min = 1;
        scoreInp.max = 100;
        scoreInp.addEventListener('input', function() { c.max_score = Math.max(1, parseInt(scoreInp.value, 10) || 5); });
        scoreField.appendChild(scoreInp);
        inlineFields.appendChild(scoreField);

        card.appendChild(inlineFields);

        // Description.
        var descField = document.createElement('div');
        descField.className = 'aica-rb-field';
        var descLbl = document.createElement('label');
        descLbl.textContent = 'Description';
        descField.appendChild(descLbl);
        var descInp = document.createElement('textarea');
        descInp.setAttribute('aria-label', 'Criterion description');
        descInp.value = c.description || '';
        descInp.rows = 2;
        descInp.placeholder = 'Describe what this criterion measures and how it is scored.';
        descInp.addEventListener('input', function() { c.description = descInp.value; });
        descField.appendChild(descInp);
        card.appendChild(descField);

        return card;
    }

    // Add criterion button.
    addBtn.addEventListener('click', function() {
        criteria.push({name: '', description: '', max_score: 5});
        renderAll();
        // Scroll to new card.
        var cards = container.querySelectorAll('.aica-rb-card');
        if (cards.length) cards[cards.length - 1].scrollIntoView({behavior: 'smooth', block: 'center'});
    });

    // Save: serialize criteria to hidden field.
    document.getElementById('aica-rubric-form').addEventListener('submit', function() {
        document.getElementById('aica-criteria-json').value = JSON.stringify(criteria);
    });

    // Reset button.
    if (resetBtn) {
        resetBtn.addEventListener('click', function() {
            var msg = <?php echo $courseid > 0
                ? "'Remove the custom rubric for this course? Students will see the global default instead.'"
                : "'Reset the global rubric to the built-in default criteria?'"; ?>;
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
            h.textContent = 'Scoring Rubric Preview';
            h.style.marginBottom = '16px';
            panel.appendChild(h);

            var typeNote = document.createElement('p');
            typeNote.style.cssText = 'font-size:13px;color:#64748b;margin-bottom:16px';
            typeNote.textContent = 'Type: <?php echo ucfirst($type); ?> Practice';
            panel.appendChild(typeNote);

            criteria.forEach(function(c, idx) {
                var cDiv = document.createElement('div');
                cDiv.style.cssText = 'margin-bottom:16px;padding-bottom:16px;border-bottom:1px solid #e2e8f0';

                var cName = document.createElement('p');
                cName.style.cssText = 'font-weight:600;font-size:14px;margin-bottom:4px';
                cName.textContent = (idx + 1) + '. ' + (c.name || '(unnamed)');
                cDiv.appendChild(cName);

                if (c.description) {
                    var cDesc = document.createElement('p');
                    cDesc.style.cssText = 'font-size:13px;color:#64748b;margin-bottom:8px';
                    cDesc.textContent = c.description;
                    cDiv.appendChild(cDesc);
                }

                // Score scale.
                var scaleRow = document.createElement('div');
                scaleRow.style.cssText = 'display:flex;gap:6px;align-items:center';

                var scaleLbl = document.createElement('span');
                scaleLbl.style.cssText = 'font-size:12px;color:#94a3b8;margin-right:4px';
                scaleLbl.textContent = 'Score:';
                scaleRow.appendChild(scaleLbl);

                var maxScore = c.max_score || 5;
                for (var s = 1; s <= maxScore; s++) {
                    var dot = document.createElement('span');
                    dot.style.cssText = 'width:32px;height:32px;border-radius:50%;border:2px solid #d1d5db;display:flex;align-items:center;justify-content:center;font-weight:600;font-size:13px;color:#475569';
                    dot.textContent = s;
                    scaleRow.appendChild(dot);
                }

                var maxLbl = document.createElement('span');
                maxLbl.style.cssText = 'font-size:11px;color:#94a3b8;margin-left:4px';
                maxLbl.textContent = '/ ' + maxScore;
                scaleRow.appendChild(maxLbl);

                cDiv.appendChild(scaleRow);
                panel.appendChild(cDiv);
            });

            // Total.
            var totalDiv = document.createElement('div');
            totalDiv.style.cssText = 'font-weight:700;font-size:14px;margin-bottom:16px;padding:10px;background:#f1f5f9;border-radius:6px;text-align:center';
            var totalScore = 0;
            criteria.forEach(function(c) { totalScore += (c.max_score || 5); });
            totalDiv.textContent = 'Total Possible: ' + totalScore + ' points';
            panel.appendChild(totalDiv);

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
