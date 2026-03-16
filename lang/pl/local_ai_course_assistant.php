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
 * Language strings for local_ai_course_assistant — Polish.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Asystent kursu AI';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Przechowuje rozmowy z korepetytorem AI według użytkownika i kursu.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Identyfikator użytkownika będącego właścicielem rozmowy.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Identyfikator kursu, do którego należy rozmowa.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Tytuł rozmowy.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Czas utworzenia rozmowy.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Czas ostatniej modyfikacji rozmowy.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Przechowuje poszczególne wiadomości w rozmowach z korepetytorem AI.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Identyfikator użytkownika, który wysłał wiadomość.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Identyfikator kursu, do którego należy wiadomość.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Rola nadawcy wiadomości (użytkownik lub asystent).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Treść wiadomości.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Liczba tokenów użytych w wiadomości.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Czas utworzenia wiadomości.';
$string['ai_course_assistant:use'] = 'Korzystanie z czatu korepetytora AI';
$string['ai_course_assistant:viewanalytics'] = 'Przeglądanie analityki czatu korepetytora AI';
$string['ai_course_assistant:manage'] = 'Zarządzanie ustawieniami czatu korepetytora AI (rola administratora)';
$string['settings:enabled'] = 'Włącz asystenta kursu AI';
$string['settings:enabled_desc'] = 'Włącz lub wyłącz widżet asystenta kursu AI na stronach kursów.';
$string['settings:provider'] = 'Dostawca AI';
$string['settings:provider_desc'] = 'Wybierz dostawcę AI do uzupełniania czatu.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (lokalny)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Niestandardowy (kompatybilny z OpenAI)';
$string['settings:apikey'] = 'Klucz API';
$string['settings:apikey_desc'] = 'Klucz API dla wybranego dostawcy. Nie jest wymagany dla Ollama.';
$string['settings:model'] = 'Nazwa modelu';
$string['settings:model_desc'] = 'Model do użycia. Wartość domyślna zależy od dostawcy (np. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'Bazowy URL API';
$string['settings:apibaseurl_desc'] = 'Bazowy URL API. Wypełniany automatycznie na podstawie dostawcy, ale można go nadpisać. Pozostaw puste, aby użyć domyślnego dostawcy.';
$string['settings:systemprompt'] = 'Szablon promptu systemowego';
$string['settings:systemprompt_desc'] = 'Prompt systemowy wysyłany do AI. Użyj symboli zastępczych: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Jesteś pomocnym korepetytorem AI dla kursu „{{coursename}}". Rola studenta to {{userrole}}.

Tematy omawiane w kursie:
{{coursetopics}}

Pomóż studentowi zrozumieć treść kursu. Bądź zachęcający, jasny i pedagogicznie rzetelny.';
$string['settings:temperature'] = 'Temperatura';
$string['settings:temperature_desc'] = 'Kontroluje losowość. Niskie wartości są bardziej skoncentrowane, wysokie bardziej kreatywne. Zakres: 0,0 do 2,0.';
$string['settings:maxhistory'] = 'Maksymalna historia rozmów';
$string['settings:maxhistory_desc'] = 'Maksymalna liczba par wiadomości dołączanych do żądań API. Starsze wiadomości są usuwane.';
$string['settings:avatar'] = 'Awatar czatu';
$string['settings:avatar_desc'] = 'Wybierz ikonę awatara dla przycisku widżetu czatu.';
$string['settings:avatar_saylor'] = 'Logo {$a} (domyślne)';
$string['settings:position'] = 'Pozycja widżetu';
$string['settings:position_desc'] = 'Pozycja widżetu czatu na stronie.';
$string['settings:position_br'] = 'Prawy dolny róg';
$string['settings:position_bl'] = 'Lewy dolny róg';
$string['settings:position_tr'] = 'Prawy górny róg';
$string['settings:position_tl'] = 'Lewy górny róg';
$string['chat:settings'] = 'Ustawienia wtyczki';
$string['analytics:viewdashboard'] = 'Wyświetl panel analityczny';
$string['coursesettings:title'] = 'Ustawienia AI kursu';
$string['coursesettings:enabled'] = 'Włącz nadpisania kursu';
$string['coursesettings:enabled_desc'] = 'Po włączeniu poniższe ustawienia nadpisują globalną konfigurację dostawcy AI tylko dla tego kursu. Pozostaw pola puste, aby dziedziczyć wartości globalne.';
$string['coursesettings:using_global'] = 'Używanie ustawienia globalnego';
$string['coursesettings:saved'] = 'Ustawienia AI kursu zostały zapisane.';
$string['coursesettings:global_settings_link'] = 'Globalne ustawienia AI';
$string['lang:switch'] = 'Tak, zmień';
$string['lang:dismiss'] = 'Nie, dziękuję';
$string['lang:change'] = 'Zmień język';
$string['lang:english'] = 'Angielski';
$string['chat:title'] = 'Korepetytor AI';
$string['chat:placeholder'] = 'Zadaj pytanie...';
$string['chat:send'] = 'Wyślij';
$string['chat:close'] = 'Zamknij czat';
$string['chat:open'] = 'Otwórz czat korepetytora AI';
$string['chat:clear'] = 'Wyczyść historię';
$string['chat:clear_confirm'] = 'Czy na pewno chcesz wyczyścić historię czatu dla tego kursu?';
$string['chat:copy'] = 'Kopiuj rozmowę';
$string['chat:copied'] = 'Rozmowa skopiowana do schowka';
$string['chat:copy_failed'] = 'Nie udało się skopiować rozmowy';
$string['chat:thinking'] = 'Myślę...';
$string['chat:error'] = 'Przepraszamy, wystąpił błąd. Spróbuj ponownie.';
$string['chat:error_auth'] = 'Błąd uwierzytelniania. Skontaktuj się z administratorem.';
$string['chat:error_ratelimit'] = 'Zbyt wiele żądań. Poczekaj chwilę i spróbuj ponownie.';
$string['chat:error_unavailable'] = 'Usługa AI jest tymczasowo niedostępna. Spróbuj ponownie później.';
$string['chat:error_notconfigured'] = 'Korepetytor AI nie został jeszcze skonfigurowany. Skontaktuj się z administratorem.';
$string['chat:expand'] = 'Rozwiń czat';
$string['chat:collapse'] = 'Zwiń czat';
$string['chat:mic'] = 'Zadaj pytanie głosowo';
$string['chat:mic_error'] = 'Błąd mikrofonu. Sprawdź uprawnienia przeglądarki.';
$string['chat:mic_unsupported'] = 'Wprowadzanie głosowe nie jest obsługiwane w tej przeglądarce.';
$string['chat:newline_hint'] = 'Shift+Enter dla nowego akapitu';
$string['chat:you'] = 'Ty';
$string['chat:assistant'] = 'Korepetytor AI';
$string['chat:history_loaded'] = 'Poprzednia rozmowa została załadowana.';
$string['chat:history_cleared'] = 'Historia czatu została wyczyszczona.';
$string['chat:offtopic_warning'] = 'Wygląda na to, że Twoje pytanie nie jest związane z tym kursem. Staraj się trzymać tematu, abym mógł Ci jak najlepiej pomóc!';
$string['chat:offtopic_ended'] = 'Twój dostęp do korepetytora AI został tymczasowo zawieszony na {$a} minut, ponieważ rozmowa zbyt mocno odbiegła od tematu. Wykorzystaj ten czas na przejrzenie materiałów kursowych. Możesz spróbować ponownie później.';
$string['chat:offtopic_locked'] = 'Twój dostęp do korepetytora AI jest tymczasowo zawieszony. Możesz spróbować ponownie za {$a} minut. Po powrocie skup się na pytaniach związanych z kursem.';
$string['chat:escalated_to_support'] = 'Nie udało mi się w pełni odpowiedzieć na Twoje pytanie, więc utworzyłem zgłoszenie do wsparcia. Członek zespołu wsparcia skontaktuje się z Tobą. Numer Twojego zgłoszenia: {$a}';
$string['chat:studyplan_intro'] = 'Mogę pomóc Ci stworzyć plan nauki dla tego kursu! Powiedz mi, ile godzin tygodniowo możesz poświęcić na naukę, a pomogę Ci zbudować ustrukturyzowany plan.';
$string['settings:faq_heading'] = 'FAQ i wsparcie';
$string['settings:faq_heading_desc'] = 'Skonfiguruj scentralizowane FAQ i integrację zgłoszeń wsparcia Zendesk.';
$string['settings:faq_content'] = 'Treść FAQ';
$string['settings:faq_content_desc'] = 'Wprowadź wpisy FAQ (jeden na linię w formacie: Q: pytanie | A: odpowiedź). Zostaną one udostępnione AI do odpowiadania na typowe pytania dotyczące wsparcia.';
$string['settings:zendesk_enabled'] = 'Włącz eskalację Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Gdy AI nie może rozwiązać pytania dotyczącego wsparcia, automatycznie tworzy zgłoszenie Zendesk z podsumowaniem rozmowy.';
$string['settings:zendesk_subdomain'] = 'Subdomena Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Twoja subdomena Zendesk (np. „mojafirma" dla mojafirma.zendesk.com).';
$string['settings:zendesk_email'] = 'E-mail API Zendesk';
$string['settings:zendesk_email_desc'] = 'Adres e-mail użytkownika Zendesk do uwierzytelniania API (z sufiksem /token).';
$string['settings:zendesk_token'] = 'Token API Zendesk';
$string['settings:zendesk_token_desc'] = 'Token API do uwierzytelniania Zendesk.';
$string['settings:offtopic_heading'] = 'Wykrywanie tematów nie na temat';
$string['settings:offtopic_heading_desc'] = 'Skonfiguruj sposób obsługi rozmów nie na temat przez czat.';
$string['settings:offtopic_enabled'] = 'Włącz wykrywanie tematów nie na temat';
$string['settings:offtopic_enabled_desc'] = 'Pozwól AI wykrywać i przekierowywać rozmowy nie na temat.';
$string['settings:offtopic_max'] = 'Maksymalna liczba wiadomości nie na temat';
$string['settings:offtopic_max_desc'] = 'Liczba kolejnych wiadomości nie na temat przed podjęciem działania.';
$string['settings:offtopic_action'] = 'Działanie przy temacie nie na temat';
$string['settings:offtopic_action_desc'] = 'Co zrobić po osiągnięciu limitu wiadomości nie na temat.';
$string['settings:offtopic_action_warn'] = 'Ostrzeż i przekieruj';
$string['settings:offtopic_action_end'] = 'Tymczasowo zablokuj dostęp';
$string['settings:offtopic_lockout_duration'] = 'Czas blokady (minuty)';
$string['settings:offtopic_lockout_duration_desc'] = 'Czas (w minutach), na jaki student traci dostęp do korepetytora AI po przekroczeniu limitu tematów nie na temat. Domyślnie: 30 minut.';
$string['settings:studyplan_heading'] = 'Planowanie nauki i przypomnienia';
$string['settings:studyplan_heading_desc'] = 'Skonfiguruj funkcje planu nauki i powiadomienia o przypomnieniach.';
$string['settings:studyplan_enabled'] = 'Włącz planowanie nauki';
$string['settings:studyplan_enabled_desc'] = 'Pozwól korepetytorowi AI pomagać studentom w tworzeniu spersonalizowanych planów nauki na podstawie dostępnego czasu.';
$string['settings:reminders_email_enabled'] = 'Włącz przypomnienia e-mail';
$string['settings:reminders_email_enabled_desc'] = 'Pozwól studentom zapisać się na przypomnienia o nauce przez e-mail.';
$string['settings:reminders_whatsapp_enabled'] = 'Włącz przypomnienia WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Pozwól studentom zapisać się na przypomnienia o nauce przez WhatsApp (wymaga konfiguracji API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Punkt końcowy API do wysyłania wiadomości WhatsApp (np. Twilio, MessageBird). Musi akceptować POST z treścią JSON zawierającą pola „to", „from" i „body".';
$string['settings:whatsapp_api_token'] = 'Token API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token uwierzytelniania dla API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Numer nadawcy WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Numer telefonu, z którego wysyłane są wiadomości WhatsApp (z kodem kraju, np. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Zablokowane kraje WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Kody krajów ISO 3166-1 alpha-2 oddzielone przecinkami, w których przypomnienia WhatsApp nie są dozwolone ze względu na lokalne przepisy (np. „CN,IR,KP").';
$string['reminder:email_subject'] = 'Przypomnienie o nauce: {$a}';
$string['reminder:email_body'] = 'Cześć {$a->firstname},

Oto Twoje przypomnienie o nauce dla „{$a->coursename}".

{$a->message}

Twój plan nauki sugeruje {$a->hours_per_week} godzin tygodniowo na ten kurs.

Tak trzymaj!

---
Aby przestać otrzymywać te przypomnienia, kliknij tutaj: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Przypomnienie o nauce dla {$a->coursename}: {$a->message} (Wypisz się: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Cel nauki na dziś: ';
$string['unsubscribe:title'] = 'Wypisz się z przypomnień o nauce';
$string['unsubscribe:success'] = 'Zostałeś wypisany z przypomnień o nauce dla tego kursu.';
$string['unsubscribe:already'] = 'Już zostałeś wypisany z tych przypomnień.';
$string['unsubscribe:invalid'] = 'Nieprawidłowy lub wygasły link do wypisania.';
$string['unsubscribe:resubscribe'] = 'Zmieniłeś zdanie? Możesz ponownie włączyć przypomnienia w czacie korepetytora AI.';
$string['task:send_reminders'] = 'Wyślij przypomnienia o nauce korepetytora AI';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Przechowuje plany nauki studentów.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Identyfikator użytkownika będącego właścicielem planu nauki.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kurs, do którego należy plan nauki.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Godziny tygodniowo, które student planuje poświęcić na naukę.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Szczegóły planu nauki w formacie JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Przechowuje ustawienia przypomnień o nauce i subskrypcje.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Identyfikator użytkownika subskrybującego przypomnienia.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Kanał przypomnień (e-mail lub WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Adres e-mail lub numer telefonu do przypomnień.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Kod kraju użytkownika w celu zgodności z przepisami.';
$string['analytics:title'] = 'Analityka korepetytora AI';
$string['analytics:overview'] = 'Przegląd';
$string['analytics:total_conversations'] = 'Łączna liczba rozmów';
$string['analytics:total_messages'] = 'Łączna liczba wiadomości';
$string['analytics:active_students'] = 'Aktywni studenci';
$string['analytics:avg_messages_per_student'] = 'Śr. wiadomości na studenta';
$string['analytics:offtopic_rate'] = 'Wskaźnik tematów nie na temat';
$string['analytics:escalation_count'] = 'Eskalowane do wsparcia';
$string['analytics:studyplan_adoption'] = 'Studenci z planami nauki';
$string['analytics:usage_trends'] = 'Trendy użycia';
$string['analytics:daily_messages'] = 'Dzienny wolumen wiadomości';
$string['analytics:hotspots'] = 'Gorące punkty kursu';
$string['analytics:hotspots_desc'] = 'Sekcje kursu najczęściej przywoływane w pytaniach studentów. Wysokie liczby mogą wskazywać na obszary, w których studenci potrzebują więcej wsparcia.';
$string['analytics:section'] = 'Sekcja';
$string['analytics:mention_count'] = 'Wzmianki';
$string['analytics:common_prompts'] = 'Typowe wzorce pytań';
$string['analytics:common_prompts_desc'] = 'Powtarzające się wzorce pytań od studentów. Przejrzyj je, aby zidentyfikować systematyczne luki w treści kursu.';
$string['analytics:prompt_pattern'] = 'Wzorzec';
$string['analytics:frequency'] = 'Częstotliwość';
$string['analytics:recent_activity'] = 'Ostatnia aktywność';
$string['analytics:no_data'] = 'Brak dostępnych danych analitycznych. Dane pojawią się, gdy studenci zaczną korzystać z korepetytora AI.';
$string['analytics:timerange'] = 'Zakres czasowy';
$string['analytics:last_7_days'] = 'Ostatnie 7 dni';
$string['analytics:last_30_days'] = 'Ostatnie 30 dni';
$string['analytics:all_time'] = 'Cały okres';
$string['analytics:export'] = 'Eksportuj dane';
$string['analytics:provider_comparison'] = 'Porównanie dostawców AI';
$string['analytics:provider_comparison_desc'] = 'Porównaj wydajność dostawców AI używanych w tym kursie.';
$string['analytics:provider'] = 'Dostawca';
$string['analytics:response_count'] = 'Odpowiedzi';
$string['analytics:avg_response_length'] = 'Śr. długość odpowiedzi';
$string['analytics:total_tokens'] = 'Łącznie tokenów';
$string['analytics:avg_tokens'] = 'Śr. tokenów / odpowiedź';
$string['usersettings:title'] = 'Asystent kursu AI: Twoje dane';
$string['usersettings:intro'] = 'Zarządzaj danymi czatu korepetytora AI i ustawieniami prywatności';
$string['usersettings:privacy_info'] = 'Twoje rozmowy z korepetytorem AI są przechowywane, aby zapewnić Ci ciągłe wsparcie w trakcie kursu. Masz pełną kontrolę nad tymi danymi i możesz je usunąć w dowolnym momencie.';
$string['usersettings:usage_stats'] = 'Twoje statystyki użycia';
$string['usersettings:total_messages'] = 'Łącznie wiadomości';
$string['usersettings:total_conversations'] = 'Rozmowy';
$string['usersettings:messages'] = 'Wiadomości';
$string['usersettings:last_activity'] = 'Ostatnia aktywność';
$string['usersettings:delete_course_data'] = 'Usuń dane kursu';
$string['usersettings:no_data'] = 'Nie korzystałeś jeszcze z korepetytora AI. Dane o użyciu pojawią się tutaj po rozpoczęciu czatu.';
$string['usersettings:delete_all_title'] = 'Usuń wszystkie dane';
$string['usersettings:delete_all_warning'] = 'Ta operacja trwale usunie wszystkie Twoje rozmowy z korepetytorem AI we wszystkich kursach. Tej operacji nie można cofnąć.';
$string['usersettings:delete_all_button'] = 'Usuń wszystkie moje dane';
$string['usersettings:confirm_delete_course'] = 'Czy na pewno chcesz trwale usunąć wszystkie dane korepetytora AI dla kursu „{$a}"? Tej operacji nie można cofnąć.';
$string['usersettings:confirm_delete_all'] = 'Czy na pewno chcesz trwale usunąć WSZYSTKIE dane korepetytora AI we wszystkich kursach? Tej operacji nie można cofnąć.';
$string['usersettings:data_deleted'] = 'Twoje dane zostały usunięte.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Cześć, {$a}! Jestem SOLA, Twój asystent nauki online {INSTITUTION}.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Otwórz SOLA';
$string['chat:change_avatar'] = 'Zmień awatar';

// Quiz UI.
$string['chat:quiz'] = 'Rozwiąż quiz praktyczny';
$string['chat:quiz_setup_title'] = 'Quiz praktyczny';
$string['chat:quiz_questions'] = 'Liczba pytań';
$string['chat:quiz_topic'] = 'Temat';
$string['chat:quiz_topic_guided'] = 'Prowadzony przez AI (na podstawie Twojego postępu)';
$string['chat:quiz_topic_default'] = 'Bieżąca treść kursu';
$string['chat:quiz_topic_custom'] = 'Niestandardowy temat…';
$string['chat:quiz_custom_placeholder'] = 'Wpisz temat lub pytanie...';
$string['chat:quiz_start'] = 'Rozpocznij quiz';
$string['chat:quiz_cancel'] = 'Anuluj';
$string['chat:quiz_loading'] = 'Generowanie quizu…';
$string['chat:quiz_error'] = 'Nie udało się wygenerować quizu. Spróbuj ponownie.';
$string['chat:quiz_correct'] = 'Poprawnie!';
$string['chat:quiz_wrong'] = 'Niepoprawnie.';
$string['chat:quiz_next'] = 'Następne pytanie';
$string['chat:quiz_finish'] = 'Zobacz wyniki';
$string['chat:quiz_score'] = 'Quiz ukończony! Uzyskałeś {$a->score} z {$a->total}.';
$string['chat:quiz_summary'] = 'Ukończyłem quiz praktyczny z {$a->total} pytań na temat „{$a->topic}" i uzyskałem wynik {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Cele nauczania';
$string['chat:quiz_topic_modules'] = 'Temat kursu';
$string['chat:quiz_subtopic_select'] = 'Wybierz konkretny element…';
$string['chat:quiz_topic_sections'] = 'Sekcje kursu';
$string['chat:quiz_score_great'] = 'Świetna robota! Naprawdę opanowałeś ten materiał.';
$string['chat:quiz_score_good'] = 'Dobra robota! Kontynuuj powtórki, aby wzmocnić zrozumienie.';
$string['chat:quiz_score_practice'] = 'Ćwicz dalej. Spróbuj przejrzeć odpowiedni materiał kursowy i rozwiąż quiz ponownie.';
$string['chat:quiz_review_heading'] = 'Powtórka';
$string['chat:quiz_retake'] = 'Rozwiąż quiz ponownie';
$string['chat:quiz_exit'] = 'Wyjdź z quizu';
$string['chat:quiz_your_answer'] = 'Twoja odpowiedź';
$string['chat:quiz_correct_answer'] = 'Poprawna odpowiedź';

// Conversation starters.
$string['chat:starters_label'] = 'Rozpocznij rozmowę';
$string['chat:starter_quiz'] = 'Sprawdź mnie z tego';
$string['chat:starter_explain'] = 'Wyjaśnij to';
$string['chat:starter_key_concepts'] = 'Kluczowe pojęcia';
$string['chat:starter_study_plan'] = 'Plan nauki';
$string['chat:starter_help_me'] = 'Pomoc AI';
$string['chat:starter_ai_project_coach'] = 'Trener projektu AI';
$string['chat:starter_ell_practice'] = 'Ćwiczenie konwersacji';
$string['chat:starter_ell_pronunciation'] = 'Wymowa ELL';
$string['chat:starter_ai_coach'] = 'Trener AI';
$string['chat:starter_speak'] = 'Powiedz starter';

// Reset / home.
$string['chat:reset'] = 'Zacznij od nowa';

// Topic picker.
$string['chat:topic_picker_title'] = 'Na czym chcesz się skupić?';
$string['chat:topic_picker_title_help'] = 'W czym potrzebujesz pomocy?';
$string['chat:topic_picker_title_explain'] = 'Co chcesz, żebym wyjaśnił?';
$string['chat:topic_picker_title_study'] = 'Na jakim obszarze chcesz się skupić?';
$string['chat:topic_start'] = 'Kontynuuj';

// Expand states.
$string['chat:fullscreen'] = 'Pełny ekran';
$string['chat:exitfullscreen'] = 'Wyjdź z pełnego ekranu';

// Settings panel.
$string['chat:language'] = 'Zmień język';
$string['chat:settings_panel'] = 'Ustawienia';
$string['chat:settings_language'] = 'Język';
$string['chat:settings_avatar'] = 'Awatar';
$string['chat:settings_voice'] = 'Głos';
$string['chat:settings_voice_admin'] = 'Ustawienia głosu są zarządzane w panelu administracyjnym witryny.';

// Voice mode.
$string['chat:voice_mode'] = 'Tryb głosowy';
$string['chat:voice_end'] = 'Zakończ sesję głosową';
$string['chat:voice_connecting'] = 'Łączenie...';
$string['chat:voice_listening'] = 'Słucham...';
$string['chat:voice_speaking'] = 'SOLA mówi...';
$string['chat:voice_idle'] = 'Gotowy';
$string['chat:voice_error'] = 'Połączenie głosowe nie powiodło się. Sprawdź swoje ustawienia.';
$string['chat:quiz_locked'] = 'SOLA jest wstrzymana podczas quizów w celu zachowania uczciwości akademickiej. Powodzenia!';
$string['task:send_inactivity_reminders'] = 'Wyślij tygodniowe e-maile z przypomnieniem o nieaktywności';
$string['messageprovider:study_notes'] = 'Notatki z sesji nauki';
