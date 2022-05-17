<?php

namespace app\controller;

use app\controller\Controller;

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
}