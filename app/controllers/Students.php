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

    public function add() 
    {
        $data["title"] = "Add Student";
        $this->view('templates/head',$data);
        $this->view('templates/navbar');
        $this->view('students/add',$data);
        $this->view('templates/footer');
    }

    public function insert()
    {
        if($this->model('StudentModel')->insertStudentData($_POST) > 0)
        {
            Flasher::setFlash('Success', 'Added to Database', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
        Flasher::setFlash('Failed','Added to Database','danger');
        exit;
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
        if($this->model('StudentModel')->deleteStudentData($id) > 0)
        {
            Flasher::setFlash('Success', 'Delete from Database', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
        Flasher::setFlash('Failed','Delete from Database','danger');
        exit;
    }
}