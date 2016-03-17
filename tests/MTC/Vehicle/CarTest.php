<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/03/16
 * Time: 10:21
 */

use MTC\Vehicle\Car;

class CarTest extends PHPUnit_Framework_TestCase
{
    public function testSetBrand()
    {
        /*
         * si on veut que $car->getBrand() renvoie une valeur avec la premiere lettre en minuscule
         * car la méthode renvoie tjrs un Ucfirst
         * sans modifier le code, on va devoir utiliser un mock
         */
        $car = new Car();
        $car->setBrand('ucfirst');
        $this->assertEquals('Ucfirst', $car->getBrand());
    }

    public function testGetBrandLowerCase()
    {
        /*
         * fabrique moi une classe car avec une méthode getBrand que je vais modifier
         */
        $car = $this->getMockBuilder(Car::class)
            ->setMethods(['getBrand'])
            ->getMock();
        $car->method('getBrand')->willReturn('lowercase');
        $this->assertEquals('lowercase', $car->getBrand());
    }

    public function testCamouflage()
    {
        $car = $this->getMockBuilder(Car::class)
            ->setMethods(['setBrand'])
            ->getMock();
        /*
         * on veut verifier que la méthode setBrand et bien appeler une fois
         * donc on creer un mock le vérifie
         */
        $car->expects($this->once())->method('setBrand')->with('toyota');
        $car->camouflage('green','toyota');
    }

    public function testPaintWithBadColor()
    {
        $this->expectException(\Exception::class);
        $car = new Car();
        $car->paint('grey');
        $this->assertEquals('grey', $car->getColor());
    }

    public function testPaintWithGoodColor()
    {
        $this->expectException(\Exception::class);
        $car = new Car();
        $car->paint('blue');
        $this->assertEquals('blue', $car->getColor());
    }

    public function testAvailableVolume()
    {
        $car = new Car();
        $car->setTrunkDepth(10);
        $car->setTrunkWidht(10);
        $car->setTrunkHeight(10);
        $this->assertEquals(1000,$car->availableVolume());
    }



}
