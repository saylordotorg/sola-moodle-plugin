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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'Nhà cung cấp AI';
$string['settings:provider_desc'] = 'Chọn nhà cung cấp AI để sử dụng cho các phiên chat.';
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
$string['settings:avatar_saylor'] = 'Logo Saylor Academy (Mặc định)';
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
$string['chat:clear'] = 'Xóa lịch sử';
$string['chat:clear_confirm'] = 'Bạn có chắc muốn xóa lịch sử chat của mình cho khóa học này không?';
$string['chat:copy'] = 'Sao chép cuộc trò chuyện';
$string['chat:copied'] = 'Đã sao chép cuộc trò chuyện vào clipboard';
$string['chat:copy_failed'] = 'Không thể sao chép cuộc trò chuyện';
$string['chat:greeting'] = 'Xin chào! Tôi là gia sư AI của bạn cho khóa học này. Tôi có thể giúp gì cho bạn hôm nay?';
$string['chat:thinking'] = 'Đang suy nghĩ...';
$string['chat:error'] = 'Xin lỗi, đã có lỗi xảy ra. Vui lòng thử lại.';
$string['chat:error_auth'] = 'Lỗi xác thực. Vui lòng liên hệ quản trị viên.';
$string['chat:error_ratelimit'] = 'Quá nhiều yêu cầu. Vui lòng đợi một chút rồi thử lại.';
$string['chat:error_unavailable'] = 'Dịch vụ AI tạm thời không khả dụng. Vui lòng thử lại sau.';
$string['chat:error_notconfigured'] = 'Gia sư AI chưa được cấu hình. Vui lòng liên hệ quản trị viên.';
$string['chat:expand'] = 'Mở rộng chat';
$string['chat:collapse'] = 'Thu nhỏ chat';
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
