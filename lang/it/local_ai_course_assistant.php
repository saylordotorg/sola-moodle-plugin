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
 * Language strings for local_ai_course_assistant — Italian.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Assistente AI per il Corso';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Memorizza le conversazioni del tutor AI per utente e corso.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'L\'ID dell\'utente proprietario della conversazione.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'L\'ID del corso a cui appartiene la conversazione.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Il titolo della conversazione.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'L\'ora di creazione della conversazione.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'L\'ora dell\'ultima modifica della conversazione.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Memorizza i singoli messaggi nelle conversazioni del tutor AI.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'L\'ID dell\'utente che ha inviato il messaggio.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'L\'ID del corso a cui appartiene il messaggio.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Il ruolo del mittente del messaggio (utente o assistente).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Il contenuto del messaggio.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Il numero di token utilizzati per il messaggio.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'L\'ora di creazione del messaggio.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Utilizzare la chat del tutor AI';
$string['ai_course_assistant:viewanalytics'] = 'Visualizzare le analisi del tutor AI';
$string['ai_course_assistant:manage'] = 'Gestire le impostazioni del tutor AI (Ruolo Amministratore)';

// Settings.
$string['settings:enabled'] = 'Abilita Assistente AI per il Corso';
$string['settings:enabled_desc'] = 'Abilita o disabilita il widget Assistente AI nelle pagine del corso.';
$string['settings:provider'] = 'Provider AI';
$string['settings:provider_desc'] = 'Seleziona il provider AI da utilizzare per le risposte chat.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Locale)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_gemini'] = 'Google Gemini';
$string['settings:provider_custom'] = 'Personalizzato (compatibile OpenAI)';
$string['settings:apikey'] = 'Chiave API';
$string['settings:apikey_desc'] = 'Chiave API per il provider selezionato. Non richiesta per Ollama.';
$string['settings:model'] = 'Nome del Modello';
$string['settings:model_desc'] = 'Il modello da utilizzare. Il predefinito dipende dal provider.';
$string['settings:apibaseurl'] = 'URL Base API';
$string['settings:apibaseurl_desc'] = 'URL base per l\'API. Compilato automaticamente per provider ma può essere sovrascritto.';
$string['settings:systemprompt'] = 'Modello Prompt di Sistema';
$string['settings:systemprompt_desc'] = 'Prompt di sistema inviato all\'AI. Usa segnaposto: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:temperature'] = 'Temperatura';
$string['settings:temperature_desc'] = 'Controlla la casualità. Valori più bassi sono più focalizzati. Intervallo: 0.0 a 2.0.';
$string['settings:maxhistory'] = 'Cronologia conversazione massima';
$string['settings:maxhistory_desc'] = 'Numero massimo di coppie di messaggi da includere nelle richieste API.';
$string['settings:avatar'] = 'Icona Chat';
$string['settings:avatar_desc'] = 'Seleziona l\'icona avatar per il pulsante widget.';
$string['settings:avatar_color'] = 'Colore bordo avatar';
$string['settings:avatar_color_desc'] = 'Colore del bordo del pulsante avatar. Usa un valore hex.';
$string['settings:avatar_fill'] = 'Colore sfondo avatar';
$string['settings:avatar_fill_desc'] = 'Colore di riempimento all\'interno del pulsante avatar. Usa un valore hex.';
$string['settings:display_mode'] = 'Modalità di visualizzazione';
$string['settings:display_mode_desc'] = 'Come SOLA appare nella pagina.';
$string['settings:display_mode_widget'] = 'Widget (pulsante flottante)';
$string['settings:display_mode_drawer'] = 'Pannello laterale (lato destro)';
$string['settings:position'] = 'Posizione Widget';
$string['settings:position_desc'] = 'Posizione del widget nella pagina (solo in modalità Widget).';
$string['settings:position_br'] = 'In basso a destra';
$string['settings:position_bl'] = 'In basso a sinistra';
$string['settings:position_tr'] = 'In alto a destra';
$string['settings:position_tl'] = 'In alto a sinistra';
$string['chat:settings'] = 'Impostazioni plugin';
$string['analytics:viewdashboard'] = 'Visualizza dashboard analisi';

// Course settings.
$string['coursesettings:title'] = 'Impostazioni AI del Corso';
$string['coursesettings:enabled'] = 'Abilita override del corso';
$string['coursesettings:enabled_desc'] = 'Se abilitato, le impostazioni seguenti sovrascrivono la configurazione AI globale.';
$string['coursesettings:using_global'] = 'Utilizzo impostazione globale';
$string['coursesettings:saved'] = 'Impostazioni AI del corso salvate.';
$string['coursesettings:ell_pronunciation'] = 'Modalità pratica pronuncia';
$string['coursesettings:ell_pronunciation_desc'] = 'Mostra il chip "Pratica pronuncia" per gli studenti in questo corso.';
$string['coursesettings:ell_pronunciation_enable'] = 'Abilita chip pratica pronuncia';
$string['coursesettings:rag'] = 'Ricerca semantica (RAG)';
$string['coursesettings:rag_desc'] = 'Abilita la generazione aumentata da recupero per questo corso.';
$string['coursesettings:rag_enable'] = 'Abilita RAG per questo corso';
$string['coursesettings:speaking_practice'] = 'Pratica del parlato';
$string['coursesettings:speaking_practice_desc'] = 'Mostra il chip "Pratica del parlato" per gli studenti.';
$string['coursesettings:speaking_practice_enable'] = 'Abilita chip pratica del parlato';
$string['coursesettings:global_settings_link'] = 'Impostazioni AI globali';
$string['coursesettings:token_usage'] = 'Utilizzo token e costi';
$string['coursesettings:token_usage_desc'] = 'Visualizza utilizzo token, stime dei costi e ripartizioni per studente.';

// Language.
$string['lang:switch'] = 'Sì, cambia';
$string['lang:dismiss'] = 'No, grazie';
$string['lang:change'] = 'Cambia lingua';
$string['lang:english'] = 'Inglese';

// Chat widget.
$string['chat:title'] = 'SOLA';
$string['chat:placeholder'] = 'Fai una domanda...';
$string['chat:send'] = 'Invia';
$string['chat:close'] = 'Chiudi chat';
$string['chat:open'] = 'Apri SOLA';
$string['chat:change_avatar'] = 'Cambia avatar';
$string['chat:clear'] = 'Cancella cronologia';
$string['chat:clear_confirm'] = 'Sei sicuro di voler cancellare la cronologia della chat?';
$string['chat:copy'] = 'Copia conversazione';
$string['chat:copied'] = 'Conversazione copiata negli appunti';
$string['chat:copy_failed'] = 'Copia non riuscita';
$string['chat:greeting'] = 'Ciao, {$a}! Sono SOLA, il tuo Assistente di Apprendimento Online Saylor.';
$string['chat:thinking'] = 'Sto pensando...';
$string['chat:error'] = 'Spiacente, si è verificato un errore. Per favore riprova.';
$string['chat:error_auth'] = 'Errore di autenticazione. Contatta il tuo amministratore.';
$string['chat:error_ratelimit'] = 'Troppe richieste. Attendi un momento e riprova.';
$string['chat:error_unavailable'] = 'Il servizio AI è temporaneamente non disponibile.';
$string['chat:error_notconfigured'] = 'SOLA non è ancora stato configurato. Contatta il tuo amministratore.';
$string['chat:expand'] = 'Espandi chat';
$string['chat:collapse'] = 'Comprimi chat';
$string['chat:mic'] = 'Pronuncia la tua domanda';
$string['chat:mic_error'] = 'Errore microfono. Controlla i permessi del browser.';
$string['chat:mic_unsupported'] = 'L\'input vocale non è supportato in questo browser.';
$string['chat:newline_hint'] = 'Shift+Enter per nuova riga';
$string['chat:you'] = 'Tu';
$string['chat:assistant'] = 'SOLA';
$string['chat:history_loaded'] = 'Conversazione precedente caricata.';
$string['chat:history_cleared'] = 'Cronologia chat cancellata.';
$string['chat:offtopic_warning'] = 'La tua domanda non sembra correlata a questo corso. Per favore resta in argomento!';
$string['chat:offtopic_ended'] = 'L\'accesso al tutor AI è stato temporaneamente sospeso per {$a} minuti.';
$string['chat:offtopic_locked'] = 'Il tuo accesso è temporaneamente sospeso. Riprova tra {$a} minuti.';
$string['chat:escalated_to_support'] = 'Non sono riuscito a rispondere completamente alla tua domanda, è stato creato un ticket di supporto. Riferimento: {$a}';
$string['chat:studyplan_intro'] = 'Posso aiutarti a creare un piano di studio! Dimmi quante ore a settimana puoi dedicare allo studio.';

// Quiz.
$string['chat:quiz'] = 'Quiz di pratica';
$string['chat:quiz_setup_title'] = 'Quiz di Pratica';
$string['chat:quiz_questions'] = 'Numero di domande';
$string['chat:quiz_topic'] = 'Argomento';
$string['chat:quiz_topic_guided'] = 'Guidato dall\'AI (basato sui tuoi progressi)';
$string['chat:quiz_topic_default'] = 'Contenuto attuale del corso';
$string['chat:quiz_topic_custom'] = 'Argomento personalizzato…';
$string['chat:quiz_custom_placeholder'] = 'Inserisci un argomento o una domanda...';
$string['chat:quiz_start'] = 'Inizia Quiz';
$string['chat:quiz_cancel'] = 'Annulla';
$string['chat:quiz_loading'] = 'Generazione quiz…';
$string['chat:quiz_error'] = 'Impossibile generare un quiz. Per favore riprova.';
$string['chat:quiz_correct'] = 'Corretto!';
$string['chat:quiz_wrong'] = 'Sbagliato.';
$string['chat:quiz_next'] = 'Domanda successiva';
$string['chat:quiz_finish'] = 'Vedi risultati';
$string['chat:quiz_score'] = 'Quiz completato! Punteggio: {$a->score} su {$a->total}.';
$string['chat:quiz_summary'] = 'Ho completato un quiz di pratica di {$a->total} domande su "{$a->topic}" con un punteggio di {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Obiettivi di apprendimento';
$string['chat:quiz_topic_modules'] = 'Argomento del corso';
$string['chat:quiz_subtopic_select'] = 'Seleziona un elemento specifico…';
$string['chat:quiz_topic_sections'] = 'Sezioni del corso';
$string['chat:quiz_score_great'] = 'Ottimo lavoro! Conosci davvero questo materiale.';
$string['chat:quiz_score_good'] = 'Buon lavoro! Continua a rivedere per rafforzare la comprensione.';
$string['chat:quiz_score_practice'] = 'Continua a esercitarti. Rivedi il materiale correlato e riprova.';
$string['chat:quiz_review_heading'] = 'Revisione';
$string['chat:quiz_retake'] = 'Ripeti Quiz';
$string['chat:quiz_exit'] = 'Esci dal Quiz';
$string['chat:quiz_your_answer'] = 'La tua risposta';
$string['chat:quiz_correct_answer'] = 'Risposta corretta';

// Conversation starters.
$string['chat:starters_label'] = 'Avvii di conversazione';
$string['chat:starter_help_page'] = 'Aiuto con questa pagina';
$string['chat:starter_quiz'] = 'Mettimi alla prova';
$string['chat:starter_study_plan'] = 'Piano di studio';
$string['chat:starter_ask_anything'] = 'Chiedi qualsiasi cosa';
$string['chat:starter_review_practice'] = 'Ripasso e pratica';
$string['chat:starter_ell_practice'] = 'Pratica del parlato';
$string['chat:starter_ell_pronunciation'] = 'Pratica pronuncia';
$string['chat:starter_speak'] = 'Pronuncia un avvio';
$string['chat:starter_explain'] = 'Spiega questo';
$string['chat:starter_key_concepts'] = 'Concetti chiave';
$string['chat:starter_help_me'] = 'Aiuto AI';
$string['chat:starter_ai_coach'] = 'Coach IA';
$string['chat:starter_quick_study'] = 'Studio rapido';
$string['chat:starter_help_lesson'] = 'Spiega questo';
$string['chat:starter_prompt_coach'] = 'AI Prompt Coach';
$string['chat:starter_help_lesson_prompt'] = 'Puoi aiutarmi a capire la lezione corrente? Dammi un riassunto dei concetti chiave.';
$string['chat:starter_study_plan_prompt'] = 'Vorrei pianificare lo studio di oggi. Chiedimi: (1) cosa voglio realizzare oggi, e (2) quanto tempo ho a disposizione.';
$string['chat:starter_explain_prompt'] = 'Puoi spiegare il concetto più importante di questo corso finora?';

// Reset.
$string['chat:reset'] = 'Ricomincia';

// Starter admin settings.
$string['starters:admin_title'] = 'Impostazioni avvii conversazione';
$string['starters:admin_desc'] = 'Configura i chip di avvio conversazione mostrati agli studenti.';
$string['starters:add_new'] = 'Aggiungi nuovo';
$string['starters:save'] = 'Salva modifiche';
$string['starters:saved'] = 'Configurazione salvata.';
$string['starters:reset_defaults'] = 'Ripristina predefiniti';
$string['starters:reset_confirm'] = 'Ripristinare tutti i predefiniti? Gli elementi personalizzati verranno eliminati.';
$string['starters:reset_done'] = 'Ripristinato ai predefiniti.';
$string['starters:back_settings'] = 'Torna alle impostazioni';
$string['starters:course_section'] = 'Avvii di conversazione';
$string['starters:course_desc'] = 'Abilita o disabilita gli avvii individuali per questo corso.';

// Topic picker.
$string['chat:topic_picker_title'] = 'Su cosa vorresti concentrarti?';
$string['chat:topic_picker_title_help'] = 'Con cosa hai bisogno di aiuto?';
$string['chat:topic_picker_title_explain'] = 'Cosa vorresti che ti spiegassi?';
$string['chat:topic_picker_title_study'] = 'Su quale area vorresti concentrarti?';
$string['chat:topic_start'] = 'Continua';

// Expand.
$string['chat:fullscreen'] = 'Schermo intero';
$string['chat:exitfullscreen'] = 'Esci da schermo intero';

// Settings panel.
$string['chat:language'] = 'Cambia lingua';
$string['chat:settings_panel'] = 'Impostazioni';
$string['chat:settings_language'] = 'Lingua';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Voce';
$string['chat:settings_voice_admin'] = 'Le impostazioni vocali sono gestite nel pannello di amministrazione.';

// Voice mode.
$string['chat:voice_mode'] = 'Modalità vocale';
$string['chat:voice_title'] = 'Parla con SOLA';
$string['chat:voice_copy'] = 'Fai una conversazione vocale naturale con il tuo assistente di apprendimento.';
$string['chat:voice_ready'] = 'Pronto per iniziare';
$string['chat:voice_start'] = 'Inizia conversazione';
$string['chat:voice_end'] = 'Termina sessione vocale';
$string['chat:voice_connecting'] = 'Connessione...';
$string['chat:voice_listening'] = 'In ascolto...';
$string['chat:voice_speaking'] = 'SOLA sta parlando...';
$string['chat:voice_idle'] = 'Pronto';
$string['chat:voice_error'] = 'Connessione vocale non riuscita. Controlla le impostazioni.';
$string['chat:quiz_locked'] = 'SOLA è in pausa durante i quiz per supportare l\'integrità accademica. In bocca al lupo!';

// Bottom nav.
$string['chat:mode_nav'] = 'Navigazione modalità';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voce';
$string['chat:mode_history'] = 'Cronologia';

// History panel.
$string['chat:history_title'] = 'Cronologia conversazioni';
$string['chat:history_subtitle'] = 'I tuoi messaggi recenti in questo corso.';
$string['chat:history_empty'] = 'Ancora nessuna conversazione.';
$string['chat:history_refresh'] = 'Aggiorna';

// Debug panel.
$string['chat:debug_context'] = 'Debug contesto';
$string['chat:debug_context_toggle'] = 'Attiva/disattiva ispettore debug contesto';
$string['chat:debug_context_copy'] = 'Copia';
$string['chat:debug_context_browser'] = 'Snapshot del browser';
$string['chat:debug_context_request'] = 'Ultima richiesta SSE';
$string['chat:debug_context_prompt'] = 'Risposta del server';

// Quiz hide settings.
$string['settings:quiz_hide_heading'] = 'Visibilità pagina quiz';
$string['settings:quiz_hide_heading_desc'] = 'Controlla se il widget SOLA appare nelle pagine quiz di Moodle.';
$string['settings:hide_on_quiz_for_students'] = 'Nascondi SOLA nelle pagine quiz per gli studenti';
$string['settings:hide_on_quiz_for_students_desc'] = 'Nasconde completamente il widget SOLA in tutte le pagine quiz per gli studenti.';
$string['settings:hide_on_quiz_for_staff'] = 'Nascondi SOLA nelle pagine quiz per il personale';
$string['settings:hide_on_quiz_for_staff_desc'] = 'Nasconde completamente il widget SOLA in tutte le pagine quiz per docenti e amministratori.';

// Wellbeing.
$string['settings:wellbeing_heading'] = 'Benessere e sicurezza';
$string['settings:wellbeing_heading_desc'] = 'SOLA rileva espressioni di disagio e risponde con empatia e risorse di supporto.';
$string['settings:wellbeing_enabled'] = 'Abilita supporto al benessere';
$string['settings:wellbeing_enabled_desc'] = 'SOLA rileverà segni di disagio emotivo e fornirà risorse di crisi.';

// Voice mode settings.
$string['settings:realtime_heading'] = 'Modalità vocale (OpenAI Realtime)';
$string['settings:realtime_enabled'] = 'Abilita modalità vocale';
$string['settings:realtime_enabled_desc'] = 'Consente agli studenti di avere conversazioni vocali in tempo reale.';
$string['settings:realtime_apikey'] = 'Chiave API OpenAI (Voce & TTS)';
$string['settings:realtime_apikey_desc'] = 'Utilizzata per la Modalità vocale e il pulsante TTS sui messaggi.';
$string['settings:realtime_voice'] = 'Voce SOLA';
$string['settings:realtime_voice_desc'] = 'Voce per la Modalità vocale e il pulsante TTS.';

// Mobile.
$string['mobile_welcome'] = 'Ciao, {$a}!';
$string['mobile_welcome_sub'] = 'Sono SOLA, il tuo assistente di apprendimento. Come posso aiutarti oggi?';
$string['mobile_placeholder'] = 'Fai una domanda...';
$string['mobile_clear'] = 'Cancella cronologia';
$string['mobile_disabled'] = 'SOLA non è disponibile per questo corso.';
$string['mobile_chip_concepts'] = 'Concetti chiave';
$string['mobile_chip_studyplan'] = 'Piano di studio';
$string['mobile_chip_quiz'] = 'Mettimi alla prova';
