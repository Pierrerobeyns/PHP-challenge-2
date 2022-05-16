<?php

namespace app\controller;

class Controller
{
    public function view(string $view)
    {
        require "view/" . $view . ".php";
    }
}

//     require_once 'model/selectData.php';

//    $test = selectCompany();

//    echo '<pre>';
//    var_dump($test);
//    echo '</pre>';

//    echo $test[0]['companyName'];
