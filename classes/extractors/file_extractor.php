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
 * Extracts plain text from mod_resource uploaded files.
 *
 * Supports PDF (via pdftotext binary), DOCX (native ZipArchive parse),
 * and plain text / markdown (direct read). Each format is individually
 * gated by an admin setting and degrades gracefully when unavailable.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class file_extractor {

    /** @var string[] MIME types we can handle as plain text. */
    private const TEXT_MIMES = ['text/plain', 'text/markdown', 'text/x-markdown'];

    /**
     * Extract text from a mod_resource instance.
     *
     * @param int $instance mod_resource instance id.
     * @param int $courseid Course id.
     * @return string Extracted plain text, or empty string on failure / unsupported type.
     */
    public static function extract(int $instance, int $courseid): string {
        global $DB;

        try {
            $resource = $DB->get_record('resource', ['id' => $instance, 'course' => $courseid], 'id, name');
            if (!$resource) {
                return '';
            }

            // Resolve the course module id so we can get the module context.
            $cm = get_coursemodule_from_instance('resource', $instance, $courseid, false, IGNORE_MISSING);
            if (!$cm) {
                return '';
            }

            $cmcontext = \context_module::instance($cm->id);
            $fs = get_file_storage();
            $files = $fs->get_area_files($cmcontext->id, 'mod_resource', 'content', 0, 'sortorder DESC, id ASC', false);

            $file = null;
            foreach ($files as $candidate) {
                if (!$candidate->is_directory()) {
                    $file = $candidate;
                    break;
                }
            }
            if (!$file) {
                return '';
            }

            $mime = (string) $file->get_mimetype();
            $filename = strtolower((string) $file->get_filename());

            // Plain text / markdown: always on.
            if (in_array($mime, self::TEXT_MIMES, true)
                || str_ends_with($filename, '.txt')
                || str_ends_with($filename, '.md')
                || str_ends_with($filename, '.markdown')) {
                $content = (string) $file->get_content();
                return self::normalize_whitespace($content);
            }

            // PDF.
            if ($mime === 'application/pdf' || str_ends_with($filename, '.pdf')) {
                if (!self::is_enabled('rag_extract_pdf', true)) {
                    return '';
                }
                return self::extract_pdf($file);
            }

            // DOCX.
            $docxmime = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
            if ($mime === $docxmime || str_ends_with($filename, '.docx')) {
                if (!self::is_enabled('rag_extract_docx', true)) {
                    return '';
                }
                return self::extract_docx($file);
            }

            // PPTX (modern PowerPoint, OOXML format). Legacy binary .ppt
            // requires libreoffice / catdoc and is intentionally not handled
            // here; instructors should re-save legacy decks as .pptx.
            $pptxmime = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
            if ($mime === $pptxmime || str_ends_with($filename, '.pptx')) {
                if (!self::is_enabled('rag_extract_pptx', true)) {
                    return '';
                }
                return self::extract_pptx($file);
            }

            return '';
        } catch (\Throwable $e) {
            debugging('file_extractor failed for instance ' . $instance . ': ' . $e->getMessage(), DEBUG_DEVELOPER);
            return '';
        }
    }

    /**
     * Whether the pdftotext binary is available and resolvable.
     *
     * Exposed for the RAG admin status widget.
     *
     * @return bool
     */
    public static function pdftotext_available(): bool {
        $path = self::resolve_pdftotext_path();
        return $path !== '' && is_executable($path);
    }

    /**
     * Resolve the path to the pdftotext binary.
     *
     * Checks the plugin setting first, then falls back to `which pdftotext`,
     * then a small list of common install paths.
     *
     * @return string Absolute path, or empty string if not found.
     */
    public static function resolve_pdftotext_path(): string {
        $configured = (string) (get_config('local_ai_course_assistant', 'rag_pdftotext_path') ?: '');
        if ($configured !== '' && is_executable($configured)) {
            return $configured;
        }

        // `which` lookup.
        $which = @shell_exec('command -v pdftotext 2>/dev/null');
        if (is_string($which)) {
            $which = trim($which);
            if ($which !== '' && is_executable($which)) {
                return $which;
            }
        }

        // Common install paths.
        $candidates = [
            '/usr/bin/pdftotext',
            '/usr/local/bin/pdftotext',
            '/opt/homebrew/bin/pdftotext',
            '/opt/local/bin/pdftotext',
        ];
        foreach ($candidates as $candidate) {
            if (is_executable($candidate)) {
                return $candidate;
            }
        }

        return '';
    }

    /**
     * Public entry point for extracting text from a PDF stored_file.
     * Used by the student attachment pipeline as well as the RAG indexer.
     *
     * @param \stored_file $file
     * @return string Extracted plain text, or empty string on failure.
     */
    public static function extract_pdf_text(\stored_file $file): string {
        return self::extract_pdf($file);
    }

    /**
     * Extract text from a PDF stored_file by shelling out to pdftotext.
     *
     * @param \stored_file $file
     * @return string Extracted plain text, or empty string on failure.
     */
    private static function extract_pdf(\stored_file $file): string {
        global $CFG;

        $binary = self::resolve_pdftotext_path();

        // v4.8.0: pure-PHP fallback when pdftotext is unavailable. Handles
        // the common case (text PDFs with FlateDecode-compressed content
        // streams from Word/Pages/LibreOffice). Encrypted, image-only, and
        // complex-font PDFs still require the binary; install poppler-utils
        // on those hosts.
        if ($binary === '') {
            try {
                $bytes = $file->get_content();
                if ($bytes === '') {
                    return '';
                }
                $text = self::extract_pdf_php_fallback($bytes);
                if ($text !== '') {
                    return self::normalize_whitespace($text);
                }
            } catch (\Throwable $e) {
                debugging('PDF PHP fallback failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
            }
            debugging(get_string('rag:pdftotext_missing', 'local_ai_course_assistant'), DEBUG_DEVELOPER);
            return '';
        }

        $tempdir = isset($CFG->tempdir) ? $CFG->tempdir : sys_get_temp_dir();
        if (!is_dir($tempdir)) {
            @mkdir($tempdir, 0777, true);
        }
        $tmppath = tempnam($tempdir, 'sola_pdf_');
        if ($tmppath === false) {
            return '';
        }

        try {
            $file->copy_content_to($tmppath);

            $cmd = escapeshellcmd($binary) . ' -layout -q ' . escapeshellarg($tmppath) . ' -';
            $descriptor = [
                0 => ['pipe', 'r'],
                1 => ['pipe', 'w'],
                2 => ['pipe', 'w'],
            ];
            $process = @proc_open($cmd, $descriptor, $pipes);
            if (!is_resource($process)) {
                return '';
            }

            fclose($pipes[0]);
            $stdout = stream_get_contents($pipes[1]);
            fclose($pipes[1]);
            fclose($pipes[2]);
            proc_close($process);

            if (!is_string($stdout) || $stdout === '') {
                return '';
            }

            return self::normalize_whitespace($stdout);
        } catch (\Throwable $e) {
            debugging('pdftotext invocation failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
            return '';
        } finally {
            if (is_file($tmppath)) {
                @unlink($tmppath);
            }
        }
    }

    /**
     * Pure-PHP PDF text extraction fallback.
     *
     * Walks the PDF byte stream looking for `stream`/`endstream` content
     * blocks, decompresses any that carry a `/Filter /FlateDecode`
     * indicator, and pulls text out of the standard PDF text operators
     * (`Tj`, `TJ`, `'`, `"`) inside `BT`/`ET` text-object pairs.
     *
     * Designed for the common case: text PDFs produced by Word/Pages/
     * LibreOffice, where the content stream is plain compressed text.
     * Will produce poor or empty output for encrypted PDFs, image-only
     * PDFs, or PDFs that use custom font encodings without a ToUnicode
     * map. Those still need the pdftotext binary (poppler-utils).
     *
     * @param string $bytes Raw PDF bytes.
     * @return string Extracted plain text. Empty string when the heuristic
     *                cannot find any decodable text.
     */
    private static function extract_pdf_php_fallback(string $bytes): string {
        if (strncmp($bytes, '%PDF-', 5) !== 0) {
            return '';
        }
        // Encrypted PDFs are out of scope for the fallback — admins need
        // pdftotext for those.
        if (strpos($bytes, '/Encrypt ') !== false || strpos($bytes, '/Encrypt\n') !== false) {
            return '';
        }

        $offset = 0;
        $out = [];
        while (($streampos = strpos($bytes, "stream", $offset)) !== false) {
            $headerstart = strrpos(substr($bytes, 0, $streampos), '<<');
            if ($headerstart === false) {
                $offset = $streampos + 6;
                continue;
            }
            $header = substr($bytes, $headerstart, $streampos - $headerstart);
            // Skip the line break after `stream`.
            $datastart = $streampos + 6;
            if (isset($bytes[$datastart]) && $bytes[$datastart] === "\r") {
                $datastart++;
            }
            if (isset($bytes[$datastart]) && $bytes[$datastart] === "\n") {
                $datastart++;
            }
            $dataend = strpos($bytes, "endstream", $datastart);
            if ($dataend === false) {
                break;
            }
            $rawdata = rtrim(substr($bytes, $datastart, $dataend - $datastart), "\r\n");
            $offset = $dataend + 9;

            // Skip non-text streams (images/fonts) to avoid garbage output.
            if (preg_match('#/Subtype\s*/(Image|Form)\b#', $header) === 1) {
                continue;
            }

            $data = $rawdata;
            if (preg_match('#/Filter\s*/FlateDecode\b#', $header) === 1) {
                $decoded = @gzuncompress($data);
                if ($decoded === false) {
                    // Try with the 2-byte zlib header offset, occasionally needed.
                    $decoded = @gzinflate(substr($data, 2));
                }
                if ($decoded === false) {
                    continue;
                }
                $data = $decoded;
            }

            // Walk BT...ET text objects.
            if (preg_match_all('#BT\s*(.*?)\s*ET#s', $data, $blocks)) {
                foreach ($blocks[1] as $block) {
                    $out[] = self::extract_pdf_text_ops($block);
                }
            }
        }

        $combined = implode("\n", array_filter(array_map('trim', $out), 'strlen'));
        return $combined;
    }

    /**
     * Pull text from a single PDF text-object body. Recognises the four
     * common text-showing operators: `Tj`, `TJ`, `'`, `"`.
     *
     * @param string $block Body between BT and ET.
     * @return string
     */
    private static function extract_pdf_text_ops(string $block): string {
        $strings = [];

        // Tj  ('text') Tj    — single string.
        if (preg_match_all("#\\(((?:\\\\.|[^()\\\\])*)\\)\\s*Tj#s", $block, $m)) {
            foreach ($m[1] as $s) {
                $strings[] = self::pdf_unescape($s);
            }
        }
        // TJ  [(text)... numeric kerning ...] TJ — array form.
        if (preg_match_all('#\[\s*((?:[^\[\]]|\\\\.)*?)\s*\]\s*TJ#s', $block, $m)) {
            foreach ($m[1] as $arr) {
                if (preg_match_all("#\\(((?:\\\\.|[^()\\\\])*)\\)#s", $arr, $am)) {
                    $piece = '';
                    foreach ($am[1] as $s) {
                        $piece .= self::pdf_unescape($s);
                    }
                    $strings[] = $piece;
                }
            }
        }
        // ' and " operators — newline + string.
        if (preg_match_all("#\\(((?:\\\\.|[^()\\\\])*)\\)\\s*'#s", $block, $m)) {
            foreach ($m[1] as $s) {
                $strings[] = "\n" . self::pdf_unescape($s);
            }
        }
        if (preg_match_all("#\\(((?:\\\\.|[^()\\\\])*)\\)\\s*\"#s", $block, $m)) {
            foreach ($m[1] as $s) {
                $strings[] = "\n" . self::pdf_unescape($s);
            }
        }
        return implode(' ', $strings);
    }

    /**
     * Decode the small set of escape sequences PDF strings use inside
     * literal `(...)` syntax: `\n`, `\r`, `\t`, `\b`, `\f`, `\\`, `\(`,
     * `\)`, plus `\NNN` octal codes.
     *
     * @param string $s
     * @return string
     */
    private static function pdf_unescape(string $s): string {
        $s = preg_replace_callback('#\\\\([0-7]{1,3})#', static function ($m) {
            return chr(octdec($m[1]));
        }, $s);
        $s = strtr($s, [
            '\\n' => "\n", '\\r' => "\r", '\\t' => "\t",
            '\\b' => "\x08", '\\f' => "\x0c",
            '\\(' => '(', '\\)' => ')', '\\\\' => '\\',
        ]);
        return $s;
    }

    /**
     * Extract text from a DOCX stored_file by parsing word/document.xml.
     *
     * @param \stored_file $file
     * @return string Extracted plain text, or empty string on failure.
     */
    private static function extract_docx(\stored_file $file): string {
        global $CFG;

        if (!class_exists('ZipArchive')) {
            debugging('ZipArchive not available; DOCX extraction disabled.', DEBUG_DEVELOPER);
            return '';
        }

        $tempdir = isset($CFG->tempdir) ? $CFG->tempdir : sys_get_temp_dir();
        if (!is_dir($tempdir)) {
            @mkdir($tempdir, 0777, true);
        }
        $tmppath = tempnam($tempdir, 'sola_docx_');
        if ($tmppath === false) {
            return '';
        }

        try {
            $file->copy_content_to($tmppath);

            $zip = new \ZipArchive();
            if ($zip->open($tmppath) !== true) {
                return '';
            }

            $xml = $zip->getFromName('word/document.xml');
            $zip->close();
            if (!is_string($xml) || $xml === '') {
                return '';
            }

            // Convert paragraph and line breaks to newlines before stripping.
            $xml = preg_replace('#<w:p\b[^>]*/>#i', "\n", $xml);
            $xml = preg_replace('#</w:p>#i', "\n", $xml);
            $xml = preg_replace('#<w:br\b[^/]*/>#i', "\n", $xml);
            $xml = preg_replace('#<w:tab\b[^/]*/>#i', "\t", $xml);

            // Strip all remaining XML tags (both w:* and others).
            $text = preg_replace('#<[^>]+>#', '', $xml);

            // Decode XML entities.
            $text = html_entity_decode($text, ENT_QUOTES | ENT_XML1, 'UTF-8');

            return self::normalize_whitespace($text);
        } catch (\Throwable $e) {
            debugging('DOCX extraction failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
            return '';
        } finally {
            if (is_file($tmppath)) {
                @unlink($tmppath);
            }
        }
    }

    /**
     * Extract text from a PPTX stored_file by walking ppt/slides/slide*.xml
     * inside the OOXML zip and concatenating each slide's text runs.
     *
     * Slide order is preserved by sorting on the numeric suffix of the
     * filename (slide1.xml, slide2.xml, …) so the extracted text reads
     * deck-top-to-bottom. Each slide is prefixed with "Slide N:" so chunks
     * downstream retain a sense of structure.
     *
     * Speaker notes (ppt/notesSlides/notesSlide*.xml) are also picked up
     * when present — useful because slide bullets are often terse but
     * speaker notes carry the actual explanation.
     *
     * Legacy binary .ppt files are NOT handled here; that format requires
     * an external converter (libreoffice headless, catdoc) and we do not
     * shell out for it. Instructors should re-save those decks as .pptx.
     *
     * @param \stored_file $file
     * @return string Extracted plain text, or empty string on failure.
     */
    private static function extract_pptx(\stored_file $file): string {
        global $CFG;

        if (!class_exists('ZipArchive')) {
            debugging('ZipArchive not available; PPTX extraction disabled.', DEBUG_DEVELOPER);
            return '';
        }

        $tempdir = isset($CFG->tempdir) ? $CFG->tempdir : sys_get_temp_dir();
        if (!is_dir($tempdir)) {
            @mkdir($tempdir, 0777, true);
        }
        $tmppath = tempnam($tempdir, 'sola_pptx_');
        if ($tmppath === false) {
            return '';
        }

        try {
            $file->copy_content_to($tmppath);

            $zip = new \ZipArchive();
            if ($zip->open($tmppath) !== true) {
                return '';
            }

            $slides = [];
            $notes  = [];
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $name = (string) $zip->getNameIndex($i);
                if (preg_match('#^ppt/slides/slide(\d+)\.xml$#i', $name, $m)) {
                    $slides[(int) $m[1]] = $zip->getFromIndex($i);
                } else if (preg_match('#^ppt/notesSlides/notesSlide(\d+)\.xml$#i', $name, $m)) {
                    $notes[(int) $m[1]] = $zip->getFromIndex($i);
                }
            }
            $zip->close();
            if (empty($slides)) {
                return '';
            }
            ksort($slides, SORT_NUMERIC);

            $parts = [];
            foreach ($slides as $n => $xml) {
                $slidetext = self::extract_pptx_runs((string) $xml);
                if ($slidetext === '') {
                    continue;
                }
                $block = "Slide {$n}: " . $slidetext;
                if (isset($notes[$n])) {
                    $notetext = self::extract_pptx_runs((string) $notes[$n]);
                    if ($notetext !== '') {
                        $block .= "\n  (Speaker notes: " . $notetext . ')';
                    }
                }
                $parts[] = $block;
            }
            if (empty($parts)) {
                return '';
            }
            return self::normalize_whitespace(implode("\n\n", $parts));
        } catch (\Throwable $e) {
            debugging('PPTX extraction failed: ' . $e->getMessage(), DEBUG_DEVELOPER);
            return '';
        } finally {
            if (is_file($tmppath)) {
                @unlink($tmppath);
            }
        }
    }

    /**
     * Pull all <a:t>…</a:t> text runs out of a slide or notes-slide XML
     * payload, separated by spaces, with paragraph-level <a:p> breaks
     * collapsed to a single space (slide bullets read as a flat list).
     *
     * @param string $xml
     * @return string
     */
    private static function extract_pptx_runs(string $xml): string {
        if ($xml === '') {
            return '';
        }
        // Convert paragraph and break tags to spaces before stripping XML.
        $xml = preg_replace('#<a:br\b[^/]*/>#i', ' ', $xml);
        $xml = preg_replace('#</a:p>#i', ' ', $xml);

        $parts = [];
        if (preg_match_all('#<a:t[^>]*>(.*?)</a:t>#s', $xml, $matches)) {
            foreach ($matches[1] as $piece) {
                $piece = html_entity_decode($piece, ENT_QUOTES | ENT_XML1, 'UTF-8');
                $piece = trim($piece);
                if ($piece !== '') {
                    $parts[] = $piece;
                }
            }
        }
        $text = implode(' ', $parts);
        $text = preg_replace('/\s+/', ' ', $text);
        return trim($text);
    }

    /**
     * Normalize whitespace while preserving paragraph breaks.
     *
     * @param string $text
     * @return string
     */
    private static function normalize_whitespace(string $text): string {
        $text = str_replace(["\r\n", "\r"], "\n", $text);
        $text = preg_replace('/[ \t]+/', ' ', $text);
        $text = preg_replace('/\n{3,}/', "\n\n", $text);
        return trim($text);
    }

    /**
     * Read a boolean-ish plugin setting with a default when absent.
     *
     * @param string $name Setting key.
     * @param bool   $default Value to use when setting is unset.
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
