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
        $allSuppliers = new CompaniesModel();
        $Suppliers = $allSuppliers->readAllCompaniesSuppliers();
        $Clients = $allSuppliers->readAllCompaniesClients();
        return $this->view('noadmin/Companies', $Suppliers, $Clients);
    }
}