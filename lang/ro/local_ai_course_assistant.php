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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Implicit pentru cursuri noi';
$string['settings:default_course_mode_desc'] = 'Controlează dacă SOLA apare pe un curs când nu s-a făcut o alegere per curs. Instalările noi au implicit setat "Dezactivat implicit" astfel încât administratorii să poată activa curs cu curs din pagina Analytics sau pagina Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Dezactivat implicit (activare per curs)';
$string['settings:default_course_mode_all'] = 'Activat pe toate cursurile';
$string['settings:auto_open'] = 'Deschidere automată la prima vizită';
$string['settings:auto_open_desc'] = 'Când este activată, sertarul SOLA se deschide automat prima dată când un student ajunge la fiecare curs. Încărcările ulterioare ale paginii în același curs nu redeschid sertarul — starea este urmărită pe curs în browserul studentului prin localStorage. Se aplică pe desktop și mobil. Poate fi suprascrisă pe curs din pagina Course AI Settings.';
$string['settings:comparison_providers'] = 'Furnizori de comparare (selector LLM)';
$string['settings:comparison_providers_desc'] = 'Adăugați furnizori AI suplimentari la selectorul LLM integrat în widget pentru ca administratorii să poată compara răspunsurile între furnizori. Utilizați tabelul de mai jos pentru a adăuga rânduri. Coloana de temperatură este opțională (lăsați goală pentru a utiliza temperatura globală). Format stocat: provider_id|api_key|model1,model2|temperature. Furnizorul principal configurat mai sus este întotdeauna inclus automat. Doar administratorii cu capacitatea de gestionare văd selectorul; studenții nu îl văd niciodată. Provider IDs valide: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Furnizor AI implicit';
$string['settings:provider_desc'] = 'Selectați furnizorul AI pentru completările de chat. Alegeți "Moodle AI (core_ai subsystem)" pentru a direcționa cererile prin configurația AI încorporată a Moodle de la Site admin > AI; câmpurile cheii API, modelului și URL-ului de bază de mai jos sunt ignorate în acel mod. Streaming, folosirea uneltelor și prompt caching nu sunt disponibile prin core_ai — răspunsurile sunt livrate ca o singură bucată. Folosiți un furnizor direct pentru cea mai bună experiență a studentului.';
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
$string['coursesettings:sola_enabled'] = 'SOLA pe acest curs';
$string['coursesettings:sola_enabled_toggle'] = 'Afișează widget-ul SOLA pe acest curs';
$string['coursesettings:sola_enabled_desc'] = 'Controlează dacă widget-ul de chat SOLA apare pe acest curs. Valoarea implicită la nivel de site este setată în setările plugin-ului la General > Default for new courses.';
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
$string['chat:clear'] = 'Ștergeți ecranul';
$string['chat:clear_confirm'] = 'Ștergeți mesajele vizibile? Istoricul complet al chatului rămâne salvat și poate fi reîncărcat prin redeschiderea widgetului.';
$string['chat:copy'] = 'Copiați conversația';
$string['chat:copied'] = 'Conversația a fost copiată în clipboard';
$string['chat:copy_failed'] = 'Nu s-a putut copia conversația';
$string['chat:thinking'] = 'Se gândește...';
$string['chat:error'] = 'Ne pare rău, a apărut o eroare. Vă rugăm să încercați din nou.';
$string['chat:error_auth'] = 'Eroare de autentificare. Contactați administratorul.';
$string['chat:error_ratelimit'] = 'Prea multe solicitări. Așteptați un moment și încercați din nou.';
$string['chat:error_unavailable'] = 'Serviciul AI este temporar indisponibil. Încercați din nou mai târziu.';
$string['chat:error_notconfigured'] = 'Tutorele AI nu a fost încă configurat. Contactați administratorul.';
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
$string['chat:greeting'] = 'Bună, {$a}! Sunt SOLA. Cum te pot ajuta astăzi?';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Note';

// History panel.
$string['chat:history_title'] = 'Note și istoricul conversației';
$string['task:send_inactivity_reminders'] = 'Trimiteți e-mailuri săptămânale de memento privind inactivitatea';
$string['task:run_meta_ai_query'] = 'Rulează interogarea programată de analiză Radar de învățare';
$string['messageprovider:study_notes'] = 'Note ale sesiunii de studiu';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Livrarea frontend-ului';
$string['settings:cdn_heading_desc'] = 'Serviți resursele frontend SOLA (JS/CSS) de la un CDN extern în loc de sistemul de fișiere Moodle. Aceasta permite actualizări frontend fără actualizarea pluginului. Lăsați URL-ul CDN gol pentru a utiliza fișierele locale ale pluginului.';
$string['settings:cdn_url'] = 'URL de bază CDN';
$string['settings:cdn_url_desc'] = 'URL-ul de bază unde sunt găzduite sola.min.js și sola.min.css. Exemplu: https://your-org.github.io/sola-cdn. Lăsați gol pentru a utiliza fișierele locale ale pluginului.';
$string['settings:cdn_version'] = 'Versiunea resurselor CDN';
$string['settings:cdn_version_desc'] = 'Șir de versiune adăugat la URL-urile CDN pentru cache busting. Actualizați după fiecare implementare CDN (ex. 3.2.4 sau un commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Utilizare totală';
$string['analytics:tab_bycourse'] = 'Pe curs';
$string['analytics:tab_comparison'] = 'AI vs neutilizatori';
$string['analytics:tab_byunit'] = 'Pe unitate';
$string['analytics:tab_usagetypes'] = 'Tipuri de utilizare';
$string['analytics:tab_themes'] = 'Teme';
$string['analytics:tab_feedback'] = 'Feedback AI';
$string['analytics:total_students'] = 'Total studenți';
$string['analytics:active_users'] = 'Utilizatori AI activi';
$string['analytics:msgs_per_student'] = 'Mesaje per student';
$string['analytics:avg_session'] = 'Durata medie a sesiunii';
$string['analytics:return_rate'] = 'Rata de revenire';
$string['analytics:total_sessions'] = 'Total sesiuni';
$string['analytics:thumbs_up'] = 'Apreciere';
$string['analytics:thumbs_down'] = 'Dezaprobare';
$string['analytics:hallucination_flags'] = 'Marcaje de inexactitate';
$string['analytics:msgs_to_resolution'] = 'Mesaje până la rezolvare';
$string['analytics:helpful'] = 'Util';
$string['analytics:not_helpful'] = 'Nu este util';
$string['analytics:flag_hallucination'] = 'Acest răspuns conține informații inexacte';
$string['analytics:submit_rating'] = 'Trimite';
$string['analytics:thanks_feedback'] = 'Mulțumim pentru feedback';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Explică această pagină';
$string['chat:starter_ask_anything'] = 'Întreabă orice';
$string['chat:starter_review_practice'] = 'Revizuire și practică';
$string['chat:history_saved_subtitle'] = 'Răspunsurile salvate rămân pe acest dispozitiv pentru acest curs.';
$string['chat:history_saved_empty'] = 'Salvează un răspuns AI pentru a-l vedea aici.';
$string['chat:history_views_label'] = 'Vizualizări istoric';
$string['chat:history_view_saved'] = 'Salvate';
$string['chat:history_view_recent'] = 'Istoric';
$string['chat:debug_refresh'] = 'Reîmprospătează';
$string['chat:debug_copy_all'] = 'Copiază tot';
$string['chat:debug_close'] = 'Închide';
$string['chat:language_switch'] = 'Schimbă limba';
$string['chat:language_dismiss'] = 'Respinge sugestia de limbă';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Selectează furnizorul LLM';
$string['chat:llm_model_label'] = 'Model';
$string['chat:llm_model_select'] = 'Selectează modelul LLM';
$string['chat:footer_usertesting'] = 'Testare de utilizabilitate';
$string['chat:footer_feedback'] = 'Feedback';
$string['chat:voice_panel_title'] = 'Vorbește cu {$a} (Experimental)';

// Additional translated strings.
$string['chat:debug_context'] = 'Depanare context';
$string['chat:debug_context_browser'] = 'Captură browser';
$string['chat:debug_context_copy'] = 'Copiază';
$string['chat:debug_context_prompt'] = 'Răspuns server';
$string['chat:debug_context_request'] = 'Ultima cerere SSE';
$string['chat:debug_context_toggle'] = 'Comutare inspector';
$string['chat:history_empty'] = 'Nicio conversație.';
$string['chat:history_refresh'] = 'Reîmprospătare';
$string['chat:history_subtitle'] = 'Mesajele tale recente.';
$string['chat:starter_explain_prompt'] = 'Explică cel mai important concept?';
$string['chat:starter_help_lesson'] = 'Explică aceasta';
$string['chat:starter_help_lesson_prompt'] = 'Ajută-mă cu lecția. Rezumă conceptele cheie.';
$string['chat:starter_prompt_coach'] = 'Antrenor AI';
$string['chat:starter_quick_study'] = 'Studiu rapid';
$string['chat:starter_study_plan_prompt'] = 'Vreau să planific studiul. Întreabă: (1) obiectiv, (2) timp. Actualizează planul.';
$string['chat:voice_copy'] = 'Conversație vocală cu asistentul.';
$string['chat:voice_ready'] = 'Gata';
$string['chat:voice_start'] = 'Începe';
$string['chat:voice_title'] = 'Vorbește cu SOLA';
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
$string['mobile_chip_concepts'] = 'Concepte cheie';
$string['mobile_chip_quiz'] = 'Test';
$string['mobile_chip_studyplan'] = 'Plan de studiu';
$string['mobile_clear'] = 'Șterge istoricul';
$string['mobile_disabled'] = 'SOLA nu este disponibil pentru acest curs.';
$string['mobile_placeholder'] = 'Pune o întrebare...';
$string['mobile_welcome'] = 'Salut, {$a}!';
$string['mobile_welcome_sub'] = 'Sunt SOLA, asistentul tău de învățare. Cum pot ajuta?';
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
$string['rubric:done'] = 'Gata';
$string['rubric:encourage_high'] = 'Excelent! Continuă!';
$string['rubric:encourage_low'] = 'Bun început! Practica regulată va ajuta.';
$string['rubric:encourage_mid'] = 'Efort bun! Continuă să exersezi.';
$string['rubric:overall'] = 'General';
$string['rubric:practice_again'] = 'Exersează din nou';
$string['rubric:score_title_conversation'] = 'Scor practică conversație';
$string['rubric:score_title_pronunciation'] = 'Scor practică pronunție';
$string['rubric:scoring'] = 'Se evaluează...';
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
$string['demo:title'] = 'Mediu de testare';
$string['demo:heading'] = 'Mediu de testare';
$string['demo:intro'] = 'Această pagină creează un curs de testare care este <strong>ascuns elevilor</strong> (visible=0) și îl populează cu elevi fictivi, conversații AI, evaluări și feedback. Util pentru previzualizarea Analytics Dashboard sau pentru validarea modificărilor plugin-ului fără a afecta niciun elev real înscris.';
$string['demo:step1'] = 'Pasul 1: curs de testare';
$string['demo:step2'] = 'Pasul 2: adăugare elevi fictivi și chat-uri AI';
$string['demo:course_exists'] = 'Cursul de testare există: <strong>{$a->fullname}</strong> (nume scurt <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'ascuns';
$string['demo:badge_visible'] = 'vizibil pentru elevi';
$string['demo:no_course'] = 'Niciun curs de testare găsit. Apasă mai jos pentru a crea unul.';
$string['demo:create_btn'] = 'Creează curs de testare ascuns';
$string['demo:open_course'] = 'Deschide cursul &rarr;';
$string['demo:seed_intro'] = 'Creează demo_student_001, demo_student_002, ..., îi înscrie la cursul de testare și inserează conversații, mesaje, evaluări și feedback sintetice. Rulează din nou pentru a adăuga mai multe date, sau bifează „curăță mai întâi“ pentru a reîncepe.';
$string['demo:users_label'] = 'Utilizatori';
$string['demo:weeks_label'] = 'Săptămâni';
$string['demo:clear_label'] = 'Curăță mai întâi utilizatorii demo_* existenți';
$string['demo:seed_btn'] = 'Adaugă elevi și chat-uri';
$string['demo:view_analytics'] = 'Vezi analizele pentru acest curs &rarr;';
$string['demo:footer'] = 'Datele create aici locuiesc în tabelele standard de utilizatori / înscrieri Moodle și în tabelele proprii de conversații ale plugin-ului. Toți utilizatorii fictivi au nume de utilizator care încep cu <code>demo_student_</code>, astfel încât să fie ușor de filtrat sau eliminat. Pentru a-i elimina, rulează din nou pasul de seed cu „Curăță mai întâi utilizatorii demo_* existenți“ bifat.';
$string['demo:course_fullname'] = 'Curs de testare SOLA (ascuns)';
$string['demo:notify_created'] = 'Cursul de testare este gata: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Crearea cursului a eșuat: {$a}';
$string['demo:notify_seeded'] = 'Adăugat: {$a->users} utilizatori, {$a->conversations} conversații, {$a->messages} mesaje, {$a->ratings} evaluări, {$a->feedback} intrări de feedback.';
$string['demo:notify_seed_fail'] = 'Adăugarea datelor a eșuat: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Cost tokenuri și analize &rarr;';
$string['toc:testing'] = 'Mediu de testare &rarr;';
$string['toc:back_to_course'] = '&larr; Înapoi la {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Binarul pdftotext nu a fost găsit; extragerea PDF este dezactivată.';
$string['rag:pdftotext_available'] = 'pdftotext detectat la {$a}.';
$string['rag:docx_unavailable'] = 'Extensia PHP ZipArchive nu este disponibilă; extragerea DOCX este dezactivată.';
$string['rag:h5p_unavailable'] = 'Conținutul H5P nu a putut fi citit; se omite.';
$string['rag:scorm_too_large'] = 'Pachetul SCORM depășește limita de dimensiune configurată ({$a} MB); se omite.';
$string['rag:scorm_unzip_failed'] = 'Pachetul SCORM nu a putut fi dezarhivat; se omite.';
$string['rag:transcript_fetch_failed'] = 'Nu s-a putut prelua transcrierea de la {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL-ul transcrierii blocat de provocarea Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Media încorporată detectată: {$a}';
$string['rag:embed_transcript_attached'] = 'Transcriere atașată pentru {$a}';

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
