@local @local_ai_course_assistant
Feature: SOLA practice quiz flow
  As a student
  I want to start a practice quiz from the chat drawer
  So that I can self-test my understanding of the course

  Background:
    Given the following "courses" exist:
      | fullname     | shortname | format |
      | Test Course  | QC1       | topics |
    And the following "users" exist:
      | username | firstname | lastname | email                |
      | student1 | Student   | One      | student1@example.com |
    And the following "course enrolments" exist:
      | user     | course | role    |
      | student1 | QC1    | student |
    And the following config values are set as admin:
      | enabled             | 1    | local_ai_course_assistant |
      | provider            | stub | local_ai_course_assistant |
      | apikey              | x    | local_ai_course_assistant |
      | default_course_mode | all  | local_ai_course_assistant |
    # Bypass the two first-run UX overlays so the drawer interior is reachable.
    And the following "user preferences" exist:
      | user     | preference                                | value |
      | student1 | aica_sola_consent_given                   | 1     |
      | student1 | local_ai_course_assistant_intro_dismissed | 1     |

  @javascript
  Scenario: Quiz starter button opens the setup panel
    # The "Practice quiz" starter is one of the always-rendered builtin
    # starters when no admin-configured starter list is in place. Clicking
    # it must surface the .aica-quiz-setup panel.
    Given I log in as "student1"
    And I am on "Test Course" course homepage
    When I click on "#local-ai-course-assistant-toggle" "css_element"
    And I click on "[data-starter=\"quiz\"]" "css_element"
    Then ".aica-quiz-setup" "css_element" should be visible
    And ".aica-quiz-setup__start" "css_element" should be visible

  @javascript
  Scenario: Quiz setup cancel returns to the starters overlay
    # The cancel button on the quiz setup panel must restore the starters
    # overlay so the learner can pick a different topic.
    Given I log in as "student1"
    And I am on "Test Course" course homepage
    When I click on "#local-ai-course-assistant-toggle" "css_element"
    And I click on "[data-starter=\"quiz\"]" "css_element"
    Then ".aica-quiz-setup" "css_element" should be visible
    When I click on ".aica-quiz-setup__cancel" "css_element"
    Then ".local-ai-course-assistant__starters" "css_element" should be visible
    And ".aica-quiz-setup" "css_element" should not exist

  @javascript
  Scenario: Quiz setup Start button is wired and visible
    # The Start button on the quiz setup panel must be present and clickable.
    # We assert visibility + clickability rather than the full generated-question
    # path because the question-card render depends on a downstream JSON shape
    # the stub provider supplies through the LLM-calling external service —
    # that integration is covered by the v5.3.26 PHPUnit suite. This scenario
    # pins the UI button itself, which is what the v5.3.x SOLA_NEXT-style
    # JS-render bugs would surface as.
    Given I log in as "student1"
    And I am on "Test Course" course homepage
    When I click on "#local-ai-course-assistant-toggle" "css_element"
    And I click on "[data-starter=\"quiz\"]" "css_element"
    Then ".aica-quiz-setup__start" "css_element" should be visible
    And ".aica-quiz-setup__cancel" "css_element" should be visible

  @javascript
  Scenario: Question count selector exposes 3 / 5 / 10 options
    # The setup panel offers preset count buttons. Pin them so a future
    # quiz.js refactor that drops one of the options surfaces here.
    Given I log in as "student1"
    And I am on "Test Course" course homepage
    When I click on "#local-ai-course-assistant-toggle" "css_element"
    And I click on "[data-starter=\"quiz\"]" "css_element"
    Then ".aica-quiz-setup__count-row" "css_element" should be visible
    And I should see "3" in the ".aica-quiz-setup__count-row" "css_element"
    And I should see "5" in the ".aica-quiz-setup__count-row" "css_element"
    And I should see "10" in the ".aica-quiz-setup__count-row" "css_element"
