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
 * Admin settings for local_ai_course_assistant.
 *
 * Settings are organized into an admin category (SOLA) with 7 settings pages
 * and 7 external admin pages, visible under Site administration > Plugins > Local plugins.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {

    // Read plugin version for the banner text.
    $pluginfo   = core_plugin_manager::instance()->get_plugin_info('local_ai_course_assistant');
    $release    = $pluginfo ? htmlspecialchars($pluginfo->release, ENT_QUOTES) : '?';
    $versionnum = $pluginfo ? htmlspecialchars($pluginfo->versiondisk, ENT_QUOTES) : '?';
    $shortname  = htmlspecialchars(get_config('local_ai_course_assistant', 'short_name') ?: 'SOLA', ENT_QUOTES);
    $versionbanner = '<div style="display:inline-flex;align-items:center;gap:.5rem;background:#f0f4ff;'
        . 'border:1px solid #c7d4f7;border-radius:6px;padding:.4rem .85rem;margin-bottom:.75rem;font-size:.85rem;color:#3b5bdb;">'
        . '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">'
        . '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>'
        . '</svg>'
        . '<strong>' . $shortname . '</strong>&nbsp;v' . $release . '&nbsp;<span style="color:#868e96;">(' . $versionnum . ')</span>'
        . '</div>';

    // ── Create the plugin admin category ────────────────────────────────────
    // All settings pages and admin tools live under this category,
    // reachable at: Site admin > Plugins > Local plugins > AI Course Assistant
    $ADMIN->add('localplugins', new admin_category(
        'local_ai_course_assistant',
        get_string('pluginname', 'local_ai_course_assistant')
    ));

    // ── Page 1: General ─────────────────────────────────────────────────────
    $settings = new admin_settingpage('local_ai_course_assistant_general', 'General');

    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/version_banner',
        '',
        $versionbanner
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/enabled',
        get_string('settings:enabled', 'local_ai_course_assistant'),
        get_string('settings:enabled_desc', 'local_ai_course_assistant'),
        0
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/remoteconfigurl',
        get_string('remoteconfigurl', 'local_ai_course_assistant'),
        get_string('remoteconfigurl_desc', 'local_ai_course_assistant'),
        \local_ai_course_assistant\remote_config_manager::DEFAULT_URL,
        PARAM_URL
    ));

    $ADMIN->add('local_ai_course_assistant', $settings);

    // ── Page 2: AI Provider & Models ────────────────────────────────────────
    $settings = new admin_settingpage('local_ai_course_assistant_ai', 'AI Provider & Models');

    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/provider_heading',
        'AI Provider & Conversation',
        'Configure the AI backend, model, and conversation behavior.'
    ));

    $providers = [
        'claude' => get_string('settings:provider_claude', 'local_ai_course_assistant'),
        'openai' => get_string('settings:provider_openai', 'local_ai_course_assistant'),
        'deepseek' => get_string('settings:provider_deepseek', 'local_ai_course_assistant'),
        'gemini' => get_string('settings:provider_gemini', 'local_ai_course_assistant'),
        'ollama' => get_string('settings:provider_ollama', 'local_ai_course_assistant'),
        'minimax' => get_string('settings:provider_minimax', 'local_ai_course_assistant'),
        'mistral' => get_string('settings:provider_mistral', 'local_ai_course_assistant'),
        'groq' => get_string('settings:provider_groq', 'local_ai_course_assistant'),
        'openrouter' => get_string('settings:provider_openrouter', 'local_ai_course_assistant'),
        'xai' => get_string('settings:provider_xai', 'local_ai_course_assistant'),
        'custom' => get_string('settings:provider_custom', 'local_ai_course_assistant'),
    ];
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/provider',
        get_string('settings:provider', 'local_ai_course_assistant'),
        get_string('settings:provider_desc', 'local_ai_course_assistant'),
        'openai',
        $providers
    ));

    $settings->add(new admin_setting_configpasswordunmask(
        'local_ai_course_assistant/apikey',
        get_string('settings:apikey', 'local_ai_course_assistant'),
        get_string('settings:apikey_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/model',
        get_string('settings:model', 'local_ai_course_assistant'),
        get_string('settings:model_desc_dynamic', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/apibaseurl',
        get_string('settings:apibaseurl', 'local_ai_course_assistant'),
        get_string('settings:apibaseurl_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/temperature',
        get_string('settings:temperature', 'local_ai_course_assistant'),
        get_string('settings:temperature_desc', 'local_ai_course_assistant'),
        '0.7',
        PARAM_FLOAT
    ));

    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/systemprompt',
        get_string('settings:systemprompt', 'local_ai_course_assistant'),
        get_string('settings:systemprompt_desc', 'local_ai_course_assistant'),
        get_string('settings:systemprompt_default', 'local_ai_course_assistant')
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/max_tokens',
        'Max Response Length (tokens)',
        'Maximum number of tokens per AI response. Lower values produce shorter, faster responses. '
        . '512 = ~2-3 sentences, 1024 = ~1-2 paragraphs, 2048 = longer explanations. '
        . 'Set to 0 for no limit (provider default).',
        '1024',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/maxhistory',
        get_string('settings:maxhistory', 'local_ai_course_assistant'),
        get_string('settings:maxhistory_desc', 'local_ai_course_assistant'),
        '20',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/enable_thinking',
        'Extended Thinking (Claude only)',
        'Enable adaptive thinking for Claude models. Claude decides when and how much to reason '
        . 'through a problem before answering. Improves accuracy for complex questions but increases '
        . 'token usage and latency. Thinking content is not shown to students. Other providers ignore this setting.',
        '0'
    ));

    // Quick link to the Starter Editor for convenience.
    $startersurl = new moodle_url('/local/ai_course_assistant/starter_settings.php');
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/starters_link',
        get_string('starters:admin_title', 'local_ai_course_assistant'),
        '<a href="' . $startersurl->out() . '" class="btn btn-sm btn-outline-primary">'
        . get_string('starters:admin_title', 'local_ai_course_assistant') . ' &rarr;</a>'
        . '<p class="text-muted mt-1" style="font-size:13px;">'
        . get_string('starters:admin_desc', 'local_ai_course_assistant') . '</p>'
    ));

    // Quick link to token analytics (cost dashboard).
    $tokenanalyticsurl = new moodle_url('/local/ai_course_assistant/token_analytics.php');
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/token_analytics_link',
        'Token Cost & Analytics',
        '<a href="' . $tokenanalyticsurl->out() . '" class="btn btn-sm btn-outline-secondary">'
        . 'View Token Analytics &rarr;</a>'
        . '<p class="text-muted mt-1" style="font-size:13px;">Monitor token usage and costs across courses and providers.</p>'
    ));

    $ADMIN->add('local_ai_course_assistant', $settings);

    // ── Page 3: Content & RAG ───────────────────────────────────────────────
    $settings = new admin_settingpage('local_ai_course_assistant_content', 'Content & RAG');

    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/rag_heading',
        get_string('settings:rag_heading', 'local_ai_course_assistant'),
        get_string('settings:rag_heading_desc', 'local_ai_course_assistant')
        . '<br><small class="text-muted">RAG (Retrieval-Augmented Generation) indexes your course content and retrieves '
        . 'relevant passages when students ask questions, so the AI can give answers grounded in your materials. '
        . 'Requires an embedding API key (OpenAI recommended). After enabling, use the RAG Admin page to index courses.</small>'
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/rag_enabled',
        get_string('settings:rag_enabled', 'local_ai_course_assistant'),
        get_string('settings:rag_enabled_desc', 'local_ai_course_assistant'),
        1
    ));

    $embeddingproviders = [
        'openai' => get_string('settings:embed_provider_openai', 'local_ai_course_assistant'),
        'ollama' => get_string('settings:embed_provider_ollama', 'local_ai_course_assistant'),
    ];
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/embed_provider',
        get_string('settings:embed_provider', 'local_ai_course_assistant'),
        get_string('settings:embed_provider_desc', 'local_ai_course_assistant'),
        'openai',
        $embeddingproviders
    ));

    $settings->add(new admin_setting_configpasswordunmask(
        'local_ai_course_assistant/embed_apikey',
        get_string('settings:embed_apikey', 'local_ai_course_assistant'),
        get_string('settings:embed_apikey_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/embed_model',
        get_string('settings:embed_model', 'local_ai_course_assistant'),
        get_string('settings:embed_model_desc', 'local_ai_course_assistant'),
        'text-embedding-3-small'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/embed_apibaseurl',
        get_string('settings:embed_apibaseurl', 'local_ai_course_assistant'),
        get_string('settings:embed_apibaseurl_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/embed_dimensions',
        get_string('settings:embed_dimensions', 'local_ai_course_assistant'),
        get_string('settings:embed_dimensions_desc', 'local_ai_course_assistant'),
        '1536',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/rag_topk',
        get_string('settings:rag_topk', 'local_ai_course_assistant'),
        get_string('settings:rag_topk_desc', 'local_ai_course_assistant'),
        '5',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/rag_chunksize',
        get_string('settings:rag_chunksize', 'local_ai_course_assistant'),
        get_string('settings:rag_chunksize_desc', 'local_ai_course_assistant'),
        '400',
        PARAM_INT
    ));

    $ragadminurl = new moodle_url('/local/ai_course_assistant/rag_admin.php');
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/rag_admin_link',
        get_string('ragadmin:title', 'local_ai_course_assistant'),
        html_writer::link($ragadminurl,
            get_string('ragadmin:view_status', 'local_ai_course_assistant'),
            ['class' => 'btn btn-secondary btn-sm'])
    ));

    // Performance: caps on how much course content goes into the system prompt.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/performance_heading',
        'Performance',
        'Control the amount of course content included in the AI prompt. Lower values mean faster responses but less context for the AI.'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/max_content_per_resource',
        'Max Content Per Resource (chars)',
        'Maximum characters of content extracted from each page or book chapter. Lower values reduce prompt size and speed up responses.',
        '1500',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/max_total_content',
        'Max Total Content (chars)',
        'Maximum total characters of course content included in the system prompt. Lower values reduce prompt size and speed up responses.',
        '15000',
        PARAM_INT
    ));

    $ADMIN->add('local_ai_course_assistant', $settings);

    // ── Page 4: Safety & Moderation ─────────────────────────────────────────
    $settings = new admin_settingpage('local_ai_course_assistant_safety', 'Safety & Moderation');

    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/quiz_hide_heading',
        get_string('settings:quiz_hide_heading', 'local_ai_course_assistant'),
        get_string('settings:quiz_hide_heading_desc', 'local_ai_course_assistant')
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/hide_on_quiz_for_students',
        get_string('settings:hide_on_quiz_for_students', 'local_ai_course_assistant'),
        get_string('settings:hide_on_quiz_for_students_desc', 'local_ai_course_assistant'),
        0
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/hide_on_quiz_for_staff',
        get_string('settings:hide_on_quiz_for_staff', 'local_ai_course_assistant'),
        get_string('settings:hide_on_quiz_for_staff_desc', 'local_ai_course_assistant'),
        0
    ));

    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/offtopic_heading',
        get_string('settings:offtopic_heading', 'local_ai_course_assistant'),
        get_string('settings:offtopic_heading_desc', 'local_ai_course_assistant')
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/offtopic_enabled',
        get_string('settings:offtopic_enabled', 'local_ai_course_assistant'),
        get_string('settings:offtopic_enabled_desc', 'local_ai_course_assistant'),
        1
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/offtopic_max',
        get_string('settings:offtopic_max', 'local_ai_course_assistant'),
        get_string('settings:offtopic_max_desc', 'local_ai_course_assistant'),
        '3',
        PARAM_INT
    ));

    $offtopicactions = [
        'warn' => get_string('settings:offtopic_action_warn', 'local_ai_course_assistant'),
        'end' => get_string('settings:offtopic_action_end', 'local_ai_course_assistant'),
    ];
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/offtopic_action',
        get_string('settings:offtopic_action', 'local_ai_course_assistant'),
        get_string('settings:offtopic_action_desc', 'local_ai_course_assistant'),
        'warn',
        $offtopicactions
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/offtopic_lockout_duration',
        get_string('settings:offtopic_lockout_duration', 'local_ai_course_assistant'),
        get_string('settings:offtopic_lockout_duration_desc', 'local_ai_course_assistant'),
        '30',
        PARAM_INT
    ));

    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/wellbeing_heading',
        get_string('settings:wellbeing_heading', 'local_ai_course_assistant'),
        get_string('settings:wellbeing_heading_desc', 'local_ai_course_assistant')
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/wellbeing_enabled',
        get_string('settings:wellbeing_enabled', 'local_ai_course_assistant'),
        get_string('settings:wellbeing_enabled_desc', 'local_ai_course_assistant'),
        1
    ));

    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/integrity_heading',
        get_string('integrity:title', 'local_ai_course_assistant'),
        get_string('integrity:desc', 'local_ai_course_assistant')
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/integrity_enabled',
        get_string('integrity:enabled', 'local_ai_course_assistant'),
        get_string('integrity:enabled_desc', 'local_ai_course_assistant'),
        1
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/integrity_email',
        get_string('integrity:email', 'local_ai_course_assistant'),
        get_string('integrity:email_desc', 'local_ai_course_assistant'),
        '',
        PARAM_TEXT
    ));

    $integrityurl = new moodle_url('/local/ai_course_assistant/integrity_admin.php');
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/integrity_link',
        '',
        '<a href="' . $integrityurl->out() . '" class="btn btn-sm btn-outline-secondary">'
        . get_string('integrity:view_results', 'local_ai_course_assistant') . ' &rarr;</a>'
    ));

    $ADMIN->add('local_ai_course_assistant', $settings);

    // ── Page 5: Engagement ──────────────────────────────────────────────────
    $settings = new admin_settingpage('local_ai_course_assistant_engagement', 'Engagement');

    // Study plans and reminders.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/studyplan_heading',
        get_string('settings:studyplan_heading', 'local_ai_course_assistant'),
        get_string('settings:studyplan_heading_desc', 'local_ai_course_assistant')
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/studyplan_enabled',
        get_string('settings:studyplan_enabled', 'local_ai_course_assistant'),
        get_string('settings:studyplan_enabled_desc', 'local_ai_course_assistant'),
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/reminders_email_enabled',
        get_string('settings:reminders_email_enabled', 'local_ai_course_assistant'),
        get_string('settings:reminders_email_enabled_desc', 'local_ai_course_assistant'),
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/reminders_whatsapp_enabled',
        get_string('settings:reminders_whatsapp_enabled', 'local_ai_course_assistant'),
        get_string('settings:reminders_whatsapp_enabled_desc', 'local_ai_course_assistant'),
        0
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/whatsapp_api_url',
        get_string('settings:whatsapp_api_url', 'local_ai_course_assistant'),
        get_string('settings:whatsapp_api_url_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configpasswordunmask(
        'local_ai_course_assistant/whatsapp_api_token',
        get_string('settings:whatsapp_api_token', 'local_ai_course_assistant'),
        get_string('settings:whatsapp_api_token_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/whatsapp_from_number',
        get_string('settings:whatsapp_from_number', 'local_ai_course_assistant'),
        get_string('settings:whatsapp_from_number_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/whatsapp_blocked_countries',
        get_string('settings:whatsapp_blocked_countries', 'local_ai_course_assistant'),
        get_string('settings:whatsapp_blocked_countries_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/inactivity_reminder_enabled',
        'Inactivity Reminders',
        'Send a weekly email to students who have not accessed their course in the configured number of days.',
        1
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/inactivity_threshold_days',
        'Inactivity Threshold (days)',
        'Number of days of inactivity before sending a reminder email.',
        '7',
        PARAM_INT
    ));

    // Voice Mode (Realtime).
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/realtime_heading',
        get_string('settings:realtime_heading', 'local_ai_course_assistant'),
        '<small class="text-muted">Realtime Voice Mode enables live, two-way spoken conversations between students '
        . 'and the AI using OpenAI\'s Realtime API. This is different from standard text-to-speech (TTS), which reads '
        . 'AI responses aloud. Realtime Voice requires a separate API key and is billed per minute of audio. '
        . 'Once enabled globally, you can toggle it per course in each course\'s settings page.</small>'
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/realtime_enabled',
        get_string('settings:realtime_enabled', 'local_ai_course_assistant'),
        get_string('settings:realtime_enabled_desc', 'local_ai_course_assistant'),
        0
    ));

    $settings->add(new admin_setting_configpasswordunmask(
        'local_ai_course_assistant/realtime_apikey',
        get_string('settings:realtime_apikey', 'local_ai_course_assistant'),
        get_string('settings:realtime_apikey_desc', 'local_ai_course_assistant'),
        ''
    ));

    $realtimevoices = [
        'shimmer' => 'Shimmer',
        'alloy'   => 'Alloy',
        'echo'    => 'Echo',
        'fable'   => 'Fable',
        'onyx'    => 'Onyx',
        'nova'    => 'Nova',
    ];
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/realtime_voice',
        get_string('settings:realtime_voice', 'local_ai_course_assistant'),
        get_string('settings:realtime_voice_desc', 'local_ai_course_assistant'),
        'shimmer',
        $realtimevoices
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/voice_tab_enabled',
        'Enable Voice Tab',
        'Show the Voice tab in the bottom navigation bar. When disabled, students only see Chat and Notes tabs. Voice features (Conversation Practice, Pronunciation Practice) can still be accessed via conversation starters if enabled separately.',
        0
    ));

    // Student Survey.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/survey_heading',
        'Student Survey',
        'Configure the in-chat student experience survey. '
        . '<a href="' . (new moodle_url('/local/ai_course_assistant/survey_admin.php'))->out() . '" class="btn btn-sm btn-outline-primary ml-2">Edit Survey Questions &rarr;</a>'
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/survey_enabled',
        'Enable surveys',
        'When enabled, students will be offered a survey about their AI tutor experience.',
        1
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/survey_trigger_messages',
        'Trigger after N messages',
        'Show the survey prompt after the student has sent this many messages in a course. Set to 0 to only show via manual trigger.',
        '10',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/survey_frequency',
        'Survey frequency per user',
        'How often a student can be prompted to take the survey in each course.',
        'once',
        [
            'once' => 'Once per course (default)',
            'monthly' => 'Once per month',
            'quarterly' => 'Once per quarter',
            'unlimited' => 'Every time (no limit)',
        ]
    ));

    // Practice Scoring (Rubrics).
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/rubric_heading',
        'Practice Scoring Rubrics',
        'Configure scoring rubrics for conversation and pronunciation practice sessions. '
        . 'Students receive AI-generated scores and feedback when a practice session ends. '
        . '<a href="' . (new moodle_url('/local/ai_course_assistant/rubric_admin.php'))->out() . '" class="btn btn-sm btn-outline-primary ml-2">Edit Rubrics &rarr;</a>'
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/practice_scoring_enabled',
        'Enable practice scoring',
        'When enabled, students receive a score card with per-criterion ratings and feedback after conversation and pronunciation practice sessions.',
        1
    ));

    // Usability Testing.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/usertesting_heading',
        'Usability Testing',
        'In-widget usability testing with task-based evaluation. Students complete tasks inside SOLA and rate their experience. '
        . 'Results appear in the analytics dashboard.'
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/usertesting_enabled',
        'Enable Usability Testing',
        'Show the "Usability Testing" link in the widget footer. When enabled, students can access testing tasks.',
        '0'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/usertesting_external_url',
        'External form URL (Option C)',
        'Optional: an external form URL (e.g. Google Forms, Typeform). Use placeholders: {{userid}}, {{courseid}}, {{messages}}, {{session_minutes}}. '
        . 'If set, clicking "Usability Testing" opens this URL with context filled in. Leave blank to use the in-widget testing panel only.',
        '',
        PARAM_URL
    ));

    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/usertesting_editor_link',
        'Edit Testing Tasks',
        '<a href="' . (new moodle_url('/local/ai_course_assistant/usertesting_admin.php'))->out()
        . '" class="btn btn-sm btn-outline-primary">Open Task Editor</a>'
    ));

    $ADMIN->add('local_ai_course_assistant', $settings);

    // ── Page 6: Branding & UI ───────────────────────────────────────────────
    $settings = new admin_settingpage('local_ai_course_assistant_branding', 'Branding & UI');

    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/branding_heading',
        'Branding',
        'Customize the assistant name and appearance.'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/institution_name',
        'Institution Name',
        'Full institution name used in the system prompt, avatar labels, and AI insights (e.g. "Saylor University").',
        'Saylor University'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/institution_short_name',
        'Institution Short Name',
        'Abbreviated institution name for compact UI elements (e.g. "Saylor U").',
        'Saylor U'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/display_name',
        'Assistant Display Name',
        'Full name of the AI assistant shown in greetings and the welcome screen (e.g. "Saylor Online Learning Assistant").',
        'Saylor Online Learning Assistant'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/short_name',
        'Assistant Short Name',
        'Short name shown in the header bar and compact UI elements (e.g. "SOLA").',
        'SOLA'
    ));

    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/welcome_message',
        'Welcome Screen Message',
        'Message shown on the first-visit welcome screen. Use <code>{{firstname}}</code> for the student\'s first name and <code>{{coursename}}</code> for the course name. Leave blank for the default.',
        ''
    ));

    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/chat_greeting',
        'Chat Greeting',
        'Greeting message shown when the chat window opens. Use <code>{{firstname}}</code> for the student\'s first name and <code>{{coursename}}</code> for the course name. Leave blank for the default.',
        ''
    ));

    $displaymodes = [
        'widget' => get_string('settings:display_mode_widget', 'local_ai_course_assistant'),
        'drawer' => get_string('settings:display_mode_drawer', 'local_ai_course_assistant'),
    ];
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/display_mode',
        get_string('settings:display_mode', 'local_ai_course_assistant'),
        get_string('settings:display_mode_desc', 'local_ai_course_assistant'),
        'drawer',
        $displaymodes
    ));

    $positions = [
        'bottom-right' => get_string('settings:position_br', 'local_ai_course_assistant'),
        'bottom-left' => get_string('settings:position_bl', 'local_ai_course_assistant'),
        'top-right' => get_string('settings:position_tr', 'local_ai_course_assistant'),
        'top-left' => get_string('settings:position_tl', 'local_ai_course_assistant'),
    ];
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/position',
        get_string('settings:position', 'local_ai_course_assistant'),
        get_string('settings:position_desc', 'local_ai_course_assistant'),
        'bottom-right',
        $positions
    ));

    $avatarchoices = [
        'avatar_01' => get_string('settings:avatar_saylor', 'local_ai_course_assistant',
            get_config('local_ai_course_assistant', 'institution_name') ?: 'Saylor University'),
    ];
    for ($i = 2; $i <= 10; $i++) {
        $num = str_pad($i, 2, '0', STR_PAD_LEFT);
        $avatarchoices["avatar_{$num}"] = "Avatar {$i}";
    }
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/avatar',
        get_string('settings:avatar', 'local_ai_course_assistant'),
        get_string('settings:avatar_desc', 'local_ai_course_assistant'),
        'avatar_01',
        $avatarchoices
    ));

    $settings->add(new admin_setting_configcolourpicker(
        'local_ai_course_assistant/avatar_color',
        get_string('settings:avatar_color', 'local_ai_course_assistant'),
        get_string('settings:avatar_color_desc', 'local_ai_course_assistant'),
        '#152233'
    ));

    $settings->add(new admin_setting_configcolourpicker(
        'local_ai_course_assistant/avatar_fill',
        get_string('settings:avatar_fill', 'local_ai_course_assistant'),
        get_string('settings:avatar_fill_desc', 'local_ai_course_assistant'),
        '#ffffff'
    ));

    $ADMIN->add('local_ai_course_assistant', $settings);

    // ── Page 7: Integrations & Delivery ─────────────────────────────────────
    $settings = new admin_settingpage('local_ai_course_assistant_integrations', 'Integrations & Delivery');

    // FAQ & Zendesk.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/faq_heading',
        get_string('settings:faq_heading', 'local_ai_course_assistant'),
        get_string('settings:faq_heading_desc', 'local_ai_course_assistant')
    ));

    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/faq_content',
        get_string('settings:faq_content', 'local_ai_course_assistant'),
        get_string('settings:faq_content_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/zendesk_enabled',
        get_string('settings:zendesk_enabled', 'local_ai_course_assistant'),
        get_string('settings:zendesk_enabled_desc', 'local_ai_course_assistant'),
        0
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/zendesk_subdomain',
        get_string('settings:zendesk_subdomain', 'local_ai_course_assistant'),
        get_string('settings:zendesk_subdomain_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/zendesk_email',
        get_string('settings:zendesk_email', 'local_ai_course_assistant'),
        get_string('settings:zendesk_email_desc', 'local_ai_course_assistant'),
        ''
    ));

    $settings->add(new admin_setting_configpasswordunmask(
        'local_ai_course_assistant/zendesk_token',
        get_string('settings:zendesk_token', 'local_ai_course_assistant'),
        get_string('settings:zendesk_token_desc', 'local_ai_course_assistant'),
        ''
    ));

    // Analytics export (Redash).
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/redash_heading',
        get_string('redash_heading', 'local_ai_course_assistant'),
        get_string('redash_heading_desc', 'local_ai_course_assistant')
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/redash_api_key',
        get_string('redash_api_key', 'local_ai_course_assistant'),
        get_string('redash_api_key_desc', 'local_ai_course_assistant'),
        ''
    ));

    // CDN / frontend delivery.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/cdn_heading',
        get_string('settings:cdn_heading', 'local_ai_course_assistant'),
        get_string('settings:cdn_heading_desc', 'local_ai_course_assistant')
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/cdn_url',
        get_string('settings:cdn_url', 'local_ai_course_assistant'),
        get_string('settings:cdn_url_desc', 'local_ai_course_assistant'),
        '',
        PARAM_URL
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/cdn_version',
        get_string('settings:cdn_version', 'local_ai_course_assistant'),
        get_string('settings:cdn_version_desc', 'local_ai_course_assistant'),
        ''
    ));

    // Plugin updates (self-update from GitHub releases).
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/updates_heading',
        get_string('update:title', 'local_ai_course_assistant'),
        get_string('update:desc', 'local_ai_course_assistant')
    ));

    $updateurl = new moodle_url('/local/ai_course_assistant/update_admin.php');
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/update_link',
        '',
        '<a href="' . $updateurl->out() . '" class="btn btn-sm btn-outline-primary">'
        . get_string('update:check', 'local_ai_course_assistant') . ' &rarr;</a>'
    ));

    $settings->add(new admin_setting_configpasswordunmask(
        'local_ai_course_assistant/github_token',
        get_string('update:github_token', 'local_ai_course_assistant'),
        get_string('update:github_token_desc', 'local_ai_course_assistant'),
        ''
    ));

    $ADMIN->add('local_ai_course_assistant', $settings);

    // ── External admin pages (tools / editors) ──────────────────────────────

    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_starters',
        get_string('starters:admin_title', 'local_ai_course_assistant'),
        new moodle_url('/local/ai_course_assistant/starter_settings.php'),
        'moodle/site:config'
    ));

    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_survey',
        'Survey Editor',
        new moodle_url('/local/ai_course_assistant/survey_admin.php'),
        'moodle/site:config'
    ));

    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_usertesting',
        'Usability Testing Editor',
        new moodle_url('/local/ai_course_assistant/usertesting_admin.php'),
        'moodle/site:config'
    ));

    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_rubric',
        'Rubric Editor',
        new moodle_url('/local/ai_course_assistant/rubric_admin.php'),
        'moodle/site:config'
    ));

    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_ragadmin',
        get_string('ragadmin:title', 'local_ai_course_assistant'),
        new moodle_url('/local/ai_course_assistant/rag_admin.php'),
        'moodle/site:config'
    ));

    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_updates',
        get_string('update:title', 'local_ai_course_assistant'),
        new moodle_url('/local/ai_course_assistant/update_admin.php'),
        'moodle/site:config'
    ));

    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_integrity',
        get_string('integrity:title', 'local_ai_course_assistant'),
        new moodle_url('/local/ai_course_assistant/integrity_admin.php'),
        'moodle/site:config'
    ));

    // Catalyst's fork carries a whatsapp_test.php admin tool that calls
    // admin_externalpage_setup('local_ai_course_assistant_whatsapptest').
    // Register it defensively only when the file is present so upstream
    // installs without that file still build a valid admin menu.
    if (file_exists(__DIR__ . '/whatsapp_test.php')) {
        $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
            'local_ai_course_assistant_whatsapptest',
            'WhatsApp Integration Test',
            new moodle_url('/local/ai_course_assistant/whatsapp_test.php'),
            'moodle/site:config',
            true
        ));
    }
}
