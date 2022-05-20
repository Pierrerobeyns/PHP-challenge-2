<<<<<<< HEAD
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
    require './template/header.php';
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

    <div class="table-container">
        <p>Last invoices</p>
    </div>
    <div class="table-container">
        <p>Last companies</p>
    </div>
    <div class="table-container">
        <p>Last Contact</p>
    </div>
</body>

</html>
