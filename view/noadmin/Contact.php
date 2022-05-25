<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/header.css">
    <link rel="stylesheet" href="../../assets/style/List.css">
    <title>Document</title>
</head>

<body>
    <?php

use app\controller\Controller;

        $header = new Controller;
        $header -> view('./template/header')
    ?>

    <h1>All contacts</h1>

    <div class="table-pos">
        <div class="table-styl">

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Mail</th>
                        <th>Company</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($array1 as $elem) {?>
                    <tr>
                        <td><a href="contact/<?php echo $elem['id']?>"><?php echo $elem['Firstname'] . " " . $elem['Lastname']?></a></td>
                        <td><?php echo $elem['Phone']?></td>
                        <td><?php echo $elem['Email']?></td>
                        <td><?php echo $elem['Company']?></td>
                    <?php }; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>