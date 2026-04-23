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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Standard für neue Kurse';
$string['settings:default_course_mode_desc'] = 'Legt fest, ob SOLA in einem Kurs erscheint, wenn keine kursspezifische Auswahl getroffen wurde. Bei Neuinstallationen ist standardmäßig "Standardmäßig deaktiviert" eingestellt, damit Administratoren die Aktivierung kursweise von der Analytics-Seite oder der Course AI Settings-Seite aus vornehmen können.';
$string['settings:default_course_mode_per_course'] = 'Standardmäßig deaktiviert (pro Kurs aktivieren)';
$string['settings:default_course_mode_all'] = 'In allen Kursen aktiviert';
$string['settings:auto_open'] = 'Beim ersten Besuch automatisch öffnen';
$string['settings:auto_open_desc'] = 'Wenn aktiviert, öffnet sich die SOLA-Schublade automatisch, wenn ein Student zum ersten Mal in jeden Kurs gelangt. Nachfolgende Seitenaufrufe im selben Kurs öffnen die Schublade nicht erneut — der Status wird pro Kurs im Browser des Studenten über localStorage verfolgt. Gilt auf Desktop und Mobil. Kann pro Kurs auf der Course AI Settings-Seite überschrieben werden.';
$string['settings:comparison_providers'] = 'Vergleichsanbieter (LLM-Auswahl)';
$string['settings:comparison_providers_desc'] = 'Fügen Sie dem integrierten LLM-Auswahl zusätzliche KI-Anbieter hinzu, damit Administratoren Antworten verschiedener Anbieter vergleichen können. Verwenden Sie die Tabelle unten, um Zeilen hinzuzufügen. Die Temperatur-Spalte ist optional (leer lassen, um die globale Temperatur zu verwenden). Gespeichertes Format: provider_id|api_key|model1,model2|temperature. Der oben konfigurierte Hauptanbieter wird immer automatisch einbezogen. Nur Administratoren mit Verwaltungsberechtigung sehen die Auswahl; Studierende sehen sie nie. Gültige provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Standard-KI-Anbieter';
$string['settings:provider_desc'] = 'Wählen Sie den KI-Anbieter für die Chat-Vervollständigungen. Wählen Sie "Moodle AI (core_ai subsystem)", um Anfragen über die in Moodle integrierte KI-Konfiguration unter Site admin > AI zu leiten; die Felder für API-Schlüssel, Modell und Basis-URL unten werden in diesem Modus ignoriert. Streaming, Tool-Nutzung und Prompt Caching sind über core_ai nicht verfügbar — Antworten werden als ein einziger Block ausgeliefert. Verwenden Sie einen direkten Anbieter für die beste Nutzererfahrung für Studierende.';
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
$string['settings:avatar_saylor'] = '{$a}-Logo (Standard)';
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
$string['coursesettings:sola_enabled'] = 'SOLA in diesem Kurs';
$string['coursesettings:sola_enabled_toggle'] = 'SOLA-Widget in diesem Kurs anzeigen';
$string['coursesettings:sola_enabled_desc'] = 'Legt fest, ob das SOLA-Chat-Widget in diesem Kurs angezeigt wird. Der websiteweite Standard wird in den Plugin-Einstellungen unter General > Default for new courses festgelegt.';
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
$string['chat:clear'] = 'Bildschirm leeren';
$string['chat:clear_confirm'] = 'Die sichtbaren Nachrichten löschen? Ihr vollständiger Chatverlauf bleibt gespeichert und kann durch erneutes Öffnen des Widgets wieder geladen werden.';
$string['chat:copy'] = 'Unterhaltung kopieren';
$string['chat:copied'] = 'Unterhaltung in die Zwischenablage kopiert';
$string['chat:copy_failed'] = 'Kopieren der Unterhaltung fehlgeschlagen';
$string['chat:thinking'] = 'Denke nach...';
$string['chat:error'] = 'Entschuldigung, ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.';
$string['chat:error_auth'] = 'Authentifizierungsfehler. Bitte kontaktieren Sie Ihren Administrator.';
$string['chat:error_ratelimit'] = 'Zu viele Anfragen. Bitte warten Sie einen Moment und versuchen Sie es erneut.';
$string['chat:error_unavailable'] = 'Der KI-Dienst ist vorübergehend nicht verfügbar. Bitte versuchen Sie es später erneut.';
$string['chat:error_notconfigured'] = 'Der KI-Tutor wurde noch nicht konfiguriert. Bitte kontaktieren Sie Ihren Administrator.';
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
$string['chat:greeting'] = 'Hallo, {$a}! Ich bin SOLA. Wie kann ich Ihnen heute helfen?';
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
$string['chat:starter_quiz'] = 'Teste mich hierzu';
$string['chat:starter_explain'] = 'Erkläre das';
$string['chat:starter_key_concepts'] = 'Schlüsselkonzepte';
$string['chat:starter_study_plan'] = 'Lernplan';
$string['chat:starter_help_me'] = 'KI-Hilfe';
$string['chat:starter_ai_project_coach'] = 'AI-Projektcoach';
$string['chat:starter_ell_practice'] = 'Konversationsübung';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Notizen';

// History panel.
$string['chat:history_title'] = 'Notizen und Gesprächsverlauf';
$string['task:send_inactivity_reminders'] = 'Wöchentliche Erinnerungs-E-Mails bei Inaktivität senden';
$string['task:run_meta_ai_query'] = 'Geplante Lernradar-Analyseabfrage ausführen';
$string['messageprovider:study_notes'] = 'Lernsitzungsnotizen';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Frontend-Bereitstellung';
$string['settings:cdn_heading_desc'] = 'SOLA-Frontend-Assets (JS/CSS) über ein externes CDN statt über das Moodle-Dateisystem ausliefern. Dies ermöglicht Frontend-Updates ohne Plugin-Upgrade. Lassen Sie die CDN-URL leer, um die lokalen Plugin-Dateien zu verwenden.';
$string['settings:cdn_url'] = 'CDN-Basis-URL';
$string['settings:cdn_url_desc'] = 'Basis-URL, unter der sola.min.js und sola.min.css gehostet werden. Beispiel: https://your-org.github.io/sola-cdn. Leer lassen, um lokale Plugin-Dateien zu verwenden.';
$string['settings:cdn_version'] = 'CDN-Asset-Version';
$string['settings:cdn_version_desc'] = 'Versionszeichenkette, die für Cache Busting an CDN-URLs angehängt wird. Nach jedem CDN-Deploy aktualisieren (z. B. 3.2.4 oder ein Commit-Hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Gesamtnutzung';
$string['analytics:tab_bycourse'] = 'Nach Kurs';
$string['analytics:tab_comparison'] = 'AI vs Nicht-Nutzer';
$string['analytics:tab_byunit'] = 'Nach Einheit';
$string['analytics:tab_usagetypes'] = 'Nutzungsarten';
$string['analytics:tab_themes'] = 'Themen';
$string['analytics:tab_feedback'] = 'AI-Feedback';
$string['analytics:total_students'] = 'Studierende gesamt';
$string['analytics:active_users'] = 'Aktive AI-Nutzer';
$string['analytics:msgs_per_student'] = 'Nachrichten pro Student';
$string['analytics:avg_session'] = 'Durchschnittliche Sitzungsdauer';
$string['analytics:return_rate'] = 'Rückkehrrate';
$string['analytics:total_sessions'] = 'Sitzungen gesamt';
$string['analytics:thumbs_up'] = 'Daumen hoch';
$string['analytics:thumbs_down'] = 'Daumen runter';
$string['analytics:hallucination_flags'] = 'Ungenauigkeitsmarkierungen';
$string['analytics:msgs_to_resolution'] = 'Nachrichten bis zur Lösung';
$string['analytics:helpful'] = 'Hilfreich';
$string['analytics:not_helpful'] = 'Nicht hilfreich';
$string['analytics:flag_hallucination'] = 'Diese Antwort enthält ungenaue Informationen';
$string['analytics:submit_rating'] = 'Absenden';
$string['analytics:thanks_feedback'] = 'Danke für Ihr Feedback';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Diese Seite erklären';
$string['chat:starter_ask_anything'] = 'Frag was du willst';
$string['chat:starter_review_practice'] = 'Wiederholen und üben';
$string['chat:history_saved_subtitle'] = 'Gespeicherte Antworten bleiben für diesen Kurs auf diesem Gerät.';
$string['chat:history_saved_empty'] = 'Speichere eine KI-Antwort, um sie hier zu sehen.';
$string['chat:history_views_label'] = 'Verlaufsansichten';
$string['chat:history_view_saved'] = 'Gespeichert';
$string['chat:history_view_recent'] = 'Verlauf';
$string['chat:debug_refresh'] = 'Aktualisieren';
$string['chat:debug_copy_all'] = 'Alles kopieren';
$string['chat:debug_close'] = 'Schließen';
$string['chat:language_switch'] = 'Sprache wechseln';
$string['chat:language_dismiss'] = 'Sprachvorschlag ablehnen';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM-Anbieter auswählen';
$string['chat:llm_model_label'] = 'Modell';
$string['chat:llm_model_select'] = 'LLM-Modell auswählen';
$string['chat:footer_usertesting'] = 'Usability-Test';
$string['chat:footer_feedback'] = 'Feedback';
$string['chat:voice_panel_title'] = 'Mit {$a} sprechen (Experimentell)';

// Additional translated strings.
$string['chat:debug_context'] = 'Kontext-Debug';
$string['chat:debug_context_browser'] = 'Browser-Snapshot';
$string['chat:debug_context_copy'] = 'Kopieren';
$string['chat:debug_context_prompt'] = 'Serverantwort';
$string['chat:debug_context_request'] = 'Letzte SSE-Anfrage';
$string['chat:debug_context_toggle'] = 'Inspektor umschalten';
$string['chat:history_empty'] = 'Noch keine Unterhaltungen.';
$string['chat:history_refresh'] = 'Aktualisieren';
$string['chat:history_subtitle'] = 'Ihre letzten Nachrichten in diesem Kurs.';
$string['chat:starter_explain_prompt'] = 'Können Sie das wichtigste Konzept erklären?';
$string['chat:starter_help_lesson'] = 'Erklären Sie dies';
$string['chat:starter_help_lesson_prompt'] = 'Helfen Sie mir, die Lektion zu verstehen. Schlüsselkonzepte zusammenfassen.';
$string['chat:starter_prompt_coach'] = 'AI-Prompt-Coach';
$string['chat:starter_quick_study'] = 'Schnellstudium';
$string['chat:starter_study_plan_prompt'] = 'Ich möchte lernen planen. Fragen Sie: (1) heutiges Ziel, (2) verfügbare Zeit. Bestehenden Plan aktualisieren.';
$string['chat:voice_copy'] = 'Sprachgespräch mit Ihrem Lernassistenten.';
$string['chat:voice_ready'] = 'Bereit';
$string['chat:voice_start'] = 'Gespräch starten';
$string['chat:voice_title'] = 'Mit SOLA sprechen';
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
$string['mobile_chip_concepts'] = 'Schlüsselkonzepte';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Lernplan';
$string['mobile_clear'] = 'Verlauf löschen';
$string['mobile_disabled'] = 'SOLA ist für diesen Kurs nicht verfügbar.';
$string['mobile_placeholder'] = 'Stellen Sie eine Frage...';
$string['mobile_welcome'] = 'Hallo, {$a}!';
$string['mobile_welcome_sub'] = 'Ich bin SOLA, Ihr Lernassistent. Wie kann ich Ihnen helfen?';
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
$string['rubric:done'] = 'Fertig';
$string['rubric:encourage_high'] = 'Ausgezeichnet! Weiter so!';
$string['rubric:encourage_low'] = 'Guter Anfang! Regelmäßiges Üben hilft.';
$string['rubric:encourage_mid'] = 'Gute Leistung! Üben Sie weiter.';
$string['rubric:overall'] = 'Gesamt';
$string['rubric:practice_again'] = 'Erneut üben';
$string['rubric:score_title_conversation'] = 'Konversationsübungs-Punktzahl';
$string['rubric:score_title_pronunciation'] = 'Ausspracheübungs-Punktzahl';
$string['rubric:scoring'] = 'Übungssitzung wird ausgewertet...';
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
$string['demo:title'] = 'Testumgebung';
$string['demo:heading'] = 'Testumgebung';
$string['demo:intro'] = 'Diese Seite erstellt einen Testkurs, der <strong>vor Studierenden verborgen</strong> (visible=0) ist, und befüllt ihn mit fiktiven Studierenden, KI-Konversationen, Bewertungen und Feedback. Nützlich für eine Vorschau des Analytics Dashboards oder zur Validierung von Plugin-Änderungen, ohne echte eingeschriebene Studierende zu beeinflussen.';
$string['demo:step1'] = 'Schritt 1: Testkurs';
$string['demo:step2'] = 'Schritt 2: fiktive Studierende und KI-Chats anlegen';
$string['demo:course_exists'] = 'Testkurs vorhanden: <strong>{$a->fullname}</strong> (Kurzname <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'verborgen';
$string['demo:badge_visible'] = 'für Studierende sichtbar';
$string['demo:no_course'] = 'Kein Testkurs gefunden. Klicken Sie unten, um einen zu erstellen.';
$string['demo:create_btn'] = 'Verborgenen Testkurs erstellen';
$string['demo:open_course'] = 'Kurs öffnen &rarr;';
$string['demo:seed_intro'] = 'Erstellt demo_student_001, demo_student_002, ..., schreibt sie in den Testkurs ein und fügt synthetische Konversationen, Nachrichten, Bewertungen und Feedback ein. Erneut ausführen, um weitere Daten hinzuzufügen, oder „zuerst löschen“ aktivieren, um neu zu starten.';
$string['demo:users_label'] = 'Nutzer';
$string['demo:weeks_label'] = 'Wochen';
$string['demo:clear_label'] = 'Vorhandene demo_*-Nutzer zuerst löschen';
$string['demo:seed_btn'] = 'Studierende und Chats anlegen';
$string['demo:view_analytics'] = 'Analytics für diesen Kurs anzeigen &rarr;';
$string['demo:footer'] = 'Die hier erstellten Daten liegen in den Standard-Moodle-Tabellen für Benutzer / Einschreibung und in den eigenen Konversationstabellen des Plugins. Alle fiktiven Benutzer haben Benutzernamen, die mit <code>demo_student_</code> beginnen, damit sie leicht gefiltert oder entfernt werden können. Um sie zu entfernen, führen Sie den Seed-Schritt erneut aus und aktivieren Sie „Vorhandene demo_*-Nutzer zuerst löschen“.';
$string['demo:course_fullname'] = 'SOLA Testkurs (verborgen)';
$string['demo:notify_created'] = 'Testkurs bereit: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Kurs konnte nicht erstellt werden: {$a}';
$string['demo:notify_seeded'] = 'Angelegt: {$a->users} Nutzer, {$a->conversations} Konversationen, {$a->messages} Nachrichten, {$a->ratings} Bewertungen, {$a->feedback} Feedback-Einträge.';
$string['demo:notify_seed_fail'] = 'Daten konnten nicht angelegt werden: {$a}';
$string['toc:analytics'] = 'Analytics-Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Token-Kosten & Analytics &rarr;';
$string['toc:testing'] = 'Testumgebung &rarr;';
$string['toc:back_to_course'] = '&larr; Zurück zu {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext-Binärdatei nicht gefunden; PDF-Extraktion deaktiviert.';
$string['rag:pdftotext_available'] = 'pdftotext wurde unter {$a} erkannt.';
$string['rag:docx_unavailable'] = 'PHP-ZipArchive-Erweiterung nicht verfügbar; DOCX-Extraktion deaktiviert.';
$string['rag:h5p_unavailable'] = 'H5P-Inhalt konnte nicht gelesen werden; wird übersprungen.';
$string['rag:scorm_too_large'] = 'SCORM-Paket überschreitet die konfigurierte Größenbeschränkung ({$a} MB); wird übersprungen.';
$string['rag:scorm_unzip_failed'] = 'SCORM-Paket konnte nicht entpackt werden; wird übersprungen.';
$string['rag:transcript_fetch_failed'] = 'Transkript von {$a} konnte nicht abgerufen werden.';
$string['rag:transcript_cf_challenge'] = 'Transkript-URL durch Cloudflare-Challenge blockiert: {$a}.';
$string['rag:embed_detected'] = 'Eingebettete Medien erkannt: {$a}';
$string['rag:embed_transcript_attached'] = 'Transkript angehängt für {$a}';

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
