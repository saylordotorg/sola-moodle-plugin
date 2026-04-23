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
$string['chat:voice_panel_title'] = '{$a} உடன் பேசு (சோதனை)';

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
