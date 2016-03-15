<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 16:41
 */
class MoneyTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeNegate()
    {
        $a = new \MTC\Money(1);

        $b = $a->negate();

        $this->assertEquals(-1, $b->getAmount());
    }

    public function testSetAmout()
    {
        $a = new \MTC\Money(1);
        $a->setAmount(1000);
        $this->assertEquals(1000, $a->getAmount());
    }
}