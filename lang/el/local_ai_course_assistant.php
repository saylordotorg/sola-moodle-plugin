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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Βοηθός Μαθήματος με Τεχνητή Νοημοσύνη';
$string['attachment:attach'] = 'Επισύναψη';
$string['attachment:attach_image_or_pdf'] = 'Επισύναψη εικόνας ή PDF';
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
$string['task:run_meta_ai_query'] = 'Εκτέλεση προγραμματισμένου ερωτήματος αναλυτικών Ραντάρ Μάθησης';

// Settings.
$string['settings:enabled'] = 'Ενεργοποίηση Βοηθού Μαθήματος AI';
$string['settings:enabled_desc'] = 'Ενεργοποίηση ή απενεργοποίηση του widget Βοηθού Μαθήματος AI στις σελίδες μαθημάτων.';
$string['settings:default_course_mode'] = 'Προεπιλογή για νέα μαθήματα';
$string['settings:default_course_mode_desc'] = 'Ελέγχει αν το SOLA εμφανίζεται σε ένα μάθημα όταν δεν έχει γίνει επιλογή ανά μάθημα. Οι νέες εγκαταστάσεις είναι εξ ορισμού ρυθμισμένες σε "Απενεργοποιημένο εξ ορισμού" ώστε οι διαχειριστές να μπορούν να ενεργοποιούν μάθημα προς μάθημα από τη σελίδα Analytics ή τη σελίδα Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Απενεργοποιημένο εξ ορισμού (ενεργοποίηση ανά μάθημα)';
$string['settings:default_course_mode_all'] = 'Ενεργοποιημένο σε όλα τα μαθήματα';
$string['settings:auto_open'] = 'Αυτόματο άνοιγμα στην πρώτη επίσκεψη';
$string['settings:auto_open_desc'] = 'Όταν είναι ενεργοποιημένο, το συρτάρι του SOLA ανοίγει αυτόματα την πρώτη φορά που ένας σπουδαστής φτάνει σε κάθε μάθημα. Μεταγενέστερες φορτώσεις σελίδων στο ίδιο μάθημα δεν ανοίγουν ξανά το συρτάρι — η κατάσταση παρακολουθείται ανά μάθημα στον περιηγητή του σπουδαστή μέσω localStorage. Ισχύει σε υπολογιστή και κινητό. Μπορεί να παρακαμφθεί ανά μάθημα από τη σελίδα Course AI Settings.';
$string['settings:comparison_providers'] = 'Πάροχοι σύγκρισης (επιλογέας LLM)';
$string['settings:comparison_providers_desc'] = 'Προσθέστε επιπλέον παρόχους AI στον ενσωματωμένο επιλογέα LLM ώστε οι διαχειριστές να μπορούν να συγκρίνουν απαντήσεις μεταξύ παρόχων. Χρησιμοποιήστε τον παρακάτω πίνακα για να προσθέσετε γραμμές. Η στήλη θερμοκρασίας είναι προαιρετική (αφήστε την κενή για να χρησιμοποιηθεί η καθολική θερμοκρασία). Μορφή αποθήκευσης: provider_id|api_key|model1,model2|temperature. Ο κύριος πάροχος που έχει ρυθμιστεί παραπάνω περιλαμβάνεται πάντα αυτόματα. Μόνο οι διαχειριστές με δικαίωμα διαχείρισης βλέπουν τον επιλογέα· οι φοιτητές δεν τον βλέπουν ποτέ. Έγκυρα provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Προεπιλεγμένος πάροχος AI';
$string['settings:provider_desc'] = 'Επιλέξτε τον πάροχο AI που θα χρησιμοποιηθεί για τις ολοκληρώσεις συνομιλίας. Επιλέξτε "Moodle AI (core_ai subsystem)" για να δρομολογείτε τα αιτήματα μέσω της ενσωματωμένης διαμόρφωσης AI του Moodle στο Site admin > AI· τα πεδία API key, μοντέλου και base URL παρακάτω αγνοούνται σε αυτή τη λειτουργία. Το streaming, η χρήση εργαλείων και το prompt caching δεν είναι διαθέσιμα μέσω του core_ai — οι απαντήσεις παραδίδονται ως ένα ενιαίο τμήμα. Χρησιμοποιήστε έναν απευθείας πάροχο για την καλύτερη εμπειρία μαθητή.';
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
$string['coursesettings:sola_enabled'] = 'SOLA σε αυτό το μάθημα';
$string['coursesettings:sola_enabled_toggle'] = 'Εμφάνιση του widget SOLA σε αυτό το μάθημα';
$string['coursesettings:sola_enabled_desc'] = 'Ελέγχει αν το widget συνομιλίας SOLA εμφανίζεται σε αυτό το μάθημα. Η προεπιλεγμένη ρύθμιση για όλον τον ιστότοπο ορίζεται στις ρυθμίσεις του πρόσθετου στην ενότητα General > Default for new courses.';
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
$string['chat:clear'] = 'Εκκαθάριση οθόνης';
$string['chat:clear_confirm'] = 'Να γίνει εκκαθάριση των ορατών μηνυμάτων; Το πλήρες ιστορικό συνομιλίας σας παραμένει αποθηκευμένο και μπορεί να φορτωθεί ξανά ανοίγοντας πάλι το widget.';
$string['chat:copy'] = 'Αντιγραφή συνομιλίας';
$string['chat:copied'] = 'Η συνομιλία αντιγράφηκε στο πρόχειρο';
$string['chat:copy_failed'] = 'Αποτυχία αντιγραφής';
$string['chat:greeting'] = 'Γεια σου, {$a}! Είμαι ο SOLA. Πώς μπορώ να σε βοηθήσω σήμερα;';
$string['chat:thinking'] = 'Σκέφτομαι...';
$string['chat:error'] = 'Λυπάμαι, κάτι πήγε στραβά. Παρακαλώ δοκιμάστε ξανά.';
$string['chat:error_auth'] = 'Σφάλμα ταυτοποίησης. Επικοινωνήστε με τον διαχειριστή.';
$string['chat:error_ratelimit'] = 'Πάρα πολλά αιτήματα. Περιμένετε λίγο και δοκιμάστε ξανά.';
$string['chat:error_unavailable'] = 'Η υπηρεσία AI δεν είναι προσωρινά διαθέσιμη.';
$string['chat:error_notconfigured'] = 'Ο SOLA δεν έχει ρυθμιστεί ακόμα. Επικοινωνήστε με τον διαχειριστή.';
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
$string['chat:quiz_topic_adaptive']      = 'Προσαρμοστικό — επικέντρωση στα αδύναμα σημεία μου';
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
$string['chat:starter_help_page'] = 'Βοήθεια με αυτό';
$string['chat:starter_quiz'] = 'Εξέτασέ με σε αυτό';
$string['chat:starter_study_plan'] = 'Σχέδιο Μελέτης';
$string['chat:starter_ask_anything'] = 'Ρωτήστε ό,τι θέλετε';
$string['chat:starter_review_practice'] = 'Επανάληψη και Εξάσκηση';
$string['chat:starter_ai_project_coach'] = 'AI Project Coach';
$string['chat:starter_ell_practice'] = 'Εξάσκηση Συνομιλίας';
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
$string['chat:mode_history'] = 'Σημειώσεις';

// History panel.
$string['chat:history_title'] = 'Σημειώσεις και ιστορικό συνομιλίας';
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

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Παράδοση Frontend';
$string['settings:cdn_heading_desc'] = 'Εξυπηρέτηση των frontend στοιχείων SOLA (JS/CSS) από εξωτερικό CDN αντί του συστήματος αρχείων Moodle. Αυτό επιτρέπει ενημερώσεις frontend χωρίς αναβάθμιση πρόσθετου. Αφήστε το CDN URL κενό για χρήση τοπικών αρχείων πρόσθετου.';
$string['settings:cdn_url'] = 'Βασικό CDN URL';
$string['settings:cdn_url_desc'] = 'Βασικό URL όπου φιλοξενούνται τα sola.min.js και sola.min.css. Παράδειγμα: https://your-org.github.io/sola-cdn. Αφήστε κενό για χρήση τοπικών αρχείων πρόσθετου.';
$string['settings:cdn_version'] = 'Έκδοση CDN στοιχείων';
$string['settings:cdn_version_desc'] = 'Συμβολοσειρά έκδοσης που προστίθεται στα CDN URLs για cache busting. Ενημερώστε μετά από κάθε CDN ανάπτυξη (π.χ. 3.2.4 ή commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Συνολική χρήση';
$string['analytics:tab_bycourse'] = 'Ανά μάθημα';
$string['analytics:tab_comparison'] = 'AI έναντι μη χρηστών';
$string['analytics:tab_byunit'] = 'Ανά ενότητα';
$string['analytics:tab_usagetypes'] = 'Τύποι χρήσης';
$string['analytics:tab_themes'] = 'Θέματα';
$string['analytics:tab_feedback'] = 'Αξιολόγηση AI';
$string['analytics:total_students'] = 'Σύνολο φοιτητών';
$string['analytics:active_users'] = 'Ενεργοί χρήστες AI';
$string['analytics:msgs_per_student'] = 'Μηνύματα ανά φοιτητή';
$string['analytics:avg_session'] = 'Μέση διάρκεια συνεδρίας';
$string['analytics:return_rate'] = 'Ποσοστό επιστροφής';
$string['analytics:total_sessions'] = 'Σύνολο συνεδριών';
$string['analytics:thumbs_up'] = 'Θετικό';
$string['analytics:thumbs_down'] = 'Αρνητικό';
$string['analytics:hallucination_flags'] = 'Σημάνσεις ανακρίβειας';
$string['analytics:msgs_to_resolution'] = 'Μηνύματα μέχρι επίλυση';
$string['analytics:helpful'] = 'Χρήσιμο';
$string['analytics:not_helpful'] = 'Μη χρήσιμο';
$string['analytics:flag_hallucination'] = 'Αυτή η απάντηση περιέχει ανακριβείς πληροφορίες';
$string['analytics:submit_rating'] = 'Υποβολή';
$string['analytics:thanks_feedback'] = 'Ευχαριστούμε για την αξιολόγησή σας';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:history_saved_subtitle'] = 'Οι αποθηκευμένες απαντήσεις παραμένουν σε αυτή τη συσκευή για αυτό το μάθημα.';
$string['chat:history_saved_empty'] = 'Αποθηκεύστε μια απάντηση AI για να τη δείτε εδώ.';
$string['chat:history_views_label'] = 'Προβολές ιστορικού';
$string['chat:history_view_saved'] = 'Αποθηκευμένες';
$string['chat:history_view_recent'] = 'Ιστορικό';
$string['chat:debug_refresh'] = 'Ανανέωση';
$string['chat:debug_copy_all'] = 'Αντιγραφή όλων';
$string['chat:debug_close'] = 'Κλείσιμο';
$string['chat:language_switch'] = 'Αλλαγή γλώσσας';
$string['chat:language_dismiss'] = 'Απόρριψη πρότασης γλώσσας';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Επιλογή παρόχου LLM';
$string['chat:llm_model_label'] = 'Μοντέλο';
$string['chat:llm_model_select'] = 'Επιλογή μοντέλου LLM';
$string['chat:footer_usertesting'] = 'Δοκιμή ευχρηστίας';
$string['chat:footer_feedback'] = 'Σχόλια';
$string['chat:voice_panel_title'] = 'Μίλα με {$a} (Πειραματικό)';

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
$string['rubric:done'] = 'Ολοκληρώθηκε';
$string['rubric:encourage_high'] = 'Εξαιρετικά! Συνεχίστε!';
$string['rubric:encourage_low'] = 'Καλή αρχή! Η τακτική εξάσκηση θα βοηθήσει.';
$string['rubric:encourage_mid'] = 'Καλή προσπάθεια! Συνεχίστε.';
$string['rubric:overall'] = 'Συνολικά';
$string['rubric:practice_again'] = 'Εξασκηθείτε ξανά';
$string['rubric:score_title_conversation'] = 'Βαθμολογία συνομιλίας';
$string['rubric:score_title_pronunciation'] = 'Βαθμολογία προφοράς';
$string['rubric:scoring'] = 'Αξιολόγηση...';
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
$string['demo:title'] = 'Περιβάλλον δοκιμών';
$string['demo:heading'] = 'Περιβάλλον δοκιμών';
$string['demo:intro'] = 'Αυτή η σελίδα δημιουργεί ένα μάθημα δοκιμών που είναι <strong>κρυφό από τους μαθητές</strong> (visible=0) και το γεμίζει με ψεύτικους μαθητές, συνομιλίες AI, αξιολογήσεις και σχόλια. Χρήσιμο για προεπισκόπηση του Analytics Dashboard ή επικύρωση αλλαγών του plugin χωρίς να επηρεαστεί κανείς πραγματικά εγγεγραμμένος μαθητής.';
$string['demo:step1'] = 'Βήμα 1: μάθημα δοκιμών';
$string['demo:step2'] = 'Βήμα 2: προσθήκη ψεύτικων μαθητών και συνομιλιών AI';
$string['demo:course_exists'] = 'Το μάθημα δοκιμών υπάρχει: <strong>{$a->fullname}</strong> (σύντομο όνομα <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'κρυφό';
$string['demo:badge_visible'] = 'ορατό σε μαθητές';
$string['demo:no_course'] = 'Δεν βρέθηκε μάθημα δοκιμών. Κάντε κλικ παρακάτω για να δημιουργήσετε ένα.';
$string['demo:create_btn'] = 'Δημιουργία κρυφού μαθήματος δοκιμών';
$string['demo:open_course'] = 'Άνοιγμα μαθήματος &rarr;';
$string['demo:seed_intro'] = 'Δημιουργεί demo_student_001, demo_student_002, ... τους εγγράφει στο μάθημα δοκιμών και εισάγει συνθετικές συνομιλίες, μηνύματα, αξιολογήσεις και σχόλια. Εκτελέστε ξανά για προσθήκη περισσότερων δεδομένων ή τικάρετε το „καθαρισμός πρώτα“ για να ξεκινήσετε από την αρχή.';
$string['demo:users_label'] = 'Χρήστες';
$string['demo:weeks_label'] = 'Εβδομάδες';
$string['demo:clear_label'] = 'Καθαρισμός υπαρχόντων χρηστών demo_* πρώτα';
$string['demo:seed_btn'] = 'Προσθήκη μαθητών και συνομιλιών';
$string['demo:view_analytics'] = 'Προβολή στατιστικών για αυτό το μάθημα &rarr;';
$string['demo:footer'] = 'Τα δεδομένα που δημιουργούνται εδώ βρίσκονται στους τυπικούς πίνακες χρηστών / εγγραφών του Moodle και στους δικούς πίνακες συνομιλιών του plugin. Όλοι οι ψεύτικοι χρήστες έχουν ονόματα χρήστη που ξεκινούν με <code>demo_student_</code>, ώστε να φιλτράρονται ή να αφαιρούνται εύκολα. Για να τους αφαιρέσετε, εκτελέστε ξανά το βήμα προσθήκης με επιλεγμένο το „Καθαρισμός υπαρχόντων χρηστών demo_* πρώτα“.';
$string['demo:course_fullname'] = 'Μάθημα δοκιμών SOLA (κρυφό)';
$string['demo:notify_created'] = 'Το μάθημα δοκιμών είναι έτοιμο: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Αποτυχία δημιουργίας μαθήματος: {$a}';
$string['demo:notify_seeded'] = 'Προστέθηκαν: {$a->users} χρήστες, {$a->conversations} συνομιλίες, {$a->messages} μηνύματα, {$a->ratings} αξιολογήσεις, {$a->feedback} καταχωρήσεις σχολίων.';
$string['demo:notify_seed_fail'] = 'Αποτυχία προσθήκης δεδομένων: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Κόστος Token & Στατιστικά &rarr;';
$string['toc:testing'] = 'Περιβάλλον δοκιμών &rarr;';
$string['toc:back_to_course'] = '&larr; Πίσω στο {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Το εκτελέσιμο pdftotext δεν βρέθηκε· η εξαγωγή PDF απενεργοποιήθηκε.';
$string['rag:pdftotext_available'] = 'Το pdftotext εντοπίστηκε στο {$a}.';
$string['rag:docx_unavailable'] = 'Η επέκταση PHP ZipArchive δεν είναι διαθέσιμη· η εξαγωγή DOCX απενεργοποιήθηκε.';
$string['rag:h5p_unavailable'] = 'Το περιεχόμενο H5P δεν μπόρεσε να διαβαστεί· παράλειψη.';
$string['rag:scorm_too_large'] = 'Το πακέτο SCORM υπερβαίνει το ρυθμισμένο όριο μεγέθους ({$a} MB)· παράλειψη.';
$string['rag:scorm_unzip_failed'] = 'Το πακέτο SCORM δεν μπόρεσε να αποσυμπιεστεί· παράλειψη.';
$string['rag:transcript_fetch_failed'] = 'Δεν ήταν δυνατή η λήψη απομαγνητοφώνησης από το {$a}.';
$string['rag:transcript_cf_challenge'] = 'Το URL της απομαγνητοφώνησης αποκλείστηκε από την πρόκληση Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Εντοπίστηκαν ενσωματωμένα πολυμέσα: {$a}';
$string['rag:embed_transcript_attached'] = 'Η απομαγνητοφώνηση επισυνάφθηκε για το {$a}';

// v3.9.10–v3.9.14 new strings.
$string['usersettings:download'] = 'Λήψη των δεδομένων μου ({$a})';
$string['usersettings:download_help'] = 'Κατεβάστε ένα πλήρες αντίγραφο σε μορφή JSON όλων των εγγραφών {$a} που συνδέονται με τον λογαριασμό σας: συνομιλίες, μηνύματα, αξιολογήσεις, σχέδια μελέτης, υπενθυμίσεις, βαθμολογίες εξάσκησης, απαντήσεις σε έρευνες, προφίλ και εγγραφές ελέγχου.';
$string['usersettings:privacy_notice_link'] = 'Διαβάστε την ειδοποίηση απορρήτου του {$a}';
$string['privacy:title'] = 'Ειδοποίηση απορρήτου του {$a}';
$string['admin:user_data:title'] = '{$a} — Εξαγωγή και διαγραφή δεδομένων εκπαιδευόμενου';
$string['admin:user_data:intro'] = 'Λειτουργική διαδρομή για ένα αίτημα GDPR Άρθρο 15 (πρόσβαση) ή Άρθρο 17 (διαγραφή). Αναζητήστε έναν εκπαιδευόμενο μέσω του Moodle user id, ελέγξτε τις εγγραφές που τηρεί αυτό το πρόσθετο για αυτόν και πραγματοποιήστε εξαγωγή ή διαγραφή.';
$string['admin:user_data:search_label'] = 'Moodle user id';
$string['admin:user_data:lookup'] = 'Αναζήτηση';
$string['admin:user_data:not_found'] = 'Δεν βρέθηκε χρήστης με αυτό το id.';
$string['admin:user_data:download'] = 'Λήψη όλων των δεδομένων του εκπαιδευόμενου σε μορφή JSON';
$string['admin:user_data:purge'] = 'Διαγραφή όλων των δεδομένων αυτού του χρήστη';
$string['admin:user_data:confirm_purge'] = 'Οριστική διαγραφή όλων των εγγραφών για {$a}; Αυτό αφορά συνομιλίες, μηνύματα, αξιολογήσεις, σχέδια μελέτης, υπενθυμίσεις, προφίλ, βαθμολογίες εξάσκησης, έρευνες, εγγραφές ελέγχου και σχόλια. Η ενέργεια δεν μπορεί να αναιρεθεί.';
$string['admin:user_data:purged'] = 'Όλα τα δεδομένα του επιλεγμένου χρήστη διαγράφηκαν.';
$string['chat:consent_heading'] = 'Πριν συνομιλήσετε με τον/την {$a->product}';
$string['chat:consent_body'] = 'Ο/Η {$a->product} είναι εκπαιδευτικός βοηθός με τεχνητή νοημοσύνη. Τα μηνύματά σας και οι απαντήσεις του/της {$a->product} αποθηκεύονται στη βάση δεδομένων Moodle του ιδρύματος {$a->institution} και οι δέκα πιο πρόσφατες αλληλεπιδράσεις αποστέλλονται σε εγκεκριμένο πάροχο μοντέλου τεχνητής νοημοσύνης για να απαντηθούν οι ερωτήσεις σας. Το όνομά σας κοινοποιείται για εξατομίκευση· καμία άλλη πληροφορία ταυτοποίησης δεν αποστέλλεται στον πάροχο τεχνητής νοημοσύνης. Μπορείτε ανά πάσα στιγμή να κατεβάσετε, να διαγράψετε ή να σταματήσετε να χρησιμοποιείτε τον/την {$a->product}.';
$string['chat:consent_accept'] = 'Κατάλαβα, εκκίνηση του/της {$a}';
$string['chat:consent_privacy_link'] = 'Διαβάστε την πλήρη ειδοποίηση απορρήτου';
$string['task:audit_cleanup'] = 'AI Course Assistant – εκκαθάριση πίνακα ελέγχου';
$string['task:conversation_retention'] = 'AI Course Assistant – εκκαθάριση διατήρησης συνομιλιών';
$string['settings:audit_retention_days'] = 'Διατήρηση αρχείου ελέγχου (ημέρες)';
$string['settings:audit_retention_days_desc'] = 'Καθημερινή προγραμματισμένη εργασία διαγράφει εγγραφές ελέγχου παλαιότερες από αυτό. Το 0 απενεργοποιεί. Προεπιλογή 365.';
$string['settings:conversation_retention_days'] = 'Διατήρηση συνομιλιών (ημέρες)';
$string['settings:conversation_retention_days_desc'] = 'Καθημερινή προγραμματισμένη εργασία διαγράφει συνομιλίες των οποίων η τελευταία τροποποίηση είναι παλαιότερη από αυτό. Το 0 απενεργοποιεί. Προεπιλογή 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Αξιόπιστα τελικά σημεία SSRF';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Μία URL ανά γραμμή. Οι αναφερόμενοι κεντρικοί υπολογιστές παρακάμπτουν τους ελέγχους loopback / ιδιωτικού-IP / μόνο-https στον επικυρωτή SSRF του SOLA. Χρησιμοποιήστε το μόνο για αυτο-φιλοξενούμενα LLM σε δίκτυο που ελέγχετε — για παράδειγμα <code>http://localhost:11434</code> για τοπικό Ollama, <code>http://10.0.0.5:8000</code> για ένα vLLM pod στο ίδιο VPC. Η σύγκριση ταιριάζει με scheme + host + port· οποιαδήποτε διαδρομή αγνοείται. Προεπιλογή κενό (μπλοκάρει τα πάντα εσωτερικά). Οι γραμμές που ξεκινούν με <code>#</code> είναι σχόλια.';
$string['task:learner_weekly_digest']    = 'Βοηθός μαθήματος AI - Εβδομαδιαία περίληψη μαθητή';
$string['learner_digest:subject']        = 'Η εβδομάδα σου με {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Θέλεις ένα σύντομο εβδομαδιαίο email με το τι να επικεντρωθείς στη συνέχεια;';
$string['next_best_action:get_started']           = 'Ξεκίνα με {$a->title}. Άνοιξέ με και ρώτα "βοήθησέ με με {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Ξεκίνα με {$a->title}. Η ενότητα "{$a->module}" το καλύπτει.';
$string['next_best_action:review']                = 'Επανάλαβε τα βασικά του {$a->title} — άνοιξέ με και ρώτα "εξήγησέ μου το {$a->title} σαν να είμαι αρχάριος".';
$string['next_best_action:review_with_module']    = 'Επανάλαβε τα βασικά του {$a->title} στο "{$a->module}", μετά άνοιξέ με με ερωτήσεις.';
$string['next_best_action:practice']              = 'Χτίσε πάνω σε αυτό που έχεις στο {$a->title}. Άνοιξέ με και ρώτα "δώσε μου ένα λυμένο παράδειγμα για το {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Εξασκήσου στο {$a->title} παράλληλα με το "{$a->module}". Άνοιξέ με για λυμένα παραδείγματα.';
$string['next_best_action:quiz']                  = 'Σταθεροποίησε το {$a->title} με ένα γρήγορο κουίζ. Άνοιξέ με και επίλεξε "Δοκίμασέ με — προσαρμοστικό".';
$string['next_best_action:quiz_with_module']      = 'Σταθεροποίησε το {$a->title} με ένα γρήγορο κουίζ. Η ενότητα "{$a->module}" είναι εκεί που ζει.';
$string['next_best_action:empty_state']           = 'Πας υπέροχα σε κάθε στόχο τώρα — τίποτα να υπενθυμίσω. Συνέχισε.';
$string['next_best_action:header']                = 'Εδώ είναι {$a} πράγματα να εστιάσεις στη συνέχεια:';
$string['learner_digest:unsubscribe_done_title']  = 'Καταργήθηκε η εγγραφή';
$string['learner_digest:unsubscribe_done_body']   = 'Έγινε — δεν θα λαμβάνεις άλλα εβδομαδιαία email για αυτό το μάθημα από το {$a->product}. Μπορείς να εγγραφείς ξανά οποιαδήποτε στιγμή από το παράθυρο συνομιλίας στο μάθημά σου.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Ο σύνδεσμος κατάργησης εγγραφής δεν ισχύει πλέον';
$string['learner_digest:unsubscribe_invalid_body']  = 'Αυτός ο σύνδεσμος έχει λήξει ή είναι λανθασμένος. Μπορείς να διαχειριστείς τις προτιμήσεις email από τις ρυθμίσεις του μαθήματος.';
$string['active_learners:line']                   = '{$a} άλλοι μελετούν αυτό το μάθημα τώρα.';
$string['active_learners:line_global']             = '{$a} άλλοι μελετούν τώρα.';
$string['settings:active_learners_scope']          = 'Εύρος δείκτη ενεργών μαθητών';
$string['settings:active_learners_scope_desc']     = 'Εάν ο δείκτης "άλλοι μελετούν τώρα" πάνω από τους εκκινητές συνομιλίας μετρά μαθητές μόνο στο ίδιο μάθημα ή μαθητές σε όλο τον ιστότοπο. Προεπιλογή <strong>καθολικό</strong>.';
$string['settings:active_learners_scope_global']   = 'Καθολικό (οποιοδήποτε μάθημα)';
$string['settings:active_learners_scope_course']   = 'Μόνο ανά μάθημα';
$string['learner_digest:optin_yes']      = 'Ναι, στείλε μου το εβδομαδιαίο email';
$string['learner_digest:optin_no']       = 'Όχι, ευχαριστώ';
$string['learner_digest:optin_thanks']   = 'Εντάξει. Θα λαμβάνεις εβδομαδιαία περίληψη κάθε Δευτέρα.';
$string['learner_digest:optin_declined'] = 'Εντάξει. Χωρίς email - απλά άνοιξέ με όταν θέλεις έναν έλεγχο.';
$string['settings:xai_proxy_url'] = 'URL του proxy xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'Δημόσια wss URL της υπηρεσίας SOLA xAI Realtime proxy (για παράδειγμα wss://voice.example.com/xai-rt/rt). Όταν ορίζεται μαζί με το JWT secret, η φωνή xAI δρομολογείται μέσω του proxy και το κύριο API κλειδί xAI δεν φτάνει ποτέ στον περιηγητή. Αφήστε κενό για επιστροφή σε άμεση σύνδεση (δεν συνιστάται για παραγωγή).';
$string['settings:xai_proxy_jwt_secret'] = 'JWT secret του proxy xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Κοινόχρηστο μυστικό HS256 που χρησιμοποιείται για την υπογραφή βραχύβιων session tokens για το xAI Realtime proxy. Πρέπει να ταιριάζει με το μυστικό MOODLE_JWT_SECRET στον Cloudflare Worker. Εναλλάσσετε περιοδικά.';
$string['admin:vendor_dpa:title'] = '{$a} — Κατάσταση DPA προμηθευτή';
$string['admin:vendor_dpa:intro'] = 'Κατάσταση εξαίρεσης από εκπαίδευση, DPA και διατήρησης για κάθε driver παρόχου τεχνητής νοημοσύνης. Χρησιμοποιήστε το για να αποφασίσετε ποιους drivers θα ενεργοποιήσετε στον ιστότοπό σας. Η δρομολόγηση Tier 2 και άνω απαιτεί υπογεγραμμένη DPA και συμβατική εξαίρεση από εκπαίδευση.';
$string['admin:vendor_dpa:maintenance_note'] = 'Αυτός ο πίνακας συντηρείται στο classes/vendor_registry.php. Ενημερώστε τον όταν αλλάζουν οι όροι κάποιου προμηθευτή.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Email Υπευθύνου Προστασίας Δεδομένων';
$string['settings:dpo_email_desc'] = 'Email επικοινωνίας που εμφανίζεται στην ειδοποίηση απορρήτου προς τους εκπαιδευόμενους κάτω από την ενότητα «Επικοινωνία». Αφήστε κενό για να αποκρύψετε τη γραμμή. Οι rebranded εγκαταστάσεις πρέπει να ορίσουν εδώ τον δικό τους DPO.';
$string['settings:privacy_external_url'] = 'URL σελίδας απορρήτου του ιδρύματος';
$string['settings:privacy_external_url_desc'] = 'Σύνδεσμος προς τη σελίδα απορρήτου σε επίπεδο ιδρύματος, που εμφανίζεται στην ειδοποίηση απορρήτου προς τους εκπαιδευόμενους κάτω από την ενότητα «Επικοινωνία». Αφήστε κενό για να αποκρύψετε τη γραμμή.';
$string['settings:privacy_notice_override'] = 'Παράκαμψη ειδοποίησης απορρήτου (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Εάν οριστεί, αυτός ο HTML αντικαθιστά την προεπιλεγμένη επώνυμη ειδοποίηση απορρήτου που αποδίδεται στο /local/ai_course_assistant/privacy.php. Χρησιμοποιήστε το για να τοποθετήσετε το νομικά εγκεκριμένο κείμενο του ιδρύματός σας χωρίς επεξεργασία κώδικα. Αφήστε κενό για χρήση της προεπιλεγμένης ειδοποίησης, η οποία αντλεί το κείμενό της από τα επτά κλειδιά ρυθμίσεων branding.';
$string['objectives:title'] = 'Μαθησιακοί στόχοι και κατάκτηση';
$string['objectives:toggles_heading'] = 'Παρακολούθηση κατάκτησης';
$string['objectives:toggle_master'] = 'Ενεργοποίηση παρακολούθησης κατάκτησης για αυτό το μάθημα';
$string['objectives:toggle_chip'] = 'Εμφάνιση του δείκτη Μαθησιακής Κατάκτησης στους μαθητές';
$string['objectives:toggle_chip_help'] = 'Προαιρετικό. Όταν είναι απενεργοποιημένο, η κατάκτηση εξακολουθεί να καθοδηγεί σιωπηλά τον βοηθό, αλλά οι εκπαιδευόμενοι δεν βλέπουν κανέναν δείκτη.';
$string['objectives:toggled'] = 'Η ρύθμιση ενημερώθηκε.';
$string['objectives:detected_heading'] = 'Εντοπίστηκαν {$a->count} μαθησιακοί στόχοι από: {$a->source}.';
$string['objectives:source_competency'] = 'ικανότητες Moodle';
$string['objectives:source_summary'] = 'περίληψη μαθήματος';
$string['objectives:source_section'] = 'ενότητα ή περιεχόμενο πρώτης σελίδας';
$string['objectives:source_page'] = 'σελίδα μαθήματος';
$string['objectives:source_llm'] = 'εξαγωγή με τεχνητή νοημοσύνη';
$string['objectives:source_manual'] = 'μη αυτόματη καταχώριση';
$string['objectives:source_none'] = 'καμία αυτόματη πηγή';
$string['objectives:import_detected'] = 'Εισαγωγή των εντοπισμένων στόχων';
$string['objectives:import_llm'] = 'Εξαγωγή στόχων με τεχνητή νοημοσύνη';
$string['objectives:llm_empty'] = 'Η εξαγωγή με τεχνητή νοημοσύνη δεν επέστρεψε στόχους. Δοκιμάστε ξανά αργότερα ή καταχωρίστε τους χειροκίνητα.';
$string['objectives:imported'] = 'Εισήχθησαν {$a} στόχοι.';
$string['objectives:none_detected'] = 'Δεν εντοπίστηκαν αυτόματα μαθησιακοί στόχοι. Καταχωρίστε τους χειροκίνητα παρακάτω ή χρησιμοποιήστε εξαγωγή με τεχνητή νοημοσύνη.';
$string['objectives:list_heading'] = 'Τρέχοντες στόχοι';
$string['objectives:col_code'] = 'Κωδικός';
$string['objectives:col_title'] = 'Τίτλος';
$string['objectives:col_source'] = 'Πηγή';
$string['objectives:col_actions'] = 'Ενέργειες';
$string['objectives:add_heading'] = 'Προσθήκη στόχου';
$string['objectives:add_submit'] = 'Προσθήκη στόχου';
$string['objectives:saved'] = 'Ο στόχος αποθηκεύτηκε.';
$string['objectives:deleted'] = 'Ο στόχος διαγράφηκε.';
$string['objectives:delete_confirm'] = 'Διαγραφή αυτού του στόχου και όλου του ιστορικού προσπαθειών του;';
$string['objectives:delete_all'] = 'Διαγραφή όλων των στόχων αυτού του μαθήματος';
$string['objectives:delete_all_confirm'] = 'Διαγραφή όλων των στόχων και όλου του ιστορικού προσπαθειών αυτού του μαθήματος; Δεν μπορεί να αναιρεθεί.';
$string['objectives:deleted_all'] = 'Όλοι οι στόχοι αυτού του μαθήματος διαγράφηκαν.';
$string['mastery:chip_aria'] = 'Κατάσταση μαθησιακής κατάκτησης';
$string['mastery:popover_aria'] = 'Λεπτομέρειες μαθησιακής κατάκτησης';
$string['mastery:chip_label'] = '{$a->mastered} από {$a->total} κατακτήθηκαν';
$string['mastery:status_mastered'] = 'κατακτήθηκε';
$string['mastery:status_learning'] = 'σε εξέλιξη';
$string['mastery:status_not_started'] = 'δεν ξεκίνησε';
$string['mastery:popover_empty'] = 'Δεν έχουν διαμορφωθεί μαθησιακοί στόχοι για αυτό το μάθημα.';
$string['settings:mastery_heading'] = 'Παρακολούθηση κατάκτησης';
$string['settings:mastery_heading_desc'] = 'Προαιρετική λειτουργία ανά μάθημα που αντιστοιχίζει απαντήσεις σε κουίζ και αλληλεπιδράσεις συνομιλίας με τον βοηθό στους μαθησιακούς στόχους του μαθήματος και στη συνέχεια τροφοδοτεί ένα συμπαγές στιγμιότυπο κατάκτησης πίσω στο system prompt για να καθοδηγήσει τις ερωτήσεις. Διακριτική από προεπιλογή: οι εκπαιδευόμενοι δεν βλέπουν τίποτα εκτός εάν έχει ενεργοποιηθεί ο διακόπτης δείκτη ανά μάθημα.';
$string['settings:mastery_threshold'] = 'Κατώφλι κατάκτησης';
$string['settings:mastery_threshold_desc'] = 'Κυλιόμενη ακρίβεια στην οποία ή πάνω από την οποία ένας στόχος θεωρείται κατακτημένος. 0,0 έως 1,0. Προεπιλογή 0,85.';
$string['settings:mastery_window'] = 'Παράθυρο προσπαθειών';
$string['settings:mastery_window_desc'] = 'Αριθμός των πιο πρόσφατων προσπαθειών ανά στόχο που σταθμίζονται στην κυλιόμενη ακρίβεια. Προεπιλογή 8.';
$string['settings:mastery_decay_enabled']        = 'Ενεργοποίηση φθοράς εμπειρίας';
$string['settings:mastery_decay_enabled_desc']   = 'Όταν είναι ενεργοποιημένο, οι βαθμολογίες εμπειρίας μειώνονται με την πάροδο του χρόνου σε σχέση με την πιο πρόσφατη χρονοσφραγίδα προσπάθειας. Ένας προηγουμένως κατακτημένος στόχος επιστρέφει στο "μαθαίνει" μετά από αρκετό χρόνο. Δεν πέφτει κάτω από το "μαθαίνει". <strong>Προεπιλεγμένο απενεργοποιημένο στην v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Χρόνος ημιζωής φθοράς εμπειρίας (ημέρες)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Χρόνος ημιζωής σε ημέρες. Η βαθμολογία πολλαπλασιάζεται με 0.5 ^ (ημέρες από την τελευταία προσπάθεια / χρόνος ημιζωής). Προεπιλογή 30. Χρησιμοποιείται μόνο όταν η φθορά είναι ενεργοποιημένη.';
$string['settings:mastery_classifier_model'] = 'Μοντέλο ταξινομητή';
$string['settings:mastery_classifier_model_desc'] = 'Μοντέλο που χρησιμοποιείται για την ταξινόμηση των αλληλεπιδράσεων του βοηθού σε σχέση με στόχους. Αφήστε κενό για χρήση του προεπιλεγμένου μοντέλου του παρόχου τεχνητής νοημοσύνης· διαφορετικά καθορίστε ένα φθηνό μοντέλο όπως το gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Βάρος ταξινομητή';
$string['settings:mastery_classifier_weight_desc'] = 'Πόσο μετρά μια προσπάθεια συνομιλίας σε σχέση με μια προσπάθεια κουίζ (1,0). Προεπιλογή 0,3.';
$string['settings:mastery_classifier_threshold'] = 'Κατώφλι αξιοπιστίας ταξινομητή';
$string['settings:mastery_classifier_threshold_desc'] = 'Ελάχιστη αξιοπιστία ταξινομητή που απαιτείται για την καταγραφή μιας προσπάθειας συνομιλίας. 0,0 έως 1,0. Προεπιλογή 0,7.';
$string['chat:mode_progress'] = 'Πρόοδος';
$string['objectives:toggle_dashboard'] = 'Εμφάνιση καρτέλας Πρόοδος στους μαθητές';
$string['objectives:toggle_dashboard_help'] = 'Προαιρετικό. Προσθέτει μια καρτέλα Πρόοδος δίπλα στις καρτέλες Συνομιλία / Φωνή / Ιστορικό μέσα στο widget. Η καρτέλα δείχνει στους εκπαιδευόμενους ποιους στόχους έχουν κατακτήσει, ποιοι είναι σε εξέλιξη και ποιοι δεν έχουν ξεκινήσει.';
$string['mastery:dashboard_title'] = 'Η μαθησιακή σας πρόοδος';
$string['mastery:dashboard_subtitle'] = 'Η κατάκτηση μετριέται από τις απαντήσεις σας στα κουίζ και την εξάσκηση στη συνομιλία. Συνεχίστε — το βάθος υπερτερεί της κάλυψης.';
$string['mastery:dashboard_refresh'] = 'Ανανέωση';
$string['mastery:section_mastered'] = 'Κατακτημένα';
$string['mastery:section_learning'] = 'Σε εξέλιξη';
$string['mastery:section_not_started'] = 'Δεν έχουν ξεκινήσει';
$string['mastery:summary_label'] = '{$a->mastered} από {$a->total} στόχους κατακτήθηκαν';
$string['mastery:ask_about'] = 'Ρωτήστε για αυτό';
$string['mastery:celebrate'] = 'Έχετε κατακτήσει όλους τους στόχους αυτού του μαθήματος. Εξαιρετική δουλειά.';
$string['mastery:ask_template'] = 'Βοήθησέ με να εξασκηθώ και να εμβαθύνω την κατανόησή μου σε αυτόν τον στόχο: {$a}.';
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

// v4.4.0: course-page CSP setting.
$string['settings:csp_course_pages_mode']      = 'Course-page Content-Security-Policy';
$string['settings:csp_course_pages_mode_desc'] = 'Optional CSP header on course pages where the AI Course Assistant widget is active. <strong>Off</strong>: no header (default). <strong>Report-only</strong>: send <code>Content-Security-Policy-Report-Only</code> — browsers log violations but do not block. Useful for a one-week observation pass. <strong>Enforce</strong>: send <code>Content-Security-Policy</code> — browsers block off-allowlist iframe sources, fetches, and other risky loads. Helps contain the impact of arbitrary scripts pasted into Additional HTML site config (the IBL AI / Raison incident on 2026-04-29). Does not affect SOLA endpoints, which always send a stricter CSP.';
$string['settings:csp_mode_off']               = 'Off (no header on course pages)';
$string['settings:csp_mode_report_only']       = 'Report-only (log violations, do not block)';
$string['settings:csp_mode_enforce']           = 'Enforce (block off-allowlist loads)';

// v4.5.0: site-wide pedagogy defaults.
$string['settings:pedagogy_defaults_heading']      = 'Pedagogy defaults';
$string['settings:pedagogy_defaults_heading_desc'] = 'Site-wide default state for each pedagogy feature. Flip a feature on here and every course inherits it unless that course has an explicit override on its SOLA course settings page (force on / force off). On upgrade to v4.5.0, every per-course "force off" override that was set to the legacy default-off value of <code>0</code> is cleared so the new global defaults take effect cleanly. Default off — upgrades from v4.4.x are a no-op until an admin flips a feature on.';
$string['pedagogy:mastery']                = 'Mastery tracking on by default';
$string['pedagogy:mastery_desc']           = 'When on, every course inherits mastery tracking unless the course has its own override. Mastery requires curated learning objectives — courses without objectives fall back gracefully, no error.';
$string['pedagogy:socratic_mode']          = 'Socratic mode on by default';
$string['pedagogy:socratic_mode_desc']     = 'When on, SOLA leads with questions instead of direct answers in every course unless the course has its own override.';
$string['pedagogy:worked_examples']        = 'Worked examples starter on by default';
$string['pedagogy:worked_examples_desc']   = 'When on, the "Show me a worked example" conversation starter appears in every course unless the course has its own override.';
$string['pedagogy:flashcards']             = 'Flashcards on by default';
$string['pedagogy:flashcards_desc']        = 'When on, spaced-repetition flashcards are available in every course unless the course has its own override.';
$string['pedagogy:code_sandbox']           = 'Python code sandbox on by default';
$string['pedagogy:code_sandbox_desc']      = 'When on, the in-browser Python sandbox is available in every course unless the course has its own override.';
$string['pedagogy:essay_feedback']         = 'Essay feedback on by default';
$string['pedagogy:essay_feedback_desc']    = 'When on, AI essay feedback is available in every course unless the course has its own override.';
$string['pedagogy:per_course_inherit']     = 'Inherit site default ({$a})';
$string['pedagogy:per_course_force_on']    = 'Force on for this course';
$string['pedagogy:per_course_force_off']   = 'Force off for this course';
$string['pedagogy:on']                     = 'on';
$string['pedagogy:off']                    = 'off';
