<?php

namespace app\model;

use app\model\Database;

class InvoicesModel 
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();
    }

    public function readAllInvoices()
    {
        $query = 
            "SELECT DISTINCT numberinvoice, date , company, type
            FROM invoice
            INNER JOIN company 
                on invoice.id_company = company.id 
            INNER JOIN type
                on company.id = type.id_company";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}