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
 * Main chat controller for AI tutor chat.
 *
 * @module     local_ai_course_assistant/chat
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define([
    'local_ai_course_assistant/ui',
    'local_ai_course_assistant/sse_client',
    'local_ai_course_assistant/repository',
    'local_ai_course_assistant/speech',
    'local_ai_course_assistant/realtime',
    'local_ai_course_assistant/voice',
    'core/str',
], function(UI, SSE, Repo, Speech, Realtime, Voice, Str) {

    /** @type {Array} Quiz topics parsed from data attribute */
    let quizTopics = [];
    /** @type {Array} Learning objectives from course */
    let learningObjectives = [];
    /** @type {Array} Module/activity titles from course */
    let moduleTitles = [];
    /** @type {boolean} Whether quiz mode is currently active */
    let quizModeActive = false;

    /** @type {number} Course ID */
    let courseId = 0;
    /** @type {string} Session key */
    let sessKey = '';
    /** @type {string} SSE endpoint URL */
    let sseUrl = '';
    /** @type {boolean} Whether history has been loaded */
    let historyLoaded = false;
    /** @type {boolean} Whether a message is currently being sent/streamed */
    let sending = false;
    /** @type {AbortController|null} Current stream controller */
    let streamController = null;
    /** @type {string} Student's first name for personalized greeting */
    let firstName = '';
    /** @type {number} Current module/page ID (0 if not on a resource page) */
    let currentPageId = 0;
    /** @type {string} Title of the current resource page (empty if on course-level page) */
    let currentPageTitle = '';
    /** @type {boolean} Whether SOLA is locked due to a Moodle quiz attempt/view page */
    let quizLocked = false;
    /** @type {HTMLAudioElement|null} Currently playing OpenAI TTS audio */
    let currentAudio = null;

    /**
     * Initialize the chat module.
     */
    const init = function() {
        const root = document.getElementById('local-ai-course-assistant');
        if (!root) {
            return;
        }

        courseId = parseInt(root.dataset.courseid, 10);
        sessKey = root.dataset.sesskey;
        sseUrl = root.dataset.sseurl;
        firstName = root.dataset.firstname || '';
        currentPageId = parseInt(root.dataset.currentPageId, 10) || 0;
        currentPageTitle = root.dataset.currentPageTitle || '';
        quizLocked = root.dataset.quizLocked === '1';

        // Parse quiz topics from data attribute.
        try {
            const raw = root.dataset.quizTopics;
            if (raw) { quizTopics = JSON.parse(raw); }
        } catch (e) { quizTopics = []; }

        // Parse learning objectives and module titles.
        try {
            const raw = root.dataset.learningObjectives;
            if (raw) { learningObjectives = JSON.parse(raw); }
        } catch (e) { learningObjectives = []; }
        try {
            const raw = root.dataset.moduleTitles;
            if (raw) { moduleTitles = JSON.parse(raw); }
        } catch (e) { moduleTitles = []; }

        UI.initUI(root);
        bindEvents();
        initSpeech();
        // Cache English starter labels before any language update overwrites them.
        root.querySelectorAll('.local-ai-course-assistant__starter').forEach(function(btn) {
            var span = btn.querySelector('span:not(.aica-starter-icon)');
            if (span) {
                btn.dataset.labelEn = span.textContent.trim();
            }
        });
        initLanguage();

        // Auto-open on the user's first visit to this course.
        try {
            const visitedKey = 'ai_course_assistant_visited_' + courseId;
            if (!localStorage.getItem(visitedKey)) {
                localStorage.setItem(visitedKey, '1');
                setTimeout(handleToggle, 600);
            }
        } catch (e) {
            // localStorage may be unavailable.
        }
    };

    /**
     * Initialize speech input/output UI.
     * Hides the mic button if STT is not supported.
     */
    const initSpeech = function() {
        UI.setMicVisible(Speech.isSTTSupported());
    };

    /**
     * Auto-set language from browser on first visit; update label on subsequent visits.
     */
    const initLanguage = function() {
        const stored = Speech.getLang();

        if (stored) {
            // Already has a saved preference — update the label and starter texts.
            const info = Speech.getLangInfo(stored);
            if (info) {
                UI.setLangLabel(info.name);
                updateStarterTexts(stored);
            }
            return;
        }

        // Auto-detect and silently apply browser language.
        const detected = Speech.detectBrowserLang();
        if (detected) {
            const info = Speech.getLangInfo(detected);
            if (info) {
                Speech.setLang(detected);
                UI.setLangLabel(info.name);
                updateStarterTexts(detected);
                return;
            }
        }

        // No language set — show English label so chip is always meaningful.
        UI.setLangLabel('English');
    };

    /**
     * Update conversation starter button text to match the selected language.
     * Resets to the original English server-rendered text when langCode is null.
     *
     * @param {string|null} langCode ISO 639-1 code, or null for English
     */
    const updateStarterTexts = function(langCode) {
        const rootEl = document.getElementById('local-ai-course-assistant');
        if (!rootEl) {
            return;
        }
        const labels = Speech.getStarterLabels(langCode);
        const keyMap = {
            'quiz':         labels ? labels.quiz         : null,
            'explain':      labels ? labels.helpLesson   : null, // reuse helpLesson translations
            'key-concepts': labels ? labels.keyConcepts  : null,
            'study-plan':   labels ? labels.studyPlan    : null,
            'ell-practice':       labels ? labels.ellPractice       : null,
            'ell-pronunciation':  labels ? labels.ellPronunciation  : null,
            'ai-coach':           labels ? labels.aiCoach           : null,
            // Legacy starter keys.
            'help-lesson':  labels ? labels.helpLesson   : null,
            'help-me':      labels ? labels.helpMe       : null,
        };
        rootEl.querySelectorAll('.local-ai-course-assistant__starter').forEach(function(btn) {
            var span = btn.querySelector('span:not(.aica-starter-icon)');
            if (!span) {
                return;
            }
            const text = keyMap[btn.dataset.starter];
            if (text) {
                span.textContent = text;
            } else {
                // Reset to English (stored in data-label-en during init).
                span.textContent = btn.dataset.labelEn || span.textContent;
            }
        });
    };

    /**
     * Bind all event handlers.
     */
    const bindEvents = function() {
        const els = UI.getElements();

        // Toggle button.
        els.toggle.addEventListener('click', handleToggle);

        // Close button.
        els.closeBtn.addEventListener('click', function() {
            UI.closeDrawer();
        });

        // Send button.
        els.sendBtn.addEventListener('click', handleSend);

        // Input events.
        els.input.addEventListener('keydown', handleInputKeydown);
        els.input.addEventListener('input', function() {
            UI.autoResizeInput();
            UI.updateSendButton();
        });

        // Clear button.
        if (els.clearBtn) {
            els.clearBtn.addEventListener('click', handleClear);
        }

        // Expand/collapse button.
        if (els.expandBtn) {
            els.expandBtn.addEventListener('click', handleExpand);
        }

        // Mic button (STT).
        if (els.micBtn) {
            els.micBtn.addEventListener('click', handleMic);
        }

        // Language chip — opens compact language picker.
        if (els.langBtn) {
            els.langBtn.addEventListener('click', function() {
                UI.showLangPicker(
                    Speech.SUPPORTED_LANGS,
                    Speech.getLang(),
                    function(code, name) {
                        if (code) {
                            Speech.setLang(code);
                        } else {
                            Speech.clearLang();
                        }
                        UI.setLangLabel(name);
                        updateStarterTexts(code);
                    }
                );
            });
        }

        // Voice starter button (mic button inside the starters overlay).
        const starterVoiceBtn = els.root ? els.root.querySelector('.aica-starter-voice__btn') : null;
        if (starterVoiceBtn) {
            starterVoiceBtn.addEventListener('click', handleMic);
        }

        // Settings panel button (gear icon) — opens language / avatar / voice settings.
        const settingsPanelBtn = els.root ? els.root.querySelector('.local-ai-course-assistant__btn-settings-panel') : null;
        if (settingsPanelBtn) {
            settingsPanelBtn.addEventListener('click', handleSettingsPanel);
        }

        // Voice mode button (header shortcut — triggers Practice Speaking / Option B).
        const voiceBtn = els.root ? els.root.querySelector('.local-ai-course-assistant__btn-voice') : null;
        if (voiceBtn) {
            voiceBtn.addEventListener('click', function() {
                handlePracticeSpeaking();
            });
        }

        // Reset/home button.
        const resetBtn = els.root ? els.root.querySelector('.local-ai-course-assistant__btn-reset') : null;
        if (resetBtn) {
            resetBtn.addEventListener('click', handleReset);
        }


        // Conversation starters.
        if (els.root) {
            els.root.querySelectorAll('.local-ai-course-assistant__starter').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    handleStarter(btn.dataset.starter);
                });
            });
        }

        // Escape to close.
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && UI.isOpen()) {
                UI.closeDrawer();
            }
            // Ctrl/Cmd+Shift+C to copy conversation.
            if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.key === 'C' && UI.isOpen()) {
                e.preventDefault();
                handleCopy();
            }
        });
    };

    /**
     * Build a prompt string for a conversation starter + chosen topic.
     *
     * @param {string} starterKey 'help-lesson' | 'explain' | 'study-plan'
     * @param {string} topic      Resolved topic ('' = default, '__guided__' = AI-guided)
     * @returns {string}
     */
    const buildStarterPrompt = function(starterKey, topic) {
        const isGuided = topic === '__guided__';
        const isEmpty  = !topic || topic === '';

        if (starterKey === 'help-lesson') {
            if (isGuided) {
                return 'Based on my course progress and previous questions, which concept should I ' +
                    'be focusing on most right now? Please identify it, then help me understand it.';
            }
            if (isEmpty) {
                const pageRef = currentPageTitle ? '"' + currentPageTitle + '"' : 'the current lesson';
                return 'Can you help me understand the key concepts from ' + pageRef + '? Give me a clear summary.';
            }
            return 'Can you help me understand "' + topic + '"? Give me a summary of the key ' +
                'concepts and any important details.';
        }

        if (starterKey === 'explain') {
            if (isGuided) {
                return 'Based on my progress and what I\'ve been asking about, which concept from ' +
                    'this course should I understand more deeply right now? Please identify it and ' +
                    'explain it clearly with examples.';
            }
            if (isEmpty) {
                const pageRef = currentPageTitle ? '"' + currentPageTitle + '"' : 'this course so far';
                return 'Can you explain the most important concept from ' + pageRef + '? Use examples and clear language.';
            }
            return 'Can you explain "' + topic + '" in detail? Use examples and analogies to ' +
                'make it easy to understand.';
        }

        if (starterKey === 'key-concepts') {
            if (isEmpty) {
                const pageRef = currentPageTitle ? '"' + currentPageTitle + '"' : 'this course so far';
                return 'What are the most important concepts I need to master in ' + pageRef + '? Give me a clear, structured overview with brief explanations.';
            }
            return 'What are the most important concepts I need to master about "' + topic + '"? Give me a clear, structured overview with brief explanations of each.';
        }

        if (starterKey === 'study-plan') {
            if (isGuided) {
                return 'I\'d like to plan my study session. Based on my progress, what should I ' +
                    'focus on today? Please also ask me how much time I have available, then create ' +
                    'a focused study plan.';
            }
            if (isEmpty) {
                return 'I\'d like to plan my current study session. Please ask me: (1) what I want ' +
                    'to accomplish today, and (2) how much time I have available. If we\'ve discussed ' +
                    'a study plan before, build on it.';
            }
            return 'I\'d like to plan a study session focused on "' + topic + '". Please ask me ' +
                'how much time I have available, then create a focused study plan.';
        }

        if (starterKey === 'ai-coach') {
            const pageRef = currentPageTitle ? ' and how AI could apply to "' + currentPageTitle + '"' : '';
            return 'I\'d like to explore AI' + pageRef + '. Can you help me understand how AI works, ' +
                'ask questions about AI concepts, or figure out how to use AI tools in my learning and projects?';
        }

        return '';
    };

    /**
     * Handle a conversation starter button click.
     *
     * 'quiz' opens the quiz setup panel directly.
     * All other starters show a topic picker first, then send the constructed prompt.
     *
     * @param {string} starterKey
     */
    const handleStarter = function(starterKey) {
        UI.hideStarters();

        if (starterKey === 'quiz') {
            handleQuiz();
            return;
        }

        // Practice Speaking — Option B (SSE + TTS + Web Speech API).
        if (starterKey === 'ell-practice') {
            handlePracticeSpeaking();
            return;
        }

        // ELL Pronunciation — Option C (Realtime), phoneme-level feedback.
        if (starterKey === 'ell-pronunciation') {
            handleELLPronunciation();
            return;
        }

        // "Help Me" fires directly without a topic picker.
        if (starterKey === 'help-me') {
            const prompt = 'I need some help!';
            UI.getElements().input.value = prompt;
            UI.autoResizeInput();
            UI.updateSendButton();
            handleSend();
            return;
        }

        // "Key Concepts" fires directly — no topic picker needed.
        if (starterKey === 'key-concepts') {
            const prompt = buildStarterPrompt('key-concepts', '');
            UI.getElements().input.value = prompt;
            UI.autoResizeInput();
            UI.updateSendButton();
            handleSend();
            return;
        }

        // "AI Coach" fires directly — invites the student to explore AI.
        if (starterKey === 'ai-coach') {
            const prompt = buildStarterPrompt('ai-coach', '');
            UI.getElements().input.value = prompt;
            UI.autoResizeInput();
            UI.updateSendButton();
            handleSend();
            return;
        }

        const titleKeyMap = {
            'help-lesson':  'chat:topic_picker_title_help',
            'explain':      'chat:topic_picker_title_explain',
            'study-plan':   'chat:topic_picker_title_study',
            'key-concepts': 'chat:topic_picker_title_explain',
        };
        const titleKey = titleKeyMap[starterKey] || 'chat:topic_picker_title';

        Str.get_strings([
            {key: titleKey,           component: 'local_ai_course_assistant'},
            {key: 'chat:topic_start', component: 'local_ai_course_assistant'},
        ]).then(function(strings) {
            const [titleStr, actionStr] = strings;
            UI.showTopicPicker(
                quizTopics, learningObjectives, moduleTitles,
                currentPageTitle,
                titleStr, actionStr,
                function onSelect(topic) {
                    UI.hideTopicPicker();
                    const prompt = buildStarterPrompt(starterKey, topic);
                    if (!prompt) {
                        return;
                    }
                    UI.getElements().input.value = prompt;
                    UI.autoResizeInput();
                    UI.updateSendButton();
                    handleSend();
                },
                function onCancel() {
                    UI.hideTopicPicker();
                    UI.showStarters();
                }
            );
            return;
        }).catch(function() { /**/ });
    };

    /**
     * Handle reset/home button — cancel any active panels and restore the conversation
     * starters. Message history remains visible so students can scroll back.
     */
    const handleReset = function() {
        if (quizModeActive) {
            quizModeActive = false;
            setQuizBtnActive(null, false);
            UI.hideQuizSetup();
        }
        UI.hideTopicPicker();

        if (streamController) {
            streamController.abort();
            streamController = null;
        }

        UI.showStarters();
    };

    /**
     * Handle the settings panel gear button — show language, avatar, and voice settings.
     */
    const handleSettingsPanel = function() {
        const root = UI.getElements().root;
        if (!root) {
            return;
        }
        let avatars = [];
        try {
            const raw = root.dataset.availableavatars;
            if (raw) { avatars = JSON.parse(raw); }
        } catch (e) { avatars = []; }

        UI.showSettingsPanel(
            {
                langs: Speech.SUPPORTED_LANGS,
                currentLang: Speech.getLang(),
                avatars: avatars,
                currentAvatarUrl: root.dataset.avatarurl || '',
                realtimeEnabled: root.dataset.realtimeenabled === '1' || root.dataset.realtimeenabled === 'true',
                hasTts: !!(root.dataset.ttsurl),
                currentVoice: localStorage.getItem('aica_tts_voice') || 'shimmer',
            },
            {
                onLangSelect: function(code, name) {
                    if (code) {
                        Speech.setLang(code);
                    } else {
                        Speech.clearLang();
                    }
                    UI.setLangLabel(name);
                    updateStarterTexts(code);
                },
                onAvatarSelect: function(avatarId, avatarUrl) {
                    Repo.saveAvatarPreference(avatarId).then(function() {
                        root.dataset.avatarurl = avatarUrl;
                        UI.updateAvatarImages(avatarUrl);
                        return;
                    }).catch(function() { /**/ });
                },
                onVoiceSelect: function(voice) {
                    localStorage.setItem('aica_tts_voice', voice);
                },
            }
        );
    };

    /**
     * Handle suggestion chip click — fill input and send as new message.
     *
     * @param {string} text The suggestion text to send
     */
    const handleSuggestionClick = function(text) {
        UI.clearSuggestions();
        UI.getElements().input.value = text;
        UI.autoResizeInput();
        UI.updateSendButton();
        handleSend();
    };

    /**
     * Start a Practice Speaking session (Option B: SSE + TTS + Web Speech API).
     * Cheaper and more reliable than Realtime; suitable for conversational practice.
     */
    const handlePracticeSpeaking = function() {
        // Clean up any existing session before starting.
        if (Realtime.isConnected()) { Realtime.disconnect(); }
        // Voice.connect() calls disconnect() internally if already connected.

        const root = document.getElementById('local-ai-course-assistant');
        const avatarUrl = root ? root.dataset.avatarurl : '';
        const voice = localStorage.getItem('aica_tts_voice') || 'shimmer';

        const endSession = function() {
            Voice.disconnect();
            UI.hideVoiceOverlay();
        };

        UI.showVoiceOverlay(avatarUrl, endSession);
        UI.setVoiceState('connecting');

        Voice.connect(
            '',
            voice,
            {
                onTranscript: function(role, text) {
                    UI.appendVoiceTranscript(role, text);
                },
                onStateChange: function(state) {
                    UI.setVoiceState(state);
                    if (state === 'disconnected') {
                        UI.hideVoiceOverlay();
                    }
                },
                onError: function(msg) {
                    Voice.disconnect();
                    UI.setVoiceState('disconnected');
                    UI.hideVoiceOverlay();
                    addAssistantMsg(msg || 'Voice mode failed.');
                },
            },
            {
                courseId: courseId,
                sessKey:  sessKey,
                sseUrl:   sseUrl,
                lang:     Speech.getLang(),
                greeting: "What would you like to talk about today? You can begin speaking.",
            }
        );
    };

    /**
     * Start an ELL Pronunciation session (Option C: OpenAI Realtime WebSocket).
     * Uses phoneme-level audio analysis — requires realtime_enabled and an OpenAI key.
     */
    const handleELLPronunciation = function() {
        // Clean up any existing session (Realtime or Practice Speaking) before starting.
        if (Realtime.isConnected()) { Realtime.disconnect(); }
        if (Voice.isConnected())    { Voice.disconnect(); }

        const root = document.getElementById('local-ai-course-assistant');
        const avatarUrl = root ? root.dataset.avatarurl : '';

        // Create AudioContext synchronously — iOS/WKWebView require it inside the user gesture.
        const AudioContextClass = window.AudioContext || window.webkitAudioContext;
        let audioCtx = null;
        if (AudioContextClass) {
            try {
                audioCtx = new AudioContextClass({sampleRate: 24000});
                if (audioCtx.state === 'suspended') {
                    audioCtx.resume().catch(function() {/**/});
                }
            } catch (e) {
                audioCtx = null;
            }
        }

        // Pre-request microphone access within the user-gesture call stack.
        // iOS/WKWebView requires getUserMedia to be initiated synchronously during a user
        // gesture; the WebSocket 'session.created' callback fires too late.
        const micPromise = (navigator.mediaDevices && navigator.mediaDevices.getUserMedia)
            ? navigator.mediaDevices.getUserMedia({audio: true}).catch(function() { return null; })
            : Promise.resolve(null);

        const endSession = function() {
            Realtime.disconnect();
            UI.hideVoiceOverlay();
        };

        const overlay = UI.showVoiceOverlay(avatarUrl, endSession);
        UI.setVoiceState('connecting');

        // Fetch token and mic stream in parallel — both initiated within the user gesture.
        Promise.all([Repo.getRealtimeToken(courseId), micPromise]).then(function(results) {
            const result    = results[0];
            const micStream = results[1]; // null if getUserMedia failed or unsupported

            const token = result.token;
            const voice = localStorage.getItem('aica_tts_voice') || result.voice;

            Realtime.connect(
                token,
                Realtime.ELL_INSTRUCTIONS,
                voice,
                {
                    onTranscript: function(role, text) {
                        UI.appendVoiceTranscript(role, text);
                    },
                    onStateChange: function(state) {
                        UI.setVoiceState(state);
                        if (state === 'disconnected') {
                            UI.hideVoiceOverlay();
                        }
                    },
                    onError: function(msg) {
                        UI.setVoiceState('disconnected');
                        UI.hideVoiceOverlay();
                        addAssistantMsg(msg || 'Voice connection failed.');
                    },
                },
                overlay,
                audioCtx,
                micStream
            );
            return;
        }).catch(function(err) {
            UI.setVoiceState('disconnected');
            UI.hideVoiceOverlay();
            const errMsg = (err && err.message) ? err.message : 'Could not get voice token.';
            Str.get_string('chat:voice_error', 'local_ai_course_assistant').then(function(s) {
                addAssistantMsg((s || 'Voice connection failed') + ': ' + errMsg);
                return;
            }).catch(function() {
                addAssistantMsg(errMsg);
            });
        });
    };

    /**
     * Alias kept for any internal callers; triggers ELL Pronunciation (Option C).
     */
    const handleELLPractice = function() {
        handleELLPronunciation();
    };

    /**
     * Try to match a voice transcript to a conversation starter.
     * Checks translated labels for the active language first, then English keywords.
     *
     * @param  {string} transcript Raw STT transcript
     * @returns {string|null} Starter key (e.g. 'quiz') or null if no match
     */
    const matchStarterByVoice = function(transcript) {
        const lower = transcript.toLowerCase().trim();
        const enKeywords = {
            'quiz':         ['quiz', 'test', 'quiz me', 'test me'],
            'explain':      ['explain', 'explain this', 'explain it'],
            'key-concepts': ['key concepts', 'key concept', 'concepts', 'main concepts'],
            'study-plan':   ['study plan', 'study', 'plan', 'schedule'],
            'ell-practice':      ['practice speaking', 'speaking practice', 'practice'],
            'ell-pronunciation': ['pronunciation', 'pronunciation coach', 'ell pronunciation'],
            'ai-coach':          ['ai coach', 'learn about ai', 'artificial intelligence', 'ai tools'],
        };
        // Check translated labels for the current language first.
        const labels = Speech.getStarterLabels(Speech.getLang ? Speech.getLang() : null);
        const labelMap = {
            quiz:        'quiz',
            helpLesson:  'explain',
            keyConcepts: 'key-concepts',
            studyPlan:   'study-plan',
            ellPractice: 'ell-practice',
        };
        if (labels) {
            for (const key in labelMap) {
                if (labels[key] && lower.includes(labels[key].toLowerCase())) {
                    return labelMap[key];
                }
            }
        }
        // English keyword fallback.
        for (const starter in enKeywords) {
            const words = enKeywords[starter];
            for (let i = 0; i < words.length; i++) {
                if (lower.includes(words[i])) {
                    return starter;
                }
            }
        }
        return null;
    };

    /**
     * Handle mic button click — start or stop speech recognition.
     */
    const handleMic = function() {
        if (Speech.isRecording()) {
            Speech.stopListening();
            UI.setMicRecording(false);
            return;
        }

        const started = Speech.startListening(
            function(transcript, isFinal) {
                // Show interim and final results in the input.
                UI.getElements().input.value = transcript;
                UI.updateSendButton();
                UI.autoResizeInput();
                if (isFinal) {
                    UI.setMicRecording(false);
                    // If starters panel is visible, try to match spoken text to a starter.
                    if (UI.isStartersVisible()) {
                        const matched = matchStarterByVoice(transcript);
                        if (matched) {
                            UI.getElements().input.value = '';
                            UI.autoResizeInput();
                            UI.updateSendButton();
                            handleStarter({currentTarget: {dataset: {starter: matched}}});
                            return;
                        }
                    }
                }
            },
            function() {
                UI.setMicRecording(false);
            },
            function(errorCode) {
                UI.setMicRecording(false);
                if (errorCode !== 'no-speech' && errorCode !== 'aborted') {
                    Str.get_string('chat:mic_error', 'local_ai_course_assistant').then(function(msg) {
                        UI.showNotification(msg, 'error');
                        return;
                    }).catch(function() {
                        UI.showNotification('Microphone error: ' + errorCode, 'error');
                    });
                }
            }
        );

        if (started) {
            UI.setMicRecording(true);
        } else {
            Str.get_string('chat:mic_unsupported', 'local_ai_course_assistant').then(function(msg) {
                UI.showNotification(msg, 'error');
                return;
            }).catch(function() { /**/ });
        }
    };

    /**
     * Return the OpenAI TTS URL if available, or empty string.
     *
     * @returns {string}
     */
    const getTtsUrl = function() {
        const root = document.getElementById('local-ai-course-assistant');
        return root ? (root.dataset.ttsurl || '') : '';
    };

    /**
     * Stop all TTS (both OpenAI audio and browser speech synthesis).
     */
    const stopAllTts = function() {
        if (currentAudio) {
            currentAudio.pause();
            currentAudio = null;
        }
        Speech.stopSpeaking();
        UI.stopWordHighlight();
    };

    /**
     * Speak text using OpenAI TTS proxy (tts.php), falling back to browser TTS on error.
     *
     * @param {string}        text       Plain text to read aloud
     * @param {string}        ttsUrl     URL of tts.php
     * @param {Function}      callback   Called when speech ends or fails
     * @param {Array|null}    wordSpans  From UI.startWordHighlight — for word highlighting
     * @param {string|null}   cleanText  Clean plain text matching the wordSpans
     */
    const speakWithOpenAI = function(text, ttsUrl, callback, wordSpans, cleanText) {
        const formData = new URLSearchParams();
        formData.append('text', text.length > 2000 ? text.substring(0, 2000) : text);
        formData.append('sesskey', sessKey);
        formData.append('courseid', String(courseId));
        const storedVoice = localStorage.getItem('aica_tts_voice');
        if (storedVoice) { formData.append('voice', storedVoice); }

        fetch(ttsUrl, {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: formData.toString(),
        })
        .then(function(res) { return res.json(); })
        .then(function(data) {
            if (!data.audio) {
                Speech.speak(text, callback);
                return;
            }
            try {
                const byteChars = atob(data.audio);
                const byteArr = new Uint8Array(byteChars.length);
                for (var i = 0; i < byteChars.length; i++) {
                    byteArr[i] = byteChars.charCodeAt(i);
                }
                const blob = new Blob([byteArr], {type: data.type || 'audio/mpeg'});
                const objUrl = URL.createObjectURL(blob);
                const audio = new Audio(objUrl);
                currentAudio = audio;
                // Start Web Audio mouth sync (drives SVG avatar lip movement).
                UI.startMouthSync(audio);
                // Proportional word highlighting: estimate char position from playback progress.
                if (wordSpans && cleanText) {
                    audio.addEventListener('timeupdate', function() {
                        if (!audio.duration) { return; }
                        const charIndex = Math.floor((audio.currentTime / audio.duration) * cleanText.length);
                        UI.highlightWordAt(wordSpans, charIndex);
                    });
                }
                audio.addEventListener('ended', function() {
                    URL.revokeObjectURL(objUrl);
                    currentAudio = null;
                    UI.stopMouthSync();
                    if (callback) { callback(); }
                });
                audio.addEventListener('error', function() {
                    URL.revokeObjectURL(objUrl);
                    currentAudio = null;
                    UI.stopMouthSync();
                    Speech.speak(text, callback);
                });
                audio.play().catch(function() {
                    URL.revokeObjectURL(objUrl);
                    currentAudio = null;
                    UI.stopMouthSync();
                    Speech.speak(text, callback);
                });
            } catch (e) {
                Speech.speak(text, callback);
            }
        })
        .catch(function() {
            Speech.speak(text, callback);
        });
    };

    /**
     * Handle TTS speak button click on an assistant message.
     * Uses OpenAI TTS when available, falls back to browser Web Speech API.
     *
     * @param {string}      text    Plain text content of the message
     * @param {HTMLElement} msgEl   The message element
     * @param {HTMLElement} btnEl   The speak button element (for state)
     */
    const handleSpeak = function(text, msgEl, btnEl) {
        if (btnEl.classList.contains('local-ai-course-assistant__btn-speak--active')) {
            stopAllTts();
            UI.setSpeakingState(msgEl, false);
            return;
        }

        // Stop any other message currently playing.
        stopAllTts();

        UI.setSpeakingState(msgEl, true);
        const ttsUrl = getTtsUrl();
        if (ttsUrl) {
            const cleanText = Speech.cleanTextForSpeech(text);
            const wordSpans = UI.startWordHighlight(msgEl, cleanText);
            speakWithOpenAI(text, ttsUrl, function() {
                UI.setSpeakingState(msgEl, false);
                UI.stopWordHighlight();
            }, wordSpans, cleanText);
        } else {
            // Browser TTS: enable word-by-word highlighting via onboundary events.
            const cleanText = Speech.cleanTextForSpeech(text);
            const wordSpans = UI.startWordHighlight(msgEl, cleanText);
            Speech.speak(text, function() {
                UI.setSpeakingState(msgEl, false);
                UI.stopWordHighlight();
            }, wordSpans ? function(charIndex) {
                UI.highlightWordAt(wordSpans, charIndex);
            } : null);
        }
    };

    /**
     * Add an assistant message with the speak button always present (when TTS is available).
     * Use this instead of UI.addMessage('assistant', ...) everywhere so every
     * assistant bubble consistently has the speaker icon.
     *
     * @param {string}      text  Message text
     * @param {number|null} ts    Optional Unix timestamp (ms)
     * @returns {HTMLElement}
     */
    const addAssistantMsg = function(text, ts) {
        const fn = (getTtsUrl() || Speech.isTTSSupported()) ? handleSpeak : null;
        return UI.addMessage('assistant', text, fn, ts || null);
    };

    /**
     * Handle expand/collapse button click.
     * On mobile (≤600px): toggles half-screen minimized state.
     * On desktop: toggles the wider expanded state.
     */
    const handleExpand = function() {
        const isMobile = window.innerWidth <= 600;
        const els = UI.getElements();
        if (isMobile) {
            const minimized = UI.toggleMinimize();
            if (els.expandBtn) {
                Str.get_string(minimized ? 'chat:expand' : 'chat:collapse', 'local_ai_course_assistant')
                .then(function(label) {
                    els.expandBtn.title = label;
                    els.expandBtn.setAttribute('aria-label', label);
                    return;
                }).catch(function() { /**/ });
            }
        } else {
            const expanded = UI.toggleExpand();
            if (els.expandBtn) {
                Str.get_string(expanded ? 'chat:collapse' : 'chat:expand', 'local_ai_course_assistant')
                .then(function(label) {
                    els.expandBtn.title = label;
                    els.expandBtn.setAttribute('aria-label', label);
                    return;
                }).catch(function() { /**/ });
            }
        }
    };

    /**
     * Set the quiz button's active/inactive visual state.
     *
     * @param {HTMLElement|null} quizBtn
     * @param {boolean}         active
     */
    const setQuizBtnActive = function(quizBtn, active) {
        if (!quizBtn) {
            return;
        }
        quizBtn.classList.toggle('local-ai-course-assistant__btn-quiz--active', active);
        quizBtn.setAttribute('aria-pressed', active ? 'true' : 'false');
        // Expand the drawer to fit quiz content; shrink back when done.
        const drawer = document.getElementById('local-ai-course-assistant-drawer');
        if (drawer) {
            drawer.classList.toggle('local-ai-course-assistant__drawer--quiz', active);
        }
    };

    /**
     * Handle quiz button click — toggles quiz mode on/off.
     */
    const handleQuiz = function() {
        const root = document.getElementById('local-ai-course-assistant');
        const quizBtn = root ? root.querySelector('.local-ai-course-assistant__btn-quiz') : null;

        // If quiz mode is already active, cancel it.
        if (quizModeActive) {
            quizModeActive = false;
            setQuizBtnActive(quizBtn, false);
            UI.hideQuizSetup();
            // Remove any running quiz card.
            if (root) {
                const activeQuiz = root.querySelector('.aica-quiz');
                if (activeQuiz) {
                    activeQuiz.remove();
                }
            }
            return;
        }

        // Activate quiz mode.
        quizModeActive = true;
        setQuizBtnActive(quizBtn, true);

        UI.showQuizSetup(
            quizTopics,
            learningObjectives,
            moduleTitles,
            currentPageTitle,
            function onStart(count, topic) {
                UI.hideQuizSetup();
                UI.showTyping(true);

                // Pass cmid when "Current page" is selected (topic = '') on a module page.
                const cmidForQuiz = (!topic && currentPageId > 0) ? currentPageId : 0;
                Repo.generateQuiz(courseId, count, topic, cmidForQuiz).then(function(result) {
                    UI.showTyping(false);
                    if (!result.success) {
                        quizModeActive = false;
                        setQuizBtnActive(quizBtn, false);
                        Str.get_string('chat:quiz_error', 'local_ai_course_assistant').then(function(msg) {
                            addAssistantMsg(msg);
                            return;
                        }).catch(function() {
                            addAssistantMsg('Could not generate a quiz. Please try again.');
                        });
                        return;
                    }
                    let pendingQuizChips = null;
                    UI.showQuiz(result.questions, result.topic, function onFinish(score, total, topic) {
                        quizModeActive = false;
                        setQuizBtnActive(quizBtn, false);
                        // Track quiz result in localStorage.
                        try {
                            const histKey = 'aica_quiz_history_' + courseId;
                            const hist = JSON.parse(localStorage.getItem(histKey) || '[]');
                            hist.push({topic: topic, score: score, total: total, date: Date.now()});
                            if (hist.length > 50) { hist.splice(0, hist.length - 50); }
                            localStorage.setItem(histKey, JSON.stringify(hist));
                        } catch (e) { /**/ }
                        // Prepare adaptive follow-up chips for when user exits the summary.
                        const pct = total > 0 ? score / total : 0;
                        if (pct < 0.5) {
                            pendingQuizChips = ['Review this topic with me', 'Explain what I got wrong', 'Give me easier questions'];
                        } else if (pct < 0.8) {
                            pendingQuizChips = ['Go deeper on this topic', 'What should I focus on?', 'Quiz me again'];
                        } else {
                            pendingQuizChips = ['Give me harder questions', 'Move to the next topic', 'What else should I learn?'];
                        }
                    }, function onExit() {
                        quizModeActive = false;
                        setQuizBtnActive(quizBtn, false);
                        UI.showStarters();
                        if (pendingQuizChips) {
                            const chips = pendingQuizChips;
                            pendingQuizChips = null;
                            setTimeout(function() { UI.showSuggestions(chips, handleSuggestionClick); }, 150);
                        }
                    });
                }).catch(function() {
                    UI.showTyping(false);
                    quizModeActive = false;
                    setQuizBtnActive(quizBtn, false);
                    Str.get_string('chat:quiz_error', 'local_ai_course_assistant').then(function(msg) {
                        addAssistantMsg(msg);
                        return;
                    }).catch(function() {
                        addAssistantMsg('Could not generate a quiz. Please try again.');
                    });
                });
            },
            function onCancel() {
                quizModeActive = false;
                setQuizBtnActive(quizBtn, false);
                UI.hideQuizSetup();
                UI.showStarters();
            }
        );
    };

    /**
     * Handle toggle button click.
     * Suppressed if the toggle was just used to drag-reposition the widget.
     */
    const handleToggle = function() {
        if (UI.wasToggleDragged()) {
            return;
        }
        const opened = UI.toggleDrawer();
        if (opened && quizLocked && !historyLoaded) {
            // Show quiz-locked notice instead of normal history/starters flow.
            // Explicitly clear any messages to prevent previous chat from being visible (cheating risk).
            historyLoaded = true;
            UI.clearMessages();
            Str.get_string('chat:quiz_locked', 'local_ai_course_assistant').then(function(msg) {
                addAssistantMsg(msg);
                return;
            }).catch(function() {
                addAssistantMsg('SOLA is paused during quizzes to support academic integrity. Good luck!');
            });
            UI.setInputEnabled(false);
            return;
        }
        if (opened && !historyLoaded) {
            loadHistory();
            checkAndShowIntro();
            updateStreak();
        }
    };

    /**
     * Check if user needs to see intro, show if needed.
     */
    const checkAndShowIntro = function() {
        // Check if intro already dismissed.
        try {
            const introDismissed = localStorage.getItem('ai_course_assistant_intro_dismissed');
            if (introDismissed) {
                return;
            }

            // Show intro modal.
            UI.showIntroModal();

            // Mark as dismissed locally.
            localStorage.setItem('ai_course_assistant_intro_dismissed', '1');

            // Sync to server.
            Repo.dismissIntro().catch(function() {
                // Silently fail.
            });
        } catch (e) {
            // localStorage might be disabled.
        }
    };

    /**
     * Update the daily learning streak and show a notification if milestone reached.
     * Streak is per-course, stored in localStorage as {streak, lastDate} (date = YYYY-MM-DD).
     */
    const updateStreak = function() {
        try {
            const key = 'aica_streak_' + courseId;
            const today = new Date().toISOString().slice(0, 10); // YYYY-MM-DD
            const stored = JSON.parse(localStorage.getItem(key) || '{}');
            let streak = stored.streak || 0;
            const lastDate = stored.lastDate || '';

            if (lastDate === today) {
                // Already opened today — no change, no notification.
                return;
            }

            const yesterday = new Date(Date.now() - 86400000).toISOString().slice(0, 10);
            if (lastDate === yesterday) {
                streak += 1; // Consecutive day.
            } else {
                streak = 1; // Gap or first time — start fresh.
            }

            localStorage.setItem(key, JSON.stringify({streak: streak, lastDate: today}));

            // Show milestone notification (2+ day streaks).
            if (streak >= 2) {
                const label = streak + '-day learning streak!';
                UI.showNotification('\uD83D\uDD25 ' + label);
            }
        } catch (e) {
            // localStorage disabled — skip silently.
        }
    };

    /**
     * Handle input keydown.
     *
     * @param {KeyboardEvent} e
     */
    const handleInputKeydown = function(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            handleSend();
        }
    };

    /**
     * Load conversation history.
     */
    const loadHistory = function() {
        historyLoaded = true;
        Repo.getHistory(courseId).then(function(result) {
            if (result.messages && result.messages.length > 0) {
                const NEXT_RE = /\n*\[SOLA_NEXT\]([\s\S]*?)\[\/SOLA_NEXT\]/;
                let lastSuggestions = [];
                let prevDateKey = null;
                const today = new Date();
                const yesterday = new Date(today);
                yesterday.setDate(today.getDate() - 1);

                result.messages.forEach(function(msg) {
                    // Insert date separator when conversation day changes.
                    if (msg.timecreated) {
                        const d = new Date(msg.timecreated * 1000);
                        const dateKey = d.toDateString();
                        if (dateKey !== prevDateKey) {
                            prevDateKey = dateKey;
                            let label;
                            if (dateKey === today.toDateString()) {
                                label = 'Today';
                            } else if (dateKey === yesterday.toDateString()) {
                                label = 'Yesterday';
                            } else {
                                label = d.toLocaleDateString(undefined, {
                                    month: 'long', day: 'numeric', year: 'numeric'
                                });
                            }
                            UI.addDateSeparator(label);
                        }
                    }

                    let text = msg.message;
                    if (msg.role === 'assistant') {
                        const match = text.match(NEXT_RE);
                        if (match) {
                            lastSuggestions = match[1].split('||')
                                .map(function(s) { return s.trim(); })
                                .filter(Boolean).slice(0, 4);
                            text = text.replace(NEXT_RE, '').trimEnd();
                        } else {
                            lastSuggestions = [];
                        }
                    }
                    if (msg.role === 'assistant') {
                        addAssistantMsg(text, msg.timecreated ? msg.timecreated * 1000 : null);
                    } else {
                        UI.addMessage('user', text, null, msg.timecreated ? msg.timecreated * 1000 : null);
                    }
                });
                UI.scrollToBottom(true);

                // If returning after a break (last message > 2 hours ago), show re-engagement chips.
                const lastMsg = result.messages[result.messages.length - 1];
                const lastTs = lastMsg && lastMsg.timecreated ? lastMsg.timecreated * 1000 : 0;
                const twoHours = 2 * 60 * 60 * 1000;
                if (lastTs && (Date.now() - lastTs) > twoHours) {
                    UI.showSuggestions(
                        ['Continue our conversation', 'Quiz me on what we covered', 'What should I focus on next?'],
                        handleSuggestionClick
                    );
                } else if (lastSuggestions.length) {
                    // Re-show chips from the last assistant message that had them.
                    UI.showSuggestions(lastSuggestions, handleSuggestionClick);
                }
            } else {
                // Show greeting.
                Str.get_string('chat:greeting', 'local_ai_course_assistant').then(function(greeting) {
                    addAssistantMsg(greeting.replace('{$a}', firstName || 'there'));
                    return;
                }).catch(function() {
                    addAssistantMsg('Hi, ' + (firstName || 'there') + '! I\'m SOLA, your Saylor Online Learning Assistant.');
                });
            }
        }).catch(function() {
            Str.get_string('chat:greeting', 'local_ai_course_assistant').then(function(greeting) {
                addAssistantMsg(greeting.replace('{$a}', firstName || 'there'));
                return;
            }).catch(function() {
                addAssistantMsg('Hi, ' + (firstName || 'there') + '! I\'m SOLA, your Saylor Online Learning Assistant.');
            });
        });
    };

    /**
     * Detect whether the user's message is requesting a practice quiz.
     * Used to intercept natural-language quiz requests (e.g. from STT)
     * and route them to the interactive quiz UI instead of plain chat.
     *
     * @param {string} text
     * @returns {boolean}
     */
    const detectQuizIntent = function(text) {
        return /quiz\s+me|test\s+me|give\s+(?:me\s+)?a\s+quiz|practice\s+quiz|take\s+a\s+quiz|let'?s\s+(?:do\s+a\s+)?quiz|quiz\s+(?:me\s+)?on|quiz\s+(?:me\s+)?about|test\s+my\s+knowledge/i.test(text);
    };

    /**
     * Handle sending a message.
     */
    const handleSend = function() {
        if (quizLocked) {
            return;
        }
        const text = UI.getInputValue();
        if (!text || sending) {
            return;
        }

        // Intercept quiz intent (e.g. from STT: "quiz me on the introduction")
        // and route to the interactive quiz UI instead of plain chat.
        if (detectQuizIntent(text)) {
            UI.clearInput();
            UI.autoResizeInput();
            UI.updateSendButton();
            UI.hideStarters();
            handleQuiz();
            return;
        }

        sending = true;
        UI.hideStarters();
        UI.setInputEnabled(false);
        UI.clearInput();

        // Add user message.
        UI.addMessage('user', text, null);
        UI.showTyping(true);

        // Accumulated response text.
        let fullText = '';

        // Start SSE stream, including language preference and page context if available.
        const postData = {
            sesskey: sessKey,
            courseid: courseId,
            message: text,
        };
        const currentLang = Speech.getLang();
        if (currentLang) {
            postData.lang = currentLang;
        }
        if (currentPageId) {
            postData.pageid = currentPageId;
        }
        if (currentPageTitle) {
            postData.pagetitle = currentPageTitle;
        }

        streamController = SSE.startStream(sseUrl, postData, {
            onToken: function(token) {
                if (!fullText) {
                    // First token — create the streaming message element.
                    UI.startStreaming();
                }
                fullText += token;
                UI.updateStreamContent(fullText);
            },
            onDone: function() {
                UI.showTyping(false);
                if (fullText) {
                    const NEXT_RE = /\n*\[SOLA_NEXT\]([\s\S]*?)\[\/SOLA_NEXT\]/;
                    const match = fullText.match(NEXT_RE);
                    let suggestions = [];
                    let displayText = fullText;
                    if (match) {
                        suggestions = match[1].split('||').map(function(s) { return s.trim(); })
                            .filter(Boolean).slice(0, 4);
                        displayText = fullText.replace(NEXT_RE, '').trimEnd();
                    }
                    UI.finishStreaming(displayText, (getTtsUrl() || Speech.isTTSSupported()) ? handleSpeak : null);
                    if (suggestions.length) {
                        UI.showSuggestions(suggestions, handleSuggestionClick);
                    } else if (fullText.trim().length > 0) {
                        // Smart fallback chips: comprehension-focused for long responses.
                        const wordCount = displayText.trim().split(/\s+/).length;
                        const chips = wordCount > 120
                            ? ['Quiz me on this', 'Summarize this', 'Give me an example']
                            : ['Tell me more', 'Give me an example', 'Quiz me on this'];
                        UI.showSuggestions(chips, handleSuggestionClick);
                    }
                }
                sending = false;
                streamController = null;
                UI.setInputEnabled(true);
            },
            onError: function(errorMsg) {
                UI.showTyping(false);
                if (fullText) {
                    UI.finishStreaming(fullText);
                }
                window.console && console.error('[SOLA]', errorMsg); // eslint-disable-line no-console
                // Show error as assistant message.
                // Detect specific HTTP error patterns for categorised responses.
                if (errorMsg.includes('401') || errorMsg.includes('auth')) {
                    Str.get_string('chat:error_auth', 'local_ai_course_assistant').then(function(msg) {
                        addAssistantMsg(msg);
                        return;
                    }).catch(function() {
                        addAssistantMsg('Authentication error. Please contact your administrator.');
                    });
                } else if (errorMsg.includes('429') || errorMsg.includes('rate')) {
                    Str.get_string('chat:error_ratelimit', 'local_ai_course_assistant').then(function(msg) {
                        addAssistantMsg(msg);
                        return;
                    }).catch(function() {
                        addAssistantMsg('Too many requests. Please wait a moment.');
                    });
                } else if (errorMsg.includes('503') || errorMsg.includes('502') || errorMsg.includes('500')) {
                    Str.get_string('chat:error_unavailable', 'local_ai_course_assistant').then(function(msg) {
                        addAssistantMsg(msg);
                        return;
                    }).catch(function() {
                        addAssistantMsg('Service temporarily unavailable.');
                    });
                } else {
                    // If the server sent a plain user-friendly message, show it directly.
                    // Otherwise fall back to the generic error string.
                    const isPlain = errorMsg && typeof errorMsg === 'string'
                        && !errorMsg.trim().startsWith('<')
                        && errorMsg.length < 400;
                    if (isPlain) {
                        addAssistantMsg(errorMsg);
                    } else {
                        Str.get_string('chat:error', 'local_ai_course_assistant').then(function(msg) {
                            addAssistantMsg(msg);
                            return;
                        }).catch(function() {
                            addAssistantMsg('Sorry, something went wrong. Please try again.');
                        });
                    }
                }
                sending = false;
                streamController = null;
                UI.setInputEnabled(true);
            },
        });
    };

    /**
     * Handle clear history.
     */
    const handleClear = function() {
        Str.get_string('chat:clear_confirm', 'local_ai_course_assistant').then(function(confirmMsg) {
            if (!window.confirm(confirmMsg)) { // eslint-disable-line no-alert
                return;
            }

            Repo.clearHistory(courseId).then(function() {
                UI.clearMessages();
                return Str.get_string('chat:greeting', 'local_ai_course_assistant');
            }).then(function(greeting) {
                addAssistantMsg(greeting.replace('{$a}', firstName || 'there'));
            }).catch(function() {
                // Silently fail.
            });
        }).catch(function() {
            // Fallback if string fetch fails.
            if (!window.confirm('Clear chat history?')) { // eslint-disable-line no-alert
                return;
            }
            Repo.clearHistory(courseId).catch(function() {
                // Silently fail.
            });
        });
    };

    /**
     * Handle copy conversation to clipboard.
     */
    const handleCopy = function() {
        const messages = UI.getMessages();
        if (messages.length === 0) {
            return;
        }

        // Format as markdown.
        const markdown = messages.map(function(msg) {
            const role = msg.role === 'user' ? 'You' : 'SOLA';
            const timestamp = new Date(msg.timestamp || Date.now()).toLocaleString();
            return '**' + role + '** (' + timestamp + ')\n' + msg.content + '\n';
        }).join('\n---\n\n');

        // Copy to clipboard.
        navigator.clipboard.writeText(markdown).then(function() {
            Str.get_string('chat:copied', 'local_ai_course_assistant').then(function(successMsg) {
                UI.showNotification(successMsg, 'success');
            }).catch(function() {
                UI.showNotification('Copied!', 'success');
            });
        }).catch(function() {
            Str.get_string('chat:copy_failed', 'local_ai_course_assistant').then(function(errorMsg) {
                UI.showNotification(errorMsg, 'error');
            }).catch(function() {
                UI.showNotification('Copy failed', 'error');
            });
        });
    };

    return {
        init: init
    };
});
