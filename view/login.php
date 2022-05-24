<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../assets/style/log.css" />
    <link rel="stylesheet" href="../assets/style/header.css">
    <title>GOGIP - Login</title>
</head>

<body>
    <?php

    use app\controller\Controller;

    $header = new Controller;
    $header->view('./template/header');
    if (empty($_SESSION)) {
        echo <<<HTML
        <div class="connect-section">
            <div class="welcome-msg">
                <p>Welcome to the COGIP !</p>
            </div>
            <div class="sub-welcome-msg">
                <p>Welcome in the connexion space of COGIP !!</p>
            </div>
            <form action="" method="post">
                <div class="ipt-container">
                    <input class="ipt-text" type="text" name="username" placeholder="username">
                    <input class="ipt-text" type="password" name="password" placeholder="password">
                    <input class="ipt-sub" type="submit" name="submit" value="Enter into the COGIP">
                </div>
            </form>
        </div>
        HTML;
    } else {
        echo "Vous étes déjà connecté, cassez-vous !";
    }
    
    ?>

</body>

</html>