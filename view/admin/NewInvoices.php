<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/style/form.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/style/header.css" />
    <title>New Invoices</title>
</head>

<body>

    <?php

    use app\controller\Controller;

    $navbar = new Controller();

    $navbar->view("template/header");

    ?>

    <div class="container">
        <h1>Create new invoices</h1>

        <form action="" method="post">

            <!--Invoices Number-->
            <label for="NewInvoices">Invoice Number</label>
            <input type="text" id="invoice" name="invoices" placeholder="123-456-789">

            <!--Date-->
            <label for="NewInvoices">Invoice Date</label>
            <input type="date" id="date" name="date" placeholder="01-01-2000" min="2020-01-01" max="2030-12-31">

            <!--Name of the company-->
            <label for="NewInvoices">Company</label>
            <select name="nameCompanies">
                <?php foreach ($array1 as $company) {?>
                    <option value="<?php echo $company['id'] ?>"><?php echo $company['company'] ?></option>
                <?php } ?>
        </select>

            <!--Name of the contact-->
            <label for="NewInvoices">Contact person regarding the invoice</label>
            <select name="nameContact">
                <?php foreach ($array2 as $contact) { ?>
                    <option value="<?php echo $contact['id'] ?>"><?php echo $contact['lastname'] . " " . $contact['firstname'] ?></option>
                <?php } ?>
        </select>

            <input type="submit" value="Submit" class="submit">

        </form>
    </div>

</body>

</html>

<!-- <?php

        echo 'TEST NEW INVOICES';

        ?> -->