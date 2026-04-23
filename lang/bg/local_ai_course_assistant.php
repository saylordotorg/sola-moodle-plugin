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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'По подразбиране за нови курсове';
$string['settings:default_course_mode_desc'] = 'Контролира дали SOLA се показва в курс, когато не е направен избор за конкретния курс. Новите инсталации са с "Изключено по подразбиране", така че администраторите могат да включват курс по курс от страницата Analytics или страницата Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Изключено по подразбиране (включване за всеки курс)';
$string['settings:default_course_mode_all'] = 'Включено за всички курсове';
$string['settings:auto_open'] = 'Автоматично отваряне при първото посещение';
$string['settings:auto_open_desc'] = 'Когато е активирано, чекмеджето на SOLA се отваря автоматично първия път, когато студент влезе във всеки курс. Последващите зареждания на страници в същия курс не отварят отново чекмеджето — състоянието се проследява за всеки курс в браузъра на студента чрез localStorage. Прилага се на десктоп и мобилни устройства. Може да бъде заменено за всеки курс от страницата Course AI Settings.';
$string['settings:comparison_providers'] = 'Доставчици за сравнение (LLM избор)';
$string['settings:comparison_providers_desc'] = 'Добавете допълнителни AI доставчици към вградения LLM избор, за да могат администраторите да сравняват отговорите между доставчиците. Използвайте таблицата по-долу за добавяне на редове. Колоната за температура е по избор (оставете празна, за да използвате глобалната температура). Формат за съхранение: provider_id|api_key|model1,model2|temperature. Основният доставчик, конфигуриран по-горе, винаги се включва автоматично. Само администратори с право за управление виждат избора; студентите никога не го виждат. Валидни provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'AI доставчик по подразбиране';
$string['settings:provider_desc'] = 'Изберете доставчика на ИИ за завършвания на чата. Изберете "Moodle AI (core_ai subsystem)", за да насочите заявките през вградената AI конфигурация на Moodle в Site admin > AI; полетата за API ключ, модел и основен URL по-долу се игнорират в този режим. Стрийминг, използване на инструменти и prompt caching не са налични чрез core_ai — отговорите се доставят като единичен блок. Използвайте директен доставчик за най-добро студентско изживяване.';
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
$string['coursesettings:sola_enabled'] = 'SOLA в този курс';
$string['coursesettings:sola_enabled_toggle'] = 'Показване на SOLA джаджата в този курс';
$string['coursesettings:sola_enabled_desc'] = 'Контролира дали чат джаджата на SOLA се показва в този курс. Стойността по подразбиране за целия сайт се задава в настройките на плъгина под General > Default for new courses.';
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
$string['chat:clear'] = 'Изчистване на екрана';
$string['chat:clear_confirm'] = 'Да се изчистят ли видимите съобщения? Цялата ви история на чата остава запазена и може да бъде заредена отново чрез повторно отваряне на джаджата.';
$string['chat:copy'] = 'Копиране на разговора';
$string['chat:copied'] = 'Разговорът е копиран в клипборда';
$string['chat:copy_failed'] = 'Неуспешно копиране на разговора';
$string['chat:thinking'] = 'Мисля...';
$string['chat:error'] = 'Съжалявам, възникна грешка. Моля, опитайте отново.';
$string['chat:error_auth'] = 'Грешка при удостоверяване. Моля, свържете се с вашия администратор.';
$string['chat:error_ratelimit'] = 'Твърде много заявки. Моля, изчакайте малко и опитайте отново.';
$string['chat:error_unavailable'] = 'AI услугата е временно недостъпна. Моля, опитайте по-късно.';
$string['chat:error_notconfigured'] = 'AI туторът все още не е конфигуриран. Моля, свържете се с вашия администратор.';
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
$string['chat:greeting'] = 'Здравейте, {$a}! Аз съм SOLA. Как мога да ви помогна днес?';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Бележки';

// History panel.
$string['chat:history_title'] = 'Бележки и история на разговора';
$string['task:send_inactivity_reminders'] = 'Изпращане на седмични имейли за напомняне при неактивност';
$string['task:run_meta_ai_query'] = 'Изпълнение на планирана заявка за Радар за обучение анализ';
$string['messageprovider:study_notes'] = 'Бележки от учебна сесия';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Доставка на интерфейса';
$string['settings:cdn_heading_desc'] = 'Обслужвайте ресурсите на SOLA (JS/CSS) от външен CDN вместо от файловата система на Moodle. Това позволява обновяване на интерфейса без надграждане на плъгина. Оставете CDN URL празно, за да използвате локалните файлове на плъгина.';
$string['settings:cdn_url'] = 'Основен CDN URL адрес';
$string['settings:cdn_url_desc'] = 'Основен URL адрес, където са хоствани sola.min.js и sola.min.css. Пример: https://your-org.github.io/sola-cdn. Оставете празно, за да използвате локалните файлове на плъгина.';
$string['settings:cdn_version'] = 'Версия на CDN ресурсите';
$string['settings:cdn_version_desc'] = 'Версионен низ, добавян към CDN URL адресите за cache busting. Обновете го след всяко CDN разгръщане (напр. 3.2.4 или commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Обща употреба';
$string['analytics:tab_bycourse'] = 'По курс';
$string['analytics:tab_comparison'] = 'AI срещу неизползващи';
$string['analytics:tab_byunit'] = 'По раздел';
$string['analytics:tab_usagetypes'] = 'Видове употреба';
$string['analytics:tab_themes'] = 'Теми';
$string['analytics:tab_feedback'] = 'AI обратна връзка';
$string['analytics:total_students'] = 'Общо студенти';
$string['analytics:active_users'] = 'Активни AI потребители';
$string['analytics:msgs_per_student'] = 'Съобщения на студент';
$string['analytics:avg_session'] = 'Средна продължителност на сесията';
$string['analytics:return_rate'] = 'Процент на връщане';
$string['analytics:total_sessions'] = 'Общо сесии';
$string['analytics:thumbs_up'] = 'Харесвам';
$string['analytics:thumbs_down'] = 'Не харесвам';
$string['analytics:hallucination_flags'] = 'Маркирани неточности';
$string['analytics:msgs_to_resolution'] = 'Съобщения до решение';
$string['analytics:helpful'] = 'Полезно';
$string['analytics:not_helpful'] = 'Не е полезно';
$string['analytics:flag_hallucination'] = 'Този отговор съдържа неточна информация';
$string['analytics:submit_rating'] = 'Изпращане';
$string['analytics:thanks_feedback'] = 'Благодарим за обратната връзка';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Обясни тази страница';
$string['chat:starter_ask_anything'] = 'Задай въпрос';
$string['chat:starter_review_practice'] = 'Преговор и практика';
$string['chat:history_saved_subtitle'] = 'Запазените отговори остават на това устройство за този курс.';
$string['chat:history_saved_empty'] = 'Запазете AI отговор, за да го видите тук.';
$string['chat:history_views_label'] = 'Изгледи на историята';
$string['chat:history_view_saved'] = 'Запазени';
$string['chat:history_view_recent'] = 'История';
$string['chat:debug_refresh'] = 'Обнови';
$string['chat:debug_copy_all'] = 'Копирай всичко';
$string['chat:debug_close'] = 'Затвори';
$string['chat:language_switch'] = 'Смени езика';
$string['chat:language_dismiss'] = 'Отхвърли предложението за език';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Избери LLM доставчик';
$string['chat:llm_model_label'] = 'Модел';
$string['chat:llm_model_select'] = 'Избери LLM модел';
$string['chat:footer_usertesting'] = 'Тестване на използваемостта';
$string['chat:footer_feedback'] = 'Обратна връзка';
$string['chat:voice_panel_title'] = 'Говори с {$a} (експериментално)';

// Additional translated strings.
$string['chat:debug_context'] = 'Отстраняване на грешки';
$string['chat:debug_context_browser'] = 'Снимка на браузъра';
$string['chat:debug_context_copy'] = 'Копиране';
$string['chat:debug_context_prompt'] = 'Отговор на сървъра';
$string['chat:debug_context_request'] = 'Последна SSE заявка';
$string['chat:debug_context_toggle'] = 'Превключване';
$string['chat:history_empty'] = 'Няма разговори.';
$string['chat:history_refresh'] = 'Обновяване';
$string['chat:history_subtitle'] = 'Скорошните ви съобщения.';
$string['chat:starter_explain_prompt'] = 'Обяснете най-важната концепция?';
$string['chat:starter_help_lesson'] = 'Обяснете';
$string['chat:starter_help_lesson_prompt'] = 'Помогнете ми с урока. Обобщете ключовите концепции.';
$string['chat:starter_prompt_coach'] = 'AI треньор';
$string['chat:starter_quick_study'] = 'Бързо учене';
$string['chat:starter_study_plan_prompt'] = 'Искам да планирам учене. Попитайте: (1) какво искам днес, (2) колко време. Актуализирайте плана.';
$string['chat:voice_copy'] = 'Гласов разговор с учебния асистент.';
$string['chat:voice_ready'] = 'Готов';
$string['chat:voice_start'] = 'Започнете';
$string['chat:voice_title'] = 'Говорете със SOLA';
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
$string['mobile_chip_concepts'] = 'Ключови концепции';
$string['mobile_chip_quiz'] = 'Тест';
$string['mobile_chip_studyplan'] = 'Учебен план';
$string['mobile_clear'] = 'Изчистване';
$string['mobile_disabled'] = 'SOLA не е наличен за този курс.';
$string['mobile_placeholder'] = 'Задайте въпрос...';
$string['mobile_welcome'] = 'Здравейте, {$a}!';
$string['mobile_welcome_sub'] = 'Аз съм SOLA, вашият учебен асистент. Как мога да помогна?';
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
$string['rubric:encourage_high'] = 'Отлична работа! Продължавайте!';
$string['rubric:encourage_low'] = 'Добро начало! Редовната практика ще помогне.';
$string['rubric:encourage_mid'] = 'Добро усилие! Продължавайте да упражнявате.';
$string['rubric:overall'] = 'Общо';
$string['rubric:practice_again'] = 'Упражнявайте отново';
$string['rubric:score_title_conversation'] = 'Резултат от упражнение';
$string['rubric:score_title_pronunciation'] = 'Резултат от произношение';
$string['rubric:scoring'] = 'Оценяване...';
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
$string['demo:title'] = 'Тестова среда';
$string['demo:heading'] = 'Тестова среда';
$string['demo:intro'] = 'Тази страница създава тестов курс, който е <strong>скрит от студентите</strong> (visible=0) и го попълва с фиктивни студенти, AI разговори, оценки и обратна връзка. Полезно за преглед на Analytics Dashboard или валидиране на промени в приставката, без да се засягат реално записани студенти.';
$string['demo:step1'] = 'Стъпка 1: тестов курс';
$string['demo:step2'] = 'Стъпка 2: добавяне на фиктивни студенти и AI чатове';
$string['demo:course_exists'] = 'Тестовият курс съществува: <strong>{$a->fullname}</strong> (кратко име <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'скрит';
$string['demo:badge_visible'] = 'видим за студенти';
$string['demo:no_course'] = 'Не е намерен тестов курс. Щракнете по-долу, за да създадете.';
$string['demo:create_btn'] = 'Създаване на скрит тестов курс';
$string['demo:open_course'] = 'Отвори курса &rarr;';
$string['demo:seed_intro'] = 'Създава demo_student_001, demo_student_002, ... записва ги в тестовия курс и вмъква синтетични разговори, съобщения, оценки и обратна връзка. Пуснете отново, за да добавите още данни, или отметнете „изчисти първо“, за да започнете отначало.';
$string['demo:users_label'] = 'Потребители';
$string['demo:weeks_label'] = 'Седмици';
$string['demo:clear_label'] = 'Изчисти първо съществуващите demo_* потребители';
$string['demo:seed_btn'] = 'Добави студенти и чатове';
$string['demo:view_analytics'] = 'Вижте аналитиката за този курс &rarr;';
$string['demo:footer'] = 'Данните, създадени тук, живеят в стандартните таблици за потребители / записвания на Moodle и в собствените таблици за разговори на приставката. Всички фиктивни потребители имат потребителски имена, започващи с <code>demo_student_</code>, за да се филтрират или премахват лесно. За да ги премахнете, стартирайте отново стъпката със зареждане на данни с отметнато „Изчисти първо съществуващите demo_* потребители“.';
$string['demo:course_fullname'] = 'SOLA тестов курс (скрит)';
$string['demo:notify_created'] = 'Тестовият курс е готов: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Неуспешно създаване на курса: {$a}';
$string['demo:notify_seeded'] = 'Добавени: {$a->users} потребители, {$a->conversations} разговори, {$a->messages} съобщения, {$a->ratings} оценки, {$a->feedback} записи с обратна връзка.';
$string['demo:notify_seed_fail'] = 'Неуспешно добавяне на данни: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Разходи за токени и аналитика &rarr;';
$string['toc:testing'] = 'Тестова среда &rarr;';
$string['toc:back_to_course'] = '&larr; Обратно към {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Двоичният файл pdftotext не е намерен; извличането на PDF е деактивирано.';
$string['rag:pdftotext_available'] = 'pdftotext е открит в {$a}.';
$string['rag:docx_unavailable'] = 'Разширението PHP ZipArchive не е налично; извличането на DOCX е деактивирано.';
$string['rag:h5p_unavailable'] = 'H5P съдържанието не може да бъде прочетено; пропуска се.';
$string['rag:scorm_too_large'] = 'SCORM пакетът надхвърля зададения лимит за размер ({$a} MB); пропуска се.';
$string['rag:scorm_unzip_failed'] = 'SCORM пакетът не може да бъде разархивиран; пропуска се.';
$string['rag:transcript_fetch_failed'] = 'Не може да се извлече транскрипция от {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL на транскрипцията е блокиран от Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Открита е вградена медия: {$a}';
$string['rag:embed_transcript_attached'] = 'Транскрипция е прикачена за {$a}';

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
