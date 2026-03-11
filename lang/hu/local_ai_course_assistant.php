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
 * Language strings for local_ai_course_assistant — Hungarian.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI Kurzus Asszisztens';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Az AI tutor csevegési beszélgetéseit tárolja felhasználónként és kurzusonként.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'A beszélgetés tulajdonosának azonosítója.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'A kurzus azonosítója, amelyhez a beszélgetés tartozik.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'A beszélgetés címe.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'A beszélgetés létrehozásának időpontja.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'A beszélgetés utolsó módosításának időpontja.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Egyéni üzeneteket tárol az AI tutor beszélgetéseiben.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Az üzenetet küldő felhasználó azonosítója.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'A kurzus azonosítója, amelyhez az üzenet tartozik.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Az üzenet küldőjének szerepe (felhasználó vagy asszisztens).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Az üzenet tartalma.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Az üzenethez felhasznált tokenek száma.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Az üzenet létrehozásának időpontja.';

// Capabilities.
$string['ai_course_assistant:use'] = 'AI tutor csevegés használata';
$string['ai_course_assistant:viewanalytics'] = 'AI tutor csevegés analitika megtekintése';
$string['ai_course_assistant:manage'] = 'AI tutor csevegés beállítások kezelése (Adminisztrátor szerep)';

// Settings.
$string['settings:enabled'] = 'AI Kurzus Asszisztens engedélyezése';
$string['settings:enabled_desc'] = 'Az AI Kurzus Asszisztens widget engedélyezése vagy letiltása a kurzusoldalon.';
$string['settings:provider'] = 'AI Szolgáltató';
$string['settings:provider_desc'] = 'Válassza ki az AI szolgáltatót a csevegési válaszokhoz.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Helyi)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_gemini'] = 'Google Gemini';
$string['settings:provider_custom'] = 'Egyéni (OpenAI-kompatibilis)';
$string['settings:apikey'] = 'API Kulcs';
$string['settings:apikey_desc'] = 'API kulcs a kiválasztott szolgáltatóhoz. Nem szükséges az Ollamához.';
$string['settings:model'] = 'Modell neve';
$string['settings:model_desc'] = 'A használandó modell. Az alapértelmezés a szolgáltatótól függ.';
$string['settings:apibaseurl'] = 'API Alap URL';
$string['settings:apibaseurl_desc'] = 'Alap URL az API-hoz. Automatikusan kitöltve szolgáltatónként, de felülírható.';
$string['settings:systemprompt'] = 'Rendszerüzenet sablon';
$string['settings:systemprompt_desc'] = 'Az AI-nak küldött rendszerüzenet. Használjon helyőrzőket: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:temperature'] = 'Hőmérséklet';
$string['settings:temperature_desc'] = 'Véletlenszerűséget szabályoz. Alacsonyabb értékek fókuszáltabbak. Tartomány: 0.0-tól 2.0-ig.';
$string['settings:maxhistory'] = 'Maximális beszélgetési előzmény';
$string['settings:maxhistory_desc'] = 'Az API kérésekbe foglalt üzenetpárok maximális száma.';
$string['settings:avatar'] = 'Csevegés ikon';
$string['settings:avatar_desc'] = 'Válassza ki az avatar ikont a widget gombhoz.';
$string['settings:avatar_color'] = 'Avatar keret szín';
$string['settings:avatar_color_desc'] = 'Az avatar gomb keretszíne. Használjon hex értéket.';
$string['settings:avatar_fill'] = 'Avatar háttér szín';
$string['settings:avatar_fill_desc'] = 'Kitöltőszín az avatar gombon belül. Használjon hex értéket.';
$string['settings:display_mode'] = 'Megjelenítési mód';
$string['settings:display_mode_desc'] = 'Hogyan jelenik meg a SOLA az oldalon.';
$string['settings:display_mode_widget'] = 'Widget (lebegő gomb)';
$string['settings:display_mode_drawer'] = 'Oldalsó fiók (jobb szél)';
$string['settings:position'] = 'Widget pozíció';
$string['settings:position_desc'] = 'A widget pozíciója az oldalon (csak Widget módban érvényes).';
$string['settings:position_br'] = 'Jobb alsó';
$string['settings:position_bl'] = 'Bal alsó';
$string['settings:position_tr'] = 'Jobb felső';
$string['settings:position_tl'] = 'Bal felső';
$string['chat:settings'] = 'Bővítmény beállítások';
$string['analytics:viewdashboard'] = 'Analitikai irányítópult megtekintése';

// Course settings.
$string['coursesettings:title'] = 'Kurzus AI beállítások';
$string['coursesettings:enabled'] = 'Kurzus felülírások engedélyezése';
$string['coursesettings:enabled_desc'] = 'Ha engedélyezve van, az alábbi beállítások felülírják a globális AI konfigurációt.';
$string['coursesettings:using_global'] = 'Globális beállítás használata';
$string['coursesettings:saved'] = 'Kurzus AI beállítások mentve.';
$string['coursesettings:ell_pronunciation'] = 'Kiejtésgyakorlási mód';
$string['coursesettings:ell_pronunciation_desc'] = 'A "Kiejtés gyakorlás" chip megjelenítése ebben a kurzusban.';
$string['coursesettings:ell_pronunciation_enable'] = 'Kiejtésgyakorlási chip engedélyezése';
$string['coursesettings:rag'] = 'Szemantikai keresés (RAG)';
$string['coursesettings:rag_desc'] = 'Visszakeresés-augmentált generálás engedélyezése ehhez a kurzushoz.';
$string['coursesettings:rag_enable'] = 'RAG engedélyezése ehhez a kurzushoz';
$string['coursesettings:speaking_practice'] = 'Beszédgyakorlás';
$string['coursesettings:speaking_practice_desc'] = 'A "Beszédgyakorlás" chip megjelenítése a hallgatóknak.';
$string['coursesettings:speaking_practice_enable'] = 'Beszédgyakorlási chip engedélyezése';
$string['coursesettings:global_settings_link'] = 'Globális AI beállítások';
$string['coursesettings:token_usage'] = 'Token használat és költség';
$string['coursesettings:token_usage_desc'] = 'Token használat, költségbecslések és hallgatónkénti bontás megtekintése.';

// Language.
$string['lang:switch'] = 'Igen, váltás';
$string['lang:dismiss'] = 'Nem, köszönöm';
$string['lang:change'] = 'Nyelv váltása';
$string['lang:english'] = 'Angol';

// Chat widget.
$string['chat:title'] = 'SOLA';
$string['chat:placeholder'] = 'Tegyen fel egy kérdést...';
$string['chat:send'] = 'Küldés';
$string['chat:close'] = 'Csevegés bezárása';
$string['chat:open'] = 'SOLA megnyitása';
$string['chat:change_avatar'] = 'Avatar módosítása';
$string['chat:clear'] = 'Előzmények törlése';
$string['chat:clear_confirm'] = 'Biztosan törölni szeretné a csevegési előzményeket?';
$string['chat:copy'] = 'Beszélgetés másolása';
$string['chat:copied'] = 'Beszélgetés vágólapra másolva';
$string['chat:copy_failed'] = 'Másolás sikertelen';
$string['chat:greeting'] = 'Szia, {$a}! A SOLA vagyok, a Saylor Online Tanulási Asszisztens.';
$string['chat:thinking'] = 'Gondolkodom...';
$string['chat:error'] = 'Sajnálom, valami hiba történt. Kérjük, próbálja újra.';
$string['chat:error_auth'] = 'Hitelesítési hiba. Kérjük, lépjen kapcsolatba a rendszergazdával.';
$string['chat:error_ratelimit'] = 'Túl sok kérés. Kérjük, várjon egy pillanatot és próbálja újra.';
$string['chat:error_unavailable'] = 'Az AI szolgáltatás átmenetileg nem érhető el.';
$string['chat:error_notconfigured'] = 'A SOLA még nincs konfigurálva. Kérjük, lépjen kapcsolatba a rendszergazdával.';
$string['chat:expand'] = 'Csevegés kibontása';
$string['chat:collapse'] = 'Csevegés összecsukása';
$string['chat:mic'] = 'Mondja el a kérdését';
$string['chat:mic_error'] = 'Mikrofonhiba. Kérjük, ellenőrizze a böngésző engedélyeit.';
$string['chat:mic_unsupported'] = 'A hangbemenet nem támogatott ebben a böngészőben.';
$string['chat:newline_hint'] = 'Shift+Enter új sorhoz';
$string['chat:you'] = 'Ön';
$string['chat:assistant'] = 'SOLA';
$string['chat:history_loaded'] = 'Korábbi beszélgetés betöltve.';
$string['chat:history_cleared'] = 'Csevegési előzmények törölve.';
$string['chat:offtopic_warning'] = 'Úgy tűnik, a kérdése nem kapcsolódik ehhez a kurzushoz. Kérjük, maradjon a témánál!';
$string['chat:offtopic_ended'] = 'Az AI tutor hozzáférése átmenetileg felfüggesztve {$a} percre.';
$string['chat:offtopic_locked'] = 'A hozzáférése átmenetileg felfüggesztve. Próbálja újra {$a} perc múlva.';
$string['chat:escalated_to_support'] = 'Nem tudtam teljesen megválaszolni a kérdését, ezért egy támogatási jegy készült. Hivatkozási szám: {$a}';
$string['chat:studyplan_intro'] = 'Segíthetek tanulmányi tervet készíteni! Mondja el, hány órát tud hetente tanulásra szánni.';

// Quiz.
$string['chat:quiz'] = 'Gyakorló teszt';
$string['chat:quiz_setup_title'] = 'Gyakorló teszt';
$string['chat:quiz_questions'] = 'Kérdések száma';
$string['chat:quiz_topic'] = 'Téma';
$string['chat:quiz_topic_guided'] = 'AI-vezérelt (haladása alapján)';
$string['chat:quiz_topic_default'] = 'Jelenlegi kurzus tartalom';
$string['chat:quiz_topic_custom'] = 'Egyéni téma…';
$string['chat:quiz_custom_placeholder'] = 'Írjon be egy témát vagy kérdést...';
$string['chat:quiz_start'] = 'Teszt indítása';
$string['chat:quiz_cancel'] = 'Mégse';
$string['chat:quiz_loading'] = 'Teszt generálása…';
$string['chat:quiz_error'] = 'Nem sikerült tesztet generálni. Kérjük, próbálja újra.';
$string['chat:quiz_correct'] = 'Helyes!';
$string['chat:quiz_wrong'] = 'Helytelen.';
$string['chat:quiz_next'] = 'Következő kérdés';
$string['chat:quiz_finish'] = 'Eredmények megtekintése';
$string['chat:quiz_score'] = 'Teszt kész! Eredmény: {$a->score}/{$a->total}.';
$string['chat:quiz_summary'] = 'Elvégeztem egy {$a->total} kérdéses gyakorló tesztet a(z) „{$a->topic}" témából, eredményem: {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Tanulási célkitűzések';
$string['chat:quiz_topic_modules'] = 'Kurzus téma';
$string['chat:quiz_subtopic_select'] = 'Válasszon egy elemet…';
$string['chat:quiz_topic_sections'] = 'Kurzus szekciók';
$string['chat:quiz_score_great'] = 'Kiváló munka! Tényleg ismeri ezt az anyagot.';
$string['chat:quiz_score_good'] = 'Jó próbálkozás! Folytassa az áttekintést a megértés erősítéséhez.';
$string['chat:quiz_score_practice'] = 'Gyakoroljon tovább. Tekintse át a kapcsolódó anyagot, majd próbálja újra.';
$string['chat:quiz_review_heading'] = 'Áttekintés';
$string['chat:quiz_retake'] = 'Teszt megismétlése';
$string['chat:quiz_exit'] = 'Kilépés a tesztből';
$string['chat:quiz_your_answer'] = 'Az Ön válasza';
$string['chat:quiz_correct_answer'] = 'Helyes válasz';

// Conversation starters.
$string['chat:starters_label'] = 'Beszélgetésindítók';
$string['chat:starter_help_page'] = 'Segítség ehhez az oldalhoz';
$string['chat:starter_quiz'] = 'Tesztelj engem';
$string['chat:starter_study_plan'] = 'Tanulmányi terv';
$string['chat:starter_ask_anything'] = 'Kérdezz bármit';
$string['chat:starter_review_practice'] = 'Ismétlés és gyakorlás';
$string['chat:starter_ell_practice'] = 'Beszédgyakorlás';
$string['chat:starter_ell_pronunciation'] = 'Kiejtés gyakorlás';
$string['chat:starter_speak'] = 'Mondjon egy indítót';
$string['chat:starter_explain'] = 'Magyarázd el';
$string['chat:starter_key_concepts'] = 'Főfogalmak';
$string['chat:starter_help_me'] = 'AI segítség';
$string['chat:starter_ai_coach'] = 'AI edző';
$string['chat:starter_quick_study'] = 'Gyors tanulás';
$string['chat:starter_help_lesson'] = 'Magyarázd el';
$string['chat:starter_prompt_coach'] = 'AI Prompt Coach';
$string['chat:starter_help_lesson_prompt'] = 'Tudna segíteni megérteni a jelenlegi leckét? Adjon egy összefoglalót a kulcsfogalmakról.';
$string['chat:starter_study_plan_prompt'] = 'Szeretném megtervezni a mai tanulásomat. Kérdezze meg: (1) mit szeretnék ma elérni, és (2) mennyi időm van.';
$string['chat:starter_explain_prompt'] = 'Meg tudná magyarázni a legfontosabb fogalmat ebben a kurzusban eddig?';

// Reset.
$string['chat:reset'] = 'Kezdje elölről';

// Starter admin settings.
$string['starters:admin_title'] = 'Beszélgetésindító beállítások';
$string['starters:admin_desc'] = 'Konfigurálja a hallgatóknak megjelenített beszélgetésindító chipeket.';
$string['starters:add_new'] = 'Új hozzáadása';
$string['starters:save'] = 'Változtatások mentése';
$string['starters:saved'] = 'Konfiguráció mentve.';
$string['starters:reset_defaults'] = 'Alapértékek visszaállítása';
$string['starters:reset_confirm'] = 'Visszaállítja az összes alapértelmezettet? Az egyéni elemek törlődnek.';
$string['starters:reset_done'] = 'Visszaállítva az alapértékekre.';
$string['starters:back_settings'] = 'Vissza a beállításokhoz';
$string['starters:course_section'] = 'Beszélgetésindítók';
$string['starters:course_desc'] = 'Engedélyezze vagy tiltsa le az egyes indítókat ehhez a kurzushoz.';

// Topic picker.
$string['chat:topic_picker_title'] = 'Mire szeretne összpontosítani?';
$string['chat:topic_picker_title_help'] = 'Mihez kell segítség?';
$string['chat:topic_picker_title_explain'] = 'Mit szeretné, hogy elmagyarázzak?';
$string['chat:topic_picker_title_study'] = 'Melyik területre szeretne összpontosítani?';
$string['chat:topic_start'] = 'Tovább';

// Expand.
$string['chat:fullscreen'] = 'Teljes képernyő';
$string['chat:exitfullscreen'] = 'Kilépés a teljes képernyőből';

// Settings panel.
$string['chat:language'] = 'Nyelv váltása';
$string['chat:settings_panel'] = 'Beállítások';
$string['chat:settings_language'] = 'Nyelv';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Hang';
$string['chat:settings_voice_admin'] = 'A hangbeállításokat az adminisztrációs panelen kezeljük.';

// Voice mode.
$string['chat:voice_mode'] = 'Hang mód';
$string['chat:voice_title'] = 'Beszéljen a SOLA-val';
$string['chat:voice_copy'] = 'Folytasson természetes hangbeszélgetést a tanulási asszisztenssel.';
$string['chat:voice_ready'] = 'Indulásra kész';
$string['chat:voice_start'] = 'Beszélgetés indítása';
$string['chat:voice_end'] = 'Hang munkamenet befejezése';
$string['chat:voice_connecting'] = 'Csatlakozás...';
$string['chat:voice_listening'] = 'Hallgatás...';
$string['chat:voice_speaking'] = 'SOLA beszél...';
$string['chat:voice_idle'] = 'Kész';
$string['chat:voice_error'] = 'A hangkapcsolat sikertelen. Ellenőrizze a beállításait.';
$string['chat:quiz_locked'] = 'A SOLA szünetel a tesztek alatt az akadémiai tisztesség támogatása érdekében. Sok sikert!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mód navigáció';
$string['chat:mode_chat'] = 'Csevegés';
$string['chat:mode_voice'] = 'Hang';
$string['chat:mode_history'] = 'Előzmények';

// History panel.
$string['chat:history_title'] = 'Beszélgetési előzmények';
$string['chat:history_subtitle'] = 'Legutóbbi üzenetei ebben a kurzusban.';
$string['chat:history_empty'] = 'Még nincsenek beszélgetések.';
$string['chat:history_refresh'] = 'Frissítés';

// Debug panel.
$string['chat:debug_context'] = 'Kontextus hibakeresés';
$string['chat:debug_context_toggle'] = 'Kontextus hibakeresési vizsgáló váltása';
$string['chat:debug_context_copy'] = 'Másolás';
$string['chat:debug_context_browser'] = 'Böngésző pillanatkép';
$string['chat:debug_context_request'] = 'Utolsó SSE kérés';
$string['chat:debug_context_prompt'] = 'Szerver válasz';

// Quiz hide settings.
$string['settings:quiz_hide_heading'] = 'Tesztoldal láthatóság';
$string['settings:quiz_hide_heading_desc'] = 'Szabályozza, hogy a SOLA widget megjelenjen-e a Moodle tesztoldalakon.';
$string['settings:hide_on_quiz_for_students'] = 'SOLA elrejtése tesztoldalakon hallgatóknak';
$string['settings:hide_on_quiz_for_students_desc'] = 'A SOLA widget teljes elrejtése minden tesztoldalon hallgatóknak.';
$string['settings:hide_on_quiz_for_staff'] = 'SOLA elrejtése tesztoldalakon személyzetnek';
$string['settings:hide_on_quiz_for_staff_desc'] = 'A SOLA widget teljes elrejtése minden tesztoldalon tanároknak és rendszergazdáknak.';

// Wellbeing.
$string['settings:wellbeing_heading'] = 'Jóllét és biztonság';
$string['settings:wellbeing_heading_desc'] = 'A SOLA felismeri a szorongás jeleit és empátiával és támogatási erőforrásokkal válaszol.';
$string['settings:wellbeing_enabled'] = 'Jólléti támogatás engedélyezése';
$string['settings:wellbeing_enabled_desc'] = 'A SOLA felismeri az érzelmi szorongás jeleit és krízis erőforrásokat biztosít.';

// Voice mode settings.
$string['settings:realtime_heading'] = 'Hang mód (OpenAI Realtime)';
$string['settings:realtime_enabled'] = 'Hang mód engedélyezése';
$string['settings:realtime_enabled_desc'] = 'Lehetővé teszi a hallgatók számára a valós idejű hangbeszélgetéseket.';
$string['settings:realtime_apikey'] = 'OpenAI API Kulcs (Hang & TTS)';
$string['settings:realtime_apikey_desc'] = 'Hang módhoz és az üzenetek TTS gombjához használva.';
$string['settings:realtime_voice'] = 'SOLA hang';
$string['settings:realtime_voice_desc'] = 'Hang a Hang módhoz és a TTS gombhoz.';

// Mobile.
$string['mobile_welcome'] = 'Szia, {$a}!';
$string['mobile_welcome_sub'] = 'A SOLA vagyok, a tanulási asszisztensed. Hogyan segíthetek ma?';
$string['mobile_placeholder'] = 'Tegyen fel egy kérdést...';
$string['mobile_clear'] = 'Előzmények törlése';
$string['mobile_disabled'] = 'A SOLA nem elérhető ehhez a kurzushoz.';
$string['mobile_chip_concepts'] = 'Főfogalmak';
$string['mobile_chip_studyplan'] = 'Tanulmányi terv';
$string['mobile_chip_quiz'] = 'Tesztelj engem';
