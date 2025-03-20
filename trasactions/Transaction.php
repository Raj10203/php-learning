<?php 
namespace trasactions;
class Transaction
{
    public $user;
    public $amount;
    public $type;
    function __construct($user, $amount, $type)
    {
        $this->user = $user;
        $this->type = $type;
        $this->amount = $amount;
    }
    public function get_data()
    {
        $array = array(
            'username' => $this->user,
            'amount' => $this->amount,
            'type' => $this->type
        );
        return $array;
    }
}
?>
