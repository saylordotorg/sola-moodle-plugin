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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Assistente AI per il Corso';
$string['attachment:attach'] = 'Allega';
$string['attachment:attach_image_or_pdf'] = 'Allega immagine o PDF';
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
$string['task:run_meta_ai_query'] = 'Esegui la query di analisi Radar di Apprendimento pianificata';

// Settings.
$string['settings:enabled'] = 'Abilita Assistente AI per il Corso';
$string['settings:enabled_desc'] = 'Abilita o disabilita il widget Assistente AI nelle pagine del corso.';
$string['settings:default_course_mode'] = 'Predefinito per i nuovi corsi';
$string['settings:default_course_mode_desc'] = 'Controlla se SOLA appare su un corso quando non è stata effettuata una scelta per corso. Le nuove installazioni hanno di default "Disabilitato per impostazione predefinita" in modo che gli amministratori possano attivare corso per corso dalla pagina Analytics o dalla pagina Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Disabilitato per impostazione predefinita (abilita per corso)';
$string['settings:default_course_mode_all'] = 'Abilitato su tutti i corsi';
$string['settings:auto_open'] = 'Apertura automatica alla prima visita';
$string['settings:auto_open_desc'] = 'Quando è abilitato, il cassetto SOLA si apre automaticamente la prima volta che uno studente arriva su ciascun corso. I caricamenti di pagina successivi nello stesso corso non riaprono il cassetto — lo stato viene tracciato per corso nel browser dello studente tramite localStorage. Si applica su desktop e mobile. Può essere sostituito per corso dalla pagina Course AI Settings.';
$string['settings:comparison_providers'] = 'Fornitori di confronto (selettore LLM)';
$string['settings:comparison_providers_desc'] = 'Aggiungi fornitori di AI aggiuntivi al selettore LLM integrato nel widget in modo che gli amministratori possano confrontare le risposte tra i fornitori. Utilizza la tabella sottostante per aggiungere righe. La colonna della temperatura è opzionale (lascia vuoto per utilizzare la temperatura globale). Formato memorizzato: provider_id|api_key|model1,model2|temperature. Il fornitore principale configurato sopra è sempre incluso automaticamente. Solo gli amministratori con la capacità di gestione vedono il selettore; gli studenti non lo vedono mai. Provider IDs validi: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Provider AI predefinito';
$string['settings:provider_desc'] = 'Seleziona il provider di IA da utilizzare per i completamenti della chat. Scegli "Moodle AI (core_ai subsystem)" per instradare le richieste attraverso la configurazione AI integrata di Moodle in Site admin > AI; i campi chiave API, modello e URL di base sottostanti vengono ignorati in quella modalità. Streaming, uso di strumenti e prompt caching non sono disponibili tramite core_ai — le risposte vengono fornite come un unico blocco. Usa un provider diretto per la migliore esperienza studentesca.';
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
$string['coursesettings:sola_enabled'] = 'SOLA su questo corso';
$string['coursesettings:sola_enabled_toggle'] = 'Mostra il widget SOLA su questo corso';
$string['coursesettings:sola_enabled_desc'] = 'Controlla se il widget di chat SOLA appare su questo corso. L\'impostazione predefinita a livello di sito è impostata nelle impostazioni del plugin in General > Default for new courses.';
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
$string['chat:clear'] = 'Cancella schermo';
$string['chat:clear_confirm'] = 'Cancellare i messaggi visibili? La cronologia completa della chat rimane salvata e può essere ricaricata riaprendo il widget.';
$string['chat:copy'] = 'Copia conversazione';
$string['chat:copied'] = 'Conversazione copiata negli appunti';
$string['chat:copy_failed'] = 'Copia non riuscita';
$string['chat:greeting'] = 'Ciao, {$a}! Sono SOLA. Come posso aiutarti oggi?';
$string['chat:thinking'] = 'Sto pensando...';
$string['chat:error'] = 'Spiacente, si è verificato un errore. Per favore riprova.';
$string['chat:error_auth'] = 'Errore di autenticazione. Contatta il tuo amministratore.';
$string['chat:error_ratelimit'] = 'Troppe richieste. Attendi un momento e riprova.';
$string['chat:error_unavailable'] = 'Il servizio AI è temporaneamente non disponibile.';
$string['chat:error_notconfigured'] = 'SOLA non è ancora stato configurato. Contatta il tuo amministratore.';
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
$string['chat:quiz_topic_adaptive']      = 'Adattivo — concentrati sui miei punti deboli';
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
$string['chat:starter_help_page'] = 'Aiuto con questo';
$string['chat:starter_quiz'] = 'Testami su questo';
$string['chat:starter_study_plan'] = 'Piano di studio';
$string['chat:starter_ask_anything'] = 'Chiedi qualsiasi cosa';
$string['chat:starter_review_practice'] = 'Ripasso e pratica';
$string['chat:starter_ai_project_coach'] = 'Coach progetto AI';
$string['chat:starter_ell_practice'] = 'Pratica di conversazione';
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
$string['chat:mode_history'] = 'Note';

// History panel.
$string['chat:history_title'] = 'Note e cronologia della conversazione';
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

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Distribuzione frontend';
$string['settings:cdn_heading_desc'] = 'Servire le risorse frontend di SOLA (JS/CSS) da un CDN esterno anziché dal filesystem di Moodle. Ciò consente aggiornamenti frontend senza aggiornare il plugin. Lasciare vuoto l\'URL CDN per utilizzare i file locali del plugin.';
$string['settings:cdn_url'] = 'URL base CDN';
$string['settings:cdn_url_desc'] = 'URL base dove sono ospitati sola.min.js e sola.min.css. Esempio: https://your-org.github.io/sola-cdn. Lasciare vuoto per utilizzare i file locali del plugin.';
$string['settings:cdn_version'] = 'Versione risorse CDN';
$string['settings:cdn_version_desc'] = 'Stringa di versione aggiunta agli URL CDN per il cache busting. Aggiornare dopo ogni deploy CDN (es. 3.2.4 o un commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Utilizzo complessivo';
$string['analytics:tab_bycourse'] = 'Per corso';
$string['analytics:tab_comparison'] = 'AI vs non utenti';
$string['analytics:tab_byunit'] = 'Per unità';
$string['analytics:tab_usagetypes'] = 'Tipi di utilizzo';
$string['analytics:tab_themes'] = 'Temi';
$string['analytics:tab_feedback'] = 'Feedback AI';
$string['analytics:total_students'] = 'Totale studenti';
$string['analytics:active_users'] = 'Utenti AI attivi';
$string['analytics:msgs_per_student'] = 'Messaggi per studente';
$string['analytics:avg_session'] = 'Durata media sessione';
$string['analytics:return_rate'] = 'Tasso di ritorno';
$string['analytics:total_sessions'] = 'Totale sessioni';
$string['analytics:thumbs_up'] = 'Pollice su';
$string['analytics:thumbs_down'] = 'Pollice giù';
$string['analytics:hallucination_flags'] = 'Segnalazioni di imprecisione';
$string['analytics:msgs_to_resolution'] = 'Messaggi fino alla risoluzione';
$string['analytics:helpful'] = 'Utile';
$string['analytics:not_helpful'] = 'Non utile';
$string['analytics:flag_hallucination'] = 'Questa risposta contiene informazioni imprecise';
$string['analytics:submit_rating'] = 'Invia';
$string['analytics:thanks_feedback'] = 'Grazie per il tuo feedback';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:history_saved_subtitle'] = 'Le risposte salvate rimangono su questo dispositivo per questo corso.';
$string['chat:history_saved_empty'] = 'Salva una risposta dell\'IA per vederla qui.';
$string['chat:history_views_label'] = 'Viste della cronologia';
$string['chat:history_view_saved'] = 'Salvate';
$string['chat:history_view_recent'] = 'Cronologia';
$string['chat:debug_refresh'] = 'Aggiorna';
$string['chat:debug_copy_all'] = 'Copia tutto';
$string['chat:debug_close'] = 'Chiudi';
$string['chat:language_switch'] = 'Cambia lingua';
$string['chat:language_dismiss'] = 'Ignora suggerimento di lingua';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Seleziona fornitore LLM';
$string['chat:llm_model_label'] = 'Modello';
$string['chat:llm_model_select'] = 'Seleziona modello LLM';
$string['chat:footer_usertesting'] = 'Test di usabilità';
$string['chat:footer_feedback'] = 'Feedback';
$string['chat:voice_panel_title'] = 'Parla con {$a} (Sperimentale)';

// Additional translated strings.
$string['analytics:active_students'] = 'Active students';
$string['analytics:all_time'] = 'All time';
$string['analytics:avg_messages_per_student'] = 'Avg messages per student';
$string['analytics:avg_response_length'] = 'Avg response length';
$string['analytics:avg_tokens'] = 'Avg tokens / response';
$string['analytics:common_prompts'] = 'Common Prompt Patterns';
$string['analytics:common_prompts_desc'] = 'Frequently recurring question patterns from students. Review these to identify systemic gaps in course content.';
$string['analytics:daily_messages'] = 'Daily message volume';
$string['analytics:escalation_count'] = 'Escalated to support';
$string['analytics:export'] = 'Export data';
$string['analytics:frequency'] = 'Frequency';
$string['analytics:hotspots'] = 'Course Hotspots';
$string['analytics:hotspots_desc'] = 'Course sections most frequently referenced in student questions. Higher counts may indicate areas where students need more support.';
$string['analytics:last_30_days'] = 'Last 30 days';
$string['analytics:last_7_days'] = 'Last 7 days';
$string['analytics:mention_count'] = 'Mentions';
$string['analytics:no_data'] = 'No analytics data available yet. Data will appear once students begin using the AI tutor.';
$string['analytics:offtopic_rate'] = 'Off-topic rate';
$string['analytics:overview'] = 'Overview';
$string['analytics:prompt_pattern'] = 'Pattern';
$string['analytics:provider'] = 'Provider';
$string['analytics:provider_comparison'] = 'AI Provider Comparison';
$string['analytics:provider_comparison_desc'] = 'Compare performance across AI providers used in this course.';
$string['analytics:recent_activity'] = 'Recent Activity';
$string['analytics:response_count'] = 'Responses';
$string['analytics:section'] = 'Section';
$string['analytics:studyplan_adoption'] = 'Students with study plans';
$string['analytics:timerange'] = 'Time range';
$string['analytics:title'] = 'AI Tutor Analytics';
$string['analytics:total_conversations'] = 'Total conversations';
$string['analytics:total_messages'] = 'Total messages';
$string['analytics:total_tokens'] = 'Total tokens';
$string['analytics:usage_trends'] = 'Usage Trends';
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
$string['messageprovider:study_notes'] = 'Study session notes';
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
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Stores student study plans.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'The course the study plan belongs to.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Hours per week the student plans to study.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'The study plan details in JSON format.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'The ID of the user who owns the study plan.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores'] = 'Stores practice session scores and AI feedback.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:ai_feedback'] = 'AI-generated feedback on the practice session.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:courseid'] = 'The course the practice session belongs to.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:overall_score'] = 'The overall score achieved.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:scores'] = 'Per-criterion scores in JSON format.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:session_type'] = 'The type of practice session (conversation or pronunciation).';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:timecreated'] = 'The time the score was recorded.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:userid'] = 'The ID of the user who completed the practice.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Stores study reminder preferences and subscriptions.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'The reminder channel (email or whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'The user\'s country code for regulatory compliance.';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'The email address or phone number for reminders.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'The ID of the user subscribed to reminders.';
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
$string['reminder:email_body'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Your study plan suggests {$a->hours_per_week} hours per week for this course.

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['reminder:email_subject'] = 'Study Reminder: {$a}';
$string['reminder:study_tip_prefix'] = 'Today\'s study focus: ';
$string['reminder:whatsapp_body'] = 'Study Reminder for {$a->coursename}: {$a->message} (Opt out: {$a->unsubscribe_url})';
$string['remoteconfigurl'] = 'Remote config URL';
$string['remoteconfigurl_desc'] = 'URL to a JSON file containing remotely-managed SOLA configuration (system prompt, instruction blocks, model default). Must be HTTPS. Leave blank to use the default GitHub URL. Local admin settings always take priority over remote config values.';
$string['rubric:done'] = 'Fatto';
$string['rubric:encourage_high'] = 'Eccellente! Continua così!';
$string['rubric:encourage_low'] = 'Buon inizio! La pratica regolare aiuterà.';
$string['rubric:encourage_mid'] = 'Buon lavoro! Continua a esercitarti.';
$string['rubric:overall'] = 'Complessivo';
$string['rubric:practice_again'] = 'Esercitati di nuovo';
$string['rubric:score_title_conversation'] = 'Punteggio conversazione';
$string['rubric:score_title_pronunciation'] = 'Punteggio pronuncia';
$string['rubric:scoring'] = 'Valutazione in corso...';
$string['settings:avatar_saylor'] = '{$a} Logo (Default)';
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
$string['settings:faq_content'] = 'FAQ Content';
$string['settings:faq_content_desc'] = 'Enter FAQ entries (one per line in the format: Q: question | A: answer). These will be provided to the AI to answer common support questions.';
$string['settings:faq_heading'] = 'FAQ & Support';
$string['settings:faq_heading_desc'] = 'Configure the centralized FAQ and Zendesk support ticket integration.';
$string['settings:institution_name'] = 'Institution Name';
$string['settings:institution_name_desc'] = 'The name of the institution displayed in the system prompt, avatar labels, and demo content. Change this when rebranding.';
$string['settings:model_desc_dynamic'] = 'Leave blank to use the provider\'s default model automatically. Each provider has a built-in default that stays current (e.g. gpt-4o for OpenAI, claude-sonnet-4 for Claude, mistral-large-latest for Mistral). Only enter a model name if you want to override the default. If a model is misspelled or deprecated, SOLA will automatically fall back to the provider\'s default.';
$string['settings:offtopic_action'] = 'Off-topic Action';
$string['settings:offtopic_action_desc'] = 'What to do when the off-topic limit is reached.';
$string['settings:offtopic_action_end'] = 'Temporarily lock access';
$string['settings:offtopic_action_warn'] = 'Warn and redirect';
$string['settings:offtopic_enabled'] = 'Enable Off-topic Detection';
$string['settings:offtopic_enabled_desc'] = 'Instruct the AI to detect and redirect off-topic conversations.';
$string['settings:offtopic_heading'] = 'Off-topic Detection';
$string['settings:offtopic_heading_desc'] = 'Configure how the chat handles off-topic conversations.';
$string['settings:offtopic_lockout_duration'] = 'Lockout Duration (minutes)';
$string['settings:offtopic_lockout_duration_desc'] = 'How long (in minutes) a student loses access to the AI tutor after exceeding the off-topic limit. Default: 30 minutes.';
$string['settings:offtopic_max'] = 'Max Off-topic Messages';
$string['settings:offtopic_max_desc'] = 'Number of consecutive off-topic messages before taking action.';
$string['settings:rag_chunksize'] = 'Chunk Size (words)';
$string['settings:rag_chunksize_desc'] = 'Target number of words per content chunk when indexing course material. Smaller chunks are more precise; larger chunks provide more context.';
$string['settings:rag_enabled'] = 'Enable RAG (Semantic Search)';
$string['settings:rag_enabled_desc'] = 'When enabled, the AI tutor uses semantic search to retrieve relevant course content for each query instead of stuffing all content into the system prompt.';
$string['settings:rag_heading'] = 'RAG / Semantic Search';
$string['settings:rag_heading_desc'] = 'Retrieval-Augmented Generation: index course content as embeddings and retrieve only the most relevant chunks at query time. Reduces token usage and supports all content types. Requires an embedding API.';
$string['settings:rag_topk'] = 'Top-K Chunks';
$string['settings:rag_topk_desc'] = 'Number of most relevant chunks to retrieve per user query and inject into the system prompt.';
$string['settings:reminders_email_enabled'] = 'Enable Email Reminders';
$string['settings:reminders_email_enabled_desc'] = 'Allow students to opt in to study reminders via email.';
$string['settings:reminders_whatsapp_enabled'] = 'Enable WhatsApp Reminders';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Allow students to opt in to study reminders via WhatsApp (requires WhatsApp API configuration).';
$string['settings:studyplan_enabled'] = 'Enable Study Planning';
$string['settings:studyplan_enabled_desc'] = 'Allow the AI tutor to help students create personalized study plans based on their available time.';
$string['settings:studyplan_heading'] = 'Study Planning & Reminders';
$string['settings:studyplan_heading_desc'] = 'Configure study planning features and reminder notifications.';
$string['settings:systemprompt_default'] = 'You are SOLA (Online Learning Assistant), an AI learning coach for {{institution}} students enrolled in "{{coursename}}". The student\'s role is {{userrole}}.

## Role
Provide supportive, course-aligned academic help that encourages learning, practice, motivation, and responsible AI use. You complement faculty-designed courses but do not replace instructors.

## Core Rules
- Ground all academic responses in approved course materials or institutional information.
- Do not invent content or go beyond course scope.
- Redirect learners back to course materials when questions fall outside the course. After two off-topic requests, steer the conversation back to learning.
- When generating practice questions, draw them directly from the course material.

## Course Structure
{{coursetopics}}

## Course Content
The following is the actual text of the course pages and materials. This is your primary knowledge source for this course.

{{coursecontent}}

## What SOLA Can Help With
- Explain concepts and summarize lessons
- Give examples and practice questions
- Suggest study strategies
- Encourage persistence and progress

## What SOLA Will Not Do
- Make academic or policy decisions
- Provide medical, legal, or mental health counseling
- Assist with academic dishonesty or bypassing learning

## Tone and Style
Communicate in a friendly, caring, encouraging, witty, and motivating way. Be concise, supportive, and respectful.

## Safety
Do not engage in abusive, hateful, discriminatory, or inappropriate conversations. Set firm but kind boundaries and redirect to productive topics.';
$string['settings:whatsapp_api_token'] = 'WhatsApp API Token';
$string['settings:whatsapp_api_token_desc'] = 'Authentication token for the WhatsApp API.';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'The API endpoint for sending WhatsApp messages (e.g. Twilio, MessageBird). Must accept POST with JSON body containing "to", "from", and "body" fields.';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp Blocked Countries';
$string['settings:whatsapp_blocked_countries_desc'] = 'Comma-separated ISO 3166-1 alpha-2 country codes where WhatsApp reminders are not allowed due to local regulations (e.g. "CN,IR,KP").';
$string['settings:whatsapp_from_number'] = 'WhatsApp Sender Number';
$string['settings:whatsapp_from_number_desc'] = 'The phone number to send WhatsApp messages from (with country code, e.g. +14155238886).';
$string['settings:zendesk_email'] = 'Zendesk API Email';
$string['settings:zendesk_email_desc'] = 'Email address of the Zendesk user for API authentication (with /token suffix).';
$string['settings:zendesk_enabled'] = 'Enable Zendesk Escalation';
$string['settings:zendesk_enabled_desc'] = 'When the AI cannot resolve a support question, automatically create a Zendesk ticket with a conversation summary.';
$string['settings:zendesk_subdomain'] = 'Zendesk Subdomain';
$string['settings:zendesk_subdomain_desc'] = 'Your Zendesk subdomain (e.g. "mycompany" for mycompany.zendesk.com).';
$string['settings:zendesk_token'] = 'Zendesk API Token';
$string['settings:zendesk_token_desc'] = 'API token for Zendesk authentication.';
$string['task:index_course_content'] = 'Index course content for RAG semantic search';
$string['task:run_integrity_checks'] = 'Run daily SOLA plugin integrity checks';
$string['task:send_inactivity_reminders'] = 'Send weekly inactivity reminder emails';
$string['task:send_reminders'] = 'Send AI tutor study reminders';
$string['unsubscribe:already'] = 'You have already been unsubscribed from these reminders.';
$string['unsubscribe:invalid'] = 'Invalid or expired unsubscribe link.';
$string['unsubscribe:resubscribe'] = 'Changed your mind? You can re-enable reminders through the AI tutor chat.';
$string['unsubscribe:success'] = 'You have been successfully unsubscribed from study reminders for this course.';
$string['unsubscribe:title'] = 'Unsubscribe from Study Reminders';
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
$string['usersettings:confirm_delete_all'] = 'Are you sure you want to permanently delete ALL your AI tutor data across all courses? This action cannot be undone.';
$string['usersettings:confirm_delete_course'] = 'Are you sure you want to permanently delete all your AI tutor data for the course "{$a}"? This action cannot be undone.';
$string['usersettings:data_deleted'] = 'Your data has been deleted.';
$string['usersettings:delete_all_button'] = 'Delete All My Data';
$string['usersettings:delete_all_title'] = 'Delete All Your Data';
$string['usersettings:delete_all_warning'] = 'This will permanently delete all your AI tutor conversations across all courses. This action cannot be undone.';
$string['usersettings:delete_course_data'] = 'Delete course data';
$string['usersettings:intro'] = 'Manage your AI tutor chat data and privacy settings';
$string['usersettings:last_activity'] = 'Last activity';
$string['usersettings:messages'] = 'Messages';
$string['usersettings:no_data'] = 'You haven\'t used the AI tutor yet. Your usage data will appear here once you start chatting.';
$string['usersettings:privacy_info'] = 'Your conversations with the AI tutor are stored to provide you with continuous support throughout your course. You have full control over this data and can delete it at any time.';
$string['usersettings:title'] = 'AI Course Assistant - Your Data';
$string['usersettings:total_conversations'] = 'Conversations';
$string['usersettings:total_messages'] = 'Total messages';
$string['usersettings:usage_stats'] = 'Your Usage Statistics';

// Testing Environment admin page and TOC quick links (v3.9.4+).
$string['demo:title'] = 'Ambiente di test';
$string['demo:heading'] = 'Ambiente di test';
$string['demo:intro'] = 'Questa pagina crea un corso di test <strong>nascosto agli studenti</strong> (visible=0) e lo popola con studenti fittizi, conversazioni AI, valutazioni e feedback. Utile per l\'anteprima della Analytics Dashboard o per convalidare modifiche al plugin senza influire su studenti realmente iscritti.';
$string['demo:step1'] = 'Passo 1: corso di test';
$string['demo:step2'] = 'Passo 2: aggiungere studenti fittizi e chat AI';
$string['demo:course_exists'] = 'Corso di test esistente: <strong>{$a->fullname}</strong> (nome breve <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'nascosto';
$string['demo:badge_visible'] = 'visibile agli studenti';
$string['demo:no_course'] = 'Nessun corso di test trovato. Clicca qui sotto per crearne uno.';
$string['demo:create_btn'] = 'Crea corso di test nascosto';
$string['demo:open_course'] = 'Apri corso &rarr;';
$string['demo:seed_intro'] = 'Crea demo_student_001, demo_student_002, ..., li iscrive al corso di test e inserisce conversazioni, messaggi, valutazioni e feedback sintetici. Esegui di nuovo per aggiungere altri dati, oppure spunta «cancella prima» per ricominciare.';
$string['demo:users_label'] = 'Utenti';
$string['demo:weeks_label'] = 'Settimane';
$string['demo:clear_label'] = 'Cancella prima gli utenti demo_* esistenti';
$string['demo:seed_btn'] = 'Aggiungi studenti e chat';
$string['demo:view_analytics'] = 'Visualizza le analisi di questo corso &rarr;';
$string['demo:footer'] = 'I dati creati qui risiedono nelle tabelle utenti / iscrizioni standard di Moodle e nelle tabelle di conversazione proprie del plugin. Tutti gli utenti fittizi hanno nomi utente che iniziano con <code>demo_student_</code> per facilitarne il filtraggio o la rimozione. Per rimuoverli, esegui di nuovo il passo di seeding con «Cancella prima gli utenti demo_* esistenti» selezionato.';
$string['demo:course_fullname'] = 'Corso di test SOLA (nascosto)';
$string['demo:notify_created'] = 'Corso di test pronto: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Creazione del corso non riuscita: {$a}';
$string['demo:notify_seeded'] = 'Aggiunti: {$a->users} utenti, {$a->conversations} conversazioni, {$a->messages} messaggi, {$a->ratings} valutazioni, {$a->feedback} voci di feedback.';
$string['demo:notify_seed_fail'] = 'Aggiunta dei dati non riuscita: {$a}';
$string['toc:analytics'] = 'Dashboard Analytics &rarr;';
$string['toc:tokenanalytics'] = 'Costo dei token e analisi &rarr;';
$string['toc:testing'] = 'Ambiente di test &rarr;';
$string['toc:back_to_course'] = '&larr; Torna a {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Binario pdftotext non trovato; estrazione PDF disattivata.';
$string['rag:pdftotext_available'] = 'pdftotext rilevato in {$a}.';
$string['rag:docx_unavailable'] = 'Estensione PHP ZipArchive non disponibile; estrazione DOCX disattivata.';
$string['rag:h5p_unavailable'] = 'Impossibile leggere il contenuto H5P; saltato.';
$string['rag:scorm_too_large'] = 'Il pacchetto SCORM supera il limite di dimensione configurato ({$a} MB); saltato.';
$string['rag:scorm_unzip_failed'] = 'Impossibile decomprimere il pacchetto SCORM; saltato.';
$string['rag:transcript_fetch_failed'] = 'Impossibile recuperare la trascrizione da {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL trascrizione bloccato dalla sfida Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Rilevati media incorporati: {$a}';
$string['rag:embed_transcript_attached'] = 'Trascrizione allegata per {$a}';

// v3.9.10–v3.9.14 new strings (English verbatim; translate later).
$string['usersettings:download'] = 'Scarica i miei dati {$a}';
$string['usersettings:download_help'] = 'Scarica una copia JSON completa di ogni record {$a} associato al tuo account: conversazioni, messaggi, valutazioni, piani di studio, promemoria, punteggi delle esercitazioni, risposte ai sondaggi, profilo e voci di audit.';
$string['usersettings:privacy_notice_link'] = 'Leggi l\'informativa sulla privacy di {$a}';
$string['privacy:title'] = 'Informativa sulla privacy di {$a}';
$string['admin:user_data:title'] = '{$a} — Esportazione e cancellazione dei dati dello studente';
$string['admin:user_data:intro'] = 'Percorso operativo per una richiesta GDPR Articolo 15 (accesso) o Articolo 17 (cancellazione). Cerca uno studente tramite l\'id utente Moodle, esamina le righe che questo plugin conserva per lui, quindi esporta o cancella.';
$string['admin:user_data:search_label'] = 'Id utente Moodle';
$string['admin:user_data:lookup'] = 'Cerca';
$string['admin:user_data:not_found'] = 'Nessun utente trovato con quell\'id.';
$string['admin:user_data:download'] = 'Scarica tutti i dati dello studente in JSON';
$string['admin:user_data:purge'] = 'Cancella tutti i dati dello studente per questo utente';
$string['admin:user_data:confirm_purge'] = 'Eliminare definitivamente ogni record per {$a}? L\'azione si propaga a conversazioni, messaggi, valutazioni, piani di studio, promemoria, profili, punteggi delle esercitazioni, sondaggi, voci di audit e feedback. L\'azione non può essere annullata.';
$string['admin:user_data:purged'] = 'Tutti i dati per l\'utente selezionato sono stati cancellati.';
$string['chat:consent_heading'] = 'Prima di iniziare a chattare con {$a->product}';
$string['chat:consent_body'] = '{$a->product} è un assistente di apprendimento basato sull\'IA. I tuoi messaggi e le risposte di {$a->product} sono memorizzati nel database Moodle di {$a->institution} e le dieci interazioni più recenti vengono inviate a un fornitore di modelli IA approvato per rispondere alle tue domande. Il tuo nome viene condiviso per la personalizzazione; nessun altro dato identificativo viene inviato al fornitore IA. Puoi scaricare, eliminare o smettere di usare {$a->product} in qualsiasi momento.';
$string['chat:consent_accept'] = 'Ho capito, avvia {$a}';
$string['chat:consent_privacy_link'] = 'Leggi l\'informativa sulla privacy completa';
$string['task:audit_cleanup'] = 'Pulizia tabella audit di AI Course Assistant';
$string['task:conversation_retention'] = 'Spazzino retention conversazioni di AI Course Assistant';
$string['settings:audit_retention_days'] = 'Conservazione log audit (giorni)';
$string['settings:audit_retention_days_desc'] = 'Il task pianificato giornaliero elimina le righe di audit più vecchie di questo valore. 0 disabilita. Predefinito 365.';
$string['settings:conversation_retention_days'] = 'Conservazione conversazioni (giorni)';
$string['settings:conversation_retention_days_desc'] = 'Il task pianificato giornaliero elimina le righe di conversazione il cui timestamp di ultima modifica è più vecchio di questo valore. 0 disabilita. Predefinito 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Endpoint SSRF attendibili';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Un URL per riga. Gli host elencati bypassano i controlli loopback / IP-privato / solo-https nel validatore SSRF di SOLA. Usalo solo per LLM auto-ospitati su una rete che controlli — per esempio <code>http://localhost:11434</code> per Ollama locale, <code>http://10.0.0.5:8000</code> per un pod vLLM nella stessa VPC. Il confronto corrisponde a scheme + host + port; qualsiasi percorso viene ignorato. Predefinito vuoto (blocca tutto ciò che è interno). Le righe che iniziano con <code>#</code> sono commenti.';
$string['task:learner_weekly_digest']    = 'Assistente di corso IA - Riepilogo settimanale dello studente';
$string['learner_digest:subject']        = 'La tua settimana con {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Vuoi una breve email settimanale su cosa concentrarti?';
$string['next_best_action:get_started']           = 'Inizia con {$a->title}. Aprimi e chiedi "aiutami con {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Inizia con {$a->title}. Il modulo "{$a->module}" lo copre.';
$string['next_best_action:review']                = 'Rivedi le basi di {$a->title} — aprimi e chiedi "spiegami {$a->title} come se fossi nuovo".';
$string['next_best_action:review_with_module']    = 'Rivedi le basi di {$a->title} in "{$a->module}", poi aprimi con domande.';
$string['next_best_action:practice']              = 'Costruisci su ciò che hai in {$a->title}. Aprimi e chiedi "dammi un esempio risolto per {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Esercitati su {$a->title} insieme a "{$a->module}". Aprimi per esempi risolti.';
$string['next_best_action:quiz']                  = 'Consolida {$a->title} con un quiz veloce. Aprimi e scegli "Quiz — adattivo".';
$string['next_best_action:quiz_with_module']      = 'Consolida {$a->title} con un quiz veloce. Il modulo "{$a->module}" è dove vive.';
$string['next_best_action:empty_state']           = 'Stai andando alla grande su ogni obiettivo in questo momento — niente da ricordare. Continua così.';
$string['next_best_action:header']                = 'Ecco {$a} cose su cui concentrarti dopo:';
$string['learner_digest:unsubscribe_done_title']  = 'Disiscritto';
$string['learner_digest:unsubscribe_done_body']   = 'Fatto — non riceverai più email settimanali per questo corso da {$a->product}. Puoi riscriverti in qualsiasi momento dalla finestra di chat del tuo corso.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Link di disiscrizione non più valido';
$string['learner_digest:unsubscribe_invalid_body']  = 'Questo link di disiscrizione è scaduto o malformato. Puoi gestire le preferenze email dalle impostazioni del tuo corso.';
$string['active_learners:line']                   = '{$a} altri stanno studiando questo corso in questo momento.';
$string['active_learners:line_global']             = '{$a} altri stanno studiando adesso.';
$string['settings:active_learners_scope']          = 'Ambito dell\'indicatore studenti attivi';
$string['settings:active_learners_scope_desc']     = 'Se l\'indicatore "altri stanno studiando adesso" sopra gli avvii della chat conta studenti solo nello stesso corso o studenti su tutto il sito. Predefinito <strong>globale</strong>.';
$string['settings:active_learners_scope_global']   = 'Globale (qualsiasi corso)';
$string['settings:active_learners_scope_course']   = 'Solo per corso';
$string['learner_digest:optin_yes']      = 'Sì, inviami l\'email settimanale';
$string['learner_digest:optin_no']       = 'No grazie';
$string['learner_digest:optin_thanks']   = 'Fatto. Riceverai un riepilogo ogni lunedì.';
$string['learner_digest:optin_declined'] = 'Fatto. Niente email - aprimi solo quando vuoi un controllo.';
$string['settings:xai_proxy_url'] = 'URL proxy xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'URL wss pubblico del servizio proxy xAI Realtime di SOLA (ad esempio wss://voice.example.com/xai-rt/rt). Quando questo è impostato insieme al segreto JWT, la voce xAI viene instradata attraverso il proxy e la chiave API xAI master non raggiunge mai il browser. Lasciare vuoto per ricadere sulla connessione diretta (sconsigliato in produzione).';
$string['settings:xai_proxy_jwt_secret'] = 'Segreto JWT del proxy xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Segreto condiviso HS256 usato per firmare token di sessione di breve durata per il proxy xAI Realtime. Deve corrispondere al segreto MOODLE_JWT_SECRET sul Cloudflare Worker. Ruotare periodicamente.';
$string['admin:vendor_dpa:title'] = '{$a} — Stato DPA del fornitore';
$string['admin:vendor_dpa:intro'] = 'Opt-out dall\'addestramento, DPA e politica di retention per ogni driver di fornitore IA. Usa questa tabella per decidere quali driver abilitare sul tuo sito. L\'instradamento Tier 2 e superiore richiede un DPA firmato e un opt-out contrattuale dall\'addestramento.';
$string['admin:vendor_dpa:maintenance_note'] = 'Questa tabella è mantenuta in classes/vendor_registry.php. Aggiornarla quando arriva una modifica ai ToS di un fornitore.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Email del Responsabile della Protezione dei Dati';
$string['settings:dpo_email_desc'] = 'Email di contatto mostrata nell\'informativa sulla privacy rivolta agli studenti sotto "Contatto". Lasciare vuoto per nascondere la riga. Le installazioni con rebranding dovrebbero puntare al proprio DPO.';
$string['settings:privacy_external_url'] = 'URL della pagina privacy istituzionale';
$string['settings:privacy_external_url_desc'] = 'Link alla pagina sulla privacy a livello di istituzione, mostrato nell\'informativa sulla privacy rivolta agli studenti sotto "Contatto". Lasciare vuoto per nascondere la riga.';
$string['settings:privacy_notice_override'] = 'Sostituzione dell\'informativa sulla privacy (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Se impostato, questo HTML sostituisce l\'informativa sulla privacy brandizzata predefinita visualizzata in /local/ai_course_assistant/privacy.php. Usalo per inserire il testo rivisto dal Legale per la tua istituzione senza modificare il codice. Lasciare vuoto per usare l\'informativa predefinita, il cui testo è derivato dalle sette chiavi di configurazione del branding.';
$string['objectives:title'] = 'Obiettivi di apprendimento e padronanza';
$string['objectives:toggles_heading'] = 'Tracciamento della padronanza';
$string['objectives:toggle_master'] = 'Abilita il tracciamento della padronanza per questo corso';
$string['objectives:toggle_chip'] = 'Mostra il chip Padronanza dell\'apprendimento agli studenti';
$string['objectives:toggle_chip_help'] = 'Opzionale. Quando disattivato, la padronanza guida comunque silenziosamente l\'assistente ma gli studenti non vedono alcun indicatore.';
$string['objectives:toggled'] = 'Impostazione aggiornata.';
$string['objectives:detected_heading'] = 'Rilevati {$a->count} obiettivi di apprendimento da {$a->source}.';
$string['objectives:source_competency'] = 'competenze Moodle';
$string['objectives:source_summary'] = 'riepilogo del corso';
$string['objectives:source_section'] = 'sezione o contenuto della prima pagina';
$string['objectives:source_page'] = 'pagina del corso';
$string['objectives:source_llm'] = 'estrazione IA';
$string['objectives:source_manual'] = 'inserimento manuale';
$string['objectives:source_none'] = 'nessuna fonte automatica';
$string['objectives:import_detected'] = 'Importa questi obiettivi rilevati';
$string['objectives:import_llm'] = 'Estrai obiettivi con l\'IA';
$string['objectives:llm_empty'] = 'L\'estrazione IA non ha restituito alcun obiettivo. Riprova più tardi o inseriscili manualmente.';
$string['objectives:imported'] = 'Importati {$a} obiettivi.';
$string['objectives:none_detected'] = 'Nessun obiettivo di apprendimento rilevato automaticamente. Inseriscili manualmente di seguito o usa l\'estrazione IA.';
$string['objectives:list_heading'] = 'Obiettivi attuali';
$string['objectives:col_code'] = 'Codice';
$string['objectives:col_title'] = 'Titolo';
$string['objectives:col_source'] = 'Fonte';
$string['objectives:col_actions'] = 'Azioni';
$string['objectives:add_heading'] = 'Aggiungi un obiettivo';
$string['objectives:add_submit'] = 'Aggiungi obiettivo';
$string['objectives:saved'] = 'Obiettivo salvato.';
$string['objectives:deleted'] = 'Obiettivo eliminato.';
$string['objectives:delete_confirm'] = 'Eliminare questo obiettivo e tutta la sua cronologia di tentativi?';
$string['objectives:delete_all'] = 'Elimina tutti gli obiettivi di questo corso';
$string['objectives:delete_all_confirm'] = 'Eliminare ogni obiettivo e tutta la cronologia di tentativi per questo corso? Non può essere annullato.';
$string['objectives:deleted_all'] = 'Tutti gli obiettivi di questo corso sono stati eliminati.';
$string['mastery:chip_aria'] = 'Stato della padronanza dell\'apprendimento';
$string['mastery:popover_aria'] = 'Dettagli della padronanza dell\'apprendimento';
$string['mastery:chip_label'] = '{$a->mastered} di {$a->total} padroneggiati';
$string['mastery:status_mastered'] = 'padroneggiato';
$string['mastery:status_learning'] = 'in corso';
$string['mastery:status_not_started'] = 'non iniziato';
$string['mastery:popover_empty'] = 'Nessun obiettivo di apprendimento configurato per questo corso.';
$string['settings:mastery_heading'] = 'Tracciamento della padronanza';
$string['settings:mastery_heading_desc'] = 'Funzione opt-in per corso che etichetta le risposte ai quiz e i turni di conversazione dell\'assistente rispetto agli obiettivi di apprendimento del corso, quindi reimmette uno snapshot di padronanza compatto nel prompt di sistema per orientare le domande. Discreta per impostazione predefinita: gli studenti non vedono nulla a meno che non sia attivato l\'interruttore del chip per il corso.';
$string['settings:mastery_threshold'] = 'Soglia di padronanza';
$string['settings:mastery_threshold_desc'] = 'Accuratezza mobile pari o superiore alla quale un obiettivo è considerato padroneggiato. Da 0.0 a 1.0. Predefinito 0.85.';
$string['settings:mastery_window'] = 'Finestra di tentativi';
$string['settings:mastery_window_desc'] = 'Numero dei tentativi più recenti per obiettivo da pesare nell\'accuratezza mobile. Predefinito 8.';
$string['settings:mastery_decay_enabled']        = 'Abilita decadimento della padronanza';
$string['settings:mastery_decay_enabled_desc']   = 'Quando attivo, i punteggi di padronanza decadono nel tempo rispetto al timestamp del tentativo più recente. Un obiettivo precedentemente padroneggiato torna a "in apprendimento" dopo abbastanza tempo. Non scende sotto "in apprendimento". <strong>Disattivato per impostazione predefinita in v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Emivita del decadimento della padronanza (giorni)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Emivita in giorni. Il punteggio è moltiplicato per 0,5 ^ (giorni dall\'ultimo tentativo / emivita). Predefinito 30. Usato solo quando il decadimento è abilitato.';
$string['settings:mastery_classifier_model'] = 'Modello classificatore';
$string['settings:mastery_classifier_model_desc'] = 'Modello usato per classificare i turni dell\'assistente rispetto agli obiettivi. Lasciare vuoto per ereditare il modello predefinito del fornitore IA; altrimenti specificare un modello economico come gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Peso del classificatore';
$string['settings:mastery_classifier_weight_desc'] = 'Quanto pesa un tentativo di conversazione rispetto a un tentativo di quiz (1.0). Predefinito 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Soglia di confidenza del classificatore';
$string['settings:mastery_classifier_threshold_desc'] = 'Confidenza minima del classificatore richiesta per registrare un tentativo di conversazione. Da 0.0 a 1.0. Predefinito 0.7.';
$string['chat:mode_progress'] = 'Progresso';
$string['objectives:toggle_dashboard'] = 'Mostra la scheda dashboard Progresso agli studenti';
$string['objectives:toggle_dashboard_help'] = 'Opzionale. Aggiunge una scheda Progresso accanto a Chat / Voce / Cronologia all\'interno del widget. La scheda mostra agli studenti quali obiettivi hanno padroneggiato, quali sono in corso e quali non hanno ancora iniziato.';
$string['mastery:dashboard_title'] = 'Il tuo progresso di apprendimento';
$string['mastery:dashboard_subtitle'] = 'La padronanza viene misurata dalle risposte ai quiz e dalla pratica in chat. Continua così — la profondità batte la copertura.';
$string['mastery:dashboard_refresh'] = 'Aggiorna';
$string['mastery:section_mastered'] = 'Padroneggiati';
$string['mastery:section_learning'] = 'In corso';
$string['mastery:section_not_started'] = 'Non ancora iniziati';
$string['mastery:summary_label'] = '{$a->mastered} di {$a->total} obiettivi padroneggiati';
$string['mastery:ask_about'] = 'Chiedi di questo';
$string['mastery:celebrate'] = 'Hai padroneggiato ogni obiettivo di questo corso. Ottimo lavoro.';
$string['mastery:ask_template'] = 'Aiutami a esercitarmi e ad approfondire la mia comprensione di questo obiettivo: {$a}.';
$string['instructor_dashboard:title'] = '{$a} — Course Instructor & Designer Dashboard';
$string['instructor_dashboard:link'] = 'Course Instructor & Designer Dashboard';
$string['instructor_dashboard:intro'] = 'Per-course usage, mastery, and content-revision signals. Aggregate-only by default; click Show real names to bind aggregate rows to specific learners (writes a FERPA audit row).';
$string['instructor_dashboard:period'] = 'Period';
$string['instructor_dashboard:period_all'] = 'all';
$string['instructor_dashboard:gap_days'] = 'Inactive after (days)';
$string['instructor_dashboard:show_names'] = 'Show real names';
$string['instructor_dashboard:hide_names'] = 'Hide real names';
$string['instructor_dashboard:active_learners'] = 'Active learners';
$string['instructor_dashboard:total_messages'] = 'Total messages';
$string['instructor_dashboard:avg_per_learner'] = 'Avg messages / learner';
$string['instructor_dashboard:last_activity'] = 'Last activity';
$string['instructor_dashboard:mastery_heading'] = 'Mastery aggregate';
$string['instructor_dashboard:mastery_off'] = 'Mastery tracking is not enabled for this course. Turn it on from the Learning objectives & mastery page.';
$string['instructor_dashboard:topics_heading'] = 'Most-asked topics';
$string['instructor_dashboard:topics_empty'] = 'No topic data yet. Topics are extracted by a daily scheduled task; check back tomorrow.';
$string['instructor_dashboard:confusion_heading'] = 'Confusion heatmap';
$string['instructor_dashboard:confusion_empty'] = 'No per-module question data yet for this period.';
$string['instructor_dashboard:ratings_heading'] = 'Helpful / unhelpful rates';
$string['instructor_dashboard:ratings_summary'] = '{$a->positive} thumbs up, {$a->negative} thumbs down ({$a->pct}% positive). {$a->hallucinations} flagged as hallucinations.';
$string['instructor_dashboard:ratings_low_module'] = 'Low-rated assistant responses by module';
$string['instructor_dashboard:gap_heading'] = 'Engagement gap';
$string['instructor_dashboard:gap_summary'] = '{$a->not_seen} of {$a->enrolled} enrolled learners have not used the assistant in the last {$a->days} day(s).';
$string['instructor_dashboard:gap_show_sample'] = 'Show learners (sample)';
$string['instructor_dashboard:col_objective'] = 'Objective';
$string['instructor_dashboard:col_mastered'] = 'Mastered';
$string['instructor_dashboard:col_learning'] = 'In progress';
$string['instructor_dashboard:col_not_started'] = 'Not started';
$string['instructor_dashboard:col_attempts'] = 'Attempts';
$string['instructor_dashboard:col_module'] = 'Module';
$string['instructor_dashboard:col_questions'] = 'Questions asked';
$string['instructor_dashboard:col_distinct_learners'] = 'Distinct learners';
$string['instructor_dashboard:col_low_rated'] = 'Low-rated count';
$string['socratic:title'] = 'Socratic mode';
$string['socratic:toggle'] = 'Enable Socratic mode for this course';
$string['socratic:toggle_help'] = 'When on, the assistant leads with guiding questions instead of giving direct answers. Pedagogical lift; no UI change for learners. Off by default.';
$string['digest:title'] = 'Weekly digest emails';
$string['digest:toggle'] = 'Email a weekly digest to anyone with analytics access on this course';
$string['digest:toggle_help'] = 'Mondays 09:00 server time. Aggregate-only — no learner names appear in the email body. Off by default.';
$string['digest:subject'] = '{$a->product} weekly digest — {$a->course}';
$string['task:instructor_weekly_digest'] = 'AI Course Assistant weekly digest email';
$string['settings:math_render_heading'] = 'Math rendering';
$string['settings:math_render_heading_desc'] = 'Math expressions in assistant replies (LaTeX, e.g. $E=mc^2$) render via Moodle\'s built-in MathJax filter — enable filter_mathjaxloader in Site administration → Plugins → Filters → Manage filters for the math to render. Without it, expressions display as raw LaTeX text.';
$string['flashcards:title'] = 'Flashcards';
$string['flashcards:link'] = 'Flashcards (review now)';
$string['flashcards:intro'] = 'Spaced-repetition review. Reveal the answer, then self-grade with Again, Hard, or Easy. Cards you found hard come back sooner; cards you found easy spread out.';
$string['flashcards:question'] = 'Question';
$string['flashcards:answer'] = 'Answer';
$string['flashcards:reveal'] = 'Reveal answer';
$string['flashcards:again'] = 'Again';
$string['flashcards:hard'] = 'Hard';
$string['flashcards:easy'] = 'Easy';
$string['flashcards:no_due'] = 'Nothing to review right now. Generate flashcards from a course page in the assistant widget, or check back later.';
$string['flashcards:session_complete'] = 'Session complete. Good work.';
$string['flashcards:disabled'] = 'Flashcards are not enabled for this course.';
$string['flashcards:toggle'] = 'Enable flashcards for this course';
$string['flashcards:toggle_help'] = 'Adds a Generate-flashcards starter to the assistant widget and a learner review page at /local/ai_course_assistant/flashcards.php?courseid=X. Off by default.';
$string['flashcards:starter_generate'] = 'Generate flashcards from this page';
$string['flashcards:generated'] = 'Saved {$a} flashcards. Open the review page to study them.';
$string['worked_examples:toggle'] = 'Enable Worked Examples starter for this course';
$string['worked_examples:toggle_help'] = 'Adds a "Show me a worked example" starter that asks the assistant to walk through a fully solved example, then guide the learner through similar problems with progressively less scaffolding (worked → partial → blank).';
$string['worked_examples:starter'] = 'Show me a worked example';
$string['objectives:prereqs_label'] = 'prerequisites';
$string['objectives:prereqs_summary'] = 'Prerequisites: {$a}';
$string['objectives:prereqs_none'] = 'none yet — click to edit';
$string['essay_feedback:title'] = 'Essay feedback';
$string['essay_feedback:link'] = 'Essay feedback';
$string['essay_feedback:disabled'] = 'Essay feedback is not enabled for this course.';
$string['essay_feedback:intro'] = 'Paste your draft below and the assistant will score it against a rubric and suggest three concrete revisions. Aim for at least 80 words. Your essay text is only used for this feedback run — it is not saved.';
$string['essay_feedback:rubric_label'] = 'Rubric (optional)';
$string['essay_feedback:rubric_help'] = 'Paste a rubric as a bulleted list of criteria, or leave blank to use a default four-criterion rubric (thesis, evidence, organisation, mechanics).';
$string['essay_feedback:essay_label'] = 'Your essay draft';
$string['essay_feedback:submit'] = 'Get feedback';
$string['essay_feedback:scoring'] = 'Scoring your draft…';
$string['essay_feedback:too_short'] = 'Please paste at least 80 words so the assistant has something to score.';
$string['essay_feedback:error'] = 'Could not score this draft right now. Try again in a moment.';
$string['essay_feedback:result_heading'] = 'Rubric scores';
$string['essay_feedback:overall_heading'] = 'Overall';
$string['essay_feedback:revisions_heading'] = 'Top 3 revision suggestions';
$string['essay_feedback:col_criterion'] = 'Criterion';
$string['essay_feedback:col_score'] = 'Score';
$string['essay_feedback:col_feedback'] = 'Feedback';
$string['essay_feedback:toggle'] = 'Enable Essay feedback for this course';
$string['essay_feedback:toggle_help'] = 'Learners get a dedicated page to paste a draft and receive rubric-scored feedback with revision suggestions. Off by default.';
$string['sandbox:title'] = 'Python sandbox';
$string['sandbox:link'] = 'Python sandbox';
$string['sandbox:disabled'] = 'The Python sandbox is not enabled for this course.';
$string['sandbox:intro'] = 'Write and run Python entirely in your browser. The runtime is Pyodide (Python compiled to WebAssembly); your code never leaves this device. Use it to try ideas, work through course exercises, or check small scripts before submitting them.';
$string['sandbox:loading'] = 'Loading the Python runtime — this is a one-time download of about 10 MB. Future runs will be instant.';
$string['sandbox:ready'] = 'Ready. Write some code and click Run.';
$string['sandbox:load_error'] = 'Could not load the Python runtime. Check your network connection and refresh.';
$string['sandbox:code_label'] = 'Code';
$string['sandbox:run'] = 'Run';
$string['sandbox:running'] = 'Running…';
$string['sandbox:clear'] = 'Clear output';
$string['sandbox:output_heading'] = 'Output';
$string['sandbox:privacy_note'] = 'Code and output stay in your browser. Nothing is sent to any server. The runtime is loaded from a public CDN the first time only and is cached for subsequent visits.';
$string['sandbox:toggle'] = 'Enable the Python sandbox for this course';
$string['sandbox:toggle_help'] = 'Adds a learner-facing page where students can write and run Python entirely in their browser via Pyodide. Off by default. Enable for courses with code work; leave off for courses without.';

// v4.2: courses_admin page.
$string['courses_admin:title']             = 'AI Course Assistant — Courses';
$string['courses_admin:lede']              = 'Enable or disable AI Assistant per course, manage Usability Testing, or run bulk actions across many courses.';
$string['courses_admin:back_to_analytics'] = '← Back to Analytics';
$string['courses_admin:plugin_settings']   = 'Plugin Settings';
$string['courses_admin:enabled_count']     = '{$a->enabled} of {$a->total} courses have AI Assistant enabled';
$string['courses_admin:search_placeholder']= 'Search courses…';
$string['courses_admin:filter_status']     = 'AI Assistant status';
$string['courses_admin:filter_enabled']    = 'Enabled';
$string['courses_admin:filter_disabled']   = 'Disabled';
$string['courses_admin:filter_ut']         = 'Usability Testing';
$string['courses_admin:filter_ut_on']      = 'UT On';
$string['courses_admin:filter_ut_off']     = 'UT Off';
$string['courses_admin:filter_ut_inherit'] = 'UT Inherit';
$string['courses_admin:select_all']        = 'Select all';
$string['courses_admin:selected_zero']     = '(0 selected)';
$string['courses_admin:ai_assistant']      = 'AI Assistant';
$string['courses_admin:usability_testing'] = 'Usability Testing';
$string['courses_admin:enable']            = 'Enable';
$string['courses_admin:disable']           = 'Disable';
$string['courses_admin:inherit']           = 'Inherit';
$string['courses_admin:column_course']     = 'Course';
$string['courses_admin:column_has_data']   = 'Has Data';
$string['courses_admin:enabled']           = 'Enabled';
$string['courses_admin:disabled']          = 'Disabled';
$string['courses_admin:click_to_enable']   = 'Click to enable';
$string['courses_admin:click_to_disable']  = 'Click to disable';
$string['courses_admin:on']                = 'On';
$string['courses_admin:off']               = 'Off';
$string['courses_admin:global_on']         = 'Global: On';
$string['courses_admin:global_off']        = 'Global: Off';
$string['courses_admin:yes']               = 'Yes';
$string['courses_admin:no_courses']        = 'No visible courses on this site yet.';

// v4.2: anomaly digest scheduled task.
$string['task:run_anomaly_digest'] = 'Run SOLA anomaly digest';

// v4.2.3: external resources (admin + per-course).
$string['settings:external_resources_heading']      = 'External resources';
$string['settings:external_resources_heading_desc'] = 'Optional opt-in: when on, SOLA may include one or two links to reputable open educational resources alongside its course-grounded answer. Restricted to the allowlist below to keep recommendations defensible. Per-course override available on the course settings page. Default off.';
$string['settings:external_resources_enabled']      = 'Enable external resources (site-wide default)';
$string['settings:external_resources_enabled_desc'] = 'When on, SOLA may suggest links to the allowlisted external resources. Per-course "force on" / "force off" overrides this. Default off.';
$string['settings:external_resources_allowlist']    = 'External resources allowlist';
$string['settings:external_resources_allowlist_desc'] = 'One resource per line, in the format "Display Name (domain)". SOLA will only suggest links to these sites. Defaults to a small set of widely respected open-resource hosts; replace or extend as needed.';
$string['external_resources:title']      = 'External resources';
$string['external_resources:inherit']    = 'Inherit site default ({$a})';
$string['external_resources:force_on']   = 'Force on for this course';
$string['external_resources:force_off']  = 'Force off for this course';
$string['external_resources:on']         = 'on';
$string['external_resources:off']        = 'off';
$string['external_resources:toggle_help']= 'When on, SOLA may include up to two links to allowlisted open educational resources alongside its course-grounded answer. Course material always leads.';

// v4.3.0: real Redash push integration.
$string['settings:redash_base_url']           = 'Redash base URL';
$string['settings:redash_base_url_desc']      = 'Base URL of your Redash instance, e.g. https://redash.example.com. Required for the "Send to Redash" action in Learning Radar.';
$string['settings:redash_user_api_key']       = 'Redash user API key';
$string['settings:redash_user_api_key_desc']  = 'API key of a Redash user with permission to create queries against the chosen data source. Found under your Redash user profile. Different from the SOLA Redash API key (which controls inbound auth on redash_export.php).';
$string['settings:redash_data_source_id']     = 'Redash data source ID';
$string['settings:redash_data_source_id_desc']= 'Numeric id of the Redash JSON data source pointed at SOLA\'s redash_export.php. Visible in the Redash data source URL after saving.';

$string['instructor_dashboard:nav_back_course']  = '← Back to course';
$string['instructor_dashboard:nav_settings']     = 'AI Course Assistant settings';
$string['instructor_dashboard:nav_analytics']    = 'AI Course Assistant analytics';
