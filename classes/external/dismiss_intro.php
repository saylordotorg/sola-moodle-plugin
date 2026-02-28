<?php
// This file is part of Moodle - http://moodle.org/

namespace local_ai_course_assistant\external;

use core_external\external_api;
use core_external\external_function_parameters;
use core_external\external_value;

/**
 * External function to dismiss the first-time introduction.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class dismiss_intro extends external_api {

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([]);
    }

    /**
     * Dismiss the introduction.
     *
     * @return array
     */
    public static function execute(): array {
        global $USER;

        self::validate_context(\context_system::instance());

        set_user_preference('local_ai_course_assistant_intro_dismissed', 1);

        return ['success' => true];
    }

    /**
     * Returns description of method result value.
     *
     * @return external_value
     */
    public static function execute_returns(): external_value {
        return new external_value(PARAM_BOOL, 'Success status');
    }
}
