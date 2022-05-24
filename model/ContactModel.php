<?php

namespace app\model;

use app\model\Database;
use \PDO;

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
            "SELECT lastname as Lastname, firstname as Firstname, phone as Phone, email as Email, company as Company
            FROM people 
            INNER JOIN company 
                on people.id_company = company.id";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}