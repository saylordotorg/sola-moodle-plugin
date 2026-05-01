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
$string['attachment:attach'] = 'Faka';
$string['attachment:attach_image_or_pdf'] = 'Faka isithombe noma i-PDF';
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
$string['chat:quiz_topic_adaptive']      = 'Okuhambelanayo — gxila kubuthakathaka bami';
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
$string['chat:voice_panel_title']       = 'Talk with {$a}';

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

// v3.9.10–v3.9.14 new strings.
$string['usersettings:download'] = 'Layisha idatha yami ye-{$a}';
$string['usersettings:download_help'] = 'Layisha ikhophi epheleleyo ye-JSON yawo wonke amarekhodi e-{$a} aboshelelwe ku-akhawunti yakho: izingxoxo, imilayezo, izilinganiso, izinhlelo zokufunda, izikhumbuzo, amaphuzu okuzilolonga, izimpendulo zenhlolovo, iphrofayela kanye namarekhodi okucwaningwa.';
$string['usersettings:privacy_notice_link'] = 'Funda isaziso sobumfihlo se-{$a}';
$string['privacy:title'] = 'Isaziso Sobumfihlo se-{$a}';
$string['admin:user_data:title'] = '{$a} — Ukukhipha nokususa idatha yomfundi';
$string['admin:user_data:intro'] = 'Indlela yokusebenza yesicelo se-GDPR Article 15 (ukufinyelela) noma Article 17 (ukususa). Bheka umfundi nge-id yomsebenzisi we-Moodle, buyekeza imigqa le pulagi eyibambele, bese ukhipha noma ususa.';
$string['admin:user_data:search_label'] = 'I-id yomsebenzisi we-Moodle';
$string['admin:user_data:lookup'] = 'Bheka';
$string['admin:user_data:not_found'] = 'Akekho umsebenzisi otholakele nge-id le.';
$string['admin:user_data:download'] = 'Layisha yonke idatha yomfundi njenge-JSON';
$string['admin:user_data:purge'] = 'Susa yonke idatha yomfundi yalo msebenzisi';
$string['admin:user_data:confirm_purge'] = 'Susa unaphakade onke amarekhodi e-{$a}? Lokhu kudlulela ezingxoxweni, kuyimilayezo, izilinganiso, izinhlelo zokufunda, izikhumbuzo, amaphrofayela, amaphuzu okuzilolonga, izinhlolovo, amarekhodi okucwaningwa kanye nempendulo. Akukwazi ukubuyiselwa.';
$string['admin:user_data:purged'] = 'Yonke idatha yomsebenzisi okhethiwe isusiwe.';
$string['chat:consent_heading'] = 'Ngaphambi kokuxoxa ne-{$a->product}';
$string['chat:consent_body'] = 'I-{$a->product) iyisisiza sokufunda esisuselwa ku-AI. Imilayezo yakho nezimpendulo ze-{$a->product} kugcinwa ku-database ye-Moodle ye-{$a->institution}, futhi izinkulumiswano eziyishumi zakamuva zithunyelwa kumphakeli wemodeli ye-AI ovumelekile ukuze aphendule imibuzo yakho. Igama lakho lokuqala lihlanganiswa ngenxa yokwenza okufanele wena; akukho olunye ulwazi olukubonisayo olutumelwe kumphakeli we-AI. Ungalayisha, ususe, noma uyeke ukusebenzisa i-{$a->product} noma kunini.';
$string['chat:consent_accept'] = 'Ngiyaqonda, qala i-{$a}';
$string['chat:consent_privacy_link'] = 'Funda isaziso sobumfihlo esiphelele';
$string['task:audit_cleanup'] = 'Ukuhlanza ithebula lokucwaningwa kwe-AI Course Assistant';
$string['task:conversation_retention'] = 'Umshanelo wokugcinwa kwezingxoxo we-AI Course Assistant';
$string['settings:audit_retention_days'] = 'Ukugcinwa kwerejista yokucwaningwa (izinsuku)';
$string['settings:audit_retention_days_desc'] = 'Umsebenzi ohleliwe wansuku zonke ususa imigqa yokucwaningwa endala kunalokhu. U-0 uyakhubaza. Okuzenzakalelayo u-365.';
$string['settings:conversation_retention_days'] = 'Ukugcinwa kwezingxoxo (izinsuku)';
$string['settings:conversation_retention_days_desc'] = 'Umsebenzi ohleliwe wansuku zonke ususa imigqa yezingxoxo onesikhathi sokushintshwa kokugcina esindala kunalokhu. U-0 uyakhubaza. Okuzenzakalelayo u-730.';
$string['settings:ssrf_trusted_endpoints'] = 'Amaphuzu Okugcina e-SSRF athembekile';
$string['settings:ssrf_trusted_endpoints_desc'] = 'I-URL eyodwa ngomugqa ngamunye. Ama-host afakwe ohlwini abhalo i-loopback / i-IP-eyimfihlo / i-https-kuphela kuvali we-SSRF se-SOLA. Sebenzisa lokhu kuphela kuma-LLM aphethwe-uqobo enethiwekhi oyiphethe — isibonelo <code>http://localhost:11434</code> ku-Ollama wendawo, <code>http://10.0.0.5:8000</code> kwi-pod ye-vLLM ku-VPC efanayo. Ukuqhathanisa kufana ne-scheme + host + port; noma yiyiphi indlela iyaliwa. Okuzenzakalelayo akuna lutho (vimba konke kwangaphakathi). Imigqa eqala nge-<code>#</code> ngamazwana.';
$string['task:learner_weekly_digest']    = 'Umsizi Wesifundo we-AI - Isifinyezo Saqobo Saqobo Lomfundi';
$string['learner_digest:subject']        = 'Isonto lakho ne-{$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Ufuna i-imeyili emfishane yamasonto onke yokuthi yini ozogxila kuyo okulandelayo?';
$string['next_best_action:get_started']           = 'Qala nge-{$a->title}. Ngivule futhi ubuze "ngisize nge-{$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Qala nge-{$a->title}. Imojuli "{$a->module}" ikuhlanganisa.';
$string['next_best_action:review']                = 'Buyekeza izisekelo ze-{$a->title} — ngivule futhi ubuze "chaza i-{$a->title} kimi njengomuntu omusha".';
$string['next_best_action:review_with_module']    = 'Buyekeza izisekelo ze-{$a->title} ku-"{$a->module}", bese ungivule nemibuzo.';
$string['next_best_action:practice']              = 'Yakha kulokho onakho ku-{$a->title}. Ngivule futhi ubuze "ngiphe isibonelo esixaziwe se-{$a->title}".';
$string['next_best_action:practice_with_module']  = 'Zijwayeze i-{$a->title} ngokuhambisana ne-"{$a->module}". Ngivule ngezibonelo ezixaziwe.';
$string['next_best_action:quiz']                  = 'Vimba i-{$a->title} ngesivivinyo esisheshayo. Ngivule futhi ukhethe "Ngivivinya — okuhambelanayo".';
$string['next_best_action:quiz_with_module']      = 'Vimba i-{$a->title} ngesivivinyo esisheshayo. Imojuli "{$a->module}" iyindawo ehlala kuyo.';
$string['next_best_action:empty_state']           = 'Wenza kahle kakhulu kuwo wonke umgomo njengamanje — akukho okuzokukhumbuza. Qhubeka.';
$string['next_best_action:header']                = 'Nakhu izinto ezingu-{$a} ongagxila kuzo okulandelayo:';
$string['learner_digest:unsubscribe_done_title']  = 'Ukhanseliwe';
$string['learner_digest:unsubscribe_done_body']   = 'Kwenziwe — ngeke usathola ama-imeyili amasonto onke alesi sifundo aphuma ku-{$a->product}. Ungakwazi ukubhalisa futhi nganoma yisiphi isikhathi kusukela kuwindi lengxoxo esifundweni sakho.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Isixhumanisi sokukhansela asisasebenzi';
$string['learner_digest:unsubscribe_invalid_body']  = 'Lesi sixhumanisi sokukhansela siphelelwe yisikhathi noma sonakele. Ungakwazi ukulawula okuncamelayo kwe-imeyili kusuka kuzilungiselelo zesifundo sakho.';
$string['active_learners:line']                   = 'Abanye abangu-{$a} bafunda lesi sifundo njengamanje.';
$string['active_learners:line_global']             = 'Abanye abangu-{$a} bafunda njengamanje.';
$string['settings:active_learners_scope']          = 'Ububanzi besikhombi sabafundi abasebenzayo';
$string['settings:active_learners_scope_desc']     = 'Ngabe isikhombi sokuthi "abanye bafunda njengamanje" ngenhla kwabasunguli bengxoxo sibala abafundi esifundweni esifanayo kuphela noma abafundi kuyo yonke isayithi. Okuzenzakalelayo <strong>okwehlabathi</strong>.';
$string['settings:active_learners_scope_global']   = 'Okwehlabathi (noma yisiphi isifundo)';
$string['settings:active_learners_scope_course']   = 'Sesifundo kuphela';
$string['learner_digest:optin_yes']      = 'Yebo, ngithumelele i-imeyili yamasonto onke';
$string['learner_digest:optin_no']       = 'Cha ngiyabonga';
$string['learner_digest:optin_thanks']   = 'Kulungile. Uzothola isifinyezo samasonto onke njalo ngoMsombuluko.';
$string['learner_digest:optin_declined'] = 'Kulungile. Awekho ama-imeyili - vele ungivule noma yinini ofuna ukubheka.';
$string['settings:xai_proxy_url'] = 'I-URL ye-proxy ye-xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'I-URL ye-wss yomphakathi yenkonzo ye-proxy ye-SOLA xAI Realtime (isibonelo wss://voice.example.com/xai-rt/rt). Lapho lokhu kusethwa kanye nesihloko se-JWT, izwi le-xAI lihamba nge-proxy futhi ukhiye omkhulu we-xAI API awufiki ku-isiphequluli. Yishiye ingenalutho ukuze ubuyele ekuxhumeni okuqondile (akunconywa ngokukhiqiza).';
$string['settings:xai_proxy_jwt_secret'] = 'Imfihlo ye-JWT ye-proxy ye-xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Imfihlo ehlanganyelwe ye-HS256 esetshenziswa ukusayina amathokheni eseshini afushane we-proxy ye-xAI Realtime. Kufanele ifane nemfihlo ye-MOODLE_JWT_SECRET ku-Cloudflare Worker. Yiguqule ngezikhathi ezithile.';
$string['admin:vendor_dpa:title'] = '{$a} — Isimo se-DPA somthengisi';
$string['admin:vendor_dpa:intro'] = 'Ukungaqeqesheki, i-DPA, kanye nokuma kokugcinwa kwawo wonke umshayeli womphakeli we-AI. Sebenzisa lokhu ukuze unqume ukuthi yiziphi izishayeli ozivumayo kusayithi yakho. Ukuhambisa kweTier 2 nokuphezulu kudinga i-DPA esayinwe nokungavumi ukuqeqeshwa okusenkontilekeni.';
$string['admin:vendor_dpa:maintenance_note'] = 'Leli thebula ligcinwa ku-classes/vendor_registry.php. Lihlaziye lapho ushintsho lwe-ToS lomthengisi lufika.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'I-imeyili ye-Officer Yokuvikelwa Kwedatha';
$string['settings:dpo_email_desc'] = 'I-imeyili yokuxhumana eboniswa esazisweni sobumfihlo sabafundi ngaphansi kwe-"Contact". Yishiye ingenalutho ukuze ufihle umugqa. Izinhlelo ezishintshwe igama kufanele zikhombe lokhu ku-DPO yazo.';
$string['settings:privacy_external_url'] = 'I-URL yekhasi lobumfihlo lesikhungo';
$string['settings:privacy_external_url_desc'] = 'Isixhumanisi sekhasi lobumfihlo elingezinga lesikhungo, eliboniswa esazisweni sobumfihlo sabafundi ngaphansi kwe-"Contact". Yishiye ingenalutho ukuze ufihle umugqa.';
$string['settings:privacy_notice_override'] = 'Ukuchitshiyelwa kwesaziso sobumfihlo (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Uma kusethwa, le-HTML imelela isaziso sobumfihlo sokuzenzakalelayo se-brand esikhanyiswa ku-/local/ai_course_assistant/privacy.php. Sebenzisa lokhu ukufaka umbhalo obukezwe ngabezomthetho wesikhungo sakho ngaphandle kokuhlela ikhodi. Yishiye ingenalutho ukuze usebenzise isaziso sokuzenzakalelayo, esithatha umbhalo waso kuma-key e-config asikhombisa we-branding.';
$string['objectives:title'] = 'Imigomo yokufunda nokuhlonipha';
$string['objectives:toggles_heading'] = 'Ukulandelela ukuhlonipha';
$string['objectives:toggle_master'] = 'Vumela ukulandelela ukuhlonipha kwale sifundo';
$string['objectives:toggle_chip'] = 'Bonisa i-tag ye-Mastery Yokufunda kubafundi';
$string['objectives:toggle_chip_help'] = 'Okukhethwayo. Lapho kuvalwe, ukuhlonipha kuyaqhubeka kuqondisa umsizi ngokuthuleyo kodwa abafundi ababoni nesithombisi.';
$string['objectives:toggled'] = 'Isilungiselelo silungisiwe.';
$string['objectives:detected_heading'] = 'Kutholwe imigomo yokufunda engu-{$a->count} kusukela ku-{$a->source}.';
$string['objectives:source_competency'] = 'amakhono e-Moodle';
$string['objectives:source_summary'] = 'isifinyezo sesifundo';
$string['objectives:source_section'] = 'isigaba noma okuqukethwe ekhasini lokuqala';
$string['objectives:source_page'] = 'ikhasi lesifundo';
$string['objectives:source_llm'] = 'ukukhipha nge-AI';
$string['objectives:source_manual'] = 'ukufakwa ngesandla';
$string['objectives:source_none'] = 'awukho umthombo ozenzakalelayo';
$string['objectives:import_detected'] = 'Ngenisa lemigomo etholakele';
$string['objectives:import_llm'] = 'Khipha imigomo nge-AI';
$string['objectives:llm_empty'] = 'Ukukhipha nge-AI akubuyiselanga noma yimuphi umgomo. Zama futhi kamuva noma ufake ngesandla.';
$string['objectives:imported'] = 'Kungeniswe imigomo engu-{$a}.';
$string['objectives:none_detected'] = 'Ayikho imigomo yokufunda etholakele ngokuzenzakalelayo. Yifake ngesandla ngezansi, noma usebenzise ukukhipha nge-AI.';
$string['objectives:list_heading'] = 'Imigomo yamanje';
$string['objectives:col_code'] = 'Ikhodi';
$string['objectives:col_title'] = 'Isihloko';
$string['objectives:col_source'] = 'Umthombo';
$string['objectives:col_actions'] = 'Izenzo';
$string['objectives:add_heading'] = 'Engeza umgomo';
$string['objectives:add_submit'] = 'Engeza umgomo';
$string['objectives:saved'] = 'Umgomo ulondoloziwe.';
$string['objectives:deleted'] = 'Umgomo ususiwe.';
$string['objectives:delete_confirm'] = 'Susa lo mgomo nawo wonke umlando wokuzama wawo?';
$string['objectives:delete_all'] = 'Susa yonke imigomo yale sifundo';
$string['objectives:delete_all_confirm'] = 'Susa wonke umgomo nawo wonke umlando wokuzama wale sifundo? Akukwazi ukubuyiselwa.';
$string['objectives:deleted_all'] = 'Yonke imigomo yale sifundo isusiwe.';
$string['mastery:chip_aria'] = 'Isimo sokuhlonipha ukufunda';
$string['mastery:popover_aria'] = 'Imininingwane yokuhlonipha ukufunda';
$string['mastery:chip_label'] = '{$a->mastered} kwe-{$a->total} okuhloniphekile';
$string['mastery:status_mastered'] = 'kuhloniphekile';
$string['mastery:status_learning'] = 'kuyaqhubeka';
$string['mastery:status_not_started'] = 'akuqalile';
$string['mastery:popover_empty'] = 'Ayikho imigomo yokufunda elungisiwe yale sifundo.';
$string['settings:mastery_heading'] = 'Ukulandelela ukuhlonipha';
$string['settings:mastery_heading_desc'] = 'Isici esivumelekile ngesifundo ngasinye esimaka izimpendulo ze-quiz nezinkulumiswano zomsizi ngokumelene nemigomo yokufunda yesifundo, bese sifaka isithombe esiqoqekile sokuhlonipha emuva ku-system prompt ukuze siqondise imibuzo. Kuthuleke ngokuzenzakalelayo: abafundi ababoni lutho ngaphandle uma uphawu lwe-toggle yesifundo ngasinye lukhanyisiwe.';
$string['settings:mastery_threshold'] = 'Umkhawulo wokuhloniphekile';
$string['settings:mastery_threshold_desc'] = 'Ukunemba okugijima okungaphezulu noma okulinganayo nokho lapho umgomo uthathwa njengohloniphekile. 0.0 ku-1.0. Okuzenzakalelayo u-0.85.';
$string['settings:mastery_window'] = 'Ifasitela lokuzama';
$string['settings:mastery_window_desc'] = 'Inombolo yokuzama kwakamuva ngomgomo ngamunye ukuze sisindwe ukunemba okugijima. Okuzenzakalelayo u-8.';
$string['settings:mastery_decay_enabled']        = 'Vumela ukwehla kobuchwepheshe';
$string['settings:mastery_decay_enabled_desc']   = 'Lapho kuvulwa, amaphuzu obuchwepheshe ehla ngokuhamba kwesikhathi kuqhathaniswa nesitembu sesikhathi sokuzama sakamuva. Inhloso eyake yagcina ngaphambili ibuyela "ekufundeni" ngemva kwesikhathi esanele. Ayehleli ngaphansi kwe-"ekufundeni". <strong>Okuzenzakalelayo kuvalwe ku-v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Ihhafu lempilo lokwehla kobuchwepheshe (izinsuku)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Ihhafu lempilo ngezinsuku. Amaphuzu aphindeka ngo-0.5 ^ (izinsuku kusukela ekuzameni kokugcina / ihhafu lempilo). Okuzenzakalelayo 30. Kusetshenziswa kuphela uma ukwehla kuvuliwe.';
$string['settings:mastery_classifier_model'] = 'Imodeli yomhleli';
$string['settings:mastery_classifier_model_desc'] = 'Imodeli esetshenziselwa ukuhlela izinkulumiswano zomsizi ngokumelene nemigomo. Yishiye ingenalutho ukuze ifolele imodeli yokuzenzakalelayo yomphakeli we-AI; ngaphandle kwalokho cacisa imodeli eshibhile njenge-gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Isisindo somhleli';
$string['settings:mastery_classifier_weight_desc'] = 'Inani lokuzama kwengxoxo elibalwa ngokuqondene nokuzama kwe-quiz (1.0). Okuzenzakalelayo u-0.3.';
$string['settings:mastery_classifier_threshold'] = 'Umkhawulo wethemba lomhleli';
$string['settings:mastery_classifier_threshold_desc'] = 'Ithemba elincane lomhleli elidingekayo ukubhala okuzanywayo kwengxoxo. 0.0 ku-1.0. Okuzenzakalelayo u-0.7.';
$string['chat:mode_progress'] = 'Inqubekela phambili';
$string['objectives:toggle_dashboard'] = 'Bonisa ithebhu yedeshibhodi yeNqubekela phambili kubafundi';
$string['objectives:toggle_dashboard_help'] = 'Okukhethwayo. Yengeza ithebhu yeNqubekela phambili eduze kwe-Chat / Voice / History ngaphakathi kwe-widget. Le thebhu ibonisa abafundi ukuthi yiziphi imigomo abayihloniphile, eqhubekayo, neyabo abangaqalile.';
$string['mastery:dashboard_title'] = 'Inqubekela phambili yokufunda kwakho';
$string['mastery:dashboard_subtitle'] = 'Ukuhlonipha kulinganiswa ezimpendulweni zakho ze-quiz nasekuzilolongeni kwengxoxo. Qhubeka — ukujula kuhlula ububanzi.';
$string['mastery:dashboard_refresh'] = 'Vuselela';
$string['mastery:section_mastered'] = 'Kuhloniphekile';
$string['mastery:section_learning'] = 'Kuyaqhubeka';
$string['mastery:section_not_started'] = 'Akuqalile';
$string['mastery:summary_label'] = '{$a->mastered} kwe-{$a->total} imigomo ehloniphekile';
$string['mastery:ask_about'] = 'Buza ngalokhu';
$string['mastery:celebrate'] = 'Uyihlonipha yonke imigomo yale sifundo. Umsebenzi omuhle.';
$string['mastery:ask_template'] = 'Ngisize ngizilolonge nokujulisa ukuqonda kwami kulo mgomo: {$a}.';
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
