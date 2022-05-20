<?php

namespace app\controller;

use app\controller\Controller;
use app\model\CompaniesModel;

class CompaniesController extends Controller
{
    public function getCompaniesList()
    {
        return $this->view('noadmin/Companies');
    }

    public function getNewCompanies()
    {
        return $this->view('admin/NewCompanies');
    }

    public function getAllClients()
    {
        $allClients = new CompaniesModel();
        $Clients = $allClients->readAllCompaniesClients();
        return $this->view('noadmin/Companies', $Clients);
    }

    public function getAllSuppliers()
    {
        $allSuppliers = new CompaniesModel();
        $Suppliers = $allSuppliers->readAllCompaniesSuppliers();
        return $this->view('noadmin/Companies', $Suppliers);
    }
}