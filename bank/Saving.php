<?php
namespace Bank;
class Saving extends Bank
{
    use ActionLog;
    public function __construct($userName, $balance)
    {
        Bank::__construct($userName, $balance);
        $this->accounType = 'Saving';
    }

    public function withdraw($amount)
    {
        $this->response['action'] = "withdraw of $amount amount";
        if ($this->balance > $amount) {
            $this->response['status'] = "Success : Successfully withdrawn.";
            $this->balance -= $amount;
            Bank::$totalTransactions++;
        } else {
            $this->response['status'] = 'Error : Account Balance is less than your withdraw amount';
        }
        $this->add_log($this->response);
    }
}
?>