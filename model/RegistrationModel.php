<?php

use app\model\Database;

class RegistrationModel
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();
    }

    public function isUser()
    {
        $query = 
            "INSERT INTO users(name, firstname, username, mail, password)
            VALUES (?,?,?,?,?)";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
    }
}