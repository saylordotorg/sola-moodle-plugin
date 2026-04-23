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
