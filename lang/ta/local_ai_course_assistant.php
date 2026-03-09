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
 * Language strings for local_ai_course_assistant — Tamil / தமிழ்.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'AI பாட உதவியாளர்';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'ஒவ்வொரு பயனர் மற்றும் பாடத்திற்கான AI ஆசிரியர் உரையாடல்களை சேமிக்கிறது.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'உரையாடலை வைத்திருக்கும் பயனரின் ID.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'உரையாடல் சார்ந்த பாடத்தின் ID.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'உரையாடலின் தலைப்பு.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'உரையாடல் உருவாக்கப்பட்ட நேரம்.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'உரையாடல் கடைசியாக மாற்றப்பட்ட நேரம்.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'உரையாடல்களில் தனிப்பட்ட செய்திகளை சேமிக்கிறது.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'செய்தியை அனுப்பிய பயனரின் ID.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'செய்தி சார்ந்த பாடத்தின் ID.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'செய்தி அனுப்புபவரின் பங்கு (பயனர் அல்லது உதவியாளர்).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'செய்தியின் உள்ளடக்கம்.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'செய்திக்கு பயன்படுத்தப்பட்ட டோக்கன்களின் எண்ணிக்கை.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'செய்தி உருவாக்கப்பட்ட நேரம்.';

// Capabilities.
$string['ai_course_assistant:use'] = 'AI ஆசிரியர் அரட்டையைப் பயன்படுத்து';
$string['ai_course_assistant:viewanalytics'] = 'AI ஆசிரியர் அரட்டை பகுப்பாய்வைப் பார்';
$string['ai_course_assistant:manage'] = 'AI ஆசிரியர் அரட்டை அமைப்புகளை நிர்வகி (நிர்வாகி பங்கு)';

// Settings.
$string['settings:enabled'] = 'AI பாட உதவியாளரை இயக்கு';
$string['settings:enabled_desc'] = 'பாட பக்கங்களில் AI பாட உதவியாளர் விட்ஜெட்டை இயக்கு அல்லது முடக்கு.';
$string['settings:provider'] = 'AI வழங்குநர்';
$string['settings:provider_desc'] = 'அரட்டை நிறைவுகளுக்கு பயன்படுத்த AI வழங்குநரை தேர்ந்தெடு.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (உள்ளூர்)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'தனிப்பயன் (OpenAI-இணக்கமான)';
$string['settings:apikey'] = 'API விசை';
$string['settings:apikey_desc'] = 'தேர்ந்தெடுக்கப்பட்ட வழங்குநருக்கான API விசை. Ollama-க்கு தேவையில்லை.';
$string['settings:model'] = 'மாதிரி பெயர்';
$string['settings:model_desc'] = 'பயன்படுத்த வேண்டிய மாதிரி. இயல்புநிலை வழங்குநரை பொறுத்தது (எ.கா. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'API அடிப்படை URL';
$string['settings:apibaseurl_desc'] = 'API-க்கான அடிப்படை URL. ஒவ்வொரு வழங்குநருக்கும் தானாக நிரப்பப்படும் ஆனால் மாற்றலாம். வழங்குநர் இயல்புநிலைக்கு காலியாக விடவும்.';
$string['settings:systemprompt'] = 'சிஸ்டம் ப்ராம்ட் வார்ப்புரு';
$string['settings:systemprompt_desc'] = 'AI-க்கு அனுப்பப்படும் சிஸ்டம் ப்ராம்ட். இடமாற்று கையகப்படுத்திகளைப் பயன்படுத்தவும்: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'நீங்கள் "{{coursename}}" பாடத்திற்கான ஒரு உதவிகரமான AI ஆசிரியர். மாணவரின் பங்கு {{userrole}}.

உள்ளடக்கப்பட்ட பாட தலைப்புகள்:
{{coursetopics}}

மாணவர் பாட உள்ளடக்கத்தை புரிந்துகொள்ள உதவுங்கள். ஊக்கமளிப்பவராக, தெளிவாக மற்றும் கற்பித்தல் ரீதியாக சரியாக இருங்கள்.';
$string['settings:temperature'] = 'வெப்பநிலை';
$string['settings:temperature_desc'] = 'சீரற்ற தன்மையை கட்டுப்படுத்துகிறது. குறைந்த மதிப்புகள் அதிக கவனமானவை, அதிக மதிப்புகள் அதிக ஆக்கப்பூர்வமானவை. வரம்பு: 0.0 முதல் 2.0 வரை.';
$string['settings:maxhistory'] = 'அதிகபட்ச உரையாடல் வரலாறு';
$string['settings:maxhistory_desc'] = 'API கோரிக்கைகளில் சேர்க்க வேண்டிய செய்தி ஜோடிகளின் அதிகபட்ச எண்ணிக்கை. பழைய செய்திகள் ஒழுங்கீனமாக்கப்படும்.';
$string['settings:avatar'] = 'அரட்டை அவதாரம்';
$string['settings:avatar_desc'] = 'அரட்டை விட்ஜெட் பொத்தானுக்கான அவதார ஐகானை தேர்ந்தெடு.';
$string['settings:avatar_saylor'] = 'Saylor Academy லோகோ (இயல்புநிலை)';
$string['settings:position'] = 'விட்ஜெட் நிலை';
$string['settings:position_desc'] = 'பக்கத்தில் அரட்டை விட்ஜெட்டின் நிலை.';
$string['settings:position_br'] = 'கீழே வலது';
$string['settings:position_bl'] = 'கீழே இடது';
$string['settings:position_tr'] = 'மேலே வலது';
$string['settings:position_tl'] = 'மேலே இடது';
$string['chat:settings'] = 'செருகுநிரல் அமைப்புகள்';
$string['analytics:viewdashboard'] = 'பகுப்பாய்வு டாஷ்போர்டைப் பார்';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'பாட AI அமைப்புகள்';
$string['coursesettings:enabled'] = 'பாட மேலெழுதல்களை இயக்கு';
$string['coursesettings:enabled_desc'] = 'இயக்கப்படும்போது, கீழே உள்ள அமைப்புகள் இந்த பாடத்திற்கு மட்டும் உலகளாவிய AI வழங்குநர் கட்டமைப்பை மேலெழுதுகின்றன. உலகளாவிய மதிப்பை பெற வெற்று புலங்களை விடவும்.';
$string['coursesettings:using_global'] = 'உலகளாவிய அமைப்பை பயன்படுத்துகிறது';
$string['coursesettings:saved'] = 'பாட AI அமைப்புகள் சேமிக்கப்பட்டன.';
$string['coursesettings:global_settings_link'] = 'உலகளாவிய AI அமைப்புகள்';

// Language detection and preference.
$string['lang:switch'] = 'ஆம், மாற்று';
$string['lang:dismiss'] = 'வேண்டாம், நன்றி';
$string['lang:change'] = 'மொழியை மாற்று';
$string['lang:english'] = 'ஆங்கிலம்';

// Chat widget.
$string['chat:title'] = 'AI ஆசிரியர்';
$string['chat:placeholder'] = 'ஒரு கேள்வி கேளுங்கள்...';
$string['chat:send'] = 'அனுப்பு';
$string['chat:close'] = 'அரட்டையை மூடு';
$string['chat:open'] = 'AI ஆசிரியர் அரட்டையைத் திற';
$string['chat:clear'] = 'வரலாற்றை அழி';
$string['chat:clear_confirm'] = 'இந்த பாடத்திற்கான உங்கள் அரட்டை வரலாற்றை அழிக்க விரும்புகிறீர்களா?';
$string['chat:copy'] = 'உரையாடலை நகலெடு';
$string['chat:copied'] = 'உரையாடல் கிளிப்போர்டில் நகலெடுக்கப்பட்டது';
$string['chat:copy_failed'] = 'உரையாடலை நகலெடுக்க தோல்வியுற்றது';
$string['chat:greeting'] = 'வணக்கம்! நான் இந்த பாடத்திற்கான உங்கள் AI ஆசிரியர். இன்று நான் உங்களுக்கு எப்படி உதவ முடியும்?';
$string['chat:thinking'] = 'யோசிக்கிறேன்...';
$string['chat:error'] = 'மன்னிக்கவும், ஏதோ தவறு ஆயிற்று. மீண்டும் முயற்சிக்கவும்.';
$string['chat:error_auth'] = 'அங்கீகார பிழை. உங்கள் நிர்வாகியை தொடர்பு கொள்ளவும்.';
$string['chat:error_ratelimit'] = 'அதிக கோரிக்கைகள். சற்று காத்திருந்து மீண்டும் முயற்சிக்கவும்.';
$string['chat:error_unavailable'] = 'AI சேவை தற்காலிகமாக கிடைக்கவில்லை. பின்னர் மீண்டும் முயற்சிக்கவும்.';
$string['chat:error_notconfigured'] = 'AI ஆசிரியர் இன்னும் கட்டமைக்கப்படவில்லை. உங்கள் நிர்வாகியை தொடர்பு கொள்ளவும்.';
$string['chat:expand'] = 'அரட்டையை விரிவாக்கு';
$string['chat:collapse'] = 'அரட்டையை சுருக்கு';
$string['chat:mic'] = 'உங்கள் கேள்வியை பேசுங்கள்';
$string['chat:mic_error'] = 'மைக்ரோஃபோன் பிழை. உங்கள் உலாவி அனுமதிகளை சரிபார்க்கவும்.';
$string['chat:mic_unsupported'] = 'இந்த உலாவியில் பேச்சு உள்ளீடு ஆதரிக்கப்படவில்லை.';
$string['chat:newline_hint'] = 'புதிய வரிக்கு Shift+Enter';
$string['chat:you'] = 'நீங்கள்';
$string['chat:assistant'] = 'AI ஆசிரியர்';
$string['chat:history_loaded'] = 'முந்தைய உரையாடல் ஏற்றப்பட்டது.';
$string['chat:history_cleared'] = 'அரட்டை வரலாறு அழிக்கப்பட்டது.';
$string['chat:offtopic_warning'] = 'உங்கள் கேள்வி இந்த பாடத்துடன் தொடர்புடையது அல்ல என்று தெரிகிறது. நான் உங்களுக்கு சிறப்பாக உதவ முடியும் என்பதால் தலைப்பில் நிலைத்திருக்க முயற்சிக்கவும்!';
$string['chat:offtopic_ended'] = 'உங்கள் AI ஆசிரியர் அணுகல் {$a} நிமிடங்களுக்கு தற்காலிகமாக நிறுத்தப்பட்டுள்ளது, ஏனெனில் உரையாடல் பலமுறை தலைப்பிலிருந்து விலகியது. இந்த நேரத்தில் உங்கள் பாட உள்ளடக்கத்தை மதிப்பாய்வு செய்யவும், நீங்கள் பின்னர் மீண்டும் முயற்சிக்கலாம்.';
$string['chat:offtopic_locked'] = 'உங்கள் AI ஆசிரியர் அணுகல் தற்காலிகமாக நிறுத்தப்பட்டுள்ளது. {$a} நிமிடங்களில் மீண்டும் முயற்சிக்கலாம். திரும்பும்போது பாடம் தொடர்பான கேள்விகளில் கவனம் செலுத்தவும்.';
$string['chat:escalated_to_support'] = 'உங்கள் கேள்விக்கு முழுமையாக பதில் அளிக்க முடியவில்லை, எனவே உங்களுக்கு ஒரு ஆதரவு டிக்கட் உருவாக்கினேன். ஒரு ஆதரவு குழு உறுப்பினர் பின்தொடர்வார். உங்கள் டிக்கட் குறிப்பு எண்: {$a}';
$string['chat:studyplan_intro'] = 'இந்த பாடத்திற்கான படிப்பு திட்டம் உருவாக்க உதவ முடியும்! ஒரு வாரத்தில் படிப்பிற்கு எத்தனை மணி நேரம் ஒதுக்க முடியும் என்று சொல்லுங்கள், ஒரு கட்டமைக்கப்பட்ட திட்டம் தயாரிக்க உதவுகிறேன்.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'FAQ மற்றும் ஆதரவு';
$string['settings:faq_heading_desc'] = 'மையப்படுத்தப்பட்ட FAQ மற்றும் Zendesk ஆதரவு டிக்கட் ஒருங்கிணைப்பை கட்டமை.';
$string['settings:faq_content'] = 'FAQ உள்ளடக்கம்';
$string['settings:faq_content_desc'] = 'FAQ உள்ளீடுகளை உள்ளிடவும் (வடிவத்தில் வரி ஒன்றுக்கு ஒன்று: Q: கேள்வி | A: பதில்). பொதுவான ஆதரவு கேள்விகளுக்கு பதில் அளிக்க AI-க்கு வழங்கப்படும்.';
$string['settings:zendesk_enabled'] = 'Zendesk படிப்படியான அதிகரிப்பை இயக்கு';
$string['settings:zendesk_enabled_desc'] = 'AI ஒரு ஆதரவு கேள்வியை தீர்க்க முடியாதபோது, உரையாடல் சுருக்கத்துடன் தானாக Zendesk டிக்கட் உருவாக்கவும்.';
$string['settings:zendesk_subdomain'] = 'Zendesk துணை டொமைன்';
$string['settings:zendesk_subdomain_desc'] = 'உங்கள் Zendesk துணை டொமைன் (எ.கா. mycompany.zendesk.com-க்கு "mycompany").';
$string['settings:zendesk_email'] = 'Zendesk API மின்னஞ்சல்';
$string['settings:zendesk_email_desc'] = 'API அங்கீகாரத்திற்கான Zendesk பயனர் மின்னஞ்சல் முகவரி (/token பின்னொட்டுடன்).';
$string['settings:zendesk_token'] = 'Zendesk API டோக்கன்';
$string['settings:zendesk_token_desc'] = 'Zendesk அங்கீகாரத்திற்கான API டோக்கன்.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'தலைப்புக்கு வெளியே கண்டறிதல்';
$string['settings:offtopic_heading_desc'] = 'தலைப்புக்கு வெளியான உரையாடல்களை அரட்டை எவ்வாறு கையாள்கிறது என்பதை கட்டமை.';
$string['settings:offtopic_enabled'] = 'தலைப்புக்கு வெளியே கண்டறிதலை இயக்கு';
$string['settings:offtopic_enabled_desc'] = 'தலைப்புக்கு வெளியான உரையாடல்களை கண்டறிந்து திருப்பிவிட AI-க்கு அறிவுறுத்தவும்.';
$string['settings:offtopic_max'] = 'அதிகபட்ச தலைப்புக்கு வெளியான செய்திகள்';
$string['settings:offtopic_max_desc'] = 'நடவடிக்கை எடுப்பதற்கு முன் தொடர்ச்சியான தலைப்புக்கு வெளியான செய்திகளின் எண்ணிக்கை.';
$string['settings:offtopic_action'] = 'தலைப்புக்கு வெளியான நடவடிக்கை';
$string['settings:offtopic_action_desc'] = 'தலைப்புக்கு வெளியான வரம்பை அடைந்தால் என்ன செய்வது.';
$string['settings:offtopic_action_warn'] = 'எச்சரிக்கை மற்றும் திருப்பிவிடு';
$string['settings:offtopic_action_end'] = 'தற்காலிகமாக அணுகலை தடை செய்';
$string['settings:offtopic_lockout_duration'] = 'தடை கால அளவு (நிமிடங்கள்)';
$string['settings:offtopic_lockout_duration_desc'] = 'தலைப்புக்கு வெளியான வரம்பை மீறிய பிறகு மாணவர் AI ஆசிரியர் அணுகலை இழக்கும் காலம் (நிமிடங்களில்). இயல்புநிலை: 30 நிமிடங்கள்.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'படிப்பு திட்டமிடல் மற்றும் நினைவூட்டல்கள்';
$string['settings:studyplan_heading_desc'] = 'படிப்பு திட்டமிடல் அம்சங்கள் மற்றும் நினைவூட்டல் அறிவிப்புகளை கட்டமை.';
$string['settings:studyplan_enabled'] = 'படிப்பு திட்டமிடலை இயக்கு';
$string['settings:studyplan_enabled_desc'] = 'AI ஆசிரியர் கிடைக்கும் நேரத்தின் அடிப்படையில் மாணவர்களுக்கு தனிப்பயனாக்கப்பட்ட படிப்பு திட்டங்களை உருவாக்க உதவ அனுமதிக்கவும்.';
$string['settings:reminders_email_enabled'] = 'மின்னஞ்சல் நினைவூட்டல்களை இயக்கு';
$string['settings:reminders_email_enabled_desc'] = 'மாணவர்கள் மின்னஞ்சல் வழியாக படிப்பு நினைவூட்டல்களை தேர்ந்தெடுக்க அனுமதிக்கவும்.';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsApp நினைவூட்டல்களை இயக்கு';
$string['settings:reminders_whatsapp_enabled_desc'] = 'மாணவர்கள் WhatsApp வழியாக படிப்பு நினைவூட்டல்களை தேர்ந்தெடுக்க அனுமதிக்கவும் (WhatsApp API கட்டமைப்பு தேவை).';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'WhatsApp செய்திகளை அனுப்புவதற்கான API இறுதிப்புள்ளி (எ.கா. Twilio, MessageBird). "to", "from", மற்றும் "body" புலங்களுடன் JSON உடலை POST ஏற்க வேண்டும்.';
$string['settings:whatsapp_api_token'] = 'WhatsApp API டோக்கன்';
$string['settings:whatsapp_api_token_desc'] = 'WhatsApp API-க்கான அங்கீகார டோக்கன்.';
$string['settings:whatsapp_from_number'] = 'WhatsApp அனுப்புநர் எண்';
$string['settings:whatsapp_from_number_desc'] = 'WhatsApp செய்திகளை அனுப்ப தொலைபேசி எண் (நாட்டு குறியீட்டுடன், எ.கா. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'WhatsApp தடுக்கப்பட்ட நாடுகள்';
$string['settings:whatsapp_blocked_countries_desc'] = 'உள்ளூர் விதிமுறைகள் காரணமாக WhatsApp நினைவூட்டல்கள் அனுமதிக்கப்படாத கமா-பிரிக்கப்பட்ட ISO 3166-1 alpha-2 நாட்டு குறியீடுகள் (எ.கா. "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'படிப்பு நினைவூட்டல்: {$a}';
$string['reminder:email_body'] = 'வணக்கம் {$a->firstname},

இது "{$a->coursename}"-க்கான உங்கள் படிப்பு நினைவூட்டல்.

{$a->message}

உங்கள் படிப்பு திட்டம் இந்த பாடத்திற்கு வாரத்திற்கு {$a->hours_per_week} மணி நேரம் பரிந்துரைக்கிறது.

சிறந்த வேலையை தொடர்ந்து செய்யுங்கள்!

---
இந்த நினைவூட்டல்களை நிறுத்த, இங்கே கிளிக் செய்யுங்கள்: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = '{$a->coursename}-க்கான படிப்பு நினைவூட்டல்: {$a->message} (குழுவிலக்கு: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'இன்றைய படிப்பு கவனம்: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'படிப்பு நினைவூட்டல்களிலிருந்து குழுவிலக்கு';
$string['unsubscribe:success'] = 'இந்த பாடத்திற்கான படிப்பு நினைவூட்டல்களிலிருந்து வெற்றிகரமாக குழுவிலக்கு செய்யப்பட்டீர்கள்.';
$string['unsubscribe:already'] = 'இந்த நினைவூட்டல்களிலிருந்து ஏற்கனவே குழுவிலக்கு செய்யப்பட்டீர்கள்.';
$string['unsubscribe:invalid'] = 'தவறான அல்லது காலாவதியான குழுவிலக்கு இணைப்பு.';
$string['unsubscribe:resubscribe'] = 'மனதை மாற்றிக்கொண்டீர்களா? AI ஆசிரியர் அரட்டை மூலம் நினைவூட்டல்களை மீண்டும் இயக்கலாம்.';

// Scheduled task.
$string['task:send_reminders'] = 'AI ஆசிரியர் படிப்பு நினைவூட்டல்களை அனுப்பு';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'மாணவர் படிப்பு திட்டங்களை சேமிக்கிறது.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'படிப்பு திட்டத்தை வைத்திருக்கும் பயனரின் ID.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'படிப்பு திட்டம் சார்ந்த பாடம்.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'மாணவர் படிக்க திட்டமிட்டிருக்கும் வாராந்திர மணி நேரங்கள்.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'JSON வடிவத்தில் படிப்பு திட்ட விவரங்கள்.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'நினைவூட்டல் விருப்பங்கள் மற்றும் சந்தாக்களை சேமிக்கிறது.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'நினைவூட்டல்களுக்கு சந்தா செய்த பயனரின் ID.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'நினைவூட்டல் சேனல் (மின்னஞ்சல் அல்லது whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'நினைவூட்டல்களுக்கான மின்னஞ்சல் முகவரி அல்லது தொலைபேசி எண்.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'ஒழுங்குமுறை இணக்கத்திற்கான பயனரின் நாட்டு குறியீடு.';

// Analytics dashboard.
$string['analytics:title'] = 'AI ஆசிரியர் பகுப்பாய்வு';
$string['analytics:overview'] = 'கண்ணோட்டம்';
$string['analytics:total_conversations'] = 'மொத்த உரையாடல்கள்';
$string['analytics:total_messages'] = 'மொத்த செய்திகள்';
$string['analytics:active_students'] = 'செயல்பாட்டு மாணவர்கள்';
$string['analytics:avg_messages_per_student'] = 'ஒரு மாணவருக்கு சராசரி செய்திகள்';
$string['analytics:offtopic_rate'] = 'தலைப்புக்கு வெளியான விகிதம்';
$string['analytics:escalation_count'] = 'ஆதரவிற்கு படிப்படியாக அதிகரிக்கப்பட்டது';
$string['analytics:studyplan_adoption'] = 'படிப்பு திட்டங்களுடன் மாணவர்கள்';
$string['analytics:usage_trends'] = 'பயன்பாட்டு போக்குகள்';
$string['analytics:daily_messages'] = 'தினசரி செய்தி அளவு';
$string['analytics:hotspots'] = 'பாட ஹாட்ஸ்பாட்கள்';
$string['analytics:hotspots_desc'] = 'மாணவர் கேள்விகளில் அடிக்கடி குறிப்பிடப்படும் பாட பிரிவுகள். அதிக எண்ணிக்கைகள் மாணவர்களுக்கு அதிக ஆதரவு தேவைப்படும் இடங்களை குறிக்கலாம்.';
$string['analytics:section'] = 'பிரிவு';
$string['analytics:mention_count'] = 'குறிப்பீடுகள்';
$string['analytics:common_prompts'] = 'பொதுவான ப்ராம்ட் வடிவங்கள்';
$string['analytics:common_prompts_desc'] = 'மாணவர்களிடமிருந்து அடிக்கடி மீண்டும் வரும் கேள்வி வடிவங்கள். பாட உள்ளடக்கத்தில் முறையான இடைவெளிகளை அடையாளம் காண இவற்றை மதிப்பாய்வு செய்யவும்.';
$string['analytics:prompt_pattern'] = 'வடிவம்';
$string['analytics:frequency'] = 'அதிர்வெண்';
$string['analytics:recent_activity'] = 'சமீபத்திய செயல்பாடு';
$string['analytics:no_data'] = 'இன்னும் பகுப்பாய்வு தரவு இல்லை. மாணவர்கள் AI ஆசிரியரை பயன்படுத்த தொடங்கியவுடன் தரவு தோன்றும்.';
$string['analytics:timerange'] = 'நேர வரம்பு';
$string['analytics:last_7_days'] = 'கடந்த 7 நாட்கள்';
$string['analytics:last_30_days'] = 'கடந்த 30 நாட்கள்';
$string['analytics:all_time'] = 'எல்லா நேரமும்';
$string['analytics:export'] = 'தரவை ஏற்றுமதி செய்';
$string['analytics:provider_comparison'] = 'AI வழங்குநர் ஒப்பீடு';
$string['analytics:provider_comparison_desc'] = 'இந்த பாடத்தில் பயன்படுத்தப்பட்ட AI வழங்குநர்கள் முழுவதும் செயல்திறனை ஒப்பிடவும்.';
$string['analytics:provider'] = 'வழங்குநர்';
$string['analytics:response_count'] = 'பதில்கள்';
$string['analytics:avg_response_length'] = 'சராசரி பதில் நீளம்';
$string['analytics:total_tokens'] = 'மொத்த டோக்கன்கள்';
$string['analytics:avg_tokens'] = 'சராசரி டோக்கன்கள் / பதில்';

// User settings.
$string['usersettings:title'] = 'AI பாட உதவியாளர் - உங்கள் தரவு';
$string['usersettings:intro'] = 'உங்கள் AI ஆசிரியர் அரட்டை தரவு மற்றும் தனியுரிமை அமைப்புகளை நிர்வகிக்கவும்';
$string['usersettings:privacy_info'] = 'AI ஆசிரியருடனான உங்கள் உரையாடல்கள் பாட காலம் முழுவதும் தொடர்ச்சியான ஆதரவை வழங்க சேமிக்கப்படுகின்றன. இந்த தரவின் மீது உங்களுக்கு முழு கட்டுப்பாடு உள்ளது மற்றும் எந்த நேரத்திலும் நீக்கலாம்.';
$string['usersettings:usage_stats'] = 'உங்கள் பயன்பாட்டு புள்ளிவிவரங்கள்';
$string['usersettings:total_messages'] = 'மொத்த செய்திகள்';
$string['usersettings:total_conversations'] = 'உரையாடல்கள்';
$string['usersettings:messages'] = 'செய்திகள்';
$string['usersettings:last_activity'] = 'கடைசி செயல்பாடு';
$string['usersettings:delete_course_data'] = 'பாட தரவை நீக்கு';
$string['usersettings:no_data'] = 'நீங்கள் இன்னும் AI ஆசிரியரை பயன்படுத்தவில்லை. அரட்டை தொடங்கியவுடன் உங்கள் பயன்பாட்டு தரவு இங்கே தோன்றும்.';
$string['usersettings:delete_all_title'] = 'உங்கள் அனைத்து தரவையும் நீக்கு';
$string['usersettings:delete_all_warning'] = 'இது அனைத்து பாடங்களிலும் உங்கள் அனைத்து AI ஆசிரியர் உரையாடல்களையும் நிரந்தரமாக நீக்கும். இந்த செயலை செயல்தவிர்க்க முடியாது.';
$string['usersettings:delete_all_button'] = 'என் அனைத்து தரவையும் நீக்கு';
$string['usersettings:confirm_delete_course'] = '"{$a}" பாடத்திற்கான உங்கள் அனைத்து AI ஆசிரியர் தரவையும் நிரந்தரமாக நீக்க விரும்புகிறீர்களா? இந்த செயலை செயல்தவிர்க்க முடியாது.';
$string['usersettings:confirm_delete_all'] = 'அனைத்து பாடங்களிலும் உங்கள் அனைத்து AI ஆசிரியர் தரவையும் நிரந்தரமாக நீக்க விரும்புகிறீர்களா? இந்த செயலை செயல்தவிர்க்க முடியாது.';
$string['usersettings:data_deleted'] = 'உங்கள் தரவு நீக்கப்பட்டது.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'வணக்கம், {$a}! நான் SOLA, உங்கள் Saylor ஆன்லைன் கற்றல் உதவியாளர்.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA-வை திற';
$string['chat:change_avatar'] = 'அவதாரத்தை மாற்று';

$string['chat:quiz'] = 'பயிற்சி வினாடி வினா எடு';
$string['chat:quiz_setup_title'] = 'பயிற்சி வினாடி வினா';
$string['chat:quiz_questions'] = 'கேள்விகளின் எண்ணிக்கை';
$string['chat:quiz_topic'] = 'தலைப்பு';
$string['chat:quiz_topic_guided'] = 'AI வழிகாட்டல் (உங்கள் முன்னேற்றத்தின் அடிப்படையில்)';
$string['chat:quiz_topic_default'] = 'தற்போதைய பாட உள்ளடக்கம்';
$string['chat:quiz_topic_custom'] = 'தனிப்பயன் தலைப்பு…';
$string['chat:quiz_custom_placeholder'] = 'ஒரு தலைப்பு அல்லது கேள்வி உள்ளிடவும்...';
$string['chat:quiz_start'] = 'வினாடி வினா தொடங்கு';
$string['chat:quiz_cancel'] = 'ரத்து செய்';
$string['chat:quiz_loading'] = 'வினாடி வினா உருவாக்குகிறது…';
$string['chat:quiz_error'] = 'வினாடி வினா உருவாக்க முடியவில்லை. மீண்டும் முயற்சிக்கவும்.';
$string['chat:quiz_correct'] = 'சரியானது!';
$string['chat:quiz_wrong'] = 'தவறானது.';
$string['chat:quiz_next'] = 'அடுத்த கேள்வி';
$string['chat:quiz_finish'] = 'முடிவுகளைப் பார்';
$string['chat:quiz_score'] = 'வினாடி வினா முடிந்தது! நீங்கள் {$a->total}-இல் {$a->score} மதிப்பெண் பெற்றீர்கள்.';
$string['chat:quiz_summary'] = 'நான் இப்போது "{$a->topic}" தலைப்பில் {$a->total} கேள்விகள் கொண்ட பயிற்சி வினாடி வினா முடித்தேன், {$a->score}/{$a->total} மதிப்பெண் பெற்றேன்.';
$string['chat:quiz_topic_objectives'] = 'கற்றல் நோக்கங்கள்';
$string['chat:quiz_topic_modules'] = 'பாட தலைப்பு';
$string['chat:quiz_subtopic_select'] = 'குறிப்பிட்ட பொருளை தேர்ந்தெடுக்கவும்…';
$string['chat:quiz_topic_sections'] = 'பாட பிரிவுகள்';
$string['chat:quiz_score_great'] = 'சிறந்த வேலை! இந்த தலைப்பை நீங்கள் நன்கு அறிவீர்கள்.';
$string['chat:quiz_score_good'] = 'நல்ல முயற்சி! புரிதலை வலுப்படுத்த தொடர்ந்து படிக்கவும்.';
$string['chat:quiz_score_practice'] = 'தொடர்ந்து பயிற்சி செய்யுங்கள் — தொடர்புடைய பாட உள்ளடக்கத்தை மதிப்பாய்வு செய்து, பின்னர் வினாடி வினா மீண்டும் எடுக்கவும்.';
$string['chat:quiz_review_heading'] = 'மதிப்பாய்வு';
$string['chat:quiz_retake'] = 'வினாடி வினா மீண்டும் எடு';
$string['chat:quiz_exit'] = 'வினாடி வினாவிலிருந்து வெளியேறு';
$string['chat:quiz_your_answer'] = 'உங்கள் பதில்';
$string['chat:quiz_correct_answer'] = 'சரியான பதில்';

$string['chat:starters_label'] = 'உரையாடல் தொடக்கங்கள்';
$string['chat:starter_quiz'] = 'என்னை சோதி';
$string['chat:starter_explain'] = 'இதை விளக்கு';
$string['chat:starter_key_concepts'] = 'முக்கிய கருத்துகள்';
$string['chat:starter_study_plan'] = 'படிப்பு திட்டம்';
$string['chat:starter_help_me'] = 'AI உதவி';
$string['chat:starter_ell_practice'] = 'பேசும் பயிற்சி';
$string['chat:starter_ell_pronunciation'] = 'ELL உச்சரிப்பு';
$string['chat:starter_ai_coach'] = 'AI பயிற்சியாளர்';
$string['chat:starter_speak'] = 'தொடக்கத்தை பேசுங்கள்';

$string['chat:reset'] = 'மீண்டும் தொடங்கு';

$string['chat:topic_picker_title'] = 'நீங்கள் எதில் கவனம் செலுத்த விரும்புகிறீர்கள்?';
$string['chat:topic_picker_title_help'] = 'நீங்கள் எதில் உதவி விரும்புகிறீர்கள்?';
$string['chat:topic_picker_title_explain'] = 'நான் என்ன விளக்க வேண்டும் என்று விரும்புகிறீர்கள்?';
$string['chat:topic_picker_title_study'] = 'எந்த பகுதியில் கவனம் செலுத்த விரும்புகிறீர்கள்?';
$string['chat:topic_start'] = 'தொடர்';

$string['chat:fullscreen'] = 'முழு திரை';
$string['chat:exitfullscreen'] = 'முழு திரையிலிருந்து வெளியேறு';

$string['chat:language'] = 'மொழியை மாற்று';
$string['chat:settings_panel'] = 'அமைப்புகள்';
$string['chat:settings_language'] = 'மொழி';
$string['chat:settings_avatar'] = 'அவதாரம்';
$string['chat:settings_voice'] = 'குரல்';
$string['chat:settings_voice_admin'] = 'குரல் அமைப்புகள் தளத்தின் நிர்வாக பலகத்தில் நிர்வகிக்கப்படுகின்றன.';

$string['chat:voice_mode'] = 'குரல் பயன்முறை';
$string['chat:voice_end'] = 'குரல் அமர்வை முடி';
$string['chat:voice_connecting'] = 'இணைக்கிறது...';
$string['chat:voice_listening'] = 'கேட்கிறது...';
$string['chat:voice_speaking'] = 'SOLA பேசுகிறது...';
$string['chat:voice_idle'] = 'தயார்';
$string['chat:voice_error'] = 'குரல் இணைப்பு தோல்வியுற்றது. அமைப்புகளை சரிபார்க்கவும்.';
$string['chat:quiz_locked'] = 'கல்வி நேர்மையை ஆதரிக்க வினாடி வினாக்களின் போது SOLA இடைநிறுத்தப்பட்டுள்ளது. வாழ்த்துக்கள்!';
$string['task:send_inactivity_reminders'] = 'வாராந்திர செயலற்ற நினைவூட்டல் மின்னஞ்சல்களை அனுப்பவும்';
$string['messageprovider:study_notes'] = 'படிப்பு அமர்வு குறிப்புகள்';
