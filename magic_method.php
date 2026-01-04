<?php

class Demo {
    public function __call($name, $arguments) {
        if ($name == 'add') {
            if (count($arguments) == 2) {
                echo $arguments[0] + $arguments[1];
            } elseif (count($arguments) == 3) {
                echo $arguments[0] + $arguments[1] + $arguments[2];
            }
        }
    }
}

$d = new Demo();
$d->add(2, 3);       // 5
$d->add(2, 3, 4);    // 9
$d->add(2, 3, 4, 4); 
