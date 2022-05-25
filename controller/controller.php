<?php

namespace app\controller;

class Controller
{
    public function view(string $view, array $array1=null, array $array2=null, array $array3 = null)
    {
        require "view/" . $view . ".php";
    }
}