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
 * Language strings for local_ai_course_assistant — Wolof.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Jëkkër AI bi ci Cours bi';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Dëkk ay wax-ak-wax yu AI jàng ak ay jëkkëram ak cours yépp.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID bi bu nekkee nit ki am wax-ak-wax bi.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID bi bu nekkee cours bi moo moom wax-ak-wax bi.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Xel wax-ak-wax bi.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Xeetu wax-ak-wax bi dañ ko def.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Xeetu yegeel bu mujj wax-ak-wax bi.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Dëkk ay bataaxal yu nekk ci wax-ak-wax yi.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID bi bu nekkee nit ki yónni bataaxal bi.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID bi bu nekkee cours bi moo moom bataaxal bi.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Njëkk ku yónn bataaxal bi (jëkkër walla jëkkëram).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Ndigël bataaxal bi.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Jom tokens yi jëfandikoo bataaxal bi.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Xeetu bataaxal bi dañ ko def.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Jëfandikoo wax-ak-wax AI jàng';
$string['ai_course_assistant:viewanalytics'] = 'Xool analytics yu wax-ak-wax AI jàng';
$string['ai_course_assistant:manage'] = 'Gérer réglages wax-ak-wax AI jàng (Rôle Administrateur)';

// Settings.
$string['settings:enabled'] = 'Sopp Jëkkër AI bi ci Cours bi';
$string['settings:enabled_desc'] = 'Sopp walla tëj widget Jëkkër AI bi ci Cours bi ci say xët cours yi.';
$string['settings:default_course_mode'] = 'Fàww ci njàng yu bees';
$string['settings:default_course_mode_desc'] = 'Dafay kontrole ndax SOLA dina feeñ ci njàng ba saa yu tànnul dañu tànn ci njàng. Installasioŋ yu bees ñoo ngi ag "Tëjoon ci fàww" ngir ndawalu yi mën a jàpp njàng bu nekk ci xëtu Analytics walla xëtu Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Tëjoon ci fàww (ubbil ci njàng bu nekk)';
$string['settings:default_course_mode_all'] = 'Ubbi ci njàng yépp';
$string['settings:auto_open'] = 'Ubbi ko ci sa njëkk a dem';
$string['settings:auto_open_desc'] = 'Bu ko ñu tàmbalee, drawer bu SOLA dafay ubbiku boppam bu njëkk bi jàngkat bi dikkee ci kër kursu kër. Yokk yu topp ci page yi ci kursu bi dañu ubbiku drawer bi dara — anam wi ñu koy toppal ci kursu ku nekk ci browser bu jàngkat bi jaar ci localStorage. Mu ngi jëf ci desktop ak telefon. Mën nañu ko soppi ci kursu ku nekk ci page Course AI Settings.';
$string['settings:comparison_providers'] = 'Yónent yi ñu mën a faral (tànn LLM)';
$string['settings:comparison_providers_desc'] = 'Yokk yónent yi AI yu sàkk ci tànn LLM bi ci widget bi ngir administrater yi mën a faral tontu yi diggante yónent yi. Jëfandikool taabal bi ci suuf ngir yokk ay rëddi. Kolonn bu tàngay mooy lu ñu nangu (bàyyi ko dara ngir jëfandikoo tàngayu àdduna bi). Format bi ñu denc: provider_id|api_key|model1,model2|temperature. Yónent bu njëk bi ñu teg ci kaw moo ngi ci ci kàttan lu bees. Administrater yi am manage capability rekk moo gën a gis tànn bi; jàngalekat yi du ko gis mukk. Provider IDs yu baax: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Default Fournisseur AI';
$string['settings:provider_desc'] = 'Tànn jukki AI bi ngay jëfandikoo ngir mat-waxtaan yi. Tànn "Moodle AI (core_ai subsystem)" ngir yóbbu ñaan yi ci ndefaru AI bu nekk ci biir Moodle ci Site admin > AI; tolof-tolof yu caabiu API, mudel ak URL bu njëkk dañu leen di dugal ci jëfi yooyu. Streaming, jëfandikoo nu jumtukaay yi, ak prompt caching amul ci core_ai — tontu yi ñoo leen di jox ci benn boor. Jëfandikoo jukkikat bu jub ngir jafandu jàngkat bu gën a baax.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Bu dëkk)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Mba bu xam (Compatible ak OpenAI)';
$string['settings:apikey'] = 'Clé API';
$string['settings:apikey_desc'] = 'Clé API fournisseur bi la tann. Dafa amul solo ci Ollama.';
$string['settings:model'] = 'Tur Modèle bi';
$string['settings:model_desc'] = 'Modèle bi ngay jëfandikoo. Valeur par défaut dafay depann ci fournisseur bi (xam-xam claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL de Base API';
$string['settings:apibaseurl_desc'] = 'URL de base API bi. Dañ ko rempli automatiquement ci fournisseur yi waye dafay mën a yegeel. Samp sax valeur par défaut fournisseur bi.';
$string['settings:systemprompt'] = 'Modèle Invite Système';
$string['settings:systemprompt_desc'] = 'Invite dañ ko yónn ci AI bi. Jëfandikoo ay substituts: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Yàgg nga jël rôle wu professeur AI ci cours "{{coursename}}". Rôle élève bi dafa {{userrole}}.

Sujets cours bi ñu dakkal:
{{coursetopics}}

Ndimm élève bi jàng matière cours bi. Yëgël, wëjj, te jàng ci yoon bu baax.';
$string['settings:temperature'] = 'Température';
$string['settings:temperature_desc'] = 'Kontrole aléatoire bi. Valeurs yu yëëf dañ focus, valeurs yu dëkk dañ créatif. Plaage: 0.0 ci 2.0.';
$string['settings:maxhistory'] = 'Historique Wax-ak-wax bu Màgg';
$string['settings:maxhistory_desc'] = 'Jom yu màgg ak ay kuple bataaxal ngay mël ci requêtes API yi. Bataaxal yu gëna mujj dañ ko tass.';
$string['settings:avatar'] = 'Avatar Wax-ak-wax bi';
$string['settings:avatar_desc'] = 'Tann icône avatar bi ci bouton widget wax-ak-wax bi.';
$string['settings:avatar_saylor'] = 'Logo {$a} (Par défaut)';
$string['settings:position'] = 'Woon Widget bi';
$string['settings:position_desc'] = 'Woon widget wax-ak-wax bi ci xët bi.';
$string['settings:position_br'] = 'Kanam jigéen';
$string['settings:position_bl'] = 'Kanam góor';
$string['settings:position_tr'] = 'Kanam jigéen ci kanam';
$string['settings:position_tl'] = 'Kanam góor ci kanam';
$string['chat:settings'] = 'Réglages plugin bi';
$string['analytics:viewdashboard'] = 'Xool tableau de bord analytics bi';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'Réglages AI Cours bi';
$string['coursesettings:enabled'] = 'Sopp substitutions cours bi';
$string['coursesettings:enabled_desc'] = 'Su soppi la, réglages yi ci suuf dañy tekk réglages fournisseur AI bi bu ñu xam xam ci cours boobu rekk. Samp champs yi vides pour hériter valeur globale bi.';
$string['coursesettings:sola_enabled'] = 'SOLA ci njàng bii';
$string['coursesettings:sola_enabled_toggle'] = 'Wone widget bu SOLA ci njàng bii';
$string['coursesettings:sola_enabled_desc'] = 'Dafay kontrole ndax widget-waxtaanu SOLA dina feeñ ci njàng bii. Fàww bu sit bi yépp dañu koy tànn ci tàggat-yu-plugin ci kanam General > Default for new courses.';
$string['coursesettings:using_global'] = 'Jëfandikoo réglage global bi';
$string['coursesettings:saved'] = 'Réglages AI cours bi dañ ko sauvegarder.';
$string['coursesettings:global_settings_link'] = 'Réglages AI globaux';

// Language detection and preference.
$string['lang:switch'] = 'Waaw, tekk';
$string['lang:dismiss'] = 'Deedéet jërejëf';
$string['lang:change'] = 'Soppal làkk bi';
$string['lang:english'] = 'Angale';

// Chat widget.
$string['chat:title'] = 'Professeur AI';
$string['chat:placeholder'] = 'Laaj ay laaj...';
$string['chat:send'] = 'Yónn';
$string['chat:close'] = 'Tëj wax-ak-wax bi';
$string['chat:open'] = 'Ubbi wax-ak-wax AI jàng bi';
$string['chat:clear'] = 'Clear screen';
$string['chat:clear_confirm'] = 'Clear the visible messages? Your full chat history stays saved and can be reloaded by reopening the widget.';
$string['chat:copy'] = 'Copie wax-ak-wax bi';
$string['chat:copied'] = 'Wax-ak-wax bi dañ ko copié ci clipboard bi';
$string['chat:copy_failed'] = 'Copie wax-ak-wax bi defoo kaay';
$string['chat:thinking'] = 'Xam xamam...';
$string['chat:error'] = 'Baal ma, dafa am problème. Jëf alal ci kanam.';
$string['chat:error_auth'] = 'Erreur authentification. Jooy administrateur bi.';
$string['chat:error_ratelimit'] = 'Ay demande yu bari lool. Dëgël ci wëkër ak jëf alal.';
$string['chat:error_unavailable'] = 'Service AI bi dafay nekk ci sa xel bu yegeel. Jëf alal ci kanam.';
$string['chat:error_notconfigured'] = 'Professeur AI bi amul encore configuration. Jooy administrateur bi.';
$string['chat:mic'] = 'Wax sa laaj';
$string['chat:mic_error'] = 'Erreur microphone. Seeti ay autorisations navigateur bi.';
$string['chat:mic_unsupported'] = 'Entrée vocale bi dafa supporté ci navigateur bi.';
$string['chat:newline_hint'] = 'Shift+Enter ci kàttan bu bees';
$string['chat:you'] = 'Yow';
$string['chat:assistant'] = 'Professeur AI';
$string['chat:history_loaded'] = 'Wax-ak-wax yi wëkër dañ ko charger.';
$string['chat:history_cleared'] = 'Historique wax-ak-wax bi dañ ko fay.';
$string['chat:offtopic_warning'] = 'Dëgg la laaj bi dafoo dakkal cours boobu. Jëf alal ci sujet bi ngir mënuma la ndimmal ci yoon bu baax!';
$string['chat:offtopic_ended'] = 'Jëfandikoo professeur AI bi dafa suspendu {$a} simili ci nu wax-ak-wax bi dooloo ci sujet bu bari. Jëfandikoo waxtu boobu xëy matériels cours bi, mënula ko feek ci kanam.';
$string['chat:offtopic_locked'] = 'Jëfandikoo professeur AI bi dafa suspendu ci waxtu bu nekk. Mënula ko feek ci {$a} simili. Dëkk ci ay laaj yu rapport ak cours bi su döödaat.';
$string['chat:escalated_to_support'] = 'Amuma liggéey ay réponse bu dëgg ci sa laaj, léegi dañ ko créer ticket support bi fii ak yow. Ñëpp ci team support bi dinañu ko suivre. Référence ticket bi dafa: {$a}';
$string['chat:studyplan_intro'] = 'Mënuma la ndimmal créer kàlàam jàng ci cours boobu! Xam ma jom waxtu ci semaine mënula am ci jàng, dinaa la ndimmal bëgg plan bu strukturé.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ & Support';
$string['settings:faq_heading_desc'] = 'Configure FAQ centralisé bi ak intégration ticket support Zendesk bi.';
$string['settings:faq_content'] = 'Ndigël FAQ bi';
$string['settings:faq_content_desc'] = 'Bind entrées FAQ yi (ñëpp ci kàttan ci format: Q: laaj | A: réponse). Dañ ko donner AI bi pour répondre ay laaj support yi mu am.';
$string['settings:zendesk_enabled'] = 'Sopp Escalade Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Su AI bi amul réponse bu dëgg ci laaj support bi, créer ticket Zendesk automatiquement ak résumé wax-ak-wax bi.';
$string['settings:zendesk_subdomain'] = 'Sous-domaine Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Sa sous-domaine Zendesk (xam-xam "mycompany" ci mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'Email API Zendesk';
$string['settings:zendesk_email_desc'] = 'Adresse email utilisateur Zendesk ci authentification API (ak suffixe /token).';
$string['settings:zendesk_token'] = 'Token API Zendesk';
$string['settings:zendesk_token_desc'] = 'Token API ci authentification Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Détection Hors Sujet';
$string['settings:offtopic_heading_desc'] = 'Configure soo traitante wax-ak-wax bi ci ay wax-ak-wax yu nekk hors sujet.';
$string['settings:offtopic_enabled'] = 'Sopp Détection Hors Sujet';
$string['settings:offtopic_enabled_desc'] = 'Lere AI bi ngir détecte ak redirige ay wax-ak-wax yu nekk hors sujet.';
$string['settings:offtopic_max'] = 'Jom bu Màgg Bataaxal Hors Sujet';
$string['settings:offtopic_max_desc'] = 'Jom bataaxal hors sujet yi ku nekk ci su dëkk ak sa takk kanam action bi.';
$string['settings:offtopic_action'] = 'Action Hors Sujet';
$string['settings:offtopic_action_desc'] = 'Lan ngay def su tëgële limite hors sujet bi.';
$string['settings:offtopic_action_warn'] = 'Avertir ak redirige';
$string['settings:offtopic_action_end'] = 'Bloquer accès ci waxtu bu nekk';
$string['settings:offtopic_lockout_duration'] = 'Durée Blocage (simili)';
$string['settings:offtopic_lockout_duration_desc'] = 'Naka ndaw (ci simili) élève bi am accès ci professeur AI bi su depasse limite hors sujet bi. Par défaut: 30 simili.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Planification Jàng & Rappels';
$string['settings:studyplan_heading_desc'] = 'Configure fonctionnalités planification jàng ak notifications rappel yi.';
$string['settings:studyplan_enabled'] = 'Sopp Planification Jàng';
$string['settings:studyplan_enabled_desc'] = 'Jox professeur AI bi ak ndimmal élèves yi créer ay plans jàng personnalisés yu dëgg ci waxtu yu ñu am.';
$string['settings:reminders_email_enabled'] = 'Sopp Rappels Email';
$string['settings:reminders_email_enabled_desc'] = 'Jox élèves yi dëgg ak rappels jàng ci email.';
$string['settings:reminders_whatsapp_enabled'] = 'Sopp Rappels WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Jox élèves yi dëgg ak rappels jàng ci WhatsApp (dafa soxor configuration API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Endpoint API ci envoi messages WhatsApp yi (xam-xam Twilio, MessageBird). Fëkk POST ak corps JSON bu am "to", "from", ak "body".';
$string['settings:whatsapp_api_token'] = 'Token API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token authentification ci API WhatsApp bi.';
$string['settings:whatsapp_from_number'] = 'Numéro Expéditeur WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Numéro téléphone bi ci yónn messages WhatsApp (ak code pays, xam-xam +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Pays WhatsApp Bloqués';
$string['settings:whatsapp_blocked_countries_desc'] = 'Codes pays ISO 3166-1 alpha-2 séparés virgule fu rappels WhatsApp dañu dul autorisé ci réglementations locales (xam-xam "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Rappel Jàng: {$a}';
$string['reminder:email_body'] = 'Salaam {$a->firstname},

Voici sa rappel jàng ci "{$a->coursename}".

{$a->message}

Sa plan jàng dafa soo jël {$a->hours_per_week} waxtu ci semaine ci cours boobu.

Jàng ci kanam!

---
Pour arrêter rappels yooy, cliquer ici: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Rappel Jàng ci {$a->coursename}: {$a->message} (Désabonner: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Focus jàng tey: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Se désabonner ci Rappels Jàng';
$string['unsubscribe:success'] = 'Dañ la désabonner ak succès ci rappels jàng ci cours boobu.';
$string['unsubscribe:already'] = 'Dañ la déjà désabonner ci rappels yooy.';
$string['unsubscribe:invalid'] = 'Lien désabonnement bu dëgëer walla bu dem.';
$string['unsubscribe:resubscribe'] = 'Soppalal sa xel? Mënula sopp rappels yi ci wax-ak-wax professeur AI bi.';

// Scheduled task.
$string['task:send_reminders'] = 'Yónn rappels jàng professeur AI';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Dëkk ay plans jàng élèves yi.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID bi bu nekkee utilisateur bi am plan jàng bi.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Cours bi plan jàng bi moo moom.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Waxtu ci semaine élève bi xëy jàng.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Détails plan jàng bi ci format JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Dëkk ay préférences rappel ak abonnements.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID bi bu nekkee utilisateur bi abonné ci rappels.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Canal rappel bi (email walla whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Adresse email walla numéro téléphone rappels.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Code pays utilisateur ci conformité réglementaire.';

// Analytics dashboard.
$string['analytics:title'] = 'Analytics Professeur AI';
$string['analytics:overview'] = 'Vue d\'ensemble';
$string['analytics:total_conversations'] = 'Total wax-ak-wax yi';
$string['analytics:total_messages'] = 'Total bataaxal yi';
$string['analytics:active_students'] = 'Élèves actifs';
$string['analytics:avg_messages_per_student'] = 'Moy bataaxal ci élève';
$string['analytics:offtopic_rate'] = 'Taux hors sujet';
$string['analytics:escalation_count'] = 'Escaladé ci support';
$string['analytics:studyplan_adoption'] = 'Élèves ak plans jàng';
$string['analytics:usage_trends'] = 'Tendances Utilisation';
$string['analytics:daily_messages'] = 'Volume bataaxal journalier';
$string['analytics:hotspots'] = 'Points Chauds Cours bi';
$string['analytics:hotspots_desc'] = 'Sections cours yi ñu gëna xam-xam ci laaj élèves yi. Comptages yu dëkk mënuy wax sections yi fu élèves yi soxor ndimmal yi gëna bari.';
$string['analytics:section'] = 'Section';
$string['analytics:mention_count'] = 'Mentions';
$string['analytics:common_prompts'] = 'Modèles Invite Communs';
$string['analytics:common_prompts_desc'] = 'Modèles laaj yi dañu repeteer soo ci élèves yi. Réexaminer yooy pour identifier lacunes systémiques ci ndigël cours bi.';
$string['analytics:prompt_pattern'] = 'Modèle';
$string['analytics:frequency'] = 'Fréquence';
$string['analytics:recent_activity'] = 'Activité Récente';
$string['analytics:no_data'] = 'Amul encore données analytics. Données yi dinañu soo di jël ngëm manque mujjub élèves yi soo jëfandikoo professeur AI bi.';
$string['analytics:timerange'] = 'Plage horaire';
$string['analytics:last_7_days'] = '7 fan yi mu gëna mujjub';
$string['analytics:last_30_days'] = '30 fan yi mu gëna mujjub';
$string['analytics:all_time'] = 'Ci fan bu dëkk';
$string['analytics:export'] = 'Exporter données';
$string['analytics:provider_comparison'] = 'Comparaison Fournisseur AI';
$string['analytics:provider_comparison_desc'] = 'Comparer performances ci fournisseurs AI yi jëfandikoo ci cours boobu.';
$string['analytics:provider'] = 'Fournisseur';
$string['analytics:response_count'] = 'Réponses';
$string['analytics:avg_response_length'] = 'Longueur moy réponse';
$string['analytics:total_tokens'] = 'Total tokens';
$string['analytics:avg_tokens'] = 'Moy tokens / réponse';

// User settings.
$string['usersettings:title'] = 'Jëkkër AI ci Cours bi - Say Données';
$string['usersettings:intro'] = 'Gérer sa données wax-ak-wax professeur AI ak réglages vie privée';
$string['usersettings:privacy_info'] = 'Say wax-ak-wax ak professeur AI dañ ko stocker pour fournir ndimmal continu ci sa cours. Am nga contrôle complète ci données yooy te mënula ko effacer ci waxtu bu la nexxee.';
$string['usersettings:usage_stats'] = 'Say Statistiques Utilisation';
$string['usersettings:total_messages'] = 'Total bataaxal yi';
$string['usersettings:total_conversations'] = 'Wax-ak-wax yi';
$string['usersettings:messages'] = 'Bataaxal yi';
$string['usersettings:last_activity'] = 'Dernier activité';
$string['usersettings:delete_course_data'] = 'Effacer données cours bi';
$string['usersettings:no_data'] = 'Dëgëer nga jëfandikoo professeur AI. Say données utilisation dinañu soo nekk fii su jëf ula wax-ak-wax.';
$string['usersettings:delete_all_title'] = 'Effacer Dëgg Say Données';
$string['usersettings:delete_all_warning'] = 'Looyu effacera définitivement dëgg say wax-ak-wax professeur AI ci cours yépp. Action yooy dëgëer dina mën a yegeel.';
$string['usersettings:delete_all_button'] = 'Effacer Dëgg Say Données';
$string['usersettings:confirm_delete_course'] = 'Mbaa dëgg nga bëgg a effacer définitivement dëgg say données professeur AI ci cours "{$a}"? Action yooy dëgëer dina mën a yegeel.';
$string['usersettings:confirm_delete_all'] = 'Mbaa dëgg nga bëgg a effacer définitivement DËGG say données professeur AI ci cours yépp? Action yooy dëgëer dina mën a yegeel.';
$string['usersettings:data_deleted'] = 'Say données dañ ko effacer.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Mangi fi, {$a}! Maa ngi di SOLA. Naka laa lay mën dimbalee tey?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Ubbi SOLA';
$string['chat:change_avatar'] = 'Soppal avatar bi';

$string['chat:quiz'] = 'Jëf ëntërviu jàng';
$string['chat:quiz_setup_title'] = 'Ëntërviu Jàng';
$string['chat:quiz_questions'] = 'Njomu laaj yi';
$string['chat:quiz_topic'] = 'Sujet bi';
$string['chat:quiz_topic_guided'] = 'AI dëkk (ci kanam sa yeg-yeg bi)';
$string['chat:quiz_topic_default'] = 'Ndigël cours bi ci waxtu bi';
$string['chat:quiz_topic_custom'] = 'Sujet bu la neexee…';
$string['chat:quiz_custom_placeholder'] = 'Bind sujet walla laaj...';
$string['chat:quiz_start'] = 'Jëf Ëntërviu Bi';
$string['chat:quiz_cancel'] = 'Annuler';
$string['chat:quiz_loading'] = 'Dañuy génère ëntërviu bi…';
$string['chat:quiz_error'] = 'Mënuñu génère ëntërviu bi. Jëf alal ci kanam.';
$string['chat:quiz_correct'] = 'Dëgëer!';
$string['chat:quiz_wrong'] = 'Dafa faw.';
$string['chat:quiz_next'] = 'Laaj bi ci kanam';
$string['chat:quiz_finish'] = 'Xool résultats yi';
$string['chat:quiz_score'] = 'Ëntërviu bi jeex! Dañ la jàpp {$a->score} ci {$a->total}.';
$string['chat:quiz_summary'] = 'Mu ngi jëf ëntërviu jàng bu am {$a->total} laaj ci "{$a->topic}" te am {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Xelam Jàng Yi';
$string['chat:quiz_topic_modules'] = 'Sujet Cours Bi';
$string['chat:quiz_subtopic_select'] = 'Tann benn élément bu dëgëer…';
$string['chat:quiz_topic_sections'] = 'Sections Cours Bi';
$string['chat:quiz_score_great'] = 'Baax na lool! Dëgëer nga xam matière bi.';
$string['chat:quiz_score_good'] = 'Jéf baax! Continues a reviser ngir dëgal sa xam-xam bi.';
$string['chat:quiz_score_practice'] = 'Continues a jéf — seeti matériels cours bi yu rapport, ba ci kanam jëf ëntërviu bi.';
$string['chat:quiz_review_heading'] = 'Révision';
$string['chat:quiz_retake'] = 'Jëf Ëntërviu Bi Ci Kanam';
$string['chat:quiz_exit'] = 'Dem Ëntërviu Bi';
$string['chat:quiz_your_answer'] = 'Sa réponse';
$string['chat:quiz_correct_answer'] = 'Réponse bu dëgëer bi';

$string['chat:starters_label'] = 'Jëge wax-ak-wax';
$string['chat:starter_quiz'] = 'Ëntërviy Ma ci Bii';
$string['chat:starter_explain'] = 'Fëkk Li';
$string['chat:starter_key_concepts'] = 'Xelam Yu Xorom';
$string['chat:starter_study_plan'] = 'Plan Jàng';
$string['chat:starter_help_me'] = 'Ndimmal AI';
$string['chat:starter_ai_project_coach'] = 'AI Projet Njiit';
$string['chat:starter_ell_practice'] = 'Jéef Waxtaan';
$string['chat:starter_ell_pronunciation'] = 'Liggéey Yégël ELL';
$string['chat:starter_ai_coach'] = 'Coach AI';
$string['chat:starter_speak'] = 'Wax jëge bi';

$string['chat:reset'] = 'Jëge ci kanam';

$string['chat:topic_picker_title'] = 'Lan la neexee a tëgël ci?';
$string['chat:topic_picker_title_help'] = 'Ci lan la neexee ndimmal?';
$string['chat:topic_picker_title_explain'] = 'Lan la neexee ma fëkk?';
$string['chat:topic_picker_title_study'] = 'Ci domaine bu lan la neexee a tëgël?';
$string['chat:topic_start'] = 'Dem ci kanam';

$string['chat:fullscreen'] = 'Xët bu sell';
$string['chat:exitfullscreen'] = 'Dem ci xët bu sell';

$string['chat:language'] = 'Soppal làkk bi';
$string['chat:settings_panel'] = 'Réglages';
$string['chat:settings_language'] = 'Làkk';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Jàng';
$string['chat:settings_voice_admin'] = 'Réglages jàng yi dañ ko gérer ci panneau administration site bi.';

$string['chat:voice_mode'] = 'Mode jàng';
$string['chat:voice_end'] = 'Jeex séance jàng bi';
$string['chat:voice_connecting'] = 'Dañuy connecter...';
$string['chat:voice_listening'] = 'Dañuy dégg...';
$string['chat:voice_speaking'] = 'SOLA dañuy wax...';
$string['chat:voice_idle'] = 'Jëm';
$string['chat:voice_error'] = 'Connexion jàng bi defoo kaay. Seeti sa réglages yi.';
$string['chat:quiz_locked'] = 'SOLA dafa suspendu ci kanam ëntërviu yi ngir soxor intégrité académique bi. Yëgël sa jàng!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Xam-xam';

// History panel.
$string['chat:history_title'] = 'Xam-xam ak Waxtaan bi';
$string['task:send_inactivity_reminders'] = 'Yónne bataaxal ci ayu-bis yu ngën-ngën yi ngir bañ liggéey';
$string['messageprovider:study_notes'] = 'Téere yi ci diggante jàng bi';
$string['task:send_inactivity_reminders'] = 'Yónnal bataaxal xalaat ci at ci biir ayu-bés';
$string['task:run_meta_ai_query'] = 'Doxal laaj bu Learning Radar ci waxtu bu ñu tànn';
$string['messageprovider:study_notes'] = 'Bindu ci jàng yi';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Yónnee ci kanam';
$string['settings:cdn_heading_desc'] = 'Joxe njëlbéen kanam yi SOLA (JS/CSS) ci CDN bu biti ba, du ci Moodle files yi. Lii mën na may yeesal kanam bi te yeesal-atul plugin bi. Bayyi CDN URL bi neen ngir jëfandikoo plugin files yi ci biir.';
$string['settings:cdn_url'] = 'CDN URL bu njëkk';
$string['settings:cdn_url_desc'] = 'URL bu njëkk fu sola.min.js ak sola.min.css di dëkkee. Misaal: https://your-org.github.io/sola-cdn. Bayyi ko neen ngir jëfandikoo plugin files yi ci biir.';
$string['settings:cdn_version'] = 'Version njëlbéen CDN';
$string['settings:cdn_version_desc'] = 'Baat bu version bii ñu dugg ci CDN URLs yi ngir cache busting. Yeesal ko gannaaw CDN deploy bu nekk (misaal 3.2.4 walla commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Jëfandikoo bu mat';
$string['analytics:tab_bycourse'] = 'Bu kuur bi';
$string['analytics:tab_comparison'] = 'AI ak ñi jëfandikuul';
$string['analytics:tab_byunit'] = 'Bu xët bi';
$string['analytics:tab_usagetypes'] = 'Yeneeni jëfandikoo';
$string['analytics:tab_themes'] = 'Njëkk';
$string['analytics:tab_feedback'] = 'Tekki AI';
$string['analytics:total_students'] = 'Ñépp ndongo yi';
$string['analytics:active_users'] = 'Ñi jëfandikoo AI';
$string['analytics:msgs_per_student'] = 'Bataaxal bu ndongo bi';
$string['analytics:avg_session'] = 'Diir bu njël bi';
$string['analytics:return_rate'] = 'Tolluwaay delloo';
$string['analytics:total_sessions'] = 'Ñépp njël yi';
$string['analytics:thumbs_up'] = 'Baaraam bu kow';
$string['analytics:thumbs_down'] = 'Baaraam bu suuf';
$string['analytics:hallucination_flags'] = 'Xàmme njuumte';
$string['analytics:msgs_to_resolution'] = 'Bataaxal ba faj';
$string['analytics:helpful'] = 'Dimbali na';
$string['analytics:not_helpful'] = 'Dimbaliwul';
$string['analytics:flag_hallucination'] = 'Tontu bii am na xibaar yu baaxul';
$string['analytics:submit_rating'] = 'Yónne';
$string['analytics:thanks_feedback'] = 'Jërëjëf ci sa tekki';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Xamal bii xët';
$string['chat:starter_ask_anything'] = 'Laaj lu la neexe';
$string['chat:starter_review_practice'] = 'Seet ak jëfandikoo';
$string['chat:history_saved_subtitle'] = 'Tontu yi ñu denc ñoo féete ci masiin bi ngir kurs bi.';
$string['chat:history_saved_empty'] = 'Dencal benn tontu AI ngir gis ko fi.';
$string['chat:history_views_label'] = 'Xoolu taariix';
$string['chat:history_view_saved'] = 'Dencu';
$string['chat:history_view_recent'] = 'Taariix';
$string['chat:debug_refresh'] = 'Yeesalaat';
$string['chat:debug_copy_all'] = 'Duppee yépp';
$string['chat:debug_close'] = 'Tëj';
$string['chat:language_switch'] = 'Soppi làkk';
$string['chat:language_dismiss'] = 'Bañ xalaat làkk';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Tànn jotkatu LLM';
$string['chat:llm_model_label'] = 'Modél';
$string['chat:llm_model_select'] = 'Tànn modél LLM';
$string['chat:footer_usertesting'] = 'Testu jëfandikoo';
$string['chat:footer_feedback'] = 'Xalaat';
$string['chat:voice_panel_title'] = 'Wax ak {$a} (Natal)';

// Additional translated strings.
$string['chat:debug_context'] = 'Fegal ci contexte bi';
$string['chat:debug_context_browser'] = 'Nataal navigateur';
$string['chat:debug_context_copy'] = 'Tëgg';
$string['chat:debug_context_prompt'] = 'Tontu serveur bi';
$string['chat:debug_context_request'] = 'Laajub SSE bi mujj';
$string['chat:debug_context_toggle'] = 'Weccii inspecteur';
$string['chat:history_empty'] = 'Amul waxtaan.';
$string['chat:history_refresh'] = 'Yeesal';
$string['chat:history_subtitle'] = 'Sa bataaxal yi mujj.';
$string['chat:starter_explain_prompt'] = 'Nettali xel bi gën a am solo?';
$string['chat:starter_help_lesson'] = 'Nettali li';
$string['chat:starter_help_lesson_prompt'] = 'May ma xam leçon bi. Résumé yi am solo.';
$string['chat:starter_prompt_coach'] = 'Coach AI';
$string['chat:starter_quick_study'] = 'Jàng bu gaaw';
$string['chat:starter_study_plan_prompt'] = 'Bëgg naa planifie jàng. Laaj: (1) but, (2) njëkk. Yeesal plan.';
$string['chat:voice_copy'] = 'Waxtaan bu bees ak adjoint bi.';
$string['chat:voice_ready'] = 'Pare';
$string['chat:voice_start'] = 'Tàmbalee';
$string['chat:voice_title'] = 'Waxtu ak SOLA';
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
$string['mobile_chip_concepts'] = 'Xel yi am solo';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Plan jàng';
$string['mobile_clear'] = 'Far tariix bi';
$string['mobile_disabled'] = 'SOLA amul ci cours bii.';
$string['mobile_placeholder'] = 'Laaj laaj...';
$string['mobile_welcome'] = 'Dalal jam, {$a}!';
$string['mobile_welcome_sub'] = 'Maangi tudd SOLA, sa adjoint jàng bi. Nan la la mën a dimbali?';
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
$string['rubric:done'] = 'Jeex na';
$string['rubric:encourage_high'] = 'Liggéey bu baax! Kontaan!';
$string['rubric:encourage_low'] = 'Tambalee bu baax! Pratique bu tollu dina la dimbal.';
$string['rubric:encourage_mid'] = 'Jëf bu baax! Kontaan.';
$string['rubric:overall'] = 'Mbooleem';
$string['rubric:practice_again'] = 'Def pratique kenn yoon';
$string['rubric:score_title_conversation'] = 'Mbiri pratique waxtaan';
$string['rubric:score_title_pronunciation'] = 'Mbiri pratique tekki';
$string['rubric:scoring'] = 'Ci jokkoo ci évaluation...';
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
$string['demo:title'] = 'Testing Environment';
$string['demo:heading'] = 'Testing Environment';
$string['demo:intro'] = 'This page creates a testing course that is <strong>hidden from students</strong> (visible=0) and seeds it with fake students, AI conversations, ratings, and feedback. Useful for previewing the Analytics Dashboard or validating plugin changes without affecting any real enrolled student.';
$string['demo:step1'] = 'Step 1: testing course';
$string['demo:step2'] = 'Step 2: seed fake students and AI chats';
$string['demo:course_exists'] = 'Testing course exists: <strong>{$a->fullname}</strong> (shortname <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'hidden';
$string['demo:badge_visible'] = 'visible to students';
$string['demo:no_course'] = 'No testing course found. Click below to create one.';
$string['demo:create_btn'] = 'Create hidden testing course';
$string['demo:open_course'] = 'Open course &rarr;';
$string['demo:seed_intro'] = 'Creates demo_student_001, demo_student_002, ... enrols them in the testing course, and inserts synthetic conversations, messages, ratings, and feedback. Run again to add more data, or tick "clear first" to start over.';
$string['demo:users_label'] = 'Users';
$string['demo:weeks_label'] = 'Weeks';
$string['demo:clear_label'] = 'Clear existing demo_* users first';
$string['demo:seed_btn'] = 'Seed students and chats';
$string['demo:view_analytics'] = 'View Analytics for this course &rarr;';
$string['demo:footer'] = 'Data created here lives in the standard Moodle user / enrolment tables and the plugin\'s own conversation tables. The fake users all have usernames starting with <code>demo_student_</code> so they are easy to filter or remove. To remove them, run the seed step again with "Clear existing demo_* users first" checked.';
$string['demo:course_fullname'] = 'SOLA Testing Course (hidden)';
$string['demo:notify_created'] = 'Testing course ready: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Failed to create course: {$a}';
$string['demo:notify_seeded'] = 'Seeded: {$a->users} users, {$a->conversations} conversations, {$a->messages} messages, {$a->ratings} ratings, {$a->feedback} feedback entries.';
$string['demo:notify_seed_fail'] = 'Failed to seed data: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Token Cost &amp; Analytics &rarr;';
$string['toc:testing'] = 'Testing Environment &rarr;';
$string['toc:back_to_course'] = '&larr; Back to {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext binary not found; PDF extraction disabled.';
$string['rag:pdftotext_available'] = 'pdftotext binary detected at {$a}.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive extension not available; DOCX extraction disabled.';
$string['rag:h5p_unavailable'] = 'H5P content could not be read; skipping.';
$string['rag:scorm_too_large'] = 'SCORM package exceeds the configured size limit ({$a} MB); skipping.';
$string['rag:scorm_unzip_failed'] = 'SCORM package could not be unzipped; skipping.';
$string['rag:transcript_fetch_failed'] = 'Could not fetch transcript from {$a}.';
$string['rag:transcript_cf_challenge'] = 'Transcript URL blocked by Cloudflare challenge: {$a}.';
$string['rag:embed_detected'] = 'Detected embedded media: {$a}';
$string['rag:embed_transcript_attached'] = 'Transcript attached for {$a}';

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
