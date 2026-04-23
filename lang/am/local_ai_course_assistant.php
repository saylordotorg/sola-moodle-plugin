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
$string['chat:voice_panel_title'] = 'ከ{$a} ጋር ተነጋገር (ሙከራ)';

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
