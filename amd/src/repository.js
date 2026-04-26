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
 * AJAX repository for AI tutor chat.
 *
 * @module     local_ai_course_assistant/repository
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(['core/ajax', 'core/config'], function(Ajax, Config) {

    /**
     * Upload a student attachment to the server and get back a Moodle draft
     * itemid that can be included in the next SSE chat submission. Uses
     * fetch() directly because the endpoint is a multipart receiver, not a
     * Moodle external function.
     *
     * @param {number} courseid
     * @param {File} file
     * @returns {Promise<{draftitemid:number, filename:string, mime:string, size:number, url:string}>}
     */
    const uploadAttachment = function(courseid, file) {
        const form = new FormData();
        form.append('courseid', String(courseid));
        form.append('sesskey', Config.sesskey);
        form.append('file', file);
        const url = Config.wwwroot + '/local/ai_course_assistant/upload_attachment.php';
        return fetch(url, {
            method: 'POST',
            body: form,
            credentials: 'same-origin',
        }).then(function(resp) {
            return resp.json().then(function(data) {
                if (!resp.ok || data.error) {
                    throw new Error(data.error || ('Upload failed (' + resp.status + ')'));
                }
                return data;
            });
        });
    };

    /**
     * Send a message (non-streaming fallback).
     *
     * @param {number} courseid
     * @param {string} message
     * @returns {Promise}
     */
    const sendMessage = function(courseid, message) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_send_message',
            args: {courseid: courseid, message: message},
        }])[0];
    };

    /**
     * Get conversation history.
     *
     * @param {number} courseid
     * @returns {Promise}
     */
    const getHistory = function(courseid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_get_history',
            args: {courseid: courseid},
        }])[0];
    };

    /**
     * Clear conversation history.
     *
     * @param {number} courseid
     * @returns {Promise}
     */
    const clearHistory = function(courseid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_clear_history',
            args: {courseid: courseid},
        }])[0];
    };

    /**
     * Get client-side config.
     *
     * @param {number} courseid
     * @returns {Promise}
     */
    const getConfig = function(courseid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_get_config',
            args: {courseid: courseid},
        }])[0];
    };

    /**
     * Update or create a study plan.
     *
     * @param {number} courseid
     * @param {number} hoursPerWeek
     * @param {string} preferredDays
     * @param {string} preferredTime
     * @param {string} planData JSON string
     * @returns {Promise}
     */
    const updateStudyPlan = function(courseid, hoursPerWeek, preferredDays, preferredTime, planData) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_update_study_plan',
            args: {
                courseid: courseid,
                hours_per_week: hoursPerWeek,
                preferred_days: preferredDays || '',
                preferred_time: preferredTime || '',
                plan_data: planData || '{}',
            },
        }])[0];
    };

    /**
     * Get the current study plan.
     *
     * @param {number} courseid
     * @returns {Promise}
     */
    const getStudyPlan = function(courseid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_get_study_plan',
            args: {courseid: courseid},
        }])[0];
    };

    /**
     * Update reminder preferences.
     *
     * @param {number} courseid
     * @param {string} channel
     * @param {string} destination
     * @param {string} countryCode
     * @param {string} frequency
     * @param {boolean} enabled
     * @returns {Promise}
     */
    const updateReminderPreferences = function(courseid, channel, destination, countryCode, frequency, enabled) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_update_reminder_preferences',
            args: {
                courseid: courseid,
                channel: channel,
                destination: destination,
                country_code: countryCode || '',
                frequency: frequency || 'daily',
                enabled: enabled !== false,
            },
        }])[0];
    };

    /**
     * Get reminder preferences.
     *
     * @param {number} courseid
     * @returns {Promise}
     */
    const getReminderPreferences = function(courseid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_get_reminder_preferences',
            args: {courseid: courseid},
        }])[0];
    };

    /**
     * Save the user's preferred avatar.
     *
     * @param {string} avatar Avatar identifier (e.g. 'avatar_03')
     * @returns {Promise}
     */
    const saveAvatarPreference = function(avatar) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_save_avatar_preference',
            args: {avatar: avatar},
        }])[0];
    };

    /**
     * Dismiss the intro modal.
     *
     * @returns {Promise}
     */
    const dismissIntro = function() {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_dismiss_intro',
            args: {},
        }])[0];
    };

    /**
     * v4.0 / M3 — Record learner opt-in / opt-out for the weekly mastery
     * digest email on a given course.
     *
     * @param {number} courseid
     * @param {number} optin 1 to opt in, 0 to decline
     * @returns {Promise}
     */
    const setDigestOptin = function(courseid, optin) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_set_digest_optin',
            args: {courseid: courseid, optin: optin ? 1 : 0},
        }])[0];
    };

    /**
     * Generate a practice quiz.
     *
     * @param {number} courseid
     * @param {number} count   Number of questions (3–10)
     * @param {string} topic   Topic string, '__guided__', or ''
     * @param {number} cmid    Current module/page ID (0 if not on a resource page)
     * @returns {Promise}
     */
    const generateQuiz = function(courseid, count, topic, cmid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_generate_quiz',
            args: {
                courseid: courseid,
                count: count || 3,
                topic: topic !== undefined ? topic : '__guided__',
                cmid: cmid || 0,
            },
        }])[0];
    };

    /**
     * Get an ephemeral token for OpenAI Realtime voice mode.
     *
     * @param {number} courseid
     * @returns {Promise}
     */
    const getRealtimeToken = function(courseid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_get_realtime_token',
            args: {courseid: courseid},
        }])[0];
    };

    /**
     * Submit user feedback.
     *
     * @param {number} courseid
     * @param {number} rating      1-5
     * @param {string} comment     Free-text feedback
     * @param {Object} deviceInfo  {browser, os, device, screen_size, user_agent, page_url}
     * @returns {Promise}
     */
    const submitFeedback = function(courseid, rating, comment, deviceInfo) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_submit_feedback',
            args: {
                courseid: courseid,
                rating: rating,
                comment: comment || '',
                browser: (deviceInfo && deviceInfo.browser) || '',
                os: (deviceInfo && deviceInfo.os) || '',
                device: (deviceInfo && deviceInfo.device) || '',
                screen_size: (deviceInfo && deviceInfo.screen_size) || '',
                user_agent: (deviceInfo && deviceInfo.user_agent) || '',
                page_url: (deviceInfo && deviceInfo.page_url) || '',
            },
        }])[0];
    };

    /**
     * Email study session notes to the current user.
     *
     * @param {number} courseid
     * @param {string} notes
     * @returns {Promise}
     */
    const emailStudyNotes = function(courseid, notes) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_email_study_notes',
            args: {courseid: courseid, notes: notes},
        }])[0];
    };

    /**
     * Get the active survey for a course.
     *
     * @param {number} courseid
     * @returns {Promise}
     */
    const getSurvey = function(courseid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_get_survey',
            args: {courseid: courseid},
        }])[0];
    };

    /**
     * Submit survey responses.
     *
     * @param {number} surveyid
     * @param {number} courseid
     * @param {string} answersJson JSON array of {question_index, answer}
     * @returns {Promise}
     */
    const submitSurveyResponse = function(surveyid, courseid, answersJson) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_submit_survey_response',
            args: {surveyid: surveyid, courseid: courseid, answers: answersJson},
        }])[0];
    };

    /**
     * Get the active user testing task set for a course.
     *
     * @param {number} courseid
     * @returns {Promise}
     */
    const getUserTesting = function(courseid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_get_usertesting',
            args: {courseid: courseid},
        }])[0];
    };

    /**
     * Submit a user testing task response.
     *
     * @param {number} tasksetid
     * @param {number} courseid
     * @param {number} taskIndex
     * @param {number} rating
     * @param {string} answer
     * @param {number} messageCount
     * @param {number} sessionMinutes
     * @returns {Promise}
     */
    const submitUserTestingResponse = function(tasksetid, courseid, taskIndex, rating, answer, messageCount, sessionMinutes) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_submit_usertesting_response',
            args: {
                tasksetid: tasksetid,
                courseid: courseid,
                task_index: taskIndex,
                rating: rating || 0,
                answer: answer || '',
                message_count: messageCount || 0,
                session_minutes: sessionMinutes || 0,
            },
        }])[0];
    };

    /**
     * Get the active scoring rubric for a practice session type.
     *
     * @param {number} courseid
     * @param {string} type 'conversation' or 'pronunciation'
     * @returns {Promise}
     */
    const getRubric = function(courseid, type) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_get_rubric',
            args: {courseid: courseid, type: type},
        }])[0];
    };

    /**
     * Fetch the current mastery summary for the caller in a course.
     *
     * @param {number} courseid
     * @returns {Promise<{enabled:boolean, total:number, mastered:number, learning:number, not_started:number, objectives:Array}>}
     */
    const getMasterySummary = function(courseid) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_get_mastery_summary',
            args: {courseid: courseid},
        }])[0];
    };

    /**
     * Record a single mastery attempt from a quiz answer. No-op on the server
     * when mastery isn't enabled for the course, so the client can call
     * unconditionally.
     *
     * @param {number} courseid
     * @param {number} objectiveid
     * @param {boolean} iscorrect
     * @returns {Promise<{recorded:boolean, status:string, score:number}>}
     */
    /**
     * Generate spaced-repetition flashcards from a course module via the
     * configured AI provider, persisting them server-side. v3.9.22.
     *
     * @param {number} courseid
     * @param {number} cmid
     * @param {number} count
     * @returns {Promise<{success:boolean, message:string, cards:Array}>}
     */
    const generateFlashcards = function(courseid, cmid, count) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_generate_flashcards',
            args: {
                courseid: courseid,
                cmid: cmid || 0,
                count: count || 5,
            },
        }])[0];
    };

    const recordObjectiveAttempt = function(courseid, objectiveid, iscorrect) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_record_objective_attempt',
            args: {
                courseid: courseid,
                objectiveid: objectiveid,
                iscorrect: iscorrect ? 1 : 0,
            },
        }])[0];
    };

    /**
     * Save a practice session score.
     *
     * @param {number} courseid
     * @param {number} rubricid
     * @param {string} sessionType
     * @param {string} scoresJson
     * @param {number} overallScore
     * @param {string} aiFeedback
     * @param {number} sessionDuration
     * @returns {Promise}
     */
    const savePracticeScore = function(courseid, rubricid, sessionType, scoresJson, overallScore, aiFeedback, sessionDuration) {
        return Ajax.call([{
            methodname: 'local_ai_course_assistant_save_practice_score',
            args: {
                courseid: courseid,
                rubricid: rubricid,
                session_type: sessionType,
                scores: scoresJson,
                overall_score: overallScore,
                ai_feedback: aiFeedback || '',
                session_duration: sessionDuration || 0,
            },
        }])[0];
    };

    return {
        sendMessage: sendMessage,
        getHistory: getHistory,
        clearHistory: clearHistory,
        getConfig: getConfig,
        uploadAttachment: uploadAttachment,
        updateStudyPlan: updateStudyPlan,
        getStudyPlan: getStudyPlan,
        updateReminderPreferences: updateReminderPreferences,
        getReminderPreferences: getReminderPreferences,
        dismissIntro: dismissIntro,
        setDigestOptin: setDigestOptin,
        generateQuiz: generateQuiz,
        saveAvatarPreference: saveAvatarPreference,
        getRealtimeToken: getRealtimeToken,
        submitFeedback: submitFeedback,
        emailStudyNotes: emailStudyNotes,
        getSurvey: getSurvey,
        submitSurveyResponse: submitSurveyResponse,
        getUserTesting: getUserTesting,
        submitUserTestingResponse: submitUserTestingResponse,
        getRubric: getRubric,
        savePracticeScore: savePracticeScore,
        recordObjectiveAttempt: recordObjectiveAttempt,
        getMasterySummary: getMasterySummary,
        generateFlashcards: generateFlashcards,
    };
});
