@core
Feature: Basket
  Permet de tester le bon fonctionnement du panier

  Scenario: An empty basket
    Given An empty basket
    Then The basket price is 0 $

  Scenario: Multiple products are added to the basket
    Given An empty basket
    And A product costing 5 $ is added to the basket
    And A product costing 15 $ is added to the basket
    Then The basket price is 20 $

  Scenario: A product is removed from the basket
    Given A basket with 2 products
    And A product is removed from the basket
    Then The basket contains 1 product

  Scenario: A coupon is added to the basket
    Given An empty basket
    And A product costing 5 $ is added to the basket
    And A product costing 25 $ is added to the basket
    And A coupon costing 5 $ is added from the basket
    Then The basket price is 25 $

  Scenario: Shipping fee is free
    Given An empty basket
    And A product costing 500 $ is added to the basket
    Then The shipping fee should be 0 $

  Scenario: Shipping fee is due
    Given An empty basket
    And A product costing 499 $ is added to the basket
    Then The shipping fee should be 25 $

#  Scenario: Shipping threshold
#    Given An basket costing less than 500 $
#    Then The shipping fee should be 25 $
#
#  Scenario: Shipping threshold
#    Given An basket costing more than 500 $
#    Then The shipping fee should be 0 $