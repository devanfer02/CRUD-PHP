<?php

class Auth extends Controller
{

    public function login()
    {
        $data["title"] = "Login Page";
        $this->view('templates/head', $data);
        $this->view('auth/login', $data);
    }

    public function register()
    {
        $data["title"] = "Register Page";
        $this->view('templates/head', $data);
        $this->view('auth/register', $data);
    }

    public function registerUser()
    {
        $success = $this->model('UserModel')->createUser($_POST) > 0;

        if($success)
        {
            $user  = $_POST['username'];
            $_SESSION['name'] = $user;
            $_SESSION['login'] = true;
            header('Location: ' . BASEURL . '/');
            exit;
        }
    }

    public function loginUser()
    {
        $success = $this->model('UserModel')->verifyUser($_POST);

        if($success)
        {
            $user  = $_POST['username'];
            $_SESSION['name'] = $user;
            $_SESSION['login'] = true;
            header('Location: ' . BASEURL . '/');
            exit;
        }
    }

    public function logout()
    {
        $_SESSION = [];
        session_unset();
        session_destroy();
        if(!session_id()) session_start();

        header('Location: ' . BASEURL . '/auth/login');
    }
}
