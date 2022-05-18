<?php

namespace app\controller;

use app\controller\Controller;
use app\model\CompaniesModel;

class CompaniesController extends Controller
{
    public function getCompaniesById($id)
    {
        $companies = new CompaniesModel();
        $companiesDetails = $companies->getCompaniesDetail($id);
        if ($companiesDetails == false) {
            return $this->view('error');
        } else {
            return $this->view('noadmin/CompaniesDetails', $companiesDetails);
        }
    }
}
