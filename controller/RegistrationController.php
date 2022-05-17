<?php

namespace app\controller;

use app\controller\Controller;

class RegistrationController extends Controller
{
    public function getViewRegistration()
    {
        return $this->view('registration');
    }
}