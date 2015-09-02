Feature: Validate form to draw figures

  Scenario Outline: Validate type of figure
    Given I am on "php.dev"
    When I select <figure> from "type"
    And I click "Create Figures"
    Then I can should see "Let's draw it!"

    Examples:
      | figure |
      | triangle |
      | square |
      | double_triangle |
      | chess_board |