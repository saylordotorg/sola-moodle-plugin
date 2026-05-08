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

namespace local_ai_course_assistant\extractors;

/**
 * Extracts text from mod_scorm packaged content.
 *
 * Off by default. When enabled, unzips the SCORM package, pulls titles and
 * descriptions from imsmanifest.xml, strips text from every .html file, and
 * applies a simple heuristic to harvest Articulate Storyline content out of
 * *.js files. Temp directories are cleaned up via a shutdown function.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class scorm_extractor {

    /** @var int Default maximum package size in MB before we skip. */
    private const DEFAULT_MAX_MB = 100;

    /** @var int Per-HTML-file size cap in bytes (2 MB). */
    private const MAX_HTML_BYTES = 2 * 1024 * 1024;

    /** @var string[] Directories we've created and still need to remove on shutdown. */
    private static $tempdirs = [];

    /** @var bool Whether the shutdown cleanup has been registered yet. */
    private static $shutdownregistered = false;

    /**
     * Extract text from a mod_scorm instance.
     *
     * @param int $instance mod_scorm instance id.
     * @param int $courseid Course id.
     * @return string Extracted text, or empty string on any failure / when disabled.
     */
    public static function extract(int $instance, int $courseid): string {
        global $CFG, $DB;

        if (!self::is_enabled('rag_extract_scorm', false)) {
            return '';
        }

        try {
            $record = $DB->get_record('scorm', ['id' => $instance, 'course' => $courseid], 'id, name');
            if (!$record) {
                return '';
            }

            $cm = get_coursemodule_from_instance('scorm', $instance, $courseid, false, IGNORE_MISSING);
            if (!$cm) {
                return '';
            }

            $cmcontext = \context_module::instance($cm->id);
            $fs = get_file_storage();
            $files = $fs->get_area_files(
                $cmcontext->id,
                'mod_scorm',
                'package',
                0,
                'sortorder DESC, id ASC',
                false
            );

            $packagefile = null;
            foreach ($files as $candidate) {
                if (!$candidate->is_directory()) {
                    $packagefile = $candidate;
                    break;
                }
            }
            if (!$packagefile) {
                return '';
            }

            $rawmm = get_config('local_ai_course_assistant', 'rag_scorm_max_mb');
            $maxmb = ($rawmm === false || $rawmm === '') ? self::DEFAULT_MAX_MB : (int) $rawmm;
            if ($maxmb <= 0) {
                $maxmb = self::DEFAULT_MAX_MB;
            }
            $sizebytes = (int) $packagefile->get_filesize();
            if ($sizebytes > $maxmb * 1024 * 1024) {
                debugging(
                    'scorm_extractor: skipping package exceeding ' . $maxmb . 'MB (instance ' . $instance . ')',
                    DEBUG_DEVELOPER
                );
                return '';
            }

            if (!class_exists('ZipArchive')) {
                return '';
            }

            $tempdir = isset($CFG->tempdir) ? $CFG->tempdir : sys_get_temp_dir();
            if (!is_dir($tempdir)) {
                @mkdir($tempdir, 0777, true);
            }
            $extractdir = $tempdir . DIRECTORY_SEPARATOR . 'sola_scorm_' . uniqid('', true);
            if (!@mkdir($extractdir, 0777, true)) {
                return '';
            }
            self::register_tempdir($extractdir);

            $tmppath = tempnam($tempdir, 'sola_scorm_pkg_');
            if ($tmppath === false) {
                return '';
            }

            try {
                $packagefile->copy_content_to($tmppath);

                $zip = new \ZipArchive();
                if ($zip->open($tmppath) !== true) {
                    return '';
                }
                if (!$zip->extractTo($extractdir)) {
                    $zip->close();
                    return '';
                }
                $zip->close();
            } finally {
                if (is_file($tmppath)) {
                    @unlink($tmppath);
                }
            }

            $sections = [];

            // 1. imsmanifest.xml.
            $manifest = self::find_file($extractdir, 'imsmanifest.xml');
            if ($manifest !== null) {
                $manifesttext = self::extract_manifest_text($manifest);
                if ($manifesttext !== '') {
                    $sections[] = "[imsmanifest.xml]\n" . $manifesttext;
                }
            }

            // 2. HTML files.
            $htmlfiles = self::find_files_by_extension($extractdir, ['html', 'htm']);
            foreach ($htmlfiles as $htmlpath) {
                if (@filesize($htmlpath) > self::MAX_HTML_BYTES) {
                    continue;
                }
                $raw = @file_get_contents($htmlpath);
                if (!is_string($raw) || $raw === '') {
                    continue;
                }
                $text = self::html_to_text($raw);
                if ($text === '') {
                    continue;
                }
                $rel = self::relpath($extractdir, $htmlpath);
                $sections[] = "[{$rel}]\n" . $text;
            }

            // 3. JS files with Articulate-style content strings.
            $jsfiles = self::find_files_by_extension($extractdir, ['js']);
            foreach ($jsfiles as $jspath) {
                $raw = @file_get_contents($jspath);
                if (!is_string($raw) || $raw === '') {
                    continue;
                }
                $strings = self::harvest_js_strings($raw);
                if (!$strings) {
                    continue;
                }
                $rel = self::relpath($extractdir, $jspath);
                $sections[] = "[{$rel}]\n" . implode("\n", $strings);
            }

            if (!$sections) {
                return '';
            }

            return trim(implode("\n\n", $sections));
        } catch (\Throwable $e) {
            debugging('scorm_extractor failed for instance ' . $instance . ': ' . $e->getMessage(), DEBUG_DEVELOPER);
            return '';
        }
    }

    /**
     * Extract title/description text from an imsmanifest.xml file.
     *
     * @param string $path Absolute path to imsmanifest.xml.
     * @return string
     */
    private static function extract_manifest_text(string $path): string {
        $xml = @file_get_contents($path);
        if (!is_string($xml) || $xml === '') {
            return '';
        }
        $lines = [];
        if (preg_match_all('#<title[^>]*>(.*?)</title>#is', $xml, $matches)) {
            foreach ($matches[1] as $m) {
                $clean = trim(html_entity_decode(strip_tags($m), ENT_QUOTES | ENT_XML1, 'UTF-8'));
                if ($clean !== '') {
                    $lines[] = $clean;
                }
            }
        }
        if (preg_match_all('#<description[^>]*>(.*?)</description>#is', $xml, $matches)) {
            foreach ($matches[1] as $m) {
                $clean = trim(html_entity_decode(strip_tags($m), ENT_QUOTES | ENT_XML1, 'UTF-8'));
                if ($clean !== '') {
                    $lines[] = $clean;
                }
            }
        }
        return implode("\n", $lines);
    }

    /**
     * Convert SCORM page HTML to plain text.
     *
     * @param string $html
     * @return string
     */
    private static function html_to_text(string $html): string {
        // Drop noisy blocks before stripping tags.
        $html = preg_replace('#<script\b[^>]*>.*?</script>#is', '', $html);
        $html = preg_replace('#<style\b[^>]*>.*?</style>#is', '', $html);
        $text = strip_tags($html);
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/[ \t]+/', ' ', $text);
        $text = preg_replace('/\n{3,}/', "\n\n", $text);
        return trim($text);
    }

    /**
     * Heuristic extraction of content strings from an Articulate/SCORM JS file.
     *
     * Matches double- or single-quoted string literals longer than 30 chars
     * that contain at least one space separating word characters (a crude
     * proxy for real prose vs. code/identifiers).
     *
     * @param string $js Raw JS source.
     * @return string[] Content strings.
     */
    private static function harvest_js_strings(string $js): array {
        $out = [];
        $seen = [];

        $pattern = '#(?P<q>["\'])(?P<body>(?:\\\\.|(?!(?P=q)).){30,}?)(?P=q)#s';
        if (preg_match_all($pattern, $js, $matches)) {
            foreach ($matches['body'] as $raw) {
                // Unescape the most common escapes.
                $s = str_replace(['\\n', '\\r', '\\t'], [' ', ' ', ' '], $raw);
                $s = str_replace(['\\"', "\\'"], ['"', "'"], $s);
                $s = preg_replace('/\s+/', ' ', $s);
                $s = trim($s);
                if ($s === '' || strlen($s) < 30) {
                    continue;
                }
                // Must contain a word followed by a space followed by another word char.
                if (!preg_match('/\w\s+\w/', $s)) {
                    continue;
                }
                // Skip obvious URLs and path-like noise.
                if (preg_match('#^(https?:|//|data:|[/\\\\])#i', $s)) {
                    continue;
                }
                $key = md5($s);
                if (isset($seen[$key])) {
                    continue;
                }
                $seen[$key] = true;
                $out[] = $s;
            }
        }
        return $out;
    }

    /**
     * Locate a specific filename anywhere under $root (case-insensitive).
     *
     * @param string $root
     * @param string $filename
     * @return string|null Absolute path, or null if not found.
     */
    private static function find_file(string $root, string $filename): ?string {
        $target = strtolower($filename);
        $it = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($root, \FilesystemIterator::SKIP_DOTS)
        );
        foreach ($it as $item) {
            /** @var \SplFileInfo $item */
            if ($item->isFile() && strtolower($item->getFilename()) === $target) {
                return $item->getPathname();
            }
        }
        return null;
    }

    /**
     * List all files under $root with one of the given extensions.
     *
     * @param string   $root
     * @param string[] $extensions Lowercase, no leading dot.
     * @return string[] Absolute paths.
     */
    private static function find_files_by_extension(string $root, array $extensions): array {
        $ext = array_map('strtolower', $extensions);
        $out = [];
        $it = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($root, \FilesystemIterator::SKIP_DOTS)
        );
        foreach ($it as $item) {
            /** @var \SplFileInfo $item */
            if (!$item->isFile()) {
                continue;
            }
            if (in_array(strtolower($item->getExtension()), $ext, true)) {
                $out[] = $item->getPathname();
            }
        }
        return $out;
    }

    /**
     * Compute a relative path of $path under $root for section headers.
     *
     * @param string $root
     * @param string $path
     * @return string
     */
    private static function relpath(string $root, string $path): string {
        $root = rtrim($root, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
        if (str_starts_with($path, $root)) {
            return substr($path, strlen($root));
        }
        return basename($path);
    }

    /**
     * Register a temp directory for shutdown cleanup.
     *
     * @param string $dir
     * @return void
     */
    private static function register_tempdir(string $dir): void {
        self::$tempdirs[] = $dir;
        if (!self::$shutdownregistered) {
            register_shutdown_function([self::class, 'cleanup_tempdirs']);
            self::$shutdownregistered = true;
        }
    }

    /**
     * Recursively delete every registered temp directory.
     *
     * @return void
     */
    public static function cleanup_tempdirs(): void {
        foreach (self::$tempdirs as $dir) {
            self::rrmdir($dir);
        }
        self::$tempdirs = [];
    }

    /**
     * Recursively remove a directory.
     *
     * @param string $dir
     * @return void
     */
    private static function rrmdir(string $dir): void {
        if (!is_dir($dir)) {
            return;
        }
        $it = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );
        foreach ($it as $item) {
            /** @var \SplFileInfo $item */
            if ($item->isDir()) {
                @rmdir($item->getPathname());
            } else {
                @unlink($item->getPathname());
            }
        }
        @rmdir($dir);
    }

    /**
     * Read a boolean-ish plugin setting with a default when absent.
     *
     * @param string $name
     * @param bool   $default
     * @return bool
     */
    private static function is_enabled(string $name, bool $default): bool {
        $raw = get_config('local_ai_course_assistant', $name);
        if ($raw === false || $raw === null || $raw === '') {
            return $default;
        }
        return (bool) (int) $raw;
    }
}
