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
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Pembantu Kursus AI';
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
$string['settings:provider'] = 'Pembekal AI';
$string['settings:provider_desc'] = 'Pilih pembekal AI untuk digunakan bagi penyelesaian chat.';
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
$string['settings:avatar_saylor'] = 'Logo Saylor Academy (Default)';
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
$string['chat:clear'] = 'Kosongkan sejarah';
$string['chat:clear_confirm'] = 'Adakah anda pasti mahu mengosongkan sejarah chat anda untuk kursus ini?';
$string['chat:copy'] = 'Salin perbualan';
$string['chat:copied'] = 'Perbualan disalin ke clipboard';
$string['chat:copy_failed'] = 'Gagal menyalin perbualan';
$string['chat:greeting'] = 'Helo! Saya tutor AI anda untuk kursus ini. Bagaimana saya boleh membantu anda hari ini?';
$string['chat:thinking'] = 'Sedang berfikir...';
$string['chat:error'] = 'Maaf, ada yang tidak kena. Sila cuba lagi.';
$string['chat:error_auth'] = 'Ralat pengesahan. Sila hubungi pentadbir anda.';
$string['chat:error_ratelimit'] = 'Terlalu banyak permintaan. Sila tunggu sebentar dan cuba lagi.';
$string['chat:error_unavailable'] = 'Perkhidmatan AI tidak tersedia buat sementara waktu. Sila cuba lagi kemudian.';
$string['chat:error_notconfigured'] = 'Tutor AI belum dikonfigurasi. Sila hubungi pentadbir anda.';
$string['chat:expand'] = 'Kembangkan chat';
$string['chat:collapse'] = 'Kecilkan chat';
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
