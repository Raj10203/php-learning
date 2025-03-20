<?php
namespace Bank;

class Current extends Bank
{
    use ActionLog;
    public $limit;
    public function __construct($userName, $balance, $limit = 1000)
    {
        Bank::__construct($userName, $balance);
        $this->accounType = 'Current';
        $this->limit = $limit;
    }
    public function withdraw($amount)
    {
        $this->response['action'] = "withdraw of $amount amount";
        if ($this->balance > $amount) {
            if ($amount < $this->limit) {
                $this->response['status'] = "Success : Successfully withdrawn.";
                $this->balance -= $amount;
                Bank::$totalTransactions++;
            } else {
                $this->response['status'] = "Error : Withdraw amount exceed limit of your current account. ";
            }
        } else {
            $this->response['status'] = 'Error : Account Balance is less than your withdraw amount';
        }
        $this->add_log($this->response);
    }
}
?>