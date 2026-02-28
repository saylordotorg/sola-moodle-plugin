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
 * Language strings for local_ai_course_assistant — Simplified Chinese (zh_cn).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'AI 课程助手';
$string['privacy:metadata:local_ai_course_assistant_convs'] = '存储每位用户和课程的 AI 辅导聊天会话。';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = '拥有该会话的用户 ID。';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = '该会话所属课程的 ID。';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = '会话的标题。';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = '会话的创建时间。';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = '会话的最后修改时间。';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = '存储 AI 辅导聊天会话中的各条消息。';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = '发送该消息的用户 ID。';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = '该消息所属课程的 ID。';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = '消息发送者的角色（用户或助手）。';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = '消息的内容。';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = '该消息使用的 token 数量。';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = '消息的创建时间。';

// Capabilities.
$string['ai_course_assistant:use'] = '使用 AI 辅导聊天';
$string['ai_course_assistant:viewanalytics'] = '查看 AI 辅导聊天分析';
$string['ai_course_assistant:manage'] = '管理 AI 辅导聊天设置（管理员角色）';

// Settings.
$string['settings:enabled'] = '启用 AI 课程助手';
$string['settings:enabled_desc'] = '在课程页面上启用或禁用 AI 课程助手小部件。';
$string['settings:provider'] = 'AI 提供商';
$string['settings:provider_desc'] = '选择用于聊天补全的 AI 提供商。';
$string['settings:provider_claude'] = 'Claude（Anthropic）';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama（本地）';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = '自定义（OpenAI 兼容）';
$string['settings:apikey'] = 'API 密钥';
$string['settings:apikey_desc'] = '所选提供商的 API 密钥。Ollama 不需要此项。';
$string['settings:model'] = '模型名称';
$string['settings:model_desc'] = '要使用的模型。默认值取决于提供商（例如 claude-sonnet-4-5-20250929、gpt-4o、llama3、MiniMax-Text-01）。';
$string['settings:apibaseurl'] = 'API 基础 URL';
$string['settings:apibaseurl_desc'] = 'API 的基础 URL。会根据提供商自动填写，但可以覆盖。留空则使用提供商默认值。';
$string['settings:systemprompt'] = '系统提示模板';
$string['settings:systemprompt_desc'] = '发送给 AI 的系统提示。可使用占位符：{{coursename}}、{{userrole}}、{{coursetopics}}。';
$string['settings:systemprompt_default'] = '您是课程"{{coursename}}"的 AI 辅导助手。学生的角色为 {{userrole}}。

课程涵盖的主题：
{{coursetopics}}

请帮助学生理解课程内容。请保持鼓励、清晰且具有教学意义的态度。';
$string['settings:temperature'] = '温度';
$string['settings:temperature_desc'] = '控制随机性。值越低输出越集中，值越高输出越有创意。范围：0.0 至 2.0。';
$string['settings:maxhistory'] = '最大会话历史记录';
$string['settings:maxhistory_desc'] = 'API 请求中包含的最大消息对数量。较旧的消息将被裁减。';
$string['settings:avatar'] = '聊天头像';
$string['settings:avatar_desc'] = '选择聊天小部件按钮的头像图标。';
$string['settings:avatar_saylor'] = 'Saylor Academy 徽标（默认）';
$string['settings:position'] = '小部件位置';
$string['settings:position_desc'] = '聊天小部件在页面上的位置。';
$string['settings:position_br'] = '右下角';
$string['settings:position_bl'] = '左下角';
$string['settings:position_tr'] = '右上角';
$string['settings:position_tl'] = '左上角';
$string['chat:settings'] = '插件设置';
$string['analytics:viewdashboard'] = '查看分析仪表板';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = '课程 AI 设置';
$string['coursesettings:enabled'] = '启用课程覆盖';
$string['coursesettings:enabled_desc'] = '启用后，以下设置将仅针对本课程覆盖全局 AI 提供商配置。留空字段则继承全局值。';
$string['coursesettings:using_global'] = '使用全局设置';
$string['coursesettings:saved'] = '课程 AI 设置已保存。';
$string['coursesettings:global_settings_link'] = '全局 AI 设置';

// Language detection and preference.
$string['lang:switch'] = '是，切换';
$string['lang:dismiss'] = '不，谢谢';
$string['lang:change'] = '更改语言';
$string['lang:english'] = '英语';

// Chat widget.
$string['chat:title'] = 'AI 辅导';
$string['chat:placeholder'] = '请输入您的问题...';
$string['chat:send'] = '发送';
$string['chat:close'] = '关闭聊天';
$string['chat:open'] = '打开 AI 辅导聊天';
$string['chat:clear'] = '清除历史记录';
$string['chat:clear_confirm'] = '您确定要清除本课程的聊天历史记录吗？';
$string['chat:copy'] = '复制会话';
$string['chat:copied'] = '会话已复制到剪贴板';
$string['chat:copy_failed'] = '复制会话失败';
$string['chat:greeting'] = '您好！我是本课程的 AI 辅导助手。今天有什么我可以帮助您的吗？';
$string['chat:thinking'] = '正在思考...';
$string['chat:error'] = '很抱歉，出现了一些问题。请重试。';
$string['chat:error_auth'] = '身份验证错误。请联系您的管理员。';
$string['chat:error_ratelimit'] = '请求过多。请稍等片刻后重试。';
$string['chat:error_unavailable'] = 'AI 服务暂时不可用。请稍后再试。';
$string['chat:error_notconfigured'] = 'AI 辅导助手尚未配置。请联系您的管理员。';
$string['chat:expand'] = '展开聊天';
$string['chat:collapse'] = '收起聊天';
$string['chat:mic'] = '语音提问';
$string['chat:mic_error'] = '麦克风错误。请检查您的浏览器权限。';
$string['chat:mic_unsupported'] = '此浏览器不支持语音输入。';
$string['chat:newline_hint'] = 'Shift+Enter 换行';
$string['chat:you'] = '您';
$string['chat:assistant'] = 'AI 辅导';
$string['chat:history_loaded'] = '已加载之前的会话。';
$string['chat:history_cleared'] = '聊天历史已清除。';
$string['chat:offtopic_warning'] = '您的问题似乎与本课程无关。请尽量保持话题相关，以便我更好地帮助您！';
$string['chat:offtopic_ended'] = '由于会话多次偏离主题，您的 AI 辅导访问权限已被暂停 {$a} 分钟。请利用这段时间复习课程材料，稍后再试。';
$string['chat:offtopic_locked'] = '您的 AI 辅导访问权限已被暂停。您可以在 {$a} 分钟后重试。回来后请专注于与课程相关的问题。';
$string['chat:escalated_to_support'] = '我无法完全回答您的问题，因此已为您创建了一个支持工单。支持团队成员将跟进处理。您的工单编号为：{$a}';
$string['chat:studyplan_intro'] = '我可以帮您为本课程制定学习计划！只需告诉我您每周可以投入多少小时用于学习，我将帮您制定一个有条理的计划。';

// FAQ & Support settings.
$string['settings:faq_heading'] = '常见问题与支持';
$string['settings:faq_heading_desc'] = '配置集中式常见问题解答和 Zendesk 支持工单集成。';
$string['settings:faq_content'] = '常见问题内容';
$string['settings:faq_content_desc'] = '输入常见问题条目（每行一条，格式为：Q: 问题 | A: 答案）。这些内容将提供给 AI 以回答常见支持问题。';
$string['settings:zendesk_enabled'] = '启用 Zendesk 升级';
$string['settings:zendesk_enabled_desc'] = '当 AI 无法解决支持问题时，自动创建包含会话摘要的 Zendesk 工单。';
$string['settings:zendesk_subdomain'] = 'Zendesk 子域名';
$string['settings:zendesk_subdomain_desc'] = '您的 Zendesk 子域名（例如 mycompany.zendesk.com 中的"mycompany"）。';
$string['settings:zendesk_email'] = 'Zendesk API 邮箱';
$string['settings:zendesk_email_desc'] = '用于 API 身份验证的 Zendesk 用户邮箱地址（需附加 /token 后缀）。';
$string['settings:zendesk_token'] = 'Zendesk API 令牌';
$string['settings:zendesk_token_desc'] = '用于 Zendesk 身份验证的 API 令牌。';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = '偏题检测';
$string['settings:offtopic_heading_desc'] = '配置聊天处理偏题会话的方式。';
$string['settings:offtopic_enabled'] = '启用偏题检测';
$string['settings:offtopic_enabled_desc'] = '指示 AI 检测并重定向偏题会话。';
$string['settings:offtopic_max'] = '最大偏题消息数';
$string['settings:offtopic_max_desc'] = '采取行动前连续偏题消息的数量。';
$string['settings:offtopic_action'] = '偏题处理方式';
$string['settings:offtopic_action_desc'] = '达到偏题上限时的处理方式。';
$string['settings:offtopic_action_warn'] = '警告并重定向';
$string['settings:offtopic_action_end'] = '暂时锁定访问';
$string['settings:offtopic_lockout_duration'] = '锁定时长（分钟）';
$string['settings:offtopic_lockout_duration_desc'] = '学生超出偏题限制后失去 AI 辅导访问权限的时长（分钟）。默认：30 分钟。';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = '学习规划与提醒';
$string['settings:studyplan_heading_desc'] = '配置学习规划功能和提醒通知。';
$string['settings:studyplan_enabled'] = '启用学习规划';
$string['settings:studyplan_enabled_desc'] = '允许 AI 辅导根据学生的可用时间帮助其制定个性化学习计划。';
$string['settings:reminders_email_enabled'] = '启用电子邮件提醒';
$string['settings:reminders_email_enabled_desc'] = '允许学生通过电子邮件订阅学习提醒。';
$string['settings:reminders_whatsapp_enabled'] = '启用 WhatsApp 提醒';
$string['settings:reminders_whatsapp_enabled_desc'] = '允许学生通过 WhatsApp 订阅学习提醒（需要 WhatsApp API 配置）。';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = '发送 WhatsApp 消息的 API 端点（例如 Twilio、MessageBird）。必须接受包含"to"、"from"和"body"字段的 JSON 正文 POST 请求。';
$string['settings:whatsapp_api_token'] = 'WhatsApp API 令牌';
$string['settings:whatsapp_api_token_desc'] = 'WhatsApp API 的身份验证令牌。';
$string['settings:whatsapp_from_number'] = 'WhatsApp 发件号码';
$string['settings:whatsapp_from_number_desc'] = '发送 WhatsApp 消息的电话号码（含国家代码，例如 +14155238886）。';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp 屏蔽国家';
$string['settings:whatsapp_blocked_countries_desc'] = '因当地法规不允许发送 WhatsApp 提醒的国家的 ISO 3166-1 alpha-2 国家代码（逗号分隔，例如"CN,IR,KP"）。';

// Reminder messages.
$string['reminder:email_subject'] = '学习提醒：{$a}';
$string['reminder:email_body'] = '您好 {$a->firstname}，

这是您关于"{$a->coursename}"的学习提醒。

{$a->message}

您的学习计划建议每周为本课程投入 {$a->hours_per_week} 小时。

继续保持，加油！

---
如需取消接收提醒，请点击此处：{$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = '{$a->coursename} 的学习提醒：{$a->message}（退订：{$a->unsubscribe_url}）';
$string['reminder:study_tip_prefix'] = '今日学习重点：';

// Unsubscribe page.
$string['unsubscribe:title'] = '退订学习提醒';
$string['unsubscribe:success'] = '您已成功退订本课程的学习提醒。';
$string['unsubscribe:already'] = '您已经退订了这些提醒。';
$string['unsubscribe:invalid'] = '退订链接无效或已过期。';
$string['unsubscribe:resubscribe'] = '改变主意了？您可以通过 AI 辅导聊天重新启用提醒。';

// Scheduled task.
$string['task:send_reminders'] = '发送 AI 辅导学习提醒';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = '存储学生的学习计划。';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = '拥有该学习计划的用户 ID。';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = '该学习计划所属的课程。';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = '学生计划每周学习的小时数。';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'JSON 格式的学习计划详情。';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = '存储学习提醒偏好和订阅信息。';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = '订阅提醒的用户 ID。';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = '提醒渠道（电子邮件或 WhatsApp）。';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = '接收提醒的电子邮件地址或电话号码。';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = '用于法规合规的用户国家代码。';

// Analytics dashboard.
$string['analytics:title'] = 'AI 辅导分析';
$string['analytics:overview'] = '概览';
$string['analytics:total_conversations'] = '会话总数';
$string['analytics:total_messages'] = '消息总数';
$string['analytics:active_students'] = '活跃学生';
$string['analytics:avg_messages_per_student'] = '每位学生平均消息数';
$string['analytics:offtopic_rate'] = '偏题率';
$string['analytics:escalation_count'] = '已升级至支持';
$string['analytics:studyplan_adoption'] = '拥有学习计划的学生';
$string['analytics:usage_trends'] = '使用趋势';
$string['analytics:daily_messages'] = '每日消息量';
$string['analytics:hotspots'] = '课程热点';
$string['analytics:hotspots_desc'] = '学生问题中最常被引用的课程章节。较高的计数可能表示学生在这些区域需要更多支持。';
$string['analytics:section'] = '章节';
$string['analytics:mention_count'] = '提及次数';
$string['analytics:common_prompts'] = '常见提问模式';
$string['analytics:common_prompts_desc'] = '学生频繁出现的问题模式。审查这些内容以识别课程内容中的系统性差距。';
$string['analytics:prompt_pattern'] = '模式';
$string['analytics:frequency'] = '频率';
$string['analytics:recent_activity'] = '近期活动';
$string['analytics:no_data'] = '暂无分析数据。一旦学生开始使用 AI 辅导，数据将在此显示。';
$string['analytics:timerange'] = '时间范围';
$string['analytics:last_7_days'] = '最近 7 天';
$string['analytics:last_30_days'] = '最近 30 天';
$string['analytics:all_time'] = '全部时间';
$string['analytics:export'] = '导出数据';
$string['analytics:provider_comparison'] = 'AI 提供商对比';
$string['analytics:provider_comparison_desc'] = '比较本课程中使用的各 AI 提供商的表现。';
$string['analytics:provider'] = '提供商';
$string['analytics:response_count'] = '回复数';
$string['analytics:avg_response_length'] = '平均回复长度';
$string['analytics:total_tokens'] = '总 token 数';
$string['analytics:avg_tokens'] = '平均 token 数 / 回复';

// User settings.
$string['usersettings:title'] = 'AI 课程助手 - 您的数据';
$string['usersettings:intro'] = '管理您的 AI 辅导聊天数据和隐私设置';
$string['usersettings:privacy_info'] = '您与 AI 辅导的会话将被存储，以便在整个课程中为您提供持续支持。您对这些数据拥有完全控制权，可以随时删除。';
$string['usersettings:usage_stats'] = '您的使用统计';
$string['usersettings:total_messages'] = '消息总数';
$string['usersettings:total_conversations'] = '会话数';
$string['usersettings:messages'] = '消息';
$string['usersettings:last_activity'] = '最后活动时间';
$string['usersettings:delete_course_data'] = '删除课程数据';
$string['usersettings:no_data'] = '您尚未使用 AI 辅导。开始聊天后，您的使用数据将显示在此处。';
$string['usersettings:delete_all_title'] = '删除您的所有数据';
$string['usersettings:delete_all_warning'] = '这将永久删除您在所有课程中的 AI 辅导会话。此操作无法撤销。';
$string['usersettings:delete_all_button'] = '删除我的所有数据';
$string['usersettings:confirm_delete_course'] = '您确定要永久删除课程"{$a}"中的所有 AI 辅导数据吗？此操作无法撤销。';
$string['usersettings:confirm_delete_all'] = '您确定要永久删除您在所有课程中的所有 AI 辅导数据吗？此操作无法撤销。';
$string['usersettings:data_deleted'] = '您的数据已被删除。';
