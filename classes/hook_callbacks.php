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
     * @param \core\hook\output\before_footer_html_generation $hook
     */
    public static function inject_chat_widget(\core\hook\output\before_footer_html_generation $hook): void {
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

        // Check capability.
        if (!has_capability('local/ai_course_assistant:use', $coursecontext)) {
            return;
        }

        // Per-course SOLA disable check (default: enabled).
        $courseEnabled = get_config('local_ai_course_assistant', 'sola_enabled_course_' . $courseid);
        if ($courseEnabled === '0') {
            return;
        }

        // Detect role: administrator > academic_support > student.
        if (has_capability('local/ai_course_assistant:manage', $coursecontext)) {
            $userrole = 'administrator';
        } else if (has_capability('moodle/course:update', $coursecontext)) {
            $userrole = 'academic_support';
        } else {
            $userrole = 'student';
        }

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

        // Build avatar URL.
        $avatarurl = $OUTPUT->image_url("avatars/{$avatar}", 'local_ai_course_assistant')->out(false);

        // Build list of all available avatars as JSON for the picker.
        $availableavatars = [];
        for ($i = 1; $i <= 10; $i++) {
            $id = 'avatar_' . str_pad((string)$i, 2, '0', STR_PAD_LEFT);
            $availableavatars[] = [
                'id'  => $id,
                'url' => $OUTPUT->image_url("avatars/{$id}", 'local_ai_course_assistant')->out(false),
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

        // Build quiz topics from visible course sections.
        $modinfo = get_fast_modinfo($courseid);
        $quizsections = [];
        foreach ($modinfo->get_section_info_all() as $s) {
            if ($s->visible && ($name = get_section_name($courseid, $s)) && $name !== 'General') {
                $quizsections[] = ['name' => $name];
            }
        }

        // Build learning objectives from course summary (parse bullet/numbered list lines).
        $learningobjectives = [];
        $course = get_course($courseid);
        if (!empty($course->summary)) {
            $plaintext = strip_tags($course->summary);
            foreach (preg_split('/[\r\n]+/', $plaintext) as $line) {
                $line = trim(ltrim(trim($line), '-•*0123456789.)'));
                if (strlen($line) > 10) {
                    $learningobjectives[] = ['name' => $line];
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
        $startericoncolor = get_config('local_ai_course_assistant', 'starter_icon_color') ?: '#173140';

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
        $llmoptions = [];
        if ($cansiteconfig) {
            $configprovider = get_config('local_ai_course_assistant', 'provider') ?: 'openai';
            $configmodel = get_config('local_ai_course_assistant', 'model') ?: '';
            $llmoptions = [
                'enabled' => true,
                'providers' => [
                    [
                        'id' => $configprovider,
                        'label' => ucfirst($configprovider),
                        'models' => $configmodel ? [['id' => $configmodel, 'label' => $configmodel, 'status' => 'active']] : [],
                    ],
                ],
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
            'avatarcolor'        => get_config('local_ai_course_assistant', 'avatar_color') ?: '#173140',
            'avatarfill'         => get_config('local_ai_course_assistant', 'avatar_fill') ?: '#ffffff',
            'displaymode'        => $displaymode,
            'displayname'        => get_config('local_ai_course_assistant', 'display_name') ?: 'SOLA',
            'institution'        => get_config('local_ai_course_assistant', 'institution_name') ?: 'Saylor University',
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
        ];

        $html = $OUTPUT->render_from_template('local_ai_course_assistant/chat_widget', $templatedata);

        // Load AMD module.
        $PAGE->requires->js_call_amd('local_ai_course_assistant/chat', 'init');

        $hook->add_html($html);
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
        $perCourse = get_config('local_ai_course_assistant', 'sola_usertesting_course_' . $courseid);
        if ($perCourse === '1') {
            return true;
        }
        if ($perCourse === '0') {
            return false;
        }
        // Inherit global setting.
        return (bool) get_config('local_ai_course_assistant', 'usertesting_enabled');
    }
}
