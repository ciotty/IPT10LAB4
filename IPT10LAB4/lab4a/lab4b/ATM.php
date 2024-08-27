<?php
class ATM {
    public function withdraw($account, $amount) {
        if ($account->getBalance() >= $amount) {
            $account->withdraw($amount);
            return true;
        }
        return false;
    }

    public function deposit($account, $amount) {
        $account->deposit($amount);
    }
}
?>
