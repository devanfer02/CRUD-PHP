<?php

class Students extends Controller
{
    public function index()
    {
        $data["title"] = "List Students";
        $data["students"] = $this->model("StudentModel")->getStudents();
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('students/index',$data);
        $this->view('templates/footer');
    }

    public function update($id)
    {
        $data["title"] = "Update Student Detail";
        $data["students"] = $this->model("StudentModel")->getStudentById($id);
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('students/update',$data);
        $this->view('templates/footer');
    }

    public function delete($id)
    {
        $data["title"] = "Delete Student";
        $data["students"] = $this->model("StudentModel")->getStudentById($id);
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('students/index',$data);
        $this->view('templates/footer');
    }
}