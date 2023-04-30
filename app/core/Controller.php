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
            exit;
        }
    }

    public function methodBlock($data, $key, $page)
    {
        if(!isset($data[$key]))   
        {
            header('Location: ' . BASEURL . $page);
            exit;
        }
    }
}