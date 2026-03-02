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
 * OpenAI Realtime API voice mode handler.
 * Manages WebSocket connection, audio capture, playback, and avatar animation.
 *
 * @module     local_ai_course_assistant/realtime
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define([], function() {

    /**
     * ELL coaching instructions for voice mode.
     * @type {string}
     */
    var ELL_INSTRUCTIONS = 'You are SOLA in a real-time voice conversation. Keep responses brief (2–3 sentences). ' +
        '[ELL Coaching Mode] You are an English conversation and pronunciation coach. While having natural ' +
        'conversation: gently correct grammar errors by modeling the correct form ("You might say: \'...\'"), ' +
        'offer pronunciation tips when speech sounds unclear. For pronunciation practice, speak a target ' +
        'phrase clearly, then listen to the learner repeat it and give specific encouraging feedback.';

    /** @type {WebSocket|null} */
    var ws = null;
    /** @type {AudioContext|null} */
    var audioCtx = null;
    /** @type {ScriptProcessorNode|null} */
    var scriptProcessor = null;
    /** @type {MediaStream|null} */
    var micStream = null;
    /** @type {string} Current connection state */
    var currentState = 'disconnected';
    /** @type {string[]} Accumulated base64 PCM16 audio chunks for current response */
    var audioChunks = [];
    /** @type {Function|null} State change callback */
    var onStateChangeCb = null;
    /** @type {Function|null} Transcript callback */
    var onTranscriptCb = null;
    /** @type {Function|null} Error callback */
    var onErrorCb = null;
    /** @type {HTMLElement|null} Overlay root for CSS custom property */
    var overlayRoot = null;
    /** @type {number|null} Animation frame ID */
    var rafId = null;
    /** @type {AnalyserNode|null} */
    var analyser = null;
    /** @type {AudioBufferSourceNode|null} Currently playing audio source */
    var currentSource = null;
    /** @type {GainNode|null} Master gain — set to 0 to instantly silence all output */
    var masterGain = null;
    /** @type {number|null} Session cap warning timer */
    var sessionWarnTimer = null;
    /** @type {number|null} Session cap disconnect timer */
    var sessionCapTimer = null;
    /** Session length cap in ms (15 minutes) */
    var SESSION_CAP_MS = 15 * 60 * 1000;
    /** Warning fires 1 minute before cap */
    var SESSION_WARN_MS = SESSION_CAP_MS - 60 * 1000;

    /**
     * Set state and notify callback.
     * @param {string} state
     */
    var setState = function(state) {
        currentState = state;
        if (onStateChangeCb) {
            onStateChangeCb(state);
        }
    };

    /**
     * Convert a base64 string to an ArrayBuffer.
     * @param {string} b64
     * @returns {ArrayBuffer}
     */
    var base64ToArrayBuffer = function(b64) {
        var binary = atob(b64);
        var bytes = new Uint8Array(binary.length);
        for (var i = 0; i < binary.length; i++) {
            bytes[i] = binary.charCodeAt(i);
        }
        return bytes.buffer;
    };

    /**
     * Convert Float32 PCM to Int16 PCM.
     * @param {Float32Array} float32
     * @returns {Int16Array}
     */
    var float32ToInt16 = function(float32) {
        var int16 = new Int16Array(float32.length);
        for (var i = 0; i < float32.length; i++) {
            var s = Math.max(-1, Math.min(1, float32[i]));
            int16[i] = s < 0 ? s * 0x8000 : s * 0x7fff;
        }
        return int16;
    };

    /**
     * Convert ArrayBuffer to base64 string.
     * @param {ArrayBuffer} buffer
     * @returns {string}
     */
    var arrayBufferToBase64 = function(buffer) {
        var bytes = new Uint8Array(buffer);
        var binary = '';
        for (var i = 0; i < bytes.byteLength; i++) {
            binary += String.fromCharCode(bytes[i]);
        }
        return btoa(binary);
    };

    /**
     * Decode accumulated PCM16 chunks and play via AudioContext.
     * Drives avatar animation via AnalyserNode.
     */
    var playAudioChunks = function() {
        if (!audioChunks.length || !audioCtx) {
            audioChunks = [];
            return;
        }

        // Silence master gain immediately — stops all audio regardless of source count.
        // Then stop any tracked source node to release its resources.
        if (masterGain) {
            masterGain.gain.setValueAtTime(0, audioCtx.currentTime);
        }
        if (currentSource) {
            try { currentSource.stop(); } catch (e) { /**/ }
            currentSource = null;
        }
        if (rafId) {
            cancelAnimationFrame(rafId);
            rafId = null;
        }
        if (overlayRoot) {
            overlayRoot.style.removeProperty('--aica-voice-level');
        }

        // Concatenate all chunks into one ArrayBuffer.
        var buffers = audioChunks.map(function(b64) { return base64ToArrayBuffer(b64); });
        audioChunks = [];

        var totalLen = buffers.reduce(function(acc, b) { return acc + b.byteLength; }, 0);
        var combined = new Int16Array(totalLen / 2);
        var offset = 0;
        buffers.forEach(function(b) {
            var view = new Int16Array(b);
            combined.set(view, offset);
            offset += view.length;
        });

        // Convert PCM16 → Float32 for AudioBuffer.
        var float32 = new Float32Array(combined.length);
        for (var i = 0; i < combined.length; i++) {
            float32[i] = combined[i] / 32768.0;
        }

        var sampleRate = 24000;
        var audioBuf = audioCtx.createBuffer(1, float32.length, sampleRate);
        audioBuf.copyToChannel(float32, 0);

        var source = audioCtx.createBufferSource();
        source.buffer = audioBuf;

        // Analyser for avatar animation; routes through master gain to destination.
        analyser = audioCtx.createAnalyser();
        analyser.fftSize = 256;
        source.connect(analyser);
        analyser.connect(masterGain);

        // Restore gain to 1 before starting the new source.
        if (masterGain) {
            masterGain.gain.setValueAtTime(1, audioCtx.currentTime);
        }
        currentSource = source;
        source.start();
        source.onended = function() {
            if (currentSource === source) {
                currentSource = null;
                if (rafId) {
                    cancelAnimationFrame(rafId);
                    rafId = null;
                }
                if (overlayRoot) {
                    overlayRoot.style.removeProperty('--aica-voice-level');
                }
                // Only return to idle if we weren't interrupted mid-speech.
                if (currentState !== 'listening') {
                    setState('idle');
                }
            }
        };

        // Drive CSS custom property for avatar animation.
        var freqData = new Uint8Array(analyser.frequencyBinCount);
        var animateLevel = function() {
            if (!analyser) { return; }
            analyser.getByteFrequencyData(freqData);
            var sum = 0;
            for (var j = 0; j < freqData.length; j++) {
                sum += freqData[j];
            }
            var rms = sum / freqData.length / 255;
            if (overlayRoot) {
                overlayRoot.style.setProperty('--aica-voice-level', rms.toFixed(3));
            }
            rafId = requestAnimationFrame(animateLevel);
        };
        rafId = requestAnimationFrame(animateLevel);
    };

    /**
     * Resample a Float32Array from one sample rate to 24000 Hz using linear interpolation.
     * Needed on iOS/WKWebView where AudioContext may not honour the requested sampleRate.
     * @param {Float32Array} input
     * @param {number} fromRate
     * @returns {Float32Array}
     */
    var resampleTo24k = function(input, fromRate) {
        if (fromRate === 24000) { return input; }
        var ratio = 24000 / fromRate;
        var outLen = Math.round(input.length * ratio);
        var out = new Float32Array(outLen);
        for (var i = 0; i < outLen; i++) {
            var src = i / ratio;
            var idx = Math.floor(src);
            var frac = src - idx;
            var a = input[idx] || 0;
            var b = idx + 1 < input.length ? input[idx + 1] : a;
            out[i] = a + frac * (b - a);
        }
        return out;
    };

    /**
     * Set up microphone capture with client-side VAD.
     * Only transmits audio chunks while the user is speaking — saves ~40% input tokens
     * compared to sending continuous audio to server_vad.
     *
     * Algorithm:
     *   - Measure RMS energy every 4096-sample block
     *   - Above threshold → speaking; send audio + mark speechActive
     *   - Below threshold for SILENCE_FRAMES → commit turn and request response
     *   - Pre-speech ring buffer holds PREFILL_FRAMES of audio to avoid clipping
     *     the very start of each utterance
     */
    var startMicCapture = function() {
        navigator.mediaDevices.getUserMedia({audio: true}).then(function(stream) {
            micStream = stream;
            if (audioCtx.state === 'suspended') {
                audioCtx.resume().catch(function() {/**/});
            }

            var SPEECH_THRESHOLD = 0.012;  // RMS energy threshold (0–1 normalised)
            var SILENCE_FRAMES   = 20;     // ~1.7 s of silence before committing turn
            var PREFILL_FRAMES   = 3;      // frames of pre-speech to prepend (avoids clipping)

            var silenceCount  = 0;
            var speechActive  = false;
            var prefillBuffer = [];        // ring buffer of recent encoded chunks

            var source = audioCtx.createMediaStreamSource(stream);
            scriptProcessor = audioCtx.createScriptProcessor(4096, 1, 1);
            var nativeRate = audioCtx.sampleRate;

            scriptProcessor.onaudioprocess = function(e) {
                if (!ws || ws.readyState !== WebSocket.OPEN) { return; }

                var raw    = e.inputBuffer.getChannelData(0);
                var float32 = resampleTo24k(raw, nativeRate);
                var int16  = float32ToInt16(float32);
                var b64    = arrayBufferToBase64(int16.buffer);

                // Compute RMS energy of the raw block.
                var sum = 0;
                for (var i = 0; i < raw.length; i++) { sum += raw[i] * raw[i]; }
                var rms = Math.sqrt(sum / raw.length);

                if (rms >= SPEECH_THRESHOLD) {
                    if (!speechActive) {
                        // Flush pre-speech buffer first to avoid clipping utterance start.
                        for (var pi = 0; pi < prefillBuffer.length; pi++) {
                            ws.send(JSON.stringify({type: 'input_audio_buffer.append', audio: prefillBuffer[pi]}));
                        }
                        prefillBuffer = [];
                        speechActive = true;
                        // Barge-in: if SOLA is currently speaking, silence her immediately.
                        if (currentState === 'speaking') {
                            if (masterGain && audioCtx) {
                                masterGain.gain.setValueAtTime(0, audioCtx.currentTime);
                            }
                            if (currentSource) {
                                try { currentSource.stop(); } catch (ex) { /**/ }
                                currentSource = null;
                            }
                            audioChunks = [];
                            if (ws && ws.readyState === WebSocket.OPEN) {
                                ws.send(JSON.stringify({type: 'response.cancel'}));
                            }
                        }
                        setState('listening');
                    }
                    silenceCount = 0;
                    ws.send(JSON.stringify({type: 'input_audio_buffer.append', audio: b64}));
                } else {
                    // Keep a rolling pre-speech buffer (capped at PREFILL_FRAMES).
                    prefillBuffer.push(b64);
                    if (prefillBuffer.length > PREFILL_FRAMES) { prefillBuffer.shift(); }

                    if (speechActive) {
                        silenceCount++;
                        // Send silence frames during the tail of the utterance.
                        ws.send(JSON.stringify({type: 'input_audio_buffer.append', audio: b64}));
                        if (silenceCount >= SILENCE_FRAMES) {
                            speechActive = false;
                            silenceCount = 0;
                            // Commit the buffered audio and ask the model to respond.
                            ws.send(JSON.stringify({type: 'input_audio_buffer.commit'}));
                            ws.send(JSON.stringify({type: 'response.create'}));
                        }
                    }
                }
            };

            // Muted gain node — keeps script processor in audio graph without echo.
            var dummyGain = audioCtx.createGain();
            dummyGain.gain.value = 0;
            dummyGain.connect(audioCtx.destination);
            source.connect(scriptProcessor);
            scriptProcessor.connect(dummyGain);
        }).catch(function(err) {
            if (onErrorCb) { onErrorCb('Microphone access denied: ' + err.message); }
        });
    };

    /**
     * Handle an incoming WebSocket message from the Realtime API.
     * @param {MessageEvent} event
     */
    var handleMessage = function(event) {
        var msg;
        try {
            msg = JSON.parse(event.data);
        } catch (e) {
            return;
        }

        switch (msg.type) {
            case 'session.created':
            case 'session.updated':
                setState('idle');
                break;

            case 'response.audio.delta':
                if (msg.delta) {
                    audioChunks.push(msg.delta);
                }
                if (currentState !== 'speaking') {
                    setState('speaking');
                }
                break;

            case 'response.audio_transcript.delta':
                if (msg.delta && onTranscriptCb) {
                    onTranscriptCb('assistant', msg.delta);
                }
                break;

            case 'response.audio.done':
                playAudioChunks();
                break;

            case 'conversation.item.input_audio_transcription.completed':
                if (msg.transcript && onTranscriptCb) {
                    onTranscriptCb('user', msg.transcript);
                }
                break;

            case 'response.done':
                // Audio playback onended handles state change.
                break;

            case 'error':
                if (onErrorCb) {
                    onErrorCb(msg.error ? msg.error.message : 'Unknown error');
                }
                break;
        }
    };

    /**
     * Connect to the OpenAI Realtime API and start a voice session.
     *
     * @param {string}   token        Ephemeral session token
     * @param {string}   instructions System instructions for the session
     * @param {string}   voice        Voice identifier (e.g. 'shimmer')
     * @param {Object}   callbacks    {onTranscript, onStateChange, onError}
     * @param {HTMLElement|null} overlayEl  Overlay root element for CSS var
     * @param {AudioContext|null} audioCtxIn Pre-created AudioContext (required for iOS/WKWebView
     *                                       where AudioContext must be created in a user gesture)
     */
    var connect = function(token, instructions, voice, callbacks, overlayEl, audioCtxIn) {
        onTranscriptCb  = callbacks.onTranscript  || null;
        onStateChangeCb = callbacks.onStateChange || null;
        onErrorCb       = callbacks.onError       || null;
        overlayRoot     = overlayEl               || null;

        setState('connecting');

        // GA Realtime API: omit the 'openai-beta.realtime-v1' subprotocol —
        // it is only valid for the beta API and causes a version mismatch with GA client secrets.
        ws = new WebSocket(
            'wss://api.openai.com/v1/realtime?model=gpt-4o-mini-realtime',
            ['realtime', 'openai-insecure-api-key.' + token]
        );

        ws.addEventListener('open', function() {
            // Use caller-provided AudioContext if available (iOS/WKWebView user-gesture requirement).
            // Fall back to creating one here for desktop browsers where timing is not restricted.
            if (audioCtxIn) {
                audioCtx = audioCtxIn;
            } else {
                audioCtx = new (window.AudioContext || window.webkitAudioContext)({sampleRate: 24000});
            }

            // Master gain node — all audio routes through this.
            // Setting gain to 0 instantly silences all playback (robust interruption).
            masterGain = audioCtx.createGain();
            masterGain.gain.value = 1;
            masterGain.connect(audioCtx.destination);

            // Configure session.
            ws.send(JSON.stringify({
                type: 'session.update',
                session: {
                    voice: voice || 'shimmer',
                    instructions: instructions || '',
                    modalities: ['audio', 'text'],
                    input_audio_format: 'pcm16',
                    output_audio_format: 'pcm16',
                    input_audio_transcription: {model: 'whisper-1'},
                    turn_detection: null,  // client-side VAD — only transmit when speaking
                    temperature: 0.8,
                },
            }));

            startMicCapture();

            // ── 15-minute session cap ──
            // Warn at 14 min, auto-disconnect at 15 min to control API costs.
            sessionWarnTimer = setTimeout(function() {
                if (onTranscriptCb) {
                    onTranscriptCb('assistant',
                        '⏱ One minute remaining in this Practice Speaking session.');
                }
            }, SESSION_WARN_MS);
            sessionCapTimer = setTimeout(function() {
                if (onTranscriptCb) {
                    onTranscriptCb('assistant',
                        'This Practice Speaking session has reached the 15-minute limit. ' +
                        'Click Practice Speaking again to start a new session!');
                }
                disconnect();
            }, SESSION_CAP_MS);
        });

        ws.addEventListener('message', handleMessage);

        ws.addEventListener('error', function(e) {
            if (onErrorCb) { onErrorCb('WebSocket error: ' + (e.message || 'connection failed')); }
            setState('disconnected');
        });

        ws.addEventListener('close', function() {
            setState('disconnected');
        });
    };

    /**
     * Disconnect from the Realtime API and clean up all resources.
     */
    var disconnect = function() {
        // Stop any playing audio — silence master gain first.
        if (masterGain && audioCtx) {
            masterGain.gain.setValueAtTime(0, audioCtx.currentTime);
        }
        if (currentSource) {
            try { currentSource.stop(); } catch (e) { /**/ }
            currentSource = null;
        }
        // Stop animation.
        if (rafId) {
            cancelAnimationFrame(rafId);
            rafId = null;
        }
        analyser = null;
        masterGain = null;

        // Stop microphone.
        if (scriptProcessor) {
            scriptProcessor.disconnect();
            scriptProcessor = null;
        }
        if (micStream) {
            micStream.getTracks().forEach(function(t) { t.stop(); });
            micStream = null;
        }
        if (audioCtx) {
            audioCtx.close().catch(function() {/**/ });
            audioCtx = null;
        }

        // Clear session cap timers.
        if (sessionWarnTimer) { clearTimeout(sessionWarnTimer); sessionWarnTimer = null; }
        if (sessionCapTimer)  { clearTimeout(sessionCapTimer);  sessionCapTimer  = null; }

        // Close WebSocket.
        if (ws) {
            ws.close();
            ws = null;
        }

        audioChunks = [];
        setState('disconnected');
    };

    /**
     * Whether a session is currently connected.
     * @returns {boolean}
     */
    var isConnected = function() {
        return ws !== null && ws.readyState === WebSocket.OPEN;
    };

    return {
        connect: connect,
        disconnect: disconnect,
        isConnected: isConnected,
        ELL_INSTRUCTIONS: ELL_INSTRUCTIONS,
    };
});
