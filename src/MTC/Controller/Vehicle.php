<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 14:14
 */

namespace MTC\Controller;
use MTC\Renderer\PhpRenderer;

class Vehicle
{
    protected function getConfig($file)
    {
        $config  =  \MTC\Tools\Config::getInstance();
        $config->parseFile($file);
        return $config;
    }

    public function carAction()
    {

        /*
         * injection de dépendance : la factory a besoin de la classe config pour fonctionner
         * plutot que l'instancier dans la classe, ce qui nous empecherai de la modifier
         * on va passer la classe en parametre
         */
        $config = self::getConfig(CONFIG_DIR. '/config.ini');
        $carFromFactory = \MTC\Vehicle\VehicleFactory::getVehicle('car', $config);

        $renderer = new PhpRenderer('views/Car.tpl.php');
        $renderer->assign('brand', $carFromFactory->getBrand());
        $renderer->assign('color', $carFromFactory->getColor());
    }

    public function truckAction()
    {
        $config = self::getConfig(CONFIG_DIR. '/config.ini');
        $carFromFactory = \MTC\Vehicle\VehicleFactory::getVehicle('truck', $config);

        $renderer = new PhpRenderer('views/Truck.tpl.php');
        $renderer->assign('brand', $carFromFactory->getBrand());
        $renderer->assign('color', $carFromFactory->getColor());
    }
}