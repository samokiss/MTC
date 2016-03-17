<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/03/16
 * Time: 13:34
 */

namespace MTC\Vehicle;


class VehiculeAdapter
{
    private $vehicule;

    public function __construct(VehicleInterface $vehicule)
    {
        $this->vehicule = $vehicule;
    }

    public function getAvailableVolumeAsString()
    {
        return 'Le volume du coffre est de '
        . $this->vehicule->availableVolume()
        . 'm3';
    }

    public function __get($name)
    {
        if(isset($this->vehicule->$name)){
            return $this->vehicule->$name;
        }elseif(method_exists($this->vehicule,'get' . ucfirst($name))) {
            return $this->vehicule->{'get' . ucfirst($name)}();
        }
    }
}