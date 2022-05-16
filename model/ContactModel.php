<?php

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
            "SELECT lastname, firstame, phone, email, company 
            FROM people 
            INNER JOIN company 
                on people.id = company.id 
            LIMIT 5";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}