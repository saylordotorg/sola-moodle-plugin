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
 * Language strings for local_ai_course_assistant — Somali (Soomaali).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Kaaliyaha Koorsada AI';
$string['attachment:attach'] = 'Lifaaq';
$string['attachment:attach_image_or_pdf'] = 'Lifaaq sawir ama PDF';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Kaydiya wada-hadalada barida AI ee isticmaalaha iyo koorsada kasta.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID-ga isticmaalaha leh wada-hadalkii.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID-ga koorsada ay wada-hadalku u dhigan tahay.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Cinwaanka wada-hadalka.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Wakhtiga la abuuray wada-hadalka.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Wakhtiga ugu dambeeyay ee la wax ka beddelay wada-hadalka.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Kaydiya fariimaha shakhsi ahaaneed ee wada-hadalada.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID-ga isticmaalaha u diray fariimaha.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID-ga koorsada ay fariimahu u dhigan tahay.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Doorka qofka diray fariimaha (isticmaale ama kaaliye).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Nuxurka fariimaha.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Tirada tokens-ka la isticmaalay fariimaha.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Wakhtiga la abuuray fariimaha.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Isticmaal wada-hadalka barida AI';
$string['ai_course_assistant:viewanalytics'] = 'Fiiri analytics-ka wada-hadalka barida AI';
$string['ai_course_assistant:manage'] = 'Maaree dejinta wada-hadalka barida AI (Doorka Maamulaha)';

// Settings.
$string['settings:enabled'] = 'Fur Kaaliyaha Koorsada AI';
$string['settings:enabled_desc'] = 'Fur ama xidh widget-ka Kaaliyaha Koorsada AI ee bogagga koorsada.';
$string['settings:default_course_mode'] = 'Caadiga koorsooyinka cusub';
$string['settings:default_course_mode_desc'] = 'Waxay kontoroshaa haddii SOLA uu ka soo muuqado koorso marka aan la sameyn xulasho koorso-koorso ah. Rakibitaannada cusub waxay u caadi yihiin "Caadi ahaan la damiyay" si maamulayaashu ay u awoodaan in ay koorso-koorso u dhiibaan laga bilaabo bogga Analytics ama bogga Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Caadi ahaan la damiyay (kala daro koorso koorso)';
$string['settings:default_course_mode_all'] = 'Waxa la kala daray dhammaan koorsooyinka';
$string['settings:auto_open'] = 'Si toos ah u fur booqashada koowaad';
$string['settings:auto_open_desc'] = 'Marka la awood-geliyo, drawer-ka SOLA waxa uu si toos ah u furmaa markii ugu horreysay ee arday uu galo koorso kasta. Soo-rarista bogagga ee xiga ee koorso isku mid ah ma furayaan drawer-ka mar kale — xaaladda waxa la raacaa koorso kasta browser-ka ardayga iyada oo loo marayo localStorage. Wuxuu khuseeyaa desktop iyo mobile. Waa la dhaafi karaa koorso kasta laga bilaabo bogga Course AI Settings.';
$string['settings:comparison_providers'] = 'Bixiyeyaasha isbarbardhigga (doorashada LLM)';
$string['settings:comparison_providers_desc'] = 'Ku dar bixiyeyaal AI dheeraad ah xulashada LLM ee widget-ka si maamulayaasha ay ugu wada barbar dhigi karaan jawaabaha bixiyeyaasha. Isticmaal shaxda hoose si aad u darto safafka. Tiirka heerkulka waa ikhtiyaari (banaan uga tag si aad u isticmaasho heerkulka guud). Qaabka la kaydiyay: provider_id|api_key|model1,model2|temperature. Bixiyaha aasaasiga ah ee kor lagu habeeyey weligiis si toos ah ayaa loo daraa. Maamulayaasha leh awoodda maaraynta keliya ayaa arka xulashada; ardaydu marnaba ma arkaan. Provider IDs sax ah: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Bixiyaha AI ee caadiga ah';
$string['settings:provider_desc'] = 'Dooro bixiyaha AI si loo isticmaalo dhammaystirka sheekada. Dooro "Moodle AI (core_ai subsystem)" si codsiyada loogu marsiiyo dejinta AI-ga ku dhex jira Moodle ee Site admin > AI; furaha API, nooca iyo goobaha URL-ka saldhiga ah ee hoose waa laga gudbaa qaabkaas. Streaming, isticmaalka qalabka, iyo prompt caching lama heli karo iyada oo loo marayo core_ai — jawaabaha waxaa la siiyaa sidii hal qaybood. Isticmaal bixiye toos ah si loo helo waayo-aragnimada ardayga ugu fiican.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Maxaliga)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Gaarka ah (Waafaqsan OpenAI)';
$string['settings:apikey'] = 'Furaha API';
$string['settings:apikey_desc'] = 'Furaha API ee bixiyaha la doortay. Looma baahna Ollama.';
$string['settings:model'] = 'Magaca Modhel-ka';
$string['settings:model_desc'] = 'Modhel-ka la isticmaalay. Default-ku waxuu ku xidhan yahay bixiyaha (tusaale claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL-ka Aasaaska API';
$string['settings:apibaseurl_desc'] = 'URL-ka aasaaska ee API-ga. Si toos ah ayaa loo buuxiyaa bixiyaha kasta laakiin waa la beddeli karaa. Ka tag oo madhan default-ka bixiyaha.';
$string['settings:systemprompt'] = 'Qaab-dhismeedka Tilmaanta Nidaamka';
$string['settings:systemprompt_desc'] = 'Tilmaanta la u dirayo AI. Isticmaal meel-buuxiyeyaasha: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Adiga waxaad tahay bari AI oo kaalmeeya koorso "{{coursename}}". Doorka ardayda waa {{userrole}}.

Mawduucyada koorsada la daboolay:
{{coursetopics}}

Caawin ardayga si uu u fahmo agabka koorsada. Noqo mid dhiirigeliya, cad, oo waxbarasho u fiican.';
$string['settings:temperature'] = 'Heerkulka';
$string['settings:temperature_desc'] = 'Xukuma xasilloonida. Qiyamka hoose waa mid diiradda leh, qiyamka sare waa mid hal-abuur badan. Kala-duwanaanshaha: 0.0 ilaa 2.0.';
$string['settings:maxhistory'] = 'Taariikhda Ugu Badan ee Wada-hadalka';
$string['settings:maxhistory_desc'] = 'Tirada ugu badan ee labada fariin ee lagu daray codsiyada API. Fariimaha hore ayaa la gooynayaa.';
$string['settings:avatar'] = 'Avatar-ka Wada-hadalka';
$string['settings:avatar_desc'] = 'Dooro summadda avatar-ka ee badhanka widget-ka wada-hadalka.';
$string['settings:avatar_saylor'] = 'Summadda {$a} (Default)';
$string['settings:position'] = 'Goobta Widget-ka';
$string['settings:position_desc'] = 'Goobta widget-ka wada-hadalka ee bogga.';
$string['settings:position_br'] = 'Midig hoose';
$string['settings:position_bl'] = 'Bidix hoose';
$string['settings:position_tr'] = 'Midig sare';
$string['settings:position_tl'] = 'Bidix sare';
$string['chat:settings'] = 'Dejinta plugin-ka';
$string['analytics:viewdashboard'] = 'Fiiri xarumaha analytics';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'Dejinta AI Koorsada';
$string['coursesettings:enabled'] = 'Fur beddelaadda koorsada';
$string['coursesettings:enabled_desc'] = 'Marka la furo, dejinta hoose waxay beddeshaaa dejinta bixiyaha AI caalamiga ah ee koorsadaan kaliya. Ka tag goobaha madhan si aad u dhaxashid qiimaha caalamiga ah.';
$string['coursesettings:sola_enabled'] = 'SOLA koorsadan';
$string['coursesettings:sola_enabled_toggle'] = 'Tus widget-ka SOLA koorsadan';
$string['coursesettings:sola_enabled_desc'] = 'Waxay kontoroshaa haddii widget-ka sheekada SOLA uu ka soo muuqdo koorsadan. Caadiga guud ee goobta waxaa lagu dejiyaa dejinta plug-in-ka hoosta General > Default for new courses.';
$string['coursesettings:using_global'] = 'Isticmaalaya dejinta caalamiga ah';
$string['coursesettings:saved'] = 'Dejinta AI koorsada ayaa la keydshaday.';
$string['coursesettings:global_settings_link'] = 'Dejinta AI caalamiga ah';

// Language detection and preference.
$string['lang:switch'] = 'Haa, u beddel';
$string['lang:dismiss'] = 'Maya, mahadsanid';
$string['lang:change'] = 'Beddel luqadda';
$string['lang:english'] = 'Ingiriisi';

// Chat widget.
$string['chat:placeholder'] = 'Su\'aal weydii...';
$string['chat:send'] = 'Dir';
$string['chat:close'] = 'Xidh wada-hadalka';
$string['chat:clear'] = 'Nadiifi shaashadda';
$string['chat:clear_confirm'] = 'Nadiifi fariimaha muuqda? Taariikhda wada-hadalkaaga oo dhan way sii kaydsan tahay waxaana lagu soo rogi karaa mar kale adiga oo dib u furaya widget-ka.';
$string['chat:copy'] = 'Koobiya wada-hadalka';
$string['chat:copied'] = 'Wada-hadalka ayaa loo koobaayey clipboard-ka';
$string['chat:copy_failed'] = 'Koobaynta wada-hadalka ayaa guuldareysatay';
$string['chat:thinking'] = 'Fikiraya...';
$string['chat:error'] = 'Waan ka xumahay, wax ayaa khaldan. Fadlan isku day mar kale.';
$string['chat:error_auth'] = 'Khalad xaqiijin. Fadlan la xiriir maamulaha.';
$string['chat:error_ratelimit'] = 'Codsiyada aad u badan. Fadlan sug daqiiqad ka dib oo isku day mar kale.';
$string['chat:error_unavailable'] = 'Adeegga AI si ku meel gaar ah ma heli karo. Fadlan isku day mar kale dambe.';
$string['chat:error_notconfigured'] = 'Bare AI-ga weli lama dejin. Fadlan la xiriir maamulaha.';
$string['chat:mic'] = 'Ku hadal su\'aaladaada';
$string['chat:mic_error'] = 'Khalad maakroofoon. Fadlan hubi ogolaanshiyeyaasha browser-kaaga.';
$string['chat:mic_unsupported'] = 'Gelitaanka codka kuma taageerna browser-kan.';
$string['chat:newline_hint'] = 'Shift+Enter xariiq cusub';
$string['chat:you'] = 'Adiga';
$string['chat:history_loaded'] = 'Wada-hadalka hore ayaa la soo geliyay.';
$string['chat:history_cleared'] = 'Taariikhda wada-hadalka ayaa la nadiifiyay.';
$string['chat:offtopic_warning'] = 'Waxay u muuqataa su\'aashaadu kuma xidna koorsadan. Fadlan isku day inaad ku xidnaato mawduuca si aan kuu caawi karo si fiican!';
$string['chat:offtopic_ended'] = 'Isticmaalka bare-AI-gaagu si ku meel gaar ah ayaa loo joojiyay {$a} daqiiqo sababtoo ah wada-hadalku mawduuca ka baxay oo badan. Fadlan waqtigaan u isticmaal dib u eegista agabka koorsadaada, waxaadna isku dari kartaa dib mar kale.';
$string['chat:offtopic_locked'] = 'Isticmaalka bare-AI-gaagu si ku meel gaar ah ayaa la joojiyay. Waxaad isku dari kartaa {$a} daqiiqo gudahood. Fadlan diirada saar su\'aalaha la xiriira koorsada marka aad soo noqoto.';
$string['chat:escalated_to_support'] = 'Kuma awoodin inaan si buuxda uga jawaabo su\'aashaada, markaa waxaan kuu abuuray tikit taageerada. Xubin kooxda taageerada ka tirsan ayaa soo raacaya. Nambarka tikit-kaaga waa: {$a}';
$string['chat:studyplan_intro'] = 'Waxaan kuu caawin karaa inaad abuurtid qorshaha barashada ee koorsadan! Ku sheeg inta saac toddobaadkiiba aad u geli karto barasho, waxaanan ku caawi doona inaad dhisteeto qorshe habaysan.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'Su\'aalaha Badanaa La Weydiiyo & Taageerada';
$string['settings:faq_heading_desc'] = 'Habee xarumaha FAQ-ga iyo isku xirka tikit-ka taageerada Zendesk.';
$string['settings:faq_content'] = 'Nuxurka FAQ-ga';
$string['settings:faq_content_desc'] = 'Geli gelida FAQ (mid kasta sadar ku jirta qaab: Q: su\'aal | A: jawaab). Waxaa la siinayaa AI si uu uga jawaabo su\'aalaha taageerada ee caadiga ah.';
$string['settings:zendesk_enabled'] = 'Fur Kordhinta Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Marka AI uu karo xallinta su\'aasha taageerada, si toos ah u abuur tikit Zendesk oo leh koobka wada-hadalka.';
$string['settings:zendesk_subdomain'] = 'Subdomain-ka Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomain-kaaga Zendesk (tusaale "mycompany" ee mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'Email-ka API Zendesk';
$string['settings:zendesk_email_desc'] = 'Cinwaanka email-ka isticmaalaha Zendesk ee xaqiijinta API (leh dhamaadka /token).';
$string['settings:zendesk_token'] = 'Token-ka API Zendesk';
$string['settings:zendesk_token_desc'] = 'Token-ka API ee xaqiijinta Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Ogaanshaha Ka-bixitaanka Mawduuca';
$string['settings:offtopic_heading_desc'] = 'Habee sida wada-hadalku u maareeya wada-hadalada ka baxsan mawduuca.';
$string['settings:offtopic_enabled'] = 'Fur Ogaanshaha Ka-bixitaanka Mawduuca';
$string['settings:offtopic_enabled_desc'] = 'Cali AI inuu ogaado oo dib ugu celin wada-hadalada ka baxsan mawduuca.';
$string['settings:offtopic_max'] = 'Tirada Ugu Badan ee Fariimaha Ka-baxsan Mawduuca';
$string['settings:offtopic_max_desc'] = 'Tirada fariimaha isku xiga ee ka baxsan mawduuca kahor tallaabada la qaadayo.';
$string['settings:offtopic_action'] = 'Tallaabada Ka-bixitaanka Mawduuca';
$string['settings:offtopic_action_desc'] = 'Waxa la samaynayo marka xadka ka-bixitaanka mawduuca la gaaro.';
$string['settings:offtopic_action_warn'] = 'Digniin oo dib u celi';
$string['settings:offtopic_action_end'] = 'Jooji helitaanka si ku meel gaar ah';
$string['settings:offtopic_lockout_duration'] = 'Muddada Xidnaanta (daqiiqo)';
$string['settings:offtopic_lockout_duration_desc'] = 'Intee in le\'eg (daqiiqo) ardayga oo waayay helitaanka bare AI kadib maruu ka baxayo xadka ka-bixitaanka mawduuca. Default: 30 daqiiqo.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Qorshaha Barashada & Xusuus-Qoridda';
$string['settings:studyplan_heading_desc'] = 'Habee sifooyinka qorshaha barashada iyo ogeysiisyada xusuus-qoridda.';
$string['settings:studyplan_enabled'] = 'Fur Qorshaha Barashada';
$string['settings:studyplan_enabled_desc'] = 'U ogolow bare AI inuu caawino ardayda abuurista qorshooyinka barashada ee shakhsiga ah ee ku salaysan wakhtiga ay heli karaan.';
$string['settings:reminders_email_enabled'] = 'Fur Xusuus-qoridda Email';
$string['settings:reminders_email_enabled_desc'] = 'U ogolow ardayda inay dooranaan xusuus-qoridda barashada iyagoo isticmaalaya email.';
$string['settings:reminders_whatsapp_enabled'] = 'Fur Xusuus-qoridda WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'U ogolow ardayda inay dooranaan xusuus-qoridda barashada iyagoo isticmaalaya WhatsApp (waxay u baahan tahay dejinta API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL-ka API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Dhamaadka API ee u diraya fariimaha WhatsApp (tusaale Twilio, MessageBird). Waa inuu qaataa POST oo leh jirka JSON oo ku jira "to", "from", iyo "body".';
$string['settings:whatsapp_api_token'] = 'Token-ka API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token-ka xaqiijinta ee API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Nambarka Diraaha WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Nambarka telefoonka ee lagu soo dirayo fariimaha WhatsApp (leh koodhka dalka, tusaale +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Dalalka WhatsApp ee Xidhan';
$string['settings:whatsapp_blocked_countries_desc'] = 'Koodhyada dalka ISO 3166-1 alpha-2 ee kala-gooyaya faragelin kuma xidna dalalka xusuus-qoridda WhatsApp ma ogola sababta ah xeerarka gobolka (tusaale "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Xusuus-qorida Barashada: {$a}';
$string['reminder:email_body'] = 'Salaan {$a->firstname},

Kani waa xusuus-qoridaada barashada ee "{$a->coursename}".

{$a->message}

Qorshahaaga barashada wuxuu soo jeediyaa {$a->hours_per_week} saacadood toddobaadkiiba koorsadan.

Sii wad shaqada fiican!

---
Si aad u joojiso heelaadahan, halkan guji: {$a->unsubscribe_url}';
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
$string['reminder:whatsapp_body'] = 'Xusuus-qoridda Barashada ee {$a->coursename}: {$a->message} (Ka bax: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Diiradda barashada maanta: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Ka bixi Xusuus-qoridda Barashada';
$string['unsubscribe:success'] = 'Si guul leh ayaa looga bixiyay xusuus-qoridda barashada koorsadan.';
$string['unsubscribe:already'] = 'Hore ayaa looga bixiyay helaadahaan.';
$string['unsubscribe:invalid'] = 'Xiriirka ka-bixitaanka oo aan shaqayn ama dhameeyay.';
$string['unsubscribe:resubscribe'] = 'Miyaad fikradaada bedelay? Waxaad dib u fur kartaa xusuus-qoridda iyada oo loo marayo wada-hadalka bare AI.';

// Scheduled task.
$string['task:send_reminders'] = 'Dir xusuus-qoridyada barashada bare AI';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Kaydiya qorshooyinka barashada ardayda.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID-ga isticmaalaha leh qorshaha barashada.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Koorsada qorshaha barashada u dhigan tahay.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Saacadaha toddobaadkiiba ardaygu qorsheeyay inuu baranayo.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Faahfaahinta qorshaha barashada qaabka JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Kaydiya doorashooyinka xusuus-qoridda iyo xubinnimada.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID-ga isticmaalaha ku xidhan xusuus-qoridda.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Kanaalka xusuus-qoridda (email ama whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Cinwaanka email-ka ama nambarka telefoonka ee xusuus-qoridda.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Koodhka dalka isticmaalaha ee u hoggaansamida xeerarka.';

// Analytics dashboard.
$string['analytics:title'] = 'Analytics Bare AI';
$string['analytics:overview'] = 'Guud ahaan';
$string['analytics:total_conversations'] = 'Wadarta wada-hadalada';
$string['analytics:total_messages'] = 'Wadarta fariimaha';
$string['analytics:active_students'] = 'Ardayda firfircoon';
$string['analytics:avg_messages_per_student'] = 'Fariimaha dhexdhexaadka ah ee ardayga kasta';
$string['analytics:offtopic_rate'] = 'Heerka ka-bixitaanka mawduuca';
$string['analytics:escalation_count'] = 'Loogu xilsaaray taageerada';
$string['analytics:studyplan_adoption'] = 'Ardayda leh qorshooyinka barashada';
$string['analytics:usage_trends'] = 'Isbeddelada Isticmaalka';
$string['analytics:daily_messages'] = 'Xajmiga fariimaha maalinlaha';
$string['analytics:hotspots'] = 'Goobaha Kulul ee Koorsada';
$string['analytics:hotspots_desc'] = 'Qaybaha koorsada ee inta badan lagu tixraacay su\'aalaha ardayda. Tiradaha sare waxay tilmaami kartaa meelaha ardayda u baahan taageerada dheeraad ah.';
$string['analytics:section'] = 'Qaybta';
$string['analytics:mention_count'] = 'Xusidaha';
$string['analytics:common_prompts'] = 'Qaababka Tilmaanta ee Caadiga ah';
$string['analytics:common_prompts_desc'] = 'Qaababka su\'aalaha si joogto ah ku soo noqnoqda ardayda. Dib u eeg kuwani si aad u aqoonsato dhibaatooyinka nidaamka ee nuxurka koorsada.';
$string['analytics:prompt_pattern'] = 'Qaabka';
$string['analytics:frequency'] = 'Joogtaynta';
$string['analytics:recent_activity'] = 'Dhaqdhaqaaqa Dhowaan';
$string['analytics:no_data'] = 'Xog analytics ah ma jirto weli. Xogta ayaa muuqan doonta marka ardayda ay bilaabaan isticmaalka bare AI.';
$string['analytics:timerange'] = 'Kala-duwanaanshaha wakhtiga';
$string['analytics:last_7_days'] = '7-dii maalin ee ugu dambeeyay';
$string['analytics:last_30_days'] = '30-kii maalin ee ugu dambeeyay';
$string['analytics:all_time'] = 'Xilligii oo dhan';
$string['analytics:export'] = 'Dhoofin xogta';
$string['analytics:provider_comparison'] = 'Barbar-dhigista Bixiyaha AI';
$string['analytics:provider_comparison_desc'] = 'U barbar dhig waxqabadka bixiyayaasha AI ee loo isticmaalay koorsadan.';
$string['analytics:provider'] = 'Bixiyaha';
$string['analytics:response_count'] = 'Jawaabaha';
$string['analytics:avg_response_length'] = 'Dhererka dhexdhexaadka ah ee jawaabta';
$string['analytics:total_tokens'] = 'Wadarta tokens-ka';
$string['analytics:avg_tokens'] = 'Dhexdhexaadka tokens-ka / jawaab';

// User settings.
$string['usersettings:title'] = 'Kaaliyaha Koorsada AI - Xogahaaga';
$string['usersettings:intro'] = 'Maaree xogta wada-hadalka bare AI-gaaga iyo dejimaha privacy';
$string['usersettings:privacy_info'] = 'Wada-hadaladaada bare AI waa la kaydiyaa si loo bixiyo taageerada joogtada ah inta aad koorsadaada ku jirto. Adigu xukumaad buuxda ayaad u leedahay xogtan waxaadna tirtiri kartaa waqti kasta.';
$string['usersettings:usage_stats'] = 'Xisaabadaada Isticmaalka';
$string['usersettings:total_messages'] = 'Wadarta fariimaha';
$string['usersettings:total_conversations'] = 'Wada-hadalada';
$string['usersettings:messages'] = 'Fariimaha';
$string['usersettings:last_activity'] = 'Dhaqdhaqaaqa ugu dambeeyay';
$string['usersettings:delete_course_data'] = 'Tirtir xogta koorsada';
$string['usersettings:no_data'] = 'Weli ma isticmaalin bare AI. Xogta isticmaalkaagu waxay halkan ka soo muuqan doontaa marka aad bilaabato hadal.';
$string['usersettings:delete_all_title'] = 'Tirtir Xogahaaga Oo Dhan';
$string['usersettings:delete_all_warning'] = 'Kani wuxuu si joogto ah u tirtirayaa dhammaan wada-hadaladaada bare AI ee dhammaan koorsadaha. Ficilkan looma celin karo.';
$string['usersettings:delete_all_button'] = 'Tirtir Dhammaan Xogaygii';
$string['usersettings:confirm_delete_course'] = 'Ma hubtaa inaad si joogto ah u tirtirinayso dhammaan xogta bare AI-gaaga ee koorsada "{$a}"? Ficilkan looma celin karo.';
$string['usersettings:confirm_delete_all'] = 'Ma hubtaa inaad si joogto ah u tirtirinayso DHAMMAAN xogta bare AI-gaaga ee dhammaan koorsadaha? Ficilkan looma celin karo.';
$string['usersettings:data_deleted'] = 'Xogahaaga waa la tirtiray.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Salaan, {$a}! Waxaan ahay SOLA. Sideen kugu caawin karaa maanta?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Fur SOLA';
$string['chat:change_avatar'] = 'Beddel avatar-ka';

$string['chat:quiz'] = 'Qaado imtixaan tababar';
$string['chat:quiz_setup_title'] = 'Imtixaanka Tababarka';
$string['chat:quiz_questions'] = 'Tirada su\'aalaha';
$string['chat:quiz_topic'] = 'Mawduuca';
$string['chat:quiz_topic_guided'] = 'Hogaaminta AI (ku salaysan horumarkaaga)';
$string['chat:quiz_topic_adaptive']      = 'La qabsada — diirad u saar dhibcahayga liita';
$string['chat:quiz_topic_default'] = 'Nuxurka koorsada hadda';
$string['chat:quiz_topic_custom'] = 'Mawduuc gaar ah…';
$string['chat:quiz_custom_placeholder'] = 'Geli mawduuc ama su\'aal...';
$string['chat:quiz_start'] = 'Bilow Imtixaanka';
$string['chat:quiz_cancel'] = 'Ka noqo';
$string['chat:quiz_loading'] = 'Abuurista imtixaanka…';
$string['chat:quiz_error'] = 'Ma abuuri karin imtixaanka. Fadlan isku day mar kale.';
$string['chat:quiz_correct'] = 'Sax!';
$string['chat:quiz_wrong'] = 'Khalad.';
$string['chat:quiz_next'] = 'Su\'aasha xigta';
$string['chat:quiz_finish'] = 'Arag natiijooyinka';
$string['chat:quiz_score'] = 'Imtixaanku waa dhamaaday! Waxaad heshay {$a->score} ka mid ah {$a->total}.';
$string['chat:quiz_summary'] = 'Waxaan dhawaan dhamaystiray imtixaan tababar oo {$a->total} su\'aalood ah ku saabsan "{$a->topic}" waxaana heshay {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Yoolalka Barashada';
$string['chat:quiz_topic_modules'] = 'Mawduuca Koorsada';
$string['chat:quiz_subtopic_select'] = 'Dooro shay gaar ah…';
$string['chat:quiz_topic_sections'] = 'Qaybaha Koorsada';
$string['chat:quiz_score_great'] = 'Shaqo fiican! Aad ayaad u garanaysaa agabkan.';
$string['chat:quiz_score_good'] = 'Dadaal wanaagsan! Sii wad dib u eegista si aad u xoojiso fahamkaaga.';
$string['chat:quiz_score_practice'] = 'Sii wad tababarka — isku day dib u eegista agabka koorsada la xiriira, ka dib imtixaanka mar kale qaado.';
$string['chat:quiz_review_heading'] = 'Dib u eegis';
$string['chat:quiz_retake'] = 'Imtixaanka Mar Kale Qaado';
$string['chat:quiz_exit'] = 'Ka bax Imtixaanka';
$string['chat:quiz_your_answer'] = 'Jawaabkaaga';
$string['chat:quiz_correct_answer'] = 'Jawaabta saxda ah';

$string['chat:starters_label'] = 'Biloowga wada-hadalka';
$string['chat:starter_quiz'] = 'Iga Imtixaami Tan';
$string['chat:starter_explain'] = 'Kaa Sharax';
$string['chat:starter_key_concepts'] = 'Fikradaha Muhiimka ah';
$string['chat:starter_study_plan'] = 'Qorshaha Barashada';
$string['chat:starter_help_me'] = 'Caawinada AI';
$string['chat:starter_ai_project_coach'] = 'Tababare Mashruuc AI';
$string['chat:starter_ell_practice'] = 'Tababarka Wada Hadalka';
$string['chat:starter_ell_pronunciation'] = 'Ku Dhawaaqa ELL';
$string['chat:starter_ai_coach'] = 'Tababaraha AI';
$string['chat:starter_speak'] = 'Hadal bilow wada-hadal';

$string['chat:reset'] = 'Dib u bilow';

$string['chat:topic_picker_title'] = 'Maxaad jeclaan lahayd inaad diiradda saarto?';
$string['chat:topic_picker_title_help'] = 'Maxaad u baahan tahay caawin?';
$string['chat:topic_picker_title_explain'] = 'Maxaad jeclaan lahayd inaan kuu sharaxo?';
$string['chat:topic_picker_title_study'] = 'Goormee diiradda saari doontaa?';
$string['chat:topic_start'] = 'Sii wad';

$string['chat:fullscreen'] = 'Shaasha buuxda';
$string['chat:exitfullscreen'] = 'Ka bax shaasha buuxda';

$string['chat:language'] = 'Beddel luqadda';
$string['chat:settings_panel'] = 'Dejimaha';
$string['chat:settings_language'] = 'Luqadda';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Cod';
$string['chat:settings_voice_admin'] = 'Dejimaha codka waxaa lagu maamulaa xarunta maamulaha goobta.';

$string['chat:voice_mode'] = 'Habka codka';
$string['chat:voice_end'] = 'Dhamee xaladda codka';
$string['chat:voice_connecting'] = 'Xiriir la yeelasho...';
$string['chat:voice_listening'] = 'Dhagaysanaya...';
$string['chat:voice_speaking'] = 'SOLA ayaa hadlaysa...';
$string['chat:voice_idle'] = 'Diyaar';
$string['chat:voice_error'] = 'Xiriirka codka ayaa ku guuldareystay. Fadlan hubi dejimaha.';
$string['chat:quiz_locked'] = 'SOLA waa la joojiyay inta lagu jiro imtixaanada si loo taageerayo daacadnimada akadeemiga. Nasiib wanaagsan!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Xusuusin';

// History panel.
$string['chat:history_title'] = 'Xusuusin iyo Taariikhdii Wada-hadalka';
$string['task:send_inactivity_reminders'] = 'Dir iimaylasha xusuusinta toddobaadlaha ee aan firfircoonayn';
$string['task:run_meta_ai_query'] = 'Orod su\'aasha falanqaynta Raadaarka Barashada ee la qorsheeyay';
$string['messageprovider:study_notes'] = 'Qoraallada fadhiga daraasadda';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Gudbin Hore';
$string['settings:cdn_heading_desc'] = 'U adeeg hantida hore ee SOLA (JS/CSS) CDN dibadda ah halkii nidaamka faylalka Moodle. Tani waxay u oggolaataa cusboonaysiinta hore iyada oo aan la hagaajin plugin-ka. CDN URL ka banaan u dhaaf si aad u isticmaasho faylalka plugin-ka maxalliga ah.';
$string['settings:cdn_url'] = 'CDN URL Saldhigga';
$string['settings:cdn_url_desc'] = 'URL-ka saldhigga halka sola.min.js iyo sola.min.css lagu martigeliyey. Tusaale: https://your-org.github.io/sola-cdn. U dhaaf banaan si aad u isticmaasho faylalka plugin-ka maxalliga ah.';
$string['settings:cdn_version'] = 'Nooca Hantida CDN';
$string['settings:cdn_version_desc'] = 'Xargaha nooca ee lagu daro CDN URLs cache busting. Cusbooneysii CDN deploy kasta ka dib (tusaale 3.2.4 ama commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Isticmaalka guud';
$string['analytics:tab_bycourse'] = 'Koorsiga';
$string['analytics:tab_comparison'] = 'AI iyo kuwa aan isticmaalin';
$string['analytics:tab_byunit'] = 'Cutubka';
$string['analytics:tab_usagetypes'] = 'Noocyada isticmaalka';
$string['analytics:tab_themes'] = 'Mawduucyo';
$string['analytics:tab_feedback'] = 'Jawaab celinta AI';
$string['analytics:total_students'] = 'Wadarta ardayda';
$string['analytics:active_users'] = 'Isticmaalayaasha firfircoon ee AI';
$string['analytics:msgs_per_student'] = 'Fariimaha arday kasta';
$string['analytics:avg_session'] = 'Celcelis muddada fadhiga';
$string['analytics:return_rate'] = 'Heerka soo noqoshada';
$string['analytics:total_sessions'] = 'Wadarta fadhiyada';
$string['analytics:thumbs_up'] = 'Suul kor';
$string['analytics:thumbs_down'] = 'Suul hoos';
$string['analytics:hallucination_flags'] = 'Calaamadaha khaladka';
$string['analytics:msgs_to_resolution'] = 'Fariimaha ilaa xalinta';
$string['analytics:helpful'] = 'Wax tar leh';
$string['analytics:not_helpful'] = 'Aan waxtar lahayn';
$string['analytics:flag_hallucination'] = 'Jawaabtan waxay ka kooban tahay macluumaad aan sax ahayn';
$string['analytics:submit_rating'] = 'Dir';
$string['analytics:thanks_feedback'] = 'Waad ku mahadsantahay jawaab celintaada';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_together'] = 'Together AI (Llama 3.1 8B/70B/405B Turbo, Mistral, Qwen)';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Sharax boggan';
$string['chat:starter_ask_anything'] = 'Weydii wax kasta';
$string['chat:starter_review_practice'] = 'Dib u eeg oo ku celceli';
$string['chat:history_saved_subtitle'] = 'Jawaabaha la keydiyay way ku sii jiraan qalabkan koorsadan.';
$string['chat:history_saved_empty'] = 'Keydi jawaabta AI si aad halkan ugu aragto.';
$string['chat:history_views_label'] = 'Aragtiyada taariikhda';
$string['chat:history_view_saved'] = 'La keydiyay';
$string['chat:history_view_recent'] = 'Taariikhda';
$string['chat:debug_refresh'] = 'Cusboonaysii';
$string['chat:debug_copy_all'] = 'Koobbi dhamaan';
$string['chat:debug_close'] = 'Xir';
$string['chat:language_switch'] = 'Beddel luqadda';
$string['chat:language_dismiss'] = 'Diid soo jeedinta luqadda';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Dooro bixiyaha LLM';
$string['chat:llm_model_label'] = 'Qaabka';
$string['chat:llm_model_select'] = 'Dooro qaabka LLM';
$string['chat:footer_usertesting'] = 'Imtixaanka isticmaalka';
$string['chat:footer_feedback'] = 'Jawaab celin';
$string['chat:voice_panel_title']       = 'Talk with {$a}';

// Additional translated strings.
$string['chat:debug_context'] = 'Hagaajinta macnaha';
$string['chat:debug_context_browser'] = 'Sawirka browserka';
$string['chat:debug_context_copy'] = 'Koobbi';
$string['chat:debug_context_prompt'] = 'Jawaabta serverka';
$string['chat:debug_context_request'] = 'Codsiga SSE ugu dambeeyay';
$string['chat:debug_context_toggle'] = 'Beddel kormeeraha';
$string['chat:history_empty'] = 'Ma jiraan sheekaysi.';
$string['chat:history_refresh'] = 'Cusboonaysii';
$string['chat:history_subtitle'] = 'Fariintahaaga dhowaan.';
$string['chat:starter_explain_prompt'] = 'Sharax fikradda ugu muhiimsan?';
$string['chat:starter_help_lesson'] = 'Sharax kan';
$string['chat:starter_help_lesson_prompt'] = 'I caawin inaan fahmo casharka. Soo koobi fikradaha.';
$string['chat:starter_prompt_coach'] = 'Tababare AI';
$string['chat:starter_quick_study'] = 'Baaritaan degdeg';
$string['chat:starter_study_plan_prompt'] = 'Waxaan rabaa inaan qorsheyo barashada. Weydii: (1) hadaf, (2) waqti. Cusboonaysii qorshaha.';
$string['chat:voice_copy'] = 'Sheeko cod ah oo la leh kaaliyaha.';
$string['chat:voice_ready'] = 'Diyaar';
$string['chat:voice_start'] = 'Bilow';
$string['chat:voice_title'] = 'Kala hadal SOLA';
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
$string['mobile_chip_concepts'] = 'Fikrado muhiim';
$string['mobile_chip_quiz'] = 'Imtixaan';
$string['mobile_chip_studyplan'] = 'Qorshaha barashada';
$string['mobile_clear'] = 'Tirtir taariikhda';
$string['mobile_disabled'] = 'SOLA kuma diyaara koorsigan.';
$string['mobile_placeholder'] = 'Weydii su\'aal...';
$string['mobile_welcome'] = 'Salaan, {$a}!';
$string['mobile_welcome_sub'] = 'Waxaan ahay SOLA, kaaliyahaaga barashada. Sideen ku caawin karaa?';
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
$string['rubric:done'] = 'Dhammaad';
$string['rubric:encourage_high'] = 'Shaqo fiican! Sii wad!';
$string['rubric:encourage_low'] = 'Bilowgii wanaagsan! Tababar joogto ayaa kaa caawin.';
$string['rubric:encourage_mid'] = 'Dadaal wanaagsan! Sii wad.';
$string['rubric:overall'] = 'Guud ahaan';
$string['rubric:practice_again'] = 'Mar kale ku tababar';
$string['rubric:score_title_conversation'] = 'Dhibcaha tababarka';
$string['rubric:score_title_pronunciation'] = 'Dhibcaha ku dhawaaqida';
$string['rubric:scoring'] = 'Qiimaynta...';
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
$string['demo:title'] = 'Deegaanka tijaabada';
$string['demo:heading'] = 'Deegaanka tijaabada';
$string['demo:intro'] = 'Boggan wuxuu abuuraa koorso tijaabo ah oo <strong>ka qarsoon ardayda</strong> (visible=0) wuxuuna ku buuxiyaa arday been abuur ah, wadahadallo AI, qiimeyn iyo jawaab celin. Waxay faa\'iido leedahay marka aad horu-dhaygeyneysid Analytics Dashboard ama xaqiijineysid isbedellada plugin-ka iyadoon saameyn ku yeelaneyn arday run ah oo qoran.';
$string['demo:step1'] = 'Talaabada 1: koorso tijaabo';
$string['demo:step2'] = 'Talaabada 2: ku dar arday been abuur ah iyo wadahadallo AI';
$string['demo:course_exists'] = 'Koorsada tijaabada way jirtaa: <strong>{$a->fullname}</strong> (magaca gaaban <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'qarsoon';
$string['demo:badge_visible'] = 'muuqda ardayda';
$string['demo:no_course'] = 'Ma jirto koorso tijaabo la helay. Guji hoos si aad u abuurto mid.';
$string['demo:create_btn'] = 'Abuur koorso tijaabo qarsoon';
$string['demo:open_course'] = 'Fur koorsada &rarr;';
$string['demo:seed_intro'] = 'Waxay abuurtaa demo_student_001, demo_student_002, ..., waxay ku qoraysaa koorsada tijaabada, waxayna galisaa wadahadallo, fariimo, qiimeyn iyo jawaab celin macaamil. Mar kale socodsii si aad ugu darto xog badan, ama calaamadee "marka hore tir" si aad mar kale u bilowdo.';
$string['demo:users_label'] = 'Isticmaaleyaasha';
$string['demo:weeks_label'] = 'Toddobaadyada';
$string['demo:clear_label'] = 'Marka hore tir isticmaaleyaasha demo_* ee jira';
$string['demo:seed_btn'] = 'Ku dar arday iyo wadahadallo';
$string['demo:view_analytics'] = 'Daawo Analytics-ka koorsadan &rarr;';
$string['demo:footer'] = 'Xogta halkan lagu abuuro waxay ku jirtaa miisaska caadiga ah ee Moodle ee isticmaalaha / isdiiwaangelinta iyo miisaska wadahadallada gaarka ah ee plugin-ka. Isticmaaleyaasha been abuurka ah oo dhan waxay leeyihiin magacyo isticmaaleyaal oo ku bilaabma <code>demo_student_</code> si ay u sahlanaato in la shaandhaysto ama laga saaro. Si aad uga saarto, dib u socodsii tallaabada seed-ka adigoo calaamadeeyey "Marka hore tir isticmaaleyaasha demo_* ee jira".';
$string['demo:course_fullname'] = 'Koorsada Tijaabada SOLA (qarsoon)';
$string['demo:notify_created'] = 'Koorsada tijaabada diyaar: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Waa lagu guuldareystay abuurista koorsada: {$a}';
$string['demo:notify_seeded'] = 'Lagu daray: {$a->users} isticmaale, {$a->conversations} wadahadallo, {$a->messages} fariimo, {$a->ratings} qiimeyn, {$a->feedback} gelitaano jawaab celin.';
$string['demo:notify_seed_fail'] = 'Waa lagu guuldareystay inaad xog gelisid: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Qiimaha Token iyo Analytics &rarr;';
$string['toc:testing'] = 'Deegaanka tijaabada &rarr;';
$string['toc:back_to_course'] = '&larr; Ku noqo {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Binary-ga pdftotext lama helin; soo saarista PDF waa la damiyay.';
$string['rag:pdftotext_available'] = 'pdftotext waxaa lagu helay {$a}.';
$string['rag:docx_unavailable'] = 'Kordhinta PHP ZipArchive lama heli karo; soo saarista DOCX waa la damiyay.';
$string['rag:h5p_unavailable'] = 'Nuxurka H5P lama akhrin karo; waa la boodayaa.';
$string['rag:scorm_too_large'] = 'Xidhmada SCORM waxay ka badan tahay xadka cabbirka la habeeyey ({$a} MB); waa la boodayaa.';
$string['rag:scorm_unzip_failed'] = 'Xidhmada SCORM lama furi karo; waa la boodayaa.';
$string['rag:transcript_fetch_failed'] = 'Qoraalka lagama keeni karo {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL-ka qoraalka waxaa xiray caqabadda Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Warbaahin ku dhex jirta oo la aqoonsaday: {$a}';
$string['rag:embed_transcript_attached'] = 'Qoraalka waa lagu lifaaqay {$a}';

// v3.9.10–v3.9.14 new strings (English verbatim; translate later).
$string['usersettings:download'] = 'Soo dejiso xogtayda {$a}';
$string['usersettings:download_help'] = 'Soo dejiso nuqul JSON ah oo dhamaystiran oo ka mid ah xog kasta oo {$a} ee ku xidhan akoonkaaga: wadaxaajoodyo, fariimo, qiimaynta, qorshayaasha waxbarasho, xasuusinta, dhibcaha tababarka, jawaabaha sahaminta, profile, iyo diiwaanada hubinta.';
$string['usersettings:privacy_notice_link'] = 'Akhri ogeysiiska gaarka ah ee {$a}';
$string['privacy:title'] = 'Ogeysiiska Gaarka ah ee {$a}';
$string['admin:user_data:title'] = '{$a} — dhoofinta iyo masaxa xogta ardayga';
$string['admin:user_data:intro'] = 'Habka shaqaalaynta ee codsiga GDPR Qodobka 15 (helitaan) ama Qodobka 17 (tirtirka). Ka raadi ardayga aqoonsiga isticmaale ee Moodle, dib u eeg safafka ay add-onkani u haysato, kana dhoofi ama tirtir.';
$string['admin:user_data:search_label'] = 'Aqoonsiga isticmaale ee Moodle';
$string['admin:user_data:lookup'] = 'Raadi';
$string['admin:user_data:not_found'] = 'Lama helin isticmaale leh aqoonsigaas.';
$string['admin:user_data:download'] = 'Soo dejiso dhammaan xogta ardayga sida JSON';
$string['admin:user_data:purge'] = 'Tirtir dhammaan xogta ardayga ee isticmaalahan';
$string['admin:user_data:confirm_purge'] = 'Si joogto ah u tirtir dhammaan diiwaanada {$a}? Tani waxay ku faafaysaa wadaxaajoodyada, fariimaha, qiimaynta, qorshayaasha waxbarasho, xasuusinta, profileyada, dhibcaha tababarka, sahamiyada, diiwaanada hubinta, iyo jawaab celinta. Ficilkan lama beddeli karo.';
$string['admin:user_data:purged'] = 'Dhammaan xogta isticmaalaha la doortay waa la tirtiray.';
$string['chat:consent_heading'] = 'Kahor inta aanad la sheekaysan {$a->product}';
$string['chat:consent_body'] = '{$a->product} waa caawiye waxbarasho oo AI ku salaysan. Fariimahaaga iyo jawaabaha {$a->product} waxaa lagu kaydiyaa kaydka Moodle ee {$a->institution} oo tobanka kalsoon ee ugu dambeeyay waxaa loo diraa bixiye AI ah oo la oggol yahay si looga jawaabo su\'aalahaaga. Magacaaga koowaad waa la wadaagaa si shaqsi ahaaneed loogu hagaajiyo; macluumaad kale oo aqoonsi ah looma diro bixiyaha AI. Waxaad mar walba soo dejisan kartaa, tirtiri kartaa, ama joojin kartaa isticmaalka {$a->product}.';
$string['chat:consent_accept'] = 'Waan fahmay, bilow {$a}';
$string['chat:consent_privacy_link'] = 'Akhri ogeysiiska gaarka ah ee buuxa';
$string['task:audit_cleanup'] = 'Nadiifinta miiska hubinta ee AI Course Assistant';
$string['task:conversation_retention'] = 'Saabbaynaha hayinta wadaxaajoodyada AI Course Assistant';
$string['settings:audit_retention_days'] = 'Hayinta diiwaanka hubinta (maalmaha)';
$string['settings:audit_retention_days_desc'] = 'Hawsha jadwalaysan ee maalinlaha ah waxay tirtirtaa diiwaanada hubinta ka da\'weyn tan. 0 way joojinaysaa. Caadiga 365.';
$string['settings:conversation_retention_days'] = 'Hayinta wadaxaajoodyada (maalmaha)';
$string['settings:conversation_retention_days_desc'] = 'Hawsha jadwalaysan ee maalinlaha ah waxay tirtirtaa wadaxaajoodyada uu wakhtiga ugu dambeeyay ee la beddelay ka da\'weyn yahay tan. 0 way joojinaysaa. Caadiga 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Dhammaadyada SSRF la aamini karo';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Hal URL halkii xariiq. Marti-galiyaha la liiska gareeyay waxay ka gudbaan baaritaannada loopback / IP-gaar ah / kaliya-https ee SSRF baariyaha SOLA. Tan u isticmaal kaliya LLM-yada is-martiqaada ee shabakad aad maamusho — tusaale <code>http://localhost:11434</code> Ollama maxalliga ah, <code>http://10.0.0.5:8000</code> vLLM pod isla VPC. Isbarbardhigga wuxuu u dhigmaa scheme + host + port; jid kasta waa la iska indho-tirayaa. Caadi ah madhan (xayiraad waxa kasta oo gudaha ah). Xariiqaha ka bilaaba <code>#</code> waa faallooyin.';
$string['task:learner_weekly_digest']    = 'AI Caawiyaha Koorsada - Soo Koobida Toddobaadlaha ee Ardayga';
$string['learner_digest:subject']        = 'Toddobaadkaaga {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Ma rabtaa email gaaban toddobaadle ah oo ku saabsan waxa aad diiraddaada saari karto xiga?';
$string['next_best_action:get_started']           = 'Ku bilow {$a->title}. I fur oo i weydii "iga caawi {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Ku bilow {$a->title}. Moduulka "{$a->module}" ayaa daboolaya.';
$string['next_best_action:review']                = 'Dib u eeg aasaaska {$a->title} — i fur oo i weydii "ii sharax {$a->title} sida cusub".';
$string['next_best_action:review_with_module']    = '"{$a->module}" gudaha aasaaska {$a->title} dib u eeg, kaddib su\'aalo i fur.';
$string['next_best_action:practice']              = 'Ku dhis waxa aad ku haysato {$a->title}. I fur oo i weydii "i sii tusaale la xaliyay oo {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Ku tababar {$a->title} dhinacyada "{$a->module}". Tusaalooyin la xaliyay i fur.';
$string['next_best_action:quiz']                  = '{$a->title} ku xoojiy imtixaan degdeg ah. I fur oo dooro "I imtixaani — la qabsada".';
$string['next_best_action:quiz_with_module']      = '{$a->title} ku xoojiy imtixaan degdeg ah. Moduulka "{$a->module}" waa meesha uu ku nool yahay.';
$string['next_best_action:empty_state']           = 'Adigu hadda waxaad si fiican u sameyneysaa ujeedo kasta — ma jirto wax la xasuusiyo. Sii wad.';
$string['next_best_action:header']                = 'Halkan waxa ku jira {$a> shay oo aad ku diiraddiisaada xiga:';
$string['learner_digest:unsubscribe_done_title']  = 'Ka jiidaynta liiska';
$string['learner_digest:unsubscribe_done_body']   = 'Waa la sameeyay — ma heli doontid wax dheeraad ah oo iimayl toddobaadle ah oo loogu talagalay koorsadan {$a->product}. Waxaad ku biiri kartaa wakhti kasta daaqada sheeko ee koorsadaada.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Linkiga ka jiidaynta liiska ma aha mid sax ah';
$string['learner_digest:unsubscribe_invalid_body']  = 'Linkigan ka jiidaynta liiska ayaa dhacay ama ay khalad qabto. Waxaad maamuli kartaa dookhyada iimaylka dejinta koorsadaada.';
$string['active_learners:line']                   = '{$a} kale waxay hadda baranayaan koorsadan.';
$string['active_learners:line_global']             = '{$a} kale waxay barranayaan hadda.';
$string['settings:active_learners_scope']          = 'Baaxadda muujiyaha ardayda firfircoon';
$string['settings:active_learners_scope_desc']     = 'Inay muujiyaha "kuwa kale waxay barranayaan hadda" ee ka kor sheekada bilawga ay tirinayso ardayga koorsada isku midka ah keliya ama ardayga goobta oo dhan. Caadi ah <strong>caalami ah</strong>.';
$string['settings:active_learners_scope_global']   = 'Caalami ah (koorsada kasta)';
$string['settings:active_learners_scope_course']   = 'Koorsada keliya';
$string['learner_digest:optin_yes']      = 'Haa, ii soo dir email-ka toddobaadlaha';
$string['learner_digest:optin_no']       = 'Maya, mahadsanid';
$string['learner_digest:optin_thanks']   = 'Waa la fahmay. Toddobaad walba Isniinta waxaad heli doontaa soo koobid toddobaadle ah.';
$string['learner_digest:optin_declined'] = 'Waa la fahmay. Email ma jirto - ii fur marka aad rabto eegis.';
$string['settings:xai_proxy_url'] = 'URL-ka proxy-ga xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'URL wss ee dadweynaha ah ee adeegga SOLA xAI Realtime proxy (tusaale ahaan wss://voice.example.com/xai-rt/rt). Marka tan la dejiyo iyada oo lala socdo qarsoodiga JWT, codka xAI wuxuu maraa proxy oo furaha API ee xAI ee weyn waligii ma gaaro browser-ka. Ku dhaaf madhan si aad u dib ugu noqoto isku-xidhka tooska ah (looma talinayo wax soo saarka).';
$string['settings:xai_proxy_jwt_secret'] = 'Qarsoodiga JWT ee proxy-ga xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Qarsoodi wadaag ah oo HS256 ah oo loo isticmaalo saxiixa tokenada fadhiga gaaban ee proxy-ga xAI Realtime. Waa inay la mid noqotaa qarsoodiga MOODLE_JWT_SECRET ee Cloudflare Worker. Marba mar bedel.';
$string['admin:vendor_dpa:title'] = '{$a} — xaalada DPA bixiyaha';
$string['admin:vendor_dpa:intro'] = 'Diidmada tababarka, DPA, iyo qaab hayinta ee bixiye kasta oo darawalka AI ah. Isticmaal tan si aad u go\'aamiso darawaladee aad ku awoodsiiso bogaaga. Isticmaalka heerka 2 iyo wixii ka sarreeya wuxuu u baahan yahay DPA la saxiixay iyo diidmada tababarka oo qandaraas ah.';
$string['admin:vendor_dpa:maintenance_note'] = 'Miiskan waxaa lagu hayaa classes/vendor_registry.php. Cusboonaysii marka isbeddel ToS bixiye yimaado.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Iimaylka Sarkaalka Ilaalinta Xogta';
$string['settings:dpo_email_desc'] = 'Iimaylka xidhiidhka ee lagu muujiyo ogeysiiska gaarka ah ee ardayga ee qeybta "Xidhiidh". Ku dhaaf madhan si aad u qariso safka. Rakibaadyada calamadayn cusub waa inay tilmaamaan DPO-gooda.';
$string['settings:privacy_external_url'] = 'URL-ka bogga gaarka ah ee hay\'adda';
$string['settings:privacy_external_url_desc'] = 'Linkiga bogga gaarka ah ee heerka hay\'adda, oo lagu muujiyo ogeysiiska gaarka ah ee ardayga ee qeybta "Xidhiidh". Ku dhaaf madhan si aad u qariso safka.';
$string['settings:privacy_notice_override'] = 'Bedelka ogeysiiska gaarka ah (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Haddii la dejiyo, HTML-kani wuxuu beddelaa ogeysiiska gaarka ah ee caadiga ah oo lagu soo bandhigo /local/ai_course_assistant/privacy.php. Isticmaal tan si aad u gelisid qoraalka uu Sharciga eegay ee hay\'addaada adigoon wax ka bedelin code-ka. Ku dhaaf madhan si aad u isticmaasho ogeysiiska caadiga ah, kaas oo qoraalkiisa ka soo qaada todobada furaha qaabaynta ee calamadaynta.';
$string['objectives:title'] = 'Ujeedooyinka waxbarasho iyo aqoonsanaanta';
$string['objectives:toggles_heading'] = 'La socoshada aqoonsanaanta';
$string['objectives:toggle_master'] = 'Awoodsii la socoshada aqoonsanaanta koorsadan';
$string['objectives:toggle_chip'] = 'Tus ardayda calaamada Aqoonsanaanta Waxbarashada';
$string['objectives:toggle_chip_help'] = 'Ikhtiyaari. Marka la damiyo, aqoonsanaantu weli si dahsoon ayey u hagaysaa caawiyaha laakiin ardayda waxba ma arkaan.';
$string['objectives:toggled'] = 'Dejintii waa la cusboonaysiiyay.';
$string['objectives:detected_heading'] = 'Waxaa la helay {$a->count} ujeedo waxbarasho oo ka socda {$a->source}.';
$string['objectives:source_competency'] = 'Awoodaha Moodle';
$string['objectives:source_summary'] = 'soo koobitaanka koorsada';
$string['objectives:source_section'] = 'qeyb ama nuxurka boggaa hore';
$string['objectives:source_page'] = 'bogga koorsada';
$string['objectives:source_llm'] = 'soo saarista AI';
$string['objectives:source_manual'] = 'gelinta gacanta';
$string['objectives:source_none'] = 'isha otomaatigga ah ma jirto';
$string['objectives:import_detected'] = 'Soo dhoofso ujeedooyinkan la helay';
$string['objectives:import_llm'] = 'Ku soo saar ujeedooyinka AI';
$string['objectives:llm_empty'] = 'Soo saarista AI ma soo celin ujeedooyin. Mar kale isku day hadhow ama gacanta ku geli.';
$string['objectives:imported'] = '{$a} ujeedo ayaa la soo dhoofiyay.';
$string['objectives:none_detected'] = 'Si otomaatig ah looma helin ujeedooyin waxbarasho. Hoos gacanta ku geli, ama isticmaal soo saarista AI.';
$string['objectives:list_heading'] = 'Ujeedooyinka hadda';
$string['objectives:col_code'] = 'Koodh';
$string['objectives:col_title'] = 'Magac';
$string['objectives:col_source'] = 'Isha';
$string['objectives:col_actions'] = 'Ficilada';
$string['objectives:add_heading'] = 'Ku dar ujeedo';
$string['objectives:add_submit'] = 'Ku dar ujeedada';
$string['objectives:saved'] = 'Ujeedada waa la kaydiyay.';
$string['objectives:deleted'] = 'Ujeedada waa la tirtiray.';
$string['objectives:delete_confirm'] = 'Tirtir ujeedadan iyo dhammaan taariikhda isku-daygeeda?';
$string['objectives:delete_all'] = 'Tirtir dhammaan ujeedooyinka koorsadan';
$string['objectives:delete_all_confirm'] = 'Tirtir ujeedo kasta iyo dhammaan taariikhda isku-daygooda ee koorsadan? Lama beddeli karo.';
$string['objectives:deleted_all'] = 'Dhammaan ujeedooyinka koorsadan waa la tirtiray.';
$string['mastery:chip_aria'] = 'Xaalada aqoonsanaanta waxbarashada';
$string['mastery:popover_aria'] = 'Tafaasiisha aqoonsanaanta waxbarashada';
$string['mastery:chip_label'] = 'Waxaa la aqoonsanaa: {$a->mastered} ka mid ah {$a->total}';
$string['mastery:status_mastered'] = 'la aqoonsaday';
$string['mastery:status_learning'] = 'horumar ku jira';
$string['mastery:status_not_started'] = 'wali ma bilaaban';
$string['mastery:popover_empty'] = 'Koorsadan ujeedo waxbarasho looma habayn.';
$string['settings:mastery_heading'] = 'La socoshada aqoonsanaanta';
$string['settings:mastery_heading_desc'] = 'Sifo ikhtiyaari ah oo koorsada gaar ah taas oo calaamadeysa jawaabaha imtixaanada iyo wadaxaajoodyada caawiyaha iyada oo loo eegayo ujeedooyinka waxbarasho ee koorsada, ka dibna soo bandhigta soo koobid kooban oo aqoonsanaanta ah dib ugu celisa system prompt si loo hago su\'aal weydiinta. Si caadi ah dahsoon: ardayda waxba ma arkaan ilaa la awoodsiiyo calaamada koorsada gaarka ah.';
$string['settings:mastery_threshold'] = 'Heerka aqoonsanaanta';
$string['settings:mastery_threshold_desc'] = 'Saxnaanta socota oo iyada ama ka sarraysa ujeedo loo aqoonsado in la aqoonsaday. 0.0 ilaa 1.0. Caadi ahaan 0.85.';
$string['settings:mastery_window'] = 'Daaqada isku-daygyada';
$string['settings:mastery_window_desc'] = 'Tirada isku-daygyada ugu dambeeya ee ujeedo kasta oo lagu miisaamo saxnaanta socota. Caadi ahaan 8.';
$string['settings:mastery_decay_enabled']        = 'Daar dhimista ku\'iyada';
$string['settings:mastery_decay_enabled_desc']   = 'Marka la shido, dhibco ku\'iyada way hoos u dhacaan waqti ka dib oo ku saabsan saxiixa waqti ee isku dayga ugu dambeeyay. Ujeedo horay loo gaadhay wuxuu ku noqdaa "barashada" ka dib waqti ku filan. Kama hoos dhaco "barashada". <strong>Caadi ah daamin ah v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Cimriga badhka dhimista ku\'iyada (maalmood)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Cimri badh maalmood. Dhibcaha waxaa lagu dhuftaa 0.5 ^ (maalmaha laga bilaabo isku daygii ugu dambeeyay / cimri badh). Caadi ah 30. La isticmaalo kaliya marka dhimista la shido.';
$string['settings:mastery_classifier_model'] = 'Moodelka kala-saaraha';
$string['settings:mastery_classifier_model_desc'] = 'Moodel loo isticmaalo in lagu kala saaro wadaxaajoodyada caawiyaha iyada oo loo eegayo ujeedooyinka. Ku dhaaf madhan si aad u dhaxasho moodelka caadiga ah ee bixiyaha AI; haddii kale geli moodel jaban sida gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Miisaanka kala-saaraha';
$string['settings:mastery_classifier_weight_desc'] = 'Inta ay isku-daygii wadaxaajoodka u miisaamo marka loo barbar dhigo isku-day imtixaan ah (1.0). Caadi ahaan 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Heerka kalsoonida ee kala-saaraha';
$string['settings:mastery_classifier_threshold_desc'] = 'Kalsoonida ugu yar ee kala-saaraha ee loo baahan yahay si loo diiwaan geliyo isku-day wadaxaajood. 0.0 ilaa 1.0. Caadi ahaan 0.7.';
$string['chat:mode_progress'] = 'Horumar';
$string['objectives:toggle_dashboard'] = 'Tus ardayda tab-ka Horumarka';
$string['objectives:toggle_dashboard_help'] = 'Ikhtiyaari. Wuxuu kudaraa tab Horumar ah agteeda Chat / Cod / Taariikhda gudaha widget-ka. Tabkani wuxuu tusaa ardayda ujeedooyinka ay aqoonsadeen, kuwa horumar ku jira, iyo kuwa aanay weli bilaabin.';
$string['mastery:dashboard_title'] = 'Horumarkaaga waxbarashada';
$string['mastery:dashboard_subtitle'] = 'Aqoonsanaanta waxaa lagu cabbiraa jawaabaha imtixaanadaada iyo tababarka chat-ka. Sii wad — qoto dhereraa caarriiga.';
$string['mastery:dashboard_refresh'] = 'Cusboonaysii';
$string['mastery:section_mastered'] = 'La aqoonsaday';
$string['mastery:section_learning'] = 'Horumar ku jira';
$string['mastery:section_not_started'] = 'Wali ma bilaaban';
$string['mastery:summary_label'] = 'Ujeedooyinka la aqoonsaday: {$a->mastered} ka mid ah {$a->total}';
$string['mastery:ask_about'] = 'Wax ka weydii tan';
$string['mastery:celebrate'] = 'Waxaad aqoonsatay dhammaan ujeedooyinka koorsadan. Shaqo aad u fiican.';
$string['mastery:ask_template'] = 'Iga caawi inaan ku tababarto oo aan qoto dheereeyo fahamka ujeedadan: {$a}.';
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
