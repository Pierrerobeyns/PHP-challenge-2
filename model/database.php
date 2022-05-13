<?php

namespace app\controller;

use Exception;

class Connexion
{
    const USERNAME="root";
    const PASSWORD="root";
    protected $pdo;
    protected string $server;
    protected string $dbname;

    public function __construct($server, $dbname)
    {
        $this->server = $server;
        $this->$dbname = $dbname;
    }

    public function connect()
    {
        try {
            $this->pdo = new \PDO("mysql:host=$this->server;dbname=$this->db;charset=utf8", self::USERNAME, self::PASSWORD);
        } catch (Exception $e) {
            echo "Error : " . $e->getMessage();
        }
        
        return $this->pdo;
    }
}