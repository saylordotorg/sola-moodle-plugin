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
$string['chat:voice_panel_title'] = 'Kpaa {$a} okwu (Nnwale)';

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
