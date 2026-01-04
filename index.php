<?php

class Human {

    public $name;
    public $age;

    public function talk(){
        echo "Human can talks";
    }

    public function human_description(){
        echo "Human name is ".$this->name." and he is ".$this->age." Years old.";
    }

}

$obj = new Human();
$obj->name = "Bhuvan Gupta";
$obj->age = 29;
$obj->human_description();