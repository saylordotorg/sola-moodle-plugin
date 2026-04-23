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
 * Hook callbacks for local_ai_course_assistant.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {

    /**
     * Inject the chat widget into course pages via the before_footer hook.
     *
     * Wraps the real implementation in a try/catch so that any unexpected
     * throwable inside SOLA's widget injection cannot break page rendering.
     * The widget is non-essential; if injection fails for one request, the
     * rest of the page (navigation, content) must still render.
     *
     * @param \core\hook\output\before_footer_html_generation $hook
     */
    public static function inject_chat_widget(\core\hook\output\before_footer_html_generation $hook): void {
        try {
            self::do_inject_chat_widget($hook);
        } catch (\Throwable $e) {
            debugging('SOLA widget injection skipped: ' . $e->getMessage(),
                DEBUG_DEVELOPER, $e->getTrace());
        }
    }

    /**
     * Cascade SOLA data deletion when a Moodle user is hard-deleted.
     *
     * Invokes the plugin's conversation manager and the Privacy API manager so
     * every table SOLA owns is cleaned up in one operation. Wrapped in a
     * try/catch so a delete-cascade error cannot block the user-deleted hook
     * chain; any failure is logged for the site admin to investigate.
     *
     * @param \core\hook\user\deleted $hook
     */
    public static function on_user_deleted(\core\hook\user\deleted $hook): void {
        try {
            $user = $hook->user;
            if (empty($user) || empty($user->id)) {
                return;
            }
            // Primary path: the conversation manager owns message and conversation rows.
            \local_ai_course_assistant\conversation_manager::delete_user_data((int)$user->id);
            // Secondary path: route through the Privacy API so every other
            // plugin table (plans, reminders, feedback, surveys, UT, profiles,
            // practice scores, ratings, audit) is cleaned up by the same code
            // that services a formal data subject request.
            $contextlist = \core_privacy\manager::get_contexts_for_userid(
                (int)$user->id,
                'local_ai_course_assistant'
            );
            if ($contextlist && $contextlist->count() > 0) {
                $approved = new \core_privacy\local\request\approved_contextlist(
                    \core\user::get_user((int)$user->id) ?: (object)['id' => (int)$user->id],
                    'local_ai_course_assistant',
                    $contextlist->get_contextids()
                );
                \local_ai_course_assistant\privacy\provider::delete_data_for_user($approved);
            }
            \local_ai_course_assistant\audit_logger::log(
                'user_deleted_cascade',
                (int)$user->id,
                0,
                ['trigger' => 'core_user_deleted_hook']
            );
        } catch (\Throwable $e) {
            debugging('SOLA user_deleted cascade failed: ' . $e->getMessage(),
                DEBUG_DEVELOPER, $e->getTrace());
        }
    }

    /**
     * Internal implementation of the widget injection. Wrapped by inject_chat_widget()
     * so any throwable is caught and logged rather than breaking page rendering.
     *
     * @param \core\hook\output\before_footer_html_generation $hook
     */
    protected static function do_inject_chat_widget(\core\hook\output\before_footer_html_generation $hook): void {
        global $PAGE, $USER, $OUTPUT, $DB;

        // Check if plugin is enabled.
        if (!get_config('local_ai_course_assistant', 'enabled')) {
            return;
        }

        // Only inject on course or module context pages.
        $context = $PAGE->context;
        if ($context->contextlevel !== CONTEXT_COURSE && $context->contextlevel !== CONTEXT_MODULE) {
            return;
        }

        // Skip admin layout pages (e.g. Course AI Settings, Analytics, RAG Admin).
        // The widget is for student-facing course pages, not administration.
        if (($PAGE->pagelayout ?? '') === 'admin') {
            return;
        }

        // Get the course context (may need to go up from module context).
        if ($context->contextlevel === CONTEXT_MODULE) {
            $coursecontext = $context->get_course_context();
        } else {
            $coursecontext = $context;
        }

        // Don't show on site home (course id 1).
        $courseid = $coursecontext->instanceid;
        if ($courseid == SITEID) {
            return;
        }

        // Remember the last course visited for admins, so the global settings
        // page can offer a "back to last course" shortcut. Non-admins skip this
        // to avoid pointless user_preferences writes.
        if (is_siteadmin() || has_capability('moodle/site:config', \context_system::instance())) {
            $lastpref = (int) get_user_preferences('local_ai_course_assistant_last_courseid', 0);
            if ($lastpref !== (int) $courseid) {
                set_user_preference('local_ai_course_assistant_last_courseid', (int) $courseid);
            }
        }

        // Check capability.
        if (!has_capability('local/ai_course_assistant:use', $coursecontext)) {
            return;
        }

        // Per-course SOLA enable check. Honours the site-wide
        // default_course_mode setting: new installs default to 'per_course'
        // (opt-in), upgraded installs default to 'all' (legacy behaviour).
        if (!course_config_manager::is_enabled_for_course($courseid)) {
            return;
        }

        // Later logic always needs the full course record, even when learning
        // objectives are discovered from page content and the summary fallback is skipped.
        $course = get_course($courseid);

        // Hide in edit mode — widget competes with course editing controls.
        if ($PAGE->user_is_editing()) {
            return;
        }

        // Hide in excluded course categories (e.g. "Course Development").
        $hiddencats = trim((string) get_config('local_ai_course_assistant', 'hidden_categories'));
        if ($hiddencats !== '') {
            $catid = (int) $course->category;
            $catname = '';
            try {
                $cat = \core_course_category::get($catid, IGNORE_MISSING);
                $catname = $cat ? $cat->name : '';
            } catch (\Throwable $e) {
                $catname = '';
            }
            $excludes = array_map('trim', explode(',', $hiddencats));
            foreach ($excludes as $exc) {
                if ($exc !== '' && ($exc === (string) $catid || strcasecmp($exc, $catname) === 0)) {
                    return;
                }
            }
        }

        $userrole = context_builder::detect_role($courseid, $USER->id);

        // Student mode: admins can toggle into student view for demos and
        // testing. URL param ?sola_student_mode=1 enters, Ctrl+Shift+A or
        // ?sola_student_mode=0 exits. Session-scoped.
        $isadmin = has_capability('local/ai_course_assistant:manage', $coursecontext);
        if ($isadmin) {
            $modeparam = optional_param('sola_student_mode', -1, PARAM_INT);
            if ($modeparam === 1) {
                $_SESSION['sola_student_mode'] = true;
            } else if ($modeparam === 0) {
                unset($_SESSION['sola_student_mode']);
            }
        }
        $studentmode = $isadmin && !empty($_SESSION['sola_student_mode']);

        // Quiz hide: optionally suppress widget on all quiz pages (stricter than quizLocked).
        $hideonquizforstudents = (bool)get_config('local_ai_course_assistant', 'hide_on_quiz_for_students');
        $hideonquizforstaff = (bool)get_config('local_ai_course_assistant', 'hide_on_quiz_for_staff');
        $pagetype = $PAGE->pagetype ?? '';
        $modname_early = '';
        if ($context->contextlevel === CONTEXT_MODULE && !empty($PAGE->cm)) {
            $modname_early = (string)($PAGE->cm->modname ?? '');
        }
        $isquizpage = ($modname_early === 'quiz') || (strpos((string)$pagetype, 'mod-quiz-') === 0);
        if ($isquizpage && (
            ($hideonquizforstudents && $userrole === 'student') ||
            ($hideonquizforstaff && $userrole !== 'student')
        )) {
            return;
        }

        // Get config values.
        $position = get_config('local_ai_course_assistant', 'position') ?: 'bottom-right';
        $displaymode = get_config('local_ai_course_assistant', 'display_mode') ?: 'drawer';

        // User's personally chosen avatar (falls back to site default).
        $useravatar = \get_user_preferences('local_ai_course_assistant_avatar', null);
        $avatar = $useravatar ?: (get_config('local_ai_course_assistant', 'avatar') ?: 'avatar_01');

        // Pull admin-uploaded custom avatars first so we can resolve custom:* URLs
        // and include them in the per-user picker. __DIR__ is reliable regardless
        // of whether callers have globalised $CFG in this scope.
        require_once(__DIR__ . '/../lib.php');
        $customavatars = local_ai_course_assistant_get_custom_avatars();
        $custommap = [];
        foreach ($customavatars as $ca) {
            $custommap[$ca['key']] = $ca['url'];
        }

        // Build avatar URL: custom:* maps to an uploaded file; built-ins use pix/avatars.
        if (isset($custommap[$avatar])) {
            $avatarurl = $custommap[$avatar];
        } else {
            $avatarurl = $OUTPUT->image_url("avatars/{$avatar}", 'local_ai_course_assistant')->out(false);
        }

        // Build list of all available avatars as JSON for the picker.
        $availableavatars = [];
        for ($i = 1; $i <= 10; $i++) {
            $id = 'avatar_' . str_pad((string)$i, 2, '0', STR_PAD_LEFT);
            $availableavatars[] = [
                'id'  => $id,
                'url' => $OUTPUT->image_url("avatars/{$id}", 'local_ai_course_assistant')->out(false),
            ];
        }
        foreach ($customavatars as $ca) {
            $availableavatars[] = [
                'id'  => $ca['key'],
                'url' => $ca['url'],
            ];
        }

        // Build SSE URL.
        $sseurl = new \moodle_url('/local/ai_course_assistant/sse.php');

        // Analytics: site admins only.
        $canviewanalytics = has_capability('moodle/site:config', \context_system::instance());
        $analyticsurl = new \moodle_url('/local/ai_course_assistant/analytics.php', ['courseid' => $courseid]);

        // Check if user can access course-level AI settings (editing teachers, managers, admins).
        $cansiteconfig = has_capability('local/ai_course_assistant:manage', $coursecontext);
        $coursesettingsurl = new \moodle_url('/local/ai_course_assistant/course_settings.php', ['courseid' => $courseid]);

        // Student mode: suppress all admin UI elements so the admin sees
        // exactly what a student sees. The role is also overridden to
        // 'student' so the system prompt matches the student experience.
        if ($studentmode) {
            $cansiteconfig = false;
            $canviewanalytics = false;
            $userrole = 'student';
        }

        // Build quiz topics from visible course sections, filtering out
        // non-content sections (enrollment, feedback, certificates, etc.).
        $modinfo = get_fast_modinfo($courseid);
        $quizsections = [];
        $excludepatterns = [
            '/\benroll/i', '/\benrol/i', '/\bregistr/i',
            '/\bcertificate/i', '/\bfinal\s*exam/i',
            '/\bfeedback\s*(survey|form)?/i', '/\bsurvey/i',
            '/\bcompletion/i', '/\bupon\s*successful/i',
            '/\bcourse\s*evaluation/i', '/\borientation/i',
            '/\bsyllabus/i', '/\bgetting\s*started/i',
        ];
        foreach ($modinfo->get_section_info_all() as $s) {
            if (!$s->visible) {
                continue;
            }
            $name = get_section_name($courseid, $s);
            if (empty($name) || $name === 'General') {
                continue;
            }
            $skip = false;
            foreach ($excludepatterns as $pattern) {
                if (preg_match($pattern, $name)) {
                    $skip = true;
                    break;
                }
            }
            if (!$skip) {
                $quizsections[] = ['name' => $name];
            }
        }

        // Build learning objectives by scanning "Unit X Learning Outcomes" pages.
        // Supports two Saylor formats:
        //   1. GENERICO tags: {GENERICO:type="unit_learning_objectives",unit_objectives="[1]..."}
        //   2. HTML bullet lists: "Upon successful completion..." followed by <li> items
        $learningobjectives = [];
        foreach ($modinfo->get_cms() as $cm) {
            if (!$cm->uservisible || empty($cm->name)) {
                continue;
            }
            $lower = strtolower($cm->name);
            if (strpos($lower, 'learning outcome') === false
                && strpos($lower, 'learning objective') === false) {
                continue;
            }
            if ($cm->modname !== 'page') {
                continue;
            }
            try {
                $page = $DB->get_record('page', ['id' => $cm->instance, 'course' => $courseid]);
                if (!$page || empty($page->content)) {
                    continue;
                }
                $content = $page->content;
                // Extract unit label from page name (e.g. "Unit 3 Learning Outcomes" -> "Unit 3").
                $unitlabel = '';
                if (preg_match('/^(Unit\s+\d+)/i', $cm->name, $um)) {
                    $unitlabel = $um[1] . ': ';
                }
                // Format 1: GENERICO tag with numbered objectives.
                if (preg_match('/unit_objectives="([^"]+)"/', $content, $gm)) {
                    $raw = $gm[1];
                    // Split on [N] markers.
                    $parts = preg_split('/\[\d+\]\s*/', $raw, -1, PREG_SPLIT_NO_EMPTY);
                    foreach ($parts as $part) {
                        $obj = trim(strip_tags($part), " ;\t\n\r\0\x0B");
                        if (strlen($obj) > 10) {
                            $learningobjectives[] = ['name' => $unitlabel . $obj];
                        }
                    }
                    continue;
                }
                // Format 2: HTML list items.
                if (preg_match_all('/<li[^>]*>(.*?)<\/li>/si', $content, $lm)) {
                    foreach ($lm[1] as $li) {
                        $obj = trim(strip_tags($li), " ;\t\n\r\0\x0B.");
                        if (strlen($obj) > 10) {
                            $learningobjectives[] = ['name' => $unitlabel . $obj];
                        }
                    }
                    continue;
                }
                // Format 3: Plain text bullet/numbered lines (fallback).
                $plaintext = strip_tags($content);
                foreach (preg_split('/[\r\n]+/', $plaintext) as $line) {
                    $line = trim(ltrim(trim($line), '-•*0123456789.)'));
                    if (strlen($line) > 10 && stripos($line, 'upon successful') === false) {
                        $learningobjectives[] = ['name' => $unitlabel . $line];
                    }
                }
            } catch (\Throwable $e) {
                // Skip pages that can't be read.
            }
        }
        // Fallback: if no learning outcome pages found, parse course summary.
        if (empty($learningobjectives)) {
            if (!empty($course->summary)) {
                $plaintext = strip_tags($course->summary);
                foreach (preg_split('/[\r\n]+/', $plaintext) as $line) {
                    $line = trim(ltrim(trim($line), '-•*0123456789.)'));
                    if (strlen($line) > 10) {
                        $learningobjectives[] = ['name' => $line];
                    }
                }
            }
        }

        // Build module/activity titles from course structure.
        $moduletitles = [];
        foreach ($modinfo->get_cms() as $cm) {
            if ($cm->uservisible && !empty($cm->name)) {
                $moduletitles[] = ['name' => $cm->name];
            }
        }

        // Detect current module context (resource/activity page).
        $currentpageid = 0;
        $currentpagetitle = '';
        $modname = '';
        $pagetype = $PAGE->pagetype ?? '';
        if ($context->contextlevel === CONTEXT_MODULE && !empty($PAGE->cm)) {
            $currentpageid    = (int)$PAGE->cm->id;
            $currentpagetitle = (string)($PAGE->cm->name ?? '');
            $modname          = (string)($PAGE->cm->modname ?? '');
        }

        // Lock SOLA during summative quiz view/attempt pages.
        // Practice and formative quizzes (grade = 0 in gradebook) are excluded.
        // Quiz review pages are always allowed — student is learning from completed feedback.
        $quizlocked = false;
        if ($modname === 'quiz' && !empty($PAGE->cm) && (
            strpos($pagetype, 'attempt') !== false ||
            strpos($pagetype, 'view') !== false
        )) {
            $quizrecord = $DB->get_record('quiz', ['id' => $PAGE->cm->instance], 'grade', IGNORE_MISSING);
            $issummative = !empty($quizrecord) && (float)$quizrecord->grade > 0;
            $quizlocked = $issummative;
        }

        // Position offsets for fine-grained widget placement.
        $offsetx = (int)(get_config('local_ai_course_assistant', 'position_offset_x') ?: 95);
        $offsety = (int)(get_config('local_ai_course_assistant', 'position_offset_y') ?: 20);

        // Voice mode availability (global flags only; per-course control via starter toggles).
        $realtimeenabled = (bool)get_config('local_ai_course_assistant', 'realtime_enabled');
        $realtimeapikey = get_config('local_ai_course_assistant', 'realtime_apikey');
        $provider       = get_config('local_ai_course_assistant', 'provider');
        $mainapikey     = get_config('local_ai_course_assistant', 'apikey');
        $hasttskey = !empty($realtimeapikey) || ($provider === 'openai' && !empty($mainapikey));
        $ttsurl = $hasttskey
            ? (new \moodle_url('/local/ai_course_assistant/tts.php'))->out(false)
            : '';

        // Calculate course completion percentage.
        $completionpct = 0;
        $completioninfo = new \completion_info($course);
        if ($completioninfo->is_enabled()) {
            $activities = $completioninfo->get_activities();
            if (!empty($activities)) {
                $completed = 0;
                foreach ($activities as $act) {
                    $data = $completioninfo->get_data($act, $USER->id);
                    if ($data->completionstate != COMPLETION_INCOMPLETE) {
                        $completed++;
                    }
                }
                $completionpct = round(($completed / count($activities)) * 100);
            }
        }

        // Load conversation starters from config.
        $starters = \local_ai_course_assistant\starter_manager::get_effective_starters(
            $courseid, !empty($ttsurl), $realtimeenabled
        );

        // Starter icon color (CSS custom property).
        $startericoncolor = get_config('local_ai_course_assistant', 'starter_icon_color') ?: '#023e8a';

        // Whether user has dismissed the intro overlay.
        $introdismissed = (bool)\get_user_preferences('local_ai_course_assistant_intro_dismissed', false);

        // Default TTS voice.
        $defaultvoice = get_config('local_ai_course_assistant', 'realtime_voice') ?: 'marin';

        // Context level name for debug panel.
        $contextlevelname = $context->contextlevel === CONTEXT_MODULE ? 'Module' : 'Course';

        // Server page context for debug panel and page grounding.
        $serverpageurl = $PAGE->url ? $PAGE->url->out(false) : '';
        $serverpagetitle = $PAGE->title ?? '';
        $serverpageheading = $PAGE->heading ?? '';

        // Build LLM options JSON for composer model switcher (admin-only feature).
        // Primary provider is always first; comparison providers parsed from the
        // comparison_providers admin setting (one line per provider, pipe-delimited).
        $llmoptions = [];
        if ($cansiteconfig) {
            $configprovider = get_config('local_ai_course_assistant', 'provider') ?: 'openai';
            $configmodel = get_config('local_ai_course_assistant', 'model') ?: '';
            $providers = [
                [
                    'id' => $configprovider,
                    'label' => ucfirst($configprovider) . ' (primary)',
                    'models' => $configmodel
                        ? [['id' => $configmodel, 'label' => $configmodel, 'status' => 'active']]
                        : [],
                ],
            ];
            $seen = [$configprovider => true];
            $compraw = get_config('local_ai_course_assistant', 'comparison_providers') ?: '';
            foreach (explode("\n", $compraw) as $line) {
                $line = trim($line);
                if ($line === '' || $line[0] === '#') {
                    continue;
                }
                $parts = array_map('trim', explode('|', $line));
                if (count($parts) < 2) {
                    continue;
                }
                $pid = strtolower($parts[0]);
                if (!empty($seen[$pid])) {
                    continue;
                }
                $seen[$pid] = true;
                $models = [];
                if (!empty($parts[2])) {
                    foreach (explode(',', $parts[2]) as $m) {
                        $m = trim($m);
                        if ($m !== '') {
                            $models[] = ['id' => $m, 'label' => $m, 'status' => 'active'];
                        }
                    }
                }
                $providers[] = [
                    'id' => $pid,
                    'label' => ucfirst($pid),
                    'models' => $models,
                ];
            }
            $llmoptions = [
                'enabled' => true,
                'providers' => $providers,
            ];
        }

        // Whether admin-configured starters exist (controls fallback defaults in template).
        $hasstarterdata = !empty($starters);

        // Render template.
        $templatedata = [
            'courseid'           => $courseid,
            'sesskey'            => sesskey(),
            'avatarurl'          => $avatarurl,
            'availableavatars'   => json_encode($availableavatars),
            'positionclass'      => $position,
            'userrole'           => $userrole,
            'sseurl'             => $sseurl->out(false),
            'canviewanalytics'   => $canviewanalytics,
            'analyticsurl'       => $analyticsurl->out(false),
            'cansiteconfig'      => $cansiteconfig,
            'coursesettingsurl'  => $coursesettingsurl->out(false),
            'quiztopics'         => json_encode($quizsections),
            'learningobjectives' => json_encode($learningobjectives),
            'moduletitles'       => json_encode($moduletitles),
            'offsetx'            => $offsetx,
            'offsety'            => $offsety,
            'userid'             => $USER->id,
            'firstname'          => $USER->firstname,
            'currentpageid'      => $currentpageid,
            'currentpagetitle'   => $currentpagetitle,
            'modname'            => $modname,
            'pagetype'           => $pagetype,
            'quizlocked'         => $quizlocked,
            'realtimeenabled'         => $realtimeenabled,
            'ellpronunciationenabled' => $realtimeenabled,
            'ttsurl'             => $ttsurl,
            'avatarcolor'        => get_config('local_ai_course_assistant', 'avatar_color') ?: '#152233',
            'avatarfill'         => get_config('local_ai_course_assistant', 'avatar_fill') ?: '#ffffff',
            'displaymode'        => $displaymode,
            'drawermode'         => ($displaymode === 'drawer'),
            'autoopen'           => self::is_autoopen_for_course($courseid),
            'studentmode'        => $studentmode,
            'displayname'        => get_config('local_ai_course_assistant', 'display_name') ?: 'Saylor Online Learning Assistant',
            'institution'        => get_config('local_ai_course_assistant', 'institution_name') ?: 'Saylor University',
            'institutionshort'   => get_config('local_ai_course_assistant', 'institution_short_name') ?: 'Saylor U',
            'practicescoring'    => (bool)get_config('local_ai_course_assistant', 'practice_scoring_enabled'),
            'shortname_label'    => get_config('local_ai_course_assistant', 'short_name') ?: 'SOLA',
            'welcomemessage'     => get_config('local_ai_course_assistant', 'welcome_message') ?: '',
            'chatgreeting'       => get_config('local_ai_course_assistant', 'chat_greeting') ?: '',
            'coursename'         => $course->fullname,
            'emailreminders'     => (bool)get_config('local_ai_course_assistant', 'reminders_email_enabled'),
            'whatsappreminders'  => (bool)get_config('local_ai_course_assistant', 'reminders_whatsapp_enabled'),
            'useremail'          => $USER->email,
            'userphone'          => $USER->phone1 ?: '',
            'usertestingenabled'  => self::is_usertesting_enabled($courseid),
            'usertestingexternalurl' => get_config('local_ai_course_assistant', 'usertesting_external_url') ?: '',
            'surveyenabled'      => get_config('local_ai_course_assistant', 'survey_enabled') !== '0' ? '1' : '0',
            'surveytrigger'      => (int)(get_config('local_ai_course_assistant', 'survey_trigger_messages') ?: 10),
            'completionpct'      => $completionpct,
            'contextdebugvisible' => $cansiteconfig,
            'starters'           => $starters,
            'startersjson'       => json_encode($starters),
            'startericoncolor'   => $startericoncolor,
            'introdismissed'     => $introdismissed,
            'defaultvoice'       => $defaultvoice,
            'contextlevelname'   => $contextlevelname,
            'serverpageurl'      => $serverpageurl,
            'serverpagetitle'    => $serverpagetitle,
            'serverpageheading'  => $serverpageheading,
            'llmoptionsjson'     => json_encode($llmoptions),
            'hasstarterdata'     => $hasstarterdata,
            'voicetabenabled'    => self::is_voice_tab_enabled($courseid),
            'voiceenabled'       => \local_ai_course_assistant\voice_registry::any_voice_enabled(),
            'consentgiven'       => (bool) get_user_preferences('aica_sola_consent_given', 0),
            'consenturl'         => (new \moodle_url('/local/ai_course_assistant/consent.php'))->out(false),
            'privacynoticeurl'   => (new \moodle_url('/local/ai_course_assistant/privacy.php'))->out(false),
            // Pre-substituted consent banner strings. Mustache cannot pass an
            // object through {{#str}}, so we format in PHP and let the
            // template consume the final text via {{consent_*}}.
            'consent_heading'    => get_string('chat:consent_heading', 'local_ai_course_assistant',
                \local_ai_course_assistant\branding::short_name()),
            'consent_body'       => get_string('chat:consent_body', 'local_ai_course_assistant',
                (object)[
                    'product'     => \local_ai_course_assistant\branding::short_name(),
                    'institution' => \local_ai_course_assistant\branding::institution_name(),
                ]),
            'consent_accept'     => get_string('chat:consent_accept', 'local_ai_course_assistant',
                \local_ai_course_assistant\branding::short_name()),
            'englishlock'        => (bool)get_config('local_ai_course_assistant', 'english_lock_course_' . $courseid),
        ];

        // CDN mode: serve JS/CSS from external CDN instead of Moodle's AMD loader.
        $cdnurl = get_config('local_ai_course_assistant', 'cdn_url');
        if (!empty($cdnurl)) {
            $cdnversion = get_config('local_ai_course_assistant', 'cdn_version') ?: '';
            $qs = $cdnversion ? '?v=' . urlencode($cdnversion) : '';
            $templatedata['use_cdn'] = true;
            $templatedata['cdn_js_url'] = rtrim($cdnurl, '/') . '/sola.min.js' . $qs;
            $templatedata['cdn_css_url'] = rtrim($cdnurl, '/') . '/sola.min.css' . $qs;
            $templatedata['i18n_json'] = json_encode(self::get_js_strings());
        }

        $html = $OUTPUT->render_from_template('local_ai_course_assistant/chat_widget', $templatedata);

        // Load JS: CDN mode uses <script> tags in the template; local mode uses AMD loader.
        if (empty($cdnurl)) {
            $PAGE->requires->js_call_amd('local_ai_course_assistant/chat', 'init');
        }

        $hook->add_html($html);
    }

    /**
     * Get all i18n string keys used by JS at runtime (for CDN mode pre-loading).
     *
     * These are the strings fetched via Str.get_string() / Str.get_strings()
     * in chat.js and quiz.js. Template-level {{#str}} strings are resolved
     * server-side by Moodle and do not need to be included here.
     *
     * @return array Associative array of string key => translated value.
     */
    private static function get_js_strings(): array {
        $keys = [
            // chat.js strings.
            'chat:greeting',
            'chat:error',
            'chat:error_auth',
            'chat:error_ratelimit',
            'chat:error_unavailable',
            'chat:clear_confirm',
            'chat:copied',
            'chat:copy_failed',
            'chat:mic_error',
            'chat:mic_unsupported',
            'chat:quiz_error',
            'chat:quiz_locked',
            'chat:topic_picker_title',
            'chat:topic_picker_title_explain',
            'chat:topic_start',
            // quiz.js strings.
            'chat:quiz_setup_title',
            'chat:quiz_questions',
            'chat:quiz_topic',
            'chat:quiz_topic_guided',
            'chat:quiz_topic_default',
            'chat:quiz_topic_custom',
            'chat:quiz_custom_placeholder',
            'chat:quiz_start',
            'chat:quiz_cancel',
            'chat:quiz_topic_objectives',
            'chat:quiz_topic_modules',
            'chat:quiz_subtopic_select',
            'chat:quiz_correct',
            'chat:quiz_wrong',
            'chat:quiz_next',
            'chat:quiz_finish',
            'chat:quiz_score',
            'chat:quiz_review_heading',
            'chat:quiz_retake',
            'chat:quiz_your_answer',
            'chat:quiz_correct_answer',
            'chat:quiz_exit',
            'chat:quiz_score_great',
            'chat:quiz_score_good',
            'chat:quiz_score_practice',
        ];

        $strings = [];
        foreach ($keys as $key) {
            $strings[$key] = get_string($key, 'local_ai_course_assistant');
        }
        return $strings;
    }

    /**
     * Check if the voice tab is enabled for a given course.
     *
     * Per-course override takes precedence over the global setting.
     * Values: '' (not set) = inherit global, '1' = force on, '0' = force off.
     *
     * @param int $courseid
     * @return bool
     */
    private static function is_voice_tab_enabled(int $courseid): bool {
        $per_course = get_config('local_ai_course_assistant', 'sola_voicetab_course_' . $courseid);
        if ($per_course === '1') {
            return true;
        }
        if ($per_course === '0') {
            return false;
        }
        // Inherit global setting.
        return (bool) get_config('local_ai_course_assistant', 'voice_tab_enabled');
    }

    /**
     * Check if user testing is enabled for a given course.
     *
     * Per-course override takes precedence over the global setting.
     * Values: '' (not set) = inherit global, '1' = force on, '0' = force off.
     *
     * @param int $courseid
     * @return bool
     */
    private static function is_usertesting_enabled(int $courseid): bool {
        $per_course = get_config('local_ai_course_assistant', 'sola_usertesting_course_' . $courseid);
        if ($per_course === '1') {
            return true;
        }
        if ($per_course === '0') {
            return false;
        }
        // Inherit global setting.
        return (bool) get_config('local_ai_course_assistant', 'usertesting_enabled');
    }

    /**
     * Check if auto-open (drawer opens on first course visit) is enabled for a given course.
     *
     * Per-course override takes precedence over the global setting.
     * Values: '' (not set) = inherit global, '1' = force on, '0' = force off.
     *
     * @param int $courseid
     * @return bool
     */
    private static function is_autoopen_for_course(int $courseid): bool {
        $per_course = get_config('local_ai_course_assistant', 'sola_autoopen_course_' . $courseid);
        if ($per_course === '1') {
            return true;
        }
        if ($per_course === '0') {
            return false;
        }
        return (bool) get_config('local_ai_course_assistant', 'auto_open');
    }
}
