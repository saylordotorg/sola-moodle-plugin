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

// AI-generated translation. Professional review recommended.
// Note: Technical terms without Bambara equivalents use French loanwords, which are common in Malian usage.

/**
 * Language strings for local_ai_course_assistant — Bambara (Bamanankan).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'AI Kalanso Dɛmɛbaga';
$string['attachment:attach'] = 'A masala';
$string['attachment:attach_image_or_pdf'] = 'Ja walima PDF masala';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'AI karamɔgɔ ka kumakanbali mara jɔyɔrɔ kelen-kelen dɔ ani kalanso bɛɛ la.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Jɔyɔrɔ mɔgɔ ka ID.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Kalanso ID min na kumakanbali kɛra.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Kumakanbali tɔgɔ.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Kumakanbali dabɔ waati.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Kumakanbali yɛlɛmako laban waati.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Kumakanbali kɔnɔ cɛbɛn kɛ-kɛlen mara.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Cɛbɛn ci mɔgɔ ka ID.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Kalanso ID min na cɛbɛn tɛmɛna.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Cɛbɛn ci mɔgɔ ka wɛlɛya (jɔyɔrɔ wala dɛmɛbaga).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Cɛbɛn kɔnɔkow.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Cɛbɛn kama tokens dɔgɔtɔ ye.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Cɛbɛn dabɔ waati.';

// Capabilities.
$string['ai_course_assistant:use'] = 'AI karamɔgɔ kumakanbali kɛ';
$string['ai_course_assistant:viewanalytics'] = 'AI karamɔgɔ analytics lajɛ';
$string['ai_course_assistant:manage'] = 'AI karamɔgɔ laadi ɲɛmɔgɔya (Administrateur wɛlɛya)';

// Settings.
$string['settings:enabled'] = 'AI Kalanso Dɛmɛbaga a la';
$string['settings:enabled_desc'] = 'AI Kalanso Dɛmɛbaga widget a la wala a bɔ kalanso fɛɛrɛw kan.';
$string['settings:default_course_mode'] = 'Kalan kura walasa ye i sababu';
$string['settings:default_course_mode_desc'] = 'A bɛ SOLA jira kalan na ni kalan kelen-kelen sugandili ma kɛ. Kabini-kura bɛ daminɛ ni "Dabɔlen ye i sababu ye", walisa ɲɛmɔgɔw ka se ka a da kalan kelen-kelen kan ka bɔ Analytics ɲɛ walima Course AI Settings ɲɛ kan.';
$string['settings:default_course_mode_per_course'] = 'Dabɔlen ye i sababu ye (a bila kalan kelen-kelen kan)';
$string['settings:default_course_mode_all'] = 'A bɛ baara la kalanw bɛɛ la';
$string['settings:auto_open'] = 'A yɛrɛ kɛ ka wuli taama fɔlɔ la';
$string['settings:auto_open_desc'] = 'Ni a bɛ baara la, SOLA papier bɛ a yɛrɛ wuli kalanden mana don kalansow kelen-kelen na siɲɛ fɔlɔ. Ni kalanden tora kalanso kelen kɔnɔ, page weleli wɛrɛw tɛna papier wuli tugun — cogo bɛ kɛ kalanso kelen-kelen na kalanden ka navigateur kɔnɔ ni localStorage ye. A bɛ baara kɛ desktop ni telefonin kan. A bɛ se ka yɛlɛma kalanso kelen-kelen kama Course AI Settings page la.';
$string['settings:comparison_providers'] = 'Baarakɛlaw danfaraw (LLM sugandili)';
$string['settings:comparison_providers_desc'] = 'Fàra AI baarakɛlaw wɛrɛw fara kan LLM sugandili kan walasa administrators bɛ se ka jaabi danfaraw lajɛ baarakɛla caman na. Tabali min bɛ duguma na, a kɛ ka layini fara kan. Funteni bolofara ye sugandiliko ye (a to lankolon walasa ka funteni kuntigiba kɛ). Format min marala: provider_id|api_key|model1,model2|temperature. Baarakɛla kunba min bɛ sanfɛ, o bɛ don a yɛrɛma tuma bɛɛ. Administrators minnu bɛ ni manage se ye, olu dɔrɔn de bɛ sugandili ye; kalandenw tɛ a ye abada. Provider IDs tilennenw: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'AI Bɛɛlɛ Dɔnbaga lakikalen';
$string['settings:provider_desc'] = 'IA dilanbaga sugandi baro dafali kama. "Moodle AI (core_ai subsystem)" sugandi walasa ka deliliw ci Moodle ka AI labɛnni kɔnɔna la Site admin > AI la; API kilé, ko dilanbaga ani URL jɔyɔrɔ fɛɛrɛw tɛ jatɛ o cogoya la. Streaming, tool use ani prompt caching tɛ sɔrɔ core_ai fɛ — jaabiw bɛ di i ko fɛn kelen. Dilanbaga tilennen kɛ kalandenw ka kɛcogo ɲumanba kama.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Fan-fɛn)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Wɛrɛ (OpenAI ye ɲɔgɔn na)';
$string['settings:apikey'] = 'API Kunnafoni';
$string['settings:apikey_desc'] = 'API kunnafoni sugandi bɛɛlɛ dɔnbaga ye. Ollama ma o dɔn.';
$string['settings:model'] = 'Modèle Tɔgɔ';
$string['settings:model_desc'] = 'Modèle min bɛ kɛ. Default bɛ bɛɛlɛ dɔnbaga kan (misali claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API Taaribolɔ URL';
$string['settings:apibaseurl_desc'] = 'API taaribolɔ URL. Bɛɛlɛ dɔnbaga bɛɛ ye a yɛrɛ tilɛ ɲɛ fɔlɔ, nka a bɛ se ka yɛlɛma. Bɛɛlɛ dɔnbaga default kama a bɔ ɲɛ.';
$string['settings:systemprompt'] = 'Système Invite Misali';
$string['settings:systemprompt_desc'] = 'AI ci invite. Jagomaw jɔminɛ: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'I ye AI karamɔgɔ dɛmɛbaga ye kalanso "{{coursename}}" kama. Kalandenw ka wɛlɛya ye {{userrole}}.

Kalanso kow minw kɛra:
{{coursetopics}}

Kalanden dɛmɛ kalanso kow kalan kama. Kɔlɔsili kɛ, a jɛ, ani kalan fan na ɲɛ.';
$string['settings:temperature'] = 'Température';
$string['settings:temperature_desc'] = 'Aléatoire laadi. Keyi dɔgɔmanw ye focus ka bon, keyi gɛlɛnmanw ye créatif ka bon. Kɛmɛ: 0.0 ni 2.0.';
$string['settings:maxhistory'] = 'Kumakanbali Kɔkɔ Caman';
$string['settings:maxhistory_desc'] = 'Cɛbɛn filɛlaw caman min bɛ API codsiyaw kɔnɔ. Kɔ cɛbɛnw bɛ tigɛ.';
$string['settings:avatar'] = 'Kumakanbali Avatar';
$string['settings:avatar_desc'] = 'Avatar icône sugandi kumakanbali widget bouton kama.';
$string['settings:avatar_saylor'] = '{$a} Logo (Default)';
$string['settings:position'] = 'Widget Yɔrɔ';
$string['settings:position_desc'] = 'Kumakanbali widget yɔrɔ fɛɛrɛ kan.';
$string['settings:position_br'] = 'Kɔrɔ nɔrɔ';
$string['settings:position_bl'] = 'Kɔrɔ numanbolo';
$string['settings:position_tr'] = 'Sanfɛ nɔrɔ';
$string['settings:position_tl'] = 'Sanfɛ numanbolo';
$string['chat:settings'] = 'Plugin laadili';
$string['analytics:viewdashboard'] = 'Analytics tableau de bord lajɛ';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'Kalanso AI Laadiliw';
$string['coursesettings:enabled'] = 'Kalanso yɛlɛmaw a la';
$string['coursesettings:enabled_desc'] = 'A la tuma na, kɔrɔ laadiliw bɛ global AI laadiliw sɔrɔ kalanso in kɔnɔ dɔrɔn. Global keyi sɔrɔ kama tɛ kɛ ni yɔrɔw.';
$string['coursesettings:sola_enabled'] = 'SOLA bɛ nin kalan in na';
$string['coursesettings:sola_enabled_toggle'] = 'SOLA minɛn jira nin kalan in kan';
$string['coursesettings:sola_enabled_desc'] = 'A bɛ SOLA baro minɛn jira nin kalan in kan walima a ma kɛ. Sitiri-bɛɛ i sababu bɛ dabɔ palogin nafaw la General > Default for new courses kɔrɔ.';
$string['coursesettings:using_global'] = 'Global laadili bɛ kɛ';
$string['coursesettings:saved'] = 'Kalanso AI laadiliw mara.';
$string['coursesettings:global_settings_link'] = 'Global AI laadiliw';

// Language detection and preference.
$string['lang:switch'] = 'Ɔnɔ, yɛlɛma';
$string['lang:dismiss'] = 'Ayi, i ni ce';
$string['lang:change'] = 'Kan yɛlɛma';
$string['lang:english'] = 'Angilɛkan';

// Chat widget.
$string['chat:title'] = 'AI Karamɔgɔ';
$string['chat:placeholder'] = 'Ɲininkali dɔ ɲini...';
$string['chat:send'] = 'Ci';
$string['chat:close'] = 'Kumakanbali datugu';
$string['chat:open'] = 'AI karamɔgɔ kumakanbali dayɛlɛ';
$string['chat:clear'] = 'Clear screen';
$string['chat:clear_confirm'] = 'Clear the visible messages? Your full chat history stays saved and can be reloaded by reopening the widget.';
$string['chat:copy'] = 'Kumakanbali copie kɛ';
$string['chat:copied'] = 'Kumakanbali copier kɛra clipboard kan';
$string['chat:copy_failed'] = 'Kumakanbali copie kɛ ma se ka kɛ';
$string['chat:thinking'] = 'Miiriya kɛ la...';
$string['chat:error'] = 'Hakɛ, fɛn dɔ ma ɲɛ. I ka ko a laban kɔsɔbɛ.';
$string['chat:error_auth'] = 'Authentification fɔlɔfɔli. I ka administrateur ka telefɔni kɛ.';
$string['chat:error_ratelimit'] = 'Codsiyaw ka caman. I ka subaga dɔn ka a laban kɔsɔbɛ.';
$string['chat:error_unavailable'] = 'AI service bɛ waati dɔgɔman. I ka a laban kɔsɔbɛ o kɔ.';
$string['chat:error_notconfigured'] = 'AI karamɔgɔ ma configure fɔlɔ. I ka administrateur ka telefɔni kɛ.';
$string['chat:mic'] = 'I ka ɲininkali fɔ';
$string['chat:mic_error'] = 'Microphone fɔlɔfɔli. I ka navigateur ka autorisations lajɛ.';
$string['chat:mic_unsupported'] = 'Kan donnée ma navigateur in na sɔrɔ.';
$string['chat:newline_hint'] = 'Shift+Enter kalan kura kama';
$string['chat:you'] = 'I';
$string['chat:assistant'] = 'AI Karamɔgɔ';
$string['chat:history_loaded'] = 'Kɔ kumakanbali load kɛra.';
$string['chat:history_cleared'] = 'Kumakanbali kɔkɔ tigɛra.';
$string['chat:offtopic_warning'] = 'I ka ɲininkali bɛ yɔrɔw ni kalanso in tɛ ɲɔgɔn na la. I ka kalanso kow la sigi walisa ne ka se ka i dɛmɛ ɲɛ!';
$string['chat:offtopic_ended'] = 'I ka AI karamɔgɔ baarakɛyɔrɔ datugun kɛra {$a} miniti kama dumunike walima kumakanbali ye kalanso la yɛlɛma caman ye. I ka kalanso kow lajɛ waati in na, i bɛ se ka a laban a kɔ.';
$string['chat:offtopic_locked'] = 'I ka AI karamɔgɔ baarakɛyɔrɔ datugun kɛra waati dɔ kama. I bɛ se ka a laban {$a} miniti kɔnɔ. I ka kalanso ɲininkaliw la sigi i ka segin tuma na.';
$string['chat:escalated_to_support'] = 'Ne ma se ka i ka ɲininkali jaabi dafali, o la ne ye ticket support dɔ dabɔ i kama. Support team ka mɔgɔ dɔ bɛna a kɔ tɛmɛ. I ka ticket numéro ye: {$a}';
$string['chat:studyplan_intro'] = 'Ne bɛ se ka i dɛmɛ kalanso in kama kalan jɛkulu dabɔ! Fɔ ne ye saan o saan juma bɛɛ dɔn waati caman i bɛ se ka kalan na fɛ, ne bɛna i dɛmɛ jɛkulu ɲɛkɔrɔ dɔ ɲɛ.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ & Support';
$string['settings:faq_heading_desc'] = 'FAQ laadi ani Zendesk ticket support ɲɔgɔnyɔrɔ.';
$string['settings:faq_content'] = 'FAQ Kɔnɔkow';
$string['settings:faq_content_desc'] = 'FAQ dont entrées sɛbɛn (kelen kelen kalan kan: Q: ɲininkali | A: jaabi). AI ci walisa a ka support ɲininkali jaabi ladɔnninen.';
$string['settings:zendesk_enabled'] = 'Zendesk Escalation a la';
$string['settings:zendesk_enabled_desc'] = 'AI ma se ka support ɲininkali jaabi tuma na, Zendesk ticket dɔ dabɔ yɛrɛyɛrɛ kumakanbali don na.';
$string['settings:zendesk_subdomain'] = 'Zendesk Sous-domaine';
$string['settings:zendesk_subdomain_desc'] = 'I ka Zendesk sous-domaine (misali "mycompany" mycompany.zendesk.com kama).';
$string['settings:zendesk_email'] = 'Zendesk API Email';
$string['settings:zendesk_email_desc'] = 'Zendesk jɔyɔrɔ email API authentification kama (/token la).';
$string['settings:zendesk_token'] = 'Zendesk API Token';
$string['settings:zendesk_token_desc'] = 'Token API Zendesk authentification kama.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Kalanso Bɔ Lajɛli';
$string['settings:offtopic_heading_desc'] = 'Kumakanbali bɛ kalanso bɔ kumakanbaliw laadi cogo di.';
$string['settings:offtopic_enabled'] = 'Kalanso Bɔ Lajɛli a la';
$string['settings:offtopic_enabled_desc'] = 'AI lɛrɛ ka kalanso bɔ kumakanbaliw lajɛ ani ka u yɛlɛma.';
$string['settings:offtopic_max'] = 'Kalanso Bɔ Cɛbɛnw Caman Tɛmɛnin';
$string['settings:offtopic_max_desc'] = 'Kalanso bɔ cɛbɛnw caman kɔnɔ kɔfɔ kɛyɛrɛ kala.';
$string['settings:offtopic_action'] = 'Kalanso Bɔ Kɛyɛrɛ';
$string['settings:offtopic_action_desc'] = 'Kalanso bɔ ɲɔgɔn sɔrɔ tuma na mun kɛ.';
$string['settings:offtopic_action_warn'] = 'Kunnafonibɔ ani yɛlɛma';
$string['settings:offtopic_action_end'] = 'Baarakɛyɔrɔ datugun waati dɔgɔman';
$string['settings:offtopic_lockout_duration'] = 'Blocage Waati (miniti)';
$string['settings:offtopic_lockout_duration_desc'] = 'Kalanden AI karamɔgɔ ma sɔrɔ waati (miniti la) ka bɔ kalanso bɔ ɲɔgɔn kɔ. Default: miniti 30.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Kalan Jɛkulu ani Kunnafonibɔw';
$string['settings:studyplan_heading_desc'] = 'Kalan jɛkulu ka fɛɛrɛw ani kunnafonibɔ notification laadi.';
$string['settings:studyplan_enabled'] = 'Kalan Jɛkulu a la';
$string['settings:studyplan_enabled_desc'] = 'AI karamɔgɔ lase walisa a ka kalandenw dɛmɛ u ka kalan jɛkuluw dabɔ waati minɛ kan.';
$string['settings:reminders_email_enabled'] = 'Email Kunnafonibɔw a la';
$string['settings:reminders_email_enabled_desc'] = 'Kalandenw lase walisa u ka kalan kunnafonibɔw sɔrɔ email la.';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsApp Kunnafonibɔw a la';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Kalandenw lase walisa u ka kalan kunnafonibɔw sɔrɔ WhatsApp la (WhatsApp API configure dɔnna).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'WhatsApp cɛbɛnw ci API endpoint (misali Twilio, MessageBird). POST ni JSON kɔnɔkow "to", "from", ani "body" bɛ se ka sɔrɔ.';
$string['settings:whatsapp_api_token'] = 'WhatsApp API Token';
$string['settings:whatsapp_api_token_desc'] = 'Token authentification WhatsApp API kama.';
$string['settings:whatsapp_from_number'] = 'WhatsApp Ci Mɔgɔ Telephone Nɔmɔrɔ';
$string['settings:whatsapp_from_number_desc'] = 'Telephone nɔmɔrɔ WhatsApp cɛbɛnw ci kama (dugukolo kunnafoni ni, misali +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp Dugukolo Dakɔrɔtaw';
$string['settings:whatsapp_blocked_countries_desc'] = 'Dugukolo kɔdɔw ISO 3166-1 alpha-2 virgule ni kelen kan min WhatsApp kunnafonibɔw ma dɔn sariya na (misali "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Kalan Kunnafonibɔ: {$a}';
$string['reminder:email_body'] = 'I ni sogoma {$a->firstname},

Nin ye i ka kalan kunnafonibɔ ye "{$a->coursename}" kama.

{$a->message}

I ka kalan jɛkulu bɛ {$a->hours_per_week} dɔn o dɔn juma kalanso in kama sɔrɔ.

A la ka ɲɛ!

---
Kunnafonibɔw dabila kama, yan digi: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Kalan Kunnafonibɔ {$a->coursename} kama: {$a->message} (Bɔ: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Bi kalan diiɲɛ: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Kalan Kunnafonibɔw Bɔ';
$string['unsubscribe:success'] = 'A dara ɲɛ i ye kalanso in kalan kunnafonibɔw bɔ.';
$string['unsubscribe:already'] = 'I ye nin kunnafonibɔw bɔ kɔ.';
$string['unsubscribe:invalid'] = 'Bɔ link tɛ ɲɛ wala a waati banna.';
$string['unsubscribe:resubscribe'] = 'I ye i miriya yɛlɛma wa? I bɛ se ka kunnafonibɔw segin AI karamɔgɔ kumakanbali la.';

// Scheduled task.
$string['task:send_reminders'] = 'AI karamɔgɔ kalan kunnafonibɔw ci';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Kalanden kalan jɛkuluw mara.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Kalan jɛkulu mɔgɔ ka ID.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kalanso min na kalan jɛkulu kɛra.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Kalanden bɛ dɔn juma lan caman kalan la.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Kalan jɛkulu kɔnɔkow JSON la.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Kunnafonibɔ diyadenya ani abonnement mara.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Kunnafonibɔw abonné mɔgɔ ka ID.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Kunnafonibɔ canal (email wala whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Kunnafonibɔw kama email wala telephone nɔmɔrɔ.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Jɔyɔrɔ ka dugukolo kɔdɔ sariya kɔlɔsili kama.';

// Analytics dashboard.
$string['analytics:title'] = 'AI Karamɔgɔ Analytics';
$string['analytics:overview'] = 'Lajɛ fɔlɔ';
$string['analytics:total_conversations'] = 'Kumakanbali bɛɛ';
$string['analytics:total_messages'] = 'Cɛbɛn bɛɛ';
$string['analytics:active_students'] = 'Kalanden kɛlɛngbɛnw';
$string['analytics:avg_messages_per_student'] = 'Cɛbɛn sababu kelen-kelen kalanden kama';
$string['analytics:offtopic_rate'] = 'Kalanso bɔ cogoya';
$string['analytics:escalation_count'] = 'Support ma segin';
$string['analytics:studyplan_adoption'] = 'Kalanden kalan jɛkulu dɔnni ni';
$string['analytics:usage_trends'] = 'Baara Cogoya Yɛlɛmalikow';
$string['analytics:daily_messages'] = 'Tile o tile cɛbɛn caman';
$string['analytics:hotspots'] = 'Kalanso Yɔrɔ Gɛlɛnw';
$string['analytics:hotspots_desc'] = 'Kalanso yɔrɔw minw jirara ka caman kalanden ɲininkaliw kɔnɔ. Jum caman bɛ yɔrɔw jira min kalanden dɛmɛ o dɛmɛ sɔrɔ.';
$string['analytics:section'] = 'Yɔrɔ';
$string['analytics:mention_count'] = 'Jirali';
$string['analytics:common_prompts'] = 'Invite Cogoya Baamanenw';
$string['analytics:common_prompts_desc'] = 'Ɲininkali cogoya minw bɛ kɛ caman kalandenw fɛ. U lajɛ walisa kalanso kɔnɔkow kɔnɔ yɔrɔ mɔlɔw sɔrɔ.';
$string['analytics:prompt_pattern'] = 'Cogoya';
$string['analytics:frequency'] = 'Kɛcogo';
$string['analytics:recent_activity'] = 'Tɛmɛnen Baara';
$string['analytics:no_data'] = 'Analytics data tɛ sisan. Data bɛna bɔ kalanden bɛɛ la ka AI karamɔgɔ baara daminɛ.';
$string['analytics:timerange'] = 'Waati kɛmɛ';
$string['analytics:last_7_days'] = 'Tile 7 tɛmɛnen';
$string['analytics:last_30_days'] = 'Tile 30 tɛmɛnen';
$string['analytics:all_time'] = 'Waati bɛɛ';
$string['analytics:export'] = 'Data bɔ';
$string['analytics:provider_comparison'] = 'AI Bɛɛlɛ Dɔnbaga Ɲɔgɔn Lajɛli';
$string['analytics:provider_comparison_desc'] = 'AI bɛɛlɛ dɔnbagaw minw baarara kalanso in la, u lajɛ ɲɔgɔn facɛ.';
$string['analytics:provider'] = 'Bɛɛlɛ Dɔnbaga';
$string['analytics:response_count'] = 'Jaabiliw';
$string['analytics:avg_response_length'] = 'Jaabili gudɔn sababu';
$string['analytics:total_tokens'] = 'Tokens bɛɛ';
$string['analytics:avg_tokens'] = 'Tokens sababu / jaabili';

// User settings.
$string['usersettings:title'] = 'AI Kalanso Dɛmɛbaga - I Ka Kunnafoniw';
$string['usersettings:intro'] = 'I ka AI karamɔgɔ kumakanbali kunnafoni ni intimité laadiliw laadi';
$string['usersettings:privacy_info'] = 'I ni AI karamɔgɔ ka kumakanbaliw marara walisa a ka i dɛmɛ kalanso waati la. I bɛ kunnafoni in laadi dɔrɔn i n\'a fɔ i bɛ o ɲini.';
$string['usersettings:usage_stats'] = 'I Ka Baara Cogoya Dɔnnili';
$string['usersettings:total_messages'] = 'Cɛbɛn bɛɛ';
$string['usersettings:total_conversations'] = 'Kumakanbaliw';
$string['usersettings:messages'] = 'Cɛbɛnw';
$string['usersettings:last_activity'] = 'Baara laban';
$string['usersettings:delete_course_data'] = 'Kalanso kunnafoni bɔ';
$string['usersettings:no_data'] = 'I ma AI karamɔgɔ baara kɛ fɔlɔ. I ka baara kunnafoni bɛna bɔ yan i ka kumakanbali daminɛ tuma na.';
$string['usersettings:delete_all_title'] = 'I Ka Kunnafoni Bɛɛ Bɔ';
$string['usersettings:delete_all_warning'] = 'Nin bɛna i ka AI karamɔgɔ kumakanbali bɛɛ bɔ kalanso bɛɛ la. Ko in tɛ se ka segin.';
$string['usersettings:delete_all_button'] = 'N Ka Kunnafoni Bɛɛ Bɔ';
$string['usersettings:confirm_delete_course'] = 'I b\'a fɛ ka i ka AI karamɔgɔ kunnafoni bɛɛ bɔ kalanso "{$a}" la dɔrɔn? Ko in tɛ se ka segin.';
$string['usersettings:confirm_delete_all'] = 'I b\'a fɛ ka i ka AI karamɔgɔ kunnafoni bɛɛ bɔ kalanso bɛɛ la? Ko in tɛ se ka segin.';
$string['usersettings:data_deleted'] = 'I ka kunnafoniw bɔra.';

// === SOLA v1.0.12 — new features translation ===
$string['chat:greeting'] = 'I ni ce, {$a}! Ne ye SOLA ye. Bɛɛ bɛ se ka i dɛmɛ bi wa?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA dayɛlɛ';
$string['chat:change_avatar'] = 'Avatar yɛlɛma';

// Quiz UI.
$string['chat:quiz'] = 'Kalansen ɲɛtaa dɔ ta';
$string['chat:quiz_setup_title'] = 'Kalansen Ɲɛtaa';
$string['chat:quiz_questions'] = 'Ɲininkali caman';
$string['chat:quiz_topic'] = 'Kuma kun';
$string['chat:quiz_topic_guided'] = 'AI bɛ lasigi (i ka tɛmɛnni kan)';
$string['chat:quiz_topic_adaptive']      = 'Yɛlɛmacogo — ka n ka mago-fɛnw faraka';
$string['chat:quiz_topic_default'] = 'Kalanso kɔnɔkow sisan';
$string['chat:quiz_topic_custom'] = 'Kuma kun wɛrɛ…';
$string['chat:quiz_custom_placeholder'] = 'Kuma kun wala ɲininkali sɛbɛn...';
$string['chat:quiz_start'] = 'Ɲɛtaa daminɛ';
$string['chat:quiz_cancel'] = 'Dabila';
$string['chat:quiz_loading'] = 'Kalansen ɲɛtaa dadon bɛ kɛra…';
$string['chat:quiz_error'] = 'Kalansen ɲɛtaa ma se ka kɛ. I ka a laban kɔsɔbɛ.';
$string['chat:quiz_correct'] = 'Tiɲɛ!';
$string['chat:quiz_wrong'] = 'Ntiɲɛ.';
$string['chat:quiz_next'] = 'Ɲininkali fitinin';
$string['chat:quiz_finish'] = 'Jaabi lajɛ';
$string['chat:quiz_score'] = 'Ɲɛtaa ban! I sɔrɔra {$a->score} {$a->total} kɔnɔ.';
$string['chat:quiz_summary'] = 'Ne ye kalansen ɲɛtaa dɔ ban "{$a->topic}" kan ɲininkali {$a->total} ni ani ne sɔrɔra {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Kalan Baarakɛ';
$string['chat:quiz_topic_modules'] = 'Kalanso Kuma Kun';
$string['chat:quiz_subtopic_select'] = 'Kunnafoni dɔ sugandi…';
$string['chat:quiz_topic_sections'] = 'Kalanso Yɔrɔw';
$string['chat:quiz_score_great'] = 'Baara ɲuman! I b\'a dɔn kosɔbɛ.';
$string['chat:quiz_score_good'] = 'Jɛkuluyali ɲuman! Kɔlɔsili ɲɛ k\'a fɔ i ka faamu ɲɛ.';
$string['chat:quiz_score_practice'] = 'Jɛkuluyali ɲɛ — kalanso kow lajɛ ka segin a la, o kɔ i ka ɲɛtaa laban kɔsɔbɛ.';
$string['chat:quiz_review_heading'] = 'Lajɛli';
$string['chat:quiz_retake'] = 'Ɲɛtaa laban';
$string['chat:quiz_exit'] = 'Ɲɛtaa bɔ';
$string['chat:quiz_your_answer'] = 'I ka jaabi';
$string['chat:quiz_correct_answer'] = 'Jaabi tiɲɛ';

// Conversation starters.
$string['chat:starters_label'] = 'Kumakan daminɛ';
$string['chat:starter_quiz'] = 'N Ɲɛti Nin Na';
$string['chat:starter_explain'] = 'Nin Yɛlɛn';
$string['chat:starter_key_concepts'] = 'Kunnafoni Gɛlɛnw';
$string['chat:starter_study_plan'] = 'Kalan Jɛkulu';
$string['chat:starter_help_me'] = 'AI Dɛmɛ';
$string['chat:starter_ai_project_coach'] = 'AI Porozɛ Karamɔgɔ';
$string['chat:starter_ell_practice'] = 'Kuma Lakodɔnni';
$string['chat:starter_ell_pronunciation'] = 'ELL Lafɔli';
$string['chat:starter_ai_coach'] = 'AI Karamɔgɔ';
$string['chat:starter_speak'] = 'Daminɛ fɔ';

// Reset / home.
$string['chat:reset'] = 'Kɔ daminɛ';

// Topic picker.
$string['chat:topic_picker_title'] = 'Mun kan i b\'a fɛ ka jɛku?';
$string['chat:topic_picker_title_help'] = 'Mun la i b\'a fɛ dɛmɛ?';
$string['chat:topic_picker_title_explain'] = 'Mun i b\'a fɛ ne ka yɛlɛn?';
$string['chat:topic_picker_title_study'] = 'Yɔrɔ juman i b\'a fɛ ka jɛku?';
$string['chat:topic_start'] = 'Ɲɛ';

// Expand states.
$string['chat:fullscreen'] = 'Fɛɛrɛ bɛɛ';
$string['chat:exitfullscreen'] = 'Fɛɛrɛ bɛɛ bɔ';

// Settings panel.
$string['chat:language'] = 'Kan yɛlɛma';
$string['chat:settings_panel'] = 'Laadili';
$string['chat:settings_language'] = 'Kan';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Kuma';
$string['chat:settings_voice_admin'] = 'Kuma laadiliw bɛ laadi site administrateur paneli la.';

// Voice mode.
$string['chat:voice_mode'] = 'Kuma cogoya';
$string['chat:voice_end'] = 'Kuma waati laban';
$string['chat:voice_connecting'] = 'Jɔyɔrɔ bɛ minɛ...';
$string['chat:voice_listening'] = 'Mɛn bɛ kɛ...';
$string['chat:voice_speaking'] = 'SOLA bɛ kuma...';
$string['chat:voice_idle'] = 'Lakɛlɛn';
$string['chat:voice_error'] = 'Kuma jɔyɔrɔ ma se. I ka laadiliw lajɛ.';
$string['chat:quiz_locked'] = 'SOLA datugun kɛra ɲɛtaa waati la kalansen tiɲɛya kɔlɔsili kama. I ni baara ɲuman!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Dɔgɔkun';

// History panel.
$string['chat:history_title'] = 'Dɔgɔkunw ni kuma taarixi';
$string['task:send_inactivity_reminders'] = 'Dɔgɔkun kelen kelen na hakili-jigin-bataki ci baara-bali kama';
$string['messageprovider:study_notes'] = 'Kalanko waati sɛbɛnniw';
$string['task:send_inactivity_reminders'] = 'Ci dɔgɔkun dɔgɔkun ladilikan bataki walasa ka baarakɛbaliya kɔfɔ';
$string['task:run_meta_ai_query'] = 'Ka Learning Radar jateminɛ ɲininkali latilennin boli';
$string['messageprovider:study_notes'] = 'Kalanko waati kunnafoni sɛbɛnw';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Ɲɛfɛla yiriwali';
$string['settings:cdn_heading_desc'] = 'SOLA ɲɛfɛla nafaw (JS/CSS) bɔ CDN kɛnɛ kan Moodle dosiyew nɔ na. Nin bɛ se ka ɲɛfɛla ladoni kɛ plugin yɛlɛma kɔfɛ. CDN URL to lankolon walasa ka plugin dosiyew kɛ.';
$string['settings:cdn_url'] = 'CDN URL daminɛ';
$string['settings:cdn_url_desc'] = 'URL daminɛ min na sola.min.js ni sola.min.css bɛ jɛnsɛn. Misali: https://your-org.github.io/sola-cdn. A to lankolon walasa ka plugin dosiyew kɛ.';
$string['settings:cdn_version'] = 'CDN nafolo version';
$string['settings:cdn_version_desc'] = 'Version sɛbɛn min bɛ fara CDN URL kan cache busting kama. A ladoni kɛ CDN deploy kelen-kelen kɔfɛ (misali 3.2.4 walima commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Bɛɛ lajɛli';
$string['analytics:tab_bycourse'] = 'Kalan fɛ';
$string['analytics:tab_comparison'] = 'AI ni tɛ baara la';
$string['analytics:tab_byunit'] = 'Yɔrɔ fɛ';
$string['analytics:tab_usagetypes'] = 'Baarakɛcogo suguya';
$string['analytics:tab_themes'] = 'Kuncɛla';
$string['analytics:tab_feedback'] = 'AI jaabi';
$string['analytics:total_students'] = 'Kalandenw bɛɛ';
$string['analytics:active_users'] = 'AI baarakɛlaw';
$string['analytics:msgs_per_student'] = 'Ci kalanden kelen ma';
$string['analytics:avg_session'] = 'Waati caman hakɛ';
$string['analytics:return_rate'] = 'Seginni hakɛ';
$string['analytics:total_sessions'] = 'Waati bɛɛ';
$string['analytics:thumbs_up'] = 'Bolokunnafin sanfɛ';
$string['analytics:thumbs_down'] = 'Bolokunnafin duguma';
$string['analytics:hallucination_flags'] = 'Fɔcogo jugu taamasiɲɛ';
$string['analytics:msgs_to_resolution'] = 'Ci fura sɔrɔli kama';
$string['analytics:helpful'] = 'Dɛmɛ bɛ a la';
$string['analytics:not_helpful'] = 'Dɛmɛ tɛ a la';
$string['analytics:flag_hallucination'] = 'Jaabi in kɔnɔ kunnafoni tiɲɛnen bɛ yen';
$string['analytics:submit_rating'] = 'A ci';
$string['analytics:thanks_feedback'] = 'Aw ni ce aw ka jaabi la';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Nin ɲɛ ɲɛfɔ';
$string['chat:starter_ask_anything'] = 'Fɛn o fɛn ɲininka';
$string['chat:starter_review_practice'] = 'Sɛgɛsɛgɛli ni lakodɔnni';
$string['chat:history_saved_subtitle'] = 'Jaabi marалenw bɛ to masin in na kalanso in kama.';
$string['chat:history_saved_empty'] = 'AI jaabi mara walisa k\'a ye yan.';
$string['chat:history_views_label'] = 'Kɔfɛkow jirali';
$string['chat:history_view_saved'] = 'Maralenw';
$string['chat:history_view_recent'] = 'Kɔfɛkow';
$string['chat:debug_refresh'] = 'A kura';
$string['chat:debug_copy_all'] = 'Bɛɛ ladege';
$string['chat:debug_close'] = 'A datugu';
$string['chat:language_switch'] = 'Kan falen';
$string['chat:language_dismiss'] = 'Kan laadilikan ban';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM dilannikɛla sugandi';
$string['chat:llm_model_label'] = 'Cogoya';
$string['chat:llm_model_select'] = 'LLM cogoya sugandi';
$string['chat:footer_usertesting'] = 'Baarakɛcogo sɛgɛsɛgɛli';
$string['chat:footer_feedback'] = 'Hakililajigin';
$string['chat:voice_panel_title'] = 'Kuma {$a} fɛ (Ka sɛgɛsɛgɛ)';

// Additional translated strings.
$string['chat:debug_context'] = 'Débogage du contexte';
$string['chat:debug_context_browser'] = 'Capture navigateur';
$string['chat:debug_context_copy'] = 'Copier';
$string['chat:debug_context_prompt'] = 'Réponse du serveur';
$string['chat:debug_context_request'] = 'Dernière requête SSE';
$string['chat:debug_context_toggle'] = 'Basculer';
$string['chat:history_empty'] = 'Aucune conversation.';
$string['chat:history_refresh'] = 'Actualiser';
$string['chat:history_subtitle'] = 'Vos messages récents.';
$string['chat:starter_explain_prompt'] = 'Expliquez le concept le plus important ?';
$string['chat:starter_help_lesson'] = 'Expliquez';
$string['chat:starter_help_lesson_prompt'] = 'Aidez-moi à comprendre. Résumez les concepts clés.';
$string['chat:starter_prompt_coach'] = 'Coach IA';
$string['chat:starter_quick_study'] = 'Étude rapide';
$string['chat:starter_study_plan_prompt'] = 'Je veux planifier mon étude. Demandez : (1) objectif, (2) temps. Mettez à jour le plan.';
$string['chat:voice_copy'] = 'Conversation vocale avec votre assistant.';
$string['chat:voice_ready'] = 'Prêt';
$string['chat:voice_start'] = 'Commencer';
$string['chat:voice_title'] = 'Parlez avec SOLA';
$string['coursesettings:ell_pronunciation'] = 'Pronunciation Practice Mode';
$string['coursesettings:ell_pronunciation_desc'] = 'Show the "Pronunciation Practice" chip for students in this course. Uses OpenAI Realtime API for phoneme-level pronunciation feedback. Requires Voice Mode to be enabled in global plugin settings.';
$string['coursesettings:ell_pronunciation_enable'] = 'Enable Pronunciation Practice chip for this course';
$string['coursesettings:rag'] = 'Semantic Search (RAG)';
$string['coursesettings:rag_desc'] = 'Enable retrieval-augmented generation for this course. When enabled, SOLA embeds and searches course content to ground its answers. Requires RAG to be enabled globally in plugin settings.';
$string['coursesettings:rag_enable'] = 'Enable RAG for this course';
$string['coursesettings:speaking_practice'] = 'Speaking Practice';
$string['coursesettings:speaking_practice_desc'] = 'Show the "Practice Speaking" chip for students in this course. Uses OpenAI TTS for voice responses. Requires an OpenAI API key in global plugin settings.';
$string['coursesettings:speaking_practice_enable'] = 'Enable Speaking Practice chip for this course';
$string['coursesettings:token_usage'] = 'Token Usage & Cost';
$string['coursesettings:token_usage_desc'] = 'View token usage, cost estimates, and per-student breakdowns for this course.';
$string['error'] = '{$a}';
$string['error_no_tts_key'] = 'No OpenAI API key configured for TTS.';
$string['error_rate_limit_ip'] = 'Too many requests from your IP address. Please wait a moment.';
$string['error_rate_limit_user'] = 'Too many requests. Please wait a moment.';
$string['error_reminders_email_disabled'] = 'Email reminders are not enabled.';
$string['error_reminders_whatsapp_country_blocked'] = 'WhatsApp reminders are not available in your country.';
$string['error_reminders_whatsapp_disabled'] = 'WhatsApp reminders are not enabled.';
$string['insights:desc'] = 'Analyze feedback, survey, and usability testing data to surface issues, feature requests, and recommendations.';
$string['insights:error'] = 'Could not generate insights.';
$string['insights:generate'] = 'Generate AI Insights';
$string['insights:generating'] = 'Analyzing data… this may take a moment.';
$string['insights:no_data'] = 'No feedback, survey, or usability testing data available to analyze yet. Insights will be available once users submit feedback or complete surveys.';
$string['insights:title'] = 'AI Insights';
$string['integrity:desc'] = 'Automated daily health checks that verify PHP syntax, JS builds, lang files, database tables, and more. Email alerts are sent only when issues are found.';
$string['integrity:email'] = 'Report Email Address(es)';
$string['integrity:email_desc'] = 'Email address(es) for failure reports. Separate multiple addresses with commas. Leave blank to notify the primary site admin.';
$string['integrity:enabled'] = 'Enable Daily Integrity Checks';
$string['integrity:enabled_desc'] = 'Run automated plugin health checks daily at 3 AM server time.';
$string['integrity:run_now'] = 'Run Checks Now';
$string['integrity:title'] = 'Integrity Checks';
$string['integrity:view_results'] = 'View Integrity Results';
$string['messageprovider:integrity_report'] = 'SOLA integrity check failure report';
$string['mobile_chip_concepts'] = 'Concepts clés';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Plan d\'études';
$string['mobile_clear'] = 'Effacer';
$string['mobile_disabled'] = 'SOLA n\'est pas disponible pour ce cours.';
$string['mobile_placeholder'] = 'Posez une question...';
$string['mobile_welcome'] = 'Bonjour, {$a} !';
$string['mobile_welcome_sub'] = 'Je suis SOLA, votre assistant. Comment puis-je vous aider ?';
$string['privacy:metadata:local_ai_course_assistant_audit'] = 'Stores audit log entries for compliance tracking.';
$string['privacy:metadata:local_ai_course_assistant_audit:action'] = 'The action that was performed.';
$string['privacy:metadata:local_ai_course_assistant_audit:courseid'] = 'The course context of the action.';
$string['privacy:metadata:local_ai_course_assistant_audit:details'] = 'Additional details about the action.';
$string['privacy:metadata:local_ai_course_assistant_audit:ipaddress'] = 'The IP address of the user.';
$string['privacy:metadata:local_ai_course_assistant_audit:timecreated'] = 'The time the action was logged.';
$string['privacy:metadata:local_ai_course_assistant_audit:useragent'] = 'The browser user agent string.';
$string['privacy:metadata:local_ai_course_assistant_audit:userid'] = 'The ID of the user whose action was logged.';
$string['privacy:metadata:local_ai_course_assistant_feedback'] = 'Stores user feedback and ratings.';
$string['privacy:metadata:local_ai_course_assistant_feedback:browser'] = 'The browser used when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:comment'] = 'The feedback comment text.';
$string['privacy:metadata:local_ai_course_assistant_feedback:courseid'] = 'The course the feedback relates to.';
$string['privacy:metadata:local_ai_course_assistant_feedback:device'] = 'The device type used when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:os'] = 'The operating system used when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:page_url'] = 'The page URL where feedback was submitted.';
$string['privacy:metadata:local_ai_course_assistant_feedback:rating'] = 'The numeric rating given.';
$string['privacy:metadata:local_ai_course_assistant_feedback:screen_size'] = 'The screen size when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:timecreated'] = 'The time the feedback was submitted.';
$string['privacy:metadata:local_ai_course_assistant_feedback:user_agent'] = 'The browser user agent string.';
$string['privacy:metadata:local_ai_course_assistant_feedback:userid'] = 'The ID of the user who submitted feedback.';
$string['privacy:metadata:local_ai_course_assistant_msgs:completion_tokens'] = 'The number of completion tokens generated.';
$string['privacy:metadata:local_ai_course_assistant_msgs:model_name'] = 'The AI model used for the response.';
$string['privacy:metadata:local_ai_course_assistant_msgs:prompt_tokens'] = 'The number of prompt tokens used.';
$string['privacy:metadata:local_ai_course_assistant_msgs:provider'] = 'The AI provider used for the response.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores'] = 'Stores practice session scores and AI feedback.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:ai_feedback'] = 'AI-generated feedback on the practice session.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:courseid'] = 'The course the practice session belongs to.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:overall_score'] = 'The overall score achieved.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:scores'] = 'Per-criterion scores in JSON format.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:session_type'] = 'The type of practice session (conversation or pronunciation).';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:timecreated'] = 'The time the score was recorded.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:userid'] = 'The ID of the user who completed the practice.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp'] = 'Stores survey responses from students.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:answer'] = 'The answer text or selection.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:courseid'] = 'The course the survey relates to.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:question_index'] = 'The index of the question answered.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:timecreated'] = 'The time the response was submitted.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:userid'] = 'The ID of the user who responded.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp'] = 'Stores usability testing responses.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:answer'] = 'The free-text response for the task.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:courseid'] = 'The course the usability test relates to.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:rating'] = 'The numeric rating given for the task.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:task_index'] = 'The index of the task completed.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:timecreated'] = 'The time the response was submitted.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:userid'] = 'The ID of the user who completed the test.';
$string['ragadmin:back_to_settings'] = 'Back to plugin settings';
$string['ragadmin:col_actions'] = 'Actions';
$string['ragadmin:col_chunks'] = 'Chunks';
$string['ragadmin:col_course'] = 'Course';
$string['ragadmin:col_embedded'] = 'Embedded';
$string['ragadmin:col_lastindexed'] = 'Last indexed';
$string['ragadmin:deleteindex'] = 'Clear index';
$string['ragadmin:deleteindex_confirm'] = 'Delete all indexed chunks for this course? The AI tutor will fall back to full content stuffing until the course is re-indexed.';
$string['ragadmin:deleteindex_done'] = 'Course index cleared.';
$string['ragadmin:index_status'] = 'Per-course index status';
$string['ragadmin:never'] = 'Never';
$string['ragadmin:no_courses'] = 'No indexed courses and no active courses found.';
$string['ragadmin:rag_disabled_notice'] = 'RAG is currently disabled. Enable it in the plugin settings to activate semantic search. You can still pre-index courses below so the index is ready when you enable RAG.';
$string['ragadmin:reindex'] = 'Reindex';
$string['ragadmin:reindexall'] = 'Reindex all active courses';
$string['ragadmin:reindexall_confirm'] = 'This will call the embedding API for all new/changed content across all active courses. Continue?';
$string['ragadmin:reindexall_desc'] = 'Runs incremental indexing on all courses with active enrolments. Only new or changed content is re-embedded.';
$string['ragadmin:reindexall_done'] = 'Reindexing complete: {$a->courses} course(s) processed — {$a->indexed} chunks indexed, {$a->skipped} skipped, {$a->errors} error(s).';
$string['ragadmin:reindexcourse_done'] = 'Course reindexed: {$a->indexed} chunks indexed, {$a->skipped} skipped, {$a->errors} error(s).';
$string['ragadmin:stat_active_courses'] = 'Active courses';
$string['ragadmin:stat_courses_indexed'] = 'Courses indexed';
$string['ragadmin:stat_embedded_chunks'] = 'Embedded chunks';
$string['ragadmin:stat_total_chunks'] = 'Total chunks';
$string['ragadmin:title'] = 'RAG Index Status & Reindex';
$string['ragadmin:view_status'] = 'View RAG index status / reindex';
$string['redash_api_key'] = 'Redash API Key';
$string['redash_api_key_desc'] = 'API key for external analytics platforms like Redash. Provides read-only access to usage data, feedback, and cost analytics. Leave blank to disable the export endpoint.';
$string['redash_heading'] = 'Analytics Export';
$string['redash_heading_desc'] = 'Configure API key access for external analytics platforms like Redash. The export endpoint provides read-only JSON access to usage data, feedback, and cost analytics.';
$string['remoteconfigurl'] = 'Remote config URL';
$string['remoteconfigurl_desc'] = 'URL to a JSON file containing remotely-managed SOLA configuration (system prompt, instruction blocks, model default). Must be HTTPS. Leave blank to use the default GitHub URL. Local admin settings always take priority over remote config values.';
$string['rubric:done'] = 'Terminé';
$string['rubric:encourage_high'] = 'Excellent ! Continuez !';
$string['rubric:encourage_low'] = 'Bon début ! La pratique régulière vous aidera.';
$string['rubric:encourage_mid'] = 'Bon effort ! Continuez à pratiquer.';
$string['rubric:overall'] = 'Global';
$string['rubric:practice_again'] = 'Pratiquer encore';
$string['rubric:score_title_conversation'] = 'Score de pratique';
$string['rubric:score_title_pronunciation'] = 'Score de prononciation';
$string['rubric:scoring'] = 'Évaluation en cours...';
$string['settings:avatar_color'] = 'Avatar Border Color';
$string['settings:avatar_color_desc'] = 'Border color of the floating avatar button. Use a hex value, e.g. #023e8a.';
$string['settings:avatar_fill'] = 'Avatar Background Color';
$string['settings:avatar_fill_desc'] = 'Fill color inside the floating avatar button (shown behind transparent avatar areas). Use a hex value, e.g. #ffffff.';
$string['settings:display_mode'] = 'Display Mode';
$string['settings:display_mode_desc'] = 'How SOLA appears on the page. "Widget" shows a floating avatar button with a popup chat panel. "Side drawer" shows a full-height panel that slides in from the right edge of the screen.';
$string['settings:display_mode_drawer'] = 'Side drawer (right edge)';
$string['settings:display_mode_widget'] = 'Widget (floating button)';
$string['settings:embed_apibaseurl'] = 'Embedding API Base URL';
$string['settings:embed_apibaseurl_desc'] = 'Base URL for the embedding API. Leave blank for OpenAI default. For Ollama: http://localhost:11434/api';
$string['settings:embed_apikey'] = 'Embedding API Key';
$string['settings:embed_apikey_desc'] = 'API key for the embedding provider. Can be different from the chat API key. Not required for Ollama.';
$string['settings:embed_dimensions'] = 'Embedding Dimensions';
$string['settings:embed_dimensions_desc'] = 'Number of dimensions in the embedding vector. Must match your model output. OpenAI text-embedding-3-small: 1536. nomic-embed-text: 768.';
$string['settings:embed_model'] = 'Embedding Model';
$string['settings:embed_model_desc'] = 'Model to use for generating embeddings. OpenAI default: text-embedding-3-small. Ollama example: nomic-embed-text.';
$string['settings:embed_provider'] = 'Embedding Provider';
$string['settings:embed_provider_desc'] = 'The API provider used to generate text embeddings for RAG indexing and retrieval.';
$string['settings:embed_provider_ollama'] = 'Ollama (local, e.g. nomic-embed-text)';
$string['settings:embed_provider_openai'] = 'OpenAI (text-embedding-3-small)';
$string['settings:hide_on_quiz_for_staff'] = 'Hide SOLA on quiz pages for staff';
$string['settings:hide_on_quiz_for_staff_desc'] = 'Completely hide the SOLA widget on all quiz pages for teachers and administrators.';
$string['settings:hide_on_quiz_for_students'] = 'Hide SOLA on quiz pages for students';
$string['settings:hide_on_quiz_for_students_desc'] = 'Completely hide the SOLA widget on all quiz pages (view, attempt, review) for students.';
$string['settings:institution_name'] = 'Institution Name';
$string['settings:institution_name_desc'] = 'The name of the institution displayed in the system prompt, avatar labels, and demo content. Change this when rebranding.';
$string['settings:model_desc_dynamic'] = 'Leave blank to use the provider\'s default model automatically. Each provider has a built-in default that stays current (e.g. gpt-4o for OpenAI, claude-sonnet-4 for Claude, mistral-large-latest for Mistral). Only enter a model name if you want to override the default. If a model is misspelled or deprecated, SOLA will automatically fall back to the provider\'s default.';
$string['settings:provider_gemini'] = 'Google Gemini';
$string['settings:quiz_hide_heading'] = 'Quiz Page Visibility';
$string['settings:quiz_hide_heading_desc'] = 'Control whether the SOLA widget appears on Moodle quiz pages. This is stricter than the built-in summative quiz lock, which only disables chat during graded quizzes. These settings completely hide the widget on all quiz pages.';
$string['settings:rag_chunksize'] = 'Chunk Size (words)';
$string['settings:rag_chunksize_desc'] = 'Target number of words per content chunk when indexing course material. Smaller chunks are more precise; larger chunks provide more context.';
$string['settings:rag_enabled'] = 'Enable RAG (Semantic Search)';
$string['settings:rag_enabled_desc'] = 'When enabled, the AI tutor uses semantic search to retrieve relevant course content for each query instead of stuffing all content into the system prompt.';
$string['settings:rag_heading'] = 'RAG / Semantic Search';
$string['settings:rag_heading_desc'] = 'Retrieval-Augmented Generation: index course content as embeddings and retrieve only the most relevant chunks at query time. Reduces token usage and supports all content types. Requires an embedding API.';
$string['settings:rag_topk'] = 'Top-K Chunks';
$string['settings:rag_topk_desc'] = 'Number of most relevant chunks to retrieve per user query and inject into the system prompt.';
$string['settings:realtime_apikey'] = 'OpenAI API Key (Voice & TTS)';
$string['settings:realtime_apikey_desc'] = 'Used for Voice Mode and the TTS speak button on messages. Leave blank to fall back to the main API key when provider is set to OpenAI.';
$string['settings:realtime_enabled'] = 'Enable Voice Mode';
$string['settings:realtime_enabled_desc'] = 'Allows students to have real-time voice conversations with SOLA. Requires an OpenAI API key.';
$string['settings:realtime_heading'] = 'Voice Mode (OpenAI Realtime)';
$string['settings:realtime_voice'] = 'SOLA Voice';
$string['settings:realtime_voice_desc'] = 'Voice used for both Voice Mode and the TTS speak button (OpenAI voices: Shimmer, Alloy, Echo, Fable, Onyx, Nova).';
$string['settings:wellbeing_enabled'] = 'Enable Wellbeing Support';
$string['settings:wellbeing_enabled_desc'] = 'When enabled, SOLA will detect signs of emotional distress and provide empathetic responses with links to global crisis resources. Disable this if your institution provides its own crisis response and does not want SOLA to surface external resources.';
$string['settings:wellbeing_heading'] = 'Wellbeing & Safety';
$string['settings:wellbeing_heading_desc'] = 'When enabled, SOLA detects expressions of distress or crisis and responds with empathy and globally-applicable support resources (findahelpline.com, Crisis Text Line, Befrienders Worldwide). SOLA is NOT a counselor — it acknowledges feelings, directs students to human support, and never attempts diagnosis or therapy.';
$string['starters:add_new'] = 'Add new starter';
$string['starters:admin_desc'] = 'Configure the conversation starter chips shown to students when they open the SOLA chat. Drag to reorder, toggle to enable/disable, or add custom starters with your own AI prompts.';
$string['starters:admin_title'] = 'Conversation Starter Settings';
$string['starters:back_settings'] = 'Back to settings';
$string['starters:course_desc'] = 'Enable or disable individual starters for this course.';
$string['starters:course_section'] = 'Conversation starters';
$string['starters:reset_confirm'] = 'Reset all starters to built-in defaults? Custom starters will be deleted.';
$string['starters:reset_defaults'] = 'Reset to defaults';
$string['starters:reset_done'] = 'Starters reset to defaults.';
$string['starters:save'] = 'Save changes';
$string['starters:saved'] = 'Starter configuration saved.';
$string['task:index_course_content'] = 'Index course content for RAG semantic search';
$string['task:run_integrity_checks'] = 'Run daily SOLA plugin integrity checks';
$string['update:available'] = 'Update Available';
$string['update:back_to_settings'] = 'Back to Settings';
$string['update:changelog'] = 'Release Notes';
$string['update:check'] = 'Check for Updates';
$string['update:confirm'] = 'Install this update? A backup of the current version will be created automatically.';
$string['update:current_version'] = 'Installed Version';
$string['update:desc'] = 'Check for and install SOLA plugin updates directly from GitHub releases.';
$string['update:download_failed'] = 'Failed to download the update. Please try again or install manually.';
$string['update:github_error'] = 'Could not reach GitHub. Check your connection or add a GitHub token in settings.';
$string['update:github_token'] = 'GitHub Token (optional)';
$string['update:github_token_desc'] = 'Personal access token for accessing private GitHub repositories. Leave blank for public repos.';
$string['update:install'] = 'Install Update';
$string['update:latest_version'] = 'Latest Available';
$string['update:title'] = 'Plugin Updates';
$string['update:up_to_date'] = 'Up to Date';

// Testing Environment admin page and TOC quick links (v3.9.4+).
$string['demo:title'] = 'Testing Environment';
$string['demo:heading'] = 'Testing Environment';
$string['demo:intro'] = 'This page creates a testing course that is <strong>hidden from students</strong> (visible=0) and seeds it with fake students, AI conversations, ratings, and feedback. Useful for previewing the Analytics Dashboard or validating plugin changes without affecting any real enrolled student.';
$string['demo:step1'] = 'Step 1: testing course';
$string['demo:step2'] = 'Step 2: seed fake students and AI chats';
$string['demo:course_exists'] = 'Testing course exists: <strong>{$a->fullname}</strong> (shortname <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'hidden';
$string['demo:badge_visible'] = 'visible to students';
$string['demo:no_course'] = 'No testing course found. Click below to create one.';
$string['demo:create_btn'] = 'Create hidden testing course';
$string['demo:open_course'] = 'Open course &rarr;';
$string['demo:seed_intro'] = 'Creates demo_student_001, demo_student_002, ... enrols them in the testing course, and inserts synthetic conversations, messages, ratings, and feedback. Run again to add more data, or tick "clear first" to start over.';
$string['demo:users_label'] = 'Users';
$string['demo:weeks_label'] = 'Weeks';
$string['demo:clear_label'] = 'Clear existing demo_* users first';
$string['demo:seed_btn'] = 'Seed students and chats';
$string['demo:view_analytics'] = 'View Analytics for this course &rarr;';
$string['demo:footer'] = 'Data created here lives in the standard Moodle user / enrolment tables and the plugin\'s own conversation tables. The fake users all have usernames starting with <code>demo_student_</code> so they are easy to filter or remove. To remove them, run the seed step again with "Clear existing demo_* users first" checked.';
$string['demo:course_fullname'] = 'SOLA Testing Course (hidden)';
$string['demo:notify_created'] = 'Testing course ready: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Failed to create course: {$a}';
$string['demo:notify_seeded'] = 'Seeded: {$a->users} users, {$a->conversations} conversations, {$a->messages} messages, {$a->ratings} ratings, {$a->feedback} feedback entries.';
$string['demo:notify_seed_fail'] = 'Failed to seed data: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Token Cost &amp; Analytics &rarr;';
$string['toc:testing'] = 'Testing Environment &rarr;';
$string['toc:back_to_course'] = '&larr; Back to {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext binary not found; PDF extraction disabled.';
$string['rag:pdftotext_available'] = 'pdftotext binary detected at {$a}.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive extension not available; DOCX extraction disabled.';
$string['rag:h5p_unavailable'] = 'H5P content could not be read; skipping.';
$string['rag:scorm_too_large'] = 'SCORM package exceeds the configured size limit ({$a} MB); skipping.';
$string['rag:scorm_unzip_failed'] = 'SCORM package could not be unzipped; skipping.';
$string['rag:transcript_fetch_failed'] = 'Could not fetch transcript from {$a}.';
$string['rag:transcript_cf_challenge'] = 'Transcript URL blocked by Cloudflare challenge: {$a}.';
$string['rag:embed_detected'] = 'Detected embedded media: {$a}';
$string['rag:embed_transcript_attached'] = 'Transcript attached for {$a}';

// v3.9.10–v3.9.14 new strings (English verbatim; translate later).
$string['usersettings:download'] = 'N ka {$a} kunnafoniw jiginni';
$string['usersettings:download_help'] = 'I ka jɔyɔrɔ la {$a} sɛbɛn bɛɛ jiginni JSON la i n\'a fɔ kuma-ɲɔgɔn-yew, cikanw, jatebɔliw, kalanni labɛnw, hakili-jiginni-fɛnw, dege-yala-jatew, ɲininkali-jaabiw, kunnafoni-yɛrɛ ani sɛgɛsɛgɛli-sɛbɛnw.';
$string['usersettings:privacy_notice_link'] = '{$a} ka gundo-laadiliw kalan';
$string['privacy:title'] = '{$a} ka gundo-laadiliw';
$string['admin:user_data:title'] = '{$a} — kalanden ka kunnafoniw labɔli ani jɔsili';
$string['admin:user_data:intro'] = 'GDPR sariya 15 (sɔrɔli) walima sariya 17 (jɔsili) ɲinini baara-sira. Kalanden ɲini ni Moodle baarakɛla nimɔrɔ ye, a ka kunnafoniw lajɛ minnu bɛ kɛrɛnkɛrɛnnenya in na, k\'u labɔ walima k\'u jɔsi.';
$string['admin:user_data:search_label'] = 'Moodle baarakɛla nimɔrɔ';
$string['admin:user_data:lookup'] = 'Ɲini';
$string['admin:user_data:not_found'] = 'Baarakɛla si ma sɔrɔ nimɔrɔ in na.';
$string['admin:user_data:download'] = 'Kalanden ka kunnafoniw bɛɛ jigin i n\'a fɔ JSON';
$string['admin:user_data:purge'] = 'Nin baarakɛla ka kalanden-kunnafoniw bɛɛ jɔsi';
$string['admin:user_data:confirm_purge'] = 'I b\'a fɛ ka {$a} ka sɛbɛn bɛɛ jɔsi tuma bɛɛ kama? O bɛ taa kuma-ɲɔgɔn-yew, cikanw, jatebɔliw, kalanni labɛnw, hakili-jiginni-fɛnw, kunnafoni-yɛrɛw, dege-yala-jatew, ɲininkaliw, sɛgɛsɛgɛli-sɛbɛnw ani jaabili kan. O baara tɛ se ka segin-ka-kɔ.';
$string['admin:user_data:purged'] = 'Baarakɛla sugandilen ka kunnafoniw bɛɛ jɔsira.';
$string['chat:consent_heading'] = 'Sani i ka kuma {$a->product} fɛ';
$string['chat:consent_body'] = '{$a->product} ye kalanni-dɛmɛbaga ye min bɛ baara kɛ ni hakililamaya-mansin (AI) ye. I ka cikanw ani {$a->product} ka jaabiw bɛ mara {$a->institution} ka Moodle kunnafoni-marayɔrɔ kɔnɔ, ani kuma-yɔrɔ tan minnu kɔrɔla, olu bɛ ci AI mɔdɛli-dilala min sɔn nara, walisa k\'i ka ɲininkaliw jaabi. I tɔgɔ fɔlɔ dɔrɔn de bɛ di kɛrɛnkɛrɛn-kɛli kama; baga-dɔnniya kunnafoni wɛrɛ tɛ ci AI dilala ma. I bɛ se ka i ka kunnafoniw jigin, k\'u jɔsi walima ka {$a->product} baara dabila waati o waati.';
$string['chat:consent_accept'] = 'N y\'a faamu, {$a} daminɛ';
$string['chat:consent_privacy_link'] = 'Gundo-laadiliw kuluyalen kalan';
$string['task:audit_cleanup'] = 'AI Course Assistant ka sɛgɛsɛgɛli-tabili saniyali';
$string['task:conversation_retention'] = 'AI Course Assistant ka kuma-ɲɔgɔn-yew maracogo furalan';
$string['settings:audit_retention_days'] = 'Sɛgɛsɛgɛli-sɛbɛnw maracogo (tile)';
$string['settings:audit_retention_days_desc'] = 'Don o don baara labɛnnen bɛ sɛgɛsɛgɛli-layiw kɔrɔnw jɔsi minnu si bɛ tɛmɛn nin kan. 0 b\'a sigi. Bolomafara: 365.';
$string['settings:conversation_retention_days'] = 'Kuma-ɲɔgɔn-yew maracogo (tile)';
$string['settings:conversation_retention_days_desc'] = 'Don o don baara labɛnnen bɛ kuma-ɲɔgɔn-ye layiw jɔsi minnu yɛlɛmali laban tɛmɛna nin kan. 0 b\'a sigi. Bolomafara: 730.';
$string['settings:ssrf_trusted_endpoints'] = 'SSRF dakaranw tilennen';
$string['settings:ssrf_trusted_endpoints_desc'] = 'URL kelen ka kalan kelen. Hôte fɔlenw be SOLA ka SSRF sɛgɛsɛgɛli ka loopback / private-IP / https-only sɛgɛsɛgɛliw tɛmɛ. Nin ka kɛ dɔrɔn LLM-yɔrɔw kɔrɔ minnu yɛrɛ-jatigi sira kan i be min ɲɛnabɔ — misali la <code>http://localhost:11434</code> Ollama yɔrɔ kan, <code>http://10.0.0.5:8000</code> vLLM pod ye VPC kelen kan. Suma fɛn ye scheme + host + port. A bɛ kɛ lankolon (kɔnɔnafɛnw bɛɛ tɔgɔ). Sigida minnu bɛ daminɛ ni <code>#</code> ye, olu ye hakililaw ye.';
$string['task:learner_weekly_digest']    = 'AI Kalan Dɛmɛbaga ka Karandenw ka Hakɛ Faraka';
$string['learner_digest:subject']        = 'I ka dɔgɔkun {$a->course} la - {$a->product}';
$string['learner_digest:optin_offer']    = 'I be a fɛ ka imɛli surun sɔrɔ dɔgɔkun o dɔgɔkun min na fɛn dɔ ɲinini bɛ jira?';
$string['next_best_action:get_started']           = '{$a->title} daminɛ. N da yɛlɛ ka a fɔ "n dɛmɛ {$a->title} la".';
$string['next_best_action:get_started_with_module'] = '{$a->title} daminɛ. "{$a->module}" mòduli b\'a yira.';
$string['next_best_action:review']                = '{$a->title} ka kunbabaw lajɛ — n da yɛlɛ ka a fɔ "{$a->title} ɲɛfɔ n ye i n\'a fɔ a kura ye".';
$string['next_best_action:review_with_module']    = '{$a->title} ka kunbabaw lajɛ "{$a->module}" kɔnɔ, ka tila ka n da yɛlɛ ni hakililaw ye.';
$string['next_best_action:practice']              = 'I jɔnjɔnen kan ka caya {$a->title} la. N da yɛlɛ ka a fɔ "{$a->title} ka misali kelen di n ma".';
$string['next_best_action:practice_with_module']  = '{$a->title} ka tɔnbɔ kɛ ni "{$a->module}" ye. N da yɛlɛ misali nyumanw kama.';
$string['next_best_action:quiz']                  = '{$a->title} jɔnjɔn ni sɛgɛsɛgɛli teli ye. N da yɛlɛ ka "Sɛgɛsɛgɛli — yɛlɛmacogo" sugandi.';
$string['next_best_action:quiz_with_module']      = '{$a->title} jɔnjɔn ni sɛgɛsɛgɛli teli ye. "{$a->module}" mòduli b\'a sigi yɔrɔ jira.';
$string['next_best_action:empty_state']           = 'I bɛ ka di laɲinikow bɛɛ la sisan — foyi ma to. I taa a fɛ.';
$string['next_best_action:header']                = 'Fɛn {$a} ye nin ye min na ka fɔ ka taa ɲɛ:';
$string['learner_digest:unsubscribe_done_title']  = 'A bɔra';
$string['learner_digest:unsubscribe_done_body']   = 'A banna — i tɛna nin kalansoba imɛli sɛnɛ sɔrɔ tugu {$a->product} la. I bɛ se k\'i tɔgɔ sɛbɛn tugun waati o waati i ka kalan ka chat fɛ.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Imɛli bɔli sira ma diya tugu';
$string['learner_digest:unsubscribe_invalid_body']  = 'Nin imɛli bɔli sira tigɛlen don walima a tiɲɛnen don. I bɛ se k\'i ka imɛli sugandiliw ɲɛnabɔ kalan sɛnɛkɛlaw kɛnɛ.';
$string['active_learners:line']                   = 'Mɔgɔ {$a} bɛ ka nin kalan kɛ sisan.';
$string['active_learners:line_global']             = 'Mɔgɔ {$a> bɛ kalan na sisan.';
$string['settings:active_learners_scope']          = 'Karandenw nataw filɛli yɔrɔ';
$string['settings:active_learners_scope_desc']     = 'Filɛli "Mɔgɔ wɛrɛw bɛ kalan na" min bɛ chat ka daminɛw kunna a bɛ karandenw jate kalansoba kelen kan walima site bɛɛ kan. Defóot <strong>jamana bɛɛ</strong>.';
$string['settings:active_learners_scope_global']   = 'Jamana bɛɛ (kalan o kalan)';
$string['settings:active_learners_scope_course']   = 'Kalan kelen dama';
$string['learner_digest:optin_yes']      = 'Awɔ, ka dɔgɔkun imɛli ci n ma';
$string['learner_digest:optin_no']       = 'Ayi, i ni ce';
$string['learner_digest:optin_thanks']   = 'A bɛ na. I bena dɔgɔkun jagomanin sɔrɔ tɛnɛnnaba bɛɛ.';
$string['learner_digest:optin_declined'] = 'A bɛ na. Imɛli si tɛ - n da yɛlɛ tuma min na i b\'a fɛ.';
$string['settings:xai_proxy_url'] = 'xAI Realtime nɔnabila URL';
$string['settings:xai_proxy_url_desc'] = 'SOLA xAI Realtime nɔnabila baara ka wss URL kɛnɛma (misali wss://voice.example.com/xai-rt/rt). Ni nin sigilen don ni JWT gundo ye, xAI kuma-ye bɛ tɛmɛn nɔnabila la, wa xAI API kunnafoni-konkon ɲɛ tɛ se navigatɛri ma abada. A bila lankolon walisa ka segin sɛrɛya jɔlen kan (a tɛ laadi baara la).';
$string['settings:xai_proxy_jwt_secret'] = 'xAI Realtime nɔnabila JWT gundo';
$string['settings:xai_proxy_jwt_secret_desc'] = 'HS256 gundo jɛnsɛnnen min bɛ baara kɛ ka waati-surun ɲɔgɔn-ye taamasiyɛnw bolosin xAI Realtime nɔnabila kama. A ka kan ka bɛn ni MOODLE_JWT_SECRET gundo ye Cloudflare Worker kan. A yɛlɛma waati ni waati.';
$string['admin:vendor_dpa:title'] = '{$a} — feerebaga DPA cogoya';
$string['admin:vendor_dpa:intro'] = 'Kalanni-banni, DPA ani maracogo AI dilala bolimacogo bɛɛ kama. Nin tabili tigɛ baara walisa k\'a dɔn dilalaw minnu ka kan ka da i ka site kan. Sira 2 ani sanfɛ kelennakelen bɛ DPA bolocilen ɲini ani bɛnkan kalanni-banni.';
$string['admin:vendor_dpa:maintenance_note'] = 'Nin tabili bɛ mara classes/vendor_registry.php kɔnɔ. A yɛlɛma ni dilala dɔ ka ToS yɛlɛmana.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Kunnafoniw lakana baarakɛla email';
$string['settings:dpo_email_desc'] = 'Cogo-bɛn email min bɛ jira kalanden ka gundo-laadiliw kɔrɔ "Cogo-bɛn" la. A bila lankolon walisa k\'a layiri dogo. Tɔgɔ-yɛlɛmali baarayɔrɔw ka kan k\'a sin u yɛrɛ ka DPO ma.';
$string['settings:privacy_external_url'] = 'Sigida ka gundo-laadili page URL';
$string['settings:privacy_external_url_desc'] = 'Lihirili sigida sira ka gundo-laadili page la, min bɛ jira kalanden ka gundo-laadiliw kɔrɔ "Cogo-bɛn" la. A bila lankolon walisa k\'a layiri dogo.';
$string['settings:privacy_notice_override'] = 'Gundo-laadiliw nɔnabila (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Ni a sigilen don, nin HTML in bɛ se sigida bolomafara gundo-laadiliw nɔ na minnu bɛ jira /local/ai_course_assistant/privacy.php kan. A baara kɛ walisa ka sɛriya-lajɛlen sɛbɛn bila i ka sigida ye kɔdi yɛlɛmali kɛbaliya. A bila lankolon walisa ka bolomafara laadiliw kɛ, minnu sɛbɛn bɛ bɔ konfigirasi kunnafoni 7 la.';
$string['objectives:title'] = 'Kalanni laɲiniw ani sebagaya';
$string['objectives:toggles_heading'] = 'Sebagaya nɔminɛni';
$string['objectives:toggle_master'] = 'Sebagaya nɔminɛni daminɛ nin kalan in kama';
$string['objectives:toggle_chip'] = 'Kalanden ka Sebagaya taamasiɲɛ jira kalandenw na';
$string['objectives:toggle_chip_help'] = 'A man kan dɔrɔn. Ni a faga, sebagaya bɛ tora dɛmɛbaga bolosin makun na nka kalandenw tɛ taamasiɲɛ si ye.';
$string['objectives:toggled'] = 'Labɛnni yɛlɛmana.';
$string['objectives:detected_heading'] = 'Kalanni laɲini {$a->count} sɔrɔla {$a->source} la.';
$string['objectives:source_competency'] = 'Moodle seko';
$string['objectives:source_summary'] = 'kalan kunnafoni surunyalen';
$string['objectives:source_section'] = 'tilayɔrɔ walima page fɔlɔ kɔnɔkow';
$string['objectives:source_page'] = 'kalan ka page';
$string['objectives:source_llm'] = 'AI labɔli';
$string['objectives:source_manual'] = 'bololasɛbɛnni';
$string['objectives:source_none'] = 'sɔrɔyɔrɔ yɛrɛyɛrɛlen tɛ yen';
$string['objectives:import_detected'] = 'Laɲini sɔrɔlenw kɔnɔnabila';
$string['objectives:import_llm'] = 'Laɲiniw labɔ ni AI ye';
$string['objectives:llm_empty'] = 'AI labɔli ma laɲini si segin. A lajɛ tugun walima u sɛbɛn bolola.';
$string['objectives:imported'] = 'Laɲini {$a} ye don.';
$string['objectives:none_detected'] = 'Kalanni laɲini si ma sɔrɔ a yɛrɛ ma. U sɛbɛn duguma bolola, walima ka AI labɔli kɛ.';
$string['objectives:list_heading'] = 'Sisan laɲiniw';
$string['objectives:col_code'] = 'Kɔdi';
$string['objectives:col_title'] = 'Tɔgɔ';
$string['objectives:col_source'] = 'Sɔrɔyɔrɔ';
$string['objectives:col_actions'] = 'Baaraw';
$string['objectives:add_heading'] = 'Laɲini fara';
$string['objectives:add_submit'] = 'Laɲini fara';
$string['objectives:saved'] = 'Laɲini maranen don.';
$string['objectives:deleted'] = 'Laɲini jɔsira.';
$string['objectives:delete_confirm'] = 'Nin laɲini ani a ka labɔlibaga jasigi tariku jɔsi?';
$string['objectives:delete_all'] = 'Nin kalan ka laɲiniw bɛɛ jɔsi';
$string['objectives:delete_all_confirm'] = 'Nin kalan ka laɲiniw bɛɛ ani u ka labɔlibaga jasigi tariku jɔsi? A tɛ se ka segin-ka-kɔ.';
$string['objectives:deleted_all'] = 'Nin kalan ka laɲiniw bɛɛ jɔsira.';
$string['mastery:chip_aria'] = 'Kalanni sebagaya cogoya';
$string['mastery:popover_aria'] = 'Kalanni sebagaya kunnafoniw';
$string['mastery:chip_label'] = '{$a->mastered} bɔra {$a->total} la sebagaya la';
$string['mastery:status_mastered'] = 'sebagayalen';
$string['mastery:status_learning'] = 'b\'a la';
$string['mastery:status_not_started'] = 'a ma daminɛ';
$string['mastery:popover_empty'] = 'Kalanni laɲini si ma sigi nin kalan kama.';
$string['settings:mastery_heading'] = 'Sebagaya nɔminɛni';
$string['settings:mastery_heading_desc'] = 'Kalan o kalan sugandili baara, min bɛ dege-yala jaabiw ani dɛmɛbaga ka kuma-yew taamasiɲɛn ka kɛɲɛ ni kalan ka kalanni laɲiniw ye, k\'a sɔrɔ k\'a labɛn don sigida ka taamashyɛn kɔnɔ walisa ka ɲininkali bolosin. A laadiliyalen don dogo la: kalandenw tɛ foyi ye fo ni kalan ka taamasiɲɛ-toggle dabɔlen don.';
$string['settings:mastery_threshold'] = 'Sebagaya hakɛ';
$string['settings:mastery_threshold_desc'] = 'Tilayɔrɔ-yɛlɛma-tilenni min na walima n\'a sanfɛ laɲini bɛ jate sebagaya la. 0.0 ka taa 1.0. Bolomafara 0.85.';
$string['settings:mastery_window'] = 'Labɔli-bara fɛnɛtri';
$string['settings:mastery_window_desc'] = 'Labɔlibaga laban hakɛ minnu bɛ jate laɲini kelen kelen na, ka kɛ tilenni-yɛlɛma kɔnɔ. Bolomafara 8.';
$string['settings:mastery_decay_enabled']        = 'Sebagiya tiɲɛni dabɔ';
$string['settings:mastery_decay_enabled_desc']   = 'Ni a tigɛnen don, sebagiya jaabiw bɛ dɔgɔya waati la. Cogo min ɲɛnabɔra fɔlɔ, a bɛ segin "kalan" la ni waati caman tɛmɛna. A tɛ jigin "kalan" duguma. <strong>v4.0 la, a faratuma a tɛ baara la.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Sebagiya tiɲɛni tla-tla (tile)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Tla-tla tile la. Jaabi bɛ siyɛn 0.5 ^ (tile minnu tɛmɛna kabini ɲinini-laban / tla-tla). Faratuma 30. A bɛ kɛ ni tiɲɛni tigɛnen don dɔrɔn.';
$string['settings:mastery_classifier_model'] = 'Tilamɔdɛli';
$string['settings:mastery_classifier_model_desc'] = 'Mɔdɛli min bɛ baara kɛ ka dɛmɛbaga ka kuma-yew tila ka kɛɲɛ ni laɲiniw ye. A bila lankolon walisa ka AI dilala bolomafara mɔdɛli ta; n\'o tɛ, mɔdɛli sɔngɔ-dɔgɔn fɔ i n\'a fɔ gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Tilamɔdɛli girinya';
$string['settings:mastery_classifier_weight_desc'] = 'Kuma-ye labɔli bɛ jate ten min sɔrɔ ni dege-yala labɔli ye (1.0). Bolomafara 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Tilamɔdɛli dannaya hakɛ';
$string['settings:mastery_classifier_threshold_desc'] = 'Tilamɔdɛli ka dannaya dɔgɔnman min ka kan ka sɔrɔ walisa ka kuma-ye labɔli sɛbɛn. 0.0 ka taa 1.0. Bolomafara 0.7.';
$string['chat:mode_progress'] = 'Ɲɛtaa';
$string['objectives:toggle_dashboard'] = 'Ɲɛtaa-jate page jira kalandenw na';
$string['objectives:toggle_dashboard_help'] = 'A man kan dɔrɔn. A bɛ Ɲɛtaa page fara Kuma / Kuma-ye / Tariku la widget kɔnɔ. Page bɛ jira kalandenw na, laɲini minnu u y\'u sebagaya, minnu b\'u la, ani minnu u ma daminɛ fɔlɔ.';
$string['mastery:dashboard_title'] = 'I ka kalanni ɲɛtaa';
$string['mastery:dashboard_subtitle'] = 'Sebagaya bɛ jate i ka dege-yala jaabiw ani kuma dege-yala fɛ. I ka taa ɲɛ — dunya ka fisa ni jɛnsɛnyali ye.';
$string['mastery:dashboard_refresh'] = 'A kura don';
$string['mastery:section_mastered'] = 'Sebagayalen';
$string['mastery:section_learning'] = 'B\'a la';
$string['mastery:section_not_started'] = 'A ma daminɛ fɔlɔ';
$string['mastery:summary_label'] = 'Laɲini {$a->mastered} bɔra {$a->total} la sebagaya la';
$string['mastery:ask_about'] = 'Nin ɲininka';
$string['mastery:celebrate'] = 'I ye nin kalan ka laɲiniw bɛɛ sebagaya. Baara dafalen.';
$string['mastery:ask_template'] = 'N dɛmɛ ka dege-yala kɛ ani ka n ka faamuli juguya nin laɲini in na: {$a}.';
$string['instructor_dashboard:title'] = '{$a} — Course Instructor & Designer Dashboard';
$string['instructor_dashboard:link'] = 'Course Instructor & Designer Dashboard';
$string['instructor_dashboard:intro'] = 'Per-course usage, mastery, and content-revision signals. Aggregate-only by default; click Show real names to bind aggregate rows to specific learners (writes a FERPA audit row).';
$string['instructor_dashboard:period'] = 'Period';
$string['instructor_dashboard:period_all'] = 'all';
$string['instructor_dashboard:gap_days'] = 'Inactive after (days)';
$string['instructor_dashboard:show_names'] = 'Show real names';
$string['instructor_dashboard:hide_names'] = 'Hide real names';
$string['instructor_dashboard:active_learners'] = 'Active learners';
$string['instructor_dashboard:total_messages'] = 'Total messages';
$string['instructor_dashboard:avg_per_learner'] = 'Avg messages / learner';
$string['instructor_dashboard:last_activity'] = 'Last activity';
$string['instructor_dashboard:mastery_heading'] = 'Mastery aggregate';
$string['instructor_dashboard:mastery_off'] = 'Mastery tracking is not enabled for this course. Turn it on from the Learning objectives & mastery page.';
$string['instructor_dashboard:topics_heading'] = 'Most-asked topics';
$string['instructor_dashboard:topics_empty'] = 'No topic data yet. Topics are extracted by a daily scheduled task; check back tomorrow.';
$string['instructor_dashboard:confusion_heading'] = 'Confusion heatmap';
$string['instructor_dashboard:confusion_empty'] = 'No per-module question data yet for this period.';
$string['instructor_dashboard:ratings_heading'] = 'Helpful / unhelpful rates';
$string['instructor_dashboard:ratings_summary'] = '{$a->positive} thumbs up, {$a->negative} thumbs down ({$a->pct}% positive). {$a->hallucinations} flagged as hallucinations.';
$string['instructor_dashboard:ratings_low_module'] = 'Low-rated assistant responses by module';
$string['instructor_dashboard:gap_heading'] = 'Engagement gap';
$string['instructor_dashboard:gap_summary'] = '{$a->not_seen} of {$a->enrolled} enrolled learners have not used the assistant in the last {$a->days} day(s).';
$string['instructor_dashboard:gap_show_sample'] = 'Show learners (sample)';
$string['instructor_dashboard:col_objective'] = 'Objective';
$string['instructor_dashboard:col_mastered'] = 'Mastered';
$string['instructor_dashboard:col_learning'] = 'In progress';
$string['instructor_dashboard:col_not_started'] = 'Not started';
$string['instructor_dashboard:col_attempts'] = 'Attempts';
$string['instructor_dashboard:col_module'] = 'Module';
$string['instructor_dashboard:col_questions'] = 'Questions asked';
$string['instructor_dashboard:col_distinct_learners'] = 'Distinct learners';
$string['instructor_dashboard:col_low_rated'] = 'Low-rated count';
$string['socratic:title'] = 'Socratic mode';
$string['socratic:toggle'] = 'Enable Socratic mode for this course';
$string['socratic:toggle_help'] = 'When on, the assistant leads with guiding questions instead of giving direct answers. Pedagogical lift; no UI change for learners. Off by default.';
$string['digest:title'] = 'Weekly digest emails';
$string['digest:toggle'] = 'Email a weekly digest to anyone with analytics access on this course';
$string['digest:toggle_help'] = 'Mondays 09:00 server time. Aggregate-only — no learner names appear in the email body. Off by default.';
$string['digest:subject'] = '{$a->product} weekly digest — {$a->course}';
$string['task:instructor_weekly_digest'] = 'AI Course Assistant weekly digest email';
$string['settings:math_render_heading'] = 'Math rendering';
$string['settings:math_render_heading_desc'] = 'Math expressions in assistant replies (LaTeX, e.g. $E=mc^2$) render via Moodle\'s built-in MathJax filter — enable filter_mathjaxloader in Site administration → Plugins → Filters → Manage filters for the math to render. Without it, expressions display as raw LaTeX text.';
$string['flashcards:title'] = 'Flashcards';
$string['flashcards:link'] = 'Flashcards (review now)';
$string['flashcards:intro'] = 'Spaced-repetition review. Reveal the answer, then self-grade with Again, Hard, or Easy. Cards you found hard come back sooner; cards you found easy spread out.';
$string['flashcards:question'] = 'Question';
$string['flashcards:answer'] = 'Answer';
$string['flashcards:reveal'] = 'Reveal answer';
$string['flashcards:again'] = 'Again';
$string['flashcards:hard'] = 'Hard';
$string['flashcards:easy'] = 'Easy';
$string['flashcards:no_due'] = 'Nothing to review right now. Generate flashcards from a course page in the assistant widget, or check back later.';
$string['flashcards:session_complete'] = 'Session complete. Good work.';
$string['flashcards:disabled'] = 'Flashcards are not enabled for this course.';
$string['flashcards:toggle'] = 'Enable flashcards for this course';
$string['flashcards:toggle_help'] = 'Adds a Generate-flashcards starter to the assistant widget and a learner review page at /local/ai_course_assistant/flashcards.php?courseid=X. Off by default.';
$string['flashcards:starter_generate'] = 'Generate flashcards from this page';
$string['flashcards:generated'] = 'Saved {$a} flashcards. Open the review page to study them.';
$string['worked_examples:toggle'] = 'Enable Worked Examples starter for this course';
$string['worked_examples:toggle_help'] = 'Adds a "Show me a worked example" starter that asks the assistant to walk through a fully solved example, then guide the learner through similar problems with progressively less scaffolding (worked → partial → blank).';
$string['worked_examples:starter'] = 'Show me a worked example';
$string['objectives:prereqs_label'] = 'prerequisites';
$string['objectives:prereqs_summary'] = 'Prerequisites: {$a}';
$string['objectives:prereqs_none'] = 'none yet — click to edit';
$string['essay_feedback:title'] = 'Essay feedback';
$string['essay_feedback:link'] = 'Essay feedback';
$string['essay_feedback:disabled'] = 'Essay feedback is not enabled for this course.';
$string['essay_feedback:intro'] = 'Paste your draft below and the assistant will score it against a rubric and suggest three concrete revisions. Aim for at least 80 words. Your essay text is only used for this feedback run — it is not saved.';
$string['essay_feedback:rubric_label'] = 'Rubric (optional)';
$string['essay_feedback:rubric_help'] = 'Paste a rubric as a bulleted list of criteria, or leave blank to use a default four-criterion rubric (thesis, evidence, organisation, mechanics).';
$string['essay_feedback:essay_label'] = 'Your essay draft';
$string['essay_feedback:submit'] = 'Get feedback';
$string['essay_feedback:scoring'] = 'Scoring your draft…';
$string['essay_feedback:too_short'] = 'Please paste at least 80 words so the assistant has something to score.';
$string['essay_feedback:error'] = 'Could not score this draft right now. Try again in a moment.';
$string['essay_feedback:result_heading'] = 'Rubric scores';
$string['essay_feedback:overall_heading'] = 'Overall';
$string['essay_feedback:revisions_heading'] = 'Top 3 revision suggestions';
$string['essay_feedback:col_criterion'] = 'Criterion';
$string['essay_feedback:col_score'] = 'Score';
$string['essay_feedback:col_feedback'] = 'Feedback';
$string['essay_feedback:toggle'] = 'Enable Essay feedback for this course';
$string['essay_feedback:toggle_help'] = 'Learners get a dedicated page to paste a draft and receive rubric-scored feedback with revision suggestions. Off by default.';
$string['sandbox:title'] = 'Python sandbox';
$string['sandbox:link'] = 'Python sandbox';
$string['sandbox:disabled'] = 'The Python sandbox is not enabled for this course.';
$string['sandbox:intro'] = 'Write and run Python entirely in your browser. The runtime is Pyodide (Python compiled to WebAssembly); your code never leaves this device. Use it to try ideas, work through course exercises, or check small scripts before submitting them.';
$string['sandbox:loading'] = 'Loading the Python runtime — this is a one-time download of about 10 MB. Future runs will be instant.';
$string['sandbox:ready'] = 'Ready. Write some code and click Run.';
$string['sandbox:load_error'] = 'Could not load the Python runtime. Check your network connection and refresh.';
$string['sandbox:code_label'] = 'Code';
$string['sandbox:run'] = 'Run';
$string['sandbox:running'] = 'Running…';
$string['sandbox:clear'] = 'Clear output';
$string['sandbox:output_heading'] = 'Output';
$string['sandbox:privacy_note'] = 'Code and output stay in your browser. Nothing is sent to any server. The runtime is loaded from a public CDN the first time only and is cached for subsequent visits.';
$string['sandbox:toggle'] = 'Enable the Python sandbox for this course';
$string['sandbox:toggle_help'] = 'Adds a learner-facing page where students can write and run Python entirely in their browser via Pyodide. Off by default. Enable for courses with code work; leave off for courses without.';

// v4.2: courses_admin page.
$string['courses_admin:title']             = 'AI Course Assistant — Courses';
$string['courses_admin:lede']              = 'Enable or disable AI Assistant per course, manage Usability Testing, or run bulk actions across many courses.';
$string['courses_admin:back_to_analytics'] = '← Back to Analytics';
$string['courses_admin:plugin_settings']   = 'Plugin Settings';
$string['courses_admin:enabled_count']     = '{$a->enabled} of {$a->total} courses have AI Assistant enabled';
$string['courses_admin:search_placeholder']= 'Search courses…';
$string['courses_admin:filter_status']     = 'AI Assistant status';
$string['courses_admin:filter_enabled']    = 'Enabled';
$string['courses_admin:filter_disabled']   = 'Disabled';
$string['courses_admin:filter_ut']         = 'Usability Testing';
$string['courses_admin:filter_ut_on']      = 'UT On';
$string['courses_admin:filter_ut_off']     = 'UT Off';
$string['courses_admin:filter_ut_inherit'] = 'UT Inherit';
$string['courses_admin:select_all']        = 'Select all';
$string['courses_admin:selected_zero']     = '(0 selected)';
$string['courses_admin:ai_assistant']      = 'AI Assistant';
$string['courses_admin:usability_testing'] = 'Usability Testing';
$string['courses_admin:enable']            = 'Enable';
$string['courses_admin:disable']           = 'Disable';
$string['courses_admin:inherit']           = 'Inherit';
$string['courses_admin:column_course']     = 'Course';
$string['courses_admin:column_has_data']   = 'Has Data';
$string['courses_admin:enabled']           = 'Enabled';
$string['courses_admin:disabled']          = 'Disabled';
$string['courses_admin:click_to_enable']   = 'Click to enable';
$string['courses_admin:click_to_disable']  = 'Click to disable';
$string['courses_admin:on']                = 'On';
$string['courses_admin:off']               = 'Off';
$string['courses_admin:global_on']         = 'Global: On';
$string['courses_admin:global_off']        = 'Global: Off';
$string['courses_admin:yes']               = 'Yes';
$string['courses_admin:no_courses']        = 'No visible courses on this site yet.';

// v4.2: anomaly digest scheduled task.
$string['task:run_anomaly_digest'] = 'Run SOLA anomaly digest';

// v4.2.3: external resources (admin + per-course).
$string['settings:external_resources_heading']      = 'External resources';
$string['settings:external_resources_heading_desc'] = 'Optional opt-in: when on, SOLA may include one or two links to reputable open educational resources alongside its course-grounded answer. Restricted to the allowlist below to keep recommendations defensible. Per-course override available on the course settings page. Default off.';
$string['settings:external_resources_enabled']      = 'Enable external resources (site-wide default)';
$string['settings:external_resources_enabled_desc'] = 'When on, SOLA may suggest links to the allowlisted external resources. Per-course "force on" / "force off" overrides this. Default off.';
$string['settings:external_resources_allowlist']    = 'External resources allowlist';
$string['settings:external_resources_allowlist_desc'] = 'One resource per line, in the format "Display Name (domain)". SOLA will only suggest links to these sites. Defaults to a small set of widely respected open-resource hosts; replace or extend as needed.';
$string['external_resources:title']      = 'External resources';
$string['external_resources:inherit']    = 'Inherit site default ({$a})';
$string['external_resources:force_on']   = 'Force on for this course';
$string['external_resources:force_off']  = 'Force off for this course';
$string['external_resources:on']         = 'on';
$string['external_resources:off']        = 'off';
$string['external_resources:toggle_help']= 'When on, SOLA may include up to two links to allowlisted open educational resources alongside its course-grounded answer. Course material always leads.';

// v4.3.0: real Redash push integration.
$string['settings:redash_base_url']           = 'Redash base URL';
$string['settings:redash_base_url_desc']      = 'Base URL of your Redash instance, e.g. https://redash.example.com. Required for the "Send to Redash" action in Learning Radar.';
$string['settings:redash_user_api_key']       = 'Redash user API key';
$string['settings:redash_user_api_key_desc']  = 'API key of a Redash user with permission to create queries against the chosen data source. Found under your Redash user profile. Different from the SOLA Redash API key (which controls inbound auth on redash_export.php).';
$string['settings:redash_data_source_id']     = 'Redash data source ID';
$string['settings:redash_data_source_id_desc']= 'Numeric id of the Redash JSON data source pointed at SOLA\'s redash_export.php. Visible in the Redash data source URL after saving.';

$string['instructor_dashboard:nav_back_course']  = '← Back to course';
$string['instructor_dashboard:nav_settings']     = 'AI Course Assistant settings';
$string['instructor_dashboard:nav_analytics']    = 'AI Course Assistant analytics';

// v4.4.0: course-page CSP setting.
$string['settings:csp_course_pages_mode']      = 'Course-page Content-Security-Policy';
$string['settings:csp_course_pages_mode_desc'] = 'Optional CSP header on course pages where the AI Course Assistant widget is active. <strong>Off</strong>: no header (default). <strong>Report-only</strong>: send <code>Content-Security-Policy-Report-Only</code> — browsers log violations but do not block. Useful for a one-week observation pass. <strong>Enforce</strong>: send <code>Content-Security-Policy</code> — browsers block off-allowlist iframe sources, fetches, and other risky loads. Helps contain the impact of arbitrary scripts pasted into Additional HTML site config (the IBL AI / Raison incident on 2026-04-29). Does not affect SOLA endpoints, which always send a stricter CSP.';
$string['settings:csp_mode_off']               = 'Off (no header on course pages)';
$string['settings:csp_mode_report_only']       = 'Report-only (log violations, do not block)';
$string['settings:csp_mode_enforce']           = 'Enforce (block off-allowlist loads)';

// v4.5.0: site-wide pedagogy defaults.
$string['settings:pedagogy_defaults_heading']      = 'Pedagogy defaults';
$string['settings:pedagogy_defaults_heading_desc'] = 'Site-wide default state for each pedagogy feature. Flip a feature on here and every course inherits it unless that course has an explicit override on its SOLA course settings page (force on / force off). On upgrade to v4.5.0, every per-course "force off" override that was set to the legacy default-off value of <code>0</code> is cleared so the new global defaults take effect cleanly. Default off — upgrades from v4.4.x are a no-op until an admin flips a feature on.';
$string['pedagogy:mastery']                = 'Mastery tracking on by default';
$string['pedagogy:mastery_desc']           = 'When on, every course inherits mastery tracking unless the course has its own override. Mastery requires curated learning objectives — courses without objectives fall back gracefully, no error.';
$string['pedagogy:socratic_mode']          = 'Socratic mode on by default';
$string['pedagogy:socratic_mode_desc']     = 'When on, SOLA leads with questions instead of direct answers in every course unless the course has its own override.';
$string['pedagogy:worked_examples']        = 'Worked examples starter on by default';
$string['pedagogy:worked_examples_desc']   = 'When on, the "Show me a worked example" conversation starter appears in every course unless the course has its own override.';
$string['pedagogy:flashcards']             = 'Flashcards on by default';
$string['pedagogy:flashcards_desc']        = 'When on, spaced-repetition flashcards are available in every course unless the course has its own override.';
$string['pedagogy:code_sandbox']           = 'Python code sandbox on by default';
$string['pedagogy:code_sandbox_desc']      = 'When on, the in-browser Python sandbox is available in every course unless the course has its own override.';
$string['pedagogy:essay_feedback']         = 'Essay feedback on by default';
$string['pedagogy:essay_feedback_desc']    = 'When on, AI essay feedback is available in every course unless the course has its own override.';
$string['pedagogy:per_course_inherit']     = 'Inherit site default ({$a})';
$string['pedagogy:per_course_force_on']    = 'Force on for this course';
$string['pedagogy:per_course_force_off']   = 'Force off for this course';
$string['pedagogy:on']                     = 'on';
$string['pedagogy:off']                    = 'off';

// v4.6.0: vendor DPA gating + override editors.
$string['settings:vendor_data_heading']      = 'Vendor & cost data';
$string['settings:vendor_data_heading_desc'] = 'Controls for the optional Vendor DPA admin page and the override editors that let admins keep the bundled vendor table and LLM rate card current without a code edit. Both override editors are JSON; an empty value falls back to the hardcoded defaults shipped with the plugin.';
$string['settings:vendor_dpa_admin_page_enabled']      = 'Show Vendor DPA admin page';
$string['settings:vendor_dpa_admin_page_enabled_desc'] = 'When on, "Vendor DPA Status" appears under Site administration → Plugins → Local plugins → AI Course Assistant. The page renders the vendor table merged with the override below. Default off — most admins do not need this surface.';
$string['settings:vendor_dpa_overrides']      = 'Vendor DPA overrides (JSON)';
$string['settings:vendor_dpa_overrides_desc'] = 'JSON object keyed by vendor id. Each value is an object whose fields override the hardcoded vendor row. Fields you do not specify fall through to the default. A new vendor key in the override is added to the table; edits apply per field. Malformed JSON is ignored at runtime — fix the parse error here when the saved value does not appear in the Vendor DPA page.';
$string['settings:rate_card_overrides']      = 'LLM rate card overrides (JSON)';
$string['settings:rate_card_overrides_desc'] = 'JSON object keyed by model name prefix. Each value is {"input": float, "output": float} in USD per 1,000,000 tokens. Replaces the bundled rate card entry for that prefix. A community-maintained source of vendor pricing JSON lives at github.com/BerriAI/litellm — multiply the input_cost_per_token / output_cost_per_token values by 1,000,000 to match this format. Auto-fetch from a configurable upstream URL is on the v4.7 roadmap.';

// v4.7.0: rate-card auto-refresh.
$string['settings:rate_card_auto_refresh']      = 'Auto-refresh from upstream';
$string['settings:rate_card_auto_refresh_desc'] = 'When on, a weekly scheduled task fetches the upstream pricing JSON, transforms it to SOLA\'s rate-card schema, and writes it to the override field above. Default on. Failures keep the previous override in place.';
$string['settings:rate_card_upstream_url']      = 'Upstream pricing URL';
$string['settings:rate_card_upstream_url_desc'] = 'URL of a JSON manifest in LiteLLM\'s schema. Default points at the community-maintained file in the LiteLLM GitHub repo. URL is checked against the SSRF allowlist before fetch.';
$string['settings:rate_card_refresh_now']        = 'Refresh now';
$string['settings:rate_card_refresh_now_label']  = 'Refresh rate card from upstream';
$string['settings:rate_card_refresh_success']    = 'Rate card refreshed: {$a} entries written.';
$string['settings:rate_card_refresh_error']      = 'Rate card refresh failed: {$a}';
$string['settings:rate_card_last_refresh_at']    = 'Last refresh: {$a}';
$string['settings:rate_card_last_refresh_success']= 'Last fetch succeeded.';
$string['settings:rate_card_never_refreshed']    = 'Never refreshed.';
$string['task:refresh_rate_card']                = 'Refresh SOLA LLM rate card from upstream';

// v4.8.0: runtime validators + RAG drift + needs-review queue.
$string['settings:validators_runtime_mode']      = 'Runtime validators';
$string['settings:validators_runtime_mode_desc'] = 'Apply the same pipeline that gates releases (PII echo, credential leak, hallucination, second-person) to every assistant response in real time. Off (default), Annotate, or Block.';
$string['settings:validators_runtime_off']       = 'Off (no runtime checks)';
$string['settings:validators_runtime_annotate']  = 'Annotate (append warning line on fail)';
$string['settings:validators_runtime_block']     = 'Block (replace with safe fallback on fail)';
$string['settings:rag_auto_reindex_drifted']      = 'Auto-reindex drifted RAG content';
$string['settings:rag_auto_reindex_drifted_desc'] = 'Daily scheduled task that re-indexes course modules whose source content was edited after the last indexed-at time. Default on.';
$string['task:auto_reindex_rag_drifted']          = 'Re-index drifted RAG content';
$string['instructor_dashboard:review_heading']     = 'Needs review';
$string['instructor_dashboard:review_intro']       = 'Pending items from this course that an instructor or course designer should look at: thumbs-down ratings, off-topic conversations, and integrity flags.';
$string['instructor_dashboard:review_empty']       = 'No items pending review. Course is clean.';
$string['instructor_dashboard:review_col_when']    = 'When';
$string['instructor_dashboard:review_col_source']  = 'Source';
$string['instructor_dashboard:review_col_who']     = 'Who';
$string['instructor_dashboard:review_col_summary'] = 'Summary';
$string['instructor_dashboard:review_resolve']     = 'Mark resolved';
$string['instructor_dashboard:review_resolved']    = 'Marked resolved.';
$string['instructor_dashboard:review_source_rating']    = 'Negative rating';
$string['instructor_dashboard:review_source_offtopic']  = 'Off-topic';
$string['instructor_dashboard:review_source_integrity'] = 'Integrity';
