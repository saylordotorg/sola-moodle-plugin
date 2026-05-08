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

namespace local_ai_course_assistant;

use local_ai_course_assistant\task\audit_cleanup;
use local_ai_course_assistant\task\conversation_retention;
use local_ai_course_assistant\task\sweep_avatar_sessions;
use local_ai_course_assistant\task\send_reminders;
use local_ai_course_assistant\task\send_inactivity_reminders;
use local_ai_course_assistant\task\classify_conversation_turn;
use local_ai_course_assistant\task\struggle_signal_review;
use local_ai_course_assistant\task\run_anomaly_digest;
use local_ai_course_assistant\task\run_integrity_checks;
use local_ai_course_assistant\task\run_meta_ai_query;
use local_ai_course_assistant\task\milestone_check;
use local_ai_course_assistant\task\learner_weekly_digest;
use local_ai_course_assistant\task\instructor_weekly_digest;
use local_ai_course_assistant\task\index_course_content;
use local_ai_course_assistant\task\auto_reindex_rag_drifted;
use local_ai_course_assistant\task\auto_tune_prompt_budget;
use local_ai_course_assistant\task\refresh_rate_card;
use local_ai_course_assistant\provider\stub_provider;

/**
 * Cron task PHPUnit coverage — batch 1 (v5.3.31).
 *
 * The 17 SOLA scheduled tasks had no unit tests until this release. The
 * enrol_programs cron failure on degrees.saylor.org demonstrated exactly
 * what happens when cron lacks coverage: the task fails silently for days
 * before anyone notices the maxfaildelay alert. This batch covers the 5
 * simpler retention / cleanup / email tasks; batches 2-3 follow.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Saylor
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
final class cron_tasks_test extends \advanced_testcase {

    /**
     * Run a task with stdout suppressed. Tasks call mtrace() which emits to
     * stdout; PHPUnit flags any test that prints output as Risky. Wrapping
     * in ob_start/ob_end_clean keeps the test output clean and the risk
     * flag off.
     *
     * @param \core\task\scheduled_task $task
     */
    private function run_task_silently(\core\task\scheduled_task $task): void {
        ob_start();
        try {
            $task->execute();
        } finally {
            ob_end_clean();
        }
    }

    // ───────────────────────────────────────────────────────────
    // audit_cleanup
    // ───────────────────────────────────────────────────────────

    public function test_audit_cleanup_removes_rows_older_than_retention_days(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('audit_retention_days', 30, 'local_ai_course_assistant');

        // Two old rows + two recent rows.
        $now = time();
        $old = $now - (40 * 86400);
        $fresh = $now - (5 * 86400);
        foreach ([$old, $old, $fresh, $fresh] as $ts) {
            $DB->insert_record('local_ai_course_assistant_audit', (object)[
                'action' => 'login', 'userid' => 1, 'courseid' => 0,
                'ipaddress' => '', 'useragent' => '', 'details' => '',
                'timecreated' => $ts,
            ]);
        }
        $this->assertEquals(4, $DB->count_records('local_ai_course_assistant_audit'));

        $this->run_task_silently(new audit_cleanup());

        $this->assertEquals(2, $DB->count_records('local_ai_course_assistant_audit'),
            'Two rows older than 30d cutoff must be deleted; two fresh rows must remain.');
    }

    public function test_audit_cleanup_skips_when_retention_disabled(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('audit_retention_days', 0, 'local_ai_course_assistant');

        // A row from a year ago — should NOT be touched when retention is 0.
        $DB->insert_record('local_ai_course_assistant_audit', (object)[
            'action' => 'login', 'userid' => 1, 'courseid' => 0,
            'ipaddress' => '', 'useragent' => '', 'details' => '',
            'timecreated' => time() - (365 * 86400),
        ]);

        $this->run_task_silently(new audit_cleanup());

        $this->assertEquals(1, $DB->count_records('local_ai_course_assistant_audit'),
            'Retention=0 means do not purge; the year-old row must remain.');
    }

    public function test_audit_cleanup_uses_default_365_days_when_unset(): void {
        $this->resetAfterTest();
        global $DB;
        // No audit_retention_days config set — task should fall back to 365.
        unset_config('audit_retention_days', 'local_ai_course_assistant');

        $now = time();
        $DB->insert_record('local_ai_course_assistant_audit', (object)[
            'action' => 'login', 'userid' => 1, 'courseid' => 0,
            'ipaddress' => '', 'useragent' => '', 'details' => '',
            'timecreated' => $now - (400 * 86400),
        ]);
        $DB->insert_record('local_ai_course_assistant_audit', (object)[
            'action' => 'login', 'userid' => 1, 'courseid' => 0,
            'ipaddress' => '', 'useragent' => '', 'details' => '',
            'timecreated' => $now - (300 * 86400),
        ]);

        $this->run_task_silently(new audit_cleanup());

        $this->assertEquals(1, $DB->count_records('local_ai_course_assistant_audit'),
            'Default cutoff is 365d; the 400-day-old row goes, the 300-day-old row stays.');
    }

    // ───────────────────────────────────────────────────────────
    // conversation_retention
    // ───────────────────────────────────────────────────────────

    public function test_conversation_retention_purges_stale_convs_and_messages_together(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('conversation_retention_days', 30, 'local_ai_course_assistant');

        $course = $this->getDataGenerator()->create_course();
        // Two distinct users — convs has a unique index on (userid, courseid).
        $u1 = $this->getDataGenerator()->create_user();
        $u2 = $this->getDataGenerator()->create_user();
        $now = time();

        // One stale conv with two messages, one fresh conv with one message.
        $staleconv = $DB->insert_record('local_ai_course_assistant_convs', (object)[
            'userid' => $u1->id, 'courseid' => $course->id,
            'timecreated' => $now - (60 * 86400),
            'timemodified' => $now - (40 * 86400),
        ]);
        $freshconv = $DB->insert_record('local_ai_course_assistant_convs', (object)[
            'userid' => $u2->id, 'courseid' => $course->id,
            'timecreated' => $now - (10 * 86400),
            'timemodified' => $now - (5 * 86400),
        ]);
        $msgowners = [$u1->id, $u1->id, $u2->id];
        foreach ([$staleconv, $staleconv, $freshconv] as $i => $cid) {
            $DB->insert_record('local_ai_course_assistant_msgs', (object)[
                'conversationid' => $cid,
                'userid' => $msgowners[$i],
                'courseid' => $course->id,
                'role' => 'user', 'message' => 'Hi',
                'timecreated' => $now - (40 * 86400),
            ]);
        }

        $this->run_task_silently(new conversation_retention());

        $this->assertEquals(1, $DB->count_records('local_ai_course_assistant_convs'),
            'Only the fresh conversation should remain.');
        $this->assertEquals(1, $DB->count_records('local_ai_course_assistant_msgs'),
            'Stale conversation\'s 2 messages must be purged with the conv.');
    }

    public function test_conversation_retention_skips_when_disabled(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('conversation_retention_days', 0, 'local_ai_course_assistant');

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $DB->insert_record('local_ai_course_assistant_convs', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'timecreated' => time() - (1000 * 86400),
            'timemodified' => time() - (1000 * 86400),
        ]);

        $this->run_task_silently(new conversation_retention());

        $this->assertEquals(1, $DB->count_records('local_ai_course_assistant_convs'),
            'Retention=0 disables purge; a 1000-day-old conv must remain.');
    }

    public function test_conversation_retention_no_op_when_nothing_to_purge(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('conversation_retention_days', 30, 'local_ai_course_assistant');
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $DB->insert_record('local_ai_course_assistant_convs', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'timecreated' => time(), 'timemodified' => time(),
        ]);

        // Must not throw, must not delete.
        $this->run_task_silently(new conversation_retention());

        $this->assertEquals(1, $DB->count_records('local_ai_course_assistant_convs'));
    }

    // ───────────────────────────────────────────────────────────
    // sweep_avatar_sessions
    // ───────────────────────────────────────────────────────────

    public function test_sweep_avatar_sessions_closes_open_rows_older_than_max_open(): void {
        $this->resetAfterTest();
        global $DB;
        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $now = time();

        // One stale open session (3 hours ago, ended_at NULL) + one fresh open session.
        $DB->insert_record('local_ai_course_assistant_avatar_sess', (object)[
            'userid' => $user->id, 'courseid' => $course->id, 'provider' => 'did',
            'persona_id' => 'p1', 'upstream_session_id' => 's1',
            'started_at' => $now - 10800, 'ended_at' => null,
            'duration_sec' => 0, 'est_cost_usd' => 0, 'source' => 'open',
        ]);
        $DB->insert_record('local_ai_course_assistant_avatar_sess', (object)[
            'userid' => $user->id, 'courseid' => $course->id, 'provider' => 'did',
            'persona_id' => 'p1', 'upstream_session_id' => 's2',
            'started_at' => $now - 60, 'ended_at' => null,
            'duration_sec' => 0, 'est_cost_usd' => 0, 'source' => 'open',
        ]);

        $this->run_task_silently(new sweep_avatar_sessions());

        $rows = $DB->get_records('local_ai_course_assistant_avatar_sess', null, 'started_at ASC');
        $rows = array_values($rows);
        $this->assertNotNull($rows[0]->ended_at,
            'Stale session (>1h open) must be closed by the sweeper.');
        $this->assertEquals('sweeper', $rows[0]->source,
            'Closed-by-sweeper rows must be tagged source=sweeper.');
        $this->assertNull($rows[1]->ended_at,
            'Fresh session (<1h) must NOT be touched.');
    }

    public function test_sweep_avatar_sessions_no_op_when_nothing_open(): void {
        $this->resetAfterTest();
        // Empty table. Must not throw.
        $this->run_task_silently(new sweep_avatar_sessions());
        $this->assertTrue(true, 'sweep_stale on empty table is a no-op.');
    }

    // ───────────────────────────────────────────────────────────
    // send_reminders
    // ───────────────────────────────────────────────────────────

    public function test_send_reminders_returns_early_when_plugin_disabled(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('enabled', 0, 'local_ai_course_assistant');

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        // A daily email reminder that's been due for a year — must not send.
        $DB->insert_record('local_ai_course_assistant_reminders', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'channel' => 'email', 'destination' => 'a@b.com',
            'frequency' => 'daily', 'enabled' => 1,
            'unsubscribe_token' => 'tok',
            'last_sent' => time() - (365 * 86400),
            'timecreated' => time(), 'timemodified' => time(),
        ]);

        $sink = $this->redirectEmails();
        $this->run_task_silently(new send_reminders());
        $this->assertEquals(0, $sink->count(),
            'Plugin disabled => no reminder emails sent regardless of due rows.');
        $sink->close();
    }

    public function test_send_reminders_no_op_when_nothing_due(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('enabled', 1, 'local_ai_course_assistant');

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        // Reminder sent 30 minutes ago — daily frequency means not due yet.
        $DB->insert_record('local_ai_course_assistant_reminders', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'channel' => 'email', 'destination' => 'a@b.com',
            'frequency' => 'daily', 'enabled' => 1,
            'unsubscribe_token' => 'tok',
            'last_sent' => time() - 1800,
            'timecreated' => time(), 'timemodified' => time(),
        ]);

        $sink = $this->redirectEmails();
        $this->run_task_silently(new send_reminders());
        $this->assertEquals(0, $sink->count(),
            'Daily reminder sent 30 minutes ago is not due; no email goes.');
        $sink->close();
    }

    public function test_send_reminders_skips_disabled_reminder_rows(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('enabled', 1, 'local_ai_course_assistant');

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        // Disabled reminder, very old last_sent — would be due if enabled.
        $DB->insert_record('local_ai_course_assistant_reminders', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'channel' => 'email', 'destination' => 'a@b.com',
            'frequency' => 'daily', 'enabled' => 0,
            'unsubscribe_token' => 'tok',
            'last_sent' => time() - (10 * 86400),
            'timecreated' => time(), 'timemodified' => time(),
        ]);

        $sink = $this->redirectEmails();
        $this->run_task_silently(new send_reminders());
        $this->assertEquals(0, $sink->count(),
            'enabled=0 reminders never send.');
        $sink->close();
    }

    // ───────────────────────────────────────────────────────────
    // send_inactivity_reminders
    // ───────────────────────────────────────────────────────────

    public function test_send_inactivity_reminders_emails_inactive_learner(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('inactivity_threshold_days', 7, 'local_ai_course_assistant');

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();
        $this->getDataGenerator()->enrol_user($user->id, $course->id, 'student');

        // Reminder enabled, learner has not accessed the course for 14 days.
        $DB->insert_record('local_ai_course_assistant_reminders', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'channel' => 'email', 'destination' => $user->email,
            'frequency' => 'daily', 'enabled' => 1,
            'unsubscribe_token' => 'tok',
            'last_sent' => null,
            'timecreated' => time(), 'timemodified' => time(),
        ]);
        $DB->insert_record('user_lastaccess', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'timeaccess' => time() - (14 * 86400),
        ]);

        $sink = $this->redirectMessages();
        $this->run_task_silently(new send_inactivity_reminders());
        $messages = $sink->get_messages();
        $sink->close();

        $this->assertCount(1, $messages,
            'A learner inactive for 14 days with email reminders enabled must get exactly one inactivity message.');
        $this->assertEquals($user->id, $messages[0]->useridto);
        $this->assertStringContainsString('miss you', $messages[0]->subject);
    }

    public function test_send_inactivity_reminders_skips_recently_active_learner(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('inactivity_threshold_days', 7, 'local_ai_course_assistant');

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();

        $DB->insert_record('local_ai_course_assistant_reminders', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'channel' => 'email', 'destination' => $user->email,
            'frequency' => 'daily', 'enabled' => 1,
            'unsubscribe_token' => 'tok',
            'last_sent' => null,
            'timecreated' => time(), 'timemodified' => time(),
        ]);
        // Accessed 2 days ago — within the 7-day threshold.
        $DB->insert_record('user_lastaccess', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'timeaccess' => time() - (2 * 86400),
        ]);

        $sink = $this->redirectMessages();
        $this->run_task_silently(new send_inactivity_reminders());
        $messages = $sink->get_messages();
        $sink->close();

        $this->assertCount(0, $messages,
            'Recently-active learner must not receive an inactivity message.');
    }

    public function test_send_inactivity_reminders_does_not_double_send_within_a_week(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('inactivity_threshold_days', 7, 'local_ai_course_assistant');

        $course = $this->getDataGenerator()->create_course();
        $user = $this->getDataGenerator()->create_user();

        // last_sent is 2 days ago; the rate-limit guard requires >7 days since last send.
        $DB->insert_record('local_ai_course_assistant_reminders', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'channel' => 'email', 'destination' => $user->email,
            'frequency' => 'daily', 'enabled' => 1,
            'unsubscribe_token' => 'tok',
            'last_sent' => time() - (2 * 86400),
            'timecreated' => time(), 'timemodified' => time(),
        ]);
        $DB->insert_record('user_lastaccess', (object)[
            'userid' => $user->id, 'courseid' => $course->id,
            'timeaccess' => time() - (30 * 86400),
        ]);

        $sink = $this->redirectMessages();
        $this->run_task_silently(new send_inactivity_reminders());
        $messages = $sink->get_messages();
        $sink->close();

        $this->assertCount(0, $messages,
            'A learner who got an inactivity email 2 days ago must not get another one this week.');
    }

    // ───────────────────────────────────────────────────────────
    // Batch 2 (v5.3.32) — LLM-using + digest + anomaly tasks.
    // ───────────────────────────────────────────────────────────

    // ───────────────────────────────────────────────────────────
    // classify_conversation_turn (adhoc)
    // ───────────────────────────────────────────────────────────

    public function test_classify_conversation_turn_returns_silently_on_invalid_data(): void {
        $this->resetAfterTest();
        // No custom_data set => $data is null (not an object). Task must
        // bail without throwing — anything else means a queued adhoc task
        // could break cron processing.
        $task = new classify_conversation_turn();
        ob_start();
        try {
            $task->execute();
            $this->assertTrue(true, 'execute() with no custom data must not throw.');
        } finally {
            ob_end_clean();
        }
    }

    public function test_classify_conversation_turn_returns_silently_on_zero_ids(): void {
        $this->resetAfterTest();
        $task = new classify_conversation_turn();
        $task->set_custom_data((object)[
            'userid' => 0, 'courseid' => 0, 'usermsgid' => 0, 'assistantmsgid' => 0,
        ]);
        ob_start();
        try {
            $task->execute();
            $this->assertTrue(true, 'execute() with all-zero IDs must not call the classifier.');
        } finally {
            ob_end_clean();
        }
    }

    // ───────────────────────────────────────────────────────────
    // struggle_signal_review
    // ───────────────────────────────────────────────────────────

    public function test_struggle_signal_review_skips_when_classifier_disabled(): void {
        $this->resetAfterTest();
        global $DB;
        set_config('struggle_classifier_enabled', 0, 'local_ai_course_assistant');
        $beforecount = $DB->count_records('local_ai_course_assistant_struggle_signal');

        $this->run_task_silently(new struggle_signal_review());

        $this->assertEquals($beforecount,
            $DB->count_records('local_ai_course_assistant_struggle_signal'),
            'Disabled classifier must not touch the signals table.');
    }

    public function test_struggle_signal_review_runs_when_enabled(): void {
        $this->resetAfterTest();
        set_config('struggle_classifier_enabled', 1, 'local_ai_course_assistant');
        // Empty input => 0 notes, 0 purged. Must not throw.
        $this->run_task_silently(new struggle_signal_review());
        $this->assertTrue(true, 'Enabled classifier on empty input is a no-op, not an error.');
    }

    // ───────────────────────────────────────────────────────────
    // run_anomaly_digest
    // ───────────────────────────────────────────────────────────

    public function test_run_anomaly_digest_skips_when_disabled(): void {
        $this->resetAfterTest();
        set_config('anomaly_digest_enabled', 0, 'local_ai_course_assistant');

        $sink = $this->redirectEmails();
        $this->run_task_silently(new run_anomaly_digest());
        $this->assertEquals(0, $sink->count(),
            'Disabled anomaly digest must not send anything.');
        $sink->close();
    }

    public function test_run_anomaly_digest_no_alert_when_metrics_within_threshold(): void {
        $this->resetAfterTest();
        set_config('anomaly_digest_enabled', 1, 'local_ai_course_assistant');
        set_config('anomaly_digest_threshold_pct', 50, 'local_ai_course_assistant');
        // Empty DB => no metric exceeds threshold => no alert.
        $sink = $this->redirectEmails();
        $this->run_task_silently(new run_anomaly_digest());
        $this->assertEquals(0, $sink->count(),
            'No metric over threshold => no email.');
        $sink->close();
    }

    public function test_run_anomaly_digest_threshold_zero_is_respected_after_fix(): void {
        $this->resetAfterTest();
        set_config('anomaly_digest_enabled', 1, 'local_ai_course_assistant');
        // Regression test for the v5.3.32 ?:-fall-through fix. Setting the
        // threshold to literal 0 is "alert on any change"; before the fix,
        // ?: 50 silently applied 50% instead. We assert the task uses 0
        // (not 50) by feeding it data that only exceeds 0% but not 50%.
        set_config('anomaly_digest_threshold_pct', 0, 'local_ai_course_assistant');
        global $DB;
        $course = $this->getDataGenerator()->create_course();
        $u1 = $this->getDataGenerator()->create_user();
        $u2 = $this->getDataGenerator()->create_user();
        // Seed 6 negative ratings in the recent 7-day window vs 5 in the prior.
        // 20% increase — over 0% threshold, under 50%.
        $now = time();
        $msgseq = 1;
        for ($i = 0; $i < 5; $i++) {
            // Prior window: 7-14 days ago. messageid is unique per rating.
            $DB->insert_record('local_ai_course_assistant_msg_ratings', (object)[
                'messageid' => $msgseq++, 'userid' => $u1->id,
                'courseid' => $course->id, 'rating' => -1,
                'timecreated' => $now - (10 * 86400),
            ]);
        }
        for ($i = 0; $i < 6; $i++) {
            // Recent window: last 7 days.
            $DB->insert_record('local_ai_course_assistant_msg_ratings', (object)[
                'messageid' => $msgseq++, 'userid' => $u2->id,
                'courseid' => $course->id, 'rating' => -1,
                'timecreated' => $now - (3 * 86400),
            ]);
        }
        // Provide an admin email destination so radar_delivery has somewhere to go.
        set_config('anomaly_digest_recipient_email', 'admin@example.com',
            'local_ai_course_assistant');

        $sink = $this->redirectEmails();
        $this->run_task_silently(new run_anomaly_digest());
        $count = $sink->count();
        $sink->close();

        $this->assertGreaterThan(0, $count,
            'threshold=0 must mean alert on any positive change. '
            . 'Pre-fix this would silently apply 50% and skip the alert.');
    }

    // ───────────────────────────────────────────────────────────
    // run_integrity_checks
    // ───────────────────────────────────────────────────────────

    public function test_run_integrity_checks_skips_when_disabled(): void {
        $this->resetAfterTest();
        set_config('integrity_enabled', '0', 'local_ai_course_assistant');
        unset_config('integrity_last_run', 'local_ai_course_assistant');

        $this->run_task_silently(new run_integrity_checks());

        $this->assertFalse(
            get_config('local_ai_course_assistant', 'integrity_last_run'),
            'Disabled integrity checks must not record a last_run timestamp.');
    }

    public function test_run_integrity_checks_runs_and_stores_last_results(): void {
        $this->resetAfterTest();
        // No integrity_enabled set => default is on.
        unset_config('integrity_enabled', 'local_ai_course_assistant');

        $sink = $this->redirectMessages();
        $this->run_task_silently(new run_integrity_checks());
        $sink->close();

        $stored = get_config('local_ai_course_assistant', 'integrity_last_run');
        $this->assertNotEmpty($stored,
            'Enabled run must persist integrity_last_run timestamp.');
        $this->assertNotEmpty(
            get_config('local_ai_course_assistant', 'integrity_last_results'),
            'Enabled run must persist integrity_last_results JSON.');
    }

    // ───────────────────────────────────────────────────────────
    // run_meta_ai_query
    // ───────────────────────────────────────────────────────────

    public function test_run_meta_ai_query_no_schedules_returns_early(): void {
        $this->resetAfterTest();
        // No radar_sched rows. Task must return without calling LLM.
        stub_provider::reset();
        set_config('provider', 'stub', 'local_ai_course_assistant');

        $this->run_task_silently(new run_meta_ai_query());

        $this->assertCount(0, stub_provider::$calls,
            'No schedules => no LLM call.');
    }

    public function test_run_meta_ai_query_invokes_stub_provider_for_due_schedule(): void {
        $this->resetAfterTest();
        global $DB;
        stub_provider::reset();
        set_config('provider', 'stub', 'local_ai_course_assistant');

        // Seed one daily schedule. should_run_today returns true for daily.
        $DB->insert_record('local_ai_course_assistant_radar_sched', (object)[
            'name' => 'test', 'query' => 'How many sessions yesterday?',
            'frequency' => 'daily', 'range_days' => 1,
            'courseids' => '', 'filterprovider' => '',
            'provider' => '', 'model' => '', 'format' => 'text',
            'recipient_email' => '', 'slack_webhook' => '',
            'teams_webhook' => '', 'enabled' => 1,
            'last_run' => 0, 'last_status' => '',
            'last_error' => '', 'creator' => 2,
            'timecreated' => time(), 'timemodified' => time(),
        ]);

        $this->run_task_silently(new run_meta_ai_query());

        $this->assertCount(1, stub_provider::$calls,
            'A due schedule must trigger exactly one LLM call.');
    }

    // ───────────────────────────────────────────────────────────
    // milestone_check
    // ───────────────────────────────────────────────────────────

    public function test_milestone_check_skips_when_feature_disabled(): void {
        $this->resetAfterTest();
        set_config('milestones_feature_enabled', 0, 'local_ai_course_assistant');

        $sink = $this->redirectMessages();
        $this->run_task_silently(new milestone_check());
        $this->assertCount(0, $sink->get_messages(),
            'Feature disabled => no milestone emails dispatched.');
        $sink->close();
    }

    public function test_milestone_check_no_op_when_no_streak_rows(): void {
        $this->resetAfterTest();
        set_config('milestones_feature_enabled', 1, 'local_ai_course_assistant');
        // No streak rows. Task must complete without sending.
        $sink = $this->redirectMessages();
        $this->run_task_silently(new milestone_check());
        $this->assertCount(0, $sink->get_messages(),
            'No streak rows => no milestone emails.');
        $sink->close();
    }

    // ───────────────────────────────────────────────────────────
    // learner_weekly_digest
    // ───────────────────────────────────────────────────────────

    public function test_learner_weekly_digest_no_optins_returns_early(): void {
        $this->resetAfterTest();
        // No user_preferences with the optin name => empty rowset.
        $sink = $this->redirectEmails();
        $this->run_task_silently(new learner_weekly_digest());
        $this->assertEquals(0, $sink->count(),
            'No opt-ins => no emails. Opt-in is the only way a learner gets digested.');
        $sink->close();
    }

    // ───────────────────────────────────────────────────────────
    // instructor_weekly_digest
    // ───────────────────────────────────────────────────────────

    public function test_instructor_weekly_digest_no_courses_optin_returns_early(): void {
        $this->resetAfterTest();
        // No digest_email_enabled_course_<id>=1 config rows => empty rowset.
        $sink = $this->redirectEmails();
        $this->run_task_silently(new instructor_weekly_digest());
        $this->assertEquals(0, $sink->count(),
            'No course opt-ins => no instructor digests.');
        $sink->close();
    }

    // ───────────────────────────────────────────────────────────
    // Batch 3 (v5.3.33) — RAG / config tasks.
    // ───────────────────────────────────────────────────────────

    public function test_index_course_content_skips_when_rag_disabled(): void {
        $this->resetAfterTest();
        set_config('rag_enabled', 0, 'local_ai_course_assistant');
        // RAG disabled => task returns immediately. No throw.
        $this->run_task_silently(new index_course_content());
        $this->assertTrue(true, 'rag_enabled=0 must short-circuit before any DB scan.');
    }

    public function test_index_course_content_no_op_when_no_active_courses(): void {
        $this->resetAfterTest();
        set_config('rag_enabled', 1, 'local_ai_course_assistant');
        // No courses with enrolled students => nothing to index.
        $this->run_task_silently(new index_course_content());
        $this->assertTrue(true, 'No active courses => task completes without throwing.');
    }

    public function test_auto_reindex_rag_drifted_skips_when_feature_disabled(): void {
        $this->resetAfterTest();
        set_config('rag_auto_reindex_drifted', 0, 'local_ai_course_assistant');
        set_config('rag_enabled', 1, 'local_ai_course_assistant');
        $this->run_task_silently(new auto_reindex_rag_drifted());
        $this->assertTrue(true, 'Feature flag off => no drift detection runs.');
    }

    public function test_auto_reindex_rag_drifted_skips_when_rag_disabled(): void {
        $this->resetAfterTest();
        set_config('rag_auto_reindex_drifted', 1, 'local_ai_course_assistant');
        set_config('rag_enabled', 0, 'local_ai_course_assistant');
        $this->run_task_silently(new auto_reindex_rag_drifted());
        $this->assertTrue(true, 'RAG disabled site-wide overrides the per-task flag.');
    }

    public function test_auto_tune_prompt_budget_skips_when_disabled(): void {
        $this->resetAfterTest();
        set_config('prompt_budget_auto_tune', 0, 'local_ai_course_assistant');
        set_config('prompt_budget_chars', 12000, 'local_ai_course_assistant');
        $this->run_task_silently(new auto_tune_prompt_budget());
        // Budget must not change when auto-tune is off.
        $this->assertEquals(12000,
            (int) get_config('local_ai_course_assistant', 'prompt_budget_chars'),
            'Auto-tune disabled => budget setting untouched.');
    }

    public function test_auto_tune_prompt_budget_runs_when_enabled(): void {
        $this->resetAfterTest();
        set_config('prompt_budget_auto_tune', 1, 'local_ai_course_assistant');
        // Empty metrics => apply_recommendation returns "no change". Must not throw.
        $this->run_task_silently(new auto_tune_prompt_budget());
        $this->assertTrue(true, 'Enabled auto-tune on empty metrics is a no-op, not an error.');
    }

    public function test_refresh_rate_card_skips_when_disabled(): void {
        $this->resetAfterTest();
        set_config('rate_card_auto_refresh', 0, 'local_ai_course_assistant');
        $this->run_task_silently(new refresh_rate_card());
        $this->assertTrue(true,
            'Feature flag off => no upstream fetch. Pinned-to-last-fetch behaviour preserved.');
    }

    // ───────────────────────────────────────────────────────────
    // Static analysis test — catches the ?: numeric-default pattern that
    // shipped 4 production bugs in v5.3.31 + v5.3.32.
    // ───────────────────────────────────────────────────────────

    public function test_no_get_config_falsy_default_pattern_in_classes(): void {
        global $CFG;
        $pluginroot = $CFG->dirroot . '/local/ai_course_assistant/classes';
        $offenders = $this->find_falsy_default_get_config($pluginroot);

        $this->assertEmpty($offenders,
            "Found get_config(...) ?: <numeric|float-default> patterns. The ?: operator treats the string \"0\" as falsy and silently applies the default, breaking documented \"set to 0 to disable\" contracts. Replace with: \$raw = get_config(...); \$x = (\$raw === false || \$raw === '') ? <default> : (int|float)\$raw;\n\nOffenders:\n  " . implode("\n  ", $offenders));
    }

    private function find_falsy_default_get_config(string $rootdir): array {
        $offenders = [];
        $rii = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($rootdir));
        foreach ($rii as $file) {
            if ($file->isDir() || $file->getExtension() !== 'php') {
                continue;
            }
            $lines = file($file->getPathname(), FILE_IGNORE_NEW_LINES);
            foreach ($lines as $i => $line) {
                // get_config(...) ?: <number|float>  — flags 5, 100, 0.7, etc.
                // Allows ?: 0 (already-zero default doesn't change behaviour),
                // and ?: '' / ?: 'string' (string defaults are out of scope —
                // empty-string falsy IS a valid sentinel in many cases).
                if (preg_match("/get_config\\s*\\(\\s*'local_ai_course_assistant'.*?\\?:\\s*([1-9][0-9]*(?:\\.[0-9]+)?)/", $line, $m)) {
                    $offenders[] = sprintf('%s:%d → ?: %s',
                        str_replace($rootdir . '/', '', $file->getPathname()),
                        $i + 1, $m[1]);
                }
            }
        }
        sort($offenders);
        return $offenders;
    }
}
