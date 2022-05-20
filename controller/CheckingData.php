<?php

namespace app\controller;

class CheckingData
{
    public function checkingData(...$data)
    {
        foreach ($data as $check) {

            if ($check == "") {
                $check = false;
                break;
            } else {
                $check = true;
            }
        }
        return $check;
    }
}
