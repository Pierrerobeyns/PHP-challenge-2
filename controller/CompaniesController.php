<?php

namespace app\controller;

use app\controller\Controller;
use app\model\CompaniesModel;
use app\model\WelcomeModel;

class CompaniesController extends Controller
{
    public function getNewCompanies()
    {
        return $this->view('admin/NewCompanies');
    }

    public function getAllTableCompanies()
    {
        $allCompanies = new CompaniesModel();
        $Suppliers = $allCompanies->readAllCompaniesSuppliers();
        $Clients = $allCompanies->readAllCompaniesClients();
        return $this->view('noadmin/Companies', $Suppliers, $Clients);
    }

    public function addNewCompanies() 
    {
        if(!empty($_POST['newcompany']) && !empty($_POST['tvanumber']) && !empty($_POST['phone']) && !empty($_POST['companytype'])) {
            $newcompany = htmlspecialchars($_POST['newcompany']);
            $tvanumber = htmlspecialchars($_POST['tvanumber']);
            $phone = htmlspecialchars($_POST['phone']);
            $companytype = htmlspecialchars($_POST['companytype']);

            $newCompanies = new CompaniesModel();
            $newCompanies->createNewCompanies($newcompany, $tvanumber, $phone, $companytype);

            $lastTables = new WelcomeModel();
            $FiveInvoices = $lastTables->readLastInvoices();
            $FiveContact = $lastTables->readLastContact();
            $FiveCompanies = $lastTables->readLastCompanies();
            return $this->view('welcome', $FiveInvoices,$FiveContact,$FiveCompanies);
        } else {
            return $this->view('admin/NewCompanies');
        }
    }
}