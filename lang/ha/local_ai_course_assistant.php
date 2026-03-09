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

/**
 * Language strings for local_ai_course_assistant — Hausa (Hausa).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Mataimakin Horo na AI';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Yana adana tattaunawar mai koyarwa na AI ga kowane mai amfani da kozi.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID na mai amfani wanda yake da tattaunawar.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID na kozi da tattaunawar ta shafi.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Taken tattaunawar.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Lokacin da aka kirkiro tattaunawar.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Lokacin da aka gyara tattaunawar a karshe.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Yana adana sakonni daya daya a cikin tattaunawar mai koyarwa na AI.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID na mai amfani wanda ya aika sakon.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID na kozi da sakon ya shafi.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Rawar mai aikawa (mai amfani ko mataimaki).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Abubuwan da ke cikin sakon.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Adadin tokens da aka yi amfani da su don sakon.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Lokacin da aka kirkiro sakon.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Yi amfani da tattaunawar mai koyarwa na AI';
$string['ai_course_assistant:viewanalytics'] = 'Duba kididdiga na tattaunawar mai koyarwa na AI';
$string['ai_course_assistant:manage'] = 'Sarrafa saitunan tattaunawar mai koyarwa na AI (Matsayin Gudanarwa)';

// Settings.
$string['settings:enabled'] = 'Kunna Mataimakin Horo na AI';
$string['settings:enabled_desc'] = 'Kunna ko kashe kayan aikin Mataimakin Horo na AI a shafukan kozi.';
$string['settings:provider'] = 'Mai Bada Sabis na AI';
$string['settings:provider_desc'] = 'Zaɓi mai bada sabis na AI don amfani da shi wajen kammala tattaunawa.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Gida)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Na musamman (Mai dacewa da OpenAI)';
$string['settings:apikey'] = 'Maɓallin API';
$string['settings:apikey_desc'] = 'Maɓallin API don mai bada sabis da aka zaɓa. Ba a bukata don Ollama.';
$string['settings:model'] = 'Sunan Model';
$string['settings:model_desc'] = 'Model da za a yi amfani da shi. Tsoho ya dogara ga mai bada sabis (misali. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL ɗin Tushen API';
$string['settings:apibaseurl_desc'] = 'URL ɗin tushe don API. Ana cika shi ta atomatik ga kowane mai bada sabis amma ana iya canzawa. Bar fanko don tsoho na mai bada sabis.';
$string['settings:systemprompt'] = 'Samfurin Umarni na Tsarin';
$string['settings:systemprompt_desc'] = 'Umarnin tsarin da aka aiko wa AI. Yi amfani da masu canji: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Kai malami ne mai taimako na AI don kozi "{{coursename}}". Rawar ɗalibin ita ce {{userrole}}.

Batutuwan kozi da aka rufe:
{{coursetopics}}

Taimaki ɗalibin ya fahimci kayan kozi. Kasance mai ƙarfafawa, a sarari, da koyarwa mai inganci.';
$string['settings:temperature'] = 'Zafi';
$string['settings:temperature_desc'] = 'Yana sarrafa bazuwar. Ƙananan ƙima suna mai da hankali, manyan ƙima suna da ƙarin kirkira. Kewayon: 0.0 zuwa 2.0.';
$string['settings:maxhistory'] = 'Tarihin Tattaunawa na Iyaka';
$string['settings:maxhistory_desc'] = 'Adadin mafi yawa na nau\'i biyu biyu na sakonni don haɗawa a cikin buƙatun API. Ana yanke sakonni tsohuwa.';
$string['settings:avatar'] = 'Hoton Tattaunawa';
$string['settings:avatar_desc'] = 'Zaɓi alamar hoton don maɓallin kayan aikin tattaunawa.';
$string['settings:avatar_saylor'] = 'Alaman Saylor Academy (Tsoho)';
$string['settings:position'] = 'Matsayin Kayan Aiki';
$string['settings:position_desc'] = 'Matsayin kayan aikin tattaunawa a shafin.';
$string['settings:position_br'] = 'Ƙasa dama';
$string['settings:position_bl'] = 'Ƙasa hagu';
$string['settings:position_tr'] = 'Sama dama';
$string['settings:position_tl'] = 'Sama hagu';
$string['chat:settings'] = 'Saitunan ƙari';
$string['analytics:viewdashboard'] = 'Duba kwasfan kididdiga';

// Course settings.
$string['coursesettings:title'] = 'Saitunan AI na Kozi';
$string['coursesettings:enabled'] = 'Kunna manyan sauye-sauye na kozi';
$string['coursesettings:enabled_desc'] = 'Lokacin da aka kunna, saitunan da ke ƙasa sun soke tsarin mai bada sabis na AI na duniya don wannan kozi kawai. Bar filayen fanko don gado ƙima ta duniya.';
$string['coursesettings:using_global'] = 'Ana amfani da saitin duniya';
$string['coursesettings:saved'] = 'An adana saitunan AI na kozi.';
$string['coursesettings:global_settings_link'] = 'Saitunan AI na duniya';

// Language detection and preference.
$string['lang:switch'] = 'Eh, canza';
$string['lang:dismiss'] = 'A\'a, na gode';
$string['lang:change'] = 'Canza yare';
$string['lang:english'] = 'Turanci';

// Chat widget.
$string['chat:title'] = 'Malamin AI';
$string['chat:placeholder'] = 'Yi tambaya...';
$string['chat:send'] = 'Aika';
$string['chat:close'] = 'Rufe tattaunawa';
$string['chat:open'] = 'Bude tattaunawar malamin AI';
$string['chat:clear'] = 'Share tarihi';
$string['chat:clear_confirm'] = 'Shin ka tabbata kana son share tarihin tattaunawar ka don wannan kozi?';
$string['chat:copy'] = 'Kwafi tattaunawa';
$string['chat:copied'] = 'An kwafi tattaunawar zuwa allo';
$string['chat:copy_failed'] = 'An kasa kwafi tattaunawar';
$string['chat:greeting'] = 'Sannu! Ni ne malamin AI naka don wannan kozi. Ta yaya zan iya taimakon ka yau?';
$string['chat:thinking'] = 'Ina tunani...';
$string['chat:error'] = 'Yi hakuri, wani abu ya tafi ba daidai ba. Da fatan za a sake gwadawa.';
$string['chat:error_auth'] = 'Kuskuren tabbatarwa. Da fatan za a tuntuɓi mai gudanarwa ka.';
$string['chat:error_ratelimit'] = 'Buƙatu da yawa. Da fatan za a jira ɗan lokaci sannan a sake gwadawa.';
$string['chat:error_unavailable'] = 'Sabis ɗin AI ba shi da iko a wucin gadi. Da fatan za a sake gwadawa daga baya.';
$string['chat:error_notconfigured'] = 'Ba a saita malamin AI tukuna. Da fatan za a tuntuɓi mai gudanarwa ka.';
$string['chat:expand'] = 'Faɗaɗa tattaunawa';
$string['chat:collapse'] = 'Naƙala tattaunawa';
$string['chat:mic'] = 'Yi magana tambayarka';
$string['chat:mic_error'] = 'Kuskuren makirufo. Da fatan za a duba izinin burauzar ka.';
$string['chat:mic_unsupported'] = 'Ba a goyan bayan shigar murya a wannan burauzar.';
$string['chat:newline_hint'] = 'Shift+Enter don sabon layi';
$string['chat:you'] = 'Kai';
$string['chat:assistant'] = 'Malamin AI';
$string['chat:history_loaded'] = 'An loda tattaunawar da ta gabata.';
$string['chat:history_cleared'] = 'An share tarihin tattaunawa.';
$string['chat:offtopic_warning'] = 'Yana kama da tambayarka ba ta da alaƙa da wannan kozi. Da fatan za a ƙoƙari ci gaba da batun don in iya taimakon ka mafi kyau!';
$string['chat:offtopic_ended'] = 'An dakatar da damar malamin AI naka na wucin gadi na mintuna {$a} saboda tattaunawar ta bar batun sau da yawa. Da fatan za a yi amfani da wannan lokacin don duba kayan koziyan ka, kuma za ka iya sake gwadawa daga baya.';
$string['chat:offtopic_locked'] = 'An dakatar da damar malamin AI naka na wucin gadi. Za ka iya sake gwadawa a cikin mintuna {$a}. Da fatan za a mai da hankali kan tambayoyin da suka shafi kozi ka dawo.';
$string['chat:escalated_to_support'] = 'Ban iya amsa tambayarka gaba ɗaya ba, don haka na ƙirƙiri tikiti na goyon baya a gare ka. Memba na ƙungiyar goyon baya zai bi. Lambar tikiti ɗinka ita ce: {$a}';
$string['chat:studyplan_intro'] = 'Zan iya taimakon ka ƙirƙiri shirin karatu don wannan kozi! Ka faɗa mani nawa sa\'o\'i a mako za ka iya ƙaddara don karatu, kuma zan taimake ka gina shirin da aka tsara.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'Tambayoyin Da Ake Yawan Yi da Goyon Baya';
$string['settings:faq_heading_desc'] = 'Saita FAQ ta tsakiya da haɗin tikitin goyon baya na Zendesk.';
$string['settings:faq_content'] = 'Abubuwan FAQ';
$string['settings:faq_content_desc'] = 'Shigar da shigarwar FAQ (ɗaya a kowace layi a cikin tsari: T: tambaya | A: amsa). Za a ba da waɗannan wa AI don amsa tambayoyin goyon baya na kowa.';
$string['settings:zendesk_enabled'] = 'Kunna Haɓakawa ta Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Lokacin da AI ba zai iya warware tambayar goyon baya ba, ta atomatik ƙirƙiri tikiti na Zendesk tare da taƙaitaccen tattaunawa.';
$string['settings:zendesk_subdomain'] = 'Subdomain ɗin Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomain ɗinku na Zendesk (misali. "kamfaninku" don kamfaninku.zendesk.com).';
$string['settings:zendesk_email'] = 'Imel ɗin API na Zendesk';
$string['settings:zendesk_email_desc'] = 'Adireshin imel na mai amfani da Zendesk don tabbatarwa ta API (tare da ƙari na /token).';
$string['settings:zendesk_token'] = 'Token ɗin API na Zendesk';
$string['settings:zendesk_token_desc'] = 'Token ɗin API don tabbatarwa ta Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Gano Barin Batun';
$string['settings:offtopic_heading_desc'] = 'Saita yadda tattaunawar ke mu\'amala da tattaunawa bayan batun.';
$string['settings:offtopic_enabled'] = 'Kunna Gano Barin Batun';
$string['settings:offtopic_enabled_desc'] = 'Ka umarci AI don gano da kuma mayar da tattaunawa bayan batun.';
$string['settings:offtopic_max'] = 'Sakonni Mafi Yawa Bayan Batun';
$string['settings:offtopic_max_desc'] = 'Adadin sakonni masu bin juna bayan batun kafin ɗaukar mataki.';
$string['settings:offtopic_action'] = 'Mataki na Barin Batun';
$string['settings:offtopic_action_desc'] = 'Abin da za a yi lokacin da iyakar barin batun ta kai.';
$string['settings:offtopic_action_warn'] = 'Yi gargaɗi da kuma jagoranta';
$string['settings:offtopic_action_end'] = 'Kulle damar a wucin gadi';
$string['settings:offtopic_lockout_duration'] = 'Tsawon Lokacin Kulle (mintuna)';
$string['settings:offtopic_lockout_duration_desc'] = 'Tsawon lokacin (a cikin mintuna) ɗalibin ya rasa damar malamin AI bayan wuce iyakar barin batun. Tsoho: mintuna 30.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Tsara Karatu da Tunatarwa';
$string['settings:studyplan_heading_desc'] = 'Saita fasalullukan tsara karatu da sanarwar tunatarwa.';
$string['settings:studyplan_enabled'] = 'Kunna Tsara Karatu';
$string['settings:studyplan_enabled_desc'] = 'Baiwa malamin AI damar taimaka wa ɗalibai ƙirƙirar shirye-shiryen karatu na mutum bisa lokacin da suke da shi.';
$string['settings:reminders_email_enabled'] = 'Kunna Tunatarwa ta Imel';
$string['settings:reminders_email_enabled_desc'] = 'Baiwa ɗalibai damar shiga tunatarwa na karatu ta imel.';
$string['settings:reminders_whatsapp_enabled'] = 'Kunna Tunatarwa ta WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Baiwa ɗalibai damar shiga tunatarwa na karatu ta WhatsApp (yana buƙatar saitunan API na WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL ɗin API na WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Ƙarshen API don aika sakonni na WhatsApp (misali. Twilio, MessageBird). Dole ne ya yarda da POST tare da jikin JSON mai ɗauke da filayen "to", "from", da "body".';
$string['settings:whatsapp_api_token'] = 'Token ɗin API na WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token ɗin tabbatarwa don API na WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Lambar Masu Aikawa na WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Lambar wayar da za a yi amfani da ita don aika sakonni na WhatsApp (tare da lambar ƙasa, misali. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Ƙasashen da aka Toshe na WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Lambobin ƙasa na ISO 3166-1 alpha-2 da aka raba da koma inda ba a barin tunatarwa na WhatsApp saboda ƙa\'idojin gida (misali. "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Tunatarwa ta Karatu: {$a}';
$string['reminder:email_body'] = 'Sannu {$a->firstname},

Wannan shine tunatarwar karatunka don "{$a->coursename}".

{$a->message}

Shirin karatun ka yana ba da shawarar sa\'o\'i {$a->hours_per_week} a mako don wannan kozi.

Ci gaba da aikin da kyau!

---
Don daina karɓar waɗannan tunatarwa, danna nan: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Tunatarwa ta Karatu don {$a->coursename}: {$a->message} (Fita: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Maƙasudin karatu na yau: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Ficewa daga Tunatarwa na Karatu';
$string['unsubscribe:success'] = 'An yi nasarar fitar da kai daga tunatarwa na karatu don wannan kozi.';
$string['unsubscribe:already'] = 'An riga an fitar da kai daga waɗannan tunatarwa.';
$string['unsubscribe:invalid'] = 'Hanyar haɗin ficewa mara inganci ko ta ƙare lokaci.';
$string['unsubscribe:resubscribe'] = 'Ka canza ra\'ayin ka? Za ka iya sake kunna tunatarwa ta tattaunawar malamin AI.';

// Scheduled task.
$string['task:send_reminders'] = 'Aika tunatarwa na karatu na malamin AI';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Yana adana shirye-shiryen karatu na ɗalibai.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID na mai amfani wanda yake da shirin karatu.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kozi da shirin karatu ya shafi.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Sa\'o\'i a mako ɗalibin yana shirin karatu.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Cikakkun bayanai na shirin karatu a cikin tsarin JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Yana adana zaɓuɓɓukan tunatarwa na karatu da rajista.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID na mai amfani da ya yi rajista don tunatarwa.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Tashoshin tunatarwa (imel ko whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Adireshin imel ko lambar wayar don tunatarwa.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Lambar ƙasan mai amfani don bin ƙa\'idoji.';

// Analytics dashboard.
$string['analytics:title'] = 'Kididdiga na Malamin AI';
$string['analytics:overview'] = 'Bayyani';
$string['analytics:total_conversations'] = 'Jimlar tattaunawa';
$string['analytics:total_messages'] = 'Jimlar sakonni';
$string['analytics:active_students'] = 'Ɗalibai masu aiki';
$string['analytics:avg_messages_per_student'] = 'Matsakaicin sakonni ga ɗalibi kowannensu';
$string['analytics:offtopic_rate'] = 'Ƙimar barin batun';
$string['analytics:escalation_count'] = 'An ɗaukaka zuwa goyon baya';
$string['analytics:studyplan_adoption'] = 'Ɗalibai da shirye-shiryen karatu';
$string['analytics:usage_trends'] = 'Yanayin Amfani';
$string['analytics:daily_messages'] = 'Adadin sakonni na yau da kullum';
$string['analytics:hotspots'] = 'Wuraren Zafi na Kozi';
$string['analytics:hotspots_desc'] = 'Sassan kozi da aka fi ambata a cikin tambayoyin ɗalibai. Ƙididdiga mafi girma na iya nuna wuraren da ɗalibai ke buƙatar ƙarin goyon baya.';
$string['analytics:section'] = 'Sashe';
$string['analytics:mention_count'] = 'Ambato';
$string['analytics:common_prompts'] = 'Tsare-Tsaren Tambaya na Kowa';
$string['analytics:common_prompts_desc'] = 'Tsare-tsaren tambaya masu maimaitawa daga ɗalibai. Duba waɗannan don gano giɓi na tsarin a cikin abun da ke cikin kozi.';
$string['analytics:prompt_pattern'] = 'Tsari';
$string['analytics:frequency'] = 'Maimaitawa';
$string['analytics:recent_activity'] = 'Ayyukan Kwanan Nan';
$string['analytics:no_data'] = 'Babu bayanan kididdiga da suke akwai tukuna. Bayanan za su bayyana da zarar ɗalibai sun fara amfani da malamin AI.';
$string['analytics:timerange'] = 'Kewayon lokaci';
$string['analytics:last_7_days'] = 'Kwanaki 7 da suka gabata';
$string['analytics:last_30_days'] = 'Kwanaki 30 da suka gabata';
$string['analytics:all_time'] = 'Duk lokaci';
$string['analytics:export'] = 'Fitar da bayanai';
$string['analytics:provider_comparison'] = 'Kwatankwacin Mai Bada Sabis na AI';
$string['analytics:provider_comparison_desc'] = 'Kwatanta aiki a tsakanin masu bada sabis na AI da aka yi amfani da su a wannan kozi.';
$string['analytics:provider'] = 'Mai Bada Sabis';
$string['analytics:response_count'] = 'Amsoshi';
$string['analytics:avg_response_length'] = 'Matsakaicin tsawon amsa';
$string['analytics:total_tokens'] = 'Jimlar tokens';
$string['analytics:avg_tokens'] = 'Matsakaicin tokens / amsa';

// User settings.
$string['usersettings:title'] = 'Mataimakin Horo na AI - Bayananku';
$string['usersettings:intro'] = 'Sarrafa bayanan tattaunawar malamin AI ka da saitunan sirri';
$string['usersettings:privacy_info'] = 'Ana adana tattaunawar ka tare da malamin AI don samar maka da goyon baya mai ci gaba a cikin kozi ka. Kana da cikakken iko akan wannan bayanan kuma zaka iya share su a kowane lokaci.';
$string['usersettings:usage_stats'] = 'Kididdigan Amfaninku';
$string['usersettings:total_messages'] = 'Jimlar sakonni';
$string['usersettings:total_conversations'] = 'Tattaunawa';
$string['usersettings:messages'] = 'Sakonni';
$string['usersettings:last_activity'] = 'Aikin ƙarshe';
$string['usersettings:delete_course_data'] = 'Share bayanan kozi';
$string['usersettings:no_data'] = 'Ba ka yi amfani da malamin AI tukuna ba. Bayanan amfaninku za su bayyana nan da zarar ka fara tattaunawa.';
$string['usersettings:delete_all_title'] = 'Share Duk Bayananku';
$string['usersettings:delete_all_warning'] = 'Wannan zai share duk tattaunawar malamin AI naka a duk kozi har abada. Ba za a iya mayar da wannan aikin ba.';
$string['usersettings:delete_all_button'] = 'Share Duk Bayanan Na';
$string['usersettings:confirm_delete_course'] = 'Shin ka tabbata kana son share duk bayanan malamin AI naka don kozi "{$a}" har abada? Ba za a iya mayar da wannan aikin ba.';
$string['usersettings:confirm_delete_all'] = 'Shin ka tabbata kana son share duk bayanan malamin AI naka a duk kozi har abada? Ba za a iya mayar da wannan aikin ba.';
$string['usersettings:data_deleted'] = 'An share bayananku.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Sannu, {$a}! Ni ne SOLA, mataimakin koyon kan layi na Saylor.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Bude SOLA';
$string['chat:change_avatar'] = 'Canza hoton';

// Quiz UI.
$string['chat:quiz'] = 'Yi gwajin tunawa';
$string['chat:quiz_setup_title'] = 'Gwajin Tunawa';
$string['chat:quiz_questions'] = 'Yawan tambayoyi';
$string['chat:quiz_topic'] = 'Batu';
$string['chat:quiz_topic_guided'] = 'AI ta jagoranta (bisa ci gaban ka)';
$string['chat:quiz_topic_default'] = 'Kayan koziyan yanzu';
$string['chat:quiz_topic_custom'] = 'Batu na musamman…';
$string['chat:quiz_custom_placeholder'] = 'Shigar da batu ko tambaya...';
$string['chat:quiz_start'] = 'Fara Gwajin';
$string['chat:quiz_cancel'] = 'Soke';
$string['chat:quiz_loading'] = 'Ana ƙirƙirar gwajin…';
$string['chat:quiz_error'] = 'Ba a iya ƙirƙirar gwajin. Da fatan za a sake gwadawa.';
$string['chat:quiz_correct'] = 'Daidai!';
$string['chat:quiz_wrong'] = 'Ba daidai ba.';
$string['chat:quiz_next'] = 'Tambaya ta gaba';
$string['chat:quiz_finish'] = 'Duba sakamako';
$string['chat:quiz_score'] = 'An kammala gwajin! Ka samu {$a->score} daga {$a->total}.';
$string['chat:quiz_summary'] = 'Na ƙare gwajin tunawa na tambayoyi {$a->total} kan "{$a->topic}" kuma na samu {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Manufofin Koyo';
$string['chat:quiz_topic_modules'] = 'Batun Kozi';
$string['chat:quiz_subtopic_select'] = 'Zaɓi abu na musamman…';
$string['chat:quiz_topic_sections'] = 'Sassan Kozi';
$string['chat:quiz_score_great'] = 'Aiki mai kyau! Ka san wannan abu sosai.';
$string['chat:quiz_score_good'] = 'Ƙoƙari mai kyau! Ci gaba da sake duba don ƙarfafa fahimtarka.';
$string['chat:quiz_score_practice'] = 'Ci gaba da yin aiki — gwada sake duba kayan kozi masu alaƙa, sannan sake yin gwajin.';
$string['chat:quiz_review_heading'] = 'Bitar Aiki';
$string['chat:quiz_retake'] = 'Sake Gwajin';
$string['chat:quiz_exit'] = 'Fita Daga Gwajin';
$string['chat:quiz_your_answer'] = 'Amsar ka';
$string['chat:quiz_correct_answer'] = 'Amsar daidai';

// Conversation starters.
$string['chat:starters_label'] = 'Fara tattaunawa';
$string['chat:starter_quiz'] = 'Yi Mini Gwaji';
$string['chat:starter_explain'] = 'Bayyana Wannan';
$string['chat:starter_key_concepts'] = 'Manyan Ra\'ayoyi';
$string['chat:starter_study_plan'] = 'Shirin Karatu';
$string['chat:starter_help_me'] = 'Taimakon AI';
$string['chat:starter_ell_practice'] = 'Yi Magana';
$string['chat:starter_ell_pronunciation'] = 'Furta ELL';
$string['chat:starter_ai_coach'] = 'Kocin AI';
$string['chat:starter_speak'] = 'Faɗi farawa';

// Reset / home.
$string['chat:reset'] = 'Fara daga farko';

// Topic picker.
$string['chat:topic_picker_title'] = 'Me kake so ka mai da hankali a kai?';
$string['chat:topic_picker_title_help'] = 'Me kake buƙatar taimako a kai?';
$string['chat:topic_picker_title_explain'] = 'Me kake son in bayyana?';
$string['chat:topic_picker_title_study'] = 'Wane fage kake so ka mai da hankali a kai?';
$string['chat:topic_start'] = 'Ci gaba';

// Expand states.
$string['chat:fullscreen'] = 'Cikakken allo';
$string['chat:exitfullscreen'] = 'Fita daga cikakken allo';

// Settings panel.
$string['chat:language'] = 'Canza yare';
$string['chat:settings_panel'] = 'Saitunan';
$string['chat:settings_language'] = 'Yare';
$string['chat:settings_avatar'] = 'Hoto';
$string['chat:settings_voice'] = 'Murya';
$string['chat:settings_voice_admin'] = 'Ana sarrafa saitunan murya a cikin kwamitin gudanarwa na shafin.';

// Voice mode.
$string['chat:voice_mode'] = 'Yanayin murya';
$string['chat:voice_end'] = 'Ƙare zaman murya';
$string['chat:voice_connecting'] = 'Ana haɗawa...';
$string['chat:voice_listening'] = 'Ana saurare...';
$string['chat:voice_speaking'] = 'SOLA na magana...';
$string['chat:voice_idle'] = 'Shirye';
$string['chat:voice_error'] = 'Haɗin murya ya kasa. Da fatan za a duba saitunanku.';
$string['chat:quiz_locked'] = 'SOLA ta tsaya a lokacin gwaji don tallafawa amincin ilimi. Yin sa-an-nan!';
$string['task:send_inactivity_reminders'] = 'Aika saƙonnin tunatarwa na mako-mako saboda rashin aiki';
$string['messageprovider:study_notes'] = 'Bayanan zaman karatu';
