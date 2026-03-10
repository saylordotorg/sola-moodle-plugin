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
 * Self-update mechanism: check GitHub for new releases and install in-place.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class plugin_updater {

    /** GitHub API endpoint for latest release. */
    const GITHUB_API = 'https://api.github.com/repos/saylordotorg/sola-moodle-plugin/releases/latest';

    /**
     * Get the current installed version info.
     *
     * @return object {version, release, component}
     */
    public static function get_current_version(): object {
        global $CFG;
        $plugin = new \stdClass();
        include($CFG->dirroot . '/local/ai_course_assistant/version.php');
        return $plugin;
    }

    /**
     * Check GitHub for the latest release.
     *
     * @return object|null {tag, version, changelog, zip_url, current_version, update_available}
     *                     or null on failure.
     */
    public static function check_for_update(): ?object {
        $token = get_config('local_ai_course_assistant', 'github_token');

        $headers = [
            'Accept: application/vnd.github+json',
            'User-Agent: SOLA-Moodle-Plugin/1.0',
        ];
        if (!empty($token)) {
            $headers[] = 'Authorization: Bearer ' . $token;
        }

        $ch = curl_init(self::GITHUB_API);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_HTTPHEADER => $headers,
        ]);
        $body = curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($code !== 200 || !$body) {
            return null;
        }

        $data = json_decode($body);
        if (!$data || empty($data->tag_name)) {
            return null;
        }

        // Find the zipball URL (source code zip from GitHub).
        $zipurl = $data->zipball_url ?? '';

        // Also check for a release asset named ai_course_assistant.zip.
        if (!empty($data->assets) && is_array($data->assets)) {
            foreach ($data->assets as $asset) {
                if (strpos($asset->name, 'ai_course_assistant') !== false
                    || strpos($asset->name, '.zip') !== false) {
                    $zipurl = $asset->browser_download_url;
                    break;
                }
            }
        }

        $current = self::get_current_version();
        $latestversion = ltrim($data->tag_name, 'v');

        $result = new \stdClass();
        $result->tag = $data->tag_name;
        $result->version = $latestversion;
        $result->changelog = $data->body ?? '';
        $result->zip_url = $zipurl;
        $result->current_version = $current->release;
        $result->update_available = version_compare($latestversion, $current->release, '>');
        $result->published_at = $data->published_at ?? '';

        return $result;
    }

    /**
     * Download a release zip to Moodle's temp directory.
     *
     * @param string $zipurl URL to download.
     * @return string Path to downloaded zip, or empty string on failure.
     */
    public static function download_release(string $zipurl): string {
        global $CFG;

        // Security: only download from github.com.
        if (strpos($zipurl, 'https://github.com/') !== 0
            && strpos($zipurl, 'https://api.github.com/') !== 0
            && strpos($zipurl, 'https://codeload.github.com/') !== 0) {
            return '';
        }

        $tempdir = $CFG->tempdir . '/sola_update';
        if (!is_dir($tempdir)) {
            mkdir($tempdir, 0755, true);
        }
        $zippath = $tempdir . '/sola_release.zip';

        $token = get_config('local_ai_course_assistant', 'github_token');
        $headers = ['User-Agent: SOLA-Moodle-Plugin/1.0'];
        if (!empty($token)) {
            $headers[] = 'Authorization: Bearer ' . $token;
        }

        $ch = curl_init($zipurl);
        $fp = fopen($zippath, 'w');
        curl_setopt_array($ch, [
            CURLOPT_FILE => $fp,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_HTTPHEADER => $headers,
        ]);
        curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        fclose($fp);

        if ($code !== 200 || !file_exists($zippath) || filesize($zippath) < 1000) {
            @unlink($zippath);
            return '';
        }

        return $zippath;
    }

    /**
     * Install an update from a downloaded zip file.
     *
     * @param string $zippath Path to the release zip.
     * @return array ['success' => bool, 'message' => string]
     */
    public static function install_update(string $zippath): array {
        global $CFG;

        $plugindir = $CFG->dirroot . '/local/ai_course_assistant';
        $tempdir = $CFG->tempdir . '/sola_update';

        // Pre-flight: check write permissions.
        if (!is_writable($plugindir)) {
            return ['success' => false, 'message' => 'Plugin directory is not writable by the web server.'];
        }
        if (!is_writable(dirname($plugindir))) {
            return ['success' => false, 'message' => 'Parent directory (local/) is not writable.'];
        }

        // Extract the zip.
        $extractdir = $tempdir . '/extracted';
        if (is_dir($extractdir)) {
            self::rmdir_recursive($extractdir);
        }
        mkdir($extractdir, 0755, true);

        $zip = new \ZipArchive();
        if ($zip->open($zippath) !== true) {
            return ['success' => false, 'message' => 'Failed to open the downloaded zip file.'];
        }
        $zip->extractTo($extractdir);
        $zip->close();

        // Find the plugin directory inside the extract.
        // GitHub zipball nests files under a random directory name.
        $sourcedir = self::find_plugin_root($extractdir);
        if (!$sourcedir) {
            self::rmdir_recursive($extractdir);
            return ['success' => false, 'message' => 'Could not find ai_course_assistant directory in the zip.'];
        }

        // Validate: the extracted dir must contain version.php.
        if (!file_exists($sourcedir . '/version.php')) {
            self::rmdir_recursive($extractdir);
            return ['success' => false, 'message' => 'Invalid plugin: version.php not found in the extracted files.'];
        }

        // Create backup of current plugin.
        $backupdir = $plugindir . '.bak_' . date('Ymd_His');
        if (!@rename($plugindir, $backupdir)) {
            self::rmdir_recursive($extractdir);
            return ['success' => false, 'message' => 'Failed to create backup of the current plugin.'];
        }

        // Move the new version into place.
        if (!@rename($sourcedir, $plugindir)) {
            // Rollback: restore from backup.
            @rename($backupdir, $plugindir);
            self::rmdir_recursive($extractdir);
            return ['success' => false, 'message' => 'Failed to install new version. Rolled back to previous version.'];
        }

        // Cleanup.
        self::rmdir_recursive($extractdir);
        @unlink($zippath);

        // Keep only the most recent backup, remove older ones.
        $localdir = dirname($plugindir);
        foreach (scandir($localdir) as $entry) {
            if (strpos($entry, 'ai_course_assistant.bak_') === 0) {
                $oldbackup = $localdir . '/' . $entry;
                if ($oldbackup !== $backupdir) {
                    self::rmdir_recursive($oldbackup);
                }
            }
        }

        return ['success' => true, 'message' => 'Update installed successfully. Redirecting to complete the upgrade.'];
    }

    /**
     * Find the plugin root directory inside an extracted zip.
     * Handles both direct extraction and GitHub's nested directory structure.
     */
    private static function find_plugin_root(string $dir): ?string {
        // Direct: dir contains version.php.
        if (file_exists($dir . '/version.php')) {
            return $dir;
        }

        // Look for ai_course_assistant/ subdirectory.
        foreach (scandir($dir) as $entry) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }
            $subdir = $dir . '/' . $entry;
            if (!is_dir($subdir)) {
                continue;
            }

            // Direct plugin directory.
            if ($entry === 'ai_course_assistant' && file_exists($subdir . '/version.php')) {
                return $subdir;
            }

            // GitHub zipball: random-named root dir containing ai_course_assistant/.
            $nested = $subdir . '/ai_course_assistant';
            if (is_dir($nested) && file_exists($nested . '/version.php')) {
                return $nested;
            }

            // GitHub zipball: random-named root dir IS the plugin (contains version.php directly).
            if (file_exists($subdir . '/version.php')) {
                return $subdir;
            }
        }

        return null;
    }

    /**
     * Recursively remove a directory.
     */
    private static function rmdir_recursive(string $dir): void {
        if (!is_dir($dir)) {
            return;
        }
        foreach (scandir($dir) as $entry) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }
            $path = $dir . '/' . $entry;
            if (is_dir($path)) {
                self::rmdir_recursive($path);
            } else {
                @unlink($path);
            }
        }
        @rmdir($dir);
    }
}
