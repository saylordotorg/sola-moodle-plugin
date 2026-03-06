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
 * Language strings for local_ai_course_assistant — Zulu (isiZulu).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Umsizi Wesifundo AI';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Igcina izingxoxo zomfundisi we-AI ngomuntu ngamunye nezifundo.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'I-ID yomsebenzisi owengamele ingxoxo.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'I-ID yesifundo elingxoxo lize kulo.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Isihloko sengxoxo.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Isikhathi sokwenziwa kwengxoxo.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Isikhathi sokushintshwa kwengxoxo kwamuva.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Igcina imilayezo ngayinye ezingxoxweni.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'I-ID yomsebenzisi othumele umlayezo.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'I-ID yesifundo umlayezo oze kuso.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Indima yomthumeli womlayezo (umsebenzisi noma umsizi).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Okuqukethwe komlayezo.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Inani lamathokheni asetshenzisiwe kumlayezo.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Isikhathi sokwenziwa komlayezo.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Sebenzisa ingxoxo yomfundisi we-AI';
$string['ai_course_assistant:viewanalytics'] = 'Buka i-analytics yengxoxo yomfundisi we-AI';
$string['ai_course_assistant:manage'] = 'Phatha izilungiselelo zengxoxo yomfundisi we-AI (Indima Yomphathi)';

// Settings.
$string['settings:enabled'] = 'Vula Umsizi Wesifundo AI';
$string['settings:enabled_desc'] = 'Vula noma uvale i-widget ka-Umsizi Wesifundo AI emakhashini ezifundo.';
$string['settings:provider'] = 'Umhlinzeki we-AI';
$string['settings:provider_desc'] = 'Khetha umhlinzeki we-AI ozosetshenziselwa ukuphela kwezingxoxo.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Wendawo)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Okhethiwe (Ofanelana ne-OpenAI)';
$string['settings:apikey'] = 'Ukhiye we-API';
$string['settings:apikey_desc'] = 'Ukhiye we-API wumhlinzeki okhethiwe. Akudingeki kuyi-Ollama.';
$string['settings:model'] = 'Igama Lemodeli';
$string['settings:model_desc'] = 'Imodeli ezosetshenziselwa. Okuzenzakalelayo kuxhomeke kumhlinzeki (isib. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'I-URL Yisisekelo se-API';
$string['settings:apibaseurl_desc'] = 'I-URL yasisekelo ye-API. Igcwaliswa ngokwawo umhlinzeki ngamunye kodwa ingashintshwa. Yishiye ingenalutho ukuthola okuzenzakalelayo komhlinzeki.';
$string['settings:systemprompt'] = 'Isifanekiso Sesicelo Sesistimu';
$string['settings:systemprompt_desc'] = 'Isicelo esithumelwa ku-AI. Sebenzisa izindawo: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Ungu-AI omfundisi osizayo wesifundo "{{coursename}}". Indima yomfundi ngu-{{userrole}}.

Izihloko zesifundo ezifundisiwe:
{{coursetopics}}

Siza umfundi ukuqonda izinto zesifundo. Yiba nokukhuthaza, ucace, futhi usetshenziselwe imfundo.';
$string['settings:temperature'] = 'Ubushisa';
$string['settings:temperature_desc'] = 'Lawula ukungaqiniseki. Amanani aphansi agxile, amanani aphezulu nawo akhiqizayo. Ibanga: 0.0 kuya ku-2.0.';
$string['settings:maxhistory'] = 'Umlando Omakhulu Wengxoxo';
$string['settings:maxhistory_desc'] = 'Inani elikhulu lamagama amabili amilayezo azofakwa ezicelweni ze-API. Imilayezo endala icheshwa.';
$string['settings:avatar'] = 'I-Avatar Yengxoxo';
$string['settings:avatar_desc'] = 'Khetha isithonjana se-avatar sokukhanda kwi-widget yengxoxo.';
$string['settings:avatar_saylor'] = 'Uphawu lwe-Saylor Academy (Okuzenzakalelayo)';
$string['settings:position'] = 'Indawo Ye-Widget';
$string['settings:position_desc'] = 'Indawo ye-widget yengxoxo kwikhasi.';
$string['settings:position_br'] = 'Ngaphansi kwesokudla';
$string['settings:position_bl'] = 'Ngaphansi kwesokhohlo';
$string['settings:position_tr'] = 'Phezulu kwesokudla';
$string['settings:position_tl'] = 'Phezulu kwesokhohlo';
$string['chat:settings'] = 'Izilungiselelo ze-plugin';
$string['analytics:viewdashboard'] = 'Buka ibhodi le-analytics';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'Izilungiselelo Ze-AI Zesifundo';
$string['coursesettings:enabled'] = 'Vula ukuguqulwa kwesifundo';
$string['coursesettings:enabled_desc'] = 'Uma kuvuliwe, izilungiselelo ezilandelayo ziguqula izilungiselelo zomhlinzeki we-AI wezwe lonke zesifundo lesi kuphela. Shiya izigaba zingenalutho ukuzidlela inani lezwe lonke.';
$string['coursesettings:using_global'] = 'Isebenzisa izilungiselelo zomhlaba';
$string['coursesettings:saved'] = 'Izilungiselelo ze-AI zesifundo zisindisiwe.';
$string['coursesettings:global_settings_link'] = 'Izilungiselelo ze-AI zomhlaba';

// Language detection and preference.
$string['lang:switch'] = 'Yebo, shintsha';
$string['lang:dismiss'] = 'Cha, ngiyabonga';
$string['lang:change'] = 'Shintsha ulimi';
$string['lang:english'] = 'IsiNgisi';

// Chat widget.
$string['chat:title'] = 'Umfundisi we-AI';
$string['chat:placeholder'] = 'Buza umbuzo...';
$string['chat:send'] = 'Thumela';
$string['chat:close'] = 'Vala ingxoxo';
$string['chat:open'] = 'Vula ingxoxo yomfundisi we-AI';
$string['chat:clear'] = 'Sula umlando';
$string['chat:clear_confirm'] = 'Uqinisekile ukuthi ufuna ukusula umlando wengxoxo yakho kulesi sifundo?';
$string['chat:copy'] = 'Kopisha ingxoxo';
$string['chat:copied'] = 'Ingxoxo ikopishiwe ku-clipboard';
$string['chat:copy_failed'] = 'Ukukopisha ingxoxo kuhlulekile';
$string['chat:greeting'] = 'Sawubona! Ngingumfundisi wakho we-AI walesi sifundo. Ngingakusiza kanjani namuhla?';
$string['chat:thinking'] = 'Ngicabanga...';
$string['chat:error'] = 'Ngiyaxolisa, kukhona okungahambanga kahle. Sicela uzame futhi.';
$string['chat:error_auth'] = 'Iphutha lokufakazela. Sicela uxhumane nomphathi wakho.';
$string['chat:error_ratelimit'] = 'Izicelo eziningi kakhulu. Sicela ulinde umzuzu bese uzama futhi.';
$string['chat:error_unavailable'] = 'Isevisi ye-AI ayitholakali okwesikhashana. Sicela uzame futhi kamuva.';
$string['chat:error_notconfigured'] = 'Umfundisi we-AI akakasetiwe. Sicela uxhumane nomphathi wakho.';
$string['chat:expand'] = 'Nweba ingxoxo';
$string['chat:collapse'] = 'Goqa ingxoxo';
$string['chat:mic'] = 'Khuluma umbuzo wakho';
$string['chat:mic_error'] = 'Iphutha le-microphone. Sicela uhlole izimvume zebhrawuza yakho.';
$string['chat:mic_unsupported'] = 'Ukufakwa kwezwi akusekeli kule bhrawuza.';
$string['chat:newline_hint'] = 'Shift+Enter imugqa omusha';
$string['chat:you'] = 'Wena';
$string['chat:assistant'] = 'Umfundisi we-AI';
$string['chat:history_loaded'] = 'Ingxoxo yangaphambilini ilayishiwe.';
$string['chat:history_cleared'] = 'Umlando wengxoxo usuliwe.';
$string['chat:offtopic_warning'] = 'Kubukeka ukuthi umbuzo wakho awuhlobene nalesi sifundo. Sicela uzame ukuhlala esihlokweni ukuze ngikusize kahle!';
$string['chat:offtopic_ended'] = 'Ukufinyelela komfundisi we-AI kwakho kumisiwe okwesikhashana imizuzu engu-{$a} ngoba ingxoxo yaphuma esihlokweni izikhathi eziningi. Sicela usebenzise lesi sikhathi ukuhlola izinto zesifundo sakho, ungaphinde uzame kamuva.';
$string['chat:offtopic_locked'] = 'Ukufinyelela komfundisi we-AI kwakho kumisiwe okwesikhashana. Ungaphinda uzame ngemizuzu engu-{$a}. Sicela ugxile emibuzweni ehlobene nesifundo nawe ubuyela.';
$string['chat:escalated_to_support'] = 'Ngangakwazi ukuphendula umbuzo wakho ngokugcwele, ngakho-ke ngakudala ithikithi lokusekela. Ilungu leqembu lokusekela lizolandela. Inombolo yerekhodi yethikithi lakho ngu: {$a}';
$string['chat:studyplan_intro'] = 'Ngingakusiza ukudala uhlelo lokufunda walesi sifundo! Ngixoxele nje imihla emingaki ngesonto ongazinikezela kuyo ekufundeni, ngizokusize ukwakha uhlelo oluhleliwe.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'I-FAQ & Ukusekela';
$string['settings:faq_heading_desc'] = 'Lungisa i-FAQ ehlangene nokuhlanganiswa kwethikithi lokusekela lwe-Zendesk.';
$string['settings:faq_content'] = 'Okuqukethwe Kwe-FAQ';
$string['settings:faq_content_desc'] = 'Faka amangeniso e-FAQ (elinye ngalinye emgqeni ngefomathi: Q: umbuzo | A: impendulo). Azonikezwa ku-AI ukuphendula imibuzo ejwayelekile yokusekela.';
$string['settings:zendesk_enabled'] = 'Vula Ukukhuphukela kwe-Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Uma i-AI ingakwazi ukuxazulula umbuzo wokusekela, yenza ithikithi le-Zendesk ngokuzenzakalelayo olunezifinyezo zengxoxo.';
$string['settings:zendesk_subdomain'] = 'I-Subdomain Ye-Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'I-subdomain yakho ye-Zendesk (isib. "mycompany" ye-mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'I-Email Ye-API Ye-Zendesk';
$string['settings:zendesk_email_desc'] = 'Ikheli le-imeyili lomsebenzisi we-Zendesk lokufakazela kwe-API (one-suffix /token).';
$string['settings:zendesk_token'] = 'Ithokheni Ye-API Ye-Zendesk';
$string['settings:zendesk_token_desc'] = 'Ithokheni ye-API yokufakazela kwe-Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Ukubonwa Kokungahlobene Nesihloko';
$string['settings:offtopic_heading_desc'] = 'Lungisa ukuthi ingxoxo ibanjelwa kanjani izingxoxo ezingahlobene nesihloko.';
$string['settings:offtopic_enabled'] = 'Vula Ukubonwa Kokungahlobene Nesihloko';
$string['settings:offtopic_enabled_desc'] = 'Yala i-AI ukuthi ibone futhi ibuze izingxoxo ezingahlobene nesihloko.';
$string['settings:offtopic_max'] = 'Inani Elikhulu Lezilayezo Ezingahlobene Nesihloko';
$string['settings:offtopic_max_desc'] = 'Inani lezilayezo ezilandelana ezingahlobene nesihloko ngaphambi kwesinyathelo.';
$string['settings:offtopic_action'] = 'Isinyathelo Sokungahlobene Nesihloko';
$string['settings:offtopic_action_desc'] = 'Okwenziwa uma umkhawulo wokungahlobene nesihloko ufinyelelwe.';
$string['settings:offtopic_action_warn'] = 'Xwayisa futhi buza';
$string['settings:offtopic_action_end'] = 'Vala ukufinyelela okwesikhashana';
$string['settings:offtopic_lockout_duration'] = 'Ubude Bokuvalwa (imizuzu)';
$string['settings:offtopic_lockout_duration_desc'] = 'Isikhathi eside (ngomzuzu) umfundi alahlekelwa ukufinyelela kumfundisi we-AI ngemuva kokweqa umkhawulo wokungahlobene nesihloko. Okuzenzakalelayo: imizuzu engu-30.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Ukuhlelwa Kokufunda & Izikhumbuzo';
$string['settings:studyplan_heading_desc'] = 'Lungisa izici zokuhlela ukufunda nezaziso zesikhumbuzo.';
$string['settings:studyplan_enabled'] = 'Vula Ukuhlelwa Kokufunda';
$string['settings:studyplan_enabled_desc'] = 'Vumela umfundisi we-AI ukusiza abafundi ukudala izinhlelo zokufunda ezikhethekile ezisekelwe ezikhathini ezitholakala.';
$string['settings:reminders_email_enabled'] = 'Vula Izikhumbuzo Ze-Imeyili';
$string['settings:reminders_email_enabled_desc'] = 'Vumela abafundi ukuzikhethela izikhumbuzo zokufunda nge-imeyili.';
$string['settings:reminders_whatsapp_enabled'] = 'Vula Izikhumbuzo Ze-WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Vumela abafundi ukuzikhethela izikhumbuzo zokufunda nge-WhatsApp (kudingeka ukusetiwa kwe-API ye-WhatsApp).';
$string['settings:whatsapp_api_url'] = 'I-URL Ye-API Ye-WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'I-endpoint ye-API yokuthumela imilayezo ye-WhatsApp (isib. Twilio, MessageBird). Kufanele yamukelane ne-POST kanye nomzimba we-JSON oqukethwe "to", "from", kanye "body".';
$string['settings:whatsapp_api_token'] = 'Ithokheni Ye-API Ye-WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Ithokheni yokufakazela ye-API ye-WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Inombolo Yomthumeli We-WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Inombolo yeselula yokuthumela imilayezo ye-WhatsApp (nekhodi izwe, isib. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Amazwe Avalwe We-WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Amakhodi amazwe ISO 3166-1 alpha-2 ahlukaniswa ngokhefana lapho izikhumbuzo ze-WhatsApp zingavunyelwe ngenxa yemithetho yendawo (isib. "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Isikhumbuzo Sokufunda: {$a}';
$string['reminder:email_body'] = 'Sawubona {$a->firstname},

Lesi isikhumbuzo sakho sokufunda se-"{$a->coursename}".

{$a->message}

Uhlelo lwakho lokufunda lucela amahora angu-{$a->hours_per_week} ngesonto kulesi sifundo.

Qhubeka nomsebenzi omuhle!

---
Ukuyeka ukuthola lezi zikhumbuzo, chofoza lapha: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Isikhumbuzo Sokufunda se-{$a->coursename}: {$a->message} (Phuma: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Igxile lokufunda lamuhla: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Phuma Ezikhumuzo Zokufunda';
$string['unsubscribe:success'] = 'Uphumile ngempumelelo ezikhumuzweni zokufunda zalesi sifundo.';
$string['unsubscribe:already'] = 'Usuphumile kulezi zikhumbuzo.';
$string['unsubscribe:invalid'] = 'Isixhumanisi sokuphumela esingalungile noma esiphelelwe.';
$string['unsubscribe:resubscribe'] = 'Ushintsha umqondo? Ungavula kabusha izikhumbuzo nge-chat yomfundisi we-AI.';

// Scheduled task.
$string['task:send_reminders'] = 'Thumela izikhumbuzo zokufunda zomfundisi we-AI';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Igcina izinhlelo zokufunda zabafundi.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'I-ID yomsebenzisi ongengamele uhlelo lwokufunda.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Isifundo uhlelo lwokufunda olunze kulo.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Amahora ngesonto umfundi ahlose ukufunda.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Imininingwane yohlelo lwokufunda ngefomathi ye-JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Igcina izifiso zezikhumbuzo nezinhlangano.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'I-ID yomsebenzisi obhalisiwe ezikhumuzweni.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Isinqubo sezikhumbuzo (imeyili noma whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Ikheli le-imeyili noma inombolo yeselula yezikhumbuzo.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Ikhodi yelizwe lomsebenzisi yokufezekisa imilawu.';

// Analytics dashboard.
$string['analytics:title'] = 'I-Analytics Yomfundisi we-AI';
$string['analytics:overview'] = 'Uhlolojikelele';
$string['analytics:total_conversations'] = 'Izingxoxo eziphelele';
$string['analytics:total_messages'] = 'Imilayezo ephelele';
$string['analytics:active_students'] = 'Abafundi abashishayo';
$string['analytics:avg_messages_per_student'] = 'Imilayezo everage ngomfundi';
$string['analytics:offtopic_rate'] = 'Izinga lokungahlobene nesihloko';
$string['analytics:escalation_count'] = 'Okukhushulelwa ekusekeleni';
$string['analytics:studyplan_adoption'] = 'Abafundi banezinhlelo zokufunda';
$string['analytics:usage_trends'] = 'Izimo Zokusetshenziswa';
$string['analytics:daily_messages'] = 'Ubukhulu bemilayezo yansuku zonke';
$string['analytics:hotspots'] = 'Izindawo Ezishisa Zesifundo';
$string['analytics:hotspots_desc'] = 'Izingxenye zesifundo ezikhunjulwa kakhulu kumibuzo yabafundi. Inani eliphezulu lingabonisa izindawo lapho abafundi bedinga ukusekela okuningi.';
$string['analytics:section'] = 'Ingxenye';
$string['analytics:mention_count'] = 'Ukuphawulwa';
$string['analytics:common_prompts'] = 'Izifanekiso Zezicelo Ezijwayelekile';
$string['analytics:common_prompts_desc'] = 'Izifanekiso zokunguqula ezibuya njalo kubafundi. Zibuyekezele ukuthi ubonise izikhala eziyisistimu emqukethweni wesifundo.';
$string['analytics:prompt_pattern'] = 'Isifanekiso';
$string['analytics:frequency'] = 'Inhlonhlo';
$string['analytics:recent_activity'] = 'Umsebenzi Wakamuva';
$string['analytics:no_data'] = 'Akukho i-data ye-analytics okwamanje. I-data izovela uma abafundi beqala ukusebenzisa umfundisi we-AI.';
$string['analytics:timerange'] = 'Ibanga lesikhathi';
$string['analytics:last_7_days'] = 'Izinsuku ezingu-7 ezedlule';
$string['analytics:last_30_days'] = 'Izinsuku ezingu-30 ezedlule';
$string['analytics:all_time'] = 'Sonke isikhathi';
$string['analytics:export'] = 'Khipha i-data';
$string['analytics:provider_comparison'] = 'Ukuqhathaniswa Komhlinzeki we-AI';
$string['analytics:provider_comparison_desc'] = 'Qhathanisa ukusebenza kumahlinzeki we-AI asetshenzisiwe kulesi sifundo.';
$string['analytics:provider'] = 'Umhlinzeki';
$string['analytics:response_count'] = 'Izimpendulo';
$string['analytics:avg_response_length'] = 'Ubude bempendulo everage';
$string['analytics:total_tokens'] = 'Amathokheni ephelele';
$string['analytics:avg_tokens'] = 'Amathokheni everage / impendulo';

// User settings.
$string['usersettings:title'] = 'Umsizi Wesifundo AI - Idatha Yakho';
$string['usersettings:intro'] = 'Phatha idatha yengxoxo yomfundisi wakho we-AI nezilungiselelo zobumfihlo';
$string['usersettings:privacy_info'] = 'Izingxoxo zakho nomfundisi we-AI zigcinwa ukuze zinikeze usekelo oluqhubekayo kulesi sifundo. Unelawulo eligcwele kule data futhi ungayisusa nganoma yisiphi isikhathi.';
$string['usersettings:usage_stats'] = 'Izibalo Zakho Zokusetshenziswa';
$string['usersettings:total_messages'] = 'Imilayezo ephelele';
$string['usersettings:total_conversations'] = 'Izingxoxo';
$string['usersettings:messages'] = 'Imilayezo';
$string['usersettings:last_activity'] = 'Umsebenzi wakamuva';
$string['usersettings:delete_course_data'] = 'Susa idatha yesifundo';
$string['usersettings:no_data'] = 'Awukasebenzisi umfundisi we-AI. Idatha yakho yokusetshenziswa izovela lapha uma uqala ukuxoxa.';
$string['usersettings:delete_all_title'] = 'Susa Yonke Idatha Yakho';
$string['usersettings:delete_all_warning'] = 'Lokhu kuzosusa ngokuphelele zonke izingxoxo zakho zomfundisi we-AI kuzo zonke izifundo. Lesi sinyathelo asikhezulwa.';
$string['usersettings:delete_all_button'] = 'Susa Yonke Idatha Yami';
$string['usersettings:confirm_delete_course'] = 'Uqinisekile ukuthi ufuna ukususa ngokuphelele yonke idatha yakho yomfundisi we-AI yesifundo "{$a}"? Lesi sinyathelo asikhezulwa.';
$string['usersettings:confirm_delete_all'] = 'Uqinisekile ukuthi ufuna ukususa ngokuphelele YONKE idatha yakho yomfundisi we-AI kuzo zonke izifundo? Lesi sinyathelo asikhezulwa.';
$string['usersettings:data_deleted'] = 'Idatha yakho isuswe.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Sawubona, {$a}! Ngingu-SOLA, umsizi wakho wokufunda online we-Saylor.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Vula SOLA';
$string['chat:change_avatar'] = 'Shintsha i-avatar';

$string['chat:quiz'] = 'Thatha uhlelo lokuhlola lokuzilolonga';
$string['chat:quiz_setup_title'] = 'Uhlelo Lokuhlola Lokuzilolonga';
$string['chat:quiz_questions'] = 'Inani lemibuzo';
$string['chat:quiz_topic'] = 'Isihloko';
$string['chat:quiz_topic_guided'] = 'Iqondiswa yi-AI (kusekelwe ekuthuthukeni kwakho)';
$string['chat:quiz_topic_default'] = 'Okuqukethwe kwesifundo samanje';
$string['chat:quiz_topic_custom'] = 'Isihloko esikhethiwe…';
$string['chat:quiz_custom_placeholder'] = 'Faka isihloko noma umbuzo...';
$string['chat:quiz_start'] = 'Qala Uhlelo Lokuhlola';
$string['chat:quiz_cancel'] = 'Khansela';
$string['chat:quiz_loading'] = 'Ikhiqiza uhlelo lokuhlola…';
$string['chat:quiz_error'] = 'Yehlulekile ukukhiqiza uhlelo lokuhlola. Sicela uzame futhi.';
$string['chat:quiz_correct'] = 'Kulungile!';
$string['chat:quiz_wrong'] = 'Akukho.';
$string['chat:quiz_next'] = 'Umbuzo olandelayo';
$string['chat:quiz_finish'] = 'Bona imiphumela';
$string['chat:quiz_score'] = 'Uhlelo lokuhlola luqediwe! Uthole {$a->score} kwi-{$a->total}.';
$string['chat:quiz_summary'] = 'Ngithe nqo ngaphothula uhlelo lokuhlola lokuzilolonga lemibuzo engu-{$a->total} ku-"{$a->topic}" futhi ngithole {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Izinhloso Zokufunda';
$string['chat:quiz_topic_modules'] = 'Isihloko Sesifundo';
$string['chat:quiz_subtopic_select'] = 'Khetha into ethile…';
$string['chat:quiz_topic_sections'] = 'Izingxenye Zesifundo';
$string['chat:quiz_score_great'] = 'Umsebenzi omuhle kakhulu! Uyazi kahle lo msebenzi.';
$string['chat:quiz_score_good'] = 'Umzamo omuhle! Qhubeka ubuyekeza ukuze uqinise ukuqonda kwakho.';
$string['chat:quiz_score_practice'] = 'Qhubeka uzilolonga — zama ukubuyekeza izinto ezihlobene zesifundo, bese uphinda uhlelo lokuhlola.';
$string['chat:quiz_review_heading'] = 'Buyekeza';
$string['chat:quiz_retake'] = 'Phinda Uhlelo Lokuhlola';
$string['chat:quiz_exit'] = 'Phuma Ehlolweni';
$string['chat:quiz_your_answer'] = 'Impendulo yakho';
$string['chat:quiz_correct_answer'] = 'Impendulo efanele';

$string['chat:starters_label'] = 'Iziqalo zengxoxo';
$string['chat:starter_quiz'] = 'Ngihlole';
$string['chat:starter_explain'] = 'Chaza Lokhu';
$string['chat:starter_key_concepts'] = 'Imiqondo Ebalulekile';
$string['chat:starter_study_plan'] = 'Uhlelo Lokufunda';
$string['chat:starter_help_me'] = 'Usizo Lwe-AI';
$string['chat:starter_ell_practice'] = 'Zilolonga Ukukhuluma';
$string['chat:starter_ell_pronunciation'] = 'Ukuphimisa Kwe-ELL';
$string['chat:starter_ai_coach'] = 'Uqeqeshi we-AI';
$string['chat:starter_speak'] = 'Khuluma isiqalo';

$string['chat:reset'] = 'Qala kabusha';

$string['chat:topic_picker_title'] = 'Ufuna ukugxila kuwona?';
$string['chat:topic_picker_title_help'] = 'Ufuna usizo ngani?';
$string['chat:topic_picker_title_explain'] = 'Ufuna ngikuchazele ini?';
$string['chat:topic_picker_title_study'] = 'Ufuna ukugxila esigabeni sini?';
$string['chat:topic_start'] = 'Qhubeka';

$string['chat:fullscreen'] = 'Isikrini esigcwele';
$string['chat:exitfullscreen'] = 'Phuma kwisikrini esigcwele';

$string['chat:language'] = 'Shintsha ulimi';
$string['chat:settings_panel'] = 'Izilungiselelo';
$string['chat:settings_language'] = 'Ulimi';
$string['chat:settings_avatar'] = 'I-Avatar';
$string['chat:settings_voice'] = 'Izwi';
$string['chat:settings_voice_admin'] = 'Izilungiselelo zezwi zilalelwa ebhodini lomphathi wezizinda.';

$string['chat:voice_mode'] = 'Imodi yezwi';
$string['chat:voice_end'] = 'Qeda iseshini yezwi';
$string['chat:voice_connecting'] = 'Iyaxhumana...';
$string['chat:voice_listening'] = 'Ilalela...';
$string['chat:voice_speaking'] = 'SOLA ikhuluma...';
$string['chat:voice_idle'] = 'Ilungile';
$string['chat:voice_error'] = 'Ukuxhumana kwezwi kuhlulekile. Sicela uhlole izilungiselelo zakho.';
$string['chat:quiz_locked'] = 'SOLA imisiwe ngesikhathi sokuhlola ukuze isekele ubuqotho bezemfundo. Ngikufisela inhlanhla!';
