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
 * Language strings for local_ai_course_assistant — Swahili (Kiswahili).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Msaidizi wa Kozi wa AI';
$string['attachment:attach'] = 'Ambatisha';
$string['attachment:attach_image_or_pdf'] = 'Ambatisha picha au PDF';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Huhifadhi mazungumzo ya mshauri wa AI kwa kila mtumiaji na kozi.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Kitambulisho cha mtumiaji anayemiliki mazungumzo.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Kitambulisho cha kozi ambayo mazungumzo yanahusiana nazo.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Kichwa cha mazungumzo.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Wakati mazungumzo yalipoanzishwa.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Wakati mazungumzo yalipobadilishwa mara ya mwisho.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Huhifadhi ujumbe mmoja mmoja katika mazungumzo ya mshauri wa AI.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Kitambulisho cha mtumiaji aliyetuma ujumbe.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Kitambulisho cha kozi ambayo ujumbe unahusiana nayo.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Jukumu la mtumaji wa ujumbe (mtumiaji au msaidizi).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Maudhui ya ujumbe.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Idadi ya tokeni zilizotumika kwa ujumbe.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Wakati ujumbe ulipoanzishwa.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Tumia mazungumzo ya mshauri wa AI';
$string['ai_course_assistant:viewanalytics'] = 'Angalia takwimu za mazungumzo ya mshauri wa AI';
$string['ai_course_assistant:manage'] = 'Simamia mipangilio ya mazungumzo ya mshauri wa AI (Jukumu la Msimamizi)';

// Settings.
$string['settings:enabled'] = 'Wezesha Msaidizi wa Kozi wa AI';
$string['settings:enabled_desc'] = 'Wezesha au zima kidirisha cha Msaidizi wa Kozi wa AI kwenye kurasa za kozi.';
$string['settings:default_course_mode'] = 'Chaguo-msingi kwa kozi mpya';
$string['settings:default_course_mode_desc'] = 'Inadhibiti ikiwa SOLA inaonekana kwenye kozi wakati hakuna uchaguzi wa kila-kozi uliofanywa. Usakinishaji mpya hupata chaguo-msingi la "Imezimwa kwa chaguo-msingi" ili wasimamizi waweze kuchagua kozi kwa kozi kutoka ukurasa wa Analytics au ukurasa wa Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Imezimwa kwa chaguo-msingi (washa kila kozi)';
$string['settings:default_course_mode_all'] = 'Imewashwa kwenye kozi zote';
$string['settings:auto_open'] = 'Fungua kiotomatiki kwenye ziara ya kwanza';
$string['settings:auto_open_desc'] = 'Inapowezeshwa, droo ya SOLA inafunguliwa kiotomatiki mara ya kwanza mwanafunzi anapofika kwenye kila kozi. Upakiaji wa kurasa zinazofuata katika kozi hiyo hiyo haufungui droo tena — hali inafuatiliwa kwa kila kozi kwenye kivinjari cha mwanafunzi kupitia localStorage. Inatumika kwenye kompyuta ya mezani na simu. Inaweza kubatilishwa kwa kila kozi kutoka ukurasa wa Course AI Settings.';
$string['settings:comparison_providers'] = 'Watoa huduma wa kulinganisha (kichaguzi cha LLM)';
$string['settings:comparison_providers_desc'] = 'Ongeza watoa huduma wa AI wa ziada kwenye kichaguzi cha LLM kilichojengwa ndani ya widget ili wasimamizi waweze kulinganisha majibu kati ya watoa huduma. Tumia jedwali lililo hapa chini kuongeza safu mlalo. Safu ya halijoto ni ya hiari (acha wazi ili kutumia halijoto ya kimataifa). Muundo uliohifadhiwa: provider_id|api_key|model1,model2|temperature. Mtoa huduma mkuu aliyewekwa hapo juu hujumuishwa kiotomatiki kila wakati. Wasimamizi wenye uwezo wa kusimamia pekee ndio wanaoona kichaguzi; wanafunzi hawakioni kamwe. Provider IDs halali: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Mtoa Huduma wa AI chaguo-msingi';
$string['settings:provider_desc'] = 'Chagua mtoa huduma wa AI wa kutumia kwa ukamilishaji wa gumzo. Chagua "Moodle AI (core_ai subsystem)" kuelekeza maombi kupitia usanidi wa AI uliojengwa ndani ya Moodle katika Site admin > AI; sehemu za ufunguo wa API, mfano na URL ya msingi hapa chini hupuuzwa katika hali hiyo. Streaming, matumizi ya zana, na prompt caching hazipatikani kupitia core_ai — majibu hutolewa kama kipande kimoja. Tumia mtoa huduma wa moja kwa moja kwa uzoefu bora wa mwanafunzi.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Ndani ya Mtandao)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Maalum (Inayooana na OpenAI)';
$string['settings:apikey'] = 'Ufunguo wa API';
$string['settings:apikey_desc'] = 'Ufunguo wa API kwa mtoa huduma aliyechaguliwa. Hauhitajiki kwa Ollama.';
$string['settings:model'] = 'Jina la Modeli';
$string['settings:model_desc'] = 'Modeli ya kutumia. Chaguo-msingi inategemea mtoa huduma (mfano. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL ya Msingi ya API';
$string['settings:apibaseurl_desc'] = 'URL ya msingi kwa API. Inajazwa kiotomatiki kwa kila mtoa huduma lakini inaweza kubadilishwa. Acha wazi kwa chaguo-msingi la mtoa huduma.';
$string['settings:systemprompt'] = 'Kiolezo cha Ombi la Mfumo';
$string['settings:systemprompt_desc'] = 'Ombi la mfumo linalotumwa kwa AI. Tumia viashiria: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Wewe ni mshauri wa AI msaidizi kwa kozi "{{coursename}}". Jukumu la mwanafunzi ni {{userrole}}.

Mada za kozi zinazoshughulikiwa:
{{coursetopics}}

Saidia mwanafunzi kuelewa maudhui ya kozi. Kuwa wa kuhimiza, wazi, na sahihi kielimu.';
$string['settings:temperature'] = 'Joto';
$string['settings:temperature_desc'] = 'Inadhibiti nasibu. Thamani za chini ni za kuzingatia zaidi, thamani za juu ni za ubunifu zaidi. Kipindi: 0.0 hadi 2.0.';
$string['settings:maxhistory'] = 'Historia ya Juu ya Mazungumzo';
$string['settings:maxhistory_desc'] = 'Idadi ya juu ya jozi za ujumbe za kujumuisha katika maombi ya API. Ujumbe wa zamani unakatwa.';
$string['settings:avatar'] = 'Picha ya Mazungumzo';
$string['settings:avatar_desc'] = 'Chagua ikoni ya picha kwa kitufe cha kidirisha cha mazungumzo.';
$string['settings:avatar_saylor'] = 'Nembo ya {$a} (Chaguo-msingi)';
$string['settings:position'] = 'Nafasi ya Kidirisha';
$string['settings:position_desc'] = 'Nafasi ya kidirisha cha mazungumzo kwenye ukurasa.';
$string['settings:position_br'] = 'Chini kulia';
$string['settings:position_bl'] = 'Chini kushoto';
$string['settings:position_tr'] = 'Juu kulia';
$string['settings:position_tl'] = 'Juu kushoto';
$string['chat:settings'] = 'Mipangilio ya programu-jalizi';
$string['analytics:viewdashboard'] = 'Angalia dashibodi ya takwimu';

// Course settings.
$string['coursesettings:title'] = 'Mipangilio ya AI ya Kozi';
$string['coursesettings:enabled'] = 'Wezesha kubatilisha kwa kozi';
$string['coursesettings:enabled_desc'] = 'Inapowezeshwa, mipangilio hapa chini inabatilisha usanidi wa mtoa huduma wa AI wa kimataifa kwa kozi hii peke yake. Acha sehemu wazi ili kurithisha thamani ya kimataifa.';
$string['coursesettings:sola_enabled'] = 'SOLA kwenye kozi hii';
$string['coursesettings:sola_enabled_toggle'] = 'Onyesha wijeti ya SOLA kwenye kozi hii';
$string['coursesettings:sola_enabled_desc'] = 'Inadhibiti ikiwa wijeti ya gumzo ya SOLA inaonekana kwenye kozi hii. Chaguo-msingi la tovuti nzima limewekwa katika mipangilio ya programu-jalizi chini ya General > Default for new courses.';
$string['coursesettings:using_global'] = 'Inatumia mipangilio ya kimataifa';
$string['coursesettings:saved'] = 'Mipangilio ya AI ya kozi imehifadhiwa.';
$string['coursesettings:global_settings_link'] = 'Mipangilio ya AI ya kimataifa';

// Language detection and preference.
$string['lang:switch'] = 'Ndiyo, badilisha';
$string['lang:dismiss'] = 'Hapana, asante';
$string['lang:change'] = 'Badilisha lugha';
$string['lang:english'] = 'Kiingereza';

// Chat widget.
$string['chat:title'] = 'Mshauri wa AI';
$string['chat:placeholder'] = 'Uliza swali...';
$string['chat:send'] = 'Tuma';
$string['chat:close'] = 'Funga mazungumzo';
$string['chat:open'] = 'Fungua mazungumzo ya mshauri wa AI';
$string['chat:clear'] = 'Futa skrini';
$string['chat:clear_confirm'] = 'Futa ujumbe unaoonekana? Historia yako kamili ya mazungumzo inabaki imehifadhiwa na inaweza kupakiwa tena kwa kufungua upya wijeti.';
$string['chat:copy'] = 'Nakili mazungumzo';
$string['chat:copied'] = 'Mazungumzo yamenakiliwa kwenye ubao wa kunakili';
$string['chat:copy_failed'] = 'Imeshindwa kunakili mazungumzo';
$string['chat:thinking'] = 'Ninafikiria...';
$string['chat:error'] = 'Samahani, kuna kitu kimeenda vibaya. Tafadhali jaribu tena.';
$string['chat:error_auth'] = 'Hitilafu ya uthibitishaji. Tafadhali wasiliana na msimamizi wako.';
$string['chat:error_ratelimit'] = 'Maombi mengi sana. Tafadhali subiri kidogo kisha jaribu tena.';
$string['chat:error_unavailable'] = 'Huduma ya AI haipatikani kwa sasa. Tafadhali jaribu tena baadaye.';
$string['chat:error_notconfigured'] = 'Mshauri wa AI hajasakinishwa bado. Tafadhali wasiliana na msimamizi wako.';
$string['chat:mic'] = 'Sema swali lako';
$string['chat:mic_error'] = 'Hitilafu ya kipaza sauti. Tafadhali angalia ruhusa za kivinjari chako.';
$string['chat:mic_unsupported'] = 'Uingizaji wa sauti hauungwi mkono katika kivinjari hiki.';
$string['chat:newline_hint'] = 'Shift+Enter kwa mstari mpya';
$string['chat:you'] = 'Wewe';
$string['chat:assistant'] = 'Mshauri wa AI';
$string['chat:history_loaded'] = 'Mazungumzo ya awali yamepakiwa.';
$string['chat:history_cleared'] = 'Historia ya mazungumzo imefutwa.';
$string['chat:offtopic_warning'] = 'Inaonekana swali lako halihusu kozi hii. Tafadhali jaribu kukaa kwenye mada ili niweze kukusaidia vizuri zaidi!';
$string['chat:offtopic_ended'] = 'Ufikiaji wako wa mshauri wa AI umesimamishwa kwa muda kwa {$a} dakika kwa sababu mazungumzo yalitoka nje ya mada mara nyingi mno. Tafadhali tumia muda huu kupitia nyenzo za kozi yako, na unaweza kujaribu tena baadaye.';
$string['chat:offtopic_locked'] = 'Ufikiaji wako wa mshauri wa AI umesimamishwa kwa muda. Unaweza kujaribu tena baada ya dakika {$a}. Tafadhali zingatia maswali yanayohusiana na kozi utakaporudi.';
$string['chat:escalated_to_support'] = 'Sikuweza kujibu swali lako kikamilifu, kwa hivyo nimeunda tikiti ya msaada kwa ajili yako. Mwanachama wa timu ya msaada atafuatilia. Kumbukumbu ya tikiti yako ni: {$a}';
$string['chat:studyplan_intro'] = 'Ninaweza kukusaidia kuunda mpango wa masomo kwa kozi hii! Niambie tu idadi ya masaa kwa wiki unayoweza kuyatoa kwa kusoma, na nitakusaidia kujenga mpango uliopangwa.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'Maswali Yanayoulizwa Mara kwa Mara na Msaada';
$string['settings:faq_heading_desc'] = 'Sanidi maswali yanayoulizwa mara kwa mara ya kati na ujumuishaji wa tikiti ya msaada wa Zendesk.';
$string['settings:faq_content'] = 'Maudhui ya Maswali Yanayoulizwa Mara kwa Mara';
$string['settings:faq_content_desc'] = 'Ingiza maingizo ya maswali yanayoulizwa mara kwa mara (moja kwa kila mstari katika muundo: S: swali | J: jibu). Hizi zitatolewa kwa AI kujibu maswali ya kawaida ya msaada.';
$string['settings:zendesk_enabled'] = 'Wezesha Upandishaji wa Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Wakati AI haiwezi kutatua swali la msaada, unda tikiti ya Zendesk kiotomatiki na muhtasari wa mazungumzo.';
$string['settings:zendesk_subdomain'] = 'Subdomain ya Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomain yako ya Zendesk (mfano. "kampuniyako" kwa kampuniyako.zendesk.com).';
$string['settings:zendesk_email'] = 'Barua Pepe ya API ya Zendesk';
$string['settings:zendesk_email_desc'] = 'Anwani ya barua pepe ya mtumiaji wa Zendesk kwa uthibitishaji wa API (na kiambatisho cha /token).';
$string['settings:zendesk_token'] = 'Tokeni ya API ya Zendesk';
$string['settings:zendesk_token_desc'] = 'Tokeni ya API kwa uthibitishaji wa Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Utambuzi wa Nje ya Mada';
$string['settings:offtopic_heading_desc'] = 'Sanidi jinsi mazungumzo yanavyoshughulikia mazungumzo nje ya mada.';
$string['settings:offtopic_enabled'] = 'Wezesha Utambuzi wa Nje ya Mada';
$string['settings:offtopic_enabled_desc'] = 'Agiza AI kugundua na kuelekeza upya mazungumzo nje ya mada.';
$string['settings:offtopic_max'] = 'Ujumbe wa Juu Zaidi wa Nje ya Mada';
$string['settings:offtopic_max_desc'] = 'Idadi ya ujumbe unaofuatana wa nje ya mada kabla ya kuchukua hatua.';
$string['settings:offtopic_action'] = 'Hatua ya Nje ya Mada';
$string['settings:offtopic_action_desc'] = 'Nini cha kufanya wakati kikomo cha nje ya mada kinafikiwa.';
$string['settings:offtopic_action_warn'] = 'Onya na elekeza upya';
$string['settings:offtopic_action_end'] = 'Zuia ufikiaji kwa muda';
$string['settings:offtopic_lockout_duration'] = 'Muda wa Kuzuiwa (dakika)';
$string['settings:offtopic_lockout_duration_desc'] = 'Muda (kwa dakika) mwanafunzi anapopoteza ufikiaji wa mshauri wa AI baada ya kuzidi kikomo cha nje ya mada. Chaguo-msingi: dakika 30.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Mipango ya Masomo na Vikumbusho';
$string['settings:studyplan_heading_desc'] = 'Sanidi vipengele vya mipango ya masomo na arifa za vikumbusho.';
$string['settings:studyplan_enabled'] = 'Wezesha Mipango ya Masomo';
$string['settings:studyplan_enabled_desc'] = 'Ruhusu mshauri wa AI kusaidia wanafunzi kuunda mipango ya masomo ya kibinafsi kulingana na muda wao unapatikana.';
$string['settings:reminders_email_enabled'] = 'Wezesha Vikumbusho vya Barua Pepe';
$string['settings:reminders_email_enabled_desc'] = 'Ruhusu wanafunzi kujiunga na vikumbusho vya masomo kupitia barua pepe.';
$string['settings:reminders_whatsapp_enabled'] = 'Wezesha Vikumbusho vya WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Ruhusu wanafunzi kujiunga na vikumbusho vya masomo kupitia WhatsApp (inahitaji usanidi wa API ya WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL ya API ya WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Mwisho wa API kwa kutuma ujumbe wa WhatsApp (mfano. Twilio, MessageBird). Lazima ikubali POST na mwili wa JSON ulio na sehemu za "to", "from", na "body".';
$string['settings:whatsapp_api_token'] = 'Tokeni ya API ya WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Tokeni ya uthibitishaji kwa API ya WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Nambari ya Mtumaji wa WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Nambari ya simu ya kutumia kutuma ujumbe wa WhatsApp (na nambari ya nchi, mfano. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Nchi Zilizozuiwa za WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Nambari za nchi za ISO 3166-1 alpha-2 zilizotengwa kwa koma ambapo vikumbusho vya WhatsApp haviruhusiwi kutokana na kanuni za eneo (mfano. "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Kikumbusho cha Masomo: {$a}';
$string['reminder:email_body'] = 'Habari {$a->firstname},

Hii ni kikumbusho chako cha masomo kwa "{$a->coursename}".

{$a->message}

Mpango wako wa masomo unapendekeza masaa {$a->hours_per_week} kwa wiki kwa kozi hii.

Endelea na kazi nzuri!

---
Ili kusimamisha kupokea vikumbusho hivi, bonyeza hapa: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Kikumbusho cha Masomo kwa {$a->coursename}: {$a->message} (Jitoe: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Mwelekeo wa masomo wa leo: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Jitoe kutoka kwa Vikumbusho vya Masomo';
$string['unsubscribe:success'] = 'Umefanikiwa kujitoa kutoka kwa vikumbusho vya masomo kwa kozi hii.';
$string['unsubscribe:already'] = 'Umeshajitoa kutoka kwa vikumbusho hivi.';
$string['unsubscribe:invalid'] = 'Kiungo cha kujitoa kisichofaa au kilichoisha muda wake.';
$string['unsubscribe:resubscribe'] = 'Umebadilisha mawazo yako? Unaweza kuwezesha tena vikumbusho kupitia mazungumzo ya mshauri wa AI.';

// Scheduled task.
$string['task:send_reminders'] = 'Tuma vikumbusho vya masomo vya mshauri wa AI';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Huhifadhi mipango ya masomo ya wanafunzi.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Kitambulisho cha mtumiaji anayemiliki mpango wa masomo.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kozi ambayo mpango wa masomo unafaa.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Masaa kwa wiki mwanafunzi anapanga kusoma.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Maelezo ya mpango wa masomo katika muundo wa JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Huhifadhi mapendeleo ya vikumbusho vya masomo na usajili.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Kitambulisho cha mtumiaji aliyejisajili kwa vikumbusho.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Njia ya kikumbusho (barua pepe au whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Anwani ya barua pepe au nambari ya simu kwa vikumbusho.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Nambari ya nchi ya mtumiaji kwa ufuataji wa kanuni.';

// Analytics dashboard.
$string['analytics:title'] = 'Takwimu za Mshauri wa AI';
$string['analytics:overview'] = 'Muhtasari';
$string['analytics:total_conversations'] = 'Jumla ya mazungumzo';
$string['analytics:total_messages'] = 'Jumla ya ujumbe';
$string['analytics:active_students'] = 'Wanafunzi wanaofanya kazi';
$string['analytics:avg_messages_per_student'] = 'Wastani wa ujumbe kwa kila mwanafunzi';
$string['analytics:offtopic_rate'] = 'Kiwango cha nje ya mada';
$string['analytics:escalation_count'] = 'Imepandishwa kwa msaada';
$string['analytics:studyplan_adoption'] = 'Wanafunzi wenye mipango ya masomo';
$string['analytics:usage_trends'] = 'Mwelekeo wa Matumizi';
$string['analytics:daily_messages'] = 'Kiasi cha ujumbe wa kila siku';
$string['analytics:hotspots'] = 'Maeneo Makubwa ya Kozi';
$string['analytics:hotspots_desc'] = 'Sehemu za kozi zinazotajwa mara kwa mara zaidi katika maswali ya wanafunzi. Hesabu kubwa zinaweza kuonyesha maeneo ambayo wanafunzi wanahitaji msaada zaidi.';
$string['analytics:section'] = 'Sehemu';
$string['analytics:mention_count'] = 'Matajo';
$string['analytics:common_prompts'] = 'Mifumo ya Maombi ya Kawaida';
$string['analytics:common_prompts_desc'] = 'Mifumo ya maswali inayojirudia mara kwa mara kutoka kwa wanafunzi. Pitia hizi kutambua mapengo ya kimfumo katika maudhui ya kozi.';
$string['analytics:prompt_pattern'] = 'Mfumo';
$string['analytics:frequency'] = 'Marudio';
$string['analytics:recent_activity'] = 'Shughuli za Hivi Karibuni';
$string['analytics:no_data'] = 'Hakuna data ya takwimu inayopatikana bado. Data itaonekana wanafunzi watakapoanza kutumia mshauri wa AI.';
$string['analytics:timerange'] = 'Kipindi cha muda';
$string['analytics:last_7_days'] = 'Siku 7 zilizopita';
$string['analytics:last_30_days'] = 'Siku 30 zilizopita';
$string['analytics:all_time'] = 'Wakati wote';
$string['analytics:export'] = 'Hamisha data';
$string['analytics:provider_comparison'] = 'Ulinganisho wa Mtoa Huduma wa AI';
$string['analytics:provider_comparison_desc'] = 'Linganisha utendaji kati ya watoa huduma wa AI wanaotumika katika kozi hii.';
$string['analytics:provider'] = 'Mtoa Huduma';
$string['analytics:response_count'] = 'Majibu';
$string['analytics:avg_response_length'] = 'Urefu wa wastani wa jibu';
$string['analytics:total_tokens'] = 'Jumla ya tokeni';
$string['analytics:avg_tokens'] = 'Wastani wa tokeni / jibu';

// User settings.
$string['usersettings:title'] = 'Msaidizi wa Kozi wa AI - Data Yako';
$string['usersettings:intro'] = 'Simamia data yako ya mazungumzo ya mshauri wa AI na mipangilio ya faragha';
$string['usersettings:privacy_info'] = 'Mazungumzo yako na mshauri wa AI yanahifadhiwa ili kukupa msaada unaoendelea katika kozi yako. Una udhibiti kamili juu ya data hii na unaweza kuifuta wakati wowote.';
$string['usersettings:usage_stats'] = 'Takwimu Zako za Matumizi';
$string['usersettings:total_messages'] = 'Jumla ya ujumbe';
$string['usersettings:total_conversations'] = 'Mazungumzo';
$string['usersettings:messages'] = 'Ujumbe';
$string['usersettings:last_activity'] = 'Shughuli ya mwisho';
$string['usersettings:delete_course_data'] = 'Futa data ya kozi';
$string['usersettings:no_data'] = 'Bado hujatumia mshauri wa AI. Data yako ya matumizi itaonekana hapa ukianza kuandika.';
$string['usersettings:delete_all_title'] = 'Futa Data Yako Yote';
$string['usersettings:delete_all_warning'] = 'Hii itafuta kabisa mazungumzo yako yote ya mshauri wa AI katika kozi zote. Kitendo hiki hakiwezi kutenduliwa.';
$string['usersettings:delete_all_button'] = 'Futa Data Zangu Zote';
$string['usersettings:confirm_delete_course'] = 'Je, una uhakika unataka kufuta kabisa data yako yote ya mshauri wa AI kwa kozi "{$a}"? Kitendo hiki hakiwezi kutenduliwa.';
$string['usersettings:confirm_delete_all'] = 'Je, una uhakika unataka kufuta kabisa data YOTE ya mshauri wa AI katika kozi zote? Kitendo hiki hakiwezi kutenduliwa.';
$string['usersettings:data_deleted'] = 'Data yako imefutwa.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Habari, {$a}! Mimi ni SOLA. Ninaweza kukusaidia vipi leo?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Fungua SOLA';
$string['chat:change_avatar'] = 'Badilisha picha';

$string['chat:quiz'] = 'Fanya mazoezi ya mtihani';
$string['chat:quiz_setup_title'] = 'Mazoezi ya Mtihani';
$string['chat:quiz_questions'] = 'Idadi ya maswali';
$string['chat:quiz_topic'] = 'Mada';
$string['chat:quiz_topic_guided'] = 'Kuongozwa na AI (kulingana na maendeleo yako)';
$string['chat:quiz_topic_adaptive']      = 'Inayobadilika — zingatia udhaifu wangu';
$string['chat:quiz_topic_default'] = 'Maudhui ya sasa ya kozi';
$string['chat:quiz_topic_custom'] = 'Mada maalum…';
$string['chat:quiz_custom_placeholder'] = 'Ingiza mada au swali...';
$string['chat:quiz_start'] = 'Anza Mtihani';
$string['chat:quiz_cancel'] = 'Ghairi';
$string['chat:quiz_loading'] = 'Kuunda mtihani…';
$string['chat:quiz_error'] = 'Haikuweza kuunda mtihani. Tafadhali jaribu tena.';
$string['chat:quiz_correct'] = 'Sahihi!';
$string['chat:quiz_wrong'] = 'Makosa.';
$string['chat:quiz_next'] = 'Swali lijalo';
$string['chat:quiz_finish'] = 'Angalia matokeo';
$string['chat:quiz_score'] = 'Mtihani umekamilika! Ulipata {$a->score} kati ya {$a->total}.';
$string['chat:quiz_summary'] = 'Nimekamilisha mtihani wa mazoezi wa maswali {$a->total} kuhusu "{$a->topic}" na kupata {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Malengo ya Kujifunza';
$string['chat:quiz_topic_modules'] = 'Mada ya Kozi';
$string['chat:quiz_subtopic_select'] = 'Chagua kipengele maalum…';
$string['chat:quiz_topic_sections'] = 'Sehemu za Kozi';
$string['chat:quiz_score_great'] = 'Kazi nzuri sana! Unajua vizuri sana maudhui haya.';
$string['chat:quiz_score_good'] = 'Juhudi nzuri! Endelea kupitiapitia ili kuimarisha ufahamu wako.';
$string['chat:quiz_score_practice'] = 'Endelea kufanya mazoezi — jaribu kupitia maudhui yanayohusiana ya kozi, kisha fanya mtihani tena.';
$string['chat:quiz_review_heading'] = 'Mapitio';
$string['chat:quiz_retake'] = 'Rudia Mtihani';
$string['chat:quiz_exit'] = 'Toka kwenye Mtihani';
$string['chat:quiz_your_answer'] = 'Jibu lako';
$string['chat:quiz_correct_answer'] = 'Jibu sahihi';

$string['chat:starters_label'] = 'Vianzio vya mazungumzo';
$string['chat:starter_quiz'] = 'Nifanye Mtihani wa Hii';
$string['chat:starter_explain'] = 'Eleza Hili';
$string['chat:starter_key_concepts'] = 'Dhana Muhimu';
$string['chat:starter_study_plan'] = 'Mpango wa Masomo';
$string['chat:starter_help_me'] = 'Msaada wa AI';
$string['chat:starter_ai_project_coach'] = 'Mkufunzi wa Mradi wa AI';
$string['chat:starter_ell_practice'] = 'Mazoezi ya Mazungumzo';
$string['chat:starter_ell_pronunciation'] = 'Matamshi ya ELL';
$string['chat:starter_ai_coach'] = 'Kocha wa AI';
$string['chat:starter_speak'] = 'Sema kianzio';

$string['chat:reset'] = 'Anza upya';

$string['chat:topic_picker_title'] = 'Ungependa kuzingatia nini?';
$string['chat:topic_picker_title_help'] = 'Unahitaji msaada na nini?';
$string['chat:topic_picker_title_explain'] = 'Ungependa nieleze nini?';
$string['chat:topic_picker_title_study'] = 'Eneo gani ungependa kuzingatia?';
$string['chat:topic_start'] = 'Endelea';

$string['chat:fullscreen'] = 'Skrini nzima';
$string['chat:exitfullscreen'] = 'Toka skrini nzima';

$string['chat:language'] = 'Badilisha lugha';
$string['chat:settings_panel'] = 'Mipangilio';
$string['chat:settings_language'] = 'Lugha';
$string['chat:settings_avatar'] = 'Picha';
$string['chat:settings_voice'] = 'Sauti';
$string['chat:settings_voice_admin'] = 'Mipangilio ya sauti inadhibitiwa kwenye paneli ya msimamizi wa tovuti.';

$string['chat:voice_mode'] = 'Hali ya sauti';
$string['chat:voice_end'] = 'Maliza kipindi cha sauti';
$string['chat:voice_connecting'] = 'Inaunganisha...';
$string['chat:voice_listening'] = 'Inasikia...';
$string['chat:voice_speaking'] = 'SOLA anazungumza...';
$string['chat:voice_idle'] = 'Tayari';
$string['chat:voice_error'] = 'Muunganisho wa sauti umeshindwa. Tafadhali angalia mipangilio yako.';
$string['chat:quiz_locked'] = 'SOLA imesimamishwa wakati wa mitihani ili kusaidia uaminifu wa kitaaluma. Bahati njema!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Maelezo';

// History panel.
$string['chat:history_title'] = 'Maelezo na Historia ya Mazungumzo';
$string['task:send_inactivity_reminders'] = 'Tuma barua pepe za ukumbusho wa kila wiki kwa kutokuwa na shughuli';
$string['messageprovider:study_notes'] = 'Maelezo ya kipindi cha masomo';
$string['task:send_inactivity_reminders'] = 'Tuma barua pepe za ukumbusho wa kutofanya kazi kila wiki';
$string['task:run_meta_ai_query'] = 'Endesha swali la uchambuzi wa Rada ya Kujifunza lililopangwa';
$string['messageprovider:study_notes'] = 'Maelezo ya kipindi cha masomo';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Utoaji wa Frontend';
$string['settings:cdn_heading_desc'] = 'Toa mali za frontend za SOLA (JS/CSS) kutoka CDN ya nje badala ya mfumo wa faili wa Moodle. Hii inaruhusu masasisho ya frontend bila kuboresha programu-jalizi. Acha CDN URL tupu kutumia faili za programu-jalizi za ndani.';
$string['settings:cdn_url'] = 'URL ya Msingi wa CDN';
$string['settings:cdn_url_desc'] = 'URL ya msingi ambapo sola.min.js na sola.min.css zinahifadhiwa. Mfano: https://your-org.github.io/sola-cdn. Acha tupu kutumia faili za programu-jalizi za ndani.';
$string['settings:cdn_version'] = 'Toleo la Mali za CDN';
$string['settings:cdn_version_desc'] = 'Mfuatano wa toleo unaoongezwa kwa CDN URLs kwa cache busting. Sasisha baada ya kila CDN deploy (mfano 3.2.4 au commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Matumizi yote';
$string['analytics:tab_bycourse'] = 'Kwa kozi';
$string['analytics:tab_comparison'] = 'AI dhidi ya wasiotumia';
$string['analytics:tab_byunit'] = 'Kwa sehemu';
$string['analytics:tab_usagetypes'] = 'Aina za matumizi';
$string['analytics:tab_themes'] = 'Mada';
$string['analytics:tab_feedback'] = 'Maoni ya AI';
$string['analytics:total_students'] = 'Jumla ya wanafunzi';
$string['analytics:active_users'] = 'Watumiaji hai wa AI';
$string['analytics:msgs_per_student'] = 'Ujumbe kwa mwanafunzi';
$string['analytics:avg_session'] = 'Muda wa wastani wa kipindi';
$string['analytics:return_rate'] = 'Kiwango cha kurudi';
$string['analytics:total_sessions'] = 'Jumla ya vipindi';
$string['analytics:thumbs_up'] = 'Kidole gumba juu';
$string['analytics:thumbs_down'] = 'Kidole gumba chini';
$string['analytics:hallucination_flags'] = 'Alama za makosa';
$string['analytics:msgs_to_resolution'] = 'Ujumbe hadi suluhisho';
$string['analytics:helpful'] = 'Yenye msaada';
$string['analytics:not_helpful'] = 'Haina msaada';
$string['analytics:flag_hallucination'] = 'Jibu hili lina taarifa zisizo sahihi';
$string['analytics:submit_rating'] = 'Tuma';
$string['analytics:thanks_feedback'] = 'Asante kwa maoni yako';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Eleza ukurasa huu';
$string['chat:starter_ask_anything'] = 'Uliza chochote';
$string['chat:starter_review_practice'] = 'Kagua na fanya mazoezi';
$string['chat:history_saved_subtitle'] = 'Majibu yaliyohifadhiwa yanabaki kwenye kifaa hiki kwa kozi hii.';
$string['chat:history_saved_empty'] = 'Hifadhi jibu la AI ili kuliona hapa.';
$string['chat:history_views_label'] = 'Mionekano ya historia';
$string['chat:history_view_saved'] = 'Yaliyohifadhiwa';
$string['chat:history_view_recent'] = 'Historia';
$string['chat:debug_refresh'] = 'Onyesha upya';
$string['chat:debug_copy_all'] = 'Nakili zote';
$string['chat:debug_close'] = 'Funga';
$string['chat:language_switch'] = 'Badilisha lugha';
$string['chat:language_dismiss'] = 'Puuza pendekezo la lugha';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Chagua mtoa huduma wa LLM';
$string['chat:llm_model_label'] = 'Mfano';
$string['chat:llm_model_select'] = 'Chagua mfano wa LLM';
$string['chat:footer_usertesting'] = 'Jaribio la utumiaji';
$string['chat:footer_feedback'] = 'Maoni';
$string['chat:voice_panel_title'] = 'Zungumza na {$a} (Jaribio)';

// Additional translated strings.
$string['chat:debug_context'] = 'Urekebishaji muktadha';
$string['chat:debug_context_browser'] = 'Picha ya kivinjari';
$string['chat:debug_context_copy'] = 'Nakili';
$string['chat:debug_context_prompt'] = 'Jibu la seva';
$string['chat:debug_context_request'] = 'Ombi la SSE la mwisho';
$string['chat:debug_context_toggle'] = 'Badilisha mkaguzi';
$string['chat:history_empty'] = 'Hakuna mazungumzo.';
$string['chat:history_refresh'] = 'Onyesha upya';
$string['chat:history_subtitle'] = 'Ujumbe wako wa hivi karibuni.';
$string['chat:starter_explain_prompt'] = 'Elezea dhana muhimu zaidi?';
$string['chat:starter_help_lesson'] = 'Eleza hii';
$string['chat:starter_help_lesson_prompt'] = 'Nisaidie kuelewa somo. Fupisha dhana muhimu.';
$string['chat:starter_prompt_coach'] = 'Kocha AI';
$string['chat:starter_quick_study'] = 'Masomo haraka';
$string['chat:starter_study_plan_prompt'] = 'Nataka kupanga masomo. Uliza: (1) lengo, (2) muda. Sasisha mpango.';
$string['chat:voice_copy'] = 'Mazungumzo ya sauti na msaidizi.';
$string['chat:voice_ready'] = 'Tayari';
$string['chat:voice_start'] = 'Anza';
$string['chat:voice_title'] = 'Ongea na SOLA';
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
$string['mobile_chip_concepts'] = 'Dhana muhimu';
$string['mobile_chip_quiz'] = 'Jaribio';
$string['mobile_chip_studyplan'] = 'Mpango wa masomo';
$string['mobile_clear'] = 'Futa historia';
$string['mobile_disabled'] = 'SOLA haipatikani kwa kozi hii.';
$string['mobile_placeholder'] = 'Uliza swali...';
$string['mobile_welcome'] = 'Habari, {$a}!';
$string['mobile_welcome_sub'] = 'Mimi ni SOLA, msaidizi wako wa kujifunza. Nikukusaidie vipi?';
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
$string['rubric:done'] = 'Imekamilika';
$string['rubric:encourage_high'] = 'Bora sana! Endelea hivyo!';
$string['rubric:encourage_low'] = 'Mwanzo mzuri! Mazoezi ya mara kwa mara yatasaidia.';
$string['rubric:encourage_mid'] = 'Juhudi nzuri! Endelea kufanya mazoezi.';
$string['rubric:overall'] = 'Jumla';
$string['rubric:practice_again'] = 'Fanya mazoezi tena';
$string['rubric:score_title_conversation'] = 'Alama ya mazoezi ya mazungumzo';
$string['rubric:score_title_pronunciation'] = 'Alama ya mazoezi ya matamshi';
$string['rubric:scoring'] = 'Inakadiria...';
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
$string['demo:title'] = 'Mazingira ya majaribio';
$string['demo:heading'] = 'Mazingira ya majaribio';
$string['demo:intro'] = 'Ukurasa huu huunda kozi ya majaribio ambayo <strong>imefichwa kwa wanafunzi</strong> (visible=0) na kuijaza na wanafunzi bandia, mazungumzo ya AI, tathmini na maoni. Ni muhimu kwa kuhakiki Analytics Dashboard au kuthibitisha mabadiliko ya programu-jalizi bila kuathiri mwanafunzi yeyote halisi aliyesajiliwa.';
$string['demo:step1'] = 'Hatua 1: kozi ya majaribio';
$string['demo:step2'] = 'Hatua 2: ongeza wanafunzi bandia na mazungumzo ya AI';
$string['demo:course_exists'] = 'Kozi ya majaribio ipo: <strong>{$a->fullname}</strong> (jina fupi <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'imefichwa';
$string['demo:badge_visible'] = 'inaonekana kwa wanafunzi';
$string['demo:no_course'] = 'Hakuna kozi ya majaribio iliyopatikana. Bonyeza hapa chini ili kuunda moja.';
$string['demo:create_btn'] = 'Unda kozi ya majaribio iliyofichwa';
$string['demo:open_course'] = 'Fungua kozi &rarr;';
$string['demo:seed_intro'] = 'Huunda demo_student_001, demo_student_002, ..., huwasajili katika kozi ya majaribio, na kuingiza mazungumzo, ujumbe, tathmini na maoni ya kimaudhui. Endesha tena ili kuongeza data zaidi, au chagua "safisha kwanza" ili kuanza upya.';
$string['demo:users_label'] = 'Watumiaji';
$string['demo:weeks_label'] = 'Wiki';
$string['demo:clear_label'] = 'Safisha kwanza watumiaji waliopo wa demo_*';
$string['demo:seed_btn'] = 'Ongeza wanafunzi na mazungumzo';
$string['demo:view_analytics'] = 'Tazama Uchambuzi wa kozi hii &rarr;';
$string['demo:footer'] = 'Data iliyoundwa hapa inaishi katika majedwali ya kawaida ya watumiaji / usajili ya Moodle na majedwali ya mazungumzo ya programu-jalizi yenyewe. Watumiaji bandia wote wana majina ya watumiaji yanayoanza na <code>demo_student_</code> ili iwe rahisi kuwachuja au kuwaondoa. Ili kuwaondoa, endesha tena hatua ya seed ukiwa na "Safisha kwanza watumiaji waliopo wa demo_*" iliyowekwa alama.';
$string['demo:course_fullname'] = 'Kozi ya Majaribio ya SOLA (imefichwa)';
$string['demo:notify_created'] = 'Kozi ya majaribio iko tayari: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Imeshindikana kuunda kozi: {$a}';
$string['demo:notify_seeded'] = 'Imeongezwa: {$a->users} watumiaji, {$a->conversations} mazungumzo, {$a->messages} ujumbe, {$a->ratings} tathmini, {$a->feedback} maingizo ya maoni.';
$string['demo:notify_seed_fail'] = 'Imeshindikana kuongeza data: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Gharama ya Token & Uchambuzi &rarr;';
$string['toc:testing'] = 'Mazingira ya majaribio &rarr;';
$string['toc:back_to_course'] = '&larr; Rudi kwa {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Binary ya pdftotext haijapatikana; uchambuzi wa PDF umezimwa.';
$string['rag:pdftotext_available'] = 'pdftotext imegunduliwa katika {$a}.';
$string['rag:docx_unavailable'] = 'Kipanuzi cha PHP ZipArchive hakipatikani; uchambuzi wa DOCX umezimwa.';
$string['rag:h5p_unavailable'] = 'Maudhui ya H5P hayakuweza kusomwa; inarukwa.';
$string['rag:scorm_too_large'] = 'Kifurushi cha SCORM kinazidi kikomo cha ukubwa kilichowekwa ({$a} MB); inarukwa.';
$string['rag:scorm_unzip_failed'] = 'Kifurushi cha SCORM hakikuweza kufunguliwa; inarukwa.';
$string['rag:transcript_fetch_failed'] = 'Haikuweza kupata nakala kutoka {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL ya nakala imezuiwa na changamoto ya Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Vyombo vya habari vilivyopachikwa vimegunduliwa: {$a}';
$string['rag:embed_transcript_attached'] = 'Nakala imeambatishwa kwa {$a}';

// v3.9.10–v3.9.14 new strings (English verbatim; translate later).
$string['usersettings:download'] = 'Pakua data yangu ya {$a}';
$string['usersettings:download_help'] = 'Pakua nakala kamili ya JSON ya kila rekodi ya {$a} iliyounganishwa na akaunti yako: mazungumzo, ujumbe, ukadiriaji, mipango ya masomo, vikumbusho, alama za mazoezi, majibu ya tafiti, wasifu, na kumbukumbu za ukaguzi.';
$string['usersettings:privacy_notice_link'] = 'Soma ilani ya faragha ya {$a}';
$string['privacy:title'] = 'Ilani ya Faragha ya {$a}';
$string['admin:user_data:title'] = '{$a} — kuhamisha na kufuta data ya mwanafunzi';
$string['admin:user_data:intro'] = 'Njia ya kiutendaji kwa ombi la GDPR Kifungu cha 15 (kupata) au Kifungu cha 17 (kufuta). Tafuta mwanafunzi kwa kitambulisho cha mtumiaji wa Moodle, kagua safu ambazo programu-jalizi hii inashikilia kwa ajili yake, na uhamishe au ufute.';
$string['admin:user_data:search_label'] = 'Kitambulisho cha mtumiaji wa Moodle';
$string['admin:user_data:lookup'] = 'Tafuta';
$string['admin:user_data:not_found'] = 'Hakuna mtumiaji aliyepatikana mwenye kitambulisho hicho.';
$string['admin:user_data:download'] = 'Pakua data yote ya mwanafunzi kama JSON';
$string['admin:user_data:purge'] = 'Futa data yote ya mwanafunzi ya mtumiaji huyu';
$string['admin:user_data:confirm_purge'] = 'Futa kabisa kila rekodi ya {$a}? Hii inafagia kupitia mazungumzo, ujumbe, ukadiriaji, mipango ya masomo, vikumbusho, wasifu, alama za mazoezi, tafiti, kumbukumbu za ukaguzi, na maoni. Kitendo hiki hakiwezi kutenduliwa.';
$string['admin:user_data:purged'] = 'Data yote ya mtumiaji aliyechaguliwa imefutwa.';
$string['chat:consent_heading'] = 'Kabla ya kuzungumza na {$a->product}';
$string['chat:consent_body'] = '{$a->product} ni msaidizi wa kujifunza unaotumia AI. Ujumbe wako na majibu ya {$a->product} huhifadhiwa katika hifadhidata ya Moodle ya {$a->institution} na zamu kumi za mwisho hutumwa kwa mtoa huduma wa modeli ya AI aliyeidhinishwa ili kujibu maswali yako. Jina lako la kwanza linashirikiwa kwa ajili ya ubinafsishaji; hakuna taarifa nyingine ya kitambulisho inayotumwa kwa mtoa huduma wa AI. Unaweza kupakua, kufuta, au kuacha kutumia {$a->product} wakati wowote.';
$string['chat:consent_accept'] = 'Nimeelewa, anza {$a}';
$string['chat:consent_privacy_link'] = 'Soma ilani kamili ya faragha';
$string['task:audit_cleanup'] = 'Usafishaji wa jedwali la ukaguzi wa AI Course Assistant';
$string['task:conversation_retention'] = 'Mfagizi wa uhifadhi wa mazungumzo wa AI Course Assistant';
$string['settings:audit_retention_days'] = 'Muda wa kuhifadhi rekodi za ukaguzi (siku)';
$string['settings:audit_retention_days_desc'] = 'Kazi ya kila siku iliyoratibiwa hufuta safu za ukaguzi zilizo kongwe kuliko hii. 0 huizima. Chaguo-msingi 365.';
$string['settings:conversation_retention_days'] = 'Muda wa kuhifadhi mazungumzo (siku)';
$string['settings:conversation_retention_days_desc'] = 'Kazi ya kila siku iliyoratibiwa hufuta mazungumzo ambayo muda wake wa mwisho wa kubadilishwa ni kongwe kuliko hii. 0 huizima. Chaguo-msingi 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Ncha za SSRF zinazoaminika';
$string['settings:ssrf_trusted_endpoints_desc'] = 'URL moja kwa mstari. Wapanguzi waliotajwa wanapita ukaguzi wa loopback / IP-binafsi / https-pekee katika mthibitishaji wa SSRF wa SOLA. Tumia hii tu kwa LLM zilizojihifadhi kwenye mtandao unaoudhibiti — kwa mfano <code>http://localhost:11434</code> kwa Ollama ya ndani, <code>http://10.0.0.5:8000</code> kwa pod ya vLLM kwenye VPC ile ile. Ulinganisho unalingana na scheme + host + port; njia yoyote inapuuzwa. Chaguo-msingi tupu (huzuia kila kitu cha ndani). Mistari inayoanza na <code>#</code> ni maoni.';
$string['task:learner_weekly_digest']    = 'Msaidizi wa Kozi wa AI - Muhtasari wa Wiki wa Mwanafunzi';
$string['learner_digest:subject']        = 'Wiki yako na {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Unataka barua pepe fupi ya kila wiki kuhusu cha kuzingatia ifuatayo?';
$string['next_best_action:get_started']           = 'Anza na {$a->title}. Nifungue na uulize "nisaidie na {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Anza na {$a->title}. Moduli "{$a->module}" inaifunika.';
$string['next_best_action:review']                = 'Pitia misingi ya {$a->title} — nifungue na uulize "nieleze {$a->title} kama mimi ni mpya".';
$string['next_best_action:review_with_module']    = 'Pitia misingi ya {$a->title} katika "{$a->module}", kisha nifungue na maswali.';
$string['next_best_action:practice']              = 'Jenga juu ya unachokuwa nacho kwenye {$a->title}. Nifungue na uulize "nipe mfano uliotatuliwa wa {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Fanya mazoezi ya {$a->title} pamoja na "{$a->module}". Nifungue kwa mifano iliyotatuliwa.';
$string['next_best_action:quiz']                  = 'Imarisha {$a->title} kwa jaribio la haraka. Nifungue na uchague "Nipime — inayobadilika".';
$string['next_best_action:quiz_with_module']      = 'Imarisha {$a->title} kwa jaribio la haraka. Moduli "{$a->module}" ndipo iliko.';
$string['next_best_action:empty_state']           = 'Unafanya vizuri sana kwenye kila lengo sasa hivi — hakuna cha kukumbushwa. Endelea hivyo.';
$string['next_best_action:header']                = 'Hapa kuna mambo {$a} ya kuzingatia ifuatavyo:';
$string['learner_digest:unsubscribe_done_title']  = 'Umejiondoa';
$string['learner_digest:unsubscribe_done_body']   = 'Imekamilika — hutapokea barua pepe za kila wiki kwa kozi hii kutoka {$a->product} tena. Unaweza kujiandikisha tena wakati wowote kutoka kwenye dirisha la mazungumzo katika kozi yako.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Kiungo cha kujiondoa hakitumiki tena';
$string['learner_digest:unsubscribe_invalid_body']  = 'Kiungo hiki cha kujiondoa kimeisha au ni kibovu. Unaweza kudhibiti mapendeleo ya barua pepe kutoka kwa mipangilio ya kozi yako.';
$string['active_learners:line']                   = '{$a} wengine wanasoma kozi hii sasa hivi.';
$string['active_learners:line_global']             = '{$a} wengine wanasoma sasa hivi.';
$string['settings:active_learners_scope']          = 'Wigo wa kionyeshi cha wanafunzi hai';
$string['settings:active_learners_scope_desc']     = 'Kama kionyeshi cha "wengine wanasoma sasa hivi" juu ya vianzilishi vya gumzo huhesabu wanafunzi katika kozi sawa tu au wanafunzi katika tovuti nzima. Chaguo-msingi <strong>kimataifa</strong>.';
$string['settings:active_learners_scope_global']   = 'Kimataifa (kozi yoyote)';
$string['settings:active_learners_scope_course']   = 'Kwa kozi tu';
$string['learner_digest:optin_yes']      = 'Ndiyo, nitumieni barua pepe ya wiki';
$string['learner_digest:optin_no']       = 'Hapana asante';
$string['learner_digest:optin_thanks']   = 'Sawa. Utapata muhtasari wa wiki kila Jumatatu.';
$string['learner_digest:optin_declined'] = 'Sawa. Hakuna barua pepe - nifungue tu unapotaka kuangalia.';
$string['settings:xai_proxy_url'] = 'URL ya proksi ya xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'URL ya wss ya umma ya huduma ya proksi ya SOLA xAI Realtime (kwa mfano wss://voice.example.com/xai-rt/rt). Hii ikiwekwa pamoja na siri ya JWT, sauti ya xAI hupita kwenye proksi na ufunguo mkuu wa API wa xAI haufiki kwenye kivinjari kamwe. Acha tupu ili kurudi kwenye muunganisho wa moja kwa moja (haipendekezwi kwa uzalishaji).';
$string['settings:xai_proxy_jwt_secret'] = 'Siri ya JWT ya proksi ya xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Siri ya pamoja ya HS256 inayotumika kutia saini tokeni za kipindi za muda mfupi za proksi ya xAI Realtime. Lazima ilingane na siri ya MOODLE_JWT_SECRET kwenye Cloudflare Worker. Ibadilishe mara kwa mara.';
$string['admin:vendor_dpa:title'] = '{$a} — hali ya DPA ya wachuuzi';
$string['admin:vendor_dpa:intro'] = 'Kujiondoa kwenye mafunzo, DPA, na sera ya uhifadhi kwa kila kiendeshi cha mtoa huduma wa AI. Tumia hii kuamua viendeshi vya kuwasha kwenye tovuti yako. Uelekezaji wa Daraja la 2 na zaidi unahitaji DPA iliyosainiwa na kujiondoa kwenye mafunzo kimkataba.';
$string['admin:vendor_dpa:maintenance_note'] = 'Jedwali hili linatunzwa katika classes/vendor_registry.php. Lisasishe wakati mabadiliko ya ToS ya mchuuzi yanapotokea.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Barua pepe ya Afisa wa Ulinzi wa Data';
$string['settings:dpo_email_desc'] = 'Barua pepe ya mawasiliano inayoonyeshwa kwenye ilani ya faragha ya wanafunzi chini ya "Mawasiliano". Acha tupu ili kuficha mstari. Usakinishaji wa chapa mpya unapaswa kuelekeza hii kwa DPO wao wenyewe.';
$string['settings:privacy_external_url'] = 'URL ya ukurasa wa faragha wa taasisi';
$string['settings:privacy_external_url_desc'] = 'Kiungo cha ukurasa wa faragha wa kiwango cha taasisi, unaoonyeshwa kwenye ilani ya faragha ya wanafunzi chini ya "Mawasiliano". Acha tupu ili kuficha mstari.';
$string['settings:privacy_notice_override'] = 'Ufutaji wa ilani ya faragha (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Ikiwekwa, HTML hii inabadilisha ilani ya faragha ya chaguo-msingi yenye chapa inayoonyeshwa kwenye /local/ai_course_assistant/privacy.php. Tumia hii kuingiza maandishi yaliyokaguliwa na timu ya Sheria kwa taasisi yako bila kuhariri msimbo. Acha tupu ili kutumia ilani chaguo-msingi, ambayo maandishi yake yanatokana na funguo saba za usanidi wa chapa.';
$string['objectives:title'] = 'Malengo ya kujifunza na umilisi';
$string['objectives:toggles_heading'] = 'Ufuatiliaji wa umilisi';
$string['objectives:toggle_master'] = 'Wezesha ufuatiliaji wa umilisi kwa kozi hii';
$string['objectives:toggle_chip'] = 'Onyesha kwa wanafunzi alama ya Umilisi wa Kujifunza';
$string['objectives:toggle_chip_help'] = 'Hiari. Ikiwa imezimwa, umilisi bado unaongoza msaidizi kimya kimya lakini wanafunzi hawaoni alama yoyote.';
$string['objectives:toggled'] = 'Mpangilio umesasishwa.';
$string['objectives:detected_heading'] = 'Yamegunduliwa malengo {$a->count} ya kujifunza kutoka {$a->source}.';
$string['objectives:source_competency'] = 'Umahiri wa Moodle';
$string['objectives:source_summary'] = 'muhtasari wa kozi';
$string['objectives:source_section'] = 'sehemu au maudhui ya ukurasa wa kwanza';
$string['objectives:source_page'] = 'ukurasa wa kozi';
$string['objectives:source_llm'] = 'uchimbuzi wa AI';
$string['objectives:source_manual'] = 'kuingiza kwa mkono';
$string['objectives:source_none'] = 'hakuna chanzo cha kiotomatiki';
$string['objectives:import_detected'] = 'Ingiza malengo haya yaliyogunduliwa';
$string['objectives:import_llm'] = 'Chimbua malengo kwa AI';
$string['objectives:llm_empty'] = 'Uchimbuzi wa AI haukurudisha malengo yoyote. Jaribu tena baadaye au yaingize kwa mkono.';
$string['objectives:imported'] = 'Yameingizwa malengo {$a}.';
$string['objectives:none_detected'] = 'Hakuna malengo ya kujifunza yaliyogunduliwa kiotomatiki. Yaingize kwa mkono hapa chini, au tumia uchimbuzi wa AI.';
$string['objectives:list_heading'] = 'Malengo ya sasa';
$string['objectives:col_code'] = 'Msimbo';
$string['objectives:col_title'] = 'Kichwa';
$string['objectives:col_source'] = 'Chanzo';
$string['objectives:col_actions'] = 'Vitendo';
$string['objectives:add_heading'] = 'Ongeza lengo';
$string['objectives:add_submit'] = 'Ongeza lengo';
$string['objectives:saved'] = 'Lengo limehifadhiwa.';
$string['objectives:deleted'] = 'Lengo limefutwa.';
$string['objectives:delete_confirm'] = 'Futa lengo hili na historia yote ya majaribio yake?';
$string['objectives:delete_all'] = 'Futa malengo yote ya kozi hii';
$string['objectives:delete_all_confirm'] = 'Futa kila lengo na historia yote ya majaribio kwa kozi hii? Haiwezi kutenduliwa.';
$string['objectives:deleted_all'] = 'Malengo yote ya kozi hii yamefutwa.';
$string['mastery:chip_aria'] = 'Hali ya umilisi wa kujifunza';
$string['mastery:popover_aria'] = 'Maelezo ya umilisi wa kujifunza';
$string['mastery:chip_label'] = '{$a->mastered} kati ya {$a->total} yamemilikiwa';
$string['mastery:status_mastered'] = 'yamemilikiwa';
$string['mastery:status_learning'] = 'yanaendelea';
$string['mastery:status_not_started'] = 'hayajaanza';
$string['mastery:popover_empty'] = 'Hakuna malengo ya kujifunza yaliyosanidiwa kwa kozi hii.';
$string['settings:mastery_heading'] = 'Ufuatiliaji wa umilisi';
$string['settings:mastery_heading_desc'] = 'Kipengele cha hiari kwa kila kozi ambacho huweka lebo kwenye majibu ya jaribio na zamu za mazungumzo ya msaidizi dhidi ya malengo ya kujifunza ya kozi, kisha hulisha muhtasari mfupi wa umilisi tena kwenye msukumo wa mfumo ili kuongoza uulizaji wa maswali. Kimya kwa chaguo-msingi: wanafunzi hawaoni chochote isipokuwa kichupo cha alama cha kozi kimewashwa.';
$string['settings:mastery_threshold'] = 'Kizingiti cha umilisi';
$string['settings:mastery_threshold_desc'] = 'Usahihi unaozunguka kwa kiwango hicho au juu ambapo lengo huchukuliwa kuwa limemilikiwa. 0.0 hadi 1.0. Chaguo-msingi 0.85.';
$string['settings:mastery_window'] = 'Dirisha la majaribio';
$string['settings:mastery_window_desc'] = 'Idadi ya majaribio ya hivi karibuni kwa kila lengo ya kupimwa katika usahihi unaozunguka. Chaguo-msingi 8.';
$string['settings:mastery_decay_enabled']        = 'Wezesha kupungua kwa umahiri';
$string['settings:mastery_decay_enabled_desc']   = 'Inapowashwa, alama za umahiri zinapungua kwa muda dhidi ya muhuri wa wakati wa jaribio la hivi karibuni. Lengo lililomilikiwa hapo awali linarudi "kujifunza" baada ya muda wa kutosha. Halishuki chini ya "kujifunza". <strong>Imezimwa kwa chaguo-msingi katika v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Nusu ya maisha ya kupungua kwa umahiri (siku)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Nusu ya maisha kwa siku. Alama hupigwa na 0.5 ^ (siku tangu jaribio la mwisho / nusu ya maisha). Chaguo-msingi 30. Inatumika tu wakati kupungua kumewashwa.';
$string['settings:mastery_classifier_model'] = 'Modeli ya kiainishi';
$string['settings:mastery_classifier_model_desc'] = 'Modeli inayotumika kuainisha zamu za msaidizi dhidi ya malengo. Acha tupu ili kurithi modeli chaguo-msingi ya mtoa huduma wa AI; vinginevyo bainisha modeli ya bei nafuu kama gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Uzito wa kiainishi';
$string['settings:mastery_classifier_weight_desc'] = 'Jaribio la mazungumzo lina uzito gani ikilinganishwa na jaribio la jaribio (1.0). Chaguo-msingi 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Kizingiti cha kujiamini cha kiainishi';
$string['settings:mastery_classifier_threshold_desc'] = 'Kujiamini kwa chini kabisa kunakohitajika kwa kiainishi ili kurekodi jaribio la mazungumzo. 0.0 hadi 1.0. Chaguo-msingi 0.7.';
$string['chat:mode_progress'] = 'Maendeleo';
$string['objectives:toggle_dashboard'] = 'Onyesha kwa wanafunzi kichupo cha dashibodi ya Maendeleo';
$string['objectives:toggle_dashboard_help'] = 'Hiari. Huongeza kichupo cha Maendeleo karibu na Mazungumzo / Sauti / Historia ndani ya wijeti. Kichupo huonyesha kwa wanafunzi malengo ambayo wamemiliki, yale yanayoendelea, na ambayo hawajaanza.';
$string['mastery:dashboard_title'] = 'Maendeleo yako ya kujifunza';
$string['mastery:dashboard_subtitle'] = 'Umilisi hupimwa kutokana na majibu yako ya jaribio na mazoezi ya mazungumzo. Endelea — kina kinashinda upana.';
$string['mastery:dashboard_refresh'] = 'Onyesha upya';
$string['mastery:section_mastered'] = 'Yamemilikiwa';
$string['mastery:section_learning'] = 'Yanaendelea';
$string['mastery:section_not_started'] = 'Hayajaanza bado';
$string['mastery:summary_label'] = 'Yamemilikiwa malengo {$a->mastered} kati ya {$a->total}';
$string['mastery:ask_about'] = 'Uliza kuhusu hili';
$string['mastery:celebrate'] = 'Umemilikia kila lengo la kozi hii. Kazi nzuri sana.';
$string['mastery:ask_template'] = 'Nisaidie kufanya mazoezi na kuongeza uelewa wangu wa lengo hili: {$a}.';
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
