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
 * Language strings for local_ai_course_assistant — Arabic.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'مساعد الذكاء الاصطناعي للمقررات';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'يخزّن محادثات المدرّس الافتراضي بالذكاء الاصطناعي لكل مستخدم ومقرر.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'معرّف المستخدم الذي يمتلك المحادثة.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'معرّف المقرر الذي تنتمي إليه المحادثة.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'عنوان المحادثة.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'وقت إنشاء المحادثة.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'وقت آخر تعديل للمحادثة.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'يخزّن الرسائل الفردية في محادثات المدرّس الافتراضي بالذكاء الاصطناعي.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'معرّف المستخدم الذي أرسل الرسالة.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'معرّف المقرر الذي تنتمي إليه الرسالة.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'دور مرسل الرسالة (مستخدم أو مساعد).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'محتوى الرسالة.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'عدد الرموز المستخدمة في الرسالة.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'وقت إنشاء الرسالة.';
$string['ai_course_assistant:use'] = 'استخدام دردشة المدرّس الافتراضي بالذكاء الاصطناعي';
$string['ai_course_assistant:viewanalytics'] = 'عرض تحليلات دردشة المدرّس الافتراضي بالذكاء الاصطناعي';
$string['ai_course_assistant:manage'] = 'إدارة إعدادات دردشة المدرّس الافتراضي بالذكاء الاصطناعي (دور المسؤول)';
$string['settings:enabled'] = 'تفعيل مساعد الذكاء الاصطناعي للمقررات';
$string['settings:enabled_desc'] = 'تفعيل أو تعطيل أداة مساعد الذكاء الاصطناعي للمقررات في صفحات المقررات.';
$string['settings:default_course_mode'] = 'الافتراضي للمقررات الجديدة';
$string['settings:default_course_mode_desc'] = 'يتحكم في ما إذا كان SOLA يظهر في مقرر عندما لا يكون هناك اختيار خاص بكل مقرر. تُعيَّن التثبيتات الجديدة افتراضياً إلى "معطّل افتراضياً" حتى يتمكن المسؤولون من التفعيل مقرراً تلو الآخر من صفحة Analytics أو صفحة Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'معطّل افتراضياً (فعّله لكل مقرر)';
$string['settings:default_course_mode_all'] = 'مفعّل في جميع المقررات';
$string['settings:auto_open'] = 'فتح تلقائي عند الزيارة الأولى';
$string['settings:auto_open_desc'] = 'عند التفعيل، يُفتح درج SOLA تلقائيًا في أول مرة يدخل فيها الطالب إلى كل مقرر. تحميلات الصفحات اللاحقة في نفس المقرر لا تعيد فتح الدرج — تُتتبع الحالة لكل مقرر في متصفح الطالب عبر localStorage. ينطبق على سطح المكتب والجوال. يمكن تجاوزه لكل مقرر من صفحة Course AI Settings.';
$string['settings:comparison_providers'] = 'مزودو المقارنة (منتقي LLM)';
$string['settings:comparison_providers_desc'] = 'أضف مزودي ذكاء اصطناعي إضافيين إلى منتقي LLM داخل الأداة حتى يتمكن المسؤولون من مقارنة الردود عبر المزودين. استخدم الجدول أدناه لإضافة صفوف. عمود درجة الحرارة اختياري (اتركه فارغًا لاستخدام درجة الحرارة العامة). التنسيق المخزن: provider_id|api_key|model1,model2|temperature. يتم تضمين المزود الأساسي المُعَد أعلاه تلقائيًا دائمًا. فقط المسؤولون الذين لديهم صلاحية الإدارة يرون المنتقي؛ الطلاب لا يرونه أبدًا. معرّفات المزودين الصالحة: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'مزوّد الذكاء الاصطناعي الافتراضي';
$string['settings:provider_desc'] = 'اختر مزوّد الذكاء الاصطناعي المستخدم لإكمالات المحادثة. اختر "Moodle AI (core_ai subsystem)" لتوجيه الطلبات عبر تهيئة الذكاء الاصطناعي المدمجة في Moodle في Site admin > AI؛ يتم تجاهل حقول مفتاح API والنموذج وعنوان URL الأساسي أدناه في هذا الوضع. لا تتوفر ميزات Streaming و tool use و prompt caching عبر core_ai — تُسلَّم الاستجابات كقطعة واحدة. استخدم مزوداً مباشراً للحصول على أفضل تجربة للطلاب.';
$string['settings:provider_claude'] = 'كلود (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (محلي)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'مخصص (متوافق مع OpenAI)';
$string['settings:apikey'] = 'مفتاح API';
$string['settings:apikey_desc'] = 'مفتاح API للمزوّد المختار. غير مطلوب لـ Ollama.';
$string['settings:model'] = 'اسم النموذج';
$string['settings:model_desc'] = 'النموذج المراد استخدامه. القيمة الافتراضية تعتمد على المزوّد (مثل claude-sonnet-4-5-20250929 أو gpt-4o أو llama3 أو MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'عنوان URL الأساسي لـ API';
$string['settings:apibaseurl_desc'] = 'عنوان URL الأساسي لـ API. يُملأ تلقائيًا وفق المزوّد لكن يمكن تجاوزه. اتركه فارغًا لاستخدام الافتراضي.';
$string['settings:systemprompt'] = 'قالب النظام التوجيهي';
$string['settings:systemprompt_desc'] = 'النظام التوجيهي المرسل إلى الذكاء الاصطناعي. استخدم العناصر النائبة: {{coursename}}، {{userrole}}، {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'أنت مدرّس افتراضي مفيد بالذكاء الاصطناعي لمقرر "{{coursename}}". دور الطالب هو {{userrole}}.

موضوعات المقرر المغطاة:
{{coursetopics}}

ساعد الطالب على فهم محتوى المقرر. كن مشجعًا وواضحًا وسليمًا من الناحية التربوية.';
$string['settings:temperature'] = 'درجة الحرارة (التلقائية)';
$string['settings:temperature_desc'] = 'تتحكم في العشوائية. القيم المنخفضة أكثر تركيزًا والقيم العالية أكثر إبداعًا. النطاق: 0.0 إلى 2.0.';
$string['settings:maxhistory'] = 'الحد الأقصى لسجل المحادثة';
$string['settings:maxhistory_desc'] = 'الحد الأقصى لعدد أزواج الرسائل المضمّنة في طلبات API. يتم حذف الرسائل الأقدم.';
$string['settings:avatar'] = 'صورة رمزية للدردشة';
$string['settings:avatar_desc'] = 'اختر أيقونة الصورة الرمزية لزر أداة الدردشة.';
$string['settings:avatar_saylor'] = 'شعار {$a} (الافتراضي)';
$string['settings:position'] = 'موضع الأداة';
$string['settings:position_desc'] = 'موضع أداة الدردشة على الصفحة.';
$string['settings:position_br'] = 'أسفل اليمين';
$string['settings:position_bl'] = 'أسفل اليسار';
$string['settings:position_tr'] = 'أعلى اليمين';
$string['settings:position_tl'] = 'أعلى اليسار';
$string['chat:settings'] = 'إعدادات الإضافة';
$string['analytics:viewdashboard'] = 'عرض لوحة التحليلات';
$string['coursesettings:title'] = 'إعدادات الذكاء الاصطناعي للمقرر';
$string['coursesettings:enabled'] = 'تفعيل تجاوزات المقرر';
$string['coursesettings:enabled_desc'] = 'عند التفعيل، تتجاوز الإعدادات أدناه تهيئة مزوّد الذكاء الاصطناعي العالمية لهذا المقرر فقط. اترك الحقول فارغة لاستخدام القيمة العالمية.';
$string['coursesettings:sola_enabled'] = 'SOLA في هذا المقرر';
$string['coursesettings:sola_enabled_toggle'] = 'عرض أداة SOLA في هذا المقرر';
$string['coursesettings:sola_enabled_desc'] = 'يتحكم في ما إذا كانت أداة محادثة SOLA تظهر في هذا المقرر. يتم تعيين الإعداد الافتراضي على مستوى الموقع في إعدادات الإضافة ضمن General > Default for new courses.';
$string['coursesettings:using_global'] = 'يستخدم الإعداد العالمي';
$string['coursesettings:saved'] = 'تم حفظ إعدادات الذكاء الاصطناعي للمقرر.';
$string['coursesettings:global_settings_link'] = 'الإعدادات العالمية للذكاء الاصطناعي';
$string['lang:switch'] = 'نعم، تبديل';
$string['lang:dismiss'] = 'لا شكرًا';
$string['lang:change'] = 'تغيير اللغة';
$string['lang:english'] = 'الإنجليزية';
$string['chat:title'] = 'المدرّس الافتراضي بالذكاء الاصطناعي';
$string['chat:placeholder'] = 'اطرح سؤالًا...';
$string['chat:send'] = 'إرسال';
$string['chat:close'] = 'إغلاق الدردشة';
$string['chat:open'] = 'فتح دردشة المدرّس الافتراضي بالذكاء الاصطناعي';
$string['chat:clear'] = 'مسح الشاشة';
$string['chat:clear_confirm'] = 'مسح الرسائل المرئية؟ يظل سجل دردشتك الكامل محفوظًا ويمكن إعادة تحميله بإعادة فتح الأداة.';
$string['chat:copy'] = 'نسخ المحادثة';
$string['chat:copied'] = 'تم نسخ المحادثة إلى الحافظة';
$string['chat:copy_failed'] = 'فشل نسخ المحادثة';
$string['chat:thinking'] = 'جارٍ التفكير...';
$string['chat:error'] = 'عذرًا، حدث خطأ ما. يرجى المحاولة مجددًا.';
$string['chat:error_auth'] = 'خطأ في المصادقة. يرجى التواصل مع مسؤول النظام.';
$string['chat:error_ratelimit'] = 'طلبات كثيرة جدًا. يرجى الانتظار لحظة ثم المحاولة مجددًا.';
$string['chat:error_unavailable'] = 'خدمة الذكاء الاصطناعي غير متاحة مؤقتًا. يرجى المحاولة لاحقًا.';
$string['chat:error_notconfigured'] = 'لم يتم تهيئة المدرّس الافتراضي بالذكاء الاصطناعي بعد. يرجى التواصل مع مسؤول النظام.';
$string['chat:mic'] = 'انطق سؤالك';
$string['chat:mic_error'] = 'خطأ في الميكروفون. يرجى التحقق من أذونات المتصفح.';
$string['chat:mic_unsupported'] = 'إدخال الكلام غير مدعوم في هذا المتصفح.';
$string['chat:newline_hint'] = 'Shift+Enter لسطر جديد';
$string['chat:you'] = 'أنت';
$string['chat:assistant'] = 'المدرّس الافتراضي بالذكاء الاصطناعي';
$string['chat:history_loaded'] = 'تم تحميل المحادثة السابقة.';
$string['chat:history_cleared'] = 'تم مسح سجل الدردشة.';
$string['chat:offtopic_warning'] = 'يبدو أن سؤالك غير مرتبط بهذا المقرر. يرجى محاولة البقاء في الموضوع حتى أتمكن من مساعدتك على أفضل وجه!';
$string['chat:offtopic_ended'] = 'تم تعليق وصولك إلى المدرّس الافتراضي بالذكاء الاصطناعي مؤقتًا لمدة {$a} دقائق لأن المحادثة خرجت عن الموضوع مرات كثيرة. يرجى استغلال هذا الوقت لمراجعة مواد المقرر، ويمكنك المحاولة مجددًا لاحقًا.';
$string['chat:offtopic_locked'] = 'وصولك إلى المدرّس الافتراضي بالذكاء الاصطناعي معلّق مؤقتًا. يمكنك المحاولة مجددًا بعد {$a} دقائق. يرجى التركيز على الأسئلة المتعلقة بالمقرر عند عودتك.';
$string['chat:escalated_to_support'] = 'لم أتمكن من الإجابة الكاملة على سؤالك، لذا قمت بإنشاء تذكرة دعم نيابةً عنك. سيتابع معك أحد أعضاء فريق الدعم. رقم التذكرة المرجعي هو: {$a}';
$string['chat:studyplan_intro'] = 'يمكنني مساعدتك في إنشاء خطة دراسة لهذا المقرر! فقط أخبرني بعدد ساعات الدراسة التي يمكنك تخصيصها أسبوعيًا، وسأساعدك في بناء خطة منظمة.';
$string['settings:faq_heading'] = 'الأسئلة الشائعة والدعم';
$string['settings:faq_heading_desc'] = 'تهيئة الأسئلة الشائعة المركزية وتكامل تذاكر دعم Zendesk.';
$string['settings:faq_content'] = 'محتوى الأسئلة الشائعة';
$string['settings:faq_content_desc'] = 'أدخل إدخالات الأسئلة الشائعة (سطر لكل إدخال بالصيغة: Q: السؤال | A: الجواب). ستُقدَّم للذكاء الاصطناعي للإجابة عن أسئلة الدعم الشائعة.';
$string['settings:zendesk_enabled'] = 'تفعيل تصعيد Zendesk';
$string['settings:zendesk_enabled_desc'] = 'عندما يتعذر على الذكاء الاصطناعي حل سؤال دعم، يتم إنشاء تذكرة Zendesk تلقائيًا مع ملخص المحادثة.';
$string['settings:zendesk_subdomain'] = 'النطاق الفرعي لـ Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'نطاقك الفرعي في Zendesk (مثل "mycompany" لـ mycompany.zendesk.com).';
$string['settings:zendesk_email'] = 'البريد الإلكتروني لـ Zendesk API';
$string['settings:zendesk_email_desc'] = 'عنوان البريد الإلكتروني لمستخدم Zendesk للمصادقة عبر API (مع اللاحقة /token).';
$string['settings:zendesk_token'] = 'رمز Zendesk API';
$string['settings:zendesk_token_desc'] = 'رمز API للمصادقة على Zendesk.';
$string['settings:offtopic_heading'] = 'اكتشاف الخروج عن الموضوع';
$string['settings:offtopic_heading_desc'] = 'تهيئة كيفية تعامل الدردشة مع المحادثات الخارجة عن الموضوع.';
$string['settings:offtopic_enabled'] = 'تفعيل اكتشاف الخروج عن الموضوع';
$string['settings:offtopic_enabled_desc'] = 'توجيه الذكاء الاصطناعي لاكتشاف إعادة توجيه المحادثات الخارجة عن الموضوع.';
$string['settings:offtopic_max'] = 'الحد الأقصى للرسائل الخارجة عن الموضوع';
$string['settings:offtopic_max_desc'] = 'عدد الرسائل المتتالية الخارجة عن الموضوع قبل اتخاذ إجراء.';
$string['settings:offtopic_action'] = 'إجراء الخروج عن الموضوع';
$string['settings:offtopic_action_desc'] = 'ما يجب فعله عند الوصول إلى حد الخروج عن الموضوع.';
$string['settings:offtopic_action_warn'] = 'تحذير وإعادة التوجيه';
$string['settings:offtopic_action_end'] = 'تعليق الوصول مؤقتًا';
$string['settings:offtopic_lockout_duration'] = 'مدة الحظر (بالدقائق)';
$string['settings:offtopic_lockout_duration_desc'] = 'المدة (بالدقائق) التي يفقد فيها الطالب الوصول إلى المدرّس الافتراضي بعد تجاوز حد الخروج عن الموضوع. الافتراضي: 30 دقيقة.';
$string['settings:studyplan_heading'] = 'التخطيط الدراسي والتذكيرات';
$string['settings:studyplan_heading_desc'] = 'تهيئة ميزات التخطيط الدراسي وإشعارات التذكير.';
$string['settings:studyplan_enabled'] = 'تفعيل التخطيط الدراسي';
$string['settings:studyplan_enabled_desc'] = 'السماح للمدرّس الافتراضي بالذكاء الاصطناعي بمساعدة الطلاب في إنشاء خطط دراسية شخصية بناءً على وقتهم المتاح.';
$string['settings:reminders_email_enabled'] = 'تفعيل التذكيرات بالبريد الإلكتروني';
$string['settings:reminders_email_enabled_desc'] = 'السماح للطلاب بالاشتراك في تذكيرات الدراسة عبر البريد الإلكتروني.';
$string['settings:reminders_whatsapp_enabled'] = 'تفعيل تذكيرات WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'السماح للطلاب بالاشتراك في تذكيرات الدراسة عبر WhatsApp (يتطلب تهيئة WhatsApp API).';
$string['settings:whatsapp_api_url'] = 'عنوان URL لـ WhatsApp API';
$string['settings:whatsapp_api_url_desc'] = 'نقطة النهاية API لإرسال رسائل WhatsApp (مثل Twilio أو MessageBird). يجب أن يقبل POST بمحتوى JSON يحتوي على حقول "to" و"from" و"body".';
$string['settings:whatsapp_api_token'] = 'رمز WhatsApp API';
$string['settings:whatsapp_api_token_desc'] = 'رمز المصادقة لـ WhatsApp API.';
$string['settings:whatsapp_from_number'] = 'رقم مرسل WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'رقم الهاتف المستخدم لإرسال رسائل WhatsApp (مع رمز الدولة، مثل +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'دول محظورة من WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'رموز الدول وفق ISO 3166-1 alpha-2 مفصولة بفواصل حيث لا يُسمح بتذكيرات WhatsApp بسبب اللوائح المحلية (مثل "CN,IR,KP").';
$string['reminder:email_subject'] = 'تذكير دراسي: {$a}';
$string['reminder:email_body'] = 'مرحبًا {$a->firstname}،

هذا تذكيرك الدراسي لـ "{$a->coursename}".

{$a->message}

تقترح خطتك الدراسية {$a->hours_per_week} ساعات أسبوعيًا لهذا المقرر.

استمر في العمل الرائع!

---
لإلغاء الاشتراك في هذه التذكيرات، انقر هنا: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'تذكير دراسي لـ {$a->coursename}: {$a->message} (إلغاء الاشتراك: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'تركيز الدراسة اليوم: ';
$string['unsubscribe:title'] = 'إلغاء الاشتراك في التذكيرات الدراسية';
$string['unsubscribe:success'] = 'تم إلغاء اشتراكك بنجاح من التذكيرات الدراسية لهذا المقرر.';
$string['unsubscribe:already'] = 'لقد تم إلغاء اشتراكك مسبقًا من هذه التذكيرات.';
$string['unsubscribe:invalid'] = 'رابط إلغاء الاشتراك غير صالح أو منتهي الصلاحية.';
$string['unsubscribe:resubscribe'] = 'هل غيّرت رأيك؟ يمكنك إعادة تفعيل التذكيرات من خلال دردشة المدرّس الافتراضي بالذكاء الاصطناعي.';
$string['task:send_reminders'] = 'إرسال تذكيرات الدراسة للمدرّس الافتراضي بالذكاء الاصطناعي';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'يخزّن خطط الدراسة الخاصة بالطلاب.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'معرّف المستخدم الذي يمتلك خطة الدراسة.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'المقرر الذي تنتمي إليه خطة الدراسة.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'عدد الساعات الأسبوعية التي يعتزم الطالب دراستها.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'تفاصيل خطة الدراسة بصيغة JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'يخزّن تفضيلات تذكيرات الدراسة والاشتراكات.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'معرّف المستخدم المشترك في التذكيرات.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'قناة التذكير (البريد الإلكتروني أو WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'عنوان البريد الإلكتروني أو رقم الهاتف للتذكيرات.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'رمز بلد المستخدم للامتثال التنظيمي.';
$string['analytics:title'] = 'تحليلات المدرّس الافتراضي بالذكاء الاصطناعي';
$string['analytics:overview'] = 'نظرة عامة';
$string['analytics:total_conversations'] = 'إجمالي المحادثات';
$string['analytics:total_messages'] = 'إجمالي الرسائل';
$string['analytics:active_students'] = 'الطلاب النشطون';
$string['analytics:avg_messages_per_student'] = 'متوسط الرسائل لكل طالب';
$string['analytics:offtopic_rate'] = 'معدل الخروج عن الموضوع';
$string['analytics:escalation_count'] = 'تم التصعيد إلى الدعم';
$string['analytics:studyplan_adoption'] = 'الطلاب الذين لديهم خطط دراسية';
$string['analytics:usage_trends'] = 'اتجاهات الاستخدام';
$string['analytics:daily_messages'] = 'حجم الرسائل اليومية';
$string['analytics:hotspots'] = 'النقاط الساخنة في المقرر';
$string['analytics:hotspots_desc'] = 'أقسام المقرر الأكثر ورودًا في أسئلة الطلاب. قد تشير الأعداد المرتفعة إلى مناطق يحتاج فيها الطلاب إلى مزيد من الدعم.';
$string['analytics:section'] = 'القسم';
$string['analytics:mention_count'] = 'عدد الإشارات';
$string['analytics:common_prompts'] = 'أنماط الأسئلة الشائعة';
$string['analytics:common_prompts_desc'] = 'أنماط الأسئلة المتكررة من الطلاب. راجعها لتحديد الثغرات المنهجية في محتوى المقرر.';
$string['analytics:prompt_pattern'] = 'النمط';
$string['analytics:frequency'] = 'التكرار';
$string['analytics:recent_activity'] = 'النشاط الأخير';
$string['analytics:no_data'] = 'لا توجد بيانات تحليلية بعد. ستظهر البيانات بمجرد بدء الطلاب في استخدام المدرّس الافتراضي بالذكاء الاصطناعي.';
$string['analytics:timerange'] = 'النطاق الزمني';
$string['analytics:last_7_days'] = 'آخر 7 أيام';
$string['analytics:last_30_days'] = 'آخر 30 يومًا';
$string['analytics:all_time'] = 'كل الوقت';
$string['analytics:export'] = 'تصدير البيانات';
$string['analytics:provider_comparison'] = 'مقارنة مزوّدي الذكاء الاصطناعي';
$string['analytics:provider_comparison_desc'] = 'مقارنة الأداء عبر مزوّدي الذكاء الاصطناعي المستخدمين في هذا المقرر.';
$string['analytics:provider'] = 'المزوّد';
$string['analytics:response_count'] = 'الردود';
$string['analytics:avg_response_length'] = 'متوسط طول الرد';
$string['analytics:total_tokens'] = 'إجمالي الرموز';
$string['analytics:avg_tokens'] = 'متوسط الرموز / الرد';
$string['usersettings:title'] = 'مساعد الذكاء الاصطناعي للمقررات - بياناتك';
$string['usersettings:intro'] = 'إدارة بيانات دردشة المدرّس الافتراضي بالذكاء الاصطناعي وإعدادات الخصوصية الخاصة بك';
$string['usersettings:privacy_info'] = 'يتم تخزين محادثاتك مع المدرّس الافتراضي بالذكاء الاصطناعي لتزويدك بدعم مستمر طوال المقرر. لديك تحكم كامل في هذه البيانات ويمكنك حذفها في أي وقت.';
$string['usersettings:usage_stats'] = 'إحصائيات استخدامك';
$string['usersettings:total_messages'] = 'إجمالي الرسائل';
$string['usersettings:total_conversations'] = 'المحادثات';
$string['usersettings:messages'] = 'الرسائل';
$string['usersettings:last_activity'] = 'آخر نشاط';
$string['usersettings:delete_course_data'] = 'حذف بيانات المقرر';
$string['usersettings:no_data'] = 'لم تستخدم المدرّس الافتراضي بالذكاء الاصطناعي بعد. ستظهر بيانات استخدامك هنا بمجرد بدء الدردشة.';
$string['usersettings:delete_all_title'] = 'حذف جميع بياناتك';
$string['usersettings:delete_all_warning'] = 'سيؤدي هذا إلى الحذف الدائم لجميع محادثاتك مع المدرّس الافتراضي بالذكاء الاصطناعي عبر جميع المقررات. لا يمكن التراجع عن هذا الإجراء.';
$string['usersettings:delete_all_button'] = 'حذف جميع بياناتي';
$string['usersettings:confirm_delete_course'] = 'هل أنت متأكد من رغبتك في الحذف الدائم لجميع بيانات المدرّس الافتراضي بالذكاء الاصطناعي الخاصة بك لمقرر "{$a}"؟ لا يمكن التراجع عن هذا الإجراء.';
$string['usersettings:confirm_delete_all'] = 'هل أنت متأكد من رغبتك في الحذف الدائم لجميع بيانات المدرّس الافتراضي بالذكاء الاصطناعي الخاصة بك عبر جميع المقررات؟ لا يمكن التراجع عن هذا الإجراء.';
$string['usersettings:data_deleted'] = 'تم حذف بياناتك.';

// === SOLA v1.0.12 — new features translation ===
$string['chat:greeting'] = 'مرحباً، {$a}! أنا SOLA. كيف يمكنني مساعدتك اليوم؟';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'فتح SOLA';
$string['chat:change_avatar'] = 'تغيير الصورة الرمزية';

// Quiz UI.
$string['chat:quiz'] = 'أجرِ اختبارًا تدريبيًا';
$string['chat:quiz_setup_title'] = 'الاختبار التدريبي';
$string['chat:quiz_questions'] = 'عدد الأسئلة';
$string['chat:quiz_topic'] = 'الموضوع';
$string['chat:quiz_topic_guided'] = 'بتوجيه الذكاء الاصطناعي (بناءً على تقدمك)';
$string['chat:quiz_topic_default'] = 'محتوى المقرر الحالي';
$string['chat:quiz_topic_custom'] = 'موضوع مخصص…';
$string['chat:quiz_custom_placeholder'] = 'أدخل موضوعًا أو سؤالًا...';
$string['chat:quiz_start'] = 'ابدأ الاختبار';
$string['chat:quiz_cancel'] = 'إلغاء';
$string['chat:quiz_loading'] = 'جارٍ إنشاء الاختبار…';
$string['chat:quiz_error'] = 'تعذّر إنشاء الاختبار. يرجى المحاولة مجددًا.';
$string['chat:quiz_correct'] = 'صحيح!';
$string['chat:quiz_wrong'] = 'خطأ.';
$string['chat:quiz_next'] = 'السؤال التالي';
$string['chat:quiz_finish'] = 'عرض النتائج';
$string['chat:quiz_score'] = 'اكتمل الاختبار! حصلت على {$a->score} من {$a->total}.';
$string['chat:quiz_summary'] = 'أتممت للتو اختبارًا تدريبيًا مكوّنًا من {$a->total} سؤال حول "{$a->topic}" وحصلت على {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'الأهداف التعليمية';
$string['chat:quiz_topic_modules'] = 'موضوع المقرر';
$string['chat:quiz_subtopic_select'] = 'اختر عنصرًا محددًا…';
$string['chat:quiz_topic_sections'] = 'أقسام المقرر';
$string['chat:quiz_score_great'] = 'عمل ممتاز! أنت تتقن هذه المادة حقًا.';
$string['chat:quiz_score_good'] = 'جهد جيد! تابع المراجعة لتعزيز فهمك.';
$string['chat:quiz_score_practice'] = 'واصل التدريب — حاول مراجعة مواد المقرر ذات الصلة ثم أعد الاختبار.';
$string['chat:quiz_review_heading'] = 'مراجعة';
$string['chat:quiz_retake'] = 'إعادة الاختبار';
$string['chat:quiz_exit'] = 'الخروج من الاختبار';
$string['chat:quiz_your_answer'] = 'إجابتك';
$string['chat:quiz_correct_answer'] = 'الإجابة الصحيحة';

// Conversation starters.
$string['chat:starters_label'] = 'محادثات مقترحة';
$string['chat:starter_quiz'] = 'اختبرني في هذا';
$string['chat:starter_explain'] = 'اشرح هذا';
$string['chat:starter_key_concepts'] = 'المفاهيم الأساسية';
$string['chat:starter_study_plan'] = 'خطة الدراسة';
$string['chat:starter_help_me'] = 'مساعدة الذكاء الاصطناعي';
$string['chat:starter_ai_project_coach'] = 'مدرّب مشروع الذكاء الاصطناعي';
$string['chat:starter_ell_practice'] = 'ممارسة المحادثة';
$string['chat:starter_ell_pronunciation'] = 'نطق ELL';
$string['chat:starter_ai_coach'] = 'مدرّب الذكاء الاصطناعي';
$string['chat:starter_speak'] = 'تحدث ببادئ محادثة';

// Reset / home.
$string['chat:reset'] = 'ابدأ من جديد';

// Topic picker.
$string['chat:topic_picker_title'] = 'على ماذا تريد التركيز؟';
$string['chat:topic_picker_title_help'] = 'بماذا تريد المساعدة؟';
$string['chat:topic_picker_title_explain'] = 'ماذا تريد مني أن أشرح؟';
$string['chat:topic_picker_title_study'] = 'ما المجال الذي تريد التركيز عليه؟';
$string['chat:topic_start'] = 'متابعة';

// Expand states.
$string['chat:fullscreen'] = 'ملء الشاشة';
$string['chat:exitfullscreen'] = 'الخروج من ملء الشاشة';

// Settings panel.
$string['chat:language'] = 'تغيير اللغة';
$string['chat:settings_panel'] = 'الإعدادات';
$string['chat:settings_language'] = 'اللغة';
$string['chat:settings_avatar'] = 'الصورة الرمزية';
$string['chat:settings_voice'] = 'الصوت';
$string['chat:settings_voice_admin'] = 'تُدار إعدادات الصوت من لوحة إدارة الموقع.';

// Voice mode.
$string['chat:voice_mode'] = 'وضع الصوت';
$string['chat:voice_end'] = 'إنهاء جلسة الصوت';
$string['chat:voice_connecting'] = 'جارٍ الاتصال...';
$string['chat:voice_listening'] = 'يستمع...';
$string['chat:voice_speaking'] = 'SOLA يتحدث...';
$string['chat:voice_idle'] = 'جاهز';
$string['chat:voice_error'] = 'فشل الاتصال الصوتي. يرجى التحقق من إعداداتك.';
$string['chat:quiz_locked'] = 'تم إيقاف SOLA مؤقتًا أثناء الاختبارات دعمًا للنزاهة الأكاديمية. حظًا موفقًا!';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'ملاحظات';

// History panel.
$string['chat:history_title'] = 'الملاحظات وتاريخ المحادثة';
$string['task:send_inactivity_reminders'] = 'إرسال رسائل تذكير أسبوعية بالبريد الإلكتروني بسبب عدم النشاط';
$string['messageprovider:study_notes'] = 'ملاحظات جلسة الدراسة';
$string['task:send_inactivity_reminders'] = 'إرسال رسائل تذكير أسبوعية بعدم النشاط';
$string['task:run_meta_ai_query'] = 'تشغيل استعلام تحليلات رادار التعلم المجدول';
$string['messageprovider:study_notes'] = 'ملاحظات جلسة الدراسة';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / توصيل الواجهة الأمامية';
$string['settings:cdn_heading_desc'] = 'تقديم أصول الواجهة الأمامية لـ SOLA (JS/CSS) من CDN خارجي بدلاً من نظام ملفات Moodle. يتيح هذا تحديثات الواجهة الأمامية دون ترقية الإضافة. اترك عنوان CDN URL فارغاً لاستخدام ملفات الإضافة المحلية.';
$string['settings:cdn_url'] = 'عنوان CDN الأساسي';
$string['settings:cdn_url_desc'] = 'العنوان الأساسي حيث يتم استضافة sola.min.js و sola.min.css. مثال: https://your-org.github.io/sola-cdn. اتركه فارغاً لاستخدام ملفات الإضافة المحلية.';
$string['settings:cdn_version'] = 'إصدار أصول CDN';
$string['settings:cdn_version_desc'] = 'سلسلة الإصدار المُلحقة بعناوين CDN لـ cache busting. قم بتحديثها بعد كل نشر CDN (مثلاً 3.2.4 أو commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'الاستخدام العام';
$string['analytics:tab_bycourse'] = 'حسب المقرر';
$string['analytics:tab_comparison'] = 'AI مقابل غير المستخدمين';
$string['analytics:tab_byunit'] = 'حسب الوحدة';
$string['analytics:tab_usagetypes'] = 'أنواع الاستخدام';
$string['analytics:tab_themes'] = 'المواضيع';
$string['analytics:tab_feedback'] = 'تقييم AI';
$string['analytics:total_students'] = 'إجمالي الطلاب';
$string['analytics:active_users'] = 'مستخدمو AI النشطون';
$string['analytics:msgs_per_student'] = 'الرسائل لكل طالب';
$string['analytics:avg_session'] = 'متوسط مدة الجلسة';
$string['analytics:return_rate'] = 'معدل العودة';
$string['analytics:total_sessions'] = 'إجمالي الجلسات';
$string['analytics:thumbs_up'] = 'إعجاب';
$string['analytics:thumbs_down'] = 'عدم إعجاب';
$string['analytics:hallucination_flags'] = 'علامات معلومات خاطئة';
$string['analytics:msgs_to_resolution'] = 'الرسائل حتى الحل';
$string['analytics:helpful'] = 'مفيد';
$string['analytics:not_helpful'] = 'غير مفيد';
$string['analytics:flag_hallucination'] = 'هذا الرد يحتوي على معلومات غير دقيقة';
$string['analytics:submit_rating'] = 'إرسال';
$string['analytics:thanks_feedback'] = 'شكراً على ملاحظاتك';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'اشرح هذه الصفحة';
$string['chat:starter_ask_anything'] = 'اسأل أي شيء';
$string['chat:starter_review_practice'] = 'مراجعة وتمرين';
$string['chat:history_saved_subtitle'] = 'تبقى الردود المحفوظة على هذا الجهاز لهذه الدورة.';
$string['chat:history_saved_empty'] = 'احفظ رد الذكاء الاصطناعي لرؤيته هنا.';
$string['chat:history_views_label'] = 'عروض السجل';
$string['chat:history_view_saved'] = 'المحفوظة';
$string['chat:history_view_recent'] = 'السجل';
$string['chat:debug_refresh'] = 'تحديث';
$string['chat:debug_copy_all'] = 'نسخ الكل';
$string['chat:debug_close'] = 'إغلاق';
$string['chat:language_switch'] = 'تبديل اللغة';
$string['chat:language_dismiss'] = 'تجاهل اقتراح اللغة';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'اختر مزود LLM';
$string['chat:llm_model_label'] = 'النموذج';
$string['chat:llm_model_select'] = 'اختر نموذج LLM';
$string['chat:footer_usertesting'] = 'اختبار قابلية الاستخدام';
$string['chat:footer_feedback'] = 'ملاحظات';
$string['chat:voice_panel_title'] = 'تحدث مع {$a} (تجريبي)';

// Additional translated strings.
$string['chat:debug_context'] = 'تصحيح السياق';
$string['chat:debug_context_browser'] = 'لقطة المتصفح';
$string['chat:debug_context_copy'] = 'نسخ';
$string['chat:debug_context_prompt'] = 'استجابة الخادم';
$string['chat:debug_context_request'] = 'آخر طلب SSE';
$string['chat:debug_context_toggle'] = 'تبديل المفتش';
$string['chat:history_empty'] = 'لا توجد محادثات بعد.';
$string['chat:history_refresh'] = 'تحديث';
$string['chat:history_subtitle'] = 'رسائلك الأخيرة في هذه الدورة.';
$string['chat:starter_explain_prompt'] = 'هل يمكنك شرح أهم مفهوم؟';
$string['chat:starter_help_lesson'] = 'اشرح هذا';
$string['chat:starter_help_lesson_prompt'] = 'ساعدني في فهم الدرس. أعطني ملخصاً للمفاهيم الرئيسية.';
$string['chat:starter_prompt_coach'] = 'مدرب موجهات AI';
$string['chat:starter_quick_study'] = 'دراسة سريعة';
$string['chat:starter_study_plan_prompt'] = 'أريد التخطيط لجلسة دراستي. اسألني: (1) ماذا أريد اليوم، (2) كم وقت لدي. حدّث الخطة الموجودة.';
$string['chat:voice_copy'] = 'أجرِ محادثة صوتية مع مساعد التعلم.';
$string['chat:voice_ready'] = 'جاهز';
$string['chat:voice_start'] = 'ابدأ المحادثة';
$string['chat:voice_title'] = 'تحدث مع SOLA';
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
$string['mobile_chip_concepts'] = 'المفاهيم الرئيسية';
$string['mobile_chip_quiz'] = 'اختبرني';
$string['mobile_chip_studyplan'] = 'خطة الدراسة';
$string['mobile_clear'] = 'مسح المحادثات';
$string['mobile_disabled'] = 'SOLA غير متوفر لهذه الدورة.';
$string['mobile_placeholder'] = 'اطرح سؤالاً...';
$string['mobile_welcome'] = 'مرحباً، {$a}!';
$string['mobile_welcome_sub'] = 'أنا SOLA، مساعد التعلم الخاص بك. كيف أساعدك اليوم؟';
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
$string['rubric:done'] = 'تم';
$string['rubric:encourage_high'] = 'عمل ممتاز! واصل!';
$string['rubric:encourage_low'] = 'بداية جيدة! التدريب المنتظم سيساعدك.';
$string['rubric:encourage_mid'] = 'جهد جيد! واصل التدريب للتحسن.';
$string['rubric:overall'] = 'الإجمالي';
$string['rubric:practice_again'] = 'تدرب مجدداً';
$string['rubric:score_title_conversation'] = 'درجة تمرين المحادثة';
$string['rubric:score_title_pronunciation'] = 'درجة تمرين النطق';
$string['rubric:scoring'] = 'تقييم جلسة التدريب...';
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
$string['demo:title'] = 'بيئة الاختبار';
$string['demo:heading'] = 'بيئة الاختبار';
$string['demo:intro'] = 'تنشئ هذه الصفحة مقررًا للاختبار <strong>مخفيًا عن الطلاب</strong> (visible=0) وتزوّده بطلاب وهميين ومحادثات ذكاء اصطناعي وتقييمات وتعليقات. مفيد لمعاينة لوحة التحليلات أو التحقق من تغييرات الإضافة دون التأثير على أي طالب فعلي مسجَّل.';
$string['demo:step1'] = 'الخطوة 1: مقرر الاختبار';
$string['demo:step2'] = 'الخطوة 2: إدخال طلاب وهميين ومحادثات ذكاء اصطناعي';
$string['demo:course_exists'] = 'مقرر الاختبار موجود: <strong>{$a->fullname}</strong> (الاسم المختصر <code>{$a->shortname}</code>، المعرف {$a->id})';
$string['demo:badge_hidden'] = 'مخفي';
$string['demo:badge_visible'] = 'مرئي للطلاب';
$string['demo:no_course'] = 'لم يتم العثور على مقرر اختبار. انقر أدناه لإنشاء واحد.';
$string['demo:create_btn'] = 'إنشاء مقرر اختبار مخفي';
$string['demo:open_course'] = 'فتح المقرر &rarr;';
$string['demo:seed_intro'] = 'ينشئ demo_student_001 و demo_student_002 و ... ويسجّلهم في مقرر الاختبار، ويدرج محادثات ورسائل وتقييمات وتعليقات تركيبية. شغّل مرة أخرى لإضافة المزيد، أو ضع علامة على "امسح أولاً" للبدء من جديد.';
$string['demo:users_label'] = 'المستخدمون';
$string['demo:weeks_label'] = 'الأسابيع';
$string['demo:clear_label'] = 'امسح مستخدمي demo_* الموجودين أولاً';
$string['demo:seed_btn'] = 'إدخال الطلاب والمحادثات';
$string['demo:view_analytics'] = 'عرض التحليلات لهذا المقرر &rarr;';
$string['demo:footer'] = 'البيانات التي تُنشأ هنا تعيش في جداول مستخدمي Moodle / التسجيل القياسية وفي جداول المحادثات الخاصة بالإضافة. جميع المستخدمين الوهميين لديهم أسماء مستخدمين تبدأ بـ <code>demo_student_</code> ليسهل فلترتها أو إزالتها. لإزالتها، شغّل خطوة الإدخال مرة أخرى مع تحديد "امسح مستخدمي demo_* الموجودين أولاً".';
$string['demo:course_fullname'] = 'مقرر اختبار SOLA (مخفي)';
$string['demo:notify_created'] = 'مقرر الاختبار جاهز: {$a->fullname} (المعرف {$a->id}).';
$string['demo:notify_create_fail'] = 'فشل في إنشاء المقرر: {$a}';
$string['demo:notify_seeded'] = 'تم الإدخال: {$a->users} مستخدم، {$a->conversations} محادثة، {$a->messages} رسالة، {$a->ratings} تقييم، {$a->feedback} تعليقات.';
$string['demo:notify_seed_fail'] = 'فشل في إدخال البيانات: {$a}';
$string['toc:analytics'] = 'لوحة التحليلات &rarr;';
$string['toc:tokenanalytics'] = 'تكلفة الرموز والتحليلات &rarr;';
$string['toc:testing'] = 'بيئة الاختبار &rarr;';
$string['toc:back_to_course'] = '&larr; العودة إلى {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'لم يتم العثور على ملف pdftotext؛ تم تعطيل استخراج PDF.';
$string['rag:pdftotext_available'] = 'تم اكتشاف pdftotext في {$a}.';
$string['rag:docx_unavailable'] = 'ملحق PHP ZipArchive غير متوفر؛ تم تعطيل استخراج DOCX.';
$string['rag:h5p_unavailable'] = 'تعذرت قراءة محتوى H5P؛ تم التخطي.';
$string['rag:scorm_too_large'] = 'تتجاوز حزمة SCORM حد الحجم المضبوط ({$a} MB)؛ تم التخطي.';
$string['rag:scorm_unzip_failed'] = 'تعذر فك ضغط حزمة SCORM؛ تم التخطي.';
$string['rag:transcript_fetch_failed'] = 'تعذر جلب النص من {$a}.';
$string['rag:transcript_cf_challenge'] = 'تم حظر رابط النص بواسطة تحدي Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'تم اكتشاف وسائط مضمنة: {$a}';
$string['rag:embed_transcript_attached'] = 'تم إرفاق النص لـ {$a}';

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
