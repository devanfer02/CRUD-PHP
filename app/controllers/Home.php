<?php

class Home extends Controller
{
    public function index()
    {
        $data["title"] = "Home";
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('home/index');  
        $this->view('templates/footer');
    }
}