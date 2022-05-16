<?php

require __DIR__."/vendor/autoload.php";

use app\controller\LoginController;

$url = $_SERVER["REQUEST_URI"];

switch ($url) {
    case '/':
        $root = new LoginController();
        $root->login();
        break;
        
    default:
        echo "page 404";
        break;
}

?>