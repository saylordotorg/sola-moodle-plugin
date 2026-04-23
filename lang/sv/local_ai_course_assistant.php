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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Standard för nya kurser';
$string['settings:default_course_mode_desc'] = 'Styr om SOLA visas på en kurs när inget kursspecifikt val har gjorts. Nya installationer har som standard "Inaktiverad som standard" så att administratörer kan aktivera kurs för kurs från Analytics-sidan eller Course AI Settings-sidan.';
$string['settings:default_course_mode_per_course'] = 'Inaktiverad som standard (aktivera per kurs)';
$string['settings:default_course_mode_all'] = 'Aktiverad på alla kurser';
$string['settings:auto_open'] = 'Öppna automatiskt vid första besöket';
$string['settings:auto_open_desc'] = 'När aktiverad öppnas SOLA-lådan automatiskt första gången en student besöker varje kurs. Efterföljande sidladdningar i samma kurs öppnar inte lådan igen — tillståndet spåras per kurs i studentens webbläsare via localStorage. Gäller på dator och mobil. Kan åsidosättas per kurs från sidan Course AI Settings.';
$string['settings:comparison_providers'] = 'Jämförelseleverantörer (LLM-väljare)';
$string['settings:comparison_providers_desc'] = 'Lägg till extra AI-leverantörer i den inbyggda LLM-väljaren så att administratörer kan jämföra svar mellan leverantörer. Använd tabellen nedan för att lägga till rader. Temperaturkolumnen är valfri (lämna tom för att använda den globala temperaturen). Lagrat format: provider_id|api_key|model1,model2|temperature. Den primära leverantören som konfigurerats ovan inkluderas alltid automatiskt. Bara administratörer med hanteringsbehörighet ser väljaren; studenter ser den aldrig. Giltiga provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Standard AI-leverantör';
$string['settings:provider_desc'] = 'Välj AI-leverantören som ska användas för chattfullbordanden. Välj "Moodle AI (core_ai subsystem)" för att dirigera förfrågningar genom Moodles inbyggda AI-konfiguration på Site admin > AI; API-nyckel-, modell- och bas-URL-fälten nedan ignoreras i det läget. Streaming, verktygsanvändning och prompt caching är inte tillgängliga via core_ai — svar levereras som en enda bit. Använd en direkt leverantör för bästa studentupplevelse.';
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
$string['settings:avatar_saylor'] = '{$a}-logotyp (standard)';
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
$string['coursesettings:sola_enabled'] = 'SOLA på denna kurs';
$string['coursesettings:sola_enabled_toggle'] = 'Visa SOLA-widgeten på denna kurs';
$string['coursesettings:sola_enabled_desc'] = 'Styr om SOLA-chattwidgeten visas på denna kurs. Standardvärdet för hela webbplatsen anges i plugininställningarna under General > Default for new courses.';
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
$string['chat:clear'] = 'Rensa skärmen';
$string['chat:clear_confirm'] = 'Rensa synliga meddelanden? Hela din chatthistorik förblir sparad och kan laddas om genom att öppna widgeten igen.';
$string['chat:copy'] = 'Kopiera konversation';
$string['chat:copied'] = 'Konversationen har kopierats till urklipp';
$string['chat:copy_failed'] = 'Det gick inte att kopiera konversationen';
$string['chat:thinking'] = 'Tänker...';
$string['chat:error'] = 'Tyvärr uppstod ett fel. Försök igen.';
$string['chat:error_auth'] = 'Autentiseringsfel. Kontakta din administratör.';
$string['chat:error_ratelimit'] = 'För många förfrågningar. Vänta en stund och försök igen.';
$string['chat:error_unavailable'] = 'AI-tjänsten är tillfälligt otillgänglig. Försök igen senare.';
$string['chat:error_notconfigured'] = 'AI-handledaren har inte konfigurerats ännu. Kontakta din administratör.';
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
$string['chat:greeting'] = 'Hej, {$a}! Jag är SOLA. Hur kan jag hjälpa dig idag?';
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
$string['chat:starter_quiz'] = 'Testa mig på detta';
$string['chat:starter_explain'] = 'Förklara detta';
$string['chat:starter_key_concepts'] = 'Nyckelbegrepp';
$string['chat:starter_study_plan'] = 'Studieplan';
$string['chat:starter_help_me'] = 'AI-hjälp';
$string['chat:starter_ai_project_coach'] = 'AI-projektcoach';
$string['chat:starter_ell_practice'] = 'Konversationsövning';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Anteckningar';

// History panel.
$string['chat:history_title'] = 'Anteckningar och konversationshistorik';
$string['task:send_inactivity_reminders'] = 'Skicka veckovisa påminnelser om inaktivitet via e-post';
$string['task:run_meta_ai_query'] = 'Kör schemalagd Lärande-radar-analysfråga';
$string['messageprovider:study_notes'] = 'Studiesessionsanteckningar';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Frontend-leverans';
$string['settings:cdn_heading_desc'] = 'Servera SOLA frontend-resurser (JS/CSS) från en extern CDN istället för Moodles filsystem. Detta möjliggör frontend-uppdateringar utan plugin-uppgradering. Lämna CDN-URL tom för att använda lokala plugin-filer.';
$string['settings:cdn_url'] = 'CDN-bas-URL';
$string['settings:cdn_url_desc'] = 'Bas-URL där sola.min.js och sola.min.css är värd. Exempel: https://your-org.github.io/sola-cdn. Lämna tomt för att använda lokala plugin-filer.';
$string['settings:cdn_version'] = 'CDN-resursversion';
$string['settings:cdn_version_desc'] = 'Versionssträng som läggs till CDN-URLer för cache busting. Uppdatera efter varje CDN-distribution (t.ex. 3.2.4 eller ett commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Total användning';
$string['analytics:tab_bycourse'] = 'Per kurs';
$string['analytics:tab_comparison'] = 'AI vs icke-användare';
$string['analytics:tab_byunit'] = 'Per enhet';
$string['analytics:tab_usagetypes'] = 'Användningstyper';
$string['analytics:tab_themes'] = 'Teman';
$string['analytics:tab_feedback'] = 'AI-feedback';
$string['analytics:total_students'] = 'Totalt antal studenter';
$string['analytics:active_users'] = 'Aktiva AI-användare';
$string['analytics:msgs_per_student'] = 'Meddelanden per student';
$string['analytics:avg_session'] = 'Genomsnittlig sessionslängd';
$string['analytics:return_rate'] = 'Återkomstfrekvens';
$string['analytics:total_sessions'] = 'Totalt antal sessioner';
$string['analytics:thumbs_up'] = 'Tumme upp';
$string['analytics:thumbs_down'] = 'Tumme ner';
$string['analytics:hallucination_flags'] = 'Markeringar för felaktigheter';
$string['analytics:msgs_to_resolution'] = 'Meddelanden till lösning';
$string['analytics:helpful'] = 'Användbar';
$string['analytics:not_helpful'] = 'Inte användbar';
$string['analytics:flag_hallucination'] = 'Detta svar innehåller felaktig information';
$string['analytics:submit_rating'] = 'Skicka';
$string['analytics:thanks_feedback'] = 'Tack för din feedback';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Förklara denna sida';
$string['chat:starter_ask_anything'] = 'Fråga vad du vill';
$string['chat:starter_review_practice'] = 'Repetera och öva';
$string['chat:history_saved_subtitle'] = 'Sparade svar stannar på den här enheten för den här kursen.';
$string['chat:history_saved_empty'] = 'Spara ett AI-svar för att se det här.';
$string['chat:history_views_label'] = 'Historikvyer';
$string['chat:history_view_saved'] = 'Sparade';
$string['chat:history_view_recent'] = 'Historik';
$string['chat:debug_refresh'] = 'Uppdatera';
$string['chat:debug_copy_all'] = 'Kopiera alla';
$string['chat:debug_close'] = 'Stäng';
$string['chat:language_switch'] = 'Byt språk';
$string['chat:language_dismiss'] = 'Avfärda språkförslag';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Välj LLM-leverantör';
$string['chat:llm_model_label'] = 'Modell';
$string['chat:llm_model_select'] = 'Välj LLM-modell';
$string['chat:footer_usertesting'] = 'Användbarhetstestning';
$string['chat:footer_feedback'] = 'Feedback';
$string['chat:voice_panel_title'] = 'Prata med {$a} (Experimentell)';

// Additional translated strings.
$string['chat:debug_context'] = 'Kontextfelsökning';
$string['chat:debug_context_browser'] = 'Webbläsarögonblicksbild';
$string['chat:debug_context_copy'] = 'Kopiera';
$string['chat:debug_context_prompt'] = 'Serversvar';
$string['chat:debug_context_request'] = 'Senaste SSE-förfrågan';
$string['chat:debug_context_toggle'] = 'Växla inspektör';
$string['chat:history_empty'] = 'Inga konversationer.';
$string['chat:history_refresh'] = 'Uppdatera';
$string['chat:history_subtitle'] = 'Dina senaste meddelanden.';
$string['chat:starter_explain_prompt'] = 'Förklara det viktigaste konceptet?';
$string['chat:starter_help_lesson'] = 'Förklara detta';
$string['chat:starter_help_lesson_prompt'] = 'Hjälp mig förstå lektionen. Sammanfatta nyckelbegreppen.';
$string['chat:starter_prompt_coach'] = 'AI-promptcoach';
$string['chat:starter_quick_study'] = 'Snabbstudier';
$string['chat:starter_study_plan_prompt'] = 'Jag vill planera studier. Fråga: (1) mål, (2) tid. Uppdatera planen.';
$string['chat:voice_copy'] = 'Röstkonversation med din assistent.';
$string['chat:voice_ready'] = 'Redo';
$string['chat:voice_start'] = 'Starta';
$string['chat:voice_title'] = 'Prata med SOLA';
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
$string['mobile_chip_concepts'] = 'Nyckelbegrepp';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Studieplan';
$string['mobile_clear'] = 'Rensa historik';
$string['mobile_disabled'] = 'SOLA är inte tillgänglig för denna kurs.';
$string['mobile_placeholder'] = 'Ställ en fråga...';
$string['mobile_welcome'] = 'Hej, {$a}!';
$string['mobile_welcome_sub'] = 'Jag är SOLA, din inlärningsassistent. Hur kan jag hjälpa?';
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
$string['rubric:done'] = 'Klar';
$string['rubric:encourage_high'] = 'Utmärkt! Fortsätt så!';
$string['rubric:encourage_low'] = 'Bra start! Regelbunden övning hjälper.';
$string['rubric:encourage_mid'] = 'Bra insats! Fortsätt öva.';
$string['rubric:overall'] = 'Totalt';
$string['rubric:practice_again'] = 'Öva igen';
$string['rubric:score_title_conversation'] = 'Konversationsövningspoäng';
$string['rubric:score_title_pronunciation'] = 'Uttalsövningspoäng';
$string['rubric:scoring'] = 'Utvärderar...';
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
$string['demo:title'] = 'Testmiljö';
$string['demo:heading'] = 'Testmiljö';
$string['demo:intro'] = 'Den här sidan skapar en testkurs som är <strong>dold för studenter</strong> (visible=0) och fyller den med fiktiva studenter, AI-konversationer, betyg och feedback. Användbar för att förhandsgranska Analytics Dashboard eller validera plugin-ändringar utan att påverka några verkligt registrerade studenter.';
$string['demo:step1'] = 'Steg 1: testkurs';
$string['demo:step2'] = 'Steg 2: lägg till fiktiva studenter och AI-chattar';
$string['demo:course_exists'] = 'Testkurs finns: <strong>{$a->fullname}</strong> (kortnamn <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'dold';
$string['demo:badge_visible'] = 'synlig för studenter';
$string['demo:no_course'] = 'Ingen testkurs hittades. Klicka nedan för att skapa en.';
$string['demo:create_btn'] = 'Skapa dold testkurs';
$string['demo:open_course'] = 'Öppna kurs &rarr;';
$string['demo:seed_intro'] = 'Skapar demo_student_001, demo_student_002, ..., registrerar dem i testkursen och lägger till syntetiska konversationer, meddelanden, betyg och feedback. Kör igen för att lägga till mer data, eller kryssa i „rensa först“ för att börja om.';
$string['demo:users_label'] = 'Användare';
$string['demo:weeks_label'] = 'Veckor';
$string['demo:clear_label'] = 'Rensa befintliga demo_*-användare först';
$string['demo:seed_btn'] = 'Lägg till studenter och chattar';
$string['demo:view_analytics'] = 'Visa analyser för den här kursen &rarr;';
$string['demo:footer'] = 'Data som skapas här finns i Moodles standardtabeller för användare / registreringar och i pluginets egna konversationstabeller. Alla fiktiva användare har användarnamn som börjar med <code>demo_student_</code> så att de är enkla att filtrera eller ta bort. För att ta bort dem, kör seed-steget igen med „Rensa befintliga demo_*-användare först“ ikryssad.';
$string['demo:course_fullname'] = 'SOLA testkurs (dold)';
$string['demo:notify_created'] = 'Testkurs klar: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Misslyckades att skapa kurs: {$a}';
$string['demo:notify_seeded'] = 'Tillagt: {$a->users} användare, {$a->conversations} konversationer, {$a->messages} meddelanden, {$a->ratings} betyg, {$a->feedback} feedback-poster.';
$string['demo:notify_seed_fail'] = 'Misslyckades att lägga till data: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Tokenkostnad & analyser &rarr;';
$string['toc:testing'] = 'Testmiljö &rarr;';
$string['toc:back_to_course'] = '&larr; Tillbaka till {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext-binären hittades inte; PDF-extraktion avaktiverad.';
$string['rag:pdftotext_available'] = 'pdftotext upptäckt vid {$a}.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive-tillägget är inte tillgängligt; DOCX-extraktion avaktiverad.';
$string['rag:h5p_unavailable'] = 'H5P-innehåll kunde inte läsas; hoppar över.';
$string['rag:scorm_too_large'] = 'SCORM-paketet överskrider den konfigurerade storleksgränsen ({$a} MB); hoppar över.';
$string['rag:scorm_unzip_failed'] = 'SCORM-paketet kunde inte packas upp; hoppar över.';
$string['rag:transcript_fetch_failed'] = 'Kunde inte hämta transkription från {$a}.';
$string['rag:transcript_cf_challenge'] = 'Transkriptions-URL blockerad av Cloudflare-utmaning: {$a}.';
$string['rag:embed_detected'] = 'Inbäddad media upptäckt: {$a}';
$string['rag:embed_transcript_attached'] = 'Transkription bifogad för {$a}';

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
