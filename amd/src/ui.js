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
 * UI/DOM manipulation for AI tutor chat widget.
 *
 * @module     local_ai_course_assistant/ui
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define([
    'local_ai_course_assistant/markdown',
    'local_ai_course_assistant/quiz',
], function(Markdown, Quiz) {

    /** @type {HTMLElement} */
    let root = null;
    /** @type {HTMLElement} */
    let drawer = null;
    /** @type {HTMLElement} */
    let toggle = null;
    /** @type {HTMLElement} */
    let closeToggle = null;
    /** @type {HTMLElement} */
    let messagesContainer = null;
    /** @type {HTMLTextAreaElement} */
    let input = null;
    /** @type {HTMLElement} */
    let sendBtn = null;
    /** @type {HTMLElement} */
    let typingIndicator = null;
    /** @type {HTMLElement} */
    let micBtn = null;
    /** @type {HTMLElement} */
    let langBtn = null;
    /** @type {HTMLElement} */
    let langBanner = null;
    /** @type {HTMLElement|null} */
    let llmControls = null;
    /** @type {HTMLElement|null} */
    let llmProviderWrap = null;
    /** @type {HTMLElement|null} */
    let llmModelWrap = null;
    /** @type {HTMLSelectElement|null} */
    let llmProviderSelect = null;
    /** @type {HTMLSelectElement|null} */
    let llmModelSelect = null;
    /** @type {{enabled:boolean,providers:Array,currentProvider:string,currentModel:string,onChange:Function|null}} */
    let composerLlmState = {
        enabled: false,
        providers: [],
        currentProvider: '',
        currentModel: '',
        onChange: null,
    };
    /** Cached messages for the History panel Recent view. */
    let historyPanelMessages = [];
    /** Current History panel subview. */
    let historyPanelView = 'recent';

    /** localStorage key for persisting drag position */
    const DRAG_KEY = 'aica_drag_pos';
    /** localStorage key for persisting custom resize dimensions */
    const SIZE_KEY = 'aica_custom_size';
    /** localStorage key for SVG avatar preferences */
    const AVATAR_KEY = 'aica_avatar';
    /** localStorage prefix for per-course bookmarks */
    const BOOKMARK_PREFIX = 'aica_bookmarks_';
    /** Tracks the most-recent user message element (shows the edit button) */
    let lastUserMsgEl = null;
    /** Scroll-to-bottom arrow button element */
    let scrollDownBtn = null;
    /** Whether the user has clicked "scroll down" or scrolled down during streaming (follow mode) */
    let scrollFollowMode = false;
    /** Last known scrollTop — used to detect upward scroll (which exits follow mode) */
    let lastScrollTop = 0;
    /** True while a programmatic scrollTop assignment is in progress (suppresses user-scroll detection) */
    let programmaticScroll = false;
    /** Resize observer for keeping drawer width-dependent UI in sync */
    let drawerResizeObserver = null;
    /** Minimum pixel movement to count as a drag (suppresses subsequent click) */
    const DRAG_THRESHOLD = 8;

    // -----------------------------------------------------------------------
    // SVG avatar system — generates inline face SVGs from user preferences
    // -----------------------------------------------------------------------

    /** Skin tone palette (light → dark) */
    const SKIN_COLORS = ['#FDDBB4', '#EDB98A', '#D08B5B', '#AE5D29', '#694D3D'];
    /** Hair colour palette */
    const HAIR_COLORS = ['#1C1C1C', '#4A2912', '#8B4513', '#D4A017', '#C0392B', '#9CA3AF'];
    /** Default avatar preferences */
    const AVATAR_DEFAULTS = {gender: 'n', skinIdx: 2, hairIdx: 1, styleIdx: 0};

    /**
     * Hair SVG path fragments, indexed by gender key then style index.
     * The placeholder {h} is replaced with the hair colour at render time.
     * viewBox is 0 0 64 64; head circle is cx=32 cy=32 r=22.
     */
    const HAIR_DEFS = {
        n: [
            // 0: Natural coils
            '<circle cx="32" cy="11" r="21" fill="{h}"/>' +
            '<circle cx="13" cy="22" r="10" fill="{h}"/>' +
            '<circle cx="51" cy="22" r="10" fill="{h}"/>',
            // 1: Short crop
            '<path d="M13 32 Q13 11 32 11 Q51 11 51 32 Q49 17 32 17 Q15 17 13 32Z" fill="{h}"/>',
            // 2: Medium wavy
            '<path d="M13 32 Q13 10 32 10 Q51 10 51 32 Q47 18 40 15 Q36 13 32 14 Q28 13 24 15 Q17 18 13 32Z" fill="{h}"/>',
        ],
        f: [
            // 0: Bob side-part
            '<path d="M13 32 Q13 10 32 10 Q51 10 51 32 Q52 44 50 54 Q44 56 41 46 Q38 39 32 39 Q26 39 23 46 Q20 56 14 54 Q12 44 13 32Z" fill="{h}"/>',
            // 1: Long straight
            '<path d="M13 32 Q13 10 32 10 Q51 10 51 32 Q54 49 53 66 Q44 68 40 54 Q36 43 32 43 Q28 43 24 54 Q20 68 11 66 Q10 49 13 32Z" fill="{h}"/>',
            // 2: Braided updo
            '<ellipse cx="32" cy="10" rx="13" ry="11" fill="{h}"/>' +
            '<rect x="29" y="-2" width="6" height="15" rx="3" fill="{h}"/>' +
            '<path d="M13 32 Q13 15 20 12 Q16 20 14 32Z" fill="{h}"/>' +
            '<path d="M51 32 Q51 15 44 12 Q48 20 50 32Z" fill="{h}"/>',
        ],
        m: [
            // 0: Short crop
            '<path d="M13 32 Q13 13 32 13 Q51 13 51 32 Q49 20 32 20 Q15 20 13 32Z" fill="{h}"/>',
            // 1: Fade taper
            '<path d="M15 34 Q14 15 32 14 Q50 15 49 34 Q47 22 40 19 Q36 17 32 18 Q28 17 24 19 Q17 22 15 34Z" fill="{h}"/>',
            // 2: Textured wave
            '<path d="M13 32 Q13 11 32 11 Q51 11 51 32 Q49 17 43 14 Q37 12 32 13 Q27 12 21 14 Q15 17 13 32Z" fill="{h}"/>',
        ],
    };

    /**
     * Build an inline SVG string for an avatar face.
     *
     * @param {{gender:string, skinIdx:number, hairIdx:number, styleIdx:number}} prefs
     * @returns {string} SVG markup
     */
    const buildFaceSVG = function(prefs) {
        var p = prefs || AVATAR_DEFAULTS;
        var skin = SKIN_COLORS[Math.min(p.skinIdx || 0, SKIN_COLORS.length - 1)];
        var hair = HAIR_COLORS[Math.min(p.hairIdx || 0, HAIR_COLORS.length - 1)];
        var gender = p.gender || 'n';
        var styles = HAIR_DEFS[gender] || HAIR_DEFS.n;
        var styleIdx = Math.min(p.styleIdx || 0, styles.length - 1);
        var hairSVG = styles[styleIdx].replace(/\{h\}/g, hair);
        return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="100%" height="100%">'
            + '<rect x="0" y="0" width="64" height="64" fill="white"/>'
            + '<circle cx="32" cy="60" r="22" fill="#94a3b8"/>'   // shirt (clipped)
            + hairSVG                                               // hair (behind head)
            + '<circle cx="32" cy="32" r="22" fill="' + skin + '"/>'  // head
            + '<circle cx="25" cy="30" r="2" fill="#2d1b0e"/>'    // left eye
            + '<circle cx="39" cy="30" r="2" fill="#2d1b0e"/>'    // right eye
            + '<path class="aica-mouth-smile" d="M27 38 Q32 42 37 38" stroke="#2d1b0e" stroke-width="1.5" fill="none" stroke-linecap="round"/>'
            + '<ellipse class="aica-mouth-open" cx="32" cy="39.5" rx="4" ry="3.5" fill="#3d1a08" opacity="0" style="transform-origin:32px 39.5px;transform:scaleY(0);"/>'
            + '</svg>';
    };

    /**
     * Write an SVG avatar into a container div.
     *
     * @param {HTMLElement} container
     * @param {{gender, skinIdx, hairIdx, styleIdx}} prefs
     */
    const renderAvatar = function(container, prefs) {
        if (!container) {
            return;
        }
        container.innerHTML = buildFaceSVG(prefs);
        container.classList.add('aica-avatar-svg--has-svg');
    };

    /**
     * Load avatar preferences from localStorage.
     *
     * @returns {{gender, skinIdx, hairIdx, styleIdx}}
     */
    const loadAvatarPrefs = function() {
        try {
            var raw = localStorage.getItem(AVATAR_KEY);
            if (raw) {
                return Object.assign({}, AVATAR_DEFAULTS, JSON.parse(raw));
            }
        } catch (e) { /**/ }
        return Object.assign({}, AVATAR_DEFAULTS);
    };

    /**
     * Save avatar preferences to localStorage.
     *
     * @param {{gender, skinIdx, hairIdx, styleIdx}} prefs
     */
    const saveAvatarPrefs = function(prefs) {
        try {
            localStorage.setItem(AVATAR_KEY, JSON.stringify(prefs));
        } catch (e) { /**/ }
    };

    /**
     * Render SVG avatars into all avatar containers in the widget.
     *
     * @param {{gender, skinIdx, hairIdx, styleIdx}} prefs
     */
    const applyAvatarPrefs = function(prefs) {
        if (!root) {
            return;
        }
        root.querySelectorAll('.aica-avatar-svg').forEach(function(container) {
            renderAvatar(container, prefs);
        });
    };

    /**
     * Initialise SVG avatars on page load (reads prefs from localStorage).
     * If no prefs exist the fallback <img> inside each container stays visible.
     */
    const initSVGAvatars = function() {
        if (!root) {
            return;
        }
        var prefs = loadAvatarPrefs();
        // Only swap to SVG if user has saved a custom preference (not default).
        var hasCustom = false;
        try {
            hasCustom = !!localStorage.getItem(AVATAR_KEY);
        } catch (e) { /**/ }
        if (hasCustom) {
            applyAvatarPrefs(prefs);
        }
    };

    /**
     * Show the SVG avatar customisation picker overlay inside the drawer.
     * Selecting options live-previews and saves to localStorage.
     */
    const showSVGAvatarPicker = function() {
        if (!drawer) {
            return;
        }
        // Toggle: close if already open.
        var existing = drawer.querySelector('.aica-svg-picker');
        if (existing) {
            existing.remove();
            return;
        }

        var prefs = loadAvatarPrefs();
        var cur = Object.assign({}, prefs);

        // Outer overlay (full-drawer backdrop).
        var overlay = document.createElement('div');
        overlay.className = 'aica-svg-picker';

        // White card panel.
        var panel = document.createElement('div');
        panel.className = 'aica-svg-picker__panel';

        // --- Preview ---
        var preview = document.createElement('div');
        preview.className = 'aica-svg-picker__preview';
        renderAvatar(preview, cur);
        panel.appendChild(preview);

        var refreshPreview = function() {
            renderAvatar(preview, cur);
        };

        // --- Gender trio ---
        var genderRow = document.createElement('div');
        genderRow.className = 'aica-svg-picker__row';
        var genderLabel = document.createElement('span');
        genderLabel.className = 'aica-svg-picker__label';
        genderLabel.textContent = 'Presentation';
        genderRow.appendChild(genderLabel);
        var trio = document.createElement('div');
        trio.className = 'aica-av-trio';
        [{key: 'f', label: 'Feminine'}, {key: 'n', label: 'Neutral'}, {key: 'm', label: 'Masculine'}].forEach(function(g) {
            var btn = document.createElement('button');
            btn.className = 'aica-av-trio__btn' + (cur.gender === g.key ? ' aica-av-trio__btn--active' : '');
            btn.type = 'button';
            btn.textContent = g.label;
            btn.addEventListener('click', function() {
                cur.gender = g.key;
                cur.styleIdx = 0;
                trio.querySelectorAll('.aica-av-trio__btn').forEach(function(b) {
                    b.classList.remove('aica-av-trio__btn--active');
                });
                btn.classList.add('aica-av-trio__btn--active');
                // Refresh style swatches.
                updateStyleSwatches();
                refreshPreview();
            });
            trio.appendChild(btn);
        });
        genderRow.appendChild(trio);
        panel.appendChild(genderRow);

        // --- Skin swatches ---
        var skinRow = document.createElement('div');
        skinRow.className = 'aica-svg-picker__row';
        var skinLabel = document.createElement('span');
        skinLabel.className = 'aica-svg-picker__label';
        skinLabel.textContent = 'Skin';
        skinRow.appendChild(skinLabel);
        var skinSwatches = document.createElement('div');
        skinSwatches.className = 'aica-av-swatches';
        SKIN_COLORS.forEach(function(color, idx) {
            var sw = document.createElement('button');
            sw.className = 'aica-av-swatch' + (cur.skinIdx === idx ? ' aica-av-swatch--active' : '');
            sw.type = 'button';
            sw.style.background = color;
            sw.setAttribute('aria-label', 'Skin tone ' + (idx + 1));
            sw.addEventListener('click', function() {
                cur.skinIdx = idx;
                skinSwatches.querySelectorAll('.aica-av-swatch').forEach(function(s) {
                    s.classList.remove('aica-av-swatch--active');
                });
                sw.classList.add('aica-av-swatch--active');
                refreshPreview();
            });
            skinSwatches.appendChild(sw);
        });
        skinRow.appendChild(skinSwatches);
        panel.appendChild(skinRow);

        // --- Hair style swatches ---
        var styleRow = document.createElement('div');
        styleRow.className = 'aica-svg-picker__row';
        var styleLabel = document.createElement('span');
        styleLabel.className = 'aica-svg-picker__label';
        styleLabel.textContent = 'Hair style';
        styleRow.appendChild(styleLabel);
        var styleSwatches = document.createElement('div');
        styleSwatches.className = 'aica-av-swatches aica-av-swatches--styles';

        var STYLE_NAMES = {
            n: ['Natural coils', 'Short crop', 'Medium wavy'],
            f: ['Bob', 'Long straight', 'Braided updo'],
            m: ['Short crop', 'Fade taper', 'Textured wave'],
        };

        var buildStyleSwatch = function(styleIdx) {
            var sw = document.createElement('button');
            sw.className = 'aica-av-style-swatch' + (cur.styleIdx === styleIdx ? ' aica-av-style-swatch--active' : '');
            sw.type = 'button';
            var names = STYLE_NAMES[cur.gender] || STYLE_NAMES.n;
            sw.setAttribute('aria-label', names[styleIdx] || ('Style ' + (styleIdx + 1)));
            // Mini face SVG thumbnail.
            var thumbPrefs = Object.assign({}, cur, {styleIdx: styleIdx});
            sw.innerHTML = buildFaceSVG(thumbPrefs);
            sw.addEventListener('click', function() {
                cur.styleIdx = styleIdx;
                styleSwatches.querySelectorAll('.aica-av-style-swatch').forEach(function(s) {
                    s.classList.remove('aica-av-style-swatch--active');
                });
                sw.classList.add('aica-av-style-swatch--active');
                refreshPreview();
            });
            return sw;
        };

        var updateStyleSwatches = function() {
            styleSwatches.innerHTML = '';
            [0, 1, 2].forEach(function(i) {
                styleSwatches.appendChild(buildStyleSwatch(i));
            });
        };
        updateStyleSwatches();
        styleRow.appendChild(styleSwatches);
        panel.appendChild(styleRow);

        // --- Hair colour swatches ---
        var hairRow = document.createElement('div');
        hairRow.className = 'aica-svg-picker__row';
        var hairLabel = document.createElement('span');
        hairLabel.className = 'aica-svg-picker__label';
        hairLabel.textContent = 'Hair colour';
        hairRow.appendChild(hairLabel);
        var hairSwatches = document.createElement('div');
        hairSwatches.className = 'aica-av-swatches';
        var HAIR_NAMES = ['Black', 'Dark brown', 'Auburn', 'Blonde', 'Red', 'Grey'];
        HAIR_COLORS.forEach(function(color, idx) {
            var sw = document.createElement('button');
            sw.className = 'aica-av-swatch' + (cur.hairIdx === idx ? ' aica-av-swatch--active' : '');
            sw.type = 'button';
            sw.style.background = color;
            sw.setAttribute('aria-label', HAIR_NAMES[idx] || ('Hair colour ' + (idx + 1)));
            sw.addEventListener('click', function() {
                cur.hairIdx = idx;
                hairSwatches.querySelectorAll('.aica-av-swatch').forEach(function(s) {
                    s.classList.remove('aica-av-swatch--active');
                });
                sw.classList.add('aica-av-swatch--active');
                // Refresh style thumbnails to show new colour.
                updateStyleSwatches();
                refreshPreview();
            });
            hairSwatches.appendChild(sw);
        });
        hairRow.appendChild(hairSwatches);
        panel.appendChild(hairRow);

        // --- Done button ---
        var doneBtn = document.createElement('button');
        doneBtn.className = 'aica-svg-picker__done';
        doneBtn.type = 'button';
        doneBtn.textContent = 'Save';
        doneBtn.addEventListener('click', function() {
            saveAvatarPrefs(cur);
            applyAvatarPrefs(cur);
            overlay.remove();
        });
        panel.appendChild(doneBtn);

        overlay.appendChild(panel);
        drawer.appendChild(overlay);
    };

    /** @type {boolean} True if the toggle button was just dragged (not clicked) */
    let toggleDragged = false;

    /** @type {HTMLElement|null} Current streaming message element */
    let streamingEl = null;
    /** Typewriter: full text received from SSE (may be ahead of visual display) */
    let typewriterFull = '';
    /** Typewriter: number of characters currently displayed */
    let typewriterPos = 0;
    /** Typewriter: setInterval handle */
    let typewriterTimer = null;
    /** Characters revealed per 20ms tick (~200 chars/sec) */
    const TYPEWRITER_SPEED = 5;

    /** @type {HTMLElement|null} Currently playing TTS message element */
    let speakingEl = null;
    /** @type {Function|null} Cleanup for Web Audio mouth sync */
    let mouthSyncCleanup = null;
    /** @type {HTMLElement|null} Message element whose content has been replaced with word spans */
    let highlightingEl = null;
    /** @type {{el: HTMLElement, start: number, end: number}|null} Currently highlighted word span */
    let activeWordSpan = null;

    /**
     * Initialize UI references.
     *
     * @param {HTMLElement} rootEl The root widget element
     */
    const initUI = function(rootEl) {
        root = rootEl;
        drawer = root.querySelector('.local-ai-course-assistant__drawer');
        toggle = root.querySelector('#local-ai-course-assistant-toggle');
        closeToggle = root.querySelector('#local-ai-course-assistant-close-toggle');
        messagesContainer = root.querySelector('.local-ai-course-assistant__messages');

        // Scroll-to-bottom arrow — appears when the user has scrolled up.
        // Keep it inside the messages pane so it stays visually in the conversation window.
        scrollDownBtn = document.createElement('button');
        scrollDownBtn.className = 'local-ai-course-assistant__scroll-down';
        scrollDownBtn.type = 'button';
        scrollDownBtn.setAttribute('aria-label', 'Scroll to bottom');
        scrollDownBtn.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"' +
            ' fill="currentColor" aria-hidden="true">' +
            '<path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>' +
            '</svg>';
        scrollDownBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            if (streamingEl) {
                // Streaming in progress — enter follow mode and snap immediately.
                scrollFollowMode = true;
            }
            programmaticScroll = true;
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
            programmaticScroll = false;
            // Hide the button immediately after clicking.
            scrollDownBtn.classList.remove('local-ai-course-assistant__scroll-down--visible');
        });
        messagesContainer.appendChild(scrollDownBtn);

        const updateScrollBtn = function() {
            if (!scrollDownBtn || !messagesContainer) { return; }
            const current = messagesContainer.scrollTop;
            if (!programmaticScroll) {
                // User-initiated scroll.
                if (current < lastScrollTop) {
                    // Scrolled up → exit follow mode.
                    scrollFollowMode = false;
                } else if (streamingEl && current > lastScrollTop) {
                    // Scrolled down during streaming → enter follow mode.
                    scrollFollowMode = true;
                }
            }
            lastScrollTop = current;
            const gap = messagesContainer.scrollHeight - current - messagesContainer.clientHeight;
            scrollDownBtn.classList.toggle('local-ai-course-assistant__scroll-down--visible', gap > 80);
        };
        messagesContainer.addEventListener('scroll', updateScrollBtn, {passive: true});
        // Re-evaluate after DOM changes (new messages, streaming content).
        if (window.ResizeObserver) {
            new ResizeObserver(updateScrollBtn).observe(messagesContainer);
        }

        input = root.querySelector('.local-ai-course-assistant__input');
        sendBtn = root.querySelector('.local-ai-course-assistant__btn-send');
        typingIndicator = root.querySelector('.local-ai-course-assistant__typing');
        micBtn = root.querySelector('.local-ai-course-assistant__btn-mic');
        langBtn = root.querySelector('.local-ai-course-assistant__btn-lang');
        langBanner = root.querySelector('.local-ai-course-assistant__lang-banner');
        llmControls = root.querySelector('.local-ai-course-assistant__composer-left');
        llmProviderSelect = root.querySelector('.local-ai-course-assistant__composer-select--provider');
        llmModelSelect = root.querySelector('.local-ai-course-assistant__composer-select--model');
        llmProviderWrap = llmProviderSelect ? llmProviderSelect.closest('.local-ai-course-assistant__composer-select-wrap') : null;
        llmModelWrap = llmModelSelect ? llmModelSelect.closest('.local-ai-course-assistant__composer-select-wrap') : null;
        if (llmProviderSelect) {
            llmProviderSelect.addEventListener('change', function() {
                renderComposerModelOptions(llmProviderSelect.value, true);
            });
        }
        if (llmModelSelect) {
            llmModelSelect.addEventListener('change', function() {
                composerLlmState.currentModel = llmModelSelect.value;
                emitComposerLlmChange();
            });
        }
        root.querySelectorAll('.aica-history-panel__view').forEach(function(btn) {
            btn.addEventListener('click', function() {
                setHistoryPanelView(btn.dataset.historyView || 'recent');
            });
        });
        // Apply admin-configured avatar colors as CSS variables and inline styles.
        const avatarColor = root.dataset.avatarColor;
        if (avatarColor) {
            root.style.setProperty('--aica-avatar-color', avatarColor);
        }
        const avatarFill = root.dataset.avatarFill || '#ffffff';
        root.style.setProperty('--aica-avatar-fill', avatarFill);
        // Set directly on the toggle and its avatar container so Bootstrap
        // cannot override via the button selector cascade.
        if (toggle) {
            toggle.style.backgroundColor = avatarFill;
        }
        const toggleAvatarEl = toggle ? toggle.querySelector('.aica-avatar-svg') : null;
        if (toggleAvatarEl) {
            toggleAvatarEl.style.backgroundColor = avatarFill;
        }
        // Apply drawer display mode styling (drawer stays closed until clicked).
        if (root.dataset.displaymode === 'drawer') {
            root.classList.add('local-ai-course-assistant--drawer-mode');
            // Sync page push margin on viewport resize (remove on mobile, re-apply on desktop).
            window.addEventListener('resize', function() {
                if (isOpen()) {
                    updatePagePush(window.innerWidth > 600);
                }
                syncCloseTogglePosition();
            });
        }
        restoreExpandState();
        applyPositionOffset();
        initDrag();
        initResize();
        initMobileGestures();
        if (window.ResizeObserver && drawer) {
            drawerResizeObserver = new ResizeObserver(function() {
                if (isOpen()) {
                    updatePagePush(true);
                }
                syncCloseTogglePosition();
            });
            drawerResizeObserver.observe(drawer);
        }
        // Avatar picker has been removed; clear any stored face-SVG prefs so
        // the preset <img> is always shown and the white fill shows through.
        try { localStorage.removeItem(AVATAR_KEY); } catch (e) { /**/ }
        initSVGAvatars();
        historyPanelMessages = [];
        setHistoryPanelView('saved');
        setBottomMode('chat');
        syncCloseTogglePosition();

        // Debug panel button bindings (Refresh and Close).
        var debugRefreshBtn = root.querySelector('.aica-debug-panel__btn--refresh, .aica-debug-panel__refresh');
        if (debugRefreshBtn) {
            debugRefreshBtn.addEventListener('click', function() {
                // Dispatch a custom event so chat.js can handle the refresh logic.
                root.dispatchEvent(new CustomEvent('aica-debug-refresh'));
            });
        }
        var debugCloseBtn = root.querySelector('.aica-debug-panel__btn--close, .aica-debug-panel__close');
        if (debugCloseBtn) {
            debugCloseBtn.addEventListener('click', function() {
                var debugPanel = root.querySelector('.aica-debug-panel');
                if (debugPanel) {
                    debugPanel.hidden = true;
                }
            });
        }

        // Auto-open on first visit per course. Admin setting (global or
        // per-course override) surfaces as data-autoopen="1" on the root.
        // localStorage key marks the course as "already auto-opened once"
        // so it does not re-open on every subsequent page load in the same
        // course. Applies on desktop and mobile.
        //
        // Legacy CDN compatibility: on plugin versions prior to v3.4.8 the
        // template did not emit the data-autoopen attribute at all, so the
        // dataset value is undefined. Treat that case as "on" so sites
        // running v3.4.7 with Saylor's CDN bundle still pick up the auto
        // open behavior without a plugin deploy. v3.5.2+ always emits the
        // attribute (either "1", "0", or "") and the explicit value wins.
        var autoopenAttr = root.dataset.autoopen;
        var shouldAutoopen = (autoopenAttr === '1');
        if (shouldAutoopen) {
            var courseId = root.dataset.courseid || '';
            var firstVisitKey = 'aica_autoopened_course_' + courseId;
            var alreadyOpened = false;
            try { alreadyOpened = localStorage.getItem(firstVisitKey) === '1'; } catch (e) { /**/ }
            if (courseId && !alreadyOpened) {
                try { localStorage.setItem(firstVisitKey, '1'); } catch (e) { /**/ }
                requestAnimationFrame(function() { toggleDrawer(); });
            }
        }

        // Help panel toggle.
        var helpBtn = root.querySelector('.local-ai-course-assistant__btn-help');
        var helpPanel = root.querySelector('.aica-help-panel');
        var helpCloseBtn = root.querySelector('.aica-help-panel__close');
        if (helpBtn && helpPanel) {
            helpBtn.addEventListener('click', function() {
                helpPanel.hidden = !helpPanel.hidden;
            });
            if (helpCloseBtn) {
                helpCloseBtn.addEventListener('click', function() {
                    helpPanel.hidden = true;
                });
            }
        }

        // Persistent welcome message: inject the admin-configured chat
        // greeting as the first assistant message bubble so it is always
        // visible, including on return visits. Does not save to DB and
        // does not count against the conversation cap.
        var greeting = (root.dataset.chatGreeting || '').trim();
        var firstname = root.dataset.firstname || '';
        var coursename = root.dataset.coursename || '';
        if (greeting && messagesContainer) {
            greeting = greeting.replace('{{firstname}}', firstname).replace('{{coursename}}', coursename);
            var welcomeDiv = document.createElement('div');
            welcomeDiv.className = 'local-ai-course-assistant__message local-ai-course-assistant__message--assistant';
            welcomeDiv.setAttribute('data-welcome', '1');
            welcomeDiv.innerHTML = '<div class="local-ai-course-assistant__message-content">' + greeting + '</div>';
            messagesContainer.insertBefore(welcomeDiv, messagesContainer.firstChild);
        }
    };

    /**
     * Ensure the scroll-down button stays mounted as the last child in the messages pane.
     */
    const ensureScrollDownButtonMounted = function() {
        if (!messagesContainer || !scrollDownBtn) {
            return;
        }
        if (scrollDownBtn.parentNode !== messagesContainer) {
            messagesContainer.appendChild(scrollDownBtn);
        }
    };

    /**
     * Insert an element into the messages pane ahead of the scroll-down overlay.
     *
     * @param {HTMLElement} el
     */
    const appendMessageNode = function(el) {
        if (!messagesContainer || !el) {
            return;
        }
        ensureScrollDownButtonMounted();
        if (scrollDownBtn && scrollDownBtn.parentNode === messagesContainer) {
            messagesContainer.insertBefore(el, scrollDownBtn);
            return;
        }
        messagesContainer.appendChild(el);
    };

    /**
     * Apply custom x/y offset from data attributes, overriding CSS class defaults.
     */
    const applyPositionOffset = function() {
        if (!root || root.classList.contains('local-ai-course-assistant--drawer-mode')) {
            return;
        }
        const ox = parseInt(root.dataset.offsetX, 10);
        const oy = parseInt(root.dataset.offsetY, 10);
        if (!isNaN(ox)) {
            const isRight = root.className.includes('right');
            root.style[isRight ? 'right' : 'left'] = ox + 'px';
        }
        if (!isNaN(oy)) {
            const isBottom = root.className.includes('bottom');
            root.style[isBottom ? 'bottom' : 'top'] = oy + 'px';
        }
    };

    /**
     * Make the widget draggable by its header.
     * Saves/restores position via localStorage.
     */
    const initDrag = function() {
        if (!root || root.classList.contains('local-ai-course-assistant--drawer-mode')) {
            return;
        }
        const header = root.querySelector('.local-ai-course-assistant__header');
        if (!header) {
            return;
        }

        // Restore saved drag position, but clamp to viewport so a bad saved value
        // can't push the widget off-screen (e.g. after an accidental mobile drag).
        try {
            const saved = localStorage.getItem(DRAG_KEY);
            if (saved) {
                const pos = JSON.parse(saved);
                const minVisible = 40; // px of widget that must remain on-screen
                const maxTop  = window.innerHeight - minVisible;
                const maxLeft = window.innerWidth  - minVisible;
                if (pos.top >= 0 && pos.top <= maxTop && pos.left >= 0 && pos.left <= maxLeft) {
                    root.style.bottom = 'auto';
                    root.style.right  = 'auto';
                    root.style.top    = pos.top  + 'px';
                    root.style.left   = pos.left + 'px';
                } else {
                    // Saved position is off-screen — discard it.
                    localStorage.removeItem(DRAG_KEY);
                }
            }
        } catch (e) { /**/ }

        let dragging       = false;
        let dragFromToggle = false;
        let dragMoved      = false;
        let startX, startY, startLeft, startTop;

        const onDragStart = function(clientX, clientY, fromToggle) {
            const rect = root.getBoundingClientRect();
            dragging       = true;
            dragFromToggle = !!fromToggle;
            dragMoved      = false;
            startX    = clientX;
            startY    = clientY;
            startLeft = rect.left;
            startTop  = rect.top;
            root.style.bottom = 'auto';
            root.style.right  = 'auto';
            root.style.left   = startLeft + 'px';
            root.style.top    = startTop  + 'px';
            root.classList.add('local-ai-course-assistant--dragging');
        };

        const onDragMove = function(clientX, clientY) {
            if (!dragging) {
                return;
            }
            const dx = Math.abs(clientX - startX);
            const dy = Math.abs(clientY - startY);
            if (dx > DRAG_THRESHOLD || dy > DRAG_THRESHOLD) {
                dragMoved = true;
            }
            root.style.left = (startLeft + clientX - startX) + 'px';
            root.style.top  = (startTop  + clientY - startY) + 'px';
        };

        const onDragEnd = function() {
            if (!dragging) {
                return;
            }
            dragging = false;
            root.classList.remove('local-ai-course-assistant--dragging');
            if (dragMoved) {
                // Actual drag — set the flag if it came from the toggle so chat.js
                // can suppress the resulting click, then persist the new position.
                if (dragFromToggle) {
                    toggleDragged = true;
                }
                try {
                    localStorage.setItem(DRAG_KEY, JSON.stringify({
                        left: parseInt(root.style.left, 10),
                        top:  parseInt(root.style.top,  10),
                    }));
                } catch (e) { /**/ }
            } else {
                // No movement — plain click, not a drag.
                // Only reset to CSS bottom/right positioning when there is no saved
                // drag position; if the user has previously dragged the widget, leave
                // the inline styles in place (they already reflect the correct position
                // from onDragStart) so the widget doesn't snap back on every click.
                let hasSavedPos = false;
                try { hasSavedPos = !!localStorage.getItem(DRAG_KEY); } catch (e) { /**/ }
                if (!hasSavedPos) {
                    root.style.bottom = '';
                    root.style.right  = '';
                    root.style.top    = '';
                    root.style.left   = '';
                }
            }
        };

        // Unified Pointer Events drag (mouse, touch, stylus) — works across all input types.
        // e.preventDefault() on pointerdown also prevents scroll during touch drag.
        // On mobile (≤600px) the drawer is position:fixed independently of the root element,
        // so moving the root would only move the toggle button, not the drawer — skip drag.
        header.addEventListener('pointerdown', function(e) {
            if (e.target.closest('button, a')) {
                return;
            }
            if (window.innerWidth <= 600) {
                return;
            }
            e.preventDefault();
            try { e.currentTarget.setPointerCapture(e.pointerId); } catch (ex) { /**/ }
            onDragStart(e.clientX, e.clientY, false);
        });
        document.addEventListener('pointermove', function(e) {
            onDragMove(e.clientX, e.clientY);
        });
        document.addEventListener('pointerup', onDragEnd);
        document.addEventListener('pointercancel', onDragEnd);

        // Toggle button drag — all screen sizes.
        // On mobile the drawer is fullscreen-fixed so only the floating button moves,
        // which is exactly what the user wants when repositioning the widget.
        // setPointerCapture routes subsequent pointermove/pointerup to this element
        // reliably on iOS Chrome (where touch-dragging without capture can drop events).
        if (toggle) {
            var togglePending = null;
            toggle.addEventListener('pointerdown', function(e) {
                try { e.currentTarget.setPointerCapture(e.pointerId); } catch (ex) { /**/ }
                // Don't start drag immediately — wait for actual movement to avoid
                // a position jump on plain tap/click.
                togglePending = {x: e.clientX, y: e.clientY};
            });
            toggle.addEventListener('pointermove', function(e) {
                if (!togglePending) { return; }
                var dx = Math.abs(e.clientX - togglePending.x);
                var dy = Math.abs(e.clientY - togglePending.y);
                if (dx > DRAG_THRESHOLD || dy > DRAG_THRESHOLD) {
                    onDragStart(togglePending.x, togglePending.y, true);
                    onDragMove(e.clientX, e.clientY);
                    togglePending = null;
                }
            });
            toggle.addEventListener('pointerup', function() { togglePending = null; });
            toggle.addEventListener('pointercancel', function() { togglePending = null; });
        }

        // Drawer body drag — allows dragging from non-interactive areas outside the header
        // (hint bar, starters background, quiz setup labels, etc.).
        // Messages area excluded to preserve scroll; header excluded (has its own handler).
        // Resize handles excluded to prevent drag/resize conflict.
        if (drawer) {
            const DRAG_EXCLUDE = 'button, a, input, textarea, select, ' +
                '.local-ai-course-assistant__messages, ' +
                '.local-ai-course-assistant__header, ' +
                '.aica-resize-handle';
            drawer.addEventListener('pointerdown', function(e) {
                if (e.target.closest(DRAG_EXCLUDE)) {
                    return;
                }
                if (window.innerWidth <= 600) {
                    return;
                }
                e.preventDefault();
                onDragStart(e.clientX, e.clientY, false);
            });
        }
    };

    /**
     * Make the drawer resizable by dragging the top (N) and left (W) edge handles.
     * Optimised for the default bottom-right widget position.
     * Persists the resized dimensions to localStorage.
     */
    const initResize = function() {
        if (!drawer || !root) {
            return;
        }

        const handles = drawer.querySelectorAll('.aica-resize-handle');
        if (!handles.length) {
            return;
        }

        let isResizing = false;
        let resizeHandle = null;
        let startX, startY, startW, startH;

        handles.forEach(function(handle) {
            handle.addEventListener('pointerdown', function(e) {
                isResizing = true;
                resizeHandle = handle;
                startX = e.clientX;
                startY = e.clientY;
                startW = drawer.offsetWidth;
                startH = drawer.offsetHeight;
                e.preventDefault();
                e.stopPropagation();
                // Remove expanded class so inline styles take over.
                drawer.classList.remove('local-ai-course-assistant__drawer--expanded');
            });
        });

        document.addEventListener('pointermove', function(e) {
            if (!isResizing || !resizeHandle) {
                return;
            }
            const isN  = resizeHandle.classList.contains('aica-resize-handle--n') ||
                         resizeHandle.classList.contains('aica-resize-handle--nw');
            const isW  = resizeHandle.classList.contains('aica-resize-handle--w') ||
                         resizeHandle.classList.contains('aica-resize-handle--nw');

            if (isN) {
                // Drag upward increases height (widget anchored at bottom).
                // Min 400px keeps the message list, composer, and header all readable.
                const newH = Math.max(400, Math.min(window.innerHeight * 0.95,
                    startH + (startY - e.clientY)));
                drawer.style.height = newH + 'px';
            }
            if (isW) {
                // Drag leftward increases width (widget anchored at right).
                // Min 320px is wide enough for comfortable message wrapping and the composer.
                const newW = Math.max(320, Math.min(window.innerWidth * 0.95,
                    startW + (startX - e.clientX)));
                drawer.style.width = newW + 'px';
            }
        });

        document.addEventListener('pointerup', function() {
            if (!isResizing) {
                return;
            }
            isResizing = false;
            resizeHandle = null;
            try {
                localStorage.setItem(SIZE_KEY, JSON.stringify({
                    width: drawer.style.width,
                    height: drawer.style.height,
                }));
            } catch (e) { /**/ }
            // Re-sync page push margin after resize.
            if (isOpen()) {
                updatePagePush(true);
            }
        });
        document.addEventListener('pointercancel', function() {
            isResizing = false;
            resizeHandle = null;
        });
    };

    /**
     * Mobile: swipe-down on drawer to close + tap-outside to close.
     * Safe to call on desktop too — touch events simply never fire there.
     */
    const initMobileGestures = function() {
        // ── Mobile: drag swipe handle to resize; drag all the way down to close ──
        // touch-action:none on .aica-swipe-handle prevents native scroll conflicts.
        var swipeTouchStartY = 0;
        var swipeTouchStartX = 0;
        var swipeStartH = 0;
        var swipeIsDragging = false;
        var swipeHandle = drawer ? drawer.querySelector('.aica-swipe-handle') : null;
        if (swipeHandle) {
            swipeHandle.addEventListener('touchstart', function(e) {
                swipeTouchStartY = e.touches[0].clientY;
                swipeTouchStartX = e.touches[0].clientX;
                swipeStartH = drawer ? drawer.offsetHeight : 0;
                swipeIsDragging = false;
            }, {passive: true});

            swipeHandle.addEventListener('touchmove', function(e) {
                if (!drawer) { return; }
                swipeIsDragging = true;
                var dy = e.touches[0].clientY - swipeTouchStartY;
                // Drag down → shorter; drag up → taller. Clamp between 150px and 95% viewport.
                var newH = Math.max(150, Math.min(window.innerHeight * 0.95, swipeStartH - dy));
                drawer.style.height = newH + 'px';
            }, {passive: true});

            swipeHandle.addEventListener('touchend', function(e) {
                if (!drawer || !swipeIsDragging) { return; }
                swipeIsDragging = false;
                var dx = Math.abs(e.changedTouches[0].clientX - swipeTouchStartX);
                var finalH = drawer.offsetHeight;
                if (finalH < 200) {
                    // Dragged far enough down — close and reset height.
                    closeDrawer();
                    drawer.style.height = '';
                } else {
                    // Save the new size to localStorage.
                    try {
                        var stored = localStorage.getItem(SIZE_KEY);
                        var size = stored ? JSON.parse(stored) : {};
                        size.height = drawer.style.height;
                        localStorage.setItem(SIZE_KEY, JSON.stringify(size));
                    } catch (ex) { /**/ }
                }
            }, {passive: true});
        }

        // ── Swipe down on header to close ────────────────────────────────────────
        var headerEl = drawer ? drawer.querySelector('.local-ai-course-assistant__header') : null;
        if (headerEl) {
            var hdrStartY = 0;
            var hdrMoved = false;
            headerEl.addEventListener('touchstart', function(e) {
                // Only start if touch is not on a button/link (let those handle normally).
                if (e.target.closest('button, a')) { return; }
                hdrStartY = e.touches[0].clientY;
                hdrMoved = false;
            }, {passive: true});
            headerEl.addEventListener('touchmove', function(e) {
                if (e.target.closest('button, a')) { return; }
                var dy = e.touches[0].clientY - hdrStartY;
                if (dy > 40) { hdrMoved = true; }
            }, {passive: true});
            headerEl.addEventListener('touchend', function() {
                if (hdrMoved) {
                    closeDrawer();
                    if (drawer) { drawer.style.height = ''; }
                }
                hdrMoved = false;
            }, {passive: true});
        }

        // ── Swipe right on drawer to close (mobile) ─────────────────────────────
        if (drawer) {
            var swipeRStartX = 0;
            var swipeRStartY = 0;
            var swipeRTracking = false;
            drawer.addEventListener('touchstart', function(e) {
                // Only track single-finger swipes that don't start on interactive elements.
                if (e.touches.length !== 1) { return; }
                if (e.target.closest('button, a, input, textarea, select, .aica-swipe-handle')) { return; }
                swipeRStartX = e.touches[0].clientX;
                swipeRStartY = e.touches[0].clientY;
                swipeRTracking = true;
            }, {passive: true});
            drawer.addEventListener('touchmove', function() {
                // touchmove is only needed to keep tracking alive; actual check is in touchend.
            }, {passive: true});
            drawer.addEventListener('touchend', function(e) {
                if (!swipeRTracking) { return; }
                swipeRTracking = false;
                var dx = e.changedTouches[0].clientX - swipeRStartX;
                var dy = Math.abs(e.changedTouches[0].clientY - swipeRStartY);
                // Require horizontal swipe: ≥80px right, vertical movement < half of horizontal.
                if (dx >= 80 && dy < dx * 0.5) {
                    closeDrawer();
                }
            }, {passive: true});
        }

        // ── Tap outside drawer to close (desktop + mobile) ───────────────────────
        // Use composedPath() so elements removed from the DOM during event
        // propagation (e.g. suggestion chips cleared by clearSuggestions()) still
        // resolve correctly. Also exclude the toggle button itself — clicking it
        // calls toggleDrawer() which opens the drawer; without this exclusion the
        // root handler immediately closes it again.
        if (root) {
            root.addEventListener('click', function(e) {
                const path = e.composedPath ? e.composedPath() : [e.target];
                const insideDrawer = path.some(function(el) { return el === drawer; });
                const onToggle = toggle && path.some(function(el) { return el === toggle; });
                if (isOpen() && drawer && !insideDrawer && !onToggle) {
                    closeDrawer();
                }
            });
        }
    };

    /**
     * Restore custom drawer size from localStorage on init.
     */
    const restoreExpandState = function() {
        try {
            // Restore custom size if user previously resized the drawer.
            const saved = localStorage.getItem(SIZE_KEY);
            if (saved && drawer) {
                const size = JSON.parse(saved);
                if (size.width) {
                    drawer.style.width = size.width;
                }
                if (size.height) {
                    drawer.style.height = size.height;
                }
            }
        } catch (e) {
            // localStorage may be unavailable.
        }
    };

    /**
     * Returns true if the toggle button was just dragged (vs clicked); resets the flag.
     * Chat.js calls this in handleToggle to suppress the open/close action after a drag.
     *
     * @returns {boolean}
     */
    const wasToggleDragged = function() {
        const val = toggleDragged;
        toggleDragged = false;
        return val;
    };

    /**
     * Toggle the mobile half-screen minimized state.
     * Only meaningful on mobile (≤600px) where the drawer is full-screen.
     *
     * @returns {boolean} True if now minimized
     */
    const toggleMinimize = function() {
        if (!drawer) {
            return false;
        }
        return drawer.classList.toggle('local-ai-course-assistant__drawer--minimized');
    };

    /**
     * Check if drawer is open.
     *
     * @returns {boolean}
     */
    const isOpen = function() {
        return drawer && drawer.getAttribute('aria-hidden') === 'false';
    };

    /**
     * Push or release the Moodle #page content area so the drawer doesn't overlap it.
     * Only applies in drawer mode on desktop (>600px). Sets margin-right on #page
     * to match the drawer width.
     *
     * @param {boolean} push  True to push content aside, false to release
     */
    const updatePagePush = function(push) {
        if (!root || !root.classList.contains('local-ai-course-assistant--drawer-mode')) {
            return;
        }
        // Don't push on mobile — drawer overlays in mobile mode.
        if (window.innerWidth <= 600) {
            return;
        }
        const page = document.getElementById('page');
        if (!page) {
            return;
        }
        if (push) {
            page.classList.add('aica-drawer-push');
            // Read the actual drawer width (accounts for expanded state and custom resize).
            const w = drawer ? drawer.offsetWidth : 400;
            page.style.marginRight = w + 'px';
        } else {
            page.style.marginRight = '';
            page.classList.remove('aica-drawer-push');
        }
    };

    /**
     * Sync drawer width CSS vars and the close-tab accessibility state.
     */
    const syncCloseTogglePosition = function() {
        if (root && drawer) {
            const width = Math.max(0, drawer.offsetWidth || drawer.getBoundingClientRect().width || 400);
            root.style.setProperty('--aica-drawer-width', width + 'px');
        }

        if (!closeToggle) {
            return;
        }

        const showCloseToggle = !!(root &&
            root.classList.contains('local-ai-course-assistant--drawer-mode') &&
            isOpen() &&
            window.innerWidth > 600);

        closeToggle.hidden = !showCloseToggle;
        closeToggle.setAttribute('aria-hidden', showCloseToggle ? 'false' : 'true');
        closeToggle.setAttribute('aria-expanded', showCloseToggle ? 'true' : 'false');
        closeToggle.disabled = !showCloseToggle;
        closeToggle.tabIndex = showCloseToggle ? 0 : -1;
    };

    /**
     * Toggle the drawer open/closed.
     *
     * @returns {boolean} True if drawer is now open
     */
    const toggleDrawer = function() {
        if (!drawer || !toggle) {
            return false;
        }

        // On mobile, if the drawer is minimized, clicking the toggle restores to full-screen.
        if (drawer.classList.contains('local-ai-course-assistant__drawer--minimized')) {
            drawer.classList.remove('local-ai-course-assistant__drawer--minimized');
            return true; // still open
        }

        const opening = !isOpen();

        if (!opening) {
            closeDrawer();
            return false;
        }

        drawer.hidden = false;
        drawer.setAttribute('aria-hidden', 'false');
        toggle.setAttribute('aria-expanded', 'true');
        drawer.classList.add('local-ai-course-assistant__drawer--open');
        if (root) { root.classList.add('local-ai-course-assistant--open'); }
        // Show conversation starters when reopening.
        showStarters();
        // Focus trap: keep Tab cycling within the drawer.
        if (!drawer._aicaFocusTrap) {
            drawer._aicaFocusTrap = function(e) {
                if (e.key !== 'Tab') { return; }
                var focusable = drawer.querySelectorAll(
                    'button:not([disabled]):not([aria-hidden="true"]), [href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])'
                );
                if (!focusable.length) { return; }
                var first = focusable[0];
                var last = focusable[focusable.length - 1];
                if (e.shiftKey && document.activeElement === first) {
                    e.preventDefault();
                    last.focus();
                } else if (!e.shiftKey && document.activeElement === last) {
                    e.preventDefault();
                    first.focus();
                }
            };
            drawer.addEventListener('keydown', drawer._aicaFocusTrap);
        }
        // Push page content aside on desktop so drawer doesn't overlap.
        // Use requestAnimationFrame so the drawer has its final width before we read it.
        requestAnimationFrame(function() {
            updatePagePush(true);
            syncCloseTogglePosition();
        });

        return true;
    };

    /**
     * Close the drawer.
     */
    const closeDrawer = function() {
        if (!drawer || !toggle) {
            return;
        }

        drawer.setAttribute('aria-hidden', 'true');
        drawer.hidden = true;
        toggle.setAttribute('aria-expanded', 'false');
        drawer.classList.remove('local-ai-course-assistant__drawer--open');
        drawer.classList.remove('local-ai-course-assistant__drawer--minimized');
        drawer.classList.remove('local-ai-course-assistant__drawer--welcome');
        if (root) { root.classList.remove('local-ai-course-assistant--open'); }
        updatePagePush(false);
        syncCloseTogglePosition();
        toggle.focus();
    };

    /**
     * Set the mic button into recording or idle state.
     *
     * @param {boolean} recording
     */
    const setMicRecording = function(recording) {
        if (micBtn) {
            micBtn.classList.toggle('local-ai-course-assistant__btn-mic--recording', recording);
            micBtn.setAttribute('aria-pressed', recording ? 'true' : 'false');
        }
        // Also update the starter voice button if present.
        if (root) {
            const svBtn = root.querySelector('.aica-starter-voice__btn');
            if (svBtn) {
                svBtn.classList.toggle('aica-starter-voice__btn--recording', recording);
            }
        }
    };

    /**
     * Show/hide the mic button based on STT support.
     *
     * @param {boolean} supported
     */
    const setMicVisible = function(supported) {
        if (micBtn) {
            micBtn.style.display = supported ? '' : 'none';
        }
    };

    /**
     * Show the language detection banner with a prompt to switch.
     *
     * @param {string}   langName  Display name of the detected language (e.g. 'French')
     * @param {Function} onAccept  Called when user clicks the switch button
     * @param {Function} onDismiss Called when user dismisses
     */
    const showLanguageBanner = function(langName, onAccept, onDismiss) {
        if (!langBanner) {
            return;
        }
        const textEl = langBanner.querySelector('.local-ai-course-assistant__lang-banner-text');
        const acceptBtn = langBanner.querySelector('.local-ai-course-assistant__lang-accept');
        const dismissBtn = langBanner.querySelector('.local-ai-course-assistant__lang-dismiss');

        if (textEl) {
            textEl.textContent = 'Switch to ' + langName + '?';
        }

        const accept = function() {
            langBanner.setAttribute('aria-hidden', 'true');
            langBanner.classList.remove('local-ai-course-assistant__lang-banner--visible');
            onAccept();
        };
        const dismiss = function() {
            langBanner.setAttribute('aria-hidden', 'true');
            langBanner.classList.remove('local-ai-course-assistant__lang-banner--visible');
            onDismiss();
        };

        // Replace any prior listeners.
        if (acceptBtn) {
            acceptBtn.onclick = accept;
        }
        if (dismissBtn) {
            dismissBtn.onclick = dismiss;
        }

        langBanner.setAttribute('aria-hidden', 'false');
        langBanner.classList.add('local-ai-course-assistant__lang-banner--visible');
    };

    /**
     * Update the language button label in the hint bar.
     *
     * @param {string} label e.g. 'English', 'Français'
     */
    const setLangLabel = function(label) {
        if (!langBtn) {
            return;
        }
        const span = langBtn.querySelector('.aica-lang-label');
        if (span) {
            span.textContent = label || 'English';
        }
    };

    /**
     * Emit a provider/model selection change from the composer.
     */
    const emitComposerLlmChange = function() {
        if (typeof composerLlmState.onChange === 'function' &&
                composerLlmState.currentProvider && composerLlmState.currentModel) {
            composerLlmState.onChange(composerLlmState.currentProvider, composerLlmState.currentModel);
        }
    };

    /**
     * Render model options for the currently selected provider.
     *
     * @param {string} providerId
     * @param {boolean} notify
     */
    const renderComposerModelOptions = function(providerId, notify) {
        if (!llmModelSelect) {
            return;
        }
        llmModelSelect.innerHTML = '';
        const providerConfig = composerLlmState.providers.find(function(item) {
            return item.id === providerId;
        }) || composerLlmState.providers[0];

        if (!providerConfig || !Array.isArray(providerConfig.models) || !providerConfig.models.length) {
            composerLlmState.currentProvider = '';
            composerLlmState.currentModel = '';
            if (llmControls) {
                llmControls.hidden = true;
            }
            return;
        }

        composerLlmState.currentProvider = providerConfig.id;
        if (llmProviderSelect) {
            llmProviderSelect.value = providerConfig.id;
        }

        let selectedModel = composerLlmState.currentModel;
        if (!providerConfig.models.some(function(model) { return model.id === selectedModel; })) {
            selectedModel = providerConfig.models[0].id;
        }

        providerConfig.models.forEach(function(model) {
            const option = document.createElement('option');
            option.value = model.id;
            option.textContent = model.label || model.id;
            if (model.id === selectedModel) {
                option.selected = true;
            }
            llmModelSelect.appendChild(option);
        });

        composerLlmState.currentModel = selectedModel;
        llmModelSelect.value = selectedModel;

        if (notify) {
            emitComposerLlmChange();
        }
    };

    /**
     * Populate the Codex-style LLM and model controls in the composer.
     *
     * @param {Object} config
     * @param {boolean} config.enabled
     * @param {Array} config.providers
     * @param {string} config.currentProvider
     * @param {string} config.currentModel
     * @param {Function=} config.onChange
     */
    const setComposerLlmOptions = function(config) {
        if (!llmControls || !llmProviderSelect || !llmModelSelect) {
            return;
        }

        const providers = Array.isArray(config && config.providers) ? config.providers.filter(function(provider) {
            return provider && provider.id && Array.isArray(provider.models) && provider.models.length;
        }) : [];
        const enabled = !!(config && config.enabled && providers.length);

        composerLlmState = {
            enabled: enabled,
            providers: providers,
            currentProvider: enabled ? (config.currentProvider || providers[0].id) : '',
            currentModel: enabled ? (config.currentModel || '') : '',
            onChange: enabled && typeof config.onChange === 'function' ? config.onChange : null,
        };

        llmControls.hidden = !enabled;
        if (llmProviderWrap) {
            llmProviderWrap.hidden = !enabled;
        }
        if (llmModelWrap) {
            llmModelWrap.hidden = !enabled;
        }
        llmProviderSelect.innerHTML = '';
        llmModelSelect.innerHTML = '';

        if (!enabled) {
            return;
        }

        providers.forEach(function(provider) {
            const option = document.createElement('option');
            option.value = provider.id;
            option.textContent = provider.label || provider.id;
            if (provider.id === composerLlmState.currentProvider) {
                option.selected = true;
            }
            llmProviderSelect.appendChild(option);
        });

        renderComposerModelOptions(composerLlmState.currentProvider, false);
    };

    /**
     * Add a message bubble to the messages area.
     *
     * @param {string}        role     'user' or 'assistant'
     * @param {string}        text     The message text (markdown for assistant, plain for user)
     * @param {Function|null} onSpeak  Optional callback when TTS button is clicked; receives (text, el)
     * @param {number|null}   ts       Optional Unix timestamp (ms) — shown as tooltip on message
     * @returns {HTMLElement} The message element
     */
    const addMessage = function(role, text, onSpeak, ts) {
        const el = document.createElement('div');
        el.className = 'local-ai-course-assistant__message local-ai-course-assistant__message--' + role;
        el.setAttribute('data-role', role);
        // Store timestamp for tooltip display.
        const msgTs = ts || Date.now();
        el.dataset.ts = msgTs;

        const content = document.createElement('div');
        content.className = 'local-ai-course-assistant__message-content';

        if (role === 'assistant') {
            content.innerHTML = Markdown.sanitize(Markdown.render(text));
        } else {
            content.textContent = text;
        }

        el.appendChild(content);

        // Add footer row (source pill slot + action buttons) to assistant messages.
        if (role === 'assistant') {
            var footer = document.createElement('div');
            footer.className = 'local-ai-course-assistant__msg-footer';
            var sourceSlot = document.createElement('div');
            sourceSlot.className = 'local-ai-course-assistant__msg-source-slot';
            footer.appendChild(sourceSlot);
            footer.appendChild(createMsgActions(content, el, onSpeak, text));
            el.appendChild(footer);
        }

        // Edit button on user messages — only visible on the most-recent one.
        if (role === 'user') {
            const editActions = document.createElement('div');
            editActions.className = 'local-ai-course-assistant__msg-actions--user';
            const editBtn = document.createElement('button');
            editBtn.className = 'local-ai-course-assistant__btn-edit';
            editBtn.setAttribute('aria-label', 'Edit message');
            editBtn.setAttribute('title', 'Edit message');
            editBtn.innerHTML = EDIT_SVG;
            editBtn.addEventListener('click', function() {
                const text = content.textContent || '';
                // Remove this message and everything that came after it.
                let node = el;
                while (node) {
                    const next = node.nextSibling;
                    if (node !== scrollDownBtn) {
                        node.remove();
                    }
                    node = next;
                }
                // Update lastUserMsgEl to the new last user message (if any).
                const remaining = messagesContainer.querySelectorAll(
                    '.local-ai-course-assistant__message--user');
                if (lastUserMsgEl) {
                    lastUserMsgEl.classList.remove('local-ai-course-assistant__message--last-user');
                }
                lastUserMsgEl = remaining.length ? remaining[remaining.length - 1] : null;
                if (lastUserMsgEl) {
                    lastUserMsgEl.classList.add('local-ai-course-assistant__message--last-user');
                }
                // Populate the input.
                input.value = text;
                autoResizeInput();
                updateSendButton();
                input.focus();
            });
            editActions.appendChild(editBtn);
            el.appendChild(editActions);

            // Shift the "last user" marker to this new message.
            if (lastUserMsgEl) {
                lastUserMsgEl.classList.remove('local-ai-course-assistant__message--last-user');
            }
            lastUserMsgEl = el;
            el.classList.add('local-ai-course-assistant__message--last-user');
        }

        // Timestamp label (shown on hover).
        if (msgTs) {
            const timeEl = document.createElement('div');
            timeEl.className = 'local-ai-course-assistant__message-time';
            const d = new Date(msgTs);
            timeEl.textContent = d.toLocaleTimeString(undefined, {hour: '2-digit', minute: '2-digit'});
            el.appendChild(timeEl);
        }

        appendMessageNode(el);
        if (role === 'assistant') {
            // Bring the top of SOLA's reply into view so students read from the start.
            scrollToMessageTop(el);
        } else {
            scrollToBottom();
        }
        return el;
    };

    /**
     * Mark a message element as currently being spoken (or not).
     *
     * @param {HTMLElement|null} el  The message element, or null to clear.
     * @param {boolean}          on  True = speaking, false = idle.
     */
    const setSpeakingState = function(el, on) {
        // Clear previous.
        if (speakingEl && speakingEl !== el) {
            speakingEl.classList.remove('local-ai-course-assistant__message--speaking');
            const prevBtn = speakingEl.querySelector('.local-ai-course-assistant__btn-speak');
            if (prevBtn) {
                prevBtn.classList.remove('local-ai-course-assistant__btn-speak--active');
            }
        }
        speakingEl = on ? el : null;
        if (el) {
            el.classList.toggle('local-ai-course-assistant__message--speaking', on);
            const btn = el.querySelector('.local-ai-course-assistant__btn-speak');
            if (btn) {
                btn.classList.toggle('local-ai-course-assistant__btn-speak--active', on);
            }
        }

        // Animate the toggle-button and header avatars while TTS is active.
        if (root) {
            root.querySelectorAll('.aica-avatar-svg--toggle, .aica-avatar-svg--header').forEach(function(av) {
                av.classList.toggle('aica-avatar-svg--speaking', !!on);
            });
        }
        // Pulse-glow the toggle button itself (drives the CSS @keyframes aica-speaking-glow).
        if (toggle) {
            toggle.classList.toggle('aica-speaking', !!on);
        }
    };

    /** @type {HTMLElement|null} Stop button shown during streaming */
    let stopStreamBtn = null;

    /**
     * Start streaming a new assistant message.
     *
     * @param {Function|null} onStop  Optional callback invoked when the user clicks "Stop"
     * @returns {HTMLElement} The streaming message element
     */
    const startStreaming = function(onStop) {
        showTyping(false);
        scrollFollowMode = false;
        streamingEl = addMessage('assistant', '');

        // If onStop provided and no stop button already showing, create one in the fixed slot.
        if (onStop && !stopStreamBtn) {
            showStopButton(onStop);
        }

        return streamingEl;
    };

    /**
     * Remove the stop-stream button if present.
     */
    const removeStopButton = function() {
        if (stopStreamBtn && stopStreamBtn.parentNode) {
            var slot = stopStreamBtn.parentNode;
            slot.removeChild(stopStreamBtn);
            if (slot.classList && slot.classList.contains('local-ai-course-assistant__stop-slot')) {
                slot.hidden = true;
            }
        }
        stopStreamBtn = null;
    };

    /**
     * Show a standalone stop button in the fixed slot (always visible, not scrollable).
     *
     * @param {Function} onStop  Callback when the user clicks Stop
     */
    const showStopButton = function(onStop) {
        removeStopButton();
        if (!onStop) { return; }
        var slot = root ? root.querySelector('.local-ai-course-assistant__stop-slot') : null;
        if (!slot) { return; }
        stopStreamBtn = document.createElement('button');
        stopStreamBtn.className = 'aica-stop-stream-btn';
        stopStreamBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">'
            + '<rect x="4" y="4" width="16" height="16" rx="2"/></svg> Stop';
        stopStreamBtn.addEventListener('click', function() {
            onStop();
            removeStopButton();
        });
        slot.appendChild(stopStreamBtn);
        slot.hidden = false;
    };

    /**
     * Internal: advance the typewriter by TYPEWRITER_SPEED characters and re-render.
     */
    const tickTypewriter = function() {
        if (!streamingEl) {
            clearTypewriterTimer();
            return;
        }
        const target = typewriterFull.length;
        if (typewriterPos >= target) {
            return; // Caught up — more tokens may still arrive
        }

        // If not in follow mode, check whether the message top has reached the
        // container top. If so, pause the typewriter — don't reveal more text
        // until the user scrolls down or clicks the down arrow.
        if (!scrollFollowMode && messagesContainer && streamingEl) {
            var containerTop = messagesContainer.getBoundingClientRect().top;
            var msgTop = streamingEl.getBoundingClientRect().top;
            // Message top is at or above the container top — pause.
            if (msgTop <= containerTop + 4) {
                return;
            }
        }

        typewriterPos = Math.min(typewriterPos + TYPEWRITER_SPEED, target);
        const partial = typewriterFull.substring(0, typewriterPos);
        const content = streamingEl.querySelector('.local-ai-course-assistant__message-content');
        if (content) {
            content.innerHTML = Markdown.sanitize(Markdown.render(partial));
            programmaticScroll = true;
            if (scrollFollowMode) {
                // User scrolled down or clicked the down arrow — follow the bottom.
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            } else if (messagesContainer) {
                // Auto-scroll to reveal new text, keeping the message top visible.
                var cTop = messagesContainer.getBoundingClientRect().top;
                var mTop = streamingEl.getBoundingClientRect().top;
                var msgOffsetInScroll = mTop - cTop + messagesContainer.scrollTop;
                var maxScroll = msgOffsetInScroll - 4;
                var idealScroll = messagesContainer.scrollHeight - messagesContainer.clientHeight;
                messagesContainer.scrollTop = Math.min(idealScroll, maxScroll);
            }
            programmaticScroll = false;
        }
    };

    /**
     * Clear the typewriter timer and reset state.
     */
    const clearTypewriterTimer = function() {
        if (typewriterTimer) {
            clearInterval(typewriterTimer);
            typewriterTimer = null;
        }
        typewriterFull = '';
        typewriterPos = 0;
    };

    /**
     * Append a chunk to the current streaming message using typewriter animation.
     * Queues the new text; a timer reveals it character-by-character.
     *
     * @param {string} fullText The full accumulated text so far
     */
    const updateStreamContent = function(fullText) {
        if (!streamingEl) {
            return;
        }
        typewriterFull = fullText;
        if (!typewriterTimer) {
            typewriterTimer = setInterval(tickTypewriter, 20);
        }
    };

    /**
     * Finish the current streaming message.
     *
     * @param {string}        fullText  The final complete text
     * @param {Function|null} onSpeak   Optional TTS callback; if provided, adds speak button
     */
    const finishStreaming = function(fullText, onSpeak) {
        // Remove stop button and stop typewriter animation.
        removeStopButton();
        clearTypewriterTimer();
        if (streamingEl) {
            const completedEl = streamingEl;
            const content = streamingEl.querySelector('.local-ai-course-assistant__message-content');
            content.innerHTML = Markdown.sanitize(Markdown.render(fullText));

            // Ensure footer wrapper exists (source slot + action buttons).
            let footer = streamingEl.querySelector('.local-ai-course-assistant__msg-footer');
            if (!footer) {
                footer = document.createElement('div');
                footer.className = 'local-ai-course-assistant__msg-footer';
                var sourceSlot = document.createElement('div');
                sourceSlot.className = 'local-ai-course-assistant__msg-source-slot';
                footer.appendChild(sourceSlot);
                footer.appendChild(createMsgActions(content, streamingEl, onSpeak, fullText));
                streamingEl.appendChild(footer);
            } else {
                // Footer exists — ensure speak button is present.
                let actions = footer.querySelector('.local-ai-course-assistant__msg-actions');
                if (!actions) {
                    actions = createMsgActions(content, streamingEl, onSpeak, fullText);
                    footer.appendChild(actions);
                } else if (onSpeak && !actions.querySelector('.local-ai-course-assistant__btn-speak')) {
                    const capturedEl = streamingEl;
                    const speakBtn = document.createElement('button');
                    speakBtn.className = 'local-ai-course-assistant__btn-speak';
                    speakBtn.setAttribute('aria-label', 'Read aloud');
                    speakBtn.setAttribute('title', 'Read aloud');
                    speakBtn.innerHTML = SPEAK_SVG;
                    speakBtn.addEventListener('click', function() {
                        onSpeak(content.textContent || '', capturedEl, speakBtn);
                    });
                    actions.appendChild(speakBtn);
                }
            }

            streamingEl = null;
            programmaticScroll = true;
            if (scrollFollowMode) {
                // User was following — land at the bottom of the completed message.
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
                scrollFollowMode = false;
            } else {
                // Default: snap to the message top so students read from the beginning.
                scrollToMessageTop(completedEl);
            }
            programmaticScroll = false;
        }
    };

    /**
     * Scroll messages to bottom, but only if user is near the bottom.
     *
     * @param {boolean} force Force scroll regardless of position
     */
    const scrollToBottom = function(force) {
        if (!messagesContainer) {
            return;
        }
        const threshold = 100;
        const isNearBottom = messagesContainer.scrollHeight - messagesContainer.scrollTop -
            messagesContainer.clientHeight < threshold;

        if (force || isNearBottom) {
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
    };

    /**
     * Scroll so the TOP of a message element is at the top of the messages container.
     * Smooth-scrolls so the student reads from the beginning of a new response.
     *
     * @param {HTMLElement} el  The message element to reveal
     */
    const scrollToMessageTop = function(el) {
        if (!messagesContainer || !el) {
            return;
        }
        const offset = el.getBoundingClientRect().top
            - messagesContainer.getBoundingClientRect().top
            + messagesContainer.scrollTop;
        messagesContainer.scrollTo({top: Math.max(0, offset - 4), behavior: 'smooth'});
    };

    /**
     * Show or hide the typing indicator.
     *
     * @param {boolean} show
     */
    const showTyping = function(show) {
        if (typingIndicator) {
            typingIndicator.setAttribute('aria-hidden', show ? 'false' : 'true');
        }
        if (show) {
            scrollToBottom(true);
        }
    };

    /**
     * Enable or disable the input area.
     *
     * @param {boolean} enabled
     */
    const setInputEnabled = function(enabled) {
        input.disabled = !enabled;
        updateSendButton();
    };

    // -----------------------------------------------------------------------
    // Bookmark helpers (localStorage, scoped per course)
    // -----------------------------------------------------------------------

    let bookmarks = null; // loaded lazily

    const getBookmarkKey = function() {
        return BOOKMARK_PREFIX + (root ? (root.dataset.courseid || '0') : '0');
    };

    const getBookmarks = function() {
        if (bookmarks !== null) { return bookmarks; }
        try { bookmarks = JSON.parse(localStorage.getItem(getBookmarkKey()) || '[]'); }
        catch (e) { bookmarks = []; }
        return bookmarks;
    };

    const saveBookmarks = function() {
        try { localStorage.setItem(getBookmarkKey(), JSON.stringify(getBookmarks())); }
        catch (e) { /**/ }
    };

    const isBookmarked = function(text) {
        return text && getBookmarks().some(function(b) { return b.text === text; });
    };

    const setBookmarkButtonState = function(btn, saved) {
        if (!btn) {
            return;
        }
        btn.classList.toggle('local-ai-course-assistant__btn-bookmark--saved', !!saved);
        btn.setAttribute('aria-label', saved ? 'Remove from saved' : 'Save response');
        btn.setAttribute('title', saved ? 'Remove from saved' : 'Save response');
    };

    const syncBookmarkButtonsForText = function(text, saved) {
        if (!messagesContainer || !text) {
            return;
        }
        messagesContainer.querySelectorAll('.local-ai-course-assistant__btn-bookmark').forEach(function(button) {
            const message = button.closest('.local-ai-course-assistant__message');
            const content = message ? message.querySelector('.local-ai-course-assistant__message-content') : null;
            if (content && content.textContent === text) {
                setBookmarkButtonState(button, saved);
            }
        });
    };

    const removeBookmarkByText = function(text) {
        if (!text) {
            return false;
        }
        const bmarks = getBookmarks();
        const idx = bmarks.findIndex(function(b) { return b.text === text; });
        if (idx < 0) {
            return false;
        }
        bmarks.splice(idx, 1);
        saveBookmarks();
        syncBookmarkButtonsForText(text, false);
        renderHistoryPanel();
        return true;
    };

    const toggleBookmark = function(text, btn, sourceInfo) {
        if (!text) {
            return;
        }
        const bmarks = getBookmarks();
        const idx = bmarks.findIndex(function(b) { return b.text === text; });
        if (idx >= 0) {
            removeBookmarkByText(text);
            setBookmarkButtonState(btn, false);
            showNotification('Removed from saved responses');
        } else {
            var entry = {text: text, saved_at: Date.now()};
            if (sourceInfo && sourceInfo.label) {
                entry.source = sourceInfo.label;
                if (sourceInfo.href) {
                    entry.sourceHref = sourceInfo.href;
                }
            }
            bmarks.push(entry);
            saveBookmarks();
            syncBookmarkButtonsForText(text, true);
            setBookmarkButtonState(btn, true);
            renderHistoryPanel();
            showNotification('Saved!');
        }
    };

    // -----------------------------------------------------------------------
    // Message action button SVG fragments (shared between addMessage / finishStreaming)
    // -----------------------------------------------------------------------

    const COPY_SVG =
        '<svg class="aica-icon-copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
        ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
        '<path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11' +
        'c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/></svg>' +
        '<svg class="aica-icon-check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
        ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
        '<path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>';

    const BOOKMARK_SVG =
        '<svg class="aica-icon-bookmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
        ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
        '<path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"/></svg>' +
        '<svg class="aica-icon-bookmark-saved" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
        ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
        '<path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2z"/></svg>';

    const EDIT_SVG =
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
        ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
        '<path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25z"/>' +
        '<path d="M20.71 7.04a1 1 0 0 0 0-1.41l-2.34-2.34a1 1 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>' +
        '</svg>';

    const SPEAK_SVG =
        '<svg class="aica-icon-speak" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
        ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
        '<path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3A4.5 4.5 0 0 0 14 7.97v8.05c1.48-.73 2.5-2.25 2.5-4.02z"/>' +
        '<path d="M14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77' +
        ' 0-4.28-2.99-7.86-7-8.77z"/></svg>' +
        '<svg class="aica-icon-stop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
        ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
        '<path d="M6 6h12v12H6z"/></svg>';

    /**
     * Create the action buttons container for an assistant message.
     * Always includes copy + bookmark; adds speak if onSpeak provided.
     *
     * @param {HTMLElement}   content  The message content div (used for clipboard/bookmark text)
     * @param {HTMLElement}   el       The message element (for speak callback)
     * @param {Function|null} onSpeak  Speak callback, or null
     * @param {string}        text     Pre-known text (for bookmark initial state)
     * @returns {HTMLElement}
     */
    const createMsgActions = function(content, el, onSpeak, text) {
        const actions = document.createElement('div');
        actions.className = 'local-ai-course-assistant__msg-actions';

        // Copy button.
        const copyBtn = document.createElement('button');
        copyBtn.className = 'local-ai-course-assistant__btn-copy';
        copyBtn.setAttribute('aria-label', 'Copy');
        copyBtn.setAttribute('title', 'Copy');
        copyBtn.innerHTML = COPY_SVG;
        copyBtn.addEventListener('click', function() {
            const t = content.textContent || '';
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(t).then(function() {
                    copyBtn.classList.add('local-ai-course-assistant__btn-copy--done');
                    setTimeout(function() {
                        copyBtn.classList.remove('local-ai-course-assistant__btn-copy--done');
                    }, 2000);
                }).catch(function() { /**/ });
            }
        });
        actions.appendChild(copyBtn);

        // Bookmark button.
        const bookmarkBtn = document.createElement('button');
        bookmarkBtn.className = 'local-ai-course-assistant__btn-bookmark';
        const savedNow = text ? isBookmarked(text) : false;
        setBookmarkButtonState(bookmarkBtn, savedNow);
        bookmarkBtn.innerHTML = BOOKMARK_SVG;
        bookmarkBtn.addEventListener('click', function() {
            // Extract source link info from the message's source pill if present.
            var sourceInfo = null;
            var msgEl = el || content.closest('.local-ai-course-assistant__message');
            if (msgEl) {
                var pill = msgEl.querySelector('.aica-source-pill');
                if (pill) {
                    sourceInfo = {label: pill.textContent, href: pill.href || ''};
                }
            }
            toggleBookmark(content.textContent || '', bookmarkBtn, sourceInfo);
        });
        actions.appendChild(bookmarkBtn);

        // Thumbs up button — styled to match copy/bookmark/speak buttons.
        const thumbUpBtn = document.createElement('button');
        thumbUpBtn.className = 'local-ai-course-assistant__btn-thumb-up';
        thumbUpBtn.setAttribute('aria-label', 'Thumbs up');
        thumbUpBtn.setAttribute('title', 'Helpful');
        thumbUpBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10v12"/><path d="M15 5.88L14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88z"/></svg>';
        actions.appendChild(thumbUpBtn);

        // Thumbs down button — styled to match copy/bookmark/speak buttons.
        const thumbDownBtn = document.createElement('button');
        thumbDownBtn.className = 'local-ai-course-assistant__btn-thumb-down';
        thumbDownBtn.setAttribute('aria-label', 'Thumbs down');
        thumbDownBtn.setAttribute('title', 'Not helpful');
        thumbDownBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 14V2"/><path d="M9 18.12L10 14H4.17a2 2 0 0 1-1.92-2.56l2.33-8A2 2 0 0 1 6.5 2H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.76a2 2 0 0 0-1.79 1.11L12 22a3.13 3.13 0 0 1-3-3.88z"/></svg>';
        actions.appendChild(thumbDownBtn);

        // Wire up thumb rating handlers.
        var ratingState = {rating: 0};
        thumbUpBtn.addEventListener('click', function() {
            var newRating = ratingState.rating === 1 ? 0 : 1;
            ratingState.rating = newRating;
            thumbUpBtn.classList.toggle('active-up', newRating === 1);
            thumbDownBtn.classList.remove('active-down');
            // Remove any open feedback form.
            var form = actions.parentElement.querySelector('.aica-rating-feedback');
            if (form) { form.remove(); }
            if (newRating !== 0 && el && el.dataset.messageid) {
                submitRating(el.dataset.messageid, newRating, 0, '');
            }
        });
        thumbDownBtn.addEventListener('click', function() {
            var newRating = ratingState.rating === -1 ? 0 : -1;
            ratingState.rating = newRating;
            thumbDownBtn.classList.toggle('active-down', newRating === -1);
            thumbUpBtn.classList.remove('active-up');
            if (newRating === -1) {
                showRatingFeedback(actions.parentElement, el, ratingState);
            } else {
                var form = actions.parentElement.querySelector('.aica-rating-feedback');
                if (form) { form.remove(); }
            }
        });

        // Speak button (optional).
        if (onSpeak) {
            const speakBtn = document.createElement('button');
            speakBtn.className = 'local-ai-course-assistant__btn-speak';
            speakBtn.setAttribute('aria-label', 'Read aloud');
            speakBtn.setAttribute('title', 'Read aloud');
            speakBtn.innerHTML = SPEAK_SVG;
            speakBtn.addEventListener('click', function() {
                onSpeak(content.textContent || '', el, speakBtn);
            });
            actions.appendChild(speakBtn);
        }

        return actions;
    };

    /**
     * Add a date separator to the messages area.
     * @param {string} label e.g. 'Today', 'Yesterday', 'March 1, 2026'
     */
    const addDateSeparator = function(label) {
        const el = document.createElement('div');
        el.className = 'local-ai-course-assistant__date-separator';
        el.innerHTML = '<span>' + label + '</span>';
        appendMessageNode(el);
    };

    /**
     * Clear all messages from the messages area.
     */
    const clearMessages = function() {
        messagesContainer.innerHTML = '';
        ensureScrollDownButtonMounted();
        if (scrollDownBtn) {
            scrollDownBtn.classList.remove('local-ai-course-assistant__scroll-down--visible');
        }
        streamingEl = null;
        lastUserMsgEl = null;
    };

    /**
     * Get the current input value.
     *
     * @returns {string}
     */
    const getInputValue = function() {
        return input.value.trim();
    };

    /**
     * Clear the input field and reset height.
     */
    const clearInput = function() {
        input.value = '';
        autoResizeInput();
        updateSendButton();
    };

    /**
     * Auto-resize the textarea based on content.
     */
    const autoResizeInput = function() {
        input.style.height = 'auto';
        input.style.height = Math.min(input.scrollHeight, 120) + 'px';
    };

    /**
     * Update the send button enabled state.
     */
    const updateSendButton = function() {
        sendBtn.disabled = !input.value.trim() || input.disabled;
    };

    /**
     * Get UI element references for event binding.
     *
     * @returns {Object}
     */
    const getElements = function() {
        return {
            root: root,
            drawer: drawer,
            toggle: toggle,
            closeToggle: closeToggle,
            messagesContainer: messagesContainer,
            input: input,
            sendBtn: sendBtn,
            closeBtn: root.querySelector('.local-ai-course-assistant__btn-close'),
            clearBtn: root.querySelector('.local-ai-course-assistant__btn-clear'),
            helpBtn: root.querySelector('.local-ai-course-assistant__btn-help'),
            helpPanel: root.querySelector('.aica-help-panel'),
            helpCloseBtn: root.querySelector('.aica-help-panel__close'),
            copyBtn: root.querySelector('.local-ai-course-assistant__btn-copy'),
            micBtn: micBtn,
            langBtn: langBtn,
            llmProviderSelect: llmProviderSelect,
            llmModelSelect: llmModelSelect,
            modeButtons: root.querySelectorAll('.local-ai-course-assistant__mode-btn'),
            voiceStartBtn: root.querySelector('.aica-voice-panel__start'),
            historyRefreshBtn: root.querySelector('.aica-history-panel__refresh'),
        };
    };

    /**
     * Get all messages from the messages container.
     *
     * @returns {Array} Array of message objects
     */
    const getMessages = function() {
        const messageEls = messagesContainer.querySelectorAll('.local-ai-course-assistant__message');
        return Array.from(messageEls).map(function(el) {
            const role = el.getAttribute('data-role');
            const content = el.querySelector('.local-ai-course-assistant__message-content');
            return {
                role: role,
                content: content.textContent.trim(),
                timestamp: Date.now(),
            };
        });
    };

    /**
     * Show a temporary notification toast.
     *
     * @param {string} message The notification message
     * @param {string} type 'success' or 'error'
     */
    const showNotification = function(message, type) {
        type = type || 'success';
        const notification = document.createElement('div');
        notification.className = 'local-ai-course-assistant__notification local-ai-course-assistant__notification--' + type;
        notification.textContent = message;
        notification.setAttribute('role', 'status');
        notification.setAttribute('aria-live', 'polite');

        root.appendChild(notification);

        // Show with animation.
        setTimeout(function() {
            notification.classList.add('local-ai-course-assistant__notification--visible');
        }, 10);

        // Hide and remove after 3 seconds.
        setTimeout(function() {
            notification.classList.remove('local-ai-course-assistant__notification--visible');
            setTimeout(function() {
                notification.remove();
            }, 300);
        }, 3000);
    };

    /**
     * Pre-apply the welcome class to the drawer so it opens with starters/input
     * hidden, preventing a flash of empty content before the welcome panel loads.
     */
    const preWelcome = function() {
        if (drawer) {
            drawer.classList.add('local-ai-course-assistant__drawer--welcome');
        }
    };

    /**
     * Show welcome screen on first use.
     * Renders as a full overlay inside the drawer.
     *
     * @param {Function=} onComplete Called when the user accepts the intro.
     */
    const showIntroModal = function(onComplete) {
        const avatarUrl = root.dataset.avatarurl || '';
        const firstName = root.dataset.firstname || '';
        const displayName = root.dataset.shortname || root.dataset.displayname || 'SOLA';
        const courseName = root.dataset.coursename || '';
        const customWelcome = root.dataset.welcomeMessage || '';
        const welcomeName = firstName ? ', ' + firstName : '';
        const hasTts = !!(root.dataset.ttsurl);
        const hasPronunciation = !!(root.querySelector('[data-starter="ell-pronunciation"]'));
        const existing = drawer ? drawer.querySelector('.local-ai-course-assistant__welcome') : null;
        if (existing) {
            existing.remove();
        }

        // Build the welcome title and subtitle.
        var welcomeTitle, welcomeSubtitle;
        if (customWelcome) {
            // Replace variables in custom message; split on first newline for title vs subtitle.
            var resolved = customWelcome
                .replace(/\{\{firstname\}\}/gi, firstName || 'there')
                .replace(/\{\{coursename\}\}/gi, courseName);
            var parts = resolved.split(/\n+/);
            welcomeTitle = parts[0];
            welcomeSubtitle = parts.length > 1 ? parts.slice(1).join(' ') : '';
        } else {
            welcomeTitle = 'Hi' + welcomeName + ', I\'m ' + displayName + '!';
            welcomeSubtitle = 'Your personal study coach.';
        }

        const panel = document.createElement('div');
        panel.className = 'local-ai-course-assistant__welcome';
        panel.setAttribute('role', 'region');
        panel.setAttribute('aria-label', 'Welcome');

        panel.innerHTML =
            (avatarUrl
                ? '<img src="' + avatarUrl + '" alt="" class="local-ai-course-assistant__welcome-avatar" aria-hidden="true" />'
                : '') +
            '<h2 class="local-ai-course-assistant__welcome-title">' + welcomeTitle.replace(/</g, '&lt;') + '</h2>' +
            (welcomeSubtitle
                ? '<p class="local-ai-course-assistant__welcome-subtitle">' + welcomeSubtitle.replace(/</g, '&lt;') + '</p>'
                : '') +
            '<ul class="local-ai-course-assistant__welcome-features">' +
            '<li>' +
            '<span class="local-ai-course-assistant__welcome-feature-icon" aria-hidden="true">\ud83c\udfaf</span>' +
            '<span><strong>Focused study sessions</strong> \u2014 pick a topic and time limit</span>' +
            '</li>' +
            '<li>' +
            '<span class="local-ai-course-assistant__welcome-feature-icon" aria-hidden="true">\u26a1</span>' +
            '<span><strong>Adaptive quizzes</strong> \u2014 targeted practice based on your scores</span>' +
            '</li>' +
            (hasTts
                ? '<li>' +
                  '<span class="local-ai-course-assistant__welcome-feature-icon" aria-hidden="true">\ud83c\udfa4</span>' +
                  '<span><strong>Practice Speaking</strong> \u2014 voice conversations about the course</span>' +
                  '</li>'
                : '') +
            (hasPronunciation
                ? '<li>' +
                  '<span class="local-ai-course-assistant__welcome-feature-icon" aria-hidden="true">\ud83d\udd0a</span>' +
                  '<span><strong>Pronunciation Practice</strong> \u2014 instant feedback on words and phrases</span>' +
                  '</li>'
                : '') +
            '</ul>' +
            '<div class="local-ai-course-assistant__welcome-disclaimer">' +
            '<strong>AI notice:</strong> ' + displayName + ' uses AI-generated responses to support learning. It can be wrong, incomplete, or outdated, so students should double-check important information with course materials and their instructor.' +
            '</div>' +
            '<button class="local-ai-course-assistant__welcome-cta">Continue \u2192</button>';

        // Insert as a flex child immediately after the header so it naturally
        // starts below it — no absolute positioning or height measurement needed.
        var headerEl = drawer.querySelector('.local-ai-course-assistant__header');
        if (headerEl && headerEl.nextSibling) {
            drawer.insertBefore(panel, headerEl.nextSibling);
        } else {
            drawer.appendChild(panel);
        }

        // Hide starters, messages, and input while welcome is showing so the
        // screen is clean — the CTA replaces the input area.
        if (drawer) {
            drawer.classList.add('local-ai-course-assistant__drawer--welcome');
        }

        // Single rAF for the fade-in (browser needs one frame to register the element).
        requestAnimationFrame(function() {
            panel.classList.add('local-ai-course-assistant__welcome--visible');
            var cta = panel.querySelector('.local-ai-course-assistant__welcome-cta');
            if (cta) {
                cta.focus();
            }
        });

        // Dismiss on CTA click.
        var ctaBtn = panel.querySelector('.local-ai-course-assistant__welcome-cta');
        ctaBtn.addEventListener('click', function() {
            panel.classList.remove('local-ai-course-assistant__welcome--visible');
            if (drawer) {
                drawer.classList.remove('local-ai-course-assistant__drawer--welcome');
            }
            if (typeof onComplete === 'function') {
                onComplete();
            }
            setTimeout(function() {
                panel.remove();
            }, 300);
        });
    };

    /**
     * Hide the conversation starters panel (once the user has sent a message).
     */
    const hideStarters = function() {
        if (!root) {
            return;
        }
        const starters = root.querySelector('.local-ai-course-assistant__starters');
        if (starters) {
            starters.style.display = 'none';
        }
    };

    /**
     * Show the conversation starters panel (e.g. after a reset).
     */
    const showStarters = function() {
        if (!root) {
            return;
        }
        const starters = root.querySelector('.local-ai-course-assistant__starters');
        if (starters) {
            starters.style.display = '';
        }
    };

    /**
     * Switch the drawer between chat, voice, and history modes.
     *
     * @param {string} mode
     */
    const setBottomMode = function(mode) {
        if (!root || !drawer) {
            return;
        }
        const normalized = ['chat', 'voice', 'history'].indexOf(mode) !== -1 ? mode : 'chat';
        ['chat', 'voice', 'history'].forEach(function(name) {
            drawer.classList.toggle('local-ai-course-assistant__drawer--mode-' + name, name === normalized);
        });
        root.querySelectorAll('.local-ai-course-assistant__mode-btn').forEach(function(btn) {
            const active = btn.dataset.mode === normalized;
            btn.classList.toggle('local-ai-course-assistant__mode-btn--active', active);
            btn.setAttribute('aria-pressed', active ? 'true' : 'false');
        });
        const voicePanel = root.querySelector('.local-ai-course-assistant__voice-panel');
        const historyPanel = root.querySelector('.local-ai-course-assistant__history-panel');
        if (voicePanel) {
            voicePanel.hidden = normalized !== 'voice';
        }
        if (historyPanel) {
            historyPanel.hidden = normalized !== 'history';
        }
    };

    /**
     * Enable or disable the bottom mode buttons.
     *
     * @param {boolean} enabled
     */
    const setModeButtonsEnabled = function(enabled) {
        if (!root) {
            return;
        }
        root.querySelectorAll('.local-ai-course-assistant__mode-btn').forEach(function(btn) {
            btn.disabled = !enabled;
        });
    };

    /**
     * Update the voice panel copy and CTA state.
     *
     * @param {{title?:string,text?:string,status?:string,buttonText?:string,disabled?:boolean}} config
     */
    const configureVoicePanel = function(config) {
        if (!root) {
            return;
        }
        const panel = root.querySelector('.local-ai-course-assistant__voice-panel');
        if (!panel) {
            return;
        }
        const titleEl = panel.querySelector('.aica-mode-card__title');
        const textEl = panel.querySelector('.aica-mode-card__text');
        const statusEl = panel.querySelector('.aica-mode-card__status');
        const startBtn = panel.querySelector('.aica-voice-panel__start');
        if (config.title !== undefined && titleEl) {
            titleEl.textContent = config.title;
        }
        if (config.text !== undefined && textEl) {
            textEl.textContent = config.text;
        }
        if (config.status !== undefined && statusEl) {
            statusEl.textContent = config.status;
        }
        if (config.buttonText !== undefined && startBtn) {
            startBtn.textContent = config.buttonText;
        }
        if (config.disabled !== undefined) {
            panel.classList.toggle('local-ai-course-assistant__voice-panel--disabled', !!config.disabled);
            if (startBtn) {
                startBtn.disabled = !!config.disabled;
            }
        }
        if (config.active !== undefined) {
            panel.classList.toggle('local-ai-course-assistant__voice-panel--active', !!config.active);
        }
    };

    /**
     * Format a history timestamp for the compact transcript panel.
     *
     * @param {number|string|null} ts
     * @returns {string}
     */
    const formatHistoryTimestamp = function(ts) {
        if (!ts) {
            return '';
        }
        const date = new Date(ts);
        if (isNaN(date.getTime())) {
            return '';
        }
        return date.toLocaleString(undefined, {
            month: 'short',
            day: 'numeric',
            hour: 'numeric',
            minute: '2-digit',
        });
    };

    /**
     * Switch the History panel between Recent and Saved views.
     *
     * @param {string} view
     */
    const setHistoryPanelView = function(view) {
        historyPanelView = view === 'saved' ? 'saved' : 'recent';
        if (!root) {
            return;
        }
        const panel = root.querySelector('.local-ai-course-assistant__history-panel');
        if (!panel) {
            return;
        }
        const subtitle = panel.querySelector('.aica-history-panel__subtitle');
        const refreshBtn = panel.querySelector('.aica-history-panel__refresh');
        const recentSubtitle = panel.dataset.recentSubtitle || (subtitle ? subtitle.textContent : '');
        const savedSubtitle = panel.dataset.savedSubtitle || 'Saved responses stay on this device for this course.';

        panel.querySelectorAll('.aica-history-panel__view').forEach(function(button) {
            const active = (button.dataset.historyView || 'recent') === historyPanelView;
            button.classList.toggle('aica-history-panel__view--active', active);
            button.setAttribute('aria-pressed', active ? 'true' : 'false');
        });

        if (subtitle) {
            subtitle.textContent = historyPanelView === 'saved' ? savedSubtitle : recentSubtitle;
        }
        if (refreshBtn) {
            refreshBtn.hidden = historyPanelView !== 'recent';
        }

        renderHistoryPanel();
    };

    /**
     * Render the compact chat history panel.
     *
     * @param {Array=} messages
     */
    const renderHistoryPanel = function(messages) {
        if (Array.isArray(messages)) {
            historyPanelMessages = messages.slice();
        }
        if (!root) {
            return;
        }
        const panel = root.querySelector('.local-ai-course-assistant__history-panel');
        const list = panel ? panel.querySelector('.aica-history-panel__list') : null;
        if (!panel || !list) {
            return;
        }

        list.innerHTML = '';

        if (historyPanelView === 'saved') {
            const savedItems = getBookmarks().slice().reverse();
            if (!savedItems.length) {
                const emptySaved = document.createElement('div');
                emptySaved.className = 'aica-history-panel__empty';
                emptySaved.textContent = panel.dataset.savedEmptyLabel || 'Save a SOLA response to see it here.';
                list.appendChild(emptySaved);
                return;
            }

            savedItems.forEach(function(item, itemIdx) {
                var entry = document.createElement('div');
                entry.className = 'aica-history-panel__item';

                var meta = document.createElement('div');
                meta.className = 'aica-history-panel__meta';

                var role = document.createElement('span');
                role.className = 'aica-history-panel__role aica-history-panel__role--saved';
                role.textContent = 'Saved';
                meta.appendChild(role);

                var stamp = formatHistoryTimestamp(item.saved_at || null);
                if (stamp) {
                    var time = document.createElement('span');
                    time.className = 'aica-history-panel__time';
                    time.textContent = stamp;
                    meta.appendChild(time);
                }

                var text = document.createElement('p');
                text.className = 'aica-history-panel__message';
                text.textContent = (item.text || '').replace(/\s+/g, ' ').trim();

                // Double-click or edit button to make editable.
                var makeEditable = function() {
                    text.contentEditable = 'true';
                    text.setAttribute('role', 'textbox');
                    text.setAttribute('aria-label', 'Edit saved message');
                    text.classList.add('aica-history-panel__message--editing');
                    text.focus();
                    // Select all text.
                    var range = document.createRange();
                    range.selectNodeContents(text);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                };
                var commitEdit = function() {
                    text.contentEditable = 'false';
                    text.removeAttribute('role');
                    text.removeAttribute('aria-label');
                    text.classList.remove('aica-history-panel__message--editing');
                    var newText = text.textContent.trim();
                    if (newText && newText !== item.text) {
                        // Update the bookmark in storage.
                        var bmarks = getBookmarks();
                        var realIdx = bmarks.length - 1 - itemIdx;
                        if (realIdx >= 0 && realIdx < bmarks.length) {
                            bmarks[realIdx].text = newText;
                            saveBookmarks();
                        }
                    }
                };
                text.addEventListener('dblclick', makeEditable);
                text.addEventListener('blur', commitEdit);
                text.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' && !e.shiftKey) {
                        e.preventDefault();
                        text.blur();
                    }
                    if (e.key === 'Escape') {
                        text.textContent = (item.text || '').replace(/\s+/g, ' ').trim();
                        text.contentEditable = 'false';
                        text.removeAttribute('role');
                        text.removeAttribute('aria-label');
                        text.classList.remove('aica-history-panel__message--editing');
                    }
                });

                var actions = document.createElement('div');
                actions.className = 'aica-history-panel__actions';

                var editBtn = document.createElement('button');
                editBtn.type = 'button';
                editBtn.className = 'aica-history-panel__action';
                editBtn.textContent = 'Edit';
                editBtn.addEventListener('click', makeEditable);
                actions.appendChild(editBtn);

                var copyBtn = document.createElement('button');
                copyBtn.type = 'button';
                copyBtn.className = 'aica-history-panel__action';
                copyBtn.textContent = 'Copy';
                copyBtn.addEventListener('click', function() {
                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(text.textContent || '').then(function() {
                            showNotification('Saved response copied');
                        }).catch(function() {
                            showNotification('Could not copy saved response right now.', 'error');
                        });
                    }
                });
                actions.appendChild(copyBtn);

                var removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'aica-history-panel__action';
                removeBtn.textContent = 'Remove';
                removeBtn.addEventListener('click', function() {
                    if (removeBookmarkByText(item.text || '')) {
                        showNotification('Removed from saved responses');
                    }
                });
                actions.appendChild(removeBtn);

                entry.appendChild(meta);
                entry.appendChild(text);

                // Footer row: source link left, action buttons right.
                var entryFooter = document.createElement('div');
                entryFooter.className = 'aica-history-panel__footer';
                if (item.source) {
                    var srcEl;
                    if (item.sourceHref) {
                        srcEl = document.createElement('a');
                        srcEl.href = item.sourceHref;
                        srcEl.target = '_blank';
                        srcEl.rel = 'noopener';
                    } else {
                        srcEl = document.createElement('span');
                    }
                    srcEl.className = 'aica-history-panel__source';
                    srcEl.textContent = item.source;
                    entryFooter.appendChild(srcEl);
                } else {
                    // Empty spacer for alignment.
                    var spacer = document.createElement('div');
                    entryFooter.appendChild(spacer);
                }
                entryFooter.appendChild(actions);
                entry.appendChild(entryFooter);
                list.appendChild(entry);
            });
            return;
        }

        const items = historyPanelMessages.map(function(msg) {
            const rawText = (msg.text !== undefined ? msg.text : msg.message) || '';
            const cleanText = rawText
                .replace(/\n*\[SOLA_NEXT\][\s\S]*?\[\/SOLA_NEXT\]/g, '')
                .replace(/\s+/g, ' ')
                .trim();
            return {
                role: msg.role || 'assistant',
                text: cleanText,
                timestamp: msg.timestamp || msg.timecreated || null,
            };
        }).filter(function(msg) {
            return !!msg.text;
        }).slice(-18).reverse();

        if (!items.length) {
            const empty = document.createElement('div');
            empty.className = 'aica-history-panel__empty';
            empty.textContent = panel.dataset.emptyLabel || 'Your conversation history will appear here.';
            list.appendChild(empty);
            return;
        }

        const youLabel = panel.dataset.youLabel || 'You';
        const assistantLabel = panel.dataset.assistantLabel || (root && root.dataset.shortname) || 'SOLA';

        items.forEach(function(msg) {
            var entry = document.createElement('div');
            entry.className = 'aica-history-panel__item';

            var meta = document.createElement('div');
            meta.className = 'aica-history-panel__meta';

            var role = document.createElement('span');
            role.className = 'aica-history-panel__role aica-history-panel__role--' + msg.role;
            role.textContent = msg.role === 'user' ? youLabel : assistantLabel;
            meta.appendChild(role);

            var stamp = formatHistoryTimestamp(msg.timestamp);
            if (stamp) {
                var time = document.createElement('span');
                time.className = 'aica-history-panel__time';
                time.textContent = stamp;
                meta.appendChild(time);
            }

            var text = document.createElement('p');
            text.className = 'aica-history-panel__message';
            text.textContent = msg.text.length > 180 ? msg.text.slice(0, 177).trim() + '...' : msg.text;

            entry.appendChild(meta);
            entry.appendChild(text);

            // Footer row: source link left, action buttons right.
            var entryFooter = document.createElement('div');
            entryFooter.className = 'aica-history-panel__footer';
            if (msg.source) {
                var srcEl;
                if (msg.sourceHref) {
                    srcEl = document.createElement('a');
                    srcEl.href = msg.sourceHref;
                    srcEl.target = '_blank';
                    srcEl.rel = 'noopener';
                } else {
                    srcEl = document.createElement('span');
                }
                srcEl.className = 'aica-history-panel__source';
                srcEl.textContent = msg.source;
                entryFooter.appendChild(srcEl);
            } else {
                var spacer = document.createElement('div');
                entryFooter.appendChild(spacer);
            }

            var actions = document.createElement('div');
            actions.className = 'aica-history-panel__actions';

            var copyBtn = document.createElement('button');
            copyBtn.type = 'button';
            copyBtn.className = 'aica-history-panel__action';
            copyBtn.textContent = 'Copy';
            copyBtn.addEventListener('click', function() {
                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText(msg.text || '').then(function() {
                        showNotification('Message copied');
                    }).catch(function() {
                        showNotification('Could not copy right now.', 'error');
                    });
                }
            });
            actions.appendChild(copyBtn);

            var saveBtn = document.createElement('button');
            saveBtn.type = 'button';
            saveBtn.className = 'aica-history-panel__action';
            saveBtn.textContent = isBookmarked(msg.text) ? 'Saved' : 'Save';
            saveBtn.addEventListener('click', function() {
                var bmarks = getBookmarks();
                if (!isBookmarked(msg.text)) {
                    var bEntry = {text: msg.text, saved_at: Date.now()};
                    if (msg.source) {
                        bEntry.source = msg.source;
                        if (msg.sourceHref) {
                            bEntry.sourceHref = msg.sourceHref;
                        }
                    }
                    bmarks.push(bEntry);
                    saveBookmarks();
                    showNotification('Saved!');
                    saveBtn.textContent = 'Saved';
                }
            });
            actions.appendChild(saveBtn);

            entryFooter.appendChild(actions);
            entry.appendChild(entryFooter);
            list.appendChild(entry);
        });
    };

    /**
     * Show the topic picker panel, hiding the input area.
     *
     * @param {Array}    topics
     * @param {Array}    learningObjectives
     * @param {Array}    moduleTitles
     * @param {string}   currentPageTitle   Current resource page title, or ''
     * @param {string}   titleStr   Already-translated panel heading
     * @param {string}   actionStr  Already-translated action button label
     * @param {Function} onSelect   Called with resolved topic string
     * @param {Function} onCancel
     */
    const showTopicPicker = function(topics, learningObjectives, moduleTitles, currentPageTitle,
                                     titleStr, actionStr, onSelect, onCancel) {
        if (!root) {
            return;
        }
        const inputArea = root.querySelector('.local-ai-course-assistant__input-area');
        if (inputArea) {
            inputArea.style.display = 'none';
        }
        if (drawer) {
            drawer.classList.add('local-ai-course-assistant__drawer--quiz-setup');
        }
        Quiz.showTopicPanel(
            root.querySelector('.local-ai-course-assistant__drawer'),
            topics, learningObjectives, moduleTitles, currentPageTitle,
            titleStr, actionStr, onSelect, onCancel
        );
    };

    /**
     * Hide the topic picker panel and restore the input area.
     */
    const hideTopicPicker = function() {
        if (!root) {
            return;
        }
        if (drawer) {
            drawer.classList.remove('local-ai-course-assistant__drawer--quiz-setup');
        }
        Quiz.hideTopicPanel(root.querySelector('.local-ai-course-assistant__drawer'));
        const inputArea = root.querySelector('.local-ai-course-assistant__input-area');
        if (inputArea) {
            inputArea.style.display = '';
        }
    };

    /**
     * Show the quiz setup panel, hiding the input area.
     *
     * @param {Array}    topics             Array of {name} course section objects
     * @param {Array}    learningObjectives Array of {name} learning objective objects
     * @param {Array}    moduleTitles       Array of {name} module/activity title objects
     * @param {string}   currentPageTitle   Current resource page title, or ''
     * @param {Function} onStart            Called with (count, topic)
     * @param {Function} onCancel           Called when cancelled
     */
    const showQuizSetup = function(topics, learningObjectives, moduleTitles, currentPageTitle, onStart, onCancel) {
        if (!root) {
            return;
        }
        const inputArea = root.querySelector('.local-ai-course-assistant__input-area');
        if (inputArea) {
            inputArea.style.display = 'none';
        }
        if (drawer) {
            drawer.classList.add('local-ai-course-assistant__drawer--quiz-setup');
        }
        Quiz.showSetupPanel(
            root.querySelector('.local-ai-course-assistant__drawer'),
            topics, learningObjectives, moduleTitles, currentPageTitle, onStart, onCancel
        );
    };

    /**
     * Hide the quiz setup panel and restore the input area.
     */
    const hideQuizSetup = function() {
        if (!root) {
            return;
        }
        if (drawer) {
            drawer.classList.remove('local-ai-course-assistant__drawer--quiz-setup');
        }
        Quiz.hideSetupPanel(root.querySelector('.local-ai-course-assistant__drawer'));
        const inputArea = root.querySelector('.local-ai-course-assistant__input-area');
        if (inputArea) {
            inputArea.style.display = '';
        }
    };

    /**
     * Append a quiz card to the messages area and run the quiz.
     *
     * @param {Array}    questions  Question objects from the API
     * @param {string}   topic      Quiz topic
     * @param {Function} onFinish   Called with (score, total, topic)
     */
    const showQuiz = function(questions, topic, onFinish, onExit) {
        if (!messagesContainer) {
            return;
        }
        scrollToBottom(true);
        Quiz.init(messagesContainer, questions, topic, onFinish, onExit);
        scrollToBottom(true);
    };

    /**
     * Show the avatar picker overlay in the drawer.
     *
     * @param {Array}    avatars       Array of {id, url} objects
     * @param {string}   currentUrl    URL of the currently selected avatar
     * @param {Function} onSelect      Called with (avatarId, avatarUrl) when user picks one
     */
    const showAvatarPicker = function(avatars, currentUrl, onSelect) {
        if (!drawer) {
            return;
        }
        // Remove any existing picker.
        const existing = drawer.querySelector('.aica-avatar-picker');
        if (existing) {
            existing.remove();
        }

        const overlay = document.createElement('div');
        overlay.className = 'aica-avatar-picker';

        const panel = document.createElement('div');
        panel.className = 'aica-avatar-picker__panel';

        const title = document.createElement('p');
        title.className = 'aica-avatar-picker__title';
        title.textContent = 'Choose your avatar';
        panel.appendChild(title);

        const grid = document.createElement('div');
        grid.className = 'aica-avatar-picker__grid';

        avatars.forEach(function(av) {
            const btn = document.createElement('button');
            btn.className = 'aica-avatar-option' + (av.url === currentUrl ? ' aica-avatar-option--selected' : '');
            btn.type = 'button';
            const img = document.createElement('img');
            img.src = av.url;
            img.alt = av.id;
            btn.appendChild(img);
            btn.addEventListener('click', function() {
                overlay.remove();
                onSelect(av.id, av.url);
            });
            grid.appendChild(btn);
        });
        panel.appendChild(grid);

        const cancelBtn = document.createElement('button');
        cancelBtn.className = 'aica-avatar-picker__cancel';
        cancelBtn.type = 'button';
        cancelBtn.textContent = 'Cancel';
        cancelBtn.addEventListener('click', function() {
            overlay.remove();
        });
        panel.appendChild(cancelBtn);

        overlay.appendChild(panel);
        drawer.appendChild(overlay);
    };

    /**
     * Update all avatar displays to show a new preset avatar URL.
     * Clears any generated SVG avatar and removes the localStorage SVG pref
     * so the preset image persists on reload.
     *
     * @param {string} newUrl The new avatar URL
     */
    const updateAvatarImages = function(newUrl) {
        if (!root) {
            return;
        }
        // Clear the stored SVG avatar pref so the preset persists on reload.
        try { localStorage.removeItem(AVATAR_KEY); } catch (e) { /**/ }

        // Replace SVG content in aica-avatar-svg containers with the preset img.
        root.querySelectorAll('.aica-avatar-svg').forEach(function(container) {
            container.classList.remove('aica-avatar-svg--has-svg');
            container.innerHTML = '<img src="' + newUrl + '" alt="" aria-hidden="true" ' +
                'style="width:100%;height:100%;border-radius:50%;display:block;' +
                'object-fit:cover;object-position:center top;" />';
        });

        // Also update any standalone avatar img elements (welcome screen etc).
        root.querySelectorAll(
            '.local-ai-course-assistant__avatar-img, .local-ai-course-assistant__header-avatar, ' +
            '.local-ai-course-assistant__welcome-avatar'
        ).forEach(function(img) {
            img.src = newUrl;
        });
    };

    /**
     * Show the voice mode overlay inside the drawer.
     *
     * @param {string}   avatarUrl  URL of the avatar image (unused in bar design; header avatar animates)
     * @param {Function} onEnd      Called when the user clicks the end-session button
     * @returns {HTMLElement} The bar element (passed to Realtime as overlayRoot for --aica-voice-level)
     */
    const showVoiceOverlay = function(avatarUrl, onEnd, instruction) {
        if (!drawer) { return null; }

        // Remove any existing bar.
        const existing = drawer.querySelector('.aica-voice-bar');
        if (existing) { existing.remove(); }

        const bar = document.createElement('div');
        bar.className = 'aica-voice-bar';

        // Waveform visualiser (5 bars driven by CSS + --aica-voice-level).
        const wave = document.createElement('div');
        wave.className = 'aica-voice-bar__wave';
        wave.setAttribute('aria-hidden', 'true');
        for (var i = 0; i < 5; i++) {
            wave.appendChild(document.createElement('span'));
        }
        bar.appendChild(wave);

        // Middle column: status text + optional instruction.
        const middle = document.createElement('div');
        middle.className = 'aica-voice-bar__middle';

        const status = document.createElement('span');
        status.className = 'aica-voice-status';
        status.textContent = 'Connecting…';
        middle.appendChild(status);

        if (instruction) {
            const hint = document.createElement('p');
            hint.className = 'aica-voice-instruction';
            hint.textContent = instruction;
            middle.appendChild(hint);
        }
        bar.appendChild(middle);

        // Insert before input area so messages remain visible above it.
        const inputArea = drawer.querySelector('.local-ai-course-assistant__input-area');
        if (inputArea) {
            drawer.insertBefore(bar, inputArea);
        } else {
            drawer.appendChild(bar);
        }
        return bar;
    };

    /**
     * Fade out and remove the voice bar.
     */
    const hideVoiceOverlay = function() {
        if (!drawer) { return; }
        const bar = drawer.querySelector('.aica-voice-bar');
        if (bar) {
            bar.style.transition = 'opacity 0.2s ease';
            bar.style.opacity = '0';
            setTimeout(function() { bar.remove(); }, 220);
        }
    };

    /**
     * Update visual state of the voice overlay (avatar animation + status pill).
     *
     * @param {string} state 'connecting'|'idle'|'listening'|'speaking'|'disconnected'
     */
    const setVoiceState = function(state) {
        if (!drawer) { return; }
        const bar = drawer.querySelector('.aica-voice-bar');
        if (!bar) { return; }

        bar.classList.remove(
            'aica-voice-bar--connecting', 'aica-voice-bar--idle',
            'aica-voice-bar--listening',  'aica-voice-bar--speaking',
            'aica-voice-bar--disconnected'
        );
        bar.classList.add('aica-voice-bar--' + state);

        const statusEl = bar.querySelector('.aica-voice-status');
        var shortName = (root && root.dataset.shortname) || (root && root.dataset.displayname) || 'SOLA';
        const labels = {
            connecting:   'Connecting…',
            idle:         'Listening…',
            listening:    'Listening…',
            speaking:     shortName + ' is speaking…',
            disconnected: 'Disconnected',
        };
        if (statusEl) {
            statusEl.textContent = labels[state] || state;
        }

    };

    /**
     * Append a voice transcript message to the main messages area.
     * Voice messages appear inline so the conversation is always visible.
     *
     * @param {string} role  'user' | 'assistant'
     * @param {string} text  Text content
     */
    const appendVoiceTranscript = function(role, text) {
        if (!messagesContainer) { return; }

        // Find the last voice message in the container.
        var allVoiceMsgs = messagesContainer.querySelectorAll('.aica-voice-msg');
        var lastMsg = allVoiceMsgs.length ? allVoiceMsgs[allVoiceMsgs.length - 1] : null;
        var lastRole = lastMsg ? (lastMsg.classList.contains('aica-voice-msg--assistant') ? 'assistant' : 'user') : null;

        // Append to the last message only if it's the same role (streaming chunks).
        if (lastMsg && lastRole === role) {
            var content = lastMsg.querySelector('.aica-voice-msg__text');
            if (content) { content.textContent += text; }
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
            return;
        }

        // Different role or no previous message: create a new message element.
        var msg = document.createElement('div');
        msg.className = 'aica-voice-msg aica-voice-msg--' + role;
        var content = document.createElement('span');
        content.className = 'aica-voice-msg__text';
        content.textContent = text;
        msg.appendChild(content);
        appendMessageNode(msg);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    };

    /**
     * Show the unified settings panel (language, avatar, voice).
     * Calling again while open closes it (toggle behaviour).
     *
     * @param {Object}   config
     * @param {Object}   config.langs              SUPPORTED_LANGS map
     * @param {string|null} config.currentLang     ISO 639-1 code or null for English
     * @param {Array}    config.avatars             [{id, url}]
     * @param {string}   config.currentAvatarUrl   Currently active avatar URL
     * @param {boolean}  config.realtimeEnabled     Whether voice mode is on
     * @param {Object}   callbacks
     * @param {Function} callbacks.onLangSelect     Called with (code|null, name)
     * @param {Function} callbacks.onAvatarSelect   Called with (id, url)
     */
    const showSettingsPanel = function(config, callbacks) {
        if (!drawer) {
            return;
        }

        // Toggle: if panel already open, close it.
        const existing = drawer.querySelector('.aica-settings-panel');
        if (existing) {
            existing.remove();
            return;
        }

        // Pending selections (only applied on Save).
        let pendingLang = config.currentLang || null;
        let pendingLangName = config.currentLang ? (config.langs[config.currentLang] || {}).name : 'English';
        let pendingAvatarId = null;
        let pendingAvatarUrl = config.currentAvatarUrl || null;
        let pendingVoice = config.currentVoice || 'marin';
        let pendingProvider = config.currentProvider || '';
        let pendingModel = config.currentModel || '';

        const panel = document.createElement('div');
        panel.className = 'aica-settings-panel';

        // --- Header ---
        const header = document.createElement('div');
        header.className = 'aica-settings-panel__header';
        const titleEl = document.createElement('span');
        titleEl.className = 'aica-settings-panel__title';
        titleEl.textContent = 'Settings';
        const closeBtn = document.createElement('button');
        closeBtn.className = 'aica-settings-panel__close';
        closeBtn.type = 'button';
        closeBtn.setAttribute('aria-label', 'Close settings');
        closeBtn.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"' +
            ' fill="currentColor" aria-hidden="true">' +
            '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41' +
            ' 17.59 19 19 17.59 13.41 12z"/></svg>';
        closeBtn.addEventListener('click', function() {
            panel.remove();
        });
        header.appendChild(titleEl);
        header.appendChild(closeBtn);
        panel.appendChild(header);

        // --- Scrollable content ---
        const content = document.createElement('div');
        content.className = 'aica-settings-panel__content';

        // ── Language (top of settings) ──
        const langSection = document.createElement('div');
        langSection.className = 'aica-settings-panel__section';
        const langHead = document.createElement('h3');
        langHead.className = 'aica-settings-panel__section-title';
        langHead.textContent = 'Language';
        langSection.appendChild(langHead);

        const langSelect = document.createElement('select');
        langSelect.className = 'aica-settings-panel__select';
        const enOption = document.createElement('option');
        enOption.value = '';
        enOption.textContent = 'English (default)';
        if (!config.currentLang) { enOption.selected = true; }
        langSelect.appendChild(enOption);
        Object.keys(config.langs).sort(function(a, b) {
            return config.langs[a].name.localeCompare(config.langs[b].name);
        }).forEach(function(code) {
            const opt = document.createElement('option');
            opt.value = code;
            opt.textContent = config.langs[code].name;
            if (config.currentLang === code) { opt.selected = true; }
            langSelect.appendChild(opt);
        });
        langSelect.addEventListener('change', function() {
            pendingLang = langSelect.value || null;
            pendingLangName = pendingLang ? (config.langs[pendingLang] || {}).name : 'English';
        });

        // English Lock: disable the language selector if locked by admin.
        if (root && root.dataset.englishLock === '1') {
            langSelect.disabled = true;
            langSelect.value = '';
            var lockNote = document.createElement('p');
            lockNote.className = 'aica-settings-panel__empty-note';
            lockNote.textContent = 'Language is locked to English by your administrator.';
            langSection.appendChild(lockNote);
        }

        langSection.appendChild(langSelect);
        content.appendChild(langSection);

        if (config.modelSwitchEnabled && config.providerOptions && config.providerOptions.length) {
            const llmSection = document.createElement('div');
            llmSection.className = 'aica-settings-panel__section';
            const llmHead = document.createElement('h3');
            llmHead.className = 'aica-settings-panel__section-title';
            llmHead.textContent = 'AI Model';
            llmSection.appendChild(llmHead);

            const llmNote = document.createElement('p');
            llmNote.className = 'aica-settings-panel__empty-note';
            llmNote.textContent = 'Only models that are currently configured by your administrator appear here.';
            llmSection.appendChild(llmNote);

            const providerSelect = document.createElement('select');
            providerSelect.className = 'aica-settings-panel__select';
            providerSelect.setAttribute('aria-label', 'AI provider');
            config.providerOptions.forEach(function(item) {
                const opt = document.createElement('option');
                opt.value = item.id;
                opt.textContent = item.label;
                if (item.id === pendingProvider) {
                    opt.selected = true;
                }
                providerSelect.appendChild(opt);
            });

            const modelSelect = document.createElement('select');
            modelSelect.className = 'aica-settings-panel__select';
            modelSelect.style.marginTop = '8px';
            modelSelect.setAttribute('aria-label', 'AI model');

            const renderModelOptions = function(providerId) {
                modelSelect.innerHTML = '';
                const providerConfig = config.providerOptions.find(function(item) {
                    return item.id === providerId;
                }) || config.providerOptions[0];
                if (!providerConfig) {
                    pendingProvider = '';
                    pendingModel = '';
                    return;
                }
                pendingProvider = providerConfig.id;
                let selectedModel = pendingModel;
                if (!selectedModel || providerConfig.models.indexOf(selectedModel) === -1) {
                    selectedModel = providerConfig.models[0] || '';
                }
                providerConfig.models.forEach(function(model) {
                    const opt = document.createElement('option');
                    opt.value = model;
                    opt.textContent = model;
                    if (model === selectedModel) {
                        opt.selected = true;
                    }
                    modelSelect.appendChild(opt);
                });
                pendingModel = selectedModel;
            };

            providerSelect.addEventListener('change', function() {
                renderModelOptions(providerSelect.value);
            });
            modelSelect.addEventListener('change', function() {
                pendingModel = modelSelect.value;
            });

            renderModelOptions(pendingProvider || (config.providerOptions[0] && config.providerOptions[0].id) || '');

            llmSection.appendChild(providerSelect);
            llmSection.appendChild(modelSelect);
            content.appendChild(llmSection);
        }

        // ── Coaching Style ──
        const coachSection = document.createElement('div');
        coachSection.className = 'aica-settings-panel__section';
        const coachHead = document.createElement('h3');
        coachHead.className = 'aica-settings-panel__section-title';
        coachHead.textContent = 'Coaching Style';
        coachSection.appendChild(coachHead);

        const coachSelect = document.createElement('select');
        coachSelect.className = 'aica-settings-panel__select';
        var currentCoach = '';
        try { currentCoach = localStorage.getItem('aica_coaching_style') || ''; } catch (e) { /**/ }
        var pendingCoach = currentCoach;
        [
            {id: '', label: 'Guided Learning (default)'},
            {id: 'coach', label: 'Motivational Coach'},
            {id: 'buddy', label: 'Study Buddy'},
            {id: 'tutor', label: 'Direct Tutor'},
        ].forEach(function(s) {
            var opt = document.createElement('option');
            opt.value = s.id;
            opt.textContent = s.label;
            if (currentCoach === s.id) { opt.selected = true; }
            coachSelect.appendChild(opt);
        });
        coachSelect.addEventListener('change', function() {
            pendingCoach = coachSelect.value;
        });
        coachSection.appendChild(coachSelect);

        // First-generation student toggle.
        var firstgenRow = document.createElement('div');
        firstgenRow.style.cssText = 'display:flex;align-items:center;gap:8px;margin-top:8px';
        var firstgenToggle = document.createElement('input');
        firstgenToggle.type = 'checkbox';
        firstgenToggle.id = 'aica-firstgen-toggle';
        try { firstgenToggle.checked = localStorage.getItem('aica_firstgen') === '1'; } catch (e) { /**/ }
        var firstgenLabel = document.createElement('label');
        firstgenLabel.htmlFor = 'aica-firstgen-toggle';
        firstgenLabel.textContent = 'I\'m a first-generation college student';
        firstgenLabel.style.cssText = 'font-size:12px;cursor:pointer;color:#6c757d';
        firstgenRow.appendChild(firstgenToggle);
        firstgenRow.appendChild(firstgenLabel);
        coachSection.appendChild(firstgenRow);

        content.appendChild(coachSection);

        // ── Avatar — built here, appended last (after Saved Responses) ──
        let avatarSection = null;
        if (config.avatars && config.avatars.length) {
            avatarSection = document.createElement('div');
            avatarSection.className = 'aica-settings-panel__section';
            const avatarHead = document.createElement('h3');
            avatarHead.className = 'aica-settings-panel__section-title';
            avatarHead.textContent = 'Avatar';
            avatarSection.appendChild(avatarHead);

            const grid = document.createElement('div');
            grid.className = 'aica-settings-panel__avatar-grid';
            config.avatars.forEach(function(av) {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'aica-settings-panel__avatar-opt' +
                    (av.url === config.currentAvatarUrl ? ' aica-settings-panel__avatar-opt--selected' : '');
                const img = document.createElement('img');
                img.src = av.url;
                img.alt = av.id;
                btn.appendChild(img);
                btn.addEventListener('click', function() {
                    grid.querySelectorAll('.aica-settings-panel__avatar-opt').forEach(function(b) {
                        b.classList.remove('aica-settings-panel__avatar-opt--selected');
                    });
                    btn.classList.add('aica-settings-panel__avatar-opt--selected');
                    pendingAvatarId = av.id;
                    pendingAvatarUrl = av.url;
                });
                grid.appendChild(btn);
            });
            avatarSection.appendChild(grid);
            // Not appended here — appended after Saved Responses below.
        }

        // ── Voice ──
        if (config.realtimeEnabled || config.hasTts) {
            const voiceSection = document.createElement('div');
            voiceSection.className = 'aica-settings-panel__section';
            const voiceHead = document.createElement('h3');
            voiceHead.className = 'aica-settings-panel__section-title';
            voiceHead.textContent = 'SOLA Voice';
            voiceSection.appendChild(voiceHead);
            const voiceSelect = document.createElement('select');
            voiceSelect.className = 'aica-settings-panel__select';
            [
                {id: 'marin',   label: 'Marin'},
                {id: 'cedar',   label: 'Cedar'},
                {id: 'alloy',   label: 'Alloy'},
                {id: 'ash',     label: 'Ash'},
                {id: 'ballad',  label: 'Ballad'},
                {id: 'coral',   label: 'Coral'},
                {id: 'echo',    label: 'Echo'},
                {id: 'fable',   label: 'Fable'},
                {id: 'nova',    label: 'Nova'},
                {id: 'onyx',    label: 'Onyx'},
                {id: 'sage',    label: 'Sage'},
                {id: 'shimmer', label: 'Shimmer'},
                {id: 'verse',   label: 'Verse'},
            ].forEach(function(v) {
                const opt = document.createElement('option');
                opt.value = v.id;
                opt.textContent = v.label;
                if ((config.currentVoice || 'marin') === v.id) { opt.selected = true; }
                voiceSelect.appendChild(opt);
            });
            voiceSelect.addEventListener('change', function() {
                pendingVoice = voiceSelect.value;
            });
            voiceSection.appendChild(voiceSelect);

            const voiceNote = document.createElement('p');
            voiceNote.style.cssText = 'margin:8px 0 0;font-size:12px;color:#6c757d';
            voiceNote.textContent =
                'Voice Chat and the speak button automatically use compatible OpenAI voices when needed.';
            voiceSection.appendChild(voiceNote);

            // Speed slider (Practice Speaking TTS only — 0.5× to 2.0×).
            if (config.hasTts) {
                const speedWrap = document.createElement('div');
                speedWrap.className = 'aica-settings-panel__speed-row';

                const speedLabel = document.createElement('label');
                speedLabel.className = 'aica-settings-panel__speed-label';
                speedLabel.htmlFor = 'aica-tts-speed-slider';
                speedLabel.textContent = 'Speaking speed';

                const speedVal = document.createElement('span');
                speedVal.className = 'aica-settings-panel__speed-val';
                const initSpeed = parseFloat(localStorage.getItem('aica_tts_speed') || '1.0');
                speedVal.textContent = initSpeed.toFixed(1) + '×';

                const speedSlider = document.createElement('input');
                speedSlider.type = 'range';
                speedSlider.id = 'aica-tts-speed-slider';
                speedSlider.className = 'aica-settings-panel__speed-slider';
                speedSlider.min = '0.5';
                speedSlider.max = '2.0';
                speedSlider.step = '0.1';
                speedSlider.value = initSpeed.toFixed(1);

                speedSlider.addEventListener('input', function() {
                    speedVal.textContent = parseFloat(speedSlider.value).toFixed(1) + '×';
                });

                speedWrap.appendChild(speedLabel);
                speedWrap.appendChild(speedSlider);
                speedWrap.appendChild(speedVal);
                voiceSection.appendChild(speedWrap);

                // Store reference for save handler.
                voiceSection.dataset.hasSpeedSlider = '1';
                voiceSection._speedSlider = speedSlider;
            }

            content.appendChild(voiceSection);
        }

        // ── Saved Responses ──
        const bmarks = getBookmarks();
        const savedSection = document.createElement('div');
        savedSection.className = 'aica-settings-panel__section';
        const savedHead = document.createElement('h3');
        savedHead.className = 'aica-settings-panel__section-title';
        savedHead.textContent = 'Saved responses (' + bmarks.length + ')';
        savedSection.appendChild(savedHead);

        if (bmarks.length === 0) {
            const noSaved = document.createElement('p');
            noSaved.className = 'aica-settings-panel__empty-note';
            noSaved.textContent = 'Bookmark any SOLA response using the \u2605 icon on a message.';
            savedSection.appendChild(noSaved);
        } else {
            bmarks.slice().reverse().forEach(function(b) {
                const item = document.createElement('div');
                item.className = 'aica-settings-panel__bookmark-item';

                const excerpt = document.createElement('p');
                excerpt.className = 'aica-settings-panel__bookmark-text';
                const trimmed = (b.text || '').replace(/\s+/g, ' ').trim();
                excerpt.textContent = trimmed.length > 120 ? trimmed.slice(0, 117) + '\u2026' : trimmed;
                item.appendChild(excerpt);

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'aica-settings-panel__bookmark-remove';
                removeBtn.setAttribute('aria-label', 'Remove bookmark');
                removeBtn.textContent = '\u00d7';
                removeBtn.addEventListener('click', function() {
                    removeBookmarkByText(b.text);
                    item.remove();
                    // Update count in heading.
                    savedHead.textContent = 'Saved responses (' + getBookmarks().length + ')';
                });
                item.appendChild(removeBtn);
                savedSection.appendChild(item);
            });
        }
        content.appendChild(savedSection);

        // ── My Progress ──
        if (config.studySessions !== undefined || config.quizHistory !== undefined) {
            const progSection = document.createElement('div');
            progSection.className = 'aica-settings-panel__section';
            const progHead = document.createElement('h3');
            progHead.className = 'aica-settings-panel__section-title';
            progHead.textContent = 'My Progress';
            progSection.appendChild(progHead);

            const studySessions = config.studySessions || [];
            const quizHistory = config.quizHistory || [];

            if (studySessions.length === 0 && quizHistory.length === 0) {
                const p = document.createElement('p');
                p.className = 'aica-settings-panel__empty-note';
                p.textContent = 'No study activity yet for this course.';
                progSection.appendChild(p);
            } else {
                if (studySessions.length > 0) {
                    const totalMins = studySessions.reduce(function(s, x) { return s + (x.minutes || 0); }, 0);
                    const studyPara = document.createElement('p');
                    studyPara.className = 'aica-settings-panel__empty-note';
                    studyPara.textContent = studySessions.length + ' study session' +
                        (studySessions.length !== 1 ? 's' : '') + ' \u00b7 ' + totalMins + ' min total';
                    progSection.appendChild(studyPara);
                    studySessions.slice().reverse().slice(0, 5).forEach(function(sess) {
                        const item = document.createElement('div');
                        item.className = 'aica-settings-panel__bookmark-item';
                        const txt = document.createElement('p');
                        txt.className = 'aica-settings-panel__bookmark-text';
                        const dateStr = new Date(sess.ts).toLocaleDateString(undefined, {month: 'short', day: 'numeric'});
                        txt.textContent = sess.topic + ' \u00b7 ' + sess.minutes + ' min \u00b7 ' + dateStr;
                        item.appendChild(txt);
                        progSection.appendChild(item);
                    });
                }
                if (quizHistory.length > 0) {
                    const quizLabel = document.createElement('p');
                    quizLabel.className = 'aica-settings-panel__empty-note';
                    quizLabel.style.marginTop = '8px';
                    quizLabel.textContent = quizHistory.length + ' quiz' + (quizHistory.length !== 1 ? 'zes' : '') + ' taken';
                    progSection.appendChild(quizLabel);
                    quizHistory.slice().reverse().slice(0, 5).forEach(function(q) {
                        const item = document.createElement('div');
                        item.className = 'aica-settings-panel__bookmark-item';
                        const txt = document.createElement('p');
                        txt.className = 'aica-settings-panel__bookmark-text';
                        const pct = q.total > 0 ? Math.round((q.score / q.total) * 100) : 0;
                        const dateStr = q.date ? new Date(q.date).toLocaleDateString(undefined, {month: 'short', day: 'numeric'}) : '';
                        txt.textContent = q.topic + ' \u00b7 ' + pct + '% \u00b7 ' + dateStr;
                        item.appendChild(txt);
                        progSection.appendChild(item);
                    });
                }
                if (callbacks.onClearProgress) {
                    const clearBtn = document.createElement('button');
                    clearBtn.type = 'button';
                    clearBtn.className = 'aica-quiz-setup__cancel';
                    clearBtn.style.cssText = 'display:block;width:100%;padding:8px;font-size:0.8em;margin-top:6px;';
                    clearBtn.textContent = 'Clear progress data';
                    clearBtn.addEventListener('click', function() {
                        if (!window.confirm('Clear all study sessions and quiz history for this course?')) { return; }
                        callbacks.onClearProgress();
                        panel.remove();
                    });
                    progSection.appendChild(clearBtn);
                }
            }
            content.appendChild(progSection);
        }

        // ── Study Reminders ──
        if (config.emailRemindersEnabled || config.whatsappRemindersEnabled) {
            const remSection = document.createElement('div');
            remSection.className = 'aica-settings-panel__section';
            const remHead = document.createElement('h3');
            remHead.className = 'aica-settings-panel__section-title';
            remHead.textContent = 'Study Reminders';
            remSection.appendChild(remHead);

            const remDesc = document.createElement('p');
            remDesc.className = 'aica-settings-panel__empty-note';
            remDesc.textContent = 'Get nudges to keep your study streak going.';
            remSection.appendChild(remDesc);

            // --- Email reminders ---
            if (config.emailRemindersEnabled) {
                const emailBlock = document.createElement('div');
                emailBlock.style.cssText = 'margin-top:6px';

                const emailRow = document.createElement('div');
                emailRow.style.cssText = 'display:flex;align-items:center;gap:8px';
                const emailToggle = document.createElement('input');
                emailToggle.type = 'checkbox';
                emailToggle.id = 'aica-reminder-email-toggle';
                emailToggle.checked = !!(config.emailReminderEnabled);
                const emailLabel = document.createElement('label');
                emailLabel.htmlFor = 'aica-reminder-email-toggle';
                emailLabel.textContent = 'Email me study reminders';
                emailLabel.style.cssText = 'font-size:13px;cursor:pointer';
                emailRow.appendChild(emailToggle);
                emailRow.appendChild(emailLabel);
                emailBlock.appendChild(emailRow);

                // Editable email input.
                const emailInputRow = document.createElement('div');
                emailInputRow.style.cssText = 'margin-top:4px;display:flex;gap:6px;align-items:center';
                const emailInput = document.createElement('input');
                emailInput.type = 'email';
                emailInput.id = 'aica-reminder-email';
                emailInput.placeholder = 'your@email.com';
                emailInput.value = config.emailDestination || config.userEmail || '';
                emailInput.style.cssText = 'flex:1;padding:6px 8px;border:1px solid #d1d5db;border-radius:6px;' +
                    'font-size:13px;background:#f8fafc;color:#334155';
                emailInputRow.appendChild(emailInput);
                emailBlock.appendChild(emailInputRow);

                const emailHint = document.createElement('div');
                emailHint.style.cssText = 'font-size:11px;color:#94a3b8;margin-top:2px';
                emailHint.textContent = 'Defaults to your Moodle email if left blank.';
                emailBlock.appendChild(emailHint);

                remSection.appendChild(emailBlock);
                remSection._emailToggle = emailToggle;
                remSection._emailInput = emailInput;
            }

            // --- WhatsApp reminders ---
            if (config.whatsappRemindersEnabled) {
                const waBlock = document.createElement('div');
                waBlock.style.cssText = 'margin-top:10px';

                const waRow = document.createElement('div');
                waRow.style.cssText = 'display:flex;align-items:center;gap:8px';
                const waToggle = document.createElement('input');
                waToggle.type = 'checkbox';
                waToggle.id = 'aica-reminder-wa-toggle';
                waToggle.checked = !!(config.whatsappReminderEnabled);
                const waLabel = document.createElement('label');
                waLabel.htmlFor = 'aica-reminder-wa-toggle';
                waLabel.textContent = 'WhatsApp reminders';
                waLabel.style.cssText = 'font-size:13px;cursor:pointer';
                waRow.appendChild(waToggle);
                waRow.appendChild(waLabel);
                waBlock.appendChild(waRow);

                // Phone number input.
                const phoneRow = document.createElement('div');
                phoneRow.style.cssText = 'margin-top:4px;display:flex;gap:6px;align-items:center';
                const phoneInput = document.createElement('input');
                phoneInput.type = 'tel';
                phoneInput.id = 'aica-reminder-phone';
                phoneInput.placeholder = '+1 555 123 4567';
                phoneInput.value = config.whatsappDestination || config.userPhone || '';
                phoneInput.style.cssText = 'flex:1;padding:6px 8px;border:1px solid #d1d5db;border-radius:6px;' +
                    'font-size:13px;background:#f8fafc;color:#334155';
                phoneRow.appendChild(phoneInput);
                waBlock.appendChild(phoneRow);

                const phoneHint = document.createElement('div');
                phoneHint.style.cssText = 'font-size:11px;color:#94a3b8;margin-top:2px';
                phoneHint.textContent = 'Include country code (e.g. +1 for US, +44 for UK)';
                waBlock.appendChild(phoneHint);

                const ratesNote = document.createElement('div');
                ratesNote.style.cssText = 'font-size:10px;color:#94a3b8;margin-top:4px;font-style:italic';
                ratesNote.textContent = 'Standard messaging and data rates may apply.';
                waBlock.appendChild(ratesNote);

                remSection.appendChild(waBlock);
                remSection._waToggle = waToggle;
                remSection._phoneInput = phoneInput;
            }

            // Shared frequency select.
            const freqRow = document.createElement('div');
            freqRow.style.cssText = 'margin-top:8px';
            const freqLabel = document.createElement('label');
            freqLabel.textContent = 'Frequency';
            freqLabel.style.cssText = 'font-size:12px;color:#6c757d;display:block;margin-bottom:2px';
            freqRow.appendChild(freqLabel);
            const freqSelect = document.createElement('select');
            freqSelect.className = 'aica-settings-panel__select';
            [
                {id: 'daily', label: 'Daily'},
                {id: 'every_other_day', label: 'Every other day'},
                {id: 'weekly', label: 'Weekly'},
            ].forEach(function(f) {
                var opt = document.createElement('option');
                opt.value = f.id;
                opt.textContent = f.label;
                if ((config.reminderFrequency || 'daily') === f.id) { opt.selected = true; }
                freqSelect.appendChild(opt);
            });
            freqRow.appendChild(freqSelect);
            remSection.appendChild(freqRow);

            // Email study notes toggle.
            if (config.emailRemindersEnabled) {
                var notesRow = document.createElement('div');
                notesRow.style.cssText = 'display:flex;align-items:center;gap:8px;margin-top:8px';
                var notesToggle = document.createElement('input');
                notesToggle.type = 'checkbox';
                notesToggle.id = 'aica-email-notes-toggle';
                try { notesToggle.checked = localStorage.getItem('aica_email_notes') === '1'; } catch (e) { /**/ }
                var notesLabel = document.createElement('label');
                notesLabel.htmlFor = 'aica-email-notes-toggle';
                notesLabel.textContent = 'Email me study session notes';
                notesLabel.style.cssText = 'font-size:12px;cursor:pointer;color:#6c757d';
                notesRow.appendChild(notesToggle);
                notesRow.appendChild(notesLabel);
                remSection.appendChild(notesRow);
            }

            // Store references for save handler.
            remSection._freqSelect = freqSelect;
            remSection.dataset.hasReminders = '1';

            content.appendChild(remSection);
        }

        // Avatar section appended last so it appears at the bottom of settings.
        if (avatarSection) {
            content.appendChild(avatarSection);
        }

        panel.appendChild(content);

        // --- Save button ---
        const footer = document.createElement('div');
        footer.className = 'aica-settings-panel__footer';
        const saveBtn = document.createElement('button');
        saveBtn.type = 'button';
        saveBtn.className = 'aica-settings-panel__save';
        saveBtn.textContent = 'Save';
        saveBtn.addEventListener('click', function() {
            // Apply language if changed.
            if (pendingLang !== (config.currentLang || null)) {
                callbacks.onLangSelect(pendingLang, pendingLangName);
            }
            // Apply avatar if changed.
            if (pendingAvatarId !== null && pendingAvatarUrl !== config.currentAvatarUrl) {
                callbacks.onAvatarSelect(pendingAvatarId, pendingAvatarUrl);
            }
            // Apply voice if changed.
            if (pendingVoice && pendingVoice !== (config.currentVoice || 'marin')) {
                if (callbacks.onVoiceSelect) {
                    callbacks.onVoiceSelect(pendingVoice);
                }
            }
            if (config.modelSwitchEnabled && pendingProvider && pendingModel &&
                    (pendingProvider !== (config.currentProvider || '') ||
                    pendingModel !== (config.currentModel || ''))) {
                if (callbacks.onLlmSelect) {
                    callbacks.onLlmSelect(pendingProvider, pendingModel);
                }
            }
            // Save coaching style.
            try {
                if (pendingCoach) {
                    localStorage.setItem('aica_coaching_style', pendingCoach);
                } else {
                    localStorage.removeItem('aica_coaching_style');
                }
            } catch (e) { /**/ }
            // Save first-gen preference.
            try {
                var fgToggle = content.querySelector('#aica-firstgen-toggle');
                if (fgToggle) {
                    if (fgToggle.checked) {
                        localStorage.setItem('aica_firstgen', '1');
                    } else {
                        localStorage.removeItem('aica_firstgen');
                    }
                }
            } catch (e) { /**/ }
            // Save TTS speed if slider exists.
            const voiceSec = content.querySelector('[data-has-speed-slider="1"]');
            if (voiceSec && voiceSec._speedSlider) {
                localStorage.setItem('aica_tts_speed', voiceSec._speedSlider.value);
            }
            // Save reminder preferences if section exists.
            const remSec = content.querySelector('[data-has-reminders="1"]');
            if (remSec && callbacks.onReminderUpdate) {
                var freq = remSec._freqSelect ? remSec._freqSelect.value : 'daily';
                if (remSec._emailToggle) {
                    var emailDest = remSec._emailInput ? remSec._emailInput.value.trim() : '';
                    callbacks.onReminderUpdate('email', remSec._emailToggle.checked, emailDest, '', freq);
                }
                if (remSec._waToggle) {
                    var phone = remSec._phoneInput ? remSec._phoneInput.value.trim() : '';
                    callbacks.onReminderUpdate('whatsapp', remSec._waToggle.checked, phone, '', freq);
                }
            }
            // Save email study notes preference.
            var notesCheck = content.querySelector('#aica-email-notes-toggle');
            if (notesCheck) {
                if (notesCheck.checked) { localStorage.setItem('aica_email_notes', '1'); }
                else { localStorage.removeItem('aica_email_notes'); }
            }
            panel.remove();
        });
        footer.appendChild(saveBtn);
        panel.appendChild(footer);

        drawer.appendChild(panel);
    };

    /**
     * Show the feedback panel overlay inside the drawer.
     *
     * @param {Function} onSubmit Called with (rating, comment, deviceInfo)
     */
    const showFeedbackPanel = function(onSubmit) {
        if (!drawer) { return; }

        const existing = drawer.querySelector('.aica-feedback-panel');
        if (existing) { existing.remove(); }

        const panel = document.createElement('div');
        panel.className = 'aica-feedback-panel aica-settings-panel';

        // Header
        const header = document.createElement('div');
        header.className = 'aica-settings-panel__header';
        const titleEl = document.createElement('span');
        titleEl.className = 'aica-settings-panel__title';
        titleEl.textContent = 'Send Feedback';
        const closeBtn = document.createElement('button');
        closeBtn.className = 'aica-settings-panel__close';
        closeBtn.type = 'button';
        closeBtn.setAttribute('aria-label', 'Close');
        closeBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">' +
            '<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>';
        closeBtn.addEventListener('click', function() { panel.remove(); });
        header.appendChild(titleEl);
        header.appendChild(closeBtn);
        panel.appendChild(header);

        // Content
        const content = document.createElement('div');
        content.className = 'aica-settings-panel__content';

        // Rating stars
        const ratingSection = document.createElement('div');
        ratingSection.className = 'aica-settings-panel__section';
        const ratingLabel = document.createElement('div');
        ratingLabel.className = 'aica-settings-panel__section-title';
        ratingLabel.textContent = 'How would you rate SOLA?';
        ratingSection.appendChild(ratingLabel);

        const starsRow = document.createElement('div');
        starsRow.className = 'aica-feedback-stars';
        var selectedRating = 0;
        for (var i = 1; i <= 5; i++) {
            (function(val) {
                var star = document.createElement('button');
                star.type = 'button';
                star.className = 'aica-feedback-star';
                star.setAttribute('aria-label', val + ' star' + (val > 1 ? 's' : ''));
                star.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="currentColor">' +
                    '<path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>';
                star.addEventListener('click', function() {
                    selectedRating = val;
                    starsRow.querySelectorAll('.aica-feedback-star').forEach(function(s, idx) {
                        s.classList.toggle('aica-feedback-star--active', idx < val);
                    });
                });
                starsRow.appendChild(star);
            })(i);
        }
        ratingSection.appendChild(starsRow);
        content.appendChild(ratingSection);

        // Comment textarea
        const commentSection = document.createElement('div');
        commentSection.className = 'aica-settings-panel__section';
        const commentLabel = document.createElement('div');
        commentLabel.className = 'aica-settings-panel__section-title';
        commentLabel.textContent = 'Tell us more (optional)';
        commentSection.appendChild(commentLabel);

        const textarea = document.createElement('textarea');
        textarea.className = 'aica-feedback-textarea';
        textarea.placeholder = 'What do you like? What could be better?';
        textarea.rows = 4;
        textarea.maxLength = 2000;
        commentSection.appendChild(textarea);
        content.appendChild(commentSection);

        panel.appendChild(content);

        // Footer with submit
        const footer = document.createElement('div');
        footer.className = 'aica-settings-panel__footer';
        const submitBtn = document.createElement('button');
        submitBtn.type = 'button';
        submitBtn.className = 'aica-settings-panel__save';
        submitBtn.textContent = 'Submit Feedback';
        submitBtn.addEventListener('click', function() {
            if (selectedRating === 0) {
                ratingLabel.textContent = 'Please select a rating';
                ratingLabel.style.color = '#dc3545';
                return;
            }
            // Collect device info.
            var ua = navigator.userAgent || '';
            var deviceInfo = {
                browser: getBrowserName(ua),
                os: getOSName(ua),
                device: getDeviceType(),
                screen_size: window.screen.width + 'x' + window.screen.height,
                user_agent: ua.substring(0, 500),
                page_url: window.location.href.substring(0, 500),
            };
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';
            onSubmit(selectedRating, textarea.value.trim(), deviceInfo);
            // Show thank you message.
            setTimeout(function() {
                content.innerHTML = '<div style="text-align:center;padding:2rem 1rem">' +
                    '<div style="font-size:2rem;margin-bottom:0.5rem">Thank you!</div>' +
                    '<p style="color:#6c757d">Your feedback helps us improve SOLA.</p></div>';
                footer.style.display = 'none';
                setTimeout(function() { panel.remove(); }, 2000);
            }, 500);
        });
        footer.appendChild(submitBtn);
        panel.appendChild(footer);

        drawer.appendChild(panel);
    };

    /**
     * Parse browser name from user agent string.
     * @param {string} ua
     * @returns {string}
     */
    const getBrowserName = function(ua) {
        if (/Edg\//i.test(ua)) { return 'Edge ' + (ua.match(/Edg\/([\d.]+)/) || [])[1]; }
        if (/OPR\//i.test(ua)) { return 'Opera ' + (ua.match(/OPR\/([\d.]+)/) || [])[1]; }
        if (/Chrome\//i.test(ua) && !/Chromium/i.test(ua)) { return 'Chrome ' + (ua.match(/Chrome\/([\d.]+)/) || [])[1]; }
        if (/Safari\//i.test(ua) && !/Chrome/i.test(ua)) { return 'Safari ' + (ua.match(/Version\/([\d.]+)/) || [])[1]; }
        if (/Firefox\//i.test(ua)) { return 'Firefox ' + (ua.match(/Firefox\/([\d.]+)/) || [])[1]; }
        return 'Unknown';
    };

    /**
     * Parse OS name from user agent string.
     * @param {string} ua
     * @returns {string}
     */
    const getOSName = function(ua) {
        if (/Windows NT 10/i.test(ua)) { return 'Windows 10/11'; }
        if (/Windows/i.test(ua)) { return 'Windows'; }
        if (/Mac OS X ([\d_]+)/i.test(ua)) { return 'macOS ' + (ua.match(/Mac OS X ([\d_]+)/) || [])[1].replace(/_/g, '.'); }
        if (/iPhone|iPad/i.test(ua)) { return 'iOS ' + ((ua.match(/OS ([\d_]+)/) || [])[1] || '').replace(/_/g, '.'); }
        if (/Android ([\d.]+)/i.test(ua)) { return 'Android ' + (ua.match(/Android ([\d.]+)/) || [])[1]; }
        if (/Linux/i.test(ua)) { return 'Linux'; }
        if (/CrOS/i.test(ua)) { return 'ChromeOS'; }
        return 'Unknown';
    };

    /**
     * Detect device type.
     * @returns {string}
     */
    const getDeviceType = function() {
        var w = window.innerWidth;
        if (/Mobi|Android/i.test(navigator.userAgent) || w < 768) { return 'mobile'; }
        if (/iPad|Tablet/i.test(navigator.userAgent) || (w >= 768 && w < 1024)) { return 'tablet'; }
        return 'desktop';
    };

    /**
     * Show a compact language picker popover above the hint bar.
     * Toggle behaviour: calling while open closes it.
     *
     * @param {Object}      langs        SUPPORTED_LANGS map { code: {name, locale} }
     * @param {string|null} currentLang  Active ISO 639-1 code, or null for English
     * @param {Function}    onSelect     Called with (code|null, name) on selection
     */
    const showLangPicker = function(langs, currentLang, onSelect) {
        if (!drawer) {
            return;
        }

        // Toggle: close if already open.
        const existing = drawer.querySelector('.aica-lang-picker');
        if (existing) {
            existing.remove();
            return;
        }

        const picker = document.createElement('div');
        picker.className = 'aica-lang-picker';

        // --- Search input ---
        const searchWrap = document.createElement('div');
        searchWrap.className = 'aica-lang-picker__search-wrap';
        const searchInput = document.createElement('input');
        searchInput.type = 'text';
        searchInput.className = 'aica-lang-picker__search';
        searchInput.placeholder = 'Search…';
        searchInput.setAttribute('aria-label', 'Search languages');
        searchWrap.appendChild(searchInput);
        picker.appendChild(searchWrap);

        // --- Language list ---
        const list = document.createElement('div');
        list.className = 'aica-lang-picker__list';

        let outsideHandler = null;

        const closePicker = function() {
            picker.remove();
            if (outsideHandler) {
                document.removeEventListener('click', outsideHandler, true);
                outsideHandler = null;
            }
        };

        const makeOption = function(code, name) {
            const btn = document.createElement('button');
            btn.type = 'button';
            const isActive = (code === null && !currentLang) || (code === currentLang);
            btn.className = 'aica-lang-picker__option' +
                (isActive ? ' aica-lang-picker__option--active' : '');
            btn.textContent = name;
            btn.dataset.name = name.toLowerCase();
            btn.addEventListener('click', function() {
                onSelect(code, name);
                closePicker();
            });
            return btn;
        };

        // English (default) always first.
        list.appendChild(makeOption(null, 'English'));

        // Remaining languages sorted alphabetically.
        Object.keys(langs).sort(function(a, b) {
            return langs[a].name.localeCompare(langs[b].name);
        }).forEach(function(code) {
            list.appendChild(makeOption(code, langs[code].name));
        });

        picker.appendChild(list);
        drawer.appendChild(picker);
        searchInput.focus();

        // Filter list as user types.
        searchInput.addEventListener('input', function() {
            const q = searchInput.value.toLowerCase();
            list.querySelectorAll('.aica-lang-picker__option').forEach(function(btn) {
                btn.style.display = (btn.dataset.name.indexOf(q) !== -1) ? '' : 'none';
            });
        });

        // Close on outside click (deferred so current click doesn't close immediately).
        outsideHandler = function(e) {
            const path = e.composedPath ? e.composedPath() : [e.target];
            if (!path.some(function(el) { return el === picker || el === langBtn; })) {
                closePicker();
            }
        };
        setTimeout(function() {
            document.addEventListener('click', outsideHandler, true);
        }, 0);
    };

    /**
     * Remove any existing suggestion chips from the messages area.
     */
    const clearSuggestions = function() {
        if (!messagesContainer) {
            return;
        }
        messagesContainer.querySelectorAll('.aica-suggestions').forEach(function(el) {
            el.remove();
        });
    };

    /**
     * Show contextual follow-up suggestion chips after the last assistant message.
     *
     * @param {string[]} suggestions  Array of suggestion strings (up to 4)
     * @param {Function} onSelect     Called with the clicked suggestion text
     */
    const showSuggestions = function(suggestions, onSelect) {
        if (!messagesContainer || !suggestions.length) {
            return;
        }
        clearSuggestions();

        const container = document.createElement('div');
        container.className = 'aica-suggestions';

        suggestions.forEach(function(text) {
            const btn = document.createElement('button');
            btn.className = 'aica-suggestion';
            btn.type = 'button';
            btn.textContent = text;
            btn.addEventListener('click', function() {
                onSelect(text);
            });
            container.appendChild(btn);
        });

        appendMessageNode(container);
        scrollToBottom();
    };

    /**
     * Replace a message's content with word-span nodes so words can be highlighted during TTS.
     * Saves the original innerHTML for restoration.
     *
     * @param {HTMLElement} msgEl     The message element
     * @param {string}      cleanText The plain text (already cleaned for TTS)
     * @returns {Array|null}          Array of {el, start, end} word descriptors, or null on failure
     */
    const startWordHighlight = function(msgEl, cleanText) {
        const content = msgEl.querySelector('.local-ai-course-assistant__message-content');
        if (!content || !cleanText) {
            return null;
        }

        highlightingEl = msgEl;
        activeWordSpan = null;
        msgEl._highlightOriginalHtml = content.innerHTML;

        const wordSpans = [];
        const frag = document.createDocumentFragment();
        const re = /\S+/g;
        let pos = 0;
        let match;
        while ((match = re.exec(cleanText)) !== null) {
            if (match.index > pos) {
                frag.appendChild(document.createTextNode(cleanText.slice(pos, match.index)));
            }
            const span = document.createElement('span');
            span.className = 'aica-word';
            span.textContent = match[0];
            frag.appendChild(span);
            wordSpans.push({el: span, start: match.index, end: match.index + match[0].length});
            pos = match.index + match[0].length;
        }
        if (pos < cleanText.length) {
            frag.appendChild(document.createTextNode(cleanText.slice(pos)));
        }

        content.innerHTML = '';
        content.appendChild(frag);
        return wordSpans;
    };

    /**
     * Highlight the word at the given character index (from onboundary event).
     *
     * @param {Array}  wordSpans Array of {el, start, end} from startWordHighlight
     * @param {number} charIndex Character index into the clean text
     */
    const highlightWordAt = function(wordSpans, charIndex) {
        let found = null;
        for (var i = 0; i < wordSpans.length; i++) {
            if (charIndex >= wordSpans[i].start && charIndex < wordSpans[i].end) {
                found = wordSpans[i];
                break;
            }
        }
        if (found === activeWordSpan) {
            return;
        }
        if (activeWordSpan) {
            activeWordSpan.el.classList.remove('aica-word--active');
        }
        activeWordSpan = found;
        if (found) {
            found.el.classList.add('aica-word--active');
        }
    };

    /**
     * Restore the message content to its original markdown-rendered HTML.
     * Clears the active word highlight state.
     */
    const stopWordHighlight = function() {
        if (!highlightingEl) {
            return;
        }
        const content = highlightingEl.querySelector('.local-ai-course-assistant__message-content');
        if (content && highlightingEl._highlightOriginalHtml !== undefined) {
            content.innerHTML = highlightingEl._highlightOriginalHtml;
            delete highlightingEl._highlightOriginalHtml;
        }
        highlightingEl = null;
        activeWordSpan = null;
    };

    /**
     * Start Web Audio API driven mouth movement synced to an audio element.
     * Drives the .aica-mouth-open and .aica-mouth-smile SVG elements in real-time.
     * Falls back gracefully when Web Audio is unavailable.
     *
     * @param {HTMLAudioElement} audioEl The audio element to analyse
     */
    const startMouthSync = function(audioEl) {
        stopMouthSync();
        if (!root || !audioEl) {
            return;
        }
        var AudioCtx = window.AudioContext || window.webkitAudioContext;
        if (!AudioCtx) {
            return;
        }
        try {
            var ctx = new AudioCtx();
            var analyser = ctx.createAnalyser();
            analyser.fftSize = 256;
            analyser.smoothingTimeConstant = 0.55;
            var src = ctx.createMediaElementSource(audioEl);
            src.connect(analyser);
            analyser.connect(ctx.destination);
            var data = new Uint8Array(analyser.frequencyBinCount);
            var rafId = null;
            var alive = true;

            var resetMouth = function() {
                if (!root) {
                    return;
                }
                root.querySelectorAll('.aica-mouth-open').forEach(function(el) {
                    el.style.transform = 'scaleY(0)';
                    el.style.opacity = '0';
                });
                root.querySelectorAll('.aica-mouth-smile').forEach(function(el) {
                    el.style.opacity = '';
                });
            };

            mouthSyncCleanup = function() {
                alive = false;
                if (rafId) {
                    cancelAnimationFrame(rafId);
                    rafId = null;
                }
                try {
                    ctx.close();
                } catch (e) { /**/ }
                mouthSyncCleanup = null;
                resetMouth();
            };

            var update = function() {
                if (!alive) {
                    return;
                }
                analyser.getByteFrequencyData(data);
                // Average energy in speech frequency range (~85–860 Hz for fftSize=256 at 44.1kHz).
                var sum = 0;
                for (var i = 2; i <= 20; i++) {
                    sum += data[i];
                }
                var amp = Math.min(1, (sum / 19 / 90));
                root.querySelectorAll('.aica-mouth-open').forEach(function(el) {
                    el.style.transform = 'scaleY(' + amp + ')';
                    el.style.opacity = amp > 0.08 ? '1' : '0';
                });
                root.querySelectorAll('.aica-mouth-smile').forEach(function(el) {
                    el.style.opacity = String(Math.max(0.05, 1 - amp * 1.3));
                });
                rafId = requestAnimationFrame(update);
            };

            if (ctx.state === 'suspended') {
                ctx.resume().then(update);
            } else {
                update();
            }
        } catch (e) {
            // Web Audio unavailable — CSS animation handles mouth for browser TTS.
        }
    };

    /**
     * Start mouth sync from an already-created AnalyserNode (AudioContext TTS path).
     * Used when the audio is played through a shared AudioContext (e.g. iOS TTS fix).
     *
     * @param {AnalyserNode} analyser  Pre-configured analyser connected to audio source
     */
    const startMouthSyncFromAnalyser = function(analyser) {
        stopMouthSync();
        if (!root || !analyser) {
            return;
        }
        analyser.fftSize = 256;
        analyser.smoothingTimeConstant = 0.55;
        var data = new Uint8Array(analyser.frequencyBinCount);
        var rafId = null;
        var alive = true;

        var resetMouth = function() {
            if (!root) { return; }
            root.querySelectorAll('.aica-mouth-open').forEach(function(el) {
                el.style.transform = 'scaleY(0)';
                el.style.opacity = '0';
            });
            root.querySelectorAll('.aica-mouth-smile').forEach(function(el) {
                el.style.opacity = '';
            });
        };

        mouthSyncCleanup = function() {
            alive = false;
            if (rafId) { cancelAnimationFrame(rafId); rafId = null; }
            mouthSyncCleanup = null;
            resetMouth();
        };

        var update = function() {
            if (!alive) { return; }
            analyser.getByteFrequencyData(data);
            var sum = 0;
            for (var i = 2; i <= 20; i++) { sum += data[i]; }
            var amp = Math.min(1, (sum / 19 / 90));
            root.querySelectorAll('.aica-mouth-open').forEach(function(el) {
                el.style.transform = 'scaleY(' + amp + ')';
                el.style.opacity = amp > 0.08 ? '1' : '0';
            });
            root.querySelectorAll('.aica-mouth-smile').forEach(function(el) {
                el.style.opacity = String(Math.max(0.05, 1 - amp * 1.3));
            });
            rafId = requestAnimationFrame(update);
        };
        update();
    };

    /**
     * Stop Web Audio mouth sync and reset mouth to resting state.
     */
    const stopMouthSync = function() {
        if (mouthSyncCleanup) {
            mouthSyncCleanup();
        }
    };

    /**
     * Check whether the conversation starters panel is currently visible.
     *
     * @returns {boolean}
     */
    const isStartersVisible = function() {
        if (!root) {
            return false;
        }
        var starters = root.querySelector('.local-ai-course-assistant__starters');
        return starters ? starters.style.display !== 'none' : false;
    };

    /**
     * Stub: show the bookmarks panel.
     * Bookmarks are now displayed in the History panel (Saved view) and Settings panel.
     * This stub is retained for backward compatibility with modules that may reference it.
     */
    const showBookmarksPanel = function() {
        // Redirect to history panel saved view if available.
        setHistoryPanelView('saved');
        setBottomMode('history');
    };

    /**
     * Stub: update the bookmark badge count.
     * Badge is no longer used in the current UI; this is a no-op for backward compatibility.
     */
    const updateBookmarkBadge = function() {
        // No-op: badge element no longer exists in the current template.
    };

    /**
     * Show a survey panel inside the drawer.
     *
     * @param {Object} survey  {id, title, questions (array)}
     * @param {Function} onSubmit  Called with (surveyId, answersArray)
     */
    const showSurveyPanel = function(survey, onSubmit) {
        if (!drawer) { return; }
        // Remove any existing survey panel.
        var existing = drawer.querySelector('.aica-survey-panel');
        if (existing) { existing.remove(); }

        var panel = document.createElement('div');
        panel.className = 'aica-survey-panel';
        panel.style.cssText = 'position:absolute;inset:0;z-index:210;background:#fff;display:flex;flex-direction:column;' +
            'overflow:hidden;border-radius:inherit';

        // Header.
        var header = document.createElement('div');
        header.style.cssText = 'padding:14px 16px;border-bottom:1px solid #e2e8f0;flex-shrink:0;display:flex;' +
            'align-items:center;justify-content:space-between';
        var title = document.createElement('h3');
        title.style.cssText = 'margin:0;font-size:15px;font-weight:600;color:#1e293b';
        title.textContent = survey.title || 'Survey';
        header.appendChild(title);
        var closeBtn = document.createElement('button');
        closeBtn.type = 'button';
        closeBtn.style.cssText = 'background:none;border:none;font-size:20px;cursor:pointer;color:#94a3b8;padding:0 4px';
        closeBtn.innerHTML = '&times;';
        closeBtn.addEventListener('click', function() { panel.remove(); });
        header.appendChild(closeBtn);
        panel.appendChild(header);

        // Scrollable content.
        var content = document.createElement('div');
        content.style.cssText = 'flex:1;overflow-y:auto;padding:16px';

        var questions = survey.questions || [];
        var inputs = [];

        questions.forEach(function(q, idx) {
            var qDiv = document.createElement('div');
            qDiv.style.cssText = 'margin-bottom:20px';

            var label = document.createElement('div');
            label.style.cssText = 'font-size:13px;font-weight:600;color:#334155;margin-bottom:8px';
            label.textContent = (idx + 1) + '. ' + q.text;
            qDiv.appendChild(label);

            if (q.type === 'multiple_choice') {
                var optContainer = document.createElement('div');
                optContainer.style.cssText = 'display:flex;flex-direction:column;gap:6px';
                (q.options || []).forEach(function(opt) {
                    var optRow = document.createElement('label');
                    optRow.style.cssText = 'display:flex;align-items:center;gap:8px;font-size:13px;color:#475569;cursor:pointer;' +
                        'padding:6px 10px;border:1px solid #e2e8f0;border-radius:8px;transition:border-color 0.15s';
                    var radio = document.createElement('input');
                    radio.type = 'radio';
                    radio.name = 'aica-survey-q' + idx;
                    radio.value = opt;
                    optRow.appendChild(radio);
                    optRow.appendChild(document.createTextNode(opt));
                    optRow.addEventListener('click', function() {
                        optContainer.querySelectorAll('label').forEach(function(l) {
                            l.style.borderColor = '#e2e8f0';
                            l.style.background = '';
                        });
                        optRow.style.borderColor = 'var(--aica-brand-color, #023e8a)';
                        optRow.style.background = '#f0f9ff';
                    });
                    optContainer.appendChild(optRow);
                });
                qDiv.appendChild(optContainer);
                inputs.push({type: 'multiple_choice', index: idx, container: optContainer});

            } else if (q.type === 'rating') {
                var ratingWrap = document.createElement('div');
                var ratingRow = document.createElement('div');
                ratingRow.style.cssText = 'display:flex;gap:8px;align-items:center';
                var min = q.min || 1;
                var max = q.max || 5;
                if (q.min_label) {
                    var minLbl = document.createElement('span');
                    minLbl.style.cssText = 'font-size:11px;color:#94a3b8;white-space:nowrap';
                    minLbl.textContent = q.min_label;
                    ratingRow.appendChild(minLbl);
                }
                for (var r = min; r <= max; r++) {
                    (function(val) {
                        var btn = document.createElement('button');
                        btn.type = 'button';
                        btn.dataset.val = val;
                        btn.style.cssText = 'width:40px;height:40px;border-radius:50%;border:2px solid #d1d5db;background:#fff;' +
                            'font-size:16px;font-weight:600;cursor:pointer;color:#475569;transition:all 0.15s';
                        btn.textContent = val;
                        btn.addEventListener('click', function() {
                            ratingRow.querySelectorAll('button').forEach(function(b) {
                                b.style.borderColor = '#d1d5db';
                                b.style.background = '#fff';
                                b.style.color = '#475569';
                            });
                            btn.style.borderColor = 'var(--aica-brand-color, #023e8a)';
                            btn.style.background = 'var(--aica-brand-color, #023e8a)';
                            btn.style.color = '#fff';
                        });
                        ratingRow.appendChild(btn);
                    })(r);
                }
                if (q.max_label) {
                    var maxLbl = document.createElement('span');
                    maxLbl.style.cssText = 'font-size:11px;color:#94a3b8;white-space:nowrap';
                    maxLbl.textContent = q.max_label;
                    ratingRow.appendChild(maxLbl);
                }
                ratingWrap.appendChild(ratingRow);
                qDiv.appendChild(ratingWrap);
                inputs.push({type: 'rating', index: idx, container: ratingRow});

            } else {
                // long_text
                var textarea = document.createElement('textarea');
                textarea.style.cssText = 'width:100%;min-height:80px;padding:8px 10px;border:1px solid #d1d5db;border-radius:8px;' +
                    'font-size:13px;resize:vertical;font-family:inherit;color:#334155;background:#f8fafc';
                textarea.placeholder = 'Type your answer here...';
                qDiv.appendChild(textarea);
                inputs.push({type: 'long_text', index: idx, textarea: textarea});
            }

            content.appendChild(qDiv);
        });

        panel.appendChild(content);

        // Footer with submit.
        var footer = document.createElement('div');
        footer.style.cssText = 'padding:12px 16px;border-top:1px solid #e2e8f0;flex-shrink:0';
        var submitBtn = document.createElement('button');
        submitBtn.type = 'button';
        submitBtn.style.cssText = 'width:100%;padding:10px;border:none;border-radius:8px;font-size:14px;font-weight:600;' +
            'cursor:pointer;color:#fff;background:var(--aica-brand-color, #023e8a);transition:opacity 0.15s';
        submitBtn.textContent = 'Submit Survey';
        submitBtn.addEventListener('click', function() {
            var answers = [];
            var complete = true;
            inputs.forEach(function(inp) {
                if (inp.type === 'multiple_choice') {
                    var checked = inp.container.querySelector('input:checked');
                    if (checked) {
                        answers.push({question_index: inp.index, answer: checked.value});
                    } else {
                        complete = false;
                    }
                } else if (inp.type === 'rating') {
                    var selected = inp.container.querySelector('button[style*="color: rgb(255"]') ||
                        inp.container.querySelector('button[style*="color:#fff"]');
                    if (selected) {
                        answers.push({question_index: inp.index, answer: selected.dataset.val});
                    } else {
                        complete = false;
                    }
                } else {
                    var val = inp.textarea.value.trim();
                    answers.push({question_index: inp.index, answer: val});
                }
            });

            if (!complete) {
                showNotification('Please answer all required questions.', 'warning');
                return;
            }

            submitBtn.disabled = true;
            submitBtn.textContent = 'Submitting...';
            submitBtn.style.opacity = '0.6';

            if (onSubmit) {
                onSubmit(survey.id, answers);
            }

            // Show thank you message.
            content.innerHTML = '';
            var thanks = document.createElement('div');
            thanks.style.cssText = 'text-align:center;padding:40px 20px';
            var checkmark = document.createElement('div');
            checkmark.style.cssText = 'font-size:48px;margin-bottom:12px';
            checkmark.textContent = '\u2705';
            thanks.appendChild(checkmark);
            var thanksTitle = document.createElement('h3');
            thanksTitle.style.cssText = 'font-size:18px;font-weight:600;color:#1e293b;margin:0 0 8px';
            thanksTitle.textContent = 'Thank you!';
            thanks.appendChild(thanksTitle);
            var thanksText = document.createElement('p');
            thanksText.style.cssText = 'font-size:13px;color:#64748b;margin:0';
            thanksText.textContent = 'Your feedback helps us improve the AI tutor experience.';
            thanks.appendChild(thanksText);
            content.appendChild(thanks);

            footer.innerHTML = '';
            var doneBtn = document.createElement('button');
            doneBtn.type = 'button';
            doneBtn.style.cssText = submitBtn.style.cssText;
            doneBtn.style.opacity = '1';
            doneBtn.textContent = 'Done';
            doneBtn.addEventListener('click', function() { panel.remove(); });
            footer.appendChild(doneBtn);
        });
        footer.appendChild(submitBtn);
        panel.appendChild(footer);

        drawer.appendChild(panel);
    };

    /**
     * Show the user testing panel (Option B: in-widget task flow).
     *
     * @param {Object} tasksetData  {id, title, tasks[], completed_count}
     * @param {Function} onSubmitTask  Called with (tasksetId, taskIndex, rating, answer) for each task
     * @param {Function} onComplete  Called when all tasks are done
     */
    const showUserTestingPanel = function(tasksetData, onSubmitTask, onComplete) {
        if (!drawer) { return; }
        var existing = drawer.querySelector('.aica-usertesting-panel');
        if (existing) { existing.remove(); }

        var tasks = tasksetData.tasks || [];
        var currentIdx = tasksetData.completed_count || 0;
        if (currentIdx >= tasks.length) {
            showNotification('You have completed all testing tasks. Thank you!', 'info');
            return;
        }

        var panel = document.createElement('div');
        panel.className = 'aica-usertesting-panel';
        panel.style.cssText = 'position:absolute;inset:0;z-index:210;background:#fff;display:flex;flex-direction:column;' +
            'overflow:hidden;border-radius:inherit';

        function renderTask(idx) {
            panel.innerHTML = '';
            var task = tasks[idx];

            // Header.
            var header = document.createElement('div');
            header.style.cssText = 'padding:14px 16px;border-bottom:1px solid #e2e8f0;flex-shrink:0;display:flex;' +
                'align-items:center;justify-content:space-between';
            var titleEl = document.createElement('h3');
            titleEl.style.cssText = 'margin:0;font-size:15px;font-weight:600;color:#1e293b';
            titleEl.textContent = tasksetData.title || 'Usability Testing';
            header.appendChild(titleEl);
            var closeBtn = document.createElement('button');
            closeBtn.type = 'button';
            closeBtn.style.cssText = 'background:none;border:none;font-size:20px;cursor:pointer;color:#94a3b8;padding:0 4px';
            closeBtn.innerHTML = '&times;';
            closeBtn.addEventListener('click', function() { panel.remove(); });
            header.appendChild(closeBtn);
            panel.appendChild(header);

            // Progress bar.
            var progressWrap = document.createElement('div');
            progressWrap.style.cssText = 'padding:8px 16px;flex-shrink:0;border-bottom:1px solid #f1f5f9';
            var progressText = document.createElement('div');
            progressText.style.cssText = 'font-size:12px;color:#64748b;margin-bottom:4px;font-weight:600';
            progressText.textContent = 'Task ' + (idx + 1) + ' of ' + tasks.length;
            progressWrap.appendChild(progressText);
            var progressBar = document.createElement('div');
            progressBar.style.cssText = 'height:4px;background:#e2e8f0;border-radius:2px;overflow:hidden';
            var progressFill = document.createElement('div');
            var pct = ((idx) / tasks.length * 100);
            progressFill.style.cssText = 'height:100%;background:var(--aica-brand-color, #023e8a);border-radius:2px;' +
                'transition:width 0.3s;width:' + pct + '%';
            progressBar.appendChild(progressFill);
            progressWrap.appendChild(progressBar);
            panel.appendChild(progressWrap);

            // Content.
            var content = document.createElement('div');
            content.style.cssText = 'flex:1;overflow-y:auto;padding:16px';

            // Task instruction.
            var instrDiv = document.createElement('div');
            instrDiv.style.cssText = 'background:#f0f9ff;border:1px solid #bae6fd;border-radius:10px;padding:14px;margin-bottom:16px';
            var instrLabel = document.createElement('div');
            instrLabel.style.cssText = 'font-size:11px;font-weight:700;color:#0369a1;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:6px';
            instrLabel.textContent = 'Your Task';
            instrDiv.appendChild(instrLabel);
            var instrText = document.createElement('div');
            instrText.style.cssText = 'font-size:14px;color:#1e293b;line-height:1.5';
            instrText.textContent = task.instruction || '';
            instrDiv.appendChild(instrText);
            content.appendChild(instrDiv);

            // Pause hint.
            var hint = document.createElement('div');
            hint.style.cssText = 'font-size:12px;color:#94a3b8;text-align:center;margin-bottom:16px;font-style:italic';
            if (task.type === 'action_then_rate') {
                hint.textContent = 'Close this panel to interact with SOLA, then come back to rate.';
            }
            if (hint.textContent) { content.appendChild(hint); }

            // Rating section (for action_then_rate).
            var selectedRating = 0;
            if (task.type === 'action_then_rate') {
                var ratingSection = document.createElement('div');
                ratingSection.style.cssText = 'margin-bottom:16px';
                var ratingLabel = document.createElement('div');
                ratingLabel.style.cssText = 'font-size:13px;font-weight:600;color:#334155;margin-bottom:8px';
                ratingLabel.textContent = task.rating_label || 'Rate this task';
                ratingSection.appendChild(ratingLabel);

                var ratingRow = document.createElement('div');
                ratingRow.style.cssText = 'display:flex;gap:8px;align-items:center';
                var min = task.min || 1;
                var max = task.max || 5;
                if (task.min_label) {
                    var ml = document.createElement('span');
                    ml.style.cssText = 'font-size:11px;color:#94a3b8;white-space:nowrap';
                    ml.textContent = task.min_label;
                    ratingRow.appendChild(ml);
                }
                for (var r = min; r <= max; r++) {
                    (function(val) {
                        var btn = document.createElement('button');
                        btn.type = 'button';
                        btn.dataset.val = val;
                        btn.style.cssText = 'width:40px;height:40px;border-radius:50%;border:2px solid #d1d5db;background:#fff;' +
                            'font-size:16px;font-weight:600;cursor:pointer;color:#475569;transition:all 0.15s';
                        btn.textContent = val;
                        btn.addEventListener('click', function() {
                            selectedRating = val;
                            ratingRow.querySelectorAll('button').forEach(function(b) {
                                b.style.borderColor = '#d1d5db';
                                b.style.background = '#fff';
                                b.style.color = '#475569';
                            });
                            btn.style.borderColor = 'var(--aica-brand-color, #023e8a)';
                            btn.style.background = 'var(--aica-brand-color, #023e8a)';
                            btn.style.color = '#fff';
                        });
                        ratingRow.appendChild(btn);
                    })(r);
                }
                if (task.max_label) {
                    var xl = document.createElement('span');
                    xl.style.cssText = 'font-size:11px;color:#94a3b8;white-space:nowrap';
                    xl.textContent = task.max_label;
                    ratingRow.appendChild(xl);
                }
                ratingSection.appendChild(ratingRow);
                content.appendChild(ratingSection);
            }

            // MC options (for multiple_choice).
            var mcContainer = null;
            if (task.type === 'multiple_choice') {
                mcContainer = document.createElement('div');
                mcContainer.style.cssText = 'display:flex;flex-direction:column;gap:6px;margin-bottom:16px';
                (task.options || []).forEach(function(opt) {
                    var optRow = document.createElement('label');
                    optRow.style.cssText = 'display:flex;align-items:center;gap:8px;font-size:13px;color:#475569;cursor:pointer;' +
                        'padding:10px 12px;border:1px solid #e2e8f0;border-radius:8px;transition:border-color 0.15s';
                    var radio = document.createElement('input');
                    radio.type = 'radio';
                    radio.name = 'aica-ut-mc';
                    radio.value = opt;
                    optRow.appendChild(radio);
                    optRow.appendChild(document.createTextNode(opt));
                    optRow.addEventListener('click', function() {
                        mcContainer.querySelectorAll('label').forEach(function(l) {
                            l.style.borderColor = '#e2e8f0'; l.style.background = '';
                        });
                        optRow.style.borderColor = 'var(--aica-brand-color, #023e8a)';
                        optRow.style.background = '#f0f9ff';
                    });
                    mcContainer.appendChild(optRow);
                });
                content.appendChild(mcContainer);
            }

            // Follow-up / free text.
            var textarea = null;
            var textLabel = task.type === 'free_response' ? (task.instruction ? '' : 'Your response') :
                (task.follow_up ? task.follow_up : '');
            if (task.type === 'free_response' || task.follow_up) {
                var taDiv = document.createElement('div');
                taDiv.style.cssText = 'margin-bottom:16px';
                if (textLabel) {
                    var taLbl = document.createElement('div');
                    taLbl.style.cssText = 'font-size:13px;font-weight:600;color:#334155;margin-bottom:6px';
                    taLbl.textContent = textLabel;
                    taDiv.appendChild(taLbl);
                }
                textarea = document.createElement('textarea');
                textarea.style.cssText = 'width:100%;min-height:80px;padding:8px 10px;border:1px solid #d1d5db;border-radius:8px;' +
                    'font-size:13px;resize:vertical;font-family:inherit;color:#334155;background:#f8fafc';
                textarea.placeholder = 'Type your response here...';
                taDiv.appendChild(textarea);
                content.appendChild(taDiv);
            }

            panel.appendChild(content);

            // Footer.
            var footer = document.createElement('div');
            footer.style.cssText = 'padding:12px 16px;border-top:1px solid #e2e8f0;flex-shrink:0;display:flex;gap:8px';

            // Pause button (minimize panel to interact with SOLA).
            if (task.type === 'action_then_rate') {
                var pauseBtn = document.createElement('button');
                pauseBtn.type = 'button';
                pauseBtn.style.cssText = 'flex:1;padding:10px;border:1px solid #d1d5db;border-radius:8px;font-size:13px;' +
                    'font-weight:600;cursor:pointer;color:#475569;background:#fff;transition:all 0.15s';
                pauseBtn.textContent = 'Go to SOLA';
                pauseBtn.addEventListener('click', function() { panel.remove(); });
                footer.appendChild(pauseBtn);
            }

            var isLast = (idx >= tasks.length - 1);
            var nextBtn = document.createElement('button');
            nextBtn.type = 'button';
            nextBtn.style.cssText = 'flex:1;padding:10px;border:none;border-radius:8px;font-size:14px;font-weight:600;' +
                'cursor:pointer;color:#fff;background:var(--aica-brand-color, #023e8a);transition:opacity 0.15s';
            nextBtn.textContent = isLast ? 'Finish' : 'Next Task';
            nextBtn.addEventListener('click', function() {
                // Validate.
                if (task.type === 'action_then_rate' && selectedRating === 0) {
                    showNotification('Please provide a rating before continuing.', 'warning');
                    return;
                }
                if (task.type === 'multiple_choice') {
                    var checked = mcContainer ? mcContainer.querySelector('input:checked') : null;
                    if (!checked) {
                        showNotification('Please select an option.', 'warning');
                        return;
                    }
                }
                if (task.type === 'free_response' && textarea && !textarea.value.trim()) {
                    showNotification('Please type a response.', 'warning');
                    return;
                }

                nextBtn.disabled = true;
                nextBtn.textContent = 'Saving...';
                nextBtn.style.opacity = '0.6';

                // Collect answer.
                var rating = selectedRating;
                var answer = '';
                if (textarea) { answer = textarea.value.trim(); }
                if (task.type === 'multiple_choice' && mcContainer) {
                    var ch = mcContainer.querySelector('input:checked');
                    answer = ch ? ch.value : '';
                }

                if (onSubmitTask) {
                    onSubmitTask(tasksetData.id, idx, rating, answer);
                }

                if (isLast) {
                    // Show completion.
                    panel.innerHTML = '';
                    // Re-add header.
                    var doneHeader = document.createElement('div');
                    doneHeader.style.cssText = 'padding:14px 16px;border-bottom:1px solid #e2e8f0;flex-shrink:0;display:flex;' +
                        'align-items:center;justify-content:space-between';
                    var doneTitle = document.createElement('h3');
                    doneTitle.style.cssText = 'margin:0;font-size:15px;font-weight:600;color:#1e293b';
                    doneTitle.textContent = tasksetData.title || 'User Testing';
                    doneHeader.appendChild(doneTitle);
                    panel.appendChild(doneHeader);

                    var doneContent = document.createElement('div');
                    doneContent.style.cssText = 'flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:40px 20px;text-align:center';
                    var checkmark = document.createElement('div');
                    checkmark.style.cssText = 'font-size:48px;margin-bottom:12px';
                    checkmark.textContent = '\u2705';
                    doneContent.appendChild(checkmark);
                    var doneH = document.createElement('h3');
                    doneH.style.cssText = 'font-size:18px;font-weight:600;color:#1e293b;margin:0 0 8px';
                    doneH.textContent = 'All tasks complete!';
                    doneContent.appendChild(doneH);
                    var doneP = document.createElement('p');
                    doneP.style.cssText = 'font-size:13px;color:#64748b;margin:0 0 20px';
                    doneP.textContent = 'Thank you for your feedback. Your responses help us improve SOLA for all students.';
                    doneContent.appendChild(doneP);
                    var doneBtn = document.createElement('button');
                    doneBtn.type = 'button';
                    doneBtn.style.cssText = 'padding:10px 24px;border:none;border-radius:8px;font-size:14px;font-weight:600;' +
                        'cursor:pointer;color:#fff;background:var(--aica-brand-color, #023e8a)';
                    doneBtn.textContent = 'Done';
                    doneBtn.addEventListener('click', function() { panel.remove(); });
                    doneContent.appendChild(doneBtn);
                    panel.appendChild(doneContent);

                    if (onComplete) { onComplete(); }
                } else {
                    renderTask(idx + 1);
                }
            });
            footer.appendChild(nextBtn);
            panel.appendChild(footer);
        }

        renderTask(currentIdx);
        drawer.appendChild(panel);
    };

    /**
     * Show a practice session score card in the messages area.
     *
     * @param {string} title       Card title (e.g. 'Conversation Practice Score')
     * @param {Object} scoreData   {criteria:[{name,score,feedback},...], overall:N, summary:'...'}
     * @param {Function=} onRetry  Called when "Practice Again" is clicked
     */
    const showScoreCard = function(title, scoreData, onRetry) {
        if (!messagesContainer || !scoreData || !scoreData.criteria) {
            return;
        }
        var card = document.createElement('div');
        card.className = 'aica-score-card';

        // Title.
        var h = document.createElement('div');
        h.className = 'aica-score-card__title';
        h.textContent = title || 'Practice Score';
        card.appendChild(h);

        // Overall score.
        var overall = scoreData.overall || 0;
        var overallRow = document.createElement('div');
        overallRow.className = 'aica-score-card__overall';
        var overallNum = document.createElement('span');
        overallNum.className = 'aica-score-card__overall-num';
        overallNum.textContent = overall;
        overallRow.appendChild(overallNum);
        var overallMax = document.createElement('span');
        overallMax.className = 'aica-score-card__overall-max';
        overallMax.textContent = ' / 5';
        overallRow.appendChild(overallMax);
        card.appendChild(overallRow);

        // Criteria rows.
        var criteriaWrap = document.createElement('div');
        criteriaWrap.className = 'aica-score-card__criteria';
        scoreData.criteria.forEach(function(c) {
            var row = document.createElement('div');
            row.className = 'aica-score-card__criterion';

            var nameEl = document.createElement('div');
            nameEl.className = 'aica-score-card__criterion-name';
            nameEl.textContent = c.name || '';
            row.appendChild(nameEl);

            var barWrap = document.createElement('div');
            barWrap.className = 'aica-score-card__bar-wrap';
            var bar = document.createElement('div');
            bar.className = 'aica-score-card__bar';
            var pct = Math.min(100, Math.max(0, ((c.score || 0) / 5) * 100));
            bar.style.width = pct + '%';
            if (pct >= 80) {
                bar.classList.add('aica-score-card__bar--high');
            } else if (pct >= 50) {
                bar.classList.add('aica-score-card__bar--mid');
            } else {
                bar.classList.add('aica-score-card__bar--low');
            }
            barWrap.appendChild(bar);
            row.appendChild(barWrap);

            var scoreEl = document.createElement('span');
            scoreEl.className = 'aica-score-card__criterion-score';
            scoreEl.textContent = (c.score || 0) + '/5';
            row.appendChild(scoreEl);

            if (c.feedback) {
                var fb = document.createElement('div');
                fb.className = 'aica-score-card__criterion-feedback';
                fb.textContent = c.feedback;
                row.appendChild(fb);
            }
            criteriaWrap.appendChild(row);
        });
        card.appendChild(criteriaWrap);

        // Summary feedback.
        if (scoreData.summary) {
            var summary = document.createElement('div');
            summary.className = 'aica-score-card__summary';
            summary.textContent = scoreData.summary;
            card.appendChild(summary);
        }

        // Encouragement.
        var encourageEl = document.createElement('div');
        encourageEl.className = 'aica-score-card__encourage';
        if (overall >= 4) {
            encourageEl.textContent = 'Excellent work! Keep it up!';
        } else if (overall >= 3) {
            encourageEl.textContent = 'Good progress! Keep practicing to improve.';
        } else {
            encourageEl.textContent = 'Every practice session helps you improve. Keep going!';
        }
        card.appendChild(encourageEl);

        // Action buttons.
        var actions = document.createElement('div');
        actions.className = 'aica-score-card__actions';

        if (onRetry) {
            var retryBtn = document.createElement('button');
            retryBtn.type = 'button';
            retryBtn.className = 'aica-score-card__btn aica-score-card__btn--retry';
            retryBtn.textContent = 'Practice Again';
            retryBtn.addEventListener('click', function() {
                card.remove();
                onRetry();
            });
            actions.appendChild(retryBtn);
        }

        var doneBtn = document.createElement('button');
        doneBtn.type = 'button';
        doneBtn.className = 'aica-score-card__btn aica-score-card__btn--done';
        doneBtn.textContent = 'Done';
        doneBtn.addEventListener('click', function() {
            card.remove();
        });
        actions.appendChild(doneBtn);

        card.appendChild(actions);

        appendMessageNode(card);
        scrollToBottom();
    };

    // ── Message rating helpers (thumbs up/down + hallucination flag) ──

    /**
     * Submit a message rating via the rate_message web service.
     */
    const submitRating = function(messageid, rating, isHallucination, comment) {
        if (!messageid) { return; }
        try {
            require(['core/ajax'], function(Ajax) {
                Ajax.call([{
                    methodname: 'local_ai_course_assistant_rate_message',
                    args: {
                        messageid: parseInt(messageid, 10),
                        rating: rating,
                        is_hallucination: isHallucination ? 1 : 0,
                        comment: comment || '',
                    },
                }])[0].catch(function() { /* silent */ });
            });
        } catch (e) { /* silent */ }
    };

    /**
     * Show the feedback form below a thumbs-down rating.
     */
    const showRatingFeedback = function(container, msgEl, ratingState) {
        // Remove existing form if any.
        var existing = container.querySelector('.aica-rating-feedback');
        if (existing) { existing.remove(); }

        var form = document.createElement('div');
        form.className = 'aica-rating-feedback';
        form.innerHTML =
            '<div class="aica-hallucination-check">' +
            '<label><input type="checkbox" class="aica-hallucination-cb"> This response contains inaccurate information</label>' +
            '</div>' +
            '<div class="aica-rating-comment">' +
            '<textarea rows="2" placeholder="What was wrong? (optional)"></textarea>' +
            '<button class="btn btn-sm btn-outline-secondary mt-1 aica-submit-rating">Submit</button>' +
            '</div>';

        container.appendChild(form);

        form.querySelector('.aica-submit-rating').addEventListener('click', function() {
            var isHallucination = form.querySelector('.aica-hallucination-cb').checked ? 1 : 0;
            var comment = form.querySelector('textarea').value.trim();
            if (msgEl && msgEl.dataset.messageid) {
                submitRating(msgEl.dataset.messageid, -1, isHallucination, comment);
            }
            form.innerHTML = '<span class="text-muted" style="font-size:.75rem;">Thanks for your feedback</span>';
            setTimeout(function() { form.remove(); }, 2000);
        });
    };

    return {
        initUI: initUI,
        isOpen: isOpen,
        toggleDrawer: toggleDrawer,
        closeDrawer: closeDrawer,
        addMessage: addMessage,
        startStreaming: startStreaming,
        updateStreamContent: updateStreamContent,
        finishStreaming: finishStreaming,
        showStopButton: showStopButton,
        removeStopButton: removeStopButton,
        scrollToBottom: scrollToBottom,
        showTyping: showTyping,
        setInputEnabled: setInputEnabled,
        addDateSeparator: addDateSeparator,
        getBookmarks: getBookmarks,
        clearMessages: clearMessages,
        getInputValue: getInputValue,
        clearInput: clearInput,
        autoResizeInput: autoResizeInput,
        updateSendButton: updateSendButton,
        getElements: getElements,
        getMessages: getMessages,
        showNotification: showNotification,
        showIntroModal: showIntroModal,
        preWelcome: preWelcome,
        toggleMinimize: toggleMinimize,
        setMicRecording: setMicRecording,
        setMicVisible: setMicVisible,
        showLanguageBanner: showLanguageBanner,
        setLangLabel: setLangLabel,
        setSpeakingState: setSpeakingState,
        showQuizSetup: showQuizSetup,
        hideQuizSetup: hideQuizSetup,
        showQuiz: showQuiz,
        hideStarters: hideStarters,
        showStarters: showStarters,
        setBottomMode: setBottomMode,
        setModeButtonsEnabled: setModeButtonsEnabled,
        configureVoicePanel: configureVoicePanel,
        renderHistoryPanel: renderHistoryPanel,
        showTopicPicker: showTopicPicker,
        hideTopicPicker: hideTopicPicker,
        wasToggleDragged: wasToggleDragged,
        showAvatarPicker: showAvatarPicker,
        showSVGAvatarPicker: showSVGAvatarPicker,
        updateAvatarImages: updateAvatarImages,
        showSuggestions: showSuggestions,
        clearSuggestions: clearSuggestions,
        showVoiceOverlay: showVoiceOverlay,
        hideVoiceOverlay: hideVoiceOverlay,
        setVoiceState: setVoiceState,
        appendVoiceTranscript: appendVoiceTranscript,
        showLangPicker: showLangPicker,
        showSettingsPanel: showSettingsPanel,
        showBookmarksPanel: showBookmarksPanel,
        updateBookmarkBadge: updateBookmarkBadge,
        showFeedbackPanel: showFeedbackPanel,
        showSurveyPanel: showSurveyPanel,
        setComposerLlmOptions: setComposerLlmOptions,
        startWordHighlight: startWordHighlight,
        highlightWordAt: highlightWordAt,
        stopWordHighlight: stopWordHighlight,
        startMouthSync: startMouthSync,
        startMouthSyncFromAnalyser: startMouthSyncFromAnalyser,
        stopMouthSync: stopMouthSync,
        isStartersVisible: isStartersVisible,
        showUserTestingPanel: showUserTestingPanel,
        showScoreCard: showScoreCard,
    };
});
