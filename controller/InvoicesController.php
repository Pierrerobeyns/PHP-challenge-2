<?php

namespace app\controller;

use app\controller\Controller;
use app\controller\CompaniesController;
use app\model\ContactModel;
use app\model\InvoicesModel;

class InvoicesController extends Controller
{
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
        $bool = $check->checkingData($_POST['invoices'], $_POST['date'], $_POST['nameCompanies'], $_POST['nameContact']);
        $getIdCompanies = new CompaniesController();
        $idCompagnies = $getIdCompanies->getCompaniesId();
        $getUsers = new ContactModel();
        $idUsers = $getUsers->getUserID();
        if ($bool == true) {

            $invoice = 'F' . $_POST['invoices'];
            $date = $_POST['date'];
            $nameCompanies = $_POST['nameCompanies'];
            $nameContact = $_POST['nameContact'];

            var_dump($invoice, $date, $nameCompanies, $nameContact);
            $newContact = new InvoicesModel();
            $newContact->newInvoice($invoice, $date, $nameCompanies, $nameContact);
            return $this->view('welcome');
        } else {
            return $this->view('admin/NewInvoices', $idCompagnies, $idUsers);
        }
    }
}
