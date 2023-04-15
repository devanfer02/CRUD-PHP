<?php

class LogChanges extends Controller
{
    public function index()
    {
        $data["title"] = "List Student";
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('logchanges/index',$data);
        $this->view('templates/footer');
    }
}