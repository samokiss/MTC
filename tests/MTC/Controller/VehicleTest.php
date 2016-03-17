<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/03/16
 * Time: 11:39
 */

use MTC\Renderer\PhpRenderer;
use MTC\Controller\Vehicle;
define('CONFIG_DIR','/var/www/html/config');
define('VIEW_DIR','/var/www/html/views');

class VehicleTest extends PHPUnit_Framework_TestCase
{

    public function testCarAction()
    {

        $vehicule = new Vehicle();

        ob_start();
        $vehicule->carAction();
        $view = ob_get_clean();

        $this->assertStringMatchesFormatFile('/var/www/html/views/CarTest.tpl.php',$view);
    }


}
