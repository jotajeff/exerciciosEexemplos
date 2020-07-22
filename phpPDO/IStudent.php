<?php

interface IStudent
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($dsName);
    public function getEmail();
    public function setEmail($dsEmail);
}