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

/**
 * Speech module — browser-native STT (speech-to-text) and TTS (text-to-speech).
 *
 * Uses the Web Speech API: SpeechRecognition for input and SpeechSynthesis for output.
 * Also handles browser language detection and per-user language preference storage.
 *
 * @module     local_ai_course_assistant/speech
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define([], function() {

    /** localStorage key for persisting language preference */
    const LANG_KEY = 'aica_lang';

    /**
     * Supported languages for STT/TTS.
     * Keys are ISO 639-1 codes; locale is the BCP-47 tag for Web Speech API.
     */
    const SUPPORTED_LANGS = {
        // Tier A — excellent browser STT/TTS support
        'ar': {name: 'Arabic',      locale: 'ar-SA'},
        'zh': {name: 'Chinese',     locale: 'zh-CN'},
        'cs': {name: 'Czech',       locale: 'cs-CZ'},
        'da': {name: 'Danish',      locale: 'da-DK'},
        'nl': {name: 'Dutch',       locale: 'nl-NL'},
        'fi': {name: 'Finnish',     locale: 'fi-FI'},
        'fr': {name: 'French',      locale: 'fr-FR'},
        'de': {name: 'German',      locale: 'de-DE'},
        'el': {name: 'Greek',       locale: 'el-GR'},
        'hi': {name: 'Hindi',       locale: 'hi-IN'},
        'hu': {name: 'Hungarian',   locale: 'hu-HU'},
        'id': {name: 'Indonesian',  locale: 'id-ID'},
        'it': {name: 'Italian',     locale: 'it-IT'},
        'ja': {name: 'Japanese',    locale: 'ja-JP'},
        'ko': {name: 'Korean',      locale: 'ko-KR'},
        'nb': {name: 'Norwegian',   locale: 'nb-NO'},
        'pl': {name: 'Polish',      locale: 'pl-PL'},
        'pt': {name: 'Portuguese',  locale: 'pt-BR'},
        'ro': {name: 'Romanian',    locale: 'ro-RO'},
        'ru': {name: 'Russian',     locale: 'ru-RU'},
        'sk': {name: 'Slovak',      locale: 'sk-SK'},
        'es': {name: 'Spanish',     locale: 'es-ES'},
        'sv': {name: 'Swedish',     locale: 'sv-SE'},
        'ta': {name: 'Tamil',       locale: 'ta-IN'},
        'th': {name: 'Thai',        locale: 'th-TH'},
        'tr': {name: 'Turkish',     locale: 'tr-TR'},
        'uk': {name: 'Ukrainian',   locale: 'uk-UA'},
        'vi': {name: 'Vietnamese',  locale: 'vi-VN'},
        // Tier B — good/moderate browser STT/TTS support
        'bn': {name: 'Bengali',     locale: 'bn-BD'},
        'tl': {name: 'Filipino',    locale: 'fil-PH'},
        'ms': {name: 'Malay',       locale: 'ms-MY'},
        'pa': {name: 'Punjabi',     locale: 'pa-IN'},
        // Tier C — limited browser STT/TTS support (UI translation still works)
        'am': {name: 'Amharic',     locale: 'am-ET'},
        'ne': {name: 'Nepali',      locale: 'ne-NP'},
        'sw': {name: 'Swahili',     locale: 'sw-KE'},
        'zu': {name: 'Zulu',        locale: 'zu-ZA'},
        // Tier D — very limited/no browser STT/TTS support (UI translation still works)
        'bm': {name: 'Bambara',     locale: 'bm-ML'},
        'ha': {name: 'Hausa',       locale: 'ha-NG'},
        'ig': {name: 'Igbo',        locale: 'ig-NG'},
        'om': {name: 'Oromo',       locale: 'om-ET'},
        'so': {name: 'Somali',      locale: 'so-SO'},
        'wo': {name: 'Wolof',       locale: 'wo-SN'},
        'yo': {name: 'Yoruba',      locale: 'yo-NG'},
    };

    /** @type {SpeechRecognition|null} */
    let recognition = null;
    /** @type {boolean} */
    let isListening = false;
    /** @type {number} Incremented on every cancel to abort pending speak() calls */
    let speakCancelToken = 0;

    // -----------------------------------------------------------------------
    // Language helpers
    // -----------------------------------------------------------------------

    /**
     * Get the stored language code (ISO 639-1), or null if none set.
     *
     * @returns {string|null}
     */
    const getLang = function() {
        try {
            return localStorage.getItem(LANG_KEY) || null;
        } catch (e) {
            return null;
        }
    };

    /**
     * Persist a language preference.
     *
     * @param {string} code ISO 639-1 code, e.g. 'fr'
     */
    const setLang = function(code) {
        try {
            localStorage.setItem(LANG_KEY, code);
        } catch (e) {
            // localStorage unavailable — silently ignore.
        }
    };

    /**
     * Clear the stored language preference (revert to browser/auto detection).
     */
    const clearLang = function() {
        try {
            localStorage.removeItem(LANG_KEY);
        } catch (e) {
            // Ignore.
        }
    };

    /**
     * Get the BCP-47 locale for the current language preference.
     * Falls back to 'en-US' if no preference or unsupported.
     *
     * @returns {string}
     */
    const getLocale = function() {
        const code = getLang();
        return (code && SUPPORTED_LANGS[code]) ? SUPPORTED_LANGS[code].locale : 'en-US';
    };

    /**
     * Detect the user's browser language.
     * Returns the ISO 639-1 code if it is in our supported list, otherwise null.
     *
     * @returns {string|null}
     */
    const detectBrowserLang = function() {
        const raw = (navigator.language || (navigator.languages && navigator.languages[0]) || 'en');
        const code = raw.split('-')[0].toLowerCase();
        return (SUPPORTED_LANGS[code]) ? code : null;
    };

    /**
     * Return supported lang info for a given code, or null.
     *
     * @param {string} code
     * @returns {{name: string, locale: string}|null}
     */
    const getLangInfo = function(code) {
        return SUPPORTED_LANGS[code] || null;
    };

    // -----------------------------------------------------------------------
    // STT — Speech-to-Text
    // -----------------------------------------------------------------------

    /**
     * Whether the browser supports STT (SpeechRecognition).
     *
     * @returns {boolean}
     */
    const isSTTSupported = function() {
        return !!(window.SpeechRecognition || window.webkitSpeechRecognition);
    };

    /**
     * Start listening for speech input.
     *
     * @param {Function} onResult Called with (transcript, isFinal) on each result.
     * @param {Function} onEnd    Called when recognition ends (no args).
     * @param {Function} onError  Called with (errorCode) string on error.
     * @returns {boolean} True if recognition started, false if unsupported or already active.
     */
    const startListening = function(onResult, onEnd, onError) {
        if (!isSTTSupported() || isListening) {
            return false;
        }

        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        recognition = new SpeechRecognition();
        recognition.lang = getLocale();
        recognition.continuous = false;
        recognition.interimResults = true;
        recognition.maxAlternatives = 1;

        recognition.onresult = function(e) {
            let transcript = '';
            for (let i = 0; i < e.results.length; i++) {
                transcript += e.results[i][0].transcript;
            }
            const isFinal = e.results[e.results.length - 1].isFinal;
            onResult(transcript, isFinal);
        };

        recognition.onend = function() {
            isListening = false;
            recognition = null;
            onEnd();
        };

        recognition.onerror = function(e) {
            isListening = false;
            recognition = null;
            onError(e.error || 'unknown');
        };

        try {
            recognition.start();
            isListening = true;
            return true;
        } catch (e) {
            isListening = false;
            recognition = null;
            onError('start_failed');
            return false;
        }
    };

    /**
     * Stop the current recognition session.
     */
    const stopListening = function() {
        if (recognition && isListening) {
            recognition.stop();
        }
    };

    /**
     * Whether recognition is currently active.
     *
     * @returns {boolean}
     */
    const isRecording = function() {
        return isListening;
    };

    // -----------------------------------------------------------------------
    // TTS — Text-to-Speech
    // -----------------------------------------------------------------------

    /**
     * Whether the browser supports TTS (SpeechSynthesis).
     *
     * @returns {boolean}
     */
    const isTTSSupported = function() {
        return !!(window.speechSynthesis);
    };

    /**
     * Score a voice by quality — higher is better.
     * Prefers cloud/neural voices over local/robotic ones.
     *
     * Tiers (best → worst):
     *  - Microsoft Natural Online voices (Edge)      e.g. "Microsoft Aria Online (Natural)…"
     *  - Google cloud voices (Chrome)                e.g. "Google US English"
     *  - Apple Premium/Enhanced voices (Safari/macOS) e.g. "Samantha (Premium)"
     *  - Any other remote (non-local) voice
     *  - Ordinary local OS voices
     *  - Known low-quality open-source engines (penalised)
     *
     * @param {SpeechSynthesisVoice} voice
     * @returns {number}
     */
    const scoreVoice = function(voice) {
        let score = 0;
        const name = (voice.name || '').toLowerCase();

        // Remote/cloud voices are generally higher quality than local TTS engines.
        if (!voice.localService) {
            score += 40;
        }

        // Named quality tiers.
        if (/natural/.test(name))  { score += 30; } // Microsoft Natural (Edge)
        if (/neural/.test(name))   { score += 25; } // Explicit neural TTS
        if (/google/.test(name))   { score += 20; } // Google WaveNet (Chrome)
        if (/premium/.test(name))  { score += 15; } // Apple Premium (macOS/iOS)
        if (/enhanced/.test(name)) { score += 15; } // Apple Enhanced (macOS/iOS)
        if (/online/.test(name))   { score += 10; } // Generic "online" marker

        // Penalise known low-quality open-source synths.
        if (/espeak|festival|mbrola/.test(name)) { score -= 50; }

        return score;
    };

    /**
     * Return the highest-quality available TTS voice for the given BCP-47 locale.
     * Prefers exact locale match; falls back to same language prefix.
     *
     * @param {string} locale e.g. 'en-US'
     * @returns {SpeechSynthesisVoice|null}
     */
    const pickBestVoice = function(locale) {
        const voices = speechSynthesis.getVoices();
        if (!voices || !voices.length) {
            return null;
        }
        const langPrefix = locale.split('-')[0];

        const exact  = voices.filter(function(v) { return v.lang === locale; });
        const prefix = voices.filter(function(v) {
            return v.lang !== locale &&
                (v.lang.startsWith(langPrefix + '-') || v.lang === langPrefix);
        });
        const candidates = exact.length ? exact : prefix;

        if (!candidates.length) {
            return null;
        }
        candidates.sort(function(a, b) { return scoreVoice(b) - scoreVoice(a); });
        return candidates[0];
    };

    /**
     * Strip markdown-style symbols that don't read well aloud.
     * Returns cleaned plain text suitable for TTS.
     *
     * @param {string} text
     * @returns {string}
     */
    const cleanTextForSpeech = function(text) {
        return text
            .replace(/```[\s\S]*?```/g, 'code block.')
            .replace(/`[^`]+`/g, '')
            .replace(/#{1,6}\s/g, '')
            .replace(/\*\*(.+?)\*\*/g, '$1')
            .replace(/\*(.+?)\*/g, '$1')
            .replace(/\[([^\]]+)\]\([^)]+\)/g, '$1')
            .replace(/\n{2,}/g, '. ')
            .replace(/\n/g, ' ')
            .trim();
    };

    /**
     * Speak a text string.
     * Cancels any currently playing speech first.
     * Automatically selects the best available voice for the current locale.
     *
     * @param {string}        text       The text to read aloud.
     * @param {Function|null} onEnd      Called when speech finishes or is canceled.
     * @param {Function|null} onBoundary Called with (charIndex) at each word boundary.
     */
    const speak = function(text, onEnd, onBoundary) {
        if (!isTTSSupported()) {
            return;
        }

        // Cancel any ongoing speech and invalidate any pending speak() calls.
        speechSynthesis.cancel();
        const myToken = ++speakCancelToken;

        const clean = cleanTextForSpeech(text);
        const locale = getLocale();

        const doSpeak = function() {
            // Abort if a newer speak() or stopSpeaking() has been called.
            if (myToken !== speakCancelToken) {
                return;
            }

            const utterance = new SpeechSynthesisUtterance(clean);
            utterance.lang  = locale;
            utterance.rate  = 1.0;
            utterance.pitch = 1.0;

            // Use the highest-quality voice available for this locale.
            const voice = pickBestVoice(locale);
            if (voice) {
                utterance.voice = voice;
            }

            utterance.onend   = onEnd || function() {};
            utterance.onerror = onEnd || function() {};

            if (onBoundary) {
                utterance.onboundary = function(event) {
                    if (event.name === 'word') {
                        onBoundary(event.charIndex);
                    }
                };
            }

            speechSynthesis.speak(utterance);
        };

        // Chrome loads voices asynchronously — getVoices() can return [] on first call.
        // Also use a short delay to work around a Chrome bug where cancel()+speak()
        // in the same tick can silently fail.
        if (speechSynthesis.getVoices().length) {
            setTimeout(doSpeak, 100);
        } else {
            speechSynthesis.onvoiceschanged = function() {
                speechSynthesis.onvoiceschanged = null;
                setTimeout(doSpeak, 100);
            };
        }
    };

    /**
     * Stop any currently playing speech.
     */
    const stopSpeaking = function() {
        if (isTTSSupported()) {
            ++speakCancelToken; // Abort any pending speak() setTimeout
            speechSynthesis.cancel();
        }
    };

    /**
     * Whether TTS is currently speaking.
     *
     * @returns {boolean}
     */
    const isSpeaking = function() {
        return isTTSSupported() && speechSynthesis.speaking;
    };

    // -----------------------------------------------------------------------
    // Conversation starter label translations (43 languages)
    // Keys: helpLesson (reused for 'explain'), quiz, studyPlan, helpMe,
    //       keyConcepts, ellPractice, ellPronunciation, aiCoach
    // -----------------------------------------------------------------------

    /** @type {Object} Starter label translations keyed by ISO 639-1 code */
    const STARTER_LABELS = {
        'ar': {helpLesson: 'اشرح هذا',              quiz: 'اختبر معلوماتي',          studyPlan: 'خطة الدراسة',        helpMe: 'مساعدة AI',        keyConcepts: 'المفاهيم الرئيسية',    ellPractice: 'تدريب على الكلام',    ellPronunciation: 'تحسين النطق',         aiCoach: 'مدرب الذكاء الاصطناعي'},
        'zh': {helpLesson: '解释这个',                quiz: '测验我',                   studyPlan: '学习计划',            helpMe: 'AI 帮助',          keyConcepts: '关键概念',              ellPractice: '口语练习',             ellPronunciation: '发音练习',             aiCoach: 'AI辅导'},
        'cs': {helpLesson: 'Vysvětlit',              quiz: 'Otestuj mě',              studyPlan: 'Studijní plán',      helpMe: 'Pomoc AI',         keyConcepts: 'Klíčové pojmy',         ellPractice: 'Cvičení mluvení',     ellPronunciation: 'Výslovnost',          aiCoach: 'AI koučink'},
        'da': {helpLesson: 'Forklar dette',          quiz: 'Test mig',                studyPlan: 'Studieplan',         helpMe: 'AI-hjælp',         keyConcepts: 'Nøglebegreber',         ellPractice: 'Øv at tale',          ellPronunciation: 'Udtaleøvelse',        aiCoach: 'AI-coach'},
        'nl': {helpLesson: 'Leg dit uit',            quiz: 'Test me',                 studyPlan: 'Studieplan',         helpMe: 'AI-hulp',          keyConcepts: 'Kernbegrippen',         ellPractice: 'Spreektraining',      ellPronunciation: 'Uitspraakoefening',   aiCoach: 'AI-coach'},
        'fi': {helpLesson: 'Selitä tämä',            quiz: 'Testaa minut',            studyPlan: 'Opiskelusuunnitelma',helpMe: 'AI-apu',           keyConcepts: 'Avainkäsitteet',        ellPractice: 'Puheen harjoittelu',  ellPronunciation: 'Ääntämisharjoitus',   aiCoach: 'AI-valmennus'},
        'fr': {helpLesson: 'Expliquer',              quiz: 'Testez-moi',              studyPlan: "Plan d'étude",       helpMe: 'Aide IA',          keyConcepts: 'Concepts clés',         ellPractice: "Pratiquer l'oral",    ellPronunciation: 'Prononciation',       aiCoach: 'Coach IA'},
        'de': {helpLesson: 'Erkläre das',            quiz: 'Teste mich',              studyPlan: 'Lernplan',           helpMe: 'KI-Hilfe',         keyConcepts: 'Schlüsselbegriffe',     ellPractice: 'Sprechen üben',       ellPronunciation: 'Ausspracheübung',     aiCoach: 'KI-Coach'},
        'el': {helpLesson: 'Εξήγησε αυτό',          quiz: 'Δοκίμασέ με',             studyPlan: 'Σχέδιο μελέτης',    helpMe: 'Βοήθεια AI',       keyConcepts: 'Βασικές Έννοιες',       ellPractice: 'Εξάσκηση ομιλίας',   ellPronunciation: 'Προφορά',             aiCoach: 'AI Coach'},
        'hi': {helpLesson: 'यह समझाएं',              quiz: 'मुझे टेस्ट करो',          studyPlan: 'अध्ययन योजना',      helpMe: 'AI सहायता',        keyConcepts: 'मुख्य अवधारणाएं',       ellPractice: 'बोलने का अभ्यास',     ellPronunciation: 'उच्चारण अभ्यास',      aiCoach: 'AI कोच'},
        'hu': {helpLesson: 'Magyarázd el',           quiz: 'Tesztelj engem',          studyPlan: 'Tanulmányi terv',   helpMe: 'AI segítség',      keyConcepts: 'Főfogalmak',            ellPractice: 'Beszéd gyakorlása',   ellPronunciation: 'Kiejtés gyakorlás',   aiCoach: 'AI-edző'},
        'id': {helpLesson: 'Jelaskan ini',           quiz: 'Uji saya',                studyPlan: 'Rencana belajar',   helpMe: 'Bantuan AI',       keyConcepts: 'Konsep Utama',          ellPractice: 'Latihan berbicara',   ellPronunciation: 'Latihan pelafalan',   aiCoach: 'Pelatih AI'},
        'it': {helpLesson: 'Spiega questo',          quiz: 'Mettimi alla prova',      studyPlan: 'Piano di studio',   helpMe: 'Aiuto AI',         keyConcepts: 'Concetti chiave',       ellPractice: 'Pratica del parlato', ellPronunciation: 'Pratica pronuncia',   aiCoach: 'Coach IA'},
        'ja': {helpLesson: 'これを説明して',           quiz: 'テストして',               studyPlan: '学習計画',            helpMe: 'AIサポート',        keyConcepts: '重要概念',               ellPractice: '会話練習',             ellPronunciation: '発音練習',             aiCoach: 'AIコーチ'},
        'ko': {helpLesson: '이것을 설명해주세요',      quiz: '테스트해 주세요',           studyPlan: '학습 계획',          helpMe: 'AI 도움',          keyConcepts: '핵심 개념',              ellPractice: '말하기 연습',          ellPronunciation: '발음 연습',            aiCoach: 'AI 코치'},
        'nb': {helpLesson: 'Forklar dette',          quiz: 'Test meg',                studyPlan: 'Studieplan',         helpMe: 'AI-hjelp',         keyConcepts: 'Nøkkelbegreper',        ellPractice: 'Øv å snakke',         ellPronunciation: 'Uttaleøvelse',        aiCoach: 'AI-coach'},
        'pl': {helpLesson: 'Wyjaśnij to',            quiz: 'Przetestuj mnie',         studyPlan: 'Plan nauki',         helpMe: 'Pomoc AI',         keyConcepts: 'Kluczowe pojęcia',      ellPractice: 'Ćwiczenie mówienia',  ellPronunciation: 'Ćwiczenie wymowy',    aiCoach: 'Trener AI'},
        'pt': {helpLesson: 'Explique isso',          quiz: 'Me teste',                studyPlan: 'Plano de estudo',   helpMe: 'Ajuda de IA',      keyConcepts: 'Conceitos-chave',       ellPractice: 'Praticar a fala',     ellPronunciation: 'Prática de pronúncia',aiCoach: 'Coach de IA'},
        'ro': {helpLesson: 'Explică asta',           quiz: 'Testează-mă',             studyPlan: 'Plan de studiu',    helpMe: 'Ajutor AI',        keyConcepts: 'Concepte cheie',        ellPractice: 'Practică vorbirea',   ellPronunciation: 'Practică pronunție',  aiCoach: 'Coach IA'},
        'ru': {helpLesson: 'Объясни это',            quiz: 'Проверь меня',            studyPlan: 'План учёбы',         helpMe: 'Помощь ИИ',        keyConcepts: 'Ключевые понятия',      ellPractice: 'Практика речи',       ellPronunciation: 'Практика произношения',aiCoach: 'ИИ-коуч'},
        'sk': {helpLesson: 'Vysvetli to',            quiz: 'Otestuj ma',              studyPlan: 'Študijný plán',     helpMe: 'Pomoc AI',         keyConcepts: 'Kľúčové pojmy',         ellPractice: 'Cvičenie reči',       ellPronunciation: 'Nácvik výslovnosti',  aiCoach: 'AI kouč'},
        'es': {helpLesson: 'Explicar esto',          quiz: 'Ponme a prueba',          studyPlan: 'Plan de estudio',   helpMe: 'Ayuda de IA',      keyConcepts: 'Conceptos clave',       ellPractice: 'Practicar el habla',  ellPronunciation: 'Práctica de pronunciación', aiCoach: 'Coach de IA'},
        'sv': {helpLesson: 'Förklara detta',         quiz: 'Testa mig',               studyPlan: 'Studieplan',         helpMe: 'AI-hjälp',         keyConcepts: 'Nyckelbegrepp',         ellPractice: 'Övning i tal',        ellPronunciation: 'Uttalsbövning',       aiCoach: 'AI-coach'},
        'ta': {helpLesson: 'இதை விளக்கு',           quiz: 'என்னை சோதி',              studyPlan: 'படிப்பு திட்டம்',   helpMe: 'AI உதவி',          keyConcepts: 'முக்கிய கருத்துகள்',    ellPractice: 'பேசும் பயிற்சி',      ellPronunciation: 'உச்சரிப்பு பயிற்சி',  aiCoach: 'AI பயிற்சியாளர்'},
        'th': {helpLesson: 'อธิบายสิ่งนี้',         quiz: 'ทดสอบฉัน',               studyPlan: 'แผนการเรียน',        helpMe: 'ความช่วยเหลือ AI', keyConcepts: 'แนวคิดหลัก',           ellPractice: 'ฝึกพูด',              ellPronunciation: 'ฝึกการออกเสียง',      aiCoach: 'โค้ช AI'},
        'tr': {helpLesson: 'Bunu açıkla',            quiz: 'Beni sına',               studyPlan: 'Çalışma planı',     helpMe: 'Yapay zeka yardımı',keyConcepts: 'Temel Kavramlar',       ellPractice: 'Konuşma pratiği',     ellPronunciation: 'Telaffuz pratiği',    aiCoach: 'YZ Koçu'},
        'uk': {helpLesson: 'Поясни це',              quiz: 'Перевір мене',            studyPlan: 'Навчальний план',    helpMe: 'Допомога ШІ',      keyConcepts: 'Ключові поняття',       ellPractice: 'Практика мовлення',   ellPronunciation: 'Практика вимови',     aiCoach: 'ШІ-тренер'},
        'vi': {helpLesson: 'Giải thích điều này',    quiz: 'Kiểm tra tôi',           studyPlan: 'Kế hoạch học tập',  helpMe: 'Hỗ trợ AI',        keyConcepts: 'Khái niệm chính',       ellPractice: 'Luyện nói',           ellPronunciation: 'Luyện phát âm',       aiCoach: 'Huấn luyện AI'},
        'bn': {helpLesson: 'এটি ব্যাখ্যা করুন',     quiz: 'আমাকে পরীক্ষা করুন',    studyPlan: 'অধ্যয়ন পরিকল্পনা',helpMe: 'AI সহায়তা',       keyConcepts: 'মূল ধারণা',            ellPractice: 'কথা বলার অনুশীলন',    ellPronunciation: 'উচ্চারণ অনুশীলন',     aiCoach: 'AI কোচ'},
        'tl': {helpLesson: 'Ipaliwanag ito',         quiz: 'Subukin ako',             studyPlan: 'Plano sa pag-aaral',helpMe: 'AI tulong',        keyConcepts: 'Pangunahing Konsepto',  ellPractice: 'Pagsasanay sa pagsasalita', ellPronunciation: 'Pagsasanay sa bigkas', aiCoach: 'AI Coach'},
        'ms': {helpLesson: 'Terangkan ini',          quiz: 'Uji saya',                studyPlan: 'Rancangan belajar', helpMe: 'Bantuan AI',       keyConcepts: 'Konsep Utama',          ellPractice: 'Latihan bercakap',    ellPronunciation: 'Latihan sebutan',     aiCoach: 'Jurulatih AI'},
        'pa': {helpLesson: 'ਇਹ ਸਮਝਾਓ',              quiz: 'ਮੈਨੂੰ ਟੈਸਟ ਕਰੋ',         studyPlan: 'ਅਧਿਐਨ ਯੋਜਨਾ',       helpMe: 'AI ਸਹਾਇਤਾ',       keyConcepts: 'ਮੁੱਖ ਧਾਰਣਾਵਾਂ',        ellPractice: 'ਬੋਲਣ ਦੀ ਪ੍ਰੈਕਟਿਸ',    ellPronunciation: 'ਉਚਾਰਨ ਅਭਿਆਸ',        aiCoach: 'AI ਕੋਚ'},
        'am': {helpLesson: 'ይህን አብራራ',              quiz: 'ፈትነኝ',                   studyPlan: 'የጥናት እቅድ',          helpMe: 'የAI እርዳታ',        keyConcepts: 'ዋና ፅንሰ-ሀሳቦች',         ellPractice: 'የንግግር ልምምድ',          ellPronunciation: 'የአጠራር ልምምድ',         aiCoach: 'AI አሰልጣኝ'},
        'ne': {helpLesson: 'यो व्याख्या गर्नुहोस्',  quiz: 'मलाई परीक्षण गर्नुहोस्', studyPlan: 'अध्ययन योजना',      helpMe: 'AI सहायता',        keyConcepts: 'मुख्य अवधारणाहरू',      ellPractice: 'बोल्ने अभ्यास',       ellPronunciation: 'उच्चारण अभ्यास',      aiCoach: 'AI कोच'},
        'sw': {helpLesson: 'Eleza hili',             quiz: 'Nijaribu',                studyPlan: 'Mpango wa masomo',  helpMe: 'Msaada wa AI',     keyConcepts: 'Dhana Kuu',             ellPractice: 'Mazoezi ya kusema',   ellPronunciation: 'Mazoezi ya matamshi', aiCoach: 'Kocha wa AI'},
        'zu': {helpLesson: 'Chaza lokhu',            quiz: 'Nglinge',                 studyPlan: 'Uhlelo lwezifundo', helpMe: 'Usizo lwe-AI',     keyConcepts: 'Imiqondo Esemqoka',     ellPractice: 'Ukulolonga ukukhuluma', ellPronunciation: 'Ukulolonga ukuphimisa', aiCoach: 'I-AI Coach'},
        'bm': {helpLesson: 'A fɔ cogo min na',      quiz: 'N sɛgɛsɛgɛ',             studyPlan: 'Kalanso jɛtigi',    helpMe: 'AI dɛmɛ',          keyConcepts: 'Kunnafoni Hakɛw',       ellPractice: 'Kumakan lasɛli',      ellPronunciation: 'Kumakan fɔli lasɛli', aiCoach: 'AI kɔntigi'},
        'ha': {helpLesson: 'Bayyana wannan',         quiz: 'Jarrabeni',               studyPlan: 'Shirin karatu',     helpMe: 'Taimako na AI',    keyConcepts: "Muhimman Ra'ayoyi",     ellPractice: 'Yi magana',           ellPronunciation: 'Aikin furta',         aiCoach: 'Kocin AI'},
        'ig': {helpLesson: 'Kọọ ihe a',             quiz: 'Nwale m',                 studyPlan: 'Atụmatụ mmụta',     helpMe: 'Nkwado AI',        keyConcepts: 'Echiche Ndị Bụ Isi',    ellPractice: 'Ịmụta ikwu okwu',     ellPronunciation: 'Ọmụma ịkpọ okwu',    aiCoach: 'Onye nkuzi AI'},
        'om': {helpLesson: 'Kana ibsi',             quiz: 'Na qori',                 studyPlan: 'Karoora barumsaa',  helpMe: 'Gargaarsa AI',     keyConcepts: 'Yaadota Ijoo',          ellPractice: 'Dubbachuu shaakala',  ellPronunciation: 'Dhaggeeffannaa',      aiCoach: 'AI Qoree'},
        'so': {helpLesson: 'Sharax kan',            quiz: 'I tijaabi',               studyPlan: 'Qorshe waxbarashada',helpMe: 'Caawimada AI',    keyConcepts: 'Fikradaha Muhiimka ah', ellPractice: 'Celinta hadlida',     ellPronunciation: 'Ku celinta madadaalaha', aiCoach: 'Tababaraha AI'},
        'wo': {helpLesson: 'Xamal li',              quiz: 'Seetlu ma',               studyPlan: 'Xëy ci jàng',       helpMe: 'Ndimbal AI',       keyConcepts: 'Xam-xam bu Dëkk',      ellPractice: 'Taxawaay ci wax-waxu', ellPronunciation: 'Liggéeyu baat',      aiCoach: 'Kooci AI'},
        'yo': {helpLesson: 'Ṣe àlàyé èyí',         quiz: 'Dánwò mi',                studyPlan: 'Ètò Ẹkọ',           helpMe: 'Ìrànlọ́wọ́ AI',  keyConcepts: 'Àwọn Èrò Pàtàkì',     ellPractice: 'Ìdánwò Ọ̀rọ̀',       ellPronunciation: 'Ìdánwò Pronunciation', aiCoach: 'Olùkọ́ AI'},
    };

    /**
     * Get starter label translations for a given language code.
     * Returns null for English (default), meaning callers should use the original server-rendered text.
     *
     * @param {string|null} code ISO 639-1 code, or null for English
     * @returns {{helpLesson, quiz, studyPlan, helpMe, keyConcepts, ellPractice, ellPronunciation, aiCoach}|null}
     */
    const getStarterLabels = function(code) {
        if (!code) {
            return null;
        }
        return STARTER_LABELS[code] || null;
    };

    // -----------------------------------------------------------------------
    // Public API
    // -----------------------------------------------------------------------

    return {
        SUPPORTED_LANGS:   SUPPORTED_LANGS,
        LANG_KEY:          LANG_KEY,
        getLang:           getLang,
        setLang:           setLang,
        clearLang:         clearLang,
        getLocale:         getLocale,
        getLangInfo:       getLangInfo,
        detectBrowserLang: detectBrowserLang,
        isSTTSupported:    isSTTSupported,
        isTTSSupported:    isTTSSupported,
        startListening:    startListening,
        stopListening:     stopListening,
        isRecording:       isRecording,
        cleanTextForSpeech: cleanTextForSpeech,
        speak:             speak,
        stopSpeaking:      stopSpeaking,
        isSpeaking:        isSpeaking,
        getStarterLabels:  getStarterLabels,
    };
});
