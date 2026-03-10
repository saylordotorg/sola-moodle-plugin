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
 * Admin page for self-updating the SOLA plugin from GitHub releases.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_login();
require_capability('moodle/site:config', \context_system::instance());

use local_ai_course_assistant\plugin_updater;

$PAGE->set_context(\context_system::instance());
$PAGE->set_url(new moodle_url('/local/ai_course_assistant/update_admin.php'));
$PAGE->set_title(get_string('update:title', 'local_ai_course_assistant'));
$PAGE->set_heading(get_string('update:title', 'local_ai_course_assistant'));
$PAGE->set_pagelayout('admin');

// Handle POST: install update.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_sesskey();
    $action = required_param('action', PARAM_ALPHA);

    if ($action === 'install') {
        $zipurl = required_param('zip_url', PARAM_URL);
        $zippath = plugin_updater::download_release($zipurl);

        if (empty($zippath)) {
            \core\notification::error(get_string('update:download_failed', 'local_ai_course_assistant'));
            redirect($PAGE->url);
        }

        $result = plugin_updater::install_update($zippath);

        if ($result['success']) {
            \core\notification::success($result['message']);
            // Redirect to Moodle's upgrade page to complete DB upgrade + cache purge.
            redirect(new moodle_url('/admin/index.php'));
        } else {
            \core\notification::error($result['message']);
            redirect($PAGE->url);
        }
    }
}

// Check for updates.
$current = plugin_updater::get_current_version();
$latest = plugin_updater::check_for_update();

echo $OUTPUT->header();
?>

<style>
.sola-update-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin-bottom: 24px; }
.sola-update-card { border: 1px solid #dee2e6; border-radius: 8px; padding: 20px; background: #fff; }
.sola-update-card h6 { color: #6c757d; font-size: 12px; text-transform: uppercase; margin-bottom: 8px; }
.sola-update-card .value { font-size: 24px; font-weight: 700; }
.sola-update-card .value.up-to-date { color: #28a745; }
.sola-update-card .value.update-available { color: #fd7e14; }
.sola-changelog { background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 20px; margin-bottom: 24px; white-space: pre-wrap; font-size: 14px; line-height: 1.6; }
</style>

<div style="max-width: 800px;">
    <a href="<?php echo (new moodle_url('/admin/settings.php', ['section' => 'local_ai_course_assistant']))->out(); ?>"
       class="btn btn-sm btn-outline-secondary mb-3">
        &larr; <?php echo get_string('update:back_to_settings', 'local_ai_course_assistant'); ?>
    </a>

    <div class="sola-update-cards">
        <div class="sola-update-card">
            <h6><?php echo get_string('update:current_version', 'local_ai_course_assistant'); ?></h6>
            <div class="value">v<?php echo s($current->release); ?></div>
            <div class="text-muted" style="font-size:13px;">Build <?php echo s($current->version); ?></div>
        </div>

        <div class="sola-update-card">
            <h6><?php echo get_string('update:latest_version', 'local_ai_course_assistant'); ?></h6>
            <?php if ($latest): ?>
                <div class="value"><?php echo s($latest->tag); ?></div>
                <?php if ($latest->published_at): ?>
                    <div class="text-muted" style="font-size:13px;">
                        Released <?php echo s(substr($latest->published_at, 0, 10)); ?>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="value text-muted">?</div>
                <div class="text-danger" style="font-size:13px;">
                    <?php echo get_string('update:github_error', 'local_ai_course_assistant'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="sola-update-card">
            <h6>Status</h6>
            <?php if (!$latest): ?>
                <div class="value text-muted">Unknown</div>
            <?php elseif ($latest->update_available): ?>
                <div class="value update-available"><?php echo get_string('update:available', 'local_ai_course_assistant'); ?></div>
            <?php else: ?>
                <div class="value up-to-date"><?php echo get_string('update:up_to_date', 'local_ai_course_assistant'); ?></div>
            <?php endif; ?>
        </div>
    </div>

    <?php if ($latest && $latest->update_available): ?>
        <?php if (!empty($latest->changelog)): ?>
            <h5><?php echo get_string('update:changelog', 'local_ai_course_assistant'); ?></h5>
            <div class="sola-changelog"><?php echo s($latest->changelog); ?></div>
        <?php endif; ?>

        <?php if (!empty($latest->zip_url)): ?>
            <div class="alert alert-warning">
                <strong>Before updating:</strong> a backup of the current plugin will be created automatically.
                After installation, Moodle will redirect you to complete the database upgrade.
            </div>
            <form method="post">
                <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
                <input type="hidden" name="action" value="install">
                <input type="hidden" name="zip_url" value="<?php echo s($latest->zip_url); ?>">
                <button type="submit" class="btn btn-primary btn-lg"
                        onclick="return confirm('<?php echo get_string('update:confirm', 'local_ai_course_assistant'); ?>');">
                    <?php echo get_string('update:install', 'local_ai_course_assistant'); ?> <?php echo s($latest->tag); ?>
                </button>
            </form>
        <?php else: ?>
            <div class="alert alert-info">
                Update available but no download link found. Please update manually from
                <a href="https://github.com/saylordotorg/sola-moodle-plugin/releases" target="_blank">GitHub Releases</a>.
            </div>
        <?php endif; ?>
    <?php elseif ($latest && !$latest->update_available): ?>
        <div class="alert alert-success">
            <?php echo get_string('update:up_to_date', 'local_ai_course_assistant'); ?>
            You are running the latest version.
        </div>
    <?php endif; ?>
</div>

<?php
echo $OUTPUT->footer();
