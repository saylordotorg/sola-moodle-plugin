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
$string['attachment:attach'] = 'संलग्न गर्नुहोस्';
$string['attachment:attach_image_or_pdf'] = 'छवि वा PDF संलग्न गर्नुहोस्';
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
$string['chat:quiz_topic_adaptive']      = 'अनुकूली — मेरो कमजोर पक्षहरूमा ध्यान दिनुहोस्';
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
$string['settings:provider_together'] = 'Together AI (Llama 3.1 8B/70B/405B Turbo, Mistral, Qwen)';
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
$string['chat:voice_panel_title']       = 'Talk with {$a}';

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
$string['usersettings:download'] = 'मेरो {$a} डेटा डाउनलोड गर्नुहोस्';
$string['usersettings:download_help'] = 'तपाईंको खातासँग जोडिएका सबै {$a} रेकर्डहरूको पूर्ण JSON प्रति डाउनलोड गर्नुहोस्: कुराकानी, सन्देशहरू, मूल्याङ्कन, अध्ययन योजना, रिमाइन्डर, अभ्यास अंक, सर्वेक्षण उत्तर, प्रोफाइल र अडिट प्रविष्टिहरू।';
$string['usersettings:privacy_notice_link'] = '{$a} गोपनीयता सूचना पढ्नुहोस्';
$string['privacy:title'] = '{$a} गोपनीयता सूचना';
$string['admin:user_data:title'] = '{$a} — विद्यार्थी डेटा निर्यात र हटाउने';
$string['admin:user_data:intro'] = 'GDPR धारा १५ (पहुँच) वा धारा १७ (मेटाउने) अनुरोधको लागि सञ्चालन मार्ग। मूडल प्रयोगकर्ता आईडीद्वारा विद्यार्थी खोज्नुहोस्, यो प्लगइनले राखेका पङ्क्तिहरू समीक्षा गर्नुहोस्, अनि निर्यात वा हटाउनुहोस्।';
$string['admin:user_data:search_label'] = 'मूडल प्रयोगकर्ता आईडी';
$string['admin:user_data:lookup'] = 'खोज्नुहोस्';
$string['admin:user_data:not_found'] = 'त्यो आईडीसँग कुनै प्रयोगकर्ता फेला परेन।';
$string['admin:user_data:download'] = 'सबै विद्यार्थी डेटा JSON को रूपमा डाउनलोड गर्नुहोस्';
$string['admin:user_data:purge'] = 'यस प्रयोगकर्ताको सबै विद्यार्थी डेटा हटाउनुहोस्';
$string['admin:user_data:confirm_purge'] = '{$a}को हरेक रेकर्ड स्थायी रूपमा मेटाउने? यसले कुराकानी, सन्देश, मूल्याङ्कन, अध्ययन योजना, रिमाइन्डर, प्रोफाइल, अभ्यास अंक, सर्वेक्षण, अडिट प्रविष्टि र प्रतिक्रियामा क्यासकेड हुनेछ। यो कार्य फिर्ता गर्न मिल्दैन।';
$string['admin:user_data:purged'] = 'चयन गरिएको प्रयोगकर्ताको सबै डेटा हटाइयो।';
$string['chat:consent_heading'] = '{$a->product}सँग कुराकानी सुरु गर्नु अघि';
$string['chat:consent_body'] = '{$a->product} एउटा AI-संचालित अध्ययन सहायक हो। तपाईंका सन्देशहरू र {$a->product}का जवाफहरू {$a->institution}को मूडल डाटाबेसमा भण्डारण हुन्छन्, र पछिल्ला दश पटकका कुराकानीहरू तपाईंका प्रश्नको उत्तर दिनको लागि स्वीकृत AI मोडेल प्रदायकलाई पठाइन्छ। व्यक्तिगतीकरणको लागि तपाईंको पहिलो नाम मात्र साझा गरिन्छ; अरू पहिचानयुक्त जानकारी AI प्रदायकलाई पठाइँदैन। तपाईं जुनसुकै बेला {$a->product} डाउनलोड, मेटाउन वा प्रयोग बन्द गर्न सक्नुहुन्छ।';
$string['chat:consent_accept'] = 'मैले बुझेँ, {$a} सुरु गर्नुहोस्';
$string['chat:consent_privacy_link'] = 'पूर्ण गोपनीयता सूचना पढ्नुहोस्';
$string['task:audit_cleanup'] = 'AI Course Assistant अडिट तालिका सफाइ';
$string['task:conversation_retention'] = 'AI Course Assistant कुराकानी अवधारण स्वीपर';
$string['settings:audit_retention_days'] = 'अडिट लग अवधारण (दिन)';
$string['settings:audit_retention_days_desc'] = 'दैनिक तालिकाबद्ध कार्यले यस भन्दा पुरानो अडिट पङ्क्तिहरू हटाउँछ। ० ले यसलाई निष्क्रिय गर्छ। पूर्वनिर्धारित ३६५।';
$string['settings:conversation_retention_days'] = 'कुराकानी अवधारण (दिन)';
$string['settings:conversation_retention_days_desc'] = 'दैनिक तालिकाबद्ध कार्यले अन्तिम परिमार्जन समयचिह्न यस भन्दा पुरानो भएका कुराकानी पङ्क्तिहरू हटाउँछ। ० ले यसलाई निष्क्रिय गर्छ। पूर्वनिर्धारित ७३०।';
$string['settings:ssrf_trusted_endpoints'] = 'SSRF विश्वसनीय अन्त्यबिन्दुहरू';
$string['settings:ssrf_trusted_endpoints_desc'] = 'प्रति लाइन एक URL। सूचीबद्ध होस्टहरूले SOLA को SSRF प्रमाणक मा loopback / निजी-IP / https-मात्र जाँचहरू बाइपास गर्छन्। यो केवल तपाईंले नियन्त्रण गर्ने नेटवर्कमा स्व-होस्ट गरिएका LLM को लागि प्रयोग गर्नुहोस् — उदाहरणका लागि स्थानीय Ollama को लागि <code>http://localhost:11434</code>, उही VPC मा vLLM pod को लागि <code>http://10.0.0.5:8000</code>। तुलना scheme + host + port सँग मिल्छ; कुनै पनि मार्ग बेवास्ता गरिन्छ। पूर्वनिर्धारित खाली (सबै आन्तरिक ब्लक गर्छ)। <code>#</code> ले सुरु हुने लाइनहरू टिप्पणीहरू हुन्।';
$string['task:learner_weekly_digest']    = 'AI पाठ्यक्रम सहायक - साप्ताहिक शिक्षार्थी संक्षेप';
$string['learner_digest:subject']        = '{$a->course} सँग तपाईंको साता - {$a->product}';
$string['learner_digest:optin_offer']    = 'अगाडि के मा ध्यान दिने भन्ने सहित छोटो साप्ताहिक इमेल चाहनुहुन्छ?';
$string['next_best_action:get_started']           = '{$a->title} बाट सुरु गर्नुहोस्। मलाई खोल्नुहोस् र सोध्नुहोस् "{$a->title} मा मलाई मद्दत गर्नुहोस्"।';
$string['next_best_action:get_started_with_module'] = '{$a->title} बाट सुरु गर्नुहोस्। मोड्युल "{$a->module}" ले यसलाई कभर गर्छ।';
$string['next_best_action:review']                = '{$a->title} को आधारभूत कुरा दोहोर्याउनुहोस् — मलाई खोल्नुहोस् र सोध्नुहोस् "मलाई {$a->title} नयाँ जस्तै व्याख्या गर्नुहोस्"।';
$string['next_best_action:review_with_module']    = '"{$a->module}" मा {$a->title} को आधारभूत कुरा दोहोर्याउनुहोस्, त्यसपछि कुनै प्रश्न साथ मलाई खोल्नुहोस्।';
$string['next_best_action:practice']              = '{$a->title} मा तपाईंसँग जे छ त्यसमा निर्माण गर्नुहोस्। मलाई खोल्नुहोस् र सोध्नुहोस् "{$a->title} को लागि समाधान भएको उदाहरण दिनुहोस्"।';
$string['next_best_action:practice_with_module']  = '"{$a->module}" सँगै {$a->title} अभ्यास गर्नुहोस्। समाधान भएका उदाहरणहरूको लागि मलाई खोल्नुहोस्।';
$string['next_best_action:quiz']                  = 'द्रुत क्विजको साथ {$a->title} लाई बलियो बनाउनुहोस्। मलाई खोल्नुहोस् र "मलाई क्विज गर्नुहोस् — अनुकूली" छनोट गर्नुहोस्।';
$string['next_best_action:quiz_with_module']      = 'द्रुत क्विजको साथ {$a->title} लाई बलियो बनाउनुहोस्। मोड्युल "{$a->module}" यो जहाँ रहन्छ।';
$string['next_best_action:empty_state']           = 'तपाईं अहिले प्रत्येक उद्देश्यमा शानदार देखिँदै हुनुहुन्छ — सम्झाउनको लागि केही छैन। जारी राख्नुहोस्।';
$string['next_best_action:header']                = 'अबको लागि ध्यान केन्द्रित गर्नका लागि {$a} कुराहरू यहाँ छन्:';
$string['learner_digest:unsubscribe_done_title']  = 'सदस्यता रद्द गरियो';
$string['learner_digest:unsubscribe_done_body']   = 'भयो — तपाईंले यो पाठ्यक्रमको लागि {$a->product} बाट थप साप्ताहिक इमेलहरू प्राप्त गर्नुहुने छैन। तपाईं आफ्नो पाठ्यक्रमको च्याट विन्डोबाट जुनसुकै बेला फेरि सदस्यता लिन सक्नुहुन्छ।';
$string['learner_digest:unsubscribe_invalid_title'] = 'सदस्यता रद्द लिङ्क अब वैध छैन';
$string['learner_digest:unsubscribe_invalid_body']  = 'यो सदस्यता रद्द लिङ्क समाप्त भएको छ वा बिग्रेको छ। तपाईं आफ्नो पाठ्यक्रम सेटिङबाट इमेल प्राथमिकताहरू व्यवस्थापन गर्न सक्नुहुन्छ।';
$string['active_learners:line']                   = '{$a} अरूहरू अहिले यो पाठ्यक्रम अध्ययन गर्दैछन्।';
$string['active_learners:line_global']             = '{$a} अरूहरू अहिले अध्ययन गर्दैछन्।';
$string['settings:active_learners_scope']          = 'सक्रिय शिक्षार्थी सूचकको दायरा';
$string['settings:active_learners_scope_desc']     = 'च्याट सुरुकर्ताहरू माथिको "अरूहरू अहिले अध्ययन गर्दैछन्" सूचकले उही पाठ्यक्रममा रहेका शिक्षार्थीहरू मात्र वा पूरा साइटभरि रहेका शिक्षार्थीहरू गणना गर्छ। पूर्वनिर्धारित <strong>विश्वव्यापी</strong>।';
$string['settings:active_learners_scope_global']   = 'विश्वव्यापी (कुनै पनि पाठ्यक्रम)';
$string['settings:active_learners_scope_course']   = 'प्रति-पाठ्यक्रम मात्र';
$string['learner_digest:optin_yes']      = 'हो, मलाई साप्ताहिक इमेल पठाउनुहोस्';
$string['learner_digest:optin_no']       = 'पर्दैन धन्यवाद';
$string['learner_digest:optin_thanks']   = 'भयो। हरेक सोमबार साप्ताहिक संक्षेप पाउनुहुनेछ।';
$string['learner_digest:optin_declined'] = 'भयो। कुनै इमेल छैन - जब समीक्षा गर्न चाहनुहुन्छ मलाई खोल्नुहोस्।';
$string['settings:xai_proxy_url'] = 'xAI Realtime प्रोक्सी URL';
$string['settings:xai_proxy_url_desc'] = 'SOLA xAI Realtime प्रोक्सी सेवाको सार्वजनिक wss URL (उदाहरणको लागि wss://voice.example.com/xai-rt/rt)। यो JWT रहस्यसँगै सेट गरिएमा, xAI आवाज प्रोक्सी मार्फत मार्ग गरिन्छ र मास्टर xAI API कुञ्जी कहिल्यै ब्राउजरमा पुग्दैन। प्रत्यक्ष जडानमा फर्किन यो खाली छोड्नुहोस् (उत्पादनको लागि सिफारिस गरिँदैन)।';
$string['settings:xai_proxy_jwt_secret'] = 'xAI Realtime प्रोक्सी JWT रहस्य';
$string['settings:xai_proxy_jwt_secret_desc'] = 'xAI Realtime प्रोक्सीको लागि छोटो-अवधिको सत्र टोकनमा हस्ताक्षर गर्न प्रयोग गरिने HS256 साझा रहस्य। यो Cloudflare Worker को MOODLE_JWT_SECRET रहस्यसँग मेल खानुपर्छ। समय-समयमा घुमाउनुहोस्।';
$string['admin:vendor_dpa:title'] = '{$a} — विक्रेता DPA स्थिति';
$string['admin:vendor_dpa:intro'] = 'हरेक AI प्रदायक ड्राइभरको लागि प्रशिक्षण अप्ट-आउट, DPA र अवधारण अवस्था। तपाईंको साइटमा कुन ड्राइभरहरू सक्षम गर्ने भन्ने निर्णय गर्न यो प्रयोग गर्नुहोस्। टियर २ र माथिको रुटिङका लागि हस्ताक्षरित DPA र सम्झौताबद्ध प्रशिक्षण अप्ट-आउट चाहिन्छ।';
$string['admin:vendor_dpa:maintenance_note'] = 'यो तालिका classes/vendor_registry.php मा सम्भार गरिन्छ। विक्रेताको ToS परिवर्तन भएमा यसलाई अद्यावधिक गर्नुहोस्।';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'डेटा संरक्षण अधिकारीको इमेल';
$string['settings:dpo_email_desc'] = 'विद्यार्थी-सम्मुख गोपनीयता सूचनामा "सम्पर्क" अन्तर्गत देखाइने सम्पर्क इमेल। पङ्क्ति लुकाउन यो खाली छोड्नुहोस्। पुनःब्रान्डेड स्थापनाहरूले यो आफ्नै DPO तर्फ इङ्गित गर्नुपर्छ।';
$string['settings:privacy_external_url'] = 'संस्थागत गोपनीयता पृष्ठ URL';
$string['settings:privacy_external_url_desc'] = 'संस्थागत स्तरको गोपनीयता पृष्ठको लिङ्क, विद्यार्थी-सम्मुख गोपनीयता सूचनामा "सम्पर्क" अन्तर्गत देखाइन्छ। पङ्क्ति लुकाउन यो खाली छोड्नुहोस्।';
$string['settings:privacy_notice_override'] = 'गोपनीयता सूचना ओभरराइड (HTML)';
$string['settings:privacy_notice_override_desc'] = 'सेट गरिएमा, यो HTML ले /local/ai_course_assistant/privacy.php मा रेन्डर गरिने पूर्वनिर्धारित ब्रान्डेड गोपनीयता सूचना प्रतिस्थापन गर्छ। कोड सम्पादन नगरीकनै तपाईंको संस्थाको कानुनी समीक्षा गरिएको पाठ लागू गर्न यो प्रयोग गर्नुहोस्। पूर्वनिर्धारित सूचना प्रयोग गर्न यो खाली छोड्नुहोस्, जसले सात ब्रान्डिङ कन्फिग कुञ्जीहरूबाट पाठ निकाल्छ।';
$string['objectives:title'] = 'सिकाइ उद्देश्यहरू र दक्षता';
$string['objectives:toggles_heading'] = 'दक्षता ट्र्याकिङ';
$string['objectives:toggle_master'] = 'यस पाठ्यक्रमका लागि दक्षता ट्र्याकिङ सक्षम गर्नुहोस्';
$string['objectives:toggle_chip'] = 'विद्यार्थीहरूलाई सिकाइ दक्षता चिप देखाउनुहोस्';
$string['objectives:toggle_chip_help'] = 'वैकल्पिक। बन्द हुँदा, दक्षताले सहायकलाई पर्दा पछाडि निर्देशित गरिरहन्छ तर सिकारुहरूले कुनै सङ्केतक देख्दैनन्।';
$string['objectives:toggled'] = 'सेटिङ अद्यावधिक गरियो।';
$string['objectives:detected_heading'] = '{$a->source}बाट {$a->count} सिकाइ उद्देश्यहरू पहिचान गरियो।';
$string['objectives:source_competency'] = 'मूडल कम्पिटेन्सीहरू';
$string['objectives:source_summary'] = 'पाठ्यक्रम सारांश';
$string['objectives:source_section'] = 'खण्ड वा पहिलो पृष्ठको सामग्री';
$string['objectives:source_page'] = 'पाठ्यक्रम पृष्ठ';
$string['objectives:source_llm'] = 'AI निकासी';
$string['objectives:source_manual'] = 'म्यानुअल प्रविष्टि';
$string['objectives:source_none'] = 'कुनै स्वचालित स्रोत छैन';
$string['objectives:import_detected'] = 'यी पहिचान गरिएका उद्देश्यहरू आयात गर्नुहोस्';
$string['objectives:import_llm'] = 'AI सँग उद्देश्यहरू निकाल्नुहोस्';
$string['objectives:llm_empty'] = 'AI निकासीले कुनै उद्देश्य फिर्ता गरेन। पछि फेरि प्रयास गर्नुहोस् वा म्यानुअल रूपमा प्रविष्ट गर्नुहोस्।';
$string['objectives:imported'] = '{$a} उद्देश्यहरू आयात गरिए।';
$string['objectives:none_detected'] = 'कुनै सिकाइ उद्देश्य स्वचालित रूपमा पहिचान भएन। तल म्यानुअल रूपमा प्रविष्ट गर्नुहोस्, वा AI निकासी प्रयोग गर्नुहोस्।';
$string['objectives:list_heading'] = 'हालका उद्देश्यहरू';
$string['objectives:col_code'] = 'कोड';
$string['objectives:col_title'] = 'शीर्षक';
$string['objectives:col_source'] = 'स्रोत';
$string['objectives:col_actions'] = 'कार्यहरू';
$string['objectives:add_heading'] = 'उद्देश्य थप्नुहोस्';
$string['objectives:add_submit'] = 'उद्देश्य थप्नुहोस्';
$string['objectives:saved'] = 'उद्देश्य सुरक्षित गरियो।';
$string['objectives:deleted'] = 'उद्देश्य मेटाइयो।';
$string['objectives:delete_confirm'] = 'यो उद्देश्य र यसको सबै प्रयास इतिहास मेटाउने?';
$string['objectives:delete_all'] = 'यस पाठ्यक्रमका सबै उद्देश्य मेटाउनुहोस्';
$string['objectives:delete_all_confirm'] = 'यस पाठ्यक्रमका हरेक उद्देश्य र सबै प्रयास इतिहास मेटाउने? फिर्ता गर्न मिल्दैन।';
$string['objectives:deleted_all'] = 'यस पाठ्यक्रमका सबै उद्देश्य मेटाइए।';
$string['mastery:chip_aria'] = 'सिकाइ दक्षता स्थिति';
$string['mastery:popover_aria'] = 'सिकाइ दक्षता विवरण';
$string['mastery:chip_label'] = '{$a->total} मध्ये {$a->mastered} दक्ष';
$string['mastery:status_mastered'] = 'दक्ष';
$string['mastery:status_learning'] = 'जारी छ';
$string['mastery:status_not_started'] = 'सुरु भएको छैन';
$string['mastery:popover_empty'] = 'यस पाठ्यक्रमका लागि कुनै सिकाइ उद्देश्य कन्फिगर गरिएको छैन।';
$string['settings:mastery_heading'] = 'दक्षता ट्र्याकिङ';
$string['settings:mastery_heading_desc'] = 'पाठ्यक्रम-अनुसार अप्ट-इन सुविधा जसले क्विज जवाफ र सहायक कुराकानी पटकहरूलाई पाठ्यक्रमको सिकाइ उद्देश्यहरूविरुद्ध ट्याग गर्छ, त्यसपछि एक संकुचित दक्षता स्न्यापशट प्रश्नकर्तालाई निर्देशित गर्न प्रणाली प्रम्प्टमा फिर्ता पठाउँछ। पूर्वनिर्धारित रूपमा सूक्ष्म: पाठ्यक्रम-अनुसार चिप टगल अन नभएसम्म सिकारुहरूले केही देख्दैनन्।';
$string['settings:mastery_threshold'] = 'दक्षता थ्रेसहोल्ड';
$string['settings:mastery_threshold_desc'] = 'चलायमान सटीकता यो वा यो भन्दा माथि भएमा उद्देश्यलाई दक्ष मानिन्छ। ०.० देखि १.०। पूर्वनिर्धारित ०.८५।';
$string['settings:mastery_window'] = 'प्रयास विन्डो';
$string['settings:mastery_window_desc'] = 'चलायमान सटीकतामा भार दिनको लागि उद्देश्य प्रति सबैभन्दा हालका प्रयासहरूको सङ्ख्या। पूर्वनिर्धारित ८।';
$string['settings:mastery_decay_enabled']        = 'दक्षता क्षय सक्षम गर्नुहोस्';
$string['settings:mastery_decay_enabled_desc']   = 'सक्रिय हुँदा, दक्षता स्कोरहरू सबैभन्दा हालैको प्रयास टाइमस्ट्याम्पको विरुद्ध समयसँगै घट्दछन्। पहिले निपुण भएको उद्देश्य पर्याप्त समय बितेपछि "सिकिरहेको" मा फर्किन्छ। "सिकिरहेको" भन्दा तल झर्दैन। <strong>v4.0 मा पूर्वनिर्धारित बन्द।</strong>';
$string['settings:mastery_decay_half_life_days'] = 'दक्षता क्षय आधा-आयु (दिन)';
$string['settings:mastery_decay_half_life_days_desc'] = 'दिनहरूमा आधा-आयु। स्कोरलाई 0.5 ^ (अन्तिम प्रयासदेखि दिनहरू / आधा-आयु) ले गुणन गरिन्छ। पूर्वनिर्धारित 30। क्षय सक्षम हुँदा मात्र प्रयोग गरिन्छ।';
$string['settings:mastery_classifier_model'] = 'वर्गीकरण मोडेल';
$string['settings:mastery_classifier_model_desc'] = 'सहायकका पटकहरूलाई उद्देश्यविरुद्ध वर्गीकरण गर्न प्रयोग हुने मोडेल। पूर्वनिर्धारित AI प्रदायक मोडेल इन्हेरिट गर्न खाली छोड्नुहोस्; अन्यथा gpt-4o-mini जस्तो सस्तो मोडेल निर्दिष्ट गर्नुहोस्।';
$string['settings:mastery_classifier_weight'] = 'वर्गीकरण भार';
$string['settings:mastery_classifier_weight_desc'] = 'क्विज प्रयास (१.०) सापेक्षमा कुराकानी प्रयास कति गनिन्छ। पूर्वनिर्धारित ०.३।';
$string['settings:mastery_classifier_threshold'] = 'वर्गीकरण विश्वास थ्रेसहोल्ड';
$string['settings:mastery_classifier_threshold_desc'] = 'कुराकानी प्रयास रेकर्ड गर्न आवश्यक न्यूनतम वर्गीकरण विश्वास। ०.० देखि १.०। पूर्वनिर्धारित ०.७।';
$string['chat:mode_progress'] = 'प्रगति';
$string['objectives:toggle_dashboard'] = 'विद्यार्थीहरूलाई प्रगति ड्यासबोर्ड ट्याब देखाउनुहोस्';
$string['objectives:toggle_dashboard_help'] = 'वैकल्पिक। विजेट भित्र च्याट / आवाज / इतिहासको छेउमा प्रगति ट्याब थप्छ। ट्याबले सिकारुहरूलाई कुन उद्देश्यहरू दक्षता हासिल गरेका, कुन जारी छन्, र कुन अहिलेसम्म सुरु गरिएका छैनन् भनेर देखाउँछ।';
$string['mastery:dashboard_title'] = 'तपाईंको सिकाइ प्रगति';
$string['mastery:dashboard_subtitle'] = 'दक्षता तपाईंको क्विज जवाफ र च्याट अभ्यासबाट मापन गरिन्छ। जारी राख्नुहोस् — गहिराइले फैलावटलाई जित्छ।';
$string['mastery:dashboard_refresh'] = 'पुनःताजा गर्नुहोस्';
$string['mastery:section_mastered'] = 'दक्ष';
$string['mastery:section_learning'] = 'जारी छ';
$string['mastery:section_not_started'] = 'अहिलेसम्म सुरु भएको छैन';
$string['mastery:summary_label'] = '{$a->total} उद्देश्यमध्ये {$a->mastered} दक्ष';
$string['mastery:ask_about'] = 'यसबारे सोध्नुहोस्';
$string['mastery:celebrate'] = 'तपाईंले यस पाठ्यक्रमका हरेक उद्देश्यमा दक्षता हासिल गर्नुभएको छ। उत्कृष्ट काम।';
$string['mastery:ask_template'] = 'यो उद्देश्यमा अभ्यास गर्न र मेरो बुझाइ गहन बनाउन मलाई मद्दत गर्नुहोस्: {$a}.';
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
