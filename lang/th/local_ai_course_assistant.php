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
 * Language strings for local_ai_course_assistant — Thai.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'ผู้ช่วยรายวิชา AI';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'จัดเก็บการสนทนากับผู้สอน AI ตามผู้ใช้และรายวิชา';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'รหัสผู้ใช้ที่เป็นเจ้าของการสนทนา';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'รหัสรายวิชาที่การสนทนาสังกัดอยู่';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'ชื่อของการสนทนา';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'เวลาที่สร้างการสนทนา';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'เวลาที่แก้ไขการสนทนาครั้งล่าสุด';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'จัดเก็บข้อความแต่ละรายการในการสนทนากับผู้สอน AI';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'รหัสผู้ใช้ที่ส่งข้อความ';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'รหัสรายวิชาที่ข้อความสังกัดอยู่';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'บทบาทของผู้ส่งข้อความ (ผู้ใช้หรือผู้ช่วย)';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'เนื้อหาของข้อความ';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'จำนวนโทเคนที่ใช้สำหรับข้อความ';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'เวลาที่สร้างข้อความ';
$string['ai_course_assistant:use'] = 'ใช้แชทผู้สอน AI';
$string['ai_course_assistant:viewanalytics'] = 'ดูการวิเคราะห์แชทผู้สอน AI';
$string['ai_course_assistant:manage'] = 'จัดการการตั้งค่าแชทผู้สอน AI (บทบาทผู้ดูแลระบบ)';
$string['settings:enabled'] = 'เปิดใช้งานผู้ช่วยรายวิชา AI';
$string['settings:enabled_desc'] = 'เปิดหรือปิดวิดเจ็ตผู้ช่วยรายวิชา AI บนหน้ารายวิชา';
$string['settings:default_course_mode'] = 'ค่าเริ่มต้นสำหรับหลักสูตรใหม่';
$string['settings:default_course_mode_desc'] = 'ควบคุมว่า SOLA จะปรากฏบนหลักสูตรหรือไม่เมื่อไม่มีการเลือกตามหลักสูตร การติดตั้งใหม่จะตั้งค่าเริ่มต้นเป็น "ปิดใช้งานเป็นค่าเริ่มต้น" เพื่อให้ผู้ดูแลระบบสามารถเลือกเปิดใช้งานหลักสูตรทีละหลักสูตรจากหน้า Analytics หรือหน้า Course AI Settings ได้';
$string['settings:default_course_mode_per_course'] = 'ปิดใช้งานเป็นค่าเริ่มต้น (เปิดใช้งานตามหลักสูตร)';
$string['settings:default_course_mode_all'] = 'เปิดใช้งานในทุกหลักสูตร';
$string['settings:auto_open'] = 'เปิดอัตโนมัติเมื่อเข้าครั้งแรก';
$string['settings:auto_open_desc'] = 'เมื่อเปิดใช้งาน ลิ้นชัก SOLA จะเปิดโดยอัตโนมัติในครั้งแรกที่นักเรียนเข้าสู่แต่ละหลักสูตร การโหลดหน้าครั้งต่อไปในหลักสูตรเดียวกันจะไม่เปิดลิ้นชักอีก — สถานะจะถูกติดตามตามหลักสูตรในเบราว์เซอร์ของนักเรียนผ่าน localStorage ใช้ได้บนเดสก์ท็อปและมือถือ สามารถแทนที่ได้ตามหลักสูตรจากหน้า Course AI Settings';
$string['settings:comparison_providers'] = 'ผู้ให้บริการเปรียบเทียบ (ตัวเลือก LLM)';
$string['settings:comparison_providers_desc'] = 'เพิ่มผู้ให้บริการ AI เพิ่มเติมลงในตัวเลือก LLM ในวิดเจ็ตเพื่อให้ผู้ดูแลระบบสามารถเปรียบเทียบคำตอบจากผู้ให้บริการต่างๆ ได้ ใช้ตารางด้านล่างเพื่อเพิ่มแถว คอลัมน์อุณหภูมิเป็นตัวเลือก (เว้นว่างไว้เพื่อใช้อุณหภูมิส่วนกลาง) รูปแบบที่จัดเก็บ: provider_id|api_key|model1,model2|temperature ผู้ให้บริการหลักที่กำหนดค่าไว้ด้านบนจะถูกรวมไว้โดยอัตโนมัติเสมอ เฉพาะผู้ดูแลระบบที่มีสิทธิ์จัดการเท่านั้นที่จะเห็นตัวเลือก นักเรียนจะไม่เห็น Provider IDs ที่ถูกต้อง: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'ผู้ให้บริการ AI เริ่มต้น';
$string['settings:provider_desc'] = 'เลือกผู้ให้บริการ AI ที่จะใช้สำหรับการจบแชท เลือก "Moodle AI (core_ai subsystem)" เพื่อเปลี่ยนเส้นทางคำขอผ่านการกำหนดค่า AI ในตัวของ Moodle ที่ Site admin > AI; ช่อง API key, โมเดล และ URL พื้นฐานด้านล่างจะถูกละเว้นในโหมดนั้น Streaming, การใช้เครื่องมือ และ prompt caching ไม่พร้อมใช้งานผ่าน core_ai — การตอบกลับจะถูกส่งเป็นก้อนเดียว ใช้ผู้ให้บริการโดยตรงเพื่อประสบการณ์นักเรียนที่ดีที่สุด';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (ในเครื่อง)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'กำหนดเอง (เข้ากันได้กับ OpenAI)';
$string['settings:apikey'] = 'คีย์ API';
$string['settings:apikey_desc'] = 'คีย์ API สำหรับผู้ให้บริการที่เลือก ไม่จำเป็นสำหรับ Ollama';
$string['settings:model'] = 'ชื่อโมเดล';
$string['settings:model_desc'] = 'โมเดลที่จะใช้ ค่าเริ่มต้นขึ้นอยู่กับผู้ให้บริการ (เช่น claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01)';
$string['settings:apibaseurl'] = 'URL ฐาน API';
$string['settings:apibaseurl_desc'] = 'URL ฐาน API กรอกอัตโนมัติตามผู้ให้บริการ แต่สามารถแก้ไขได้ เว้นว่างเพื่อใช้ค่าเริ่มต้นของผู้ให้บริการ';
$string['settings:systemprompt'] = 'แม่แบบพรอมต์ระบบ';
$string['settings:systemprompt_desc'] = 'พรอมต์ระบบที่ส่งไปยัง AI ใช้ตัวแทนที่: {{coursename}}, {{userrole}}, {{coursetopics}}';
$string['settings:systemprompt_default'] = 'คุณเป็นผู้สอน AI ที่มีประโยชน์สำหรับรายวิชา "{{coursename}}" บทบาทของนักศึกษาคือ {{userrole}}

หัวข้อที่ครอบคลุมในรายวิชา:
{{coursetopics}}

ช่วยนักศึกษาเข้าใจเนื้อหารายวิชา ให้กำลังใจ ชัดเจน และเข้มงวดทางการศึกษา';
$string['settings:temperature'] = 'อุณหภูมิ';
$string['settings:temperature_desc'] = 'ควบคุมความสุ่ม ค่าต่ำจะเน้นมากขึ้น ค่าสูงจะสร้างสรรค์มากขึ้น ช่วง: 0.0 ถึง 2.0';
$string['settings:maxhistory'] = 'ประวัติการสนทนาสูงสุด';
$string['settings:maxhistory_desc'] = 'จำนวนคู่ข้อความสูงสุดที่รวมในคำขอ API ข้อความเก่าจะถูกลบ';
$string['settings:avatar'] = 'อวาตาร์แชท';
$string['settings:avatar_desc'] = 'เลือกไอคอนอวาตาร์สำหรับปุ่มวิดเจ็ตแชท';
$string['settings:avatar_saylor'] = 'โลโก้ {$a} (ค่าเริ่มต้น)';
$string['settings:position'] = 'ตำแหน่งวิดเจ็ต';
$string['settings:position_desc'] = 'ตำแหน่งของวิดเจ็ตแชทบนหน้า';
$string['settings:position_br'] = 'ล่างขวา';
$string['settings:position_bl'] = 'ล่างซ้าย';
$string['settings:position_tr'] = 'บนขวา';
$string['settings:position_tl'] = 'บนซ้าย';
$string['chat:settings'] = 'การตั้งค่าปลั๊กอิน';
$string['analytics:viewdashboard'] = 'ดูแดชบอร์ดการวิเคราะห์';
$string['coursesettings:title'] = 'การตั้งค่า AI ของรายวิชา';
$string['coursesettings:enabled'] = 'เปิดใช้งานการแทนที่รายวิชา';
$string['coursesettings:enabled_desc'] = 'เมื่อเปิดใช้งาน การตั้งค่าด้านล่างจะแทนที่การกำหนดค่าผู้ให้บริการ AI แบบทั่วไปสำหรับรายวิชานี้เท่านั้น เว้นช่องว่างเพื่อสืบทอดค่าทั่วไป';
$string['coursesettings:sola_enabled'] = 'SOLA ในหลักสูตรนี้';
$string['coursesettings:sola_enabled_toggle'] = 'แสดงวิดเจ็ต SOLA ในหลักสูตรนี้';
$string['coursesettings:sola_enabled_desc'] = 'ควบคุมว่าวิดเจ็ตแชท SOLA จะปรากฏในหลักสูตรนี้หรือไม่ ค่าเริ่มต้นของทั้งไซต์ถูกตั้งค่าในการตั้งค่าปลั๊กอินภายใต้ General > Default for new courses';
$string['coursesettings:using_global'] = 'กำลังใช้การตั้งค่าทั่วไป';
$string['coursesettings:saved'] = 'บันทึกการตั้งค่า AI ของรายวิชาแล้ว';
$string['coursesettings:global_settings_link'] = 'การตั้งค่า AI ทั่วไป';
$string['lang:switch'] = 'ใช่ เปลี่ยน';
$string['lang:dismiss'] = 'ไม่ ขอบคุณ';
$string['lang:change'] = 'เปลี่ยนภาษา';
$string['lang:english'] = 'อังกฤษ';
$string['chat:title'] = 'ผู้สอน AI';
$string['chat:placeholder'] = 'ถามคำถาม...';
$string['chat:send'] = 'ส่ง';
$string['chat:close'] = 'ปิดแชท';
$string['chat:open'] = 'เปิดแชทผู้สอน AI';
$string['chat:clear'] = 'ล้างหน้าจอ';
$string['chat:clear_confirm'] = 'ล้างข้อความที่แสดงอยู่หรือไม่ ประวัติแชททั้งหมดของคุณจะยังคงถูกบันทึกไว้และสามารถโหลดใหม่ได้โดยเปิดวิดเจ็ตอีกครั้ง';
$string['chat:copy'] = 'คัดลอกการสนทนา';
$string['chat:copied'] = 'คัดลอกการสนทนาไปยังคลิปบอร์ดแล้ว';
$string['chat:copy_failed'] = 'ไม่สามารถคัดลอกการสนทนาได้';
$string['chat:thinking'] = 'กำลังคิด...';
$string['chat:error'] = 'ขออภัย เกิดข้อผิดพลาด กรุณาลองอีกครั้ง';
$string['chat:error_auth'] = 'ข้อผิดพลาดในการยืนยันตัวตน กรุณาติดต่อผู้ดูแลระบบ';
$string['chat:error_ratelimit'] = 'คำขอมากเกินไป กรุณารอสักครู่แล้วลองอีกครั้ง';
$string['chat:error_unavailable'] = 'บริการ AI ไม่พร้อมใช้งานชั่วคราว กรุณาลองอีกครั้งในภายหลัง';
$string['chat:error_notconfigured'] = 'ผู้สอน AI ยังไม่ได้กำหนดค่า กรุณาติดต่อผู้ดูแลระบบ';
$string['chat:mic'] = 'พูดคำถามของคุณ';
$string['chat:mic_error'] = 'ข้อผิดพลาดไมโครโฟน กรุณาตรวจสอบสิทธิ์ของเบราว์เซอร์';
$string['chat:mic_unsupported'] = 'เบราว์เซอร์นี้ไม่รองรับการป้อนข้อมูลด้วยเสียง';
$string['chat:newline_hint'] = 'Shift+Enter สำหรับย่อหน้าใหม่';
$string['chat:you'] = 'คุณ';
$string['chat:assistant'] = 'ผู้สอน AI';
$string['chat:history_loaded'] = 'โหลดการสนทนาก่อนหน้าแล้ว';
$string['chat:history_cleared'] = 'ล้างประวัติแชทแล้ว';
$string['chat:offtopic_warning'] = 'ดูเหมือนว่าคำถามของคุณไม่เกี่ยวข้องกับรายวิชานี้ พยายามอยู่ในหัวข้อเพื่อให้ฉันช่วยคุณได้ดีที่สุด!';
$string['chat:offtopic_ended'] = 'การเข้าถึงผู้สอน AI ของคุณถูกระงับชั่วคราวเป็นเวลา {$a} นาที เนื่องจากการสนทนาออกนอกหัวข้อมากเกินไป ใช้เวลานี้ทบทวนเนื้อหารายวิชา คุณสามารถลองอีกครั้งในภายหลัง';
$string['chat:offtopic_locked'] = 'การเข้าถึงผู้สอน AI ของคุณถูกระงับชั่วคราว คุณสามารถลองอีกครั้งใน {$a} นาที เมื่อกลับมาให้เน้นคำถามที่เกี่ยวข้องกับรายวิชา';
$string['chat:escalated_to_support'] = 'ฉันไม่สามารถตอบคำถามของคุณได้อย่างสมบูรณ์ จึงได้สร้างตั๋วสนับสนุนให้คุณ สมาชิกในทีมสนับสนุนจะติดต่อคุณ หมายเลขตั๋วของคุณคือ: {$a}';
$string['chat:studyplan_intro'] = 'ฉันสามารถช่วยคุณสร้างแผนการเรียนสำหรับรายวิชานี้ได้! เพียงบอกฉันว่าคุณสามารถอุทิศเวลาเรียนได้กี่ชั่วโมงต่อสัปดาห์ แล้วฉันจะช่วยคุณสร้างแผนที่เป็นระบบ';
$string['settings:faq_heading'] = 'คำถามที่พบบ่อยและการสนับสนุน';
$string['settings:faq_heading_desc'] = 'กำหนดค่าคำถามที่พบบ่อยแบบรวมศูนย์และการเชื่อมต่อตั๋วสนับสนุน Zendesk';
$string['settings:faq_content'] = 'เนื้อหาคำถามที่พบบ่อย';
$string['settings:faq_content_desc'] = 'ป้อนรายการคำถามที่พบบ่อย (หนึ่งรายการต่อบรรทัดในรูปแบบ: Q: คำถาม | A: คำตอบ) รายการเหล่านี้จะถูกให้กับ AI เพื่อตอบคำถามสนับสนุนทั่วไป';
$string['settings:zendesk_enabled'] = 'เปิดใช้งานการส่งต่อ Zendesk';
$string['settings:zendesk_enabled_desc'] = 'เมื่อ AI ไม่สามารถแก้ไขคำถามสนับสนุนได้ จะสร้างตั๋ว Zendesk โดยอัตโนมัติพร้อมสรุปการสนทนา';
$string['settings:zendesk_subdomain'] = 'โดเมนย่อย Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'โดเมนย่อย Zendesk ของคุณ (เช่น "mycompany" สำหรับ mycompany.zendesk.com)';
$string['settings:zendesk_email'] = 'อีเมล API Zendesk';
$string['settings:zendesk_email_desc'] = 'ที่อยู่อีเมลผู้ใช้ Zendesk สำหรับการยืนยันตัวตน API (พร้อมส่วนต่อท้าย /token)';
$string['settings:zendesk_token'] = 'โทเคน API Zendesk';
$string['settings:zendesk_token_desc'] = 'โทเคน API สำหรับการยืนยันตัวตน Zendesk';
$string['settings:offtopic_heading'] = 'การตรวจจับหัวข้อนอกเรื่อง';
$string['settings:offtopic_heading_desc'] = 'กำหนดค่าวิธีที่แชทจัดการการสนทนานอกหัวข้อ';
$string['settings:offtopic_enabled'] = 'เปิดใช้งานการตรวจจับหัวข้อนอกเรื่อง';
$string['settings:offtopic_enabled_desc'] = 'ให้ AI ตรวจจับและเปลี่ยนเส้นทางการสนทนานอกหัวข้อ';
$string['settings:offtopic_max'] = 'จำนวนข้อความนอกหัวข้อสูงสุด';
$string['settings:offtopic_max_desc'] = 'จำนวนข้อความนอกหัวข้อติดต่อกันก่อนดำเนินการ';
$string['settings:offtopic_action'] = 'การดำเนินการเมื่อนอกหัวข้อ';
$string['settings:offtopic_action_desc'] = 'สิ่งที่จะทำเมื่อถึงขีดจำกัดข้อความนอกหัวข้อ';
$string['settings:offtopic_action_warn'] = 'เตือนและเปลี่ยนเส้นทาง';
$string['settings:offtopic_action_end'] = 'ล็อกการเข้าถึงชั่วคราว';
$string['settings:offtopic_lockout_duration'] = 'ระยะเวลาล็อก (นาที)';
$string['settings:offtopic_lockout_duration_desc'] = 'ระยะเวลา (เป็นนาที) ที่นักศึกษาจะสูญเสียการเข้าถึงผู้สอน AI หลังจากเกินขีดจำกัดนอกหัวข้อ ค่าเริ่มต้น: 30 นาที';
$string['settings:studyplan_heading'] = 'การวางแผนการเรียนและการแจ้งเตือน';
$string['settings:studyplan_heading_desc'] = 'กำหนดค่าฟีเจอร์แผนการเรียนและการแจ้งเตือน';
$string['settings:studyplan_enabled'] = 'เปิดใช้งานการวางแผนการเรียน';
$string['settings:studyplan_enabled_desc'] = 'ให้ผู้สอน AI ช่วยนักศึกษาสร้างแผนการเรียนเฉพาะบุคคลตามเวลาที่มี';
$string['settings:reminders_email_enabled'] = 'เปิดใช้งานการแจ้งเตือนทางอีเมล';
$string['settings:reminders_email_enabled_desc'] = 'ให้นักศึกษาสมัครรับการแจ้งเตือนการเรียนทางอีเมล';
$string['settings:reminders_whatsapp_enabled'] = 'เปิดใช้งานการแจ้งเตือนทาง WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'ให้นักศึกษาสมัครรับการแจ้งเตือนการเรียนทาง WhatsApp (ต้องกำหนดค่า WhatsApp API)';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'จุดปลาย API สำหรับส่งข้อความ WhatsApp (เช่น Twilio, MessageBird) ต้องรับ POST พร้อมเนื้อหา JSON ที่มีฟิลด์ "to", "from" และ "body"';
$string['settings:whatsapp_api_token'] = 'โทเคน API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'โทเคนยืนยันตัวตนสำหรับ WhatsApp API';
$string['settings:whatsapp_from_number'] = 'หมายเลขผู้ส่ง WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'หมายเลขโทรศัพท์ที่ส่งข้อความ WhatsApp (พร้อมรหัสประเทศ เช่น +14155238886)';
$string['settings:whatsapp_blocked_countries'] = 'ประเทศที่ถูกบล็อก WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'รหัสประเทศ ISO 3166-1 alpha-2 คั่นด้วยเครื่องหมายจุลภาค ที่ไม่อนุญาตการแจ้งเตือน WhatsApp เนื่องจากกฎระเบียบท้องถิ่น (เช่น "CN,IR,KP")';
$string['reminder:email_subject'] = 'การแจ้งเตือนการเรียน: {$a}';
$string['reminder:email_body'] = 'สวัสดี {$a->firstname}

นี่คือการแจ้งเตือนการเรียนสำหรับ "{$a->coursename}"

{$a->message}

แผนการเรียนของคุณแนะนำ {$a->hours_per_week} ชั่วโมงต่อสัปดาห์สำหรับรายวิชานี้

ทำดีต่อไป!

---
หากต้องการหยุดรับการแจ้งเตือนเหล่านี้ คลิกที่นี่: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'การแจ้งเตือนการเรียนสำหรับ {$a->coursename}: {$a->message} (ยกเลิกการสมัคร: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'เป้าหมายการเรียนวันนี้: ';
$string['unsubscribe:title'] = 'ยกเลิกการสมัครรับการแจ้งเตือนการเรียน';
$string['unsubscribe:success'] = 'คุณได้ยกเลิกการสมัครรับการแจ้งเตือนการเรียนสำหรับรายวิชานี้แล้ว';
$string['unsubscribe:already'] = 'คุณได้ยกเลิกการสมัครรับการแจ้งเตือนเหล่านี้แล้ว';
$string['unsubscribe:invalid'] = 'ลิงก์ยกเลิกการสมัครไม่ถูกต้องหรือหมดอายุ';
$string['unsubscribe:resubscribe'] = 'เปลี่ยนใจ? คุณสามารถเปิดใช้งานการแจ้งเตือนอีกครั้งผ่านแชทผู้สอน AI';
$string['task:send_reminders'] = 'ส่งการแจ้งเตือนการเรียนของผู้สอน AI';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'จัดเก็บแผนการเรียนของนักศึกษา';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'รหัสผู้ใช้ที่เป็นเจ้าของแผนการเรียน';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'รายวิชาที่แผนการเรียนสังกัดอยู่';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'ชั่วโมงต่อสัปดาห์ที่นักศึกษาวางแผนจะเรียน';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'รายละเอียดแผนการเรียนในรูปแบบ JSON';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'จัดเก็บการตั้งค่าการแจ้งเตือนการเรียนและการสมัครสมาชิก';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'รหัสผู้ใช้ที่สมัครรับการแจ้งเตือน';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'ช่องทางการแจ้งเตือน (อีเมลหรือ WhatsApp)';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'ที่อยู่อีเมลหรือหมายเลขโทรศัพท์สำหรับการแจ้งเตือน';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'รหัสประเทศของผู้ใช้สำหรับการปฏิบัติตามกฎระเบียบ';
$string['analytics:title'] = 'การวิเคราะห์ผู้สอน AI';
$string['analytics:overview'] = 'ภาพรวม';
$string['analytics:total_conversations'] = 'การสนทนาทั้งหมด';
$string['analytics:total_messages'] = 'ข้อความทั้งหมด';
$string['analytics:active_students'] = 'นักศึกษาที่ใช้งานอยู่';
$string['analytics:avg_messages_per_student'] = 'ข้อความเฉลี่ยต่อนักศึกษา';
$string['analytics:offtopic_rate'] = 'อัตราข้อความนอกหัวข้อ';
$string['analytics:escalation_count'] = 'ส่งต่อไปยังฝ่ายสนับสนุน';
$string['analytics:studyplan_adoption'] = 'นักศึกษาที่มีแผนการเรียน';
$string['analytics:usage_trends'] = 'แนวโน้มการใช้งาน';
$string['analytics:daily_messages'] = 'ปริมาณข้อความรายวัน';
$string['analytics:hotspots'] = 'จุดสำคัญของรายวิชา';
$string['analytics:hotspots_desc'] = 'ส่วนของรายวิชาที่ถูกอ้างอิงบ่อยที่สุดในคำถามของนักศึกษา ตัวเลขสูงอาจบ่งบอกถึงพื้นที่ที่นักศึกษาต้องการการสนับสนุนเพิ่มเติม';
$string['analytics:section'] = 'ส่วน';
$string['analytics:mention_count'] = 'การกล่าวถึง';
$string['analytics:common_prompts'] = 'รูปแบบคำถามที่พบบ่อย';
$string['analytics:common_prompts_desc'] = 'รูปแบบคำถามที่เกิดขึ้นซ้ำจากนักศึกษา ตรวจสอบเพื่อระบุช่องว่างอย่างเป็นระบบในเนื้อหารายวิชา';
$string['analytics:prompt_pattern'] = 'รูปแบบ';
$string['analytics:frequency'] = 'ความถี่';
$string['analytics:recent_activity'] = 'กิจกรรมล่าสุด';
$string['analytics:no_data'] = 'ยังไม่มีข้อมูลการวิเคราะห์ ข้อมูลจะปรากฏเมื่อนักศึกษาเริ่มใช้ผู้สอน AI';
$string['analytics:timerange'] = 'ช่วงเวลา';
$string['analytics:last_7_days'] = '7 วันที่ผ่านมา';
$string['analytics:last_30_days'] = '30 วันที่ผ่านมา';
$string['analytics:all_time'] = 'ตลอดเวลา';
$string['analytics:export'] = 'ส่งออกข้อมูล';
$string['analytics:provider_comparison'] = 'การเปรียบเทียบผู้ให้บริการ AI';
$string['analytics:provider_comparison_desc'] = 'เปรียบเทียบประสิทธิภาพของผู้ให้บริการ AI ที่ใช้ในรายวิชานี้';
$string['analytics:provider'] = 'ผู้ให้บริการ';
$string['analytics:response_count'] = 'การตอบกลับ';
$string['analytics:avg_response_length'] = 'ความยาวการตอบกลับเฉลี่ย';
$string['analytics:total_tokens'] = 'โทเคนทั้งหมด';
$string['analytics:avg_tokens'] = 'โทเคนเฉลี่ย / การตอบกลับ';
$string['usersettings:title'] = 'ผู้ช่วยรายวิชา AI: ข้อมูลของคุณ';
$string['usersettings:intro'] = 'จัดการข้อมูลแชทผู้สอน AI และการตั้งค่าความเป็นส่วนตัวของคุณ';
$string['usersettings:privacy_info'] = 'การสนทนาของคุณกับผู้สอน AI จะถูกจัดเก็บเพื่อให้การสนับสนุนอย่างต่อเนื่องตลอดรายวิชา คุณมีสิทธิ์ควบคุมข้อมูลเหล่านี้อย่างเต็มที่และสามารถลบได้ทุกเมื่อ';
$string['usersettings:usage_stats'] = 'สถิติการใช้งานของคุณ';
$string['usersettings:total_messages'] = 'ข้อความทั้งหมด';
$string['usersettings:total_conversations'] = 'การสนทนา';
$string['usersettings:messages'] = 'ข้อความ';
$string['usersettings:last_activity'] = 'กิจกรรมล่าสุด';
$string['usersettings:delete_course_data'] = 'ลบข้อมูลรายวิชา';
$string['usersettings:no_data'] = 'คุณยังไม่ได้ใช้ผู้สอน AI ข้อมูลการใช้งานจะปรากฏที่นี่เมื่อคุณเริ่มแชท';
$string['usersettings:delete_all_title'] = 'ลบข้อมูลทั้งหมดของคุณ';
$string['usersettings:delete_all_warning'] = 'การดำเนินการนี้จะลบการสนทนาทั้งหมดกับผู้สอน AI ในทุกรายวิชาอย่างถาวร ไม่สามารถย้อนกลับได้';
$string['usersettings:delete_all_button'] = 'ลบข้อมูลทั้งหมดของฉัน';
$string['usersettings:confirm_delete_course'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลผู้สอน AI ทั้งหมดสำหรับรายวิชา "{$a}" อย่างถาวร? ไม่สามารถย้อนกลับได้';
$string['usersettings:confirm_delete_all'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลผู้สอน AI ทั้งหมดในทุกรายวิชาอย่างถาวร? ไม่สามารถย้อนกลับได้';
$string['usersettings:data_deleted'] = 'ข้อมูลของคุณถูกลบแล้ว';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'สวัสดี, {$a}! ฉันคือ SOLA วันนี้ฉันช่วยอะไรคุณได้บ้าง?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'เปิด SOLA';
$string['chat:change_avatar'] = 'เปลี่ยนอวาตาร์';

// Quiz UI.
$string['chat:quiz'] = 'ทำแบบทดสอบฝึกหัด';
$string['chat:quiz_setup_title'] = 'แบบทดสอบฝึกหัด';
$string['chat:quiz_questions'] = 'จำนวนคำถาม';
$string['chat:quiz_topic'] = 'หัวข้อ';
$string['chat:quiz_topic_guided'] = 'AI แนะนำ (ตามความก้าวหน้าของคุณ)';
$string['chat:quiz_topic_default'] = 'เนื้อหารายวิชาปัจจุบัน';
$string['chat:quiz_topic_custom'] = 'หัวข้อกำหนดเอง…';
$string['chat:quiz_custom_placeholder'] = 'ป้อนหัวข้อหรือคำถาม...';
$string['chat:quiz_start'] = 'เริ่มแบบทดสอบ';
$string['chat:quiz_cancel'] = 'ยกเลิก';
$string['chat:quiz_loading'] = 'กำลังสร้างแบบทดสอบ…';
$string['chat:quiz_error'] = 'ไม่สามารถสร้างแบบทดสอบได้ กรุณาลองอีกครั้ง';
$string['chat:quiz_correct'] = 'ถูกต้อง!';
$string['chat:quiz_wrong'] = 'ไม่ถูกต้อง';
$string['chat:quiz_next'] = 'คำถามถัดไป';
$string['chat:quiz_finish'] = 'ดูผลลัพธ์';
$string['chat:quiz_score'] = 'แบบทดสอบเสร็จสิ้น! คุณได้ {$a->score} จาก {$a->total}';
$string['chat:quiz_summary'] = 'ฉันทำแบบทดสอบฝึกหัด {$a->total} ข้อในหัวข้อ "{$a->topic}" และได้คะแนน {$a->score}/{$a->total}';
$string['chat:quiz_topic_objectives'] = 'วัตถุประสงค์การเรียนรู้';
$string['chat:quiz_topic_modules'] = 'หัวข้อรายวิชา';
$string['chat:quiz_subtopic_select'] = 'เลือกรายการเฉพาะ…';
$string['chat:quiz_topic_sections'] = 'ส่วนของรายวิชา';
$string['chat:quiz_score_great'] = 'ยอดเยี่ยม! คุณเข้าใจเนื้อหานี้เป็นอย่างดี';
$string['chat:quiz_score_good'] = 'ดีมาก! ทบทวนต่อไปเพื่อเสริมสร้างความเข้าใจ';
$string['chat:quiz_score_practice'] = 'ฝึกฝนต่อไป ลองทบทวนเนื้อหาที่เกี่ยวข้องแล้วทำแบบทดสอบอีกครั้ง';
$string['chat:quiz_review_heading'] = 'ทบทวน';
$string['chat:quiz_retake'] = 'ทำแบบทดสอบอีกครั้ง';
$string['chat:quiz_exit'] = 'ออกจากแบบทดสอบ';
$string['chat:quiz_your_answer'] = 'คำตอบของคุณ';
$string['chat:quiz_correct_answer'] = 'คำตอบที่ถูกต้อง';

// Conversation starters.
$string['chat:starters_label'] = 'เริ่มต้นการสนทนา';
$string['chat:starter_quiz'] = 'ทดสอบฉันเรื่องนี้';
$string['chat:starter_explain'] = 'อธิบายสิ่งนี้';
$string['chat:starter_key_concepts'] = 'แนวคิดสำคัญ';
$string['chat:starter_study_plan'] = 'แผนการเรียน';
$string['chat:starter_help_me'] = 'ช่วยเหลือ AI';
$string['chat:starter_ai_project_coach'] = 'โค้ชโปรเจกต์ AI';
$string['chat:starter_ell_practice'] = 'ฝึกสนทนา';
$string['chat:starter_ell_pronunciation'] = 'การออกเสียง ELL';
$string['chat:starter_ai_coach'] = 'โค้ช AI';
$string['chat:starter_speak'] = 'พูดตัวเริ่มต้น';

// Reset / home.
$string['chat:reset'] = 'เริ่มใหม่';

// Topic picker.
$string['chat:topic_picker_title'] = 'คุณต้องการเน้นเรื่องอะไร?';
$string['chat:topic_picker_title_help'] = 'คุณต้องการความช่วยเหลือเรื่องอะไร?';
$string['chat:topic_picker_title_explain'] = 'คุณต้องการให้ฉันอธิบายอะไร?';
$string['chat:topic_picker_title_study'] = 'คุณต้องการเน้นในด้านใด?';
$string['chat:topic_start'] = 'ดำเนินการต่อ';

// Expand states.
$string['chat:fullscreen'] = 'เต็มหน้าจอ';
$string['chat:exitfullscreen'] = 'ออกจากเต็มหน้าจอ';

// Settings panel.
$string['chat:language'] = 'เปลี่ยนภาษา';
$string['chat:settings_panel'] = 'การตั้งค่า';
$string['chat:settings_language'] = 'ภาษา';
$string['chat:settings_avatar'] = 'อวาตาร์';
$string['chat:settings_voice'] = 'เสียง';
$string['chat:settings_voice_admin'] = 'การตั้งค่าเสียงจัดการในแผงผู้ดูแลระบบเว็บไซต์';

// Voice mode.
$string['chat:voice_mode'] = 'โหมดเสียง';
$string['chat:voice_end'] = 'จบเซสชันเสียง';
$string['chat:voice_connecting'] = 'กำลังเชื่อมต่อ...';
$string['chat:voice_listening'] = 'กำลังฟัง...';
$string['chat:voice_speaking'] = 'SOLA กำลังพูด...';
$string['chat:voice_idle'] = 'พร้อม';
$string['chat:voice_error'] = 'การเชื่อมต่อเสียงล้มเหลว กรุณาตรวจสอบการตั้งค่าของคุณ';
$string['chat:quiz_locked'] = 'SOLA ถูกหยุดชั่วคราวระหว่างทำแบบทดสอบเพื่อรักษาความซื่อสัตย์ทางวิชาการ โชคดี!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'บันทึก';

// History panel.
$string['chat:history_title'] = 'บันทึกและประวัติการสนทนา';
$string['task:send_inactivity_reminders'] = 'ส่งอีเมลแจ้งเตือนการไม่ใช้งานรายสัปดาห์';
$string['task:run_meta_ai_query'] = 'รันการค้นหาวิเคราะห์ เรดาร์การเรียนรู้ ตามกำหนดเวลา';
$string['messageprovider:study_notes'] = 'บันทึกเซสชันการเรียน';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / การส่งมอบ Frontend';
$string['settings:cdn_heading_desc'] = 'ให้บริการทรัพยากร frontend ของ SOLA (JS/CSS) จาก CDN ภายนอกแทนระบบไฟล์ Moodle ซึ่งช่วยให้อัปเดต frontend ได้โดยไม่ต้องอัปเกรดปลั๊กอิน เว้น CDN URL ว่างไว้เพื่อใช้ไฟล์ปลั๊กอินในเครื่อง';
$string['settings:cdn_url'] = 'URL ฐาน CDN';
$string['settings:cdn_url_desc'] = 'URL ฐานที่ sola.min.js และ sola.min.css โฮสต์อยู่ ตัวอย่าง: https://your-org.github.io/sola-cdn เว้นว่างไว้เพื่อใช้ไฟล์ปลั๊กอินในเครื่อง';
$string['settings:cdn_version'] = 'เวอร์ชันทรัพยากร CDN';
$string['settings:cdn_version_desc'] = 'สตริงเวอร์ชันที่เพิ่มต่อท้าย CDN URLs สำหรับ cache busting อัปเดตหลังจากทุกการ deploy CDN (เช่น 3.2.4 หรือ commit hash)';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'การใช้งานรวม';
$string['analytics:tab_bycourse'] = 'ตามรายวิชา';
$string['analytics:tab_comparison'] = 'AI เทียบกับผู้ไม่ใช้งาน';
$string['analytics:tab_byunit'] = 'ตามหน่วย';
$string['analytics:tab_usagetypes'] = 'ประเภทการใช้งาน';
$string['analytics:tab_themes'] = 'ธีม';
$string['analytics:tab_feedback'] = 'ความคิดเห็น AI';
$string['analytics:total_students'] = 'จำนวนนักศึกษาทั้งหมด';
$string['analytics:active_users'] = 'ผู้ใช้ AI ที่ใช้งานอยู่';
$string['analytics:msgs_per_student'] = 'ข้อความต่อนักศึกษา';
$string['analytics:avg_session'] = 'ระยะเวลาเซสชันเฉลี่ย';
$string['analytics:return_rate'] = 'อัตราการกลับมาใช้';
$string['analytics:total_sessions'] = 'จำนวนเซสชันทั้งหมด';
$string['analytics:thumbs_up'] = 'ชอบ';
$string['analytics:thumbs_down'] = 'ไม่ชอบ';
$string['analytics:hallucination_flags'] = 'เครื่องหมายข้อมูลไม่ถูกต้อง';
$string['analytics:msgs_to_resolution'] = 'ข้อความจนถึงการแก้ไข';
$string['analytics:helpful'] = 'มีประโยชน์';
$string['analytics:not_helpful'] = 'ไม่มีประโยชน์';
$string['analytics:flag_hallucination'] = 'คำตอบนี้มีข้อมูลที่ไม่ถูกต้อง';
$string['analytics:submit_rating'] = 'ส่ง';
$string['analytics:thanks_feedback'] = 'ขอบคุณสำหรับความคิดเห็น';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'อธิบายหน้านี้';
$string['chat:starter_ask_anything'] = 'ถามอะไรก็ได้';
$string['chat:starter_review_practice'] = 'ทบทวนและฝึกฝน';
$string['chat:history_saved_subtitle'] = 'คำตอบที่บันทึกไว้จะอยู่บนอุปกรณ์นี้สำหรับคอร์สนี้';
$string['chat:history_saved_empty'] = 'บันทึกคำตอบของ AI เพื่อดูที่นี่';
$string['chat:history_views_label'] = 'มุมมองประวัติ';
$string['chat:history_view_saved'] = 'บันทึกแล้ว';
$string['chat:history_view_recent'] = 'ประวัติ';
$string['chat:debug_refresh'] = 'รีเฟรช';
$string['chat:debug_copy_all'] = 'คัดลอกทั้งหมด';
$string['chat:debug_close'] = 'ปิด';
$string['chat:language_switch'] = 'เปลี่ยนภาษา';
$string['chat:language_dismiss'] = 'ยกเลิกคำแนะนำภาษา';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'เลือกผู้ให้บริการ LLM';
$string['chat:llm_model_label'] = 'โมเดล';
$string['chat:llm_model_select'] = 'เลือกโมเดล LLM';
$string['chat:footer_usertesting'] = 'ทดสอบการใช้งาน';
$string['chat:footer_feedback'] = 'ข้อเสนอแนะ';
$string['chat:voice_panel_title'] = 'พูดคุยกับ {$a} (ทดลอง)';

// Additional translated strings.
$string['chat:debug_context'] = 'ดีบักบริบท';
$string['chat:debug_context_browser'] = 'สแนปช็อตเบราว์เซอร์';
$string['chat:debug_context_copy'] = 'คัดลอก';
$string['chat:debug_context_prompt'] = 'การตอบกลับเซิร์ฟเวอร์';
$string['chat:debug_context_request'] = 'คำขอ SSE ล่าสุด';
$string['chat:debug_context_toggle'] = 'สลับตัวตรวจสอบ';
$string['chat:history_empty'] = 'ยังไม่มีการสนทนา';
$string['chat:history_refresh'] = 'รีเฟรช';
$string['chat:history_subtitle'] = 'ข้อความล่าสุดของคุณ';
$string['chat:starter_explain_prompt'] = 'อธิบายแนวคิดที่สำคัญที่สุดได้ไหม?';
$string['chat:starter_help_lesson'] = 'อธิบายสิ่งนี้';
$string['chat:starter_help_lesson_prompt'] = 'ช่วยอธิบายบทเรียน สรุปแนวคิดหลักให้หน่อย';
$string['chat:starter_prompt_coach'] = 'โค้ช AI';
$string['chat:starter_quick_study'] = 'เรียนรู้เร็ว';
$string['chat:starter_study_plan_prompt'] = 'อยากวางแผนเรียน ถามฉัน: (1) เป้าหมาย (2) เวลา อัปเดตแผนเดิม';
$string['chat:voice_copy'] = 'สนทนาด้วยเสียงกับผู้ช่วย';
$string['chat:voice_ready'] = 'พร้อม';
$string['chat:voice_start'] = 'เริ่ม';
$string['chat:voice_title'] = 'พูดคุยกับ SOLA';
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
$string['mobile_chip_concepts'] = 'แนวคิดหลัก';
$string['mobile_chip_quiz'] = 'ทดสอบ';
$string['mobile_chip_studyplan'] = 'แผนการเรียน';
$string['mobile_clear'] = 'ล้างประวัติ';
$string['mobile_disabled'] = 'SOLA ไม่พร้อมใช้งานสำหรับคอร์สนี้';
$string['mobile_placeholder'] = 'ถามคำถาม...';
$string['mobile_welcome'] = 'สวัสดี, {$a}!';
$string['mobile_welcome_sub'] = 'ฉันคือ SOLA ผู้ช่วยการเรียนรู้ของคุณ ช่วยอะไรได้บ้าง?';
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
$string['rubric:done'] = 'เสร็จสิ้น';
$string['rubric:encourage_high'] = 'ยอดเยี่ยม! ทำต่อไป!';
$string['rubric:encourage_low'] = 'เริ่มต้นดี! การฝึกฝนสม่ำเสมอจะช่วยได้';
$string['rubric:encourage_mid'] = 'พยายามดี! ฝึกฝนต่อไป';
$string['rubric:overall'] = 'โดยรวม';
$string['rubric:practice_again'] = 'ฝึกอีกครั้ง';
$string['rubric:score_title_conversation'] = 'คะแนนฝึกสนทนา';
$string['rubric:score_title_pronunciation'] = 'คะแนนฝึกออกเสียง';
$string['rubric:scoring'] = 'กำลังประเมิน...';
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
$string['demo:title'] = 'สภาพแวดล้อมทดสอบ';
$string['demo:heading'] = 'สภาพแวดล้อมทดสอบ';
$string['demo:intro'] = 'หน้านี้สร้างรายวิชาทดสอบที่ <strong>ซ่อนจากนักเรียน</strong> (visible=0) และเติมด้วยนักเรียนปลอม, การสนทนา AI, การให้คะแนน และข้อเสนอแนะ มีประโยชน์สำหรับดูตัวอย่าง Analytics Dashboard หรือตรวจสอบการเปลี่ยนแปลงปลั๊กอินโดยไม่ส่งผลกระทบต่อนักเรียนที่ลงทะเบียนจริง';
$string['demo:step1'] = 'ขั้นตอนที่ 1: รายวิชาทดสอบ';
$string['demo:step2'] = 'ขั้นตอนที่ 2: เพิ่มนักเรียนปลอมและการสนทนา AI';
$string['demo:course_exists'] = 'มีรายวิชาทดสอบอยู่: <strong>{$a->fullname}</strong> (ชื่อย่อ <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'ซ่อน';
$string['demo:badge_visible'] = 'มองเห็นได้สำหรับนักเรียน';
$string['demo:no_course'] = 'ไม่พบรายวิชาทดสอบ คลิกด้านล่างเพื่อสร้าง';
$string['demo:create_btn'] = 'สร้างรายวิชาทดสอบที่ซ่อน';
$string['demo:open_course'] = 'เปิดรายวิชา &rarr;';
$string['demo:seed_intro'] = 'สร้าง demo_student_001, demo_student_002, ... ลงทะเบียนพวกเขาในรายวิชาทดสอบ และแทรกการสนทนา ข้อความ การให้คะแนน และข้อเสนอแนะสังเคราะห์ เรียกใช้อีกครั้งเพื่อเพิ่มข้อมูล หรือติ๊ก "ล้างก่อน" เพื่อเริ่มใหม่';
$string['demo:users_label'] = 'ผู้ใช้';
$string['demo:weeks_label'] = 'สัปดาห์';
$string['demo:clear_label'] = 'ล้างผู้ใช้ demo_* ที่มีอยู่ก่อน';
$string['demo:seed_btn'] = 'เพิ่มนักเรียนและการสนทนา';
$string['demo:view_analytics'] = 'ดูการวิเคราะห์สำหรับรายวิชานี้ &rarr;';
$string['demo:footer'] = 'ข้อมูลที่สร้างที่นี่อยู่ในตารางผู้ใช้ / การลงทะเบียนมาตรฐานของ Moodle และตารางการสนทนาของปลั๊กอินเอง ผู้ใช้ปลอมทั้งหมดมีชื่อผู้ใช้ที่ขึ้นต้นด้วย <code>demo_student_</code> เพื่อให้กรองหรือลบออกได้ง่าย หากต้องการลบ ให้เรียกใช้ขั้นตอน seed อีกครั้งโดยติ๊ก "ล้างผู้ใช้ demo_* ที่มีอยู่ก่อน"';
$string['demo:course_fullname'] = 'รายวิชาทดสอบ SOLA (ซ่อน)';
$string['demo:notify_created'] = 'รายวิชาทดสอบพร้อม: {$a->fullname} (id {$a->id})';
$string['demo:notify_create_fail'] = 'สร้างรายวิชาไม่สำเร็จ: {$a}';
$string['demo:notify_seeded'] = 'เพิ่มแล้ว: {$a->users} ผู้ใช้, {$a->conversations} การสนทนา, {$a->messages} ข้อความ, {$a->ratings} การให้คะแนน, {$a->feedback} รายการข้อเสนอแนะ';
$string['demo:notify_seed_fail'] = 'เพิ่มข้อมูลไม่สำเร็จ: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'ต้นทุนโทเคนและการวิเคราะห์ &rarr;';
$string['toc:testing'] = 'สภาพแวดล้อมทดสอบ &rarr;';
$string['toc:back_to_course'] = '&larr; กลับไปที่ {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'ไม่พบไบนารี pdftotext; ปิดใช้งานการแยก PDF';
$string['rag:pdftotext_available'] = 'ตรวจพบ pdftotext ที่ {$a}';
$string['rag:docx_unavailable'] = 'ไม่มีส่วนขยาย PHP ZipArchive; ปิดใช้งานการแยก DOCX';
$string['rag:h5p_unavailable'] = 'ไม่สามารถอ่านเนื้อหา H5P; ข้ามไป';
$string['rag:scorm_too_large'] = 'แพ็คเกจ SCORM เกินขีดจำกัดขนาดที่กำหนดไว้ ({$a} MB); ข้ามไป';
$string['rag:scorm_unzip_failed'] = 'ไม่สามารถคลายซิปแพ็คเกจ SCORM; ข้ามไป';
$string['rag:transcript_fetch_failed'] = 'ไม่สามารถดึงข้อมูลการถอดเสียงจาก {$a}';
$string['rag:transcript_cf_challenge'] = 'URL การถอดเสียงถูกบล็อกโดยการท้าทาย Cloudflare: {$a}';
$string['rag:embed_detected'] = 'ตรวจพบสื่อที่ฝังไว้: {$a}';
$string['rag:embed_transcript_attached'] = 'แนบคำบรรยายสำหรับ {$a}';

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
