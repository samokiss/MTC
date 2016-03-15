<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 11:16
 */

namespace MTC\Tools;
use MTC\Vehicle\VehicleInterface;

class TextHelper
{
    public static function formatBrand($brand)
    {
        return strtoupper($brand);
    }

    public static function computeTrunkVolume(VehicleInterface $car)// ici on force le type
    {
        return 'Le volume du coffre est de '
            . $car->availableVolume()
            . 'm3';
    }
}