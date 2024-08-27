<?php
abstract class Account {
    protected $balance;

    abstract public function deposit($amount);
    abstract public function withdraw($amount);
    
    public function getBalance() {
        return $this->balance;
    }
}
?>
