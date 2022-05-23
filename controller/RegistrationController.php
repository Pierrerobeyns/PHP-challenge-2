<?php

namespace app\controller;

use app\controller\Controller;
use app\model\RegistrationModel;
use app\model\WelcomeModel;

class RegistrationController extends Controller
{
    public function newUser()
    {
        if(isset($_POST['username']) && isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['mail']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $mail = $_POST['mail'];
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