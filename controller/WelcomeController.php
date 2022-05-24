<?php

namespace app\controller;

use app\controller\Controller;
use app\model\WelcomeModel;

class WelcomeController extends Controller
{
    public function getTableWelcome()
    {
        $lastTables = new WelcomeModel();
        $FiveInvoices = $lastTables->readLastInvoices();
        $FiveContact = $lastTables->readLastContact();
        $FiveCompanies = $lastTables->readLastCompanies();
        
        return $this->view('welcome', $FiveInvoices,$FiveContact,$FiveCompanies);
    }
}