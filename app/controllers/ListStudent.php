<?php

class ListStudent extends Controller
{
    public function index()
    {
        $data["title"] = "List Student";
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('list/index',$data);
        $this->view('templates/footer');
    }
}