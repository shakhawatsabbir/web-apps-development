<?php

namespace App\classes;

class HelloWorld
{
    public $massage;
    public function __construct()
    {
        $this->massage = "Hello Bangladesh";
    }
    public function index()
    {
        echo $this->massage;
    }
}

