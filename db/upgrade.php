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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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

    // Note: versions 2026030701 through 2026030805 had no schema changes
    // and do not need savepoints. Moodle handles version bumps without them.

    if ($oldversion < 2026030900) {
        // v1.1.0: Token usage tracking and cost estimation.
        // Add prompt_tokens, completion_tokens, model_name to the messages table.
        $table = new xmldb_table('local_ai_course_assistant_msgs');

        $field = new xmldb_field('prompt_tokens', XMLDB_TYPE_INTEGER, '10', null, false, null, null, 'tokens_used');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('completion_tokens', XMLDB_TYPE_INTEGER, '10', null, false, null, null, 'prompt_tokens');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('model_name', XMLDB_TYPE_CHAR, '100', null, false, null, null, 'completion_tokens');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        upgrade_plugin_savepoint(true, 2026030900, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026030905) {
        // Create feedback table.
        $table = new xmldb_table('local_ai_course_assistant_feedback');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('rating', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, null);
        $table->add_field('comment', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('browser', XMLDB_TYPE_CHAR, '100', null, null, null, null);
        $table->add_field('os', XMLDB_TYPE_CHAR, '100', null, null, null, null);
        $table->add_field('device', XMLDB_TYPE_CHAR, '50', null, null, null, null);
        $table->add_field('screen_size', XMLDB_TYPE_CHAR, '20', null, null, null, null);
        $table->add_field('user_agent', XMLDB_TYPE_CHAR, '500', null, null, null, null);
        $table->add_field('page_url', XMLDB_TYPE_CHAR, '500', null, null, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
        $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
        $table->add_index('courseid_time', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'timecreated']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        upgrade_plugin_savepoint(true, 2026030905, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026031200) {
        // Create surveys table.
        $table = new xmldb_table('local_ai_course_assistant_surveys');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('title', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, null);
        $table->add_field('questions', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL, null, null);
        $table->add_field('active', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '1');
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_index('courseid_active', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'active']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Create survey responses table.
        $table = new xmldb_table('local_ai_course_assistant_survey_resp');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('surveyid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('question_index', XMLDB_TYPE_INTEGER, '4', null, XMLDB_NOTNULL, null, null);
        $table->add_field('answer', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('surveyid_fk', XMLDB_KEY_FOREIGN, ['surveyid'], 'local_ai_course_assistant_surveys', ['id']);
        $table->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
        $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
        $table->add_index('surveyid_userid_courseid', XMLDB_INDEX_NOTUNIQUE, ['surveyid', 'userid', 'courseid']);
        $table->add_index('courseid_time', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'timecreated']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Seed the default global survey.
        if (!$DB->record_exists('local_ai_course_assistant_surveys', ['courseid' => 0])) {
            $now = time();
            $DB->insert_record('local_ai_course_assistant_surveys', (object) [
                'courseid' => 0,
                'title' => 'AI Tutor Experience Survey',
                'questions' => json_encode([
                    ['type' => 'multiple_choice', 'text' => 'How often did you use the AI tutor in this course?',
                     'options' => ['Daily', 'Several times per week', 'Once per week', 'Less than once per week', 'Never']],
                    ['type' => 'long_text', 'text' => 'How did interacting with the AI tutor impact your motivation or confidence in completing the course?'],
                    ['type' => 'long_text', 'text' => 'How did the AI tutor help you understand difficult ideas or lessons better?'],
                    ['type' => 'long_text', 'text' => 'Was the AI tutor a helpful part of your learning? Do you have any ideas to make it more useful or more trustworthy?'],
                    ['type' => 'rating', 'text' => 'Overall, how happy were you with the AI tutor?', 'min' => 1, 'max' => 5],
                ]),
                'active' => 1,
                'timecreated' => $now,
                'timemodified' => $now,
            ]);
        }

        upgrade_plugin_savepoint(true, 2026031200, 'local', 'ai_course_assistant');
    }

    // v3.0.2: Update default survey rating question to include scale labels.
    if ($oldversion < 2026031202) {
        $surveys = $DB->get_records('local_ai_course_assistant_surveys');
        foreach ($surveys as $survey) {
            $questions = json_decode($survey->questions, true);
            if (!is_array($questions)) {
                continue;
            }
            $changed = false;
            foreach ($questions as &$q) {
                if (($q['type'] ?? '') === 'rating' && strpos($q['text'], '1 = ') === false) {
                    $q['text'] = $q['text'] . ' (1 = not at all, 5 = very happy)';
                    $q['min_label'] = 'Not at all';
                    $q['max_label'] = 'Very happy';
                    $changed = true;
                }
            }
            unset($q);
            if ($changed) {
                $DB->set_field('local_ai_course_assistant_surveys', 'questions',
                    json_encode($questions), ['id' => $survey->id]);
            }
        }
        upgrade_plugin_savepoint(true, 2026031202, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026031204) {
        // Create user testing task sets table.
        $table = new xmldb_table('local_ai_course_assistant_ut_tasks');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('title', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, null);
        $table->add_field('tasks', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL, null, null);
        $table->add_field('external_url', XMLDB_TYPE_CHAR, '500', null, null, null, null);
        $table->add_field('active', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '1');
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_index('courseid_active', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'active']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Create user testing responses table.
        $table = new xmldb_table('local_ai_course_assistant_ut_resp');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('tasksetid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('task_index', XMLDB_TYPE_INTEGER, '4', null, XMLDB_NOTNULL, null, null);
        $table->add_field('rating', XMLDB_TYPE_INTEGER, '2', null, null, null, null);
        $table->add_field('answer', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('message_count', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('session_minutes', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('tasksetid_fk', XMLDB_KEY_FOREIGN, ['tasksetid'], 'local_ai_course_assistant_ut_tasks', ['id']);
        $table->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
        $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
        $table->add_index('tasksetid_userid_courseid', XMLDB_INDEX_NOTUNIQUE, ['tasksetid', 'userid', 'courseid']);
        $table->add_index('courseid_time', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'timecreated']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Seed the default global task set.
        if (!$DB->record_exists('local_ai_course_assistant_ut_tasks', ['courseid' => 0])) {
            $now = time();
            $DB->insert_record('local_ai_course_assistant_ut_tasks', (object) [
                'courseid' => 0,
                'title' => 'SOLA Usability Test',
                'tasks' => json_encode(\local_ai_course_assistant\usertesting_manager::DEFAULT_TASKS),
                'external_url' => '',
                'active' => 1,
                'timecreated' => $now,
                'timemodified' => $now,
            ]);
        }

        upgrade_plugin_savepoint(true, 2026031204, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026031712) {
        $dbman = $DB->get_manager();

        // Create rubrics table.
        $table = new xmldb_table('local_ai_course_assistant_rubrics');
        if (!$dbman->table_exists($table)) {
            $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
            $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('type', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL);
            $table->add_field('title', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL);
            $table->add_field('criteria', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
            $table->add_field('active', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '1');
            $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
            $table->add_index('courseid_type_active', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'type', 'active']);
            $dbman->create_table($table);
        }

        // Create practice_scores table.
        $table = new xmldb_table('local_ai_course_assistant_practice_scores');
        if (!$dbman->table_exists($table)) {
            $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
            $table->add_field('rubricid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('session_type', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL);
            $table->add_field('scores', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
            $table->add_field('overall_score', XMLDB_TYPE_INTEGER, '3', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('ai_feedback', XMLDB_TYPE_TEXT);
            $table->add_field('session_duration', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
            $table->add_key('rubricid_fk', XMLDB_KEY_FOREIGN, ['rubricid'], 'local_ai_course_assistant_rubrics', ['id']);
            $table->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
            $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
            $table->add_index('userid_courseid_type', XMLDB_INDEX_NOTUNIQUE, ['userid', 'courseid', 'session_type']);
            $table->add_index('courseid_time', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'timecreated']);
            $dbman->create_table($table);
        }

        // Seed default rubrics.
        $now = time();
        if (!$DB->record_exists('local_ai_course_assistant_rubrics', ['courseid' => 0, 'type' => 'conversation'])) {
            $DB->insert_record('local_ai_course_assistant_rubrics', (object) [
                'courseid' => 0, 'type' => 'conversation',
                'title' => 'Conversation Practice Rubric',
                'criteria' => json_encode(\local_ai_course_assistant\rubric_manager::DEFAULT_CONVERSATION_CRITERIA),
                'active' => 1, 'timecreated' => $now, 'timemodified' => $now,
            ]);
        }
        if (!$DB->record_exists('local_ai_course_assistant_rubrics', ['courseid' => 0, 'type' => 'pronunciation'])) {
            $DB->insert_record('local_ai_course_assistant_rubrics', (object) [
                'courseid' => 0, 'type' => 'pronunciation',
                'title' => 'Pronunciation Practice Rubric',
                'criteria' => json_encode(\local_ai_course_assistant\rubric_manager::DEFAULT_PRONUNCIATION_CRITERIA),
                'active' => 1, 'timecreated' => $now, 'timemodified' => $now,
            ]);
        }

        upgrade_plugin_savepoint(true, 2026031712, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026031713) {
        $dbman = $DB->get_manager();

        // Fix embedding field type on chunks table (longtext → text).
        $table = new xmldb_table('local_ai_course_assistant_chunks');
        if ($dbman->table_exists($table)) {
            $field = new xmldb_field('embedding', XMLDB_TYPE_TEXT, null, null, null, null, null, 'contenthash');
            if ($dbman->field_exists($table, $field)) {
                $dbman->change_field_type($table, $field);
            }
        }

        // Make userid_courseid index unique on convs table to prevent race condition duplicates.
        $table = new xmldb_table('local_ai_course_assistant_convs');
        $index = new xmldb_index('userid_courseid', XMLDB_INDEX_NOTUNIQUE, ['userid', 'courseid']);
        if ($dbman->index_exists($table, $index)) {
            // Remove duplicates before making index unique — keep the oldest conversation per user+course.
            $dupes = $DB->get_records_sql(
                "SELECT MIN(id) AS keepid, userid, courseid
                   FROM {local_ai_course_assistant_convs}
               GROUP BY userid, courseid
                 HAVING COUNT(*) > 1"
            );
            foreach ($dupes as $dupe) {
                // Move orphaned messages from duplicate conversations to the kept one.
                $dupconvids = $DB->get_fieldset_select(
                    'local_ai_course_assistant_convs',
                    'id',
                    'userid = ? AND courseid = ? AND id > ?',
                    [$dupe->userid, $dupe->courseid, $dupe->keepid]
                );
                if (!empty($dupconvids)) {
                    list($insql, $inparams) = $DB->get_in_or_equal($dupconvids);
                    $DB->execute(
                        "UPDATE {local_ai_course_assistant_msgs} SET conversationid = ? WHERE conversationid $insql",
                        array_merge([$dupe->keepid], $inparams)
                    );
                }
                $DB->delete_records_select(
                    'local_ai_course_assistant_convs',
                    'userid = ? AND courseid = ? AND id > ?',
                    [$dupe->userid, $dupe->courseid, $dupe->keepid]
                );
            }
            $dbman->drop_index($table, $index);
        }
        $index = new xmldb_index('userid_courseid', XMLDB_INDEX_UNIQUE, ['userid', 'courseid']);
        if (!$dbman->index_exists($table, $index)) {
            $dbman->add_index($table, $index);
        }

        upgrade_plugin_savepoint(true, 2026031713, 'local', 'ai_course_assistant');
    }

    // v3.4.0: Analytics expansion — new columns on msgs, new tables for ratings and keywords.
    if ($oldversion < 2026033001) {
        // Add interaction_type column to msgs table.
        $table = new xmldb_table('local_ai_course_assistant_msgs');
        $field = new xmldb_field('interaction_type', XMLDB_TYPE_CHAR, '20', null, null, null, 'chat', 'provider');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Add cmid column to msgs table.
        $field = new xmldb_field('cmid', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'interaction_type');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Add indexes for analytics queries.
        $index = new xmldb_index('courseid_interaction_type', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'interaction_type']);
        if (!$dbman->index_exists($table, $index)) {
            $dbman->add_index($table, $index);
        }
        $index = new xmldb_index('courseid_cmid', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'cmid']);
        if (!$dbman->index_exists($table, $index)) {
            $dbman->add_index($table, $index);
        }

        // Create msg_ratings table (per-message thumbs up/down + hallucination flags).
        $table = new xmldb_table('local_ai_course_assistant_msg_ratings');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('messageid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('rating', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, null);
        $table->add_field('is_hallucination', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('comment', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('messageid_fk', XMLDB_KEY_FOREIGN_UNIQUE, ['messageid'], 'local_ai_course_assistant_msgs', ['id']);
        $table->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
        $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
        $table->add_index('courseid_time', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'timecreated']);
        $table->add_index('rating', XMLDB_INDEX_NOTUNIQUE, ['rating']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Create keywords table (cached keyword extraction for thematic analysis).
        $table = new xmldb_table('local_ai_course_assistant_keywords');
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('keyword', XMLDB_TYPE_CHAR, '100', null, XMLDB_NOTNULL, null, null);
        $table->add_field('frequency', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '1');
        $table->add_field('category', XMLDB_TYPE_CHAR, '30', null, XMLDB_NOTNULL, null, 'concept');
        $table->add_field('period_start', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('period_end', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
        $table->add_index('courseid_period', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'period_start']);
        $table->add_index('keyword_courseid', XMLDB_INDEX_NOTUNIQUE, ['keyword', 'courseid']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        upgrade_plugin_savepoint(true, 2026033001, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026041600) {
        // 3.5.0 introduces a new setting, default_course_mode, that controls
        // whether SOLA shows on a course when no per-course override is set.
        // New installs default to 'per_course' (opt-in) for a sane first-run
        // experience. Existing sites are set to 'all' here to preserve their
        // current behaviour — SOLA keeps appearing on every course unless it
        // was explicitly disabled via the Analytics toggle.
        if (get_config('local_ai_course_assistant', 'default_course_mode') === false) {
            set_config('default_course_mode', 'all', 'local_ai_course_assistant');
        }
        upgrade_plugin_savepoint(true, 2026041600, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026041802) {
        $dbman = $DB->get_manager();

        $table = new xmldb_table('local_ai_course_assistant_profiles');
        if (!$dbman->table_exists($table)) {
            $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
            $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('profile_summary', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
            $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
            $table->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
            $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
            $table->add_index('userid_courseid', XMLDB_INDEX_UNIQUE, ['userid', 'courseid']);
            $dbman->create_table($table);
        }

        upgrade_plugin_savepoint(true, 2026041802, 'local', 'ai_course_assistant');
    }

    if ($oldversion < 2026042400) {
        $dbman = $DB->get_manager();

        $objstable = new xmldb_table('local_ai_course_assistant_objs');
        if (!$dbman->table_exists($objstable)) {
            $objstable->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
            $objstable->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $objstable->add_field('sortorder', XMLDB_TYPE_INTEGER, '5', null, XMLDB_NOTNULL, null, '0');
            $objstable->add_field('code', XMLDB_TYPE_CHAR, '40', null, null, null, null);
            $objstable->add_field('title', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL);
            $objstable->add_field('description', XMLDB_TYPE_TEXT, null, null, null, null, null);
            $objstable->add_field('source', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL, null, 'manual');
            $objstable->add_field('external_ref', XMLDB_TYPE_CHAR, '64', null, null, null, null);
            $objstable->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $objstable->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $objstable->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
            $objstable->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
            $objstable->add_index('courseid_sortorder', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'sortorder']);
            $dbman->create_table($objstable);
        }

        $attstable = new xmldb_table('local_ai_course_assistant_obj_att');
        if (!$dbman->table_exists($attstable)) {
            $attstable->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
            $attstable->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $attstable->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $attstable->add_field('objectiveid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $attstable->add_field('source', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL, null, 'quiz');
            $attstable->add_field('msgid', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
            $attstable->add_field('iscorrect', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0');
            $attstable->add_field('weight', XMLDB_TYPE_NUMBER, '5,2', null, XMLDB_NOTNULL, null, '1.00');
            $attstable->add_field('confidence', XMLDB_TYPE_NUMBER, '5,2', null, null, null, null);
            $attstable->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $attstable->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
            $attstable->add_key('userid_fk', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);
            $attstable->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
            $attstable->add_key('objectiveid_fk', XMLDB_KEY_FOREIGN, ['objectiveid'],
                'local_ai_course_assistant_objs', ['id']);
            $attstable->add_index('userid_objective_time', XMLDB_INDEX_NOTUNIQUE,
                ['userid', 'objectiveid', 'timecreated']);
            $attstable->add_index('courseid_time', XMLDB_INDEX_NOTUNIQUE,
                ['courseid', 'timecreated']);
            $dbman->create_table($attstable);
        }

        upgrade_plugin_savepoint(true, 2026042400, 'local', 'ai_course_assistant');
    }

    // v3.9.22: spaced-repetition flashcards table.
    if ($oldversion < 2026042406) {
        $table = new xmldb_table('local_ai_course_assistant_flashcards');
        if (!$dbman->table_exists($table)) {
            $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
            $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('cmid', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
            $table->add_field('question', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
            $table->add_field('answer', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
            $table->add_field('ease', XMLDB_TYPE_NUMBER, '5,2', null, XMLDB_NOTNULL, null, '2.50');
            $table->add_field('interval_days', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('repetitions', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('next_review', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
            $table->add_index('user_course_review', XMLDB_INDEX_NOTUNIQUE,
                ['userid', 'courseid', 'next_review']);
            $dbman->create_table($table);
        }
        upgrade_plugin_savepoint(true, 2026042406, 'local', 'ai_course_assistant');
    }

    // v3.9.24: prereq_ids column on objs table (prerequisite gap detection).
    if ($oldversion < 2026042408) {
        $table = new xmldb_table('local_ai_course_assistant_objs');
        $field = new xmldb_field('prereq_ids', XMLDB_TYPE_CHAR, '255', null, null, null, null,
            'external_ref');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }
        upgrade_plugin_savepoint(true, 2026042408, 'local', 'ai_course_assistant');
    }

    // v4.0 / M5: optional objectiveid column on flashcards. When the card
    // generator can match a card to a course objective, the SM-2 scheduler
    // halves the next interval for cards whose objective is currently weak,
    // surfacing them earlier than vanilla SM-2 would. Untagged cards (NULL)
    // fall back to vanilla SM-2 — backwards-compatible.
    if ($oldversion < 2026042700) {
        $table = new xmldb_table('local_ai_course_assistant_flashcards');
        $field = new xmldb_field('objectiveid', XMLDB_TYPE_INTEGER, '10', null, null, null, null,
            'cmid');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }
        upgrade_plugin_savepoint(true, 2026042700, 'local', 'ai_course_assistant');
    }

    // v4.2.0: multiple Learning Radar scheduled queries (replaces the single
    // metaai_cron_* config). Existing single-schedule config is migrated into
    // the first row of the new table.
    if ($oldversion < 2026042800) {
        $table = new xmldb_table('local_ai_course_assistant_radar_sched');
        if (!$dbman->table_exists($table)) {
            $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
            $table->add_field('name', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL);
            $table->add_field('query', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
            $table->add_field('provider', XMLDB_TYPE_CHAR, '50', null, null, null, null);
            $table->add_field('model', XMLDB_TYPE_CHAR, '100', null, null, null, null);
            $table->add_field('frequency', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL, null, 'weekly');
            $table->add_field('recipient_email', XMLDB_TYPE_CHAR, '255', null, null, null, null);
            $table->add_field('slack_webhook', XMLDB_TYPE_CHAR, '500', null, null, null, null);
            $table->add_field('teams_webhook', XMLDB_TYPE_CHAR, '500', null, null, null, null);
            $table->add_field('format', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL, null, 'text');
            $table->add_field('courseids', XMLDB_TYPE_CHAR, '500', null, null, null, null);
            $table->add_field('filterprovider', XMLDB_TYPE_CHAR, '50', null, null, null, null);
            $table->add_field('range_days', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
            $table->add_field('enabled', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '1');
            $table->add_field('last_run', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
            $table->add_field('last_status', XMLDB_TYPE_CHAR, '20', null, null, null, null);
            $table->add_field('last_error', XMLDB_TYPE_TEXT, null, null, null, null, null);
            $table->add_field('creator', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
            $table->add_key('creator_fk', XMLDB_KEY_FOREIGN, ['creator'], 'user', ['id']);
            $table->add_index('enabled_frequency', XMLDB_INDEX_NOTUNIQUE, ['enabled', 'frequency']);
            $dbman->create_table($table);
        }

        // Migrate the legacy single-schedule config into the new table if a
        // query was configured. metaai_cron_enabled determines whether the
        // imported row is enabled. Keep the config rows intact so a downgrade
        // would still work without losing the schedule definition.
        $legacyquery = get_config('local_ai_course_assistant', 'metaai_cron_query');
        if (!empty($legacyquery)) {
            $existing = $DB->count_records('local_ai_course_assistant_radar_sched');
            if ($existing === 0) {
                $admin = get_admin();
                $now = time();
                $row = new \stdClass();
                $row->name = 'Legacy scheduled report';
                $row->query = (string) $legacyquery;
                $row->provider = (string) (get_config('local_ai_course_assistant', 'metaai_cron_provider') ?: '');
                $row->model = (string) (get_config('local_ai_course_assistant', 'metaai_cron_model') ?: '');
                $row->frequency = (string) (get_config('local_ai_course_assistant', 'metaai_cron_frequency') ?: 'weekly');
                $row->recipient_email = (string) (get_config('local_ai_course_assistant', 'metaai_cron_email') ?: '');
                $row->format = (string) (get_config('local_ai_course_assistant', 'metaai_cron_format') ?: 'text');
                $row->courseids = (string) (get_config('local_ai_course_assistant', 'metaai_cron_courseids') ?: '');
                $row->filterprovider = (string) (get_config('local_ai_course_assistant', 'metaai_cron_filterprovider') ?: '');
                $row->enabled = (int) (get_config('local_ai_course_assistant', 'metaai_cron_enabled') ?: 0);
                $row->creator = (int) $admin->id;
                $row->timecreated = $now;
                $row->timemodified = $now;
                $DB->insert_record('local_ai_course_assistant_radar_sched', $row);
            }
        }

        upgrade_plugin_savepoint(true, 2026042800, 'local', 'ai_course_assistant');
    }

    // v4.8.0: needs-review queue resolution table.
    if ($oldversion < 2026043010) {
        $table = new xmldb_table('local_ai_course_assistant_review_res');
        if (!$dbman->table_exists($table)) {
            $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
            $table->add_field('source', XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL);
            $table->add_field('sourceid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('resolved_by', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
            $table->add_field('note', XMLDB_TYPE_TEXT, null, null, null, null, null);
            $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
            $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
            $table->add_key('resolved_by_fk', XMLDB_KEY_FOREIGN, ['resolved_by'], 'user', ['id']);
            $table->add_key('courseid_fk', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);
            $table->add_index('source_sourceid', XMLDB_INDEX_UNIQUE, ['source', 'sourceid']);
            $table->add_index('courseid_timecreated', XMLDB_INDEX_NOTUNIQUE, ['courseid', 'timecreated']);
            $dbman->create_table($table);
        }
        upgrade_plugin_savepoint(true, 2026043010, 'local', 'ai_course_assistant');
    }

    // v4.5.0: clear stale legacy "force off" overrides on per-course pedagogy
    // toggles. Pre-v4.5.0, these stored '0' on every form save (default
    // checkbox-unchecked state), so upgrading installs would have most
    // courses pinned to "force off" and the new global defaults would not
    // take effect. Delete every per-course key whose value is '0' for the
    // six pedagogy features. '1' rows (deliberate force-on) and absent rows
    // (already inherit) are untouched.
    if ($oldversion < 2026042920) {
        $features = [
            'mastery_enabled',
            'socratic_mode',
            'worked_examples_enabled',
            'flashcards_enabled',
            'code_sandbox_enabled',
            'essay_feedback_enabled',
        ];
        foreach ($features as $feature) {
            $like = $DB->sql_like('name', ':namepattern');
            $DB->delete_records_select('config_plugins',
                "plugin = :plugin AND {$like} AND value = :zero",
                [
                    'plugin' => 'local_ai_course_assistant',
                    'namepattern' => $feature . '_course_%',
                    'zero' => '0',
                ]);
        }
        upgrade_plugin_savepoint(true, 2026042920, 'local', 'ai_course_assistant');
    }

    return true;
}
