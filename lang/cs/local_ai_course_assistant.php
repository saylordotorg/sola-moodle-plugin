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
 * Language strings for local_ai_course_assistant — Czech.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI asistent kurzu';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Ukládá konverzace s AI tutorem podle uživatele a kurzu.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Identifikátor uživatele, kterému konverzace patří.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Identifikátor kurzu, ke kterému konverzace patří.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Název konverzace.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Čas vytvoření konverzace.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Čas poslední úpravy konverzace.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Ukládá jednotlivé zprávy z konverzací s AI tutorem.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Identifikátor uživatele, který zprávu odeslal.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Identifikátor kurzu, ke kterému zpráva patří.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Role odesílatele zprávy (uživatel nebo asistent).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Obsah zprávy.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Počet tokenů použitých pro zprávu.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Čas vytvoření zprávy.';
$string['ai_course_assistant:use'] = 'Používat chat s AI tutorem';
$string['ai_course_assistant:viewanalytics'] = 'Zobrazit analýzy chatu s AI tutorem';
$string['ai_course_assistant:manage'] = 'Spravovat nastavení chatu s AI tutorem (role Administrátor)';
$string['settings:enabled'] = 'Povolit AI asistenta kurzu';
$string['settings:enabled_desc'] = 'Povolit nebo zakázat widget AI asistenta kurzu na stránkách kurzů.';
$string['settings:provider'] = 'Poskytovatel AI';
$string['settings:provider_desc'] = 'Vyberte poskytovatele AI, který se má použít pro dokončování chatu.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Lokální)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Vlastní (kompatibilní s OpenAI)';
$string['settings:apikey'] = 'API klíč';
$string['settings:apikey_desc'] = 'API klíč pro vybraného poskytovatele. Není vyžadován pro Ollama.';
$string['settings:model'] = 'Název modelu';
$string['settings:model_desc'] = 'Model, který se má použít. Výchozí hodnota závisí na poskytovateli (např. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'Základní URL API';
$string['settings:apibaseurl_desc'] = 'Základní URL API. Vyplní se automaticky podle poskytovatele, ale lze jej přepsat. Ponechte prázdné pro použití výchozí hodnoty poskytovatele.';
$string['settings:systemprompt'] = 'Šablona systémového promptu';
$string['settings:systemprompt_desc'] = 'Systémový prompt odeslaný AI. Použijte zástupné symboly: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Jste užitečný AI tutor pro kurz "{{coursename}}". Role studenta je {{userrole}}.

Témata probíraná v kurzu:
{{coursetopics}}

Pomozte studentovi porozumět obsahu kurzu. Buďte povzbudivý, jasný a pedagogicky důsledný.';
$string['settings:temperature'] = 'Teplota';
$string['settings:temperature_desc'] = 'Řídí náhodnost. Nižší hodnoty jsou cílenější, vyšší hodnoty kreativnější. Rozsah: 0,0 až 2,0.';
$string['settings:maxhistory'] = 'Maximální historie konverzace';
$string['settings:maxhistory_desc'] = 'Maximální počet dvojic zpráv k zahrnutí do API požadavků. Starší zprávy jsou odstraněny.';
$string['settings:avatar'] = 'Avatar chatu';
$string['settings:avatar_desc'] = 'Vyberte ikonu avatara pro tlačítko widgetu chatu.';
$string['settings:avatar_saylor'] = 'Logo Saylor Academy (výchozí)';
$string['settings:position'] = 'Pozice widgetu';
$string['settings:position_desc'] = 'Pozice widgetu chatu na stránce.';
$string['settings:position_br'] = 'Vpravo dole';
$string['settings:position_bl'] = 'Vlevo dole';
$string['settings:position_tr'] = 'Vpravo nahoře';
$string['settings:position_tl'] = 'Vlevo nahoře';
$string['chat:settings'] = 'Nastavení pluginu';
$string['analytics:viewdashboard'] = 'Zobrazit panel analýz';
$string['coursesettings:title'] = 'Nastavení AI kurzu';
$string['coursesettings:enabled'] = 'Povolit přepsání kurzu';
$string['coursesettings:enabled_desc'] = 'Pokud je povoleno, níže uvedená nastavení přepíší globální konfiguraci poskytovatele AI pouze pro tento kurz. Ponechte pole prázdná pro zdědění globální hodnoty.';
$string['coursesettings:using_global'] = 'Použití globálního nastavení';
$string['coursesettings:saved'] = 'Nastavení AI kurzu uložena.';
$string['coursesettings:global_settings_link'] = 'Globální nastavení AI';
$string['lang:switch'] = 'Ano, přepnout';
$string['lang:dismiss'] = 'Ne, děkuji';
$string['lang:change'] = 'Změnit jazyk';
$string['lang:english'] = 'Angličtina';
$string['chat:title'] = 'AI tutor';
$string['chat:placeholder'] = 'Položte otázku...';
$string['chat:send'] = 'Odeslat';
$string['chat:close'] = 'Zavřít chat';
$string['chat:open'] = 'Otevřít chat s AI tutorem';
$string['chat:clear'] = 'Vymazat historii';
$string['chat:clear_confirm'] = 'Opravdu chcete vymazat historii chatu pro tento kurz?';
$string['chat:copy'] = 'Kopírovat konverzaci';
$string['chat:copied'] = 'Konverzace zkopírována do schránky';
$string['chat:copy_failed'] = 'Kopírování konverzace se nezdařilo';
$string['chat:greeting'] = 'Dobrý den! Jsem váš AI tutor pro tento kurz. Jak vám mohu dnes pomoci?';
$string['chat:thinking'] = 'Přemýšlím...';
$string['chat:error'] = 'Omlouváme se, došlo k chybě. Zkuste to prosím znovu.';
$string['chat:error_auth'] = 'Chyba ověření. Kontaktujte prosím svého administrátora.';
$string['chat:error_ratelimit'] = 'Příliš mnoho požadavků. Počkejte prosím chvíli a zkuste to znovu.';
$string['chat:error_unavailable'] = 'Služba AI je dočasně nedostupná. Zkuste to prosím později.';
$string['chat:error_notconfigured'] = 'AI tutor ještě nebyl nakonfigurován. Kontaktujte prosím svého administrátora.';
$string['chat:expand'] = 'Rozbalit chat';
$string['chat:collapse'] = 'Sbalit chat';
$string['chat:mic'] = 'Řekněte svou otázku nahlas';
$string['chat:mic_error'] = 'Chyba mikrofonu. Zkontrolujte prosím oprávnění prohlížeče.';
$string['chat:mic_unsupported'] = 'Hlasový vstup není tímto prohlížečem podporován.';
$string['chat:newline_hint'] = 'Shift+Enter pro nový odstavec';
$string['chat:you'] = 'Vy';
$string['chat:assistant'] = 'AI tutor';
$string['chat:history_loaded'] = 'Předchozí konverzace načtena.';
$string['chat:history_cleared'] = 'Historie chatu vymazána.';
$string['chat:offtopic_warning'] = 'Zdá se, že vaše otázka nesouvisí s tímto kurzem. Zkuste zůstat u tématu, abych vám mohl co nejlépe pomoci!';
$string['chat:offtopic_ended'] = 'Váš přístup k AI tutorovi byl dočasně pozastaven na {$a} minut, protože konverzace příliš často odbočovala od tématu. Využijte tento čas k prostudování studijních materiálů a zkuste to znovu později.';
$string['chat:offtopic_locked'] = 'Váš přístup k AI tutorovi je dočasně pozastaven. Můžete to zkusit znovu za {$a} minut. Po návratu se zaměřte na otázky související s kurzem.';
$string['chat:escalated_to_support'] = 'Nepodařilo se mi plně odpovědět na vaši otázku, proto jsem pro vás vytvořil ticket podpory. Člen týmu podpory vás bude kontaktovat. Číslo vašeho ticketu je: {$a}';
$string['chat:studyplan_intro'] = 'Mohu vám pomoci vytvořit studijní plán pro tento kurz! Stačí mi říct, kolik hodin týdně můžete věnovat studiu, a pomohu vám sestavit strukturovaný plán.';
$string['settings:faq_heading'] = 'FAQ a podpora';
$string['settings:faq_heading_desc'] = 'Konfigurace centralizovaných FAQ a integrace ticketů podpory Zendesk.';
$string['settings:faq_content'] = 'Obsah FAQ';
$string['settings:faq_content_desc'] = 'Zadejte položky FAQ (jednu na řádek ve formátu: Q: otázka | A: odpověď). Budou poskytnuty AI pro odpovědi na běžné dotazy podpory.';
$string['settings:zendesk_enabled'] = 'Povolit eskalaci do Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Když AI nemůže vyřešit dotaz podpory, automaticky se vytvoří ticket v Zendesk se shrnutím konverzace.';
$string['settings:zendesk_subdomain'] = 'Subdoména Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Vaše subdoména Zendesk (např. "mojefirma" pro mojefirma.zendesk.com).';
$string['settings:zendesk_email'] = 'E-mail API Zendesk';
$string['settings:zendesk_email_desc'] = 'E-mailová adresa uživatele Zendesk pro ověření API (s příponou /token).';
$string['settings:zendesk_token'] = 'API token Zendesk';
$string['settings:zendesk_token_desc'] = 'API token pro ověření v Zendesk.';
$string['settings:offtopic_heading'] = 'Detekce odchýlení od tématu';
$string['settings:offtopic_heading_desc'] = 'Konfigurace způsobu, jakým chat zpracovává konverzace mimo téma.';
$string['settings:offtopic_enabled'] = 'Povolit detekci odchýlení od tématu';
$string['settings:offtopic_enabled_desc'] = 'Požádat AI o detekci a přesměrování konverzací mimo téma.';
$string['settings:offtopic_max'] = 'Maximální počet zpráv mimo téma';
$string['settings:offtopic_max_desc'] = 'Počet po sobě jdoucích zpráv mimo téma před provedením opatření.';
$string['settings:offtopic_action'] = 'Akce při odchýlení od tématu';
$string['settings:offtopic_action_desc'] = 'Co dělat, když je dosažen limit pro odchýlení od tématu.';
$string['settings:offtopic_action_warn'] = 'Varovat a přesměrovat';
$string['settings:offtopic_action_end'] = 'Dočasně zablokovat přístup';
$string['settings:offtopic_lockout_duration'] = 'Doba zablokování (v minutách)';
$string['settings:offtopic_lockout_duration_desc'] = 'Doba (v minutách), po kterou student ztrácí přístup k AI tutorovi po překročení limitu pro odchýlení od tématu. Výchozí: 30 minut.';
$string['settings:studyplan_heading'] = 'Plánování studia a připomínky';
$string['settings:studyplan_heading_desc'] = 'Konfigurace funkcí plánování studia a oznámení připomínek.';
$string['settings:studyplan_enabled'] = 'Povolit plánování studia';
$string['settings:studyplan_enabled_desc'] = 'Umožnit AI tutorovi pomáhat studentům vytvářet personalizované studijní plány podle jejich dostupného času.';
$string['settings:reminders_email_enabled'] = 'Povolit připomínky e-mailem';
$string['settings:reminders_email_enabled_desc'] = 'Umožnit studentům přihlásit se k odběru připomínek ke studiu e-mailem.';
$string['settings:reminders_whatsapp_enabled'] = 'Povolit připomínky přes WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Umožnit studentům přihlásit se k odběru připomínek ke studiu přes WhatsApp (vyžaduje konfiguraci WhatsApp API).';
$string['settings:whatsapp_api_url'] = 'URL WhatsApp API';
$string['settings:whatsapp_api_url_desc'] = 'Koncový bod API pro odesílání zpráv WhatsApp (např. Twilio, MessageBird). Musí přijímat POST s JSON tělem obsahujícím pole "to", "from" a "body".';
$string['settings:whatsapp_api_token'] = 'Token WhatsApp API';
$string['settings:whatsapp_api_token_desc'] = 'Ověřovací token pro WhatsApp API.';
$string['settings:whatsapp_from_number'] = 'Číslo odesílatele WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Telefonní číslo, ze kterého se odesílají zprávy WhatsApp (s předvolbou země, např. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Blokované země pro WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Kódy zemí ISO 3166-1 alpha-2 oddělené čárkami, kde nejsou připomínky přes WhatsApp povoleny kvůli místním předpisům (např. "CN,IR,KP").';
$string['reminder:email_subject'] = 'Připomínka ke studiu: {$a}';
$string['reminder:email_body'] = 'Dobrý den, {$a->firstname},

zde je vaše připomínka ke studiu pro "{$a->coursename}".

{$a->message}

Váš studijní plán doporučuje {$a->hours_per_week} hodin týdně pro tento kurz.

Jen tak dál!

---
Pro odhlášení z těchto připomínek klikněte zde: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Připomínka ke studiu pro {$a->coursename}: {$a->message} (Odhlásit se: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Studijní cíl dne: ';
$string['unsubscribe:title'] = 'Odhlášení z připomínek ke studiu';
$string['unsubscribe:success'] = 'Byli jste úspěšně odhlášeni z připomínek ke studiu pro tento kurz.';
$string['unsubscribe:already'] = 'Z těchto připomínek jste se již odhlásili.';
$string['unsubscribe:invalid'] = 'Neplatný nebo expirovaný odkaz pro odhlášení.';
$string['unsubscribe:resubscribe'] = 'Změnili jste názor? Připomínky můžete znovu aktivovat prostřednictvím chatu s AI tutorem.';
$string['task:send_reminders'] = 'Odeslat připomínky ke studiu od AI tutora';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Ukládá studijní plány studentů.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Identifikátor uživatele, kterému studijní plán patří.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kurz, ke kterému studijní plán patří.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Hodiny týdně, které student plánuje studovat.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Podrobnosti studijního plánu ve formátu JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Ukládá preference připomínek ke studiu a odběry.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Identifikátor uživatele přihlášeného k odběru připomínek.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Kanál připomínek (e-mail nebo WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'E-mailová adresa nebo telefonní číslo pro připomínky.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Kód země uživatele pro regulační soulad.';
$string['analytics:title'] = 'Analýzy AI tutora';
$string['analytics:overview'] = 'Přehled';
$string['analytics:total_conversations'] = 'Celkem konverzací';
$string['analytics:total_messages'] = 'Celkem zpráv';
$string['analytics:active_students'] = 'Aktivní studenti';
$string['analytics:avg_messages_per_student'] = 'Prům. zpráv na studenta';
$string['analytics:offtopic_rate'] = 'Míra odchýlení od tématu';
$string['analytics:escalation_count'] = 'Eskalováno na podporu';
$string['analytics:studyplan_adoption'] = 'Studenti se studijními plány';
$string['analytics:usage_trends'] = 'Trendy využívání';
$string['analytics:daily_messages'] = 'Denní objem zpráv';
$string['analytics:hotspots'] = 'Problémová místa kurzu';
$string['analytics:hotspots_desc'] = 'Sekce kurzu nejčastěji zmiňované v dotazech studentů. Vysoká čísla mohou naznačovat oblasti, kde studenti potřebují více podpory.';
$string['analytics:section'] = 'Sekce';
$string['analytics:mention_count'] = 'Zmínky';
$string['analytics:common_prompts'] = 'Běžné vzory dotazů';
$string['analytics:common_prompts_desc'] = 'Opakující se vzory dotazů studentů. Prozkoumejte je, abyste identifikovali systematické mezery v obsahu kurzu.';
$string['analytics:prompt_pattern'] = 'Vzor';
$string['analytics:frequency'] = 'Četnost';
$string['analytics:recent_activity'] = 'Nedávná aktivita';
$string['analytics:no_data'] = 'Zatím nejsou k dispozici žádná analytická data. Data se zobrazí, jakmile studenti začnou používat AI tutora.';
$string['analytics:timerange'] = 'Časový rozsah';
$string['analytics:last_7_days'] = 'Posledních 7 dní';
$string['analytics:last_30_days'] = 'Posledních 30 dní';
$string['analytics:all_time'] = 'Celé období';
$string['analytics:export'] = 'Exportovat data';
$string['analytics:provider_comparison'] = 'Srovnání poskytovatelů AI';
$string['analytics:provider_comparison_desc'] = 'Porovnejte výkon poskytovatelů AI používaných v tomto kurzu.';
$string['analytics:provider'] = 'Poskytovatel';
$string['analytics:response_count'] = 'Odpovědi';
$string['analytics:avg_response_length'] = 'Prům. délka odpovědí';
$string['analytics:total_tokens'] = 'Celkem tokenů';
$string['analytics:avg_tokens'] = 'Prům. tokenů / odpověď';
$string['usersettings:title'] = 'AI asistent kurzu: Vaše data';
$string['usersettings:intro'] = 'Spravujte data chatu s AI tutorem a nastavení soukromí';
$string['usersettings:privacy_info'] = 'Vaše konverzace s AI tutorem jsou uloženy, aby vám mohla být poskytována průběžná podpora během kurzu. Máte plnou kontrolu nad těmito daty a můžete je kdykoliv smazat.';
$string['usersettings:usage_stats'] = 'Vaše statistiky využívání';
$string['usersettings:total_messages'] = 'Celkem zpráv';
$string['usersettings:total_conversations'] = 'Konverzace';
$string['usersettings:messages'] = 'Zprávy';
$string['usersettings:last_activity'] = 'Poslední aktivita';
$string['usersettings:delete_course_data'] = 'Smazat data kurzu';
$string['usersettings:no_data'] = 'AI tutora jste zatím nepoužili. Vaše data o využívání se zde zobrazí, jakmile začnete chatovat.';
$string['usersettings:delete_all_title'] = 'Smazat všechna vaše data';
$string['usersettings:delete_all_warning'] = 'Tato akce trvale smaže všechny vaše konverzace s AI tutorem ve všech kurzech. Tuto akci nelze vrátit zpět.';
$string['usersettings:delete_all_button'] = 'Smazat všechna moje data';
$string['usersettings:confirm_delete_course'] = 'Opravdu chcete trvale smazat všechna vaše data AI tutora pro kurz "{$a}"? Tuto akci nelze vrátit zpět.';
$string['usersettings:confirm_delete_all'] = 'Opravdu chcete trvale smazat VŠECHNA vaše data AI tutora ve všech kurzech? Tuto akci nelze vrátit zpět.';
$string['usersettings:data_deleted'] = 'Vaše data byla smazána.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Dobrý den, {$a}! Jsem SOLA, váš online studijní asistent od Saylor.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Otevřít SOLA';
$string['chat:change_avatar'] = 'Změnit avatar';

// Quiz UI.
$string['chat:quiz'] = 'Zkusit cvičný test';
$string['chat:quiz_setup_title'] = 'Cvičný test';
$string['chat:quiz_questions'] = 'Počet otázek';
$string['chat:quiz_topic'] = 'Téma';
$string['chat:quiz_topic_guided'] = 'Vedeno AI (podle vašeho pokroku)';
$string['chat:quiz_topic_default'] = 'Aktuální obsah kurzu';
$string['chat:quiz_topic_custom'] = 'Vlastní téma…';
$string['chat:quiz_custom_placeholder'] = 'Zadejte téma nebo otázku...';
$string['chat:quiz_start'] = 'Začít test';
$string['chat:quiz_cancel'] = 'Zrušit';
$string['chat:quiz_loading'] = 'Generuji test…';
$string['chat:quiz_error'] = 'Nepodařilo se vygenerovat test. Zkuste to prosím znovu.';
$string['chat:quiz_correct'] = 'Správně!';
$string['chat:quiz_wrong'] = 'Nesprávně.';
$string['chat:quiz_next'] = 'Další otázka';
$string['chat:quiz_finish'] = 'Zobrazit výsledky';
$string['chat:quiz_score'] = 'Test dokončen! Dosáhli jste {$a->score} z {$a->total}.';
$string['chat:quiz_summary'] = 'Právě jsem dokončil/a cvičný test s {$a->total} otázkami na téma "{$a->topic}" a dosáhl/a jsem {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Studijní cíle';
$string['chat:quiz_topic_modules'] = 'Téma kurzu';
$string['chat:quiz_subtopic_select'] = 'Vyberte konkrétní položku…';
$string['chat:quiz_topic_sections'] = 'Sekce kurzu';
$string['chat:quiz_score_great'] = 'Výborná práce! Tento materiál opravdu zvládáte.';
$string['chat:quiz_score_good'] = 'Dobrý výkon! Pokračujte v opakování, abyste posílili své porozumění.';
$string['chat:quiz_score_practice'] = 'Pokračujte v procvičování. Zkuste si projít odpovídající obsah kurzu a pak test zopakujte.';
$string['chat:quiz_review_heading'] = 'Přehled';
$string['chat:quiz_retake'] = 'Zopakovat test';
$string['chat:quiz_exit'] = 'Ukončit test';
$string['chat:quiz_your_answer'] = 'Vaše odpověď';
$string['chat:quiz_correct_answer'] = 'Správná odpověď';

// Conversation starters.
$string['chat:starters_label'] = 'Začátky konverzace';
$string['chat:starter_quiz'] = 'Otestujte mě';
$string['chat:starter_explain'] = 'Vysvětlete to';
$string['chat:starter_key_concepts'] = 'Klíčové koncepty';
$string['chat:starter_study_plan'] = 'Studijní plán';
$string['chat:starter_help_me'] = 'AI pomoc';
$string['chat:starter_ell_practice'] = 'Procvičit mluvení';
$string['chat:starter_ell_pronunciation'] = 'Výslovnost ELL';
$string['chat:starter_ai_coach'] = 'AI kouč';
$string['chat:starter_speak'] = 'Říct začátek';

// Reset / home.
$string['chat:reset'] = 'Začít znovu';

// Topic picker.
$string['chat:topic_picker_title'] = 'Na co se chcete zaměřit?';
$string['chat:topic_picker_title_help'] = 'S čím potřebujete pomoci?';
$string['chat:topic_picker_title_explain'] = 'Co vám mám vysvětlit?';
$string['chat:topic_picker_title_study'] = 'Na jakou oblast se chcete zaměřit?';
$string['chat:topic_start'] = 'Pokračovat';

// Expand states.
$string['chat:fullscreen'] = 'Celá obrazovka';
$string['chat:exitfullscreen'] = 'Ukončit celou obrazovku';

// Settings panel.
$string['chat:language'] = 'Změnit jazyk';
$string['chat:settings_panel'] = 'Nastavení';
$string['chat:settings_language'] = 'Jazyk';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Hlas';
$string['chat:settings_voice_admin'] = 'Nastavení hlasu jsou spravována v administračním panelu webu.';

// Voice mode.
$string['chat:voice_mode'] = 'Hlasový režim';
$string['chat:voice_end'] = 'Ukončit hlasovou relaci';
$string['chat:voice_connecting'] = 'Připojuji se...';
$string['chat:voice_listening'] = 'Naslouchám...';
$string['chat:voice_speaking'] = 'SOLA mluví...';
$string['chat:voice_idle'] = 'Připraveno';
$string['chat:voice_error'] = 'Hlasové připojení selhalo. Zkontrolujte prosím svá nastavení.';
$string['chat:quiz_locked'] = 'SOLA je během testů pozastavena, aby byla zachována akademická integrita. Hodně štěstí!';
$string['task:send_inactivity_reminders'] = 'Odeslat týdenní e-maily s připomínkou při nečinnosti';
$string['messageprovider:study_notes'] = 'Poznámky ze studijní relace';
