<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/style/form.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/style/header.css" />
    <title>Document</title>
</head>

<body>
    <?php

    use app\controller\Controller;

    $header = new Controller;
    $header->view('./template/header');
    ?>
    <form action="" method="post">
        <!--Name of the company-->
        <label for="NewCompanies">Company Name</label>
        <input type="text" class="name" id="newcompany" name="newcompany" placeholder="Company">

        <!--TVA Number-->
        <label for="NewCompanies">TVA Number</label>
        <input type="text" class="tva" id="tvanumber" name="tvanumber" placeholder="AA111 111 111">

        <!--Phone Number-->
        <label for="NewCompanies">Phone Number</label>
        <input type="tel" class="phone" id="phone" name="phone" placeholder="0123 45 67 89">

        <!--Country -->
        <label for="NewCompanies">Country</label>
        <input type="text" class="country" id="country" name="country" placeholder="Country">

        <!--Company Type-->
        <label for="company-type">Company Type</label>
        <select id="companytype" name="companytype">
            <option value="Client">Client</option>
            <option value="Supplier">Supplier</option>
        </select>

        <input type="submit" value="Submit" class="submit">
    </form>

</body>

</html>