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
$string['attachment:attach'] = 'Прикріпити';
$string['attachment:attach_image_or_pdf'] = 'Прикріпити зображення або PDF';
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
$string['chat:quiz_topic_adaptive']      = 'Адаптивний — зосередься на моїх слабких місцях';
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

// v3.9.10–v3.9.14 new strings.
$string['usersettings:download'] = 'Завантажити мої дані {$a}';
$string['usersettings:download_help'] = 'Завантажте повну JSON-копію кожного запису {$a}, прив\'язаного до вашого облікового запису: розмови, повідомлення, оцінки, плани навчання, нагадування, бали практики, відповіді на опитування, профіль і записи аудиту.';
$string['usersettings:privacy_notice_link'] = 'Прочитайте повідомлення про конфіденційність {$a}';
$string['privacy:title'] = 'Повідомлення про конфіденційність {$a}';
$string['admin:user_data:title'] = '{$a} — Експорт і видалення даних учня';
$string['admin:user_data:intro'] = 'Операційний шлях для запиту згідно зі статтею 15 GDPR (доступ) або статтею 17 (стирання). Знайдіть учня за ідентифікатором користувача Moodle, перегляньте рядки, які цей плагін містить для нього, та експортуйте або видаліть.';
$string['admin:user_data:search_label'] = 'ID користувача Moodle';
$string['admin:user_data:lookup'] = 'Шукати';
$string['admin:user_data:not_found'] = 'Користувача з цим ID не знайдено.';
$string['admin:user_data:download'] = 'Завантажити всі дані учня як JSON';
$string['admin:user_data:purge'] = 'Видалити всі дані учня для цього користувача';
$string['admin:user_data:confirm_purge'] = 'Назавжди видалити кожен запис для {$a}? Це поширюється на розмови, повідомлення, оцінки, плани навчання, нагадування, профілі, бали практики, опитування, записи аудиту та відгуки. Дію не можна скасувати.';
$string['admin:user_data:purged'] = 'Усі дані для вибраного користувача видалено.';
$string['chat:consent_heading'] = 'Перш ніж спілкуватись із {$a->product}';
$string['chat:consent_body'] = '{$a->product} — це AI помічник з навчання. Ваші повідомлення та відповіді {$a->product} зберігаються в базі даних Moodle {$a->institution}, а останні десять обмінів надсилаються затвердженому постачальнику AI моделі для відповіді на ваші запитання. Ваше ім\'я ділиться для персоналізації; жодна інша ідентифікаційна інформація не надсилається постачальнику AI. Ви можете завантажити, видалити або припинити використання {$a->product} у будь-який час.';
$string['chat:consent_accept'] = 'Розумію, запустити {$a}';
$string['chat:consent_privacy_link'] = 'Прочитати повне повідомлення про конфіденційність';
$string['task:audit_cleanup'] = 'Очищення таблиці аудиту AI Course Assistant';
$string['task:conversation_retention'] = 'Прибиральник збереження розмов AI Course Assistant';
$string['settings:audit_retention_days'] = 'Збереження журналу аудиту (дні)';
$string['settings:audit_retention_days_desc'] = 'Щоденне заплановане завдання видаляє рядки аудиту, старіші за це значення. 0 вимикає. За замовчуванням 365.';
$string['settings:conversation_retention_days'] = 'Збереження розмов (дні)';
$string['settings:conversation_retention_days_desc'] = 'Щоденне заплановане завдання видаляє рядки розмов, час останньої зміни яких старіший за це значення. 0 вимикає. За замовчуванням 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Довірені кінцеві точки SSRF';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Одна URL на рядок. Перелічені хости обходять перевірки loopback / приватний-IP / тільки-https у валідаторі SSRF SOLA. Використовуйте це лише для самостійно розміщених LLM у мережі, яку ви контролюєте — наприклад <code>http://localhost:11434</code> для локального Ollama, <code>http://10.0.0.5:8000</code> для пода vLLM у тому самому VPC. Порівняння відповідає scheme + host + port; будь-який шлях ігнорується. За замовчуванням порожньо (блокує все внутрішнє). Рядки, що починаються з <code>#</code>, є коментарями.';
$string['task:learner_weekly_digest']    = 'Помічник курсу AI - Тижневий дайджест учня';
$string['learner_digest:subject']        = 'Ваш тиждень з {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Хочете короткий тижневий лист про те, на чому зосередитися далі?';
$string['next_best_action:get_started']           = 'Почни з {$a->title}. Відкрий мене і запитай "допоможи мені з {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Почни з {$a->title}. Модуль "{$a->module}" охоплює це.';
$string['next_best_action:review']                = 'Перегляньте основи {$a->title} — відкрий мене і запитай "поясни мені {$a->title} з нуля".';
$string['next_best_action:review_with_module']    = 'Перегляньте основи {$a->title} в "{$a->module}", потім відкрий мене з питаннями.';
$string['next_best_action:practice']              = 'Будуй на тому, що в тебе є по {$a->title}. Відкрий мене і запитай "дай мені розв\'язаний приклад для {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Тренуйся на {$a->title} разом з "{$a->module}". Відкрий мене для розв\'язаних прикладів.';
$string['next_best_action:quiz']                  = 'Закріпи {$a->title} швидким тестом. Відкрий мене і вибери "Перевір мене — адаптивно".';
$string['next_best_action:quiz_with_module']      = 'Закріпи {$a->title} швидким тестом. Модуль "{$a->module}" — це місце, де він живе.';
$string['next_best_action:empty_state']           = 'У тебе зараз чудово на кожній цілі — нічого не нагадувати. Продовжуй.';
$string['next_best_action:header']                = 'Ось {$a} речей, на яких варто зосередитися далі:';
$string['learner_digest:unsubscribe_done_title']  = 'Відписаний';
$string['learner_digest:unsubscribe_done_body']   = 'Готово — ти більше не отримуватимеш щотижневі електронні листи для цього курсу від {$a->product}. Можеш знову підписатися будь-коли з вікна чату у своєму курсі.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Посилання для відписки більше не дійсне';
$string['learner_digest:unsubscribe_invalid_body']  = 'Це посилання для відписки минуло або пошкоджене. Можеш керувати налаштуваннями електронної пошти з налаштувань курсу.';
$string['active_learners:line']                   = '{$a} інших зараз вивчають цей курс.';
$string['active_learners:line_global']             = '{$a} інших зараз вивчають.';
$string['settings:active_learners_scope']          = 'Область індикатора активних учнів';
$string['settings:active_learners_scope_desc']     = 'Чи індикатор "інші зараз вивчають" над початковими підказками чату враховує учнів лише на тому ж курсі чи учнів по всьому сайту. За замовчуванням <strong>глобальний</strong>.';
$string['settings:active_learners_scope_global']   = 'Глобальний (будь-який курс)';
$string['settings:active_learners_scope_course']   = 'Тільки для курсу';
$string['learner_digest:optin_yes']      = 'Так, надсилайте тижневий лист';
$string['learner_digest:optin_no']       = 'Ні, дякую';
$string['learner_digest:optin_thanks']   = 'Зрозуміло. Щопонеділка отримуватимете тижневий огляд.';
$string['learner_digest:optin_declined'] = 'Зрозуміло. Без листів - просто відкривайте мене, коли захочете перевірку.';
$string['settings:xai_proxy_url'] = 'URL проксі xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'Публічний wss URL служби проксі SOLA xAI Realtime (наприклад, wss://voice.example.com/xai-rt/rt). Коли це налаштовано разом із секретом JWT, голос xAI маршрутизується через проксі, а основний ключ API xAI ніколи не досягає браузера. Залиште порожнім, щоб повернутися до прямого з\'єднання (не рекомендується для виробництва).';
$string['settings:xai_proxy_jwt_secret'] = 'Секрет JWT проксі xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Спільний секрет HS256, який використовується для підписання короткострокових токенів сесії для проксі xAI Realtime. Має збігатися із секретом MOODLE_JWT_SECRET на Cloudflare Worker. Періодично оновлюйте.';
$string['admin:vendor_dpa:title'] = '{$a} — Статус DPA постачальника';
$string['admin:vendor_dpa:intro'] = 'Відмова від навчання, DPA та стан зберігання для кожного драйвера постачальника AI. Використовуйте це, щоб вирішити, які драйвери увімкнути на вашому сайті. Маршрутизація 2-го рівня та вище потребує підписаного DPA та договірної відмови від навчання.';
$string['admin:vendor_dpa:maintenance_note'] = 'Ця таблиця підтримується у classes/vendor_registry.php. Оновлюйте, коли надходить зміна ToS постачальника.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Електронна пошта співробітника із захисту даних';
$string['settings:dpo_email_desc'] = 'Контактна електронна пошта, що відображається в повідомленні про конфіденційність, орієнтованому на учня, в розділі "Contact". Залиште порожнім, щоб приховати рядок. Ребрендовані установки повинні вказувати на власного DPO.';
$string['settings:privacy_external_url'] = 'URL сторінки конфіденційності установи';
$string['settings:privacy_external_url_desc'] = 'Посилання на сторінку конфіденційності рівня установи, що відображається в повідомленні про конфіденційність, орієнтованому на учня, в розділі "Contact". Залиште порожнім, щоб приховати рядок.';
$string['settings:privacy_notice_override'] = 'Заміна повідомлення про конфіденційність (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Якщо встановлено, цей HTML замінює стандартне брендоване повідомлення про конфіденційність, що відображається на /local/ai_course_assistant/privacy.php. Використовуйте це, щоб додати текст, перевірений юридичним відділом для вашої установи, без редагування коду. Залиште порожнім, щоб використовувати стандартне повідомлення, яке отримує текст із семи ключів конфігурації брендингу.';
$string['objectives:title'] = 'Навчальні цілі та опанування';
$string['objectives:toggles_heading'] = 'Відстеження опанування';
$string['objectives:toggle_master'] = 'Увімкнути відстеження опанування для цього курсу';
$string['objectives:toggle_chip'] = 'Показувати студентам чип опанування навчання';
$string['objectives:toggle_chip_help'] = 'Необов\'язково. Коли вимкнено, опанування все ще тихо керує помічником, але учні не бачать жодного індикатора.';
$string['objectives:toggled'] = 'Налаштування оновлено.';
$string['objectives:detected_heading'] = 'Виявлено {$a->count} навчальних цілей з {$a->source}.';
$string['objectives:source_competency'] = 'компетенції Moodle';
$string['objectives:source_summary'] = 'опис курсу';
$string['objectives:source_section'] = 'розділ або вміст першої сторінки';
$string['objectives:source_page'] = 'сторінка курсу';
$string['objectives:source_llm'] = 'витяг AI';
$string['objectives:source_manual'] = 'ручне введення';
$string['objectives:source_none'] = 'немає автоматичного джерела';
$string['objectives:import_detected'] = 'Імпортувати ці виявлені цілі';
$string['objectives:import_llm'] = 'Витягти цілі за допомогою AI';
$string['objectives:llm_empty'] = 'Витяг AI не повернув жодних цілей. Спробуйте пізніше або введіть вручну.';
$string['objectives:imported'] = 'Імпортовано {$a} цілей.';
$string['objectives:none_detected'] = 'Жодних навчальних цілей не виявлено автоматично. Введіть їх вручну нижче або використовуйте витяг AI.';
$string['objectives:list_heading'] = 'Поточні цілі';
$string['objectives:col_code'] = 'Код';
$string['objectives:col_title'] = 'Назва';
$string['objectives:col_source'] = 'Джерело';
$string['objectives:col_actions'] = 'Дії';
$string['objectives:add_heading'] = 'Додати ціль';
$string['objectives:add_submit'] = 'Додати ціль';
$string['objectives:saved'] = 'Ціль збережено.';
$string['objectives:deleted'] = 'Ціль видалено.';
$string['objectives:delete_confirm'] = 'Видалити цю ціль і всю історію спроб для неї?';
$string['objectives:delete_all'] = 'Видалити всі цілі для цього курсу';
$string['objectives:delete_all_confirm'] = 'Видалити кожну ціль і всю історію спроб для цього курсу? Не можна скасувати.';
$string['objectives:deleted_all'] = 'Усі цілі для цього курсу видалено.';
$string['mastery:chip_aria'] = 'Статус опанування навчання';
$string['mastery:popover_aria'] = 'Деталі опанування навчання';
$string['mastery:chip_label'] = 'Опановано {$a->mastered} з {$a->total}';
$string['mastery:status_mastered'] = 'опановано';
$string['mastery:status_learning'] = 'в процесі';
$string['mastery:status_not_started'] = 'не розпочато';
$string['mastery:popover_empty'] = 'Для цього курсу не налаштовано навчальних цілей.';
$string['settings:mastery_heading'] = 'Відстеження опанування';
$string['settings:mastery_heading_desc'] = 'Функція з добровільною участю на курс, яка позначає відповіді тестів і обміни в розмові з помічником щодо навчальних цілей курсу, потім подає компактний знімок опанування назад у системний запит для керування питаннями. Тонкий за замовчуванням: учні нічого не бачать, якщо перемикач чипа на курс не ввімкнено.';
$string['settings:mastery_threshold'] = 'Поріг опанування';
$string['settings:mastery_threshold_desc'] = 'Ковзна точність, на або вище якої ціль вважається опанованою. Від 0.0 до 1.0. За замовчуванням 0.85.';
$string['settings:mastery_window'] = 'Вікно спроб';
$string['settings:mastery_window_desc'] = 'Кількість найновіших спроб на ціль для зважування у ковзній точності. За замовчуванням 8.';
$string['settings:mastery_decay_enabled']        = 'Увімкнути спад майстерності';
$string['settings:mastery_decay_enabled_desc']   = 'Коли увімкнено, оцінки майстерності зменшуються з часом відносно мітки часу останньої спроби. Раніше освоєна ціль повертається до "навчання" після достатнього часу. Не падає нижче "навчання". <strong>За замовчуванням вимкнено у v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Період напіврозпаду майстерності (дні)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Період напіврозпаду в днях. Оцінка множиться на 0.5 ^ (дні від останньої спроби / період напіврозпаду). За замовчуванням 30. Використовується лише коли спад увімкнено.';
$string['settings:mastery_classifier_model'] = 'Модель класифікатора';
$string['settings:mastery_classifier_model_desc'] = 'Модель, що використовується для класифікації обмінів помічника щодо цілей. Залиште порожнім, щоб успадкувати стандартну модель постачальника AI; інакше вкажіть дешеву модель, наприклад gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Вага класифікатора';
$string['settings:mastery_classifier_weight_desc'] = 'Наскільки спроба розмови враховується відносно спроби тесту (1.0). За замовчуванням 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Поріг впевненості класифікатора';
$string['settings:mastery_classifier_threshold_desc'] = 'Мінімальна впевненість класифікатора, необхідна для запису спроби розмови. Від 0.0 до 1.0. За замовчуванням 0.7.';
$string['chat:mode_progress'] = 'Прогрес';
$string['objectives:toggle_dashboard'] = 'Показувати студентам вкладку панелі прогресу';
$string['objectives:toggle_dashboard_help'] = 'Необов\'язково. Додає вкладку Прогрес поряд із Chat / Voice / History всередині віджета. Вкладка показує учням, які цілі вони опанували, які в процесі та які ще не розпочаті.';
$string['mastery:dashboard_title'] = 'Ваш прогрес у навчанні';
$string['mastery:dashboard_subtitle'] = 'Опанування вимірюється з ваших відповідей на тести та практики чату. Продовжуйте — глибина перемагає охоплення.';
$string['mastery:dashboard_refresh'] = 'Оновити';
$string['mastery:section_mastered'] = 'Опановано';
$string['mastery:section_learning'] = 'В процесі';
$string['mastery:section_not_started'] = 'Ще не розпочато';
$string['mastery:summary_label'] = 'Опановано {$a->mastered} з {$a->total} цілей';
$string['mastery:ask_about'] = 'Запитати про це';
$string['mastery:celebrate'] = 'Ви опанували кожну ціль цього курсу. Чудова робота.';
$string['mastery:ask_template'] = 'Допоможіть мені практикуватися і поглибити моє розуміння цієї цілі: {$a}.';
$string['instructor_dashboard:title'] = '{$a} — Course Instructor & Designer Dashboard';
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
