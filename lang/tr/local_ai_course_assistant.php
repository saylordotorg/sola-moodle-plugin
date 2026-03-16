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
 * Language strings for local_ai_course_assistant — Turkish.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI Ders Asistanı';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'AI eğitmen konuşmalarını kullanıcı ve ders bazında saklar.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'Konuşmanın sahibi olan kullanıcının kimliği.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'Konuşmanın ait olduğu dersin kimliği.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'Konuşmanın başlığı.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'Konuşmanın oluşturulduğu zaman.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'Konuşmanın son değiştirildiği zaman.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'AI eğitmen konuşmalarındaki bireysel mesajları saklar.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'Mesajı gönderen kullanıcının kimliği.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'Mesajın ait olduğu dersin kimliği.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'Mesaj gönderenin rolü (kullanıcı veya asistan).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'Mesajın içeriği.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'Mesaj için kullanılan jeton sayısı.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'Mesajın oluşturulduğu zaman.';
$string['ai_course_assistant:use'] = 'AI eğitmen sohbetini kullanma';
$string['ai_course_assistant:viewanalytics'] = 'AI eğitmen sohbet analizlerini görüntüleme';
$string['ai_course_assistant:manage'] = 'AI eğitmen sohbet ayarlarını yönetme (Yönetici rolü)';
$string['settings:enabled'] = 'AI ders asistanını etkinleştir';
$string['settings:enabled_desc'] = 'Ders sayfalarında AI ders asistanı bileşenini etkinleştirin veya devre dışı bırakın.';
$string['settings:provider'] = 'AI sağlayıcı';
$string['settings:provider_desc'] = 'Sohbet tamamlamaları için kullanılacak AI sağlayıcıyı seçin.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Yerel)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Özel (OpenAI uyumlu)';
$string['settings:apikey'] = 'API anahtarı';
$string['settings:apikey_desc'] = 'Seçilen sağlayıcı için API anahtarı. Ollama için gerekli değildir.';
$string['settings:model'] = 'Model adı';
$string['settings:model_desc'] = 'Kullanılacak model. Varsayılan sağlayıcıya göre değişir (ör. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API temel URL\'si';
$string['settings:apibaseurl_desc'] = 'API temel URL\'si. Sağlayıcıya göre otomatik doldurulur ancak geçersiz kılınabilir. Sağlayıcı varsayılanını kullanmak için boş bırakın.';
$string['settings:systemprompt'] = 'Sistem istemi şablonu';
$string['settings:systemprompt_desc'] = 'AI\'ye gönderilen sistem istemi. Yer tutucuları kullanın: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = '"{{coursename}}" dersi için yardımcı bir AI eğitmensiniz. Öğrencinin rolü {{userrole}}.

Derste işlenen konular:
{{coursetopics}}

Öğrencinin ders içeriğini anlamasına yardımcı olun. Teşvik edici, açık ve pedagojik olarak titiz olun.';
$string['settings:temperature'] = 'Sıcaklık';
$string['settings:temperature_desc'] = 'Rastgeleliği kontrol eder. Düşük değerler daha odaklı, yüksek değerler daha yaratıcıdır. Aralık: 0,0 ile 2,0.';
$string['settings:maxhistory'] = 'Maksimum konuşma geçmişi';
$string['settings:maxhistory_desc'] = 'API isteklerine dahil edilecek maksimum mesaj çifti sayısı. Eski mesajlar kaldırılır.';
$string['settings:avatar'] = 'Sohbet avatarı';
$string['settings:avatar_desc'] = 'Sohbet bileşeni düğmesi için avatar simgesini seçin.';
$string['settings:avatar_saylor'] = '{$a} logosu (varsayılan)';
$string['settings:position'] = 'Bileşen konumu';
$string['settings:position_desc'] = 'Sohbet bileşeninin sayfadaki konumu.';
$string['settings:position_br'] = 'Sağ alt';
$string['settings:position_bl'] = 'Sol alt';
$string['settings:position_tr'] = 'Sağ üst';
$string['settings:position_tl'] = 'Sol üst';
$string['chat:settings'] = 'Eklenti ayarları';
$string['analytics:viewdashboard'] = 'Analiz panosunu görüntüle';
$string['coursesettings:title'] = 'Ders AI ayarları';
$string['coursesettings:enabled'] = 'Ders geçersiz kılmalarını etkinleştir';
$string['coursesettings:enabled_desc'] = 'Etkinleştirildiğinde, aşağıdaki ayarlar yalnızca bu ders için genel AI sağlayıcı yapılandırmasını geçersiz kılar. Genel değerleri devralmak için alanları boş bırakın.';
$string['coursesettings:using_global'] = 'Genel ayar kullanılıyor';
$string['coursesettings:saved'] = 'Ders AI ayarları kaydedildi.';
$string['coursesettings:global_settings_link'] = 'Genel AI ayarları';
$string['lang:switch'] = 'Evet, değiştir';
$string['lang:dismiss'] = 'Hayır, teşekkürler';
$string['lang:change'] = 'Dili değiştir';
$string['lang:english'] = 'İngilizce';
$string['chat:title'] = 'AI Eğitmen';
$string['chat:placeholder'] = 'Bir soru sorun...';
$string['chat:send'] = 'Gönder';
$string['chat:close'] = 'Sohbeti kapat';
$string['chat:open'] = 'AI eğitmen sohbetini aç';
$string['chat:clear'] = 'Geçmişi temizle';
$string['chat:clear_confirm'] = 'Bu ders için sohbet geçmişinizi temizlemek istediğinizden emin misiniz?';
$string['chat:copy'] = 'Konuşmayı kopyala';
$string['chat:copied'] = 'Konuşma panoya kopyalandı';
$string['chat:copy_failed'] = 'Konuşma kopyalanamadı';
$string['chat:thinking'] = 'Düşünüyor...';
$string['chat:error'] = 'Üzgünüz, bir hata oluştu. Lütfen tekrar deneyin.';
$string['chat:error_auth'] = 'Kimlik doğrulama hatası. Lütfen yöneticinizle iletişime geçin.';
$string['chat:error_ratelimit'] = 'Çok fazla istek. Lütfen bir süre bekleyip tekrar deneyin.';
$string['chat:error_unavailable'] = 'AI hizmeti geçici olarak kullanılamıyor. Lütfen daha sonra tekrar deneyin.';
$string['chat:error_notconfigured'] = 'AI eğitmen henüz yapılandırılmadı. Lütfen yöneticinizle iletişime geçin.';
$string['chat:expand'] = 'Sohbeti genişlet';
$string['chat:collapse'] = 'Sohbeti daralt';
$string['chat:mic'] = 'Sorunuzu sesli sorun';
$string['chat:mic_error'] = 'Mikrofon hatası. Lütfen tarayıcı izinlerini kontrol edin.';
$string['chat:mic_unsupported'] = 'Bu tarayıcıda sesli giriş desteklenmiyor.';
$string['chat:newline_hint'] = 'Yeni paragraf için Shift+Enter';
$string['chat:you'] = 'Siz';
$string['chat:assistant'] = 'AI Eğitmen';
$string['chat:history_loaded'] = 'Önceki konuşma yüklendi.';
$string['chat:history_cleared'] = 'Sohbet geçmişi temizlendi.';
$string['chat:offtopic_warning'] = 'Sorunuz bu dersle ilgili görünmüyor. Size en iyi şekilde yardımcı olabilmem için konuya bağlı kalmaya çalışın!';
$string['chat:offtopic_ended'] = 'Konuşma konudan çok fazla saptığı için AI eğitmen erişiminiz {$a} dakika süreyle geçici olarak askıya alındı. Bu süreyi ders materyallerini gözden geçirmek için kullanın. Daha sonra tekrar deneyebilirsiniz.';
$string['chat:offtopic_locked'] = 'AI eğitmen erişiminiz geçici olarak askıya alındı. {$a} dakika sonra tekrar deneyebilirsiniz. Döndüğünüzde dersle ilgili sorulara odaklanın.';
$string['chat:escalated_to_support'] = 'Sorunuza tam olarak yanıt veremedim, bu yüzden sizin için bir destek bileti oluşturdum. Destek ekibinden biri sizinle iletişime geçecek. Bilet numaranız: {$a}';
$string['chat:studyplan_intro'] = 'Bu ders için bir çalışma planı oluşturmanıza yardımcı olabilirim! Haftada kaç saat çalışmaya ayırabileceğinizi söyleyin, size yapılandırılmış bir plan oluşturmanızda yardımcı olayım.';
$string['settings:faq_heading'] = 'SSS ve destek';
$string['settings:faq_heading_desc'] = 'Merkezi SSS ve Zendesk destek bileti entegrasyonunu yapılandırın.';
$string['settings:faq_content'] = 'SSS içeriği';
$string['settings:faq_content_desc'] = 'SSS girdilerini girin (her satırda bir tane, biçim: Q: soru | A: yanıt). Yaygın destek sorularını yanıtlamak için AI\'ye sağlanır.';
$string['settings:zendesk_enabled'] = 'Zendesk yükseltmeyi etkinleştir';
$string['settings:zendesk_enabled_desc'] = 'AI bir destek sorusunu çözemediğinde, konuşma özeti ile otomatik olarak bir Zendesk bileti oluşturur.';
$string['settings:zendesk_subdomain'] = 'Zendesk alt alanı';
$string['settings:zendesk_subdomain_desc'] = 'Zendesk alt alanınız (ör. sirketim.zendesk.com için "sirketim").';
$string['settings:zendesk_email'] = 'Zendesk API e-postası';
$string['settings:zendesk_email_desc'] = 'API kimlik doğrulaması için Zendesk kullanıcı e-posta adresi (/token son ekiyle).';
$string['settings:zendesk_token'] = 'Zendesk API jetonu';
$string['settings:zendesk_token_desc'] = 'Zendesk kimlik doğrulaması için API jetonu.';
$string['settings:offtopic_heading'] = 'Konu dışı algılama';
$string['settings:offtopic_heading_desc'] = 'Sohbetin konu dışı konuşmaları nasıl ele alacağını yapılandırın.';
$string['settings:offtopic_enabled'] = 'Konu dışı algılamayı etkinleştir';
$string['settings:offtopic_enabled_desc'] = 'AI\'nin konu dışı konuşmaları algılamasını ve yönlendirmesini sağlayın.';
$string['settings:offtopic_max'] = 'Maksimum konu dışı mesaj sayısı';
$string['settings:offtopic_max_desc'] = 'Önlem alınmadan önceki ardışık konu dışı mesaj sayısı.';
$string['settings:offtopic_action'] = 'Konu dışı eylem';
$string['settings:offtopic_action_desc'] = 'Konu dışı sınırına ulaşıldığında ne yapılacağı.';
$string['settings:offtopic_action_warn'] = 'Uyar ve yönlendir';
$string['settings:offtopic_action_end'] = 'Erişimi geçici olarak kilitle';
$string['settings:offtopic_lockout_duration'] = 'Kilitleme süresi (dakika)';
$string['settings:offtopic_lockout_duration_desc'] = 'Konu dışı sınırını aştıktan sonra bir öğrencinin AI eğitmene erişimini kaybetme süresi (dakika). Varsayılan: 30 dakika.';
$string['settings:studyplan_heading'] = 'Çalışma planlaması ve hatırlatmalar';
$string['settings:studyplan_heading_desc'] = 'Çalışma planı özelliklerini ve hatırlatma bildirimlerini yapılandırın.';
$string['settings:studyplan_enabled'] = 'Çalışma planlamasını etkinleştir';
$string['settings:studyplan_enabled_desc'] = 'AI eğitmenin öğrencilere müsait zamanlarına göre kişiselleştirilmiş çalışma planları oluşturmalarında yardımcı olmasını sağlayın.';
$string['settings:reminders_email_enabled'] = 'E-posta hatırlatmalarını etkinleştir';
$string['settings:reminders_email_enabled_desc'] = 'Öğrencilerin e-posta ile çalışma hatırlatmalarına abone olmalarını sağlayın.';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsApp hatırlatmalarını etkinleştir';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Öğrencilerin WhatsApp ile çalışma hatırlatmalarına abone olmalarını sağlayın (WhatsApp API yapılandırması gerektirir).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL\'si';
$string['settings:whatsapp_api_url_desc'] = 'WhatsApp mesajları göndermek için API uç noktası (ör. Twilio, MessageBird). "to", "from" ve "body" alanlarını içeren JSON gövdesiyle POST kabul etmelidir.';
$string['settings:whatsapp_api_token'] = 'WhatsApp API jetonu';
$string['settings:whatsapp_api_token_desc'] = 'WhatsApp API için kimlik doğrulama jetonu.';
$string['settings:whatsapp_from_number'] = 'WhatsApp gönderen numarası';
$string['settings:whatsapp_from_number_desc'] = 'WhatsApp mesajlarının gönderileceği telefon numarası (ülke kodu ile, ör. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp engelli ülkeler';
$string['settings:whatsapp_blocked_countries_desc'] = 'Yerel düzenlemeler nedeniyle WhatsApp hatırlatmalarının izin verilmediği virgülle ayrılmış ISO 3166-1 alpha-2 ülke kodları (ör. "CN,IR,KP").';
$string['reminder:email_subject'] = 'Çalışma hatırlatması: {$a}';
$string['reminder:email_body'] = 'Merhaba {$a->firstname},

İşte "{$a->coursename}" için çalışma hatırlatmanız.

{$a->message}

Çalışma planınız bu ders için haftada {$a->hours_per_week} saat öneriyor.

Böyle devam edin!

---
Bu hatırlatmaları almayı durdurmak için buraya tıklayın: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = '{$a->coursename} için çalışma hatırlatması: {$a->message} (Abonelikten çık: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Bugünün çalışma hedefi: ';
$string['unsubscribe:title'] = 'Çalışma hatırlatmalarından çık';
$string['unsubscribe:success'] = 'Bu ders için çalışma hatırlatmalarından başarıyla çıktınız.';
$string['unsubscribe:already'] = 'Bu hatırlatmalardan zaten çıkmıştınız.';
$string['unsubscribe:invalid'] = 'Geçersiz veya süresi dolmuş abonelikten çıkma bağlantısı.';
$string['unsubscribe:resubscribe'] = 'Fikrinizi mi değiştirdiniz? AI eğitmen sohbetinden hatırlatmaları yeniden etkinleştirebilirsiniz.';
$string['task:send_reminders'] = 'AI eğitmen çalışma hatırlatmalarını gönder';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Öğrenci çalışma planlarını saklar.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'Çalışma planının sahibi olan kullanıcının kimliği.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'Çalışma planının ait olduğu ders.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Öğrencinin çalışmayı planladığı haftalık saat.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'JSON biçiminde çalışma planı ayrıntıları.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Çalışma hatırlatma tercihlerini ve abonelikleri saklar.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'Hatırlatmalara abone olan kullanıcının kimliği.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'Hatırlatma kanalı (e-posta veya WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'Hatırlatmalar için e-posta adresi veya telefon numarası.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'Düzenleyici uyumluluk için kullanıcının ülke kodu.';
$string['analytics:title'] = 'AI eğitmen analizleri';
$string['analytics:overview'] = 'Genel bakış';
$string['analytics:total_conversations'] = 'Toplam konuşma';
$string['analytics:total_messages'] = 'Toplam mesaj';
$string['analytics:active_students'] = 'Aktif öğrenciler';
$string['analytics:avg_messages_per_student'] = 'Öğrenci başına ort. mesaj';
$string['analytics:offtopic_rate'] = 'Konu dışı oranı';
$string['analytics:escalation_count'] = 'Desteğe yükseltildi';
$string['analytics:studyplan_adoption'] = 'Çalışma planı olan öğrenciler';
$string['analytics:usage_trends'] = 'Kullanım eğilimleri';
$string['analytics:daily_messages'] = 'Günlük mesaj hacmi';
$string['analytics:hotspots'] = 'Ders sıcak noktaları';
$string['analytics:hotspots_desc'] = 'Öğrenci sorularında en sık atıfta bulunulan ders bölümleri. Yüksek sayılar, öğrencilerin daha fazla desteğe ihtiyaç duyduğu alanları gösterebilir.';
$string['analytics:section'] = 'Bölüm';
$string['analytics:mention_count'] = 'Bahsedilme';
$string['analytics:common_prompts'] = 'Yaygın soru kalıpları';
$string['analytics:common_prompts_desc'] = 'Öğrencilerden gelen tekrarlayan soru kalıpları. Ders içeriğindeki sistematik boşlukları belirlemek için bunları inceleyin.';
$string['analytics:prompt_pattern'] = 'Kalıp';
$string['analytics:frequency'] = 'Sıklık';
$string['analytics:recent_activity'] = 'Son etkinlik';
$string['analytics:no_data'] = 'Henüz analiz verisi yok. Öğrenciler AI eğitmeni kullanmaya başladığında veriler görünecektir.';
$string['analytics:timerange'] = 'Zaman aralığı';
$string['analytics:last_7_days'] = 'Son 7 gün';
$string['analytics:last_30_days'] = 'Son 30 gün';
$string['analytics:all_time'] = 'Tüm zamanlar';
$string['analytics:export'] = 'Verileri dışa aktar';
$string['analytics:provider_comparison'] = 'AI sağlayıcı karşılaştırması';
$string['analytics:provider_comparison_desc'] = 'Bu derste kullanılan AI sağlayıcıların performansını karşılaştırın.';
$string['analytics:provider'] = 'Sağlayıcı';
$string['analytics:response_count'] = 'Yanıtlar';
$string['analytics:avg_response_length'] = 'Ort. yanıt uzunluğu';
$string['analytics:total_tokens'] = 'Toplam jeton';
$string['analytics:avg_tokens'] = 'Ort. jeton / yanıt';
$string['usersettings:title'] = 'AI Ders Asistanı: Verileriniz';
$string['usersettings:intro'] = 'AI eğitmen sohbet verilerinizi ve gizlilik ayarlarınızı yönetin';
$string['usersettings:privacy_info'] = 'AI eğitmen ile konuşmalarınız, ders boyunca sürekli destek sağlamak için saklanır. Bu veriler üzerinde tam kontrole sahipsiniz ve istediğiniz zaman silebilirsiniz.';
$string['usersettings:usage_stats'] = 'Kullanım istatistikleriniz';
$string['usersettings:total_messages'] = 'Toplam mesaj';
$string['usersettings:total_conversations'] = 'Konuşmalar';
$string['usersettings:messages'] = 'Mesajlar';
$string['usersettings:last_activity'] = 'Son etkinlik';
$string['usersettings:delete_course_data'] = 'Ders verilerini sil';
$string['usersettings:no_data'] = 'Henüz AI eğitmeni kullanmadınız. Sohbet etmeye başladığınızda kullanım verileriniz burada görünecektir.';
$string['usersettings:delete_all_title'] = 'Tüm verilerinizi silin';
$string['usersettings:delete_all_warning'] = 'Bu işlem, tüm derslerdeki AI eğitmen ile tüm konuşmalarınızı kalıcı olarak silecektir. Bu işlem geri alınamaz.';
$string['usersettings:delete_all_button'] = 'Tüm verilerimi sil';
$string['usersettings:confirm_delete_course'] = '"{$a}" dersi için tüm AI eğitmen verilerini kalıcı olarak silmek istediğinizden emin misiniz? Bu işlem geri alınamaz.';
$string['usersettings:confirm_delete_all'] = 'Tüm derslerdeki TÜM AI eğitmen verilerini kalıcı olarak silmek istediğinizden emin misiniz? Bu işlem geri alınamaz.';
$string['usersettings:data_deleted'] = 'Verileriniz silindi.';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'Merhaba, {$a}! Ben SOLA, {INSTITUTION} çevrimiçi öğrenme asistanınız.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA\'yı aç';
$string['chat:change_avatar'] = 'Avatarı değiştir';

// Quiz UI.
$string['chat:quiz'] = 'Alıştırma testi çöz';
$string['chat:quiz_setup_title'] = 'Alıştırma testi';
$string['chat:quiz_questions'] = 'Soru sayısı';
$string['chat:quiz_topic'] = 'Konu';
$string['chat:quiz_topic_guided'] = 'AI rehberli (ilerlemenize göre)';
$string['chat:quiz_topic_default'] = 'Mevcut ders içeriği';
$string['chat:quiz_topic_custom'] = 'Özel konu…';
$string['chat:quiz_custom_placeholder'] = 'Bir konu veya soru girin...';
$string['chat:quiz_start'] = 'Testi başlat';
$string['chat:quiz_cancel'] = 'İptal';
$string['chat:quiz_loading'] = 'Test oluşturuluyor…';
$string['chat:quiz_error'] = 'Test oluşturulamadı. Lütfen tekrar deneyin.';
$string['chat:quiz_correct'] = 'Doğru!';
$string['chat:quiz_wrong'] = 'Yanlış.';
$string['chat:quiz_next'] = 'Sonraki soru';
$string['chat:quiz_finish'] = 'Sonuçları gör';
$string['chat:quiz_score'] = 'Test tamamlandı! {$a->total} üzerinden {$a->score} aldınız.';
$string['chat:quiz_summary'] = '"{$a->topic}" konusunda {$a->total} soruluk bir alıştırma testini tamamladım ve {$a->score}/{$a->total} aldım.';
$string['chat:quiz_topic_objectives'] = 'Öğrenme hedefleri';
$string['chat:quiz_topic_modules'] = 'Ders konusu';
$string['chat:quiz_subtopic_select'] = 'Belirli bir öğe seçin…';
$string['chat:quiz_topic_sections'] = 'Ders bölümleri';
$string['chat:quiz_score_great'] = 'Harika iş! Bu konuyu gerçekten kavramışsınız.';
$string['chat:quiz_score_good'] = 'İyi iş! Anlayışınızı güçlendirmek için gözden geçirmeye devam edin.';
$string['chat:quiz_score_practice'] = 'Pratik yapmaya devam edin. İlgili ders içeriğini gözden geçirip testi yeniden çözmeyi deneyin.';
$string['chat:quiz_review_heading'] = 'Gözden geçirme';
$string['chat:quiz_retake'] = 'Testi yeniden çöz';
$string['chat:quiz_exit'] = 'Testten çık';
$string['chat:quiz_your_answer'] = 'Yanıtınız';
$string['chat:quiz_correct_answer'] = 'Doğru yanıt';

// Conversation starters.
$string['chat:starters_label'] = 'Konuşma başlatıcılar';
$string['chat:starter_quiz'] = 'Bunu bana sor';
$string['chat:starter_explain'] = 'Bunu açıkla';
$string['chat:starter_key_concepts'] = 'Temel kavramlar';
$string['chat:starter_study_plan'] = 'Çalışma planı';
$string['chat:starter_help_me'] = 'AI yardım';
$string['chat:starter_ai_project_coach'] = 'AI Proje Koçu';
$string['chat:starter_ell_practice'] = 'Konuşma pratiği';
$string['chat:starter_ell_pronunciation'] = 'ELL telaffuz';
$string['chat:starter_ai_coach'] = 'AI koç';
$string['chat:starter_speak'] = 'Bir başlatıcı söyle';

// Reset / home.
$string['chat:reset'] = 'Yeniden başla';

// Topic picker.
$string['chat:topic_picker_title'] = 'Neye odaklanmak istiyorsunuz?';
$string['chat:topic_picker_title_help'] = 'Neyle ilgili yardıma ihtiyacınız var?';
$string['chat:topic_picker_title_explain'] = 'Ne açıklamamı istiyorsunuz?';
$string['chat:topic_picker_title_study'] = 'Hangi alana odaklanmak istiyorsunuz?';
$string['chat:topic_start'] = 'Devam et';

// Expand states.
$string['chat:fullscreen'] = 'Tam ekran';
$string['chat:exitfullscreen'] = 'Tam ekrandan çık';

// Settings panel.
$string['chat:language'] = 'Dili değiştir';
$string['chat:settings_panel'] = 'Ayarlar';
$string['chat:settings_language'] = 'Dil';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Ses';
$string['chat:settings_voice_admin'] = 'Ses ayarları site yönetim panelinden yönetilmektedir.';

// Voice mode.
$string['chat:voice_mode'] = 'Ses modu';
$string['chat:voice_end'] = 'Ses oturumunu sonlandır';
$string['chat:voice_connecting'] = 'Bağlanıyor...';
$string['chat:voice_listening'] = 'Dinliyor...';
$string['chat:voice_speaking'] = 'SOLA konuşuyor...';
$string['chat:voice_idle'] = 'Hazır';
$string['chat:voice_error'] = 'Ses bağlantısı başarısız oldu. Lütfen ayarlarınızı kontrol edin.';
$string['chat:quiz_locked'] = 'Akademik dürüstlüğü korumak için testler sırasında SOLA duraklatılmıştır. İyi şanslar!';
$string['task:send_inactivity_reminders'] = 'Haftalık hareketsizlik hatırlatma e-postaları gönder';
$string['messageprovider:study_notes'] = 'Çalışma oturumu notları';
