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
 * Interactive practice quiz module.
 *
 * @module     local_ai_course_assistant/quiz
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(['core/str'], function(Str) {

    // -------------------------------------------------------------------------
    // Setup panel
    // -------------------------------------------------------------------------

    /**
     * Render the quiz setup panel inside the given container.
     *
     * @param {HTMLElement} container          Element to render into (the drawer)
     * @param {Array}       topics             Array of {name} course section objects
     * @param {Array}       learningObjectives Array of {name} learning objective objects
     * @param {Array}       moduleTitles       Array of {name} module/activity title objects
     * @param {string}      currentPageTitle   Title of the current resource page, or ''
     * @param {Function}    onStart            Called with (count, topic)
     * @param {Function}    onCancel           Called when cancelled
     */
    const showSetupPanel = function(container, topics, learningObjectives, moduleTitles, currentPageTitle, onStart, onCancel) {
        const existing = container.querySelector('.aica-quiz-setup');
        if (existing) {
            existing.remove();
        }

        Str.get_strings([
            {key: 'chat:quiz_setup_title',        component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_questions',           component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic',              component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic_guided',       component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic_default',      component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic_custom',       component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_custom_placeholder', component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_start',              component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_cancel',             component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic_objectives',   component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic_modules',      component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_subtopic_select',    component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic_adaptive',     component: 'local_ai_course_assistant'},
        ]).then(function(strings) {
            const [titleStr, questionsStr, topicStr, guidedStr, defaultStr, customStr,
                   customPlaceholder, startStr, cancelStr,
                   objectivesStr, modulesStr, subTopicStr, adaptiveStr] = strings;

            const panel = document.createElement('div');
            panel.className = 'aica-quiz-setup';

            // Title.
            const title = document.createElement('h3');
            title.className = 'aica-quiz-setup__title';
            title.textContent = titleStr;
            panel.appendChild(title);

            // Count selector.
            const countLabel = document.createElement('p');
            countLabel.className = 'aica-quiz-setup__label';
            countLabel.textContent = questionsStr;
            panel.appendChild(countLabel);

            const countRow = document.createElement('div');
            countRow.className = 'aica-quiz-setup__count-row';
            const counts = [3, 5, 7, 10];
            let selectedCount = 3;

            counts.forEach(function(n) {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'aica-quiz-setup__count-btn' +
                    (n === selectedCount ? ' aica-quiz-setup__count-btn--selected' : '');
                btn.textContent = String(n);
                btn.dataset.count = n;
                btn.addEventListener('click', function() {
                    selectedCount = n;
                    countRow.querySelectorAll('.aica-quiz-setup__count-btn').forEach(function(b) {
                        b.classList.toggle('aica-quiz-setup__count-btn--selected',
                            parseInt(b.dataset.count) === selectedCount);
                    });
                });
                countRow.appendChild(btn);
            });
            panel.appendChild(countRow);

            // Topic selector.
            const topicLabel = document.createElement('p');
            topicLabel.className = 'aica-quiz-setup__label';
            topicLabel.textContent = topicStr;
            panel.appendChild(topicLabel);

            const select = document.createElement('select');
            select.className = 'aica-quiz-setup__topic-select';

            const addOption = function(value, text) {
                const opt = document.createElement('option');
                opt.value = value;
                opt.textContent = text;
                select.appendChild(opt);
            };

            const defaultLabel = currentPageTitle || defaultStr;
            addOption('', defaultLabel);
            addOption('__guided__', guidedStr);

            // Learning objectives category.
            const hasObjectives = Array.isArray(learningObjectives) && learningObjectives.length > 0;
            if (hasObjectives) {
                addOption('__objectives__', objectivesStr);
                // v4.0 / M1: Adaptive mode targets learner's weakest objectives.
                // Only offered when objectives exist; backend falls back to
                // guided mode silently if mastery is off or no weak data exists.
                addOption('__adaptive__', adaptiveStr);
            }

            // Course topic (module/lesson titles).
            const hasModules = Array.isArray(moduleTitles) && moduleTitles.length > 0;
            if (hasModules) {
                addOption('__modules__', modulesStr);
            }

            addOption('__custom__', customStr);
            panel.appendChild(select);

            // Secondary picker for objectives/modules — hidden until parent is selected.
            const subSelect = document.createElement('select');
            subSelect.className = 'aica-quiz-setup__topic-select aica-quiz-setup__sub-select';
            subSelect.style.display = 'none';
            panel.appendChild(subSelect);

            // Custom topic input — hidden until "Custom topic" is selected.
            const customInput = document.createElement('input');
            customInput.type = 'text';
            customInput.className = 'aica-quiz-setup__custom-input';
            customInput.placeholder = customPlaceholder;
            customInput.style.display = 'none';
            panel.appendChild(customInput);

            select.addEventListener('change', function() {
                customInput.style.display = select.value === '__custom__' ? '' : 'none';
                if (select.value === '__custom__') {
                    customInput.focus();
                }

                const isObj = select.value === '__objectives__';
                const isMod = select.value === '__modules__';
                subSelect.style.display = (isObj || isMod) ? '' : 'none';

                if (isObj || isMod) {
                    subSelect.innerHTML = '';
                    const placeholder = document.createElement('option');
                    placeholder.value = '';
                    placeholder.textContent = subTopicStr;
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
            startBtn.textContent = startStr;
            startBtn.addEventListener('click', function() {
                let topicValue;
                if (select.value === '__custom__') {
                    topicValue = customInput.value.trim();
                } else if (select.value === '__objectives__' || select.value === '__modules__') {
                    topicValue = subSelect.value || select.value;
                } else {
                    topicValue = select.value;
                }
                onStart(selectedCount, topicValue);
            });
            panel.appendChild(startBtn);

            // Cancel button.
            const cancelBtn = document.createElement('button');
            cancelBtn.type = 'button';
            cancelBtn.className = 'aica-quiz-setup__cancel';
            cancelBtn.textContent = cancelStr;
            cancelBtn.addEventListener('click', function() {
                onCancel();
            });
            panel.appendChild(cancelBtn);

            container.appendChild(panel);
            return;
        }).catch(function() {
            // Silently fail.
        });
    };

    /**
     * Remove the quiz setup panel.
     *
     * @param {HTMLElement} container
     */
    const hideSetupPanel = function(container) {
        const panel = container.querySelector('.aica-quiz-setup');
        if (panel) {
            panel.remove();
        }
    };

    // -------------------------------------------------------------------------
    // Quiz runner
    // -------------------------------------------------------------------------

    /**
     * Initialise and render a quiz into the given container element.
     *
     * @param {HTMLElement} container   Element to render quiz cards into
     * @param {Array}       questions   Array of question objects from the API
     * @param {string}      topic       Quiz topic label
     * @param {Function}    onFinish    Called with (score, total, topic) on first completion
     */
    const init = function(container, questions, topic, onFinish, onExit, onAnswer) {
        const state = {
            questions: questions,
            currentIndex: 0,
            answers: [],
            done: false,
        };

        const quizEl = document.createElement('div');
        quizEl.className = 'aica-quiz';
        container.appendChild(quizEl);

        const renderCurrent = function() {
            quizEl.innerHTML = '';
            if (state.currentIndex >= state.questions.length) {
                renderSummary(quizEl, state, topic, onFinish, onExit, container);
            } else {
                renderQuestion(quizEl, state, renderCurrent);
            }
        };

        renderCurrent();
    };

    /**
     * Render a single question card.
     *
     * @param {HTMLElement} quizEl
     * @param {Object}      state
     * @param {Function}    onNext
     */
    const renderQuestion = function(quizEl, state, onNext) {
        const q      = state.questions[state.currentIndex];
        const index  = state.currentIndex;
        const total  = state.questions.length;
        let answered = false;

        Str.get_strings([
            {key: 'chat:quiz_correct',  component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_wrong',    component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_next',     component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_finish',   component: 'local_ai_course_assistant'},
        ]).then(function(strings) {
            const [correctStr, wrongStr, nextStr, finishStr] = strings;

            // Progress.
            const progress = document.createElement('p');
            progress.className = 'aica-quiz__progress';
            progress.textContent = 'Question ' + (index + 1) + ' of ' + total;
            quizEl.appendChild(progress);

            // Question text.
            const qText = document.createElement('p');
            qText.className = 'aica-quiz__question';
            qText.textContent = q.question;
            quizEl.appendChild(qText);

            // Choices.
            const choicesEl = document.createElement('div');
            choicesEl.className = 'aica-quiz__choices';

            q.choices.forEach(function(choice) {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'aica-quiz__choice';

                // Text span (left side).
                const textSpan = document.createElement('span');
                textSpan.className = 'aica-quiz__choice-text';
                textSpan.textContent = choice;
                btn.appendChild(textSpan);

                btn.addEventListener('click', function() {
                    if (answered) {
                        return;
                    }
                    answered = true;

                    const chosen = choice.charAt(0);
                    const correct = q.correct;
                    state.answers[index] = chosen;

                    // Fire mastery attempt hook when the question carries an
                    // objective tag. The server silently ignores the call if
                    // mastery is disabled for the course, so we can always emit.
                    if (typeof onAnswer === 'function' && q && q.objectiveid) {
                        try {
                            onAnswer({
                                questionId: q.id || (index + 1),
                                objectiveid: q.objectiveid,
                                iscorrect: chosen === correct,
                            });
                        } catch (e) { /* non-fatal */ }
                    }

                    // Disable all buttons and inject ✓/✗ icons.
                    choicesEl.querySelectorAll('.aica-quiz__choice').forEach(function(b) {
                        b.classList.add('aica-quiz__choice--disabled');
                        b.disabled = true;
                        const letter = b.querySelector('.aica-quiz__choice-text').textContent.charAt(0);
                        const iconSpan = document.createElement('span');
                        iconSpan.className = 'aica-quiz__choice-icon';
                        iconSpan.setAttribute('aria-hidden', 'true');
                        if (letter === correct) {
                            b.classList.add('aica-quiz__choice--correct');
                            iconSpan.textContent = '✓';
                            iconSpan.classList.add('aica-quiz__choice-icon--correct');
                            b.appendChild(iconSpan);
                        } else if (letter === chosen && chosen !== correct) {
                            b.classList.add('aica-quiz__choice--wrong');
                            iconSpan.textContent = '✗';
                            iconSpan.classList.add('aica-quiz__choice-icon--wrong');
                            b.appendChild(iconSpan);
                        }
                    });

                    // Feedback label.
                    const feedback = document.createElement('p');
                    feedback.className = 'aica-quiz__feedback';
                    feedback.textContent = chosen === correct ? correctStr : wrongStr;
                    feedback.classList.add(
                        chosen === correct ? 'aica-quiz__feedback--correct' : 'aica-quiz__feedback--wrong'
                    );
                    quizEl.appendChild(feedback);

                    // Explanation.
                    if (q.explanation) {
                        const explanation = document.createElement('p');
                        explanation.className = 'aica-quiz__explanation';
                        explanation.textContent = q.explanation;
                        quizEl.appendChild(explanation);
                    }

                    // Enable Next/Finish.
                    nextBtn.disabled = false;
                });

                choicesEl.appendChild(btn);
            });
            quizEl.appendChild(choicesEl);

            // Next / Finish button (disabled until answered).
            const navEl = document.createElement('div');
            navEl.className = 'aica-quiz__nav';
            const nextBtn = document.createElement('button');
            nextBtn.type = 'button';
            nextBtn.className = 'aica-quiz__next';
            nextBtn.textContent = index + 1 < total ? nextStr : finishStr;
            nextBtn.disabled = true;
            nextBtn.addEventListener('click', function() {
                state.currentIndex++;
                quizEl.innerHTML = '';
                onNext();
            });
            navEl.appendChild(nextBtn);
            quizEl.appendChild(navEl);
            return;
        }).catch(function() {
            // Silently fail.
        });
    };

    /**
     * Render the final score card with full review and retake option.
     *
     * @param {HTMLElement} quizEl
     * @param {Object}      state
     * @param {string}      topic
     * @param {Function}    onFinish   Called with (score, total, topic) on first completion
     * @param {HTMLElement} container  Parent container (for retake)
     */
    const renderSummary = function(quizEl, state, topic, onFinish, onExit, container) {
        const score = state.answers.filter(function(a, i) {
            return a === state.questions[i].correct;
        }).length;
        const total = state.questions.length;
        const pct   = total > 0 ? (score / total) : 0;

        const encourageKey = pct >= 0.8 ? 'chat:quiz_score_great'
            : pct >= 0.5 ? 'chat:quiz_score_good'
            : 'chat:quiz_score_practice';

        Str.get_strings([
            {key: 'chat:quiz_score',          component: 'local_ai_course_assistant',
             param: {score: score, total: total}},
            {key: encourageKey,               component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_review_heading', component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_retake',         component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_your_answer',    component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_correct_answer', component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_exit',           component: 'local_ai_course_assistant'},
        ]).then(function(strings) {
            const [scoreStr, encourageStr, reviewHeadingStr, retakeStr,
                   yourAnswerStr, correctAnswerStr, exitStr] = strings;

            // Score display.
            const scoreEl = document.createElement('div');
            scoreEl.className = 'aica-quiz__score';
            scoreEl.textContent = scoreStr;
            quizEl.appendChild(scoreEl);

            // Encouraging message.
            const encourageEl = document.createElement('p');
            encourageEl.className = 'aica-quiz__encourage';
            encourageEl.textContent = encourageStr;
            quizEl.appendChild(encourageEl);

            // Review section.
            const reviewEl = document.createElement('div');
            reviewEl.className = 'aica-quiz__review';

            const reviewHeading = document.createElement('p');
            reviewHeading.className = 'aica-quiz__review-heading';
            reviewHeading.textContent = reviewHeadingStr;
            reviewEl.appendChild(reviewHeading);

            state.questions.forEach(function(q, i) {
                const userAnswer = state.answers[i] || '?';
                const correct    = q.correct;
                const isCorrect  = userAnswer === correct;

                const item = document.createElement('div');
                item.className = 'aica-quiz__review-item';

                const qEl = document.createElement('p');
                qEl.className = 'aica-quiz__review-question';
                qEl.textContent = q.question;
                item.appendChild(qEl);

                const userEl = document.createElement('p');
                userEl.className = 'aica-quiz__review-answer ' +
                    (isCorrect ? 'aica-quiz__review-answer--correct' : 'aica-quiz__review-answer--wrong');
                userEl.textContent = (isCorrect ? '✓ ' : '✗ ') + yourAnswerStr + ': ' + userAnswer;
                item.appendChild(userEl);

                if (!isCorrect) {
                    const correctEl = document.createElement('p');
                    correctEl.className = 'aica-quiz__review-answer aica-quiz__review-answer--correct';
                    correctEl.textContent = '✓ ' + correctAnswerStr + ': ' + correct;
                    item.appendChild(correctEl);
                }

                if (q.explanation) {
                    const expEl = document.createElement('p');
                    expEl.className = 'aica-quiz__review-explanation';
                    expEl.textContent = q.explanation;
                    item.appendChild(expEl);
                }

                reviewEl.appendChild(item);
            });
            quizEl.appendChild(reviewEl);

            // Button row.
            const btnRow = document.createElement('div');
            btnRow.className = 'aica-quiz__summary-actions';

            // Retake button.
            const retakeBtn = document.createElement('button');
            retakeBtn.type = 'button';
            retakeBtn.className = 'aica-quiz__retake';
            retakeBtn.textContent = retakeStr;
            retakeBtn.addEventListener('click', function() {
                if (quizEl.parentNode) {
                    quizEl.parentNode.removeChild(quizEl);
                }
                // Reset state and restart with same questions.
                init(container, state.questions, topic, null, onExit);
            });
            btnRow.appendChild(retakeBtn);

            // Exit button.
            const exitBtn = document.createElement('button');
            exitBtn.type = 'button';
            exitBtn.className = 'aica-quiz__exit';
            exitBtn.textContent = exitStr;
            exitBtn.addEventListener('click', function() {
                if (quizEl.parentNode) {
                    quizEl.parentNode.removeChild(quizEl);
                }
                if (typeof onExit === 'function') {
                    onExit();
                }
            });
            btnRow.appendChild(exitBtn);
            quizEl.appendChild(btnRow);

            // Fire onFinish callback (only on first completion — retake passes null).
            if (typeof onFinish === 'function') {
                onFinish(score, total, topic);
            }
            return;
        }).catch(function() {
            // Fallback if strings fail.
            const scoreEl = document.createElement('div');
            scoreEl.className = 'aica-quiz__score';
            scoreEl.textContent = 'Quiz complete! Score: ' + score + '/' + total;
            quizEl.appendChild(scoreEl);
            if (typeof onFinish === 'function') {
                onFinish(score, total, topic);
            }
        });
    };

    // -------------------------------------------------------------------------
    // Topic picker (for conversation starters — no question count)
    // -------------------------------------------------------------------------

    /**
     * Render a topic-picker panel (no question-count row) into the drawer.
     *
     * @param {HTMLElement} container
     * @param {Array}       topics             {name} course section objects
     * @param {Array}       learningObjectives {name} learning objective objects
     * @param {Array}       moduleTitles       {name} module/activity title objects
     * @param {string}      currentPageTitle   Title of the current resource page, or ''
     * @param {string}      titleStr           Panel heading (already translated)
     * @param {string}      actionStr          Action button label (already translated)
     * @param {Function}    onSelect           Called with resolved topic string
     * @param {Function}    onCancel
     */
    const showTopicPanel = function(container, topics, learningObjectives, moduleTitles, currentPageTitle,
                                    titleStr, actionStr, onSelect, onCancel) {
        const existing = container.querySelector('.aica-topic-panel');
        if (existing) {
            existing.remove();
        }

        Str.get_strings([
            {key: 'chat:quiz_topic_default',      component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic_custom',       component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_custom_placeholder', component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic_objectives',   component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_topic_modules',      component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_subtopic_select',    component: 'local_ai_course_assistant'},
            {key: 'chat:quiz_cancel',             component: 'local_ai_course_assistant'},
        ]).then(function(strings) {
            const [defaultStr, customStr, customPlaceholder,
                   objectivesStr, modulesStr, subTopicStr, cancelStr] = strings;

            const panel = document.createElement('div');
            panel.className = 'aica-topic-panel';

            const title = document.createElement('h3');
            title.className = 'aica-quiz-setup__title';
            title.textContent = titleStr;
            panel.appendChild(title);

            const select = document.createElement('select');
            select.className = 'aica-quiz-setup__topic-select';

            const addOption = function(value, text) {
                const opt = document.createElement('option');
                opt.value = value;
                opt.textContent = text;
                select.appendChild(opt);
            };

            // Default first (no AI-guided in topic picker).
            const defaultLabel = currentPageTitle || defaultStr;
            addOption('', defaultLabel);

            if (Array.isArray(learningObjectives) && learningObjectives.length) {
                addOption('__objectives__', objectivesStr);
            }
            if (Array.isArray(moduleTitles) && moduleTitles.length) {
                addOption('__modules__', modulesStr);
            }
            addOption('__custom__', customStr);
            panel.appendChild(select);

            const subSelect = document.createElement('select');
            subSelect.className = 'aica-quiz-setup__topic-select aica-quiz-setup__sub-select';
            subSelect.style.display = 'none';
            panel.appendChild(subSelect);

            const customInput = document.createElement('input');
            customInput.type = 'text';
            customInput.className = 'aica-quiz-setup__custom-input';
            customInput.placeholder = customPlaceholder;
            customInput.style.display = 'none';
            panel.appendChild(customInput);

            select.addEventListener('change', function() {
                customInput.style.display = select.value === '__custom__' ? '' : 'none';
                if (select.value === '__custom__') {
                    customInput.focus();
                }
                const isObj = select.value === '__objectives__';
                const isMod = select.value === '__modules__';
                subSelect.style.display = (isObj || isMod) ? '' : 'none';
                if (isObj || isMod) {
                    subSelect.innerHTML = '';
                    const ph = document.createElement('option');
                    ph.value = '';
                    ph.textContent = subTopicStr;
                    subSelect.appendChild(ph);
                    const items = isObj ? learningObjectives : moduleTitles;
                    items.forEach(function(item) {
                        const opt = document.createElement('option');
                        opt.value = item.name;
                        opt.textContent = item.name;
                        subSelect.appendChild(opt);
                    });
                }
            });

            const actionBtn = document.createElement('button');
            actionBtn.type = 'button';
            actionBtn.className = 'aica-quiz-setup__start';
            actionBtn.textContent = actionStr;
            actionBtn.addEventListener('click', function() {
                let topicValue;
                if (select.value === '__custom__') {
                    topicValue = customInput.value.trim();
                } else if (select.value === '__objectives__' || select.value === '__modules__') {
                    topicValue = subSelect.value || select.value;
                } else {
                    topicValue = select.value;
                }
                onSelect(topicValue);
            });
            panel.appendChild(actionBtn);

            const cancelBtn = document.createElement('button');
            cancelBtn.type = 'button';
            cancelBtn.className = 'aica-quiz-setup__cancel';
            cancelBtn.textContent = cancelStr;
            cancelBtn.addEventListener('click', function() {
                onCancel();
            });
            panel.appendChild(cancelBtn);

            container.appendChild(panel);
            return;
        }).catch(function() { /**/ });
    };

    /**
     * Remove the topic picker panel.
     *
     * @param {HTMLElement} container
     */
    const hideTopicPanel = function(container) {
        const panel = container.querySelector('.aica-topic-panel');
        if (panel) {
            panel.remove();
        }
    };

    return {
        showSetupPanel: showSetupPanel,
        hideSetupPanel: hideSetupPanel,
        init: init,
        showTopicPanel: showTopicPanel,
        hideTopicPanel: hideTopicPanel,
    };
});
