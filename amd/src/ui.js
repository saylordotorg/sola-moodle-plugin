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
    let messagesContainer = null;
    /** @type {HTMLTextAreaElement} */
    let input = null;
    /** @type {HTMLElement} */
    let sendBtn = null;
    /** @type {HTMLElement} */
    let typingIndicator = null;
    /** @type {HTMLElement} */
    let expandBtn = null;
    /** @type {HTMLElement} */
    let micBtn = null;
    /** @type {HTMLElement} */
    let langBtn = null;
    /** @type {HTMLElement} */
    let langBanner = null;

    /** localStorage key for persisting expanded state */
    const EXPAND_KEY = 'aica_expand_state';
    /** localStorage key for persisting drag position */
    const DRAG_KEY = 'aica_drag_pos';
    /** localStorage key for persisting custom resize dimensions */
    const SIZE_KEY = 'aica_custom_size';
    /** Minimum pixel movement to count as a drag (suppresses subsequent click) */
    const DRAG_THRESHOLD = 8;

    /** @type {boolean} True if the toggle button was just dragged (not clicked) */
    let toggleDragged = false;

    /** @type {HTMLElement|null} Current streaming message element */
    let streamingEl = null;

    /** @type {HTMLElement|null} Currently playing TTS message element */
    let speakingEl = null;

    /**
     * Initialize UI references.
     *
     * @param {HTMLElement} rootEl The root widget element
     */
    const initUI = function(rootEl) {
        root = rootEl;
        drawer = root.querySelector('.local-ai-course-assistant__drawer');
        toggle = root.querySelector('#local-ai-course-assistant-toggle');
        messagesContainer = root.querySelector('.local-ai-course-assistant__messages');
        input = root.querySelector('.local-ai-course-assistant__input');
        sendBtn = root.querySelector('.local-ai-course-assistant__btn-send');
        typingIndicator = root.querySelector('.local-ai-course-assistant__typing');
        expandBtn = root.querySelector('.local-ai-course-assistant__btn-expand');
        micBtn = root.querySelector('.local-ai-course-assistant__btn-mic');
        langBtn = root.querySelector('.local-ai-course-assistant__btn-lang');
        langBanner = root.querySelector('.local-ai-course-assistant__lang-banner');
        restoreExpandState();
        applyPositionOffset();
        initDrag();
        initResize();
    };

    /**
     * Apply custom x/y offset from data attributes, overriding CSS class defaults.
     */
    const applyPositionOffset = function() {
        if (!root) {
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
        if (!root) {
            return;
        }
        const header = root.querySelector('.local-ai-course-assistant__header');
        if (!header) {
            return;
        }

        // Restore saved drag position.
        try {
            const saved = localStorage.getItem(DRAG_KEY);
            if (saved) {
                const pos = JSON.parse(saved);
                root.style.bottom = 'auto';
                root.style.right  = 'auto';
                root.style.top    = pos.top  + 'px';
                root.style.left   = pos.left + 'px';
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
            // If the toggle button was dragged (not just clicked), set the flag so
            // chat.js can suppress the resulting click event.
            if (dragFromToggle && dragMoved) {
                toggleDragged = true;
            }
            try {
                localStorage.setItem(DRAG_KEY, JSON.stringify({
                    left: parseInt(root.style.left, 10),
                    top:  parseInt(root.style.top,  10),
                }));
            } catch (e) { /**/ }
        };

        // Header drag (existing).
        header.addEventListener('mousedown', function(e) {
            if (e.target.closest('button, a')) {
                return;
            }
            e.preventDefault();
            onDragStart(e.clientX, e.clientY, false);
        });
        document.addEventListener('mousemove', function(e) {
            onDragMove(e.clientX, e.clientY);
        });
        document.addEventListener('mouseup', onDragEnd);

        header.addEventListener('touchstart', function(e) {
            if (e.target.closest('button, a')) {
                return;
            }
            const t = e.touches[0];
            onDragStart(t.clientX, t.clientY, false);
        }, {passive: true});
        document.addEventListener('touchmove', function(e) {
            if (!dragging) {
                return;
            }
            const t = e.touches[0];
            onDragMove(t.clientX, t.clientY);
        }, {passive: true});
        document.addEventListener('touchend', onDragEnd);

        // Toggle button drag — allows repositioning the widget via the avatar button.
        if (toggle) {
            toggle.addEventListener('mousedown', function(e) {
                e.preventDefault();
                onDragStart(e.clientX, e.clientY, true);
            });
            toggle.addEventListener('touchstart', function(e) {
                const t = e.touches[0];
                onDragStart(t.clientX, t.clientY, true);
            }, {passive: true});
        }

        // Drawer body drag — allows dragging from non-interactive areas outside the header
        // (hint bar, starters background, quiz setup labels, etc.).
        // Messages area excluded to preserve scroll; header excluded (has its own handler).
        if (drawer) {
            const DRAG_EXCLUDE = 'button, a, input, textarea, select, ' +
                '.local-ai-course-assistant__messages, ' +
                '.local-ai-course-assistant__header';
            drawer.addEventListener('mousedown', function(e) {
                if (e.target.closest(DRAG_EXCLUDE)) {
                    return;
                }
                e.preventDefault();
                onDragStart(e.clientX, e.clientY, false);
            });
            drawer.addEventListener('touchstart', function(e) {
                if (e.target.closest(DRAG_EXCLUDE)) {
                    return;
                }
                const t = e.touches[0];
                onDragStart(t.clientX, t.clientY, false);
            }, {passive: true});
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
            handle.addEventListener('mousedown', function(e) {
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
                try {
                    localStorage.setItem(EXPAND_KEY, '');
                } catch (ex) { /**/ }
            });
        });

        document.addEventListener('mousemove', function(e) {
            if (!isResizing || !resizeHandle) {
                return;
            }
            const isN  = resizeHandle.classList.contains('aica-resize-handle--n') ||
                         resizeHandle.classList.contains('aica-resize-handle--nw');
            const isW  = resizeHandle.classList.contains('aica-resize-handle--w') ||
                         resizeHandle.classList.contains('aica-resize-handle--nw');

            if (isN) {
                // Drag upward increases height (widget anchored at bottom).
                const newH = Math.max(300, Math.min(window.innerHeight * 0.9,
                    startH + (startY - e.clientY)));
                drawer.style.height = newH + 'px';
            }
            if (isW) {
                // Drag leftward increases width (widget anchored at right).
                const newW = Math.max(260, Math.min(window.innerWidth * 0.9,
                    startW + (startX - e.clientX)));
                drawer.style.width = newW + 'px';
            }
        });

        document.addEventListener('mouseup', function() {
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
        });
    };

    /**
     * Restore the expanded state and custom size from localStorage on init.
     */
    const restoreExpandState = function() {
        try {
            if (localStorage.getItem(EXPAND_KEY) === 'expanded' && drawer) {
                drawer.classList.add('local-ai-course-assistant__drawer--expanded');
                // Don't restore custom size when expanded — CSS class defines the size.
            } else {
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
     * Toggle between normal and expanded states.
     * Expanding clears inline dimensions so the CSS class defines size.
     * Collapsing restores the user's custom size if previously set.
     *
     * @returns {boolean} True if now expanded
     */
    const toggleExpand = function() {
        if (!drawer) {
            return false;
        }
        const expanded = drawer.classList.toggle('local-ai-course-assistant__drawer--expanded');
        try {
            if (expanded) {
                // Remove inline size so the --expanded CSS class takes effect.
                drawer.style.width = '';
                drawer.style.height = '';
                localStorage.setItem(EXPAND_KEY, 'expanded');
            } else {
                // Restore custom size if user previously resized.
                const saved = localStorage.getItem(SIZE_KEY);
                if (saved) {
                    const size = JSON.parse(saved);
                    if (size.width) {
                        drawer.style.width = size.width;
                    }
                    if (size.height) {
                        drawer.style.height = size.height;
                    }
                }
                localStorage.setItem(EXPAND_KEY, '');
            }
        } catch (e) {
            // localStorage may be unavailable.
        }
        return expanded;
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
     * Toggle the drawer open/closed.
     *
     * @returns {boolean} True if drawer is now open
     */
    const toggleDrawer = function() {
        const opening = !isOpen();
        drawer.setAttribute('aria-hidden', opening ? 'false' : 'true');
        toggle.setAttribute('aria-expanded', opening ? 'true' : 'false');

        if (opening) {
            input.focus();
        }

        return opening;
    };

    /**
     * Close the drawer.
     */
    const closeDrawer = function() {
        drawer.setAttribute('aria-hidden', 'true');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.focus();
    };

    /**
     * Set the mic button into recording or idle state.
     *
     * @param {boolean} recording
     */
    const setMicRecording = function(recording) {
        if (!micBtn) {
            return;
        }
        micBtn.classList.toggle('local-ai-course-assistant__btn-mic--recording', recording);
        micBtn.setAttribute('aria-pressed', recording ? 'true' : 'false');
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
            span.textContent = label;
        }
        langBtn.style.display = '';
    };

    /**
     * Add a message bubble to the messages area.
     *
     * @param {string} role 'user' or 'assistant'
     * @param {string} text The message text (markdown for assistant, plain for user)
     * @param {Function|null} onSpeak Optional callback when TTS button is clicked; receives (text, el)
     * @returns {HTMLElement} The message element
     */
    const addMessage = function(role, text, onSpeak) {
        const el = document.createElement('div');
        el.className = 'local-ai-course-assistant__message local-ai-course-assistant__message--' + role;
        el.setAttribute('data-role', role);

        const content = document.createElement('div');
        content.className = 'local-ai-course-assistant__message-content';

        if (role === 'assistant') {
            content.innerHTML = Markdown.render(text);
        } else {
            content.textContent = text;
        }

        el.appendChild(content);

        // Add TTS speak button to assistant messages.
        if (role === 'assistant' && onSpeak) {
            const speakBtn = document.createElement('button');
            speakBtn.className = 'local-ai-course-assistant__btn-speak';
            speakBtn.setAttribute('aria-label', 'Read aloud');
            speakBtn.setAttribute('title', 'Read aloud');
            speakBtn.innerHTML =
                '<svg class="aica-icon-speak" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
                ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
                '<path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3A4.5 4.5 0 0 0 14 7.97v8.05c1.48-.73 2.5-2.25 2.5-4.02z"/>' +
                '<path d="M14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77' +
                ' 0-4.28-2.99-7.86-7-8.77z"/></svg>' +
                '<svg class="aica-icon-stop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
                ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
                '<path d="M6 6h12v12H6z"/></svg>';

            speakBtn.addEventListener('click', function() {
                onSpeak(content.textContent || '', el, speakBtn);
            });
            el.appendChild(speakBtn);
        }

        messagesContainer.appendChild(el);
        scrollToBottom();
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
    };

    /**
     * Start streaming a new assistant message.
     *
     * @returns {HTMLElement} The streaming message element
     */
    const startStreaming = function() {
        showTyping(false);
        streamingEl = addMessage('assistant', '');
        return streamingEl;
    };

    /**
     * Append a chunk to the current streaming message.
     * Re-renders all accumulated text through markdown on each chunk.
     *
     * @param {string} fullText The full accumulated text so far
     */
    const updateStreamContent = function(fullText) {
        if (!streamingEl) {
            return;
        }
        const content = streamingEl.querySelector('.local-ai-course-assistant__message-content');
        content.innerHTML = Markdown.render(fullText);
        scrollToBottom();
    };

    /**
     * Finish the current streaming message.
     *
     * @param {string}        fullText  The final complete text
     * @param {Function|null} onSpeak   Optional TTS callback; if provided, adds speak button
     */
    const finishStreaming = function(fullText, onSpeak) {
        if (streamingEl) {
            const content = streamingEl.querySelector('.local-ai-course-assistant__message-content');
            content.innerHTML = Markdown.render(fullText);

            // Add speak button if TTS is available and not already present.
            if (onSpeak && !streamingEl.querySelector('.local-ai-course-assistant__btn-speak')) {
                const speakBtn = document.createElement('button');
                speakBtn.className = 'local-ai-course-assistant__btn-speak';
                speakBtn.setAttribute('aria-label', 'Read aloud');
                speakBtn.setAttribute('title', 'Read aloud');
                speakBtn.innerHTML =
                    '<svg class="aica-icon-speak" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
                    ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
                    '<path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3A4.5 4.5 0 0 0 14 7.97v8.05c1.48-.73 2.5-2.25 2.5-4.02z"/>' +
                    '<path d="M14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77' +
                    ' 0-4.28-2.99-7.86-7-8.77z"/></svg>' +
                    '<svg class="aica-icon-stop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"' +
                    ' width="14" height="14" fill="currentColor" aria-hidden="true">' +
                    '<path d="M6 6h12v12H6z"/></svg>';
                const capturedEl = streamingEl;
                speakBtn.addEventListener('click', function() {
                    onSpeak(content.textContent || '', capturedEl, speakBtn);
                });
                streamingEl.appendChild(speakBtn);
            }

            streamingEl = null;
        }
        scrollToBottom();
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

    /**
     * Clear all messages from the messages area.
     */
    const clearMessages = function() {
        messagesContainer.innerHTML = '';
        streamingEl = null;
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
            messagesContainer: messagesContainer,
            input: input,
            sendBtn: sendBtn,
            closeBtn: root.querySelector('.local-ai-course-assistant__btn-close'),
            clearBtn: root.querySelector('.local-ai-course-assistant__btn-clear'),
            copyBtn: root.querySelector('.local-ai-course-assistant__btn-copy'),
            expandBtn: expandBtn,
            micBtn: micBtn,
            langBtn: langBtn,
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
     * Show welcome screen on first use.
     * Renders as a full overlay inside the drawer.
     */
    const showIntroModal = function() {
        const avatarUrl = root.dataset.avatarurl || '';
        const firstName = root.dataset.firstname || '';
        const welcomeName = firstName ? ', ' + firstName : '';

        const panel = document.createElement('div');
        panel.className = 'local-ai-course-assistant__welcome';
        panel.setAttribute('role', 'region');
        panel.setAttribute('aria-label', 'Welcome');

        panel.innerHTML =
            (avatarUrl
                ? '<img src="' + avatarUrl + '" alt="" class="local-ai-course-assistant__welcome-avatar" aria-hidden="true" />'
                : '') +
            '<h2 class="local-ai-course-assistant__welcome-title">Hi' + welcomeName + ', I\'m SOLA!</h2>' +
            '<p class="local-ai-course-assistant__welcome-subtitle">Your Saylor Online Learning Assistant, here to help you succeed.</p>' +
            '<ul class="local-ai-course-assistant__welcome-features">' +
            '<li>' +
            '<span class="local-ai-course-assistant__welcome-feature-icon" aria-hidden="true">💬</span>' +
            '<span><strong>Ask questions</strong> about course content anytime</span>' +
            '</li>' +
            '<li>' +
            '<span class="local-ai-course-assistant__welcome-feature-icon" aria-hidden="true">📅</span>' +
            '<span><strong>Build a study plan</strong> tailored to your schedule</span>' +
            '</li>' +
            '<li>' +
            '<span class="local-ai-course-assistant__welcome-feature-icon" aria-hidden="true">📝</span>' +
            '<span><strong>Practice quizzes</strong> to test your understanding</span>' +
            '</li>' +
            '<li>' +
            '<span class="local-ai-course-assistant__welcome-feature-icon" aria-hidden="true">🕐</span>' +
            '<span><strong>Available 24/7</strong> — always here when you need help</span>' +
            '</li>' +
            '</ul>' +
            '<button class="local-ai-course-assistant__welcome-cta">Start Chatting</button>';

        drawer.appendChild(panel);

        // Fade in and focus the CTA button.
        setTimeout(function() {
            panel.classList.add('local-ai-course-assistant__welcome--visible');
            var cta = panel.querySelector('.local-ai-course-assistant__welcome-cta');
            if (cta) {
                cta.focus();
            }
        }, 50);

        // Dismiss on CTA click.
        var ctaBtn = panel.querySelector('.local-ai-course-assistant__welcome-cta');
        ctaBtn.addEventListener('click', function() {
            panel.classList.remove('local-ai-course-assistant__welcome--visible');
            setTimeout(function() {
                panel.remove();
                if (input) {
                    input.focus();
                }
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

    return {
        initUI: initUI,
        isOpen: isOpen,
        toggleDrawer: toggleDrawer,
        closeDrawer: closeDrawer,
        addMessage: addMessage,
        startStreaming: startStreaming,
        updateStreamContent: updateStreamContent,
        finishStreaming: finishStreaming,
        scrollToBottom: scrollToBottom,
        showTyping: showTyping,
        setInputEnabled: setInputEnabled,
        clearMessages: clearMessages,
        getInputValue: getInputValue,
        clearInput: clearInput,
        autoResizeInput: autoResizeInput,
        updateSendButton: updateSendButton,
        getElements: getElements,
        getMessages: getMessages,
        showNotification: showNotification,
        showIntroModal: showIntroModal,
        toggleExpand: toggleExpand,
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
        showTopicPicker: showTopicPicker,
        hideTopicPicker: hideTopicPicker,
        wasToggleDragged: wasToggleDragged,
    };
});
