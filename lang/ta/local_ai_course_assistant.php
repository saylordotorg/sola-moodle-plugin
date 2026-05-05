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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'AI பாட உதவியாளர்';
$string['attachment:attach'] = 'இணைக்கவும்';
$string['attachment:attach_image_or_pdf'] = 'படம் அல்லது PDF ஐ இணைக்கவும்';
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
$string['settings:default_course_mode'] = 'புதிய பாடநெறிகளுக்கான இயல்புநிலை';
$string['settings:default_course_mode_desc'] = 'ஒவ்வொரு பாடநெறிக்கும் எந்த தேர்வும் செய்யப்படாதபோது ஒரு பாடநெறியில் SOLA தோன்றுமா என்பதைக் கட்டுப்படுத்துகிறது. புதிய நிறுவல்கள் இயல்பாக "இயல்பாக முடக்கப்பட்டுள்ளது" என்பதற்கு அமைக்கப்பட்டுள்ளன, இதனால் நிர்வாகிகள் Analytics பக்கம் அல்லது Course AI Settings பக்கத்திலிருந்து பாடநெறி-வாரியாக ஒப்புக்கொள்ள முடியும்.';
$string['settings:default_course_mode_per_course'] = 'இயல்பாக முடக்கப்பட்டுள்ளது (ஒவ்வொரு பாடநெறிக்கும் இயக்கவும்)';
$string['settings:default_course_mode_all'] = 'அனைத்து பாடநெறிகளிலும் இயக்கப்பட்டுள்ளது';
$string['settings:auto_open'] = 'முதல் வருகையில் தானாக திற';
$string['settings:auto_open_desc'] = 'இயக்கப்படும்போது, மாணவர் ஒவ்வொரு பாடத்திற்கும் முதல் முறையாக வரும்போது SOLA இழுப்பறை தானாகவே திறக்கும். அதே பாடத்தில் அடுத்தடுத்த பக்க ஏற்றங்கள் இழுப்பறையை மீண்டும் திறக்காது — நிலை மாணவரின் உலாவியில் localStorage மூலம் ஒவ்வொரு பாடத்திற்கும் கண்காணிக்கப்படுகிறது. டெஸ்க்டாப் மற்றும் மொபைலில் பொருந்தும். Course AI Settings பக்கத்தில் இருந்து ஒவ்வொரு பாடத்திற்கும் மேலெழுத முடியும்.';
$string['settings:comparison_providers'] = 'ஒப்பீட்டு வழங்குநர்கள் (LLM தேர்வி)';
$string['settings:comparison_providers_desc'] = 'நிர்வாகிகள் வழங்குநர்கள் முழுவதும் பதில்களை ஒப்பிட வசதியாக, விட்ஜெட்டின் உள்ளமைந்த LLM தேர்வியில் கூடுதல் AI வழங்குநர்களைச் சேர்க்கவும். வரிசைகளைச் சேர்க்க கீழே உள்ள அட்டவணையைப் பயன்படுத்தவும். வெப்பநிலை நெடுவரிசை விருப்பத்தேர்வு (உலகளாவிய வெப்பநிலையைப் பயன்படுத்த வெற்றாக விடவும்). சேமிக்கப்பட்ட வடிவம்: provider_id|api_key|model1,model2|temperature. மேலே கட்டமைக்கப்பட்ட முதன்மை வழங்குநர் எப்போதும் தானாகவே சேர்க்கப்படும். நிர்வாக திறன் கொண்ட நிர்வாகிகள் மட்டுமே தேர்வியைக் காண்பார்கள்; மாணவர்கள் ஒருபோதும் பார்க்க மாட்டார்கள். செல்லுபடியாகும் provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'இயல்புநிலை AI வழங்குநர்';
$string['settings:provider_desc'] = 'அரட்டை நிறைவுகளுக்குப் பயன்படுத்த AI வழங்குநரைத் தேர்ந்தெடுக்கவும். Moodle இன் உள்ளமைக்கப்பட்ட AI உள்ளமைவின் வழியாக Site admin > AI இல் கோரிக்கைகளை வழிமாற்றுவதற்கு "Moodle AI (core_ai subsystem)" தேர்வு செய்யவும்; அந்த பயன்முறையில் கீழே உள்ள API விசை, மாதிரி மற்றும் அடிப்படை URL புலங்கள் புறக்கணிக்கப்படுகின்றன. Streaming, tool use மற்றும் prompt caching core_ai வழியாக கிடைக்காது — பதில்கள் ஒற்றை துண்டாக வழங்கப்படுகின்றன. சிறந்த மாணவர் அனுபவத்திற்கு நேரடி வழங்குநரைப் பயன்படுத்தவும்.';
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
$string['settings:avatar_saylor'] = '{$a} லோகோ (இயல்புநிலை)';
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
$string['coursesettings:sola_enabled'] = 'இந்த பாடநெறியில் SOLA';
$string['coursesettings:sola_enabled_toggle'] = 'இந்த பாடநெறியில் SOLA விட்ஜெட்டைக் காட்டு';
$string['coursesettings:sola_enabled_desc'] = 'இந்த பாடநெறியில் SOLA அரட்டை விட்ஜெட் தோன்றுமா என்பதைக் கட்டுப்படுத்துகிறது. தள-வியாபக இயல்புநிலை செருகுநிரல் அமைப்புகளில் General > Default for new courses கீழ் அமைக்கப்படுகிறது.';
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
$string['chat:clear'] = 'திரையை அழி';
$string['chat:clear_confirm'] = 'தெரியும் செய்திகளை அழிக்கவா? உங்கள் முழு அரட்டை வரலாறும் சேமிக்கப்பட்டிருக்கும், மேலும் விட்ஜெட்டை மீண்டும் திறப்பதன் மூலம் மீண்டும் ஏற்றலாம்.';
$string['chat:copy'] = 'உரையாடலை நகலெடு';
$string['chat:copied'] = 'உரையாடல் கிளிப்போர்டில் நகலெடுக்கப்பட்டது';
$string['chat:copy_failed'] = 'உரையாடலை நகலெடுக்க தோல்வியுற்றது';
$string['chat:thinking'] = 'யோசிக்கிறேன்...';
$string['chat:error'] = 'மன்னிக்கவும், ஏதோ தவறு ஆயிற்று. மீண்டும் முயற்சிக்கவும்.';
$string['chat:error_auth'] = 'அங்கீகார பிழை. உங்கள் நிர்வாகியை தொடர்பு கொள்ளவும்.';
$string['chat:error_ratelimit'] = 'அதிக கோரிக்கைகள். சற்று காத்திருந்து மீண்டும் முயற்சிக்கவும்.';
$string['chat:error_unavailable'] = 'AI சேவை தற்காலிகமாக கிடைக்கவில்லை. பின்னர் மீண்டும் முயற்சிக்கவும்.';
$string['chat:error_notconfigured'] = 'AI ஆசிரியர் இன்னும் கட்டமைக்கப்படவில்லை. உங்கள் நிர்வாகியை தொடர்பு கொள்ளவும்.';
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

$string['chat:greeting'] = 'வணக்கம், {$a}! நான் SOLA. இன்று நான் உங்களுக்கு எப்படி உதவ முடியும்?';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLA-வை திற';
$string['chat:change_avatar'] = 'அவதாரத்தை மாற்று';

$string['chat:quiz'] = 'பயிற்சி வினாடி வினா எடு';
$string['chat:quiz_setup_title'] = 'பயிற்சி வினாடி வினா';
$string['chat:quiz_questions'] = 'கேள்விகளின் எண்ணிக்கை';
$string['chat:quiz_topic'] = 'தலைப்பு';
$string['chat:quiz_topic_guided'] = 'AI வழிகாட்டல் (உங்கள் முன்னேற்றத்தின் அடிப்படையில்)';
$string['chat:quiz_topic_adaptive']      = 'தகவமைப்பு — என் பலவீனங்களில் கவனம் செலுத்துங்கள்';
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
$string['chat:starter_quiz'] = 'இதில் என்னை சோதி';
$string['chat:starter_explain'] = 'இதை விளக்கு';
$string['chat:starter_key_concepts'] = 'முக்கிய கருத்துகள்';
$string['chat:starter_study_plan'] = 'படிப்பு திட்டம்';
$string['chat:starter_help_me'] = 'AI உதவி';
$string['chat:starter_ai_project_coach'] = 'AI திட்ட பயிற்சியாளர்';
$string['chat:starter_ell_practice'] = 'உரையாடல் பயிற்சி';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'குறிப்புகள்';

// History panel.
$string['chat:history_title'] = 'குறிப்புகள் மற்றும் உரையாடல் வரலாறு';
$string['task:send_inactivity_reminders'] = 'வாராந்திர செயலற்ற நிலை நினைவூட்டல் மின்னஞ்சல்களை அனுப்பு';
$string['messageprovider:study_notes'] = 'படிப்பு அமர்வு குறிப்புகள்';
$string['task:send_inactivity_reminders'] = 'வாராந்திர செயலற்ற நினைவூட்டல் மின்னஞ்சல்களை அனுப்பவும்';
$string['task:run_meta_ai_query'] = 'திட்டமிடப்பட்ட கற்றல் ரேடார் பகுப்பாய்வு வினவலை இயக்கு';
$string['messageprovider:study_notes'] = 'படிப்பு அமர்வு குறிப்புகள்';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / முன்னோக்கு வழங்கல்';
$string['settings:cdn_heading_desc'] = 'Moodle கோப்பு அமைப்புக்குப் பதிலாக வெளிப்புற CDN இலிருந்து SOLA முன்னோக்கு சொத்துக்களை (JS/CSS) வழங்கவும். இது செருகுநிரல் மேம்படுத்தல் இல்லாமல் முன்னோக்கு புதுப்பிப்புகளை செயல்படுத்துகிறது. உள்ளூர் செருகுநிரல் கோப்புகளைப் பயன்படுத்த CDN URL ஐ காலியாக விடவும்.';
$string['settings:cdn_url'] = 'CDN அடிப்படை URL';
$string['settings:cdn_url_desc'] = 'sola.min.js மற்றும் sola.min.css ஹோஸ்ட் செய்யப்படும் அடிப்படை URL. எடுத்துக்காட்டு: https://your-org.github.io/sola-cdn. உள்ளூர் செருகுநிரல் கோப்புகளைப் பயன்படுத்த காலியாக விடவும்.';
$string['settings:cdn_version'] = 'CDN சொத்து பதிப்பு';
$string['settings:cdn_version_desc'] = 'Cache busting க்கான CDN URLs இல் சேர்க்கப்படும் பதிப்பு சரம். ஒவ்வொரு CDN deploy க்குப் பிறகும் புதுப்பிக்கவும் (எ.கா. 3.2.4 அல்லது commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'ஒட்டுமொத்த பயன்பாடு';
$string['analytics:tab_bycourse'] = 'பாடத்தின்படி';
$string['analytics:tab_comparison'] = 'AI எதிர் பயனர் அல்லாதவர்';
$string['analytics:tab_byunit'] = 'அலகின்படி';
$string['analytics:tab_usagetypes'] = 'பயன்பாட்டு வகைகள்';
$string['analytics:tab_themes'] = 'கருப்பொருள்கள்';
$string['analytics:tab_feedback'] = 'AI கருத்து';
$string['analytics:total_students'] = 'மொத்த மாணவர்கள்';
$string['analytics:active_users'] = 'செயலில் உள்ள AI பயனர்கள்';
$string['analytics:msgs_per_student'] = 'மாணவர் ஒருவருக்கான செய்திகள்';
$string['analytics:avg_session'] = 'சராசரி அமர்வு நேரம்';
$string['analytics:return_rate'] = 'திரும்புதல் விகிதம்';
$string['analytics:total_sessions'] = 'மொத்த அமர்வுகள்';
$string['analytics:thumbs_up'] = 'நல்லது';
$string['analytics:thumbs_down'] = 'நல்லதல்ல';
$string['analytics:hallucination_flags'] = 'தவறான தகவல் குறிகள்';
$string['analytics:msgs_to_resolution'] = 'தீர்வு வரை செய்திகள்';
$string['analytics:helpful'] = 'பயனுள்ளது';
$string['analytics:not_helpful'] = 'பயனற்றது';
$string['analytics:flag_hallucination'] = 'இந்த பதிலில் தவறான தகவல் உள்ளது';
$string['analytics:submit_rating'] = 'சமர்ப்பிக்கவும்';
$string['analytics:thanks_feedback'] = 'உங்கள் கருத்துக்கு நன்றி';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_together'] = 'Together AI (Llama 3.1 8B/70B/405B Turbo, Mistral, Qwen)';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'இந்தப் பக்கத்தை விளக்கு';
$string['chat:starter_ask_anything'] = 'எதையும் கேளுங்கள்';
$string['chat:starter_review_practice'] = 'மீளாய்வு மற்றும் பயிற்சி';
$string['chat:history_saved_subtitle'] = 'சேமிக்கப்பட்ட பதில்கள் இந்த படிப்புக்காக இந்த சாதனத்தில் இருக்கும்.';
$string['chat:history_saved_empty'] = 'இங்கே காண AI பதிலைச் சேமிக்கவும்.';
$string['chat:history_views_label'] = 'வரலாற்று காட்சிகள்';
$string['chat:history_view_saved'] = 'சேமிக்கப்பட்டவை';
$string['chat:history_view_recent'] = 'வரலாறு';
$string['chat:debug_refresh'] = 'புதுப்பிக்க';
$string['chat:debug_copy_all'] = 'அனைத்தையும் நகலெடு';
$string['chat:debug_close'] = 'மூடு';
$string['chat:language_switch'] = 'மொழி மாற்று';
$string['chat:language_dismiss'] = 'மொழி பரிந்துரையை நிராகரி';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLM வழங்குநரைத் தேர்ந்தெடு';
$string['chat:llm_model_label'] = 'மாதிரி';
$string['chat:llm_model_select'] = 'LLM மாதிரியைத் தேர்ந்தெடு';
$string['chat:footer_usertesting'] = 'பயன்பாட்டுத் திறன் சோதனை';
$string['chat:footer_feedback'] = 'கருத்து';
$string['chat:voice_panel_title']       = 'Talk with {$a}';

// Additional translated strings.
$string['chat:debug_context'] = 'சூழல் பிழைத்திருத்தம்';
$string['chat:debug_context_browser'] = 'உலாவி நிலைப்படம்';
$string['chat:debug_context_copy'] = 'நகலெடு';
$string['chat:debug_context_prompt'] = 'சேவையக பதில்';
$string['chat:debug_context_request'] = 'கடைசி SSE கோரிக்கை';
$string['chat:debug_context_toggle'] = 'ஆய்வாளரை மாற்று';
$string['chat:history_empty'] = 'உரையாடல்கள் இல்லை.';
$string['chat:history_refresh'] = 'புதுப்பி';
$string['chat:history_subtitle'] = 'உங்கள் சமீபத்திய செய்திகள்.';
$string['chat:starter_explain_prompt'] = 'முக்கியமான கருத்தை விளக்குங்கள்?';
$string['chat:starter_help_lesson'] = 'இதை விளக்கு';
$string['chat:starter_help_lesson_prompt'] = 'பாடத்தைப் புரிய உதவுங்கள். முக்கிய கருத்துகளைச் சுருக்குங்கள்.';
$string['chat:starter_prompt_coach'] = 'AI பயிற்சியாளர்';
$string['chat:starter_quick_study'] = 'விரைவு படிப்பு';
$string['chat:starter_study_plan_prompt'] = 'படிப்பு திட்டமிட விரும்புகிறேன். கேளுங்கள்: (1) இலக்கு, (2) நேரம். திட்டத்தை புதுப்பிக்கவும்.';
$string['chat:voice_copy'] = 'உதவியாளருடன் குரல் உரையாடல்.';
$string['chat:voice_ready'] = 'தயார்';
$string['chat:voice_start'] = 'தொடங்கு';
$string['chat:voice_title'] = 'SOLA உடன் பேசு';
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
$string['mobile_chip_concepts'] = 'முக்கிய கருத்துகள்';
$string['mobile_chip_quiz'] = 'வினாடி வினா';
$string['mobile_chip_studyplan'] = 'படிப்பு திட்டம்';
$string['mobile_clear'] = 'வரலாறு அழி';
$string['mobile_disabled'] = 'SOLA இந்த பாடத்திற்கு கிடைக்கவில்லை.';
$string['mobile_placeholder'] = 'கேள்வி கேளுங்கள்...';
$string['mobile_welcome'] = 'வணக்கம், {$a}!';
$string['mobile_welcome_sub'] = 'நான் SOLA, உங்கள் கற்றல் உதவியாளர். இன்று எவ்வாறு உதவ முடியும்?';
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
$string['rubric:done'] = 'முடிந்தது';
$string['rubric:encourage_high'] = 'அருமை! தொடருங்கள்!';
$string['rubric:encourage_low'] = 'நல்ல தொடக்கம்! தொடர்ந்த பயிற்சி உதவும்.';
$string['rubric:encourage_mid'] = 'நல்ல முயற்சி! பயிற்சி தொடருங்கள்.';
$string['rubric:overall'] = 'ஒட்டுமொத்த';
$string['rubric:practice_again'] = 'மீண்டும் பயிற்சி';
$string['rubric:score_title_conversation'] = 'உரையாடல் பயிற்சி மதிப்பெண்';
$string['rubric:score_title_pronunciation'] = 'உச்சரிப்பு பயிற்சி மதிப்பெண்';
$string['rubric:scoring'] = 'மதிப்பீடு செய்கிறது...';
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
$string['demo:title'] = 'சோதனை சூழல்';
$string['demo:heading'] = 'சோதனை சூழல்';
$string['demo:intro'] = 'இந்தப் பக்கம் <strong>மாணவர்களிடமிருந்து மறைக்கப்பட்ட</strong> (visible=0) ஒரு சோதனை பாடநெறியை உருவாக்கி, போலி மாணவர்கள், AI உரையாடல்கள், மதிப்பீடுகள் மற்றும் கருத்துகளைக் கொண்டு அதை நிரப்புகிறது. உண்மையாக பதிவு செய்யப்பட்ட மாணவரை பாதிக்காமல் Analytics Dashboard ஐ முன்னோட்டமிட அல்லது செருகுநிரல் மாற்றங்களை சரிபார்க்க பயனுள்ளது.';
$string['demo:step1'] = 'Step 1: சோதனை பாடநெறி';
$string['demo:step2'] = 'Step 2: போலி மாணவர்கள் மற்றும் AI அரட்டைகளைச் சேர்க்கவும்';
$string['demo:course_exists'] = 'சோதனை பாடநெறி உள்ளது: <strong>{$a->fullname}</strong> (குறுகிய பெயர் <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'மறைக்கப்பட்டது';
$string['demo:badge_visible'] = 'மாணவர்களுக்கு காணக்கூடியது';
$string['demo:no_course'] = 'சோதனை பாடநெறி எதுவும் கிடைக்கவில்லை. ஒன்றை உருவாக்க கீழே கிளிக் செய்க.';
$string['demo:create_btn'] = 'மறைக்கப்பட்ட சோதனை பாடநெறியை உருவாக்கு';
$string['demo:open_course'] = 'பாடநெறியை திற &rarr;';
$string['demo:seed_intro'] = 'demo_student_001, demo_student_002, ... உருவாக்கி, சோதனை பாடநெறியில் பதிவு செய்து, செயற்கை உரையாடல்கள், செய்திகள், மதிப்பீடுகள் மற்றும் கருத்துகளைச் செருகுகிறது. மேலும் தரவைச் சேர்க்க மீண்டும் இயக்கவும், அல்லது புதியதாக தொடங்க "முதலில் அழி" என்பதை தேர்வு செய்யவும்.';
$string['demo:users_label'] = 'பயனர்கள்';
$string['demo:weeks_label'] = 'வாரங்கள்';
$string['demo:clear_label'] = 'தற்போதுள்ள demo_* பயனர்களை முதலில் அழிக்கவும்';
$string['demo:seed_btn'] = 'மாணவர்கள் மற்றும் அரட்டைகளை சேர்';
$string['demo:view_analytics'] = 'இந்த பாடநெறியின் Analytics ஐ காண &rarr;';
$string['demo:footer'] = 'இங்கே உருவாக்கப்பட்ட தரவு நிலையான Moodle பயனர் / பதிவு அட்டவணைகள் மற்றும் செருகுநிரலின் சொந்த உரையாடல் அட்டவணைகளில் வாழ்கிறது. அனைத்து போலி பயனர்களுக்கும் <code>demo_student_</code> என்று தொடங்கும் பயனர்பெயர்கள் உள்ளன, அதனால் அவற்றை வடிகட்டவோ அல்லது அகற்றவோ எளிதாக உள்ளது. அவர்களை அகற்ற, "தற்போதுள்ள demo_* பயனர்களை முதலில் அழிக்கவும்" தேர்வுசெய்து seed கட்டத்தை மீண்டும் இயக்கவும்.';
$string['demo:course_fullname'] = 'SOLA சோதனை பாடநெறி (மறைக்கப்பட்டது)';
$string['demo:notify_created'] = 'சோதனை பாடநெறி தயார்: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'பாடநெறியை உருவாக்க முடியவில்லை: {$a}';
$string['demo:notify_seeded'] = 'சேர்க்கப்பட்டது: {$a->users} பயனர்கள், {$a->conversations} உரையாடல்கள், {$a->messages} செய்திகள், {$a->ratings} மதிப்பீடுகள், {$a->feedback} கருத்து உள்ளீடுகள்.';
$string['demo:notify_seed_fail'] = 'தரவைச் சேர்க்க முடியவில்லை: {$a}';
$string['toc:analytics'] = 'Analytics Dashboard &rarr;';
$string['toc:tokenanalytics'] = 'டோக்கன் செலவு & பகுப்பாய்வு &rarr;';
$string['toc:testing'] = 'சோதனை சூழல் &rarr;';
$string['toc:back_to_course'] = '&larr; {$a} க்கு திரும்பு';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext பைனரி கண்டறியப்படவில்லை; PDF பிரித்தெடுத்தல் முடக்கப்பட்டுள்ளது.';
$string['rag:pdftotext_available'] = '{$a} இல் pdftotext கண்டறியப்பட்டது.';
$string['rag:docx_unavailable'] = 'PHP ZipArchive நீட்டிப்பு கிடைக்கவில்லை; DOCX பிரித்தெடுத்தல் முடக்கப்பட்டுள்ளது.';
$string['rag:h5p_unavailable'] = 'H5P உள்ளடக்கத்தை படிக்க முடியவில்லை; தவிர்க்கப்படுகிறது.';
$string['rag:scorm_too_large'] = 'SCORM தொகுப்பு உள்ளமைக்கப்பட்ட அளவு வரம்பை ({$a} MB) மீறுகிறது; தவிர்க்கப்படுகிறது.';
$string['rag:scorm_unzip_failed'] = 'SCORM தொகுப்பை பிரிக்க முடியவில்லை; தவிர்க்கப்படுகிறது.';
$string['rag:transcript_fetch_failed'] = '{$a} இலிருந்து நகலெடுப்பைப் பெற முடியவில்லை.';
$string['rag:transcript_cf_challenge'] = 'நகலெடுப்பு URL Cloudflare சவாலால் தடுக்கப்பட்டது: {$a}.';
$string['rag:embed_detected'] = 'உட்பொதிக்கப்பட்ட ஊடகம் கண்டறியப்பட்டது: {$a}';
$string['rag:embed_transcript_attached'] = '{$a} க்கான நகலெடுப்பு இணைக்கப்பட்டது';

// v3.9.10–v3.9.14 new strings.
$string['usersettings:download'] = 'எனது {$a} தரவைப் பதிவிறக்கு';
$string['usersettings:download_help'] = 'உங்கள் கணக்குடன் இணைக்கப்பட்ட ஒவ்வொரு {$a} பதிவின் முழுமையான JSON நகலைப் பதிவிறக்கவும்: உரையாடல்கள், செய்திகள், மதிப்பீடுகள், படிப்புத் திட்டங்கள், நினைவூட்டல்கள், பயிற்சி மதிப்பெண்கள், கருத்துக் கணிப்பு பதில்கள், சுயவிவரம் மற்றும் தணிக்கை உள்ளீடுகள்.';
$string['usersettings:privacy_notice_link'] = '{$a} தனியுரிமை அறிவிப்பைப் படிக்கவும்';
$string['privacy:title'] = '{$a} தனியுரிமை அறிவிப்பு';
$string['admin:user_data:title'] = '{$a} — கற்றவர் தரவு ஏற்றுமதி மற்றும் அழித்தல்';
$string['admin:user_data:intro'] = 'GDPR கட்டுரை 15 (அணுகல்) அல்லது கட்டுரை 17 (அழித்தல்) கோரிக்கைக்கான செயற்பாட்டுப் பாதை. Moodle பயனர் ஐடியால் கற்றவரைத் தேடி, இந்த செருகுநிரல் அவருக்காக வைத்திருக்கும் வரிசைகளை மறுபரிசீலனை செய்து, ஏற்றுமதி அல்லது அழிக்கவும்.';
$string['admin:user_data:search_label'] = 'Moodle பயனர் ஐடி';
$string['admin:user_data:lookup'] = 'தேடு';
$string['admin:user_data:not_found'] = 'அந்த ஐடியுடன் பயனர் எவரும் கிடைக்கவில்லை.';
$string['admin:user_data:download'] = 'அனைத்து கற்றவர் தரவையும் JSON ஆகப் பதிவிறக்கு';
$string['admin:user_data:purge'] = 'இந்தப் பயனருக்கான அனைத்து கற்றவர் தரவையும் அழிக்கவும்';
$string['admin:user_data:confirm_purge'] = '{$a} க்கான ஒவ்வொரு பதிவையும் நிரந்தரமாக அழிக்கவா? இது உரையாடல்கள், செய்திகள், மதிப்பீடுகள், படிப்புத் திட்டங்கள், நினைவூட்டல்கள், சுயவிவரங்கள், பயிற்சி மதிப்பெண்கள், கருத்துக் கணிப்புகள், தணிக்கை உள்ளீடுகள் மற்றும் கருத்துகள் வழியாக நீள்கிறது. இச்செயலைச் செயலிழக்க முடியாது.';
$string['admin:user_data:purged'] = 'தேர்ந்தெடுக்கப்பட்ட பயனருக்கான அனைத்து தரவும் அழிக்கப்பட்டது.';
$string['chat:consent_heading'] = '{$a->product} உடன் அரட்டை அடிக்கு முன்';
$string['chat:consent_body'] = '{$a->product} என்பது AI இயக்கப்படும் கற்றல் உதவியாளராகும். உங்கள் செய்திகளும் {$a->product} இன் பதில்களும் {$a->institution} இன் Moodle தரவுத்தளத்தில் சேமிக்கப்படுகின்றன, மற்றும் உங்கள் கேள்விகளுக்குப் பதிலளிக்க சமீபத்திய பத்து உரையாடல்கள் அங்கீகரிக்கப்பட்ட AI மாதிரி வழங்குநருக்கு அனுப்பப்படுகின்றன. தனிப்பயனாக்கத்திற்காக உங்கள் முதல் பெயர் பகிரப்படுகிறது; வேறு எந்த அடையாளத் தகவலும் AI வழங்குநருக்கு அனுப்பப்படுவதில்லை. நீங்கள் எப்போது வேண்டுமானாலும் {$a->product} தரவைப் பதிவிறக்கவோ, நீக்கவோ அல்லது அதைப் பயன்படுத்துவதை நிறுத்தவோ முடியும்.';
$string['chat:consent_accept'] = 'நான் புரிந்துகொண்டேன், {$a} ஐ தொடங்கு';
$string['chat:consent_privacy_link'] = 'முழு தனியுரிமை அறிவிப்பைப் படிக்கவும்';
$string['task:audit_cleanup'] = 'AI Course Assistant தணிக்கை அட்டவணை சுத்தம்';
$string['task:conversation_retention'] = 'AI Course Assistant உரையாடல் தக்கவைப்புத் துடைப்பான்';
$string['settings:audit_retention_days'] = 'தணிக்கைப் பதிவு தக்கவைப்பு (நாட்கள்)';
$string['settings:audit_retention_days_desc'] = 'தினசரி திட்டமிடப்பட்ட பணி இதை விட பழைய தணிக்கை வரிசைகளை அழிக்கிறது. 0 முடக்குகிறது. இயல்புநிலை 365.';
$string['settings:conversation_retention_days'] = 'உரையாடல் தக்கவைப்பு (நாட்கள்)';
$string['settings:conversation_retention_days_desc'] = 'தினசரி திட்டமிடப்பட்ட பணி, கடைசியாக மாற்றப்பட்ட நேரமுத்திரை இதை விட பழையதாக இருக்கும் உரையாடல் வரிசைகளை அழிக்கிறது. 0 முடக்குகிறது. இயல்புநிலை 730.';
$string['settings:ssrf_trusted_endpoints'] = 'SSRF நம்பகமான இறுதிப்புள்ளிகள்';
$string['settings:ssrf_trusted_endpoints_desc'] = 'ஒரு வரிக்கு ஒரு URL. பட்டியலிடப்பட்ட புரவலன்கள் SOLA இன் SSRF சரிபார்ப்பாளரில் loopback / தனியார்-IP / https-மட்டும் சோதனைகளை தவிர்க்கின்றன. நீங்கள் கட்டுப்படுத்தும் பிணையத்தில் சுய-ஹோஸ்ட் செய்யப்பட்ட LLM-களுக்கு மட்டுமே இதைப் பயன்படுத்தவும் — எடுத்துக்காட்டாக உள்ளூர் Ollama-விற்கு <code>http://localhost:11434</code>, அதே VPC-யில் vLLM பாட்-க்கு <code>http://10.0.0.5:8000</code>. ஒப்பீடு scheme + host + port உடன் பொருந்துகிறது; எந்த பாதையும் புறக்கணிக்கப்படுகிறது. இயல்புநிலை வெறுமை (அனைத்து உள்நிலையையும் தடுக்கிறது). <code>#</code> உடன் தொடங்கும் வரிகள் கருத்துகள்.';
$string['task:learner_weekly_digest']    = 'AI படிப்பு உதவியாளர் - கற்பவர் வாராந்திர சுருக்கம்';
$string['learner_digest:subject']        = '{$a->course} உடன் உங்கள் வாரம் - {$a->product}';
$string['learner_digest:optin_offer']    = 'அடுத்து எதில் கவனம் செலுத்த வேண்டும் என்ற குறுகிய வாராந்திர மின்னஞ்சலை விரும்புகிறீர்களா?';
$string['next_best_action:get_started']           = '{$a->title} உடன் தொடங்குங்கள். என்னைத் திறந்து "{$a->title} ல் எனக்கு உதவுங்கள்" என்று கேளுங்கள்.';
$string['next_best_action:get_started_with_module'] = '{$a->title} உடன் தொடங்குங்கள். தொகுதி "{$a->module}" இதை உள்ளடக்குகிறது.';
$string['next_best_action:review']                = '{$a->title} இன் அடிப்படைகளை மீண்டும் பார்க்கவும் — என்னைத் திறந்து "{$a->title} ஐ புதியதாக விளக்குங்கள்" என்று கேளுங்கள்.';
$string['next_best_action:review_with_module']    = '"{$a->module}" இல் {$a->title} இன் அடிப்படைகளை மீண்டும் பார்த்து, பின்னர் கேள்விகளுடன் என்னைத் திறக்கவும்.';
$string['next_best_action:practice']              = '{$a->title} இல் உங்களிடம் உள்ளதன் மீது கட்டியெழுப்புங்கள். என்னைத் திறந்து "{$a->title} க்கான தீர்க்கப்பட்ட உதாரணம் கொடுங்கள்" என்று கேளுங்கள்.';
$string['next_best_action:practice_with_module']  = '"{$a->module}" உடன் {$a->title} ஐ பயிற்சி செய்யுங்கள். தீர்க்கப்பட்ட உதாரணங்களுக்கு என்னைத் திறக்கவும்.';
$string['next_best_action:quiz']                  = 'விரைவான வினாடி வினாவுடன் {$a->title} ஐ உறுதிப்படுத்துங்கள். என்னைத் திறந்து "என்னைச் சோதியுங்கள் — தகவமைப்பு" என்பதைத் தேர்ந்தெடுக்கவும்.';
$string['next_best_action:quiz_with_module']      = 'விரைவான வினாடி வினாவுடன் {$a->title} ஐ உறுதிப்படுத்துங்கள். தொகுதி "{$a->module}" அது இருக்கும் இடம்.';
$string['next_best_action:empty_state']           = 'நீங்கள் இப்போது ஒவ்வொரு குறிக்கோளிலும் சிறப்பாக செய்கிறீர்கள் — நினைவூட்ட எதுவும் இல்லை. தொடருங்கள்.';
$string['next_best_action:header']                = 'அடுத்து கவனம் செலுத்த இங்கே {$a} விஷயங்கள்:';
$string['learner_digest:unsubscribe_done_title']  = 'குழுவிலகியது';
$string['learner_digest:unsubscribe_done_body']   = 'முடிந்தது — இந்த பாடநெறிக்கு {$a->product} இடமிருந்து வாராந்திர மின்னஞ்சல்களை இனி பெறமாட்டீர்கள். உங்கள் பாடநெறியின் அரட்டை சாளரத்திலிருந்து எப்போது வேண்டுமானாலும் மீண்டும் சந்தா பெறலாம்.';
$string['learner_digest:unsubscribe_invalid_title'] = 'குழுவிலகும் இணைப்பு இனி செல்லுபடியாகாது';
$string['learner_digest:unsubscribe_invalid_body']  = 'இந்த குழுவிலகும் இணைப்பு காலாவதியாகிவிட்டது அல்லது தவறாக உள்ளது. உங்கள் பாடநெறி அமைப்புகளிலிருந்து மின்னஞ்சல் விருப்பங்களை நிர்வகிக்கலாம்.';
$string['active_learners:line']                   = '{$a} மற்றவர்கள் இப்போது இந்த பாடநெறியை படிக்கிறார்கள்.';
$string['active_learners:line_global']             = 'மற்ற {$a} பேர் இப்போது படிக்கின்றனர்.';
$string['settings:active_learners_scope']          = 'செயலில் உள்ள கற்பவர் காட்டியின் நோக்கம்';
$string['settings:active_learners_scope_desc']     = 'அரட்டை தொடக்கத்திற்கு மேலே உள்ள "மற்றவர்கள் இப்போது படிக்கின்றனர்" காட்டி அதே பாடநெறியில் உள்ள கற்பவர்களை மட்டுமே அல்லது முழு தளத்திலும் உள்ள கற்பவர்களை எண்ணுகிறதா. இயல்புநிலை <strong>உலகளாவிய</strong>.';
$string['settings:active_learners_scope_global']   = 'உலகளாவிய (எந்தப் பாடநெறி)';
$string['settings:active_learners_scope_course']   = 'பாடநெறி வாரியாக மட்டும்';
$string['learner_digest:optin_yes']      = 'ஆம், வாராந்திர மின்னஞ்சலை அனுப்புங்கள்';
$string['learner_digest:optin_no']       = 'வேண்டாம் நன்றி';
$string['learner_digest:optin_thanks']   = 'புரிந்துகொண்டேன். ஒவ்வொரு திங்கட்கிழமையும் வாராந்திர சுருக்கம் கிடைக்கும்.';
$string['learner_digest:optin_declined'] = 'புரிந்துகொண்டேன். மின்னஞ்சல் இல்லை - சரிபார்ப்பு தேவைப்படும்போது மட்டும் என்னை திறக்கவும்.';
$string['settings:xai_proxy_url'] = 'xAI Realtime proxy URL';
$string['settings:xai_proxy_url_desc'] = 'SOLA xAI Realtime proxy சேவையின் பொது wss URL (உதாரணமாக wss://voice.example.com/xai-rt/rt). இது JWT ரகசியத்துடன் சேர்த்து அமைக்கப்பட்டால், xAI குரல் proxy வழியாக செல்கிறது மற்றும் முதன்மை xAI API சாவி உலாவிக்கு ஒருபோதும் அடைவதில்லை. நேரடி இணைப்புக்குத் திரும்ப காலியாக விடவும் (உற்பத்திக்குப் பரிந்துரைக்கப்படவில்லை).';
$string['settings:xai_proxy_jwt_secret'] = 'xAI Realtime proxy JWT ரகசியம்';
$string['settings:xai_proxy_jwt_secret_desc'] = 'xAI Realtime proxy க்கான குறுகிய கால அமர்வு டோக்கன்களை கையொப்பமிடப் பயன்படுத்தப்படும் HS256 பகிரப்பட்ட ரகசியம். Cloudflare Worker இல் உள்ள MOODLE_JWT_SECRET ரகசியத்துடன் பொருந்த வேண்டும். அவ்வப்போது சுழற்றவும்.';
$string['admin:vendor_dpa:title'] = '{$a} — விற்பனையாளர் DPA நிலை';
$string['admin:vendor_dpa:intro'] = 'ஒவ்வொரு AI வழங்குநர் இயக்கிக்கும் பயிற்சி விலகல், DPA, மற்றும் தக்கவைப்பு நிலைப்பாடு. உங்கள் தளத்தில் எந்த இயக்கிகளை இயக்க வேண்டும் என்பதை முடிவெடுக்க இதைப் பயன்படுத்தவும். தரம் 2 மற்றும் அதற்கு மேலான வழிசெலுத்தலுக்கு கையொப்பமிடப்பட்ட DPA மற்றும் ஒப்பந்தப் பயிற்சி விலகல் தேவை.';
$string['admin:vendor_dpa:maintenance_note'] = 'இந்த அட்டவணை classes/vendor_registry.php இல் பராமரிக்கப்படுகிறது. விற்பனையாளர் ToS மாற்றம் வரும்போது புதுப்பிக்கவும்.';
$string['settings:contact_email'] = 'Contact email';
$string['settings:contact_email_desc'] = 'General contact email shown on the learner facing privacy notice under "Contact". Defaults to contact@saylor.org. Leave empty to hide the line.';
$string['settings:dpo_email'] = 'தரவுப் பாதுகாப்பு அதிகாரியின் மின்னஞ்சல்';
$string['settings:dpo_email_desc'] = 'கற்றவர் எதிர்கொள்ளும் தனியுரிமை அறிவிப்பின் "Contact" பகுதியில் காட்டப்படும் தொடர்பு மின்னஞ்சல். வரியை மறைக்க காலியாக விடவும். மறுபெயரிடப்பட்ட நிறுவல்கள் இதைத் தங்கள் சொந்த DPO க்கு சுட்ட வேண்டும்.';
$string['settings:privacy_external_url'] = 'நிறுவன தனியுரிமை பக்க URL';
$string['settings:privacy_external_url_desc'] = 'நிறுவன அளவிலான தனியுரிமை பக்கத்திற்கான இணைப்பு, கற்றவர் எதிர்கொள்ளும் தனியுரிமை அறிவிப்பின் "Contact" பகுதியில் காட்டப்படுகிறது. வரியை மறைக்க காலியாக விடவும்.';
$string['settings:privacy_notice_override'] = 'தனியுரிமை அறிவிப்பு மேலெழுதுதல் (HTML)';
$string['settings:privacy_notice_override_desc'] = 'அமைக்கப்பட்டால், இந்த HTML, /local/ai_course_assistant/privacy.php இல் வழங்கப்படும் முன்னிருப்பு பிராண்டிங் தனியுரிமை அறிவிப்பை மாற்றுகிறது. குறியீட்டைத் திருத்தாமல் உங்கள் நிறுவனத்திற்கான சட்டத் துறை மதிப்பாய்வு செய்த உரையை இடுவதற்கு இதைப் பயன்படுத்தவும். ஏழு பிராண்டிங் கட்டமைப்பு சாவிகளில் இருந்து உரையைப் பெறும் முன்னிருப்பு அறிவிப்பைப் பயன்படுத்த காலியாக விடவும்.';
$string['objectives:title'] = 'கற்றல் நோக்கங்கள் & தேர்ச்சி';
$string['objectives:toggles_heading'] = 'தேர்ச்சி கண்காணிப்பு';
$string['objectives:toggle_master'] = 'இந்தப் படிப்புக்கான தேர்ச்சி கண்காணிப்பை இயக்கவும்';
$string['objectives:toggle_chip'] = 'மாணவர்களுக்கு கற்றல் தேர்ச்சி சிப்பைக் காட்டு';
$string['objectives:toggle_chip_help'] = 'விருப்பத்தேர்வு. ஆஃப் ஆக இருக்கும்போது, தேர்ச்சி உதவியாளரை அமைதியாகச் செலுத்துகிறது ஆனால் கற்றவர்களுக்கு எந்த சுட்டியும் தெரியாது.';
$string['objectives:toggled'] = 'அமைப்பு புதுப்பிக்கப்பட்டது.';
$string['objectives:detected_heading'] = '{$a->source} இல் இருந்து {$a->count} கற்றல் நோக்கங்கள் கண்டறியப்பட்டுள்ளன.';
$string['objectives:source_competency'] = 'Moodle திறமைகள்';
$string['objectives:source_summary'] = 'படிப்புச் சுருக்கம்';
$string['objectives:source_section'] = 'பிரிவு அல்லது முதல் பக்க உள்ளடக்கம்';
$string['objectives:source_page'] = 'படிப்புப் பக்கம்';
$string['objectives:source_llm'] = 'AI பிரித்தெடுத்தல்';
$string['objectives:source_manual'] = 'கையேடு உள்ளீடு';
$string['objectives:source_none'] = 'தானியங்கி மூலம் இல்லை';
$string['objectives:import_detected'] = 'கண்டறியப்பட்ட இந்த நோக்கங்களை இறக்குமதி செய்';
$string['objectives:import_llm'] = 'AI மூலம் நோக்கங்களைப் பிரித்தெடு';
$string['objectives:llm_empty'] = 'AI பிரித்தெடுத்தல் எந்த நோக்கங்களையும் திருப்பவில்லை. பின்னர் முயற்சிக்கவும் அல்லது கையால் உள்ளிடவும்.';
$string['objectives:imported'] = '{$a} நோக்கங்கள் இறக்குமதி செய்யப்பட்டன.';
$string['objectives:none_detected'] = 'எந்த கற்றல் நோக்கங்களும் தானாக கண்டறியப்படவில்லை. கீழே கையால் உள்ளிடவும், அல்லது AI பிரித்தெடுத்தலைப் பயன்படுத்தவும்.';
$string['objectives:list_heading'] = 'தற்போதைய நோக்கங்கள்';
$string['objectives:col_code'] = 'குறியீடு';
$string['objectives:col_title'] = 'தலைப்பு';
$string['objectives:col_source'] = 'மூலம்';
$string['objectives:col_actions'] = 'செயல்கள்';
$string['objectives:add_heading'] = 'ஒரு நோக்கத்தைச் சேர்';
$string['objectives:add_submit'] = 'நோக்கத்தைச் சேர்';
$string['objectives:saved'] = 'நோக்கம் சேமிக்கப்பட்டது.';
$string['objectives:deleted'] = 'நோக்கம் நீக்கப்பட்டது.';
$string['objectives:delete_confirm'] = 'இந்த நோக்கத்தையும் அதற்கான அனைத்து முயற்சி வரலாற்றையும் நீக்கவா?';
$string['objectives:delete_all'] = 'இந்தப் படிப்புக்கான அனைத்து நோக்கங்களையும் நீக்கு';
$string['objectives:delete_all_confirm'] = 'இந்தப் படிப்புக்கான ஒவ்வொரு நோக்கத்தையும் அதன் முயற்சி வரலாற்றையும் நீக்கவா? மீட்க முடியாது.';
$string['objectives:deleted_all'] = 'இந்தப் படிப்புக்கான அனைத்து நோக்கங்களும் நீக்கப்பட்டன.';
$string['mastery:chip_aria'] = 'கற்றல் தேர்ச்சி நிலை';
$string['mastery:popover_aria'] = 'கற்றல் தேர்ச்சி விவரங்கள்';
$string['mastery:chip_label'] = '{$a->total} இல் {$a->mastered} தேர்ச்சி';
$string['mastery:status_mastered'] = 'தேர்ச்சி';
$string['mastery:status_learning'] = 'நடந்துகொண்டிருக்கிறது';
$string['mastery:status_not_started'] = 'தொடங்கப்படவில்லை';
$string['mastery:popover_empty'] = 'இந்தப் படிப்புக்கு கற்றல் நோக்கங்கள் எதுவும் கட்டமைக்கப்படவில்லை.';
$string['settings:mastery_heading'] = 'தேர்ச்சி கண்காணிப்பு';
$string['settings:mastery_heading_desc'] = 'வினா பதில்கள் மற்றும் உதவியாளர் உரையாடல் முறைகளை படிப்பின் கற்றல் நோக்கங்களுக்கு எதிராக குறியிடும் தேர்வு செய்யும் ஒவ்வொரு படிப்பு அம்சம், பின்னர் ஒரு சுருக்கமான தேர்ச்சி ஸ்னாப்ஷாட்டை கேள்வி செலுத்த அமைப்பு வேண்டுகோளுக்கு உள்ளீடு செய்கிறது. முன்னிருப்பாக நுட்பமாக: ஒவ்வொரு படிப்பு சிப் ஆன் ஆக இல்லாவிட்டால் கற்றவர்கள் எதையும் காண மாட்டார்கள்.';
$string['settings:mastery_threshold'] = 'தேர்ச்சி வரம்பு';
$string['settings:mastery_threshold_desc'] = 'ஒரு நோக்கம் தேர்ச்சி பெற்றதாகக் கருதப்படும் சுற்றும் துல்லியம் அல்லது அதற்கு மேல். 0.0 முதல் 1.0 வரை. இயல்புநிலை 0.85.';
$string['settings:mastery_window'] = 'முயற்சி சாளரம்';
$string['settings:mastery_window_desc'] = 'சுற்றும் துல்லியத்தில் எடைபோட நோக்கம் ஒன்றுக்கு மிகச் சமீபத்திய முயற்சிகளின் எண்ணிக்கை. இயல்புநிலை 8.';
$string['settings:mastery_decay_enabled']        = 'தேர்ச்சி சிதைவை இயக்கு';
$string['settings:mastery_decay_enabled_desc']   = 'இயக்கப்பட்டால், தேர்ச்சி மதிப்பெண்கள் சமீபத்திய முயற்சி நேர முத்திரையை எதிர்த்து காலப்போக்கில் சிதைகின்றன. முன்னர் தேர்ச்சி பெற்ற இலக்கு போதுமான நேரம் கடந்த பிறகு "கற்றல்" நிலைக்குத் திரும்புகிறது. "கற்றல்" க்கு கீழே செல்லாது. <strong>v4.0 இல் இயல்பாக ஆஃப்.</strong>';
$string['settings:mastery_decay_half_life_days'] = 'தேர்ச்சி சிதைவின் அரை-வாழ்வு (நாட்கள்)';
$string['settings:mastery_decay_half_life_days_desc'] = 'நாட்களில் அரை-வாழ்வு. மதிப்பெண் 0.5 ^ (கடைசி முயற்சியிலிருந்து நாட்கள் / அரை-வாழ்வு) ஆல் பெருக்கப்படுகிறது. இயல்புநிலை 30. சிதைவு இயக்கப்பட்டால் மட்டுமே பயன்படுத்தப்படுகிறது.';
$string['settings:mastery_classifier_model'] = 'வகைப்படுத்தி மாதிரி';
$string['settings:mastery_classifier_model_desc'] = 'நோக்கங்களுக்கு எதிராக உதவியாளர் முறைகளை வகைப்படுத்த பயன்படும் மாதிரி. இயல்புநிலை AI வழங்குநர் மாதிரியைப் பெற காலியாக விடவும்; இல்லையெனில் gpt-4o-mini போன்ற மலிவான மாதிரியைக் குறிப்பிடவும்.';
$string['settings:mastery_classifier_weight'] = 'வகைப்படுத்தி எடை';
$string['settings:mastery_classifier_weight_desc'] = 'வினா முயற்சியுடன் (1.0) ஒப்பிடும்போது உரையாடல் முயற்சி எவ்வளவு கணக்கிடப்படுகிறது. இயல்புநிலை 0.3.';
$string['settings:mastery_classifier_threshold'] = 'வகைப்படுத்தி நம்பிக்கை வரம்பு';
$string['settings:mastery_classifier_threshold_desc'] = 'உரையாடல் முயற்சியைப் பதிவு செய்ய தேவையான குறைந்தபட்ச வகைப்படுத்தி நம்பிக்கை. 0.0 முதல் 1.0 வரை. இயல்புநிலை 0.7.';
$string['chat:mode_progress'] = 'முன்னேற்றம்';
$string['objectives:toggle_dashboard'] = 'மாணவர்களுக்கு முன்னேற்றம் டாஷ்போர்டு தாவலைக் காட்டு';
$string['objectives:toggle_dashboard_help'] = 'விருப்பத்தேர்வு. விட்ஜெட்டுக்குள் Chat / Voice / History அருகில் முன்னேற்றம் தாவலைச் சேர்க்கிறது. இந்தத் தாவல் கற்றவர்களுக்கு எந்த நோக்கங்களைத் தேர்ச்சி பெற்றுள்ளனர், எவை நடந்துகொண்டிருக்கின்றன, எவை தொடங்கப்படவில்லை என்பதைக் காட்டுகிறது.';
$string['mastery:dashboard_title'] = 'உங்கள் கற்றல் முன்னேற்றம்';
$string['mastery:dashboard_subtitle'] = 'தேர்ச்சி உங்கள் வினா பதில்கள் மற்றும் அரட்டை பயிற்சியில் இருந்து அளவிடப்படுகிறது. தொடர்ந்து செல்லுங்கள் — ஆழம் பரந்த அளவை வெல்கிறது.';
$string['mastery:dashboard_refresh'] = 'புதுப்பி';
$string['mastery:section_mastered'] = 'தேர்ச்சி';
$string['mastery:section_learning'] = 'நடந்துகொண்டிருக்கிறது';
$string['mastery:section_not_started'] = 'இன்னும் தொடங்கப்படவில்லை';
$string['mastery:summary_label'] = '{$a->total} நோக்கங்களில் {$a->mastered} தேர்ச்சி';
$string['mastery:ask_about'] = 'இதைப் பற்றிக் கேள்';
$string['mastery:celebrate'] = 'இந்தப் படிப்புக்கான ஒவ்வொரு நோக்கத்தையும் நீங்கள் தேர்ச்சி பெற்றுள்ளீர்கள். அருமையான வேலை.';
$string['mastery:ask_template'] = 'இந்த நோக்கத்தைப் பயிற்சி செய்து என் புரிதலை ஆழப்படுத்த எனக்கு உதவுங்கள்: {$a}.';
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
