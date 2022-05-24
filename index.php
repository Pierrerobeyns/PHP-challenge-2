<?php

require __DIR__."/vendor/autoload.php";

$url = $_SERVER["REQUEST_URI"];

$urlExplode = explode('/', filter_var($url, FILTER_SANITIZE_URL));

//var_dump($urlExplode);

use app\controller\CompaniesController;
use app\controller\ContactController;
use app\controller\LoginController;
use app\controller\HomePageController;
use app\controller\InvoicesController;
use app\controller\ErrorController;
use app\controller\RegistrationController;
use app\controller\WelcomeController;

switch ($url) {
    case '/':
        $homePage = new HomePageController();
        $homePage->homePage();
        break;

    case '/login':
        $login = new LoginController();
        $login->loginPage();
        break;

    case '/admin/newcontact':
        $add = new ContactController();
        $add->newContact();
        break;

    case '/admin/newinvoices':
        $newContact = new InvoicesController();
        $newContact->newInvoice();
        break;
    case '/welcome':
        $test = new WelcomeController();
        $test->getTableWelcome();
        break;

    case '/noadmin/companies':
        $companiesList = new CompaniesController();
        $companiesList->getAllTableCompanies();
        break;

    case '/noadmin/contact':
        $contactList = new ContactController();
        $contactList->getAllContact();
        break;

    case '/noadmin/invoices':
        $invoicesList = new InvoicesController();
        $invoicesList->getAllInvoices();
        break;

    case '/admin/newcompanies':
        $newCompanies = new CompaniesController();
        $newCompanies->addNewCompanies();
        break;
        
    case '/registration':
        $registration = new RegistrationController();
        $registration->newUser();
        break;

    case '/noadmin/invoices/' . $urlExplode[3]:
        if (!empty($urlExplode[3])) {
            $InvoiceDetails = new InvoicesController();
            $InvoiceDetails->getInvoiceById($urlExplode[3]);
        }
        break;

    case '/noadmin/contact/' . $urlExplode[3]:
        if (!empty($urlExplode[3])) {
            $ContactDetails = new ContactController();
            $ContactDetails->getContactById($urlExplode[3]);
        }
        break;

    case '/noadmin/companies/' . $urlExplode[3]:
        if (!empty($urlExplode[3])) {
            $CompanyDetails = new CompaniesController();
            $CompanyDetails->getCompaniesById($urlExplode[3]);
        }
        break;

    default:
        $error = new ErrorController();
        $error->getError();
        break;
}
?>

