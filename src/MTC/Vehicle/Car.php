<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 10:53
 */

namespace MTC\Vehicle;

class Car implements VehicleInterface
{
    private $door;
    private $color;
    private $trunkHeight = 0.5;
    private $trunkWidht = 0.5;
    private $trunkDepth = 0.5;

    private $brand = 'venturi';


    /**
     * Car constructor.
     * @param int $door
     * @param string $color
     */
    public function __construct($door = 4, $color = 'red')
    {
        $this->door = $door;
        $this->color = $color;
    }

    /**
     * @param string $color
     */
    public function paint($color)
    {
        if(!in_array($color,['grey','yellow','blue','green','black','white']))
            throw new \Exception('Unknown Color');

        $this->color = $color;
    }

    /**
     * return the available volume
     * @return float
     */
    public function availableVolume()
    {
        return $this->trunkHeight * $this->trunkDepth * $this->trunkWidht;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return ucfirst($this->brand);
    }

    /**
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = ucfirst($brand);
    }

    /**
     * @return int
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * @param int $door
     */
    public function setDoor($door)
    {
        $this->door = $door;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return float
     */
    public function getTrunkHeight()
    {
        return $this->trunkHeight;
    }

    /**
     * @param float $trunkHeight
     */
    public function setTrunkHeight($trunkHeight)
    {
        $this->trunkHeight = $trunkHeight;
    }

    /**
     * @return float
     */
    public function getTrunkWidht()
    {
        return $this->trunkWidht;
    }

    /**
     * @param float $trunkWidht
     */
    public function setTrunkWidht($trunkWidht)
    {
        $this->trunkWidht = $trunkWidht;
    }

    /**
     * @return float
     */
    public function getTrunkDepth()
    {
        return $this->trunkDepth;
    }

    /**
     * @param float $trunkDepth
     */
    public function setTrunkDepth($trunkDepth)
    {
        $this->trunkDepth = $trunkDepth;
    }


    public function camouflage($color, $brand)
    {
        $this->color = $color;
        $this->setBrand($brand);
    }



}
