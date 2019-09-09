<?php

/**
 * 
 */
class BANKACCOUNT {

    /**
     * 
     */
    private $holder;

    /**
     * 
     */
    private $balance;

    /**
     * 
     */
    private $interestRate;

    /**
     * 
     */
    private $currency;

    public function __construct($holder, $balance, $interestRate, $currency)
    {
        $this->holder = $holder;
        $this->balance = $balance;
        $this->interestRate = $interestRate;
        $this->currency = $currency;
    }
    /**
     * Default constructor
     */
 
    /**
     * @param $amount
     */
     public function Credit($amount) {
        $this->balance += $amount;
    }

    /**
     * @param $amount
     */
     public function Debit($amount) {
        $this->balance -= $amount;
    }

    public function setHolder($holder){
        $this->holder = $holder;
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }

    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }

    public function setCurrency($currency){
        $this->currency = $currency;
    }

    public function holder(){
        return $this->holder;
    }

    public function balance(){
        return $this->balance;
    }

    public function interestRate(){
        return $this->interestRate;
    }

    public function currency(){
        return $this->currency;
    }
    

}
?>