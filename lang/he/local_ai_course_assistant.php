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
 * Language strings for local_ai_course_assistant — Hebrew.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'עוזר קורס מבוסס בינה מלאכותית';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'מאחסן שיחות של מורה AI לפי משתמש וקורס.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'מזהה המשתמש שבבעלותו השיחה.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'מזהה הקורס שאליו שייכת השיחה.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'כותרת השיחה.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'הזמן שבו נוצרה השיחה.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'הזמן שבו השיחה שונתה לאחרונה.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'מאחסן הודעות בודדות בשיחות מורה AI.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'מזהה המשתמש ששלח את ההודעה.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'מזהה הקורס שאליו שייכת ההודעה.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'תפקיד שולח ההודעה (משתמש או עוזר).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'תוכן ההודעה.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'מספר הטוקנים שנעשה בהם שימוש להודעה.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'הזמן שבו נוצרה ההודעה.';

// Capabilities.
$string['ai_course_assistant:use'] = 'שימוש בצ\'אט מורה AI';
$string['ai_course_assistant:viewanalytics'] = 'צפייה בניתוח נתוני מורה AI';
$string['ai_course_assistant:manage'] = 'ניהול הגדרות מורה AI (תפקיד מנהל)';
$string['task:run_meta_ai_query'] = 'הפעל שאילתת ניתוח מכ"ם למידה מתוזמנת';

// Settings.
$string['settings:enabled'] = 'הפעלת עוזר קורס AI';
$string['settings:enabled_desc'] = 'הפעלה או השבתה של ווידג\'ט עוזר הקורס AI בדפי קורס.';
$string['settings:default_course_mode'] = 'ברירת מחדל לקורסים חדשים';
$string['settings:default_course_mode_desc'] = 'שולט האם SOLA מופיע בקורס כאשר לא נבחרה העדפה פר־קורס. התקנות חדשות מוגדרות כברירת מחדל ל"מושבת כברירת מחדל" כדי שמנהלים יוכלו להפעיל קורס אחר קורס מדף Analytics או מדף Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'מושבת כברירת מחדל (הפעלה פר־קורס)';
$string['settings:default_course_mode_all'] = 'מופעל בכל הקורסים';
$string['settings:auto_open'] = 'פתיחה אוטומטית בביקור הראשון';
$string['settings:auto_open_desc'] = 'כאשר מופעל, מגירת SOLA נפתחת אוטומטית בפעם הראשונה שתלמיד נכנס לכל קורס. טעינות דפים נוספות באותו קורס לא פותחות מחדש את המגירה — המצב נמעקב לכל קורס בדפדפן של התלמיד באמצעות localStorage. חל בשולחן עבודה ובמובייל. ניתן לעקוף לכל קורס מעמוד Course AI Settings.';
$string['settings:comparison_providers'] = 'ספקי השוואה (בורר LLM)';
$string['settings:comparison_providers_desc'] = 'הוסף ספקי AI נוספים לבורר ה-LLM המובנה בווידג\'ט כדי שמנהלים יוכלו להשוות תגובות בין ספקים. השתמש בטבלה למטה כדי להוסיף שורות. עמודת הטמפרטורה היא אופציונלית (השאר ריק כדי להשתמש בטמפרטורה הגלובלית). פורמט שמור: provider_id|api_key|model1,model2|temperature. הספק הראשי שהוגדר למעלה נכלל תמיד באופן אוטומטי. רק מנהלים עם הרשאת ניהול רואים את הבורר; תלמידים לעולם לא רואים אותו. Provider IDs חוקיים: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'ספק AI ברירת מחדל';
$string['settings:provider_desc'] = 'בחר את ספק ה-AI לשימוש בהשלמות צ\'אט. בחר "Moodle AI (core_ai subsystem)" כדי לנתב בקשות דרך תצורת ה-AI המובנית של Moodle ב-Site admin > AI; שדות מפתח API, מודל ו-URL בסיסי למטה מתעלמים במצב זה. Streaming, שימוש בכלים ו-prompt caching אינם זמינים דרך core_ai — התגובות נמסרות כחלק יחיד. השתמש בספק ישיר לחוויית הסטודנט הטובה ביותר.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (מקומי)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_gemini'] = 'Google Gemini';
$string['settings:provider_custom'] = 'מותאם אישית (תואם OpenAI)';
$string['settings:apikey'] = 'מפתח API';
$string['settings:apikey_desc'] = 'מפתח API לספק הנבחר. לא נדרש ל-Ollama.';
$string['settings:model'] = 'שם מודל';
$string['settings:model_desc'] = 'המודל לשימוש. ברירת המחדל תלויה בספק.';
$string['settings:apibaseurl'] = 'כתובת בסיס API';
$string['settings:apibaseurl_desc'] = 'כתובת בסיס ל-API. ממולאת אוטומטית לפי ספק אבל ניתנת לשינוי.';
$string['settings:systemprompt'] = 'תבנית הודעת מערכת';
$string['settings:systemprompt_desc'] = 'הודעת מערכת הנשלחת ל-AI. שימוש במקומות: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:temperature'] = 'טמפרטורה';
$string['settings:temperature_desc'] = 'שולט באקראיות. ערכים נמוכים יותר ממוקדים יותר. טווח: 0.0 עד 2.0.';
$string['settings:maxhistory'] = 'היסטוריית שיחה מקסימלית';
$string['settings:maxhistory_desc'] = 'מספר מקסימלי של זוגות הודעות הנכללות בבקשות API.';
$string['settings:avatar'] = 'סמל צ\'אט';
$string['settings:avatar_desc'] = 'בחר את סמל האוואטר עבור כפתור הווידג\'ט.';
$string['settings:avatar_color'] = 'צבע מסגרת אוואטר';
$string['settings:avatar_color_desc'] = 'צבע מסגרת כפתור האוואטר. שימוש בערך hex.';
$string['settings:avatar_fill'] = 'צבע רקע אוואטר';
$string['settings:avatar_fill_desc'] = 'צבע מילוי בתוך כפתור האוואטר. שימוש בערך hex.';
$string['settings:display_mode'] = 'מצב תצוגה';
$string['settings:display_mode_desc'] = 'איך SOLA מופיע בדף.';
$string['settings:display_mode_widget'] = 'ווידג\'ט (כפתור צף)';
$string['settings:display_mode_drawer'] = 'מגירה צדדית (צד ימין)';
$string['settings:position'] = 'מיקום ווידג\'ט';
$string['settings:position_desc'] = 'מיקום הווידג\'ט בדף (חל רק במצב ווידג\'ט).';
$string['settings:position_br'] = 'למטה מימין';
$string['settings:position_bl'] = 'למטה משמאל';
$string['settings:position_tr'] = 'למעלה מימין';
$string['settings:position_tl'] = 'למעלה משמאל';
$string['chat:settings'] = 'הגדרות תוסף';
$string['analytics:viewdashboard'] = 'צפייה בלוח ניתוח נתונים';

// Course settings.
$string['coursesettings:title'] = 'הגדרות AI של קורס';
$string['coursesettings:enabled'] = 'הפעלת עקיפות קורס';
$string['coursesettings:enabled_desc'] = 'כאשר מופעל, ההגדרות שלהלן עוקפות את תצורת ה-AI הכללית.';
$string['coursesettings:sola_enabled'] = 'SOLA בקורס זה';
$string['coursesettings:sola_enabled_toggle'] = 'הצג את רכיב SOLA בקורס זה';
$string['coursesettings:sola_enabled_desc'] = 'שולט האם רכיב הצ\'אט של SOLA מופיע בקורס זה. ברירת המחדל לכל האתר נקבעת בהגדרות התוסף תחת General > Default for new courses.';
$string['coursesettings:using_global'] = 'שימוש בהגדרה כללית';
$string['coursesettings:saved'] = 'הגדרות AI של קורס נשמרו.';
$string['coursesettings:ell_pronunciation'] = 'מצב תרגול הגייה';
$string['coursesettings:ell_pronunciation_desc'] = 'הצגת שבב "תרגול הגייה" לסטודנטים בקורס זה.';
$string['coursesettings:ell_pronunciation_enable'] = 'הפעלת שבב תרגול הגייה';
$string['coursesettings:rag'] = 'חיפוש סמנטי (RAG)';
$string['coursesettings:rag_desc'] = 'הפעלת יצירה מוגברת באחזור עבור קורס זה.';
$string['coursesettings:rag_enable'] = 'הפעלת RAG לקורס זה';
$string['coursesettings:speaking_practice'] = 'תרגול דיבור';
$string['coursesettings:speaking_practice_desc'] = 'הצגת שבב "תרגול דיבור" לסטודנטים.';
$string['coursesettings:speaking_practice_enable'] = 'הפעלת שבב תרגול דיבור';
$string['coursesettings:global_settings_link'] = 'הגדרות AI כלליות';
$string['coursesettings:token_usage'] = 'שימוש בטוקנים ועלות';
$string['coursesettings:token_usage_desc'] = 'צפייה בשימוש בטוקנים, אומדני עלויות ופירוט לפי סטודנט.';

// Language.
$string['lang:switch'] = 'כן, החלף';
$string['lang:dismiss'] = 'לא, תודה';
$string['lang:change'] = 'שינוי שפה';
$string['lang:english'] = 'אנגלית';

// Chat widget.
$string['chat:title'] = 'SOLA';
$string['chat:placeholder'] = 'שאל שאלה...';
$string['chat:send'] = 'שלח';
$string['chat:close'] = 'סגור צ\'אט';
$string['chat:open'] = 'פתח את SOLA';
$string['chat:change_avatar'] = 'שנה אוואטר';
$string['chat:clear'] = 'נקה מסך';
$string['chat:clear_confirm'] = 'לנקות את ההודעות הגלויות? היסטוריית הצ\'אט המלאה שלך נשמרת וניתן לטעון אותה מחדש על ידי פתיחת הווידג\'ט שוב.';
$string['chat:copy'] = 'העתק שיחה';
$string['chat:copied'] = 'השיחה הועתקה ללוח';
$string['chat:copy_failed'] = 'ההעתקה נכשלה';
$string['chat:greeting'] = 'שלום, {$a}! אני SOLA. איך אוכל לעזור לך היום?';
$string['chat:thinking'] = 'חושב...';
$string['chat:error'] = 'מצטער, משהו השתבש. אנא נסה שוב.';
$string['chat:error_auth'] = 'שגיאת אימות. אנא פנה למנהל המערכת.';
$string['chat:error_ratelimit'] = 'יותר מדי בקשות. אנא המתן רגע ונסה שוב.';
$string['chat:error_unavailable'] = 'שירות ה-AI אינו זמין זמנית.';
$string['chat:error_notconfigured'] = 'SOLA עדיין לא הוגדר. אנא פנה למנהל המערכת.';
$string['chat:mic'] = 'אמור את השאלה שלך';
$string['chat:mic_error'] = 'שגיאת מיקרופון. אנא בדוק את הרשאות הדפדפן.';
$string['chat:mic_unsupported'] = 'קלט קולי אינו נתמך בדפדפן זה.';
$string['chat:newline_hint'] = 'Shift+Enter לשורה חדשה';
$string['chat:you'] = 'אתה';
$string['chat:assistant'] = 'SOLA';
$string['chat:history_loaded'] = 'שיחה קודמת נטענה.';
$string['chat:history_cleared'] = 'היסטוריית הצ\'אט נוקתה.';
$string['chat:offtopic_warning'] = 'נראה שהשאלה שלך אינה קשורה לקורס הזה. אנא נסה להישאר בנושא!';
$string['chat:offtopic_ended'] = 'הגישה שלך למורה AI הושעתה זמנית ל-{$a} דקות.';
$string['chat:offtopic_locked'] = 'הגישה שלך מושעית זמנית. נסה שוב בעוד {$a} דקות.';
$string['chat:escalated_to_support'] = 'לא הצלחתי לענות במלואו על שאלתך, ולכן נוצר כרטיס תמיכה. מספר הפנייה: {$a}';
$string['chat:studyplan_intro'] = 'אני יכול לעזור לך ליצור תוכנית לימודים! ספר לי כמה שעות בשבוע אתה יכול להקדיש ללמידה.';

// Quiz.
$string['chat:quiz'] = 'מבחן תרגול';
$string['chat:quiz_setup_title'] = 'מבחן תרגול';
$string['chat:quiz_questions'] = 'מספר שאלות';
$string['chat:quiz_topic'] = 'נושא';
$string['chat:quiz_topic_guided'] = 'מונחה AI (לפי ההתקדמות שלך)';
$string['chat:quiz_topic_default'] = 'תוכן הקורס הנוכחי';
$string['chat:quiz_topic_custom'] = 'נושא מותאם אישית…';
$string['chat:quiz_custom_placeholder'] = 'הכנס נושא או שאלה...';
$string['chat:quiz_start'] = 'התחל מבחן';
$string['chat:quiz_cancel'] = 'ביטול';
$string['chat:quiz_loading'] = 'יוצר מבחן…';
$string['chat:quiz_error'] = 'לא ניתן ליצור מבחן. אנא נסה שוב.';
$string['chat:quiz_correct'] = 'נכון!';
$string['chat:quiz_wrong'] = 'שגוי.';
$string['chat:quiz_next'] = 'שאלה הבאה';
$string['chat:quiz_finish'] = 'ראה תוצאות';
$string['chat:quiz_score'] = 'המבחן הסתיים! ציון: {$a->score} מתוך {$a->total}.';
$string['chat:quiz_summary'] = 'סיימתי מבחן תרגול של {$a->total} שאלות בנושא "{$a->topic}" וקיבלתי {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'יעדי למידה';
$string['chat:quiz_topic_modules'] = 'נושא קורס';
$string['chat:quiz_subtopic_select'] = 'בחר פריט ספציפי…';
$string['chat:quiz_topic_sections'] = 'חלקי קורס';
$string['chat:quiz_score_great'] = 'עבודה מצוינת! אתה באמת מכיר את החומר הזה.';
$string['chat:quiz_score_good'] = 'מאמץ טוב! המשך לסקור כדי לחזק את ההבנה שלך.';
$string['chat:quiz_score_practice'] = 'המשך לתרגל. עיין בחומר הקשור ונסה שוב.';
$string['chat:quiz_review_heading'] = 'סקירה';
$string['chat:quiz_retake'] = 'חזור על המבחן';
$string['chat:quiz_exit'] = 'צא מהמבחן';
$string['chat:quiz_your_answer'] = 'התשובה שלך';
$string['chat:quiz_correct_answer'] = 'תשובה נכונה';

// Conversation starters.
$string['chat:starters_label'] = 'פתיחות שיחה';
$string['chat:starter_help_page'] = 'עזרה עם זה';
$string['chat:starter_quiz'] = 'בחן אותי בזה';
$string['chat:starter_study_plan'] = 'תוכנית לימודים';
$string['chat:starter_ask_anything'] = 'שאל כל דבר';
$string['chat:starter_review_practice'] = 'חזרה ותרגול';
$string['chat:starter_ai_project_coach'] = 'מאמן פרויקט AI';
$string['chat:starter_ell_practice'] = 'תרגול שיחה';
$string['chat:starter_ell_pronunciation'] = 'תרגול הגייה';
$string['chat:starter_speak'] = 'אמור פתיחת שיחה';
$string['chat:starter_explain'] = 'הסבר את זה';
$string['chat:starter_key_concepts'] = 'מושגי מפתח';
$string['chat:starter_help_me'] = 'עזרת AI';
$string['chat:starter_ai_coach'] = 'מאמן AI';
$string['chat:starter_quick_study'] = 'לימוד מהיר';
$string['chat:starter_help_lesson'] = 'הסבר את זה';
$string['chat:starter_prompt_coach'] = 'מאמן Prompt AI';
$string['chat:starter_help_lesson_prompt'] = 'האם תוכל לעזור לי להבין את השיעור הנוכחי? תן לי סיכום של המושגים העיקריים.';
$string['chat:starter_study_plan_prompt'] = 'אני רוצה לתכנן את הלמידה שלי היום. שאל אותי: (1) מה אני רוצה להשיג היום, ו-(2) כמה זמן יש לי.';
$string['chat:starter_explain_prompt'] = 'האם תוכל להסביר את המושג החשוב ביותר בקורס הזה עד כה?';

// Reset.
$string['chat:reset'] = 'התחל מחדש';

// Starter admin settings.
$string['starters:admin_title'] = 'הגדרות פתיחות שיחה';
$string['starters:admin_desc'] = 'הגדר את שבבי פתיחות השיחה המוצגים לסטודנטים.';
$string['starters:add_new'] = 'הוסף חדש';
$string['starters:save'] = 'שמור שינויים';
$string['starters:saved'] = 'התצורה נשמרה.';
$string['starters:reset_defaults'] = 'אפס לברירות מחדל';
$string['starters:reset_confirm'] = 'לאפס הכל לברירות מחדל? פריטים מותאמים אישית יימחקו.';
$string['starters:reset_done'] = 'אופס לברירות מחדל.';
$string['starters:back_settings'] = 'חזרה להגדרות';
$string['starters:course_section'] = 'פתיחות שיחה';
$string['starters:course_desc'] = 'הפעל או השבת פתיחות בודדות עבור קורס זה.';

// Topic picker.
$string['chat:topic_picker_title'] = 'על מה תרצה להתמקד?';
$string['chat:topic_picker_title_help'] = 'במה אתה צריך עזרה?';
$string['chat:topic_picker_title_explain'] = 'מה תרצה שאסביר?';
$string['chat:topic_picker_title_study'] = 'באיזה תחום תרצה להתמקד?';
$string['chat:topic_start'] = 'המשך';

// Expand.
$string['chat:fullscreen'] = 'מסך מלא';
$string['chat:exitfullscreen'] = 'צא ממסך מלא';

// Settings panel.
$string['chat:language'] = 'שנה שפה';
$string['chat:settings_panel'] = 'הגדרות';
$string['chat:settings_language'] = 'שפה';
$string['chat:settings_avatar'] = 'אוואטר';
$string['chat:settings_voice'] = 'קול';
$string['chat:settings_voice_admin'] = 'הגדרות קול מנוהלות בלוח ניהול האתר.';

// Voice mode.
$string['chat:voice_mode'] = 'מצב קולי';
$string['chat:voice_title'] = 'דבר עם SOLA';
$string['chat:voice_copy'] = 'נהל שיחה קולית טבעית עם עוזר הלמידה שלך.';
$string['chat:voice_ready'] = 'מוכן להתחיל';
$string['chat:voice_start'] = 'התחל שיחה';
$string['chat:voice_end'] = 'סיים מושב קולי';
$string['chat:voice_connecting'] = 'מתחבר...';
$string['chat:voice_listening'] = 'מקשיב...';
$string['chat:voice_speaking'] = 'SOLA מדבר...';
$string['chat:voice_idle'] = 'מוכן';
$string['chat:voice_error'] = 'חיבור קולי נכשל. אנא בדוק את ההגדרות שלך.';
$string['chat:quiz_locked'] = 'SOLA מושהה במהלך מבחנים כדי לתמוך ביושרה אקדמית. בהצלחה!';

// Bottom nav.
$string['chat:mode_nav'] = 'ניווט מצבים';
$string['chat:mode_chat'] = 'צ\'אט';
$string['chat:mode_voice'] = 'קול';
$string['chat:mode_history'] = 'הערות';

// History panel.
$string['chat:history_title'] = 'הערות והיסטוריית שיחות';
$string['chat:history_subtitle'] = 'ההודעות האחרונות שלך בקורס זה.';
$string['chat:history_empty'] = 'אין שיחות עדיין.';
$string['chat:history_refresh'] = 'רענן';

// Debug panel.
$string['chat:debug_context'] = 'ניפוי באגים של הקשר';
$string['chat:debug_context_toggle'] = 'הפעל/כבה בודק ניפוי באגים של הקשר';
$string['chat:debug_context_copy'] = 'העתק';
$string['chat:debug_context_browser'] = 'תמונת מצב דפדפן';
$string['chat:debug_context_request'] = 'בקשת SSE אחרונה';
$string['chat:debug_context_prompt'] = 'תגובת שרת';

// Quiz hide settings.
$string['settings:quiz_hide_heading'] = 'ניראות דף מבחן';
$string['settings:quiz_hide_heading_desc'] = 'שלוט אם הווידג\'ט של SOLA מופיע בדפי מבחנים של Moodle.';
$string['settings:hide_on_quiz_for_students'] = 'הסתר SOLA בדפי מבחנים לסטודנטים';
$string['settings:hide_on_quiz_for_students_desc'] = 'הסתרה מלאה של ווידג\'ט SOLA בכל דפי המבחנים לסטודנטים.';
$string['settings:hide_on_quiz_for_staff'] = 'הסתר SOLA בדפי מבחנים לצוות';
$string['settings:hide_on_quiz_for_staff_desc'] = 'הסתרה מלאה של ווידג\'ט SOLA בכל דפי המבחנים למורים ומנהלים.';

// Wellbeing.
$string['settings:wellbeing_heading'] = 'רווחה ובטיחות';
$string['settings:wellbeing_heading_desc'] = 'SOLA מזהה ביטויי מצוקה ומגיב באמפתיה ומשאבי תמיכה.';
$string['settings:wellbeing_enabled'] = 'הפעלת תמיכה ברווחה';
$string['settings:wellbeing_enabled_desc'] = 'SOLA יזהה סימני מצוקה רגשית ויספק משאבי משבר.';

// Voice mode settings.
$string['settings:realtime_heading'] = 'מצב קולי (OpenAI Realtime)';
$string['settings:realtime_enabled'] = 'הפעלת מצב קולי';
$string['settings:realtime_enabled_desc'] = 'מאפשר לסטודנטים לנהל שיחות קוליות בזמן אמת.';
$string['settings:realtime_apikey'] = 'מפתח API של OpenAI (קול & TTS)';
$string['settings:realtime_apikey_desc'] = 'משמש למצב קולי ולכפתור TTS בהודעות.';
$string['settings:realtime_voice'] = 'קול SOLA';
$string['settings:realtime_voice_desc'] = 'קול עבור מצב קולי וכפתור TTS.';

// Mobile.
$string['mobile_welcome'] = 'שלום, {$a}!';
$string['mobile_welcome_sub'] = 'אני SOLA, עוזר הלמידה שלך. איך אני יכול לעזור לך היום?';
$string['mobile_placeholder'] = 'שאל שאלה...';
$string['mobile_clear'] = 'נקה היסטוריה';
$string['mobile_disabled'] = 'SOLA אינו זמין לקורס זה.';
$string['mobile_chip_concepts'] = 'מושגי מפתח';
$string['mobile_chip_studyplan'] = 'תוכנית לימודים';
$string['mobile_chip_quiz'] = 'בחן אותי';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / הפצת ממשק קצה';
$string['settings:cdn_heading_desc'] = 'הגשת נכסי ממשק SOLA (JS/CSS) מ-CDN חיצוני במקום ממערכת הקבצים של Moodle. זה מאפשר עדכוני ממשק ללא שדרוג התוסף. השאירו את כתובת ה-CDN ריקה כדי להשתמש בקבצי התוסף המקומיים.';
$string['settings:cdn_url'] = 'כתובת CDN בסיסית';
$string['settings:cdn_url_desc'] = 'כתובת בסיסית שבה מתארחים sola.min.js ו-sola.min.css. דוגמה: https://your-org.github.io/sola-cdn. השאירו ריק כדי להשתמש בקבצי התוסף המקומיים.';
$string['settings:cdn_version'] = 'גרסת נכסי CDN';
$string['settings:cdn_version_desc'] = 'מחרוזת גרסה המתווספת לכתובות CDN עבור cache busting. עדכנו לאחר כל פריסת CDN (למשל 3.2.4 או commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'שימוש כללי';
$string['analytics:tab_bycourse'] = 'לפי קורס';
$string['analytics:tab_comparison'] = 'AI מול לא-משתמשים';
$string['analytics:tab_byunit'] = 'לפי יחידה';
$string['analytics:tab_usagetypes'] = 'סוגי שימוש';
$string['analytics:tab_themes'] = 'נושאים';
$string['analytics:tab_feedback'] = 'משוב AI';
$string['analytics:total_students'] = 'סה"כ סטודנטים';
$string['analytics:active_users'] = 'משתמשי AI פעילים';
$string['analytics:msgs_per_student'] = 'הודעות לסטודנט';
$string['analytics:avg_session'] = 'משך הפעלה ממוצע';
$string['analytics:return_rate'] = 'שיעור חזרה';
$string['analytics:total_sessions'] = 'סה"כ הפעלות';
$string['analytics:thumbs_up'] = 'אגודל למעלה';
$string['analytics:thumbs_down'] = 'אגודל למטה';
$string['analytics:hallucination_flags'] = 'סימוני אי-דיוק';
$string['analytics:msgs_to_resolution'] = 'הודעות עד לפתרון';
$string['analytics:helpful'] = 'מועיל';
$string['analytics:not_helpful'] = 'לא מועיל';
$string['analytics:flag_hallucination'] = 'תשובה זו מכילה מידע לא מדויק';
$string['analytics:submit_rating'] = 'שלח';
$string['analytics:thanks_feedback'] = 'תודה על המשוב';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:history_saved_subtitle'] = 'תגובות שמורות נשארות במכשיר זה עבור קורס זה.';
$string['chat:history_saved_empty'] = 'שמור תגובת AI כדי לראותה כאן.';
$string['chat:history_views_label'] = 'תצוגות היסטוריה';
$string['chat:history_view_saved'] = 'שמורות';
$string['chat:history_view_recent'] = 'היסטוריה';
$string['chat:debug_refresh'] = 'רענן';
$string['chat:debug_copy_all'] = 'העתק הכל';
$string['chat:debug_close'] = 'סגור';
$string['chat:language_switch'] = 'החלף שפה';
$string['chat:language_dismiss'] = 'דחה הצעת שפה';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'בחר ספק LLM';
$string['chat:llm_model_label'] = 'מודל';
$string['chat:llm_model_select'] = 'בחר מודל LLM';
$string['chat:footer_usertesting'] = 'בדיקת שמישות';
$string['chat:footer_feedback'] = 'משוב';
$string['chat:voice_panel_title'] = 'דבר עם {$a} (ניסיוני)';

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
$string['rubric:done'] = 'סיום';
$string['rubric:encourage_high'] = 'עבודה מצוינת! המשך כך!';
$string['rubric:encourage_low'] = 'התחלה טובה! תרגול סדיר יעזור.';
$string['rubric:encourage_mid'] = 'מאמץ טוב! המשך לתרגל.';
$string['rubric:overall'] = 'כולל';
$string['rubric:practice_again'] = 'תרגל שוב';
$string['rubric:score_title_conversation'] = 'ציון תרגול שיחה';
$string['rubric:score_title_pronunciation'] = 'ציון תרגול הגייה';
$string['rubric:scoring'] = 'מעריך...';
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
$string['demo:title'] = 'סביבת בדיקה';
$string['demo:heading'] = 'סביבת בדיקה';
$string['demo:intro'] = 'דף זה יוצר קורס בדיקה שהוא <strong>מוסתר מסטודנטים</strong> (visible=0) וממלא אותו בסטודנטים מזויפים, שיחות AI, דירוגים ומשוב. שימושי לתצוגה מקדימה של Analytics Dashboard או לאימות שינויים בתוסף מבלי להשפיע על אף סטודנט אמיתי רשום.';
$string['demo:step1'] = 'שלב 1: קורס בדיקה';
$string['demo:step2'] = 'שלב 2: הוספת סטודנטים מזויפים ושיחות AI';
$string['demo:course_exists'] = 'קורס בדיקה קיים: <strong>{$a->fullname}</strong> (שם קצר <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'מוסתר';
$string['demo:badge_visible'] = 'גלוי לסטודנטים';
$string['demo:no_course'] = 'לא נמצא קורס בדיקה. לחצו למטה כדי ליצור אחד.';
$string['demo:create_btn'] = 'צור קורס בדיקה מוסתר';
$string['demo:open_course'] = 'פתח קורס &rarr;';
$string['demo:seed_intro'] = 'יוצר את demo_student_001, demo_student_002, ..., רושם אותם לקורס הבדיקה ומוסיף שיחות, הודעות, דירוגים ומשוב סינתטיים. הפעילו שוב כדי להוסיף עוד נתונים, או סמנו „נקה תחילה“ כדי להתחיל מחדש.';
$string['demo:users_label'] = 'משתמשים';
$string['demo:weeks_label'] = 'שבועות';
$string['demo:clear_label'] = 'נקה תחילה משתמשי demo_* קיימים';
$string['demo:seed_btn'] = 'הוסף סטודנטים ושיחות';
$string['demo:view_analytics'] = 'צפייה בנתוני קורס זה &rarr;';
$string['demo:footer'] = 'הנתונים שנוצרים כאן מאוחסנים בטבלאות המשתמשים / ההרשמות הסטנדרטיות של Moodle ובטבלאות השיחות של התוסף עצמו. לכל המשתמשים המזויפים שמות משתמש שמתחילים ב-<code>demo_student_</code> כדי שיהיה קל לסנן אותם או להסיר אותם. כדי להסירם, הריצו שוב את שלב ההזרעה עם „נקה תחילה משתמשי demo_* קיימים“ מסומן.';
$string['demo:course_fullname'] = 'קורס בדיקה SOLA (מוסתר)';
$string['demo:notify_created'] = 'קורס הבדיקה מוכן: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'יצירת הקורס נכשלה: {$a}';
$string['demo:notify_seeded'] = 'הוזרעו: {$a->users} משתמשים, {$a->conversations} שיחות, {$a->messages} הודעות, {$a->ratings} דירוגים, {$a->feedback} רשומות משוב.';
$string['demo:notify_seed_fail'] = 'הזרעת הנתונים נכשלה: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'עלות טוקנים ונתונים &rarr;';
$string['toc:testing'] = 'סביבת בדיקה &rarr;';
$string['toc:back_to_course'] = '&larr; חזרה ל-{$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'קובץ ההפעלה pdftotext לא נמצא; חילוץ PDF הושבת.';
$string['rag:pdftotext_available'] = 'pdftotext זוהה ב-{$a}.';
$string['rag:docx_unavailable'] = 'הרחבת PHP ZipArchive לא זמינה; חילוץ DOCX הושבת.';
$string['rag:h5p_unavailable'] = 'לא ניתן לקרוא תוכן H5P; מדלג.';
$string['rag:scorm_too_large'] = 'חבילת SCORM חורגת ממגבלת הגודל המוגדרת ({$a} MB); מדלג.';
$string['rag:scorm_unzip_failed'] = 'לא ניתן לחלץ את חבילת SCORM; מדלג.';
$string['rag:transcript_fetch_failed'] = 'לא ניתן לשלוף תמליל מ-{$a}.';
$string['rag:transcript_cf_challenge'] = 'כתובת התמליל נחסמה על ידי אתגר Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'זוהה מדיה מוטמעת: {$a}';
$string['rag:embed_transcript_attached'] = 'תמליל צורף עבור {$a}';

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
