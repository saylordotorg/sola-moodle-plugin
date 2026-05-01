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
$string['attachment:attach'] = 'I-attach';
$string['attachment:attach_image_or_pdf'] = 'I-attach ang larawan o PDF';
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
$string['chat:quiz_topic_adaptive']      = 'Adaptive — tumutok sa mga kahinaan ko';
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
$string['chat:voice_panel_title']       = 'Talk with {$a}';

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

// v3.9.10–v3.9.14 new strings.
$string['usersettings:download'] = 'I-download ang aking {$a} na datos';
$string['usersettings:download_help'] = 'I-download ang kumpletong kopyang JSON ng bawat {$a} na rekord na nakaugnay sa iyong account: mga usapan, mensahe, rating, study plan, paalala, score sa pagsasanay, sagot sa survey, profile, at mga audit entry.';
$string['usersettings:privacy_notice_link'] = 'Basahin ang abiso sa privacy ng {$a}';
$string['privacy:title'] = 'Abiso sa Privacy ng {$a}';
$string['admin:user_data:title'] = '{$a} — Pag-export at pag-purge ng datos ng mag-aaral';
$string['admin:user_data:intro'] = 'Operational na daan para sa kahilingan sa ilalim ng GDPR Article 15 (access) o Article 17 (erasure). Hanapin ang mag-aaral gamit ang Moodle user id, suriin ang mga rekord na hawak ng plugin para sa kanya, at i-export o i-purge.';
$string['admin:user_data:search_label'] = 'Moodle user id';
$string['admin:user_data:lookup'] = 'Hanapin';
$string['admin:user_data:not_found'] = 'Walang nahanap na user na may id na iyon.';
$string['admin:user_data:download'] = 'I-download ang lahat ng datos ng mag-aaral bilang JSON';
$string['admin:user_data:purge'] = 'I-purge ang lahat ng datos ng mag-aaral para sa user na ito';
$string['admin:user_data:confirm_purge'] = 'Permanenteng burahin ang bawat rekord para sa {$a}? Kasama nito ang mga usapan, mensahe, rating, study plan, paalala, profile, score sa pagsasanay, survey, audit entry, at feedback. Hindi maaaring ibalik ang aksyon na ito.';
$string['admin:user_data:purged'] = 'Lahat ng datos para sa napiling user ay na-purge na.';
$string['chat:consent_heading'] = 'Bago ka makipag-chat sa {$a->product}';
$string['chat:consent_body'] = 'Ang {$a->product} ay isang AI powered learning assistant. Ang iyong mga mensahe at sagot ng {$a->product} ay nakaimbak sa Moodle database ng {$a->institution} at ang sampu na pinakahuling pag-uusap ay ipinapadala sa isang inaprubahang AI model provider upang sagutin ang iyong mga tanong. Ang iyong unang pangalan ay ibinabahagi para sa pagiging personalized; walang ibang nakakakilalang impormasyon ang ipinapadala sa AI provider. Maaari mong i-download, burahin, o ihinto ang paggamit ng {$a->product} kahit anong oras.';
$string['chat:consent_accept'] = 'Naiintindihan ko, simulan ang {$a}';
$string['chat:consent_privacy_link'] = 'Basahin ang buong abiso sa privacy';
$string['task:audit_cleanup'] = 'Paglilinis ng audit table ng AI Course Assistant';
$string['task:conversation_retention'] = 'Tagasakop ng pagpapanatili ng usapan ng AI Course Assistant';
$string['settings:audit_retention_days'] = 'Pagpapanatili ng audit log (mga araw)';
$string['settings:audit_retention_days_desc'] = 'Pinu-purge ng pang-araw-araw na nakatakdang gawain ang mga audit row na mas matanda kaysa rito. 0 ang nag-disable. Default 365.';
$string['settings:conversation_retention_days'] = 'Pagpapanatili ng usapan (mga araw)';
$string['settings:conversation_retention_days_desc'] = 'Pinu-purge ng pang-araw-araw na nakatakdang gawain ang mga row ng usapan na ang huling pagbabago ay mas matanda kaysa rito. 0 ang nag-disable. Default 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Mga pinagkakatiwalaang SSRF endpoint';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Isang URL kada linya. Ang mga nakalistang host ay nilalampasan ang mga pagsusuri ng loopback / private-IP / https-lamang sa SSRF validator ng SOLA. Gamitin lamang ito para sa mga self-hosted na LLM sa isang network na kontrolado mo — halimbawa <code>http://localhost:11434</code> para sa lokal na Ollama, <code>http://10.0.0.5:8000</code> para sa isang vLLM pod sa parehong VPC. Ang paghahambing ay tumutugma sa scheme + host + port; anumang path ay binabalewala. Default na walang laman (i-block ang lahat ng panloob). Ang mga linyang nagsisimula sa <code>#</code> ay mga komento.';
$string['task:learner_weekly_digest']    = 'AI Course Assistant - Lingguhang Buod para sa mag-aaral';
$string['learner_digest:subject']        = 'Ang linggo mo kasama ang {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Gusto mo ng maikling lingguhang email tungkol sa kung ano ang pagtutuunan ng pansin sunod?';
$string['next_best_action:get_started']           = 'Magsimula sa {$a->title}. Buksan ako at magtanong "tulungan mo ako sa {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Magsimula sa {$a->title}. Sakop ito ng modyul "{$a->module}".';
$string['next_best_action:review']                = 'Suriin ang mga pangunahing kaalaman sa {$a->title} — buksan ako at magtanong "ipaliwanag sa akin ang {$a->title} parang bago ako".';
$string['next_best_action:review_with_module']    = 'Suriin ang mga pangunahing kaalaman sa {$a->title} sa "{$a->module}", pagkatapos buksan ako sa anumang mga tanong.';
$string['next_best_action:practice']              = 'Magtayo sa mayroon ka sa {$a->title}. Buksan ako at magtanong "bigyan mo ako ng isang nalutas na halimbawa para sa {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Magsanay ng {$a->title} kasama ang "{$a->module}". Buksan ako para sa mga nalutas na halimbawa.';
$string['next_best_action:quiz']                  = 'Patatagin ang {$a->title) gamit ang isang mabilis na pagsusulit. Buksan ako at piliin ang "Subukan ako — adaptive".';
$string['next_best_action:quiz_with_module']      = 'Patatagin ang {$a->title} gamit ang isang mabilis na pagsusulit. Ang modyul na "{$a->module}" ang lugar nito.';
$string['next_best_action:empty_state']           = 'Mukhang maganda ang ginagawa mo sa bawat layunin ngayon — walang ipapaalala. Magpatuloy.';
$string['next_best_action:header']                = 'Narito ang {$a} bagay na pagtutuunan ng pansin sunod:';
$string['learner_digest:unsubscribe_done_title']  = 'Nag-unsubscribe';
$string['learner_digest:unsubscribe_done_body']   = 'Tapos na — hindi ka na makakatanggap ng higit pang lingguhang email para sa kursong ito mula sa {$a->product}. Maaari kang muling mag-subscribe anumang oras mula sa chat window sa iyong kurso.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Hindi na valid ang link ng pag-unsubscribe';
$string['learner_digest:unsubscribe_invalid_body']  = 'Nag-expire na o sira ang link ng pag-unsubscribe na ito. Maaari mong pamahalaan ang mga kagustuhan sa email mula sa mga setting ng iyong kurso.';
$string['active_learners:line']                   = '{$a} pang iba ang nag-aaral ng kursong ito ngayon.';
$string['active_learners:line_global']             = '{$a} pang iba ang nag-aaral ngayon.';
$string['settings:active_learners_scope']          = 'Saklaw ng tagapagpahiwatig ng aktibong mga mag-aaral';
$string['settings:active_learners_scope_desc']     = 'Kung ang "iba ay nag-aaral ngayon" na tagapagpahiwatig sa itaas ng mga panimula ng chat ay nagbibilang ng mga mag-aaral lamang sa parehong kurso o mga mag-aaral sa buong site. Default na <strong>pandaigdig</strong>.';
$string['settings:active_learners_scope_global']   = 'Pandaigdig (anumang kurso)';
$string['settings:active_learners_scope_course']   = 'Bawat kurso lamang';
$string['learner_digest:optin_yes']      = 'Oo, padalhan mo ako ng lingguhang email';
$string['learner_digest:optin_no']       = 'Hindi, salamat';
$string['learner_digest:optin_thanks']   = 'Naintindihan. Makakakuha ka ng lingguhang buod bawat Lunes.';
$string['learner_digest:optin_declined'] = 'Naintindihan. Walang email - buksan mo lang ako kapag gusto mong mag-check-in.';
$string['settings:xai_proxy_url'] = 'URL ng xAI Realtime proxy';
$string['settings:xai_proxy_url_desc'] = 'Pampublikong wss URL ng SOLA xAI Realtime proxy service (halimbawa wss://voice.example.com/xai-rt/rt). Kapag itinakda ito kasama ng JWT secret, dumadaan ang xAI voice sa proxy at hindi umaabot sa browser ang master xAI API key. Iwang blangko upang bumalik sa direktang koneksyon (hindi inirerekomenda para sa production).';
$string['settings:xai_proxy_jwt_secret'] = 'JWT secret ng xAI Realtime proxy';
$string['settings:xai_proxy_jwt_secret_desc'] = 'HS256 na ibinahaging secret na ginagamit upang pirmahan ang panandaliang session token para sa xAI Realtime proxy. Dapat tumugma sa MOODLE_JWT_SECRET na secret sa Cloudflare Worker. Patuloy na palitan paminsan-minsan.';
$string['admin:vendor_dpa:title'] = '{$a} — Katayuan ng vendor DPA';
$string['admin:vendor_dpa:intro'] = 'Pag-opt-out sa training, DPA, at panahong itatago para sa bawat AI provider driver. Gamitin ito upang magpasya kung aling mga driver ang i-enable sa iyong site. Ang Tier 2 at mas mataas na routing ay nangangailangan ng pinirmahang DPA at kontratwal na pag-opt-out sa training.';
$string['admin:vendor_dpa:maintenance_note'] = 'Pinapanatili ang talahanayang ito sa classes/vendor_registry.php. I-update kapag may pagbabago sa ToS ng vendor.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Email ng Data Protection Officer';
$string['settings:dpo_email_desc'] = 'Email na pang-contact na ipinapakita sa abiso ng privacy ng mag-aaral sa ilalim ng "Contact". Iwang blangko upang itago ang linya. Dapat ituro ng mga rebranded na pag-install ito sa kanilang sariling DPO.';
$string['settings:privacy_external_url'] = 'URL ng pahina ng privacy ng institusyon';
$string['settings:privacy_external_url_desc'] = 'Link sa pahinang privacy sa antas ng institusyon, na ipinapakita sa abiso ng privacy ng mag-aaral sa ilalim ng "Contact". Iwang blangko upang itago ang linya.';
$string['settings:privacy_notice_override'] = 'Pag-override ng abiso sa privacy (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Kung itinakda, papalitan ng HTML na ito ang default na branded na abiso sa privacy na ipinapakita sa /local/ai_course_assistant/privacy.php. Gamitin ito upang ilagay ang teksto na sinuri ng Legal para sa iyong institusyon nang hindi binabago ang code. Iwang blangko upang gamitin ang default na abiso, na nagmumula sa pitong susi ng branding config.';
$string['objectives:title'] = 'Mga layunin sa pagkatuto at kasanayan';
$string['objectives:toggles_heading'] = 'Pagsubaybay sa kasanayan';
$string['objectives:toggle_master'] = 'I-enable ang pagsubaybay sa kasanayan para sa kursong ito';
$string['objectives:toggle_chip'] = 'Ipakita ang chip ng Learning Mastery sa mga estudyante';
$string['objectives:toggle_chip_help'] = 'Opsyonal. Kapag naka-off, patuloy pa ring tahimik na inaakay ng kasanayan ang assistant ngunit walang nakikitang indikasyon ang mga mag-aaral.';
$string['objectives:toggled'] = 'Na-update ang setting.';
$string['objectives:detected_heading'] = 'Natukoy ang {$a->count} na layunin sa pagkatuto mula sa {$a->source}.';
$string['objectives:source_competency'] = 'mga competency ng Moodle';
$string['objectives:source_summary'] = 'buod ng kurso';
$string['objectives:source_section'] = 'section o nilalaman ng unang pahina';
$string['objectives:source_page'] = 'pahina ng kurso';
$string['objectives:source_llm'] = 'pagkuha gamit ang AI';
$string['objectives:source_manual'] = 'manu-manong pagpasok';
$string['objectives:source_none'] = 'walang awtomatikong pinagmulan';
$string['objectives:import_detected'] = 'I-import ang mga natukoy na layuning ito';
$string['objectives:import_llm'] = 'Kunin ang mga layunin gamit ang AI';
$string['objectives:llm_empty'] = 'Walang layuning ibinalik ang AI extraction. Subukan muli sa ibang pagkakataon o ipasok nang manu-mano.';
$string['objectives:imported'] = 'Na-import ang {$a} na layunin.';
$string['objectives:none_detected'] = 'Walang awtomatikong natukoy na layunin sa pagkatuto. Ipasok nang manu-mano sa ibaba, o gumamit ng AI extraction.';
$string['objectives:list_heading'] = 'Mga kasalukuyang layunin';
$string['objectives:col_code'] = 'Code';
$string['objectives:col_title'] = 'Pamagat';
$string['objectives:col_source'] = 'Pinagmulan';
$string['objectives:col_actions'] = 'Mga aksyon';
$string['objectives:add_heading'] = 'Magdagdag ng layunin';
$string['objectives:add_submit'] = 'Idagdag ang layunin';
$string['objectives:saved'] = 'Na-save ang layunin.';
$string['objectives:deleted'] = 'Nabura ang layunin.';
$string['objectives:delete_confirm'] = 'Burahin ang layuning ito at lahat ng kasaysayan ng pagsubok para rito?';
$string['objectives:delete_all'] = 'Burahin ang lahat ng layunin para sa kursong ito';
$string['objectives:delete_all_confirm'] = 'Burahin ang bawat layunin at lahat ng kasaysayan ng pagsubok para sa kursong ito? Hindi maaaring ibalik.';
$string['objectives:deleted_all'] = 'Nabura ang lahat ng layunin para sa kursong ito.';
$string['mastery:chip_aria'] = 'Katayuan ng kasanayan sa pagkatuto';
$string['mastery:popover_aria'] = 'Detalye ng kasanayan sa pagkatuto';
$string['mastery:chip_label'] = '{$a->mastered} sa {$a->total} ang mahusay';
$string['mastery:status_mastered'] = 'mahusay';
$string['mastery:status_learning'] = 'isinasagawa';
$string['mastery:status_not_started'] = 'hindi pa nagsisimula';
$string['mastery:popover_empty'] = 'Walang nakatakdang layunin sa pagkatuto para sa kursong ito.';
$string['settings:mastery_heading'] = 'Pagsubaybay sa kasanayan';
$string['settings:mastery_heading_desc'] = 'Opt-in na feature kada-kurso na nagta-tag ng mga sagot sa pagsusulit at mga assistant conversation turn laban sa mga layunin sa pagkatuto ng kurso, pagkatapos ay nagbibigay ng compact na mastery snapshot pabalik sa system prompt upang akayin ang pagtatanong. Subtle bilang default: walang nakikita ang mga mag-aaral maliban kung naka-on ang chip toggle ng kurso.';
$string['settings:mastery_threshold'] = 'Threshold ng kasanayan';
$string['settings:mastery_threshold_desc'] = 'Rolling accuracy sa o higit sa kung saan itinuturing ang isang layunin na mahusay. 0.0 hanggang 1.0. Default 0.85.';
$string['settings:mastery_window'] = 'Window ng pagsubok';
$string['settings:mastery_window_desc'] = 'Bilang ng pinakahuling mga pagsubok bawat layunin na bibigyang-bigat sa rolling accuracy. Default 8.';
$string['settings:mastery_decay_enabled']        = 'Paganahin ang pagkasira ng kahusayan';
$string['settings:mastery_decay_enabled_desc']   = 'Kapag naka-on, ang mga marka ng kahusayan ay nababawasan sa paglipas ng panahon kumpara sa pinakabagong timestamp ng pagsubok. Ang isang dating napag-aralang layunin ay bumabalik sa "natututo" matapos ang sapat na oras. Hindi nahuhulog sa ibaba ng "natututo". <strong>Default na off sa v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Kalahating buhay ng pagkasira ng kahusayan (araw)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Kalahating buhay sa mga araw. Ang marka ay pinarami ng 0.5 ^ (araw mula sa huling pagsubok / kalahating buhay). Default 30. Ginagamit lamang kapag pinagana ang pagkasira.';
$string['settings:mastery_classifier_model'] = 'Modelo ng classifier';
$string['settings:mastery_classifier_model_desc'] = 'Modelong ginagamit upang pag-uri-uriin ang mga assistant turn laban sa mga layunin. Iwang blangko upang manahin ang default na modelo ng AI provider; kung hindi, tumukoy ng murang modelo tulad ng gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Bigat ng classifier';
$string['settings:mastery_classifier_weight_desc'] = 'Gaano kalaki ang bilang ng pagsubok sa usapan kumpara sa pagsubok sa pagsusulit (1.0). Default 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Threshold ng confidence ng classifier';
$string['settings:mastery_classifier_threshold_desc'] = 'Pinakamababang confidence ng classifier na kinakailangan upang itala ang isang pagsubok sa usapan. 0.0 hanggang 1.0. Default 0.7.';
$string['chat:mode_progress'] = 'Progreso';
$string['objectives:toggle_dashboard'] = 'Ipakita ang tab ng Progreso dashboard sa mga estudyante';
$string['objectives:toggle_dashboard_help'] = 'Opsyonal. Nagdaragdag ng tab na Progreso katabi ng Chat / Voice / History sa loob ng widget. Ipinapakita ng tab sa mga mag-aaral kung aling mga layunin ang kanilang naabot, alin ang isinasagawa, at alin ang hindi pa nila sinisimulan.';
$string['mastery:dashboard_title'] = 'Ang iyong progreso sa pagkatuto';
$string['mastery:dashboard_subtitle'] = 'Sinusukat ang kasanayan mula sa iyong mga sagot sa pagsusulit at pagsasanay sa chat. Magpatuloy — mas mahalaga ang lalim kaysa sa lawak.';
$string['mastery:dashboard_refresh'] = 'I-refresh';
$string['mastery:section_mastered'] = 'Mahusay na';
$string['mastery:section_learning'] = 'Isinasagawa';
$string['mastery:section_not_started'] = 'Hindi pa nagsisimula';
$string['mastery:summary_label'] = '{$a->mastered} sa {$a->total} na layunin ang mahusay';
$string['mastery:ask_about'] = 'Magtanong tungkol dito';
$string['mastery:celebrate'] = 'Naabot mo na ang bawat layunin para sa kursong ito. Magaling na trabaho.';
$string['mastery:ask_template'] = 'Tulungan mo akong magsanay at palalimin ang aking pag-unawa sa layuning ito: {$a}.';
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
