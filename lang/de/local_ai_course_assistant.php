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
 * Language strings for local_ai_course_assistant — German.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'KI-Kursassistent';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Speichert die Unterhaltungen des KI-Tutors pro Benutzer und Kurs.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Die ID des Benutzers, dem die Unterhaltung gehört.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Die ID des Kurses, zu dem die Unterhaltung gehört.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Der Titel der Unterhaltung.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Der Zeitpunkt, zu dem die Unterhaltung erstellt wurde.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Der Zeitpunkt der letzten Änderung der Unterhaltung.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Speichert die einzelnen Nachrichten aus den Unterhaltungen des KI-Tutors.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Die ID des Benutzers, der die Nachricht gesendet hat.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Die ID des Kurses, zu dem die Nachricht gehört.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Die Rolle des Nachrichtenabsenders (Benutzer oder Assistent).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Der Inhalt der Nachricht.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Die Anzahl der für die Nachricht verwendeten Token.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Der Zeitpunkt, zu dem die Nachricht erstellt wurde.';
$string['ai_course_assistant:use'] = 'Den KI-Tutor-Chat verwenden';
$string['ai_course_assistant:viewanalytics'] = 'KI-Tutor-Chat-Analysen anzeigen';
$string['ai_course_assistant:manage'] = 'KI-Tutor-Chat-Einstellungen verwalten (Administratorrolle)';
$string['settings:enabled'] = 'KI-Kursassistenten aktivieren';
$string['settings:enabled_desc'] = 'Das Widget des KI-Kursassistenten auf Kursseiten aktivieren oder deaktivieren.';
$string['settings:provider'] = 'KI-Anbieter';
$string['settings:provider_desc'] = 'Wählen Sie den KI-Anbieter für Chat-Vervollständigungen aus.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Lokal)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Benutzerdefiniert (OpenAI-kompatibel)';
$string['settings:apikey'] = 'API-Schlüssel';
$string['settings:apikey_desc'] = 'API-Schlüssel für den ausgewählten Anbieter. Nicht erforderlich für Ollama.';
$string['settings:model'] = 'Modellname';
$string['settings:model_desc'] = 'Das zu verwendende Modell. Der Standardwert hängt vom Anbieter ab (z. B. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API-Basis-URL';
$string['settings:apibaseurl_desc'] = 'API-Basis-URL. Wird automatisch basierend auf dem Anbieter ausgefüllt, kann aber überschrieben werden. Leer lassen, um den Standard des Anbieters zu verwenden.';
$string['settings:systemprompt'] = 'System-Prompt-Vorlage';
$string['settings:systemprompt_desc'] = 'Der an die KI gesendete System-Prompt. Verwenden Sie Platzhalter: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Sie sind ein hilfreicher KI-Tutor für den Kurs "{{coursename}}". Die Rolle des Studierenden ist {{userrole}}.

Im Kurs behandelte Themen:
{{coursetopics}}

Helfen Sie dem Studierenden, den Kursinhalt zu verstehen. Seien Sie ermutigend, klar und pädagogisch gründlich.';
$string['settings:temperature'] = 'Temperatur';
$string['settings:temperature_desc'] = 'Steuert die Zufälligkeit. Niedrigere Werte sind fokussierter, höhere Werte kreativer. Bereich: 0,0 bis 2,0.';
$string['settings:maxhistory'] = 'Maximale Unterhaltungshistorie';
$string['settings:maxhistory_desc'] = 'Maximale Anzahl von Nachrichtenpaaren, die in API-Anfragen einbezogen werden. Ältere Nachrichten werden entfernt.';
$string['settings:avatar'] = 'Chat-Avatar';
$string['settings:avatar_desc'] = 'Wählen Sie das Avatar-Symbol für die Chat-Widget-Schaltfläche.';
$string['settings:avatar_saylor'] = 'Saylor Academy-Logo (Standard)';
$string['settings:position'] = 'Widget-Position';
$string['settings:position_desc'] = 'Position des Chat-Widgets auf der Seite.';
$string['settings:position_br'] = 'Unten rechts';
$string['settings:position_bl'] = 'Unten links';
$string['settings:position_tr'] = 'Oben rechts';
$string['settings:position_tl'] = 'Oben links';
$string['chat:settings'] = 'Plugin-Einstellungen';
$string['analytics:viewdashboard'] = 'Analyse-Dashboard anzeigen';
$string['coursesettings:title'] = 'Kurs-KI-Einstellungen';
$string['coursesettings:enabled'] = 'Kursüberschreibungen aktivieren';
$string['coursesettings:enabled_desc'] = 'Wenn aktiviert, überschreiben die folgenden Einstellungen die globale KI-Anbieterkonfiguration nur für diesen Kurs. Lassen Sie Felder leer, um den globalen Wert zu erben.';
$string['coursesettings:using_global'] = 'Globale Einstellung wird verwendet';
$string['coursesettings:saved'] = 'Kurs-KI-Einstellungen gespeichert.';
$string['coursesettings:global_settings_link'] = 'Globale KI-Einstellungen';
$string['lang:switch'] = 'Ja, wechseln';
$string['lang:dismiss'] = 'Nein danke';
$string['lang:change'] = 'Sprache ändern';
$string['lang:english'] = 'Englisch';
$string['chat:title'] = 'KI-Tutor';
$string['chat:placeholder'] = 'Stellen Sie eine Frage...';
$string['chat:send'] = 'Senden';
$string['chat:close'] = 'Chat schließen';
$string['chat:open'] = 'KI-Tutor-Chat öffnen';
$string['chat:clear'] = 'Verlauf löschen';
$string['chat:clear_confirm'] = 'Sind Sie sicher, dass Sie Ihren Chatverlauf für diesen Kurs löschen möchten?';
$string['chat:copy'] = 'Unterhaltung kopieren';
$string['chat:copied'] = 'Unterhaltung in die Zwischenablage kopiert';
$string['chat:copy_failed'] = 'Kopieren der Unterhaltung fehlgeschlagen';
$string['chat:greeting'] = 'Hallo! Ich bin Ihr KI-Tutor für diesen Kurs. Wie kann ich Ihnen heute helfen?';
$string['chat:thinking'] = 'Denke nach...';
$string['chat:error'] = 'Entschuldigung, ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.';
$string['chat:error_auth'] = 'Authentifizierungsfehler. Bitte kontaktieren Sie Ihren Administrator.';
$string['chat:error_ratelimit'] = 'Zu viele Anfragen. Bitte warten Sie einen Moment und versuchen Sie es erneut.';
$string['chat:error_unavailable'] = 'Der KI-Dienst ist vorübergehend nicht verfügbar. Bitte versuchen Sie es später erneut.';
$string['chat:error_notconfigured'] = 'Der KI-Tutor wurde noch nicht konfiguriert. Bitte kontaktieren Sie Ihren Administrator.';
$string['chat:expand'] = 'Chat vergrößern';
$string['chat:collapse'] = 'Chat verkleinern';
$string['chat:mic'] = 'Sprechen Sie Ihre Frage laut aus';
$string['chat:mic_error'] = 'Mikrofonfehler. Bitte überprüfen Sie Ihre Browser-Berechtigungen.';
$string['chat:mic_unsupported'] = 'Spracheingabe wird von diesem Browser nicht unterstützt.';
$string['chat:newline_hint'] = 'Umschalt+Eingabe für einen neuen Absatz';
$string['chat:you'] = 'Sie';
$string['chat:assistant'] = 'KI-Tutor';
$string['chat:history_loaded'] = 'Vorherige Unterhaltung geladen.';
$string['chat:history_cleared'] = 'Chatverlauf gelöscht.';
$string['chat:offtopic_warning'] = 'Ihre Frage scheint nicht mit diesem Kurs zusammenzuhängen. Versuchen Sie, beim Thema zu bleiben, damit ich Ihnen bestmöglich helfen kann!';
$string['chat:offtopic_ended'] = 'Ihr Zugang zum KI-Tutor wurde vorübergehend für {$a} Minuten gesperrt, da das Gespräch zu oft vom Thema abgewichen ist. Nutzen Sie diese Zeit, um Ihre Kursunterlagen durchzusehen, und versuchen Sie es später erneut.';
$string['chat:offtopic_locked'] = 'Ihr Zugang zum KI-Tutor ist vorübergehend gesperrt. Sie können es in {$a} Minuten erneut versuchen. Konzentrieren Sie sich bei Ihrer Rückkehr auf kursbezogene Fragen.';
$string['chat:escalated_to_support'] = 'Ich konnte Ihre Frage nicht vollständig beantworten, daher habe ich ein Support-Ticket für Sie erstellt. Ein Mitglied des Support-Teams wird sich mit Ihnen in Verbindung setzen. Ihre Ticketnummer lautet: {$a}';
$string['chat:studyplan_intro'] = 'Ich kann Ihnen helfen, einen Lernplan für diesen Kurs zu erstellen! Sagen Sie mir einfach, wie viele Stunden pro Woche Sie zum Lernen aufwenden können, und ich helfe Ihnen, einen strukturierten Plan zu erstellen.';
$string['settings:faq_heading'] = 'FAQ und Support';
$string['settings:faq_heading_desc'] = 'Konfigurieren Sie die zentrale FAQ und die Zendesk-Support-Ticket-Integration.';
$string['settings:faq_content'] = 'FAQ-Inhalt';
$string['settings:faq_content_desc'] = 'Geben Sie FAQ-Einträge ein (einen pro Zeile im Format: F: Frage | A: Antwort). Diese werden der KI zur Beantwortung häufiger Support-Fragen bereitgestellt.';
$string['settings:zendesk_enabled'] = 'Zendesk-Eskalation aktivieren';
$string['settings:zendesk_enabled_desc'] = 'Wenn die KI eine Support-Frage nicht lösen kann, wird automatisch ein Zendesk-Ticket mit einer Gesprächszusammenfassung erstellt.';
$string['settings:zendesk_subdomain'] = 'Zendesk-Subdomain';
$string['settings:zendesk_subdomain_desc'] = 'Ihre Zendesk-Subdomain (z. B. "meinefirma" für meinefirma.zendesk.com).';
$string['settings:zendesk_email'] = 'Zendesk-API-E-Mail';
$string['settings:zendesk_email_desc'] = 'E-Mail-Adresse des Zendesk-Benutzers für die API-Authentifizierung (mit dem Suffix /token).';
$string['settings:zendesk_token'] = 'Zendesk-API-Token';
$string['settings:zendesk_token_desc'] = 'API-Token für die Zendesk-Authentifizierung.';
$string['settings:offtopic_heading'] = 'Erkennung von Themenabweichungen';
$string['settings:offtopic_heading_desc'] = 'Konfigurieren Sie, wie der Chat mit themenfremden Unterhaltungen umgeht.';
$string['settings:offtopic_enabled'] = 'Erkennung von Themenabweichungen aktivieren';
$string['settings:offtopic_enabled_desc'] = 'Die KI bitten, themenfremde Unterhaltungen zu erkennen und umzuleiten.';
$string['settings:offtopic_max'] = 'Maximale Anzahl themenfremder Nachrichten';
$string['settings:offtopic_max_desc'] = 'Anzahl aufeinanderfolgender themenfremder Nachrichten, bevor Maßnahmen ergriffen werden.';
$string['settings:offtopic_action'] = 'Maßnahme bei Themenabweichung';
$string['settings:offtopic_action_desc'] = 'Was geschehen soll, wenn das Limit für Themenabweichungen erreicht ist.';
$string['settings:offtopic_action_warn'] = 'Warnen und umleiten';
$string['settings:offtopic_action_end'] = 'Zugang vorübergehend sperren';
$string['settings:offtopic_lockout_duration'] = 'Sperrdauer (in Minuten)';
$string['settings:offtopic_lockout_duration_desc'] = 'Dauer (in Minuten), für die ein Studierender den Zugang zum KI-Tutor verliert, nachdem das Limit für Themenabweichungen überschritten wurde. Standard: 30 Minuten.';
$string['settings:studyplan_heading'] = 'Lernplanung und Erinnerungen';
$string['settings:studyplan_heading_desc'] = 'Konfigurieren Sie Lernplanungsfunktionen und Erinnerungsbenachrichtigungen.';
$string['settings:studyplan_enabled'] = 'Lernplanung aktivieren';
$string['settings:studyplan_enabled_desc'] = 'Dem KI-Tutor ermöglichen, Studierenden bei der Erstellung personalisierter Lernpläne basierend auf ihrer verfügbaren Zeit zu helfen.';
$string['settings:reminders_email_enabled'] = 'E-Mail-Erinnerungen aktivieren';
$string['settings:reminders_email_enabled_desc'] = 'Studierenden ermöglichen, Lernerinnerungen per E-Mail zu abonnieren.';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsApp-Erinnerungen aktivieren';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Studierenden ermöglichen, Lernerinnerungen über WhatsApp zu abonnieren (erfordert WhatsApp-API-Konfiguration).';
$string['settings:whatsapp_api_url'] = 'WhatsApp-API-URL';
$string['settings:whatsapp_api_url_desc'] = 'Der API-Endpunkt zum Senden von WhatsApp-Nachrichten (z. B. Twilio, MessageBird). Muss POST mit einem JSON-Body akzeptieren, der die Felder "to", "from" und "body" enthält.';
$string['settings:whatsapp_api_token'] = 'WhatsApp-API-Token';
$string['settings:whatsapp_api_token_desc'] = 'Authentifizierungstoken für die WhatsApp-API.';
$string['settings:whatsapp_from_number'] = 'WhatsApp-Absendernummer';
$string['settings:whatsapp_from_number_desc'] = 'Die Telefonnummer, von der WhatsApp-Nachrichten gesendet werden (mit Ländervorwahl, z. B. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Gesperrte Länder für WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Kommagetrennte ISO-3166-1-alpha-2-Ländercodes, in denen WhatsApp-Erinnerungen aufgrund lokaler Vorschriften nicht erlaubt sind (z. B. "CN,IR,KP").';
$string['reminder:email_subject'] = 'Lernerinnerung: {$a}';
$string['reminder:email_body'] = 'Hallo {$a->firstname},

hier ist Ihre Lernerinnerung für "{$a->coursename}".

{$a->message}

Ihr Lernplan schlägt {$a->hours_per_week} Stunden pro Woche für diesen Kurs vor.

Weiter so!

---
Um sich von diesen Erinnerungen abzumelden, klicken Sie hier: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Lernerinnerung für {$a->coursename}: {$a->message} (Abmelden: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Lernziel des Tages: ';
$string['unsubscribe:title'] = 'Von Lernerinnerungen abmelden';
$string['unsubscribe:success'] = 'Sie wurden erfolgreich von den Lernerinnerungen für diesen Kurs abgemeldet.';
$string['unsubscribe:already'] = 'Sie haben sich bereits von diesen Erinnerungen abgemeldet.';
$string['unsubscribe:invalid'] = 'Ungültiger oder abgelaufener Abmeldelink.';
$string['unsubscribe:resubscribe'] = 'Haben Sie Ihre Meinung geändert? Sie können Erinnerungen über den KI-Tutor-Chat erneut aktivieren.';
$string['task:send_reminders'] = 'KI-Tutor-Lernerinnerungen senden';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Speichert die Lernpläne der Studierenden.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Die ID des Benutzers, dem der Lernplan gehört.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Der Kurs, zu dem der Lernplan gehört.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Stunden pro Woche, die der Studierende zum Lernen plant.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Die Details des Lernplans im JSON-Format.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Speichert Einstellungen und Abonnements für Lernerinnerungen.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Die ID des Benutzers, der Erinnerungen abonniert hat.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Der Erinnerungskanal (E-Mail oder WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Die E-Mail-Adresse oder Telefonnummer für Erinnerungen.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Der Ländercode des Benutzers zur Einhaltung von Vorschriften.';
$string['analytics:title'] = 'KI-Tutor-Analysen';
$string['analytics:overview'] = 'Übersicht';
$string['analytics:total_conversations'] = 'Unterhaltungen insgesamt';
$string['analytics:total_messages'] = 'Nachrichten insgesamt';
$string['analytics:active_students'] = 'Aktive Studierende';
$string['analytics:avg_messages_per_student'] = 'Durchschn. Nachrichten pro Studierendem';
$string['analytics:offtopic_rate'] = 'Rate der Themenabweichungen';
$string['analytics:escalation_count'] = 'An Support eskaliert';
$string['analytics:studyplan_adoption'] = 'Studierende mit Lernplänen';
$string['analytics:usage_trends'] = 'Nutzungstrends';
$string['analytics:daily_messages'] = 'Tägliches Nachrichtenaufkommen';
$string['analytics:hotspots'] = 'Kurs-Hotspots';
$string['analytics:hotspots_desc'] = 'Kursabschnitte, die am häufigsten in Fragen von Studierenden erwähnt werden. Hohe Zahlen können auf Bereiche hinweisen, in denen Studierende mehr Unterstützung benötigen.';
$string['analytics:section'] = 'Abschnitt';
$string['analytics:mention_count'] = 'Erwähnungen';
$string['analytics:common_prompts'] = 'Häufige Fragemuster';
$string['analytics:common_prompts_desc'] = 'Wiederkehrende Fragemuster von Studierenden. Überprüfen Sie diese, um systematische Lücken im Kursinhalt zu identifizieren.';
$string['analytics:prompt_pattern'] = 'Muster';
$string['analytics:frequency'] = 'Häufigkeit';
$string['analytics:recent_activity'] = 'Letzte Aktivität';
$string['analytics:no_data'] = 'Noch keine Analysedaten verfügbar. Daten werden angezeigt, sobald Studierende den KI-Tutor nutzen.';
$string['analytics:timerange'] = 'Zeitraum';
$string['analytics:last_7_days'] = 'Letzte 7 Tage';
$string['analytics:last_30_days'] = 'Letzte 30 Tage';
$string['analytics:all_time'] = 'Gesamter Zeitraum';
$string['analytics:export'] = 'Daten exportieren';
$string['analytics:provider_comparison'] = 'Vergleich der KI-Anbieter';
$string['analytics:provider_comparison_desc'] = 'Vergleichen Sie die Leistung der in diesem Kurs verwendeten KI-Anbieter.';
$string['analytics:provider'] = 'Anbieter';
$string['analytics:response_count'] = 'Antworten';
$string['analytics:avg_response_length'] = 'Durchschn. Antwortlänge';
$string['analytics:total_tokens'] = 'Token insgesamt';
$string['analytics:avg_tokens'] = 'Durchschn. Token / Antwort';
$string['usersettings:title'] = 'KI-Kursassistent: Ihre Daten';
$string['usersettings:intro'] = 'Verwalten Sie Ihre KI-Tutor-Chatdaten und Datenschutzeinstellungen';
$string['usersettings:privacy_info'] = 'Ihre Unterhaltungen mit dem KI-Tutor werden gespeichert, um Ihnen während Ihres Kurses fortlaufende Unterstützung zu bieten. Sie haben die volle Kontrolle über diese Daten und können sie jederzeit löschen.';
$string['usersettings:usage_stats'] = 'Ihre Nutzungsstatistiken';
$string['usersettings:total_messages'] = 'Nachrichten insgesamt';
$string['usersettings:total_conversations'] = 'Unterhaltungen';
$string['usersettings:messages'] = 'Nachrichten';
$string['usersettings:last_activity'] = 'Letzte Aktivität';
$string['usersettings:delete_course_data'] = 'Kursdaten löschen';
$string['usersettings:no_data'] = 'Sie haben den KI-Tutor noch nicht verwendet. Ihre Nutzungsdaten werden hier angezeigt, sobald Sie zu chatten beginnen.';
$string['usersettings:delete_all_title'] = 'Alle Ihre Daten löschen';
$string['usersettings:delete_all_warning'] = 'Diese Aktion löscht dauerhaft alle Ihre KI-Tutor-Unterhaltungen in allen Kursen. Diese Aktion kann nicht rückgängig gemacht werden.';
$string['usersettings:delete_all_button'] = 'Alle meine Daten löschen';
$string['usersettings:confirm_delete_course'] = 'Sind Sie sicher, dass Sie alle Ihre KI-Tutor-Daten für den Kurs "{$a}" dauerhaft löschen möchten? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['usersettings:confirm_delete_all'] = 'Sind Sie sicher, dass Sie ALLE Ihre KI-Tutor-Daten in allen Kursen dauerhaft löschen möchten? Diese Aktion kann nicht rückgängig gemacht werden.';
$string['usersettings:data_deleted'] = 'Ihre Daten wurden gelöscht.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Hallo {$a}! Ich bin SOLA, Ihr Saylor Online-Lernassistent.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA öffnen';
$string['chat:change_avatar'] = 'Avatar ändern';

// Quiz UI.
$string['chat:quiz'] = 'Ein Übungsquiz machen';
$string['chat:quiz_setup_title'] = 'Übungsquiz';
$string['chat:quiz_questions'] = 'Anzahl der Fragen';
$string['chat:quiz_topic'] = 'Thema';
$string['chat:quiz_topic_guided'] = 'KI-gesteuert (basierend auf Ihrem Fortschritt)';
$string['chat:quiz_topic_default'] = 'Aktueller Kursinhalt';
$string['chat:quiz_topic_custom'] = 'Benutzerdefiniertes Thema…';
$string['chat:quiz_custom_placeholder'] = 'Geben Sie ein Thema oder eine Frage ein...';
$string['chat:quiz_start'] = 'Quiz starten';
$string['chat:quiz_cancel'] = 'Abbrechen';
$string['chat:quiz_loading'] = 'Quiz wird generiert…';
$string['chat:quiz_error'] = 'Quiz konnte nicht generiert werden. Bitte versuchen Sie es erneut.';
$string['chat:quiz_correct'] = 'Richtig!';
$string['chat:quiz_wrong'] = 'Falsch.';
$string['chat:quiz_next'] = 'Nächste Frage';
$string['chat:quiz_finish'] = 'Ergebnisse anzeigen';
$string['chat:quiz_score'] = 'Quiz abgeschlossen! Sie haben {$a->score} von {$a->total} erreicht.';
$string['chat:quiz_summary'] = 'Ich habe gerade ein Übungsquiz mit {$a->total} Fragen zum Thema "{$a->topic}" abgeschlossen und {$a->score}/{$a->total} erreicht.';
$string['chat:quiz_topic_objectives'] = 'Lernziele';
$string['chat:quiz_topic_modules'] = 'Kursthema';
$string['chat:quiz_subtopic_select'] = 'Wählen Sie ein bestimmtes Element…';
$string['chat:quiz_topic_sections'] = 'Kursabschnitte';
$string['chat:quiz_score_great'] = 'Hervorragende Arbeit! Sie beherrschen diesen Stoff wirklich.';
$string['chat:quiz_score_good'] = 'Guter Einsatz! Wiederholen Sie weiter, um Ihr Verständnis zu festigen.';
$string['chat:quiz_score_practice'] = 'Üben Sie weiter. Sehen Sie sich den entsprechenden Kursinhalt an und versuchen Sie das Quiz dann erneut.';
$string['chat:quiz_review_heading'] = 'Überprüfung';
$string['chat:quiz_retake'] = 'Quiz wiederholen';
$string['chat:quiz_exit'] = 'Quiz beenden';
$string['chat:quiz_your_answer'] = 'Ihre Antwort';
$string['chat:quiz_correct_answer'] = 'Richtige Antwort';

// Conversation starters.
$string['chat:starters_label'] = 'Gesprächsstarter';
$string['chat:starter_quiz'] = 'Teste mich';
$string['chat:starter_explain'] = 'Erkläre das';
$string['chat:starter_key_concepts'] = 'Schlüsselkonzepte';
$string['chat:starter_study_plan'] = 'Lernplan';
$string['chat:starter_help_me'] = 'KI-Hilfe';
$string['chat:starter_ell_practice'] = 'Sprechen üben';
$string['chat:starter_ell_pronunciation'] = 'ELL-Aussprache';
$string['chat:starter_ai_coach'] = 'KI-Coach';
$string['chat:starter_speak'] = 'Starter sagen';

// Reset / home.
$string['chat:reset'] = 'Neu beginnen';

// Topic picker.
$string['chat:topic_picker_title'] = 'Worauf möchten Sie sich konzentrieren?';
$string['chat:topic_picker_title_help'] = 'Wobei brauchen Sie Hilfe?';
$string['chat:topic_picker_title_explain'] = 'Was soll ich erklären?';
$string['chat:topic_picker_title_study'] = 'Auf welchen Bereich möchten Sie sich konzentrieren?';
$string['chat:topic_start'] = 'Weiter';

// Expand states.
$string['chat:fullscreen'] = 'Vollbild';
$string['chat:exitfullscreen'] = 'Vollbild beenden';

// Settings panel.
$string['chat:language'] = 'Sprache ändern';
$string['chat:settings_panel'] = 'Einstellungen';
$string['chat:settings_language'] = 'Sprache';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Stimme';
$string['chat:settings_voice_admin'] = 'Spracheinstellungen werden im Site-Administrationspanel verwaltet.';

// Voice mode.
$string['chat:voice_mode'] = 'Sprachmodus';
$string['chat:voice_end'] = 'Sprachsitzung beenden';
$string['chat:voice_connecting'] = 'Verbindung wird hergestellt...';
$string['chat:voice_listening'] = 'Höre zu...';
$string['chat:voice_speaking'] = 'SOLA spricht...';
$string['chat:voice_idle'] = 'Bereit';
$string['chat:voice_error'] = 'Sprachverbindung fehlgeschlagen. Bitte überprüfen Sie Ihre Einstellungen.';
$string['chat:quiz_locked'] = 'SOLA ist während der Quizze pausiert, um die akademische Integrität zu wahren. Viel Erfolg!';
$string['task:send_inactivity_reminders'] = 'Wöchentliche Erinnerungs-E-Mails bei Inaktivität senden';
$string['messageprovider:study_notes'] = 'Lernsitzungsnotizen';
