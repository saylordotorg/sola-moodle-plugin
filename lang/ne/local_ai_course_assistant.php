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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'AI प्रदायक';
$string['settings:provider_desc'] = 'च्याट पूर्णताहरूका लागि प्रयोग गर्ने AI प्रदायक छनोट गर्नुहोस्।';
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
$string['chat:clear'] = 'इतिहास हटाउनुहोस्';
$string['chat:clear_confirm'] = 'के तपाईं यस पाठ्यक्रमको आफ्नो च्याट इतिहास हटाउन निश्चित हुनुहुन्छ?';
$string['chat:copy'] = 'वार्तालाप प्रतिलिपि गर्नुहोस्';
$string['chat:copied'] = 'वार्तालाप क्लिपबोर्डमा प्रतिलिपि गरियो';
$string['chat:copy_failed'] = 'वार्तालाप प्रतिलिपि गर्न असफल भयो';
$string['chat:greeting'] = 'नमस्ते! म यस पाठ्यक्रमको लागि तपाईंको AI ट्युटर हुँ। आज म तपाईंलाई कसरी मद्दत गर्न सक्छु?';
$string['chat:thinking'] = 'सोच्दै छु...';
$string['chat:error'] = 'माफ गर्नुहोस्, केही गडबड भयो। कृपया फेरि प्रयास गर्नुहोस्।';
$string['chat:error_auth'] = 'प्रमाणीकरण त्रुटि। कृपया आफ्नो प्रशासकलाई सम्पर्क गर्नुहोस्।';
$string['chat:error_ratelimit'] = 'धेरै अनुरोधहरू। कृपया एक क्षण प्रतीक्षा गर्नुहोस् र फेरि प्रयास गर्नुहोस्।';
$string['chat:error_unavailable'] = 'AI सेवा अस्थायी रूपमा अनुपलब्ध छ। कृपया पछि फेरि प्रयास गर्नुहोस्।';
$string['chat:error_notconfigured'] = 'AI ट्युटर अझै कन्फिगर गरिएको छैन। कृपया आफ्नो प्रशासकलाई सम्पर्क गर्नुहोस्।';
$string['chat:expand'] = 'च्याट विस्तार गर्नुहोस्';
$string['chat:collapse'] = 'च्याट संकुचित गर्नुहोस्';
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

$string['chat:greeting'] = 'नमस्कार, {$a}! म SOLA हुँ, तपाईंको Saylor अनलाइन लर्निङ असिस्ट्यान्ट।';
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
$string['task:send_inactivity_reminders'] = 'साप्ताहिक निष्क्रियता सम्झाउने इमेलहरू पठाउनुहोस्';
$string['messageprovider:study_notes'] = 'अध्ययन सत्र टिप्पणीहरू';
$string['task:send_inactivity_reminders'] = 'साप्ताहिक निष्क्रियता सम्झाउने इमेलहरू पठाउनुहोस्';
$string['messageprovider:study_notes'] = 'अध्ययन सत्र टिप्पणीहरू';
