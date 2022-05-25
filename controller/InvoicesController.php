<?php

namespace app\controller;
use app\controller\Controller;
use app\controller\CompaniesController;
use app\model\ContactModel;
use app\model\InvoicesModel;
use app\model\WelcomeModel;

class InvoicesController extends Controller
{

    public function getAllInvoices()
    {
        $allInvoices = new InvoicesModel();
        $Invoices = $allInvoices->readAllInvoices();
        return $this->view('noadmin/Invoices', $Invoices);
    }

    public function getInvoiceById($id)
    {
        $invoice = new InvoicesModel();
        $invoiceDetail = $invoice->getInvoiceDetail($id);
        if ($invoiceDetail == false) {
            return $this->view('error');
        } else {
            return $this->view('noadmin/InvoicesDetails', $invoiceDetail);
        }
    }

    public function newInvoice()
    {
        $check = new CheckingData();
        $bool = $check->checkingData(!empty($_POST['invoices']), !empty($_POST['date']), !empty($_POST['nameCompanies']), !empty($_POST['nameContact']));
        $getIdCompanies = new CompaniesController();
        $idCompagnies = $getIdCompanies->getCompaniesId();
        $getUsers = new ContactModel();
        $idUsers = $getUsers->getUserID();
        if ($bool == true) {

            $invoice = trim(htmlspecialchars('F' . $_POST['invoices']));
            $date = trim(htmlspecialchars($_POST['date']));
            $nameCompanies = trim(htmlspecialchars($_POST['nameCompanies']));
            $nameContact = trim(htmlspecialchars($_POST['nameContact']));

            //var_dump($invoice, $date, $nameCompanies, $nameContact);
            $newContact = new InvoicesModel();
            $newContact->newInvoice($invoice, $date, $nameCompanies, $nameContact);
            $lastTables = new WelcomeModel();
            $FiveInvoices = $lastTables->readLastInvoices();
            $FiveContact = $lastTables->readLastContact();
            $FiveCompanies = $lastTables->readLastCompanies();
            return $this->view('welcome', $FiveInvoices,$FiveContact,$FiveCompanies);
        } else {
            return $this->view('admin/NewInvoices', $idCompagnies, $idUsers);
        }
    }
}