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
 * Language strings for local_ai_course_assistant — Greek.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Βοηθός Μαθήματος με Τεχνητή Νοημοσύνη';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Αποθηκεύει τις συνομιλίες του AI βοηθού ανά χρήστη και μάθημα.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Το αναγνωριστικό του χρήστη που κατέχει τη συνομιλία.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Το αναγνωριστικό του μαθήματος στο οποίο ανήκει η συνομιλία.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Ο τίτλος της συνομιλίας.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Η ώρα δημιουργίας της συνομιλίας.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Η ώρα τελευταίας τροποποίησης της συνομιλίας.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Αποθηκεύει μεμονωμένα μηνύματα στις συνομιλίες του AI βοηθού.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Το αναγνωριστικό του χρήστη που έστειλε το μήνυμα.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Το αναγνωριστικό του μαθήματος στο οποίο ανήκει το μήνυμα.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Ο ρόλος του αποστολέα του μηνύματος (χρήστης ή βοηθός).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Το περιεχόμενο του μηνύματος.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Ο αριθμός των tokens που χρησιμοποιήθηκαν για το μήνυμα.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Η ώρα δημιουργίας του μηνύματος.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Χρήση του AI βοηθού';
$string['ai_course_assistant:viewanalytics'] = 'Προβολή αναλυτικών στοιχείων του AI βοηθού';
$string['ai_course_assistant:manage'] = 'Διαχείριση ρυθμίσεων του AI βοηθού (Ρόλος Διαχειριστή)';

// Settings.
$string['settings:enabled'] = 'Ενεργοποίηση Βοηθού Μαθήματος AI';
$string['settings:enabled_desc'] = 'Ενεργοποίηση ή απενεργοποίηση του widget Βοηθού Μαθήματος AI στις σελίδες μαθημάτων.';
$string['settings:provider'] = 'Πάροχος AI';
$string['settings:provider_desc'] = 'Επιλέξτε τον πάροχο AI που θα χρησιμοποιηθεί για τις απαντήσεις.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Τοπικά)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_gemini'] = 'Google Gemini';
$string['settings:provider_custom'] = 'Προσαρμοσμένο (συμβατό με OpenAI)';
$string['settings:apikey'] = 'Κλειδί API';
$string['settings:apikey_desc'] = 'Κλειδί API για τον επιλεγμένο πάροχο. Δεν απαιτείται για Ollama.';
$string['settings:model'] = 'Όνομα Μοντέλου';
$string['settings:model_desc'] = 'Το μοντέλο προς χρήση. Η προεπιλογή εξαρτάται από τον πάροχο.';
$string['settings:apibaseurl'] = 'Βασικό URL API';
$string['settings:apibaseurl_desc'] = 'Βασικό URL για το API. Αυτόματη συμπλήρωση ανά πάροχο, αλλά μπορεί να αντικατασταθεί.';
$string['settings:systemprompt'] = 'Πρότυπο Μηνύματος Συστήματος';
$string['settings:systemprompt_desc'] = 'Μήνυμα συστήματος που αποστέλλεται στο AI. Χρήση θέσεων: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:temperature'] = 'Θερμοκρασία';
$string['settings:temperature_desc'] = 'Ελέγχει την τυχαιότητα. Χαμηλότερες τιμές είναι πιο εστιασμένες. Εύρος: 0.0 έως 2.0.';
$string['settings:maxhistory'] = 'Μέγιστο Ιστορικό Συνομιλίας';
$string['settings:maxhistory_desc'] = 'Μέγιστος αριθμός ζευγών μηνυμάτων που περιλαμβάνονται στα αιτήματα API.';
$string['settings:avatar'] = 'Εικονίδιο Συνομιλίας';
$string['settings:avatar_desc'] = 'Επιλέξτε το εικονίδιο avatar για το κουμπί widget.';
$string['settings:avatar_color'] = 'Χρώμα Περιγράμματος Avatar';
$string['settings:avatar_color_desc'] = 'Χρώμα περιγράμματος του κουμπιού avatar. Χρήση τιμής hex.';
$string['settings:avatar_fill'] = 'Χρώμα Φόντου Avatar';
$string['settings:avatar_fill_desc'] = 'Χρώμα φόντου μέσα στο κουμπί avatar. Χρήση τιμής hex.';
$string['settings:display_mode'] = 'Λειτουργία Εμφάνισης';
$string['settings:display_mode_desc'] = 'Πώς εμφανίζεται ο SOLA στη σελίδα.';
$string['settings:display_mode_widget'] = 'Widget (αιωρούμενο κουμπί)';
$string['settings:display_mode_drawer'] = 'Πλαϊνό συρτάρι (δεξιά πλευρά)';
$string['settings:position'] = 'Θέση Widget';
$string['settings:position_desc'] = 'Θέση του widget στη σελίδα (ισχύει μόνο σε λειτουργία Widget).';
$string['settings:position_br'] = 'Κάτω δεξιά';
$string['settings:position_bl'] = 'Κάτω αριστερά';
$string['settings:position_tr'] = 'Πάνω δεξιά';
$string['settings:position_tl'] = 'Πάνω αριστερά';
$string['chat:settings'] = 'Ρυθμίσεις πρόσθετου';
$string['analytics:viewdashboard'] = 'Προβολή πίνακα αναλυτικών';

// Course settings.
$string['coursesettings:title'] = 'Ρυθμίσεις AI Μαθήματος';
$string['coursesettings:enabled'] = 'Ενεργοποίηση παρακάμψεων μαθήματος';
$string['coursesettings:enabled_desc'] = 'Όταν ενεργοποιηθεί, οι παρακάτω ρυθμίσεις υπερισχύουν της καθολικής διαμόρφωσης AI.';
$string['coursesettings:using_global'] = 'Χρήση καθολικής ρύθμισης';
$string['coursesettings:saved'] = 'Οι ρυθμίσεις AI μαθήματος αποθηκεύτηκαν.';
$string['coursesettings:ell_pronunciation'] = 'Λειτουργία Εξάσκησης Προφοράς';
$string['coursesettings:ell_pronunciation_desc'] = 'Εμφάνιση του chip «Εξάσκηση Προφοράς» για φοιτητές σε αυτό το μάθημα.';
$string['coursesettings:ell_pronunciation_enable'] = 'Ενεργοποίηση chip Εξάσκησης Προφοράς';
$string['coursesettings:rag'] = 'Σημασιολογική Αναζήτηση (RAG)';
$string['coursesettings:rag_desc'] = 'Ενεργοποίηση ανάκτησης αυξημένης γενέσεως για αυτό το μάθημα.';
$string['coursesettings:rag_enable'] = 'Ενεργοποίηση RAG για αυτό το μάθημα';
$string['coursesettings:speaking_practice'] = 'Εξάσκηση Ομιλίας';
$string['coursesettings:speaking_practice_desc'] = 'Εμφάνιση του chip «Εξάσκηση Ομιλίας» για φοιτητές.';
$string['coursesettings:speaking_practice_enable'] = 'Ενεργοποίηση chip Εξάσκησης Ομιλίας';
$string['coursesettings:global_settings_link'] = 'Καθολικές ρυθμίσεις AI';
$string['coursesettings:token_usage'] = 'Χρήση Token & Κόστος';
$string['coursesettings:token_usage_desc'] = 'Προβολή χρήσης token, εκτιμήσεων κόστους και αναλύσεων ανά φοιτητή.';

// Language.
$string['lang:switch'] = 'Ναι, αλλαγή';
$string['lang:dismiss'] = 'Όχι, ευχαριστώ';
$string['lang:change'] = 'Αλλαγή γλώσσας';
$string['lang:english'] = 'Αγγλικά';

// Chat widget.
$string['chat:title'] = 'SOLA';
$string['chat:placeholder'] = 'Κάντε μια ερώτηση...';
$string['chat:send'] = 'Αποστολή';
$string['chat:close'] = 'Κλείσιμο συνομιλίας';
$string['chat:open'] = 'Άνοιγμα SOLA';
$string['chat:change_avatar'] = 'Αλλαγή avatar';
$string['chat:clear'] = 'Εκκαθάριση ιστορικού';
$string['chat:clear_confirm'] = 'Είστε σίγουροι ότι θέλετε να εκκαθαρίσετε το ιστορικό συνομιλίας;';
$string['chat:copy'] = 'Αντιγραφή συνομιλίας';
$string['chat:copied'] = 'Η συνομιλία αντιγράφηκε στο πρόχειρο';
$string['chat:copy_failed'] = 'Αποτυχία αντιγραφής';
$string['chat:greeting'] = 'Γεια σου, {$a}! Είμαι ο SOLA, ο Βοηθός Διαδικτυακής Μάθησης Saylor.';
$string['chat:thinking'] = 'Σκέφτομαι...';
$string['chat:error'] = 'Λυπάμαι, κάτι πήγε στραβά. Παρακαλώ δοκιμάστε ξανά.';
$string['chat:error_auth'] = 'Σφάλμα ταυτοποίησης. Επικοινωνήστε με τον διαχειριστή.';
$string['chat:error_ratelimit'] = 'Πάρα πολλά αιτήματα. Περιμένετε λίγο και δοκιμάστε ξανά.';
$string['chat:error_unavailable'] = 'Η υπηρεσία AI δεν είναι προσωρινά διαθέσιμη.';
$string['chat:error_notconfigured'] = 'Ο SOLA δεν έχει ρυθμιστεί ακόμα. Επικοινωνήστε με τον διαχειριστή.';
$string['chat:expand'] = 'Ανάπτυξη συνομιλίας';
$string['chat:collapse'] = 'Σύμπτυξη συνομιλίας';
$string['chat:mic'] = 'Πείτε την ερώτησή σας';
$string['chat:mic_error'] = 'Σφάλμα μικροφώνου. Ελέγξτε τα δικαιώματα του προγράμματος περιήγησης.';
$string['chat:mic_unsupported'] = 'Η φωνητική εισαγωγή δεν υποστηρίζεται σε αυτό το πρόγραμμα περιήγησης.';
$string['chat:newline_hint'] = 'Shift+Enter για νέα γραμμή';
$string['chat:you'] = 'Εσείς';
$string['chat:assistant'] = 'SOLA';
$string['chat:history_loaded'] = 'Η προηγούμενη συνομιλία φορτώθηκε.';
$string['chat:history_cleared'] = 'Το ιστορικό συνομιλίας εκκαθαρίστηκε.';
$string['chat:offtopic_warning'] = 'Η ερώτησή σας δεν σχετίζεται με αυτό το μάθημα. Προσπαθήστε να μείνετε στο θέμα!';
$string['chat:offtopic_ended'] = 'Η πρόσβαση στον AI βοηθό έχει ανασταλεί προσωρινά για {$a} λεπτά.';
$string['chat:offtopic_locked'] = 'Η πρόσβασή σας είναι προσωρινά σε αναστολή. Δοκιμάστε ξανά σε {$a} λεπτά.';
$string['chat:escalated_to_support'] = 'Δεν μπόρεσα να απαντήσω πλήρως στην ερώτησή σας, οπότε δημιουργήθηκε ένα αίτημα υποστήριξης. Αναφορά: {$a}';
$string['chat:studyplan_intro'] = 'Μπορώ να σας βοηθήσω να δημιουργήσετε ένα πρόγραμμα μελέτης! Πείτε μου πόσες ώρες εβδομαδιαίως μπορείτε να αφιερώσετε.';

// Quiz.
$string['chat:quiz'] = 'Δώστε ένα τεστ εξάσκησης';
$string['chat:quiz_setup_title'] = 'Τεστ Εξάσκησης';
$string['chat:quiz_questions'] = 'Αριθμός ερωτήσεων';
$string['chat:quiz_topic'] = 'Θέμα';
$string['chat:quiz_topic_guided'] = 'Καθοδηγούμενο από AI (βάσει της προόδου σας)';
$string['chat:quiz_topic_default'] = 'Τρέχον περιεχόμενο μαθήματος';
$string['chat:quiz_topic_custom'] = 'Προσαρμοσμένο θέμα…';
$string['chat:quiz_custom_placeholder'] = 'Εισάγετε ένα θέμα ή ερώτηση...';
$string['chat:quiz_start'] = 'Έναρξη Τεστ';
$string['chat:quiz_cancel'] = 'Ακύρωση';
$string['chat:quiz_loading'] = 'Δημιουργία τεστ…';
$string['chat:quiz_error'] = 'Δεν ήταν δυνατή η δημιουργία τεστ. Δοκιμάστε ξανά.';
$string['chat:quiz_correct'] = 'Σωστό!';
$string['chat:quiz_wrong'] = 'Λάθος.';
$string['chat:quiz_next'] = 'Επόμενη ερώτηση';
$string['chat:quiz_finish'] = 'Δείτε αποτελέσματα';
$string['chat:quiz_score'] = 'Τεστ ολοκληρώθηκε! Βαθμολογία: {$a->score} από {$a->total}.';
$string['chat:quiz_summary'] = 'Ολοκλήρωσα ένα τεστ εξάσκησης {$a->total} ερωτήσεων στο «{$a->topic}» και πήρα {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Μαθησιακοί Στόχοι';
$string['chat:quiz_topic_modules'] = 'Θέμα Μαθήματος';
$string['chat:quiz_subtopic_select'] = 'Επιλέξτε ένα συγκεκριμένο στοιχείο…';
$string['chat:quiz_topic_sections'] = 'Ενότητες Μαθήματος';
$string['chat:quiz_score_great'] = 'Εξαιρετική δουλειά! Γνωρίζετε πραγματικά αυτό το υλικό.';
$string['chat:quiz_score_good'] = 'Καλή προσπάθεια! Συνεχίστε τη μελέτη για να ενδυναμώσετε την κατανόησή σας.';
$string['chat:quiz_score_practice'] = 'Συνεχίστε να εξασκείστε. Ανατρέξτε στο σχετικό υλικό και ξαναδοκιμάστε.';
$string['chat:quiz_review_heading'] = 'Ανασκόπηση';
$string['chat:quiz_retake'] = 'Επανάληψη Τεστ';
$string['chat:quiz_exit'] = 'Έξοδος από Τεστ';
$string['chat:quiz_your_answer'] = 'Η απάντησή σας';
$string['chat:quiz_correct_answer'] = 'Σωστή απάντηση';

// Conversation starters.
$string['chat:starters_label'] = 'Αρχικές ερωτήσεις';
$string['chat:starter_help_page'] = 'Βοήθεια με αυτή τη σελίδα';
$string['chat:starter_quiz'] = 'Δοκίμασέ με';
$string['chat:starter_study_plan'] = 'Σχέδιο Μελέτης';
$string['chat:starter_ask_anything'] = 'Ρωτήστε ό,τι θέλετε';
$string['chat:starter_review_practice'] = 'Επανάληψη και Εξάσκηση';
$string['chat:starter_ell_practice'] = 'Εξάσκηση Ομιλίας';
$string['chat:starter_ell_pronunciation'] = 'Εξάσκηση Προφοράς';
$string['chat:starter_speak'] = 'Πείτε μια εισαγωγική φράση';
$string['chat:starter_explain'] = 'Εξήγησε αυτό';
$string['chat:starter_key_concepts'] = 'Βασικές Έννοιες';
$string['chat:starter_help_me'] = 'Βοήθεια AI';
$string['chat:starter_ai_coach'] = 'AI Coach';
$string['chat:starter_quick_study'] = 'Γρήγορη Μελέτη';
$string['chat:starter_help_lesson'] = 'Εξήγησε αυτό';
$string['chat:starter_prompt_coach'] = 'AI Prompt Coach';
$string['chat:starter_help_lesson_prompt'] = 'Μπορείτε να με βοηθήσετε να κατανοήσω το τρέχον μάθημα; Δώστε μου μια σύνοψη των βασικών εννοιών.';
$string['chat:starter_study_plan_prompt'] = 'Θα ήθελα να σχεδιάσω τη σημερινή μελέτη μου. Ρωτήστε με: (1) τι θέλω να πετύχω σήμερα, και (2) πόσο χρόνο έχω.';
$string['chat:starter_explain_prompt'] = 'Μπορείτε να εξηγήσετε την πιο σημαντική έννοια σε αυτό το μάθημα μέχρι τώρα;';

// Reset.
$string['chat:reset'] = 'Ξεκινήστε από την αρχή';

// Starter admin settings.
$string['starters:admin_title'] = 'Ρυθμίσεις Αρχικών Ερωτήσεων';
$string['starters:admin_desc'] = 'Ρυθμίστε τα chips αρχικών ερωτήσεων που εμφανίζονται στους φοιτητές.';
$string['starters:add_new'] = 'Προσθήκη νέας';
$string['starters:save'] = 'Αποθήκευση αλλαγών';
$string['starters:saved'] = 'Η διαμόρφωση αποθηκεύτηκε.';
$string['starters:reset_defaults'] = 'Επαναφορά προεπιλογών';
$string['starters:reset_confirm'] = 'Επαναφορά όλων στις προεπιλογές; Τα προσαρμοσμένα θα διαγραφούν.';
$string['starters:reset_done'] = 'Επαναφορά στις προεπιλογές.';
$string['starters:back_settings'] = 'Πίσω στις ρυθμίσεις';
$string['starters:course_section'] = 'Αρχικές ερωτήσεις';
$string['starters:course_desc'] = 'Ενεργοποιήστε ή απενεργοποιήστε μεμονωμένα starters για αυτό το μάθημα.';

// Topic picker.
$string['chat:topic_picker_title'] = 'Σε τι θα θέλατε να εστιάσετε;';
$string['chat:topic_picker_title_help'] = 'Σε τι χρειάζεστε βοήθεια;';
$string['chat:topic_picker_title_explain'] = 'Τι θα θέλατε να σας εξηγήσω;';
$string['chat:topic_picker_title_study'] = 'Σε ποιο τομέα θα θέλατε να εστιάσετε;';
$string['chat:topic_start'] = 'Συνέχεια';

// Expand.
$string['chat:fullscreen'] = 'Πλήρης οθόνη';
$string['chat:exitfullscreen'] = 'Έξοδος πλήρους οθόνης';

// Settings panel.
$string['chat:language'] = 'Αλλαγή γλώσσας';
$string['chat:settings_panel'] = 'Ρυθμίσεις';
$string['chat:settings_language'] = 'Γλώσσα';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Φωνή';
$string['chat:settings_voice_admin'] = 'Οι ρυθμίσεις φωνής διαχειρίζονται στον πίνακα διαχείρισης.';

// Voice mode.
$string['chat:voice_mode'] = 'Λειτουργία φωνής';
$string['chat:voice_title'] = 'Μιλήστε με τον SOLA';
$string['chat:voice_copy'] = 'Κάντε μια φυσική φωνητική συνομιλία με τον βοηθό μάθησής σας.';
$string['chat:voice_ready'] = 'Έτοιμο για έναρξη';
$string['chat:voice_start'] = 'Έναρξη συνομιλίας';
$string['chat:voice_end'] = 'Τέλος φωνητικής συνεδρίας';
$string['chat:voice_connecting'] = 'Σύνδεση...';
$string['chat:voice_listening'] = 'Ακούω...';
$string['chat:voice_speaking'] = 'Ο SOLA μιλάει...';
$string['chat:voice_idle'] = 'Έτοιμο';
$string['chat:voice_error'] = 'Η φωνητική σύνδεση απέτυχε. Ελέγξτε τις ρυθμίσεις σας.';
$string['chat:quiz_locked'] = 'Ο SOLA είναι σε παύση κατά τη διάρκεια εξετάσεων. Καλή επιτυχία!';

// Bottom nav.
$string['chat:mode_nav'] = 'Πλοήγηση λειτουργιών';
$string['chat:mode_chat'] = 'Συνομιλία';
$string['chat:mode_voice'] = 'Φωνή';
$string['chat:mode_history'] = 'Ιστορικό';

// History panel.
$string['chat:history_title'] = 'Ιστορικό Συνομιλίας';
$string['chat:history_subtitle'] = 'Τα πρόσφατα μηνύματά σας σε αυτό το μάθημα.';
$string['chat:history_empty'] = 'Δεν υπάρχουν συνομιλίες ακόμα.';
$string['chat:history_refresh'] = 'Ανανέωση';

// Debug panel.
$string['chat:debug_context'] = 'Αποσφαλμάτωση Πλαισίου';
$string['chat:debug_context_toggle'] = 'Εναλλαγή ελεγκτή αποσφαλμάτωσης πλαισίου';
$string['chat:debug_context_copy'] = 'Αντιγραφή';
$string['chat:debug_context_browser'] = 'Στιγμιότυπο Προγράμματος Περιήγησης';
$string['chat:debug_context_request'] = 'Τελευταίο Αίτημα SSE';
$string['chat:debug_context_prompt'] = 'Απάντηση Διακομιστή';

// Quiz hide settings.
$string['settings:quiz_hide_heading'] = 'Ορατότητα Σελίδας Εξέτασης';
$string['settings:quiz_hide_heading_desc'] = 'Ελέγξτε αν το widget SOLA εμφανίζεται στις σελίδες εξετάσεων του Moodle.';
$string['settings:hide_on_quiz_for_students'] = 'Απόκρυψη SOLA σε σελίδες εξετάσεων για φοιτητές';
$string['settings:hide_on_quiz_for_students_desc'] = 'Πλήρης απόκρυψη του widget SOLA σε όλες τις σελίδες εξετάσεων για φοιτητές.';
$string['settings:hide_on_quiz_for_staff'] = 'Απόκρυψη SOLA σε σελίδες εξετάσεων για προσωπικό';
$string['settings:hide_on_quiz_for_staff_desc'] = 'Πλήρης απόκρυψη του widget SOLA σε όλες τις σελίδες εξετάσεων για καθηγητές και διαχειριστές.';

// Wellbeing.
$string['settings:wellbeing_heading'] = 'Ευεξία & Ασφάλεια';
$string['settings:wellbeing_heading_desc'] = 'Ο SOLA ανιχνεύει εκφράσεις δυσφορίας και ανταποκρίνεται με ενσυναίσθηση και πόρους υποστήριξης.';
$string['settings:wellbeing_enabled'] = 'Ενεργοποίηση Υποστήριξης Ευεξίας';
$string['settings:wellbeing_enabled_desc'] = 'Ο SOLA θα ανιχνεύει σημάδια συναισθηματικής δυσφορίας και θα παρέχει πόρους κρίσης.';

// Voice mode settings.
$string['settings:realtime_heading'] = 'Λειτουργία Φωνής (OpenAI Realtime)';
$string['settings:realtime_enabled'] = 'Ενεργοποίηση Λειτουργίας Φωνής';
$string['settings:realtime_enabled_desc'] = 'Επιτρέπει στους φοιτητές να κάνουν φωνητικές συνομιλίες σε πραγματικό χρόνο.';
$string['settings:realtime_apikey'] = 'Κλειδί API OpenAI (Φωνή & TTS)';
$string['settings:realtime_apikey_desc'] = 'Χρησιμοποιείται για τη Λειτουργία Φωνής και το κουμπί TTS στα μηνύματα.';
$string['settings:realtime_voice'] = 'Φωνή SOLA';
$string['settings:realtime_voice_desc'] = 'Φωνή για τη Λειτουργία Φωνής και το κουμπί TTS.';

// Mobile.
$string['mobile_welcome'] = 'Γεια σου, {$a}!';
$string['mobile_welcome_sub'] = 'Είμαι ο SOLA, ο βοηθός μάθησής σας. Πώς μπορώ να σας βοηθήσω σήμερα;';
$string['mobile_placeholder'] = 'Κάντε μια ερώτηση...';
$string['mobile_clear'] = 'Εκκαθάριση ιστορικού';
$string['mobile_disabled'] = 'Ο SOLA δεν είναι διαθέσιμος για αυτό το μάθημα.';
$string['mobile_chip_concepts'] = 'Βασικές Έννοιες';
$string['mobile_chip_studyplan'] = 'Σχέδιο Μελέτης';
$string['mobile_chip_quiz'] = 'Δοκίμασέ με';
