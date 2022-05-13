<?php

namespace app\controller;

class Controller
{
    public function view(string $view)
    {
        require "view/" . $view . ".php";
    }
}