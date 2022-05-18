<?php

namespace app\controller;

use app\controller\Controller;
use app\model\ContactModel;

class ContactController extends Controller
{
    public function getContactById($id)
    {
        $contact = new ContactModel();
        $contactDetail = $contact->getContactDetail($id);
        if ($contactDetail == false) {
            return $this->view('error');
        } else {
            return $this->view('noadmin/ContactDetails', $contactDetail);
        }
    }

    public function newContact()
    {
        return $this->view('admin/NewContact');
    }
}
