<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/03/16
 * Time: 13:52
 */

namespace MTC\DB;


class DBAdapter
{
    private $db;
    private $table;

    public function __construct(DBInterface $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $statement = $this->connection->prepare("SELECT * FROM $this->table ORDER BY date DESC");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}