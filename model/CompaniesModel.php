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
            "SELECT DISTINCT company as CompanyName, vatnumber as TVANumber, country as Country, id
            FROM company 
            WHERE typecompany = 'Client'";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function readAllCompaniesSuppliers()
    {
        $query = 
            "SELECT DISTINCT company as CompanyName, vatnumber as TVANumber, country as Country, id
            FROM company 
            WHERE typecompany = 'Supplier'";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function createNewCompanies($company,$country, $vatnumber, $phonecompany, $typecompany)
    {
        $query = 
        "INSERT INTO company(company, country, vatnumber, phonecompany, typecompany)
        VALUES ('$company', '$country', '$vatnumber', '$phonecompany', '$typecompany')";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
    }

    public function getCompaniesDetail($id)
    {
        $query = "SELECT company.company as company,
        company.vatnumber as TVA,
        type.type as type,
        people.firstname as firstName,
        people.phone as phone,
        people.lastname as lastName,
        people.email as email,
        invoice.numberinvoice as invoiceNumber,
        invoice.date as invoiceDate
        FROM company 
        INNER JOIN invoice 
        ON company.id = invoice.id 
        INNER JOIN people 
        ON company.id = people.id
        INNER JOIN type
        ON company.id = type.id
        WHERE people.id = $id";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCompaniesID()
    {
        $query = "SELECT *
        FROM company";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
