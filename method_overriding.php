<!-- Concept allows a child class to provide a specific implementation of a method that is already defined in its parent class -->

<?php

class Father {
    public function work() {
        echo "Farmer";
    }
}

class Son extends Father {
    public function work() {
        echo "Engineer";
    }
}

$s = new Son();
$s->work();
