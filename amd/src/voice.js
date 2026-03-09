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
 * Option B voice mode: Web Speech API STT + SSE AI + OpenAI TTS.
 *
 * State machine: disconnected → connecting → listening → speaking → idle → …
 * "connecting" is reused for the "thinking" state between utterance and first audio.
 *
 * Public API mirrors realtime.js so chat.js can swap modules with minimal change:
 *   Voice.connect(instructions, voice, callbacks, config)
 *   Voice.disconnect()
 *   Voice.isConnected()
 *   Voice.ELL_INSTRUCTIONS   (string constant — kept for API parity, not used by SSE)
 *
 * config = { courseId, sessKey, sseUrl, lang }
 * TTS URL is derived: sseUrl.replace(/\/sse\.php(\?.*)?$/, '/tts.php')
 *
 * callbacks = { onTranscript(role, text), onStateChange(state), onError(msg) }
 *
 * @module     local_ai_course_assistant/voice
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define(['local_ai_course_assistant/sse_client'], function(SSE) {
    'use strict';

    /**
     * ELL coaching instructions string — kept for API parity with realtime.js.
     * Not sent to SSE (prompt is server-side); exposed so callers can test the value.
     * @type {string}
     */
    var ELL_INSTRUCTIONS = 'You are SOLA in a real-time voice conversation. Keep responses brief (2–3 sentences). ' +
        '[ELL Coaching Mode] You are an English conversation and pronunciation coach. While having natural ' +
        'conversation: gently correct grammar errors by modeling the correct form ("You might say: \'...\'"), ' +
        'offer pronunciation tips when speech sounds unclear. For pronunciation practice, speak a target ' +
        'phrase clearly, then listen to the learner repeat it and give specific encouraging feedback.';

    // ── Module state ─────────────────────────────────────────────────────────

    /** @type {boolean} Whether a session is active */
    var connected = false;
    /** @type {string} Current state label */
    var currentState = 'disconnected';
    /** @type {SpeechRecognition|null} */
    var recognition = null;
    /** @type {AudioContext|null} */
    var audioCtx = null;
    /** @type {AnalyserNode|null} */
    var analyser = null;
    /** @type {number|null} requestAnimationFrame handle */
    var animFrame = null;
    /** @type {string[]} Sentences queued for TTS playback */
    var ttsQueue = [];
    /** @type {boolean} Whether TTS audio is currently playing */
    var isTtsBusy = false;
    /** @type {AudioBufferSourceNode|null} Currently playing source */
    var currentSource = null;
    /** @type {AbortController|null} Controls in-flight TTS fetch */
    var ttsAbortCtrl = null;
    /** @type {AudioBuffer|null} Pre-fetched and decoded audio for next sentence */
    var prefetchedAudio = null;
    /** @type {boolean} Whether a prefetch is currently in flight */
    var prefetchInFlight = false;
    /** @type {AbortController|null} Controls in-flight SSE stream */
    var sseController = null;
    /** @type {string} SSE token accumulation buffer for sentence extraction */
    var sentenceBuffer = '';
    /** @type {string} Accumulates tokens to find and hide the SOLA_NEXT block from transcript */
    var displayBuffer = '';
    /** @type {number} How many chars of displayBuffer have already been emitted to transcript */
    var displayEmitted = 0;
    /** @type {number|null} Timer to restart recognition after TTS ends */
    var restartTimer = null;
    /** @type {string} Derived TTS proxy URL */
    var ttsUrl = '';
    /** @type {string} Derived transcription proxy URL (MediaRecorder mode) */
    var transcribeUrl = '';
    /** @type {boolean} True when SpeechRecognition unavailable; use MediaRecorder + Whisper instead */
    var useMediaRecorder = false;
    /** @type {MediaStream|null} Mic stream (MediaRecorder mode) */
    var mediaStream = null;
    /** @type {MediaRecorder|null} */
    var mediaRecorder = null;
    /** @type {Blob[]} Recorded audio chunks */
    var recordingChunks = [];
    /** @type {boolean} True once speech-level audio is detected in current recording */
    var speechDetected = false;
    /** @type {number|null} Silence timer handle (VAD) */
    var silenceTimer = null;
    /** @type {AnalyserNode|null} VAD analyser (mic input) */
    var vadAnalyser = null;
    /** @type {MediaStreamAudioSourceNode|null} */
    var vadSource = null;
    /** @type {number|null} rAF handle for VAD loop */
    var vadFrame = null;

    // ── Callbacks / session config ────────────────────────────────────────────

    /** @type {Function|null} */
    var onTranscriptCb = null;
    /** @type {Function|null} Suggestions callback — receives array of chip strings */
    var onSuggestionsCb = null;
    /** @type {Function|null} */
    var onStateChangeCb = null;
    /** @type {Function|null} */
    var onErrorCb = null;
    /** @type {Object} Session config: courseId, sessKey, sseUrl, lang, voice */
    var cfg = {};

    // ── Internal helpers ──────────────────────────────────────────────────────

    /**
     * Update state and fire callback.
     * @param {string} state
     */
    var setState = function(state) {
        currentState = state;
        if (onStateChangeCb) {
            onStateChangeCb(state);
        }
    };

    /**
     * Query the DOM for the voice bar element (set CSS custom property on it).
     * @returns {HTMLElement|null}
     */
    var getVoiceBar = function() {
        return document.querySelector('.aica-voice-bar');
    };

    /**
     * rAF-driven loop: reads AnalyserNode and sets --aica-voice-level on voice bar.
     */
    var animLoop = function() {
        if (!analyser) {
            return;
        }
        var data = new Uint8Array(analyser.frequencyBinCount);
        analyser.getByteFrequencyData(data);
        var sum = 0;
        for (var i = 0; i < data.length; i++) {
            sum += data[i];
        }
        var level = (sum / data.length / 255).toFixed(3);
        var bar = getVoiceBar();
        if (bar) {
            bar.style.setProperty('--aica-voice-level', level);
        }
        animFrame = requestAnimationFrame(animLoop);
    };

    var startAnim = function() {
        if (!animFrame) {
            animFrame = requestAnimationFrame(animLoop);
        }
    };

    var stopAnim = function() {
        if (animFrame) {
            cancelAnimationFrame(animFrame);
            animFrame = null;
        }
        var bar = getVoiceBar();
        if (bar) {
            bar.style.removeProperty('--aica-voice-level');
        }
    };

    /**
     * Strip [SOLA_NEXT]…[/SOLA_NEXT] suggestion blocks from text.
     * Prevents suggestion tags being spoken aloud by TTS.
     * @param {string} text
     * @returns {string}
     */
    var stripSolaTags = function(text) {
        text = text.replace(/\[SOLA_NEXT\][\s\S]*?\[\/SOLA_NEXT\]/g, '');
        text = text.replace(/\[SOLA_NEXT\][\s\S]*/g, '');
        return text;
    };

    /** Minimum characters before emitting an early clause (comma/semicolon/colon split) */
    var EARLY_EMIT_MIN = 40;

    /**
     * Extract a speakable chunk from sentenceBuffer.
     * Prefers full sentences (ending . ! ?), but will also split on
     * commas, semicolons, or colons once the buffer exceeds EARLY_EMIT_MIN
     * characters — so TTS can start sooner on long first sentences.
     * @returns {string|null}
     */
    var extractSentence = function() {
        // Full sentence boundary (period, exclamation, question mark).
        var m = sentenceBuffer.match(/^([\s\S]+?[.!?])(\s+)([\s\S]*)$/);
        if (m) {
            sentenceBuffer = m[3];
            return m[1].trim();
        }
        // Early clause split on comma/semicolon/colon if buffer is long enough.
        if (sentenceBuffer.length >= EARLY_EMIT_MIN) {
            var c = sentenceBuffer.match(/^([\s\S]{20,}?[,;:])(\s+)([\s\S]*)$/);
            if (c) {
                sentenceBuffer = c[3];
                return c[1].trim();
            }
        }
        return null;
    };

    // ── TTS queue ─────────────────────────────────────────────────────────────

    // Forward declaration — processTtsQueue, scheduleRecognitionRestart, and
    // startMediaRecording call each other; all are assigned before connect() is callable.
    var processTtsQueue;
    var scheduleRecognitionRestart;
    var startMediaRecording;

    /**
     * Stop current TTS playback and clear the queue.
     */
    var interruptTts = function() {
        if (currentSource) {
            try { currentSource.stop(); } catch (e) { /**/ }
            currentSource = null;
        }
        if (ttsAbortCtrl) {
            ttsAbortCtrl.abort();
            ttsAbortCtrl = null;
        }
        stopAnim();
        ttsQueue = [];
        isTtsBusy = false;
        prefetchedAudio = null;
        prefetchInFlight = false;
    };

    /**
     * Fetch and decode TTS audio for a sentence, returning the AudioBuffer.
     * @param {string} text
     * @param {AbortSignal} signal
     * @returns {Promise<AudioBuffer|null>}
     */
    var fetchTtsAudio = function(text, signal) {
        var body = new FormData();
        body.append('text', text);
        body.append('courseid', cfg.courseId || 0);
        body.append('sesskey', cfg.sessKey || '');
        body.append('voice', cfg.voice || 'shimmer');

        return fetch(ttsUrl, {method: 'POST', body: body, signal: signal})
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (!connected || data.error || !data.audio) {
                    return null;
                }
                var binary = atob(data.audio);
                var bytes = new Uint8Array(binary.length);
                for (var i = 0; i < binary.length; i++) {
                    bytes[i] = binary.charCodeAt(i);
                }
                return new Promise(function(resolve) {
                    audioCtx.decodeAudioData(bytes.buffer, function(buf) {
                        resolve(buf);
                    }, function() {
                        resolve(null);
                    });
                });
            })
            .catch(function(err) {
                if (err && err.name === 'AbortError') { return null; }
                return null;
            });
    };

    /**
     * Pre-fetch the next sentence in the queue (if any) while current audio plays.
     */
    var maybePrefetchNext = function() {
        if (prefetchInFlight || prefetchedAudio || !ttsQueue.length || !connected) {
            return;
        }
        prefetchInFlight = true;
        var nextText = ttsQueue[0]; // peek, don't shift yet
        fetchTtsAudio(nextText, (ttsAbortCtrl && ttsAbortCtrl.signal) || undefined)
            .then(function(buf) {
                prefetchInFlight = false;
                if (buf && connected) {
                    prefetchedAudio = buf;
                }
            });
    };

    /**
     * Schedule recognition restart after a short delay.
     * Called when TTS finishes or SSE completes with nothing to play.
     */
    scheduleRecognitionRestart = function() {
        if (!connected) {
            return;
        }
        if (restartTimer) {
            clearTimeout(restartTimer);
        }
        restartTimer = setTimeout(function() {
            restartTimer = null;
            if (!connected) { return; }
            if (useMediaRecorder) {
                startMediaRecording();
            } else if (recognition) {
                try { recognition.start(); } catch (e) { /**/ }
            }
        }, 50); // was 300ms — reduced for snappier turn-around
    };

    /**
     * Dequeue one sentence and play it via TTS.
     * Recursively chains until queue is empty, then restarts recognition.
     */
    processTtsQueue = function() {
        if (isTtsBusy || !ttsQueue.length || !connected) {
            return;
        }

        var sentence = ttsQueue.shift();
        isTtsBusy = true;
        setState('speaking');

        // Use prefetched audio if available (sentence was peeked by maybePrefetchNext).
        var audioBufPromise;
        if (prefetchedAudio) {
            audioBufPromise = Promise.resolve(prefetchedAudio);
            prefetchedAudio = null;
        } else {
            if (ttsAbortCtrl) {
                ttsAbortCtrl.abort();
            }
            ttsAbortCtrl = new AbortController();
            audioBufPromise = fetchTtsAudio(sentence, ttsAbortCtrl.signal);
        }

        audioBufPromise.then(function(audioBuf) {
            if (!connected) {
                return;
            }
            if (!audioBuf) {
                isTtsBusy = false;
                if (ttsQueue.length) {
                    processTtsQueue();
                } else {
                    setState('idle');
                    scheduleRecognitionRestart();
                }
                return;
            }

            var source = audioCtx.createBufferSource();
            source.buffer = audioBuf;
            // Apply user-selected playback speed (0.5 – 2.0; default 1.0).
            var speed = parseFloat(localStorage.getItem('aica_tts_speed') || '1.0');
            if (speed >= 0.5 && speed <= 2.0) {
                source.playbackRate.value = speed;
            }

            analyser = audioCtx.createAnalyser();
            analyser.fftSize = 256;
            source.connect(analyser);
            analyser.connect(audioCtx.destination);

            currentSource = source;
            startAnim();
            source.start();

            // Start prefetching the next sentence while this one plays.
            maybePrefetchNext();

            source.onended = function() {
                if (currentSource === source) {
                    currentSource = null;
                }
                stopAnim();
                isTtsBusy = false;
                if (!connected) {
                    return;
                }
                if (ttsQueue.length) {
                    processTtsQueue();
                } else {
                    setState('idle');
                    scheduleRecognitionRestart();
                }
            };
        }).catch(function(err) {
            if (err && err.name === 'AbortError') {
                return;
            }
            isTtsBusy = false;
            if (connected && ttsQueue.length) {
                processTtsQueue();
            } else if (connected) {
                setState('idle');
                scheduleRecognitionRestart();
            }
        });
    };

    /**
     * Extract any complete sentences from sentenceBuffer and add to TTS queue.
     */
    var maybeSendSentence = function() {
        // Strip suggestion tags before extracting sentences.
        sentenceBuffer = stripSolaTags(sentenceBuffer);
        var s = extractSentence();
        while (s) {
            ttsQueue.push(s);
            s = extractSentence();
        }
        processTtsQueue();
    };

    // ── SSE processing ────────────────────────────────────────────────────────

    /**
     * Stream a user utterance through SSE, accumulate tokens into TTS queue.
     * @param {string} text  Final recognised utterance text
     */
    var processUtterance = function(text) {
        interruptTts();
        setState('connecting'); // "thinking" — reuse connecting state/spinner

        if (onTranscriptCb) {
            onTranscriptCb('user', text);
        }
        sentenceBuffer = '';
        displayBuffer = '';
        displayEmitted = 0;

        var postBody = {
            sesskey:  cfg.sessKey  || '',
            courseid: cfg.courseId || 0,
            message:  text,
        };
        if (cfg.lang) {
            postBody.lang = cfg.lang;
        }

        if (sseController) {
            try { sseController.abort(); } catch (e) { /**/ }
        }

        sseController = SSE.startStream(cfg.sseUrl, postBody, {
            onToken: function(token) {
                if (!connected) {
                    return;
                }
                // Accumulate for display. Only emit text that precedes [SOLA_NEXT] —
                // the tag spans many tokens so single-token regex never matches.
                // Also hold back any partial tag prefix at the end to prevent leaking.
                displayBuffer += token;
                var solaStart = displayBuffer.indexOf('[SOLA_NEXT]');
                var visEnd;
                if (solaStart !== -1) {
                    visEnd = solaStart;
                } else {
                    var tag = '[SOLA_NEXT]';
                    var hold = 0;
                    for (var pi = 1; pi <= tag.length && pi <= displayBuffer.length; pi++) {
                        if (displayBuffer.slice(-pi) === tag.slice(0, pi)) {
                            hold = pi;
                        }
                    }
                    visEnd = displayBuffer.length - hold;
                }
                if (visEnd > displayEmitted && onTranscriptCb) {
                    onTranscriptCb('assistant', displayBuffer.slice(displayEmitted, visEnd));
                }
                displayEmitted = visEnd;
                sentenceBuffer += token;
                maybeSendSentence();
            },
            onDone: function() {
                if (!connected) {
                    return;
                }
                // Extract SOLA_NEXT suggestions before stripping.
                if (onSuggestionsCb) {
                    var nextMatch = displayBuffer.match(/\[SOLA_NEXT\]([\s\S]*?)\[\/SOLA_NEXT\]/);
                    if (nextMatch) {
                        var chips = nextMatch[1].split('||').map(function(s) { return s.trim(); })
                            .filter(function(s) { return s.length > 0; });
                        if (chips.length) {
                            onSuggestionsCb(chips);
                        }
                    }
                }
                // Flush remaining buffer as final sentence.
                var remaining = stripSolaTags(sentenceBuffer).trim();
                sentenceBuffer = '';
                if (remaining) {
                    ttsQueue.push(remaining);
                }
                processTtsQueue();
                // Nothing queued — go idle and restart listening.
                if (!isTtsBusy && !ttsQueue.length) {
                    setState('idle');
                    scheduleRecognitionRestart();
                }
            },
            onError: function(msg) {
                if (!connected) {
                    return;
                }
                if (onErrorCb) {
                    onErrorCb(msg);
                }
                setState('idle');
                scheduleRecognitionRestart();
            },
        });
    };

    // ── MediaRecorder (mobile fallback) ──────────────────────────────────────

    /**
     * Return a short file extension for a MIME type string.
     * @param {string} mime
     * @returns {string}
     */
    var getExtFromMime = function(mime) {
        if (mime.indexOf('webm') !== -1) { return 'webm'; }
        if (mime.indexOf('mp4')  !== -1) { return 'mp4'; }
        if (mime.indexOf('ogg')  !== -1) { return 'ogg'; }
        if (mime.indexOf('wav')  !== -1) { return 'wav'; }
        return 'webm';
    };

    /**
     * Stop the VAD loop and release its nodes.
     */
    var stopVAD = function() {
        if (vadFrame) {
            cancelAnimationFrame(vadFrame);
            vadFrame = null;
        }
        if (silenceTimer) {
            clearTimeout(silenceTimer);
            silenceTimer = null;
        }
        if (vadSource) {
            try { vadSource.disconnect(); } catch (e) { /**/ }
            vadSource = null;
        }
        vadAnalyser = null;
        speechDetected = false;
    };

    /**
     * Start a VAD rAF loop that detects speech onset and trailing silence.
     * When silence follows speech for 1.5 s, stops the MediaRecorder.
     */
    var startVAD = function() {
        if (!audioCtx || !mediaStream) { return; }
        try {
            vadSource  = audioCtx.createMediaStreamSource(mediaStream);
            vadAnalyser = audioCtx.createAnalyser();
            vadAnalyser.fftSize = 256;
            vadSource.connect(vadAnalyser);
        } catch (e) { return; }

        var checkLevel = function() {
            if (!mediaRecorder || mediaRecorder.state !== 'recording') { return; }
            var data = new Uint8Array(vadAnalyser.frequencyBinCount);
            vadAnalyser.getByteFrequencyData(data);
            var sum = 0;
            for (var i = 0; i < data.length; i++) { sum += data[i]; }
            var level = sum / data.length;

            if (level > 15) {                 // ~6 % of max — speech onset threshold
                speechDetected = true;
                if (silenceTimer) {
                    clearTimeout(silenceTimer);
                    silenceTimer = null;
                }
            } else if (speechDetected && !silenceTimer) {
                // Silence started after speech — begin countdown.
                silenceTimer = setTimeout(function() {
                    silenceTimer = null;
                    if (mediaRecorder && mediaRecorder.state === 'recording') {
                        mediaRecorder.stop();
                    }
                }, 750); // was 1500ms — halved for faster response
            }
            vadFrame = requestAnimationFrame(checkLevel);
        };
        vadFrame = requestAnimationFrame(checkLevel);
    };

    /**
     * Record one utterance via MediaRecorder, transcribe via Whisper, and
     * feed the result into processUtterance(). Called instead of startRecognition()
     * on browsers where SpeechRecognition is unavailable (e.g. iOS Chrome).
     */
    startMediaRecording = function() {
        if (!connected || !mediaStream) { return; }

        // Prefer webm; fall back to mp4 (iOS Safari), then let browser choose.
        var mimeType = '';
        if (window.MediaRecorder) {
            if (MediaRecorder.isTypeSupported('audio/webm')) {
                mimeType = 'audio/webm';
            } else if (MediaRecorder.isTypeSupported('audio/mp4')) {
                mimeType = 'audio/mp4';
            }
        }

        recordingChunks = [];
        speechDetected  = false;

        try {
            mediaRecorder = mimeType
                ? new MediaRecorder(mediaStream, {mimeType: mimeType})
                : new MediaRecorder(mediaStream);
        } catch (e) {
            if (onErrorCb) { onErrorCb('Audio recording is not supported in this browser.'); }
            return;
        }

        mediaRecorder.ondataavailable = function(e) {
            if (e.data && e.data.size > 0) {
                recordingChunks.push(e.data);
            }
        };

        mediaRecorder.onstop = function() {
            stopVAD();
            if (!connected) { return; }
            if (!speechDetected || !recordingChunks.length) {
                // Nothing spoken — wait then restart listening.
                scheduleRecognitionRestart();
                return;
            }

            var blobMime = (mediaRecorder && mediaRecorder.mimeType) || 'audio/webm';
            var blob = new Blob(recordingChunks, {type: blobMime});
            recordingChunks = [];

            var formData = new FormData();
            formData.append('audio',    blob, 'audio.' + getExtFromMime(blobMime));
            formData.append('sesskey',  cfg.sessKey  || '');
            formData.append('courseid', cfg.courseId || 0);
            if (cfg.lang) {
                // Send ISO 639-1 code ('en', not 'en-US').
                formData.append('lang', cfg.lang.split('-')[0]);
            }

            setState('connecting'); // "thinking" spinner

            fetch(transcribeUrl, {method: 'POST', body: formData})
                .then(function(r) { return r.json(); })
                .then(function(data) {
                    if (!connected) { return; }
                    if (data.error || !data.text || !data.text.trim()) {
                        setState('idle');
                        scheduleRecognitionRestart();
                        return;
                    }
                    processUtterance(data.text.trim());
                })
                .catch(function() {
                    if (!connected) { return; }
                    setState('idle');
                    scheduleRecognitionRestart();
                });
        };

        mediaRecorder.start(250); // collect chunks every 250 ms
        setState('listening');
        startVAD();
    };

    // ── Speech recognition ────────────────────────────────────────────────────

    /**
     * Create and start a SpeechRecognition instance.
     * On final result, feeds utterance to processUtterance().
     * Does NOT auto-restart on end — restart is scheduled by TTS onended.
     */
    var startRecognition = function() {
        var SR = window.SpeechRecognition || window.webkitSpeechRecognition;
        if (!SR) {
            if (onErrorCb) {
                onErrorCb('Speech recognition is not supported in this browser. Please try Chrome or Edge.');
            }
            return;
        }

        recognition = new SR();
        recognition.continuous = false;
        recognition.interimResults = true;
        recognition.lang = cfg.lang || 'en-US';

        recognition.onstart = function() {
            if (connected) {
                setState('listening');
            }
        };

        recognition.onresult = function(event) {
            var finalText = '';
            for (var i = event.resultIndex; i < event.results.length; i++) {
                if (event.results[i].isFinal) {
                    finalText += event.results[i][0].transcript;
                }
            }
            if (finalText.trim()) {
                recognition.stop();
                processUtterance(finalText.trim());
            }
        };

        recognition.onend = function() {
            // Intentionally empty — restart is handled by TTS onended
            // or processUtterance onDone to prevent double-start.
        };

        recognition.onerror = function(event) {
            // Ignore non-fatal errors.
            if (event.error === 'no-speech' || event.error === 'aborted') {
                return;
            }
            if (onErrorCb) {
                onErrorCb('Speech recognition error: ' + event.error);
            }
        };

        try { recognition.start(); } catch (e) { /**/ }
    };

    // ── Public API ────────────────────────────────────────────────────────────

    /**
     * Connect and start a voice session.
     *
     * AudioContext is created immediately (iOS/WKWebView require it within
     * the user-gesture call stack; by the time async callbacks fire it's too late).
     *
     * @param {string}   instructions  System instructions (accepted for API parity; not sent to SSE)
     * @param {string}   voice         TTS voice identifier (e.g. 'shimmer')
     * @param {Object}   callbacks     { onTranscript, onStateChange, onError }
     * @param {Object}   config        { courseId, sessKey, sseUrl, lang }
     */
    var connect = function(instructions, voice, callbacks, config) {
        if (connected) {
            disconnect();
        }

        onTranscriptCb  = callbacks.onTranscript   || null;
        onStateChangeCb = callbacks.onStateChange  || null;
        onErrorCb       = callbacks.onError        || null;
        onSuggestionsCb = callbacks.onSuggestions  || null;

        cfg = {
            courseId: config.courseId || 0,
            sessKey:  config.sessKey  || '',
            sseUrl:   config.sseUrl   || '',
            lang:     config.lang     || 'en-US',
            voice:    voice || 'shimmer',
        };

        // Derive TTS URL from SSE URL.
        ttsUrl = cfg.sseUrl.replace(/\/sse\.php(\?.*)?$/, '/tts.php');

        // Create AudioContext synchronously — iOS requires this within the user gesture.
        var AudioContextClass = window.AudioContext || window.webkitAudioContext;
        if (AudioContextClass) {
            try {
                audioCtx = new AudioContextClass();
                if (audioCtx.state === 'suspended') {
                    audioCtx.resume().catch(function() {/**/});
                }
            } catch (e) {
                audioCtx = null;
            }
        }

        if (!audioCtx) {
            if (onErrorCb) {
                onErrorCb('Audio playback is not available in this browser.');
            }
            return;
        }

        // Determine STT method: Web Speech API preferred; MediaRecorder + Whisper fallback
        // for browsers where SpeechRecognition is unavailable (e.g. iOS Chrome/WKWebView).
        var hasSR = !!(window.SpeechRecognition || window.webkitSpeechRecognition);
        var hasMR = !!(window.MediaRecorder && navigator.mediaDevices &&
                       navigator.mediaDevices.getUserMedia);

        if (!hasSR && !hasMR) {
            audioCtx.close().catch(function() {/**/});
            audioCtx = null;
            if (onErrorCb) {
                onErrorCb('Speech input is not supported in this browser.');
            }
            return;
        }

        useMediaRecorder = !hasSR;
        connected = true;
        setState('connecting');
        transcribeUrl = cfg.sseUrl.replace(/\/sse\.php(\?.*)?$/, '/transcribe.php');

        if (useMediaRecorder) {
            // getUserMedia must be initiated within the user-gesture call stack (iOS requirement).
            navigator.mediaDevices.getUserMedia({audio: true})
                .then(function(stream) {
                    if (!connected) {
                        stream.getTracks().forEach(function(t) { t.stop(); });
                        return;
                    }
                    mediaStream = stream;
                    if (config.greeting) {
                        if (onTranscriptCb) { onTranscriptCb('assistant', config.greeting); }
                        ttsQueue.push(config.greeting);
                        processTtsQueue();
                    } else {
                        startMediaRecording();
                    }
                })
                .catch(function() {
                    disconnect();
                    if (onErrorCb) {
                        onErrorCb('Microphone access denied. Please allow microphone access to use voice chat.');
                    }
                });
        } else {
            // Web Speech API path — pre-request mic permission so the browser prompt
            // appears before SpeechRecognition.start(). Without this, on first use the
            // recognition instance may error out while the permission prompt is shown,
            // and the mic never activates. We request getUserMedia, then release the
            // stream immediately (SpeechRecognition manages its own stream internally).
            var micPreRequest = (navigator.mediaDevices && navigator.mediaDevices.getUserMedia)
                ? navigator.mediaDevices.getUserMedia({audio: true})
                : Promise.resolve(null);
            micPreRequest.then(function(stream) {
                if (stream) {
                    stream.getTracks().forEach(function(t) { t.stop(); });
                }
                if (!connected) { return; }
                if (config.greeting) {
                    if (onTranscriptCb) { onTranscriptCb('assistant', config.greeting); }
                    ttsQueue.push(config.greeting);
                    processTtsQueue();
                } else {
                    startRecognition();
                }
            }).catch(function() {
                disconnect();
                if (onErrorCb) {
                    onErrorCb('Microphone access denied. Please allow microphone access to use voice chat.');
                }
            });
        }
    };

    /**
     * Disconnect, stop all audio/recognition, and clean up resources.
     */
    var disconnect = function() {
        connected = false;

        // Stop recognition.
        if (recognition) {
            try { recognition.abort(); } catch (e) { /**/ }
            recognition = null;
        }

        // Stop MediaRecorder and mic stream (MediaRecorder mode).
        if (mediaRecorder && mediaRecorder.state !== 'inactive') {
            try { mediaRecorder.stop(); } catch (e) { /**/ }
        }
        mediaRecorder  = null;
        recordingChunks = [];
        if (mediaStream) {
            mediaStream.getTracks().forEach(function(t) { t.stop(); });
            mediaStream = null;
        }
        stopVAD();
        useMediaRecorder = false;

        // Clear restart timer.
        if (restartTimer) {
            clearTimeout(restartTimer);
            restartTimer = null;
        }

        // Stop TTS and animation.
        interruptTts();

        // Cancel in-flight SSE.
        if (sseController) {
            try { sseController.abort(); } catch (e) { /**/ }
            sseController = null;
        }

        // Tear down audio graph.
        if (analyser) {
            try { analyser.disconnect(); } catch (e) { /**/ }
            analyser = null;
        }
        if (audioCtx) {
            audioCtx.close().catch(function() {/**/});
            audioCtx = null;
        }

        sentenceBuffer = '';
        ttsQueue = [];
        isTtsBusy = false;

        setState('disconnected');
    };

    /**
     * Whether a session is currently active.
     * @returns {boolean}
     */
    var isConnected = function() {
        return connected;
    };

    /**
     * Send typed text into the active voice session (processed as if spoken).
     * @param {string} text
     */
    var sendText = function(text) {
        if (!connected || !text) { return; }
        processUtterance(text);
    };

    return {
        connect:          connect,
        disconnect:       disconnect,
        isConnected:      isConnected,
        sendText:         sendText,
        ELL_INSTRUCTIONS: ELL_INSTRUCTIONS,
    };
});
