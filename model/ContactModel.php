<?php

namespace app\model;

use app\model\Database;

class ContactModel 
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();
    }

    public function readAllContact()
    {
        $query = 
            "SELECT lastname, firstname, phone, email, company 
            FROM people 
            INNER JOIN company 
                on people.id = company.id";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}