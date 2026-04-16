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
 * Language strings for local_ai_course_assistant — Filipino.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'AI Course Assistant';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Nag-iimbak ng mga AI tutor chat na pakikipag-usap bawat gumagamit at kurso.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Ang ID ng gumagamit na nagmamay-ari ng pakikipag-usap.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Ang ID ng kurso na kinabibilangan ng pakikipag-usap.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Ang pamagat ng pakikipag-usap.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Ang oras na nilikha ang pakikipag-usap.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Ang oras na huling binago ang pakikipag-usap.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Nag-iimbak ng mga indibidwal na mensahe sa mga AI tutor chat na pakikipag-usap.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Ang ID ng gumagamit na nagpadala ng mensahe.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Ang ID ng kurso na kinabibilangan ng mensahe.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Ang tungkulin ng nagpadala ng mensahe (gumagamit o katulong).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Ang nilalaman ng mensahe.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Ang bilang ng mga token na ginamit para sa mensahe.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Ang oras na nilikha ang mensahe.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Gumamit ng AI tutor chat';
$string['ai_course_assistant:viewanalytics'] = 'Tingnan ang analytics ng AI tutor chat';
$string['ai_course_assistant:manage'] = 'Pamahalaan ang mga setting ng AI tutor chat (Papel ng Administrator)';

// Settings.
$string['settings:enabled'] = 'I-enable ang AI Course Assistant';
$string['settings:enabled_desc'] = 'I-enable o i-disable ang AI Course Assistant widget sa mga pahina ng kurso.';
$string['settings:default_course_mode'] = 'Default para sa mga bagong kurso';
$string['settings:default_course_mode_desc'] = 'Kinokontrol kung lumalabas ang SOLA sa isang kurso kapag walang ginawang per-course choice. Ang mga bagong installation ay nagde-default sa "Naka-disable bilang default" para mapili ng mga admin na i-opt in kurso-kurso mula sa Analytics page o sa Course AI Settings page.';
$string['settings:default_course_mode_per_course'] = 'Naka-disable bilang default (paganahin bawat kurso)';
$string['settings:default_course_mode_all'] = 'Pinagana sa lahat ng kurso';
$string['settings:provider'] = 'Provider ng AI';
$string['settings:provider_desc'] = 'Piliin ang AI provider na gagamitin para sa mga chat completion. Piliin ang "Moodle AI (core_ai subsystem)" para i-route ang mga kahilingan sa pamamagitan ng built-in na AI configuration ng Moodle sa Site admin > AI; binabalewala ang API key, model at base URL na mga field sa ibaba sa mode na iyon. Ang streaming, paggamit ng tool, at prompt caching ay hindi available sa pamamagitan ng core_ai — ang mga tugon ay inihahatid bilang isang chunk. Gumamit ng direktang provider para sa pinakamahusay na karanasan ng mag-aaral.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Lokal)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Custom (OpenAI-compatible)';
$string['settings:apikey'] = 'API Key';
$string['settings:apikey_desc'] = 'API key para sa napiling provider. Hindi kailangan para sa Ollama.';
$string['settings:model'] = 'Pangalan ng Modelo';
$string['settings:model_desc'] = 'Ang modelong gagamitin. Ang default ay depende sa provider (hal. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'Base URL ng API';
$string['settings:apibaseurl_desc'] = 'Base URL para sa API. Awtomatikong napupuno ayon sa provider ngunit maaaring i-override. Mag-iwan ng blangko para sa default ng provider.';
$string['settings:systemprompt'] = 'Template ng System Prompt';
$string['settings:systemprompt_desc'] = 'System prompt na ipinapadala sa AI. Gumamit ng mga placeholder: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Ikaw ay isang kapaki-pakinabang na AI tutor para sa kurso na "{{coursename}}". Ang papel ng mag-aaral ay {{userrole}}.

Mga paksa ng kurso:
{{coursetopics}}

Tulungan ang mag-aaral na maunawaan ang materyal ng kurso. Maging nakakaengganyo, malinaw, at may magandang paraan ng pagtuturo.';
$string['settings:temperature'] = 'Temperatura';
$string['settings:temperature_desc'] = 'Kinokontrol ang randomness. Ang mas mababang halaga ay mas nakatuon, ang mas mataas na halaga ay mas malikhain. Saklaw: 0.0 hanggang 2.0.';
$string['settings:maxhistory'] = 'Maximum na Kasaysayan ng Pakikipag-usap';
$string['settings:maxhistory_desc'] = 'Maximum na bilang ng mga pares ng mensahe na isasama sa mga kahilingan ng API. Ang mga mas lumang mensahe ay tatanggalin.';
$string['settings:avatar'] = 'Avatar ng Chat';
$string['settings:avatar_desc'] = 'Pumili ng avatar icon para sa button ng chat widget.';
$string['settings:avatar_saylor'] = 'Logo ng {$a} (Default)';
$string['settings:position'] = 'Posisyon ng Widget';
$string['settings:position_desc'] = 'Posisyon ng chat widget sa pahina.';
$string['settings:position_br'] = 'Ibaba kanan';
$string['settings:position_bl'] = 'Ibaba kaliwa';
$string['settings:position_tr'] = 'Itaas kanan';
$string['settings:position_tl'] = 'Itaas kaliwa';
$string['chat:settings'] = 'Mga setting ng plugin';
$string['analytics:viewdashboard'] = 'Tingnan ang analytics dashboard';

// Course settings.
$string['coursesettings:title'] = 'Mga Setting ng AI ng Kurso';
$string['coursesettings:enabled'] = 'I-enable ang mga override ng kurso';
$string['coursesettings:enabled_desc'] = 'Kapag naka-enable, ang mga setting sa ibaba ay mag-o-override ng global na configuration ng AI provider para sa kursong ito lamang. Mag-iwan ng blangko ang mga field para mamana ang global na halaga.';
$string['coursesettings:sola_enabled'] = 'SOLA sa kursong ito';
$string['coursesettings:sola_enabled_toggle'] = 'Ipakita ang SOLA widget sa kursong ito';
$string['coursesettings:sola_enabled_desc'] = 'Kinokontrol kung lumalabas ang SOLA chat widget sa kursong ito. Itinatakda ang site-wide default sa mga setting ng plugin sa ilalim ng General > Default for new courses.';
$string['coursesettings:using_global'] = 'Gumagamit ng global na setting';
$string['coursesettings:saved'] = 'Nai-save ang mga setting ng AI ng kurso.';
$string['coursesettings:global_settings_link'] = 'Mga global na setting ng AI';

// Language detection and preference.
$string['lang:switch'] = 'Oo, palitan';
$string['lang:dismiss'] = 'Hindi, salamat';
$string['lang:change'] = 'Baguhin ang wika';
$string['lang:english'] = 'Ingles';

// Chat widget.
$string['chat:title'] = 'AI Tutor';
$string['chat:placeholder'] = 'Magtanong...';
$string['chat:send'] = 'Ipadala';
$string['chat:close'] = 'Isara ang chat';
$string['chat:open'] = 'Buksan ang AI tutor chat';
$string['chat:clear'] = 'Linisin ang kasaysayan';
$string['chat:clear_confirm'] = 'Sigurado ka bang nais mong linisin ang iyong kasaysayan ng chat para sa kursong ito?';
$string['chat:copy'] = 'Kopyahin ang pakikipag-usap';
$string['chat:copied'] = 'Nakopya ang pakikipag-usap sa clipboard';
$string['chat:copy_failed'] = 'Nabigo sa pagkopya ng pakikipag-usap';
$string['chat:thinking'] = 'Nag-iisip...';
$string['chat:error'] = 'Paumanhin, may nangyaring mali. Pakisubukan muli.';
$string['chat:error_auth'] = 'Error sa pagpapatunay. Makipag-ugnayan sa iyong administrator.';
$string['chat:error_ratelimit'] = 'Napakaraming kahilingan. Mangyaring maghintay sandali at subukang muli.';
$string['chat:error_unavailable'] = 'Pansamantalang hindi available ang serbisyo ng AI. Pakisubukan muli mamaya.';
$string['chat:error_notconfigured'] = 'Hindi pa na-configure ang AI tutor. Makipag-ugnayan sa iyong administrator.';
$string['chat:mic'] = 'Sabihin ang iyong tanong';
$string['chat:mic_error'] = 'Error sa mikropono. Pakisuri ang mga pahintulot ng iyong browser.';
$string['chat:mic_unsupported'] = 'Hindi sinusuportahan ng browser na ito ang speech input.';
$string['chat:newline_hint'] = 'Shift+Enter para sa bagong linya';
$string['chat:you'] = 'Ikaw';
$string['chat:assistant'] = 'AI Tutor';
$string['chat:history_loaded'] = 'Na-load ang nakaraang pakikipag-usap.';
$string['chat:history_cleared'] = 'Nalinis ang kasaysayan ng chat.';
$string['chat:offtopic_warning'] = 'Mukhang ang iyong tanong ay hindi kaugnay sa kursong ito. Mangyaring subukang manatili sa paksa para mas matulungan kita!';
$string['chat:offtopic_ended'] = 'Pansamantalang nasuspinde ang iyong access sa AI tutor sa loob ng {$a} minuto dahil napakaraming beses na lumayo ang pakikipag-usap sa paksa. Gamitin ang oras na ito upang suriin ang mga materyal ng kurso, at subukan muli mamaya.';
$string['chat:offtopic_locked'] = 'Pansamantalang nasuspinde ang iyong access sa AI tutor. Maaari kang subukan muli sa loob ng {$a} minuto. Mangyaring magtuon sa mga tanong na may kaugnayan sa kurso kapag bumalik ka.';
$string['chat:escalated_to_support'] = 'Hindi ko masagot nang buo ang iyong tanong, kaya gumawa ako ng support ticket para sa iyo. Isang miyembro ng support team ang susundan. Ang iyong ticket reference ay: {$a}';
$string['chat:studyplan_intro'] = 'Matutulungan kita na gumawa ng plano sa pag-aaral para sa kursong ito! Sabihin mo lang kung ilang oras sa isang linggo ang maaari mong ialay sa pag-aaral, at tutulong ako sa iyo na bumuo ng nakabalangkas na plano.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ at Suporta';
$string['settings:faq_heading_desc'] = 'I-configure ang sentralisadong FAQ at integrasyon ng support ticket ng Zendesk.';
$string['settings:faq_content'] = 'Nilalaman ng FAQ';
$string['settings:faq_content_desc'] = 'Magpasok ng mga entry ng FAQ (isa sa bawat linya sa format: Q: tanong | A: sagot). Ibibigay ang mga ito sa AI para sagutin ang mga karaniwang tanong sa suporta.';
$string['settings:zendesk_enabled'] = 'I-enable ang Zendesk Escalation';
$string['settings:zendesk_enabled_desc'] = 'Kapag hindi malutas ng AI ang tanong sa suporta, awtomatikong gumawa ng Zendesk ticket na may buod ng pakikipag-usap.';
$string['settings:zendesk_subdomain'] = 'Zendesk Subdomain';
$string['settings:zendesk_subdomain_desc'] = 'Ang iyong Zendesk subdomain (hal. "mycompany" para sa mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'Email ng Zendesk API';
$string['settings:zendesk_email_desc'] = 'Email address ng gumagamit ng Zendesk para sa pagpapatunay ng API (na may suffix na /token).';
$string['settings:zendesk_token'] = 'Token ng Zendesk API';
$string['settings:zendesk_token_desc'] = 'API token para sa pagpapatunay ng Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Pagtuklas ng Off-topic';
$string['settings:offtopic_heading_desc'] = 'I-configure kung paano hinahawakan ng chat ang mga off-topic na pakikipag-usap.';
$string['settings:offtopic_enabled'] = 'I-enable ang pagtuklas ng off-topic';
$string['settings:offtopic_enabled_desc'] = 'Turuan ang AI na tuklasin at i-redirect ang mga off-topic na pakikipag-usap.';
$string['settings:offtopic_max'] = 'Maximum na Off-topic na Mensahe';
$string['settings:offtopic_max_desc'] = 'Bilang ng magkakasunod na off-topic na mensahe bago gumawa ng aksyon.';
$string['settings:offtopic_action'] = 'Aksyon sa Off-topic';
$string['settings:offtopic_action_desc'] = 'Ano ang gagawin kapag naabot ang limitasyon ng off-topic.';
$string['settings:offtopic_action_warn'] = 'Magbabala at mag-redirect';
$string['settings:offtopic_action_end'] = 'Pansamantalang i-lock ang access';
$string['settings:offtopic_lockout_duration'] = 'Tagal ng Lockout (minuto)';
$string['settings:offtopic_lockout_duration_desc'] = 'Gaano katagal (sa minuto) ang pagkawala ng access ng mag-aaral sa AI tutor pagkatapos maabot ang limitasyon ng off-topic. Default: 30 minuto.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Pagpaplano ng Pag-aaral at Mga Paalala';
$string['settings:studyplan_heading_desc'] = 'I-configure ang mga feature ng pagpaplano ng pag-aaral at mga notification ng paalala.';
$string['settings:studyplan_enabled'] = 'I-enable ang Pagpaplano ng Pag-aaral';
$string['settings:studyplan_enabled_desc'] = 'Payagan ang AI tutor na tulungan ang mga mag-aaral na gumawa ng personalisadong plano sa pag-aaral batay sa kanilang available na oras.';
$string['settings:reminders_email_enabled'] = 'I-enable ang Mga Paalala sa Email';
$string['settings:reminders_email_enabled_desc'] = 'Payagan ang mga mag-aaral na mag-opt in sa mga paalala sa pag-aaral sa pamamagitan ng email.';
$string['settings:reminders_whatsapp_enabled'] = 'I-enable ang Mga Paalala sa WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Payagan ang mga mag-aaral na mag-opt in sa mga paalala sa pag-aaral sa pamamagitan ng WhatsApp (nangangailangan ng configuration ng WhatsApp API).';
$string['settings:whatsapp_api_url'] = 'URL ng WhatsApp API';
$string['settings:whatsapp_api_url_desc'] = 'Ang API endpoint para sa pagpapadala ng mga mensahe sa WhatsApp (hal. Twilio, MessageBird). Dapat tumanggap ng POST na may JSON body na naglalaman ng mga field na "to", "from", at "body".';
$string['settings:whatsapp_api_token'] = 'Token ng WhatsApp API';
$string['settings:whatsapp_api_token_desc'] = 'Token ng pagpapatunay para sa WhatsApp API.';
$string['settings:whatsapp_from_number'] = 'Numero ng Nagpadala sa WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Ang numero ng telepono para magpadala ng mga mensahe sa WhatsApp (na may country code, hal. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Mga Bansang Naharang sa WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Mga ISO 3166-1 alpha-2 country code na pinaghihiwalay ng kuwit kung saan hindi pinapayagan ang mga paalala sa WhatsApp dahil sa lokal na regulasyon (hal. "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Paalala sa Pag-aaral: {$a}';
$string['reminder:email_body'] = 'Kamusta {$a->firstname},

Ito ang iyong paalala sa pag-aaral para sa "{$a->coursename}".

{$a->message}

Ang iyong plano sa pag-aaral ay nagmumungkahi ng {$a->hours_per_week} oras bawat linggo para sa kursong ito.

Patuloy na mag-aral!

---
Para ihinto ang pagtanggap ng mga paalala, mag-click dito: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Paalala sa Pag-aaral para sa {$a->coursename}: {$a->message} (Mag-opt out: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Pokus ng pag-aaral ngayon: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Mag-unsubscribe mula sa Mga Paalala sa Pag-aaral';
$string['unsubscribe:success'] = 'Matagumpay kang nag-unsubscribe mula sa mga paalala sa pag-aaral para sa kursong ito.';
$string['unsubscribe:already'] = 'Naka-unsubscribe ka na mula sa mga paalala na ito.';
$string['unsubscribe:invalid'] = 'Invalid o expired na link ng pag-unsubscribe.';
$string['unsubscribe:resubscribe'] = 'Nagbago ang isip? Maaari mong muling i-enable ang mga paalala sa pamamagitan ng AI tutor chat.';

// Scheduled task.
$string['task:send_reminders'] = 'Magpadala ng mga paalala sa pag-aaral ng AI tutor';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Nag-iimbak ng mga plano sa pag-aaral ng mag-aaral.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Ang ID ng gumagamit na nagmamay-ari ng plano sa pag-aaral.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Ang kursong kinabibilangan ng plano sa pag-aaral.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Oras bawat linggo na plano ng mag-aaral na mag-aral.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Ang mga detalye ng plano sa pag-aaral sa JSON format.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Nag-iimbak ng mga kagustuhan at subscription sa paalala sa pag-aaral.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Ang ID ng gumagamit na naka-subscribe sa mga paalala.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Ang channel ng paalala (email o whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Ang email address o numero ng telepono para sa mga paalala.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Ang country code ng gumagamit para sa pagsunod sa regulasyon.';

// Analytics dashboard.
$string['analytics:title'] = 'Analytics ng AI Tutor';
$string['analytics:overview'] = 'Pangkalahatang-ideya';
$string['analytics:total_conversations'] = 'Kabuuang pakikipag-usap';
$string['analytics:total_messages'] = 'Kabuuang mensahe';
$string['analytics:active_students'] = 'Mga aktibong mag-aaral';
$string['analytics:avg_messages_per_student'] = 'Average na mensahe bawat mag-aaral';
$string['analytics:offtopic_rate'] = 'Rate ng off-topic';
$string['analytics:escalation_count'] = 'Na-escalate sa suporta';
$string['analytics:studyplan_adoption'] = 'Mga mag-aaral na may plano sa pag-aaral';
$string['analytics:usage_trends'] = 'Mga Trend sa Paggamit';
$string['analytics:daily_messages'] = 'Dami ng mensahe sa araw-araw';
$string['analytics:hotspots'] = 'Mga Hotspot ng Kurso';
$string['analytics:hotspots_desc'] = 'Mga seksyon ng kurso na madalas na tinutukoy sa mga tanong ng mag-aaral. Ang mas mataas na bilang ay maaaring magpahiwatig ng mga lugar kung saan kailangan ng mas maraming suporta ang mga mag-aaral.';
$string['analytics:section'] = 'Seksyon';
$string['analytics:mention_count'] = 'Mga pagbanggit';
$string['analytics:common_prompts'] = 'Mga Karaniwang Pattern ng Prompt';
$string['analytics:common_prompts_desc'] = 'Mga madalas na paulit-ulit na pattern ng tanong mula sa mga mag-aaral. Suriin ang mga ito upang matukoy ang mga sistematikong puwang sa nilalaman ng kurso.';
$string['analytics:prompt_pattern'] = 'Pattern';
$string['analytics:frequency'] = 'Dalas';
$string['analytics:recent_activity'] = 'Kamakailang Aktibidad';
$string['analytics:no_data'] = 'Wala pang available na analytics data. Lilitaw ang data kapag nagsimula nang gamitin ng mga mag-aaral ang AI tutor.';
$string['analytics:timerange'] = 'Hanay ng oras';
$string['analytics:last_7_days'] = 'Nakaraang 7 araw';
$string['analytics:last_30_days'] = 'Nakaraang 30 araw';
$string['analytics:all_time'] = 'Lahat ng oras';
$string['analytics:export'] = 'I-export ang data';
$string['analytics:provider_comparison'] = 'Paghahambing ng Provider ng AI';
$string['analytics:provider_comparison_desc'] = 'Ihambing ang performance sa iba\'t ibang provider ng AI na ginagamit sa kursong ito.';
$string['analytics:provider'] = 'Provider';
$string['analytics:response_count'] = 'Mga tugon';
$string['analytics:avg_response_length'] = 'Average na haba ng tugon';
$string['analytics:total_tokens'] = 'Kabuuang token';
$string['analytics:avg_tokens'] = 'Average na token / tugon';

// User settings.
$string['usersettings:title'] = 'AI Course Assistant - Iyong Data';
$string['usersettings:intro'] = 'Pamahalaan ang iyong AI tutor chat data at mga setting ng privacy';
$string['usersettings:privacy_info'] = 'Ang iyong mga pakikipag-usap sa AI tutor ay iniimbak upang maibigay sa iyo ang tuluy-tuloy na suporta sa buong kurso. Mayroon kang buong kontrol sa data na ito at maaari mo itong tanggalin anumang oras.';
$string['usersettings:usage_stats'] = 'Iyong Mga Istatistika ng Paggamit';
$string['usersettings:total_messages'] = 'Kabuuang mensahe';
$string['usersettings:total_conversations'] = 'Mga pakikipag-usap';
$string['usersettings:messages'] = 'Mga mensahe';
$string['usersettings:last_activity'] = 'Huling aktibidad';
$string['usersettings:delete_course_data'] = 'Tanggalin ang data ng kurso';
$string['usersettings:no_data'] = 'Hindi ka pa gumamit ng AI tutor. Lilitaw ang iyong data ng paggamit dito kapag nagsimula kang mag-chat.';
$string['usersettings:delete_all_title'] = 'Tanggalin ang Lahat ng Iyong Data';
$string['usersettings:delete_all_warning'] = 'Permanenteng matatanggal nito ang lahat ng iyong mga pakikipag-usap sa AI tutor sa lahat ng kurso. Hindi ito maaaring ibalik.';
$string['usersettings:delete_all_button'] = 'Tanggalin ang Lahat ng Aking Data';
$string['usersettings:confirm_delete_course'] = 'Sigurado ka bang nais mong permanenteng tanggalin ang lahat ng iyong AI tutor data para sa kurso na "{$a}"? Hindi ito maaaring ibalik.';
$string['usersettings:confirm_delete_all'] = 'Sigurado ka bang nais mong permanenteng tanggalin ang LAHAT ng iyong AI tutor data sa lahat ng kurso? Hindi ito maaaring ibalik.';
$string['usersettings:data_deleted'] = 'Natanggal na ang iyong data.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Kumusta, {$a}! Ako si SOLA. Paano kita matutulungan ngayon?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Buksan ang SOLA';
$string['chat:change_avatar'] = 'Baguhin ang avatar';

$string['chat:quiz'] = 'Kumuha ng practice quiz';
$string['chat:quiz_setup_title'] = 'Practice Quiz';
$string['chat:quiz_questions'] = 'Bilang ng mga tanong';
$string['chat:quiz_topic'] = 'Paksa';
$string['chat:quiz_topic_guided'] = 'Pinatnubayan ng AI (batay sa iyong progreso)';
$string['chat:quiz_topic_default'] = 'Kasalukuyang nilalaman ng kurso';
$string['chat:quiz_topic_custom'] = 'Custom na paksa…';
$string['chat:quiz_custom_placeholder'] = 'Magpasok ng paksa o tanong...';
$string['chat:quiz_start'] = 'Simulan ang Quiz';
$string['chat:quiz_cancel'] = 'Kanselahin';
$string['chat:quiz_loading'] = 'Nagge-generate ng quiz…';
$string['chat:quiz_error'] = 'Hindi makabuo ng quiz. Pakisubukan muli.';
$string['chat:quiz_correct'] = 'Tama!';
$string['chat:quiz_wrong'] = 'Mali.';
$string['chat:quiz_next'] = 'Susunod na tanong';
$string['chat:quiz_finish'] = 'Tingnan ang mga resulta';
$string['chat:quiz_score'] = 'Tapos na ang quiz! Nakakuha ka ng {$a->score} mula sa {$a->total}.';
$string['chat:quiz_summary'] = 'Nakatapos ako ng practice quiz na may {$a->total} tanong tungkol sa "{$a->topic}" at nakakuha ng {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Mga Layunin sa Pagkatuto';
$string['chat:quiz_topic_modules'] = 'Paksa ng Kurso';
$string['chat:quiz_subtopic_select'] = 'Pumili ng tiyak na aytem…';
$string['chat:quiz_topic_sections'] = 'Mga Seksyon ng Kurso';
$string['chat:quiz_score_great'] = 'Napakagaling! Talagang alam mo ang materyal na ito.';
$string['chat:quiz_score_good'] = 'Magandang pagsisikap! Patuloy na mag-review para mapalakas ang iyong pag-unawa.';
$string['chat:quiz_score_practice'] = 'Patuloy na mag-practice — subukang i-review ang kaugnay na materyal ng kurso, pagkatapos ay ulitin ang quiz.';
$string['chat:quiz_review_heading'] = 'Pagsusuri';
$string['chat:quiz_retake'] = 'Ulitin ang Quiz';
$string['chat:quiz_exit'] = 'Lumabas sa Quiz';
$string['chat:quiz_your_answer'] = 'Ang iyong sagot';
$string['chat:quiz_correct_answer'] = 'Tamang sagot';

$string['chat:starters_label'] = 'Mga panimula ng pakikipag-usap';
$string['chat:starter_quiz'] = 'I-Quiz Ako Dito';
$string['chat:starter_explain'] = 'Ipaliwanag Ito';
$string['chat:starter_key_concepts'] = 'Mga Pangunahing Konsepto';
$string['chat:starter_study_plan'] = 'Plano sa Pag-aaral';
$string['chat:starter_help_me'] = 'Tulong ng AI';
$string['chat:starter_ai_project_coach'] = 'AI Project Coach';
$string['chat:starter_ell_practice'] = 'Pagsasanay sa Pag-uusap';
$string['chat:starter_ell_pronunciation'] = 'Pagbigkas ng ELL';
$string['chat:starter_ai_coach'] = 'AI Coach';
$string['chat:starter_speak'] = 'Sabihin ang isang panimula';

$string['chat:reset'] = 'Magsimulang muli';

$string['chat:topic_picker_title'] = 'Ano ang nais mong pagtuunan?';
$string['chat:topic_picker_title_help'] = 'Sa ano kita matutulungan?';
$string['chat:topic_picker_title_explain'] = 'Ano ang nais mong ipaliwanag ko?';
$string['chat:topic_picker_title_study'] = 'Anong lugar ang nais mong pagtuunan?';
$string['chat:topic_start'] = 'Ituloy';

$string['chat:fullscreen'] = 'Buong screen';
$string['chat:exitfullscreen'] = 'Lumabas sa buong screen';

$string['chat:language'] = 'Baguhin ang wika';
$string['chat:settings_panel'] = 'Mga Setting';
$string['chat:settings_language'] = 'Wika';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Boses';
$string['chat:settings_voice_admin'] = 'Ang mga setting ng boses ay pinamamahalaan sa site admin panel.';

$string['chat:voice_mode'] = 'Voice mode';
$string['chat:voice_end'] = 'Tapusin ang voice session';
$string['chat:voice_connecting'] = 'Kumukonekta...';
$string['chat:voice_listening'] = 'Nakikinig...';
$string['chat:voice_speaking'] = 'Nagsasalita ang SOLA...';
$string['chat:voice_idle'] = 'Handa';
$string['chat:voice_error'] = 'Nabigo ang koneksyon ng boses. Pakisuri ang iyong mga setting.';
$string['chat:quiz_locked'] = 'Nakaka-pause ang SOLA sa panahon ng mga quiz para suportahan ang integridad ng akademiko. Good luck!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Mga Tala';

// History panel.
$string['chat:history_title'] = 'Mga Tala at Kasaysayan ng Pag-uusap';
$string['task:send_inactivity_reminders'] = 'Magpadala ng lingguhang paalala sa email dahil sa kawalan ng aktibidad';
$string['messageprovider:study_notes'] = 'Mga tala ng sesyon ng pag-aaral';
$string['task:send_inactivity_reminders'] = 'Magpadala ng lingguhang paalala sa kawalan ng aktibidad';
$string['messageprovider:study_notes'] = 'Mga tala ng sesyon ng pag-aaral';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Frontend Delivery';
$string['settings:cdn_heading_desc'] = 'Maghatid ng SOLA frontend assets (JS/CSS) mula sa isang panlabas na CDN sa halip na mula sa Moodle filesystem. Pinapayagan nito ang mga frontend update nang hindi ina-upgrade ang plugin. Iwanan ang CDN URL na walang laman upang gamitin ang mga lokal na plugin file.';
$string['settings:cdn_url'] = 'CDN Base URL';
$string['settings:cdn_url_desc'] = 'Base URL kung saan naka-host ang sola.min.js at sola.min.css. Halimbawa: https://your-org.github.io/sola-cdn. Iwanang walang laman upang gamitin ang mga lokal na plugin file.';
$string['settings:cdn_version'] = 'CDN Asset Version';
$string['settings:cdn_version_desc'] = 'Version string na idinadagdag sa CDN URLs para sa cache busting. I-update pagkatapos ng bawat CDN deploy (hal. 3.2.4 o commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Kabuuang paggamit';
$string['analytics:tab_bycourse'] = 'Ayon sa kurso';
$string['analytics:tab_comparison'] = 'AI vs hindi gumagamit';
$string['analytics:tab_byunit'] = 'Ayon sa yunit';
$string['analytics:tab_usagetypes'] = 'Mga uri ng paggamit';
$string['analytics:tab_themes'] = 'Mga tema';
$string['analytics:tab_feedback'] = 'Feedback sa AI';
$string['analytics:total_students'] = 'Kabuuang mga mag-aaral';
$string['analytics:active_users'] = 'Aktibong gumagamit ng AI';
$string['analytics:msgs_per_student'] = 'Mga mensahe bawat mag-aaral';
$string['analytics:avg_session'] = 'Average na tagal ng sesyon';
$string['analytics:return_rate'] = 'Rate ng pagbabalik';
$string['analytics:total_sessions'] = 'Kabuuang mga sesyon';
$string['analytics:thumbs_up'] = 'Thumbs up';
$string['analytics:thumbs_down'] = 'Thumbs down';
$string['analytics:hallucination_flags'] = 'Mga marka ng kamalian';
$string['analytics:msgs_to_resolution'] = 'Mga mensahe hanggang malutas';
$string['analytics:helpful'] = 'Nakatutulong';
$string['analytics:not_helpful'] = 'Hindi nakatutulong';
$string['analytics:flag_hallucination'] = 'Ang sagot na ito ay may maling impormasyon';
$string['analytics:submit_rating'] = 'Isumite';
$string['analytics:thanks_feedback'] = 'Salamat sa iyong feedback';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_groq'] = 'Groq';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Ipaliwanag ang pahinang ito';
$string['chat:starter_ask_anything'] = 'Magtanong ng kahit ano';
$string['chat:starter_review_practice'] = 'Repasuhin at magsanay';
$string['chat:history_saved_subtitle'] = 'Ang mga nai-save na sagot ay nananatili sa device na ito para sa kursong ito.';
$string['chat:history_saved_empty'] = 'Mag-save ng sagot ng AI upang makita ito dito.';
$string['chat:history_views_label'] = 'Mga view ng kasaysayan';
$string['chat:history_view_saved'] = 'Naka-save';
$string['chat:history_view_recent'] = 'Kasaysayan';
$string['chat:debug_refresh'] = 'I-refresh';
$string['chat:debug_copy_all'] = 'Kopyahin lahat';
$string['chat:debug_close'] = 'Isara';
$string['chat:language_switch'] = 'Magpalit ng wika';
$string['chat:language_dismiss'] = 'I-dismiss ang mungkahi ng wika';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Piliin ang provider ng LLM';
$string['chat:llm_model_label'] = 'Modelo';
$string['chat:llm_model_select'] = 'Piliin ang modelo ng LLM';
$string['chat:footer_usertesting'] = 'Pagsubok sa kagamitan';
$string['chat:footer_feedback'] = 'Feedback';
$string['chat:voice_panel_title'] = 'Makipag-usap kay {$a} (Eksperimental)';
