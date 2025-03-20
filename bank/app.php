<pre><?php 
 ini_set('display_errors', '1');
 ini_set('display_startup_errors', '1');
 error_reporting(E_ALL);

require_once('./ActionLog.php');
require_once('./Bank.php');
require_once('./Saving.php');
require_once('./Current.php');
use Bank\Bank;
use Bank\Saving;
use Bank\Current;


$savingUser = new Saving('raj', 1000);
$savingUser->withdraw(100);

$currUser = new Current('Harsh', 2000, 200);
$currUser->withdraw(50);
$currUser->deposit(50);
$savingUser->deposit(50);
$currUser->withdraw(500);
print_r($savingUser->get_data());
print_r($currUser->get_data());

echo "\nTotal Accounts : " . Bank::getTotalAccounts();
echo "\nTotal Transactions : " . Bank::getTotalTransactions();

?></pre>