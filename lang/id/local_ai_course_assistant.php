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
 * Language strings for local_ai_course_assistant — Indonesian (Bahasa Indonesia).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Asisten Kursus AI';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Menyimpan percakapan chat tutor AI per pengguna dan kursus.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'ID pengguna pemilik percakapan.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'ID kursus yang memiliki percakapan ini.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Judul percakapan.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Waktu percakapan dibuat.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Waktu percakapan terakhir diubah.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Menyimpan pesan-pesan individual dalam percakapan chat tutor AI.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'ID pengguna yang mengirim pesan.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'ID kursus yang memiliki pesan ini.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Peran pengirim pesan (pengguna atau asisten).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Isi pesan.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Jumlah token yang digunakan untuk pesan ini.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Waktu pesan dibuat.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Menggunakan chat tutor AI';
$string['ai_course_assistant:viewanalytics'] = 'Melihat analitik chat tutor AI';
$string['ai_course_assistant:manage'] = 'Mengelola pengaturan chat tutor AI (peran Administrator)';

// Settings.
$string['settings:enabled'] = 'Aktifkan Asisten Kursus AI';
$string['settings:enabled_desc'] = 'Aktifkan atau nonaktifkan widget Asisten Kursus AI di halaman kursus.';
$string['settings:default_course_mode'] = 'Default untuk kursus baru';
$string['settings:default_course_mode_desc'] = 'Mengontrol apakah SOLA muncul pada kursus ketika tidak ada pilihan per-kursus yang dibuat. Instalasi baru secara default diatur ke "Dinonaktifkan secara default" sehingga admin dapat mengaktifkan per kursus dari halaman Analytics atau halaman Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Dinonaktifkan secara default (aktifkan per kursus)';
$string['settings:default_course_mode_all'] = 'Diaktifkan di semua kursus';
$string['settings:provider'] = 'Penyedia AI';
$string['settings:provider_desc'] = 'Pilih penyedia AI yang akan digunakan untuk penyelesaian chat. Pilih "Moodle AI (core_ai subsystem)" untuk merutekan permintaan melalui konfigurasi AI bawaan Moodle di Site admin > AI; bidang kunci API, model, dan URL dasar di bawah ini diabaikan dalam mode tersebut. Streaming, penggunaan tool, dan prompt caching tidak tersedia melalui core_ai — respons dikirim sebagai satu bagian. Gunakan penyedia langsung untuk pengalaman siswa terbaik.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Lokal)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Kustom (kompatibel dengan OpenAI)';
$string['settings:apikey'] = 'Kunci API';
$string['settings:apikey_desc'] = 'Kunci API untuk penyedia yang dipilih. Tidak diperlukan untuk Ollama.';
$string['settings:model'] = 'Nama Model';
$string['settings:model_desc'] = 'Model yang akan digunakan. Nilai default bergantung pada penyedia (misalnya claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL Dasar API';
$string['settings:apibaseurl_desc'] = 'URL dasar untuk API. Diisi otomatis sesuai penyedia namun dapat diganti. Kosongkan untuk menggunakan default penyedia.';
$string['settings:systemprompt'] = 'Template Prompt Sistem';
$string['settings:systemprompt_desc'] = 'Prompt sistem yang dikirim ke AI. Gunakan placeholder: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Anda adalah tutor AI yang membantu untuk kursus "{{coursename}}". Peran siswa adalah {{userrole}}.

Topik yang dibahas dalam kursus:
{{coursetopics}}

Bantu siswa memahami materi kursus. Jadilah penyemangat, jelas, dan berwawasan pedagogis.';
$string['settings:temperature'] = 'Temperatur';
$string['settings:temperature_desc'] = 'Mengontrol keacakan. Nilai lebih rendah lebih terfokus, nilai lebih tinggi lebih kreatif. Rentang: 0,0 hingga 2,0.';
$string['settings:maxhistory'] = 'Maksimum Riwayat Percakapan';
$string['settings:maxhistory_desc'] = 'Jumlah maksimum pasangan pesan yang disertakan dalam permintaan API. Pesan yang lebih lama akan dipangkas.';
$string['settings:avatar'] = 'Avatar Chat';
$string['settings:avatar_desc'] = 'Pilih ikon avatar untuk tombol widget chat.';
$string['settings:avatar_saylor'] = 'Logo {$a} (Default)';
$string['settings:position'] = 'Posisi Widget';
$string['settings:position_desc'] = 'Posisi widget chat di halaman.';
$string['settings:position_br'] = 'Kanan bawah';
$string['settings:position_bl'] = 'Kiri bawah';
$string['settings:position_tr'] = 'Kanan atas';
$string['settings:position_tl'] = 'Kiri atas';
$string['chat:settings'] = 'Pengaturan plugin';
$string['analytics:viewdashboard'] = 'Lihat dasbor analitik';

// Course settings.
$string['coursesettings:title'] = 'Pengaturan AI Kursus';
$string['coursesettings:enabled'] = 'Aktifkan penggantian kursus';
$string['coursesettings:enabled_desc'] = 'Jika diaktifkan, pengaturan di bawah ini akan menggantikan konfigurasi penyedia AI global hanya untuk kursus ini. Kosongkan kolom untuk mewarisi nilai global.';
$string['coursesettings:sola_enabled'] = 'SOLA di kursus ini';
$string['coursesettings:sola_enabled_toggle'] = 'Tampilkan widget SOLA di kursus ini';
$string['coursesettings:sola_enabled_desc'] = 'Mengontrol apakah widget chat SOLA muncul di kursus ini. Default seluruh situs diatur di pengaturan plugin di bawah General > Default for new courses.';
$string['coursesettings:using_global'] = 'Menggunakan pengaturan global';
$string['coursesettings:saved'] = 'Pengaturan AI kursus telah disimpan.';
$string['coursesettings:global_settings_link'] = 'Pengaturan AI global';

// Language detection and preference.
$string['lang:switch'] = 'Ya, ganti';
$string['lang:dismiss'] = 'Tidak, terima kasih';
$string['lang:change'] = 'Ganti bahasa';
$string['lang:english'] = 'Bahasa Inggris';

// Chat widget.
$string['chat:title'] = 'Tutor AI';
$string['chat:placeholder'] = 'Ajukan pertanyaan...';
$string['chat:send'] = 'Kirim';
$string['chat:close'] = 'Tutup chat';
$string['chat:open'] = 'Buka chat tutor AI';
$string['chat:clear'] = 'Hapus riwayat';
$string['chat:clear_confirm'] = 'Apakah Anda yakin ingin menghapus riwayat chat untuk kursus ini?';
$string['chat:copy'] = 'Salin percakapan';
$string['chat:copied'] = 'Percakapan disalin ke clipboard';
$string['chat:copy_failed'] = 'Gagal menyalin percakapan';
$string['chat:thinking'] = 'Sedang berpikir...';
$string['chat:error'] = 'Maaf, terjadi kesalahan. Silakan coba lagi.';
$string['chat:error_auth'] = 'Kesalahan autentikasi. Hubungi administrator Anda.';
$string['chat:error_ratelimit'] = 'Terlalu banyak permintaan. Tunggu sebentar dan coba lagi.';
$string['chat:error_unavailable'] = 'Layanan AI sedang tidak tersedia untuk sementara. Coba lagi nanti.';
$string['chat:error_notconfigured'] = 'Tutor AI belum dikonfigurasi. Hubungi administrator Anda.';
$string['chat:mic'] = 'Ucapkan pertanyaan Anda';
$string['chat:mic_error'] = 'Kesalahan mikrofon. Periksa izin browser Anda.';
$string['chat:mic_unsupported'] = 'Input suara tidak didukung di browser ini.';
$string['chat:newline_hint'] = 'Shift+Enter untuk baris baru';
$string['chat:you'] = 'Anda';
$string['chat:assistant'] = 'Tutor AI';
$string['chat:history_loaded'] = 'Percakapan sebelumnya dimuat.';
$string['chat:history_cleared'] = 'Riwayat chat dihapus.';
$string['chat:offtopic_warning'] = 'Sepertinya pertanyaan Anda tidak berkaitan dengan kursus ini. Mohon tetap pada topik agar saya dapat membantu Anda dengan sebaik-baiknya!';
$string['chat:offtopic_ended'] = 'Akses tutor AI Anda telah ditangguhkan sementara selama {$a} menit karena percakapan terlalu sering keluar dari topik. Gunakan waktu ini untuk meninjau materi kursus, dan Anda dapat mencoba lagi nanti.';
$string['chat:offtopic_locked'] = 'Akses tutor AI Anda ditangguhkan sementara. Anda dapat mencoba lagi dalam {$a} menit. Mohon fokus pada pertanyaan terkait kursus saat kembali.';
$string['chat:escalated_to_support'] = 'Saya tidak dapat sepenuhnya menjawab pertanyaan Anda, sehingga saya telah membuat tiket dukungan untuk Anda. Anggota tim dukungan akan menindaklanjuti. Referensi tiket Anda adalah: {$a}';
$string['chat:studyplan_intro'] = 'Saya dapat membantu Anda membuat rencana belajar untuk kursus ini! Cukup beri tahu saya berapa jam per minggu yang dapat Anda dedikasikan untuk belajar, dan saya akan membantu Anda menyusun rencana yang terstruktur.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ & Dukungan';
$string['settings:faq_heading_desc'] = 'Konfigurasikan FAQ terpusat dan integrasi tiket dukungan Zendesk.';
$string['settings:faq_content'] = 'Konten FAQ';
$string['settings:faq_content_desc'] = 'Masukkan entri FAQ (satu per baris dalam format: T: pertanyaan | J: jawaban). Ini akan diberikan kepada AI untuk menjawab pertanyaan dukungan umum.';
$string['settings:zendesk_enabled'] = 'Aktifkan Eskalasi Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Saat AI tidak dapat menyelesaikan pertanyaan dukungan, buat tiket Zendesk secara otomatis dengan ringkasan percakapan.';
$string['settings:zendesk_subdomain'] = 'Subdomain Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Subdomain Zendesk Anda (misalnya "mycompany" untuk mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'Email API Zendesk';
$string['settings:zendesk_email_desc'] = 'Alamat email pengguna Zendesk untuk autentikasi API (dengan akhiran /token).';
$string['settings:zendesk_token'] = 'Token API Zendesk';
$string['settings:zendesk_token_desc'] = 'Token API untuk autentikasi Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Deteksi Topik di Luar Materi';
$string['settings:offtopic_heading_desc'] = 'Konfigurasikan cara chat menangani percakapan di luar topik.';
$string['settings:offtopic_enabled'] = 'Aktifkan Deteksi Topik di Luar Materi';
$string['settings:offtopic_enabled_desc'] = 'Instruksikan AI untuk mendeteksi dan mengalihkan percakapan di luar topik.';
$string['settings:offtopic_max'] = 'Maksimum Pesan di Luar Topik';
$string['settings:offtopic_max_desc'] = 'Jumlah pesan di luar topik berturut-turut sebelum mengambil tindakan.';
$string['settings:offtopic_action'] = 'Tindakan untuk Topik di Luar Materi';
$string['settings:offtopic_action_desc'] = 'Yang dilakukan saat batas pesan di luar topik tercapai.';
$string['settings:offtopic_action_warn'] = 'Peringatkan dan alihkan';
$string['settings:offtopic_action_end'] = 'Kunci akses sementara';
$string['settings:offtopic_lockout_duration'] = 'Durasi Penguncian (menit)';
$string['settings:offtopic_lockout_duration_desc'] = 'Berapa lama (dalam menit) siswa kehilangan akses ke tutor AI setelah melampaui batas pesan di luar topik. Default: 30 menit.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Perencanaan Belajar & Pengingat';
$string['settings:studyplan_heading_desc'] = 'Konfigurasikan fitur perencanaan belajar dan notifikasi pengingat.';
$string['settings:studyplan_enabled'] = 'Aktifkan Perencanaan Belajar';
$string['settings:studyplan_enabled_desc'] = 'Izinkan tutor AI membantu siswa membuat rencana belajar yang dipersonalisasi berdasarkan waktu yang tersedia.';
$string['settings:reminders_email_enabled'] = 'Aktifkan Pengingat Email';
$string['settings:reminders_email_enabled_desc'] = 'Izinkan siswa memilih untuk menerima pengingat belajar melalui email.';
$string['settings:reminders_whatsapp_enabled'] = 'Aktifkan Pengingat WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Izinkan siswa memilih untuk menerima pengingat belajar melalui WhatsApp (memerlukan konfigurasi API WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL API WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'Endpoint API untuk mengirim pesan WhatsApp (misalnya Twilio, MessageBird). Harus menerima POST dengan body JSON yang berisi kolom "to", "from", dan "body".';
$string['settings:whatsapp_api_token'] = 'Token API WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token autentikasi untuk API WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Nomor Pengirim WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'Nomor telepon untuk mengirim pesan WhatsApp (dengan kode negara, misalnya +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Negara yang Diblokir untuk WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Kode negara ISO 3166-1 alpha-2 yang dipisahkan koma di mana pengingat WhatsApp tidak diizinkan karena regulasi setempat (misalnya "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Pengingat Belajar: {$a}';
$string['reminder:email_body'] = 'Halo {$a->firstname},

Ini adalah pengingat belajar Anda untuk "{$a->coursename}".

{$a->message}

Rencana belajar Anda menyarankan {$a->hours_per_week} jam per minggu untuk kursus ini.

Terus semangat!

---
Untuk berhenti menerima pengingat ini, klik di sini: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Pengingat Belajar untuk {$a->coursename}: {$a->message} (Berhenti berlangganan: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Fokus belajar hari ini: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Berhenti Berlangganan Pengingat Belajar';
$string['unsubscribe:success'] = 'Anda telah berhasil berhenti berlangganan pengingat belajar untuk kursus ini.';
$string['unsubscribe:already'] = 'Anda sudah berhenti berlangganan pengingat ini.';
$string['unsubscribe:invalid'] = 'Tautan berhenti berlangganan tidak valid atau sudah kadaluarsa.';
$string['unsubscribe:resubscribe'] = 'Berubah pikiran? Anda dapat mengaktifkan kembali pengingat melalui chat tutor AI.';

// Scheduled task.
$string['task:send_reminders'] = 'Kirim pengingat belajar tutor AI';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Menyimpan rencana belajar siswa.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'ID pengguna pemilik rencana belajar.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Kursus yang memiliki rencana belajar ini.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Jam per minggu yang direncanakan siswa untuk belajar.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Detail rencana belajar dalam format JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Menyimpan preferensi dan langganan pengingat belajar.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'ID pengguna yang berlangganan pengingat.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Saluran pengingat (email atau whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Alamat email atau nomor telepon untuk pengingat.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Kode negara pengguna untuk kepatuhan regulasi.';

// Analytics dashboard.
$string['analytics:title'] = 'Analitik Tutor AI';
$string['analytics:overview'] = 'Ikhtisar';
$string['analytics:total_conversations'] = 'Total percakapan';
$string['analytics:total_messages'] = 'Total pesan';
$string['analytics:active_students'] = 'Siswa aktif';
$string['analytics:avg_messages_per_student'] = 'Rata-rata pesan per siswa';
$string['analytics:offtopic_rate'] = 'Tingkat pesan di luar topik';
$string['analytics:escalation_count'] = 'Dieskalasikan ke dukungan';
$string['analytics:studyplan_adoption'] = 'Siswa dengan rencana belajar';
$string['analytics:usage_trends'] = 'Tren Penggunaan';
$string['analytics:daily_messages'] = 'Volume pesan harian';
$string['analytics:hotspots'] = 'Titik Panas Kursus';
$string['analytics:hotspots_desc'] = 'Bagian kursus yang paling sering dirujuk dalam pertanyaan siswa. Jumlah yang lebih tinggi mungkin menunjukkan area di mana siswa membutuhkan lebih banyak dukungan.';
$string['analytics:section'] = 'Bagian';
$string['analytics:mention_count'] = 'Sebutan';
$string['analytics:common_prompts'] = 'Pola Pertanyaan Umum';
$string['analytics:common_prompts_desc'] = 'Pola pertanyaan yang sering berulang dari siswa. Tinjau pola ini untuk mengidentifikasi kesenjangan sistemik dalam konten kursus.';
$string['analytics:prompt_pattern'] = 'Pola';
$string['analytics:frequency'] = 'Frekuensi';
$string['analytics:recent_activity'] = 'Aktivitas Terkini';
$string['analytics:no_data'] = 'Belum ada data analitik yang tersedia. Data akan muncul setelah siswa mulai menggunakan tutor AI.';
$string['analytics:timerange'] = 'Rentang waktu';
$string['analytics:last_7_days'] = '7 hari terakhir';
$string['analytics:last_30_days'] = '30 hari terakhir';
$string['analytics:all_time'] = 'Sepanjang waktu';
$string['analytics:export'] = 'Ekspor data';
$string['analytics:provider_comparison'] = 'Perbandingan Penyedia AI';
$string['analytics:provider_comparison_desc'] = 'Bandingkan performa antar penyedia AI yang digunakan dalam kursus ini.';
$string['analytics:provider'] = 'Penyedia';
$string['analytics:response_count'] = 'Respons';
$string['analytics:avg_response_length'] = 'Rata-rata panjang respons';
$string['analytics:total_tokens'] = 'Total token';
$string['analytics:avg_tokens'] = 'Rata-rata token / respons';

// User settings.
$string['usersettings:title'] = 'Asisten Kursus AI - Data Anda';
$string['usersettings:intro'] = 'Kelola data chat tutor AI dan pengaturan privasi Anda';
$string['usersettings:privacy_info'] = 'Percakapan Anda dengan tutor AI disimpan untuk memberikan dukungan berkelanjutan sepanjang kursus. Anda memiliki kendali penuh atas data ini dan dapat menghapusnya kapan saja.';
$string['usersettings:usage_stats'] = 'Statistik Penggunaan Anda';
$string['usersettings:total_messages'] = 'Total pesan';
$string['usersettings:total_conversations'] = 'Percakapan';
$string['usersettings:messages'] = 'Pesan';
$string['usersettings:last_activity'] = 'Aktivitas terakhir';
$string['usersettings:delete_course_data'] = 'Hapus data kursus';
$string['usersettings:no_data'] = 'Anda belum menggunakan tutor AI. Data penggunaan Anda akan muncul di sini setelah Anda mulai mengobrol.';
$string['usersettings:delete_all_title'] = 'Hapus Semua Data Anda';
$string['usersettings:delete_all_warning'] = 'Ini akan menghapus secara permanen semua percakapan tutor AI Anda di semua kursus. Tindakan ini tidak dapat dibatalkan.';
$string['usersettings:delete_all_button'] = 'Hapus Semua Data Saya';
$string['usersettings:confirm_delete_course'] = 'Apakah Anda yakin ingin menghapus secara permanen semua data tutor AI Anda untuk kursus "{$a}"? Tindakan ini tidak dapat dibatalkan.';
$string['usersettings:confirm_delete_all'] = 'Apakah Anda yakin ingin menghapus secara permanen SEMUA data tutor AI Anda di semua kursus? Tindakan ini tidak dapat dibatalkan.';
$string['usersettings:data_deleted'] = 'Data Anda telah dihapus.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Halo, {$a}! Saya SOLA. Bagaimana saya bisa membantu Anda hari ini?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Buka SOLA';
$string['chat:change_avatar'] = 'Ganti avatar';

// Quiz UI.
$string['chat:quiz'] = 'Ambil kuis latihan';
$string['chat:quiz_setup_title'] = 'Kuis Latihan';
$string['chat:quiz_questions'] = 'Jumlah pertanyaan';
$string['chat:quiz_topic'] = 'Topik';
$string['chat:quiz_topic_guided'] = 'Dipandu AI (berdasarkan kemajuan Anda)';
$string['chat:quiz_topic_default'] = 'Materi kursus saat ini';
$string['chat:quiz_topic_custom'] = 'Topik kustom…';
$string['chat:quiz_custom_placeholder'] = 'Masukkan topik atau pertanyaan...';
$string['chat:quiz_start'] = 'Mulai Kuis';
$string['chat:quiz_cancel'] = 'Batal';
$string['chat:quiz_loading'] = 'Membuat kuis…';
$string['chat:quiz_error'] = 'Tidak dapat membuat kuis. Silakan coba lagi.';
$string['chat:quiz_correct'] = 'Benar!';
$string['chat:quiz_wrong'] = 'Salah.';
$string['chat:quiz_next'] = 'Pertanyaan berikutnya';
$string['chat:quiz_finish'] = 'Lihat hasil';
$string['chat:quiz_score'] = 'Kuis selesai! Anda mendapat skor {$a->score} dari {$a->total}.';
$string['chat:quiz_summary'] = 'Saya baru menyelesaikan kuis latihan {$a->total} pertanyaan tentang "{$a->topic}" dan mendapat skor {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Tujuan Pembelajaran';
$string['chat:quiz_topic_modules'] = 'Topik Kursus';
$string['chat:quiz_subtopic_select'] = 'Pilih item tertentu…';
$string['chat:quiz_topic_sections'] = 'Bagian Kursus';
$string['chat:quiz_score_great'] = 'Kerja bagus! Anda benar-benar menguasai materi ini.';
$string['chat:quiz_score_good'] = 'Upaya yang baik! Terus pelajari untuk memperkuat pemahaman Anda.';
$string['chat:quiz_score_practice'] = 'Terus berlatih — coba tinjau materi kursus terkait, lalu ulangi kuis.';
$string['chat:quiz_review_heading'] = 'Tinjauan';
$string['chat:quiz_retake'] = 'Ulangi Kuis';
$string['chat:quiz_exit'] = 'Keluar dari Kuis';
$string['chat:quiz_your_answer'] = 'Jawaban Anda';
$string['chat:quiz_correct_answer'] = 'Jawaban yang benar';

// Conversation starters.
$string['chat:starters_label'] = 'Pembuka percakapan';
$string['chat:starter_quiz'] = 'Uji Saya Tentang Ini';
$string['chat:starter_explain'] = 'Jelaskan Ini';
$string['chat:starter_key_concepts'] = 'Konsep Utama';
$string['chat:starter_study_plan'] = 'Rencana Belajar';
$string['chat:starter_help_me'] = 'Bantuan AI';
$string['chat:starter_ai_project_coach'] = 'Pelatih Proyek AI';
$string['chat:starter_ell_practice'] = 'Latihan Percakapan';
$string['chat:starter_ell_pronunciation'] = 'Pengucapan ELL';
$string['chat:starter_ai_coach'] = 'Pelatih AI';
$string['chat:starter_speak'] = 'Ucapkan pembuka';

// Reset / home.
$string['chat:reset'] = 'Mulai ulang';

// Topic picker.
$string['chat:topic_picker_title'] = 'Apa yang ingin Anda fokuskan?';
$string['chat:topic_picker_title_help'] = 'Dengan apa Anda ingin dibantu?';
$string['chat:topic_picker_title_explain'] = 'Apa yang ingin saya jelaskan?';
$string['chat:topic_picker_title_study'] = 'Area mana yang ingin Anda fokuskan?';
$string['chat:topic_start'] = 'Lanjutkan';

// Expand states.
$string['chat:fullscreen'] = 'Layar penuh';
$string['chat:exitfullscreen'] = 'Keluar dari layar penuh';

// Settings panel.
$string['chat:language'] = 'Ganti bahasa';
$string['chat:settings_panel'] = 'Pengaturan';
$string['chat:settings_language'] = 'Bahasa';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Suara';
$string['chat:settings_voice_admin'] = 'Pengaturan suara dikelola di panel admin situs.';

// Voice mode.
$string['chat:voice_mode'] = 'Mode suara';
$string['chat:voice_end'] = 'Akhiri sesi suara';
$string['chat:voice_connecting'] = 'Menghubungkan...';
$string['chat:voice_listening'] = 'Mendengarkan...';
$string['chat:voice_speaking'] = 'SOLA sedang berbicara...';
$string['chat:voice_idle'] = 'Siap';
$string['chat:voice_error'] = 'Koneksi suara gagal. Periksa pengaturan Anda.';
$string['chat:quiz_locked'] = 'SOLA dijeda selama kuis untuk mendukung integritas akademik. Semoga berhasil!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Catatan';

// History panel.
$string['chat:history_title'] = 'Catatan dan Riwayat Percakapan';
$string['task:send_inactivity_reminders'] = 'Kirim email pengingat ketidakaktifan mingguan';
$string['messageprovider:study_notes'] = 'Catatan sesi belajar';
$string['task:send_inactivity_reminders'] = 'Kirim email pengingat ketidakaktifan mingguan';
$string['messageprovider:study_notes'] = 'Catatan sesi belajar';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Pengiriman Frontend';
$string['settings:cdn_heading_desc'] = 'Sajikan aset frontend SOLA (JS/CSS) dari CDN eksternal alih-alih sistem file Moodle. Ini memungkinkan pembaruan frontend tanpa peningkatan plugin. Biarkan URL CDN kosong untuk menggunakan file plugin lokal.';
$string['settings:cdn_url'] = 'URL Dasar CDN';
$string['settings:cdn_url_desc'] = 'URL dasar tempat sola.min.js dan sola.min.css dihosting. Contoh: https://your-org.github.io/sola-cdn. Biarkan kosong untuk menggunakan file plugin lokal.';
$string['settings:cdn_version'] = 'Versi Aset CDN';
$string['settings:cdn_version_desc'] = 'String versi yang ditambahkan ke URL CDN untuk cache busting. Perbarui setelah setiap deploy CDN (misalnya 3.2.4 atau commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Penggunaan keseluruhan';
$string['analytics:tab_bycourse'] = 'Per kursus';
$string['analytics:tab_comparison'] = 'AI vs non-pengguna';
$string['analytics:tab_byunit'] = 'Per unit';
$string['analytics:tab_usagetypes'] = 'Jenis penggunaan';
$string['analytics:tab_themes'] = 'Tema';
$string['analytics:tab_feedback'] = 'Umpan balik AI';
$string['analytics:total_students'] = 'Total mahasiswa';
$string['analytics:active_users'] = 'Pengguna AI aktif';
$string['analytics:msgs_per_student'] = 'Pesan per mahasiswa';
$string['analytics:avg_session'] = 'Durasi sesi rata-rata';
$string['analytics:return_rate'] = 'Tingkat kembali';
$string['analytics:total_sessions'] = 'Total sesi';
$string['analytics:thumbs_up'] = 'Jempol ke atas';
$string['analytics:thumbs_down'] = 'Jempol ke bawah';
$string['analytics:hallucination_flags'] = 'Tanda ketidakakuratan';
$string['analytics:msgs_to_resolution'] = 'Pesan hingga penyelesaian';
$string['analytics:helpful'] = 'Membantu';
$string['analytics:not_helpful'] = 'Tidak membantu';
$string['analytics:flag_hallucination'] = 'Respons ini mengandung informasi yang tidak akurat';
$string['analytics:submit_rating'] = 'Kirim';
$string['analytics:thanks_feedback'] = 'Terima kasih atas umpan balik Anda';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_groq'] = 'Groq';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Jelaskan halaman ini';
$string['chat:starter_ask_anything'] = 'Tanya apa saja';
$string['chat:starter_review_practice'] = 'Ulasan dan latihan';
$string['chat:history_saved_subtitle'] = 'Respons yang disimpan tetap di perangkat ini untuk kursus ini.';
$string['chat:history_saved_empty'] = 'Simpan respons AI untuk melihatnya di sini.';
$string['chat:history_views_label'] = 'Tampilan riwayat';
$string['chat:history_view_saved'] = 'Tersimpan';
$string['chat:history_view_recent'] = 'Riwayat';
$string['chat:debug_refresh'] = 'Segarkan';
$string['chat:debug_copy_all'] = 'Salin semua';
$string['chat:debug_close'] = 'Tutup';
$string['chat:language_switch'] = 'Ganti bahasa';
$string['chat:language_dismiss'] = 'Tutup saran bahasa';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Pilih penyedia LLM';
$string['chat:llm_model_label'] = 'Model';
$string['chat:llm_model_select'] = 'Pilih model LLM';
$string['chat:footer_usertesting'] = 'Pengujian kegunaan';
$string['chat:footer_feedback'] = 'Umpan balik';
$string['chat:voice_panel_title'] = 'Bicara dengan {$a} (Eksperimental)';
