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

/**
 * Manages conversation starter chip configuration (global + per-course).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_ai_course_assistant;

defined('MOODLE_INTERNAL') || die();

class starter_manager {

    /** Config key for global custom starters. */
    const CONFIG_KEY = 'custom_starters';

    /** Config key prefix for per-course overrides. */
    const COURSE_PREFIX = 'starters_course_';

    /** Available icon identifiers mapped to SVG markup. */
    const ICONS = [
        'book'       => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.95 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/></svg>',
        'lightning'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M7 2v11h3v9l7-12h-4l4-8z"/></svg>',
        'calendar'   => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M20 3h-1V1h-2v2H7V1H5v2H4C2.9 5 2 5.9 2 7v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 18H4V10h16v11zm0-13H4V7h16v1z"/></svg>',
        'chat'       => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"/></svg>',
        'refresh'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6 0 1.01-.25 1.97-.7 2.8l1.46 1.46A7.93 7.93 0 0 0 20 12c0-4.42-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6 0-1.01.25-1.97.7-2.8L5.24 7.74A7.93 7.93 0 0 0 4 12c0 4.42 3.58 8 8 8v3l4-4-4-4v3z"/></svg>',
        'mic'        => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 14a3 3 0 0 0 3-3V5a3 3 0 0 0-6 0v6a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.93V21h2v-3.07A7 7 0 0 0 19 11h-2z"/></svg>',
        'speaker'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3A4.5 4.5 0 0 0 14 7.97v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/></svg>',
        'lightbulb'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z"/></svg>',
        'star'       => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>',
        'graduation' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3 1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>',
        'pencil'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>',
        'compass'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-5.5-2.5l7.51-3.49L17.5 6.5 9.99 9.99 6.5 17.5zm5.5-6.6c.61 0 1.1.49 1.1 1.1s-.49 1.1-1.1 1.1-1.1-.49-1.1-1.1.49-1.1 1.1-1.1z"/></svg>',
        'brain'      => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 2a2 2 0 0 1 2 2c0 .74-.4 1.39-1 1.73V7h1a7 7 0 0 1 7 7H4a7 7 0 0 1 7-7h1V5.73A2 2 0 0 1 10 4a2 2 0 0 1 2-2M4 15h16v1a7 7 0 0 1-7 7H11a7 7 0 0 1-7-7v-1m3 2v1a4 4 0 0 0 4 4h2a4 4 0 0 0 4-4v-1H7z"/></svg>',
        'target'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10 10-4.49 10-10S17.51 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>',
        'search'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>',
        'heart'      => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>',
        'rocket'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 2.5c0 0-5 4-5 11.5 0 2.5.5 4 1.5 5.5L10 21l2-3 2 3 1.5-1.5C16.5 18 17 16.5 17 14c0-7.5-5-11.5-5-11.5zm0 11a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM5 17.5c-.3 1.5-.5 2.5-.5 4h3c0-1.5-.2-2.5-.5-4H5zm12 0c-.3 1.5-.5 2.5-.5 4h3c0-1.5-.2-2.5-.5-4h-2z"/></svg>',
    ];

    /**
     * Return the built-in default starters.
     *
     * @return array
     */
    public static function get_defaults(): array {
        return [
            [
                'key'         => 'help-page',
                'name'        => 'Explain This Page',
                'description' => 'Explains key concepts from the current lesson page',
                'prompt'      => 'Help me understand {page}. What are the key concepts, and can you explain them with examples?',
                'icon'        => 'book',
                'type'        => 'prompt',
                'enabled'     => true,
                'sort_order'  => 1,
                'builtin'     => true,
                'conditional' => '',
            ],
            [
                'key'         => 'quiz',
                'name'        => 'Quiz Me',
                'description' => 'Generates a practice quiz on the current material',
                'prompt'      => '',
                'icon'        => 'lightning',
                'type'        => 'quiz',
                'enabled'     => true,
                'sort_order'  => 2,
                'builtin'     => true,
                'conditional' => '',
            ],
            // 'Ask Anything' removed — redundant with typing directly.
            // 'Review & Practice' removed — confusing overlap with 'Quiz Me On This'.
            [
                'key'         => 'study-plan',
                'name'        => 'Study Plan',
                'description' => 'Creates a focused study session plan',
                'prompt'      => "I'd like to plan my current study session. Please ask me: (1) what I want to accomplish today, and (2) how much time I have available. If we've discussed a study plan before, build on it.",
                'icon'        => 'calendar',
                'type'        => 'prompt',
                'enabled'     => true,
                'sort_order'  => 3,
                'builtin'     => true,
                'conditional' => '',
            ],
            [
                'key'         => 'ai-project-coach',
                'name'        => 'AI Project Coach',
                'description' => 'Guided coaching for course projects and assignments',
                'prompt'      => "I'd like help with a project or assignment for this course. Can you coach me through planning, structuring, and completing it? Ask me what I'm working on first.",
                'icon'        => 'rocket',
                'type'        => 'prompt',
                'enabled'     => true,
                'sort_order'  => 4,
                'builtin'     => true,
                'conditional' => '',
            ],
            // v4.0 / M2: Adaptive next-best-action. Only shown when mastery is on
            // for the course. Prompt is intentionally short — the system prompt's
            // mastery snapshot (built by objective_manager::build_prompt_injection)
            // already gives the assistant per-objective state and prereq gaps,
            // so the assistant can answer naturally without reciting the data.
            [
                'key'         => 'focus-next',
                'name'        => 'What should I focus on?',
                'description' => 'Personalized next-step suggestions based on your objective progress',
                'prompt'      => "Based on my current progress on this course's objectives, what are the two or three things I should focus on next? Suggest specific activities — review a concept, take a short quiz, work a problem — and link to the most relevant module for each. Keep it short and concrete; no tables or percentages.",
                'icon'        => 'target',
                'type'        => 'prompt',
                'enabled'     => true,
                'sort_order'  => 5,
                'builtin'     => true,
                'conditional' => 'mastery',
            ],
            [
                'key'         => 'ell-practice',
                'name'        => 'Conversation Practice',
                'description' => 'Voice conversation practice via SSE + TTS',
                'prompt'      => '',
                'icon'        => 'mic',
                'type'        => 'voice',
                'enabled'     => false,
                'sort_order'  => 5,
                'builtin'     => true,
                'conditional' => 'tts',
            ],
            [
                'key'         => 'ell-pronunciation',
                'name'        => 'Pronunciation Practice',
                'description' => 'Phoneme-level feedback via OpenAI Realtime',
                'prompt'      => '',
                'icon'        => 'speaker',
                'type'        => 'pronunciation',
                'enabled'     => false,
                'sort_order'  => 6,
                'builtin'     => true,
                'conditional' => 'realtime',
            ],
        ];
    }

    /**
     * Get icon SVG markup for a given icon key.
     *
     * @param string $key Icon identifier
     * @return string SVG markup or empty string
     */
    public static function get_icon_svg(string $key): string {
        return self::ICONS[$key] ?? '';
    }

    /**
     * Get all available icon keys.
     *
     * @return array
     */
    public static function get_icon_keys(): array {
        return array_keys(self::ICONS);
    }

    /**
     * Get the globally configured starters (custom overrides merged onto defaults).
     *
     * @return array
     */
    public static function get_global_starters(): array {
        $json = get_config('local_ai_course_assistant', self::CONFIG_KEY);
        if (!$json) {
            return self::get_defaults();
        }
        $saved = json_decode($json, true);
        if (!is_array($saved) || empty($saved)) {
            return self::get_defaults();
        }
        // v4.0 / M2: surface any newly added default starters that the saved
        // config does not yet know about (e.g. focus-next added in v4.0). New
        // builtin starters land at the end of the list with their default
        // enabled state and conditional flag preserved.
        $savedkeys = [];
        foreach ($saved as $s) {
            if (!empty($s['key'])) {
                $savedkeys[$s['key']] = true;
            }
        }
        $maxorder = 0;
        foreach ($saved as $s) {
            if (isset($s['sort_order']) && (int) $s['sort_order'] > $maxorder) {
                $maxorder = (int) $s['sort_order'];
            }
        }
        foreach (self::get_defaults() as $d) {
            if (empty($d['key']) || empty($d['builtin'])) {
                continue;
            }
            if (isset($savedkeys[$d['key']])) {
                continue;
            }
            $d['sort_order'] = ++$maxorder;
            $saved[] = $d;
        }
        return $saved;
    }

    /**
     * Save global starters configuration.
     *
     * @param array $starters Array of starter definitions
     */
    public static function save_global_starters(array $starters): void {
        // Re-index and clean.
        $clean = [];
        $order = 1;
        foreach ($starters as $s) {
            if (empty($s['key']) || empty($s['name'])) {
                continue;
            }
            $clean[] = [
                'key'         => clean_param($s['key'], PARAM_ALPHANUMEXT),
                'name'        => clean_param($s['name'], PARAM_TEXT),
                'description' => clean_param($s['description'] ?? '', PARAM_TEXT),
                'prompt'      => $s['prompt'] ?? '',
                'icon'        => isset(self::ICONS[$s['icon'] ?? '']) ? $s['icon'] : 'chat',
                'type'        => in_array($s['type'] ?? 'prompt', ['prompt', 'quiz', 'voice', 'pronunciation'])
                                    ? $s['type'] : 'prompt',
                'enabled'     => !empty($s['enabled']),
                'sort_order'  => $order++,
                'builtin'     => !empty($s['builtin']),
                'conditional' => clean_param($s['conditional'] ?? '', PARAM_ALPHANUMEXT),
            ];
        }
        set_config(self::CONFIG_KEY, json_encode($clean), 'local_ai_course_assistant');
    }

    /**
     * Get starters for a specific course, applying per-course enable/disable overrides.
     *
     * @param int  $courseid
     * @param bool $hastts       Whether TTS is available
     * @param bool $hasrealtime  Whether Realtime is available
     * @return array Starters ready for template rendering (filtered + enriched with icon_svg)
     */
    public static function get_effective_starters(int $courseid, bool $hastts = false, bool $hasrealtime = false): array {
        $starters = self::get_global_starters();

        // Per-course enable/disable overrides.
        $courseoverrides = get_config('local_ai_course_assistant', self::COURSE_PREFIX . $courseid);
        $overrides = $courseoverrides ? json_decode($courseoverrides, true) : null;

        $result = [];
        foreach ($starters as $s) {
            // Skip disabled starters.
            if (empty($s['enabled'])) {
                continue;
            }

            // Per-course override: if key is explicitly disabled, skip.
            if (is_array($overrides) && isset($overrides[$s['key']]) && !$overrides[$s['key']]) {
                continue;
            }

            // Filter by conditional flags.
            $cond = $s['conditional'] ?? '';
            if ($cond === 'tts' && !$hastts) {
                continue;
            }
            if ($cond === 'realtime' && !$hasrealtime) {
                continue;
            }
            // v4.0 / M2: 'mastery' conditional — only show when mastery is
            // enabled for this course AND at least one objective exists, so
            // the focus-next starter does not appear in courses that have
            // never set up objectives.
            if ($cond === 'mastery') {
                if (!objective_manager::is_enabled_for_course($courseid)) {
                    continue;
                }
                if (empty(objective_manager::list_for_course($courseid))) {
                    continue;
                }
            }

            // Enrich with icon SVG for template rendering.
            $s['icon_svg'] = self::get_icon_svg($s['icon'] ?? 'chat');

            $result[] = $s;
        }

        // Sort by sort_order.
        usort($result, function($a, $b) {
            return ($a['sort_order'] ?? 99) <=> ($b['sort_order'] ?? 99);
        });

        return $result;
    }

    /**
     * Save per-course starter overrides (enable/disable map).
     *
     * @param int   $courseid
     * @param array $overrides Associative array: starter_key => bool (enabled)
     */
    public static function save_course_overrides(int $courseid, array $overrides): void {
        set_config(self::COURSE_PREFIX . $courseid, json_encode($overrides), 'local_ai_course_assistant');
    }

    /**
     * Get per-course starter overrides.
     *
     * @param int $courseid
     * @return array|null Associative array or null if no overrides set
     */
    public static function get_course_overrides(int $courseid): ?array {
        $json = get_config('local_ai_course_assistant', self::COURSE_PREFIX . $courseid);
        if (!$json) {
            return null;
        }
        return json_decode($json, true);
    }

    /**
     * Reset global starters to built-in defaults.
     */
    public static function reset_to_defaults(): void {
        set_config(self::CONFIG_KEY, json_encode(self::get_defaults()), 'local_ai_course_assistant');
    }
}
