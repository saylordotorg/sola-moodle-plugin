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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'ผู้ให้บริการ AI';
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
$string['chat:clear'] = 'ล้างประวัติ';
$string['chat:clear_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการล้างประวัติแชทสำหรับรายวิชานี้?';
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
$string['settings:provider_groq'] = 'Groq';
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
