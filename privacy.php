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
 * Learner-facing privacy notice.
 *
 * Every institution-specific string is resolved from the branding helper,
 * which reads admin config values (`display_name`, `short_name`,
 * `institution_name`, `institution_short_name`, `dpo_email`,
 * `privacy_external_url`). Operators who rebrand the plugin via those
 * config values see the rebrand reflected on this page with no code edit.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use local_ai_course_assistant\branding;

require_login();

$PAGE->set_url('/local/ai_course_assistant/privacy.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_title(branding::display_name() . ' Privacy Notice');
$PAGE->set_heading(branding::display_name() . ' Privacy Notice');

$product     = s(branding::short_name());
$productfull = s(branding::display_name());
$inst        = s(branding::institution_name());
$insts       = s(branding::institution_short_name());
$dpo         = s(branding::dpo_email());
$privacyurl  = s(branding::privacy_external_url());
$today       = date('j F Y');

echo $OUTPUT->header();
?>
<div class="sola-privacy-notice" style="max-width:820px;margin:0 auto;line-height:1.6;padding:0 12px">

<h2><?php echo $productfull; ?> Privacy Notice</h2>
<p><em>Last updated: <?php echo $today; ?>. Version 1.0.</em></p>

<h3>What <?php echo $product; ?> Is</h3>
<p><?php echo $product; ?> is <?php echo $inst; ?>'s AI powered learning coach, built into some courses. When <?php echo $product; ?> is available on a course, you will see a chat widget on the course pages. You can ask <?php echo $product; ?> questions about the material, get practice questions, plan your study schedule, and use voice features if your course has them enabled.</p>
<p><?php echo $product; ?> is not available on every course at <?php echo $inst; ?>. The decision to enable <?php echo $product; ?> on a course is made by the course owner.</p>

<h3>What Information <?php echo $product; ?> Collects</h3>
<p>When you use <?php echo $product; ?> on a course, <?php echo $inst; ?> records your messages, <?php echo $product; ?>'s responses, the course and time of each exchange, ratings and feedback you give, your study plan and reminder preferences if you create them, your chosen avatar, and a short profile summary that <?php echo $product; ?> generates from your conversations to personalize future sessions.</p>
<p><?php echo $product; ?> also collects standard technical data needed to operate the service: your Moodle user id, IP address, browser type, and a timestamp. <?php echo $product; ?> does not collect your full name, email address, home address, phone number (unless you give one for reminders), payment information, or government issued identifiers.</p>

<h3>How Your Information Is Used</h3>
<ol>
    <li>Answer your questions in the moment.</li>
    <li>Personalize <?php echo $product; ?>'s responses to you.</li>
    <li>Improve <?php echo $product; ?> itself, using anonymized and aggregated data.</li>
    <li>Detect and prevent abuse.</li>
    <li>Generate analytics that help course authors improve course materials. Analytics are anonymized before they reach a human reviewer.</li>
</ol>
<p><?php echo $inst; ?> does not sell your information. <?php echo $inst; ?> does not use your <?php echo $product; ?> conversations to market unrelated products to you.</p>

<h3>Who Receives Your Information</h3>
<p>To answer your questions, <?php echo $product; ?> sends your first name, a summary of your chosen course material, the last 10 turns of your current <?php echo $product; ?> conversation, your study plan context (if any), and your profile summary (if any) to the AI model provider configured for the course. <?php echo $product; ?> does not send your last name, email, Moodle user id, address, or other personally identifying information to the AI model provider.</p>
<p><?php echo $inst; ?> uses AI model providers from an Approved AI Vendor List maintained by <?php echo $inst; ?>. Each approved provider has a contract that limits how that provider may use your data and requires them not to train their models on your <?php echo $product; ?> messages.</p>

<h3>How Long <?php echo $product; ?> Keeps Your Information</h3>
<ul>
    <li>Your current conversation is stored for the duration of your course enrollment. Only the most recent 10 turns are ever sent to the AI model.</li>
    <li>Ratings, study plans, and reminders are retained until you remove them or end your course enrollment.</li>
    <li>Anonymized analytics are retained under <?php echo $inst; ?>'s Records Retention Policy and cannot be linked back to you.</li>
    <li>Audit and operational logs are retained up to 365 days.</li>
</ul>
<p>When your <?php echo $inst; ?> user account is deleted, all <?php echo $product; ?> data tied to your user id is deleted within the same operation.</p>

<h3>Your Rights</h3>
<ol>
    <li><strong>Access.</strong> View your current conversation in the widget; download a complete copy of all <?php echo $product; ?> data from the <?php echo $product; ?> user settings page.</li>
    <li><strong>Download.</strong> The user settings page offers a "Download my <?php echo $product; ?> data" button that produces a JSON file.</li>
    <li><strong>Delete.</strong> The same page offers course level and global delete options. Deletion is immediate.</li>
    <li><strong>Correction.</strong> <?php echo $product; ?> conversations are raw transcripts and are not normally amended. If a derived record looks wrong, continue using <?php echo $product; ?> or contact the <?php echo $inst; ?> Data Protection Officer.</li>
    <li><strong>Object or restrict.</strong> You do not have to use <?php echo $product; ?>. You can remove your data at any time.</li>
    <li><strong>Portability.</strong> The download is in a standard JSON format and can be imported into other systems.</li>
    <li><strong>Complaint.</strong> Contact the <?php echo $inst; ?> Data Protection Officer. Learners in the EU, UK, Switzerland, Brazil, or Canada may also complain to their national data protection authority.</li>
</ol>

<h3>International Learners</h3>
<p><?php echo $inst; ?> serves learners globally. If you are based in a region with specific data protection rules (GDPR, UK GDPR, LGPD, PIPEDA, Swiss FADP, CCPA), those rules apply to your <?php echo $product; ?> data. The lawful basis for processing is the performance of the education contract you have with <?php echo $inst; ?>, combined with <?php echo $inst; ?>'s legitimate interest in improving its education services.</p>

<h3>Security</h3>
<p><?php echo $product; ?> runs inside <?php echo $inst; ?>'s Moodle platform, behind your login. Data in transit is encrypted with TLS. Data at rest lives in the Moodle database under <?php echo $inst; ?>'s standard security controls. If a security incident that affects your <?php echo $product; ?> data is detected, <?php echo $inst; ?> will notify you in accordance with the applicable law.</p>

<h3>Children</h3>
<p><?php echo $product; ?> is available only to learners who meet the age requirements of the course they are enrolled in. <?php echo $inst; ?> does not knowingly collect <?php echo $product; ?> data from children under the age of 13.</p>

<h3>Contact</h3>
<ul>
    <?php if ($dpo !== ''): ?>
    <li><?php echo $inst; ?> Data Protection Officer: <a href="mailto:<?php echo $dpo; ?>"><?php echo $dpo; ?></a></li>
    <?php endif; ?>
    <?php if ($privacyurl !== ''): ?>
    <li><?php echo $inst; ?> Privacy Page: <a href="<?php echo $privacyurl; ?>" target="_blank" rel="noopener"><?php echo $privacyurl; ?></a></li>
    <?php endif; ?>
    <li>Within <?php echo $product; ?>: open the widget, click the gear icon, open the Privacy and data section.</li>
</ul>

</div>
<?php
echo $OUTPUT->footer();
