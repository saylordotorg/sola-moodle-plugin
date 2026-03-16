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
 * Language strings for local_ai_course_assistant — Hindi (hi).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'AI पाठ्यक्रम सहायक';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'प्रत्येक उपयोगकर्ता और पाठ्यक्रम के लिए AI ट्यूटर चैट वार्तालाप संग्रहीत करता है।';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'वार्तालाप के स्वामी उपयोगकर्ता की ID।';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'जिस पाठ्यक्रम से वार्तालाप संबंधित है उसकी ID।';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'वार्तालाप का शीर्षक।';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'वार्तालाप बनाने का समय।';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'वार्तालाप में अंतिम संशोधन का समय।';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'AI ट्यूटर चैट वार्तालापों में व्यक्तिगत संदेश संग्रहीत करता है।';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'संदेश भेजने वाले उपयोगकर्ता की ID।';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'जिस पाठ्यक्रम से संदेश संबंधित है उसकी ID।';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'संदेश प्रेषक की भूमिका (उपयोगकर्ता या सहायक)।';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'संदेश की सामग्री।';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'संदेश के लिए उपयोग किए गए टोकन की संख्या।';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'संदेश बनाने का समय।';

// Capabilities.
$string['ai_course_assistant:use'] = 'AI ट्यूटर चैट का उपयोग करें';
$string['ai_course_assistant:viewanalytics'] = 'AI ट्यूटर चैट विश्लेषण देखें';
$string['ai_course_assistant:manage'] = 'AI ट्यूटर चैट सेटिंग प्रबंधित करें (प्रशासक भूमिका)';

// Settings.
$string['settings:enabled'] = 'AI पाठ्यक्रम सहायक सक्षम करें';
$string['settings:enabled_desc'] = 'पाठ्यक्रम पृष्ठों पर AI पाठ्यक्रम सहायक विजेट को सक्षम या अक्षम करें।';
$string['settings:provider'] = 'AI प्रदाता';
$string['settings:provider_desc'] = 'चैट पूर्णता के लिए उपयोग करने हेतु AI प्रदाता चुनें।';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (स्थानीय)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'कस्टम (OpenAI-संगत)';
$string['settings:apikey'] = 'API कुंजी';
$string['settings:apikey_desc'] = 'चयनित प्रदाता के लिए API कुंजी। Ollama के लिए आवश्यक नहीं।';
$string['settings:model'] = 'मॉडल का नाम';
$string['settings:model_desc'] = 'उपयोग करने के लिए मॉडल। डिफ़ॉल्ट प्रदाता पर निर्भर करता है (जैसे claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01)।';
$string['settings:apibaseurl'] = 'API बेस URL';
$string['settings:apibaseurl_desc'] = 'API के लिए बेस URL। प्रदाता के अनुसार स्वचालित रूप से भरा जाता है, लेकिन इसे बदला जा सकता है। प्रदाता के डिफ़ॉल्ट के लिए खाली छोड़ें।';
$string['settings:systemprompt'] = 'सिस्टम प्रॉम्प्ट टेम्पलेट';
$string['settings:systemprompt_desc'] = 'AI को भेजा गया सिस्टम प्रॉम्प्ट। प्लेसहोल्डर का उपयोग करें: {{coursename}}, {{userrole}}, {{coursetopics}}।';
$string['settings:systemprompt_default'] = 'आप पाठ्यक्रम "{{coursename}}" के लिए एक सहायक AI ट्यूटर हैं। छात्र की भूमिका {{userrole}} है।

पाठ्यक्रम में शामिल विषय:
{{coursetopics}}

छात्र को पाठ्यक्रम सामग्री समझने में मदद करें। प्रोत्साहक, स्पष्ट और शैक्षणिक रूप से उचित रहें।';
$string['settings:temperature'] = 'तापमान';
$string['settings:temperature_desc'] = 'यादृच्छिकता को नियंत्रित करता है। कम मान अधिक केंद्रित होते हैं, उच्च मान अधिक रचनात्मक। सीमा: 0.0 से 2.0।';
$string['settings:maxhistory'] = 'अधिकतम वार्तालाप इतिहास';
$string['settings:maxhistory_desc'] = 'API अनुरोधों में शामिल करने के लिए संदेश जोड़ों की अधिकतम संख्या। पुराने संदेश हटा दिए जाते हैं।';
$string['settings:avatar'] = 'चैट अवतार';
$string['settings:avatar_desc'] = 'चैट विजेट बटन के लिए अवतार आइकन चुनें।';
$string['settings:avatar_saylor'] = '{$a} लोगो (डिफ़ॉल्ट)';
$string['settings:position'] = 'विजेट स्थिति';
$string['settings:position_desc'] = 'पृष्ठ पर चैट विजेट की स्थिति।';
$string['settings:position_br'] = 'नीचे दाएं';
$string['settings:position_bl'] = 'नीचे बाएं';
$string['settings:position_tr'] = 'ऊपर दाएं';
$string['settings:position_tl'] = 'ऊपर बाएं';
$string['chat:settings'] = 'प्लगइन सेटिंग';
$string['analytics:viewdashboard'] = 'विश्लेषण डैशबोर्ड देखें';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'पाठ्यक्रम AI सेटिंग';
$string['coursesettings:enabled'] = 'पाठ्यक्रम ओवरराइड सक्षम करें';
$string['coursesettings:enabled_desc'] = 'सक्षम होने पर, नीचे दी गई सेटिंग केवल इस पाठ्यक्रम के लिए वैश्विक AI प्रदाता कॉन्फ़िगरेशन को ओवरराइड करती हैं। वैश्विक मान इनहेरिट करने के लिए फ़ील्ड खाली छोड़ें।';
$string['coursesettings:using_global'] = 'वैश्विक सेटिंग का उपयोग हो रहा है';
$string['coursesettings:saved'] = 'पाठ्यक्रम AI सेटिंग सहेजी गई।';
$string['coursesettings:global_settings_link'] = 'वैश्विक AI सेटिंग';

// Language detection and preference.
$string['lang:switch'] = 'हाँ, बदलें';
$string['lang:dismiss'] = 'नहीं, धन्यवाद';
$string['lang:change'] = 'भाषा बदलें';
$string['lang:english'] = 'अंग्रेज़ी';

// Chat widget.
$string['chat:title'] = 'AI ट्यूटर';
$string['chat:placeholder'] = 'कोई प्रश्न पूछें...';
$string['chat:send'] = 'भेजें';
$string['chat:close'] = 'चैट बंद करें';
$string['chat:open'] = 'AI ट्यूटर चैट खोलें';
$string['chat:clear'] = 'इतिहास साफ़ करें';
$string['chat:clear_confirm'] = 'क्या आप वाकई इस पाठ्यक्रम का चैट इतिहास साफ़ करना चाहते हैं?';
$string['chat:copy'] = 'वार्तालाप कॉपी करें';
$string['chat:copied'] = 'वार्तालाप क्लिपबोर्ड पर कॉपी किया गया';
$string['chat:copy_failed'] = 'वार्तालाप कॉपी करने में विफल';
$string['chat:thinking'] = 'सोच रहा हूँ...';
$string['chat:error'] = 'क्षमा करें, कुछ गलत हो गया। कृपया पुनः प्रयास करें।';
$string['chat:error_auth'] = 'प्रमाणीकरण त्रुटि। कृपया अपने व्यवस्थापक से संपर्क करें।';
$string['chat:error_ratelimit'] = 'बहुत अधिक अनुरोध। कृपया थोड़ी देर प्रतीक्षा करें और पुनः प्रयास करें।';
$string['chat:error_unavailable'] = 'AI सेवा अस्थायी रूप से अनुपलब्ध है। कृपया बाद में पुनः प्रयास करें।';
$string['chat:error_notconfigured'] = 'AI ट्यूटर अभी तक कॉन्फ़िगर नहीं किया गया है। कृपया अपने व्यवस्थापक से संपर्क करें।';
$string['chat:expand'] = 'चैट विस्तृत करें';
$string['chat:collapse'] = 'चैट संकुचित करें';
$string['chat:mic'] = 'अपना प्रश्न बोलें';
$string['chat:mic_error'] = 'माइक्रोफ़ोन त्रुटि। कृपया अपनी ब्राउज़र अनुमतियाँ जाँचें।';
$string['chat:mic_unsupported'] = 'इस ब्राउज़र में वाक् इनपुट समर्थित नहीं है।';
$string['chat:newline_hint'] = 'नई पंक्ति के लिए Shift+Enter';
$string['chat:you'] = 'आप';
$string['chat:assistant'] = 'AI ट्यूटर';
$string['chat:history_loaded'] = 'पिछला वार्तालाप लोड किया गया।';
$string['chat:history_cleared'] = 'चैट इतिहास साफ़ किया गया।';
$string['chat:offtopic_warning'] = 'ऐसा लगता है कि आपका प्रश्न इस पाठ्यक्रम से संबंधित नहीं है। कृपया विषय पर बने रहने का प्रयास करें ताकि मैं आपकी बेहतर मदद कर सकूँ!';
$string['chat:offtopic_ended'] = 'वार्तालाप बहुत अधिक बार विषय से भटकने के कारण आपकी AI ट्यूटर पहुँच अस्थायी रूप से {$a} मिनट के लिए निलंबित कर दी गई है। कृपया इस समय का उपयोग अपनी पाठ्यक्रम सामग्री की समीक्षा करने के लिए करें और बाद में पुनः प्रयास करें।';
$string['chat:offtopic_locked'] = 'आपकी AI ट्यूटर पहुँच अस्थायी रूप से निलंबित है। आप {$a} मिनट में पुनः प्रयास कर सकते हैं। वापस आने पर कृपया पाठ्यक्रम से संबंधित प्रश्नों पर ध्यान दें।';
$string['chat:escalated_to_support'] = 'मैं आपके प्रश्न का पूरी तरह उत्तर देने में असमर्थ था, इसलिए मैंने आपके लिए एक सहायता टिकट बनाया है। एक सहायता टीम सदस्य फ़ॉलो-अप करेगा। आपका टिकट संदर्भ है: {$a}';
$string['chat:studyplan_intro'] = 'मैं इस पाठ्यक्रम के लिए आपकी अध्ययन योजना बनाने में मदद कर सकता हूँ! बस मुझे बताएं कि आप प्रति सप्ताह पढ़ाई के लिए कितने घंटे समर्पित कर सकते हैं, और मैं एक संरचित योजना बनाने में आपकी मदद करूँगा।';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ और सहायता';
$string['settings:faq_heading_desc'] = 'केंद्रीकृत FAQ और Zendesk सहायता टिकट एकीकरण कॉन्फ़िगर करें।';
$string['settings:faq_content'] = 'FAQ सामग्री';
$string['settings:faq_content_desc'] = 'FAQ प्रविष्टियाँ दर्ज करें (प्रत्येक पंक्ति में प्रारूप: Q: प्रश्न | A: उत्तर)। ये सामान्य सहायता प्रश्नों का उत्तर देने के लिए AI को प्रदान किए जाएंगे।';
$string['settings:zendesk_enabled'] = 'Zendesk एस्केलेशन सक्षम करें';
$string['settings:zendesk_enabled_desc'] = 'जब AI किसी सहायता प्रश्न को हल नहीं कर पाता, तो वार्तालाप सारांश के साथ स्वचालित रूप से एक Zendesk टिकट बनाएं।';
$string['settings:zendesk_subdomain'] = 'Zendesk सबडोमेन';
$string['settings:zendesk_subdomain_desc'] = 'आपका Zendesk सबडोमेन (जैसे mycompany.zendesk.com के लिए "mycompany")।';
$string['settings:zendesk_email'] = 'Zendesk API ईमेल';
$string['settings:zendesk_email_desc'] = 'API प्रमाणीकरण के लिए Zendesk उपयोगकर्ता का ईमेल पता (/token प्रत्यय सहित)।';
$string['settings:zendesk_token'] = 'Zendesk API टोकन';
$string['settings:zendesk_token_desc'] = 'Zendesk प्रमाणीकरण के लिए API टोकन।';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'विषयांतर पहचान';
$string['settings:offtopic_heading_desc'] = 'कॉन्फ़िगर करें कि चैट विषयांतर वार्तालापों को कैसे संभालती है।';
$string['settings:offtopic_enabled'] = 'विषयांतर पहचान सक्षम करें';
$string['settings:offtopic_enabled_desc'] = 'AI को विषयांतर वार्तालापों का पता लगाने और उन्हें पुनर्निर्देशित करने का निर्देश दें।';
$string['settings:offtopic_max'] = 'अधिकतम विषयांतर संदेश';
$string['settings:offtopic_max_desc'] = 'कार्रवाई करने से पहले लगातार विषयांतर संदेशों की संख्या।';
$string['settings:offtopic_action'] = 'विषयांतर कार्रवाई';
$string['settings:offtopic_action_desc'] = 'विषयांतर सीमा पहुँचने पर क्या करना है।';
$string['settings:offtopic_action_warn'] = 'चेतावनी दें और पुनर्निर्देशित करें';
$string['settings:offtopic_action_end'] = 'अस्थायी रूप से पहुँच बंद करें';
$string['settings:offtopic_lockout_duration'] = 'लॉकआउट अवधि (मिनट)';
$string['settings:offtopic_lockout_duration_desc'] = 'विषयांतर सीमा से अधिक होने के बाद एक छात्र कितने समय (मिनट में) के लिए AI ट्यूटर तक पहुँच खो देता है। डिफ़ॉल्ट: 30 मिनट।';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'अध्ययन योजना और अनुस्मारक';
$string['settings:studyplan_heading_desc'] = 'अध्ययन योजना सुविधाओं और अनुस्मारक सूचनाओं को कॉन्फ़िगर करें।';
$string['settings:studyplan_enabled'] = 'अध्ययन योजना सक्षम करें';
$string['settings:studyplan_enabled_desc'] = 'AI ट्यूटर को उनके उपलब्ध समय के आधार पर छात्रों को व्यक्तिगत अध्ययन योजनाएँ बनाने में मदद करने दें।';
$string['settings:reminders_email_enabled'] = 'ईमेल अनुस्मारक सक्षम करें';
$string['settings:reminders_email_enabled_desc'] = 'छात्रों को ईमेल के माध्यम से अध्ययन अनुस्मारक के लिए ऑप्ट इन करने दें।';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsApp अनुस्मारक सक्षम करें';
$string['settings:reminders_whatsapp_enabled_desc'] = 'छात्रों को WhatsApp के माध्यम से अध्ययन अनुस्मारक के लिए ऑप्ट इन करने दें (WhatsApp API कॉन्फ़िगरेशन आवश्यक है)।';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'WhatsApp संदेश भेजने के लिए API एंडपॉइंट (जैसे Twilio, MessageBird)। "to", "from" और "body" फ़ील्ड वाले JSON बॉडी के साथ POST स्वीकार करना होगा।';
$string['settings:whatsapp_api_token'] = 'WhatsApp API टोकन';
$string['settings:whatsapp_api_token_desc'] = 'WhatsApp API के लिए प्रमाणीकरण टोकन।';
$string['settings:whatsapp_from_number'] = 'WhatsApp प्रेषक संख्या';
$string['settings:whatsapp_from_number_desc'] = 'WhatsApp संदेश भेजने के लिए फ़ोन नंबर (देश कोड सहित, जैसे +14155238886)।';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp अवरुद्ध देश';
$string['settings:whatsapp_blocked_countries_desc'] = 'स्थानीय विनियमों के कारण जहाँ WhatsApp अनुस्मारक की अनुमति नहीं है उन देशों के ISO 3166-1 alpha-2 देश कोड (अल्पविराम से अलग, जैसे "CN,IR,KP")।';

// Reminder messages.
$string['reminder:email_subject'] = 'अध्ययन अनुस्मारक: {$a}';
$string['reminder:email_body'] = 'नमस्ते {$a->firstname},

यह "{$a->coursename}" के लिए आपका अध्ययन अनुस्मारक है।

{$a->message}

आपकी अध्ययन योजना इस पाठ्यक्रम के लिए प्रति सप्ताह {$a->hours_per_week} घंटे सुझाती है।

बेहतरीन काम जारी रखें!

---
इन अनुस्मारकों को प्राप्त करना बंद करने के लिए यहाँ क्लिक करें: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = '{$a->coursename} के लिए अध्ययन अनुस्मारक: {$a->message} (सदस्यता समाप्त करें: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'आज का अध्ययन फ़ोकस: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'अध्ययन अनुस्मारकों से सदस्यता समाप्त करें';
$string['unsubscribe:success'] = 'आपने इस पाठ्यक्रम के लिए अध्ययन अनुस्मारकों से सफलतापूर्वक सदस्यता समाप्त कर ली है।';
$string['unsubscribe:already'] = 'आपने पहले ही इन अनुस्मारकों से सदस्यता समाप्त कर ली है।';
$string['unsubscribe:invalid'] = 'अमान्य या समाप्त सदस्यता समाप्ति लिंक।';
$string['unsubscribe:resubscribe'] = 'मन बदल गया? आप AI ट्यूटर चैट के माध्यम से अनुस्मारक पुनः सक्षम कर सकते हैं।';

// Scheduled task.
$string['task:send_reminders'] = 'AI ट्यूटर अध्ययन अनुस्मारक भेजें';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'छात्र अध्ययन योजनाएँ संग्रहीत करता है।';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'अध्ययन योजना के स्वामी उपयोगकर्ता की ID।';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'वह पाठ्यक्रम जिससे अध्ययन योजना संबंधित है।';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'छात्र प्रति सप्ताह जितने घंटे अध्ययन करने की योजना बनाता है।';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'JSON प्रारूप में अध्ययन योजना विवरण।';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'अध्ययन अनुस्मारक प्राथमिकताएँ और सदस्यताएँ संग्रहीत करता है।';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'अनुस्मारकों की सदस्यता लेने वाले उपयोगकर्ता की ID।';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'अनुस्मारक चैनल (ईमेल या WhatsApp)।';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'अनुस्मारकों के लिए ईमेल पता या फ़ोन नंबर।';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'विनियामक अनुपालन के लिए उपयोगकर्ता का देश कोड।';

// Analytics dashboard.
$string['analytics:title'] = 'AI ट्यूटर विश्लेषण';
$string['analytics:overview'] = 'अवलोकन';
$string['analytics:total_conversations'] = 'कुल वार्तालाप';
$string['analytics:total_messages'] = 'कुल संदेश';
$string['analytics:active_students'] = 'सक्रिय छात्र';
$string['analytics:avg_messages_per_student'] = 'प्रति छात्र औसत संदेश';
$string['analytics:offtopic_rate'] = 'विषयांतर दर';
$string['analytics:escalation_count'] = 'सहायता को एस्केलेट किया गया';
$string['analytics:studyplan_adoption'] = 'अध्ययन योजना वाले छात्र';
$string['analytics:usage_trends'] = 'उपयोग प्रवृत्तियाँ';
$string['analytics:daily_messages'] = 'दैनिक संदेश मात्रा';
$string['analytics:hotspots'] = 'पाठ्यक्रम हॉटस्पॉट';
$string['analytics:hotspots_desc'] = 'छात्र प्रश्नों में सबसे अधिक संदर्भित पाठ्यक्रम अनुभाग। अधिक गणना उन क्षेत्रों को इंगित कर सकती है जहाँ छात्रों को अधिक सहायता की आवश्यकता है।';
$string['analytics:section'] = 'अनुभाग';
$string['analytics:mention_count'] = 'उल्लेख';
$string['analytics:common_prompts'] = 'सामान्य प्रॉम्प्ट पैटर्न';
$string['analytics:common_prompts_desc'] = 'छात्रों से बार-बार आने वाले प्रश्न पैटर्न। पाठ्यक्रम सामग्री में व्यवस्थित कमियों को पहचानने के लिए इनकी समीक्षा करें।';
$string['analytics:prompt_pattern'] = 'पैटर्न';
$string['analytics:frequency'] = 'आवृत्ति';
$string['analytics:recent_activity'] = 'हालिया गतिविधि';
$string['analytics:no_data'] = 'अभी तक कोई विश्लेषण डेटा उपलब्ध नहीं है। एक बार जब छात्र AI ट्यूटर का उपयोग शुरू करेंगे तो डेटा दिखाई देगा।';
$string['analytics:timerange'] = 'समय सीमा';
$string['analytics:last_7_days'] = 'पिछले 7 दिन';
$string['analytics:last_30_days'] = 'पिछले 30 दिन';
$string['analytics:all_time'] = 'सभी समय';
$string['analytics:export'] = 'डेटा निर्यात करें';
$string['analytics:provider_comparison'] = 'AI प्रदाता तुलना';
$string['analytics:provider_comparison_desc'] = 'इस पाठ्यक्रम में उपयोग किए गए AI प्रदाताओं के प्रदर्शन की तुलना करें।';
$string['analytics:provider'] = 'प्रदाता';
$string['analytics:response_count'] = 'प्रतिक्रियाएँ';
$string['analytics:avg_response_length'] = 'औसत प्रतिक्रिया लंबाई';
$string['analytics:total_tokens'] = 'कुल टोकन';
$string['analytics:avg_tokens'] = 'औसत टोकन / प्रतिक्रिया';

// User settings.
$string['usersettings:title'] = 'AI पाठ्यक्रम सहायक - आपका डेटा';
$string['usersettings:intro'] = 'अपने AI ट्यूटर चैट डेटा और गोपनीयता सेटिंग प्रबंधित करें';
$string['usersettings:privacy_info'] = 'AI ट्यूटर के साथ आपकी बातचीत आपके पाठ्यक्रम के दौरान निरंतर सहायता प्रदान करने के लिए संग्रहीत की जाती है। आपका इस डेटा पर पूर्ण नियंत्रण है और आप इसे कभी भी हटा सकते हैं।';
$string['usersettings:usage_stats'] = 'आपके उपयोग की सांख्यिकी';
$string['usersettings:total_messages'] = 'कुल संदेश';
$string['usersettings:total_conversations'] = 'वार्तालाप';
$string['usersettings:messages'] = 'संदेश';
$string['usersettings:last_activity'] = 'अंतिम गतिविधि';
$string['usersettings:delete_course_data'] = 'पाठ्यक्रम डेटा हटाएँ';
$string['usersettings:no_data'] = 'आपने अभी तक AI ट्यूटर का उपयोग नहीं किया है। चैट शुरू करने के बाद आपका उपयोग डेटा यहाँ दिखाई देगा।';
$string['usersettings:delete_all_title'] = 'अपना सारा डेटा हटाएँ';
$string['usersettings:delete_all_warning'] = 'यह सभी पाठ्यक्रमों में आपके सभी AI ट्यूटर वार्तालापों को स्थायी रूप से हटा देगा। यह क्रिया पूर्ववत नहीं की जा सकती।';
$string['usersettings:delete_all_button'] = 'मेरा सारा डेटा हटाएँ';
$string['usersettings:confirm_delete_course'] = 'क्या आप वाकई पाठ्यक्रम "{$a}" के लिए अपना सारा AI ट्यूटर डेटा स्थायी रूप से हटाना चाहते हैं? यह क्रिया पूर्ववत नहीं की जा सकती।';
$string['usersettings:confirm_delete_all'] = 'क्या आप वाकई सभी पाठ्यक्रमों में अपना सारा AI ट्यूटर डेटा स्थायी रूप से हटाना चाहते हैं? यह क्रिया पूर्ववत नहीं की जा सकती।';
$string['usersettings:data_deleted'] = 'आपका डेटा हटा दिया गया है।';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'नमस्ते, {$a}! मैं SOLA हूँ, आपका {INSTITUTION} ऑनलाइन लर्निंग असिस्टेंट।';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA खोलें';
$string['chat:change_avatar'] = 'अवतार बदलें';

// Quiz UI.
$string['chat:quiz'] = 'अभ्यास प्रश्नोत्तरी लें';
$string['chat:quiz_setup_title'] = 'अभ्यास प्रश्नोत्तरी';
$string['chat:quiz_questions'] = 'प्रश्नों की संख्या';
$string['chat:quiz_topic'] = 'विषय';
$string['chat:quiz_topic_guided'] = 'AI-निर्देशित (आपकी प्रगति के आधार पर)';
$string['chat:quiz_topic_default'] = 'वर्तमान पाठ्यक्रम सामग्री';
$string['chat:quiz_topic_custom'] = 'कस्टम विषय…';
$string['chat:quiz_custom_placeholder'] = 'कोई विषय या प्रश्न दर्ज करें...';
$string['chat:quiz_start'] = 'प्रश्नोत्तरी शुरू करें';
$string['chat:quiz_cancel'] = 'रद्द करें';
$string['chat:quiz_loading'] = 'प्रश्नोत्तरी बनाई जा रही है…';
$string['chat:quiz_error'] = 'प्रश्नोत्तरी नहीं बन सकी। कृपया पुनः प्रयास करें।';
$string['chat:quiz_correct'] = 'सही!';
$string['chat:quiz_wrong'] = 'गलत।';
$string['chat:quiz_next'] = 'अगला प्रश्न';
$string['chat:quiz_finish'] = 'परिणाम देखें';
$string['chat:quiz_score'] = 'प्रश्नोत्तरी पूर्ण! आपने {$a->total} में से {$a->score} अंक प्राप्त किए।';
$string['chat:quiz_summary'] = 'मैंने "{$a->topic}" पर {$a->total} प्रश्नों की अभ्यास प्रश्नोत्तरी पूरी की और {$a->score}/{$a->total} अंक प्राप्त किए।';
$string['chat:quiz_topic_objectives'] = 'सीखने के उद्देश्य';
$string['chat:quiz_topic_modules'] = 'पाठ्यक्रम विषय';
$string['chat:quiz_subtopic_select'] = 'एक विशिष्ट आइटम चुनें…';
$string['chat:quiz_topic_sections'] = 'पाठ्यक्रम अनुभाग';
$string['chat:quiz_score_great'] = 'उत्कृष्ट कार्य! आप इस सामग्री को वास्तव में जानते हैं।';
$string['chat:quiz_score_good'] = 'अच्छा प्रयास! अपनी समझ मज़बूत करने के लिए समीक्षा जारी रखें।';
$string['chat:quiz_score_practice'] = 'अभ्यास जारी रखें — संबंधित पाठ्यक्रम सामग्री की समीक्षा करने का प्रयास करें, फिर प्रश्नोत्तरी दोबारा दें।';
$string['chat:quiz_review_heading'] = 'समीक्षा';
$string['chat:quiz_retake'] = 'प्रश्नोत्तरी दोबारा दें';
$string['chat:quiz_exit'] = 'प्रश्नोत्तरी छोड़ें';
$string['chat:quiz_your_answer'] = 'आपका उत्तर';
$string['chat:quiz_correct_answer'] = 'सही उत्तर';

// Conversation starters.
$string['chat:starters_label'] = 'बातचीत शुरू करें';
$string['chat:starter_quiz'] = 'इस पर मुझे परखें';
$string['chat:starter_explain'] = 'यह समझाएँ';
$string['chat:starter_key_concepts'] = 'मुख्य अवधारणाएँ';
$string['chat:starter_study_plan'] = 'अध्ययन योजना';
$string['chat:starter_help_me'] = 'AI सहायता';
$string['chat:starter_ai_project_coach'] = 'AI प्रोजेक्ट कोच';
$string['chat:starter_ell_practice'] = 'बातचीत का अभ्यास';
$string['chat:starter_ell_pronunciation'] = 'ELL उच्चारण';
$string['chat:starter_ai_coach'] = 'AI कोच';
$string['chat:starter_speak'] = 'स्टार्टर बोलें';

// Reset / home.
$string['chat:reset'] = 'फिर से शुरू करें';

// Topic picker.
$string['chat:topic_picker_title'] = 'आप किस पर ध्यान केंद्रित करना चाहते हैं?';
$string['chat:topic_picker_title_help'] = 'आपको किसमें सहायता चाहिए?';
$string['chat:topic_picker_title_explain'] = 'आप क्या समझाना चाहते हैं?';
$string['chat:topic_picker_title_study'] = 'आप किस क्षेत्र पर ध्यान केंद्रित करना चाहते हैं?';
$string['chat:topic_start'] = 'जारी रखें';

// Expand states.
$string['chat:fullscreen'] = 'पूर्ण स्क्रीन';
$string['chat:exitfullscreen'] = 'पूर्ण स्क्रीन से बाहर निकलें';

// Settings panel.
$string['chat:language'] = 'भाषा बदलें';
$string['chat:settings_panel'] = 'सेटिंग';
$string['chat:settings_language'] = 'भाषा';
$string['chat:settings_avatar'] = 'अवतार';
$string['chat:settings_voice'] = 'आवाज़';
$string['chat:settings_voice_admin'] = 'आवाज़ सेटिंग साइट एडमिन पैनल में प्रबंधित की जाती हैं।';

// Voice mode.
$string['chat:voice_mode'] = 'वॉइस मोड';
$string['chat:voice_end'] = 'वॉइस सत्र समाप्त करें';
$string['chat:voice_connecting'] = 'कनेक्ट हो रहा है...';
$string['chat:voice_listening'] = 'सुन रहा है...';
$string['chat:voice_speaking'] = 'SOLA बोल रही है...';
$string['chat:voice_idle'] = 'तैयार';
$string['chat:voice_error'] = 'वॉइस कनेक्शन विफल हुआ। कृपया अपनी सेटिंग जाँचें।';
$string['chat:quiz_locked'] = 'शैक्षणिक ईमानदारी बनाए रखने के लिए प्रश्नोत्तरी के दौरान SOLA रुकी हुई है। शुभकामनाएँ!';
$string['task:send_inactivity_reminders'] = 'साप्ताहिक निष्क्रियता अनुस्मारक ईमेल भेजें';
$string['messageprovider:study_notes'] = 'अध्ययन सत्र नोट्स';
$string['task:send_inactivity_reminders'] = 'साप्ताहिक निष्क्रियता अनुस्मारक ईमेल भेजें';
$string['messageprovider:study_notes'] = 'अध्ययन सत्र नोट्स';
