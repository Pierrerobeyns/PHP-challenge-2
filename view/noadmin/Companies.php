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
                    <tr>
                        <?php foreach ($array1 as $elem) {
                            echo "<tr>";
                            echo "<td>";
                            echo $elem[0];
                            echo "</td>";
                            echo "<td>";
                            echo $elem[1];
                            echo "</td>";
                            echo "<td>";
                            echo $elem[2];
                            echo "</td>";
                            echo "<tr>";
                        }; ?>
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
                    <tr>
                        <?php foreach ($array2 as $elem) {
                            echo "<tr>";
                            echo "<td>";
                            echo $elem[0];
                            echo "</td>";
                            echo "<td>";
                            echo $elem[1];
                            echo "</td>";
                            echo "<td>";
                            echo $elem[2];
                            echo "</td>";
                            echo "<tr>";
                        }; ?>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</body>

</html>