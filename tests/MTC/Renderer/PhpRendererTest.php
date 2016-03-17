<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/03/16
 * Time: 11:23
 */

use MTC\Renderer\PhpRenderer;

class PhpRendererTest extends PHPUnit_Framework_TestCase
{
    public function testConstructorWithWrongFile()
    {
        $this->expectException(\Exception::class);
        new PhpRenderer('/file/not/found');
    }

    public function testConstructor()
    {
        new PhpRenderer('/var/www/html/views/Car.tpl.php');
    }

    public function testRenderer()
    {
        $renderer = new PhpRenderer('/var/www/html/views/Test.tpl.php');
        $renderer->assign('var','value');
        /*
         * pour capturer le contenu de la fonction render de PhpRender
         * on va utiliser les fonction output buffer ob
         * très pratique quand on veut faire du cache
         */
        ob_start();
        $renderer->render();
        $view = ob_get_clean();

        $this->assertEquals('value',$view);
    }
}
