<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/03/16
 * Time: 14:27
 */

namespace MTC;


class Coupon
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

}