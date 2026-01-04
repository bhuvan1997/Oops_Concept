<!-- Inheritance allows a child class to use parent class properties and methods -->

<?php

class Vehicle {

    public function start(){
        echo "Vehicle has been started";
    }

}

class Bike extends Vehicle {}

$obj = new Bike();
$obj->start();