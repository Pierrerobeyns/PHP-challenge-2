<?php

namespace app\model;

use app\model\Database;
use \PDO;

class WelcomeModel
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();
    }

    public function readLastInvoices()
    {
        $query = 
            "SELECT numberinvoice, date , company 
            FROM invoice
            INNER JOIN company 
            on invoice.id = company.id 
            LIMIT 5";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function readLastContact()
    {
        $query = 
            "SELECT lastname, firstname, phone, email, company 
            FROM people 
            INNER JOIN company 
                on people.id = company.id 
            LIMIT 5";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function readLastCompanies()
    {
        $query = 
            "SELECT lastname, firstname, vatnumber, country, type 
            FROM people 
            INNER JOIN company 
                on people.id = company.id 
            INNER JOIN type 
                on company.id = type.id 
            LIMIT 5";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}