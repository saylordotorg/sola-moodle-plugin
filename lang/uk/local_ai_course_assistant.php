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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['task:run_meta_ai_query'] = 'Запустити заплановий запит аналітики Радар навчання';

// Settings.
$string['settings:enabled'] = 'Увімкнути AI Асистент Курсу';
$string['settings:enabled_desc'] = 'Увімкніть або вимкніть віджет AI Асистента на сторінках курсу.';
$string['settings:default_course_mode'] = 'Типове значення для нових курсів';
$string['settings:default_course_mode_desc'] = 'Керує тим, чи відображається SOLA на курсі, коли не зроблено вибір для конкретного курсу. Нові інсталяції за замовчуванням встановлюються на "Вимкнено за замовчуванням", щоб адміністратори могли вмикати курс за курсом зі сторінки Analytics або сторінки Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Вимкнено за замовчуванням (увімкнути для кожного курсу)';
$string['settings:default_course_mode_all'] = 'Увімкнено на всіх курсах';
$string['settings:auto_open'] = 'Автоматичне відкриття при першому відвідуванні';
$string['settings:auto_open_desc'] = 'Коли увімкнено, шухляда SOLA відкривається автоматично під час першого відвідування студентом кожного курсу. Подальші завантаження сторінок у тому ж курсі не відкривають шухляду повторно — стан відстежується для кожного курсу в браузері студента через localStorage. Застосовується на комп\'ютері та мобільному пристрої. Можна перевизначити для кожного курсу на сторінці Course AI Settings.';
$string['settings:comparison_providers'] = 'Постачальники для порівняння (вибір LLM)';
$string['settings:comparison_providers_desc'] = 'Додайте додаткових провайдерів AI до вбудованого перемикача LLM у віджеті, щоб адміністратори могли порівнювати відповіді різних провайдерів. Використовуйте таблицю нижче для додавання рядків. Стовпець температури є необов\'язковим (залиште порожнім, щоб використовувати глобальну температуру). Формат зберігання: provider_id|api_key|model1,model2|temperature. Основний провайдер, налаштований вище, завжди включається автоматично. Лише адміністратори з правами керування бачать перемикач; студенти його ніколи не бачать. Дійсні provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Постачальник AI за замовчуванням';
$string['settings:provider_desc'] = 'Виберіть постачальника AI для завершень чату. Виберіть "Moodle AI (core_ai subsystem)", щоб маршрутизувати запити через вбудовану конфігурацію AI Moodle за адресою Site admin > AI; поля API-ключа, моделі та базової URL-адреси нижче ігноруються в цьому режимі. Стрімінг, використання інструментів та prompt caching недоступні через core_ai — відповіді доставляються як один фрагмент. Використовуйте прямого постачальника для найкращого досвіду учня.';
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
$string['coursesettings:sola_enabled'] = 'SOLA на цьому курсі';
$string['coursesettings:sola_enabled_toggle'] = 'Показувати віджет SOLA на цьому курсі';
$string['coursesettings:sola_enabled_desc'] = 'Керує тим, чи відображається чат-віджет SOLA на цьому курсі. Типове значення для всього сайту встановлюється в налаштуваннях плагіна в розділі General > Default for new courses.';
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
$string['chat:clear'] = 'Очистити екран';
$string['chat:clear_confirm'] = 'Очистити видимі повідомлення? Повна історія чату залишається збереженою і може бути завантажена знову через повторне відкриття віджета.';
$string['chat:copy'] = 'Копіювати розмову';
$string['chat:copied'] = 'Розмову скопійовано до буфера обміну';
$string['chat:copy_failed'] = 'Не вдалося скопіювати';
$string['chat:greeting'] = 'Привіт, {$a}! Я SOLA. Чим можу допомогти сьогодні?';
$string['chat:thinking'] = 'Думаю...';
$string['chat:error'] = 'Вибачте, щось пішло не так. Будь ласка, спробуйте ще раз.';
$string['chat:error_auth'] = 'Помилка автентифікації. Зверніться до адміністратора.';
$string['chat:error_ratelimit'] = 'Забагато запитів. Зачекайте трохи і спробуйте ще раз.';
$string['chat:error_unavailable'] = 'Сервіс AI тимчасово недоступний.';
$string['chat:error_notconfigured'] = 'SOLA ще не налаштований. Зверніться до адміністратора.';
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
$string['chat:starter_help_page'] = 'Допомога з цим';
$string['chat:starter_quiz'] = 'Перевір мене з цього';
$string['chat:starter_study_plan'] = 'Навчальний план';
$string['chat:starter_ask_anything'] = 'Запитайте будь-що';
$string['chat:starter_review_practice'] = 'Повторення та практика';
$string['chat:starter_ai_project_coach'] = 'Тренер AI-проєкту';
$string['chat:starter_ell_practice'] = 'Практика розмови';
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
$string['chat:mode_history'] = 'Нотатки';

// History panel.
$string['chat:history_title'] = 'Нотатки та історія розмов';
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

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Доставка фронтенду';
$string['settings:cdn_heading_desc'] = 'Обслуговуйте фронтенд-ресурси SOLA (JS/CSS) із зовнішнього CDN замість файлової системи Moodle. Це дозволяє оновлювати фронтенд без оновлення плагіна. Залиште URL CDN порожнім для використання локальних файлів плагіна.';
$string['settings:cdn_url'] = 'Базова URL CDN';
$string['settings:cdn_url_desc'] = 'Базова URL-адреса, де розміщено sola.min.js та sola.min.css. Приклад: https://your-org.github.io/sola-cdn. Залиште порожнім для використання локальних файлів плагіна.';
$string['settings:cdn_version'] = 'Версія ресурсів CDN';
$string['settings:cdn_version_desc'] = 'Рядок версії, що додається до URL CDN для скидання кешу (cache busting). Оновлюйте після кожного розгортання CDN (напр. 3.2.4 або commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Загальне використання';
$string['analytics:tab_bycourse'] = 'За курсом';
$string['analytics:tab_comparison'] = 'AI проти тих, хто не використовує';
$string['analytics:tab_byunit'] = 'За розділом';
$string['analytics:tab_usagetypes'] = 'Типи використання';
$string['analytics:tab_themes'] = 'Теми';
$string['analytics:tab_feedback'] = 'Відгуки про AI';
$string['analytics:total_students'] = 'Усього студентів';
$string['analytics:active_users'] = 'Активні користувачі AI';
$string['analytics:msgs_per_student'] = 'Повідомлень на студента';
$string['analytics:avg_session'] = 'Середня тривалість сеансу';
$string['analytics:return_rate'] = 'Показник повернення';
$string['analytics:total_sessions'] = 'Усього сеансів';
$string['analytics:thumbs_up'] = 'Подобається';
$string['analytics:thumbs_down'] = 'Не подобається';
$string['analytics:hallucination_flags'] = 'Позначки неточності';
$string['analytics:msgs_to_resolution'] = 'Повідомлень до вирішення';
$string['analytics:helpful'] = 'Корисно';
$string['analytics:not_helpful'] = 'Не корисно';
$string['analytics:flag_hallucination'] = 'Ця відповідь містить неточну інформацію';
$string['analytics:submit_rating'] = 'Надіслати';
$string['analytics:thanks_feedback'] = 'Дякуємо за ваш відгук';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:history_saved_subtitle'] = 'Збережені відповіді залишаються на цьому пристрої для цього курсу.';
$string['chat:history_saved_empty'] = 'Збережіть відповідь ШІ, щоб побачити її тут.';
$string['chat:history_views_label'] = 'Перегляди історії';
$string['chat:history_view_saved'] = 'Збережені';
$string['chat:history_view_recent'] = 'Історія';
$string['chat:debug_refresh'] = 'Оновити';
$string['chat:debug_copy_all'] = 'Копіювати все';
$string['chat:debug_close'] = 'Закрити';
$string['chat:language_switch'] = 'Змінити мову';
$string['chat:language_dismiss'] = 'Відхилити пропозицію мови';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Вибрати постачальника LLM';
$string['chat:llm_model_label'] = 'Модель';
$string['chat:llm_model_select'] = 'Вибрати модель LLM';
$string['chat:footer_usertesting'] = 'Тестування зручності';
$string['chat:footer_feedback'] = 'Відгук';
$string['chat:voice_panel_title'] = 'Говоріть з {$a} (Експериментально)';

// Additional translated strings.
$string['analytics:active_students'] = 'Active students';
$string['analytics:all_time'] = 'All time';
$string['analytics:avg_messages_per_student'] = 'Avg messages per student';
$string['analytics:avg_response_length'] = 'Avg response length';
$string['analytics:avg_tokens'] = 'Avg tokens / response';
$string['analytics:common_prompts'] = 'Common Prompt Patterns';
$string['analytics:common_prompts_desc'] = 'Frequently recurring question patterns from students. Review these to identify systemic gaps in course content.';
$string['analytics:daily_messages'] = 'Daily message volume';
$string['analytics:escalation_count'] = 'Escalated to support';
$string['analytics:export'] = 'Export data';
$string['analytics:frequency'] = 'Frequency';
$string['analytics:hotspots'] = 'Course Hotspots';
$string['analytics:hotspots_desc'] = 'Course sections most frequently referenced in student questions. Higher counts may indicate areas where students need more support.';
$string['analytics:last_30_days'] = 'Last 30 days';
$string['analytics:last_7_days'] = 'Last 7 days';
$string['analytics:mention_count'] = 'Mentions';
$string['analytics:no_data'] = 'No analytics data available yet. Data will appear once students begin using the AI tutor.';
$string['analytics:offtopic_rate'] = 'Off-topic rate';
$string['analytics:overview'] = 'Overview';
$string['analytics:prompt_pattern'] = 'Pattern';
$string['analytics:provider'] = 'Provider';
$string['analytics:provider_comparison'] = 'AI Provider Comparison';
$string['analytics:provider_comparison_desc'] = 'Compare performance across AI providers used in this course.';
$string['analytics:recent_activity'] = 'Recent Activity';
$string['analytics:response_count'] = 'Responses';
$string['analytics:section'] = 'Section';
$string['analytics:studyplan_adoption'] = 'Students with study plans';
$string['analytics:timerange'] = 'Time range';
$string['analytics:title'] = 'AI Tutor Analytics';
$string['analytics:total_conversations'] = 'Total conversations';
$string['analytics:total_messages'] = 'Total messages';
$string['analytics:total_tokens'] = 'Total tokens';
$string['analytics:usage_trends'] = 'Usage Trends';
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
$string['messageprovider:study_notes'] = 'Study session notes';
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
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Stores student study plans.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'The course the study plan belongs to.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Hours per week the student plans to study.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'The study plan details in JSON format.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'The ID of the user who owns the study plan.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores'] = 'Stores practice session scores and AI feedback.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:ai_feedback'] = 'AI-generated feedback on the practice session.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:courseid'] = 'The course the practice session belongs to.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:overall_score'] = 'The overall score achieved.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:scores'] = 'Per-criterion scores in JSON format.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:session_type'] = 'The type of practice session (conversation or pronunciation).';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:timecreated'] = 'The time the score was recorded.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:userid'] = 'The ID of the user who completed the practice.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Stores study reminder preferences and subscriptions.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'The reminder channel (email or whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'The user\'s country code for regulatory compliance.';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'The email address or phone number for reminders.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'The ID of the user subscribed to reminders.';
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
$string['reminder:email_body'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Your study plan suggests {$a->hours_per_week} hours per week for this course.

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['reminder:email_subject'] = 'Study Reminder: {$a}';
$string['reminder:study_tip_prefix'] = 'Today\'s study focus: ';
$string['reminder:whatsapp_body'] = 'Study Reminder for {$a->coursename}: {$a->message} (Opt out: {$a->unsubscribe_url})';
$string['remoteconfigurl'] = 'Remote config URL';
$string['remoteconfigurl_desc'] = 'URL to a JSON file containing remotely-managed SOLA configuration (system prompt, instruction blocks, model default). Must be HTTPS. Leave blank to use the default GitHub URL. Local admin settings always take priority over remote config values.';
$string['rubric:done'] = 'Готово';
$string['rubric:encourage_high'] = 'Чудово! Продовжуйте!';
$string['rubric:encourage_low'] = 'Добрий початок! Регулярна практика допоможе.';
$string['rubric:encourage_mid'] = 'Добре! Продовжуйте практикуватися.';
$string['rubric:overall'] = 'Загалом';
$string['rubric:practice_again'] = 'Практикуватися знову';
$string['rubric:score_title_conversation'] = 'Бали за розмовну практику';
$string['rubric:score_title_pronunciation'] = 'Бали за вимову';
$string['rubric:scoring'] = 'Оцінювання...';
$string['settings:avatar_saylor'] = '{$a} Logo (Default)';
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
$string['settings:faq_content'] = 'FAQ Content';
$string['settings:faq_content_desc'] = 'Enter FAQ entries (one per line in the format: Q: question | A: answer). These will be provided to the AI to answer common support questions.';
$string['settings:faq_heading'] = 'FAQ & Support';
$string['settings:faq_heading_desc'] = 'Configure the centralized FAQ and Zendesk support ticket integration.';
$string['settings:institution_name'] = 'Institution Name';
$string['settings:institution_name_desc'] = 'The name of the institution displayed in the system prompt, avatar labels, and demo content. Change this when rebranding.';
$string['settings:model_desc_dynamic'] = 'Leave blank to use the provider\'s default model automatically. Each provider has a built-in default that stays current (e.g. gpt-4o for OpenAI, claude-sonnet-4 for Claude, mistral-large-latest for Mistral). Only enter a model name if you want to override the default. If a model is misspelled or deprecated, SOLA will automatically fall back to the provider\'s default.';
$string['settings:offtopic_action'] = 'Off-topic Action';
$string['settings:offtopic_action_desc'] = 'What to do when the off-topic limit is reached.';
$string['settings:offtopic_action_end'] = 'Temporarily lock access';
$string['settings:offtopic_action_warn'] = 'Warn and redirect';
$string['settings:offtopic_enabled'] = 'Enable Off-topic Detection';
$string['settings:offtopic_enabled_desc'] = 'Instruct the AI to detect and redirect off-topic conversations.';
$string['settings:offtopic_heading'] = 'Off-topic Detection';
$string['settings:offtopic_heading_desc'] = 'Configure how the chat handles off-topic conversations.';
$string['settings:offtopic_lockout_duration'] = 'Lockout Duration (minutes)';
$string['settings:offtopic_lockout_duration_desc'] = 'How long (in minutes) a student loses access to the AI tutor after exceeding the off-topic limit. Default: 30 minutes.';
$string['settings:offtopic_max'] = 'Max Off-topic Messages';
$string['settings:offtopic_max_desc'] = 'Number of consecutive off-topic messages before taking action.';
$string['settings:rag_chunksize'] = 'Chunk Size (words)';
$string['settings:rag_chunksize_desc'] = 'Target number of words per content chunk when indexing course material. Smaller chunks are more precise; larger chunks provide more context.';
$string['settings:rag_enabled'] = 'Enable RAG (Semantic Search)';
$string['settings:rag_enabled_desc'] = 'When enabled, the AI tutor uses semantic search to retrieve relevant course content for each query instead of stuffing all content into the system prompt.';
$string['settings:rag_heading'] = 'RAG / Semantic Search';
$string['settings:rag_heading_desc'] = 'Retrieval-Augmented Generation: index course content as embeddings and retrieve only the most relevant chunks at query time. Reduces token usage and supports all content types. Requires an embedding API.';
$string['settings:rag_topk'] = 'Top-K Chunks';
$string['settings:rag_topk_desc'] = 'Number of most relevant chunks to retrieve per user query and inject into the system prompt.';
$string['settings:reminders_email_enabled'] = 'Enable Email Reminders';
$string['settings:reminders_email_enabled_desc'] = 'Allow students to opt in to study reminders via email.';
$string['settings:reminders_whatsapp_enabled'] = 'Enable WhatsApp Reminders';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Allow students to opt in to study reminders via WhatsApp (requires WhatsApp API configuration).';
$string['settings:studyplan_enabled'] = 'Enable Study Planning';
$string['settings:studyplan_enabled_desc'] = 'Allow the AI tutor to help students create personalized study plans based on their available time.';
$string['settings:studyplan_heading'] = 'Study Planning & Reminders';
$string['settings:studyplan_heading_desc'] = 'Configure study planning features and reminder notifications.';
$string['settings:systemprompt_default'] = 'You are SOLA (Online Learning Assistant), an AI learning coach for {{institution}} students enrolled in "{{coursename}}". The student\'s role is {{userrole}}.

## Role
Provide supportive, course-aligned academic help that encourages learning, practice, motivation, and responsible AI use. You complement faculty-designed courses but do not replace instructors.

## Core Rules
- Ground all academic responses in approved course materials or institutional information.
- Do not invent content or go beyond course scope.
- Redirect learners back to course materials when questions fall outside the course. After two off-topic requests, steer the conversation back to learning.
- When generating practice questions, draw them directly from the course material.

## Course Structure
{{coursetopics}}

## Course Content
The following is the actual text of the course pages and materials. This is your primary knowledge source for this course.

{{coursecontent}}

## What SOLA Can Help With
- Explain concepts and summarize lessons
- Give examples and practice questions
- Suggest study strategies
- Encourage persistence and progress

## What SOLA Will Not Do
- Make academic or policy decisions
- Provide medical, legal, or mental health counseling
- Assist with academic dishonesty or bypassing learning

## Tone and Style
Communicate in a friendly, caring, encouraging, witty, and motivating way. Be concise, supportive, and respectful.

## Safety
Do not engage in abusive, hateful, discriminatory, or inappropriate conversations. Set firm but kind boundaries and redirect to productive topics.';
$string['settings:whatsapp_api_token'] = 'WhatsApp API Token';
$string['settings:whatsapp_api_token_desc'] = 'Authentication token for the WhatsApp API.';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'The API endpoint for sending WhatsApp messages (e.g. Twilio, MessageBird). Must accept POST with JSON body containing "to", "from", and "body" fields.';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp Blocked Countries';
$string['settings:whatsapp_blocked_countries_desc'] = 'Comma-separated ISO 3166-1 alpha-2 country codes where WhatsApp reminders are not allowed due to local regulations (e.g. "CN,IR,KP").';
$string['settings:whatsapp_from_number'] = 'WhatsApp Sender Number';
$string['settings:whatsapp_from_number_desc'] = 'The phone number to send WhatsApp messages from (with country code, e.g. +14155238886).';
$string['settings:zendesk_email'] = 'Zendesk API Email';
$string['settings:zendesk_email_desc'] = 'Email address of the Zendesk user for API authentication (with /token suffix).';
$string['settings:zendesk_enabled'] = 'Enable Zendesk Escalation';
$string['settings:zendesk_enabled_desc'] = 'When the AI cannot resolve a support question, automatically create a Zendesk ticket with a conversation summary.';
$string['settings:zendesk_subdomain'] = 'Zendesk Subdomain';
$string['settings:zendesk_subdomain_desc'] = 'Your Zendesk subdomain (e.g. "mycompany" for mycompany.zendesk.com).';
$string['settings:zendesk_token'] = 'Zendesk API Token';
$string['settings:zendesk_token_desc'] = 'API token for Zendesk authentication.';
$string['task:index_course_content'] = 'Index course content for RAG semantic search';
$string['task:run_integrity_checks'] = 'Run daily SOLA plugin integrity checks';
$string['task:send_inactivity_reminders'] = 'Send weekly inactivity reminder emails';
$string['task:send_reminders'] = 'Send AI tutor study reminders';
$string['unsubscribe:already'] = 'You have already been unsubscribed from these reminders.';
$string['unsubscribe:invalid'] = 'Invalid or expired unsubscribe link.';
$string['unsubscribe:resubscribe'] = 'Changed your mind? You can re-enable reminders through the AI tutor chat.';
$string['unsubscribe:success'] = 'You have been successfully unsubscribed from study reminders for this course.';
$string['unsubscribe:title'] = 'Unsubscribe from Study Reminders';
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
$string['usersettings:confirm_delete_all'] = 'Are you sure you want to permanently delete ALL your AI tutor data across all courses? This action cannot be undone.';
$string['usersettings:confirm_delete_course'] = 'Are you sure you want to permanently delete all your AI tutor data for the course "{$a}"? This action cannot be undone.';
$string['usersettings:data_deleted'] = 'Your data has been deleted.';
$string['usersettings:delete_all_button'] = 'Delete All My Data';
$string['usersettings:delete_all_title'] = 'Delete All Your Data';
$string['usersettings:delete_all_warning'] = 'This will permanently delete all your AI tutor conversations across all courses. This action cannot be undone.';
$string['usersettings:delete_course_data'] = 'Delete course data';
$string['usersettings:intro'] = 'Manage your AI tutor chat data and privacy settings';
$string['usersettings:last_activity'] = 'Last activity';
$string['usersettings:messages'] = 'Messages';
$string['usersettings:no_data'] = 'You haven\'t used the AI tutor yet. Your usage data will appear here once you start chatting.';
$string['usersettings:privacy_info'] = 'Your conversations with the AI tutor are stored to provide you with continuous support throughout your course. You have full control over this data and can delete it at any time.';
$string['usersettings:title'] = 'AI Course Assistant - Your Data';
$string['usersettings:total_conversations'] = 'Conversations';
$string['usersettings:total_messages'] = 'Total messages';
$string['usersettings:usage_stats'] = 'Your Usage Statistics';

// Testing Environment admin page and TOC quick links (v3.9.4+).
$string['demo:title'] = 'Тестове середовище';
$string['demo:heading'] = 'Тестове середовище';
$string['demo:intro'] = 'Ця сторінка створює тестовий курс, який <strong>прихований від студентів</strong> (visible=0), і наповнює його фіктивними студентами, AI-розмовами, оцінками та відгуками. Корисно для попереднього перегляду Analytics Dashboard або перевірки змін плагіна без впливу на реально зарахованих студентів.';
$string['demo:step1'] = 'Крок 1: тестовий курс';
$string['demo:step2'] = 'Крок 2: додати фіктивних студентів і AI-чати';
$string['demo:course_exists'] = 'Тестовий курс існує: <strong>{$a->fullname}</strong> (коротка назва <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'прихований';
$string['demo:badge_visible'] = 'видимий для студентів';
$string['demo:no_course'] = 'Тестовий курс не знайдено. Натисніть нижче, щоб створити.';
$string['demo:create_btn'] = 'Створити прихований тестовий курс';
$string['demo:open_course'] = 'Відкрити курс &rarr;';
$string['demo:seed_intro'] = 'Створює demo_student_001, demo_student_002, ..., зараховує їх на тестовий курс і вставляє синтетичні розмови, повідомлення, оцінки та відгуки. Запустіть знову, щоб додати більше даних, або позначте «спочатку очистити», щоб почати спочатку.';
$string['demo:users_label'] = 'Користувачі';
$string['demo:weeks_label'] = 'Тижні';
$string['demo:clear_label'] = 'Спочатку очистити існуючих користувачів demo_*';
$string['demo:seed_btn'] = 'Додати студентів і чати';
$string['demo:view_analytics'] = 'Переглянути аналітику для цього курсу &rarr;';
$string['demo:footer'] = 'Створені тут дані зберігаються в стандартних таблицях користувачів / зарахувань Moodle і у власних таблицях розмов плагіна. Усі фіктивні користувачі мають імена користувачів, що починаються з <code>demo_student_</code>, тож їх легко фільтрувати або видаляти. Щоб видалити їх, запустіть крок наповнення знову з позначеним «Спочатку очистити існуючих користувачів demo_*».';
$string['demo:course_fullname'] = 'Тестовий курс SOLA (прихований)';
$string['demo:notify_created'] = 'Тестовий курс готовий: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Не вдалося створити курс: {$a}';
$string['demo:notify_seeded'] = 'Додано: {$a->users} користувачів, {$a->conversations} розмов, {$a->messages} повідомлень, {$a->ratings} оцінок, {$a->feedback} записів відгуків.';
$string['demo:notify_seed_fail'] = 'Не вдалося додати дані: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Вартість токенів та аналітика &rarr;';
$string['toc:testing'] = 'Тестове середовище &rarr;';
$string['toc:back_to_course'] = '&larr; Назад до {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Бінарний файл pdftotext не знайдено; вилучення PDF вимкнено.';
$string['rag:pdftotext_available'] = 'pdftotext виявлено в {$a}.';
$string['rag:docx_unavailable'] = 'Розширення PHP ZipArchive недоступне; вилучення DOCX вимкнено.';
$string['rag:h5p_unavailable'] = 'Не вдалося прочитати вміст H5P; пропускається.';
$string['rag:scorm_too_large'] = 'Пакет SCORM перевищує налаштоване обмеження розміру ({$a} МБ); пропускається.';
$string['rag:scorm_unzip_failed'] = 'Не вдалося розпакувати пакет SCORM; пропускається.';
$string['rag:transcript_fetch_failed'] = 'Не вдалося отримати транскрипцію з {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL транскрипції заблоковано викликом Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Виявлено вбудоване медіа: {$a}';
$string['rag:embed_transcript_attached'] = 'Транскрипцію додано для {$a}';

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
