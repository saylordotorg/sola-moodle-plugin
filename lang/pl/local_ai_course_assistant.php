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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Domyślne dla nowych kursów';
$string['settings:default_course_mode_desc'] = 'Kontroluje, czy SOLA pojawia się w kursie, gdy nie dokonano wyboru dla danego kursu. Nowe instalacje domyślnie mają ustawienie "Domyślnie wyłączone", aby administratorzy mogli włączać kurs po kursie ze strony Analytics lub strony Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Domyślnie wyłączone (włącz dla każdego kursu)';
$string['settings:default_course_mode_all'] = 'Włączone we wszystkich kursach';
$string['settings:auto_open'] = 'Automatyczne otwieranie przy pierwszej wizycie';
$string['settings:auto_open_desc'] = 'Gdy włączone, szuflada SOLA otwiera się automatycznie, gdy student po raz pierwszy wchodzi do każdego kursu. Kolejne ładowania stron w tym samym kursie nie otwierają szuflady ponownie — stan jest śledzony dla każdego kursu w przeglądarce studenta za pomocą localStorage. Dotyczy komputera i urządzenia mobilnego. Może być nadpisane dla każdego kursu na stronie Course AI Settings.';
$string['settings:comparison_providers'] = 'Dostawcy do porównania (selektor LLM)';
$string['settings:comparison_providers_desc'] = 'Dodaj dodatkowych dostawców AI do wbudowanego selektora LLM w widgecie, aby administratorzy mogli porównywać odpowiedzi między dostawcami. Użyj poniższej tabeli, aby dodać wiersze. Kolumna temperatury jest opcjonalna (pozostaw puste, aby użyć globalnej temperatury). Zapisany format: provider_id|api_key|model1,model2|temperature. Główny dostawca skonfigurowany powyżej jest zawsze uwzględniany automatycznie. Tylko administratorzy z uprawnieniami zarządzania widzą selektor; studenci nigdy go nie widzą. Prawidłowe provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Domyślny dostawca AI';
$string['settings:provider_desc'] = 'Wybierz dostawcę AI dla uzupełnień czatu. Wybierz "Moodle AI (core_ai subsystem)", aby kierować żądania przez wbudowaną konfigurację AI Moodle w Site admin > AI; pola klucza API, modelu i bazowego adresu URL poniżej są w tym trybie ignorowane. Streaming, używanie narzędzi i prompt caching nie są dostępne przez core_ai — odpowiedzi są dostarczane jako pojedynczy fragment. Użyj bezpośredniego dostawcy dla najlepszego doświadczenia ucznia.';
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
$string['coursesettings:sola_enabled'] = 'SOLA w tym kursie';
$string['coursesettings:sola_enabled_toggle'] = 'Pokaż widget SOLA w tym kursie';
$string['coursesettings:sola_enabled_desc'] = 'Kontroluje, czy widget czatu SOLA pojawia się w tym kursie. Domyślne ustawienie dla całej witryny jest ustawiane w ustawieniach wtyczki w sekcji General > Default for new courses.';
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
$string['chat:clear'] = 'Wyczyść ekran';
$string['chat:clear_confirm'] = 'Wyczyścić widoczne wiadomości? Cała historia czatu pozostaje zapisana i można ją ponownie załadować, otwierając widżet ponownie.';
$string['chat:copy'] = 'Kopiuj rozmowę';
$string['chat:copied'] = 'Rozmowa skopiowana do schowka';
$string['chat:copy_failed'] = 'Nie udało się skopiować rozmowy';
$string['chat:thinking'] = 'Myślę...';
$string['chat:error'] = 'Przepraszamy, wystąpił błąd. Spróbuj ponownie.';
$string['chat:error_auth'] = 'Błąd uwierzytelniania. Skontaktuj się z administratorem.';
$string['chat:error_ratelimit'] = 'Zbyt wiele żądań. Poczekaj chwilę i spróbuj ponownie.';
$string['chat:error_unavailable'] = 'Usługa AI jest tymczasowo niedostępna. Spróbuj ponownie później.';
$string['chat:error_notconfigured'] = 'Korepetytor AI nie został jeszcze skonfigurowany. Skontaktuj się z administratorem.';
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
$string['chat:greeting'] = 'Cześć, {$a}! Jestem SOLA. Jak mogę ci dziś pomóc?';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Notatki';

// History panel.
$string['chat:history_title'] = 'Notatki i historia rozmowy';
$string['task:send_inactivity_reminders'] = 'Wyślij tygodniowe e-maile z przypomnieniem o nieaktywności';
$string['task:run_meta_ai_query'] = 'Uruchom zaplanowane zapytanie analityczne Radar nauki';
$string['messageprovider:study_notes'] = 'Notatki z sesji nauki';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Dostarczanie frontendu';
$string['settings:cdn_heading_desc'] = 'Serwuj zasoby frontendowe SOLA (JS/CSS) z zewnętrznego CDN zamiast z systemu plików Moodle. Umożliwia to aktualizacje frontendu bez aktualizacji wtyczki. Pozostaw URL CDN pusty, aby używać lokalnych plików wtyczki.';
$string['settings:cdn_url'] = 'Bazowy URL CDN';
$string['settings:cdn_url_desc'] = 'Bazowy URL, pod którym hostowane są sola.min.js i sola.min.css. Przykład: https://your-org.github.io/sola-cdn. Pozostaw pusty, aby używać lokalnych plików wtyczki.';
$string['settings:cdn_version'] = 'Wersja zasobów CDN';
$string['settings:cdn_version_desc'] = 'Ciąg wersji dołączany do URL-i CDN w celu cache busting. Zaktualizuj po każdym wdrożeniu CDN (np. 3.2.4 lub commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Ogólne użycie';
$string['analytics:tab_bycourse'] = 'Według kursu';
$string['analytics:tab_comparison'] = 'AI vs nieuczestniczący';
$string['analytics:tab_byunit'] = 'Według jednostki';
$string['analytics:tab_usagetypes'] = 'Typy użycia';
$string['analytics:tab_themes'] = 'Tematy';
$string['analytics:tab_feedback'] = 'Opinie o AI';
$string['analytics:total_students'] = 'Łącznie studentów';
$string['analytics:active_users'] = 'Aktywni użytkownicy AI';
$string['analytics:msgs_per_student'] = 'Wiadomości na studenta';
$string['analytics:avg_session'] = 'Średni czas sesji';
$string['analytics:return_rate'] = 'Współczynnik powrotów';
$string['analytics:total_sessions'] = 'Łącznie sesji';
$string['analytics:thumbs_up'] = 'Kciuk w górę';
$string['analytics:thumbs_down'] = 'Kciuk w dół';
$string['analytics:hallucination_flags'] = 'Oznaczenia niedokładności';
$string['analytics:msgs_to_resolution'] = 'Wiadomości do rozwiązania';
$string['analytics:helpful'] = 'Pomocne';
$string['analytics:not_helpful'] = 'Niepomocne';
$string['analytics:flag_hallucination'] = 'Ta odpowiedź zawiera niedokładne informacje';
$string['analytics:submit_rating'] = 'Wyślij';
$string['analytics:thanks_feedback'] = 'Dziękujemy za opinię';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Wyjaśnij tę stronę';
$string['chat:starter_ask_anything'] = 'Zapytaj o cokolwiek';
$string['chat:starter_review_practice'] = 'Powtórka i ćwiczenia';
$string['chat:history_saved_subtitle'] = 'Zapisane odpowiedzi pozostają na tym urządzeniu dla tego kursu.';
$string['chat:history_saved_empty'] = 'Zapisz odpowiedź AI, aby zobaczyć ją tutaj.';
$string['chat:history_views_label'] = 'Widoki historii';
$string['chat:history_view_saved'] = 'Zapisane';
$string['chat:history_view_recent'] = 'Historia';
$string['chat:debug_refresh'] = 'Odśwież';
$string['chat:debug_copy_all'] = 'Kopiuj wszystko';
$string['chat:debug_close'] = 'Zamknij';
$string['chat:language_switch'] = 'Zmień język';
$string['chat:language_dismiss'] = 'Odrzuć sugestię języka';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Wybierz dostawcę LLM';
$string['chat:llm_model_label'] = 'Model';
$string['chat:llm_model_select'] = 'Wybierz model LLM';
$string['chat:footer_usertesting'] = 'Testy użyteczności';
$string['chat:footer_feedback'] = 'Opinia';
$string['chat:voice_panel_title'] = 'Rozmawiaj z {$a} (Eksperymentalne)';

// Additional translated strings.
$string['chat:debug_context'] = 'Debugowanie kontekstu';
$string['chat:debug_context_browser'] = 'Zrzut przeglądarki';
$string['chat:debug_context_copy'] = 'Kopiuj';
$string['chat:debug_context_prompt'] = 'Odpowiedź serwera';
$string['chat:debug_context_request'] = 'Ostatnie żądanie SSE';
$string['chat:debug_context_toggle'] = 'Przełącz inspektor';
$string['chat:history_empty'] = 'Brak rozmów.';
$string['chat:history_refresh'] = 'Odśwież';
$string['chat:history_subtitle'] = 'Twoje ostatnie wiadomości.';
$string['chat:starter_explain_prompt'] = 'Wyjaśnij najważniejszą koncepcję?';
$string['chat:starter_help_lesson'] = 'Wyjaśnij to';
$string['chat:starter_help_lesson_prompt'] = 'Pomóż mi zrozumieć lekcję. Podsumuj kluczowe pojęcia.';
$string['chat:starter_prompt_coach'] = 'Trener AI';
$string['chat:starter_quick_study'] = 'Szybka nauka';
$string['chat:starter_study_plan_prompt'] = 'Chcę zaplanować naukę. Zapytaj: (1) cel, (2) czas. Zaktualizuj plan.';
$string['chat:voice_copy'] = 'Rozmowa głosowa z asystentem.';
$string['chat:voice_ready'] = 'Gotowy';
$string['chat:voice_start'] = 'Rozpocznij';
$string['chat:voice_title'] = 'Porozmawiaj z SOLA';
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
$string['mobile_chip_concepts'] = 'Kluczowe pojęcia';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Plan nauki';
$string['mobile_clear'] = 'Wyczyść historię';
$string['mobile_disabled'] = 'SOLA nie jest dostępna dla tego kursu.';
$string['mobile_placeholder'] = 'Zadaj pytanie...';
$string['mobile_welcome'] = 'Cześć, {$a}!';
$string['mobile_welcome_sub'] = 'Jestem SOLA, Twój asystent nauki. Jak mogę pomóc?';
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
$string['rubric:done'] = 'Gotowe';
$string['rubric:encourage_high'] = 'Świetna robota! Tak trzymaj!';
$string['rubric:encourage_low'] = 'Dobry początek! Regularne ćwiczenia pomogą.';
$string['rubric:encourage_mid'] = 'Dobra robota! Ćwicz dalej.';
$string['rubric:overall'] = 'Ogólnie';
$string['rubric:practice_again'] = 'Ćwicz ponownie';
$string['rubric:score_title_conversation'] = 'Wynik ćwiczenia konwersacji';
$string['rubric:score_title_pronunciation'] = 'Wynik ćwiczenia wymowy';
$string['rubric:scoring'] = 'Ocenianie...';
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
$string['demo:title'] = 'Środowisko testowe';
$string['demo:heading'] = 'Środowisko testowe';
$string['demo:intro'] = 'Ta strona tworzy kurs testowy <strong>ukryty przed uczniami</strong> (visible=0) i zasila go fikcyjnymi uczniami, rozmowami AI, ocenami i opiniami. Przydatne do podglądu Analytics Dashboard lub weryfikacji zmian we wtyczce bez wpływu na żadnego rzeczywistego zapisanego ucznia.';
$string['demo:step1'] = 'Krok 1: kurs testowy';
$string['demo:step2'] = 'Krok 2: dodaj fikcyjnych uczniów i rozmowy AI';
$string['demo:course_exists'] = 'Kurs testowy istnieje: <strong>{$a->fullname}</strong> (krótka nazwa <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'ukryty';
$string['demo:badge_visible'] = 'widoczny dla uczniów';
$string['demo:no_course'] = 'Nie znaleziono kursu testowego. Kliknij poniżej, aby utworzyć.';
$string['demo:create_btn'] = 'Utwórz ukryty kurs testowy';
$string['demo:open_course'] = 'Otwórz kurs &rarr;';
$string['demo:seed_intro'] = 'Tworzy demo_student_001, demo_student_002, ..., zapisuje ich do kursu testowego i wstawia syntetyczne rozmowy, wiadomości, oceny i opinie. Uruchom ponownie, aby dodać więcej danych, lub zaznacz „najpierw wyczyść“, aby zacząć od nowa.';
$string['demo:users_label'] = 'Użytkownicy';
$string['demo:weeks_label'] = 'Tygodnie';
$string['demo:clear_label'] = 'Najpierw wyczyść istniejących użytkowników demo_*';
$string['demo:seed_btn'] = 'Dodaj uczniów i rozmowy';
$string['demo:view_analytics'] = 'Zobacz analitykę dla tego kursu &rarr;';
$string['demo:footer'] = 'Dane utworzone tutaj znajdują się w standardowych tabelach użytkowników / zapisów Moodle oraz we własnych tabelach rozmów wtyczki. Wszyscy fikcyjni użytkownicy mają nazwy użytkownika zaczynające się od <code>demo_student_</code>, aby łatwo było ich filtrować lub usuwać. Aby je usunąć, uruchom ponownie krok zasilania z zaznaczoną opcją „Najpierw wyczyść istniejących użytkowników demo_*“.';
$string['demo:course_fullname'] = 'SOLA kurs testowy (ukryty)';
$string['demo:notify_created'] = 'Kurs testowy gotowy: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Nie udało się utworzyć kursu: {$a}';
$string['demo:notify_seeded'] = 'Dodano: {$a->users} użytkowników, {$a->conversations} rozmów, {$a->messages} wiadomości, {$a->ratings} ocen, {$a->feedback} wpisów opinii.';
$string['demo:notify_seed_fail'] = 'Nie udało się dodać danych: {$a}';
$string['toc:analytics'] = 'Panel Analytics &rarr;';
$string['toc:tokenanalytics'] = 'Koszty tokenów i analityka &rarr;';
$string['toc:testing'] = 'Środowisko testowe &rarr;';
$string['toc:back_to_course'] = '&larr; Powrót do {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Nie znaleziono pliku binarnego pdftotext; ekstrakcja PDF wyłączona.';
$string['rag:pdftotext_available'] = 'Wykryto pdftotext w {$a}.';
$string['rag:docx_unavailable'] = 'Rozszerzenie PHP ZipArchive niedostępne; ekstrakcja DOCX wyłączona.';
$string['rag:h5p_unavailable'] = 'Nie można odczytać treści H5P; pomijanie.';
$string['rag:scorm_too_large'] = 'Pakiet SCORM przekracza skonfigurowany limit rozmiaru ({$a} MB); pomijanie.';
$string['rag:scorm_unzip_failed'] = 'Nie można rozpakować pakietu SCORM; pomijanie.';
$string['rag:transcript_fetch_failed'] = 'Nie można pobrać transkrypcji z {$a}.';
$string['rag:transcript_cf_challenge'] = 'Adres URL transkrypcji zablokowany przez wyzwanie Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Wykryto osadzone multimedia: {$a}';
$string['rag:embed_transcript_attached'] = 'Załączono transkrypcję dla {$a}';

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
