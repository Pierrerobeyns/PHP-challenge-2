<?php

namespace app\controller;

class Controller
{
    function controller($url)
    {
        require "view/" . $url .".php";
    }
}