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
$string['usersettings:download'] = 'Download my SOLA data';
$string['usersettings:download_help'] = 'Download a complete JSON copy of every SOLA record tied to your account: conversations, messages, ratings, study plans, reminders, practice scores, survey responses, profile, and audit entries.';
$string['usersettings:privacy_notice_link'] = 'Read the SOLA privacy notice';
$string['privacy:title'] = 'SOLA Privacy Notice';
$string['admin:user_data:title'] = 'SOLA — Learner data export and purge';
$string['admin:user_data:intro'] = 'Operational path for a GDPR Article 15 (access) or Article 17 (erasure) request. Look up a learner by Moodle user id, review the rows SOLA holds for them, and export or purge.';
$string['admin:user_data:search_label'] = 'Moodle user id';
$string['admin:user_data:lookup'] = 'Look up';
$string['admin:user_data:not_found'] = 'No user found with that id.';
$string['admin:user_data:download'] = 'Download all SOLA data as JSON';
$string['admin:user_data:purge'] = 'Purge all SOLA data for this user';
$string['admin:user_data:confirm_purge'] = 'Permanently delete every SOLA record for {$a}? This cascades through conversations, messages, ratings, study plans, reminders, profiles, practice scores, surveys, audit entries, and feedback. The action cannot be undone.';
$string['admin:user_data:purged'] = 'All SOLA data for the selected user has been purged.';
$string['chat:consent_heading'] = 'Before you chat with SOLA';
$string['chat:consent_body'] = 'SOLA is an AI powered learning assistant. Your messages and SOLA\'s replies are stored in Saylor\'s Moodle database and the most recent ten turns are sent to an approved AI model provider to answer your questions. Your first name is shared for personalization; no other identifying information is sent to the AI provider. You can download, delete, or stop using SOLA at any time.';
$string['chat:consent_accept'] = 'I understand, start SOLA';
$string['chat:consent_privacy_link'] = 'Read the full privacy notice';
$string['task:audit_cleanup'] = 'SOLA audit table cleanup';
$string['task:conversation_retention'] = 'SOLA conversation retention sweeper';
$string['settings:audit_retention_days'] = 'Audit log retention (days)';
$string['settings:audit_retention_days_desc'] = 'Daily scheduled task purges audit rows older than this. 0 disables. Default 365.';
$string['settings:conversation_retention_days'] = 'Conversation retention (days)';
$string['settings:conversation_retention_days_desc'] = 'Daily scheduled task purges conversation rows whose last modified timestamp is older than this. 0 disables. Default 730.';
$string['settings:xai_proxy_url'] = 'xAI Realtime proxy URL';
$string['settings:xai_proxy_url_desc'] = 'Public wss URL of the SOLA xAI Realtime proxy service (for example wss://voice.example.com/xai-rt/rt). When this is set together with the JWT secret, xAI voice routes through the proxy and the master xAI API key never reaches the browser. Leave empty to fall back to the direct connection (not recommended for production).';
$string['settings:xai_proxy_jwt_secret'] = 'xAI Realtime proxy JWT secret';
$string['settings:xai_proxy_jwt_secret_desc'] = 'HS256 shared secret used to sign short-lived session tokens for the xAI Realtime proxy. Must match the MOODLE_JWT_SECRET secret on the Cloudflare Worker. Rotate periodically.';
$string['admin:vendor_dpa:title'] = 'SOLA — Vendor DPA status';
$string['admin:vendor_dpa:intro'] = 'Training opt-out, DPA, and retention posture for every AI provider driver shipped in SOLA. Use this to decide which drivers to enable on your site. Tier 2 and higher routing requires a signed DPA and a contractual training opt-out.';
$string['admin:vendor_dpa:maintenance_note'] = 'This table is maintained in classes/vendor_registry.php. Update it when a vendor ToS change lands.';
