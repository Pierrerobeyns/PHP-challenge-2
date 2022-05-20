<?php

namespace app\controller;

use app\controller\Controller;

class ErrorController extends Controller
{
    public function getError()
    {
        return $this->view('error');
    }
}