<?php

namespace app\controller;

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