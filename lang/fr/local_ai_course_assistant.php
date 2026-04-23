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
 * Language strings for local_ai_course_assistant — French.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Assistant de cours IA';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Stocke les conversations du tuteur IA par utilisateur et par cours.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'L\'identifiant de l\'utilisateur propriétaire de la conversation.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'L\'identifiant du cours auquel appartient la conversation.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Le titre de la conversation.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'L\'heure à laquelle la conversation a été créée.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'L\'heure de la dernière modification de la conversation.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Stocke les messages individuels des conversations du tuteur IA.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'L\'identifiant de l\'utilisateur qui a envoyé le message.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'L\'identifiant du cours auquel appartient le message.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Le rôle de l\'expéditeur du message (utilisateur ou assistant).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Le contenu du message.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Le nombre de jetons utilisés pour le message.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'L\'heure à laquelle le message a été créé.';
$string['ai_course_assistant:use'] = 'Utiliser le chat du tuteur IA';
$string['ai_course_assistant:viewanalytics'] = 'Consulter les analyses du chat du tuteur IA';
$string['ai_course_assistant:manage'] = 'Gérer les paramètres du chat du tuteur IA (rôle Administrateur)';
$string['task:run_meta_ai_query'] = 'Exécuter la requête d\'analytique Radar d\'Apprentissage planifiée';
$string['settings:enabled'] = 'Activer l\'assistant de cours IA';
$string['settings:enabled_desc'] = 'Activer ou désactiver le widget de l\'assistant de cours IA sur les pages de cours.';
$string['settings:default_course_mode'] = 'Valeur par défaut pour les nouveaux cours';
$string['settings:default_course_mode_desc'] = 'Contrôle si SOLA apparaît sur un cours lorsqu\'aucun choix par cours n\'a été effectué. Les nouvelles installations sont par défaut sur "Désactivé par défaut" afin que les administrateurs puissent activer cours par cours depuis la page Analytics ou la page Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Désactivé par défaut (activer par cours)';
$string['settings:default_course_mode_all'] = 'Activé sur tous les cours';
$string['settings:auto_open'] = 'Ouverture automatique à la première visite';
$string['settings:auto_open_desc'] = 'Lorsque cette option est activée, le tiroir SOLA s\'ouvre automatiquement la première fois qu\'un étudiant arrive sur chaque cours. Les chargements de page suivants dans le même cours ne rouvrent pas le tiroir — l\'état est suivi par cours dans le navigateur de l\'étudiant via localStorage. S\'applique sur ordinateur et mobile. Peut être remplacé par cours depuis la page Course AI Settings.';
$string['settings:comparison_providers'] = 'Fournisseurs de comparaison (sélecteur LLM)';
$string['settings:comparison_providers_desc'] = 'Ajoutez des fournisseurs d\'IA supplémentaires au sélecteur LLM intégré au widget pour que les administrateurs puissent comparer les réponses entre fournisseurs. Utilisez le tableau ci-dessous pour ajouter des lignes. La colonne de température est facultative (laissez vide pour utiliser la température globale). Format stocké : provider_id|api_key|model1,model2|temperature. Le fournisseur principal configuré ci-dessus est toujours inclus automatiquement. Seuls les administrateurs ayant la capacité de gestion voient le sélecteur ; les étudiants ne le voient jamais. IDs de fournisseur valides : openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Fournisseur IA par défaut';
$string['settings:provider_desc'] = 'Sélectionnez le fournisseur d\'IA à utiliser pour les complétions de chat. Choisissez "Moodle AI (core_ai subsystem)" pour acheminer les requêtes via la configuration d\'IA intégrée de Moodle dans Site admin > AI ; les champs clé d\'API, modèle et URL de base ci-dessous sont ignorés dans ce mode. Le streaming, l\'utilisation d\'outils et le prompt caching ne sont pas disponibles via core_ai — les réponses sont livrées en un seul bloc. Utilisez un fournisseur direct pour la meilleure expérience étudiante.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Local)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Personnalisé (compatible OpenAI)';
$string['settings:apikey'] = 'Clé API';
$string['settings:apikey_desc'] = 'Clé API pour le fournisseur sélectionné. Non requise pour Ollama.';
$string['settings:model'] = 'Nom du modèle';
$string['settings:model_desc'] = 'Le modèle à utiliser. La valeur par défaut dépend du fournisseur (ex. : claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL de base de l\'API';
$string['settings:apibaseurl_desc'] = 'URL de base de l\'API. Remplie automatiquement selon le fournisseur, mais peut être remplacée. Laisser vide pour utiliser la valeur par défaut du fournisseur.';
$string['settings:systemprompt'] = 'Modèle de prompt système';
$string['settings:systemprompt_desc'] = 'Prompt système envoyé à l\'IA. Utilisez les espaces réservés : {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Vous êtes un tuteur IA utile pour le cours "{{coursename}}". Le rôle de l\'étudiant est {{userrole}}.

Sujets abordés dans le cours :
{{coursetopics}}

Aidez l\'étudiant à comprendre le contenu du cours. Soyez encourageant, clair et pédagogiquement rigoureux.';
$string['settings:temperature'] = 'Température';
$string['settings:temperature_desc'] = 'Contrôle l\'aléatoire. Les valeurs basses sont plus ciblées, les valeurs élevées plus créatives. Plage : 0,0 à 2,0.';
$string['settings:maxhistory'] = 'Historique de conversation maximum';
$string['settings:maxhistory_desc'] = 'Nombre maximum de paires de messages à inclure dans les requêtes API. Les messages plus anciens sont supprimés.';
$string['settings:avatar'] = 'Avatar du chat';
$string['settings:avatar_desc'] = 'Sélectionnez l\'icône d\'avatar pour le bouton du widget de chat.';
$string['settings:avatar_saylor'] = 'Logo de {$a} (par défaut)';
$string['settings:position'] = 'Position du widget';
$string['settings:position_desc'] = 'Position du widget de chat sur la page.';
$string['settings:position_br'] = 'En bas à droite';
$string['settings:position_bl'] = 'En bas à gauche';
$string['settings:position_tr'] = 'En haut à droite';
$string['settings:position_tl'] = 'En haut à gauche';
$string['chat:settings'] = 'Paramètres du plugin';
$string['analytics:viewdashboard'] = 'Afficher le tableau de bord des analyses';
$string['coursesettings:title'] = 'Paramètres IA du cours';
$string['coursesettings:enabled'] = 'Activer les remplacements du cours';
$string['coursesettings:enabled_desc'] = 'Lorsqu\'ils sont activés, les paramètres ci-dessous remplacent la configuration globale du fournisseur IA pour ce cours uniquement. Laissez les champs vides pour hériter de la valeur globale.';
$string['coursesettings:sola_enabled'] = 'SOLA sur ce cours';
$string['coursesettings:sola_enabled_toggle'] = 'Afficher le widget SOLA sur ce cours';
$string['coursesettings:sola_enabled_desc'] = 'Contrôle si le widget de chat SOLA apparaît sur ce cours. La valeur par défaut pour tout le site est définie dans les paramètres du plugin sous General > Default for new courses.';
$string['coursesettings:using_global'] = 'Utilisation du paramètre global';
$string['coursesettings:saved'] = 'Paramètres IA du cours enregistrés.';
$string['coursesettings:global_settings_link'] = 'Paramètres IA globaux';
$string['lang:switch'] = 'Oui, changer';
$string['lang:dismiss'] = 'Non merci';
$string['lang:change'] = 'Changer de langue';
$string['lang:english'] = 'Anglais';
$string['chat:title'] = 'Tuteur IA';
$string['chat:placeholder'] = 'Posez une question...';
$string['chat:send'] = 'Envoyer';
$string['chat:close'] = 'Fermer le chat';
$string['chat:open'] = 'Ouvrir le chat du tuteur IA';
$string['chat:clear'] = 'Effacer l\'écran';
$string['chat:clear_confirm'] = 'Effacer les messages visibles ? Votre historique de chat complet reste enregistré et peut être rechargé en rouvrant le widget.';
$string['chat:copy'] = 'Copier la conversation';
$string['chat:copied'] = 'Conversation copiée dans le presse-papiers';
$string['chat:copy_failed'] = 'Échec de la copie de la conversation';
$string['chat:thinking'] = 'Réflexion en cours...';
$string['chat:error'] = 'Désolé, une erreur s\'est produite. Veuillez réessayer.';
$string['chat:error_auth'] = 'Erreur d\'authentification. Veuillez contacter votre administrateur.';
$string['chat:error_ratelimit'] = 'Trop de requêtes. Veuillez patienter un moment et réessayer.';
$string['chat:error_unavailable'] = 'Le service IA est temporairement indisponible. Veuillez réessayer ultérieurement.';
$string['chat:error_notconfigured'] = 'Le tuteur IA n\'a pas encore été configuré. Veuillez contacter votre administrateur.';
$string['chat:mic'] = 'Formulez votre question oralement';
$string['chat:mic_error'] = 'Erreur de microphone. Veuillez vérifier les autorisations de votre navigateur.';
$string['chat:mic_unsupported'] = 'La saisie vocale n\'est pas prise en charge par ce navigateur.';
$string['chat:newline_hint'] = 'Maj+Entrée pour un nouveau paragraphe';
$string['chat:you'] = 'Vous';
$string['chat:assistant'] = 'Tuteur IA';
$string['chat:history_loaded'] = 'Conversation précédente chargée.';
$string['chat:history_cleared'] = 'Historique du chat effacé.';
$string['chat:offtopic_warning'] = 'Il semble que votre question ne soit pas liée à ce cours. Essayez de rester dans le sujet pour que je puisse vous aider au mieux !';
$string['chat:offtopic_ended'] = 'Votre accès au tuteur IA a été temporairement suspendu pendant {$a} minutes car la conversation a dérivé hors sujet trop souvent. Profitez de ce temps pour revoir vos supports de cours, et vous pourrez réessayer ultérieurement.';
$string['chat:offtopic_locked'] = 'Votre accès au tuteur IA est temporairement suspendu. Vous pourrez réessayer dans {$a} minutes. Concentrez-vous sur des questions liées au cours à votre retour.';
$string['chat:escalated_to_support'] = 'Je n\'ai pas pu répondre complètement à votre question, j\'ai donc créé un ticket de support pour vous. Un membre de l\'équipe de support vous contactera. Votre numéro de ticket est : {$a}';
$string['chat:studyplan_intro'] = 'Je peux vous aider à créer un plan d\'étude pour ce cours ! Dites-moi simplement combien d\'heures par semaine vous pouvez consacrer à l\'étude, et je vous aiderai à construire un plan structuré.';
$string['settings:faq_heading'] = 'FAQ et support';
$string['settings:faq_heading_desc'] = 'Configurer la FAQ centralisée et l\'intégration des tickets de support Zendesk.';
$string['settings:faq_content'] = 'Contenu de la FAQ';
$string['settings:faq_content_desc'] = 'Saisissez les entrées de la FAQ (une par ligne au format : Q : question | A : réponse). Elles seront fournies à l\'IA pour répondre aux questions de support courantes.';
$string['settings:zendesk_enabled'] = 'Activer l\'escalade Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Lorsque l\'IA ne peut pas résoudre une question de support, créer automatiquement un ticket Zendesk avec un résumé de la conversation.';
$string['settings:zendesk_subdomain'] = 'Sous-domaine Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Votre sous-domaine Zendesk (ex. : "masociete" pour masociete.zendesk.com).';
$string['settings:zendesk_email'] = 'E-mail API Zendesk';
$string['settings:zendesk_email_desc'] = 'Adresse e-mail de l\'utilisateur Zendesk pour l\'authentification API (avec le suffixe /token).';
$string['settings:zendesk_token'] = 'Jeton API Zendesk';
$string['settings:zendesk_token_desc'] = 'Jeton API pour l\'authentification Zendesk.';
$string['settings:offtopic_heading'] = 'Détection des hors-sujets';
$string['settings:offtopic_heading_desc'] = 'Configurer la manière dont le chat gère les conversations hors sujet.';
$string['settings:offtopic_enabled'] = 'Activer la détection des hors-sujets';
$string['settings:offtopic_enabled_desc'] = 'Demander à l\'IA de détecter et de rediriger les conversations hors sujet.';
$string['settings:offtopic_max'] = 'Nombre maximum de messages hors sujet';
$string['settings:offtopic_max_desc'] = 'Nombre de messages hors sujet consécutifs avant de prendre une mesure.';
$string['settings:offtopic_action'] = 'Action en cas de hors-sujet';
$string['settings:offtopic_action_desc'] = 'Que faire lorsque la limite hors sujet est atteinte.';
$string['settings:offtopic_action_warn'] = 'Avertir et rediriger';
$string['settings:offtopic_action_end'] = 'Bloquer temporairement l\'accès';
$string['settings:offtopic_lockout_duration'] = 'Durée du blocage (en minutes)';
$string['settings:offtopic_lockout_duration_desc'] = 'Durée (en minutes) pendant laquelle un étudiant perd l\'accès au tuteur IA après avoir dépassé la limite hors sujet. Par défaut : 30 minutes.';
$string['settings:studyplan_heading'] = 'Planification des études et rappels';
$string['settings:studyplan_heading_desc'] = 'Configurer les fonctionnalités de planification des études et les notifications de rappel.';
$string['settings:studyplan_enabled'] = 'Activer la planification des études';
$string['settings:studyplan_enabled_desc'] = 'Permettre au tuteur IA d\'aider les étudiants à créer des plans d\'étude personnalisés en fonction de leur temps disponible.';
$string['settings:reminders_email_enabled'] = 'Activer les rappels par e-mail';
$string['settings:reminders_email_enabled_desc'] = 'Permettre aux étudiants de s\'inscrire aux rappels d\'étude par e-mail.';
$string['settings:reminders_whatsapp_enabled'] = 'Activer les rappels WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Permettre aux étudiants de s\'inscrire aux rappels d\'étude via WhatsApp (nécessite la configuration de l\'API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL de l\'API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Le point de terminaison API pour l\'envoi de messages WhatsApp (ex. : Twilio, MessageBird). Doit accepter POST avec un corps JSON contenant les champs "to", "from" et "body".';
$string['settings:whatsapp_api_token'] = 'Jeton API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Jeton d\'authentification pour l\'API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Numéro d\'expéditeur WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Le numéro de téléphone depuis lequel envoyer les messages WhatsApp (avec l\'indicatif pays, ex. : +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Pays bloqués pour WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Codes pays ISO 3166-1 alpha-2 séparés par des virgules où les rappels WhatsApp ne sont pas autorisés en raison des réglementations locales (ex. : "CN,IR,KP").';
$string['reminder:email_subject'] = 'Rappel d\'étude : {$a}';
$string['reminder:email_body'] = 'Bonjour {$a->firstname},

Voici votre rappel d\'étude pour "{$a->coursename}".

{$a->message}

Votre plan d\'étude suggère {$a->hours_per_week} heures par semaine pour ce cours.

Continuez comme ça !

---
Pour ne plus recevoir ces rappels, cliquez ici : {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Rappel d\'étude pour {$a->coursename} : {$a->message} (Se désabonner : {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Objectif d\'étude du jour : ';
$string['unsubscribe:title'] = 'Se désabonner des rappels d\'étude';
$string['unsubscribe:success'] = 'Vous avez été désabonné avec succès des rappels d\'étude pour ce cours.';
$string['unsubscribe:already'] = 'Vous avez déjà été désabonné de ces rappels.';
$string['unsubscribe:invalid'] = 'Lien de désabonnement invalide ou expiré.';
$string['unsubscribe:resubscribe'] = 'Vous avez changé d\'avis ? Vous pouvez réactiver les rappels via le chat du tuteur IA.';
$string['task:send_reminders'] = 'Envoyer les rappels d\'étude du tuteur IA';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Stocke les plans d\'étude des étudiants.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'L\'identifiant de l\'utilisateur propriétaire du plan d\'étude.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Le cours auquel appartient le plan d\'étude.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Heures par semaine que l\'étudiant prévoit d\'étudier.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Les détails du plan d\'étude au format JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Stocke les préférences de rappels d\'étude et les abonnements.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'L\'identifiant de l\'utilisateur abonné aux rappels.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Le canal de rappel (e-mail ou WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'L\'adresse e-mail ou le numéro de téléphone pour les rappels.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Le code pays de l\'utilisateur pour la conformité réglementaire.';
$string['analytics:title'] = 'Analyses du tuteur IA';
$string['analytics:overview'] = 'Vue d\'ensemble';
$string['analytics:total_conversations'] = 'Total des conversations';
$string['analytics:total_messages'] = 'Total des messages';
$string['analytics:active_students'] = 'Étudiants actifs';
$string['analytics:avg_messages_per_student'] = 'Moy. de messages par étudiant';
$string['analytics:offtopic_rate'] = 'Taux de hors-sujet';
$string['analytics:escalation_count'] = 'Escaladé vers le support';
$string['analytics:studyplan_adoption'] = 'Étudiants avec des plans d\'étude';
$string['analytics:usage_trends'] = 'Tendances d\'utilisation';
$string['analytics:daily_messages'] = 'Volume de messages quotidien';
$string['analytics:hotspots'] = 'Points chauds du cours';
$string['analytics:hotspots_desc'] = 'Sections du cours les plus fréquemment citées dans les questions des étudiants. Des nombres élevés peuvent indiquer des domaines où les étudiants ont besoin de plus de soutien.';
$string['analytics:section'] = 'Section';
$string['analytics:mention_count'] = 'Mentions';
$string['analytics:common_prompts'] = 'Modèles de questions courants';
$string['analytics:common_prompts_desc'] = 'Modèles de questions récurrentes des étudiants. Examinez-les pour identifier les lacunes systémiques dans le contenu du cours.';
$string['analytics:prompt_pattern'] = 'Modèle';
$string['analytics:frequency'] = 'Fréquence';
$string['analytics:recent_activity'] = 'Activité récente';
$string['analytics:no_data'] = 'Aucune donnée analytique disponible pour l\'instant. Les données apparaîtront dès que les étudiants commenceront à utiliser le tuteur IA.';
$string['analytics:timerange'] = 'Plage temporelle';
$string['analytics:last_7_days'] = '7 derniers jours';
$string['analytics:last_30_days'] = '30 derniers jours';
$string['analytics:all_time'] = 'Toute la période';
$string['analytics:export'] = 'Exporter les données';
$string['analytics:provider_comparison'] = 'Comparaison des fournisseurs IA';
$string['analytics:provider_comparison_desc'] = 'Comparez les performances des fournisseurs IA utilisés dans ce cours.';
$string['analytics:provider'] = 'Fournisseur';
$string['analytics:response_count'] = 'Réponses';
$string['analytics:avg_response_length'] = 'Longueur moy. des réponses';
$string['analytics:total_tokens'] = 'Total de jetons';
$string['analytics:avg_tokens'] = 'Moy. de jetons / réponse';
$string['usersettings:title'] = 'Assistant de cours IA - Vos données';
$string['usersettings:intro'] = 'Gérez vos données de chat du tuteur IA et vos paramètres de confidentialité';
$string['usersettings:privacy_info'] = 'Vos conversations avec le tuteur IA sont stockées pour vous fournir un soutien continu tout au long de votre cours. Vous avez le contrôle total de ces données et pouvez les supprimer à tout moment.';
$string['usersettings:usage_stats'] = 'Vos statistiques d\'utilisation';
$string['usersettings:total_messages'] = 'Total des messages';
$string['usersettings:total_conversations'] = 'Conversations';
$string['usersettings:messages'] = 'Messages';
$string['usersettings:last_activity'] = 'Dernière activité';
$string['usersettings:delete_course_data'] = 'Supprimer les données du cours';
$string['usersettings:no_data'] = 'Vous n\'avez pas encore utilisé le tuteur IA. Vos données d\'utilisation apparaîtront ici dès que vous commencerez à chatter.';
$string['usersettings:delete_all_title'] = 'Supprimer toutes vos données';
$string['usersettings:delete_all_warning'] = 'Cette action supprimera définitivement toutes vos conversations avec le tuteur IA dans tous les cours. Cette action est irréversible.';
$string['usersettings:delete_all_button'] = 'Supprimer toutes mes données';
$string['usersettings:confirm_delete_course'] = 'Êtes-vous sûr de vouloir supprimer définitivement toutes vos données de tuteur IA pour le cours "{$a}" ? Cette action est irréversible.';
$string['usersettings:confirm_delete_all'] = 'Êtes-vous sûr de vouloir supprimer définitivement TOUTES vos données de tuteur IA dans tous les cours ? Cette action est irréversible.';
$string['usersettings:data_deleted'] = 'Vos données ont été supprimées.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Bonjour, {$a} ! Je suis SOLA. Comment puis-je vous aider aujourd\'hui ?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Ouvrir SOLA';
$string['chat:change_avatar'] = 'Changer d\'avatar';

// Quiz UI.
$string['chat:quiz'] = 'Faire un quiz d\'entraînement';
$string['chat:quiz_setup_title'] = 'Quiz d\'entraînement';
$string['chat:quiz_questions'] = 'Nombre de questions';
$string['chat:quiz_topic'] = 'Sujet';
$string['chat:quiz_topic_guided'] = 'Guidé par l\'IA (selon votre progression)';
$string['chat:quiz_topic_default'] = 'Contenu actuel du cours';
$string['chat:quiz_topic_custom'] = 'Sujet personnalisé…';
$string['chat:quiz_custom_placeholder'] = 'Entrez un sujet ou une question...';
$string['chat:quiz_start'] = 'Commencer le quiz';
$string['chat:quiz_cancel'] = 'Annuler';
$string['chat:quiz_loading'] = 'Génération du quiz…';
$string['chat:quiz_error'] = 'Impossible de générer un quiz. Veuillez réessayer.';
$string['chat:quiz_correct'] = 'Correct !';
$string['chat:quiz_wrong'] = 'Incorrect.';
$string['chat:quiz_next'] = 'Question suivante';
$string['chat:quiz_finish'] = 'Voir les résultats';
$string['chat:quiz_score'] = 'Quiz terminé ! Vous avez obtenu {$a->score} sur {$a->total}.';
$string['chat:quiz_summary'] = 'Je viens de terminer un quiz d\'entraînement de {$a->total} questions sur « {$a->topic} » et j\'ai obtenu {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Objectifs d\'apprentissage';
$string['chat:quiz_topic_modules'] = 'Sujet du cours';
$string['chat:quiz_subtopic_select'] = 'Sélectionner un élément spécifique…';
$string['chat:quiz_topic_sections'] = 'Sections du cours';
$string['chat:quiz_score_great'] = 'Excellent travail ! Vous maîtrisez vraiment cette matière.';
$string['chat:quiz_score_good'] = 'Bon effort ! Continuez à réviser pour renforcer votre compréhension.';
$string['chat:quiz_score_practice'] = 'Continuez à vous entraîner — essayez de revoir le contenu du cours correspondant, puis refaites le quiz.';
$string['chat:quiz_review_heading'] = 'Révision';
$string['chat:quiz_retake'] = 'Refaire le quiz';
$string['chat:quiz_exit'] = 'Quitter le quiz';
$string['chat:quiz_your_answer'] = 'Votre réponse';
$string['chat:quiz_correct_answer'] = 'Bonne réponse';

// Conversation starters.
$string['chat:starters_label'] = 'Amorces de conversation';
$string['chat:starter_quiz'] = 'Testez-moi là-dessus';
$string['chat:starter_explain'] = 'Expliquer ceci';
$string['chat:starter_key_concepts'] = 'Concepts clés';
$string['chat:starter_study_plan'] = 'Plan d\'étude';
$string['chat:starter_help_me'] = 'Aide IA';
$string['chat:starter_ai_project_coach'] = 'Coach de projet IA';
$string['chat:starter_ell_practice'] = 'Pratique de conversation';
$string['chat:starter_ell_pronunciation'] = 'Prononciation ELL';
$string['chat:starter_ai_coach'] = 'Coach IA';
$string['chat:starter_speak'] = 'Parler une amorce';

// Reset / home.
$string['chat:reset'] = 'Recommencer';

// Topic picker.
$string['chat:topic_picker_title'] = 'Sur quoi souhaitez-vous vous concentrer ?';
$string['chat:topic_picker_title_help'] = 'Avec quoi avez-vous besoin d\'aide ?';
$string['chat:topic_picker_title_explain'] = 'Que souhaitez-vous que j\'explique ?';
$string['chat:topic_picker_title_study'] = 'Sur quel domaine souhaitez-vous vous concentrer ?';
$string['chat:topic_start'] = 'Continuer';

// Expand states.
$string['chat:fullscreen'] = 'Plein écran';
$string['chat:exitfullscreen'] = 'Quitter le plein écran';

// Settings panel.
$string['chat:language'] = 'Changer de langue';
$string['chat:settings_panel'] = 'Paramètres';
$string['chat:settings_language'] = 'Langue';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Voix';
$string['chat:settings_voice_admin'] = 'Les paramètres de voix sont gérés dans le panneau d\'administration du site.';

// Voice mode.
$string['chat:voice_mode'] = 'Mode vocal';
$string['chat:voice_end'] = 'Terminer la session vocale';
$string['chat:voice_connecting'] = 'Connexion en cours...';
$string['chat:voice_listening'] = 'Écoute en cours...';
$string['chat:voice_speaking'] = 'SOLA parle...';
$string['chat:voice_idle'] = 'Prêt';
$string['chat:voice_error'] = 'La connexion vocale a échoué. Veuillez vérifier vos paramètres.';
$string['chat:quiz_locked'] = 'SOLA est en pause pendant les quiz pour préserver l\'intégrité académique. Bonne chance !';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Notes';

// History panel.
$string['chat:history_title'] = 'Notes et historique des conversations';
$string['task:send_inactivity_reminders'] = 'Envoyer des e-mails de rappel hebdomadaires en cas d\'inactivité';
$string['messageprovider:study_notes'] = 'Notes de session d\'étude';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Livraison du frontend';
$string['settings:cdn_heading_desc'] = 'Servir les ressources frontend de SOLA (JS/CSS) depuis un CDN externe au lieu du système de fichiers Moodle. Cela permet des mises à jour du frontend sans mise à niveau du plugin. Laissez l\'URL CDN vide pour utiliser les fichiers locaux du plugin.';
$string['settings:cdn_url'] = 'URL de base CDN';
$string['settings:cdn_url_desc'] = 'URL de base où sont hébergés sola.min.js et sola.min.css. Exemple : https://your-org.github.io/sola-cdn. Laissez vide pour utiliser les fichiers locaux du plugin.';
$string['settings:cdn_version'] = 'Version des ressources CDN';
$string['settings:cdn_version_desc'] = 'Chaîne de version ajoutée aux URLs CDN pour le cache busting. Mettez à jour après chaque déploiement CDN (ex. 3.2.4 ou un commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Utilisation globale';
$string['analytics:tab_bycourse'] = 'Par cours';
$string['analytics:tab_comparison'] = 'AI vs non-utilisateurs';
$string['analytics:tab_byunit'] = 'Par unité';
$string['analytics:tab_usagetypes'] = 'Types d\'utilisation';
$string['analytics:tab_themes'] = 'Thèmes';
$string['analytics:tab_feedback'] = 'Retours AI';
$string['analytics:total_students'] = 'Total étudiants';
$string['analytics:active_users'] = 'Utilisateurs AI actifs';
$string['analytics:msgs_per_student'] = 'Messages par étudiant';
$string['analytics:avg_session'] = 'Durée moyenne de session';
$string['analytics:return_rate'] = 'Taux de retour';
$string['analytics:total_sessions'] = 'Total des sessions';
$string['analytics:thumbs_up'] = 'Pouce en haut';
$string['analytics:thumbs_down'] = 'Pouce en bas';
$string['analytics:hallucination_flags'] = 'Signalements d\'inexactitude';
$string['analytics:msgs_to_resolution'] = 'Messages jusqu\'à résolution';
$string['analytics:helpful'] = 'Utile';
$string['analytics:not_helpful'] = 'Pas utile';
$string['analytics:flag_hallucination'] = 'Cette réponse contient des informations inexactes';
$string['analytics:submit_rating'] = 'Envoyer';
$string['analytics:thanks_feedback'] = 'Merci pour votre retour';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Expliquer cette page';
$string['chat:starter_ask_anything'] = 'Posez une question';
$string['chat:starter_review_practice'] = 'Réviser et pratiquer';
$string['chat:history_saved_subtitle'] = 'Les réponses enregistrées restent sur cet appareil pour ce cours.';
$string['chat:history_saved_empty'] = 'Enregistrez une réponse de l\'IA pour la voir ici.';
$string['chat:history_views_label'] = 'Vues de l\'historique';
$string['chat:history_view_saved'] = 'Enregistrées';
$string['chat:history_view_recent'] = 'Historique';
$string['chat:debug_refresh'] = 'Actualiser';
$string['chat:debug_copy_all'] = 'Tout copier';
$string['chat:debug_close'] = 'Fermer';
$string['chat:language_switch'] = 'Changer de langue';
$string['chat:language_dismiss'] = 'Ignorer la suggestion de langue';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Sélectionner le fournisseur LLM';
$string['chat:llm_model_label'] = 'Modèle';
$string['chat:llm_model_select'] = 'Sélectionner le modèle LLM';
$string['chat:footer_usertesting'] = 'Tests d\'utilisabilité';
$string['chat:footer_feedback'] = 'Commentaires';
$string['chat:voice_panel_title'] = 'Parler avec {$a} (Expérimental)';

// Additional translated strings.
$string['chat:debug_context'] = 'Débogage du contexte';
$string['chat:debug_context_browser'] = 'Instantané du navigateur';
$string['chat:debug_context_copy'] = 'Copier';
$string['chat:debug_context_prompt'] = 'Réponse du serveur';
$string['chat:debug_context_request'] = 'Dernière requête SSE';
$string['chat:debug_context_toggle'] = 'Basculer l\'inspecteur';
$string['chat:history_empty'] = 'Aucune conversation.';
$string['chat:history_refresh'] = 'Actualiser';
$string['chat:history_subtitle'] = 'Vos messages récents dans ce cours.';
$string['chat:starter_explain_prompt'] = 'Pouvez-vous expliquer le concept le plus important ?';
$string['chat:starter_help_lesson'] = 'Expliquez ceci';
$string['chat:starter_help_lesson_prompt'] = 'Aidez-moi à comprendre la leçon. Résumez les concepts clés.';
$string['chat:starter_prompt_coach'] = 'Coach IA';
$string['chat:starter_quick_study'] = 'Étude rapide';
$string['chat:starter_study_plan_prompt'] = 'Je veux planifier mon étude. Demandez : (1) objectif aujourd\'hui, (2) temps disponible. Mettez à jour le plan.';
$string['chat:voice_copy'] = 'Conversation vocale avec votre assistant.';
$string['chat:voice_ready'] = 'Prêt';
$string['chat:voice_start'] = 'Démarrer';
$string['chat:voice_title'] = 'Parlez avec SOLA';
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
$string['mobile_chip_concepts'] = 'Concepts clés';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Plan d\'études';
$string['mobile_clear'] = 'Effacer l\'historique';
$string['mobile_disabled'] = 'SOLA n\'est pas disponible pour ce cours.';
$string['mobile_placeholder'] = 'Posez une question...';
$string['mobile_welcome'] = 'Bonjour, {$a} !';
$string['mobile_welcome_sub'] = 'Je suis SOLA, votre assistant d\'apprentissage. Comment puis-je vous aider ?';
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
$string['rubric:done'] = 'Terminé';
$string['rubric:encourage_high'] = 'Excellent ! Continuez !';
$string['rubric:encourage_low'] = 'Bon début ! La pratique régulière vous aidera.';
$string['rubric:encourage_mid'] = 'Bon effort ! Continuez à pratiquer.';
$string['rubric:overall'] = 'Global';
$string['rubric:practice_again'] = 'S\'exercer à nouveau';
$string['rubric:score_title_conversation'] = 'Score de pratique de conversation';
$string['rubric:score_title_pronunciation'] = 'Score de pratique de prononciation';
$string['rubric:scoring'] = 'Évaluation en cours...';
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
$string['demo:title'] = 'Environnement de test';
$string['demo:heading'] = 'Environnement de test';
$string['demo:intro'] = 'Cette page crée un cours de test <strong>masqué aux étudiants</strong> (visible=0) et le remplit avec des étudiants fictifs, des conversations IA, des évaluations et des retours. Utile pour prévisualiser le tableau de bord Analytics ou valider des changements du plugin sans affecter aucun étudiant réellement inscrit.';
$string['demo:step1'] = 'Étape 1 : cours de test';
$string['demo:step2'] = 'Étape 2 : ajouter des étudiants fictifs et des chats IA';
$string['demo:course_exists'] = 'Cours de test existant : <strong>{$a->fullname}</strong> (nom court <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'masqué';
$string['demo:badge_visible'] = 'visible pour les étudiants';
$string['demo:no_course'] = 'Aucun cours de test trouvé. Cliquez ci-dessous pour en créer un.';
$string['demo:create_btn'] = 'Créer un cours de test masqué';
$string['demo:open_course'] = 'Ouvrir le cours &rarr;';
$string['demo:seed_intro'] = 'Crée demo_student_001, demo_student_002, ..., les inscrit au cours de test et insère des conversations, messages, évaluations et retours synthétiques. Exécutez à nouveau pour ajouter plus de données, ou cochez « effacer d\'abord » pour recommencer.';
$string['demo:users_label'] = 'Utilisateurs';
$string['demo:weeks_label'] = 'Semaines';
$string['demo:clear_label'] = 'Effacer d\'abord les utilisateurs demo_* existants';
$string['demo:seed_btn'] = 'Ajouter des étudiants et des chats';
$string['demo:view_analytics'] = 'Voir les statistiques de ce cours &rarr;';
$string['demo:footer'] = 'Les données créées ici se trouvent dans les tables utilisateurs / inscriptions standards de Moodle et dans les tables de conversations propres au plugin. Tous les utilisateurs fictifs ont des noms d\'utilisateur commençant par <code>demo_student_</code> afin d\'être faciles à filtrer ou supprimer. Pour les supprimer, relancez l\'étape d\'ajout avec « Effacer d\'abord les utilisateurs demo_* existants » cochée.';
$string['demo:course_fullname'] = 'Cours de test SOLA (masqué)';
$string['demo:notify_created'] = 'Cours de test prêt : {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Échec de la création du cours : {$a}';
$string['demo:notify_seeded'] = 'Ajoutés : {$a->users} utilisateurs, {$a->conversations} conversations, {$a->messages} messages, {$a->ratings} évaluations, {$a->feedback} retours.';
$string['demo:notify_seed_fail'] = 'Échec de l\'ajout des données : {$a}';
$string['toc:analytics'] = 'Tableau de bord Analytics &rarr;';
$string['toc:tokenanalytics'] = 'Coût des tokens et Analytics &rarr;';
$string['toc:testing'] = 'Environnement de test &rarr;';
$string['toc:back_to_course'] = '&larr; Retour à {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Binaire pdftotext introuvable ; extraction PDF désactivée.';
$string['rag:pdftotext_available'] = 'pdftotext détecté à {$a}.';
$string['rag:docx_unavailable'] = 'Extension PHP ZipArchive non disponible ; extraction DOCX désactivée.';
$string['rag:h5p_unavailable'] = 'Le contenu H5P n\'a pas pu être lu ; ignoré.';
$string['rag:scorm_too_large'] = 'Le paquet SCORM dépasse la limite de taille configurée ({$a} Mo) ; ignoré.';
$string['rag:scorm_unzip_failed'] = 'Le paquet SCORM n\'a pas pu être décompressé ; ignoré.';
$string['rag:transcript_fetch_failed'] = 'Impossible de récupérer la transcription depuis {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL de transcription bloquée par un défi Cloudflare : {$a}.';
$string['rag:embed_detected'] = 'Média intégré détecté : {$a}';
$string['rag:embed_transcript_attached'] = 'Transcription jointe pour {$a}';

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
