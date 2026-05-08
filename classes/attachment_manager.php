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

use local_ai_course_assistant\extractors\file_extractor;

/**
 * Student message attachment lifecycle.
 *
 * Persistence model: files are uploaded to the user's Moodle draft file
 * area, then promoted on user-message save to a course-scoped file area
 * keyed by the message id. History reload hydrates each user message's
 * attachment via get_for_message(), yielding a pluginfile URL.
 *
 * Content handling: images become base64 content blocks for the
 * multimodal providers that support them; PDFs are always text-extracted
 * via pdftotext and injected into the system prompt, which works across
 * every provider.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class attachment_manager {

    /** @var string Moodle file API component and filearea used for persisted attachments. */
    public const COMPONENT = 'local_ai_course_assistant';
    public const FILEAREA = 'message_attachments';

    /** @var int Hard upper bound on configurable max size in MB. */
    private const HARD_MAX_MB = 25;

    /** @var int Default max size in MB when the setting is missing. */
    private const DEFAULT_MAX_MB = 10;

    /** @var string[] Default MIME allowlist when the setting is empty. */
    private const DEFAULT_MIMES = [
        'image/png',
        'image/jpeg',
        'image/webp',
        'application/pdf',
    ];

    /** @var string[] Providers with known multimodal image support. */
    private const IMAGE_CAPABLE_PROVIDERS = ['openai', 'anthropic', 'claude', 'gemini', 'xai'];

    /**
     * Whether the student attachment feature is enabled site-wide.
     *
     * @return bool
     */
    public static function is_enabled(): bool {
        $raw = get_config('local_ai_course_assistant', 'allow_student_attachments');
        // Default enabled when the setting has never been saved.
        return ($raw === false) || (bool) $raw;
    }

    /**
     * Maximum allowed upload size in bytes.
     *
     * @return int
     */
    public static function get_max_size_bytes(): int {
        $rawmb = get_config('local_ai_course_assistant', 'attachment_max_size_mb');
        $mb = ($rawmb === false || $rawmb === '') ? self::DEFAULT_MAX_MB : (int) $rawmb;
        if ($mb < 1) {
            $mb = self::DEFAULT_MAX_MB;
        }
        if ($mb > self::HARD_MAX_MB) {
            $mb = self::HARD_MAX_MB;
        }
        return $mb * 1024 * 1024;
    }

    /**
     * Configured MIME allowlist.
     *
     * @return string[]
     */
    public static function get_allowed_mimes(): array {
        $raw = (string) (get_config('local_ai_course_assistant', 'attachment_allowed_types') ?: '');
        if ($raw === '') {
            return self::DEFAULT_MIMES;
        }
        $list = array_filter(array_map('trim', explode(',', strtolower($raw))));
        return $list ?: self::DEFAULT_MIMES;
    }

    /**
     * @param string $mime
     * @return bool
     */
    public static function is_mime_allowed(string $mime): bool {
        return in_array(strtolower($mime), self::get_allowed_mimes(), true);
    }

    /**
     * @param string $mime
     * @return bool
     */
    public static function is_image_mime(string $mime): bool {
        return strpos(strtolower($mime), 'image/') === 0;
    }

    /**
     * @param string $mime
     * @return bool
     */
    public static function is_pdf_mime(string $mime): bool {
        return strtolower($mime) === 'application/pdf';
    }

    /**
     * Whether the given provider name supports image attachments natively.
     *
     * @param string $provider
     * @return bool
     */
    public static function provider_supports_images(string $provider): bool {
        return in_array(strtolower($provider), self::IMAGE_CAPABLE_PROVIDERS, true);
    }

    /**
     * Sniff the MIME type of an uploaded temp file. Trusts finfo over the
     * browser-supplied Content-Type header so a renamed payload can't smuggle
     * through the allowlist.
     *
     * @param string $tmppath
     * @return string MIME, or empty string on failure.
     */
    public static function sniff_mime(string $tmppath): string {
        if (!is_file($tmppath)) {
            return '';
        }
        $finfo = @finfo_open(FILEINFO_MIME_TYPE);
        if (!$finfo) {
            return '';
        }
        $sniffed = finfo_file($finfo, $tmppath);
        finfo_close($finfo);
        return is_string($sniffed) ? strtolower($sniffed) : '';
    }

    /**
     * Save an uploaded temp file into the current user's Moodle draft area.
     *
     * @param int    $userid
     * @param string $tmppath  Path from $_FILES['...']['tmp_name']
     * @param string $filename Original filename from the upload
     * @param string $mime     Verified MIME (caller must validate)
     * @return array{draftitemid:int, filename:string, mime:string, size:int, url:string}
     * @throws \moodle_exception on save failure
     */
    public static function save_upload_to_draft(int $userid, string $tmppath, string $filename, string $mime): array {
        $draftitemid = file_get_unused_draft_itemid();
        $usercontext = \context_user::instance($userid);

        $cleanname = clean_param($filename, PARAM_FILE);
        if ($cleanname === '') {
            $cleanname = 'attachment';
        }

        $fs = get_file_storage();
        $record = (object) [
            'contextid' => $usercontext->id,
            'component' => 'user',
            'filearea' => 'draft',
            'itemid' => $draftitemid,
            'filepath' => '/',
            'filename' => $cleanname,
        ];
        $file = $fs->create_file_from_pathname($record, $tmppath);

        return [
            'draftitemid' => $draftitemid,
            'filename' => $file->get_filename(),
            'mime' => $mime,
            'size' => (int) $file->get_filesize(),
            'url' => self::draft_file_url($usercontext->id, $draftitemid, $file->get_filename()),
        ];
    }

    /**
     * Resolve the draft file for the given user + draftitemid.
     *
     * @param int $userid
     * @param int $draftitemid
     * @return \stored_file|null
     */
    public static function get_draft_file(int $userid, int $draftitemid): ?\stored_file {
        if ($draftitemid <= 0) {
            return null;
        }
        $usercontext = \context_user::instance($userid);
        $fs = get_file_storage();
        $files = $fs->get_area_files($usercontext->id, 'user', 'draft', $draftitemid, 'filename', false);
        foreach ($files as $file) {
            if (!$file->is_directory()) {
                return $file;
            }
        }
        return null;
    }

    /**
     * Move a draft file into the permanent per-message attachment area.
     * Called from the SSE endpoint right after the user message is saved,
     * so the file gets keyed by the actual message id.
     *
     * @param int $userid
     * @param int $draftitemid
     * @param int $courseid
     * @param int $messageid
     * @return \stored_file|null The promoted file, or null on failure.
     */
    public static function promote_draft_to_message(int $userid, int $draftitemid, int $courseid, int $messageid): ?\stored_file {
        $draft = self::get_draft_file($userid, $draftitemid);
        if (!$draft) {
            return null;
        }

        $coursecontext = \context_course::instance($courseid);
        $fs = get_file_storage();

        // Remove any existing attachment on this message id first (defence against retries).
        $fs->delete_area_files($coursecontext->id, self::COMPONENT, self::FILEAREA, $messageid);

        $record = (object) [
            'contextid' => $coursecontext->id,
            'component' => self::COMPONENT,
            'filearea' => self::FILEAREA,
            'itemid' => $messageid,
            'filepath' => '/',
            'filename' => $draft->get_filename(),
        ];
        $promoted = $fs->create_file_from_storedfile($record, $draft);

        // Clean up the draft now that the permanent copy exists.
        $draft->delete();

        return $promoted;
    }

    /**
     * Get the persisted attachment for a message, if any.
     *
     * @param int $courseid
     * @param int $messageid
     * @return \stored_file|null
     */
    public static function get_for_message(int $courseid, int $messageid): ?\stored_file {
        $coursecontext = \context_course::instance($courseid);
        $fs = get_file_storage();
        $files = $fs->get_area_files($coursecontext->id, self::COMPONENT, self::FILEAREA, $messageid, 'filename', false);
        foreach ($files as $file) {
            if (!$file->is_directory()) {
                return $file;
            }
        }
        return null;
    }

    /**
     * Build a pluginfile URL for the persisted attachment.
     *
     * @param int          $courseid
     * @param int          $messageid
     * @param \stored_file $file
     * @return string
     */
    public static function build_pluginfile_url(int $courseid, int $messageid, \stored_file $file): string {
        $coursecontext = \context_course::instance($courseid);
        $url = \moodle_url::make_pluginfile_url(
            $coursecontext->id,
            self::COMPONENT,
            self::FILEAREA,
            $messageid,
            $file->get_filepath(),
            $file->get_filename(),
            false
        );
        return $url->out(false);
    }

    /**
     * Extract PDF text for injection into the system prompt.
     * Thin wrapper around the RAG indexer's extraction helper so both
     * pipelines share the same pdftotext invocation.
     *
     * @param \stored_file $file
     * @return string Extracted text, or empty string on failure.
     */
    public static function extract_pdf_text(\stored_file $file): string {
        return file_extractor::extract_pdf_text($file);
    }

    /**
     * Read the image content and return it as base64 plus MIME,
     * ready for content-block assembly by multimodal providers.
     *
     * @param \stored_file $file
     * @return array{mime:string, base64:string}|null
     */
    public static function get_image_payload(\stored_file $file): ?array {
        $mime = strtolower($file->get_mimetype() ?: '');
        if (!self::is_image_mime($mime)) {
            return null;
        }
        $content = $file->get_content();
        if ($content === false || $content === '') {
            return null;
        }
        return [
            'mime' => $mime,
            'base64' => base64_encode($content),
        ];
    }

    /**
     * Helper — build a draft-area pluginfile URL for preview chip display.
     *
     * @param int    $usercontextid
     * @param int    $draftitemid
     * @param string $filename
     * @return string
     */
    private static function draft_file_url(int $usercontextid, int $draftitemid, string $filename): string {
        $url = \moodle_url::make_draftfile_url($draftitemid, '/', $filename);
        return $url->out(false);
    }
}
