<?php

namespace app\model;

use app\model\Database;
use \PDO;

class CompaniesModel 
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();
    }

    public function readAllCompaniesClients()
    {
        $query = 
            "SELECT company, vatnumber, country 
            FROM people 
            INNER JOIN company 
                on people.id = company.id 
            INNER JOIN type 
                on company.id = type.id 
            WHERE type = 'Client'";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function readAllCompaniesSuppliers()
    {
        $query = 
            "SELECT company, vatnumber, country 
            FROM people 
            INNER JOIN company 
                on people.id = company.id 
            INNER JOIN type 
                on company.id = type.id 
            WHERE type = 'Supplier'";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function createNewCompanies($company, $vatnumber, $phonecompany, $typecompany)
    {
        $query = 
        "INSERT INTO company(company, vatnumber, phonecompany, typecompany)
        VALUES ('$company', '$vatnumber', '$phonecompany', '$typecompany')"; #TODO
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
