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
 * Admin page for viewing integrity check results and running checks manually.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_login();
require_capability('moodle/site:config', \context_system::instance());

use local_ai_course_assistant\integrity_checker;

$PAGE->set_context(\context_system::instance());
$PAGE->set_url(new moodle_url('/local/ai_course_assistant/integrity_admin.php'));
$PAGE->set_title(get_string('integrity:title', 'local_ai_course_assistant'));
$PAGE->set_heading(get_string('integrity:title', 'local_ai_course_assistant'));
$PAGE->set_pagelayout('admin');

// Handle POST: run now.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_sesskey();
    $action = required_param('action', PARAM_ALPHA);

    if ($action === 'runnow') {
        $results = integrity_checker::run_all();
        set_config('integrity_last_results', json_encode($results), 'local_ai_course_assistant');
        set_config('integrity_last_run', time(), 'local_ai_course_assistant');

        if ($results['failed'] > 0) {
            \core\notification::warning("{$results['failed']} issue(s) found. See details below.");
        } else {
            \core\notification::success("All {$results['passed']} checks passed.");
        }
        redirect($PAGE->url);
    }
}

// Load last results.
$lastrun = get_config('local_ai_course_assistant', 'integrity_last_run');
$lastjson = get_config('local_ai_course_assistant', 'integrity_last_results');
$results = $lastjson ? json_decode($lastjson, true) : null;

echo $OUTPUT->header();
?>

<style>
.sola-integrity-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 16px; margin-bottom: 24px; }
.sola-integrity-card { border: 1px solid #dee2e6; border-radius: 8px; padding: 16px; background: #fff; text-align: center; }
.sola-integrity-card h6 { color: #6c757d; font-size: 11px; text-transform: uppercase; margin-bottom: 4px; }
.sola-integrity-card .value { font-size: 28px; font-weight: 700; }
.sola-result-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
.sola-result-table th, .sola-result-table td { padding: 10px 14px; border-bottom: 1px solid #dee2e6; text-align: left; }
.sola-result-table th { background: #f8f9fa; font-size: 13px; text-transform: uppercase; color: #6c757d; }
.sola-badge { display: inline-block; padding: 2px 10px; border-radius: 12px; font-size: 12px; font-weight: 600; text-transform: uppercase; }
.sola-badge.pass { background: #d4edda; color: #155724; }
.sola-badge.fail { background: #f8d7da; color: #721c24; }
.sola-badge.warn { background: #fff3cd; color: #856404; }
</style>

<div style="max-width: 800px;">
    <a href="<?php echo (new moodle_url('/admin/settings.php', ['section' => 'local_ai_course_assistant']))->out(); ?>"
       class="btn btn-sm btn-outline-secondary mb-3">
        &larr; <?php echo get_string('update:back_to_settings', 'local_ai_course_assistant'); ?>
    </a>

    <div class="sola-integrity-cards">
        <div class="sola-integrity-card">
            <h6>Last Run</h6>
            <div class="value" style="font-size:16px;">
                <?php echo $lastrun ? userdate($lastrun, '%Y-%m-%d %H:%M') : 'Never'; ?>
            </div>
        </div>
        <?php if ($results): ?>
        <div class="sola-integrity-card">
            <h6>Passed</h6>
            <div class="value" style="color:#28a745;"><?php echo $results['passed']; ?></div>
        </div>
        <div class="sola-integrity-card">
            <h6>Failed</h6>
            <div class="value" style="color:<?php echo $results['failed'] > 0 ? '#dc3545' : '#28a745'; ?>;">
                <?php echo $results['failed']; ?>
            </div>
        </div>
        <div class="sola-integrity-card">
            <h6>Warnings</h6>
            <div class="value" style="color:<?php echo ($results['warned'] ?? 0) > 0 ? '#ffc107' : '#28a745'; ?>;">
                <?php echo $results['warned'] ?? 0; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <form method="post" class="mb-4">
        <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
        <input type="hidden" name="action" value="runnow">
        <button type="submit" class="btn btn-primary">
            <?php echo get_string('integrity:run_now', 'local_ai_course_assistant'); ?>
        </button>
    </form>

    <?php if ($results && !empty($results['results'])): ?>
    <h5>Test Results</h5>
    <table class="sola-result-table">
        <thead>
            <tr>
                <th>Status</th>
                <th>Check</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results['results'] as $r): ?>
            <tr>
                <td><span class="sola-badge <?php echo s($r['status']); ?>"><?php echo s($r['status']); ?></span></td>
                <td><strong><?php echo s($r['name']); ?></strong></td>
                <td><?php echo s($r['message']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php elseif (!$results): ?>
    <div class="alert alert-info">
        No integrity checks have been run yet. Click "Run Now" to check plugin health, or wait for the daily scheduled task.
    </div>
    <?php endif; ?>
</div>

<?php
echo $OUTPUT->footer();
