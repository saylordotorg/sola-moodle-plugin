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
 * Language strings for local_ai_course_assistant — Vietnamese.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Trợ Lý AI Khóa Học';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Lưu trữ các cuộc trò chuyện với gia sư AI theo người dùng và khóa học.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID của người dùng sở hữu cuộc trò chuyện.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID của khóa học mà cuộc trò chuyện thuộc về.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Tiêu đề của cuộc trò chuyện.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Thời gian cuộc trò chuyện được tạo.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Thời gian cuộc trò chuyện được chỉnh sửa lần cuối.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Lưu trữ các tin nhắn trong cuộc trò chuyện với gia sư AI.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID của người dùng đã gửi tin nhắn.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID của khóa học mà tin nhắn thuộc về.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Vai trò của người gửi tin nhắn (người dùng hoặc trợ lý).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Nội dung của tin nhắn.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Số token được sử dụng cho tin nhắn.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Thời gian tin nhắn được tạo.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Sử dụng chat gia sư AI';
$string['ai_course_assistant:viewanalytics'] = 'Xem phân tích chat gia sư AI';
$string['ai_course_assistant:manage'] = 'Quản lý cài đặt chat gia sư AI (Vai trò quản trị viên)';

// Settings.
$string['settings:enabled'] = 'Bật Trợ Lý AI Khóa Học';
$string['settings:enabled_desc'] = 'Bật hoặc tắt widget Trợ Lý AI Khóa Học trên các trang khóa học.';
$string['settings:default_course_mode'] = 'Mặc định cho các khóa học mới';
$string['settings:default_course_mode_desc'] = 'Kiểm soát việc SOLA có xuất hiện trên một khóa học hay không khi chưa có lựa chọn theo từng khóa học. Các lần cài đặt mới sẽ mặc định là "Tắt theo mặc định" để quản trị viên có thể bật từng khóa học từ trang Analytics hoặc trang Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Tắt theo mặc định (bật cho từng khóa học)';
$string['settings:default_course_mode_all'] = 'Bật trên tất cả các khóa học';
$string['settings:auto_open'] = 'Tự động mở trong lần truy cập đầu tiên';
$string['settings:auto_open_desc'] = 'Khi được bật, ngăn kéo SOLA tự động mở vào lần đầu tiên học viên đến mỗi khóa học. Các lần tải trang tiếp theo trong cùng khóa học không mở lại ngăn kéo — trạng thái được theo dõi theo từng khóa học trong trình duyệt của học viên qua localStorage. Áp dụng trên máy tính để bàn và di động. Có thể ghi đè theo từng khóa học từ trang Course AI Settings.';
$string['settings:comparison_providers'] = 'Nhà cung cấp so sánh (bộ chọn LLM)';
$string['settings:comparison_providers_desc'] = 'Thêm các nhà cung cấp AI bổ sung vào bộ chọn LLM trong widget để quản trị viên có thể so sánh phản hồi giữa các nhà cung cấp. Sử dụng bảng bên dưới để thêm hàng. Cột nhiệt độ là tùy chọn (để trống để sử dụng nhiệt độ toàn cục). Định dạng lưu trữ: provider_id|api_key|model1,model2|temperature. Nhà cung cấp chính được cấu hình ở trên luôn được tự động bao gồm. Chỉ quản trị viên có quyền quản lý mới thấy bộ chọn; sinh viên không bao giờ thấy. Provider IDs hợp lệ: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Nhà cung cấp AI mặc định';
$string['settings:provider_desc'] = 'Chọn nhà cung cấp AI để sử dụng cho các phần hoàn thành cuộc trò chuyện. Chọn "Moodle AI (core_ai subsystem)" để định tuyến các yêu cầu thông qua cấu hình AI tích hợp sẵn của Moodle tại Site admin > AI; các trường khóa API, mô hình và URL cơ sở bên dưới sẽ bị bỏ qua trong chế độ đó. Streaming, sử dụng công cụ và prompt caching không có sẵn qua core_ai — các phản hồi được gửi dưới dạng một khối duy nhất. Sử dụng nhà cung cấp trực tiếp để có trải nghiệm học viên tốt nhất.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Cục bộ)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Tùy chỉnh (tương thích OpenAI)';
$string['settings:apikey'] = 'API Key';
$string['settings:apikey_desc'] = 'API key cho nhà cung cấp đã chọn. Không cần thiết cho Ollama.';
$string['settings:model'] = 'Tên mô hình';
$string['settings:model_desc'] = 'Mô hình cần sử dụng. Mặc định phụ thuộc vào nhà cung cấp (ví dụ: claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL cơ sở API';
$string['settings:apibaseurl_desc'] = 'URL cơ sở cho API. Được tự động điền theo nhà cung cấp nhưng có thể ghi đè. Để trống để dùng mặc định của nhà cung cấp.';
$string['settings:systemprompt'] = 'Mẫu Prompt Hệ thống';
$string['settings:systemprompt_desc'] = 'Prompt hệ thống gửi đến AI. Sử dụng các placeholder: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Bạn là gia sư AI hữu ích cho khóa học "{{coursename}}". Vai trò của học viên là {{userrole}}.

Các chủ đề khóa học được đề cập:
{{coursetopics}}

Hãy giúp học viên hiểu tài liệu khóa học. Hãy khích lệ, rõ ràng và có phương pháp sư phạm tốt.';
$string['settings:temperature'] = 'Nhiệt độ';
$string['settings:temperature_desc'] = 'Kiểm soát tính ngẫu nhiên. Giá trị thấp hơn tập trung hơn, giá trị cao hơn sáng tạo hơn. Phạm vi: 0.0 đến 2.0.';
$string['settings:maxhistory'] = 'Lịch sử hội thoại tối đa';
$string['settings:maxhistory_desc'] = 'Số cặp tin nhắn tối đa để đưa vào yêu cầu API. Các tin nhắn cũ hơn sẽ bị cắt bỏ.';
$string['settings:avatar'] = 'Hình đại diện Chat';
$string['settings:avatar_desc'] = 'Chọn biểu tượng hình đại diện cho nút widget chat.';
$string['settings:avatar_saylor'] = 'Logo {$a} (Mặc định)';
$string['settings:position'] = 'Vị trí Widget';
$string['settings:position_desc'] = 'Vị trí của widget chat trên trang.';
$string['settings:position_br'] = 'Dưới bên phải';
$string['settings:position_bl'] = 'Dưới bên trái';
$string['settings:position_tr'] = 'Trên bên phải';
$string['settings:position_tl'] = 'Trên bên trái';
$string['chat:settings'] = 'Cài đặt plugin';
$string['analytics:viewdashboard'] = 'Xem bảng điều khiển phân tích';

// Course settings.
$string['coursesettings:title'] = 'Cài đặt AI Khóa học';
$string['coursesettings:enabled'] = 'Bật ghi đè khóa học';
$string['coursesettings:enabled_desc'] = 'Khi được bật, các cài đặt bên dưới sẽ ghi đè cấu hình nhà cung cấp AI toàn cục chỉ cho khóa học này. Để trống các trường để kế thừa giá trị toàn cục.';
$string['coursesettings:sola_enabled'] = 'SOLA trên khóa học này';
$string['coursesettings:sola_enabled_toggle'] = 'Hiển thị widget SOLA trên khóa học này';
$string['coursesettings:sola_enabled_desc'] = 'Kiểm soát việc widget trò chuyện SOLA có xuất hiện trên khóa học này hay không. Giá trị mặc định toàn trang được đặt trong cài đặt plugin tại General > Default for new courses.';
$string['coursesettings:using_global'] = 'Đang sử dụng cài đặt toàn cục';
$string['coursesettings:saved'] = 'Đã lưu cài đặt AI khóa học.';
$string['coursesettings:global_settings_link'] = 'Cài đặt AI toàn cục';

// Language detection and preference.
$string['lang:switch'] = 'Có, chuyển đổi';
$string['lang:dismiss'] = 'Không, cảm ơn';
$string['lang:change'] = 'Thay đổi ngôn ngữ';
$string['lang:english'] = 'Tiếng Anh';

// Chat widget.
$string['chat:title'] = 'Gia Sư AI';
$string['chat:placeholder'] = 'Đặt câu hỏi...';
$string['chat:send'] = 'Gửi';
$string['chat:close'] = 'Đóng chat';
$string['chat:open'] = 'Mở chat gia sư AI';
$string['chat:clear'] = 'Xóa màn hình';
$string['chat:clear_confirm'] = 'Xóa các tin nhắn hiển thị? Toàn bộ lịch sử chat của bạn vẫn được lưu và có thể tải lại bằng cách mở lại widget.';
$string['chat:copy'] = 'Sao chép cuộc trò chuyện';
$string['chat:copied'] = 'Đã sao chép cuộc trò chuyện vào clipboard';
$string['chat:copy_failed'] = 'Không thể sao chép cuộc trò chuyện';
$string['chat:thinking'] = 'Đang suy nghĩ...';
$string['chat:error'] = 'Xin lỗi, đã có lỗi xảy ra. Vui lòng thử lại.';
$string['chat:error_auth'] = 'Lỗi xác thực. Vui lòng liên hệ quản trị viên.';
$string['chat:error_ratelimit'] = 'Quá nhiều yêu cầu. Vui lòng đợi một chút rồi thử lại.';
$string['chat:error_unavailable'] = 'Dịch vụ AI tạm thời không khả dụng. Vui lòng thử lại sau.';
$string['chat:error_notconfigured'] = 'Gia sư AI chưa được cấu hình. Vui lòng liên hệ quản trị viên.';
$string['chat:mic'] = 'Nói câu hỏi của bạn';
$string['chat:mic_error'] = 'Lỗi microphone. Vui lòng kiểm tra quyền trình duyệt.';
$string['chat:mic_unsupported'] = 'Trình duyệt này không hỗ trợ nhập liệu bằng giọng nói.';
$string['chat:newline_hint'] = 'Shift+Enter để xuống dòng';
$string['chat:you'] = 'Bạn';
$string['chat:assistant'] = 'Gia Sư AI';
$string['chat:history_loaded'] = 'Đã tải cuộc trò chuyện trước.';
$string['chat:history_cleared'] = 'Đã xóa lịch sử chat.';
$string['chat:offtopic_warning'] = 'Có vẻ câu hỏi của bạn không liên quan đến khóa học này. Vui lòng giữ đúng chủ đề để tôi có thể hỗ trợ bạn tốt nhất!';
$string['chat:offtopic_ended'] = 'Quyền truy cập gia sư AI của bạn đã bị tạm ngưng trong {$a} phút vì cuộc trò chuyện đã đi lạc chủ đề quá nhiều lần. Hãy dùng thời gian này ôn lại tài liệu khóa học và thử lại sau.';
$string['chat:offtopic_locked'] = 'Quyền truy cập gia sư AI của bạn đang tạm ngưng. Bạn có thể thử lại sau {$a} phút. Hãy tập trung vào các câu hỏi liên quan đến khóa học khi quay lại.';
$string['chat:escalated_to_support'] = 'Tôi không thể trả lời đầy đủ câu hỏi của bạn, vì vậy tôi đã tạo ticket hỗ trợ cho bạn. Một thành viên nhóm hỗ trợ sẽ liên hệ. Mã ticket của bạn là: {$a}';
$string['chat:studyplan_intro'] = 'Tôi có thể giúp bạn tạo kế hoạch học tập cho khóa học này! Hãy cho tôi biết bạn có thể dành bao nhiêu giờ mỗi tuần để học, và tôi sẽ giúp bạn xây dựng kế hoạch có cấu trúc.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'Câu hỏi thường gặp & Hỗ trợ';
$string['settings:faq_heading_desc'] = 'Cấu hình FAQ tập trung và tích hợp ticket hỗ trợ Zendesk.';
$string['settings:faq_content'] = 'Nội dung FAQ';
$string['settings:faq_content_desc'] = 'Nhập các mục FAQ (mỗi dòng một mục theo định dạng: Q: câu hỏi | A: câu trả lời). Các mục này sẽ được cung cấp cho AI để trả lời các câu hỏi hỗ trợ phổ biến.';
$string['settings:zendesk_enabled'] = 'Bật leo thang Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Khi AI không thể giải quyết câu hỏi hỗ trợ, tự động tạo ticket Zendesk với tóm tắt cuộc trò chuyện.';
$string['settings:zendesk_subdomain'] = 'Tên miền phụ Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Tên miền phụ Zendesk của bạn (ví dụ: "mycompany" cho mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'Email API Zendesk';
$string['settings:zendesk_email_desc'] = 'Địa chỉ email của người dùng Zendesk để xác thực API (với hậu tố /token).';
$string['settings:zendesk_token'] = 'Token API Zendesk';
$string['settings:zendesk_token_desc'] = 'Token API để xác thực Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Phát hiện ngoài chủ đề';
$string['settings:offtopic_heading_desc'] = 'Cấu hình cách chat xử lý các cuộc trò chuyện ngoài chủ đề.';
$string['settings:offtopic_enabled'] = 'Bật phát hiện ngoài chủ đề';
$string['settings:offtopic_enabled_desc'] = 'Hướng dẫn AI phát hiện và chuyển hướng các cuộc trò chuyện ngoài chủ đề.';
$string['settings:offtopic_max'] = 'Số tin nhắn ngoài chủ đề tối đa';
$string['settings:offtopic_max_desc'] = 'Số tin nhắn ngoài chủ đề liên tiếp trước khi thực hiện hành động.';
$string['settings:offtopic_action'] = 'Hành động khi ngoài chủ đề';
$string['settings:offtopic_action_desc'] = 'Phải làm gì khi đạt giới hạn ngoài chủ đề.';
$string['settings:offtopic_action_warn'] = 'Cảnh báo và chuyển hướng';
$string['settings:offtopic_action_end'] = 'Khóa quyền truy cập tạm thời';
$string['settings:offtopic_lockout_duration'] = 'Thời gian khóa (phút)';
$string['settings:offtopic_lockout_duration_desc'] = 'Thời gian (tính bằng phút) học viên mất quyền truy cập gia sư AI sau khi vượt giới hạn ngoài chủ đề. Mặc định: 30 phút.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Lập kế hoạch học tập & Nhắc nhở';
$string['settings:studyplan_heading_desc'] = 'Cấu hình tính năng lập kế hoạch học tập và thông báo nhắc nhở.';
$string['settings:studyplan_enabled'] = 'Bật lập kế hoạch học tập';
$string['settings:studyplan_enabled_desc'] = 'Cho phép gia sư AI giúp học viên tạo kế hoạch học tập cá nhân hóa dựa trên thời gian có sẵn.';
$string['settings:reminders_email_enabled'] = 'Bật nhắc nhở qua email';
$string['settings:reminders_email_enabled_desc'] = 'Cho phép học viên đăng ký nhắc nhở học tập qua email.';
$string['settings:reminders_whatsapp_enabled'] = 'Bật nhắc nhở qua WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Cho phép học viên đăng ký nhắc nhở học tập qua WhatsApp (yêu cầu cấu hình API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Endpoint API để gửi tin nhắn WhatsApp (ví dụ: Twilio, MessageBird). Phải chấp nhận POST với nội dung JSON chứa các trường "to", "from" và "body".';
$string['settings:whatsapp_api_token'] = 'Token API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token xác thực cho API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Số gửi WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Số điện thoại để gửi tin nhắn WhatsApp (với mã quốc gia, ví dụ: +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Quốc gia bị chặn WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Mã quốc gia ISO 3166-1 alpha-2 phân cách bằng dấu phẩy, nơi không được phép nhắc nhở WhatsApp do quy định địa phương (ví dụ: "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Nhắc nhở học tập: {$a}';
$string['reminder:email_body'] = 'Xin chào {$a->firstname},

Đây là lời nhắc nhở học tập của bạn cho "{$a->coursename}".

{$a->message}

Kế hoạch học tập của bạn đề xuất {$a->hours_per_week} giờ mỗi tuần cho khóa học này.

Cố lên nhé!

---
Để ngừng nhận những nhắc nhở này, nhấn vào đây: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Nhắc nhở học tập cho {$a->coursename}: {$a->message} (Hủy đăng ký: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Nội dung học tập hôm nay: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Hủy đăng ký nhắc nhở học tập';
$string['unsubscribe:success'] = 'Bạn đã hủy đăng ký thành công nhắc nhở học tập cho khóa học này.';
$string['unsubscribe:already'] = 'Bạn đã hủy đăng ký những nhắc nhở này rồi.';
$string['unsubscribe:invalid'] = 'Link hủy đăng ký không hợp lệ hoặc đã hết hạn.';
$string['unsubscribe:resubscribe'] = 'Thay đổi ý kiến? Bạn có thể bật lại nhắc nhở qua chat gia sư AI.';

// Scheduled task.
$string['task:send_reminders'] = 'Gửi nhắc nhở học tập gia sư AI';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Lưu trữ kế hoạch học tập của học viên.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID của người dùng sở hữu kế hoạch học tập.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Khóa học mà kế hoạch học tập thuộc về.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Số giờ mỗi tuần học viên dự định học.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Chi tiết kế hoạch học tập ở định dạng JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Lưu trữ tùy chọn và đăng ký nhắc nhở học tập.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID của người dùng đã đăng ký nhắc nhở.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Kênh nhắc nhở (email hoặc whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Địa chỉ email hoặc số điện thoại để nhắc nhở.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Mã quốc gia của người dùng để tuân thủ quy định.';

// Analytics dashboard.
$string['analytics:title'] = 'Phân tích Gia Sư AI';
$string['analytics:overview'] = 'Tổng quan';
$string['analytics:total_conversations'] = 'Tổng cuộc trò chuyện';
$string['analytics:total_messages'] = 'Tổng tin nhắn';
$string['analytics:active_students'] = 'Học viên tích cực';
$string['analytics:avg_messages_per_student'] = 'Trung bình tin nhắn mỗi học viên';
$string['analytics:offtopic_rate'] = 'Tỷ lệ ngoài chủ đề';
$string['analytics:escalation_count'] = 'Đã leo thang lên hỗ trợ';
$string['analytics:studyplan_adoption'] = 'Học viên có kế hoạch học tập';
$string['analytics:usage_trends'] = 'Xu hướng sử dụng';
$string['analytics:daily_messages'] = 'Lượng tin nhắn hàng ngày';
$string['analytics:hotspots'] = 'Điểm nóng khóa học';
$string['analytics:hotspots_desc'] = 'Các phần khóa học được tham chiếu nhiều nhất trong câu hỏi của học viên. Số lượng cao hơn có thể chỉ ra những khu vực học viên cần hỗ trợ thêm.';
$string['analytics:section'] = 'Phần';
$string['analytics:mention_count'] = 'Số lần đề cập';
$string['analytics:common_prompts'] = 'Mẫu Prompt Phổ biến';
$string['analytics:common_prompts_desc'] = 'Các mẫu câu hỏi thường xuyên lặp lại từ học viên. Xem xét những điều này để xác định các khoảng trống hệ thống trong nội dung khóa học.';
$string['analytics:prompt_pattern'] = 'Mẫu';
$string['analytics:frequency'] = 'Tần suất';
$string['analytics:recent_activity'] = 'Hoạt động gần đây';
$string['analytics:no_data'] = 'Chưa có dữ liệu phân tích. Dữ liệu sẽ xuất hiện khi học viên bắt đầu sử dụng gia sư AI.';
$string['analytics:timerange'] = 'Phạm vi thời gian';
$string['analytics:last_7_days'] = '7 ngày qua';
$string['analytics:last_30_days'] = '30 ngày qua';
$string['analytics:all_time'] = 'Toàn bộ thời gian';
$string['analytics:export'] = 'Xuất dữ liệu';
$string['analytics:provider_comparison'] = 'So sánh nhà cung cấp AI';
$string['analytics:provider_comparison_desc'] = 'So sánh hiệu suất giữa các nhà cung cấp AI được sử dụng trong khóa học này.';
$string['analytics:provider'] = 'Nhà cung cấp';
$string['analytics:response_count'] = 'Phản hồi';
$string['analytics:avg_response_length'] = 'Độ dài phản hồi trung bình';
$string['analytics:total_tokens'] = 'Tổng token';
$string['analytics:avg_tokens'] = 'Token trung bình / phản hồi';

// User settings.
$string['usersettings:title'] = 'Trợ Lý AI Khóa Học - Dữ liệu của bạn';
$string['usersettings:intro'] = 'Quản lý dữ liệu chat gia sư AI và cài đặt quyền riêng tư của bạn';
$string['usersettings:privacy_info'] = 'Các cuộc trò chuyện của bạn với gia sư AI được lưu trữ để cung cấp cho bạn sự hỗ trợ liên tục trong suốt khóa học. Bạn có toàn quyền kiểm soát dữ liệu này và có thể xóa bất kỳ lúc nào.';
$string['usersettings:usage_stats'] = 'Thống kê sử dụng của bạn';
$string['usersettings:total_messages'] = 'Tổng tin nhắn';
$string['usersettings:total_conversations'] = 'Cuộc trò chuyện';
$string['usersettings:messages'] = 'Tin nhắn';
$string['usersettings:last_activity'] = 'Hoạt động gần đây';
$string['usersettings:delete_course_data'] = 'Xóa dữ liệu khóa học';
$string['usersettings:no_data'] = 'Bạn chưa sử dụng gia sư AI. Dữ liệu sử dụng sẽ xuất hiện ở đây khi bạn bắt đầu trò chuyện.';
$string['usersettings:delete_all_title'] = 'Xóa tất cả dữ liệu của bạn';
$string['usersettings:delete_all_warning'] = 'Thao tác này sẽ xóa vĩnh viễn tất cả các cuộc trò chuyện gia sư AI của bạn trên tất cả khóa học. Không thể hoàn tác.';
$string['usersettings:delete_all_button'] = 'Xóa tất cả dữ liệu của tôi';
$string['usersettings:confirm_delete_course'] = 'Bạn có chắc muốn xóa vĩnh viễn tất cả dữ liệu gia sư AI cho khóa học "{$a}"? Không thể hoàn tác.';
$string['usersettings:confirm_delete_all'] = 'Bạn có chắc muốn xóa vĩnh viễn TẤT CẢ dữ liệu gia sư AI trên tất cả khóa học? Không thể hoàn tác.';
$string['usersettings:data_deleted'] = 'Dữ liệu của bạn đã được xóa.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Xin chào, {$a}! Tôi là SOLA. Hôm nay tôi có thể giúp gì cho bạn?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Mở SOLA';
$string['chat:change_avatar'] = 'Thay đổi hình đại diện';

$string['chat:quiz'] = 'Làm bài kiểm tra thực hành';
$string['chat:quiz_setup_title'] = 'Bài Kiểm Tra Thực Hành';
$string['chat:quiz_questions'] = 'Số câu hỏi';
$string['chat:quiz_topic'] = 'Chủ đề';
$string['chat:quiz_topic_guided'] = 'AI hướng dẫn (dựa theo tiến độ của bạn)';
$string['chat:quiz_topic_default'] = 'Nội dung khóa học hiện tại';
$string['chat:quiz_topic_custom'] = 'Chủ đề tùy chỉnh…';
$string['chat:quiz_custom_placeholder'] = 'Nhập một chủ đề hoặc câu hỏi...';
$string['chat:quiz_start'] = 'Bắt Đầu Kiểm Tra';
$string['chat:quiz_cancel'] = 'Hủy';
$string['chat:quiz_loading'] = 'Đang tạo bài kiểm tra…';
$string['chat:quiz_error'] = 'Không thể tạo bài kiểm tra. Vui lòng thử lại.';
$string['chat:quiz_correct'] = 'Đúng rồi!';
$string['chat:quiz_wrong'] = 'Sai.';
$string['chat:quiz_next'] = 'Câu tiếp theo';
$string['chat:quiz_finish'] = 'Xem kết quả';
$string['chat:quiz_score'] = 'Hoàn thành bài kiểm tra! Bạn đạt {$a->score} trên {$a->total} câu.';
$string['chat:quiz_summary'] = 'Tôi vừa hoàn thành bài kiểm tra thực hành {$a->total} câu về "{$a->topic}" và đạt {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Mục Tiêu Học Tập';
$string['chat:quiz_topic_modules'] = 'Chủ Đề Khóa Học';
$string['chat:quiz_subtopic_select'] = 'Chọn một mục cụ thể…';
$string['chat:quiz_topic_sections'] = 'Các Phần Khóa Học';
$string['chat:quiz_score_great'] = 'Xuất sắc! Bạn thực sự nắm vững tài liệu này.';
$string['chat:quiz_score_good'] = 'Cố gắng tốt! Tiếp tục ôn tập để củng cố hiểu biết của bạn.';
$string['chat:quiz_score_practice'] = 'Tiếp tục luyện tập — hãy xem lại tài liệu khóa học liên quan, rồi làm lại bài kiểm tra.';
$string['chat:quiz_review_heading'] = 'Ôn Tập';
$string['chat:quiz_retake'] = 'Làm Lại Bài Kiểm Tra';
$string['chat:quiz_exit'] = 'Thoát Bài Kiểm Tra';
$string['chat:quiz_your_answer'] = 'Câu trả lời của bạn';
$string['chat:quiz_correct_answer'] = 'Câu trả lời đúng';

$string['chat:starters_label'] = 'Gợi ý bắt đầu cuộc trò chuyện';
$string['chat:starter_quiz'] = 'Kiểm Tra Tôi Về Điều Này';
$string['chat:starter_explain'] = 'Giải Thích Điều Này';
$string['chat:starter_key_concepts'] = 'Khái Niệm Chính';
$string['chat:starter_study_plan'] = 'Kế Hoạch Học Tập';
$string['chat:starter_help_me'] = 'Trợ Lý AI';
$string['chat:starter_ai_project_coach'] = 'Huấn Luyện Dự Án AI';
$string['chat:starter_ell_practice'] = 'Luyện Hội Thoại';
$string['chat:starter_ell_pronunciation'] = 'Luyện Phát Âm ELL';
$string['chat:starter_ai_coach'] = 'Huấn Luyện AI';
$string['chat:starter_speak'] = 'Nói một gợi ý';

$string['chat:reset'] = 'Bắt đầu lại';

$string['chat:topic_picker_title'] = 'Bạn muốn tập trung vào điều gì?';
$string['chat:topic_picker_title_help'] = 'Bạn cần giúp đỡ về điều gì?';
$string['chat:topic_picker_title_explain'] = 'Bạn muốn tôi giải thích điều gì?';
$string['chat:topic_picker_title_study'] = 'Bạn muốn tập trung vào lĩnh vực nào?';
$string['chat:topic_start'] = 'Tiếp tục';

$string['chat:fullscreen'] = 'Toàn màn hình';
$string['chat:exitfullscreen'] = 'Thoát toàn màn hình';

$string['chat:language'] = 'Đổi ngôn ngữ';
$string['chat:settings_panel'] = 'Cài đặt';
$string['chat:settings_language'] = 'Ngôn ngữ';
$string['chat:settings_avatar'] = 'Hình đại diện';
$string['chat:settings_voice'] = 'Giọng nói';
$string['chat:settings_voice_admin'] = 'Cài đặt giọng nói được quản lý trong bảng quản trị trang web.';

$string['chat:voice_mode'] = 'Chế độ giọng nói';
$string['chat:voice_end'] = 'Kết thúc phiên giọng nói';
$string['chat:voice_connecting'] = 'Đang kết nối...';
$string['chat:voice_listening'] = 'Đang lắng nghe...';
$string['chat:voice_speaking'] = 'SOLA đang nói...';
$string['chat:voice_idle'] = 'Sẵn sàng';
$string['chat:voice_error'] = 'Kết nối giọng nói thất bại. Vui lòng kiểm tra cài đặt của bạn.';
$string['chat:quiz_locked'] = 'SOLA tạm dừng trong khi làm bài kiểm tra để hỗ trợ tính trung thực học thuật. Chúc may mắn!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Ghi chú';

// History panel.
$string['chat:history_title'] = 'Ghi chú và lịch sử hội thoại';
$string['task:send_inactivity_reminders'] = 'Gửi email nhắc nhở hàng tuần về việc không hoạt động';
$string['messageprovider:study_notes'] = 'Ghi chú phiên học tập';
$string['task:send_inactivity_reminders'] = 'Gửi email nhắc nhở hàng tuần về việc không hoạt động';
$string['task:run_meta_ai_query'] = 'Chạy truy vấn phân tích Radar học tập đã lên lịch';
$string['messageprovider:study_notes'] = 'Ghi chú phiên học tập';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Phân phối Frontend';
$string['settings:cdn_heading_desc'] = 'Phục vụ tài nguyên frontend SOLA (JS/CSS) từ CDN bên ngoài thay vì hệ thống tệp Moodle. Điều này cho phép cập nhật frontend mà không cần nâng cấp plugin. Để trống URL CDN để sử dụng tệp plugin cục bộ.';
$string['settings:cdn_url'] = 'URL cơ sở CDN';
$string['settings:cdn_url_desc'] = 'URL cơ sở nơi sola.min.js và sola.min.css được lưu trữ. Ví dụ: https://your-org.github.io/sola-cdn. Để trống để sử dụng tệp plugin cục bộ.';
$string['settings:cdn_version'] = 'Phiên bản tài nguyên CDN';
$string['settings:cdn_version_desc'] = 'Chuỗi phiên bản được thêm vào URL CDN cho cache busting. Cập nhật sau mỗi lần triển khai CDN (ví dụ: 3.2.4 hoặc commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Sử dụng tổng thể';
$string['analytics:tab_bycourse'] = 'Theo khóa học';
$string['analytics:tab_comparison'] = 'AI so với người không dùng';
$string['analytics:tab_byunit'] = 'Theo đơn vị';
$string['analytics:tab_usagetypes'] = 'Loại sử dụng';
$string['analytics:tab_themes'] = 'Chủ đề';
$string['analytics:tab_feedback'] = 'Phản hồi AI';
$string['analytics:total_students'] = 'Tổng số sinh viên';
$string['analytics:active_users'] = 'Người dùng AI hoạt động';
$string['analytics:msgs_per_student'] = 'Tin nhắn mỗi sinh viên';
$string['analytics:avg_session'] = 'Thời lượng phiên trung bình';
$string['analytics:return_rate'] = 'Tỷ lệ quay lại';
$string['analytics:total_sessions'] = 'Tổng số phiên';
$string['analytics:thumbs_up'] = 'Thích';
$string['analytics:thumbs_down'] = 'Không thích';
$string['analytics:hallucination_flags'] = 'Đánh dấu thông tin sai';
$string['analytics:msgs_to_resolution'] = 'Tin nhắn đến khi giải quyết';
$string['analytics:helpful'] = 'Hữu ích';
$string['analytics:not_helpful'] = 'Không hữu ích';
$string['analytics:flag_hallucination'] = 'Câu trả lời này chứa thông tin không chính xác';
$string['analytics:submit_rating'] = 'Gửi';
$string['analytics:thanks_feedback'] = 'Cảm ơn phản hồi của bạn';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Giải thích trang này';
$string['chat:starter_ask_anything'] = 'Hỏi bất cứ điều gì';
$string['chat:starter_review_practice'] = 'Ôn tập và thực hành';
$string['chat:history_saved_subtitle'] = 'Các phản hồi đã lưu sẽ ở lại trên thiết bị này cho khóa học này.';
$string['chat:history_saved_empty'] = 'Lưu một phản hồi AI để xem nó ở đây.';
$string['chat:history_views_label'] = 'Chế độ xem lịch sử';
$string['chat:history_view_saved'] = 'Đã lưu';
$string['chat:history_view_recent'] = 'Lịch sử';
$string['chat:debug_refresh'] = 'Làm mới';
$string['chat:debug_copy_all'] = 'Sao chép tất cả';
$string['chat:debug_close'] = 'Đóng';
$string['chat:language_switch'] = 'Chuyển đổi ngôn ngữ';
$string['chat:language_dismiss'] = 'Bỏ qua đề xuất ngôn ngữ';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Chọn nhà cung cấp LLM';
$string['chat:llm_model_label'] = 'Mô hình';
$string['chat:llm_model_select'] = 'Chọn mô hình LLM';
$string['chat:footer_usertesting'] = 'Kiểm tra khả năng sử dụng';
$string['chat:footer_feedback'] = 'Phản hồi';
$string['chat:voice_panel_title'] = 'Nói chuyện với {$a} (Thử nghiệm)';

// Additional translated strings.
$string['chat:debug_context'] = 'Gỡ lỗi ngữ cảnh';
$string['chat:debug_context_browser'] = 'Ảnh chụp trình duyệt';
$string['chat:debug_context_copy'] = 'Sao chép';
$string['chat:debug_context_prompt'] = 'Phản hồi máy chủ';
$string['chat:debug_context_request'] = 'Yêu cầu SSE gần nhất';
$string['chat:debug_context_toggle'] = 'Chuyển đổi trình kiểm tra';
$string['chat:history_empty'] = 'Chưa có trò chuyện.';
$string['chat:history_refresh'] = 'Làm mới';
$string['chat:history_subtitle'] = 'Tin nhắn gần đây.';
$string['chat:starter_explain_prompt'] = 'Giải thích khái niệm quan trọng nhất?';
$string['chat:starter_help_lesson'] = 'Giải thích điều này';
$string['chat:starter_help_lesson_prompt'] = 'Giúp tôi hiểu bài. Tóm tắt khái niệm chính.';
$string['chat:starter_prompt_coach'] = 'Huấn luyện AI';
$string['chat:starter_quick_study'] = 'Học nhanh';
$string['chat:starter_study_plan_prompt'] = 'Tôi muốn lên kế hoạch học. Hỏi: (1) mục tiêu, (2) thời gian. Cập nhật kế hoạch.';
$string['chat:voice_copy'] = 'Trò chuyện bằng giọng nói với trợ lý.';
$string['chat:voice_ready'] = 'Sẵn sàng';
$string['chat:voice_start'] = 'Bắt đầu';
$string['chat:voice_title'] = 'Nói chuyện với SOLA';
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
$string['mobile_chip_concepts'] = 'Khái niệm chính';
$string['mobile_chip_quiz'] = 'Câu đố';
$string['mobile_chip_studyplan'] = 'Kế hoạch học tập';
$string['mobile_clear'] = 'Xóa lịch sử';
$string['mobile_disabled'] = 'SOLA không khả dụng cho khóa học này.';
$string['mobile_placeholder'] = 'Đặt câu hỏi...';
$string['mobile_welcome'] = 'Xin chào, {$a}!';
$string['mobile_welcome_sub'] = 'Tôi là SOLA, trợ lý học tập của bạn. Tôi có thể giúp gì?';
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
$string['rubric:done'] = 'Hoàn tất';
$string['rubric:encourage_high'] = 'Xuất sắc! Tiếp tục nhé!';
$string['rubric:encourage_low'] = 'Khởi đầu tốt! Luyện tập thường xuyên sẽ giúp ích.';
$string['rubric:encourage_mid'] = 'Cố gắng tốt! Tiếp tục luyện tập.';
$string['rubric:overall'] = 'Tổng thể';
$string['rubric:practice_again'] = 'Luyện tập lại';
$string['rubric:score_title_conversation'] = 'Điểm luyện hội thoại';
$string['rubric:score_title_pronunciation'] = 'Điểm luyện phát âm';
$string['rubric:scoring'] = 'Đang đánh giá...';
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
$string['demo:title'] = 'Môi trường thử nghiệm';
$string['demo:heading'] = 'Môi trường thử nghiệm';
$string['demo:intro'] = 'Trang này tạo một khóa học thử nghiệm được <strong>ẩn với sinh viên</strong> (visible=0) và điền vào đó bằng sinh viên giả, các cuộc trò chuyện AI, đánh giá và phản hồi. Hữu ích để xem trước Analytics Dashboard hoặc xác thực các thay đổi của plugin mà không ảnh hưởng đến bất kỳ sinh viên thực đã đăng ký nào.';
$string['demo:step1'] = 'Bước 1: khóa học thử nghiệm';
$string['demo:step2'] = 'Bước 2: thêm sinh viên giả và trò chuyện AI';
$string['demo:course_exists'] = 'Khóa học thử nghiệm tồn tại: <strong>{$a->fullname}</strong> (tên ngắn <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'đã ẩn';
$string['demo:badge_visible'] = 'hiển thị với sinh viên';
$string['demo:no_course'] = 'Không tìm thấy khóa học thử nghiệm. Nhấp bên dưới để tạo.';
$string['demo:create_btn'] = 'Tạo khóa học thử nghiệm ẩn';
$string['demo:open_course'] = 'Mở khóa học &rarr;';
$string['demo:seed_intro'] = 'Tạo demo_student_001, demo_student_002, ..., đăng ký họ vào khóa học thử nghiệm và chèn các cuộc trò chuyện, tin nhắn, đánh giá và phản hồi tổng hợp. Chạy lại để thêm dữ liệu, hoặc chọn "xóa trước" để bắt đầu lại.';
$string['demo:users_label'] = 'Người dùng';
$string['demo:weeks_label'] = 'Tuần';
$string['demo:clear_label'] = 'Xóa người dùng demo_* hiện có trước';
$string['demo:seed_btn'] = 'Thêm sinh viên và trò chuyện';
$string['demo:view_analytics'] = 'Xem phân tích cho khóa học này &rarr;';
$string['demo:footer'] = 'Dữ liệu được tạo ở đây nằm trong các bảng người dùng / đăng ký chuẩn của Moodle và các bảng trò chuyện của riêng plugin. Tất cả người dùng giả có tên người dùng bắt đầu bằng <code>demo_student_</code> để dễ lọc hoặc xóa. Để xóa họ, chạy lại bước seed với "Xóa người dùng demo_* hiện có trước" được đánh dấu.';
$string['demo:course_fullname'] = 'Khóa học thử nghiệm SOLA (ẩn)';
$string['demo:notify_created'] = 'Khóa học thử nghiệm sẵn sàng: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Không thể tạo khóa học: {$a}';
$string['demo:notify_seeded'] = 'Đã thêm: {$a->users} người dùng, {$a->conversations} cuộc trò chuyện, {$a->messages} tin nhắn, {$a->ratings} đánh giá, {$a->feedback} mục phản hồi.';
$string['demo:notify_seed_fail'] = 'Không thể thêm dữ liệu: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Chi phí Token & Phân tích &rarr;';
$string['toc:testing'] = 'Môi trường thử nghiệm &rarr;';
$string['toc:back_to_course'] = '&larr; Quay lại {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Không tìm thấy tệp nhị phân pdftotext; đã vô hiệu hóa việc trích xuất PDF.';
$string['rag:pdftotext_available'] = 'Đã phát hiện pdftotext tại {$a}.';
$string['rag:docx_unavailable'] = 'Phần mở rộng PHP ZipArchive không khả dụng; đã vô hiệu hóa việc trích xuất DOCX.';
$string['rag:h5p_unavailable'] = 'Không thể đọc nội dung H5P; đang bỏ qua.';
$string['rag:scorm_too_large'] = 'Gói SCORM vượt quá giới hạn kích thước được cấu hình ({$a} MB); đang bỏ qua.';
$string['rag:scorm_unzip_failed'] = 'Không thể giải nén gói SCORM; đang bỏ qua.';
$string['rag:transcript_fetch_failed'] = 'Không thể lấy bản ghi từ {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL bản ghi bị chặn bởi thử thách Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Đã phát hiện phương tiện nhúng: {$a}';
$string['rag:embed_transcript_attached'] = 'Đã đính kèm bản ghi cho {$a}';

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
