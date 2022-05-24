<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/header.css">
    <link rel="stylesheet" href="../../assets/style/Companies.css">
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
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Phone</th>
                        <th>Mail</th>
                        <th>Company</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($array1 as $elem) {?>
                    <tr>
                        <td><?php echo $elem[0]?></td>
                        <td><?php echo $elem[1]?></td>
                        <td><?php echo $elem[2]?></td>
                        <td><?php echo $elem[3]?></td>
                        <td><?php echo $elem[4]?></td>
                    <?php }; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>