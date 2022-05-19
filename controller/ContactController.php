<?php

namespace app\controller;

use app\controller\Controller;
use app\model\ContactModel;

class ContactController extends Controller
{
    public function getAllContact()
    {
        $allContact = new ContactModel();
        $Contact = $allContact->readAllContact();
        return $this->view('noadmin/Contact', $Contact);
    }
}