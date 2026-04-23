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
