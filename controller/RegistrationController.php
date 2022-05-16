<?php

namespace app\controller;

class RegistrationController extends Controller
{
    public function getViewRegistration()
    {
        return $this->view('registration');
    }
}