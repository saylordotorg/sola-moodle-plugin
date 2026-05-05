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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Gargaaraa Barnoota AI';
$string['attachment:attach'] = 'Maxxansi';
$string['attachment:attach_image_or_pdf'] = 'Suuraa ykn PDF maxxansi';
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
$string['settings:default_course_mode'] = 'Waaltagaan kooreerra haaraa';
$string['settings:default_course_mode_desc'] = 'Filannoon kooreerra-tokko hin godhamne yeroo, SOLA koorsii irratti akka mul\'atu to\'ata. Dhaabbiileen haaraan durtiidhaan "Durtiidhaan dhaamee" irratti hiikaa jiru, kunis bulchitootaaf fuula Analytics ykn fuula Course AI Settings irraa kaasaan koorsii-koorsi filachuuf.';
$string['settings:default_course_mode_per_course'] = 'Durtiidhaan dhaamee (koorsii tokkoon tokkoon banii)';
$string['settings:default_course_mode_all'] = 'Koorsii hunda irratti bananii jira';
$string['settings:auto_open'] = 'Daawwannaa jalqabaa irratti ofumaan banuu';
$string['settings:auto_open_desc'] = 'Yeroo dandeessifame, kuusaan SOLA yeroo barataan tokko koorsii hunda irra yeroo jalqabaaf qaqqabu ofumaan bana. Fe\'iinsi fuula itti aanaan koorsii walfakkaataa keessatti kuusaa irra hin banu — haalli barbaadame koorsii tokkoon tokkoon barataa biraawuzariin keessatti localStorage tiin to\'atama. Deeskitooppii fi mobaayilii irratti hojiirra oola. Koorsii tokkoon tokkoon fuula Course AI Settings irraa jijjiiramuu danda\'a.';
$string['settings:comparison_providers'] = 'Kennitoota walbira (LLM filannoo)';
$string['settings:comparison_providers_desc'] = 'Kennitoota AI dabalataa gara filannoo LLM widget keessatti dabaluun bulchiinsonni akka deebii kennitoota gidduu walbiran. Tarree gubbaatti dabaluuf gabatee armaan gadii fayyadami. Gulantaan ho\'aa filannoo dha (ho\'aa addunyaa fayyadamuuf duwwaa dhiisi). Caasaa kuusame: provider_id|api_key|model1,model2|temperature. Kennitichi jalqabaa olitti qindaa\'e ofumaan of-dabalama. Bulchiinsonni dandeettii bulchuu qaban qofti filannoo argu; barattoonni gonkumaa hin argan. Provider IDs sirrii: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Default Dhiyeessaa AI';
$string['settings:provider_desc'] = 'Dhiheessaa AI marii xumuruuf filadhu. Kadhannoo qindaa\'ina AI ijaarame Moodle keessatti Site admin > AI irraan akka qajeelfamu "Moodle AI (core_ai subsystem)" filadhu; haala kana keessatti API key, moodela fi URL buuura armaan gadii hin itti gaafatamu. Streaming, itti fayyadama meeshaa fi prompt caching core_ai irraan hin argaman — deebiin akka qaama tokkootti kennama. Muuxannoo barataa gaarii argachuuf dhiheessaa kallattii fayyadami.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Naannoo)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Kan Itti Qindaa\'e (OpenAI waliin walsimu)';
$string['settings:apikey'] = 'Furtuu API';
$string['settings:apikey_desc'] = 'Furtuu API dhiyeessaa filatameef. Ollama\'f hin barbaachisu.';
$string['settings:model'] = 'Maqaa Moodeelii';
$string['settings:model_desc'] = 'Moodeelii fayyadamuu. Durtiin dhiyeessaa irratti hundaa\'a (fkn. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL Bu\'uura API';
$string['settings:apibaseurl_desc'] = 'URL bu\'uura API. Dhiyeessaa hundaaf ofumaan guutama garuu jijjiiruu ni danda\'ama. Dhiyeessaa durtii\'f duwwaa dhiisi.';
$string['settings:systemprompt'] = 'Caasima Gaaffii Sirna';
$string['settings:systemprompt_desc'] = 'Gaaffii sirna AI\'f ergamu. Bakka-buutu fayyadami: {{coursename}}, {{userrole}}, {{coursetopics}}.';
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
$string['settings:avatar_saylor'] = 'Mallattoo {$a} (Durtiis)';
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
$string['coursesettings:sola_enabled'] = 'SOLA kooreerra kana irratti';
$string['coursesettings:sola_enabled_toggle'] = 'Widjet SOLA kooreerra kana irratti agarsiisi';
$string['coursesettings:sola_enabled_desc'] = 'Widjet marii SOLA kooreerra kana irratti mul\'atuu dhabuu to\'ata. Durtiin sayitii-guutuu qindaa\'ina pilaginii jalatti General > Default for new courses keessatti qindaa\'a.';
$string['coursesettings:using_global'] = 'Qindaa\'ina idila-addunyaa fayyadamaa jira';
$string['coursesettings:saved'] = 'Qindaa\'ina AI koorsii ol kaa\'ame.';
$string['coursesettings:global_settings_link'] = 'Qindaa\'ina AI idila-addunyaa';
// Language detection and preference.
$string['lang:switch'] = 'Eeyyee, jijjiiri';
$string['lang:dismiss'] = 'Galatoomi, hin barbaadu';
$string['lang:change'] = 'Afaan jijjiiri';
$string['lang:english'] = 'Ingliziffaa';
// Chat widget.
$string['chat:placeholder'] = 'Gaaffii gaafadhu...';
$string['chat:send'] = 'Ergi';
$string['chat:close'] = 'Haasawa cufii';
$string['chat:clear'] = 'Clear screen';
$string['chat:clear_confirm'] = 'Clear the visible messages? Your full chat history stays saved and can be reloaded by reopening the widget.';
$string['chat:copy'] = 'Haasawa garagalchi';
$string['chat:copied'] = 'Haasawni clipboard\'tti garagalfame';
$string['chat:copy_failed'] = 'Haasawa garagalfachuun kufee';
$string['chat:thinking'] = 'Yaadaa jira...';
$string['chat:error'] = 'Dhiifama, wanti tokko dogoggoreera. Maaloo irra deebi\'i yaalii.';
$string['chat:error_auth'] = 'Dogoggora eenyummaa mirkaneessuu. Maaloo bulchaa kee quunnamii.';
$string['chat:error_ratelimit'] = 'Gaaffiin baay\'een dhufe. Maaloo yeroo xiqqoo eegii irra deebi\'i yaalii.';
$string['chat:error_unavailable'] = 'Tajaajilli AI yeroof argamu dhabame. Maaloo booda irra deebi\'i yaalii.';
$string['chat:error_notconfigured'] = 'Barsiisaan AI ammallee hin qindaa\'in. Maaloo bulchaa kee quunnamii.';
$string['chat:mic'] = 'Gaaffii kee dubbadhu';
$string['chat:mic_error'] = 'Dogoggora maayikiroofoonii. Maaloo hayyama browsera kee ilaalii.';
$string['chat:mic_unsupported'] = 'Galcha sagalee browser kana keessatti hin deeggarmne.';
$string['chat:newline_hint'] = 'Sarara haaraa\'f Shift+Enter';
$string['chat:you'] = 'Ati';
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
$string['settings:faq_content_desc'] = 'Galmeewwan FAQ galchi (sarara tokko tokko dhangii kanaan: Q: gaaffii | A: deebii). Kunneen AI\'f gaaffilee deeggarsa waligalaa deebisuu kennamu.';
$string['settings:zendesk_enabled'] = 'Ol-fudhannaa Zendesk Dandeessisi';
$string['settings:zendesk_enabled_desc'] = 'AI gaaffii deeggarsa furuuf yeroo dadhabee, tikeeta Zendesk walitti makiinsa haasawa waliin ofumaan uumi.';
$string['settings:zendesk_subdomain'] = 'Subdomain Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomain Zendesk kee (fkn. "dhaabakee" kan mycompany.zendesk.com\'f).';
$string['settings:zendesk_email'] = 'Imeelii API Zendesk';
$string['settings:zendesk_email_desc'] = 'Teessoo imeelii fayyadamaa Zendesk eenyummaa API mirkaneessuu\'f (/-token dabalata waliin).';
$string['settings:zendesk_token'] = 'Tokeenii API Zendesk';
$string['settings:zendesk_token_desc'] = 'Tokeenii API eenyummaa Zendesk mirkaneessuu\'f.';
// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Argannoo Mata-duree Ala';
$string['settings:offtopic_heading_desc'] = 'Haasawni mata-dureetii ala akkamitti qindeeffamu qindaa\'i.';
$string['settings:offtopic_enabled'] = 'Argannoo Mata-duree Ala Dandeessisi';
$string['settings:offtopic_enabled_desc'] = 'Haasawa mata-dureetii ala argatee deebi\'siisuuf AI\'f ajaji.';
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
$string['settings:whatsapp_api_token_desc'] = 'Tokeenii eenyummaa API WhatsApp mirkaneessuu\'f.';
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
$string['reminder:email_body_no_hours'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['reminder:email_body_with_prefs'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Your study plan: {$a->hours_per_week} hours per week, on {$a->preferred_days} ({$a->preferred_time}).

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['studytip:pomodoro']            = 'Try the Pomodoro technique: 25 minutes of focused study, then a 5-minute break.';
$string['studytip:review_notes']        = 'Review your notes from the last session before starting new material.';
$string['studytip:active_recall']       = 'Test yourself on what you learned recently — active recall strengthens memory.';
$string['studytip:summarise']           = 'Take a few minutes to summarise what you have learned in your own words.';
$string['studytip:mix_modes']           = 'Mix different types of study: reading, practice problems, and teaching concepts to others.';
$string['studytip:tackle_hard_first']   = 'Start with the most challenging topic while your energy is highest.';
$string['studytip:connect_concepts']    = 'Create connections between new concepts and what you already know.';
$string['studytip:short_breaks']        = 'Take short breaks to stay focused — a refreshed mind learns better.';
$string['studyplan:hours_out_of_range'] = 'Hours per week must be between {$a->min} and {$a->max}. Got {$a->got}. Please tell SOLA a different number and it will save your plan.';
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
$string['task:run_meta_ai_query'] = 'Gaaffii xiinxala Learning Radar karoorfame hojjedhu';
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
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Koodii biyyaa fayyadamaa seera hordofuu\'f.';
// Analytics dashboard.
$string['analytics:title'] = 'Xiinxala Barsiisaa AI';
$string['analytics:overview'] = 'Cuunfaa';
$string['analytics:total_conversations'] = 'Haasawa waliigalaa';
$string['analytics:total_messages'] = 'Ergaalee waliigalaa';
$string['analytics:active_students'] = 'Barattoota hojjetaa';
$string['analytics:avg_messages_per_student'] = 'Ergaalee giddu-galeessa barataa tokkoof';
$string['analytics:offtopic_rate'] = 'Hamma mata-duree ala';
$string['analytics:escalation_count'] = 'Deeggarsa\'tti ol-fudhame';
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

$string['chat:greeting'] = 'Akkam, {$a}! Ani SOLA dha. Har\'a akkamittin si gargaaruu danda\'a?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA bani';
$string['chat:change_avatar'] = 'Fakkii jijjiiri';

$string['chat:quiz'] = 'Qormaata shaakala fudhachi';
$string['chat:quiz_setup_title'] = 'Qormaata Shaakala';
$string['chat:quiz_questions'] = 'Lakkoofsa gaaffiilee';
$string['chat:quiz_topic'] = 'Mata-duree';
$string['chat:quiz_topic_guided'] = 'AI-kan qajeelche (bu\'uura guddina keetiin)';
$string['chat:quiz_topic_adaptive']      = 'Madaqa — dadhabbii kiyya irratti xiyyeeffadhu';
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
$string['chat:starter_quiz'] = 'Kana Na Qori';
$string['chat:starter_explain'] = 'Kana Ibsi';
$string['chat:starter_key_concepts'] = 'Yaadota Ijoo';
$string['chat:starter_study_plan'] = 'Karoora Barumsa';
$string['chat:starter_help_me'] = 'Gargaarsa AI';
$string['chat:starter_ai_project_coach'] = 'Leenjisaa Pirojektii AI';
$string['chat:starter_ell_practice'] = 'Shaakala Haasawaa';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Yaadannoo';

// History panel.
$string['chat:history_title'] = 'Yaadannoo fi Seenaa Dubbii';
$string['task:send_inactivity_reminders'] = 'Ergaa yaadannoo torban torbaniin socho\'ummaa dhabuu erguu';
$string['messageprovider:study_notes'] = 'Yaadannoo yeroo qo\'annoo';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Dhiyeessuu Fuula Duraa';
$string['settings:cdn_heading_desc'] = 'Qabeenya fuula duraa SOLA (JS/CSS) CDN alaa irraa dhiyeessuu siistama faayilii Moodle irra. Kun sirrna fuula duraa akka fooyya plugin malee ta\'u dandeessisa. Faayilii plugin naannoo fayyadamuuf CDN URL duwwaa dhiisaa.';
$string['settings:cdn_url'] = 'CDN URL Bu\'uuraa';
$string['settings:cdn_url_desc'] = 'URL bu\'uuraa bakka sola.min.js fi sola.min.css itti keessummeeffaman. Fakkeenya: https://your-org.github.io/sola-cdn. Faayilii plugin naannoo fayyadamuuf duwwaa dhiisaa.';
$string['settings:cdn_version'] = 'Gosa Qabeenya CDN';
$string['settings:cdn_version_desc'] = 'Tarree gosa CDN URLs irratti dabalamu cache busting tiif. CDN deploy hundaa booda haaromsi (fkn. 3.2.4 ykn commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Itti fayyadama waliigalaa';
$string['analytics:tab_bycourse'] = 'Koorsii koorsiin';
$string['analytics:tab_comparison'] = 'AI fi hin fayyadamne';
$string['analytics:tab_byunit'] = 'Kutaa kutaan';
$string['analytics:tab_usagetypes'] = 'Gosa itti fayyadama';
$string['analytics:tab_themes'] = 'Mata duree';
$string['analytics:tab_feedback'] = 'Yaada AI';
$string['analytics:total_students'] = 'Barattoota waliigalaa';
$string['analytics:active_users'] = 'Fayyadamtoota AI hojiirra';
$string['analytics:msgs_per_student'] = 'Ergaa barataa tokkotti';
$string['analytics:avg_session'] = 'Turtii waltajjii giddugaleessa';
$string['analytics:return_rate'] = 'Hamma deebi\'uu';
$string['analytics:total_sessions'] = 'Waltajjii waliigalaa';
$string['analytics:thumbs_up'] = 'Quba ol';
$string['analytics:thumbs_down'] = 'Quba gad';
$string['analytics:hallucination_flags'] = 'Mallattoo dogoggora';
$string['analytics:msgs_to_resolution'] = 'Ergaa hanga furmaataatti';
$string['analytics:helpful'] = 'Gargaarsa qaba';
$string['analytics:not_helpful'] = 'Gargaarsa hin qabu';
$string['analytics:flag_hallucination'] = 'Deebiin kun odeeffannoo sirrii hin taane qaba';
$string['analytics:submit_rating'] = 'Ergi';
$string['analytics:thanks_feedback'] = 'Yaada keessaniif galatoomaa';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_together'] = 'Together AI (Llama 3.1 8B/70B/405B Turbo, Mistral, Qwen)';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Fuula kana ibsi';
$string['chat:starter_ask_anything'] = 'Waan tokko gaafadhu';
$string['chat:starter_review_practice'] = 'Irra deebi\'ii shaakali';
$string['chat:history_saved_subtitle'] = 'Deebiiwwan kuufaman koorsii kana keessatti meeshaa kana irra turu.';
$string['chat:history_saved_empty'] = 'Deebii AI asitti argu kuufadhu.';
$string['chat:history_views_label'] = 'Ilaalcha seenaa';
$string['chat:history_view_saved'] = 'Kuufame';
$string['chat:history_view_recent'] = 'Seenaa';
$string['chat:debug_refresh'] = 'Haaromsi';
$string['chat:debug_copy_all'] = 'Hunda garagalchi';
$string['chat:debug_close'] = 'Cufi';
$string['chat:language_switch'] = 'Afaan jijjiiri';
$string['chat:language_dismiss'] = 'Yaada afaanii hambisi';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Dhiyeessaa LLM filadhu';
$string['chat:llm_model_label'] = 'Moodela';
$string['chat:llm_model_select'] = 'Moodela LLM filadhu';
$string['chat:footer_usertesting'] = 'Qorannoo ittifayyadamummaa';
$string['chat:footer_feedback'] = 'Yaada';
$string['chat:voice_panel_title']       = 'Talk with {$a}';

// Additional translated strings.
$string['chat:debug_context'] = 'Sirreessaa haala';
$string['chat:debug_context_browser'] = 'Suura biraawzarii';
$string['chat:debug_context_copy'] = 'Garagalchi';
$string['chat:debug_context_prompt'] = 'Deebii sarvaraa';
$string['chat:debug_context_request'] = 'Gaaffii SSE dhumaa';
$string['chat:debug_context_toggle'] = 'Sakatta qorannoo';
$string['chat:history_empty'] = 'Haasawa hin jiru.';
$string['chat:history_refresh'] = 'Haaromsi';
$string['chat:history_subtitle'] = 'Ergaalee kee dhiyeenya.';
$string['chat:starter_explain_prompt'] = 'Yaada barbaachisaa ibsi?';
$string['chat:starter_help_lesson'] = 'Kana ibsi';
$string['chat:starter_help_lesson_prompt'] = 'Barnoota hubachuu na gargaari. Yaadota ijoo cuunfi.';
$string['chat:starter_prompt_coach'] = 'Leenjisaa AI';
$string['chat:starter_quick_study'] = 'Qo\'annoo ariifataa';
$string['chat:starter_study_plan_prompt'] = 'Qo\'annoo karoorsuu barbaada. Gaafadhu: (1) kaayyoo, (2) yeroo. Karoora haaromsi.';
$string['chat:voice_copy'] = 'Gargaaraa waliin haasawa sagalee.';
$string['chat:voice_ready'] = 'Qophii';
$string['chat:voice_start'] = 'Jalqabi';
$string['chat:voice_title'] = 'SOLA waliin dubbadhu';
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

// v5.2.0: per-quiz SOLA assistance level controls.
$string['quizsettings:title'] = 'Quiz Assistance Levels';
$string['quizsettings:desc'] = 'Choose how much help SOLA gives on each quiz. "Default" uses the legacy rule: ungraded quizzes get full help, graded quizzes hide the widget. Use "Coach" to keep SOLA available on a graded quiz but block direct answers.';
$string['quizsettings:colquiz'] = 'Quiz';
$string['quizsettings:colgrade'] = 'Max grade';
$string['quizsettings:collevel'] = 'Assistance level';
$string['quizsettings:coleffective'] = 'Effective';
$string['quizsettings:level_default'] = 'Default (by grade)';
$string['quizsettings:level_full'] = 'Full help';
$string['quizsettings:level_coach'] = 'Coach (Socratic only)';
$string['quizsettings:level_hidden'] = 'Hidden';
$string['quizsettings:ungraded'] = 'Ungraded';
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
$string['mobile_chip_concepts'] = 'Yaadota ijoo';
$string['mobile_chip_quiz'] = 'Qormaata';
$string['mobile_chip_studyplan'] = 'Karoora qo\'annoo';
$string['mobile_clear'] = 'Seenaa haquu';
$string['mobile_disabled'] = 'SOLA koorsii kanaaf hin argamu.';
$string['mobile_placeholder'] = 'Gaaffii gaafadhu...';
$string['mobile_welcome'] = 'Akkam, {$a}!';
$string['mobile_welcome_sub'] = 'Ani SOLA, gargaaraa barnoota keessani. Akkamittan gargaaruu danda\'a?';
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
$string['rubric:done'] = 'Xumure';
$string['rubric:encourage_high'] = 'Hojjii gaarii! Itti fufi!';
$string['rubric:encourage_low'] = 'Jalqabbii gaarii! Shaakalli idilee si gargaara.';
$string['rubric:encourage_mid'] = 'Carraaqii gaarii! Itti fufi.';
$string['rubric:overall'] = 'Waliigala';
$string['rubric:practice_again'] = 'Irra deebi\'i shaakalii';
$string['rubric:score_title_conversation'] = 'Qabxii shaakala haasawaa';
$string['rubric:score_title_pronunciation'] = 'Qabxii shaakala dubbii';
$string['rubric:scoring'] = 'Madaallii...';
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
$string['usersettings:download'] = 'Daataa {$a} koo buufadhu';
$string['usersettings:download_help'] = 'Galmee {$a} hundi herrega keetiin hidhame iddoo waliigaltetti JSON waliigalaa keessaa buufadhu: marii, ergaa, sadarkeessuu, karoora qo\'annoo, yaadannoo, qabxiilee shaakalaa, deebii saakkanniisaa, profayilii, fi galmeewwan auudiitii.';
$string['usersettings:privacy_notice_link'] = 'Beeksisa dhuunfaa {$a} dubbisi';
$string['privacy:title'] = 'Beeksisa Iccitii {$a}';
$string['admin:user_data:title'] = '{$a} — Daataa barataa baasuu fi haquu';
$string['admin:user_data:intro'] = 'Karaa hojii gaaffii GDPR Keewwata 15 (argamsiisuu) yookaan Keewwata 17 (haquu). Barataa Moodle user id isaatiin barbaadi, sarara plagiinii kun isaaf qabu mil\'adhu, ergasiis baasi yookaan haqi.';
$string['admin:user_data:search_label'] = 'Moodle user id';
$string['admin:user_data:lookup'] = 'Barbaadi';
$string['admin:user_data:not_found'] = 'Id sanaan fayyadamaan tokko illee hin argamne.';
$string['admin:user_data:download'] = 'Daataa barataa hunda akka JSON-itti buufadhu';
$string['admin:user_data:purge'] = 'Daataa barataa hunda fayyadamaa kanaaf haqi';
$string['admin:user_data:confirm_purge'] = 'Galmee {$a} hunda yeroo dhumaaf haquu? Kun marii, ergaa, sadarkeessuu, karoora qo\'annoo, yaadannoo, profayilii, qabxiilee shaakalaa, saakkanniisaa, galmee auudiitii fi yaada irra darba. Gocha kun deebi\'ee suphamuu hin danda\'u.';
$string['admin:user_data:purged'] = 'Daataan fayyadamaa filatamee hundi haqamee jira.';
$string['chat:consent_heading'] = '{$a->product} waliin marii hin jalqabne dura';
$string['chat:consent_body'] = '{$a->product} gargaaraa barnootaa AI-tiin hojjetuudha. Ergaan keessanii fi deebiin {$a->product} kuusaa Moodle {$a->institution} keessatti olkaa\'amu, marii kurnan dhihoo immoo gaaffii keessan deebisuuf dhiyeessaa moodelii AI mirkanaa\'aa tokkotti ergamu. Maqaan jalqabaa keessan namummaa keessan addaan baasuuf qoodama; odeeffannoon eenyummaa biraa dhiyeessaa AI-tti hin ergamu. Yeroo barbaaddanitti {$a->product} buufachuu, haquu yookaan dhiisuu ni dandeessu.';
$string['chat:consent_accept'] = 'Hubadheera, {$a} jalqabi';
$string['chat:consent_privacy_link'] = 'Beeksisa iccitii guutuu dubbisi';
$string['task:audit_cleanup'] = 'Qulqulleessuu gabatee auudiitii AI Course Assistant';
$string['task:conversation_retention'] = 'Sweepara turtii marii AI Course Assistant';
$string['settings:audit_retention_days'] = 'Turtii galmee auudiitii (guyyoota)';
$string['settings:audit_retention_days_desc'] = 'Hojiin yeroo guyyaa guyyaan ramadame sarara auudiitii kana caalaa dheeraa haqa. 0 dhaamsa. Kan baratame 365.';
$string['settings:conversation_retention_days'] = 'Turtii marii (guyyoota)';
$string['settings:conversation_retention_days_desc'] = 'Hojiin yeroo guyyaa guyyaan ramadame sarara marii kan yeroo isa dhumaa jijjiiramee kana caalaa dheeraa haqa. 0 dhaamsa. Kan baratame 730.';
$string['settings:ssrf_trusted_endpoints'] = 'SSRF dhuma amantamoo';
$string['settings:ssrf_trusted_endpoints_desc'] = 'URL tokko sarara tokkoon. Hostiwwan tarreeffaman dabarsa loopback / private-IP / https-qofa kan SOLA SSRF mirkaneessaan jiran. Kana kan fayyadamtu LLM ofii-ofii-tiif network ati to\'attu irratti qofa — fakkenyaaf <code>http://localhost:11434</code> Ollama naannoof, <code>http://10.0.0.5:8000</code> vLLM pod VPC tokko irratti. Wal-bira qabaan scheme + host + port wajjin walsima; karaan kamiyyuu hin ilaalamu. Duraa-duuba duwwaa (hunda keessoo cufaa). Sararoonni <code>#</code> dhaan jalqaban yaadannoodha.';
$string['task:learner_weekly_digest']    = 'Gargaaraa Koorsii AI - Cuunfaa Torban Barataa';
$string['learner_digest:subject']        = 'Torbankee {$a->course} waliin - {$a->product}';
$string['learner_digest:optin_offer']    = 'Imeelii torban gabaabaa kan itti aansuudhaan irratti xiyyeeffachuu qabdu sii dhaamuu?';
$string['next_best_action:get_started']           = '{$a->title} jalqabi. Na bani fi "{$a->title} keessatti na gargaari" jedhi gaafadhu.';
$string['next_best_action:get_started_with_module'] = '{$a->title} jalqabi. Mooduulin "{$a->module}" isa haammata.';
$string['next_best_action:review']                = 'Bu\'uura {$a->title} irra deebii ilaali — na bani fi "{$a->title} akka ani haaraan tiif na ibsii" jedhi gaafadhu.';
$string['next_best_action:review_with_module']    = '"{$a->module}" keessatti bu\'uura {$a->title} irra deebii ilaali, ergasii gaaffii kamiyyuu na bani.';
$string['next_best_action:practice']              = 'Waan {$a->title} keessatti qabdu irratti ijaari. Na bani fi "fakkeenya hojjetame {$a->title} naaf kenni" jedhi gaafadhu.';
$string['next_best_action:practice_with_module']  = '"{$a->module}" walitti {$a->title} shaakali. Fakkeenyota hojjetamoof na bani.';
$string['next_best_action:quiz']                  = 'Qormaata saffisaadhaan {$a->title} cimsiisi. Na bani fi "Na qori — madaqaa" filadhu.';
$string['next_best_action:quiz_with_module']      = 'Qormaata saffisaadhaan {$a->title} cimsiisi. Mooduulin "{$a->module}" eessa akka jiru.';
$string['next_best_action:empty_state']           = 'Yeroo ammaa galmoota hunda irratti gaariidha — wanti yaadachiisu hin jiru. Itti fufi.';
$string['next_best_action:header']                = 'Itti aansuun wantoota xiyyeeffachuu qabdu {$a}:';
$string['learner_digest:unsubscribe_done_title']  = 'Galmaa\'iinsa kaafame';
$string['learner_digest:unsubscribe_done_body']   = 'Xumurame — gosa qoraasaa kanaaf {$a->product} irraa imeeliiwwan torbanii dabalataa hin argattu. Yeroo barbaaddetti, foddaa marii kan gosa qoraasaa keessanii irraa irra deebi\'aa galmaa\'uu dandeessu.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Hidha kaaftu galmaa\'iinsa irraa lakkaawamuu hin qabu';
$string['learner_digest:unsubscribe_invalid_body']  = 'Hidhi kaaftu galmaa\'iinsa kun yeroon darbeera ykn dogoggora qaba. Filannoowwan imeelii sirreessa gosa qoraasaa keessanii irraa keessummeessuu dandeessu.';
$string['active_learners:line']                   = 'Namoonni {$a} ammaan kana gosa qoraasaa kana barachaa jiru.';
$string['active_learners:line_global']             = 'Namoonni {$a} ammaan kana barachaa jiru.';
$string['settings:active_learners_scope']          = 'Bal\'ina mallattoo barattoota socho\'oo';
$string['settings:active_learners_scope_desc']     = 'Mallattoon "namoonni biroo ammaan kana barachaa jiru" jalqabbii marii irra kan barattoota gosa qoraasaa wal fakkaataa qofa lakkaa\'u ykn barattoota saayitii hunda keessa jiran. Durtii <strong>addunyaa irratti</strong>.';
$string['settings:active_learners_scope_global']   = 'Addunyaa irratti (gosa qoraasaa kamiyyuu)';
$string['settings:active_learners_scope_course']   = 'Gosa qoraasaa qofa';
$string['learner_digest:optin_yes']      = 'Eeyyee, imeelii torban naaf ergi';
$string['learner_digest:optin_no']       = 'Lakki, galatoomaa';
$string['learner_digest:optin_thanks']   = 'Tole. Wiixata hunda cuunfaa torbanii argita.';
$string['learner_digest:optin_declined'] = 'Tole. Imeeliin hin jiru - yeroo ilaaluu barbaaddu na bani qofa.';
$string['settings:xai_proxy_url'] = 'URL proxii xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'URL ifaa wss tajaajila proxii SOLA xAI Realtime (fakkeenyaaf wss://voice.example.com/xai-rt/rt). Kun JWT secret waliin yoo qindaa\'e, sagaleen xAI proxii keessa darba, furtuun API xAI guddaa gonkumaa weeb-broowwsariitti hin ga\'u. Banaa dhiisuun gara hidhata kallattii dhaabbataatti deebi\'a (omishtummaaf hin gorfamu).';
$string['settings:xai_proxy_jwt_secret'] = 'JWT secret proxii xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Iccitii waliinii HS256 fayyadamamuun toomonyaa session yeroo gabaabduu proxii xAI Realtime mallatteessuu. MOODLE_JWT_SECRET Cloudflare Worker irra jiru wajjin walsimuu qaba. Yeroo yeroon jijjiiri.';
$string['admin:vendor_dpa:title'] = '{$a} — Haala DPA dhiyeessitoota';
$string['admin:vendor_dpa:intro'] = 'Filannoo leenjii ala ta\'uu, DPA, fi haala turtii driver dhiyeessaa AI hundaaf. Driver kamtu marsariitii kee irratti hojjachiisuu danda\'u murteessuuf kana fayyadami. Karaa Tier 2 fi sanaa ol DPA mallatteeffame fi filannoo leenjii ala ta\'uu waliigaltee qabu barbaadu.';
$string['admin:vendor_dpa:maintenance_note'] = 'Gabateen kun classes/vendor_registry.php keessatti eegama. Yeroo jijjiirraan ToS dhiyeessaa dhufu haaromsi.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Imeelii Itti Gaafatamaa Eegumsa Daataa';
$string['settings:dpo_email_desc'] = 'Imeelii qunnamtii beeksisa iccitii barataaf agarsiifamu jala "Quunnamtii". Banaa dhiisi sarara dhoksuuf. Maqaa biraan yoo deebi\'ee fudhatame DPO mataa isaatti naqamuu qaba.';
$string['settings:privacy_external_url'] = 'URL marsariitii iccitii dhaabbataa';
$string['settings:privacy_external_url_desc'] = 'Hidhata fuula iccitii sadarkaa dhaabbataa, beeksisa iccitii barataaf agarsiifamu jala "Quunnamtii". Banaa dhiisi sarara dhoksuuf.';
$string['settings:privacy_notice_override'] = 'Iccitii beeksisa irra darbiinsa (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Yoo qindaa\'e, HTML kun beeksisa iccitii bocaan kan baratame /local/ai_course_assistant/privacy.php irratti dhiyaatu bakka bu\'a. Barreessaa Seerni qoratee mirkaneesse koodii hin jijjiirree dhaabbata kee keessatti naquuf isa kana fayyadami. Beeksisa baratame fayyadamuuf banaa dhiisi, kunis barreeffama isaa furtuulee birandii torban irraa argata.';
$string['objectives:title'] = 'Galmoota barnootaa fi gahumsa';
$string['objectives:toggles_heading'] = 'Hordoffii gahumsaa';
$string['objectives:toggle_master'] = 'Hordoffii gahumsaa koorsii kanaaf banuu';
$string['objectives:toggle_chip'] = 'Chip Gahumsa Barnootaa barattootaaf agarsiisi';
$string['objectives:toggle_chip_help'] = 'Filannoo. Yeroo cufamu, gahumsi gargaaraa kallattii hin agarsiifne ammas qajeelcha; barattoonni mallattoo tokko illee hin argan.';
$string['objectives:toggled'] = 'Qindaa\'inni haaromfameera.';
$string['objectives:detected_heading'] = 'Galmoota barnootaa {$a->count} {$a->source} irraa argaman.';
$string['objectives:source_competency'] = 'Dandeettiwwan Moodle';
$string['objectives:source_summary'] = 'cuunfaa koorsii';
$string['objectives:source_section'] = 'kutaa yookaan qabiyyee fuula jalqabaa';
$string['objectives:source_page'] = 'fuula koorsii';
$string['objectives:source_llm'] = 'baasuu AI';
$string['objectives:source_manual'] = 'galmee harkaan';
$string['objectives:source_none'] = 'madda ofumaan tokko illee';
$string['objectives:import_detected'] = 'Galmoota argaman kana galchi';
$string['objectives:import_llm'] = 'Galmoota AI tiin baasi';
$string['objectives:llm_empty'] = 'Baasuun AI galma tokko illee hin deebifne. Booda yaali yookaan harkaan galchi.';
$string['objectives:imported'] = 'Galmoota {$a} galchame.';
$string['objectives:none_detected'] = 'Galmoonni barnootaa ofumaan hin argamne. Gadirratti harkaan galchi yookaan baasuu AI fayyadami.';
$string['objectives:list_heading'] = 'Galmoota ammee';
$string['objectives:col_code'] = 'Koodii';
$string['objectives:col_title'] = 'Mata duree';
$string['objectives:col_source'] = 'Madda';
$string['objectives:col_actions'] = 'Gochaalee';
$string['objectives:add_heading'] = 'Galma dabaluu';
$string['objectives:add_submit'] = 'Galma dabali';
$string['objectives:saved'] = 'Galmichi olkaa\'ameera.';
$string['objectives:deleted'] = 'Galmichi haqamee jira.';
$string['objectives:delete_confirm'] = 'Galma kana fi seenaa yaaliiwwan isaa hunda haqu?';
$string['objectives:delete_all'] = 'Galmoota koorsii kanaa hunda haqi';
$string['objectives:delete_all_confirm'] = 'Galmoota hunda fi seenaa yaaliiwwan koorsii kanaaf haquu? Kun deebi\'ee hin suphamu.';
$string['objectives:deleted_all'] = 'Galmoonni koorsii kanaa hundi haqamanii jiru.';
$string['mastery:chip_aria'] = 'Haala gahumsa barnootaa';
$string['mastery:popover_aria'] = 'Bal\'inaalee gahumsa barnootaa';
$string['mastery:chip_label'] = '{$a->mastered} keessaa {$a->total} ga\'aman';
$string['mastery:status_mastered'] = 'ga\'ame';
$string['mastery:status_learning'] = 'adeemsa irra';
$string['mastery:status_not_started'] = 'hin jalqabamne';
$string['mastery:popover_empty'] = 'Galmoonni barnootaa koorsii kanaaf hin qindaa\'amne.';
$string['settings:mastery_heading'] = 'Hordoffii gahumsaa';
$string['settings:mastery_heading_desc'] = 'Amaloota tokkoo tokkoo koorsii filataman kan deebii shaakalaa fi marii gargaaraa galmoota barnootaa koorsichaa irratti gargartanii, ergasii cuunfaa gahumsaa gabaabduu gara prompt sirnichaatti naquun gaaffii qajeelchu. Bocaan dhokataadha: barattoonni hanga chip toggle koorsii itti banamutti waan tokko illee hin argan.';
$string['settings:mastery_threshold'] = 'Daangaa ga\'amee';
$string['settings:mastery_threshold_desc'] = 'Sirreessa marsaa\'aa irratti yookaan ol galmichi akka ga\'ametti hubatamu. 0.0 hanga 1.0. Kan baratame 0.85.';
$string['settings:mastery_window'] = 'Foddaa yaalii';
$string['settings:mastery_window_desc'] = 'Lakkoofsa yaaliiwwan dhihoo tokkoo tokkoo galmaaf sirreessa marsaa\'aa keessatti madaalan. Kan baratame 8.';
$string['settings:mastery_decay_enabled']        = 'Hir\'ina ogummaa dandeessisi';
$string['settings:mastery_decay_enabled_desc']   = 'Yoo banaa ta\'e, qabxiin ogummaa yeroo gargaaramaa dhumaa irratti dhibba dhibba xiqqaata. Galmi duraan dhuunfaa godhame yeroo gahaan booda gara "barachaa" deebi\'a. "Barachaa" gadi hin bu\'u. <strong>v4.0 keessatti durtii cufaa.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Walakkaa jireenya hir\'ina ogummaa (guyyoota)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Walakkaa jireenya guyyaadhaan. Qabxiin 0.5 ^ (guyyoota gargaaramaa dhumaa irraa / walakkaa jireenya) baayyifama. Durtii 30. Yoo hir\'inni dandeessifame qofa fayyadama.';
$string['settings:mastery_classifier_model'] = 'Modeela ramaddii';
$string['settings:mastery_classifier_model_desc'] = 'Modeelli marii gargaaraa galmoota irratti ramadu. Modeela dhiyeessaa AI baratame dhaalaaf banaa dhiisi; yookiin modeela rakasaa akka gpt-4o-mini galchi.';
$string['settings:mastery_classifier_weight'] = 'Ulfaatina ramaddii';
$string['settings:mastery_classifier_weight_desc'] = 'Yaaliin marii hammam yaalii shaakalaa (1.0) wajjin walbira lakkaa\'amu. Kan baratame 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Daangaa amantii ramaddii';
$string['settings:mastery_classifier_threshold_desc'] = 'Amantiin xiqqaan ramaddii barbaachisaa yaalii marii galmeessuuf. 0.0 hanga 1.0. Kan baratame 0.7.';
$string['chat:mode_progress'] = 'Adeemsa';
$string['objectives:toggle_dashboard'] = 'Tabii Daashboordii Adeemsaa barattootaaf agarsiisi';
$string['objectives:toggle_dashboard_help'] = 'Filannoo. Cinaa Marii / Sagalee / Seenaa weejiijicha keessatti tabii Adeemsaa dabala. Tabichi galmoota barattoonni ga\'an, kanneen adeemsa irra jiran, fi kanneen hin jalqabamne agarsiisa.';
$string['mastery:dashboard_title'] = 'Adeemsa barnoota keessanii';
$string['mastery:dashboard_subtitle'] = 'Gahumsi deebii shaakala fi marii keessan irraa madaalama. Itti fufaa — dheerinni bal\'ina caala.';
$string['mastery:dashboard_refresh'] = 'Haaromsi';
$string['mastery:section_mastered'] = 'Ga\'aman';
$string['mastery:section_learning'] = 'Adeemsa irra';
$string['mastery:section_not_started'] = 'Amma illee hin jalqabamne';
$string['mastery:summary_label'] = '{$a->mastered} keessaa galmoota {$a->total} ga\'aman';
$string['mastery:ask_about'] = 'Waa\'ee kanaa gaafadhu';
$string['mastery:celebrate'] = 'Galmoota koorsii kanaa hunda ga\'aanii jirtu. Hojii baay\'ee bareedaa.';
$string['mastery:ask_template'] = 'Galma kana shaakaluu fi hubannoo koo bal\'isuu na gargaari: {$a}.';
$string['instructor_dashboard:title'] = '{$a} — Course Instructor & Designer Dashboard';
$string['instructor_dashboard:short']            = 'Instructor & Designer Dashboard';
$string['coursepicker:title']                    = 'Select a course — {$a}';
$string['coursepicker:intro']                    = 'Choose a course from the list below to open this page in that course\'s context. Direct links with a courseid parameter still work as before.';
$string['coursepicker:nocourses']                = 'You do not have access to any courses where this page applies. Contact your site administrator if you believe this is incorrect.';
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

// v4.8.1: talking avatar (placeholder, default off, provider-neutral).
$string['pedagogy:talking_avatar']         = 'Talking avatar on by default';
$string['pedagogy:talking_avatar_desc']    = 'When on, the talking-avatar surface is enabled in every course unless the course has its own override. Requires a configured provider (D-ID, HeyGen, Tavus, or Synthesia Agents) below; otherwise the widget shows a "configure a provider" notice and the avatar does not animate.';
$string['settings:talking_avatar_heading']      = 'Talking avatar';
$string['settings:talking_avatar_heading_desc'] = 'Pick which talking-avatar vendor SOLA opens for students when the avatar surface is enabled. SOLA ships drivers for D-ID (cheapest WebRTC streaming), HeyGen (LiveKit-backed interactive avatars), Tavus (drop-in iframable Conversational Video Interface), and Synthesia Agents (real-time agent product, configured in the Synthesia dashboard). Per-provider key + persona id appear below; only the chosen provider needs to be filled in. Every outbound call is SSRF-checked.';
$string['settings:talking_avatar_provider_url']      = 'Provider API base URL (legacy)';
$string['settings:talking_avatar_provider_url_desc'] = 'v4.8.1 placeholder, kept for upgrade safety. The active drivers in v4.9.0 read their own per-provider settings; this field is only used as a fallback when an admin upgraded mid-release.';
$string['settings:talking_avatar_provider_api_key']      = 'Provider API key (legacy)';
$string['settings:talking_avatar_provider_api_key_desc'] = 'v4.8.1 placeholder, kept for upgrade safety. The active drivers in v4.9.0 read their own per-provider settings; this field is only used as a fallback when an admin upgraded mid-release.';
$string['settings:talking_avatar_provider']      = 'Talking avatar provider';
$string['settings:talking_avatar_provider_desc'] = 'Pick the vendor whose key + persona id are filled in below. Leave as <em>None</em> until the institution has signed off; the pedagogy default still appears in <em>Pedagogy defaults</em> but the widget shows a configuration notice instead of an avatar.';
$string['settings:talking_avatar_provider_none']      = 'None (avatar disabled)';
$string['settings:talking_avatar_provider_did']       = 'D-ID Streaming Talks';
$string['settings:talking_avatar_provider_heygen']    = 'HeyGen Interactive Avatar';
$string['settings:talking_avatar_provider_tavus']     = 'Tavus Conversational Video';
$string['settings:talking_avatar_provider_synthesia'] = 'Synthesia Agents (real-time)';
$string['settings:talking_avatar_did_api_key']         = 'D-ID API key';
$string['settings:talking_avatar_did_api_key_desc']    = 'Base64-encoded <code>email:api-key</code> string from <a href="https://studio.d-id.com/account-settings" target="_blank" rel="noopener">D-ID Studio → Account → API keys</a>. Sent as <code>Authorization: Basic …</code>.';
$string['settings:talking_avatar_did_persona_id']      = 'D-ID source image URL';
$string['settings:talking_avatar_did_persona_id_desc'] = 'Public HTTPS URL of the still image D-ID animates (or a Studio presenter URL such as <code>https://create-images-results.d-id.com/…</code>). Required for every stream.';
$string['settings:talking_avatar_heygen_api_key']         = 'HeyGen API key';
$string['settings:talking_avatar_heygen_api_key_desc']    = 'API key from <a href="https://app.heygen.com/settings?nav=API" target="_blank" rel="noopener">HeyGen → Settings → API</a>. Sent as <code>X-Api-Key</code>.';
$string['settings:talking_avatar_heygen_persona_id']      = 'HeyGen interactive avatar id';
$string['settings:talking_avatar_heygen_persona_id_desc'] = 'Avatar id from the HeyGen Streaming Avatar dashboard (e.g. <code>Tyler-incasualsuit-20220721</code>).';
$string['settings:talking_avatar_tavus_api_key']         = 'Tavus API key';
$string['settings:talking_avatar_tavus_api_key_desc']    = 'API key from <a href="https://platform.tavus.io/api-keys" target="_blank" rel="noopener">Tavus platform → API keys</a>. Sent as <code>x-api-key</code>.';
$string['settings:talking_avatar_tavus_persona_id']      = 'Tavus replica id';
$string['settings:talking_avatar_tavus_persona_id_desc'] = 'Replica id (the trained likeness) you want SOLA to converse as. Combine with a persona id by appending it to the API key field if needed; SOLA will pass <code>persona_id</code> through.';
$string['settings:talking_avatar_synthesia_api_key']         = 'Synthesia API key';
$string['settings:talking_avatar_synthesia_api_key_desc']    = 'API key from <a href="https://app.synthesia.io/#/account/api" target="_blank" rel="noopener">Synthesia → Account → API</a>. Sent as <code>Authorization</code> header (Synthesia accepts the raw key).';
$string['settings:talking_avatar_synthesia_persona_id']      = 'Synthesia agent id';
$string['settings:talking_avatar_synthesia_persona_id_desc'] = 'Agent id created in the Synthesia Agents dashboard. Knowledge, persona, and allowed origins are configured agent-side; SOLA only opens a session against this id.';
$string['talking_avatar:disabled']        = 'Talking avatar is not enabled for this course.';
$string['talking_avatar:unconfigured']    = 'Talking avatar is enabled but no provider has been configured. An administrator must pick a provider and supply credentials in plugin settings.';
$string['talking_avatar:session_failed']  = 'The talking-avatar provider declined the session request. Check the provider configuration or try again in a moment.';
$string['talking_avatar:viewer_title']    = 'SOLA talking avatar';
$string['talking_avatar:bundle_required'] = 'The talking-avatar viewer requires the SOLA CDN bundle to be configured. Ask an administrator to set the CDN bundle URL in plugin settings.';
$string['talking_avatar:open']            = 'Open avatar';
$string['talking_avatar:close']           = 'Close avatar';
$string['settings:avatar_rate_card_overrides']      = 'Avatar rate card overrides (JSON)';
$string['settings:avatar_rate_card_overrides_desc'] = 'JSON object keyed by avatar provider with a single per-minute USD rate. Replaces the bundled rate for that provider. Example: <pre>{ "did": 0.18, "heygen": 0.40, "tavus": 0.25 }</pre> Empty = use the v4.10.0 bundled defaults: D-ID $0.30/min, HeyGen $0.50/min, Tavus $0.30/min, Synthesia $0.40/min. Set this to your contracted rate so the analytics dashboard reflects the institution\'s actual cost.';
$string['settings:talking_avatar_did_webhook_secret']         = 'D-ID webhook signing secret';
$string['settings:talking_avatar_did_webhook_secret_desc']    = 'Optional. When set, D-ID can POST session-end events to <code>{wwwroot}/local/ai_course_assistant/talking_avatar_webhook.php?provider=did</code> signed with this secret as <code>X-DID-Signature</code> (hex HMAC-SHA256). Webhook rows take precedence over the frontend heartbeat. Empty = handler off, the heartbeat + hourly sweeper handle session-end exclusively.';
$string['settings:talking_avatar_heygen_webhook_secret']      = 'HeyGen webhook signing secret';
$string['settings:talking_avatar_heygen_webhook_secret_desc'] = 'Optional. When set, HeyGen can POST session-end events signed with this secret as <code>X-HeyGen-Signature</code> (hex HMAC-SHA256). Empty = handler off.';
$string['settings:talking_avatar_tavus_webhook_secret']       = 'Tavus webhook signing secret';
$string['settings:talking_avatar_tavus_webhook_secret_desc']  = 'Optional. When set, Tavus can POST conversation-end events signed with this secret as <code>X-Tavus-Signature</code> (hex HMAC-SHA256). Empty = handler off.';
$string['settings:talking_avatar_synthesia_webhook_secret']   = 'Synthesia webhook signing secret';
$string['settings:talking_avatar_synthesia_webhook_secret_desc'] = 'Optional. When set, Synthesia can POST agent session-end events signed with this secret as <code>X-Synthesia-Signature</code> (hex HMAC-SHA256). Empty = handler off.';
$string['analytics:avatar_cost_heading']     = 'Talking-avatar usage';
$string['analytics:avatar_cost_provider']    = 'Provider';
$string['analytics:avatar_cost_sessions']    = 'Sessions';
$string['analytics:avatar_cost_minutes']     = 'Minutes';
$string['analytics:avatar_cost_rate']        = 'Per-minute rate';
$string['analytics:avatar_cost_total']       = 'Estimated total';
$string['analytics:avatar_cost_empty']       = 'No talking-avatar sessions in the selected period.';
$string['task:sweep_avatar_sessions']        = 'Close stale talking-avatar sessions';
$string['settings:prompt_debug_enabled']      = 'Log assembled system prompt to file';
$string['settings:prompt_debug_enabled_desc'] = 'When on, every chat-turn writes the full assembled system prompt and per-section character counts to <code>moodledata/temp/sola_prompt_debug.log</code> (rolling at ~1MB). Default off. Use to measure prompt size empirically and audit which sections contribute the most tokens. The log contains the system prompt only (no learner input or PII).';
$string['settings:socratic_verbose']      = 'Verbose Socratic mode prompt';
$string['settings:socratic_verbose_desc'] = 'When on, Socratic-mode courses receive the full ~600-token do/don\'t directive originally added in v3.9.30. When off (default), they receive a single-line directive that modern hosted models follow reliably and saves ~600 tokens per turn. Turn this on if a course is running on a weaker self-hosted model that needs the explicit scaffolding.';
$string['settings:prompt_budget_chars']      = 'System prompt character budget';
$string['settings:prompt_budget_chars_desc'] = 'Maximum total size of the assembled system prompt before the user message, in characters. The structured prompt builder organises sections by category (identity, course context, learner state, behaviour, markers, safety) and drops or truncates the lowest-priority sections when the budget is exceeded. Safety guidance is always preserved in full. Default 8,000 characters (~2,000 tokens). Lower values reduce per-turn cost; higher values allow more course content to land in-prompt.';
$string['settings:current_page_content_maxchars']      = 'Current page content cap (characters)';
$string['settings:current_page_content_maxchars_desc'] = 'Maximum number of characters of the current page\'s text injected into the system prompt as the "Current Page Content" section. Default 12,000 keeps the prior behaviour where the full page (up to that cap) is sent — best for accuracy on page-specific questions. Cost-conscious sites can clamp this lower (e.g. 3,000-4,000) to reduce per-turn token spend, at the risk that a question whose answer is in the truncated tail of a long page will not be answered as accurately. Clamped to the range 500-12,000. Independent of <code>prompt_budget_chars</code>: this caps just the page section; the budget caps the whole prompt.';
$string['settings:prompt_verbosity']      = 'Prompt verbosity';
$string['settings:prompt_verbosity_desc'] = 'Default verbosity for instruction blocks (Socratic mode, external resources). Concise (default) is what modern hosted models follow reliably; standard adds explicit scaffolding for mid-tier models; verbose keeps the heavyweight v3.9.30-era guidance for weaker self-hosted models. Per-course override available via <code>prompt_verbosity_course_&lt;id&gt;</code>.';
$string['settings:prompt_verbosity_concise']  = 'Concise (recommended for hosted models)';
$string['settings:prompt_verbosity_standard'] = 'Standard';
$string['settings:prompt_verbosity_verbose']  = 'Verbose (for weaker self-hosted models)';
$string['settings:prompt_metrics_enabled']      = 'Capture per-section prompt metrics';
$string['settings:prompt_metrics_enabled_desc'] = 'When on (default), every chat turn writes one JSON line per assembled prompt to <code>moodledata/sola_prompt_metrics/YYYY-MM-DD.log</code> with per-category char counts. Last 7 days kept. The metrics admin page aggregates these for the budget recommendation. No PII is recorded — only section sizes. Turn off if your institution prefers no metrics file at all.';
$string['settings:prompt_budget_auto_tune']      = 'Auto-tune system prompt budget daily';
$string['settings:prompt_budget_auto_tune_desc'] = 'When on, a daily cron task (03:20 server time) applies the budget recommendation surfaced on the <a href="/local/ai_course_assistant/prompt_metrics.php">Prompt metrics</a> admin page. Default off — the recommendation always shows on the page; auto-apply only fires when the institution opts in. Manual "Apply recommendation" button is unaffected by this toggle.';
$string['task:auto_tune_prompt_budget']          = 'Auto-tune SOLA prompt budget from observed metrics';
$string['prompt_metrics:title']                  = 'Prompt metrics + budget recommendation';
$string['prompt_metrics:subtitle']               = 'Per-section prompt sizes captured over the last 7 days. Used to recommend a value for the System prompt character budget setting.';
$string['prompt_metrics:no_data']                = 'No prompt metrics recorded yet. Send a few chat turns from a learner account, then refresh this page. (If the metrics capture flag is off in plugin settings, no data will accumulate.)';
$string['prompt_metrics:headline']               = 'Headline';
$string['prompt_metrics:samples']                = 'Samples (chat turns over last 7 days)';
$string['prompt_metrics:avg_total']              = 'Average total prompt size';
$string['prompt_metrics:max_total']              = 'Maximum prompt size observed';
$string['prompt_metrics:avg_budget']             = 'Budget at time of capture';
$string['prompt_metrics:pct_truncated']          = 'Turns where any section was truncated';
$string['prompt_metrics:pct_dropped']            = 'Turns where any section was dropped';
$string['prompt_metrics:last_seen']              = 'Most recent sample';
$string['prompt_metrics:by_category']            = 'Average chars per category';
$string['prompt_metrics:category']               = 'Category';
$string['prompt_metrics:avg_chars']              = 'Avg chars';
$string['prompt_metrics:recommendation']         = 'Budget recommendation';
$string['prompt_metrics:rec_insufficient_data']  = 'Need at least 30 chat turns of data to make a confident recommendation. Keep collecting samples and check back.';
$string['prompt_metrics:rec_optimal']            = 'Current budget looks well-tuned for the observed traffic. No change recommended.';
$string['prompt_metrics:current_budget']         = 'Current budget';
$string['prompt_metrics:recommended']            = 'Recommended budget';
$string['prompt_metrics:apply']                  = 'Apply recommendation';
$string['prompt_metrics:applied']                = 'Applied: budget changed from {$a->old} to {$a->new}. {$a->reason}';
$string['prompt_metrics:noop']                   = 'No change applied: {$a}';
$string['prompt_metrics:auto_tune_heading']      = 'Daily auto-tune';
$string['prompt_metrics:auto_tune_on']           = 'Daily auto-tune is ON. The recommendation will be applied automatically every night at 03:20 server time.';
$string['prompt_metrics:auto_tune_off']          = 'Daily auto-tune is OFF. The recommendation is shown here for review; nothing is applied automatically. Toggle on in plugin settings if you want unattended daily tuning.';
$string['prompt_metrics:settings_link']          = 'Open plugin settings to toggle auto-tune.';

// v5.3.0: Empathetic communications + carryover memory (English fallback).
$string['task:milestone_check'] = 'Send daily milestone reflection emails (v5.3.0)';
$string['task:struggle_signal_review'] = 'Review struggle signals into private learner memory (v5.3.0)';
$string['empathy:title'] = 'Empathetic communications and carryover memory (v5.3.0)';
$string['empathy:desc'] = 'Three coordinated features that make SOLA feel more like a coach who listens. Goals capture why the learner is here. Carryover memory remembers what has been hard before so SOLA can offer a different angle. Milestones celebrate streaks and completions by email. Each feature has an independent kill switch and learner opt-in. Struggle signals never leave the chat — no email is ever sent about a difficult session.';
$string['empathy:outreach_master_enabled'] = 'Master outreach kill switch';
$string['empathy:outreach_master_enabled_desc'] = 'Off by default on a fresh install. When off, NO empathetic email of any kind ever fires, regardless of the per-feature switches below. Turn this on once you have reviewed the per-feature defaults and per-learner consent flow.';
$string['empathy:goals_enabled'] = 'Enable career goal conversations';
$string['empathy:goals_enabled_desc'] = 'Lets learners volunteer two short answers (why they are here, what they want to become) that feed personalisation. In-chat only; no emails. Safe to leave on.';
$string['empathy:milestones_enabled'] = 'Enable milestone reflection emails';
$string['empathy:milestones_enabled_desc'] = 'Sends a short warm email when a learner reaches a 7-day streak, 30-day streak, or course completion. Requires the master switch above plus per-learner consent. Hard cap of one email per learner per 7 days across all channels.';
$string['empathy:memory_enabled'] = 'Enable carryover personalisation memory';
$string['empathy:memory_enabled_desc'] = 'Lets SOLA carry small private notes about what has been hard for a learner across sessions, so the next reply can offer a different angle. Bounded (max 5 notes per learner per course, 90-day TTL). Learner-editable. Never visible to instructors.';
$string['empathy:struggle_enabled'] = 'Enable struggle classifier';
$string['empathy:struggle_enabled_desc'] = 'Off by default. Lets SOLA detect sustained frustration over multiple turns and quietly record a sticking-point note in the carryover memory above. Output is in-chat only; no email is ever sent about a struggle session. Auto-purges signal data after 7 days.';
$string['empathy:outreach_dryrun'] = 'Dry-run outreach (log without sending)';
$string['empathy:outreach_dryrun_desc'] = 'When on, the milestone scheduled task records audit rows as if it sent emails but does not actually email anyone. Use this on a fresh install to verify the cooldown and consent logic before going live.';
$string['goals:starter_title'] = 'Set my learning goals';
$string['goals:starter_intro'] = "Mind sharing why you are taking this course? It helps me give you better answers.";
$string['goals:q1_label'] = 'What brought you to this course?';
$string['goals:q2_label'] = "What's the bigger thing this is helping you toward? A degree, a job, a project of your own, something else?";
$string['goals:q3_label'] = 'Anything I should keep in mind while we work together?';
$string['goals:save'] = 'Save my goals';
$string['goals:dismiss'] = 'Not now';
$string['goals:edit'] = 'Edit goals';
$string['goals:clear'] = 'Clear my goals';
$string['goals:cleared'] = 'Your goals have been cleared.';
$string['goals:saved'] = 'Thanks for sharing.';
$string['comms:title'] = 'My communications';
$string['comms:desc'] = 'Choose which automated emails SOLA may send you. Off by default. You can change this any time.';
$string['comms:milestones_label'] = 'Email me when I reach a milestone (7-day streak, 30-day streak, course completion).';
$string['comms:audit_log_title'] = 'What SOLA has sent me';
$string['comms:audit_log_empty'] = 'SOLA has not sent you any emails.';
$string['comms:memory_title'] = "What SOLA has remembered about how I learn";
$string['comms:memory_desc'] = 'These notes are private to your chat with SOLA. They help SOLA pick a different angle when a topic is hard. Clear any time.';
$string['comms:memory_clear'] = 'Clear all memory notes';
$string['milestone:streak_subject'] = '{$a->days}-day streak in {$a->coursename}';
$string['milestone:streak_body_text'] = "Hi {\$a->firstname},\n\nYou have shown up {\$a->days} days in a row in {\$a->coursename}. That kind of consistency is the part of learning that is hardest to fake.\n\nWhenever you are ready, SOLA is here.\n\n— {\$a->institution}";
$string['milestone:completion_subject'] = 'You finished {$a->coursename}';
$string['milestone:completion_body_text'] = "Hi {\$a->firstname},\n\nYou finished {\$a->coursename}. That is a real thing you did.\n\nIf you want to keep going, SOLA can help you pick a related next course or revisit a topic you found interesting.\n\n— {\$a->institution}";
$string['milestone:trigger_streak7'] = '7-day activity streak reached';
$string['milestone:trigger_streak30'] = '30-day activity streak reached';
$string['milestone:trigger_completion'] = 'Course completion recorded';
