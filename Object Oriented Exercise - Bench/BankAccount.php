<?php


/**
 * BankAccount
 */
class BankAccount
{
      
    /**
     * @var numeric accountBalance
     */
    protected $accountBalance;
    
    /**
     * __construct
     *
     * @param mixed initialBalance
     *
     * @return void
     */
    public function __construct($initialBalance = 0)
    {
        $this->accountBalance = $initialBalance; 
    }    

    /**
     * deposit
     *
     * @param float amount
     *
     * @return void
     */
    public function deposit(float $amount)
    {   
        if($amount < 0) {
            return false;
        }

        $this->accountBalance += $amount;
        return true;
    }

    public function withdraw(float $amount)
    {
        if($this->accountBalance < $amount) {
            return false;
        }

        $this->accountBalance -= $amount;
        return true;
    }

    public function checkBalance()
    {
        return $this->accountBalance;
    }
}
