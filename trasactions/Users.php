<?php
namespace trasactions;
include('./Transaction.php');
use trasactions\Transaction;
class Users
{
    public $user;
    public $balance;
    public $transection_objects = [];
    function __construct($user, $balance = 0)
    {
        $this->user = $user;
        $this->balance = $balance;
    }
    public function set_transection($amount, $type)
    {
        $this->transection_objects[] = new Transaction($this->user, $amount, $type);
        $this->balance = ($type == 'deposit') ? $this->balance + $amount : $this->balance - $amount;
    }

    public function get_max_transection()
    {
        $max_transection = 0;
        foreach ($this->transection_objects as $key => $value) {
            if ($value->amount > $this->transection_objects[$max_transection]->amount) {
                $max_transection = $key;
            }
        }
        return $this->transection_objects[$max_transection];
    }

    public function get_total_deposites_withdrawal($type)
    {
        $sum = 0;
        foreach ($this->transection_objects as $key => $value) {
            $sum += ($value->type == $type) ? $value->amount : 0;
        }
        return $sum;
        // return $this->transection_objects[$max_transection];
    }
    public function get_data()
    {
        $arr = array(
            'username' => $this->user,
            'balance' => $this->balance
        );
        return $arr;
    }
}

?>