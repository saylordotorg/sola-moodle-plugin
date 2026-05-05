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
 * Settings are organized into an admin category with 7 settings pages
 * and 7 external admin pages, visible under Site administration > Plugins > Local plugins.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
    // Admin tools live under this category as external pages; all settings
    // live on a single "Settings" page with TOC navigation.
    // Reachable at: Site admin > Plugins > Local plugins > AI Course Assistant
    $ADMIN->add('localplugins', new admin_category(
        'local_ai_course_assistant',
        get_string('pluginname', 'local_ai_course_assistant')
    ));

    // ── Single settings page with TOC ───────────────────────────────────────
    $settings = new admin_settingpage('local_ai_course_assistant_general', 'Settings');

    // Scoped smooth scrolling + TOC styling.
    $tocstyle = '<style>'
        . 'html{scroll-behavior:smooth;}'
        . '.sola-toc{background:#f8f9fa;border:1px solid #dee2e6;border-radius:8px;padding:14px 18px;margin:0 0 18px;}'
        . '.sola-toc strong{display:block;font-size:13px;color:#495057;text-transform:uppercase;letter-spacing:.5px;margin-bottom:8px;}'
        . '.sola-toc ul{display:flex;flex-wrap:wrap;gap:6px 10px;list-style:none;padding:0;margin:0;}'
        . '.sola-toc li{margin:0;}'
        . '.sola-toc a{display:inline-block;padding:4px 10px;background:#fff;border:1px solid #ced4da;border-radius:4px;font-size:13px;color:#3b5bdb;text-decoration:none;}'
        . '.sola-toc a:hover{background:#e7f0ff;border-color:#3b5bdb;text-decoration:none;}'
        . '.sola-quicklinks{display:flex;flex-wrap:wrap;gap:8px;margin-top:10px;padding-top:10px;border-top:1px dashed #ced4da;}'
        . '.sola-quicklinks a{display:inline-block;padding:5px 12px;background:#3b5bdb;border:1px solid #3b5bdb;border-radius:4px;font-size:13px;color:#fff;text-decoration:none;font-weight:500;}'
        . '.sola-quicklinks a:hover{background:#2d47b5;border-color:#2d47b5;color:#fff;text-decoration:none;}'
        . '.sola-section-anchor{display:block;position:relative;top:-60px;visibility:hidden;}'
        . '.sola-section-heading{margin-top:24px;padding-top:8px;border-top:2px solid #e5e7eb;}'
        . '</style>';

    $analyticsurl = new moodle_url('/local/ai_course_assistant/analytics.php');
    $tokenanalyticsurl = new moodle_url('/local/ai_course_assistant/token_analytics.php');
    $demoadminurl = new moodle_url('/local/ai_course_assistant/demo_admin.php');

    $quicklinks = '<a href="' . $analyticsurl->out() . '">'
            . get_string('toc:analytics', 'local_ai_course_assistant') . '</a>'
        . '<a href="' . $tokenanalyticsurl->out() . '">'
            . get_string('toc:tokenanalytics', 'local_ai_course_assistant') . '</a>'
        . '<a href="' . $demoadminurl->out() . '">'
            . get_string('toc:testing', 'local_ai_course_assistant') . '</a>';

    // "Back to last course" + "Course AI Settings" shortcuts. Pref set on course visits
    // by hook_callbacks. Two buttons so admins can pivot to the course OR to its
    // per-course AI settings page without hunting. v3.9.9+.
    global $DB, $USER;
    $lastcourseid = (int) get_user_preferences('local_ai_course_assistant_last_courseid', 0);
    if ($lastcourseid > 0 && $lastcourseid !== (int) SITEID) {
        $lastcourse = $DB->get_record('course', ['id' => $lastcourseid], 'id,shortname,fullname,visible');
        if ($lastcourse) {
            $lastlabel = $lastcourse->shortname !== '' ? $lastcourse->shortname : $lastcourse->fullname;
            $lasturl = new moodle_url('/course/view.php', ['id' => $lastcourseid]);
            $coursesettingsurl = new moodle_url('/local/ai_course_assistant/course_settings.php',
                ['courseid' => $lastcourseid]);
            $backlabel = str_replace('{$a}', s($lastlabel),
                get_string('toc:back_to_course', 'local_ai_course_assistant'));
            $courseaiurl = '<a href="' . $coursesettingsurl->out() . '" title="'
                . s($lastcourse->fullname) . '" style="background:#495057;border-color:#495057;">'
                . '&#9881; ' . s($lastlabel) . ' AI settings</a>';
            $backbtn = '<a href="' . $lasturl->out() . '" title="'
                . s($lastcourse->fullname) . '" style="background:#6c757d;border-color:#6c757d;">'
                . $backlabel . '</a>';
            $quicklinks = $backbtn . $courseaiurl . $quicklinks;
        }
    }

    $toc = $tocstyle
        . '<div class="sola-toc">'
        . '<strong>Jump to section</strong>'
        . '<ul>'
        . '<li><a href="#sec-general">General</a></li>'
        . '<li><a href="#sec-ai">AI Provider &amp; Models</a></li>'
        . '<li><a href="#sec-content">Content &amp; RAG</a></li>'
        . '<li><a href="#sec-safety">Safety &amp; Moderation</a></li>'
        . '<li><a href="#sec-engagement">Engagement</a></li>'
        . '<li><a href="#sec-branding">Branding &amp; UI</a></li>'
        . '<li><a href="#sec-integrations">Integrations &amp; Delivery</a></li>'
        . '</ul>'
        . '<div class="sola-quicklinks">' . $quicklinks . '</div>'
        . '</div>';

    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/version_banner',
        '',
        $versionbanner . $toc
    ));

    // Helper to render a section anchor + heading.
    $sectionanchor = function(string $id, string $title): string {
        return '<span id="' . $id . '" class="sola-section-anchor"></span>'
            . '<h2 class="sola-section-heading">' . $title . '</h2>';
    };

    // ── Section: General ────────────────────────────────────────────────────
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/sec_general_anchor',
        '',
        $sectionanchor('sec-general', 'General')
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/enabled',
        get_string('settings:enabled', 'local_ai_course_assistant'),
        get_string('settings:enabled_desc', 'local_ai_course_assistant'),
        0
    ));

    $coursemodes = [
        'per_course' => get_string('settings:default_course_mode_per_course', 'local_ai_course_assistant'),
        'all'        => get_string('settings:default_course_mode_all', 'local_ai_course_assistant'),
    ];
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/default_course_mode',
        get_string('settings:default_course_mode', 'local_ai_course_assistant'),
        get_string('settings:default_course_mode_desc', 'local_ai_course_assistant'),
        'per_course',
        $coursemodes
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/auto_open',
        get_string('settings:auto_open', 'local_ai_course_assistant'),
        get_string('settings:auto_open_desc', 'local_ai_course_assistant'),
        0
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/hidden_categories',
        'Hidden course categories',
        'Comma-separated list of course category names or IDs where the assistant should not appear. Example: "Course Development, 42". The assistant is also automatically hidden when editing mode is turned on.',
        '',
        PARAM_RAW_TRIMMED
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/remoteconfigurl',
        get_string('remoteconfigurl', 'local_ai_course_assistant'),
        get_string('remoteconfigurl_desc', 'local_ai_course_assistant'),
        \local_ai_course_assistant\remote_config_manager::DEFAULT_URL,
        PARAM_URL
    ));

    // ── Section: AI Provider & Models ───────────────────────────────────────
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/sec_ai_anchor',
        '',
        $sectionanchor('sec-ai', 'AI Provider &amp; Models')
    ));

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
        'openrouter' => get_string('settings:provider_openrouter', 'local_ai_course_assistant'),
        'together' => get_string('settings:provider_together', 'local_ai_course_assistant'),
        'xai' => get_string('settings:provider_xai', 'local_ai_course_assistant'),
        'coreai' => get_string('settings:provider_coreai', 'local_ai_course_assistant'),
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

    $defaultprompt = get_string('settings:systemprompt_default', 'local_ai_course_assistant');
    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/systemprompt',
        get_string('settings:systemprompt', 'local_ai_course_assistant'),
        get_string('settings:systemprompt_desc', 'local_ai_course_assistant')
        . '<br><button type="button" class="btn btn-sm btn-outline-secondary mt-1" '
        . 'onclick="document.getElementById(\'id_s_local_ai_course_assistant_systemprompt\').value='
        . 'atob(\'' . base64_encode($defaultprompt) . '\');">Reset to default template</button>',
        ''
    ));

    // v4.11.0: prompt size + debugging controls.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/prompt_debug_enabled',
        get_string('settings:prompt_debug_enabled', 'local_ai_course_assistant'),
        get_string('settings:prompt_debug_enabled_desc', 'local_ai_course_assistant'),
        '0'
    ));
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/socratic_verbose',
        get_string('settings:socratic_verbose', 'local_ai_course_assistant'),
        get_string('settings:socratic_verbose_desc', 'local_ai_course_assistant'),
        '0'
    ));

    // v4.12.0: structured prompt budget + verbosity controls.
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/prompt_budget_chars',
        get_string('settings:prompt_budget_chars', 'local_ai_course_assistant'),
        get_string('settings:prompt_budget_chars_desc', 'local_ai_course_assistant'),
        '12000',
        PARAM_INT
    ));
    // v5.1.0: per-section cap on the current_page_content body. Lets
    // cost-conscious admins clamp how much of the current page is
    // injected without affecting other prompt sections or disabling
    // page grounding entirely. Default keeps current behaviour (12,000 chars).
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/current_page_content_maxchars',
        get_string('settings:current_page_content_maxchars', 'local_ai_course_assistant'),
        get_string('settings:current_page_content_maxchars_desc', 'local_ai_course_assistant'),
        '12000',
        PARAM_INT
    ));
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/prompt_metrics_enabled',
        get_string('settings:prompt_metrics_enabled', 'local_ai_course_assistant'),
        get_string('settings:prompt_metrics_enabled_desc', 'local_ai_course_assistant'),
        '1'
    ));
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/prompt_budget_auto_tune',
        get_string('settings:prompt_budget_auto_tune', 'local_ai_course_assistant'),
        get_string('settings:prompt_budget_auto_tune_desc', 'local_ai_course_assistant'),
        '0'
    ));

    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/prompt_verbosity',
        get_string('settings:prompt_verbosity', 'local_ai_course_assistant'),
        get_string('settings:prompt_verbosity_desc', 'local_ai_course_assistant'),
        'concise',
        [
            'concise'  => get_string('settings:prompt_verbosity_concise', 'local_ai_course_assistant'),
            'standard' => get_string('settings:prompt_verbosity_standard', 'local_ai_course_assistant'),
            'verbose'  => get_string('settings:prompt_verbosity_verbose', 'local_ai_course_assistant'),
        ]
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

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/profile_update_interval',
        'Student Profile Update Interval',
        'After this many student messages in a course, the assistant generates (or refreshes) a learning profile summarising the student\'s strengths, weaknesses, learning style, and interests. The profile is injected into the system prompt for personalised responses. Set to 0 to disable. Default: 10.',
        '10',
        PARAM_INT
    ));

    $settings->add(new \local_ai_course_assistant\admin_setting_comparison_providers(
        'local_ai_course_assistant/comparison_providers',
        get_string('settings:comparison_providers', 'local_ai_course_assistant'),
        get_string('settings:comparison_providers_desc', 'local_ai_course_assistant')
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

    // Quick link to analytics dashboard.
    $analyticsurl = new moodle_url('/local/ai_course_assistant/analytics.php');
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/analytics_link',
        'Analytics Dashboard',
        '<a href="' . $analyticsurl->out() . '" class="btn btn-sm btn-outline-secondary">'
        . 'View Analytics Dashboard &rarr;</a>'
        . '<p class="text-muted mt-1" style="font-size:13px;">Cross-course usage analytics, enable/disable AI per course, student feedback, and Learning Radar.</p>'
    ));

    // v3.9.28: SSRF trusted-endpoints allowlist. Operators running a self-hosted
    // LLM (Ollama, vLLM, etc.) on the same VPC as Moodle can list those exact
    // hostnames here to bypass the loopback/private-IP and https-only checks
    // in security::is_safe_provider_url(). Default empty.
    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/ssrf_trusted_endpoints',
        get_string('settings:ssrf_trusted_endpoints', 'local_ai_course_assistant'),
        get_string('settings:ssrf_trusted_endpoints_desc', 'local_ai_course_assistant'),
        '',
        PARAM_RAW
    ));

    // v4.9.0: Talking Avatar driver selection + per-provider config.
    // SOLA ships drivers for D-ID, HeyGen, Tavus (the three most cost-
    // effective real-time avatar vendors as of 2026-04) and Synthesia
    // Agents (newest entrant; iframable embed_url). Operators pick one in
    // the dropdown and fill in just that provider's API key + persona id;
    // the v4.8.1 placeholder fields below remain readable so an admin
    // mid-upgrade does not have to re-enter the key. SSRF-checked on
    // every outbound call.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/talking_avatar_heading',
        get_string('settings:talking_avatar_heading', 'local_ai_course_assistant'),
        get_string('settings:talking_avatar_heading_desc', 'local_ai_course_assistant')
    ));
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/talking_avatar_provider',
        get_string('settings:talking_avatar_provider', 'local_ai_course_assistant'),
        get_string('settings:talking_avatar_provider_desc', 'local_ai_course_assistant'),
        '',
        [
            ''          => get_string('settings:talking_avatar_provider_none', 'local_ai_course_assistant'),
            'did'       => get_string('settings:talking_avatar_provider_did', 'local_ai_course_assistant'),
            'heygen'    => get_string('settings:talking_avatar_provider_heygen', 'local_ai_course_assistant'),
            'tavus'     => get_string('settings:talking_avatar_provider_tavus', 'local_ai_course_assistant'),
            'synthesia' => get_string('settings:talking_avatar_provider_synthesia', 'local_ai_course_assistant'),
        ]
    ));
    foreach (['did', 'heygen', 'tavus', 'synthesia'] as $tap) {
        $settings->add(new admin_setting_configpasswordunmask(
            'local_ai_course_assistant/' . $tap . '_api_key',
            get_string('settings:talking_avatar_' . $tap . '_api_key', 'local_ai_course_assistant'),
            get_string('settings:talking_avatar_' . $tap . '_api_key_desc', 'local_ai_course_assistant'),
            ''
        ));
        $settings->add(new admin_setting_configtext(
            'local_ai_course_assistant/' . $tap . '_persona_id',
            get_string('settings:talking_avatar_' . $tap . '_persona_id', 'local_ai_course_assistant'),
            get_string('settings:talking_avatar_' . $tap . '_persona_id_desc', 'local_ai_course_assistant'),
            '',
            PARAM_TEXT
        ));
    }
    // v4.8.1 fields kept readable as a fallback for upgrades; hidden in
    // settings UI is unnecessary because the new driver fields are above.
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/talking_avatar_provider_url',
        get_string('settings:talking_avatar_provider_url', 'local_ai_course_assistant'),
        get_string('settings:talking_avatar_provider_url_desc', 'local_ai_course_assistant'),
        '',
        PARAM_URL
    ));
    $settings->add(new admin_setting_configpasswordunmask(
        'local_ai_course_assistant/talking_avatar_provider_api_key',
        get_string('settings:talking_avatar_provider_api_key', 'local_ai_course_assistant'),
        get_string('settings:talking_avatar_provider_api_key_desc', 'local_ai_course_assistant'),
        ''
    ));

    // v4.10.0: avatar rate-card overrides. Mirrors the LLM rate-card
    // overrides editor; takes a JSON object keyed by provider with a
    // single per-minute USD rate as the value. Empty = bundled defaults
    // (D-ID $0.30/min, HeyGen $0.50/min, Tavus $0.30/min, Synthesia $0.40/min).
    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/avatar_rate_card_overrides',
        get_string('settings:avatar_rate_card_overrides', 'local_ai_course_assistant'),
        get_string('settings:avatar_rate_card_overrides_desc', 'local_ai_course_assistant'),
        '',
        PARAM_RAW
    ));
    // v4.10.0: optional per-provider webhook signing secrets. When set, the
    // talking_avatar_webhook.php endpoint accepts and verifies session-end
    // payloads from that vendor; webhook rows take precedence over
    // heartbeat rows. Empty = webhook handler off for that provider.
    foreach (['did', 'heygen', 'tavus', 'synthesia'] as $tap) {
        $settings->add(new admin_setting_configpasswordunmask(
            'local_ai_course_assistant/' . $tap . '_webhook_secret',
            get_string('settings:talking_avatar_' . $tap . '_webhook_secret', 'local_ai_course_assistant'),
            get_string('settings:talking_avatar_' . $tap . '_webhook_secret_desc', 'local_ai_course_assistant'),
            ''
        ));
    }

    // v3.9.13: xAI Realtime WebSocket proxy settings. When configured,
    // xAI voice routes through services/xai_rt_proxy instead of opening a
    // direct browser connection to api.x.ai with the master key.
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/xai_proxy_url',
        get_string('settings:xai_proxy_url', 'local_ai_course_assistant'),
        get_string('settings:xai_proxy_url_desc', 'local_ai_course_assistant'),
        '',
        PARAM_URL
    ));
    $settings->add(new admin_setting_configpasswordunmask(
        'local_ai_course_assistant/xai_proxy_jwt_secret',
        get_string('settings:xai_proxy_jwt_secret', 'local_ai_course_assistant'),
        get_string('settings:xai_proxy_jwt_secret_desc', 'local_ai_course_assistant'),
        ''
    ));

    // ── Section: Content & RAG ──────────────────────────────────────────────
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/sec_content_anchor',
        '',
        $sectionanchor('sec-content', 'Content &amp; RAG')
    ));

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

    // v4.8.0: auto-reindex of drifted modules. Closes the gap where
    // `index_course_content` skips courses without active enrolments,
    // leaving content edits invisible to RAG until students show up.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/rag_auto_reindex_drifted',
        get_string('settings:rag_auto_reindex_drifted', 'local_ai_course_assistant'),
        get_string('settings:rag_auto_reindex_drifted_desc', 'local_ai_course_assistant'),
        1
    ));

    // v4.2.3: external resources (opt-in). When on, SOLA may suggest links to
    // reputable open educational resources (Wikipedia, Khan Academy, OER
    // Commons, OpenStax, MIT OpenCourseWare) alongside its course-grounded
    // answer. Default OFF for legal/quality control. Per-course override
    // available on course_settings.php.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/external_resources_heading',
        get_string('settings:external_resources_heading', 'local_ai_course_assistant'),
        get_string('settings:external_resources_heading_desc', 'local_ai_course_assistant')
    ));
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/external_resources_enabled',
        get_string('settings:external_resources_enabled', 'local_ai_course_assistant'),
        get_string('settings:external_resources_enabled_desc', 'local_ai_course_assistant'),
        0
    ));
    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/external_resources_allowlist',
        get_string('settings:external_resources_allowlist', 'local_ai_course_assistant'),
        get_string('settings:external_resources_allowlist_desc', 'local_ai_course_assistant'),
        "Wikipedia (en.wikipedia.org)\n"
        . "Khan Academy (khanacademy.org)\n"
        . "OER Commons (oercommons.org)\n"
        . "OpenStax (openstax.org)\n"
        . "MIT OpenCourseWare (ocw.mit.edu)\n"
        . "Saylor Academy (learn.saylor.org)"
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

    // Content source extractors (v3.9.6+). Each flag gates a specific module
    // type or embed fetcher. Read from within the extractor classes.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/rag_sources_heading',
        'RAG content sources',
        'Choose which course content types the RAG indexer extracts text from. '
        . 'Status indicators on the <a href="' . $ragadminurl->out() . '">RAG Admin page</a> show whether each extractor '
        . 'has what it needs (e.g. the pdftotext binary, Cloudflare allowlist) to run.'
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/rag_extract_pdf',
        'Index PDF files (mod_resource)',
        'Extract text from PDF uploads via the <code>pdftotext</code> binary (poppler). Auto-detects the binary path; override below if needed.',
        1
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/rag_pdftotext_path',
        'pdftotext binary path',
        'Leave blank to auto-detect (checks <code>/usr/bin/pdftotext</code>, <code>/usr/local/bin/pdftotext</code>, and <code>which pdftotext</code>). Set this only if your installation lives somewhere else.',
        ''
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/rag_extract_docx',
        'Index DOCX files (mod_resource)',
        'Extract text from Word uploads via PHP ZipArchive. No external dependency required.',
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/rag_extract_pptx',
        'Index PPTX files (mod_resource)',
        'Extract text from modern PowerPoint uploads via PHP ZipArchive. Walks slide and speaker-note XML in deck order; no external dependency required. Legacy binary <code>.ppt</code> files are not supported — re-save those decks as <code>.pptx</code>.',
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/rag_extract_h5p',
        'Index H5P content (mod_h5p)',
        'Walk H5P content JSON and index every text-bearing field (questions, answers, feedback, descriptions). H5P content type metadata is broad; expect some false positives in edge cases.',
        1
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/rag_extract_scorm',
        'Index SCORM packages (mod_scorm)',
        'Unzip SCORM packages and index <code>imsmanifest.xml</code>, any <code>.html</code> files, and Articulate Storyline content strings. <strong>Off by default</strong> because SCORM parses can be expensive. Max package size is controlled by <code>rag_scorm_max_mb</code>.',
        0
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/rag_scorm_max_mb',
        'Max SCORM package size to index (MB)',
        'Skip SCORM packages larger than this to avoid excessive memory use.',
        '100',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/rag_fetch_transcripts',
        'Fetch transcripts for embedded videos/interactives',
        'Scan mod_page and mod_book content for embedded iframes (Synthesia, YouTube, Articulate, Genially) and fetch the companion transcript URL paired with each embed (searching both above and below the iframe). '
        . 'Requires outbound HTTPS from this server to the transcript host. '
        . '<strong>Off by default</strong>; enable once the transcript host has allowlisted this server (e.g. Cloudflare IP Access Rule).',
        0
    ));

    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/rag_iframe_host_patterns',
        'Iframe host patterns',
        'One regex per line matching an iframe <code>src</code> attribute. Each matching iframe is treated as an interactive embed whose transcript should be paired and indexed. Lines starting with <code>#</code> are comments.',
        "share\\.synthesia\\.io/embeds/videos/\n"
        . "youtube\\.com/embed/\n"
        . "youtube-nocookie\\.com/embed/\n"
        . "review\\.articulate\\.com/\n"
        . "articulateusercontent\\.com/\n"
        . "360\\.articulate\\.com/\n"
        . "view\\.genially\\.com/\n"
        . "genial\\.ly/"
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/rag_transcript_url_pattern',
        'Transcript URL pattern',
        'Regex that matches transcript anchor URLs. The indexer picks the nearest matching anchor (above or below) to each detected iframe and pairs them. Leave blank to disable transcript pairing.',
        ""
    ));

    // Student attachments (images + PDFs) on chat messages.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/attachments_heading',
        'Student attachments',
        'Let students attach an image or PDF to their chat messages. Images are sent to multimodal providers (OpenAI, Anthropic, Gemini, xAI); '
        . 'PDFs are always text-extracted on the server so every provider can read them.'
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/allow_student_attachments',
        'Allow attachments',
        'When enabled, students see a paperclip button in the chat composer. Files are stored under the course context and linked from their message bubble.',
        1
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/attachment_max_size_mb',
        'Max attachment size (MB)',
        'Hard cap on the size of an individual attachment. Clamped to 1–25 MB at runtime.',
        '10',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/attachment_allowed_types',
        'Allowed MIME types',
        'Comma-separated MIME allowlist. The server also sniffs the uploaded file; a spoofed Content-Type will be rejected.',
        'image/png,image/jpeg,image/webp,application/pdf',
        PARAM_RAW_TRIMMED
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

    // Spend guard + optimizer (v3.9.9+).
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/spend_guard_heading',
        'Spend guard and optimizer',
        'Set LLM spend caps per period. SOLA pauses requests when a cap is hit or falls back to a cheaper provider from your failover chain. '
        . 'See the <a href="' . (new moodle_url('/local/ai_course_assistant/token_analytics.php'))->out() . '">Token Cost page</a> '
        . 'for the current spend status and optimizer recommendations.'
    ));

    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/spend_cap_period',
        'Spend cap period',
        'How often the spend cap resets. Calendar-aligned: monthly starts on the 1st of the month, weekly on Monday, daily at midnight.',
        'monthly',
        ['daily' => 'Daily', 'weekly' => 'Weekly', 'monthly' => 'Monthly']
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/spend_cap_site',
        'Site-wide spend cap (USD)',
        'Total USD cap across all courses and capabilities for the current period. <code>0</code> = unlimited. Per-capability caps below override this when set.',
        '0',
        PARAM_FLOAT
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/spend_cap_chat',
        'Chat cap (USD)',
        'Cap just for student chat + quiz workload. <code>0</code> = use site-wide cap.',
        '0', PARAM_FLOAT
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/spend_cap_voice',
        'Voice cap (USD)',
        'Cap for Voice (Realtime + TTS + STT). Voice is usually the biggest line item — cap it first.',
        '0', PARAM_FLOAT
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/spend_cap_rag',
        'RAG cap (USD)',
        'Cap for embedding calls made during course indexing.',
        '0', PARAM_FLOAT
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/spend_cap_analytics',
        'Analytics cap (USD)',
        'Cap for Learning Radar admin queries.',
        '0', PARAM_FLOAT
    ));

    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/spend_failover_chain',
        'Failover chain',
        'When a cap is hit, SOLA tries these providers in order. One entry per line, format <code>capability:label</code>. '
        . 'Labels refer to entries in Comparison providers (for <code>chat</code> / <code>analytics</code>) or Voice providers (for <code>voice</code>). '
        . 'Lines starting with <code>#</code> are comments. Example:<br>'
        . '<code>chat:claude-haiku<br>chat:ollama-local<br>voice:openai-prod<br>analytics:deepseek</code>',
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/spend_notify_emails',
        'Spend alert recipients',
        'Comma-separated email addresses to notify at 80%, 95%, and 100% of the cap. Leave blank to notify all site admins.',
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/opt_cost_weight',
        'Optimizer: cost weight',
        'How much the optimizer prioritizes cost when ranking providers. 0.0 ignores cost, 1.0 optimizes purely for cost. Must sum with quality weight.',
        '0.7', PARAM_FLOAT
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/opt_quality_weight',
        'Optimizer: quality weight',
        'How much the optimizer prioritizes student satisfaction (thumbs-up rate) when ranking providers. 0.0 ignores quality.',
        '0.3', PARAM_FLOAT
    ));

    // ── Section: Safety & Moderation ────────────────────────────────────────
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/sec_safety_anchor',
        '',
        $sectionanchor('sec-safety', 'Safety &amp; Moderation')
    ));

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

    // v3.9.12: data retention controls.
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/audit_retention_days',
        get_string('settings:audit_retention_days', 'local_ai_course_assistant'),
        get_string('settings:audit_retention_days_desc', 'local_ai_course_assistant'),
        '365',
        PARAM_INT
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/conversation_retention_days',
        get_string('settings:conversation_retention_days', 'local_ai_course_assistant'),
        get_string('settings:conversation_retention_days_desc', 'local_ai_course_assistant'),
        '730',
        PARAM_INT
    ));

    // v4.8.0: runtime validator pipeline. Default off so the upgrade is a
    // no-op for existing installs. 'annotate' appends a small visible
    // warning line to flagged responses; 'block' replaces them with a
    // safe fallback message. Both modes audit-log every fail so ops can
    // measure how often each validator trips before tightening to
    // 'block'.
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/validators_runtime_mode',
        get_string('settings:validators_runtime_mode', 'local_ai_course_assistant'),
        get_string('settings:validators_runtime_mode_desc', 'local_ai_course_assistant'),
        'off',
        [
            'off'      => get_string('settings:validators_runtime_off', 'local_ai_course_assistant'),
            'annotate' => get_string('settings:validators_runtime_annotate', 'local_ai_course_assistant'),
            'block'    => get_string('settings:validators_runtime_block', 'local_ai_course_assistant'),
        ]
    ));

    // v4.4.0: Optional Content-Security-Policy header on course pages where
    // the SOLA widget is active. Default off — admin opts in. Defense-in-
    // depth against arbitrary scripts pasted into Site administration →
    // Appearance → Additional HTML (the IBL AI / Raison incident).
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/csp_course_pages_mode',
        get_string('settings:csp_course_pages_mode', 'local_ai_course_assistant'),
        get_string('settings:csp_course_pages_mode_desc', 'local_ai_course_assistant'),
        'off',
        [
            'off'         => get_string('settings:csp_mode_off', 'local_ai_course_assistant'),
            'report-only' => get_string('settings:csp_mode_report_only', 'local_ai_course_assistant'),
            'enforce'     => get_string('settings:csp_mode_enforce', 'local_ai_course_assistant'),
        ]
    ));

    // ── Section: Engagement ─────────────────────────────────────────────────
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/sec_engagement_anchor',
        '',
        $sectionanchor('sec-engagement', 'Engagement')
    ));

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
        'shimmer' => 'Shimmer (OpenAI)',
        'alloy'   => 'Alloy (OpenAI)',
        'echo'    => 'Echo (OpenAI)',
        'fable'   => 'Fable (OpenAI)',
        'onyx'    => 'Onyx (OpenAI)',
        'nova'    => 'Nova (OpenAI)',
        'eve'     => 'Eve (xAI / Grok)',
        'ara'     => 'Ara (xAI / Grok)',
        'leo'     => 'Leo (xAI / Grok)',
        'rex'     => 'Rex (xAI / Grok)',
        'sal'     => 'Sal (xAI / Grok)',
    ];
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/realtime_voice',
        get_string('settings:realtime_voice', 'local_ai_course_assistant'),
        get_string('settings:realtime_voice_desc', 'local_ai_course_assistant'),
        'shimmer',
        $realtimevoices
    ));

    // Voice providers registry (multi-row). Defines one or more voice API
    // endpoints (OpenAI, xAI Grok) with per-provider API keys and default
    // voices. Three active-provider selects below pick which registered label
    // drives Realtime, TTS, and STT.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/voice_providers_heading',
        'Voice providers (Realtime, TTS, STT)',
        'Configure one or more voice API providers. These settings are independent of the chat provider above and the RAG embedding provider — voice has its own provider list because only OpenAI and xAI currently expose WebSocket Realtime, TTS, and STT endpoints. Use the dropdowns below to choose which registered provider drives each capability. '
        . 'If no rows are defined, the legacy single-key fallback (Realtime API key above, or primary OpenAI key) is used. Saylor sites running Together AI / Anthropic / DeepSeek / Gemini / Mistral for chat must configure at least one row here for voice to work.'
    ));

    $settings->add(new \local_ai_course_assistant\admin_setting_voice_providers(
        'local_ai_course_assistant/voice_providers',
        'Voice providers',
        'Add one row per voice API. Valid provider IDs: openai, xai (these are the only providers with WebSocket Realtime + TTS + STT today). The Label is a friendly name you use to pick the active provider for each capability below. Realtime voice and TTS voice can be left blank to use the provider default (shimmer for OpenAI, eve for xAI).'
    ));

    $activechoices = ['' => '(use first configured or legacy fallback)'];
    foreach (\local_ai_course_assistant\voice_registry::parse_rows() as $row) {
        $label = $row['label'] !== '' ? $row['label'] : ucfirst($row['provider']);
        $activechoices[$label] = $label . ' (' . $row['provider'] . ')';
    }

    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/voice_active_realtime',
        'Active Realtime provider',
        'Which configured voice provider handles Realtime Voice Agent sessions.',
        '',
        $activechoices
    ));
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/voice_active_tts',
        'Active TTS provider',
        'Which configured voice provider handles text-to-speech playback of AI responses.',
        '',
        $activechoices
    ));
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/voice_active_stt',
        'Active STT provider',
        'Which configured voice provider handles speech-to-text transcription of student audio.',
        '',
        $activechoices
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
        'In-widget usability testing with task-based evaluation. Students complete tasks inside the assistant and rate their experience. '
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

    // v4.1.1: Active-learners-online indicator scope. Default 'global' (the
    // anti-loneliness default — a global count rarely hits zero, so the
    // indicator actually appears on small courses). Set to 'course' to
    // restore the v4.1.0 per-course behaviour.
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/active_learners_scope',
        get_string('settings:active_learners_scope', 'local_ai_course_assistant'),
        get_string('settings:active_learners_scope_desc', 'local_ai_course_assistant'),
        'global',
        [
            'global' => get_string('settings:active_learners_scope_global', 'local_ai_course_assistant'),
            'course' => get_string('settings:active_learners_scope_course', 'local_ai_course_assistant'),
        ]
    ));

    // v4.5.0: Pedagogy defaults. Each setting here is a site-wide default
    // that applies to every course unless the per-course override is set.
    // Per-course override remains authoritative — admins can still force a
    // single course on or off independent of the global default. Default
    // off so upgrade is a no-op.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/pedagogy_defaults_heading',
        get_string('settings:pedagogy_defaults_heading', 'local_ai_course_assistant'),
        get_string('settings:pedagogy_defaults_heading_desc', 'local_ai_course_assistant')
    ));
    foreach ([
        'mastery_enabled'         => 'pedagogy:mastery',
        'socratic_mode_enabled'   => 'pedagogy:socratic_mode',
        'worked_examples_enabled' => 'pedagogy:worked_examples',
        'flashcards_enabled'      => 'pedagogy:flashcards',
        'code_sandbox_enabled'    => 'pedagogy:code_sandbox',
        'essay_feedback_enabled'  => 'pedagogy:essay_feedback',
        'talking_avatar_enabled'  => 'pedagogy:talking_avatar',
    ] as $key => $stringkey) {
        $settings->add(new admin_setting_configcheckbox(
            'local_ai_course_assistant/' . $key,
            get_string($stringkey, 'local_ai_course_assistant'),
            get_string($stringkey . '_desc', 'local_ai_course_assistant'),
            0
        ));
    }

    // v3.9.17: mastery tracking tunables. Per-course enable toggles live
    // on the per-course Objectives admin page; these are the site-wide
    // knobs that govern mastery math and the classifier behavior.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/mastery_heading',
        get_string('settings:mastery_heading', 'local_ai_course_assistant'),
        get_string('settings:mastery_heading_desc', 'local_ai_course_assistant')
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/mastery_threshold',
        get_string('settings:mastery_threshold', 'local_ai_course_assistant'),
        get_string('settings:mastery_threshold_desc', 'local_ai_course_assistant'),
        '0.85',
        PARAM_RAW
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/mastery_window',
        get_string('settings:mastery_window', 'local_ai_course_assistant'),
        get_string('settings:mastery_window_desc', 'local_ai_course_assistant'),
        '8',
        PARAM_INT
    ));

    // v4.0 / M4 — Mastery decay model. Default off in v4.0; planned default-on
    // in v4.1 once tuning data is in. Read-side only; no schema change.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/mastery_decay_enabled',
        get_string('settings:mastery_decay_enabled', 'local_ai_course_assistant'),
        get_string('settings:mastery_decay_enabled_desc', 'local_ai_course_assistant'),
        0
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/mastery_decay_half_life_days',
        get_string('settings:mastery_decay_half_life_days', 'local_ai_course_assistant'),
        get_string('settings:mastery_decay_half_life_days_desc', 'local_ai_course_assistant'),
        '30',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/mastery_classifier_model',
        get_string('settings:mastery_classifier_model', 'local_ai_course_assistant'),
        get_string('settings:mastery_classifier_model_desc', 'local_ai_course_assistant'),
        'gpt-4o-mini',
        PARAM_RAW_TRIMMED
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/mastery_classifier_weight',
        get_string('settings:mastery_classifier_weight', 'local_ai_course_assistant'),
        get_string('settings:mastery_classifier_weight_desc', 'local_ai_course_assistant'),
        '0.3',
        PARAM_RAW
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/mastery_classifier_threshold',
        get_string('settings:mastery_classifier_threshold', 'local_ai_course_assistant'),
        get_string('settings:mastery_classifier_threshold_desc', 'local_ai_course_assistant'),
        '0.7',
        PARAM_RAW
    ));

    // ── Section: Branding & UI ──────────────────────────────────────────────
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/sec_branding_anchor',
        '',
        $sectionanchor('sec-branding', 'Branding &amp; UI')
    ));

    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/branding_heading',
        'Branding',
        'Customize the assistant name and appearance.'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/institution_name',
        'Institution Name',
        'Full institution name used in the system prompt, avatar labels, and AI insights (e.g. "State University").',
        'Your Institution'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/institution_short_name',
        'Institution Short Name',
        'Abbreviated institution name for compact UI elements (e.g. "State U").',
        'Your Institution'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/display_name',
        'Assistant Display Name',
        'Full name of the AI assistant shown in greetings and the welcome screen (e.g. "Online Learning Assistant").',
        'Online Learning Assistant'
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/short_name',
        'Assistant Short Name',
        'Short name shown in the header bar and compact UI elements (e.g. "Assistant").',
        'Assistant'
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
    // Append admin-uploaded custom avatars to the selectable list. The filearea
    // is managed by the admin_setting_configstoredfile widget below; any file
    // uploaded there becomes a selectable default.
    require_once(__DIR__ . '/lib.php');
    foreach (local_ai_course_assistant_get_custom_avatars() as $av) {
        $avatarchoices[$av['key']] = 'Custom: ' . $av['label'];
    }
    $settings->add(new admin_setting_configselect(
        'local_ai_course_assistant/avatar',
        get_string('settings:avatar', 'local_ai_course_assistant'),
        get_string('settings:avatar_desc', 'local_ai_course_assistant'),
        'avatar_01',
        $avatarchoices
    ));

    // Admin-uploaded custom avatars. Files saved to the customavatars filearea
    // are served via local_ai_course_assistant_pluginfile() and appear in the
    // dropdown above so admins can set any uploaded image as the default.
    $settings->add(new admin_setting_configstoredfile(
        'local_ai_course_assistant/customavatars',
        'Custom avatars',
        'Upload square PNG or SVG images here to add them to the avatar dropdown above. Each uploaded file becomes a selectable default (prefixed "Custom:"). Remove a file from this list to remove it from the dropdown. Tip: 256×256 PNG works well for Retina displays.',
        'customavatars',
        0,
        [
            'subdirs' => 0,
            'maxfiles' => 20,
            'accepted_types' => ['web_image'],
            'context' => context_system::instance(),
        ]
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

    // v3.9.15: white-label contact points surfaced on the privacy notice.
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/contact_email',
        get_string('settings:contact_email', 'local_ai_course_assistant'),
        get_string('settings:contact_email_desc', 'local_ai_course_assistant'),
        '',
        PARAM_EMAIL
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/dpo_email',
        get_string('settings:dpo_email', 'local_ai_course_assistant'),
        get_string('settings:dpo_email_desc', 'local_ai_course_assistant'),
        '',
        PARAM_EMAIL
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/privacy_external_url',
        get_string('settings:privacy_external_url', 'local_ai_course_assistant'),
        get_string('settings:privacy_external_url_desc', 'local_ai_course_assistant'),
        '',
        PARAM_URL
    ));

    // v3.9.16: admin-editable privacy notice override. If populated, this HTML
    // replaces the default branded notice rendered by privacy.php. Lets
    // Saylor (or any rebranded install) finalize the legal-reviewed notice
    // text in the admin UI without touching code.
    $settings->add(new admin_setting_confightmleditor(
        'local_ai_course_assistant/privacy_notice_override',
        get_string('settings:privacy_notice_override', 'local_ai_course_assistant'),
        get_string('settings:privacy_notice_override_desc', 'local_ai_course_assistant'),
        ''
    ));

    // ── Section: Integrations & Delivery ────────────────────────────────────
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/sec_integrations_anchor',
        '',
        $sectionanchor('sec-integrations', 'Integrations &amp; Delivery')
    ));

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

    // Learning Radar Scheduled Reports — moved to a dedicated UI in v4.2.
    // The legacy single-schedule settings (metaai_cron_*) are now migrated
    // into the multi-schedule table on upgrade. This block keeps only the
    // anomaly-digest options in admin settings; per-query schedules live on
    // the analytics page.
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/anomaly_digest_heading',
        'Learning Radar — anomaly digest',
        'Daily check that compares rolling windows of negative ratings, token spend, and integrity flags. '
        . 'When a metric exceeds the configured threshold, a digest is sent to the configured channels. '
        . 'For per-query scheduled reports, use the Schedules panel on the SOLA Analytics page.'
    ));

    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/anomaly_digest_enabled',
        'Enable anomaly digest',
        'Run the daily anomaly digest task. Quiet by default — only fires when a metric crosses the threshold.',
        0
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/anomaly_digest_threshold_pct',
        'Alert threshold (%)',
        'Percent change between the recent and prior window that triggers an alert. Default: 50.',
        '50',
        PARAM_INT
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/anomaly_digest_recipient_email',
        'Recipient email',
        'Email address that receives the anomaly digest. Leave blank to use the site admin.',
        '',
        PARAM_EMAIL
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/anomaly_digest_slack_webhook',
        'Slack incoming webhook URL',
        'Optional Slack incoming webhook URL. The digest is posted as a Slack block message.',
        '',
        PARAM_URL
    ));

    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/anomaly_digest_teams_webhook',
        'Microsoft Teams incoming webhook URL',
        'Optional Teams incoming webhook URL. The digest is posted as an Office 365 connector card.',
        '',
        PARAM_URL
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

    // v4.3.0: Real Redash integration. Three settings together let SOLA
    // push a Learning Radar query/response to Redash as a new saved query
    // via Redash's /api/queries endpoint. All three must be set for the
    // push action to work; the existing pull path (redash_export.php +
    // redash_api_key) keeps working unchanged.
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/redash_base_url',
        get_string('settings:redash_base_url', 'local_ai_course_assistant'),
        get_string('settings:redash_base_url_desc', 'local_ai_course_assistant'),
        '',
        PARAM_URL
    ));
    $settings->add(new admin_setting_configpasswordunmask(
        'local_ai_course_assistant/redash_user_api_key',
        get_string('settings:redash_user_api_key', 'local_ai_course_assistant'),
        get_string('settings:redash_user_api_key_desc', 'local_ai_course_assistant'),
        ''
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/redash_data_source_id',
        get_string('settings:redash_data_source_id', 'local_ai_course_assistant'),
        get_string('settings:redash_data_source_id_desc', 'local_ai_course_assistant'),
        '',
        PARAM_INT
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
    // v4.6.0: Vendor & cost data overrides. Three settings let admins
    // (a) hide the Vendor DPA admin page if they do not use it, and
    // (b) edit the vendor DPA table and LLM rate card without a code edit.
    // Both override fields are JSON, merged on top of the hardcoded
    // defaults at runtime — empty string means "use defaults".
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/vendor_data_heading',
        get_string('settings:vendor_data_heading', 'local_ai_course_assistant'),
        get_string('settings:vendor_data_heading_desc', 'local_ai_course_assistant')
    ));
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/vendor_dpa_admin_page_enabled',
        get_string('settings:vendor_dpa_admin_page_enabled', 'local_ai_course_assistant'),
        get_string('settings:vendor_dpa_admin_page_enabled_desc', 'local_ai_course_assistant'),
        0
    ));
    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/vendor_dpa_overrides',
        get_string('settings:vendor_dpa_overrides', 'local_ai_course_assistant'),
        get_string('settings:vendor_dpa_overrides_desc', 'local_ai_course_assistant'),
        '',
        PARAM_RAW
    ));
    $settings->add(new admin_setting_configtextarea(
        'local_ai_course_assistant/rate_card_overrides',
        get_string('settings:rate_card_overrides', 'local_ai_course_assistant'),
        get_string('settings:rate_card_overrides_desc', 'local_ai_course_assistant'),
        '',
        PARAM_RAW
    ));

    // v4.7.0: rate-card auto-refresh. On by default. Weekly cron task pulls
    // an upstream pricing JSON (LiteLLM by default) and writes it into
    // rate_card_overrides above so cost estimation stays current without
    // admin intervention. Manual trigger button below for one-shot pulls.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/rate_card_auto_refresh',
        get_string('settings:rate_card_auto_refresh', 'local_ai_course_assistant'),
        get_string('settings:rate_card_auto_refresh_desc', 'local_ai_course_assistant'),
        1
    ));
    $settings->add(new admin_setting_configtext(
        'local_ai_course_assistant/rate_card_upstream_url',
        get_string('settings:rate_card_upstream_url', 'local_ai_course_assistant'),
        get_string('settings:rate_card_upstream_url_desc', 'local_ai_course_assistant'),
        \local_ai_course_assistant\rate_card_refresher::DEFAULT_UPSTREAM_URL,
        PARAM_URL
    ));

    // Manual "Refresh now" button + last-refresh status display.
    $lastrefreshat = (int) (get_config('local_ai_course_assistant', 'rate_card_last_refresh_at') ?: 0);
    $lastrefreshstatus = (string) (get_config('local_ai_course_assistant', 'rate_card_last_refresh_status') ?: '');
    $lastrefresherror = (string) (get_config('local_ai_course_assistant', 'rate_card_last_refresh_error') ?: '');
    $statusparts = [];
    if ($lastrefreshat > 0) {
        $statusparts[] = get_string('settings:rate_card_last_refresh_at', 'local_ai_course_assistant',
            userdate($lastrefreshat));
    } else {
        $statusparts[] = get_string('settings:rate_card_never_refreshed', 'local_ai_course_assistant');
    }
    if ($lastrefreshstatus === 'error' && $lastrefresherror !== '') {
        $statusparts[] = '<span class="text-danger">' . s($lastrefresherror) . '</span>';
    } else if ($lastrefreshstatus === 'success') {
        $statusparts[] = '<span class="text-success">'
            . get_string('settings:rate_card_last_refresh_success', 'local_ai_course_assistant') . '</span>';
    }
    $refreshurl = new moodle_url('/local/ai_course_assistant/rate_card_refresh.php',
        ['sesskey' => sesskey()]);
    $settings->add(new admin_setting_description(
        'local_ai_course_assistant/rate_card_refresh_button',
        get_string('settings:rate_card_refresh_now', 'local_ai_course_assistant'),
        '<a href="' . $refreshurl->out(false) . '" class="btn btn-sm btn-outline-primary">'
        . get_string('settings:rate_card_refresh_now_label', 'local_ai_course_assistant') . '</a>'
        . '<p class="text-muted mt-2 mb-0" style="font-size:13px">'
        . implode(' &middot; ', $statusparts) . '</p>'
    ));

    // ── v5.3.0: Empathetic communications + carryover memory ───────────────
    $settings->add(new admin_setting_heading(
        'local_ai_course_assistant/empathy_heading',
        get_string('empathy:title', 'local_ai_course_assistant'),
        get_string('empathy:desc', 'local_ai_course_assistant')
    ));

    // Master kill switch for ALL outreach emails. Default OFF on fresh install.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/outreach_master_enabled',
        get_string('empathy:outreach_master_enabled', 'local_ai_course_assistant'),
        get_string('empathy:outreach_master_enabled_desc', 'local_ai_course_assistant'),
        '0'
    ));

    // Goals feature (in-chat only; no emails). Safe to default ON.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/goals_feature_enabled',
        get_string('empathy:goals_enabled', 'local_ai_course_assistant'),
        get_string('empathy:goals_enabled_desc', 'local_ai_course_assistant'),
        '1'
    ));

    // Milestone reflections (emails). Default OFF; explicit admin opt-in.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/milestones_feature_enabled',
        get_string('empathy:milestones_enabled', 'local_ai_course_assistant'),
        get_string('empathy:milestones_enabled_desc', 'local_ai_course_assistant'),
        '0'
    ));

    // Carryover memory (in-chat only; powers personalisation). Default ON.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/memory_feature_enabled',
        get_string('empathy:memory_enabled', 'local_ai_course_assistant'),
        get_string('empathy:memory_enabled_desc', 'local_ai_course_assistant'),
        '1'
    ));

    // Struggle classifier (in-chat only; writes memory notes). Default OFF.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/struggle_classifier_enabled',
        get_string('empathy:struggle_enabled', 'local_ai_course_assistant'),
        get_string('empathy:struggle_enabled_desc', 'local_ai_course_assistant'),
        '0'
    ));

    // Dry-run mode. When on, milestone email task logs intent without
    // sending — safe way to verify cooldown + consent logic on a fresh
    // install before going live.
    $settings->add(new admin_setting_configcheckbox(
        'local_ai_course_assistant/outreach_dryrun',
        get_string('empathy:outreach_dryrun', 'local_ai_course_assistant'),
        get_string('empathy:outreach_dryrun_desc', 'local_ai_course_assistant'),
        '0'
    ));

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
        'local_ai_course_assistant_courses',
        get_string('courses_admin:title', 'local_ai_course_assistant'),
        new moodle_url('/local/ai_course_assistant/courses_admin.php'),
        'moodle/site:config'
    ));

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

    // v5.0.0 patch 3: prompt-metrics + budget-recommendation surface.
    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_prompt_metrics',
        get_string('prompt_metrics:title', 'local_ai_course_assistant'),
        new moodle_url('/local/ai_course_assistant/prompt_metrics.php'),
        'moodle/site:config'
    ));

    // v5.0.0 patch 10: prompt-debug-log viewer (per-turn assembled prompt + history).
    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_prompt_debug_view',
        get_string('prompt_debug_view:title', 'local_ai_course_assistant'),
        new moodle_url('/local/ai_course_assistant/prompt_debug_view.php'),
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

    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_demoadmin',
        get_string('demo:title', 'local_ai_course_assistant'),
        new moodle_url('/local/ai_course_assistant/demo_admin.php'),
        'moodle/site:config'
    ));

    $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
        'local_ai_course_assistant_userdata',
        get_string('admin:user_data:title', 'local_ai_course_assistant',
            \local_ai_course_assistant\branding::short_name()),
        new moodle_url('/local/ai_course_assistant/admin_user_data.php'),
        'moodle/site:config'
    ));

    // v4.6.0: Vendor DPA admin page is now gated on
    // `vendor_dpa_admin_page_enabled`, default off. Admins who do not need
    // the DPA dashboard get a smaller admin tree; those who do flip the
    // setting in Site administration → Plugins → Local plugins →
    // AI Course Assistant.
    if ((bool) get_config('local_ai_course_assistant', 'vendor_dpa_admin_page_enabled')) {
        $ADMIN->add('local_ai_course_assistant', new admin_externalpage(
            'local_ai_course_assistant_vendordpa',
            get_string('admin:vendor_dpa:title', 'local_ai_course_assistant',
                \local_ai_course_assistant\branding::short_name()),
            new moodle_url('/local/ai_course_assistant/vendor_dpa.php'),
            'moodle/site:config'
        ));
    }

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
