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
            $username = $_POST['username'];
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            
            #Sanitization
            $usernameFilter = htmlspecialchars($username);
            $nameFilter = htmlspecialchars($name);
            $firstnameFilter = htmlspecialchars($firstname);
            $mailFilter = filter_var($mail, FILTER_SANITIZE_EMAIL);
            $passwordFilter = htmlspecialchars($password);

            $newUser = new RegistrationModel();
            $newUser->addUser($usernameFilter, $nameFilter, $firstnameFilter, $mailFilter, $passwordFilter);

            return $this->view('login');
        } else {
            return $this->view('Registration');
        }
        
    }
}