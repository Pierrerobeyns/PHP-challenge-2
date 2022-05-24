<?php

namespace app\controller;

session_start();

use app\controller\Controller;
use app\model\LoginModel;

class LoginController extends Controller
{
    public function loginPage()
    {
        $connected = false;
        if (!empty($_POST['username']) and !empty($_POST['password'])) {
            $getUsers = new LoginModel();
            $users = $getUsers->selectUsers();

            $username = trim(htmlspecialchars($_POST['username']));
            $password = trim(htmlspecialchars($_POST['password']));

            foreach ($users as $user) {

                if ($username === $user['username'] and $username === "jean-christian-ranu" and password_verify($password, $user['password'])) {

                    $_SESSION['GOD-MODE'] = "Jean Christian Ranu";
                    $connected = true;
                } else if ($username === $user['username'] and $username === "muriel-perrache" and password_verify($password, $user['password'])) {

                    $_SESSION['ADMIN-MODE'] = "Muriel Perrache";
                    $connected = true;
                } else if ($username === $user['username'] and password_verify($password, $user['password'])) {

                    $_SESSION['CUSTOMER'] = $username;
                    $connected = true;
                }
            }
            if ($connected == false) {
                echo "Something is wrong, chief !";
                return $this->view('login');
            } else if ($connected == true) {
                header('Location: http://localhost:8080/noadmin/invoices/1');
                // return $this->view('HomePage');
            }
        } else if (isset($_POST['username']) || isset($_POST['password'])) {
            echo "Some data are missing, chief !";
            return $this->view('login');
        } else {
            return $this->view('login');
        }
    }
}
