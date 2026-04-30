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
 * Language strings for local_ai_course_assistant — Malay.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Pembantu Kursus AI';
$string['attachment:attach'] = 'Lampirkan';
$string['attachment:attach_image_or_pdf'] = 'Lampirkan imej atau PDF';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Menyimpan perbualan chat tutor AI bagi setiap pengguna dan kursus.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID pengguna yang memiliki perbualan.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID kursus yang dimiliki oleh perbualan.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Tajuk perbualan.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Masa perbualan dicipta.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Masa perbualan terakhir diubah suai.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Menyimpan mesej individu dalam perbualan chat tutor AI.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID pengguna yang menghantar mesej.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID kursus yang dimiliki oleh mesej.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Peranan penghantar mesej (pengguna atau pembantu).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Kandungan mesej.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Bilangan token yang digunakan untuk mesej.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Masa mesej dicipta.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Guna chat tutor AI';
$string['ai_course_assistant:viewanalytics'] = 'Lihat analitik chat tutor AI';
$string['ai_course_assistant:manage'] = 'Urus tetapan chat tutor AI (Peranan Pentadbir)';

// Settings.
$string['settings:enabled'] = 'Aktifkan Pembantu Kursus AI';
$string['settings:enabled_desc'] = 'Aktifkan atau nyahaktifkan widget Pembantu Kursus AI pada halaman kursus.';
$string['settings:default_course_mode'] = 'Lalai untuk kursus baharu';
$string['settings:default_course_mode_desc'] = 'Mengawal sama ada SOLA muncul pada kursus apabila tiada pilihan setiap kursus telah dibuat. Pemasangan baharu secara lalai kepada "Dilumpuhkan secara lalai" supaya pentadbir boleh memilih untuk mengaktifkan kursus demi kursus dari halaman Analytics atau halaman Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Dilumpuhkan secara lalai (aktifkan setiap kursus)';
$string['settings:default_course_mode_all'] = 'Diaktifkan pada semua kursus';
$string['settings:auto_open'] = 'Buka automatik pada lawatan pertama';
$string['settings:auto_open_desc'] = 'Apabila diaktifkan, laci SOLA terbuka secara automatik kali pertama pelajar melawat setiap kursus. Muatan halaman seterusnya dalam kursus yang sama tidak membuka semula laci — keadaan dijejaki bagi setiap kursus dalam pelayar pelajar melalui localStorage. Terpakai pada desktop dan mudah alih. Boleh ditindih bagi setiap kursus dari halaman Course AI Settings.';
$string['settings:comparison_providers'] = 'Pembekal perbandingan (pemilih LLM)';
$string['settings:comparison_providers_desc'] = 'Tambah penyedia AI tambahan ke pemilih LLM dalam widget supaya pentadbir boleh membandingkan respons merentasi penyedia. Gunakan jadual di bawah untuk menambah baris. Lajur suhu adalah pilihan (biarkan kosong untuk menggunakan suhu global). Format yang disimpan: provider_id|api_key|model1,model2|temperature. Penyedia utama yang dikonfigurasi di atas sentiasa disertakan secara automatik. Hanya pentadbir dengan keupayaan pengurusan melihat pemilih; pelajar tidak pernah melihatnya. Provider IDs yang sah: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Pembekal AI lalai';
$string['settings:provider_desc'] = 'Pilih pembekal AI yang akan digunakan untuk penyiapan sembang. Pilih "Moodle AI (core_ai subsystem)" untuk menghalakan permintaan melalui konfigurasi AI terbina dalam Moodle di Site admin > AI; medan kunci API, model dan URL asas di bawah diabaikan dalam mod itu. Streaming, penggunaan alat, dan prompt caching tidak tersedia melalui core_ai — respons dihantar sebagai satu ketulan. Gunakan pembekal langsung untuk pengalaman pelajar terbaik.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Tempatan)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Tersuai (serasi OpenAI)';
$string['settings:apikey'] = 'Kunci API';
$string['settings:apikey_desc'] = 'Kunci API untuk pembekal yang dipilih. Tidak diperlukan untuk Ollama.';
$string['settings:model'] = 'Nama Model';
$string['settings:model_desc'] = 'Model yang hendak digunakan. Default bergantung pada pembekal (cth. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL Asas API';
$string['settings:apibaseurl_desc'] = 'URL asas untuk API. Diisi secara automatik mengikut pembekal tetapi boleh ditindih. Biarkan kosong untuk default pembekal.';
$string['settings:systemprompt'] = 'Templat Prompt Sistem';
$string['settings:systemprompt_desc'] = 'Prompt sistem yang dihantar kepada AI. Gunakan placeholder: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Anda adalah tutor AI yang berguna untuk kursus "{{coursename}}". Peranan pelajar ialah {{userrole}}.

Topik kursus yang diliputi:
{{coursetopics}}

Bantu pelajar memahami bahan kursus. Jadilah menggalakkan, jelas, dan berkaedah pedagogi yang baik.';
$string['settings:temperature'] = 'Suhu';
$string['settings:temperature_desc'] = 'Mengawal rawak. Nilai lebih rendah lebih fokus, nilai lebih tinggi lebih kreatif. Julat: 0.0 hingga 2.0.';
$string['settings:maxhistory'] = 'Sejarah Perbualan Maksimum';
$string['settings:maxhistory_desc'] = 'Bilangan maksimum pasangan mesej untuk disertakan dalam permintaan API. Mesej lama akan dipangkas.';
$string['settings:avatar'] = 'Avatar Chat';
$string['settings:avatar_desc'] = 'Pilih ikon avatar untuk butang widget chat.';
$string['settings:avatar_saylor'] = 'Logo {$a} (Default)';
$string['settings:position'] = 'Kedudukan Widget';
$string['settings:position_desc'] = 'Kedudukan widget chat pada halaman.';
$string['settings:position_br'] = 'Bawah kanan';
$string['settings:position_bl'] = 'Bawah kiri';
$string['settings:position_tr'] = 'Atas kanan';
$string['settings:position_tl'] = 'Atas kiri';
$string['chat:settings'] = 'Tetapan plugin';
$string['analytics:viewdashboard'] = 'Lihat papan pemuka analitik';

// Course settings.
$string['coursesettings:title'] = 'Tetapan AI Kursus';
$string['coursesettings:enabled'] = 'Aktifkan penggantian kursus';
$string['coursesettings:enabled_desc'] = 'Apabila diaktifkan, tetapan di bawah akan menggantikan konfigurasi pembekal AI global untuk kursus ini sahaja. Biarkan medan kosong untuk mewarisi nilai global.';
$string['coursesettings:sola_enabled'] = 'SOLA pada kursus ini';
$string['coursesettings:sola_enabled_toggle'] = 'Tunjukkan widget SOLA pada kursus ini';
$string['coursesettings:sola_enabled_desc'] = 'Mengawal sama ada widget sembang SOLA muncul pada kursus ini. Tetapan lalai seluruh tapak ditetapkan dalam tetapan plugin di bawah General > Default for new courses.';
$string['coursesettings:using_global'] = 'Menggunakan tetapan global';
$string['coursesettings:saved'] = 'Tetapan AI kursus disimpan.';
$string['coursesettings:global_settings_link'] = 'Tetapan AI global';

// Language detection and preference.
$string['lang:switch'] = 'Ya, tukar';
$string['lang:dismiss'] = 'Tidak, terima kasih';
$string['lang:change'] = 'Tukar bahasa';
$string['lang:english'] = 'Bahasa Inggeris';

// Chat widget.
$string['chat:title'] = 'Tutor AI';
$string['chat:placeholder'] = 'Tanya soalan...';
$string['chat:send'] = 'Hantar';
$string['chat:close'] = 'Tutup chat';
$string['chat:open'] = 'Buka chat tutor AI';
$string['chat:clear'] = 'Kosongkan skrin';
$string['chat:clear_confirm'] = 'Kosongkan mesej yang kelihatan? Keseluruhan sejarah chat anda kekal tersimpan dan boleh dimuatkan semula dengan membuka semula widget.';
$string['chat:copy'] = 'Salin perbualan';
$string['chat:copied'] = 'Perbualan disalin ke clipboard';
$string['chat:copy_failed'] = 'Gagal menyalin perbualan';
$string['chat:thinking'] = 'Sedang berfikir...';
$string['chat:error'] = 'Maaf, ada yang tidak kena. Sila cuba lagi.';
$string['chat:error_auth'] = 'Ralat pengesahan. Sila hubungi pentadbir anda.';
$string['chat:error_ratelimit'] = 'Terlalu banyak permintaan. Sila tunggu sebentar dan cuba lagi.';
$string['chat:error_unavailable'] = 'Perkhidmatan AI tidak tersedia buat sementara waktu. Sila cuba lagi kemudian.';
$string['chat:error_notconfigured'] = 'Tutor AI belum dikonfigurasi. Sila hubungi pentadbir anda.';
$string['chat:mic'] = 'Ucapkan soalan anda';
$string['chat:mic_error'] = 'Ralat mikrofon. Sila semak kebenaran pelayar anda.';
$string['chat:mic_unsupported'] = 'Input suara tidak disokong dalam pelayar ini.';
$string['chat:newline_hint'] = 'Shift+Enter untuk baris baharu';
$string['chat:you'] = 'Anda';
$string['chat:assistant'] = 'Tutor AI';
$string['chat:history_loaded'] = 'Perbualan sebelumnya dimuatkan.';
$string['chat:history_cleared'] = 'Sejarah chat dikosongkan.';
$string['chat:offtopic_warning'] = 'Nampaknya soalan anda tidak berkaitan dengan kursus ini. Sila cuba kekal dalam topik supaya saya boleh membantu anda dengan sebaik-baiknya!';
$string['chat:offtopic_ended'] = 'Akses tutor AI anda telah digantung sementara selama {$a} minit kerana perbualan telah tersasar dari topik terlalu banyak kali. Gunakan masa ini untuk mengulas bahan kursus anda, dan anda boleh cuba lagi kemudian.';
$string['chat:offtopic_locked'] = 'Akses tutor AI anda digantung sementara. Anda boleh cuba lagi dalam {$a} minit. Sila fokus pada soalan berkaitan kursus apabila anda kembali.';
$string['chat:escalated_to_support'] = 'Saya tidak dapat menjawab soalan anda sepenuhnya, jadi saya telah membuat tiket sokongan untuk anda. Seorang ahli pasukan sokongan akan menindaklanjuti. Rujukan tiket anda ialah: {$a}';
$string['chat:studyplan_intro'] = 'Saya boleh membantu anda membuat pelan pembelajaran untuk kursus ini! Beritahu saya berapa jam seminggu yang boleh anda dedikasikan untuk belajar, dan saya akan membantu anda membina pelan yang berstruktur.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'Soalan Lazim & Sokongan';
$string['settings:faq_heading_desc'] = 'Konfigurasi FAQ berpusat dan integrasi tiket sokongan Zendesk.';
$string['settings:faq_content'] = 'Kandungan FAQ';
$string['settings:faq_content_desc'] = 'Masukkan entri FAQ (satu baris satu entri dalam format: Q: soalan | A: jawapan). Ini akan diberikan kepada AI untuk menjawab soalan sokongan biasa.';
$string['settings:zendesk_enabled'] = 'Aktifkan Eskalasi Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Apabila AI tidak dapat menyelesaikan soalan sokongan, buat tiket Zendesk secara automatik dengan ringkasan perbualan.';
$string['settings:zendesk_subdomain'] = 'Subdomain Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomain Zendesk anda (cth. "mycompany" untuk mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'E-mel API Zendesk';
$string['settings:zendesk_email_desc'] = 'Alamat e-mel pengguna Zendesk untuk pengesahan API (dengan akhiran /token).';
$string['settings:zendesk_token'] = 'Token API Zendesk';
$string['settings:zendesk_token_desc'] = 'Token API untuk pengesahan Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Pengesanan Luar Topik';
$string['settings:offtopic_heading_desc'] = 'Konfigurasi cara chat mengendalikan perbualan luar topik.';
$string['settings:offtopic_enabled'] = 'Aktifkan pengesanan luar topik';
$string['settings:offtopic_enabled_desc'] = 'Arahan AI untuk mengesan dan mengalihkan perbualan luar topik.';
$string['settings:offtopic_max'] = 'Mesej Luar Topik Maksimum';
$string['settings:offtopic_max_desc'] = 'Bilangan mesej luar topik berturut-turut sebelum mengambil tindakan.';
$string['settings:offtopic_action'] = 'Tindakan Luar Topik';
$string['settings:offtopic_action_desc'] = 'Apa yang perlu dilakukan apabila had luar topik dicapai.';
$string['settings:offtopic_action_warn'] = 'Amaran dan alihkan';
$string['settings:offtopic_action_end'] = 'Kunci akses sementara';
$string['settings:offtopic_lockout_duration'] = 'Tempoh Kunci (minit)';
$string['settings:offtopic_lockout_duration_desc'] = 'Berapa lama (dalam minit) pelajar kehilangan akses kepada tutor AI selepas melebihi had luar topik. Default: 30 minit.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Perancangan Pembelajaran & Peringatan';
$string['settings:studyplan_heading_desc'] = 'Konfigurasi ciri perancangan pembelajaran dan pemberitahuan peringatan.';
$string['settings:studyplan_enabled'] = 'Aktifkan Perancangan Pembelajaran';
$string['settings:studyplan_enabled_desc'] = 'Benarkan tutor AI membantu pelajar membuat pelan pembelajaran peribadi berdasarkan masa yang ada.';
$string['settings:reminders_email_enabled'] = 'Aktifkan Peringatan E-mel';
$string['settings:reminders_email_enabled_desc'] = 'Benarkan pelajar mendaftar untuk peringatan pembelajaran melalui e-mel.';
$string['settings:reminders_whatsapp_enabled'] = 'Aktifkan Peringatan WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Benarkan pelajar mendaftar untuk peringatan pembelajaran melalui WhatsApp (memerlukan konfigurasi API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Endpoint API untuk menghantar mesej WhatsApp (cth. Twilio, MessageBird). Mesti menerima POST dengan badan JSON yang mengandungi medan "to", "from", dan "body".';
$string['settings:whatsapp_api_token'] = 'Token API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token pengesahan untuk API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Nombor Penghantar WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Nombor telefon untuk menghantar mesej WhatsApp (dengan kod negara, cth. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Negara Disekat WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Kod negara ISO 3166-1 alpha-2 dipisahkan koma di mana peringatan WhatsApp tidak dibenarkan disebabkan peraturan tempatan (cth. "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Peringatan Pembelajaran: {$a}';
$string['reminder:email_body'] = 'Helo {$a->firstname},

Ini adalah peringatan pembelajaran anda untuk "{$a->coursename}".

{$a->message}

Pelan pembelajaran anda mencadangkan {$a->hours_per_week} jam seminggu untuk kursus ini.

Teruskan usaha yang baik!

---
Untuk berhenti menerima peringatan ini, klik di sini: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Peringatan Pembelajaran untuk {$a->coursename}: {$a->message} (Nyah daftar: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Fokus pembelajaran hari ini: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Nyah Langganan daripada Peringatan Pembelajaran';
$string['unsubscribe:success'] = 'Anda telah berjaya nyah langganan daripada peringatan pembelajaran untuk kursus ini.';
$string['unsubscribe:already'] = 'Anda telah pun nyah langganan daripada peringatan ini.';
$string['unsubscribe:invalid'] = 'Pautan nyah langganan tidak sah atau telah tamat tempoh.';
$string['unsubscribe:resubscribe'] = 'Bertukar fikiran? Anda boleh mengaktifkan semula peringatan melalui chat tutor AI.';

// Scheduled task.
$string['task:send_reminders'] = 'Hantar peringatan pembelajaran tutor AI';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Menyimpan pelan pembelajaran pelajar.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID pengguna yang memiliki pelan pembelajaran.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kursus yang dimiliki oleh pelan pembelajaran.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Jam per minggu yang dirancang oleh pelajar untuk belajar.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Butiran pelan pembelajaran dalam format JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Menyimpan keutamaan dan langganan peringatan pembelajaran.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID pengguna yang melanggan peringatan.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Saluran peringatan (e-mel atau whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Alamat e-mel atau nombor telefon untuk peringatan.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Kod negara pengguna untuk pematuhan peraturan.';

// Analytics dashboard.
$string['analytics:title'] = 'Analitik Tutor AI';
$string['analytics:overview'] = 'Gambaran Keseluruhan';
$string['analytics:total_conversations'] = 'Jumlah perbualan';
$string['analytics:total_messages'] = 'Jumlah mesej';
$string['analytics:active_students'] = 'Pelajar aktif';
$string['analytics:avg_messages_per_student'] = 'Purata mesej setiap pelajar';
$string['analytics:offtopic_rate'] = 'Kadar luar topik';
$string['analytics:escalation_count'] = 'Dieskalasi ke sokongan';
$string['analytics:studyplan_adoption'] = 'Pelajar dengan pelan pembelajaran';
$string['analytics:usage_trends'] = 'Trend Penggunaan';
$string['analytics:daily_messages'] = 'Jumlah mesej harian';
$string['analytics:hotspots'] = 'Hotspot Kursus';
$string['analytics:hotspots_desc'] = 'Bahagian kursus yang paling kerap dirujuk dalam soalan pelajar. Kiraan yang lebih tinggi mungkin menunjukkan kawasan di mana pelajar memerlukan lebih banyak sokongan.';
$string['analytics:section'] = 'Bahagian';
$string['analytics:mention_count'] = 'Sebutan';
$string['analytics:common_prompts'] = 'Corak Prompt Biasa';
$string['analytics:common_prompts_desc'] = 'Corak soalan yang kerap berulang daripada pelajar. Semak ini untuk mengenal pasti jurang sistematik dalam kandungan kursus.';
$string['analytics:prompt_pattern'] = 'Corak';
$string['analytics:frequency'] = 'Kekerapan';
$string['analytics:recent_activity'] = 'Aktiviti Terkini';
$string['analytics:no_data'] = 'Tiada data analitik tersedia lagi. Data akan muncul sebaik sahaja pelajar mula menggunakan tutor AI.';
$string['analytics:timerange'] = 'Julat masa';
$string['analytics:last_7_days'] = '7 hari lepas';
$string['analytics:last_30_days'] = '30 hari lepas';
$string['analytics:all_time'] = 'Sepanjang masa';
$string['analytics:export'] = 'Eksport data';
$string['analytics:provider_comparison'] = 'Perbandingan Pembekal AI';
$string['analytics:provider_comparison_desc'] = 'Bandingkan prestasi merentas pembekal AI yang digunakan dalam kursus ini.';
$string['analytics:provider'] = 'Pembekal';
$string['analytics:response_count'] = 'Respons';
$string['analytics:avg_response_length'] = 'Panjang respons purata';
$string['analytics:total_tokens'] = 'Jumlah token';
$string['analytics:avg_tokens'] = 'Purata token / respons';

// User settings.
$string['usersettings:title'] = 'Pembantu Kursus AI - Data Anda';
$string['usersettings:intro'] = 'Urus data chat tutor AI dan tetapan privasi anda';
$string['usersettings:privacy_info'] = 'Perbualan anda dengan tutor AI disimpan untuk memberi anda sokongan berterusan sepanjang kursus anda. Anda mempunyai kawalan penuh ke atas data ini dan boleh memadamnya pada bila-bila masa.';
$string['usersettings:usage_stats'] = 'Statistik Penggunaan Anda';
$string['usersettings:total_messages'] = 'Jumlah mesej';
$string['usersettings:total_conversations'] = 'Perbualan';
$string['usersettings:messages'] = 'Mesej';
$string['usersettings:last_activity'] = 'Aktiviti terakhir';
$string['usersettings:delete_course_data'] = 'Padam data kursus';
$string['usersettings:no_data'] = 'Anda belum menggunakan tutor AI. Data penggunaan anda akan muncul di sini sebaik sahaja anda mula berbual.';
$string['usersettings:delete_all_title'] = 'Padam Semua Data Anda';
$string['usersettings:delete_all_warning'] = 'Ini akan memadamkan secara kekal semua perbualan tutor AI anda merentas semua kursus. Tindakan ini tidak boleh dibatalkan.';
$string['usersettings:delete_all_button'] = 'Padam Semua Data Saya';
$string['usersettings:confirm_delete_course'] = 'Adakah anda pasti mahu memadamkan secara kekal semua data tutor AI anda untuk kursus "{$a}"? Tindakan ini tidak boleh dibatalkan.';
$string['usersettings:confirm_delete_all'] = 'Adakah anda pasti mahu memadamkan secara kekal SEMUA data tutor AI anda merentas semua kursus? Tindakan ini tidak boleh dibatalkan.';
$string['usersettings:data_deleted'] = 'Data anda telah dipadam.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Hai, {$a}! Saya SOLA. Bagaimana saya boleh membantu anda hari ini?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Buka SOLA';
$string['chat:change_avatar'] = 'Tukar avatar';

$string['chat:quiz'] = 'Ambil kuiz latihan';
$string['chat:quiz_setup_title'] = 'Kuiz Latihan';
$string['chat:quiz_questions'] = 'Bilangan soalan';
$string['chat:quiz_topic'] = 'Topik';
$string['chat:quiz_topic_guided'] = 'Dipandu AI (berdasarkan kemajuan anda)';
$string['chat:quiz_topic_adaptive']      = 'Adaptif — fokus pada kelemahan saya';
$string['chat:quiz_topic_default'] = 'Kandungan kursus semasa';
$string['chat:quiz_topic_custom'] = 'Topik tersuai…';
$string['chat:quiz_custom_placeholder'] = 'Masukkan topik atau soalan...';
$string['chat:quiz_start'] = 'Mula Kuiz';
$string['chat:quiz_cancel'] = 'Batal';
$string['chat:quiz_loading'] = 'Menjana kuiz…';
$string['chat:quiz_error'] = 'Tidak dapat menjana kuiz. Sila cuba lagi.';
$string['chat:quiz_correct'] = 'Betul!';
$string['chat:quiz_wrong'] = 'Salah.';
$string['chat:quiz_next'] = 'Soalan seterusnya';
$string['chat:quiz_finish'] = 'Lihat keputusan';
$string['chat:quiz_score'] = 'Kuiz selesai! Anda mendapat {$a->score} daripada {$a->total}.';
$string['chat:quiz_summary'] = 'Saya baru sahaja menamatkan kuiz latihan {$a->total} soalan tentang "{$a->topic}" dan mendapat {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Objektif Pembelajaran';
$string['chat:quiz_topic_modules'] = 'Topik Kursus';
$string['chat:quiz_subtopic_select'] = 'Pilih item tertentu…';
$string['chat:quiz_topic_sections'] = 'Bahagian Kursus';
$string['chat:quiz_score_great'] = 'Kerja yang cemerlang! Anda benar-benar menguasai bahan ini.';
$string['chat:quiz_score_good'] = 'Usaha yang baik! Terus mengulangkaji untuk mengukuhkan pemahaman anda.';
$string['chat:quiz_score_practice'] = 'Terus berlatih — cuba ulangkaji bahan kursus yang berkaitan, kemudian ambil semula kuiz.';
$string['chat:quiz_review_heading'] = 'Ulasan';
$string['chat:quiz_retake'] = 'Ambil Semula Kuiz';
$string['chat:quiz_exit'] = 'Keluar Kuiz';
$string['chat:quiz_your_answer'] = 'Jawapan anda';
$string['chat:quiz_correct_answer'] = 'Jawapan betul';

$string['chat:starters_label'] = 'Pemula perbualan';
$string['chat:starter_quiz'] = 'Uji Saya Tentang Ini';
$string['chat:starter_explain'] = 'Terangkan Ini';
$string['chat:starter_key_concepts'] = 'Konsep Utama';
$string['chat:starter_study_plan'] = 'Pelan Pembelajaran';
$string['chat:starter_help_me'] = 'Bantuan AI';
$string['chat:starter_ai_project_coach'] = 'Jurulatih Projek AI';
$string['chat:starter_ell_practice'] = 'Latihan Perbualan';
$string['chat:starter_ell_pronunciation'] = 'Sebutan ELL';
$string['chat:starter_ai_coach'] = 'Jurulatih AI';
$string['chat:starter_speak'] = 'Sebut pemula';

$string['chat:reset'] = 'Mulakan semula';

$string['chat:topic_picker_title'] = 'Apa yang ingin anda fokuskan?';
$string['chat:topic_picker_title_help'] = 'Apa yang anda perlukan bantuan?';
$string['chat:topic_picker_title_explain'] = 'Apa yang anda mahu saya terangkan?';
$string['chat:topic_picker_title_study'] = 'Bidang mana yang ingin anda fokuskan?';
$string['chat:topic_start'] = 'Teruskan';

$string['chat:fullscreen'] = 'Skrin penuh';
$string['chat:exitfullscreen'] = 'Keluar skrin penuh';

$string['chat:language'] = 'Tukar bahasa';
$string['chat:settings_panel'] = 'Tetapan';
$string['chat:settings_language'] = 'Bahasa';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Suara';
$string['chat:settings_voice_admin'] = 'Tetapan suara diurus dalam panel pentadbir tapak.';

$string['chat:voice_mode'] = 'Mod suara';
$string['chat:voice_end'] = 'Tamatkan sesi suara';
$string['chat:voice_connecting'] = 'Menyambung...';
$string['chat:voice_listening'] = 'Mendengar...';
$string['chat:voice_speaking'] = 'SOLA sedang bercakap...';
$string['chat:voice_idle'] = 'Sedia';
$string['chat:voice_error'] = 'Sambungan suara gagal. Sila semak tetapan anda.';
$string['chat:quiz_locked'] = 'SOLA dijeda semasa kuiz untuk menyokong integriti akademik. Semoga berjaya!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Nota';

// History panel.
$string['chat:history_title'] = 'Nota dan Sejarah Perbualan';
$string['task:send_inactivity_reminders'] = 'Hantar e-mel peringatan ketidakaktifan mingguan';
$string['messageprovider:study_notes'] = 'Nota sesi pengajian';
$string['task:send_inactivity_reminders'] = 'Hantar e-mel peringatan ketidakaktifan mingguan';
$string['task:run_meta_ai_query'] = 'Jalankan pertanyaan analitik Radar Pembelajaran berjadual';
$string['messageprovider:study_notes'] = 'Nota sesi pengajian';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Penghantaran Frontend';
$string['settings:cdn_heading_desc'] = 'Sajikan aset frontend SOLA (JS/CSS) daripada CDN luaran dan bukannya sistem fail Moodle. Ini membolehkan kemas kini frontend tanpa naik taraf plugin. Biarkan URL CDN kosong untuk menggunakan fail plugin tempatan.';
$string['settings:cdn_url'] = 'URL Asas CDN';
$string['settings:cdn_url_desc'] = 'URL asas tempat sola.min.js dan sola.min.css dihoskan. Contoh: https://your-org.github.io/sola-cdn. Biarkan kosong untuk menggunakan fail plugin tempatan.';
$string['settings:cdn_version'] = 'Versi Aset CDN';
$string['settings:cdn_version_desc'] = 'Rentetan versi yang ditambahkan pada URL CDN untuk cache busting. Kemas kini selepas setiap penerapan CDN (cth. 3.2.4 atau commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Penggunaan keseluruhan';
$string['analytics:tab_bycourse'] = 'Mengikut kursus';
$string['analytics:tab_comparison'] = 'AI vs bukan pengguna';
$string['analytics:tab_byunit'] = 'Mengikut unit';
$string['analytics:tab_usagetypes'] = 'Jenis penggunaan';
$string['analytics:tab_themes'] = 'Tema';
$string['analytics:tab_feedback'] = 'Maklum balas AI';
$string['analytics:total_students'] = 'Jumlah pelajar';
$string['analytics:active_users'] = 'Pengguna AI aktif';
$string['analytics:msgs_per_student'] = 'Mesej per pelajar';
$string['analytics:avg_session'] = 'Purata tempoh sesi';
$string['analytics:return_rate'] = 'Kadar kembali';
$string['analytics:total_sessions'] = 'Jumlah sesi';
$string['analytics:thumbs_up'] = 'Suka';
$string['analytics:thumbs_down'] = 'Tidak suka';
$string['analytics:hallucination_flags'] = 'Tanda ketidaktepatan';
$string['analytics:msgs_to_resolution'] = 'Mesej sehingga penyelesaian';
$string['analytics:helpful'] = 'Membantu';
$string['analytics:not_helpful'] = 'Tidak membantu';
$string['analytics:flag_hallucination'] = 'Respons ini mengandungi maklumat yang tidak tepat';
$string['analytics:submit_rating'] = 'Hantar';
$string['analytics:thanks_feedback'] = 'Terima kasih atas maklum balas anda';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Terangkan halaman ini';
$string['chat:starter_ask_anything'] = 'Tanya apa sahaja';
$string['chat:starter_review_practice'] = 'Ulangkaji dan berlatih';
$string['chat:history_saved_subtitle'] = 'Respons yang disimpan kekal pada peranti ini untuk kursus ini.';
$string['chat:history_saved_empty'] = 'Simpan respons AI untuk melihatnya di sini.';
$string['chat:history_views_label'] = 'Paparan sejarah';
$string['chat:history_view_saved'] = 'Disimpan';
$string['chat:history_view_recent'] = 'Sejarah';
$string['chat:debug_refresh'] = 'Muat semula';
$string['chat:debug_copy_all'] = 'Salin semua';
$string['chat:debug_close'] = 'Tutup';
$string['chat:language_switch'] = 'Tukar bahasa';
$string['chat:language_dismiss'] = 'Buang cadangan bahasa';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Pilih penyedia LLM';
$string['chat:llm_model_label'] = 'Model';
$string['chat:llm_model_select'] = 'Pilih model LLM';
$string['chat:footer_usertesting'] = 'Ujian kebolehgunaan';
$string['chat:footer_feedback'] = 'Maklum balas';
$string['chat:voice_panel_title']       = 'Talk with {$a}';

// Additional translated strings.
$string['chat:debug_context'] = 'Nyahpepijat konteks';
$string['chat:debug_context_browser'] = 'Tangkapan pelayar';
$string['chat:debug_context_copy'] = 'Salin';
$string['chat:debug_context_prompt'] = 'Respons pelayan';
$string['chat:debug_context_request'] = 'Permintaan SSE terakhir';
$string['chat:debug_context_toggle'] = 'Togol pemeriksa';
$string['chat:history_empty'] = 'Tiada perbualan.';
$string['chat:history_refresh'] = 'Muat semula';
$string['chat:history_subtitle'] = 'Mesej terbaru anda.';
$string['chat:starter_explain_prompt'] = 'Jelaskan konsep paling penting?';
$string['chat:starter_help_lesson'] = 'Jelaskan ini';
$string['chat:starter_help_lesson_prompt'] = 'Bantu saya faham pelajaran. Ringkaskan konsep utama.';
$string['chat:starter_prompt_coach'] = 'Jurulatih AI';
$string['chat:starter_quick_study'] = 'Belajar cepat';
$string['chat:starter_study_plan_prompt'] = 'Saya mahu merancang belajar. Tanya: (1) matlamat, (2) masa. Kemas kini rancangan.';
$string['chat:voice_copy'] = 'Perbualan suara dengan pembantu.';
$string['chat:voice_ready'] = 'Sedia';
$string['chat:voice_start'] = 'Mulakan';
$string['chat:voice_title'] = 'Bercakap dengan SOLA';
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
$string['mobile_chip_concepts'] = 'Konsep utama';
$string['mobile_chip_quiz'] = 'Kuiz';
$string['mobile_chip_studyplan'] = 'Rancangan belajar';
$string['mobile_clear'] = 'Padam sejarah';
$string['mobile_disabled'] = 'SOLA tidak tersedia untuk kursus ini.';
$string['mobile_placeholder'] = 'Tanya soalan...';
$string['mobile_welcome'] = 'Hai, {$a}!';
$string['mobile_welcome_sub'] = 'Saya SOLA, pembantu pembelajaran anda. Bagaimana boleh saya bantu?';
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
$string['rubric:done'] = 'Selesai';
$string['rubric:encourage_high'] = 'Cemerlang! Teruskan!';
$string['rubric:encourage_low'] = 'Permulaan bagus! Latihan kerap akan membantu.';
$string['rubric:encourage_mid'] = 'Usaha bagus! Terus berlatih.';
$string['rubric:overall'] = 'Keseluruhan';
$string['rubric:practice_again'] = 'Latih lagi';
$string['rubric:score_title_conversation'] = 'Skor latihan perbualan';
$string['rubric:score_title_pronunciation'] = 'Skor latihan sebutan';
$string['rubric:scoring'] = 'Menilai...';
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
$string['demo:title'] = 'Persekitaran ujian';
$string['demo:heading'] = 'Persekitaran ujian';
$string['demo:intro'] = 'Halaman ini mencipta kursus ujian yang <strong>tersembunyi daripada pelajar</strong> (visible=0) dan mengisinya dengan pelajar palsu, perbualan AI, penilaian dan maklum balas. Berguna untuk pratonton Analytics Dashboard atau mengesahkan perubahan plugin tanpa menjejaskan mana-mana pelajar yang benar-benar berdaftar.';
$string['demo:step1'] = 'Langkah 1: kursus ujian';
$string['demo:step2'] = 'Langkah 2: tambah pelajar palsu dan sembang AI';
$string['demo:course_exists'] = 'Kursus ujian wujud: <strong>{$a->fullname}</strong> (nama pendek <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'tersembunyi';
$string['demo:badge_visible'] = 'kelihatan kepada pelajar';
$string['demo:no_course'] = 'Tiada kursus ujian ditemui. Klik di bawah untuk mencipta satu.';
$string['demo:create_btn'] = 'Cipta kursus ujian tersembunyi';
$string['demo:open_course'] = 'Buka kursus &rarr;';
$string['demo:seed_intro'] = 'Mencipta demo_student_001, demo_student_002, ..., mendaftarkan mereka dalam kursus ujian, dan memasukkan perbualan, mesej, penilaian dan maklum balas sintetik. Jalankan semula untuk menambah lebih banyak data, atau tanda "kosongkan dahulu" untuk mula semula.';
$string['demo:users_label'] = 'Pengguna';
$string['demo:weeks_label'] = 'Minggu';
$string['demo:clear_label'] = 'Kosongkan pengguna demo_* sedia ada dahulu';
$string['demo:seed_btn'] = 'Tambah pelajar dan sembang';
$string['demo:view_analytics'] = 'Lihat Analitik untuk kursus ini &rarr;';
$string['demo:footer'] = 'Data yang dicipta di sini berada dalam jadual pengguna / pendaftaran Moodle standard dan jadual perbualan plugin sendiri. Semua pengguna palsu mempunyai nama pengguna yang bermula dengan <code>demo_student_</code> supaya mudah ditapis atau dibuang. Untuk membuangnya, jalankan semula langkah seed dengan "Kosongkan pengguna demo_* sedia ada dahulu" ditandakan.';
$string['demo:course_fullname'] = 'Kursus Ujian SOLA (tersembunyi)';
$string['demo:notify_created'] = 'Kursus ujian sedia: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Gagal mencipta kursus: {$a}';
$string['demo:notify_seeded'] = 'Ditambah: {$a->users} pengguna, {$a->conversations} perbualan, {$a->messages} mesej, {$a->ratings} penilaian, {$a->feedback} entri maklum balas.';
$string['demo:notify_seed_fail'] = 'Gagal menambah data: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Kos Token & Analitik &rarr;';
$string['toc:testing'] = 'Persekitaran ujian &rarr;';
$string['toc:back_to_course'] = '&larr; Kembali ke {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Binari pdftotext tidak dijumpai; pengekstrakan PDF dinyahdayakan.';
$string['rag:pdftotext_available'] = 'pdftotext dikesan di {$a}.';
$string['rag:docx_unavailable'] = 'Sambungan PHP ZipArchive tidak tersedia; pengekstrakan DOCX dinyahdayakan.';
$string['rag:h5p_unavailable'] = 'Kandungan H5P tidak dapat dibaca; dilangkau.';
$string['rag:scorm_too_large'] = 'Pakej SCORM melebihi had saiz yang dikonfigurasi ({$a} MB); dilangkau.';
$string['rag:scorm_unzip_failed'] = 'Pakej SCORM tidak dapat dinyahzip; dilangkau.';
$string['rag:transcript_fetch_failed'] = 'Tidak dapat mengambil transkrip dari {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL transkrip disekat oleh cabaran Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Media terbenam dikesan: {$a}';
$string['rag:embed_transcript_attached'] = 'Transkrip dilampirkan untuk {$a}';

// v3.9.10–v3.9.14 new strings (English verbatim; translate later).
$string['usersettings:download'] = 'Muat turun data {$a} saya';
$string['usersettings:download_help'] = 'Muat turun salinan JSON lengkap setiap rekod {$a} yang terikat dengan akaun anda: perbualan, mesej, penilaian, pelan pembelajaran, peringatan, skor latihan, jawapan tinjauan, profil, dan entri audit.';
$string['usersettings:privacy_notice_link'] = 'Baca notis privasi {$a}';
$string['privacy:title'] = 'Notis Privasi {$a}';
$string['admin:user_data:title'] = '{$a} — Eksport dan padam data pelajar';
$string['admin:user_data:intro'] = 'Laluan operasi untuk permintaan GDPR Artikel 15 (akses) atau Artikel 17 (pemadaman). Cari pelajar mengikut id pengguna Moodle, semak baris yang disimpan oleh pemalam ini, kemudian eksport atau padam.';
$string['admin:user_data:search_label'] = 'Id pengguna Moodle';
$string['admin:user_data:lookup'] = 'Cari';
$string['admin:user_data:not_found'] = 'Tiada pengguna ditemui dengan id tersebut.';
$string['admin:user_data:download'] = 'Muat turun semua data pelajar sebagai JSON';
$string['admin:user_data:purge'] = 'Padam semua data pelajar untuk pengguna ini';
$string['admin:user_data:confirm_purge'] = 'Padam secara kekal setiap rekod untuk {$a}? Tindakan ini akan merebak ke perbualan, mesej, penilaian, pelan pembelajaran, peringatan, profil, skor latihan, tinjauan, entri audit, dan maklum balas. Tindakan ini tidak boleh dibatalkan.';
$string['admin:user_data:purged'] = 'Semua data untuk pengguna yang dipilih telah dipadamkan.';
$string['chat:consent_heading'] = 'Sebelum anda berbual dengan {$a->product}';
$string['chat:consent_body'] = '{$a->product} ialah pembantu pembelajaran berkuasa AI. Mesej anda dan jawapan {$a->product} disimpan dalam pangkalan data Moodle {$a->institution} dan sepuluh giliran terkini dihantar kepada penyedia model AI yang diluluskan untuk menjawab soalan anda. Nama pertama anda dikongsi untuk pemperibadian; tiada maklumat pengenalan lain dihantar kepada penyedia AI. Anda boleh memuat turun, memadam, atau berhenti menggunakan {$a->product} pada bila-bila masa.';
$string['chat:consent_accept'] = 'Saya faham, mulakan {$a}';
$string['chat:consent_privacy_link'] = 'Baca notis privasi penuh';
$string['task:audit_cleanup'] = 'Pembersihan jadual audit AI Course Assistant';
$string['task:conversation_retention'] = 'Penyapu pengekalan perbualan AI Course Assistant';
$string['settings:audit_retention_days'] = 'Pengekalan log audit (hari)';
$string['settings:audit_retention_days_desc'] = 'Tugas berjadual harian akan memadam baris audit yang lebih lama daripada nilai ini. 0 melumpuhkannya. Lalai 365.';
$string['settings:conversation_retention_days'] = 'Pengekalan perbualan (hari)';
$string['settings:conversation_retention_days_desc'] = 'Tugas berjadual harian akan memadam baris perbualan yang cap masa ubah suai terakhirnya lebih lama daripada nilai ini. 0 melumpuhkannya. Lalai 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Titik akhir SSRF dipercayai';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Satu URL setiap baris. Hos yang disenaraikan memintas pemeriksaan loopback / IP-peribadi / hanya-https dalam pengesah SSRF SOLA. Gunakan ini hanya untuk LLM dihos-sendiri pada rangkaian yang anda kawal — contohnya <code>http://localhost:11434</code> untuk Ollama tempatan, <code>http://10.0.0.5:8000</code> untuk pod vLLM pada VPC yang sama. Perbandingan sepadan dengan scheme + host + port; sebarang laluan diabaikan. Lalai kosong (sekat semua dalaman). Baris yang bermula dengan <code>#</code> ialah komen.';
$string['task:learner_weekly_digest']    = 'Pembantu Kursus AI - Ringkasan mingguan pelajar';
$string['learner_digest:subject']        = 'Minggu anda dengan {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Mahu e-mel mingguan ringkas tentang apa yang perlu difokuskan seterusnya?';
$string['next_best_action:get_started']           = 'Mulakan dengan {$a->title}. Buka saya dan tanya "tolong saya dengan {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Mulakan dengan {$a->title}. Modul "{$a->module}" merangkuminya.';
$string['next_best_action:review']                = 'Semak asas {$a->title} — buka saya dan tanya "jelaskan {$a->title} seperti saya baru".';
$string['next_best_action:review_with_module']    = 'Semak asas {$a->title} dalam "{$a->module}", kemudian buka saya dengan soalan.';
$string['next_best_action:practice']              = 'Bangun di atas apa yang anda ada pada {$a->title}. Buka saya dan tanya "beri saya contoh diselesaikan untuk {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Berlatih {$a->title} bersama "{$a->module}". Buka saya untuk contoh diselesaikan.';
$string['next_best_action:quiz']                  = 'Kukuhkan {$a->title} dengan kuiz pantas. Buka saya dan pilih "Kuiz saya — adaptif".';
$string['next_best_action:quiz_with_module']      = 'Kukuhkan {$a->title} dengan kuiz pantas. Modul "{$a->module}" adalah tempatnya.';
$string['next_best_action:empty_state']           = 'Anda nampak hebat pada setiap objektif sekarang — tiada apa-apa untuk mengingatkan. Teruskan.';
$string['next_best_action:header']                = 'Berikut adalah {$a} perkara untuk difokuskan seterusnya:';
$string['learner_digest:unsubscribe_done_title']  = 'Telah berhenti melanggan';
$string['learner_digest:unsubscribe_done_body']   = 'Selesai — anda tidak akan menerima lagi e-mel mingguan untuk kursus ini daripada {$a->product}. Anda boleh melanggan semula bila-bila masa daripada tetingkap sembang dalam kursus anda.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Pautan berhenti melanggan tidak lagi sah';
$string['learner_digest:unsubscribe_invalid_body']  = 'Pautan berhenti melanggan ini telah tamat tempoh atau cacat. Anda boleh menguruskan keutamaan e-mel daripada tetapan kursus anda.';
$string['active_learners:line']                   = '{$a} lain sedang mempelajari kursus ini sekarang.';
$string['active_learners:line_global']             = '{$a} lain sedang belajar sekarang.';
$string['settings:active_learners_scope']          = 'Skop penunjuk pelajar aktif';
$string['settings:active_learners_scope_desc']     = 'Sama ada penunjuk "lain sedang belajar sekarang" di atas pemula sembang mengira pelajar hanya dalam kursus yang sama atau pelajar di seluruh tapak. Lalai <strong>global</strong>.';
$string['settings:active_learners_scope_global']   = 'Global (mana-mana kursus)';
$string['settings:active_learners_scope_course']   = 'Setiap kursus sahaja';
$string['learner_digest:optin_yes']      = 'Ya, hantar e-mel mingguan';
$string['learner_digest:optin_no']       = 'Tidak, terima kasih';
$string['learner_digest:optin_thanks']   = 'Baik. Akan dapat ringkasan mingguan setiap Isnin.';
$string['learner_digest:optin_declined'] = 'Baik. Tiada e-mel - buka saya bila-bila masa anda mahu semakan.';
$string['settings:xai_proxy_url'] = 'URL proksi xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'URL wss awam perkhidmatan proksi SOLA xAI Realtime (contohnya wss://voice.example.com/xai-rt/rt). Apabila ditetapkan bersama rahsia JWT, suara xAI akan dialihkan melalui proksi dan kunci API xAI utama tidak akan sampai ke pelayar. Biarkan kosong untuk kembali ke sambungan terus (tidak disyorkan untuk pengeluaran).';
$string['settings:xai_proxy_jwt_secret'] = 'Rahsia JWT proksi xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Rahsia kongsi HS256 yang digunakan untuk menandatangani token sesi jangka pendek bagi proksi xAI Realtime. Mesti sepadan dengan rahsia MOODLE_JWT_SECRET pada Cloudflare Worker. Putar secara berkala.';
$string['admin:vendor_dpa:title'] = '{$a} — Status DPA pembekal';
$string['admin:vendor_dpa:intro'] = 'Status pilihan keluar latihan, DPA, dan pengekalan untuk setiap pemandu penyedia AI. Gunakan ini untuk memutuskan pemandu mana yang akan diaktifkan di laman anda. Penghalaan Tier 2 dan ke atas memerlukan DPA yang ditandatangani dan pilihan keluar latihan secara kontrak.';
$string['admin:vendor_dpa:maintenance_note'] = 'Jadual ini diselenggara dalam classes/vendor_registry.php. Kemas kini apabila perubahan ToS pembekal berlaku.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'E-mel Pegawai Perlindungan Data';
$string['settings:dpo_email_desc'] = 'E-mel hubungan yang ditunjukkan pada notis privasi yang menghadap pelajar di bawah "Hubungi". Biarkan kosong untuk menyembunyikan baris itu. Pemasangan berjenama semula sepatutnya menghala ke DPO mereka sendiri.';
$string['settings:privacy_external_url'] = 'URL halaman privasi institusi';
$string['settings:privacy_external_url_desc'] = 'Pautan ke halaman privasi peringkat institusi, ditunjukkan pada notis privasi yang menghadap pelajar di bawah "Hubungi". Biarkan kosong untuk menyembunyikan baris itu.';
$string['settings:privacy_notice_override'] = 'Penggantian notis privasi (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Jika ditetapkan, HTML ini menggantikan notis privasi berjenama lalai yang dipaparkan di /local/ai_course_assistant/privacy.php. Gunakan ini untuk memasukkan teks yang disemak Undang-undang bagi institusi anda tanpa menyunting kod. Biarkan kosong untuk menggunakan notis lalai, yang menerbitkan teksnya daripada tujuh kunci konfigurasi penjenamaan.';
$string['objectives:title'] = 'Objektif pembelajaran & penguasaan';
$string['objectives:toggles_heading'] = 'Penjejakan penguasaan';
$string['objectives:toggle_master'] = 'Aktifkan penjejakan penguasaan untuk kursus ini';
$string['objectives:toggle_chip'] = 'Tunjukkan cip Penguasaan Pembelajaran kepada pelajar';
$string['objectives:toggle_chip_help'] = 'Pilihan. Apabila dimatikan, penguasaan masih membimbing pembantu secara senyap tetapi pelajar tidak melihat sebarang penunjuk.';
$string['objectives:toggled'] = 'Tetapan dikemas kini.';
$string['objectives:detected_heading'] = '{$a->count} objektif pembelajaran dikesan daripada {$a->source}.';
$string['objectives:source_competency'] = 'Kompetensi Moodle';
$string['objectives:source_summary'] = 'ringkasan kursus';
$string['objectives:source_section'] = 'kandungan bahagian atau halaman pertama';
$string['objectives:source_page'] = 'halaman kursus';
$string['objectives:source_llm'] = 'pengekstrakan AI';
$string['objectives:source_manual'] = 'kemasukan manual';
$string['objectives:source_none'] = 'tiada sumber automatik';
$string['objectives:import_detected'] = 'Import objektif yang dikesan ini';
$string['objectives:import_llm'] = 'Ekstrak objektif menggunakan AI';
$string['objectives:llm_empty'] = 'Pengekstrakan AI tidak mengembalikan sebarang objektif. Cuba lagi nanti atau masukkan secara manual.';
$string['objectives:imported'] = '{$a} objektif diimport.';
$string['objectives:none_detected'] = 'Tiada objektif pembelajaran dikesan secara automatik. Masukkan secara manual di bawah, atau gunakan pengekstrakan AI.';
$string['objectives:list_heading'] = 'Objektif semasa';
$string['objectives:col_code'] = 'Kod';
$string['objectives:col_title'] = 'Tajuk';
$string['objectives:col_source'] = 'Sumber';
$string['objectives:col_actions'] = 'Tindakan';
$string['objectives:add_heading'] = 'Tambah objektif';
$string['objectives:add_submit'] = 'Tambah objektif';
$string['objectives:saved'] = 'Objektif disimpan.';
$string['objectives:deleted'] = 'Objektif dipadamkan.';
$string['objectives:delete_confirm'] = 'Padam objektif ini dan semua sejarah cubaan untuknya?';
$string['objectives:delete_all'] = 'Padam semua objektif untuk kursus ini';
$string['objectives:delete_all_confirm'] = 'Padam setiap objektif dan semua sejarah cubaan untuk kursus ini? Tidak boleh dibatalkan.';
$string['objectives:deleted_all'] = 'Semua objektif untuk kursus ini telah dipadamkan.';
$string['mastery:chip_aria'] = 'Status penguasaan pembelajaran';
$string['mastery:popover_aria'] = 'Butiran penguasaan pembelajaran';
$string['mastery:chip_label'] = '{$a->mastered} daripada {$a->total} dikuasai';
$string['mastery:status_mastered'] = 'dikuasai';
$string['mastery:status_learning'] = 'sedang berlangsung';
$string['mastery:status_not_started'] = 'belum dimulakan';
$string['mastery:popover_empty'] = 'Tiada objektif pembelajaran dikonfigurasi untuk kursus ini.';
$string['settings:mastery_heading'] = 'Penjejakan penguasaan';
$string['settings:mastery_heading_desc'] = 'Ciri pilih masuk per kursus yang menandakan jawapan kuiz dan giliran perbualan pembantu terhadap objektif pembelajaran kursus, kemudian menyalurkan gambaran penguasaan ringkas semula ke dalam gesaan sistem untuk membimbing soalan. Halus secara lalai: pelajar tidak melihat apa-apa kecuali togol cip per kursus dihidupkan.';
$string['settings:mastery_threshold'] = 'Ambang dikuasai';
$string['settings:mastery_threshold_desc'] = 'Ketepatan bergulir pada atau di atas mana objektif dianggap dikuasai. 0.0 hingga 1.0. Lalai 0.85.';
$string['settings:mastery_window'] = 'Tetingkap cubaan';
$string['settings:mastery_window_desc'] = 'Bilangan cubaan terkini bagi setiap objektif untuk dipertimbangkan dalam ketepatan bergulir. Lalai 8.';
$string['settings:mastery_decay_enabled']        = 'Dayakan pereputan penguasaan';
$string['settings:mastery_decay_enabled_desc']   = 'Apabila aktif, skor penguasaan mereput dari masa ke semasa berbanding setem masa percubaan terkini. Objektif yang sebelumnya dikuasai kembali ke "pembelajaran" selepas masa yang mencukupi. Tidak jatuh di bawah "pembelajaran". <strong>Lalai mati di v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Separuh hayat pereputan penguasaan (hari)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Separuh hayat dalam hari. Skor didarab dengan 0.5 ^ (hari sejak percubaan terakhir / separuh hayat). Lalai 30. Digunakan hanya apabila pereputan diaktifkan.';
$string['settings:mastery_classifier_model'] = 'Model pengelas';
$string['settings:mastery_classifier_model_desc'] = 'Model yang digunakan untuk mengelaskan giliran pembantu terhadap objektif. Biarkan kosong untuk mewarisi model penyedia AI lalai; jika tidak, nyatakan model murah seperti gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Berat pengelas';
$string['settings:mastery_classifier_weight_desc'] = 'Berapa banyak cubaan perbualan dikira berbanding cubaan kuiz (1.0). Lalai 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Ambang keyakinan pengelas';
$string['settings:mastery_classifier_threshold_desc'] = 'Keyakinan pengelas minimum yang diperlukan untuk merekodkan cubaan perbualan. 0.0 hingga 1.0. Lalai 0.7.';
$string['chat:mode_progress'] = 'Kemajuan';
$string['objectives:toggle_dashboard'] = 'Tunjukkan tab papan pemuka Kemajuan kepada pelajar';
$string['objectives:toggle_dashboard_help'] = 'Pilihan. Menambah tab Kemajuan di sebelah Sembang / Suara / Sejarah dalam widget. Tab itu menunjukkan kepada pelajar objektif yang telah dikuasai, yang sedang berlangsung, dan yang belum dimulakan.';
$string['mastery:dashboard_title'] = 'Kemajuan pembelajaran anda';
$string['mastery:dashboard_subtitle'] = 'Penguasaan diukur daripada jawapan kuiz dan latihan sembang anda. Teruskan — kedalaman mengatasi liputan.';
$string['mastery:dashboard_refresh'] = 'Muat semula';
$string['mastery:section_mastered'] = 'Dikuasai';
$string['mastery:section_learning'] = 'Sedang berlangsung';
$string['mastery:section_not_started'] = 'Belum dimulakan';
$string['mastery:summary_label'] = '{$a->mastered} daripada {$a->total} objektif dikuasai';
$string['mastery:ask_about'] = 'Tanya tentang ini';
$string['mastery:celebrate'] = 'Anda telah menguasai setiap objektif untuk kursus ini. Kerja yang cemerlang.';
$string['mastery:ask_template'] = 'Bantu saya berlatih dan mendalami pemahaman saya tentang objektif ini: {$a}.';
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

// v4.6.0: vendor DPA gating + override editors.
$string['settings:vendor_data_heading']      = 'Vendor & cost data';
$string['settings:vendor_data_heading_desc'] = 'Controls for the optional Vendor DPA admin page and the override editors that let admins keep the bundled vendor table and LLM rate card current without a code edit. Both override editors are JSON; an empty value falls back to the hardcoded defaults shipped with the plugin.';
$string['settings:vendor_dpa_admin_page_enabled']      = 'Show Vendor DPA admin page';
$string['settings:vendor_dpa_admin_page_enabled_desc'] = 'When on, "Vendor DPA Status" appears under Site administration → Plugins → Local plugins → AI Course Assistant. The page renders the vendor table merged with the override below. Default off — most admins do not need this surface.';
$string['settings:vendor_dpa_overrides']      = 'Vendor DPA overrides (JSON)';
$string['settings:vendor_dpa_overrides_desc'] = 'JSON object keyed by vendor id. Each value is an object whose fields override the hardcoded vendor row. Fields you do not specify fall through to the default. A new vendor key in the override is added to the table; edits apply per field. Malformed JSON is ignored at runtime — fix the parse error here when the saved value does not appear in the Vendor DPA page.';
$string['settings:rate_card_overrides']      = 'LLM rate card overrides (JSON)';
$string['settings:rate_card_overrides_desc'] = 'JSON object keyed by model name prefix. Each value is {"input": float, "output": float} in USD per 1,000,000 tokens. Replaces the bundled rate card entry for that prefix. A community-maintained source of vendor pricing JSON lives at github.com/BerriAI/litellm — multiply the input_cost_per_token / output_cost_per_token values by 1,000,000 to match this format. Auto-fetch from a configurable upstream URL is on the v4.7 roadmap.';

// v4.7.0: rate-card auto-refresh.
$string['settings:rate_card_auto_refresh']      = 'Auto-refresh from upstream';
$string['settings:rate_card_auto_refresh_desc'] = 'When on, a weekly scheduled task fetches the upstream pricing JSON, transforms it to SOLA\'s rate-card schema, and writes it to the override field above. Default on. Failures keep the previous override in place.';
$string['settings:rate_card_upstream_url']      = 'Upstream pricing URL';
$string['settings:rate_card_upstream_url_desc'] = 'URL of a JSON manifest in LiteLLM\'s schema. Default points at the community-maintained file in the LiteLLM GitHub repo. URL is checked against the SSRF allowlist before fetch.';
$string['settings:rate_card_refresh_now']        = 'Refresh now';
$string['settings:rate_card_refresh_now_label']  = 'Refresh rate card from upstream';
$string['settings:rate_card_refresh_success']    = 'Rate card refreshed: {$a} entries written.';
$string['settings:rate_card_refresh_error']      = 'Rate card refresh failed: {$a}';
$string['settings:rate_card_last_refresh_at']    = 'Last refresh: {$a}';
$string['settings:rate_card_last_refresh_success']= 'Last fetch succeeded.';
$string['settings:rate_card_never_refreshed']    = 'Never refreshed.';
$string['task:refresh_rate_card']                = 'Refresh SOLA LLM rate card from upstream';

// v4.8.0: runtime validators + RAG drift + needs-review queue.
$string['settings:validators_runtime_mode']      = 'Runtime validators';
$string['settings:validators_runtime_mode_desc'] = 'Apply the same pipeline that gates releases (PII echo, credential leak, hallucination, second-person) to every assistant response in real time. Off (default), Annotate, or Block.';
$string['settings:validators_runtime_off']       = 'Off (no runtime checks)';
$string['settings:validators_runtime_annotate']  = 'Annotate (append warning line on fail)';
$string['settings:validators_runtime_block']     = 'Block (replace with safe fallback on fail)';
$string['settings:rag_auto_reindex_drifted']      = 'Auto-reindex drifted RAG content';
$string['settings:rag_auto_reindex_drifted_desc'] = 'Daily scheduled task that re-indexes course modules whose source content was edited after the last indexed-at time. Default on.';
$string['task:auto_reindex_rag_drifted']          = 'Re-index drifted RAG content';
$string['instructor_dashboard:review_heading']     = 'Needs review';
$string['instructor_dashboard:review_intro']       = 'Pending items from this course that an instructor or course designer should look at: thumbs-down ratings, off-topic conversations, and integrity flags.';
$string['instructor_dashboard:review_empty']       = 'No items pending review. Course is clean.';
$string['instructor_dashboard:review_col_when']    = 'When';
$string['instructor_dashboard:review_col_source']  = 'Source';
$string['instructor_dashboard:review_col_who']     = 'Who';
$string['instructor_dashboard:review_col_summary'] = 'Summary';
$string['instructor_dashboard:review_resolve']     = 'Mark resolved';
$string['instructor_dashboard:review_resolved']    = 'Marked resolved.';
$string['instructor_dashboard:review_source_rating']    = 'Negative rating';
$string['instructor_dashboard:review_source_offtopic']  = 'Off-topic';
$string['instructor_dashboard:review_source_integrity'] = 'Integrity';

// v4.8.1: talking avatar (placeholder, default off, provider-neutral).
$string['pedagogy:talking_avatar']         = 'Talking avatar on by default';
$string['pedagogy:talking_avatar_desc']    = 'When on, the talking-avatar surface is enabled in every course unless the course has its own override. Requires the Talking Avatar provider URL and API key configured below.';
$string['settings:talking_avatar_heading']      = 'Talking avatar';
$string['settings:talking_avatar_heading_desc'] = 'Vendor-neutral configuration for an external talking-avatar provider. Leave both fields empty until the institution has signed off on a provider.';
$string['settings:talking_avatar_provider_url']      = 'Provider API base URL';
$string['settings:talking_avatar_provider_url_desc'] = 'Base URL of the talking-avatar provider API. SSRF-checked before every outbound call.';
$string['settings:talking_avatar_provider_api_key']      = 'Provider API key';
$string['settings:talking_avatar_provider_api_key_desc'] = 'API key for the chosen provider.';
