<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/style/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
    <title>New Invoices</title>
</head>
<body>

    <h1>Create new invoices</h1>

    <form action="./NewInvoices.php">

        <!--Invoices Number-->
        <label for="NewInvoices">Invoice Number</label>
        <input type="text" id="invoice" name="invoices" placeholder="123-456-789">

        <!--Date-->
        <label for="NewInvoices">Invoice Date</label>
        <input type="date" id="date" name="date" placeholder="01-01-2000" 
            min="2020-01-01" max="2030-12-31">

        <!--Name of the company-->
        <label for="NewInvoices">Company</label>
        <input type="text" id="company" name="company" placeholder="Company">

        <!--Name of the contact-->
        <label for="NewInvoices">Contact person regarding the invoice</label>
        <input type="text" id="contact" name="contact" placeholder="John Smith">

        <input type="submit" value="Submit">

    </form>
    
</body>
</html>








<?php

echo 'TEST NEW INVOICES';

?>
