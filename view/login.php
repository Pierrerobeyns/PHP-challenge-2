<?php
use app\model\LoginModel;

$data = new LoginModel();
$data->select();

var_dump($data);

echo "Success";