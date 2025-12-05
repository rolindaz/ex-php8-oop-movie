<?php

class Genre
{
    //   -> all'interno della classe sono dichiarate delle variabili d'istanza

    public $name;
    public $description;

    // all'interno della classe è definito un costruttore

    function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }
}
