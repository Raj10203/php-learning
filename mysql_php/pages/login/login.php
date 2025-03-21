<pre><?php
session_start();
require_once('../../conf/db.php');
require_once('../../classes/User.php');

use Mysql_php\Classes\User;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$response = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailOrUserName = test_input($_POST['emailOrUserName']);
    $password = hash("sha256", test_input($_POST['password']));
    echo $password . "\n";

    $user = new User($conn);
    print_r($dbPass = $user->getPasswordOfSingleUser($emailOrUserName));
    if ($password == $dbPass) {
        header('location: ../../pages/dashboard');
        $_SESSION['invalid-credentials'] = "";
    } else {
        $_SESSION['invalid-credentials'] = 'Incorrenct credentials';
        header('location: ../../public');
    }
}

?></pre>