<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/03/16
 * Time: 09:58
 */

namespace MTC\DB;

class Database
{
    private $connection;

    public function __construct($host, $user, $pass, $bdd)
    {
        $dsn = 'mysql:dbname=' . $bdd . ';host=' . $host;
        try{
            $this->connection = new \PDO($dsn, $user, $pass);
        }catch(\Exception $e){
            die('could not connect to the database');
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
    /*
     * a ce niveau la, rajouter une section BDD dans le config.ini
     */
}