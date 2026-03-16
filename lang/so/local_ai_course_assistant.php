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
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Kaaliyaha Koorsada AI';
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
$string['settings:provider'] = 'Bixiyaha AI';
$string['settings:provider_desc'] = 'Dooro bixiyaha AI ee loo isticmaalayo dhamaadka wada-hadalka.';
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
$string['chat:clear'] = 'Nadiifi taariikhda';
$string['chat:clear_confirm'] = 'Ma hubtaa inaad nadiifin doonto taariikhda wada-hadalkaaga ee koorsadan?';
$string['chat:copy'] = 'Koobiya wada-hadalka';
$string['chat:copied'] = 'Wada-hadalka ayaa loo koobaayey clipboard-ka';
$string['chat:copy_failed'] = 'Koobaynta wada-hadalka ayaa guuldareysatay';
$string['chat:thinking'] = 'Fikiraya...';
$string['chat:error'] = 'Waan ka xumahay, wax ayaa khaldan. Fadlan isku day mar kale.';
$string['chat:error_auth'] = 'Khalad xaqiijin. Fadlan la xiriir maamulaha.';
$string['chat:error_ratelimit'] = 'Codsiyada aad u badan. Fadlan sug daqiiqad ka dib oo isku day mar kale.';
$string['chat:error_unavailable'] = 'Adeegga AI si ku meel gaar ah ma heli karo. Fadlan isku day mar kale dambe.';
$string['chat:error_notconfigured'] = 'Bare AI-ga weli lama dejin. Fadlan la xiriir maamulaha.';
$string['chat:expand'] = 'Ballaar wada-hadalka';
$string['chat:collapse'] = 'Yar wada-hadalka';
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

$string['chat:greeting'] = 'Salaan, {$a}! Waxaan ahay SOLA, kaaliyahaaga barashada onlaynka ee {INSTITUTION}.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Fur SOLA';
$string['chat:change_avatar'] = 'Beddel avatar-ka';

$string['chat:quiz'] = 'Qaado imtixaan tababar';
$string['chat:quiz_setup_title'] = 'Imtixaanka Tababarka';
$string['chat:quiz_questions'] = 'Tirada su\'aalaha';
$string['chat:quiz_topic'] = 'Mawduuca';
$string['chat:quiz_topic_guided'] = 'Hogaaminta AI (ku salaysan horumarkaaga)';
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
$string['task:send_inactivity_reminders'] = 'Dir iimaylasha xusuusinta toddobaadlaha ee aan firfircoonayn';
$string['messageprovider:study_notes'] = 'Qoraallada fadhiga daraasadda';
