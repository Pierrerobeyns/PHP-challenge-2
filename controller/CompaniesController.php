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
        return $this->view('noadmin/Companies', $Clients, $Suppliers);
    }

    public function addNewCompanies() 
    {
        if(!empty($_POST['newcompany']) && !empty($_POST['tvanumber']) && !empty($_POST['phone']) && !empty($_POST['companytype']) && !empty($_POST['country'])) {
            $newcompany = $_POST['newcompany'];
            $country=$_POST['country'];
            $tvanumber = $_POST['tvanumber'];
            $phone = $_POST['phone'];
            $companytype = $_POST['companytype'];

            #Sanitization
            $newcompanyFilter = htmlspecialchars($newcompany);
            $countryFilter = htmlspecialchars($country);
            $tvanumberFilter = htmlspecialchars($tvanumber);
            $phoneFilter = htmlspecialchars($phone);
            $companytypeFilter = htmlspecialchars($companytype);

            $newCompanies = new CompaniesModel();
            $newCompanies->createNewCompanies($newcompanyFilter, $countryFilter, $tvanumberFilter, $phoneFilter, $companytypeFilter);

            $lastTables = new WelcomeModel();
            $FiveInvoices = $lastTables->readLastInvoices();
            $FiveContact = $lastTables->readLastContact();
            $FiveCompanies = $lastTables->readLastCompanies();
            return $this->view('welcome', $FiveInvoices,$FiveContact,$FiveCompanies);
        } else {
            return $this->view('admin/NewCompanies');
        }
    }

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

    public function getCompaniesId()
    {
        $debug = new CompaniesModel();
        $id = $debug->getCompaniesID();
        return $id;
    }
}

