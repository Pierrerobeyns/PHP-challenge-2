<?php

namespace app\model;

use app\model\Database;

class RegistrationModel
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();
    }

    public function addUser($username, $name, $firstname, $mail, $password)
    {
        $query = 
            "INSERT INTO users(username, lastname, firstname, mail, password)
            VALUES ('$username', '$name', '$firstname', '$mail', '$password')";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
    }
}