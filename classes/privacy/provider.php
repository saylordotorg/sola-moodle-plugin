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

namespace local_ai_course_assistant\privacy;

use core_privacy\local\metadata\collection;
use core_privacy\local\request\approved_contextlist;
use core_privacy\local\request\approved_userlist;
use core_privacy\local\request\contextlist;
use core_privacy\local\request\userlist;
use core_privacy\local\request\writer;
use local_ai_course_assistant\conversation_manager;
use local_ai_course_assistant\study_planner;
use local_ai_course_assistant\reminder_manager;

/**
 * Privacy API implementation for GDPR compliance.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements
    \core_privacy\local\metadata\provider,
    \core_privacy\local\request\plugin\provider,
    \core_privacy\local\request\core_userlist_provider {

    /**
     * Describe the type of data stored.
     *
     * @param collection $collection
     * @return collection
     */
    public static function get_metadata(collection $collection): collection {
        $collection->add_database_table(
            'local_ai_course_assistant_convs',
            [
                'userid' => 'privacy:metadata:local_ai_course_assistant_convs:userid',
                'courseid' => 'privacy:metadata:local_ai_course_assistant_convs:courseid',
                'title' => 'privacy:metadata:local_ai_course_assistant_convs:title',
                'timecreated' => 'privacy:metadata:local_ai_course_assistant_convs:timecreated',
                'timemodified' => 'privacy:metadata:local_ai_course_assistant_convs:timemodified',
            ],
            'privacy:metadata:local_ai_course_assistant_convs'
        );

        $collection->add_database_table(
            'local_ai_course_assistant_msgs',
            [
                'userid' => 'privacy:metadata:local_ai_course_assistant_msgs:userid',
                'courseid' => 'privacy:metadata:local_ai_course_assistant_msgs:courseid',
                'role' => 'privacy:metadata:local_ai_course_assistant_msgs:role',
                'message' => 'privacy:metadata:local_ai_course_assistant_msgs:message',
                'tokens_used' => 'privacy:metadata:local_ai_course_assistant_msgs:tokens_used',
                'timecreated' => 'privacy:metadata:local_ai_course_assistant_msgs:timecreated',
            ],
            'privacy:metadata:local_ai_course_assistant_msgs'
        );

        $collection->add_database_table(
            'local_ai_course_assistant_plans',
            [
                'userid' => 'privacy:metadata:local_ai_course_assistant_plans:userid',
                'courseid' => 'privacy:metadata:local_ai_course_assistant_plans:courseid',
                'hours_per_week' => 'privacy:metadata:local_ai_course_assistant_plans:hours_per_week',
                'plan_data' => 'privacy:metadata:local_ai_course_assistant_plans:plan_data',
            ],
            'privacy:metadata:local_ai_course_assistant_plans'
        );

        $collection->add_database_table(
            'local_ai_course_assistant_reminders',
            [
                'userid' => 'privacy:metadata:local_ai_course_assistant_reminders:userid',
                'channel' => 'privacy:metadata:local_ai_course_assistant_reminders:channel',
                'destination' => 'privacy:metadata:local_ai_course_assistant_reminders:destination',
                'country_code' => 'privacy:metadata:local_ai_course_assistant_reminders:country_code',
            ],
            'privacy:metadata:local_ai_course_assistant_reminders'
        );

        return $collection;
    }

    /**
     * Get the list of contexts that contain user data.
     *
     * @param int $userid
     * @return contextlist
     */
    public static function get_contexts_for_userid(int $userid): contextlist {
        $contextlist = new contextlist();

        $sql = "SELECT DISTINCT ctx.id
                  FROM {local_ai_course_assistant_convs} c
                  JOIN {context} ctx ON ctx.instanceid = c.courseid AND ctx.contextlevel = :contextlevel
                 WHERE c.userid = :userid";

        $contextlist->add_from_sql($sql, [
            'contextlevel' => CONTEXT_COURSE,
            'userid' => $userid,
        ]);

        // Also include contexts from study plans and reminders.
        $sql = "SELECT DISTINCT ctx.id
                  FROM {local_ai_course_assistant_plans} p
                  JOIN {context} ctx ON ctx.instanceid = p.courseid AND ctx.contextlevel = :contextlevel
                 WHERE p.userid = :userid";
        $contextlist->add_from_sql($sql, [
            'contextlevel' => CONTEXT_COURSE,
            'userid' => $userid,
        ]);

        $sql = "SELECT DISTINCT ctx.id
                  FROM {local_ai_course_assistant_reminders} r
                  JOIN {context} ctx ON ctx.instanceid = r.courseid AND ctx.contextlevel = :contextlevel
                 WHERE r.userid = :userid";
        $contextlist->add_from_sql($sql, [
            'contextlevel' => CONTEXT_COURSE,
            'userid' => $userid,
        ]);

        return $contextlist;
    }

    /**
     * Get the list of users within a specific context.
     *
     * @param userlist $userlist
     */
    public static function get_users_in_context(userlist $userlist): void {
        $context = $userlist->get_context();
        if ($context->contextlevel !== CONTEXT_COURSE) {
            return;
        }

        $sql = "SELECT DISTINCT userid
                  FROM {local_ai_course_assistant_convs}
                 WHERE courseid = :courseid";

        $userlist->add_from_sql('userid', $sql, ['courseid' => $context->instanceid]);
    }

    /**
     * Export user data for approved contexts.
     *
     * @param approved_contextlist $contextlist
     */
    public static function export_user_data(approved_contextlist $contextlist): void {
        global $DB;

        $userid = $contextlist->get_user()->id;

        foreach ($contextlist->get_contexts() as $context) {
            if ($context->contextlevel !== CONTEXT_COURSE) {
                continue;
            }

            $convs = $DB->get_records('local_ai_course_assistant_convs', [
                'userid' => $userid,
                'courseid' => $context->instanceid,
            ]);

            foreach ($convs as $conv) {
                $messages = $DB->get_records('local_ai_course_assistant_msgs', [
                    'conversationid' => $conv->id,
                ], 'timecreated ASC');

                $exportedmessages = [];
                foreach ($messages as $msg) {
                    $exportedmessages[] = [
                        'role' => $msg->role,
                        'message' => $msg->message,
                        'timecreated' => transform::datetime($msg->timecreated),
                    ];
                }

                writer::with_context($context)->export_data(
                    [get_string('pluginname', 'local_ai_course_assistant'), $conv->id],
                    (object) [
                        'title' => $conv->title,
                        'timecreated' => transform::datetime($conv->timecreated),
                        'messages' => $exportedmessages,
                    ]
                );
            }
        }
    }

    /**
     * Delete all data for all users in a context.
     *
     * @param \context $context
     */
    public static function delete_data_for_all_users_in_context(\context $context): void {
        global $DB;
        if ($context->contextlevel !== CONTEXT_COURSE) {
            return;
        }
        conversation_manager::delete_course_data($context->instanceid);
        $DB->delete_records('local_ai_course_assistant_plans', ['courseid' => $context->instanceid]);
        $DB->delete_records('local_ai_course_assistant_reminders', ['courseid' => $context->instanceid]);
    }

    /**
     * Delete data for a specific user in approved contexts.
     *
     * @param approved_contextlist $contextlist
     */
    public static function delete_data_for_user(approved_contextlist $contextlist): void {
        global $DB;

        $userid = $contextlist->get_user()->id;

        foreach ($contextlist->get_contexts() as $context) {
            if ($context->contextlevel !== CONTEXT_COURSE) {
                continue;
            }

            $convs = $DB->get_records('local_ai_course_assistant_convs', [
                'userid' => $userid,
                'courseid' => $context->instanceid,
            ]);

            foreach ($convs as $conv) {
                conversation_manager::clear_conversation($conv->id, $userid);
            }

            $DB->delete_records('local_ai_course_assistant_plans', [
                'userid' => $userid,
                'courseid' => $context->instanceid,
            ]);
            $DB->delete_records('local_ai_course_assistant_reminders', [
                'userid' => $userid,
                'courseid' => $context->instanceid,
            ]);
        }
    }

    /**
     * Delete data for specific users in a context.
     *
     * @param approved_userlist $userlist
     */
    public static function delete_data_for_users(approved_userlist $userlist): void {
        global $DB;

        $context = $userlist->get_context();
        if ($context->contextlevel !== CONTEXT_COURSE) {
            return;
        }

        $userids = $userlist->get_userids();
        foreach ($userids as $userid) {
            $convs = $DB->get_records('local_ai_course_assistant_convs', [
                'userid' => $userid,
                'courseid' => $context->instanceid,
            ]);

            foreach ($convs as $conv) {
                conversation_manager::clear_conversation($conv->id, $userid);
            }
        }
    }
}
