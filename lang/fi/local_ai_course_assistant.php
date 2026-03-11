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
 * Language strings for local_ai_course_assistant — Finnish.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI-kurssiavustaja';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Tallentaa AI-tutorin keskustelut käyttäjä- ja kurssikohtaisesti.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Keskustelun omistavan käyttäjän tunniste.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Kurssin tunniste, johon keskustelu kuuluu.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Keskustelun otsikko.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Keskustelun luontiaika.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Keskustelun viimeisimmän muokkauksen aika.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Tallentaa yksittäiset viestit AI-tutorin keskusteluista.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Viestin lähettäneen käyttäjän tunniste.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Kurssin tunniste, johon viesti kuuluu.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Viestin lähettäjän rooli (käyttäjä tai avustaja).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Viestin sisältö.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Viestiin käytettyjen tokenien määrä.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Viestin luontiaika.';
$string['ai_course_assistant:use'] = 'Käytä AI-tutorikeskustelua';
$string['ai_course_assistant:viewanalytics'] = 'Tarkastele AI-tutorikeskustelun analytiikkaa';
$string['ai_course_assistant:manage'] = 'Hallitse AI-tutorikeskustelun asetuksia (ylläpitäjärooli)';
$string['settings:enabled'] = 'Ota AI-kurssiavustaja käyttöön';
$string['settings:enabled_desc'] = 'Ota AI-kurssiavustajan widget käyttöön tai poista se käytöstä kurssisivuilla.';
$string['settings:provider'] = 'AI-palveluntarjoaja';
$string['settings:provider_desc'] = 'Valitse keskustelun täydennyksiin käytettävä AI-palveluntarjoaja.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Paikallinen)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Mukautettu (OpenAI-yhteensopiva)';
$string['settings:apikey'] = 'API-avain';
$string['settings:apikey_desc'] = 'API-avain valitulle palveluntarjoajalle. Ei vaadita Ollamalle.';
$string['settings:model'] = 'Mallin nimi';
$string['settings:model_desc'] = 'Käytettävä malli. Oletusarvo riippuu palveluntarjoajasta (esim. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API:n perus-URL';
$string['settings:apibaseurl_desc'] = 'API:n perus-URL. Täytetään automaattisesti palveluntarjoajan mukaan, mutta voidaan korvata. Jätä tyhjäksi käyttääksesi palveluntarjoajan oletusarvoa.';
$string['settings:systemprompt'] = 'Järjestelmäkehotteen malli';
$string['settings:systemprompt_desc'] = 'AI:lle lähetetty järjestelmäkehote. Käytä paikkamerkkejä: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Olet hyödyllinen AI-tutori kurssille "{{coursename}}". Opiskelijan rooli on {{userrole}}.

Kurssilla käsitellyt aiheet:
{{coursetopics}}

Auta opiskelijaa ymmärtämään kurssin sisältö. Ole kannustava, selkeä ja pedagogisesti perusteellinen.';
$string['settings:temperature'] = 'Lämpötila';
$string['settings:temperature_desc'] = 'Säätää satunnaisuutta. Matalammat arvot ovat kohdennetumpia, korkeammat luovempia. Alue: 0,0 – 2,0.';
$string['settings:maxhistory'] = 'Keskusteluhistorian enimmäismäärä';
$string['settings:maxhistory_desc'] = 'API-pyyntöihin sisällytettävien viestiparien enimmäismäärä. Vanhemmat viestit poistetaan.';
$string['settings:avatar'] = 'Keskustelun avatar';
$string['settings:avatar_desc'] = 'Valitse avatar-kuvake keskusteluwidgetin painikkeelle.';
$string['settings:avatar_saylor'] = 'Saylor Academy -logo (oletus)';
$string['settings:position'] = 'Widgetin sijainti';
$string['settings:position_desc'] = 'Keskusteluwidgetin sijainti sivulla.';
$string['settings:position_br'] = 'Oikeassa alakulmassa';
$string['settings:position_bl'] = 'Vasemmassa alakulmassa';
$string['settings:position_tr'] = 'Oikeassa yläkulmassa';
$string['settings:position_tl'] = 'Vasemmassa yläkulmassa';
$string['chat:settings'] = 'Lisäosan asetukset';
$string['analytics:viewdashboard'] = 'Näytä analytiikkanäkymä';
$string['coursesettings:title'] = 'Kurssin AI-asetukset';
$string['coursesettings:enabled'] = 'Ota kurssikohtaiset ohitukset käyttöön';
$string['coursesettings:enabled_desc'] = 'Kun käytössä, alla olevat asetukset ohittavat globaalin AI-palveluntarjoajan konfiguraation vain tällä kurssilla. Jätä kentät tyhjiksi periäksesi globaalin arvon.';
$string['coursesettings:using_global'] = 'Käytetään globaalia asetusta';
$string['coursesettings:saved'] = 'Kurssin AI-asetukset tallennettu.';
$string['coursesettings:global_settings_link'] = 'Globaalit AI-asetukset';
$string['lang:switch'] = 'Kyllä, vaihda';
$string['lang:dismiss'] = 'Ei kiitos';
$string['lang:change'] = 'Vaihda kieli';
$string['lang:english'] = 'Englanti';
$string['chat:title'] = 'AI-tutori';
$string['chat:placeholder'] = 'Esitä kysymys...';
$string['chat:send'] = 'Lähetä';
$string['chat:close'] = 'Sulje keskustelu';
$string['chat:open'] = 'Avaa AI-tutorikeskustelu';
$string['chat:clear'] = 'Tyhjennä historia';
$string['chat:clear_confirm'] = 'Haluatko varmasti tyhjentää keskusteluhistoriasi tältä kurssilta?';
$string['chat:copy'] = 'Kopioi keskustelu';
$string['chat:copied'] = 'Keskustelu kopioitu leikepöydälle';
$string['chat:copy_failed'] = 'Keskustelun kopiointi epäonnistui';
$string['chat:greeting'] = 'Hei! Olen AI-tutorisi tälle kurssille. Miten voin auttaa sinua tänään?';
$string['chat:thinking'] = 'Mietin...';
$string['chat:error'] = 'Valitettavasti tapahtui virhe. Yritä uudelleen.';
$string['chat:error_auth'] = 'Todennusvirhe. Ota yhteyttä ylläpitäjääsi.';
$string['chat:error_ratelimit'] = 'Liian monta pyyntöä. Odota hetki ja yritä uudelleen.';
$string['chat:error_unavailable'] = 'AI-palvelu on tilapäisesti poissa käytöstä. Yritä myöhemmin uudelleen.';
$string['chat:error_notconfigured'] = 'AI-tutoria ei ole vielä määritetty. Ota yhteyttä ylläpitäjääsi.';
$string['chat:expand'] = 'Laajenna keskustelu';
$string['chat:collapse'] = 'Pienennä keskustelu';
$string['chat:mic'] = 'Sano kysymyksesi ääneen';
$string['chat:mic_error'] = 'Mikrofonvirhe. Tarkista selaimesi käyttöoikeudet.';
$string['chat:mic_unsupported'] = 'Tämä selain ei tue äänisyötettä.';
$string['chat:newline_hint'] = 'Shift+Enter uudelle riville';
$string['chat:you'] = 'Sinä';
$string['chat:assistant'] = 'AI-tutori';
$string['chat:history_loaded'] = 'Edellinen keskustelu ladattu.';
$string['chat:history_cleared'] = 'Keskusteluhistoria tyhjennetty.';
$string['chat:offtopic_warning'] = 'Kysymyksesi ei näytä liittyvän tähän kurssiin. Pysy aiheessa, jotta voin auttaa sinua parhaiten!';
$string['chat:offtopic_ended'] = 'Pääsysi AI-tutoriin on väliaikaisesti keskeytetty {$a} minuutiksi, koska keskustelu poikkesi aiheesta liian usein. Käytä tämä aika kurssimateriaalisi kertaamiseen ja yritä myöhemmin uudelleen.';
$string['chat:offtopic_locked'] = 'Pääsysi AI-tutoriin on väliaikaisesti keskeytetty. Voit yrittää uudelleen {$a} minuutin kuluttua. Keskity palatessasi kurssiin liittyviin kysymyksiin.';
$string['chat:escalated_to_support'] = 'En pystynyt vastaamaan kysymykseesi täysin, joten olen luonut tukipyynnön puolestasi. Tukitiimin jäsen ottaa sinuun yhteyttä. Tukipyynnön numero on: {$a}';
$string['chat:studyplan_intro'] = 'Voin auttaa sinua luomaan opiskelusuunnitelman tälle kurssille! Kerro vain, kuinka monta tuntia viikossa voit käyttää opiskeluun, ja autan sinua rakentamaan jäsennellyn suunnitelman.';
$string['settings:faq_heading'] = 'UKK ja tuki';
$string['settings:faq_heading_desc'] = 'Määritä keskitetty UKK ja Zendesk-tukipyyntöintegraatio.';
$string['settings:faq_content'] = 'UKK-sisältö';
$string['settings:faq_content_desc'] = 'Syötä UKK-merkinnät (yksi per rivi muodossa: K: kysymys | V: vastaus). Nämä annetaan AI:lle yleisten tukikysymysten vastaamiseen.';
$string['settings:zendesk_enabled'] = 'Ota Zendesk-eskalointi käyttöön';
$string['settings:zendesk_enabled_desc'] = 'Kun AI ei pysty ratkaisemaan tukikysymystä, Zendesk-tukipyyntö luodaan automaattisesti keskustelun yhteenvedolla.';
$string['settings:zendesk_subdomain'] = 'Zendesk-alidomain';
$string['settings:zendesk_subdomain_desc'] = 'Zendesk-alidomainisi (esim. "yritykseni" osoitteelle yritykseni.zendesk.com).';
$string['settings:zendesk_email'] = 'Zendesk API -sähköposti';
$string['settings:zendesk_email_desc'] = 'Zendesk-käyttäjän sähköpostiosoite API-todennusta varten (/token-liitteellä).';
$string['settings:zendesk_token'] = 'Zendesk API -token';
$string['settings:zendesk_token_desc'] = 'API-token Zendesk-todennusta varten.';
$string['settings:offtopic_heading'] = 'Aiheen ulkopuolisen sisällön tunnistus';
$string['settings:offtopic_heading_desc'] = 'Määritä, miten keskustelu käsittelee aiheesta poikkeavia keskusteluja.';
$string['settings:offtopic_enabled'] = 'Ota aiheen ulkopuolisen sisällön tunnistus käyttöön';
$string['settings:offtopic_enabled_desc'] = 'Pyydä AI:ta tunnistamaan ja ohjaamaan aiheesta poikkeavia keskusteluja.';
$string['settings:offtopic_max'] = 'Aiheen ulkopuolisten viestien enimmäismäärä';
$string['settings:offtopic_max_desc'] = 'Peräkkäisten aiheen ulkopuolisten viestien määrä ennen toimenpiteisiin ryhtymistä.';
$string['settings:offtopic_action'] = 'Toimenpide aiheen ulkopuolisessa tilanteessa';
$string['settings:offtopic_action_desc'] = 'Mitä tehdään, kun aiheen ulkopuolinen raja saavutetaan.';
$string['settings:offtopic_action_warn'] = 'Varoita ja ohjaa uudelleen';
$string['settings:offtopic_action_end'] = 'Estä pääsy väliaikaisesti';
$string['settings:offtopic_lockout_duration'] = 'Eston kesto (minuuteissa)';
$string['settings:offtopic_lockout_duration_desc'] = 'Kesto (minuuteissa), jonka opiskelija menettää pääsyn AI-tutoriin aiheen ulkopuolisen rajan ylittämisen jälkeen. Oletus: 30 minuuttia.';
$string['settings:studyplan_heading'] = 'Opiskelun suunnittelu ja muistutukset';
$string['settings:studyplan_heading_desc'] = 'Määritä opiskelun suunnittelutoiminnot ja muistutusilmoitukset.';
$string['settings:studyplan_enabled'] = 'Ota opiskelun suunnittelu käyttöön';
$string['settings:studyplan_enabled_desc'] = 'Anna AI-tutorin auttaa opiskelijoita luomaan henkilökohtaisia opiskelusuunnitelmia käytettävissä olevan ajan perusteella.';
$string['settings:reminders_email_enabled'] = 'Ota sähköpostimuistutukset käyttöön';
$string['settings:reminders_email_enabled_desc'] = 'Anna opiskelijoiden tilata opiskelumuistutuksia sähköpostitse.';
$string['settings:reminders_whatsapp_enabled'] = 'Ota WhatsApp-muistutukset käyttöön';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Anna opiskelijoiden tilata opiskelumuistutuksia WhatsAppilla (vaatii WhatsApp API:n määrityksen).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API -URL';
$string['settings:whatsapp_api_url_desc'] = 'API-päätepiste WhatsApp-viestien lähettämiseen (esim. Twilio, MessageBird). Täytyy hyväksyä POST JSON-rungolla, joka sisältää kentät "to", "from" ja "body".';
$string['settings:whatsapp_api_token'] = 'WhatsApp API -token';
$string['settings:whatsapp_api_token_desc'] = 'Todennustoken WhatsApp API:lle.';
$string['settings:whatsapp_from_number'] = 'WhatsApp-lähettäjänumero';
$string['settings:whatsapp_from_number_desc'] = 'Puhelinnumero, josta WhatsApp-viestit lähetetään (maakoodilla, esim. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Estetyt maat WhatsAppille';
$string['settings:whatsapp_blocked_countries_desc'] = 'Pilkuilla erotetut ISO 3166-1 alpha-2 -maakoodit, joissa WhatsApp-muistutuksia ei sallita paikallisten säännösten vuoksi (esim. "CN,IR,KP").';
$string['reminder:email_subject'] = 'Opiskelumuistutus: {$a}';
$string['reminder:email_body'] = 'Hei {$a->firstname},

tässä on opiskelumuistutuksesi kurssille "{$a->coursename}".

{$a->message}

Opiskelusuunnitelmasi ehdottaa {$a->hours_per_week} tuntia viikossa tälle kurssille.

Jatka hyvää työtä!

---
Peruuttaaksesi nämä muistutukset, napsauta tästä: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Opiskelumuistutus kurssille {$a->coursename}: {$a->message} (Peruuta tilaus: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Päivän opiskelutavoite: ';
$string['unsubscribe:title'] = 'Peruuta opiskelumuistutukset';
$string['unsubscribe:success'] = 'Opiskelumuistutukset tälle kurssille on peruutettu onnistuneesti.';
$string['unsubscribe:already'] = 'Olet jo peruuttanut nämä muistutukset.';
$string['unsubscribe:invalid'] = 'Virheellinen tai vanhentunut peruutuslinkki.';
$string['unsubscribe:resubscribe'] = 'Muutitko mielesi? Voit ottaa muistutukset uudelleen käyttöön AI-tutorikeskustelun kautta.';
$string['task:send_reminders'] = 'Lähetä AI-tutorin opiskelumuistutukset';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Tallentaa opiskelijoiden opiskelusuunnitelmat.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Opiskelusuunnitelman omistavan käyttäjän tunniste.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kurssi, johon opiskelusuunnitelma kuuluu.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Tuntia viikossa, jotka opiskelija suunnittelee opiskelevansa.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Opiskelusuunnitelman tiedot JSON-muodossa.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Tallentaa opiskelumuistutusten asetukset ja tilaukset.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Muistutukset tilanneen käyttäjän tunniste.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Muistutuskanava (sähköposti tai WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Sähköpostiosoite tai puhelinnumero muistutuksille.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Käyttäjän maakoodi sääntelynmukaisuutta varten.';
$string['analytics:title'] = 'AI-tutorin analytiikka';
$string['analytics:overview'] = 'Yleiskatsaus';
$string['analytics:total_conversations'] = 'Keskusteluja yhteensä';
$string['analytics:total_messages'] = 'Viestejä yhteensä';
$string['analytics:active_students'] = 'Aktiiviset opiskelijat';
$string['analytics:avg_messages_per_student'] = 'Keskim. viestejä / opiskelija';
$string['analytics:offtopic_rate'] = 'Aiheesta poikkeamisen osuus';
$string['analytics:escalation_count'] = 'Eskaloitu tukeen';
$string['analytics:studyplan_adoption'] = 'Opiskelijat, joilla on opiskelusuunnitelma';
$string['analytics:usage_trends'] = 'Käyttötrendit';
$string['analytics:daily_messages'] = 'Päivittäinen viestimäärä';
$string['analytics:hotspots'] = 'Kurssin kipupisteet';
$string['analytics:hotspots_desc'] = 'Kurssiosiot, joihin viitataan useimmin opiskelijoiden kysymyksissä. Korkeat luvut voivat osoittaa alueita, joissa opiskelijat tarvitsevat enemmän tukea.';
$string['analytics:section'] = 'Osio';
$string['analytics:mention_count'] = 'Maininnat';
$string['analytics:common_prompts'] = 'Yleiset kysymysmallit';
$string['analytics:common_prompts_desc'] = 'Toistuvat kysymysmallit opiskelijoilta. Tarkastele näitä tunnistaaksesi järjestelmälliset puutteet kurssin sisällössä.';
$string['analytics:prompt_pattern'] = 'Malli';
$string['analytics:frequency'] = 'Esiintymistiheys';
$string['analytics:recent_activity'] = 'Viimeaikainen toiminta';
$string['analytics:no_data'] = 'Analytiikkatietoja ei ole vielä saatavilla. Tiedot näkyvät, kun opiskelijat alkavat käyttää AI-tutoria.';
$string['analytics:timerange'] = 'Aikaväli';
$string['analytics:last_7_days'] = 'Viimeiset 7 päivää';
$string['analytics:last_30_days'] = 'Viimeiset 30 päivää';
$string['analytics:all_time'] = 'Koko ajanjakso';
$string['analytics:export'] = 'Vie tiedot';
$string['analytics:provider_comparison'] = 'AI-palveluntarjoajien vertailu';
$string['analytics:provider_comparison_desc'] = 'Vertaile tällä kurssilla käytettyjen AI-palveluntarjoajien suorituskykyä.';
$string['analytics:provider'] = 'Palveluntarjoaja';
$string['analytics:response_count'] = 'Vastaukset';
$string['analytics:avg_response_length'] = 'Keskim. vastauksen pituus';
$string['analytics:total_tokens'] = 'Tokeneita yhteensä';
$string['analytics:avg_tokens'] = 'Keskim. tokeneita / vastaus';
$string['usersettings:title'] = 'AI-kurssiavustaja: Tietosi';
$string['usersettings:intro'] = 'Hallitse AI-tutorikeskustelun tietoja ja yksityisyysasetuksia';
$string['usersettings:privacy_info'] = 'Keskustelusi AI-tutorin kanssa tallennetaan tarjotaksemme sinulle jatkuvaa tukea kurssin aikana. Sinulla on täysi hallinta näihin tietoihin ja voit poistaa ne milloin tahansa.';
$string['usersettings:usage_stats'] = 'Käyttötilastosi';
$string['usersettings:total_messages'] = 'Viestejä yhteensä';
$string['usersettings:total_conversations'] = 'Keskustelut';
$string['usersettings:messages'] = 'Viestit';
$string['usersettings:last_activity'] = 'Viimeinen toiminta';
$string['usersettings:delete_course_data'] = 'Poista kurssin tiedot';
$string['usersettings:no_data'] = 'Et ole vielä käyttänyt AI-tutoria. Käyttötietosi näkyvät täällä, kun aloitat keskustelun.';
$string['usersettings:delete_all_title'] = 'Poista kaikki tietosi';
$string['usersettings:delete_all_warning'] = 'Tämä toiminto poistaa pysyvästi kaikki AI-tutorikeskustelusi kaikilla kursseilla. Tätä toimintoa ei voi peruuttaa.';
$string['usersettings:delete_all_button'] = 'Poista kaikki tietoni';
$string['usersettings:confirm_delete_course'] = 'Haluatko varmasti poistaa pysyvästi kaikki AI-tutoritietosi kurssilta "{$a}"? Tätä toimintoa ei voi peruuttaa.';
$string['usersettings:confirm_delete_all'] = 'Haluatko varmasti poistaa pysyvästi KAIKKI AI-tutoritietosi kaikilta kursseilta? Tätä toimintoa ei voi peruuttaa.';
$string['usersettings:data_deleted'] = 'Tietosi on poistettu.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Hei {$a}! Olen SOLA, Saylor-verkko-oppimisavustajasi.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Avaa SOLA';
$string['chat:change_avatar'] = 'Vaihda avatar';

// Quiz UI.
$string['chat:quiz'] = 'Tee harjoituskoe';
$string['chat:quiz_setup_title'] = 'Harjoituskoe';
$string['chat:quiz_questions'] = 'Kysymysten määrä';
$string['chat:quiz_topic'] = 'Aihe';
$string['chat:quiz_topic_guided'] = 'AI-ohjattu (edistymisesi perusteella)';
$string['chat:quiz_topic_default'] = 'Nykyinen kurssin sisältö';
$string['chat:quiz_topic_custom'] = 'Mukautettu aihe…';
$string['chat:quiz_custom_placeholder'] = 'Syötä aihe tai kysymys...';
$string['chat:quiz_start'] = 'Aloita koe';
$string['chat:quiz_cancel'] = 'Peruuta';
$string['chat:quiz_loading'] = 'Luodaan koetta…';
$string['chat:quiz_error'] = 'Koetta ei voitu luoda. Yritä uudelleen.';
$string['chat:quiz_correct'] = 'Oikein!';
$string['chat:quiz_wrong'] = 'Väärin.';
$string['chat:quiz_next'] = 'Seuraava kysymys';
$string['chat:quiz_finish'] = 'Näytä tulokset';
$string['chat:quiz_score'] = 'Koe suoritettu! Sait {$a->score} / {$a->total}.';
$string['chat:quiz_summary'] = 'Suoritin juuri {$a->total} kysymyksen harjoituskokeen aiheesta "{$a->topic}" ja sain tuloksen {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Oppimistavoitteet';
$string['chat:quiz_topic_modules'] = 'Kurssin aihe';
$string['chat:quiz_subtopic_select'] = 'Valitse tietty kohde…';
$string['chat:quiz_topic_sections'] = 'Kurssin osiot';
$string['chat:quiz_score_great'] = 'Erinomaista työtä! Hallitset tämän aiheen todella hyvin.';
$string['chat:quiz_score_good'] = 'Hyvä suoritus! Jatka kertaamista vahvistaaksesi ymmärrystäsi.';
$string['chat:quiz_score_practice'] = 'Jatka harjoittelua. Kertaa ensin vastaava kurssin sisältö ja yritä koetta sitten uudelleen.';
$string['chat:quiz_review_heading'] = 'Katsaus';
$string['chat:quiz_retake'] = 'Tee koe uudelleen';
$string['chat:quiz_exit'] = 'Poistu kokeesta';
$string['chat:quiz_your_answer'] = 'Vastauksesi';
$string['chat:quiz_correct_answer'] = 'Oikea vastaus';

// Conversation starters.
$string['chat:starters_label'] = 'Keskustelun aloitukset';
$string['chat:starter_quiz'] = 'Testaa minua';
$string['chat:starter_explain'] = 'Selitä tämä';
$string['chat:starter_key_concepts'] = 'Avainkäsitteet';
$string['chat:starter_study_plan'] = 'Opiskelusuunnitelma';
$string['chat:starter_help_me'] = 'AI-apu';
$string['chat:starter_ell_practice'] = 'Harjoittele puhumista';
$string['chat:starter_ell_pronunciation'] = 'ELL-ääntäminen';
$string['chat:starter_ai_coach'] = 'AI-valmentaja';
$string['chat:starter_speak'] = 'Sano aloitus';

// Reset / home.
$string['chat:reset'] = 'Aloita alusta';

// Topic picker.
$string['chat:topic_picker_title'] = 'Mihin haluat keskittyä?';
$string['chat:topic_picker_title_help'] = 'Missä tarvitset apua?';
$string['chat:topic_picker_title_explain'] = 'Mitä haluat minun selittävän?';
$string['chat:topic_picker_title_study'] = 'Mihin aiheeseen haluat keskittyä?';
$string['chat:topic_start'] = 'Jatka';

// Expand states.
$string['chat:fullscreen'] = 'Koko näyttö';
$string['chat:exitfullscreen'] = 'Poistu koko näytöstä';

// Settings panel.
$string['chat:language'] = 'Vaihda kieli';
$string['chat:settings_panel'] = 'Asetukset';
$string['chat:settings_language'] = 'Kieli';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Ääni';
$string['chat:settings_voice_admin'] = 'Ääniasetuksia hallitaan sivuston ylläpidon paneelissa.';

// Voice mode.
$string['chat:voice_mode'] = 'Äänitila';
$string['chat:voice_end'] = 'Lopeta ääni-istunto';
$string['chat:voice_connecting'] = 'Yhdistetään...';
$string['chat:voice_listening'] = 'Kuunnellaan...';
$string['chat:voice_speaking'] = 'SOLA puhuu...';
$string['chat:voice_idle'] = 'Valmis';
$string['chat:voice_error'] = 'Ääniyhteys epäonnistui. Tarkista asetuksesi.';
$string['chat:quiz_locked'] = 'SOLA on tauolla kokeiden aikana akateemisen rehellisyyden säilyttämiseksi. Onnea!';
$string['task:send_inactivity_reminders'] = 'Lähetä viikoittaiset muistutussähköpostit toimettomuudesta';
$string['messageprovider:study_notes'] = 'Opiskeluistunnon muistiinpanot';
