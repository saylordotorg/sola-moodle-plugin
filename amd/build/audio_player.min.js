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
 * Audio playback module for AI tutor chat using Web Speech API.
 *
 * @module     local_ai_course_assistant/audio_player
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define([], function() {

    /** @type {SpeechSynthesisUtterance|null} Current utterance */
    let currentUtterance = null;
    /** @type {HTMLElement|null} Currently playing button */
    let currentPlayingButton = null;

    /**
     * Check if TTS is supported in this browser.
     *
     * @returns {boolean}
     */
    const isSupported = function() {
        return 'speechSynthesis' in window;
    };

    /**
     * Update button icon based on state.
     *
     * @param {HTMLElement} button
     * @param {string} state 'play' or 'pause'
     */
    const updateButtonIcon = function(button, state) {
        const icon = button.querySelector('.local-ai-course-assistant__audio-icon');
        if (!icon) {
            return;
        }

        if (state === 'pause') {
            icon.innerHTML = '<rect x="4" y="2" width="3" height="12" fill="currentColor"/>' +
                '<rect x="9" y="2" width="3" height="12" fill="currentColor"/>';
            button.setAttribute('aria-label', 'Pause audio');
        } else {
            icon.innerHTML = '<path d="M8 2l-4 4H1v4h3l4 4V2z"/>' +
                '<path d="M11.5 8c0-1.1-.9-2-2-2v4c1.1 0 2-.9 2-2z"/>' +
                '<path d="M13 8c0-2.2-1.8-4-4-4v2c1.1 0 2 .9 2 2s-.9 2-2 2v2c2.2 0 4-1.8 4-4z"/>';
            button.setAttribute('aria-label', 'Play audio');
        }
    };

    /**
     * Stop current playback.
     */
    const stop = function() {
        if (speechSynthesis.speaking) {
            speechSynthesis.cancel();
        }
        if (currentPlayingButton) {
            currentPlayingButton.classList.remove('playing');
            updateButtonIcon(currentPlayingButton, 'play');
            currentPlayingButton = null;
        }
        currentUtterance = null;
    };

    /**
     * Handle play/pause toggle.
     *
     * @param {HTMLElement} button The play button
     * @param {string} text The text to speak
     */
    const handlePlayPause = function(button, text) {
        // If this button is already playing, pause it.
        if (currentPlayingButton === button && speechSynthesis.speaking) {
            if (speechSynthesis.paused) {
                speechSynthesis.resume();
                button.classList.add('playing');
            } else {
                speechSynthesis.pause();
                button.classList.remove('playing');
            }
            return;
        }

        // Stop any currently playing audio.
        stop();

        // Create and speak new utterance.
        currentUtterance = new SpeechSynthesisUtterance(text);
        currentUtterance.lang = document.documentElement.lang || 'en-US';
        currentUtterance.rate = 1.0;
        currentUtterance.pitch = 1.0;
        currentUtterance.volume = 1.0;

        currentUtterance.onstart = function() {
            button.classList.add('playing');
            currentPlayingButton = button;
            updateButtonIcon(button, 'pause');
        };

        currentUtterance.onend = function() {
            button.classList.remove('playing');
            currentPlayingButton = null;
            currentUtterance = null;
            updateButtonIcon(button, 'play');
        };

        currentUtterance.onerror = function() {
            button.classList.remove('playing');
            currentPlayingButton = null;
            currentUtterance = null;
            updateButtonIcon(button, 'play');
        };

        speechSynthesis.speak(currentUtterance);
    };

    /**
     * Initialize audio player for a message element.
     *
     * @param {HTMLElement} messageEl The message element
     */
    const initMessageAudio = function(messageEl) {
        const role = messageEl.getAttribute('data-role');
        if (role !== 'assistant') {
            return; // Only add audio to assistant messages.
        }

        if (!isSupported()) {
            return; // Browser doesn't support TTS.
        }

        // Check if button already exists.
        if (messageEl.querySelector('.local-ai-course-assistant__audio-btn')) {
            return;
        }

        const content = messageEl.querySelector('.local-ai-course-assistant__message-content');
        if (!content || !content.textContent.trim()) {
            return;
        }

        // Create audio button.
        const button = document.createElement('button');
        button.className = 'local-ai-course-assistant__audio-btn';
        button.setAttribute('aria-label', 'Play audio');
        button.innerHTML = '<svg class="local-ai-course-assistant__audio-icon" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">' +
            '<path d="M8 2l-4 4H1v4h3l4 4V2z"/>' +
            '<path d="M11.5 8c0-1.1-.9-2-2-2v4c1.1 0 2-.9 2-2z"/>' +
            '<path d="M13 8c0-2.2-1.8-4-4-4v2c1.1 0 2 .9 2 2s-.9 2-2 2v2c2.2 0 4-1.8 4-4z"/>' +
            '</svg>';

        button.addEventListener('click', function(e) {
            e.stopPropagation();
            handlePlayPause(button, content.textContent);
        });

        // Insert button at the start of the message.
        messageEl.insertBefore(button, content);
    };

    return {
        isSupported: isSupported,
        initMessageAudio: initMessageAudio,
        stop: stop
    };
});
