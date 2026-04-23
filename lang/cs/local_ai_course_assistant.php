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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Výchozí pro nové kurzy';
$string['settings:default_course_mode_desc'] = 'Ovládá, zda se SOLA zobrazuje v kurzu, když nebyla provedena volba pro jednotlivý kurz. Nové instalace mají ve výchozím nastavení "Ve výchozím nastavení zakázáno", takže administrátoři mohou povolit kurz po kurzu ze stránky Analytics nebo stránky Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Ve výchozím nastavení zakázáno (povolit pro každý kurz)';
$string['settings:default_course_mode_all'] = 'Povoleno ve všech kurzech';
$string['settings:auto_open'] = 'Automatické otevření při první návštěvě';
$string['settings:auto_open_desc'] = 'Pokud je povoleno, panel SOLA se automaticky otevře, když student poprvé přijde do každého kurzu. Následná načtení stránek ve stejném kurzu panel znovu neotevřou — stav je sledován pro každý kurz v prohlížeči studenta pomocí localStorage. Platí na počítači i mobilu. Lze přepsat pro jednotlivé kurzy na stránce Course AI Settings.';
$string['settings:comparison_providers'] = 'Poskytovatelé pro porovnání (výběr LLM)';
$string['settings:comparison_providers_desc'] = 'Přidejte další poskytovatele AI do vestavěného výběru LLM, aby administrátoři mohli porovnávat odpovědi mezi poskytovateli. K přidání řádků použijte tabulku níže. Sloupec teploty je nepovinný (ponechte prázdný pro použití globální teploty). Uložený formát: provider_id|api_key|model1,model2|temperature. Primární poskytovatel nakonfigurovaný výše je vždy zahrnut automaticky. Výběr vidí pouze administrátoři s oprávněním ke správě; studenti jej nikdy nevidí. Platné provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Výchozí poskytovatel AI';
$string['settings:provider_desc'] = 'Vyberte poskytovatele AI pro dokončení chatu. Vyberte "Moodle AI (core_ai subsystem)" pro směrování požadavků přes vestavěnou AI konfiguraci Moodle v Site admin > AI; pole API klíč, model a základní URL níže jsou v tomto režimu ignorována. Streaming, používání nástrojů a prompt caching nejsou přes core_ai k dispozici — odpovědi jsou doručovány jako jeden celek. Pro nejlepší studentský zážitek použijte přímého poskytovatele.';
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
$string['settings:avatar_saylor'] = 'Logo {$a} (výchozí)';
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
$string['coursesettings:sola_enabled'] = 'SOLA v tomto kurzu';
$string['coursesettings:sola_enabled_toggle'] = 'Zobrazit widget SOLA v tomto kurzu';
$string['coursesettings:sola_enabled_desc'] = 'Ovládá, zda se chatovací widget SOLA v tomto kurzu zobrazí. Výchozí hodnota pro celý web je nastavena v nastavení pluginu pod General > Default for new courses.';
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
$string['chat:clear'] = 'Vymazat obrazovku';
$string['chat:clear_confirm'] = 'Vymazat viditelné zprávy? Celá historie chatu zůstane uložena a lze ji znovu načíst opětovným otevřením widgetu.';
$string['chat:copy'] = 'Kopírovat konverzaci';
$string['chat:copied'] = 'Konverzace zkopírována do schránky';
$string['chat:copy_failed'] = 'Kopírování konverzace se nezdařilo';
$string['chat:thinking'] = 'Přemýšlím...';
$string['chat:error'] = 'Omlouváme se, došlo k chybě. Zkuste to prosím znovu.';
$string['chat:error_auth'] = 'Chyba ověření. Kontaktujte prosím svého administrátora.';
$string['chat:error_ratelimit'] = 'Příliš mnoho požadavků. Počkejte prosím chvíli a zkuste to znovu.';
$string['chat:error_unavailable'] = 'Služba AI je dočasně nedostupná. Zkuste to prosím později.';
$string['chat:error_notconfigured'] = 'AI tutor ještě nebyl nakonfigurován. Kontaktujte prosím svého administrátora.';
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
$string['chat:greeting'] = 'Ahoj, {$a}! Jsem SOLA. Jak vám mohu dnes pomoci?';
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
$string['chat:starter_quiz'] = 'Otestuj mě z tohoto';
$string['chat:starter_explain'] = 'Vysvětlete to';
$string['chat:starter_key_concepts'] = 'Klíčové koncepty';
$string['chat:starter_study_plan'] = 'Studijní plán';
$string['chat:starter_help_me'] = 'AI pomoc';
$string['chat:starter_ai_project_coach'] = 'AI projektový kouč';
$string['chat:starter_ell_practice'] = 'Konverzační cvičení';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Poznámky';

// History panel.
$string['chat:history_title'] = 'Poznámky a historie konverzace';
$string['task:send_inactivity_reminders'] = 'Odeslat týdenní e-maily s připomínkou při nečinnosti';
$string['task:run_meta_ai_query'] = 'Spustit naplánovaný dotaz Radar učení analytiky';
$string['messageprovider:study_notes'] = 'Poznámky ze studijní relace';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Doručování frontendu';
$string['settings:cdn_heading_desc'] = 'Servírujte frontendové soubory SOLA (JS/CSS) z externího CDN místo ze souborového systému Moodle. To umožňuje aktualizace frontendu bez upgradu pluginu. Ponechte CDN URL prázdné pro použití lokálních souborů pluginu.';
$string['settings:cdn_url'] = 'Základní CDN URL';
$string['settings:cdn_url_desc'] = 'Základní URL, kde jsou hostovány sola.min.js a sola.min.css. Příklad: https://your-org.github.io/sola-cdn. Ponechte prázdné pro použití lokálních souborů pluginu.';
$string['settings:cdn_version'] = 'Verze CDN souborů';
$string['settings:cdn_version_desc'] = 'Řetězec verze připojovaný k CDN URL pro cache busting. Aktualizujte po každém CDN nasazení (např. 3.2.4 nebo commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Celkové využití';
$string['analytics:tab_bycourse'] = 'Podle kurzu';
$string['analytics:tab_comparison'] = 'AI vs neuživatelé';
$string['analytics:tab_byunit'] = 'Podle jednotky';
$string['analytics:tab_usagetypes'] = 'Typy využití';
$string['analytics:tab_themes'] = 'Témata';
$string['analytics:tab_feedback'] = 'Zpětná vazba AI';
$string['analytics:total_students'] = 'Celkem studentů';
$string['analytics:active_users'] = 'Aktivní uživatelé AI';
$string['analytics:msgs_per_student'] = 'Zpráv na studenta';
$string['analytics:avg_session'] = 'Průměrná délka relace';
$string['analytics:return_rate'] = 'Míra návratu';
$string['analytics:total_sessions'] = 'Celkem relací';
$string['analytics:thumbs_up'] = 'Palec nahoru';
$string['analytics:thumbs_down'] = 'Palec dolů';
$string['analytics:hallucination_flags'] = 'Označení nepřesností';
$string['analytics:msgs_to_resolution'] = 'Zpráv do vyřešení';
$string['analytics:helpful'] = 'Užitečné';
$string['analytics:not_helpful'] = 'Neužitečné';
$string['analytics:flag_hallucination'] = 'Tato odpověď obsahuje nepřesné informace';
$string['analytics:submit_rating'] = 'Odeslat';
$string['analytics:thanks_feedback'] = 'Děkujeme za zpětnou vazbu';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Vysvětli tuto stránku';
$string['chat:starter_ask_anything'] = 'Zeptejte se na cokoliv';
$string['chat:starter_review_practice'] = 'Opakování a procvičování';
$string['chat:history_saved_subtitle'] = 'Uložené odpovědi zůstávají na tomto zařízení pro tento kurz.';
$string['chat:history_saved_empty'] = 'Uložte odpověď AI, abyste ji viděli zde.';
$string['chat:history_views_label'] = 'Zobrazení historie';
$string['chat:history_view_saved'] = 'Uložené';
$string['chat:history_view_recent'] = 'Historie';
$string['chat:debug_refresh'] = 'Obnovit';
$string['chat:debug_copy_all'] = 'Kopírovat vše';
$string['chat:debug_close'] = 'Zavřít';
$string['chat:language_switch'] = 'Změnit jazyk';
$string['chat:language_dismiss'] = 'Zamítnout návrh jazyka';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Vyberte poskytovatele LLM';
$string['chat:llm_model_label'] = 'Model';
$string['chat:llm_model_select'] = 'Vyberte model LLM';
$string['chat:footer_usertesting'] = 'Testování použitelnosti';
$string['chat:footer_feedback'] = 'Zpětná vazba';
$string['chat:voice_panel_title'] = 'Mluvte s {$a} (experimentální)';

// Additional translated strings.
$string['chat:debug_context'] = 'Ladění kontextu';
$string['chat:debug_context_browser'] = 'Snímek prohlížeče';
$string['chat:debug_context_copy'] = 'Kopírovat';
$string['chat:debug_context_prompt'] = 'Odpověď serveru';
$string['chat:debug_context_request'] = 'Poslední SSE požadavek';
$string['chat:debug_context_toggle'] = 'Přepnout';
$string['chat:history_empty'] = 'Žádné konverzace.';
$string['chat:history_refresh'] = 'Obnovit';
$string['chat:history_subtitle'] = 'Vaše poslední zprávy.';
$string['chat:starter_explain_prompt'] = 'Vysvětlete nejdůležitější koncept?';
$string['chat:starter_help_lesson'] = 'Vysvětlete';
$string['chat:starter_help_lesson_prompt'] = 'Pomozte mi pochopit lekci. Shrňte klíčové koncepty.';
$string['chat:starter_prompt_coach'] = 'AI trenér';
$string['chat:starter_quick_study'] = 'Rychlé studium';
$string['chat:starter_study_plan_prompt'] = 'Chci plánovat studium. Zeptejte se: (1) co chci, (2) kolik času. Aktualizujte plán.';
$string['chat:voice_copy'] = 'Hlasový rozhovor s asistentem.';
$string['chat:voice_ready'] = 'Připraveno';
$string['chat:voice_start'] = 'Zahájit';
$string['chat:voice_title'] = 'Mluvte se SOLA';
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
$string['mobile_chip_concepts'] = 'Klíčové koncepty';
$string['mobile_chip_quiz'] = 'Kvíz';
$string['mobile_chip_studyplan'] = 'Studijní plán';
$string['mobile_clear'] = 'Vymazat';
$string['mobile_disabled'] = 'SOLA není pro tento kurz dostupný.';
$string['mobile_placeholder'] = 'Položte otázku...';
$string['mobile_welcome'] = 'Ahoj, {$a}!';
$string['mobile_welcome_sub'] = 'Jsem SOLA, váš studijní asistent. Jak vám mohu pomoci?';
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
$string['rubric:done'] = 'Hotovo';
$string['rubric:encourage_high'] = 'Výborná práce! Pokračujte!';
$string['rubric:encourage_low'] = 'Dobrý začátek! Pravidelné procvičování pomůže.';
$string['rubric:encourage_mid'] = 'Dobrá snaha! Pokračujte v procvičování.';
$string['rubric:overall'] = 'Celkově';
$string['rubric:practice_again'] = 'Cvičit znovu';
$string['rubric:score_title_conversation'] = 'Skóre konverzace';
$string['rubric:score_title_pronunciation'] = 'Skóre výslovnosti';
$string['rubric:scoring'] = 'Vyhodnocování...';
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
$string['demo:title'] = 'Testovací prostředí';
$string['demo:heading'] = 'Testovací prostředí';
$string['demo:intro'] = 'Tato stránka vytvoří testovací kurz, který je <strong>skrytý před studenty</strong> (visible=0), a naplní jej fiktivními studenty, AI konverzacemi, hodnoceními a zpětnou vazbou. Užitečné pro náhled Analytického dashboardu nebo ověření změn pluginu bez ovlivnění skutečně zapsaných studentů.';
$string['demo:step1'] = 'Krok 1: testovací kurz';
$string['demo:step2'] = 'Krok 2: naplnit fiktivními studenty a AI chaty';
$string['demo:course_exists'] = 'Testovací kurz existuje: <strong>{$a->fullname}</strong> (krátký název <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'skrytý';
$string['demo:badge_visible'] = 'viditelný pro studenty';
$string['demo:no_course'] = 'Nebyl nalezen žádný testovací kurz. Klikněte níže pro vytvoření.';
$string['demo:create_btn'] = 'Vytvořit skrytý testovací kurz';
$string['demo:open_course'] = 'Otevřít kurz &rarr;';
$string['demo:seed_intro'] = 'Vytvoří demo_student_001, demo_student_002, ... zapíše je do testovacího kurzu a vloží syntetické konverzace, zprávy, hodnocení a zpětnou vazbu. Spusťte znovu pro přidání dalších dat, nebo zaškrtněte „nejprve vymazat“ pro restart.';
$string['demo:users_label'] = 'Uživatelé';
$string['demo:weeks_label'] = 'Týdny';
$string['demo:clear_label'] = 'Nejprve vymazat existující uživatele demo_*';
$string['demo:seed_btn'] = 'Naplnit studenty a chaty';
$string['demo:view_analytics'] = 'Zobrazit analytiku pro tento kurz &rarr;';
$string['demo:footer'] = 'Data vytvořená zde se nacházejí ve standardních tabulkách uživatelů / zápisů Moodle a ve vlastních tabulkách konverzací pluginu. Všichni fiktivní uživatelé mají uživatelská jména začínající <code>demo_student_</code>, takže je lze snadno filtrovat nebo odstranit. Chcete-li je odstranit, spusťte krok naplnění znovu se zaškrtnutým „Nejprve vymazat existující uživatele demo_*“.';
$string['demo:course_fullname'] = 'Testovací kurz SOLA (skrytý)';
$string['demo:notify_created'] = 'Testovací kurz připraven: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Vytvoření kurzu selhalo: {$a}';
$string['demo:notify_seeded'] = 'Naplněno: {$a->users} uživatelů, {$a->conversations} konverzací, {$a->messages} zpráv, {$a->ratings} hodnocení, {$a->feedback} záznamů zpětné vazby.';
$string['demo:notify_seed_fail'] = 'Naplnění dat selhalo: {$a}';
$string['toc:analytics'] = 'Analytický dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Náklady na tokeny a analytika &rarr;';
$string['toc:testing'] = 'Testovací prostředí &rarr;';
$string['toc:back_to_course'] = '&larr; Zpět na {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Binární soubor pdftotext nebyl nalezen; extrakce PDF je zakázána.';
$string['rag:pdftotext_available'] = 'pdftotext byl detekován v {$a}.';
$string['rag:docx_unavailable'] = 'Rozšíření PHP ZipArchive není dostupné; extrakce DOCX je zakázána.';
$string['rag:h5p_unavailable'] = 'Obsah H5P nelze přečíst; přeskakuji.';
$string['rag:scorm_too_large'] = 'Balíček SCORM překračuje nakonfigurovaný limit velikosti ({$a} MB); přeskakuji.';
$string['rag:scorm_unzip_failed'] = 'Balíček SCORM nelze rozbalit; přeskakuji.';
$string['rag:transcript_fetch_failed'] = 'Nelze načíst přepis z {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL přepisu blokováno výzvou Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Detekována vložená média: {$a}';
$string['rag:embed_transcript_attached'] = 'Přepis připojen pro {$a}';

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
