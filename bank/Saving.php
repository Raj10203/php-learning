<?php
namespace Bank;
use Bank\Bank;
use Bank\ActionLog;
class Saving extends Bank
{
    use ActionLog;
    public $response = array();
    public function __construct($userName, $balance)
    {
        Bank::__construct($userName, $balance);
        $this->account_type = 'saving';
        $this->response['userName'] = $userName;
    }
    public function deposit($amount)
    {
        $this->response['action'] = "deposit of $amount amount";
        $this->response['status'] = "Success : Successfully deposited.";
        $this->balance += $amount;
        Bank::$totalTransactions++;
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
        echo $this->response['status'];
        $this->add_log($this->response);
    }

    public function get_data()
    {
        return array(
            'name' => $this->user_name,
            'balance' => $this->balance,
            'account_type' => $this->account_type,
        );
    }
}
?>