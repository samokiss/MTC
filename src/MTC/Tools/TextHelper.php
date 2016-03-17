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

}