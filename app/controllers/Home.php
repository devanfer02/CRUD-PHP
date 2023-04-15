<?php

class Home extends Controller
{
    public function index()
    {
        $data["title"] = "Home";
        $data["name"] = $this->model('UserModel')->getUser();
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('home/index',$data);  
        $this->view('templates/footer');
    }
}