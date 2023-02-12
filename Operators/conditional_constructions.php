<?php
 //оператор if
    $a = 5;
    $string = "H";

    if($a == 5){ //для проверки сразу == вместо =
        echo '$a = 5'.'<br>';
    }

    if($string == "Hello"){
        echo '$string = Hello'.'<br>';
    }

  
//оператор if else

    if($string == "H"){
        echo '$string = Hello'.'<br>';
    } else {
        echo "no".'<br>';
    }
    //так же спокойно можно писать сколько угодно кода, но если у нас только одна строчка внутри if как в примере то можно не ставить фигурные скобки

//оператор else if
    if($string == "He")
        echo 'YES';
        else if($a == 5){
            $str = "yes".'<br>';
            echo $str;
        }
    else 
        echo "no".'<br>';

//Можно делать несколько проверок внутри одного оператора

     
        