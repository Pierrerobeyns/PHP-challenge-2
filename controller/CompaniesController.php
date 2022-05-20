<?php

namespace app\controller;

use app\controller\Controller;
use app\model\CompaniesModel;

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
}