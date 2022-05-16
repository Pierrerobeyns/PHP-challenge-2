<?php

use app\model\Database;

class ContactModel 
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();
    }

    public function readAllInvoices()
    {
        $query = 
            "SELECT numberinvoice, date , company, type
            FROM invoices
            INNER JOIN company 
                on invoice.id = company.id 
            INNER JOIN type
                on company.id = type.id";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}