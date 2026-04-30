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
$string['attachment:attach'] = 'Haɗawa';
$string['attachment:attach_image_or_pdf'] = 'Haɗa hoto ko PDF';
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
$string['chat:quiz_topic_adaptive']      = 'Mai daidaitawa — mai da hankali kan rashin ƙarfina';
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
$string['usersettings:download'] = 'Sauke bayanaina na {$a}';
$string['usersettings:download_help'] = 'Sauke cikakkiyar kwafin JSON na duk wani rikodin {$a} da ke da nasaba da asusunka: tattaunawa, sakonni, kima, tsare-tsaren karatu, tunatarwa, makin aiki, amsoshin bincike, bayanin martaba, da shigarwar dubawa.';
$string['usersettings:privacy_notice_link'] = 'Karanta sanarwar sirri ta {$a}';
$string['privacy:title'] = 'Sanarwar Sirri ta {$a}';
$string['admin:user_data:title'] = '{$a} — Fitar da bayanan dalibi da gogewa';
$string['admin:user_data:intro'] = 'Hanyar aiki don bukatar GDPR Mataki na 15 (samun damar) ko Mataki na 17 (gogewa). Nemo dalibi ta hanyar lambar mai amfani ta Moodle, duba layukan da wannan plugin ke rikewa, sannan ka fitar ko ka goge.';
$string['admin:user_data:search_label'] = 'Lambar mai amfani ta Moodle';
$string['admin:user_data:lookup'] = 'Nemo';
$string['admin:user_data:not_found'] = 'Babu mai amfani da aka samu da wannan lambar.';
$string['admin:user_data:download'] = 'Sauke duk bayanan dalibi a matsayin JSON';
$string['admin:user_data:purge'] = 'Goge duk bayanan dalibi na wannan mai amfani';
$string['admin:user_data:confirm_purge'] = 'Goge dukkan rikodi na {$a} har abada? Wannan zai shafi tattaunawa, sakonni, kima, tsare-tsaren karatu, tunatarwa, bayanan martaba, makin aiki, bincike, shigarwar dubawa, da ra\'ayoyi. Ba za a iya juyar da wannan ba.';
$string['admin:user_data:purged'] = 'An goge dukkan bayanan mai amfani da aka zaba.';
$string['chat:consent_heading'] = 'Kafin ka tattauna da {$a->product}';
$string['chat:consent_body'] = '{$a->product} mataimaki ne na koyo wanda AI ke karfafa shi. Sakonninka da amsoshin {$a->product} suna ajiye su a cikin bayanan Moodle na {$a->institution}, kuma ana aikawa da kashi goma na karshe na tattaunawar zuwa ga mai bada sabis na AI da aka amince da shi don amsa tambayoyinka. Ana raba sunanka na farko don sirri-sirri; babu wani bayani na ganewa da ake aikawa zuwa ga mai bada AI. Kana iya saukewa, gogewa, ko daina amfani da {$a->product} a kowane lokaci.';
$string['chat:consent_accept'] = 'Na fahimta, fara {$a}';
$string['chat:consent_privacy_link'] = 'Karanta cikakken sanarwar sirri';
$string['task:audit_cleanup'] = 'Tsabtace tebur na dubawa na AI Course Assistant';
$string['task:conversation_retention'] = 'Sharewar tattaunawa ta AI Course Assistant';
$string['settings:audit_retention_days'] = 'Adana log na dubawa (kwanaki)';
$string['settings:audit_retention_days_desc'] = 'Aikin yau da kullum yana goge layukan dubawa da suka wuce wannan. 0 yana kashe shi. Tsoho 365.';
$string['settings:conversation_retention_days'] = 'Adana tattaunawa (kwanaki)';
$string['settings:conversation_retention_days_desc'] = 'Aikin yau da kullum yana goge layukan tattaunawa da lokacin sauya su na karshe ya wuce wannan. 0 yana kashe shi. Tsoho 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Wuraren SSRF da aka amince da su';
$string['settings:ssrf_trusted_endpoints_desc'] = 'URL ɗaya a kowane layi. Masu masaukai da aka jera suna ƙetare bincike na loopback / private-IP / https-kawai a cikin mai tabbatar da SSRF na SOLA. Yi amfani da wannan kawai don LLM-yi na yi-da-kanka a kan hanyar sadarwa da kuke sarrafawa — misali <code>http://localhost:11434</code> don Ollama na gida, <code>http://10.0.0.5:8000</code> don vLLM pod a cikin VPC ɗaya. Kwatance yana daidai da scheme + host + port; ana watsi da kowace hanya. Tsoho babu kome (toshe duk abin da ke ciki). Layuka da suka fara da <code>#</code> sune sharhi.';
$string['task:learner_weekly_digest']    = 'Mataimakin kwas na AI - Takaitaccen sati na ɗalibi';
$string['learner_digest:subject']        = 'Satinka tare da {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Kana son gajeren imel na sati tare da abin da za ka mai da hankali a kai?';
$string['next_best_action:get_started']           = 'Fara da {$a->title}. Bude ni ka ce "taimaka mini da {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Fara da {$a->title}. Modulin "{$a->module}" ya rufe shi.';
$string['next_best_action:review']                = 'Sake duba muhimman bayanai na {$a->title} — bude ni ka ce "bayyana min {$a->title} kamar sabon abu".';
$string['next_best_action:review_with_module']    = 'Sake duba muhimman bayanai na {$a->title} a cikin "{$a->module}", sai ka bude ni da kowace tambaya.';
$string['next_best_action:practice']              = 'Gina kan abin da kake da shi a {$a->title}. Bude ni ka ce "ba ni misalin da aka warware na {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Yi aiki da {$a->title} tare da "{$a->module}". Bude ni don misalan da aka warware.';
$string['next_best_action:quiz']                  = 'Tabbatar da {$a->title} da gwaji mai sauri. Bude ni ka zabi "Gwada ni — mai daidaitawa".';
$string['next_best_action:quiz_with_module']      = 'Tabbatar da {$a->title} da gwaji mai sauri. Modulin "{$a->module}" shi ne inda yake.';
$string['next_best_action:empty_state']           = 'Kana yin kyau a kowace manufa yanzu — babu abin da za a tunatar. Ci gaba.';
$string['next_best_action:header']                = 'Ga abubuwa {$a} da za ka mai da hankali a kai bayan haka:';
$string['learner_digest:unsubscribe_done_title']  = 'An cire suna';
$string['learner_digest:unsubscribe_done_body']   = 'An gama — ba za ka samu sako-saƙon mako-mako don wannan kwas daga {$a->product} ba. Za ka iya yin rajista a kowane lokaci daga taga zance a cikin kwas.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Hanyar haɗi ta cire suna ba ta da inganci';
$string['learner_digest:unsubscribe_invalid_body']  = 'Wannan hanyar haɗi ta cire suna ta ƙare ko ba ta da kyau. Za ka iya gudanar da abubuwan da kake so na imel daga saituna na kwas.';
$string['active_learners:line']                   = '{$a} wasu suna karanta wannan kwas a yanzu.';
$string['active_learners:line_global']             = '{$a} wasu suna karatu yanzu.';
$string['settings:active_learners_scope']          = 'Iyakar mai nuna ɗaliban aiki';
$string['settings:active_learners_scope_desc']     = 'Ko mai nuna "wasu suna karatu yanzu" sama da farawan tattaunawa yana ƙidaya ɗalibai a kan kwas ɗaya kawai ko ɗalibai a duk faɗin shafin. Tsoho <strong>na duniya</strong>.';
$string['settings:active_learners_scope_global']   = 'Na duniya (kowane kwas)';
$string['settings:active_learners_scope_course']   = 'Kowane kwas kawai';
$string['learner_digest:optin_yes']      = 'Eh, ka aiko mini imel na sati';
$string['learner_digest:optin_no']       = 'A\'a, na gode';
$string['learner_digest:optin_thanks']   = 'An yi. Za ka samu takaitaccen sati a kowane Litinin.';
$string['learner_digest:optin_declined'] = 'An yi. Babu imel - kawai bude ni lokacin da kake son binciken.';
$string['settings:xai_proxy_url'] = 'URL na proxy na xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'URL na wss na jama\'a na sabis na proxy na SOLA xAI Realtime (misali wss://voice.example.com/xai-rt/rt). Lokacin da aka saita wannan tare da sirrin JWT, muryar xAI tana wucewa ta hanyar proxy kuma maɓallin master na API na xAI ba ya isa burauzar. Bar shi babu komai don dawowa zuwa hanyar tuntuɓa kai tsaye (ba a bada shawara ba a samarwa).';
$string['settings:xai_proxy_jwt_secret'] = 'Sirrin JWT na proxy na xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Sirrin da aka raba na HS256 da ake amfani da shi don sa hannu kan alamomin zaman gajere don proxy na xAI Realtime. Dole ne ya dace da sirrin MOODLE_JWT_SECRET a kan Cloudflare Worker. Sauya shi lokaci-lokaci.';
$string['admin:vendor_dpa:title'] = '{$a} — Matsayin DPA na masu sayarwa';
$string['admin:vendor_dpa:intro'] = 'Fitar da horo, DPA, da tsarin adana bayanai don kowane direba na mai bada sabis na AI. Yi amfani da wannan don yanke shawarar wanne direba za ka kunna a shafinka. Tsarin Tier 2 da sama yana bukatar DPA da aka sa hannu da fitar da horo na kwangila.';
$string['admin:vendor_dpa:maintenance_note'] = 'Ana kula da wannan tebur a cikin classes/vendor_registry.php. Sabunta shi lokacin da sauyi a sharuddan amfani na mai sayarwa ya zo.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Imel din Jami\'in Kare Bayanai';
$string['settings:dpo_email_desc'] = 'Imel na hulda da ake nunawa a sanarwar sirri ta dalibi a karkashin "Hulda". Bar shi babu komai don ɓoye layin. Saitunan da aka sake suna su nuna wannan zuwa DPO na su.';
$string['settings:privacy_external_url'] = 'URL na shafin sirri na kungiya';
$string['settings:privacy_external_url_desc'] = 'Hada zuwa shafin sirri na matakin kungiya, ana nunawa a sanarwar sirri ta dalibi a karkashin "Hulda". Bar shi babu komai don ɓoye layin.';
$string['settings:privacy_notice_override'] = 'Sauya sanarwar sirri (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Idan an saita, wannan HTML zai maye gurbin sanarwar sirri ta tsoho da aka kawata wacce ake nunawa a /local/ai_course_assistant/privacy.php. Yi amfani da wannan don sanya rubutun da Lauya ya tabbatar wa kungiyarka ba tare da gyara lambar ba. Bar shi babu komai don amfani da sanarwar tsoho, wacce ke samun rubutunta daga maɓallan saiti bakwai na suna.';
$string['objectives:title'] = 'Manufofin koyo da gwaninta';
$string['objectives:toggles_heading'] = 'Bin diddigin gwaninta';
$string['objectives:toggle_master'] = 'Kunna bin diddigin gwaninta don wannan kwasa';
$string['objectives:toggle_chip'] = 'Nuna alamar Gwanintar Koyo ga dalibai';
$string['objectives:toggle_chip_help'] = 'Na zabi. Lokacin da aka kashe, gwaninta har yanzu tana jagorantar mataimaki cikin shiru amma daliban ba sa ganin alama.';
$string['objectives:toggled'] = 'An sabunta saitin.';
$string['objectives:detected_heading'] = 'An gano manufofin koyo {$a->count} daga {$a->source}.';
$string['objectives:source_competency'] = 'iyawowi na Moodle';
$string['objectives:source_summary'] = 'takaitaccen kwasa';
$string['objectives:source_section'] = 'sashe ko abun ciki na shafi na farko';
$string['objectives:source_page'] = 'shafin kwasa';
$string['objectives:source_llm'] = 'fitarwa ta AI';
$string['objectives:source_manual'] = 'shigarwa ta hannu';
$string['objectives:source_none'] = 'babu tushen kai tsaye';
$string['objectives:import_detected'] = 'Shigo da wadannan manufofi da aka gano';
$string['objectives:import_llm'] = 'Fitar da manufofi tare da AI';
$string['objectives:llm_empty'] = 'Fitarwa ta AI ba ta dawo da wani manufa ba. Sake gwadawa daga baya ko shigar da su da hannu.';
$string['objectives:imported'] = 'An shigo da manufofi {$a}.';
$string['objectives:none_detected'] = 'Ba a gano manufofin koyo ta atomatik ba. Shigar da su da hannu a kasa, ko amfani da fitarwa ta AI.';
$string['objectives:list_heading'] = 'Manufofin yanzu';
$string['objectives:col_code'] = 'Lamba';
$string['objectives:col_title'] = 'Take';
$string['objectives:col_source'] = 'Tushe';
$string['objectives:col_actions'] = 'Ayyuka';
$string['objectives:add_heading'] = 'Kara wani manufa';
$string['objectives:add_submit'] = 'Kara manufa';
$string['objectives:saved'] = 'An ajiye manufa.';
$string['objectives:deleted'] = 'An goge manufa.';
$string['objectives:delete_confirm'] = 'A goge wannan manufa da dukkan tarihin gwaji?';
$string['objectives:delete_all'] = 'Goge dukkan manufofi na wannan kwasa';
$string['objectives:delete_all_confirm'] = 'A goge kowace manufa da dukkan tarihin gwaji na wannan kwasa? Ba za a iya juyar da shi ba.';
$string['objectives:deleted_all'] = 'An goge dukkan manufofi na wannan kwasa.';
$string['mastery:chip_aria'] = 'Matsayin gwanintar koyo';
$string['mastery:popover_aria'] = 'Cikakkun bayanan gwanintar koyo';
$string['mastery:chip_label'] = '{$a->mastered} daga cikin {$a->total} an gwaninta';
$string['mastery:status_mastered'] = 'an gwaninta';
$string['mastery:status_learning'] = 'akan tafiya';
$string['mastery:status_not_started'] = 'ba a fara ba';
$string['mastery:popover_empty'] = 'Babu manufofin koyo da aka saita don wannan kwasa.';
$string['settings:mastery_heading'] = 'Bin diddigin gwaninta';
$string['settings:mastery_heading_desc'] = 'Fasalin zabi-shiga kowace kwasa wanda ke yi wa amsoshin tambayoyi da tattaunawar mataimaki alama tare da manufofin koyo na kwasa, sannan ya ciyar da takaitaccen hoton gwaninta cikin tsarin prompt don jagorantar tambayoyi. Mai shiru ta tsoho: daliban ba sa ganin komai sai dai idan an kunna alamar kowace kwasa.';
$string['settings:mastery_threshold'] = 'Iyakar gwaninta';
$string['settings:mastery_threshold_desc'] = 'Daidaito mai gudana wanda a kansa ko sama da shi ake daukar manufa a matsayin an gwaninta. 0.0 zuwa 1.0. Tsoho 0.85.';
$string['settings:mastery_window'] = 'Tagar gwaji';
$string['settings:mastery_window_desc'] = 'Yawan gwajin baya-bayan nan kowace manufa da za a yi nauyi a daidaito mai gudana. Tsoho 8.';
$string['settings:mastery_decay_enabled']        = 'Kunna ragowar gwaninta';
$string['settings:mastery_decay_enabled_desc']   = 'Lokacin da aka kunna, makin gwaninta yana raguwa akan lokaci akan tambon lokacin ƙoƙari na baya-bayan nan. Manufar da aka riga aka iya tana komawa zuwa "koyo" bayan isasshen lokaci. Ba ya faɗuwa ƙasa "koyo". <strong>Tsoho a kashe a v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Rabin rayuwar ragowar gwaninta (kwanaki)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Rabin rayuwa cikin kwanaki. Maki ya ninka da 0.5 ^ (kwanaki tun daga ƙoƙari na ƙarshe / rabin rayuwa). Tsoho 30. Ana amfani da shi kawai lokacin da aka kunna ragowa.';
$string['settings:mastery_classifier_model'] = 'Tsarin rarrabuwa';
$string['settings:mastery_classifier_model_desc'] = 'Tsarin da ake amfani da shi don rarrabe tattaunawar mataimaki da manufofi. Bar shi babu komai don gadon tsarin tsoho na mai bada AI; in ba haka ba ka kayyade tsarin mai arha kamar gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Nauyin rarrabuwa';
$string['settings:mastery_classifier_weight_desc'] = 'Nawa gwajin tattaunawa ke kirgawa idan aka kwatanta da gwajin tambayoyi (1.0). Tsoho 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Iyakar amincewa ta rarrabuwa';
$string['settings:mastery_classifier_threshold_desc'] = 'Mafi karancin amincewa da ake bukata ta rarrabuwa don rikodin gwajin tattaunawa. 0.0 zuwa 1.0. Tsoho 0.7.';
$string['chat:mode_progress'] = 'Ci gaba';
$string['objectives:toggle_dashboard'] = 'Nuna shafin dashboard na Ci gaba ga dalibai';
$string['objectives:toggle_dashboard_help'] = 'Na zabi. Yana kara shafin Ci gaba kusa da Tattaunawa / Murya / Tarihi a cikin widget. Shafin yana nuna wa daliban wadanne manufofi suka gwaninta, wadanda suke akan tafiya, da wadanda ba su fara ba.';
$string['mastery:dashboard_title'] = 'Ci gaban koyonka';
$string['mastery:dashboard_subtitle'] = 'Ana auna gwaninta daga amsoshin tambayoyinka da gwajin tattaunawa. Ka ci gaba — zurfi ya fi yawa.';
$string['mastery:dashboard_refresh'] = 'Sabunta';
$string['mastery:section_mastered'] = 'An gwaninta';
$string['mastery:section_learning'] = 'Akan tafiya';
$string['mastery:section_not_started'] = 'Ba a fara ba tukuna';
$string['mastery:summary_label'] = '{$a->mastered} daga cikin {$a->total} manufofi an gwaninta';
$string['mastery:ask_about'] = 'Yi tambaya akan wannan';
$string['mastery:celebrate'] = 'Ka gwanintar dukkan manufofin wannan kwasa. Aiki mai kyau.';
$string['mastery:ask_template'] = 'Taimaka mini in yi gwaji in zurfafa fahimtara akan wannan manufa: {$a}.';
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
