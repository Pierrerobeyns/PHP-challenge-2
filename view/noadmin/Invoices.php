<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/header.css">
    <link rel="stylesheet" href="../../assets/style/List.css">
    <title>Invoices</title>
</head>

<body>
    <?php

    use app\controller\Controller;

    $header = new Controller;
    $header->view('./template/header');
    ?>
    <h1>All invoices</h1>

    <div class="table-pos">
        <div class="table-styl">

            <table>
                <thead>
                    <tr>
                        <th>Invoice Number</th>
                        <th>Date</th>
                        <th>Company</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($array1 as $elem) {?>
                    <tr>
                        <td><a href= "invoices/<?php echo $elem['id'];?> "><?php echo $elem['InvoiceNumber']?></a></td>
                        <td><?php echo $elem['Date']?></td>
                        <td><?php echo $elem['Company']?></td>
                        <td><?php echo $elem['Type']?></td>
                    <?php }; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>