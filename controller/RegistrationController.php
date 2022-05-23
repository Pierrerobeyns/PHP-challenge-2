<?php

namespace app\controller;

use app\controller\Controller;
use app\model\RegistrationModel;
use app\model\WelcomeModel;

class RegistrationController extends Controller
{
    public function newUser()
    {
        if(!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['mail']) && !empty($_POST['password'])) {
            $username = htmlspecialchars($_POST['username']);
            $name = htmlspecialchars($_POST['name']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $mail = htmlspecialchars($_POST['mail']);
            $password = htmlspecialchars($_POST['password']);
            
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