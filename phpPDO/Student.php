<?php

class Student implements IStudent
{

    private $id;
    private $dsName;
    private $dsEmail; 

    // setters e getters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }
    
    public function getName()
    {
        return $this->dsName;
    }

    public function setName($dsName)
    {
        $this->dsName=$dsName;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->dsEmail;
    }

    public function setEmail($Email)
    {
        $this->dsEmail=$dsEmail;
        return $this;
    }
    
}