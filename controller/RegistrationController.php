<?php

namespace app\controller;

use app\controller\Controller;
use app\controller\CheckingData;
use app\model\RegistrationModel;
use app\model\WelcomeModel;

class RegistrationController extends Controller
{
    public function newUser()
    {
        $checkInformations = new CheckingData();
        $check = $checkInformations->checkingData($_POST['username'], $_POST['name'], $_POST['firstname'], $_POST['name'], $_POST['password']);

        if($check == true) {
            $username = $_POST['username'];
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $mail = $_POST['name'];
            $password = $_POST['password'];
            
            $newUser = new RegistrationModel();
            $newUser->addUser($username, $name, $firstname, $mail, $password);

            $lastTables = new WelcomeModel();
            $FiveInvoices = $lastTables->readLastInvoices();
            $FiveContact = $lastTables->readLastContact();
            $FiveCompanies = $lastTables->readLastCompanies();
            return $this->view('welcome', $FiveInvoices,$FiveContact,$FiveCompanies);
        } else {
            return $this->view('Registration');
        }
        
    }
}