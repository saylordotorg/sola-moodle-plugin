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
 * Language strings for local_ai_course_assistant.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'AI Course Assistant';
$string['error'] = '{$a}';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Stores AI tutor chat conversations per user and course.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'The ID of the user who owns the conversation.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'The ID of the course the conversation belongs to.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'The title of the conversation.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'The time the conversation was created.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'The time the conversation was last modified.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Stores individual messages in AI tutor chat conversations.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'The ID of the user who sent the message.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'The ID of the course the message belongs to.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'The role of the message sender (user or assistant).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'The content of the message.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'The number of tokens used for the message.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'The time the message was created.';
$string['privacy:metadata:local_ai_course_assistant_msgs:prompt_tokens'] = 'The number of prompt tokens used.';
$string['privacy:metadata:local_ai_course_assistant_msgs:completion_tokens'] = 'The number of completion tokens generated.';
$string['privacy:metadata:local_ai_course_assistant_msgs:model_name'] = 'The AI model used for the response.';
$string['privacy:metadata:local_ai_course_assistant_msgs:provider'] = 'The AI provider used for the response.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Use AI tutor chat';
$string['ai_course_assistant:viewanalytics'] = 'View AI tutor chat analytics';
$string['ai_course_assistant:manage'] = 'Manage AI tutor chat settings (Administrator role)';

// Settings.
$string['settings:enabled'] = 'Enable AI Course Assistant';
$string['settings:enabled_desc'] = 'Enable or disable the AI Course Assistant widget on course pages.';
$string['settings:default_course_mode'] = 'Default for new courses';
$string['settings:default_course_mode_desc'] = 'Controls whether SOLA appears on a course when no per-course choice has been made. New installs default to "Disabled by default" so admins can opt in course by course from the Analytics page or the Course AI Settings page.';
$string['settings:default_course_mode_per_course'] = 'Disabled by default (enable per course)';
$string['settings:default_course_mode_all'] = 'Enabled on all courses';
$string['task:run_meta_ai_query'] = 'Run scheduled Meta-AI analytics query';
$string['settings:comparison_providers'] = 'Comparison providers (LLM picker)';
$string['settings:comparison_providers_desc'] = 'Add extra AI providers to the in-widget LLM picker so admins can compare responses across providers. One line per provider in the format: provider_id|api_key|model1,model2. The primary provider configured above is always included automatically. Only admins with the manage capability see the picker; students never see it. Example:<br><code>claude|sk-ant-api03-...|claude-sonnet-4-5-20250929,claude-3-5-haiku-20241022<br>gemini|AIzaSy...|gemini-2.0-flash<br>deepseek|sk-...|deepseek-chat</code><br>Valid provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, groq, openrouter, xai, coreai, custom.';
$string['settings:auto_open'] = 'Auto-open on first visit';
$string['settings:auto_open_desc'] = 'When enabled, the SOLA drawer opens automatically the first time a student lands on each course. Subsequent page loads in the same course do not re-open the drawer — state is tracked per course in the student\'s browser via localStorage. Applies on desktop and mobile. Can be overridden per course from the Course AI Settings page.';
$string['settings:provider'] = 'AI Provider';
$string['settings:provider_desc'] = 'Select the AI provider to use for chat completions. Choose "Moodle AI (core_ai subsystem)" to route requests through Moodle\'s built-in AI configuration at Site admin > AI; the API key, model, and base URL fields below are ignored in that mode. Streaming, tool use, and prompt caching are not available via core_ai — responses are delivered as a single chunk. Use a direct provider for the best student experience.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Local)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_groq'] = 'Groq';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';
$string['settings:provider_gemini'] = 'Google Gemini';
$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
$string['settings:provider_custom'] = 'Custom (OpenAI-compatible)';
$string['settings:apikey'] = 'API Key';
$string['settings:apikey_desc'] = 'API key for the selected provider. Not required for Ollama.';
$string['settings:model'] = 'Model Name';
$string['settings:model_desc'] = 'The model to use. Default depends on provider (e.g. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:model_desc_dynamic'] = 'Leave blank to use the provider\'s default model automatically. Each provider has a built-in default that stays current (e.g. gpt-4o for OpenAI, claude-sonnet-4 for Claude, mistral-large-latest for Mistral). Only enter a model name if you want to override the default. If a model is misspelled or deprecated, SOLA will automatically fall back to the provider\'s default.';
$string['settings:apibaseurl'] = 'API Base URL';
$string['settings:apibaseurl_desc'] = 'Base URL for the API. Auto-filled per provider but can be overridden. Leave blank for provider default.';
$string['settings:systemprompt'] = 'System Prompt Template';
$string['settings:systemprompt_desc'] = 'System prompt sent to the AI. Use placeholders: {{coursename}}, {{userrole}}, {{coursetopics}}, {{institution}}.';
$string['settings:systemprompt_default'] = 'You are SOLA (Online Learning Assistant), an AI learning coach for {{institution}} students enrolled in "{{coursename}}". The student\'s role is {{userrole}}.

## Role
Provide supportive, course-aligned academic help that encourages learning, practice, motivation, and responsible AI use. You complement faculty-designed courses but do not replace instructors.

## Core Rules
- Ground all academic responses in approved course materials or institutional information.
- Do not invent content or go beyond course scope.
- Redirect learners back to course materials when questions fall outside the course. After two off-topic requests, steer the conversation back to learning.
- When generating practice questions, draw them directly from the course material.

## Course Structure
{{coursetopics}}

## Course Content
The following is the actual text of the course pages and materials. This is your primary knowledge source for this course.

{{coursecontent}}

## What SOLA Can Help With
- Explain concepts and summarize lessons
- Give examples and practice questions
- Suggest study strategies
- Encourage persistence and progress

## What SOLA Will Not Do
- Make academic or policy decisions
- Provide medical, legal, or mental health counseling
- Assist with academic dishonesty or bypassing learning

## Tone and Style
Communicate in a friendly, caring, encouraging, witty, and motivating way. Be concise, supportive, and respectful.

## Safety
Do not engage in abusive, hateful, discriminatory, or inappropriate conversations. Set firm but kind boundaries and redirect to productive topics.';
$string['remoteconfigurl'] = 'Remote config URL';
$string['remoteconfigurl_desc'] = 'URL to a JSON file containing remotely-managed SOLA configuration (system prompt, instruction blocks, model default). Must be HTTPS. Leave blank to use the default GitHub URL. Local admin settings always take priority over remote config values.';
$string['settings:temperature'] = 'Temperature';
$string['settings:temperature_desc'] = 'Controls randomness. Lower values are more focused, higher values more creative. Range: 0.0 to 2.0.';
$string['settings:maxhistory'] = 'Max Conversation History';
$string['settings:maxhistory_desc'] = 'Maximum number of message pairs to include in API requests. Older messages are trimmed.';
$string['settings:avatar'] = 'Chat Avatar';
$string['settings:avatar_desc'] = 'Select the avatar icon for the chat widget button.';
$string['settings:institution_name'] = 'Institution Name';
$string['settings:institution_name_desc'] = 'The name of the institution displayed in the system prompt, avatar labels, and demo content. Change this when rebranding.';
$string['settings:avatar_saylor'] = '{$a} Logo (Default)';
$string['settings:avatar_color'] = 'Avatar Border Color';
$string['settings:avatar_color_desc'] = 'Border color of the floating avatar button. Use a hex value, e.g. #023e8a.';
$string['settings:avatar_fill'] = 'Avatar Background Color';
$string['settings:avatar_fill_desc'] = 'Fill color inside the floating avatar button (shown behind transparent avatar areas). Use a hex value, e.g. #ffffff.';
$string['settings:display_mode'] = 'Display Mode';
$string['settings:display_mode_desc'] = 'How SOLA appears on the page. "Widget" shows a floating avatar button with a popup chat panel. "Side drawer" shows a full-height panel that slides in from the right edge of the screen.';
$string['settings:display_mode_widget'] = 'Widget (floating button)';
$string['settings:display_mode_drawer'] = 'Side drawer (right edge)';
$string['settings:position'] = 'Widget Position';
$string['settings:position_desc'] = 'Position of the chat widget on the page (only applies in Widget mode).';
$string['settings:position_br'] = 'Bottom right';
$string['settings:position_bl'] = 'Bottom left';
$string['settings:position_tr'] = 'Top right';
$string['settings:position_tl'] = 'Top left';
$string['chat:settings'] = 'Plugin settings';
$string['analytics:viewdashboard'] = 'View analytics dashboard';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'Course AI Settings';
$string['coursesettings:enabled'] = 'Enable course overrides';
$string['coursesettings:enabled_desc'] = 'When enabled, the settings below override the global AI provider configuration for this course only. Leave fields blank to inherit the global value.';
$string['coursesettings:sola_enabled'] = 'SOLA on this course';
$string['coursesettings:sola_enabled_toggle'] = 'Show the SOLA widget on this course';
$string['coursesettings:sola_enabled_desc'] = 'Controls whether the SOLA chat widget appears on this course. The site-wide default is set in the plugin settings under General > Default for new courses.';
$string['coursesettings:using_global'] = 'Using global setting';
$string['coursesettings:saved'] = 'Course AI settings saved.';
$string['coursesettings:ell_pronunciation']        = 'Pronunciation Practice Mode';
$string['coursesettings:ell_pronunciation_desc']   = 'Show the "Pronunciation Practice" chip for students in this course. Uses OpenAI Realtime API for phoneme-level pronunciation feedback. Requires Voice Mode to be enabled in global plugin settings.';
$string['coursesettings:ell_pronunciation_enable'] = 'Enable Pronunciation Practice chip for this course';
$string['coursesettings:rag']        = 'Semantic Search (RAG)';
$string['coursesettings:rag_desc']   = 'Enable retrieval-augmented generation for this course. When enabled, SOLA embeds and searches course content to ground its answers. Requires RAG to be enabled globally in plugin settings.';
$string['coursesettings:rag_enable'] = 'Enable RAG for this course';
$string['coursesettings:speaking_practice']        = 'Speaking Practice';
$string['coursesettings:speaking_practice_desc']   = 'Show the "Practice Speaking" chip for students in this course. Uses OpenAI TTS for voice responses. Requires an OpenAI API key in global plugin settings.';
$string['coursesettings:speaking_practice_enable'] = 'Enable Speaking Practice chip for this course';
$string['coursesettings:global_settings_link'] = 'Global AI settings';
$string['coursesettings:token_usage'] = 'Token Usage & Cost';
$string['coursesettings:token_usage_desc'] = 'View token usage, cost estimates, and per-student breakdowns for this course.';

// Language detection and preference.
$string['lang:switch'] = 'Yes, switch';
$string['lang:dismiss'] = 'No thanks';
$string['lang:change'] = 'Change language';
$string['lang:english'] = 'English';

// Chat widget.
$string['chat:title'] = 'SOLA';
$string['chat:placeholder'] = 'Ask a question...';
$string['chat:send'] = 'Send';
$string['chat:close'] = 'Close chat';
$string['chat:open'] = 'Open SOLA';
$string['chat:change_avatar'] = 'Change avatar';
$string['chat:clear'] = 'Clear history';
$string['chat:clear_confirm'] = 'Are you sure you want to clear your chat history for this course?';
$string['chat:copy'] = 'Copy conversation';
$string['chat:copied'] = 'Conversation copied to clipboard';
$string['chat:copy_failed'] = 'Failed to copy conversation';
$string['chat:greeting'] = 'Hi, {$a}! I\'m SOLA. How can I help you today?';
$string['chat:thinking'] = 'Thinking...';
$string['chat:error'] = 'Sorry, something went wrong. Please try again.';
$string['chat:error_auth'] = 'Authentication error. Please contact your administrator.';
$string['chat:error_ratelimit'] = 'Too many requests. Please wait a moment and try again.';
$string['chat:error_unavailable'] = 'The AI service is temporarily unavailable. Please try again later.';
$string['chat:error_notconfigured'] = 'SOLA has not been configured yet. Please contact your administrator.';
$string['chat:mic'] = 'Speak your question';
$string['chat:mic_error'] = 'Microphone error. Please check your browser permissions.';
$string['chat:mic_unsupported'] = 'Speech input is not supported in this browser.';
$string['chat:newline_hint'] = 'Shift+Enter for new line';
$string['chat:you'] = 'You';
$string['chat:assistant'] = 'SOLA';
$string['chat:history_loaded'] = 'Previous conversation loaded.';
$string['chat:history_cleared'] = 'Chat history cleared.';
$string['chat:offtopic_warning'] = 'It looks like your question is not related to this course. Please try to stay on topic so I can help you best!';
$string['chat:offtopic_ended'] = 'Your AI tutor access has been temporarily suspended for {$a} minutes because the conversation went off-topic too many times. Please use this time to review your course materials, and you can try again later.';
$string['chat:offtopic_locked'] = 'Your AI tutor access is temporarily suspended. You can try again in {$a} minutes. Please focus on course-related questions when you return.';
$string['chat:escalated_to_support'] = 'I was unable to fully answer your question, so I\'ve created a support ticket for you. A support team member will follow up. Your ticket reference is: {$a}';
$string['chat:studyplan_intro'] = 'I can help you create a study plan for this course! Just tell me how many hours per week you can dedicate to studying, and I\'ll help you build a structured plan.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ & Support';
$string['settings:faq_heading_desc'] = 'Configure the centralized FAQ and Zendesk support ticket integration.';
$string['settings:faq_content'] = 'FAQ Content';
$string['settings:faq_content_desc'] = 'Enter FAQ entries (one per line in the format: Q: question | A: answer). These will be provided to the AI to answer common support questions.';
$string['settings:zendesk_enabled'] = 'Enable Zendesk Escalation';
$string['settings:zendesk_enabled_desc'] = 'When the AI cannot resolve a support question, automatically create a Zendesk ticket with a conversation summary.';
$string['settings:zendesk_subdomain'] = 'Zendesk Subdomain';
$string['settings:zendesk_subdomain_desc'] = 'Your Zendesk subdomain (e.g. "mycompany" for mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'Zendesk API Email';
$string['settings:zendesk_email_desc'] = 'Email address of the Zendesk user for API authentication (with /token suffix).';
$string['settings:zendesk_token'] = 'Zendesk API Token';
$string['settings:zendesk_token_desc'] = 'API token for Zendesk authentication.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Off-topic Detection';
$string['settings:offtopic_heading_desc'] = 'Configure how the chat handles off-topic conversations.';
$string['settings:offtopic_enabled'] = 'Enable Off-topic Detection';
$string['settings:offtopic_enabled_desc'] = 'Instruct the AI to detect and redirect off-topic conversations.';
$string['settings:offtopic_max'] = 'Max Off-topic Messages';
$string['settings:offtopic_max_desc'] = 'Number of consecutive off-topic messages before taking action.';
$string['settings:offtopic_action'] = 'Off-topic Action';
$string['settings:offtopic_action_desc'] = 'What to do when the off-topic limit is reached.';
$string['settings:offtopic_action_warn'] = 'Warn and redirect';
$string['settings:offtopic_action_end'] = 'Temporarily lock access';
$string['settings:offtopic_lockout_duration'] = 'Lockout Duration (minutes)';
$string['settings:offtopic_lockout_duration_desc'] = 'How long (in minutes) a student loses access to the AI tutor after exceeding the off-topic limit. Default: 30 minutes.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Study Planning & Reminders';
$string['settings:studyplan_heading_desc'] = 'Configure study planning features and reminder notifications.';
$string['settings:studyplan_enabled'] = 'Enable Study Planning';
$string['settings:studyplan_enabled_desc'] = 'Allow the AI tutor to help students create personalized study plans based on their available time.';
$string['settings:reminders_email_enabled'] = 'Enable Email Reminders';
$string['settings:reminders_email_enabled_desc'] = 'Allow students to opt in to study reminders via email.';
$string['settings:reminders_whatsapp_enabled'] = 'Enable WhatsApp Reminders';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Allow students to opt in to study reminders via WhatsApp (requires WhatsApp API configuration).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'The API endpoint for sending WhatsApp messages (e.g. Twilio, MessageBird). Must accept POST with JSON body containing "to", "from", and "body" fields.';
$string['settings:whatsapp_api_token'] = 'WhatsApp API Token';
$string['settings:whatsapp_api_token_desc'] = 'Authentication token for the WhatsApp API.';
$string['settings:whatsapp_from_number'] = 'WhatsApp Sender Number';
$string['settings:whatsapp_from_number_desc'] = 'The phone number to send WhatsApp messages from (with country code, e.g. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp Blocked Countries';
$string['settings:whatsapp_blocked_countries_desc'] = 'Comma-separated ISO 3166-1 alpha-2 country codes where WhatsApp reminders are not allowed due to local regulations (e.g. "CN,IR,KP").';

// RAG / Semantic Search settings.
$string['settings:rag_heading'] = 'RAG / Semantic Search';
$string['settings:rag_heading_desc'] = 'Retrieval-Augmented Generation: index course content as embeddings and retrieve only the most relevant chunks at query time. Reduces token usage and supports all content types. Requires an embedding API.';
$string['settings:rag_enabled'] = 'Enable RAG (Semantic Search)';
$string['settings:rag_enabled_desc'] = 'When enabled, the AI tutor uses semantic search to retrieve relevant course content for each query instead of stuffing all content into the system prompt.';
$string['settings:embed_provider'] = 'Embedding Provider';
$string['settings:embed_provider_desc'] = 'The API provider used to generate text embeddings for RAG indexing and retrieval.';
$string['settings:embed_provider_openai'] = 'OpenAI (text-embedding-3-small)';
$string['settings:embed_provider_ollama'] = 'Ollama (local, e.g. nomic-embed-text)';
$string['settings:embed_apikey'] = 'Embedding API Key';
$string['settings:embed_apikey_desc'] = 'API key for the embedding provider. Can be different from the chat API key. Not required for Ollama.';
$string['settings:embed_model'] = 'Embedding Model';
$string['settings:embed_model_desc'] = 'Model to use for generating embeddings. OpenAI default: text-embedding-3-small. Ollama example: nomic-embed-text.';
$string['settings:embed_apibaseurl'] = 'Embedding API Base URL';
$string['settings:embed_apibaseurl_desc'] = 'Base URL for the embedding API. Leave blank for OpenAI default. For Ollama: http://localhost:11434/api';
$string['settings:embed_dimensions'] = 'Embedding Dimensions';
$string['settings:embed_dimensions_desc'] = 'Number of dimensions in the embedding vector. Must match your model output. OpenAI text-embedding-3-small: 1536. nomic-embed-text: 768.';
$string['settings:rag_topk'] = 'Top-K Chunks';
$string['settings:rag_topk_desc'] = 'Number of most relevant chunks to retrieve per user query and inject into the system prompt.';
$string['settings:rag_chunksize'] = 'Chunk Size (words)';
$string['settings:rag_chunksize_desc'] = 'Target number of words per content chunk when indexing course material. Smaller chunks are more precise; larger chunks provide more context.';

// Reminder messages.
$string['reminder:email_subject'] = 'Study Reminder: {$a}';
$string['reminder:email_body'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Your study plan suggests {$a->hours_per_week} hours per week for this course.

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Study Reminder for {$a->coursename}: {$a->message} (Opt out: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Today\'s study focus: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Unsubscribe from Study Reminders';
$string['unsubscribe:success'] = 'You have been successfully unsubscribed from study reminders for this course.';
$string['unsubscribe:already'] = 'You have already been unsubscribed from these reminders.';
$string['unsubscribe:invalid'] = 'Invalid or expired unsubscribe link.';
$string['unsubscribe:resubscribe'] = 'Changed your mind? You can re-enable reminders through the AI tutor chat.';

// Scheduled tasks.
$string['task:send_reminders'] = 'Send AI tutor study reminders';
$string['task:index_course_content'] = 'Index course content for RAG semantic search';
$string['task:send_inactivity_reminders'] = 'Send weekly inactivity reminder emails';
$string['task:run_integrity_checks'] = 'Run daily SOLA plugin integrity checks';
$string['messageprovider:study_notes'] = 'Study session notes';
$string['messageprovider:integrity_report'] = 'SOLA integrity check failure report';

// Plugin Updates.
$string['update:title'] = 'Plugin Updates';
$string['update:desc'] = 'Check for and install SOLA plugin updates directly from GitHub releases.';
$string['update:check'] = 'Check for Updates';
$string['update:install'] = 'Install Update';
$string['update:current_version'] = 'Installed Version';
$string['update:latest_version'] = 'Latest Available';
$string['update:up_to_date'] = 'Up to Date';
$string['update:available'] = 'Update Available';
$string['update:confirm'] = 'Install this update? A backup of the current version will be created automatically.';
$string['update:changelog'] = 'Release Notes';
$string['update:back_to_settings'] = 'Back to Settings';
$string['update:github_error'] = 'Could not reach GitHub. Check your connection or add a GitHub token in settings.';
$string['update:download_failed'] = 'Failed to download the update. Please try again or install manually.';
$string['update:github_token'] = 'GitHub Token (optional)';
$string['update:github_token_desc'] = 'Personal access token for accessing private GitHub repositories. Leave blank for public repos.';

// CDN / Frontend Delivery settings.
$string['settings:cdn_heading'] = 'CDN / Frontend Delivery';
$string['settings:cdn_heading_desc'] = 'Serve SOLA frontend assets (JS/CSS) from an external CDN instead of the Moodle filesystem. This allows frontend updates without a plugin upgrade. Leave the CDN URL empty to use the local plugin files.';
$string['settings:cdn_url'] = 'CDN Base URL';
$string['settings:cdn_url_desc'] = 'Base URL where sola.min.js and sola.min.css are hosted. Example: https://your-org.github.io/sola-cdn. Leave empty to use local plugin files.';
$string['settings:cdn_version'] = 'CDN Asset Version';
$string['settings:cdn_version_desc'] = 'Version string appended to CDN URLs for cache busting. Update this after each CDN deploy (e.g. 3.2.4 or a commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Overall Usage';
$string['analytics:tab_bycourse'] = 'By Course';
$string['analytics:tab_comparison'] = 'AI vs Non-Users';
$string['analytics:tab_byunit'] = 'By Unit';
$string['analytics:tab_usagetypes'] = 'Usage Types';
$string['analytics:tab_themes'] = 'Themes';
$string['analytics:tab_feedback'] = 'AI Feedback';
$string['analytics:total_students'] = 'Total Students';
$string['analytics:active_users'] = 'Active AI Users';
$string['analytics:msgs_per_student'] = 'Messages per Student';
$string['analytics:avg_session'] = 'Average Session Duration';
$string['analytics:return_rate'] = 'Return Rate';
$string['analytics:total_sessions'] = 'Total Sessions';
$string['analytics:thumbs_up'] = 'Thumbs Up';
$string['analytics:thumbs_down'] = 'Thumbs Down';
$string['analytics:hallucination_flags'] = 'Hallucination Flags';
$string['analytics:msgs_to_resolution'] = 'Messages to Resolution';
$string['analytics:helpful'] = 'Helpful';
$string['analytics:not_helpful'] = 'Not helpful';
$string['analytics:flag_hallucination'] = 'This response contains inaccurate information';
$string['analytics:submit_rating'] = 'Submit';
$string['analytics:thanks_feedback'] = 'Thanks for your feedback';

// Practice Scoring.
$string['rubric:score_title_conversation'] = 'Conversation Practice Score';
$string['rubric:score_title_pronunciation'] = 'Pronunciation Practice Score';
$string['rubric:overall'] = 'Overall';
$string['rubric:practice_again'] = 'Practice Again';
$string['rubric:done'] = 'Done';
$string['rubric:scoring'] = 'Evaluating your practice session...';
$string['rubric:encourage_high'] = 'Excellent work! Keep it up!';
$string['rubric:encourage_mid'] = 'Good effort! Keep practicing to improve.';
$string['rubric:encourage_low'] = 'Nice start! Regular practice will help you improve.';

// Analytics Export (Redash).
$string['redash_heading'] = 'Analytics Export';
$string['redash_heading_desc'] = 'Configure API key access for external analytics platforms like Redash. The export endpoint provides read-only JSON access to usage data, feedback, and cost analytics.';
$string['redash_api_key'] = 'Redash API Key';
$string['redash_api_key_desc'] = 'API key for external analytics platforms like Redash. Provides read-only access to usage data, feedback, and cost analytics. Leave blank to disable the export endpoint.';

// Integrity Checks.
$string['integrity:title'] = 'Integrity Checks';
$string['integrity:desc'] = 'Automated daily health checks that verify PHP syntax, JS builds, lang files, database tables, and more. Email alerts are sent only when issues are found.';
$string['integrity:enabled'] = 'Enable Daily Integrity Checks';
$string['integrity:enabled_desc'] = 'Run automated plugin health checks daily at 3 AM server time.';
$string['integrity:email'] = 'Report Email Address(es)';
$string['integrity:email_desc'] = 'Email address(es) for failure reports. Separate multiple addresses with commas. Leave blank to notify the primary site admin.';
$string['integrity:view_results'] = 'View Integrity Results';
$string['integrity:run_now'] = 'Run Checks Now';

// RAG admin page.
$string['ragadmin:title'] = 'RAG Index Status & Reindex';
$string['ragadmin:back_to_settings'] = 'Back to plugin settings';
$string['ragadmin:view_status'] = 'View RAG index status / reindex';
$string['ragadmin:rag_disabled_notice'] = 'RAG is currently disabled. Enable it in the plugin settings to activate semantic search. You can still pre-index courses below so the index is ready when you enable RAG.';
$string['ragadmin:reindexall'] = 'Reindex all active courses';
$string['ragadmin:reindexall_desc'] = 'Runs incremental indexing on all courses with active enrolments. Only new or changed content is re-embedded.';
$string['ragadmin:reindexall_confirm'] = 'This will call the embedding API for all new/changed content across all active courses. Continue?';
$string['ragadmin:reindexall_done'] = 'Reindexing complete: {$a->courses} course(s) processed — {$a->indexed} chunks indexed, {$a->skipped} skipped, {$a->errors} error(s).';
$string['ragadmin:reindexcourse_done'] = 'Course reindexed: {$a->indexed} chunks indexed, {$a->skipped} skipped, {$a->errors} error(s).';
$string['ragadmin:deleteindex'] = 'Clear index';
$string['ragadmin:deleteindex_confirm'] = 'Delete all indexed chunks for this course? The AI tutor will fall back to full content stuffing until the course is re-indexed.';
$string['ragadmin:deleteindex_done'] = 'Course index cleared.';
$string['ragadmin:index_status'] = 'Per-course index status';
$string['ragadmin:no_courses'] = 'No indexed courses and no active courses found.';
$string['ragadmin:never'] = 'Never';
$string['ragadmin:reindex'] = 'Reindex';
$string['ragadmin:stat_courses_indexed'] = 'Courses indexed';
$string['ragadmin:stat_total_chunks'] = 'Total chunks';
$string['ragadmin:stat_embedded_chunks'] = 'Embedded chunks';
$string['ragadmin:stat_active_courses'] = 'Active courses';
$string['ragadmin:col_course'] = 'Course';
$string['ragadmin:col_chunks'] = 'Chunks';
$string['ragadmin:col_embedded'] = 'Embedded';
$string['ragadmin:col_lastindexed'] = 'Last indexed';
$string['ragadmin:col_actions'] = 'Actions';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Stores student study plans.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'The ID of the user who owns the study plan.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'The course the study plan belongs to.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Hours per week the student plans to study.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'The study plan details in JSON format.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Stores study reminder preferences and subscriptions.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'The ID of the user subscribed to reminders.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'The reminder channel (email or whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'The email address or phone number for reminders.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'The user\'s country code for regulatory compliance.';
$string['privacy:metadata:local_ai_course_assistant_feedback'] = 'Stores user feedback and ratings.';
$string['privacy:metadata:local_ai_course_assistant_feedback:userid'] = 'The ID of the user who submitted feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:courseid'] = 'The course the feedback relates to.';
$string['privacy:metadata:local_ai_course_assistant_feedback:rating'] = 'The numeric rating given.';
$string['privacy:metadata:local_ai_course_assistant_feedback:comment'] = 'The feedback comment text.';
$string['privacy:metadata:local_ai_course_assistant_feedback:browser'] = 'The browser used when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:os'] = 'The operating system used when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:device'] = 'The device type used when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:screen_size'] = 'The screen size when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:user_agent'] = 'The browser user agent string.';
$string['privacy:metadata:local_ai_course_assistant_feedback:page_url'] = 'The page URL where feedback was submitted.';
$string['privacy:metadata:local_ai_course_assistant_feedback:timecreated'] = 'The time the feedback was submitted.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp'] = 'Stores survey responses from students.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:userid'] = 'The ID of the user who responded.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:courseid'] = 'The course the survey relates to.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:question_index'] = 'The index of the question answered.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:answer'] = 'The answer text or selection.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:timecreated'] = 'The time the response was submitted.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp'] = 'Stores usability testing responses.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:userid'] = 'The ID of the user who completed the test.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:courseid'] = 'The course the usability test relates to.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:task_index'] = 'The index of the task completed.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:rating'] = 'The numeric rating given for the task.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:answer'] = 'The free-text response for the task.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:timecreated'] = 'The time the response was submitted.';
$string['privacy:metadata:local_ai_course_assistant_audit'] = 'Stores audit log entries for compliance tracking.';
$string['privacy:metadata:local_ai_course_assistant_audit:userid'] = 'The ID of the user whose action was logged.';
$string['privacy:metadata:local_ai_course_assistant_audit:courseid'] = 'The course context of the action.';
$string['privacy:metadata:local_ai_course_assistant_audit:action'] = 'The action that was performed.';
$string['privacy:metadata:local_ai_course_assistant_audit:ipaddress'] = 'The IP address of the user.';
$string['privacy:metadata:local_ai_course_assistant_audit:useragent'] = 'The browser user agent string.';
$string['privacy:metadata:local_ai_course_assistant_audit:details'] = 'Additional details about the action.';
$string['privacy:metadata:local_ai_course_assistant_audit:timecreated'] = 'The time the action was logged.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores'] = 'Stores practice session scores and AI feedback.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:userid'] = 'The ID of the user who completed the practice.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:courseid'] = 'The course the practice session belongs to.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:session_type'] = 'The type of practice session (conversation or pronunciation).';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:overall_score'] = 'The overall score achieved.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:scores'] = 'Per-criterion scores in JSON format.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:ai_feedback'] = 'AI-generated feedback on the practice session.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:timecreated'] = 'The time the score was recorded.';

// AI Insights.
$string['insights:title'] = 'AI Insights';
$string['insights:desc'] = 'Analyze feedback, survey, and usability testing data to surface issues, feature requests, and recommendations.';
$string['insights:generate'] = 'Generate AI Insights';
$string['insights:generating'] = 'Analyzing data… this may take a moment.';
$string['insights:no_data'] = 'No feedback, survey, or usability testing data available to analyze yet. Insights will be available once users submit feedback or complete surveys.';
$string['insights:error'] = 'Could not generate insights.';

// Analytics dashboard.
$string['analytics:title'] = 'AI Tutor Analytics';
$string['analytics:overview'] = 'Overview';
$string['analytics:total_conversations'] = 'Total conversations';
$string['analytics:total_messages'] = 'Total messages';
$string['analytics:active_students'] = 'Active students';
$string['analytics:avg_messages_per_student'] = 'Avg messages per student';
$string['analytics:offtopic_rate'] = 'Off-topic rate';
$string['analytics:escalation_count'] = 'Escalated to support';
$string['analytics:studyplan_adoption'] = 'Students with study plans';
$string['analytics:usage_trends'] = 'Usage Trends';
$string['analytics:daily_messages'] = 'Daily message volume';
$string['analytics:hotspots'] = 'Course Hotspots';
$string['analytics:hotspots_desc'] = 'Course sections most frequently referenced in student questions. Higher counts may indicate areas where students need more support.';
$string['analytics:section'] = 'Section';
$string['analytics:mention_count'] = 'Mentions';
$string['analytics:common_prompts'] = 'Common Prompt Patterns';
$string['analytics:common_prompts_desc'] = 'Frequently recurring question patterns from students. Review these to identify systemic gaps in course content.';
$string['analytics:prompt_pattern'] = 'Pattern';
$string['analytics:frequency'] = 'Frequency';
$string['analytics:recent_activity'] = 'Recent Activity';
$string['analytics:no_data'] = 'No analytics data available yet. Data will appear once students begin using the AI tutor.';
$string['analytics:timerange'] = 'Time range';
$string['analytics:last_7_days'] = 'Last 7 days';
$string['analytics:last_30_days'] = 'Last 30 days';
$string['analytics:all_time'] = 'All time';
$string['analytics:export'] = 'Export data';
$string['analytics:provider_comparison'] = 'AI Provider Comparison';
$string['analytics:provider_comparison_desc'] = 'Compare performance across AI providers used in this course.';
$string['analytics:provider'] = 'Provider';
$string['analytics:response_count'] = 'Responses';
$string['analytics:avg_response_length'] = 'Avg response length';
$string['analytics:total_tokens'] = 'Total tokens';
$string['analytics:avg_tokens'] = 'Avg tokens / response';

// User settings.
$string['usersettings:title'] = 'AI Course Assistant - Your Data';
$string['usersettings:intro'] = 'Manage your AI tutor chat data and privacy settings';
$string['usersettings:privacy_info'] = 'Your conversations with the AI tutor are stored to provide you with continuous support throughout your course. You have full control over this data and can delete it at any time.';
$string['usersettings:usage_stats'] = 'Your Usage Statistics';
$string['usersettings:total_messages'] = 'Total messages';
$string['usersettings:total_conversations'] = 'Conversations';
$string['usersettings:messages'] = 'Messages';
$string['usersettings:last_activity'] = 'Last activity';
$string['usersettings:delete_course_data'] = 'Delete course data';
$string['usersettings:no_data'] = 'You haven\'t used the AI tutor yet. Your usage data will appear here once you start chatting.';
$string['usersettings:delete_all_title'] = 'Delete All Your Data';
$string['usersettings:delete_all_warning'] = 'This will permanently delete all your AI tutor conversations across all courses. This action cannot be undone.';
$string['usersettings:delete_all_button'] = 'Delete All My Data';
$string['usersettings:confirm_delete_course'] = 'Are you sure you want to permanently delete all your AI tutor data for the course "{$a}"? This action cannot be undone.';
$string['usersettings:confirm_delete_all'] = 'Are you sure you want to permanently delete ALL your AI tutor data across all courses? This action cannot be undone.';
$string['usersettings:data_deleted'] = 'Your data has been deleted.';

// Quiz.
$string['chat:quiz']                    = 'Take a practice quiz';
$string['chat:quiz_setup_title']        = 'Practice Quiz';
$string['chat:quiz_questions']          = 'Number of questions';
$string['chat:quiz_topic']              = 'Topic';
$string['chat:quiz_topic_guided']       = 'AI-guided (based on your progress)';
$string['chat:quiz_topic_default']      = 'Current course content';
$string['chat:quiz_topic_custom']       = 'Custom topic…';
$string['chat:quiz_custom_placeholder'] = 'Enter a topic or question...';
$string['chat:quiz_start']              = 'Start Quiz';
$string['chat:quiz_cancel']             = 'Cancel';
$string['chat:quiz_loading']            = 'Generating quiz…';
$string['chat:quiz_error']              = 'Could not generate a quiz. Please try again.';
$string['chat:quiz_correct']            = 'Correct!';
$string['chat:quiz_wrong']              = 'Incorrect.';
$string['chat:quiz_next']               = 'Next question';
$string['chat:quiz_finish']             = 'See results';
$string['chat:quiz_score']              = 'Quiz complete! You scored {$a->score} out of {$a->total}.';
$string['chat:quiz_summary']            = 'I just completed a {$a->total}-question practice quiz on "{$a->topic}" and scored {$a->score}/{$a->total}.';

// Quiz topic categories.
$string['chat:quiz_topic_objectives']   = 'Learning Objectives';
$string['chat:quiz_topic_modules']      = 'Course Topic';
$string['chat:quiz_subtopic_select']    = 'Select a specific item…';
$string['chat:quiz_topic_sections']     = 'Course Sections';

// Quiz end screen.
$string['chat:quiz_score_great']        = 'Excellent work! You really know this material.';
$string['chat:quiz_score_good']         = 'Good effort! Keep reviewing to strengthen your understanding.';
$string['chat:quiz_score_practice']     = 'Keep practicing — try reviewing the related course material, then retake the quiz.';
$string['chat:quiz_review_heading']     = 'Review';
$string['chat:quiz_retake']             = 'Retake Quiz';
$string['chat:quiz_exit']               = 'Exit Quiz';
$string['chat:quiz_your_answer']        = 'Your answer';
$string['chat:quiz_correct_answer']     = 'Correct answer';

// Conversation starters.
$string['chat:starters_label']              = 'Conversation starters';
$string['chat:starter_help_page']           = 'Help With This';
$string['chat:starter_quiz']                = 'Quiz Me On This';
$string['chat:starter_ask_anything']        = 'Ask Anything';
$string['chat:starter_review_practice']     = 'Review & Practice';
$string['chat:starter_study_plan']          = 'Study Plan';
$string['chat:starter_ai_project_coach']    = 'AI Project Coach';
$string['chat:starter_ell_practice']        = 'Conversation Practice';
$string['chat:starter_ell_pronunciation']   = 'Pronunciation Practice';
$string['chat:starter_speak']               = 'Speak a starter';
// Legacy keys kept for backwards compatibility.
$string['chat:starter_explain']             = 'Explain This';
$string['chat:starter_key_concepts']        = 'Key Concepts';
$string['chat:starter_help_me']             = 'AI Help';
$string['chat:starter_ai_coach']            = 'AI Coach';
$string['chat:starter_quick_study']         = 'Quick Study';
$string['chat:starter_help_lesson']         = 'Explain This';
$string['chat:starter_prompt_coach']        = 'AI Prompt Coach';
$string['chat:starter_help_lesson_prompt']  = 'Can you help me understand the current lesson? Give me a summary of the key concepts.';
$string['chat:starter_study_plan_prompt']   = 'I\'d like to plan my current study session. Please ask me: (1) what I want to accomplish today, and (2) how much time I have available. If we\'ve discussed a study plan before, build on it or update it based on my answers.';
$string['chat:starter_explain_prompt']      = 'Can you explain the most important concept in this course so far?';

// Reset / home button.
$string['chat:reset']                     = 'Start over';

// Starter admin settings.
$string['starters:admin_title']     = 'Conversation Starter Settings';
$string['starters:admin_desc']      = 'Configure the conversation starter chips shown to students when they open the SOLA chat. Drag to reorder, toggle to enable/disable, or add custom starters with your own AI prompts.';
$string['starters:add_new']         = 'Add new starter';
$string['starters:save']            = 'Save changes';
$string['starters:saved']           = 'Starter configuration saved.';
$string['starters:reset_defaults']  = 'Reset to defaults';
$string['starters:reset_confirm']   = 'Reset all starters to built-in defaults? Custom starters will be deleted.';
$string['starters:reset_done']      = 'Starters reset to defaults.';
$string['starters:back_settings']   = 'Back to settings';
$string['starters:course_section']  = 'Conversation starters';
$string['starters:course_desc']     = 'Enable or disable individual starters for this course.';

// Topic picker (used by conversation starters).
$string['chat:topic_picker_title']        = 'What would you like to focus on?';
$string['chat:topic_picker_title_help']   = 'What would you like help with?';
$string['chat:topic_picker_title_explain']= 'What would you like me to explain?';
$string['chat:topic_picker_title_study']  = 'What area would you like to focus on?';
$string['chat:topic_start']               = 'Continue';

$string['chat:fullscreen']              = 'Full screen';
$string['chat:exitfullscreen']          = 'Exit full screen';

// Globe language picker in header.
$string['chat:language']                = 'Change language';
$string['chat:settings_panel']          = 'Settings';
$string['chat:settings_language']       = 'Language';
$string['chat:settings_avatar']         = 'Avatar';
$string['chat:settings_voice']          = 'Voice';
$string['chat:settings_voice_admin']    = 'Voice settings are managed in the site admin panel.';

// Voice mode (OpenAI Realtime).
$string['chat:voice_mode']              = 'Voice mode';
$string['chat:voice_title']             = 'Talk with SOLA';
$string['chat:voice_copy']              = 'Have a natural voice conversation with your learning assistant.';
$string['chat:voice_ready']             = 'Ready to start';
$string['chat:voice_start']             = 'Start conversation';
$string['chat:voice_end']               = 'End voice session';
$string['chat:voice_connecting']        = 'Connecting...';
$string['chat:voice_listening']         = 'Listening...';
$string['chat:voice_speaking']          = 'SOLA is speaking...';
$string['chat:voice_idle']              = 'Ready';
$string['chat:voice_error']             = 'Voice connection failed. Please check your settings.';
$string['chat:quiz_locked']             = 'SOLA is paused during quizzes to support academic integrity. Good luck!';

// Bottom navigation modes.
$string['chat:mode_nav']                = 'Mode navigation';
$string['chat:mode_chat']               = 'Chat';
$string['chat:mode_voice']              = 'Voice';
$string['chat:mode_history']            = 'Notes';

// History panel.
$string['chat:history_title']           = 'Notes and Conversation History';
$string['chat:history_subtitle']        = 'Your recent messages in this course.';
$string['chat:history_empty']           = 'No conversations yet.';
$string['chat:history_refresh']         = 'Refresh';
$string['chat:history_saved_subtitle']  = 'Saved responses stay on this device for this course.';
$string['chat:history_saved_empty']     = 'Save an AI response to see it here.';
$string['chat:history_views_label']     = 'History views';
$string['chat:history_view_saved']      = 'Saved';
$string['chat:history_view_recent']     = 'History';

// Debug panel.
$string['chat:debug_context']           = 'Context Debug';
$string['chat:debug_context_toggle']    = 'Toggle context debug inspector';
$string['chat:debug_context_copy']      = 'Copy';
$string['chat:debug_context_browser']   = 'Browser Snapshot';
$string['chat:debug_context_request']   = 'Last SSE Request';
$string['chat:debug_context_prompt']    = 'Server Response';
$string['chat:debug_refresh']           = 'Refresh';
$string['chat:debug_copy_all']          = 'Copy all';
$string['chat:debug_close']             = 'Close';

// Language suggestion banner.
$string['chat:language_switch']         = 'Switch language';
$string['chat:language_dismiss']        = 'Dismiss language suggestion';

// Composer LLM picker (admin/debug).
$string['chat:llm_label']               = 'LLM';
$string['chat:llm_provider_select']     = 'Select LLM provider';
$string['chat:llm_model_label']         = 'Model';
$string['chat:llm_model_select']        = 'Select LLM model';

// Footer links.
$string['chat:footer_usertesting']      = 'Usability Testing';
$string['chat:footer_feedback']         = 'Feedback';

// Voice panel title (uses {$a} for assistant display name).
$string['chat:voice_panel_title']       = 'Talk with {$a} (Experimental)';

// Quiz hide settings.
$string['settings:quiz_hide_heading'] = 'Quiz Page Visibility';
$string['settings:quiz_hide_heading_desc'] = 'Control whether the SOLA widget appears on Moodle quiz pages. This is stricter than the built-in summative quiz lock, which only disables chat during graded quizzes. These settings completely hide the widget on all quiz pages.';
$string['settings:hide_on_quiz_for_students'] = 'Hide SOLA on quiz pages for students';
$string['settings:hide_on_quiz_for_students_desc'] = 'Completely hide the SOLA widget on all quiz pages (view, attempt, review) for students.';
$string['settings:hide_on_quiz_for_staff'] = 'Hide SOLA on quiz pages for staff';
$string['settings:hide_on_quiz_for_staff_desc'] = 'Completely hide the SOLA widget on all quiz pages for teachers and administrators.';

// Wellbeing & Safety settings.
$string['settings:wellbeing_heading']      = 'Wellbeing & Safety';
$string['settings:wellbeing_heading_desc'] = 'When enabled, SOLA detects expressions of distress or crisis and responds with empathy and globally-applicable support resources (findahelpline.com, Crisis Text Line, Befrienders Worldwide). SOLA is NOT a counselor — it acknowledges feelings, directs students to human support, and never attempts diagnosis or therapy.';
$string['settings:wellbeing_enabled']      = 'Enable Wellbeing Support';
$string['settings:wellbeing_enabled_desc'] = 'When enabled, SOLA will detect signs of emotional distress and provide empathetic responses with links to global crisis resources. Disable this if your institution provides its own crisis response and does not want SOLA to surface external resources.';

// Voice mode settings.
$string['settings:realtime_heading']      = 'Voice Mode (OpenAI Realtime)';
$string['settings:realtime_enabled']      = 'Enable Voice Mode';
$string['settings:realtime_enabled_desc'] = 'Allows students to have real-time voice conversations with SOLA. Requires an OpenAI API key.';
$string['settings:realtime_apikey']       = 'OpenAI API Key (Voice & TTS)';
$string['settings:realtime_apikey_desc']  = 'Used for Voice Mode and the TTS speak button on messages. Leave blank to fall back to the main API key when provider is set to OpenAI.';
$string['settings:realtime_voice']        = 'SOLA Voice';
$string['settings:realtime_voice_desc']   = 'Voice used for both Voice Mode and the TTS speak button (OpenAI voices: Shimmer, Alloy, Echo, Fable, Onyx, Nova).';

// Mobile app.
$string['mobile_welcome']       = 'Hi, {$a}!';
$string['mobile_welcome_sub']   = 'I\'m SOLA, your learning assistant. How can I help you today?';
$string['mobile_placeholder']   = 'Ask a question...';
$string['mobile_clear']         = 'Clear history';
$string['mobile_disabled']      = 'SOLA is not available for this course.';
$string['mobile_chip_concepts'] = 'Key Concepts';
$string['mobile_chip_studyplan'] = 'Study Plan';
$string['mobile_chip_quiz']     = 'Quiz Me';

// Rate limiting and error strings.
$string['error_rate_limit_ip'] = 'Too many requests from your IP address. Please wait a moment.';
$string['error_rate_limit_user'] = 'Too many requests. Please wait a moment.';
$string['error_no_tts_key'] = 'No OpenAI API key configured for TTS.';

// Reminder validation errors.
$string['error_reminders_email_disabled'] = 'Email reminders are not enabled.';
$string['error_reminders_whatsapp_disabled'] = 'WhatsApp reminders are not enabled.';
$string['error_reminders_whatsapp_country_blocked'] = 'WhatsApp reminders are not available in your country.';
