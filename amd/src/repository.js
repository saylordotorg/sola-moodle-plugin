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

define(['core/ajax'], function(Ajax) {

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

    return {
        sendMessage: sendMessage,
        getHistory: getHistory,
        clearHistory: clearHistory,
        getConfig: getConfig,
        updateStudyPlan: updateStudyPlan,
        getStudyPlan: getStudyPlan,
        updateReminderPreferences: updateReminderPreferences,
        getReminderPreferences: getReminderPreferences,
        dismissIntro: dismissIntro,
        generateQuiz: generateQuiz,
    };
});
