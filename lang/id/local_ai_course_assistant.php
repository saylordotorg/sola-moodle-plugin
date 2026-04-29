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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Asisten Kursus AI';
$string['attachment:attach'] = 'Lampirkan';
$string['attachment:attach_image_or_pdf'] = 'Lampirkan gambar atau PDF';
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
$string['settings:auto_open'] = 'Buka otomatis pada kunjungan pertama';
$string['settings:auto_open_desc'] = 'Saat diaktifkan, laci SOLA terbuka secara otomatis pertama kali siswa masuk ke setiap kursus. Pemuatan halaman berikutnya di kursus yang sama tidak membuka kembali laci — status dilacak per kursus di browser siswa melalui localStorage. Berlaku di desktop dan ponsel. Dapat ditimpa per kursus dari halaman Course AI Settings.';
$string['settings:comparison_providers'] = 'Penyedia perbandingan (pemilih LLM)';
$string['settings:comparison_providers_desc'] = 'Tambahkan penyedia AI tambahan ke pemilih LLM bawaan widget agar administrator dapat membandingkan respons antar penyedia. Gunakan tabel di bawah untuk menambahkan baris. Kolom suhu bersifat opsional (biarkan kosong untuk menggunakan suhu global). Format tersimpan: provider_id|api_key|model1,model2|temperature. Penyedia utama yang dikonfigurasi di atas selalu disertakan secara otomatis. Hanya administrator dengan kemampuan pengelolaan yang melihat pemilih; mahasiswa tidak pernah melihatnya. Provider IDs yang valid: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Penyedia AI default';
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
$string['chat:clear'] = 'Bersihkan layar';
$string['chat:clear_confirm'] = 'Bersihkan pesan yang terlihat? Riwayat chat lengkap Anda tetap tersimpan dan dapat dimuat ulang dengan membuka kembali widget.';
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
$string['chat:quiz_topic_adaptive']      = 'Adaptif — fokus pada kelemahan saya';
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
$string['task:run_meta_ai_query'] = 'Jalankan kueri analitik Radar Pembelajaran terjadwal';
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

// Additional translated strings.
$string['chat:debug_context'] = 'Debug konteks';
$string['chat:debug_context_browser'] = 'Snapshot browser';
$string['chat:debug_context_copy'] = 'Salin';
$string['chat:debug_context_prompt'] = 'Respons server';
$string['chat:debug_context_request'] = 'Permintaan SSE terakhir';
$string['chat:debug_context_toggle'] = 'Alihkan inspektur';
$string['chat:history_empty'] = 'Belum ada percakapan.';
$string['chat:history_refresh'] = 'Segarkan';
$string['chat:history_subtitle'] = 'Pesan terbaru Anda.';
$string['chat:starter_explain_prompt'] = 'Jelaskan konsep terpenting?';
$string['chat:starter_help_lesson'] = 'Jelaskan ini';
$string['chat:starter_help_lesson_prompt'] = 'Bantu saya memahami pelajaran. Ringkas konsep kunci.';
$string['chat:starter_prompt_coach'] = 'Pelatih AI';
$string['chat:starter_quick_study'] = 'Belajar cepat';
$string['chat:starter_study_plan_prompt'] = 'Saya ingin merencanakan belajar. Tanya: (1) tujuan, (2) waktu. Perbarui rencana.';
$string['chat:voice_copy'] = 'Percakapan suara dengan asisten.';
$string['chat:voice_ready'] = 'Siap';
$string['chat:voice_start'] = 'Mulai';
$string['chat:voice_title'] = 'Bicara dengan SOLA';
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
$string['mobile_chip_concepts'] = 'Konsep kunci';
$string['mobile_chip_quiz'] = 'Kuis';
$string['mobile_chip_studyplan'] = 'Rencana belajar';
$string['mobile_clear'] = 'Hapus riwayat';
$string['mobile_disabled'] = 'SOLA tidak tersedia untuk kursus ini.';
$string['mobile_placeholder'] = 'Ajukan pertanyaan...';
$string['mobile_welcome'] = 'Halo, {$a}!';
$string['mobile_welcome_sub'] = 'Saya SOLA, asisten belajar Anda. Bagaimana saya bisa membantu?';
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
$string['rubric:encourage_high'] = 'Luar biasa! Terus begini!';
$string['rubric:encourage_low'] = 'Awal bagus! Latihan rutin akan membantu.';
$string['rubric:encourage_mid'] = 'Upaya bagus! Terus berlatih.';
$string['rubric:overall'] = 'Keseluruhan';
$string['rubric:practice_again'] = 'Latihan lagi';
$string['rubric:score_title_conversation'] = 'Skor latihan percakapan';
$string['rubric:score_title_pronunciation'] = 'Skor latihan pengucapan';
$string['rubric:scoring'] = 'Mengevaluasi...';
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
$string['demo:title'] = 'Lingkungan pengujian';
$string['demo:heading'] = 'Lingkungan pengujian';
$string['demo:intro'] = 'Halaman ini membuat kursus pengujian yang <strong>disembunyikan dari siswa</strong> (visible=0) dan mengisinya dengan siswa palsu, percakapan AI, peringkat, dan umpan balik. Berguna untuk pratinjau Analytics Dashboard atau memvalidasi perubahan plugin tanpa memengaruhi siswa yang benar-benar terdaftar.';
$string['demo:step1'] = 'Langkah 1: kursus pengujian';
$string['demo:step2'] = 'Langkah 2: tambahkan siswa palsu dan obrolan AI';
$string['demo:course_exists'] = 'Kursus pengujian ada: <strong>{$a->fullname}</strong> (nama pendek <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'disembunyikan';
$string['demo:badge_visible'] = 'terlihat oleh siswa';
$string['demo:no_course'] = 'Tidak ada kursus pengujian ditemukan. Klik di bawah untuk membuatnya.';
$string['demo:create_btn'] = 'Buat kursus pengujian tersembunyi';
$string['demo:open_course'] = 'Buka kursus &rarr;';
$string['demo:seed_intro'] = 'Membuat demo_student_001, demo_student_002, ..., mendaftarkan mereka ke kursus pengujian, dan menyisipkan percakapan, pesan, peringkat, dan umpan balik sintetis. Jalankan lagi untuk menambahkan lebih banyak data, atau centang "bersihkan dulu" untuk memulai dari awal.';
$string['demo:users_label'] = 'Pengguna';
$string['demo:weeks_label'] = 'Minggu';
$string['demo:clear_label'] = 'Bersihkan pengguna demo_* yang ada terlebih dahulu';
$string['demo:seed_btn'] = 'Tambahkan siswa dan obrolan';
$string['demo:view_analytics'] = 'Lihat Analitik untuk kursus ini &rarr;';
$string['demo:footer'] = 'Data yang dibuat di sini tersimpan di tabel pengguna / pendaftaran standar Moodle dan tabel percakapan milik plugin. Semua pengguna palsu memiliki nama pengguna yang diawali <code>demo_student_</code> sehingga mudah disaring atau dihapus. Untuk menghapusnya, jalankan kembali langkah seed dengan "Bersihkan pengguna demo_* yang ada terlebih dahulu" dicentang.';
$string['demo:course_fullname'] = 'Kursus Pengujian SOLA (tersembunyi)';
$string['demo:notify_created'] = 'Kursus pengujian siap: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Gagal membuat kursus: {$a}';
$string['demo:notify_seeded'] = 'Ditambahkan: {$a->users} pengguna, {$a->conversations} percakapan, {$a->messages} pesan, {$a->ratings} peringkat, {$a->feedback} entri umpan balik.';
$string['demo:notify_seed_fail'] = 'Gagal menambahkan data: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Biaya Token & Analitik &rarr;';
$string['toc:testing'] = 'Lingkungan pengujian &rarr;';
$string['toc:back_to_course'] = '&larr; Kembali ke {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Biner pdftotext tidak ditemukan; ekstraksi PDF dinonaktifkan.';
$string['rag:pdftotext_available'] = 'pdftotext terdeteksi di {$a}.';
$string['rag:docx_unavailable'] = 'Ekstensi PHP ZipArchive tidak tersedia; ekstraksi DOCX dinonaktifkan.';
$string['rag:h5p_unavailable'] = 'Konten H5P tidak dapat dibaca; dilewati.';
$string['rag:scorm_too_large'] = 'Paket SCORM melebihi batas ukuran yang dikonfigurasi ({$a} MB); dilewati.';
$string['rag:scorm_unzip_failed'] = 'Paket SCORM tidak dapat di-unzip; dilewati.';
$string['rag:transcript_fetch_failed'] = 'Tidak dapat mengambil transkrip dari {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL transkrip diblokir oleh tantangan Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Terdeteksi media tersemat: {$a}';
$string['rag:embed_transcript_attached'] = 'Transkrip dilampirkan untuk {$a}';

// v3.9.10–v3.9.14 new strings (English verbatim; translate later).
$string['usersettings:download'] = 'Unduh data {$a} saya';
$string['usersettings:download_help'] = 'Unduh salinan JSON lengkap dari setiap catatan {$a} yang terkait dengan akun Anda: percakapan, pesan, peringkat, rencana studi, pengingat, skor latihan, jawaban survei, profil, dan entri audit.';
$string['usersettings:privacy_notice_link'] = 'Baca pemberitahuan privasi {$a}';
$string['privacy:title'] = 'Pemberitahuan Privasi {$a}';
$string['admin:user_data:title'] = '{$a} — Ekspor dan penghapusan data pelajar';
$string['admin:user_data:intro'] = 'Alur operasional untuk permintaan GDPR Pasal 15 (akses) atau Pasal 17 (penghapusan). Cari pelajar berdasarkan id pengguna Moodle, tinjau baris yang disimpan plugin ini untuk mereka, lalu ekspor atau hapus.';
$string['admin:user_data:search_label'] = 'Id pengguna Moodle';
$string['admin:user_data:lookup'] = 'Cari';
$string['admin:user_data:not_found'] = 'Tidak ada pengguna dengan id tersebut.';
$string['admin:user_data:download'] = 'Unduh semua data pelajar sebagai JSON';
$string['admin:user_data:purge'] = 'Hapus semua data pelajar untuk pengguna ini';
$string['admin:user_data:confirm_purge'] = 'Hapus secara permanen setiap catatan untuk {$a}? Tindakan ini berdampak pada percakapan, pesan, peringkat, rencana studi, pengingat, profil, skor latihan, survei, entri audit, dan umpan balik. Tindakan ini tidak dapat dibatalkan.';
$string['admin:user_data:purged'] = 'Semua data untuk pengguna yang dipilih telah dihapus.';
$string['chat:consent_heading'] = 'Sebelum Anda mengobrol dengan {$a->product}';
$string['chat:consent_body'] = '{$a->product} adalah asisten pembelajaran bertenaga AI. Pesan Anda dan balasan {$a->product} disimpan di basis data Moodle milik {$a->institution} dan sepuluh giliran terbaru dikirim ke penyedia model AI yang disetujui untuk menjawab pertanyaan Anda. Nama depan Anda dibagikan untuk personalisasi; tidak ada informasi pengenal lain yang dikirim ke penyedia AI. Anda dapat mengunduh, menghapus, atau berhenti menggunakan {$a->product} kapan saja.';
$string['chat:consent_accept'] = 'Saya mengerti, mulai {$a}';
$string['chat:consent_privacy_link'] = 'Baca pemberitahuan privasi lengkap';
$string['task:audit_cleanup'] = 'Pembersihan tabel audit AI Course Assistant';
$string['task:conversation_retention'] = 'Penyapu retensi percakapan AI Course Assistant';
$string['settings:audit_retention_days'] = 'Retensi log audit (hari)';
$string['settings:audit_retention_days_desc'] = 'Tugas terjadwal harian menghapus baris audit yang lebih lama dari ini. 0 menonaktifkan. Default 365.';
$string['settings:conversation_retention_days'] = 'Retensi percakapan (hari)';
$string['settings:conversation_retention_days_desc'] = 'Tugas terjadwal harian menghapus baris percakapan yang stempel waktu modifikasi terakhirnya lebih lama dari ini. 0 menonaktifkan. Default 730.';
$string['settings:ssrf_trusted_endpoints'] = 'Endpoint SSRF tepercaya';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Satu URL per baris. Host yang terdaftar melewati pemeriksaan loopback / IP-pribadi / hanya-https di validator SSRF SOLA. Gunakan ini hanya untuk LLM swa-hosting di jaringan yang Anda kendalikan — misalnya <code>http://localhost:11434</code> untuk Ollama lokal, <code>http://10.0.0.5:8000</code> untuk pod vLLM di VPC yang sama. Perbandingan cocok dengan scheme + host + port; jalur apa pun diabaikan. Default kosong (memblokir semua yang internal). Baris yang dimulai dengan <code>#</code> adalah komentar.';
$string['task:learner_weekly_digest']    = 'Asisten Kursus AI - Ringkasan mingguan pelajar';
$string['learner_digest:subject']        = 'Minggumu dengan {$a->course} - {$a->product}';
$string['learner_digest:optin_offer']    = 'Mau email singkat mingguan tentang apa yang difokuskan selanjutnya?';
$string['next_best_action:get_started']           = 'Mulai dengan {$a->title}. Buka aku dan tanyakan "bantu saya dengan {$a->title}".';
$string['next_best_action:get_started_with_module'] = 'Mulai dengan {$a->title}. Modul "{$a->module}" mencakupnya.';
$string['next_best_action:review']                = 'Tinjau dasar-dasar {$a->title} — buka aku dan tanyakan "jelaskan {$a->title} seperti saya baru".';
$string['next_best_action:review_with_module']    = 'Tinjau dasar-dasar {$a->title} di "{$a->module}", lalu buka aku dengan pertanyaan.';
$string['next_best_action:practice']              = 'Bangun di atas apa yang sudah kamu miliki di {$a->title}. Buka aku dan tanyakan "berikan contoh terselesaikan untuk {$a->title}".';
$string['next_best_action:practice_with_module']  = 'Berlatih {$a->title} bersama "{$a->module}". Buka aku untuk contoh terselesaikan.';
$string['next_best_action:quiz']                  = 'Kunci {$a->title} dengan kuis cepat. Buka aku dan pilih "Uji saya — adaptif".';
$string['next_best_action:quiz_with_module']      = 'Kunci {$a->title} dengan kuis cepat. Modul "{$a->module}" adalah tempatnya.';
$string['next_best_action:empty_state']           = 'Kamu terlihat hebat di setiap tujuan saat ini — tidak ada yang perlu diingatkan. Teruskan.';
$string['next_best_action:header']                = 'Berikut {$a} hal untuk difokuskan selanjutnya:';
$string['learner_digest:unsubscribe_done_title']  = 'Berhenti berlangganan';
$string['learner_digest:unsubscribe_done_body']   = 'Selesai — kamu tidak akan menerima lagi email mingguan untuk kursus ini dari {$a->product}. Kamu dapat berlangganan kembali kapan saja dari jendela obrolan di kursusmu.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Tautan berhenti berlangganan tidak lagi valid';
$string['learner_digest:unsubscribe_invalid_body']  = 'Tautan berhenti berlangganan ini telah kedaluwarsa atau salah. Kamu dapat mengelola preferensi email dari pengaturan kursusmu.';
$string['active_learners:line']                   = '{$a} lainnya sedang mempelajari kursus ini saat ini.';
$string['active_learners:line_global']             = '{$a} lainnya sedang belajar saat ini.';
$string['settings:active_learners_scope']          = 'Cakupan indikator pelajar aktif';
$string['settings:active_learners_scope_desc']     = 'Apakah indikator "lainnya sedang belajar" di atas pemicu obrolan menghitung pelajar hanya di kursus yang sama atau pelajar di seluruh situs. Default <strong>global</strong>.';
$string['settings:active_learners_scope_global']   = 'Global (kursus apa pun)';
$string['settings:active_learners_scope_course']   = 'Per-kursus saja';
$string['learner_digest:optin_yes']      = 'Ya, kirim email mingguan';
$string['learner_digest:optin_no']       = 'Tidak, terima kasih';
$string['learner_digest:optin_thanks']   = 'Oke. Akan dapat ringkasan mingguan setiap Senin.';
$string['learner_digest:optin_declined'] = 'Oke. Tanpa email - buka saja saya kapan pun ingin meninjau.';
$string['settings:xai_proxy_url'] = 'URL proxy xAI Realtime';
$string['settings:xai_proxy_url_desc'] = 'URL wss publik dari layanan proxy xAI Realtime SOLA (misalnya wss://voice.example.com/xai-rt/rt). Saat ini diatur bersama JWT secret, suara xAI dirutekan melalui proxy dan kunci API xAI master tidak pernah sampai ke peramban. Biarkan kosong untuk kembali ke koneksi langsung (tidak direkomendasikan untuk produksi).';
$string['settings:xai_proxy_jwt_secret'] = 'JWT secret proxy xAI Realtime';
$string['settings:xai_proxy_jwt_secret_desc'] = 'Rahasia bersama HS256 yang digunakan untuk menandatangani token sesi berumur pendek bagi proxy xAI Realtime. Harus sesuai dengan rahasia MOODLE_JWT_SECRET pada Cloudflare Worker. Rotasi secara berkala.';
$string['admin:vendor_dpa:title'] = '{$a} — Status DPA vendor';
$string['admin:vendor_dpa:intro'] = 'Status opt-out pelatihan, DPA, dan retensi untuk setiap driver penyedia AI. Gunakan ini untuk memutuskan driver mana yang akan diaktifkan di situs Anda. Perutean Tier 2 dan lebih tinggi memerlukan DPA yang ditandatangani serta opt-out pelatihan kontraktual.';
$string['admin:vendor_dpa:maintenance_note'] = 'Tabel ini dipelihara di classes/vendor_registry.php. Perbarui ketika ada perubahan ToS vendor.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Email Petugas Perlindungan Data';
$string['settings:dpo_email_desc'] = 'Email kontak yang ditampilkan pada pemberitahuan privasi pelajar di bagian "Kontak". Biarkan kosong untuk menyembunyikan baris. Pemasangan dengan rebranding harus mengarahkan ini ke DPO mereka sendiri.';
$string['settings:privacy_external_url'] = 'URL halaman privasi institusi';
$string['settings:privacy_external_url_desc'] = 'Tautan ke halaman privasi tingkat institusi, ditampilkan pada pemberitahuan privasi pelajar di bagian "Kontak". Biarkan kosong untuk menyembunyikan baris.';
$string['settings:privacy_notice_override'] = 'Penggantian pemberitahuan privasi (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Jika diatur, HTML ini menggantikan pemberitahuan privasi bermerek default yang dirender di /local/ai_course_assistant/privacy.php. Gunakan ini untuk memasukkan teks yang telah ditinjau Legal untuk institusi Anda tanpa mengedit kode. Biarkan kosong untuk menggunakan pemberitahuan default, yang menurunkan teksnya dari tujuh kunci konfigurasi branding.';
$string['objectives:title'] = 'Tujuan pembelajaran & penguasaan';
$string['objectives:toggles_heading'] = 'Pelacakan penguasaan';
$string['objectives:toggle_master'] = 'Aktifkan pelacakan penguasaan untuk kursus ini';
$string['objectives:toggle_chip'] = 'Tampilkan chip Penguasaan Pembelajaran kepada siswa';
$string['objectives:toggle_chip_help'] = 'Opsional. Saat dimatikan, penguasaan tetap mengarahkan asisten secara diam-diam tetapi pelajar tidak melihat indikator.';
$string['objectives:toggled'] = 'Pengaturan diperbarui.';
$string['objectives:detected_heading'] = 'Terdeteksi {$a->count} tujuan pembelajaran dari {$a->source}.';
$string['objectives:source_competency'] = 'Kompetensi Moodle';
$string['objectives:source_summary'] = 'ringkasan kursus';
$string['objectives:source_section'] = 'konten bagian atau halaman pertama';
$string['objectives:source_page'] = 'halaman kursus';
$string['objectives:source_llm'] = 'ekstraksi AI';
$string['objectives:source_manual'] = 'entri manual';
$string['objectives:source_none'] = 'tidak ada sumber otomatis';
$string['objectives:import_detected'] = 'Impor tujuan terdeteksi ini';
$string['objectives:import_llm'] = 'Ekstrak tujuan dengan AI';
$string['objectives:llm_empty'] = 'Ekstraksi AI tidak mengembalikan tujuan apa pun. Coba lagi nanti atau masukkan secara manual.';
$string['objectives:imported'] = '{$a} tujuan diimpor.';
$string['objectives:none_detected'] = 'Tidak ada tujuan pembelajaran terdeteksi secara otomatis. Masukkan secara manual di bawah, atau gunakan ekstraksi AI.';
$string['objectives:list_heading'] = 'Tujuan saat ini';
$string['objectives:col_code'] = 'Kode';
$string['objectives:col_title'] = 'Judul';
$string['objectives:col_source'] = 'Sumber';
$string['objectives:col_actions'] = 'Tindakan';
$string['objectives:add_heading'] = 'Tambahkan tujuan';
$string['objectives:add_submit'] = 'Tambahkan tujuan';
$string['objectives:saved'] = 'Tujuan disimpan.';
$string['objectives:deleted'] = 'Tujuan dihapus.';
$string['objectives:delete_confirm'] = 'Hapus tujuan ini dan seluruh riwayat percobaan untuknya?';
$string['objectives:delete_all'] = 'Hapus semua tujuan untuk kursus ini';
$string['objectives:delete_all_confirm'] = 'Hapus setiap tujuan dan seluruh riwayat percobaan untuk kursus ini? Tidak dapat dibatalkan.';
$string['objectives:deleted_all'] = 'Semua tujuan untuk kursus ini telah dihapus.';
$string['mastery:chip_aria'] = 'Status penguasaan pembelajaran';
$string['mastery:popover_aria'] = 'Detail penguasaan pembelajaran';
$string['mastery:chip_label'] = '{$a->mastered} dari {$a->total} dikuasai';
$string['mastery:status_mastered'] = 'dikuasai';
$string['mastery:status_learning'] = 'sedang berlangsung';
$string['mastery:status_not_started'] = 'belum dimulai';
$string['mastery:popover_empty'] = 'Tidak ada tujuan pembelajaran yang dikonfigurasi untuk kursus ini.';
$string['settings:mastery_heading'] = 'Pelacakan penguasaan';
$string['settings:mastery_heading_desc'] = 'Fitur per-kursus berbasis opt-in yang menandai jawaban kuis dan giliran percakapan asisten terhadap tujuan pembelajaran kursus, kemudian memasukkan ringkasan penguasaan ringkas kembali ke prompt sistem untuk mengarahkan pertanyaan. Halus secara default: pelajar tidak melihat apa pun kecuali sakelar chip per-kursus diaktifkan.';
$string['settings:mastery_threshold'] = 'Ambang penguasaan';
$string['settings:mastery_threshold_desc'] = 'Akurasi bergulir di mana atau di atasnya sebuah tujuan dianggap dikuasai. 0.0 hingga 1.0. Default 0.85.';
$string['settings:mastery_window'] = 'Jendela percobaan';
$string['settings:mastery_window_desc'] = 'Jumlah percobaan terbaru per tujuan yang ditimbang dalam akurasi bergulir. Default 8.';
$string['settings:mastery_decay_enabled']        = 'Aktifkan peluruhan penguasaan';
$string['settings:mastery_decay_enabled_desc']   = 'Saat aktif, skor penguasaan meluruh seiring waktu terhadap stempel waktu percobaan terbaru. Tujuan yang sebelumnya dikuasai kembali ke "belajar" setelah waktu yang cukup. Tidak turun di bawah "belajar". <strong>Mati secara default di v4.0.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Paruh waktu peluruhan penguasaan (hari)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Paruh waktu dalam hari. Skor dikalikan dengan 0.5 ^ (hari sejak percobaan terakhir / paruh waktu). Default 30. Digunakan hanya saat peluruhan diaktifkan.';
$string['settings:mastery_classifier_model'] = 'Model pengklasifikasi';
$string['settings:mastery_classifier_model_desc'] = 'Model yang digunakan untuk mengklasifikasikan giliran asisten terhadap tujuan. Biarkan kosong untuk mewarisi model penyedia AI default; jika tidak, tentukan model murah seperti gpt-4o-mini.';
$string['settings:mastery_classifier_weight'] = 'Bobot pengklasifikasi';
$string['settings:mastery_classifier_weight_desc'] = 'Seberapa besar percobaan percakapan dihitung relatif terhadap percobaan kuis (1.0). Default 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Ambang kepercayaan pengklasifikasi';
$string['settings:mastery_classifier_threshold_desc'] = 'Kepercayaan pengklasifikasi minimum yang diperlukan untuk mencatat percobaan percakapan. 0.0 hingga 1.0. Default 0.7.';
$string['chat:mode_progress'] = 'Kemajuan';
$string['objectives:toggle_dashboard'] = 'Tampilkan tab dasbor Kemajuan kepada siswa';
$string['objectives:toggle_dashboard_help'] = 'Opsional. Menambahkan tab Kemajuan di samping Obrolan / Suara / Riwayat di dalam widget. Tab ini menunjukkan kepada pelajar tujuan mana yang telah dikuasai, mana yang sedang berlangsung, dan mana yang belum dimulai.';
$string['mastery:dashboard_title'] = 'Kemajuan pembelajaran Anda';
$string['mastery:dashboard_subtitle'] = 'Penguasaan diukur dari jawaban kuis dan latihan obrolan Anda. Teruskan — kedalaman lebih penting daripada cakupan.';
$string['mastery:dashboard_refresh'] = 'Segarkan';
$string['mastery:section_mastered'] = 'Dikuasai';
$string['mastery:section_learning'] = 'Sedang berlangsung';
$string['mastery:section_not_started'] = 'Belum dimulai';
$string['mastery:summary_label'] = '{$a->mastered} dari {$a->total} tujuan dikuasai';
$string['mastery:ask_about'] = 'Tanyakan tentang ini';
$string['mastery:celebrate'] = 'Anda telah menguasai setiap tujuan untuk kursus ini. Kerja yang luar biasa.';
$string['mastery:ask_template'] = 'Bantu saya berlatih dan memperdalam pemahaman tentang tujuan ini: {$a}.';
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
