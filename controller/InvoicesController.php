<?php

namespace app\controller;
use app\controller\Controller;

class InvoicesController extends Controller
{
    public function getInvoicesList()
    {
        return $this->view('noadmin/Invoices');
    }
}