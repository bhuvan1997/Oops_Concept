<!-- Encapsulation = keeping data safe and allowing access only through methods, It hides internal data and gives controlled access. -->

<?php

class BankAccount {

    private $balance = 0;

    public function deposit($amount){
        $this->balance += $amount;
    }

    public function getBalance(){
        return $this->balance;
    }

}

$balance = new BankAccount();
$balance->deposit(1000);
echo $balance->getBalance();