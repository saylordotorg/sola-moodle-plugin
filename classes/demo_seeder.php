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

defined('MOODLE_INTERNAL') || die();

/**
 * Shared testing/demo seeding logic used by both the CLI scripts and the
 * admin page (admin/cli/create_demo_course.php, admin/cli/seed_demo_data.php,
 * demo_admin.php).
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class demo_seeder {

    /**
     * Create a testing course with sections, pages, and a book.
     *
     * @param string $shortname Course shortname.
     * @param string $fullname Course full name.
     * @param int $category Category id to place the course in.
     * @param bool $hidden If true, course is created with visible=0 (hidden from students).
     * @return \stdClass The created course record, or the existing record if shortname already exists.
     */
    public static function create_testing_course(string $shortname, string $fullname, int $category, bool $hidden): \stdClass {
        global $CFG, $DB;
        require_once($CFG->dirroot . '/course/lib.php');
        require_once($CFG->dirroot . '/course/modlib.php');

        $existing = $DB->get_record('course', ['shortname' => $shortname]);
        if ($existing) {
            return $existing;
        }

        // v5.3.1: do not trust the supplied $category. Stock Moodle ships
        // "Miscellaneous" as id=1, but staging and production sites often
        // delete or rename it, which makes a hardcoded category id throw
        // "Can't find data record in database table course_categories".
        // Fall back to whatever Moodle currently considers the default
        // category, which is guaranteed to exist.
        if ($category <= 0 || !$DB->record_exists('course_categories', ['id' => $category])) {
            $category = (int)\core_course_category::get_default()->id;
        }

        $coursedata = (object) [
            'category'      => $category,
            'shortname'     => $shortname,
            'fullname'      => $fullname,
            'summary'       => 'A testing course for the AI Course Assistant. '
                . 'Contains sample pages and a two-chapter book so the assistant '
                . 'has real course content to ground its answers in.',
            'summaryformat' => FORMAT_HTML,
            'format'        => 'topics',
            'numsections'   => 3,
            'startdate'     => time(),
            'visible'       => $hidden ? 0 : 1,
        ];
        $course = create_course($coursedata);

        $sections = self::testing_sections();
        foreach ($sections as $sectionnum => $section) {
            $DB->set_field('course_sections', 'name', $section['name'],
                ['course' => $course->id, 'section' => $sectionnum]);
            foreach ($section['pages'] as $page) {
                $module = new \stdClass();
                $module->course = $course->id;
                $module->section = $sectionnum;
                $module->visible = 1;
                $module->module = $DB->get_field('modules', 'id', ['name' => 'page']);
                $module->modulename = 'page';
                $module->name = $page['name'];
                $module->intro = '';
                $module->introformat = FORMAT_HTML;
                $module->content = $page['content'];
                $module->contentformat = FORMAT_HTML;
                $module->display = 0;
                $module->printheading = 1;
                $module->printintro = 0;
                $module->printlastmodified = 1;
                $module->cmidnumber = '';
                $module->groupmode = 0;
                $module->groupingid = 0;
                add_moduleinfo($module, $course);
            }
        }

        $bookid = $DB->get_field('modules', 'id', ['name' => 'book']);
        if ($bookid) {
            $book = new \stdClass();
            $book->course = $course->id;
            $book->section = 2;
            $book->visible = 1;
            $book->module = $bookid;
            $book->modulename = 'book';
            $book->name = 'Deeper reading: evidence and inference';
            $book->intro = 'A short two-chapter companion to the core concepts section.';
            $book->introformat = FORMAT_HTML;
            $book->numbering = 1;
            $book->navstyle = 2;
            $book->customtitles = 0;
            $book->cmidnumber = '';
            $book->groupmode = 0;
            $book->groupingid = 0;
            $bookmod = add_moduleinfo($book, $course);

            $chapters = [
                ['title' => 'The difference between observation and inference',
                 'content' => '<p>Observation is what you see. Inference is what you think it means. '
                    . 'A single observation can support many inferences. Good scientists hold their '
                    . 'inferences loosely until enough evidence converges.</p>'],
                ['title' => 'How much evidence is enough?',
                 'content' => '<p>There is no universal answer, but three criteria help. First, does the '
                    . 'evidence come from multiple independent sources? Second, is it consistent across time? '
                    . 'Third, have you actively looked for counter-evidence?</p>'],
            ];
            foreach ($chapters as $i => $chapter) {
                $DB->insert_record('book_chapters', (object) [
                    'bookid' => $bookmod->instance,
                    'pagenum' => $i + 1,
                    'subchapter' => 0,
                    'title' => $chapter['title'],
                    'content' => $chapter['content'],
                    'contentformat' => FORMAT_HTML,
                    'hidden' => 0,
                    'timecreated' => time(),
                    'timemodified' => time(),
                    'importsrc' => '',
                ]);
            }
        }

        rebuild_course_cache($course->id);

        return $course;
    }

    /**
     * Seed fake students, conversations, messages, ratings, and feedback for a course.
     *
     * @param int $courseid Target course id.
     * @param int $numusers Number of demo students to create or reuse.
     * @param int $numweeks Spread conversations over this many past weeks.
     * @param bool $clear If true, remove existing demo_student_* users and their data first.
     * @return array ['users' => int, 'conversations' => int, 'messages' => int, 'ratings' => int, 'feedback' => int]
     */
    public static function seed_demo_students(int $courseid, int $numusers, int $numweeks, bool $clear): array {
        global $CFG, $DB;
        require_once($CFG->dirroot . '/user/lib.php');
        require_once($CFG->libdir . '/enrollib.php');

        $course = $DB->get_record('course', ['id' => $courseid], 'id,fullname,shortname', MUST_EXIST);
        $numusers = max(1, $numusers);
        $numweeks = max(1, $numweeks);

        if ($clear) {
            $existing = $DB->get_records_select('user', $DB->sql_like('username', ':pattern'),
                ['pattern' => 'demo_student_%'], '', 'id,username');
            foreach ($existing as $u) {
                $DB->delete_records_select('local_ai_course_assistant_msg_ratings',
                    'messageid IN (SELECT id FROM {local_ai_course_assistant_msgs} WHERE userid = ?)', [$u->id]);
                $DB->delete_records('local_ai_course_assistant_msgs', ['userid' => $u->id]);
                $DB->delete_records('local_ai_course_assistant_convs', ['userid' => $u->id]);
                $DB->delete_records('local_ai_course_assistant_feedback', ['userid' => $u->id]);
                delete_user($u);
            }
        }

        $studentrole = $DB->get_record('role', ['shortname' => 'student'], '*', MUST_EXIST);
        $enrolplugin = enrol_get_plugin('manual');
        $enrolinstance = $DB->get_record('enrol',
            ['courseid' => $courseid, 'enrol' => 'manual'], '*', MUST_EXIST);

        [$firstnames, $lastnames, $topics, $assistantreplies, $providers, $interactiontypes] =
            self::seeder_pools();

        $userids = [];
        for ($i = 1; $i <= $numusers; $i++) {
            $username = 'demo_student_' . str_pad((string) $i, 3, '0', STR_PAD_LEFT);
            $existing = $DB->get_record('user', ['username' => $username]);
            if ($existing) {
                $userids[] = (int) $existing->id;
                continue;
            }

            $u = new \stdClass();
            $u->auth = 'manual';
            $u->confirmed = 1;
            $u->mnethostid = $CFG->mnet_localhost_id;
            $u->username = $username;
            $u->password = hash_internal_user_password('DemoPass123!');
            $u->firstname = $firstnames[array_rand($firstnames)];
            $u->lastname = $lastnames[array_rand($lastnames)];
            $u->email = $username . '@demo.local';
            $u->lang = 'en';
            $u->timecreated = time();
            $u->id = user_create_user($u, false, false);

            $enrolplugin->enrol_user($enrolinstance, $u->id, $studentrole->id);
            $userids[] = (int) $u->id;
        }

        $now = time();
        $windowstart = $now - ($numweeks * 7 * 86400);
        $counts = ['conversations' => 0, 'messages' => 0, 'ratings' => 0, 'feedback' => 0];

        foreach ($userids as $userid) {
            // Skip if this user already has a conversation in this course
            // (the convs table has a unique index on userid+courseid).
            if ($DB->record_exists('local_ai_course_assistant_convs',
                    ['userid' => $userid, 'courseid' => $courseid])) {
                continue;
            }

            $conv = (object) [
                'userid' => $userid,
                'courseid' => $courseid,
                'title' => $topics[array_rand($topics)]['theme'],
                'offtopic_count' => 0,
                'timecreated' => random_int($windowstart, $now - 3600),
                'timemodified' => $now,
            ];
            $conv->id = $DB->insert_record('local_ai_course_assistant_convs', $conv);
            $counts['conversations']++;

            $numexchanges = random_int(4, 12);
            for ($x = 0; $x < $numexchanges; $x++) {
                $topic = $topics[array_rand($topics)];
                $userq = $topic['questions'][array_rand($topic['questions'])];
                $assistantreply = $assistantreplies[array_rand($assistantreplies)];
                $provider = $providers[array_rand($providers)];
                $interaction = $interactiontypes[array_rand($interactiontypes)];
                $msgtime = random_int($conv->timecreated, $now);

                $DB->insert_record('local_ai_course_assistant_msgs', (object) [
                    'conversationid' => $conv->id,
                    'userid' => $userid,
                    'courseid' => $courseid,
                    'role' => 'user',
                    'message' => $userq,
                    'tokens_used' => 0,
                    'prompt_tokens' => null,
                    'completion_tokens' => null,
                    'model_name' => null,
                    'provider' => null,
                    'interaction_type' => $interaction,
                    'cmid' => null,
                    'timecreated' => $msgtime,
                ]);

                $prompttokens = $provider['promptbase'] + random_int(-300, 300);
                $completiontokens = $provider['completionbase'] + random_int(-200, 400);
                $asstmsgid = $DB->insert_record('local_ai_course_assistant_msgs', (object) [
                    'conversationid' => $conv->id,
                    'userid' => $userid,
                    'courseid' => $courseid,
                    'role' => 'assistant',
                    'message' => $assistantreply,
                    'tokens_used' => $prompttokens + $completiontokens,
                    'prompt_tokens' => $prompttokens,
                    'completion_tokens' => $completiontokens,
                    'model_name' => $provider['model'],
                    'provider' => $provider['provider'],
                    'interaction_type' => $interaction,
                    'cmid' => null,
                    'timecreated' => $msgtime + random_int(5, 30),
                ]);
                $counts['messages'] += 2;

                if (random_int(1, 4) === 1) {
                    $rating = (random_int(1, 5) === 1) ? -1 : 1;
                    $DB->insert_record('local_ai_course_assistant_msg_ratings', (object) [
                        'messageid' => $asstmsgid,
                        'userid' => $userid,
                        'courseid' => $courseid,
                        'rating' => $rating,
                        'is_hallucination' => 0,
                        'comment' => null,
                        'timecreated' => $msgtime + 60,
                    ]);
                    $counts['ratings']++;
                }
            }

            if (random_int(1, 5) <= 2) {
                $fcomments = [
                    'This has been really helpful for understanding the harder sections.',
                    'I like that it remembers what I was looking at on the previous page.',
                    'Sometimes the explanations are too long, but overall useful.',
                    'Great for late-night studying when I cannot reach anyone else.',
                    'Wish the voice feature worked on my phone, but the chat is great.',
                ];
                $DB->insert_record('local_ai_course_assistant_feedback', (object) [
                    'userid' => $userid,
                    'courseid' => $courseid,
                    'rating' => random_int(3, 5),
                    'comment' => $fcomments[array_rand($fcomments)],
                    'browser' => 'Chrome',
                    'os' => 'macOS',
                    'device' => 'desktop',
                    'screen_size' => '1440x900',
                    'user_agent' => 'Mozilla/5.0 (demo)',
                    'page_url' => (new \moodle_url('/course/view.php', ['id' => $courseid]))->out(false),
                    'timecreated' => random_int($windowstart, $now),
                ]);
                $counts['feedback']++;
            }
        }

        return [
            'users' => count($userids),
            'conversations' => $counts['conversations'],
            'messages' => $counts['messages'],
            'ratings' => $counts['ratings'],
            'feedback' => $counts['feedback'],
        ];
    }

    /**
     * Sections, pages, and content used by the testing course.
     *
     * @return array
     */
    private static function testing_sections(): array {
        return [
            1 => [
                'name' => 'Getting Started',
                'pages' => [
                    [
                        'name' => 'Welcome and course overview',
                        'content' => '<p>Welcome to the course. Over the next few weeks you will learn '
                            . 'how to think about a topic from multiple perspectives, connect theory to '
                            . 'practice, and build confidence applying what you learn.</p>'
                            . '<p>Each week combines short readings, a practice activity, and a short '
                            . 'check-in quiz. The AI Course Assistant is available on every page if you '
                            . 'get stuck or want a concept explained differently.</p>',
                    ],
                    [
                        'name' => 'How to succeed in this course',
                        'content' => '<p>Three habits predict success:</p><ul>'
                            . '<li>Read actively. Ask yourself what the author is trying to prove.</li>'
                            . '<li>Practice regularly. Even ten minutes a day beats one long cram session.</li>'
                            . '<li>Use the assistant. It knows the course material and can adapt to your level.</li>'
                            . '</ul>',
                    ],
                ],
            ],
            2 => [
                'name' => 'Core Concepts',
                'pages' => [
                    [
                        'name' => 'Foundational terminology',
                        'content' => '<p>Before we go further, let us make sure we share a vocabulary. '
                            . 'Three terms are used throughout this course:</p>'
                            . '<ol><li><strong>Hypothesis.</strong> A testable statement about how something works.</li>'
                            . '<li><strong>Evidence.</strong> Observations that support or challenge a hypothesis.</li>'
                            . '<li><strong>Inference.</strong> A reasoned conclusion drawn from evidence.</li></ol>'
                            . '<p>Keep these distinct in your mind. Conflating them is a common source of errors.</p>',
                    ],
                    [
                        'name' => 'A worked example',
                        'content' => '<p>Imagine we want to know whether a particular study habit improves '
                            . 'retention. We form the hypothesis: "Spaced repetition improves long-term retention '
                            . 'compared to massed practice."</p>'
                            . '<p>We collect evidence by running a two-week study where half the students use '
                            . 'spaced repetition and the other half cram. We measure recall after two weeks.</p>'
                            . '<p>The inference we draw depends on the size and consistency of the difference we observe.</p>',
                    ],
                ],
            ],
            3 => [
                'name' => 'Applying What You Learned',
                'pages' => [
                    [
                        'name' => 'Practice prompts',
                        'content' => '<p>Try these on your own, then ask the assistant to check your reasoning:</p>'
                            . '<ol><li>State a hypothesis about study habits that you believe to be true.</li>'
                            . '<li>List two pieces of evidence that would support it.</li>'
                            . '<li>List one piece of evidence that would challenge it.</li></ol>',
                    ],
                    [
                        'name' => 'Preparing for the final',
                        'content' => '<p>The final covers the three key terms, the worked example, and your '
                            . 'ability to apply them to a new scenario. The assistant can generate unlimited '
                            . 'practice quizzes from this course, so work through several before the final.</p>',
                    ],
                ],
            ],
        ];
    }

    /**
     * Name and message pools used when generating demo conversations.
     *
     * @return array Indexed array: firstnames, lastnames, topics, assistantreplies, providers, interactiontypes
     */
    private static function seeder_pools(): array {
        $firstnames = [
            'Alex', 'Jordan', 'Sam', 'Taylor', 'Morgan', 'Casey', 'Riley', 'Quinn',
            'Avery', 'Harper', 'Rowan', 'Sage', 'Emerson', 'Skylar', 'Reese',
            'Priya', 'Amara', 'Nia', 'Zara', 'Yuki', 'Mei', 'Aya', 'Ines',
            'Mateo', 'Diego', 'Luca', 'Noa', 'Kai', 'Arjun', 'Omar', 'Finn',
        ];
        $lastnames = [
            'Rivera', 'Chen', 'Patel', 'Okafor', 'Santos', 'Nguyen', 'Kim', 'Novak',
            'Abadi', 'Silva', 'Johansson', 'Tanaka', 'Bernal', 'Ali', 'Ward',
            'Mendoza', 'Hassan', 'Park', 'Brooks', 'Singh', 'Dubois', 'Rossi',
        ];
        $topics = [
            ['theme' => 'Getting started', 'questions' => [
                'Where should I start with this course?',
                'Can you give me a study plan for the next two weeks?',
                'How long does this course typically take to complete?',
            ]],
            ['theme' => 'Concept explanation', 'questions' => [
                'Can you explain this section in simpler terms?',
                'What is the main idea I should take away from this unit?',
                'How does this concept connect to the previous chapter?',
            ]],
            ['theme' => 'Practice and application', 'questions' => [
                'Can you quiz me on the last unit?',
                'Give me an example problem similar to the one on this page.',
                'What is a real-world example of this concept?',
            ]],
            ['theme' => 'Exam prep', 'questions' => [
                'What topics are most likely to be on the final exam?',
                'I got a poor grade on the last quiz. What should I review?',
                'Can you make flashcards for the key terms in this unit?',
            ]],
            ['theme' => 'Motivation and study skills', 'questions' => [
                'I am struggling to stay focused. Any suggestions?',
                'How should I schedule my study time around a full-time job?',
                'What is a good way to retain information long term?',
            ]],
        ];
        $assistantreplies = [
            'Great question. The short answer is that this concept builds on the previous unit. Let me break it down step by step.',
            'Here is a concise summary of the key points, followed by a practice question to check your understanding.',
            'That is a common stumbling block. One way to think about it is with an everyday analogy: imagine you are organising a library.',
            'Good instinct to review this. The most important thing to remember is the relationship between these two ideas.',
            'Let me tailor this to what you have covered so far. Based on your progress, I suggest focusing on these three topics first.',
            'I can help with that. Let us start with a quick recap, then I will walk through a worked example.',
        ];
        $providers = [
            ['provider' => 'claude',  'model' => 'claude-opus-4-6',   'promptbase' => 1500, 'completionbase' => 800],
            ['provider' => 'openai',  'model' => 'gpt-4o-mini',       'promptbase' => 1500, 'completionbase' => 700],
            ['provider' => 'gemini',  'model' => 'gemini-2.5-flash',  'promptbase' => 1500, 'completionbase' => 750],
        ];
        $interactiontypes = ['chat', 'chat', 'chat', 'chat', 'voice', 'quiz'];

        return [$firstnames, $lastnames, $topics, $assistantreplies, $providers, $interactiontypes];
    }
}
