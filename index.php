<?php

require __DIR__."/vendor/autoload.php";

$url = $_SERVER["REQUEST_URI"];

use app\controller\ErrorController;
use app\controller\WelcomeController;

switch ($url) {
    case '/':
        $welcome = new WelcomeController();
        $welcome->getView();
        break;
    
    default:
        $error = new ErrorController();
        $error->getError();
        break;
}

?>

