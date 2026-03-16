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
 * Language strings for local_ai_course_assistant — Bulgarian.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI асистент за курсове';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Съхранява разговорите с AI тутора по потребител и курс.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Идентификаторът на потребителя, притежаващ разговора.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Идентификаторът на курса, към който принадлежи разговорът.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Заглавието на разговора.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Времето на създаване на разговора.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Времето на последната промяна на разговора.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Съхранява отделните съобщения от разговорите с AI тутора.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Идентификаторът на потребителя, изпратил съобщението.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Идентификаторът на курса, към който принадлежи съобщението.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Ролята на изпращача на съобщението (потребител или асистент).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Съдържанието на съобщението.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Броят на токените, използвани за съобщението.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Времето на създаване на съобщението.';
$string['ai_course_assistant:use'] = 'Използване на AI тутор чата';
$string['ai_course_assistant:viewanalytics'] = 'Преглед на анализите на AI тутор чата';
$string['ai_course_assistant:manage'] = 'Управление на настройките на AI тутор чата (роля Администратор)';
$string['settings:enabled'] = 'Активиране на AI асистента за курсове';
$string['settings:enabled_desc'] = 'Активиране или деактивиране на уиджета на AI асистента за курсове на страниците на курсовете.';
$string['settings:provider'] = 'AI доставчик';
$string['settings:provider_desc'] = 'Изберете AI доставчика, който да се използва за чат завършвания.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Локален)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Персонализиран (съвместим с OpenAI)';
$string['settings:apikey'] = 'API ключ';
$string['settings:apikey_desc'] = 'API ключ за избрания доставчик. Не е необходим за Ollama.';
$string['settings:model'] = 'Име на модела';
$string['settings:model_desc'] = 'Моделът, който да се използва. Стойността по подразбиране зависи от доставчика (напр. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'Базов URL на API';
$string['settings:apibaseurl_desc'] = 'Базов URL на API. Попълва се автоматично според доставчика, но може да бъде заменен. Оставете празно, за да използвате стойността по подразбиране на доставчика.';
$string['settings:systemprompt'] = 'Шаблон на системната подсказка';
$string['settings:systemprompt_desc'] = 'Системната подсказка, изпратена до AI. Използвайте заместители: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Вие сте полезен AI тутор за курса "{{coursename}}". Ролята на студента е {{userrole}}.

Теми, разгледани в курса:
{{coursetopics}}

Помогнете на студента да разбере съдържанието на курса. Бъдете насърчителен, ясен и педагогически точен.';
$string['settings:temperature'] = 'Температура';
$string['settings:temperature_desc'] = 'Контролира случайността. По-ниските стойности са по-фокусирани, по-високите са по-креативни. Диапазон: 0,0 до 2,0.';
$string['settings:maxhistory'] = 'Максимална история на разговорите';
$string['settings:maxhistory_desc'] = 'Максимален брой двойки съобщения за включване в API заявките. По-старите съобщения се отстраняват.';
$string['settings:avatar'] = 'Аватар за чата';
$string['settings:avatar_desc'] = 'Изберете иконата на аватара за бутона на чат уиджета.';
$string['settings:avatar_saylor'] = 'Лого на {$a} (по подразбиране)';
$string['settings:position'] = 'Позиция на уиджета';
$string['settings:position_desc'] = 'Позиция на чат уиджета на страницата.';
$string['settings:position_br'] = 'Долу вдясно';
$string['settings:position_bl'] = 'Долу вляво';
$string['settings:position_tr'] = 'Горе вдясно';
$string['settings:position_tl'] = 'Горе вляво';
$string['chat:settings'] = 'Настройки на плъгина';
$string['analytics:viewdashboard'] = 'Показване на таблото за анализи';
$string['coursesettings:title'] = 'AI настройки на курса';
$string['coursesettings:enabled'] = 'Активиране на замяна за курса';
$string['coursesettings:enabled_desc'] = 'Когато е активирано, настройките по-долу заменят глобалната конфигурация на AI доставчика само за този курс. Оставете полетата празни, за да наследите глобалната стойност.';
$string['coursesettings:using_global'] = 'Използване на глобална настройка';
$string['coursesettings:saved'] = 'AI настройките на курса са запазени.';
$string['coursesettings:global_settings_link'] = 'Глобални AI настройки';
$string['lang:switch'] = 'Да, превключи';
$string['lang:dismiss'] = 'Не, благодаря';
$string['lang:change'] = 'Смяна на езика';
$string['lang:english'] = 'Английски';
$string['chat:title'] = 'AI тутор';
$string['chat:placeholder'] = 'Задайте въпрос...';
$string['chat:send'] = 'Изпращане';
$string['chat:close'] = 'Затваряне на чата';
$string['chat:open'] = 'Отваряне на AI тутор чата';
$string['chat:clear'] = 'Изчистване на историята';
$string['chat:clear_confirm'] = 'Сигурни ли сте, че искате да изчистите историята на чата си за този курс?';
$string['chat:copy'] = 'Копиране на разговора';
$string['chat:copied'] = 'Разговорът е копиран в клипборда';
$string['chat:copy_failed'] = 'Неуспешно копиране на разговора';
$string['chat:thinking'] = 'Мисля...';
$string['chat:error'] = 'Съжалявам, възникна грешка. Моля, опитайте отново.';
$string['chat:error_auth'] = 'Грешка при удостоверяване. Моля, свържете се с вашия администратор.';
$string['chat:error_ratelimit'] = 'Твърде много заявки. Моля, изчакайте малко и опитайте отново.';
$string['chat:error_unavailable'] = 'AI услугата е временно недостъпна. Моля, опитайте по-късно.';
$string['chat:error_notconfigured'] = 'AI туторът все още не е конфигуриран. Моля, свържете се с вашия администратор.';
$string['chat:expand'] = 'Разширяване на чата';
$string['chat:collapse'] = 'Свиване на чата';
$string['chat:mic'] = 'Кажете въпроса си на глас';
$string['chat:mic_error'] = 'Грешка на микрофона. Моля, проверете разрешенията на браузъра си.';
$string['chat:mic_unsupported'] = 'Гласовият вход не се поддържа от този браузър.';
$string['chat:newline_hint'] = 'Shift+Enter за нов параграф';
$string['chat:you'] = 'Вие';
$string['chat:assistant'] = 'AI тутор';
$string['chat:history_loaded'] = 'Предишният разговор е зареден.';
$string['chat:history_cleared'] = 'Историята на чата е изчистена.';
$string['chat:offtopic_warning'] = 'Изглежда, че въпросът ви не е свързан с този курс. Опитайте да останете по темата, за да мога да ви помогна най-добре!';
$string['chat:offtopic_ended'] = 'Достъпът ви до AI тутора е временно спрян за {$a} минути, защото разговорът твърде често излизаше извън темата. Използвайте това време, за да прегледате учебните си материали, и опитайте отново по-късно.';
$string['chat:offtopic_locked'] = 'Достъпът ви до AI тутора е временно спрян. Можете да опитате отново след {$a} минути. Съсредоточете се върху въпроси, свързани с курса, когато се върнете.';
$string['chat:escalated_to_support'] = 'Не успях да отговоря напълно на въпроса ви, затова създадох тикет за поддръжка. Член на екипа за поддръжка ще се свърже с вас. Номерът на тикета ви е: {$a}';
$string['chat:studyplan_intro'] = 'Мога да ви помогна да създадете учебен план за този курс! Просто ми кажете колко часа седмично можете да отделите за учене и ще ви помогна да изградите структуриран план.';
$string['settings:faq_heading'] = 'ЧЗВ и поддръжка';
$string['settings:faq_heading_desc'] = 'Конфигуриране на централизираните ЧЗВ и интеграцията на тикети за поддръжка от Zendesk.';
$string['settings:faq_content'] = 'Съдържание на ЧЗВ';
$string['settings:faq_content_desc'] = 'Въведете записи за ЧЗВ (по един на ред във формат: В: въпрос | О: отговор). Те ще бъдат предоставени на AI за отговор на често задавани въпроси за поддръжка.';
$string['settings:zendesk_enabled'] = 'Активиране на ескалация към Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Когато AI не може да разреши въпрос за поддръжка, автоматично се създава тикет в Zendesk с резюме на разговора.';
$string['settings:zendesk_subdomain'] = 'Поддомейн на Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Вашият поддомейн на Zendesk (напр. "moiatafirma" за moiatafirma.zendesk.com).';
$string['settings:zendesk_email'] = 'Zendesk API имейл';
$string['settings:zendesk_email_desc'] = 'Имейл адрес на потребителя на Zendesk за API удостоверяване (със суфикса /token).';
$string['settings:zendesk_token'] = 'Zendesk API токен';
$string['settings:zendesk_token_desc'] = 'API токен за удостоверяване в Zendesk.';
$string['settings:offtopic_heading'] = 'Засичане на извън темата';
$string['settings:offtopic_heading_desc'] = 'Конфигуриране на начина, по който чатът обработва разговори извън темата.';
$string['settings:offtopic_enabled'] = 'Активиране на засичане на извън темата';
$string['settings:offtopic_enabled_desc'] = 'Помолете AI да засича и пренасочва разговори извън темата.';
$string['settings:offtopic_max'] = 'Максимален брой съобщения извън темата';
$string['settings:offtopic_max_desc'] = 'Брой последователни съобщения извън темата преди предприемане на действие.';
$string['settings:offtopic_action'] = 'Действие при извън темата';
$string['settings:offtopic_action_desc'] = 'Какво да се направи, когато лимитът за извън темата бъде достигнат.';
$string['settings:offtopic_action_warn'] = 'Предупреждение и пренасочване';
$string['settings:offtopic_action_end'] = 'Временно блокиране на достъпа';
$string['settings:offtopic_lockout_duration'] = 'Продължителност на блокиране (в минути)';
$string['settings:offtopic_lockout_duration_desc'] = 'Продължителност (в минути), за която студентът губи достъп до AI тутора след превишаване на лимита за извън темата. По подразбиране: 30 минути.';
$string['settings:studyplan_heading'] = 'Планиране на обучението и напомняния';
$string['settings:studyplan_heading_desc'] = 'Конфигуриране на функциите за планиране на обучението и известията за напомняне.';
$string['settings:studyplan_enabled'] = 'Активиране на планирането на обучението';
$string['settings:studyplan_enabled_desc'] = 'Позволете на AI тутора да помага на студентите да създават персонализирани учебни планове според наличното им време.';
$string['settings:reminders_email_enabled'] = 'Активиране на напомняния по имейл';
$string['settings:reminders_email_enabled_desc'] = 'Позволете на студентите да се абонират за напомняния за учене по имейл.';
$string['settings:reminders_whatsapp_enabled'] = 'Активиране на напомняния по WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Позволете на студентите да се абонират за напомняния за учене чрез WhatsApp (изисква конфигурация на WhatsApp API).';
$string['settings:whatsapp_api_url'] = 'URL на WhatsApp API';
$string['settings:whatsapp_api_url_desc'] = 'Крайната точка на API за изпращане на WhatsApp съобщения (напр. Twilio, MessageBird). Трябва да приема POST с JSON тяло, съдържащо полетата "to", "from" и "body".';
$string['settings:whatsapp_api_token'] = 'WhatsApp API токен';
$string['settings:whatsapp_api_token_desc'] = 'Токен за удостоверяване за WhatsApp API.';
$string['settings:whatsapp_from_number'] = 'Номер на подателя за WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Телефонният номер, от който да се изпращат WhatsApp съобщения (с код на държавата, напр. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Блокирани държави за WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Кодове на държави по ISO 3166-1 alpha-2, разделени със запетаи, където напомнянията по WhatsApp не са разрешени поради местни разпоредби (напр. "CN,IR,KP").';
$string['reminder:email_subject'] = 'Напомняне за учене: {$a}';
$string['reminder:email_body'] = 'Здравейте, {$a->firstname},

Ето вашето напомняне за учене за "{$a->coursename}".

{$a->message}

Вашият учебен план предлага {$a->hours_per_week} часа седмично за този курс.

Продължавайте в същия дух!

---
За да се отпишете от тези напомняния, кликнете тук: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Напомняне за учене за {$a->coursename}: {$a->message} (Отписване: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Учебна цел за деня: ';
$string['unsubscribe:title'] = 'Отписване от напомняния за учене';
$string['unsubscribe:success'] = 'Успешно се отписахте от напомнянията за учене за този курс.';
$string['unsubscribe:already'] = 'Вече сте се отписали от тези напомняния.';
$string['unsubscribe:invalid'] = 'Невалиден или изтекъл линк за отписване.';
$string['unsubscribe:resubscribe'] = 'Промените мнението си? Можете да активирате напомнянията отново чрез чата на AI тутора.';
$string['task:send_reminders'] = 'Изпращане на напомняния за учене от AI тутора';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Съхранява учебните планове на студентите.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Идентификаторът на потребителя, притежаващ учебния план.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Курсът, към който принадлежи учебният план.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Часове седмично, които студентът планира да учи.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Подробности за учебния план в JSON формат.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Съхранява предпочитанията за напомняния за учене и абонаментите.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Идентификаторът на потребителя, абониран за напомняния.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Каналът за напомняне (имейл или WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Имейл адресът или телефонният номер за напомняния.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Кодът на държавата на потребителя за регулаторно съответствие.';
$string['analytics:title'] = 'Анализи на AI тутора';
$string['analytics:overview'] = 'Преглед';
$string['analytics:total_conversations'] = 'Общо разговори';
$string['analytics:total_messages'] = 'Общо съобщения';
$string['analytics:active_students'] = 'Активни студенти';
$string['analytics:avg_messages_per_student'] = 'Ср. бр. съобщения на студент';
$string['analytics:offtopic_rate'] = 'Процент извън темата';
$string['analytics:escalation_count'] = 'Ескалирани към поддръжка';
$string['analytics:studyplan_adoption'] = 'Студенти с учебни планове';
$string['analytics:usage_trends'] = 'Тенденции на използване';
$string['analytics:daily_messages'] = 'Дневен обем на съобщенията';
$string['analytics:hotspots'] = 'Горещи точки в курса';
$string['analytics:hotspots_desc'] = 'Секциите на курса, най-често цитирани във въпросите на студентите. Високите числа могат да показват области, в които студентите имат нужда от повече подкрепа.';
$string['analytics:section'] = 'Секция';
$string['analytics:mention_count'] = 'Споменавания';
$string['analytics:common_prompts'] = 'Чести модели на въпроси';
$string['analytics:common_prompts_desc'] = 'Повтарящи се модели на въпроси от студентите. Прегледайте ги, за да идентифицирате систематични пропуски в съдържанието на курса.';
$string['analytics:prompt_pattern'] = 'Модел';
$string['analytics:frequency'] = 'Честота';
$string['analytics:recent_activity'] = 'Скорошна активност';
$string['analytics:no_data'] = 'Няма налични аналитични данни засега. Данните ще се появят, когато студентите започнат да използват AI тутора.';
$string['analytics:timerange'] = 'Времеви обхват';
$string['analytics:last_7_days'] = 'Последните 7 дни';
$string['analytics:last_30_days'] = 'Последните 30 дни';
$string['analytics:all_time'] = 'Цялото време';
$string['analytics:export'] = 'Експортиране на данни';
$string['analytics:provider_comparison'] = 'Сравнение на AI доставчици';
$string['analytics:provider_comparison_desc'] = 'Сравнете производителността на AI доставчиците, използвани в този курс.';
$string['analytics:provider'] = 'Доставчик';
$string['analytics:response_count'] = 'Отговори';
$string['analytics:avg_response_length'] = 'Ср. дължина на отговорите';
$string['analytics:total_tokens'] = 'Общо токени';
$string['analytics:avg_tokens'] = 'Ср. токени / отговор';
$string['usersettings:title'] = 'AI асистент за курсове: Вашите данни';
$string['usersettings:intro'] = 'Управлявайте данните от чата с AI тутора и настройките за поверителност';
$string['usersettings:privacy_info'] = 'Вашите разговори с AI тутора се съхраняват, за да ви предоставим непрекъсната подкрепа по време на курса. Имате пълен контрол върху тези данни и можете да ги изтриете по всяко време.';
$string['usersettings:usage_stats'] = 'Вашата статистика за използване';
$string['usersettings:total_messages'] = 'Общо съобщения';
$string['usersettings:total_conversations'] = 'Разговори';
$string['usersettings:messages'] = 'Съобщения';
$string['usersettings:last_activity'] = 'Последна активност';
$string['usersettings:delete_course_data'] = 'Изтриване на данните за курса';
$string['usersettings:no_data'] = 'Все още не сте използвали AI тутора. Данните ви за използване ще се покажат тук, когато започнете да чатите.';
$string['usersettings:delete_all_title'] = 'Изтриване на всички ваши данни';
$string['usersettings:delete_all_warning'] = 'Това действие ще изтрие окончателно всичките ви разговори с AI тутора във всички курсове. Това действие е необратимо.';
$string['usersettings:delete_all_button'] = 'Изтриване на всички мои данни';
$string['usersettings:confirm_delete_course'] = 'Сигурни ли сте, че искате да изтриете окончателно всичките си данни от AI тутора за курса "{$a}"? Това действие е необратимо.';
$string['usersettings:confirm_delete_all'] = 'Сигурни ли сте, че искате да изтриете окончателно ВСИЧКИ ваши данни от AI тутора във всички курсове? Това действие е необратимо.';
$string['usersettings:data_deleted'] = 'Вашите данни бяха изтрити.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Здравейте, {$a}! Аз съм SOLA, вашият онлайн асистент за обучение от {INSTITUTION}.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Отваряне на SOLA';
$string['chat:change_avatar'] = 'Смяна на аватар';

// Quiz UI.
$string['chat:quiz'] = 'Направете тренировъчен тест';
$string['chat:quiz_setup_title'] = 'Тренировъчен тест';
$string['chat:quiz_questions'] = 'Брой въпроси';
$string['chat:quiz_topic'] = 'Тема';
$string['chat:quiz_topic_guided'] = 'Водено от AI (според вашия напредък)';
$string['chat:quiz_topic_default'] = 'Текущо съдържание на курса';
$string['chat:quiz_topic_custom'] = 'Персонализирана тема…';
$string['chat:quiz_custom_placeholder'] = 'Въведете тема или въпрос...';
$string['chat:quiz_start'] = 'Започване на теста';
$string['chat:quiz_cancel'] = 'Отказ';
$string['chat:quiz_loading'] = 'Генериране на теста…';
$string['chat:quiz_error'] = 'Не може да се генерира тест. Моля, опитайте отново.';
$string['chat:quiz_correct'] = 'Правилно!';
$string['chat:quiz_wrong'] = 'Грешно.';
$string['chat:quiz_next'] = 'Следващ въпрос';
$string['chat:quiz_finish'] = 'Вижте резултатите';
$string['chat:quiz_score'] = 'Тестът е завършен! Вие получихте {$a->score} от {$a->total}.';
$string['chat:quiz_summary'] = 'Току-що завърших тренировъчен тест от {$a->total} въпроса по "{$a->topic}" и получих {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Учебни цели';
$string['chat:quiz_topic_modules'] = 'Тема от курса';
$string['chat:quiz_subtopic_select'] = 'Изберете конкретен елемент…';
$string['chat:quiz_topic_sections'] = 'Секции на курса';
$string['chat:quiz_score_great'] = 'Отлична работа! Наистина овладявате този материал.';
$string['chat:quiz_score_good'] = 'Добро усилие! Продължавайте да преглеждате, за да затвърдите разбирането си.';
$string['chat:quiz_score_practice'] = 'Продължавайте да се упражнявате. Опитайте да прегледате съответното съдържание на курса, след което направете теста отново.';
$string['chat:quiz_review_heading'] = 'Преглед';
$string['chat:quiz_retake'] = 'Повторете теста';
$string['chat:quiz_exit'] = 'Изход от теста';
$string['chat:quiz_your_answer'] = 'Вашият отговор';
$string['chat:quiz_correct_answer'] = 'Правилен отговор';

// Conversation starters.
$string['chat:starters_label'] = 'Начала на разговор';
$string['chat:starter_quiz'] = 'Тествай ме по това';
$string['chat:starter_explain'] = 'Обяснете това';
$string['chat:starter_key_concepts'] = 'Ключови концепции';
$string['chat:starter_study_plan'] = 'Учебен план';
$string['chat:starter_help_me'] = 'AI помощ';
$string['chat:starter_ai_project_coach'] = 'AI проектен треньор';
$string['chat:starter_ell_practice'] = 'Практика на разговор';
$string['chat:starter_ell_pronunciation'] = 'Произношение ELL';
$string['chat:starter_ai_coach'] = 'AI треньор';
$string['chat:starter_speak'] = 'Кажете начало';

// Reset / home.
$string['chat:reset'] = 'Започнете отначало';

// Topic picker.
$string['chat:topic_picker_title'] = 'Върху какво искате да се съсредоточите?';
$string['chat:topic_picker_title_help'] = 'С какво имате нужда от помощ?';
$string['chat:topic_picker_title_explain'] = 'Какво искате да ви обясня?';
$string['chat:topic_picker_title_study'] = 'В коя област искате да се съсредоточите?';
$string['chat:topic_start'] = 'Продължаване';

// Expand states.
$string['chat:fullscreen'] = 'Цял екран';
$string['chat:exitfullscreen'] = 'Изход от цял екран';

// Settings panel.
$string['chat:language'] = 'Смяна на езика';
$string['chat:settings_panel'] = 'Настройки';
$string['chat:settings_language'] = 'Език';
$string['chat:settings_avatar'] = 'Аватар';
$string['chat:settings_voice'] = 'Глас';
$string['chat:settings_voice_admin'] = 'Настройките на гласа се управляват в панела за администриране на сайта.';

// Voice mode.
$string['chat:voice_mode'] = 'Гласов режим';
$string['chat:voice_end'] = 'Край на гласовата сесия';
$string['chat:voice_connecting'] = 'Свързване...';
$string['chat:voice_listening'] = 'Слушане...';
$string['chat:voice_speaking'] = 'SOLA говори...';
$string['chat:voice_idle'] = 'Готово';
$string['chat:voice_error'] = 'Гласовата връзка не бе осъществена. Моля, проверете настройките си.';
$string['chat:quiz_locked'] = 'SOLA е на пауза по време на тестове, за да се запази академичната почтеност. Успех!';
$string['task:send_inactivity_reminders'] = 'Изпращане на седмични имейли за напомняне при неактивност';
$string['messageprovider:study_notes'] = 'Бележки от учебна сесия';
