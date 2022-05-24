<?php

namespace app\controller;

use app\controller\Controller;
use app\controller\CheckingData;
use app\controller\CompaniesController;
use app\model\ContactModel;
use app\model\WelcomeModel;

class ContactController extends Controller
{
    public function getAllContact()
    {
        $allContact = new ContactModel();
        $Contact = $allContact->readAllContact();
        return $this->view('noadmin/Contact', $Contact);
    }

    public function getContactById($id)
    {
        $contact = new ContactModel();
        $contactDetail = $contact->getContactDetail($id);
        if ($contactDetail == false) {
            return $this->view('error');
        } else {
            return $this->view('noadmin/ContactDetails', $contactDetail);
        }
    }

    public function newContact()
    {
        $check = new CheckingData();
        $bool = $check->checkingData($_POST['name'], $_POST['firstname'], $_POST['phone'], $_POST['email'], $_POST['nameCompanies']);

        $getIdCompanies = new CompaniesController();
        $idCompagnies = $getIdCompanies->getCompaniesId();
        if ($bool == true) {

            $firstName = trim(htmlspecialchars($_POST['name']));
            $name = trim(htmlspecialchars($_POST['firstname']));
            $phone = trim(htmlspecialchars($_POST['phone']));
            $emailTrim = trim(htmlspecialchars($_POST['email']));
            $emailFilter = filter_var($emailTrim, FILTER_SANITIZE_EMAIL);
            $company = $_POST['nameCompanies'];

            $newContact = new ContactModel();
            $newContact->newContact($name, $firstName, $phone, $emailFilter, $company);
            $lastTables = new WelcomeModel();
            $FiveInvoices = $lastTables->readLastInvoices();
            $FiveContact = $lastTables->readLastContact();
            $FiveCompanies = $lastTables->readLastCompanies();
            return $this->view('welcome', $FiveInvoices,$FiveContact,$FiveCompanies);
        } else {
            return $this->view('admin/NewContact', $idCompagnies);
        }
    }
}
