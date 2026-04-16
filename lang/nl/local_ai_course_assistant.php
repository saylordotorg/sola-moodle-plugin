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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'AI-provider';
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
$string['chat:clear'] = 'Geschiedenis wissen';
$string['chat:clear_confirm'] = 'Weet u zeker dat u uw chatgeschiedenis voor deze cursus wilt wissen?';
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
$string['settings:provider_groq'] = 'Groq';
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
