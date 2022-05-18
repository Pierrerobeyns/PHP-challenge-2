<?php

namespace app\controller;

use app\controller\Controller;
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
        return $this->view('admin/NewInvoices');
    }
}
