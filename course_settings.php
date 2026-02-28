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
 * @copyright  2025 AI Course Assistant
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
$PAGE->set_context($syscontext);

// Global admin settings URL for the "back to global" link.
$globalsettingsurl = new moodle_url('/admin/settings.php', ['section' => 'local_ai_course_assistant']);

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

    redirect($pageurl, get_string('coursesettings:saved', 'local_ai_course_assistant'),
        null, \core\output\notification::NOTIFY_SUCCESS);
}

// Load current course overrides.
$current = course_config_manager::get($courseid);

// Build provider options.
$providers = [
    ''         => get_string('coursesettings:using_global', 'local_ai_course_assistant') .
                  ' (' . $globalcfg['provider'] . ')',
    'claude'   => get_string('settings:provider_claude', 'local_ai_course_assistant'),
    'openai'   => get_string('settings:provider_openai', 'local_ai_course_assistant'),
    'deepseek' => get_string('settings:provider_deepseek', 'local_ai_course_assistant'),
    'ollama'   => get_string('settings:provider_ollama', 'local_ai_course_assistant'),
    'minimax'  => get_string('settings:provider_minimax', 'local_ai_course_assistant'),
    'custom'   => get_string('settings:provider_custom', 'local_ai_course_assistant'),
];

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('coursesettings:title', 'local_ai_course_assistant'));

// Link back to global settings.
echo html_writer::div(
    html_writer::link($globalsettingsurl,
        get_string('coursesettings:global_settings_link', 'local_ai_course_assistant'),
        ['class' => 'btn btn-sm btn-outline-secondary mb-3']),
    'mb-2'
);

?>
<form method="post" action="<?php echo $pageurl->out(false); ?>">
    <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">

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
                    <small class="form-text text-muted">
                        <?php echo get_string('settings:systemprompt_desc', 'local_ai_course_assistant'); ?>
                    </small>
                </div>
            </div>
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
