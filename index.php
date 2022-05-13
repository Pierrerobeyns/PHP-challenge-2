<?php

require __DIR__."/vendor/autoload.php";

$url = $_SERVER["REQUEST_URI"];

use app\controller\Connexion;
use app\controller\WelcomeController;


switch ($url) {
    case '/':
        $welcome = new WelcomeController();
        $welcome_db = new Connexion("localhost", "cogip");
        $welcome->getView();
        //$welcome_db->connect();
        break;
    
    default:
        echo "page 404";
        break;
}

?>

