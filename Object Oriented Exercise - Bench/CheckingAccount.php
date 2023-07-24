<?php 

require_once './BankAccount.php';
class CheckingAccount extends BankAccount
{
    private $transactionFee;

    public function __construct($initialBalance = 0, $transactionFee = 0.1)
    {
        parent::__construct($initialBalance);
        $this->transactionFee = $transactionFee;
    }

    public function withdraw($amount)
    {
        $feeAmount = $amount * $this->transactionFee;
        $totalAmount = $amount + $feeAmount;

        if ($totalAmount > 0 && $this->accountBalance >= $totalAmount) {
            $this->accountBalance -= $totalAmount;
            return true;
        }
        return false;
    }
}
