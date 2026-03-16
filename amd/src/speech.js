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
        'bg': {name: 'Bulgarian',   locale: 'bg-BG'},
        'el': {name: 'Greek',       locale: 'el-GR'},
        'he': {name: 'Hebrew',      locale: 'he-IL'},
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
    // New keys (v1.7): helpPage, askAnything, reviewPractice
    // Legacy keys kept: helpLesson, keyConcepts, helpMe, aiCoach
    // -----------------------------------------------------------------------

    /** @type {Object} Starter label translations keyed by ISO 639-1 code */
    const STARTER_LABELS = {
        'ar': {helpPage: 'مساعدة في هذه الصفحة', quiz: 'اختبر معلوماتي', studyPlan: 'خطة الدراسة', askAnything: 'اسأل أي شيء', reviewPractice: 'مراجعة وتمرين', ellPractice: 'تدريب على الكلام', ellPronunciation: 'تحسين النطق', helpLesson: 'اشرح هذا', helpMe: 'مساعدة AI', keyConcepts: 'المفاهيم الرئيسية', aiCoach: 'مدرب الذكاء الاصطناعي', aiProjectCoach: 'مدرب المشاريع بالذكاء الاصطناعي'},
        'bg': {helpPage: 'Помощ за страницата', quiz: 'Тест', studyPlan: 'План за учене', askAnything: 'Задай въпрос', reviewPractice: 'Преговор и практика', ellPractice: 'Практика на говорене', ellPronunciation: 'Практика на произношение', helpLesson: 'Обясни това', helpMe: 'AI помощ', keyConcepts: 'Ключови понятия', aiCoach: 'AI Треньор', aiProjectCoach: 'AI Проектен треньор'},
        'zh': {helpPage: '帮助理解本页', quiz: '测验我', studyPlan: '学习计划', askAnything: '问任何问题', reviewPractice: '复习与练习', ellPractice: '口语练习', ellPronunciation: '发音练习', helpLesson: '解释这个', helpMe: 'AI 帮助', keyConcepts: '关键概念', aiCoach: 'AI辅导', aiProjectCoach: 'AI项目教练'},
        'cs': {helpPage: 'Pomoc s touto stránkou', quiz: 'Otestuj mě', studyPlan: 'Studijní plán', askAnything: 'Zeptejte se na cokoliv', reviewPractice: 'Opakování a procvičování', ellPractice: 'Cvičení mluvení', ellPronunciation: 'Výslovnost', helpLesson: 'Vysvětlit', helpMe: 'Pomoc AI', keyConcepts: 'Klíčové pojmy', aiCoach: 'AI koučink', aiProjectCoach: 'AI projektový kouč'},
        'da': {helpPage: 'Hjælp med denne side', quiz: 'Test mig', studyPlan: 'Studieplan', askAnything: 'Spørg om hvad som helst', reviewPractice: 'Gennemgå og øv', ellPractice: 'Øv at tale', ellPronunciation: 'Udtaleøvelse', helpLesson: 'Forklar dette', helpMe: 'AI-hjælp', keyConcepts: 'Nøglebegreber', aiCoach: 'AI-coach', aiProjectCoach: 'AI-projektcoach'},
        'nl': {helpPage: 'Hulp bij deze pagina', quiz: 'Test me', studyPlan: 'Studieplan', askAnything: 'Vraag wat je wilt', reviewPractice: 'Herhalen en oefenen', ellPractice: 'Spreektraining', ellPronunciation: 'Uitspraakoefening', helpLesson: 'Leg dit uit', helpMe: 'AI-hulp', keyConcepts: 'Kernbegrippen', aiCoach: 'AI-coach', aiProjectCoach: 'AI-projectcoach'},
        'fi': {helpPage: 'Apua tämän sivun kanssa', quiz: 'Testaa minut', studyPlan: 'Opiskelusuunnitelma', askAnything: 'Kysy mitä vain', reviewPractice: 'Kertaa ja harjoittele', ellPractice: 'Puheen harjoittelu', ellPronunciation: 'Ääntämisharjoitus', helpLesson: 'Selitä tämä', helpMe: 'AI-apu', keyConcepts: 'Avainkäsitteet', aiCoach: 'AI-valmennus', aiProjectCoach: 'AI-projektivalmennus'},
        'fr': {helpPage: 'Aide sur cette page', quiz: 'Testez-moi', studyPlan: "Plan d'étude", askAnything: 'Posez une question', reviewPractice: 'Réviser et pratiquer', ellPractice: "Pratiquer l'oral", ellPronunciation: 'Prononciation', helpLesson: 'Expliquer', helpMe: 'Aide IA', keyConcepts: 'Concepts clés', aiCoach: 'Coach IA', aiProjectCoach: 'Coach de projet IA'},
        'de': {helpPage: 'Hilfe zu dieser Seite', quiz: 'Teste mich', studyPlan: 'Lernplan', askAnything: 'Frag was du willst', reviewPractice: 'Wiederholen und üben', ellPractice: 'Sprechen üben', ellPronunciation: 'Ausspracheübung', helpLesson: 'Erkläre das', helpMe: 'KI-Hilfe', keyConcepts: 'Schlüsselbegriffe', aiCoach: 'KI-Coach', aiProjectCoach: 'KI-Projektcoach'},
        'el': {helpPage: 'Βοήθεια με αυτή τη σελίδα', quiz: 'Δοκίμασέ με', studyPlan: 'Σχέδιο μελέτης', askAnything: 'Ρωτήστε ό,τι θέλετε', reviewPractice: 'Επανάληψη και εξάσκηση', ellPractice: 'Εξάσκηση ομιλίας', ellPronunciation: 'Προφορά', helpLesson: 'Εξήγησε αυτό', helpMe: 'Βοήθεια AI', keyConcepts: 'Βασικές Έννοιες', aiCoach: 'AI Coach', aiProjectCoach: 'AI Coach Εργασιών'},
        'he': {helpPage: 'עזרה עם דף זה', quiz: 'בחן אותי', studyPlan: 'תוכנית לימודים', askAnything: 'שאל כל דבר', reviewPractice: 'חזרה ותרגול', ellPractice: 'תרגול דיבור', ellPronunciation: 'תרגול הגייה', helpLesson: 'הסבר את זה', helpMe: 'עזרת AI', keyConcepts: 'מושגי מפתח', aiCoach: 'מאמן AI', aiProjectCoach: 'מאמן פרויקטים AI'},
        'hi': {helpPage: 'इस पेज में मदद', quiz: 'मुझे टेस्ट करो', studyPlan: 'अध्ययन योजना', askAnything: 'कुछ भी पूछें', reviewPractice: 'दोहराएं और अभ्यास करें', ellPractice: 'बोलने का अभ्यास', ellPronunciation: 'उच्चारण अभ्यास', helpLesson: 'यह समझाएं', helpMe: 'AI सहायता', keyConcepts: 'मुख्य अवधारणाएं', aiCoach: 'AI कोच', aiProjectCoach: 'AI प्रोजेक्ट कोच'},
        'hu': {helpPage: 'Segítség ehhez az oldalhoz', quiz: 'Tesztelj engem', studyPlan: 'Tanulmányi terv', askAnything: 'Kérdezz bármit', reviewPractice: 'Ismétlés és gyakorlás', ellPractice: 'Beszéd gyakorlása', ellPronunciation: 'Kiejtés gyakorlás', helpLesson: 'Magyarázd el', helpMe: 'AI segítség', keyConcepts: 'Főfogalmak', aiCoach: 'AI-edző', aiProjectCoach: 'AI projekttréner'},
        'id': {helpPage: 'Bantuan halaman ini', quiz: 'Uji saya', studyPlan: 'Rencana belajar', askAnything: 'Tanya apa saja', reviewPractice: 'Ulasan dan latihan', ellPractice: 'Latihan berbicara', ellPronunciation: 'Latihan pelafalan', helpLesson: 'Jelaskan ini', helpMe: 'Bantuan AI', keyConcepts: 'Konsep Utama', aiCoach: 'Pelatih AI', aiProjectCoach: 'Pelatih Proyek AI'},
        'it': {helpPage: 'Aiuto con questa pagina', quiz: 'Mettimi alla prova', studyPlan: 'Piano di studio', askAnything: 'Chiedi qualsiasi cosa', reviewPractice: 'Ripasso e pratica', ellPractice: 'Pratica del parlato', ellPronunciation: 'Pratica pronuncia', helpLesson: 'Spiega questo', helpMe: 'Aiuto AI', keyConcepts: 'Concetti chiave', aiCoach: 'Coach IA', aiProjectCoach: 'Coach di progetto IA'},
        'ja': {helpPage: 'このページのヘルプ', quiz: 'テストして', studyPlan: '学習計画', askAnything: '何でも質問', reviewPractice: '復習と練習', ellPractice: '会話練習', ellPronunciation: '発音練習', helpLesson: 'これを説明して', helpMe: 'AIサポート', keyConcepts: '重要概念', aiCoach: 'AIコーチ', aiProjectCoach: 'AIプロジェクトコーチ'},
        'ko': {helpPage: '이 페이지 도움말', quiz: '테스트해 주세요', studyPlan: '학습 계획', askAnything: '무엇이든 질문하세요', reviewPractice: '복습 및 연습', ellPractice: '말하기 연습', ellPronunciation: '발음 연습', helpLesson: '이것을 설명해주세요', helpMe: 'AI 도움', keyConcepts: '핵심 개념', aiCoach: 'AI 코치', aiProjectCoach: 'AI 프로젝트 코치'},
        'nb': {helpPage: 'Hjelp med denne siden', quiz: 'Test meg', studyPlan: 'Studieplan', askAnything: 'Spør om hva som helst', reviewPractice: 'Gjennomgå og øv', ellPractice: 'Øv å snakke', ellPronunciation: 'Uttaleøvelse', helpLesson: 'Forklar dette', helpMe: 'AI-hjelp', keyConcepts: 'Nøkkelbegreper', aiCoach: 'AI-coach', aiProjectCoach: 'AI-prosjektcoach'},
        'pl': {helpPage: 'Pomoc z tą stroną', quiz: 'Przetestuj mnie', studyPlan: 'Plan nauki', askAnything: 'Zapytaj o cokolwiek', reviewPractice: 'Powtórka i ćwiczenia', ellPractice: 'Ćwiczenie mówienia', ellPronunciation: 'Ćwiczenie wymowy', helpLesson: 'Wyjaśnij to', helpMe: 'Pomoc AI', keyConcepts: 'Kluczowe pojęcia', aiCoach: 'Trener AI', aiProjectCoach: 'Trener projektów AI'},
        'pt': {helpPage: 'Ajuda com esta página', quiz: 'Me teste', studyPlan: 'Plano de estudo', askAnything: 'Pergunte qualquer coisa', reviewPractice: 'Revisar e praticar', ellPractice: 'Praticar a fala', ellPronunciation: 'Prática de pronúncia', helpLesson: 'Explique isso', helpMe: 'Ajuda de IA', keyConcepts: 'Conceitos-chave', aiCoach: 'Coach de IA', aiProjectCoach: 'Coach de Projeto IA'},
        'ro': {helpPage: 'Ajutor cu această pagină', quiz: 'Testează-mă', studyPlan: 'Plan de studiu', askAnything: 'Întreabă orice', reviewPractice: 'Revizuire și practică', ellPractice: 'Practică vorbirea', ellPronunciation: 'Practică pronunție', helpLesson: 'Explică asta', helpMe: 'Ajutor AI', keyConcepts: 'Concepte cheie', aiCoach: 'Coach IA', aiProjectCoach: 'Coach de Proiect IA'},
        'ru': {helpPage: 'Помощь с этой страницей', quiz: 'Проверь меня', studyPlan: 'План учёбы', askAnything: 'Спросите что угодно', reviewPractice: 'Повторение и практика', ellPractice: 'Практика речи', ellPronunciation: 'Практика произношения', helpLesson: 'Объясни это', helpMe: 'Помощь ИИ', keyConcepts: 'Ключевые понятия', aiCoach: 'ИИ-коуч', aiProjectCoach: 'ИИ-коуч по проектам'},
        'sk': {helpPage: 'Pomoc s touto stránkou', quiz: 'Otestuj ma', studyPlan: 'Študijný plán', askAnything: 'Opýtajte sa čokoľvek', reviewPractice: 'Opakovanie a precvičovanie', ellPractice: 'Cvičenie reči', ellPronunciation: 'Nácvik výslovnosti', helpLesson: 'Vysvetli to', helpMe: 'Pomoc AI', keyConcepts: 'Kľúčové pojmy', aiCoach: 'AI kouč', aiProjectCoach: 'AI projektový kouč'},
        'es': {helpPage: 'Ayuda con esta página', quiz: 'Ponme a prueba', studyPlan: 'Plan de estudio', askAnything: 'Pregunta lo que quieras', reviewPractice: 'Repasar y practicar', ellPractice: 'Practicar el habla', ellPronunciation: 'Práctica de pronunciación', helpLesson: 'Explicar esto', helpMe: 'Ayuda de IA', keyConcepts: 'Conceptos clave', aiCoach: 'Coach de IA', aiProjectCoach: 'Coach de Proyecto IA'},
        'sv': {helpPage: 'Hjälp med denna sida', quiz: 'Testa mig', studyPlan: 'Studieplan', askAnything: 'Fråga vad du vill', reviewPractice: 'Repetera och öva', ellPractice: 'Övning i tal', ellPronunciation: 'Uttalsbövning', helpLesson: 'Förklara detta', helpMe: 'AI-hjälp', keyConcepts: 'Nyckelbegrepp', aiCoach: 'AI-coach', aiProjectCoach: 'AI-projektcoach'},
        'ta': {helpPage: 'இந்தப் பக்கத்தில் உதவி', quiz: 'என்னை சோதி', studyPlan: 'படிப்பு திட்டம்', askAnything: 'எதையும் கேளுங்கள்', reviewPractice: 'மீளாய்வு மற்றும் பயிற்சி', ellPractice: 'பேசும் பயிற்சி', ellPronunciation: 'உச்சரிப்பு பயிற்சி', helpLesson: 'இதை விளக்கு', helpMe: 'AI உதவி', keyConcepts: 'முக்கிய கருத்துகள்', aiCoach: 'AI பயிற்சியாளர்', aiProjectCoach: 'AI திட்ட பயிற்சியாளர்'},
        'th': {helpPage: 'ช่วยเหลือหน้านี้', quiz: 'ทดสอบฉัน', studyPlan: 'แผนการเรียน', askAnything: 'ถามอะไรก็ได้', reviewPractice: 'ทบทวนและฝึกฝน', ellPractice: 'ฝึกพูด', ellPronunciation: 'ฝึกการออกเสียง', helpLesson: 'อธิบายสิ่งนี้', helpMe: 'ความช่วยเหลือ AI', keyConcepts: 'แนวคิดหลัก', aiCoach: 'โค้ช AI', aiProjectCoach: 'โค้ชโปรเจกต์ AI'},
        'tr': {helpPage: 'Bu sayfada yardım', quiz: 'Beni sına', studyPlan: 'Çalışma planı', askAnything: 'Herhangi bir şey sor', reviewPractice: 'Tekrar ve uygulama', ellPractice: 'Konuşma pratiği', ellPronunciation: 'Telaffuz pratiği', helpLesson: 'Bunu açıkla', helpMe: 'Yapay zeka yardımı', keyConcepts: 'Temel Kavramlar', aiCoach: 'YZ Koçu', aiProjectCoach: 'AI Proje Koçu'},
        'uk': {helpPage: 'Допомога з цією сторінкою', quiz: 'Перевір мене', studyPlan: 'Навчальний план', askAnything: 'Запитайте будь-що', reviewPractice: 'Повторення та практика', ellPractice: 'Практика мовлення', ellPronunciation: 'Практика вимови', helpLesson: 'Поясни це', helpMe: 'Допомога ШІ', keyConcepts: 'Ключові поняття', aiCoach: 'ШІ-тренер', aiProjectCoach: 'ШІ-тренер проєктів'},
        'vi': {helpPage: 'Trợ giúp trang này', quiz: 'Kiểm tra tôi', studyPlan: 'Kế hoạch học tập', askAnything: 'Hỏi bất cứ điều gì', reviewPractice: 'Ôn tập và thực hành', ellPractice: 'Luyện nói', ellPronunciation: 'Luyện phát âm', helpLesson: 'Giải thích điều này', helpMe: 'Hỗ trợ AI', keyConcepts: 'Khái niệm chính', aiCoach: 'Huấn luyện AI', aiProjectCoach: 'Huấn luyện dự án AI'},
        'bn': {helpPage: 'এই পৃষ্ঠায় সাহায্য', quiz: 'আমাকে পরীক্ষা করুন', studyPlan: 'অধ্যয়ন পরিকল্পনা', askAnything: 'যেকোনো কিছু জিজ্ঞাসা করুন', reviewPractice: 'পর্যালোচনা ও অনুশীলন', ellPractice: 'কথা বলার অনুশীলন', ellPronunciation: 'উচ্চারণ অনুশীলন', helpLesson: 'এটি ব্যাখ্যা করুন', helpMe: 'AI সহায়তা', keyConcepts: 'মূল ধারণা', aiCoach: 'AI কোচ', aiProjectCoach: 'AI প্রকল্প কোচ'},
        'tl': {helpPage: 'Tulong sa pahinang ito', quiz: 'Subukin ako', studyPlan: 'Plano sa pag-aaral', askAnything: 'Magtanong ng kahit ano', reviewPractice: 'Repasuhin at magsanay', ellPractice: 'Pagsasanay sa pagsasalita', ellPronunciation: 'Pagsasanay sa bigkas', helpLesson: 'Ipaliwanag ito', helpMe: 'AI tulong', keyConcepts: 'Pangunahing Konsepto', aiCoach: 'AI Coach', aiProjectCoach: 'AI Project Coach'},
        'ms': {helpPage: 'Bantuan halaman ini', quiz: 'Uji saya', studyPlan: 'Rancangan belajar', askAnything: 'Tanya apa sahaja', reviewPractice: 'Ulangkaji dan berlatih', ellPractice: 'Latihan bercakap', ellPronunciation: 'Latihan sebutan', helpLesson: 'Terangkan ini', helpMe: 'Bantuan AI', keyConcepts: 'Konsep Utama', aiCoach: 'Jurulatih AI', aiProjectCoach: 'Jurulatih Projek AI'},
        'pa': {helpPage: 'ਇਸ ਪੰਨੇ ਵਿੱਚ ਮਦਦ', quiz: 'ਮੈਨੂੰ ਟੈਸਟ ਕਰੋ', studyPlan: 'ਅਧਿਐਨ ਯੋਜਨਾ', askAnything: 'ਕੁਝ ਵੀ ਪੁੱਛੋ', reviewPractice: 'ਸਮੀਖਿਆ ਅਤੇ ਅਭਿਆਸ', ellPractice: 'ਬੋਲਣ ਦੀ ਪ੍ਰੈਕਟਿਸ', ellPronunciation: 'ਉਚਾਰਨ ਅਭਿਆਸ', helpLesson: 'ਇਹ ਸਮਝਾਓ', helpMe: 'AI ਸਹਾਇਤਾ', keyConcepts: 'ਮੁੱਖ ਧਾਰਣਾਵਾਂ', aiCoach: 'AI ਕੋਚ', aiProjectCoach: 'AI ਪ੍ਰੋਜੈਕਟ ਕੋਚ'},
        'am': {helpPage: 'በዚህ ገጽ ላይ እርዳታ', quiz: 'ፈትነኝ', studyPlan: 'የጥናት እቅድ', askAnything: 'ማንኛውንም ጠይቅ', reviewPractice: 'ክለሳ እና ልምምድ', ellPractice: 'የንግግር ልምምድ', ellPronunciation: 'የአጠራር ልምምድ', helpLesson: 'ይህን አብራራ', helpMe: 'የAI እርዳታ', keyConcepts: 'ዋና ፅንሰ-ሀሳቦች', aiCoach: 'AI አሰልጣኝ', aiProjectCoach: 'AI ፕሮጀክት አሰልጣኝ'},
        'ne': {helpPage: 'यो पृष्ठमा मद्दत', quiz: 'मलाई परीक्षण गर्नुहोस्', studyPlan: 'अध्ययन योजना', askAnything: 'जे पनि सोध्नुहोस्', reviewPractice: 'समीक्षा र अभ्यास', ellPractice: 'बोल्ने अभ्यास', ellPronunciation: 'उच्चारण अभ्यास', helpLesson: 'यो व्याख्या गर्नुहोस्', helpMe: 'AI सहायता', keyConcepts: 'मुख्य अवधारणाहरू', aiCoach: 'AI कोच', aiProjectCoach: 'AI परियोजना कोच'},
        'sw': {helpPage: 'Msaada wa ukurasa huu', quiz: 'Nijaribu', studyPlan: 'Mpango wa masomo', askAnything: 'Uliza chochote', reviewPractice: 'Kagua na fanya mazoezi', ellPractice: 'Mazoezi ya kusema', ellPronunciation: 'Mazoezi ya matamshi', helpLesson: 'Eleza hili', helpMe: 'Msaada wa AI', keyConcepts: 'Dhana Kuu', aiCoach: 'Kocha wa AI', aiProjectCoach: 'Kocha wa Miradi wa AI'},
        'zu': {helpPage: 'Usizo ngaleli khasi', quiz: 'Nglinge', studyPlan: 'Uhlelo lwezifundo', askAnything: 'Buza noma yini', reviewPractice: 'Buyekeza futhi uzipratize', ellPractice: 'Ukulolonga ukukhuluma', ellPronunciation: 'Ukulolonga ukuphimisa', helpLesson: 'Chaza lokhu', helpMe: 'Usizo lwe-AI', keyConcepts: 'Imiqondo Esemqoka', aiCoach: 'I-AI Coach', aiProjectCoach: 'I-AI Project Coach'},
        'bm': {helpPage: 'Dɛmɛ ni nin ɲɛ ye', quiz: 'N sɛgɛsɛgɛ', studyPlan: 'Kalanso jɛtigi', askAnything: 'Fɛn o fɛn ɲininka', reviewPractice: 'Sɛgɛsɛgɛli ni lakodɔnni', ellPractice: 'Kumakan lasɛli', ellPronunciation: 'Kumakan fɔli lasɛli', helpLesson: 'A fɔ cogo min na', helpMe: 'AI dɛmɛ', keyConcepts: 'Kunnafoni Hakɛw', aiCoach: 'AI kɔntigi', aiProjectCoach: 'AI porojɛ kɔntigi'},
        'ha': {helpPage: 'Taimako da wannan shafi', quiz: 'Jarrabeni', studyPlan: 'Shirin karatu', askAnything: 'Tambayi komai', reviewPractice: 'Bita da aiki', ellPractice: 'Yi magana', ellPronunciation: 'Aikin furta', helpLesson: 'Bayyana wannan', helpMe: 'Taimako na AI', keyConcepts: "Muhimman Ra'ayoyi", aiCoach: 'Kocin AI', aiProjectCoach: 'Kocin Ayyuka na AI'},
        'ig': {helpPage: 'Enyemaka peeji a', quiz: 'Nwale m', studyPlan: 'Atụmatụ mmụta', askAnything: 'Jụọ ihe ọ bụla', reviewPractice: 'Nyochaa ma mụọ', ellPractice: 'Ịmụta ikwu okwu', ellPronunciation: 'Ọmụma ịkpọ okwu', helpLesson: 'Kọọ ihe a', helpMe: 'Nkwado AI', keyConcepts: 'Echiche Ndị Bụ Isi', aiCoach: 'Onye nkuzi AI', aiProjectCoach: 'Onye nkuzi oru AI'},
        'om': {helpPage: 'Gargaarsa fuula kanaa', quiz: 'Na qori', studyPlan: 'Karoora barumsaa', askAnything: 'Waan tokko gaafadhu', reviewPractice: 'Irra deebi\'ii shaakali', ellPractice: 'Dubbachuu shaakala', ellPronunciation: 'Dhaggeeffannaa', helpLesson: 'Kana ibsi', helpMe: 'Gargaarsa AI', keyConcepts: 'Yaadota Ijoo', aiCoach: 'AI Qoree', aiProjectCoach: 'AI Pirojektii Qoree'},
        'so': {helpPage: 'Caawimaad boggan', quiz: 'I tijaabi', studyPlan: 'Qorshe waxbarashada', askAnything: 'Weydii wax kasta', reviewPractice: 'Dib u eeg oo ku celceli', ellPractice: 'Celinta hadlida', ellPronunciation: 'Ku celinta madadaalaha', helpLesson: 'Sharax kan', helpMe: 'Caawimada AI', keyConcepts: 'Fikradaha Muhiimka ah', aiCoach: 'Tababaraha AI', aiProjectCoach: 'Tababaraha Mashruuca AI'},
        'wo': {helpPage: 'Ndimbal ci bii xët', quiz: 'Seetlu ma', studyPlan: 'Xëy ci jàng', askAnything: 'Laaj lu la neexe', reviewPractice: 'Seet ak jëfandikoo', ellPractice: 'Taxawaay ci wax-waxu', ellPronunciation: 'Liggéeyu baat', helpLesson: 'Xamal li', helpMe: 'Ndimbal AI', keyConcepts: 'Xam-xam bu Dëkk', aiCoach: 'Kooci AI', aiProjectCoach: 'Kooci AI ci proojee'},
        'yo': {helpPage: 'Ìrànlọ́wọ́ ojú-ìwé yìí', quiz: 'Dánwò mi', studyPlan: 'Ètò Ẹkọ', askAnything: 'Béèrè ohunkóhun', reviewPractice: 'Àtúnyẹ̀wò àti ìdánrawò', ellPractice: 'Ìdánwò Ọ̀rọ̀', ellPronunciation: 'Ìdánwò Pronunciation', helpLesson: 'Ṣe àlàyé èyí', helpMe: 'Ìrànlọ́wọ́ AI', keyConcepts: 'Àwọn Èrò Pàtàkì', aiCoach: 'Olùkọ́ AI', aiProjectCoach: 'Olùkọ́ Iṣẹ́ Àkànṣe AI'},
    };

    // -----------------------------------------------------------------------
    // Conversation starter PROMPT translations (26 languages)
    // These are the actual prompts sent to the AI, not the button labels.
    // -----------------------------------------------------------------------

    /** @type {Object} Starter prompt translations keyed by ISO 639-1 code */
    const STARTER_PROMPTS = {
        'en': {
            helpPage: 'Help me understand this page',
            quiz: 'Give me a practice quiz',
            studyPlan: 'Help me create a study plan',
            askAnything: 'I have a question',
            reviewPractice: 'Review and practice key concepts'
        },
        'ar': {
            helpPage: 'ساعدني في فهم هذه الصفحة',
            quiz: 'أعطني اختباراً تدريبياً',
            studyPlan: 'ساعدني في إنشاء خطة دراسية',
            askAnything: 'لدي سؤال',
            reviewPractice: 'مراجعة وممارسة المفاهيم الرئيسية'
        },
        'am': {
            helpPage: 'ይህን ገጽ እንድረዳ እርዳኝ',
            quiz: 'የልምምድ ፈተና ስጠኝ',
            studyPlan: 'የጥናት እቅድ እንድፈጥር እርዳኝ',
            askAnything: 'ጥያቄ አለኝ',
            reviewPractice: 'ቁልፍ ፅንሰ-ሀሳቦችን ክለሳ እና ልምምድ'
        },
        'bm': {
            helpPage: 'N dɛmɛ ka nin ɲɛ faamu',
            quiz: 'Sɛgɛsɛgɛli kɛ n ye',
            studyPlan: 'N dɛmɛ ka kalanso jɛtigi dilan',
            askAnything: 'Ɲininkali bɛ n bolo',
            reviewPractice: 'Kunnafoni hakɛw sɛgɛsɛgɛ ani lakodɔn'
        },
        'bn': {
            helpPage: 'এই পৃষ্ঠাটি বুঝতে আমাকে সাহায্য করুন',
            quiz: 'আমাকে একটি অনুশীলন কুইজ দিন',
            studyPlan: 'একটি অধ্যয়ন পরিকল্পনা তৈরি করতে আমাকে সাহায্য করুন',
            askAnything: 'আমার একটি প্রশ্ন আছে',
            reviewPractice: 'মূল ধারণাগুলি পর্যালোচনা ও অনুশীলন করুন'
        },
        'es': {
            helpPage: 'Ayúdame a entender esta página',
            quiz: 'Dame un cuestionario de práctica',
            studyPlan: 'Ayúdame a crear un plan de estudio',
            askAnything: 'Tengo una pregunta',
            reviewPractice: 'Revisar y practicar conceptos clave'
        },
        'fr': {
            helpPage: 'Aide-moi à comprendre cette page',
            quiz: 'Donne-moi un quiz de pratique',
            studyPlan: 'Aide-moi à créer un plan d\'étude',
            askAnything: 'J\'ai une question',
            reviewPractice: 'Réviser et pratiquer les concepts clés'
        },
        'ha': {
            helpPage: 'Taimaka mini in fahimci wannan shafin',
            quiz: 'Ba ni jarabawar aiki',
            studyPlan: 'Taimaka mini in kirkiri shirin karatu',
            askAnything: 'Ina da tambaya',
            reviewPractice: 'Bita da aikata muhimman ra\'ayoyi'
        },
        'hi': {
            helpPage: 'इस पेज को समझने में मेरी मदद करें',
            quiz: 'मुझे एक अभ्यास प्रश्नोत्तरी दें',
            studyPlan: 'एक अध्ययन योजना बनाने में मेरी मदद करें',
            askAnything: 'मेरा एक सवाल है',
            reviewPractice: 'मुख्य अवधारणाओं की समीक्षा और अभ्यास करें'
        },
        'id': {
            helpPage: 'Bantu saya memahami halaman ini',
            quiz: 'Berikan saya kuis latihan',
            studyPlan: 'Bantu saya membuat rencana belajar',
            askAnything: 'Saya punya pertanyaan',
            reviewPractice: 'Tinjau dan latih konsep utama'
        },
        'ig': {
            helpPage: 'Nyere m aka ịghọta peeji a',
            quiz: 'Nye m ajụjụ ule mmụta',
            studyPlan: 'Nyere m aka ịmepụta atụmatụ mmụta',
            askAnything: 'Enwere m ajụjụ',
            reviewPractice: 'Nyochaa ma mụọ echiche ndị bụ isi'
        },
        'ms': {
            helpPage: 'Bantu saya memahami halaman ini',
            quiz: 'Berikan saya kuiz latihan',
            studyPlan: 'Bantu saya membuat rancangan belajar',
            askAnything: 'Saya ada soalan',
            reviewPractice: 'Ulangkaji dan berlatih konsep utama'
        },
        'ne': {
            helpPage: 'यो पृष्ठ बुझ्न मलाई मद्दत गर्नुहोस्',
            quiz: 'मलाई अभ्यास प्रश्नोत्तरी दिनुहोस्',
            studyPlan: 'अध्ययन योजना बनाउन मलाई मद्दत गर्नुहोस्',
            askAnything: 'मेरो एउटा प्रश्न छ',
            reviewPractice: 'मुख्य अवधारणाहरू समीक्षा र अभ्यास गर्नुहोस्'
        },
        'om': {
            helpPage: 'Fuula kana akkan hubachuu na gargaari',
            quiz: 'Qormaata shaakalaaf naaf kenni',
            studyPlan: 'Karoora barumsaa uumuu na gargaari',
            askAnything: 'Gaaffii qaba',
            reviewPractice: 'Yaadota ijoo irra deebi\'ii shaakali'
        },
        'pa': {
            helpPage: 'ਇਸ ਪੰਨੇ ਨੂੰ ਸਮਝਣ ਵਿੱਚ ਮੇਰੀ ਮਦਦ ਕਰੋ',
            quiz: 'ਮੈਨੂੰ ਇੱਕ ਅਭਿਆਸ ਕੁਇਜ਼ ਦਿਓ',
            studyPlan: 'ਅਧਿਐਨ ਯੋਜਨਾ ਬਣਾਉਣ ਵਿੱਚ ਮੇਰੀ ਮਦਦ ਕਰੋ',
            askAnything: 'ਮੇਰਾ ਇੱਕ ਸਵਾਲ ਹੈ',
            reviewPractice: 'ਮੁੱਖ ਧਾਰਣਾਵਾਂ ਦੀ ਸਮੀਖਿਆ ਅਤੇ ਅਭਿਆਸ ਕਰੋ'
        },
        'pt': {
            helpPage: 'Me ajude a entender esta página',
            quiz: 'Me dê um quiz de prática',
            studyPlan: 'Me ajude a criar um plano de estudo',
            askAnything: 'Eu tenho uma pergunta',
            reviewPractice: 'Revisar e praticar conceitos-chave'
        },
        'ru': {
            helpPage: 'Помоги мне понять эту страницу',
            quiz: 'Дай мне тренировочный тест',
            studyPlan: 'Помоги мне составить план учёбы',
            askAnything: 'У меня есть вопрос',
            reviewPractice: 'Повторить и попрактиковать ключевые понятия'
        },
        'so': {
            helpPage: 'I caawin in aan fahmo boggan',
            quiz: 'I sii imtixaan tababar ah',
            studyPlan: 'I caawin in aan abuuro qorshe waxbarashada',
            askAnything: 'Su\'aal baan qabaa',
            reviewPractice: 'Dib u eeg oo ku celceli fikradaha muhiimka ah'
        },
        'sw': {
            helpPage: 'Nisaidie kuelewa ukurasa huu',
            quiz: 'Nipe jaribio la mazoezi',
            studyPlan: 'Nisaidie kutengeneza mpango wa masomo',
            askAnything: 'Nina swali',
            reviewPractice: 'Kagua na fanya mazoezi ya dhana kuu'
        },
        'ta': {
            helpPage: 'இந்தப் பக்கத்தைப் புரிந்துகொள்ள எனக்கு உதவுங்கள்',
            quiz: 'எனக்கு ஒரு பயிற்சி வினாடி வினா கொடுங்கள்',
            studyPlan: 'ஒரு படிப்பு திட்டம் உருவாக்க எனக்கு உதவுங்கள்',
            askAnything: 'எனக்கு ஒரு கேள்வி உள்ளது',
            reviewPractice: 'முக்கிய கருத்துகளை மீளாய்வு செய்து பயிற்சி செய்யுங்கள்'
        },
        'tl': {
            helpPage: 'Tulungan mo akong maunawaan ang pahinang ito',
            quiz: 'Bigyan mo ako ng practice quiz',
            studyPlan: 'Tulungan mo akong gumawa ng plano sa pag-aaral',
            askAnything: 'May tanong ako',
            reviewPractice: 'Repasuhin at isanay ang mga pangunahing konsepto'
        },
        'vi': {
            helpPage: 'Giúp tôi hiểu trang này',
            quiz: 'Cho tôi một bài kiểm tra thực hành',
            studyPlan: 'Giúp tôi tạo kế hoạch học tập',
            askAnything: 'Tôi có một câu hỏi',
            reviewPractice: 'Ôn tập và thực hành các khái niệm chính'
        },
        'wo': {
            helpPage: 'Ndimbal ma xam bii xët',
            quiz: 'Jox ma seetlu bi jëfandikoo',
            studyPlan: 'Ndimbal ma sos ab xëy ci jàng',
            askAnything: 'Am naa laaj',
            reviewPractice: 'Seet ak jëfandikoo xam-xam yu am solo'
        },
        'yo': {
            helpPage: 'Ràn mí lọ́wọ́ láti lóye ojú-ìwé yìí',
            quiz: 'Fún mi ní ìdánwò àdánrawò',
            studyPlan: 'Ràn mí lọ́wọ́ láti ṣẹ̀dá ètò ẹ̀kọ́',
            askAnything: 'Mo ní ìbéèrè kan',
            reviewPractice: 'Àtúnyẹ̀wò àti ìdánrawò àwọn èrò pàtàkì'
        },
        'zh': {
            helpPage: '帮我理解这个页面',
            quiz: '给我一个练习测验',
            studyPlan: '帮我制定一个学习计划',
            askAnything: '我有一个问题',
            reviewPractice: '复习和练习关键概念'
        },
        'zu': {
            helpPage: 'Ngisize ngiqonde leli khasi',
            quiz: 'Nginike isivivinyo sokuzejwayeza',
            studyPlan: 'Ngisize ngakhe uhlelo lwezifundo',
            askAnything: 'Nginombuzo',
            reviewPractice: 'Buyekeza futhi uzipratize imiqondo esemqoka'
        },
        'bg': {
            helpPage: 'Помогни ми да разбера тази страница',
            quiz: 'Дай ми тест за упражнение',
            studyPlan: 'Помогни ми да направя план за учене',
            askAnything: 'Имам въпрос',
            reviewPractice: 'Преговор и упражнение на основните понятия'
        },
        'cs': {
            helpPage: 'Pomoz mi pochopit tuto stránku',
            quiz: 'Dej mi cvičný kvíz',
            studyPlan: 'Pomoz mi vytvořit studijní plán',
            askAnything: 'Mám otázku',
            reviewPractice: 'Zopakovat a procvičit klíčové pojmy'
        },
        'da': {
            helpPage: 'Hjælp mig med at forstå denne side',
            quiz: 'Giv mig en øvelsesquiz',
            studyPlan: 'Hjælp mig med at lave en studieplan',
            askAnything: 'Jeg har et spørgsmål',
            reviewPractice: 'Gennemgå og øv nøglebegreber'
        },
        'nl': {
            helpPage: 'Help me deze pagina te begrijpen',
            quiz: 'Geef me een oefenquiz',
            studyPlan: 'Help me een studieplan te maken',
            askAnything: 'Ik heb een vraag',
            reviewPractice: 'Kernbegrippen herhalen en oefenen'
        },
        'fi': {
            helpPage: 'Auta minua ymmärtämään tämä sivu',
            quiz: 'Anna minulle harjoituskoe',
            studyPlan: 'Auta minua tekemään opiskelusuunnitelma',
            askAnything: 'Minulla on kysymys',
            reviewPractice: 'Kertaa ja harjoittele avainkäsitteitä'
        },
        'de': {
            helpPage: 'Hilf mir, diese Seite zu verstehen',
            quiz: 'Gib mir ein Übungsquiz',
            studyPlan: 'Hilf mir, einen Lernplan zu erstellen',
            askAnything: 'Ich habe eine Frage',
            reviewPractice: 'Schlüsselbegriffe wiederholen und üben'
        },
        'el': {
            helpPage: 'Βοήθησέ με να καταλάβω αυτή τη σελίδα',
            quiz: 'Δώσε μου ένα κουίζ εξάσκησης',
            studyPlan: 'Βοήθησέ με να φτιάξω πρόγραμμα μελέτης',
            askAnything: 'Έχω μια ερώτηση',
            reviewPractice: 'Επανάληψη και εξάσκηση βασικών εννοιών'
        },
        'he': {
            helpPage: 'עזור לי להבין את הדף הזה',
            quiz: 'תן לי חידון תרגול',
            studyPlan: 'עזור לי ליצור תוכנית לימודים',
            askAnything: 'יש לי שאלה',
            reviewPractice: 'לחזור ולתרגל מושגי מפתח'
        },
        'hu': {
            helpPage: 'Segíts megérteni ezt az oldalt',
            quiz: 'Adj egy gyakorló kvízt',
            studyPlan: 'Segíts tanulási tervet készíteni',
            askAnything: 'Van egy kérdésem',
            reviewPractice: 'Kulcsfogalmak áttekintése és gyakorlása'
        },
        'it': {
            helpPage: 'Aiutami a capire questa pagina',
            quiz: 'Fammi un quiz di pratica',
            studyPlan: 'Aiutami a creare un piano di studio',
            askAnything: 'Ho una domanda',
            reviewPractice: 'Ripassare e praticare i concetti chiave'
        },
        'ja': {
            helpPage: 'このページの内容を教えて',
            quiz: '練習クイズを出して',
            studyPlan: '学習計画を立てるのを手伝って',
            askAnything: '質問があります',
            reviewPractice: '重要な概念を復習して練習する'
        },
        'ko': {
            helpPage: '이 페이지를 이해하도록 도와줘',
            quiz: '연습 퀴즈를 내줘',
            studyPlan: '학습 계획을 세우는 걸 도와줘',
            askAnything: '질문이 있어요',
            reviewPractice: '핵심 개념 복습하고 연습하기'
        },
        'nb': {
            helpPage: 'Hjelp meg å forstå denne siden',
            quiz: 'Gi meg en øvingsquiz',
            studyPlan: 'Hjelp meg å lage en studieplan',
            askAnything: 'Jeg har et spørsmål',
            reviewPractice: 'Gjennomgå og øv på nøkkelbegreper'
        },
        'pl': {
            helpPage: 'Pomóż mi zrozumieć tę stronę',
            quiz: 'Daj mi quiz do ćwiczeń',
            studyPlan: 'Pomóż mi stworzyć plan nauki',
            askAnything: 'Mam pytanie',
            reviewPractice: 'Powtórz i przećwicz kluczowe pojęcia'
        },
        'ro': {
            helpPage: 'Ajută-mă să înțeleg această pagină',
            quiz: 'Dă-mi un test de practică',
            studyPlan: 'Ajută-mă să fac un plan de studiu',
            askAnything: 'Am o întrebare',
            reviewPractice: 'Recapitulare și exersare a conceptelor cheie'
        },
        'sk': {
            helpPage: 'Pomôž mi pochopiť túto stránku',
            quiz: 'Daj mi cvičný kvíz',
            studyPlan: 'Pomôž mi vytvoriť študijný plán',
            askAnything: 'Mám otázku',
            reviewPractice: 'Zopakovať a precvičiť kľúčové pojmy'
        },
        'sv': {
            helpPage: 'Hjälp mig förstå den här sidan',
            quiz: 'Ge mig ett övningsquiz',
            studyPlan: 'Hjälp mig skapa en studieplan',
            askAnything: 'Jag har en fråga',
            reviewPractice: 'Repetera och öva på nyckelbegrepp'
        },
        'th': {
            helpPage: 'ช่วยให้ฉันเข้าใจหน้านี้',
            quiz: 'ให้แบบทดสอบฝึกหัดฉันหน่อย',
            studyPlan: 'ช่วยฉันวางแผนการเรียน',
            askAnything: 'ฉันมีคำถาม',
            reviewPractice: 'ทบทวนและฝึกฝนแนวคิดสำคัญ'
        },
        'tr': {
            helpPage: 'Bu sayfayı anlamama yardım et',
            quiz: 'Bana bir alıştırma testi ver',
            studyPlan: 'Çalışma planı yapmama yardım et',
            askAnything: 'Bir sorum var',
            reviewPractice: 'Temel kavramları tekrarla ve pratik yap'
        },
        'uk': {
            helpPage: 'Допоможи мені зрозуміти цю сторінку',
            quiz: 'Дай мені тренувальний тест',
            studyPlan: 'Допоможи мені скласти план навчання',
            askAnything: 'У мене є питання',
            reviewPractice: 'Повторити та попрактикувати ключові поняття'
        },
    };

    /**
     * Get a translated starter prompt for a given language code and starter key.
     * Falls back to English if the language or key is not found.
     *
     * @param {string} langCode ISO 639-1 code, e.g. 'fr'
     * @param {string} key      Starter key, e.g. 'helpPage'
     * @returns {string}
     */
    const getStarterPrompt = function(langCode, key) {
        const lang = STARTER_PROMPTS[langCode] || STARTER_PROMPTS['en'];
        return lang[key] || STARTER_PROMPTS['en'][key] || '';
    };

    /**
     * Get starter label translations for a given language code.
     * Returns null for English (default), meaning callers should use the original server-rendered text.
     *
     * @param {string|null} code ISO 639-1 code, or null for English
     * @returns {{helpPage, quiz, studyPlan, askAnything, reviewPractice, ellPractice, ellPronunciation}|null}
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
        getStarterPrompt:  getStarterPrompt,
    };
});
