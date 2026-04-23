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
 * Language strings for local_ai_course_assistant — Danish.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI-kursusassistent';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Gemmer AI-tutorsamtaler pr. bruger og kursus.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID\'et for den bruger, der ejer samtalen.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID\'et for det kursus, samtalen tilhører.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Samtalens titel.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Tidspunktet for samtalens oprettelse.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Tidspunktet for samtalens seneste ændring.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Gemmer individuelle beskeder fra AI-tutorsamtaler.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID\'et for den bruger, der sendte beskeden.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID\'et for det kursus, beskeden tilhører.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Rollen for beskedafsenderen (bruger eller assistent).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Beskedens indhold.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Antallet af tokens brugt til beskeden.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Tidspunktet for beskedens oprettelse.';
$string['ai_course_assistant:use'] = 'Brug AI-tutorchatten';
$string['ai_course_assistant:viewanalytics'] = 'Se AI-tutorchatanalyser';
$string['ai_course_assistant:manage'] = 'Administrer AI-tutorchatindstillinger (Administrator-rolle)';
$string['settings:enabled'] = 'Aktiver AI-kursusassistenten';
$string['settings:enabled_desc'] = 'Aktiver eller deaktiver AI-kursusassistentwidgetten på kursussider.';
$string['settings:default_course_mode'] = 'Standard for nye kurser';
$string['settings:default_course_mode_desc'] = 'Styrer, om SOLA vises på et kursus, når der ikke er truffet et valg pr. kursus. Nye installationer har standardindstillingen "Deaktiveret som standard", så administratorer kan tilmelde sig kursus for kursus fra Analytics-siden eller Course AI Settings-siden.';
$string['settings:default_course_mode_per_course'] = 'Deaktiveret som standard (aktivér pr. kursus)';
$string['settings:default_course_mode_all'] = 'Aktiveret på alle kurser';
$string['settings:auto_open'] = 'Åbn automatisk ved første besøg';
$string['settings:auto_open_desc'] = 'Når aktiveret åbnes SOLA-skuffen automatisk, første gang en studerende lander på hvert kursus. Efterfølgende sideindlæsninger i samme kursus genåbner ikke skuffen — tilstanden spores pr. kursus i den studerendes browser via localStorage. Gælder på desktop og mobil. Kan tilsidesættes pr. kursus fra Course AI Settings-siden.';
$string['settings:comparison_providers'] = 'Sammenligningsudbydere (LLM-vælger)';
$string['settings:comparison_providers_desc'] = 'Tilføj ekstra AI-udbydere til den indbyggede LLM-vælger, så administratorer kan sammenligne svar på tværs af udbydere. Brug tabellen nedenfor til at tilføje rækker. Temperaturkolonnen er valgfri (lad stå tom for at bruge den globale temperatur). Gemt format: provider_id|api_key|model1,model2|temperature. Den primære udbyder konfigureret ovenfor er altid inkluderet automatisk. Kun administratorer med administrationstilladelse ser vælgeren; studerende ser den aldrig. Gyldige provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Standard AI-udbyder';
$string['settings:provider_desc'] = 'Vælg den AI-udbyder, der skal bruges til chatfuldførelser. Vælg "Moodle AI (core_ai subsystem)" for at dirigere anmodninger gennem Moodles indbyggede AI-konfiguration på Site admin > AI; API-nøglen, modellen og basis-URL-felterne nedenfor ignoreres i den tilstand. Streaming, værktøjsbrug og prompt caching er ikke tilgængelige via core_ai — svar leveres som en enkelt del. Brug en direkte udbyder for den bedste studenteroplevelse.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Lokal)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Brugerdefineret (OpenAI-kompatibel)';
$string['settings:apikey'] = 'API-nøgle';
$string['settings:apikey_desc'] = 'API-nøgle til den valgte udbyder. Ikke påkrævet for Ollama.';
$string['settings:model'] = 'Modelnavn';
$string['settings:model_desc'] = 'Modellen, der skal bruges. Standardværdien afhænger af udbyderen (f.eks. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API-basis-URL';
$string['settings:apibaseurl_desc'] = 'API-basis-URL. Udfyldes automatisk baseret på udbyderen, men kan tilsidesættes. Lad feltet stå tomt for at bruge udbyderens standard.';
$string['settings:systemprompt'] = 'Systempromptskabelon';
$string['settings:systemprompt_desc'] = 'Systemprompten sendt til AI\'en. Brug pladsholdere: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Du er en hjælpsom AI-tutor til kurset "{{coursename}}". Studentens rolle er {{userrole}}.

Emner dækket i kurset:
{{coursetopics}}

Hjælp studenten med at forstå kursusindholdet. Vær opmuntrende, klar og pædagogisk grundig.';
$string['settings:temperature'] = 'Temperatur';
$string['settings:temperature_desc'] = 'Styrer tilfældighed. Lavere værdier er mere fokuserede, højere værdier er mere kreative. Interval: 0,0 til 2,0.';
$string['settings:maxhistory'] = 'Maksimal samtalehistorik';
$string['settings:maxhistory_desc'] = 'Maksimalt antal beskedpar, der skal inkluderes i API-forespørgsler. Ældre beskeder fjernes.';
$string['settings:avatar'] = 'Chat-avatar';
$string['settings:avatar_desc'] = 'Vælg avatarikonet til chatwidgetknappen.';
$string['settings:avatar_saylor'] = '{$a}-logo (standard)';
$string['settings:position'] = 'Widgetposition';
$string['settings:position_desc'] = 'Chatwidgets position på siden.';
$string['settings:position_br'] = 'Nederst til højre';
$string['settings:position_bl'] = 'Nederst til venstre';
$string['settings:position_tr'] = 'Øverst til højre';
$string['settings:position_tl'] = 'Øverst til venstre';
$string['chat:settings'] = 'Pluginindstillinger';
$string['analytics:viewdashboard'] = 'Vis analysedashboard';
$string['coursesettings:title'] = 'Kursus-AI-indstillinger';
$string['coursesettings:enabled'] = 'Aktiver kursustilsidesættelser';
$string['coursesettings:enabled_desc'] = 'Når aktiveret, tilsidesætter indstillingerne nedenfor den globale AI-udbyderkonfiguration kun for dette kursus. Lad felter stå tomme for at arve den globale værdi.';
$string['coursesettings:sola_enabled'] = 'SOLA på dette kursus';
$string['coursesettings:sola_enabled_toggle'] = 'Vis SOLA-widgetten på dette kursus';
$string['coursesettings:sola_enabled_desc'] = 'Styrer, om SOLA-chatwidgetten vises på dette kursus. Standardindstillingen på tværs af siden indstilles i plugin-indstillingerne under General > Default for new courses.';
$string['coursesettings:using_global'] = 'Bruger global indstilling';
$string['coursesettings:saved'] = 'Kursus-AI-indstillinger gemt.';
$string['coursesettings:global_settings_link'] = 'Globale AI-indstillinger';
$string['lang:switch'] = 'Ja, skift';
$string['lang:dismiss'] = 'Nej tak';
$string['lang:change'] = 'Skift sprog';
$string['lang:english'] = 'Engelsk';
$string['chat:title'] = 'AI-tutor';
$string['chat:placeholder'] = 'Stil et spørgsmål...';
$string['chat:send'] = 'Send';
$string['chat:close'] = 'Luk chat';
$string['chat:open'] = 'Åbn AI-tutorchat';
$string['chat:clear'] = 'Ryd skærmen';
$string['chat:clear_confirm'] = 'Ryd de synlige beskeder? Hele din chathistorik forbliver gemt og kan genindlæses ved at åbne widgetten igen.';
$string['chat:copy'] = 'Kopier samtale';
$string['chat:copied'] = 'Samtale kopieret til udklipsholder';
$string['chat:copy_failed'] = 'Kopiering af samtale mislykkedes';
$string['chat:thinking'] = 'Tænker...';
$string['chat:error'] = 'Beklager, der opstod en fejl. Prøv venligst igen.';
$string['chat:error_auth'] = 'Godkendelsesfejl. Kontakt venligst din administrator.';
$string['chat:error_ratelimit'] = 'For mange forespørgsler. Vent venligst et øjeblik, og prøv igen.';
$string['chat:error_unavailable'] = 'AI-tjenesten er midlertidigt utilgængelig. Prøv venligst igen senere.';
$string['chat:error_notconfigured'] = 'AI-tutoren er endnu ikke konfigureret. Kontakt venligst din administrator.';
$string['chat:mic'] = 'Sig dit spørgsmål højt';
$string['chat:mic_error'] = 'Mikrofonfejl. Kontroller venligst dine browsertilladelser.';
$string['chat:mic_unsupported'] = 'Stemmeinput understøttes ikke af denne browser.';
$string['chat:newline_hint'] = 'Shift+Enter for nyt afsnit';
$string['chat:you'] = 'Dig';
$string['chat:assistant'] = 'AI-tutor';
$string['chat:history_loaded'] = 'Tidligere samtale indlæst.';
$string['chat:history_cleared'] = 'Chathistorik ryddet.';
$string['chat:offtopic_warning'] = 'Det ser ud til, at dit spørgsmål ikke er relateret til dette kursus. Prøv at holde dig til emnet, så jeg kan hjælpe dig bedst muligt!';
$string['chat:offtopic_ended'] = 'Din adgang til AI-tutoren er midlertidigt suspenderet i {$a} minutter, fordi samtalen for ofte afveg fra emnet. Brug denne tid til at gennemgå dit kursusmateriale, og prøv igen senere.';
$string['chat:offtopic_locked'] = 'Din adgang til AI-tutoren er midlertidigt suspenderet. Du kan prøve igen om {$a} minutter. Fokuser på kursusrelaterede spørgsmål, når du vender tilbage.';
$string['chat:escalated_to_support'] = 'Jeg kunne ikke fuldt ud besvare dit spørgsmål, så jeg har oprettet en supportticket til dig. Et medlem af supportteamet vil kontakte dig. Dit ticketnummer er: {$a}';
$string['chat:studyplan_intro'] = 'Jeg kan hjælpe dig med at oprette en studieplan for dette kursus! Fortæl mig blot, hvor mange timer om ugen du kan bruge på at studere, og jeg hjælper dig med at opbygge en struktureret plan.';
$string['settings:faq_heading'] = 'FAQ og support';
$string['settings:faq_heading_desc'] = 'Konfigurer den centraliserede FAQ og Zendesk-supportticketintegrationen.';
$string['settings:faq_content'] = 'FAQ-indhold';
$string['settings:faq_content_desc'] = 'Indtast FAQ-poster (en pr. linje i formatet: Q: spørgsmål | A: svar). Disse gives til AI\'en til besvarelse af almindelige supportspørgsmål.';
$string['settings:zendesk_enabled'] = 'Aktiver Zendesk-eskalering';
$string['settings:zendesk_enabled_desc'] = 'Når AI\'en ikke kan løse et supportspørgsmål, oprettes automatisk en Zendesk-ticket med et samtaleoversigt.';
$string['settings:zendesk_subdomain'] = 'Zendesk-subdomæne';
$string['settings:zendesk_subdomain_desc'] = 'Dit Zendesk-subdomæne (f.eks. "minfirma" for minfirma.zendesk.com).';
$string['settings:zendesk_email'] = 'Zendesk API-e-mail';
$string['settings:zendesk_email_desc'] = 'Zendesk-brugerens e-mailadresse til API-godkendelse (med /token-suffiks).';
$string['settings:zendesk_token'] = 'Zendesk API-token';
$string['settings:zendesk_token_desc'] = 'API-token til Zendesk-godkendelse.';
$string['settings:offtopic_heading'] = 'Registrering af emneafvigelse';
$string['settings:offtopic_heading_desc'] = 'Konfigurer, hvordan chatten håndterer samtaler, der afviger fra emnet.';
$string['settings:offtopic_enabled'] = 'Aktiver registrering af emneafvigelse';
$string['settings:offtopic_enabled_desc'] = 'Bed AI\'en om at registrere og omdirigere samtaler, der afviger fra emnet.';
$string['settings:offtopic_max'] = 'Maks. antal beskeder uden for emnet';
$string['settings:offtopic_max_desc'] = 'Antal på hinanden følgende beskeder uden for emnet, før der træffes foranstaltninger.';
$string['settings:offtopic_action'] = 'Handling ved emneafvigelse';
$string['settings:offtopic_action_desc'] = 'Hvad der skal gøres, når grænsen for emneafvigelse er nået.';
$string['settings:offtopic_action_warn'] = 'Advar og omdiriger';
$string['settings:offtopic_action_end'] = 'Midlertidigt bloker adgang';
$string['settings:offtopic_lockout_duration'] = 'Blokeringsvarighed (i minutter)';
$string['settings:offtopic_lockout_duration_desc'] = 'Varighed (i minutter), som en studerende mister adgang til AI-tutoren efter at have overskredet grænsen for emneafvigelse. Standard: 30 minutter.';
$string['settings:studyplan_heading'] = 'Studieplanlægning og påmindelser';
$string['settings:studyplan_heading_desc'] = 'Konfigurer studieplanlægningsfunktioner og påmindelsesnotifikationer.';
$string['settings:studyplan_enabled'] = 'Aktiver studieplanlægning';
$string['settings:studyplan_enabled_desc'] = 'Tillad AI-tutoren at hjælpe studerende med at oprette personlige studieplaner baseret på deres tilgængelige tid.';
$string['settings:reminders_email_enabled'] = 'Aktiver e-mailpåmindelser';
$string['settings:reminders_email_enabled_desc'] = 'Tillad studerende at tilmelde sig studiepåmindelser via e-mail.';
$string['settings:reminders_whatsapp_enabled'] = 'Aktiver WhatsApp-påmindelser';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Tillad studerende at tilmelde sig studiepåmindelser via WhatsApp (kræver konfiguration af WhatsApp API).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API-URL';
$string['settings:whatsapp_api_url_desc'] = 'API-endpointet til afsendelse af WhatsApp-beskeder (f.eks. Twilio, MessageBird). Skal acceptere POST med en JSON-body indeholdende felterne "to", "from" og "body".';
$string['settings:whatsapp_api_token'] = 'WhatsApp API-token';
$string['settings:whatsapp_api_token_desc'] = 'Godkendelsestoken til WhatsApp API.';
$string['settings:whatsapp_from_number'] = 'WhatsApp-afsendernummer';
$string['settings:whatsapp_from_number_desc'] = 'Telefonnummeret, hvorfra WhatsApp-beskeder sendes (med landekode, f.eks. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Blokerede lande for WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Kommaseparerede ISO 3166-1 alpha-2 landekoder, hvor WhatsApp-påmindelser ikke er tilladt pga. lokale regler (f.eks. "CN,IR,KP").';
$string['reminder:email_subject'] = 'Studiepåmindelse: {$a}';
$string['reminder:email_body'] = 'Hej {$a->firstname},

Her er din studiepåmindelse for "{$a->coursename}".

{$a->message}

Din studieplan foreslår {$a->hours_per_week} timer om ugen for dette kursus.

Bliv ved med det gode arbejde!

---
For at afmelde disse påmindelser, klik her: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Studiepåmindelse for {$a->coursename}: {$a->message} (Afmeld: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Dagens studiemål: ';
$string['unsubscribe:title'] = 'Afmeld studiepåmindelser';
$string['unsubscribe:success'] = 'Du er blevet afmeldt studiepåmindelser for dette kursus.';
$string['unsubscribe:already'] = 'Du har allerede afmeldt disse påmindelser.';
$string['unsubscribe:invalid'] = 'Ugyldigt eller udløbet afmeldingslink.';
$string['unsubscribe:resubscribe'] = 'Skiftede du mening? Du kan genaktivere påmindelser via AI-tutorchatten.';
$string['task:send_reminders'] = 'Send AI-tutor studiepåmindelser';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Gemmer studerendes studieplaner.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID\'et for den bruger, der ejer studieplanen.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kurset, som studieplanen tilhører.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Timer om ugen, som den studerende planlægger at studere.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Studieplanens detaljer i JSON-format.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Gemmer studiepåmindelsespræferencer og abonnementer.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID\'et for den bruger, der abonnerer på påmindelser.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Påmindelseskanalen (e-mail eller WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'E-mailadressen eller telefonnummeret til påmindelser.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Brugerens landekode til reguleringsmæssig overholdelse.';
$string['analytics:title'] = 'AI-tutoranalyser';
$string['analytics:overview'] = 'Oversigt';
$string['analytics:total_conversations'] = 'Samtaler i alt';
$string['analytics:total_messages'] = 'Beskeder i alt';
$string['analytics:active_students'] = 'Aktive studerende';
$string['analytics:avg_messages_per_student'] = 'Gns. beskeder pr. studerende';
$string['analytics:offtopic_rate'] = 'Emneafvigelsesrate';
$string['analytics:escalation_count'] = 'Eskaleret til support';
$string['analytics:studyplan_adoption'] = 'Studerende med studieplaner';
$string['analytics:usage_trends'] = 'Brugstendenser';
$string['analytics:daily_messages'] = 'Dagligt beskedvolumen';
$string['analytics:hotspots'] = 'Kursus-hotspots';
$string['analytics:hotspots_desc'] = 'Kursussektioner, der oftest nævnes i studerendes spørgsmål. Høje tal kan indikere områder, hvor studerende har brug for mere støtte.';
$string['analytics:section'] = 'Sektion';
$string['analytics:mention_count'] = 'Omtaler';
$string['analytics:common_prompts'] = 'Almindelige spørgsmålsmønstre';
$string['analytics:common_prompts_desc'] = 'Tilbagevendende spørgsmålsmønstre fra studerende. Gennemgå dem for at identificere systematiske huller i kursusindholdet.';
$string['analytics:prompt_pattern'] = 'Mønster';
$string['analytics:frequency'] = 'Hyppighed';
$string['analytics:recent_activity'] = 'Seneste aktivitet';
$string['analytics:no_data'] = 'Ingen analysedata tilgængelig endnu. Data vises, når studerende begynder at bruge AI-tutoren.';
$string['analytics:timerange'] = 'Tidsinterval';
$string['analytics:last_7_days'] = 'Seneste 7 dage';
$string['analytics:last_30_days'] = 'Seneste 30 dage';
$string['analytics:all_time'] = 'Hele perioden';
$string['analytics:export'] = 'Eksporter data';
$string['analytics:provider_comparison'] = 'Sammenligning af AI-udbydere';
$string['analytics:provider_comparison_desc'] = 'Sammenlign ydeevnen af AI-udbydere brugt i dette kursus.';
$string['analytics:provider'] = 'Udbyder';
$string['analytics:response_count'] = 'Svar';
$string['analytics:avg_response_length'] = 'Gns. svarlængde';
$string['analytics:total_tokens'] = 'Tokens i alt';
$string['analytics:avg_tokens'] = 'Gns. tokens / svar';
$string['usersettings:title'] = 'AI-kursusassistent: Dine data';
$string['usersettings:intro'] = 'Administrer dine AI-tutorchatdata og privatlivsindstillinger';
$string['usersettings:privacy_info'] = 'Dine samtaler med AI-tutoren gemmes for at give dig løbende støtte gennem dit kursus. Du har fuld kontrol over disse data og kan slette dem når som helst.';
$string['usersettings:usage_stats'] = 'Din brugsstatistik';
$string['usersettings:total_messages'] = 'Beskeder i alt';
$string['usersettings:total_conversations'] = 'Samtaler';
$string['usersettings:messages'] = 'Beskeder';
$string['usersettings:last_activity'] = 'Seneste aktivitet';
$string['usersettings:delete_course_data'] = 'Slet kursusdata';
$string['usersettings:no_data'] = 'Du har endnu ikke brugt AI-tutoren. Dine brugsdata vises her, når du begynder at chatte.';
$string['usersettings:delete_all_title'] = 'Slet alle dine data';
$string['usersettings:delete_all_warning'] = 'Denne handling sletter permanent alle dine AI-tutorsamtaler på tværs af alle kurser. Denne handling kan ikke fortrydes.';
$string['usersettings:delete_all_button'] = 'Slet alle mine data';
$string['usersettings:confirm_delete_course'] = 'Er du sikker på, at du vil slette alle dine AI-tutordata for kurset "{$a}" permanent? Denne handling kan ikke fortrydes.';
$string['usersettings:confirm_delete_all'] = 'Er du sikker på, at du vil slette ALLE dine AI-tutordata permanent på tværs af alle kurser? Denne handling kan ikke fortrydes.';
$string['usersettings:data_deleted'] = 'Dine data er blevet slettet.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Hej, {$a}! Jeg er SOLA. Hvordan kan jeg hjælpe dig i dag?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Åbn SOLA';
$string['chat:change_avatar'] = 'Skift avatar';

// Quiz UI.
$string['chat:quiz'] = 'Tag en øvelsesquiz';
$string['chat:quiz_setup_title'] = 'Øvelsesquiz';
$string['chat:quiz_questions'] = 'Antal spørgsmål';
$string['chat:quiz_topic'] = 'Emne';
$string['chat:quiz_topic_guided'] = 'AI-guidet (baseret på din fremgang)';
$string['chat:quiz_topic_default'] = 'Aktuelt kursusindhold';
$string['chat:quiz_topic_custom'] = 'Brugerdefineret emne…';
$string['chat:quiz_custom_placeholder'] = 'Indtast et emne eller spørgsmål...';
$string['chat:quiz_start'] = 'Start quiz';
$string['chat:quiz_cancel'] = 'Annuller';
$string['chat:quiz_loading'] = 'Genererer quiz…';
$string['chat:quiz_error'] = 'Kunne ikke generere en quiz. Prøv venligst igen.';
$string['chat:quiz_correct'] = 'Korrekt!';
$string['chat:quiz_wrong'] = 'Forkert.';
$string['chat:quiz_next'] = 'Næste spørgsmål';
$string['chat:quiz_finish'] = 'Se resultater';
$string['chat:quiz_score'] = 'Quiz fuldført! Du fik {$a->score} ud af {$a->total}.';
$string['chat:quiz_summary'] = 'Jeg har lige gennemført en øvelsesquiz med {$a->total} spørgsmål om "{$a->topic}" og fik {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Læringsmål';
$string['chat:quiz_topic_modules'] = 'Kursusemne';
$string['chat:quiz_subtopic_select'] = 'Vælg et specifikt element…';
$string['chat:quiz_topic_sections'] = 'Kursussektioner';
$string['chat:quiz_score_great'] = 'Fremragende arbejde! Du mestrer virkelig dette stof.';
$string['chat:quiz_score_good'] = 'God indsats! Fortsæt med at repetere for at styrke din forståelse.';
$string['chat:quiz_score_practice'] = 'Bliv ved med at øve. Prøv at gennemgå det relevante kursusindhold, og tag derefter quizzen igen.';
$string['chat:quiz_review_heading'] = 'Gennemgang';
$string['chat:quiz_retake'] = 'Tag quizzen igen';
$string['chat:quiz_exit'] = 'Afslut quiz';
$string['chat:quiz_your_answer'] = 'Dit svar';
$string['chat:quiz_correct_answer'] = 'Korrekt svar';

// Conversation starters.
$string['chat:starters_label'] = 'Samtalestartere';
$string['chat:starter_quiz'] = 'Test mig i dette';
$string['chat:starter_explain'] = 'Forklar dette';
$string['chat:starter_key_concepts'] = 'Nøglebegreber';
$string['chat:starter_study_plan'] = 'Studieplan';
$string['chat:starter_help_me'] = 'AI-hjælp';
$string['chat:starter_ai_project_coach'] = 'AI-projektvejleder';
$string['chat:starter_ell_practice'] = 'Samtaleøvelse';
$string['chat:starter_ell_pronunciation'] = 'ELL-udtale';
$string['chat:starter_ai_coach'] = 'AI-coach';
$string['chat:starter_speak'] = 'Sig en starter';

// Reset / home.
$string['chat:reset'] = 'Start forfra';

// Topic picker.
$string['chat:topic_picker_title'] = 'Hvad vil du fokusere på?';
$string['chat:topic_picker_title_help'] = 'Hvad har du brug for hjælp til?';
$string['chat:topic_picker_title_explain'] = 'Hvad vil du have mig til at forklare?';
$string['chat:topic_picker_title_study'] = 'Hvilket område vil du fokusere på?';
$string['chat:topic_start'] = 'Fortsæt';

// Expand states.
$string['chat:fullscreen'] = 'Fuld skærm';
$string['chat:exitfullscreen'] = 'Afslut fuld skærm';

// Settings panel.
$string['chat:language'] = 'Skift sprog';
$string['chat:settings_panel'] = 'Indstillinger';
$string['chat:settings_language'] = 'Sprog';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Stemme';
$string['chat:settings_voice_admin'] = 'Stemmeindstillinger administreres i webstedets administrationspanel.';

// Voice mode.
$string['chat:voice_mode'] = 'Stemmetilstand';
$string['chat:voice_end'] = 'Afslut stemmesession';
$string['chat:voice_connecting'] = 'Opretter forbindelse...';
$string['chat:voice_listening'] = 'Lytter...';
$string['chat:voice_speaking'] = 'SOLA taler...';
$string['chat:voice_idle'] = 'Klar';
$string['chat:voice_error'] = 'Stemmeforbindelsen mislykkedes. Kontroller venligst dine indstillinger.';
$string['chat:quiz_locked'] = 'SOLA er sat på pause under quizzer for at bevare akademisk integritet. Held og lykke!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Noter';

// History panel.
$string['chat:history_title'] = 'Noter og samtalehistorik';
$string['task:send_inactivity_reminders'] = 'Send ugentlige påmindelses-e-mails ved inaktivitet';
$string['task:run_meta_ai_query'] = 'Kør planlagt Læringsradar analyseforespørgsel';
$string['messageprovider:study_notes'] = 'Studiesessionsnotater';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Frontend-levering';
$string['settings:cdn_heading_desc'] = 'Server SOLA frontend-aktiver (JS/CSS) fra en ekstern CDN i stedet for Moodles filsystem. Dette muliggør frontend-opdateringer uden plugin-opgradering. Lad CDN URL stå tom for at bruge lokale plugin-filer.';
$string['settings:cdn_url'] = 'CDN-basis-URL';
$string['settings:cdn_url_desc'] = 'Basis-URL hvor sola.min.js og sola.min.css hostes. Eksempel: https://your-org.github.io/sola-cdn. Lad feltet stå tomt for at bruge lokale plugin-filer.';
$string['settings:cdn_version'] = 'CDN-aktivversion';
$string['settings:cdn_version_desc'] = 'Versionsstreng tilføjet til CDN-URLer for cache busting. Opdater efter hver CDN-udrulning (f.eks. 3.2.4 eller et commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Samlet brug';
$string['analytics:tab_bycourse'] = 'Per kursus';
$string['analytics:tab_comparison'] = 'AI vs ikke-brugere';
$string['analytics:tab_byunit'] = 'Per enhed';
$string['analytics:tab_usagetypes'] = 'Brugstyper';
$string['analytics:tab_themes'] = 'Temaer';
$string['analytics:tab_feedback'] = 'AI-feedback';
$string['analytics:total_students'] = 'Studerende i alt';
$string['analytics:active_users'] = 'Aktive AI-brugere';
$string['analytics:msgs_per_student'] = 'Beskeder per studerende';
$string['analytics:avg_session'] = 'Gennemsnitlig sessionsvarighed';
$string['analytics:return_rate'] = 'Tilbagevendelsesrate';
$string['analytics:total_sessions'] = 'Sessioner i alt';
$string['analytics:thumbs_up'] = 'Tommelfinger op';
$string['analytics:thumbs_down'] = 'Tommelfinger ned';
$string['analytics:hallucination_flags'] = 'Markeringer for unøjagtighed';
$string['analytics:msgs_to_resolution'] = 'Beskeder til løsning';
$string['analytics:helpful'] = 'Nyttig';
$string['analytics:not_helpful'] = 'Ikke nyttig';
$string['analytics:flag_hallucination'] = 'Dette svar indeholder unøjagtige oplysninger';
$string['analytics:submit_rating'] = 'Indsend';
$string['analytics:thanks_feedback'] = 'Tak for din feedback';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Forklar denne side';
$string['chat:starter_ask_anything'] = 'Spørg om hvad som helst';
$string['chat:starter_review_practice'] = 'Gennemgå og øv';
$string['chat:history_saved_subtitle'] = 'Gemte svar forbliver på denne enhed for dette kursus.';
$string['chat:history_saved_empty'] = 'Gem et AI-svar for at se det her.';
$string['chat:history_views_label'] = 'Historikvisninger';
$string['chat:history_view_saved'] = 'Gemte';
$string['chat:history_view_recent'] = 'Historik';
$string['chat:debug_refresh'] = 'Opdater';
$string['chat:debug_copy_all'] = 'Kopier alt';
$string['chat:debug_close'] = 'Luk';
$string['chat:language_switch'] = 'Skift sprog';
$string['chat:language_dismiss'] = 'Afvis sprogforslag';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Vælg LLM-udbyder';
$string['chat:llm_model_label'] = 'Model';
$string['chat:llm_model_select'] = 'Vælg LLM-model';
$string['chat:footer_usertesting'] = 'Brugervenlighedstest';
$string['chat:footer_feedback'] = 'Feedback';
$string['chat:voice_panel_title'] = 'Tal med {$a} (eksperimentel)';

// Additional translated strings.
$string['chat:debug_context'] = 'Kontekst debug';
$string['chat:debug_context_browser'] = 'Browser-snapshot';
$string['chat:debug_context_copy'] = 'Kopiér';
$string['chat:debug_context_prompt'] = 'Serversvar';
$string['chat:debug_context_request'] = 'Seneste SSE-anmodning';
$string['chat:debug_context_toggle'] = 'Skift inspektor';
$string['chat:history_empty'] = 'Ingen samtaler endnu.';
$string['chat:history_refresh'] = 'Opdater';
$string['chat:history_subtitle'] = 'Dine seneste beskeder.';
$string['chat:starter_explain_prompt'] = 'Forklar det vigtigste koncept?';
$string['chat:starter_help_lesson'] = 'Forklar dette';
$string['chat:starter_help_lesson_prompt'] = 'Hjælp mig med lektionen. Resumér nøglebegreberne.';
$string['chat:starter_prompt_coach'] = 'AI prompt-coach';
$string['chat:starter_quick_study'] = 'Hurtigt studie';
$string['chat:starter_study_plan_prompt'] = 'Jeg vil planlægge studie. Spørg: (1) hvad jeg vil, (2) tid. Opdater planen.';
$string['chat:voice_copy'] = 'Stemmesamtale med din assistent.';
$string['chat:voice_ready'] = 'Klar';
$string['chat:voice_start'] = 'Start samtale';
$string['chat:voice_title'] = 'Tal med SOLA';
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
$string['mobile_chip_concepts'] = 'Nøglebegreber';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Studieplan';
$string['mobile_clear'] = 'Ryd historik';
$string['mobile_disabled'] = 'SOLA er ikke tilgængelig for dette kursus.';
$string['mobile_placeholder'] = 'Stil et spørgsmål...';
$string['mobile_welcome'] = 'Hej, {$a}!';
$string['mobile_welcome_sub'] = 'Jeg er SOLA, din læringsassistent. Hvordan kan jeg hjælpe?';
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
$string['rubric:done'] = 'Færdig';
$string['rubric:encourage_high'] = 'Fremragende! Fortsæt!';
$string['rubric:encourage_low'] = 'God start! Regelmæssig øvelse hjælper.';
$string['rubric:encourage_mid'] = 'God indsats! Fortsæt med at øve.';
$string['rubric:overall'] = 'Samlet';
$string['rubric:practice_again'] = 'Øv igen';
$string['rubric:score_title_conversation'] = 'Samtaleøvelsesscore';
$string['rubric:score_title_pronunciation'] = 'Udtaleøvelsesscore';
$string['rubric:scoring'] = 'Evaluerer...';
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
$string['demo:title'] = 'Testmiljø';
$string['demo:heading'] = 'Testmiljø';
$string['demo:intro'] = 'Denne side opretter et testkursus, der er <strong>skjult for studerende</strong> (visible=0), og fylder det med fiktive studerende, AI-samtaler, vurderinger og feedback. Nyttigt til at forhåndsvise Analytics Dashboard eller validere plugin-ændringer uden at påvirke nogen reelt indskrevne studerende.';
$string['demo:step1'] = 'Trin 1: testkursus';
$string['demo:step2'] = 'Trin 2: tilføj fiktive studerende og AI-chats';
$string['demo:course_exists'] = 'Testkursus findes: <strong>{$a->fullname}</strong> (kort navn <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'skjult';
$string['demo:badge_visible'] = 'synlig for studerende';
$string['demo:no_course'] = 'Intet testkursus fundet. Klik nedenfor for at oprette et.';
$string['demo:create_btn'] = 'Opret skjult testkursus';
$string['demo:open_course'] = 'Åbn kursus &rarr;';
$string['demo:seed_intro'] = 'Opretter demo_student_001, demo_student_002, ... tilmelder dem til testkurset og indsætter syntetiske samtaler, beskeder, vurderinger og feedback. Kør igen for at tilføje flere data, eller sæt flueben i „ryd først“ for at starte forfra.';
$string['demo:users_label'] = 'Brugere';
$string['demo:weeks_label'] = 'Uger';
$string['demo:clear_label'] = 'Ryd eksisterende demo_*-brugere først';
$string['demo:seed_btn'] = 'Tilføj studerende og chats';
$string['demo:view_analytics'] = 'Se analyser for dette kursus &rarr;';
$string['demo:footer'] = 'Data oprettet her ligger i Moodles standard bruger- / tilmeldingstabeller og i pluginets egne samtaletabeller. Alle fiktive brugere har brugernavne, der starter med <code>demo_student_</code>, så de er nemme at filtrere eller fjerne. For at fjerne dem skal du køre seed-trinnet igen med „Ryd eksisterende demo_*-brugere først“ markeret.';
$string['demo:course_fullname'] = 'SOLA Testkursus (skjult)';
$string['demo:notify_created'] = 'Testkursus klar: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Kunne ikke oprette kursus: {$a}';
$string['demo:notify_seeded'] = 'Tilføjet: {$a->users} brugere, {$a->conversations} samtaler, {$a->messages} beskeder, {$a->ratings} vurderinger, {$a->feedback} feedback-poster.';
$string['demo:notify_seed_fail'] = 'Kunne ikke tilføje data: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Tokenomkostninger og analyser &rarr;';
$string['toc:testing'] = 'Testmiljø &rarr;';
$string['toc:back_to_course'] = '&larr; Tilbage til {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext-binær ikke fundet; PDF-ekstraktion deaktiveret.';
$string['rag:pdftotext_available'] = 'pdftotext blev fundet i {$a}.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive-udvidelsen er ikke tilgængelig; DOCX-ekstraktion deaktiveret.';
$string['rag:h5p_unavailable'] = 'H5P-indhold kunne ikke læses; springer over.';
$string['rag:scorm_too_large'] = 'SCORM-pakken overstiger den konfigurerede størrelsesgrænse ({$a} MB); springer over.';
$string['rag:scorm_unzip_failed'] = 'SCORM-pakken kunne ikke udpakkes; springer over.';
$string['rag:transcript_fetch_failed'] = 'Kunne ikke hente transskription fra {$a}.';
$string['rag:transcript_cf_challenge'] = 'Transskriptions-URL blokeret af Cloudflare-udfordring: {$a}.';
$string['rag:embed_detected'] = 'Registreret indlejret medie: {$a}';
$string['rag:embed_transcript_attached'] = 'Transskription vedhæftet for {$a}';

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
