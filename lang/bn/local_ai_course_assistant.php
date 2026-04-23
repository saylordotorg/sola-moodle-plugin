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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'নতুন কোর্সের জন্য ডিফল্ট';
$string['settings:default_course_mode_desc'] = 'যখন কোর্স-প্রতি কোনও পছন্দ করা হয়নি তখন একটি কোর্সে SOLA দেখা যাবে কিনা তা নিয়ন্ত্রণ করে। নতুন ইনস্টলেশনগুলি ডিফল্টভাবে "ডিফল্টভাবে অক্ষম" হয় যাতে অ্যাডমিনরা Analytics পৃষ্ঠা বা Course AI Settings পৃষ্ঠা থেকে কোর্স-ভিত্তিক অপ্ট-ইন করতে পারেন।';
$string['settings:default_course_mode_per_course'] = 'ডিফল্টভাবে অক্ষম (প্রতি কোর্সে সক্ষম করুন)';
$string['settings:default_course_mode_all'] = 'সমস্ত কোর্সে সক্ষম';
$string['settings:auto_open'] = 'প্রথম ভিজিটে স্বয়ংক্রিয়ভাবে খুলুন';
$string['settings:auto_open_desc'] = 'সক্ষম করা হলে, SOLA ড্রয়ারটি প্রথমবার যখন একজন শিক্ষার্থী প্রতিটি কোর্সে আসে তখন স্বয়ংক্রিয়ভাবে খুলে যায়। একই কোর্সে পরবর্তী পেজ লোডে ড্রয়ারটি পুনরায় খোলে না — অবস্থা শিক্ষার্থীর ব্রাউজারে localStorage এর মাধ্যমে কোর্স অনুযায়ী ট্র্যাক করা হয়। ডেস্কটপ এবং মোবাইলে প্রযোজ্য। Course AI Settings পেজ থেকে প্রতি কোর্সে ওভাররাইড করা যেতে পারে।';
$string['settings:comparison_providers'] = 'তুলনামূলক প্রদানকারী (LLM পিকার)';
$string['settings:comparison_providers_desc'] = 'উইজেটের মধ্যে LLM পিকারে অতিরিক্ত AI প্রদানকারী যোগ করুন যাতে প্রশাসকরা বিভিন্ন প্রদানকারীর প্রতিক্রিয়া তুলনা করতে পারেন। সারি যোগ করতে নীচের টেবিলটি ব্যবহার করুন। তাপমাত্রা কলামটি ঐচ্ছিক (বিশ্বব্যাপী তাপমাত্রা ব্যবহার করতে খালি রাখুন)। সংরক্ষিত ফরম্যাট: provider_id|api_key|model1,model2|temperature। উপরে কনফিগার করা প্রাথমিক প্রদানকারী সর্বদা স্বয়ংক্রিয়ভাবে অন্তর্ভুক্ত থাকে। শুধুমাত্র পরিচালনার ক্ষমতা সম্পন্ন প্রশাসকরা পিকারটি দেখতে পান; শিক্ষার্থীরা কখনও দেখতে পান না। বৈধ provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'ডিফল্ট AI প্রদানকারী';
$string['settings:provider_desc'] = 'চ্যাট কমপ্লিশনের জন্য ব্যবহার করার AI প্রদানকারী নির্বাচন করুন। Moodle-এর Site admin > AI-তে অন্তর্নির্মিত AI কনফিগারেশনের মাধ্যমে অনুরোধ রুট করতে "Moodle AI (core_ai subsystem)" নির্বাচন করুন; সেই মোডে নীচের API কী, মডেল এবং বেস URL ফিল্ডগুলি উপেক্ষা করা হয়। Streaming, tool use, এবং prompt caching core_ai-এর মাধ্যমে উপলব্ধ নয় — প্রতিক্রিয়াগুলি একটি একক খণ্ড হিসাবে সরবরাহ করা হয়। সেরা শিক্ষার্থী অভিজ্ঞতার জন্য একটি সরাসরি প্রদানকারী ব্যবহার করুন।';
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
$string['coursesettings:sola_enabled'] = 'এই কোর্সে SOLA';
$string['coursesettings:sola_enabled_toggle'] = 'এই কোর্সে SOLA উইজেট দেখান';
$string['coursesettings:sola_enabled_desc'] = 'SOLA চ্যাট উইজেট এই কোর্সে প্রদর্শিত হবে কিনা তা নিয়ন্ত্রণ করে। সাইট-ব্যাপী ডিফল্ট প্লাগইন সেটিংসে General > Default for new courses এর অধীনে সেট করা হয়।';
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
$string['chat:clear'] = 'স্ক্রিন মুছুন';
$string['chat:clear_confirm'] = 'দৃশ্যমান বার্তাগুলি মুছবেন? আপনার সম্পূর্ণ চ্যাট ইতিহাস সংরক্ষিত থাকে এবং উইজেট পুনরায় খুললে আবার লোড করা যাবে।';
$string['chat:copy'] = 'কথোপকথন কপি করুন';
$string['chat:copied'] = 'কথোপকথন ক্লিপবোর্ডে কপি করা হয়েছে';
$string['chat:copy_failed'] = 'কথোপকথন কপি করতে ব্যর্থ হয়েছে';
$string['chat:thinking'] = 'চিন্তা করছি...';
$string['chat:error'] = 'দুঃখিত, কিছু ভুল হয়েছে। আবার চেষ্টা করুন।';
$string['chat:error_auth'] = 'প্রমাণীকরণ ত্রুটি। আপনার প্রশাসকের সাথে যোগাযোগ করুন।';
$string['chat:error_ratelimit'] = 'অনেক বেশি অনুরোধ। একটু অপেক্ষা করুন এবং আবার চেষ্টা করুন।';
$string['chat:error_unavailable'] = 'AI সেবাটি সাময়িকভাবে অনুপলব্ধ। পরে আবার চেষ্টা করুন।';
$string['chat:error_notconfigured'] = 'AI টিউটর এখনো কনফিগার করা হয়নি। আপনার প্রশাসকের সাথে যোগাযোগ করুন।';
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
$string['chat:greeting'] = 'হ্যালো, {$a}! আমি SOLA। আজ আমি কীভাবে আপনাকে সাহায্য করতে পারি?';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'নোট';

// History panel.
$string['chat:history_title'] = 'নোট এবং কথোপকথনের ইতিহাস';
$string['task:send_inactivity_reminders'] = 'সাপ্তাহিক নিষ্ক্রিয়তা স্মরণ ইমেল পাঠান';
$string['messageprovider:study_notes'] = 'অধ্যয়ন সেশন নোট';
$string['task:send_inactivity_reminders'] = 'সাপ্তাহিক নিষ্ক্রিয়তা অনুস্মারক ইমেল পাঠান';
$string['task:run_meta_ai_query'] = 'নির্ধারিত লার্নিং রাডার বিশ্লেষণ প্রশ্ন চালান';
$string['messageprovider:study_notes'] = 'অধ্যয়ন সেশন নোট';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / ফ্রন্টএন্ড ডেলিভারি';
$string['settings:cdn_heading_desc'] = 'Moodle ফাইল সিস্টেমের পরিবর্তে একটি বাহ্যিক CDN থেকে SOLA ফ্রন্টএন্ড অ্যাসেট (JS/CSS) পরিবেশন করুন। এটি প্লাগইন আপগ্রেড ছাড়াই ফ্রন্টএন্ড আপডেট সক্ষম করে। স্থানীয় প্লাগইন ফাইল ব্যবহার করতে CDN URL খালি রাখুন।';
$string['settings:cdn_url'] = 'CDN বেস URL';
$string['settings:cdn_url_desc'] = 'যেখানে sola.min.js এবং sola.min.css হোস্ট করা হয়েছে সেই বেস URL। উদাহরণ: https://your-org.github.io/sola-cdn। স্থানীয় প্লাগইন ফাইল ব্যবহার করতে খালি রাখুন।';
$string['settings:cdn_version'] = 'CDN অ্যাসেট সংস্করণ';
$string['settings:cdn_version_desc'] = 'Cache busting-এর জন্য CDN URL-এ যুক্ত সংস্করণ স্ট্রিং। প্রতিটি CDN ডিপ্লয়ের পরে আপডেট করুন (যেমন 3.2.4 বা commit hash)।';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'সামগ্রিক ব্যবহার';
$string['analytics:tab_bycourse'] = 'কোর্স অনুযায়ী';
$string['analytics:tab_comparison'] = 'AI বনাম অ-ব্যবহারকারী';
$string['analytics:tab_byunit'] = 'ইউনিট অনুযায়ী';
$string['analytics:tab_usagetypes'] = 'ব্যবহারের ধরন';
$string['analytics:tab_themes'] = 'থিম';
$string['analytics:tab_feedback'] = 'AI প্রতিক্রিয়া';
$string['analytics:total_students'] = 'মোট শিক্ষার্থী';
$string['analytics:active_users'] = 'সক্রিয় AI ব্যবহারকারী';
$string['analytics:msgs_per_student'] = 'প্রতি শিক্ষার্থী বার্তা';
$string['analytics:avg_session'] = 'গড় সেশনের সময়কাল';
$string['analytics:return_rate'] = 'ফেরার হার';
$string['analytics:total_sessions'] = 'মোট সেশন';
$string['analytics:thumbs_up'] = 'পছন্দ';
$string['analytics:thumbs_down'] = 'অপছন্দ';
$string['analytics:hallucination_flags'] = 'ভুল তথ্যের চিহ্ন';
$string['analytics:msgs_to_resolution'] = 'সমাধান পর্যন্ত বার্তা';
$string['analytics:helpful'] = 'সহায়ক';
$string['analytics:not_helpful'] = 'সহায়ক নয়';
$string['analytics:flag_hallucination'] = 'এই উত্তরে ভুল তথ্য রয়েছে';
$string['analytics:submit_rating'] = 'জমা দিন';
$string['analytics:thanks_feedback'] = 'আপনার মতামতের জন্য ধন্যবাদ';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'এই পৃষ্ঠা ব্যাখ্যা করুন';
$string['chat:starter_ask_anything'] = 'যেকোনো কিছু জিজ্ঞাসা করুন';
$string['chat:starter_review_practice'] = 'পর্যালোচনা ও অনুশীলন';
$string['chat:history_saved_subtitle'] = 'সংরক্ষিত উত্তরগুলি এই কোর্সের জন্য এই ডিভাইসে থাকে।';
$string['chat:history_saved_empty'] = 'এখানে দেখতে একটি AI উত্তর সংরক্ষণ করুন।';
$string['chat:history_views_label'] = 'ইতিহাসের দৃশ্য';
$string['chat:history_view_saved'] = 'সংরক্ষিত';
$string['chat:history_view_recent'] = 'ইতিহাস';
$string['chat:debug_refresh'] = 'রিফ্রেশ';
$string['chat:debug_copy_all'] = 'সব কপি করুন';
$string['chat:debug_close'] = 'বন্ধ করুন';
$string['chat:language_switch'] = 'ভাষা পরিবর্তন করুন';
$string['chat:language_dismiss'] = 'ভাষার পরামর্শ বাতিল করুন';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM প্রদানকারী নির্বাচন করুন';
$string['chat:llm_model_label'] = 'মডেল';
$string['chat:llm_model_select'] = 'LLM মডেল নির্বাচন করুন';
$string['chat:footer_usertesting'] = 'ব্যবহারযোগ্যতা পরীক্ষা';
$string['chat:footer_feedback'] = 'মতামত';
$string['chat:voice_panel_title'] = '{$a} এর সাথে কথা বলুন (পরীক্ষামূলক)';

// Additional translated strings.
$string['chat:debug_context'] = 'কনটেক্সট ডিবাগ';
$string['chat:debug_context_browser'] = 'ব্রাউজার স্ন্যাপশট';
$string['chat:debug_context_copy'] = 'কপি';
$string['chat:debug_context_prompt'] = 'সার্ভার প্রতিক্রিয়া';
$string['chat:debug_context_request'] = 'শেষ SSE অনুরোধ';
$string['chat:debug_context_toggle'] = 'টগল';
$string['chat:history_empty'] = 'কোনো কথোপকথন নেই।';
$string['chat:history_refresh'] = 'রিফ্রেশ';
$string['chat:history_subtitle'] = 'আপনার সাম্প্রতিক বার্তা।';
$string['chat:starter_explain_prompt'] = 'সবচেয়ে গুরুত্বপূর্ণ ধারণা ব্যাখ্যা করুন?';
$string['chat:starter_help_lesson'] = 'ব্যাখ্যা করুন';
$string['chat:starter_help_lesson_prompt'] = 'পাঠ বুঝতে সাহায্য করুন। মূল ধারণার সারাংশ দিন।';
$string['chat:starter_prompt_coach'] = 'AI প্রম্পট কোচ';
$string['chat:starter_quick_study'] = 'দ্রুত অধ্যয়ন';
$string['chat:starter_study_plan_prompt'] = 'অধ্যয়ন পরিকল্পনা করতে চাই। জিজ্ঞাসা করুন: (1) আজ কী করতে চাই, (2) সময় কত। পরিকল্পনা আপডেট করুন।';
$string['chat:voice_copy'] = 'শিক্ষা সহকারীর সাথে কথোপকথন করুন।';
$string['chat:voice_ready'] = 'প্রস্তুত';
$string['chat:voice_start'] = 'শুরু করুন';
$string['chat:voice_title'] = 'SOLA এর সাথে কথা বলুন';
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
$string['mobile_chip_concepts'] = 'মূল ধারণা';
$string['mobile_chip_quiz'] = 'কুইজ';
$string['mobile_chip_studyplan'] = 'অধ্যয়ন পরিকল্পনা';
$string['mobile_clear'] = 'মুছুন';
$string['mobile_disabled'] = 'SOLA এই কোর্সের জন্য উপলব্ধ নয়।';
$string['mobile_placeholder'] = 'একটি প্রশ্ন করুন...';
$string['mobile_welcome'] = 'হ্যালো, {$a}!';
$string['mobile_welcome_sub'] = 'আমি SOLA, আপনার শিক্ষা সহকারী। আজ কীভাবে সাহায্য করতে পারি?';
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
$string['rubric:done'] = 'সম্পন্ন';
$string['rubric:encourage_high'] = 'চমৎকার! চালিয়ে যান!';
$string['rubric:encourage_low'] = 'ভালো শুরু! নিয়মিত অনুশীলন সাহায্য করবে।';
$string['rubric:encourage_mid'] = 'ভালো প্রচেষ্টা! উন্নতির জন্য অনুশীলন করুন।';
$string['rubric:overall'] = 'সামগ্রিক';
$string['rubric:practice_again'] = 'আবার অনুশীলন';
$string['rubric:score_title_conversation'] = 'কথোপকথন অনুশীলন স্কোর';
$string['rubric:score_title_pronunciation'] = 'উচ্চারণ অনুশীলন স্কোর';
$string['rubric:scoring'] = 'মূল্যায়ন হচ্ছে...';
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
$string['demo:title'] = 'পরীক্ষণ পরিবেশ';
$string['demo:heading'] = 'পরীক্ষণ পরিবেশ';
$string['demo:intro'] = 'এই পৃষ্ঠাটি একটি পরীক্ষণ কোর্স তৈরি করে যা <strong>ছাত্রদের থেকে লুকানো</strong> (visible=0) এবং এটিতে নকল ছাত্র, AI কথোপকথন, রেটিং এবং প্রতিক্রিয়া যোগ করে। Analytics Dashboard পূর্বরূপ দেখতে বা প্লাগইন পরিবর্তনগুলি যাচাই করতে কার্যকর, কোনো আসল নিবন্ধিত ছাত্রকে প্রভাবিত না করে।';
$string['demo:step1'] = 'Step 1: পরীক্ষণ কোর্স';
$string['demo:step2'] = 'Step 2: নকল ছাত্র এবং AI চ্যাট যোগ করুন';
$string['demo:course_exists'] = 'পরীক্ষণ কোর্স বিদ্যমান: <strong>{$a->fullname}</strong> (সংক্ষিপ্ত নাম <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'লুকানো';
$string['demo:badge_visible'] = 'ছাত্রদের কাছে দৃশ্যমান';
$string['demo:no_course'] = 'কোন পরীক্ষণ কোর্স পাওয়া যায়নি। একটি তৈরি করতে নীচে ক্লিক করুন।';
$string['demo:create_btn'] = 'লুকানো পরীক্ষণ কোর্স তৈরি করুন';
$string['demo:open_course'] = 'কোর্স খুলুন &rarr;';
$string['demo:seed_intro'] = 'demo_student_001, demo_student_002, ... তৈরি করে, তাদেরকে পরীক্ষণ কোর্সে নিবন্ধন করে, এবং সিন্থেটিক কথোপকথন, বার্তা, রেটিং এবং প্রতিক্রিয়া সন্নিবেশ করে। আরও ডেটা যোগ করতে আবার চালান, বা নতুন করে শুরু করতে "প্রথমে সাফ করুন" টিক দিন।';
$string['demo:users_label'] = 'ব্যবহারকারী';
$string['demo:weeks_label'] = 'সপ্তাহ';
$string['demo:clear_label'] = 'বিদ্যমান demo_* ব্যবহারকারীদের প্রথমে সাফ করুন';
$string['demo:seed_btn'] = 'ছাত্র এবং চ্যাট যোগ করুন';
$string['demo:view_analytics'] = 'এই কোর্সের জন্য Analytics দেখুন &rarr;';
$string['demo:footer'] = 'এখানে তৈরি ডেটা স্ট্যান্ডার্ড Moodle ব্যবহারকারী / নিবন্ধন টেবিলে এবং প্লাগইনের নিজস্ব কথোপকথন টেবিলে থাকে। সমস্ত নকল ব্যবহারকারীর ব্যবহারকারীর নাম <code>demo_student_</code> দিয়ে শুরু হয় যাতে সেগুলিকে ফিল্টার করা বা অপসারণ করা সহজ হয়। এগুলিকে সরাতে, "বিদ্যমান demo_* ব্যবহারকারীদের প্রথমে সাফ করুন" চেক করে seed ধাপটি আবার চালান।';
$string['demo:course_fullname'] = 'SOLA পরীক্ষণ কোর্স (লুকানো)';
$string['demo:notify_created'] = 'পরীক্ষণ কোর্স প্রস্তুত: {$a->fullname} (id {$a->id})।';
$string['demo:notify_create_fail'] = 'কোর্স তৈরি করতে ব্যর্থ: {$a}';
$string['demo:notify_seeded'] = 'যোগ করা হয়েছে: {$a->users} ব্যবহারকারী, {$a->conversations} কথোপকথন, {$a->messages} বার্তা, {$a->ratings} রেটিং, {$a->feedback} প্রতিক্রিয়া।';
$string['demo:notify_seed_fail'] = 'ডেটা যোগ করতে ব্যর্থ: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'টোকেন খরচ ও বিশ্লেষণ &rarr;';
$string['toc:testing'] = 'পরীক্ষণ পরিবেশ &rarr;';
$string['toc:back_to_course'] = '&larr; {$a} এ ফিরে যান';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext বাইনারি পাওয়া যায়নি; PDF নিষ্কাশন নিষ্ক্রিয় করা হয়েছে।';
$string['rag:pdftotext_available'] = '{$a} এ pdftotext সনাক্ত করা হয়েছে।';
$string['rag:docx_unavailable'] = 'PHP ZipArchive এক্সটেনশন উপলব্ধ নয়; DOCX নিষ্কাশন নিষ্ক্রিয় করা হয়েছে।';
$string['rag:h5p_unavailable'] = 'H5P সামগ্রী পড়া যায়নি; এড়িয়ে যাওয়া হচ্ছে।';
$string['rag:scorm_too_large'] = 'SCORM প্যাকেজ কনফিগার করা আকার সীমা ({$a} MB) অতিক্রম করেছে; এড়িয়ে যাওয়া হচ্ছে।';
$string['rag:scorm_unzip_failed'] = 'SCORM প্যাকেজ আনজিপ করা যায়নি; এড়িয়ে যাওয়া হচ্ছে।';
$string['rag:transcript_fetch_failed'] = '{$a} থেকে ট্রান্সক্রিপ্ট আনা যায়নি।';
$string['rag:transcript_cf_challenge'] = 'ট্রান্সক্রিপ্ট URL Cloudflare চ্যালেঞ্জ দ্বারা ব্লক করা হয়েছে: {$a}।';
$string['rag:embed_detected'] = 'এম্বেড করা মিডিয়া সনাক্ত করা হয়েছে: {$a}';
$string['rag:embed_transcript_attached'] = '{$a} এর জন্য ট্রান্সক্রিপ্ট সংযুক্ত করা হয়েছে';

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
