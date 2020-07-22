<?php

class Vehicle 
{
    // atributtes
    public $brand;
    public $color;
    public $engine;
    public $factured;

    // methods
    public function getEngine ()
    {

        return $this->engine." HP";

    }
    
    public function getFactured ()
    {

        return $this->factured;

    }

}

