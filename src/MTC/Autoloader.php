<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 11:57
 */

namespace MTC;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register([__CLASS__,'autoload']);
    }

    public static function autoload($className)
    {
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR
            . str_replace('\\',DIRECTORY_SEPARATOR,$className)
            . '.php';

    }
}