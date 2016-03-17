<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/03/16
 * Time: 11:09
 */
namespace MTC\Model;

class Post
{
    private $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection  = $connection;
    }

    public function fetchAll()
    {
        $statement = $this->connection->prepare('SELECT * FROM post ORDER BY date DESC');
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert($data)
    {
        /*
         * pour eviter les problemes d'injection SQL nous allons utiliser des requetes prépares
         * */
        $statement = "INSERT INTO `post` "
            . " (`title`, `text`, `date`) "
            . " VALUES "
            . " (:title, :text, :date)";

        $stmnt = $this->connection->prepare($statement);

        return $stmnt->execute(
            [
                ':title' => $data['title'],
                ':text' => $data['text'],
                ':date' => date('Y-m-d H:i:s')
            ]
        );
    }
}