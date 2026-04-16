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
 * @copyright  2025 AI Course Assistant
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
$string['settings:provider'] = 'مزوّد الذكاء الاصطناعي';
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
$string['chat:clear'] = 'مسح السجل';
$string['chat:clear_confirm'] = 'هل أنت متأكد من رغبتك في مسح سجل دردشتك لهذا المقرر؟';
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
$string['settings:provider_groq'] = 'Groq';
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
