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
}
