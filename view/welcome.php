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
        <a href="#"><img src="../assets/img/plus.svg" width="24px" />New Invoices</a>
        <a href="#"><img src="../assets/img/plus.svg" width="24px" />New Contact</a>
        <a href="#"><img src="../assets/img/plus.svg" width="24px" />New Company</a>
    </div>


    <h1>Welcome</h1>

    <h3>Last invoices :</h3>

    <table>
        <thead>
            <tr>
                <th>Invoice number</th>
                <th>Dates</th>
                <th>Company</th>
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

    <h3>Last contacts :</h3>

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
                    echo "<td>";
                    echo $elem[3];
                    echo "</td>";
                    echo "<td>";
                    echo $elem[4];
                    echo "</td>";
                    echo "<tr>";
                }; ?>
            </tr>
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($array3 as $elem) {
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
                    echo "<td>";
                    echo $elem[3];
                    echo "</td>";
                    echo "<tr>";
                }; ?>
            </tr>
        </tbody>
    </table>
</body>

</html>