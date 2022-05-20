<?php

namespace app\controller;

use app\controller\Controller;
use app\model\WelcomeModel;

class WelcomeController extends Controller
{
    public function getLastInvoices()
    {
        $lastInvoices = new WelcomeModel();
        $FiveInvoices = $lastInvoices->readLastInvoices();
        
        return $this->view('welcome', $FiveInvoices);
    }

    public function getLastContact()
    {
        $lastContact = new WelcomeModel();
        $FiveContact = $lastContact->readLastInvoices();

        return $this->view('welcome', $FiveContact);
    }

    public function getLastCompanies()
    {
        $lastCompanies = new WelcomeModel();
        $FiveCompanies = $lastCompanies->readLastInvoices();

        return $this->view('welcome', $FiveCompanies);
    }
}