<?php

namespace app\controller;

use app\controller\Controller;

class CompaniesController extends Controller
{
    public function getCompaniesById($id)
    {
        return $this->view('noadmin/CompaniesDetails');
    }
}
