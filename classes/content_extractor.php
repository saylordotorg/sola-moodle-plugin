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

/**
 * Extracts plain text from course modules for RAG indexing.
 *
 * Supports: mod_page, mod_book, mod_assign, mod_forum, mod_label,
 *           mod_glossary, mod_quiz, mod_resource, mod_h5p, mod_scorm.
 *
 * Pages and books are additionally scanned for embedded iframes
 * (Synthesia, YouTube, Articulate Review, Genially, ...) and the nearest
 * Saylor transcript URL is attached as supplementary text.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class content_extractor {

    /** @var int Minimum characters required to keep a module's content. */
    private const MIN_CHARS = 80;

    /** @var string Default transcript URL regex. */
    private const DEFAULT_TRANSCRIPT_PATTERN = 'resources\.saylor\.org/transcripts/[^"\'\s>]+';

    /** @var string Default iframe host patterns (one per line; # comments supported). */
    private const DEFAULT_IFRAME_HOST_PATTERNS = <<<'TXT'
share\.synthesia\.io/embeds/videos/
youtube\.com/embed/
youtube-nocookie\.com/embed/
review\.articulate\.com/
articulateusercontent\.com/
360\.articulate\.com/
view\.genially\.com/
genial\.ly/
TXT;

    /** @var int Curl timeout when fetching transcript URLs (seconds). */
    private const TRANSCRIPT_FETCH_TIMEOUT = 15;

    /**
     * Browser-like UA used when fetching transcript URLs. Matches a recent
     * Chrome/macOS UA without the SOLA-Indexer suffix so naive bot-fight
     * rules that key off unknown tokens do not trip on us. The IP allowlist
     * on the transcript host remains the real bypass; this is defence-in-depth.
     */
    private const TRANSCRIPT_UA = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 '
        . '(KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36';

    /**
     * Full request header set used when fetching transcripts. Order and
     * values match what a real Chrome desktop sends for a top-level
     * navigation, so naive Cloudflare Bot Fight rules that look for
     * missing/out-of-order Sec-Fetch-* or Accept-* headers do not trip
     * on us. This is NOT a TLS-fingerprint bypass (for that we would need
     * curl-impersonate or a headless browser). It complements the real
     * fix of allowlisting the Moodle egress IP at the transcript host.
     */
    private const TRANSCRIPT_HEADERS = [
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.9',
        'Accept-Encoding: gzip, deflate, br',
        'Cache-Control: max-age=0',
        'Upgrade-Insecure-Requests: 1',
        'Sec-Fetch-Dest: document',
        'Sec-Fetch-Mode: navigate',
        'Sec-Fetch-Site: none',
        'Sec-Fetch-User: ?1',
        'Sec-Ch-Ua: "Chromium";v="124", "Google Chrome";v="124", "Not-A.Brand";v="99"',
        'Sec-Ch-Ua-Mobile: ?0',
        'Sec-Ch-Ua-Platform: "macOS"',
        'DNT: 1',
        'Priority: u=0, i',
    ];

    /**
     * Extract text content from all supported modules in a course.
     *
     * @param int $courseid
     * @return array Array of ['cmid'=>int, 'modtype'=>string, 'title'=>string,
     *                         'section'=>string, 'text'=>string]
     */
    public static function extract_course_modules(int $courseid): array {
        global $DB;

        $modinfo = get_fast_modinfo($courseid);
        $sections = $modinfo->get_section_info_all();

        // Build a map of cmid → section name.
        $sectionnames = [];
        foreach ($sections as $section) {
            $name = get_section_name($courseid, $section);
            if (!empty($modinfo->sections[$section->section])) {
                foreach ($modinfo->sections[$section->section] as $cmid) {
                    $sectionnames[$cmid] = $name;
                }
            }
        }

        $results = [];

        foreach ($modinfo->get_cms() as $cm) {
            if (!$cm->uservisible) {
                continue;
            }

            $supported = [
                'page', 'book', 'assign', 'forum', 'label', 'glossary', 'quiz',
                'resource', 'h5p', 'scorm',
            ];
            if (!in_array($cm->modname, $supported, true)) {
                continue;
            }

            try {
                $text = self::extract_module_text($cm->modname, $cm->instance, $courseid, $DB);
            } catch (\Exception $e) {
                continue;
            }

            if (empty($text) || strlen($text) < self::MIN_CHARS) {
                continue;
            }

            $results[] = [
                'cmid'    => (int) $cm->id,
                'modtype' => $cm->modname,
                'title'   => $cm->name,
                'section' => $sectionnames[$cm->id] ?? '',
                'text'    => $text,
            ];
        }

        return $results;
    }

    /**
     * Extract text content from a single course module by cmid.
     *
     * @param int $cmid
     * @return array|null ['cmid'=>int, 'modtype'=>string, 'title'=>string, 'text'=>string]
     *                    or null if unsupported/empty.
     */
    public static function extract_module(int $cmid): ?array {
        global $DB;

        try {
            $cmrec  = $DB->get_record('course_modules', ['id' => $cmid], 'id,course,module,instance', MUST_EXIST);
            $module = $DB->get_record('modules', ['id' => $cmrec->module], 'name', MUST_EXIST);
            $modname  = $module->name;
            $courseid = (int) $cmrec->course;
            $instance = (int) $cmrec->instance;

            $modinfo = get_fast_modinfo($courseid);
            $cm = $modinfo->get_cm($cmid);
            $title = $cm->name;

            $text = self::extract_module_text($modname, $instance, $courseid, $DB);
        } catch (\Exception $e) {
            return null;
        }

        if (empty($text) || strlen($text) < self::MIN_CHARS) {
            return null;
        }

        return [
            'cmid'    => $cmid,
            'modtype' => $modname,
            'title'   => $title,
            'text'    => $text,
        ];
    }

    /**
     * Extract plain text from a specific module type and instance.
     *
     * @param string $modname Module type name (page, book, etc.)
     * @param int    $instance Module instance ID
     * @param int    $courseid Course ID
     * @param \moodle_database $DB
     * @return string Plain text, or empty string if not extractable.
     */
    private static function extract_module_text(string $modname, int $instance, int $courseid, \moodle_database $DB): string {
        switch ($modname) {
            case 'page':
                return self::extract_page($instance, $courseid, $DB);

            case 'book':
                return self::extract_book($instance, $courseid, $DB);

            case 'assign':
                $record = $DB->get_record('assign', ['id' => $instance, 'course' => $courseid], 'intro, introformat');
                if ($record && !empty($record->intro)) {
                    return self::clean_html($record->intro, $record->introformat);
                }
                return '';

            case 'forum':
                $record = $DB->get_record('forum', ['id' => $instance, 'course' => $courseid], 'intro, introformat');
                if ($record && !empty($record->intro)) {
                    return self::clean_html($record->intro, $record->introformat);
                }
                return '';

            case 'label':
                $record = $DB->get_record('label', ['id' => $instance, 'course' => $courseid], 'intro, introformat');
                if ($record && !empty($record->intro)) {
                    return self::clean_html($record->intro, $record->introformat);
                }
                return '';

            case 'glossary':
                return self::extract_glossary($instance, $courseid, $DB);

            case 'quiz':
                $record = $DB->get_record('quiz', ['id' => $instance, 'course' => $courseid], 'intro, introformat');
                if ($record && !empty($record->intro)) {
                    return self::clean_html($record->intro, $record->introformat);
                }
                return '';

            case 'resource':
                return \local_ai_course_assistant\extractors\file_extractor::extract($instance, $courseid);

            case 'h5p':
                return \local_ai_course_assistant\extractors\h5p_extractor::extract($instance, $courseid);

            case 'scorm':
                return \local_ai_course_assistant\extractors\scorm_extractor::extract($instance, $courseid);

            default:
                return '';
        }
    }

    /**
     * Extract text from mod_page.
     *
     * @param int $instance Activity instance ID.
     * @param int $courseid Course ID.
     * @param \moodle_database $DB Moodle database handle.
     * @return string Extracted page text.
     */
    private static function extract_page(int $instance, int $courseid, \moodle_database $DB): string {
        $record = $DB->get_record('page', ['id' => $instance, 'course' => $courseid], 'content, contentformat');
        if (!$record || empty($record->content)) {
            return '';
        }
        $text = self::clean_html($record->content, $record->contentformat);
        $embedtext = self::extract_embedded_transcripts($record->content);
        if ($embedtext !== '') {
            $text = rtrim($text) . "\n\n" . $embedtext;
        }
        return $text;
    }

    /**
     * Extract text from mod_book (all chapters concatenated).
     *
     * @param int $instance Activity instance ID.
     * @param int $courseid Course ID.
     * @param \moodle_database $DB Moodle database handle.
     * @return string Extracted book text.
     */
    private static function extract_book(int $instance, int $courseid, \moodle_database $DB): string {
        $chapters = $DB->get_records(
            'book_chapters',
            ['bookid' => $instance, 'hidden' => 0],
            'pagenum ASC',
            'id, title, content, contentformat'
        );

        if (!$chapters) {
            return '';
        }

        $parts = [];
        foreach ($chapters as $ch) {
            $text = self::clean_html($ch->content, $ch->contentformat);
            if (strlen($text) > 50) {
                $heading = !empty($ch->title) ? "{$ch->title}\n" : '';
                $chaptertext = $heading . $text;
                $embedtext = self::extract_embedded_transcripts($ch->content);
                if ($embedtext !== '') {
                    $chaptertext .= "\n\n" . $embedtext;
                }
                $parts[] = $chaptertext;
            }
        }

        return implode("\n\n", $parts);
    }

    /**
     * Extract text from mod_glossary (all entries: concept + definition).
     *
     * @param int $instance Activity instance ID.
     * @param int $courseid Course ID.
     * @param \moodle_database $DB Moodle database handle.
     * @return string Extracted glossary text.
     */
    private static function extract_glossary(int $instance, int $courseid, \moodle_database $DB): string {
        $entries = $DB->get_records(
            'glossary_entries',
            ['glossaryid' => $instance, 'approved' => 1],
            'concept ASC',
            'id, concept, definition, definitionformat'
        );

        if (!$entries) {
            return '';
        }

        $parts = [];
        foreach ($entries as $entry) {
            $deftext = self::clean_html($entry->definition, $entry->definitionformat);
            if (!empty($entry->concept) && strlen($deftext) > 10) {
                $parts[] = "{$entry->concept}: {$deftext}";
            }
        }

        return implode("\n\n", $parts);
    }

    /**
     * Detect iframes with whitelisted hosts in HTML and pair each with the
     * nearest transcript URL (by absolute character distance).
     *
     * @param string $html Raw HTML to scan.
     * @return array[] Array of [
     *     'iframe_src'      => string,
     *     'title'           => string,
     *     'transcript_url'  => string|null,
     *     'transcript_text' => string|null,
     * ]
     */
    public static function detect_embeds_with_transcripts(string $html): array {
        if ($html === '') {
            return [];
        }

        $hostpatterns = self::get_iframe_host_patterns();
        if (!$hostpatterns) {
            return [];
        }

        // Find all iframe openings with positions.
        $iframes = [];
        if (preg_match_all('#<iframe\b([^>]*)>#is', $html, $matches, PREG_OFFSET_CAPTURE)) {
            foreach ($matches[0] as $i => $match) {
                $attrs = $matches[1][$i][0];
                $offset = $match[1];
                $src = self::get_attr($attrs, 'src');
                if ($src === '') {
                    continue;
                }
                if (!self::src_matches_any($src, $hostpatterns)) {
                    continue;
                }
                $title = self::get_attr($attrs, 'title');
                $iframes[] = [
                    'src'    => $src,
                    'title'  => $title !== '' ? $title : 'Untitled',
                    'offset' => $offset,
                ];
            }
        }

        if (!$iframes) {
            return [];
        }

        // Find all transcript URLs with positions.
        $transcriptpattern = self::get_transcript_pattern();
        $transcripts = [];
        if (preg_match_all('#' . $transcriptpattern . '#i', $html, $tmatches, PREG_OFFSET_CAPTURE)) {
            foreach ($tmatches[0] as $tmatch) {
                $url = $tmatch[0];
                $offset = $tmatch[1];
                // Normalize scheme.
                if (!preg_match('#^https?://#i', $url)) {
                    $url = 'https://' . $url;
                }
                $transcripts[] = ['url' => $url, 'offset' => $offset];
            }
        }

        $shouldfetch = self::is_truthy('rag_fetch_transcripts');
        $fetchcache = [];

        $out = [];
        foreach ($iframes as $iframe) {
            $nearest = null;
            $bestdist = PHP_INT_MAX;
            foreach ($transcripts as $t) {
                $dist = abs($t['offset'] - $iframe['offset']);
                if ($dist < $bestdist) {
                    $bestdist = $dist;
                    $nearest = $t;
                }
            }

            $transcripturl = $nearest ? $nearest['url'] : null;
            $transcripttext = null;
            if ($transcripturl !== null && $shouldfetch) {
                if (!array_key_exists($transcripturl, $fetchcache)) {
                    $fetchcache[$transcripturl] = self::fetch_transcript($transcripturl);
                }
                $transcripttext = $fetchcache[$transcripturl];
            }

            $out[] = [
                'iframe_src'      => $iframe['src'],
                'title'           => $iframe['title'],
                'transcript_url'  => $transcripturl,
                'transcript_text' => $transcripttext,
            ];
        }

        return $out;
    }

    /**
     * Build supplementary text from embeds in a page/book chunk of HTML.
     *
     * @param string $html Raw HTML.
     * @return string Concatenated embed/transcript markers, or empty string.
     */
    private static function extract_embedded_transcripts(string $html): string {
        $embeds = self::detect_embeds_with_transcripts($html);
        if (!$embeds) {
            return '';
        }

        $parts = [];
        foreach ($embeds as $embed) {
            $title = $embed['title'] !== '' ? $embed['title'] : 'Untitled';
            if (!empty($embed['transcript_text'])) {
                $parts[] = "[Transcript of embedded video/interactive: {$title}]\n" . $embed['transcript_text'];
            } else {
                // Minimal marker so the AI knows an embed exists.
                $marker = "[Embedded video/interactive: {$title}]";
                if (!empty($embed['transcript_url'])) {
                    $marker .= "\nTranscript available at: " . $embed['transcript_url'];
                }
                $parts[] = $marker;
            }
        }
        return implode("\n\n", $parts);
    }

    /**
     * Fetch a transcript URL via curl with a browser UA; return stripped plain text.
     *
     * Detects Cloudflare challenge pages and returns null in that case.
     *
     * @param string $url
     * @return string|null Plain text body, or null on failure / challenge page.
     */
    private static function fetch_transcript(string $url): ?string {
        if (!function_exists('curl_init')) {
            return null;
        }

        // SSRF: reject internal and loopback URLs before any request fires.
        if (!\local_ai_course_assistant\security::is_safe_provider_url($url)) {
            return null;
        }

        $ch = curl_init($url);
        if ($ch === false) {
            return null;
        }
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS      => 5,
            CURLOPT_TIMEOUT        => self::TRANSCRIPT_FETCH_TIMEOUT,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_USERAGENT      => self::TRANSCRIPT_UA,
            CURLOPT_HTTPHEADER     => self::TRANSCRIPT_HEADERS,
            CURLOPT_ENCODING       => '',  // Accept any encoding curl supports; auto-decodes gzip/br.
            CURLOPT_HEADER         => true,
        ]);
        $response = curl_exec($ch);
        if ($response === false) {
            curl_close($ch);
            debugging('SOLA transcript fetch failed: ' . $url, DEBUG_DEVELOPER);
            return null;
        }
        $headersize = (int) curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $httpcode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpcode >= 400) {
            debugging('SOLA transcript fetch HTTP ' . $httpcode . ': ' . $url, DEBUG_DEVELOPER);
            return null;
        }

        $rawheaders = substr($response, 0, $headersize);
        $body = substr($response, $headersize);
        if (!is_string($body) || $body === '') {
            return null;
        }

        // Cloudflare challenge detection: title "Just a moment..." OR
        // body under 10 KB that mentions cf-ray or challenge.
        if (preg_match('#<title[^>]*>\s*Just a moment\.\.\.#i', $body)) {
            debugging('SOLA transcript fetch blocked by Cloudflare challenge: ' . $url, DEBUG_DEVELOPER);
            return null;
        }
        if (strlen($body) < 10240
            && (stripos($rawheaders, 'cf-ray') !== false
                || stripos($body, 'cf-ray') !== false
                || stripos($body, 'challenge') !== false)) {
            debugging('SOLA transcript fetch looks like Cloudflare challenge: ' . $url, DEBUG_DEVELOPER);
            return null;
        }

        // Strip script/style, then tags.
        $body = preg_replace('#<script\b[^>]*>.*?</script>#is', '', $body);
        $body = preg_replace('#<style\b[^>]*>.*?</style>#is', '', $body);
        $text = strip_tags($body);
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/[ \t]+/', ' ', $text);
        $text = preg_replace('/\n{3,}/', "\n\n", $text);
        $text = trim($text);

        return $text !== '' ? $text : null;
    }

    /**
     * Read and parse the iframe host patterns setting.
     *
     * @return string[] Regex patterns (without delimiters). Empty on failure.
     */
    private static function get_iframe_host_patterns(): array {
        $raw = get_config('local_ai_course_assistant', 'rag_iframe_host_patterns');
        if (!is_string($raw) || trim($raw) === '') {
            $raw = self::DEFAULT_IFRAME_HOST_PATTERNS;
        }
        $lines = preg_split('/\R/', $raw);
        $out = [];
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || str_starts_with($line, '#')) {
                continue;
            }
            $out[] = $line;
        }
        return $out;
    }

    /**
     * Read the transcript URL pattern setting.
     *
     * @return string Regex pattern (without delimiters).
     */
    private static function get_transcript_pattern(): string {
        $raw = get_config('local_ai_course_assistant', 'rag_transcript_url_pattern');
        if (!is_string($raw) || trim($raw) === '') {
            return self::DEFAULT_TRANSCRIPT_PATTERN;
        }
        return trim($raw);
    }

    /**
     * Check whether an iframe src matches any of the host regex patterns.
     *
     * @param string   $src
     * @param string[] $patterns
     * @return bool
     */
    private static function src_matches_any(string $src, array $patterns): bool {
        foreach ($patterns as $pat) {
            $regex = '#' . $pat . '#i';
            if (@preg_match($regex, '') === false) {
                // Invalid regex — skip.
                continue;
            }
            if (preg_match($regex, $src)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Get the value of a named attribute from a raw attribute-list string.
     *
     * @param string $attrs Raw attributes (e.g. "src='foo' title='bar'").
     * @param string $name  Attribute name.
     * @return string Attribute value, HTML-decoded, or empty string.
     */
    private static function get_attr(string $attrs, string $name): string {
        // Try double-quoted.
        if (preg_match('#\b' . preg_quote($name, '#') . '\s*=\s*"([^"]*)"#i', $attrs, $m)) {
            return html_entity_decode($m[1], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }
        // Single-quoted.
        if (preg_match("#\\b" . preg_quote($name, '#') . "\\s*=\\s*'([^']*)'#i", $attrs, $m)) {
            return html_entity_decode($m[1], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }
        // Unquoted.
        if (preg_match('#\b' . preg_quote($name, '#') . '\s*=\s*([^\s>]+)#i', $attrs, $m)) {
            return html_entity_decode($m[1], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        }
        return '';
    }

    /**
     * Truthy-ish setting check with safe default of false.
     *
     * @param string $name Config key.
     * @return bool
     */
    private static function is_truthy(string $name): bool {
        $raw = get_config('local_ai_course_assistant', $name);
        if ($raw === false || $raw === null || $raw === '') {
            return false;
        }
        return (bool) (int) $raw;
    }

    /**
     * Strip HTML tags and normalize whitespace from formatted text.
     *
     * @param string $html Raw HTML content.
     * @param int    $format Moodle text format constant.
     * @return string Normalized plain text.
     */
    private static function clean_html(string $html, int $format = FORMAT_HTML): string {
        $text = strip_tags(format_text($html, $format));
        // Normalize whitespace but preserve paragraph breaks.
        $text = preg_replace('/[ \t]+/', ' ', $text);
        $text = preg_replace('/\n{3,}/', "\n\n", $text);
        return trim($text);
    }
}
