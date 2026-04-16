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
 * Language strings for local_ai_course_assistant — Igbo.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Onye Enyemaka AI Nkuzi';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Echekwa mkparịta ụka AI nkuzi maka onye ọ bụla na kọọsị.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID nke onye nwe mkparịta ụka.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID nke kọọsị nke mkparịta ụka dị na ya.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Aha nke mkparịta ụka.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Oge emepụtara mkparịta ụka.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Oge nke ọzọ edezịrị mkparịta ụka.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Echekwa ozi ọ bụla n\'ime mkparịta ụka AI nkuzi.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID nke onye zịrị ozi ahụ.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID nke kọọsị nke ozi dị na ya.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Ọrụ nke onye zịrị ozi (onye ọrụ ma ọ bụ onye enyemaka).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Ọdịnaya nke ozi.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Ọnụọgụ tokens ejiri maka ozi.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Oge emepụtara ozi.';
// Capabilities.
$string['ai_course_assistant:use'] = 'Jiri mkparịta ụka AI nkuzi';
$string['ai_course_assistant:viewanalytics'] = 'Lee analytics mkparịta ụka AI nkuzi';
$string['ai_course_assistant:manage'] = 'Njikwa ntọala mkparịta ụka AI nkuzi (Ọrụ onye njikwa)';
// Settings.
$string['settings:enabled'] = 'Gbanye Onye Enyemaka AI Nkuzi';
$string['settings:enabled_desc'] = 'Gbanye ma ọ bụ gbanyụọ widget Onye Enyemaka AI Nkuzi n\'ibe kọọsị.';
$string['settings:default_course_mode'] = 'Ndabara maka ọmụmụ ọhụrụ';
$string['settings:default_course_mode_desc'] = 'Na-achịkwa ma SOLA ọ̀ ga-apụta na nkuzi mgbe e meghị nhọrọ nke ọ bụla. Nrụnye ọhụrụ na-abịa site na "Agbanyụrụ na ndabara" ka ndị nchịkwa wee nwee ike ịhọrọ nkuzi na nkuzi site na ibe Analytics ma ọ bụ ibe Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Agbanyụrụ na ndabara (kwado na nkuzi)';
$string['settings:default_course_mode_all'] = 'Akwadoro na nkuzi niile';
$string['settings:provider'] = 'Onye Nnye AI';
$string['settings:provider_desc'] = 'Họrọ onye na-enye AI iji maka imecha mkparịta ụka. Họrọ "Moodle AI (core_ai subsystem)" iji hazie arịrịọ site na nhazi AI e wuru n\'ime Moodle na Site admin > AI; a na-eleghara ubi igodo API, ụdị, na isi URL dị n\'okpuru anya n\'ọnọdụ ahụ. Streaming, iji ngwaọrụ, na prompt caching adịghị site na core_ai — a na-ebuga azịza dịka ibe otu. Jiri onye na-enye ozugbo maka ahụmịhe kacha mma nke nwa akwụkwọ.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Mpaụzọ)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Nke onwe onye (nke kwekọrọ na OpenAI)';
$string['settings:apikey'] = 'Igodo API';
$string['settings:apikey_desc'] = 'Igodo API maka onye nnye họọrọ. Achọghị maka Ollama.';
$string['settings:model'] = 'Aha Ụdị';
$string['settings:model_desc'] = 'Ụdị iji. Ndabara na-adabere na onye nnye (dị ka claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL Ntọala API';
$string['settings:apibaseurl_desc'] = 'URL ntọala maka API. Ọ na-azụlite n\'onye nnye ọ bụla mana enwere ike gbanwee ya. Hapụ ọhọ maka ndabara onye nnye.';
$string['settings:systemprompt'] = 'Templeeti Arịọ Sistemu';
$string['settings:systemprompt_desc'] = 'Arịọ sistemu ezigara AI. Jiri ihe ngọpụta: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Ị bụ nkuzi AI na-enyere aka maka kọọsị "{{coursename}}". Ọrụ nwa akwụkwọ bụ {{userrole}}.

Isiokwu kọọsị a kọwara:
{{coursetopics}}

Nyere nwa akwụkwọ aka ịghọta ihe kọọsị a. Bụrụ onye na-agba ume, doo anya, ma nwee ezigbo usoro nkuzi.';
$string['settings:temperature'] = 'Okpomọkụ';
$string['settings:temperature_desc'] = 'Na-achịkwa ụdịdị oge ntụgharị. Ọnụọgụ dị ala bụ nke nwere ọsọ isi, ọnụọgụ dị elu bụ nke na-emepụta ihe ọhụrụ. Ọnụọgụ: 0.0 ruo 2.0.';
$string['settings:maxhistory'] = 'Ọnụọgụ Kachasị Nke Akụkọ Mkparịta ụka';
$string['settings:maxhistory_desc'] = 'Ọnụọgụ kachasị nke ụzọ ozi itinye n\'arịọ API. A na-ere ozi ọchị.';
$string['settings:avatar'] = 'Avatar Chat';
$string['settings:avatar_desc'] = 'Họrọ akara onyonyo maka bọtịnụ widget chat.';
$string['settings:avatar_saylor'] = 'Akara {$a} (Ndabara)';
$string['settings:position'] = 'Ọnọdụ Widget';
$string['settings:position_desc'] = 'Ọnọdụ nke widget chat n\'ibe ahụ.';
$string['settings:position_br'] = 'Ọnọdụ n\'okpuru aka nri';
$string['settings:position_bl'] = 'Ọnọdụ n\'okpuru aka ekpe';
$string['settings:position_tr'] = 'Ọnọdụ n\'elu aka nri';
$string['settings:position_tl'] = 'Ọnọdụ n\'elu aka ekpe';
$string['chat:settings'] = 'Ntọala plugin';
$string['analytics:viewdashboard'] = 'Lee dashboard analytics';
// Course settings.
$string['coursesettings:title'] = 'Ntọala AI Kọọsị';
$string['coursesettings:enabled'] = 'Gbanye ihe ndọpụta kọọsị';
$string['coursesettings:enabled_desc'] = 'Mgbe ọ na-arụ ọrụ, ntọala dị n\'okpuru ndọpụta ntọala onye nnye AI zuru ụwa ọnụ maka kọọsị a naanị. Hapụ ọhọ ka ha nọdụ ala na uru zuru ụwa ọnụ.';
$string['coursesettings:sola_enabled'] = 'SOLA na nkuzi a';
$string['coursesettings:sola_enabled_toggle'] = 'Gosi ngwa SOLA na nkuzi a';
$string['coursesettings:sola_enabled_desc'] = 'Na-achịkwa ma ngwa mkparịta ụka SOLA ọ̀ ga-apụta na nkuzi a. A na-edobe ndabara maka saịtị niile na ntọala mgbakwunye n\'okpuru General > Default for new courses.';
$string['coursesettings:using_global'] = 'Na-eji ntọala zuru ụwa ọnụ';
$string['coursesettings:saved'] = 'Echekwara ntọala AI kọọsị.';
$string['coursesettings:global_settings_link'] = 'Ntọala AI zuru ụwa ọnụ';
// Language detection and preference.
$string['lang:switch'] = 'Ee, gbanwee';
$string['lang:dismiss'] = 'Mba, daalụ';
$string['lang:change'] = 'Gbanwee asụsụ';
$string['lang:english'] = 'Bekee';
// Chat widget.
$string['chat:title'] = 'Nkuzi AI';
$string['chat:placeholder'] = 'Jụọ ajụjụ...';
$string['chat:send'] = 'Zipu';
$string['chat:close'] = 'Mechie chat';
$string['chat:open'] = 'Meghee mkparịta ụka AI nkuzi';
$string['chat:clear'] = 'Hichapụ akụkọ ihe mere eme';
$string['chat:clear_confirm'] = 'Ị na-agwa m na ị chefuo akụkọ ihe mere eme chat gị maka kọọsị a?';
$string['chat:copy'] = 'Detuo mkparịta ụka';
$string['chat:copied'] = 'Akopịrị mkparịta ụka n\'clipboard';
$string['chat:copy_failed'] = 'Ọ dị njọ ikopịa mkparịta ụka';
$string['chat:thinking'] = 'Na-eche echiche...';
$string['chat:error'] = 'Ndo, ihe ọjọọ mere. Nwaa ọzọ.';
$string['chat:error_auth'] = 'Njehie nyocha. Biko kpọtụrụ onye njikwa gị.';
$string['chat:error_ratelimit'] = 'Ọtụtụ arịọ. Biko chere obere oge wee nwaa ọzọ.';
$string['chat:error_unavailable'] = 'Ọrụ AI adịghị maka oge dị mkpụmkpụ. Nwaa ọzọ n\'oge na-adịghị anya.';
$string['chat:error_notconfigured'] = 'Ahaghị atọala nkuzi AI n\'oge a. Biko kpọtụrụ onye njikwa gị.';
$string['chat:mic'] = 'Kwuo ajụjụ gị';
$string['chat:mic_error'] = 'Njehie maịkrofonụ. Biko lelee ikike browser gị.';
$string['chat:mic_unsupported'] = 'Ọrụ ntinye olu anaghị akwado na browser a.';
$string['chat:newline_hint'] = 'Shift+Enter maka ahịrị ọhụrụ';
$string['chat:you'] = 'Gị';
$string['chat:assistant'] = 'Nkuzi AI';
$string['chat:history_loaded'] = 'Ebanyela mkparịta ụka gara aga.';
$string['chat:history_cleared'] = 'Ehichapụrụ akụkọ ihe mere eme chat.';
$string['chat:offtopic_warning'] = 'O dị ka ajụjụ gị enweghị njikọ na kọọsị a. Biko nọdụ n\'isiokwu ka m wee nwee ike nyere gị ezigbo enyemaka!';
$string['chat:offtopic_ended'] = 'Enyochara ohere iji nkuzi AI gị maka nkeji {$a} n\'ihi na mkparịta ụka hapụrụ isiokwu ọtụtụ ugboro. Biko jiri oge a lelee ihe kọọsị gị, ma ị nwee ike nwaa ọzọ na-adịghị anya.';
$string['chat:offtopic_locked'] = 'Enyochara ohere iji nkuzi AI gị maka oge dị mkpụmkpụ. Ị nwere ike nwaa ọzọ n\'ime nkeji {$a}. Biko leba anya na ajụjụ metụtara kọọsị mgbe ị laghachiri.';
$string['chat:escalated_to_support'] = 'Enweghị m ike zaa ajụjụ gị kpamkpam, yabụ emepụtara m tiketi nkwado maka gị. Onye otu nkwado ga-eso ya. Nọmba ihe ntọala gị bụ: {$a}';
$string['chat:studyplan_intro'] = 'Nwere ike inyere gị aka ịmepụta atụmatụ mmụta maka kọọsị a! Naanị gwa m ọtụtụ awa kwa izu i nwere ike tinye na mmụta, m ga-enyere gị aka wuo atụmatụ dị elu.';
// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ & Nkwado';
$string['settings:faq_heading_desc'] = 'Hazie FAQ nke etiti na nnwekọ tiketi nkwado Zendesk.';
$string['settings:faq_content'] = 'Ọdịnaya FAQ';
$string['settings:faq_content_desc'] = 'Tinye ihe FAQ (otu kwa ahịrị n\'ụdị: Q: ajụjụ | A: azịza). A ga-enye AI ndị a ka o zaa ajụjụ nkwado a na-ahụkarị.';
$string['settings:zendesk_enabled'] = 'Gbanye Nsụgharị Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Mgbe AI enweghị ike dozie ajụjụ nkwado, mepụta tiketi Zendesk ozugbo nwere nchọpụta mkparịta ụka.';
$string['settings:zendesk_subdomain'] = 'Subdomain Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomain Zendesk gị (dị ka "mycompany" maka mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'Email API Zendesk';
$string['settings:zendesk_email_desc'] = 'Adreesị email nke onye ọrụ Zendesk maka nyocha API (nwere suffix /token).';
$string['settings:zendesk_token'] = 'Token API Zendesk';
$string['settings:zendesk_token_desc'] = 'Token API maka nyocha Zendesk.';
// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Nchọpụta Isiokwu Ọzọ';
$string['settings:offtopic_heading_desc'] = 'Hazie otu chat si ese ihe mkparịta ụka pụtara isiokwu.';
$string['settings:offtopic_enabled'] = 'Gbanye Nchọpụta Isiokwu Ọzọ';
$string['settings:offtopic_enabled_desc'] = 'Dezie AI ka ọ chọpụta ma dozie mkparịta ụka pụtara isiokwu.';
$string['settings:offtopic_max'] = 'Ọnụọgụ Kachasị Ozi Pụtara Isiokwu';
$string['settings:offtopic_max_desc'] = 'Ọnụọgụ ozi pụtara isiokwu na-esọ ibe ya tupu mmegide.';
$string['settings:offtopic_action'] = 'Omume Isiokwu Ọzọ';
$string['settings:offtopic_action_desc'] = 'Ihe eme mgbe a ruru oke isiokwu ọzọ.';
$string['settings:offtopic_action_warn'] = 'Dọ aka ná ntị ma dozie';
$string['settings:offtopic_action_end'] = 'Mechie ohere maka oge dị mkpụmkpụ';
$string['settings:offtopic_lockout_duration'] = 'Oge Nchịkọta (nkeji)';
$string['settings:offtopic_lockout_duration_desc'] = 'Ogologo oge (n\'nkeji) nwa akwụkwọ na-enweghị ohere iji nkuzi AI mgbe o gafere oke isiokwu ọzọ. Ndabara: nkeji 30.';
// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Atụmatụ Mmụta & Ihe Ncheta';
$string['settings:studyplan_heading_desc'] = 'Hazie atụmatụ mmụta na ọkwa ozi ihe ncheta.';
$string['settings:studyplan_enabled'] = 'Gbanye Atụmatụ Mmụta';
$string['settings:studyplan_enabled_desc'] = 'Kwe ka nkuzi AI nyere nwa akwụkwọ aka ịmepụta atụmatụ mmụta nke onwe onye dabere na oge ha nwere.';
$string['settings:reminders_email_enabled'] = 'Gbanye Ihe Ncheta Email';
$string['settings:reminders_email_enabled_desc'] = 'Kwe ka nwa akwụkwọ tinye aha ya maka ihe ncheta mmụta site na email.';
$string['settings:reminders_whatsapp_enabled'] = 'Gbanye Ihe Ncheta WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Kwe ka nwa akwụkwọ tinye aha ya maka ihe ncheta mmụta site na WhatsApp (chọrọ nhazi API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Ngalaba API maka izipu ozi WhatsApp (dị ka Twilio, MessageBird). Ọ ga-anakọta POST nwere ahịrị JSON nwere ọhọ "to", "from", na "body".';
$string['settings:whatsapp_api_token'] = 'Token API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token nyocha maka API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Nọmba Onye Zipu WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Nọmba ekwentị iji zipu ozi WhatsApp (nwere koodu mba, dị ka +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Mba WhatsApp Egbochiri';
$string['settings:whatsapp_blocked_countries_desc'] = 'Koodu mba ISO 3166-1 alpha-2 kewapụrụ site n\'oghere n\'ebe ihe ncheta WhatsApp anaghị ekwe maka iwu mba (dị ka "CN,IR,KP").';
// Reminder messages.
$string['reminder:email_subject'] = 'Ihe Ncheta Mmụta: {$a}';
$string['reminder:email_body'] = 'Nnọọ {$a->firstname},

Nke a bụ ihe ncheta mmụta gị maka "{$a->coursename}".

{$a->message}

Atụmatụ mmụta gị na-atụ aro {$a->hours_per_week} awa kwa izu maka kọọsị a.

Nọgide na-arụ ọrụ ọma!

---
Iji kwụsị ịnatara ihe ncheta ndị a, pịa ebe a: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Ihe Ncheta Mmụta maka {$a->coursename}: {$a->message} (Pụọ: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Isiokwu mmụta taa: ';
// Unsubscribe page.
$string['unsubscribe:title'] = 'Pụọ n\'Ihe Ncheta Mmụta';
$string['unsubscribe:success'] = 'Apụọla gị n\'ihe ncheta mmụta maka kọọsị a.';
$string['unsubscribe:already'] = 'Apụọla gị n\'ihe ncheta ndị a.';
$string['unsubscribe:invalid'] = 'Njikọ pụọ adịghị mma ma ọ bụ emechala oge ya.';
$string['unsubscribe:resubscribe'] = 'Agbanwela echiche gị? Ị nwere ike weghachite ihe ncheta site na mkparịta ụka AI nkuzi.';
// Scheduled task.
$string['task:send_reminders'] = 'Zipu ihe ncheta mmụta AI nkuzi';
// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Echekwa atụmatụ mmụta nwa akwụkwọ.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID nke onye nwe atụmatụ mmụta.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kọọsị nke atụmatụ mmụta dị na ya.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Awa kwa izu nwa akwụkwọ na-atụ aro iji mụọ.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Nkọwa atụmatụ mmụta n\'ụdị JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Echekwa nhọrọ ihe ncheta mmụta na ndebanye aha.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID nke onye debanyere aha maka ihe ncheta.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Ụzọ ihe ncheta (email ma ọ bụ whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Adreesị email ma ọ bụ nọmba ekwentị maka ihe ncheta.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Koodu mba onye ọrụ maka ịmachi iwu.';
// Analytics dashboard.
$string['analytics:title'] = 'Analytics AI Nkuzi';
$string['analytics:overview'] = 'Nlele izugbe';
$string['analytics:total_conversations'] = 'Mkparịta ụka niile';
$string['analytics:total_messages'] = 'Ozi niile';
$string['analytics:active_students'] = 'Nwa akwụkwọ na-arụsi ọrụ ike';
$string['analytics:avg_messages_per_student'] = 'Ozi nkezi kwa nwa akwụkwọ';
$string['analytics:offtopic_rate'] = 'Ọnụego isiokwu ọzọ';
$string['analytics:escalation_count'] = 'Ewepụtara n\'nkwado';
$string['analytics:studyplan_adoption'] = 'Nwa akwụkwọ nwere atụmatụ mmụta';
$string['analytics:usage_trends'] = 'Ụkpụrụ Ojiji';
$string['analytics:daily_messages'] = 'Ọnụọgụ ozi kwa ụbọchị';
$string['analytics:hotspots'] = 'Ebe Ndị Ọkụ Kọọsị';
$string['analytics:hotspots_desc'] = 'Ngalaba kọọsị a na-akpọrịta n\'ajụjụ nwa akwụkwọ kachasị. Ọnụọgụ dị elu nwere ike gosị ebe ọ dị mkpa ka e nwee nkwado ọzọ.';
$string['analytics:section'] = 'Ngalaba';
$string['analytics:mention_count'] = 'Ọnụọgụ okwuo';
$string['analytics:common_prompts'] = 'Ụdị Arịọ A Na-ahụkarị';
$string['analytics:common_prompts_desc'] = 'Ụdị ajụjụ a na-ahụkarị sitere n\'ọnụ nwa akwụkwọ. Lelee ndị a iji chọpụta ọdịmma na-abịaru n\'ọdịnaya kọọsị.';
$string['analytics:prompt_pattern'] = 'Ụdị';
$string['analytics:frequency'] = 'Ugboro ugboro';
$string['analytics:recent_activity'] = 'Ọrụ Ọhụrụ';
$string['analytics:no_data'] = 'Enweghị data analytics dị maka ugbu a. Data ga-apụta ozugbo nwa akwụkwọ malite iji nkuzi AI.';
$string['analytics:timerange'] = 'Oge';
$string['analytics:last_7_days'] = 'Ụbọchị 7 gara aga';
$string['analytics:last_30_days'] = 'Ụbọchị 30 gara aga';
$string['analytics:all_time'] = 'Oge niile';
$string['analytics:export'] = 'Mepụta data';
$string['analytics:provider_comparison'] = 'Ntụnyere Onye Nnye AI';
$string['analytics:provider_comparison_desc'] = 'Tụnyere arụmọrụ n\'etiti ndị nnye AI ejiri na kọọsị a.';
$string['analytics:provider'] = 'Onye nnye';
$string['analytics:response_count'] = 'Ọsịsa';
$string['analytics:avg_response_length'] = 'Ogologo ọsịsa nkezi';
$string['analytics:total_tokens'] = 'Tokens niile';
$string['analytics:avg_tokens'] = 'Tokens nkezi / ọsịsa';
// User settings.
$string['usersettings:title'] = 'Onye Enyemaka AI Nkuzi - Data Gị';
$string['usersettings:intro'] = 'Njikwa data mkparịta ụka AI nkuzi gị na ntọala nzuzo';
$string['usersettings:privacy_info'] = 'Echekwara mkparịta ụka gị na nkuzi AI iji nye gị nkwado na-adịghị adị ngwụcha n\'oge kọọsị gị. Ị nwere ikike zuru ezu n\'elu data a ma nwere ike hichapụ ya oge ọ bụla.';
$string['usersettings:usage_stats'] = 'Ihe Ọmụma Ojiji Gị';
$string['usersettings:total_messages'] = 'Ozi niile';
$string['usersettings:total_conversations'] = 'Mkparịta ụka';
$string['usersettings:messages'] = 'Ozi';
$string['usersettings:last_activity'] = 'Ọrụ ikpeazụ';
$string['usersettings:delete_course_data'] = 'Hichapụ data kọọsị';
$string['usersettings:no_data'] = 'Ejigideghị gị nkuzi AI n\'oge a. Data ojiji gị ga-apụta ebe a ozugbo ị malite mkparịta ụka.';
$string['usersettings:delete_all_title'] = 'Hichapụ Data Gị Niile';
$string['usersettings:delete_all_warning'] = 'Nke a ga-ehichapụ mkparịta ụka AI nkuzi gị niile n\'kọọsị niile n\'oge niile. Enwere ike ighọghachi omume a.';
$string['usersettings:delete_all_button'] = 'Hichapụ Data M Niile';
$string['usersettings:confirm_delete_course'] = 'Ị na-agwa m na ị chefuo data AI nkuzi gị niile maka kọọsị "{$a}" n\'oge niile? Enwere ike ighọghachi omume a.';
$string['usersettings:confirm_delete_all'] = 'Ị na-agwa m na ị chefuo data AI nkuzi gị niile n\'kọọsị niile n\'oge niile? Enwere ike ighọghachi omume a.';
$string['usersettings:data_deleted'] = 'Ehichapụrụ data gị.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Nnọọ, {$a}! Abụ m SOLA. Kedu ka m ga-esi nyere gị aka taa?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Meghee SOLA';
$string['chat:change_avatar'] = 'Gbanwee avatar';

// Quiz UI.
$string['chat:quiz'] = 'Nwaa ule mmụta';
$string['chat:quiz_setup_title'] = 'Ule Mmụta';
$string['chat:quiz_questions'] = 'Ọnụọgụ ajụjụ';
$string['chat:quiz_topic'] = 'Isiokwu';
$string['chat:quiz_topic_guided'] = 'AI na-eduzi (dabere na ọganihu gị)';
$string['chat:quiz_topic_default'] = 'Ọdịnaya kọọsị ugbu a';
$string['chat:quiz_topic_custom'] = 'Isiokwu nke onwe onye…';
$string['chat:quiz_custom_placeholder'] = 'Tinye isiokwu ma ọ bụ ajụjụ...';
$string['chat:quiz_start'] = 'Malite Ule';
$string['chat:quiz_cancel'] = 'Kagbuo';
$string['chat:quiz_loading'] = 'Na-emepụta ule…';
$string['chat:quiz_error'] = 'Enweghị ike imepụta ule. Biko nwaa ọzọ.';
$string['chat:quiz_correct'] = 'Ọ dị mma!';
$string['chat:quiz_wrong'] = 'Ọ dịghị mma.';
$string['chat:quiz_next'] = 'Ajụjụ ọzọ';
$string['chat:quiz_finish'] = 'Hụ nsonaazụ';
$string['chat:quiz_score'] = 'Ule agwụla! Ị nwetara {$a->score} n\'ime {$a->total}.';
$string['chat:quiz_summary'] = 'Agwụsiara m ule mmụta nwere ajụjụ {$a->total} n\'isiokwu "{$a->topic}" ma nweta {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Ebumnuche Mmụta';
$string['chat:quiz_topic_modules'] = 'Isiokwu Kọọsị';
$string['chat:quiz_subtopic_select'] = 'Họrọ ihe a kapịrị ọnụ…';
$string['chat:quiz_topic_sections'] = 'Ngalaba Kọọsị';
$string['chat:quiz_score_great'] = 'Ọrụ dị mma! Ị maara ihe a nke ọma.';
$string['chat:quiz_score_good'] = 'Ọrụ dị mma! Nọgide na-ato ya ụtọ iji kwado nghọta gị.';
$string['chat:quiz_score_practice'] = 'Nọgide na-amụ — nwaa lelee ihe kọọsị metụtara ya, wee laghachi nwaa ule ọzọ.';
$string['chat:quiz_review_heading'] = 'Nlele Ọzọ';
$string['chat:quiz_retake'] = 'Laghachi Nwaa Ule';
$string['chat:quiz_exit'] = 'Pụọ n\'Ule';
$string['chat:quiz_your_answer'] = 'Azịza gị';
$string['chat:quiz_correct_answer'] = 'Azịza ziri ezi';

// Conversation starters.
$string['chat:starters_label'] = 'Ndị na-amalite mkparịta ụka';
$string['chat:starter_quiz'] = 'Nwaa M Ule na Nke A';
$string['chat:starter_explain'] = 'Kọwa Nke a';
$string['chat:starter_key_concepts'] = 'Echiche Isi';
$string['chat:starter_study_plan'] = 'Atụmatụ Mmụta';
$string['chat:starter_help_me'] = 'Enyemaka AI';
$string['chat:starter_ai_project_coach'] = 'Onye Nkuzi Ọrụ AI';
$string['chat:starter_ell_practice'] = 'Mmụta Mkparịta Ụka';
$string['chat:starter_ell_pronunciation'] = 'Mkpọ Okwu ELL';
$string['chat:starter_ai_coach'] = 'Onye Nkuzi AI';
$string['chat:starter_speak'] = 'Kwuo ihe mmụ ọrụ';

// Reset / home.
$string['chat:reset'] = 'Malite ọzọ';

// Topic picker.
$string['chat:topic_picker_title'] = 'Kedu ihe ị chọrọ ileba anya na ya?';
$string['chat:topic_picker_title_help'] = 'Kedu ihe ịchọrọ enyemaka na ya?';
$string['chat:topic_picker_title_explain'] = 'Kedu ihe ịchọrọ ka m kọwa?';
$string['chat:topic_picker_title_study'] = 'Kedu mpaghara ịchọrọ ileba anya na ya?';
$string['chat:topic_start'] = 'Gaa n\'ihu';

// Expand states.
$string['chat:fullscreen'] = 'Ọnọdụ ihuenyo zuru ezu';
$string['chat:exitfullscreen'] = 'Pụọ n\'ọnọdụ ihuenyo zuru ezu';

// Settings panel.
$string['chat:language'] = 'Gbanwee asụsụ';
$string['chat:settings_panel'] = 'Ntọala';
$string['chat:settings_language'] = 'Asụsụ';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Olu';
$string['chat:settings_voice_admin'] = 'A na-achịkwa ntọala olu na paneli onye njikwa saịtị.';

// Voice mode.
$string['chat:voice_mode'] = 'Ọnọdụ olu';
$string['chat:voice_end'] = 'Kwụsị oge mkparịta ụka olu';
$string['chat:voice_connecting'] = 'Na-ejikọ...';
$string['chat:voice_listening'] = 'Na-ege ntị...';
$string['chat:voice_speaking'] = 'SOLA na-ekwu okwu...';
$string['chat:voice_idle'] = 'Dị njikere';
$string['chat:voice_error'] = 'Njikọ olu dara ada. Biko lelee ntọala gị.';
$string['chat:quiz_locked'] = 'A kwụsịtara SOLA n\'oge ule iji kwado ịdị ziri ezi n\'ọmụmụ ihe. Ọ ga-adị mma!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Ndetu';

// History panel.
$string['chat:history_title'] = 'Ndetu na Akụkọ Mkparịta Ụka';
$string['task:send_inactivity_reminders'] = 'Ziga ozi email ncheta nke izu nke izu maka enweghị ọrụ';
$string['messageprovider:study_notes'] = 'Ndetu oge ọmụmụ ihe';
$string['task:send_inactivity_reminders'] = 'Ziga ozi email ncheta nke izu maka enweghị ọrụ';
$string['messageprovider:study_notes'] = 'Ndetu oge ọmụmụ ihe';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Nnyefe Ihu';
$string['settings:cdn_heading_desc'] = 'Nye akụkụ ihu SOLA (JS/CSS) site na CDN mpụga kama usoro faịlụ Moodle. Nke a na-enye ohere mmelite ihu na-enweghị nkwalite plugin. Hapụ CDN URL ka ọ tọgbọrọ n\'efu iji jiri faịlụ plugin mpaghara.';
$string['settings:cdn_url'] = 'URL Ntọala CDN';
$string['settings:cdn_url_desc'] = 'URL ntọala ebe a na-akwado sola.min.js na sola.min.css. Ọmụmaatụ: https://your-org.github.io/sola-cdn. Hapụ ya ka ọ tọgbọrọ n\'efu iji jiri faịlụ plugin mpaghara.';
$string['settings:cdn_version'] = 'Ụdị akụkụ CDN';
$string['settings:cdn_version_desc'] = 'Eriri ụdị agbakwunyere na CDN URLs maka cache busting. Melite ya mgbe ọ bụla emechara CDN deploy (dịka 3.2.4 ma ọ bụ commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Ojiri niile';
$string['analytics:tab_bycourse'] = 'Site kọọsu';
$string['analytics:tab_comparison'] = 'AI na ndị anaghị eji ya';
$string['analytics:tab_byunit'] = 'Site nkeji';
$string['analytics:tab_usagetypes'] = 'Ụdị ojiri';
$string['analytics:tab_themes'] = 'Isiokwu';
$string['analytics:tab_feedback'] = 'Nzaghachi AI';
$string['analytics:total_students'] = 'Ndi nkuzi niile';
$string['analytics:active_users'] = 'Ndị na-eji AI eme ihe';
$string['analytics:msgs_per_student'] = 'Ozi kwa onye nkuzi';
$string['analytics:avg_session'] = 'Oge nnọkọ nkezi';
$string['analytics:return_rate'] = 'Ọnụego nlọghachi';
$string['analytics:total_sessions'] = 'Nnọkọ niile';
$string['analytics:thumbs_up'] = 'Mkpịsị aka elu';
$string['analytics:thumbs_down'] = 'Mkpịsị aka ala';
$string['analytics:hallucination_flags'] = 'Akara nghọ';
$string['analytics:msgs_to_resolution'] = 'Ozi ruo mgbazi';
$string['analytics:helpful'] = 'Na-enyere aka';
$string['analytics:not_helpful'] = 'Anaghị enyere aka';
$string['analytics:flag_hallucination'] = 'Azịza a nwere ozi na-ezighi ezi';
$string['analytics:submit_rating'] = 'Ziga';
$string['analytics:thanks_feedback'] = 'Daalụ maka nzaghachi gị';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_groq'] = 'Groq';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Kọwaa peeji a';
$string['chat:starter_ask_anything'] = 'Jụọ ihe ọ bụla';
$string['chat:starter_review_practice'] = 'Nyochaa ma mụọ';
$string['chat:history_saved_subtitle'] = 'Azịza echekwara na-anọ na ngwaọrụ a maka nkuzi a.';
$string['chat:history_saved_empty'] = 'Chekwaa azịza AI ka ịhụ ya ebe a.';
$string['chat:history_views_label'] = 'Nlele akụkọ ihe mere eme';
$string['chat:history_view_saved'] = 'Echekwara';
$string['chat:history_view_recent'] = 'Akụkọ ihe mere eme';
$string['chat:debug_refresh'] = 'Megharịa';
$string['chat:debug_copy_all'] = 'Detuo niile';
$string['chat:debug_close'] = 'Mechie';
$string['chat:language_switch'] = 'Gbanwee asụsụ';
$string['chat:language_dismiss'] = 'Wepụ aro asụsụ';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Họrọ onye na-enye LLM';
$string['chat:llm_model_label'] = 'Ụdị';
$string['chat:llm_model_select'] = 'Họrọ ụdị LLM';
$string['chat:footer_usertesting'] = 'Nyocha nke ojiji';
$string['chat:footer_feedback'] = 'Nzaghachi';
$string['chat:voice_panel_title'] = 'Kpaa {$a} okwu (Nnwale)';
