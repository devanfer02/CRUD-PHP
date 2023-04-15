<?php

class UserModel
{
    private $name = 'Devan';
    
    public function getUser()
    {
         return $this->name;
    }
}