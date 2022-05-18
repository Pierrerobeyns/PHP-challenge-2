<?php

namespace app\controller;

use app\controller\Controller;
use app\model\ContactModel;

class ContactController extends Controller
{
    public function getContactList()
    {
        return $this->view('noadmin/Contact');
    }

    public function getAllContact()
    {
        $allContact = new ContactModel();
        //$test = $allContact->readAllContact();
        //return $this->view('noadmin/Contact', $test);
    }
}