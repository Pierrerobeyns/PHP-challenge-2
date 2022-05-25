<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/style/form.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/style/header.css" />
    <title>New Companies</title>
</head>

<body>

    <?php

    use app\controller\Controller;

    $navbar = new Controller();

    $navbar->view("template/header");

    ?>
    <h1>Create new company</h1>

    <div class="container">
        <form action="" method="post">

            <!--Name of the company-->
            <label for="NewCompanies">Company Name</label>
            <input type="text" class="name" id="newcompany" name="newcompany" placeholder="Company">

            <!--Country of the company-->
            <label for="NewCompanies">Country</label>
            <input type="text" class="country" id="country" name="country" placeholder="Country">

            <!--TVA Number-->
            <label for="NewCompanies">TVA Number</label>
            <input type="text" class="tva" id="tvanumber" name="tvanumber" placeholder="123-456-789">

            <!--Phone Number-->
            <label for="NewCompanies">Phone Number</label>
            <input type="tel" class="phone" id="phone" name="phone" placeholder="0123/456789" required>

            <!--Company Type-->
            <label for="company-type">Company Type</label>
            <select id="companytype" name="companytype">
                <option value="Client">Client</option>
                <option value="Supplier">Supplier</option>
            </select>

            <input type="submit" value="Submit" class="submit">

        </form>
    </div>

</body>

</html>