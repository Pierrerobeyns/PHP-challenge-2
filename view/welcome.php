<?php
session_start();

//METTRE LES ELEMENTS HTML QUI CORRESPONDENT AUX COMPTES RESPECTIFS 
if (!empty($_SESSION['GOD-MODE'])) {
    echo "SALUT " . $_SESSION['GOD-MODE'];
} else if (!empty($_SESSION['ADMIN-MODE'])) {

    echo "Salut " . $_SESSION['ADMIN-MODE'];
} else if (!empty($_SESSION['CUSTOMER'])) {
    echo "Salut " . $_SESSION['CUSTOMER'];
}

"coucou";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/header.css" />
    <link rel="stylesheet" href="../assets/style/welcome.css" />
    <title>COGIP - Welcome</title>
</head>

<body>
    <?php

    use app\controller\Controller;

    $test = new Controller;
    $test->view('/template/header');
    ?>
    <div class="p-container">
        <p class="welcome-title">Welcome to the COGIP</p>
        <div class="text-container">
            <p>Hello Boss</p>
            <p>What would you do today ? </p>
        </div>
    </div>
    <div class="new-container">
        <a href="/admin/newinvoices"><img src="../assets/img/plus.svg" width="24px" />New Invoices</a>
        <a href="/admin/newcontact"><img src="../assets/img/plus.svg" width="24px" />New Contact</a>
        <a href="/admin/newcompanies"><img src="../assets/img/plus.svg" width="24px" />New Company</a>
    </div>


    <h1>Welcome</h1>

    <h3>Last invoices :</h3>

    <table>
        <thead>
            <tr>
                <th>Invoice number</th>
                <th>Dates</th>
                <th>Company</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($array1 as $elem) {?>
                <tr>
                    <td><?php echo $elem['InvoicesNumber']?></td>
                    <td><?php echo $elem['Date']?></td>
                    <td><?php echo $elem['Company']?></td>
                    <td><img src="../assets/img/trash.png" alt="delete info" height="15px"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h3>Last contacts :</h3>

    <table>
        <thead>
            <tr>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Phone</th>
                <th>Mail</th>
                <th>Company</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($array2 as $elem) {?>
                <tr>
                    <td><?php echo $elem['Lastname']?></td>
                    <td><?php echo $elem['Firstname']?></td>
                    <td><?php echo $elem['Phone']?></td>
                    <td><?php echo $elem['Email']?></td>
                    <td><?php echo $elem['Company']?></td>
                    <td><img src="../assets/img/trash.png" alt="delete info" height="15px"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h3>Last Companies :</h3>

    <table>
        <thead>
            <tr>
                <th>Company</th>
                <th>VAT number</th>
                <th>Country</th>
                <th>Type</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($array3 as $elem) {?>
                <tr>
                    <td><?php echo $elem['Company']?></td>
                    <td><?php echo $elem['TVANumber']?></td>
                    <td><?php echo $elem['Country']?></td>
                    <td><?php echo $elem['TypeCompany']?></td>
                    <td><img src="../assets/img/trash.png" alt="delete info" height="15px"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>