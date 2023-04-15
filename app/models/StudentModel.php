<?php

class StudentModel
{
    private $dbHandler;
    private $stament;

    public function __construct()
    {
        $dataSourceName = 'mysql:host=localhost;dbname=crudphpmvc';

        try 
        {
            $this->dbHandler = new PDO($dataSourceName, 'root','');
        } catch (PDOException $error)
        {
            die($error->getMessage());
        }
    }

    public function getStudents()
    {
        $this->stament = $this->dbHandler->prepare('SELECT * from student');
        $this->stament->execute();
        return $this->stament->fetchAll(PDO::FETCH_ASSOC);
    }
}