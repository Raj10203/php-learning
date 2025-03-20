<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre><?php
    $transactions = [
        ['id' => 1, 'user' => 'Alice', 'amount' => 100, 'type' => 'deposit'],
        ['id' => 2, 'user' => 'Bob', 'amount' => 50, 'type' => 'withdrawal'],
        ['id' => 3, 'user' => 'Alice', 'amount' => 200, 'type' => 'deposit'],
        ['id' => 4, 'user' => 'Bob', 'amount' => 30, 'type' => 'deposit']
    ];
    $arr = array();
    $user_records = array();
    $user_transection = array();
    foreach ($transactions as $key => $value) {
        if ($value['type'] == 'withdrawal') {
            $user_records[$value['user']]['balance'] -= $value['amount'];
            $user_records[$value['user']]['withdrawal'] += $value['amount'];
            $user_records[$value['user']]['deposit'] += 0;
        } else {
            $user_records[$value['user']]['balance'] += $value['amount'];
            $user_records[$value['user']]['withdrawal'] += 0;
            $user_records[$value['user']]['deposit'] +=  $value['amount'];
        }
        
        $user_transection[$value['user']][] = $value;
        array_push($arr, $value['user']);
    }
    $user_list = array_unique($arr);
    // print_r($user_list);
    // print_r($user_records);
    // print_r($user_transection);
    $max_trasection = array();
    foreach ($user_transection as $key => $value) {
        $user_records[$key]['max-transection'] = max(array_column($value, 'amount'));
    }
    // print_r($user_records);
    foreach ($user_records as $key => $value) {
        echo "User " . "$key" . " details :- \n";
        foreach ($value as $k => $v) {
            echo "\t $k = $v \n";
        }
        echo "\n";
    }

   
    ?>

</pre>
</body>
</body>

</html>