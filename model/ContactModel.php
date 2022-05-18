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

    public function getContactDetail($id)
    {
        $query = "SELECT people.firstname as fiestName,
        people.lastname as lastName,
        people.email as email, people.phone as phone,
        company.company as companyName,
        invoice.numberinvoice as numberInvoice,
        invoice.date as invoiceDate 
        FROM people 
        INNER JOIN company ON people.id = company.id 
        INNER JOIN invoice ON company.id = invoice.id 
        WHERE people.id = $id";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
