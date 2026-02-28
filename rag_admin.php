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
 * RAG index status and manual reindex admin page.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\content_indexer;

$syscontext = context_system::instance();
require_login();
require_capability('moodle/site:config', $syscontext);

$action   = optional_param('action', '', PARAM_ALPHANUMEXT);
$courseid = optional_param('courseid', 0, PARAM_INT);

$pageurl = new moodle_url('/local/ai_course_assistant/rag_admin.php');
$PAGE->set_url($pageurl);
$PAGE->set_context($syscontext);
$PAGE->set_title(get_string('ragadmin:title', 'local_ai_course_assistant'));
$PAGE->set_heading(get_string('ragadmin:title', 'local_ai_course_assistant'));
$PAGE->set_pagelayout('admin');

// Handle POST actions.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_sesskey();

    if ($action === 'reindexall') {
        // Reindex all courses that have active enrolments.
        $sql = "SELECT DISTINCT c.id, c.fullname
                  FROM {course} c
                  JOIN {enrol} e ON e.courseid = c.id AND e.status = 0
                  JOIN {user_enrolments} ue ON ue.enrolid = e.id AND ue.status = 0
                 WHERE c.id > 1 AND c.visible = 1";
        $courses = $DB->get_records_sql($sql);

        $totalindexed = 0;
        $totalskipped = 0;
        $totalerrors  = 0;

        foreach ($courses as $c) {
            try {
                $stats = content_indexer::index_course((int) $c->id);
                $totalindexed += $stats['indexed'];
                $totalskipped += $stats['skipped'];
                $totalerrors  += $stats['errors'];
            } catch (\Exception $e) {
                $totalerrors++;
            }
        }

        $msg = get_string('ragadmin:reindexall_done', 'local_ai_course_assistant', (object)[
            'courses' => count($courses),
            'indexed' => $totalindexed,
            'skipped' => $totalskipped,
            'errors'  => $totalerrors,
        ]);
        redirect($pageurl, $msg, null, \core\output\notification::NOTIFY_SUCCESS);

    } else if ($action === 'reindexcourse' && $courseid > 0) {
        try {
            $stats = content_indexer::index_course($courseid);
            $msg = get_string('ragadmin:reindexcourse_done', 'local_ai_course_assistant', (object)[
                'indexed' => $stats['indexed'],
                'skipped' => $stats['skipped'],
                'errors'  => $stats['errors'],
            ]);
            redirect($pageurl, $msg, null, \core\output\notification::NOTIFY_SUCCESS);
        } catch (\Exception $e) {
            redirect($pageurl, $e->getMessage(), null, \core\output\notification::NOTIFY_ERROR);
        }

    } else if ($action === 'deleteindex' && $courseid > 0) {
        content_indexer::delete_course_index($courseid);
        redirect($pageurl,
            get_string('ragadmin:deleteindex_done', 'local_ai_course_assistant'),
            null, \core\output\notification::NOTIFY_SUCCESS);
    }
}

// Fetch per-course index statistics.
// Include: courses that have chunks OR are active (visible + have enrolments).
$sql = "SELECT c.id, c.fullname,
               COUNT(ch.id) AS chunks,
               SUM(CASE WHEN ch.embedding IS NOT NULL THEN 1 ELSE 0 END) AS embedded,
               MAX(ch.timeindexed) AS lastindexed
          FROM {course} c
          LEFT JOIN {local_ai_course_assistant_chunks} ch ON ch.courseid = c.id
         WHERE c.id > 1
         GROUP BY c.id, c.fullname
        HAVING COUNT(ch.id) > 0
         ORDER BY c.fullname ASC";
$indexedcourses = $DB->get_records_sql($sql);

// Also get active (enrolled) courses not yet indexed.
$sql = "SELECT DISTINCT c.id, c.fullname
          FROM {course} c
          JOIN {enrol} e ON e.courseid = c.id AND e.status = 0
          JOIN {user_enrolments} ue ON ue.enrolid = e.id AND ue.status = 0
         WHERE c.id > 1 AND c.visible = 1
         ORDER BY c.fullname ASC";
$activecourses = $DB->get_records_sql($sql);

$ragenabled  = (bool) get_config('local_ai_course_assistant', 'rag_enabled');
$settingsurl = new moodle_url('/admin/settings.php', ['section' => 'local_ai_course_assistant']);

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('ragadmin:title', 'local_ai_course_assistant'));

// Back link.
echo html_writer::div(
    html_writer::link($settingsurl,
        '&larr; ' . get_string('ragadmin:back_to_settings', 'local_ai_course_assistant'),
        ['class' => 'btn btn-sm btn-outline-secondary mb-3']),
    'mb-2'
);

// RAG disabled notice.
if (!$ragenabled) {
    echo $OUTPUT->notification(
        get_string('ragadmin:rag_disabled_notice', 'local_ai_course_assistant'),
        \core\output\notification::NOTIFY_WARNING
    );
}

// Summary totals.
$totalchunks   = array_sum(array_column((array) $indexedcourses, 'chunks'));
$totalembedded = array_sum(array_column((array) $indexedcourses, 'embedded'));
?>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title"><?php echo count($indexedcourses); ?></h3>
                <p class="card-text text-muted"><?php echo get_string('ragadmin:stat_courses_indexed', 'local_ai_course_assistant'); ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title"><?php echo number_format($totalchunks); ?></h3>
                <p class="card-text text-muted"><?php echo get_string('ragadmin:stat_total_chunks', 'local_ai_course_assistant'); ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title"><?php echo number_format($totalembedded); ?></h3>
                <p class="card-text text-muted"><?php echo get_string('ragadmin:stat_embedded_chunks', 'local_ai_course_assistant'); ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title"><?php echo count($activecourses); ?></h3>
                <p class="card-text text-muted"><?php echo get_string('ragadmin:stat_active_courses', 'local_ai_course_assistant'); ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Reindex All button -->
<form method="post" action="<?php echo $pageurl->out(false); ?>" class="mb-4">
    <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
    <input type="hidden" name="action" value="reindexall">
    <button type="submit" class="btn btn-primary"
        onclick="return confirm('<?php echo get_string('ragadmin:reindexall_confirm', 'local_ai_course_assistant'); ?>')">
        <?php echo get_string('ragadmin:reindexall', 'local_ai_course_assistant'); ?>
    </button>
    <small class="text-muted ml-2"><?php echo get_string('ragadmin:reindexall_desc', 'local_ai_course_assistant'); ?></small>
</form>

<!-- Status table -->
<h4><?php echo get_string('ragadmin:index_status', 'local_ai_course_assistant'); ?></h4>

<?php if (empty($indexedcourses) && empty($activecourses)): ?>
    <p class="text-muted"><?php echo get_string('ragadmin:no_courses', 'local_ai_course_assistant'); ?></p>
<?php else: ?>
<table class="table table-sm generaltable">
    <thead>
        <tr>
            <th><?php echo get_string('ragadmin:col_course', 'local_ai_course_assistant'); ?></th>
            <th class="text-right"><?php echo get_string('ragadmin:col_chunks', 'local_ai_course_assistant'); ?></th>
            <th class="text-right"><?php echo get_string('ragadmin:col_embedded', 'local_ai_course_assistant'); ?></th>
            <th><?php echo get_string('ragadmin:col_lastindexed', 'local_ai_course_assistant'); ?></th>
            <th><?php echo get_string('ragadmin:col_actions', 'local_ai_course_assistant'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Merge indexed and active courses, deduplicated.
        $allcourses = $indexedcourses;
        foreach ($activecourses as $ac) {
            if (!isset($allcourses[$ac->id])) {
                $ac->chunks    = 0;
                $ac->embedded  = 0;
                $ac->lastindexed = null;
                $allcourses[$ac->id] = $ac;
            }
        }
        uasort($allcourses, fn($a, $b) => strcmp($a->fullname, $b->fullname));

        foreach ($allcourses as $course): ?>
        <tr>
            <td>
                <?php echo html_writer::link(
                    new moodle_url('/course/view.php', ['id' => $course->id]),
                    s($course->fullname),
                    ['target' => '_blank']
                ); ?>
            </td>
            <td class="text-right">
                <?php echo $course->chunks > 0
                    ? html_writer::span(number_format($course->chunks), 'badge badge-info')
                    : html_writer::span('0', 'badge badge-secondary'); ?>
            </td>
            <td class="text-right">
                <?php echo $course->embedded > 0
                    ? html_writer::span(number_format($course->embedded), 'badge badge-success')
                    : html_writer::span('0', 'badge badge-secondary'); ?>
            </td>
            <td>
                <?php if (!empty($course->lastindexed)): ?>
                    <?php echo userdate((int)$course->lastindexed, get_string('strftimedatetimeshort', 'langconfig')); ?>
                <?php else: ?>
                    <span class="text-muted"><?php echo get_string('ragadmin:never', 'local_ai_course_assistant'); ?></span>
                <?php endif; ?>
            </td>
            <td>
                <form method="post" action="<?php echo $pageurl->out(false); ?>" class="d-inline">
                    <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
                    <input type="hidden" name="action" value="reindexcourse">
                    <input type="hidden" name="courseid" value="<?php echo (int)$course->id; ?>">
                    <button type="submit" class="btn btn-sm btn-outline-primary">
                        <?php echo get_string('ragadmin:reindex', 'local_ai_course_assistant'); ?>
                    </button>
                </form>
                <?php if ($course->chunks > 0): ?>
                <form method="post" action="<?php echo $pageurl->out(false); ?>" class="d-inline ml-1">
                    <input type="hidden" name="sesskey" value="<?php echo sesskey(); ?>">
                    <input type="hidden" name="action" value="deleteindex">
                    <input type="hidden" name="courseid" value="<?php echo (int)$course->id; ?>">
                    <button type="submit" class="btn btn-sm btn-outline-danger"
                        onclick="return confirm('<?php echo get_string('ragadmin:deleteindex_confirm', 'local_ai_course_assistant'); ?>')">
                        <?php echo get_string('ragadmin:deleteindex', 'local_ai_course_assistant'); ?>
                    </button>
                </form>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>

<?php
echo $OUTPUT->footer();
