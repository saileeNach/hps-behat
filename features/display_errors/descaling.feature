Feature: Descaling


  Background:
    Given I handle coffee grounds
    And I handle water tank
    And I handle beans

  Scenario: Descaling is needed after 500 coffees
    Given the coffee machine is started
    When I take "500" coffees
    #Then a notification about descaling is displayed
