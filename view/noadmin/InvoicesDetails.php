<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/header.css">
    <link rel="stylesheet" href="../../assets/style/List.css">
    <title><?php echo $array1['invoice']?> | Details</title>
</head>
<body>
<?php
    use app\controller\Controller;
    $header = new Controller;
    $header->view('./template/header');
?>

<h2>Invoice : <?php echo $array1['invoice']?></h2>

<h3>Company linked to the invoice : </h3>
<table>
    <thead>
        <th>Name</th>
        <th>VAT number</th>
        <th>Company type</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $array1['companyName']?></td>
            <td><?php echo $array1['companyVat']?></td>
            <td><?php echo $array1['companyType']?></td>
        </tr>
    </tbody>
</table>


<h3>Contact person : </h3>

<table>
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $array1['firstName'] . " " . $array1['lastName']?></td>
            <td><?php echo $array1['email']?></td>
            <td><?php echo $array1['phone']?></td>
        </tr>
    </tbody>
</table>
