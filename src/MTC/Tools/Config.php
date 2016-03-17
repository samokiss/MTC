<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15/03/16
 * Time: 13:42
 */

namespace MTC\Tools;


class Config
{
    private static $instance;
    private $config;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if(is_null(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * @param $files
     * parse_ini_file — Analyse un fichier de configuration
     */
    public function parseFile($files){
        $this->config = parse_ini_file($files);
    }

    /*
     * pour acceder comme config est en privé on devrait faire des getter et des setter
     * mais ca serait chiant donc on va utiliser les méthodes magiques __get et __set
     */

    public function __get($name)
    {
        return (isset($this->config[$name])) ? $this->config[$name] : null;
    }

    public function __set($name, $value)
    {
        $this->config[$name] = $value;
    }
}