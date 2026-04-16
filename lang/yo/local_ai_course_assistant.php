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
 * Language strings for local_ai_course_assistant — Yoruba (Yorùbá).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Olùrànlọ́wọ́ Ẹkọ AI';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Tọjú àwọn ìjíròrò ìdánilẹ́kọ̀ọ́ AI fún olùmúlò àti ẹkọ kọ̀ọ̀kan.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID olùmúlò tó ní ìjíròrò náà.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID ẹkọ tí ìjíròrò náà jẹ́ tirẹ̀.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Àkọlé ìjíròrò náà.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Àkókò tí a ṣẹ̀dá ìjíròrò náà.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Àkókò tí a ṣàtúnṣe ìjíròrò náà kẹ̀yìn.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Tọjú àwọn ìfiránṣẹ́ kọ̀ọ̀kan nínú àwọn ìjíròrò.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID olùmúlò tó fi ìfiránṣẹ́ náà ránṣẹ́.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID ẹkọ tí ìfiránṣẹ́ náà jẹ́ tirẹ̀.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Ipa olùránṣẹ́ ìfiránṣẹ́ (olùmúlò tàbí olùrànlọ́wọ́).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Àkóónú ìfiránṣẹ́ náà.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Iye àwọn token tí a lò fún ìfiránṣẹ́ náà.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Àkókò tí a ṣẹ̀dá ìfiránṣẹ́ náà.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Lo ìjíròrò ìdánilẹ́kọ̀ọ́ AI';
$string['ai_course_assistant:viewanalytics'] = 'Wo analytics ìdánilẹ́kọ̀ọ́ AI';
$string['ai_course_assistant:manage'] = 'Ṣàkóso àwọn ètò ìdánilẹ́kọ̀ọ́ AI (Ipa Alàṣẹ)';

// Settings.
$string['settings:enabled'] = 'Mú Olùrànlọ́wọ́ Ẹkọ AI ṣiṣẹ́';
$string['settings:enabled_desc'] = 'Mú tàbí dáwọ́ Olùrànlọ́wọ́ Ẹkọ AI dúró lórí àwọn ojú-ewé ẹkọ.';
$string['settings:default_course_mode'] = 'Àbáwọlé fún àwọn kọ́ọ̀sì tuntun';
$string['settings:default_course_mode_desc'] = 'Ó ń darí bóyá SOLA yóò farahàn lórí kọ́ọ̀sì kan nígbà tí kò sí ìyàn fún kọ́ọ̀sì kọ̀ọ̀kan. Àwọn àfisọ́kan tuntun máa ń jẹ́ àbáwọlé sí "Kí a jẹ́ kú ní àbáwọlé" kí àwọn alákòóso lè jáde kọ́ọ̀sì-bí-kọ́ọ̀sì láti ojú ewé Analytics tàbí ojú ewé Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Kí a jẹ́ kú ní àbáwọlé (mú ṣiṣẹ́ fún kọ́ọ̀sì kọ̀ọ̀kan)';
$string['settings:default_course_mode_all'] = 'A ti mú ṣiṣẹ́ lórí gbogbo kọ́ọ̀sì';
$string['settings:provider'] = 'Olùpèsè AI';
$string['settings:provider_desc'] = 'Yan olùpèsè AI láti lò fún àwọn ìparí ìbáraẹnisọ̀rọ̀. Yan "Moodle AI (core_ai subsystem)" láti darí àwọn ìbéèrè nípasẹ̀ ìṣètò AI tí a kọ́ sínú Moodle ní Site admin > AI; àwọn apá kókó API, àwòṣe, àti URL ìpìlẹ̀ nísàlẹ̀ ni a kò gbé yẹ̀wò ní ọ̀nà ìṣiṣẹ́ yìí. Streaming, lílo irinṣẹ́, àti prompt caching kò sí nípasẹ̀ core_ai — a ó ránṣẹ́ àwọn ìdáhùn gẹ́gẹ́ bí apá kan. Lo olùpèsè tààrà fún ìrírí akẹ́kọ̀ọ́ tí ó dára jùlọ.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Àdúgbò)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Àdánidá (Ó báramu OpenAI)';
$string['settings:apikey'] = 'Bọ́tìnnì API';
$string['settings:apikey_desc'] = 'Bọ́tìnnì API fún olùpèsè tí a yàn. Kò nílò fún Ollama.';
$string['settings:model'] = 'Orúkọ Àwòrán';
$string['settings:model_desc'] = 'Àwòrán tí a ó lò. Àìpéye da lórí olùpèsè (fún àpẹrẹ claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL Ìpìlẹ̀ API';
$string['settings:apibaseurl_desc'] = 'URL ìpìlẹ̀ fún API. A máa ń yín àmúlò fún olùpèsè kọ̀ọ̀kan ṣùgbọ́n a lè yípadà. Fi sílẹ̀ fún àìpéye olùpèsè.';
$string['settings:systemprompt'] = 'Àpẹrẹ Ìgbékalẹ̀ Ètò';
$string['settings:systemprompt_desc'] = 'Ìgbékalẹ̀ tí a firánṣẹ́ sí AI. Lo àwọn aṣojú: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Ìwọ jẹ́ olùkọ́ AI olùrànlọ́wọ́ fún ẹkọ "{{coursename}}". Ipa akẹ́kọ̀ọ́ ni {{userrole}}.

Àwọn ìdánimọ̀ ẹkọ tí a bò:
{{coursetopics}}

Ràn akẹ́kọ̀ọ́ lọ́wọ́ láti lóye ohun tí wọ́n ń kọ́. Jẹ́ olùránnilétí, kedere, àti ó dára lè pèdàgógì.';
$string['settings:temperature'] = 'Ìwọ̀n Ìyípadà';
$string['settings:temperature_desc'] = 'Ṣàkóso àṣọnà. Àwọn iye kékeré jẹ́ tó dára, àwọn iye gíga jẹ́ ẹ̀dá. Ìwọ̀n: 0.0 sí 2.0.';
$string['settings:maxhistory'] = 'Ìtàn Ìjíròrò Tó Pọ̀ Jù';
$string['settings:maxhistory_desc'] = 'Iye àwọn párì ìfiránṣẹ́ tó pọ̀ jù tí a lè ṣàfikún nínú àwọn ìbéèrè API. A máa ń gé àwọn ìfiránṣẹ́ àtijọ́.';
$string['settings:avatar'] = 'Avatar Ìjíròrò';
$string['settings:avatar_desc'] = 'Yan àwòrán icon fún bọ́tìnnì ohun èlò ìjíròrò.';
$string['settings:avatar_saylor'] = 'Àpẹẹrẹ {$a} (Àìpéye)';
$string['settings:position'] = 'Ipò Ohun Èlò';
$string['settings:position_desc'] = 'Ipò ohun èlò ìjíròrò lórí ojú-ewé.';
$string['settings:position_br'] = 'Ìsàlẹ̀ ọ̀tún';
$string['settings:position_bl'] = 'Ìsàlẹ̀ òsì';
$string['settings:position_tr'] = 'Oke ọ̀tún';
$string['settings:position_tl'] = 'Oke òsì';
$string['chat:settings'] = 'Àwọn ètò plugin';
$string['analytics:viewdashboard'] = 'Wo dashboard analytics';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'Àwọn Ètò AI Ẹkọ';
$string['coursesettings:enabled'] = 'Mú àwọn àtúnṣe ẹkọ ṣiṣẹ́';
$string['coursesettings:enabled_desc'] = 'Nígbà tí a bá mú ṣiṣẹ́, àwọn ètò ìsàlẹ̀ yọ àwọn ètò olùpèsè AI àgbáyé fún ẹkọ yìí nìkan. Fi àwọn aṣa sílẹ̀ láti jogun iye àgbáyé.';
$string['coursesettings:sola_enabled'] = 'SOLA lórí kọ́ọ̀sì yìí';
$string['coursesettings:sola_enabled_toggle'] = 'Fihàn widget SOLA lórí kọ́ọ̀sì yìí';
$string['coursesettings:sola_enabled_desc'] = 'Ó ń darí bóyá widget ìbáraẹnisọ̀rọ̀ SOLA yóò farahàn lórí kọ́ọ̀sì yìí. Àbáwọlé fún gbogbo ojú òpó ni a ṣètò nínú àwọn ìṣètò plugin lábẹ́ General > Default for new courses.';
$string['coursesettings:using_global'] = 'Ń lò ètò àgbáyé';
$string['coursesettings:saved'] = 'Àwọn ètò AI ẹkọ ti fipamọ́.';
$string['coursesettings:global_settings_link'] = 'Àwọn ètò AI àgbáyé';

// Language detection and preference.
$string['lang:switch'] = 'Bẹ̃ẹ̃ni, yípadà';
$string['lang:dismiss'] = 'Rárá, o ṣeun';
$string['lang:change'] = 'Yí èdè padà';
$string['lang:english'] = 'Gẹ̀ẹ́sì';

// Chat widget.
$string['chat:title'] = 'Olùkọ́ AI';
$string['chat:placeholder'] = 'Béèrè ìbéèrè kan...';
$string['chat:send'] = 'Ránṣẹ́';
$string['chat:close'] = 'Pa ìjíròrò dé';
$string['chat:open'] = 'Ṣí ìjíròrò ìdánilẹ́kọ̀ọ́ AI';
$string['chat:clear'] = 'Sàáfo ìtàn';
$string['chat:clear_confirm'] = 'Ṣé o dájú pé o fẹ́ sàáfo ìtàn ìjíròrò rẹ fún ẹkọ yìí?';
$string['chat:copy'] = 'Daakọ ìjíròrò';
$string['chat:copied'] = 'Ìjíròrò ti daakọ sí clipboard';
$string['chat:copy_failed'] = 'Kò ṣéṣe láti daakọ ìjíròrò';
$string['chat:thinking'] = 'Ń ronú...';
$string['chat:error'] = 'Ẹ̀jọ́ mi, ìkan pọ̀ jẹ. Jọ̀wọ́ gbìyànjú lẹ́ẹ̀kansí.';
$string['chat:error_auth'] = 'Àṣìṣe ìfọwọ́sí. Jọ̀wọ́ kàn sí alàṣẹ rẹ.';
$string['chat:error_ratelimit'] = 'Ìbéèrè tó pọ̀ jù. Jọ̀wọ́ dúró ìṣẹ́jú díẹ̀ kí o sì gbìyànjú lẹ́ẹ̀kansí.';
$string['chat:error_unavailable'] = 'Iṣẹ́ AI kò sí fún ìgbà díẹ̀. Jọ̀wọ́ gbìyànjú lẹ́ẹ̀kansí lẹ́yìn.';
$string['chat:error_notconfigured'] = 'A kò tí ì ṣètò olùkọ́ AI. Jọ̀wọ́ kàn sí alàṣẹ rẹ.';
$string['chat:mic'] = 'Sọ ìbéèrè rẹ';
$string['chat:mic_error'] = 'Àṣìṣe maikirofonù. Jọ̀wọ́ ṣàyẹ̀wò àwọn àṣẹ aṣàwákiri rẹ.';
$string['chat:mic_unsupported'] = 'Ìgbàgbọ́ ohun kò ṣe àtìlẹyìn nínú aṣàwákiri yìí.';
$string['chat:newline_hint'] = 'Shift+Enter fún ìlà tuntun';
$string['chat:you'] = 'Ìwọ';
$string['chat:assistant'] = 'Olùkọ́ AI';
$string['chat:history_loaded'] = 'Ìjíròrò tẹ́lẹ̀ ti gba àgbàdo.';
$string['chat:history_cleared'] = 'Ìtàn ìjíròrò ti sáfo.';
$string['chat:offtopic_warning'] = 'Ó dàbí pé ìbéèrè rẹ kò ní í ṣe pẹ̀lú ẹkọ yìí. Jọ̀wọ́ gbìyànjú láti dúró lórí kókó kí n sì lè ràn ọ́ dára jù!';
$string['chat:offtopic_ended'] = 'Ìwọ̀sí olùkọ́ AI rẹ ti dáwọ́ dúró fún {$a} ìṣẹ́jú nítorí pé ìjíròrò náà kọjá kókó ẹkọ ní ọ̀pọ̀ ìgbà. Jọ̀wọ́ lo àkókò yìí láti tún àwọn ohun èlò ẹkọ rẹ ṣàgbéyẹ̀wò, o sì lè gbìyànjú lẹ́ẹ̀kansí lẹ́yìn.';
$string['chat:offtopic_locked'] = 'Ìwọ̀sí olùkọ́ AI rẹ ti dáwọ́ dúró fún ìgbà díẹ̀. O lè gbìyànjú lẹ́ẹ̀kansí ní {$a} ìṣẹ́jú. Jọ̀wọ́ dojú kọ àwọn ìbéèrè tó ní í ṣe pẹ̀lú ẹkọ nígbà tí o bá padà.';
$string['chat:escalated_to_support'] = 'Kò ṣéṣe láti dáhùn ìbéèrè rẹ pátápátá, nítorí náà mo ṣẹ̀dá tikẹ́ètì àtìlẹyìn fún ọ. Ẹni kan nínú ẹgbẹ́ àtìlẹyìn yóò tẹ̀lé. Àmìlò tikẹ́ètì rẹ ni: {$a}';
$string['chat:studyplan_intro'] = 'Mo lè ràn ọ́ lọ́wọ́ láti ṣẹ̀dá ètò ìkẹ́kọ̀ọ́ fún ẹkọ yìí! Kan sọ fun mi iye wákàtí fún ọ̀sẹ̀ tí o lè fi sí ìkẹ́kọ̀ọ́, mi ó sì ràn ọ́ lọ́wọ́ láti kọ́ ètò tó ní ètò.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ & Àtìlẹyìn';
$string['settings:faq_heading_desc'] = 'Ṣètò FAQ àpapọ̀ àti ìdásopọ̀ tikẹ́ètì àtìlẹyìn Zendesk.';
$string['settings:faq_content'] = 'Àkóónú FAQ';
$string['settings:faq_content_desc'] = 'Tẹ àwọn ìwé FAQ (ọ̀kan fún ìlà nínú ọ̀nà: Q: ìbéèrè | A: ìdáhùn). Wọ́n yóò pèsè sí AI láti dáhùn àwọn ìbéèrè àtìlẹyìn ti o wọ́pọ̀.';
$string['settings:zendesk_enabled'] = 'Mú Ìgbéla Zendesk ṣiṣẹ́';
$string['settings:zendesk_enabled_desc'] = 'Nígbà tí AI kò bá lè yanjú ìbéèrè àtìlẹyìn, ṣẹ̀dá tikẹ́ètì Zendesk aifọ̀wọ́ṣe pẹ̀lú àkopọ̀ ìjíròrò.';
$string['settings:zendesk_subdomain'] = 'Subdomain Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomain Zendesk rẹ (fún àpẹrẹ "mycompany" fún mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'Email API Zendesk';
$string['settings:zendesk_email_desc'] = 'Àdírẹ́ẹ̀sì email olùmúlò Zendesk fún ìfọwọ́sí API (pẹ̀lú ìfikúnlẹ̀ /token).';
$string['settings:zendesk_token'] = 'Token API Zendesk';
$string['settings:zendesk_token_desc'] = 'Token API fún ìfọwọ́sí Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Ìṣàwárí Ìjíròrò Tó Jáde Kọ';
$string['settings:offtopic_heading_desc'] = 'Ṣètò bí ìjíròrò ṣe máa ń mú àwọn ìjíròrò tó jáde kọ.';
$string['settings:offtopic_enabled'] = 'Mú Ìṣàwárí Ìjíròrò Tó Jáde Kọ ṣiṣẹ́';
$string['settings:offtopic_enabled_desc'] = 'Kọ́ AI láti ṣàwárí àti darí àwọn ìjíròrò tó jáde kọ padà.';
$string['settings:offtopic_max'] = 'Iye Ìfiránṣẹ́ Tó Jáde Kọ Tó Pọ̀ Jù';
$string['settings:offtopic_max_desc'] = 'Iye àwọn ìfiránṣẹ́ tó jáde kọ tó tẹ̀lé ara ẹni kí a tó ṣe ohunkóhun.';
$string['settings:offtopic_action'] = 'Ìgbésẹ̀ Ìjíròrò Tó Jáde Kọ';
$string['settings:offtopic_action_desc'] = 'Ohun tí a ó ṣe nígbà tí a bá dé àlá ìjíròrò tó jáde kọ.';
$string['settings:offtopic_action_warn'] = 'Kìlọ̀ àti darí padà';
$string['settings:offtopic_action_end'] = 'Dáwọ́ ìwọ̀sí dúró fún ìgbà díẹ̀';
$string['settings:offtopic_lockout_duration'] = 'Ìgbà Ìdálóde (ìṣẹ́jú)';
$string['settings:offtopic_lockout_duration_desc'] = 'Ìgbà tó gùn tó (ní ìṣẹ́jú) tí akẹ́kọ̀ọ́ máa ń pàdánù ìwọ̀sí sí olùkọ́ AI lẹ́yìn tí ó bá kọjá àlá ìjíròrò tó jáde kọ. Àìpéye: ìṣẹ́jú 30.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Ètò Ìkẹ́kọ̀ọ́ & Àwọn Ìránlọ́wọ́';
$string['settings:studyplan_heading_desc'] = 'Ṣètò àwọn ẹ̀yà ètò ìkẹ́kọ̀ọ́ àti àwọn ìkíló àkíyèsí.';
$string['settings:studyplan_enabled'] = 'Mú Ètò Ìkẹ́kọ̀ọ́ ṣiṣẹ́';
$string['settings:studyplan_enabled_desc'] = 'Gba olùkọ́ AI láàyè láti ràn àwọn akẹ́kọ̀ọ́ lọ́wọ́ láti ṣẹ̀dá àwọn ètò ìkẹ́kọ̀ọ́ ẹni kọ̀ọ̀kan tó dára fún wọn.';
$string['settings:reminders_email_enabled'] = 'Mú Àwọn Ìránlọ́wọ́ Email ṣiṣẹ́';
$string['settings:reminders_email_enabled_desc'] = 'Gba àwọn akẹ́kọ̀ọ́ láàyè láti yan ìránlọ́wọ́ ìkẹ́kọ̀ọ́ nipasẹ̀ email.';
$string['settings:reminders_whatsapp_enabled'] = 'Mú Àwọn Ìránlọ́wọ́ WhatsApp ṣiṣẹ́';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Gba àwọn akẹ́kọ̀ọ́ láàyè láti yan ìránlọ́wọ́ ìkẹ́kọ̀ọ́ nipasẹ̀ WhatsApp (nílò ìpilẹ̀ṣẹ̀ API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Ìdọ́kọ̀ API fún fíránsẹ́ àwọn ìfiránṣẹ́ WhatsApp (fún àpẹrẹ Twilio, MessageBird). Gbọdọ̀ gba POST pẹ̀lú ara JSON tó ní "to", "from", àti "body".';
$string['settings:whatsapp_api_token'] = 'Token API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token ìfọwọ́sí fún API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Nọ́mbà Olùránṣẹ́ WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Nọ́mbà fóònù láti fi ránsẹ́ àwọn ìfiránṣẹ́ WhatsApp (pẹ̀lú kóòdù orílẹ̀-èdè, fún àpẹrẹ +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Àwọn Orílẹ̀-Èdè Tó Dálẹ̀ WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Àwọn kóòdù orílẹ̀-èdè ISO 3166-1 alpha-2 tí a yà sọ́tọ̀ pẹ̀lú ásẹsẹ níbi tí àwọn ìránlọ́wọ́ WhatsApp kò gba àṣẹ nítorí àwọn ìlànà àgbègbè (fún àpẹrẹ "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Ìránlọ́wọ́ Ìkẹ́kọ̀ọ́: {$a}';
$string['reminder:email_body'] = 'Ẹ káàbọ̀ {$a->firstname},

Èyí ni ìránlọ́wọ́ ìkẹ́kọ̀ọ́ rẹ fún "{$a->coursename}".

{$a->message}

Ètò ìkẹ́kọ̀ọ́ rẹ dábàá {$a->hours_per_week} wákàtí fún ọ̀sẹ̀ fún ẹkọ yìí.

Tẹ̀síwájú ìgbẹ́kẹ̀lé rere!

---
Láti dáwọ́ àwọn ìránlọ́wọ́ wọ̀nyí dúró, tẹ ibí: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Ìránlọ́wọ́ Ìkẹ́kọ̀ọ́ fún {$a->coursename}: {$a->message} (Jáde: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Àfojúsí ìkẹ́kọ̀ọ́ lónìí: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Jáde kúrò ní Àwọn Ìránlọ́wọ́ Ìkẹ́kọ̀ọ́';
$string['unsubscribe:success'] = 'A ti yọ ọ kúrò ní àwọn ìránlọ́wọ́ ìkẹ́kọ̀ọ́ fún ẹkọ yìí.';
$string['unsubscribe:already'] = 'A ti yọ ọ kúrò ní àwọn ìránlọ́wọ́ wọ̀nyí tẹ́lẹ̀.';
$string['unsubscribe:invalid'] = 'Ọ̀nà ìyọkúrò aláìṣe tàbí tó ti parí.';
$string['unsubscribe:resubscribe'] = 'Ṣé o yípadà ní ọkàn rẹ? O lè tún mú àwọn ìránlọ́wọ́ ṣiṣẹ́ nipasẹ̀ ìjíròrò olùkọ́ AI.';

// Scheduled task.
$string['task:send_reminders'] = 'Ránsẹ́ àwọn ìránlọ́wọ́ ìkẹ́kọ̀ọ́ olùkọ́ AI';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Tọjú àwọn ètò ìkẹ́kọ̀ọ́ akẹ́kọ̀ọ́.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID olùmúlò tó ní ètò ìkẹ́kọ̀ọ́.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Ẹkọ tí ètò ìkẹ́kọ̀ọ́ jẹ́ tirẹ̀.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Wákàtí fún ọ̀sẹ̀ tí akẹ́kọ̀ọ́ gbèrò láti kẹ́kọ̀ọ́.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Àwọn àlàyé ètò ìkẹ́kọ̀ọ́ nínú ọ̀nà JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Tọjú àwọn ìfẹ́ ìránlọ́wọ́ àti àwọn ìforúkọ.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID olùmúlò tó forúkọ sí àwọn ìránlọ́wọ́.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Ìgbọ̀nwí ìránlọ́wọ́ (email tàbí whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Àdírẹ́ẹ̀sì email tàbí nọ́mbà fóòn fún àwọn ìránlọ́wọ́.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Kóòdù orílẹ̀-èdè olùmúlò fún ìbáramu ilana.';

// Analytics dashboard.
$string['analytics:title'] = 'Analytics Olùkọ́ AI';
$string['analytics:overview'] = 'Ìsọníṣókí';
$string['analytics:total_conversations'] = 'Àpapọ̀ àwọn ìjíròrò';
$string['analytics:total_messages'] = 'Àpapọ̀ àwọn ìfiránṣẹ́';
$string['analytics:active_students'] = 'Àwọn akẹ́kọ̀ọ́ tó ṣiṣẹ́';
$string['analytics:avg_messages_per_student'] = 'Ìfiránṣẹ́ àpapọ̀ fún akẹ́kọ̀ọ́';
$string['analytics:offtopic_rate'] = 'Iye ìjíròrò tó jáde kọ';
$string['analytics:escalation_count'] = 'Tí a gbé lọ sí àtìlẹyìn';
$string['analytics:studyplan_adoption'] = 'Àwọn akẹ́kọ̀ọ́ pẹ̀lú àwọn ètò ìkẹ́kọ̀ọ́';
$string['analytics:usage_trends'] = 'Àwọn Ìṣàn Ìlò';
$string['analytics:daily_messages'] = 'Ìwọ̀n ìfiránṣẹ́ ojoojúmọ́';
$string['analytics:hotspots'] = 'Àwọn Àgbègbè Gbígbóná Jù Ẹkọ';
$string['analytics:hotspots_desc'] = 'Àwọn apá ẹkọ tí a tọ́ka sí jù lọ nínú àwọn ìbéèrè akẹ́kọ̀ọ́. Àwọn iye tó ga lè tọ́ka sí àwọn àgbègbè níbi tí àwọn akẹ́kọ̀ọ́ nílò àtìlẹyìn díẹ̀ sí i.';
$string['analytics:section'] = 'Abala';
$string['analytics:mention_count'] = 'Àwọn mẹ́nshọ̀n';
$string['analytics:common_prompts'] = 'Àwọn Ìlànà Ìgbékalẹ̀ Ti Ó Wọ́pọ̀';
$string['analytics:common_prompts_desc'] = 'Àwọn ìlànà ìbéèrè tí a tún padà ní igbagbogbo láti ọ̀dọ̀ àwọn akẹ́kọ̀ọ́. Ṣàgbéyẹ̀wò wọ̀nyí láti ṣàwárí àwọn àláfo ètò nínú àkóónú ẹkọ.';
$string['analytics:prompt_pattern'] = 'Ìlànà';
$string['analytics:frequency'] = 'Ìgbàgbogbo';
$string['analytics:recent_activity'] = 'Iṣẹ́ Àìpẹ́';
$string['analytics:no_data'] = 'Kò sí data analytics tó wà sí báyìí. Data yóò farahàn nígbà tí àwọn akẹ́kọ̀ọ́ bá bẹ̀rẹ̀ sí í lò olùkọ́ AI.';
$string['analytics:timerange'] = 'Ìwọ̀n àkókò';
$string['analytics:last_7_days'] = 'Ọjọ́ 7 tó kọjá';
$string['analytics:last_30_days'] = 'Ọjọ́ 30 tó kọjá';
$string['analytics:all_time'] = 'Gbogbo àkókò';
$string['analytics:export'] = 'Gbé data jáde';
$string['analytics:provider_comparison'] = 'Ìfiwéra Olùpèsè AI';
$string['analytics:provider_comparison_desc'] = 'Ṣe àfiwéra ìṣẹ́dá kọjá àwọn olùpèsè AI tí a lò nínú ẹkọ yìí.';
$string['analytics:provider'] = 'Olùpèsè';
$string['analytics:response_count'] = 'Àwọn ìdáhùn';
$string['analytics:avg_response_length'] = 'Gígùn ìdáhùn àpapọ̀';
$string['analytics:total_tokens'] = 'Àpapọ̀ àwọn token';
$string['analytics:avg_tokens'] = 'Àpapọ̀ àwọn token / ìdáhùn';

// User settings.
$string['usersettings:title'] = 'Olùrànlọ́wọ́ Ẹkọ AI - Data Rẹ';
$string['usersettings:intro'] = 'Ṣàkóso data ìjíròrò olùkọ́ AI rẹ àti àwọn ètò àṣírí';
$string['usersettings:privacy_info'] = 'A tọjú àwọn ìjíròrò rẹ pẹ̀lú olùkọ́ AI láti pèsè àtìlẹyìn tẹ̀síwájú jákèjádò ẹkọ rẹ. O ní ìṣàkóso kíkún lórí data yìí o sì lè parẹ́ rẹ̀ nígbàkúgbà.';
$string['usersettings:usage_stats'] = 'Àwọn Ìṣirò Ìlò Rẹ';
$string['usersettings:total_messages'] = 'Àpapọ̀ àwọn ìfiránṣẹ́';
$string['usersettings:total_conversations'] = 'Àwọn ìjíròrò';
$string['usersettings:messages'] = 'Àwọn ìfiránṣẹ́';
$string['usersettings:last_activity'] = 'Iṣẹ́ àìpẹ́';
$string['usersettings:delete_course_data'] = 'Parẹ́ data ẹkọ';
$string['usersettings:no_data'] = 'O kò tíì lò olùkọ́ AI. Data ìlò rẹ yóò farahàn níbí nígbà tí o bá bẹ̀rẹ̀ sí í bára ẹni sọ̀rọ̀.';
$string['usersettings:delete_all_title'] = 'Parẹ́ Gbogbo Data Rẹ';
$string['usersettings:delete_all_warning'] = 'Èyí yóò parẹ́ pátápátá gbogbo àwọn ìjíròrò olùkọ́ AI rẹ kọjá gbogbo àwọn ẹkọ. A kò lè yípadà ìgbésẹ̀ yìí.';
$string['usersettings:delete_all_button'] = 'Parẹ́ Gbogbo Data Mi';
$string['usersettings:confirm_delete_course'] = 'Ṣé o dájú pé o fẹ́ parẹ́ pátápátá gbogbo data olùkọ́ AI rẹ fún ẹkọ "{$a}"? A kò lè yípadà ìgbésẹ̀ yìí.';
$string['usersettings:confirm_delete_all'] = 'Ṣé o dájú pé o fẹ́ parẹ́ pátápátá GBOGBO data olùkọ́ AI rẹ kọjá gbogbo àwọn ẹkọ? A kò lè yípadà ìgbésẹ̀ yìí.';
$string['usersettings:data_deleted'] = 'A ti parẹ́ data rẹ.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Ẹ káàbọ̀, {$a}! Mo jẹ SOLA. Báwo ni mo ṣe lè ràn ọ́ lọ́wọ́ lónìí?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Ṣí SOLA';
$string['chat:change_avatar'] = 'Yí avatar padà';

$string['chat:quiz'] = 'Ṣe ìdánwò ìdárayá';
$string['chat:quiz_setup_title'] = 'Ìdánwò Ìdárayá';
$string['chat:quiz_questions'] = 'Iye àwọn ìbéèrè';
$string['chat:quiz_topic'] = 'Kókó';
$string['chat:quiz_topic_guided'] = 'AI ń darí (da lórí ìlọsíwájú rẹ)';
$string['chat:quiz_topic_default'] = 'Àkóónú ẹkọ lọwọlọwọ';
$string['chat:quiz_topic_custom'] = 'Kókó tí o yan…';
$string['chat:quiz_custom_placeholder'] = 'Tẹ kókó tàbí ìbéèrè kan...';
$string['chat:quiz_start'] = 'Bẹ̀rẹ̀ Ìdánwò';
$string['chat:quiz_cancel'] = 'Fagilé';
$string['chat:quiz_loading'] = 'Ń ṣẹ̀dá ìdánwò…';
$string['chat:quiz_error'] = 'Kò ṣéṣe láti ṣẹ̀dá ìdánwò. Jọ̀wọ́ gbìyànjú lẹ́ẹ̀kansí.';
$string['chat:quiz_correct'] = 'Ó tọ̀!';
$string['chat:quiz_wrong'] = 'Aṣìṣe.';
$string['chat:quiz_next'] = 'Ìbéèrè tókàn';
$string['chat:quiz_finish'] = 'Wo àwọn ìyọrísí';
$string['chat:quiz_score'] = 'Ìdánwò parí! O gba {$a->score} lára {$a->total}.';
$string['chat:quiz_summary'] = 'Mo ṣẹ̀ṣẹ̀ parí ìdánwò ìdárayá ìbéèrè {$a->total} lórí "{$a->topic}" mo sì gba {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Àwọn Àfojúsùn Ẹ̀kọ́';
$string['chat:quiz_topic_modules'] = 'Kókó Ẹkọ';
$string['chat:quiz_subtopic_select'] = 'Yan ohun kan tó jọmọ…';
$string['chat:quiz_topic_sections'] = 'Àwọn Abala Ẹkọ';
$string['chat:quiz_score_great'] = 'Iṣẹ́ tó dára jù! O mọ ohun tí a ń kọ́ yìí gangan.';
$string['chat:quiz_score_good'] = 'Gbìyànjú tó dára! Tẹ̀síwájú àtúnyẹ̀wò láti mú òye rẹ pọ̀ sí i.';
$string['chat:quiz_score_practice'] = 'Tẹ̀síwájú ìdárayá — gbìyànjú àtúnyẹ̀wò ohun tí a kọ́ tó níí ṣe, lẹ́yìn náà tún ìdánwò náà ṣe.';
$string['chat:quiz_review_heading'] = 'Àtúnyẹ̀wò';
$string['chat:quiz_retake'] = 'Tún Ìdánwò Ṣe';
$string['chat:quiz_exit'] = 'Jáde Ìdánwò';
$string['chat:quiz_your_answer'] = 'Ìdáhùn rẹ';
$string['chat:quiz_correct_answer'] = 'Ìdáhùn tó tọ̀';

$string['chat:starters_label'] = 'Àwọn ìpilẹ̀ṣẹ̀ ìjíròrò';
$string['chat:starter_quiz'] = 'Dánwò Mi Lórí Èyí';
$string['chat:starter_explain'] = 'Ṣàlàyé Èyí';
$string['chat:starter_key_concepts'] = 'Àwọn Èrò Pàtàkì';
$string['chat:starter_study_plan'] = 'Ètò Ìkẹ́kọ̀ọ́';
$string['chat:starter_help_me'] = 'Àrànmọ́ AI';
$string['chat:starter_ai_project_coach'] = 'Olùkọ́ Iṣẹ́ Àkànṣe AI';
$string['chat:starter_ell_practice'] = 'Ìdánilẹ́kọ̀ọ́ Ìfọ̀rọ̀wánilẹ́nuwò';
$string['chat:starter_ell_pronunciation'] = 'Ìdárayá Pípè ELL';
$string['chat:starter_ai_coach'] = 'Olùkọ́ AI';
$string['chat:starter_speak'] = 'Sọ ìpilẹ̀ṣẹ̀ kan';

$string['chat:reset'] = 'Bẹ̀rẹ̀ lẹ́ẹ̀kansí';

$string['chat:topic_picker_title'] = 'Kókó wo ni o fẹ́ tẹ̀ síwájú?';
$string['chat:topic_picker_title_help'] = 'Ohun wo ni o fẹ́ ìrànlọ́wọ́ pẹ̀lú?';
$string['chat:topic_picker_title_explain'] = 'Ohun wo ni o fẹ́ kí n ṣàlàyé?';
$string['chat:topic_picker_title_study'] = 'Abala wo ni o fẹ́ tẹ̀ síwájú?';
$string['chat:topic_start'] = 'Tẹ̀síwájú';

$string['chat:fullscreen'] = 'Ojú-àwòrán gbogbo';
$string['chat:exitfullscreen'] = 'Jáde ojú-àwòrán gbogbo';

$string['chat:language'] = 'Yí èdè padà';
$string['chat:settings_panel'] = 'Àwọn Ètò';
$string['chat:settings_language'] = 'Èdè';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Ohùn';
$string['chat:settings_voice_admin'] = 'Àwọn ètò ohùn ni a ṣàkóso nínú pánẹ́ẹ̀lì alàṣẹ ààyè.';

$string['chat:voice_mode'] = 'Ìpínlẹ̀ ohùn';
$string['chat:voice_end'] = 'Parí àpéjọ ohùn';
$string['chat:voice_connecting'] = 'Ń so pọ̀...';
$string['chat:voice_listening'] = 'Ń gbọ́...';
$string['chat:voice_speaking'] = 'SOLA ń sọ̀rọ̀...';
$string['chat:voice_idle'] = 'Ó ti ṣetán';
$string['chat:voice_error'] = 'Ìsopọ̀ ohùn kùnà. Jọ̀wọ́ ṣàyẹ̀wò àwọn ètò rẹ.';
$string['chat:quiz_locked'] = 'SOLA dáwọ́ dúró nígbà ìdánwò láti ṣe àtìlẹyìn ìmọ̀ ẹ̀kọ́ tó tọ̀. Ire o!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Àkọsílẹ̀';

// History panel.
$string['chat:history_title'] = 'Àkọsílẹ̀ àti Ìtàn Ìfọ̀rọ̀wánilẹ́nuwò';
$string['task:send_inactivity_reminders'] = 'Fi àwọn ìmẹ́lì ìránlọ́wọ́ ọ̀ṣọ̀ọ̀ṣẹ̀ ránṣẹ́ nítorí àìṣiṣẹ́';
$string['messageprovider:study_notes'] = 'Àwọn àkọsílẹ̀ àkókò ìkẹ́kọ̀ọ́';
$string['task:send_inactivity_reminders'] = 'Fi imeeli iranti aiṣiṣẹ ni ọsẹ-ọsẹ ranṣẹ';
$string['messageprovider:study_notes'] = 'Awọn akọsilẹ akoko ikẹkọ';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Ifijiṣẹ Iwaju';
$string['settings:cdn_heading_desc'] = 'Pese awọn ohun-ini iwaju SOLA (JS/CSS) lati CDN ita dipo eto faili Moodle. Eyi n gba laaye awọn imudojuiwọn iwaju laisi iṣagbega plugin. Fi CDN URL silẹ ni ofo lati lo awọn faili plugin ti agbegbe.';
$string['settings:cdn_url'] = 'CDN URL Ipilẹ';
$string['settings:cdn_url_desc'] = 'URL ipilẹ nibiti sola.min.js ati sola.min.css ti wa. Apẹẹrẹ: https://your-org.github.io/sola-cdn. Fi silẹ ni ofo lati lo awọn faili plugin ti agbegbe.';
$string['settings:cdn_version'] = 'Ẹya Ohun-ini CDN';
$string['settings:cdn_version_desc'] = 'Okun ẹya ti a fi kun si awọn CDN URLs fun cache busting. Ṣe imudojuiwọn lẹhin CDN deploy kọọkan (apẹẹrẹ 3.2.4 tabi commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Lilo gbogbogbo';
$string['analytics:tab_bycourse'] = 'Gẹgẹ bi ẹkọ';
$string['analytics:tab_comparison'] = 'AI pẹlu awọn ti ko lo';
$string['analytics:tab_byunit'] = 'Gẹgẹ bi apakan';
$string['analytics:tab_usagetypes'] = 'Awọn iru lilo';
$string['analytics:tab_themes'] = 'Awọn akọle';
$string['analytics:tab_feedback'] = 'Esi AI';
$string['analytics:total_students'] = 'Apapọ awọn akẹkọ';
$string['analytics:active_users'] = 'Awọn olumulo AI ti nṣiṣẹ';
$string['analytics:msgs_per_student'] = 'Awọn ifiranṣẹ fun akẹkọ kọọkan';
$string['analytics:avg_session'] = 'Aropin igba akoko';
$string['analytics:return_rate'] = 'Oṣuwọn ipadabọ';
$string['analytics:total_sessions'] = 'Apapọ awọn igba';
$string['analytics:thumbs_up'] = 'Atanpako soke';
$string['analytics:thumbs_down'] = 'Atanpako sile';
$string['analytics:hallucination_flags'] = 'Awọn ami aṣiṣe';
$string['analytics:msgs_to_resolution'] = 'Awọn ifiranṣẹ si ipinnu';
$string['analytics:helpful'] = 'Iranlọwọ';
$string['analytics:not_helpful'] = 'Ko ṣe iranlọwọ';
$string['analytics:flag_hallucination'] = 'Idahun yii ni alaye ti ko tọ';
$string['analytics:submit_rating'] = 'Firanṣẹ';
$string['analytics:thanks_feedback'] = 'O ṣeun fun esi rẹ';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_groq'] = 'Groq';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Ṣàlàyé ojú-ìwé yìí';
$string['chat:starter_ask_anything'] = 'Béèrè ohunkóhun';
$string['chat:starter_review_practice'] = 'Àtúnyẹ̀wò àti ìdánrawò';
$string['chat:history_saved_subtitle'] = 'Àwọn ìdáhùn tí a ti fi pamọ́ wà lórí ẹ̀rọ yìí fún iṣẹ́-ẹ̀kọ́ yìí.';
$string['chat:history_saved_empty'] = 'Fi ìdáhùn AI pamọ́ láti rí i níhìn-ín.';
$string['chat:history_views_label'] = 'Àwọn ìwòye ìtàn';
$string['chat:history_view_saved'] = 'Tí a fi pamọ́';
$string['chat:history_view_recent'] = 'Ìtàn';
$string['chat:debug_refresh'] = 'Mú tuntun';
$string['chat:debug_copy_all'] = 'Ṣe àdàkọ gbogbo';
$string['chat:debug_close'] = 'Tì';
$string['chat:language_switch'] = 'Yí èdè padà';
$string['chat:language_dismiss'] = 'Kọ̀ àbá èdè';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Yan olùpèsè LLM';
$string['chat:llm_model_label'] = 'Àwòkọ́ṣe';
$string['chat:llm_model_select'] = 'Yan àwòkọ́ṣe LLM';
$string['chat:footer_usertesting'] = 'Ìdánwò ìlò';
$string['chat:footer_feedback'] = 'Èsì';
$string['chat:voice_panel_title'] = 'Bá {$a} sọ̀rọ̀ (Àdánwò)';
