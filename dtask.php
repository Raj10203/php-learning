<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$arr = ['cash' => 1000, 'deposite'=> 200, 'rec' => 3000];
$prifix = 'total';
foreach ($arr as $key => &$value) {
    ${$prifix . ucfirst($key)} = &$value;
    // echo ucfirst($value);
}
$arr['cash'] = 120;
var_dump(value: $totalCash);



?>