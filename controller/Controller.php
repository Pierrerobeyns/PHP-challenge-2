<?php

namespace app\controller;

class Controller
{
    public function view(string $view, array $array=null)
    {
        require "view/" . $view . ".php";
    }
}