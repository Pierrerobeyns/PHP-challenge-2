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
            "SELECT DISTINCT company, vatnumber, country 
            FROM company 
            INNER JOIN type 
                on company.id = type.id_company 
            WHERE type = 'Client'";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function readAllCompaniesSuppliers()
    {
        $query = 
            "SELECT DISTINCT company, vatnumber, country
            FROM company 
            INNER JOIN type 
                on company.id = type.id_company 
            WHERE type = 'Supplier'";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function createNewCompanies($company,$country, $vatnumber, $phonecompany, $typecompany)
    {
        $query = 
        "INSERT INTO company(company, country, vatnumber, phonecompany, typecompany)
        VALUES ('$company', '$country', '$vatnumber', '$phonecompany', '$typecompany')"; #TODO
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
