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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Onye Enyemaka AI Nkuzi';
$string['attachment:attach'] = 'Ntinye';
$string['attachment:attach_image_or_pdf'] = 'Tinye foto ma ọ bụ PDF';
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
$string['settings:auto_open'] = 'Mepee onwe ya na nleta mbụ';
$string['settings:auto_open_desc'] = 'Mgbe agbanyere ya, drawer SOLA na-emepe onwe ya na nke mbụ nwa akwụkwọ rutere n\'ihe ọ bụla. Ibu peeji na-esote n\'otu ihe ọmụmụ anaghị emepe drawer ọzọ — ọnọdụ ka a na-eso ya na nchọgharị nwa akwụkwọ site na localStorage. Na-emetụta na desktop na mobile. Enwere ike ịgbanwere ya site na ibe Course AI Settings.';
$string['settings:comparison_providers'] = 'Ndị na-enye ọsọ ntụnyere (nhọrọ LLM)';
$string['settings:comparison_providers_desc'] = 'Tinye ndị na-enye AI ọzọ na nhọrọ LLM dị n\'ime widget ka ndị nchịkwa nwee ike iji tụnyere azịza n\'etiti ndị na-enye. Jiri tebụl dị n\'okpuru tinye ahịrị. Kọlụm okpomọkụ bụ nhọrọ (hapụ ya efu iji jiri okpomọkụ ụwa niile). Usoro echekwara: provider_id|api_key|model1,model2|temperature. Onye na-enye bụ isi a haziri n\'elu na-abụ n\'ime ya na akpaghị aka mgbe niile. Naanị ndị nchịkwa nwere ikike ijikwa na-ahụ nhọrọ ahụ; ụmụ akwụkwọ anaghị ahụ ya. Provider IDs ziri ezi: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Onye Nnye AI ndabara';
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
$string['chat:clear'] = 'Clear screen';
$string['chat:clear_confirm'] = 'Clear the visible messages? Your full chat history stays saved and can be reloaded by reopening the widget.';
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
$string['chat:quiz_topic_adaptive']      = 'A na-emegharị — lekwasị anya na adịghị ike m';
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
$string['task:run_meta_ai_query'] = 'Gbaa ajụjụ nyocha Learning Radar a haziri';
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
$string['chat:voice_panel_title']       = 'Talk with {$a}';

// Additional translated strings.
$string['chat:debug_context'] = 'Nyocha nkọwa';
$string['chat:debug_context_browser'] = 'Foto nchọgharị';
$string['chat:debug_context_copy'] = 'Detuo';
$string['chat:debug_context_prompt'] = 'Nzaghachi sava';
$string['chat:debug_context_request'] = 'Arịrịọ SSE ikpeazụ';
$string['chat:debug_context_toggle'] = 'Gbanwee';
$string['chat:history_empty'] = 'Enweghị mkparịta ụka.';
$string['chat:history_refresh'] = 'Mee ọhụrụ';
$string['chat:history_subtitle'] = 'Ozi gị nke na-adịbeghị anya.';
$string['chat:starter_explain_prompt'] = 'Kọwaa echiche kachasị mkpa?';
$string['chat:starter_help_lesson'] = 'Kọwaa nke a';
$string['chat:starter_help_lesson_prompt'] = 'Nyere m aka ghọta nkuzi a. Kọwaa echiche ndị isi.';
$string['chat:starter_prompt_coach'] = 'Onye nkuzi AI';
$string['chat:starter_quick_study'] = 'Ọmụmụ ngwa ngwa';
$string['chat:starter_study_plan_prompt'] = 'Achọrọ m ịhazi ọmụmụ. Jụọ: (1) ebumnuche, (2) oge. Melite atụmatụ.';
$string['chat:voice_copy'] = 'Mkparịta ụka olu na onye nyere aka.';
$string['chat:voice_ready'] = 'Njikere';
$string['chat:voice_start'] = 'Malite';
$string['chat:voice_title'] = 'Kwurịta na SOLA';
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
$string['mobile_chip_concepts'] = 'Echiche ndị isi';
$string['mobile_chip_quiz'] = 'Ajụjụ';
$string['mobile_chip_studyplan'] = 'Atụmatụ ọmụmụ';
$string['mobile_clear'] = 'Hichapụ akụkọ';
$string['mobile_disabled'] = 'SOLA adịghị maka usoro nkuzi a.';
$string['mobile_placeholder'] = 'Jụọ ajụjụ...';
$string['mobile_welcome'] = 'Ndewo, {$a}!';
$string['mobile_welcome_sub'] = 'Abụ m SOLA, onye nyere aka ịmụ ihe gị. Kedu ka m ga-esi nyere gị aka?';
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
$string['rubric:done'] = 'Emechara';
$string['rubric:encourage_high'] = 'Ọrụ dị mma! Gaa n\'ihu!';
$string['rubric:encourage_low'] = 'Mmalite ọma! Omume mgbe niile ga-enyere aka.';
$string['rubric:encourage_mid'] = 'Mbọ ọma! Gaa n\'ihu na-eme.';
$string['rubric:overall'] = 'N\'ozuzu';
$string['rubric:practice_again'] = 'Mee ọzọ';
$string['rubric:score_title_conversation'] = 'Akara mmụta mkparịta ụka';
$string['rubric:score_title_pronunciation'] = 'Akara mmụta mkpọpụta';
$string['rubric:scoring'] = 'Na-atụle...';
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
$string['usersettings:download'] = 'Budata data {$a} m';
$string['usersettings:download_help'] = 'Budata otu mbipụta JSON zuru oke nke ndekọ {$a} ọ bụla jikọtara na akaụntụ gị: mkparịta ụka, ozi, nlebanya, atụmatụ ọmụmụ, ihe ncheta, akara mmega, azịza nyocha, profaịlụ, na ndenye nlele.';
$string['usersettings:privacy_notice_link'] = 'Gụọ ọkwa nzuzo {$a}';
$string['privacy:title'] = 'Ọkwa Nzuzo {$a}';
$string['admin:user_data:title'] = '{$a} — Mbupụ na nhichapụ data ọmụmụ';
$string['admin:user_data:intro'] = 'Ụzọ ọrụ maka arịrịọ GDPR Nkebi 15 (ohere) ma ọ bụ Nkebi 17 (nhichapụ). Chọọ onye ọmụmụ site na id onye ọrụ Moodle, lelee ahịrị ngwa a debere maka ya, wee bupụ ma ọ bụ hichapụ.';
$string['admin:user_data:search_label'] = 'Id onye ọrụ Moodle';
$string['admin:user_data:lookup'] = 'Chọọ';
$string['admin:user_data:not_found'] = 'Achọtaghị onye ọrụ ọ bụla nwere id ahụ.';
$string['admin:user_data:download'] = 'Budata data ọmụmụ niile dị ka JSON';
$string['admin:user_data:purge'] = 'Hichapụ data ọmụmụ niile maka onye ọrụ a';
$string['admin:user_data:confirm_purge'] = 'Hichapụ kpamkpam ndekọ ọ bụla maka {$a}? Nke a na-emetụta mkparịta ụka, ozi, nlebanya, atụmatụ ọmụmụ, ihe ncheta, profaịlụ, akara mmega, nyocha, ndenye nlele, na nzaghachi. Enweghị ike ịkagbu omume a.';
$string['admin:user_data:purged'] = 'Data niile maka onye ọrụ ahọpụtara ka ehichapụla.';
$string['chat:consent_heading'] = 'Tupu ị soro {$a->product} kparịta ụka';
$string['chat:consent_body'] = '{$a->product} bụ onye enyemaka mmụta nke AI na-akwado. Ozi gị na azịza nke {$a->product} ka echekwara na ọdụ data Moodle nke {$a->institution}, a na-ezigara ndị nchịkwa nke ụlọ ọrụ AI akwadoro mgbanwe iri kachasị ọhụrụ ka ha zaa ajụjụ gị. A na-ekekọrịta aha mbụ gị maka nhazi onwe; akụkọ nchọpụta ndị ọzọ adịghị eziga ndị nchịkwa AI. Ị nwere ike ịbudata, ihichapụ, ma ọ bụ kwụsị iji {$a->product} mgbe ọ bụla.';
$string['chat:consent_accept'] = 'Aghọtara m, malite {$a}';
$string['chat:consent_privacy_link'] = 'Gụọ ọkwa nzuzo zuru oke';
$string['task:audit_cleanup'] = 'Nhicha tebụl nlele AI Course Assistant';
$string['task:conversation_retention'] = 'Nhicha njide mkparịta ụka AI Course Assistant';
$string['settings:audit_retention_days'] = 'Njide ndekọ nlele (ụbọchị)';
$string['settings:audit_retention_days_desc'] = 'Ọrụ ahaziri kwa ụbọchị na-ehichapụ ahịrị nlele ochie karịa nke a. 0 na-emechi ya. Ndabara 365.';
$string['settings:conversation_retention_days'] = 'Njide mkparịta ụka (ụbọchị)';
$string['settings:conversation_retention_days_desc'] = 'Ọrụ ahaziri kwa ụbọchị na-ehichapụ ahịrị mkparịta ụka nke akara oge mgbanwe ikpeazụ ya ochie karịa nke a. 0 na-emechi ya. Ndabara 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Isi njedebe SSRF a tụkwasịrị obi';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Otu URL n\'ahịrị ọ bụla. Ndị ọbịa edepụtara na-agafe nyocha loopback / private-IP / naanị-https n\'ime ndị nyocha SSRF nke SOLA. Jiri nke a naanị maka LLM nke onwe-onye n\'elu netwọk ị na-achịkwa — dịka ọmụmaatụ <code>http://localhost:11434</code> maka Ollama mpaghara, <code>http://10.0.0.5:8000</code> maka vLLM pod n\'otu VPC. Ntụnyere na-egbo scheme + host + port; ezubere ọ bụla a na-eleghara anya. Ndabara efu (gbochie ihe niile dị n\'ime). Ahịrị ndị na-amalite na <code>#</code> bụ nkọwa.';
$string['task:learner_weekly_digest']    = 'AI Onye Inyeaka Ọmụmụ - Nchịkọta Kwa Izu Nke Onye Mmụta';
$string['learner_digest:subject']        = 'Izu gị na {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Ịchọrọ ozi-e dị mkpụmkpụ kwa izu maka ihe ị ga-elekwasị anya ya na-esote?';
$string['next_best_action:get_started']           = 'Bido na {$a->title}. Meghee m wee jụọ "nyere m aka na {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Bido na {$a->title}. Modul "{$a->module}" na-ekpuchi ya.';
$string['next_best_action:review']                = 'Lelee ihe ndị bụ isi nke {$a->title} — meghee m wee jụọ "kọwaa m {$a->title} dị ka m bụ ọhụrụ".';
$string['next_best_action:review_with_module']    = 'Lelee ihe ndị bụ isi nke {$a->title} na "{$a->module}", emechaa meghee m na ajụjụ ọ bụla.';
$string['next_best_action:practice']              = 'Wuo n\'elu ihe ị nwere na {$a->title}. Meghee m wee jụọ "nye m ihe atụ a dozichara maka {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Mee ihe na {$a->title} n\'akụkụ "{$a->module}". Meghee m maka ihe atụ ndị a dozichara.';
$string['next_best_action:quiz']                  = 'Mechi {$a->title} site na nlele ngwa ngwa. Meghee m wee họrọ "Lee m — mgbanwe".';
$string['next_best_action:quiz_with_module']      = 'Mechi {$a->title} site na nlele ngwa ngwa. Modul "{$a->module}" bụ ebe ọ na-ebi.';
$string['next_best_action:empty_state']           = 'Ị na-eme nke ọma na ebumnobi ọ bụla ugbu a — enweghị ihe a ga-echeta. Gaa n\'ihu.';
$string['next_best_action:header']                = 'Lee {$a} ihe ị ga-elekwasị anya na ya na-esote:';
$string['learner_digest:unsubscribe_done_title']  = 'Akpọchapụrụ aha';
$string['learner_digest:unsubscribe_done_body']   = 'Emechara — ị gaghị enwetakwa ozi-e kwa izu maka nkuzi a site na {$a->product}. Ị nwere ike ịdebanye aha gị mgbe ọ bụla site na windo nkata na nkuzi gị.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Njikọ mkpochapụ aha enwekwaghị ire';
$string['learner_digest:unsubscribe_invalid_body']  = 'Njikọ mkpochapụ aha a egwụla ma ọ bụ na ọ rụrụ arụ. Ị nwere ike ijikwa mmasị ozi-e site na ntọala nke nkuzi gị.';
$string['active_learners:line']                   = '{$a} ndị ọzọ na-amụ nkuzi a ugbu a.';
$string['active_learners:line_global']             = '{$a} ndị ọzọ na-amụ ihe ugbu a.';
$string['settings:active_learners_scope']          = 'Oke nke ihe nrịbama ndị mmụta na-arụ ọrụ';
$string['settings:active_learners_scope_desc']     = 'Ma nrịbama "ndị ọzọ na-amụ ihe ugbu a" n\'elu ndị mmalite nkata na-agụ ndị mmụta naanị n\'otu nkuzi ma ọ bụ ndị mmụta n\'akụkụ saịtị niile. Ndabara <strong>zuru ụwa ọnụ</strong>.';
$string['settings:active_learners_scope_global']   = 'Zuru ụwa ọnụ (nkuzi ọ bụla)';
$string['settings:active_learners_scope_course']   = 'Naanị nkuzi';
$string['learner_digest:optin_yes']      = 'Ee, ziga m ozi-e kwa izu';
$string['learner_digest:optin_no']       = 'Mba, daalụ';
$string['learner_digest:optin_thanks']   = 'Nke ahụ adịla. Ị ga-enweta nchịkọta kwa izu Mọnde ọ bụla.';
$string['learner_digest:optin_declined'] = 'Nke ahụ adịla. Enweghị ozi-e - meghee m mgbe ọ bụla ị chọrọ nlele.';
$string['settings:xai_proxy_url'] = 'URL nnọchite anya xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'URL wss ọha nke ọrụ nnọchite anya xAI Realtime SOLA (dịka ọmụmaatụ wss://voice.example.com/xai-rt/rt). Mgbe a tọrọ nke a yana ihe nzuzo JWT, olu xAI na-aga site na nnọchite anya, igodo API xAI nke nna ukwu adịghị eru ihe nchọgharị mgbe ọ bụla. Hapụ ya efu ka ịdaba na njikọ ozugbo (anaghị akwado maka mmepụta).';
$string['settings:xai_proxy_jwt_secret'] = 'Ihe nzuzo JWT nnọchite anya xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Ihe nzuzo HS256 ekekọrịtara nke a na-eji bịanyere aka na akara nnọkọ obere oge maka nnọchite anya xAI Realtime. Ọ ga-adaba na ihe nzuzo MOODLE_JWT_SECRET na Cloudflare Worker. Tụgharịa ya mgbe niile.';
$string['admin:vendor_dpa:title'] = '{$a} — Ọnọdụ DPA nke ndị na-ere ahịa';
$string['admin:vendor_dpa:intro'] = 'Ọnọdụ ịpụ na ọzụzụ, DPA, na njide maka ụgbọ AI ọ bụla. Were nke a kpebie nke ụgbọ ị ga-akwado na saịtị gị. Iduzi Tier 2 na elu chọrọ DPA bịanyere aka yana ịpụ na ọzụzụ nkwekọrịta.';
$string['admin:vendor_dpa:maintenance_note'] = 'A na-edobe tebụl a na classes/vendor_registry.php. Melite ya mgbe mgbanwe ToS nke onye na-ere ahịa rute.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Email Onye Nlekọta Nchekwa Data';
$string['settings:dpo_email_desc'] = 'Email kọntaktị ngosipụta na ọkwa nzuzo onye ọmụmụ n\'okpuru "Kọntaktị". Hapụ ya efu ka izochie ahịrị ahụ. Mwube nrubeisi kwesịrị ịtụzi nke a na DPO nke ha.';
$string['settings:privacy_external_url'] = 'URL ibe nzuzo nke ụlọ ọrụ';
$string['settings:privacy_external_url_desc'] = 'Njikọ na ibe nzuzo ọkwa ụlọ ọrụ, ngosipụta na ọkwa nzuzo onye ọmụmụ n\'okpuru "Kọntaktị". Hapụ ya efu ka izochie ahịrị ahụ.';
$string['settings:privacy_notice_override'] = 'Mgbanwe ọkwa nzuzo (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Ọ bụrụ na atọrọ ya, HTML a na-anọchi ọkwa nzuzo akara aka nke ndabara ekpughere na /local/ai_course_assistant/privacy.php. Jiri nke a tinye ederede Iwu nyochara maka ụlọ ọrụ gị na-edezighị koodu. Hapụ ya efu iji jiri ọkwa ndabara, nke na-enweta ederede ya site na igodo nhazi akara aka asaa.';
$string['objectives:title'] = 'Ebumnobi mmụta na nke a kọwapụtara';
$string['objectives:toggles_heading'] = 'Nsochi nke a kọwapụtara';
$string['objectives:toggle_master'] = 'Mee ka nsochi nke a kọwapụtara rụọ ọrụ maka usoro a';
$string['objectives:toggle_chip'] = 'Gosi chip Nke a Kọwapụtara Mmụta nye ụmụ akwụkwọ';
$string['objectives:toggle_chip_help'] = 'Nhọrọ. Mgbe gbanyụrụ, nke a kọwapụtara ka na-eduzi onye enyemaka na nzuzo mana ndị mmụta anaghị ahụ ihe ngosi.';
$string['objectives:toggled'] = 'Emelitere ntọala.';
$string['objectives:detected_heading'] = 'Achọpụtara ebumnobi mmụta {$a->count} site na {$a->source}.';
$string['objectives:source_competency'] = 'Ikike Moodle';
$string['objectives:source_summary'] = 'nchịkọta usoro';
$string['objectives:source_section'] = 'akụkụ ma ọ bụ ọdịnaya ibe mbụ';
$string['objectives:source_page'] = 'ibe usoro';
$string['objectives:source_llm'] = 'mmịpụta AI';
$string['objectives:source_manual'] = 'ntinye aka';
$string['objectives:source_none'] = 'enweghị isi mmalite akpaaka';
$string['objectives:import_detected'] = 'Bubata ebumnobi ndị achọpụtara ndị a';
$string['objectives:import_llm'] = 'Wepụ ebumnobi site na AI';
$string['objectives:llm_empty'] = 'Mmịpụta AI ewepụtaghị ebumnobi ọ bụla. Nwaa ọzọ ma ọ bụ tinye ha n\'aka.';
$string['objectives:imported'] = 'Ebubatala ebumnobi {$a}.';
$string['objectives:none_detected'] = 'Achọpụtaghị ebumnobi mmụta ọ bụla na-akpaghị aka. Tinye ha n\'aka n\'okpuru, ma ọ bụ jiri mmịpụta AI.';
$string['objectives:list_heading'] = 'Ebumnobi ugbu a';
$string['objectives:col_code'] = 'Koodu';
$string['objectives:col_title'] = 'Aha';
$string['objectives:col_source'] = 'Isi mmalite';
$string['objectives:col_actions'] = 'Omume';
$string['objectives:add_heading'] = 'Tinye ebumnobi';
$string['objectives:add_submit'] = 'Tinye ebumnobi';
$string['objectives:saved'] = 'Echekwala ebumnobi.';
$string['objectives:deleted'] = 'Ehichapụla ebumnobi.';
$string['objectives:delete_confirm'] = 'Hichapụ ebumnobi a na akụkọ ihe mere eme niile maka ya?';
$string['objectives:delete_all'] = 'Hichapụ ebumnobi niile maka usoro a';
$string['objectives:delete_all_confirm'] = 'Hichapụ ebumnobi ọ bụla na akụkọ ihe mere eme niile maka usoro a? Enweghị ike ịkagbu.';
$string['objectives:deleted_all'] = 'Ehichapụla ebumnobi niile maka usoro a.';
$string['mastery:chip_aria'] = 'Ọnọdụ nke a kọwapụtara mmụta';
$string['mastery:popover_aria'] = 'Nkọwa nke a kọwapụtara mmụta';
$string['mastery:chip_label'] = '{$a->mastered} n\'ime {$a->total} ka akọwapụtara';
$string['mastery:status_mastered'] = 'akọwapụtara';
$string['mastery:status_learning'] = 'na-aga n\'ihu';
$string['mastery:status_not_started'] = 'amalitebeghị';
$string['mastery:popover_empty'] = 'Enweghị ebumnobi mmụta ahaziri maka usoro a.';
$string['settings:mastery_heading'] = 'Nsochi nke a kọwapụtara';
$string['settings:mastery_heading_desc'] = 'Atụmatụ nke usoro nke a họọrọ na-akọwapụta azịza ule na mgbanwe mkparịta ụka nke onye enyemaka megide ebumnobi mmụta nke usoro, wee nye nchịkọta nke a kọwapụtara dị mkpa azụ na ngwa usoro iji duzie ajụjụ. Nway\'ọ na ndabara: ndị mmụta anaghị ahụ ihe ọ bụla ma ọ bụrụhaala na agbanyere chip nke usoro.';
$string['settings:mastery_threshold'] = 'Akara nke a kọwapụtara';
$string['settings:mastery_threshold_desc'] = 'Izi ezi na-agagharị na ma ọ bụ n\'elu ya, e were ya na ebumnobi ka akọwapụtara. 0.0 ruo 1.0. Ndabara 0.85.';
$string['settings:mastery_window'] = 'Windo mgbalị';
$string['settings:mastery_window_desc'] = 'Ọnụ ọgụgụ mgbalị kachasị ọhụrụ kwa ebumnobi ịdị arọ na izi ezi na-agagharị. Ndabara 8.';
$string['settings:mastery_decay_enabled']        = 'Kwado mbelata nka';
$string['settings:mastery_decay_enabled_desc']   = 'Mgbe agbanyere ya, akara nka na-ebelata na oge megide akara oge nke nnwale na-adịbeghị anya. Ebumnobi ejiri njọ tupu mgbe ahụ na-alaghachi na "amụ" mgbe oge zuru ezu gachara. Anaghị ada n\'okpuru "amụ". <strong>Ndabara gbanyụrụ na v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Ọkara ndụ mbelata nka (ụbọchị)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Ọkara ndụ na ụbọchị. A na-amụba akara site na 0.5 ^ (ụbọchị kemgbe nnwale ikpeazụ / ọkara ndụ). Ndabara 30. A na-eji ya naanị mgbe agbanyere mbelata.';
$string['settings:mastery_classifier_model'] = 'Ụdịdị nhazi';
$string['settings:mastery_classifier_model_desc'] = 'Ụdịdị eji ekewa mgbanwe onye enyemaka megide ebumnobi. Hapụ ya efu iji nweta ụdịdị onye nchịkwa AI ndabara; ma ọ bụghị ya, kwupụta ụdịdị dị ọnụ ala dịka gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Ịdị arọ nhazi';
$string['settings:mastery_classifier_weight_desc'] = 'Ole mgbalị mkparịta ụka na-agụ ya megide mgbalị ule (1.0). Ndabara 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Akara ntụkwasị obi nhazi';
$string['settings:mastery_classifier_threshold_desc'] = 'Ntụkwasị obi nhazi kacha nta achọrọ iji dekọọ mgbalị mkparịta ụka. 0.0 ruo 1.0. Ndabara 0.7.';
$string['chat:mode_progress'] = 'Ọganihu';
$string['objectives:toggle_dashboard'] = 'Gosi taabụ dashboard Ọganihu nye ụmụ akwụkwọ';
$string['objectives:toggle_dashboard_help'] = 'Nhọrọ. Na-agbakwunye taabụ Ọganihu n\'akụkụ Mkparịta ụka / Olu / Akụkọ ihe mere eme n\'ime ngwa. Taabụ a na-egosi ndị mmụta ebumnobi nke ha kọwapụtara, nke na-aga n\'ihu, na nke ha amalitebeghị.';
$string['mastery:dashboard_title'] = 'Ọganihu mmụta gị';
$string['mastery:dashboard_subtitle'] = 'A na-atụ nke a kọwapụtara site na azịza ule gị na omume mkparịta ụka. Gaa n\'ihu — omimi ka mma karịa mkpuchi.';
$string['mastery:dashboard_refresh'] = 'Megharịa';
$string['mastery:section_mastered'] = 'Akọwapụtara';
$string['mastery:section_learning'] = 'Na-aga n\'ihu';
$string['mastery:section_not_started'] = 'Amalitebeghị';
$string['mastery:summary_label'] = '{$a->mastered} n\'ime ebumnobi {$a->total} ka akọwapụtara';
$string['mastery:ask_about'] = 'Jụọ banyere nke a';
$string['mastery:celebrate'] = 'Ị kọwapụtala ebumnobi ọ bụla maka usoro a. Ọrụ magburu onwe ya.';
$string['mastery:ask_template'] = 'Nyere m aka mmega na ime ka aghọta nke a miwanye: {$a}.';
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
$string['pedagogy:talking_avatar_desc']    = 'When on, the talking-avatar surface is enabled in every course unless the course has its own override. Requires the Talking Avatar provider URL and API key configured below.';
$string['settings:talking_avatar_heading']      = 'Talking avatar';
$string['settings:talking_avatar_heading_desc'] = 'Vendor-neutral configuration for an external talking-avatar provider. Leave both fields empty until the institution has signed off on a provider.';
$string['settings:talking_avatar_provider_url']      = 'Provider API base URL';
$string['settings:talking_avatar_provider_url_desc'] = 'Base URL of the talking-avatar provider API. SSRF-checked before every outbound call.';
$string['settings:talking_avatar_provider_api_key']      = 'Provider API key';
$string['settings:talking_avatar_provider_api_key_desc'] = 'API key for the chosen provider.';
