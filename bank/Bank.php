<?php
namespace Bank;
abstract class Bank{
    public $user_name;
    public $balance;
    public $account_type;
    public static $totalAccounts = 0;
    public static $totalTransactions = 0;
    public static function getTotalAccounts(){
        return self::$totalAccounts;
    }
    public static function getTotalTransactions(){
        return self::$totalTransactions;
    }
    public function __construct($user_name,$balance) {
        $this->user_name = $user_name;
        $this->balance = $balance;
        self::$totalAccounts++;
      }
    abstract public function deposit($amount);
    abstract public function withdraw($amount);
}


?>