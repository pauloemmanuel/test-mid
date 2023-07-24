<?php

require_once './CheckingAccount.php';
require_once './SavingsAccount.php';


$savingsAccount = new SavingsAccount(1524, 0.02);
$savingsAccount->deposit(1024);
$savingsAccount->addInterest();
echo "Savings Account Balance: $" . $savingsAccount->checkBalance() . PHP_EOL;


$checkingAccount = new CheckingAccount(2512, 0.05);
$checkingAccount->withdraw(500);
echo "Checking Account Balance: $" . $checkingAccount->checkBalance() . PHP_EOL;
