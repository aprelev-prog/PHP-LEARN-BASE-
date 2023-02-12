<?php
//можно перебирать с помощью foreach любой массив
// as обращение к ...

    $list = ["age" => 15, "name" => "Alex", "hobby" => "football"];
    $arr = [1, 3, 6, 3];
    foreach ($list as $item => $value){
        echo "Key: $item. Value: $value.<br>" ;
    }

    foreach($arr as $i=>$value){
        echo "Index: $i . Value: $value. <br>";
    }