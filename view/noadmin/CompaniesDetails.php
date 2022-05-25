<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/header.css">
    <link rel="stylesheet" href="../../assets/style/List.css">
    <title><?php echo $array1['company']?> | Details</title>
</head>
<body>
<?php
    use app\controller\Controller;
    $header = new Controller;
    $header->view('./template/header');
?>

<h2>Company : <?php echo $array1['company']?></h2>

<p>TVA : <?php echo $array1['TVA']?></p>
<p>Type : <?php echo $array1['type']?></p>

<h3>Contact persons : </h3>
<table>
    <thead>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $array1['firstName'] . " " . $array1['lastName']?></td>
            <td><?php echo $array1['phone']?></td>
            <td><?php echo $array1['email']?></td>
        </tr>
    </tbody>
</table>


<h3>Invoices : </h3>

<table>
    <thead>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Contact Person</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $array1['invoiceNumber']?></td>
            <td><?php echo $array1['invoiceDate']?></td>
            <td><?php echo $array1['email']?></td>
        </tr>
    </tbody>
</table>