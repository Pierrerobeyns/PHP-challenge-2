<?php

namespace app\controller;

class InvoicesController extends Controller
{
    public function getInvoicesList()
    {
        return $this->view('noadmin/Invoices');
    }
}