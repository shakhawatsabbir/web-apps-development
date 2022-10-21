<?php

namespace App\classes;

class hello
{
    public $x,$y;

    public function __construct()
    {
        $this->x = 10;
        $this->y = 20;
    }

    public function index(){
        echo $this->x + $this->y;
        echo "<br>";
        echo $this->x - $this->y;
        echo "<br>";
        echo $this->x * $this->y;
        echo "<br>";
        echo $this->x / $this->y;
        echo "<br>";
        echo $this->x % $this->y;
        echo "<br>";
        echo $this->x ++ ;
        echo "<br>";
        echo ++$this->x ;
        echo "<br>";
        echo $this->x -- ;
        echo "<br>";
        echo --$this->x  ;
        echo "<br>";
    }
}