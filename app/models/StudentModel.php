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
}