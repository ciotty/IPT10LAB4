<?php
class Bank {
    private $accounts = array();

    public function addAccount($account) {
        $this->accounts[] = $account;
    }

    public function getAccounts() {
        return $this->accounts;
    }
}
?>
