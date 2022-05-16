<?php

namespace app\controller;

use app\controller\Controller;

class InvoicesController extends Controller
{
    public function getInvoiceById($id)
    {
        return $this->view('noadmin/InvoicesDetails');
    }

    public function newInvoice()
    {
        return $this->view('admin/NewInvoices');
    }
}
