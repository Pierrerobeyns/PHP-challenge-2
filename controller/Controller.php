<?php

namespace app\controller;

class Controller
{
    public function view(string $view, array $array = null, array $array2 = null)
    {
        require "view/" . $view . ".php";
    }
}
