<?php

namespace app\controller;

use app\controller\Controller;

class LoginController extends Controller
{
    public function loginPage()
    {
        return $this->view('login');
    }
}
