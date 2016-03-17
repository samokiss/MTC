<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use MTC\Basket;
use MTC\Product;
use MTC\Coupon;

/**
 * Defines application features from the specific context.
 */

class BasketContext implements Context, SnippetAcceptingContext
{
    private $basket;
    /**
     * @Given An empty basket
     */
    public function anEmptyBasket()
    {
        $this->basket = new Basket();
    }

    /**
     * @Then The basket price is :arg1 $
     */
    public function theBasketPriceIs($price)
    {
        if($this->basket->price() != $price)
            throw new \Exception('The basket price should be '. $price .' found '. $this->basket->price());
    }

    /**
     * @Given A product costing :arg1 $ is added to the basket
     */
    public function aProductCostingIsAddedToTheBasket($price)
    {
        $product  = new Product($price);
        $this->basket->add($product);
    }

    /**
     * @Given A basket with :arg1 products
     */
    public function aBasketWithProducts($nbProducts)
    {
        $this->anEmptyBasket();
        for($i = 0; $i < $nbProducts; $i++){
            $this->basket->add(new Product(5));
        }    }

    /**
     * @Given A product is removed from the basket
     */
    public function aProductIsRemovedFromTheBasket()
    {
        $this->basket->remove();
    }

    /**
     * @Then The basket contains :arg1 product
     */
    public function theBasketContainsProduct($nbProducts)
    {
        if ($nbProducts != $this->basket->getNbProducts()){
            throw new \Exception('The basket should contain '
                . $nbProducts
                . ' products found'
                . $this->basket->getNbProducts()
            );
        }
    }

    /**
     * @Given A coupon costing :arg1 $ is added from the basket
     * @param $price
     */
    public function aCouponCostingIsAddedFromTheBasket($price)
    {
        $coupon  = new Coupon($price);
        $this->basket->addCoupon($coupon);
    }

    /**
     * @Then The shipping fee should be :arg1 $
     */
    public function theShippingFeeShouldBe($price)
    {
       // if($this->basket->price() != $price)
       //     throw new \Exception('The Shipping price should be '. $this->basket->shippingFee($price));
    }


}
