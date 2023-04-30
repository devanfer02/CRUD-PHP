<?php

class About extends Controller
{
    public function index()
    {
        $check = $this->block();
        $data["title"] = "About";
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
}