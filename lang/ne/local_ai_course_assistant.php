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
 * Language strings for local_ai_course_assistant — Nepali / नेपाली (Devanagari).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'AI पाठ्यक्रम सहायक';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'प्रत्येक प्रयोगकर्ता र पाठ्यक्रमका लागि AI ट्युटर च्याट वार्तालापहरू भण्डारण गर्छ।';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'वार्तालापको स्वामी प्रयोगकर्ताको ID।';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'वार्तालाप सम्बन्धित पाठ्यक्रमको ID।';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'वार्तालापको शीर्षक।';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'वार्तालाप सिर्जना भएको समय।';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'वार्तालाप अन्तिम परिमार्जन भएको समय।';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'वार्तालापहरूमा व्यक्तिगत सन्देशहरू भण्डारण गर्छ।';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'सन्देश पठाउने प्रयोगकर्ताको ID।';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'सन्देश सम्बन्धित पाठ्यक्रमको ID।';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'सन्देश पठाउनेको भूमिका (प्रयोगकर्ता वा सहायक)।';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'सन्देशको सामग्री।';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'सन्देशका लागि प्रयोग गरिएका टोकनहरूको सङ्ख्या।';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'सन्देश सिर्जना भएको समय।';

// Capabilities.
$string['ai_course_assistant:use'] = 'AI ट्युटर च्याट प्रयोग गर्नुहोस्';
$string['ai_course_assistant:viewanalytics'] = 'AI ट्युटर च्याट विश्लेषण हेर्नुहोस्';
$string['ai_course_assistant:manage'] = 'AI ट्युटर च्याट सेटिङहरू व्यवस्थापन गर्नुहोस् (प्रशासक भूमिका)';

// Settings.
$string['settings:enabled'] = 'AI पाठ्यक्रम सहायक सक्षम गर्नुहोस्';
$string['settings:enabled_desc'] = 'पाठ्यक्रम पृष्ठहरूमा AI पाठ्यक्रम सहायक विजेट सक्षम वा अक्षम गर्नुहोस्।';
$string['settings:default_course_mode'] = 'नयाँ कोर्सहरूको लागि पूर्वनिर्धारित';
$string['settings:default_course_mode_desc'] = 'कुनै प्रति-कोर्स छनोट नगरिएको बेला कोर्समा SOLA देखिन्छ कि देखिन्न नियन्त्रण गर्छ। नयाँ स्थापनाहरू पूर्वनिर्धारित रूपमा "पूर्वनिर्धारित रूपमा असक्षम" हुन्छन् ताकि प्रशासकहरू Analytics पृष्ठ वा Course AI Settings पृष्ठबाट कोर्स-दर-कोर्स सक्षम गर्न सक्छन्।';
$string['settings:default_course_mode_per_course'] = 'पूर्वनिर्धारित रूपमा असक्षम (प्रति कोर्स सक्षम गर्नुहोस्)';
$string['settings:default_course_mode_all'] = 'सबै कोर्सहरूमा सक्षम';
$string['settings:auto_open'] = 'पहिलो भ्रमणमा स्वतः खोल्नुहोस्';
$string['settings:auto_open_desc'] = 'सक्षम पारिएको बेला, विद्यार्थी प्रत्येक कोर्समा पहिलो पटक आइपुग्दा SOLA दराज स्वतः खुल्छ। उही कोर्समा पछिल्ला पृष्ठ लोडहरूले दराज पुनः खोल्दैनन् — स्थिति विद्यार्थीको ब्राउजरमा localStorage मार्फत प्रति कोर्स ट्र्याक गरिन्छ। डेस्कटप र मोबाइलमा लागू हुन्छ। Course AI Settings पृष्ठबाट प्रति कोर्स ओभरराइड गर्न सकिन्छ।';
$string['settings:comparison_providers'] = 'तुलना प्रदायकहरू (LLM पिकर)';
$string['settings:comparison_providers_desc'] = 'विजेट भित्रको LLM पिकरमा थप AI प्रदायकहरू थप्नुहोस् ताकि प्रशासकहरूले प्रदायकहरू बीच प्रतिक्रियाहरू तुलना गर्न सकून्। पङ्क्तिहरू थप्न तलको तालिका प्रयोग गर्नुहोस्। तापक्रम स्तम्भ वैकल्पिक हो (विश्वव्यापी तापक्रम प्रयोग गर्न खाली छोड्नुहोस्)। भण्डारण ढाँचा: provider_id|api_key|model1,model2|temperature। माथि कन्फिगर गरिएको प्राथमिक प्रदायक सधैं स्वचालित रूपमा समावेश हुन्छ। व्यवस्थापन क्षमता भएका प्रशासकहरूले मात्र पिकर देख्छन्; विद्यार्थीहरूले कहिल्यै देख्दैनन्। मान्य provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'पूर्वनिर्धारित AI प्रदायक';
$string['settings:provider_desc'] = 'च्याट पूर्णताहरूको लागि प्रयोग गर्न AI प्रदायक चयन गर्नुहोस्। Moodle को Site admin > AI मा निर्मित AI कन्फिगरेसन मार्फत अनुरोधहरू रुट गर्न "Moodle AI (core_ai subsystem)" छान्नुहोस्; त्यो मोडमा तलका API कुञ्जी, मोडेल र आधार URL क्षेत्रहरू बेवास्ता गरिन्छन्। Streaming, tool use, र prompt caching core_ai मार्फत उपलब्ध छैनन् — प्रतिक्रियाहरू एकल टुक्राको रूपमा डेलिभर गरिन्छन्। उत्कृष्ट विद्यार्थी अनुभवको लागि प्रत्यक्ष प्रदायक प्रयोग गर्नुहोस्।';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (स्थानीय)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'कस्टम (OpenAI-अनुकूल)';
$string['settings:apikey'] = 'API कुञ्जी';
$string['settings:apikey_desc'] = 'चयन गरिएको प्रदायकको API कुञ्जी। Ollama का लागि आवश्यक छैन।';
$string['settings:model'] = 'मोडेलको नाम';
$string['settings:model_desc'] = 'प्रयोग गर्ने मोडेल। पूर्वनिर्धारित प्रदायकमा निर्भर गर्छ (जस्तै claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01)।';
$string['settings:apibaseurl'] = 'API आधार URL';
$string['settings:apibaseurl_desc'] = 'API को आधार URL। प्रत्येक प्रदायकका लागि स्वचालित रूपमा भरिन्छ तर परिवर्तन गर्न सकिन्छ। प्रदायकको पूर्वनिर्धारितका लागि खाली छोड्नुहोस्।';
$string['settings:systemprompt'] = 'सिस्टम प्रम्प्ट टेम्प्लेट';
$string['settings:systemprompt_desc'] = 'AI लाई पठाइने सिस्टम प्रम्प्ट। प्लेसहोल्डरहरू प्रयोग गर्नुहोस्: {{coursename}}, {{userrole}}, {{coursetopics}}।';
$string['settings:systemprompt_default'] = 'तपाईं "{{coursename}}" पाठ्यक्रमका लागि एक उपयोगी AI ट्युटर हुनुहुन्छ। विद्यार्थीको भूमिका {{userrole}} हो।

समेटिएका पाठ्यक्रम विषयहरू:
{{coursetopics}}

विद्यार्थीलाई पाठ्यक्रम सामग्री बुझ्न मद्दत गर्नुहोस्। उत्साहजनक, स्पष्ट र शैक्षणिक रूपमा सही रहनुहोस्।';
$string['settings:temperature'] = 'तापमान';
$string['settings:temperature_desc'] = 'अनियमितता नियन्त्रण गर्छ। कम मानहरू अधिक केन्द्रित, उच्च मानहरू अधिक रचनात्मक। दायरा: 0.0 देखि 2.0 सम्म।';
$string['settings:maxhistory'] = 'अधिकतम वार्तालाप इतिहास';
$string['settings:maxhistory_desc'] = 'API अनुरोधहरूमा समावेश गर्न सन्देश जोडीहरूको अधिकतम सङ्ख्या। पुराना सन्देशहरू ट्रिम गरिन्छन्।';
$string['settings:avatar'] = 'च्याट अवतार';
$string['settings:avatar_desc'] = 'च्याट विजेट बटनका लागि अवतार आइकन छनोट गर्नुहोस्।';
$string['settings:avatar_saylor'] = '{$a} लोगो (पूर्वनिर्धारित)';
$string['settings:position'] = 'विजेट स्थान';
$string['settings:position_desc'] = 'पृष्ठमा च्याट विजेटको स्थान।';
$string['settings:position_br'] = 'तल दायाँ';
$string['settings:position_bl'] = 'तल बायाँ';
$string['settings:position_tr'] = 'माथि दायाँ';
$string['settings:position_tl'] = 'माथि बायाँ';
$string['chat:settings'] = 'प्लगइन सेटिङहरू';
$string['analytics:viewdashboard'] = 'विश्लेषण ड्यासबोर्ड हेर्नुहोस्';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'पाठ्यक्रम AI सेटिङहरू';
$string['coursesettings:enabled'] = 'पाठ्यक्रम ओभरराइडहरू सक्षम गर्नुहोस्';
$string['coursesettings:enabled_desc'] = 'सक्षम गरिएमा, तलका सेटिङहरूले यस पाठ्यक्रमका लागि मात्र विश्वव्यापी AI प्रदायक कन्फिगरेसन ओभरराइड गर्छन्। विश्वव्यापी मान उत्तराधिकार पाउन फिल्डहरू खाली छोड्नुहोस्।';
$string['coursesettings:sola_enabled'] = 'यो कोर्समा SOLA';
$string['coursesettings:sola_enabled_toggle'] = 'यो कोर्समा SOLA विजेट देखाउनुहोस्';
$string['coursesettings:sola_enabled_desc'] = 'यो कोर्समा SOLA च्याट विजेट देखिन्छ कि देखिन्न नियन्त्रण गर्छ। साइट-व्यापी पूर्वनिर्धारित प्लगइन सेटिङहरूमा General > Default for new courses अन्तर्गत सेट गरिन्छ।';
$string['coursesettings:using_global'] = 'विश्वव्यापी सेटिङ प्रयोग गर्दै';
$string['coursesettings:saved'] = 'पाठ्यक्रम AI सेटिङहरू सुरक्षित गरियो।';
$string['coursesettings:global_settings_link'] = 'विश्वव्यापी AI सेटिङहरू';

// Language detection and preference.
$string['lang:switch'] = 'हो, परिवर्तन गर्नुहोस्';
$string['lang:dismiss'] = 'धन्यवाद, पर्दैन';
$string['lang:change'] = 'भाषा परिवर्तन गर्नुहोस्';
$string['lang:english'] = 'अङ्ग्रेजी';

// Chat widget.
$string['chat:title'] = 'AI ट्युटर';
$string['chat:placeholder'] = 'प्रश्न सोध्नुहोस्...';
$string['chat:send'] = 'पठाउनुहोस्';
$string['chat:close'] = 'च्याट बन्द गर्नुहोस्';
$string['chat:open'] = 'AI ट्युटर च्याट खोल्नुहोस्';
$string['chat:clear'] = 'स्क्रिन हटाउनुहोस्';
$string['chat:clear_confirm'] = 'देखिने सन्देशहरू हटाउने? तपाईंको पूरा च्याट इतिहास सुरक्षित रहन्छ र विजेट पुनः खोलेर फेरि लोड गर्न सकिन्छ।';
$string['chat:copy'] = 'वार्तालाप प्रतिलिपि गर्नुहोस्';
$string['chat:copied'] = 'वार्तालाप क्लिपबोर्डमा प्रतिलिपि गरियो';
$string['chat:copy_failed'] = 'वार्तालाप प्रतिलिपि गर्न असफल भयो';
$string['chat:thinking'] = 'सोच्दै छु...';
$string['chat:error'] = 'माफ गर्नुहोस्, केही गडबड भयो। कृपया फेरि प्रयास गर्नुहोस्।';
$string['chat:error_auth'] = 'प्रमाणीकरण त्रुटि। कृपया आफ्नो प्रशासकलाई सम्पर्क गर्नुहोस्।';
$string['chat:error_ratelimit'] = 'धेरै अनुरोधहरू। कृपया एक क्षण प्रतीक्षा गर्नुहोस् र फेरि प्रयास गर्नुहोस्।';
$string['chat:error_unavailable'] = 'AI सेवा अस्थायी रूपमा अनुपलब्ध छ। कृपया पछि फेरि प्रयास गर्नुहोस्।';
$string['chat:error_notconfigured'] = 'AI ट्युटर अझै कन्फिगर गरिएको छैन। कृपया आफ्नो प्रशासकलाई सम्पर्क गर्नुहोस्।';
$string['chat:mic'] = 'आफ्नो प्रश्न बोल्नुहोस्';
$string['chat:mic_error'] = 'माइक्रोफोन त्रुटि। कृपया आफ्नो ब्राउजर अनुमतिहरू जाँच गर्नुहोस्।';
$string['chat:mic_unsupported'] = 'यस ब्राउजरमा वाणी इनपुट समर्थित छैन।';
$string['chat:newline_hint'] = 'नयाँ लाइनका लागि Shift+Enter';
$string['chat:you'] = 'तपाईं';
$string['chat:assistant'] = 'AI ट्युटर';
$string['chat:history_loaded'] = 'अघिल्लो वार्तालाप लोड भयो।';
$string['chat:history_cleared'] = 'च्याट इतिहास हटाइयो।';
$string['chat:offtopic_warning'] = 'तपाईंको प्रश्न यस पाठ्यक्रमसँग सम्बन्धित छैन जस्तो लाग्छ। कृपया विषयमा रहन प्रयास गर्नुहोस् ताकि म तपाईंलाई राम्रोसँग मद्दत गर्न सकूँ!';
$string['chat:offtopic_ended'] = 'तपाईंको AI ट्युटर पहुँच {$a} मिनेटका लागि अस्थायी रूपमा निलम्बित गरिएको छ किनभने वार्तालाप धेरैपटक विषयबाट विचलित भयो। कृपया यस समयमा आफ्नो पाठ्यक्रम सामग्री समीक्षा गर्नुहोस्, र तपाईं पछि फेरि प्रयास गर्न सक्नुहुन्छ।';
$string['chat:offtopic_locked'] = 'तपाईंको AI ट्युटर पहुँच अस्थायी रूपमा निलम्बित छ। तपाईं {$a} मिनेटमा फेरि प्रयास गर्न सक्नुहुन्छ। कृपया फर्कंदा पाठ्यक्रम-सम्बन्धित प्रश्नहरूमा ध्यान दिनुहोस्।';
$string['chat:escalated_to_support'] = 'म तपाईंको प्रश्नको पूर्ण रूपमा उत्तर दिन सकिनँ, त्यसैले मैले तपाईंका लागि समर्थन टिकट सिर्जना गरेको छु। एक समर्थन टोली सदस्यले अनुसरण गर्नेछन्। तपाईंको टिकट सन्दर्भ: {$a}';
$string['chat:studyplan_intro'] = 'म यस पाठ्यक्रमका लागि तपाईंको अध्ययन योजना सिर्जना गर्न मद्दत गर्न सक्छु! बस मलाई बताउनुहोस् कि तपाईं साप्ताहिक अध्ययनमा कति घन्टा समर्पित गर्न सक्नुहुन्छ, र म एक संरचित योजना बनाउन मद्दत गर्नेछु।';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ र समर्थन';
$string['settings:faq_heading_desc'] = 'केन्द्रीकृत FAQ र Zendesk समर्थन टिकट एकीकरण कन्फिगर गर्नुहोस्।';
$string['settings:faq_content'] = 'FAQ सामग्री';
$string['settings:faq_content_desc'] = 'FAQ प्रविष्टिहरू प्रविष्ट गर्नुहोस् (ढाँचामा प्रति लाइन एक: Q: प्रश्न | A: उत्तर)। सामान्य समर्थन प्रश्नहरूको उत्तर दिन AI लाई प्रदान गरिनेछ।';
$string['settings:zendesk_enabled'] = 'Zendesk एस्केलेसन सक्षम गर्नुहोस्';
$string['settings:zendesk_enabled_desc'] = 'जब AI ले समर्थन प्रश्न समाधान गर्न सक्दैन, वार्तालाप सारांशसहित स्वचालित रूपमा Zendesk टिकट सिर्जना गर्नुहोस्।';
$string['settings:zendesk_subdomain'] = 'Zendesk सबडोमेन';
$string['settings:zendesk_subdomain_desc'] = 'तपाईंको Zendesk सबडोमेन (जस्तै mycompany.zendesk.com का लागि "mycompany")।';
$string['settings:zendesk_email'] = 'Zendesk API इमेल';
$string['settings:zendesk_email_desc'] = 'API प्रमाणीकरणका लागि Zendesk प्रयोगकर्ताको इमेल ठेगाना (/token प्रत्यय सहित)।';
$string['settings:zendesk_token'] = 'Zendesk API टोकन';
$string['settings:zendesk_token_desc'] = 'Zendesk प्रमाणीकरणका लागि API टोकन।';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'विषयेतर पहिचान';
$string['settings:offtopic_heading_desc'] = 'च्याटले विषयेतर वार्तालापहरू कसरी ह्यान्डल गर्छ कन्फिगर गर्नुहोस्।';
$string['settings:offtopic_enabled'] = 'विषयेतर पहिचान सक्षम गर्नुहोस्';
$string['settings:offtopic_enabled_desc'] = 'विषयेतर वार्तालापहरू पहिचान र पुनर्निर्देश गर्न AI लाई निर्देश दिनुहोस्।';
$string['settings:offtopic_max'] = 'अधिकतम विषयेतर सन्देशहरू';
$string['settings:offtopic_max_desc'] = 'कारबाही गर्नु अघि लगातार विषयेतर सन्देशहरूको सङ्ख्या।';
$string['settings:offtopic_action'] = 'विषयेतर कारबाही';
$string['settings:offtopic_action_desc'] = 'विषयेतर सीमा पुगेमा के गर्ने।';
$string['settings:offtopic_action_warn'] = 'चेतावनी दिनुहोस् र पुनर्निर्देश गर्नुहोस्';
$string['settings:offtopic_action_end'] = 'अस्थायी रूपमा पहुँच बन्द गर्नुहोस्';
$string['settings:offtopic_lockout_duration'] = 'लकआउट अवधि (मिनेट)';
$string['settings:offtopic_lockout_duration_desc'] = 'विषयेतर सीमा पार गरेपछि विद्यार्थीले AI ट्युटर पहुँच गुमाउने समय (मिनेटमा)। पूर्वनिर्धारित: ३० मिनेट।';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'अध्ययन योजना र स्मरणपत्रहरू';
$string['settings:studyplan_heading_desc'] = 'अध्ययन योजना सुविधाहरू र स्मरणपत्र सूचनाहरू कन्फिगर गर्नुहोस्।';
$string['settings:studyplan_enabled'] = 'अध्ययन योजना सक्षम गर्नुहोस्';
$string['settings:studyplan_enabled_desc'] = 'AI ट्युटरलाई उपलब्ध समयको आधारमा विद्यार्थीहरूका लागि व्यक्तिगत अध्ययन योजनाहरू सिर्जना गर्न मद्दत गर्न अनुमति दिनुहोस्।';
$string['settings:reminders_email_enabled'] = 'इमेल स्मरणपत्रहरू सक्षम गर्नुहोस्';
$string['settings:reminders_email_enabled_desc'] = 'विद्यार्थीहरूलाई इमेल मार्फत अध्ययन स्मरणपत्रहरूमा अप्ट इन गर्न अनुमति दिनुहोस्।';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsApp स्मरणपत्रहरू सक्षम गर्नुहोस्';
$string['settings:reminders_whatsapp_enabled_desc'] = 'विद्यार्थीहरूलाई WhatsApp मार्फत अध्ययन स्मरणपत्रहरूमा अप्ट इन गर्न अनुमति दिनुहोस् (WhatsApp API कन्फिगरेसन आवश्यक छ)।';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'WhatsApp सन्देशहरू पठाउनका लागि API एन्डपोइन्ट (जस्तै Twilio, MessageBird)। "to", "from", र "body" फिल्डहरू भएको JSON बडीसहित POST स्वीकार गर्नुपर्छ।';
$string['settings:whatsapp_api_token'] = 'WhatsApp API टोकन';
$string['settings:whatsapp_api_token_desc'] = 'WhatsApp API का लागि प्रमाणीकरण टोकन।';
$string['settings:whatsapp_from_number'] = 'WhatsApp प्रेषक नम्बर';
$string['settings:whatsapp_from_number_desc'] = 'WhatsApp सन्देशहरू पठाउन फोन नम्बर (देश कोड सहित, जस्तै +14155238886)।';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp अवरुद्ध देशहरू';
$string['settings:whatsapp_blocked_countries_desc'] = 'स्थानीय नियमहरूका कारण WhatsApp स्मरणपत्रहरू अनुमति नभएका अल्पविराम-पृथक ISO 3166-1 alpha-2 देश कोडहरू (जस्तै "CN,IR,KP")।';

// Reminder messages.
$string['reminder:email_subject'] = 'अध्ययन स्मरणपत्र: {$a}';
$string['reminder:email_body'] = 'नमस्ते {$a->firstname},

यो "{$a->coursename}" का लागि तपाईंको अध्ययन स्मरणपत्र हो।

{$a->message}

तपाईंको अध्ययन योजनाले यस पाठ्यक्रमका लागि साप्ताहिक {$a->hours_per_week} घन्टा सुझाउँछ।

उत्कृष्ट काम जारी राख्नुहोस्!

---
यी स्मरणपत्रहरू रोक्न, यहाँ क्लिक गर्नुहोस्: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = '{$a->coursename} का लागि अध्ययन स्मरणपत्र: {$a->message} (अनसब्सक्राइब: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'आजको अध्ययन फोकस: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'अध्ययन स्मरणपत्रहरूबाट अनसब्सक्राइब गर्नुहोस्';
$string['unsubscribe:success'] = 'तपाईं यस पाठ्यक्रमको अध्ययन स्मरणपत्रहरूबाट सफलतापूर्वक अनसब्सक्राइब गरिनुभयो।';
$string['unsubscribe:already'] = 'तपाईं पहिले नै यी स्मरणपत्रहरूबाट अनसब्सक्राइब गरिनुभएको छ।';
$string['unsubscribe:invalid'] = 'अमान्य वा समाप्त अनसब्सक्राइब लिङ्क।';
$string['unsubscribe:resubscribe'] = 'मन परिवर्तन गर्नुभयो? AI ट्युटर च्याट मार्फत स्मरणपत्रहरू पुनः सक्षम गर्न सक्नुहुन्छ।';

// Scheduled task.
$string['task:send_reminders'] = 'AI ट्युटर अध्ययन स्मरणपत्रहरू पठाउनुहोस्';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'विद्यार्थी अध्ययन योजनाहरू भण्डारण गर्छ।';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'अध्ययन योजनाको स्वामी प्रयोगकर्ताको ID।';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'अध्ययन योजना सम्बन्धित पाठ्यक्रम।';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'विद्यार्थीले अध्ययन गर्न योजना गरेको साप्ताहिक घन्टाहरू।';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'JSON ढाँचामा अध्ययन योजना विवरणहरू।';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'स्मरणपत्र प्राथमिकताहरू र सदस्यताहरू भण्डारण गर्छ।';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'स्मरणपत्रहरूमा सदस्यता लिएको प्रयोगकर्ताको ID।';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'स्मरणपत्र च्यानल (इमेल वा whatsapp)।';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'स्मरणपत्रहरूका लागि इमेल ठेगाना वा फोन नम्बर।';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'नियामक अनुपालनका लागि प्रयोगकर्ताको देश कोड।';

// Analytics dashboard.
$string['analytics:title'] = 'AI ट्युटर विश्लेषण';
$string['analytics:overview'] = 'अवलोकन';
$string['analytics:total_conversations'] = 'कुल वार्तालापहरू';
$string['analytics:total_messages'] = 'कुल सन्देशहरू';
$string['analytics:active_students'] = 'सक्रिय विद्यार्थीहरू';
$string['analytics:avg_messages_per_student'] = 'प्रति विद्यार्थी औसत सन्देशहरू';
$string['analytics:offtopic_rate'] = 'विषयेतर दर';
$string['analytics:escalation_count'] = 'समर्थनमा एस्केलेट गरियो';
$string['analytics:studyplan_adoption'] = 'अध्ययन योजना भएका विद्यार्थीहरू';
$string['analytics:usage_trends'] = 'प्रयोग प्रवृत्तिहरू';
$string['analytics:daily_messages'] = 'दैनिक सन्देश मात्रा';
$string['analytics:hotspots'] = 'पाठ्यक्रम हटस्पटहरू';
$string['analytics:hotspots_desc'] = 'विद्यार्थी प्रश्नहरूमा सबैभन्दा बढी उल्लेख गरिएका पाठ्यक्रम खण्डहरू। उच्च गणनाले विद्यार्थीहरूलाई थप समर्थन आवश्यक पर्ने क्षेत्रहरू संकेत गर्न सक्छ।';
$string['analytics:section'] = 'खण्ड';
$string['analytics:mention_count'] = 'उल्लेखहरू';
$string['analytics:common_prompts'] = 'सामान्य प्रम्प्ट ढाँचाहरू';
$string['analytics:common_prompts_desc'] = 'विद्यार्थीहरूबाट बारम्बार आउने प्रश्न ढाँचाहरू। पाठ्यक्रम सामग्रीमा प्रणालीगत अन्तरालहरू पहिचान गर्न यिनीहरू समीक्षा गर्नुहोस्।';
$string['analytics:prompt_pattern'] = 'ढाँचा';
$string['analytics:frequency'] = 'आवृत्ति';
$string['analytics:recent_activity'] = 'हालको गतिविधि';
$string['analytics:no_data'] = 'अझै कुनै विश्लेषण डेटा उपलब्ध छैन। विद्यार्थीहरूले AI ट्युटर प्रयोग गर्न थालेपछि डेटा देखिनेछ।';
$string['analytics:timerange'] = 'समय दायरा';
$string['analytics:last_7_days'] = 'अन्तिम ७ दिन';
$string['analytics:last_30_days'] = 'अन्तिम ३० दिन';
$string['analytics:all_time'] = 'सबै समय';
$string['analytics:export'] = 'डेटा निर्यात गर्नुहोस्';
$string['analytics:provider_comparison'] = 'AI प्रदायक तुलना';
$string['analytics:provider_comparison_desc'] = 'यस पाठ्यक्रममा प्रयोग गरिएका AI प्रदायकहरूमा प्रदर्शन तुलना गर्नुहोस्।';
$string['analytics:provider'] = 'प्रदायक';
$string['analytics:response_count'] = 'प्रतिक्रियाहरू';
$string['analytics:avg_response_length'] = 'औसत प्रतिक्रिया लम्बाइ';
$string['analytics:total_tokens'] = 'कुल टोकनहरू';
$string['analytics:avg_tokens'] = 'औसत टोकनहरू / प्रतिक्रिया';

// User settings.
$string['usersettings:title'] = 'AI पाठ्यक्रम सहायक - तपाईंको डेटा';
$string['usersettings:intro'] = 'आफ्नो AI ट्युटर च्याट डेटा र गोपनीयता सेटिङहरू व्यवस्थापन गर्नुहोस्';
$string['usersettings:privacy_info'] = 'AI ट्युटरसँग तपाईंका वार्तालापहरू पाठ्यक्रमभर निरन्तर समर्थन प्रदान गर्न भण्डारण गरिन्छन्। यस डेटामाथि तपाईंको पूर्ण नियन्त्रण छ र जुनसुकै समयमा मेटाउन सक्नुहुन्छ।';
$string['usersettings:usage_stats'] = 'तपाईंको प्रयोग तथ्याङ्क';
$string['usersettings:total_messages'] = 'कुल सन्देशहरू';
$string['usersettings:total_conversations'] = 'वार्तालापहरू';
$string['usersettings:messages'] = 'सन्देशहरू';
$string['usersettings:last_activity'] = 'अन्तिम गतिविधि';
$string['usersettings:delete_course_data'] = 'पाठ्यक्रम डेटा मेटाउनुहोस्';
$string['usersettings:no_data'] = 'तपाईंले अझै AI ट्युटर प्रयोग गर्नुभएको छैन। च्याट गर्न थालेपछि तपाईंको प्रयोग डेटा यहाँ देखिनेछ।';
$string['usersettings:delete_all_title'] = 'आफ्नो सबै डेटा मेटाउनुहोस्';
$string['usersettings:delete_all_warning'] = 'यसले सबै पाठ्यक्रमहरूमा तपाईंका सबै AI ट्युटर वार्तालापहरू स्थायी रूपमा मेटाउनेछ। यो कारबाही पूर्ववत गर्न सकिँदैन।';
$string['usersettings:delete_all_button'] = 'मेरो सबै डेटा मेटाउनुहोस्';
$string['usersettings:confirm_delete_course'] = 'के तपाईं "{$a}" पाठ्यक्रमका लागि आफ्नो सबै AI ट्युटर डेटा स्थायी रूपमा मेटाउन निश्चित हुनुहुन्छ? यो कारबाही पूर्ववत गर्न सकिँदैन।';
$string['usersettings:confirm_delete_all'] = 'के तपाईं सबै पाठ्यक्रमहरूमा आफ्नो सबै AI ट्युटर डेटा स्थायी रूपमा मेटाउन निश्चित हुनुहुन्छ? यो कारबाही पूर्ववत गर्न सकिँदैन।';
$string['usersettings:data_deleted'] = 'तपाईंको डेटा मेटाइयो।';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'नमस्कार, {$a}! म SOLA हुँ। आज म तपाईंलाई कसरी मद्दत गर्न सक्छु?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA खोल्नुहोस्';
$string['chat:change_avatar'] = 'अवतार परिवर्तन गर्नुहोस्';

$string['chat:quiz'] = 'अभ्यास प्रश्नोत्तरी लिनुहोस्';
$string['chat:quiz_setup_title'] = 'अभ्यास प्रश्नोत्तरी';
$string['chat:quiz_questions'] = 'प्रश्नहरूको सङ्ख्या';
$string['chat:quiz_topic'] = 'विषय';
$string['chat:quiz_topic_guided'] = 'AI-निर्देशित (तपाईंको प्रगतिमा आधारित)';
$string['chat:quiz_topic_default'] = 'हालको पाठ्यक्रम सामग्री';
$string['chat:quiz_topic_custom'] = 'कस्टम विषय…';
$string['chat:quiz_custom_placeholder'] = 'विषय वा प्रश्न प्रविष्ट गर्नुहोस्...';
$string['chat:quiz_start'] = 'प्रश्नोत्तरी सुरु गर्नुहोस्';
$string['chat:quiz_cancel'] = 'रद्द गर्नुहोस्';
$string['chat:quiz_loading'] = 'प्रश्नोत्तरी सिर्जना गर्दैछ…';
$string['chat:quiz_error'] = 'प्रश्नोत्तरी सिर्जना गर्न सकिएन। कृपया फेरि प्रयास गर्नुहोस्।';
$string['chat:quiz_correct'] = 'सही!';
$string['chat:quiz_wrong'] = 'गलत।';
$string['chat:quiz_next'] = 'अर्को प्रश्न';
$string['chat:quiz_finish'] = 'नतिजा हेर्नुहोस्';
$string['chat:quiz_score'] = 'प्रश्नोत्तरी सम्पन्न! तपाईंले {$a->total} मध्ये {$a->score} पाउनुभयो।';
$string['chat:quiz_summary'] = 'मैले भर्खरै "{$a->topic}" मा {$a->total} प्रश्नको अभ्यास प्रश्नोत्तरी सम्पन्न गरेँ र {$a->score}/{$a->total} पाएँ।';
$string['chat:quiz_topic_objectives'] = 'सिकाइ उद्देश्यहरू';
$string['chat:quiz_topic_modules'] = 'पाठ्यक्रम विषय';
$string['chat:quiz_subtopic_select'] = 'विशेष वस्तु छनोट गर्नुहोस्…';
$string['chat:quiz_topic_sections'] = 'पाठ्यक्रम खण्डहरू';
$string['chat:quiz_score_great'] = 'उत्कृष्ट काम! तपाईंलाई यो विषय साँच्चै राम्रोसँग थाहा छ।';
$string['chat:quiz_score_good'] = 'राम्रो प्रयास! आफ्नो बुझाइ सुदृढ पार्न समीक्षा जारी राख्नुहोस्।';
$string['chat:quiz_score_practice'] = 'अभ्यास जारी राख्नुहोस् — सम्बन्धित पाठ्यक्रम सामग्री समीक्षा गर्नुहोस् र फेरि प्रश्नोत्तरी लिनुहोस्।';
$string['chat:quiz_review_heading'] = 'समीक्षा';
$string['chat:quiz_retake'] = 'प्रश्नोत्तरी फेरि लिनुहोस्';
$string['chat:quiz_exit'] = 'प्रश्नोत्तरीबाट बाहिरिनुहोस्';
$string['chat:quiz_your_answer'] = 'तपाईंको उत्तर';
$string['chat:quiz_correct_answer'] = 'सही उत्तर';

$string['chat:starters_label'] = 'वार्तालाप सुरुवात';
$string['chat:starter_quiz'] = 'यसमा मलाई परीक्षण गर्नुहोस्';
$string['chat:starter_explain'] = 'यो व्याख्या गर्नुहोस्';
$string['chat:starter_key_concepts'] = 'मुख्य अवधारणाहरू';
$string['chat:starter_study_plan'] = 'अध्ययन योजना';
$string['chat:starter_help_me'] = 'AI सहायता';
$string['chat:starter_ai_project_coach'] = 'AI परियोजना प्रशिक्षक';
$string['chat:starter_ell_practice'] = 'कुराकानी अभ्यास';
$string['chat:starter_ell_pronunciation'] = 'ELL उच्चारण';
$string['chat:starter_ai_coach'] = 'AI कोच';
$string['chat:starter_speak'] = 'सुरुवात बोल्नुहोस्';

$string['chat:reset'] = 'फेरि सुरु गर्नुहोस्';

$string['chat:topic_picker_title'] = 'तपाईं के मा ध्यान दिन चाहनुहुन्छ?';
$string['chat:topic_picker_title_help'] = 'तपाईंलाई के मा मद्दत चाहिन्छ?';
$string['chat:topic_picker_title_explain'] = 'तपाईं मलाई के व्याख्या गर्न चाहनुहुन्छ?';
$string['chat:topic_picker_title_study'] = 'तपाईं कुन क्षेत्रमा ध्यान दिन चाहनुहुन्छ?';
$string['chat:topic_start'] = 'जारी राख्नुहोस्';

$string['chat:fullscreen'] = 'पूर्ण स्क्रिन';
$string['chat:exitfullscreen'] = 'पूर्ण स्क्रिनबाट बाहिरिनुहोस्';

$string['chat:language'] = 'भाषा परिवर्तन गर्नुहोस्';
$string['chat:settings_panel'] = 'सेटिङहरू';
$string['chat:settings_language'] = 'भाषा';
$string['chat:settings_avatar'] = 'अवतार';
$string['chat:settings_voice'] = 'आवाज';
$string['chat:settings_voice_admin'] = 'आवाज सेटिङहरू साइट प्रशासन प्यानलमा व्यवस्थापन गरिन्छ।';

$string['chat:voice_mode'] = 'आवाज मोड';
$string['chat:voice_end'] = 'आवाज सत्र समाप्त गर्नुहोस्';
$string['chat:voice_connecting'] = 'जोड्दैछ...';
$string['chat:voice_listening'] = 'सुन्दैछ...';
$string['chat:voice_speaking'] = 'SOLA बोल्दैछ...';
$string['chat:voice_idle'] = 'तयार';
$string['chat:voice_error'] = 'आवाज जडान असफल भयो। कृपया आफ्नो सेटिङहरू जाँच गर्नुहोस्।';
$string['chat:quiz_locked'] = 'शैक्षिक सत्यनिष्ठा समर्थन गर्न प्रश्नोत्तरीको क्रममा SOLA रोकिएको छ। शुभकामना!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'नोट्स';

// History panel.
$string['chat:history_title'] = 'नोट्स र कुराकानीको इतिहास';
$string['task:send_inactivity_reminders'] = 'साप्ताहिक निष्क्रियता सम्झाउने इमेलहरू पठाउनुहोस्';
$string['messageprovider:study_notes'] = 'अध्ययन सत्र टिप्पणीहरू';
$string['task:send_inactivity_reminders'] = 'साप्ताहिक निष्क्रियता सम्झाउने इमेलहरू पठाउनुहोस्';
$string['task:run_meta_ai_query'] = 'तालिकाबद्ध सिकाइ रडार विश्लेषण क्वेरी चलाउनुहोस्';
$string['messageprovider:study_notes'] = 'अध्ययन सत्र टिप्पणीहरू';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / फ्रन्टएन्ड डेलिभरी';
$string['settings:cdn_heading_desc'] = 'Moodle फाइल प्रणालीको सट्टा बाह्य CDN बाट SOLA फ्रन्टएन्ड सम्पत्तिहरू (JS/CSS) सेवा गर्नुहोस्। यसले प्लगइन अपग्रेड बिना फ्रन्टएन्ड अपडेटहरू सक्षम गर्दछ। स्थानीय प्लगइन फाइलहरू प्रयोग गर्न CDN URL खाली छोड्नुहोस्।';
$string['settings:cdn_url'] = 'CDN आधार URL';
$string['settings:cdn_url_desc'] = 'sola.min.js र sola.min.css होस्ट गरिएको आधार URL। उदाहरण: https://your-org.github.io/sola-cdn। स्थानीय प्लगइन फाइलहरू प्रयोग गर्न खाली छोड्नुहोस्।';
$string['settings:cdn_version'] = 'CDN सम्पत्ति संस्करण';
$string['settings:cdn_version_desc'] = 'Cache busting का लागि CDN URLs मा थपिने संस्करण स्ट्रिङ। प्रत्येक CDN डिप्लोय पछि अपडेट गर्नुहोस् (जस्तै 3.2.4 वा commit hash)।';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'समग्र प्रयोग';
$string['analytics:tab_bycourse'] = 'पाठ्यक्रम अनुसार';
$string['analytics:tab_comparison'] = 'AI बनाम गैर-प्रयोगकर्ता';
$string['analytics:tab_byunit'] = 'एकाइ अनुसार';
$string['analytics:tab_usagetypes'] = 'प्रयोगका प्रकार';
$string['analytics:tab_themes'] = 'विषय';
$string['analytics:tab_feedback'] = 'AI प्रतिक्रिया';
$string['analytics:total_students'] = 'जम्मा विद्यार्थी';
$string['analytics:active_users'] = 'सक्रिय AI प्रयोगकर्ता';
$string['analytics:msgs_per_student'] = 'प्रति विद्यार्थी सन्देश';
$string['analytics:avg_session'] = 'औसत सत्र अवधि';
$string['analytics:return_rate'] = 'फर्किने दर';
$string['analytics:total_sessions'] = 'जम्मा सत्र';
$string['analytics:thumbs_up'] = 'राम्रो';
$string['analytics:thumbs_down'] = 'नराम्रो';
$string['analytics:hallucination_flags'] = 'गलत जानकारी चिन्ह';
$string['analytics:msgs_to_resolution'] = 'समाधानसम्म सन्देश';
$string['analytics:helpful'] = 'सहयोगी';
$string['analytics:not_helpful'] = 'सहयोगी छैन';
$string['analytics:flag_hallucination'] = 'यो उत्तरमा गलत जानकारी छ';
$string['analytics:submit_rating'] = 'पठाउनुहोस्';
$string['analytics:thanks_feedback'] = 'तपाईंको प्रतिक्रियाको लागि धन्यवाद';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'यो पृष्ठ व्याख्या गर्नुहोस्';
$string['chat:starter_ask_anything'] = 'जे पनि सोध्नुहोस्';
$string['chat:starter_review_practice'] = 'समीक्षा र अभ्यास';
$string['chat:history_saved_subtitle'] = 'सुरक्षित गरिएका उत्तरहरू यस कोर्सको लागि यस उपकरणमा रहन्छन्।';
$string['chat:history_saved_empty'] = 'यहाँ हेर्न AI उत्तर सुरक्षित गर्नुहोस्।';
$string['chat:history_views_label'] = 'इतिहास दृश्यहरू';
$string['chat:history_view_saved'] = 'सुरक्षित';
$string['chat:history_view_recent'] = 'इतिहास';
$string['chat:debug_refresh'] = 'ताजा गर्नुहोस्';
$string['chat:debug_copy_all'] = 'सबै प्रतिलिपि गर्नुहोस्';
$string['chat:debug_close'] = 'बन्द गर्नुहोस्';
$string['chat:language_switch'] = 'भाषा परिवर्तन गर्नुहोस्';
$string['chat:language_dismiss'] = 'भाषा सुझाव खारेज गर्नुहोस्';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM प्रदायक चयन गर्नुहोस्';
$string['chat:llm_model_label'] = 'मोडेल';
$string['chat:llm_model_select'] = 'LLM मोडेल चयन गर्नुहोस्';
$string['chat:footer_usertesting'] = 'उपयोगिता परीक्षण';
$string['chat:footer_feedback'] = 'प्रतिक्रिया';
$string['chat:voice_panel_title'] = '{$a} सँग कुरा गर्नुहोस् (प्रयोगात्मक)';

// Additional translated strings.
$string['chat:debug_context'] = 'सन्दर्भ डिबग';
$string['chat:debug_context_browser'] = 'ब्राउजर स्न्यापशट';
$string['chat:debug_context_copy'] = 'कपी';
$string['chat:debug_context_prompt'] = 'सर्भर प्रतिक्रिया';
$string['chat:debug_context_request'] = 'अन्तिम SSE अनुरोध';
$string['chat:debug_context_toggle'] = 'टगल गर्नुहोस्';
$string['chat:history_empty'] = 'कुराकानी छैन।';
$string['chat:history_refresh'] = 'ताजा गर्नुहोस्';
$string['chat:history_subtitle'] = 'तपाईंका हालका सन्देशहरू।';
$string['chat:starter_explain_prompt'] = 'सबैभन्दा महत्वपूर्ण अवधारणा व्याख्या गर्नुहोस्';
$string['chat:starter_help_lesson'] = 'यो व्याख्या गर्नुहोस्';
$string['chat:starter_help_lesson_prompt'] = 'पाठ बुझ्न मद्दत गर्नुहोस्। मुख्य अवधारणा सारांश दिनुहोस्।';
$string['chat:starter_prompt_coach'] = 'AI प्रशिक्षक';
$string['chat:starter_quick_study'] = 'छिटो अध्ययन';
$string['chat:starter_study_plan_prompt'] = 'अध्ययन योजना बनाउन चाहन्छु। सोध्नुहोस्: (1) लक्ष्य, (2) समय। योजना अपडेट गर्नुहोस्।';
$string['chat:voice_copy'] = 'सिकाइ सहायकसँग कुराकानी।';
$string['chat:voice_ready'] = 'तयार';
$string['chat:voice_start'] = 'सुरु';
$string['chat:voice_title'] = 'SOLA सँग कुरा गर्नुहोस्';
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
$string['mobile_chip_concepts'] = 'मुख्य अवधारणा';
$string['mobile_chip_quiz'] = 'क्विज';
$string['mobile_chip_studyplan'] = 'अध्ययन योजना';
$string['mobile_clear'] = 'इतिहास खाली गर्नुहोस्';
$string['mobile_disabled'] = 'SOLA यो पाठ्यक्रमको लागि उपलब्ध छैन।';
$string['mobile_placeholder'] = 'प्रश्न सोध्नुहोस्...';
$string['mobile_welcome'] = 'नमस्ते, {$a}!';
$string['mobile_welcome_sub'] = 'म SOLA हुँ, तपाईंको सिकाइ सहायक। कसरी मद्दत गर्न सक्छु?';
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
$string['rubric:done'] = 'सकियो';
$string['rubric:encourage_high'] = 'उत्कृष्ट! यसरी नै जारी राख्नुहोस्!';
$string['rubric:encourage_low'] = 'राम्रो सुरुवात! नियमित अभ्यासले मद्दत गर्नेछ।';
$string['rubric:encourage_mid'] = 'राम्रो प्रयास! सुधारको लागि अभ्यास जारी राख्नुहोस्।';
$string['rubric:overall'] = 'समग्र';
$string['rubric:practice_again'] = 'फेरि अभ्यास गर्नुहोस्';
$string['rubric:score_title_conversation'] = 'कुराकानी अभ्यास स्कोर';
$string['rubric:score_title_pronunciation'] = 'उच्चारण अभ्यास स्कोर';
$string['rubric:scoring'] = 'मूल्याङ्कन गर्दै...';
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
$string['demo:title'] = 'परीक्षण वातावरण';
$string['demo:heading'] = 'परीक्षण वातावरण';
$string['demo:intro'] = 'यो पृष्ठले एउटा परीक्षण कोर्स सिर्जना गर्दछ जुन <strong>विद्यार्थीहरूबाट लुकेको</strong> (visible=0) छ र यसलाई नक्कली विद्यार्थीहरू, AI कुराकानीहरू, मूल्याङ्कनहरू र प्रतिक्रियाहरूले भर्दछ। वास्तविक भर्ना भएका विद्यार्थीलाई असर नगरी Analytics Dashboard पूर्वावलोकन गर्न वा प्लगइन परिवर्तनहरू प्रमाणित गर्न उपयोगी।';
$string['demo:step1'] = 'Step 1: परीक्षण कोर्स';
$string['demo:step2'] = 'Step 2: नक्कली विद्यार्थी र AI च्याटहरू थप्नुहोस्';
$string['demo:course_exists'] = 'परीक्षण कोर्स अवस्थित छ: <strong>{$a->fullname}</strong> (छोटो नाम <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'लुकाइएको';
$string['demo:badge_visible'] = 'विद्यार्थीहरूलाई देखिने';
$string['demo:no_course'] = 'कुनै परीक्षण कोर्स फेला परेन। सिर्जना गर्न तल क्लिक गर्नुहोस्।';
$string['demo:create_btn'] = 'लुकेको परीक्षण कोर्स सिर्जना गर्नुहोस्';
$string['demo:open_course'] = 'कोर्स खोल्नुहोस् &rarr;';
$string['demo:seed_intro'] = 'demo_student_001, demo_student_002, ... सिर्जना गर्दछ, तिनीहरूलाई परीक्षण कोर्समा भर्ना गर्दछ, र सिंथेटिक कुराकानी, सन्देशहरू, मूल्याङ्कन र प्रतिक्रिया सम्मिलित गर्दछ। थप डाटा थप्न फेरि चलाउनुहोस्, वा पुन: सुरु गर्न "पहिले खाली गर्नुहोस्" टिक गर्नुहोस्।';
$string['demo:users_label'] = 'प्रयोगकर्ताहरू';
$string['demo:weeks_label'] = 'हप्ताहरू';
$string['demo:clear_label'] = 'अवस्थित demo_* प्रयोगकर्ताहरू पहिले खाली गर्नुहोस्';
$string['demo:seed_btn'] = 'विद्यार्थी र च्याट थप्नुहोस्';
$string['demo:view_analytics'] = 'यस कोर्सको Analytics हेर्नुहोस् &rarr;';
$string['demo:footer'] = 'यहाँ सिर्जना गरिएका डाटा मानक Moodle प्रयोगकर्ता / भर्ना तालिकाहरू र प्लगइनको आफ्नै कुराकानी तालिकाहरूमा रहन्छन्। सबै नक्कली प्रयोगकर्ताहरूको प्रयोगकर्ता नाम <code>demo_student_</code> ले सुरु हुन्छ, जसले फिल्टर वा हटाउन सजिलो बनाउँछ। हटाउन, "अवस्थित demo_* प्रयोगकर्ताहरू पहिले खाली गर्नुहोस्" चेक गरेर seed चरण फेरि चलाउनुहोस्।';
$string['demo:course_fullname'] = 'SOLA परीक्षण कोर्स (लुकाइएको)';
$string['demo:notify_created'] = 'परीक्षण कोर्स तयार: {$a->fullname} (id {$a->id})।';
$string['demo:notify_create_fail'] = 'कोर्स सिर्जना गर्न असफल: {$a}';
$string['demo:notify_seeded'] = 'थपियो: {$a->users} प्रयोगकर्ताहरू, {$a->conversations} कुराकानीहरू, {$a->messages} सन्देशहरू, {$a->ratings} मूल्याङ्कन, {$a->feedback} प्रतिक्रिया प्रविष्टिहरू।';
$string['demo:notify_seed_fail'] = 'डाटा थप्न असफल: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'टोकन लागत र विश्लेषण &rarr;';
$string['toc:testing'] = 'परीक्षण वातावरण &rarr;';
$string['toc:back_to_course'] = '&larr; {$a} मा फर्कनुहोस्';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext बाइनरी फेला परेन; PDF निकासी असक्षम छ।';
$string['rag:pdftotext_available'] = '{$a} मा pdftotext पत्ता लाग्यो।';
$string['rag:docx_unavailable'] = 'PHP ZipArchive विस्तार उपलब्ध छैन; DOCX निकासी असक्षम छ।';
$string['rag:h5p_unavailable'] = 'H5P सामग्री पढ्न सकिएन; छोडिँदै।';
$string['rag:scorm_too_large'] = 'SCORM प्याकेज कन्फिगर गरिएको साइज सीमा ({$a} MB) भन्दा बढी छ; छोडिँदै।';
$string['rag:scorm_unzip_failed'] = 'SCORM प्याकेज अनजिप गर्न सकिएन; छोडिँदै।';
$string['rag:transcript_fetch_failed'] = '{$a} बाट ट्रान्सक्रिप्ट ल्याउन सकिएन।';
$string['rag:transcript_cf_challenge'] = 'ट्रान्सक्रिप्ट URL लाई Cloudflare चुनौतीले रोकेको छ: {$a}।';
$string['rag:embed_detected'] = 'इम्बेड गरिएको मिडिया पत्ता लाग्यो: {$a}';
$string['rag:embed_transcript_attached'] = '{$a} को लागि ट्रान्सक्रिप्ट संलग्न गरियो';

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
