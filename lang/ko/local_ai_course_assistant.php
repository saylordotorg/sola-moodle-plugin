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
 * Language strings for local_ai_course_assistant — Korean.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI 코스 어시스턴트';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'AI 튜터 대화를 사용자 및 코스별로 저장합니다.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = '대화를 소유한 사용자의 ID.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = '대화가 속한 코스의 ID.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = '대화 제목.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = '대화가 생성된 시간.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = '대화가 마지막으로 수정된 시간.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'AI 튜터 대화의 개별 메시지를 저장합니다.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = '메시지를 보낸 사용자의 ID.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = '메시지가 속한 코스의 ID.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = '메시지 발신자의 역할(사용자 또는 어시스턴트).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = '메시지 내용.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = '메시지에 사용된 토큰 수.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = '메시지가 생성된 시간.';
$string['ai_course_assistant:use'] = 'AI 튜터 채팅 사용';
$string['ai_course_assistant:viewanalytics'] = 'AI 튜터 채팅 분석 보기';
$string['ai_course_assistant:manage'] = 'AI 튜터 채팅 설정 관리(관리자 역할)';
$string['settings:enabled'] = 'AI 코스 어시스턴트 활성화';
$string['settings:enabled_desc'] = '코스 페이지에서 AI 코스 어시스턴트 위젯을 활성화하거나 비활성화합니다.';
$string['settings:default_course_mode'] = '새 강좌의 기본값';
$string['settings:default_course_mode_desc'] = '강좌별 선택이 이루어지지 않은 경우 강좌에 SOLA가 표시될지 여부를 제어합니다. 새 설치에서는 관리자가 Analytics 페이지나 Course AI Settings 페이지에서 강좌별로 옵트인할 수 있도록 기본적으로 "기본적으로 비활성화"로 설정됩니다.';
$string['settings:default_course_mode_per_course'] = '기본적으로 비활성화 (강좌별 활성화)';
$string['settings:default_course_mode_all'] = '모든 강좌에서 활성화';
$string['settings:provider'] = 'AI 제공자';
$string['settings:provider_desc'] = '채팅 완성에 사용할 AI 제공자를 선택하세요. Moodle의 내장 AI 구성(Site admin > AI)을 통해 요청을 라우팅하려면 "Moodle AI (core_ai subsystem)"를 선택하세요. 해당 모드에서는 아래의 API 키, 모델 및 기본 URL 필드가 무시됩니다. Streaming, tool use 및 prompt caching은 core_ai를 통해 사용할 수 없으며 — 응답은 단일 청크로 전달됩니다. 최상의 학생 경험을 위해 직접 제공자를 사용하세요.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (로컬)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = '사용자 정의 (OpenAI 호환)';
$string['settings:apikey'] = 'API 키';
$string['settings:apikey_desc'] = '선택한 제공자의 API 키. Ollama의 경우 필요하지 않습니다.';
$string['settings:model'] = '모델 이름';
$string['settings:model_desc'] = '사용할 모델. 기본값은 제공자에 따라 다릅니다(예: claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API 기본 URL';
$string['settings:apibaseurl_desc'] = 'API 기본 URL. 제공자에 따라 자동으로 채워지지만 재정의할 수 있습니다. 제공자 기본값을 사용하려면 비워 두세요.';
$string['settings:systemprompt'] = '시스템 프롬프트 템플릿';
$string['settings:systemprompt_desc'] = 'AI에 전송되는 시스템 프롬프트. 플레이스홀더 {{coursename}}, {{userrole}}, {{coursetopics}}를 사용하세요.';
$string['settings:systemprompt_default'] = '당신은 "{{coursename}}" 코스의 유용한 AI 튜터입니다. 학생의 역할은 {{userrole}}입니다.

코스에서 다루는 주제:
{{coursetopics}}

학생이 코스 내용을 이해할 수 있도록 도와주세요. 격려하고, 명확하며, 교육적으로 엄격하게 응답하세요.';
$string['settings:temperature'] = '온도';
$string['settings:temperature_desc'] = '무작위성을 제어합니다. 낮은 값은 더 집중적이고, 높은 값은 더 창의적입니다. 범위: 0.0~2.0.';
$string['settings:maxhistory'] = '최대 대화 기록';
$string['settings:maxhistory_desc'] = 'API 요청에 포함할 최대 메시지 쌍 수. 이전 메시지는 삭제됩니다.';
$string['settings:avatar'] = '채팅 아바타';
$string['settings:avatar_desc'] = '채팅 위젯 버튼의 아바타 아이콘을 선택하세요.';
$string['settings:avatar_saylor'] = '{$a} 로고(기본값)';
$string['settings:position'] = '위젯 위치';
$string['settings:position_desc'] = '페이지에서 채팅 위젯의 위치.';
$string['settings:position_br'] = '오른쪽 하단';
$string['settings:position_bl'] = '왼쪽 하단';
$string['settings:position_tr'] = '오른쪽 상단';
$string['settings:position_tl'] = '왼쪽 상단';
$string['chat:settings'] = '플러그인 설정';
$string['analytics:viewdashboard'] = '분석 대시보드 보기';
$string['coursesettings:title'] = '코스 AI 설정';
$string['coursesettings:enabled'] = '코스 재정의 활성화';
$string['coursesettings:enabled_desc'] = '활성화하면 아래 설정이 이 코스에 대해서만 글로벌 AI 제공자 설정을 재정의합니다. 글로벌 값을 상속하려면 필드를 비워 두세요.';
$string['coursesettings:sola_enabled'] = '이 강좌의 SOLA';
$string['coursesettings:sola_enabled_toggle'] = '이 강좌에 SOLA 위젯 표시';
$string['coursesettings:sola_enabled_desc'] = '이 강좌에 SOLA 채팅 위젯이 표시될지 여부를 제어합니다. 사이트 전체 기본값은 플러그인 설정의 General > Default for new courses에서 설정됩니다.';
$string['coursesettings:using_global'] = '글로벌 설정 사용 중';
$string['coursesettings:saved'] = '코스 AI 설정이 저장되었습니다.';
$string['coursesettings:global_settings_link'] = '글로벌 AI 설정';
$string['lang:switch'] = '네, 전환합니다';
$string['lang:dismiss'] = '아니요, 괜찮습니다';
$string['lang:change'] = '언어 변경';
$string['lang:english'] = '영어';
$string['chat:title'] = 'AI 튜터';
$string['chat:placeholder'] = '질문을 입력하세요...';
$string['chat:send'] = '보내기';
$string['chat:close'] = '채팅 닫기';
$string['chat:open'] = 'AI 튜터 채팅 열기';
$string['chat:clear'] = '기록 지우기';
$string['chat:clear_confirm'] = '이 코스의 채팅 기록을 지우시겠습니까?';
$string['chat:copy'] = '대화 복사';
$string['chat:copied'] = '대화가 클립보드에 복사되었습니다';
$string['chat:copy_failed'] = '대화 복사에 실패했습니다';
$string['chat:thinking'] = '생각 중...';
$string['chat:error'] = '죄송합니다. 오류가 발생했습니다. 다시 시도해 주세요.';
$string['chat:error_auth'] = '인증 오류. 관리자에게 문의하세요.';
$string['chat:error_ratelimit'] = '요청이 너무 많습니다. 잠시 후 다시 시도해 주세요.';
$string['chat:error_unavailable'] = 'AI 서비스가 일시적으로 사용할 수 없습니다. 나중에 다시 시도해 주세요.';
$string['chat:error_notconfigured'] = 'AI 튜터가 아직 구성되지 않았습니다. 관리자에게 문의하세요.';
$string['chat:mic'] = '음성으로 질문하기';
$string['chat:mic_error'] = '마이크 오류. 브라우저 권한을 확인하세요.';
$string['chat:mic_unsupported'] = '이 브라우저에서는 음성 입력이 지원되지 않습니다.';
$string['chat:newline_hint'] = 'Shift+Enter로 새 단락';
$string['chat:you'] = '나';
$string['chat:assistant'] = 'AI 튜터';
$string['chat:history_loaded'] = '이전 대화가 로드되었습니다.';
$string['chat:history_cleared'] = '채팅 기록이 지워졌습니다.';
$string['chat:offtopic_warning'] = '질문이 이 코스와 관련이 없는 것 같습니다. 최선의 도움을 드릴 수 있도록 주제에 맞게 질문해 주세요!';
$string['chat:offtopic_ended'] = '대화가 주제에서 너무 벗어나 AI 튜터 접근이 {$a}분간 일시 중단되었습니다. 이 시간을 활용하여 코스 자료를 검토하세요. 나중에 다시 시도할 수 있습니다.';
$string['chat:offtopic_locked'] = 'AI 튜터 접근이 일시적으로 중단되었습니다. {$a}분 후에 다시 시도할 수 있습니다. 돌아오시면 코스 관련 질문에 집중해 주세요.';
$string['chat:escalated_to_support'] = '질문에 완전히 답변하지 못하여 지원 티켓을 생성했습니다. 지원팀이 연락드릴 것입니다. 티켓 번호는 {$a}입니다.';
$string['chat:studyplan_intro'] = '이 코스의 학습 계획을 세우는 것을 도와드릴 수 있습니다! 주당 공부할 수 있는 시간을 알려주시면 체계적인 계획을 세워드리겠습니다.';
$string['settings:faq_heading'] = 'FAQ 및 지원';
$string['settings:faq_heading_desc'] = '중앙 집중식 FAQ 및 Zendesk 지원 티켓 통합을 구성합니다.';
$string['settings:faq_content'] = 'FAQ 내용';
$string['settings:faq_content_desc'] = 'FAQ 항목을 입력하세요(한 줄에 하나씩, 형식: Q: 질문 | A: 답변). 일반적인 지원 질문에 답변하기 위해 AI에 제공됩니다.';
$string['settings:zendesk_enabled'] = 'Zendesk 에스컬레이션 활성화';
$string['settings:zendesk_enabled_desc'] = 'AI가 지원 질문을 해결할 수 없는 경우 대화 요약이 포함된 Zendesk 티켓을 자동으로 생성합니다.';
$string['settings:zendesk_subdomain'] = 'Zendesk 하위 도메인';
$string['settings:zendesk_subdomain_desc'] = 'Zendesk 하위 도메인(예: mycompany.zendesk.com의 경우 "mycompany").';
$string['settings:zendesk_email'] = 'Zendesk API 이메일';
$string['settings:zendesk_email_desc'] = 'API 인증을 위한 Zendesk 사용자 이메일 주소(/token 접미사 포함).';
$string['settings:zendesk_token'] = 'Zendesk API 토큰';
$string['settings:zendesk_token_desc'] = 'Zendesk 인증을 위한 API 토큰.';
$string['settings:offtopic_heading'] = '주제 이탈 감지';
$string['settings:offtopic_heading_desc'] = '채팅이 주제를 벗어난 대화를 처리하는 방법을 구성합니다.';
$string['settings:offtopic_enabled'] = '주제 이탈 감지 활성화';
$string['settings:offtopic_enabled_desc'] = 'AI가 주제를 벗어난 대화를 감지하고 리디렉션하도록 합니다.';
$string['settings:offtopic_max'] = '최대 주제 이탈 메시지 수';
$string['settings:offtopic_max_desc'] = '조치를 취하기 전 연속 주제 이탈 메시지 수.';
$string['settings:offtopic_action'] = '주제 이탈 조치';
$string['settings:offtopic_action_desc'] = '주제 이탈 제한에 도달했을 때의 조치.';
$string['settings:offtopic_action_warn'] = '경고 및 리디렉션';
$string['settings:offtopic_action_end'] = '일시적으로 접근 차단';
$string['settings:offtopic_lockout_duration'] = '차단 기간(분)';
$string['settings:offtopic_lockout_duration_desc'] = '주제 이탈 제한을 초과한 후 학생이 AI 튜터 접근을 잃는 시간(분). 기본값: 30분.';
$string['settings:studyplan_heading'] = '학습 계획 및 알림';
$string['settings:studyplan_heading_desc'] = '학습 계획 기능 및 알림 알림을 구성합니다.';
$string['settings:studyplan_enabled'] = '학습 계획 활성화';
$string['settings:studyplan_enabled_desc'] = 'AI 튜터가 가용 시간에 따라 개인화된 학습 계획을 만들 수 있도록 합니다.';
$string['settings:reminders_email_enabled'] = '이메일 알림 활성화';
$string['settings:reminders_email_enabled_desc'] = '학생이 이메일 학습 알림을 받을 수 있도록 합니다.';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsApp 알림 활성화';
$string['settings:reminders_whatsapp_enabled_desc'] = '학생이 WhatsApp으로 학습 알림을 받을 수 있도록 합니다(WhatsApp API 구성 필요).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'WhatsApp 메시지를 보내기 위한 API 엔드포인트(예: Twilio, MessageBird). "to", "from", "body" 필드가 포함된 JSON 본문의 POST를 수락해야 합니다.';
$string['settings:whatsapp_api_token'] = 'WhatsApp API 토큰';
$string['settings:whatsapp_api_token_desc'] = 'WhatsApp API 인증 토큰.';
$string['settings:whatsapp_from_number'] = 'WhatsApp 발신 번호';
$string['settings:whatsapp_from_number_desc'] = 'WhatsApp 메시지를 보낼 전화번호(국가 코드 포함, 예: +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp 차단 국가';
$string['settings:whatsapp_blocked_countries_desc'] = '현지 규정으로 인해 WhatsApp 알림이 허용되지 않는 국가의 ISO 3166-1 alpha-2 국가 코드를 쉼표로 구분하여 입력(예: "CN,IR,KP").';
$string['reminder:email_subject'] = '학습 알림: {$a}';
$string['reminder:email_body'] = '{$a->firstname}님, 안녕하세요.

"{$a->coursename}"의 학습 알림입니다.

{$a->message}

학습 계획에 따르면 이 코스에 주당 {$a->hours_per_week}시간이 권장됩니다.

계속 열심히 하세요!

---
이 알림을 중지하려면 여기를 클릭하세요: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = '{$a->coursename} 학습 알림: {$a->message} (구독 취소: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = '오늘의 학습 목표: ';
$string['unsubscribe:title'] = '학습 알림 구독 취소';
$string['unsubscribe:success'] = '이 코스의 학습 알림 구독이 취소되었습니다.';
$string['unsubscribe:already'] = '이미 이 알림의 구독이 취소되었습니다.';
$string['unsubscribe:invalid'] = '유효하지 않거나 만료된 구독 취소 링크입니다.';
$string['unsubscribe:resubscribe'] = '마음이 바뀌셨나요? AI 튜터 채팅에서 알림을 다시 활성화할 수 있습니다.';
$string['task:send_reminders'] = 'AI 튜터 학습 알림 보내기';
$string['privacy:metadata:local_ai_course_assistant_plans'] = '학생 학습 계획을 저장합니다.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = '학습 계획을 소유한 사용자의 ID.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = '학습 계획이 속한 코스.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = '학생이 계획한 주당 공부 시간.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'JSON 형식의 학습 계획 세부 정보.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = '학습 알림 설정 및 구독을 저장합니다.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = '알림을 구독한 사용자의 ID.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = '알림 채널(이메일 또는 WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = '알림을 위한 이메일 주소 또는 전화번호.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = '규정 준수를 위한 사용자의 국가 코드.';
$string['analytics:title'] = 'AI 튜터 분석';
$string['analytics:overview'] = '개요';
$string['analytics:total_conversations'] = '총 대화 수';
$string['analytics:total_messages'] = '총 메시지 수';
$string['analytics:active_students'] = '활성 학생';
$string['analytics:avg_messages_per_student'] = '학생당 평균 메시지 수';
$string['analytics:offtopic_rate'] = '주제 이탈 비율';
$string['analytics:escalation_count'] = '지원으로 에스컬레이션';
$string['analytics:studyplan_adoption'] = '학습 계획이 있는 학생';
$string['analytics:usage_trends'] = '사용 추세';
$string['analytics:daily_messages'] = '일일 메시지 양';
$string['analytics:hotspots'] = '코스 핫스팟';
$string['analytics:hotspots_desc'] = '학생 질문에서 가장 자주 참조되는 코스 섹션. 높은 수치는 학생들이 더 많은 지원이 필요한 영역을 나타낼 수 있습니다.';
$string['analytics:section'] = '섹션';
$string['analytics:mention_count'] = '언급 수';
$string['analytics:common_prompts'] = '일반적인 질문 패턴';
$string['analytics:common_prompts_desc'] = '학생들의 반복적인 질문 패턴. 코스 내용의 체계적인 격차를 식별하기 위해 검토하세요.';
$string['analytics:prompt_pattern'] = '패턴';
$string['analytics:frequency'] = '빈도';
$string['analytics:recent_activity'] = '최근 활동';
$string['analytics:no_data'] = '아직 분석 데이터가 없습니다. 학생들이 AI 튜터를 사용하기 시작하면 데이터가 표시됩니다.';
$string['analytics:timerange'] = '기간';
$string['analytics:last_7_days'] = '최근 7일';
$string['analytics:last_30_days'] = '최근 30일';
$string['analytics:all_time'] = '전체 기간';
$string['analytics:export'] = '데이터 내보내기';
$string['analytics:provider_comparison'] = 'AI 제공자 비교';
$string['analytics:provider_comparison_desc'] = '이 코스에서 사용된 AI 제공자의 성능을 비교합니다.';
$string['analytics:provider'] = '제공자';
$string['analytics:response_count'] = '응답 수';
$string['analytics:avg_response_length'] = '평균 응답 길이';
$string['analytics:total_tokens'] = '총 토큰';
$string['analytics:avg_tokens'] = '응답당 평균 토큰';
$string['usersettings:title'] = 'AI 코스 어시스턴트: 내 데이터';
$string['usersettings:intro'] = 'AI 튜터 채팅 데이터와 개인정보 설정을 관리합니다';
$string['usersettings:privacy_info'] = 'AI 튜터와의 대화는 코스 전체에 걸쳐 지속적인 지원을 제공하기 위해 저장됩니다. 이 데이터를 완전히 관리할 수 있으며 언제든지 삭제할 수 있습니다.';
$string['usersettings:usage_stats'] = '내 사용 통계';
$string['usersettings:total_messages'] = '총 메시지';
$string['usersettings:total_conversations'] = '대화';
$string['usersettings:messages'] = '메시지';
$string['usersettings:last_activity'] = '마지막 활동';
$string['usersettings:delete_course_data'] = '코스 데이터 삭제';
$string['usersettings:no_data'] = '아직 AI 튜터를 사용하지 않았습니다. 채팅을 시작하면 사용 데이터가 여기에 표시됩니다.';
$string['usersettings:delete_all_title'] = '모든 데이터 삭제';
$string['usersettings:delete_all_warning'] = '이 작업은 모든 코스에서 AI 튜터와의 모든 대화를 영구적으로 삭제합니다. 이 작업은 되돌릴 수 없습니다.';
$string['usersettings:delete_all_button'] = '내 모든 데이터 삭제';
$string['usersettings:confirm_delete_course'] = '코스 "{$a}"의 모든 AI 튜터 데이터를 영구적으로 삭제하시겠습니까? 이 작업은 되돌릴 수 없습니다.';
$string['usersettings:confirm_delete_all'] = '모든 코스에서 모든 AI 튜터 데이터를 영구적으로 삭제하시겠습니까? 이 작업은 되돌릴 수 없습니다.';
$string['usersettings:data_deleted'] = '데이터가 삭제되었습니다.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = '안녕하세요, {$a}님! 저는 SOLA입니다. 오늘 어떻게 도와드릴까요?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA 열기';
$string['chat:change_avatar'] = '아바타 변경';

// Quiz UI.
$string['chat:quiz'] = '연습 퀴즈 풀기';
$string['chat:quiz_setup_title'] = '연습 퀴즈';
$string['chat:quiz_questions'] = '질문 수';
$string['chat:quiz_topic'] = '주제';
$string['chat:quiz_topic_guided'] = 'AI 가이드(진도에 따라)';
$string['chat:quiz_topic_default'] = '현재 코스 내용';
$string['chat:quiz_topic_custom'] = '사용자 정의 주제…';
$string['chat:quiz_custom_placeholder'] = '주제 또는 질문을 입력하세요...';
$string['chat:quiz_start'] = '퀴즈 시작';
$string['chat:quiz_cancel'] = '취소';
$string['chat:quiz_loading'] = '퀴즈 생성 중…';
$string['chat:quiz_error'] = '퀴즈를 생성할 수 없습니다. 다시 시도해 주세요.';
$string['chat:quiz_correct'] = '정답!';
$string['chat:quiz_wrong'] = '오답.';
$string['chat:quiz_next'] = '다음 질문';
$string['chat:quiz_finish'] = '결과 보기';
$string['chat:quiz_score'] = '퀴즈 완료! {$a->total}문제 중 {$a->score}문제를 맞혔습니다.';
$string['chat:quiz_summary'] = '"{$a->topic}"에 대한 {$a->total}문제 연습 퀴즈를 완료했으며, {$a->score}/{$a->total}의 성적을 받았습니다.';
$string['chat:quiz_topic_objectives'] = '학습 목표';
$string['chat:quiz_topic_modules'] = '코스 주제';
$string['chat:quiz_subtopic_select'] = '특정 항목 선택…';
$string['chat:quiz_topic_sections'] = '코스 섹션';
$string['chat:quiz_score_great'] = '훌륭합니다! 이 내용을 정말 잘 이해하고 있습니다.';
$string['chat:quiz_score_good'] = '잘했습니다! 이해를 강화하기 위해 계속 복습하세요.';
$string['chat:quiz_score_practice'] = '계속 연습하세요. 관련 코스 내용을 복습한 후 다시 퀴즈에 도전해 보세요.';
$string['chat:quiz_review_heading'] = '복습';
$string['chat:quiz_retake'] = '퀴즈 재도전';
$string['chat:quiz_exit'] = '퀴즈 종료';
$string['chat:quiz_your_answer'] = '내 답변';
$string['chat:quiz_correct_answer'] = '정답';

// Conversation starters.
$string['chat:starters_label'] = '대화 시작하기';
$string['chat:starter_quiz'] = '이것에 대해 테스트';
$string['chat:starter_explain'] = '이것을 설명해 줘';
$string['chat:starter_key_concepts'] = '핵심 개념';
$string['chat:starter_study_plan'] = '학습 계획';
$string['chat:starter_help_me'] = 'AI 도움';
$string['chat:starter_ai_project_coach'] = 'AI 프로젝트 코치';
$string['chat:starter_ell_practice'] = '대화 연습';
$string['chat:starter_ell_pronunciation'] = 'ELL 발음';
$string['chat:starter_ai_coach'] = 'AI 코치';
$string['chat:starter_speak'] = '시작 문구 말하기';

// Reset / home.
$string['chat:reset'] = '처음으로';

// Topic picker.
$string['chat:topic_picker_title'] = '무엇에 집중하고 싶으세요?';
$string['chat:topic_picker_title_help'] = '무엇에 도움이 필요하세요?';
$string['chat:topic_picker_title_explain'] = '무엇을 설명해 드릴까요?';
$string['chat:topic_picker_title_study'] = '어떤 분야에 집중하고 싶으세요?';
$string['chat:topic_start'] = '계속';

// Expand states.
$string['chat:fullscreen'] = '전체 화면';
$string['chat:exitfullscreen'] = '전체 화면 종료';

// Settings panel.
$string['chat:language'] = '언어 변경';
$string['chat:settings_panel'] = '설정';
$string['chat:settings_language'] = '언어';
$string['chat:settings_avatar'] = '아바타';
$string['chat:settings_voice'] = '음성';
$string['chat:settings_voice_admin'] = '음성 설정은 사이트 관리 패널에서 관리됩니다.';

// Voice mode.
$string['chat:voice_mode'] = '음성 모드';
$string['chat:voice_end'] = '음성 세션 종료';
$string['chat:voice_connecting'] = '연결 중...';
$string['chat:voice_listening'] = '듣고 있습니다...';
$string['chat:voice_speaking'] = 'SOLA가 말하고 있습니다...';
$string['chat:voice_idle'] = '준비됨';
$string['chat:voice_error'] = '음성 연결에 실패했습니다. 설정을 확인하세요.';
$string['chat:quiz_locked'] = '학술적 무결성을 위해 퀴즈 중에는 SOLA가 일시 중지됩니다. 행운을 빕니다!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = '메모';

// History panel.
$string['chat:history_title'] = '메모 및 대화 기록';
$string['task:send_inactivity_reminders'] = '주간 비활동 알림 이메일 보내기';
$string['messageprovider:study_notes'] = '학습 세션 노트';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / 프론트엔드 전송';
$string['settings:cdn_heading_desc'] = 'Moodle 파일 시스템 대신 외부 CDN에서 SOLA 프론트엔드 자산(JS/CSS)을 제공합니다. 이를 통해 플러그인 업그레이드 없이 프론트엔드 업데이트가 가능합니다. 로컬 플러그인 파일을 사용하려면 CDN URL을 비워 두세요.';
$string['settings:cdn_url'] = 'CDN 기본 URL';
$string['settings:cdn_url_desc'] = 'sola.min.js와 sola.min.css가 호스팅되는 기본 URL. 예: https://your-org.github.io/sola-cdn. 로컬 플러그인 파일을 사용하려면 비워 두세요.';
$string['settings:cdn_version'] = 'CDN 자산 버전';
$string['settings:cdn_version_desc'] = 'cache busting을 위해 CDN URL에 추가되는 버전 문자열. 각 CDN 배포 후 업데이트하세요 (예: 3.2.4 또는 commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = '전체 사용량';
$string['analytics:tab_bycourse'] = '코스별';
$string['analytics:tab_comparison'] = 'AI 사용자 vs 비사용자';
$string['analytics:tab_byunit'] = '단원별';
$string['analytics:tab_usagetypes'] = '사용 유형';
$string['analytics:tab_themes'] = '테마';
$string['analytics:tab_feedback'] = 'AI 피드백';
$string['analytics:total_students'] = '전체 학생 수';
$string['analytics:active_users'] = '활성 AI 사용자';
$string['analytics:msgs_per_student'] = '학생당 메시지';
$string['analytics:avg_session'] = '평균 세션 시간';
$string['analytics:return_rate'] = '재방문율';
$string['analytics:total_sessions'] = '전체 세션';
$string['analytics:thumbs_up'] = '좋아요';
$string['analytics:thumbs_down'] = '싫어요';
$string['analytics:hallucination_flags'] = '부정확한 정보 표시';
$string['analytics:msgs_to_resolution'] = '해결까지 메시지 수';
$string['analytics:helpful'] = '도움됨';
$string['analytics:not_helpful'] = '도움 안됨';
$string['analytics:flag_hallucination'] = '이 응답에는 부정확한 정보가 포함되어 있습니다';
$string['analytics:submit_rating'] = '제출';
$string['analytics:thanks_feedback'] = '피드백 감사합니다';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_groq'] = 'Groq';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = '이 페이지 설명';
$string['chat:starter_ask_anything'] = '무엇이든 질문하세요';
$string['chat:starter_review_practice'] = '복습 및 연습';
$string['chat:history_saved_subtitle'] = '저장된 응답은 이 과정 동안 이 기기에 유지됩니다.';
$string['chat:history_saved_empty'] = '여기서 보려면 AI 응답을 저장하세요.';
$string['chat:history_views_label'] = '기록 보기';
$string['chat:history_view_saved'] = '저장됨';
$string['chat:history_view_recent'] = '기록';
$string['chat:debug_refresh'] = '새로고침';
$string['chat:debug_copy_all'] = '모두 복사';
$string['chat:debug_close'] = '닫기';
$string['chat:language_switch'] = '언어 전환';
$string['chat:language_dismiss'] = '언어 제안 닫기';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM 제공자 선택';
$string['chat:llm_model_label'] = '모델';
$string['chat:llm_model_select'] = 'LLM 모델 선택';
$string['chat:footer_usertesting'] = '사용성 테스트';
$string['chat:footer_feedback'] = '피드백';
$string['chat:voice_panel_title'] = '{$a}와 대화하기 (실험적)';
