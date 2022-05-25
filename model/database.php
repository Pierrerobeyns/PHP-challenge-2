<?php

namespace app\model;

use \PDO;

class Database
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo =  new \PDO("mysql:host=localhost;dbname=COGIP;charset=utf8", "root", "root");
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function getInstance()
    {
        return $this->pdo;
    }
}
