<?php 
class Constructor_destructor{
    public $name;
    public function __construct() {
        echo "this is constructor.";
    }
    public function __destruct() {
        echo "this is destructor.";
    }
}
$obj = new Constructor_destructor();
?>