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
 * Language strings for local_ai_course_assistant — Slovak.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI asistent kurzu';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Ukladá konverzácie AI tútora podľa používateľa a kurzu.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID používateľa, ktorý vlastní konverzáciu.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID kurzu, ku ktorému konverzácia patrí.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Názov konverzácie.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Čas vytvorenia konverzácie.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Čas poslednej úpravy konverzácie.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Ukladá jednotlivé správy v konverzáciách AI tútora.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID používateľa, ktorý odoslal správu.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID kurzu, ku ktorému správa patrí.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Rola odosielateľa správy (používateľ alebo asistent).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Obsah správy.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Počet tokenov použitých pre správu.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Čas vytvorenia správy.';
$string['ai_course_assistant:use'] = 'Používať chat AI tútora';
$string['ai_course_assistant:viewanalytics'] = 'Zobraziť analytiku chatu AI tútora';
$string['ai_course_assistant:manage'] = 'Spravovať nastavenia chatu AI tútora (rola správcu)';
$string['settings:enabled'] = 'Povoliť AI asistenta kurzu';
$string['settings:enabled_desc'] = 'Povoliť alebo zakázať widget AI asistenta kurzu na stránkach kurzov.';
$string['settings:default_course_mode'] = 'Predvolené pre nové kurzy';
$string['settings:default_course_mode_desc'] = 'Ovláda, či sa SOLA objaví na kurze, keď nebola vykonaná voľba pre konkrétny kurz. Nové inštalácie majú predvolene nastavené "Predvolene zakázané", aby administrátori mohli povoľovať kurz po kurze zo stránky Analytics alebo stránky Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Predvolene zakázané (povoliť pre každý kurz)';
$string['settings:default_course_mode_all'] = 'Povolené na všetkých kurzoch';
$string['settings:auto_open'] = 'Automatické otvorenie pri prvej návšteve';
$string['settings:auto_open_desc'] = 'Ak je povolené, panel SOLA sa automaticky otvorí, keď študent prvýkrát príde do každého kurzu. Následné načítania stránok v tom istom kurze panel znova neotvoria — stav sa sleduje pre každý kurz v prehliadači študenta cez localStorage. Platí na počítači aj mobile. Možno prepísať pre jednotlivé kurzy na stránke Course AI Settings.';
$string['settings:comparison_providers'] = 'Poskytovatelia na porovnanie (výber LLM)';
$string['settings:comparison_providers_desc'] = 'Pridajte ďalších poskytovateľov AI do vstavaného výberu LLM vo widgete, aby administrátori mohli porovnávať odpovede medzi poskytovateľmi. Na pridanie riadkov použite tabuľku nižšie. Stĺpec teploty je voliteľný (nechajte prázdny na použitie globálnej teploty). Uložený formát: provider_id|api_key|model1,model2|temperature. Primárny poskytovateľ nakonfigurovaný vyššie je vždy zahrnutý automaticky. Výber vidia iba administrátori s oprávnením na správu; študenti ho nikdy nevidia. Platné provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Predvolený poskytovateľ AI';
$string['settings:provider_desc'] = 'Vyberte poskytovateľa AI pre dokončenia chatu. Zvoľte "Moodle AI (core_ai subsystem)" na smerovanie požiadaviek cez vstavanú konfiguráciu AI v Moodle v Site admin > AI; polia API kľúča, modelu a základnej URL nižšie sú v tomto režime ignorované. Streaming, používanie nástrojov a prompt caching nie sú dostupné cez core_ai — odpovede sú doručované ako jeden celok. Pre najlepší študentský zážitok použite priameho poskytovateľa.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (lokálny)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Vlastný (kompatibilný s OpenAI)';
$string['settings:apikey'] = 'Kľúč API';
$string['settings:apikey_desc'] = 'Kľúč API pre vybraného poskytovateľa. Pre Ollama nie je potrebný.';
$string['settings:model'] = 'Názov modelu';
$string['settings:model_desc'] = 'Model, ktorý sa má použiť. Predvolená hodnota závisí od poskytovateľa (napr. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'Základná URL API';
$string['settings:apibaseurl_desc'] = 'Základná URL API. Automaticky vyplnená podľa poskytovateľa, ale môže byť prepísaná. Nechajte prázdne pre použitie predvolenej hodnoty poskytovateľa.';
$string['settings:systemprompt'] = 'Šablóna systémového promptu';
$string['settings:systemprompt_desc'] = 'Systémový prompt odoslaný AI. Použite zástupné symboly: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Ste užitočný AI tútor pre kurz „{{coursename}}". Rola študenta je {{userrole}}.

Témy preberané v kurze:
{{coursetopics}}

Pomôžte študentovi pochopiť obsah kurzu. Buďte povzbudzujúci, jasný a pedagogicky dôsledný.';
$string['settings:temperature'] = 'Teplota';
$string['settings:temperature_desc'] = 'Ovláda náhodnosť. Nízke hodnoty sú cielenejšie, vysoké hodnoty kreatívnejšie. Rozsah: 0,0 až 2,0.';
$string['settings:maxhistory'] = 'Maximálna história konverzácie';
$string['settings:maxhistory_desc'] = 'Maximálny počet párov správ zahrnutých v požiadavkách API. Staršie správy sa odstránia.';
$string['settings:avatar'] = 'Avatar chatu';
$string['settings:avatar_desc'] = 'Vyberte ikonu avatara pre tlačidlo widgetu chatu.';
$string['settings:avatar_saylor'] = 'Logo {$a} (predvolené)';
$string['settings:position'] = 'Pozícia widgetu';
$string['settings:position_desc'] = 'Pozícia widgetu chatu na stránke.';
$string['settings:position_br'] = 'Vpravo dole';
$string['settings:position_bl'] = 'Vľavo dole';
$string['settings:position_tr'] = 'Vpravo hore';
$string['settings:position_tl'] = 'Vľavo hore';
$string['chat:settings'] = 'Nastavenia pluginu';
$string['analytics:viewdashboard'] = 'Zobraziť analytický panel';
$string['coursesettings:title'] = 'Nastavenia AI kurzu';
$string['coursesettings:enabled'] = 'Povoliť prepísanie kurzu';
$string['coursesettings:enabled_desc'] = 'Keď je povolené, nastavenia nižšie prepíšu globálnu konfiguráciu poskytovateľa AI iba pre tento kurz. Nechajte polia prázdne na zdedenie globálnych hodnôt.';
$string['coursesettings:sola_enabled'] = 'SOLA na tomto kurze';
$string['coursesettings:sola_enabled_toggle'] = 'Zobraziť widget SOLA na tomto kurze';
$string['coursesettings:sola_enabled_desc'] = 'Ovláda, či sa na tomto kurze zobrazí chatovací widget SOLA. Predvolené nastavenie pre celú stránku sa nastavuje v nastaveniach pluginu pod General > Default for new courses.';
$string['coursesettings:using_global'] = 'Používa sa globálne nastavenie';
$string['coursesettings:saved'] = 'Nastavenia AI kurzu boli uložené.';
$string['coursesettings:global_settings_link'] = 'Globálne nastavenia AI';
$string['lang:switch'] = 'Áno, prepnúť';
$string['lang:dismiss'] = 'Nie, ďakujem';
$string['lang:change'] = 'Zmeniť jazyk';
$string['lang:english'] = 'Angličtina';
$string['chat:title'] = 'AI tútor';
$string['chat:placeholder'] = 'Položte otázku...';
$string['chat:send'] = 'Odoslať';
$string['chat:close'] = 'Zatvoriť chat';
$string['chat:open'] = 'Otvoriť chat AI tútora';
$string['chat:clear'] = 'Vymazať obrazovku';
$string['chat:clear_confirm'] = 'Vymazať viditeľné správy? Celá história chatu zostáva uložená a dá sa znovu načítať opätovným otvorením widgetu.';
$string['chat:copy'] = 'Kopírovať konverzáciu';
$string['chat:copied'] = 'Konverzácia skopírovaná do schránky';
$string['chat:copy_failed'] = 'Nepodarilo sa skopírovať konverzáciu';
$string['chat:thinking'] = 'Premýšľam...';
$string['chat:error'] = 'Prepáčte, vyskytla sa chyba. Skúste to znova.';
$string['chat:error_auth'] = 'Chyba overenia. Kontaktujte správcu.';
$string['chat:error_ratelimit'] = 'Príliš veľa požiadaviek. Počkajte chvíľu a skúste to znova.';
$string['chat:error_unavailable'] = 'Služba AI je dočasne nedostupná. Skúste to znova neskôr.';
$string['chat:error_notconfigured'] = 'AI tútor ešte nebol nakonfigurovaný. Kontaktujte správcu.';
$string['chat:mic'] = 'Položte otázku hlasom';
$string['chat:mic_error'] = 'Chyba mikrofónu. Skontrolujte povolenia prehliadača.';
$string['chat:mic_unsupported'] = 'Hlasový vstup nie je v tomto prehliadači podporovaný.';
$string['chat:newline_hint'] = 'Shift+Enter pre nový odsek';
$string['chat:you'] = 'Vy';
$string['chat:assistant'] = 'AI tútor';
$string['chat:history_loaded'] = 'Predchádzajúca konverzácia bola načítaná.';
$string['chat:history_cleared'] = 'História chatu bola vymazaná.';
$string['chat:offtopic_warning'] = 'Zdá sa, že vaša otázka nesúvisí s týmto kurzom. Skúste zostať pri téme, aby som vám mohol čo najlepšie pomôcť!';
$string['chat:offtopic_ended'] = 'Váš prístup k AI tútorovi bol dočasne pozastavený na {$a} minút, pretože konverzácia príliš odbočila od témy. Využite tento čas na preštudovanie materiálov kurzu. Neskôr to môžete skúsiť znova.';
$string['chat:offtopic_locked'] = 'Váš prístup k AI tútorovi je dočasne pozastavený. Môžete to skúsiť znova za {$a} minút. Po návrate sa zamerajte na otázky súvisiace s kurzom.';
$string['chat:escalated_to_support'] = 'Nepodarilo sa mi úplne odpovedať na vašu otázku, preto som vytvoril lístok podpory. Člen tímu podpory vás bude kontaktovať. Číslo vášho lístka je: {$a}';
$string['chat:studyplan_intro'] = 'Môžem vám pomôcť vytvoriť študijný plán pre tento kurz! Povedzte mi, koľko hodín týždenne môžete venovať štúdiu, a pomôžem vám zostaviť štruktúrovaný plán.';
$string['settings:faq_heading'] = 'FAQ a podpora';
$string['settings:faq_heading_desc'] = 'Nakonfigurujte centralizované FAQ a integráciu lístkov podpory Zendesk.';
$string['settings:faq_content'] = 'Obsah FAQ';
$string['settings:faq_content_desc'] = 'Zadajte položky FAQ (jednu na riadok vo formáte: Q: otázka | A: odpoveď). Budú poskytnuté AI na zodpovedanie bežných otázok podpory.';
$string['settings:zendesk_enabled'] = 'Povoliť eskaláciu Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Keď AI nedokáže vyriešiť otázku podpory, automaticky vytvorí lístok Zendesk so zhrnutím konverzácie.';
$string['settings:zendesk_subdomain'] = 'Subdoména Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Vaša subdoména Zendesk (napr. „mojafirma" pre mojafirma.zendesk.com).';
$string['settings:zendesk_email'] = 'E-mail API Zendesk';
$string['settings:zendesk_email_desc'] = 'E-mailová adresa používateľa Zendesk na overenie API (s príponou /token).';
$string['settings:zendesk_token'] = 'Token API Zendesk';
$string['settings:zendesk_token_desc'] = 'Token API na overenie Zendesk.';
$string['settings:offtopic_heading'] = 'Detekcia tém mimo kurzu';
$string['settings:offtopic_heading_desc'] = 'Nakonfigurujte, ako chat spracováva konverzácie mimo témy.';
$string['settings:offtopic_enabled'] = 'Povoliť detekciu tém mimo kurzu';
$string['settings:offtopic_enabled_desc'] = 'Umožnite AI detekovať a presmerovať konverzácie mimo témy.';
$string['settings:offtopic_max'] = 'Maximálny počet správ mimo témy';
$string['settings:offtopic_max_desc'] = 'Počet po sebe idúcich správ mimo témy pred prijatím opatrenia.';
$string['settings:offtopic_action'] = 'Akcia pri správach mimo témy';
$string['settings:offtopic_action_desc'] = 'Čo robiť po dosiahnutí limitu správ mimo témy.';
$string['settings:offtopic_action_warn'] = 'Upozorniť a presmerovať';
$string['settings:offtopic_action_end'] = 'Dočasne zablokovať prístup';
$string['settings:offtopic_lockout_duration'] = 'Trvanie zablokovania (minúty)';
$string['settings:offtopic_lockout_duration_desc'] = 'Trvanie (v minútach), na ktoré študent stratí prístup k AI tútorovi po prekročení limitu správ mimo témy. Predvolené: 30 minút.';
$string['settings:studyplan_heading'] = 'Plánovanie štúdia a pripomienky';
$string['settings:studyplan_heading_desc'] = 'Nakonfigurujte funkcie študijného plánu a upozornenia na pripomienky.';
$string['settings:studyplan_enabled'] = 'Povoliť plánovanie štúdia';
$string['settings:studyplan_enabled_desc'] = 'Umožnite AI tútorovi pomáhať študentom vytvárať personalizované študijné plány na základe dostupného času.';
$string['settings:reminders_email_enabled'] = 'Povoliť e-mailové pripomienky';
$string['settings:reminders_email_enabled_desc'] = 'Umožnite študentom prihlásiť sa na pripomienky štúdia prostredníctvom e-mailu.';
$string['settings:reminders_whatsapp_enabled'] = 'Povoliť pripomienky cez WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Umožnite študentom prihlásiť sa na pripomienky štúdia cez WhatsApp (vyžaduje konfiguráciu API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Koncový bod API na odosielanie správ WhatsApp (napr. Twilio, MessageBird). Musí akceptovať POST s telom JSON obsahujúcim polia „to", „from" a „body".';
$string['settings:whatsapp_api_token'] = 'Token API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Overovací token pre API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Číslo odosielateľa WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Telefónne číslo, z ktorého sa odosielajú správy WhatsApp (s kódom krajiny, napr. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Blokované krajiny pre WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Kódy krajín ISO 3166-1 alpha-2 oddelené čiarkami, kde pripomienky WhatsApp nie sú povolené kvôli miestnym predpisom (napr. „CN,IR,KP").';
$string['reminder:email_subject'] = 'Pripomienka štúdia: {$a}';
$string['reminder:email_body'] = 'Ahoj {$a->firstname},

Tu je vaša pripomienka štúdia pre „{$a->coursename}".

{$a->message}

Váš študijný plán navrhuje {$a->hours_per_week} hodín týždenne pre tento kurz.

Pokračujte v dobrej práci!

---
Ak chcete prestať dostávať tieto pripomienky, kliknite sem: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Pripomienka štúdia pre {$a->coursename}: {$a->message} (Odhlásiť sa: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Dnešný cieľ štúdia: ';
$string['unsubscribe:title'] = 'Odhlásiť sa z pripomienok štúdia';
$string['unsubscribe:success'] = 'Boli ste úspešne odhlásení z pripomienok štúdia pre tento kurz.';
$string['unsubscribe:already'] = 'Z týchto pripomienok ste sa už odhlásili.';
$string['unsubscribe:invalid'] = 'Neplatný alebo expirovaný odkaz na odhlásenie.';
$string['unsubscribe:resubscribe'] = 'Zmenili ste názor? Pripomienky môžete znova povoliť cez chat AI tútora.';
$string['task:send_reminders'] = 'Odoslať pripomienky štúdia AI tútora';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Ukladá študijné plány študentov.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID používateľa, ktorý vlastní študijný plán.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kurz, ku ktorému študijný plán patrí.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Hodiny týždenne, ktoré študent plánuje študovať.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Podrobnosti študijného plánu vo formáte JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Ukladá nastavenia pripomienok štúdia a odbery.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID používateľa prihláseniho na pripomienky.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Kanál pripomienok (e-mail alebo WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'E-mailová adresa alebo telefónne číslo pre pripomienky.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Kód krajiny používateľa na účely regulačnej zhody.';
$string['analytics:title'] = 'Analytika AI tútora';
$string['analytics:overview'] = 'Prehľad';
$string['analytics:total_conversations'] = 'Celkový počet konverzácií';
$string['analytics:total_messages'] = 'Celkový počet správ';
$string['analytics:active_students'] = 'Aktívni študenti';
$string['analytics:avg_messages_per_student'] = 'Priem. správ na študenta';
$string['analytics:offtopic_rate'] = 'Miera správ mimo témy';
$string['analytics:escalation_count'] = 'Eskalované na podporu';
$string['analytics:studyplan_adoption'] = 'Študenti so študijnými plánmi';
$string['analytics:usage_trends'] = 'Trendy používania';
$string['analytics:daily_messages'] = 'Denný objem správ';
$string['analytics:hotspots'] = 'Horúce body kurzu';
$string['analytics:hotspots_desc'] = 'Sekcie kurzu najčastejšie uvádzané v otázkach študentov. Vysoké čísla môžu naznačovať oblasti, kde študenti potrebujú viac podpory.';
$string['analytics:section'] = 'Sekcia';
$string['analytics:mention_count'] = 'Zmienky';
$string['analytics:common_prompts'] = 'Bežné vzorce otázok';
$string['analytics:common_prompts_desc'] = 'Opakujúce sa vzorce otázok od študentov. Preskúmajte ich na identifikáciu systematických medzier v obsahu kurzu.';
$string['analytics:prompt_pattern'] = 'Vzorec';
$string['analytics:frequency'] = 'Frekvencia';
$string['analytics:recent_activity'] = 'Posledná aktivita';
$string['analytics:no_data'] = 'Zatiaľ nie sú k dispozícii žiadne analytické údaje. Údaje sa zobrazia, keď študenti začnú používať AI tútora.';
$string['analytics:timerange'] = 'Časové obdobie';
$string['analytics:last_7_days'] = 'Posledných 7 dní';
$string['analytics:last_30_days'] = 'Posledných 30 dní';
$string['analytics:all_time'] = 'Celé obdobie';
$string['analytics:export'] = 'Exportovať údaje';
$string['analytics:provider_comparison'] = 'Porovnanie poskytovateľov AI';
$string['analytics:provider_comparison_desc'] = 'Porovnajte výkon poskytovateľov AI použitých v tomto kurze.';
$string['analytics:provider'] = 'Poskytovateľ';
$string['analytics:response_count'] = 'Odpovede';
$string['analytics:avg_response_length'] = 'Priem. dĺžka odpovede';
$string['analytics:total_tokens'] = 'Celkový počet tokenov';
$string['analytics:avg_tokens'] = 'Priem. tokenov / odpoveď';
$string['usersettings:title'] = 'AI asistent kurzu: Vaše údaje';
$string['usersettings:intro'] = 'Spravujte údaje chatu AI tútora a nastavenia súkromia';
$string['usersettings:privacy_info'] = 'Vaše konverzácie s AI tútorom sa ukladajú, aby vám poskytli nepretržitú podporu počas kurzu. Máte úplnú kontrolu nad týmito údajmi a môžete ich kedykoľvek vymazať.';
$string['usersettings:usage_stats'] = 'Vaše štatistiky používania';
$string['usersettings:total_messages'] = 'Celkový počet správ';
$string['usersettings:total_conversations'] = 'Konverzácie';
$string['usersettings:messages'] = 'Správy';
$string['usersettings:last_activity'] = 'Posledná aktivita';
$string['usersettings:delete_course_data'] = 'Vymazať údaje kurzu';
$string['usersettings:no_data'] = 'AI tútora ste ešte nepoužili. Vaše údaje o používaní sa zobrazia tu, keď začnete chatovať.';
$string['usersettings:delete_all_title'] = 'Vymazať všetky vaše údaje';
$string['usersettings:delete_all_warning'] = 'Táto akcia natrvalo vymaže všetky vaše konverzácie s AI tútorom vo všetkých kurzoch. Túto akciu nie je možné vrátiť späť.';
$string['usersettings:delete_all_button'] = 'Vymazať všetky moje údaje';
$string['usersettings:confirm_delete_course'] = 'Ste si istí, že chcete natrvalo vymazať všetky údaje AI tútora pre kurz „{$a}"? Túto akciu nie je možné vrátiť späť.';
$string['usersettings:confirm_delete_all'] = 'Ste si istí, že chcete natrvalo vymazať VŠETKY údaje AI tútora vo všetkých kurzoch? Túto akciu nie je možné vrátiť späť.';
$string['usersettings:data_deleted'] = 'Vaše údaje boli vymazané.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Ahoj, {$a}! Som SOLA. Ako vám môžem dnes pomôcť?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Otvoriť SOLA';
$string['chat:change_avatar'] = 'Zmeniť avatar';

// Quiz UI.
$string['chat:quiz'] = 'Absolvovať cvičný kvíz';
$string['chat:quiz_setup_title'] = 'Cvičný kvíz';
$string['chat:quiz_questions'] = 'Počet otázok';
$string['chat:quiz_topic'] = 'Téma';
$string['chat:quiz_topic_guided'] = 'Vedené AI (podľa vášho pokroku)';
$string['chat:quiz_topic_default'] = 'Aktuálny obsah kurzu';
$string['chat:quiz_topic_custom'] = 'Vlastná téma…';
$string['chat:quiz_custom_placeholder'] = 'Zadajte tému alebo otázku...';
$string['chat:quiz_start'] = 'Začať kvíz';
$string['chat:quiz_cancel'] = 'Zrušiť';
$string['chat:quiz_loading'] = 'Generovanie kvízu…';
$string['chat:quiz_error'] = 'Nepodarilo sa vygenerovať kvíz. Skúste to znova.';
$string['chat:quiz_correct'] = 'Správne!';
$string['chat:quiz_wrong'] = 'Nesprávne.';
$string['chat:quiz_next'] = 'Ďalšia otázka';
$string['chat:quiz_finish'] = 'Zobraziť výsledky';
$string['chat:quiz_score'] = 'Kvíz dokončený! Dosiahli ste {$a->score} z {$a->total}.';
$string['chat:quiz_summary'] = 'Dokončil som cvičný kvíz s {$a->total} otázkami na tému „{$a->topic}" a dosiahol som skóre {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Vzdelávacie ciele';
$string['chat:quiz_topic_modules'] = 'Téma kurzu';
$string['chat:quiz_subtopic_select'] = 'Vyberte konkrétnu položku…';
$string['chat:quiz_topic_sections'] = 'Sekcie kurzu';
$string['chat:quiz_score_great'] = 'Výborná práca! Naozaj ovládate tento materiál.';
$string['chat:quiz_score_good'] = 'Dobrá práca! Pokračujte v opakovaní na posilnenie porozumenia.';
$string['chat:quiz_score_practice'] = 'Pokračujte v cvičení. Skúste si prezrieť príslušný obsah kurzu a absolvujte kvíz znova.';
$string['chat:quiz_review_heading'] = 'Opakovanie';
$string['chat:quiz_retake'] = 'Zopakovať kvíz';
$string['chat:quiz_exit'] = 'Opustiť kvíz';
$string['chat:quiz_your_answer'] = 'Vaša odpoveď';
$string['chat:quiz_correct_answer'] = 'Správna odpoveď';

// Conversation starters.
$string['chat:starters_label'] = 'Začiatky konverzácie';
$string['chat:starter_quiz'] = 'Otestuj ma z tohto';
$string['chat:starter_explain'] = 'Vysvetli toto';
$string['chat:starter_key_concepts'] = 'Kľúčové koncepty';
$string['chat:starter_study_plan'] = 'Študijný plán';
$string['chat:starter_help_me'] = 'AI pomoc';
$string['chat:starter_ai_project_coach'] = 'AI projektový kouč';
$string['chat:starter_ell_practice'] = 'Konverzačné cvičenie';
$string['chat:starter_ell_pronunciation'] = 'ELL výslovnosť';
$string['chat:starter_ai_coach'] = 'AI kouč';
$string['chat:starter_speak'] = 'Povedzte začiatok';

// Reset / home.
$string['chat:reset'] = 'Začať odznova';

// Topic picker.
$string['chat:topic_picker_title'] = 'Na čo sa chcete zamerať?';
$string['chat:topic_picker_title_help'] = 'S čím potrebujete pomoc?';
$string['chat:topic_picker_title_explain'] = 'Čo chcete, aby som vysvetlil?';
$string['chat:topic_picker_title_study'] = 'Na akú oblasť sa chcete zamerať?';
$string['chat:topic_start'] = 'Pokračovať';

// Expand states.
$string['chat:fullscreen'] = 'Celá obrazovka';
$string['chat:exitfullscreen'] = 'Opustiť celú obrazovku';

// Settings panel.
$string['chat:language'] = 'Zmeniť jazyk';
$string['chat:settings_panel'] = 'Nastavenia';
$string['chat:settings_language'] = 'Jazyk';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Hlas';
$string['chat:settings_voice_admin'] = 'Nastavenia hlasu sa spravujú v paneli správy stránky.';

// Voice mode.
$string['chat:voice_mode'] = 'Hlasový režim';
$string['chat:voice_end'] = 'Ukončiť hlasovú reláciu';
$string['chat:voice_connecting'] = 'Pripájanie...';
$string['chat:voice_listening'] = 'Počúvam...';
$string['chat:voice_speaking'] = 'SOLA hovorí...';
$string['chat:voice_idle'] = 'Pripravený';
$string['chat:voice_error'] = 'Hlasové pripojenie zlyhalo. Skontrolujte nastavenia.';
$string['chat:quiz_locked'] = 'SOLA je počas kvízov pozastavená na zachovanie akademickej integrity. Veľa šťastia!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Poznámky';

// History panel.
$string['chat:history_title'] = 'Poznámky a história konverzácie';
$string['task:send_inactivity_reminders'] = 'Odoslať týždenné e-maily o neaktivite';
$string['task:run_meta_ai_query'] = 'Spustiť naplánovaný dotaz Radar učenia analytiky';
$string['messageprovider:study_notes'] = 'Poznámky zo študijnej relácie';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Doručovanie frontendu';
$string['settings:cdn_heading_desc'] = 'Servírujte frontendové súbory SOLA (JS/CSS) z externého CDN namiesto zo súborového systému Moodle. To umožňuje aktualizácie frontendu bez aktualizácie pluginu. Ponechajte CDN URL prázdne na použitie lokálnych súborov pluginu.';
$string['settings:cdn_url'] = 'Základná CDN URL';
$string['settings:cdn_url_desc'] = 'Základná URL, kde sú hostované sola.min.js a sola.min.css. Príklad: https://your-org.github.io/sola-cdn. Ponechajte prázdne na použitie lokálnych súborov pluginu.';
$string['settings:cdn_version'] = 'Verzia CDN súborov';
$string['settings:cdn_version_desc'] = 'Reťazec verzie pridávaný k CDN URL pre cache busting. Aktualizujte po každom CDN nasadení (napr. 3.2.4 alebo commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Celkové využitie';
$string['analytics:tab_bycourse'] = 'Podľa kurzu';
$string['analytics:tab_comparison'] = 'AI vs nepoužívatelia';
$string['analytics:tab_byunit'] = 'Podľa jednotky';
$string['analytics:tab_usagetypes'] = 'Typy využitia';
$string['analytics:tab_themes'] = 'Témy';
$string['analytics:tab_feedback'] = 'Spätná väzba AI';
$string['analytics:total_students'] = 'Celkom študentov';
$string['analytics:active_users'] = 'Aktívni používatelia AI';
$string['analytics:msgs_per_student'] = 'Správ na študenta';
$string['analytics:avg_session'] = 'Priemerná dĺžka relácie';
$string['analytics:return_rate'] = 'Miera návratu';
$string['analytics:total_sessions'] = 'Celkom relácií';
$string['analytics:thumbs_up'] = 'Palec hore';
$string['analytics:thumbs_down'] = 'Palec dole';
$string['analytics:hallucination_flags'] = 'Označenia nepresností';
$string['analytics:msgs_to_resolution'] = 'Správ do vyriešenia';
$string['analytics:helpful'] = 'Užitočné';
$string['analytics:not_helpful'] = 'Neužitočné';
$string['analytics:flag_hallucination'] = 'Táto odpoveď obsahuje nepresné informácie';
$string['analytics:submit_rating'] = 'Odoslať';
$string['analytics:thanks_feedback'] = 'Ďakujeme za spätnú väzbu';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Vysvetli túto stránku';
$string['chat:starter_ask_anything'] = 'Opýtajte sa čokoľvek';
$string['chat:starter_review_practice'] = 'Opakovanie a precvičovanie';
$string['chat:history_saved_subtitle'] = 'Uložené odpovede zostávajú na tomto zariadení pre tento kurz.';
$string['chat:history_saved_empty'] = 'Uložte odpoveď AI, aby ste ju videli tu.';
$string['chat:history_views_label'] = 'Zobrazenia histórie';
$string['chat:history_view_saved'] = 'Uložené';
$string['chat:history_view_recent'] = 'História';
$string['chat:debug_refresh'] = 'Obnoviť';
$string['chat:debug_copy_all'] = 'Kopírovať všetko';
$string['chat:debug_close'] = 'Zavrieť';
$string['chat:language_switch'] = 'Zmeniť jazyk';
$string['chat:language_dismiss'] = 'Zamietnuť návrh jazyka';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Vyberte poskytovateľa LLM';
$string['chat:llm_model_label'] = 'Model';
$string['chat:llm_model_select'] = 'Vyberte model LLM';
$string['chat:footer_usertesting'] = 'Testovanie použiteľnosti';
$string['chat:footer_feedback'] = 'Spätná väzba';
$string['chat:voice_panel_title'] = 'Hovorte s {$a} (Experimentálne)';

// Additional translated strings.
$string['chat:debug_context'] = 'Ladenie kontextu';
$string['chat:debug_context_browser'] = 'Snímka prehliadača';
$string['chat:debug_context_copy'] = 'Kopírovať';
$string['chat:debug_context_prompt'] = 'Odpoveď servera';
$string['chat:debug_context_request'] = 'Posledná SSE požiadavka';
$string['chat:debug_context_toggle'] = 'Prepnúť';
$string['chat:history_empty'] = 'Žiadne konverzácie.';
$string['chat:history_refresh'] = 'Obnoviť';
$string['chat:history_subtitle'] = 'Vaše posledné správy.';
$string['chat:starter_explain_prompt'] = 'Vysvetlite najdôležitejší koncept?';
$string['chat:starter_help_lesson'] = 'Vysvetlite';
$string['chat:starter_help_lesson_prompt'] = 'Pomôžte mi s lekciou. Zhrňte kľúčové koncepty.';
$string['chat:starter_prompt_coach'] = 'AI tréner';
$string['chat:starter_quick_study'] = 'Rýchle štúdium';
$string['chat:starter_study_plan_prompt'] = 'Chcem naplánovať učenie. Spýtajte sa: (1) cieľ, (2) čas. Aktualizujte plán.';
$string['chat:voice_copy'] = 'Hlasový rozhovor s asistentom.';
$string['chat:voice_ready'] = 'Pripravené';
$string['chat:voice_start'] = 'Začať';
$string['chat:voice_title'] = 'Hovorte so SOLA';
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
$string['mobile_chip_concepts'] = 'Kľúčové koncepty';
$string['mobile_chip_quiz'] = 'Kvíz';
$string['mobile_chip_studyplan'] = 'Študijný plán';
$string['mobile_clear'] = 'Vymazať históriu';
$string['mobile_disabled'] = 'SOLA nie je dostupná pre tento kurz.';
$string['mobile_placeholder'] = 'Položte otázku...';
$string['mobile_welcome'] = 'Ahoj, {$a}!';
$string['mobile_welcome_sub'] = 'Som SOLA, váš študijný asistent. Ako vám môžem pomôcť?';
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
$string['rubric:encourage_high'] = 'Vynikajúca práca! Pokračujte!';
$string['rubric:encourage_low'] = 'Dobrý začiatok! Pravidelné cvičenie pomôže.';
$string['rubric:encourage_mid'] = 'Dobrá snaha! Pokračujte v cvičení.';
$string['rubric:overall'] = 'Celkovo';
$string['rubric:practice_again'] = 'Cvičiť znova';
$string['rubric:score_title_conversation'] = 'Skóre konverzácie';
$string['rubric:score_title_pronunciation'] = 'Skóre výslovnosti';
$string['rubric:scoring'] = 'Vyhodnocovanie...';
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
$string['demo:title'] = 'Testovacie prostredie';
$string['demo:heading'] = 'Testovacie prostredie';
$string['demo:intro'] = 'Táto stránka vytvorí testovací kurz, ktorý je <strong>skrytý pred študentmi</strong> (visible=0), a naplní ho fiktívnymi študentmi, AI konverzáciami, hodnoteniami a spätnou väzbou. Užitočné na náhľad Analytics Dashboard alebo overenie zmien pluginu bez ovplyvnenia reálne zapísaných študentov.';
$string['demo:step1'] = 'Krok 1: testovací kurz';
$string['demo:step2'] = 'Krok 2: pridať fiktívnych študentov a AI chaty';
$string['demo:course_exists'] = 'Testovací kurz existuje: <strong>{$a->fullname}</strong> (krátky názov <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'skrytý';
$string['demo:badge_visible'] = 'viditeľný pre študentov';
$string['demo:no_course'] = 'Nenašiel sa žiadny testovací kurz. Kliknite nižšie na jeho vytvorenie.';
$string['demo:create_btn'] = 'Vytvoriť skrytý testovací kurz';
$string['demo:open_course'] = 'Otvoriť kurz &rarr;';
$string['demo:seed_intro'] = 'Vytvorí demo_student_001, demo_student_002, ..., zapíše ich do testovacieho kurzu a vloží syntetické konverzácie, správy, hodnotenia a spätnú väzbu. Spustite znova pre pridanie ďalších dát, alebo zaškrtnite „najprv vyčistiť“ pre reštart.';
$string['demo:users_label'] = 'Používatelia';
$string['demo:weeks_label'] = 'Týždne';
$string['demo:clear_label'] = 'Najprv vymazať existujúcich používateľov demo_*';
$string['demo:seed_btn'] = 'Pridať študentov a chaty';
$string['demo:view_analytics'] = 'Zobraziť analýzu pre tento kurz &rarr;';
$string['demo:footer'] = 'Dáta vytvorené tu sa nachádzajú v štandardných tabuľkách používateľov / zápisov Moodle a vo vlastných tabuľkách konverzácií pluginu. Všetci fiktívni používatelia majú používateľské mená začínajúce sa na <code>demo_student_</code>, takže sú ľahko filtrovateľní alebo odstrániteľní. Ich odstránite tak, že spustíte krok naplnenia znova so zaškrtnutou možnosťou „Najprv vymazať existujúcich používateľov demo_*“.';
$string['demo:course_fullname'] = 'Testovací kurz SOLA (skrytý)';
$string['demo:notify_created'] = 'Testovací kurz pripravený: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Vytvorenie kurzu zlyhalo: {$a}';
$string['demo:notify_seeded'] = 'Pridané: {$a->users} používateľov, {$a->conversations} konverzácií, {$a->messages} správ, {$a->ratings} hodnotení, {$a->feedback} záznamov spätnej väzby.';
$string['demo:notify_seed_fail'] = 'Pridanie dát zlyhalo: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Náklady na tokeny a analýzy &rarr;';
$string['toc:testing'] = 'Testovacie prostredie &rarr;';
$string['toc:back_to_course'] = '&larr; Späť na {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Binárny súbor pdftotext sa nenašiel; extrakcia PDF je zakázaná.';
$string['rag:pdftotext_available'] = 'pdftotext zistený v {$a}.';
$string['rag:docx_unavailable'] = 'Rozšírenie PHP ZipArchive nie je k dispozícii; extrakcia DOCX je zakázaná.';
$string['rag:h5p_unavailable'] = 'Obsah H5P sa nepodarilo prečítať; preskakuje sa.';
$string['rag:scorm_too_large'] = 'Balík SCORM prekračuje nakonfigurovaný limit veľkosti ({$a} MB); preskakuje sa.';
$string['rag:scorm_unzip_failed'] = 'Balík SCORM sa nepodarilo rozbaliť; preskakuje sa.';
$string['rag:transcript_fetch_failed'] = 'Nepodarilo sa načítať prepis z {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL prepisu blokovaná výzvou Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Zistené vložené médiá: {$a}';
$string['rag:embed_transcript_attached'] = 'Prepis priložený pre {$a}';

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
