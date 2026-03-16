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
 * Context builder — constructs AI system prompts from course data.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class context_builder {

    /**
     * Maximum system prompt length in characters.
     * Claude Sonnet 4.6 has a 200K-token context window; 60K chars (~15K tokens)
     * leaves ample room for conversation history while allowing full course content.
     */
    private const MAX_PROMPT_LENGTH = 60000;

    /**
     * Build the system prompt for a course and user.
     *
     * When $retrieved_chunks is non-empty (RAG mode), course content in the prompt
     * is replaced with those semantically-retrieved chunks instead of full content stuffing.
     * When empty, the existing build_course_content() behavior is used as fallback.
     *
     * Uses caching for performance optimization (only when NOT in RAG mode, since
     * RAG chunks are query-specific and must not be cached globally).
     *
     * @param int    $courseid
     * @param int    $userid
     * @param string $lang            ISO 639-1 language preference (e.g. 'fr', 'es').
     *                                Empty string means auto-detect from student's writing.
     * @param array  $retrieved_chunks Optional RAG chunks: [['content'=>string, 'score'=>float], ...]
     * @return string The complete system prompt.
     */
    public static function build_system_prompt(
        int $courseid,
        int $userid,
        string $lang = '',
        array $retrieved_chunks = [],
        int $pageid = 0,
        string $pagetitle = ''
    ): string {
        global $DB;

        $ragmode = !empty($retrieved_chunks);

        // Use cache only when NOT in RAG mode (RAG content is query-specific).
        if (!$ragmode) {
            $cache = \cache::make('local_ai_course_assistant', 'systemprompt');
            $cachekey = "prompt_{$courseid}_{$userid}_" . ($lang ?: 'auto');
            $cached = $cache->get($cachekey);
            if ($cached !== false) {
                return $cached;
            }
        }

        $course = $DB->get_record('course', ['id' => $courseid], '*', MUST_EXIST);
        $userrecord = $DB->get_record('user', ['id' => $userid], 'firstname', MUST_EXIST);
        $firstname = $userrecord->firstname;
        $coursecontext = \context_course::instance($courseid);

        // Detect role: administrator > academic_support > student.
        if (has_capability('local/ai_course_assistant:manage', $coursecontext, $userid)) {
            $userrole = 'administrator';
        } else if (has_capability('moodle/course:update', $coursecontext, $userid)) {
            $userrole = 'academic_support';
        } else {
            $userrole = 'student';
        }

        // Build course structure (section names + activity list).
        $coursetopics = self::build_course_topics($courseid);

        // Determine course content: RAG chunks or full content stuffing.
        if ($ragmode) {
            $coursecontent = "### Relevant course content\n\n"
                . implode("\n\n---\n\n", array_column($retrieved_chunks, 'content'));
        } else {
            $coursecontent = self::build_course_content($courseid);
        }

        // Get template: local admin setting → remote config → lang string default.
        $template = get_config('local_ai_course_assistant', 'systemprompt');
        if (empty($template)) {
            $template = remote_config_manager::get_value(
                'system_prompt',
                get_string('settings:systemprompt_default', 'local_ai_course_assistant')
            );
        }

        // Dynamic display name from admin settings.
        $displayName = get_config('local_ai_course_assistant', 'display_name') ?: 'SOLA';

        // Institution name from settings.
        $institution = get_config('local_ai_course_assistant', 'institution_name') ?: 'Saylor University';

        // Replace placeholders.
        $prompt = str_replace(
            ['{{coursename}}', '{{userrole}}', '{{coursetopics}}', '{{coursecontent}}', '{{institution}}'],
            [$course->fullname, $userrole, $coursetopics, $coursecontent, $institution],
            $template
        );

        // Replace hardcoded "SOLA" identity with configurable display name.
        $prompt = str_replace('You are SOLA', 'You are ' . $displayName, $prompt);

        // If the template doesn't include {{coursecontent}} but we have content, append it.
        if (!empty($coursecontent) && strpos($template, '{{coursecontent}}') === false) {
            $prompt .= "\n\n## Course Content\n" . $coursecontent;
        }

        // Append personalization instructions (uses student's first name).
        $prompt .= self::get_personalization_instructions($firstname);

        // Append role-specific instructions.
        $prompt .= "\n\n" . self::get_role_instructions($userrole);

        // Append FAQ content if configured.
        $faq = faq_manager::get_faq_for_prompt();
        if (!empty($faq)) {
            $prompt .= "\n\n## Support FAQ\n" . $faq;
            $prompt .= "\nIf a student asks a support question, try to answer it using the FAQ above. "
                . "If you cannot find a relevant answer in the FAQ and the question is a support/administrative issue "
                . "(not a course content question), include the marker [NEEDS_ESCALATION] at the very end of your response. "
                . "This marker will be detected by the system and a support ticket will be created automatically.";
        }

        // Append widget feature awareness so the AI can guide students to existing UI features.
        $prompt .= self::get_widget_feature_instructions();

        // Append off-topic detection instructions.
        if (get_config('local_ai_course_assistant', 'offtopic_enabled')) {
            $prompt .= "\n\n## Off-topic Detection\n"
                . "Monitor whether the user's messages are related to this course, its subject matter, "
                . "study skills, support questions, or using AI tools for learning. "
                . "If a message is clearly unrelated (e.g. personal conversations, requests about other subjects, "
                . "entertainment, or anything not connected to the course or education), include the marker "
                . "[OFF_TOPIC] at the very end of your response. Politely redirect the student back to "
                . "course-related topics. The [OFF_TOPIC] marker must be the last thing in your response "
                . "and will be hidden from the student.";
        }

        // Append study planning context.
        $prompt .= study_planner::get_plan_context($userid, $courseid);

        // Append wellbeing/safety instructions if enabled.
        if (get_config('local_ai_course_assistant', 'wellbeing_enabled')) {
            $prompt .= self::get_wellbeing_instructions();
        }

        // Append struggle detection instructions.
        $prompt .= self::get_struggle_detection_instructions();

        // Append AI literacy instructions.
        $prompt .= self::get_ai_literacy_instructions();

        // Append source attribution instructions.
        $prompt .= self::get_source_attribution_instructions();

        // Append next-steps suggestion instructions.
        $prompt .= self::get_next_steps_instructions();

        // Append practice scoring instructions.
        $prompt .= self::get_scoring_instructions();

        // Append multilingual instructions (with explicit language if set).
        $prompt .= self::get_multilingual_instructions($lang);

        // Brevity instruction — keep responses scannable in the small widget.
        $remote_blocks = remote_config_manager::get_value('instruction_blocks', []);
        if (!empty($remote_blocks['brevity'])) {
            $prompt .= "\n\n" . $remote_blocks['brevity'];
        } else {
            $prompt .= "\n\nKEEP RESPONSES BRIEF: Use 2-4 short sentences or bullet points unless the student "
                . "explicitly asks for more detail. After answering, you may add a short follow-up offer like "
                . "\"Want me to go deeper on any part?\" — but only occasionally, not every time.";
        }

        // Truncate if needed.
        $prompt = self::truncate_prompt($prompt, $courseid);

        // Cache only for non-RAG mode (RAG prompts are query-specific).
        if (!$ragmode) {
            $cache->set($cachekey, $prompt);
        }

        // Append current-page context AFTER caching — it is per-request, not per-course.
        if (!empty($pagetitle)) {
            $prompt .= "\n\n## Current Page\n"
                . "The student is currently viewing the resource or activity titled: \"{$pagetitle}\". "
                . "When relevant, tailor your explanations and examples to this specific page or topic.";
        }

        return $prompt;
    }

    /**
     * Public wrapper so external classes can access the course topics text.
     *
     * @param int $courseid
     * @return string
     */
    public static function get_course_topics_text(int $courseid): string {
        return self::build_course_topics($courseid);
    }

    /**
     * Extract readable text content from a single course module (page or book).
     * Used by quiz generation and system prompt page injection.
     *
     * @param int $cmid Course module ID
     * @param int $maxchars Maximum characters to return (default 6000 for quizzes, 12000 for prompt injection).
     * @return string Extracted text, or empty string if unavailable/unsupported.
     */
    public static function get_module_content(int $cmid, int $maxchars = 6000): string {
        global $DB;

        try {
            $cmrec  = $DB->get_record('course_modules', ['id' => $cmid], 'id,course,module,instance', MUST_EXIST);
            $module = $DB->get_record('modules', ['id' => $cmrec->module], 'name', MUST_EXIST);
            $modname  = $module->name;
            $courseid = (int) $cmrec->course;
            $instance = (int) $cmrec->instance;

            if ($modname === 'page') {
                $record = $DB->get_record('page', ['id' => $instance, 'course' => $courseid]);
                if ($record && !empty($record->content)) {
                    $text = strip_tags(format_text($record->content, $record->contentformat));
                    $text = preg_replace('/\s+/', ' ', trim($text));
                    if (strlen($text) > 80) {
                        return substr($text, 0, $maxchars);
                    }
                }

            } elseif ($modname === 'book') {
                $chapters = $DB->get_records(
                    'book_chapters',
                    ['bookid' => $instance, 'hidden' => 0],
                    'pagenum ASC',
                    'id, title, content, contentformat'
                );
                if ($chapters) {
                    $parts = [];
                    $perchapter = ($maxchars > 6000) ? 2400 : 1200;
                    foreach ($chapters as $ch) {
                        $text = strip_tags(format_text($ch->content, $ch->contentformat));
                        $text = preg_replace('/\s+/', ' ', trim($text));
                        if (strlen($text) > 50) {
                            $heading = !empty($ch->title) ? "{$ch->title}: " : '';
                            $parts[] = $heading . substr($text, 0, $perchapter);
                        }
                    }
                    if ($parts) {
                        return substr(implode("\n\n", $parts), 0, $maxchars);
                    }
                }
            }
        } catch (\Exception $e) {
            // Fall through to empty string.
        }

        return '';
    }

    /**
     * Build a text summary of course sections and activities.
     *
     * @param int $courseid
     * @return string
     */
    private static function build_course_topics(int $courseid): string {
        $modinfo = get_fast_modinfo($courseid);
        $sections = $modinfo->get_section_info_all();
        $lines = [];

        foreach ($sections as $section) {
            if (!$section->visible) {
                continue;
            }

            $sectionname = get_section_name($courseid, $section);
            if (empty($sectionname) || $sectionname === 'General') {
                continue;
            }

            $line = "- {$sectionname}";

            // Add section summary if short.
            $summary = strip_tags($section->summary ?? '');
            if (!empty($summary) && strlen($summary) < 200) {
                $line .= ": {$summary}";
            }

            // Add visible activities with cmid for source attribution.
            $activities = [];
            if (!empty($modinfo->sections[$section->section])) {
                foreach ($modinfo->sections[$section->section] as $cmid) {
                    $cm = $modinfo->get_cm($cmid);
                    if ($cm->visible && $cm->has_view()) {
                        $activities[] = "{$cm->name} ({$cm->modname}, id:{$cmid})";
                    }
                }
            }

            if (!empty($activities)) {
                $line .= "\n  Activities: " . implode(', ', array_slice($activities, 0, 10));
                if (count($activities) > 10) {
                    $line .= ', ...';
                }
            }

            $lines[] = $line;
        }

        return !empty($lines) ? implode("\n", $lines) : 'No topics available.';
    }

    /**
     * Extract readable text from course pages and book chapters.
     *
     * Provides the AI with actual course content so it grounds responses in the
     * course material rather than general web knowledge. Each resource is capped
     * to prevent any single item from dominating the prompt.
     *
     * Supports: mod_page, mod_book.
     * Future: mod_url (fetching), file attachments (PDF extraction).
     *
     * @param int $courseid
     * @return string Formatted content, empty string if none found.
     */
    private static function build_course_content(int $courseid): string {
        global $DB;

        // Per-resource character cap and total cap.
        $maxperresource = 3000;
        $maxtotal       = 40000;
        $total          = 0;
        $sections       = [];

        $modinfo = get_fast_modinfo($courseid);

        foreach ($modinfo->get_cms() as $cm) {
            if (!$cm->uservisible) {
                continue;
            }

            $content = '';
            $label   = '';

            if ($cm->modname === 'page') {
                try {
                    $record = $DB->get_record('page', ['id' => $cm->instance, 'course' => $courseid]);
                    if ($record && !empty($record->content)) {
                        $text = strip_tags(format_text($record->content, $record->contentformat));
                        $text = preg_replace('/\s+/', ' ', trim($text));
                        if (strlen($text) > 80) {
                            $content = substr($text, 0, $maxperresource);
                            $label   = "Page: {$cm->name}";
                        }
                    }
                } catch (\Exception $e) {
                    // Skip unavailable resources gracefully.
                }

            } elseif ($cm->modname === 'book') {
                try {
                    $chapters = $DB->get_records(
                        'book_chapters',
                        ['bookid' => $cm->instance, 'hidden' => 0],
                        'pagenum ASC',
                        'id, title, content, contentformat'
                    );
                    if ($chapters) {
                        $parts = [];
                        foreach ($chapters as $ch) {
                            $text = strip_tags(format_text($ch->content, $ch->contentformat));
                            $text = preg_replace('/\s+/', ' ', trim($text));
                            if (strlen($text) > 50) {
                                $heading = !empty($ch->title) ? "{$ch->title}: " : '';
                                $parts[] = $heading . substr($text, 0, 600);
                            }
                        }
                        if ($parts) {
                            $content = substr(implode("\n\n", $parts), 0, $maxperresource);
                            $label   = "Book: {$cm->name}";
                        }
                    }
                } catch (\Exception $e) {
                    // Skip.
                }
            }

            if (!empty($content) && !empty($label)) {
                $sections[] = "### {$label}\n{$content}";
                $total += strlen($content);
                if ($total >= $maxtotal) {
                    break;
                }
            }
        }

        return !empty($sections) ? implode("\n\n", $sections) : '';
    }

    /**
     * Detect the user role for a given course context.
     *
     * @param int $courseid
     * @param int $userid
     * @return string 'administrator', 'academic_support', or 'student'
     */
    public static function detect_role(int $courseid, int $userid): string {
        $coursecontext = \context_course::instance($courseid);
        if (has_capability('local/ai_course_assistant:manage', $coursecontext, $userid)) {
            return 'administrator';
        }
        if (has_capability('moodle/course:update', $coursecontext, $userid)) {
            return 'academic_support';
        }
        return 'student';
    }

    /**
     * Get personalization instructions using the student's first name.
     *
     * @param string $firstname Student's first name.
     * @return string
     */
    private static function get_personalization_instructions(string $firstname): string {
        $name = !empty($firstname) ? $firstname : 'the student';
        return "\n\n## Personalization\n"
            . "The student's first name is {$name}. Address them by name occasionally to make the "
            . "interaction feel personal and warm — but don't overdo it.\n"
            . "- If the student shares a preferred nickname, adopt it immediately and use it consistently "
            . "throughout the conversation. Politely decline nicknames that are offensive or inappropriate.\n"
            . "- If the student uses inappropriate language or asks for off-topic, offensive, or harmful content, "
            . "gently redirect them back to course-related learning without lecturing or moralizing.\n"
            . "- Offer genuine encouragement and motivation: celebrate effort and progress, acknowledge when "
            . "something is genuinely challenging, and remind students that persistence leads to mastery.\n"
            . "- Look for natural opportunities to coach students on effective AI usage aligned with course "
            . "and unit outcomes — for example, suggesting how they might use AI tools in assignments, "
            . "projects, presentations, or to generate their own practice questions on topics they're studying.";
    }

    /**
     * Get role-specific additional instructions.
     *
     * @param string $role 'administrator', 'academic_support', or 'student'
     * @return string
     */
    private static function get_role_instructions(string $role): string {
        if ($role === 'administrator') {
            return 'The user is an Administrator. Provide direct, comprehensive answers. '
                . 'You can discuss system configuration, analytics insights, course design strategy, '
                . 'and platform-wide trends. Help them understand student usage patterns, identify '
                . 'areas for improvement, and make data-driven decisions about course assets and policies.';
        }

        if ($role === 'academic_support') {
            return 'The user is an Academic Support team member. They do not teach students live — '
                . 'instead they monitor student trends, improve course assets, and ensure content quality. '
                . 'Provide direct, comprehensive answers. Help them analyze student engagement patterns, '
                . 'identify confusing course sections, suggest content improvements, and discuss '
                . 'assessment strategies and course design. Be a collaborative partner in '
                . 'improving the student learning experience.';
        }

        return 'The user is a student. There are no live instructors — you are the primary learning support. '
            . 'Use a Socratic approach — guide them toward understanding '
            . 'rather than giving direct answers. Ask clarifying questions, provide hints, and '
            . 'encourage critical thinking. Never provide complete solutions to assignments or assessments. '
            . 'If a student asks for an answer to a graded activity, redirect them to think about the problem. '
            . 'Be patient, encouraging, and thorough since you are the student\'s main source of help.';
    }

    /**
     * Get AI literacy instructions to weave into tutoring.
     *
     * Remote config key: instruction_blocks.ai_literacy
     *
     * @return string
     */
    private static function get_ai_literacy_instructions(): string {
        $blocks = remote_config_manager::get_value('instruction_blocks', []);
        if (!empty($blocks['ai_literacy'])) {
            return "\n\n## AI Literacy\n" . $blocks['ai_literacy'];
        }
        return "\n\n## AI Literacy\n"
            . "As part of your tutoring, naturally weave in AI literacy education. Help students understand:\n"
            . "- What AI can and cannot do well (good at pattern recognition, summarization, brainstorming; "
            . "less reliable for factual accuracy, citations, math, and nuanced reasoning).\n"
            . "- How to write effective prompts — be specific, provide context, iterate on results.\n"
            . "- The importance of verifying AI outputs against reliable sources.\n"
            . "- When to use AI as a tool vs. when to develop skills independently.\n"
            . "- Ethical considerations: academic integrity, bias awareness, and responsible use.\n"
            . "- How to use AI beyond this course: research assistance, study aids, writing feedback, coding help.\n"
            . "When appropriate, share tips like: 'A good practice when using any AI tool is to...', "
            . "or 'This is an example of where AI can help you get started, but you should verify...'.\n"
            . "The goal is to prepare students to be effective, critical AI users beyond this tutoring context.";
    }

    /**
     * Get wellbeing and crisis-response instructions.
     *
     * Designed to be legally sound, culturally sensitive, and globally appropriate.
     * SOLA is NOT a counselor — it acknowledges distress, provides general resources,
     * and encourages the student to seek human support.
     *
     * @return string
     */
    private static function get_wellbeing_instructions(): string {
        return "\n\n## Wellbeing & Safety\n"
            . "You are an AI learning assistant, NOT a therapist, counselor, or crisis responder. "
            . "However, you have a duty of care to respond appropriately if a student expresses distress.\n\n"
            . "**If a student expresses thoughts of self-harm, suicide, hopelessness, severe anxiety, "
            . "abuse, or any indication they may be in crisis:**\n"
            . "1. Acknowledge their feelings with empathy and without judgment. Example: "
            . "\"I hear you, and I'm glad you shared that. What you're feeling matters.\"\n"
            . "2. Clearly state: \"I'm an AI learning assistant and I'm not equipped to provide the support "
            . "you deserve right now.\"\n"
            . "3. Encourage them to reach out to a real person they trust — a friend, family member, "
            . "teacher, or counselor.\n"
            . "4. Provide these globally accessible resources:\n"
            . "   - **Find a Helpline**: https://findahelpline.com — free directory of crisis helplines "
            . "in 40+ languages and 200+ countries\n"
            . "   - **Crisis Text Line**: text HOME to 741741 (US), text SHOUT to 85258 (UK), "
            . "or visit https://www.crisistextline.org/text-us for other countries\n"
            . "   - **Befrienders Worldwide**: https://befrienders.org — international emotional support\n"
            . "5. Do NOT attempt to diagnose, provide therapy, minimize their feelings, or promise "
            . "confidentiality. Do NOT say \"everything will be okay\" or offer platitudes.\n"
            . "6. After providing resources, gently offer to return to studying when they're ready, "
            . "but make it clear there is no pressure.\n\n"
            . "**For general stress about academics** (exam anxiety, feeling overwhelmed, time pressure):\n"
            . "- Normalize the feeling: \"Many students feel this way — it's a normal part of learning.\"\n"
            . "- Offer practical help: break the work into smaller steps, suggest a study break, "
            . "or help them prioritize.\n"
            . "- Remind them of their progress and capabilities.\n\n"
            . "**Important:** Never ignore or deflect expressions of distress. Always respond with "
            . "warmth and direct the student to human support. This is your highest priority — "
            . "higher than any course content question.";
    }

    /**
     * Get struggle detection and tone shift instructions.
     *
     * Detects signs of frustration, confusion, or disengagement and shifts
     * to a more patient, supportive tone.
     *
     * @return string
     */
    private static function get_struggle_detection_instructions(): string {
        return "\n\n## Struggle Detection\n"
            . "Watch for signs that the student is struggling, frustrated, or disengaged:\n"
            . "- Repeated questions on the same topic (they're not getting it)\n"
            . "- Short frustrated replies like \"I don't get it\", \"this makes no sense\", \"I give up\"\n"
            . "- Expressions of confusion, self-doubt, or overwhelm\n"
            . "- All-caps messages or excessive punctuation (frustration signals)\n"
            . "- Saying they've been at this for a long time\n\n"
            . "When you detect struggle:\n"
            . "1. Acknowledge the difficulty explicitly: \"This is genuinely tricky — you're not alone in finding it hard.\"\n"
            . "2. Shift to a slower, more patient pace — break the concept into smaller pieces.\n"
            . "3. Try a completely different explanation angle (analogy, visual description, real-world example).\n"
            . "4. Offer a \"reset\": \"Want me to start from the very beginning with a fresh approach?\"\n"
            . "5. Celebrate any partial understanding: \"You've actually got the first part right — let's build from there.\"\n"
            . "6. Never say \"it's easy\" or \"it's simple\" — this invalidates their struggle.\n"
            . "7. If they seem overwhelmed, suggest focusing on just one small piece rather than everything at once.";
    }

    /**
     * Get instructions about widget features so the AI can guide students.
     *
     * Tells the AI what's available in the settings panel and other UI features,
     * so it can direct students rather than trying to handle requests itself.
     *
     * @return string
     */
    private static function get_widget_feature_instructions(): string {
        $features = [];

        // Settings panel features.
        $features[] = "Language preference (the student can choose their preferred language)";
        $features[] = "Avatar customization (the student can choose a different avatar)";
        $features[] = "Coaching style preference (Motivational Coach, Study Buddy, or Direct Tutor)";

        if ((bool) get_config('local_ai_course_assistant', 'reminders_email_enabled')) {
            $features[] = "Email study reminders (toggle on/off, uses their Moodle email)";
        }
        if ((bool) get_config('local_ai_course_assistant', 'reminders_whatsapp_enabled')) {
            $features[] = "WhatsApp study reminders (toggle on/off, enter phone number with country code)";
        }

        $features[] = "First-generation student support toggle";
        $features[] = "Bookmarked/saved responses";

        $text = "\n\n## Widget Features\n"
            . "The chat widget has a settings panel (gear icon in the header) where students can configure:\n";
        foreach ($features as $f) {
            $text .= "- {$f}\n";
        }
        $text .= "\nIMPORTANT: If a student asks to set up reminders, change their phone number or email, "
            . "switch language, change coaching style, or customize their avatar, "
            . "direct them to click the gear/settings icon in the chat header. "
            . "Do NOT attempt to collect personal information like phone numbers or email addresses yourself. "
            . "The settings panel handles all of this securely.\n"
            . "Example response: \"You can set up WhatsApp reminders in the settings panel. "
            . "Just tap the gear icon at the top of this chat, scroll to Study Reminders, "
            . "and enter your phone number there.\"";

        return $text;
    }

    /**
     * Get source attribution instructions.
     *
     * Instructs the AI to tag where its answers come from so the UI can
     * render a small source pill beneath each assistant message.
     *
     * @return string
     */
    private static function get_source_attribution_instructions(): string {
        return "\n\n## Source Attribution\n"
            . "After your response (but BEFORE the [SOLA_NEXT] block), indicate the primary source "
            . "of your answer on its own line using exactly one of these tags:\n"
            . "[SOURCE:page] — your answer is primarily based on the current page the student is viewing\n"
            . "[SOURCE:activity:ID] — your answer draws from a specific course activity/resource. "
            . "Use the numeric id from the course structure above (e.g. [SOURCE:activity:47]). "
            . "This creates a direct link to that activity so the student can review the original material.\n"
            . "[SOURCE:course] — ONLY when your answer draws from course materials but you truly cannot identify which specific activity\n"
            . "[SOURCE:general] — your answer uses general knowledge not found in the course materials\n\n"
            . "IMPORTANT: Always prefer [SOURCE:activity:ID] over [SOURCE:course]. "
            . "Look at the course structure above and match the topic of your answer to the most relevant activity by name. "
            . "Use [SOURCE:course] only as a last resort when no single activity is a clear match.\n\n"
            . "Always include exactly one [SOURCE:xxx] tag. Place it on its own line just before [SOLA_NEXT].";
    }

    /**
     * Get instructions for appending SOLA_NEXT suggestion markers.
     *
     * Remote config key: instruction_blocks.next_steps
     *
     * @return string
     */
    private static function get_next_steps_instructions(): string {
        $blocks = remote_config_manager::get_value('instruction_blocks', []);
        if (!empty($blocks['next_steps'])) {
            return "\n\n## Suggested Follow-up Actions\n" . $blocks['next_steps'];
        }
        return "\n\n## Suggested Follow-up Actions\n"
            . "After EVERY response, append exactly this marker on its own line at the very end:\n"
            . "[SOLA_NEXT]suggestion 1||suggestion 2||suggestion 3||suggestion 4[/SOLA_NEXT]\n\n"
            . "Each suggestion should be a short (3–8 word) actionable prompt that naturally continues "
            . "the conversation. Examples: \"Quiz me on this\", \"Give me an example\", "
            . "\"Explain it more simply\", \"What should I study next?\". "
            . "Vary suggestions based on context. Always include exactly 4, separated by ||. "
            . "The [SOLA_NEXT]...[/SOLA_NEXT] block is hidden from the student and must appear "
            . "at the very end of your response with no text after it.";
    }

    /**
     * Get practice session scoring instructions.
     *
     * When the frontend requests a score at the end of a practice session, it sends
     * a prompt asking the AI to evaluate using rubric criteria. This instruction block
     * tells the AI how to format the response using [SOLA_SCORE] tags.
     *
     * @return string
     */
    private static function get_scoring_instructions(): string {
        if (!get_config('local_ai_course_assistant', 'practice_scoring_enabled')) {
            return '';
        }
        return "\n\n## Practice Session Scoring\n"
            . "When asked to score a practice session, evaluate the student's performance using the provided criteria. "
            . "For each criterion, give a score from 1-5 and brief constructive feedback. "
            . "Then give an overall score (1-5) and a short encouraging summary. "
            . "Format your ENTIRE response as:\n"
            . "[SOLA_SCORE]{\"criteria\":[{\"name\":\"Criterion Name\",\"score\":N,\"feedback\":\"Brief feedback\"},...],"
            . "\"overall\":N,\"summary\":\"Encouraging summary\"}[/SOLA_SCORE]\n\n"
            . "The [SOLA_SCORE] block is parsed by the frontend to display a visual score card. "
            . "Do NOT include any text outside the [SOLA_SCORE]...[/SOLA_SCORE] tags when scoring. "
            . "Be encouraging and constructive — focus on what the student did well and specific improvements.";
    }

    /**
     * Get multilingual support instructions.
     *
     * If an explicit language preference is provided (ISO 639-1), the prompt
     * instructs the AI to respond in that language rather than auto-detecting.
     *
     * @param string $lang ISO 639-1 code from student preference, or empty for auto-detect.
     * @return string
     */
    private static function get_multilingual_instructions(string $lang = ''): string {
        $base = "\n\n## Multilingual Support\n"
            . "You are fluent in the top 100 world languages and support students in their preferred language.\n"
            . "If course content is in English but the student communicates in another language, respond in their "
            . "language while keeping technical terms and course-specific vocabulary in the original when helpful.\n"
            . "If a student explicitly asks you to switch to a particular language, do so and continue in that language.";

        if (!empty($lang)) {
            // Map common ISO 639-1 codes to readable names for the prompt.
            $langnames = [
                // Original set.
                'ar' => 'Arabic', 'zh' => 'Chinese', 'cs' => 'Czech', 'da' => 'Danish',
                'nl' => 'Dutch', 'fi' => 'Finnish', 'fr' => 'French', 'de' => 'German',
                'el' => 'Greek', 'hi' => 'Hindi', 'hu' => 'Hungarian', 'id' => 'Indonesian',
                'it' => 'Italian', 'ja' => 'Japanese', 'ko' => 'Korean', 'nb' => 'Norwegian',
                'pl' => 'Polish', 'pt' => 'Portuguese', 'ro' => 'Romanian', 'ru' => 'Russian',
                'sk' => 'Slovak', 'es' => 'Spanish', 'sv' => 'Swedish', 'th' => 'Thai',
                'tr' => 'Turkish', 'uk' => 'Ukrainian', 'vi' => 'Vietnamese',
                // Extended set.
                'am' => 'Amharic', 'bm' => 'Bambara', 'bn' => 'Bengali',
                'ha' => 'Hausa', 'ig' => 'Igbo', 'ms' => 'Malay',
                'ne' => 'Nepali', 'om' => 'Oromo', 'pa' => 'Punjabi',
                'so' => 'Somali', 'sw' => 'Swahili', 'ta' => 'Tamil',
                'tl' => 'Filipino', 'wo' => 'Wolof', 'yo' => 'Yoruba', 'zu' => 'Zulu',
            ];
            $langname = $langnames[$lang] ?? strtoupper($lang);
            $base .= "\n\n**IMPORTANT: The student has set their preferred language to {$langname} ({$lang}). "
                . "You MUST respond in {$langname} for all messages in this conversation, "
                . "regardless of what language the student writes in.**";
        } else {
            $base .= "\nIf a student writes in a language other than English, detect their language and respond in that same language.";
        }

        return $base;
    }

    /**
     * Truncate the prompt if it exceeds the max length.
     *
     * Strategy: drop activity details first, then section summaries.
     *
     * @param string $prompt
     * @param int $courseid
     * @return string
     */
    private static function truncate_prompt(string $prompt, int $courseid): string {
        if (strlen($prompt) <= self::MAX_PROMPT_LENGTH) {
            return $prompt;
        }

        // Try removing activity lines ("  Activities: ..." lines).
        $prompt = preg_replace('/\n  Activities: [^\n]+/', '', $prompt);

        if (strlen($prompt) <= self::MAX_PROMPT_LENGTH) {
            return $prompt;
        }

        // Hard truncate as last resort.
        return substr($prompt, 0, self::MAX_PROMPT_LENGTH - 3) . '...';
    }
}
