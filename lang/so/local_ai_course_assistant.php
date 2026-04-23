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
$string['chat:voice_panel_title'] = 'La hadal {$a} (Tijaabo)';

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
