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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:auto_open'] = '첫 방문 시 자동으로 열기';
$string['settings:auto_open_desc'] = '활성화되면 학생이 각 강좌에 처음 도착할 때 SOLA 서랍이 자동으로 열립니다. 동일한 강좌의 후속 페이지 로드에서는 서랍이 다시 열리지 않습니다 — 상태는 학생의 브라우저에서 localStorage를 통해 강좌별로 추적됩니다. 데스크톱과 모바일에서 적용됩니다. Course AI Settings 페이지에서 강좌별로 재정의할 수 있습니다.';
$string['settings:comparison_providers'] = '비교 공급자 (LLM 선택기)';
$string['settings:comparison_providers_desc'] = '위젯 내 LLM 선택기에 추가 AI 공급자를 추가하여 관리자가 공급자 간 응답을 비교할 수 있도록 합니다. 아래 표를 사용하여 행을 추가하세요. 온도 열은 선택 사항입니다(전역 온도를 사용하려면 비워 두세요). 저장 형식: provider_id|api_key|model1,model2|temperature. 위에서 구성한 기본 공급자는 항상 자동으로 포함됩니다. 관리 권한이 있는 관리자만 선택기를 볼 수 있으며, 학생은 절대 볼 수 없습니다. 유효한 provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = '기본 AI 제공자';
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
$string['chat:clear'] = '화면 지우기';
$string['chat:clear_confirm'] = '표시된 메시지를 지우시겠습니까? 전체 채팅 기록은 저장된 상태로 유지되며 위젯을 다시 열면 다시 불러올 수 있습니다.';
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
$string['task:run_meta_ai_query'] = '예약된 학습 레이더 분석 쿼리 실행';
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

// Additional translated strings.
$string['chat:debug_context'] = '컨텍스트 디버그';
$string['chat:debug_context_browser'] = '브라우저 스냅샷';
$string['chat:debug_context_copy'] = '복사';
$string['chat:debug_context_prompt'] = '서버 응답';
$string['chat:debug_context_request'] = '마지막 SSE 요청';
$string['chat:debug_context_toggle'] = '인스펙터 전환';
$string['chat:history_empty'] = '대화가 없습니다.';
$string['chat:history_refresh'] = '새로고침';
$string['chat:history_subtitle'] = '최근 메시지입니다.';
$string['chat:starter_explain_prompt'] = '가장 중요한 개념을 설명해 주세요';
$string['chat:starter_help_lesson'] = '이것을 설명해 주세요';
$string['chat:starter_help_lesson_prompt'] = '수업을 이해하도록 도와주세요. 핵심 개념을 요약해 주세요.';
$string['chat:starter_prompt_coach'] = 'AI 프롬프트 코치';
$string['chat:starter_quick_study'] = '빠른 학습';
$string['chat:starter_study_plan_prompt'] = '학습 계획을 세우고 싶습니다. 물어보세요: (1) 목표, (2) 시간. 기존 계획을 업데이트해 주세요.';
$string['chat:voice_copy'] = '학습 도우미와 음성 대화.';
$string['chat:voice_ready'] = '준비 완료';
$string['chat:voice_start'] = '시작';
$string['chat:voice_title'] = 'SOLA와 대화';
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
$string['mobile_chip_concepts'] = '핵심 개념';
$string['mobile_chip_quiz'] = '퀴즈';
$string['mobile_chip_studyplan'] = '학습 계획';
$string['mobile_clear'] = '기록 지우기';
$string['mobile_disabled'] = 'SOLA는 이 과정에서 사용할 수 없습니다.';
$string['mobile_placeholder'] = '질문하세요...';
$string['mobile_welcome'] = '안녕하세요, {$a}!';
$string['mobile_welcome_sub'] = '저는 SOLA, 학습 도우미입니다. 어떻게 도와드릴까요?';
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
$string['rubric:done'] = '완료';
$string['rubric:encourage_high'] = '훌륭합니다! 계속하세요!';
$string['rubric:encourage_low'] = '좋은 시작입니다! 꾸준한 연습이 도움됩니다.';
$string['rubric:encourage_mid'] = '좋은 노력입니다! 계속 연습하세요.';
$string['rubric:overall'] = '전체';
$string['rubric:practice_again'] = '다시 연습';
$string['rubric:score_title_conversation'] = '대화 연습 점수';
$string['rubric:score_title_pronunciation'] = '발음 연습 점수';
$string['rubric:scoring'] = '평가 중...';
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
$string['demo:title'] = '테스트 환경';
$string['demo:heading'] = '테스트 환경';
$string['demo:intro'] = '이 페이지는 <strong>학생에게 숨겨진</strong>(visible=0) 테스트 코스를 만들고 가짜 학생, AI 대화, 평점, 피드백으로 채웁니다. 실제 등록된 학생에게 영향을 주지 않고 Analytics Dashboard를 미리 보거나 플러그인 변경 사항을 검증하는 데 유용합니다.';
$string['demo:step1'] = 'Step 1: 테스트 코스';
$string['demo:step2'] = 'Step 2: 가짜 학생과 AI 채팅 추가';
$string['demo:course_exists'] = '테스트 코스 존재: <strong>{$a->fullname}</strong> (단축 이름 <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = '숨김';
$string['demo:badge_visible'] = '학생에게 표시됨';
$string['demo:no_course'] = '테스트 코스를 찾을 수 없습니다. 아래를 클릭하여 생성하세요.';
$string['demo:create_btn'] = '숨겨진 테스트 코스 생성';
$string['demo:open_course'] = '코스 열기 &rarr;';
$string['demo:seed_intro'] = 'demo_student_001, demo_student_002, ...를 생성하고 테스트 코스에 등록한 후 합성 대화, 메시지, 평점, 피드백을 삽입합니다. 데이터를 더 추가하려면 다시 실행하거나, 처음부터 다시 시작하려면 "먼저 지우기"를 체크하세요.';
$string['demo:users_label'] = '사용자';
$string['demo:weeks_label'] = '주';
$string['demo:clear_label'] = '기존 demo_* 사용자 먼저 지우기';
$string['demo:seed_btn'] = '학생과 채팅 추가';
$string['demo:view_analytics'] = '이 코스의 Analytics 보기 &rarr;';
$string['demo:footer'] = '여기서 생성된 데이터는 표준 Moodle 사용자 / 수강 등록 테이블과 플러그인 자체 대화 테이블에 있습니다. 모든 가짜 사용자는 <code>demo_student_</code>로 시작하는 사용자명을 가지므로 필터링하거나 제거하기 쉽습니다. 제거하려면 "기존 demo_* 사용자 먼저 지우기"를 체크한 상태로 seed 단계를 다시 실행하세요.';
$string['demo:course_fullname'] = 'SOLA 테스트 코스 (숨김)';
$string['demo:notify_created'] = '테스트 코스 준비됨: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = '코스 생성 실패: {$a}';
$string['demo:notify_seeded'] = '추가됨: {$a->users} 사용자, {$a->conversations} 대화, {$a->messages} 메시지, {$a->ratings} 평점, {$a->feedback} 피드백 항목.';
$string['demo:notify_seed_fail'] = '데이터 추가 실패: {$a}';
$string['toc:analytics'] = 'Analytics 대시보드 &rarr;';
$string['toc:tokenanalytics'] = '토큰 비용 & Analytics &rarr;';
$string['toc:testing'] = '테스트 환경 &rarr;';
$string['toc:back_to_course'] = '&larr; {$a}(으)로 돌아가기';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext 바이너리를 찾을 수 없습니다. PDF 추출이 비활성화되었습니다.';
$string['rag:pdftotext_available'] = '{$a}에서 pdftotext가 감지되었습니다.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive 확장 기능을 사용할 수 없습니다. DOCX 추출이 비활성화되었습니다.';
$string['rag:h5p_unavailable'] = 'H5P 콘텐츠를 읽을 수 없습니다. 건너뜁니다.';
$string['rag:scorm_too_large'] = 'SCORM 패키지가 구성된 크기 제한({$a} MB)을 초과했습니다. 건너뜁니다.';
$string['rag:scorm_unzip_failed'] = 'SCORM 패키지의 압축을 풀 수 없습니다. 건너뜁니다.';
$string['rag:transcript_fetch_failed'] = '{$a}에서 스크립트를 가져올 수 없습니다.';
$string['rag:transcript_cf_challenge'] = '스크립트 URL이 Cloudflare 챌린지에 의해 차단되었습니다: {$a}.';
$string['rag:embed_detected'] = '포함된 미디어가 감지되었습니다: {$a}';
$string['rag:embed_transcript_attached'] = '{$a}에 대한 스크립트가 첨부되었습니다';

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
