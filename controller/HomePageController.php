<?php

namespace app\controller;

use app\controller\Controller;

class HomePageController extends Controller
{
    public function homePage()
    {
        return $this->view('HomePage');
    }
}
