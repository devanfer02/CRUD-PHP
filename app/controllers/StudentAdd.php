<?php

class StudentAdd extends Controller
{
    public function index()
    {
        $data["title"] = "List Student";
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('studentadd/index',$data);
        $this->view('templates/footer');
    }
}