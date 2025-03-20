<pre><?php 
 ini_set('display_errors', '1');
use Bank\Bank;
use Bank\Current;
 ini_set('display_startup_errors', '1');
 error_reporting(E_ALL);

require_once('./ActionLog.php');
require_once('./Bank.php');
require_once('./Saving.php');
require_once('./Current.php');
use Bank\Saving;


$savingUser = new Saving('raj', 1000);
$savingUser->withdraw(100);
print_r($savingUser->get_data());

$currUser = new Current('Harsh', 2000, 200);
$currUser->withdraw(50);
print_r($currUser->get_data());

echo "\nTotal Accounts : " . Bank::getTotalAccounts();
echo "\nTotal Transactions : " . Bank::getTotalTransactions();

?></pre>