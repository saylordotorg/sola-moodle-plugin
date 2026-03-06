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
 * Language strings for local_ai_course_assistant — Russian (Русский).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'ИИ-ассистент курса';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Хранит чат-беседы ИИ-репетитора для каждого пользователя и курса.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Идентификатор пользователя, которому принадлежит беседа.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Идентификатор курса, которому принадлежит беседа.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Заголовок беседы.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Время создания беседы.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Время последнего изменения беседы.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Хранит отдельные сообщения в чат-беседах ИИ-репетитора.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Идентификатор пользователя, отправившего сообщение.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Идентификатор курса, которому принадлежит сообщение.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Роль отправителя сообщения (пользователь или ассистент).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Содержимое сообщения.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Количество токенов, использованных для сообщения.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Время создания сообщения.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Использовать чат ИИ-репетитора';
$string['ai_course_assistant:viewanalytics'] = 'Просматривать аналитику чата ИИ-репетитора';
$string['ai_course_assistant:manage'] = 'Управлять настройками чата ИИ-репетитора (роль администратора)';

// Settings.
$string['settings:enabled'] = 'Включить ИИ-ассистент курса';
$string['settings:enabled_desc'] = 'Включить или отключить виджет ИИ-ассистента курса на страницах курсов.';
$string['settings:provider'] = 'Провайдер ИИ';
$string['settings:provider_desc'] = 'Выберите провайдера ИИ для завершения чата.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (локальный)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Пользовательский (совместимый с OpenAI)';
$string['settings:apikey'] = 'Ключ API';
$string['settings:apikey_desc'] = 'Ключ API для выбранного провайдера. Для Ollama не требуется.';
$string['settings:model'] = 'Название модели';
$string['settings:model_desc'] = 'Используемая модель. Значение по умолчанию зависит от провайдера (например, claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'Базовый URL API';
$string['settings:apibaseurl_desc'] = 'Базовый URL для API. Заполняется автоматически в зависимости от провайдера, но может быть изменён. Оставьте пустым для использования значения по умолчанию провайдера.';
$string['settings:systemprompt'] = 'Шаблон системного запроса';
$string['settings:systemprompt_desc'] = 'Системный запрос, отправляемый ИИ. Используйте заполнители: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Вы — полезный ИИ-репетитор для курса «{{coursename}}». Роль студента: {{userrole}}.

Темы курса:
{{coursetopics}}

Помогайте студенту усваивать учебный материал. Будьте поощряющим, понятным и педагогически грамотным.';
$string['settings:temperature'] = 'Температура';
$string['settings:temperature_desc'] = 'Управляет случайностью. Меньшие значения дают более сфокусированные результаты, большие — более творческие. Диапазон: от 0,0 до 2,0.';
$string['settings:maxhistory'] = 'Максимальная история беседы';
$string['settings:maxhistory_desc'] = 'Максимальное количество пар сообщений, включаемых в запросы API. Более старые сообщения обрезаются.';
$string['settings:avatar'] = 'Аватар чата';
$string['settings:avatar_desc'] = 'Выберите значок аватара для кнопки виджета чата.';
$string['settings:avatar_saylor'] = 'Логотип Saylor Academy (по умолчанию)';
$string['settings:position'] = 'Положение виджета';
$string['settings:position_desc'] = 'Положение виджета чата на странице.';
$string['settings:position_br'] = 'Нижний правый угол';
$string['settings:position_bl'] = 'Нижний левый угол';
$string['settings:position_tr'] = 'Верхний правый угол';
$string['settings:position_tl'] = 'Верхний левый угол';
$string['chat:settings'] = 'Настройки плагина';
$string['analytics:viewdashboard'] = 'Просмотреть панель аналитики';

// Course settings.
$string['coursesettings:title'] = 'Настройки ИИ для курса';
$string['coursesettings:enabled'] = 'Включить переопределения для курса';
$string['coursesettings:enabled_desc'] = 'При включении приведённые ниже настройки переопределяют глобальную конфигурацию провайдера ИИ только для данного курса. Оставьте поля пустыми для наследования глобального значения.';
$string['coursesettings:using_global'] = 'Используется глобальная настройка';
$string['coursesettings:saved'] = 'Настройки ИИ курса сохранены.';
$string['coursesettings:global_settings_link'] = 'Глобальные настройки ИИ';

// Language detection and preference.
$string['lang:switch'] = 'Да, переключить';
$string['lang:dismiss'] = 'Нет, спасибо';
$string['lang:change'] = 'Изменить язык';
$string['lang:english'] = 'Английский';

// Chat widget.
$string['chat:title'] = 'ИИ-репетитор';
$string['chat:placeholder'] = 'Задайте вопрос...';
$string['chat:send'] = 'Отправить';
$string['chat:close'] = 'Закрыть чат';
$string['chat:open'] = 'Открыть чат ИИ-репетитора';
$string['chat:clear'] = 'Очистить историю';
$string['chat:clear_confirm'] = 'Вы уверены, что хотите очистить историю чата для этого курса?';
$string['chat:copy'] = 'Скопировать беседу';
$string['chat:copied'] = 'Беседа скопирована в буфер обмена';
$string['chat:copy_failed'] = 'Не удалось скопировать беседу';
$string['chat:greeting'] = 'Привет! Я ваш ИИ-репетитор по этому курсу. Чем могу помочь сегодня?';
$string['chat:thinking'] = 'Думаю...';
$string['chat:error'] = 'Извините, что-то пошло не так. Попробуйте ещё раз.';
$string['chat:error_auth'] = 'Ошибка аутентификации. Обратитесь к администратору.';
$string['chat:error_ratelimit'] = 'Слишком много запросов. Пожалуйста, подождите немного и попробуйте снова.';
$string['chat:error_unavailable'] = 'Сервис ИИ временно недоступен. Попробуйте позже.';
$string['chat:error_notconfigured'] = 'ИИ-репетитор ещё не настроен. Обратитесь к администратору.';
$string['chat:expand'] = 'Развернуть чат';
$string['chat:collapse'] = 'Свернуть чат';
$string['chat:mic'] = 'Задать вопрос голосом';
$string['chat:mic_error'] = 'Ошибка микрофона. Проверьте разрешения браузера.';
$string['chat:mic_unsupported'] = 'Голосовой ввод не поддерживается в этом браузере.';
$string['chat:newline_hint'] = 'Shift+Enter для новой строки';
$string['chat:you'] = 'Вы';
$string['chat:assistant'] = 'ИИ-репетитор';
$string['chat:history_loaded'] = 'Предыдущая беседа загружена.';
$string['chat:history_cleared'] = 'История чата очищена.';
$string['chat:offtopic_warning'] = 'Похоже, ваш вопрос не связан с этим курсом. Пожалуйста, придерживайтесь темы, чтобы я мог помочь вам лучше!';
$string['chat:offtopic_ended'] = 'Ваш доступ к ИИ-репетитору временно приостановлен на {$a} минут, так как беседа слишком много раз выходила за пределы темы. Используйте это время для повторения учебных материалов, и попробуйте снова позже.';
$string['chat:offtopic_locked'] = 'Ваш доступ к ИИ-репетитору временно приостановлен. Повторите попытку через {$a} минут. Когда вернётесь, пожалуйста, задавайте только вопросы по курсу.';
$string['chat:escalated_to_support'] = 'Я не смог полностью ответить на ваш вопрос, поэтому создал для вас заявку в службу поддержки. Сотрудник службы поддержки свяжется с вами. Номер вашей заявки: {$a}';
$string['chat:studyplan_intro'] = 'Я могу помочь вам составить план обучения для этого курса! Просто скажите мне, сколько часов в неделю вы можете посвятить учёбе, и я помогу вам выстроить структурированный план.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'Часто задаваемые вопросы и поддержка';
$string['settings:faq_heading_desc'] = 'Настройте централизованную базу FAQ и интеграцию с тикетами поддержки Zendesk.';
$string['settings:faq_content'] = 'Содержимое FAQ';
$string['settings:faq_content_desc'] = 'Введите записи FAQ (по одной на строку в формате: В: вопрос | О: ответ). Они будут предоставлены ИИ для ответа на распространённые вопросы поддержки.';
$string['settings:zendesk_enabled'] = 'Включить эскалацию в Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Когда ИИ не может решить вопрос поддержки, автоматически создавать тикет в Zendesk с кратким изложением беседы.';
$string['settings:zendesk_subdomain'] = 'Поддомен Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Ваш поддомен Zendesk (например, «mycompany» для mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'Email для API Zendesk';
$string['settings:zendesk_email_desc'] = 'Адрес электронной почты пользователя Zendesk для аутентификации API (с суффиксом /token).';
$string['settings:zendesk_token'] = 'Токен API Zendesk';
$string['settings:zendesk_token_desc'] = 'Токен API для аутентификации в Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Обнаружение нерелевантных тем';
$string['settings:offtopic_heading_desc'] = 'Настройте, как чат обрабатывает беседы не по теме.';
$string['settings:offtopic_enabled'] = 'Включить обнаружение нерелевантных тем';
$string['settings:offtopic_enabled_desc'] = 'Поручить ИИ обнаруживать и перенаправлять беседы не по теме.';
$string['settings:offtopic_max'] = 'Максимальное количество нерелевантных сообщений';
$string['settings:offtopic_max_desc'] = 'Количество последовательных сообщений не по теме перед принятием мер.';
$string['settings:offtopic_action'] = 'Действие при нерелевантной теме';
$string['settings:offtopic_action_desc'] = 'Что делать при достижении лимита нерелевантных сообщений.';
$string['settings:offtopic_action_warn'] = 'Предупредить и перенаправить';
$string['settings:offtopic_action_end'] = 'Временно заблокировать доступ';
$string['settings:offtopic_lockout_duration'] = 'Длительность блокировки (минуты)';
$string['settings:offtopic_lockout_duration_desc'] = 'Как долго (в минутах) студент лишается доступа к ИИ-репетитору после превышения лимита нерелевантных сообщений. По умолчанию: 30 минут.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Планирование обучения и напоминания';
$string['settings:studyplan_heading_desc'] = 'Настройте функции планирования обучения и уведомлений-напоминаний.';
$string['settings:studyplan_enabled'] = 'Включить планирование обучения';
$string['settings:studyplan_enabled_desc'] = 'Разрешить ИИ-репетитору помогать студентам составлять персонализированные учебные планы на основе их доступного времени.';
$string['settings:reminders_email_enabled'] = 'Включить напоминания по email';
$string['settings:reminders_email_enabled_desc'] = 'Разрешить студентам подписываться на напоминания об учёбе по электронной почте.';
$string['settings:reminders_whatsapp_enabled'] = 'Включить напоминания через WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Разрешить студентам подписываться на напоминания об учёбе через WhatsApp (требуется настройка API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Конечная точка API для отправки сообщений WhatsApp (например, Twilio, MessageBird). Должна принимать POST с телом JSON, содержащим поля «to», «from» и «body».';
$string['settings:whatsapp_api_token'] = 'Токен API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Токен аутентификации для API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Номер отправителя WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Номер телефона для отправки сообщений WhatsApp (с кодом страны, например +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Заблокированные страны для WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Коды стран ISO 3166-1 alpha-2, разделённые запятыми, в которых напоминания через WhatsApp не разрешены местными нормативными актами (например, «CN,IR,KP»).';

// Reminder messages.
$string['reminder:email_subject'] = 'Напоминание об учёбе: {$a}';
$string['reminder:email_body'] = 'Здравствуйте, {$a->firstname}!

Это ваше напоминание об учёбе для курса «{$a->coursename}».

{$a->message}

Ваш учебный план предполагает {$a->hours_per_week} часов в неделю для этого курса.

Продолжайте в том же духе!

---
Чтобы прекратить получать эти напоминания, нажмите здесь: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Напоминание об учёбе для {$a->coursename}: {$a->message} (Отписаться: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Сегодняшний фокус обучения: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Отписаться от напоминаний об учёбе';
$string['unsubscribe:success'] = 'Вы успешно отписались от напоминаний об учёбе для этого курса.';
$string['unsubscribe:already'] = 'Вы уже отписались от этих напоминаний.';
$string['unsubscribe:invalid'] = 'Недействительная или устаревшая ссылка для отписки.';
$string['unsubscribe:resubscribe'] = 'Передумали? Вы можете снова включить напоминания через чат ИИ-репетитора.';

// Scheduled task.
$string['task:send_reminders'] = 'Отправлять напоминания об учёбе от ИИ-репетитора';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Хранит учебные планы студентов.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Идентификатор пользователя, которому принадлежит учебный план.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Курс, которому принадлежит учебный план.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Количество часов в неделю, которые студент планирует учиться.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Детали учебного плана в формате JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Хранит предпочтения и подписки на напоминания об учёбе.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Идентификатор пользователя, подписанного на напоминания.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Канал напоминаний (email или whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Адрес электронной почты или номер телефона для напоминаний.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Код страны пользователя для соответствия нормативным требованиям.';

// Analytics dashboard.
$string['analytics:title'] = 'Аналитика ИИ-репетитора';
$string['analytics:overview'] = 'Обзор';
$string['analytics:total_conversations'] = 'Всего бесед';
$string['analytics:total_messages'] = 'Всего сообщений';
$string['analytics:active_students'] = 'Активные студенты';
$string['analytics:avg_messages_per_student'] = 'Среднее количество сообщений на студента';
$string['analytics:offtopic_rate'] = 'Доля нерелевантных сообщений';
$string['analytics:escalation_count'] = 'Эскалировано в поддержку';
$string['analytics:studyplan_adoption'] = 'Студенты с учебными планами';
$string['analytics:usage_trends'] = 'Тенденции использования';
$string['analytics:daily_messages'] = 'Ежедневный объём сообщений';
$string['analytics:hotspots'] = 'Проблемные разделы курса';
$string['analytics:hotspots_desc'] = 'Разделы курса, наиболее часто упоминаемые в вопросах студентов. Высокие показатели могут указывать на области, где студентам нужна дополнительная поддержка.';
$string['analytics:section'] = 'Раздел';
$string['analytics:mention_count'] = 'Упоминания';
$string['analytics:common_prompts'] = 'Распространённые шаблоны запросов';
$string['analytics:common_prompts_desc'] = 'Часто повторяющиеся шаблоны вопросов от студентов. Проанализируйте их для выявления системных пробелов в содержании курса.';
$string['analytics:prompt_pattern'] = 'Шаблон';
$string['analytics:frequency'] = 'Частота';
$string['analytics:recent_activity'] = 'Последняя активность';
$string['analytics:no_data'] = 'Данные аналитики пока недоступны. Они появятся, когда студенты начнут пользоваться ИИ-репетитором.';
$string['analytics:timerange'] = 'Временной диапазон';
$string['analytics:last_7_days'] = 'Последние 7 дней';
$string['analytics:last_30_days'] = 'Последние 30 дней';
$string['analytics:all_time'] = 'За всё время';
$string['analytics:export'] = 'Экспорт данных';
$string['analytics:provider_comparison'] = 'Сравнение провайдеров ИИ';
$string['analytics:provider_comparison_desc'] = 'Сравните производительность провайдеров ИИ, используемых в этом курсе.';
$string['analytics:provider'] = 'Провайдер';
$string['analytics:response_count'] = 'Ответы';
$string['analytics:avg_response_length'] = 'Средняя длина ответа';
$string['analytics:total_tokens'] = 'Всего токенов';
$string['analytics:avg_tokens'] = 'Среднее кол-во токенов / ответ';

// User settings.
$string['usersettings:title'] = 'ИИ-ассистент курса — Ваши данные';
$string['usersettings:intro'] = 'Управляйте данными чата с ИИ-репетитором и настройками конфиденциальности';
$string['usersettings:privacy_info'] = 'Ваши беседы с ИИ-репетитором сохраняются для обеспечения непрерывной поддержки на протяжении всего курса. Вы имеете полный контроль над этими данными и можете удалить их в любое время.';
$string['usersettings:usage_stats'] = 'Ваша статистика использования';
$string['usersettings:total_messages'] = 'Всего сообщений';
$string['usersettings:total_conversations'] = 'Бесед';
$string['usersettings:messages'] = 'Сообщения';
$string['usersettings:last_activity'] = 'Последняя активность';
$string['usersettings:delete_course_data'] = 'Удалить данные курса';
$string['usersettings:no_data'] = 'Вы ещё не использовали ИИ-репетитора. Ваши данные об использовании появятся здесь после начала общения.';
$string['usersettings:delete_all_title'] = 'Удалить все ваши данные';
$string['usersettings:delete_all_warning'] = 'Это навсегда удалит все ваши беседы с ИИ-репетитором по всем курсам. Это действие нельзя отменить.';
$string['usersettings:delete_all_button'] = 'Удалить все мои данные';
$string['usersettings:confirm_delete_course'] = 'Вы уверены, что хотите навсегда удалить все данные ИИ-репетитора для курса «{$a}»? Это действие нельзя отменить.';
$string['usersettings:confirm_delete_all'] = 'Вы уверены, что хотите навсегда удалить ВСЕ данные ИИ-репетитора по всем курсам? Это действие нельзя отменить.';
$string['usersettings:data_deleted'] = 'Ваши данные удалены.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Привет, {$a}! Я SOLA, твой онлайн-помощник Saylor по обучению.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Открыть SOLA';
$string['chat:change_avatar'] = 'Изменить аватар';

$string['chat:quiz'] = 'Пройти практический тест';
$string['chat:quiz_setup_title'] = 'Практический тест';
$string['chat:quiz_questions'] = 'Количество вопросов';
$string['chat:quiz_topic'] = 'Тема';
$string['chat:quiz_topic_guided'] = 'Под руководством ИИ (на основе вашего прогресса)';
$string['chat:quiz_topic_default'] = 'Текущее содержание курса';
$string['chat:quiz_topic_custom'] = 'Произвольная тема…';
$string['chat:quiz_custom_placeholder'] = 'Введите тему или вопрос...';
$string['chat:quiz_start'] = 'Начать тест';
$string['chat:quiz_cancel'] = 'Отмена';
$string['chat:quiz_loading'] = 'Создание теста…';
$string['chat:quiz_error'] = 'Не удалось создать тест. Пожалуйста, попробуйте снова.';
$string['chat:quiz_correct'] = 'Верно!';
$string['chat:quiz_wrong'] = 'Неверно.';
$string['chat:quiz_next'] = 'Следующий вопрос';
$string['chat:quiz_finish'] = 'Посмотреть результаты';
$string['chat:quiz_score'] = 'Тест завершён! Вы набрали {$a->score} из {$a->total}.';
$string['chat:quiz_summary'] = 'Я только что завершил практический тест из {$a->total} вопросов по теме «{$a->topic}» и набрал {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Цели обучения';
$string['chat:quiz_topic_modules'] = 'Тема курса';
$string['chat:quiz_subtopic_select'] = 'Выберите конкретный пункт…';
$string['chat:quiz_topic_sections'] = 'Разделы курса';
$string['chat:quiz_score_great'] = 'Отличная работа! Вы действительно хорошо знаете этот материал.';
$string['chat:quiz_score_good'] = 'Хорошая попытка! Продолжайте повторять, чтобы укрепить понимание.';
$string['chat:quiz_score_practice'] = 'Продолжайте практиковаться — попробуйте повторить соответствующий материал курса, затем пройдите тест снова.';
$string['chat:quiz_review_heading'] = 'Обзор';
$string['chat:quiz_retake'] = 'Пройти тест снова';
$string['chat:quiz_exit'] = 'Выйти из теста';
$string['chat:quiz_your_answer'] = 'Ваш ответ';
$string['chat:quiz_correct_answer'] = 'Правильный ответ';

$string['chat:starters_label'] = 'Начало разговора';
$string['chat:starter_quiz'] = 'Проверь меня';
$string['chat:starter_explain'] = 'Объясни это';
$string['chat:starter_key_concepts'] = 'Ключевые понятия';
$string['chat:starter_study_plan'] = 'План обучения';
$string['chat:starter_help_me'] = 'Помощь ИИ';
$string['chat:starter_ell_practice'] = 'Практика речи';
$string['chat:starter_ell_pronunciation'] = 'Произношение ELL';
$string['chat:starter_ai_coach'] = 'ИИ-тренер';
$string['chat:starter_speak'] = 'Произнесите начало разговора';

$string['chat:reset'] = 'Начать заново';

$string['chat:topic_picker_title'] = 'На чём вы хотите сосредоточиться?';
$string['chat:topic_picker_title_help'] = 'С чем вам нужна помощь?';
$string['chat:topic_picker_title_explain'] = 'Что вы хотите, чтобы я объяснил?';
$string['chat:topic_picker_title_study'] = 'На какую область вы хотите сосредоточиться?';
$string['chat:topic_start'] = 'Продолжить';

$string['chat:fullscreen'] = 'Полный экран';
$string['chat:exitfullscreen'] = 'Выйти из полного экрана';

$string['chat:language'] = 'Изменить язык';
$string['chat:settings_panel'] = 'Настройки';
$string['chat:settings_language'] = 'Язык';
$string['chat:settings_avatar'] = 'Аватар';
$string['chat:settings_voice'] = 'Голос';
$string['chat:settings_voice_admin'] = 'Настройки голоса управляются в панели администратора сайта.';

$string['chat:voice_mode'] = 'Голосовой режим';
$string['chat:voice_end'] = 'Завершить голосовой сеанс';
$string['chat:voice_connecting'] = 'Подключение...';
$string['chat:voice_listening'] = 'Слушаю...';
$string['chat:voice_speaking'] = 'SOLA говорит...';
$string['chat:voice_idle'] = 'Готово';
$string['chat:voice_error'] = 'Не удалось подключиться к голосовому режиму. Проверьте настройки.';
$string['chat:quiz_locked'] = 'SOLA приостановлена во время тестов для поддержания академической честности. Удачи!';
