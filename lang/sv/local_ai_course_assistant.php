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
 * Language strings for local_ai_course_assistant — Swedish.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI-kursassistent';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Lagrar AI-handledarens konversationer per användare och kurs.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID:t för användaren som äger konversationen.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID:t för kursen som konversationen tillhör.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Konversationens titel.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Tidpunkten då konversationen skapades.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Tidpunkten då konversationen senast ändrades.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Lagrar enskilda meddelanden i AI-handledarens konversationer.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID:t för användaren som skickade meddelandet.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID:t för kursen som meddelandet tillhör.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Meddelandesändarens roll (användare eller assistent).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Meddelandets innehåll.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Antalet tokens som användes för meddelandet.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Tidpunkten då meddelandet skapades.';
$string['ai_course_assistant:use'] = 'Använda AI-handledarens chatt';
$string['ai_course_assistant:viewanalytics'] = 'Visa AI-handledarens chattanalys';
$string['ai_course_assistant:manage'] = 'Hantera AI-handledarens chattinställningar (administratörsroll)';
$string['settings:enabled'] = 'Aktivera AI-kursassistenten';
$string['settings:enabled_desc'] = 'Aktivera eller inaktivera AI-kursassistentens widget på kurssidor.';
$string['settings:provider'] = 'AI-leverantör';
$string['settings:provider_desc'] = 'Välj AI-leverantör för chattfullbordningar.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (lokal)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Anpassad (OpenAI-kompatibel)';
$string['settings:apikey'] = 'API-nyckel';
$string['settings:apikey_desc'] = 'API-nyckel för den valda leverantören. Krävs inte för Ollama.';
$string['settings:model'] = 'Modellnamn';
$string['settings:model_desc'] = 'Modellen som ska användas. Standardvärdet beror på leverantören (t.ex. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API-bas-URL';
$string['settings:apibaseurl_desc'] = 'API-bas-URL. Fylls i automatiskt baserat på leverantör men kan åsidosättas. Lämna tomt för att använda leverantörens standardvärde.';
$string['settings:systemprompt'] = 'Systempromptmall';
$string['settings:systemprompt_desc'] = 'Systemprompten som skickas till AI:n. Använd platshållarna {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Du är en hjälpsam AI-handledare för kursen "{{coursename}}". Studentens roll är {{userrole}}.

Ämnen som behandlas i kursen:
{{coursetopics}}

Hjälp studenten att förstå kursinnehållet. Var uppmuntrande, tydlig och pedagogiskt noggrann.';
$string['settings:temperature'] = 'Temperatur';
$string['settings:temperature_desc'] = 'Styr slumpmässighet. Låga värden är mer fokuserade, höga värden mer kreativa. Intervall: 0,0 till 2,0.';
$string['settings:maxhistory'] = 'Maximal konversationshistorik';
$string['settings:maxhistory_desc'] = 'Maximalt antal meddelandepar som inkluderas i API-förfrågningar. Äldre meddelanden tas bort.';
$string['settings:avatar'] = 'Chattavatar';
$string['settings:avatar_desc'] = 'Välj avatarikon för chattwidgetknappen.';
$string['settings:avatar_saylor'] = 'Saylor Academy-logotyp (standard)';
$string['settings:position'] = 'Widgetposition';
$string['settings:position_desc'] = 'Chattwidgetens position på sidan.';
$string['settings:position_br'] = 'Nedre högra';
$string['settings:position_bl'] = 'Nedre vänstra';
$string['settings:position_tr'] = 'Övre högra';
$string['settings:position_tl'] = 'Övre vänstra';
$string['chat:settings'] = 'Plugininställningar';
$string['analytics:viewdashboard'] = 'Visa analyspanel';
$string['coursesettings:title'] = 'Kurs-AI-inställningar';
$string['coursesettings:enabled'] = 'Aktivera kursåsidosättningar';
$string['coursesettings:enabled_desc'] = 'När aktiverat åsidosätter inställningarna nedan den globala AI-leverantörskonfigurationen enbart för denna kurs. Lämna fält tomma för att ärva globala värden.';
$string['coursesettings:using_global'] = 'Använder global inställning';
$string['coursesettings:saved'] = 'Kursens AI-inställningar har sparats.';
$string['coursesettings:global_settings_link'] = 'Globala AI-inställningar';
$string['lang:switch'] = 'Ja, byt';
$string['lang:dismiss'] = 'Nej tack';
$string['lang:change'] = 'Byt språk';
$string['lang:english'] = 'Engelska';
$string['chat:title'] = 'AI-handledare';
$string['chat:placeholder'] = 'Ställ en fråga...';
$string['chat:send'] = 'Skicka';
$string['chat:close'] = 'Stäng chatten';
$string['chat:open'] = 'Öppna AI-handledarens chatt';
$string['chat:clear'] = 'Rensa historik';
$string['chat:clear_confirm'] = 'Är du säker på att du vill rensa chatthistoriken för den här kursen?';
$string['chat:copy'] = 'Kopiera konversation';
$string['chat:copied'] = 'Konversationen har kopierats till urklipp';
$string['chat:copy_failed'] = 'Det gick inte att kopiera konversationen';
$string['chat:greeting'] = 'Hej! Jag är din AI-handledare för den här kursen. Hur kan jag hjälpa dig idag?';
$string['chat:thinking'] = 'Tänker...';
$string['chat:error'] = 'Tyvärr uppstod ett fel. Försök igen.';
$string['chat:error_auth'] = 'Autentiseringsfel. Kontakta din administratör.';
$string['chat:error_ratelimit'] = 'För många förfrågningar. Vänta en stund och försök igen.';
$string['chat:error_unavailable'] = 'AI-tjänsten är tillfälligt otillgänglig. Försök igen senare.';
$string['chat:error_notconfigured'] = 'AI-handledaren har inte konfigurerats ännu. Kontakta din administratör.';
$string['chat:expand'] = 'Expandera chatten';
$string['chat:collapse'] = 'Minimera chatten';
$string['chat:mic'] = 'Ställ din fråga med rösten';
$string['chat:mic_error'] = 'Mikrofonfel. Kontrollera webbläsarens behörigheter.';
$string['chat:mic_unsupported'] = 'Röstinmatning stöds inte i den här webbläsaren.';
$string['chat:newline_hint'] = 'Shift+Enter för nytt stycke';
$string['chat:you'] = 'Du';
$string['chat:assistant'] = 'AI-handledare';
$string['chat:history_loaded'] = 'Tidigare konversation har laddats.';
$string['chat:history_cleared'] = 'Chatthistoriken har rensats.';
$string['chat:offtopic_warning'] = 'Det verkar som att din fråga inte är relaterad till den här kursen. Försök hålla dig till ämnet så att jag kan hjälpa dig på bästa sätt!';
$string['chat:offtopic_ended'] = 'Din åtkomst till AI-handledaren har tillfälligt pausats i {$a} minuter eftersom konversationen har gått för långt från ämnet. Använd den här tiden till att gå igenom kursmaterialet. Du kan försöka igen senare.';
$string['chat:offtopic_locked'] = 'Din åtkomst till AI-handledaren är tillfälligt pausad. Du kan försöka igen om {$a} minuter. Fokusera på kursrelaterade frågor när du kommer tillbaka.';
$string['chat:escalated_to_support'] = 'Jag kunde inte svara fullständigt på din fråga, så jag har skapat ett supportärende åt dig. En medlem i supportteamet kommer att kontakta dig. Ditt ärendenummer är: {$a}';
$string['chat:studyplan_intro'] = 'Jag kan hjälpa dig att skapa en studieplan för den här kursen! Berätta för mig hur många timmar i veckan du kan ägna åt studier, så hjälper jag dig att bygga en strukturerad plan.';
$string['settings:faq_heading'] = 'FAQ och support';
$string['settings:faq_heading_desc'] = 'Konfigurera centraliserad FAQ och integration med Zendesk-supportärenden.';
$string['settings:faq_content'] = 'FAQ-innehåll';
$string['settings:faq_content_desc'] = 'Ange FAQ-poster (en per rad i formatet: Q: fråga | A: svar). Dessa tillhandahålls till AI:n för att besvara vanliga supportfrågor.';
$string['settings:zendesk_enabled'] = 'Aktivera Zendesk-eskalering';
$string['settings:zendesk_enabled_desc'] = 'När AI:n inte kan lösa en supportfråga skapas automatiskt ett Zendesk-ärende med en konversationssammanfattning.';
$string['settings:zendesk_subdomain'] = 'Zendesk-underdomän';
$string['settings:zendesk_subdomain_desc'] = 'Din Zendesk-underdomän (t.ex. "mittforetag" för mittforetag.zendesk.com).';
$string['settings:zendesk_email'] = 'Zendesk API-e-post';
$string['settings:zendesk_email_desc'] = 'Zendesk-användarens e-postadress för API-autentisering (med /token-suffix).';
$string['settings:zendesk_token'] = 'Zendesk API-token';
$string['settings:zendesk_token_desc'] = 'API-token för Zendesk-autentisering.';
$string['settings:offtopic_heading'] = 'Detektering av ämnesavvikelser';
$string['settings:offtopic_heading_desc'] = 'Konfigurera hur chatten hanterar konversationer utanför ämnet.';
$string['settings:offtopic_enabled'] = 'Aktivera detektering av ämnesavvikelser';
$string['settings:offtopic_enabled_desc'] = 'Låt AI:n upptäcka och omdirigera konversationer utanför ämnet.';
$string['settings:offtopic_max'] = 'Maximalt antal meddelanden utanför ämnet';
$string['settings:offtopic_max_desc'] = 'Antal meddelanden i rad utanför ämnet innan åtgärd vidtas.';
$string['settings:offtopic_action'] = 'Åtgärd vid ämnesavvikelse';
$string['settings:offtopic_action_desc'] = 'Vad som händer när gränsen för ämnesavvikelser nås.';
$string['settings:offtopic_action_warn'] = 'Varna och omdirigera';
$string['settings:offtopic_action_end'] = 'Tillfälligt lås åtkomst';
$string['settings:offtopic_lockout_duration'] = 'Utlåsningsperiod (minuter)';
$string['settings:offtopic_lockout_duration_desc'] = 'Tid (i minuter) som en student förlorar åtkomst till AI-handledaren efter att ha överskridit gränsen för ämnesavvikelser. Standard: 30 minuter.';
$string['settings:studyplan_heading'] = 'Studieplanering och påminnelser';
$string['settings:studyplan_heading_desc'] = 'Konfigurera studieplansfunktioner och påminnelseaviseringar.';
$string['settings:studyplan_enabled'] = 'Aktivera studieplanering';
$string['settings:studyplan_enabled_desc'] = 'Låt AI-handledaren hjälpa studenter att skapa personliga studieplaner baserat på tillgänglig tid.';
$string['settings:reminders_email_enabled'] = 'Aktivera e-postpåminnelser';
$string['settings:reminders_email_enabled_desc'] = 'Låt studenter prenumerera på studiepåminnelser via e-post.';
$string['settings:reminders_whatsapp_enabled'] = 'Aktivera WhatsApp-påminnelser';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Låt studenter prenumerera på studiepåminnelser via WhatsApp (kräver WhatsApp API-konfiguration).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API-URL';
$string['settings:whatsapp_api_url_desc'] = 'API-ändpunkt för att skicka WhatsApp-meddelanden (t.ex. Twilio, MessageBird). Måste acceptera POST med JSON-body som innehåller fälten "to", "from" och "body".';
$string['settings:whatsapp_api_token'] = 'WhatsApp API-token';
$string['settings:whatsapp_api_token_desc'] = 'Autentiseringstoken för WhatsApp API.';
$string['settings:whatsapp_from_number'] = 'WhatsApp-avsändarnummer';
$string['settings:whatsapp_from_number_desc'] = 'Telefonnumret som WhatsApp-meddelanden skickas från (med landskod, t.ex. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp-blockerade länder';
$string['settings:whatsapp_blocked_countries_desc'] = 'Kommaseparerade ISO 3166-1 alpha-2 landskoder där WhatsApp-påminnelser inte är tillåtna på grund av lokala bestämmelser (t.ex. "CN,IR,KP").';
$string['reminder:email_subject'] = 'Studiepåminnelse: {$a}';
$string['reminder:email_body'] = 'Hej {$a->firstname},

Här är din studiepåminnelse för "{$a->coursename}".

{$a->message}

Din studieplan föreslår {$a->hours_per_week} timmar per vecka för den här kursen.

Fortsätt det goda arbetet!

---
För att sluta få dessa påminnelser, klicka här: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Studiepåminnelse för {$a->coursename}: {$a->message} (Avprenumerera: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Dagens studiemål: ';
$string['unsubscribe:title'] = 'Avprenumerera studiepåminnelser';
$string['unsubscribe:success'] = 'Du har avprenumererats från studiepåminnelser för den här kursen.';
$string['unsubscribe:already'] = 'Du har redan avprenumererats från dessa påminnelser.';
$string['unsubscribe:invalid'] = 'Ogiltig eller utgången avprenumerationslänk.';
$string['unsubscribe:resubscribe'] = 'Ångrat dig? Du kan återaktivera påminnelser via AI-handledarens chatt.';
$string['task:send_reminders'] = 'Skicka AI-handledarens studiepåminnelser';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Lagrar studenternas studieplaner.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID:t för användaren som äger studieplanen.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kursen som studieplanen tillhör.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Timmar per vecka som studenten planerar att studera.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Studieplanens detaljer i JSON-format.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Lagrar studiepåminnelseinställningar och prenumerationer.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID:t för användaren som prenumererar på påminnelser.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Påminnelsekanalen (e-post eller WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'E-postadressen eller telefonnumret för påminnelser.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Användarens landskod för regelefterlevnad.';
$string['analytics:title'] = 'AI-handledarens analys';
$string['analytics:overview'] = 'Översikt';
$string['analytics:total_conversations'] = 'Totalt antal konversationer';
$string['analytics:total_messages'] = 'Totalt antal meddelanden';
$string['analytics:active_students'] = 'Aktiva studenter';
$string['analytics:avg_messages_per_student'] = 'Sn. meddelanden per student';
$string['analytics:offtopic_rate'] = 'Ämnesavvikelsefrekvens';
$string['analytics:escalation_count'] = 'Eskalerade till support';
$string['analytics:studyplan_adoption'] = 'Studenter med studieplaner';
$string['analytics:usage_trends'] = 'Användningstrender';
$string['analytics:daily_messages'] = 'Daglig meddelandevolym';
$string['analytics:hotspots'] = 'Kursens hotspots';
$string['analytics:hotspots_desc'] = 'Kursavsnitt som oftast refereras i studentfrågor. Höga siffror kan indikera områden där studenter behöver mer stöd.';
$string['analytics:section'] = 'Avsnitt';
$string['analytics:mention_count'] = 'Omnämnanden';
$string['analytics:common_prompts'] = 'Vanliga frågemönster';
$string['analytics:common_prompts_desc'] = 'Återkommande frågemönster från studenter. Granska dessa för att identifiera systematiska luckor i kursinnehållet.';
$string['analytics:prompt_pattern'] = 'Mönster';
$string['analytics:frequency'] = 'Frekvens';
$string['analytics:recent_activity'] = 'Senaste aktivitet';
$string['analytics:no_data'] = 'Inga analysdata tillgängliga ännu. Data visas när studenter börjar använda AI-handledaren.';
$string['analytics:timerange'] = 'Tidsperiod';
$string['analytics:last_7_days'] = 'Senaste 7 dagarna';
$string['analytics:last_30_days'] = 'Senaste 30 dagarna';
$string['analytics:all_time'] = 'Hela perioden';
$string['analytics:export'] = 'Exportera data';
$string['analytics:provider_comparison'] = 'AI-leverantörsjämförelse';
$string['analytics:provider_comparison_desc'] = 'Jämför prestanda för AI-leverantörer som används i den här kursen.';
$string['analytics:provider'] = 'Leverantör';
$string['analytics:response_count'] = 'Svar';
$string['analytics:avg_response_length'] = 'Sn. svarslängd';
$string['analytics:total_tokens'] = 'Totalt antal tokens';
$string['analytics:avg_tokens'] = 'Sn. tokens / svar';
$string['usersettings:title'] = 'AI-kursassistent: Dina data';
$string['usersettings:intro'] = 'Hantera dina AI-handledarens chattdata och sekretessinställningar';
$string['usersettings:privacy_info'] = 'Dina konversationer med AI-handledaren lagras för att ge dig löpande stöd genom kursen. Du har full kontroll över dessa data och kan radera dem när som helst.';
$string['usersettings:usage_stats'] = 'Din användningsstatistik';
$string['usersettings:total_messages'] = 'Totalt antal meddelanden';
$string['usersettings:total_conversations'] = 'Konversationer';
$string['usersettings:messages'] = 'Meddelanden';
$string['usersettings:last_activity'] = 'Senaste aktivitet';
$string['usersettings:delete_course_data'] = 'Radera kursdata';
$string['usersettings:no_data'] = 'Du har inte använt AI-handledaren än. Dina användningsdata visas här när du börjar chatta.';
$string['usersettings:delete_all_title'] = 'Radera alla dina data';
$string['usersettings:delete_all_warning'] = 'Denna åtgärd raderar permanent alla dina konversationer med AI-handledaren i alla kurser. Denna åtgärd kan inte ångras.';
$string['usersettings:delete_all_button'] = 'Radera alla mina data';
$string['usersettings:confirm_delete_course'] = 'Är du säker på att du vill permanent radera alla AI-handledardata för kursen "{$a}"? Denna åtgärd kan inte ångras.';
$string['usersettings:confirm_delete_all'] = 'Är du säker på att du vill permanent radera ALLA AI-handledardata i alla kurser? Denna åtgärd kan inte ångras.';
$string['usersettings:data_deleted'] = 'Dina data har raderats.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Hej, {$a}! Jag är SOLA, din Saylor-onlinestudieassistent.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Öppna SOLA';
$string['chat:change_avatar'] = 'Byt avatar';

// Quiz UI.
$string['chat:quiz'] = 'Ta ett övningsquiz';
$string['chat:quiz_setup_title'] = 'Övningsquiz';
$string['chat:quiz_questions'] = 'Antal frågor';
$string['chat:quiz_topic'] = 'Ämne';
$string['chat:quiz_topic_guided'] = 'AI-guidat (baserat på dina framsteg)';
$string['chat:quiz_topic_default'] = 'Aktuellt kursinnehåll';
$string['chat:quiz_topic_custom'] = 'Anpassat ämne…';
$string['chat:quiz_custom_placeholder'] = 'Ange ett ämne eller en fråga...';
$string['chat:quiz_start'] = 'Starta quiz';
$string['chat:quiz_cancel'] = 'Avbryt';
$string['chat:quiz_loading'] = 'Genererar quiz…';
$string['chat:quiz_error'] = 'Det gick inte att generera quizet. Försök igen.';
$string['chat:quiz_correct'] = 'Rätt!';
$string['chat:quiz_wrong'] = 'Fel.';
$string['chat:quiz_next'] = 'Nästa fråga';
$string['chat:quiz_finish'] = 'Visa resultat';
$string['chat:quiz_score'] = 'Quiz slutfört! Du fick {$a->score} av {$a->total}.';
$string['chat:quiz_summary'] = 'Jag avslutade ett övningsquiz med {$a->total} frågor om "{$a->topic}" och fick {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Lärandemål';
$string['chat:quiz_topic_modules'] = 'Kursämne';
$string['chat:quiz_subtopic_select'] = 'Välj ett specifikt objekt…';
$string['chat:quiz_topic_sections'] = 'Kursavsnitt';
$string['chat:quiz_score_great'] = 'Utmärkt arbete! Du behärskar verkligen det här materialet.';
$string['chat:quiz_score_good'] = 'Bra jobbat! Fortsätt repetera för att stärka din förståelse.';
$string['chat:quiz_score_practice'] = 'Fortsätt öva. Försök gå igenom det relevanta kursinnehållet och ta quizet igen.';
$string['chat:quiz_review_heading'] = 'Genomgång';
$string['chat:quiz_retake'] = 'Ta quizet igen';
$string['chat:quiz_exit'] = 'Avsluta quiz';
$string['chat:quiz_your_answer'] = 'Ditt svar';
$string['chat:quiz_correct_answer'] = 'Rätt svar';

// Conversation starters.
$string['chat:starters_label'] = 'Konversationsstartare';
$string['chat:starter_quiz'] = 'Testa mig';
$string['chat:starter_explain'] = 'Förklara detta';
$string['chat:starter_key_concepts'] = 'Nyckelbegrepp';
$string['chat:starter_study_plan'] = 'Studieplan';
$string['chat:starter_help_me'] = 'AI-hjälp';
$string['chat:starter_ell_practice'] = 'Öva tal';
$string['chat:starter_ell_pronunciation'] = 'ELL-uttal';
$string['chat:starter_ai_coach'] = 'AI-coach';
$string['chat:starter_speak'] = 'Säg en startare';

// Reset / home.
$string['chat:reset'] = 'Börja om';

// Topic picker.
$string['chat:topic_picker_title'] = 'Vad vill du fokusera på?';
$string['chat:topic_picker_title_help'] = 'Vad behöver du hjälp med?';
$string['chat:topic_picker_title_explain'] = 'Vad vill du att jag förklarar?';
$string['chat:topic_picker_title_study'] = 'Vilket område vill du fokusera på?';
$string['chat:topic_start'] = 'Fortsätt';

// Expand states.
$string['chat:fullscreen'] = 'Helskärm';
$string['chat:exitfullscreen'] = 'Avsluta helskärm';

// Settings panel.
$string['chat:language'] = 'Byt språk';
$string['chat:settings_panel'] = 'Inställningar';
$string['chat:settings_language'] = 'Språk';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Röst';
$string['chat:settings_voice_admin'] = 'Röstinställningar hanteras i webbplatsens administrationspanel.';

// Voice mode.
$string['chat:voice_mode'] = 'Röstläge';
$string['chat:voice_end'] = 'Avsluta röstsession';
$string['chat:voice_connecting'] = 'Ansluter...';
$string['chat:voice_listening'] = 'Lyssnar...';
$string['chat:voice_speaking'] = 'SOLA talar...';
$string['chat:voice_idle'] = 'Redo';
$string['chat:voice_error'] = 'Röstanslutningen misslyckades. Kontrollera dina inställningar.';
$string['chat:quiz_locked'] = 'SOLA är pausad under quiz för att bevara akademisk integritet. Lycka till!';
$string['task:send_inactivity_reminders'] = 'Skicka veckovisa påminnelser om inaktivitet via e-post';
$string['messageprovider:study_notes'] = 'Studiesessionsanteckningar';
