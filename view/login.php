<?php

use app\model\LoginModel;

$loginModel = new LoginModel();
$result = $loginModel->select();
echo "<pre>";
var_dump($loginModel->select());
echo "</pre>";

echo $result[0]['lastname'] . '<br>';

var_dump(gettype($loginModel->select()));

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
