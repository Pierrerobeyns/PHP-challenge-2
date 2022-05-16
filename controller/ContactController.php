<?php

namespace app\controller;

class ContactController extends Controller
{
    public function getContactList()
    {
        return $this->view('noadmin/Contact');
    }
}