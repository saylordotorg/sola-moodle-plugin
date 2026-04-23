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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Tsoho don sabbin kwasa-kwasai';
$string['settings:default_course_mode_desc'] = 'Yana sarrafa ko SOLA za ta bayyana akan kwas idan ba a yi zaɓi na kowane kwas ba. Sabbin shigarwa suna zuwa da tsoho "An kashe ta tsoho" domin masu gudanarwa su iya ba da izini kwas-da-kwas daga shafin Analytics ko shafin Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'An kashe ta tsoho (kunna kowane kwas)';
$string['settings:default_course_mode_all'] = 'An kunna akan dukkan kwasa-kwasai';
$string['settings:auto_open'] = 'Buɗewa kai tsaye a ziyarar farko';
$string['settings:auto_open_desc'] = 'Lokacin da aka kunna, drawer na SOLA yana buɗewa kai tsaye a karon farko da ɗalibi ya isa kowane kwas. Loadings na shafuka na gaba a cikin kwas ɗaya ba sa sake buɗe drawer — ana bin diddigin yanayin kowane kwas a cikin browser na ɗalibi ta hanyar localStorage. Yana aiki a desktop da mobile. Ana iya soke shi kowane kwas daga shafin Course AI Settings.';
$string['settings:comparison_providers'] = 'Masu ba da sabis na kwatantawa (zaɓin LLM)';
$string['settings:comparison_providers_desc'] = 'Ƙara ƙarin masu ba da sabis na AI zuwa cikin zaɓin LLM na widget don administratoci su iya kwatanta amsuwa a tsakanin masu ba da sabis. Yi amfani da tebur da ke ƙasa don ƙara layuka. Shafi na zafi zaɓi ne (bar shi babu komai don amfani da zafin duniya). Tsarin da aka adana: provider_id|api_key|model1,model2|temperature. Babban mai ba da sabis da aka saita a sama koyaushe yana cikin ta atomatik. Administratoci kawai da ke da ikon sarrafa suna ganin zaɓin; ɗalibai ba sa ganinsa ba. Provider IDs masu inganci: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Default Mai Bada Sabis na AI';
$string['settings:provider_desc'] = 'Zaɓi mai ba da AI don amfani da shi don kammala tattaunawa. Zaɓi "Moodle AI (core_ai subsystem)" don jagorar buƙatu ta hanyar daidaitawar AI da aka gina a cikin Moodle a Site admin > AI; an yi watsi da filayen API key, model, da base URL a ƙasa a cikin wannan yanayin. Streaming, tool use, da prompt caching ba a samun su ta core_ai — an isar da amsoshi a matsayin yanki guda. Yi amfani da mai ba da kai tsaye don mafi kyawun ƙwarewar ɗalibi.';
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
$string['settings:avatar_saylor'] = 'Alaman {$a} (Tsoho)';
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
$string['coursesettings:sola_enabled'] = 'SOLA akan wannan kwas';
$string['coursesettings:sola_enabled_toggle'] = 'Nuna kayan aikin SOLA akan wannan kwas';
$string['coursesettings:sola_enabled_desc'] = 'Yana sarrafa ko kayan aikin tattaunawa na SOLA yana bayyana akan wannan kwas. An saita tsohon na dukkan shafin a cikin saitunan plugin a General > Default for new courses.';
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
$string['chat:clear'] = 'Clear screen';
$string['chat:clear_confirm'] = 'Clear the visible messages? Your full chat history stays saved and can be reloaded by reopening the widget.';
$string['chat:copy'] = 'Kwafi tattaunawa';
$string['chat:copied'] = 'An kwafi tattaunawar zuwa allo';
$string['chat:copy_failed'] = 'An kasa kwafi tattaunawar';
$string['chat:thinking'] = 'Ina tunani...';
$string['chat:error'] = 'Yi hakuri, wani abu ya tafi ba daidai ba. Da fatan za a sake gwadawa.';
$string['chat:error_auth'] = 'Kuskuren tabbatarwa. Da fatan za a tuntuɓi mai gudanarwa ka.';
$string['chat:error_ratelimit'] = 'Buƙatu da yawa. Da fatan za a jira ɗan lokaci sannan a sake gwadawa.';
$string['chat:error_unavailable'] = 'Sabis ɗin AI ba shi da iko a wucin gadi. Da fatan za a sake gwadawa daga baya.';
$string['chat:error_notconfigured'] = 'Ba a saita malamin AI tukuna. Da fatan za a tuntuɓi mai gudanarwa ka.';
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
$string['chat:greeting'] = 'Sannu, {$a}! Ni ne SOLA. Ta yaya zan taimake ka yau?';
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
$string['chat:starter_quiz'] = 'Gwada Ni a Wannan';
$string['chat:starter_explain'] = 'Bayyana Wannan';
$string['chat:starter_key_concepts'] = 'Manyan Ra\'ayoyi';
$string['chat:starter_study_plan'] = 'Shirin Karatu';
$string['chat:starter_help_me'] = 'Taimakon AI';
$string['chat:starter_ai_project_coach'] = 'Kocin Aikin AI';
$string['chat:starter_ell_practice'] = 'Aikin Tattaunawa';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Bayanai';

// History panel.
$string['chat:history_title'] = 'Bayanai da Tarihin Tattaunawa';
$string['task:send_inactivity_reminders'] = 'Aika saƙonnin tunatarwa na mako-mako saboda rashin aiki';
$string['messageprovider:study_notes'] = 'Bayanan zaman karatu';
$string['task:send_inactivity_reminders'] = 'Aika saƙonnin tunatarwa na mako-mako saboda rashin aiki';
$string['task:run_meta_ai_query'] = 'Gudanar da binciken nazarin Learning Radar da aka tsara';
$string['messageprovider:study_notes'] = 'Bayanan zaman karatu';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Isar da Gaban';
$string['settings:cdn_heading_desc'] = 'Bayar kadarorin gaban SOLA (JS/CSS) daga CDN na waje maimakon tsarin fayilolin Moodle. Wannan yana ba da damar sabunta gaban ba tare da haɓaka plugin ba. Bar CDN URL fanko don amfani da fayilolin plugin na gida.';
$string['settings:cdn_url'] = 'Tushen CDN URL';
$string['settings:cdn_url_desc'] = 'Tushen URL inda aka shirya sola.min.js da sola.min.css. Misali: https://your-org.github.io/sola-cdn. Bar fanko don amfani da fayilolin plugin na gida.';
$string['settings:cdn_version'] = 'Sigar kadarorin CDN';
$string['settings:cdn_version_desc'] = 'Kalmar sigar da aka ƙara zuwa CDN URLs don cache busting. Sabunta bayan kowace CDN deploy (misali 3.2.4 ko commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Jimlar amfani';
$string['analytics:tab_bycourse'] = 'Ta darasi';
$string['analytics:tab_comparison'] = 'AI da waɗanda ba su yi amfani ba';
$string['analytics:tab_byunit'] = 'Ta sashe';
$string['analytics:tab_usagetypes'] = 'Nau\'ikan amfani';
$string['analytics:tab_themes'] = 'Jigogi';
$string['analytics:tab_feedback'] = 'Ra\'ayin AI';
$string['analytics:total_students'] = 'Jimlar ɗalibai';
$string['analytics:active_users'] = 'Masu amfani da AI';
$string['analytics:msgs_per_student'] = 'Saƙonni ga kowane ɗalibi';
$string['analytics:avg_session'] = 'Matsakaicin lokacin zama';
$string['analytics:return_rate'] = 'Adadin dawowa';
$string['analytics:total_sessions'] = 'Jimlar zama';
$string['analytics:thumbs_up'] = 'Yabo';
$string['analytics:thumbs_down'] = 'Rashin yabo';
$string['analytics:hallucination_flags'] = 'Alamun kuskure';
$string['analytics:msgs_to_resolution'] = 'Saƙonni zuwa warwarewa';
$string['analytics:helpful'] = 'Mai taimako';
$string['analytics:not_helpful'] = 'Ba mai taimako ba';
$string['analytics:flag_hallucination'] = 'Wannan amsar tana ɗauke da bayanan da ba daidai ba';
$string['analytics:submit_rating'] = 'Aika';
$string['analytics:thanks_feedback'] = 'Na gode da ra\'ayinku';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Bayyana wannan shafi';
$string['chat:starter_ask_anything'] = 'Tambayi komai';
$string['chat:starter_review_practice'] = 'Bita da aiki';
$string['chat:history_saved_subtitle'] = 'Amsoshin da aka ajiye suna kasancewa akan wannan na\'urar don wannan kwas.';
$string['chat:history_saved_empty'] = 'Ajiye amsar AI don ganinta a nan.';
$string['chat:history_views_label'] = 'Ra\'ayoyin tarihi';
$string['chat:history_view_saved'] = 'An ajiye';
$string['chat:history_view_recent'] = 'Tarihi';
$string['chat:debug_refresh'] = 'Sabunta';
$string['chat:debug_copy_all'] = 'Kwafi duka';
$string['chat:debug_close'] = 'Rufe';
$string['chat:language_switch'] = 'Canza harshe';
$string['chat:language_dismiss'] = 'Yar da shawarar harshe';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Zaɓi mai samar da LLM';
$string['chat:llm_model_label'] = 'Samfuri';
$string['chat:llm_model_select'] = 'Zaɓi samfurin LLM';
$string['chat:footer_usertesting'] = 'Gwajin yiwuwar amfani';
$string['chat:footer_feedback'] = 'Ra\'ayi';
$string['chat:voice_panel_title'] = 'Yi magana da {$a} (Gwaji)';

// Additional translated strings.
$string['chat:debug_context'] = 'Gyara mahallin';
$string['chat:debug_context_browser'] = 'Hoton mai bincike';
$string['chat:debug_context_copy'] = 'Kwafi';
$string['chat:debug_context_prompt'] = 'Amsar uwar garke';
$string['chat:debug_context_request'] = 'Buƙatun SSE na ƙarshe';
$string['chat:debug_context_toggle'] = 'Canja mai bincike';
$string['chat:history_empty'] = 'Babu tattaunawa.';
$string['chat:history_refresh'] = 'Sabunta';
$string['chat:history_subtitle'] = 'Saƙonninku na baya-bayan nan.';
$string['chat:starter_explain_prompt'] = 'Bayyana mafi muhimmancin ra\'ayi?';
$string['chat:starter_help_lesson'] = 'Bayyana wannan';
$string['chat:starter_help_lesson_prompt'] = 'Taimaka min da darasin. Taƙaita ra\'ayoyin muhimmai.';
$string['chat:starter_prompt_coach'] = 'Koci AI';
$string['chat:starter_quick_study'] = 'Nazari cikin sauri';
$string['chat:starter_study_plan_prompt'] = 'Ina so in tsara karatu. Tambaye: (1) manufa, (2) lokaci. Sabunta tsarin.';
$string['chat:voice_copy'] = 'Tattaunawa ta murya tare da mataimaki.';
$string['chat:voice_ready'] = 'A shirye';
$string['chat:voice_start'] = 'Fara';
$string['chat:voice_title'] = 'Yi magana da SOLA';
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
$string['mobile_chip_concepts'] = 'Ra\'ayoyin muhimmai';
$string['mobile_chip_quiz'] = 'Gwaji';
$string['mobile_chip_studyplan'] = 'Tsarin karatu';
$string['mobile_clear'] = 'Share tarihi';
$string['mobile_disabled'] = 'SOLA ba ya samuwa ga wannan kwas.';
$string['mobile_placeholder'] = 'Yi tambaya...';
$string['mobile_welcome'] = 'Sannu, {$a}!';
$string['mobile_welcome_sub'] = 'Ni ne SOLA, mataimakinka na koyo. Yaya zan taimaka?';
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
$string['rubric:done'] = 'An gama';
$string['rubric:encourage_high'] = 'Aiki nagari! Ka ci gaba!';
$string['rubric:encourage_low'] = 'Farawa mai kyau! Atisaye na yau da kullun zai taimaka.';
$string['rubric:encourage_mid'] = 'Ƙoƙari mai kyau! Ci gaba da atisaye.';
$string['rubric:overall'] = 'Gaba ɗaya';
$string['rubric:practice_again'] = 'Yi atisaye kuma';
$string['rubric:score_title_conversation'] = 'Maki na atisayen tattaunawa';
$string['rubric:score_title_pronunciation'] = 'Maki na atisayen furtawa';
$string['rubric:scoring'] = 'Ana kimantawa...';
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
