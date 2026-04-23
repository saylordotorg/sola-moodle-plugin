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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'По умолчанию для новых курсов';
$string['settings:default_course_mode_desc'] = 'Управляет тем, отображается ли SOLA на курсе, когда выбор для конкретного курса не сделан. Новые установки по умолчанию имеют значение "Отключено по умолчанию", чтобы администраторы могли включать курс за курсом со страницы Analytics или страницы Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Отключено по умолчанию (включить для каждого курса)';
$string['settings:default_course_mode_all'] = 'Включено на всех курсах';
$string['settings:auto_open'] = 'Автоматическое открытие при первом посещении';
$string['settings:auto_open_desc'] = 'Когда включено, панель SOLA открывается автоматически при первом посещении студентом каждого курса. Последующие загрузки страниц в том же курсе не открывают панель повторно — состояние отслеживается для каждого курса в браузере студента через localStorage. Применяется на компьютере и мобильном устройстве. Может быть переопределено для каждого курса на странице Course AI Settings.';
$string['settings:comparison_providers'] = 'Провайдеры сравнения (выбор LLM)';
$string['settings:comparison_providers_desc'] = 'Добавьте дополнительных провайдеров AI в встроенный переключатель LLM виджета, чтобы администраторы могли сравнивать ответы разных провайдеров. Используйте таблицу ниже для добавления строк. Столбец температуры является необязательным (оставьте пустым, чтобы использовать глобальную температуру). Формат хранения: provider_id|api_key|model1,model2|temperature. Основной провайдер, настроенный выше, всегда включается автоматически. Только администраторы с правами управления видят переключатель; студенты его никогда не видят. Допустимые provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Провайдер ИИ по умолчанию';
$string['settings:provider_desc'] = 'Выберите поставщика ИИ для завершений чата. Выберите "Moodle AI (core_ai subsystem)", чтобы направлять запросы через встроенную конфигурацию ИИ Moodle в Site admin > AI; поля API-ключа, модели и базового URL ниже игнорируются в этом режиме. Стриминг, использование инструментов и prompt caching недоступны через core_ai — ответы доставляются одним фрагментом. Используйте прямого поставщика для лучшего пользовательского опыта студента.';
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
$string['settings:avatar_saylor'] = 'Логотип {$a} (по умолчанию)';
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
$string['coursesettings:sola_enabled'] = 'SOLA на этом курсе';
$string['coursesettings:sola_enabled_toggle'] = 'Показывать виджет SOLA на этом курсе';
$string['coursesettings:sola_enabled_desc'] = 'Управляет тем, отображается ли виджет чата SOLA на этом курсе. Значение по умолчанию для всего сайта устанавливается в настройках плагина в разделе General > Default for new courses.';
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
$string['chat:clear'] = 'Очистить экран';
$string['chat:clear_confirm'] = 'Очистить видимые сообщения? Ваша полная история чата остаётся сохранённой и может быть загружена повторно при повторном открытии виджета.';
$string['chat:copy'] = 'Скопировать беседу';
$string['chat:copied'] = 'Беседа скопирована в буфер обмена';
$string['chat:copy_failed'] = 'Не удалось скопировать беседу';
$string['chat:thinking'] = 'Думаю...';
$string['chat:error'] = 'Извините, что-то пошло не так. Попробуйте ещё раз.';
$string['chat:error_auth'] = 'Ошибка аутентификации. Обратитесь к администратору.';
$string['chat:error_ratelimit'] = 'Слишком много запросов. Пожалуйста, подождите немного и попробуйте снова.';
$string['chat:error_unavailable'] = 'Сервис ИИ временно недоступен. Попробуйте позже.';
$string['chat:error_notconfigured'] = 'ИИ-репетитор ещё не настроен. Обратитесь к администратору.';
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

$string['chat:greeting'] = 'Привет, {$a}! Я SOLA. Чем могу помочь сегодня?';
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
$string['chat:starter_quiz'] = 'Проверь меня по этому';
$string['chat:starter_explain'] = 'Объясни это';
$string['chat:starter_key_concepts'] = 'Ключевые понятия';
$string['chat:starter_study_plan'] = 'План обучения';
$string['chat:starter_help_me'] = 'Помощь ИИ';
$string['chat:starter_ai_project_coach'] = 'Тренер AI-проекта';
$string['chat:starter_ell_practice'] = 'Практика разговора';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Заметки';

// History panel.
$string['chat:history_title'] = 'Заметки и история разговора';
$string['task:send_inactivity_reminders'] = 'Отправлять еженедельные напоминания по электронной почте о неактивности';
$string['messageprovider:study_notes'] = 'Заметки учебной сессии';
$string['task:send_inactivity_reminders'] = 'Отправлять еженедельные напоминания о неактивности';
$string['task:run_meta_ai_query'] = 'Запустить запланированный запрос аналитики Радар обучения';
$string['messageprovider:study_notes'] = 'Заметки учебной сессии';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Доставка фронтенда';
$string['settings:cdn_heading_desc'] = 'Раздавайте фронтенд-ресурсы SOLA (JS/CSS) с внешнего CDN вместо файловой системы Moodle. Это позволяет обновлять фронтенд без обновления плагина. Оставьте URL CDN пустым для использования локальных файлов плагина.';
$string['settings:cdn_url'] = 'Базовый URL CDN';
$string['settings:cdn_url_desc'] = 'Базовый URL, на котором размещены sola.min.js и sola.min.css. Пример: https://your-org.github.io/sola-cdn. Оставьте пустым для использования локальных файлов плагина.';
$string['settings:cdn_version'] = 'Версия ресурсов CDN';
$string['settings:cdn_version_desc'] = 'Строка версии, добавляемая к URL CDN для сброса кеша (cache busting). Обновляйте после каждого развёртывания CDN (напр. 3.2.4 или commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Общее использование';
$string['analytics:tab_bycourse'] = 'По курсу';
$string['analytics:tab_comparison'] = 'AI vs неиспользующие';
$string['analytics:tab_byunit'] = 'По разделу';
$string['analytics:tab_usagetypes'] = 'Типы использования';
$string['analytics:tab_themes'] = 'Темы';
$string['analytics:tab_feedback'] = 'Отзывы об AI';
$string['analytics:total_students'] = 'Всего студентов';
$string['analytics:active_users'] = 'Активные пользователи AI';
$string['analytics:msgs_per_student'] = 'Сообщений на студента';
$string['analytics:avg_session'] = 'Средняя длительность сеанса';
$string['analytics:return_rate'] = 'Показатель возврата';
$string['analytics:total_sessions'] = 'Всего сеансов';
$string['analytics:thumbs_up'] = 'Нравится';
$string['analytics:thumbs_down'] = 'Не нравится';
$string['analytics:hallucination_flags'] = 'Отметки неточности';
$string['analytics:msgs_to_resolution'] = 'Сообщений до решения';
$string['analytics:helpful'] = 'Полезно';
$string['analytics:not_helpful'] = 'Бесполезно';
$string['analytics:flag_hallucination'] = 'Этот ответ содержит неточную информацию';
$string['analytics:submit_rating'] = 'Отправить';
$string['analytics:thanks_feedback'] = 'Спасибо за ваш отзыв';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Объясни эту страницу';
$string['chat:starter_ask_anything'] = 'Спросите что угодно';
$string['chat:starter_review_practice'] = 'Повторение и практика';
$string['chat:history_saved_subtitle'] = 'Сохранённые ответы остаются на этом устройстве для этого курса.';
$string['chat:history_saved_empty'] = 'Сохраните ответ ИИ, чтобы увидеть его здесь.';
$string['chat:history_views_label'] = 'Виды истории';
$string['chat:history_view_saved'] = 'Сохранённые';
$string['chat:history_view_recent'] = 'История';
$string['chat:debug_refresh'] = 'Обновить';
$string['chat:debug_copy_all'] = 'Копировать всё';
$string['chat:debug_close'] = 'Закрыть';
$string['chat:language_switch'] = 'Сменить язык';
$string['chat:language_dismiss'] = 'Отклонить предложение языка';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Выбрать провайдера LLM';
$string['chat:llm_model_label'] = 'Модель';
$string['chat:llm_model_select'] = 'Выбрать модель LLM';
$string['chat:footer_usertesting'] = 'Тестирование удобства использования';
$string['chat:footer_feedback'] = 'Обратная связь';
$string['chat:voice_panel_title'] = 'Говорить с {$a} (Экспериментально)';

// Additional translated strings.
$string['chat:debug_context'] = 'Отладка контекста';
$string['chat:debug_context_browser'] = 'Снимок браузера';
$string['chat:debug_context_copy'] = 'Копировать';
$string['chat:debug_context_prompt'] = 'Ответ сервера';
$string['chat:debug_context_request'] = 'Последний запрос SSE';
$string['chat:debug_context_toggle'] = 'Переключить инспектор';
$string['chat:history_empty'] = 'Разговоров нет.';
$string['chat:history_refresh'] = 'Обновить';
$string['chat:history_subtitle'] = 'Ваши недавние сообщения.';
$string['chat:starter_explain_prompt'] = 'Объясните самую важную концепцию?';
$string['chat:starter_help_lesson'] = 'Объясните это';
$string['chat:starter_help_lesson_prompt'] = 'Помогите понять урок. Изложите ключевые понятия.';
$string['chat:starter_prompt_coach'] = 'Тренер AI';
$string['chat:starter_quick_study'] = 'Быстрое обучение';
$string['chat:starter_study_plan_prompt'] = 'Хочу спланировать учёбу. Спросите: (1) цель, (2) время. Обновите план.';
$string['chat:voice_copy'] = 'Голосовой разговор с помощником.';
$string['chat:voice_ready'] = 'Готово';
$string['chat:voice_start'] = 'Начать';
$string['chat:voice_title'] = 'Поговорите с SOLA';
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
$string['mobile_chip_concepts'] = 'Ключевые понятия';
$string['mobile_chip_quiz'] = 'Тест';
$string['mobile_chip_studyplan'] = 'Учебный план';
$string['mobile_clear'] = 'Очистить историю';
$string['mobile_disabled'] = 'SOLA недоступен для этого курса.';
$string['mobile_placeholder'] = 'Задайте вопрос...';
$string['mobile_welcome'] = 'Привет, {$a}!';
$string['mobile_welcome_sub'] = 'Я SOLA, ваш помощник по обучению. Чем могу помочь?';
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
$string['rubric:done'] = 'Готово';
$string['rubric:encourage_high'] = 'Отлично! Продолжайте!';
$string['rubric:encourage_low'] = 'Хорошее начало! Регулярная практика поможет.';
$string['rubric:encourage_mid'] = 'Хорошая работа! Продолжайте практиковаться.';
$string['rubric:overall'] = 'Общий';
$string['rubric:practice_again'] = 'Практиковаться снова';
$string['rubric:score_title_conversation'] = 'Баллы за разговорную практику';
$string['rubric:score_title_pronunciation'] = 'Баллы за произношение';
$string['rubric:scoring'] = 'Оценка...';
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
$string['demo:title'] = 'Тестовая среда';
$string['demo:heading'] = 'Тестовая среда';
$string['demo:intro'] = 'Эта страница создаёт тестовый курс, <strong>скрытый от студентов</strong> (visible=0), и наполняет его фиктивными студентами, AI-разговорами, оценками и отзывами. Полезно для предпросмотра Analytics Dashboard или проверки изменений плагина без влияния на реально зачисленных студентов.';
$string['demo:step1'] = 'Шаг 1: тестовый курс';
$string['demo:step2'] = 'Шаг 2: добавить фиктивных студентов и AI-чаты';
$string['demo:course_exists'] = 'Тестовый курс существует: <strong>{$a->fullname}</strong> (короткое имя <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'скрытый';
$string['demo:badge_visible'] = 'видимый студентам';
$string['demo:no_course'] = 'Тестовый курс не найден. Нажмите ниже, чтобы создать.';
$string['demo:create_btn'] = 'Создать скрытый тестовый курс';
$string['demo:open_course'] = 'Открыть курс &rarr;';
$string['demo:seed_intro'] = 'Создаёт demo_student_001, demo_student_002, ..., зачисляет их на тестовый курс и вставляет синтетические разговоры, сообщения, оценки и отзывы. Запустите снова, чтобы добавить больше данных, или отметьте «сначала очистить», чтобы начать заново.';
$string['demo:users_label'] = 'Пользователи';
$string['demo:weeks_label'] = 'Недели';
$string['demo:clear_label'] = 'Сначала очистить существующих пользователей demo_*';
$string['demo:seed_btn'] = 'Добавить студентов и чаты';
$string['demo:view_analytics'] = 'Посмотреть аналитику для этого курса &rarr;';
$string['demo:footer'] = 'Созданные здесь данные хранятся в стандартных таблицах пользователей / зачислений Moodle и в собственных таблицах разговоров плагина. У всех фиктивных пользователей имена, начинающиеся с <code>demo_student_</code>, что облегчает их фильтрацию или удаление. Чтобы удалить их, запустите шаг заполнения снова, установив флажок «Сначала очистить существующих пользователей demo_*».';
$string['demo:course_fullname'] = 'Тестовый курс SOLA (скрытый)';
$string['demo:notify_created'] = 'Тестовый курс готов: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Не удалось создать курс: {$a}';
$string['demo:notify_seeded'] = 'Добавлено: {$a->users} пользователей, {$a->conversations} разговоров, {$a->messages} сообщений, {$a->ratings} оценок, {$a->feedback} записей отзывов.';
$string['demo:notify_seed_fail'] = 'Не удалось добавить данные: {$a}';
$string['toc:analytics'] = 'Панель Analytics &rarr;';
$string['toc:tokenanalytics'] = 'Стоимость токенов и аналитика &rarr;';
$string['toc:testing'] = 'Тестовая среда &rarr;';
$string['toc:back_to_course'] = '&larr; Назад в {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Бинарный файл pdftotext не найден; извлечение PDF отключено.';
$string['rag:pdftotext_available'] = 'pdftotext обнаружен в {$a}.';
$string['rag:docx_unavailable'] = 'Расширение PHP ZipArchive недоступно; извлечение DOCX отключено.';
$string['rag:h5p_unavailable'] = 'Не удалось прочитать содержимое H5P; пропускается.';
$string['rag:scorm_too_large'] = 'Пакет SCORM превышает настроенный лимит размера ({$a} МБ); пропускается.';
$string['rag:scorm_unzip_failed'] = 'Не удалось распаковать пакет SCORM; пропускается.';
$string['rag:transcript_fetch_failed'] = 'Не удалось получить расшифровку с {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL расшифровки заблокирован проверкой Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Обнаружено встроенное медиа: {$a}';
$string['rag:embed_transcript_attached'] = 'Расшифровка прикреплена для {$a}';

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
