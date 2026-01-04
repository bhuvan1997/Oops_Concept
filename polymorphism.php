<!-- Polymorphism means same name method different work for different object -->
<!-- Interface is a rulebook, It defines what a class must do, not say how -->

<?php

interface Payment{

    public function pay();

}

class Cash implements Payment {

    public function pay()
    {
        echo "Paid by Cash";
    }

}

class UPI implements Payment {

    public function pay()
    {
        echo "Paid by UPI";
    }

}

function makePayment(Payment $p){
    $p->pay();
}

makePayment(new Cash());
makePayment(new UPI());