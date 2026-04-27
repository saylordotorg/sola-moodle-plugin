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
 * Admin page for managing conversation starter chips.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_login();
require_capability('moodle/site:config', \context_system::instance());

use local_ai_course_assistant\starter_manager;

$PAGE->set_context(\context_system::instance());
$PAGE->set_url(new moodle_url('/local/ai_course_assistant/starter_settings.php'));
$PAGE->set_title(get_string('starters:admin_title', 'local_ai_course_assistant'));
$PAGE->set_heading(get_string('starters:admin_title', 'local_ai_course_assistant'));
$PAGE->set_pagelayout('admin');

// Handle POST actions.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_sesskey();

    $action = required_param('action', PARAM_ALPHA);

    if ($action === 'save') {
        $raw = required_param('starters_json', PARAM_RAW);
        $starters = json_decode($raw, true);
        if (is_array($starters)) {
            starter_manager::save_global_starters($starters);
            \core\notification::success(get_string('starters:saved', 'local_ai_course_assistant'));
        }
    } else if ($action === 'reset') {
        starter_manager::reset_to_defaults();
        \core\notification::success(get_string('starters:reset_done', 'local_ai_course_assistant'));
    }

    redirect($PAGE->url);
}

// Load current starters.
$starters = starter_manager::get_global_starters();
$iconkeys = starter_manager::get_icon_keys();
$icons = [];
foreach ($iconkeys as $k) {
    $icons[$k] = starter_manager::get_icon_svg($k);
}

echo $OUTPUT->header();
?>

<style>
.aica-starters-admin { max-width: 900px; margin: 0 auto; }
.aica-starter-card {
    border: 1px solid #dee2e6; border-radius: 8px; margin-bottom: 12px;
    background: #fff; transition: box-shadow 0.2s;
}
.aica-starter-card.dragging { opacity: 0.5; box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
.aica-starter-card-header {
    display: flex; align-items: center; gap: 12px; padding: 12px 16px; cursor: pointer;
    user-select: none;
}
.aica-starter-card-header:hover { background: #f8f9fa; border-radius: 8px; }
.aica-drag-handle { cursor: grab; color: #adb5bd; font-size: 18px; }
.aica-drag-handle:active { cursor: grabbing; }
.aica-starter-icon-preview { width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; color: #495057; }
.aica-starter-icon-preview svg { width: 18px; height: 18px; }
.aica-starter-name { font-weight: 600; flex: 1; }
.aica-starter-type-badge {
    font-size: 11px; padding: 2px 8px; border-radius: 12px;
    background: #e9ecef; color: #495057; text-transform: uppercase;
}
.aica-starter-type-badge.type-quiz { background: #fff3cd; color: #856404; }
.aica-starter-type-badge.type-voice,
.aica-starter-type-badge.type-pronunciation { background: #d4edda; color: #155724; }
.aica-starter-toggle { transform: scale(1.2); }
.aica-starter-expand-arrow { font-size: 14px; color: #adb5bd; transition: transform 0.2s; }
.aica-starter-card.expanded .aica-starter-expand-arrow { transform: rotate(180deg); }
.aica-starter-card-body { display: none; padding: 0 16px 16px 52px; }
.aica-starter-card.expanded .aica-starter-card-body { display: block; }
.aica-field { margin-bottom: 12px; }
.aica-field label { display: block; font-weight: 600; margin-bottom: 4px; font-size: 13px; color: #495057; }
.aica-field input[type="text"], .aica-field textarea, .aica-field select {
    width: 100%; padding: 8px 12px; border: 1px solid #ced4da; border-radius: 6px;
    font-size: 14px; font-family: inherit;
}
.aica-field textarea { min-height: 60px; resize: vertical; }
.aica-field .aica-help { font-size: 12px; color: #6c757d; margin-top: 2px; }
.aica-icon-picker { display: flex; flex-wrap: wrap; gap: 6px; }
.aica-icon-option {
    width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;
    border: 2px solid #dee2e6; border-radius: 6px; cursor: pointer; color: #495057;
    background: #fff; transition: all 0.15s;
}
.aica-icon-option:hover { border-color: #0d6efd; background: #e7f1ff; }
.aica-icon-option.selected { border-color: #0d6efd; background: #0d6efd; color: #fff; }
.aica-icon-option svg { width: 18px; height: 18px; }
.aica-starter-actions { display: flex; gap: 8px; margin-top: 8px; }
.aica-btn-delete { color: #dc3545; background: none; border: 1px solid #dc3545; border-radius: 6px; padding: 4px 12px; cursor: pointer; font-size: 13px; }
.aica-btn-delete:hover { background: #dc3545; color: #fff; }
.aica-btn-add {
    display: flex; align-items: center; justify-content: center; gap: 8px;
    width: 100%; padding: 12px; border: 2px dashed #dee2e6; border-radius: 8px;
    background: #fff; cursor: pointer; color: #6c757d; font-size: 14px; margin-bottom: 16px;
}
.aica-btn-add:hover { border-color: #0d6efd; color: #0d6efd; background: #f8f9ff; }
.aica-admin-actions { display: flex; gap: 12px; margin-top: 16px; }
.aica-admin-actions .btn { min-width: 140px; }
</style>

<div class="aica-starters-admin">
    <p><?php echo get_string('starters:admin_desc', 'local_ai_course_assistant'); ?></p>

    <div class="card mb-3" style="border-left: 4px solid #0d6efd;">
        <div class="card-body">
            <h6 style="cursor:pointer;margin:0;" onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'; this.querySelector('span').textContent=this.nextElementSibling.style.display==='none'?'▶':'▼';">
                <span>▶</span> How to use this page
            </h6>
            <div style="display:none;margin-top:12px;font-size:14px;line-height:1.6;">
                <p><strong>Built-in starters</strong> are system managed. You can enable or disable them, change their icon, and reorder them, but you cannot delete them.</p>
                <p><strong>Custom starters</strong> are ones you create. Click "Add New Starter" below to create one. You can edit everything: the name, prompt, icon, and visibility conditions.</p>
                <p><strong>Starter types:</strong></p>
                <ul style="margin-bottom:8px;">
                    <li><strong>Prompt</strong>: when clicked, sends a custom message to the AI on behalf of the student</li>
                    <li><span class="aica-starter-type-badge type-quiz" style="font-size:11px;padding:2px 8px;border-radius:12px;background:#fff3cd;color:#856404;">QUIZ</span> starts an interactive practice quiz</li>
                    <li><span class="aica-starter-type-badge type-voice" style="font-size:11px;padding:2px 8px;border-radius:12px;background:#d4edda;color:#155724;">VOICE</span> starts a spoken conversation (requires TTS)</li>
                    <li><span class="aica-starter-type-badge type-pronunciation" style="font-size:11px;padding:2px 8px;border-radius:12px;background:#d4edda;color:#155724;">PRONUNCIATION</span> starts pronunciation practice (requires Realtime Voice Mode)</li>
                </ul>
                <p><strong>Conditional visibility:</strong> choose "Only when TTS enabled" for audio starters, or "Only when Realtime enabled" for pronunciation starters. If the required feature is off, the starter will be hidden from students.</p>
                <p><strong>Prompt placeholders:</strong> use <code>{page}</code> to insert the current page title. Example: <em>"Explain the key concepts on the {page} page."</em></p>
                <p><strong>Drag to reorder</strong> using the ≡ handle on the left. The order here is the order students see.</p>
                <p><strong>Per-course overrides:</strong> after configuring starters here, go to each course's settings page to enable or disable specific starters for that course.</p>
            </div>
        </div>
    </div>

    <div class="aica-admin-actions mb-3">
        <form method="post" style="display: inline;">
            <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
            <input type="hidden" name="action" value="save">
            <input type="hidden" name="starters_json" class="aica-starters-json" value="">
            <button type="submit" class="btn btn-primary aica-save-btn">
                <?php echo get_string('starters:save', 'local_ai_course_assistant'); ?>
            </button>
        </form>
        <form method="post" style="display: inline;" onsubmit="return confirm('<?php echo get_string('starters:reset_confirm', 'local_ai_course_assistant'); ?>');">
            <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
            <input type="hidden" name="action" value="reset">
            <button type="submit" class="btn btn-outline-secondary">
                <?php echo get_string('starters:reset_defaults', 'local_ai_course_assistant'); ?>
            </button>
        </form>
        <a href="<?php echo (new moodle_url('/admin/category.php', ['category' => 'local_ai_course_assistant']))->out(); ?>"
           class="btn btn-outline-secondary">
            <?php echo get_string('starters:back_settings', 'local_ai_course_assistant'); ?>
        </a>
    </div>

    <div id="aica-starters-list"></div>

    <button type="button" class="aica-btn-add" id="aica-add-starter">
        <span style="font-size: 20px;">+</span>
        <?php echo get_string('starters:add_new', 'local_ai_course_assistant'); ?>
    </button>

    <div class="aica-admin-actions">
        <form method="post" style="display: inline;">
            <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
            <input type="hidden" name="action" value="save">
            <input type="hidden" name="starters_json" class="aica-starters-json" value="">
            <button type="submit" class="btn btn-primary aica-save-btn">
                <?php echo get_string('starters:save', 'local_ai_course_assistant'); ?>
            </button>
        </form>
        <form method="post" style="display: inline;" onsubmit="return confirm('<?php echo get_string('starters:reset_confirm', 'local_ai_course_assistant'); ?>');">
            <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
            <input type="hidden" name="action" value="reset">
            <button type="submit" class="btn btn-outline-secondary">
                <?php echo get_string('starters:reset_defaults', 'local_ai_course_assistant'); ?>
            </button>
        </form>
        <a href="<?php echo (new moodle_url('/admin/category.php', ['category' => 'local_ai_course_assistant']))->out(); ?>"
           class="btn btn-outline-secondary">
            <?php echo get_string('starters:back_settings', 'local_ai_course_assistant'); ?>
        </a>
    </div>
</div>

<script>
(function() {
    var ICONS = <?php echo json_encode($icons); ?>;
    var starters = <?php echo json_encode($starters); ?>;
    var list = document.getElementById('aica-starters-list');
    var nextOrder = starters.length + 1;

    function slug(name) {
        return name.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '').substring(0, 30) || 'custom-' + Date.now();
    }

    function renderCard(s, idx) {
        var card = document.createElement('div');
        card.className = 'aica-starter-card';
        card.draggable = true;
        card.dataset.idx = idx;

        var typeBadge = s.type !== 'prompt' ? '<span class="aica-starter-type-badge type-' + s.type + '">' + s.type + '</span>' : '';
        var condBadge = s.conditional ? '<span class="aica-starter-type-badge">' + s.conditional + '</span>' : '';

        card.innerHTML =
            '<div class="aica-starter-card-header">' +
                '<span class="aica-drag-handle" title="Drag to reorder">&#x2630;</span>' +
                '<span class="aica-starter-icon-preview">' + (ICONS[s.icon] || ICONS.chat) + '</span>' +
                '<span class="aica-starter-name">' + escHtml(s.name) + '</span>' +
                typeBadge + condBadge +
                '<label style="margin:0;display:flex;align-items:center;gap:4px;" onclick="event.stopPropagation()">' +
                    '<input type="checkbox" class="aica-starter-toggle" ' + (s.enabled ? 'checked' : '') + '>' +
                    '<span style="font-size:12px;color:#6c757d;">On</span>' +
                '</label>' +
                '<span class="aica-starter-expand-arrow">&#x25BC;</span>' +
            '</div>' +
            '<div class="aica-starter-card-body">' +
                '<div class="aica-field">' +
                    '<label>Name</label>' +
                    '<input type="text" class="aica-f-name" aria-label="Chip name" value="' + escAttr(s.name) + '" placeholder="Chip display name">' +
                '</div>' +
                '<div class="aica-field">' +
                    '<label>Description</label>' +
                    '<input type="text" class="aica-f-desc" aria-label="Chip description" value="' + escAttr(s.description || '') + '" placeholder="Admin-only description">' +
                    '<div class="aica-help">Shown only in this admin panel for reference.</div>' +
                '</div>' +
                (s.type === 'prompt' ?
                '<div class="aica-field">' +
                    '<label>AI Prompt</label>' +
                    '<textarea class="aica-f-prompt" aria-label="AI prompt template" placeholder="The message sent to the AI when this chip is clicked...">' + escHtml(s.prompt || '') + '</textarea>' +
                    '<div class="aica-help">Use <code>{page}</code> for the current page title. This is sent as the student\'s message to the AI.</div>' +
                '</div>' : '') +
                '<div class="aica-field">' +
                    '<label>Icon</label>' +
                    '<div class="aica-icon-picker">' +
                        Object.keys(ICONS).map(function(k) {
                            var labels = {chat:'Chat',lightbulb:'Idea',book:'Book',pencil:'Write',question:'Question',
                                flask:'Experiment',target:'Goal',chart:'Analytics',globe:'Languages',mic:'Microphone',
                                speaker:'Speaker',puzzle:'Puzzle',star:'Star',heart:'Wellbeing',clock:'Timer',
                                brain:'Brain',rocket:'Quick Start',compass:'Explore',list:'List',search:'Search',
                                graduation:'Academic',handshake:'Support',users:'Group',trophy:'Achievement'};
                            var label = labels[k] || k;
                            return '<span class="aica-icon-option' + (k === s.icon ? ' selected' : '') +
                                '" data-icon="' + k + '" title="' + label + '">' + ICONS[k] + '</span>';
                        }).join('') +
                    '</div>' +
                '</div>' +
                (s.type === 'prompt' && !s.builtin ?
                '<div class="aica-field">' +
                    '<label>Conditional</label>' +
                    '<select class="aica-f-conditional">' +
                        '<option value=""' + (!s.conditional ? ' selected' : '') + '>Always shown</option>' +
                        '<option value="tts"' + (s.conditional === 'tts' ? ' selected' : '') + '>Only when TTS enabled</option>' +
                        '<option value="realtime"' + (s.conditional === 'realtime' ? ' selected' : '') + '>Only when Realtime enabled</option>' +
                    '</select>' +
                '</div>' : '') +
                '<div class="aica-starter-actions">' +
                    (!s.builtin ? '<button type="button" class="aica-btn-delete">Delete this starter</button>' : '<span style="font-size:12px;color:#6c757d;">Built-in starter (cannot be deleted)</span>') +
                '</div>' +
            '</div>';

        // Expand/collapse.
        card.querySelector('.aica-starter-card-header').addEventListener('click', function(e) {
            if (e.target.closest('.aica-starter-toggle') || e.target.closest('label')) return;
            card.classList.toggle('expanded');
        });

        // Toggle.
        card.querySelector('.aica-starter-toggle').addEventListener('change', function() {
            starters[card.dataset.idx].enabled = this.checked;
        });

        // Name.
        var nameInput = card.querySelector('.aica-f-name');
        if (nameInput) {
            nameInput.addEventListener('input', function() {
                starters[card.dataset.idx].name = this.value;
                card.querySelector('.aica-starter-name').textContent = this.value;
            });
        }

        // Description.
        var descInput = card.querySelector('.aica-f-desc');
        if (descInput) {
            descInput.addEventListener('input', function() {
                starters[card.dataset.idx].description = this.value;
            });
        }

        // Prompt.
        var promptInput = card.querySelector('.aica-f-prompt');
        if (promptInput) {
            promptInput.addEventListener('input', function() {
                starters[card.dataset.idx].prompt = this.value;
            });
        }

        // Conditional.
        var condSelect = card.querySelector('.aica-f-conditional');
        if (condSelect) {
            condSelect.addEventListener('change', function() {
                starters[card.dataset.idx].conditional = this.value;
            });
        }

        // Icon picker.
        card.querySelectorAll('.aica-icon-option').forEach(function(opt) {
            opt.addEventListener('click', function() {
                card.querySelectorAll('.aica-icon-option').forEach(function(o) { o.classList.remove('selected'); });
                opt.classList.add('selected');
                starters[card.dataset.idx].icon = opt.dataset.icon;
                card.querySelector('.aica-starter-icon-preview').innerHTML = ICONS[opt.dataset.icon];
            });
        });

        // Delete.
        var delBtn = card.querySelector('.aica-btn-delete');
        if (delBtn) {
            delBtn.addEventListener('click', function() {
                if (confirm('Delete "' + starters[card.dataset.idx].name + '"?')) {
                    starters.splice(card.dataset.idx, 1);
                    renderAll();
                }
            });
        }

        // Drag events.
        card.addEventListener('dragstart', function(e) {
            card.classList.add('dragging');
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/plain', card.dataset.idx);
        });
        card.addEventListener('dragend', function() {
            card.classList.remove('dragging');
        });
        card.addEventListener('dragover', function(e) {
            e.preventDefault();
            e.dataTransfer.dropEffect = 'move';
        });
        card.addEventListener('drop', function(e) {
            e.preventDefault();
            var fromIdx = parseInt(e.dataTransfer.getData('text/plain'));
            var toIdx = parseInt(card.dataset.idx);
            if (fromIdx !== toIdx) {
                var item = starters.splice(fromIdx, 1)[0];
                starters.splice(toIdx, 0, item);
                renderAll();
            }
        });

        return card;
    }

    function renderAll() {
        list.innerHTML = '';
        starters.forEach(function(s, i) {
            s.sort_order = i + 1;
            list.appendChild(renderCard(s, i));
        });
    }

    function escHtml(str) { var d = document.createElement('div'); d.textContent = str; return d.innerHTML; }
    function escAttr(str) { return str.replace(/&/g,'&amp;').replace(/"/g,'&quot;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

    // Add new starter.
    document.getElementById('aica-add-starter').addEventListener('click', function() {
        var name = 'New Starter';
        starters.push({
            key: slug(name + '-' + Date.now()),
            name: name,
            description: '',
            prompt: '',
            icon: 'lightbulb',
            type: 'prompt',
            enabled: true,
            sort_order: starters.length + 1,
            builtin: false,
            conditional: ''
        });
        renderAll();
        // Expand the new card.
        var cards = list.querySelectorAll('.aica-starter-card');
        var last = cards[cards.length - 1];
        if (last) {
            last.classList.add('expanded');
            last.querySelector('.aica-f-name').focus();
            last.scrollIntoView({behavior: 'smooth', block: 'center'});
        }
    });

    // Save: serialize starters to all hidden fields (top + bottom forms).
    document.querySelectorAll('.aica-save-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            // Generate keys for new custom starters based on name.
            starters.forEach(function(s) {
                if (!s.builtin && s.key.indexOf('custom-') === 0) {
                    s.key = slug(s.name);
                }
            });
            var json = JSON.stringify(starters);
            document.querySelectorAll('.aica-starters-json').forEach(function(el) {
                el.value = json;
            });
        });
    });

    renderAll();
})();
</script>

<?php
echo $OUTPUT->footer();
