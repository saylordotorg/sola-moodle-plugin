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

namespace local_ai_course_assistant\task;

use local_ai_course_assistant\meta_ai_data_builder;
use local_ai_course_assistant\provider\base_provider;

/**
 * Scheduled task that runs a Meta-AI analytics query and emails
 * the anonymized result to the configured admin address.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class run_meta_ai_query extends \core\task\scheduled_task {

    public function get_name(): string {
        return get_string('task:run_meta_ai_query', 'local_ai_course_assistant');
    }

    public function execute(): void {
        if (!get_config('local_ai_course_assistant', 'metaai_cron_enabled')) {
            mtrace('  Meta-AI cron: disabled, skipping.');
            return;
        }

        $frequency = get_config('local_ai_course_assistant', 'metaai_cron_frequency') ?: 'weekly';
        if (!$this->should_run_today($frequency)) {
            mtrace("  Meta-AI cron: frequency={$frequency}, not scheduled for today, skipping.");
            return;
        }

        $query = get_config('local_ai_course_assistant', 'metaai_cron_query');
        if (empty($query)) {
            mtrace('  Meta-AI cron: no query configured, skipping.');
            return;
        }

        $providerid = get_config('local_ai_course_assistant', 'metaai_cron_provider') ?: '';
        $model = get_config('local_ai_course_assistant', 'metaai_cron_model') ?: '';
        $email = get_config('local_ai_course_assistant', 'metaai_cron_email') ?: '';

        if (empty($email)) {
            $admin = get_admin();
            $email = $admin->email;
        }

        $rangedays = $this->frequency_to_days($frequency);
        $since = time() - ($rangedays * 86400);

        mtrace("  Meta-AI cron: building transcript (last {$rangedays} days)...");
        $systemprompt = meta_ai_data_builder::build_system_prompt(0, $since);

        $messages = [['role' => 'user', 'content' => $query]];

        mtrace("  Meta-AI cron: calling LLM (provider={$providerid}, model={$model})...");
        try {
            global $CFG;
            require_once($CFG->dirroot . '/lib/filelib.php');

            if (!empty($providerid)) {
                $llm = base_provider::create_for_comparison($providerid, $model);
            } else {
                $llm = base_provider::create_from_config(0);
            }

            $response = $llm->chat_completion($systemprompt, $messages);
        } catch (\Throwable $e) {
            mtrace('  Meta-AI cron ERROR: ' . $e->getMessage());
            return;
        }

        mtrace('  Meta-AI cron: sending email to ' . $email . '...');
        $this->send_report($email, $query, $response, $frequency);
        mtrace('  Meta-AI cron: done.');
    }

    private function should_run_today(string $frequency): bool {
        $dow = (int) date('N');
        $dom = (int) date('j');
        switch ($frequency) {
            case 'daily':
                return true;
            case 'weekly':
                return $dow === 1;
            case 'monthly':
                return $dom === 1;
            default:
                return false;
        }
    }

    private function frequency_to_days(string $frequency): int {
        switch ($frequency) {
            case 'daily':   return 1;
            case 'weekly':  return 7;
            case 'monthly': return 30;
            default:        return 7;
        }
    }

    private function send_report(string $email, string $query, string $response, string $frequency): void {
        $admin = get_admin();
        $recipient = \core_user::get_user_by_email($email);
        if (!$recipient) {
            $recipient = $admin;
        }

        $subject = 'SOLA Meta-AI Report (' . ucfirst($frequency) . ')';
        $body = "Meta-AI Analytics Report\n"
            . "========================\n\n"
            . "Frequency: " . ucfirst($frequency) . "\n"
            . "Date: " . userdate(time(), '%Y-%m-%d %H:%M') . "\n"
            . "Query: " . $query . "\n\n"
            . "Response\n"
            . "--------\n\n"
            . $response . "\n\n"
            . "---\n"
            . "All student data in this report is anonymized. Student names have been "
            . "replaced with pseudonyms (e.g., Student 4217). Do not attempt to identify "
            . "real students from this data.\n";

        email_to_user($recipient, $admin, $subject, $body);
    }
}
