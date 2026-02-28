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
    'core/str',
], function(UI, SSE, Repo, Speech, Str) {

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
            // Already has a saved preference — update the label.
            const info = Speech.getLangInfo(stored);
            if (info) {
                UI.setLangLabel(info.name);
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
            }
        }
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
        els.clearBtn.addEventListener('click', handleClear);

        // Copy button.
        els.copyBtn.addEventListener('click', handleCopy);

        // Expand/collapse button.
        if (els.expandBtn) {
            els.expandBtn.addEventListener('click', handleExpand);
        }

        // Mic button (STT).
        if (els.micBtn) {
            els.micBtn.addEventListener('click', handleMic);
        }

        // Language selector button.
        if (els.langBtn) {
            els.langBtn.addEventListener('click', handleLangSelect);
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

        // AI Prompt Coach fires directly without a topic picker.
        if (starterKey === 'prompt-coach') {
            const prompt = 'I want to learn how to use AI tools more effectively and responsibly ' +
                'in my studies. Can you coach me? I\'d love help crafting better prompts, ' +
                'understanding what AI is good and not so good at, and using it ethically as a ' +
                'learning partner for this course.';
            UI.getElements().input.value = prompt;
            UI.autoResizeInput();
            UI.updateSendButton();
            handleSend();
            return;
        }

        const titleKeyMap = {
            'help-lesson': 'chat:topic_picker_title_help',
            'explain':     'chat:topic_picker_title_explain',
            'study-plan':  'chat:topic_picker_title_study',
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
     * Handle TTS speak button click on an assistant message.
     *
     * @param {string}      text    Plain text content of the message
     * @param {HTMLElement} msgEl   The message element
     * @param {HTMLElement} btnEl   The speak button element (for state)
     */
    const handleSpeak = function(text, msgEl, btnEl) {
        if (Speech.isSpeaking() && btnEl.classList.contains('local-ai-course-assistant__btn-speak--active')) {
            Speech.stopSpeaking();
            UI.setSpeakingState(msgEl, false);
            return;
        }

        UI.setSpeakingState(msgEl, true);
        Speech.speak(text, function() {
            UI.setSpeakingState(msgEl, false);
        });
    };

    /**
     * Handle language selector button — show a simple language picker.
     */
    const handleLangSelect = function() {
        const langs = Speech.SUPPORTED_LANGS;
        const current = Speech.getLang();

        // Build a simple picker overlay inside the drawer.
        const existing = document.querySelector('.aica-lang-picker');
        if (existing) {
            existing.remove();
            return;
        }

        const picker = document.createElement('div');
        picker.className = 'aica-lang-picker';
        picker.setAttribute('role', 'listbox');
        picker.setAttribute('aria-label', 'Select language');

        // English (default) option.
        const enOpt = document.createElement('button');
        enOpt.className = 'aica-lang-picker__option' + (!current ? ' aica-lang-picker__option--active' : '');
        enOpt.textContent = 'English (default)';
        enOpt.addEventListener('click', function() {
            Speech.clearLang();
            UI.setLangLabel('English');
            picker.remove();
        });
        picker.appendChild(enOpt);

        Object.keys(langs).sort(function(a, b) {
            return langs[a].name.localeCompare(langs[b].name);
        }).forEach(function(code) {
            const opt = document.createElement('button');
            opt.className = 'aica-lang-picker__option' + (current === code ? ' aica-lang-picker__option--active' : '');
            opt.textContent = langs[code].name;
            opt.addEventListener('click', function() {
                Speech.setLang(code);
                UI.setLangLabel(langs[code].name);
                picker.remove();
            });
            picker.appendChild(opt);
        });

        // Close on outside click.
        setTimeout(function() {
            document.addEventListener('click', function closePicker(e) {
                if (!picker.contains(e.target) && e.target !== UI.getElements().langBtn) {
                    picker.remove();
                    document.removeEventListener('click', closePicker);
                }
            });
        }, 50);

        const root = document.getElementById('local-ai-course-assistant');
        if (root) {
            root.appendChild(picker);
        }
    };

    /**
     * Handle expand/collapse button click.
     */
    const handleExpand = function() {
        const expanded = UI.toggleExpand();
        const els = UI.getElements();
        if (els.expandBtn) {
            Str.get_string(expanded ? 'chat:collapse' : 'chat:expand', 'local_ai_course_assistant')
            .then(function(label) {
                els.expandBtn.title = label;
                els.expandBtn.setAttribute('aria-label', label);
                return;
            }).catch(function() { /**/ });
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
                            UI.addMessage('assistant', msg);
                            return;
                        }).catch(function() {
                            UI.addMessage('assistant', 'Could not generate a quiz. Please try again.');
                        });
                        return;
                    }
                    UI.showQuiz(result.questions, result.topic, function onFinish() {
                        quizModeActive = false;
                        setQuizBtnActive(quizBtn, false);
                    }, function onExit() {
                        quizModeActive = false;
                        setQuizBtnActive(quizBtn, false);
                        UI.showStarters();
                    });
                }).catch(function() {
                    UI.showTyping(false);
                    quizModeActive = false;
                    setQuizBtnActive(quizBtn, false);
                    Str.get_string('chat:quiz_error', 'local_ai_course_assistant').then(function(msg) {
                        UI.addMessage('assistant', msg);
                        return;
                    }).catch(function() {
                        UI.addMessage('assistant', 'Could not generate a quiz. Please try again.');
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
        if (opened && !historyLoaded) {
            loadHistory();
            checkAndShowIntro();
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
                result.messages.forEach(function(msg) {
                    UI.addMessage(msg.role, msg.message);
                });
                UI.scrollToBottom(true);
            } else {
                // Show greeting.
                Str.get_string('chat:greeting', 'local_ai_course_assistant').then(function(greeting) {
                    UI.addMessage('assistant', greeting.replace('{$a}', firstName || 'there'));
                    return;
                }).catch(function() {
                    UI.addMessage('assistant', 'Hi, ' + (firstName || 'there') + '! I\'m SOLA, your Saylor Online Learning Assistant.');
                });
            }
        }).catch(function() {
            Str.get_string('chat:greeting', 'local_ai_course_assistant').then(function(greeting) {
                UI.addMessage('assistant', greeting.replace('{$a}', firstName || 'there'));
                return;
            }).catch(function() {
                UI.addMessage('assistant', 'Hi, ' + (firstName || 'there') + '! I\'m SOLA, your Saylor Online Learning Assistant.');
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

        // Start SSE stream, including language preference if set.
        const postData = {
            sesskey: sessKey,
            courseid: courseId,
            message: text,
        };
        const currentLang = Speech.getLang();
        if (currentLang) {
            postData.lang = currentLang;
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
                    UI.finishStreaming(fullText, Speech.isTTSSupported() ? handleSpeak : null);
                }
                sending = false;
                streamController = null;
                UI.setInputEnabled(true);
                UI.getElements().input.focus();
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
                        UI.addMessage('assistant', msg);
                        return;
                    }).catch(function() {
                        UI.addMessage('assistant', 'Authentication error. Please contact your administrator.');
                    });
                } else if (errorMsg.includes('429') || errorMsg.includes('rate')) {
                    Str.get_string('chat:error_ratelimit', 'local_ai_course_assistant').then(function(msg) {
                        UI.addMessage('assistant', msg);
                        return;
                    }).catch(function() {
                        UI.addMessage('assistant', 'Too many requests. Please wait a moment.');
                    });
                } else if (errorMsg.includes('503') || errorMsg.includes('502') || errorMsg.includes('500')) {
                    Str.get_string('chat:error_unavailable', 'local_ai_course_assistant').then(function(msg) {
                        UI.addMessage('assistant', msg);
                        return;
                    }).catch(function() {
                        UI.addMessage('assistant', 'Service temporarily unavailable.');
                    });
                } else {
                    // If the server sent a plain user-friendly message, show it directly.
                    // Otherwise fall back to the generic error string.
                    const isPlain = errorMsg && typeof errorMsg === 'string'
                        && !errorMsg.trim().startsWith('<')
                        && errorMsg.length < 400;
                    if (isPlain) {
                        UI.addMessage('assistant', errorMsg);
                    } else {
                        Str.get_string('chat:error', 'local_ai_course_assistant').then(function(msg) {
                            UI.addMessage('assistant', msg);
                            return;
                        }).catch(function() {
                            UI.addMessage('assistant', 'Sorry, something went wrong. Please try again.');
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
                UI.addMessage('assistant', greeting.replace('{$a}', firstName || 'there'));
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
