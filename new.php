<?php

class Actor {

    public $name;
    public $movie;

    public function new_movie(){
        echo "Movie ".$this->movie." Releasing on 04 January 2026 by : ".$this->name;
    }

}

$obj = new Actor();
$obj->name = "Actor Yash";
$obj->movie = "KGF3";
$obj->new_movie();
