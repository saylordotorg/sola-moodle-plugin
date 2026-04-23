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
 * Vendor DPA status admin view.
 *
 * Surfaces the `vendor_registry::DPA_STATUS` table so admins can see, at a
 * glance, which AI provider drivers are cleared for Tier 2 or higher use
 * and which require the Approved AI Vendor review before being routed
 * learner traffic.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

require_login();

$syscontext = context_system::instance();
require_capability('moodle/site:config', $syscontext);

$PAGE->set_url('/local/ai_course_assistant/vendor_dpa.php');
$PAGE->set_context($syscontext);
$PAGE->set_title(get_string('admin:vendor_dpa:title', 'local_ai_course_assistant',
    \local_ai_course_assistant\branding::short_name()));
$PAGE->set_heading(get_string('admin:vendor_dpa:title', 'local_ai_course_assistant',
    \local_ai_course_assistant\branding::short_name()));

\local_ai_course_assistant\security::send_security_headers();

echo $OUTPUT->header();

echo \html_writer::tag('p',
    get_string('admin:vendor_dpa:intro', 'local_ai_course_assistant'),
    ['style' => 'max-width:820px']);

$labels = [
    'contractual'    => ['text' => 'Contractual (opted out)',  'color' => '#0a7d2c'],
    'default_on'     => ['text' => 'On by default',            'color' => '#b91c1c'],
    'none'           => ['text' => 'No opt out',               'color' => '#b91c1c'],
    'local'          => ['text' => 'Local (no vendor)',        'color' => '#0a7d2c'],
    'unknown'        => ['text' => 'Not yet reviewed',         'color' => '#92400e'],
];
$dpalabels = [
    'signed'         => ['text' => 'Signed',        'color' => '#0a7d2c'],
    'available'      => ['text' => 'Available',     'color' => '#0a7d2c'],
    'negotiating'    => ['text' => 'Negotiating',   'color' => '#92400e'],
    'not_offered'    => ['text' => 'Not offered',   'color' => '#b91c1c'],
    'not_applicable' => ['text' => 'N/A',           'color' => '#6b7280'],
    'unknown'        => ['text' => 'Unknown',       'color' => '#6b7280'],
];

echo '<table class="generaltable" style="margin-top:12px">';
echo '<thead><tr>';
echo '<th>Provider</th><th>Training opt-out</th><th>DPA</th><th>Retention</th><th>Tier ceiling</th><th>Link</th>';
echo '</tr></thead><tbody>';
foreach (\local_ai_course_assistant\vendor_registry::all() as $row) {
    $too = $labels[$row['training_opt_out']] ?? $labels['unknown'];
    $dpa = $dpalabels[$row['dpa_status']] ?? $dpalabels['unknown'];
    echo '<tr>';
    echo '<td><strong>' . s($row['label']) . '</strong><br><code style="font-size:11px;color:#666">'
        . s($row['provider']) . '</code></td>';
    echo '<td style="color:' . $too['color'] . ';font-weight:600">' . s($too['text']) . '</td>';
    echo '<td style="color:' . $dpa['color'] . ';font-weight:600">' . s($dpa['text']) . '</td>';
    echo '<td>' . s($row['retention']) . '</td>';
    echo '<td>Tier ' . (int)$row['tier_ok'] . '</td>';
    if (!empty($row['dpa_link'])) {
        echo '<td><a href="' . s($row['dpa_link']) . '" target="_blank" rel="noopener">Vendor terms</a></td>';
    } else {
        echo '<td style="color:#999">—</td>';
    }
    echo '</tr>';
}
echo '</tbody></table>';

echo \html_writer::tag('p',
    get_string('admin:vendor_dpa:maintenance_note', 'local_ai_course_assistant'),
    ['style' => 'max-width:820px;margin-top:16px;color:#666;font-size:13px']);

echo $OUTPUT->footer();
