<?php
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

namespace local_ai_course_assistant;

use local_ai_course_assistant\validators\credential_leak_validator;
use local_ai_course_assistant\validators\guard;
use local_ai_course_assistant\validators\hallucination_validator;
use local_ai_course_assistant\validators\pii_echo_validator;
use local_ai_course_assistant\validators\second_person_validator;

/**
 * Runtime application of the same validator pipeline that runs at release-
 * gate time (see admin/cli/run_validators.php). Sits in the response path
 * of every assistant turn so a regression in prompt or model can't ship a
 * bad response to a learner without admin opting in.
 *
 * Three modes, controlled by the `validators_runtime_mode` admin setting:
 *  - 'off':      no checks (legacy behaviour, identical to v4.7.x).
 *  - 'annotate': validators run; on fail, append a small visible warning
 *                line to the response so learners and instructors see
 *                that something tripped. Default for v4.8.0.
 *  - 'block':    on fail, replace the response with a safe fallback
 *                message and audit-log the failure.
 *
 * Audit entries are written via {@see audit_logger} so the ops team can
 * tell after the fact how often the runtime guard fired and which
 * validators tripped most.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class runtime_guard {

    /**
     * Apply the runtime validators to an assistant response.
     *
     * @param string $response The model's response text (post-marker scrub).
     * @param array $context Optional: ['input' => string, 'userid' => int,
     *                       'courseid' => int, 'rag_chunks' => string[]]
     * @return string The (possibly modified) response.
     */
    public static function apply(string $response, array $context = []): string {
        $mode = (string) (get_config('local_ai_course_assistant', 'validators_runtime_mode') ?: 'off');
        if ($mode !== 'annotate' && $mode !== 'block') {
            return $response;
        }

        $guard = new guard();
        $guard->add(new pii_echo_validator())
              ->add(new credential_leak_validator())
              ->add(new hallucination_validator())
              ->add(new second_person_validator());

        try {
            $results = $guard->check($response, $context);
        } catch (\Throwable $e) {
            // A validator throwing is itself a regression — surface to debug
            // log but do not block the learner's response.
            debugging('runtime_guard: validator threw: ' . $e->getMessage(), DEBUG_DEVELOPER);
            return $response;
        }

        $fails = [];
        foreach ($results as $r) {
            if ($r->blocked()) {
                $fails[] = $r;
            }
        }
        if (empty($fails)) {
            return $response;
        }

        $names = array_map(static function ($r) {
            return $r->validator;
        }, $fails);
        try {
            audit_logger::log(
                'runtime_validator_fail',
                (int) ($context['userid'] ?? 0),
                (int) ($context['courseid'] ?? 0),
                ['validators' => $names, 'mode' => $mode]
            );
        } catch (\Throwable $audite) {
            debugging('runtime_guard audit log failed: ' . $audite->getMessage(), DEBUG_DEVELOPER);
        }

        if ($mode === 'block') {
            return self::safe_fallback($names);
        }

        // 'annotate': append a small warning line so the learner can see
        // and the instructor sees it on review. Plain text — markdown
        // pipeline renders it as italic.
        return rtrim($response) . "\n\n_⚠ Response review: " . implode(', ', $names) . "_";
    }

    /**
     * Compose a safe fallback message that names which validator tripped
     * without leaking the original response. The wording leans general so
     * learners do not feel singled out.
     *
     * @param string[] $validators
     * @return string
     */
    private static function safe_fallback(array $validators): string {
        $brand = branding::short_name();
        $list = implode(', ', $validators);
        return "I generated a response but {$brand}'s safety review held it back ({$list}). "
             . "Could you try rephrasing your question, or ask a course instructor for help?";
    }
}
