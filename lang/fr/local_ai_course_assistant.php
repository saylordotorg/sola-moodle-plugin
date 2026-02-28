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
 * @copyright  2025 AI Course Assistant
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
$string['settings:enabled'] = 'Activer l\'assistant de cours IA';
$string['settings:enabled_desc'] = 'Activer ou désactiver le widget de l\'assistant de cours IA sur les pages de cours.';
$string['settings:provider'] = 'Fournisseur IA';
$string['settings:provider_desc'] = 'Sélectionnez le fournisseur IA à utiliser pour les complétions de chat.';
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
$string['settings:avatar_saylor'] = 'Logo de Saylor Academy (par défaut)';
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
$string['chat:clear'] = 'Effacer l\'historique';
$string['chat:clear_confirm'] = 'Êtes-vous sûr de vouloir effacer votre historique de chat pour ce cours ?';
$string['chat:copy'] = 'Copier la conversation';
$string['chat:copied'] = 'Conversation copiée dans le presse-papiers';
$string['chat:copy_failed'] = 'Échec de la copie de la conversation';
$string['chat:greeting'] = 'Bonjour ! Je suis votre tuteur IA pour ce cours. Comment puis-je vous aider aujourd\'hui ?';
$string['chat:thinking'] = 'Réflexion en cours...';
$string['chat:error'] = 'Désolé, une erreur s\'est produite. Veuillez réessayer.';
$string['chat:error_auth'] = 'Erreur d\'authentification. Veuillez contacter votre administrateur.';
$string['chat:error_ratelimit'] = 'Trop de requêtes. Veuillez patienter un moment et réessayer.';
$string['chat:error_unavailable'] = 'Le service IA est temporairement indisponible. Veuillez réessayer ultérieurement.';
$string['chat:error_notconfigured'] = 'Le tuteur IA n\'a pas encore été configuré. Veuillez contacter votre administrateur.';
$string['chat:expand'] = 'Agrandir le chat';
$string['chat:collapse'] = 'Réduire le chat';
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
