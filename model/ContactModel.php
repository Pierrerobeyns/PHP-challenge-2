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
            "SELECT lastname as Lastname, firstname as Firstname, phone as Phone, email as Email, company as Company, people.id
            FROM people 
            INNER JOIN company 
                on people.id_company = company.id";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getContactDetail($id)
    {
        $query = "SELECT people.firstname as firstName,
        people.lastname as lastName,
        people.email as email, people.phone as phone,
        company.company as company,
        invoice.numberinvoice as invoiceNumber,
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

    public function getUserID()
    {
        $query = "SELECT *
        FROM people";
        $stmt = $this->db->getInstance()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function newContact($firstName, $lastName, $phone, $email, $id_company)
    {
        $query = "INSERT INTO people (firstname,lastname,phone,email, id_company)
        VALUES('$firstName', '$lastName', '$phone', '$email', $id_company)";
        $prepare = $this->db->getInstance()->prepare($query);
        $prepare->execute();
    }
}
