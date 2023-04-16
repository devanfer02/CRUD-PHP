<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;

    private $dbhandler;
    private $statement;

    public function __construct()
    {
        $dataSourceName = 'mysql:host=' . $this->host . ';dbname='.  $this->name; 

        $option = 
        [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try 
        {
            $this->dbHandler = new PDO($dataSourceName, $this->user, $this->pass, $option);
        } catch (PDOException $error)
        {
            die($error->getMessage());
        }
    }

    public function query($query)
    {
        $this->statement = $this->dbHandler->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if(type == null) 
        {
            $type = setType($value);
        }

        $this->statement->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->statement->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function singleSet()
    { 
        $this->execute(); 
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    private function setType($value)
    {
        $type = PDO::PARAM_STR;
        switch (true)
        {
            case is_int($value) :
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value) :
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value) :
                $type = PDO::PARAM_NULL;
                break;
            default :
                $type = PDO::PARAM_STR;
        }
        return $type;
    }
}