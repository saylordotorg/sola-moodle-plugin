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
 * Language strings for local_ai_course_assistant — Dutch.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI-cursusassistent';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Slaat AI-tutorgesprekken op per gebruiker en cursus.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'De ID van de gebruiker die eigenaar is van het gesprek.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'De ID van de cursus waartoe het gesprek behoort.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'De titel van het gesprek.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Het tijdstip waarop het gesprek is aangemaakt.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Het tijdstip waarop het gesprek voor het laatst is gewijzigd.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Slaat individuele berichten op uit AI-tutorgesprekken.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'De ID van de gebruiker die het bericht heeft verzonden.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'De ID van de cursus waartoe het bericht behoort.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'De rol van de berichtverzender (gebruiker of assistent).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'De inhoud van het bericht.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Het aantal tokens dat voor het bericht is gebruikt.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Het tijdstip waarop het bericht is aangemaakt.';
$string['ai_course_assistant:use'] = 'De AI-tutorchat gebruiken';
$string['ai_course_assistant:viewanalytics'] = 'AI-tutorchatanalyses bekijken';
$string['ai_course_assistant:manage'] = 'AI-tutorchatinstellingen beheren (beheerdersrol)';
$string['settings:enabled'] = 'AI-cursusassistent inschakelen';
$string['settings:enabled_desc'] = 'De AI-cursusassistentwidget op cursuspagina\'s in- of uitschakelen.';
$string['settings:default_course_mode'] = 'Standaard voor nieuwe cursussen';
$string['settings:default_course_mode_desc'] = 'Bepaalt of SOLA op een cursus verschijnt wanneer er geen keuze per cursus is gemaakt. Nieuwe installaties staan standaard op "Standaard uitgeschakeld" zodat beheerders cursus voor cursus kunnen activeren vanaf de Analytics-pagina of de Course AI Settings-pagina.';
$string['settings:default_course_mode_per_course'] = 'Standaard uitgeschakeld (per cursus inschakelen)';
$string['settings:default_course_mode_all'] = 'Ingeschakeld op alle cursussen';
$string['settings:auto_open'] = 'Automatisch openen bij eerste bezoek';
$string['settings:auto_open_desc'] = 'Wanneer ingeschakeld opent de SOLA-lade automatisch de eerste keer dat een student elke cursus binnenkomt. Volgende paginaladingen in dezelfde cursus heropenen de lade niet — de status wordt per cursus bijgehouden in de browser van de student via localStorage. Geldt op desktop en mobiel. Kan per cursus worden overschreven vanaf de Course AI Settings-pagina.';
$string['settings:comparison_providers'] = 'Vergelijkingsproviders (LLM-kiezer)';
$string['settings:comparison_providers_desc'] = 'Voeg extra AI-providers toe aan de ingebouwde LLM-kiezer zodat beheerders antwoorden kunnen vergelijken tussen providers. Gebruik de onderstaande tabel om rijen toe te voegen. De temperatuurkolom is optioneel (laat leeg om de globale temperatuur te gebruiken). Opgeslagen formaat: provider_id|api_key|model1,model2|temperature. De primaire provider die hierboven is ingesteld wordt altijd automatisch opgenomen. Alleen beheerders met beheerbevoegdheid zien de kiezer; studenten zien deze nooit. Geldige provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Standaard AI-provider';
$string['settings:provider_desc'] = 'Selecteer de AI-aanbieder voor chatvoltooiingen. Kies "Moodle AI (core_ai subsystem)" om verzoeken te routeren via de in Moodle ingebouwde AI-configuratie op Site admin > AI; de API-sleutel, het model en de basis-URL-velden hieronder worden in die modus genegeerd. Streaming, tool use en prompt caching zijn niet beschikbaar via core_ai — antwoorden worden als één geheel geleverd. Gebruik een directe aanbieder voor de beste studentervaring.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Lokaal)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Aangepast (OpenAI-compatibel)';
$string['settings:apikey'] = 'API-sleutel';
$string['settings:apikey_desc'] = 'API-sleutel voor de geselecteerde provider. Niet vereist voor Ollama.';
$string['settings:model'] = 'Modelnaam';
$string['settings:model_desc'] = 'Het te gebruiken model. De standaardwaarde hangt af van de provider (bijv. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API-basis-URL';
$string['settings:apibaseurl_desc'] = 'API-basis-URL. Wordt automatisch ingevuld op basis van de provider, maar kan worden overschreven. Laat leeg om de standaard van de provider te gebruiken.';
$string['settings:systemprompt'] = 'Systeempromptsjabloon';
$string['settings:systemprompt_desc'] = 'Systeemprompt die naar de AI wordt gestuurd. Gebruik plaatshouders: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'U bent een behulpzame AI-tutor voor de cursus "{{coursename}}". De rol van de student is {{userrole}}.

Onderwerpen die in de cursus worden behandeld:
{{coursetopics}}

Help de student de cursusinhoud te begrijpen. Wees bemoedigend, duidelijk en pedagogisch grondig.';
$string['settings:temperature'] = 'Temperatuur';
$string['settings:temperature_desc'] = 'Bepaalt de willekeurigheid. Lagere waarden zijn gerichter, hogere waarden creatiever. Bereik: 0,0 tot 2,0.';
$string['settings:maxhistory'] = 'Maximale gespreksgeschiedenis';
$string['settings:maxhistory_desc'] = 'Maximaal aantal berichtparen om op te nemen in API-verzoeken. Oudere berichten worden verwijderd.';
$string['settings:avatar'] = 'Chat-avatar';
$string['settings:avatar_desc'] = 'Selecteer het avatarpictogram voor de chatwidgetknop.';
$string['settings:avatar_saylor'] = '{$a}-logo (standaard)';
$string['settings:position'] = 'Widgetpositie';
$string['settings:position_desc'] = 'Positie van de chatwidget op de pagina.';
$string['settings:position_br'] = 'Rechtsonder';
$string['settings:position_bl'] = 'Linksonder';
$string['settings:position_tr'] = 'Rechtsboven';
$string['settings:position_tl'] = 'Linksboven';
$string['chat:settings'] = 'Plugin-instellingen';
$string['analytics:viewdashboard'] = 'Analysedashboard weergeven';
$string['coursesettings:title'] = 'Cursus-AI-instellingen';
$string['coursesettings:enabled'] = 'Cursusoverschrijvingen inschakelen';
$string['coursesettings:enabled_desc'] = 'Wanneer ingeschakeld, overschrijven de onderstaande instellingen de globale AI-providerconfiguratie alleen voor deze cursus. Laat velden leeg om de globale waarde over te nemen.';
$string['coursesettings:sola_enabled'] = 'SOLA op deze cursus';
$string['coursesettings:sola_enabled_toggle'] = 'Toon de SOLA-widget op deze cursus';
$string['coursesettings:sola_enabled_desc'] = 'Bepaalt of de SOLA-chatwidget op deze cursus verschijnt. De sitebrede standaard wordt ingesteld in de plugininstellingen onder General > Default for new courses.';
$string['coursesettings:using_global'] = 'Globale instelling wordt gebruikt';
$string['coursesettings:saved'] = 'Cursus-AI-instellingen opgeslagen.';
$string['coursesettings:global_settings_link'] = 'Globale AI-instellingen';
$string['lang:switch'] = 'Ja, wisselen';
$string['lang:dismiss'] = 'Nee, bedankt';
$string['lang:change'] = 'Taal wijzigen';
$string['lang:english'] = 'Engels';
$string['chat:title'] = 'AI-tutor';
$string['chat:placeholder'] = 'Stel een vraag...';
$string['chat:send'] = 'Verzenden';
$string['chat:close'] = 'Chat sluiten';
$string['chat:open'] = 'AI-tutorchat openen';
$string['chat:clear'] = 'Scherm wissen';
$string['chat:clear_confirm'] = 'De zichtbare berichten wissen? Uw volledige chatgeschiedenis blijft bewaard en kan opnieuw worden geladen door de widget opnieuw te openen.';
$string['chat:copy'] = 'Gesprek kopiëren';
$string['chat:copied'] = 'Gesprek gekopieerd naar klembord';
$string['chat:copy_failed'] = 'Kopiëren van gesprek mislukt';
$string['chat:thinking'] = 'Aan het denken...';
$string['chat:error'] = 'Sorry, er is een fout opgetreden. Probeer het opnieuw.';
$string['chat:error_auth'] = 'Authenticatiefout. Neem contact op met uw beheerder.';
$string['chat:error_ratelimit'] = 'Te veel verzoeken. Wacht even en probeer het opnieuw.';
$string['chat:error_unavailable'] = 'De AI-service is tijdelijk niet beschikbaar. Probeer het later opnieuw.';
$string['chat:error_notconfigured'] = 'De AI-tutor is nog niet geconfigureerd. Neem contact op met uw beheerder.';
$string['chat:mic'] = 'Spreek uw vraag in';
$string['chat:mic_error'] = 'Microfoonfout. Controleer uw browsermachtigingen.';
$string['chat:mic_unsupported'] = 'Spraakinvoer wordt niet ondersteund door deze browser.';
$string['chat:newline_hint'] = 'Shift+Enter voor een nieuwe alinea';
$string['chat:you'] = 'U';
$string['chat:assistant'] = 'AI-tutor';
$string['chat:history_loaded'] = 'Vorig gesprek geladen.';
$string['chat:history_cleared'] = 'Chatgeschiedenis gewist.';
$string['chat:offtopic_warning'] = 'Het lijkt erop dat uw vraag niet gerelateerd is aan deze cursus. Probeer bij het onderwerp te blijven zodat ik u zo goed mogelijk kan helpen!';
$string['chat:offtopic_ended'] = 'Uw toegang tot de AI-tutor is tijdelijk opgeschort voor {$a} minuten omdat het gesprek te vaak afdwaalde van het onderwerp. Gebruik deze tijd om uw cursusmateriaal te bekijken en probeer het later opnieuw.';
$string['chat:offtopic_locked'] = 'Uw toegang tot de AI-tutor is tijdelijk opgeschort. U kunt het opnieuw proberen over {$a} minuten. Richt u bij uw terugkeer op cursusgerelateerde vragen.';
$string['chat:escalated_to_support'] = 'Ik kon uw vraag niet volledig beantwoorden, dus heb ik een supportticket voor u aangemaakt. Een lid van het supportteam zal contact met u opnemen. Uw ticketnummer is: {$a}';
$string['chat:studyplan_intro'] = 'Ik kan u helpen een studieplan voor deze cursus te maken! Vertel me gewoon hoeveel uur per week u aan studeren kunt besteden, en ik help u een gestructureerd plan op te stellen.';
$string['settings:faq_heading'] = 'FAQ en ondersteuning';
$string['settings:faq_heading_desc'] = 'Configureer de gecentraliseerde FAQ en Zendesk-supportticketintegratie.';
$string['settings:faq_content'] = 'FAQ-inhoud';
$string['settings:faq_content_desc'] = 'Voer FAQ-items in (één per regel in het formaat: V: vraag | A: antwoord). Deze worden aan de AI aangeboden voor het beantwoorden van veelgestelde supportvragen.';
$string['settings:zendesk_enabled'] = 'Zendesk-escalatie inschakelen';
$string['settings:zendesk_enabled_desc'] = 'Wanneer de AI een supportvraag niet kan oplossen, wordt automatisch een Zendesk-ticket aangemaakt met een samenvatting van het gesprek.';
$string['settings:zendesk_subdomain'] = 'Zendesk-subdomein';
$string['settings:zendesk_subdomain_desc'] = 'Uw Zendesk-subdomein (bijv. "mijnbedrijf" voor mijnbedrijf.zendesk.com).';
$string['settings:zendesk_email'] = 'Zendesk API-e-mail';
$string['settings:zendesk_email_desc'] = 'E-mailadres van de Zendesk-gebruiker voor API-authenticatie (met /token-achtervoegsel).';
$string['settings:zendesk_token'] = 'Zendesk API-token';
$string['settings:zendesk_token_desc'] = 'API-token voor Zendesk-authenticatie.';
$string['settings:offtopic_heading'] = 'Detectie van onderwerpsafwijking';
$string['settings:offtopic_heading_desc'] = 'Configureer hoe de chat omgaat met gesprekken buiten het onderwerp.';
$string['settings:offtopic_enabled'] = 'Detectie van onderwerpsafwijking inschakelen';
$string['settings:offtopic_enabled_desc'] = 'Vraag de AI om gesprekken buiten het onderwerp te detecteren en om te leiden.';
$string['settings:offtopic_max'] = 'Maximaal aantal berichten buiten het onderwerp';
$string['settings:offtopic_max_desc'] = 'Aantal opeenvolgende berichten buiten het onderwerp voordat actie wordt ondernomen.';
$string['settings:offtopic_action'] = 'Actie bij onderwerpsafwijking';
$string['settings:offtopic_action_desc'] = 'Wat te doen wanneer de limiet voor onderwerpsafwijking is bereikt.';
$string['settings:offtopic_action_warn'] = 'Waarschuwen en omleiden';
$string['settings:offtopic_action_end'] = 'Toegang tijdelijk blokkeren';
$string['settings:offtopic_lockout_duration'] = 'Blokkeringsduur (in minuten)';
$string['settings:offtopic_lockout_duration_desc'] = 'Duur (in minuten) dat een student de toegang tot de AI-tutor verliest na het overschrijden van de limiet voor onderwerpsafwijking. Standaard: 30 minuten.';
$string['settings:studyplan_heading'] = 'Studieplanning en herinneringen';
$string['settings:studyplan_heading_desc'] = 'Configureer studieplanningsfuncties en herinneringsmeldingen.';
$string['settings:studyplan_enabled'] = 'Studieplanning inschakelen';
$string['settings:studyplan_enabled_desc'] = 'Sta de AI-tutor toe studenten te helpen bij het maken van gepersonaliseerde studieplannen op basis van hun beschikbare tijd.';
$string['settings:reminders_email_enabled'] = 'E-mailherinneringen inschakelen';
$string['settings:reminders_email_enabled_desc'] = 'Sta studenten toe zich aan te melden voor studieherinneringen per e-mail.';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsApp-herinneringen inschakelen';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Sta studenten toe zich aan te melden voor studieherinneringen via WhatsApp (vereist configuratie van de WhatsApp API).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API-URL';
$string['settings:whatsapp_api_url_desc'] = 'Het API-eindpunt voor het verzenden van WhatsApp-berichten (bijv. Twilio, MessageBird). Moet POST accepteren met een JSON-body met de velden "to", "from" en "body".';
$string['settings:whatsapp_api_token'] = 'WhatsApp API-token';
$string['settings:whatsapp_api_token_desc'] = 'Authenticatietoken voor de WhatsApp API.';
$string['settings:whatsapp_from_number'] = 'WhatsApp-afzendernummer';
$string['settings:whatsapp_from_number_desc'] = 'Het telefoonnummer van waaruit WhatsApp-berichten worden verzonden (met landcode, bijv. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Geblokkeerde landen voor WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Door komma\'s gescheiden ISO 3166-1 alpha-2 landcodes waar WhatsApp-herinneringen niet zijn toegestaan vanwege lokale regelgeving (bijv. "CN,IR,KP").';
$string['reminder:email_subject'] = 'Studieherinnering: {$a}';
$string['reminder:email_body'] = 'Hallo {$a->firstname},

Hier is uw studieherinnering voor "{$a->coursename}".

{$a->message}

Uw studieplan raadt {$a->hours_per_week} uur per week aan voor deze cursus.

Ga zo door!

---
Om u af te melden voor deze herinneringen, klik hier: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Studieherinnering voor {$a->coursename}: {$a->message} (Afmelden: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Studiedoel van de dag: ';
$string['unsubscribe:title'] = 'Afmelden voor studieherinneringen';
$string['unsubscribe:success'] = 'U bent succesvol afgemeld voor studieherinneringen voor deze cursus.';
$string['unsubscribe:already'] = 'U bent al afgemeld voor deze herinneringen.';
$string['unsubscribe:invalid'] = 'Ongeldige of verlopen afmeldlink.';
$string['unsubscribe:resubscribe'] = 'Van gedachten veranderd? U kunt herinneringen opnieuw activeren via de AI-tutorchat.';
$string['task:send_reminders'] = 'AI-tutor studieherinneringen verzenden';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Slaat studieplannen van studenten op.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'De ID van de gebruiker die eigenaar is van het studieplan.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'De cursus waartoe het studieplan behoort.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Uren per week dat de student van plan is te studeren.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'De details van het studieplan in JSON-formaat.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Slaat voorkeuren voor studieherinneringen en abonnementen op.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'De ID van de gebruiker die is geabonneerd op herinneringen.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Het herinneringskanaal (e-mail of WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Het e-mailadres of telefoonnummer voor herinneringen.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'De landcode van de gebruiker voor naleving van regelgeving.';
$string['analytics:title'] = 'AI-tutoranalyses';
$string['analytics:overview'] = 'Overzicht';
$string['analytics:total_conversations'] = 'Totaal gesprekken';
$string['analytics:total_messages'] = 'Totaal berichten';
$string['analytics:active_students'] = 'Actieve studenten';
$string['analytics:avg_messages_per_student'] = 'Gem. berichten per student';
$string['analytics:offtopic_rate'] = 'Percentage onderwerpsafwijking';
$string['analytics:escalation_count'] = 'Geëscaleerd naar ondersteuning';
$string['analytics:studyplan_adoption'] = 'Studenten met studieplannen';
$string['analytics:usage_trends'] = 'Gebruikstrends';
$string['analytics:daily_messages'] = 'Dagelijks berichtvolume';
$string['analytics:hotspots'] = 'Cursus-hotspots';
$string['analytics:hotspots_desc'] = 'Cursussecties die het vaakst worden genoemd in vragen van studenten. Hoge aantallen kunnen wijzen op gebieden waar studenten meer ondersteuning nodig hebben.';
$string['analytics:section'] = 'Sectie';
$string['analytics:mention_count'] = 'Vermeldingen';
$string['analytics:common_prompts'] = 'Veelvoorkomende vraagpatronen';
$string['analytics:common_prompts_desc'] = 'Terugkerende vraagpatronen van studenten. Bekijk deze om systematische hiaten in de cursusinhoud te identificeren.';
$string['analytics:prompt_pattern'] = 'Patroon';
$string['analytics:frequency'] = 'Frequentie';
$string['analytics:recent_activity'] = 'Recente activiteit';
$string['analytics:no_data'] = 'Er zijn nog geen analysegegevens beschikbaar. Gegevens verschijnen zodra studenten de AI-tutor beginnen te gebruiken.';
$string['analytics:timerange'] = 'Tijdbereik';
$string['analytics:last_7_days'] = 'Laatste 7 dagen';
$string['analytics:last_30_days'] = 'Laatste 30 dagen';
$string['analytics:all_time'] = 'Hele periode';
$string['analytics:export'] = 'Gegevens exporteren';
$string['analytics:provider_comparison'] = 'Vergelijking van AI-providers';
$string['analytics:provider_comparison_desc'] = 'Vergelijk de prestaties van AI-providers die in deze cursus worden gebruikt.';
$string['analytics:provider'] = 'Provider';
$string['analytics:response_count'] = 'Antwoorden';
$string['analytics:avg_response_length'] = 'Gem. antwoordlengte';
$string['analytics:total_tokens'] = 'Totaal tokens';
$string['analytics:avg_tokens'] = 'Gem. tokens / antwoord';
$string['usersettings:title'] = 'AI-cursusassistent: Uw gegevens';
$string['usersettings:intro'] = 'Beheer uw AI-tutorchatgegevens en privacyinstellingen';
$string['usersettings:privacy_info'] = 'Uw gesprekken met de AI-tutor worden opgeslagen om u doorlopende ondersteuning te bieden tijdens uw cursus. U heeft volledige controle over deze gegevens en kunt ze op elk moment verwijderen.';
$string['usersettings:usage_stats'] = 'Uw gebruiksstatistieken';
$string['usersettings:total_messages'] = 'Totaal berichten';
$string['usersettings:total_conversations'] = 'Gesprekken';
$string['usersettings:messages'] = 'Berichten';
$string['usersettings:last_activity'] = 'Laatste activiteit';
$string['usersettings:delete_course_data'] = 'Cursusgegevens verwijderen';
$string['usersettings:no_data'] = 'U heeft de AI-tutor nog niet gebruikt. Uw gebruiksgegevens verschijnen hier zodra u begint te chatten.';
$string['usersettings:delete_all_title'] = 'Al uw gegevens verwijderen';
$string['usersettings:delete_all_warning'] = 'Deze actie verwijdert permanent al uw AI-tutorgesprekken in alle cursussen. Deze actie kan niet ongedaan worden gemaakt.';
$string['usersettings:delete_all_button'] = 'Al mijn gegevens verwijderen';
$string['usersettings:confirm_delete_course'] = 'Weet u zeker dat u al uw AI-tutorgegevens voor de cursus "{$a}" permanent wilt verwijderen? Deze actie kan niet ongedaan worden gemaakt.';
$string['usersettings:confirm_delete_all'] = 'Weet u zeker dat u AL uw AI-tutorgegevens in alle cursussen permanent wilt verwijderen? Deze actie kan niet ongedaan worden gemaakt.';
$string['usersettings:data_deleted'] = 'Uw gegevens zijn verwijderd.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Hallo, {$a}! Ik ben SOLA. Hoe kan ik je vandaag helpen?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA openen';
$string['chat:change_avatar'] = 'Avatar wijzigen';

// Quiz UI.
$string['chat:quiz'] = 'Een oefenquiz maken';
$string['chat:quiz_setup_title'] = 'Oefenquiz';
$string['chat:quiz_questions'] = 'Aantal vragen';
$string['chat:quiz_topic'] = 'Onderwerp';
$string['chat:quiz_topic_guided'] = 'AI-gestuurd (op basis van uw voortgang)';
$string['chat:quiz_topic_default'] = 'Huidige cursusinhoud';
$string['chat:quiz_topic_custom'] = 'Aangepast onderwerp…';
$string['chat:quiz_custom_placeholder'] = 'Voer een onderwerp of vraag in...';
$string['chat:quiz_start'] = 'Quiz starten';
$string['chat:quiz_cancel'] = 'Annuleren';
$string['chat:quiz_loading'] = 'Quiz wordt gegenereerd…';
$string['chat:quiz_error'] = 'Kan geen quiz genereren. Probeer het opnieuw.';
$string['chat:quiz_correct'] = 'Juist!';
$string['chat:quiz_wrong'] = 'Onjuist.';
$string['chat:quiz_next'] = 'Volgende vraag';
$string['chat:quiz_finish'] = 'Resultaten bekijken';
$string['chat:quiz_score'] = 'Quiz voltooid! U scoorde {$a->score} van de {$a->total}.';
$string['chat:quiz_summary'] = 'Ik heb zojuist een oefenquiz van {$a->total} vragen over "{$a->topic}" afgerond en scoorde {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Leerdoelen';
$string['chat:quiz_topic_modules'] = 'Cursusonderwerp';
$string['chat:quiz_subtopic_select'] = 'Selecteer een specifiek item…';
$string['chat:quiz_topic_sections'] = 'Cursussecties';
$string['chat:quiz_score_great'] = 'Uitstekend werk! U beheerst deze stof echt.';
$string['chat:quiz_score_good'] = 'Goed gedaan! Blijf herhalen om uw begrip te versterken.';
$string['chat:quiz_score_practice'] = 'Blijf oefenen. Probeer de relevante cursusinhoud te bekijken en maak daarna de quiz opnieuw.';
$string['chat:quiz_review_heading'] = 'Overzicht';
$string['chat:quiz_retake'] = 'Quiz opnieuw maken';
$string['chat:quiz_exit'] = 'Quiz afsluiten';
$string['chat:quiz_your_answer'] = 'Uw antwoord';
$string['chat:quiz_correct_answer'] = 'Juist antwoord';

// Conversation starters.
$string['chat:starters_label'] = 'Gespreksstarters';
$string['chat:starter_quiz'] = 'Test mij hierover';
$string['chat:starter_explain'] = 'Leg dit uit';
$string['chat:starter_key_concepts'] = 'Kernbegrippen';
$string['chat:starter_study_plan'] = 'Studieplan';
$string['chat:starter_help_me'] = 'AI-hulp';
$string['chat:starter_ai_project_coach'] = 'AI-projectcoach';
$string['chat:starter_ell_practice'] = 'Gespreksoefening';
$string['chat:starter_ell_pronunciation'] = 'ELL-uitspraak';
$string['chat:starter_ai_coach'] = 'AI-coach';
$string['chat:starter_speak'] = 'Zeg een starter';

// Reset / home.
$string['chat:reset'] = 'Opnieuw beginnen';

// Topic picker.
$string['chat:topic_picker_title'] = 'Waarop wilt u zich richten?';
$string['chat:topic_picker_title_help'] = 'Waar heeft u hulp bij nodig?';
$string['chat:topic_picker_title_explain'] = 'Wat wilt u dat ik uitleg?';
$string['chat:topic_picker_title_study'] = 'Op welk gebied wilt u zich richten?';
$string['chat:topic_start'] = 'Doorgaan';

// Expand states.
$string['chat:fullscreen'] = 'Volledig scherm';
$string['chat:exitfullscreen'] = 'Volledig scherm verlaten';

// Settings panel.
$string['chat:language'] = 'Taal wijzigen';
$string['chat:settings_panel'] = 'Instellingen';
$string['chat:settings_language'] = 'Taal';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Stem';
$string['chat:settings_voice_admin'] = 'Steminstellingen worden beheerd in het sitebeheersdashboard.';

// Voice mode.
$string['chat:voice_mode'] = 'Stemmodus';
$string['chat:voice_end'] = 'Stemsessie beëindigen';
$string['chat:voice_connecting'] = 'Verbinden...';
$string['chat:voice_listening'] = 'Luisteren...';
$string['chat:voice_speaking'] = 'SOLA spreekt...';
$string['chat:voice_idle'] = 'Gereed';
$string['chat:voice_error'] = 'Stemverbinding mislukt. Controleer uw instellingen.';
$string['chat:quiz_locked'] = 'SOLA is gepauzeerd tijdens quizzen om academische integriteit te waarborgen. Succes!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Notities';

// History panel.
$string['chat:history_title'] = 'Notities en gespreksgeschiedenis';
$string['task:send_inactivity_reminders'] = 'Wekelijkse herinneringse-mails bij inactiviteit verzenden';
$string['task:run_meta_ai_query'] = 'Geplande Leerradar-analysequery uitvoeren';
$string['messageprovider:study_notes'] = 'Notities van studiesessie';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Frontend-levering';
$string['settings:cdn_heading_desc'] = 'Serveer SOLA frontend-assets (JS/CSS) vanaf een extern CDN in plaats van het Moodle-bestandssysteem. Dit maakt frontend-updates mogelijk zonder plugin-upgrade. Laat de CDN-URL leeg om de lokale pluginbestanden te gebruiken.';
$string['settings:cdn_url'] = 'CDN-basis-URL';
$string['settings:cdn_url_desc'] = 'Basis-URL waar sola.min.js en sola.min.css worden gehost. Voorbeeld: https://your-org.github.io/sola-cdn. Laat leeg om de lokale pluginbestanden te gebruiken.';
$string['settings:cdn_version'] = 'CDN-assetversie';
$string['settings:cdn_version_desc'] = 'Versiereeks die wordt toegevoegd aan CDN-URLs voor cache busting. Werk bij na elke CDN-deploy (bijv. 3.2.4 of een commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Totaal gebruik';
$string['analytics:tab_bycourse'] = 'Per cursus';
$string['analytics:tab_comparison'] = 'AI vs niet-gebruikers';
$string['analytics:tab_byunit'] = 'Per eenheid';
$string['analytics:tab_usagetypes'] = 'Gebruikstypen';
$string['analytics:tab_themes'] = 'Thema\'s';
$string['analytics:tab_feedback'] = 'AI-feedback';
$string['analytics:total_students'] = 'Totaal studenten';
$string['analytics:active_users'] = 'Actieve AI-gebruikers';
$string['analytics:msgs_per_student'] = 'Berichten per student';
$string['analytics:avg_session'] = 'Gemiddelde sessieduur';
$string['analytics:return_rate'] = 'Terugkeerpercentage';
$string['analytics:total_sessions'] = 'Totaal sessies';
$string['analytics:thumbs_up'] = 'Duim omhoog';
$string['analytics:thumbs_down'] = 'Duim omlaag';
$string['analytics:hallucination_flags'] = 'Onnauwkeurigheidsmarkeringen';
$string['analytics:msgs_to_resolution'] = 'Berichten tot oplossing';
$string['analytics:helpful'] = 'Nuttig';
$string['analytics:not_helpful'] = 'Niet nuttig';
$string['analytics:flag_hallucination'] = 'Dit antwoord bevat onnauwkeurige informatie';
$string['analytics:submit_rating'] = 'Verzenden';
$string['analytics:thanks_feedback'] = 'Bedankt voor uw feedback';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Leg deze pagina uit';
$string['chat:starter_ask_anything'] = 'Vraag wat je wilt';
$string['chat:starter_review_practice'] = 'Herhalen en oefenen';
$string['chat:history_saved_subtitle'] = 'Opgeslagen antwoorden blijven op dit apparaat voor deze cursus.';
$string['chat:history_saved_empty'] = 'Sla een AI-antwoord op om het hier te zien.';
$string['chat:history_views_label'] = 'Geschiedenisweergaven';
$string['chat:history_view_saved'] = 'Opgeslagen';
$string['chat:history_view_recent'] = 'Geschiedenis';
$string['chat:debug_refresh'] = 'Vernieuwen';
$string['chat:debug_copy_all'] = 'Alles kopiëren';
$string['chat:debug_close'] = 'Sluiten';
$string['chat:language_switch'] = 'Taal wisselen';
$string['chat:language_dismiss'] = 'Taalsuggestie sluiten';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM-aanbieder selecteren';
$string['chat:llm_model_label'] = 'Model';
$string['chat:llm_model_select'] = 'LLM-model selecteren';
$string['chat:footer_usertesting'] = 'Gebruiksvriendelijkheidstest';
$string['chat:footer_feedback'] = 'Feedback';
$string['chat:voice_panel_title'] = 'Praat met {$a} (Experimenteel)';

// Additional translated strings.
$string['chat:debug_context'] = 'Context debug';
$string['chat:debug_context_browser'] = 'Browser-snapshot';
$string['chat:debug_context_copy'] = 'Kopiëren';
$string['chat:debug_context_prompt'] = 'Serverreactie';
$string['chat:debug_context_request'] = 'Laatste SSE-verzoek';
$string['chat:debug_context_toggle'] = 'Inspecteur schakelen';
$string['chat:history_empty'] = 'Nog geen gesprekken.';
$string['chat:history_refresh'] = 'Vernieuwen';
$string['chat:history_subtitle'] = 'Uw recente berichten.';
$string['chat:starter_explain_prompt'] = 'Leg het belangrijkste concept uit?';
$string['chat:starter_help_lesson'] = 'Leg dit uit';
$string['chat:starter_help_lesson_prompt'] = 'Help me de les te begrijpen. Vat de kernconcepten samen.';
$string['chat:starter_prompt_coach'] = 'AI prompt-coach';
$string['chat:starter_quick_study'] = 'Snel studeren';
$string['chat:starter_study_plan_prompt'] = 'Ik wil studie plannen. Vraag: (1) doel, (2) tijd. Werk het plan bij.';
$string['chat:voice_copy'] = 'Spraakgesprek met uw assistent.';
$string['chat:voice_ready'] = 'Klaar';
$string['chat:voice_start'] = 'Start';
$string['chat:voice_title'] = 'Praat met SOLA';
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
$string['mobile_chip_concepts'] = 'Kernconcepten';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Studieplan';
$string['mobile_clear'] = 'Geschiedenis wissen';
$string['mobile_disabled'] = 'SOLA is niet beschikbaar voor deze cursus.';
$string['mobile_placeholder'] = 'Stel een vraag...';
$string['mobile_welcome'] = 'Hallo, {$a}!';
$string['mobile_welcome_sub'] = 'Ik ben SOLA, uw leerassistent. Hoe kan ik helpen?';
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
$string['rubric:done'] = 'Klaar';
$string['rubric:encourage_high'] = 'Uitstekend! Ga zo door!';
$string['rubric:encourage_low'] = 'Goed begin! Regelmatig oefenen helpt.';
$string['rubric:encourage_mid'] = 'Goede poging! Blijf oefenen.';
$string['rubric:overall'] = 'Totaal';
$string['rubric:practice_again'] = 'Opnieuw oefenen';
$string['rubric:score_title_conversation'] = 'Gespreksoefening score';
$string['rubric:score_title_pronunciation'] = 'Uitspraakoefening score';
$string['rubric:scoring'] = 'Evalueren...';
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
$string['demo:title'] = 'Testomgeving';
$string['demo:heading'] = 'Testomgeving';
$string['demo:intro'] = 'Deze pagina maakt een testcursus aan die <strong>verborgen is voor studenten</strong> (visible=0) en vult deze met nepstudenten, AI-gesprekken, beoordelingen en feedback. Handig voor een voorbeeldweergave van het Analytics Dashboard of om wijzigingen aan de plugin te valideren zonder echt ingeschreven studenten te beïnvloeden.';
$string['demo:step1'] = 'Stap 1: testcursus';
$string['demo:step2'] = 'Stap 2: nepstudenten en AI-gesprekken toevoegen';
$string['demo:course_exists'] = 'Testcursus bestaat: <strong>{$a->fullname}</strong> (korte naam <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'verborgen';
$string['demo:badge_visible'] = 'zichtbaar voor studenten';
$string['demo:no_course'] = 'Geen testcursus gevonden. Klik hieronder om er een aan te maken.';
$string['demo:create_btn'] = 'Verborgen testcursus aanmaken';
$string['demo:open_course'] = 'Cursus openen &rarr;';
$string['demo:seed_intro'] = 'Maakt demo_student_001, demo_student_002, ..., schrijft ze in voor de testcursus en voegt synthetische gesprekken, berichten, beoordelingen en feedback toe. Voer opnieuw uit om meer gegevens toe te voegen, of vink „eerst wissen“ aan om opnieuw te beginnen.';
$string['demo:users_label'] = 'Gebruikers';
$string['demo:weeks_label'] = 'Weken';
$string['demo:clear_label'] = 'Bestaande demo_*-gebruikers eerst wissen';
$string['demo:seed_btn'] = 'Studenten en gesprekken toevoegen';
$string['demo:view_analytics'] = 'Analyses voor deze cursus bekijken &rarr;';
$string['demo:footer'] = 'Gegevens die hier worden aangemaakt bevinden zich in de standaard Moodle gebruikers- / inschrijvingstabellen en in de eigen gesprekstabellen van de plugin. Alle nepgebruikers hebben gebruikersnamen die beginnen met <code>demo_student_</code>, zodat ze gemakkelijk te filteren of te verwijderen zijn. Om ze te verwijderen, voert u de seed-stap opnieuw uit met „Bestaande demo_*-gebruikers eerst wissen“ aangevinkt.';
$string['demo:course_fullname'] = 'SOLA Testcursus (verborgen)';
$string['demo:notify_created'] = 'Testcursus klaar: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Aanmaken van cursus mislukt: {$a}';
$string['demo:notify_seeded'] = 'Toegevoegd: {$a->users} gebruikers, {$a->conversations} gesprekken, {$a->messages} berichten, {$a->ratings} beoordelingen, {$a->feedback} feedback-items.';
$string['demo:notify_seed_fail'] = 'Toevoegen van gegevens mislukt: {$a}';
$string['toc:analytics'] = 'Analytics-dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Tokenkosten & analyses &rarr;';
$string['toc:testing'] = 'Testomgeving &rarr;';
$string['toc:back_to_course'] = '&larr; Terug naar {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext-binary niet gevonden; PDF-extractie uitgeschakeld.';
$string['rag:pdftotext_available'] = 'pdftotext gedetecteerd op {$a}.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive-extensie niet beschikbaar; DOCX-extractie uitgeschakeld.';
$string['rag:h5p_unavailable'] = 'H5P-inhoud kon niet worden gelezen; overgeslagen.';
$string['rag:scorm_too_large'] = 'SCORM-pakket overschrijdt de geconfigureerde groottelimiet ({$a} MB); overgeslagen.';
$string['rag:scorm_unzip_failed'] = 'SCORM-pakket kon niet worden uitgepakt; overgeslagen.';
$string['rag:transcript_fetch_failed'] = 'Kan transcriptie niet ophalen van {$a}.';
$string['rag:transcript_cf_challenge'] = 'Transcriptie-URL geblokkeerd door Cloudflare-uitdaging: {$a}.';
$string['rag:embed_detected'] = 'Ingesloten media gedetecteerd: {$a}';
$string['rag:embed_transcript_attached'] = 'Transcriptie bijgevoegd voor {$a}';

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
