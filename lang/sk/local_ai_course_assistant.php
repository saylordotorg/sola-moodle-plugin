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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'Poskytovateľ AI';
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
$string['chat:clear'] = 'Vymazať históriu';
$string['chat:clear_confirm'] = 'Ste si istí, že chcete vymazať históriu chatu pre tento kurz?';
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
$string['settings:provider_groq'] = 'Groq';
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
