<?php

class Human {

    public $name;
    public $age;

    public function talk(){
        echo "Human can talk<br>";
    }

    public function human_description(){
        echo "Human name is ".$this->name." and he is ".$this->age." Years old.<br>";
    }

    public function __construct()
    {
        echo "This is by default call<br>";
    }

}

$obj = new Human();
$obj->name = "Bhuvan Gupta";
$obj->age = 29;
$obj->human_description();
$obj->talk();