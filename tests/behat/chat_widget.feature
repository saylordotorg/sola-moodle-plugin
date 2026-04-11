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
      | enabled  | 1      | local_ai_course_assistant |
      | provider | claude | local_ai_course_assistant |

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
