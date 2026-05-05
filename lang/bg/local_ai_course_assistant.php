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
$string['attachment:attach'] = 'Прикачи';
$string['attachment:attach_image_or_pdf'] = 'Прикачи изображение или PDF';
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
$string['reminder:email_body_no_hours'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['reminder:email_body_with_prefs'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Your study plan: {$a->hours_per_week} hours per week, on {$a->preferred_days} ({$a->preferred_time}).

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['studytip:pomodoro']            = 'Try the Pomodoro technique: 25 minutes of focused study, then a 5-minute break.';
$string['studytip:review_notes']        = 'Review your notes from the last session before starting new material.';
$string['studytip:active_recall']       = 'Test yourself on what you learned recently — active recall strengthens memory.';
$string['studytip:summarise']           = 'Take a few minutes to summarise what you have learned in your own words.';
$string['studytip:mix_modes']           = 'Mix different types of study: reading, practice problems, and teaching concepts to others.';
$string['studytip:tackle_hard_first']   = 'Start with the most challenging topic while your energy is highest.';
$string['studytip:connect_concepts']    = 'Create connections between new concepts and what you already know.';
$string['studytip:short_breaks']        = 'Take short breaks to stay focused — a refreshed mind learns better.';
$string['studyplan:hours_out_of_range'] = 'Hours per week must be between {$a->min} and {$a->max}. Got {$a->got}. Please tell SOLA a different number and it will save your plan.';
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
$string['chat:quiz_topic_adaptive']      = 'Адаптивен — фокус върху слабите ми места';
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
$string['settings:provider_together'] = 'Together AI (Llama 3.1 8B/70B/405B Turbo, Mistral, Qwen)';
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
$string['chat:voice_panel_title']       = 'Talk with {$a}';

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

// v5.2.0: per-quiz SOLA assistance level controls.
$string['quizsettings:title'] = 'Quiz Assistance Levels';
$string['quizsettings:desc'] = 'Choose how much help SOLA gives on each quiz. "Default" uses the legacy rule: ungraded quizzes get full help, graded quizzes hide the widget. Use "Coach" to keep SOLA available on a graded quiz but block direct answers.';
$string['quizsettings:colquiz'] = 'Quiz';
$string['quizsettings:colgrade'] = 'Max grade';
$string['quizsettings:collevel'] = 'Assistance level';
$string['quizsettings:coleffective'] = 'Effective';
$string['quizsettings:level_default'] = 'Default (by grade)';
$string['quizsettings:level_full'] = 'Full help';
$string['quizsettings:level_coach'] = 'Coach (Socratic only)';
$string['quizsettings:level_hidden'] = 'Hidden';
$string['quizsettings:ungraded'] = 'Ungraded';
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
$string['usersettings:download'] = 'Изтегли моите данни в {$a}';
$string['usersettings:download_help'] = 'Изтеглете пълно копие в JSON на всеки запис в {$a}, свързан с вашия профил: разговори, съобщения, оценки, учебни планове, напомняния, резултати от упражненията, отговори на анкети, профил и одитни записи.';
$string['usersettings:privacy_notice_link'] = 'Прочетете известието за поверителност на {$a}';
$string['privacy:title'] = 'Известие за поверителност на {$a}';
$string['admin:user_data:title'] = '{$a} — експорт и изтриване на данни на учащ';
$string['admin:user_data:intro'] = 'Оперативен път за заявка по член 15 (достъп) или член 17 (изтриване) от GDPR. Намерете учащ по Moodle потребителски идентификатор, прегледайте редовете, които плъгинът съхранява за него, и експортирайте или изтрийте.';
$string['admin:user_data:search_label'] = 'Moodle потребителски идентификатор';
$string['admin:user_data:lookup'] = 'Търси';
$string['admin:user_data:not_found'] = 'Не е намерен потребител с този идентификатор.';
$string['admin:user_data:download'] = 'Изтегли всички данни на учащия като JSON';
$string['admin:user_data:purge'] = 'Изтрий всички данни на учащия за този потребител';
$string['admin:user_data:confirm_purge'] = 'Да се изтрие ли завинаги всеки запис за {$a}? Това обхваща разговори, съобщения, оценки, учебни планове, напомняния, профили, резултати от упражненията, анкети, одитни записи и обратна връзка. Действието не може да бъде отменено.';
$string['admin:user_data:purged'] = 'Всички данни за избрания потребител са изтрити.';
$string['chat:consent_heading'] = 'Преди да започнете чат с {$a->product}';
$string['chat:consent_body'] = '{$a->product} е учебен асистент с изкуствен интелект. Вашите съобщения и отговорите на {$a->product} се съхраняват в Moodle базата данни на {$a->institution}, а последните десет реплики се изпращат към одобрен доставчик на AI модел, за да отговори на въпросите ви. Първото ви име се споделя за персонализация; никаква друга идентифицираща информация не се изпраща на доставчика на AI. По всяко време можете да изтеглите данните, да ги изтриете или да спрете да използвате {$a->product}.';
$string['chat:consent_accept'] = 'Разбрах, стартирай {$a}';
$string['chat:consent_privacy_link'] = 'Прочетете пълното известие за поверителност';
$string['task:audit_cleanup'] = 'Почистване на одитната таблица на AI Course Assistant';
$string['task:conversation_retention'] = 'Метач за задържане на разговорите на AI Course Assistant';
$string['settings:audit_retention_days'] = 'Задържане на одитния журнал (дни)';
$string['settings:audit_retention_days_desc'] = 'Ежедневна планирана задача изтрива одитни редове, по-стари от това. 0 деактивира. По подразбиране 365.';
$string['settings:conversation_retention_days'] = 'Задържане на разговорите (дни)';
$string['settings:conversation_retention_days_desc'] = 'Ежедневна планирана задача изтрива редове на разговори, чието последно изменение е по-старо от това. 0 деактивира. По подразбиране 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Доверени крайни точки SSRF';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Един URL на ред. Изброените хостове заобикалят проверките loopback / частен-IP / само-https в SSRF валидатора на SOLA. Използвайте това само за самостоятелно хоствани LLM в мрежа, която контролирате — например <code>http://localhost:11434</code> за локален Ollama, <code>http://10.0.0.5:8000</code> за vLLM pod в същия VPC. Сравнението съвпада по scheme + host + port; всеки път се игнорира. По подразбиране празно (блокира всичко вътрешно). Редовете, започващи с <code>#</code>, са коментари.';
$string['task:learner_weekly_digest']    = 'AI асистент за курс - Седмичен дайджест за обучаемия';
$string['learner_digest:subject']        = 'Вашата седмица с {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Искате ли кратък седмичен имейл с това, върху което да се фокусирате?';
$string['next_best_action:get_started']           = 'Започни с {$a->title}. Отвори ме и попитай "помогни ми с {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Започни с {$a->title}. Модулът "{$a->module}" покрива тази тема.';
$string['next_best_action:review']                = 'Прегледай основите на {$a->title} — отвори ме и попитай "обясни ми {$a->title} от нулата".';
$string['next_best_action:review_with_module']    = 'Прегледай основите на {$a->title} в "{$a->module}", после ме отвори с въпроси.';
$string['next_best_action:practice']              = 'Надгради върху това, което имаш по {$a->title}. Отвори ме и попитай "дай ми решен пример за {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Упражнявай {$a->title} заедно с "{$a->module}". Отвори ме за решени примери.';
$string['next_best_action:quiz']                  = 'Затвърди {$a->title} с бърз тест. Отвори ме и избери "Тествай ме — адаптивно".';
$string['next_best_action:quiz_with_module']      = 'Затвърди {$a->title} с бърз тест. Модулът "{$a->module}" е там, където живее.';
$string['next_best_action:empty_state']           = 'Изглеждаш страхотно по всяка цел в момента — няма какво да тласкам. Продължавай.';
$string['next_best_action:header']                = 'Ето {$a} неща, върху които да се фокусираш след това:';
$string['learner_digest:unsubscribe_done_title']  = 'Отписан';
$string['learner_digest:unsubscribe_done_body']   = 'Готово — няма да получаваш повече седмични имейли за тази дисциплина от {$a->product}. Можеш да се абонираш отново по всяко време от чата в дисциплината.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Връзката за отписване вече не е валидна';
$string['learner_digest:unsubscribe_invalid_body']  = 'Тази връзка за отписване е изтекла или повредена. Можеш да управляваш предпочитанията си за имейл от настройките на курса.';
$string['active_learners:line']                   = '{$a} други в момента учат тази дисциплина.';
$string['active_learners:line_global']             = '{$a} други учат в момента.';
$string['settings:active_learners_scope']          = 'Обхват на индикатора за активни обучаеми';
$string['settings:active_learners_scope_desc']     = 'Дали индикаторът "други учат в момента" над началните точки на чата брои обучаеми само в същия курс или в целия сайт. По подразбиране <strong>глобален</strong>.';
$string['settings:active_learners_scope_global']   = 'Глобален (всеки курс)';
$string['settings:active_learners_scope_course']   = 'Само за курс';
$string['learner_digest:optin_yes']      = 'Да, изпращайте ми седмичния имейл';
$string['learner_digest:optin_no']       = 'Не, благодаря';
$string['learner_digest:optin_thanks']   = 'Записано. Ще получавате седмично резюме всеки понеделник.';
$string['learner_digest:optin_declined'] = 'Записано. Без имейли - просто ме отворете, когато искате преглед.';
$string['settings:xai_proxy_url'] = 'URL на xAI Realtime прокси';
$string['settings:xai_proxy_url_desc'] = 'Публичен wss URL на услугата SOLA xAI Realtime прокси (например wss://voice.example.com/xai-rt/rt). Когато това е зададено заедно с JWT тайната, гласът на xAI преминава през проксито и главният xAI API ключ никога не достига браузъра. Оставете празно за връщане към директна връзка (не се препоръчва за продукция).';
$string['settings:xai_proxy_jwt_secret'] = 'JWT тайна на xAI Realtime прокси';
$string['settings:xai_proxy_jwt_secret_desc'] = 'HS256 споделена тайна, използвана за подписване на краткосрочни сесийни токени за xAI Realtime прокси. Трябва да съвпада с тайната MOODLE_JWT_SECRET на Cloudflare Worker. Сменяйте я периодично.';
$string['admin:vendor_dpa:title'] = '{$a} — статус на DPA на доставчиците';
$string['admin:vendor_dpa:intro'] = 'Отказ от обучение, DPA и политика на задържане за всеки драйвер на AI доставчик. Използвайте таблицата, за да решите кои драйвери да активирате на вашия сайт. Маршрутизирането от ниво 2 нагоре изисква подписан DPA и договорен отказ от обучение.';
$string['admin:vendor_dpa:maintenance_note'] = 'Тази таблица се поддържа в classes/vendor_registry.php. Обновете я при промяна на ToS на доставчик.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Имейл на длъжностното лице за защита на данните';
$string['settings:dpo_email_desc'] = 'Имейл за контакт, показан в известието за поверителност за учащите под "Контакт". Оставете празно, за да скриете реда. Преименуваните инсталации трябва да насочат този адрес към собственото си длъжностно лице за защита на данните.';
$string['settings:privacy_external_url'] = 'URL на страницата за поверителност на институцията';
$string['settings:privacy_external_url_desc'] = 'Връзка към страницата за поверителност на ниво институция, показана в известието за поверителност за учащите под "Контакт". Оставете празно, за да скриете реда.';
$string['settings:privacy_notice_override'] = 'Заместване на известието за поверителност (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Ако е зададено, този HTML заменя стандартното брандирано известие за поверителност, показвано на /local/ai_course_assistant/privacy.php. Използвайте го, за да въведете одобрения от Юристите текст за вашата институция без редакция на код. Оставете празно, за да се използва известието по подразбиране, чийто текст се извежда от седемте конфигурационни ключа на бранда.';
$string['objectives:title'] = 'Учебни цели и владеене';
$string['objectives:toggles_heading'] = 'Проследяване на владеенето';
$string['objectives:toggle_master'] = 'Активиране на проследяване на владеенето за този курс';
$string['objectives:toggle_chip'] = 'Показване на чипа за учебно владеене на студентите';
$string['objectives:toggle_chip_help'] = 'По избор. Когато е изключено, владеенето продължава да насочва асистента мълчаливо, но учащите не виждат индикатор.';
$string['objectives:toggled'] = 'Настройката е обновена.';
$string['objectives:detected_heading'] = 'Открити са {$a->count} учебни цели от {$a->source}.';
$string['objectives:source_competency'] = 'компетенции в Moodle';
$string['objectives:source_summary'] = 'обобщение на курса';
$string['objectives:source_section'] = 'съдържание на раздел или първа страница';
$string['objectives:source_page'] = 'страница на курса';
$string['objectives:source_llm'] = 'извличане с AI';
$string['objectives:source_manual'] = 'ръчно въвеждане';
$string['objectives:source_none'] = 'няма автоматичен източник';
$string['objectives:import_detected'] = 'Импортирай тези открити цели';
$string['objectives:import_llm'] = 'Извлечи цели с AI';
$string['objectives:llm_empty'] = 'Извличането с AI не върна цели. Опитайте по-късно или ги въведете ръчно.';
$string['objectives:imported'] = 'Импортирани са {$a} цели.';
$string['objectives:none_detected'] = 'Не са открити учебни цели автоматично. Въведете ги ръчно по-долу или използвайте извличане с AI.';
$string['objectives:list_heading'] = 'Текущи цели';
$string['objectives:col_code'] = 'Код';
$string['objectives:col_title'] = 'Заглавие';
$string['objectives:col_source'] = 'Източник';
$string['objectives:col_actions'] = 'Действия';
$string['objectives:add_heading'] = 'Добави цел';
$string['objectives:add_submit'] = 'Добави целта';
$string['objectives:saved'] = 'Целта е запазена.';
$string['objectives:deleted'] = 'Целта е изтрита.';
$string['objectives:delete_confirm'] = 'Да се изтрие ли тази цел и цялата история на опитите по нея?';
$string['objectives:delete_all'] = 'Изтрий всички цели за този курс';
$string['objectives:delete_all_confirm'] = 'Да се изтрият ли всички цели и цялата история на опитите за този курс? Действието не може да бъде отменено.';
$string['objectives:deleted_all'] = 'Всички цели за този курс са изтрити.';
$string['mastery:chip_aria'] = 'Статус на учебно владеене';
$string['mastery:popover_aria'] = 'Подробности за учебно владеене';
$string['mastery:chip_label'] = '{$a->mastered} от {$a->total} усвоени';
$string['mastery:status_mastered'] = 'усвоено';
$string['mastery:status_learning'] = 'в процес';
$string['mastery:status_not_started'] = 'не е започнато';
$string['mastery:popover_empty'] = 'За този курс не са конфигурирани учебни цели.';
$string['settings:mastery_heading'] = 'Проследяване на владеенето';
$string['settings:mastery_heading_desc'] = 'Включваща се по курс функция, която маркира отговорите на тестовете и репликите от разговора с асистента спрямо учебните цели на курса, след което подава компактна снимка на владеенето в системната подсказка, за да насочи задаването на въпроси. Дискретна по подразбиране: учащите не виждат нищо, освен ако превключвателят за чипа за курса не е включен.';
$string['settings:mastery_threshold'] = 'Праг на усвояване';
$string['settings:mastery_threshold_desc'] = 'Плъзгаща се точност, при която или над която дадена цел се счита за усвоена. От 0.0 до 1.0. По подразбиране 0.85.';
$string['settings:mastery_window'] = 'Прозорец на опитите';
$string['settings:mastery_window_desc'] = 'Брой на най-новите опити по цел, които се претеглят в плъзгащата се точност. По подразбиране 8.';
$string['settings:mastery_decay_enabled']        = 'Активиране на спад на майсторство';
$string['settings:mastery_decay_enabled_desc']   = 'Когато е активирано, резултатите от майсторството намаляват с времето спрямо най-новата времева марка на опит. Преди това усвоена цел се връща към "учене" след достатъчно време. Не пада под "учене". <strong>По подразбиране изключено в v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Период на полуразпад на спада (дни)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Период на полуразпад в дни. Резултатът се умножава по 0.5 ^ (дни от последния опит / период на полуразпад). По подразбиране 30. Използва се само когато спадът е активиран.';
$string['settings:mastery_classifier_model'] = 'Модел на класификатора';
$string['settings:mastery_classifier_model_desc'] = 'Модел, използван за класифициране на репликите на асистента спрямо целите. Оставете празно, за да се наследи моделът по подразбиране на AI доставчика; в противен случай посочете евтин модел като gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Тежест на класификатора';
$string['settings:mastery_classifier_weight_desc'] = 'Колко тежи опит от разговор спрямо опит от тест (1.0). По подразбиране 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Праг на увереност на класификатора';
$string['settings:mastery_classifier_threshold_desc'] = 'Минимална увереност на класификатора, необходима за регистриране на опит от разговор. От 0.0 до 1.0. По подразбиране 0.7.';
$string['chat:mode_progress'] = 'Напредък';
$string['objectives:toggle_dashboard'] = 'Показване на раздела с табло за напредъка на студентите';
$string['objectives:toggle_dashboard_help'] = 'По избор. Добавя раздел Напредък до Чат / Глас / История във виджета. Разделът показва на учащите кои цели са усвоили, кои са в процес и кои не са започнали.';
$string['mastery:dashboard_title'] = 'Вашият учебен напредък';
$string['mastery:dashboard_subtitle'] = 'Владеенето се измерва от вашите отговори на тестовете и упражненията в чата. Продължавайте — дълбочината е по-важна от обхвата.';
$string['mastery:dashboard_refresh'] = 'Опресни';
$string['mastery:section_mastered'] = 'Усвоени';
$string['mastery:section_learning'] = 'В процес';
$string['mastery:section_not_started'] = 'Все още не са започнати';
$string['mastery:summary_label'] = '{$a->mastered} от {$a->total} цели са усвоени';
$string['mastery:ask_about'] = 'Попитайте за това';
$string['mastery:celebrate'] = 'Усвоихте всяка цел в този курс. Отлична работа.';
$string['mastery:ask_template'] = 'Помогни ми да упражня и да задълбоча разбирането си по тази цел: {$a}.';
$string['instructor_dashboard:title'] = '{$a} — Course Instructor & Designer Dashboard';
$string['instructor_dashboard:short']            = 'Instructor & Designer Dashboard';
$string['coursepicker:title']                    = 'Select a course — {$a}';
$string['coursepicker:intro']                    = 'Choose a course from the list below to open this page in that course\'s context. Direct links with a courseid parameter still work as before.';
$string['coursepicker:nocourses']                = 'You do not have access to any courses where this page applies. Contact your site administrator if you believe this is incorrect.';
$string['instructor_dashboard:link'] = 'Course Instructor & Designer Dashboard';
$string['instructor_dashboard:intro'] = 'Per-course usage, mastery, and content-revision signals. Aggregate-only by default; click Show real names to bind aggregate rows to specific learners (writes a FERPA audit row).';
$string['instructor_dashboard:period'] = 'Period';
$string['instructor_dashboard:period_all'] = 'all';
$string['instructor_dashboard:gap_days'] = 'Inactive after (days)';
$string['instructor_dashboard:show_names'] = 'Show real names';
$string['instructor_dashboard:hide_names'] = 'Hide real names';
$string['instructor_dashboard:active_learners'] = 'Active learners';
$string['instructor_dashboard:total_messages'] = 'Total messages';
$string['instructor_dashboard:avg_per_learner'] = 'Avg messages / learner';
$string['instructor_dashboard:last_activity'] = 'Last activity';
$string['instructor_dashboard:mastery_heading'] = 'Mastery aggregate';
$string['instructor_dashboard:mastery_off'] = 'Mastery tracking is not enabled for this course. Turn it on from the Learning objectives & mastery page.';
$string['instructor_dashboard:topics_heading'] = 'Most-asked topics';
$string['instructor_dashboard:topics_empty'] = 'No topic data yet. Topics are extracted by a daily scheduled task; check back tomorrow.';
$string['instructor_dashboard:confusion_heading'] = 'Confusion heatmap';
$string['instructor_dashboard:confusion_empty'] = 'No per-module question data yet for this period.';
$string['instructor_dashboard:ratings_heading'] = 'Helpful / unhelpful rates';
$string['instructor_dashboard:ratings_summary'] = '{$a->positive} thumbs up, {$a->negative} thumbs down ({$a->pct}% positive). {$a->hallucinations} flagged as hallucinations.';
$string['instructor_dashboard:ratings_low_module'] = 'Low-rated assistant responses by module';
$string['instructor_dashboard:gap_heading'] = 'Engagement gap';
$string['instructor_dashboard:gap_summary'] = '{$a->not_seen} of {$a->enrolled} enrolled learners have not used the assistant in the last {$a->days} day(s).';
$string['instructor_dashboard:gap_show_sample'] = 'Show learners (sample)';
$string['instructor_dashboard:col_objective'] = 'Objective';
$string['instructor_dashboard:col_mastered'] = 'Mastered';
$string['instructor_dashboard:col_learning'] = 'In progress';
$string['instructor_dashboard:col_not_started'] = 'Not started';
$string['instructor_dashboard:col_attempts'] = 'Attempts';
$string['instructor_dashboard:col_module'] = 'Module';
$string['instructor_dashboard:col_questions'] = 'Questions asked';
$string['instructor_dashboard:col_distinct_learners'] = 'Distinct learners';
$string['instructor_dashboard:col_low_rated'] = 'Low-rated count';
$string['socratic:title'] = 'Socratic mode';
$string['socratic:toggle'] = 'Enable Socratic mode for this course';
$string['socratic:toggle_help'] = 'When on, the assistant leads with guiding questions instead of giving direct answers. Pedagogical lift; no UI change for learners. Off by default.';
$string['digest:title'] = 'Weekly digest emails';
$string['digest:toggle'] = 'Email a weekly digest to anyone with analytics access on this course';
$string['digest:toggle_help'] = 'Mondays 09:00 server time. Aggregate-only — no learner names appear in the email body. Off by default.';
$string['digest:subject'] = '{$a->product} weekly digest — {$a->course}';
$string['task:instructor_weekly_digest'] = 'AI Course Assistant weekly digest email';
$string['settings:math_render_heading'] = 'Math rendering';
$string['settings:math_render_heading_desc'] = 'Math expressions in assistant replies (LaTeX, e.g. $E=mc^2$) render via Moodle\'s built-in MathJax filter — enable filter_mathjaxloader in Site administration → Plugins → Filters → Manage filters for the math to render. Without it, expressions display as raw LaTeX text.';
$string['flashcards:title'] = 'Flashcards';
$string['flashcards:link'] = 'Flashcards (review now)';
$string['flashcards:intro'] = 'Spaced-repetition review. Reveal the answer, then self-grade with Again, Hard, or Easy. Cards you found hard come back sooner; cards you found easy spread out.';
$string['flashcards:question'] = 'Question';
$string['flashcards:answer'] = 'Answer';
$string['flashcards:reveal'] = 'Reveal answer';
$string['flashcards:again'] = 'Again';
$string['flashcards:hard'] = 'Hard';
$string['flashcards:easy'] = 'Easy';
$string['flashcards:no_due'] = 'Nothing to review right now. Generate flashcards from a course page in the assistant widget, or check back later.';
$string['flashcards:session_complete'] = 'Session complete. Good work.';
$string['flashcards:disabled'] = 'Flashcards are not enabled for this course.';
$string['flashcards:toggle'] = 'Enable flashcards for this course';
$string['flashcards:toggle_help'] = 'Adds a Generate-flashcards starter to the assistant widget and a learner review page at /local/ai_course_assistant/flashcards.php?courseid=X. Off by default.';
$string['flashcards:starter_generate'] = 'Generate flashcards from this page';
$string['flashcards:generated'] = 'Saved {$a} flashcards. Open the review page to study them.';
$string['worked_examples:toggle'] = 'Enable Worked Examples starter for this course';
$string['worked_examples:toggle_help'] = 'Adds a "Show me a worked example" starter that asks the assistant to walk through a fully solved example, then guide the learner through similar problems with progressively less scaffolding (worked → partial → blank).';
$string['worked_examples:starter'] = 'Show me a worked example';
$string['objectives:prereqs_label'] = 'prerequisites';
$string['objectives:prereqs_summary'] = 'Prerequisites: {$a}';
$string['objectives:prereqs_none'] = 'none yet — click to edit';
$string['essay_feedback:title'] = 'Essay feedback';
$string['essay_feedback:link'] = 'Essay feedback';
$string['essay_feedback:disabled'] = 'Essay feedback is not enabled for this course.';
$string['essay_feedback:intro'] = 'Paste your draft below and the assistant will score it against a rubric and suggest three concrete revisions. Aim for at least 80 words. Your essay text is only used for this feedback run — it is not saved.';
$string['essay_feedback:rubric_label'] = 'Rubric (optional)';
$string['essay_feedback:rubric_help'] = 'Paste a rubric as a bulleted list of criteria, or leave blank to use a default four-criterion rubric (thesis, evidence, organisation, mechanics).';
$string['essay_feedback:essay_label'] = 'Your essay draft';
$string['essay_feedback:submit'] = 'Get feedback';
$string['essay_feedback:scoring'] = 'Scoring your draft…';
$string['essay_feedback:too_short'] = 'Please paste at least 80 words so the assistant has something to score.';
$string['essay_feedback:error'] = 'Could not score this draft right now. Try again in a moment.';
$string['essay_feedback:result_heading'] = 'Rubric scores';
$string['essay_feedback:overall_heading'] = 'Overall';
$string['essay_feedback:revisions_heading'] = 'Top 3 revision suggestions';
$string['essay_feedback:col_criterion'] = 'Criterion';
$string['essay_feedback:col_score'] = 'Score';
$string['essay_feedback:col_feedback'] = 'Feedback';
$string['essay_feedback:toggle'] = 'Enable Essay feedback for this course';
$string['essay_feedback:toggle_help'] = 'Learners get a dedicated page to paste a draft and receive rubric-scored feedback with revision suggestions. Off by default.';
$string['sandbox:title'] = 'Python sandbox';
$string['sandbox:link'] = 'Python sandbox';
$string['sandbox:disabled'] = 'The Python sandbox is not enabled for this course.';
$string['sandbox:intro'] = 'Write and run Python entirely in your browser. The runtime is Pyodide (Python compiled to WebAssembly); your code never leaves this device. Use it to try ideas, work through course exercises, or check small scripts before submitting them.';
$string['sandbox:loading'] = 'Loading the Python runtime — this is a one-time download of about 10 MB. Future runs will be instant.';
$string['sandbox:ready'] = 'Ready. Write some code and click Run.';
$string['sandbox:load_error'] = 'Could not load the Python runtime. Check your network connection and refresh.';
$string['sandbox:code_label'] = 'Code';
$string['sandbox:run'] = 'Run';
$string['sandbox:running'] = 'Running…';
$string['sandbox:clear'] = 'Clear output';
$string['sandbox:output_heading'] = 'Output';
$string['sandbox:privacy_note'] = 'Code and output stay in your browser. Nothing is sent to any server. The runtime is loaded from a public CDN the first time only and is cached for subsequent visits.';
$string['sandbox:toggle'] = 'Enable the Python sandbox for this course';
$string['sandbox:toggle_help'] = 'Adds a learner-facing page where students can write and run Python entirely in their browser via Pyodide. Off by default. Enable for courses with code work; leave off for courses without.';

// v4.2: courses_admin page.
$string['courses_admin:title']             = 'AI Course Assistant — Courses';
$string['courses_admin:lede']              = 'Enable or disable AI Assistant per course, manage Usability Testing, or run bulk actions across many courses.';
$string['courses_admin:back_to_analytics'] = '← Back to Analytics';
$string['courses_admin:plugin_settings']   = 'Plugin Settings';
$string['courses_admin:enabled_count']     = '{$a->enabled} of {$a->total} courses have AI Assistant enabled';
$string['courses_admin:search_placeholder']= 'Search courses…';
$string['courses_admin:filter_status']     = 'AI Assistant status';
$string['courses_admin:filter_enabled']    = 'Enabled';
$string['courses_admin:filter_disabled']   = 'Disabled';
$string['courses_admin:filter_ut']         = 'Usability Testing';
$string['courses_admin:filter_ut_on']      = 'UT On';
$string['courses_admin:filter_ut_off']     = 'UT Off';
$string['courses_admin:filter_ut_inherit'] = 'UT Inherit';
$string['courses_admin:select_all']        = 'Select all';
$string['courses_admin:selected_zero']     = '(0 selected)';
$string['courses_admin:ai_assistant']      = 'AI Assistant';
$string['courses_admin:usability_testing'] = 'Usability Testing';
$string['courses_admin:enable']            = 'Enable';
$string['courses_admin:disable']           = 'Disable';
$string['courses_admin:inherit']           = 'Inherit';
$string['courses_admin:column_course']     = 'Course';
$string['courses_admin:column_has_data']   = 'Has Data';
$string['courses_admin:enabled']           = 'Enabled';
$string['courses_admin:disabled']          = 'Disabled';
$string['courses_admin:click_to_enable']   = 'Click to enable';
$string['courses_admin:click_to_disable']  = 'Click to disable';
$string['courses_admin:on']                = 'On';
$string['courses_admin:off']               = 'Off';
$string['courses_admin:global_on']         = 'Global: On';
$string['courses_admin:global_off']        = 'Global: Off';
$string['courses_admin:yes']               = 'Yes';
$string['courses_admin:no_courses']        = 'No visible courses on this site yet.';

// v4.2: anomaly digest scheduled task.
$string['task:run_anomaly_digest'] = 'Run SOLA anomaly digest';

// v4.2.3: external resources (admin + per-course).
$string['settings:external_resources_heading']      = 'External resources';
$string['settings:external_resources_heading_desc'] = 'Optional opt-in: when on, SOLA may include one or two links to reputable open educational resources alongside its course-grounded answer. Restricted to the allowlist below to keep recommendations defensible. Per-course override available on the course settings page. Default off.';
$string['settings:external_resources_enabled']      = 'Enable external resources (site-wide default)';
$string['settings:external_resources_enabled_desc'] = 'When on, SOLA may suggest links to the allowlisted external resources. Per-course "force on" / "force off" overrides this. Default off.';
$string['settings:external_resources_allowlist']    = 'External resources allowlist';
$string['settings:external_resources_allowlist_desc'] = 'One resource per line, in the format "Display Name (domain)". SOLA will only suggest links to these sites. Defaults to a small set of widely respected open-resource hosts; replace or extend as needed.';
$string['external_resources:title']      = 'External resources';
$string['external_resources:inherit']    = 'Inherit site default ({$a})';
$string['external_resources:force_on']   = 'Force on for this course';
$string['external_resources:force_off']  = 'Force off for this course';
$string['external_resources:on']         = 'on';
$string['external_resources:off']        = 'off';
$string['external_resources:toggle_help']= 'When on, SOLA may include up to two links to allowlisted open educational resources alongside its course-grounded answer. Course material always leads.';

// v4.3.0: real Redash push integration.
$string['settings:redash_base_url']           = 'Redash base URL';
$string['settings:redash_base_url_desc']      = 'Base URL of your Redash instance, e.g. https://redash.example.com. Required for the "Send to Redash" action in Learning Radar.';
$string['settings:redash_user_api_key']       = 'Redash user API key';
$string['settings:redash_user_api_key_desc']  = 'API key of a Redash user with permission to create queries against the chosen data source. Found under your Redash user profile. Different from the SOLA Redash API key (which controls inbound auth on redash_export.php).';
$string['settings:redash_data_source_id']     = 'Redash data source ID';
$string['settings:redash_data_source_id_desc']= 'Numeric id of the Redash JSON data source pointed at SOLA\'s redash_export.php. Visible in the Redash data source URL after saving.';

$string['instructor_dashboard:nav_back_course']  = '← Back to course';
$string['instructor_dashboard:nav_settings']     = 'AI Course Assistant settings';
$string['instructor_dashboard:nav_analytics']    = 'AI Course Assistant analytics';

// v4.4.0: course-page CSP setting.
$string['settings:csp_course_pages_mode']      = 'Course-page Content-Security-Policy';
$string['settings:csp_course_pages_mode_desc'] = 'Optional CSP header on course pages where the AI Course Assistant widget is active. <strong>Off</strong>: no header (default). <strong>Report-only</strong>: send <code>Content-Security-Policy-Report-Only</code> — browsers log violations but do not block. Useful for a one-week observation pass. <strong>Enforce</strong>: send <code>Content-Security-Policy</code> — browsers block off-allowlist iframe sources, fetches, and other risky loads. Helps contain the impact of arbitrary scripts pasted into Additional HTML site config (the IBL AI / Raison incident on 2026-04-29). Does not affect SOLA endpoints, which always send a stricter CSP.';
$string['settings:csp_mode_off']               = 'Off (no header on course pages)';
$string['settings:csp_mode_report_only']       = 'Report-only (log violations, do not block)';
$string['settings:csp_mode_enforce']           = 'Enforce (block off-allowlist loads)';

// v4.5.0: site-wide pedagogy defaults.
$string['settings:pedagogy_defaults_heading']      = 'Pedagogy defaults';
$string['settings:pedagogy_defaults_heading_desc'] = 'Site-wide default state for each pedagogy feature. Flip a feature on here and every course inherits it unless that course has an explicit override on its SOLA course settings page (force on / force off). On upgrade to v4.5.0, every per-course "force off" override that was set to the legacy default-off value of <code>0</code> is cleared so the new global defaults take effect cleanly. Default off — upgrades from v4.4.x are a no-op until an admin flips a feature on.';
$string['pedagogy:mastery']                = 'Mastery tracking on by default';
$string['pedagogy:mastery_desc']           = 'When on, every course inherits mastery tracking unless the course has its own override. Mastery requires curated learning objectives — courses without objectives fall back gracefully, no error.';
$string['pedagogy:socratic_mode']          = 'Socratic mode on by default';
$string['pedagogy:socratic_mode_desc']     = 'When on, SOLA leads with questions instead of direct answers in every course unless the course has its own override.';
$string['pedagogy:worked_examples']        = 'Worked examples starter on by default';
$string['pedagogy:worked_examples_desc']   = 'When on, the "Show me a worked example" conversation starter appears in every course unless the course has its own override.';
$string['pedagogy:flashcards']             = 'Flashcards on by default';
$string['pedagogy:flashcards_desc']        = 'When on, spaced-repetition flashcards are available in every course unless the course has its own override.';
$string['pedagogy:code_sandbox']           = 'Python code sandbox on by default';
$string['pedagogy:code_sandbox_desc']      = 'When on, the in-browser Python sandbox is available in every course unless the course has its own override.';
$string['pedagogy:essay_feedback']         = 'Essay feedback on by default';
$string['pedagogy:essay_feedback_desc']    = 'When on, AI essay feedback is available in every course unless the course has its own override.';
$string['pedagogy:per_course_inherit']     = 'Inherit site default ({$a})';
$string['pedagogy:per_course_force_on']    = 'Force on for this course';
$string['pedagogy:per_course_force_off']   = 'Force off for this course';
$string['pedagogy:on']                     = 'on';
$string['pedagogy:off']                    = 'off';

// v4.6.0: vendor DPA gating + override editors.
$string['settings:vendor_data_heading']      = 'Vendor & cost data';
$string['settings:vendor_data_heading_desc'] = 'Controls for the optional Vendor DPA admin page and the override editors that let admins keep the bundled vendor table and LLM rate card current without a code edit. Both override editors are JSON; an empty value falls back to the hardcoded defaults shipped with the plugin.';
$string['settings:vendor_dpa_admin_page_enabled']      = 'Show Vendor DPA admin page';
$string['settings:vendor_dpa_admin_page_enabled_desc'] = 'When on, "Vendor DPA Status" appears under Site administration → Plugins → Local plugins → AI Course Assistant. The page renders the vendor table merged with the override below. Default off — most admins do not need this surface.';
$string['settings:vendor_dpa_overrides']      = 'Vendor DPA overrides (JSON)';
$string['settings:vendor_dpa_overrides_desc'] = 'JSON object keyed by vendor id. Each value is an object whose fields override the hardcoded vendor row. Fields you do not specify fall through to the default. A new vendor key in the override is added to the table; edits apply per field. Malformed JSON is ignored at runtime — fix the parse error here when the saved value does not appear in the Vendor DPA page.';
$string['settings:rate_card_overrides']      = 'LLM rate card overrides (JSON)';
$string['settings:rate_card_overrides_desc'] = 'JSON object keyed by model name prefix. Each value is {"input": float, "output": float} in USD per 1,000,000 tokens. Replaces the bundled rate card entry for that prefix. A community-maintained source of vendor pricing JSON lives at github.com/BerriAI/litellm — multiply the input_cost_per_token / output_cost_per_token values by 1,000,000 to match this format. Auto-fetch from a configurable upstream URL is on the v4.7 roadmap.';

// v4.7.0: rate-card auto-refresh.
$string['settings:rate_card_auto_refresh']      = 'Auto-refresh from upstream';
$string['settings:rate_card_auto_refresh_desc'] = 'When on, a weekly scheduled task fetches the upstream pricing JSON, transforms it to SOLA\'s rate-card schema, and writes it to the override field above. Default on. Failures keep the previous override in place.';
$string['settings:rate_card_upstream_url']      = 'Upstream pricing URL';
$string['settings:rate_card_upstream_url_desc'] = 'URL of a JSON manifest in LiteLLM\'s schema. Default points at the community-maintained file in the LiteLLM GitHub repo. URL is checked against the SSRF allowlist before fetch.';
$string['settings:rate_card_refresh_now']        = 'Refresh now';
$string['settings:rate_card_refresh_now_label']  = 'Refresh rate card from upstream';
$string['settings:rate_card_refresh_success']    = 'Rate card refreshed: {$a} entries written.';
$string['settings:rate_card_refresh_error']      = 'Rate card refresh failed: {$a}';
$string['settings:rate_card_last_refresh_at']    = 'Last refresh: {$a}';
$string['settings:rate_card_last_refresh_success']= 'Last fetch succeeded.';
$string['settings:rate_card_never_refreshed']    = 'Never refreshed.';
$string['task:refresh_rate_card']                = 'Refresh SOLA LLM rate card from upstream';

// v4.8.0: runtime validators + RAG drift + needs-review queue.
$string['settings:validators_runtime_mode']      = 'Runtime validators';
$string['settings:validators_runtime_mode_desc'] = 'Apply the same pipeline that gates releases (PII echo, credential leak, hallucination, second-person) to every assistant response in real time. Off (default), Annotate, or Block.';
$string['settings:validators_runtime_off']       = 'Off (no runtime checks)';
$string['settings:validators_runtime_annotate']  = 'Annotate (append warning line on fail)';
$string['settings:validators_runtime_block']     = 'Block (replace with safe fallback on fail)';
$string['settings:rag_auto_reindex_drifted']      = 'Auto-reindex drifted RAG content';
$string['settings:rag_auto_reindex_drifted_desc'] = 'Daily scheduled task that re-indexes course modules whose source content was edited after the last indexed-at time. Default on.';
$string['task:auto_reindex_rag_drifted']          = 'Re-index drifted RAG content';
$string['instructor_dashboard:review_heading']     = 'Needs review';
$string['instructor_dashboard:review_intro']       = 'Pending items from this course that an instructor or course designer should look at: thumbs-down ratings, off-topic conversations, and integrity flags.';
$string['instructor_dashboard:review_empty']       = 'No items pending review. Course is clean.';
$string['instructor_dashboard:review_col_when']    = 'When';
$string['instructor_dashboard:review_col_source']  = 'Source';
$string['instructor_dashboard:review_col_who']     = 'Who';
$string['instructor_dashboard:review_col_summary'] = 'Summary';
$string['instructor_dashboard:review_resolve']     = 'Mark resolved';
$string['instructor_dashboard:review_resolved']    = 'Marked resolved.';
$string['instructor_dashboard:review_source_rating']    = 'Negative rating';
$string['instructor_dashboard:review_source_offtopic']  = 'Off-topic';
$string['instructor_dashboard:review_source_integrity'] = 'Integrity';

// v4.8.1: talking avatar (placeholder, default off, provider-neutral).
$string['pedagogy:talking_avatar']         = 'Talking avatar on by default';
$string['pedagogy:talking_avatar_desc']    = 'When on, the talking-avatar surface is enabled in every course unless the course has its own override. Requires a configured provider (D-ID, HeyGen, Tavus, or Synthesia Agents) below; otherwise the widget shows a "configure a provider" notice and the avatar does not animate.';
$string['settings:talking_avatar_heading']      = 'Talking avatar';
$string['settings:talking_avatar_heading_desc'] = 'Pick which talking-avatar vendor SOLA opens for students when the avatar surface is enabled. SOLA ships drivers for D-ID (cheapest WebRTC streaming), HeyGen (LiveKit-backed interactive avatars), Tavus (drop-in iframable Conversational Video Interface), and Synthesia Agents (real-time agent product, configured in the Synthesia dashboard). Per-provider key + persona id appear below; only the chosen provider needs to be filled in. Every outbound call is SSRF-checked.';
$string['settings:talking_avatar_provider_url']      = 'Provider API base URL (legacy)';
$string['settings:talking_avatar_provider_url_desc'] = 'v4.8.1 placeholder, kept for upgrade safety. The active drivers in v4.9.0 read their own per-provider settings; this field is only used as a fallback when an admin upgraded mid-release.';
$string['settings:talking_avatar_provider_api_key']      = 'Provider API key (legacy)';
$string['settings:talking_avatar_provider_api_key_desc'] = 'v4.8.1 placeholder, kept for upgrade safety. The active drivers in v4.9.0 read their own per-provider settings; this field is only used as a fallback when an admin upgraded mid-release.';
$string['settings:talking_avatar_provider']      = 'Talking avatar provider';
$string['settings:talking_avatar_provider_desc'] = 'Pick the vendor whose key + persona id are filled in below. Leave as <em>None</em> until the institution has signed off; the pedagogy default still appears in <em>Pedagogy defaults</em> but the widget shows a configuration notice instead of an avatar.';
$string['settings:talking_avatar_provider_none']      = 'None (avatar disabled)';
$string['settings:talking_avatar_provider_did']       = 'D-ID Streaming Talks';
$string['settings:talking_avatar_provider_heygen']    = 'HeyGen Interactive Avatar';
$string['settings:talking_avatar_provider_tavus']     = 'Tavus Conversational Video';
$string['settings:talking_avatar_provider_synthesia'] = 'Synthesia Agents (real-time)';
$string['settings:talking_avatar_did_api_key']         = 'D-ID API key';
$string['settings:talking_avatar_did_api_key_desc']    = 'Base64-encoded <code>email:api-key</code> string from <a href="https://studio.d-id.com/account-settings" target="_blank" rel="noopener">D-ID Studio → Account → API keys</a>. Sent as <code>Authorization: Basic …</code>.';
$string['settings:talking_avatar_did_persona_id']      = 'D-ID source image URL';
$string['settings:talking_avatar_did_persona_id_desc'] = 'Public HTTPS URL of the still image D-ID animates (or a Studio presenter URL such as <code>https://create-images-results.d-id.com/…</code>). Required for every stream.';
$string['settings:talking_avatar_heygen_api_key']         = 'HeyGen API key';
$string['settings:talking_avatar_heygen_api_key_desc']    = 'API key from <a href="https://app.heygen.com/settings?nav=API" target="_blank" rel="noopener">HeyGen → Settings → API</a>. Sent as <code>X-Api-Key</code>.';
$string['settings:talking_avatar_heygen_persona_id']      = 'HeyGen interactive avatar id';
$string['settings:talking_avatar_heygen_persona_id_desc'] = 'Avatar id from the HeyGen Streaming Avatar dashboard (e.g. <code>Tyler-incasualsuit-20220721</code>).';
$string['settings:talking_avatar_tavus_api_key']         = 'Tavus API key';
$string['settings:talking_avatar_tavus_api_key_desc']    = 'API key from <a href="https://platform.tavus.io/api-keys" target="_blank" rel="noopener">Tavus platform → API keys</a>. Sent as <code>x-api-key</code>.';
$string['settings:talking_avatar_tavus_persona_id']      = 'Tavus replica id';
$string['settings:talking_avatar_tavus_persona_id_desc'] = 'Replica id (the trained likeness) you want SOLA to converse as. Combine with a persona id by appending it to the API key field if needed; SOLA will pass <code>persona_id</code> through.';
$string['settings:talking_avatar_synthesia_api_key']         = 'Synthesia API key';
$string['settings:talking_avatar_synthesia_api_key_desc']    = 'API key from <a href="https://app.synthesia.io/#/account/api" target="_blank" rel="noopener">Synthesia → Account → API</a>. Sent as <code>Authorization</code> header (Synthesia accepts the raw key).';
$string['settings:talking_avatar_synthesia_persona_id']      = 'Synthesia agent id';
$string['settings:talking_avatar_synthesia_persona_id_desc'] = 'Agent id created in the Synthesia Agents dashboard. Knowledge, persona, and allowed origins are configured agent-side; SOLA only opens a session against this id.';
$string['talking_avatar:disabled']        = 'Talking avatar is not enabled for this course.';
$string['talking_avatar:unconfigured']    = 'Talking avatar is enabled but no provider has been configured. An administrator must pick a provider and supply credentials in plugin settings.';
$string['talking_avatar:session_failed']  = 'The talking-avatar provider declined the session request. Check the provider configuration or try again in a moment.';
$string['talking_avatar:viewer_title']    = 'SOLA talking avatar';
$string['talking_avatar:bundle_required'] = 'The talking-avatar viewer requires the SOLA CDN bundle to be configured. Ask an administrator to set the CDN bundle URL in plugin settings.';
$string['talking_avatar:open']            = 'Open avatar';
$string['talking_avatar:close']           = 'Close avatar';
$string['settings:avatar_rate_card_overrides']      = 'Avatar rate card overrides (JSON)';
$string['settings:avatar_rate_card_overrides_desc'] = 'JSON object keyed by avatar provider with a single per-minute USD rate. Replaces the bundled rate for that provider. Example: <pre>{ "did": 0.18, "heygen": 0.40, "tavus": 0.25 }</pre> Empty = use the v4.10.0 bundled defaults: D-ID $0.30/min, HeyGen $0.50/min, Tavus $0.30/min, Synthesia $0.40/min. Set this to your contracted rate so the analytics dashboard reflects the institution\'s actual cost.';
$string['settings:talking_avatar_did_webhook_secret']         = 'D-ID webhook signing secret';
$string['settings:talking_avatar_did_webhook_secret_desc']    = 'Optional. When set, D-ID can POST session-end events to <code>{wwwroot}/local/ai_course_assistant/talking_avatar_webhook.php?provider=did</code> signed with this secret as <code>X-DID-Signature</code> (hex HMAC-SHA256). Webhook rows take precedence over the frontend heartbeat. Empty = handler off, the heartbeat + hourly sweeper handle session-end exclusively.';
$string['settings:talking_avatar_heygen_webhook_secret']      = 'HeyGen webhook signing secret';
$string['settings:talking_avatar_heygen_webhook_secret_desc'] = 'Optional. When set, HeyGen can POST session-end events signed with this secret as <code>X-HeyGen-Signature</code> (hex HMAC-SHA256). Empty = handler off.';
$string['settings:talking_avatar_tavus_webhook_secret']       = 'Tavus webhook signing secret';
$string['settings:talking_avatar_tavus_webhook_secret_desc']  = 'Optional. When set, Tavus can POST conversation-end events signed with this secret as <code>X-Tavus-Signature</code> (hex HMAC-SHA256). Empty = handler off.';
$string['settings:talking_avatar_synthesia_webhook_secret']   = 'Synthesia webhook signing secret';
$string['settings:talking_avatar_synthesia_webhook_secret_desc'] = 'Optional. When set, Synthesia can POST agent session-end events signed with this secret as <code>X-Synthesia-Signature</code> (hex HMAC-SHA256). Empty = handler off.';
$string['analytics:avatar_cost_heading']     = 'Talking-avatar usage';
$string['analytics:avatar_cost_provider']    = 'Provider';
$string['analytics:avatar_cost_sessions']    = 'Sessions';
$string['analytics:avatar_cost_minutes']     = 'Minutes';
$string['analytics:avatar_cost_rate']        = 'Per-minute rate';
$string['analytics:avatar_cost_total']       = 'Estimated total';
$string['analytics:avatar_cost_empty']       = 'No talking-avatar sessions in the selected period.';
$string['task:sweep_avatar_sessions']        = 'Close stale talking-avatar sessions';
$string['settings:prompt_debug_enabled']      = 'Log assembled system prompt to file';
$string['settings:prompt_debug_enabled_desc'] = 'When on, every chat-turn writes the full assembled system prompt and per-section character counts to <code>moodledata/temp/sola_prompt_debug.log</code> (rolling at ~1MB). Default off. Use to measure prompt size empirically and audit which sections contribute the most tokens. The log contains the system prompt only (no learner input or PII).';
$string['settings:socratic_verbose']      = 'Verbose Socratic mode prompt';
$string['settings:socratic_verbose_desc'] = 'When on, Socratic-mode courses receive the full ~600-token do/don\'t directive originally added in v3.9.30. When off (default), they receive a single-line directive that modern hosted models follow reliably and saves ~600 tokens per turn. Turn this on if a course is running on a weaker self-hosted model that needs the explicit scaffolding.';
$string['settings:prompt_budget_chars']      = 'System prompt character budget';
$string['settings:prompt_budget_chars_desc'] = 'Maximum total size of the assembled system prompt before the user message, in characters. The structured prompt builder organises sections by category (identity, course context, learner state, behaviour, markers, safety) and drops or truncates the lowest-priority sections when the budget is exceeded. Safety guidance is always preserved in full. Default 8,000 characters (~2,000 tokens). Lower values reduce per-turn cost; higher values allow more course content to land in-prompt.';
$string['settings:current_page_content_maxchars']      = 'Current page content cap (characters)';
$string['settings:current_page_content_maxchars_desc'] = 'Maximum number of characters of the current page\'s text injected into the system prompt as the "Current Page Content" section. Default 12,000 keeps the prior behaviour where the full page (up to that cap) is sent — best for accuracy on page-specific questions. Cost-conscious sites can clamp this lower (e.g. 3,000-4,000) to reduce per-turn token spend, at the risk that a question whose answer is in the truncated tail of a long page will not be answered as accurately. Clamped to the range 500-12,000. Independent of <code>prompt_budget_chars</code>: this caps just the page section; the budget caps the whole prompt.';
$string['settings:prompt_verbosity']      = 'Prompt verbosity';
$string['settings:prompt_verbosity_desc'] = 'Default verbosity for instruction blocks (Socratic mode, external resources). Concise (default) is what modern hosted models follow reliably; standard adds explicit scaffolding for mid-tier models; verbose keeps the heavyweight v3.9.30-era guidance for weaker self-hosted models. Per-course override available via <code>prompt_verbosity_course_&lt;id&gt;</code>.';
$string['settings:prompt_verbosity_concise']  = 'Concise (recommended for hosted models)';
$string['settings:prompt_verbosity_standard'] = 'Standard';
$string['settings:prompt_verbosity_verbose']  = 'Verbose (for weaker self-hosted models)';
$string['settings:prompt_metrics_enabled']      = 'Capture per-section prompt metrics';
$string['settings:prompt_metrics_enabled_desc'] = 'When on (default), every chat turn writes one JSON line per assembled prompt to <code>moodledata/sola_prompt_metrics/YYYY-MM-DD.log</code> with per-category char counts. Last 7 days kept. The metrics admin page aggregates these for the budget recommendation. No PII is recorded — only section sizes. Turn off if your institution prefers no metrics file at all.';
$string['settings:prompt_budget_auto_tune']      = 'Auto-tune system prompt budget daily';
$string['settings:prompt_budget_auto_tune_desc'] = 'When on, a daily cron task (03:20 server time) applies the budget recommendation surfaced on the <a href="/local/ai_course_assistant/prompt_metrics.php">Prompt metrics</a> admin page. Default off — the recommendation always shows on the page; auto-apply only fires when the institution opts in. Manual "Apply recommendation" button is unaffected by this toggle.';
$string['task:auto_tune_prompt_budget']          = 'Auto-tune SOLA prompt budget from observed metrics';
$string['prompt_metrics:title']                  = 'Prompt metrics + budget recommendation';
$string['prompt_metrics:subtitle']               = 'Per-section prompt sizes captured over the last 7 days. Used to recommend a value for the System prompt character budget setting.';
$string['prompt_metrics:no_data']                = 'No prompt metrics recorded yet. Send a few chat turns from a learner account, then refresh this page. (If the metrics capture flag is off in plugin settings, no data will accumulate.)';
$string['prompt_metrics:headline']               = 'Headline';
$string['prompt_metrics:samples']                = 'Samples (chat turns over last 7 days)';
$string['prompt_metrics:avg_total']              = 'Average total prompt size';
$string['prompt_metrics:max_total']              = 'Maximum prompt size observed';
$string['prompt_metrics:avg_budget']             = 'Budget at time of capture';
$string['prompt_metrics:pct_truncated']          = 'Turns where any section was truncated';
$string['prompt_metrics:pct_dropped']            = 'Turns where any section was dropped';
$string['prompt_metrics:last_seen']              = 'Most recent sample';
$string['prompt_metrics:by_category']            = 'Average chars per category';
$string['prompt_metrics:category']               = 'Category';
$string['prompt_metrics:avg_chars']              = 'Avg chars';
$string['prompt_metrics:recommendation']         = 'Budget recommendation';
$string['prompt_metrics:rec_insufficient_data']  = 'Need at least 30 chat turns of data to make a confident recommendation. Keep collecting samples and check back.';
$string['prompt_metrics:rec_optimal']            = 'Current budget looks well-tuned for the observed traffic. No change recommended.';
$string['prompt_metrics:current_budget']         = 'Current budget';
$string['prompt_metrics:recommended']            = 'Recommended budget';
$string['prompt_metrics:apply']                  = 'Apply recommendation';
$string['prompt_metrics:applied']                = 'Applied: budget changed from {$a->old} to {$a->new}. {$a->reason}';
$string['prompt_metrics:noop']                   = 'No change applied: {$a}';
$string['prompt_metrics:auto_tune_heading']      = 'Daily auto-tune';
$string['prompt_metrics:auto_tune_on']           = 'Daily auto-tune is ON. The recommendation will be applied automatically every night at 03:20 server time.';
$string['prompt_metrics:auto_tune_off']          = 'Daily auto-tune is OFF. The recommendation is shown here for review; nothing is applied automatically. Toggle on in plugin settings if you want unattended daily tuning.';
$string['prompt_metrics:settings_link']          = 'Open plugin settings to toggle auto-tune.';

// v5.3.0: Empathetic communications + carryover memory (English fallback).
$string['task:milestone_check'] = 'Send daily milestone reflection emails (v5.3.0)';
$string['task:struggle_signal_review'] = 'Review struggle signals into private learner memory (v5.3.0)';
$string['empathy:title'] = 'Empathetic communications and carryover memory (v5.3.0)';
$string['empathy:desc'] = 'Three coordinated features that make SOLA feel more like a coach who listens. Goals capture why the learner is here. Carryover memory remembers what has been hard before so SOLA can offer a different angle. Milestones celebrate streaks and completions by email. Each feature has an independent kill switch and learner opt-in. Struggle signals never leave the chat — no email is ever sent about a difficult session.';
$string['empathy:outreach_master_enabled'] = 'Master outreach kill switch';
$string['empathy:outreach_master_enabled_desc'] = 'Off by default on a fresh install. When off, NO empathetic email of any kind ever fires, regardless of the per-feature switches below. Turn this on once you have reviewed the per-feature defaults and per-learner consent flow.';
$string['empathy:goals_enabled'] = 'Enable career goal conversations';
$string['empathy:goals_enabled_desc'] = 'Lets learners volunteer two short answers (why they are here, what they want to become) that feed personalisation. In-chat only; no emails. Safe to leave on.';
$string['empathy:milestones_enabled'] = 'Enable milestone reflection emails';
$string['empathy:milestones_enabled_desc'] = 'Sends a short warm email when a learner reaches a 7-day streak, 30-day streak, or course completion. Requires the master switch above plus per-learner consent. Hard cap of one email per learner per 7 days across all channels.';
$string['empathy:memory_enabled'] = 'Enable carryover personalisation memory';
$string['empathy:memory_enabled_desc'] = 'Lets SOLA carry small private notes about what has been hard for a learner across sessions, so the next reply can offer a different angle. Bounded (max 5 notes per learner per course, 90-day TTL). Learner-editable. Never visible to instructors.';
$string['empathy:struggle_enabled'] = 'Enable struggle classifier';
$string['empathy:struggle_enabled_desc'] = 'Off by default. Lets SOLA detect sustained frustration over multiple turns and quietly record a sticking-point note in the carryover memory above. Output is in-chat only; no email is ever sent about a struggle session. Auto-purges signal data after 7 days.';
$string['empathy:outreach_dryrun'] = 'Dry-run outreach (log without sending)';
$string['empathy:outreach_dryrun_desc'] = 'When on, the milestone scheduled task records audit rows as if it sent emails but does not actually email anyone. Use this on a fresh install to verify the cooldown and consent logic before going live.';
$string['goals:starter_title'] = 'Set my learning goals';
$string['goals:starter_intro'] = "Mind sharing why you are taking this course? It helps me give you better answers.";
$string['goals:q1_label'] = 'What brought you to this course?';
$string['goals:q2_label'] = "What's the bigger thing this is helping you toward? A degree, a job, a project of your own, something else?";
$string['goals:q3_label'] = 'Anything I should keep in mind while we work together?';
$string['goals:save'] = 'Save my goals';
$string['goals:dismiss'] = 'Not now';
$string['goals:edit'] = 'Edit goals';
$string['goals:clear'] = 'Clear my goals';
$string['goals:cleared'] = 'Your goals have been cleared.';
$string['goals:saved'] = 'Thanks for sharing.';
$string['comms:title'] = 'My communications';
$string['comms:desc'] = 'Choose which automated emails SOLA may send you. Off by default. You can change this any time.';
$string['comms:milestones_label'] = 'Email me when I reach a milestone (7-day streak, 30-day streak, course completion).';
$string['comms:audit_log_title'] = 'What SOLA has sent me';
$string['comms:audit_log_empty'] = 'SOLA has not sent you any emails.';
$string['comms:memory_title'] = "What SOLA has remembered about how I learn";
$string['comms:memory_desc'] = 'These notes are private to your chat with SOLA. They help SOLA pick a different angle when a topic is hard. Clear any time.';
$string['comms:memory_clear'] = 'Clear all memory notes';
$string['milestone:streak_subject'] = '{$a->days}-day streak in {$a->coursename}';
$string['milestone:streak_body_text'] = "Hi {\$a->firstname},\n\nYou have shown up {\$a->days} days in a row in {\$a->coursename}. That kind of consistency is the part of learning that is hardest to fake.\n\nWhenever you are ready, SOLA is here.\n\n— {\$a->institution}";
$string['milestone:completion_subject'] = 'You finished {$a->coursename}';
$string['milestone:completion_body_text'] = "Hi {\$a->firstname},\n\nYou finished {\$a->coursename}. That is a real thing you did.\n\nIf you want to keep going, SOLA can help you pick a related next course or revisit a topic you found interesting.\n\n— {\$a->institution}";
$string['milestone:trigger_streak7'] = '7-day activity streak reached';
$string['milestone:trigger_streak30'] = '30-day activity streak reached';
$string['milestone:trigger_completion'] = 'Course completion recorded';
