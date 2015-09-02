Feature: Validate form to draw figures

  Scenario: Validate type of figure
    Given I am on "php.dev"
    When I select "triangle" from "type"
    And I click "Create Figures"
    Then I can should see "Let's draw it!"