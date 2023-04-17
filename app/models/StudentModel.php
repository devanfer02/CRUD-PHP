<?php

class StudentModel
{
    private $tableName = 'student';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStudents()
    {
        $this->db->query("SELECT * FROM $this->tableName");
        return $this->db->resultSet();
    }

    public function getStudentById($id) 
    {
        $this->db->query('SELECT * FROM ' . $this->tableName . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }

    public function insertStudentData($data)
    {
        $query = "INSERT INTO student VALUES ('',:name, :nim, :major, :email, :university)";
        $this->db->query($query);
        $this->db->bind('name', $data['name']); 
        $this->db->bind('nim', $data['nim']); 
        $this->db->bind('major', $data['major']); 
        $this->db->bind('email', $data['email']); 
        $this->db->bind('university', $data['university']); 
        
        $this->db->execute();

        return $this->db->rowCount();
    }   

    public function deleteStudentData($id)
    {
        $query = "DELETE FROM student WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}