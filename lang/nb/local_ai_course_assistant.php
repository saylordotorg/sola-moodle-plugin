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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Standard for nye kurs';
$string['settings:default_course_mode_desc'] = 'Styrer om SOLA vises på et kurs når det ikke er gjort et valg per kurs. Nye installasjoner er som standard satt til "Deaktivert som standard" slik at administratorer kan aktivere kurs for kurs fra Analytics-siden eller Course AI Settings-siden.';
$string['settings:default_course_mode_per_course'] = 'Deaktivert som standard (aktiver per kurs)';
$string['settings:default_course_mode_all'] = 'Aktivert på alle kurs';
$string['settings:auto_open'] = 'Åpne automatisk ved første besøk';
$string['settings:auto_open_desc'] = 'Når aktivert åpnes SOLA-skuffen automatisk første gang en student kommer til hvert kurs. Etterfølgende sideinnlastinger i samme kurs åpner ikke skuffen på nytt — tilstanden spores per kurs i studentens nettleser via localStorage. Gjelder på datamaskin og mobil. Kan overstyres per kurs fra Course AI Settings-siden.';
$string['settings:comparison_providers'] = 'Sammenligningsleverandører (LLM-velger)';
$string['settings:comparison_providers_desc'] = 'Legg til ekstra AI-leverandører i den innebygde LLM-velgeren slik at administratorer kan sammenligne svar på tvers av leverandører. Bruk tabellen nedenfor for å legge til rader. Temperaturkolonnen er valgfri (la stå tom for å bruke den globale temperaturen). Lagret format: provider_id|api_key|model1,model2|temperature. Den primære leverandøren konfigurert ovenfor er alltid inkludert automatisk. Kun administratorer med administrasjonstilgang ser velgeren; studenter ser den aldri. Gyldige provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Standard AI-leverandør';
$string['settings:provider_desc'] = 'Velg AI-leverandøren som skal brukes til chat-fullføringer. Velg "Moodle AI (core_ai subsystem)" for å rute forespørsler gjennom Moodles innebygde AI-konfigurasjon på Site admin > AI; API-nøkkel, modell og basis-URL-feltene nedenfor ignoreres i den modusen. Streaming, verktøybruk og prompt caching er ikke tilgjengelig via core_ai — svar leveres som en enkelt del. Bruk en direkte leverandør for best studentopplevelse.';
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
$string['settings:avatar_saylor'] = '{$a}-logo (standard)';
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
$string['coursesettings:sola_enabled'] = 'SOLA på dette kurset';
$string['coursesettings:sola_enabled_toggle'] = 'Vis SOLA-widgeten på dette kurset';
$string['coursesettings:sola_enabled_desc'] = 'Styrer om SOLA-chattewidgeten vises på dette kurset. Standardinnstillingen for hele nettstedet angis i tilleggsinnstillingene under General > Default for new courses.';
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
$string['chat:clear'] = 'Tøm skjermen';
$string['chat:clear_confirm'] = 'Tømme de synlige meldingene? Hele chathistorikken din forblir lagret og kan lastes inn på nytt ved å åpne widgeten igjen.';
$string['chat:copy'] = 'Kopier samtale';
$string['chat:copied'] = 'Samtalen er kopiert til utklippstavlen';
$string['chat:copy_failed'] = 'Kunne ikke kopiere samtalen';
$string['chat:thinking'] = 'Tenker...';
$string['chat:error'] = 'Beklager, det oppstod en feil. Vennligst prøv igjen.';
$string['chat:error_auth'] = 'Autentiseringsfeil. Vennligst kontakt administratoren din.';
$string['chat:error_ratelimit'] = 'For mange forespørsler. Vennligst vent litt og prøv igjen.';
$string['chat:error_unavailable'] = 'AI-tjenesten er midlertidig utilgjengelig. Vennligst prøv igjen senere.';
$string['chat:error_notconfigured'] = 'AI-veilederen er ikke konfigurert ennå. Vennligst kontakt administratoren din.';
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
$string['chat:greeting'] = 'Hei, {$a}! Jeg er SOLA. Hvordan kan jeg hjelpe deg i dag?';
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
$string['chat:starter_quiz'] = 'Test meg på dette';
$string['chat:starter_explain'] = 'Forklar dette';
$string['chat:starter_key_concepts'] = 'Nøkkelkonsepter';
$string['chat:starter_study_plan'] = 'Studieplan';
$string['chat:starter_help_me'] = 'AI-hjelp';
$string['chat:starter_ai_project_coach'] = 'AI-prosjektveileder';
$string['chat:starter_ell_practice'] = 'Samtaleøvelse';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Notater';

// History panel.
$string['chat:history_title'] = 'Notater og samtalehistorikk';
$string['task:send_inactivity_reminders'] = 'Send ukentlige inaktivitetspåminnelser via e-post';
$string['task:run_meta_ai_query'] = 'Kjør planlagt Læringsradar-analyseforespørsel';
$string['messageprovider:study_notes'] = 'Studieøktnotater';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Frontend-levering';
$string['settings:cdn_heading_desc'] = 'Server SOLA frontend-ressurser (JS/CSS) fra en ekstern CDN i stedet for Moodles filsystem. Dette muliggjør frontend-oppdateringer uten plugin-oppgradering. La CDN URL stå tom for å bruke lokale plugin-filer.';
$string['settings:cdn_url'] = 'CDN-basis-URL';
$string['settings:cdn_url_desc'] = 'Basis-URL der sola.min.js og sola.min.css er vert. Eksempel: https://your-org.github.io/sola-cdn. La feltet stå tomt for å bruke lokale plugin-filer.';
$string['settings:cdn_version'] = 'CDN-ressursversjon';
$string['settings:cdn_version_desc'] = 'Versjonsstreng som legges til CDN-URLer for cache busting. Oppdater etter hver CDN-utrulling (f.eks. 3.2.4 eller et commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Samlet bruk';
$string['analytics:tab_bycourse'] = 'Per kurs';
$string['analytics:tab_comparison'] = 'AI vs ikke-brukere';
$string['analytics:tab_byunit'] = 'Per enhet';
$string['analytics:tab_usagetypes'] = 'Brukstyper';
$string['analytics:tab_themes'] = 'Temaer';
$string['analytics:tab_feedback'] = 'AI-tilbakemelding';
$string['analytics:total_students'] = 'Totalt antall studenter';
$string['analytics:active_users'] = 'Aktive AI-brukere';
$string['analytics:msgs_per_student'] = 'Meldinger per student';
$string['analytics:avg_session'] = 'Gjennomsnittlig øktvarighet';
$string['analytics:return_rate'] = 'Returrate';
$string['analytics:total_sessions'] = 'Totalt antall økter';
$string['analytics:thumbs_up'] = 'Tommel opp';
$string['analytics:thumbs_down'] = 'Tommel ned';
$string['analytics:hallucination_flags'] = 'Markeringer for unøyaktighet';
$string['analytics:msgs_to_resolution'] = 'Meldinger til løsning';
$string['analytics:helpful'] = 'Nyttig';
$string['analytics:not_helpful'] = 'Ikke nyttig';
$string['analytics:flag_hallucination'] = 'Dette svaret inneholder unøyaktig informasjon';
$string['analytics:submit_rating'] = 'Send inn';
$string['analytics:thanks_feedback'] = 'Takk for tilbakemeldingen';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Forklar denne siden';
$string['chat:starter_ask_anything'] = 'Spør om hva som helst';
$string['chat:starter_review_practice'] = 'Gjennomgå og øv';
$string['chat:history_saved_subtitle'] = 'Lagrede svar blir værende på denne enheten for dette kurset.';
$string['chat:history_saved_empty'] = 'Lagre et AI-svar for å se det her.';
$string['chat:history_views_label'] = 'Historikkvisninger';
$string['chat:history_view_saved'] = 'Lagrede';
$string['chat:history_view_recent'] = 'Historikk';
$string['chat:debug_refresh'] = 'Oppdater';
$string['chat:debug_copy_all'] = 'Kopier alt';
$string['chat:debug_close'] = 'Lukk';
$string['chat:language_switch'] = 'Bytt språk';
$string['chat:language_dismiss'] = 'Avvis språkforslag';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Velg LLM-leverandør';
$string['chat:llm_model_label'] = 'Modell';
$string['chat:llm_model_select'] = 'Velg LLM-modell';
$string['chat:footer_usertesting'] = 'Brukervennlighetstesting';
$string['chat:footer_feedback'] = 'Tilbakemelding';
$string['chat:voice_panel_title'] = 'Snakk med {$a} (Eksperimentell)';

// Additional translated strings.
$string['chat:debug_context'] = 'Kontekst feilsøking';
$string['chat:debug_context_browser'] = 'Nettleser-snapshot';
$string['chat:debug_context_copy'] = 'Kopier';
$string['chat:debug_context_prompt'] = 'Serversvar';
$string['chat:debug_context_request'] = 'Siste SSE-forespørsel';
$string['chat:debug_context_toggle'] = 'Veksle inspektør';
$string['chat:history_empty'] = 'Ingen samtaler ennå.';
$string['chat:history_refresh'] = 'Oppdater';
$string['chat:history_subtitle'] = 'Dine nylige meldinger.';
$string['chat:starter_explain_prompt'] = 'Forklar det viktigste konseptet?';
$string['chat:starter_help_lesson'] = 'Forklar dette';
$string['chat:starter_help_lesson_prompt'] = 'Hjelp meg forstå leksjonen. Oppsummer nøkkelbegrepene.';
$string['chat:starter_prompt_coach'] = 'AI prompt-trener';
$string['chat:starter_quick_study'] = 'Hurtigstudium';
$string['chat:starter_study_plan_prompt'] = 'Jeg vil planlegge studier. Spør: (1) mål, (2) tid. Oppdater planen.';
$string['chat:voice_copy'] = 'Samtale med læringsassistenten.';
$string['chat:voice_ready'] = 'Klar';
$string['chat:voice_start'] = 'Start';
$string['chat:voice_title'] = 'Snakk med SOLA';
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
$string['mobile_chip_concepts'] = 'Nøkkelbegreper';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Studieplan';
$string['mobile_clear'] = 'Slett historikk';
$string['mobile_disabled'] = 'SOLA er ikke tilgjengelig for dette kurset.';
$string['mobile_placeholder'] = 'Still et spørsmål...';
$string['mobile_welcome'] = 'Hei, {$a}!';
$string['mobile_welcome_sub'] = 'Jeg er SOLA, din læringsassistent. Hvordan kan jeg hjelpe?';
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
$string['rubric:done'] = 'Ferdig';
$string['rubric:encourage_high'] = 'Utmerket! Fortsett!';
$string['rubric:encourage_low'] = 'God start! Regelmessig øvelse hjelper.';
$string['rubric:encourage_mid'] = 'Bra innsats! Fortsett å øve.';
$string['rubric:overall'] = 'Totalt';
$string['rubric:practice_again'] = 'Øv igjen';
$string['rubric:score_title_conversation'] = 'Samtaleøvelsespoeng';
$string['rubric:score_title_pronunciation'] = 'Uttaleøvelsespoeng';
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
$string['demo:intro'] = 'Denne siden oppretter et testkurs som er <strong>skjult for studenter</strong> (visible=0), og fyller det med fiktive studenter, AI-samtaler, vurderinger og tilbakemeldinger. Nyttig for å forhåndsvise Analytics Dashboard eller validere plugin-endringer uten å påvirke noen reelt påmeldte studenter.';
$string['demo:step1'] = 'Trinn 1: testkurs';
$string['demo:step2'] = 'Trinn 2: legg til fiktive studenter og AI-samtaler';
$string['demo:course_exists'] = 'Testkurs finnes: <strong>{$a->fullname}</strong> (kortnavn <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'skjult';
$string['demo:badge_visible'] = 'synlig for studenter';
$string['demo:no_course'] = 'Ingen testkurs funnet. Klikk nedenfor for å opprette ett.';
$string['demo:create_btn'] = 'Opprett skjult testkurs';
$string['demo:open_course'] = 'Åpne kurs &rarr;';
$string['demo:seed_intro'] = 'Oppretter demo_student_001, demo_student_002, ..., melder dem på testkurset og setter inn syntetiske samtaler, meldinger, vurderinger og tilbakemeldinger. Kjør igjen for å legge til mer data, eller kryss av for „tøm først“ for å starte på nytt.';
$string['demo:users_label'] = 'Brukere';
$string['demo:weeks_label'] = 'Uker';
$string['demo:clear_label'] = 'Tøm eksisterende demo_*-brukere først';
$string['demo:seed_btn'] = 'Legg til studenter og samtaler';
$string['demo:view_analytics'] = 'Vis analyser for dette kurset &rarr;';
$string['demo:footer'] = 'Data som opprettes her ligger i standard Moodle-tabellene for bruker / påmelding og i pluginens egne samtaletabeller. Alle fiktive brukere har brukernavn som begynner med <code>demo_student_</code>, slik at de er enkle å filtrere eller fjerne. For å fjerne dem, kjør seed-trinnet på nytt med „Tøm eksisterende demo_*-brukere først“ avkrysset.';
$string['demo:course_fullname'] = 'SOLA Testkurs (skjult)';
$string['demo:notify_created'] = 'Testkurs klar: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Klarte ikke å opprette kurs: {$a}';
$string['demo:notify_seeded'] = 'Lagt til: {$a->users} brukere, {$a->conversations} samtaler, {$a->messages} meldinger, {$a->ratings} vurderinger, {$a->feedback} tilbakemeldinger.';
$string['demo:notify_seed_fail'] = 'Klarte ikke å legge til data: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Tokenkostnader og analyser &rarr;';
$string['toc:testing'] = 'Testmiljø &rarr;';
$string['toc:back_to_course'] = '&larr; Tilbake til {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext-binærfilen ble ikke funnet; PDF-uttrekking er deaktivert.';
$string['rag:pdftotext_available'] = 'pdftotext oppdaget på {$a}.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive-utvidelsen er ikke tilgjengelig; DOCX-uttrekking er deaktivert.';
$string['rag:h5p_unavailable'] = 'H5P-innhold kunne ikke leses; hopper over.';
$string['rag:scorm_too_large'] = 'SCORM-pakken overskrider den konfigurerte størrelsesgrensen ({$a} MB); hopper over.';
$string['rag:scorm_unzip_failed'] = 'SCORM-pakken kunne ikke pakkes ut; hopper over.';
$string['rag:transcript_fetch_failed'] = 'Kunne ikke hente transkripsjon fra {$a}.';
$string['rag:transcript_cf_challenge'] = 'Transkripsjons-URL blokkert av Cloudflare-utfordring: {$a}.';
$string['rag:embed_detected'] = 'Oppdaget innebygd media: {$a}';
$string['rag:embed_transcript_attached'] = 'Transkripsjon vedlagt for {$a}';

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
