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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'Mtoa Huduma wa AI';
$string['settings:provider_desc'] = 'Chagua mtoa huduma wa AI wa kutumia kwa ukamilishaji wa mazungumzo.';
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
$string['chat:clear'] = 'Futa historia';
$string['chat:clear_confirm'] = 'Je, una uhakika unataka kufuta historia yako ya mazungumzo kwa kozi hii?';
$string['chat:copy'] = 'Nakili mazungumzo';
$string['chat:copied'] = 'Mazungumzo yamenakiliwa kwenye ubao wa kunakili';
$string['chat:copy_failed'] = 'Imeshindwa kunakili mazungumzo';
$string['chat:thinking'] = 'Ninafikiria...';
$string['chat:error'] = 'Samahani, kuna kitu kimeenda vibaya. Tafadhali jaribu tena.';
$string['chat:error_auth'] = 'Hitilafu ya uthibitishaji. Tafadhali wasiliana na msimamizi wako.';
$string['chat:error_ratelimit'] = 'Maombi mengi sana. Tafadhali subiri kidogo kisha jaribu tena.';
$string['chat:error_unavailable'] = 'Huduma ya AI haipatikani kwa sasa. Tafadhali jaribu tena baadaye.';
$string['chat:error_notconfigured'] = 'Mshauri wa AI hajasakinishwa bado. Tafadhali wasiliana na msimamizi wako.';
$string['chat:expand'] = 'Panua mazungumzo';
$string['chat:collapse'] = 'Pinga mazungumzo';
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

$string['chat:greeting'] = 'Habari, {$a}! Mimi ni SOLA, msaidizi wako wa kujifunza mtandaoni wa {INSTITUTION}.';
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
$string['task:send_inactivity_reminders'] = 'Tuma barua pepe za ukumbusho wa kila wiki kwa kutokuwa na shughuli';
$string['messageprovider:study_notes'] = 'Maelezo ya kipindi cha masomo';
$string['task:send_inactivity_reminders'] = 'Tuma barua pepe za ukumbusho wa kutofanya kazi kila wiki';
$string['messageprovider:study_notes'] = 'Maelezo ya kipindi cha masomo';
