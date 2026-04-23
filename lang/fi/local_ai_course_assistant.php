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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Oletus uusille kursseille';
$string['settings:default_course_mode_desc'] = 'Määrittää, näytetäänkö SOLA kurssilla, kun kurssikohtaista valintaa ei ole tehty. Uusissa asennuksissa oletuksena on "Oletuksena pois käytöstä", jotta ylläpitäjät voivat ottaa käyttöön kurssi kurssilta Analytics-sivulta tai Course AI Settings -sivulta.';
$string['settings:default_course_mode_per_course'] = 'Oletuksena pois käytöstä (ota käyttöön kurssikohtaisesti)';
$string['settings:default_course_mode_all'] = 'Käytössä kaikilla kursseilla';
$string['settings:auto_open'] = 'Avaa automaattisesti ensimmäisellä käynnillä';
$string['settings:auto_open_desc'] = 'Kun käytössä, SOLA-laatikko avautuu automaattisesti, kun opiskelija saapuu kullekin kurssille ensimmäistä kertaa. Saman kurssin myöhemmät sivulataukset eivät avaa laatikkoa uudelleen — tila tallennetaan kurssikohtaisesti opiskelijan selaimeen localStorage-tallennuksella. Koskee tietokoneita ja mobiililaitteita. Voidaan ohittaa kurssikohtaisesti Course AI Settings -sivulta.';
$string['settings:comparison_providers'] = 'Vertailuntarjoajat (LLM-valitsin)';
$string['settings:comparison_providers_desc'] = 'Lisää ylimääräisiä AI-tarjoajia widgetin sisäiseen LLM-valitsimeen, jotta ylläpitäjät voivat vertailla vastauksia eri tarjoajien välillä. Lisää rivejä alla olevan taulukon avulla. Lämpötilasarake on valinnainen (jätä tyhjäksi käyttääksesi yleistä lämpötilaa). Tallennusmuoto: provider_id|api_key|model1,model2|temperature. Yllä määritetty ensisijainen tarjoaja sisältyy aina automaattisesti. Vain ylläpitäjät, joilla on hallintaoikeus, näkevät valitsimen; opiskelijat eivät koskaan näe sitä. Kelvolliset provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Oletus-AI-palveluntarjoaja';
$string['settings:provider_desc'] = 'Valitse chat-vastausten AI-palveluntarjoaja. Valitse "Moodle AI (core_ai subsystem)" reitittääksesi pyynnöt Moodlen sisäänrakennetun AI-asetuksen kautta kohdassa Site admin > AI; API-avain, malli ja perus-URL -kentät alla ohitetaan tässä tilassa. Streaming, työkalujen käyttö ja prompt caching eivät ole käytettävissä core_ai:n kautta — vastaukset toimitetaan yhtenä palasena. Käytä suoraa palveluntarjoajaa parhaan opiskelijakokemuksen saamiseksi.';
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
$string['settings:avatar_saylor'] = '{$a} -logo (oletus)';
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
$string['coursesettings:sola_enabled'] = 'SOLA tällä kurssilla';
$string['coursesettings:sola_enabled_toggle'] = 'Näytä SOLA-vempain tällä kurssilla';
$string['coursesettings:sola_enabled_desc'] = 'Määrittää, näytetäänkö SOLA-chatvempain tällä kurssilla. Sivustolaajuinen oletus asetetaan lisäosan asetuksissa kohdassa General > Default for new courses.';
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
$string['chat:clear'] = 'Tyhjennä näyttö';
$string['chat:clear_confirm'] = 'Tyhjennetäänkö näkyvät viestit? Koko keskusteluhistoriasi pysyy tallennettuna ja voidaan ladata uudelleen avaamalla widget uudelleen.';
$string['chat:copy'] = 'Kopioi keskustelu';
$string['chat:copied'] = 'Keskustelu kopioitu leikepöydälle';
$string['chat:copy_failed'] = 'Keskustelun kopiointi epäonnistui';
$string['chat:thinking'] = 'Mietin...';
$string['chat:error'] = 'Valitettavasti tapahtui virhe. Yritä uudelleen.';
$string['chat:error_auth'] = 'Todennusvirhe. Ota yhteyttä ylläpitäjääsi.';
$string['chat:error_ratelimit'] = 'Liian monta pyyntöä. Odota hetki ja yritä uudelleen.';
$string['chat:error_unavailable'] = 'AI-palvelu on tilapäisesti poissa käytöstä. Yritä myöhemmin uudelleen.';
$string['chat:error_notconfigured'] = 'AI-tutoria ei ole vielä määritetty. Ota yhteyttä ylläpitäjääsi.';
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
$string['chat:greeting'] = 'Hei, {$a}! Olen SOLA. Kuinka voin auttaa sinua tänään?';
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
$string['chat:starter_quiz'] = 'Testaa minua tästä';
$string['chat:starter_explain'] = 'Selitä tämä';
$string['chat:starter_key_concepts'] = 'Avainkäsitteet';
$string['chat:starter_study_plan'] = 'Opiskelusuunnitelma';
$string['chat:starter_help_me'] = 'AI-apu';
$string['chat:starter_ai_project_coach'] = 'AI-projektivalmentaja';
$string['chat:starter_ell_practice'] = 'Keskusteluharjoitus';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Muistiinpanot';

// History panel.
$string['chat:history_title'] = 'Muistiinpanot ja keskusteluhistoria';
$string['task:send_inactivity_reminders'] = 'Lähetä viikoittaiset muistutussähköpostit toimettomuudesta';
$string['task:run_meta_ai_query'] = 'Suorita ajoitettu Oppimistutka-analytiikkakysely';
$string['messageprovider:study_notes'] = 'Opiskeluistunnon muistiinpanot';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Käyttöliittymän jakelu';
$string['settings:cdn_heading_desc'] = 'Tarjoa SOLA:n käyttöliittymäresurssit (JS/CSS) ulkoisesta CDN:stä Moodlen tiedostojärjestelmän sijaan. Tämä mahdollistaa käyttöliittymäpäivitykset ilman lisäosan päivittämistä. Jätä CDN-URL tyhjäksi käyttääksesi paikallisia lisäosatiedostoja.';
$string['settings:cdn_url'] = 'CDN:n perus-URL';
$string['settings:cdn_url_desc'] = 'Perus-URL, jossa sola.min.js ja sola.min.css isännöidään. Esimerkki: https://your-org.github.io/sola-cdn. Jätä tyhjäksi käyttääksesi paikallisia lisäosatiedostoja.';
$string['settings:cdn_version'] = 'CDN-resurssien versio';
$string['settings:cdn_version_desc'] = 'CDN-URLeihin liitettävä versiomerkkijono välimuistin tyhjennystä varten (cache busting). Päivitä jokaisen CDN-julkaisun jälkeen (esim. 3.2.4 tai commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Kokonaiskäyttö';
$string['analytics:tab_bycourse'] = 'Kursseittain';
$string['analytics:tab_comparison'] = 'AI vs ei-käyttäjät';
$string['analytics:tab_byunit'] = 'Yksiköittäin';
$string['analytics:tab_usagetypes'] = 'Käyttötyypit';
$string['analytics:tab_themes'] = 'Teemat';
$string['analytics:tab_feedback'] = 'AI-palaute';
$string['analytics:total_students'] = 'Opiskelijoita yhteensä';
$string['analytics:active_users'] = 'Aktiiviset AI-käyttäjät';
$string['analytics:msgs_per_student'] = 'Viestejä per opiskelija';
$string['analytics:avg_session'] = 'Keskimääräinen istunnon kesto';
$string['analytics:return_rate'] = 'Palautusaste';
$string['analytics:total_sessions'] = 'Istuntoja yhteensä';
$string['analytics:thumbs_up'] = 'Peukku ylös';
$string['analytics:thumbs_down'] = 'Peukku alas';
$string['analytics:hallucination_flags'] = 'Epätarkkuusmerkinnät';
$string['analytics:msgs_to_resolution'] = 'Viestejä ratkaisuun';
$string['analytics:helpful'] = 'Hyödyllinen';
$string['analytics:not_helpful'] = 'Ei hyödyllinen';
$string['analytics:flag_hallucination'] = 'Tämä vastaus sisältää epätarkkaa tietoa';
$string['analytics:submit_rating'] = 'Lähetä';
$string['analytics:thanks_feedback'] = 'Kiitos palautteestasi';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Selitä tämä sivu';
$string['chat:starter_ask_anything'] = 'Kysy mitä vain';
$string['chat:starter_review_practice'] = 'Kertaa ja harjoittele';
$string['chat:history_saved_subtitle'] = 'Tallennetut vastaukset säilyvät tällä laitteella tätä kurssia varten.';
$string['chat:history_saved_empty'] = 'Tallenna AI-vastaus nähdäksesi sen täällä.';
$string['chat:history_views_label'] = 'Historianäkymät';
$string['chat:history_view_saved'] = 'Tallennetut';
$string['chat:history_view_recent'] = 'Historia';
$string['chat:debug_refresh'] = 'Päivitä';
$string['chat:debug_copy_all'] = 'Kopioi kaikki';
$string['chat:debug_close'] = 'Sulje';
$string['chat:language_switch'] = 'Vaihda kieli';
$string['chat:language_dismiss'] = 'Hylkää kieliehdotus';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Valitse LLM-palveluntarjoaja';
$string['chat:llm_model_label'] = 'Malli';
$string['chat:llm_model_select'] = 'Valitse LLM-malli';
$string['chat:footer_usertesting'] = 'Käytettävyystestaus';
$string['chat:footer_feedback'] = 'Palaute';
$string['chat:voice_panel_title'] = 'Keskustele {$a} kanssa (Kokeellinen)';

// Additional translated strings.
$string['chat:debug_context'] = 'Kontekstin virheenkorjaus';
$string['chat:debug_context_browser'] = 'Selaimen tilannekuva';
$string['chat:debug_context_copy'] = 'Kopioi';
$string['chat:debug_context_prompt'] = 'Palvelimen vastaus';
$string['chat:debug_context_request'] = 'Viimeisin SSE-pyyntö';
$string['chat:debug_context_toggle'] = 'Vaihda tarkastaja';
$string['chat:history_empty'] = 'Ei keskusteluja.';
$string['chat:history_refresh'] = 'Päivitä';
$string['chat:history_subtitle'] = 'Viimeisimmät viestisi.';
$string['chat:starter_explain_prompt'] = 'Selitä tärkein käsite?';
$string['chat:starter_help_lesson'] = 'Selitä tämä';
$string['chat:starter_help_lesson_prompt'] = 'Auta oppitunnin ymmärryksessä. Tiivistä keskeiset käsitteet.';
$string['chat:starter_prompt_coach'] = 'AI-valmentaja';
$string['chat:starter_quick_study'] = 'Pikaopiskelu';
$string['chat:starter_study_plan_prompt'] = 'Haluan suunnitella opiskelun. Kysy: (1) tavoite, (2) aika. Päivitä suunnitelma.';
$string['chat:voice_copy'] = 'Äänikeskustelu avustajasi kanssa.';
$string['chat:voice_ready'] = 'Valmis';
$string['chat:voice_start'] = 'Aloita';
$string['chat:voice_title'] = 'Puhu SOLA:n kanssa';
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
$string['mobile_chip_concepts'] = 'Keskeiset käsitteet';
$string['mobile_chip_quiz'] = 'Tietovisa';
$string['mobile_chip_studyplan'] = 'Opiskelusuunnitelma';
$string['mobile_clear'] = 'Tyhjennä';
$string['mobile_disabled'] = 'SOLA ei ole käytettävissä.';
$string['mobile_placeholder'] = 'Kysy kysymys...';
$string['mobile_welcome'] = 'Hei, {$a}!';
$string['mobile_welcome_sub'] = 'Olen SOLA, oppimisavustajasi. Miten voin auttaa?';
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
$string['rubric:done'] = 'Valmis';
$string['rubric:encourage_high'] = 'Erinomaista! Jatka samaan!';
$string['rubric:encourage_low'] = 'Hyvä alku! Säännöllinen harjoittelu auttaa.';
$string['rubric:encourage_mid'] = 'Hyvä yritys! Jatka harjoittelua.';
$string['rubric:overall'] = 'Kokonais';
$string['rubric:practice_again'] = 'Harjoittele uudelleen';
$string['rubric:score_title_conversation'] = 'Keskusteluharjoituksen pisteet';
$string['rubric:score_title_pronunciation'] = 'Ääntämisharjoituksen pisteet';
$string['rubric:scoring'] = 'Arvioidaan...';
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
$string['demo:title'] = 'Testausympäristö';
$string['demo:heading'] = 'Testausympäristö';
$string['demo:intro'] = 'Tämä sivu luo testikurssin, joka on <strong>piilotettu opiskelijoilta</strong> (visible=0), ja täyttää sen tekaistuilla opiskelijoilla, tekoälykeskusteluilla, arvioinneilla ja palautteella. Hyödyllinen Analytics Dashboardin esikatseluun tai lisäosan muutosten validointiin ilman että se vaikuttaisi todellisiin ilmoittautuneisiin opiskelijoihin.';
$string['demo:step1'] = 'Vaihe 1: testikurssi';
$string['demo:step2'] = 'Vaihe 2: lisää tekaistuja opiskelijoita ja tekoälykeskusteluja';
$string['demo:course_exists'] = 'Testikurssi olemassa: <strong>{$a->fullname}</strong> (lyhyt nimi <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'piilotettu';
$string['demo:badge_visible'] = 'näkyvissä opiskelijoille';
$string['demo:no_course'] = 'Testikurssia ei löytynyt. Napsauta alla luodaksesi sellaisen.';
$string['demo:create_btn'] = 'Luo piilotettu testikurssi';
$string['demo:open_course'] = 'Avaa kurssi &rarr;';
$string['demo:seed_intro'] = 'Luo demo_student_001, demo_student_002, ... ilmoittaa heidät testikurssille ja lisää synteettisiä keskusteluja, viestejä, arviointeja ja palautetta. Suorita uudelleen lisätäksesi lisää dataa, tai rastita „tyhjennä ensin“ aloittaaksesi alusta.';
$string['demo:users_label'] = 'Käyttäjät';
$string['demo:weeks_label'] = 'Viikot';
$string['demo:clear_label'] = 'Tyhjennä olemassa olevat demo_*-käyttäjät ensin';
$string['demo:seed_btn'] = 'Lisää opiskelijoita ja keskusteluja';
$string['demo:view_analytics'] = 'Näytä analytiikka tälle kurssille &rarr;';
$string['demo:footer'] = 'Täällä luotu data sijaitsee Moodlen vakio käyttäjä- / ilmoittautumistaulukoissa ja lisäosan omissa keskustelutaulukoissa. Kaikilla tekaistuilla käyttäjillä on käyttäjätunnukset, jotka alkavat <code>demo_student_</code>, joten ne on helppo suodattaa tai poistaa. Poistaaksesi ne, suorita seed-vaihe uudelleen „Tyhjennä olemassa olevat demo_*-käyttäjät ensin“ valittuna.';
$string['demo:course_fullname'] = 'SOLA-testikurssi (piilotettu)';
$string['demo:notify_created'] = 'Testikurssi valmis: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Kurssin luonti epäonnistui: {$a}';
$string['demo:notify_seeded'] = 'Lisätty: {$a->users} käyttäjää, {$a->conversations} keskustelua, {$a->messages} viestiä, {$a->ratings} arviointia, {$a->feedback} palautemerkintää.';
$string['demo:notify_seed_fail'] = 'Datan lisääminen epäonnistui: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Tokenien kustannukset ja analytiikka &rarr;';
$string['toc:testing'] = 'Testausympäristö &rarr;';
$string['toc:back_to_course'] = '&larr; Takaisin: {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext-binaaria ei löydy; PDF-poiminta pois käytöstä.';
$string['rag:pdftotext_available'] = 'pdftotext havaittu polusta {$a}.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive -laajennus ei ole käytettävissä; DOCX-poiminta pois käytöstä.';
$string['rag:h5p_unavailable'] = 'H5P-sisältöä ei voitu lukea; ohitetaan.';
$string['rag:scorm_too_large'] = 'SCORM-paketti ylittää määritetyn kokorajan ({$a} MB); ohitetaan.';
$string['rag:scorm_unzip_failed'] = 'SCORM-pakettia ei voitu purkaa; ohitetaan.';
$string['rag:transcript_fetch_failed'] = 'Tekstitystä ei voitu hakea osoitteesta {$a}.';
$string['rag:transcript_cf_challenge'] = 'Tekstityksen URL-osoite estetty Cloudflare-haasteella: {$a}.';
$string['rag:embed_detected'] = 'Upotettu media havaittu: {$a}';
$string['rag:embed_transcript_attached'] = 'Tekstitys liitetty kohteelle {$a}';

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
