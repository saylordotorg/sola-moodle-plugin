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
 * Language strings for local_ai_course_assistant — Oromo (Afaan Oromoo).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Gargaaraa Barnoota AI';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Haasawa barsiisaa AI kan fayyadamaa fi koorsii hunda ol kaa\'a.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID fayyadamaa haasawa qabu.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID koorsii haasawni itti dhihaatu.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Mata-duree haasawa.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Yeroo haasawni uumame.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Yeroo haasawni dhumaa irra jijjiirrame.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Ergaalee dhuunfaa haasawa barsiisaa AI keessatti ol kaa\'a.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID fayyadamaa ergaa ergee.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID koorsii ergaan itti dhihaatu.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Gahee ergaa ergaa (fayyadamaa ykn gargaaraa).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Qabiyyee ergaa.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Lakkoofsa tokeenii ergaaf itti fayyadame.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Yeroo ergaan uumame.';
// Capabilities.
$string['ai_course_assistant:use'] = 'Haasawa barsiisaa AI fayyadami';
$string['ai_course_assistant:viewanalytics'] = 'Xiinxala haasawa barsiisaa AI ilaali';
$string['ai_course_assistant:manage'] = 'Qindaa\'ina haasawa barsiisaa AI bulchi (Gahee Bulchaa)';
// Settings.
$string['settings:enabled'] = 'Gargaaraa Barnoota AI Dandeessisi';
$string['settings:enabled_desc'] = 'Gargaaraa Barnoota AI fuula koorsii irratti dandeessisi ykn dhaabi.';
$string['settings:provider'] = 'Dhiyeessaa AI';
$string['settings:provider_desc'] = 'Dhiyeessaa AI guutuu haasawaaf fayyadamuu filii.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Naannoo)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Kan Itti Qindaa\'e (OpenAI waliin walsimu)';
$string['settings:apikey'] = 'Furtuu API';
$string['settings:apikey_desc'] = 'Furtuu API dhiyeessaa filatameef. Ollama'f hin barbaachisu.';
$string['settings:model'] = 'Maqaa Moodeelii';
$string['settings:model_desc'] = 'Moodeelii fayyadamuu. Durtiin dhiyeessaa irratti hundaa\'a (fkn. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL Bu\'uura API';
$string['settings:apibaseurl_desc'] = 'URL bu\'uura API. Dhiyeessaa hundaaf ofumaan guutama garuu jijjiiruu ni danda\'ama. Dhiyeessaa durtii'f duwwaa dhiisi.';
$string['settings:systemprompt'] = 'Caasima Gaaffii Sirna';
$string['settings:systemprompt_desc'] = 'Gaaffii sirna AI'f ergamu. Bakka-buutu fayyadami: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Ati barsiisaa AI gargaaraa koorsii "{{coursename}}" ti. Gaheen barataa {{userrole}} dha.

Mata-duree koorsii hammatame:
{{coursetopics}}

Barataa qabiyyee koorsii hubachuuf gargaari. Jajjabeessaa, ifa fi barnoota cimaa ta\'i.';
$string['settings:temperature'] = 'Ho\'a';
$string['settings:temperature_desc'] = 'Kallattii to\'ata. Gatiin gadi aanaa kan xiyyeeffate, kan ol aanaa kan uumamaa dha. Daangaa: 0.0 hanga 2.0.';
$string['settings:maxhistory'] = 'Seenaa Haasawa Guddaa';
$string['settings:maxhistory_desc'] = 'Lakkoofsa guddaa walfakkaataa ergaa gaaffii API keessatti hammatamu. Ergaaleen durii caccabsamu.';
$string['settings:avatar'] = 'Fakkii Haasawa';
$string['settings:avatar_desc'] = 'Fakkii iddoo gurgurtaa widget haasawaaf filii.';
$string['settings:avatar_saylor'] = 'Mallattoo Saylor Academy (Durtiis)';
$string['settings:position'] = 'Bakka Widget';
$string['settings:position_desc'] = 'Bakka widget haasawa fuula irratti.';
$string['settings:position_br'] = 'Gad-mirga';
$string['settings:position_bl'] = 'Gad-bitaa';
$string['settings:position_tr'] = 'Ol-mirga';
$string['settings:position_tl'] = 'Ol-bitaa';
$string['chat:settings'] = 'Qindaa\'ina pilaagiin';
$string['analytics:viewdashboard'] = 'Gabatee xiinxala ilaali';
// Course settings.
$string['coursesettings:title'] = 'Qindaa\'ina AI Koorsii';
$string['coursesettings:enabled'] = 'Irra-deebi\'uu koorsii dandeessisi';
$string['coursesettings:enabled_desc'] = 'Yoo dandeeffame, qindaa\'inni armaan gadii qindaa\'ina dhiyeessaa AI idila-addunyaa koorsii kana qofaaf irra-deebi\'a. Dirree duwwaa dhiisi akka gatii idila-addunyaa dhalatu.';
$string['coursesettings:using_global'] = 'Qindaa\'ina idila-addunyaa fayyadamaa jira';
$string['coursesettings:saved'] = 'Qindaa\'ina AI koorsii ol kaa\'ame.';
$string['coursesettings:global_settings_link'] = 'Qindaa\'ina AI idila-addunyaa';
// Language detection and preference.
$string['lang:switch'] = 'Eeyyee, jijjiiri';
$string['lang:dismiss'] = 'Galatoomi, hin barbaadu';
$string['lang:change'] = 'Afaan jijjiiri';
$string['lang:english'] = 'Ingliziffaa';
// Chat widget.
$string['chat:title'] = 'Barsiisaa AI';
$string['chat:placeholder'] = 'Gaaffii gaafadhu...';
$string['chat:send'] = 'Ergi';
$string['chat:close'] = 'Haasawa cufii';
$string['chat:open'] = 'Haasawa barsiisaa AI bani';
$string['chat:clear'] = 'Seenaa haqii';
$string['chat:clear_confirm'] = 'Seenaa haasawa koorsii kanaaf haquuf mirkaneessitaa?';
$string['chat:copy'] = 'Haasawa garagalchi';
$string['chat:copied'] = 'Haasawni clipboard'tti garagalfame';
$string['chat:copy_failed'] = 'Haasawa garagalfachuun kufee';
$string['chat:greeting'] = 'Akkam! Ani barsiisaa AI koorsii kanaa ti. Har\'a akkamitti siif gargaaruu danda\'a?';
$string['chat:thinking'] = 'Yaadaa jira...';
$string['chat:error'] = 'Dhiifama, wanti tokko dogoggoreera. Maaloo irra deebi\'i yaalii.';
$string['chat:error_auth'] = 'Dogoggora eenyummaa mirkaneessuu. Maaloo bulchaa kee quunnamii.';
$string['chat:error_ratelimit'] = 'Gaaffiin baay\'een dhufe. Maaloo yeroo xiqqoo eegii irra deebi\'i yaalii.';
$string['chat:error_unavailable'] = 'Tajaajilli AI yeroof argamu dhabame. Maaloo booda irra deebi\'i yaalii.';
$string['chat:error_notconfigured'] = 'Barsiisaan AI ammallee hin qindaa\'in. Maaloo bulchaa kee quunnamii.';
$string['chat:expand'] = 'Haasawa bal\'isi';
$string['chat:collapse'] = 'Haasawa cuqursi';
$string['chat:mic'] = 'Gaaffii kee dubbadhu';
$string['chat:mic_error'] = 'Dogoggora maayikiroofoonii. Maaloo hayyama browsera kee ilaalii.';
$string['chat:mic_unsupported'] = 'Galcha sagalee browser kana keessatti hin deeggarmne.';
$string['chat:newline_hint'] = 'Sarara haaraa'f Shift+Enter';
$string['chat:you'] = 'Ati';
$string['chat:assistant'] = 'Barsiisaa AI';
$string['chat:history_loaded'] = 'Haasawa duraanii fe\'ame.';
$string['chat:history_cleared'] = 'Seenaa haasawa haqqame.';
$string['chat:offtopic_warning'] = 'Gaaffiin kee koorsii kanaaf hin dhihaatu fakkaata. Maaloo mata-duree irratti xiyyeeffadhu akkan siif gargaaru!';
$string['chat:offtopic_ended'] = 'Fayyadamni barsiisaa AI kee yeroof daqiiqaa {$a} dhaabbatee jira sababiin haasawni mata-dureetii baay\'ee daqiiqaawwan dhabeefii. Maaloo yeroo kana qabiyyee koorsii kee ilaalachisuuf fayyadami, booda irra deebi\'i yaaluu ni dandeessa.';
$string['chat:offtopic_locked'] = 'Fayyadamni barsiisaa AI kee yeroof dhaabbatee jira. Daqiiqaa {$a} booda irra deebi\'i yaaluu ni dandeessa. Yeroo deebi\'tu gaaffilee koorsiidhaan wal qabatan irratti xiyyeeffadhu.';
$string['chat:escalated_to_support'] = 'Gaaffii kee guutummaatti deebisuu hin dandeenye, kanaaf tikeeta deeggarsa siif uume. Miseensa garee deeggarsa tokko hordofee haasawa ni godha. Lakkoofsa tikeeta kee: {$a}';
$string['chat:studyplan_intro'] = 'Karoora barumsaa koorsii kanaaf qopheessuuf siif gargaaruu ni danda\'a! Barumsaaf torbee tokko keessatti sa\'aatii meeqa ramaduu dandeessa naa himi, karoora qindaa\'e ijaarrachuuf si gargaara.';
// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ fi Deeggarsa';
$string['settings:faq_heading_desc'] = 'FAQ giddu-galaa fi walitti makamuu tikeeta deeggarsa Zendesk qindaa\'i.';
$string['settings:faq_content'] = 'Qabiyyee FAQ';
$string['settings:faq_content_desc'] = 'Galmeewwan FAQ galchi (sarara tokko tokko dhangii kanaan: Q: gaaffii | A: deebii). Kunneen AI'f gaaffilee deeggarsa waligalaa deebisuu kennamu.';
$string['settings:zendesk_enabled'] = 'Ol-fudhannaa Zendesk Dandeessisi';
$string['settings:zendesk_enabled_desc'] = 'AI gaaffii deeggarsa furuuf yeroo dadhabee, tikeeta Zendesk walitti makiinsa haasawa waliin ofumaan uumi.';
$string['settings:zendesk_subdomain'] = 'Subdomain Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomain Zendesk kee (fkn. "dhaabakee" kan mycompany.zendesk.com'f).';
$string['settings:zendesk_email'] = 'Imeelii API Zendesk';
$string['settings:zendesk_email_desc'] = 'Teessoo imeelii fayyadamaa Zendesk eenyummaa API mirkaneessuu'f (/-token dabalata waliin).';
$string['settings:zendesk_token'] = 'Tokeenii API Zendesk';
$string['settings:zendesk_token_desc'] = 'Tokeenii API eenyummaa Zendesk mirkaneessuu'f.';
// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Argannoo Mata-duree Ala';
$string['settings:offtopic_heading_desc'] = 'Haasawni mata-dureetii ala akkamitti qindeeffamu qindaa\'i.';
$string['settings:offtopic_enabled'] = 'Argannoo Mata-duree Ala Dandeessisi';
$string['settings:offtopic_enabled_desc'] = 'Haasawa mata-dureetii ala argatee deebi\'siisuuf AI'f ajaji.';
$string['settings:offtopic_max'] = 'Ergaalee Mata-duree Ala Guddoo';
$string['settings:offtopic_max_desc'] = 'Lakkoofsa ergaalee mata-dureetii ala walitti aanan tarkaanfiin fudhatamuu dura.';
$string['settings:offtopic_action'] = 'Tarkaanfii Mata-duree Ala';
$string['settings:offtopic_action_desc'] = 'Daangaan mata-duree ala ga\'amee booda maal godhamu.';
$string['settings:offtopic_action_warn'] = 'Akeekkachiisi fi deebi\'si';
$string['settings:offtopic_action_end'] = 'Fayyadama yeroof cufi';
$string['settings:offtopic_lockout_duration'] = 'Yeroo Cufaa (daqiiqaa)';
$string['settings:offtopic_lockout_duration_desc'] = 'Barataan barsiisaa AI daangaa mata-duree ala darbee booda fayyadama dhabuuf yeroo dheeraa (daqiiqaan). Durtiis: daqiiqaa 30.';
// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Karoora Barumsa fi Yaadachiisuuwwan';
$string['settings:studyplan_heading_desc'] = 'Amaloota karoora barumsa fi beeksisa yaadachiisuuwwan qindaa\'i.';
$string['settings:studyplan_enabled'] = 'Karoora Barumsa Dandeessisi';
$string['settings:studyplan_enabled_desc'] = 'Barsiisaa AI barattootaaf karoora barumsa dhuunfaa yeroo isaanii irratti hundaa\'e qopheessuuf hayyami.';
$string['settings:reminders_email_enabled'] = 'Yaadachiisuuwwan Imeelii Dandeessisi';
$string['settings:reminders_email_enabled_desc'] = 'Barattoota imeelii gidduu yaadachiisuuwwan barumsa filachuuf hayyami.';
$string['settings:reminders_whatsapp_enabled'] = 'Yaadachiisuuwwan WhatsApp Dandeessisi';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Barattoota WhatsApp gidduu yaadachiisuuwwan barumsa filachuuf hayyami (qindaa\'ina API WhatsApp barbaachisa).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Xiyyeeffannaa API ergaalee WhatsApp erguuf (fkn. Twilio, MessageBird). POST JSON qaama "to", "from", fi "body" dirreewwan qabu simachuu qaba.';
$string['settings:whatsapp_api_token'] = 'Tokeenii API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Tokeenii eenyummaa API WhatsApp mirkaneessuu'f.';
$string['settings:whatsapp_from_number'] = 'Lakkoofsa Ergaa WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Lakkofsa bilbilaa ergaalee WhatsApp erguuf (koodii biyyaa waliin, fkn. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Biyyoota WhatsApp Dhorkaman';
$string['settings:whatsapp_blocked_countries_desc'] = 'Koodota biyya ISO 3166-1 alpha-2 kan komaa-komaan addaan baafaman kan itti yaadachiisuuwwan WhatsApp seera naannoo irraa kan hanga hin eeyyamamneef (fkn. "CN,IR,KP").';
// Reminder messages.
$string['reminder:email_subject'] = 'Yaadachiisuuwwan Barumsa: {$a}';
$string['reminder:email_body'] = 'Akkam {$a->firstname},

Kun yaadachiisuu barumsa kee kan "{$a->coursename}" ti.

{$a->message}

Karoori barumsa kee koorsii kanaaf torbee tokko keessatti sa\'aatii {$a->hours_per_week} agarsiisa.

Hojii gaariin itti fufii!

---
Yaadachiisuuwwan kana argachuu dhaabuuf, asitti cuqaasi: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Yaadachiisuu Barumsa {$a->coursename}: {$a->message} (Bahuu: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Xiyyeeffannaa barumsa har\'aa: ';
// Unsubscribe page.
$string['unsubscribe:title'] = 'Yaadachiisuuwwan Barumsa Irraa Ba\'i';
$string['unsubscribe:success'] = 'Yaadachiisuuwwan barumsa koorsii kanaa irraa milkaa\'inaan baate.';
$string['unsubscribe:already'] = 'Yaadachiisuuwwan kana irraa duraan baatee jirta.';
$string['unsubscribe:invalid'] = 'Hidhata ba\'uu hin fayyanne ykn yeroo darbee.';
$string['unsubscribe:resubscribe'] = 'Yaada kee jijjiirtee? Haasawa barsiisaa AI gidduu yaadachiisuuwwan irra deebi\'ii dandeessa.';
// Scheduled task.
$string['task:send_reminders'] = 'Yaadachiisuuwwan barumsa barsiisaa AI ergi';
// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Karoora barumsa barattoota ol kaa\'a.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID fayyadamaa karoora barumsa qabu.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Koorsii karoori barumsa itti dhihaatu.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Sa\'aatii torbee tokko keessatti barataan barumsa karoorsee.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Bal\'insa karoora barumsa dhangii JSON keessatti.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Filannoo fi miseensummaa yaadachiisuuwwan barumsa ol kaa\'a.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID fayyadamaa yaadachiisuuwwaniif galmaawee.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Karaa yaadachiisuuwwanii (imeelii ykn whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Teessoo imeelii ykn lakkoofsa bilbilaa yaadachiisuuwwaniif.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Koodii biyyaa fayyadamaa seera hordofuu'f.';
// Analytics dashboard.
$string['analytics:title'] = 'Xiinxala Barsiisaa AI';
$string['analytics:overview'] = 'Cuunfaa';
$string['analytics:total_conversations'] = 'Haasawa waliigalaa';
$string['analytics:total_messages'] = 'Ergaalee waliigalaa';
$string['analytics:active_students'] = 'Barattoota hojjetaa';
$string['analytics:avg_messages_per_student'] = 'Ergaalee giddu-galeessa barataa tokkoof';
$string['analytics:offtopic_rate'] = 'Hamma mata-duree ala';
$string['analytics:escalation_count'] = 'Deeggarsa'tti ol-fudhame';
$string['analytics:studyplan_adoption'] = 'Barattoota karoora barumsa qaban';
$string['analytics:usage_trends'] = 'Tarsiimoo Fayyadama';
$string['analytics:daily_messages'] = 'Hamma ergaa guyyaa guyyaa';
$string['analytics:hotspots'] = 'Bakka Ho\'aa Koorsii';
$string['analytics:hotspots_desc'] = 'Kutaalee koorsii baay\'inaan gaaffii barattoota keessatti ka\'an. Lakkoofsi ol aanaan bakka barattoota deeggarsa barbaadan agarsiisuu danda\'a.';
$string['analytics:section'] = 'Kutaa';
$string['analytics:mention_count'] = 'Ka\'uuwwan';
$string['analytics:common_prompts'] = 'Caasima Gaaffii Waligalaa';
$string['analytics:common_prompts_desc'] = 'Caasima gaaffii irra deddeebiin barattoota irraa dhufan. Kunneen ilaali akka rakkoo sirnaawaa qabiyyee koorsii keessatti adda baaftu.';
$string['analytics:prompt_pattern'] = 'Caasima';
$string['analytics:frequency'] = 'Baay\'ina';
$string['analytics:recent_activity'] = 'Hojii Dhiyoo';
$string['analytics:no_data'] = 'Dandeettin xiinxalaa ammallee hin argamne. Barattoota barsiisaa AI fayyadamuu jalqabanii booda argama.';
$string['analytics:timerange'] = 'Daangaa yeroo';
$string['analytics:last_7_days'] = 'Guyyaa 7 darban';
$string['analytics:last_30_days'] = 'Guyyaa 30 darban';
$string['analytics:all_time'] = 'Yeroo hunda';
$string['analytics:export'] = 'Ragaa ergii';
$string['analytics:provider_comparison'] = 'Walbira Qabinsa Dhiyeessaa AI';
$string['analytics:provider_comparison_desc'] = 'Raawwii dhiyeessota AI koorsii kana keessatti fayyadamaman gidduu walbira qabi.';
$string['analytics:provider'] = 'Dhiyeessaa';
$string['analytics:response_count'] = 'Deebiwwan';
$string['analytics:avg_response_length'] = 'Dheerina deebii giddu-galeessa';
$string['analytics:total_tokens'] = 'Tokeenii waliigalaa';
$string['analytics:avg_tokens'] = 'Tokeenii giddu-galeessa / deebii';
// User settings.
$string['usersettings:title'] = 'Gargaaraa Barnoota AI - Ragaa Kee';
$string['usersettings:intro'] = 'Ragaa haasawa barsiisaa AI fi qindaa\'ina dhuunfaa kee bulchi';
$string['usersettings:privacy_info'] = 'Haasawwi kee barsiisaa AI waliin deeggarsa ittifufaa koorsii keessatti siif kennuuf ol kaa\'amu. Ragaa kana guutummaatti to\'atta ammo yeroo barbaaddetti haquu ni dandeessa.';
$string['usersettings:usage_stats'] = 'Statistiksii Fayyadama Kee';
$string['usersettings:total_messages'] = 'Ergaalee waliigalaa';
$string['usersettings:total_conversations'] = 'Haasawwaan';
$string['usersettings:messages'] = 'Ergaalee';
$string['usersettings:last_activity'] = 'Hojii dhumaa';
$string['usersettings:delete_course_data'] = 'Ragaa koorsii haqii';
$string['usersettings:no_data'] = 'Barsiisaa AI ammallee hin fayyadamne. Ragaa fayyadama kee asitti argama yeroo haasawuu jalqabdu.';
$string['usersettings:delete_all_title'] = 'Ragaa Kee Hunda Haqii';
$string['usersettings:delete_all_warning'] = 'Kun haasawwi barsiisaa AI kee koorsii hunda keessaa dhumaan ni haqama. Tarkaanfiin kun deebi\'uu hin danda\'u.';
$string['usersettings:delete_all_button'] = 'Ragaa Koo Hunda Haqii';
$string['usersettings:confirm_delete_course'] = 'Ragaa barsiisaa AI kee koorsii "{$a}" keessaa dhumaan haquuf mirkaneessitaa? Tarkaanfiin kun deebi\'uu hin danda\'u.';
$string['usersettings:confirm_delete_all'] = 'Ragaa barsiisaa AI kee koorsii HUNDA keessaa dhumaan haquuf mirkaneessitaa? Tarkaanfiin kun deebi\'uu hin danda\'u.';
$string['usersettings:data_deleted'] = 'Ragaa kee haqqame.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Akkam, {$a}! Ani SOLA dha, gargaaraa barumsaa onlaayinii Saylor keessan.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA bani';
$string['chat:change_avatar'] = 'Fakkii jijjiiri';

$string['chat:quiz'] = 'Qormaata shaakala fudhachi';
$string['chat:quiz_setup_title'] = 'Qormaata Shaakala';
$string['chat:quiz_questions'] = 'Lakkoofsa gaaffiilee';
$string['chat:quiz_topic'] = 'Mata-duree';
$string['chat:quiz_topic_guided'] = 'AI-kan qajeelche (bu\'uura guddina keetiin)';
$string['chat:quiz_topic_default'] = 'Qabiyyee koorsii ammaa';
$string['chat:quiz_topic_custom'] = 'Mata-duree kan itti qindaa\'e…';
$string['chat:quiz_custom_placeholder'] = 'Mata-duree ykn gaaffii galchi...';
$string['chat:quiz_start'] = 'Qormaata Jalqabi';
$string['chat:quiz_cancel'] = 'Haquu';
$string['chat:quiz_loading'] = 'Qormaata uumaa jira…';
$string['chat:quiz_error'] = 'Qormaata uumuu hin dandeenye. Maaloo irra deebi\'i yaalii.';
$string['chat:quiz_correct'] = 'Sirrii!';
$string['chat:quiz_wrong'] = 'Dogoggoraa.';
$string['chat:quiz_next'] = 'Gaaffii itti aanu';
$string['chat:quiz_finish'] = 'Bu\'aa ilaali';
$string['chat:quiz_score'] = 'Qormaatni xumurame! {$a->total} irraa {$a->score} argatte.';
$string['chat:quiz_summary'] = 'Qormaata shaakala gaaffii {$a->total} kan "{$a->topic}" irratti mara xumuree {$a->score}/{$a->total} argadhe.';
$string['chat:quiz_topic_objectives'] = 'Kaayyoo Barumsaa';
$string['chat:quiz_topic_modules'] = 'Mata-duree Koorsii';
$string['chat:quiz_subtopic_select'] = 'Waan murtaa\'e filii…';
$string['chat:quiz_topic_sections'] = 'Kutaalee Koorsii';
$string['chat:quiz_score_great'] = 'Hojii gaarii! Dhugumaan waa\'ee kana beekta.';
$string['chat:quiz_score_good'] = 'Carraaqii gaarii! Hubannoo kee cimsuuf irra deebi\'ii ilaaluu itti fufii.';
$string['chat:quiz_score_practice'] = 'Itti fufii shaakalee — qabiyyee koorsii wal qabate ilaalii, booda qormaata irra deebi\'i.';
$string['chat:quiz_review_heading'] = 'Irra deebi\'ii ilaaluu';
$string['chat:quiz_retake'] = 'Qormaata Irra Deebi\'i Fudhachi';
$string['chat:quiz_exit'] = 'Qormaata Irraa Ba\'i';
$string['chat:quiz_your_answer'] = 'Deebii kee';
$string['chat:quiz_correct_answer'] = 'Deebii sirrii';

$string['chat:starters_label'] = 'Jalqaba haasawaa';
$string['chat:starter_quiz'] = 'Na Qori';
$string['chat:starter_explain'] = 'Kana Ibsi';
$string['chat:starter_key_concepts'] = 'Yaadota Ijoo';
$string['chat:starter_study_plan'] = 'Karoora Barumsa';
$string['chat:starter_help_me'] = 'Gargaarsa AI';
$string['chat:starter_ell_practice'] = 'Dubbachuu Shaakalee';
$string['chat:starter_ell_pronunciation'] = 'Dubbifama ELL';
$string['chat:starter_ai_coach'] = 'Leenjisaa AI';
$string['chat:starter_speak'] = 'Jalqaba dubbadhu';

$string['chat:reset'] = 'Irra deebi\'ii jalqabi';

$string['chat:topic_picker_title'] = 'Maal irratti xiyyeeffachuu barbaadda?';
$string['chat:topic_picker_title_help'] = 'Maal irratti gargaarsa barbaadda?';
$string['chat:topic_picker_title_explain'] = 'Maal akkan siif ibsu barbaadda?';
$string['chat:topic_picker_title_study'] = 'Kutaa maal irratti xiyyeeffachuu barbaadda?';
$string['chat:topic_start'] = 'Itti fufii';

$string['chat:fullscreen'] = 'Fuula guutuu';
$string['chat:exitfullscreen'] = 'Fuula guutuu irraa ba\'i';

$string['chat:language'] = 'Afaan jijjiiri';
$string['chat:settings_panel'] = 'Qindaa\'ina';
$string['chat:settings_language'] = 'Afaan';
$string['chat:settings_avatar'] = 'Fakkii';
$string['chat:settings_voice'] = 'Sagalee';
$string['chat:settings_voice_admin'] = 'Qindaa\'ina sagalee paanaalii bulchaa saayitii keessatti bulchama.';

$string['chat:voice_mode'] = 'Haala sagalee';
$string['chat:voice_end'] = 'Yaa\'ii sagalee xuuri';
$string['chat:voice_connecting'] = 'Walitti hidhamaa jira...';
$string['chat:voice_listening'] = 'Dhagahaa jira...';
$string['chat:voice_speaking'] = 'SOLA dubbataa jira...';
$string['chat:voice_idle'] = 'Qophii dha';
$string['chat:voice_error'] = 'Walitti hidhamuu sagalee kufee. Maaloo qindaa\'ina kee ilaalii.';
$string['chat:quiz_locked'] = 'SOLA qormaata yeroo dhaabbatee jira akka haqiinsaa barnootaa deeggaruuf. Carraa gaarii!';
