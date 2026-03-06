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
 * Language strings for local_ai_course_assistant — Amharic.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'የAI ኮርስ ረዳት';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'የAI አስተማሪ ውይይቶችን በተጠቃሚ እና በኮርስ ያከማቻል።';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ውይይቱን የሚያቀርበው ተጠቃሚ መለያ።';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ውይይቱ የሚነካው ኮርስ መለያ።';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'የውይይቱ ርዕስ።';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'ውይይቱ የተፈጠረበት ጊዜ።';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'ውይይቱ ለመጨረሻ ጊዜ የተሻሻለበት ጊዜ።';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'በAI አስተማሪ ውይይቶች ውስጥ ያሉ ነጠላ መልዕክቶችን ያከማቻል።';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'መልዕክቱን የላከው ተጠቃሚ መለያ።';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'መልዕክቱ የሚነካው ኮርስ መለያ።';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'የመልዕክቱ ላኪ ሚና (ተጠቃሚ ወይም ረዳት)።';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'የመልዕክቱ ይዘት።';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'ለመልዕክቱ ጥቅም ላይ የዋሉ ቶከኖች ቁጥር።';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'መልዕክቱ የተፈጠረበት ጊዜ።';

// Capabilities.
$string['ai_course_assistant:use'] = 'የAI አስተማሪ ቻት ይጠቀሙ';
$string['ai_course_assistant:viewanalytics'] = 'የAI አስተማሪ ቻት ትንተና ይመልከቱ';
$string['ai_course_assistant:manage'] = 'የAI አስተማሪ ቻት ቅንብሮችን ያስተዳድሩ (የአስተዳዳሪ ሚና)';

// Settings.
$string['settings:enabled'] = 'የAI ኮርስ ረዳትን አንቃ';
$string['settings:enabled_desc'] = 'በኮርስ ገጾች ላይ የAI ኮርስ ረዳት ዊጄትን ያንቃሉ ወይም ያጠፋሉ።';
$string['settings:provider'] = 'የAI አቅራቢ';
$string['settings:provider_desc'] = 'ለቻት ማጠናቀቂያዎች ጥቅም ላይ የሚውለውን AI አቅራቢ ይምረጡ።';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (አካባቢያዊ)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'ብጁ (OpenAI-ተኳሃኝ)';
$string['settings:apikey'] = 'የAPI ቁልፍ';
$string['settings:apikey_desc'] = 'ለተመረጠው አቅራቢ የAPI ቁልፍ። ለOllama አያስፈልግም።';
$string['settings:model'] = 'የሞዴል ስም';
$string['settings:model_desc'] = 'ጥቅም ላይ የሚውለው ሞዴል። ነባሪው አቅራቢ ላይ ይወሰናል (ምሳሌ፦ claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01)።';
$string['settings:apibaseurl'] = 'የAPI መሰረታዊ URL';
$string['settings:apibaseurl_desc'] = 'ለAPI መሰረታዊ URL። እንደ አቅራቢ ራሱ ይሞላል ግን ሊሻሻል ይችላል። ለአቅራቢ ነባሪ ባዶ ይተው።';
$string['settings:systemprompt'] = 'የስርዓት ፕሮምት ቅጥ';
$string['settings:systemprompt_desc'] = 'ለAI የሚላከው የስርዓት ፕሮምት። ቅጦቹን ይጠቀሙ፦ {{coursename}}, {{userrole}}, {{coursetopics}}።';
$string['settings:systemprompt_default'] = 'ለ"{{coursename}}" ኮርስ ጠቃሚ የAI አስተማሪ ነዎት። የተማሪው ሚና {{userrole}} ነው።

የሚሸፈኑ የኮርስ ርዕሶች፦
{{coursetopics}}

ተማሪው የኮርሱን ቁሳቁስ እንዲረዳ ይርዱ። አበረታቱ፣ ግልጽ ይሁኑ እና ትምህርታዊ ዘዴ ይጠቀሙ።';
$string['settings:temperature'] = 'ሙቀት';
$string['settings:temperature_desc'] = 'ዘፈቀደነትን ይቆጣጠራል። ዝቅተኛ እሴቶች ይበልጥ ያተኩሩ፣ ከፍተኛ እሴቶች ይበልጥ ፈጠራዊ ናቸው። ክልል፦ 0.0 እስከ 2.0።';
$string['settings:maxhistory'] = 'ከፍተኛ የውይይት ታሪክ';
$string['settings:maxhistory_desc'] = 'በAPI ጥያቄዎች ውስጥ ሊካተቱ የሚችሉ ከፍተኛ የመልዕክት ጥንዶች ቁጥር። ያሮጉ መልዕክቶች ይቆራረጣሉ።';
$string['settings:avatar'] = 'የቻት አቫታር';
$string['settings:avatar_desc'] = 'ለቻት ዊጄት ቁልፍ አቫታር አዶ ይምረጡ።';
$string['settings:avatar_saylor'] = 'የSaylor Academy አርማ (ነባሪ)';
$string['settings:position'] = 'የዊጄት ቦታ';
$string['settings:position_desc'] = 'በገጹ ላይ የቻት ዊጄቱ ቦታ።';
$string['settings:position_br'] = 'ታች ቀኝ';
$string['settings:position_bl'] = 'ታች ግራ';
$string['settings:position_tr'] = 'ላይ ቀኝ';
$string['settings:position_tl'] = 'ላይ ግራ';
$string['chat:settings'] = 'የፕለጊን ቅንብሮች';
$string['analytics:viewdashboard'] = 'የትንተና ዳሽቦርድ ይመልከቱ';

// Course settings.
$string['coursesettings:title'] = 'የኮርስ AI ቅንብሮች';
$string['coursesettings:enabled'] = 'የኮርስ ማካካሻዎችን አንቃ';
$string['coursesettings:enabled_desc'] = 'ሲነቃ፣ ከዚህ በታች ያሉ ቅንብሮች ለዚህ ኮርስ ብቻ ዓለም አቀፍ AI አቅራቢ ውቅርን ይሻሻሉ። ዓለም አቀፍ እሴቱን ለመውሰድ መስኮቹን ባዶ ይተው።';
$string['coursesettings:using_global'] = 'ዓለም አቀፍ ቅንብር ጥቅም ላይ ነው';
$string['coursesettings:saved'] = 'የኮርስ AI ቅንብሮች ተቀምጠዋል።';
$string['coursesettings:global_settings_link'] = 'ዓለም አቀፍ AI ቅንብሮች';

// Language detection and preference.
$string['lang:switch'] = 'አዎ፣ ቀይር';
$string['lang:dismiss'] = 'አይ፣ አመሰግናለሁ';
$string['lang:change'] = 'ቋንቋ ቀይር';
$string['lang:english'] = 'እንግሊዝኛ';

// Chat widget.
$string['chat:title'] = 'AI አስተማሪ';
$string['chat:placeholder'] = 'ጥያቄ ይጠይቁ...';
$string['chat:send'] = 'ላክ';
$string['chat:close'] = 'ቻቱን ዝጋ';
$string['chat:open'] = 'የAI አስተማሪ ቻት ክፈት';
$string['chat:clear'] = 'ታሪክ አጽዳ';
$string['chat:clear_confirm'] = 'ለዚህ ኮርስ የቻት ታሪኩን ማጽዳት እንደሚፈልጉ እርግጠኛ ናቸው?';
$string['chat:copy'] = 'ውይይቱን ቅዳ';
$string['chat:copied'] = 'ውይይቱ ወደ ቅጥፌ ቦርድ ተቀድቷል';
$string['chat:copy_failed'] = 'ውይይቱን መቅዳት አልተሳካም';
$string['chat:greeting'] = 'ሰላም! ለዚህ ኮርስ የAI አስተማሪዎ ነኝ። ዛሬ እንዴት ልረዳዎ እችላለሁ?';
$string['chat:thinking'] = 'በማሰብ ላይ...';
$string['chat:error'] = 'ይቅርታ፣ ስህተት ተፈጥሯል። እባክዎ እንደገና ይሞክሩ።';
$string['chat:error_auth'] = 'የማረጋገጫ ስህተት። እባክዎ አስተዳዳሪዎን ያነጋግሩ።';
$string['chat:error_ratelimit'] = 'ጥያቄዎች ብዙ ናቸው። እባክዎ ትንሽ ይጠብቁ እና እንደገና ይሞክሩ።';
$string['chat:error_unavailable'] = 'የAI አገልግሎቱ ለጊዜው አይገኝም። እባክዎ ቆይተው እንደገና ይሞክሩ።';
$string['chat:error_notconfigured'] = 'AI አስተማሪው ገና አልተዋቀረም። እባክዎ አስተዳዳሪዎን ያነጋግሩ።';
$string['chat:expand'] = 'ቻቱን አስፋ';
$string['chat:collapse'] = 'ቻቱን ጠቅላ';
$string['chat:mic'] = 'ጥያቄዎን ይናገሩ';
$string['chat:mic_error'] = 'የማይክሮፎን ስህተት። እባክዎ የአሳሺዎን ፈቃዶች ያረጋግጡ።';
$string['chat:mic_unsupported'] = 'በዚህ አሳሺ ውስጥ የድምፅ ግቤት አይደገፍም።';
$string['chat:newline_hint'] = 'ለአዲስ መስመር Shift+Enter';
$string['chat:you'] = 'እርስዎ';
$string['chat:assistant'] = 'AI አስተማሪ';
$string['chat:history_loaded'] = 'ቀዳሚ ውይይት ተጭኗል።';
$string['chat:history_cleared'] = 'የቻት ታሪክ ጸድቷል።';
$string['chat:offtopic_warning'] = 'ጥያቄዎ ከዚህ ኮርስ ጋር ያልተያያዘ ይመስላል። ተሻሽያለሁ ይበሉ ርዕሰ ጉዳዩን ለመቆየት ይሞክሩ!';
$string['chat:offtopic_ended'] = 'ውይይቱ ብዙ ጊዜ ከርዕሰ ጉዳዩ ስለወጣ፣ ለ{$a} ደቂቃዎች የAI አስተማሪ ተደራሽነትዎ ለጊዜው ታግዷል። ይህን ጊዜ የኮርስ ቁሳቁሶቹን ለመከለሱ ይጠቀሙ፣ ቆይተው እንደገና ይሞክሩ።';
$string['chat:offtopic_locked'] = 'የAI አስተማሪ ተደራሽነትዎ ለጊዜው ታግዷል። በ{$a} ደቂቃዎች ውስጥ እንደገና መሞከር ይችላሉ። ሲመለሱ ከኮርሱ ጋር የተያያዙ ጥያቄዎች ላይ ያተኩሩ።';
$string['chat:escalated_to_support'] = 'ጥያቄዎን ሙሉ ለሙሉ መመለስ ስላልቻልኩ፣ ለእርስዎ የድጋፍ ቲኬት ፈጥሬያለሁ። የድጋፍ ቡድን አባል ይከታተልዎታል። የቲኬት ቁጥርዎ፦ {$a}';
$string['chat:studyplan_intro'] = 'ለዚህ ኮርስ የጥናት እቅድ ለመፍጠር ልረዳዎ እችላለሁ! ለጥናት በሳምንት ስንት ሰዓት ማዋል እንደሚችሉ ይንገሩኝ፣ እና መዋቅር ያለው እቅድ ለመገንባት ልረዳዎ።';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'ተደጋጋሚ ጥያቄዎች እና ድጋፍ';
$string['settings:faq_heading_desc'] = 'የተማከለ FAQ እና የZendesk ድጋፍ ቲኬት ውህደትን ያዋቅሩ።';
$string['settings:faq_content'] = 'የFAQ ይዘት';
$string['settings:faq_content_desc'] = 'የFAQ ግቤቶችን ያስገቡ (በቅርጸቱ አንድ በአንድ መስመር፦ Q: ጥያቄ | A: መልስ)። AI ለተለመዱ የድጋፍ ጥያቄዎች ለመመለስ ይሰጠዋል።';
$string['settings:zendesk_enabled'] = 'የZendesk ማባባስን አንቃ';
$string['settings:zendesk_enabled_desc'] = 'AI የድጋፍ ጥያቄን መፍታት ሲሳነው፣ ከውይይቱ ማጠቃለያ ጋር ዜንዴስክ ቲኬት ራሱ ፍጠር።';
$string['settings:zendesk_subdomain'] = 'የZendesk ንዑስ ዶሜይን';
$string['settings:zendesk_subdomain_desc'] = 'የZendesk ንዑስ ዶሜይን (ምሳሌ፦ mycompany.zendesk.com ለ "mycompany")።';
$string['settings:zendesk_email'] = 'የZendesk API ኢሜይል';
$string['settings:zendesk_email_desc'] = 'ለAPI ማረጋገጫ የZendesk ተጠቃሚ ኢሜይል አድራሻ (/token ቅጥያ ጋር)።';
$string['settings:zendesk_token'] = 'የZendesk API ቶከን';
$string['settings:zendesk_token_desc'] = 'ለZendesk ማረጋገጫ API ቶከን።';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'ከርዕሰ ጉዳይ ውጪ ማወቅ';
$string['settings:offtopic_heading_desc'] = 'ቻቱ ከርዕሰ ጉዳይ ውጪ ውይይቶችን እንዴት እንደሚቆጣጠር ያዋቅሩ።';
$string['settings:offtopic_enabled'] = 'ከርዕሰ ጉዳይ ውጪ ማወቅን አንቃ';
$string['settings:offtopic_enabled_desc'] = 'AI ከርዕሰ ጉዳይ ውጪ ውይይቶችን ለማወቅ እና ለማዘዋወር ያነቃቁ።';
$string['settings:offtopic_max'] = 'ከፍተኛ ከርዕሰ ጉዳይ ውጪ መልዕክቶች';
$string['settings:offtopic_max_desc'] = 'እርምጃ ከመውሰድ በፊት ተከታታይ ከርዕሰ ጉዳይ ውጪ መልዕክቶች ቁጥር።';
$string['settings:offtopic_action'] = 'ከርዕሰ ጉዳይ ውጪ እርምጃ';
$string['settings:offtopic_action_desc'] = 'ከርዕሰ ጉዳይ ውጪ ገደቡ ሲደረስ ምን ማድረግ?';
$string['settings:offtopic_action_warn'] = 'አስጠነቅቅ እና ወደ ርዕሰ ጉዳዩ መልስ';
$string['settings:offtopic_action_end'] = 'ተደራሽነትን ለጊዜው ዝጋ';
$string['settings:offtopic_lockout_duration'] = 'የዝጋት ጊዜ (ደቂቃዎች)';
$string['settings:offtopic_lockout_duration_desc'] = 'ተማሪው ከርዕሰ ጉዳይ ውጪ ገደቡን ካለፈ በኋላ ለAI አስተማሪ ተደራሽነቱን የሚያጣበት ጊዜ (በደቂቃዎች)። ነባሪ፦ 30 ደቂቃዎች።';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'የጥናት እቅድ እና ማስታወሻዎች';
$string['settings:studyplan_heading_desc'] = 'የጥናት ዕቅድ ባህሪያት እና የማስታወሻ ማሳወቂያዎችን ያዋቅሩ።';
$string['settings:studyplan_enabled'] = 'የጥናት ዕቅድ አንቃ';
$string['settings:studyplan_enabled_desc'] = 'AI አስተማሪው ተማሪዎችን በተገኘው ጊዜ ላይ ተመስርቶ ግላዊ የጥናት ዕቅዶችን ለመፍጠር ይረዳቸው።';
$string['settings:reminders_email_enabled'] = 'የኢሜይል ማስታወሻዎችን አንቃ';
$string['settings:reminders_email_enabled_desc'] = 'ተማሪዎች በኢሜይል የጥናት ማስታወሻዎችን ለማቀናበር እንዲፈቀዳቸው።';
$string['settings:reminders_whatsapp_enabled'] = 'የWhatsApp ማስታወሻዎችን አንቃ';
$string['settings:reminders_whatsapp_enabled_desc'] = 'ተማሪዎች በWhatsApp የጥናት ማስታወሻዎችን ለማቀናበር እንዲፈቀዳቸው (የWhatsApp API ውቅር ያስፈልጋል)።';
$string['settings:whatsapp_api_url'] = 'የWhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'ለWhatsApp መልዕክቶች ለመላክ API endpoint (ምሳሌ፦ Twilio, MessageBird)። "to"፣ "from" እና "body" መስኮችን የያዘ JSON body ያለው POST መቀበል አለበት።';
$string['settings:whatsapp_api_token'] = 'የWhatsApp API ቶከን';
$string['settings:whatsapp_api_token_desc'] = 'ለWhatsApp API ማረጋገጫ ቶከን።';
$string['settings:whatsapp_from_number'] = 'የWhatsApp ላኪ ቁጥር';
$string['settings:whatsapp_from_number_desc'] = 'የWhatsApp መልዕክቶችን ለመላክ ስልክ ቁጥር (የሀገር ኮድ ጋር፣ ምሳሌ፦ +14155238886)።';
$string['settings:whatsapp_blocked_countries'] = 'የWhatsApp የተዘጉ ሀገሮች';
$string['settings:whatsapp_blocked_countries_desc'] = 'አካባቢያዊ ደንቦች ምክንያት WhatsApp ማስታወሻዎች የማይፈቀዱ ISO 3166-1 alpha-2 ሀገር ኮዶች በነጠላ ሰረዝ ተለያይተው (ምሳሌ፦ "CN,IR,KP")።';

// Reminder messages.
$string['reminder:email_subject'] = 'የጥናት ማስታወሻ፦ {$a}';
$string['reminder:email_body'] = 'ሰላም {$a->firstname}፣

ይህ ለ"{$a->coursename}" ኮርስ ያለዎት የጥናት ማስታወሻዎ ነው።

{$a->message}

የጥናት ዕቅድዎ ለዚህ ኮርስ በሳምንት {$a->hours_per_week} ሰዓቶችን ይጠቁማል።

ጥሩ ስራ ይቀጥሉ!

---
እነዚህ ማስታወሻዎች ለማቆም፣ እዚህ ጠቅ ያድርጉ፦ {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'ለ{$a->coursename} የጥናት ማስታወሻ፦ {$a->message} (ምዝገባ ለመሰረዝ፦ {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'የዛሬ የጥናት ትኩረት፦ ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'ከጥናት ማስታወሻዎች ምዝገባ ሰርዝ';
$string['unsubscribe:success'] = 'ለዚህ ኮርስ ከጥናት ማስታወሻዎች ምዝገባ በተሳካ ሁኔታ ተሰርዟል።';
$string['unsubscribe:already'] = 'ከእነዚህ ማስታወሻዎች ምዝገባ ቀድሞ ተሰርዟል።';
$string['unsubscribe:invalid'] = 'ምዝገባ ለመሰረዝ ትስስሩ ትክክለኛ አይደለም ወይም ጊዜው አልፎታል።';
$string['unsubscribe:resubscribe'] = 'ሀሳቦ ተለወጠ? ማስታወሻዎቹን ዳግም ማንቃት ቻሉ በAI አስተማሪ ቻት።';

// Scheduled task.
$string['task:send_reminders'] = 'የAI አስተማሪ ጥናት ማስታወሻዎችን ላክ';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'የተማሪ ጥናት ዕቅዶችን ያከማቻል።';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ጥናት ዕቅዱን የሚያቀርበው ተጠቃሚ መለያ።';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'ጥናት ዕቅዱ የሚነካው ኮርስ።';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'ተማሪው ለጥናት ማቀድ ያለው ሳምንታዊ ሰዓቶች።';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'የጥናት ዕቅዱ ዝርዝሮች በJSON ቅርጸት።';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'የጥናት ማስታወሻ ምርጫዎች እና ምዝገባዎችን ያከማቻል።';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ለማስታወሻዎቹ የተመዘገበው ተጠቃሚ መለያ።';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'የማስታወሻ ቻናል (ኢሜይል ወይም whatsapp)።';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'ለማስታወሻዎቹ ኢሜይል አድራሻ ወይም ስልክ ቁጥር።';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'ለደንብ ማክበር የተጠቃሚ ሀገር ኮድ።';

// Analytics dashboard.
$string['analytics:title'] = 'የAI አስተማሪ ትንተና';
$string['analytics:overview'] = 'አጠቃላይ እይታ';
$string['analytics:total_conversations'] = 'ጠቅላላ ውይይቶች';
$string['analytics:total_messages'] = 'ጠቅላላ መልዕክቶች';
$string['analytics:active_students'] = 'ንቁ ተማሪዎች';
$string['analytics:avg_messages_per_student'] = 'ለእያንዳንዱ ተማሪ አማካይ መልዕክቶች';
$string['analytics:offtopic_rate'] = 'ከርዕሰ ጉዳይ ውጪ መጠን';
$string['analytics:escalation_count'] = 'ወደ ድጋፍ ተዘምቷል';
$string['analytics:studyplan_adoption'] = 'ጥናት ዕቅድ ያላቸው ተማሪዎች';
$string['analytics:usage_trends'] = 'የአጠቃቀም አዝማሚያዎች';
$string['analytics:daily_messages'] = 'ዕለታዊ የመልዕክት ብዛት';
$string['analytics:hotspots'] = 'የኮርስ ሙቅ ቦታዎች';
$string['analytics:hotspots_desc'] = 'በተማሪ ጥያቄዎች ውስጥ ብዙ ጊዜ የሚጠቀሱ የኮርስ ክፍሎች። ከፍ ያሉ ቆጠራዎች ተማሪዎች ተጨማሪ ድጋፍ የሚፈልጉባቸው ቦታዎችን ሊጠቁሙ ይችላሉ።';
$string['analytics:section'] = 'ክፍል';
$string['analytics:mention_count'] = 'ጠቀሳዎች';
$string['analytics:common_prompts'] = 'የተለመዱ ፕሮምት ቅጦች';
$string['analytics:common_prompts_desc'] = 'ከተማሪዎች ተደጋጋሚ የጥያቄ ቅጦች። በኮርስ ይዘት ውስጥ ሥርዓታዊ ክፍተቶችን ለመለየት ይፈትሹ።';
$string['analytics:prompt_pattern'] = 'ቅጥ';
$string['analytics:frequency'] = 'ተደጋጋሚነት';
$string['analytics:recent_activity'] = 'የቅርብ ጊዜ እንቅስቃሴ';
$string['analytics:no_data'] = 'ገና ምንም ትንተና ዳታ የለም። ተማሪዎች AI አስተማሪውን መጠቀም ሲጀምሩ ዳታ ይታያል።';
$string['analytics:timerange'] = 'የጊዜ ክልል';
$string['analytics:last_7_days'] = 'ያለፉት 7 ቀናት';
$string['analytics:last_30_days'] = 'ያለፉት 30 ቀናት';
$string['analytics:all_time'] = 'ሁሉም ጊዜ';
$string['analytics:export'] = 'ዳታ ወደ ውጪ ላክ';
$string['analytics:provider_comparison'] = 'የAI አቅራቢ ንጽጽር';
$string['analytics:provider_comparison_desc'] = 'በዚህ ኮርስ ውስጥ ጥቅም ላይ የዋሉ AI አቅራቢዎች አፈፃፀም ያወዳድሩ።';
$string['analytics:provider'] = 'አቅራቢ';
$string['analytics:response_count'] = 'ምላሾች';
$string['analytics:avg_response_length'] = 'አማካይ የምላሽ ርዝመት';
$string['analytics:total_tokens'] = 'ጠቅላላ ቶከኖች';
$string['analytics:avg_tokens'] = 'አማካይ ቶከኖች / ምላሽ';

// User settings.
$string['usersettings:title'] = 'የAI ኮርስ ረዳት - ዳታዎ';
$string['usersettings:intro'] = 'የAI አስተማሪ ቻት ዳታዎን እና የግላዊነት ቅንብሮችን ያስተዳድሩ';
$string['usersettings:privacy_info'] = 'ከAI አስተማሪ ጋር ያደረጓቸው ውይይቶች ኮርሱ ሙሉ ለሙሉ ቀጣይ ድጋፍ ለመስጠት ይቀመጣሉ። ይህን ዳታ ሙሉ ቁጥጥር አለዎት እና ማንኛውም ጊዜ ሊሰርዙት ይችላሉ።';
$string['usersettings:usage_stats'] = 'የእርስዎ አጠቃቀም ስታቲስቲክስ';
$string['usersettings:total_messages'] = 'ጠቅላላ መልዕክቶች';
$string['usersettings:total_conversations'] = 'ውይይቶች';
$string['usersettings:messages'] = 'መልዕክቶች';
$string['usersettings:last_activity'] = 'የመጨረሻ እንቅስቃሴ';
$string['usersettings:delete_course_data'] = 'የኮርስ ዳታ ሰርዝ';
$string['usersettings:no_data'] = 'ገና AI አስተማሪን አልተጠቀሙም። የአጠቃቀም ዳታዎ ቻት ሲጀምሩ እዚህ ይታያል።';
$string['usersettings:delete_all_title'] = 'ሁሉንም ዳታዎ ሰርዝ';
$string['usersettings:delete_all_warning'] = 'ይህ በሁሉም ኮርሶች ውስጥ ያሉ ሁሉንም የAI አስተማሪ ውይይቶችዎን ዘላቂ ሆኖ ይሰርዛል። ይህ እርምጃ ሊቀለበስ አይችልም።';
$string['usersettings:delete_all_button'] = 'ሁሉንም ዳታዬን ሰርዝ';
$string['usersettings:confirm_delete_course'] = 'ለ"{$a}" ኮርስ ያሉ ሁሉንም AI አስተማሪ ዳታዎን ዘላቂ ሆኖ ለመሰረዝ እርግጠኛ ናቸው? ይህ እርምጃ ሊቀለበስ አይችልም።';
$string['usersettings:confirm_delete_all'] = 'በሁሉም ኮርሶች ውስጥ ያሉ ሁሉንም AI አስተማሪ ዳታዎን ዘላቂ ሆኖ ለመሰረዝ እርግጠኛ ናቸው? ይህ እርምጃ ሊቀለበስ አይችልም።';
$string['usersettings:data_deleted'] = 'ዳታዎ ተሰርዟል።';

// === SOLA v1.0.12 — new features translation ===
$string['chat:greeting'] = 'ሰላም፣ {$a}! እኔ SOLA ነኝ፣ የሳይለር ኦንላይን ትምህርት ረዳትዎ።';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA ክፈት';
$string['chat:change_avatar'] = 'አቫታር ቀይር';

// Quiz UI.
$string['chat:quiz'] = 'የልምምድ ፈተና ውሰድ';
$string['chat:quiz_setup_title'] = 'የልምምድ ፈተና';
$string['chat:quiz_questions'] = 'የጥያቄዎች ቁጥር';
$string['chat:quiz_topic'] = 'ርዕስ';
$string['chat:quiz_topic_guided'] = 'AI-መሪ (በእድገትዎ ላይ ተመስርቶ)';
$string['chat:quiz_topic_default'] = 'የአሁኑ ኮርስ ይዘት';
$string['chat:quiz_topic_custom'] = 'ብጁ ርዕስ…';
$string['chat:quiz_custom_placeholder'] = 'ርዕስ ወይም ጥያቄ ያስገቡ...';
$string['chat:quiz_start'] = 'ፈተናውን ጀምር';
$string['chat:quiz_cancel'] = 'ሰርዝ';
$string['chat:quiz_loading'] = 'ፈተና እየተዘጋጀ ነው…';
$string['chat:quiz_error'] = 'ፈተና ማዘጋጀት አልተሳካም። እባክዎ እንደገና ይሞክሩ።';
$string['chat:quiz_correct'] = 'ትክክል!';
$string['chat:quiz_wrong'] = 'ስህተት።';
$string['chat:quiz_next'] = 'ቀጣይ ጥያቄ';
$string['chat:quiz_finish'] = 'ውጤቶቹን ይመልከቱ';
$string['chat:quiz_score'] = 'ፈተናው ተጠናቋል! ከ{$a->total} ውስጥ {$a->score} አስመዘገቡ።';
$string['chat:quiz_summary'] = 'ለ"{$a->topic}" {$a->total} ጥያቄ ያለው የልምምድ ፈተና ወሰድኩ እና {$a->score}/{$a->total} አስመዘገብኩ።';
$string['chat:quiz_topic_objectives'] = 'የትምህርት ዓላማዎች';
$string['chat:quiz_topic_modules'] = 'የኮርስ ርዕስ';
$string['chat:quiz_subtopic_select'] = 'ልዩ ንጥል ይምረጡ…';
$string['chat:quiz_topic_sections'] = 'የኮርስ ክፍሎች';
$string['chat:quiz_score_great'] = 'ሥራዎ ድንቅ ነው! ቁሳቁሱን ጠንቅቀው ያውቁታል።';
$string['chat:quiz_score_good'] = 'ጥሩ ጥረት! ግንዛቤዎን ለማጠናከር መከለሱን ይቀጥሉ።';
$string['chat:quiz_score_practice'] = 'መለማመዱን ይቀጥሉ — የሚመለከተውን ኮርስ ቁሳቁስ ይከልሱ ቆይተው ፈተናውን እንደገና ይሞክሩ።';
$string['chat:quiz_review_heading'] = 'ክለሳ';
$string['chat:quiz_retake'] = 'ፈተናውን ደግሞ ውሰድ';
$string['chat:quiz_exit'] = 'ፈተናውን ውጣ';
$string['chat:quiz_your_answer'] = 'የእርስዎ መልስ';
$string['chat:quiz_correct_answer'] = 'ትክክለኛ መልስ';

// Conversation starters.
$string['chat:starters_label'] = 'ውይይት ጀማሪዎች';
$string['chat:starter_quiz'] = 'ፈትናኝ';
$string['chat:starter_explain'] = 'ይህን አብራሩ';
$string['chat:starter_key_concepts'] = 'ቁልፍ ፅንሰ-ሐሳቦች';
$string['chat:starter_study_plan'] = 'የጥናት እቅድ';
$string['chat:starter_help_me'] = 'AI እርዳታ';
$string['chat:starter_ell_practice'] = 'ተናገር ለማዘጋጀት';
$string['chat:starter_ell_pronunciation'] = 'ELL አጠራር';
$string['chat:starter_ai_coach'] = 'AI አሰልጣኝ';
$string['chat:starter_speak'] = 'ጀማሪ ተናገር';

// Reset / home.
$string['chat:reset'] = 'ዳግም ጀምር';

// Topic picker.
$string['chat:topic_picker_title'] = 'ምን ላይ ማተኮር ይፈልጋሉ?';
$string['chat:topic_picker_title_help'] = 'ምን ዓይነት እርዳታ ይፈልጋሉ?';
$string['chat:topic_picker_title_explain'] = 'ምን ይብራራልዎ?';
$string['chat:topic_picker_title_study'] = 'ምን ዓይነት ርዕስ ላይ ማተኮር ይፈልጋሉ?';
$string['chat:topic_start'] = 'ቀጥል';

// Expand states.
$string['chat:fullscreen'] = 'ሙሉ ማያ';
$string['chat:exitfullscreen'] = 'ሙሉ ማያ ውጣ';

// Settings panel.
$string['chat:language'] = 'ቋንቋ ቀይር';
$string['chat:settings_panel'] = 'ቅንብሮች';
$string['chat:settings_language'] = 'ቋንቋ';
$string['chat:settings_avatar'] = 'አቫታር';
$string['chat:settings_voice'] = 'ድምፅ';
$string['chat:settings_voice_admin'] = 'የድምፅ ቅንብሮች በጣቢያ አስተዳዳሪ ፓነል ውስጥ ይተዳደራሉ።';

// Voice mode.
$string['chat:voice_mode'] = 'የድምፅ ሁናቴ';
$string['chat:voice_end'] = 'የድምፅ ክፍለ ጊዜ ጨርስ';
$string['chat:voice_connecting'] = 'እየተገናኘ ነው...';
$string['chat:voice_listening'] = 'እያዳመጠ ነው...';
$string['chat:voice_speaking'] = 'SOLA እየናገረ ነው...';
$string['chat:voice_idle'] = 'ዝግጁ';
$string['chat:voice_error'] = 'የድምፅ ግንኙነት አልተሳካም። ቅንብሮችዎን ይፈትሹ።';
$string['chat:quiz_locked'] = 'ሳይለር SOLA ፈተና ወቅት ተቋርጧል። ጥሩ እድል!';
