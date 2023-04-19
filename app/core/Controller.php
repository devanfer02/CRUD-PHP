<?php

class Controller
{
    public function view($view, $data = [])
    {
        require '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require '../app/models/' . $model . '.php';
        return new $model;
    }

    public function block()
    {
        if(!isset($_SESSION['login']) || !$_SESSION['login'])
        {
            header('Location: ' . BASEURL . '/auth/login');
            return true;
        }
        return false;
    }
}