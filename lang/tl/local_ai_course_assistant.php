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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:auto_open'] = 'Awtomatikong magbukas sa unang pagbisita';
$string['settings:auto_open_desc'] = 'Kapag pinagana, awtomatikong nagbubukas ang drawer ng SOLA sa unang pagkakataon na pumasok ang isang estudyante sa bawat kurso. Hindi muling binubuksan ng mga sumunod na pag-load ng pahina sa parehong kurso ang drawer — sinusubaybayan ang estado sa bawat kurso sa browser ng estudyante sa pamamagitan ng localStorage. Naaangkop sa desktop at mobile. Maaaring i-override sa bawat kurso mula sa pahinang Course AI Settings.';
$string['settings:comparison_providers'] = 'Mga provider ng paghahambing (LLM picker)';
$string['settings:comparison_providers_desc'] = 'Magdagdag ng karagdagang AI provider sa in-widget LLM picker para makapaghambing ang mga admin ng mga tugon mula sa iba\'t ibang provider. Gamitin ang talahanayan sa ibaba para magdagdag ng mga row. Opsyonal ang column ng temperatura (iwanang blangko para gamitin ang global na temperatura). Nakaimbak na format: provider_id|api_key|model1,model2|temperature. Ang pangunahing provider na naka-configure sa itaas ay palaging awtomatikong kasama. Tanging mga admin na may manage capability lang ang makakakita ng picker; hindi ito makikita ng mga estudyante. Mga valid na provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Default na Provider ng AI';
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
$string['chat:clear'] = 'Linisin ang screen';
$string['chat:clear_confirm'] = 'Linisin ang mga nakikitang mensahe? Nananatiling naka-save ang buong kasaysayan ng iyong chat at maaaring ma-reload sa pamamagitan ng muling pagbubukas ng widget.';
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
$string['task:run_meta_ai_query'] = 'Patakbuhin ang nakaiskedyul na Learning Radar analytics query';
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

// Additional translated strings.
$string['chat:debug_context'] = 'Debug ng konteksto';
$string['chat:debug_context_browser'] = 'Snapshot ng browser';
$string['chat:debug_context_copy'] = 'Kopyahin';
$string['chat:debug_context_prompt'] = 'Tugon ng server';
$string['chat:debug_context_request'] = 'Huling kahilingan ng SSE';
$string['chat:debug_context_toggle'] = 'I-toggle ang inspektor';
$string['chat:history_empty'] = 'Wala pang pag-uusap.';
$string['chat:history_refresh'] = 'I-refresh';
$string['chat:history_subtitle'] = 'Ang iyong kamakailang mensahe.';
$string['chat:starter_explain_prompt'] = 'Ipaliwanag ang pinakamahalagang konsepto?';
$string['chat:starter_help_lesson'] = 'Ipaliwanag ito';
$string['chat:starter_help_lesson_prompt'] = 'Tulungan mo akong maunawaan. Buod ng mga konsepto.';
$string['chat:starter_prompt_coach'] = 'AI Coach';
$string['chat:starter_quick_study'] = 'Mabilis na pag-aaral';
$string['chat:starter_study_plan_prompt'] = 'Gusto kong planuhin ang pag-aaral. Tanungin: (1) layunin, (2) oras. I-update ang plano.';
$string['chat:voice_copy'] = 'Pag-uusap sa boses kasama ang assistant.';
$string['chat:voice_ready'] = 'Handa';
$string['chat:voice_start'] = 'Simulan';
$string['chat:voice_title'] = 'Makipag-usap sa SOLA';
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
$string['mobile_chip_concepts'] = 'Mga Konsepto';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Plano sa Pag-aaral';
$string['mobile_clear'] = 'I-clear ang history';
$string['mobile_disabled'] = 'Hindi available ang SOLA sa kursong ito.';
$string['mobile_placeholder'] = 'Magtanong...';
$string['mobile_welcome'] = 'Kamusta, {$a}!';
$string['mobile_welcome_sub'] = 'Ako si SOLA, ang iyong learning assistant. Paano kita matutulungan?';
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
$string['rubric:done'] = 'Tapos';
$string['rubric:encourage_high'] = 'Mahusay! Ipagpatuloy!';
$string['rubric:encourage_low'] = 'Magandang simula! Makakatulong ang regular na practice.';
$string['rubric:encourage_mid'] = 'Magandang pagsisikap! Ipagpatuloy.';
$string['rubric:overall'] = 'Pangkalahatan';
$string['rubric:practice_again'] = 'Mag-practice ulit';
$string['rubric:score_title_conversation'] = 'Iskor ng pagsasanay';
$string['rubric:score_title_pronunciation'] = 'Iskor ng pronunciation';
$string['rubric:scoring'] = 'Sinusuri...';
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
$string['demo:title'] = 'Kapaligiran ng pagsubok';
$string['demo:heading'] = 'Kapaligiran ng pagsubok';
$string['demo:intro'] = 'Ang pahinang ito ay gumagawa ng testing course na <strong>nakatago sa mga estudyante</strong> (visible=0) at pinupunan ito ng mga pekeng estudyante, mga AI conversation, mga rating, at feedback. Kapaki-pakinabang para sa preview ng Analytics Dashboard o pagpapatunay ng mga pagbabago sa plugin nang hindi naaapektuhan ang sinumang tunay na naka-enrol na estudyante.';
$string['demo:step1'] = 'Hakbang 1: testing course';
$string['demo:step2'] = 'Hakbang 2: magdagdag ng mga pekeng estudyante at AI chat';
$string['demo:course_exists'] = 'May umiiral na testing course: <strong>{$a->fullname}</strong> (maikling pangalan <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'nakatago';
$string['demo:badge_visible'] = 'nakikita ng mga estudyante';
$string['demo:no_course'] = 'Walang nakitang testing course. I-click sa ibaba upang gumawa.';
$string['demo:create_btn'] = 'Gumawa ng nakatagong testing course';
$string['demo:open_course'] = 'Buksan ang course &rarr;';
$string['demo:seed_intro'] = 'Gumagawa ng demo_student_001, demo_student_002, ..., nag-eenrol sa kanila sa testing course, at naglalagay ng mga synthetic na usapan, mensahe, rating, at feedback. Patakbuhin muli upang magdagdag pa ng data, o lagyan ng tsek ang "linisin muna" upang magsimula ulit.';
$string['demo:users_label'] = 'Mga user';
$string['demo:weeks_label'] = 'Mga linggo';
$string['demo:clear_label'] = 'Linisin muna ang mga umiiral na demo_* user';
$string['demo:seed_btn'] = 'Magdagdag ng mga estudyante at chat';
$string['demo:view_analytics'] = 'Tingnan ang Analytics para sa course na ito &rarr;';
$string['demo:footer'] = 'Ang data na nilikha dito ay nakatira sa mga karaniwang user / enrolment table ng Moodle at sa sariling mga conversation table ng plugin. Lahat ng pekeng user ay may mga username na nagsisimula sa <code>demo_student_</code> kaya madali silang i-filter o alisin. Upang alisin sila, patakbuhin muli ang seed step habang nakatsek ang "Linisin muna ang mga umiiral na demo_* user".';
$string['demo:course_fullname'] = 'SOLA Testing Course (nakatago)';
$string['demo:notify_created'] = 'Handa na ang testing course: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Nabigong gumawa ng course: {$a}';
$string['demo:notify_seeded'] = 'Naidagdag: {$a->users} user, {$a->conversations} usapan, {$a->messages} mensahe, {$a->ratings} rating, {$a->feedback} feedback entries.';
$string['demo:notify_seed_fail'] = 'Nabigong magdagdag ng data: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Token Cost at Analytics &rarr;';
$string['toc:testing'] = 'Kapaligiran ng pagsubok &rarr;';
$string['toc:back_to_course'] = '&larr; Bumalik sa {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Hindi natagpuan ang pdftotext binary; naka-disable ang pag-extract ng PDF.';
$string['rag:pdftotext_available'] = 'Natukoy ang pdftotext sa {$a}.';
$string['rag:docx_unavailable'] = 'Hindi available ang PHP ZipArchive extension; naka-disable ang pag-extract ng DOCX.';
$string['rag:h5p_unavailable'] = 'Hindi mabasa ang nilalaman ng H5P; nilaktawan.';
$string['rag:scorm_too_large'] = 'Lumampas ang SCORM package sa naka-configure na limitasyon sa laki ({$a} MB); nilaktawan.';
$string['rag:scorm_unzip_failed'] = 'Hindi ma-unzip ang SCORM package; nilaktawan.';
$string['rag:transcript_fetch_failed'] = 'Hindi makuha ang transcript mula sa {$a}.';
$string['rag:transcript_cf_challenge'] = 'Na-block ang URL ng transcript ng Cloudflare challenge: {$a}.';
$string['rag:embed_detected'] = 'Natukoy ang naka-embed na media: {$a}';
$string['rag:embed_transcript_attached'] = 'Nakalakip ang transcript para sa {$a}';

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
