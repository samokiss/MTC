<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 16:15
 */

namespace MTC;


class Money
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function negate()
    {
        return new Money(-1 * $this->amount);
    }
}