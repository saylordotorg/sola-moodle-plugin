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
 * Per-course AI provider settings page.
 *
 * Allows site admins to override the global AI provider config for a
 * specific course (e.g. use DeepSeek for Course A, GPT-4o for Course B).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\course_config_manager;

$courseid = required_param('courseid', PARAM_INT);

$course = $DB->get_record('course', ['id' => $courseid], '*', MUST_EXIST);
$context = context_course::instance($courseid);
$syscontext = context_system::instance();

require_login($course);
require_capability('local/ai_course_assistant:manage', $context);

$pageurl = new moodle_url('/local/ai_course_assistant/course_settings.php', ['courseid' => $courseid]);
$PAGE->set_url($pageurl);
$PAGE->set_title(get_string('coursesettings:title', 'local_ai_course_assistant'));
$PAGE->set_heading($course->fullname . ': ' . get_string('coursesettings:title', 'local_ai_course_assistant'));
$PAGE->set_pagelayout('admin');
$PAGE->set_context($context);

// Global admin settings URL for the "back to global" link.
$globalsettingsurl = new moodle_url('/admin/category.php', ['category' => 'local_ai_course_assistant']);

// Current global defaults (shown as placeholder hints).
$globalcfg = [
    'provider'    => get_config('local_ai_course_assistant', 'provider') ?: 'claude',
    'apikey'      => get_config('local_ai_course_assistant', 'apikey') ?: '',
    'model'       => get_config('local_ai_course_assistant', 'model') ?: '',
    'apibaseurl'  => get_config('local_ai_course_assistant', 'apibaseurl') ?: '',
    'systemprompt' => get_config('local_ai_course_assistant', 'systemprompt') ?: '',
    'temperature'  => get_config('local_ai_course_assistant', 'temperature') ?: '0.7',
];

// Handle POST (save).
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_sesskey();

    $data = [
        'enabled'     => optional_param('enabled', 0, PARAM_INT),
        'provider'    => optional_param('provider', '', PARAM_ALPHA),
        'apikey'      => optional_param('apikey', '', PARAM_RAW_TRIMMED),
        'model'       => optional_param('model', '', PARAM_RAW_TRIMMED),
        'apibaseurl'  => optional_param('apibaseurl', '', PARAM_URL),
        'systemprompt' => optional_param('systemprompt', '', PARAM_RAW),
        'temperature'  => optional_param('temperature', '', PARAM_RAW_TRIMMED),
    ];

    // Validate temperature range if provided.
    if ($data['temperature'] !== '') {
        $temp = (float) $data['temperature'];
        if ($temp < 0 || $temp > 2) {
            $data['temperature'] = '0.7';
        } else {
            $data['temperature'] = (string) $temp;
        }
    }

    course_config_manager::save($courseid, $data);

    // Per-course SOLA enable toggle. Writes an explicit '1' or '0' so the
    // setting no longer inherits the site-wide default_course_mode. This is
    // the same key used by the Analytics page per-course toggle list.
    $solacourse = optional_param('sola_course_enabled', 0, PARAM_INT);
    set_config('sola_enabled_course_' . $courseid, $solacourse ? '1' : '0', 'local_ai_course_assistant');

    // RAG toggle — stored separately as plugin config keyed by course.
    $ragcourse = optional_param('rag_course_enabled', 0, PARAM_INT);
    set_config('rag_enabled_course_' . $courseid, $ragcourse, 'local_ai_course_assistant');

    // English lock — force English responses for ELL courses.
    $englishlock = optional_param('english_lock', 0, PARAM_INT);
    set_config('english_lock_course_' . $courseid, $englishlock, 'local_ai_course_assistant');

    // Voice Tab — per-course override (inherit / force on / force off).
    $voicetab = optional_param('voice_tab', '', PARAM_RAW_TRIMMED);
    if ($voicetab === '1' || $voicetab === '0') {
        set_config('sola_voicetab_course_' . $courseid, $voicetab, 'local_ai_course_assistant');
    } else {
        unset_config('sola_voicetab_course_' . $courseid, 'local_ai_course_assistant');
    }

    // Auto-open — per-course override (inherit / force on / force off).
    $autoopen = optional_param('auto_open', '', PARAM_RAW_TRIMMED);
    if ($autoopen === '1' || $autoopen === '0') {
        set_config('sola_autoopen_course_' . $courseid, $autoopen, 'local_ai_course_assistant');
    } else {
        unset_config('sola_autoopen_course_' . $courseid, 'local_ai_course_assistant');
    }

    // Starter overrides — per-course enable/disable for each starter.
    $starteroverrides = [];
    $allstarters = \local_ai_course_assistant\starter_manager::get_global_starters();
    foreach ($allstarters as $s) {
        $paramname = 'starter_' . clean_param($s['key'], PARAM_ALPHANUMEXT);
        $starteroverrides[$s['key']] = (bool) optional_param($paramname, 0, PARAM_INT);
    }
    \local_ai_course_assistant\starter_manager::save_course_overrides($courseid, $starteroverrides);

    redirect($pageurl, get_string('coursesettings:saved', 'local_ai_course_assistant'),
        null, \core\output\notification::NOTIFY_SUCCESS);
}

// Load current course overrides.
$current = course_config_manager::get($courseid);

// Per-course SOLA enable state (effective, honours default_course_mode).
$solacourseenabled = course_config_manager::is_enabled_for_course($courseid);

// RAG setting — defaults to enabled if global RAG is on and not explicitly disabled.
$ragenabled = (bool)get_config('local_ai_course_assistant', 'rag_enabled');
$ragcourseraw = get_config('local_ai_course_assistant', 'rag_enabled_course_' . $courseid);
$ragcourseenabled = ($ragcourseraw === false) || (bool)$ragcourseraw;

// English lock setting.
$englishlockenabled = (bool)get_config('local_ai_course_assistant', 'english_lock_course_' . $courseid);

// Voice Tab per-course override ('', '1', or '0').
$voicetabcourseraw = get_config('local_ai_course_assistant', 'sola_voicetab_course_' . $courseid);
$voicetabglobal = (bool)get_config('local_ai_course_assistant', 'voice_tab_enabled');

// Auto-open per-course override ('', '1', or '0').
$autoopencourseraw = get_config('local_ai_course_assistant', 'sola_autoopen_course_' . $courseid);
$autoopenglobal = (bool)get_config('local_ai_course_assistant', 'auto_open');

// Build provider options.
$providers = [
    ''         => get_string('coursesettings:using_global', 'local_ai_course_assistant') .
                  ' (' . $globalcfg['provider'] . ')',
    'claude'   => get_string('settings:provider_claude', 'local_ai_course_assistant'),
    'openai'   => get_string('settings:provider_openai', 'local_ai_course_assistant'),
    'deepseek' => get_string('settings:provider_deepseek', 'local_ai_course_assistant'),
    'ollama'   => get_string('settings:provider_ollama', 'local_ai_course_assistant'),
    'minimax'  => get_string('settings:provider_minimax', 'local_ai_course_assistant'),
    'coreai'   => get_string('settings:provider_coreai', 'local_ai_course_assistant'),
    'custom'   => get_string('settings:provider_custom', 'local_ai_course_assistant'),
];

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('coursesettings:title', 'local_ai_course_assistant'));

// Navigation bar.
$courseurl = new moodle_url('/course/view.php', ['id' => $courseid]);
$courseanalyticsurl = new moodle_url('/local/ai_course_assistant/analytics.php', ['courseid' => $courseid]);
echo html_writer::div(
    html_writer::link($courseurl,
        '&larr; Back to Course',
        ['class' => 'btn btn-sm btn-outline-secondary'])
    . ' '
    . html_writer::link($globalsettingsurl,
        get_string('coursesettings:global_settings_link', 'local_ai_course_assistant'),
        ['class' => 'btn btn-sm btn-outline-secondary'])
    . ' '
    . html_writer::link($courseanalyticsurl,
        'Course Analytics',
        ['class' => 'btn btn-sm btn-outline-secondary']),
    'mb-3 d-flex flex-wrap" style="gap:8px'
);

?>
<form method="post" action="<?php echo $pageurl->out(false); ?>">
    <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            <?php echo get_string('savechanges'); ?>
        </button>
        <a href="<?php echo (new moodle_url('/course/view.php', ['id' => $courseid]))->out(false); ?>"
           class="btn btn-secondary ml-2">
            <?php echo get_string('cancel'); ?>
        </a>
    </div>

    <div class="alert alert-info" style="font-size:14px;">
        <strong>How course settings work:</strong>
        Settings configured here override the global defaults for this course only.
        Leave a field blank to use the global setting.
        Changes here do not affect other courses.
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"><?php echo get_string('coursesettings:sola_enabled', 'local_ai_course_assistant'); ?></h5>
        </div>
        <div class="card-body">
            <p class="text-muted"><?php echo get_string('coursesettings:sola_enabled_desc', 'local_ai_course_assistant'); ?></p>
            <div class="form-group row mb-0">
                <label class="col-sm-3 col-form-label">
                    <?php echo get_string('coursesettings:sola_enabled', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="sola_course_enabled" name="sola_course_enabled" value="1"
                            <?php if ($solacourseenabled) { echo 'checked'; } ?>>
                        <label class="custom-control-label" for="sola_course_enabled">
                            <?php echo get_string('coursesettings:sola_enabled_toggle', 'local_ai_course_assistant'); ?>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"><?php echo get_string('coursesettings:title', 'local_ai_course_assistant'); ?></h5>
        </div>
        <div class="card-body">
            <p class="text-muted"><?php echo get_string('coursesettings:enabled_desc', 'local_ai_course_assistant'); ?></p>

            <!-- Enable override -->
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">
                    <?php echo get_string('coursesettings:enabled', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="enabled" name="enabled" value="1"
                            <?php if ($current && $current->enabled) { echo 'checked'; } ?>>
                        <label class="custom-control-label" for="enabled">
                            <?php echo get_string('coursesettings:enabled', 'local_ai_course_assistant'); ?>
                        </label>
                    </div>
                    <small class="form-text text-muted">
                        <?php echo get_string('coursesettings:using_global', 'local_ai_course_assistant'); ?>
                        &mdash;
                        <a href="<?php echo $globalsettingsurl->out(false); ?>">
                            <?php echo get_string('coursesettings:global_settings_link', 'local_ai_course_assistant'); ?>
                        </a>
                    </small>
                </div>
            </div>

            <!-- Provider -->
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="provider">
                    <?php echo get_string('settings:provider', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <select class="form-control" id="provider" name="provider">
                        <?php foreach ($providers as $val => $label) { ?>
                        <option value="<?php echo s($val); ?>"
                            <?php if ($current && $current->provider === $val) { echo 'selected'; } ?>>
                            <?php echo s($label); ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <!-- API Key -->
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="apikey">
                    <?php echo get_string('settings:apikey', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="apikey" name="apikey"
                           value="<?php echo s($current ? $current->apikey : ''); ?>"
                           placeholder="<?php echo get_string('coursesettings:using_global', 'local_ai_course_assistant'); ?>">
                    <small class="form-text text-muted">
                        <?php echo get_string('settings:apikey_desc', 'local_ai_course_assistant'); ?>
                    </small>
                </div>
            </div>

            <!-- Model -->
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="model">
                    <?php echo get_string('settings:model', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="model" name="model"
                           value="<?php echo s($current ? $current->model : ''); ?>"
                           placeholder="<?php echo s($globalcfg['model']); ?>">
                    <small class="form-text text-muted">
                        <?php echo get_string('settings:model_desc', 'local_ai_course_assistant'); ?>
                    </small>
                </div>
            </div>

            <!-- API Base URL -->
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="apibaseurl">
                    <?php echo get_string('settings:apibaseurl', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="apibaseurl" name="apibaseurl"
                           value="<?php echo s($current ? $current->apibaseurl : ''); ?>"
                           placeholder="<?php echo s($globalcfg['apibaseurl']); ?>">
                    <small class="form-text text-muted">
                        <?php echo get_string('settings:apibaseurl_desc', 'local_ai_course_assistant'); ?>
                    </small>
                </div>
            </div>

            <!-- Temperature -->
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="temperature">
                    <?php echo get_string('settings:temperature', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="temperature" name="temperature"
                           min="0" max="2" step="0.1"
                           value="<?php echo s($current && $current->temperature !== null ? $current->temperature : ''); ?>"
                           placeholder="<?php echo s($globalcfg['temperature']); ?>">
                    <small class="form-text text-muted">
                        <?php echo get_string('settings:temperature_desc', 'local_ai_course_assistant'); ?>
                    </small>
                </div>
            </div>

            <!-- System Prompt -->
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="systemprompt">
                    <?php echo get_string('settings:systemprompt', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="systemprompt" name="systemprompt" rows="6"
                              placeholder="<?php echo get_string('coursesettings:using_global', 'local_ai_course_assistant'); ?>"
                              ><?php echo s($current ? $current->systemprompt : ''); ?></textarea>
                    <div class="d-flex align-items-center mt-1" style="gap:8px">
                        <small class="form-text text-muted mb-0">
                            Leave blank to use the global default. Or customize for this course only.
                        </small>
                        <button type="button" class="btn btn-sm btn-outline-secondary" id="btn-reset-prompt" title="Replace with the global default template">
                            Reset to default
                        </button>
                    </div>
                </div>
            </div>
            <script>
            document.getElementById('btn-reset-prompt').addEventListener('click', function() {
                if (confirm('Replace the system prompt with the global default template? Any course-specific edits will be lost.')) {
                    document.getElementById('systemprompt').value = <?php echo json_encode($globalcfg['systemprompt']); ?>;
                }
            });
            </script>
        </div>
    </div>

    <?php if ($ragenabled) { ?>
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"><?php echo get_string('coursesettings:rag', 'local_ai_course_assistant'); ?></h5>
        </div>
        <div class="card-body">
            <p class="text-muted"><?php echo get_string('coursesettings:rag_desc', 'local_ai_course_assistant'); ?></p>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="rag_course_enabled">
                    <?php echo get_string('coursesettings:rag', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="rag_course_enabled"
                               name="rag_course_enabled" value="1"
                               <?php if ($ragcourseenabled) { echo 'checked'; } ?>>
                        <label class="custom-control-label" for="rag_course_enabled">
                            <?php echo get_string('coursesettings:rag_enable', 'local_ai_course_assistant'); ?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row mt-2">
                <div class="col-sm-9 offset-sm-3">
                    <a href="<?php echo (new moodle_url('/local/ai_course_assistant/rag_admin.php'))->out(false); ?>"
                       class="btn btn-sm btn-outline-secondary" target="_blank">
                        <?php echo get_string('ragadmin:title', 'local_ai_course_assistant'); ?> &rarr;
                    </a>
                    <a href="<?php echo (new moodle_url('/local/ai_course_assistant/objectives_admin.php',
                            ['courseid' => $courseid]))->out(false); ?>"
                       class="btn btn-sm btn-outline-secondary ml-2" target="_blank">
                        <?php echo get_string('objectives:title', 'local_ai_course_assistant'); ?> &rarr;
                    </a>
                    <?php if (has_capability('local/ai_course_assistant:viewanalytics',
                            context_course::instance($courseid))) { ?>
                    <a href="<?php echo (new moodle_url('/local/ai_course_assistant/instructor_dashboard.php',
                            ['courseid' => $courseid]))->out(false); ?>"
                       class="btn btn-sm btn-outline-secondary ml-2" target="_blank">
                        <?php echo get_string('instructor_dashboard:link', 'local_ai_course_assistant'); ?> &rarr;
                    </a>
                    <?php } ?>
                </div>
            </div>

            <?php // v3.9.20: Socratic mode toggle (per-course). ?>
            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label">
                    <?php echo get_string('socratic:title', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <?php
                    $socraticon = (bool) get_config('local_ai_course_assistant', 'socratic_mode_course_' . $courseid);
                    if (data_submitted() && optional_param('save_socratic', 0, PARAM_INT) && confirm_sesskey()) {
                        $socraticon = (bool) optional_param('socratic_mode', 0, PARAM_BOOL);
                        set_config('socratic_mode_course_' . $courseid,
                            $socraticon ? 1 : 0, 'local_ai_course_assistant');
                    }
                    ?>
                    <form method="post" action="" style="display:inline">
                        <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>" />
                        <input type="hidden" name="save_socratic" value="1" />
                        <label class="mb-0">
                            <input type="checkbox" name="socratic_mode" value="1"
                                <?php echo $socraticon ? 'checked' : ''; ?>
                                onchange="this.form.submit()" />
                            <?php echo get_string('socratic:toggle', 'local_ai_course_assistant'); ?>
                        </label>
                    </form>
                    <small class="form-text text-muted">
                        <?php echo get_string('socratic:toggle_help', 'local_ai_course_assistant'); ?>
                    </small>
                </div>
            </div>

            <?php // v3.9.22: Flashcards toggle (per-course). ?>
            <div class="form-group row mt-2">
                <label class="col-sm-3 col-form-label">
                    <?php echo get_string('flashcards:title', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <?php
                    $fcon = (bool) get_config('local_ai_course_assistant', 'flashcards_enabled_course_' . $courseid);
                    if (data_submitted() && optional_param('save_flashcards', 0, PARAM_INT) && confirm_sesskey()) {
                        $fcon = (bool) optional_param('flashcards_on', 0, PARAM_BOOL);
                        set_config('flashcards_enabled_course_' . $courseid,
                            $fcon ? 1 : 0, 'local_ai_course_assistant');
                    }
                    ?>
                    <form method="post" action="" style="display:inline">
                        <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>" />
                        <input type="hidden" name="save_flashcards" value="1" />
                        <label class="mb-0">
                            <input type="checkbox" name="flashcards_on" value="1"
                                <?php echo $fcon ? 'checked' : ''; ?>
                                onchange="this.form.submit()" />
                            <?php echo get_string('flashcards:toggle', 'local_ai_course_assistant'); ?>
                        </label>
                    </form>
                    <small class="form-text text-muted">
                        <?php echo get_string('flashcards:toggle_help', 'local_ai_course_assistant'); ?>
                    </small>
                    <?php if ($fcon) { ?>
                    <div class="mt-1">
                        <a href="<?php echo (new moodle_url('/local/ai_course_assistant/flashcards.php',
                                ['courseid' => $courseid]))->out(false); ?>"
                           class="btn btn-sm btn-outline-secondary" target="_blank">
                            <?php echo get_string('flashcards:link', 'local_ai_course_assistant'); ?> &rarr;
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <?php // v3.9.23: Worked examples starter toggle (per-course). ?>
            <div class="form-group row mt-2">
                <label class="col-sm-3 col-form-label">
                    <?php echo get_string('worked_examples:starter', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <?php
                    $weon = (bool) get_config('local_ai_course_assistant', 'worked_examples_enabled_course_' . $courseid);
                    if (data_submitted() && optional_param('save_we', 0, PARAM_INT) && confirm_sesskey()) {
                        $weon = (bool) optional_param('we_on', 0, PARAM_BOOL);
                        set_config('worked_examples_enabled_course_' . $courseid,
                            $weon ? 1 : 0, 'local_ai_course_assistant');
                    }
                    ?>
                    <form method="post" action="" style="display:inline">
                        <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>" />
                        <input type="hidden" name="save_we" value="1" />
                        <label class="mb-0">
                            <input type="checkbox" name="we_on" value="1"
                                <?php echo $weon ? 'checked' : ''; ?>
                                onchange="this.form.submit()" />
                            <?php echo get_string('worked_examples:toggle', 'local_ai_course_assistant'); ?>
                        </label>
                    </form>
                    <small class="form-text text-muted">
                        <?php echo get_string('worked_examples:toggle_help', 'local_ai_course_assistant'); ?>
                    </small>
                </div>
            </div>

            <?php // v3.9.20: Weekly digest email toggle (per-course). ?>
            <div class="form-group row mt-2">
                <label class="col-sm-3 col-form-label">
                    <?php echo get_string('digest:title', 'local_ai_course_assistant'); ?>
                </label>
                <div class="col-sm-9">
                    <?php
                    $digeston = (bool) get_config('local_ai_course_assistant', 'digest_email_enabled_course_' . $courseid);
                    if (data_submitted() && optional_param('save_digest', 0, PARAM_INT) && confirm_sesskey()) {
                        $digeston = (bool) optional_param('digest_email', 0, PARAM_BOOL);
                        set_config('digest_email_enabled_course_' . $courseid,
                            $digeston ? 1 : 0, 'local_ai_course_assistant');
                    }
                    ?>
                    <form method="post" action="" style="display:inline">
                        <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>" />
                        <input type="hidden" name="save_digest" value="1" />
                        <label class="mb-0">
                            <input type="checkbox" name="digest_email" value="1"
                                <?php echo $digeston ? 'checked' : ''; ?>
                                onchange="this.form.submit()" />
                            <?php echo get_string('digest:toggle', 'local_ai_course_assistant'); ?>
                        </label>
                    </form>
                    <small class="form-text text-muted">
                        <?php echo get_string('digest:toggle_help', 'local_ai_course_assistant'); ?>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">English Lock (ELL Courses)</h5>
        </div>
        <div class="card-body">
            <p class="text-muted">Force SOLA to always respond in English for this course, regardless of the student's language preference. Ideal for English language learning courses where students should practice reading and writing in English.</p>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="english_lock">
                    English Lock
                </label>
                <div class="col-sm-9">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="english_lock"
                               name="english_lock" value="1"
                               <?php if ($englishlockenabled) { echo 'checked'; } ?>>
                        <label class="custom-control-label" for="english_lock">
                            Always respond in English
                        </label>
                    </div>
                    <small class="form-text text-muted">
                        When enabled, SOLA will respond in English even if the student writes in another language. The student's language preference in their settings panel will be overridden.
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Voice Tab</h5>
        </div>
        <div class="card-body">
            <p class="text-muted">Control the Voice Tab (settings panel voice options) for this course. By default it inherits the global setting (currently <strong><?php echo $voicetabglobal ? 'enabled' : 'disabled'; ?></strong>).</p>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Voice Tab</label>
                <div class="col-sm-9">
                    <select class="form-control" name="voice_tab" id="voice_tab">
                        <option value="" <?php if ($voicetabcourseraw === false || $voicetabcourseraw === '') { echo 'selected'; } ?>>
                            Inherit global (<?php echo $voicetabglobal ? 'enabled' : 'disabled'; ?>)
                        </option>
                        <option value="1" <?php if ($voicetabcourseraw === '1') { echo 'selected'; } ?>>
                            Force on
                        </option>
                        <option value="0" <?php if ($voicetabcourseraw === '0') { echo 'selected'; } ?>>
                            Force off
                        </option>
                    </select>
                    <small class="form-text text-muted">
                        Override the global Voice Tab setting for this course only.
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Auto-open on first visit</h5>
        </div>
        <div class="card-body">
            <p class="text-muted">Control whether the SOLA drawer opens automatically the first time a student lands on this course. First-visit state is tracked per course in the student's browser via localStorage. By default this course inherits the global setting (currently <strong><?php echo $autoopenglobal ? 'enabled' : 'disabled'; ?></strong>).</p>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Auto-open</label>
                <div class="col-sm-9">
                    <select class="form-control" name="auto_open" id="auto_open">
                        <option value="" <?php if ($autoopencourseraw === false || $autoopencourseraw === '') { echo 'selected'; } ?>>
                            Inherit global (<?php echo $autoopenglobal ? 'enabled' : 'disabled'; ?>)
                        </option>
                        <option value="1" <?php if ($autoopencourseraw === '1') { echo 'selected'; } ?>>
                            Force on
                        </option>
                        <option value="0" <?php if ($autoopencourseraw === '0') { echo 'selected'; } ?>>
                            Force off
                        </option>
                    </select>
                    <small class="form-text text-muted">
                        Override the global Auto-open setting for this course only.
                    </small>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Starter overrides section.
    $allstarters = \local_ai_course_assistant\starter_manager::get_global_starters();
    $coursestarteroverrides = \local_ai_course_assistant\starter_manager::get_course_overrides($courseid);
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"><?php echo get_string('starters:course_section', 'local_ai_course_assistant'); ?></h5>
        </div>
        <div class="card-body">
            <p class="text-muted"><?php echo get_string('starters:course_desc', 'local_ai_course_assistant'); ?></p>
            <?php foreach ($allstarters as $s) {
                // Determine if enabled: if no course overrides saved yet, use global enabled state.
                $isenabled = is_array($coursestarteroverrides)
                    ? !empty($coursestarteroverrides[$s['key']])
                    : !empty($s['enabled']);
                $paramname = 'starter_' . clean_param($s['key'], PARAM_ALPHANUMEXT);
            ?>
            <div class="form-group row mb-1">
                <label class="col-sm-5 col-form-label" for="<?php echo $paramname; ?>">
                    <?php echo s($s['name']); ?>
                    <?php if (!empty($s['description'])) { ?>
                        <small class="text-muted d-block"><?php echo s($s['description']); ?></small>
                    <?php } ?>
                </label>
                <div class="col-sm-7">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="<?php echo $paramname; ?>"
                               name="<?php echo $paramname; ?>" value="1"
                               <?php if ($isenabled) { echo 'checked'; } ?>>
                        <label class="custom-control-label" for="<?php echo $paramname; ?>"></label>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="mt-2">
                <a href="<?php echo (new moodle_url('/local/ai_course_assistant/starter_settings.php'))->out(false); ?>"
                   class="btn btn-sm btn-outline-secondary" target="_blank">
                    <?php echo get_string('starters:admin_title', 'local_ai_course_assistant'); ?> &rarr;
                </a>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0"><?php echo get_string('coursesettings:token_usage', 'local_ai_course_assistant'); ?></h5>
        </div>
        <div class="card-body">
            <p class="text-muted"><?php echo get_string('coursesettings:token_usage_desc', 'local_ai_course_assistant'); ?></p>
            <a href="<?php echo (new moodle_url('/local/ai_course_assistant/token_analytics.php', ['courseid' => $courseid]))->out(false); ?>"
               class="btn btn-sm btn-outline-secondary" target="_blank">
                <?php echo get_string('coursesettings:token_usage', 'local_ai_course_assistant'); ?> &rarr;
            </a>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">
        <?php echo get_string('savechanges'); ?>
    </button>
    <a href="<?php echo (new moodle_url('/course/view.php', ['id' => $courseid]))->out(false); ?>"
       class="btn btn-secondary ml-2">
        <?php echo get_string('cancel'); ?>
    </a>
</form>

<?php
echo $OUTPUT->footer();
