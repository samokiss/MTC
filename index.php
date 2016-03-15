<?php

require 'src/MTC/Autoloader.php';
MTC\Autoloader::register();

define('CONFIG_DIR',__DIR__.'/config');
define('VIEW_DIR',__DIR__.'/views');

// /controller/action/
preg_match('#/([a-zA-Z]+)/([a-zA-Z]+)/#', $_SERVER['REQUEST_URI'],$matches);
var_dump($matches);

$controllerName = 'MTC\Controller\\'.ucfirst($matches[1]);
$actionName = $matches[2].'Action';

$controller = new $controllerName();
$controller->$actionName();