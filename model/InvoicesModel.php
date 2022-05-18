<?php

namespace app\model;

use app\model\Database;
use \PDO;

class InvoicesModel
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();
    }

    public function getInvoiceDetail($id)
    {
        $query = "SELECT 
        invoice.numberinvoice as invoice,
         company.vatnumber as companyVat,
         company.company as companyName,
         type.type as companyType,
         people.lastname as lastName,
         people.email as email, people.phone as phone 
        FROM invoice 
        INNER JOIN company ON invoice.id = company.id 
        INNER JOIN people ON company.id = people.id 
        INNER JOIN type ON company.id = type.id
        WHERE invoice.id = $id";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
