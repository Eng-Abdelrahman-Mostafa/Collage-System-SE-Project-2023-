<?php

namespace Core;

class Database
{
    public $connection;
    Public $statement;
    public function __construct($config,$username = "root", $password = "")
    {
        $dsn = "mysql:".http_build_query($config['database'], '', ';');
        $this->connection = new PDO($dsn,
            $username,
            password,
            [
                PDO::ATTER_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
    }
    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }
    public function fetchAll()
    {
        return $this->statement->fetchAll();
    }
    public function fetch()
    {
        return $this->statement->fetch();
    }
    public function findOrFail(){
        $result = $this->fetch();
        if(!$result){
            abort(404);
        }
    }





}