<?php

class Human {
    
    public $brand;
    public $name;


    public function __construct($myBrand , $myname)
    {
        $this->brand = $myBrand;
        $this->name = $myname;
    }

    public function sayHi()
    {
        // echo "Asssalamualaikum . <br>";
        $this->sayObje();
    }

    public function sayObje()
    {
        if($this->name)
        {
            echo "Hi , I am {$this->brand} , also my age is {$this->name}.<br>";
        }else{
            echo "Hi, I am {$this->brand} and I don't know my age";
        }
    }
}

$human = new Human("iPhone" , "16pro");
$human2 = new Human("Samsung" , "S23");
$human->sayHi();
$human2->sayHi();


echo "hi";