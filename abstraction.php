<!-- Abstraction means show only neccessary details hide complex logics -->
<!-- Abstraction can be done by 2 ways : Abstract Class, Interface -->
<!-- Object of abstract class cannot be created -->

<?php

abstract class Payment {

    // only rule
    abstract public function pay($amount);

    // Normal Code
    public function paymentSuccess(){
        echo "Payment Successfull<br>";
    }
    
}

class UPI extends Payment {

    public function pay($amount)
    {
        echo "Paid {$amount} using UPI<br>";
    }

}

class Card extends Payment {

    public function pay($amount)
    {
        echo "Paid {$amount} using Card<br>";
    }

}

$upi = new UPI();
$upi->pay(1000);
$upi->paymentSuccess();

$card = new Card();
$card->pay(2000);
$card->paymentSuccess();