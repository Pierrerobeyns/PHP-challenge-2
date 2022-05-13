<?php
namespace app\model;

class Database
{
    protected $pdo;

    public function __construct()
    {
        try{
            $this->pdo =  new \PDO("mysql:host=localhost;dbname=COGIP;charset=utf8","user","user");
        }catch(\Exception $e)
        {
            echo 'Error: ' .$e->getMessage();
        }
    }

    public function getInstance(){
        return $this->pdo;
    }
}