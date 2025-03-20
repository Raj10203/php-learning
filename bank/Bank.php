<?php
namespace Bank;
abstract class Bank{
    public $userName;
    public $balance;
    public $accounType;
    public $acountNumber;
    public static $totalAccounts = 0;
    public static $totalTransactions = 0;
    public $response = [];
    public static function getTotalAccounts(){
        return self::$totalAccounts;
    }
    public static function getTotalTransactions(){
        return self::$totalTransactions;
    }
    public function __construct($userName,$balance) {
        $this->userName = $userName;
        $this->balance = $balance;
        $this->response['userName'] = $userName;
        $this->acountNumber = ++self::$totalAccounts;
        echo "account created by $userName with initial balance: $balance \n";
      }
    // abstract public function deposit($amount);
    abstract public function withdraw($amount);
    public function deposit($amount)
    {
        $this->response['action'] = "deposit of $amount amount";
        $this->response['status'] = "Success : Successfully deposited.";
        Bank::$totalTransactions++;
        $this->balance += $amount;
    }
     public function get_data()
    {
        return array(
            'name' => $this->userName,
            'balance' => $this->balance,
            'accounType' => $this->accounType,
            'accountNumber' => $this->acountNumber
        );
    }
}
?>