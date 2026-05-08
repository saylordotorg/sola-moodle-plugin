@local @local_ai_course_assistant
Feature: AI Course Assistant widget
  As a student
  I want to use the AI tutor chat widget on course pages
  So that I can get help understanding course material

  Background:
    Given the following "courses" exist:
      | fullname     | shortname | format |
      | Test Course  | TC1       | topics |
    And the following "users" exist:
      | username | firstname | lastname | email                |
      | student1 | Student   | One      | student1@example.com |
      | teacher1 | Teacher   | One      | teacher1@example.com |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | student1 | TC1    | student        |
      | teacher1 | TC1    | editingteacher |
    And the following config values are set as admin:
      | enabled             | 1      | local_ai_course_assistant |
      | provider            | claude | local_ai_course_assistant |
      | default_course_mode | all    | local_ai_course_assistant |
    # Pre-grant the two first-run UX gates so the drawer interior is
    # actually reachable in Behat:
    # 1. aica_sola_consent_given — bypasses the GDPR/FERPA consent banner
    #    (position:absolute, inset:0, z-index:20) that intercepts clicks.
    # 2. local_ai_course_assistant_intro_dismissed — bypasses the welcome
    #    panel that adds drawer--welcome and hides starters/messages/input
    #    until the user clicks Continue.
    # Both gates exist for production UX; they're only skipped in the
    # test environment so DOM-level scenarios can interact with the
    # drawer's normal post-onboarding state.
    And the following "user preferences" exist:
      | user     | preference                                  | value |
      | student1 | aica_sola_consent_given                     | 1     |
      | teacher1 | aica_sola_consent_given                     | 1     |
      | student1 | local_ai_course_assistant_intro_dismissed   | 1     |
      | teacher1 | local_ai_course_assistant_intro_dismissed   | 1     |

  Scenario: Student sees chat widget on course page
    Given I log in as "student1"
    When I am on "Test Course" course homepage
    Then "#local-ai-course-assistant-toggle" "css_element" should exist

  @javascript
  Scenario: Student can open and close chat drawer
    Given I log in as "student1"
    And I am on "Test Course" course homepage
    When I click on "#local-ai-course-assistant-toggle" "css_element"
    Then "#local-ai-course-assistant-drawer" "css_element" should be visible
    When I press the escape key
    Then "#local-ai-course-assistant-drawer" "css_element" should not be visible

  @javascript
  Scenario: Drawer renders conversation starter buttons on open
    # The starters overlay is what students see first. Several v5.3 bugs
    # shipped with empty starter labels or a crashing render — this asserts
    # the overlay actually exposes clickable buttons with non-empty text.
    Given I log in as "student1"
    And I am on "Test Course" course homepage
    When I click on "#local-ai-course-assistant-toggle" "css_element"
    Then ".local-ai-course-assistant__starters" "css_element" should be visible
    And ".local-ai-course-assistant__starter" "css_element" should exist

  @javascript
  Scenario: Close button closes the drawer
    # Companion to the escape-key scenario — verifies the X icon in the header
    # actually wires up to the close handler. This was silently broken once
    # when null-guards were added to bindEvents.
    Given I log in as "student1"
    And I am on "Test Course" course homepage
    When I click on "#local-ai-course-assistant-toggle" "css_element"
    Then "#local-ai-course-assistant-drawer" "css_element" should be visible
    When I click on ".local-ai-course-assistant__btn-close" "css_element"
    Then "#local-ai-course-assistant-drawer" "css_element" should not be visible

  @javascript
  Scenario: Sending a message returns a streamed reply from the stub provider
    # The full SSE pipeline: chat.js -> sse.php -> base_provider ->
    # stub_provider -> stream chunks -> DOM. Catches regressions in SSE
    # wiring, message rendering, and the conversation manager that no
    # static check can reach. The v5.3.26 stub provider returns
    # 'Stub assistant reply.' for prompts that don't match a more specific
    # category, so the assertion below is exact.
    Given the following config values are set as admin:
      | provider | stub | local_ai_course_assistant |
      | apikey   | x    | local_ai_course_assistant |
    And I log in as "student1"
    And I am on "Test Course" course homepage
    When I click on "#local-ai-course-assistant-toggle" "css_element"
    And I set the field "Ask a question..." to "Hello tutor"
    And I click on ".local-ai-course-assistant__btn-send" "css_element"
    Then I should see "Stub assistant reply" in the ".local-ai-course-assistant__messages" "css_element"

  Scenario: Chat widget not visible when plugin is disabled
    Given the following config values are set as admin:
      | enabled | 0 | local_ai_course_assistant |
    And I log in as "student1"
    When I am on "Test Course" course homepage
    Then "#local-ai-course-assistant-toggle" "css_element" should not exist

  Scenario: Teacher sees chat widget on course page
    Given I log in as "teacher1"
    When I am on "Test Course" course homepage
    Then "#local-ai-course-assistant-toggle" "css_element" should exist

  Scenario: Chat widget not visible on site homepage
    Given I log in as "student1"
    When I am on site homepage
    Then "#local-ai-course-assistant-toggle" "css_element" should not exist
