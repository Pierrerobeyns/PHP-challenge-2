<?php

require __DIR__."/vendor/autoload.php";

$url = $_SERVER["REQUEST_URI"];

use app\controller\CompaniesController;
use app\controller\ContactController;
use app\controller\ErrorController;
use app\controller\InvoicesController;
use app\controller\RegistrationController;
use app\controller\WelcomeController;

switch ($url) {
    case '/welcome':
        $test = new WelcomeController();
        $test->getLastCompanies();
        $test->getLastInvoices();
        $test->getLastContact();
        break;

    case '/noadmin/Companies':
        $companiesList = new CompaniesController();
        $companiesList->getAllClients();
        $companiesList->getAllSuppliers();
        break;

    case '/noadmin/Contact':
        $contactList = new ContactController();
        $contactList->getAllContact();
        break;

    case '/noadmin/Invoices':
        $invoicesList = new InvoicesController();
        $invoicesList->getAllInvoices();
        break;

    case '/admin/NewCompanies':
        $newCompanies = new CompaniesController();
        $newCompanies->getNewCompanies();
        break;
        
    case '/Registration':
        $registration = new RegistrationController();
        $registration->getViewRegistration();
        break;
    
    default:
        $error = new ErrorController();
        $error->getError();
        break;
}

?>

