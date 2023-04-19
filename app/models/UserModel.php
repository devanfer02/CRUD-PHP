<?php

class UserModel
{
    private $name;
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function createUser($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $confirm = $data['confirm'];    

        if($password !== $confirm)
        {
            return;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users VALUES('', :username, :password)";

        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function verifyUser($data)
    {
        $user = $this->getUserByUsername($data['username']);
        $password = $data['password'];

        if(!isset($user))
        {   
            return false;
        }

        return password_verify($password, $user['password']);
    }

    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM users WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $username);

        return $this->db->singleSet();
    }
    
    public function getUserName()
    {
        return $this->name;
    }
}