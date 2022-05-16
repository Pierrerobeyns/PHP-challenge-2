<?php

use app\model\Database;

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
            FROM invoices
            INNER JOIN company 
            on invoice.id = company.id 
            LIMIT 5";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function readLastContact()
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

    public function readLastCompanies()
    {
        $query = 
            "SELECT lastname, firstame, vatnumber, country, type 
            FROM people 
            INNER JOIN company 
                on people.id = company.id 
            INNER JOIN type 
                on company.id = type.id 
            LIMIT 5";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}