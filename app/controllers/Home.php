<?php

class Home extends Controller
{
    public function index()
    {
        $check = $this->block();
        $data["title"] = "Home";
        $data["name"] = $this->model('UserModel')->getUserName();
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('home/index',$data);  
        $this->view('templates/footer');
    }
}