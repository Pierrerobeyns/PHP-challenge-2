<?php

namespace app\controller;

use app\controller\Controller;

class WelcomeController extends Controller
{
    public function getView()
    {
        return $this->view('welcome');
    }

    
}