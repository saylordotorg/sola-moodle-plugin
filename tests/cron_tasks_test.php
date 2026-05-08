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
}
