<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 13:58
 */

namespace MTC\Vehicle;

use MTC\Tools\config as MyConfig;

class VehicleFactory
{
    public static function getVehicle($type, $config)
    {
        $class = __NAMESPACE__.'\\'.ucfirst($type);

        $vehicle = new $class($config->door, $config->color);
        $vehicle->setBrand($config->brand);

        return $vehicle;
    }
    /*
     * factory : créer un fonction static avec la logique qui va dedans
     * l'interet de faire ça c'est que l'on peut instancier des types
     * est des objets complexe
     */
}