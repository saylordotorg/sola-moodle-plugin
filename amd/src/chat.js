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
    'local_ai_course_assistant/i18n_strings',
    'core/str',
], function(UI, SSE, Repo, Speech, Realtime, Voice, I18nStrings, Str) {

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
    /** @type {number} Timestamp when the drawer was first opened this page load (for session timing). */
    let sessionStartTime = Date.now();
    /** @type {boolean} Whether a message is currently being sent/streamed */
    let sending = false;
    /** @type {AbortController|null} Current stream controller */
    let streamController = null;
    /** @type {string} Student's first name for personalized greeting */
    let firstName = '';
    /** @type {string} Custom chat greeting from admin settings (empty = use default) */
    let customGreeting = '';
    /** @type {string} Course full name for variable substitution */
    let courseName = '';
    /** @type {number} Current module/page ID (0 if not on a resource page) */
    let currentPageId = 0;
    /** @type {string} Title of the current resource page (empty if on course-level page) */
    let currentPageTitle = '';
    /** @type {Object|null} Source attribution metadata from SSE meta event */
    let streamMeta = null;
    /** @type {boolean} Whether SOLA is locked due to a Moodle quiz attempt/view page */
    let quizLocked = false;
    /** @type {HTMLAudioElement|{pause:Function}|null} Currently playing OpenAI TTS audio (or AudioContext proxy) */
    let currentAudio = null;
    /** @type {AudioContext|null} Shared AudioContext unlocked by user gesture (iOS TTS fix) */
    let sharedAudioCtx = null;
    /** @type {number} Count of messages sent in this session (for study break nudge) */
    let sessionMessageCount = 0;
    /** @type {boolean} Whether we've already shown a study break nudge this session */
    let breakNudgeShown = false;
    /** @type {boolean} Whether admin context debug inspector is enabled for this user */
    let contextDebugEnabled = false;
    /** @type {{browser:Object|null,lastRequest:Object|null,lastServer:Object|null}} */
    let contextDebugState = {
        browser: null,
        lastRequest: null,
        lastServer: null,
    };
    /** @type {'chat'|'voice'|'history'} */
    let activeBottomMode = 'chat';
    /** @type {Array<{role:string,text:string,timestamp:number|null}>} */
    let conversationHistory = [];
    /** @type {boolean} Whether a history refresh request is in flight */
    let historyRefreshPending = false;
    /** @type {boolean} Whether a voice session is currently active or starting */
    let voiceSessionActive = false;
    /** @type {number} Monotonic token used to ignore stale async voice startup work */
    let voiceSessionRequestId = 0;
    /** @type {string|null} Active practice session type (conversation|pronunciation|null) */
    let practiceSessionType = null;
    /** @type {number} Timestamp when practice session started */
    let practiceSessionStart = 0;
    /** @type {number|null} Rubric ID for current practice session */
    let practiceRubricId = null;
    /** @type {Array|null} Rubric criteria for current practice session */
    let practiceRubricCriteria = null;
    /** @type {RegExp} SOLA follow-up marker parser */
    const NEXT_BLOCK_RE = /\n*\[SOLA_NEXT\]([\s\S]*?)\[\/SOLA_NEXT\]/;
    /** @type {RegExp} Source attribution tag parser — matches [SOURCE:page], [SOURCE:course], [SOURCE:general], [SOURCE:activity:123] */
    const SOURCE_TAG_RE = /\n*\[SOURCE:(page|course|general|activity)(?::(\d+))?\]/;
    /** @type {RegExp} Practice score block parser */
    const SCORE_BLOCK_RE = /\n*\[SOLA_SCORE\]([\s\S]*?)\[\/SOLA_SCORE\]/;
    /** @type {Object<string, string>} */
    const SOURCE_LABELS = {
        page: 'From: Current Page',
        course: 'From: Course Materials',
        general: 'General Knowledge',
        activity: 'From: Course Materials',
    };
    /** @type {string} Local intro-dismiss key */
    const INTRO_DISMISSED_KEY = 'ai_course_assistant_intro_dismissed';
    /** @type {string} Local provider preference key */
    const LLM_PROVIDER_KEY = 'aica_llm_provider';
    /** @type {string} Local model preference key */
    const LLM_MODEL_KEY = 'aica_llm_model';

    /**
     * Parse SOLA metadata markers from an assistant response.
     *
     * @param {string} text
     * @returns {{text:string,suggestions:Array<string>,sourceType:string|null,sourceCmid:string|null}}
     */
    const parseAssistantDecorators = function(text) {
        let cleanText = ((text || '') + '');
        let suggestions = [];
        let sourceType = null;
        let sourceCmid = null;

        const nextMatch = cleanText.match(NEXT_BLOCK_RE);
        if (nextMatch) {
            suggestions = nextMatch[1].split('||').map(function(s) {
                return s.trim();
            }).filter(Boolean).slice(0, 4);
            cleanText = cleanText.replace(NEXT_BLOCK_RE, '').trimEnd();
        }

        const sourceMatch = cleanText.match(SOURCE_TAG_RE);
        if (sourceMatch) {
            sourceType = sourceMatch[1];
            sourceCmid = sourceMatch[2] || null; // Numeric cmid for activity type.
            cleanText = cleanText.replace(SOURCE_TAG_RE, '').trimEnd();
        }

        let scoreData = null;
        const scoreMatch = cleanText.match(SCORE_BLOCK_RE);
        if (scoreMatch) {
            try {
                scoreData = JSON.parse(scoreMatch[1]);
            } catch (e) {
                scoreData = null;
            }
            cleanText = cleanText.replace(SCORE_BLOCK_RE, '').trimEnd();
        }

        return {
            text: cleanText,
            suggestions: suggestions,
            sourceType: sourceType,
            sourceCmid: sourceCmid,
            scoreData: scoreData,
        };
    };

    /**
     * Sanitize message text before it is stored in the compact History tab.
     *
     * @param {string} role
     * @param {string} text
     * @returns {string}
     */
    const getHistorySafeText = function(role, text) {
        if (role === 'assistant') {
            return parseAssistantDecorators(text).text.trim();
        }
        return ((text || '') + '').trim();
    };

    /**
     * Get the latest assistant bubble in the visible transcript.
     *
     * @returns {HTMLElement|null}
     */
    const getLastAssistantMessageEl = function() {
        const root = UI.getElements().root || document.getElementById('local-ai-course-assistant');
        if (!root) {
            return null;
        }
        const bubbles = root.querySelectorAll('.local-ai-course-assistant__message--assistant');
        return bubbles.length ? bubbles[bubbles.length - 1] : null;
    };

    /**
     * Append a source attribution pill below an assistant bubble.
     *
     * @param {HTMLElement|null} msgEl
     * @param {string|null} sourceType
     */
    const appendSourcePill = function(msgEl, sourceType) {
        if (!msgEl || !sourceType || !SOURCE_LABELS[sourceType]) {
            return;
        }
        const existing = msgEl.querySelector('.aica-source-pill');
        if (existing) {
            existing.remove();
        }
        const pill = document.createElement('span');
        pill.className = 'aica-source-pill aica-source-pill--' + sourceType;
        pill.textContent = SOURCE_LABELS[sourceType];
        msgEl.appendChild(pill);
    };

    /**
     * Create a source attribution pill element (clickable link or plain span).
     *
     * @param {string} sourceType 'page', 'course', 'general', or 'activity'
     * @param {Object|null} meta SSE metadata with pageurl, courseurl, pagetitle, modules
     * @param {string|null} cmid Course module ID for activity source type
     * @returns {HTMLElement}
     */
    const createSourcePill = function(sourceType, meta, cmid) {
        var href = '';
        var label = SOURCE_LABELS[sourceType] || sourceType;
        var title = '';

        if (sourceType === 'activity' && cmid && meta && meta.modules && meta.modules[cmid]) {
            var mod = meta.modules[cmid];
            href = mod.url;
            label = 'From: ' + mod.title;
            title = mod.title;
        } else if (sourceType === 'page' && meta && meta.pageurl) {
            href = meta.pageurl;
            title = meta.pagetitle || '';
        } else if ((sourceType === 'course' || sourceType === 'activity') && meta && meta.courseurl) {
            href = meta.courseurl;
        }

        var linkIcon = ' <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24"'
            + ' fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"'
            + ' stroke-linejoin="round" style="vertical-align:-1px;margin-left:2px">'
            + '<path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/>'
            + '<polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>';

        var pill;
        if (href) {
            pill = document.createElement('a');
            pill.href = href;
            pill.target = '_blank';
            pill.rel = 'noopener';
            if (title) {
                pill.title = title;
            }
            pill.textContent = label;
            var iconWrap = document.createElement('span');
            iconWrap.innerHTML = linkIcon;
            pill.appendChild(iconWrap);
        } else {
            pill = document.createElement('span');
            pill.textContent = label;
        }
        pill.className = 'aica-source-pill aica-source-pill--' + (sourceType === 'activity' ? 'course' : sourceType);
        return pill;
    };

    /**
     * Get the visible page heading for debug purposes.
     *
     * @returns {string}
     */
    const getContextDebugHeading = function() {
        const heading = document.querySelector('h1');
        return heading ? heading.textContent.trim() : '';
    };

    /**
     * Build a snapshot of the current page state visible to the browser and widget.
     *
     * @param {HTMLElement} rootEl
     * @returns {Object}
     */
    const buildContextDebugBrowserSnapshot = function(rootEl) {
        return {
            browserUrl: window.location.href,
            browserTitle: document.title || '',
            browserHeading: getContextDebugHeading(),
            bodyClasses: document.body ? document.body.className : '',
            widgetCapture: {
                currentPageId: currentPageId || null,
                currentPageTitle: currentPageTitle || null,
                modName: rootEl.dataset.modname || null,
                pageType: rootEl.dataset.pagetype || null,
                contextLevel: rootEl.dataset.contextLevel || null,
                serverPageUrl: rootEl.dataset.serverPageUrl || null,
                serverPageTitle: rootEl.dataset.serverPageTitle || null,
                serverPageHeading: rootEl.dataset.serverPageHeading || null,
            },
        };
    };

    /**
     * Write a JSON payload into one section of the debug panel.
     *
     * @param {HTMLElement|null} el
     * @param {Object|null} payload
     * @param {string} emptyText
     */
    const setContextDebugBlock = function(el, payload, emptyText) {
        if (!el) {
            return;
        }
        if (!payload || (typeof payload === 'object' && !Array.isArray(payload) &&
                Object.keys(payload).length === 0)) {
            el.textContent = emptyText;
            return;
        }
        el.textContent = JSON.stringify(payload, null, 2);
    };

    /**
     * Refresh the admin context debug panel with the latest client/server state.
     */
    const refreshContextDebug = function() {
        if (!contextDebugEnabled) {
            return;
        }
        const rootEl = UI.getElements().root;
        if (!rootEl) {
            return;
        }
        const panel = rootEl.querySelector('.aica-debug-panel');
        if (!panel) {
            return;
        }

        contextDebugState.browser = buildContextDebugBrowserSnapshot(rootEl);

        setContextDebugBlock(
            panel.querySelector('.aica-debug-panel__pre--browser'),
            contextDebugState.browser,
            'No browser snapshot available.'
        );
        setContextDebugBlock(
            panel.querySelector('.aica-debug-panel__pre--request'),
            contextDebugState.lastRequest,
            'Send a message to see the next request payload.'
        );
        setContextDebugBlock(
            panel.querySelector('.aica-debug-panel__pre--prompt'),
            contextDebugState.lastServer,
            'Waiting for the server debug payload for the latest message.'
        );
    };

    /**
     * Initialise the admin context debug state.
     *
     * @param {HTMLElement} rootEl
     */
    const initContextDebug = function(rootEl) {
        contextDebugEnabled = !!(rootEl && rootEl.dataset.contextDebug === '1');
        if (!contextDebugEnabled) {
            return;
        }
        contextDebugState.browser = buildContextDebugBrowserSnapshot(rootEl);
        refreshContextDebug();
    };

    /**
     * Toggle the admin context debug panel.
     */
    const handleContextDebugToggle = function() {
        if (!contextDebugEnabled) {
            return;
        }
        const rootEl = UI.getElements().root;
        if (!rootEl) {
            return;
        }
        const panel = rootEl.querySelector('.aica-debug-panel');
        const btn = rootEl.querySelector('.local-ai-course-assistant__btn-debug');
        if (!panel || !btn) {
            return;
        }

        const opening = panel.hasAttribute('hidden');
        if (opening) {
            refreshContextDebug();
            panel.removeAttribute('hidden');
        } else {
            panel.setAttribute('hidden', 'hidden');
        }
        btn.setAttribute('aria-pressed', opening ? 'true' : 'false');
        btn.classList.toggle('local-ai-course-assistant__btn-debug--active', opening);
    };

    /**
     * Copy the current debug snapshot to the clipboard.
     */
    const handleContextDebugCopy = function() {
        if (!contextDebugEnabled || !navigator.clipboard) {
            return;
        }
        const text = [
            'Context debug',
            '',
            '[Browser snapshot]',
            JSON.stringify(contextDebugState.browser || {}, null, 2),
            '',
            '[Last request]',
            JSON.stringify(contextDebugState.lastRequest || {}, null, 2),
            '',
            '[Prompt view]',
            JSON.stringify(contextDebugState.lastServer || {}, null, 2),
        ].join('\n');

        navigator.clipboard.writeText(text).then(function() {
            UI.showNotification('Context debug copied', 'success');
        }).catch(function() {
            UI.showNotification('Could not copy debug snapshot', 'error');
        });
    };

    /**
     * Store the last outbound request in the debug inspector.
     *
     * @param {Object} postData
     */
    const updateContextDebugRequest = function(postData) {
        if (!contextDebugEnabled) {
            return;
        }
        contextDebugState.lastRequest = Object.assign({
            sentAt: new Date().toISOString(),
        }, JSON.parse(JSON.stringify(postData)));
        contextDebugState.lastServer = null;
        refreshContextDebug();
    };

    /**
     * Store the last server-side debug payload in the inspector.
     *
     * @param {Object} payload
     */
    const updateContextDebugServer = function(payload) {
        if (!contextDebugEnabled) {
            return;
        }
        contextDebugState.lastServer = payload;
        refreshContextDebug();
    };

    /**
     * Determine whether the first-run intro has already been completed.
     *
     * @param {HTMLElement|null=} rootEl
     * @returns {boolean}
     */
    const isIntroDismissed = function(rootEl) {
        rootEl = rootEl || UI.getElements().root || document.getElementById('local-ai-course-assistant');
        if (rootEl && rootEl.dataset.introDismissed === '1') {
            return true;
        }
        try {
            return localStorage.getItem(INTRO_DISMISSED_KEY) === '1';
        } catch (e) {
            return false;
        }
    };

    /**
     * Persist intro completion locally and on the server once the user accepts it.
     *
     * @param {HTMLElement|null=} rootEl
     */
    const markIntroDismissed = function(rootEl) {
        rootEl = rootEl || UI.getElements().root || document.getElementById('local-ai-course-assistant');
        if (rootEl) {
            rootEl.dataset.introDismissed = '1';
        }
        try {
            localStorage.setItem(INTRO_DISMISSED_KEY, '1');
        } catch (e) { /**/ }
        Repo.dismissIntro().catch(function() {
            // Silently fail.
        });
    };

    /**
     * Convert a server timestamp into milliseconds when possible.
     *
     * @param {number|string|null} value
     * @returns {number|null}
     */
    const normalizeTimestamp = function(value) {
        if (value === null || value === undefined || value === '') {
            return null;
        }
        const num = Number(value);
        if (!isFinite(num) || num <= 0) {
            return null;
        }
        return num < 1000000000000 ? num * 1000 : num;
    };

    /**
     * Convert a timestamp into a human-friendly relative label for recency UI.
     *
     * @param {number|string|null} value
     * @returns {string}
     */
    const formatRelativeTimestamp = function(value) {
        const ts = normalizeTimestamp(value);
        if (!ts) {
            return '';
        }

        const diffMs = Math.max(0, Date.now() - ts);
        const minuteMs = 60 * 1000;
        const hourMs = 60 * minuteMs;
        const dayMs = 24 * hourMs;

        if (diffMs < 2 * minuteMs) {
            return 'just now';
        }
        if (diffMs < hourMs) {
            const minutesAgo = Math.floor(diffMs / minuteMs);
            return minutesAgo + ' minute' + (minutesAgo === 1 ? '' : 's') + ' ago';
        }
        if (diffMs < dayMs) {
            const hoursAgo = Math.floor(diffMs / hourMs);
            return hoursAgo + ' hour' + (hoursAgo === 1 ? '' : 's') + ' ago';
        }
        if (diffMs < 2 * dayMs) {
            return 'yesterday';
        }

        const daysAgo = Math.floor(diffMs / dayMs);
        return daysAgo + ' days ago';
    };

    /**
     * Replace the in-memory conversation history used by the History tab.
     *
     * @param {Array} messages
     */
    const setConversationHistory = function(messages) {
        conversationHistory = (messages || []).map(function(msg) {
            const role = msg.role || 'assistant';
            const rawText = (msg.text !== undefined ? msg.text : msg.message) || '';
            return {
                role: role,
                text: getHistorySafeText(role, rawText),
                timestamp: normalizeTimestamp(msg.timestamp !== undefined ? msg.timestamp : msg.timecreated),
            };
        }).filter(function(msg) {
            return !!(msg.text && msg.text.trim());
        });
        UI.renderHistoryPanel(conversationHistory);
    };

    /**
     * Append one message to the in-memory conversation history.
     *
     * @param {string} role
     * @param {string} text
     * @param {number|string|null} ts
     */
    const recordConversationMessage = function(role, text, ts) {
        const cleanText = getHistorySafeText(role, text);
        if (!cleanText) {
            return;
        }
        conversationHistory.push({
            role: role,
            text: cleanText,
            timestamp: normalizeTimestamp(ts) || Date.now(),
        });
        if (conversationHistory.length > 120) {
            conversationHistory = conversationHistory.slice(conversationHistory.length - 120);
        }
        UI.renderHistoryPanel(conversationHistory);
    };

    /**
     * Determine whether voice chat can be started from this page.
     *
     * @returns {boolean}
     */
    const isVoiceFeatureEnabled = function(root) {
        return !!(root && root.dataset.ttsurl);
    };

    /**
     * Whether the course is configured to prefer OpenAI Realtime for live voice.
     *
     * @param {HTMLElement|null} root
     * @returns {boolean}
     */
    const isRealtimeVoicePreferred = function(root) {
        return !!(root && (root.dataset.realtimeenabled === '1' || root.dataset.realtimeenabled === 'true'));
    };

    /**
     * Check for the browser APIs needed by both voice flows.
     *
     * @returns {boolean}
     */
    const hasVoiceInputEnvironment = function() {
        return window.isSecureContext && !!navigator.mediaDevices && !!navigator.mediaDevices.getUserMedia;
    };

    /**
     * Audio playback is required for both the legacy and Realtime voice stacks.
     *
     * @returns {boolean}
     */
    const hasAudioPlaybackSupport = function() {
        return !!(window.AudioContext || window.webkitAudioContext);
    };

    /** @type {string} Default SOLA voice preference */
    const DEFAULT_VOICE = 'marin';

    /**
     * Get the admin-configured default voice for this widget.
     *
     * @param {HTMLElement|null} root
     * @returns {string}
     */
    const getDefaultVoice = function(root) {
        root = root || UI.getElements().root || document.getElementById('local-ai-course-assistant');
        return (root && root.dataset.defaultvoice) ? root.dataset.defaultvoice : DEFAULT_VOICE;
    };

    /**
     * Get the user's saved SOLA voice preference, if any.
     *
     * @returns {string}
     */
    const getStoredVoicePreference = function() {
        try {
            return localStorage.getItem('aica_tts_voice') || '';
        } catch (e) {
            return '';
        }
    };

    /**
     * Normalize a SOLA voice preference for Realtime sessions.
     *
     * Realtime and TTS do not share an identical OpenAI voice catalog, so
     * older TTS-only voices are mapped to the closest supported Realtime option.
     *
     * @param {string} voice
     * @returns {string}
     */
    const getRealtimeCompatibleVoice = function(voice) {
        const fallbacks = {
            fable: 'ballad',
            nova: 'coral',
            onyx: 'cedar',
        };
        return fallbacks[voice] || voice || DEFAULT_VOICE;
    };

    /**
     * Resolve the current SOLA voice preference for UI and legacy TTS.
     *
     * @param {HTMLElement|null} root
     * @returns {string}
     */
    const getPreferredVoice = function(root) {
        return getStoredVoicePreference() || getDefaultVoice(root);
    };

    /**
     * Parse the active LLM switcher options from the widget dataset.
     *
     * @param {HTMLElement|null} root
     * @returns {{enabled:boolean,providers:Array,defaultProvider:string,defaultModel:string}}
     */
    const getLlmOptions = function(root) {
        root = root || UI.getElements().root || document.getElementById('local-ai-course-assistant');
        let options = {};
        try {
            options = root && root.dataset && root.dataset.llmOptions ? JSON.parse(root.dataset.llmOptions) : {};
        } catch (e) {
            options = {};
        }

        const normalizeModelOption = function(model) {
            if (typeof model === 'string') {
                return {
                    id: model,
                    label: model,
                    status: 'setup',
                };
            }
            if (!model || typeof model !== 'object') {
                return null;
            }
            const id = model.id || model.value || model.name || model.label || '';
            if (!id) {
                return null;
            }
            return {
                id: id,
                label: model.label || model.name || id,
                status: (model.status || 'setup').toLowerCase(),
            };
        };

        /**
         * Return only the models that should be shown in the composer dropdown.
         *
         * @param {Array} models
         * @returns {Array<{id:string,label:string,status:string}>}
         */
        const getVisibleModels = function(models) {
            return (Array.isArray(models) ? models : []).map(normalizeModelOption).filter(function(model) {
                return !!(model && model.id && (model.status === 'active' || model.status === 'setup'));
            });
        };

        const providers = (Array.isArray(options && options.providers) ? options.providers : []).map(function(provider) {
            if (!provider || !provider.id) {
                return null;
            }
            const models = getVisibleModels(provider.models);
            if (!models.length) {
                return null;
            }
            return {
                id: provider.id,
                label: provider.label || provider.id,
                models: models,
            };
        }).filter(Boolean);

        return {
            enabled: !!(options && options.enabled),
            providers: providers,
            defaultProvider: (options && options.defaultProvider) || '',
            defaultModel: (options && options.defaultModel) || '',
        };
    };

    /**
     * Persist the user's preferred LLM provider/model pair.
     *
     * @param {string} provider
     * @param {string} model
     */
    const saveLlmSelection = function(provider, model) {
        try {
            if (provider) {
                localStorage.setItem(LLM_PROVIDER_KEY, provider);
            } else {
                localStorage.removeItem(LLM_PROVIDER_KEY);
            }
            if (model) {
                localStorage.setItem(LLM_MODEL_KEY, model);
            } else {
                localStorage.removeItem(LLM_MODEL_KEY);
            }
        } catch (e) { /**/ }
    };

    /**
     * Resolve the current active provider/model pair for the student model switcher.
     *
     * @param {HTMLElement|null} root
     * @returns {{enabled:boolean,provider:string,model:string,options:Object}}
     */
    const getResolvedLlmSelection = function(root) {
        const options = getLlmOptions(root);
        const providers = options.providers || [];
        if (!options.enabled || !providers.length) {
            return {
                enabled: false,
                provider: '',
                model: '',
                options: options,
            };
        }

        let storedProvider = '';
        let storedModel = '';
        try {
            storedProvider = localStorage.getItem(LLM_PROVIDER_KEY) || '';
            storedModel = localStorage.getItem(LLM_MODEL_KEY) || '';
        } catch (e) { /**/ }

        let providerConfig = providers.find(function(item) {
            return item.id === storedProvider;
        }) || providers.find(function(item) {
            return item.id === options.defaultProvider;
        }) || providers[0];

        if (!providerConfig) {
            return {
                enabled: false,
                provider: '',
                model: '',
                options: options,
            };
        }

        let model = storedModel;
        const providerModelIds = Array.isArray(providerConfig.models)
            ? providerConfig.models.map(function(item) { return item.id; })
            : [];
        if (!model || providerModelIds.indexOf(model) === -1) {
            if (providerConfig.id === options.defaultProvider &&
                    providerModelIds.indexOf(options.defaultModel) !== -1) {
                model = options.defaultModel;
            } else {
                model = (providerConfig.models && providerConfig.models[0] && providerConfig.models[0].id) || '';
            }
        }

        if (storedProvider !== providerConfig.id || storedModel !== model) {
            saveLlmSelection(providerConfig.id, model);
        }

        return {
            enabled: true,
            provider: providerConfig.id,
            model: model,
            options: options,
        };
    };

    /**
     * Resolve the current SOLA voice preference for Realtime.
     *
     * @param {HTMLElement|null} root
     * @param {string=} fallbackVoice
     * @returns {string}
     */
    const getRealtimeVoicePreference = function(root, fallbackVoice) {
        const preferred = getStoredVoicePreference() || fallbackVoice || getDefaultVoice(root);
        return getRealtimeCompatibleVoice(preferred);
    };

    /**
     * Sync the Codex-style composer LLM controls with the active frontend options.
     *
     * @param {HTMLElement} root
     */
    const syncComposerLlmControls = function(root) {
        const llmSelection = getResolvedLlmSelection(root);
        UI.setComposerLlmOptions({
            enabled: llmSelection.enabled,
            providers: llmSelection.options.providers || [],
            currentProvider: llmSelection.provider,
            currentModel: llmSelection.model,
            onChange: function(provider, model) {
                saveLlmSelection(provider, model);
            },
        });
    };

    /**
     * Preferred microphone constraints for live voice.
     * Echo cancellation keeps assistant playback from retriggering the mic path.
     *
     * @returns {Object}
     */
    const getRealtimeMicConstraints = function() {
        return {
            audio: {
                echoCancellation: true,
                noiseSuppression: true,
                autoGainControl: true,
            },
        };
    };

    /**
     * Request microphone access for Realtime voice mode.
     *
     * @returns {Promise<MediaStream>}
     */
    const getRealtimeMicStream = function() {
        if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
            return Promise.reject(new Error('Microphone access is not available in this browser.'));
        }
        return navigator.mediaDevices.getUserMedia(getRealtimeMicConstraints());
    };

    /**
     * Normalize browser getUserMedia failures into user-facing copy.
     *
     * @param {Error|DOMException|Object|string|null} err
     * @returns {string}
     */
    const formatRealtimeVoiceStartError = function(err) {
        const name = err && err.name ? err.name : '';
        if (name === 'NotAllowedError' || name === 'PermissionDeniedError' || name === 'SecurityError') {
            return 'Microphone access was blocked. Please allow microphone access and try again.';
        }
        if (name === 'NotFoundError' || name === 'DevicesNotFoundError') {
            return 'No microphone was found on this device.';
        }
        if (name === 'NotReadableError' || name === 'TrackStartError') {
            return 'Your microphone is busy in another app. Close the other app and try again.';
        }
        if (err && err.message) {
            return err.message;
        }
        return 'Could not start live voice chat.';
    };

    /**
     * Legacy speaking practice can use browser STT or MediaRecorder + Whisper fallback.
     *
     * @returns {boolean}
     */
    const supportsLegacyVoiceFlow = function() {
        return hasAudioPlaybackSupport() && (
            Speech.isSTTSupported() ||
            (!!window.MediaRecorder && !!navigator.mediaDevices && !!navigator.mediaDevices.getUserMedia)
        );
    };

    /**
     * Realtime voice uses raw microphone capture, so it does not depend on SpeechRecognition.
     *
     * @param {HTMLElement|null} root
     * @returns {boolean}
     */
    const canUseRealtimeVoiceChat = function(root) {
        return isVoiceFeatureEnabled(root) && isRealtimeVoicePreferred(root) &&
            hasVoiceInputEnvironment() && hasAudioPlaybackSupport();
    };

    /**
     * Legacy voice remains available anywhere the browser can support it.
     *
     * @param {HTMLElement|null} root
     * @returns {boolean}
     */
    const canUseLegacyVoiceChat = function(root) {
        return isVoiceFeatureEnabled(root) && hasVoiceInputEnvironment() && supportsLegacyVoiceFlow();
    };

    const hasActiveVoiceSession = function() {
        return voiceSessionActive || Voice.isConnected() || Realtime.isConnected();
    };

    const beginVoiceSession = function() {
        voiceSessionActive = true;
        voiceSessionRequestId += 1;
        return voiceSessionRequestId;
    };

    const clearVoiceSession = function() {
        voiceSessionActive = false;
        voiceSessionRequestId += 1;
    };

    const isCurrentVoiceSessionRequest = function(requestId) {
        return voiceSessionActive && requestId === voiceSessionRequestId;
    };

    const getVoicePanelButtonLabel = function(active) {
        const btn = UI.getElements().voiceStartBtn;
        if (!btn) {
            return active ? 'End voice session' : 'Start voice chat';
        }
        if (active) {
            return btn.dataset.stopLabel || 'End voice session';
        }
        return btn.dataset.startLabel || btn.textContent.trim() || 'Start voice chat';
    };

    const isVoiceChatAvailable = function() {
        const root = UI.getElements().root || document.getElementById('local-ai-course-assistant');
        return canUseRealtimeVoiceChat(root) || canUseLegacyVoiceChat(root);
    };

    /**
     * Refresh the copy and CTA state in the voice panel.
     */
    const syncVoicePanel = function() {
        const root = UI.getElements().root || document.getElementById('local-ai-course-assistant');
        if (!root) {
            return;
        }
        const available = isVoiceChatAvailable();
        const sessionActive = hasActiveVoiceSession();
        const contextText = sessionActive
            ? (currentPageTitle
                ? 'Voice chat is open for "' + currentPageTitle + '". Keep speaking, type a follow-up, or end the session when you are done.'
                : 'Voice chat is open for this page or another course topic. Keep speaking, type a follow-up, or end the session when you are done.')
            : (currentPageTitle
                ? 'Start a voice conversation about "' + currentPageTitle + '" or another course topic. Your transcript will still show up in chat.'
                : 'Start a voice conversation about this page or another course topic. Your transcript will still show up in chat.');
        let status = 'Ready when you are.';
        if (sessionActive && !Voice.isConnected() && !Realtime.isConnected()) {
            status = 'Voice chat is starting. You can end the session at any time.';
        } else if (Voice.isConnected() || Realtime.isConnected()) {
            status = 'Voice chat is live. Speak or type to continue.';
        } else if (!isVoiceFeatureEnabled(root)) {
            status = 'Voice chat is not enabled for this course yet.';
        } else if (!hasVoiceInputEnvironment()) {
            status = 'Voice chat needs HTTPS and microphone access.';
        } else if (!hasAudioPlaybackSupport()) {
            status = 'Audio playback is not available in this browser.';
        } else if (!isRealtimeVoicePreferred(root) && !supportsLegacyVoiceFlow()) {
            status = 'This browser does not support speech input.';
        }
        UI.configureVoicePanel({
            text: contextText,
            status: status,
            buttonText: getVoicePanelButtonLabel(sessionActive),
            disabled: sessionActive ? false : !available,
            active: sessionActive,
        });
    };

    const stopActiveVoiceSession = function() {
        clearVoiceSession();
        if (Voice.isConnected()) {
            Voice.disconnect();
        }
        if (Realtime.isConnected()) {
            Realtime.disconnect();
        }
        teardownVoiceSessionUi();
    };

    /**
     * Build the server request context for a Realtime voice session.
     *
     * @param {HTMLElement|null} root
     * @returns {Object}
     */
    const getRealtimeVoiceRequestContext = function(root) {
        root = root || UI.getElements().root || document.getElementById('local-ai-course-assistant');

        let coachingStyle = '';
        let firstGen = false;
        try {
            coachingStyle = localStorage.getItem('aica_coaching_style') || '';
        } catch (e) { /**/ }
        try {
            firstGen = localStorage.getItem('aica_firstgen') === '1';
        } catch (e) { /**/ }

        return {
            lang: Speech.getLang() || '',
            pageId: currentPageId || 0,
            pageTitle: currentPageTitle || '',
            pageHeading: getContextDebugHeading() || (root ? (root.dataset.serverPageHeading || '') : ''),
            clientTitle: document.title || (root ? (root.dataset.serverPageTitle || '') : ''),
            modName: root ? (root.dataset.modname || '') : '',
            coachingStyle: coachingStyle,
            firstGen: firstGen,
            completion: root ? (parseInt(root.dataset.completionpct, 10) || 0) : 0,
        };
    };

    /**
     * Refresh the compact History tab from the server.
     *
     * @param {boolean} showError
     */
    const refreshConversationHistory = function(showError) {
        if (historyRefreshPending) {
            return;
        }
        historyRefreshPending = true;
        const refreshBtn = UI.getElements().historyRefreshBtn;
        if (refreshBtn) {
            refreshBtn.disabled = true;
        }
        Repo.getHistory(courseId).then(function(result) {
            setConversationHistory(result && result.messages ? result.messages : []);
            return;
        }).catch(function() {
            UI.renderHistoryPanel(conversationHistory);
            if (showError) {
                UI.showNotification('Could not refresh history right now.', 'error');
            }
        }).then(function() {
            historyRefreshPending = false;
            if (refreshBtn) {
                refreshBtn.disabled = false;
            }
        });
    };

    /**
     * Switch the footer mode and clean up conflicting UI state.
     *
     * @param {string} mode
     * @param {{force?:boolean,refreshHistory?:boolean}} options
     */
    const setBottomMode = function(mode, options) {
        options = options || {};
        const normalized = ['chat', 'voice', 'history'].indexOf(mode) !== -1 ? mode : 'chat';
        if (normalized === activeBottomMode && !options.force) {
            if (normalized === 'history' && options.refreshHistory) {
                refreshConversationHistory(false);
            }
            // Re-clicking Chat tab shows conversation starters.
            if (normalized === 'chat') {
                UI.showStarters();
            }
            return;
        }

        if (normalized !== 'voice') {
            clearVoiceSession();
            if (Voice.isConnected()) {
                Voice.disconnect();
            }
            if (Realtime.isConnected()) {
                Realtime.disconnect();
            }
            UI.clearSuggestions();
            UI.hideVoiceOverlay();
        }

        UI.hideTopicPicker();
        UI.hideQuizSetup();
        if (quizModeActive) {
            quizModeActive = false;
            const root = UI.getElements().root;
            const quizBtn = root ? root.querySelector('.local-ai-course-assistant__btn-quiz') : null;
            setQuizBtnActive(quizBtn, false);
        }

        activeBottomMode = normalized;
        UI.setBottomMode(normalized);

        // Re-clicking Chat tab (force=true) shows conversation starters.
        if (normalized === 'chat' && options.force) {
            UI.showStarters();
        }
        if (normalized === 'voice') {
            syncVoicePanel();
        } else if (normalized === 'history') {
            UI.renderHistoryPanel(conversationHistory);
            if (options.refreshHistory) {
                refreshConversationHistory(false);
            }
        }
    };

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
        customGreeting = root.dataset.chatGreeting || '';
        courseName = root.dataset.coursename || '';
        currentPageId = parseInt(root.dataset.currentPageId, 10) || 0;
        currentPageTitle = root.dataset.currentPageTitle || '';
        quizLocked = root.dataset.quizLocked === '1';

        // Fallbacks for themes/pages where Moodle does not populate PAGE->cm in the footer hook.
        if (!currentPageId && document.body) {
            var cmidMatch = document.body.className.match(/(?:^|\s)cmid-(\d+)(?:\s|$)/);
            if (cmidMatch) {
                currentPageId = parseInt(cmidMatch[1], 10) || 0;
                if (currentPageId) {
                    root.dataset.currentPageId = String(currentPageId);
                }
            }
        }
        if (!currentPageTitle) {
            currentPageTitle = getContextDebugHeading() || root.dataset.serverPageTitle || '';
            if (currentPageTitle) {
                root.dataset.currentPageTitle = currentPageTitle;
            }
        }
        if (!root.dataset.modname && document.body) {
            var modTypeMatch = document.body.className.match(/(?:^|\s)cm-type-([a-z0-9_]+)(?:\s|$)/i);
            if (modTypeMatch) {
                root.dataset.modname = modTypeMatch[1].toLowerCase();
            }
        }

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
        initContextDebug(root);
        bindEvents();
        syncComposerLlmControls(root);
        initSpeech();
        syncVoicePanel();
        UI.setModeButtonsEnabled(!quizLocked);
        setBottomMode('chat', {force: true});
        // Cache English starter labels before any language update overwrites them.
        root.querySelectorAll('.local-ai-course-assistant__starter').forEach(function(btn) {
            var span = btn.querySelector('span:not(.aica-starter-icon)');
            if (span) {
                btn.dataset.labelEn = span.textContent.trim();
            }
        });
        // Tag widget DOM with data-i18n-* attributes, then apply the current
        // language. Ships via CDN so production on an older plugin version
        // still gets runtime UI translation without a plugin reinstall.
        tagI18nElements(root);
        var initialLang = Speech.getLang ? Speech.getLang() : '';
        if (initialLang && initialLang !== 'en') {
            applyI18n(initialLang);
        }
        initLanguage();
        if (root.dataset.introDismissed === '1') {
            try {
                localStorage.setItem(INTRO_DISMISSED_KEY, '1');
            } catch (e) { /**/ }
        }        // First-ever visit: pulse the toggle to attract attention, but keep
        // the drawer closed until the user opens it.
        try {
            if (!isIntroDismissed(root)) {
                var toggleEl = document.getElementById('local-ai-course-assistant-toggle');
                if (toggleEl) {
                    toggleEl.classList.add('aica-first-visit');
                }
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
        // English Lock: if active, force English and skip auto-detection.
        var rootEl = document.getElementById('local-ai-course-assistant');
        if (rootEl && rootEl.dataset.englishLock === '1') {
            Speech.setLang('en');
            UI.setLangLabel('English (Locked)');
            return;
        }

        const stored = Speech.getLang();

        if (stored) {
            // Already has a saved preference -- update the label and starter texts.
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

        // No language set -- show English label so chip is always meaningful.
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
            'help-page':    labels ? labels.helpPage     : null,
            'quiz':         labels ? labels.quiz         : null,
            'study-plan':   labels ? labels.studyPlan    : null,
            'ask-anything': labels ? labels.askAnything  : null,
            'review-practice': labels ? labels.reviewPractice : null,
            'ai-project-coach':   labels ? labels.aiProjectCoach   : null,
            'ell-practice':       labels ? labels.ellPractice       : null,
            'ell-pronunciation':  labels ? labels.ellPronunciation  : null,
            // Legacy starter keys.
            'explain':      labels ? labels.helpPage     : null,
            'key-concepts': labels ? labels.helpPage     : null,
            'ai-coach':     labels ? labels.askAnything  : null,
            'quick-study':  labels ? labels.reviewPractice : null,
            'help-lesson':  labels ? labels.helpPage     : null,
            'help-me':      labels ? labels.helpMe       : null,
        };
        rootEl.querySelectorAll('.local-ai-course-assistant__starter').forEach(function(btn) {
            var span = btn.querySelector('span:not(.aica-starter-icon)');
            if (!span) {
                return;
            }
            if (btn.dataset.builtin !== '1') {
                // Custom (non-built-in) starters keep their admin-configured label.
                span.textContent = btn.dataset.labelEn || span.textContent;
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
     * Walk known widget elements and attach data-i18n-* attributes so
     * applyI18n() can retranslate them later. Runs once on init.
     *
     * Why this exists in JS instead of the mustache template: the CDN bundle
     * ships JS only. Tagging in JS means production on an older plugin
     * version still gets runtime retranslation via a CDN update.
     *
     * @param {HTMLElement} root Widget root element
     */
    const tagI18nElements = function(root) {
        if (!root) {
            return;
        }

        const $ = function(sel) { return root.querySelector(sel); };
        const $$ = function(sel) { return root.querySelectorAll(sel); };

        const setText = function(el, key) {
            if (el) { el.setAttribute('data-i18n-key', key); }
        };
        const setTextNode = function(el, key) {
            if (el) { el.setAttribute('data-i18n-text-node', key); }
        };
        const setTitle = function(el, key) {
            if (el) { el.setAttribute('data-i18n-title', key); }
        };
        const setAria = function(el, key) {
            if (el) { el.setAttribute('data-i18n-aria', key); }
        };
        const setPh = function(el, key) {
            if (el) { el.setAttribute('data-i18n-ph', key); }
        };
        const setDataAttr = function(el, attrName, key) {
            if (el) { el.setAttribute('data-i18n-attr-' + attrName, key); }
        };
        const setShortname = function(el, key) {
            if (el) {
                el.setAttribute('data-i18n-key', key);
                el.setAttribute('data-i18n-param', 'shortname');
            }
        };

        // Toggle button (floating avatar).
        setTitle(document.getElementById('local-ai-course-assistant-toggle'), 'open');

        // Close-toggle button (inside drawer).
        const closeToggle = document.getElementById('local-ai-course-assistant-close-toggle');
        setTitle(closeToggle, 'close');
        setAria(closeToggle, 'close');

        // Header action buttons.
        $$('.local-ai-course-assistant__btn-close').forEach(function(el) {
            setTitle(el, 'close');
            setAria(el, 'close');
        });
        $$('.local-ai-course-assistant__btn-avatar').forEach(function(el) {
            setTitle(el, 'change_avatar');
            setAria(el, 'change_avatar');
        });
        $$('.local-ai-course-assistant__btn-settings-panel').forEach(function(el) {
            setTitle(el, 'settings_panel');
            setAria(el, 'settings_panel');
        });
        $$('.local-ai-course-assistant__btn-clear').forEach(function(el) {
            setTitle(el, 'clear');
            setAria(el, 'clear');
        });
        $$('.local-ai-course-assistant__btn-reset').forEach(function(el) {
            setTitle(el, 'reset');
            setAria(el, 'reset');
        });

        // Language banner.
        const langAccept = $('.local-ai-course-assistant__lang-accept');
        setAria(langAccept, 'language_switch');
        setText(langAccept, 'lang_switch');
        const langDismiss = $('.local-ai-course-assistant__lang-dismiss');
        setAria(langDismiss, 'language_dismiss');
        setText(langDismiss, 'lang_dismiss');

        // Starters overlay container (individual starter labels handled by updateStarterTexts).
        setAria($('.local-ai-course-assistant__starters'), 'starters_label');

        // Voice mode card.
        setText($('.aica-mode-card--voice .aica-mode-card__eyebrow'), 'mode_voice');
        setShortname($('.aica-mode-card--voice .aica-mode-card__title'), 'voice_panel_title');
        setText($('.aica-mode-card--voice .aica-mode-card__text'), 'voice_copy');
        setText($('.aica-mode-card--voice .aica-mode-card__status'), 'voice_ready');
        const voiceStart = $('.aica-voice-panel__start');
        if (voiceStart) {
            setText(voiceStart, 'voice_start');
            setDataAttr(voiceStart, 'start-label', 'voice_start');
            setDataAttr(voiceStart, 'stop-label', 'voice_end');
        }

        // History / Notes panel.
        setText($('.aica-history-panel__eyebrow'), 'mode_history');
        setText($('.aica-history-panel__title'), 'history_title');
        setText($('.aica-history-panel__refresh'), 'history_refresh');
        setText($('.aica-history-panel__subtitle'), 'history_subtitle');
        setAria($('.aica-history-panel__views'), 'history_views_label');
        setText($('.aica-history-panel__view[data-history-view="saved"]'), 'history_view_saved');
        setText($('.aica-history-panel__view[data-history-view="recent"]'), 'history_view_recent');
        const historyPanel = $('.local-ai-course-assistant__history-panel');
        if (historyPanel) {
            setDataAttr(historyPanel, 'empty-label', 'history_empty');
            setDataAttr(historyPanel, 'recent-subtitle', 'history_subtitle');
            setDataAttr(historyPanel, 'saved-subtitle', 'history_saved_subtitle');
            setDataAttr(historyPanel, 'saved-empty-label', 'history_saved_empty');
            setDataAttr(historyPanel, 'you-label', 'you');
        }

        // Input composer.
        const input = $('.local-ai-course-assistant__input');
        setPh(input, 'placeholder');
        setAria(input, 'placeholder');
        $$('.local-ai-course-assistant__composer-select-wrap').forEach(function(wrap) {
            const label = wrap.querySelector('.local-ai-course-assistant__composer-select-label');
            const select = wrap.querySelector('select');
            const isProvider = !!wrap.querySelector('.local-ai-course-assistant__composer-select--provider');
            if (label) { setText(label, isProvider ? 'llm_label' : 'llm_model_label'); }
            if (select) { setAria(select, isProvider ? 'llm_provider_select' : 'llm_model_select'); }
        });
        $$('.local-ai-course-assistant__btn-mic').forEach(function(el) {
            setTitle(el, 'mic');
            setAria(el, 'mic');
        });
        $$('.local-ai-course-assistant__btn-send').forEach(function(el) {
            setTitle(el, 'send');
            setAria(el, 'send');
        });

        // Footer feedback buttons (SVG + text siblings; use text-node to preserve SVG).
        setTextNode($('.local-ai-course-assistant__footer-usertesting-link'), 'footer_usertesting');
        setTextNode($('.local-ai-course-assistant__footer-feedback-link'), 'footer_feedback');

        // Bottom nav tabs.
        setAria($('.local-ai-course-assistant__bottom-nav'), 'mode_nav');
        setText($('.local-ai-course-assistant__mode-btn[data-mode="chat"] .local-ai-course-assistant__mode-label'), 'mode_chat');
        setText($('.local-ai-course-assistant__mode-btn[data-mode="voice"] .local-ai-course-assistant__mode-label'), 'mode_voice');
        setText($('.local-ai-course-assistant__mode-btn[data-mode="history"] .local-ai-course-assistant__mode-label'), 'mode_history');
    };

    /**
     * Retranslate every tagged widget element into the given language.
     * Reads translations from the I18nStrings bundle and falls back to
     * English when a key is missing for the target language.
     *
     * @param {string|null} langCode ISO 639-1 code, or null for English
     */
    const applyI18n = function(langCode) {
        const root = document.getElementById('local-ai-course-assistant');
        if (!root) {
            return;
        }
        const lang = (langCode || 'en').substring(0, 2).toLowerCase();
        const shortname = root.dataset.shortname || 'SOLA';

        const resolve = function(key) {
            let str = I18nStrings.get(lang, key);
            if (str && str.indexOf('{$a}') !== -1) {
                str = str.replace('{$a}', shortname);
            }
            return str;
        };

        root.querySelectorAll('[data-i18n-key]').forEach(function(el) {
            const str = resolve(el.getAttribute('data-i18n-key'));
            if (str) { el.textContent = str; }
        });

        root.querySelectorAll('[data-i18n-text-node]').forEach(function(el) {
            const str = resolve(el.getAttribute('data-i18n-text-node'));
            if (!str) { return; }
            let replaced = false;
            for (let i = 0; i < el.childNodes.length; i++) {
                const node = el.childNodes[i];
                if (node.nodeType === 3) {
                    const trimmed = node.nodeValue.replace(/^\s+|\s+$/g, '');
                    if (trimmed.length > 0) {
                        node.nodeValue = ' ' + str;
                        replaced = true;
                        break;
                    }
                }
            }
            if (!replaced) {
                el.appendChild(document.createTextNode(' ' + str));
            }
        });

        root.querySelectorAll('[data-i18n-title]').forEach(function(el) {
            const str = resolve(el.getAttribute('data-i18n-title'));
            if (str) { el.title = str; }
        });

        root.querySelectorAll('[data-i18n-aria]').forEach(function(el) {
            const str = resolve(el.getAttribute('data-i18n-aria'));
            if (str) { el.setAttribute('aria-label', str); }
        });

        root.querySelectorAll('[data-i18n-ph]').forEach(function(el) {
            const str = resolve(el.getAttribute('data-i18n-ph'));
            if (str) { el.placeholder = str; }
        });

        // Arbitrary data-* attribute targets (history panel + voice start button).
        [
            root.querySelector('.local-ai-course-assistant__history-panel'),
            root.querySelector('.aica-voice-panel__start'),
        ].forEach(function(el) {
            if (!el) { return; }
            for (let i = 0; i < el.attributes.length; i++) {
                const attr = el.attributes[i];
                if (attr.name.indexOf('data-i18n-attr-') === 0) {
                    const targetAttr = 'data-' + attr.name.substring(15);
                    const str = resolve(attr.value);
                    if (str) { el.setAttribute(targetAttr, str); }
                }
            }
        });
    };

    /**
     * Update UI text elements when language changes. Retranslates every
     * tagged widget element and shows a brief notification.
     *
     * @param {string|null} langCode ISO 639-1 code, or null for English
     */
    const updateUiTextsForLang = function(langCode) {
        applyI18n(langCode);

        if (langCode && langCode !== 'en') {
            var langInfo = Speech.getLangInfo(langCode);
            var langName = langInfo ? langInfo.name : langCode;
            UI.showNotification('Language set to ' + langName + '. New messages will be in ' + langName + '.', 'info');
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

        if (els.closeToggle) {
            els.closeToggle.addEventListener('click', function() {
                UI.closeDrawer();
            });
        }

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

        // Mic button (STT).
        if (els.micBtn) {
            els.micBtn.addEventListener('click', handleMic);
        }

        if (els.modeButtons && els.modeButtons.forEach) {
            els.modeButtons.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    setBottomMode(btn.dataset.mode, {
                        force: btn.dataset.mode === activeBottomMode,
                        refreshHistory: btn.dataset.mode === 'history',
                    });
                });
            });
        }

        if (els.voiceStartBtn) {
            els.voiceStartBtn.addEventListener('click', function() {
                setBottomMode('voice', {force: true});
                if (hasActiveVoiceSession()) {
                    stopActiveVoiceSession();
                    return;
                }
                handlePracticeSpeaking();
            });
        }

        if (els.historyRefreshBtn) {
            els.historyRefreshBtn.addEventListener('click', function() {
                refreshConversationHistory(true);
            });
        }

        // Language chip -- opens compact language picker.
        if (els.langBtn) {
            els.langBtn.addEventListener('click', function() {
                var lockRoot = document.getElementById('local-ai-course-assistant');
                if (lockRoot && lockRoot.dataset.englishLock === '1') {
                    UI.showNotification('Language is locked to English for this course.', 'info');
                    return;
                }
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
                        // Update UI text elements for the new language.
                        updateUiTextsForLang(code);
                    }
                );
            });
        }

        // Voice starter button (mic button inside the starters overlay).
        const starterVoiceBtn = els.root ? els.root.querySelector('.aica-starter-voice__btn') : null;
        if (starterVoiceBtn) {
            starterVoiceBtn.addEventListener('click', handleMic);
        }

        // Settings panel button (gear icon) -- opens language / avatar / voice settings.
        const settingsPanelBtn = els.root ? els.root.querySelector('.local-ai-course-assistant__btn-settings-panel') : null;
        if (settingsPanelBtn) {
            settingsPanelBtn.addEventListener('click', handleSettingsPanel);
        }
        const debugBtn = els.root ? els.root.querySelector('.local-ai-course-assistant__btn-debug') : null;
        if (debugBtn) {
            debugBtn.addEventListener('click', handleContextDebugToggle);
        }
        const debugCopyBtn = els.root ? els.root.querySelector('.aica-debug-panel__copy') : null;
        if (debugCopyBtn) {
            debugCopyBtn.addEventListener('click', handleContextDebugCopy);
        }
        const debugCloseBtn = els.root ? els.root.querySelector('.aica-debug-panel__close') : null;
        if (debugCloseBtn) {
            debugCloseBtn.addEventListener('click', handleContextDebugToggle);
        }
        const debugRefreshBtn = els.root ? els.root.querySelector('.aica-debug-panel__refresh') : null;
        if (debugRefreshBtn) {
            debugRefreshBtn.addEventListener('click', refreshContextDebug);
        }

        // Voice mode button (header shortcut -- triggers Practice Speaking / Option B).
        const voiceBtn = els.root ? els.root.querySelector('.local-ai-course-assistant__btn-voice') : null;
        if (voiceBtn) {
            voiceBtn.addEventListener('click', function() {
                handlePracticeSpeaking();
            });
        }

        // Feedback buttons (header + footer).
        const feedbackHandler = function() {
            UI.showFeedbackPanel(function(rating, comment, deviceInfo) {
                Repo.submitFeedback(courseId, rating, comment, deviceInfo).catch(function() {
                    // Silently ignore — feedback is best-effort.
                });
            });
        };
        const feedbackBtn = els.root ? els.root.querySelector('.local-ai-course-assistant__btn-feedback') : null;
        if (feedbackBtn) {
            feedbackBtn.addEventListener('click', feedbackHandler);
        }
        const footerFeedbackBtn = els.root ? els.root.querySelector('.local-ai-course-assistant__footer-feedback-link') : null;
        if (footerFeedbackBtn) {
            footerFeedbackBtn.addEventListener('click', feedbackHandler);
        }

        // User Testing button (footer).
        const utBtn = els.root ? els.root.querySelector('.local-ai-course-assistant__footer-usertesting-link') : null;
        if (utBtn) {
            utBtn.addEventListener('click', function() {
                handleUserTesting();
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
                    handleStarter(btn.dataset.starter, btn);
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
     * Resolve a starter button from the current DOM.
     *
     * @param {string} starterKey
     * @returns {HTMLElement|null}
     */
    const getStarterButtonByKey = function(starterKey) {
        if (!starterKey) {
            return null;
        }
        const rootEl = document.getElementById('local-ai-course-assistant');
        if (!rootEl) {
            return null;
        }
        return rootEl.querySelector(
            '.local-ai-course-assistant__starter[data-starter="' + starterKey + '"]'
        );
    };

    /**
     * Build a prompt string for a conversation starter + chosen topic.
     *
     * @param {string} starterKey Starter key (e.g. 'help-page' | 'study-plan' | 'ask-anything')
     * @param {string} topic      Resolved topic ('' = default, '__guided__' = AI-guided)
     * @returns {string}
     */
    const buildStarterPrompt = function(starterKey, topic) {
        const isGuided = topic === '__guided__';
        const isEmpty  = !topic || topic === '';

        // Help With This Page -- combines old "Explain This" + "Key Concepts".
        if (starterKey === 'help-page' || starterKey === 'explain' || starterKey === 'help-lesson') {
            if (isGuided) {
                return 'Based on my progress and what I\'ve been asking about, which concept from ' +
                    'this course should I understand more deeply right now? Please identify it and ' +
                    'explain it clearly with examples.';
            }
            if (isEmpty) {
                const pageRef = currentPageTitle ? '"' + currentPageTitle + '"' : 'this lesson';
                return 'Help me understand ' + pageRef + '. What are the key concepts, and can you ' +
                    'explain them with examples?';
            }
            return 'Can you explain "' + topic + '" in detail? Use examples and analogies to ' +
                'make it easy to understand.';
        }

        // Key Concepts (legacy, still works if called).
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

        // Ask Anything -- replaces old "AI Coach".
        if (starterKey === 'ask-anything' || starterKey === 'ai-coach') {
            const pageRef = currentPageTitle ? ' about "' + currentPageTitle + '"' : '';
            return 'I have a question' + pageRef + '. Can you help me? I\'d like to explore this ' +
                'topic, ask follow-up questions, and understand it better.';
        }

        if (starterKey === 'review-practice') {
            const pageRef = currentPageTitle ? ' from "' + currentPageTitle + '"' : ' from recent lessons';
            return 'I\'d like to review and practice what I\'ve been learning' + pageRef + '. ' +
                'Can you help me identify what I should review, then quiz me or walk me through ' +
                'the key points?';
        }

        if (starterKey === 'ai-project-coach') {
            return 'I\'d like help with a project or assignment for this course. Can you coach me ' +
                'through planning, structuring, and completing it? Ask me what I\'m working on first.';
        }

        return '';
    };

    /**
     * Handle a conversation starter button click.
     *
     * Starter behavior primarily comes from the button's data attributes.
     * Topic picker fallback is kept only for legacy starter keys.
     *
     * @param {string} starterKey
     * @param {HTMLElement=} starterBtn
     */
    const handleStarter = function(starterKey, starterBtn) {
        setBottomMode('chat', {force: true});
        UI.hideStarters();

        if (!starterBtn) {
            starterBtn = getStarterButtonByKey(starterKey);
        }

        const sendStarterPrompt = function(prompt) {
            if (!prompt) {
                return;
            }
            UI.getElements().input.value = prompt;
            UI.autoResizeInput();
            UI.updateSendButton();
            handleSend();
        };

        var starterType = 'prompt';
        var starterPrompt = '';
        if (starterBtn) {
            starterType = starterBtn.dataset.type || 'prompt';
            starterPrompt = starterBtn.dataset.prompt || '';
        }

        if (starterType === 'quiz' || starterKey === 'quiz') {
            handleQuiz();
            return;
        }

        if (starterKey === 'quick-study') {
            handleQuickStudy();
            return;
        }

        // Practice Speaking — Option B (SSE + TTS + Web Speech API).
        if (starterType === 'voice' || starterKey === 'ell-practice') {
            startPracticeSession('conversation');
            handlePracticeSpeaking();
            return;
        }

        // ELL Pronunciation — Option C (Realtime), phoneme-level feedback.
        if (starterType === 'pronunciation' || starterKey === 'ell-pronunciation') {
            startPracticeSession('pronunciation');
            handleELLPronunciation();
            return;
        }

        // "Help Me" fires directly without a topic picker.
        if (starterKey === 'help-me') {
            sendStarterPrompt('I need some help!');
            return;
        }

        // Map kebab-case data-starter keys to camelCase STARTER_PROMPTS keys.
        var camelKeyMap = {
            'help-page': 'helpPage',
            'quiz': 'quiz',
            'study-plan': 'studyPlan',
            'ask-anything': 'askAnything',
            'review-practice': 'reviewPractice',
            'ai-project-coach': 'aiProjectCoach',
            'ell-practice': 'ellPractice',
            'ell-pronunciation': 'ellPronunciation',
            'help-lesson': 'helpPage',
            'explain': 'helpPage',
            'key-concepts': 'reviewPractice',
        };

        // Try translated prompt first when UI is set to a non-English language.
        var currentLang = Speech.getLang ? Speech.getLang() : '';
        var promptKey = camelKeyMap[starterKey];
        if (currentLang && currentLang !== 'en' && promptKey) {
            var translatedPrompt = Speech.getStarterPrompt(currentLang, promptKey);
            if (translatedPrompt) {
                sendStarterPrompt(translatedPrompt);
                return;
            }
        }

        if (starterPrompt) {
            const pageRef = currentPageTitle ? '"' + currentPageTitle + '"' : 'this lesson';
            sendStarterPrompt(starterPrompt.replace(/\{page\}/g, pageRef));
            return;
        }

        const prompt = buildStarterPrompt(starterKey, '');
        if (prompt) {
            sendStarterPrompt(prompt);
            return;
        }

        const titleKeyMap = {
            'help-lesson':  'chat:topic_picker_title_help',
            'explain':      'chat:topic_picker_title_explain',
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
                    const topicPrompt = buildStarterPrompt(starterKey, topic);
                    if (!topicPrompt) {
                        return;
                    }
                    sendStarterPrompt(topicPrompt);
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
     * Handle reset/home button -- cancel any active panels and restore the conversation
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

        // End any active voice/pronunciation session.
        clearVoiceSession();
        if (Voice.isConnected()) {
            Voice.disconnect();
        }
        if (Realtime.isConnected()) {
            Realtime.disconnect();
        }
        UI.hideVoiceOverlay();
        UI.clearSuggestions();
        setBottomMode('chat', {force: true});
        syncVoicePanel();
        UI.showStarters();
    };

    /**
     * Show and handle the survey panel.
     * Checks if a survey is available and if the user hasn't already responded.
     */
    const showSurvey = function() {
        Repo.getSurvey(courseId).then(function(data) {
            if (!data.has_survey || data.already_responded) {
                if (data.already_responded) {
                    UI.showNotification('You have already completed this survey. Thank you!', 'info');
                }
                return;
            }
            var questions = [];
            try { questions = JSON.parse(data.questions); } catch (e) { return; }

            UI.showSurveyPanel(
                {id: data.survey_id, title: data.title, questions: questions},
                function(surveyId, answers) {
                    Repo.submitSurveyResponse(surveyId, courseId, JSON.stringify(answers))
                        .catch(function() { /**/ });
                }
            );
            return;
        }).catch(function() { /**/ });
    };

    /**
     * Check if a survey should be shown automatically.
     * Respects admin settings for trigger conditions.
     */
    const checkSurveyTrigger = function() {
        var root = UI.getElements().root;
        if (!root) { return; }
        var surveyEnabled = root.dataset.surveyenabled;
        if (surveyEnabled === '0') { return; }
        // Check localStorage to avoid re-prompting within a session.
        var dismissKey = 'aica_survey_dismissed_' + courseId;
        try {
            if (localStorage.getItem(dismissKey)) { return; }
        } catch (e) { /**/ }

        Repo.getSurvey(courseId).then(function(data) {
            if (!data.has_survey || data.already_responded) { return; }
            // Check trigger: after N messages (default 10).
            var triggerAfter = parseInt(root.dataset.surveytrigger || '10', 10);
            var msgCount = 0;
            try {
                var msgs = document.querySelectorAll('.local-ai-course-assistant__message--user');
                msgCount = msgs ? msgs.length : 0;
            } catch (e) { /**/ }
            if (msgCount >= triggerAfter) {
                // Show a non-intrusive suggestion chip.
                UI.showSuggestions(['\uD83D\uDCCB Take a quick survey'], function(text) {
                    if (text.indexOf('survey') !== -1) {
                        showSurvey();
                        try { localStorage.setItem(dismissKey, '1'); } catch (e) { /**/ }
                    }
                });
            }
            return;
        }).catch(function() { /**/ });
    };

    /**
     * Helper: count user messages in the conversation.
     */
    const getUserMessageCount = function() {
        try {
            var msgs = document.querySelectorAll('.local-ai-course-assistant__message--user');
            return msgs ? msgs.length : 0;
        } catch (e) { return 0; }
    };

    /**
     * Helper: get session duration in minutes.
     */
    const getSessionMinutes = function() {
        return Math.round((Date.now() - sessionStartTime) / 60000);
    };

    /**
     * Handle User Testing button click.
     *
     * If an external URL is configured, opens it with context params (Option C).
     * Otherwise, fetches the task set and shows the in-widget panel (Option B).
     */
    const handleUserTesting = function() {
        var root = UI.getElements().root;
        if (!root) { return; }

        // Check for external URL (Option C).
        var footerDiv = root.querySelector('.local-ai-course-assistant__footer-feedback');
        var externalUrl = footerDiv ? (footerDiv.dataset.usertestingExternalUrl || '') : '';
        if (externalUrl) {
            var msgCount = getUserMessageCount();
            var sessionMins = getSessionMinutes();
            var userId = root.dataset.userid || '0';
            var url = externalUrl
                .replace('{{userid}}', encodeURIComponent(userId))
                .replace('{{courseid}}', encodeURIComponent(courseId))
                .replace('{{messages}}', encodeURIComponent(msgCount))
                .replace('{{session_minutes}}', encodeURIComponent(sessionMins));
            window.open(url, '_blank');
            return;
        }

        // Option B: in-widget testing panel.
        Repo.getUserTesting(courseId).then(function(data) {
            if (!data.has_taskset) {
                UI.showNotification('No testing tasks are available right now.', 'info');
                return;
            }
            if (data.completed_count >= data.total_tasks) {
                UI.showNotification('You have completed all testing tasks. Thank you!', 'info');
                return;
            }

            var tasks = [];
            try { tasks = JSON.parse(data.tasks); } catch (e) { return; }

            UI.showUserTestingPanel(
                {id: data.taskset_id, title: data.title, tasks: tasks, completed_count: data.completed_count},
                function(tasksetId, taskIndex, rating, answer) {
                    var msgCount = getUserMessageCount();
                    var sessionMins = getSessionMinutes();
                    Repo.submitUserTestingResponse(tasksetId, courseId, taskIndex, rating, answer, msgCount, sessionMins)
                        .catch(function() { /**/ });
                },
                function() {
                    // On complete — could trigger a thank-you notification or survey.
                }
            );
        }).catch(function() {
            UI.showNotification('Could not load testing tasks.', 'error');
        });
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

        let studySessions = [];
        let quizHistory = [];
        try { studySessions = JSON.parse(localStorage.getItem('aica_study_sessions_' + courseId) || '[]'); } catch (e) { /**/ }
        try { quizHistory = JSON.parse(localStorage.getItem('aica_quiz_history_' + courseId) || '[]'); } catch (e) { /**/ }

        // Fetch reminder preferences, then show panel.
        var emailReminderEnabled = false;
        var emailDestination = '';
        var whatsappReminderEnabled = false;
        var whatsappDestination = '';
        var reminderFrequency = 'daily';
        var hasAnyReminders = root.dataset.emailreminders === '1' || root.dataset.whatsappreminders === '1';
        var showPanel = function() {
            UI.showSettingsPanel(
                {
                    langs: Speech.SUPPORTED_LANGS,
                    currentLang: Speech.getLang(),
                    avatars: avatars,
                    currentAvatarUrl: root.dataset.avatarurl || '',
                    realtimeEnabled: root.dataset.realtimeenabled === '1' || root.dataset.realtimeenabled === 'true',
                    hasTts: !!(root.dataset.ttsurl),
                    currentVoice: getPreferredVoice(root),
                    studySessions: studySessions,
                    quizHistory: quizHistory,
                    emailRemindersEnabled: root.dataset.emailreminders === '1',
                    whatsappRemindersEnabled: root.dataset.whatsappreminders === '1',
                    emailReminderEnabled: emailReminderEnabled,
                    whatsappReminderEnabled: whatsappReminderEnabled,
                    whatsappDestination: whatsappDestination,
                    emailDestination: emailDestination,
                    reminderFrequency: reminderFrequency,
                    userEmail: root.dataset.useremail || '',
                    userPhone: root.dataset.userphone || '',
                },
                {
                    onLangSelect: function(code, name) {
                        var lockRoot = document.getElementById('local-ai-course-assistant');
                        if (lockRoot && lockRoot.dataset.englishLock === '1') {
                            UI.showNotification('Language is locked to English for this course.', 'info');
                            return;
                        }
                        if (code) {
                            Speech.setLang(code);
                        } else {
                            Speech.clearLang();
                        }
                        UI.setLangLabel(name);
                        updateStarterTexts(code);
                        // Update UI text elements for the new language.
                        updateUiTextsForLang(code);
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
                    onClearProgress: function() {
                        try {
                            localStorage.removeItem('aica_study_sessions_' + courseId);
                            localStorage.removeItem('aica_quiz_history_' + courseId);
                            localStorage.removeItem('aica_last_session_' + courseId);
                        } catch (e) { /**/ }
                    },
                    onReminderUpdate: function(channel, enabled, destination, countryCode, frequency) {
                        Repo.updateReminderPreferences(courseId, channel, destination || '', countryCode || '', frequency, enabled)
                            .catch(function() { /**/ });
                    },
                }
            );
        };

        // Try to load current reminder state before opening panel.
        if (hasAnyReminders) {
            Repo.getReminderPreferences(courseId).then(function(prefs) {
                if (prefs && prefs.reminders) {
                    for (var i = 0; i < prefs.reminders.length; i++) {
                        var r = prefs.reminders[i];
                        if (r.channel === 'email') {
                            emailReminderEnabled = !!r.enabled;
                            emailDestination = r.destination || '';
                            reminderFrequency = r.frequency || 'daily';
                        }
                        if (r.channel === 'whatsapp') {
                            whatsappReminderEnabled = !!r.enabled;
                            whatsappDestination = r.destination || '';
                            if (!reminderFrequency || reminderFrequency === 'daily') {
                                reminderFrequency = r.frequency || 'daily';
                            }
                        }
                    }
                }
                showPanel();
                return;
            }).catch(function() { showPanel(); });
        } else {
            showPanel();
        }
    };

    /**
     * Handle suggestion chip click -- fill input and send as new message.
     *
     * @param {string} text The suggestion text to send
     */
    const handleSuggestionClick = function(text) {
        // Special chip: "Continue: <topic>" -- build a resume prompt.
        if (text.startsWith('Continue: ')) {
            const rawTopic = text.slice('Continue: '.length).replace(/ \(last quiz: \d+%\)$/, '');
            UI.clearSuggestions();
            const prompt = 'Let\'s continue studying "' + rawTopic + '" from where I left off. ' +
                'Briefly remind me what we covered and what I should learn next.';
            UI.getElements().input.value = prompt;
            UI.autoResizeInput();
            UI.updateSendButton();
            handleSend();
            return;
        }
        // Special chip: spaced repetition refresher.
        if (text.startsWith('Quick refresher on ') || text.startsWith('Give me a refresher on ')) {
            var refreshTopic = text.replace(/^(?:Quick refresher on |Give me a refresher on )/, '');
            UI.clearSuggestions();
            var prompt = 'Give me a quick refresher on "' + refreshTopic + '". ' +
                'Summarize the key points in 3-5 bullets, then check my understanding with a question.';
            UI.getElements().input.value = prompt;
            UI.autoResizeInput();
            UI.updateSendButton();
            handleSend();
            return;
        }
        // Special chip: dismiss nudge.
        if (text === 'No thanks') {
            UI.clearSuggestions();
            return;
        }
        // Special chip: open progress panel.
        if (text === 'Show my progress') {
            UI.clearSuggestions();
            handleShowProgress();
            return;
        }
        // Special chip: show starters overlay.
        if (text === 'Start something new' || text === 'Start fresh') {
            UI.clearSuggestions();
            setBottomMode('chat', {force: true});
            UI.showStarters();
            return;
        }
        UI.clearSuggestions();
        UI.getElements().input.value = text;
        UI.autoResizeInput();
        UI.updateSendButton();
        handleSend();
    };

    /**
     * Start tracking a practice session for scoring.
     * @param {string} type 'conversation' or 'pronunciation'
     */
    const startPracticeSession = function(type) {
        var scoringEnabled = els.root && els.root.dataset.practiceScoring !== '0';
        if (!scoringEnabled) {
            return;
        }
        practiceSessionType = type;
        practiceSessionStart = Date.now();
        practiceRubricId = null;
        practiceRubricCriteria = null;
        // Fetch rubric in background.
        Repo.getRubric(courseId, type).then(function(result) {
            if (result && result.has_rubric) {
                practiceRubricId = result.rubric_id;
                try {
                    practiceRubricCriteria = JSON.parse(result.criteria);
                } catch (e) {
                    practiceRubricCriteria = null;
                }
            }
        }).catch(function() {
            // Non-critical — scoring just won't be available.
        });
    };

    /**
     * Request scoring from the AI at end of a practice session.
     */
    const requestSessionScore = function() {
        if (!practiceSessionType || !practiceRubricCriteria) {
            practiceSessionType = null;
            return;
        }
        var type = practiceSessionType;
        var criteriaNames = practiceRubricCriteria.map(function(c) { return c.name; });
        var prompt = 'Please score my ' + type + ' practice session. '
            + 'Evaluate using these criteria: ' + criteriaNames.join(', ') + '. '
            + 'For each criterion, give a score from 1-5 and brief feedback. '
            + 'Then give an overall score (1-5) and a summary. '
            + 'Format your response ONLY as: [SOLA_SCORE]{"criteria":[{"name":"...","score":N,"feedback":"..."},...],"overall":N,"summary":"..."}[/SOLA_SCORE]';

        // Send as a system-initiated scoring request through SSE.
        addAssistantMsg('Evaluating your practice session...', null, {skipHistory: true});

        var rootEl = els.root;
        var postData = {
            courseid: courseId,
            message: prompt,
            sesskey: sessKey,
            interaction_type: type === 'pronunciation' ? 'practice_pronunciation' : 'practice_conversation',
        };
        // Add provider/model.
        var llm = getResolvedLlmSelection(rootEl);
        if (llm && llm.enabled && llm.provider && llm.model) {
            postData.provider = llm.provider;
            postData.model = llm.model;
        }

        var scoreFullText = '';
        SSE.startStream(sseUrl, postData, {
            onToken: function(token) {
                scoreFullText += token;
            },
            onDone: function() {
                var parsed = parseAssistantDecorators(scoreFullText);
                if (parsed.scoreData) {
                    handleScoreData(parsed.scoreData, type);
                }
                // Remove the "Evaluating..." placeholder.
                var msgs = document.querySelectorAll('.local-ai-course-assistant__message--assistant');
                if (msgs.length) {
                    var last = msgs[msgs.length - 1];
                    if (last && last.textContent.indexOf('Evaluating your practice') !== -1) {
                        last.remove();
                    }
                }
                practiceSessionType = null;
            },
            onError: function() {
                practiceSessionType = null;
            }
        });
    };

    /**
     * Handle parsed score data — show card and save to server.
     * @param {Object} scoreData
     * @param {string} type
     */
    const handleScoreData = function(scoreData, type) {
        if (!scoreData || !scoreData.criteria) {
            return;
        }
        // Show score card in chat.
        var title = type === 'pronunciation' ? 'Pronunciation Practice Score' : 'Conversation Practice Score';
        UI.showScoreCard(title, scoreData, function() {
            // "Practice Again" callback.
            if (type === 'pronunciation') {
                startPracticeSession('pronunciation');
                handleELLPronunciation();
            } else {
                startPracticeSession('conversation');
                handlePracticeSpeaking();
            }
        });

        // Save to server (best-effort).
        if (practiceRubricId) {
            var duration = Math.round((Date.now() - practiceSessionStart) / 1000);
            Repo.savePracticeScore(
                courseId,
                practiceRubricId,
                type,
                JSON.stringify(scoreData.criteria),
                scoreData.overall || 0,
                scoreData.summary || '',
                duration
            ).catch(function() {
                // Non-critical.
            });
        }
    };

    /**
     * Reset overlay state once a voice session ends or fails.
     */
    const teardownVoiceSessionUi = function() {
        // Request scoring if a practice session was active.
        if (practiceSessionType && practiceRubricCriteria) {
            requestSessionScore();
        } else {
            practiceSessionType = null;
        }
        clearVoiceSession();
        UI.clearSuggestions();
        UI.hideVoiceOverlay();
        syncVoicePanel();
        UI.showStarters();
    };

    /**
     * Build context-aware conversation starters for general voice chat.
     *
     * @returns {Array<string>}
     */
    const buildPracticeSpeakingChips = function() {
        var speakChips = [];
        if (currentPageTitle) {
            speakChips.push('Discuss ' + currentPageTitle);
        }
        for (var i = 0; i < moduleTitles.length && speakChips.length < 4; i++) {
            var title = moduleTitles[i] && moduleTitles[i].name ? moduleTitles[i].name : '';
            if (title && title !== currentPageTitle) {
                speakChips.push('Talk about ' + title);
            }
        }
        speakChips.push('Free conversation');
        return speakChips;
    };

    /**
     * Extract the raw discussion topic from a speaking suggestion chip.
     *
     * @param {string} label
     * @returns {string}
     */
    const extractPracticeSpeakingTopic = function(label) {
        if (!label || label === 'Free conversation') {
            return '';
        }
        return label.replace(/^(Discuss|Talk about) /, '');
    };

    /**
     * Build the spoken greeting for legacy speaking practice mode.
     *
     * @param {string=} selection
     * @returns {string}
     */
    const buildPracticeSpeakingGreeting = function(selection) {
        var topic = extractPracticeSpeakingTopic(selection);
        if (topic) {
            return 'Let\'s practice speaking about ' + topic + '. '
                + 'Speak in full sentences, and I\'ll keep the conversation going. '
                + 'If you get stuck, that\'s okay. I\'ll help.';
        }
        return 'Let\'s practice speaking. '
            + 'Speak in full sentences, and I\'ll keep the conversation going. '
            + 'If you get stuck, that\'s okay. I\'ll help.';
    };

    /**
     * Build the natural-language kickoff message for realtime speaking practice.
     *
     * @param {string=} selection
     * @returns {string}
     */
    const buildPracticeSpeakingInitialText = function(selection) {
        var topic = extractPracticeSpeakingTopic(selection);
        if (topic) {
            return 'Let\'s practice speaking about ' + topic + '.';
        }
        return 'Let\'s practice speaking.';
    };

    /**
     * Build phrase suggestions for pronunciation coaching.
     *
     * @returns {Array<string>}
     */
    const buildELLPronunciationChips = function() {
        var vocabChips = [];
        if (currentPageTitle) {
            vocabChips.push('Practice saying: ' + currentPageTitle);
        }
        for (var i = 0; i < moduleTitles.length && vocabChips.length < 4; i++) {
            var title = moduleTitles[i] && moduleTitles[i].name ? moduleTitles[i].name : '';
            if (title && title !== currentPageTitle) {
                vocabChips.push('Pronounce: ' + title);
            }
        }
        vocabChips.push('Free practice');
        return vocabChips;
    };

    /**
     * Extract the raw practice phrase from a pronunciation suggestion chip.
     *
     * @param {string} label
     * @returns {string}
     */
    const extractPronunciationPhrase = function(label) {
        if (!label || label === 'Free practice') {
            return '';
        }
        return label.replace(/^(Practice saying|Pronounce): /, '');
    };

    /**
     * Build the natural-language kickoff message for realtime pronunciation mode.
     *
     * @param {string=} selection
     * @returns {string}
     */
    const buildELLPronunciationInitialText = function(selection) {
        var phrase = extractPronunciationPhrase(selection);
        if (phrase) {
            return 'Let\'s practice pronouncing "' + phrase + '".';
        }
        return 'Let\'s practice pronunciation.';
    };

    /**
     * Shared OpenAI Realtime session bootstrap for voice chat and pronunciation.
     *
     * @param {Object} config
     * @param {HTMLElement} config.root
     * @param {string} config.overlayInstruction
     * @param {Array<string>} config.chips
     * @param {string=} config.autoStartSelection
     * @param {Function=} config.getInitialText
     * @param {Function=} config.getInstructions
     */
    const startRealtimeVoiceSession = function(config) {
        const root = config.root || document.getElementById('local-ai-course-assistant');
        const avatarUrl = root ? root.dataset.avatarurl : '';

        if (Realtime.isConnected()) { Realtime.disconnect(); }
        if (Voice.isConnected())    { Voice.disconnect(); }

        // Create AudioContext synchronously so iOS/WKWebView keeps playback unlocked.
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

        if (!audioCtx) {
            addAssistantMsg('Audio playback is not available in this browser.');
            syncVoicePanel();
            return;
        }

        const endSession = function() {
            stopActiveVoiceSession();
        };

        const overlay = UI.showVoiceOverlay(avatarUrl, endSession, config.overlayInstruction || '');
        const sessionRequestId = beginVoiceSession();
        UI.setVoiceState('idle');
        syncVoicePanel();

        const chips = (config.chips && config.chips.length) ? config.chips.slice() : ['Free conversation'];
        var sessionStarted = false;
        var startSession = function(selection) {
            if (sessionStarted) { return; }
            sessionStarted = true;
            UI.clearSuggestions();
            UI.setVoiceState('connecting');
            let acquiredMicStream = null;
            const micPromise = getRealtimeMicStream().then(function(stream) {
                acquiredMicStream = stream;
                return stream;
            });

            Promise.all([
                Repo.getRealtimeToken(courseId, getRealtimeVoiceRequestContext(root)),
                micPromise,
            ]).then(function(results) {
                if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                    if (acquiredMicStream) {
                        acquiredMicStream.getTracks().forEach(function(track) { track.stop(); });
                    }
                    return;
                }
                const result = results[0] || {};
                const micStream = results[1];
                const token = result.token;
                const voice = getRealtimeVoicePreference(root, result.voice);
                const baseInstructions = result.instructions || '';
                const instructions = config.getInstructions
                    ? config.getInstructions(baseInstructions, selection)
                    : baseInstructions;
                const initialText = config.getInitialText ? config.getInitialText(selection) : '';
                let initialTextSent = false;

                Realtime.connect(
                    token,
                    instructions,
                    voice,
                    {
                        provider: result.provider,
                        endpoint: result.endpoint,
                        onTranscript: function(role, text) {
                            if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                                return;
                            }
                            UI.appendVoiceTranscript(role, text);
                        },
                        onStateChange: function(state) {
                            if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                                return;
                            }
                            UI.setVoiceState(state);
                            syncVoicePanel();
                            if (state === 'idle' && initialText && !initialTextSent) {
                                initialTextSent = true;
                                Realtime.sendText(initialText);
                                return;
                            }
                            if (state === 'disconnected') {
                                teardownVoiceSessionUi();
                            }
                        },
                        onError: function(msg) {
                            if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                                return;
                            }
                            UI.setVoiceState('disconnected');
                            teardownVoiceSessionUi();
                            addAssistantMsg(msg || 'Voice connection failed.');
                        },
                        onSuggestions: function(nextChips) {
                            if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                                return;
                            }
                            UI.showSuggestions(nextChips, function(text) {
                                UI.clearSuggestions();
                                if (text === 'End practice') {
                                    endSession();
                                    return;
                                }
                                Realtime.sendText(text);
                            });
                        },
                    },
                    overlay,
                    audioCtx,
                    micStream
                );
            }).catch(function(err) {
                if (acquiredMicStream) {
                    acquiredMicStream.getTracks().forEach(function(track) { track.stop(); });
                    acquiredMicStream = null;
                }
                if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                    return;
                }
                UI.setVoiceState('disconnected');
                teardownVoiceSessionUi();
                addAssistantMsg(formatRealtimeVoiceStartError(err));
            });
        };

        if (config.autoStartSelection) {
            startSession(config.autoStartSelection);
            return;
        }

        UI.showSuggestions(chips, function(text) {
            startSession(text);
        });
    };

    /**
     * Start a legacy Practice Speaking session (SSE + TTS + browser STT/fallback).
     *
     * @param {HTMLElement} root
     * @param {string=} selection
     */
    const startLegacyPracticeSpeaking = function(root, selection) {
        if (!supportsLegacyVoiceFlow()) {
            UI.showNotification('This browser does not support speech input.', 'error');
            syncVoicePanel();
            return;
        }

        if (Realtime.isConnected()) { Realtime.disconnect(); }

        const avatarUrl = root ? root.dataset.avatarurl : '';
        const voice = getPreferredVoice(root);
        var assistantName = (root && root.dataset.shortname) || (root && root.dataset.displayname) || 'SOLA';

        const endSession = function() {
            stopActiveVoiceSession();
        };

        UI.showVoiceOverlay(avatarUrl, endSession,
            'Start speaking \u2014 ' + assistantName + ' will listen and respond.');
        const sessionRequestId = beginVoiceSession();
        UI.setVoiceState('idle');
        syncVoicePanel();

        var sessionStarted = false;
        var startSession = function(selectionLabel) {
            if (sessionStarted) { return; }
            sessionStarted = true;
            UI.clearSuggestions();
            UI.setVoiceState('connecting');
            Voice.connect(
                '',
                voice,
                {
                    onTranscript: function(role, text) {
                        if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                            return;
                        }
                        UI.appendVoiceTranscript(role, text);
                    },
                    onStateChange: function(state) {
                        if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                            return;
                        }
                        UI.setVoiceState(state);
                        syncVoicePanel();
                        if (state === 'disconnected') {
                            teardownVoiceSessionUi();
                        }
                    },
                    onError: function(msg) {
                        if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                            return;
                        }
                        Voice.disconnect();
                        UI.setVoiceState('disconnected');
                        teardownVoiceSessionUi();
                        addAssistantMsg(msg || 'Voice mode failed.');
                    },
                    onSuggestions: function(chips) {
                        if (!isCurrentVoiceSessionRequest(sessionRequestId)) {
                            return;
                        }
                        UI.showSuggestions(chips, function(text) {
                            UI.clearSuggestions();
                            Voice.sendText(text);
                        });
                    },
                },
                {
                    courseId: courseId,
                    sessKey:  sessKey,
                    sseUrl:   sseUrl,
                    lang:     Speech.getLang(),
                    greeting: buildPracticeSpeakingGreeting(selectionLabel),
                    pageId: currentPageId || 0,
                    pageTitle: currentPageTitle || '',
                }
            );
        };

        if (selection !== undefined) {
            startSession(selection);
            return;
        }

        UI.showSuggestions(buildPracticeSpeakingChips(), function(text) {
            startSession(text);
        });
    };

    /**
     * Start the main Voice Chat flow, preferring OpenAI Realtime when enabled.
     */
    const handlePracticeSpeaking = function() {
        if (sending || streamController) {
            UI.showNotification('Please wait for the current response to finish before starting voice chat.', 'error');
            return;
        }
        const root = document.getElementById('local-ai-course-assistant');
        if (!root || !isVoiceFeatureEnabled(root)) {
            UI.showNotification('Voice chat is not enabled for this course yet.', 'error');
            return;
        }
        if (!hasVoiceInputEnvironment()) {
            UI.showNotification('Voice chat needs a secure context (HTTPS or localhost) and microphone access. This page is served over plain HTTP from a LAN address, so the browser blocks the microphone.', 'error');
            return;
        }
        setBottomMode('voice', {force: true});
        syncVoicePanel();

        if (isRealtimeVoicePreferred(root)) {
            var assistantName = (root && root.dataset.shortname) || (root && root.dataset.displayname) || 'SOLA';
            startRealtimeVoiceSession({
                root: root,
                overlayInstruction: 'Start speaking \u2014 ' + assistantName +
                    ' will listen and respond.',
                chips: buildPracticeSpeakingChips(),
                autoStartSelection: 'Free conversation',
                getInitialText: function(selection) {
                    return buildPracticeSpeakingInitialText(selection);
                },
                getInstructions: function(baseInstructions, selection) {
                    var instructions = baseInstructions || '';
                    var topic = extractPracticeSpeakingTopic(selection);
                    instructions += '\n\n## Voice Conversation\n'
                        + 'Keep the conversation grounded in the current page when relevant. '
                        + 'Respond naturally to follow-up questions and let the student interrupt or redirect the topic. '
                        + 'Begin the session with a warm spoken welcome, briefly explain how the speaking practice works, '
                        + 'and ask one simple opening question.';
                    if (topic) {
                        instructions += ' Use "' + topic + '" as the opening topic.';
                    }
                    return instructions;
                },
            });
            return;
        }

        startLegacyPracticeSpeaking(root, 'Free conversation');
    };

    /**
     * Start an ELL Pronunciation session (OpenAI Realtime WebSocket).
     * Uses phoneme-level audio analysis and page-aware instructions.
     */
    const handleELLPronunciation = function() {
        if (sending || streamController) {
            UI.showNotification('Please wait for the current response to finish before starting voice chat.', 'error');
            return;
        }
        const root = document.getElementById('local-ai-course-assistant');
        if (!root || !isRealtimeVoicePreferred(root)) {
            UI.showNotification('Pronunciation Practice is not enabled for this course yet.', 'error');
            return;
        }
        if (!hasVoiceInputEnvironment()) {
            UI.showNotification('Pronunciation Practice needs a secure context (HTTPS or localhost) and microphone access. This page is served over plain HTTP from a LAN address, so the browser blocks the microphone.', 'error');
            return;
        }
        setBottomMode('voice', {force: true});
        syncVoicePanel();

        var assistantName = (root && root.dataset.shortname) || (root && root.dataset.displayname) || 'SOLA';
        startRealtimeVoiceSession({
            root: root,
            overlayInstruction: 'Choose a phrase to practice or start speaking \u2014 ' + assistantName +
                ' will give you feedback.',
            chips: buildELLPronunciationChips(),
            getInitialText: function(selection) {
                return buildELLPronunciationInitialText(selection);
            },
            getInstructions: function(baseInstructions, selection) {
                var phrase = extractPronunciationPhrase(selection);
                var instructions = baseInstructions ? (baseInstructions + '\n\n') : '';
                instructions += Realtime.ELL_INSTRUCTIONS;
                if (phrase) {
                    instructions += '\n\nThe student wants to practice pronouncing: "' + phrase +
                        '". Begin by welcoming the student, briefly explain the exercise, say this phrase clearly, then ask them to repeat it.';
                } else {
                    instructions += '\n\nBegin by welcoming the student, briefly explain the exercise, then invite them to try a word or short phrase from the current page.';
                }
                instructions += ' Base your pronunciation feedback and examples on the current page and nearby course content when possible.';
                return instructions;
            },
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
        const rootEl = document.getElementById('local-ai-course-assistant');
        if (rootEl) {
            const buttons = rootEl.querySelectorAll('.local-ai-course-assistant__starter');
            for (let i = 0; i < buttons.length; i++) {
                const labelEl = buttons[i].querySelector('span:not(.aica-starter-icon)');
                const label = labelEl ? labelEl.textContent.toLowerCase().trim() : '';
                if (label && lower.includes(label)) {
                    return buttons[i].dataset.starter || null;
                }
            }
        }
        const enKeywords = {
            'help-page':    ['help with this page', 'help me with this', 'explain this', 'explain',
                'key concepts', 'key concept', 'concepts', 'main concepts'],
            'quiz':         ['quiz', 'test', 'quiz me', 'test me'],
            'study-plan':   ['study plan', 'study', 'plan', 'schedule'],
            'ask-anything': ['ask anything', 'ask a question', 'question', 'ai coach',
                'learn about ai', 'artificial intelligence', 'ai tools'],
            'review-practice': ['review and practice', 'review practice', 'quick study', 'review'],
            'ell-practice':      ['practice speaking', 'speaking practice'],
            'ell-pronunciation': ['pronunciation', 'pronunciation coach', 'ell pronunciation'],
        };
        // Check translated labels for the current language first.
        const labels = Speech.getStarterLabels(Speech.getLang ? Speech.getLang() : null);
        const labelMap = {
            helpPage:         'help-page',
            helpLesson:       'help-page',
            keyConcepts:      'help-page',
            quiz:             'quiz',
            studyPlan:        'study-plan',
            askAnything:      'ask-anything',
            reviewPractice:   'review-practice',
            helpMe:           'ask-anything',
            aiCoach:          'ask-anything',
            ellPractice:      'ell-practice',
            ellPronunciation: 'ell-pronunciation',
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
     * Handle mic button click -- start or stop speech recognition.
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
                            handleStarter(matched);
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
     * Get (or create) the shared AudioContext, resuming it if suspended.
     * Must be called synchronously inside a user gesture to unlock iOS audio.
     *
     * @returns {AudioContext|null}
     */
    const getOrCreateAudioCtx = function() {
        const AudioCtx = window.AudioContext || window.webkitAudioContext;
        if (!AudioCtx) {
            return null;
        }
        if (!sharedAudioCtx) {
            try {
                sharedAudioCtx = new AudioCtx();
            } catch (e) {
                return null;
            }
        }
        if (sharedAudioCtx.state === 'suspended') {
            sharedAudioCtx.resume().catch(function() { /**/ });
        }
        return sharedAudioCtx;
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

    /** @type {HTMLElement|null} Stop button shown during TTS playback */
    var ttsStopBtn = null;

    /**
     * Remove the TTS stop button if present.
     */
    const removeTtsStopButton = function() {
        if (ttsStopBtn && ttsStopBtn.parentNode) {
            ttsStopBtn.parentNode.removeChild(ttsStopBtn);
        }
        ttsStopBtn = null;
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
        removeTtsStopButton();
    };

    /**
     * Split a response into speakable chunks. Each chunk is one or two
     * sentences bounded to ~220 chars, so the first chunk synthesizes in
     * 1–3s instead of waiting for the full response. Short interjections
     * are combined to avoid a flurry of tiny TTS calls.
     *
     * @param {string} text
     * @returns {string[]}
     */
    const splitTtsChunks = function(text) {
        var raw = String(text || '').split(/(?<=[.!?])\s+/);
        var chunks = [];
        var current = '';
        for (var i = 0; i < raw.length; i++) {
            var next = raw[i].trim();
            if (!next) { continue; }
            if (current === '') {
                current = next;
            } else if ((current + ' ' + next).length <= 220) {
                current = current + ' ' + next;
            } else {
                chunks.push(current);
                current = next;
            }
        }
        if (current) { chunks.push(current); }
        return chunks;
    };

    /** @type {Object<string, AudioBuffer>} Bounded cache of decoded TTS chunks. */
    var ttsChunkCache = {};

    /**
     * Fetch and decode a single TTS chunk; cache keyed on voice + text so
     * repeat plays are instant.
     *
     * @param {string} chunkText
     * @param {string} ttsUrl
     * @param {string|null} voice
     * @returns {Promise<AudioBuffer>}
     */
    const fetchAndDecodeTts = function(chunkText, ttsUrl, voice) {
        var key = (voice || '') + '|' + chunkText;
        if (ttsChunkCache[key]) {
            return Promise.resolve(ttsChunkCache[key]);
        }
        var formData = new URLSearchParams();
        formData.append('text', chunkText);
        formData.append('sesskey', sessKey);
        formData.append('courseid', String(courseId));
        if (voice) { formData.append('voice', voice); }
        return fetch(ttsUrl, {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: formData.toString()
        })
        .then(function(res) { return res.json(); })
        .then(function(data) {
            if (!data.audio) { throw new Error('no audio'); }
            var byteChars = atob(data.audio);
            var byteArr = new Uint8Array(byteChars.length);
            for (var i = 0; i < byteChars.length; i++) {
                byteArr[i] = byteChars.charCodeAt(i);
            }
            var ctx = getOrCreateAudioContext();
            if (!ctx || !ctx.decodeAudioData) { throw new Error('no audio context'); }
            return new Promise(function(resolve, reject) {
                ctx.decodeAudioData(byteArr.buffer, resolve, reject);
            });
        })
        .then(function(audioBuffer) {
            var keys = Object.keys(ttsChunkCache);
            if (keys.length > 50) { delete ttsChunkCache[keys[0]]; }
            ttsChunkCache[key] = audioBuffer;
            return audioBuffer;
        });
    };

    /**
     * Speak a long response with sentence level chunking. Fetches all
     * chunks in parallel so playback starts as soon as the first is ready
     * and later chunks stream in while earlier ones play.
     *
     * @param {string}   text
     * @param {string}   ttsUrl
     * @param {Function} callback
     */
    const speakWithOpenAIChunked = function(text, ttsUrl, callback) {
        var chunks = splitTtsChunks(text);
        if (chunks.length === 0) {
            if (callback) { callback(); }
            return;
        }
        var voice = localStorage.getItem('aica_tts_voice');
        var ctx = getOrCreateAudioContext();
        if (!ctx) { Speech.speak(text, callback); return; }

        var promises = chunks.map(function(c) {
            return fetchAndDecodeTts(c, ttsUrl, voice);
        });

        var stopped = false;
        var currentSource = null;
        currentAudio = {
            pause: function() {
                stopped = true;
                if (currentSource) {
                    try { currentSource.stop(); } catch (e) { /* ignore */ }
                }
            }
        };

        var playIdx = 0;
        var playNext = function() {
            if (stopped) { return; }
            if (playIdx >= chunks.length) {
                currentAudio = null;
                UI.stopMouthSync();
                if (callback) { callback(); }
                return;
            }
            var thisIdx = playIdx++;
            promises[thisIdx].then(function(audioBuffer) {
                if (stopped) { return; }
                var source = ctx.createBufferSource();
                source.buffer = audioBuffer;
                var analyser = ctx.createAnalyser();
                source.connect(analyser);
                analyser.connect(ctx.destination);
                if (thisIdx === 0) {
                    UI.startMouthSyncFromAnalyser(analyser);
                }
                currentSource = source;
                source.onended = function() {
                    currentSource = null;
                    playNext();
                };
                source.start(0);
            }).catch(function() {
                stopped = true;
                currentAudio = null;
                UI.stopMouthSync();
                Speech.speak(chunks.slice(thisIdx).join(' '), callback);
            });
        };
        playNext();
    };

    /**
     * Speak text using OpenAI TTS proxy (tts.php), falling back to browser TTS on error.
     *
     * For responses longer than 220 chars, routes through the chunked path
     * so time to first audio drops from 10–20s to 1–3s. Word highlighting
     * is only applied on the short (single call) path; mouth sync still
     * works in the chunked path because every chunk routes through the
     * same AudioContext analyser chain.
     *
     * @param {string}        text       Plain text to read aloud
     * @param {string}        ttsUrl     URL of tts.php
     * @param {Function}      callback   Called when speech ends or fails
     * @param {Array|null}    wordSpans  From UI.startWordHighlight -- for word highlighting
     * @param {string|null}   cleanText  Clean plain text matching the wordSpans
     */
    const speakWithOpenAI = function(text, ttsUrl, callback, wordSpans, cleanText) {
        if (text && text.length > 220) {
            return speakWithOpenAIChunked(text, ttsUrl, callback);
        }
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

                // â”€â”€ AudioContext path (iOS-compatible) â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
                // sharedAudioCtx was unlocked synchronously in handleSpeak() within
                // the user gesture; decoding + playing here (in a Promise chain) is
                // safe because the context is already running.
                const ctx = sharedAudioCtx;
                if (ctx && ctx.decodeAudioData) {
                    ctx.decodeAudioData(byteArr.buffer, function(audioBuffer) {
                        const source = ctx.createBufferSource();
                        source.buffer = audioBuffer;

                        // Route through analyser for SVG mouth sync.
                        const analyser = ctx.createAnalyser();
                        source.connect(analyser);
                        analyser.connect(ctx.destination);

                        // Duck-typed proxy so stopAllTts() can call .pause().
                        var startedAt = ctx.currentTime;
                        currentAudio = {
                            pause: function() {
                                try { source.stop(); } catch (e) { /**/ }
                            },
                            _duration: audioBuffer.duration,
                            _startedAt: startedAt
                        };

                        UI.startMouthSyncFromAnalyser(analyser);

                        if (wordSpans && wordSpans.length && cleanText) {
                            // Build word-weighted timing: longer words take more time,
                            // punctuation at end of word adds a pause.
                            var wordWeights = [];
                            var totalWeight = 0;
                            for (var w = 0; w < wordSpans.length; w++) {
                                var word = wordSpans[w].el.textContent;
                                // Base weight: character count (rough syllable proxy).
                                var weight = Math.max(word.length, 1);
                                // Punctuation pause: add extra weight for sentence/clause endings.
                                var lastChar = word.charAt(word.length - 1);
                                if (lastChar === '.' || lastChar === '!' || lastChar === '?') {
                                    weight += 4;
                                } else if (lastChar === ',' || lastChar === ';' || lastChar === ':') {
                                    weight += 2;
                                }
                                totalWeight += weight;
                                wordWeights.push(totalWeight);
                            }
                            var rafId;
                            var onFrame = function() {
                                if (!currentAudio) { return; }
                                var elapsed = ctx.currentTime - startedAt;
                                var progress = Math.min(elapsed / audioBuffer.duration, 1);
                                var target = progress * totalWeight;
                                // Binary search for the word at this time position.
                                var lo = 0, hi = wordWeights.length - 1, idx = 0;
                                while (lo <= hi) {
                                    var mid = (lo + hi) >>> 1;
                                    if (wordWeights[mid] <= target) {
                                        lo = mid + 1;
                                    } else {
                                        idx = mid;
                                        hi = mid - 1;
                                    }
                                }
                                UI.highlightWordAt(wordSpans, wordSpans[idx].start);
                                rafId = requestAnimationFrame(onFrame);
                            };
                            rafId = requestAnimationFrame(onFrame);
                            source.onended = function() {
                                cancelAnimationFrame(rafId);
                                currentAudio = null;
                                UI.stopMouthSync();
                                if (callback) { callback(); }
                            };
                        } else {
                            source.onended = function() {
                                currentAudio = null;
                                UI.stopMouthSync();
                                if (callback) { callback(); }
                            };
                        }
                        source.start(0);
                    }, function() {
                        // decodeAudioData failed -- fall back to browser TTS.
                        currentAudio = null;
                        Speech.speak(text, callback);
                    });
                    return;
                }

                // â”€â”€ HTMLAudioElement fallback (non-iOS / no AudioContext) â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
                const blob = new Blob([byteArr], {type: data.type || 'audio/mpeg'});
                const objUrl = URL.createObjectURL(blob);
                const audio = new Audio(objUrl);
                currentAudio = audio;
                UI.startMouthSync(audio);
                var hlRafId = null;
                if (wordSpans && wordSpans.length && cleanText) {
                    // Word-weighted timing for HTMLAudio fallback.
                    var hwWeights = [];
                    var hwTotal = 0;
                    for (var hw = 0; hw < wordSpans.length; hw++) {
                        var wrd = wordSpans[hw].el.textContent;
                        var wt = Math.max(wrd.length, 1);
                        var lc = wrd.charAt(wrd.length - 1);
                        if (lc === '.' || lc === '!' || lc === '?') { wt += 4; }
                        else if (lc === ',' || lc === ';' || lc === ':') { wt += 2; }
                        hwTotal += wt;
                        hwWeights.push(hwTotal);
                    }
                    var hlFrame = function() {
                        if (!currentAudio || !audio.duration) {
                            hlRafId = requestAnimationFrame(hlFrame);
                            return;
                        }
                        var prog = Math.min(audio.currentTime / audio.duration, 1);
                        var tgt = prog * hwTotal;
                        var lo2 = 0, hi2 = hwWeights.length - 1, idx2 = 0;
                        while (lo2 <= hi2) {
                            var m2 = (lo2 + hi2) >>> 1;
                            if (hwWeights[m2] <= tgt) { lo2 = m2 + 1; }
                            else { idx2 = m2; hi2 = m2 - 1; }
                        }
                        UI.highlightWordAt(wordSpans, wordSpans[idx2].start);
                        hlRafId = requestAnimationFrame(hlFrame);
                    };
                    hlRafId = requestAnimationFrame(hlFrame);
                }
                audio.addEventListener('ended', function() {
                    if (hlRafId) { cancelAnimationFrame(hlRafId); }
                    URL.revokeObjectURL(objUrl);
                    currentAudio = null;
                    UI.stopMouthSync();
                    if (callback) { callback(); }
                });
                audio.addEventListener('error', function() {
                    if (hlRafId) { cancelAnimationFrame(hlRafId); }
                    URL.revokeObjectURL(objUrl);
                    currentAudio = null;
                    UI.stopMouthSync();
                    Speech.speak(text, callback);
                });
                audio.play().catch(function() {
                    if (hlRafId) { cancelAnimationFrame(hlRafId); }
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

        // Show a stop button below the speaking message.
        var messagesContainer = UI.getElements().messages;
        if (messagesContainer) {
            ttsStopBtn = document.createElement('button');
            ttsStopBtn.className = 'aica-stop-stream-btn aica-tts-stop-btn';
            ttsStopBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">'
                + '<rect x="4" y="4" width="16" height="16" rx="2"/></svg> Stop reading';
            ttsStopBtn.addEventListener('click', function() {
                stopAllTts();
                UI.setSpeakingState(msgEl, false);
            });
            messagesContainer.appendChild(ttsStopBtn);
        }

        // Unlock AudioContext synchronously within the user gesture (required for iOS Chrome).
        // This must happen before any async operation; decoding/playing in the
        // fetch callback is then safe because the context is already running.
        getOrCreateAudioCtx();

        const onDone = function() {
            UI.setSpeakingState(msgEl, false);
            UI.stopWordHighlight();
            removeTtsStopButton();
        };

        const ttsUrl = getTtsUrl();
        if (ttsUrl) {
            const cleanText = Speech.cleanTextForSpeech(text);
            const wordSpans = UI.startWordHighlight(msgEl, cleanText);
            speakWithOpenAI(text, ttsUrl, onDone, wordSpans, cleanText);
        } else {
            // Browser TTS: enable word-by-word highlighting via onboundary events.
            const cleanText = Speech.cleanTextForSpeech(text);
            const wordSpans = UI.startWordHighlight(msgEl, cleanText);
            Speech.speak(text, onDone, wordSpans ? function(charIndex) {
                UI.highlightWordAt(wordSpans, charIndex);
            } : null);
        }
    };

    /**
     * Add a user message to the chat and History tab.
     *
     * @param {string} text
     * @param {number|null} ts
     * @param {{skipHistory?:boolean}=} options
     * @returns {HTMLElement}
     */
    const addUserMsg = function(text, ts, options) {
        options = options || {};
        if (!options.skipHistory) {
            recordConversationMessage('user', text, ts || Date.now());
        }
        return UI.addMessage('user', text, null, ts || null);
    };

    /**
     * Add an assistant message with the speak button always present (when TTS is available).
     * Use this instead of UI.addMessage('assistant', ...) everywhere so every
     * assistant bubble consistently has the speaker icon.
     *
     * @param {string}      text  Message text
     * @param {number|null} ts    Optional Unix timestamp (ms)
     * @param {{skipHistory?:boolean,sourceType?:string|null,alreadyClean?:boolean}=} options
     * @returns {HTMLElement}
     */
    const addAssistantMsg = function(text, ts, options) {
        options = options || {};
        const parsed = options.alreadyClean ? {
            text: (text || '') + '',
            suggestions: [],
            sourceType: options.sourceType || null,
            sourceCmid: options.sourceCmid || null,
        } : parseAssistantDecorators(text);
        const displayText = parsed.text;
        const sourceType = options.sourceType || parsed.sourceType;
        const sourceCmid = options.sourceCmid || parsed.sourceCmid;
        if (!options.skipHistory) {
            recordConversationMessage('assistant', displayText, ts || Date.now());
        }
        const fn = (getTtsUrl() || Speech.isTTSSupported()) ? handleSpeak : null;
        const el = UI.addMessage('assistant', displayText, fn, ts || null);
        // For history-loaded messages, create a clickable pill with course URL.
        if (sourceType && el) {
            var histMeta = {
                courseurl: (new URL('/course/view.php?id=' + courseId,
                    window.location.origin)).href,
                pageurl: '',
                pagetitle: ''
            };
            el.appendChild(createSourcePill(sourceType, histMeta, sourceCmid));
        }
        return el;
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
     * Handle quiz button click -- toggles quiz mode on/off.
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
                const llmSelection = getResolvedLlmSelection(UI.getElements().root);
                Repo.generateQuiz(
                    courseId,
                    count,
                    topic,
                    cmidForQuiz,
                    llmSelection.enabled ? llmSelection.provider : '',
                    llmSelection.enabled ? llmSelection.model : ''
                ).then(function(result) {
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
                        // Post score-specific encouragement to chat.
                        const pctVal = total > 0 ? Math.round((score / total) * 100) : 0;
                        var encourageMsg;
                        if (pctVal >= 80) {
                            encourageMsg = 'Quiz complete: **' + score + '/' + total + '** (' + pctVal + '%) on *' + topic + '*. ' +
                                'Excellent work! You clearly understand this material. Ready for a new challenge?';
                        } else if (pctVal >= 50) {
                            encourageMsg = 'Quiz complete: **' + score + '/' + total + '** (' + pctVal + '%) on *' + topic + '*. ' +
                                'Solid effort! A quick review of the tricky parts will get you even further.';
                        } else {
                            encourageMsg = 'Quiz complete: **' + score + '/' + total + '** (' + pctVal + '%) on *' + topic + '*. ' +
                                'This topic trips a lot of people up, but that\'s OK. Let\'s review the material together and try again.';
                        }
                        addAssistantMsg(encourageMsg);
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
     * Save the current page/topic as the most recent study session topic.
     * Called after the user sends a message.
     */
    const updateLastSession = function() {
        try {
            const topic = currentPageTitle || (quizTopics && quizTopics[0] ? quizTopics[0].name : '');
            if (!topic) {
                return;
            }
            const key = 'aica_last_session_' + courseId;
            localStorage.setItem(key, JSON.stringify({topic: topic, ts: Date.now()}));
        } catch (e) { /**/ }
    };

    /**
     * Show a personalised welcome-back assistant message + action chips if there
     * is a recent session to continue.  Called on widget open (after history loads).
     */
    const checkWelcomeBack = function() {
        try {
            const key = 'aica_last_session_' + courseId;
            const stored = JSON.parse(localStorage.getItem(key) || 'null');
            if (!stored || !stored.topic) {
                return;
            }
            const lastSessionTs = normalizeTimestamp(stored.ts);
            if (!lastSessionTs) {
                return;
            }

            const msSince = Math.max(0, Date.now() - lastSessionTs);
            const hoursSince = msSince / 3600000;
            if (hoursSince < 1) {
                return; // Less than 1 hour — skip welcome back
            }
            const daysSince = msSince / 86400000;
            if (daysSince > 14) {
                return; // Too long ago
            }
            const topic = stored.topic;
            const name = firstName || 'there';

            // Study stats line.
            let studyNote = '';
            try {
                const sessions = JSON.parse(localStorage.getItem('aica_study_sessions_' + courseId) || '[]');
                if (sessions.length >= 2) {
                    const totalMins = sessions.reduce(function(sum, s) { return sum + (s.minutes || 0); }, 0);
                    studyNote = '\n\nYou\'ve completed **' + sessions.length + ' study sessions** (' + totalMins + ' min total) in this course.';
                }
            } catch (e) { /**/ }

            // Quiz note for the same topic.
            let quizNote = '';
            let chipSuffix = '';
            try {
                const hist = JSON.parse(localStorage.getItem('aica_quiz_history_' + courseId) || '[]');
                for (var i = hist.length - 1; i >= 0; i--) {
                    if (hist[i].topic && hist[i].topic.toLowerCase().indexOf(topic.toLowerCase().slice(0, 8)) >= 0) {
                        const pct = Math.round((hist[i].score / hist[i].total) * 100);
                        quizNote = '\n\nYour last quiz on **' + hist[i].topic + '** scored **' + pct + '%**.';
                        chipSuffix = ' (last quiz: ' + pct + '%)';
                        break;
                    }
                }
            } catch (e) { /**/ }

            const daysAgo = Math.max(1, Math.round(daysSince));
            const timeStr = formatRelativeTimestamp(lastSessionTs) || 'recently';

            // Extended re-engagement for 5+ day absence.
            let msg;
            let chips;
            if (daysSince >= 5) {
                msg = 'Welcome back, **' + name + '**! It\'s been a while (' + daysAgo + ' days). \ud83d\udc4b\n\n' +
                    'No worries, picking back up is what matters most. ' +
                    'Last time you were working on **' + topic + '**.' +
                    studyNote + quizNote +
                    '\n\nWould you like a quick refresher, or would you rather start fresh?';
                chips = [
                    'Give me a refresher on ' + topic,
                    'Continue: ' + topic + chipSuffix,
                    'What should I focus on?',
                    'Start fresh'
                ];
            } else {
                msg = 'Welcome back, **' + name + '**! \ud83d\udc4b\n\n' +
                    'Last time you were studying **' + topic + '** (' + timeStr + ').' +
                    studyNote + quizNote +
                    '\n\nWould you like to pick up where you left off?';
                chips = [
                    'Continue: ' + topic + chipSuffix,
                    'Show my progress',
                    'Start something new'
                ];
            }

            // Show after a brief delay so history messages render first.
            setTimeout(function() {
                addAssistantMsg(msg);
                setTimeout(function() {
                    UI.showSuggestions(chips, handleSuggestionClick);
                }, 150);
            }, 600);
        } catch (e) { /**/ }
    };

    /**
     * Handle the Review & Practice chip (legacy Quick Study flow).
     * Shows a time picker + topic selector (with objectives/modules sub-select),
     * recent sessions with Resume buttons, then sends a focused study prompt.
     */
    const handleQuickStudy = function() {
        const root = document.getElementById('local-ai-course-assistant');
        const drawer = root ? root.querySelector('.local-ai-course-assistant__drawer') : null;
        if (!drawer) {
            return;
        }

        // Toggle: if already open, close it.
        const existing = drawer.querySelector('.aica-study-setup');
        if (existing) {
            existing.remove();
            UI.showStarters();
            return;
        }

        // Hide messages/starters while panel is showing.
        drawer.classList.add('local-ai-course-assistant__drawer--quiz-setup');

        const panel = document.createElement('div');
        panel.className = 'aica-study-setup aica-quiz-setup';

        // Title.
        const title = document.createElement('h3');
        title.className = 'aica-quiz-setup__title';
        title.textContent = 'Review & Practice';
        panel.appendChild(title);

        // --- Recent sessions ---
        try {
            const sessions = JSON.parse(localStorage.getItem('aica_study_sessions_' + courseId) || '[]');
            const recent = sessions.slice(-3).reverse();
            if (recent.length > 0) {
                const recentLabel = document.createElement('p');
                recentLabel.className = 'aica-quiz-setup__label';
                recentLabel.textContent = 'Recent review sessions';
                panel.appendChild(recentLabel);

                const recentList = document.createElement('div');
                recentList.className = 'aica-study-setup__recent-list';
                recent.forEach(function(sess) {
                    const item = document.createElement('div');
                    item.className = 'aica-study-setup__recent-item';

                    const info = document.createElement('span');
                    info.className = 'aica-study-setup__recent-info';
                    const dateStr = new Date(sess.ts).toLocaleDateString(undefined, {month: 'short', day: 'numeric'});
                    info.textContent = sess.topic + ' \u00b7 ' + sess.minutes + ' min \u00b7 ' + dateStr;
                    item.appendChild(info);

                    const resumeBtn = document.createElement('button');
                    resumeBtn.type = 'button';
                    resumeBtn.className = 'aica-study-setup__resume-btn';
                    resumeBtn.textContent = 'Continue';
                    resumeBtn.addEventListener('click', function() {
                        panel.remove();
                        drawer.classList.remove('local-ai-course-assistant__drawer--quiz-setup');
                        const prompt = 'Let\'s continue reviewing and practicing "' + sess.topic +
                            '" from where I left off. Briefly remind me what we covered, then help ' +
                            'me practice the next most important thing.';
                        UI.getElements().input.value = prompt;
                        UI.autoResizeInput();
                        UI.updateSendButton();
                        handleSend();
                    });
                    item.appendChild(resumeBtn);
                    recentList.appendChild(item);
                });
                panel.appendChild(recentList);
            }
        } catch (e) { /**/ }

        // --- Time picker ---
        const timeLabel = document.createElement('p');
        timeLabel.className = 'aica-quiz-setup__label';
        timeLabel.textContent = 'How much time do you have to review?';
        panel.appendChild(timeLabel);

        const timeRow = document.createElement('div');
        timeRow.className = 'aica-quiz-setup__count-row';
        const times = [5, 10, 15, 30];
        let selectedMinutes = 10;
        times.forEach(function(n) {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'aica-quiz-setup__count-btn' +
                (n === selectedMinutes ? ' aica-quiz-setup__count-btn--selected' : '');
            btn.textContent = n + ' min';
            btn.dataset.mins = n;
            btn.addEventListener('click', function() {
                selectedMinutes = n;
                timeRow.querySelectorAll('.aica-quiz-setup__count-btn').forEach(function(b) {
                    b.classList.toggle('aica-quiz-setup__count-btn--selected',
                        parseInt(b.dataset.mins) === selectedMinutes);
                });
            });
            timeRow.appendChild(btn);
        });
        panel.appendChild(timeRow);

        // --- Topic selector ---
        const topicLabel = document.createElement('p');
        topicLabel.className = 'aica-quiz-setup__label';
        topicLabel.textContent = 'What would you like to review?';
        panel.appendChild(topicLabel);

        const select = document.createElement('select');
        select.className = 'aica-quiz-setup__topic-select';

        const addOption = function(value, text) {
            const opt = document.createElement('option');
            opt.value = value;
            opt.textContent = text;
            select.appendChild(opt);
        };

        addOption('__guided__', 'AI-guided (based on your progress)');
        if (currentPageTitle) {
            addOption('', currentPageTitle + ' (current page)');
        }

        const hasObjectives = Array.isArray(learningObjectives) && learningObjectives.length > 0;
        const hasModules = Array.isArray(moduleTitles) && moduleTitles.length > 0;
        if (hasObjectives) {
            addOption('__objectives__', 'Learning objectives\u2026');
        }
        if (hasModules) {
            addOption('__modules__', 'Module topics\u2026');
        }
        if (Array.isArray(quizTopics) && quizTopics.length > 0) {
            quizTopics.forEach(function(t) { addOption(t.name, t.name); });
        }
        addOption('__custom__', 'Custom topic\u2026');
        panel.appendChild(select);

        // Sub-selector for objectives/modules (hidden until parent chosen).
        const subSelect = document.createElement('select');
        subSelect.className = 'aica-quiz-setup__topic-select aica-quiz-setup__sub-select';
        subSelect.style.display = 'none';
        panel.appendChild(subSelect);

        // Custom input.
        const customInput = document.createElement('input');
        customInput.type = 'text';
        customInput.className = 'aica-quiz-setup__custom-input';
        customInput.placeholder = 'Enter a topic...';
        customInput.style.display = 'none';
        panel.appendChild(customInput);

        select.addEventListener('change', function() {
            customInput.style.display = select.value === '__custom__' ? '' : 'none';
            if (select.value === '__custom__') { customInput.focus(); }

            const isObj = select.value === '__objectives__';
            const isMod = select.value === '__modules__';
            subSelect.style.display = (isObj || isMod) ? '' : 'none';
            if (isObj || isMod) {
                subSelect.innerHTML = '';
                const placeholder = document.createElement('option');
                placeholder.value = '';
                placeholder.textContent = '\u2014 select a sub-topic \u2014';
                subSelect.appendChild(placeholder);
                const items = isObj ? learningObjectives : moduleTitles;
                items.forEach(function(item) {
                    const opt = document.createElement('option');
                    opt.value = item.name;
                    opt.textContent = item.name;
                    subSelect.appendChild(opt);
                });
            }
        });

        // Start button.
        const startBtn = document.createElement('button');
        startBtn.type = 'button';
        startBtn.className = 'aica-quiz-setup__start';
        startBtn.textContent = 'Start review';
        startBtn.addEventListener('click', function() {
            let topic;
            if (select.value === '__custom__') {
                topic = customInput.value.trim() || 'this topic';
            } else if (select.value === '__objectives__' || select.value === '__modules__') {
                topic = subSelect.value || null;
                if (!topic) { subSelect.focus(); return; }
            } else if (select.value === '__guided__') {
                topic = null;
            } else {
                topic = select.value || currentPageTitle;
            }

            panel.remove();
            drawer.classList.remove('local-ai-course-assistant__drawer--quiz-setup');

            let prompt;
            if (topic) {
                prompt = 'I have ' + selectedMinutes + ' minutes. Please help me review and ' +
                    'practice "' + topic + '" in a focused ' + selectedMinutes +
                    '-minute session. Start with the most important concept, keep responses ' +
                    'concise, and quiz me or coach me step by step.';
            } else {
                prompt = 'I have ' + selectedMinutes + ' minutes to review and practice. Based ' +
                    'on my recent activity and this course, what should I focus on? Give me a ' +
                    'focused ' + selectedMinutes + '-minute review session \u2014 start immediately ' +
                    'with the most important topic, keep responses concise, and include practice.';
            }

            // Track study session.
            try {
                const sessionKey = 'aica_study_sessions_' + courseId;
                const sessions = JSON.parse(localStorage.getItem(sessionKey) || '[]');
                sessions.push({topic: topic || 'AI-guided', minutes: selectedMinutes, ts: Date.now()});
                if (sessions.length > 20) { sessions.splice(0, sessions.length - 20); }
                localStorage.setItem(sessionKey, JSON.stringify(sessions));
            } catch (e) { /**/ }

            const els = UI.getElements();
            els.input.value = prompt;
            UI.autoResizeInput();
            UI.updateSendButton();
            handleSend();
        });
        panel.appendChild(startBtn);

        // Cancel button.
        const cancelBtn = document.createElement('button');
        cancelBtn.type = 'button';
        cancelBtn.className = 'aica-quiz-setup__cancel';
        cancelBtn.textContent = 'Cancel';
        cancelBtn.addEventListener('click', function() {
            panel.remove();
            drawer.classList.remove('local-ai-course-assistant__drawer--quiz-setup');
            UI.showStarters();
        });
        panel.appendChild(cancelBtn);

        drawer.appendChild(panel);
    };

    /**
     * Show a dedicated progress panel in the drawer listing study sessions and quiz history.
     */
    const handleShowProgress = function() {
        const root = document.getElementById('local-ai-course-assistant');
        const drawer = root ? root.querySelector('.local-ai-course-assistant__drawer') : null;
        if (!drawer) { return; }

        // Toggle.
        const existing = drawer.querySelector('.aica-progress-panel');
        if (existing) { existing.remove(); return; }

        const panel = document.createElement('div');
        panel.className = 'aica-progress-panel aica-settings-panel';

        // Header.
        const header = document.createElement('div');
        header.className = 'aica-settings-panel__header';
        const titleEl = document.createElement('span');
        titleEl.className = 'aica-settings-panel__title';
        titleEl.textContent = 'My Progress';
        const closeBtn = document.createElement('button');
        closeBtn.type = 'button';
        closeBtn.className = 'aica-settings-panel__close';
        closeBtn.setAttribute('aria-label', 'Close');
        closeBtn.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"' +
            ' fill="currentColor" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5' +
            ' 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>';
        closeBtn.addEventListener('click', function() { panel.remove(); });
        header.appendChild(titleEl);
        header.appendChild(closeBtn);
        panel.appendChild(header);

        const content = document.createElement('div');
        content.className = 'aica-settings-panel__content';

        // Study sessions section.
        const sessSection = document.createElement('div');
        sessSection.className = 'aica-settings-panel__section';
        const sessHead = document.createElement('h3');
        sessHead.className = 'aica-settings-panel__section-title';
        let sessions = [];
        try { sessions = JSON.parse(localStorage.getItem('aica_study_sessions_' + courseId) || '[]'); } catch (e) { /**/ }
        sessHead.textContent = 'Review & Practice sessions (' + sessions.length + ')';
        sessSection.appendChild(sessHead);
        if (sessions.length === 0) {
            const p = document.createElement('p');
            p.className = 'aica-settings-panel__empty-note';
            p.textContent = 'No review sessions yet. Start a Review & Practice session!';
            sessSection.appendChild(p);
        } else {
            const totalMins = sessions.reduce(function(s, x) { return s + (x.minutes || 0); }, 0);
            const totalPara = document.createElement('p');
            totalPara.className = 'aica-settings-panel__empty-note';
            totalPara.style.marginBottom = '6px';
            totalPara.textContent = sessions.length + ' sessions \u00b7 ' + totalMins + ' minutes total';
            sessSection.appendChild(totalPara);
            sessions.slice().reverse().slice(0, 10).forEach(function(sess) {
                const item = document.createElement('div');
                item.className = 'aica-settings-panel__bookmark-item';
                const txt = document.createElement('p');
                txt.className = 'aica-settings-panel__bookmark-text';
                const dateStr = new Date(sess.ts).toLocaleDateString(undefined, {month: 'short', day: 'numeric'});
                txt.textContent = sess.topic + ' \u00b7 ' + sess.minutes + ' min \u00b7 ' + dateStr;
                item.appendChild(txt);
                sessSection.appendChild(item);
            });
        }
        content.appendChild(sessSection);

        // Quiz history section.
        const quizSection = document.createElement('div');
        quizSection.className = 'aica-settings-panel__section';
        const quizHead = document.createElement('h3');
        quizHead.className = 'aica-settings-panel__section-title';
        let quizHist = [];
        try { quizHist = JSON.parse(localStorage.getItem('aica_quiz_history_' + courseId) || '[]'); } catch (e) { /**/ }
        quizHead.textContent = 'Quiz history (' + quizHist.length + ')';
        quizSection.appendChild(quizHead);
        if (quizHist.length === 0) {
            const p = document.createElement('p');
            p.className = 'aica-settings-panel__empty-note';
            p.textContent = 'No quizzes taken yet.';
            quizSection.appendChild(p);
        } else {
            quizHist.slice().reverse().slice(0, 10).forEach(function(q) {
                const item = document.createElement('div');
                item.className = 'aica-settings-panel__bookmark-item';
                const txt = document.createElement('p');
                txt.className = 'aica-settings-panel__bookmark-text';
                const pct = q.total > 0 ? Math.round((q.score / q.total) * 100) : 0;
                const dateStr = q.date ? new Date(q.date).toLocaleDateString(undefined, {month: 'short', day: 'numeric'}) : '';
                txt.textContent = q.topic + ' \u00b7 ' + pct + '% \u00b7 ' + dateStr;
                item.appendChild(txt);
                quizSection.appendChild(item);
            });
        }
        content.appendChild(quizSection);

        // Clear progress button.
        const clearSection = document.createElement('div');
        clearSection.className = 'aica-settings-panel__section';
        const clearBtn = document.createElement('button');
        clearBtn.type = 'button';
        clearBtn.className = 'aica-quiz-setup__cancel';
        clearBtn.style.cssText = 'display:block;width:100%;padding:10px;font-size:0.85em;';
        clearBtn.textContent = 'Clear all progress data';
        clearBtn.addEventListener('click', function() {
            if (!window.confirm('Clear all study sessions and quiz history for this course?')) { return; }
            try {
                localStorage.removeItem('aica_study_sessions_' + courseId);
                localStorage.removeItem('aica_quiz_history_' + courseId);
                localStorage.removeItem('aica_last_session_' + courseId);
            } catch (e) { /**/ }
            panel.remove();
        });
        clearSection.appendChild(clearBtn);
        content.appendChild(clearSection);

        panel.appendChild(content);
        drawer.appendChild(panel);
    };

    /**
     * Handle toggle button click.
     * Suppressed if the toggle was just used to drag-reposition the widget.
     * If the drawer is already open, acts like the Home button (shows starters).
     */
    const handleToggle = function() {
        if (UI.wasToggleDragged()) {
            return;
        }
        // If drawer is already open, act like the Home/Reset button.
        if (UI.isOpen()) {
            handleReset();
            return;
        }
        // Remove first-visit pulse on first click and mark course as visited.
        var toggleEl = document.getElementById('local-ai-course-assistant-toggle');
        var isFirstVisit = toggleEl && toggleEl.classList.contains('aica-first-visit');
        if (isFirstVisit) {
            toggleEl.classList.remove('aica-first-visit');
        }
        // Pre-apply welcome class before opening so the drawer doesn't flash
        // empty content on mobile before the welcome panel is injected.
        if (isFirstVisit) {
            UI.preWelcome();
        }
        const opened = UI.toggleDrawer();
        if (opened) {
            setBottomMode('chat', {force: true});
            syncVoicePanel();
        }
        if (opened && quizLocked && !historyLoaded) {
            // Show quiz-locked notice instead of normal history/starters flow.
            // Explicitly clear any messages to prevent previous chat from being visible (cheating risk).
            historyLoaded = true;
            UI.clearMessages();
            setConversationHistory([]);
            Str.get_string('chat:quiz_locked', 'local_ai_course_assistant').then(function(msg) {
                addAssistantMsg(msg, null, {skipHistory: true});
                return;
            }).catch(function() {
                addAssistantMsg('SOLA is paused during quizzes to support academic integrity. Good luck!', null, {skipHistory: true});
            });
            UI.setInputEnabled(false);
            return;
        }
        if (opened) {
            if (!historyLoaded) {
                loadHistory();
                updateStreak();
                checkWelcomeBack();
                checkSpacedRepetition();
            }
            checkAndShowIntro();
        }
    };

    /**
     * Check if user needs to see intro, show if needed.
     */
    const checkAndShowIntro = function() {
        const root = UI.getElements().root || document.getElementById('local-ai-course-assistant');
        if (!root || isIntroDismissed(root)) {
            return;
        }
        UI.showIntroModal(function() {
            markIntroDismissed(root);
        });
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
                // Already opened today -- no change, no notification.
                return;
            }

            const yesterday = new Date(Date.now() - 86400000).toISOString().slice(0, 10);
            if (lastDate === yesterday) {
                streak += 1; // Consecutive day.
            } else {
                streak = 1; // Gap or first time -- start fresh.
            }

            localStorage.setItem(key, JSON.stringify({streak: streak, lastDate: today}));

            // Show milestone notification (2+ day streaks).
            if (streak >= 2) {
                const label = streak + '-day learning streak!';
                UI.showNotification('\uD83D\uDD25 ' + label);
            }
        } catch (e) {
            // localStorage disabled -- skip silently.
        }
    };

    /**
     * Check for topics due for spaced repetition review (studied 3-7 days ago).
     * Shows a "Want a refresher?" chip if a topic qualifies. Runs once per session.
     */
    const checkSpacedRepetition = function() {
        try {
            var now = Date.now();
            var minAge = 3 * 86400000; // 3 days
            var maxAge = 14 * 86400000; // 14 days
            var shown = {};

            // Gather topics from study sessions and quiz history.
            var candidates = [];
            var sessions = JSON.parse(localStorage.getItem('aica_study_sessions_' + courseId) || '[]');
            sessions.forEach(function(s) {
                if (s.topic && !shown[s.topic]) {
                    var age = now - s.ts;
                    if (age >= minAge && age <= maxAge) {
                        candidates.push({topic: s.topic, age: age, type: 'study'});
                        shown[s.topic] = true;
                    }
                }
            });
            var quizHist = JSON.parse(localStorage.getItem('aica_quiz_history_' + courseId) || '[]');
            quizHist.forEach(function(q) {
                if (q.topic && !shown[q.topic]) {
                    var age = now - q.date;
                    if (age >= minAge && age <= maxAge) {
                        var pct = q.total > 0 ? Math.round((q.score / q.total) * 100) : 0;
                        candidates.push({topic: q.topic, age: age, type: 'quiz', pct: pct});
                        shown[q.topic] = true;
                    }
                }
            });

            if (candidates.length === 0) { return; }

            // Pick the best candidate: prioritise low quiz scores, then oldest.
            candidates.sort(function(a, b) {
                if (a.type === 'quiz' && b.type !== 'quiz') { return -1; }
                if (b.type === 'quiz' && a.type !== 'quiz') { return 1; }
                if (a.type === 'quiz' && b.type === 'quiz') { return a.pct - b.pct; }
                return b.age - a.age;
            });
            var best = candidates[0];
            var daysAgo = Math.round(best.age / 86400000);

            // Check if we've already shown a spaced rep nudge for this topic recently.
            var nudgeKey = 'aica_sr_nudge_' + courseId;
            var lastNudge = JSON.parse(localStorage.getItem(nudgeKey) || 'null');
            if (lastNudge && lastNudge.topic === best.topic && (now - lastNudge.ts) < 86400000) {
                return; // Already nudged about this topic today.
            }
            localStorage.setItem(nudgeKey, JSON.stringify({topic: best.topic, ts: now}));

            var label = best.type === 'quiz' && best.pct !== undefined
                ? best.topic + ' (scored ' + best.pct + '%, ' + daysAgo + 'd ago)'
                : best.topic + ' (' + daysAgo + 'd ago)';

            setTimeout(function() {
                var msg = 'Research shows that reviewing material a few days later strengthens memory. ' +
                    'You studied **' + best.topic + '** ' + daysAgo + ' days ago. Want a quick refresher?';
                addAssistantMsg(msg);
                setTimeout(function() {
                    UI.showSuggestions([
                        'Quick refresher on ' + best.topic,
                        'Quiz me on ' + best.topic,
                        'No thanks'
                    ], handleSuggestionClick);
                }, 150);
            }, 2000);
        } catch (e) { /**/ }
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
     * Show the chat greeting message (custom from admin settings, or default).
     */
    const showGreeting = function() {
        if (customGreeting) {
            var msg = customGreeting
                .replace(/\{\{firstname\}\}/gi, firstName || 'there')
                .replace(/\{\{coursename\}\}/gi, courseName);
            addAssistantMsg(msg, null, {skipHistory: true});
            return;
        }
        var rootEl = document.getElementById('local-ai-course-assistant');
        var shortName = (rootEl && rootEl.dataset.shortname) || 'SOLA';
        var displayName = (rootEl && rootEl.dataset.displayname) || 'Saylor Online Learning Assistant';
        var institutionName = (rootEl && rootEl.dataset.institution) || 'Saylor University';
        // Build identity string: "SOLA (Saylor Online Learning Assistant)" or just the short name if they match.
        var identity = shortName;
        if (displayName && displayName !== shortName) {
            identity = shortName + ' (' + displayName + ')';
        }
        Str.get_string('chat:greeting', 'local_ai_course_assistant').then(function(greeting) {
            // Replace placeholders with configured values.
            var msg = greeting.replace('{$a}', firstName || 'there');
            msg = msg.replace('{INSTITUTION}', institutionName);
            msg = msg.replace(/SOLA/g, identity);
            addAssistantMsg(msg, null, {skipHistory: true});
            return;
        }).catch(function() {
            addAssistantMsg('Hi, ' + (firstName || 'there') + '! I\'m ' + identity +
                ', your ' + institutionName + ' online learning assistant.', null, {skipHistory: true});
        });
    };

    /**
     * Load conversation history.
     */
    const loadHistory = function() {
        historyLoaded = true;
        Repo.getHistory(courseId).then(function(result) {
            setConversationHistory(result && result.messages ? result.messages : []);
            if (result.messages && result.messages.length > 0) {
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
                        const parsed = parseAssistantDecorators(text);
                        text = parsed.text;
                        lastSuggestions = parsed.suggestions;
                        addAssistantMsg(text, msg.timecreated ? msg.timecreated * 1000 : null, {
                            skipHistory: true,
                            sourceType: parsed.sourceType,
                            sourceCmid: parsed.sourceCmid,
                            alreadyClean: true,
                        });
                    } else {
                        addUserMsg(text, msg.timecreated ? msg.timecreated * 1000 : null, {skipHistory: true});
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
                showGreeting();
            }
        }).catch(function() {
            setConversationHistory([]);
            showGreeting();
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

        // Route typed text through the active voice session (Practice Speaking or Pronunciation).
        if (Realtime.isConnected()) {
            UI.clearInput();
            UI.autoResizeInput();
            UI.updateSendButton();
            Realtime.sendText(text);
            return;
        }
        if (Voice.isConnected()) {
            UI.clearInput();
            UI.autoResizeInput();
            UI.updateSendButton();
            Voice.sendText(text);
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

        setBottomMode('chat', {force: true});
        sending = true;
        sessionMessageCount++;
        UI.hideStarters();
        UI.setInputEnabled(false);
        UI.clearInput();
        var inputEl = UI.getElements().input;
        if (inputEl) { inputEl.removeAttribute('aria-invalid'); }

        // Track last session topic for personalized welcome-back.
        updateLastSession();

        // Add user message.
        addUserMsg(text, null);
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
        try {
            var coachStyle = localStorage.getItem('aica_coaching_style');
            if (coachStyle) { postData.coachingstyle = coachStyle; }
        } catch (e) { /**/ }

        // Detect time constraint in user message (e.g. "I only have 10 minutes").
        var timeMatch = text.match(/(?:i\s+(?:only\s+)?have|got)\s+(\d+)\s*min/i);
        if (timeMatch) {
            postData.timelimit = parseInt(timeMatch[1], 10);
        }

        // First-generation student support.
        try {
            if (localStorage.getItem('aica_firstgen') === '1') { postData.firstgen = 1; }
        } catch (e) { /**/ }

        // Course completion percentage.
        var rootEl = document.getElementById('local-ai-course-assistant');
        var completionPct = rootEl ? (parseInt(rootEl.dataset.completionpct, 10) || 0) : 0;
        if (completionPct > 0) {
            postData.completion = completionPct;
        }
        // Interaction type for analytics tracking.
        if (quizModeActive) {
            postData.interaction_type = 'quiz';
        } else if (practiceSessionType === 'conversation') {
            postData.interaction_type = 'practice_conversation';
        } else if (practiceSessionType === 'pronunciation') {
            postData.interaction_type = 'practice_pronunciation';
        } else if (typeof activeBottomMode !== 'undefined' && activeBottomMode === 'voice') {
            postData.interaction_type = 'voice';
        } else {
            postData.interaction_type = 'chat';
        }
        var llmSelection = getResolvedLlmSelection(rootEl);
        if (llmSelection.enabled && llmSelection.provider && llmSelection.model) {
            postData.provider = llmSelection.provider;
            postData.model = llmSelection.model;
        }
        if (contextDebugEnabled) {
            postData.clienturl = window.location.href;
            postData.clienttitle = document.title || '';
            postData.pageheading = getContextDebugHeading();
            postData.bodyclasses = document.body ? document.body.className : '';
            if (rootEl && rootEl.dataset.pagetype) {
                postData.clientpagetype = rootEl.dataset.pagetype;
            }
            if (rootEl && rootEl.dataset.modname) {
                postData.clientmodname = rootEl.dataset.modname;
            }
            if (rootEl && rootEl.dataset.contextLevel) {
                postData.clientcontextlevel = rootEl.dataset.contextLevel;
            }
            updateContextDebugRequest(postData);
        }

        // Show the stop button immediately so the user can cancel before any tokens arrive.
        var stopStreamHandler = function() {
            if (streamController) {
                streamController.abort();
                streamController = null;
            }
            UI.showTyping(false);
            if (fullText) {
                const parsed = parseAssistantDecorators(fullText);
                UI.finishStreaming(parsed.text, (getTtsUrl() || Speech.isTTSSupported()) ? handleSpeak : null);
                recordConversationMessage('assistant', parsed.text, Date.now());
            } else {
                UI.removeStopButton();
            }
            sending = false;
            UI.setInputEnabled(true);
        };
        UI.showStopButton(stopStreamHandler);

        streamMeta = null;
        streamController = SSE.startStream(sseUrl, postData, {
            onMeta: function(meta) {
                streamMeta = meta;
            },
            onDebug: function(payload) {
                updateContextDebugServer(payload);
            },
            onToken: function(token) {
                if (!fullText) {
                    // First token — create the streaming message element (stop button already visible).
                    UI.startStreaming(null);
                }
                fullText += token;
                // Strip SOLA_NEXT / SOURCE / SOLA_SCORE tags so they never appear in the typewriter.
                var displayText = fullText.replace(NEXT_BLOCK_RE, '').replace(SOURCE_TAG_RE, '').replace(SCORE_BLOCK_RE, '');
                // Also strip an incomplete opening tag at the very end (still streaming in).
                displayText = displayText.replace(/\n*\[SOLA_NEXT\][^\[]*$/, '');
                displayText = displayText.replace(/\n*\[SOURCE[^\]]*$/, '');
                displayText = displayText.replace(/\n*\[SOLA_SCORE\][^\[]*$/, '');
                UI.updateStreamContent(displayText);
            },
            onDone: function(doneData) {
                UI.showTyping(false);
                if (fullText) {
                    const parsed = parseAssistantDecorators(fullText);
                    UI.finishStreaming(parsed.text, (getTtsUrl() || Speech.isTTSSupported()) ? handleSpeak : null);
                    // Set message ID on the element for thumbs up/down rating.
                    if (doneData && doneData.messageid) {
                        var msgEl = getLastAssistantMessageEl();
                        if (msgEl) {
                            msgEl.dataset.messageid = doneData.messageid;
                        }
                    }
                    // Append clickable source pill using SSE metadata (page/course URLs + modules map).
                    if (parsed.sourceType) {
                        var lastMsgEl = getLastAssistantMessageEl();
                        if (lastMsgEl) {
                            var slot = lastMsgEl.querySelector('.local-ai-course-assistant__msg-source-slot');
                            if (slot) {
                                slot.appendChild(createSourcePill(parsed.sourceType, streamMeta, parsed.sourceCmid));
                            } else {
                                lastMsgEl.appendChild(createSourcePill(parsed.sourceType, streamMeta, parsed.sourceCmid));
                            }
                        }
                    }
                    recordConversationMessage('assistant', parsed.text, Date.now());
                    // Handle inline score data if present.
                    if (parsed.scoreData && practiceSessionType) {
                        handleScoreData(parsed.scoreData, practiceSessionType);
                    }
                    if (parsed.suggestions.length) {
                        UI.showSuggestions(parsed.suggestions, handleSuggestionClick);
                    } else if (parsed.text.trim().length > 0) {
                        // Smart fallback chips: comprehension-focused for long responses.
                        const wordCount = parsed.text.trim().split(/\s+/).length;
                        const chips = wordCount > 120
                            ? ['Quiz me on this', 'Summarize this', 'Give me an example']
                            : ['Tell me more', 'Give me an example', 'Quiz me on this'];
                        UI.showSuggestions(chips, handleSuggestionClick);
                    }
                }
                // Study break nudge after ~30 messages in one session.
                if (!breakNudgeShown && sessionMessageCount >= 30) {
                    breakNudgeShown = true;
                    setTimeout(function() {
                        addAssistantMsg(
                            "You've been studying for a while, nice dedication! " +
                            "Research shows short breaks improve retention. " +
                            "Consider stepping away for 5\u201310 minutes, then come back refreshed. \ud83d\udcaa"
                        );
                    }, 1500);
                }
                // Check if survey should be triggered after enough messages.
                checkSurveyTrigger();
                sending = false;
                streamController = null;
                UI.setInputEnabled(true);
            },
            onError: function(errorMsg) {
                UI.showTyping(false);
                if (fullText) {
                    const parsed = parseAssistantDecorators(fullText);
                    UI.finishStreaming(parsed.text);
                    if (parsed.sourceType) {
                        var errLastMsgEl = getLastAssistantMessageEl();
                        if (errLastMsgEl) {
                            errLastMsgEl.appendChild(createSourcePill(parsed.sourceType, streamMeta, parsed.sourceCmid));
                        }
                    }
                    recordConversationMessage('assistant', parsed.text, Date.now());
                }
                window.console && console.error('[SOLA]', errorMsg); // eslint-disable-line no-console
                var inputEl = UI.getElements().input;
                if (inputEl) { inputEl.setAttribute('aria-invalid', 'true'); }
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
        // "Clear screen" wipes the visible drawer only — stored chat history
        // in the DB is preserved so instructors retain the full transcript for
        // analytics and student learning profiles.
        Str.get_string('chat:clear_confirm', 'local_ai_course_assistant').then(function(confirmMsg) {
            if (!window.confirm(confirmMsg)) { // eslint-disable-line no-alert
                return;
            }
            UI.clearMessages();
            setConversationHistory([]);
            showGreeting();
        }).catch(function() {
            if (!window.confirm('Clear the visible messages?')) { // eslint-disable-line no-alert
                return;
            }
            UI.clearMessages();
            setConversationHistory([]);
            showGreeting();
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
            var rootEl = els.root || document.getElementById('local-ai-course-assistant');
            const role = msg.role === 'user' ? 'You' : ((rootEl && rootEl.dataset.shortname) || (rootEl && rootEl.dataset.displayname) || 'SOLA');
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
