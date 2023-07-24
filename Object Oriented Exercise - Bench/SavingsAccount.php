<?php

require_once './BankAccount.php';
class SavingsAccount extends BankAccount
{
    private $interestRate;

    public function __construct($initialBalance = 0, $interestRate = 0.02)
    {
        parent::__construct($initialBalance);
        $this->interestRate = $interestRate;
    }

    public function addInterest()
    {
        $interestAmount = $this->accountBalance * $this->interestRate;
        $this->accountBalance += $interestAmount;
    }
}
