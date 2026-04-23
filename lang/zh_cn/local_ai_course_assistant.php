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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = '新课程的默认设置';
$string['settings:default_course_mode_desc'] = '控制在未做出每个课程选择时SOLA是否显示在课程上。新安装默认设置为"默认禁用"，以便管理员可以从Analytics页面或Course AI Settings页面逐个课程启用。';
$string['settings:default_course_mode_per_course'] = '默认禁用（按课程启用）';
$string['settings:default_course_mode_all'] = '在所有课程上启用';
$string['settings:auto_open'] = '首次访问时自动打开';
$string['settings:auto_open_desc'] = '启用后,学生首次进入每门课程时,SOLA抽屉会自动打开。同一课程中后续的页面加载不会再次打开抽屉 — 状态通过localStorage按课程在学生的浏览器中跟踪。适用于桌面和移动端。可以从Course AI Settings页面按课程覆盖此设置。';
$string['settings:comparison_providers'] = '对比供应商 (LLM 选择器)';
$string['settings:comparison_providers_desc'] = '在小组件内的 LLM 选择器中添加额外的 AI 供应商，以便管理员可以跨供应商比较回复。使用下面的表格添加行。温度列是可选的（留空以使用全局温度）。存储格式: provider_id|api_key|model1,model2|temperature。上面配置的主要供应商始终自动包含在内。只有具有管理权限的管理员才能看到选择器；学生永远看不到。有效的 provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = '默认 AI 供应商';
$string['settings:provider_desc'] = '选择用于聊天补全的AI提供商。选择"Moodle AI (core_ai subsystem)"通过Moodle的内置AI配置（Site admin > AI）路由请求；在该模式下，下面的API密钥、模型和基础URL字段将被忽略。通过core_ai无法使用Streaming、工具使用和prompt caching——响应作为单个块交付。为获得最佳学生体验，请使用直接提供商。';
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
$string['settings:avatar_saylor'] = '{$a} 徽标（默认）';
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
$string['coursesettings:sola_enabled'] = '此课程上的SOLA';
$string['coursesettings:sola_enabled_toggle'] = '在此课程上显示SOLA小部件';
$string['coursesettings:sola_enabled_desc'] = '控制SOLA聊天小部件是否显示在此课程上。全站默认值在插件设置的General > Default for new courses下设置。';
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
$string['chat:clear'] = '清除屏幕';
$string['chat:clear_confirm'] = '清除可见消息？您的完整聊天历史记录仍会保存，并可通过重新打开小部件重新加载。';
$string['chat:copy'] = '复制会话';
$string['chat:copied'] = '会话已复制到剪贴板';
$string['chat:copy_failed'] = '复制会话失败';
$string['chat:thinking'] = '正在思考...';
$string['chat:error'] = '很抱歉，出现了一些问题。请重试。';
$string['chat:error_auth'] = '身份验证错误。请联系您的管理员。';
$string['chat:error_ratelimit'] = '请求过多。请稍等片刻后重试。';
$string['chat:error_unavailable'] = 'AI 服务暂时不可用。请稍后再试。';
$string['chat:error_notconfigured'] = 'AI 辅导助手尚未配置。请联系您的管理员。';
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

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = '你好，{$a}！我是SOLA。今天我能帮你什么？';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = '打开 SOLA';
$string['chat:change_avatar'] = '更换头像';

$string['chat:quiz'] = '参加练习测验';
$string['chat:quiz_setup_title'] = '练习测验';
$string['chat:quiz_questions'] = '题目数量';
$string['chat:quiz_topic'] = '主题';
$string['chat:quiz_topic_guided'] = 'AI 引导（基于你的学习进度）';
$string['chat:quiz_topic_default'] = '当前课程内容';
$string['chat:quiz_topic_custom'] = '自定义主题…';
$string['chat:quiz_custom_placeholder'] = '输入一个主题或问题...';
$string['chat:quiz_start'] = '开始测验';
$string['chat:quiz_cancel'] = '取消';
$string['chat:quiz_loading'] = '正在生成测验…';
$string['chat:quiz_error'] = '无法生成测验，请重试。';
$string['chat:quiz_correct'] = '正确！';
$string['chat:quiz_wrong'] = '错误。';
$string['chat:quiz_next'] = '下一题';
$string['chat:quiz_finish'] = '查看结果';
$string['chat:quiz_score'] = '测验完成！你答对了 {$a->score} / {$a->total} 题。';
$string['chat:quiz_summary'] = '我刚完成了关于"{$a->topic}"的 {$a->total} 题练习测验，得分 {$a->score}/{$a->total}。';
$string['chat:quiz_topic_objectives'] = '学习目标';
$string['chat:quiz_topic_modules'] = '课程主题';
$string['chat:quiz_subtopic_select'] = '选择具体项目…';
$string['chat:quiz_topic_sections'] = '课程章节';
$string['chat:quiz_score_great'] = '出色！你真的掌握了这些内容。';
$string['chat:quiz_score_good'] = '不错！继续复习以加深理解。';
$string['chat:quiz_score_practice'] = '继续练习——先复习相关课程材料，然后重新参加测验。';
$string['chat:quiz_review_heading'] = '复习';
$string['chat:quiz_retake'] = '重新测验';
$string['chat:quiz_exit'] = '退出测验';
$string['chat:quiz_your_answer'] = '你的答案';
$string['chat:quiz_correct_answer'] = '正确答案';

$string['chat:starters_label'] = '对话开始建议';
$string['chat:starter_quiz'] = '测验我这个';
$string['chat:starter_explain'] = '解释这个';
$string['chat:starter_key_concepts'] = '关键概念';
$string['chat:starter_study_plan'] = '学习计划';
$string['chat:starter_help_me'] = 'AI 帮助';
$string['chat:starter_ai_project_coach'] = 'AI项目教练';
$string['chat:starter_ell_practice'] = '对话练习';
$string['chat:starter_ell_pronunciation'] = 'ELL 发音练习';
$string['chat:starter_ai_coach'] = 'AI 辅导';
$string['chat:starter_speak'] = '朗读开始语';

$string['chat:reset'] = '重新开始';

$string['chat:topic_picker_title'] = '你想专注于什么？';
$string['chat:topic_picker_title_help'] = '你需要哪方面的帮助？';
$string['chat:topic_picker_title_explain'] = '你想让我解释什么？';
$string['chat:topic_picker_title_study'] = '你想专注于哪个领域？';
$string['chat:topic_start'] = '继续';

$string['chat:fullscreen'] = '全屏';
$string['chat:exitfullscreen'] = '退出全屏';

$string['chat:language'] = '更改语言';
$string['chat:settings_panel'] = '设置';
$string['chat:settings_language'] = '语言';
$string['chat:settings_avatar'] = '头像';
$string['chat:settings_voice'] = '语音';
$string['chat:settings_voice_admin'] = '语音设置在网站管理面板中管理。';

$string['chat:voice_mode'] = '语音模式';
$string['chat:voice_end'] = '结束语音会话';
$string['chat:voice_connecting'] = '正在连接...';
$string['chat:voice_listening'] = '正在聆听...';
$string['chat:voice_speaking'] = 'SOLA 正在说话...';
$string['chat:voice_idle'] = '就绪';
$string['chat:voice_error'] = '语音连接失败，请检查您的设置。';
$string['chat:quiz_locked'] = '测验期间 SOLA 已暂停，以维护学术诚信。祝你好运！';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = '笔记';

// History panel.
$string['chat:history_title'] = '笔记与对话历史';
$string['task:send_inactivity_reminders'] = '发送每周不活跃提醒邮件';
$string['messageprovider:study_notes'] = '学习会话笔记';
$string['task:send_inactivity_reminders'] = '发送每周不活跃提醒邮件';
$string['task:run_meta_ai_query'] = '运行预定的 学习雷达 分析查询';
$string['messageprovider:study_notes'] = '学习课程笔记';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / 前端分发';
$string['settings:cdn_heading_desc'] = '从外部 CDN 提供 SOLA 前端资源（JS/CSS），而不是从 Moodle 文件系统提供。这允许在不升级插件的情况下更新前端。将 CDN URL 留空以使用本地插件文件。';
$string['settings:cdn_url'] = 'CDN 基础 URL';
$string['settings:cdn_url_desc'] = '托管 sola.min.js 和 sola.min.css 的基础 URL。示例：https://your-org.github.io/sola-cdn。留空以使用本地插件文件。';
$string['settings:cdn_version'] = 'CDN 资源版本';
$string['settings:cdn_version_desc'] = '附加到 CDN URL 的版本字符串，用于 cache busting。每次 CDN 部署后更新（例如 3.2.4 或 commit hash）。';

// Analytics dashboard.
$string['analytics:tab_overall'] = '总体使用情况';
$string['analytics:tab_bycourse'] = '按课程';
$string['analytics:tab_comparison'] = 'AI用户与非用户';
$string['analytics:tab_byunit'] = '按单元';
$string['analytics:tab_usagetypes'] = '使用类型';
$string['analytics:tab_themes'] = '主题';
$string['analytics:tab_feedback'] = 'AI反馈';
$string['analytics:total_students'] = '学生总数';
$string['analytics:active_users'] = '活跃AI用户';
$string['analytics:msgs_per_student'] = '每位学生的消息数';
$string['analytics:avg_session'] = '平均会话时长';
$string['analytics:return_rate'] = '回访率';
$string['analytics:total_sessions'] = '总会话数';
$string['analytics:thumbs_up'] = '点赞';
$string['analytics:thumbs_down'] = '踩';
$string['analytics:hallucination_flags'] = '不准确信息标记';
$string['analytics:msgs_to_resolution'] = '解决问题所需消息数';
$string['analytics:helpful'] = '有帮助';
$string['analytics:not_helpful'] = '没有帮助';
$string['analytics:flag_hallucination'] = '此回答包含不准确的信息';
$string['analytics:submit_rating'] = '提交';
$string['analytics:thanks_feedback'] = '感谢您的反馈';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = '解释此页面';
$string['chat:starter_ask_anything'] = '问任何问题';
$string['chat:starter_review_practice'] = '复习与练习';
$string['chat:history_saved_subtitle'] = '已保存的回复将在此课程期间保留在此设备上。';
$string['chat:history_saved_empty'] = '保存AI回复以在此处查看。';
$string['chat:history_views_label'] = '历史视图';
$string['chat:history_view_saved'] = '已保存';
$string['chat:history_view_recent'] = '历史';
$string['chat:debug_refresh'] = '刷新';
$string['chat:debug_copy_all'] = '全部复制';
$string['chat:debug_close'] = '关闭';
$string['chat:language_switch'] = '切换语言';
$string['chat:language_dismiss'] = '忽略语言建议';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = '选择LLM提供商';
$string['chat:llm_model_label'] = '模型';
$string['chat:llm_model_select'] = '选择LLM模型';
$string['chat:footer_usertesting'] = '可用性测试';
$string['chat:footer_feedback'] = '反馈';
$string['chat:voice_panel_title'] = '与{$a}对话(实验性)';

// Additional translated strings.
$string['chat:debug_context'] = '上下文调试';
$string['chat:debug_context_browser'] = '浏览器快照';
$string['chat:debug_context_copy'] = '复制';
$string['chat:debug_context_prompt'] = '服务器响应';
$string['chat:debug_context_request'] = '最近的SSE请求';
$string['chat:debug_context_toggle'] = '切换调试检查器';
$string['chat:history_empty'] = '暂无对话。';
$string['chat:history_refresh'] = '刷新';
$string['chat:history_subtitle'] = '您的最近消息。';
$string['chat:starter_explain_prompt'] = '解释最重要的概念?';
$string['chat:starter_help_lesson'] = '解释这个';
$string['chat:starter_help_lesson_prompt'] = '帮我理解课程内容。总结关键概念。';
$string['chat:starter_prompt_coach'] = 'AI提示词教练';
$string['chat:starter_quick_study'] = '快速学习';
$string['chat:starter_study_plan_prompt'] = '我想规划学习。请问：(1) 今天目标，(2) 有多少时间。更新现有计划。';
$string['chat:voice_copy'] = '与学习助手进行语音对话。';
$string['chat:voice_ready'] = '准备就绪';
$string['chat:voice_start'] = '开始';
$string['chat:voice_title'] = '与SOLA对话';
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
$string['mobile_chip_concepts'] = '关键概念';
$string['mobile_chip_quiz'] = '测验';
$string['mobile_chip_studyplan'] = '学习计划';
$string['mobile_clear'] = '清除历史';
$string['mobile_disabled'] = 'SOLA不适用于此课程。';
$string['mobile_placeholder'] = '提问...';
$string['mobile_welcome'] = '你好，{$a}！';
$string['mobile_welcome_sub'] = '我是SOLA，您的学习助手。今天能帮您什么？';
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
$string['rubric:done'] = '完成';
$string['rubric:encourage_high'] = '太棒了！继续保持！';
$string['rubric:encourage_low'] = '好的开始！坚持练习会有帮助。';
$string['rubric:encourage_mid'] = '不错的努力！继续练习提高。';
$string['rubric:overall'] = '总体';
$string['rubric:practice_again'] = '再次练习';
$string['rubric:score_title_conversation'] = '会话练习得分';
$string['rubric:score_title_pronunciation'] = '发音练习得分';
$string['rubric:scoring'] = '正在评估练习...';
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
$string['demo:title'] = '测试环境';
$string['demo:heading'] = '测试环境';
$string['demo:intro'] = '此页面创建一个<strong>对学生隐藏</strong>（visible=0）的测试课程，并使用假学生、AI 对话、评分和反馈填充它。对于预览 Analytics Dashboard 或在不影响任何真实注册学生的情况下验证插件更改非常有用。';
$string['demo:step1'] = 'Step 1：测试课程';
$string['demo:step2'] = 'Step 2：填充假学生和 AI 聊天';
$string['demo:course_exists'] = '测试课程已存在：<strong>{$a->fullname}</strong>（简称 <code>{$a->shortname}</code>，id {$a->id}）';
$string['demo:badge_hidden'] = '隐藏';
$string['demo:badge_visible'] = '对学生可见';
$string['demo:no_course'] = '未找到测试课程。点击下面创建一个。';
$string['demo:create_btn'] = '创建隐藏的测试课程';
$string['demo:open_course'] = '打开课程 &rarr;';
$string['demo:seed_intro'] = '创建 demo_student_001、demo_student_002、... 并将他们注册到测试课程中，然后插入合成的对话、消息、评分和反馈。再次运行以添加更多数据，或勾选「先清除」以重新开始。';
$string['demo:users_label'] = '用户';
$string['demo:weeks_label'] = '周';
$string['demo:clear_label'] = '先清除现有的 demo_* 用户';
$string['demo:seed_btn'] = '填充学生和聊天';
$string['demo:view_analytics'] = '查看此课程的 Analytics &rarr;';
$string['demo:footer'] = '此处创建的数据位于标准 Moodle 用户 / 注册表以及插件自己的对话表中。所有假用户的用户名都以 <code>demo_student_</code> 开头，因此很容易过滤或删除。要删除它们，请再次运行 seed 步骤并勾选「先清除现有的 demo_* 用户」。';
$string['demo:course_fullname'] = 'SOLA 测试课程（隐藏）';
$string['demo:notify_created'] = '测试课程已就绪：{$a->fullname}（id {$a->id}）。';
$string['demo:notify_create_fail'] = '创建课程失败：{$a}';
$string['demo:notify_seeded'] = '已填充：{$a->users} 个用户、{$a->conversations} 个对话、{$a->messages} 条消息、{$a->ratings} 个评分、{$a->feedback} 条反馈。';
$string['demo:notify_seed_fail'] = '填充数据失败：{$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Token 成本和 Analytics &rarr;';
$string['toc:testing'] = '测试环境 &rarr;';
$string['toc:back_to_course'] = '&larr; 返回 {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = '未找到 pdftotext 二进制文件；已禁用 PDF 提取。';
$string['rag:pdftotext_available'] = '已在 {$a} 检测到 pdftotext。';
$string['rag:docx_unavailable'] = 'PHP ZipArchive 扩展不可用；已禁用 DOCX 提取。';
$string['rag:h5p_unavailable'] = '无法读取 H5P 内容；跳过。';
$string['rag:scorm_too_large'] = 'SCORM 包超出配置的大小限制（{$a} MB）；跳过。';
$string['rag:scorm_unzip_failed'] = '无法解压 SCORM 包；跳过。';
$string['rag:transcript_fetch_failed'] = '无法从 {$a} 获取文字记录。';
$string['rag:transcript_cf_challenge'] = '文字记录 URL 被 Cloudflare 挑战阻止：{$a}。';
$string['rag:embed_detected'] = '检测到嵌入媒体：{$a}';
$string['rag:embed_transcript_attached'] = '已为 {$a} 附加文字记录';

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
