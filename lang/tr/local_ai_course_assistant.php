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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Yeni kurslar için varsayılan';
$string['settings:default_course_mode_desc'] = 'Kurs başına bir seçim yapılmadığında bir kursta SOLA\'nın görünüp görünmeyeceğini kontrol eder. Yeni kurulumlar varsayılan olarak "Varsayılan olarak devre dışı" ayarına sahiptir, böylece yöneticiler Analytics sayfasından veya Course AI Settings sayfasından kurs kurs etkinleştirebilir.';
$string['settings:default_course_mode_per_course'] = 'Varsayılan olarak devre dışı (kurs başına etkinleştir)';
$string['settings:default_course_mode_all'] = 'Tüm kurslarda etkin';
$string['settings:auto_open'] = 'İlk ziyarette otomatik aç';
$string['settings:auto_open_desc'] = 'Etkinleştirildiğinde, bir öğrenci her derse ilk kez geldiğinde SOLA çekmecesi otomatik olarak açılır. Aynı derste sonraki sayfa yüklemeleri çekmeceyi tekrar açmaz — durum, öğrencinin tarayıcısında localStorage aracılığıyla ders bazında izlenir. Masaüstü ve mobilde geçerlidir. Course AI Settings sayfasından ders bazında geçersiz kılınabilir.';
$string['settings:comparison_providers'] = 'Karşılaştırma sağlayıcıları (LLM seçici)';
$string['settings:comparison_providers_desc'] = 'Yöneticilerin sağlayıcılar arasında yanıtları karşılaştırabilmesi için widget içi LLM seçiciye ek AI sağlayıcıları ekleyin. Satır eklemek için aşağıdaki tabloyu kullanın. Sıcaklık sütunu isteğe bağlıdır (küresel sıcaklığı kullanmak için boş bırakın). Saklanan format: provider_id|api_key|model1,model2|temperature. Yukarıda yapılandırılan birincil sağlayıcı her zaman otomatik olarak dahil edilir. Yalnızca yönetim yetkisine sahip yöneticiler seçiciyi görür; öğrenciler asla görmez. Geçerli provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Varsayılan AI sağlayıcı';
$string['settings:provider_desc'] = 'Sohbet tamamlamaları için kullanılacak AI sağlayıcısını seçin. İsteklerin Moodle\'ın Site admin > AI konumundaki yerleşik AI yapılandırması üzerinden yönlendirilmesi için "Moodle AI (core_ai subsystem)" seçeneğini seçin; bu modda aşağıdaki API anahtarı, model ve temel URL alanları yok sayılır. Streaming, araç kullanımı ve prompt caching core_ai üzerinden kullanılamaz — yanıtlar tek bir parça olarak iletilir. En iyi öğrenci deneyimi için doğrudan bir sağlayıcı kullanın.';
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
$string['coursesettings:sola_enabled'] = 'Bu kursta SOLA';
$string['coursesettings:sola_enabled_toggle'] = 'Bu kursta SOLA widget\'ini göster';
$string['coursesettings:sola_enabled_desc'] = 'SOLA sohbet widget\'inin bu kursta görünüp görünmeyeceğini kontrol eder. Site genelindeki varsayılan, General > Default for new courses altındaki eklenti ayarlarında belirlenir.';
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
$string['chat:clear'] = 'Ekranı temizle';
$string['chat:clear_confirm'] = 'Görünen mesajlar temizlensin mi? Tüm sohbet geçmişiniz kaydedilmiş olarak kalır ve widget\'ı yeniden açarak tekrar yüklenebilir.';
$string['chat:copy'] = 'Konuşmayı kopyala';
$string['chat:copied'] = 'Konuşma panoya kopyalandı';
$string['chat:copy_failed'] = 'Konuşma kopyalanamadı';
$string['chat:thinking'] = 'Düşünüyor...';
$string['chat:error'] = 'Üzgünüz, bir hata oluştu. Lütfen tekrar deneyin.';
$string['chat:error_auth'] = 'Kimlik doğrulama hatası. Lütfen yöneticinizle iletişime geçin.';
$string['chat:error_ratelimit'] = 'Çok fazla istek. Lütfen bir süre bekleyip tekrar deneyin.';
$string['chat:error_unavailable'] = 'AI hizmeti geçici olarak kullanılamıyor. Lütfen daha sonra tekrar deneyin.';
$string['chat:error_notconfigured'] = 'AI eğitmen henüz yapılandırılmadı. Lütfen yöneticinizle iletişime geçin.';
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
$string['chat:greeting'] = 'Merhaba, {$a}! Ben SOLA. Bugün size nasıl yardımcı olabilirim?';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Notlar';

// History panel.
$string['chat:history_title'] = 'Notlar ve Konuşma Geçmişi';
$string['task:send_inactivity_reminders'] = 'Haftalık hareketsizlik hatırlatma e-postaları gönder';
$string['task:run_meta_ai_query'] = 'Zamanlanmış Öğrenme Radarı analiz sorgusunu çalıştır';
$string['messageprovider:study_notes'] = 'Çalışma oturumu notları';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Ön Uç Dağıtımı';
$string['settings:cdn_heading_desc'] = 'SOLA ön uç varlıklarını (JS/CSS) Moodle dosya sistemi yerine harici bir CDN\'den sunun. Bu, eklenti yükseltmesi olmadan ön uç güncellemelerini sağlar. Yerel eklenti dosyalarını kullanmak için CDN URL\'sini boş bırakın.';
$string['settings:cdn_url'] = 'CDN Temel URL';
$string['settings:cdn_url_desc'] = 'sola.min.js ve sola.min.css\'nin barındırıldığı temel URL. Örnek: https://your-org.github.io/sola-cdn. Yerel eklenti dosyalarını kullanmak için boş bırakın.';
$string['settings:cdn_version'] = 'CDN Varlık Sürümü';
$string['settings:cdn_version_desc'] = 'Cache busting için CDN URL\'lerine eklenen sürüm dizesi. Her CDN dağıtımından sonra güncelleyin (ör. 3.2.4 veya commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Genel kullanım';
$string['analytics:tab_bycourse'] = 'Kursa göre';
$string['analytics:tab_comparison'] = 'AI vs kullanmayanlar';
$string['analytics:tab_byunit'] = 'Üniteye göre';
$string['analytics:tab_usagetypes'] = 'Kullanım türleri';
$string['analytics:tab_themes'] = 'Temalar';
$string['analytics:tab_feedback'] = 'AI geri bildirimi';
$string['analytics:total_students'] = 'Toplam öğrenci';
$string['analytics:active_users'] = 'Aktif AI kullanıcıları';
$string['analytics:msgs_per_student'] = 'Öğrenci başına mesaj';
$string['analytics:avg_session'] = 'Ortalama oturum süresi';
$string['analytics:return_rate'] = 'Geri dönüş oranı';
$string['analytics:total_sessions'] = 'Toplam oturum';
$string['analytics:thumbs_up'] = 'Beğen';
$string['analytics:thumbs_down'] = 'Beğenme';
$string['analytics:hallucination_flags'] = 'Yanlışlık işaretleri';
$string['analytics:msgs_to_resolution'] = 'Çözüme kadar mesaj';
$string['analytics:helpful'] = 'Faydalı';
$string['analytics:not_helpful'] = 'Faydalı değil';
$string['analytics:flag_hallucination'] = 'Bu yanıt yanlış bilgi içeriyor';
$string['analytics:submit_rating'] = 'Gönder';
$string['analytics:thanks_feedback'] = 'Geri bildiriminiz için teşekkürler';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Bu sayfayı açıkla';
$string['chat:starter_ask_anything'] = 'Herhangi bir şey sor';
$string['chat:starter_review_practice'] = 'Tekrar ve uygulama';
$string['chat:history_saved_subtitle'] = 'Kaydedilen yanıtlar bu kurs için bu cihazda kalır.';
$string['chat:history_saved_empty'] = 'Burada görmek için bir AI yanıtı kaydedin.';
$string['chat:history_views_label'] = 'Geçmiş görünümleri';
$string['chat:history_view_saved'] = 'Kaydedilenler';
$string['chat:history_view_recent'] = 'Geçmiş';
$string['chat:debug_refresh'] = 'Yenile';
$string['chat:debug_copy_all'] = 'Tümünü kopyala';
$string['chat:debug_close'] = 'Kapat';
$string['chat:language_switch'] = 'Dili değiştir';
$string['chat:language_dismiss'] = 'Dil önerisini kapat';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM sağlayıcısını seçin';
$string['chat:llm_model_label'] = 'Model';
$string['chat:llm_model_select'] = 'LLM modelini seçin';
$string['chat:footer_usertesting'] = 'Kullanılabilirlik testi';
$string['chat:footer_feedback'] = 'Geri bildirim';
$string['chat:voice_panel_title'] = '{$a} ile konuş (Deneysel)';

// Additional translated strings.
$string['chat:debug_context'] = 'Bağlam hata ayıklama';
$string['chat:debug_context_browser'] = 'Tarayıcı görüntüsü';
$string['chat:debug_context_copy'] = 'Kopyala';
$string['chat:debug_context_prompt'] = 'Sunucu yanıtı';
$string['chat:debug_context_request'] = 'Son SSE isteği';
$string['chat:debug_context_toggle'] = 'Denetçiyi aç/kapat';
$string['chat:history_empty'] = 'Henüz konuşma yok.';
$string['chat:history_refresh'] = 'Yenile';
$string['chat:history_subtitle'] = 'Son mesajlarınız.';
$string['chat:starter_explain_prompt'] = 'En önemli kavramı açıklayın?';
$string['chat:starter_help_lesson'] = 'Bunu açıklayın';
$string['chat:starter_help_lesson_prompt'] = 'Dersi anlamamda yardım edin. Temel kavramları özetleyin.';
$string['chat:starter_prompt_coach'] = 'AI Koçu';
$string['chat:starter_quick_study'] = 'Hızlı çalışma';
$string['chat:starter_study_plan_prompt'] = 'Çalışma planlamak istiyorum. Sorun: (1) hedef, (2) zaman. Planı güncelleyin.';
$string['chat:voice_copy'] = 'Asistanınızla sesli sohbet.';
$string['chat:voice_ready'] = 'Hazır';
$string['chat:voice_start'] = 'Başlat';
$string['chat:voice_title'] = 'SOLA ile konuşun';
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
$string['mobile_chip_concepts'] = 'Temel kavramlar';
$string['mobile_chip_quiz'] = 'Sınav';
$string['mobile_chip_studyplan'] = 'Çalışma planı';
$string['mobile_clear'] = 'Geçmişi temizle';
$string['mobile_disabled'] = 'SOLA bu kurs için kullanılamıyor.';
$string['mobile_placeholder'] = 'Bir soru sorun...';
$string['mobile_welcome'] = 'Merhaba, {$a}!';
$string['mobile_welcome_sub'] = 'Ben SOLA, öğrenme asistanınız. Size nasıl yardımcı olabilirim?';
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
$string['rubric:done'] = 'Tamamlandı';
$string['rubric:encourage_high'] = 'Mükemmel! Devam edin!';
$string['rubric:encourage_low'] = 'İyi başlangıç! Düzenli pratik yardımcı olacak.';
$string['rubric:encourage_mid'] = 'İyi çaba! Pratik yapmaya devam edin.';
$string['rubric:overall'] = 'Genel';
$string['rubric:practice_again'] = 'Tekrar pratik yapın';
$string['rubric:score_title_conversation'] = 'Konuşma pratiği puanı';
$string['rubric:score_title_pronunciation'] = 'Telaffuz pratiği puanı';
$string['rubric:scoring'] = 'Değerlendiriliyor...';
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
$string['demo:title'] = 'Test ortamı';
$string['demo:heading'] = 'Test ortamı';
$string['demo:intro'] = 'Bu sayfa <strong>öğrencilerden gizli</strong> (visible=0) bir test kursu oluşturur ve onu sahte öğrenciler, AI konuşmaları, derecelendirmeler ve geri bildirimlerle doldurur. Analytics Dashboard\'u önizlemek veya eklenti değişikliklerini doğrulamak için gerçek kayıtlı bir öğrenciyi etkilemeden faydalıdır.';
$string['demo:step1'] = 'Adım 1: test kursu';
$string['demo:step2'] = 'Adım 2: sahte öğrenciler ve AI sohbetleri ekle';
$string['demo:course_exists'] = 'Test kursu mevcut: <strong>{$a->fullname}</strong> (kısa ad <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'gizli';
$string['demo:badge_visible'] = 'öğrencilere görünür';
$string['demo:no_course'] = 'Test kursu bulunamadı. Oluşturmak için aşağıya tıklayın.';
$string['demo:create_btn'] = 'Gizli test kursu oluştur';
$string['demo:open_course'] = 'Kursu aç &rarr;';
$string['demo:seed_intro'] = 'demo_student_001, demo_student_002, ... oluşturur, onları test kursuna kaydeder ve sentetik konuşmalar, mesajlar, derecelendirmeler ve geri bildirim ekler. Daha fazla veri eklemek için tekrar çalıştırın veya baştan başlamak için „önce temizle“yi işaretleyin.';
$string['demo:users_label'] = 'Kullanıcılar';
$string['demo:weeks_label'] = 'Haftalar';
$string['demo:clear_label'] = 'Mevcut demo_* kullanıcılarını önce temizle';
$string['demo:seed_btn'] = 'Öğrenci ve sohbet ekle';
$string['demo:view_analytics'] = 'Bu kursun analizlerini görüntüle &rarr;';
$string['demo:footer'] = 'Burada oluşturulan veriler standart Moodle kullanıcı / kayıt tablolarında ve eklentinin kendi konuşma tablolarında bulunur. Tüm sahte kullanıcıların kullanıcı adları <code>demo_student_</code> ile başlar, böylece kolayca filtrelenebilir veya kaldırılabilirler. Onları kaldırmak için, „Mevcut demo_* kullanıcılarını önce temizle“ işaretli olarak seed adımını tekrar çalıştırın.';
$string['demo:course_fullname'] = 'SOLA Test Kursu (gizli)';
$string['demo:notify_created'] = 'Test kursu hazır: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Kurs oluşturulamadı: {$a}';
$string['demo:notify_seeded'] = 'Eklendi: {$a->users} kullanıcı, {$a->conversations} konuşma, {$a->messages} mesaj, {$a->ratings} derecelendirme, {$a->feedback} geri bildirim kaydı.';
$string['demo:notify_seed_fail'] = 'Veri eklenemedi: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'Token Maliyeti ve Analitik &rarr;';
$string['toc:testing'] = 'Test ortamı &rarr;';
$string['toc:back_to_course'] = '&larr; {$a} geri dön';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext ikili dosyası bulunamadı; PDF çıkarma devre dışı.';
$string['rag:pdftotext_available'] = 'pdftotext {$a} konumunda algılandı.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive uzantısı kullanılamıyor; DOCX çıkarma devre dışı.';
$string['rag:h5p_unavailable'] = 'H5P içeriği okunamadı; atlanıyor.';
$string['rag:scorm_too_large'] = 'SCORM paketi yapılandırılmış boyut sınırını ({$a} MB) aşıyor; atlanıyor.';
$string['rag:scorm_unzip_failed'] = 'SCORM paketi açılamadı; atlanıyor.';
$string['rag:transcript_fetch_failed'] = '{$a} adresinden metin alınamadı.';
$string['rag:transcript_cf_challenge'] = 'Metin URL\'si Cloudflare sorgulaması tarafından engellendi: {$a}.';
$string['rag:embed_detected'] = 'Gömülü medya algılandı: {$a}';
$string['rag:embed_transcript_attached'] = '{$a} için metin eklendi';

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
