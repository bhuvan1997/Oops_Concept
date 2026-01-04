<!-- Trait : Code reuse without inheritance, use to avoid repeated code -->

<?php

trait Logger {
    public function log($msg){
        echo "Log : ".$msg;
    }
}

class User {
    use Logger;
}

class Order {
    use Logger;
}

$user = new User();
$user->log("User Created");

$order = new Order();
$order->log("Order Created");