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
 * Database upgrade steps for local_ai_course_assistant.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Upgrade the local_ai_course_assistant plugin.
 *
 * @param int $oldversion The old version of the plugin.
 * @return bool
 */
function xmldb_local_ai_course_assistant_upgrade($oldversion) {
    global $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2025011400) {
        // Add offtopic_count to conversations table.
        $table = new xmldb_table('local_ai_course_assistant_convs');
        $field = new xmldb_field('offtopic_count', XMLDB_TYPE_INTEGER, '4', null, XMLDB_NOTNULL, null, '0', 'title');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Add offtopic_locked_until to conversations table.
        $field = new xmldb_field('offtopic_locked_until', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'offtopic_count');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Create study plans table.
        $table = new xmldb_table('local_ai_course_assistant_plans');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('hours_per_week', XMLDB_TYPE_NUMBER, '5, 1', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('plan_data', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('preferred_days', XMLDB_TYPE_CHAR, '100', null, null, null, null);
        $table->add_field('preferred_time', XMLDB_TYPE_CHAR, '20', null, null, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
        $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
        $table->add_index('userid_courseid', XMLDB_INDEX_UNIQUE, ['userid', 'courseid']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Create reminders table.
        $table = new xmldb_table('local_ai_course_assistant_reminders');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('channel', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL, null, null);
        $table->add_field('destination', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, null);
        $table->add_field('country_code', XMLDB_TYPE_CHAR, '2', null, null, null, null);
        $table->add_field('frequency', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL, null, 'daily');
        $table->add_field('enabled', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '1');
        $table->add_field('unsubscribe_token', XMLDB_TYPE_CHAR, '64', null, XMLDB_NOTNULL, null, null);
        $table->add_field('last_sent', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
        $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
        $table->add_index('userid_courseid_channel', XMLDB_INDEX_UNIQUE, ['userid', 'courseid', 'channel']);
        $table->add_index('unsubscribe_token', XMLDB_INDEX_UNIQUE, ['unsubscribe_token']);
        $table->add_index('enabled_lastsent', XMLDB_INDEX_NOTUNIQUE, ['enabled', 'last_sent']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        upgrade_plugin_savepoint(true, 2025011400, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2025011500) {
        // Create audit log table for SOC2 compliance.
        $table = new xmldb_table('local_ai_course_assistant_audit');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('action', XMLDB_TYPE_CHAR, '100', null, XMLDB_NOTNULL, null, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('ipaddress', XMLDB_TYPE_CHAR, '45', null, null, null, null);
        $table->add_field('useragent', XMLDB_TYPE_CHAR, '255', null, null, null, null);
        $table->add_field('details', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
        $table->add_index('action_time', XMLDB_INDEX_NOTUNIQUE, ['action', 'timecreated']);
        $table->add_index('userid_time', XMLDB_INDEX_NOTUNIQUE, ['userid', 'timecreated']);
        $table->add_index('courseid_time', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'timecreated']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        upgrade_plugin_savepoint(true, 2025011500, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2025011600) {
        // Create per-course AI provider configuration table.
        $table = new xmldb_table('local_ai_course_assistant_course_cfg');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('enabled', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('provider', XMLDB_TYPE_CHAR, '20', null, null, null, null);
        $table->add_field('apikey', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('model', XMLDB_TYPE_CHAR, '100', null, null, null, null);
        $table->add_field('apibaseurl', XMLDB_TYPE_CHAR, '255', null, null, null, null);
        $table->add_field('systemprompt', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('temperature', XMLDB_TYPE_NUMBER, '3, 2', null, null, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
        $table->add_index('courseid', XMLDB_INDEX_UNIQUE, ['courseid']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        upgrade_plugin_savepoint(true, 2025011600, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2025011700) {
        // Add 'provider' field to messages table for per-provider analytics.
        $table = new xmldb_table('local_ai_course_assistant_msgs');
        $field = new xmldb_field('provider', XMLDB_TYPE_CHAR, '50', null, null, null, null, 'tokens_used');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Add index on provider for analytics queries.
        $index = new xmldb_index('provider', XMLDB_INDEX_NOTUNIQUE, ['provider']);
        if (!$dbman->index_exists($table, $index)) {
            $dbman->add_index($table, $index);
        }

        upgrade_plugin_savepoint(true, 2025011700, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2025011800) {
        // No schema changes — this version registers the generate_quiz external function.
        upgrade_plugin_savepoint(true, 2025011800, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2025022600) {
        // Create RAG content chunks table.
        $table = new xmldb_table('local_ai_course_assistant_chunks');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('cmid', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table->add_field('modtype', XMLDB_TYPE_CHAR, '30', null, XMLDB_NOTNULL, null, null);
        $table->add_field('chunkindex', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('content', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL, null, null);
        $table->add_field('contenthash', XMLDB_TYPE_CHAR, '40', null, XMLDB_NOTNULL, null, null);
        $table->add_field('embedding', XMLDB_TYPE_TEXT, 'big', null, null, null, null);
        $table->add_field('embed_model', XMLDB_TYPE_CHAR, '100', null, null, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timeindexed', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
        $table->add_index('cmid', XMLDB_INDEX_NOTUNIQUE, ['cmid']);
        $table->add_index('courseid_contenthash', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'contenthash']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        upgrade_plugin_savepoint(true, 2025022600, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026030701) {
        // v1.0.16: JS-only changes (typewriter animation, AudioContext TTS, Quick Study chip).
        // No schema changes needed.
        upgrade_plugin_savepoint(true, 2026030701, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026030800) {
        // v1.0.17: Enhanced Quick Study (objectives/modules sub-select, recent sessions),
        // personalised welcome-back message, progress panel, Settings progress section.
        // No schema changes needed.
        upgrade_plugin_savepoint(true, 2026030800, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026030801) {
        // v1.0.18: Reduce ELL/Practice Speaking latency — remove upfront greeting delays,
        // tighten VAD silence timer (1500ms→750ms) and restart gap (300ms→50ms).
        // No schema changes needed.
        upgrade_plugin_savepoint(true, 2026030801, 'local', 'ai_course_assistant');
    }

    return true;
}
