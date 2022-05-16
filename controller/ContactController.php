<?php

namespace app\controller;

use app\controller\Controller;

class ContactController extends Controller
{
    public function getContactById($id)
    {
        return $this->view('noadmin/ContactDetails');
    }

    public function newContact()
    {
        return $this->view('admin/NewContact');
    }
}
