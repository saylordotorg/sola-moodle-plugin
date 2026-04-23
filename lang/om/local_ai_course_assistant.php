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
$string['chat:voice_panel_title'] = '{$a} waliin dubbadhu (Yaaliif)';

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
