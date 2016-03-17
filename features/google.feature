@ui
Feature: Google

#  Scenario: Homepage
#    Given I am on the homepage
#    Then I should see "Recherche google"
#
#  @javascript
#  Scenario: Search
#    Given I am on the homepage
#    When I fill in "q" with "Maltem"
#    And I wait for 1 seconds
#    Then I should see "Maltem Consulting Group"
#
#  @javascript
#  Scenario: Click
#    Given I am on the homepage
#    When I fill in "q" with "Maltem"
#    And I wait for 1 seconds
#    And I follow "Maltem Consulting Group"
#    Then I should see "Maltem Consulting Group"

  @javascript
  Scenario: facebook
    Given I am on the homepage
    When I fill in "q" with "twitter"
    And I wait for 1 seconds
    And I follow "Twitter"
    And I wait for 1 seconds
    When I fill in "signin-email" with "samokiss@hotmail.com"
    When I fill in "signin-password" with "fmftsr90mtl"
    And I press "submit btn primary-btn flex-table-btn js-submit"
#    And I follow "Samuel Gomis"
#    And I wait for 1 seconds
#    When I fill in "_1mf _1mj" with "Hello"
    Then I should see "Twitter"