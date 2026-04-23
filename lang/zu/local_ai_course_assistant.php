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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Okuzenzakalelayo kwezifundo ezintsha';
$string['settings:default_course_mode_desc'] = 'Ilawula ukuthi ngabe i-SOLA ivela yini esifundweni uma kungekho ukukhetha ngesifundo ngasinye okwenziwe. Ukufakwa okusha kuzenzakalela ku-"Kukhutshaziwe ngokuzenzakalelayo" ukuze ababengameli bakwazi ukukhetha ngesifundo ngasinye ekhasini le-Analytics noma ekhasini le-Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Kukhutshaziwe ngokuzenzakalelayo (nika amandla ngesifundo ngasinye)';
$string['settings:default_course_mode_all'] = 'Inikwe amandla kuzo zonke izifundo';
$string['settings:auto_open'] = 'Vula ngokuzenzakalelayo ekuvakasheleni kokuqala';
$string['settings:auto_open_desc'] = 'Uma kunikwe amandla, ishalofu le-SOLA livuleka ngokuzenzakalelayo okokuqala uma umfundi efika kuyo yonke isifundo. Ukulayisha kwamakhasi okulandelayo kuso lesi sifundo akuvuli ishalofu futhi — isimo silandelelwa ngesifundo ngasinye kusiphequluli somfundi nge-localStorage. Kusebenza kwi-desktop nakwi-mobile. Kungashintshwa ngesifundo ngasinye ekhasini le-Course AI Settings.';
$string['settings:comparison_providers'] = 'Abahlinzeki bokuqhathanisa (isikhethi se-LLM)';
$string['settings:comparison_providers_desc'] = 'Engeza abahlinzeki be-AI abangezelelwe kusikhethi se-LLM esikuwidgethi ukuze abaphathi bakwazi ukuqhathanisa izimpendulo phakathi kwabahlinzeki. Sebenzisa ithebula elingezansi ukuze ungeze imigqa. Ikholomu yokushisa iyakhetheka (ishiye ingenalutho ukuze usebenzise ukushisa komhlaba wonke). Ifomethi egciniwe: provider_id|api_key|model1,model2|temperature. Umhlinzeki oyinhloko olungiselelwe ngenhla uhlala efakiwe ngokuzenzakalela. Abaphathi abanekwazi lokuphatha kuphela abayibona isikhethi; abafundi abasiboni nanini. Ama-provider IDs asebenzayo: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Umhlinzeki we-AI ozenzakalelayo';
$string['settings:provider_desc'] = 'Khetha umhlinzeki we-AI ozosetshenziswa ekuqedeleni ingxoxo. Khetha i-"Moodle AI (core_ai subsystem)" ukuze udlulisele izicelo ngokusethwa kwe-AI okwakhelwe ngaphakathi kwe-Moodle ku-Site admin > AI; ikhii ye-API, imodeli, kanye namafildi e-URL eyisisekelo angezansi anganakwa kulesiyo mode. I-Streaming, ukusetshenziswa kwethuluzi, kanye ne-prompt caching ayitholakali nge-core_ai — izimpendulo zilethwa njengesiqephu esisodwa. Sebenzisa umhlinzeki oqondile ukuze uthole ulwazi lomfundi oluhle kakhulu.';
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
$string['settings:avatar_saylor'] = 'Uphawu lwe-{$a} (Okuzenzakalelayo)';
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
$string['coursesettings:sola_enabled'] = 'I-SOLA kulesi sifundo';
$string['coursesettings:sola_enabled_toggle'] = 'Bonisa iwijethi ye-SOLA kulesi sifundo';
$string['coursesettings:sola_enabled_desc'] = 'Ilawula ukuthi iwijethi yengxoxo ye-SOLA ivela yini kulesi sifundo. Okuzenzakalelayo kwesizindalwazi sonke kusethwa kuzilungiselelo zesengezo ngaphansi kwe-General > Default for new courses.';
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
$string['chat:clear'] = 'Clear screen';
$string['chat:clear_confirm'] = 'Clear the visible messages? Your full chat history stays saved and can be reloaded by reopening the widget.';
$string['chat:copy'] = 'Kopisha ingxoxo';
$string['chat:copied'] = 'Ingxoxo ikopishiwe ku-clipboard';
$string['chat:copy_failed'] = 'Ukukopisha ingxoxo kuhlulekile';
$string['chat:thinking'] = 'Ngicabanga...';
$string['chat:error'] = 'Ngiyaxolisa, kukhona okungahambanga kahle. Sicela uzame futhi.';
$string['chat:error_auth'] = 'Iphutha lokufakazela. Sicela uxhumane nomphathi wakho.';
$string['chat:error_ratelimit'] = 'Izicelo eziningi kakhulu. Sicela ulinde umzuzu bese uzama futhi.';
$string['chat:error_unavailable'] = 'Isevisi ye-AI ayitholakali okwesikhashana. Sicela uzame futhi kamuva.';
$string['chat:error_notconfigured'] = 'Umfundisi we-AI akakasetiwe. Sicela uxhumane nomphathi wakho.';
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

$string['chat:greeting'] = 'Sawubona, {$a}! Ngingu-SOLA. Ngingakusiza kanjani namuhla?';
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
$string['chat:starter_quiz'] = 'Ngihlole Ngalokhu';
$string['chat:starter_explain'] = 'Chaza Lokhu';
$string['chat:starter_key_concepts'] = 'Imiqondo Ebalulekile';
$string['chat:starter_study_plan'] = 'Uhlelo Lokufunda';
$string['chat:starter_help_me'] = 'Usizo Lwe-AI';
$string['chat:starter_ai_project_coach'] = 'Umqeqeshi Wephrojekthi ye-AI';
$string['chat:starter_ell_practice'] = 'Ukuzilolongela Ingxoxo';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Amanothi';

// History panel.
$string['chat:history_title'] = 'Amanothi nomlando wengxoxo';
$string['task:send_inactivity_reminders'] = 'Thumela ama-imeyili esikhumbuzo samasonto ngokungasebenzi';
$string['messageprovider:study_notes'] = 'Amanothi esikhathi sokufunda';
$string['task:send_inactivity_reminders'] = 'Thumela ama-imeyili esikhumbuzo sokungasebenzi njalo ngesonto';
$string['task:run_meta_ai_query'] = 'Sebenzisa umbuzo wokuhlaziya we-Learning Radar ohleliwe';
$string['messageprovider:study_notes'] = 'Amanothi eseshini yokufunda';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Ukulethwa kwe-Frontend';
$string['settings:cdn_heading_desc'] = 'Nikeza ama-asset e-frontend e-SOLA (JS/CSS) kusuka ku-CDN yangaphandle esikhundleni sohlelo lwamafayela lwe-Moodle. Lokhu kuvumela izibuyekezo ze-frontend ngaphandle kokuthuthukisa i-plugin. Shiya i-CDN URL ingenalutho ukusebenzisa amafayela e-plugin wendawo.';
$string['settings:cdn_url'] = 'I-CDN URL Eyisisekelo';
$string['settings:cdn_url_desc'] = 'I-URL eyisisekelo lapho kuphethwe khona i-sola.min.js ne-sola.min.css. Isibonelo: https://your-org.github.io/sola-cdn. Shiya ingenalutho ukusebenzisa amafayela e-plugin wendawo.';
$string['settings:cdn_version'] = 'Inguqulo Yempahla ye-CDN';
$string['settings:cdn_version_desc'] = 'Uchungechunge lwenguqulo olwengezwa kuma-CDN URLs ngenxa ye-cache busting. Buyekeza ngemva kwe-CDN deploy ngayinye (isib. 3.2.4 noma i-commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Ukusetshenziswa kwangempela';
$string['analytics:tab_bycourse'] = 'Ngekosi';
$string['analytics:tab_comparison'] = 'AI nabangazisebenzisi';
$string['analytics:tab_byunit'] = 'Ngeyunithi';
$string['analytics:tab_usagetypes'] = 'Izinhlobo zokusetshenziswa';
$string['analytics:tab_themes'] = 'Izihloko';
$string['analytics:tab_feedback'] = 'Impendulo ye-AI';
$string['analytics:total_students'] = 'Isibalo sabafundi';
$string['analytics:active_users'] = 'Abasebenzisi be-AI abasebenzayo';
$string['analytics:msgs_per_student'] = 'Imilayezo ngomfundi';
$string['analytics:avg_session'] = 'Isikhathi esilinganiselwa sesikhathi';
$string['analytics:return_rate'] = 'Izinga lokubuya';
$string['analytics:total_sessions'] = 'Isibalo sezikhathi';
$string['analytics:thumbs_up'] = 'Isithupha phezulu';
$string['analytics:thumbs_down'] = 'Isithupha phansi';
$string['analytics:hallucination_flags'] = 'Izimpawu zokunganembi';
$string['analytics:msgs_to_resolution'] = 'Imilayezo kuze kuxazululwe';
$string['analytics:helpful'] = 'Kusiza';
$string['analytics:not_helpful'] = 'Akusizi';
$string['analytics:flag_hallucination'] = 'Le mpendulo inemininingwane enganembi';
$string['analytics:submit_rating'] = 'Thumela';
$string['analytics:thanks_feedback'] = 'Siyabonga ngempendulo yakho';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Chaza leli khasi';
$string['chat:starter_ask_anything'] = 'Buza noma yini';
$string['chat:starter_review_practice'] = 'Buyekeza futhi uzipratize';
$string['chat:history_saved_subtitle'] = 'Izimpendulo ezilondoloziwe zihlala kule divayisi yalesi sifundo.';
$string['chat:history_saved_empty'] = 'Londoloza impendulo ye-AI ukuze uyibone lapha.';
$string['chat:history_views_label'] = 'Imibono yomlando';
$string['chat:history_view_saved'] = 'Okulondoloziwe';
$string['chat:history_view_recent'] = 'Umlando';
$string['chat:debug_refresh'] = 'Vuselela';
$string['chat:debug_copy_all'] = 'Kopisha konke';
$string['chat:debug_close'] = 'Vala';
$string['chat:language_switch'] = 'Shintsha ulimi';
$string['chat:language_dismiss'] = 'Cashisa isiphakamiso solimi';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Khetha umhlinzeki we-LLM';
$string['chat:llm_model_label'] = 'Imodeli';
$string['chat:llm_model_select'] = 'Khetha imodeli ye-LLM';
$string['chat:footer_usertesting'] = 'Ukuhlolwa kokusebenziseka';
$string['chat:footer_feedback'] = 'Impendulo';
$string['chat:voice_panel_title'] = 'Khuluma no-{$a} (Okulingwayo)';

// Additional translated strings.
$string['chat:debug_context'] = 'Ukulungisa isimo';
$string['chat:debug_context_browser'] = 'Isithombe sesiphequluli';
$string['chat:debug_context_copy'] = 'Kopisha';
$string['chat:debug_context_prompt'] = 'Impendulo yeseva';
$string['chat:debug_context_request'] = 'Isicelo se-SSE sokugcina';
$string['chat:debug_context_toggle'] = 'Guqula umhloli';
$string['chat:history_empty'] = 'Akukho izingxoxo.';
$string['chat:history_refresh'] = 'Vuselela';
$string['chat:history_subtitle'] = 'Imilayezo yakho yakamuva.';
$string['chat:starter_explain_prompt'] = 'Chaza umqondo obaluleke kakhulu?';
$string['chat:starter_help_lesson'] = 'Chaza lokhu';
$string['chat:starter_help_lesson_prompt'] = 'Ngisiza ukuqonda isifundo. Finyeza izimvo ezibalulekile.';
$string['chat:starter_prompt_coach'] = 'Umqeqeshi AI';
$string['chat:starter_quick_study'] = 'Ukufunda okusheshayo';
$string['chat:starter_study_plan_prompt'] = 'Ngifuna ukuhlela ukufunda. Buza: (1) umgomo, (2) isikhathi. Hlaziya uhlelo.';
$string['chat:voice_copy'] = 'Ingxoxo yezwi nomsizi.';
$string['chat:voice_ready'] = 'Kulungele';
$string['chat:voice_start'] = 'Qala';
$string['chat:voice_title'] = 'Khuluma ne-SOLA';
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
$string['mobile_chip_concepts'] = 'Izimvo ezibalulekile';
$string['mobile_chip_quiz'] = 'Isivivinyo';
$string['mobile_chip_studyplan'] = 'Uhlelo lokufunda';
$string['mobile_clear'] = 'Sula umlando';
$string['mobile_disabled'] = 'SOLA ayitholakali kulesi sifundo.';
$string['mobile_placeholder'] = 'Buza umbuzo...';
$string['mobile_welcome'] = 'Sawubona, {$a}!';
$string['mobile_welcome_sub'] = 'NginguSOLA, umsizi wakho wokufunda. Ngingakusiza kanjani?';
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
$string['rubric:done'] = 'Kuqediwe';
$string['rubric:encourage_high'] = 'Kuhle kakhulu! Qhubeka!';
$string['rubric:encourage_low'] = 'Ukuqala okuhle! Ukuzijwayeza njalo kuzosiza.';
$string['rubric:encourage_mid'] = 'Umzamo omuhle! Qhubeka uzijwayeze.';
$string['rubric:overall'] = 'Siphelele';
$string['rubric:practice_again'] = 'Zijwayeze futhi';
$string['rubric:score_title_conversation'] = 'Amaphuzu okuzijwayeza ingxoxo';
$string['rubric:score_title_pronunciation'] = 'Amaphuzu okuzijwayeza ukuphimisa';
$string['rubric:scoring'] = 'Kuhlolwa...';
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
