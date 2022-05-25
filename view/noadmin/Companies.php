<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/header.css">
    <link rel="stylesheet" href="../../assets/style/List.css">
    <title>All companies | COGIP</title>
</head>

<body>
    <?php

    use app\controller\Controller;

    $header = new Controller;
    $header->view('./template/header');
    ?>

    <h1>Companies directory</h1>

    <div class="table-pos">
        <div class="table-styl">
            <h3>Clients</h3>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>VAT number</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($array1 as $elem) {?>
                    <tr>
                        <td><a href="companies/<?php echo $elem['id']?>"><?php echo $elem['CompanyName']?></td></a>
                        <td><?php echo $elem['TVANumber']?></td>
                        <td><?php echo $elem['Country']?></td>
                    <?php }; ?>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    <div class="table-pos">
        <div class="table-styl">
            <h3>Suppliers</h3>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>VAT number</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($array2 as $elem) {?>
                    <tr>
                        <td><a href="companies/<?php echo $elem['id']?>"><?php echo $elem['CompanyName']?></a></td>
                        <td><?php echo $elem['TVANumber']?></td>
                        <td><?php echo $elem['Country']?></td>
                    <?php }; ?>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</body>

</html>