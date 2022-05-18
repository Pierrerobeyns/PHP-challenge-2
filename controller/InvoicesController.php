<?php

namespace app\controller;
use app\controller\Controller;
use app\model\InvoicesModel;

class InvoicesController extends Controller
{
    public function getInvoicesList()
    {
        return $this->view('noadmin/Invoices');
    }

    public function getAllInvoices()
    {
        $allInvoices = new InvoicesModel();
        $Invoices = $allInvoices->readAllInvoices();
        return $this->view('noadmin/Invoices', $Invoices);
    }
}