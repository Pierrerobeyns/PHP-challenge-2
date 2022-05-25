<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/header.css">
    <link rel="stylesheet" href="../../assets/style/List.css">
    <title><?php echo $array1['firstName'] . " " . $array1['lastName']?> | Details</title>
</head>
<body>
<?php
    use app\controller\Controller;
    $header = new Controller;
    $header->view('./template/header');
?>

<h2>Contact : <?php echo $array1['firstName'] . " " . $array1['lastName']?></h2>

<p>Contact : <?php echo $array1['firstName'] . " " . $array1['lastName']?></p>
<p>Company : <?php echo $array1['company']?></p>
<p>Email : <?php echo $array1['email']?></p>
<p>Phone : <?php echo $array1['phone']?></p>

<h3>Contact person for these invoices : </h3>
<table>
    <thead>
        <th>Invoice Number</th>
        <th>Date</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $array1['invoiceNumber']?></td>
            <td><?php echo $array1['invoiceDate']?></td>
        </tr>
    </tbody>
</table>

