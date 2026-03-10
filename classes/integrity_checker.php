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

defined('MOODLE_INTERNAL') || die();

/**
 * Integrity checker: runs a suite of health checks against the SOLA plugin.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class integrity_checker {

    /** @var string Plugin directory path. */
    private static function plugindir(): string {
        global $CFG;
        return $CFG->dirroot . '/local/ai_course_assistant';
    }

    /**
     * Run all integrity checks.
     *
     * @return array ['passed' => int, 'failed' => int, 'warned' => int, 'results' => [...]]
     */
    public static function run_all(): array {
        $results = [];

        $results[] = self::test_php_syntax();
        $results[] = self::test_js_build_files();
        $results[] = self::test_lang_files();
        $results[] = self::test_api_key_configured();
        $results[] = self::test_rag_tables();
        $results[] = self::test_version_consistency();
        $results[] = self::test_key_classes();
        $results[] = self::test_template_files();
        $results[] = self::test_db_tables();
        $results[] = self::test_sse_endpoint();

        $passed = 0;
        $failed = 0;
        $warned = 0;
        foreach ($results as $r) {
            if ($r['status'] === 'pass') {
                $passed++;
            } else if ($r['status'] === 'fail') {
                $failed++;
            } else {
                $warned++;
            }
        }

        return [
            'passed' => $passed,
            'failed' => $failed,
            'warned' => $warned,
            'results' => $results,
            'timestamp' => time(),
        ];
    }

    /**
     * Check PHP syntax of all plugin PHP files.
     */
    private static function test_php_syntax(): array {
        $dir = self::plugindir();
        $files = self::glob_recursive($dir, '*.php');
        $errors = [];

        foreach ($files as $file) {
            $output = [];
            $retval = 0;
            exec(PHP_BINARY . ' -l ' . escapeshellarg($file) . ' 2>&1', $output, $retval);
            if ($retval !== 0) {
                $relpath = str_replace($dir . '/', '', $file);
                $errors[] = $relpath . ': ' . implode(' ', $output);
            }
        }

        if (!empty($errors)) {
            return [
                'name' => 'PHP Syntax',
                'status' => 'fail',
                'message' => count($errors) . ' file(s) with syntax errors: ' . implode('; ', array_slice($errors, 0, 5)),
            ];
        }

        return [
            'name' => 'PHP Syntax',
            'status' => 'pass',
            'message' => 'All ' . count($files) . ' PHP files are valid.',
        ];
    }

    /**
     * Check JS build files exist and are non-empty.
     */
    private static function test_js_build_files(): array {
        $dir = self::plugindir() . '/amd/build';
        $expected = ['chat', 'ui', 'quiz', 'speech', 'repository', 'sse_client', 'markdown', 'audio_player', 'realtime', 'voice'];
        $missing = [];

        foreach ($expected as $name) {
            $file = $dir . '/' . $name . '.min.js';
            if (!file_exists($file) || filesize($file) === 0) {
                $missing[] = $name . '.min.js';
            }
        }

        if (!empty($missing)) {
            return [
                'name' => 'JS Build Files',
                'status' => 'fail',
                'message' => 'Missing or empty: ' . implode(', ', $missing),
            ];
        }

        return [
            'name' => 'JS Build Files',
            'status' => 'pass',
            'message' => 'All ' . count($expected) . ' JS build files present.',
        ];
    }

    /**
     * Check all language files parse without error.
     */
    private static function test_lang_files(): array {
        $dir = self::plugindir() . '/lang';
        $errors = [];
        $count = 0;

        if (!is_dir($dir)) {
            return ['name' => 'Lang Files', 'status' => 'fail', 'message' => 'lang/ directory not found.'];
        }

        foreach (scandir($dir) as $langdir) {
            if ($langdir === '.' || $langdir === '..') {
                continue;
            }
            $file = $dir . '/' . $langdir . '/local_ai_course_assistant.php';
            if (!file_exists($file)) {
                continue;
            }
            $count++;
            // Use php -l to check syntax without actually including the file.
            $output = [];
            $retval = 0;
            exec(PHP_BINARY . ' -l ' . escapeshellarg($file) . ' 2>&1', $output, $retval);
            if ($retval !== 0) {
                $errors[] = $langdir;
            }
        }

        if (!empty($errors)) {
            return [
                'name' => 'Lang Files',
                'status' => 'fail',
                'message' => 'Parse errors in: ' . implode(', ', $errors),
            ];
        }

        return [
            'name' => 'Lang Files',
            'status' => 'pass',
            'message' => 'All ' . $count . ' language files are valid.',
        ];
    }

    /**
     * Check API key is configured.
     */
    private static function test_api_key_configured(): array {
        $key = get_config('local_ai_course_assistant', 'apikey');
        if (empty($key)) {
            return [
                'name' => 'API Key',
                'status' => 'warn',
                'message' => 'No AI provider API key is configured. Chat will not work.',
            ];
        }

        return [
            'name' => 'API Key',
            'status' => 'pass',
            'message' => 'API key is configured (' . strlen($key) . ' chars).',
        ];
    }

    /**
     * Check RAG tables exist if RAG is enabled.
     */
    private static function test_rag_tables(): array {
        global $DB;

        $ragenabled = (bool) get_config('local_ai_course_assistant', 'rag_enabled');
        if (!$ragenabled) {
            return [
                'name' => 'RAG Tables',
                'status' => 'pass',
                'message' => 'RAG is disabled, skipping table check.',
            ];
        }

        $dbman = $DB->get_manager();
        $table = new \xmldb_table('local_ai_course_assistant_chunks');
        if (!$dbman->table_exists($table)) {
            return [
                'name' => 'RAG Tables',
                'status' => 'fail',
                'message' => 'RAG is enabled but the chunks table does not exist.',
            ];
        }

        return [
            'name' => 'RAG Tables',
            'status' => 'pass',
            'message' => 'RAG chunks table exists.',
        ];
    }

    /**
     * Check version.php consistency.
     */
    private static function test_version_consistency(): array {
        $file = self::plugindir() . '/version.php';
        if (!file_exists($file)) {
            return ['name' => 'Version File', 'status' => 'fail', 'message' => 'version.php not found.'];
        }

        $plugin = new \stdClass();
        include($file);

        $issues = [];
        if (empty($plugin->component) || $plugin->component !== 'local_ai_course_assistant') {
            $issues[] = 'component mismatch';
        }
        if (empty($plugin->version) || !is_numeric($plugin->version)) {
            $issues[] = 'invalid version number';
        }
        if (empty($plugin->release)) {
            $issues[] = 'missing release string';
        }

        if (!empty($issues)) {
            return [
                'name' => 'Version File',
                'status' => 'fail',
                'message' => 'Issues: ' . implode(', ', $issues),
            ];
        }

        return [
            'name' => 'Version File',
            'status' => 'pass',
            'message' => 'v' . $plugin->release . ' (build ' . $plugin->version . ').',
        ];
    }

    /**
     * Check key classes are autoloadable.
     */
    private static function test_key_classes(): array {
        $classes = [
            'local_ai_course_assistant\\context_builder',
            'local_ai_course_assistant\\conversation_manager',
            'local_ai_course_assistant\\course_config_manager',
            'local_ai_course_assistant\\analytics',
            'local_ai_course_assistant\\content_indexer',
            'local_ai_course_assistant\\remote_config_manager',
            'local_ai_course_assistant\\starter_manager',
        ];

        $missing = [];
        foreach ($classes as $cls) {
            if (!class_exists($cls, true)) {
                $missing[] = $cls;
            }
        }

        if (!empty($missing)) {
            return [
                'name' => 'Key Classes',
                'status' => 'fail',
                'message' => 'Cannot autoload: ' . implode(', ', $missing),
            ];
        }

        return [
            'name' => 'Key Classes',
            'status' => 'pass',
            'message' => 'All ' . count($classes) . ' core classes loaded successfully.',
        ];
    }

    /**
     * Check template files exist and are non-empty.
     */
    private static function test_template_files(): array {
        $dir = self::plugindir() . '/templates';
        $expected = [
            'chat_widget.mustache',
            'chat_message.mustache',
            'analytics_dashboard.mustache',
            'user_settings.mustache',
            'token_analytics.mustache',
            'mobile_chat.mustache',
        ];

        $missing = [];
        foreach ($expected as $tpl) {
            $file = $dir . '/' . $tpl;
            if (!file_exists($file) || filesize($file) === 0) {
                $missing[] = $tpl;
            }
        }

        if (!empty($missing)) {
            return [
                'name' => 'Template Files',
                'status' => 'fail',
                'message' => 'Missing or empty: ' . implode(', ', $missing),
            ];
        }

        return [
            'name' => 'Template Files',
            'status' => 'pass',
            'message' => 'All ' . count($expected) . ' templates present.',
        ];
    }

    /**
     * Check all expected database tables exist.
     */
    private static function test_db_tables(): array {
        global $DB;

        $tables = [
            'local_ai_course_assistant_convs',
            'local_ai_course_assistant_msgs',
            'local_ai_course_assistant_plans',
            'local_ai_course_assistant_reminders',
            'local_ai_course_assistant_course_cfg',
            'local_ai_course_assistant_audit',
            'local_ai_course_assistant_chunks',
            'local_ai_course_assistant_feedback',
        ];

        $dbman = $DB->get_manager();
        $missing = [];
        foreach ($tables as $name) {
            $table = new \xmldb_table($name);
            if (!$dbman->table_exists($table)) {
                $missing[] = $name;
            }
        }

        if (!empty($missing)) {
            return [
                'name' => 'Database Tables',
                'status' => 'fail',
                'message' => 'Missing tables: ' . implode(', ', $missing),
            ];
        }

        return [
            'name' => 'Database Tables',
            'status' => 'pass',
            'message' => 'All ' . count($tables) . ' tables exist.',
        ];
    }

    /**
     * Check the SSE endpoint file exists and has valid syntax.
     */
    private static function test_sse_endpoint(): array {
        $file = self::plugindir() . '/sse.php';
        if (!file_exists($file)) {
            return ['name' => 'SSE Endpoint', 'status' => 'fail', 'message' => 'sse.php not found.'];
        }

        $output = [];
        $retval = 0;
        exec(PHP_BINARY . ' -l ' . escapeshellarg($file) . ' 2>&1', $output, $retval);
        if ($retval !== 0) {
            return [
                'name' => 'SSE Endpoint',
                'status' => 'fail',
                'message' => 'Syntax error: ' . implode(' ', $output),
            ];
        }

        return [
            'name' => 'SSE Endpoint',
            'status' => 'pass',
            'message' => 'sse.php exists and has valid syntax.',
        ];
    }

    /**
     * Recursively glob for files matching a pattern.
     */
    private static function glob_recursive(string $dir, string $pattern): array {
        $files = glob($dir . '/' . $pattern) ?: [];
        foreach (glob($dir . '/*', GLOB_ONLYDIR) as $subdir) {
            $basename = basename($subdir);
            if ($basename === '.git' || $basename === 'node_modules') {
                continue;
            }
            $files = array_merge($files, self::glob_recursive($subdir, $pattern));
        }
        return $files;
    }
}
