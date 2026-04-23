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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['task:run_meta_ai_query'] = 'Ütemezett Tanulási radar elemzési lekérdezés futtatása';

// Settings.
$string['settings:enabled'] = 'AI Kurzus Asszisztens engedélyezése';
$string['settings:enabled_desc'] = 'Az AI Kurzus Asszisztens widget engedélyezése vagy letiltása a kurzusoldalon.';
$string['settings:default_course_mode'] = 'Új kurzusok alapértelmezése';
$string['settings:default_course_mode_desc'] = 'Szabályozza, hogy a SOLA megjelenik-e egy kurzuson, ha nincs kurzus-specifikus választás. Az új telepítések alapértelmezés szerint "Alapértelmezetten letiltva" állapotban vannak, így a rendszergazdák kurzusonként engedélyezhetik az Analytics oldalról vagy a Course AI Settings oldalról.';
$string['settings:default_course_mode_per_course'] = 'Alapértelmezetten letiltva (kurzusonként engedélyezés)';
$string['settings:default_course_mode_all'] = 'Minden kurzuson engedélyezve';
$string['settings:auto_open'] = 'Automatikus megnyitás az első látogatáskor';
$string['settings:auto_open_desc'] = 'Engedélyezés esetén a SOLA fiók automatikusan megnyílik, amikor egy hallgató először jut el az egyes kurzusokra. A későbbi oldalbetöltések ugyanabban a kurzusban nem nyitják meg újra a fiókot — az állapot kurzusonként követhető a hallgató böngészőjében a localStorage segítségével. Asztali számítógépen és mobilon is alkalmazható. Kurzusonként felülbírálható a Course AI Settings oldalon.';
$string['settings:comparison_providers'] = 'Összehasonlító szolgáltatók (LLM választó)';
$string['settings:comparison_providers_desc'] = 'Adjon hozzá további AI szolgáltatókat a widgetbe épített LLM választóhoz, hogy az adminisztrátorok összehasonlíthassák a válaszokat a szolgáltatók között. Sorok hozzáadásához használja az alábbi táblázatot. A hőmérséklet oszlop opcionális (hagyja üresen a globális hőmérséklet használatához). Tárolt formátum: provider_id|api_key|model1,model2|temperature. A fent beállított elsődleges szolgáltató mindig automatikusan szerepel. Csak a kezelési jogosultsággal rendelkező adminisztrátorok látják a választót; a diákok soha nem látják. Érvényes provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Alapértelmezett AI szolgáltató';
$string['settings:provider_desc'] = 'Válassza ki a csevegés-kiegészítésekhez használandó AI-szolgáltatót. Válassza a "Moodle AI (core_ai subsystem)" lehetőséget, hogy a kéréseket a Moodle beépített AI-konfigurációján keresztül irányítsa a Site admin > AI oldalon; az alábbi API-kulcs, modell és alap URL mezőket figyelmen kívül hagyja ebben az üzemmódban. A streaming, az eszközhasználat és a prompt caching nem érhető el a core_ai-n keresztül — a válaszok egyetlen darabban érkeznek. A legjobb tanulói élményért használjon közvetlen szolgáltatót.';
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
$string['coursesettings:sola_enabled'] = 'SOLA ezen a kurzuson';
$string['coursesettings:sola_enabled_toggle'] = 'A SOLA widget megjelenítése ezen a kurzuson';
$string['coursesettings:sola_enabled_desc'] = 'Szabályozza, hogy a SOLA chat widget megjelenik-e ezen a kurzuson. A webhelyszintű alapértelmezés a bővítmény beállításaiban a General > Default for new courses alatt állítható be.';
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
$string['chat:clear'] = 'Képernyő törlése';
$string['chat:clear_confirm'] = 'Törli a látható üzeneteket? A teljes csevegési előzmény mentve marad, és a widget újbóli megnyitásával újratölthető.';
$string['chat:copy'] = 'Beszélgetés másolása';
$string['chat:copied'] = 'Beszélgetés vágólapra másolva';
$string['chat:copy_failed'] = 'Másolás sikertelen';
$string['chat:greeting'] = 'Szia, {$a}! A SOLA vagyok. Miben segíthetek ma?';
$string['chat:thinking'] = 'Gondolkodom...';
$string['chat:error'] = 'Sajnálom, valami hiba történt. Kérjük, próbálja újra.';
$string['chat:error_auth'] = 'Hitelesítési hiba. Kérjük, lépjen kapcsolatba a rendszergazdával.';
$string['chat:error_ratelimit'] = 'Túl sok kérés. Kérjük, várjon egy pillanatot és próbálja újra.';
$string['chat:error_unavailable'] = 'Az AI szolgáltatás átmenetileg nem érhető el.';
$string['chat:error_notconfigured'] = 'A SOLA még nincs konfigurálva. Kérjük, lépjen kapcsolatba a rendszergazdával.';
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
$string['chat:starter_help_page'] = 'Segítség ezzel';
$string['chat:starter_quiz'] = 'Kérdezz ebből';
$string['chat:starter_study_plan'] = 'Tanulmányi terv';
$string['chat:starter_ask_anything'] = 'Kérdezz bármit';
$string['chat:starter_review_practice'] = 'Ismétlés és gyakorlás';
$string['chat:starter_ai_project_coach'] = 'AI projektvezető';
$string['chat:starter_ell_practice'] = 'Társalgási gyakorlat';
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
$string['chat:mode_history'] = 'Jegyzetek';

// History panel.
$string['chat:history_title'] = 'Jegyzetek és beszélgetési előzmények';
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

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Frontend kiszolgálás';
$string['settings:cdn_heading_desc'] = 'A SOLA frontend erőforrásainak (JS/CSS) kiszolgálása külső CDN-ről a Moodle fájlrendszer helyett. Ez lehetővé teszi a frontend frissítéseket bővítmény-frissítés nélkül. Hagyja üresen a CDN URL-t a helyi bővítményfájlok használatához.';
$string['settings:cdn_url'] = 'CDN alap URL';
$string['settings:cdn_url_desc'] = 'Alap URL, ahol a sola.min.js és sola.min.css fájlok tárolva vannak. Példa: https://your-org.github.io/sola-cdn. Hagyja üresen a helyi bővítményfájlok használatához.';
$string['settings:cdn_version'] = 'CDN erőforrás verzió';
$string['settings:cdn_version_desc'] = 'A CDN URL-ekhez hozzáfűzött verziósztring a cache busting érdekében. Frissítse minden CDN telepítés után (pl. 3.2.4 vagy commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Összesített használat';
$string['analytics:tab_bycourse'] = 'Kurzusonként';
$string['analytics:tab_comparison'] = 'AI vs nem használók';
$string['analytics:tab_byunit'] = 'Egységenként';
$string['analytics:tab_usagetypes'] = 'Használattípusok';
$string['analytics:tab_themes'] = 'Témák';
$string['analytics:tab_feedback'] = 'AI visszajelzés';
$string['analytics:total_students'] = 'Összes hallgató';
$string['analytics:active_users'] = 'Aktív AI felhasználók';
$string['analytics:msgs_per_student'] = 'Üzenetek hallgatónként';
$string['analytics:avg_session'] = 'Átlagos munkamenet időtartama';
$string['analytics:return_rate'] = 'Visszatérési arány';
$string['analytics:total_sessions'] = 'Összes munkamenet';
$string['analytics:thumbs_up'] = 'Tetszik';
$string['analytics:thumbs_down'] = 'Nem tetszik';
$string['analytics:hallucination_flags'] = 'Pontatlanság jelölések';
$string['analytics:msgs_to_resolution'] = 'Üzenetek a megoldásig';
$string['analytics:helpful'] = 'Hasznos';
$string['analytics:not_helpful'] = 'Nem hasznos';
$string['analytics:flag_hallucination'] = 'Ez a válasz pontatlan információt tartalmaz';
$string['analytics:submit_rating'] = 'Küldés';
$string['analytics:thanks_feedback'] = 'Köszönjük a visszajelzését';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:history_saved_subtitle'] = 'A mentett válaszok ezen az eszközön maradnak ehhez a kurzushoz.';
$string['chat:history_saved_empty'] = 'Ments el egy AI-választ, hogy itt láthasd.';
$string['chat:history_views_label'] = 'Előzménynézetek';
$string['chat:history_view_saved'] = 'Mentett';
$string['chat:history_view_recent'] = 'Előzmények';
$string['chat:debug_refresh'] = 'Frissítés';
$string['chat:debug_copy_all'] = 'Összes másolása';
$string['chat:debug_close'] = 'Bezárás';
$string['chat:language_switch'] = 'Nyelv váltása';
$string['chat:language_dismiss'] = 'Nyelvjavaslat elvetése';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM-szolgáltató kiválasztása';
$string['chat:llm_model_label'] = 'Modell';
$string['chat:llm_model_select'] = 'LLM-modell kiválasztása';
$string['chat:footer_usertesting'] = 'Használhatósági tesztelés';
$string['chat:footer_feedback'] = 'Visszajelzés';
$string['chat:voice_panel_title'] = 'Beszélgetés {$a} partnerrel (Kísérleti)';

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
$string['rubric:done'] = 'Kész';
$string['rubric:encourage_high'] = 'Kiváló! Így tovább!';
$string['rubric:encourage_low'] = 'Jó kezdet! A rendszeres gyakorlás segít.';
$string['rubric:encourage_mid'] = 'Jó erőfeszítés! Gyakoroljon tovább.';
$string['rubric:overall'] = 'Összesen';
$string['rubric:practice_again'] = 'Gyakoroljon újra';
$string['rubric:score_title_conversation'] = 'Beszélgetés gyakorlat pontszám';
$string['rubric:score_title_pronunciation'] = 'Kiejtés gyakorlat pontszám';
$string['rubric:scoring'] = 'Kiértékelés...';
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
$string['demo:title'] = 'Tesztkörnyezet';
$string['demo:heading'] = 'Tesztkörnyezet';
$string['demo:intro'] = 'Ez az oldal létrehoz egy tesztkurzust, amely <strong>el van rejtve a hallgatók elől</strong> (visible=0), és feltölti kitalált hallgatókkal, AI-beszélgetésekkel, értékelésekkel és visszajelzésekkel. Hasznos az Analytics Dashboard előnézetéhez vagy a bővítmény módosításainak ellenőrzéséhez anélkül, hogy bármely valódi, beiratkozott hallgatót érintene.';
$string['demo:step1'] = '1. lépés: tesztkurzus';
$string['demo:step2'] = '2. lépés: kitalált hallgatók és AI-beszélgetések hozzáadása';
$string['demo:course_exists'] = 'A tesztkurzus létezik: <strong>{$a->fullname}</strong> (rövid név <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'rejtett';
$string['demo:badge_visible'] = 'látható a hallgatóknak';
$string['demo:no_course'] = 'Nem található tesztkurzus. Kattintson lent az egyik létrehozásához.';
$string['demo:create_btn'] = 'Rejtett tesztkurzus létrehozása';
$string['demo:open_course'] = 'Kurzus megnyitása &rarr;';
$string['demo:seed_intro'] = 'Létrehozza a demo_student_001, demo_student_002, ... felhasználókat, beiratkoztatja őket a tesztkurzusra, és beszúr szintetikus beszélgetéseket, üzeneteket, értékeléseket és visszajelzéseket. Futtassa újra több adat hozzáadásához, vagy jelölje be a „először törlés“ opciót az újrakezdéshez.';
$string['demo:users_label'] = 'Felhasználók';
$string['demo:weeks_label'] = 'Hetek';
$string['demo:clear_label'] = 'Először törölje a meglévő demo_* felhasználókat';
$string['demo:seed_btn'] = 'Hallgatók és beszélgetések hozzáadása';
$string['demo:view_analytics'] = 'Analitika megtekintése ehhez a kurzushoz &rarr;';
$string['demo:footer'] = 'Az itt létrehozott adatok a szabványos Moodle felhasználó / beiratkozás táblákban és a bővítmény saját beszélgetéstábláiban találhatók. Minden kitalált felhasználónév <code>demo_student_</code> előtaggal kezdődik, így könnyen szűrhetők vagy eltávolíthatók. Eltávolításukhoz futtassa újra a feltöltési lépést a „Először törölje a meglévő demo_* felhasználókat“ opcióval bejelölve.';
$string['demo:course_fullname'] = 'SOLA tesztkurzus (rejtett)';
$string['demo:notify_created'] = 'A tesztkurzus készen áll: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Nem sikerült létrehozni a kurzust: {$a}';
$string['demo:notify_seeded'] = 'Hozzáadva: {$a->users} felhasználó, {$a->conversations} beszélgetés, {$a->messages} üzenet, {$a->ratings} értékelés, {$a->feedback} visszajelzés.';
$string['demo:notify_seed_fail'] = 'Nem sikerült adatot hozzáadni: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Tokenköltség és analitika &rarr;';
$string['toc:testing'] = 'Tesztkörnyezet &rarr;';
$string['toc:back_to_course'] = '&larr; Vissza: {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'A pdftotext bináris nem található; a PDF-kivonatolás letiltva.';
$string['rag:pdftotext_available'] = 'A pdftotext észlelve itt: {$a}.';
$string['rag:docx_unavailable'] = 'A PHP ZipArchive bővítmény nem érhető el; a DOCX-kivonatolás letiltva.';
$string['rag:h5p_unavailable'] = 'A H5P-tartalom nem olvasható; kihagyás.';
$string['rag:scorm_too_large'] = 'A SCORM-csomag meghaladja a beállított méretkorlátot ({$a} MB); kihagyás.';
$string['rag:scorm_unzip_failed'] = 'A SCORM-csomagot nem sikerült kicsomagolni; kihagyás.';
$string['rag:transcript_fetch_failed'] = 'Nem sikerült átiratot lekérni innen: {$a}.';
$string['rag:transcript_cf_challenge'] = 'Az átirat URL-t a Cloudflare-kihívás blokkolja: {$a}.';
$string['rag:embed_detected'] = 'Beágyazott média észlelve: {$a}';
$string['rag:embed_transcript_attached'] = 'Átirat csatolva ehhez: {$a}';

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
