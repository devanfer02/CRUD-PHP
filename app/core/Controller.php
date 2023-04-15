<?php

class Controller
{
    public function view($view, $data = [])
    {
        require '../app/views/' . $view . '.php';
    }
}