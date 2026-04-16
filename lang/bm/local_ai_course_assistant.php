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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'AI Bɛɛlɛ Dɔnbaga';
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
$string['chat:clear'] = 'Kɔkɔ tigɛ';
$string['chat:clear_confirm'] = 'I b\'a fɛ i ka kumakanbali kɔkɔ tigɛ kalanso in na cogo di?';
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
$string['settings:provider_groq'] = 'Groq';
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
