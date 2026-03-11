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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'AI-udbyder';
$string['settings:provider_desc'] = 'Vælg den AI-udbyder, der skal bruges til chatfuldførelse.';
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
$string['settings:avatar_saylor'] = 'Saylor Academy-logo (standard)';
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
$string['chat:clear'] = 'Ryd historik';
$string['chat:clear_confirm'] = 'Er du sikker på, at du vil rydde din chathistorik for dette kursus?';
$string['chat:copy'] = 'Kopier samtale';
$string['chat:copied'] = 'Samtale kopieret til udklipsholder';
$string['chat:copy_failed'] = 'Kopiering af samtale mislykkedes';
$string['chat:greeting'] = 'Hej! Jeg er din AI-tutor for dette kursus. Hvordan kan jeg hjælpe dig i dag?';
$string['chat:thinking'] = 'Tænker...';
$string['chat:error'] = 'Beklager, der opstod en fejl. Prøv venligst igen.';
$string['chat:error_auth'] = 'Godkendelsesfejl. Kontakt venligst din administrator.';
$string['chat:error_ratelimit'] = 'For mange forespørgsler. Vent venligst et øjeblik, og prøv igen.';
$string['chat:error_unavailable'] = 'AI-tjenesten er midlertidigt utilgængelig. Prøv venligst igen senere.';
$string['chat:error_notconfigured'] = 'AI-tutoren er endnu ikke konfigureret. Kontakt venligst din administrator.';
$string['chat:expand'] = 'Udvid chat';
$string['chat:collapse'] = 'Fold chat sammen';
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
$string['chat:greeting'] = 'Hej {$a}! Jeg er SOLA, din Saylor online læringsassistent.';
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
$string['chat:starter_quiz'] = 'Test mig';
$string['chat:starter_explain'] = 'Forklar dette';
$string['chat:starter_key_concepts'] = 'Nøglebegreber';
$string['chat:starter_study_plan'] = 'Studieplan';
$string['chat:starter_help_me'] = 'AI-hjælp';
$string['chat:starter_ell_practice'] = 'Øv samtale';
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
$string['task:send_inactivity_reminders'] = 'Send ugentlige påmindelses-e-mails ved inaktivitet';
$string['messageprovider:study_notes'] = 'Studiesessionsnotater';
