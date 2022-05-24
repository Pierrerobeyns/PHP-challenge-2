<?php

namespace app\model;

session_start();

use app\model\Database;

class LoginModel
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function selectUsers()
    {
        $req = "SELECT * FROM users";
        $statement = $this->db->getInstance()->prepare($req);
        $statement->execute();
        $data = $statement->fetchAll($this->db->getInstance()::FETCH_ASSOC);
        return $data;
    }
}
