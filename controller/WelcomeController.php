<?php

namespace app\controller;

class WelcomeController extends Controller
{
    public function getView()
    {
        return $this->view('welcome');
    }
}