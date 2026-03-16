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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'Fournisseur AI';
$string['settings:provider_desc'] = 'Tann fournisseur AI bi ngay jëfandikoo ci complétions wax-ak-wax yi.';
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
$string['chat:clear'] = 'Fay historique bi';
$string['chat:clear_confirm'] = 'Mbaa dëgg nga bëgg a fay sa historique wax-ak-wax ci cours boobu?';
$string['chat:copy'] = 'Copie wax-ak-wax bi';
$string['chat:copied'] = 'Wax-ak-wax bi dañ ko copié ci clipboard bi';
$string['chat:copy_failed'] = 'Copie wax-ak-wax bi defoo kaay';
$string['chat:greeting'] = 'Salaam! Maa ngi professeur AI bi ci cours boobu. Ana luy moo dem ngay mënna ndimmal ma jàng tey?';
$string['chat:thinking'] = 'Xam xamam...';
$string['chat:error'] = 'Baal ma, dafa am problème. Jëf alal ci kanam.';
$string['chat:error_auth'] = 'Erreur authentification. Jooy administrateur bi.';
$string['chat:error_ratelimit'] = 'Ay demande yu bari lool. Dëgël ci wëkër ak jëf alal.';
$string['chat:error_unavailable'] = 'Service AI bi dafay nekk ci sa xel bu yegeel. Jëf alal ci kanam.';
$string['chat:error_notconfigured'] = 'Professeur AI bi amul encore configuration. Jooy administrateur bi.';
$string['chat:expand'] = 'Yaatal wax-ak-wax bi';
$string['chat:collapse'] = 'Fàss wax-ak-wax bi';
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

$string['chat:greeting'] = 'Mangi fi, {$a}! Maa ngi di SOLA, wërsëg-jàng ji ci biir internet bi Saylor.';
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
$string['task:send_inactivity_reminders'] = 'Yónne bataaxal ci ayu-bis yu ngën-ngën yi ngir bañ liggéey';
$string['messageprovider:study_notes'] = 'Téere yi ci diggante jàng bi';
$string['task:send_inactivity_reminders'] = 'Yónnal bataaxal xalaat ci at ci biir ayu-bés';
$string['messageprovider:study_notes'] = 'Bindu ci jàng yi';
