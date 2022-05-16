<?php

require __DIR__."/vendor/autoload.php";

$url = $_SERVER["REQUEST_URI"];

use app\controller\ErrorController;
use app\controller\WelcomeController;

switch ($url) {
    case '/welcome':
        $welcome = new WelcomeController();
        $welcome->getView();
        break;

    case '/noadmin/Companies':
        break;

    case '/noadmin/Contac':
        echo "page Company List";
        break;

    case '/noadmin/Invoices':
        echo "page Invoices List";
        break;

    case '/admin/NewCompanies':
        echo "page New company";
        break;
        
    case '/Registration':
        echo "page registration";
        break;
    
    default:
        $error = new ErrorController();
        $error->getError();
        break;
}

?>

