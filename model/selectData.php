<?php

    function ddbConnect()
    {
        return new PDO("mysql:host=localhost;dbname=COGIP;charset=utf8","user","user");
    }

    function selectCompany()
    {
        $pdo = ddbConnect();

        $req = "SELECT
        company.company as companyName,
        company.vatnumber as companyVat,
        invoice.numberinvoice as invoiceNumber,
        people.firstname as firstName,
        people.lastname as lastName
        FROM company
        INNER JOIN invoice
            ON company.id = invoice.id
        INNER JOIN people
            ON company.id = people.id";

        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $data;
    }