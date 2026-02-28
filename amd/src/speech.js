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
     * Speak a text string.
     * Cancels any currently playing speech first.
     * Automatically selects the best available voice for the current locale.
     *
     * @param {string}   text  The text to read aloud.
     * @param {Function} onEnd Optional callback when speech finishes.
     */
    const speak = function(text, onEnd) {
        if (!isTTSSupported()) {
            return;
        }

        // Cancel any ongoing speech.
        speechSynthesis.cancel();

        // Strip markdown-style symbols that don't read well aloud.
        const clean = text
            .replace(/```[\s\S]*?```/g, 'code block.')
            .replace(/`[^`]+`/g, '')
            .replace(/#{1,6}\s/g, '')
            .replace(/\*\*(.+?)\*\*/g, '$1')
            .replace(/\*(.+?)\*/g, '$1')
            .replace(/\[([^\]]+)\]\([^)]+\)/g, '$1')
            .replace(/\n{2,}/g, '. ')
            .replace(/\n/g, ' ')
            .trim();

        const locale = getLocale();

        const doSpeak = function() {
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

            speechSynthesis.speak(utterance);
        };

        // Chrome loads voices asynchronously — getVoices() can return [] on first call.
        if (speechSynthesis.getVoices().length) {
            doSpeak();
        } else {
            speechSynthesis.onvoiceschanged = function() {
                speechSynthesis.onvoiceschanged = null;
                doSpeak();
            };
        }
    };

    /**
     * Stop any currently playing speech.
     */
    const stopSpeaking = function() {
        if (isTTSSupported()) {
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
    // Public API
    // -----------------------------------------------------------------------

    return {
        SUPPORTED_LANGS:  SUPPORTED_LANGS,
        LANG_KEY:         LANG_KEY,
        getLang:          getLang,
        setLang:          setLang,
        clearLang:        clearLang,
        getLocale:        getLocale,
        getLangInfo:      getLangInfo,
        detectBrowserLang: detectBrowserLang,
        isSTTSupported:   isSTTSupported,
        isTTSSupported:   isTTSSupported,
        startListening:   startListening,
        stopListening:    stopListening,
        isRecording:      isRecording,
        speak:            speak,
        stopSpeaking:     stopSpeaking,
        isSpeaking:       isSpeaking,
    };
});
