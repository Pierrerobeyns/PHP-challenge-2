<?php
namespace app\model;

use app\model\Database;

class LoginModel 
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function select()
    {
        $req = "SELECT * FROM people";
        $statement = $this->db->getInstance()->prepare($req);
        $statement->execute();   
        $data = $statement->fetchAll($this->db->getInstance()::FETCH_ASSOC);
        return $data;
    }
}