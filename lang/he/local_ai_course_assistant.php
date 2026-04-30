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
$string['attachment:attach'] = 'צרף';
$string['attachment:attach_image_or_pdf'] = 'צרף תמונה או PDF';
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
$string['chat:quiz_topic_adaptive']      = 'מותאם — התמקד בנקודות החולשה שלי';
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
$string['usersettings:download'] = 'הורד את הנתונים שלי ב-{$a}';
$string['usersettings:download_help'] = 'הורד עותק JSON מלא של כל רשומה ב-{$a} הקשורה לחשבון שלך: שיחות, הודעות, דירוגים, תוכניות לימוד, תזכורות, ציוני תרגול, תשובות לסקרים, פרופיל ורשומות ביקורת.';
$string['usersettings:privacy_notice_link'] = 'קרא את הודעת הפרטיות של {$a}';
$string['privacy:title'] = 'הודעת פרטיות של {$a}';
$string['admin:user_data:title'] = '{$a} — ייצוא ומחיקה של נתוני הלומד';
$string['admin:user_data:intro'] = 'מסלול תפעולי לבקשת GDPR סעיף 15 (גישה) או סעיף 17 (מחיקה). חפש לומד לפי מזהה משתמש Moodle, סקור את השורות שתוסף זה מחזיק עליו, וייצא או מחק.';
$string['admin:user_data:search_label'] = 'מזהה משתמש Moodle';
$string['admin:user_data:lookup'] = 'חפש';
$string['admin:user_data:not_found'] = 'לא נמצא משתמש עם מזהה זה.';
$string['admin:user_data:download'] = 'הורד את כל נתוני הלומד כ-JSON';
$string['admin:user_data:purge'] = 'מחק את כל נתוני הלומד עבור משתמש זה';
$string['admin:user_data:confirm_purge'] = 'למחוק לצמיתות כל רשומה של {$a}? פעולה זו תופעל בשרשור על שיחות, הודעות, דירוגים, תוכניות לימוד, תזכורות, פרופילים, ציוני תרגול, סקרים, רשומות ביקורת ומשובים. לא ניתן לבטל את הפעולה.';
$string['admin:user_data:purged'] = 'כל הנתונים של המשתמש שנבחר נמחקו.';
$string['chat:consent_heading'] = 'לפני שאתה משוחח עם {$a->product}';
$string['chat:consent_body'] = '{$a->product} הוא עוזר למידה מבוסס בינה מלאכותית. ההודעות שלך והתגובות של {$a->product} נשמרות במסד הנתונים של Moodle של {$a->institution} ועשרת הסבבים האחרונים נשלחים לספק מודל בינה מלאכותית מאושר כדי לענות על שאלותיך. שמך הפרטי משותף לצרכי התאמה אישית; לא נשלח לספק הבינה המלאכותית מידע מזהה אחר. אתה יכול להוריד, למחוק או להפסיק להשתמש ב-{$a->product} בכל עת.';
$string['chat:consent_accept'] = 'הבנתי, התחל את {$a}';
$string['chat:consent_privacy_link'] = 'קרא את הודעת הפרטיות המלאה';
$string['task:audit_cleanup'] = 'ניקוי טבלת הביקורת של AI Course Assistant';
$string['task:conversation_retention'] = 'סוחף שמירת שיחות של AI Course Assistant';
$string['settings:audit_retention_days'] = 'שמירת יומן ביקורת (ימים)';
$string['settings:audit_retention_days_desc'] = 'משימה מתוזמנת יומית מוחקת שורות ביקורת ישנות מערך זה. 0 משבית. ברירת מחדל 365.';
$string['settings:conversation_retention_days'] = 'שמירת שיחות (ימים)';
$string['settings:conversation_retention_days_desc'] = 'משימה מתוזמנת יומית מוחקת שורות שיחה שחותמת הזמן של עדכונן האחרון ישנה מערך זה. 0 משבית. ברירת מחדל 730.';
$string['settings:ssrf_trusted_endpoints'] = 'נקודות קצה מהימנות של SSRF';
$string['settings:ssrf_trusted_endpoints_desc'] = 'כתובת URL אחת בכל שורה. מארחים רשומים עוקפים את בדיקות ה-loopback / IP-פרטי / https-בלבד במאמת ה-SSRF של SOLA. השתמש בזה רק עבור LLM מאוחסנים-עצמית ברשת שאתה שולט בה — לדוגמה <code>http://localhost:11434</code> עבור Ollama מקומי, <code>http://10.0.0.5:8000</code> עבור vLLM pod באותו VPC. ההשוואה תואמת ל-scheme + host + port; כל נתיב מתעלמים ממנו. ברירת מחדל ריק (חוסם הכל פנימי). שורות שמתחילות ב-<code>#</code> הן הערות.';
$string['task:learner_weekly_digest']    = 'עוזר קורס AI - סיכום שבועי ללומד';
$string['learner_digest:subject']        = 'השבוע שלך עם {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'רוצה אימייל שבועי קצר עם מה להתמקד בו הלאה?';
$string['next_best_action:get_started']           = 'התחל עם {$a->title}. פתח אותי ושאל "עזור לי עם {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'התחל עם {$a->title}. המודול "{$a->module}" מכסה זאת.';
$string['next_best_action:review']                = 'חזור על היסודות של {$a->title} — פתח אותי ושאל "הסבר לי את {$a->title} מההתחלה".';
$string['next_best_action:review_with_module']    = 'חזור על היסודות של {$a->title} ב-"{$a->module}", ואז פתח אותי עם שאלות.';
$string['next_best_action:practice']              = 'בנה על מה שיש לך ב-{$a->title}. פתח אותי ושאל "תן לי דוגמה פתורה ל-{$a->title}".';
$string['next_best_action:practice_with_module']  = 'התאמן על {$a->title} לצד "{$a->module}". פתח אותי עבור דוגמאות פתורות.';
$string['next_best_action:quiz']                  = 'חזק את {$a->title} עם חידון מהיר. פתח אותי ובחר "בחן אותי — מותאם".';
$string['next_best_action:quiz_with_module']      = 'חזק את {$a->title} עם חידון מהיר. המודול "{$a->module}" הוא היכן שזה נמצא.';
$string['next_best_action:empty_state']           = 'אתה נראה מצוין בכל מטרה כרגע — אין מה להזכיר. המשך כך.';
$string['next_best_action:header']                = 'הנה {$a} דברים להתמקד בהם הלאה:';
$string['learner_digest:unsubscribe_done_title']  = 'בוטל';
$string['learner_digest:unsubscribe_done_body']   = 'בוצע — לא תקבל יותר אימיילים שבועיים עבור קורס זה מ-{$a->product}. תוכל להירשם שוב בכל עת מחלון הצ\'אט בקורס שלך.';
$string['learner_digest:unsubscribe_invalid_title'] = 'קישור הביטול אינו תקף יותר';
$string['learner_digest:unsubscribe_invalid_body']  = 'קישור הביטול הזה פג תוקף או פגום. תוכל לנהל העדפות אימייל מהגדרות הקורס.';
$string['active_learners:line']                   = '{$a} אחרים לומדים קורס זה כרגע.';
$string['active_learners:line_global']             = '{$a} אחרים לומדים עכשיו.';
$string['settings:active_learners_scope']          = 'היקף מחוון הלומדים הפעילים';
$string['settings:active_learners_scope_desc']     = 'האם מחוון "אחרים לומדים עכשיו" מעל התחלות הצ\'אט סופר לומדים באותו קורס בלבד או לומדים בכל האתר. ברירת מחדל <strong>גלובלי</strong>.';
$string['settings:active_learners_scope_global']   = 'גלובלי (כל קורס)';
$string['settings:active_learners_scope_course']   = 'לכל קורס בלבד';
$string['learner_digest:optin_yes']      = 'כן, שלחו לי את האימייל השבועי';
$string['learner_digest:optin_no']       = 'לא תודה';
$string['learner_digest:optin_thanks']   = 'הבנתי. תקבל סיכום שבועי בכל יום שני.';
$string['learner_digest:optin_declined'] = 'הבנתי. בלי אימיילים - פשוט פתח אותי כשתרצה בדיקה.';
$string['settings:xai_proxy_url'] = 'כתובת URL של פרוקסי xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'כתובת URL ציבורית של wss עבור שירות פרוקסי SOLA xAI Realtime (לדוגמה wss://voice.example.com/xai-rt/rt). כאשר זה מוגדר יחד עם סוד JWT, קול xAI מנותב דרך הפרוקסי ומפתח ה-API הראשי של xAI לעולם אינו מגיע לדפדפן. השאר ריק כדי לחזור לחיבור ישיר (לא מומלץ בייצור).';
$string['settings:xai_proxy_jwt_secret'] = 'סוד JWT של פרוקסי xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'סוד משותף HS256 המשמש לחתימה על אסימוני סשן קצרי מועד עבור פרוקסי xAI Realtime. חייב להתאים לסוד MOODLE_JWT_SECRET ב-Cloudflare Worker. סובב מעת לעת.';
$string['admin:vendor_dpa:title'] = '{$a} — סטטוס DPA של ספקים';
$string['admin:vendor_dpa:intro'] = 'ביטול הסכמה לאימון, DPA ועמדת שמירה עבור כל מנהל ספק בינה מלאכותית. השתמש בכך כדי להחליט אילו מנהלים להפעיל באתר שלך. ניתוב Tier 2 ומעלה דורש DPA חתום וביטול הסכמה לאימון חוזי.';
$string['admin:vendor_dpa:maintenance_note'] = 'טבלה זו מתוחזקת ב-classes/vendor_registry.php. עדכן אותה כאשר חל שינוי בתנאי השירות של ספק.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'דוא"ל ממונה על הגנת המידע';
$string['settings:dpo_email_desc'] = 'דוא"ל ליצירת קשר המוצג בהודעת הפרטיות הפונה ללומד תחת "צור קשר". השאר ריק כדי להסתיר את השורה. התקנות עם מיתוג מחדש צריכות להפנות אל ה-DPO שלהן.';
$string['settings:privacy_external_url'] = 'כתובת URL של עמוד הפרטיות של המוסד';
$string['settings:privacy_external_url_desc'] = 'קישור לעמוד הפרטיות ברמת המוסד, המוצג בהודעת הפרטיות הפונה ללומד תחת "צור קשר". השאר ריק כדי להסתיר את השורה.';
$string['settings:privacy_notice_override'] = 'דריסת הודעת פרטיות (HTML)';
$string['settings:privacy_notice_override_desc'] = 'אם מוגדר, HTML זה מחליף את הודעת הפרטיות הממותגת המוגשת כברירת מחדל ב-/local/ai_course_assistant/privacy.php. השתמש בכך כדי להכניס את הטקסט שאושר משפטית עבור המוסד שלך מבלי לערוך קוד. השאר ריק כדי להשתמש בהודעת ברירת המחדל, הנגזרת משבעת מפתחות תצורת המיתוג.';
$string['objectives:title'] = 'מטרות למידה ושליטה';
$string['objectives:toggles_heading'] = 'מעקב שליטה';
$string['objectives:toggle_master'] = 'אפשר מעקב שליטה לקורס זה';
$string['objectives:toggle_chip'] = 'הצג את תווית שליטת הלמידה לסטודנטים';
$string['objectives:toggle_chip_help'] = 'אופציונלי. כאשר כבוי, השליטה עדיין מנחה את העוזר בשקט אבל הלומדים אינם רואים מחוון.';
$string['objectives:toggled'] = 'ההגדרה עודכנה.';
$string['objectives:detected_heading'] = 'זוהו {$a->count} מטרות למידה מתוך {$a->source}.';
$string['objectives:source_competency'] = 'יכולות Moodle';
$string['objectives:source_summary'] = 'סיכום הקורס';
$string['objectives:source_section'] = 'תוכן של מקטע או של עמוד ראשון';
$string['objectives:source_page'] = 'עמוד הקורס';
$string['objectives:source_llm'] = 'חילוץ באמצעות בינה מלאכותית';
$string['objectives:source_manual'] = 'הזנה ידנית';
$string['objectives:source_none'] = 'אין מקור אוטומטי';
$string['objectives:import_detected'] = 'ייבא את המטרות שזוהו';
$string['objectives:import_llm'] = 'חלץ מטרות באמצעות בינה מלאכותית';
$string['objectives:llm_empty'] = 'חילוץ הבינה המלאכותית לא החזיר מטרות. נסה שוב מאוחר יותר או הזן אותן ידנית.';
$string['objectives:imported'] = 'יובאו {$a} מטרות.';
$string['objectives:none_detected'] = 'לא זוהו מטרות למידה אוטומטית. הזן אותן ידנית להלן, או השתמש בחילוץ באמצעות בינה מלאכותית.';
$string['objectives:list_heading'] = 'מטרות נוכחיות';
$string['objectives:col_code'] = 'קוד';
$string['objectives:col_title'] = 'כותרת';
$string['objectives:col_source'] = 'מקור';
$string['objectives:col_actions'] = 'פעולות';
$string['objectives:add_heading'] = 'הוסף מטרה';
$string['objectives:add_submit'] = 'הוסף מטרה';
$string['objectives:saved'] = 'המטרה נשמרה.';
$string['objectives:deleted'] = 'המטרה נמחקה.';
$string['objectives:delete_confirm'] = 'למחוק את המטרה הזו ואת כל היסטוריית הניסיונות שלה?';
$string['objectives:delete_all'] = 'מחק את כל המטרות של קורס זה';
$string['objectives:delete_all_confirm'] = 'למחוק כל מטרה ואת כל היסטוריית הניסיונות של קורס זה? לא ניתן לבטל.';
$string['objectives:deleted_all'] = 'כל המטרות של קורס זה נמחקו.';
$string['mastery:chip_aria'] = 'סטטוס שליטת למידה';
$string['mastery:popover_aria'] = 'פרטי שליטת למידה';
$string['mastery:chip_label'] = '{$a->mastered} מתוך {$a->total} בשליטה';
$string['mastery:status_mastered'] = 'בשליטה';
$string['mastery:status_learning'] = 'בתהליך';
$string['mastery:status_not_started'] = 'לא התחיל';
$string['mastery:popover_empty'] = 'לא הוגדרו מטרות למידה לקורס זה.';
$string['settings:mastery_heading'] = 'מעקב שליטה';
$string['settings:mastery_heading_desc'] = 'תכונה אופציונלית לפי קורס המסמנת תשובות לחידונים וסבבי שיחה עם העוזר אל מול מטרות הלמידה של הקורס, ולאחר מכן מזרימה תמונת מצב קומפקטית של שליטה לפרומפט המערכת כדי לכוון את השאילה. דיסקרטית כברירת מחדל: לומדים אינם רואים דבר אלא אם תווית הקורס מופעלת.';
$string['settings:mastery_threshold'] = 'סף שליטה';
$string['settings:mastery_threshold_desc'] = 'דיוק נע שמעליו או בו נחשבת מטרה כמקצועית. 0.0 עד 1.0. ברירת מחדל 0.85.';
$string['settings:mastery_window'] = 'חלון ניסיונות';
$string['settings:mastery_window_desc'] = 'מספר הניסיונות האחרונים לכל מטרה לשקלול בדיוק הנע. ברירת מחדל 8.';
$string['settings:mastery_decay_enabled']        = 'הפעל ירידת מומחיות';
$string['settings:mastery_decay_enabled_desc']   = 'כאשר מופעל, ציוני המומחיות יורדים עם הזמן לעומת חותמת הזמן של הניסיון האחרון. מטרה שנשלטה בעבר חוזרת ל"לומד" לאחר מספיק זמן. לא יורדת מתחת ל"לומד". <strong>כבוי כברירת מחדל ב-v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'זמן מחצית חיים של ירידת מומחיות (ימים)';
$string['settings:mastery_decay_half_life_days_desc'] = 'זמן מחצית חיים בימים. הציון מוכפל ב-0.5 ^ (ימים מאז הניסיון האחרון / זמן מחצית חיים). ברירת מחדל 30. בשימוש רק כאשר ירידה מופעלת.';
$string['settings:mastery_classifier_model'] = 'מודל סיווג';
$string['settings:mastery_classifier_model_desc'] = 'מודל המשמש לסווג סבבי עוזר אל מול מטרות. השאר ריק כדי לרשת את מודל ספק הבינה המלאכותית של ברירת המחדל; אחרת ציין מודל זול כמו gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'משקל סיווג';
$string['settings:mastery_classifier_weight_desc'] = 'כמה ניסיון שיחה נספר ביחס לניסיון חידון (1.0). ברירת מחדל 0.3.';
$string['settings:mastery_classifier_threshold'] = 'סף ביטחון של הסיווג';
$string['settings:mastery_classifier_threshold_desc'] = 'ביטחון מינימלי של הסיווג הנדרש לרישום ניסיון שיחה. 0.0 עד 1.0. ברירת מחדל 0.7.';
$string['chat:mode_progress'] = 'התקדמות';
$string['objectives:toggle_dashboard'] = 'הצג את לשונית לוח המחוונים של ההתקדמות לסטודנטים';
$string['objectives:toggle_dashboard_help'] = 'אופציונלי. מוסיף לשונית התקדמות לצד צ\'אט / קול / היסטוריה בתוך הוויג\'ט. הלשונית מציגה ללומדים אילו מטרות הם שולטים בהן, אילו בתהליך, ובאילו לא התחילו.';
$string['mastery:dashboard_title'] = 'התקדמות הלמידה שלך';
$string['mastery:dashboard_subtitle'] = 'השליטה נמדדת מתשובות החידון שלך ותרגול הצ\'אט. המשך — עומק עדיף על כיסוי.';
$string['mastery:dashboard_refresh'] = 'רענן';
$string['mastery:section_mastered'] = 'בשליטה';
$string['mastery:section_learning'] = 'בתהליך';
$string['mastery:section_not_started'] = 'עדיין לא התחיל';
$string['mastery:summary_label'] = '{$a->mastered} מתוך {$a->total} מטרות בשליטה';
$string['mastery:ask_about'] = 'שאל על זה';
$string['mastery:celebrate'] = 'שלטת בכל מטרה של קורס זה. עבודה מצוינת.';
$string['mastery:ask_template'] = 'עזור לי לתרגל ולהעמיק את הבנתי במטרה זו: {$a}.';
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
