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
 * Language strings for local_ai_course_assistant — Ukrainian.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI Асистент Курсу';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Зберігає розмови AI-тьютора за користувачем і курсом.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Ідентифікатор користувача, якому належить розмова.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Ідентифікатор курсу, до якого належить розмова.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Назва розмови.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Час створення розмови.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Час останньої зміни розмови.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Зберігає окремі повідомлення в розмовах AI-тьютора.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Ідентифікатор користувача, який надіслав повідомлення.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Ідентифікатор курсу, до якого належить повідомлення.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Роль відправника повідомлення (користувач або асистент).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Зміст повідомлення.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Кількість токенів, використаних для повідомлення.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Час створення повідомлення.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Використання чату AI-тьютора';
$string['ai_course_assistant:viewanalytics'] = 'Перегляд аналітики AI-тьютора';
$string['ai_course_assistant:manage'] = 'Керування налаштуваннями AI-тьютора (роль Адміністратора)';

// Settings.
$string['settings:enabled'] = 'Увімкнути AI Асистент Курсу';
$string['settings:enabled_desc'] = 'Увімкніть або вимкніть віджет AI Асистента на сторінках курсу.';
$string['settings:provider'] = 'Постачальник AI';
$string['settings:provider_desc'] = 'Виберіть постачальника AI для відповідей у чаті.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Локальний)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_gemini'] = 'Google Gemini';
$string['settings:provider_custom'] = 'Власний (сумісний з OpenAI)';
$string['settings:apikey'] = 'Ключ API';
$string['settings:apikey_desc'] = 'Ключ API для обраного постачальника. Не потрібен для Ollama.';
$string['settings:model'] = 'Назва моделі';
$string['settings:model_desc'] = 'Модель для використання. Стандартне значення залежить від постачальника.';
$string['settings:apibaseurl'] = 'Базова URL API';
$string['settings:apibaseurl_desc'] = 'Базова URL для API. Заповнюється автоматично за постачальником, але може бути змінена.';
$string['settings:systemprompt'] = 'Шаблон системного повідомлення';
$string['settings:systemprompt_desc'] = 'Системне повідомлення, яке надсилається AI. Використовуйте заповнювачі: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:temperature'] = 'Температура';
$string['settings:temperature_desc'] = 'Контролює випадковість. Нижчі значення більш зосереджені. Діапазон: 0.0 до 2.0.';
$string['settings:maxhistory'] = 'Максимальна історія розмови';
$string['settings:maxhistory_desc'] = 'Максимальна кількість пар повідомлень, що включаються в запити API.';
$string['settings:avatar'] = 'Іконка чату';
$string['settings:avatar_desc'] = 'Виберіть іконку аватара для кнопки віджету.';
$string['settings:avatar_color'] = 'Колір рамки аватара';
$string['settings:avatar_color_desc'] = 'Колір рамки кнопки аватара. Використовуйте hex-значення.';
$string['settings:avatar_fill'] = 'Колір фону аватара';
$string['settings:avatar_fill_desc'] = 'Колір заливки всередині кнопки аватара. Використовуйте hex-значення.';
$string['settings:display_mode'] = 'Режим відображення';
$string['settings:display_mode_desc'] = 'Як SOLA відображається на сторінці.';
$string['settings:display_mode_widget'] = 'Віджет (плаваюча кнопка)';
$string['settings:display_mode_drawer'] = 'Бічна панель (правий край)';
$string['settings:position'] = 'Позиція віджету';
$string['settings:position_desc'] = 'Позиція віджету на сторінці (лише в режимі віджету).';
$string['settings:position_br'] = 'Внизу праворуч';
$string['settings:position_bl'] = 'Внизу ліворуч';
$string['settings:position_tr'] = 'Вгорі праворуч';
$string['settings:position_tl'] = 'Вгорі ліворуч';
$string['chat:settings'] = 'Налаштування плагіна';
$string['analytics:viewdashboard'] = 'Перегляд панелі аналітики';

// Course settings.
$string['coursesettings:title'] = 'Налаштування AI курсу';
$string['coursesettings:enabled'] = 'Увімкнути перевизначення курсу';
$string['coursesettings:enabled_desc'] = 'Якщо увімкнено, налаштування нижче перевизначають глобальну конфігурацію AI.';
$string['coursesettings:using_global'] = 'Використання глобальних налаштувань';
$string['coursesettings:saved'] = 'Налаштування AI курсу збережені.';
$string['coursesettings:ell_pronunciation'] = 'Режим практики вимови';
$string['coursesettings:ell_pronunciation_desc'] = 'Показувати чіп «Практика вимови» для студентів у цьому курсі.';
$string['coursesettings:ell_pronunciation_enable'] = 'Увімкнути чіп практики вимови';
$string['coursesettings:rag'] = 'Семантичний пошук (RAG)';
$string['coursesettings:rag_desc'] = 'Увімкнути генерацію з підсиленням пошуком для цього курсу.';
$string['coursesettings:rag_enable'] = 'Увімкнути RAG для цього курсу';
$string['coursesettings:speaking_practice'] = 'Практика мовлення';
$string['coursesettings:speaking_practice_desc'] = 'Показувати чіп «Практика мовлення» для студентів.';
$string['coursesettings:speaking_practice_enable'] = 'Увімкнути чіп практики мовлення';
$string['coursesettings:global_settings_link'] = 'Глобальні налаштування AI';
$string['coursesettings:token_usage'] = 'Використання токенів та вартість';
$string['coursesettings:token_usage_desc'] = 'Перегляд використання токенів, оцінок вартості та розбивки за студентами.';

// Language.
$string['lang:switch'] = 'Так, змінити';
$string['lang:dismiss'] = 'Ні, дякую';
$string['lang:change'] = 'Змінити мову';
$string['lang:english'] = 'Англійська';

// Chat widget.
$string['chat:title'] = 'SOLA';
$string['chat:placeholder'] = 'Задайте питання...';
$string['chat:send'] = 'Надіслати';
$string['chat:close'] = 'Закрити чат';
$string['chat:open'] = 'Відкрити SOLA';
$string['chat:change_avatar'] = 'Змінити аватар';
$string['chat:clear'] = 'Очистити історію';
$string['chat:clear_confirm'] = 'Ви впевнені, що хочете очистити історію чату?';
$string['chat:copy'] = 'Копіювати розмову';
$string['chat:copied'] = 'Розмову скопійовано до буфера обміну';
$string['chat:copy_failed'] = 'Не вдалося скопіювати';
$string['chat:greeting'] = 'Привіт, {$a}! Я SOLA, ваш онлайн-помічник Saylor.';
$string['chat:thinking'] = 'Думаю...';
$string['chat:error'] = 'Вибачте, щось пішло не так. Будь ласка, спробуйте ще раз.';
$string['chat:error_auth'] = 'Помилка автентифікації. Зверніться до адміністратора.';
$string['chat:error_ratelimit'] = 'Забагато запитів. Зачекайте трохи і спробуйте ще раз.';
$string['chat:error_unavailable'] = 'Сервіс AI тимчасово недоступний.';
$string['chat:error_notconfigured'] = 'SOLA ще не налаштований. Зверніться до адміністратора.';
$string['chat:expand'] = 'Розгорнути чат';
$string['chat:collapse'] = 'Згорнути чат';
$string['chat:mic'] = 'Скажіть своє питання';
$string['chat:mic_error'] = 'Помилка мікрофона. Перевірте дозволи браузера.';
$string['chat:mic_unsupported'] = 'Голосовий ввід не підтримується в цьому браузері.';
$string['chat:newline_hint'] = 'Shift+Enter для нового рядка';
$string['chat:you'] = 'Ви';
$string['chat:assistant'] = 'SOLA';
$string['chat:history_loaded'] = 'Попередню розмову завантажено.';
$string['chat:history_cleared'] = 'Історію чату очищено.';
$string['chat:offtopic_warning'] = 'Здається, ваше питання не стосується цього курсу. Намагайтеся залишатися в темі!';
$string['chat:offtopic_ended'] = 'Ваш доступ до AI-тьютора тимчасово призупинено на {$a} хвилин.';
$string['chat:offtopic_locked'] = 'Ваш доступ тимчасово призупинено. Спробуйте знову через {$a} хвилин.';
$string['chat:escalated_to_support'] = 'Я не зміг повністю відповісти на ваше питання, тому було створено тікет підтримки. Номер звернення: {$a}';
$string['chat:studyplan_intro'] = 'Я можу допомогти вам створити навчальний план! Скажіть, скільки годин на тиждень ви можете приділити навчанню.';

// Quiz.
$string['chat:quiz'] = 'Практичний тест';
$string['chat:quiz_setup_title'] = 'Практичний тест';
$string['chat:quiz_questions'] = 'Кількість питань';
$string['chat:quiz_topic'] = 'Тема';
$string['chat:quiz_topic_guided'] = 'Керований AI (на основі вашого прогресу)';
$string['chat:quiz_topic_default'] = 'Поточний зміст курсу';
$string['chat:quiz_topic_custom'] = 'Власна тема…';
$string['chat:quiz_custom_placeholder'] = 'Введіть тему або питання...';
$string['chat:quiz_start'] = 'Почати тест';
$string['chat:quiz_cancel'] = 'Скасувати';
$string['chat:quiz_loading'] = 'Генерація тесту…';
$string['chat:quiz_error'] = 'Не вдалося згенерувати тест. Спробуйте ще раз.';
$string['chat:quiz_correct'] = 'Правильно!';
$string['chat:quiz_wrong'] = 'Неправильно.';
$string['chat:quiz_next'] = 'Наступне питання';
$string['chat:quiz_finish'] = 'Переглянути результати';
$string['chat:quiz_score'] = 'Тест завершено! Результат: {$a->score} з {$a->total}.';
$string['chat:quiz_summary'] = 'Я завершив практичний тест з {$a->total} питань на тему «{$a->topic}» і отримав {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Навчальні цілі';
$string['chat:quiz_topic_modules'] = 'Тема курсу';
$string['chat:quiz_subtopic_select'] = 'Виберіть конкретний елемент…';
$string['chat:quiz_topic_sections'] = 'Розділи курсу';
$string['chat:quiz_score_great'] = 'Відмінна робота! Ви справді знаєте цей матеріал.';
$string['chat:quiz_score_good'] = 'Гарна спроба! Продовжуйте повторювати для зміцнення розуміння.';
$string['chat:quiz_score_practice'] = 'Продовжуйте практикуватися. Перегляньте відповідний матеріал і спробуйте ще раз.';
$string['chat:quiz_review_heading'] = 'Огляд';
$string['chat:quiz_retake'] = 'Повторити тест';
$string['chat:quiz_exit'] = 'Вийти з тесту';
$string['chat:quiz_your_answer'] = 'Ваша відповідь';
$string['chat:quiz_correct_answer'] = 'Правильна відповідь';

// Conversation starters.
$string['chat:starters_label'] = 'Початки розмови';
$string['chat:starter_help_page'] = 'Допомога з цією сторінкою';
$string['chat:starter_quiz'] = 'Перевір мене';
$string['chat:starter_study_plan'] = 'Навчальний план';
$string['chat:starter_ask_anything'] = 'Запитайте будь-що';
$string['chat:starter_review_practice'] = 'Повторення та практика';
$string['chat:starter_ell_practice'] = 'Практика мовлення';
$string['chat:starter_ell_pronunciation'] = 'Практика вимови';
$string['chat:starter_speak'] = 'Скажіть стартове повідомлення';
$string['chat:starter_explain'] = 'Поясни це';
$string['chat:starter_key_concepts'] = 'Ключові поняття';
$string['chat:starter_help_me'] = 'Допомога ШІ';
$string['chat:starter_ai_coach'] = 'ШІ-тренер';
$string['chat:starter_quick_study'] = 'Швидке навчання';
$string['chat:starter_help_lesson'] = 'Поясни це';
$string['chat:starter_prompt_coach'] = 'AI Prompt Coach';
$string['chat:starter_help_lesson_prompt'] = 'Чи можете ви допомогти мені зрозуміти поточний урок? Дайте мені огляд ключових понять.';
$string['chat:starter_study_plan_prompt'] = 'Я хочу спланувати сьогоднішнє навчання. Запитайте мене: (1) чого я хочу досягти сьогодні, і (2) скільки часу я маю.';
$string['chat:starter_explain_prompt'] = 'Чи можете ви пояснити найважливішу концепцію в цьому курсі до цього моменту?';

// Reset.
$string['chat:reset'] = 'Почати спочатку';

// Starter admin settings.
$string['starters:admin_title'] = 'Налаштування початків розмови';
$string['starters:admin_desc'] = 'Налаштуйте чіпи початків розмови, що показуються студентам.';
$string['starters:add_new'] = 'Додати новий';
$string['starters:save'] = 'Зберегти зміни';
$string['starters:saved'] = 'Конфігурацію збережено.';
$string['starters:reset_defaults'] = 'Скинути до стандартних';
$string['starters:reset_confirm'] = 'Скинути все до стандартних? Власні елементи буде видалено.';
$string['starters:reset_done'] = 'Скинуто до стандартних.';
$string['starters:back_settings'] = 'Назад до налаштувань';
$string['starters:course_section'] = 'Початки розмови';
$string['starters:course_desc'] = 'Увімкніть або вимкніть окремі стартери для цього курсу.';

// Topic picker.
$string['chat:topic_picker_title'] = 'На чому ви хочете зосередитися?';
$string['chat:topic_picker_title_help'] = 'З чим вам потрібна допомога?';
$string['chat:topic_picker_title_explain'] = 'Що ви хочете, щоб я пояснив?';
$string['chat:topic_picker_title_study'] = 'На якій області ви хочете зосередитися?';
$string['chat:topic_start'] = 'Продовжити';

// Expand.
$string['chat:fullscreen'] = 'Повний екран';
$string['chat:exitfullscreen'] = 'Вийти з повного екрану';

// Settings panel.
$string['chat:language'] = 'Змінити мову';
$string['chat:settings_panel'] = 'Налаштування';
$string['chat:settings_language'] = 'Мова';
$string['chat:settings_avatar'] = 'Аватар';
$string['chat:settings_voice'] = 'Голос';
$string['chat:settings_voice_admin'] = 'Налаштування голосу керуються в панелі адміністрування.';

// Voice mode.
$string['chat:voice_mode'] = 'Голосовий режим';
$string['chat:voice_title'] = 'Поговоріть із SOLA';
$string['chat:voice_copy'] = 'Проведіть природну голосову розмову з вашим помічником.';
$string['chat:voice_ready'] = 'Готовий до початку';
$string['chat:voice_start'] = 'Почати розмову';
$string['chat:voice_end'] = 'Завершити голосову сесію';
$string['chat:voice_connecting'] = 'Підключення...';
$string['chat:voice_listening'] = 'Слухаю...';
$string['chat:voice_speaking'] = 'SOLA говорить...';
$string['chat:voice_idle'] = 'Готовий';
$string['chat:voice_error'] = 'Голосове з\'єднання не вдалося. Перевірте налаштування.';
$string['chat:quiz_locked'] = 'SOLA призупинено під час тестів для підтримки академічної доброчесності. Успіхів!';

// Bottom nav.
$string['chat:mode_nav'] = 'Навігація режимів';
$string['chat:mode_chat'] = 'Чат';
$string['chat:mode_voice'] = 'Голос';
$string['chat:mode_history'] = 'Історія';

// History panel.
$string['chat:history_title'] = 'Історія розмов';
$string['chat:history_subtitle'] = 'Ваші останні повідомлення в цьому курсі.';
$string['chat:history_empty'] = 'Ще немає розмов.';
$string['chat:history_refresh'] = 'Оновити';

// Debug panel.
$string['chat:debug_context'] = 'Налагодження контексту';
$string['chat:debug_context_toggle'] = 'Перемкнути інспектор налагодження контексту';
$string['chat:debug_context_copy'] = 'Копіювати';
$string['chat:debug_context_browser'] = 'Знімок браузера';
$string['chat:debug_context_request'] = 'Останній запит SSE';
$string['chat:debug_context_prompt'] = 'Відповідь сервера';

// Quiz hide settings.
$string['settings:quiz_hide_heading'] = 'Видимість сторінки тесту';
$string['settings:quiz_hide_heading_desc'] = 'Контролюйте, чи відображається віджет SOLA на сторінках тестів Moodle.';
$string['settings:hide_on_quiz_for_students'] = 'Приховати SOLA на сторінках тестів для студентів';
$string['settings:hide_on_quiz_for_students_desc'] = 'Повністю приховати віджет SOLA на всіх сторінках тестів для студентів.';
$string['settings:hide_on_quiz_for_staff'] = 'Приховати SOLA на сторінках тестів для персоналу';
$string['settings:hide_on_quiz_for_staff_desc'] = 'Повністю приховати віджет SOLA на всіх сторінках тестів для викладачів та адміністраторів.';

// Wellbeing.
$string['settings:wellbeing_heading'] = 'Добробут та безпека';
$string['settings:wellbeing_heading_desc'] = 'SOLA виявляє вирази дистресу та відповідає з емпатією та ресурсами підтримки.';
$string['settings:wellbeing_enabled'] = 'Увімкнути підтримку добробуту';
$string['settings:wellbeing_enabled_desc'] = 'SOLA виявлятиме ознаки емоційного дистресу та надаватиме кризові ресурси.';

// Voice mode settings.
$string['settings:realtime_heading'] = 'Голосовий режим (OpenAI Realtime)';
$string['settings:realtime_enabled'] = 'Увімкнути голосовий режим';
$string['settings:realtime_enabled_desc'] = 'Дозволяє студентам вести голосові розмови в реальному часі.';
$string['settings:realtime_apikey'] = 'Ключ API OpenAI (Голос & TTS)';
$string['settings:realtime_apikey_desc'] = 'Використовується для голосового режиму та кнопки TTS на повідомленнях.';
$string['settings:realtime_voice'] = 'Голос SOLA';
$string['settings:realtime_voice_desc'] = 'Голос для голосового режиму та кнопки TTS.';

// Mobile.
$string['mobile_welcome'] = 'Привіт, {$a}!';
$string['mobile_welcome_sub'] = 'Я SOLA, ваш помічник навчання. Чим я можу допомогти вам сьогодні?';
$string['mobile_placeholder'] = 'Задайте питання...';
$string['mobile_clear'] = 'Очистити історію';
$string['mobile_disabled'] = 'SOLA недоступний для цього курсу.';
$string['mobile_chip_concepts'] = 'Ключові поняття';
$string['mobile_chip_studyplan'] = 'Навчальний план';
$string['mobile_chip_quiz'] = 'Перевір мене';
