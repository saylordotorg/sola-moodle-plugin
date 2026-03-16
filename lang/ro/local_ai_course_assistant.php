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
 * Language strings for local_ai_course_assistant — Romanian.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Asistent de curs AI';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Stochează conversațiile cu tutorele AI pe utilizator și curs.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID-ul utilizatorului care deține conversația.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID-ul cursului căruia îi aparține conversația.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Titlul conversației.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Ora la care a fost creată conversația.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Ora ultimei modificări a conversației.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Stochează mesajele individuale din conversațiile cu tutorele AI.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID-ul utilizatorului care a trimis mesajul.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID-ul cursului căruia îi aparține mesajul.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Rolul expeditorului mesajului (utilizator sau asistent).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Conținutul mesajului.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Numărul de jetoane utilizate pentru mesaj.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Ora la care a fost creat mesajul.';
$string['ai_course_assistant:use'] = 'Utilizarea chatului cu tutorele AI';
$string['ai_course_assistant:viewanalytics'] = 'Vizualizarea analizelor chatului cu tutorele AI';
$string['ai_course_assistant:manage'] = 'Gestionarea setărilor chatului cu tutorele AI (rol de administrator)';
$string['settings:enabled'] = 'Activați asistentul de curs AI';
$string['settings:enabled_desc'] = 'Activați sau dezactivați widgetul asistentului de curs AI pe paginile de curs.';
$string['settings:provider'] = 'Furnizor AI';
$string['settings:provider_desc'] = 'Selectați furnizorul AI de utilizat pentru completările de chat.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (local)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Personalizat (compatibil OpenAI)';
$string['settings:apikey'] = 'Cheie API';
$string['settings:apikey_desc'] = 'Cheia API pentru furnizorul selectat. Nu este necesară pentru Ollama.';
$string['settings:model'] = 'Numele modelului';
$string['settings:model_desc'] = 'Modelul de utilizat. Valoarea implicită depinde de furnizor (ex.: claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL de bază API';
$string['settings:apibaseurl_desc'] = 'URL-ul de bază API. Completat automat în funcție de furnizor, dar poate fi suprascris. Lăsați gol pentru a utiliza valoarea implicită a furnizorului.';
$string['settings:systemprompt'] = 'Șablon prompt de sistem';
$string['settings:systemprompt_desc'] = 'Promptul de sistem trimis către AI. Utilizați substituenții: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Ești un tutore AI util pentru cursul „{{coursename}}". Rolul studentului este {{userrole}}.

Subiecte acoperite în curs:
{{coursetopics}}

Ajută studentul să înțeleagă conținutul cursului. Fii încurajator, clar și riguros din punct de vedere pedagogic.';
$string['settings:temperature'] = 'Temperatură';
$string['settings:temperature_desc'] = 'Controlează aleatorismul. Valorile mici sunt mai concentrate, valorile mari sunt mai creative. Interval: 0,0 până la 2,0.';
$string['settings:maxhistory'] = 'Istoric maxim de conversații';
$string['settings:maxhistory_desc'] = 'Numărul maxim de perechi de mesaje incluse în solicitările API. Mesajele mai vechi sunt eliminate.';
$string['settings:avatar'] = 'Avatar chat';
$string['settings:avatar_desc'] = 'Selectați pictograma avatar pentru butonul widgetului de chat.';
$string['settings:avatar_saylor'] = 'Logo {$a} (implicit)';
$string['settings:position'] = 'Poziția widgetului';
$string['settings:position_desc'] = 'Poziția widgetului de chat pe pagină.';
$string['settings:position_br'] = 'Dreapta jos';
$string['settings:position_bl'] = 'Stânga jos';
$string['settings:position_tr'] = 'Dreapta sus';
$string['settings:position_tl'] = 'Stânga sus';
$string['chat:settings'] = 'Setări plugin';
$string['analytics:viewdashboard'] = 'Vizualizare panou de analiză';
$string['coursesettings:title'] = 'Setări AI curs';
$string['coursesettings:enabled'] = 'Activați suprascrierea cursului';
$string['coursesettings:enabled_desc'] = 'Când sunt activate, setările de mai jos suprascriu configurația globală a furnizorului AI doar pentru acest curs. Lăsați câmpurile goale pentru a moșteni valorile globale.';
$string['coursesettings:using_global'] = 'Se utilizează setarea globală';
$string['coursesettings:saved'] = 'Setările AI ale cursului au fost salvate.';
$string['coursesettings:global_settings_link'] = 'Setări AI globale';
$string['lang:switch'] = 'Da, schimbați';
$string['lang:dismiss'] = 'Nu, mulțumesc';
$string['lang:change'] = 'Schimbați limba';
$string['lang:english'] = 'Engleză';
$string['chat:title'] = 'Tutore AI';
$string['chat:placeholder'] = 'Puneți o întrebare...';
$string['chat:send'] = 'Trimiteți';
$string['chat:close'] = 'Închideți chatul';
$string['chat:open'] = 'Deschideți chatul cu tutorele AI';
$string['chat:clear'] = 'Ștergeți istoricul';
$string['chat:clear_confirm'] = 'Sunteți sigur că doriți să ștergeți istoricul chatului pentru acest curs?';
$string['chat:copy'] = 'Copiați conversația';
$string['chat:copied'] = 'Conversația a fost copiată în clipboard';
$string['chat:copy_failed'] = 'Nu s-a putut copia conversația';
$string['chat:greeting'] = 'Bună! Sunt tutorele tău AI pentru acest curs. Cum te pot ajuta astăzi?';
$string['chat:thinking'] = 'Se gândește...';
$string['chat:error'] = 'Ne pare rău, a apărut o eroare. Vă rugăm să încercați din nou.';
$string['chat:error_auth'] = 'Eroare de autentificare. Contactați administratorul.';
$string['chat:error_ratelimit'] = 'Prea multe solicitări. Așteptați un moment și încercați din nou.';
$string['chat:error_unavailable'] = 'Serviciul AI este temporar indisponibil. Încercați din nou mai târziu.';
$string['chat:error_notconfigured'] = 'Tutorele AI nu a fost încă configurat. Contactați administratorul.';
$string['chat:expand'] = 'Extindeți chatul';
$string['chat:collapse'] = 'Restrângeți chatul';
$string['chat:mic'] = 'Puneți întrebarea vocal';
$string['chat:mic_error'] = 'Eroare de microfon. Verificați permisiunile browserului.';
$string['chat:mic_unsupported'] = 'Introducerea vocală nu este acceptată de acest browser.';
$string['chat:newline_hint'] = 'Shift+Enter pentru un paragraf nou';
$string['chat:you'] = 'Tu';
$string['chat:assistant'] = 'Tutore AI';
$string['chat:history_loaded'] = 'Conversația anterioară a fost încărcată.';
$string['chat:history_cleared'] = 'Istoricul chatului a fost șters.';
$string['chat:offtopic_warning'] = 'Se pare că întrebarea dvs. nu este legată de acest curs. Încercați să rămâneți la subiect pentru a vă putea ajuta cât mai bine!';
$string['chat:offtopic_ended'] = 'Accesul dvs. la tutorele AI a fost suspendat temporar pentru {$a} minute, deoarece conversația a deviat prea mult de la subiect. Folosiți acest timp pentru a revizui materialele cursului. Puteți încerca din nou mai târziu.';
$string['chat:offtopic_locked'] = 'Accesul dvs. la tutorele AI este temporar suspendat. Puteți încerca din nou în {$a} minute. Concentrați-vă pe întrebări legate de curs la întoarcere.';
$string['chat:escalated_to_support'] = 'Nu am putut răspunde complet la întrebarea dvs., așa că am creat un tichet de asistență. Un membru al echipei de asistență vă va contacta. Numărul tichetului dvs. este: {$a}';
$string['chat:studyplan_intro'] = 'Vă pot ajuta să creați un plan de studiu pentru acest curs! Spuneți-mi câte ore pe săptămână puteți dedica studiului și vă voi ajuta să construiți un plan structurat.';
$string['settings:faq_heading'] = 'FAQ și asistență';
$string['settings:faq_heading_desc'] = 'Configurați FAQ centralizat și integrarea tichetelor de asistență Zendesk.';
$string['settings:faq_content'] = 'Conținut FAQ';
$string['settings:faq_content_desc'] = 'Introduceți intrările FAQ (una pe linie în format: Q: întrebare | A: răspuns). Acestea vor fi furnizate AI-ului pentru a răspunde la întrebările comune de asistență.';
$string['settings:zendesk_enabled'] = 'Activați escaladarea Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Când AI-ul nu poate rezolva o întrebare de asistență, creează automat un tichet Zendesk cu un rezumat al conversației.';
$string['settings:zendesk_subdomain'] = 'Subdomeniu Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomeniul dvs. Zendesk (ex.: „companiamea" pentru companiamea.zendesk.com).';
$string['settings:zendesk_email'] = 'E-mail API Zendesk';
$string['settings:zendesk_email_desc'] = 'Adresa de e-mail a utilizatorului Zendesk pentru autentificarea API (cu sufixul /token).';
$string['settings:zendesk_token'] = 'Jeton API Zendesk';
$string['settings:zendesk_token_desc'] = 'Jeton API pentru autentificarea Zendesk.';
$string['settings:offtopic_heading'] = 'Detectarea subiectelor irelevante';
$string['settings:offtopic_heading_desc'] = 'Configurați modul în care chatul gestionează conversațiile irelevante.';
$string['settings:offtopic_enabled'] = 'Activați detectarea subiectelor irelevante';
$string['settings:offtopic_enabled_desc'] = 'Permiteți AI-ului să detecteze și să redirecționeze conversațiile irelevante.';
$string['settings:offtopic_max'] = 'Număr maxim de mesaje irelevante';
$string['settings:offtopic_max_desc'] = 'Numărul de mesaje consecutive irelevante înainte de a lua măsuri.';
$string['settings:offtopic_action'] = 'Acțiune în caz de irelevant';
$string['settings:offtopic_action_desc'] = 'Ce se întâmplă când limita de mesaje irelevante este atinsă.';
$string['settings:offtopic_action_warn'] = 'Avertizare și redirecționare';
$string['settings:offtopic_action_end'] = 'Blocare temporară a accesului';
$string['settings:offtopic_lockout_duration'] = 'Durata blocării (minute)';
$string['settings:offtopic_lockout_duration_desc'] = 'Durata (în minute) în care un student pierde accesul la tutorele AI după depășirea limitei de mesaje irelevante. Implicit: 30 minute.';
$string['settings:studyplan_heading'] = 'Planificarea studiului și memento-uri';
$string['settings:studyplan_heading_desc'] = 'Configurați funcțiile planului de studiu și notificările de memento.';
$string['settings:studyplan_enabled'] = 'Activați planificarea studiului';
$string['settings:studyplan_enabled_desc'] = 'Permiteți tutorelui AI să ajute studenții să creeze planuri de studiu personalizate pe baza timpului disponibil.';
$string['settings:reminders_email_enabled'] = 'Activați memento-urile prin e-mail';
$string['settings:reminders_email_enabled_desc'] = 'Permiteți studenților să se aboneze la memento-uri de studiu prin e-mail.';
$string['settings:reminders_whatsapp_enabled'] = 'Activați memento-urile prin WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Permiteți studenților să se aboneze la memento-uri de studiu prin WhatsApp (necesită configurarea API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Punctul final API pentru trimiterea mesajelor WhatsApp (ex.: Twilio, MessageBird). Trebuie să accepte POST cu corp JSON conținând câmpurile „to", „from" și „body".';
$string['settings:whatsapp_api_token'] = 'Jeton API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Jeton de autentificare pentru API-ul WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Număr expeditor WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Numărul de telefon de pe care se trimit mesajele WhatsApp (cu prefixul țării, ex.: +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Țări blocate pentru WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Coduri de țară ISO 3166-1 alpha-2 separate prin virgulă în care memento-urile WhatsApp nu sunt permise din cauza reglementărilor locale (ex.: „CN,IR,KP").';
$string['reminder:email_subject'] = 'Memento de studiu: {$a}';
$string['reminder:email_body'] = 'Bună {$a->firstname},

Iată memento-ul tău de studiu pentru „{$a->coursename}".

{$a->message}

Planul tău de studiu sugerează {$a->hours_per_week} ore pe săptămână pentru acest curs.

Continuă tot așa!

---
Pentru a nu mai primi aceste memento-uri, faceți clic aici: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Memento de studiu pentru {$a->coursename}: {$a->message} (Dezabonare: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Obiectivul de studiu al zilei: ';
$string['unsubscribe:title'] = 'Dezabonare de la memento-urile de studiu';
$string['unsubscribe:success'] = 'V-ați dezabonat cu succes de la memento-urile de studiu pentru acest curs.';
$string['unsubscribe:already'] = 'V-ați dezabonat deja de la aceste memento-uri.';
$string['unsubscribe:invalid'] = 'Link de dezabonare invalid sau expirat.';
$string['unsubscribe:resubscribe'] = 'V-ați răzgândit? Puteți reactiva memento-urile prin chatul cu tutorele AI.';
$string['task:send_reminders'] = 'Trimiteți memento-urile de studiu ale tutorelui AI';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Stochează planurile de studiu ale studenților.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID-ul utilizatorului care deține planul de studiu.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Cursul căruia îi aparține planul de studiu.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Ore pe săptămână pe care studentul le planifică pentru studiu.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Detaliile planului de studiu în format JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Stochează setările de memento de studiu și abonamentele.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID-ul utilizatorului abonat la memento-uri.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Canalul de memento (e-mail sau WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Adresa de e-mail sau numărul de telefon pentru memento-uri.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Codul de țară al utilizatorului pentru conformitate cu reglementările.';
$string['analytics:title'] = 'Analize tutore AI';
$string['analytics:overview'] = 'Prezentare generală';
$string['analytics:total_conversations'] = 'Total conversații';
$string['analytics:total_messages'] = 'Total mesaje';
$string['analytics:active_students'] = 'Studenți activi';
$string['analytics:avg_messages_per_student'] = 'Mesaje medii pe student';
$string['analytics:offtopic_rate'] = 'Rata subiectelor irelevante';
$string['analytics:escalation_count'] = 'Escaladate la asistență';
$string['analytics:studyplan_adoption'] = 'Studenți cu planuri de studiu';
$string['analytics:usage_trends'] = 'Tendințe de utilizare';
$string['analytics:daily_messages'] = 'Volum zilnic de mesaje';
$string['analytics:hotspots'] = 'Puncte fierbinți ale cursului';
$string['analytics:hotspots_desc'] = 'Secțiunile de curs cele mai frecvent menționate în întrebările studenților. Numerele mari pot indica zonele în care studenții au nevoie de mai mult sprijin.';
$string['analytics:section'] = 'Secțiune';
$string['analytics:mention_count'] = 'Mențiuni';
$string['analytics:common_prompts'] = 'Modele comune de întrebări';
$string['analytics:common_prompts_desc'] = 'Modele recurente de întrebări ale studenților. Examinați-le pentru a identifica lacunele sistematice din conținutul cursului.';
$string['analytics:prompt_pattern'] = 'Model';
$string['analytics:frequency'] = 'Frecvență';
$string['analytics:recent_activity'] = 'Activitate recentă';
$string['analytics:no_data'] = 'Nu sunt disponibile date de analiză încă. Datele vor apărea odată ce studenții vor începe să utilizeze tutorele AI.';
$string['analytics:timerange'] = 'Interval de timp';
$string['analytics:last_7_days'] = 'Ultimele 7 zile';
$string['analytics:last_30_days'] = 'Ultimele 30 de zile';
$string['analytics:all_time'] = 'Toată perioada';
$string['analytics:export'] = 'Exportați datele';
$string['analytics:provider_comparison'] = 'Comparație furnizori AI';
$string['analytics:provider_comparison_desc'] = 'Comparați performanța furnizorilor AI utilizați în acest curs.';
$string['analytics:provider'] = 'Furnizor';
$string['analytics:response_count'] = 'Răspunsuri';
$string['analytics:avg_response_length'] = 'Lungimea medie a răspunsurilor';
$string['analytics:total_tokens'] = 'Total jetoane';
$string['analytics:avg_tokens'] = 'Jetoane medii / răspuns';
$string['usersettings:title'] = 'Asistent de curs AI: Datele dvs.';
$string['usersettings:intro'] = 'Gestionați datele chatului cu tutorele AI și setările de confidențialitate';
$string['usersettings:privacy_info'] = 'Conversațiile dvs. cu tutorele AI sunt stocate pentru a vă oferi asistență continuă pe parcursul cursului. Aveți control deplin asupra acestor date și le puteți șterge oricând.';
$string['usersettings:usage_stats'] = 'Statisticile dvs. de utilizare';
$string['usersettings:total_messages'] = 'Total mesaje';
$string['usersettings:total_conversations'] = 'Conversații';
$string['usersettings:messages'] = 'Mesaje';
$string['usersettings:last_activity'] = 'Ultima activitate';
$string['usersettings:delete_course_data'] = 'Ștergeți datele cursului';
$string['usersettings:no_data'] = 'Nu ați utilizat încă tutorele AI. Datele de utilizare vor apărea aici odată ce veți începe să discutați.';
$string['usersettings:delete_all_title'] = 'Ștergeți toate datele dvs.';
$string['usersettings:delete_all_warning'] = 'Această acțiune va șterge definitiv toate conversațiile dvs. cu tutorele AI din toate cursurile. Această acțiune este ireversibilă.';
$string['usersettings:delete_all_button'] = 'Ștergeți toate datele mele';
$string['usersettings:confirm_delete_course'] = 'Sunteți sigur că doriți să ștergeți definitiv toate datele tutorelui AI pentru cursul „{$a}"? Această acțiune este ireversibilă.';
$string['usersettings:confirm_delete_all'] = 'Sunteți sigur că doriți să ștergeți definitiv TOATE datele tutorelui AI din toate cursurile? Această acțiune este ireversibilă.';
$string['usersettings:data_deleted'] = 'Datele dvs. au fost șterse.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Bună, {$a}! Sunt SOLA, asistentul tău de învățare online Saylor.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Deschideți SOLA';
$string['chat:change_avatar'] = 'Schimbați avatarul';

// Quiz UI.
$string['chat:quiz'] = 'Rezolvați un test de practică';
$string['chat:quiz_setup_title'] = 'Test de practică';
$string['chat:quiz_questions'] = 'Număr de întrebări';
$string['chat:quiz_topic'] = 'Subiect';
$string['chat:quiz_topic_guided'] = 'Ghidat de AI (în funcție de progresul dvs.)';
$string['chat:quiz_topic_default'] = 'Conținutul actual al cursului';
$string['chat:quiz_topic_custom'] = 'Subiect personalizat…';
$string['chat:quiz_custom_placeholder'] = 'Introduceți un subiect sau o întrebare...';
$string['chat:quiz_start'] = 'Începeți testul';
$string['chat:quiz_cancel'] = 'Anulați';
$string['chat:quiz_loading'] = 'Se generează testul…';
$string['chat:quiz_error'] = 'Nu s-a putut genera testul. Încercați din nou.';
$string['chat:quiz_correct'] = 'Corect!';
$string['chat:quiz_wrong'] = 'Incorect.';
$string['chat:quiz_next'] = 'Următoarea întrebare';
$string['chat:quiz_finish'] = 'Vedeți rezultatele';
$string['chat:quiz_score'] = 'Test finalizat! Ați obținut {$a->score} din {$a->total}.';
$string['chat:quiz_summary'] = 'Am finalizat un test de practică cu {$a->total} întrebări pe tema „{$a->topic}" și am obținut {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Obiective de învățare';
$string['chat:quiz_topic_modules'] = 'Subiect de curs';
$string['chat:quiz_subtopic_select'] = 'Selectați un element specific…';
$string['chat:quiz_topic_sections'] = 'Secțiuni ale cursului';
$string['chat:quiz_score_great'] = 'Excelent! Stăpâniți cu adevărat această materie.';
$string['chat:quiz_score_good'] = 'Bună treabă! Continuați să revizuiți pentru a vă consolida înțelegerea.';
$string['chat:quiz_score_practice'] = 'Continuați să exersați. Încercați să revizuiți conținutul relevant al cursului și reluați testul.';
$string['chat:quiz_review_heading'] = 'Recapitulare';
$string['chat:quiz_retake'] = 'Reluați testul';
$string['chat:quiz_exit'] = 'Ieșiți din test';
$string['chat:quiz_your_answer'] = 'Răspunsul dvs.';
$string['chat:quiz_correct_answer'] = 'Răspunsul corect';

// Conversation starters.
$string['chat:starters_label'] = 'Inițiatori de conversație';
$string['chat:starter_quiz'] = 'Testează-mă la asta';
$string['chat:starter_explain'] = 'Explică asta';
$string['chat:starter_key_concepts'] = 'Concepte cheie';
$string['chat:starter_study_plan'] = 'Plan de studiu';
$string['chat:starter_help_me'] = 'Ajutor AI';
$string['chat:starter_ai_project_coach'] = 'Coach proiect AI';
$string['chat:starter_ell_practice'] = 'Practică de conversație';
$string['chat:starter_ell_pronunciation'] = 'Pronunție ELL';
$string['chat:starter_ai_coach'] = 'Coach AI';
$string['chat:starter_speak'] = 'Spuneți un inițiator';

// Reset / home.
$string['chat:reset'] = 'Începeți din nou';

// Topic picker.
$string['chat:topic_picker_title'] = 'Pe ce doriți să vă concentrați?';
$string['chat:topic_picker_title_help'] = 'Cu ce aveți nevoie de ajutor?';
$string['chat:topic_picker_title_explain'] = 'Ce doriți să vă explic?';
$string['chat:topic_picker_title_study'] = 'Pe ce domeniu doriți să vă concentrați?';
$string['chat:topic_start'] = 'Continuați';

// Expand states.
$string['chat:fullscreen'] = 'Ecran complet';
$string['chat:exitfullscreen'] = 'Ieșiți din ecran complet';

// Settings panel.
$string['chat:language'] = 'Schimbați limba';
$string['chat:settings_panel'] = 'Setări';
$string['chat:settings_language'] = 'Limbă';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Voce';
$string['chat:settings_voice_admin'] = 'Setările vocale sunt gestionate în panoul de administrare al site-ului.';

// Voice mode.
$string['chat:voice_mode'] = 'Mod vocal';
$string['chat:voice_end'] = 'Încheiați sesiunea vocală';
$string['chat:voice_connecting'] = 'Se conectează...';
$string['chat:voice_listening'] = 'Ascultă...';
$string['chat:voice_speaking'] = 'SOLA vorbește...';
$string['chat:voice_idle'] = 'Pregătit';
$string['chat:voice_error'] = 'Conexiunea vocală a eșuat. Verificați setările.';
$string['chat:quiz_locked'] = 'SOLA este în pauză în timpul testelor pentru a păstra integritatea academică. Succes!';
$string['task:send_inactivity_reminders'] = 'Trimiteți e-mailuri săptămânale de memento privind inactivitatea';
$string['messageprovider:study_notes'] = 'Note ale sesiunii de studiu';
