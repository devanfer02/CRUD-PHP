<?php

class Students extends Controller
{
    public function index()
    {
        $data["title"] = "List Student";
        $data["students"] = $this->model("StudentModel")->getStudents();
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('students/index',$data);
        $this->view('templates/footer');
    }
}