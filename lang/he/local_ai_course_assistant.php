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
 * @copyright  2025 AI Course Assistant
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

// Settings.
$string['settings:enabled'] = 'הפעלת עוזר קורס AI';
$string['settings:enabled_desc'] = 'הפעלה או השבתה של ווידג\'ט עוזר הקורס AI בדפי קורס.';
$string['settings:provider'] = 'ספק AI';
$string['settings:provider_desc'] = 'בחר את ספק ה-AI לשימוש בהשלמות צ\'אט.';
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
$string['chat:clear'] = 'נקה היסטוריה';
$string['chat:clear_confirm'] = 'האם אתה בטוח שברצונך לנקות את היסטוריית הצ\'אט?';
$string['chat:copy'] = 'העתק שיחה';
$string['chat:copied'] = 'השיחה הועתקה ללוח';
$string['chat:copy_failed'] = 'ההעתקה נכשלה';
$string['chat:greeting'] = 'שלום, {$a}! אני SOLA, עוזר הלמידה המקוון של Saylor.';
$string['chat:thinking'] = 'חושב...';
$string['chat:error'] = 'מצטער, משהו השתבש. אנא נסה שוב.';
$string['chat:error_auth'] = 'שגיאת אימות. אנא פנה למנהל המערכת.';
$string['chat:error_ratelimit'] = 'יותר מדי בקשות. אנא המתן רגע ונסה שוב.';
$string['chat:error_unavailable'] = 'שירות ה-AI אינו זמין זמנית.';
$string['chat:error_notconfigured'] = 'SOLA עדיין לא הוגדר. אנא פנה למנהל המערכת.';
$string['chat:expand'] = 'הרחב צ\'אט';
$string['chat:collapse'] = 'כווץ צ\'אט';
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
$string['chat:mode_history'] = 'היסטוריה';

// History panel.
$string['chat:history_title'] = 'היסטוריית שיחות';
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
