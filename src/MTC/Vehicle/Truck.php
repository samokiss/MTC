<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 11:30
 */

namespace MTC\Vehicle;

class Truck extends Car
{
    private $trailerDepth = 10.0;
    private $trailerWidth = 2.0;
    private $trailerHeight = 2.5;

    public function availableVolume()
    {
        return $this->trailerDepth * $this->trailerHeight * $this->trailerWidth;
    }

    /**
     * @return float
     */
    public function getTrailerDepth()
    {
        return $this->trailerDepth;
    }

    /**
     * @param float $trailerDepth
     */
    public function setTrailerDepth($trailerDepth)
    {
        $this->trailerDepth = $trailerDepth;
    }

    /**
     * @return float
     */
    public function getTrailerWidth()
    {
        return $this->trailerWidth;
    }

    /**
     * @param float $trailerWidth
     */
    public function setTrailerWidth($trailerWidth)
    {
        $this->trailerWidth = $trailerWidth;
    }

    /**
     * @return float
     */
    public function getTrailerHeight()
    {
        return $this->trailerHeight;
    }

    /**
     * @param float $trailerHeight
     */
    public function setTrailerHeight($trailerHeight)
    {
        $this->trailerHeight = $trailerHeight;
    }


}