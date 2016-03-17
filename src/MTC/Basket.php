<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/03/16
 * Time: 13:55
 */

namespace MTC;


class Basket
{
    private $products = [];
    private $coupons = [];
    private $fee;

    public function price()
    {
        $price = 0;
        foreach($this->products as $product){
            $price += $product->getPrice();
        }

        foreach($this->coupons as $coupon){
            $price -= $coupon->getPrice();
        }
        return $price;
    }

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function remove()
    {
        array_pop($this->products);
    }

    public function getNbProducts()
    {
        return count($this->products);
    }

    public function addCoupon(Coupon $coupon)
    {
        $this->coupons[] = $coupon;
    }

    public function shippingFee($price)
    {
        if($price >= 500)
            $this->fee = 0;
        else
            $this->fee = 25;
        return $this->fee;

    }



}