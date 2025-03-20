<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre><?php
        include('./Users.php');
        use trasactions\Users;
        
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        // require 'user.php';
        $user = [
            'alice' => new Users('Alice'),
            'bob' => new Users('Bob')
        ];

        // $transactions = [
        //     new Transaction('Alice', 100, ''),
        //     new Transaction('Bob', 50, 'withdrawal'),
        //     new Transaction('Alice', 200, 'deposit'),
        //     new Transaction('Bob', 30, 'deposit'),
        // ];
        
        $user['alice']->set_transection(100, 'deposit');
        $user['alice']->set_transection(1000, 'withdrawal');

        print_r($user['alice']->get_max_transection()->get_data());
        echo $user['alice']->get_total_deposites_withdrawal('withdrawal');

        print_r($user['alice']->get_data());
        ?>
    </pre>

</body>

</html>