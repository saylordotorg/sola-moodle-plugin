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
 * Language strings for local_ai_course_assistant — Norwegian Bokmål.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI-kursassistent';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Lagrer AI-veiledersamtaler per bruker og kurs.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID-en til brukeren som eier samtalen.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID-en til kurset samtalen tilhører.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Tittelen på samtalen.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Tidspunktet da samtalen ble opprettet.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Tidspunktet da samtalen sist ble endret.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Lagrer individuelle meldinger i AI-veiledersamtaler.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID-en til brukeren som sendte meldingen.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID-en til kurset meldingen tilhører.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Rollen til meldingssenderen (bruker eller assistent).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Innholdet i meldingen.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Antall tokens brukt for meldingen.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Tidspunktet da meldingen ble opprettet.';
$string['ai_course_assistant:use'] = 'Bruke AI-veilederen';
$string['ai_course_assistant:viewanalytics'] = 'Vise AI-veilederanalyser';
$string['ai_course_assistant:manage'] = 'Administrere AI-veilederinnstillinger (administratorrolle)';
$string['settings:enabled'] = 'Aktiver AI-kursassistenten';
$string['settings:enabled_desc'] = 'Aktiver eller deaktiver AI-kursassistent-widgeten på kurssider.';
$string['settings:provider'] = 'AI-leverandør';
$string['settings:provider_desc'] = 'Velg AI-leverandøren som skal brukes til chatfullføringer.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (lokal)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Egendefinert (OpenAI-kompatibel)';
$string['settings:apikey'] = 'API-nøkkel';
$string['settings:apikey_desc'] = 'API-nøkkel for den valgte leverandøren. Ikke nødvendig for Ollama.';
$string['settings:model'] = 'Modellnavn';
$string['settings:model_desc'] = 'Modellen som skal brukes. Standard avhenger av leverandøren (f.eks. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API-basis-URL';
$string['settings:apibaseurl_desc'] = 'API-basis-URL. Fylles ut automatisk basert på leverandør, men kan overstyres. La stå tom for å bruke leverandørens standard.';
$string['settings:systemprompt'] = 'Systemprompt-mal';
$string['settings:systemprompt_desc'] = 'Systemprompten som sendes til AI-en. Bruk plassholderne {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Du er en hjelpsom AI-veileder for kurset «{{coursename}}». Studentens rolle er {{userrole}}.

Emner dekket i kurset:
{{coursetopics}}

Hjelp studenten med å forstå kursinnholdet. Vær oppmuntrende, tydelig og pedagogisk grundig.';
$string['settings:temperature'] = 'Temperatur';
$string['settings:temperature_desc'] = 'Kontrollerer tilfeldighet. Lave verdier er mer fokuserte, høye verdier er mer kreative. Område: 0,0 til 2,0.';
$string['settings:maxhistory'] = 'Maksimal samtalehistorikk';
$string['settings:maxhistory_desc'] = 'Maksimalt antall meldingspar som inkluderes i API-forespørsler. Eldre meldinger fjernes.';
$string['settings:avatar'] = 'Chat-avatar';
$string['settings:avatar_desc'] = 'Velg avatarikonet for chat-widget-knappen.';
$string['settings:avatar_saylor'] = 'Saylor Academy-logo (standard)';
$string['settings:position'] = 'Widget-posisjon';
$string['settings:position_desc'] = 'Posisjonen til chat-widgeten på siden.';
$string['settings:position_br'] = 'Nederst til høyre';
$string['settings:position_bl'] = 'Nederst til venstre';
$string['settings:position_tr'] = 'Øverst til høyre';
$string['settings:position_tl'] = 'Øverst til venstre';
$string['chat:settings'] = 'Plugininnstillinger';
$string['analytics:viewdashboard'] = 'Vis analysedashboard';
$string['coursesettings:title'] = 'Kurs-AI-innstillinger';
$string['coursesettings:enabled'] = 'Aktiver kursoverstyringer';
$string['coursesettings:enabled_desc'] = 'Når aktivert, overstyrer innstillingene nedenfor den globale AI-leverandørkonfigurasjonen kun for dette kurset. La felt stå tomme for å arve globale verdier.';
$string['coursesettings:using_global'] = 'Bruker global innstilling';
$string['coursesettings:saved'] = 'Kurs-AI-innstillinger lagret.';
$string['coursesettings:global_settings_link'] = 'Globale AI-innstillinger';
$string['lang:switch'] = 'Ja, bytt';
$string['lang:dismiss'] = 'Nei takk';
$string['lang:change'] = 'Bytt språk';
$string['lang:english'] = 'Engelsk';
$string['chat:title'] = 'AI-veileder';
$string['chat:placeholder'] = 'Still et spørsmål...';
$string['chat:send'] = 'Send';
$string['chat:close'] = 'Lukk chat';
$string['chat:open'] = 'Åpne AI-veilederen';
$string['chat:clear'] = 'Slett historikk';
$string['chat:clear_confirm'] = 'Er du sikker på at du vil slette chathistorikken for dette kurset?';
$string['chat:copy'] = 'Kopier samtale';
$string['chat:copied'] = 'Samtalen er kopiert til utklippstavlen';
$string['chat:copy_failed'] = 'Kunne ikke kopiere samtalen';
$string['chat:greeting'] = 'Hei! Jeg er din AI-veileder for dette kurset. Hvordan kan jeg hjelpe deg i dag?';
$string['chat:thinking'] = 'Tenker...';
$string['chat:error'] = 'Beklager, det oppstod en feil. Vennligst prøv igjen.';
$string['chat:error_auth'] = 'Autentiseringsfeil. Vennligst kontakt administratoren din.';
$string['chat:error_ratelimit'] = 'For mange forespørsler. Vennligst vent litt og prøv igjen.';
$string['chat:error_unavailable'] = 'AI-tjenesten er midlertidig utilgjengelig. Vennligst prøv igjen senere.';
$string['chat:error_notconfigured'] = 'AI-veilederen er ikke konfigurert ennå. Vennligst kontakt administratoren din.';
$string['chat:expand'] = 'Utvid chat';
$string['chat:collapse'] = 'Minimer chat';
$string['chat:mic'] = 'Still spørsmålet ditt med stemmen';
$string['chat:mic_error'] = 'Mikrofonfeil. Vennligst sjekk nettleserens tillatelser.';
$string['chat:mic_unsupported'] = 'Taleinndata støttes ikke i denne nettleseren.';
$string['chat:newline_hint'] = 'Shift+Enter for nytt avsnitt';
$string['chat:you'] = 'Du';
$string['chat:assistant'] = 'AI-veileder';
$string['chat:history_loaded'] = 'Tidligere samtale lastet.';
$string['chat:history_cleared'] = 'Chathistorikk slettet.';
$string['chat:offtopic_warning'] = 'Det ser ut som spørsmålet ditt ikke er relatert til dette kurset. Prøv å holde deg til emnet slik at jeg kan hjelpe deg best mulig!';
$string['chat:offtopic_ended'] = 'Tilgangen din til AI-veilederen er midlertidig suspendert i {$a} minutter fordi samtalen har gått for langt utenfor emnet. Bruk denne tiden til å gå gjennom kursmaterialet, og du kan prøve igjen senere.';
$string['chat:offtopic_locked'] = 'Tilgangen din til AI-veilederen er midlertidig suspendert. Du kan prøve igjen om {$a} minutter. Fokuser på kursrelaterte spørsmål når du kommer tilbake.';
$string['chat:escalated_to_support'] = 'Jeg klarte ikke å svare fullstendig på spørsmålet ditt, så jeg har opprettet en støttesak for deg. Et medlem av støtteteamet vil kontakte deg. Saksnummeret ditt er: {$a}';
$string['chat:studyplan_intro'] = 'Jeg kan hjelpe deg med å lage en studieplan for dette kurset! Bare fortell meg hvor mange timer i uken du kan bruke på studier, så hjelper jeg deg med å bygge en strukturert plan.';
$string['settings:faq_heading'] = 'FAQ og støtte';
$string['settings:faq_heading_desc'] = 'Konfigurer sentralisert FAQ og Zendesk-støttebillettintegrasjon.';
$string['settings:faq_content'] = 'FAQ-innhold';
$string['settings:faq_content_desc'] = 'Skriv inn FAQ-oppføringer (én per linje i formatet: Q: spørsmål | A: svar). Disse gis til AI-en for å besvare vanlige støttespørsmål.';
$string['settings:zendesk_enabled'] = 'Aktiver Zendesk-eskalering';
$string['settings:zendesk_enabled_desc'] = 'Når AI-en ikke kan løse et støttespørsmål, opprettes det automatisk en Zendesk-sak med en samtaleoppsummering.';
$string['settings:zendesk_subdomain'] = 'Zendesk-underdomene';
$string['settings:zendesk_subdomain_desc'] = 'Ditt Zendesk-underdomene (f.eks. «mittfirma» for mittfirma.zendesk.com).';
$string['settings:zendesk_email'] = 'Zendesk API-e-post';
$string['settings:zendesk_email_desc'] = 'Zendesk-brukerens e-postadresse for API-autentisering (med /token-suffiks).';
$string['settings:zendesk_token'] = 'Zendesk API-token';
$string['settings:zendesk_token_desc'] = 'API-token for Zendesk-autentisering.';
$string['settings:offtopic_heading'] = 'Utenfor-emne-deteksjon';
$string['settings:offtopic_heading_desc'] = 'Konfigurer hvordan chatten håndterer samtaler utenfor emnet.';
$string['settings:offtopic_enabled'] = 'Aktiver utenfor-emne-deteksjon';
$string['settings:offtopic_enabled_desc'] = 'La AI-en oppdage og omdirigere samtaler utenfor emnet.';
$string['settings:offtopic_max'] = 'Maksimalt antall meldinger utenfor emnet';
$string['settings:offtopic_max_desc'] = 'Antall påfølgende meldinger utenfor emnet før tiltak iverksettes.';
$string['settings:offtopic_action'] = 'Tiltak ved utenfor-emne';
$string['settings:offtopic_action_desc'] = 'Hva som skal gjøres når grensen for utenfor-emne er nådd.';
$string['settings:offtopic_action_warn'] = 'Advar og omdiriger';
$string['settings:offtopic_action_end'] = 'Midlertidig sperr tilgang';
$string['settings:offtopic_lockout_duration'] = 'Sperrevarighet (minutter)';
$string['settings:offtopic_lockout_duration_desc'] = 'Varighet (i minutter) en student mister tilgang til AI-veilederen etter å ha overskredet grensen for utenfor-emne. Standard: 30 minutter.';
$string['settings:studyplan_heading'] = 'Studieplanlegging og påminnelser';
$string['settings:studyplan_heading_desc'] = 'Konfigurer studieplanfunksjoner og påminnelsesvarsler.';
$string['settings:studyplan_enabled'] = 'Aktiver studieplanlegging';
$string['settings:studyplan_enabled_desc'] = 'La AI-veilederen hjelpe studenter med å lage personlige studieplaner basert på tilgjengelig tid.';
$string['settings:reminders_email_enabled'] = 'Aktiver e-postpåminnelser';
$string['settings:reminders_email_enabled_desc'] = 'La studenter melde seg på studiepåminnelser via e-post.';
$string['settings:reminders_whatsapp_enabled'] = 'Aktiver WhatsApp-påminnelser';
$string['settings:reminders_whatsapp_enabled_desc'] = 'La studenter melde seg på studiepåminnelser via WhatsApp (krever WhatsApp API-konfigurasjon).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API-URL';
$string['settings:whatsapp_api_url_desc'] = 'API-endepunkt for sending av WhatsApp-meldinger (f.eks. Twilio, MessageBird). Må akseptere POST med JSON-body som inneholder feltene «to», «from» og «body».';
$string['settings:whatsapp_api_token'] = 'WhatsApp API-token';
$string['settings:whatsapp_api_token_desc'] = 'Autentiseringstoken for WhatsApp API.';
$string['settings:whatsapp_from_number'] = 'WhatsApp-avsendernummer';
$string['settings:whatsapp_from_number_desc'] = 'Telefonnummeret WhatsApp-meldinger sendes fra (med landskode, f.eks. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp-blokkerte land';
$string['settings:whatsapp_blocked_countries_desc'] = 'Kommaseparerte ISO 3166-1 alpha-2 landkoder der WhatsApp-påminnelser ikke er tillatt på grunn av lokale forskrifter (f.eks. «CN,IR,KP»).';
$string['reminder:email_subject'] = 'Studiepåminnelse: {$a}';
$string['reminder:email_body'] = 'Hei {$a->firstname},

Her er din studiepåminnelse for «{$a->coursename}».

{$a->message}

Studieplanen din foreslår {$a->hours_per_week} timer per uke for dette kurset.

Fortsett det gode arbeidet!

---
For å slutte å motta disse påminnelsene, klikk her: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Studiepåminnelse for {$a->coursename}: {$a->message} (Avslutt abonnement: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Dagens studiemål: ';
$string['unsubscribe:title'] = 'Avslutt abonnement på studiepåminnelser';
$string['unsubscribe:success'] = 'Du har avsluttet abonnementet på studiepåminnelser for dette kurset.';
$string['unsubscribe:already'] = 'Du har allerede avsluttet abonnementet på disse påminnelsene.';
$string['unsubscribe:invalid'] = 'Ugyldig eller utløpt avmeldingslenke.';
$string['unsubscribe:resubscribe'] = 'Ombestemt deg? Du kan aktivere påminnelser igjen via AI-veilederen.';
$string['task:send_reminders'] = 'Send AI-veileder studiepåminnelser';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Lagrer studentenes studieplaner.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID-en til brukeren som eier studieplanen.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kurset studieplanen tilhører.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Timer per uke studenten planlegger å studere.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Studieplandetaljer i JSON-format.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Lagrer studiepåminnelsesinnstillinger og abonnementer.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID-en til brukeren som abonnerer på påminnelser.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Påminnelseskanalen (e-post eller WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'E-postadressen eller telefonnummeret for påminnelser.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Brukerens landskode for regulatorisk overholdelse.';
$string['analytics:title'] = 'AI-veilederanalyser';
$string['analytics:overview'] = 'Oversikt';
$string['analytics:total_conversations'] = 'Totalt antall samtaler';
$string['analytics:total_messages'] = 'Totalt antall meldinger';
$string['analytics:active_students'] = 'Aktive studenter';
$string['analytics:avg_messages_per_student'] = 'Gj.sn. meldinger per student';
$string['analytics:offtopic_rate'] = 'Utenfor-emne-rate';
$string['analytics:escalation_count'] = 'Eskalert til støtte';
$string['analytics:studyplan_adoption'] = 'Studenter med studieplaner';
$string['analytics:usage_trends'] = 'Brukstrender';
$string['analytics:daily_messages'] = 'Daglig meldingsvolum';
$string['analytics:hotspots'] = 'Kurshotspots';
$string['analytics:hotspots_desc'] = 'Kursseksjoner som oftest refereres i studentspørsmål. Høye tall kan indikere områder der studenter trenger mer støtte.';
$string['analytics:section'] = 'Seksjon';
$string['analytics:mention_count'] = 'Omtaler';
$string['analytics:common_prompts'] = 'Vanlige spørsmålsmønstre';
$string['analytics:common_prompts_desc'] = 'Gjentakende spørsmålsmønstre fra studenter. Gjennomgå disse for å identifisere systematiske hull i kursinnholdet.';
$string['analytics:prompt_pattern'] = 'Mønster';
$string['analytics:frequency'] = 'Frekvens';
$string['analytics:recent_activity'] = 'Nylig aktivitet';
$string['analytics:no_data'] = 'Ingen analysedata tilgjengelig ennå. Data vises når studenter begynner å bruke AI-veilederen.';
$string['analytics:timerange'] = 'Tidsperiode';
$string['analytics:last_7_days'] = 'Siste 7 dager';
$string['analytics:last_30_days'] = 'Siste 30 dager';
$string['analytics:all_time'] = 'Hele perioden';
$string['analytics:export'] = 'Eksporter data';
$string['analytics:provider_comparison'] = 'AI-leverandørsammenligning';
$string['analytics:provider_comparison_desc'] = 'Sammenlign ytelsen til AI-leverandører brukt i dette kurset.';
$string['analytics:provider'] = 'Leverandør';
$string['analytics:response_count'] = 'Svar';
$string['analytics:avg_response_length'] = 'Gj.sn. svarlengde';
$string['analytics:total_tokens'] = 'Totalt antall tokens';
$string['analytics:avg_tokens'] = 'Gj.sn. tokens / svar';
$string['usersettings:title'] = 'AI-kursassistent: Dine data';
$string['usersettings:intro'] = 'Administrer dine AI-veileder chatdata og personverninnstillinger';
$string['usersettings:privacy_info'] = 'Samtalene dine med AI-veilederen lagres for å gi deg kontinuerlig støtte gjennom kurset. Du har full kontroll over disse dataene og kan slette dem når som helst.';
$string['usersettings:usage_stats'] = 'Din bruksstatistikk';
$string['usersettings:total_messages'] = 'Totalt antall meldinger';
$string['usersettings:total_conversations'] = 'Samtaler';
$string['usersettings:messages'] = 'Meldinger';
$string['usersettings:last_activity'] = 'Siste aktivitet';
$string['usersettings:delete_course_data'] = 'Slett kursdata';
$string['usersettings:no_data'] = 'Du har ikke brukt AI-veilederen ennå. Bruksdataene dine vises her når du begynner å chatte.';
$string['usersettings:delete_all_title'] = 'Slett alle dine data';
$string['usersettings:delete_all_warning'] = 'Denne handlingen vil permanent slette alle dine samtaler med AI-veilederen i alle kurs. Denne handlingen kan ikke angres.';
$string['usersettings:delete_all_button'] = 'Slett alle mine data';
$string['usersettings:confirm_delete_course'] = 'Er du sikker på at du vil slette alle AI-veilederdata for kurset «{$a}» permanent? Denne handlingen kan ikke angres.';
$string['usersettings:confirm_delete_all'] = 'Er du sikker på at du vil slette ALLE AI-veilederdata i alle kurs permanent? Denne handlingen kan ikke angres.';
$string['usersettings:data_deleted'] = 'Dataene dine er slettet.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Hei, {$a}! Jeg er SOLA, din Saylor nettlæringsassistent.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Åpne SOLA';
$string['chat:change_avatar'] = 'Bytt avatar';

// Quiz UI.
$string['chat:quiz'] = 'Ta en øvingsquiz';
$string['chat:quiz_setup_title'] = 'Øvingsquiz';
$string['chat:quiz_questions'] = 'Antall spørsmål';
$string['chat:quiz_topic'] = 'Emne';
$string['chat:quiz_topic_guided'] = 'AI-veiledet (basert på din fremgang)';
$string['chat:quiz_topic_default'] = 'Gjeldende kursinnhold';
$string['chat:quiz_topic_custom'] = 'Egendefinert emne…';
$string['chat:quiz_custom_placeholder'] = 'Skriv inn et emne eller spørsmål...';
$string['chat:quiz_start'] = 'Start quiz';
$string['chat:quiz_cancel'] = 'Avbryt';
$string['chat:quiz_loading'] = 'Genererer quiz…';
$string['chat:quiz_error'] = 'Kunne ikke generere quiz. Vennligst prøv igjen.';
$string['chat:quiz_correct'] = 'Riktig!';
$string['chat:quiz_wrong'] = 'Feil.';
$string['chat:quiz_next'] = 'Neste spørsmål';
$string['chat:quiz_finish'] = 'Se resultater';
$string['chat:quiz_score'] = 'Quiz fullført! Du fikk {$a->score} av {$a->total}.';
$string['chat:quiz_summary'] = 'Jeg fullførte en øvingsquiz med {$a->total} spørsmål om «{$a->topic}» og fikk {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Læringsmål';
$string['chat:quiz_topic_modules'] = 'Kursemne';
$string['chat:quiz_subtopic_select'] = 'Velg et spesifikt element…';
$string['chat:quiz_topic_sections'] = 'Kursseksjoner';
$string['chat:quiz_score_great'] = 'Utmerket arbeid! Du behersker virkelig dette stoffet.';
$string['chat:quiz_score_good'] = 'Godt jobbet! Fortsett å repetere for å styrke forståelsen din.';
$string['chat:quiz_score_practice'] = 'Fortsett å øve. Prøv å gå gjennom det relevante kursinnholdet og ta quizen på nytt.';
$string['chat:quiz_review_heading'] = 'Gjennomgang';
$string['chat:quiz_retake'] = 'Ta quizen på nytt';
$string['chat:quiz_exit'] = 'Avslutt quiz';
$string['chat:quiz_your_answer'] = 'Ditt svar';
$string['chat:quiz_correct_answer'] = 'Riktig svar';

// Conversation starters.
$string['chat:starters_label'] = 'Samtalestartere';
$string['chat:starter_quiz'] = 'Test meg';
$string['chat:starter_explain'] = 'Forklar dette';
$string['chat:starter_key_concepts'] = 'Nøkkelkonsepter';
$string['chat:starter_study_plan'] = 'Studieplan';
$string['chat:starter_help_me'] = 'AI-hjelp';
$string['chat:starter_ell_practice'] = 'Øve på å snakke';
$string['chat:starter_ell_pronunciation'] = 'ELL-uttale';
$string['chat:starter_ai_coach'] = 'AI-coach';
$string['chat:starter_speak'] = 'Si en starter';

// Reset / home.
$string['chat:reset'] = 'Start på nytt';

// Topic picker.
$string['chat:topic_picker_title'] = 'Hva vil du fokusere på?';
$string['chat:topic_picker_title_help'] = 'Hva trenger du hjelp med?';
$string['chat:topic_picker_title_explain'] = 'Hva vil du at jeg skal forklare?';
$string['chat:topic_picker_title_study'] = 'Hvilket område vil du fokusere på?';
$string['chat:topic_start'] = 'Fortsett';

// Expand states.
$string['chat:fullscreen'] = 'Fullskjerm';
$string['chat:exitfullscreen'] = 'Avslutt fullskjerm';

// Settings panel.
$string['chat:language'] = 'Bytt språk';
$string['chat:settings_panel'] = 'Innstillinger';
$string['chat:settings_language'] = 'Språk';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Stemme';
$string['chat:settings_voice_admin'] = 'Stemmeinnstillinger administreres i nettstedsadminpanelet.';

// Voice mode.
$string['chat:voice_mode'] = 'Stemmemodus';
$string['chat:voice_end'] = 'Avslutt stemmeøkt';
$string['chat:voice_connecting'] = 'Kobler til...';
$string['chat:voice_listening'] = 'Lytter...';
$string['chat:voice_speaking'] = 'SOLA snakker...';
$string['chat:voice_idle'] = 'Klar';
$string['chat:voice_error'] = 'Stemmetilkobling mislyktes. Vennligst sjekk innstillingene dine.';
$string['chat:quiz_locked'] = 'SOLA er satt på pause under quizer for å bevare akademisk integritet. Lykke til!';
$string['task:send_inactivity_reminders'] = 'Send ukentlige inaktivitetspåminnelser via e-post';
$string['messageprovider:study_notes'] = 'Studieøktnotater';
