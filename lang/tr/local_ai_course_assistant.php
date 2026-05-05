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
$string['attachment:attach'] = 'Ekle';
$string['attachment:attach_image_or_pdf'] = 'Resim veya PDF ekle';
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
$string['reminder:email_body_no_hours'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['reminder:email_body_with_prefs'] = 'Hi {$a->firstname},

This is your study reminder for "{$a->coursename}".

{$a->message}

Your study plan: {$a->hours_per_week} hours per week, on {$a->preferred_days} ({$a->preferred_time}).

Keep up the great work!

---
To stop receiving these reminders, click here: {$a->unsubscribe_url}';
$string['studytip:pomodoro']            = 'Try the Pomodoro technique: 25 minutes of focused study, then a 5-minute break.';
$string['studytip:review_notes']        = 'Review your notes from the last session before starting new material.';
$string['studytip:active_recall']       = 'Test yourself on what you learned recently — active recall strengthens memory.';
$string['studytip:summarise']           = 'Take a few minutes to summarise what you have learned in your own words.';
$string['studytip:mix_modes']           = 'Mix different types of study: reading, practice problems, and teaching concepts to others.';
$string['studytip:tackle_hard_first']   = 'Start with the most challenging topic while your energy is highest.';
$string['studytip:connect_concepts']    = 'Create connections between new concepts and what you already know.';
$string['studytip:short_breaks']        = 'Take short breaks to stay focused — a refreshed mind learns better.';
$string['studyplan:hours_out_of_range'] = 'Hours per week must be between {$a->min} and {$a->max}. Got {$a->got}. Please tell SOLA a different number and it will save your plan.';
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
$string['chat:quiz_topic_adaptive']      = 'Uyarlamalı — zayıf noktalarıma odaklan';
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
$string['settings:provider_together'] = 'Together AI (Llama 3.1 8B/70B/405B Turbo, Mistral, Qwen)';
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
$string['chat:voice_panel_title']       = 'Talk with {$a}';

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

// v5.2.0: per-quiz SOLA assistance level controls.
$string['quizsettings:title'] = 'Quiz Assistance Levels';
$string['quizsettings:desc'] = 'Choose how much help SOLA gives on each quiz. "Default" uses the legacy rule: ungraded quizzes get full help, graded quizzes hide the widget. Use "Coach" to keep SOLA available on a graded quiz but block direct answers.';
$string['quizsettings:colquiz'] = 'Quiz';
$string['quizsettings:colgrade'] = 'Max grade';
$string['quizsettings:collevel'] = 'Assistance level';
$string['quizsettings:coleffective'] = 'Effective';
$string['quizsettings:level_default'] = 'Default (by grade)';
$string['quizsettings:level_full'] = 'Full help';
$string['quizsettings:level_coach'] = 'Coach (Socratic only)';
$string['quizsettings:level_hidden'] = 'Hidden';
$string['quizsettings:ungraded'] = 'Ungraded';
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

// v3.9.10–v3.9.14 new strings.
$string['usersettings:download'] = '{$a} verilerimi indir';
$string['usersettings:download_help'] = 'Hesabınıza bağlı her {$a} kaydının tam JSON kopyasını indirin: konuşmalar, mesajlar, derecelendirmeler, çalışma planları, hatırlatmalar, pratik puanları, anket yanıtları, profil ve denetim girdileri.';
$string['usersettings:privacy_notice_link'] = '{$a} gizlilik bildirimini okuyun';
$string['privacy:title'] = '{$a} Gizlilik Bildirimi';
$string['admin:user_data:title'] = '{$a} — Öğrenci verisi dışa aktarma ve silme';
$string['admin:user_data:intro'] = 'GDPR Madde 15 (erişim) veya Madde 17 (silme) talebi için operasyonel yol. Bir öğrenciyi Moodle kullanıcı kimliği ile arayın, eklentinin onun için tuttuğu satırları gözden geçirin, dışa aktarın veya silin.';
$string['admin:user_data:search_label'] = 'Moodle kullanıcı kimliği';
$string['admin:user_data:lookup'] = 'Ara';
$string['admin:user_data:not_found'] = 'Bu kimlikle kullanıcı bulunamadı.';
$string['admin:user_data:download'] = 'Tüm öğrenci verilerini JSON olarak indir';
$string['admin:user_data:purge'] = 'Bu kullanıcıya ait tüm öğrenci verilerini sil';
$string['admin:user_data:confirm_purge'] = '{$a} için tüm kayıtlar kalıcı olarak silinsin mi? Bu işlem konuşmaları, mesajları, derecelendirmeleri, çalışma planlarını, hatırlatmaları, profilleri, pratik puanlarını, anketleri, denetim girdilerini ve geri bildirimleri kapsar. Bu eylem geri alınamaz.';
$string['admin:user_data:purged'] = 'Seçili kullanıcıya ait tüm veriler silindi.';
$string['chat:consent_heading'] = '{$a->product} ile sohbet etmeden önce';
$string['chat:consent_body'] = '{$a->product} bir AI destekli öğrenme asistanıdır. Mesajlarınız ve {$a->product} yanıtları {$a->institution} kuruluşunun Moodle veritabanında saklanır ve sorularınızı cevaplamak için en son on tur onaylı bir AI model sağlayıcısına gönderilir. Kişiselleştirme için adınız paylaşılır; AI sağlayıcısına başka kimlik bilgisi gönderilmez. {$a->product} hizmetini istediğiniz zaman indirebilir, silebilir veya kullanmayı bırakabilirsiniz.';
$string['chat:consent_accept'] = 'Anladım, {$a} başlat';
$string['chat:consent_privacy_link'] = 'Tam gizlilik bildirimini oku';
$string['task:audit_cleanup'] = 'AI Course Assistant denetim tablosu temizliği';
$string['task:conversation_retention'] = 'AI Course Assistant konuşma saklama temizleyicisi';
$string['settings:audit_retention_days'] = 'Denetim günlüğü saklama (gün)';
$string['settings:audit_retention_days_desc'] = 'Günlük zamanlanmış görev bundan eski denetim satırlarını siler. 0 devre dışı bırakır. Varsayılan 365.';
$string['settings:conversation_retention_days'] = 'Konuşma saklama (gün)';
$string['settings:conversation_retention_days_desc'] = 'Günlük zamanlanmış görev, son değiştirilme zamanı bundan eski olan konuşma satırlarını siler. 0 devre dışı bırakır. Varsayılan 730.';
$string['settings:ssrf_trusted_endpoints'] = 'SSRF güvenilir uç noktaları';
$string['settings:ssrf_trusted_endpoints_desc'] = 'Satır başına bir URL. Listelenen ana bilgisayarlar SOLA\'nın SSRF doğrulayıcısındaki loopback / özel-IP / yalnızca-https kontrollerini atlar. Bunu yalnızca kontrol ettiğiniz bir ağdaki kendi kendine barındırılan LLM\'ler için kullanın — örneğin yerel Ollama için <code>http://localhost:11434</code>, aynı VPC\'deki bir vLLM podu için <code>http://10.0.0.5:8000</code>. Karşılaştırma scheme + host + port ile eşleşir; herhangi bir yol göz ardı edilir. Varsayılan olarak boş (her şeyi dahili olarak engeller). <code>#</code> ile başlayan satırlar yorumlardır.';
$string['task:learner_weekly_digest']    = 'AI Kurs Asistanı - Öğrenci Haftalık Özeti';
$string['learner_digest:subject']        = '{$a->course} ile haftan - {$a->product}';
$string['learner_digest:optin_offer']    = 'Bir sonraki adımda neye odaklanacağına dair kısa haftalık e-posta ister misin?';
$string['next_best_action:get_started']           = '{$a->title} ile başla. Beni aç ve "bana {$a->title} konusunda yardım et" diye sor.';
$string['next_best_action:get_started_with_module'] = '{$a->title} ile başla. "{$a->module}" modülü bunu kapsıyor.';
$string['next_best_action:review']                = '{$a->title}\'in temellerini gözden geçir — beni aç ve "bana {$a->title}\'i yeni biri gibi açıkla" diye sor.';
$string['next_best_action:review_with_module']    = '"{$a->module}" içinde {$a->title}\'in temellerini gözden geçir, sonra sorularla beni aç.';
$string['next_best_action:practice']              = '{$a->title}\'de elinde olanın üzerine inşa et. Beni aç ve "{$a->title} için çözülmüş bir örnek ver" diye sor.';
$string['next_best_action:practice_with_module']  = '"{$a->module}" ile birlikte {$a->title} alıştırması yap. Çözülmüş örnekler için beni aç.';
$string['next_best_action:quiz']                  = '{$a->title}\'i hızlı bir testle pekiştir. Beni aç ve "Beni sına — uyarlamalı" seç.';
$string['next_best_action:quiz_with_module']      = '{$a->title}\'i hızlı bir testle pekiştir. "{$a->module}" modülü onun yaşadığı yer.';
$string['next_best_action:empty_state']           = 'Şu anda her hedefte harika gidiyorsun — hatırlatacak bir şey yok. Devam et.';
$string['next_best_action:header']                = 'Sonra odaklanılacak {$a} şey:';
$string['learner_digest:unsubscribe_done_title']  = 'Abonelikten çıkıldı';
$string['learner_digest:unsubscribe_done_body']   = 'Tamam — bu kurs için {$a->product}\'tan artık haftalık e-posta almayacaksın. Kurs sohbet penceresinden istediğin zaman tekrar abone olabilirsin.';
$string['learner_digest:unsubscribe_invalid_title'] = 'Abonelikten çıkma bağlantısı artık geçerli değil';
$string['learner_digest:unsubscribe_invalid_body']  = 'Bu abonelikten çıkma bağlantısının süresi dolmuş veya hatalı. E-posta tercihlerini kursunun ayarlarından yönetebilirsin.';
$string['active_learners:line']                   = '{$a} kişi şu anda bu kursu çalışıyor.';
$string['active_learners:line_global']             = '{$a} kişi şu anda çalışıyor.';
$string['settings:active_learners_scope']          = 'Aktif öğrenci göstergesi kapsamı';
$string['settings:active_learners_scope_desc']     = 'Sohbet başlatıcılarının üzerindeki "diğerleri şu anda çalışıyor" göstergesinin yalnızca aynı kurstaki öğrencileri mi yoksa tüm sitedeki öğrencileri mi saydığı. Varsayılan <strong>global</strong>.';
$string['settings:active_learners_scope_global']   = 'Global (herhangi bir kurs)';
$string['settings:active_learners_scope_course']   = 'Yalnızca kurs başına';
$string['learner_digest:optin_yes']      = 'Evet, haftalık e-postayı bana gönderin';
$string['learner_digest:optin_no']       = 'Hayır teşekkürler';
$string['learner_digest:optin_thanks']   = 'Anlaşıldı. Her Pazartesi haftalık özet alacaksın.';
$string['learner_digest:optin_declined'] = 'Anlaşıldı. E-posta yok - kontrol etmek istediğinde beni aç.';
$string['settings:xai_proxy_url'] = 'xAI Realtime proxy URL';
$string['settings:xai_proxy_url_desc'] = 'SOLA xAI Realtime proxy hizmetinin genel wss URL\'si (örneğin wss://voice.example.com/xai-rt/rt). JWT gizli anahtarıyla birlikte ayarlandığında, xAI sesi proxy üzerinden yönlendirilir ve ana xAI API anahtarı tarayıcıya hiç ulaşmaz. Doğrudan bağlantıya geri dönmek için boş bırakın (üretim için önerilmez).';
$string['settings:xai_proxy_jwt_secret'] = 'xAI Realtime proxy JWT gizli anahtarı';
$string['settings:xai_proxy_jwt_secret_desc'] = 'xAI Realtime proxy için kısa ömürlü oturum belirteçlerini imzalamak için kullanılan HS256 paylaşılan gizli anahtarı. Cloudflare Worker üzerindeki MOODLE_JWT_SECRET gizli anahtarıyla eşleşmelidir. Düzenli aralıklarla değiştirin.';
$string['admin:vendor_dpa:title'] = '{$a} — Tedarikçi DPA durumu';
$string['admin:vendor_dpa:intro'] = 'Her AI sağlayıcı sürücüsü için eğitim opt-out, DPA ve saklama duruşu. Sitenizde hangi sürücülerin etkinleştirileceğine karar vermek için kullanın. Tier 2 ve üzeri yönlendirme imzalı bir DPA ve sözleşmeli bir eğitim opt-out gerektirir.';
$string['admin:vendor_dpa:maintenance_note'] = 'Bu tablo classes/vendor_registry.php dosyasında bakım altındadır. Bir tedarikçi ToS değişikliği geldiğinde güncelleyin.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'Veri Koruma Görevlisi e-postası';
$string['settings:dpo_email_desc'] = 'Öğrenciye yönelik gizlilik bildiriminin "Contact" bölümünde gösterilen iletişim e-postası. Satırı gizlemek için boş bırakın. Yeniden markalanmış kurulumlar bunu kendi DPO\'larına yönlendirmelidir.';
$string['settings:privacy_external_url'] = 'Kurum gizlilik sayfası URL\'si';
$string['settings:privacy_external_url_desc'] = 'Kurum düzeyinde gizlilik sayfasına bağlantı, öğrenciye yönelik gizlilik bildiriminin "Contact" bölümünde gösterilir. Satırı gizlemek için boş bırakın.';
$string['settings:privacy_notice_override'] = 'Gizlilik bildirimi geçersiz kılma (HTML)';
$string['settings:privacy_notice_override_desc'] = 'Ayarlanırsa, bu HTML /local/ai_course_assistant/privacy.php adresinde gösterilen varsayılan markalanmış gizlilik bildirimini değiştirir. Kodu düzenlemeden kurumunuz için Legal tarafından incelenmiş metni eklemek için kullanın. Yedi markalama yapılandırma anahtarından metin türeten varsayılan bildirimi kullanmak için boş bırakın.';
$string['objectives:title'] = 'Öğrenme hedefleri ve uzmanlık';
$string['objectives:toggles_heading'] = 'Uzmanlık takibi';
$string['objectives:toggle_master'] = 'Bu kurs için uzmanlık takibini etkinleştir';
$string['objectives:toggle_chip'] = 'Öğrenme Uzmanlığı çipini öğrencilere göster';
$string['objectives:toggle_chip_help'] = 'İsteğe bağlı. Kapalı olduğunda uzmanlık asistanı sessizce yönlendirmeye devam eder, ancak öğrenciler hiçbir gösterge görmez.';
$string['objectives:toggled'] = 'Ayar güncellendi.';
$string['objectives:detected_heading'] = '{$a->source} kaynağından {$a->count} öğrenme hedefi tespit edildi.';
$string['objectives:source_competency'] = 'Moodle yetkinlikleri';
$string['objectives:source_summary'] = 'kurs özeti';
$string['objectives:source_section'] = 'bölüm veya ilk sayfa içeriği';
$string['objectives:source_page'] = 'kurs sayfası';
$string['objectives:source_llm'] = 'AI çıkarımı';
$string['objectives:source_manual'] = 'manuel giriş';
$string['objectives:source_none'] = 'otomatik kaynak yok';
$string['objectives:import_detected'] = 'Tespit edilen bu hedefleri içe aktar';
$string['objectives:import_llm'] = 'AI ile hedefleri çıkar';
$string['objectives:llm_empty'] = 'AI çıkarımı herhangi bir hedef döndürmedi. Daha sonra tekrar deneyin veya manuel olarak girin.';
$string['objectives:imported'] = '{$a} hedef içe aktarıldı.';
$string['objectives:none_detected'] = 'Otomatik olarak öğrenme hedefi tespit edilmedi. Aşağıya manuel olarak girin veya AI çıkarımını kullanın.';
$string['objectives:list_heading'] = 'Mevcut hedefler';
$string['objectives:col_code'] = 'Kod';
$string['objectives:col_title'] = 'Başlık';
$string['objectives:col_source'] = 'Kaynak';
$string['objectives:col_actions'] = 'Eylemler';
$string['objectives:add_heading'] = 'Hedef ekle';
$string['objectives:add_submit'] = 'Hedef ekle';
$string['objectives:saved'] = 'Hedef kaydedildi.';
$string['objectives:deleted'] = 'Hedef silindi.';
$string['objectives:delete_confirm'] = 'Bu hedefi ve onun için tüm deneme geçmişini silmek istiyor musunuz?';
$string['objectives:delete_all'] = 'Bu kursa ait tüm hedefleri sil';
$string['objectives:delete_all_confirm'] = 'Bu kursa ait her hedefi ve tüm deneme geçmişini silmek istiyor musunuz? Geri alınamaz.';
$string['objectives:deleted_all'] = 'Bu kursa ait tüm hedefler silindi.';
$string['mastery:chip_aria'] = 'Öğrenme uzmanlığı durumu';
$string['mastery:popover_aria'] = 'Öğrenme uzmanlığı detayları';
$string['mastery:chip_label'] = '{$a->total} hedeften {$a->mastered} tanesinde uzmanlık';
$string['mastery:status_mastered'] = 'uzmanlaşıldı';
$string['mastery:status_learning'] = 'devam ediyor';
$string['mastery:status_not_started'] = 'başlanmadı';
$string['mastery:popover_empty'] = 'Bu kurs için yapılandırılmış öğrenme hedefi yok.';
$string['settings:mastery_heading'] = 'Uzmanlık takibi';
$string['settings:mastery_heading_desc'] = 'Sınav cevaplarını ve asistan konuşma turlarını kursun öğrenme hedeflerine göre etiketleyen, ardından sorgulamayı yönlendirmek için kompakt bir uzmanlık anlık görüntüsünü system prompt\'a geri besleyen, kurs başına opt-in bir özellik. Varsayılan olarak ince: Kurs başına çip anahtarı açık olmadığı sürece öğrenciler hiçbir şey görmez.';
$string['settings:mastery_threshold'] = 'Uzmanlık eşiği';
$string['settings:mastery_threshold_desc'] = 'Bir hedefin uzmanlaşıldığı kabul edileceği rolling doğruluk değeri veya üzeri. 0.0 ile 1.0 arasında. Varsayılan 0.85.';
$string['settings:mastery_window'] = 'Deneme penceresi';
$string['settings:mastery_window_desc'] = 'Rolling doğruluğa ağırlık verilecek hedef başına en son deneme sayısı. Varsayılan 8.';
$string['settings:mastery_decay_enabled']        = 'Ustalık azalmasını etkinleştir';
$string['settings:mastery_decay_enabled_desc']   = 'Açıkken, ustalık puanları en son deneme zaman damgasına karşı zamanla azalır. Daha önce ustalaşılmış bir hedef yeterli zaman geçtikten sonra "öğreniyor" durumuna döner. "Öğreniyor"un altına düşmez. <strong>v4.0\'da varsayılan kapalı.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'Ustalık azalmasının yarı ömrü (gün)';
$string['settings:mastery_decay_half_life_days_desc'] = 'Gün cinsinden yarı ömür. Puan 0.5 ^ (son denemeden bu yana geçen gün / yarı ömür) ile çarpılır. Varsayılan 30. Yalnızca azalma etkinleştirildiğinde kullanılır.';
$string['settings:mastery_classifier_model'] = 'Sınıflandırıcı modeli';
$string['settings:mastery_classifier_model_desc'] = 'Asistan turlarını hedeflere göre sınıflandırmak için kullanılan model. Varsayılan AI sağlayıcı modelini devralmak için boş bırakın; aksi halde gpt-4o-mini gibi ucuz bir model belirtin.';
$string['settings:mastery_classifier_weight'] = 'Sınıflandırıcı ağırlığı';
$string['settings:mastery_classifier_weight_desc'] = 'Bir konuşma denemesinin bir sınav denemesine (1.0) göre ne kadar sayılacağı. Varsayılan 0.3.';
$string['settings:mastery_classifier_threshold'] = 'Sınıflandırıcı güven eşiği';
$string['settings:mastery_classifier_threshold_desc'] = 'Bir konuşma denemesini kaydetmek için gereken minimum sınıflandırıcı güveni. 0.0 ile 1.0 arasında. Varsayılan 0.7.';
$string['chat:mode_progress'] = 'İlerleme';
$string['objectives:toggle_dashboard'] = 'İlerleme panosu sekmesini öğrencilere göster';
$string['objectives:toggle_dashboard_help'] = 'İsteğe bağlı. Widget içinde Chat / Voice / History yanına bir İlerleme sekmesi ekler. Sekme öğrencilere hangi hedeflerde uzmanlaştıklarını, hangilerinin devam ettiğini ve hangilerine başlamadıklarını gösterir.';
$string['mastery:dashboard_title'] = 'Öğrenme ilerlemeniz';
$string['mastery:dashboard_subtitle'] = 'Uzmanlık, sınav cevaplarınızdan ve sohbet pratiğinizden ölçülür. Devam edin — derinlik kapsamı yener.';
$string['mastery:dashboard_refresh'] = 'Yenile';
$string['mastery:section_mastered'] = 'Uzmanlaşıldı';
$string['mastery:section_learning'] = 'Devam ediyor';
$string['mastery:section_not_started'] = 'Henüz başlanmadı';
$string['mastery:summary_label'] = '{$a->total} hedeften {$a->mastered} tanesinde uzmanlık';
$string['mastery:ask_about'] = 'Bu konuda sor';
$string['mastery:celebrate'] = 'Bu kursa ait her hedefte uzmanlaştınız. Mükemmel iş.';
$string['mastery:ask_template'] = 'Bu hedefi pratik etmemde ve anlayışımı derinleştirmemde bana yardım edin: {$a}.';
$string['instructor_dashboard:title'] = '{$a} — Course Instructor & Designer Dashboard';
$string['instructor_dashboard:short']            = 'Instructor & Designer Dashboard';
$string['coursepicker:title']                    = 'Select a course — {$a}';
$string['coursepicker:intro']                    = 'Choose a course from the list below to open this page in that course\'s context. Direct links with a courseid parameter still work as before.';
$string['coursepicker:nocourses']                = 'You do not have access to any courses where this page applies. Contact your site administrator if you believe this is incorrect.';
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
$string['pedagogy:talking_avatar_desc']    = 'When on, the talking-avatar surface is enabled in every course unless the course has its own override. Requires a configured provider (D-ID, HeyGen, Tavus, or Synthesia Agents) below; otherwise the widget shows a "configure a provider" notice and the avatar does not animate.';
$string['settings:talking_avatar_heading']      = 'Talking avatar';
$string['settings:talking_avatar_heading_desc'] = 'Pick which talking-avatar vendor SOLA opens for students when the avatar surface is enabled. SOLA ships drivers for D-ID (cheapest WebRTC streaming), HeyGen (LiveKit-backed interactive avatars), Tavus (drop-in iframable Conversational Video Interface), and Synthesia Agents (real-time agent product, configured in the Synthesia dashboard). Per-provider key + persona id appear below; only the chosen provider needs to be filled in. Every outbound call is SSRF-checked.';
$string['settings:talking_avatar_provider_url']      = 'Provider API base URL (legacy)';
$string['settings:talking_avatar_provider_url_desc'] = 'v4.8.1 placeholder, kept for upgrade safety. The active drivers in v4.9.0 read their own per-provider settings; this field is only used as a fallback when an admin upgraded mid-release.';
$string['settings:talking_avatar_provider_api_key']      = 'Provider API key (legacy)';
$string['settings:talking_avatar_provider_api_key_desc'] = 'v4.8.1 placeholder, kept for upgrade safety. The active drivers in v4.9.0 read their own per-provider settings; this field is only used as a fallback when an admin upgraded mid-release.';
$string['settings:talking_avatar_provider']      = 'Talking avatar provider';
$string['settings:talking_avatar_provider_desc'] = 'Pick the vendor whose key + persona id are filled in below. Leave as <em>None</em> until the institution has signed off; the pedagogy default still appears in <em>Pedagogy defaults</em> but the widget shows a configuration notice instead of an avatar.';
$string['settings:talking_avatar_provider_none']      = 'None (avatar disabled)';
$string['settings:talking_avatar_provider_did']       = 'D-ID Streaming Talks';
$string['settings:talking_avatar_provider_heygen']    = 'HeyGen Interactive Avatar';
$string['settings:talking_avatar_provider_tavus']     = 'Tavus Conversational Video';
$string['settings:talking_avatar_provider_synthesia'] = 'Synthesia Agents (real-time)';
$string['settings:talking_avatar_did_api_key']         = 'D-ID API key';
$string['settings:talking_avatar_did_api_key_desc']    = 'Base64-encoded <code>email:api-key</code> string from <a href="https://studio.d-id.com/account-settings" target="_blank" rel="noopener">D-ID Studio → Account → API keys</a>. Sent as <code>Authorization: Basic …</code>.';
$string['settings:talking_avatar_did_persona_id']      = 'D-ID source image URL';
$string['settings:talking_avatar_did_persona_id_desc'] = 'Public HTTPS URL of the still image D-ID animates (or a Studio presenter URL such as <code>https://create-images-results.d-id.com/…</code>). Required for every stream.';
$string['settings:talking_avatar_heygen_api_key']         = 'HeyGen API key';
$string['settings:talking_avatar_heygen_api_key_desc']    = 'API key from <a href="https://app.heygen.com/settings?nav=API" target="_blank" rel="noopener">HeyGen → Settings → API</a>. Sent as <code>X-Api-Key</code>.';
$string['settings:talking_avatar_heygen_persona_id']      = 'HeyGen interactive avatar id';
$string['settings:talking_avatar_heygen_persona_id_desc'] = 'Avatar id from the HeyGen Streaming Avatar dashboard (e.g. <code>Tyler-incasualsuit-20220721</code>).';
$string['settings:talking_avatar_tavus_api_key']         = 'Tavus API key';
$string['settings:talking_avatar_tavus_api_key_desc']    = 'API key from <a href="https://platform.tavus.io/api-keys" target="_blank" rel="noopener">Tavus platform → API keys</a>. Sent as <code>x-api-key</code>.';
$string['settings:talking_avatar_tavus_persona_id']      = 'Tavus replica id';
$string['settings:talking_avatar_tavus_persona_id_desc'] = 'Replica id (the trained likeness) you want SOLA to converse as. Combine with a persona id by appending it to the API key field if needed; SOLA will pass <code>persona_id</code> through.';
$string['settings:talking_avatar_synthesia_api_key']         = 'Synthesia API key';
$string['settings:talking_avatar_synthesia_api_key_desc']    = 'API key from <a href="https://app.synthesia.io/#/account/api" target="_blank" rel="noopener">Synthesia → Account → API</a>. Sent as <code>Authorization</code> header (Synthesia accepts the raw key).';
$string['settings:talking_avatar_synthesia_persona_id']      = 'Synthesia agent id';
$string['settings:talking_avatar_synthesia_persona_id_desc'] = 'Agent id created in the Synthesia Agents dashboard. Knowledge, persona, and allowed origins are configured agent-side; SOLA only opens a session against this id.';
$string['talking_avatar:disabled']        = 'Talking avatar is not enabled for this course.';
$string['talking_avatar:unconfigured']    = 'Talking avatar is enabled but no provider has been configured. An administrator must pick a provider and supply credentials in plugin settings.';
$string['talking_avatar:session_failed']  = 'The talking-avatar provider declined the session request. Check the provider configuration or try again in a moment.';
$string['talking_avatar:viewer_title']    = 'SOLA talking avatar';
$string['talking_avatar:bundle_required'] = 'The talking-avatar viewer requires the SOLA CDN bundle to be configured. Ask an administrator to set the CDN bundle URL in plugin settings.';
$string['talking_avatar:open']            = 'Open avatar';
$string['talking_avatar:close']           = 'Close avatar';
$string['settings:avatar_rate_card_overrides']      = 'Avatar rate card overrides (JSON)';
$string['settings:avatar_rate_card_overrides_desc'] = 'JSON object keyed by avatar provider with a single per-minute USD rate. Replaces the bundled rate for that provider. Example: <pre>{ "did": 0.18, "heygen": 0.40, "tavus": 0.25 }</pre> Empty = use the v4.10.0 bundled defaults: D-ID $0.30/min, HeyGen $0.50/min, Tavus $0.30/min, Synthesia $0.40/min. Set this to your contracted rate so the analytics dashboard reflects the institution\'s actual cost.';
$string['settings:talking_avatar_did_webhook_secret']         = 'D-ID webhook signing secret';
$string['settings:talking_avatar_did_webhook_secret_desc']    = 'Optional. When set, D-ID can POST session-end events to <code>{wwwroot}/local/ai_course_assistant/talking_avatar_webhook.php?provider=did</code> signed with this secret as <code>X-DID-Signature</code> (hex HMAC-SHA256). Webhook rows take precedence over the frontend heartbeat. Empty = handler off, the heartbeat + hourly sweeper handle session-end exclusively.';
$string['settings:talking_avatar_heygen_webhook_secret']      = 'HeyGen webhook signing secret';
$string['settings:talking_avatar_heygen_webhook_secret_desc'] = 'Optional. When set, HeyGen can POST session-end events signed with this secret as <code>X-HeyGen-Signature</code> (hex HMAC-SHA256). Empty = handler off.';
$string['settings:talking_avatar_tavus_webhook_secret']       = 'Tavus webhook signing secret';
$string['settings:talking_avatar_tavus_webhook_secret_desc']  = 'Optional. When set, Tavus can POST conversation-end events signed with this secret as <code>X-Tavus-Signature</code> (hex HMAC-SHA256). Empty = handler off.';
$string['settings:talking_avatar_synthesia_webhook_secret']   = 'Synthesia webhook signing secret';
$string['settings:talking_avatar_synthesia_webhook_secret_desc'] = 'Optional. When set, Synthesia can POST agent session-end events signed with this secret as <code>X-Synthesia-Signature</code> (hex HMAC-SHA256). Empty = handler off.';
$string['analytics:avatar_cost_heading']     = 'Talking-avatar usage';
$string['analytics:avatar_cost_provider']    = 'Provider';
$string['analytics:avatar_cost_sessions']    = 'Sessions';
$string['analytics:avatar_cost_minutes']     = 'Minutes';
$string['analytics:avatar_cost_rate']        = 'Per-minute rate';
$string['analytics:avatar_cost_total']       = 'Estimated total';
$string['analytics:avatar_cost_empty']       = 'No talking-avatar sessions in the selected period.';
$string['task:sweep_avatar_sessions']        = 'Close stale talking-avatar sessions';
$string['settings:prompt_debug_enabled']      = 'Log assembled system prompt to file';
$string['settings:prompt_debug_enabled_desc'] = 'When on, every chat-turn writes the full assembled system prompt and per-section character counts to <code>moodledata/temp/sola_prompt_debug.log</code> (rolling at ~1MB). Default off. Use to measure prompt size empirically and audit which sections contribute the most tokens. The log contains the system prompt only (no learner input or PII).';
$string['settings:socratic_verbose']      = 'Verbose Socratic mode prompt';
$string['settings:socratic_verbose_desc'] = 'When on, Socratic-mode courses receive the full ~600-token do/don\'t directive originally added in v3.9.30. When off (default), they receive a single-line directive that modern hosted models follow reliably and saves ~600 tokens per turn. Turn this on if a course is running on a weaker self-hosted model that needs the explicit scaffolding.';
$string['settings:prompt_budget_chars']      = 'System prompt character budget';
$string['settings:prompt_budget_chars_desc'] = 'Maximum total size of the assembled system prompt before the user message, in characters. The structured prompt builder organises sections by category (identity, course context, learner state, behaviour, markers, safety) and drops or truncates the lowest-priority sections when the budget is exceeded. Safety guidance is always preserved in full. Default 8,000 characters (~2,000 tokens). Lower values reduce per-turn cost; higher values allow more course content to land in-prompt.';
$string['settings:current_page_content_maxchars']      = 'Current page content cap (characters)';
$string['settings:current_page_content_maxchars_desc'] = 'Maximum number of characters of the current page\'s text injected into the system prompt as the "Current Page Content" section. Default 12,000 keeps the prior behaviour where the full page (up to that cap) is sent — best for accuracy on page-specific questions. Cost-conscious sites can clamp this lower (e.g. 3,000-4,000) to reduce per-turn token spend, at the risk that a question whose answer is in the truncated tail of a long page will not be answered as accurately. Clamped to the range 500-12,000. Independent of <code>prompt_budget_chars</code>: this caps just the page section; the budget caps the whole prompt.';
$string['settings:prompt_verbosity']      = 'Prompt verbosity';
$string['settings:prompt_verbosity_desc'] = 'Default verbosity for instruction blocks (Socratic mode, external resources). Concise (default) is what modern hosted models follow reliably; standard adds explicit scaffolding for mid-tier models; verbose keeps the heavyweight v3.9.30-era guidance for weaker self-hosted models. Per-course override available via <code>prompt_verbosity_course_&lt;id&gt;</code>.';
$string['settings:prompt_verbosity_concise']  = 'Concise (recommended for hosted models)';
$string['settings:prompt_verbosity_standard'] = 'Standard';
$string['settings:prompt_verbosity_verbose']  = 'Verbose (for weaker self-hosted models)';
$string['settings:prompt_metrics_enabled']      = 'Capture per-section prompt metrics';
$string['settings:prompt_metrics_enabled_desc'] = 'When on (default), every chat turn writes one JSON line per assembled prompt to <code>moodledata/sola_prompt_metrics/YYYY-MM-DD.log</code> with per-category char counts. Last 7 days kept. The metrics admin page aggregates these for the budget recommendation. No PII is recorded — only section sizes. Turn off if your institution prefers no metrics file at all.';
$string['settings:prompt_budget_auto_tune']      = 'Auto-tune system prompt budget daily';
$string['settings:prompt_budget_auto_tune_desc'] = 'When on, a daily cron task (03:20 server time) applies the budget recommendation surfaced on the <a href="/local/ai_course_assistant/prompt_metrics.php">Prompt metrics</a> admin page. Default off — the recommendation always shows on the page; auto-apply only fires when the institution opts in. Manual "Apply recommendation" button is unaffected by this toggle.';
$string['task:auto_tune_prompt_budget']          = 'Auto-tune SOLA prompt budget from observed metrics';
$string['prompt_metrics:title']                  = 'Prompt metrics + budget recommendation';
$string['prompt_metrics:subtitle']               = 'Per-section prompt sizes captured over the last 7 days. Used to recommend a value for the System prompt character budget setting.';
$string['prompt_metrics:no_data']                = 'No prompt metrics recorded yet. Send a few chat turns from a learner account, then refresh this page. (If the metrics capture flag is off in plugin settings, no data will accumulate.)';
$string['prompt_metrics:headline']               = 'Headline';
$string['prompt_metrics:samples']                = 'Samples (chat turns over last 7 days)';
$string['prompt_metrics:avg_total']              = 'Average total prompt size';
$string['prompt_metrics:max_total']              = 'Maximum prompt size observed';
$string['prompt_metrics:avg_budget']             = 'Budget at time of capture';
$string['prompt_metrics:pct_truncated']          = 'Turns where any section was truncated';
$string['prompt_metrics:pct_dropped']            = 'Turns where any section was dropped';
$string['prompt_metrics:last_seen']              = 'Most recent sample';
$string['prompt_metrics:by_category']            = 'Average chars per category';
$string['prompt_metrics:category']               = 'Category';
$string['prompt_metrics:avg_chars']              = 'Avg chars';
$string['prompt_metrics:recommendation']         = 'Budget recommendation';
$string['prompt_metrics:rec_insufficient_data']  = 'Need at least 30 chat turns of data to make a confident recommendation. Keep collecting samples and check back.';
$string['prompt_metrics:rec_optimal']            = 'Current budget looks well-tuned for the observed traffic. No change recommended.';
$string['prompt_metrics:current_budget']         = 'Current budget';
$string['prompt_metrics:recommended']            = 'Recommended budget';
$string['prompt_metrics:apply']                  = 'Apply recommendation';
$string['prompt_metrics:applied']                = 'Applied: budget changed from {$a->old} to {$a->new}. {$a->reason}';
$string['prompt_metrics:noop']                   = 'No change applied: {$a}';
$string['prompt_metrics:auto_tune_heading']      = 'Daily auto-tune';
$string['prompt_metrics:auto_tune_on']           = 'Daily auto-tune is ON. The recommendation will be applied automatically every night at 03:20 server time.';
$string['prompt_metrics:auto_tune_off']          = 'Daily auto-tune is OFF. The recommendation is shown here for review; nothing is applied automatically. Toggle on in plugin settings if you want unattended daily tuning.';
$string['prompt_metrics:settings_link']          = 'Open plugin settings to toggle auto-tune.';

// v5.3.0: Empathetic communications + carryover memory (English fallback).
$string['task:milestone_check'] = 'Send daily milestone reflection emails (v5.3.0)';
$string['task:struggle_signal_review'] = 'Review struggle signals into private learner memory (v5.3.0)';
$string['empathy:title'] = 'Empathetic communications and carryover memory (v5.3.0)';
$string['empathy:desc'] = 'Three coordinated features that make SOLA feel more like a coach who listens. Goals capture why the learner is here. Carryover memory remembers what has been hard before so SOLA can offer a different angle. Milestones celebrate streaks and completions by email. Each feature has an independent kill switch and learner opt-in. Struggle signals never leave the chat — no email is ever sent about a difficult session.';
$string['empathy:outreach_master_enabled'] = 'Master outreach kill switch';
$string['empathy:outreach_master_enabled_desc'] = 'Off by default on a fresh install. When off, NO empathetic email of any kind ever fires, regardless of the per-feature switches below. Turn this on once you have reviewed the per-feature defaults and per-learner consent flow.';
$string['empathy:goals_enabled'] = 'Enable career goal conversations';
$string['empathy:goals_enabled_desc'] = 'Lets learners volunteer two short answers (why they are here, what they want to become) that feed personalisation. In-chat only; no emails. Safe to leave on.';
$string['empathy:milestones_enabled'] = 'Enable milestone reflection emails';
$string['empathy:milestones_enabled_desc'] = 'Sends a short warm email when a learner reaches a 7-day streak, 30-day streak, or course completion. Requires the master switch above plus per-learner consent. Hard cap of one email per learner per 7 days across all channels.';
$string['empathy:memory_enabled'] = 'Enable carryover personalisation memory';
$string['empathy:memory_enabled_desc'] = 'Lets SOLA carry small private notes about what has been hard for a learner across sessions, so the next reply can offer a different angle. Bounded (max 5 notes per learner per course, 90-day TTL). Learner-editable. Never visible to instructors.';
$string['empathy:struggle_enabled'] = 'Enable struggle classifier';
$string['empathy:struggle_enabled_desc'] = 'Off by default. Lets SOLA detect sustained frustration over multiple turns and quietly record a sticking-point note in the carryover memory above. Output is in-chat only; no email is ever sent about a struggle session. Auto-purges signal data after 7 days.';
$string['empathy:outreach_dryrun'] = 'Dry-run outreach (log without sending)';
$string['empathy:outreach_dryrun_desc'] = 'When on, the milestone scheduled task records audit rows as if it sent emails but does not actually email anyone. Use this on a fresh install to verify the cooldown and consent logic before going live.';
$string['goals:starter_title'] = 'Set my learning goals';
$string['goals:starter_intro'] = "Mind sharing why you are taking this course? It helps me give you better answers.";
$string['goals:q1_label'] = 'What brought you to this course?';
$string['goals:q2_label'] = "What's the bigger thing this is helping you toward? A degree, a job, a project of your own, something else?";
$string['goals:q3_label'] = 'Anything I should keep in mind while we work together?';
$string['goals:save'] = 'Save my goals';
$string['goals:dismiss'] = 'Not now';
$string['goals:edit'] = 'Edit goals';
$string['goals:clear'] = 'Clear my goals';
$string['goals:cleared'] = 'Your goals have been cleared.';
$string['goals:saved'] = 'Thanks for sharing.';
$string['comms:title'] = 'My communications';
$string['comms:desc'] = 'Choose which automated emails SOLA may send you. Off by default. You can change this any time.';
$string['comms:milestones_label'] = 'Email me when I reach a milestone (7-day streak, 30-day streak, course completion).';
$string['comms:audit_log_title'] = 'What SOLA has sent me';
$string['comms:audit_log_empty'] = 'SOLA has not sent you any emails.';
$string['comms:memory_title'] = "What SOLA has remembered about how I learn";
$string['comms:memory_desc'] = 'These notes are private to your chat with SOLA. They help SOLA pick a different angle when a topic is hard. Clear any time.';
$string['comms:memory_clear'] = 'Clear all memory notes';
$string['milestone:streak_subject'] = '{$a->days}-day streak in {$a->coursename}';
$string['milestone:streak_body_text'] = "Hi {\$a->firstname},\n\nYou have shown up {\$a->days} days in a row in {\$a->coursename}. That kind of consistency is the part of learning that is hardest to fake.\n\nWhenever you are ready, SOLA is here.\n\n— {\$a->institution}";
$string['milestone:completion_subject'] = 'You finished {$a->coursename}';
$string['milestone:completion_body_text'] = "Hi {\$a->firstname},\n\nYou finished {\$a->coursename}. That is a real thing you did.\n\nIf you want to keep going, SOLA can help you pick a related next course or revisit a topic you found interesting.\n\n— {\$a->institution}";
$string['milestone:trigger_streak7'] = '7-day activity streak reached';
$string['milestone:trigger_streak30'] = '30-day activity streak reached';
$string['milestone:trigger_completion'] = 'Course completion recorded';
