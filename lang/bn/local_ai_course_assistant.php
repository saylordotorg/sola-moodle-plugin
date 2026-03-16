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
 * Language strings for local_ai_course_assistant — Bengali.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AI কোর্স সহকারী';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'প্রতিটি ব্যবহারকারী ও কোর্সের জন্য AI টিউটর চ্যাটের কথোপকথন সংরক্ষণ করে।';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'কথোপকথনের মালিক ব্যবহারকারীর আইডি।';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'যে কোর্সের সাথে কথোপকথনটি সম্পর্কিত তার আইডি।';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'কথোপকথনের শিরোনাম।';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'কথোপকথনটি তৈরির সময়।';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'কথোপকথনটি সর্বশেষ পরিবর্তনের সময়।';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'AI টিউটর চ্যাটের কথোপকথনে পৃথক বার্তাগুলি সংরক্ষণ করে।';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'যে ব্যবহারকারী বার্তাটি পাঠিয়েছেন তার আইডি।';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'যে কোর্সের সাথে বার্তাটি সম্পর্কিত তার আইডি।';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'বার্তা প্রেরকের ভূমিকা (ব্যবহারকারী বা সহকারী)।';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'বার্তার বিষয়বস্তু।';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'বার্তার জন্য ব্যবহৃত টোকেনের সংখ্যা।';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'বার্তাটি তৈরির সময়।';
$string['ai_course_assistant:use'] = 'AI টিউটর চ্যাট ব্যবহার করুন';
$string['ai_course_assistant:viewanalytics'] = 'AI টিউটর চ্যাট বিশ্লেষণ দেখুন';
$string['ai_course_assistant:manage'] = 'AI টিউটর চ্যাটের সেটিংস পরিচালনা করুন (প্রশাসক ভূমিকা)';
$string['settings:enabled'] = 'AI কোর্স সহকারী সক্রিয় করুন';
$string['settings:enabled_desc'] = 'কোর্স পেজে AI কোর্স সহকারী উইজেট সক্রিয় বা নিষ্ক্রিয় করুন।';
$string['settings:provider'] = 'AI প্রদানকারী';
$string['settings:provider_desc'] = 'চ্যাট সম্পূর্ণতার জন্য ব্যবহার করার AI প্রদানকারী নির্বাচন করুন।';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (স্থানীয়)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'কাস্টম (OpenAI-সামঞ্জস্যপূর্ণ)';
$string['settings:apikey'] = 'API কী';
$string['settings:apikey_desc'] = 'নির্বাচিত প্রদানকারীর জন্য API কী। Ollama-র জন্য প্রয়োজন নেই।';
$string['settings:model'] = 'মডেলের নাম';
$string['settings:model_desc'] = 'ব্যবহার করার মডেল। ডিফল্ট মান প্রদানকারীর উপর নির্ভর করে (যেমন claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01)।';
$string['settings:apibaseurl'] = 'API বেস URL';
$string['settings:apibaseurl_desc'] = 'API-এর বেস URL। প্রদানকারী অনুযায়ী স্বয়ংক্রিয়ভাবে পূরণ হয় তবে পরিবর্তন করা যায়। প্রদানকারীর ডিফল্টের জন্য খালি রাখুন।';
$string['settings:systemprompt'] = 'সিস্টেম প্রম্পট টেমপ্লেট';
$string['settings:systemprompt_desc'] = 'AI-এ পাঠানো সিস্টেম প্রম্পট। প্লেসহোল্ডার ব্যবহার করুন: {{coursename}}, {{userrole}}, {{coursetopics}}।';
$string['settings:systemprompt_default'] = 'আপনি "{{coursename}}" কোর্সের একজন সহায়ক AI টিউটর। শিক্ষার্থীর ভূমিকা হলো {{userrole}}।

কোর্সে আলোচিত বিষয়সমূহ:
{{coursetopics}}

শিক্ষার্থীকে কোর্সের বিষয়বস্তু বুঝতে সাহায্য করুন। উৎসাহজনক, স্পষ্ট এবং শিক্ষাগতভাবে সঠিক হোন।';
$string['settings:temperature'] = 'তাপমাত্রা';
$string['settings:temperature_desc'] = 'এলোমেলোতা নিয়ন্ত্রণ করে। কম মান আরও কেন্দ্রীভূত, বেশি মান আরও সৃজনশীল। পরিসীমা: ০.০ থেকে ২.০।';
$string['settings:maxhistory'] = 'সর্বোচ্চ কথোপকথন ইতিহাস';
$string['settings:maxhistory_desc'] = 'API অনুরোধে অন্তর্ভুক্ত করার জন্য সর্বোচ্চ বার্তা জোড়ার সংখ্যা। পুরানো বার্তাগুলি বাদ দেওয়া হয়।';
$string['settings:avatar'] = 'চ্যাট অবতার';
$string['settings:avatar_desc'] = 'চ্যাট উইজেট বাটনের জন্য অবতার আইকন নির্বাচন করুন।';
$string['settings:avatar_saylor'] = '{$a} লোগো (ডিফল্ট)';
$string['settings:position'] = 'উইজেটের অবস্থান';
$string['settings:position_desc'] = 'পেজে চ্যাট উইজেটের অবস্থান।';
$string['settings:position_br'] = 'নিচে ডানে';
$string['settings:position_bl'] = 'নিচে বামে';
$string['settings:position_tr'] = 'উপরে ডানে';
$string['settings:position_tl'] = 'উপরে বামে';
$string['chat:settings'] = 'প্লাগইন সেটিংস';
$string['analytics:viewdashboard'] = 'বিশ্লেষণ ড্যাশবোর্ড দেখুন';
$string['coursesettings:title'] = 'কোর্স AI সেটিংস';
$string['coursesettings:enabled'] = 'কোর্স ওভাররাইড সক্রিয় করুন';
$string['coursesettings:enabled_desc'] = 'সক্রিয় করা হলে, নিচের সেটিংসগুলি শুধুমাত্র এই কোর্সের জন্য গ্লোবাল AI প্রদানকারী কনফিগারেশন ওভাররাইড করে। গ্লোবাল মান উত্তরাধিকারসূত্রে পেতে ফিল্ডগুলি খালি রাখুন।';
$string['coursesettings:using_global'] = 'গ্লোবাল সেটিং ব্যবহার করছে';
$string['coursesettings:saved'] = 'কোর্স AI সেটিংস সংরক্ষিত হয়েছে।';
$string['coursesettings:global_settings_link'] = 'গ্লোবাল AI সেটিংস';
$string['lang:switch'] = 'হ্যাঁ, পরিবর্তন করুন';
$string['lang:dismiss'] = 'না, ধন্যবাদ';
$string['lang:change'] = 'ভাষা পরিবর্তন করুন';
$string['lang:english'] = 'ইংরেজি';
$string['chat:title'] = 'AI টিউটর';
$string['chat:placeholder'] = 'একটি প্রশ্ন জিজ্ঞাসা করুন...';
$string['chat:send'] = 'পাঠান';
$string['chat:close'] = 'চ্যাট বন্ধ করুন';
$string['chat:open'] = 'AI টিউটর চ্যাট খুলুন';
$string['chat:clear'] = 'ইতিহাস মুছুন';
$string['chat:clear_confirm'] = 'আপনি কি এই কোর্সের জন্য আপনার চ্যাট ইতিহাস মুছে দিতে চান?';
$string['chat:copy'] = 'কথোপকথন কপি করুন';
$string['chat:copied'] = 'কথোপকথন ক্লিপবোর্ডে কপি করা হয়েছে';
$string['chat:copy_failed'] = 'কথোপকথন কপি করতে ব্যর্থ হয়েছে';
$string['chat:greeting'] = 'হ্যালো! আমি এই কোর্সের জন্য আপনার AI টিউটর। আজ আমি আপনাকে কীভাবে সাহায্য করতে পারি?';
$string['chat:thinking'] = 'চিন্তা করছি...';
$string['chat:error'] = 'দুঃখিত, কিছু ভুল হয়েছে। আবার চেষ্টা করুন।';
$string['chat:error_auth'] = 'প্রমাণীকরণ ত্রুটি। আপনার প্রশাসকের সাথে যোগাযোগ করুন।';
$string['chat:error_ratelimit'] = 'অনেক বেশি অনুরোধ। একটু অপেক্ষা করুন এবং আবার চেষ্টা করুন।';
$string['chat:error_unavailable'] = 'AI সেবাটি সাময়িকভাবে অনুপলব্ধ। পরে আবার চেষ্টা করুন।';
$string['chat:error_notconfigured'] = 'AI টিউটর এখনো কনফিগার করা হয়নি। আপনার প্রশাসকের সাথে যোগাযোগ করুন।';
$string['chat:expand'] = 'চ্যাট বড় করুন';
$string['chat:collapse'] = 'চ্যাট ছোট করুন';
$string['chat:mic'] = 'আপনার প্রশ্ন বলুন';
$string['chat:mic_error'] = 'মাইক্রোফোন ত্রুটি। আপনার ব্রাউজার অনুমতি পরীক্ষা করুন।';
$string['chat:mic_unsupported'] = 'এই ব্রাউজারে ভয়েস ইনপুট সমর্থিত নয়।';
$string['chat:newline_hint'] = 'নতুন লাইনের জন্য Shift+Enter';
$string['chat:you'] = 'আপনি';
$string['chat:assistant'] = 'AI টিউটর';
$string['chat:history_loaded'] = 'আগের কথোপকথন লোড করা হয়েছে।';
$string['chat:history_cleared'] = 'চ্যাট ইতিহাস মুছে দেওয়া হয়েছে।';
$string['chat:offtopic_warning'] = 'মনে হচ্ছে আপনার প্রশ্নটি এই কোর্সের সাথে সম্পর্কিত নয়। আমি যাতে আপনাকে সর্বোত্তমভাবে সাহায্য করতে পারি সেজন্য বিষয়ের সাথে সম্পর্কিত থাকার চেষ্টা করুন!';
$string['chat:offtopic_ended'] = 'কথোপকথন বারবার বিষয়ের বাইরে চলে যাওয়ার কারণে আপনার AI টিউটর অ্যাক্সেস {$a} মিনিটের জন্য সাময়িকভাবে স্থগিত করা হয়েছে। এই সময়টি আপনার কোর্সের উপকরণ পর্যালোচনা করতে ব্যবহার করুন, পরে আবার চেষ্টা করতে পারবেন।';
$string['chat:offtopic_locked'] = 'আপনার AI টিউটর অ্যাক্সেস সাময়িকভাবে স্থগিত। আপনি {$a} মিনিটে আবার চেষ্টা করতে পারবেন। ফিরে আসলে কোর্স-সম্পর্কিত প্রশ্নে মনোযোগ দিন।';
$string['chat:escalated_to_support'] = 'আমি আপনার প্রশ্নের সম্পূর্ণ উত্তর দিতে পারিনি, তাই আপনার জন্য একটি সাপোর্ট টিকিট তৈরি করেছি। একজন সাপোর্ট টিম সদস্য ফলো-আপ করবেন। আপনার টিকিট রেফারেন্স হলো: {$a}';
$string['chat:studyplan_intro'] = 'আমি এই কোর্সের জন্য আপনার একটি অধ্যয়ন পরিকল্পনা তৈরি করতে সাহায্য করতে পারি! শুধু আমাকে বলুন আপনি প্রতি সপ্তাহে কত ঘণ্টা পড়াশোনায় দিতে পারবেন, এবং আমি আপনাকে একটি কাঠামোবদ্ধ পরিকল্পনা তৈরি করতে সাহায্য করব।';
$string['settings:faq_heading'] = 'FAQ ও সাপোর্ট';
$string['settings:faq_heading_desc'] = 'কেন্দ্রীভূত FAQ এবং Zendesk সাপোর্ট টিকিট ইন্টিগ্রেশন কনফিগার করুন।';
$string['settings:faq_content'] = 'FAQ বিষয়বস্তু';
$string['settings:faq_content_desc'] = 'FAQ এন্ট্রি লিখুন (প্রতিটি লাইনে এই ফরম্যাটে: Q: প্রশ্ন | A: উত্তর)। এগুলি সাধারণ সাপোর্ট প্রশ্নের উত্তর দিতে AI-কে সরবরাহ করা হবে।';
$string['settings:zendesk_enabled'] = 'Zendesk এসকালেশন সক্রিয় করুন';
$string['settings:zendesk_enabled_desc'] = 'AI যখন কোনো সাপোর্ট প্রশ্ন সমাধান করতে পারে না, তখন স্বয়ংক্রিয়ভাবে কথোপকথনের সারসংক্ষেপ সহ একটি Zendesk টিকিট তৈরি করুন।';
$string['settings:zendesk_subdomain'] = 'Zendesk সাবডোমেইন';
$string['settings:zendesk_subdomain_desc'] = 'আপনার Zendesk সাবডোমেইন (যেমন mycompany.zendesk.com-এর জন্য "mycompany")।';
$string['settings:zendesk_email'] = 'Zendesk API ইমেইল';
$string['settings:zendesk_email_desc'] = 'API প্রমাণীকরণের জন্য Zendesk ব্যবহারকারীর ইমেইল ঠিকানা (/token সাফিক্সসহ)।';
$string['settings:zendesk_token'] = 'Zendesk API টোকেন';
$string['settings:zendesk_token_desc'] = 'Zendesk প্রমাণীকরণের জন্য API টোকেন।';
$string['settings:offtopic_heading'] = 'বিষয়-বহির্ভূত সনাক্তকরণ';
$string['settings:offtopic_heading_desc'] = 'চ্যাট কীভাবে বিষয়-বহির্ভূত কথোপকথন পরিচালনা করে তা কনফিগার করুন।';
$string['settings:offtopic_enabled'] = 'বিষয়-বহির্ভূত সনাক্তকরণ সক্রিয় করুন';
$string['settings:offtopic_enabled_desc'] = 'AI-কে বিষয়-বহির্ভূত কথোপকথন সনাক্ত ও পুনঃনির্দেশিত করার নির্দেশ দিন।';
$string['settings:offtopic_max'] = 'সর্বোচ্চ বিষয়-বহির্ভূত বার্তা';
$string['settings:offtopic_max_desc'] = 'ব্যবস্থা নেওয়ার আগে ধারাবাহিক বিষয়-বহির্ভূত বার্তার সংখ্যা।';
$string['settings:offtopic_action'] = 'বিষয়-বহির্ভূত ক্রিয়া';
$string['settings:offtopic_action_desc'] = 'বিষয়-বহির্ভূত সীমা পৌঁছালে কী করতে হবে।';
$string['settings:offtopic_action_warn'] = 'সতর্ক করুন ও পুনঃনির্দেশ করুন';
$string['settings:offtopic_action_end'] = 'সাময়িকভাবে অ্যাক্সেস লক করুন';
$string['settings:offtopic_lockout_duration'] = 'লকআউট সময়কাল (মিনিটে)';
$string['settings:offtopic_lockout_duration_desc'] = 'বিষয়-বহির্ভূত সীমা অতিক্রম করার পর একজন শিক্ষার্থী কতক্ষণ (মিনিটে) AI টিউটরে অ্যাক্সেস হারাবেন। ডিফল্ট: ৩০ মিনিট।';
$string['settings:studyplan_heading'] = 'অধ্যয়ন পরিকল্পনা ও রিমাইন্ডার';
$string['settings:studyplan_heading_desc'] = 'অধ্যয়ন পরিকল্পনার বৈশিষ্ট্য এবং রিমাইন্ডার বিজ্ঞপ্তি কনফিগার করুন।';
$string['settings:studyplan_enabled'] = 'অধ্যয়ন পরিকল্পনা সক্রিয় করুন';
$string['settings:studyplan_enabled_desc'] = 'AI টিউটরকে শিক্ষার্থীদের তাদের উপলব্ধ সময়ের উপর ভিত্তি করে ব্যক্তিগতকৃত অধ্যয়ন পরিকল্পনা তৈরিতে সাহায্য করার অনুমতি দিন।';
$string['settings:reminders_email_enabled'] = 'ইমেইল রিমাইন্ডার সক্রিয় করুন';
$string['settings:reminders_email_enabled_desc'] = 'শিক্ষার্থীদের ইমেইলে অধ্যয়ন রিমাইন্ডারে সাবস্ক্রাইব করার অনুমতি দিন।';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsApp রিমাইন্ডার সক্রিয় করুন';
$string['settings:reminders_whatsapp_enabled_desc'] = 'শিক্ষার্থীদের WhatsApp-এ অধ্যয়ন রিমাইন্ডারে সাবস্ক্রাইব করার অনুমতি দিন (WhatsApp API কনফিগারেশন প্রয়োজন)।';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'WhatsApp বার্তা পাঠানোর API এন্ডপয়েন্ট (যেমন Twilio, MessageBird)। "to", "from", এবং "body" ফিল্ড সম্বলিত JSON বডি সহ POST গ্রহণ করতে হবে।';
$string['settings:whatsapp_api_token'] = 'WhatsApp API টোকেন';
$string['settings:whatsapp_api_token_desc'] = 'WhatsApp API-এর জন্য প্রমাণীকরণ টোকেন।';
$string['settings:whatsapp_from_number'] = 'WhatsApp প্রেরকের নম্বর';
$string['settings:whatsapp_from_number_desc'] = 'WhatsApp বার্তা পাঠানোর ফোন নম্বর (দেশ কোড সহ, যেমন +14155238886)।';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp-এ ব্লক করা দেশ';
$string['settings:whatsapp_blocked_countries_desc'] = 'স্থানীয় বিধিমালার কারণে যেসব দেশে WhatsApp রিমাইন্ডার অনুমোদিত নয় তাদের কমা-বিভাজিত ISO 3166-1 alpha-2 দেশ কোড (যেমন "CN,IR,KP")।';
$string['reminder:email_subject'] = 'অধ্যয়ন রিমাইন্ডার: {$a}';
$string['reminder:email_body'] = 'প্রিয় {$a->firstname},

এটি "{$a->coursename}"-এর জন্য আপনার অধ্যয়ন রিমাইন্ডার।

{$a->message}

আপনার অধ্যয়ন পরিকল্পনা এই কোর্সের জন্য প্রতি সপ্তাহে {$a->hours_per_week} ঘণ্টার পরামর্শ দেয়।

চমৎকার কাজ চালিয়ে যান!

---
এই রিমাইন্ডারগুলি বন্ধ করতে এখানে ক্লিক করুন: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = '{$a->coursename}-এর জন্য অধ্যয়ন রিমাইন্ডার: {$a->message} (সাবস্ক্রিপশন বাতিল: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'আজকের অধ্যয়নের ফোকাস: ';
$string['unsubscribe:title'] = 'অধ্যয়ন রিমাইন্ডার থেকে আনসাবস্ক্রাইব করুন';
$string['unsubscribe:success'] = 'আপনি এই কোর্সের অধ্যয়ন রিমাইন্ডার থেকে সফলভাবে আনসাবস্ক্রাইব হয়েছেন।';
$string['unsubscribe:already'] = 'আপনি ইতিমধ্যে এই রিমাইন্ডারগুলি থেকে আনসাবস্ক্রাইব হয়েছেন।';
$string['unsubscribe:invalid'] = 'অবৈধ বা মেয়াদোত্তীর্ণ আনসাবস্ক্রাইব লিংক।';
$string['unsubscribe:resubscribe'] = 'মন পরিবর্তন করেছেন? AI টিউটর চ্যাটের মাধ্যমে আবার রিমাইন্ডার সক্রিয় করতে পারবেন।';
$string['task:send_reminders'] = 'AI টিউটর অধ্যয়ন রিমাইন্ডার পাঠান';
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'শিক্ষার্থীদের অধ্যয়ন পরিকল্পনা সংরক্ষণ করে।';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'অধ্যয়ন পরিকল্পনার মালিক ব্যবহারকারীর আইডি।';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'যে কোর্সের সাথে অধ্যয়ন পরিকল্পনাটি সম্পর্কিত।';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'শিক্ষার্থী প্রতি সপ্তাহে কত ঘণ্টা পড়াশোনার পরিকল্পনা করেন।';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'JSON ফরম্যাটে অধ্যয়ন পরিকল্পনার বিস্তারিত।';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'অধ্যয়ন রিমাইন্ডার পছন্দ এবং সাবস্ক্রিপশন সংরক্ষণ করে।';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'রিমাইন্ডারে সাবস্ক্রাইব করা ব্যবহারকারীর আইডি।';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'রিমাইন্ডার চ্যানেল (ইমেইল বা WhatsApp)।';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'রিমাইন্ডারের জন্য ইমেইল ঠিকানা বা ফোন নম্বর।';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'নিয়ন্ত্রক সম্মতির জন্য ব্যবহারকারীর দেশ কোড।';
$string['analytics:title'] = 'AI টিউটর বিশ্লেষণ';
$string['analytics:overview'] = 'সারসংক্ষেপ';
$string['analytics:total_conversations'] = 'মোট কথোপকথন';
$string['analytics:total_messages'] = 'মোট বার্তা';
$string['analytics:active_students'] = 'সক্রিয় শিক্ষার্থী';
$string['analytics:avg_messages_per_student'] = 'প্রতি শিক্ষার্থী গড় বার্তা';
$string['analytics:offtopic_rate'] = 'বিষয়-বহির্ভূত হার';
$string['analytics:escalation_count'] = 'সাপোর্টে এসকালেট করা হয়েছে';
$string['analytics:studyplan_adoption'] = 'অধ্যয়ন পরিকল্পনা সহ শিক্ষার্থী';
$string['analytics:usage_trends'] = 'ব্যবহারের প্রবণতা';
$string['analytics:daily_messages'] = 'দৈনিক বার্তার পরিমাণ';
$string['analytics:hotspots'] = 'কোর্সের হটস্পট';
$string['analytics:hotspots_desc'] = 'শিক্ষার্থীদের প্রশ্নে সবচেয়ে বেশি উল্লিখিত কোর্স বিভাগগুলি। বেশি সংখ্যক মানে সেই এলাকায় শিক্ষার্থীদের আরও সহায়তা প্রয়োজন।';
$string['analytics:section'] = 'বিভাগ';
$string['analytics:mention_count'] = 'উল্লেখ';
$string['analytics:common_prompts'] = 'সাধারণ প্রম্পট প্যাটার্ন';
$string['analytics:common_prompts_desc'] = 'শিক্ষার্থীদের বারবার জিজ্ঞাসা করা প্রশ্নের প্যাটার্ন। কোর্সের বিষয়বস্তুতে পদ্ধতিগত ফাঁক চিহ্নিত করতে এগুলি পর্যালোচনা করুন।';
$string['analytics:prompt_pattern'] = 'প্যাটার্ন';
$string['analytics:frequency'] = 'কম্পাঙ্ক';
$string['analytics:recent_activity'] = 'সাম্প্রতিক কার্যকলাপ';
$string['analytics:no_data'] = 'এখনো কোনো বিশ্লেষণ ডেটা পাওয়া যায়নি। শিক্ষার্থীরা AI টিউটর ব্যবহার শুরু করলে ডেটা দেখা যাবে।';
$string['analytics:timerange'] = 'সময়সীমা';
$string['analytics:last_7_days'] = 'গত ৭ দিন';
$string['analytics:last_30_days'] = 'গত ৩০ দিন';
$string['analytics:all_time'] = 'সব সময়';
$string['analytics:export'] = 'ডেটা রপ্তানি করুন';
$string['analytics:provider_comparison'] = 'AI প্রদানকারী তুলনা';
$string['analytics:provider_comparison_desc'] = 'এই কোর্সে ব্যবহৃত AI প্রদানকারীদের পারফরম্যান্স তুলনা করুন।';
$string['analytics:provider'] = 'প্রদানকারী';
$string['analytics:response_count'] = 'প্রতিক্রিয়া';
$string['analytics:avg_response_length'] = 'গড় প্রতিক্রিয়ার দৈর্ঘ্য';
$string['analytics:total_tokens'] = 'মোট টোকেন';
$string['analytics:avg_tokens'] = 'গড় টোকেন / প্রতিক্রিয়া';
$string['usersettings:title'] = 'AI কোর্স সহকারী - আপনার ডেটা';
$string['usersettings:intro'] = 'আপনার AI টিউটর চ্যাটের ডেটা ও গোপনীয়তা সেটিংস পরিচালনা করুন';
$string['usersettings:privacy_info'] = 'আপনার কোর্স জুড়ে আপনাকে ক্রমাগত সহায়তা প্রদান করতে AI টিউটরের সাথে আপনার কথোপকথন সংরক্ষণ করা হয়। আপনার এই ডেটার উপর সম্পূর্ণ নিয়ন্ত্রণ আছে এবং আপনি যেকোনো সময় এটি মুছে দিতে পারেন।';
$string['usersettings:usage_stats'] = 'আপনার ব্যবহারের পরিসংখ্যান';
$string['usersettings:total_messages'] = 'মোট বার্তা';
$string['usersettings:total_conversations'] = 'কথোপকথন';
$string['usersettings:messages'] = 'বার্তা';
$string['usersettings:last_activity'] = 'শেষ কার্যকলাপ';
$string['usersettings:delete_course_data'] = 'কোর্সের ডেটা মুছুন';
$string['usersettings:no_data'] = 'আপনি এখনো AI টিউটর ব্যবহার করেননি। চ্যাট শুরু করলে আপনার ব্যবহারের ডেটা এখানে দেখাবে।';
$string['usersettings:delete_all_title'] = 'আপনার সব ডেটা মুছুন';
$string['usersettings:delete_all_warning'] = 'এটি সমস্ত কোর্স জুড়ে AI টিউটরের সাথে আপনার সমস্ত কথোপকথন স্থায়ীভাবে মুছে দেবে। এই ক্রিয়াটি পূর্বাবস্থায় ফেরানো যাবে না।';
$string['usersettings:delete_all_button'] = 'আমার সব ডেটা মুছুন';
$string['usersettings:confirm_delete_course'] = 'আপনি কি "{$a}" কোর্সের জন্য AI টিউটরের সমস্ত ডেটা স্থায়ীভাবে মুছে দিতে চান? এই ক্রিয়াটি পূর্বাবস্থায় ফেরানো যাবে না।';
$string['usersettings:confirm_delete_all'] = 'আপনি কি সমস্ত কোর্স জুড়ে AI টিউটরের আপনার সমস্ত ডেটা স্থায়ীভাবে মুছে দিতে চান? এই ক্রিয়াটি পূর্বাবস্থায় ফেরানো যাবে না।';
$string['usersettings:data_deleted'] = 'আপনার ডেটা মুছে দেওয়া হয়েছে।';

// === SOLA v1.0.12 — new features translation ===
$string['chat:greeting'] = 'হ্যালো, {$a}! আমি SOLA, সেলর অনলাইন লার্নিং অ্যাসিস্ট্যান্ট।';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA খুলুন';
$string['chat:change_avatar'] = 'অবতার পরিবর্তন করুন';

// Quiz UI.
$string['chat:quiz'] = 'অনুশীলন কুইজ নিন';
$string['chat:quiz_setup_title'] = 'অনুশীলন কুইজ';
$string['chat:quiz_questions'] = 'প্রশ্নের সংখ্যা';
$string['chat:quiz_topic'] = 'বিষয়';
$string['chat:quiz_topic_guided'] = 'AI-নির্দেশিত (আপনার অগ্রগতির উপর ভিত্তি করে)';
$string['chat:quiz_topic_default'] = 'বর্তমান কোর্সের বিষয়বস্তু';
$string['chat:quiz_topic_custom'] = 'কাস্টম বিষয়…';
$string['chat:quiz_custom_placeholder'] = 'একটি বিষয় বা প্রশ্ন লিখুন...';
$string['chat:quiz_start'] = 'কুইজ শুরু করুন';
$string['chat:quiz_cancel'] = 'বাতিল করুন';
$string['chat:quiz_loading'] = 'কুইজ তৈরি হচ্ছে…';
$string['chat:quiz_error'] = 'কুইজ তৈরি করা সম্ভব হয়নি। আবার চেষ্টা করুন।';
$string['chat:quiz_correct'] = 'সঠিক!';
$string['chat:quiz_wrong'] = 'ভুল।';
$string['chat:quiz_next'] = 'পরবর্তী প্রশ্ন';
$string['chat:quiz_finish'] = 'ফলাফল দেখুন';
$string['chat:quiz_score'] = 'কুইজ সম্পন্ন! আপনি {$a->total}-এর মধ্যে {$a->score} পেয়েছেন।';
$string['chat:quiz_summary'] = 'আমি এইমাত্র "{$a->topic}" বিষয়ে {$a->total}-প্রশ্নের অনুশীলন কুইজ সম্পন্ন করেছি এবং {$a->score}/{$a->total} পেয়েছি।';
$string['chat:quiz_topic_objectives'] = 'শেখার লক্ষ্যমাত্রা';
$string['chat:quiz_topic_modules'] = 'কোর্স বিষয়';
$string['chat:quiz_subtopic_select'] = 'একটি নির্দিষ্ট আইটেম নির্বাচন করুন…';
$string['chat:quiz_topic_sections'] = 'কোর্সের অধ্যায়সমূহ';
$string['chat:quiz_score_great'] = 'চমৎকার কাজ! আপনি এই বিষয়টি সত্যিই ভালো জানেন।';
$string['chat:quiz_score_good'] = 'ভালো চেষ্টা! আপনার বোঝাপড়া মজবুত করতে পুনরাবৃত্তি চালিয়ে যান।';
$string['chat:quiz_score_practice'] = 'অনুশীলন চালিয়ে যান — সংশ্লিষ্ট কোর্স উপকরণ পর্যালোচনা করুন, তারপর কুইজটি আবার দিন।';
$string['chat:quiz_review_heading'] = 'পর্যালোচনা';
$string['chat:quiz_retake'] = 'কুইজ আবার দিন';
$string['chat:quiz_exit'] = 'কুইজ থেকে বের হন';
$string['chat:quiz_your_answer'] = 'আপনার উত্তর';
$string['chat:quiz_correct_answer'] = 'সঠিক উত্তর';

// Conversation starters.
$string['chat:starters_label'] = 'কথোপকথনের সূচনা';
$string['chat:starter_quiz'] = 'এটা নিয়ে পরীক্ষা করুন';
$string['chat:starter_explain'] = 'এটি ব্যাখ্যা করুন';
$string['chat:starter_key_concepts'] = 'মূল ধারণাসমূহ';
$string['chat:starter_study_plan'] = 'অধ্যয়ন পরিকল্পনা';
$string['chat:starter_help_me'] = 'AI সাহায্য';
$string['chat:starter_ai_project_coach'] = 'AI প্রকল্প প্রশিক্ষক';
$string['chat:starter_ell_practice'] = 'কথোপকথন অনুশীলন';
$string['chat:starter_ell_pronunciation'] = 'ELL উচ্চারণ';
$string['chat:starter_ai_coach'] = 'AI কোচ';
$string['chat:starter_speak'] = 'সূচনা বলুন';

// Reset / home.
$string['chat:reset'] = 'নতুন করে শুরু করুন';

// Topic picker.
$string['chat:topic_picker_title'] = 'আপনি কোন বিষয়ে মনোযোগ দিতে চান?';
$string['chat:topic_picker_title_help'] = 'আপনি কোন বিষয়ে সাহায্য চান?';
$string['chat:topic_picker_title_explain'] = 'আপনি কোন বিষয়টি ব্যাখ্যা করতে চান?';
$string['chat:topic_picker_title_study'] = 'আপনি কোন ক্ষেত্রে মনোযোগ দিতে চান?';
$string['chat:topic_start'] = 'এগিয়ে যান';

// Expand states.
$string['chat:fullscreen'] = 'পূর্ণ পর্দা';
$string['chat:exitfullscreen'] = 'পূর্ণ পর্দা থেকে বের হন';

// Settings panel.
$string['chat:language'] = 'ভাষা পরিবর্তন করুন';
$string['chat:settings_panel'] = 'সেটিংস';
$string['chat:settings_language'] = 'ভাষা';
$string['chat:settings_avatar'] = 'অবতার';
$string['chat:settings_voice'] = 'ভয়েস';
$string['chat:settings_voice_admin'] = 'ভয়েস সেটিংস সাইট অ্যাডমিন প্যানেলে পরিচালনা করা হয়।';

// Voice mode.
$string['chat:voice_mode'] = 'ভয়েস মোড';
$string['chat:voice_end'] = 'ভয়েস সেশন শেষ করুন';
$string['chat:voice_connecting'] = 'সংযুক্ত হচ্ছে...';
$string['chat:voice_listening'] = 'শুনছে...';
$string['chat:voice_speaking'] = 'SOLA কথা বলছে...';
$string['chat:voice_idle'] = 'প্রস্তুত';
$string['chat:voice_error'] = 'ভয়েস সংযোগ ব্যর্থ হয়েছে। আপনার সেটিংস পরীক্ষা করুন।';
$string['chat:quiz_locked'] = 'একাডেমিক সততা সমর্থনের জন্য কুইজ চলাকালীন SOLA বিরতিতে রয়েছে। শুভকামনা!';
$string['task:send_inactivity_reminders'] = 'সাপ্তাহিক নিষ্ক্রিয়তা স্মরণ ইমেল পাঠান';
$string['messageprovider:study_notes'] = 'অধ্যয়ন সেশন নোট';
$string['task:send_inactivity_reminders'] = 'সাপ্তাহিক নিষ্ক্রিয়তা অনুস্মারক ইমেল পাঠান';
$string['messageprovider:study_notes'] = 'অধ্যয়ন সেশন নোট';
