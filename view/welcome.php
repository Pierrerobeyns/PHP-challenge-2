<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/header.css" />
    <link rel="stylesheet" href="../assets/style/welcome.css" />
    <script src="../assets/js/index.js" defer></script>
    <title>COGIP - Welcome</title>
</head>

<body>
    <?php

    use app\controller\Controller;
    use app\model\WelcomeModel;

    $test = new Controller;
    $test->view('/template/header');
    ?>
    <div class="p-container">
        <p class="welcome-title">Welcome to the COGIP</p>
        <div class="text-container">
            <?php
            if (!empty($_SESSION['GOD-MODE'])) {
                echo "<p> Hello " . $_SESSION['GOD-MODE'] . "</p>";
            } else if (!empty($_SESSION['ADMIN-MODE'])) {
                echo "<p> Hello " . $_SESSION['ADMIN-MODE'] . "</p>";
            } else if (!empty($_SESSION['CUSTOMER'])) {
                echo "<p> Hello " . $_SESSION['CUSTOMER'] . "</p>";
            } ?>

            <p>What would you do today ? </p>
        </div>
    </div>
    <div class="new-container">
        <a href="/admin/newinvoices"><img src="../assets/img/plus.svg" width="24px" />New Invoices</a>
        <a href="/admin/newcontact"><img src="../assets/img/plus.svg" width="24px" />New Contact</a>
        <a href="/admin/newcompanies"><img src="../assets/img/plus.svg" width="24px" />New Company</a>
    </div>

    <div class="table-pos">
        <div class="table-style">
            <div class="table-pos">
                <h3>Last invoices :</h3>
                <form action="welcome" method="post">
                    <table>
                        <thead>
                            <tr>
                                <th>Invoice number</th>
                                <th>Dates</th>
                                <th>Company</th>
                                <th><img src="../assets/img/trash.png" alt="delete info"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($array1 as $elem) { ?>
                                <tr>
                                    <td><?php echo $elem['InvoicesNumber'] ?></td>
                                    <td><?php echo $elem['Date'] ?></td>
                                    <td><?php echo $elem['Company'] ?></td>
                                    <td>
                                        <input type="checkbox" name="del[]" value=<?php echo $elem['id']; ?> <?php $test = new WelcomeModel();
                                                                                                                $test->deleteInvoices(); ?> </td>
                                </tr>
                            <?php } ?>
                            <div class="sub-pos">
                                <input class="sub" type="submit" value="Delete an invoice">
                            </div>
                        </tbody>

                    </table>
                </form>
            </div>


            <div class="table-pos">
                <h3>Last contacts :</h3>
                <form action="welcome" method="post">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Mail</th>
                                <th>Company</th>
                                <th><img src="../assets/img/trash.png" alt="delete info"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($array2 as $elem) { ?>
                                <tr>
                                    <td><?php echo $elem['Lastname'] . " " . $elem['Firstname'] ?></td>
                                    <td><?php echo $elem['Phone'] ?></td>
                                    <td><?php echo $elem['Email'] ?></td>
                                    <td><?php echo $elem['Company'] ?></td>
                                    <td>
                                        <input type="checkbox" name="del[]" value=<?php echo $elem['id']; ?> <?php $test = new WelcomeModel();
                                                                                                                $test->deleteContact(); ?> </td>
                                </tr>
                            <?php } ?>
                            <div class="sub-pos">
                                <input class="sub" type="submit" value="Delete a contact">
                            </div>
                        </tbody>
                    </table>
                </form>
            </div>
            
            <div class="table-pos">
                <h3>Last Companies :</h3>

                <div class="table-pos">
                    <form action="welcome" method="post">
                        <table>
                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th>VAT number</th>
                                    <th>Country</th>
                                    <th>Type</th>
                                    <th><img src="../assets/img/trash.png" alt="delete info"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($array3 as $elem) { ?>
                                    <tr>
                                        <td><?php echo $elem['Company'] ?></td>
                                        <td><?php echo $elem['TVANumber'] ?></td>
                                        <td><?php echo $elem['Country'] ?></td>
                                        <td><?php echo $elem['TypeCompany'] ?></td>
                                        <td>
                                            <input type="checkbox" name="del[]" value=<?php echo $elem['id']; ?> <?php $test = new WelcomeModel();
                                                                                                                    $test->deleteCompanies(); ?> </td>
                                    </tr>
                                <?php } ?>
                                <div class="sub-pos">
                                    <input class="sub" type="submit" value="Delete a company">
                                </div>
                            </tbody>
                        </table>
                    </form>

                </div>
            </div>
</body>

</html>