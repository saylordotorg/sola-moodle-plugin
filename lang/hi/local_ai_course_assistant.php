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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'AI पाठ्यक्रम सहायक';
$string['attachment:attach'] = 'संलग्न करें';
$string['attachment:attach_image_or_pdf'] = 'छवि या PDF संलग्न करें';
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
$string['settings:default_course_mode'] = 'नए कोर्स के लिए डिफ़ॉल्ट';
$string['settings:default_course_mode_desc'] = 'नियंत्रित करता है कि जब कोई प्रति-कोर्स विकल्प नहीं बनाया गया हो तो किसी कोर्स पर SOLA दिखाई देता है या नहीं। नए इंस्टॉल डिफ़ॉल्ट रूप से "डिफ़ॉल्ट रूप से अक्षम" पर होते हैं ताकि एडमिन Analytics पेज या Course AI Settings पेज से कोर्स-दर-कोर्स ऑप्ट-इन कर सकें।';
$string['settings:default_course_mode_per_course'] = 'डिफ़ॉल्ट रूप से अक्षम (प्रति कोर्स सक्षम करें)';
$string['settings:default_course_mode_all'] = 'सभी कोर्स पर सक्षम';
$string['settings:auto_open'] = 'पहली विज़िट पर स्वतः खोलें';
$string['settings:auto_open_desc'] = 'सक्षम होने पर, जब कोई छात्र पहली बार किसी कोर्स पर पहुंचता है तो SOLA ड्रॉअर स्वतः खुल जाता है। उसी कोर्स में बाद के पेज लोड पर ड्रॉअर पुनः नहीं खुलता — स्थिति को छात्र के ब्राउज़र में localStorage के माध्यम से प्रति कोर्स ट्रैक किया जाता है। डेस्कटॉप और मोबाइल पर लागू होता है। Course AI Settings पेज से प्रति कोर्स ओवरराइड किया जा सकता है।';
$string['settings:comparison_providers'] = 'तुलना प्रदाता (LLM पिकर)';
$string['settings:comparison_providers_desc'] = 'विजेट के भीतर LLM पिकर में अतिरिक्त AI प्रदाता जोड़ें ताकि प्रशासक विभिन्न प्रदाताओं में प्रतिक्रियाओं की तुलना कर सकें। पंक्तियाँ जोड़ने के लिए नीचे दी गई तालिका का उपयोग करें। तापमान कॉलम वैकल्पिक है (वैश्विक तापमान का उपयोग करने के लिए खाली छोड़ें)। संग्रहीत प्रारूप: provider_id|api_key|model1,model2|temperature। ऊपर कॉन्फ़िगर किया गया प्राथमिक प्रदाता हमेशा स्वचालित रूप से शामिल होता है। केवल प्रबंधन क्षमता वाले प्रशासक पिकर देखते हैं; छात्र इसे कभी नहीं देखते। मान्य provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'डिफ़ॉल्ट AI प्रदाता';
$string['settings:provider_desc'] = 'चैट पूर्णताओं के लिए उपयोग करने के लिए AI प्रदाता चुनें। Moodle के अंतर्निहित AI कॉन्फ़िगरेशन के माध्यम से Site admin > AI पर अनुरोधों को रूट करने के लिए "Moodle AI (core_ai subsystem)" चुनें; उस मोड में नीचे दिए गए API कुंजी, मॉडल और बेस URL फ़ील्ड को अनदेखा कर दिया जाता है। Streaming, tool use और prompt caching core_ai के माध्यम से उपलब्ध नहीं हैं — प्रतिक्रियाएं एकल भाग के रूप में दी जाती हैं। सर्वोत्तम छात्र अनुभव के लिए एक प्रत्यक्ष प्रदाता का उपयोग करें।';
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
$string['coursesettings:sola_enabled'] = 'इस कोर्स पर SOLA';
$string['coursesettings:sola_enabled_toggle'] = 'इस कोर्स पर SOLA विजेट दिखाएं';
$string['coursesettings:sola_enabled_desc'] = 'नियंत्रित करता है कि SOLA चैट विजेट इस कोर्स पर दिखाई देता है या नहीं। साइट-व्यापी डिफ़ॉल्ट प्लगइन सेटिंग्स में General > Default for new courses के अंतर्गत सेट किया जाता है।';
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
$string['chat:clear'] = 'स्क्रीन साफ़ करें';
$string['chat:clear_confirm'] = 'दिखाई देने वाले संदेशों को साफ़ करें? आपका पूरा चैट इतिहास सहेजा रहता है और विजेट को फिर से खोलकर दोबारा लोड किया जा सकता है।';
$string['chat:copy'] = 'वार्तालाप कॉपी करें';
$string['chat:copied'] = 'वार्तालाप क्लिपबोर्ड पर कॉपी किया गया';
$string['chat:copy_failed'] = 'वार्तालाप कॉपी करने में विफल';
$string['chat:thinking'] = 'सोच रहा हूँ...';
$string['chat:error'] = 'क्षमा करें, कुछ गलत हो गया। कृपया पुनः प्रयास करें।';
$string['chat:error_auth'] = 'प्रमाणीकरण त्रुटि। कृपया अपने व्यवस्थापक से संपर्क करें।';
$string['chat:error_ratelimit'] = 'बहुत अधिक अनुरोध। कृपया थोड़ी देर प्रतीक्षा करें और पुनः प्रयास करें।';
$string['chat:error_unavailable'] = 'AI सेवा अस्थायी रूप से अनुपलब्ध है। कृपया बाद में पुनः प्रयास करें।';
$string['chat:error_notconfigured'] = 'AI ट्यूटर अभी तक कॉन्फ़िगर नहीं किया गया है। कृपया अपने व्यवस्थापक से संपर्क करें।';
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
$string['chat:greeting'] = 'नमस्ते, {$a}! मैं SOLA हूँ। आज मैं आपकी कैसे मदद कर सकता हूँ?';
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
$string['chat:quiz_topic_adaptive']      = 'अनुकूली — मेरी कमज़ोरियों पर ध्यान दें';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'नोट्स';

// History panel.
$string['chat:history_title'] = 'नोट्स और बातचीत का इतिहास';
$string['task:send_inactivity_reminders'] = 'साप्ताहिक निष्क्रियता अनुस्मारक ईमेल भेजें';
$string['messageprovider:study_notes'] = 'अध्ययन सत्र नोट्स';
$string['task:send_inactivity_reminders'] = 'साप्ताहिक निष्क्रियता अनुस्मारक ईमेल भेजें';
$string['task:run_meta_ai_query'] = 'निर्धारित लर्निंग रडार विश्लेषण क्वेरी चलाएं';
$string['messageprovider:study_notes'] = 'अध्ययन सत्र नोट्स';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / फ्रंटएंड डिलीवरी';
$string['settings:cdn_heading_desc'] = 'Moodle फाइल सिस्टम के बजाय बाहरी CDN से SOLA फ्रंटएंड संसाधन (JS/CSS) प्रदान करें। यह प्लगइन अपग्रेड के बिना फ्रंटएंड अपडेट सक्षम करता है। स्थानीय प्लगइन फाइलों का उपयोग करने के लिए CDN URL खाली छोड़ें।';
$string['settings:cdn_url'] = 'CDN बेस URL';
$string['settings:cdn_url_desc'] = 'बेस URL जहाँ sola.min.js और sola.min.css होस्ट किए गए हैं। उदाहरण: https://your-org.github.io/sola-cdn। स्थानीय प्लगइन फाइलों का उपयोग करने के लिए खाली छोड़ें।';
$string['settings:cdn_version'] = 'CDN संसाधन संस्करण';
$string['settings:cdn_version_desc'] = 'Cache busting के लिए CDN URLs में जोड़ी जाने वाली संस्करण स्ट्रिंग। प्रत्येक CDN डिप्लॉय के बाद अपडेट करें (जैसे 3.2.4 या commit hash)।';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'समग्र उपयोग';
$string['analytics:tab_bycourse'] = 'कोर्स अनुसार';
$string['analytics:tab_comparison'] = 'AI बनाम गैर-उपयोगकर्ता';
$string['analytics:tab_byunit'] = 'इकाई अनुसार';
$string['analytics:tab_usagetypes'] = 'उपयोग के प्रकार';
$string['analytics:tab_themes'] = 'विषय';
$string['analytics:tab_feedback'] = 'AI प्रतिक्रिया';
$string['analytics:total_students'] = 'कुल छात्र';
$string['analytics:active_users'] = 'सक्रिय AI उपयोगकर्ता';
$string['analytics:msgs_per_student'] = 'प्रति छात्र संदेश';
$string['analytics:avg_session'] = 'औसत सत्र अवधि';
$string['analytics:return_rate'] = 'वापसी दर';
$string['analytics:total_sessions'] = 'कुल सत्र';
$string['analytics:thumbs_up'] = 'पसंद';
$string['analytics:thumbs_down'] = 'नापसंद';
$string['analytics:hallucination_flags'] = 'गलत जानकारी के चिह्न';
$string['analytics:msgs_to_resolution'] = 'समाधान तक संदेश';
$string['analytics:helpful'] = 'सहायक';
$string['analytics:not_helpful'] = 'सहायक नहीं';
$string['analytics:flag_hallucination'] = 'इस उत्तर में गलत जानकारी है';
$string['analytics:submit_rating'] = 'भेजें';
$string['analytics:thanks_feedback'] = 'आपकी प्रतिक्रिया के लिए धन्यवाद';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'यह पेज समझाएं';
$string['chat:starter_ask_anything'] = 'कुछ भी पूछें';
$string['chat:starter_review_practice'] = 'दोहराएं और अभ्यास करें';
$string['chat:history_saved_subtitle'] = 'सहेजे गए उत्तर इस कोर्स के लिए इस डिवाइस पर रहते हैं।';
$string['chat:history_saved_empty'] = 'इसे यहाँ देखने के लिए AI उत्तर सहेजें।';
$string['chat:history_views_label'] = 'इतिहास दृश्य';
$string['chat:history_view_saved'] = 'सहेजे गए';
$string['chat:history_view_recent'] = 'इतिहास';
$string['chat:debug_refresh'] = 'रीफ्रेश';
$string['chat:debug_copy_all'] = 'सब कॉपी करें';
$string['chat:debug_close'] = 'बंद करें';
$string['chat:language_switch'] = 'भाषा बदलें';
$string['chat:language_dismiss'] = 'भाषा सुझाव खारिज करें';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM प्रदाता चुनें';
$string['chat:llm_model_label'] = 'मॉडल';
$string['chat:llm_model_select'] = 'LLM मॉडल चुनें';
$string['chat:footer_usertesting'] = 'उपयोगिता परीक्षण';
$string['chat:footer_feedback'] = 'प्रतिक्रिया';
$string['chat:voice_panel_title'] = '{$a} से बात करें (प्रायोगिक)';

// Additional translated strings.
$string['chat:debug_context'] = 'संदर्भ डिबग';
$string['chat:debug_context_browser'] = 'ब्राउज़र स्नैपशॉट';
$string['chat:debug_context_copy'] = 'कॉपी';
$string['chat:debug_context_prompt'] = 'सर्वर प्रतिक्रिया';
$string['chat:debug_context_request'] = 'अंतिम SSE अनुरोध';
$string['chat:debug_context_toggle'] = 'टॉगल करें';
$string['chat:history_empty'] = 'अभी कोई बातचीत नहीं।';
$string['chat:history_refresh'] = 'रिफ्रेश';
$string['chat:history_subtitle'] = 'आपके हालिया संदेश।';
$string['chat:starter_explain_prompt'] = 'सबसे महत्वपूर्ण अवधारणा समझाएं?';
$string['chat:starter_help_lesson'] = 'इसे समझाएं';
$string['chat:starter_help_lesson_prompt'] = 'पाठ समझने में मदद करें। मुख्य अवधारणाओं का सारांश दें।';
$string['chat:starter_prompt_coach'] = 'AI कोच';
$string['chat:starter_quick_study'] = 'त्वरित अध्ययन';
$string['chat:starter_study_plan_prompt'] = 'अध्ययन योजना बनाना चाहता हूं। पूछें: (1) आज का लक्ष्य, (2) समय कितना। योजना अपडेट करें।';
$string['chat:voice_copy'] = 'लर्निंग असिस्टेंट के साथ वॉइस बातचीत।';
$string['chat:voice_ready'] = 'तैयार';
$string['chat:voice_start'] = 'शुरू करें';
$string['chat:voice_title'] = 'SOLA से बात करें';
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
$string['mobile_chip_concepts'] = 'मुख्य अवधारणाएं';
$string['mobile_chip_quiz'] = 'क्विज़';
$string['mobile_chip_studyplan'] = 'अध्ययन योजना';
$string['mobile_clear'] = 'इतिहास साफ़ करें';
$string['mobile_disabled'] = 'SOLA इस कोर्स के लिए उपलब्ध नहीं है।';
$string['mobile_placeholder'] = 'एक सवाल पूछें...';
$string['mobile_welcome'] = 'नमस्ते, {$a}!';
$string['mobile_welcome_sub'] = 'मैं SOLA हूं, आपका लर्निंग असिस्टेंट। आज कैसे मदद करूं?';
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
$string['rubric:done'] = 'पूर्ण';
$string['rubric:encourage_high'] = 'उत्कृष्ट! ऐसे ही जारी रखें!';
$string['rubric:encourage_low'] = 'अच्छी शुरुआत! नियमित अभ्यास मदद करेगा।';
$string['rubric:encourage_mid'] = 'अच्छा प्रयास! सुधार के लिए अभ्यास जारी रखें।';
$string['rubric:overall'] = 'समग्र';
$string['rubric:practice_again'] = 'फिर से अभ्यास करें';
$string['rubric:score_title_conversation'] = 'बातचीत अभ्यास स्कोर';
$string['rubric:score_title_pronunciation'] = 'उच्चारण अभ्यास स्कोर';
$string['rubric:scoring'] = 'मूल्यांकन हो रहा है...';
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
$string['demo:intro'] = 'यह पृष्ठ एक परीक्षण कोर्स बनाता है जो <strong>छात्रों से छिपा हुआ</strong> (visible=0) है और इसे नकली छात्रों, AI वार्तालापों, रेटिंग और फीडबैक से भर देता है। Analytics Dashboard का पूर्वावलोकन करने या प्लगइन परिवर्तनों को सत्यापित करने के लिए उपयोगी, बिना किसी वास्तविक नामांकित छात्र को प्रभावित किए।';
$string['demo:step1'] = 'Step 1: परीक्षण कोर्स';
$string['demo:step2'] = 'Step 2: नकली छात्र और AI चैट जोड़ें';
$string['demo:course_exists'] = 'परीक्षण कोर्स मौजूद है: <strong>{$a->fullname}</strong> (संक्षिप्त नाम <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'छिपा हुआ';
$string['demo:badge_visible'] = 'छात्रों को दिखाई दे रहा';
$string['demo:no_course'] = 'कोई परीक्षण कोर्स नहीं मिला। बनाने के लिए नीचे क्लिक करें।';
$string['demo:create_btn'] = 'छिपा हुआ परीक्षण कोर्स बनाएं';
$string['demo:open_course'] = 'कोर्स खोलें &rarr;';
$string['demo:seed_intro'] = 'demo_student_001, demo_student_002, ... बनाता है, उन्हें परीक्षण कोर्स में नामांकित करता है, और कृत्रिम वार्तालाप, संदेश, रेटिंग और फीडबैक सम्मिलित करता है। अधिक डेटा जोड़ने के लिए फिर से चलाएँ, या फिर से शुरू करने के लिए "पहले साफ़ करें" पर टिक करें।';
$string['demo:users_label'] = 'उपयोगकर्ता';
$string['demo:weeks_label'] = 'सप्ताह';
$string['demo:clear_label'] = 'पहले मौजूदा demo_* उपयोगकर्ताओं को साफ़ करें';
$string['demo:seed_btn'] = 'छात्र और चैट जोड़ें';
$string['demo:view_analytics'] = 'इस कोर्स के लिए Analytics देखें &rarr;';
$string['demo:footer'] = 'यहाँ बनाया गया डेटा मानक Moodle उपयोगकर्ता / नामांकन तालिकाओं और प्लगइन की अपनी वार्तालाप तालिकाओं में रहता है। सभी नकली उपयोगकर्ताओं के उपयोगकर्ता नाम <code>demo_student_</code> से शुरू होते हैं ताकि उन्हें फ़िल्टर या हटाना आसान हो। उन्हें हटाने के लिए, "पहले मौजूदा demo_* उपयोगकर्ताओं को साफ़ करें" चेक करके seed चरण फिर से चलाएँ।';
$string['demo:course_fullname'] = 'SOLA परीक्षण कोर्स (छिपा हुआ)';
$string['demo:notify_created'] = 'परीक्षण कोर्स तैयार: {$a->fullname} (id {$a->id})।';
$string['demo:notify_create_fail'] = 'कोर्स बनाने में विफल: {$a}';
$string['demo:notify_seeded'] = 'जोड़ा गया: {$a->users} उपयोगकर्ता, {$a->conversations} वार्तालाप, {$a->messages} संदेश, {$a->ratings} रेटिंग, {$a->feedback} फीडबैक प्रविष्टियाँ।';
$string['demo:notify_seed_fail'] = 'डेटा जोड़ने में विफल: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'टोकन लागत और विश्लेषण &rarr;';
$string['toc:testing'] = 'परीक्षण वातावरण &rarr;';
$string['toc:back_to_course'] = '&larr; {$a} पर वापस जाएँ';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext बाइनरी नहीं मिली; PDF निष्कर्षण अक्षम है।';
$string['rag:pdftotext_available'] = 'pdftotext {$a} पर पाया गया।';
$string['rag:docx_unavailable'] = 'PHP ZipArchive एक्सटेंशन उपलब्ध नहीं है; DOCX निष्कर्षण अक्षम है।';
$string['rag:h5p_unavailable'] = 'H5P सामग्री पढ़ी नहीं जा सकी; छोड़ रहे हैं।';
$string['rag:scorm_too_large'] = 'SCORM पैकेज कॉन्फ़िगर की गई आकार सीमा ({$a} MB) से अधिक है; छोड़ रहे हैं।';
$string['rag:scorm_unzip_failed'] = 'SCORM पैकेज अनज़िप नहीं किया जा सका; छोड़ रहे हैं।';
$string['rag:transcript_fetch_failed'] = '{$a} से ट्रांसक्रिप्ट प्राप्त नहीं कर सके।';
$string['rag:transcript_cf_challenge'] = 'ट्रांसक्रिप्ट URL Cloudflare चुनौती द्वारा अवरुद्ध: {$a}।';
$string['rag:embed_detected'] = 'एम्बेडेड मीडिया का पता चला: {$a}';
$string['rag:embed_transcript_attached'] = '{$a} के लिए ट्रांसक्रिप्ट संलग्न';

// v3.9.10–v3.9.14 new strings (English verbatim; translate later).
$string['usersettings:download'] = 'मेरा {$a} डेटा डाउनलोड करें';
$string['usersettings:download_help'] = 'अपने खाते से जुड़े प्रत्येक {$a} रिकॉर्ड की पूर्ण JSON प्रति डाउनलोड करें: बातचीत, संदेश, रेटिंग, अध्ययन योजनाएँ, अनुस्मारक, अभ्यास स्कोर, सर्वेक्षण उत्तर, प्रोफ़ाइल और ऑडिट प्रविष्टियाँ।';
$string['usersettings:privacy_notice_link'] = '{$a} की गोपनीयता सूचना पढ़ें';
$string['privacy:title'] = '{$a} गोपनीयता सूचना';
$string['admin:user_data:title'] = '{$a} — शिक्षार्थी डेटा निर्यात और शुद्धिकरण';
$string['admin:user_data:intro'] = 'GDPR अनुच्छेद 15 (पहुँच) या अनुच्छेद 17 (मिटाने) के अनुरोध के लिए परिचालन पथ। Moodle उपयोगकर्ता आईडी के माध्यम से शिक्षार्थी को खोजें, इस प्लगइन द्वारा उनके लिए रखी गई पंक्तियों की समीक्षा करें, और निर्यात या शुद्ध करें।';
$string['admin:user_data:search_label'] = 'Moodle उपयोगकर्ता आईडी';
$string['admin:user_data:lookup'] = 'खोजें';
$string['admin:user_data:not_found'] = 'उस आईडी के साथ कोई उपयोगकर्ता नहीं मिला।';
$string['admin:user_data:download'] = 'सभी शिक्षार्थी डेटा JSON के रूप में डाउनलोड करें';
$string['admin:user_data:purge'] = 'इस उपयोगकर्ता का सभी शिक्षार्थी डेटा शुद्ध करें';
$string['admin:user_data:confirm_purge'] = '{$a} के प्रत्येक रिकॉर्ड को स्थायी रूप से हटाएँ? यह बातचीत, संदेश, रेटिंग, अध्ययन योजना, अनुस्मारक, प्रोफ़ाइल, अभ्यास स्कोर, सर्वेक्षण, ऑडिट प्रविष्टियाँ और प्रतिक्रिया तक फैल जाएगा। यह कार्रवाई पूर्ववत नहीं की जा सकती।';
$string['admin:user_data:purged'] = 'चयनित उपयोगकर्ता का सभी डेटा शुद्ध कर दिया गया है।';
$string['chat:consent_heading'] = '{$a->product} के साथ चैट करने से पहले';
$string['chat:consent_body'] = '{$a->product} एक AI-संचालित शिक्षण सहायक है। आपके संदेश और {$a->product} के उत्तर {$a->institution} के Moodle डेटाबेस में संग्रहीत किए जाते हैं और आपके प्रश्नों के उत्तर देने के लिए सबसे हाल के दस संवाद एक स्वीकृत AI मॉडल प्रदाता को भेजे जाते हैं। वैयक्तिकरण के लिए आपका पहला नाम साझा किया जाता है; AI प्रदाता को कोई अन्य पहचान संबंधी जानकारी नहीं भेजी जाती। आप किसी भी समय {$a->product} को डाउनलोड, हटा या उपयोग बंद कर सकते हैं।';
$string['chat:consent_accept'] = 'मैं समझ गया, {$a} शुरू करें';
$string['chat:consent_privacy_link'] = 'पूरी गोपनीयता सूचना पढ़ें';
$string['task:audit_cleanup'] = 'AI Course Assistant ऑडिट तालिका सफाई';
$string['task:conversation_retention'] = 'AI Course Assistant बातचीत प्रतिधारण स्वीपर';
$string['settings:audit_retention_days'] = 'ऑडिट लॉग प्रतिधारण (दिन)';
$string['settings:audit_retention_days_desc'] = 'दैनिक निर्धारित कार्य इससे पुरानी ऑडिट पंक्तियों को शुद्ध करता है। 0 अक्षम करता है। डिफ़ॉल्ट 365।';
$string['settings:conversation_retention_days'] = 'बातचीत प्रतिधारण (दिन)';
$string['settings:conversation_retention_days_desc'] = 'दैनिक निर्धारित कार्य उन बातचीत पंक्तियों को शुद्ध करता है जिनकी अंतिम संशोधित टाइमस्टैम्प इससे पुरानी है। 0 अक्षम करता है। डिफ़ॉल्ट 730।';
$string['settings:ssrf_trusted_endpoints'] = 'SSRF विश्वसनीय एंडपॉइंट';
$string['settings:ssrf_trusted_endpoints_desc'] = 'प्रति पंक्ति एक URL। सूचीबद्ध होस्ट SOLA के SSRF वैलिडेटर में loopback / निजी-IP / केवल-https जाँचों को बायपास करते हैं। इसका उपयोग केवल आपके नियंत्रण वाले नेटवर्क पर स्व-होस्टेड LLM के लिए करें — उदाहरण के लिए स्थानीय Ollama के लिए <code>http://localhost:11434</code>, उसी VPC पर vLLM पॉड के लिए <code>http://10.0.0.5:8000</code>। तुलना scheme + host + port से मेल खाती है; किसी भी पथ की उपेक्षा की जाती है। डिफ़ॉल्ट रिक्त (सब कुछ आंतरिक ब्लॉक करता है)। <code>#</code> से शुरू होने वाली पंक्तियाँ टिप्पणियाँ हैं।';
$string['task:learner_weekly_digest']    = 'AI कोर्स सहायक - शिक्षार्थी साप्ताहिक सारांश';
$string['learner_digest:subject']        = '{$a->course} के साथ आपका सप्ताह - {$a->product}';
$string['learner_digest:optin_offer']    = 'आगे क्या ध्यान देना है, इसके साथ एक छोटा साप्ताहिक ईमेल चाहिए?';
$string['next_best_action:get_started']           = '{$a->title} से शुरू करें। मुझे खोलें और पूछें "मुझे {$a->title} में मदद करें"।';
$string['next_best_action:get_started_with_module'] = '{$a->title} से शुरू करें। मॉड्यूल "{$a->module}" इसे कवर करता है।';
$string['next_best_action:review']                = '{$a->title} की मूल बातें दोहराएँ — मुझे खोलें और पूछें "मुझे {$a->title} नए जैसा समझाएँ"।';
$string['next_best_action:review_with_module']    = '"{$a->module}" में {$a->title} की मूल बातें दोहराएँ, फिर किसी प्रश्न के साथ मुझे खोलें।';
$string['next_best_action:practice']              = '{$a->title} पर जो आपके पास है उस पर निर्माण करें। मुझे खोलें और पूछें "{$a->title} के लिए हल किया हुआ उदाहरण दें"।';
$string['next_best_action:practice_with_module']  = '"{$a->module}" के साथ-साथ {$a->title} का अभ्यास करें। हल किए गए उदाहरणों के लिए मुझे खोलें।';
$string['next_best_action:quiz']                  = 'एक त्वरित क्विज़ के साथ {$a->title} को मजबूत करें। मुझे खोलें और "मुझे क्विज़ करें — अनुकूली" चुनें।';
$string['next_best_action:quiz_with_module']      = 'एक त्वरित क्विज़ के साथ {$a->title} को मजबूत करें। मॉड्यूल "{$a->module}" वह जगह है जहाँ यह है।';
$string['next_best_action:empty_state']           = 'आप अभी हर लक्ष्य पर बहुत अच्छा कर रहे हैं — याद दिलाने के लिए कुछ नहीं। जारी रखें।';
$string['next_best_action:header']                = 'यहाँ {$a} चीज़ें हैं जिन पर आगे ध्यान देना है:';
$string['learner_digest:unsubscribe_done_title']  = 'सदस्यता रद्द हो गई';
$string['learner_digest:unsubscribe_done_body']   = 'हो गया — आपको इस कोर्स के लिए {$a->product} से और साप्ताहिक ईमेल नहीं मिलेंगे। आप अपने कोर्स की चैट विंडो से कभी भी फिर से सदस्यता ले सकते हैं।';
$string['learner_digest:unsubscribe_invalid_title'] = 'सदस्यता रद्द लिंक अब मान्य नहीं है';
$string['learner_digest:unsubscribe_invalid_body']  = 'यह सदस्यता रद्द लिंक समाप्त हो गया है या त्रुटिपूर्ण है। आप अपने कोर्स की सेटिंग्स से ईमेल प्राथमिकताएँ प्रबंधित कर सकते हैं।';
$string['active_learners:line']                   = '{$a} अन्य अभी इस कोर्स का अध्ययन कर रहे हैं।';
$string['active_learners:line_global']             = '{$a} अन्य अभी अध्ययन कर रहे हैं।';
$string['settings:active_learners_scope']          = 'सक्रिय शिक्षार्थी संकेतक का दायरा';
$string['settings:active_learners_scope_desc']     = 'क्या चैट स्टार्टर्स के ऊपर "अन्य अभी अध्ययन कर रहे" संकेतक केवल उसी कोर्स में शिक्षार्थियों या पूरी साइट में शिक्षार्थियों को गिनता है। डिफ़ॉल्ट <strong>वैश्विक</strong>।';
$string['settings:active_learners_scope_global']   = 'वैश्विक (कोई भी कोर्स)';
$string['settings:active_learners_scope_course']   = 'केवल प्रति-कोर्स';
$string['learner_digest:optin_yes']      = 'हाँ, मुझे साप्ताहिक ईमेल भेजें';
$string['learner_digest:optin_no']       = 'नहीं धन्यवाद';
$string['learner_digest:optin_thanks']   = 'हो गया। हर सोमवार को साप्ताहिक सारांश मिलेगा।';
$string['learner_digest:optin_declined'] = 'हो गया। कोई ईमेल नहीं - जब चाहें मुझे खोलें जाँच के लिए।';
$string['settings:xai_proxy_url'] = 'xAI Realtime प्रॉक्सी URL';
$string['settings:xai_proxy_url_desc'] = 'SOLA xAI Realtime प्रॉक्सी सेवा का सार्वजनिक wss URL (उदाहरण के लिए wss://voice.example.com/xai-rt/rt)। जब इसे JWT रहस्य के साथ सेट किया जाता है, तो xAI ध्वनि प्रॉक्सी के माध्यम से रूट होती है और मास्टर xAI API कुंजी कभी ब्राउज़र तक नहीं पहुँचती। सीधे कनेक्शन पर वापस जाने के लिए खाली छोड़ें (उत्पादन के लिए अनुशंसित नहीं)।';
$string['settings:xai_proxy_jwt_secret'] = 'xAI Realtime प्रॉक्सी JWT रहस्य';
$string['settings:xai_proxy_jwt_secret_desc'] = 'xAI Realtime प्रॉक्सी के लिए अल्पकालिक सत्र टोकन पर हस्ताक्षर करने के लिए उपयोग किया जाने वाला HS256 साझा रहस्य। Cloudflare Worker पर MOODLE_JWT_SECRET रहस्य से मेल खाना चाहिए। समय-समय पर बदलें।';
$string['admin:vendor_dpa:title'] = '{$a} — विक्रेता DPA स्थिति';
$string['admin:vendor_dpa:intro'] = 'प्रत्येक AI प्रदाता ड्राइवर के लिए प्रशिक्षण ऑप्ट-आउट, DPA और प्रतिधारण नीति। अपनी साइट पर कौन से ड्राइवर सक्षम करने हैं यह तय करने के लिए इसका उपयोग करें। Tier 2 और उच्च रूटिंग के लिए हस्ताक्षरित DPA और संविदात्मक प्रशिक्षण ऑप्ट-आउट आवश्यक है।';
$string['admin:vendor_dpa:maintenance_note'] = 'इस तालिका का रखरखाव classes/vendor_registry.php में किया जाता है। जब विक्रेता ToS में परिवर्तन हो तो इसे अद्यतन करें।';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'डेटा संरक्षण अधिकारी ईमेल';
$string['settings:dpo_email_desc'] = '"संपर्क" के अंतर्गत शिक्षार्थी-सामना गोपनीयता सूचना पर दिखाया गया संपर्क ईमेल। पंक्ति को छिपाने के लिए खाली छोड़ें। पुनः ब्रांडेड इंस्टॉलेशन को इसे अपने स्वयं के DPO पर इंगित करना चाहिए।';
$string['settings:privacy_external_url'] = 'संस्थान गोपनीयता पृष्ठ URL';
$string['settings:privacy_external_url_desc'] = 'संस्थान-स्तरीय गोपनीयता पृष्ठ का लिंक, "संपर्क" के अंतर्गत शिक्षार्थी-सामना गोपनीयता सूचना पर दिखाया गया। पंक्ति को छिपाने के लिए खाली छोड़ें।';
$string['settings:privacy_notice_override'] = 'गोपनीयता सूचना ओवरराइड (HTML)';
$string['settings:privacy_notice_override_desc'] = 'यदि सेट किया गया है, तो यह HTML /local/ai_course_assistant/privacy.php पर रेंडर की गई डिफ़ॉल्ट ब्रांडेड गोपनीयता सूचना को बदल देता है। कोड संपादित किए बिना अपने संस्थान के लिए कानूनी-समीक्षित पाठ डालने के लिए इसका उपयोग करें। डिफ़ॉल्ट सूचना का उपयोग करने के लिए खाली छोड़ें, जो अपना पाठ सात ब्रांडिंग कॉन्फ़िग कुंजियों से प्राप्त करती है।';
$string['objectives:title'] = 'सीखने के उद्देश्य और महारत';
$string['objectives:toggles_heading'] = 'महारत ट्रैकिंग';
$string['objectives:toggle_master'] = 'इस पाठ्यक्रम के लिए महारत ट्रैकिंग सक्षम करें';
$string['objectives:toggle_chip'] = 'छात्रों को सीखने की महारत चिप दिखाएँ';
$string['objectives:toggle_chip_help'] = 'वैकल्पिक। जब बंद होता है, तब भी महारत चुपचाप सहायक का मार्गदर्शन करती है लेकिन शिक्षार्थियों को कोई संकेतक नहीं दिखता।';
$string['objectives:toggled'] = 'सेटिंग अद्यतन की गई।';
$string['objectives:detected_heading'] = '{$a->source} से {$a->count} सीखने के उद्देश्यों का पता चला।';
$string['objectives:source_competency'] = 'Moodle दक्षताएँ';
$string['objectives:source_summary'] = 'पाठ्यक्रम सारांश';
$string['objectives:source_section'] = 'अनुभाग या प्रथम-पृष्ठ सामग्री';
$string['objectives:source_page'] = 'पाठ्यक्रम पृष्ठ';
$string['objectives:source_llm'] = 'AI निष्कर्षण';
$string['objectives:source_manual'] = 'मैन्युअल प्रविष्टि';
$string['objectives:source_none'] = 'कोई स्वचालित स्रोत नहीं';
$string['objectives:import_detected'] = 'इन पता लगाए गए उद्देश्यों को आयात करें';
$string['objectives:import_llm'] = 'AI के साथ उद्देश्य निकालें';
$string['objectives:llm_empty'] = 'AI निष्कर्षण ने कोई उद्देश्य नहीं लौटाया। बाद में पुनः प्रयास करें या उन्हें मैन्युअल रूप से दर्ज करें।';
$string['objectives:imported'] = '{$a} उद्देश्य आयात किए गए।';
$string['objectives:none_detected'] = 'स्वचालित रूप से कोई सीखने के उद्देश्य नहीं मिले। उन्हें नीचे मैन्युअल रूप से दर्ज करें, या AI निष्कर्षण का उपयोग करें।';
$string['objectives:list_heading'] = 'वर्तमान उद्देश्य';
$string['objectives:col_code'] = 'कोड';
$string['objectives:col_title'] = 'शीर्षक';
$string['objectives:col_source'] = 'स्रोत';
$string['objectives:col_actions'] = 'क्रियाएँ';
$string['objectives:add_heading'] = 'एक उद्देश्य जोड़ें';
$string['objectives:add_submit'] = 'उद्देश्य जोड़ें';
$string['objectives:saved'] = 'उद्देश्य सहेजा गया।';
$string['objectives:deleted'] = 'उद्देश्य हटाया गया।';
$string['objectives:delete_confirm'] = 'क्या इस उद्देश्य और इसके सभी प्रयास इतिहास को हटाया जाए?';
$string['objectives:delete_all'] = 'इस पाठ्यक्रम के सभी उद्देश्य हटाएँ';
$string['objectives:delete_all_confirm'] = 'क्या इस पाठ्यक्रम के सभी उद्देश्य और प्रयास इतिहास हटाया जाए? पूर्ववत नहीं किया जा सकता।';
$string['objectives:deleted_all'] = 'इस पाठ्यक्रम के सभी उद्देश्य हटा दिए गए।';
$string['mastery:chip_aria'] = 'सीखने की महारत स्थिति';
$string['mastery:popover_aria'] = 'सीखने की महारत विवरण';
$string['mastery:chip_label'] = '{$a->total} में से {$a->mastered} में महारत';
$string['mastery:status_mastered'] = 'महारत प्राप्त';
$string['mastery:status_learning'] = 'प्रगति में';
$string['mastery:status_not_started'] = 'शुरू नहीं हुआ';
$string['mastery:popover_empty'] = 'इस पाठ्यक्रम के लिए कोई सीखने के उद्देश्य कॉन्फ़िगर नहीं किए गए हैं।';
$string['settings:mastery_heading'] = 'महारत ट्रैकिंग';
$string['settings:mastery_heading_desc'] = 'प्रति-पाठ्यक्रम ऑप्ट-इन सुविधा जो प्रश्नोत्तरी उत्तरों और सहायक बातचीत के संवादों को पाठ्यक्रम के सीखने के उद्देश्यों के विरुद्ध टैग करती है, फिर प्रश्न पूछने को निर्देशित करने के लिए सिस्टम प्रॉम्प्ट में एक संक्षिप्त महारत स्नैपशॉट डालती है। डिफ़ॉल्ट रूप से सूक्ष्म: शिक्षार्थियों को कुछ नहीं दिखता जब तक प्रति-पाठ्यक्रम चिप टॉगल चालू न हो।';
$string['settings:mastery_threshold'] = 'महारत सीमा';
$string['settings:mastery_threshold_desc'] = 'रोलिंग सटीकता जिसके बराबर या ऊपर एक उद्देश्य को महारत प्राप्त माना जाता है। 0.0 से 1.0। डिफ़ॉल्ट 0.85।';
$string['settings:mastery_window'] = 'प्रयास खिड़की';
$string['settings:mastery_window_desc'] = 'रोलिंग सटीकता में भार देने के लिए प्रति उद्देश्य सबसे हाल के प्रयासों की संख्या। डिफ़ॉल्ट 8।';
$string['settings:mastery_decay_enabled']        = 'महारत क्षय सक्षम करें';
$string['settings:mastery_decay_enabled_desc']   = 'चालू होने पर, महारत स्कोर सबसे हाल के प्रयास टाइमस्टैम्प के मुकाबले समय के साथ क्षय होते हैं। पहले से महारत प्राप्त उद्देश्य पर्याप्त समय बीतने के बाद "सीख रहा" पर वापस आ जाता है। "सीख रहा" से नीचे नहीं गिरता। <strong>v4.0 में डिफ़ॉल्ट बंद।</strong>';
$string['settings:mastery_decay_half_life_days'] = 'महारत क्षय अर्ध-आयु (दिन)';
$string['settings:mastery_decay_half_life_days_desc'] = 'दिनों में अर्ध-आयु। स्कोर को 0.5 ^ (अंतिम प्रयास से दिन / अर्ध-आयु) से गुणा किया जाता है। डिफ़ॉल्ट 30। केवल जब क्षय सक्षम हो तब उपयोग किया जाता है।';
$string['settings:mastery_classifier_model'] = 'क्लासिफायर मॉडल';
$string['settings:mastery_classifier_model_desc'] = 'सहायक संवादों को उद्देश्यों के विरुद्ध वर्गीकृत करने के लिए उपयोग किया जाने वाला मॉडल। डिफ़ॉल्ट AI प्रदाता मॉडल को विरासत में लेने के लिए खाली छोड़ें; अन्यथा gpt-4o-mini जैसा सस्ता मॉडल निर्दिष्ट करें।';
$string['settings:mastery_classifier_weight'] = 'क्लासिफायर भार';
$string['settings:mastery_classifier_weight_desc'] = 'प्रश्नोत्तरी प्रयास (1.0) के सापेक्ष बातचीत प्रयास का कितना वजन है। डिफ़ॉल्ट 0.3।';
$string['settings:mastery_classifier_threshold'] = 'क्लासिफायर आत्मविश्वास सीमा';
$string['settings:mastery_classifier_threshold_desc'] = 'बातचीत प्रयास रिकॉर्ड करने के लिए आवश्यक न्यूनतम क्लासिफायर आत्मविश्वास। 0.0 से 1.0। डिफ़ॉल्ट 0.7।';
$string['chat:mode_progress'] = 'प्रगति';
$string['objectives:toggle_dashboard'] = 'छात्रों को प्रगति डैशबोर्ड टैब दिखाएँ';
$string['objectives:toggle_dashboard_help'] = 'वैकल्पिक। विजेट के अंदर चैट / आवाज़ / इतिहास के बगल में प्रगति टैब जोड़ता है। टैब शिक्षार्थियों को दिखाता है कि उन्होंने किन उद्देश्यों में महारत हासिल की है, कौन से प्रगति में हैं, और कौन से उन्होंने शुरू नहीं किए हैं।';
$string['mastery:dashboard_title'] = 'आपकी सीखने की प्रगति';
$string['mastery:dashboard_subtitle'] = 'महारत आपकी प्रश्नोत्तरी उत्तरों और चैट अभ्यास से मापी जाती है। जारी रखें — गहराई कवरेज से बेहतर है।';
$string['mastery:dashboard_refresh'] = 'ताज़ा करें';
$string['mastery:section_mastered'] = 'महारत प्राप्त';
$string['mastery:section_learning'] = 'प्रगति में';
$string['mastery:section_not_started'] = 'अभी तक शुरू नहीं हुआ';
$string['mastery:summary_label'] = '{$a->total} में से {$a->mastered} उद्देश्यों में महारत';
$string['mastery:ask_about'] = 'इसके बारे में पूछें';
$string['mastery:celebrate'] = 'आपने इस पाठ्यक्रम के हर उद्देश्य में महारत हासिल कर ली है। बहुत बढ़िया काम।';
$string['mastery:ask_template'] = 'इस उद्देश्य का अभ्यास करने और इसकी मेरी समझ को गहरा करने में मेरी मदद करें: {$a}।';
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
