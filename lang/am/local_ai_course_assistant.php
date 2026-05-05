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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'የAI ኮርስ ረዳት';
$string['attachment:attach'] = 'አያይዝ';
$string['attachment:attach_image_or_pdf'] = 'ምስል ወይም PDF አያይዝ';
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
$string['settings:default_course_mode'] = 'ለአዲስ ኮርሶች ነባሪ';
$string['settings:default_course_mode_desc'] = 'ለአንድ ኮርስ የተለየ ምርጫ ባልተደረገ ጊዜ SOLA በኮርሱ ላይ መታየት አለመታየቱን ይቆጣጠራል። አዳዲስ ጭነቶች በነባሪ ወደ "በነባሪ ተከለካይ" ይገቡታል፤ አስተዳዳሪዎች ከAnalytics ገጽ ወይም ከCourse AI Settings ገጽ ኮርስ-በ-ኮርስ ማንቃት ይችላሉ።';
$string['settings:default_course_mode_per_course'] = 'በነባሪ ተከለካይ (በእያንዳንዱ ኮርስ ያንቁ)';
$string['settings:default_course_mode_all'] = 'በሁሉም ኮርሶች ላይ የነቃ';
$string['settings:auto_open'] = 'በመጀመሪያ ጉብኝት በራስ-ሰር ክፈት';
$string['settings:auto_open_desc'] = 'ሲነቃ፣ የSOLA መሳቢያ ተማሪ ለእያንዳንዱ ኮርስ ለመጀመሪያ ጊዜ ሲያርፍ በራስ-ሰር ይከፈታል። በተመሳሳይ ኮርስ ውስጥ የቀጣይ ገጽ ጭነቶች መሳቢያውን አያስከፍቱም — ሁኔታው በተማሪው አሳሽ ውስጥ በlocalStorage በኮርስ ይከታተላል። በዴስክቶፕ እና በሞባይል ይተገበራል። በCourse AI Settings ገጽ በኩል በእያንዳንዱ ኮርስ ሊሻር ይችላል።';
$string['settings:comparison_providers'] = 'የንጽጽር አቅራቢዎች (LLM መራጭ)';
$string['settings:comparison_providers_desc'] = 'ተጨማሪ AI አቅራቢዎችን ወደ ምግብር ውስጥ ያለው LLM መራጭ ያክሉ ስለዚህ አስተዳዳሪዎች ከአቅራቢዎች ጋር ምላሾችን ማወዳደር ይችላሉ። ረድፎችን ለመጨመር ከዚህ በታች ያለውን ሠንጠረዥ ይጠቀሙ። የሙቀት አምድ አማራጭ ነው (አለምን ዓለም አቀፍ ሙቀት ለመጠቀም ባዶ ይተው)። የተከማቸ ቅርጸት፡ provider_id|api_key|model1,model2|temperature። ከላይ የተዋቀረው ዋናው አቅራቢ ሁልጊዜ በራስ-ሰር ይካተታል። የማስተዳደር ችሎታ ያላቸው አስተዳዳሪዎች ብቻ መራጩን ያያሉ፤ ተማሪዎች በጭራሽ አያዩትም። ትክክለኛ provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'ነባሪ የAI አቅራቢ';
$string['settings:provider_desc'] = 'ለውይይት ማጠናቀቂያዎች የሚጠቀሙበትን AI አቅራቢ ይምረጡ። ጥያቄዎችን በMoodle የውስጥ AI ውቅር በSite admin > AI በኩል ለመምራት "Moodle AI (core_ai subsystem)" ይምረጡ፤ ከዚያ ሁነታ ውስጥ ከታች ያሉት የAPI ቁልፍ፣ ሞዴል እና መሠረታዊ URL መስኮች ይችላሉ። Streaming, tool use, እና prompt caching በcore_ai በኩል አይገኙም — ምላሾች እንደ አንድ ቁራጭ ይቀርባሉ። ለተሻለ የተማሪ ልምድ ቀጥተኛ አቅራቢ ይጠቀሙ።';
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
$string['settings:avatar_saylor'] = 'የ{$a} አርማ (ነባሪ)';
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
$string['coursesettings:sola_enabled'] = 'SOLA በዚህ ኮርስ ላይ';
$string['coursesettings:sola_enabled_toggle'] = 'በዚህ ኮርስ ላይ የSOLA መሣሪያን አሳይ';
$string['coursesettings:sola_enabled_desc'] = 'የSOLA ውይይት መሣሪያ በዚህ ኮርስ ላይ እንደሚታይ ይቆጣጠራል። የጣቢያ-ሰፊ ነባሪ በፕላግኢን ቅንብሮች ውስጥ በGeneral > Default for new courses ስር ይዘጋጃል።';
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
$string['chat:clear'] = 'ስክሪኑን አጽዳ';
$string['chat:clear_confirm'] = 'የሚታዩትን መልዕክቶች ማጽዳት? ሙሉ የቻት ታሪክዎ ተቀምጦ ይቆያል እና ዊጀቱን በድጋሚ በመክፈት መጫን ይቻላል።';
$string['chat:copy'] = 'ውይይቱን ቅዳ';
$string['chat:copied'] = 'ውይይቱ ወደ ቅጥፌ ቦርድ ተቀድቷል';
$string['chat:copy_failed'] = 'ውይይቱን መቅዳት አልተሳካም';
$string['chat:thinking'] = 'በማሰብ ላይ...';
$string['chat:error'] = 'ይቅርታ፣ ስህተት ተፈጥሯል። እባክዎ እንደገና ይሞክሩ።';
$string['chat:error_auth'] = 'የማረጋገጫ ስህተት። እባክዎ አስተዳዳሪዎን ያነጋግሩ።';
$string['chat:error_ratelimit'] = 'ጥያቄዎች ብዙ ናቸው። እባክዎ ትንሽ ይጠብቁ እና እንደገና ይሞክሩ።';
$string['chat:error_unavailable'] = 'የAI አገልግሎቱ ለጊዜው አይገኝም። እባክዎ ቆይተው እንደገና ይሞክሩ።';
$string['chat:error_notconfigured'] = 'AI አስተማሪው ገና አልተዋቀረም። እባክዎ አስተዳዳሪዎን ያነጋግሩ።';
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
$string['reminder:email_body_no_hours'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['reminder:email_body_with_prefs'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Your study plan: {$a->hours_per_week} hours per week, on {$a->preferred_days} ({$a->preferred_time}).

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['studytip:pomodoro']            = 'Try the Pomodoro technique: 25 minutes of focused study, then a 5-minute break.';
$string['studytip:review_notes']        = 'Review your notes from the last session before starting new material.';
$string['studytip:active_recall']       = 'Test yourself on what you learned recently — active recall strengthens memory.';
$string['studytip:summarise']           = 'Take a few minutes to summarise what you have learned in your own words.';
$string['studytip:mix_modes']           = 'Mix different types of study: reading, practice problems, and teaching concepts to others.';
$string['studytip:tackle_hard_first']   = 'Start with the most challenging topic while your energy is highest.';
$string['studytip:connect_concepts']    = 'Create connections between new concepts and what you already know.';
$string['studytip:short_breaks']        = 'Take short breaks to stay focused — a refreshed mind learns better.';
$string['studyplan:hours_out_of_range'] = 'Hours per week must be between {$a->min} and {$a->max}. Got {$a->got}. Please tell SOLA a different number and it will save your plan.';
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
$string['chat:greeting'] = 'ሰላም፣ {$a}! እኔ SOLA ነኝ። ዛሬ እንዴት ልርዳዎ?';
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
$string['chat:quiz_topic_adaptive']      = 'ተለዋዋጭ — በደካማ ክፍሎቼ ላይ አተኩር';
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
$string['chat:starter_quiz'] = 'በዚህ ፈትናኝ';
$string['chat:starter_explain'] = 'ይህን አብራሩ';
$string['chat:starter_key_concepts'] = 'ቁልፍ ፅንሰ-ሐሳቦች';
$string['chat:starter_study_plan'] = 'የጥናት እቅድ';
$string['chat:starter_help_me'] = 'AI እርዳታ';
$string['chat:starter_ai_project_coach'] = 'የ AI ፕሮጀክት አሰልጣኝ';
$string['chat:starter_ell_practice'] = 'የውይይት ልምምድ';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'ማስታወሻዎች';

// History panel.
$string['chat:history_title'] = 'ማስታወሻዎች እና የውይይት ታሪክ';
$string['task:send_inactivity_reminders'] = 'ሳምንታዊ የእንቅስቃሴ-አልባ ማስታወሻ ኢሜይሎችን ላክ';
$string['messageprovider:study_notes'] = 'የጥናት ክፍለ ጊዜ ማስታወሻዎች';
$string['task:send_inactivity_reminders'] = 'ሳምንታዊ የእንቅስቃሴ ማስታወሻ ኢሜይሎችን ላክ';
$string['task:run_meta_ai_query'] = 'የታቀደውን የመማሪያ ራዳር ትንታኔ ጥያቄ አስኪድ';
$string['messageprovider:study_notes'] = 'የጥናት ክፍለ ጊዜ ማስታወሻዎች';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / የፊት-ገጽ ማቅረቢያ';
$string['settings:cdn_heading_desc'] = 'የ SOLA ፊት-ገጽ ንብረቶችን (JS/CSS) ከ Moodle ፋይል ስርዓት ይልቅ ከውጭ CDN ያቅርቡ። ይህ ያለ ተሰኪ ማሻሻያ የፊት-ገጽ ዝመናዎችን ያስችላል። CDN URL ባዶ ተዉት የአካባቢ ተሰኪ ፋይሎችን ለመጠቀም።';
$string['settings:cdn_url'] = 'CDN መሠረታዊ URL';
$string['settings:cdn_url_desc'] = 'sola.min.js እና sola.min.css የሚስተናገዱበት መሠረታዊ URL። ምሳሌ: https://your-org.github.io/sola-cdn። የአካባቢ ተሰኪ ፋይሎችን ለመጠቀም ባዶ ይተዉት።';
$string['settings:cdn_version'] = 'CDN ንብረት ስሪት';
$string['settings:cdn_version_desc'] = 'ለ cache busting ወደ CDN URLs የሚጨመር የስሪት ሕብረቁምፊ። ከእያንዳንዱ CDN ማሰማራት በኋላ ያዘምኑ (ለምሳሌ 3.2.4 ወይም የ commit hash)።';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'አጠቃላይ አጠቃቀም';
$string['analytics:tab_bycourse'] = 'በኮርስ';
$string['analytics:tab_comparison'] = 'AI vs ያልተጠቃሚዎች';
$string['analytics:tab_byunit'] = 'በክፍል';
$string['analytics:tab_usagetypes'] = 'የአጠቃቀም ዓይነቶች';
$string['analytics:tab_themes'] = 'ርዕሰ ጉዳዮች';
$string['analytics:tab_feedback'] = 'AI ግብረመልስ';
$string['analytics:total_students'] = 'ጠቅላላ ተማሪዎች';
$string['analytics:active_users'] = 'ንቁ AI ተጠቃሚዎች';
$string['analytics:msgs_per_student'] = 'በተማሪ መልዕክቶች';
$string['analytics:avg_session'] = 'አማካይ የክፍለ ጊዜ ርዝመት';
$string['analytics:return_rate'] = 'የመመለሻ መጠን';
$string['analytics:total_sessions'] = 'ጠቅላላ ክፍለ ጊዜዎች';
$string['analytics:thumbs_up'] = 'አውራ ጣት ወደ ላይ';
$string['analytics:thumbs_down'] = 'አውራ ጣት ወደ ታች';
$string['analytics:hallucination_flags'] = 'የስህተት ምልክቶች';
$string['analytics:msgs_to_resolution'] = 'ለመፍትሄ የሚያስፈልጉ መልዕክቶች';
$string['analytics:helpful'] = 'ጠቃሚ';
$string['analytics:not_helpful'] = 'ጠቃሚ አይደለም';
$string['analytics:flag_hallucination'] = 'ይህ ምላሽ ትክክል ያልሆነ መረጃ ይዟል';
$string['analytics:submit_rating'] = 'አስገባ';
$string['analytics:thanks_feedback'] = 'ስለ ግብረመልስዎ እናመሰግናለን';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_together'] = 'Together AI (Llama 3.1 8B/70B/405B Turbo, Mistral, Qwen)';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'ይህን ገጽ አብራራ';
$string['chat:starter_ask_anything'] = 'ማንኛውንም ጠይቅ';
$string['chat:starter_review_practice'] = 'ክለሳ እና ልምምድ';
$string['chat:history_saved_subtitle'] = 'የተቀመጡ ምላሾች ለዚህ ኮርስ በዚህ መሣሪያ ላይ ይቆያሉ።';
$string['chat:history_saved_empty'] = 'የAI ምላሽን እዚህ ለማየት ያስቀምጡ።';
$string['chat:history_views_label'] = 'የታሪክ እይታዎች';
$string['chat:history_view_saved'] = 'የተቀመጡ';
$string['chat:history_view_recent'] = 'ታሪክ';
$string['chat:debug_refresh'] = 'አድስ';
$string['chat:debug_copy_all'] = 'ሁሉንም ቅዳ';
$string['chat:debug_close'] = 'ዝጋ';
$string['chat:language_switch'] = 'ቋንቋ ቀይር';
$string['chat:language_dismiss'] = 'የቋንቋ ጥቆማን አሰናብት';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'የLLM አቅራቢ ይምረጡ';
$string['chat:llm_model_label'] = 'ሞዴል';
$string['chat:llm_model_select'] = 'የLLM ሞዴል ይምረጡ';
$string['chat:footer_usertesting'] = 'የተጠቃሚ ሙከራ';
$string['chat:footer_feedback'] = 'አስተያየት';
$string['chat:voice_panel_title']       = 'Talk with {$a}';

// Additional translated strings.
$string['chat:debug_context'] = 'የአውድ ማረም';
$string['chat:debug_context_browser'] = 'የአሳሽ ቅጽበት';
$string['chat:debug_context_copy'] = 'ቅዳ';
$string['chat:debug_context_prompt'] = 'የአገልጋይ ምላሽ';
$string['chat:debug_context_request'] = 'የመጨረሻ SSE ጥያቄ';
$string['chat:debug_context_toggle'] = 'ቀያይር';
$string['chat:history_empty'] = 'ውይይቶች የሉም።';
$string['chat:history_refresh'] = 'አድስ';
$string['chat:history_subtitle'] = 'የቅርብ ጊዜ መልዕክቶችዎ።';
$string['chat:starter_explain_prompt'] = 'በጣም አስፈላጊ ጽንሰ-ሀሳብ ያብራሩ?';
$string['chat:starter_help_lesson'] = 'ይህን ግለጹ';
$string['chat:starter_help_lesson_prompt'] = 'ትምህርቱን ለመረዳት እርዱኝ። ቁልፍ ጽንሰ-ሀሳቦችን ጠቅለል አድርጉ።';
$string['chat:starter_prompt_coach'] = 'AI ፕሮምፕት አሰልጣኝ';
$string['chat:starter_quick_study'] = 'ፈጣን ጥናት';
$string['chat:starter_study_plan_prompt'] = 'የጥናት ክፍለ ጊዜ ማቀድ እፈልጋለሁ። (1) ዛሬ ምን ማሳካት እፈልጋለሁ (2) ምን ያህል ጊዜ ብለው ይጠይቁኝ። ዕቅድ ካለ ያዘምኑ።';
$string['chat:voice_copy'] = 'ከመማሪያ ረዳት ጋር ውይይት ያድርጉ።';
$string['chat:voice_ready'] = 'ዝግጁ';
$string['chat:voice_start'] = 'ውይይት ጀምር';
$string['chat:voice_title'] = 'ከSOLA ጋር ያውሩ';
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

// v5.2.0: per-quiz SOLA assistance level controls.
$string['quizsettings:title'] = 'Quiz Assistance Levels';
$string['quizsettings:desc'] = 'Choose how much help SOLA gives on each quiz. "Default" uses the legacy rule: ungraded quizzes get full help, graded quizzes hide the widget. Use "Coach" to keep SOLA available on a graded quiz but block direct answers.';
$string['quizsettings:colquiz'] = 'Quiz';
$string['quizsettings:colgrade'] = 'Max grade';
$string['quizsettings:collevel'] = 'Assistance level';
$string['quizsettings:coleffective'] = 'Effective';
$string['quizsettings:level_default'] = 'Default (by grade)';
$string['quizsettings:level_full'] = 'Full help';
$string['quizsettings:level_coach'] = 'Coach (Socratic only)';
$string['quizsettings:level_hidden'] = 'Hidden';
$string['quizsettings:ungraded'] = 'Ungraded';
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
$string['mobile_chip_concepts'] = 'ቁልፍ ጽንሰ-ሀሳቦች';
$string['mobile_chip_quiz'] = 'ፈትነኝ';
$string['mobile_chip_studyplan'] = 'የጥናት ዕቅድ';
$string['mobile_clear'] = 'ታሪክ አጽዳ';
$string['mobile_disabled'] = 'SOLA ለዚህ ኮርስ አይገኝም።';
$string['mobile_placeholder'] = 'ጥያቄ ይጠይቁ...';
$string['mobile_welcome'] = 'ሰላም, {$a}!';
$string['mobile_welcome_sub'] = 'እኔ SOLA ነኝ፣ የእርስዎ የመማሪያ ረዳት። ዛሬ እንዴት ልረዳዎ?';
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
$string['rubric:done'] = 'ተጠናቅቋል';
$string['rubric:encourage_high'] = 'በጣም ጥሩ! እንዲሁ ቀጥሉ!';
$string['rubric:encourage_low'] = 'ጥሩ ጅምር! መደበኛ ልምምድ ይረዳዎታል።';
$string['rubric:encourage_mid'] = 'ጥሩ ጥረት! ለማሻሻል መለማመዱን ቀጥሉ።';
$string['rubric:overall'] = 'ጠቅላላ';
$string['rubric:practice_again'] = 'እንደገና ተለማመዱ';
$string['rubric:score_title_conversation'] = 'የውይይት ልምምድ ነጥብ';
$string['rubric:score_title_pronunciation'] = 'የአነጋገር ልምምድ ነጥብ';
$string['rubric:scoring'] = 'ልምምድዎን በመገምገም ላይ...';
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
$string['demo:title'] = 'የሙከራ አካባቢ';
$string['demo:heading'] = 'የሙከራ አካባቢ';
$string['demo:intro'] = 'ይህ ገፅ <strong>ከተማሪዎች የተደበቀ</strong> (visible=0) የሙከራ ኮርስ ይፈጥራል እና በውሸት ተማሪዎች፣ በAI ውይይቶች፣ በደረጃዎች እና በግብረ መልሶች ይሞላል። Analytics Dashboardን ለመመልከት ወይም የፕላጊን ለውጦችን ለማረጋገጥ ጠቃሚ ነው—ምንም ትክክለኛ ተመዝጋቢ ተማሪ ሳይነካ።';
$string['demo:step1'] = 'ደረጃ 1: የሙከራ ኮርስ';
$string['demo:step2'] = 'ደረጃ 2: የውሸት ተማሪዎችን እና የAI ውይይቶችን አስገባ';
$string['demo:course_exists'] = 'የሙከራ ኮርስ አለ: <strong>{$a->fullname}</strong> (አጭር ስም <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'የተደበቀ';
$string['demo:badge_visible'] = 'ለተማሪዎች የሚታይ';
$string['demo:no_course'] = 'ምንም የሙከራ ኮርስ አልተገኘም። ለመፍጠር ከታች ጠቅ ያድርጉ።';
$string['demo:create_btn'] = 'የተደበቀ የሙከራ ኮርስ ፍጠር';
$string['demo:open_course'] = 'ኮርስ ክፈት &rarr;';
$string['demo:seed_intro'] = 'demo_student_001, demo_student_002, ... ይፈጥራል፣ በሙከራ ኮርሱ ውስጥ ያመዘግባቸዋል፣ ሰው ሰራሽ ውይይቶችን፣ መልዕክቶችን፣ ደረጃዎችን እና ግብረ መልሶችን ያስገባል። ተጨማሪ መረጃ ለመጨመር እንደገና ያሂዱ ወይም ከባዶ ለመጀመር "አስቀድመህ አጽዳ" ን ይምረጡ።';
$string['demo:users_label'] = 'ተጠቃሚዎች';
$string['demo:weeks_label'] = 'ሳምንታት';
$string['demo:clear_label'] = 'የነበሩትን demo_* ተጠቃሚዎች አስቀድመህ አጽዳ';
$string['demo:seed_btn'] = 'ተማሪዎችን እና ውይይቶችን አስገባ';
$string['demo:view_analytics'] = 'የዚህን ኮርስ Analytics ይመልከቱ &rarr;';
$string['demo:footer'] = 'እዚህ የተፈጠረው መረጃ በመደበኛ Moodle ተጠቃሚ / ምዝገባ ሠንጠረዦች እና በፕላጊኑ የራሱ የውይይት ሠንጠረዦች ውስጥ ይገኛል። የውሸት ተጠቃሚዎች በሙሉ <code>demo_student_</code> ቅጥያ የጀመሩ የተጠቃሚ ስሞች አሏቸው፣ ስለዚህ ለማጣራት ወይም ለማስወገድ ቀላል ናቸው። ለማስወገድ "የነበሩትን demo_* ተጠቃሚዎች አስቀድመህ አጽዳ" ን በመምረጥ የ seed ደረጃን እንደገና ያሂዱ።';
$string['demo:course_fullname'] = 'SOLA የሙከራ ኮርስ (የተደበቀ)';
$string['demo:notify_created'] = 'የሙከራ ኮርስ ዝግጁ ነው: {$a->fullname} (id {$a->id})።';
$string['demo:notify_create_fail'] = 'ኮርሱን መፍጠር አልተሳካም: {$a}';
$string['demo:notify_seeded'] = 'ተገባ: {$a->users} ተጠቃሚዎች, {$a->conversations} ውይይቶች, {$a->messages} መልዕክቶች, {$a->ratings} ደረጃዎች, {$a->feedback} ግብረ መልስ ግቤቶች።';
$string['demo:notify_seed_fail'] = 'መረጃ መስጠት አልተሳካም: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Token Cost &amp; Analytics &rarr;';
$string['toc:testing'] = 'የሙከራ አካባቢ &rarr;';
$string['toc:back_to_course'] = '&larr; ወደ {$a} ተመለስ';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext ፕሮግራም አልተገኘም፤ የPDF ማውጣት ተሰናክሏል።';
$string['rag:pdftotext_available'] = 'pdftotext በ{$a} ተገኝቷል።';
$string['rag:docx_unavailable'] = 'የPHP ZipArchive ማራዘሚያ የለም፤ የDOCX ማውጣት ተሰናክሏል።';
$string['rag:h5p_unavailable'] = 'የH5P ይዘት ማንበብ አልተቻለም፤ ተዘሏል።';
$string['rag:scorm_too_large'] = 'የSCORM ጥቅል ከተዋቀረው የመጠን ገደብ ያልፋል ({$a} MB)፤ ተዘሏል።';
$string['rag:scorm_unzip_failed'] = 'የSCORM ጥቅል መክፈት አልተቻለም፤ ተዘሏል።';
$string['rag:transcript_fetch_failed'] = 'ከ{$a} ጽሑፍ ማግኘት አልተቻለም።';
$string['rag:transcript_cf_challenge'] = 'የጽሑፍ URL በCloudflare ፈተና ተዘግቷል: {$a}።';
$string['rag:embed_detected'] = 'የተካተተ ሚዲያ ተገኝቷል: {$a}';
$string['rag:embed_transcript_attached'] = 'ለ{$a} ጽሑፍ ተያይዟል';

// v3.9.10–v3.9.14 new strings (English verbatim; translate later).
$string['usersettings:download'] = 'የእኔን {$a} ውሂብ አውርድ';
$string['usersettings:download_help'] = 'ከመለያህ ጋር የተያያዘ የእያንዳንዱን {$a} መዝገብ ሙሉ JSON ቅጂ አውርድ፦ ውይይቶች፣ መልዕክቶች፣ ደረጃዎች፣ የጥናት እቅዶች፣ ማስታወሻዎች፣ የልምምድ ውጤቶች፣ የጥናት ምላሾች፣ መገለጫ እና የኦዲት ግቤቶች።';
$string['usersettings:privacy_notice_link'] = 'የ{$a} የግላዊነት ማስታወቂያ አንብብ';
$string['privacy:title'] = 'የ{$a} የግላዊነት ማስታወቂያ';
$string['admin:user_data:title'] = '{$a} — የተማሪ ውሂብ ኤክስፖርት እና ማጥፋት';
$string['admin:user_data:intro'] = 'ለ GDPR አንቀጽ 15 (መዳረሻ) ወይም አንቀጽ 17 (መሰረዝ) ጥያቄ የስራ መንገድ። ተማሪውን በ Moodle የተጠቃሚ መለያ ቁጥር ፈልግ፣ ይህ ተጨማሪ ሞጁል ስለ እርሱ የያዛቸውን መዝገቦች ገምግም፣ ከዚያም ወደ ውጭ ላክ ወይም አጥፋ።';
$string['admin:user_data:search_label'] = 'የ Moodle ተጠቃሚ መለያ ቁጥር';
$string['admin:user_data:lookup'] = 'ፈልግ';
$string['admin:user_data:not_found'] = 'በዚህ መለያ ቁጥር ምንም ተጠቃሚ አልተገኘም።';
$string['admin:user_data:download'] = 'ሁሉንም የተማሪ ውሂብ እንደ JSON አውርድ';
$string['admin:user_data:purge'] = 'የዚህን ተጠቃሚ ሁሉንም የተማሪ ውሂብ አጥፋ';
$string['admin:user_data:confirm_purge'] = 'የ{$a} እያንዳንዱን መዝገብ ለዘላለም ለመሰረዝ እርግጠኛ ነህ? ይህ በውይይቶች፣ መልዕክቶች፣ ደረጃዎች፣ የጥናት እቅዶች፣ ማስታወሻዎች፣ መገለጫዎች፣ የልምምድ ውጤቶች፣ የጥናት ምላሾች፣ የኦዲት ግቤቶች እና አስተያየቶች ላይ ይተገበራል። ድርጊቱ ሊቀለበስ አይችልም።';
$string['admin:user_data:purged'] = 'የተመረጠው ተጠቃሚ ሁሉም ውሂብ ተሰርዟል።';
$string['chat:consent_heading'] = 'ከ{$a->product} ጋር ከመወያየትህ በፊት';
$string['chat:consent_body'] = '{$a->product} በ AI የሚደገፍ የመማር ረዳት ነው። የእርስዎ መልዕክቶች እና የ{$a->product} ምላሾች በ{$a->institution} የ Moodle ዳታቤዝ ውስጥ ይከማቻሉ፣ እና የመጨረሻዎቹ አስር ዙር ጥያቄዎችዎን ለመመለስ ለተፈቀደ የ AI ሞዴል አቅራቢ ይላካሉ። ለግል እንዲሆን ስምዎ ብቻ ይጋራል፤ ምንም ሌላ መለያ መረጃ ለ AI አቅራቢ አይላክም። በማንኛውም ጊዜ የ{$a->product} ውሂብዎን ማውረድ፣ መሰረዝ ወይም መጠቀምን ማቆም ይችላሉ።';
$string['chat:consent_accept'] = 'ገብቶኛል፣ {$a} አስጀምር';
$string['chat:consent_privacy_link'] = 'ሙሉ የግላዊነት ማስታወቂያ አንብብ';
$string['task:audit_cleanup'] = 'የ AI Course Assistant ኦዲት ሰንጠረዥ ጽዳት';
$string['task:conversation_retention'] = 'የ AI Course Assistant ውይይት ማቆያ ጠራጊ';
$string['settings:audit_retention_days'] = 'የኦዲት ምዝግብ ማቆያ (ቀናት)';
$string['settings:audit_retention_days_desc'] = 'በየቀኑ የተያዘው ስራ ከዚህ የበለጠ ያረጁ የኦዲት ረድፎችን ያጸዳል። 0 ያቦዝነዋል። ነባሪ 365።';
$string['settings:conversation_retention_days'] = 'የውይይት ማቆያ (ቀናት)';
$string['settings:conversation_retention_days_desc'] = 'በየቀኑ የተያዘው ስራ የመጨረሻ የተሻሻለ ጊዜ ምልክታቸው ከዚህ የበለጠ ያረጁ የውይይት ረድፎችን ያጸዳል። 0 ያቦዝነዋል። ነባሪ 730።';
$string['settings:ssrf_trusted_endpoints'] = 'SSRF የታመኑ መድረሻዎች';
$string['settings:ssrf_trusted_endpoints_desc'] = 'በአንድ መስመር አንድ URL። የተዘረዘሩት አስተናጋጆች በSOLA SSRF አረጋጋጭ ውስጥ ያሉትን loopback / private-IP / https-only ምርመራዎች ያልፋሉ። ይህን የሚቆጣጠሩትን አውታር ላይ ለራስ-አስተናጋጅ LLMs ብቻ ይጠቀሙ — ለምሳሌ <code>http://localhost:11434</code> ለአካባቢ Ollama፣ <code>http://10.0.0.5:8000</code> በተመሳሳይ VPC ላይ ላለ vLLM pod። ንጽጽሩ scheme + host + port ይዛመዳል፤ ማንኛውም መንገድ ይታለፋል። ነባሪ ባዶ ነው (ሁሉንም ውስጣዊ ይዘጋዋል)። በ<code>#</code> የሚጀምሩ መስመሮች አስተያየቶች ናቸው።';
$string['task:learner_weekly_digest']    = 'AI ኮርስ ረዳት የተማሪ ሳምንታዊ ማጠቃለያ';
$string['learner_digest:subject']        = 'የእርስዎ ሳምንት በ{$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'በሚቀጥለው ላይ ምን እንደምታተኩሩ የሚያሳይ አጭር ሳምንታዊ ኢሜል ይፈልጋሉ?';
$string['next_best_action:get_started']           = 'በ{$a->title} ላይ ጀምር። ይክፈቱኝ እና "በ{$a->title} እርዱኝ" ይጠይቁ።';
$string['next_best_action:get_started_with_module'] = 'በ{$a->title} ላይ ጀምር። "{$a->module}" ሞዱል ያቀርባል።';
$string['next_best_action:review']                = '{$a->title}ን መሰረታዊ ነገሮች ይከልሱ — ይክፈቱኝ እና "{$a->title}ን እንደ አዲስ ሰው ይግለጹልኝ" ይጠይቁ።';
$string['next_best_action:review_with_module']    = '{$a->title}ን በ"{$a->module}" መሰረታዊ ይከልሱ፣ ከዚያ በማንኛውም ጥያቄ ይክፈቱኝ።';
$string['next_best_action:practice']              = 'በ{$a->title} ላይ የተገነባውን ይገንቡ። ይክፈቱኝ እና "ለ{$a->title} የተሰራ ምሳሌ ስጡኝ" ይጠይቁ።';
$string['next_best_action:practice_with_module']  = '{$a->title}ን ከ"{$a->module}" ጎን ይለማመዱ። ለተሰሩ ምሳሌዎች ይክፈቱኝ።';
$string['next_best_action:quiz']                  = 'በፈጣን ፈተና {$a->title}ን ይዝጉ። ይክፈቱኝ እና "ፈትኑኝ — ተለዋዋጭ" ይምረጡ።';
$string['next_best_action:quiz_with_module']      = 'በፈጣን ፈተና {$a->title}ን ይዝጉ። "{$a->module}" ሞዱል ቦታው ነው።';
$string['next_best_action:empty_state']           = 'ሁሉም ዓላማዎች ላይ ጥሩ እየሰሩ ነው — የሚነካ ነገር የለም። ይቀጥሉ።';
$string['next_best_action:header']                = 'በሚቀጥለው ላይ የሚያተኩሩባቸው {$a} ነገሮች እነሆ:';
$string['learner_digest:unsubscribe_done_title']  = 'ተወግዷል';
$string['learner_digest:unsubscribe_done_body']   = 'ተጠናቅቋል — ለዚህ ኮርስ ከ{$a->product} ሳምንታዊ ኢሜሎችን አይቀበሉም። ከኮርስዎ ቻት መስኮት በማንኛውም ጊዜ መልሰው ማንቃት ይችላሉ።';
$string['learner_digest:unsubscribe_invalid_title'] = 'የመቅጃ መሰረዣ አገናኝ ከእንግዲህ የማይሰራ';
$string['learner_digest:unsubscribe_invalid_body']  = 'ይህ የመቅጃ መሰረዣ አገናኝ ጊዜው አልፎበታል ወይም ተበላሽቷል። ከኮርስ ቅንብሮችዎ የኢሜል ምርጫዎችን ማስተዳደር ይችላሉ።';
$string['active_learners:line']                   = '{$a} ሌሎች አሁን ይህን ኮርስ እያጠኑ ነው።';
$string['active_learners:line_global']             = '{$a} ሌሎች አሁን እያጠኑ ነው።';
$string['settings:active_learners_scope']          = 'የንቁ ተማሪ አመልካች ወሰን';
$string['settings:active_learners_scope_desc']     = 'ከቻት ጀማሪዎች በላይ ያለው "አሁን ሌሎች እያጠኑ ነው" አመልካች በተመሳሳይ ኮርስ ላይ ያሉትን ብቻ ወይም በመላው ጣቢያ ያሉትን ይቆጥራል። ነባሪ <strong>ዓለም አቀፍ</strong>።';
$string['settings:active_learners_scope_global']   = 'ዓለም አቀፍ (ማንኛውም ኮርስ)';
$string['settings:active_learners_scope_course']   = 'በኮርስ ብቻ';
$string['learner_digest:optin_yes']      = 'አዎ፣ ሳምንታዊውን ኢሜል ይላኩልኝ';
$string['learner_digest:optin_no']       = 'አያስፈልግም';
$string['learner_digest:optin_thanks']   = 'ተመዝግቧል። በየሰኞ ሳምንታዊ ማጠቃለያ ያገኛሉ።';
$string['learner_digest:optin_declined'] = 'ተመዝግቧል። ኢሜሎች የሉም - በፈለጉ ጊዜ ብቻ ይክፈቱኝ።';
$string['settings:xai_proxy_url'] = 'የ xAI Realtime ፕሮክሲ URL';
$string['settings:xai_proxy_url_desc'] = 'የ SOLA xAI Realtime ፕሮክሲ አገልግሎት ይፋዊ wss URL (ለምሳሌ wss://voice.example.com/xai-rt/rt)። ይህ ከ JWT ሚስጥር ጋር ሲቀመጥ፣ የ xAI ድምጽ በፕሮክሲው ውስጥ ያልፋል እና ዋናው የ xAI API ቁልፍ ወደ አሳሽ አይደርስም። በቀጥታ ግንኙነት ለመመለስ ባዶ ተውት (ለምርት አይመከርም)።';
$string['settings:xai_proxy_jwt_secret'] = 'የ xAI Realtime ፕሮክሲ JWT ሚስጥር';
$string['settings:xai_proxy_jwt_secret_desc'] = 'ለ xAI Realtime ፕሮክሲ ለአጭር ጊዜ የሚቆዩ የክፍለ-ጊዜ ቶከኖች ለመፈረም የሚያገለግል HS256 የጋራ ሚስጥር። በ Cloudflare Worker ላይ ካለው MOODLE_JWT_SECRET ሚስጥር ጋር መመሳሰል አለበት። በየጊዜው አሽከርክር።';
$string['admin:vendor_dpa:title'] = '{$a} — የአቅራቢ DPA ሁኔታ';
$string['admin:vendor_dpa:intro'] = 'ለእያንዳንዱ የ AI አቅራቢ ሾፌር የስልጠና አለመቀበል፣ DPA እና የማቆያ አቋም። በጣቢያህ ላይ የትኞቹን ሾፌሮች ማንቃት እንዳለብህ ለመወሰን ይህን ተጠቀም። ደረጃ 2 እና ከዚያ በላይ መንገድ መፈረም DPA እና ኮንትራታዊ የስልጠና አለመቀበል ያስፈልጋል።';
$string['admin:vendor_dpa:maintenance_note'] = 'ይህ ሰንጠረዥ በ classes/vendor_registry.php ውስጥ ይጠበቃል። የአቅራቢ ToS ለውጥ ሲደርስ አሻሽል።';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'የውሂብ ጥበቃ ኦፊሰር ኢሜል';
$string['settings:dpo_email_desc'] = 'በተማሪ ፊት ለፊት ባለው የግላዊነት ማስታወቂያ "ግንኙነት" ስር የሚታየው የመገናኛ ኢሜል። ቦታውን ለመደበቅ ባዶ ተውት። እንደገና የተሰየሙ ጭነቶች ይህንን ወደ የራሳቸው DPO መጠቆም አለባቸው።';
$string['settings:privacy_external_url'] = 'የተቋማዊ የግላዊነት ገጽ URL';
$string['settings:privacy_external_url_desc'] = 'በተማሪ ፊት ለፊት ባለው የግላዊነት ማስታወቂያ "ግንኙነት" ስር የሚታይ ወደ ተቋማዊ ደረጃ የግላዊነት ገጽ ማገናኛ። ቦታውን ለመደበቅ ባዶ ተውት።';
$string['settings:privacy_notice_override'] = 'የግላዊነት ማስታወቂያ ተሻሪ (HTML)';
$string['settings:privacy_notice_override_desc'] = 'ከተቀመጠ፣ ይህ HTML በ /local/ai_course_assistant/privacy.php ላይ የሚቀርበውን ነባሪ የብራንድ የግላዊነት ማስታወቂያ ይተካል። ኮድ ሳይቀየር በህጋዊ የተገመገመውን ለተቋምህ ጽሁፍ ለማስገባት ይህን ተጠቀም። ነባሪውን ማስታወቂያ ለመጠቀም ባዶ ተውት፣ እሱም ጽሁፉን ከሰባት የብራንድ ውቅረት ቁልፎች ያገኛል።';
$string['objectives:title'] = 'የመማር ግቦች እና የክህሎት ጥራት';
$string['objectives:toggles_heading'] = 'የክህሎት ጥራት ክትትል';
$string['objectives:toggle_master'] = 'ለዚህ ኮርስ የክህሎት ጥራት ክትትልን አንቃ';
$string['objectives:toggle_chip'] = 'ለተማሪዎች የመማር ክህሎት ጥራት ምልክት አሳይ';
$string['objectives:toggle_chip_help'] = 'አማራጭ። ሲጠፋ፣ ክህሎት ጥራት ረዳቱን በዝምታ መምራቱን ይቀጥላል ነገር ግን ተማሪዎች ምንም አመልካች አያዩም።';
$string['objectives:toggled'] = 'ቅንብር ተሻሽሏል።';
$string['objectives:detected_heading'] = 'ከ{$a->source} {$a->count} የመማር ግቦች ተገኝተዋል።';
$string['objectives:source_competency'] = 'የ Moodle ብቃቶች';
$string['objectives:source_summary'] = 'የኮርሱ ማጠቃለያ';
$string['objectives:source_section'] = 'የክፍል ወይም የመጀመሪያ ገጽ ይዘት';
$string['objectives:source_page'] = 'የኮርስ ገጽ';
$string['objectives:source_llm'] = 'በ AI ማውጣት';
$string['objectives:source_manual'] = 'በእጅ ማስገባት';
$string['objectives:source_none'] = 'ምንም አውቶማቲክ ምንጭ የለም';
$string['objectives:import_detected'] = 'እነዚህን የተገኙ ግቦች አስገባ';
$string['objectives:import_llm'] = 'ግቦችን በ AI አውጣ';
$string['objectives:llm_empty'] = 'የ AI ማውጣት ምንም ግቦች አልመለሰም። በኋላ እንደገና ሞክር ወይም በእጅ አስገባቸው።';
$string['objectives:imported'] = '{$a} ግቦች ገብተዋል።';
$string['objectives:none_detected'] = 'ምንም የመማር ግቦች በራስ ሰር አልተገኙም። ከታች በእጅ አስገባቸው ወይም በ AI ማውጣት ተጠቀም።';
$string['objectives:list_heading'] = 'የአሁኑ ግቦች';
$string['objectives:col_code'] = 'ኮድ';
$string['objectives:col_title'] = 'ርዕስ';
$string['objectives:col_source'] = 'ምንጭ';
$string['objectives:col_actions'] = 'ድርጊቶች';
$string['objectives:add_heading'] = 'ግብ ጨምር';
$string['objectives:add_submit'] = 'ግብ ጨምር';
$string['objectives:saved'] = 'ግቡ ተቀምጧል።';
$string['objectives:deleted'] = 'ግቡ ተሰርዟል።';
$string['objectives:delete_confirm'] = 'ይህን ግብ እና ሁሉንም የሙከራ ታሪክ ለመሰረዝ እርግጠኛ ነህ?';
$string['objectives:delete_all'] = 'ለዚህ ኮርስ ሁሉንም ግቦች ሰርዝ';
$string['objectives:delete_all_confirm'] = 'ለዚህ ኮርስ ሁሉንም ግቦች እና ሁሉንም የሙከራ ታሪክ ሰርዝ? ሊቀለበስ አይችልም።';
$string['objectives:deleted_all'] = 'የዚህ ኮርስ ሁሉም ግቦች ተሰርዘዋል።';
$string['mastery:chip_aria'] = 'የመማር ክህሎት ጥራት ሁኔታ';
$string['mastery:popover_aria'] = 'የመማር ክህሎት ጥራት ዝርዝሮች';
$string['mastery:chip_label'] = '{$a->mastered} ከ{$a->total} ተስተካክሏል';
$string['mastery:status_mastered'] = 'ተስተካክሏል';
$string['mastery:status_learning'] = 'በሂደት ላይ';
$string['mastery:status_not_started'] = 'አልተጀመረም';
$string['mastery:popover_empty'] = 'ለዚህ ኮርስ የተዋቀሩ የመማር ግቦች የሉም።';
$string['settings:mastery_heading'] = 'የክህሎት ጥራት ክትትል';
$string['settings:mastery_heading_desc'] = 'የ ምድብ መልሶች እና የረዳት ውይይት ዙሮች በኮርሱ የመማር ግቦች ላይ የሚሰየም በኮርስ-ደረጃ የሚመረጥ ባህሪ፣ ከዚያም በስርዓት ጥያቄ ውስጥ ጥቅጥቅ ያለ የክህሎት ጥራት ቅጽበታዊ ምስል ይመግባል። በነባሪነት ስውር፦ የበኮርስ ቺፕ መቆጣጠሪያ ካልተበራ በስተቀር ተማሪዎች ምንም አያዩም።';
$string['settings:mastery_threshold'] = 'የተስተካከለ ደረጃ';
$string['settings:mastery_threshold_desc'] = 'ግብ የተስተካከለ ተደርጎ የሚቆጠርበት ወይም ከዚያ በላይ ያለ ሮሊንግ ትክክለኛነት። 0.0 እስከ 1.0። ነባሪ 0.85።';
$string['settings:mastery_window'] = 'የሙከራ መስኮት';
$string['settings:mastery_window_desc'] = 'በሮሊንግ ትክክለኛነት ውስጥ ለማስተናገድ በአንድ ግብ የሚቆጠሩ የቅርብ ሙከራዎች ቁጥር። ነባሪ 8።';
$string['settings:mastery_decay_enabled']        = 'የብቃት መቀነስ ያንቁ';
$string['settings:mastery_decay_enabled_desc']   = 'ሲበራ፣ የብቃት ውጤቶች ከመጨረሻው ሙከራ ጊዜ አንፃር በጊዜ ይቀንሳሉ። ቀደም ሲል የተካነ ዓላማ ተማሪው የመጨረሻ ጊዜ ካቆመ በኋላ ወደ "በመማር" ይመለሳል። በ"በመማር" ላይ አያንስም። <strong>በv4.0 ነባሪ ጠፍቷል።</strong>';
$string['settings:mastery_decay_half_life_days'] = 'የብቃት መቀነስ ግማሽ-ሕይወት (ቀኖች)';
$string['settings:mastery_decay_half_life_days_desc'] = 'በቀኖች ውስጥ ያለ ግማሽ-ሕይወት። ውጤቱ በ 0.5 ^ (ከመጨረሻው ሙከራ የቀኖች ብዛት / ግማሽ-ሕይወት) ይባዛል። ነባሪ 30። መቀነስ ሲበራ ብቻ ጥቅም ላይ ይውላል።';
$string['settings:mastery_classifier_model'] = 'የመከፋፈያ ሞዴል';
$string['settings:mastery_classifier_model_desc'] = 'የረዳት ዙሮችን በግቦች ላይ ለመከፋፈል የሚያገለግል ሞዴል። ነባሪውን የ AI አቅራቢ ሞዴል ለመውረስ ባዶ ተውት፤ አለበለዚያ እንደ gpt-4o-mini ያለ ርካሽ ሞዴል ግለጽ።';
$string['settings:mastery_classifier_weight'] = 'የመከፋፈያ ክብደት';
$string['settings:mastery_classifier_weight_desc'] = 'ከ ምድብ ሙከራ (1.0) ጋር ሲነጻጸር የውይይት ሙከራ ምን ያህል እንደሚቆጠር። ነባሪ 0.3።';
$string['settings:mastery_classifier_threshold'] = 'የመከፋፈያ መተማመኛ ደረጃ';
$string['settings:mastery_classifier_threshold_desc'] = 'የውይይት ሙከራን ለመመዝገብ የሚያስፈልገው ዝቅተኛ የመከፋፈያ መተማመኛ። 0.0 እስከ 1.0። ነባሪ 0.7።';
$string['chat:mode_progress'] = 'እድገት';
$string['objectives:toggle_dashboard'] = 'ለተማሪዎች የእድገት ዳሽቦርድ ትር አሳይ';
$string['objectives:toggle_dashboard_help'] = 'አማራጭ። በዊጂቱ ውስጥ ከውይይት / ድምፅ / ታሪክ ጎን የእድገት ትር ይጨምራል። ትሩ ለተማሪዎች የተስተካከሉ ግቦቻቸውን፣ በሂደት ላይ ያሉትን እና ያልጀመሩትን ያሳያል።';
$string['mastery:dashboard_title'] = 'የመማር እድገትህ';
$string['mastery:dashboard_subtitle'] = 'ክህሎት ጥራት ከ ምድብ መልሶችህ እና ከውይይት ልምምድ ይለካል። ቀጥል — ጥልቀት ከስፋት ይበልጣል።';
$string['mastery:dashboard_refresh'] = 'አድስ';
$string['mastery:section_mastered'] = 'ተስተካክሏል';
$string['mastery:section_learning'] = 'በሂደት ላይ';
$string['mastery:section_not_started'] = 'ገና አልተጀመረም';
$string['mastery:summary_label'] = '{$a->mastered} ከ{$a->total} ግቦች ተስተካክለዋል';
$string['mastery:ask_about'] = 'ስለዚህ ጠይቅ';
$string['mastery:celebrate'] = 'የዚህን ኮርስ ሁሉንም ግቦች አስተካክለሃል። እጅግ ድንቅ ሥራ።';
$string['mastery:ask_template'] = 'ይህን ግብ ለመለማመድ እና ግንዛቤዬን ለማጥለቅ እርዳኝ፦ {$a}።';
$string['instructor_dashboard:title'] = '{$a} — Course Instructor & Designer Dashboard';
$string['instructor_dashboard:short']            = 'Instructor & Designer Dashboard';
$string['coursepicker:title']                    = 'Select a course — {$a}';
$string['coursepicker:intro']                    = 'Choose a course from the list below to open this page in that course\'s context. Direct links with a courseid parameter still work as before.';
$string['coursepicker:nocourses']                = 'You do not have access to any courses where this page applies. Contact your site administrator if you believe this is incorrect.';
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
$string['settings:prompt_budget_chars']      = 'System prompt character budget';
$string['settings:prompt_budget_chars_desc'] = 'Maximum total size of the assembled system prompt before the user message, in characters. The structured prompt builder organises sections by category (identity, course context, learner state, behaviour, markers, safety) and drops or truncates the lowest-priority sections when the budget is exceeded. Safety guidance is always preserved in full. Default 8,000 characters (~2,000 tokens). Lower values reduce per-turn cost; higher values allow more course content to land in-prompt.';
$string['settings:current_page_content_maxchars']      = 'Current page content cap (characters)';
$string['settings:current_page_content_maxchars_desc'] = 'Maximum number of characters of the current page\'s text injected into the system prompt as the "Current Page Content" section. Default 12,000 keeps the prior behaviour where the full page (up to that cap) is sent — best for accuracy on page-specific questions. Cost-conscious sites can clamp this lower (e.g. 3,000-4,000) to reduce per-turn token spend, at the risk that a question whose answer is in the truncated tail of a long page will not be answered as accurately. Clamped to the range 500-12,000. Independent of <code>prompt_budget_chars</code>: this caps just the page section; the budget caps the whole prompt.';
$string['settings:prompt_verbosity']      = 'Prompt verbosity';
$string['settings:prompt_verbosity_desc'] = 'Default verbosity for instruction blocks (Socratic mode, external resources). Concise (default) is what modern hosted models follow reliably; standard adds explicit scaffolding for mid-tier models; verbose keeps the heavyweight v3.9.30-era guidance for weaker self-hosted models. Per-course override available via <code>prompt_verbosity_course_&lt;id&gt;</code>.';
$string['settings:prompt_verbosity_concise']  = 'Concise (recommended for hosted models)';
$string['settings:prompt_verbosity_standard'] = 'Standard';
$string['settings:prompt_verbosity_verbose']  = 'Verbose (for weaker self-hosted models)';
$string['settings:prompt_metrics_enabled']      = 'Capture per-section prompt metrics';
$string['settings:prompt_metrics_enabled_desc'] = 'When on (default), every chat turn writes one JSON line per assembled prompt to <code>moodledata/sola_prompt_metrics/YYYY-MM-DD.log</code> with per-category char counts. Last 7 days kept. The metrics admin page aggregates these for the budget recommendation. No PII is recorded — only section sizes. Turn off if your institution prefers no metrics file at all.';
$string['settings:prompt_budget_auto_tune']      = 'Auto-tune system prompt budget daily';
$string['settings:prompt_budget_auto_tune_desc'] = 'When on, a daily cron task (03:20 server time) applies the budget recommendation surfaced on the <a href="/local/ai_course_assistant/prompt_metrics.php">Prompt metrics</a> admin page. Default off — the recommendation always shows on the page; auto-apply only fires when the institution opts in. Manual "Apply recommendation" button is unaffected by this toggle.';
$string['task:auto_tune_prompt_budget']          = 'Auto-tune SOLA prompt budget from observed metrics';
$string['prompt_metrics:title']                  = 'Prompt metrics + budget recommendation';
$string['prompt_metrics:subtitle']               = 'Per-section prompt sizes captured over the last 7 days. Used to recommend a value for the System prompt character budget setting.';
$string['prompt_metrics:no_data']                = 'No prompt metrics recorded yet. Send a few chat turns from a learner account, then refresh this page. (If the metrics capture flag is off in plugin settings, no data will accumulate.)';
$string['prompt_metrics:headline']               = 'Headline';
$string['prompt_metrics:samples']                = 'Samples (chat turns over last 7 days)';
$string['prompt_metrics:avg_total']              = 'Average total prompt size';
$string['prompt_metrics:max_total']              = 'Maximum prompt size observed';
$string['prompt_metrics:avg_budget']             = 'Budget at time of capture';
$string['prompt_metrics:pct_truncated']          = 'Turns where any section was truncated';
$string['prompt_metrics:pct_dropped']            = 'Turns where any section was dropped';
$string['prompt_metrics:last_seen']              = 'Most recent sample';
$string['prompt_metrics:by_category']            = 'Average chars per category';
$string['prompt_metrics:category']               = 'Category';
$string['prompt_metrics:avg_chars']              = 'Avg chars';
$string['prompt_metrics:recommendation']         = 'Budget recommendation';
$string['prompt_metrics:rec_insufficient_data']  = 'Need at least 30 chat turns of data to make a confident recommendation. Keep collecting samples and check back.';
$string['prompt_metrics:rec_optimal']            = 'Current budget looks well-tuned for the observed traffic. No change recommended.';
$string['prompt_metrics:current_budget']         = 'Current budget';
$string['prompt_metrics:recommended']            = 'Recommended budget';
$string['prompt_metrics:apply']                  = 'Apply recommendation';
$string['prompt_metrics:applied']                = 'Applied: budget changed from {$a->old} to {$a->new}. {$a->reason}';
$string['prompt_metrics:noop']                   = 'No change applied: {$a}';
$string['prompt_metrics:auto_tune_heading']      = 'Daily auto-tune';
$string['prompt_metrics:auto_tune_on']           = 'Daily auto-tune is ON. The recommendation will be applied automatically every night at 03:20 server time.';
$string['prompt_metrics:auto_tune_off']          = 'Daily auto-tune is OFF. The recommendation is shown here for review; nothing is applied automatically. Toggle on in plugin settings if you want unattended daily tuning.';
$string['prompt_metrics:settings_link']          = 'Open plugin settings to toggle auto-tune.';

// v5.3.0: Empathetic communications + carryover memory (English fallback).
$string['task:milestone_check'] = 'Send daily milestone reflection emails (v5.3.0)';
$string['task:struggle_signal_review'] = 'Review struggle signals into private learner memory (v5.3.0)';
$string['empathy:title'] = 'Empathetic communications and carryover memory (v5.3.0)';
$string['empathy:desc'] = 'Three coordinated features that make SOLA feel more like a coach who listens. Goals capture why the learner is here. Carryover memory remembers what has been hard before so SOLA can offer a different angle. Milestones celebrate streaks and completions by email. Each feature has an independent kill switch and learner opt-in. Struggle signals never leave the chat — no email is ever sent about a difficult session.';
$string['empathy:outreach_master_enabled'] = 'Master outreach kill switch';
$string['empathy:outreach_master_enabled_desc'] = 'Off by default on a fresh install. When off, NO empathetic email of any kind ever fires, regardless of the per-feature switches below. Turn this on once you have reviewed the per-feature defaults and per-learner consent flow.';
$string['empathy:goals_enabled'] = 'Enable career goal conversations';
$string['empathy:goals_enabled_desc'] = 'Lets learners volunteer two short answers (why they are here, what they want to become) that feed personalisation. In-chat only; no emails. Safe to leave on.';
$string['empathy:milestones_enabled'] = 'Enable milestone reflection emails';
$string['empathy:milestones_enabled_desc'] = 'Sends a short warm email when a learner reaches a 7-day streak, 30-day streak, or course completion. Requires the master switch above plus per-learner consent. Hard cap of one email per learner per 7 days across all channels.';
$string['empathy:memory_enabled'] = 'Enable carryover personalisation memory';
$string['empathy:memory_enabled_desc'] = 'Lets SOLA carry small private notes about what has been hard for a learner across sessions, so the next reply can offer a different angle. Bounded (max 5 notes per learner per course, 90-day TTL). Learner-editable. Never visible to instructors.';
$string['empathy:struggle_enabled'] = 'Enable struggle classifier';
$string['empathy:struggle_enabled_desc'] = 'Off by default. Lets SOLA detect sustained frustration over multiple turns and quietly record a sticking-point note in the carryover memory above. Output is in-chat only; no email is ever sent about a struggle session. Auto-purges signal data after 7 days.';
$string['empathy:outreach_dryrun'] = 'Dry-run outreach (log without sending)';
$string['empathy:outreach_dryrun_desc'] = 'When on, the milestone scheduled task records audit rows as if it sent emails but does not actually email anyone. Use this on a fresh install to verify the cooldown and consent logic before going live.';
$string['goals:starter_title'] = 'Set my learning goals';
$string['goals:starter_intro'] = "Mind sharing why you are taking this course? It helps me give you better answers.";
$string['goals:q1_label'] = 'What brought you to this course?';
$string['goals:q2_label'] = "What's the bigger thing this is helping you toward? A degree, a job, a project of your own, something else?";
$string['goals:q3_label'] = 'Anything I should keep in mind while we work together?';
$string['goals:save'] = 'Save my goals';
$string['goals:dismiss'] = 'Not now';
$string['goals:edit'] = 'Edit goals';
$string['goals:clear'] = 'Clear my goals';
$string['goals:cleared'] = 'Your goals have been cleared.';
$string['goals:saved'] = 'Thanks for sharing.';
$string['comms:title'] = 'My communications';
$string['comms:desc'] = 'Choose which automated emails SOLA may send you. Off by default. You can change this any time.';
$string['comms:milestones_label'] = 'Email me when I reach a milestone (7-day streak, 30-day streak, course completion).';
$string['comms:audit_log_title'] = 'What SOLA has sent me';
$string['comms:audit_log_empty'] = 'SOLA has not sent you any emails.';
$string['comms:memory_title'] = "What SOLA has remembered about how I learn";
$string['comms:memory_desc'] = 'These notes are private to your chat with SOLA. They help SOLA pick a different angle when a topic is hard. Clear any time.';
$string['comms:memory_clear'] = 'Clear all memory notes';
$string['milestone:streak_subject'] = '{$a->days}-day streak in {$a->coursename}';
$string['milestone:streak_body_text'] = "Hi {\$a->firstname},\n\nYou have shown up {\$a->days} days in a row in {\$a->coursename}. That kind of consistency is the part of learning that is hardest to fake.\n\nWhenever you are ready, SOLA is here.\n\n— {\$a->institution}";
$string['milestone:completion_subject'] = 'You finished {$a->coursename}';
$string['milestone:completion_body_text'] = "Hi {\$a->firstname},\n\nYou finished {\$a->coursename}. That is a real thing you did.\n\nIf you want to keep going, SOLA can help you pick a related next course or revisit a topic you found interesting.\n\n— {\$a->institution}";
$string['milestone:trigger_streak7'] = '7-day activity streak reached';
$string['milestone:trigger_streak30'] = '30-day activity streak reached';
$string['milestone:trigger_completion'] = 'Course completion recorded';
