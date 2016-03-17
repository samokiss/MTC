<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/03/16
 * Time: 09:55
 */
class VehicleFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testCarWithWrongType()
    {
        /*
         * pour que ce test fonctionne nous avons besoin de définir l'exception dans
         * le véhicule factory
         * car le code suivant attend un exception
         */
        $this->expectException(\Exception::class);
        $config = \MTC\Tools\Config::getinstance();
        \MTC\Vehicle\VehicleFactory::getVehicle('unknown',$config);
    }

    /**
     * @expectedException Exception
     */
    public function testCarWithWrongTypeAnnotation()
    {
        /*
         * on peut aussi faire par annotation, ça revient exactement au même qu'au dessus
         */
        $config = \MTC\Tools\Config::getinstance();
        \MTC\Vehicle\VehicleFactory::getVehicle('unknown',$config);
    }

    public function testGetVehicleWithoutProperConfig()
    {
        /*
         * on veut que le parametre config soit du mauvais type
         * on va typer la config du vehicule factory pour lui dire qu'il attend un \MTC\Tools\Config
         * donc le passé soit par namespace soit par parametre
         */
        $this->expectException(\TypeError::class);
        \MTC\Vehicle\VehicleFactory::getVehicle('car',new \StdClass());
    }

    public function testGetVehicleWithProperConfig()
    {
        $config = \MTC\Tools\Config::getInstance();
        \MTC\Vehicle\VehicleFactory::getVehicle('Car',$config);
    }
}
