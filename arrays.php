<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php

    // $arr = ['first name'=> 'Raj', 'midle name' => 'Rameshbhai', 'Last name' => 'Patel','f','f'];
    // $arr = array('key1' => 'value1', 'key2' => 'value2');
    // $arr+=["color" => "red", "year" => 1964];
    
    // array_push($arr,"Orange", "Kiwi", "Lemon" );
    
    // // foreach ($arr as $x =>$y ) {
    // //     echo "$x: $y<br>";
    // // }
    // print_r($arr);
    // // array_splice($arr,6, 1);
    // // print_r($arr);
    // unset($arr[0], $arr['color']);
    print_r($arr);
    array_shift($arr);
    print_r($arr);

    // $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    // ksort($cars);
    // print_r($cars);
    // $newarray = array_diff($cars, ["Ford", 1964]);
    
    // print_r($newarray);
    // $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
    // print_r(array_chunk($cars,2));
    // $a = array(
    //     array(
    //       'id' => 5698,
    //       'first_name' => 'Peter',
    //       'last_name' => 'Griffin',
    //     ),
    //     array(
    //       'id' => 4767,
    //       'first_name' => 'Ben',
    //       'last_name' => 'Smith',
    //     ),
    //     array(
    //       'id' => 3809,
    //       'first_name' => 'Joe',
    //       'last_name' => 'Doe',
    //     )
    //   );
    
    //   $last_names = array_column($a, 'last_name');
    //   print_r($last_names);
    // $fname = array("Peter", "Ben", "Joe");
    // $age = array("35", "37", "43");
    // $c = array_combine($fname, $age);
    // print_r($c);
    // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // $a2=array("av"=>"red","b"=>"green","d"=>"yellow");
    
    // $result=array_diff_assoc($a1,$a2);
    // print_r($result);
    // function myfunction($a,$b)
    // {
    // if ($a===$b)
    //   {
    //   return 0;
    //   }
    //   return ($a>$b)?1:-1;
    // }
    
    // $a1=array("a", "red", "b", "green");
    // $a2=array("d"=>"red","b"=>"green","e"=>"blue");
    // $result=array_diff_uassoc($a1,$a2,"myfunction");
    // print_r($result);
    
    // $keys=array("a","b","c","d");
    // $a2=array_combine($keys,$a1);
    // print_r($a2);
    
    // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // $a2=array("a"=>"redv","b"=>"greenv","c"=>"bluev");
    
    // $result=array_keys($a2);
    // print_r($result);
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    ?>
    </pre>
</body>

</html>