<?php 

    $a = 5;
    if($a == 7){
        echo 'no1';
    } else if($a == 6){
        echo 'no_2';
    } else{
        echo 'dont have answer'.'<br>';
    }

    //Можно делать несколько проверок внутри одного оператора


    $str = "Hello";
    $isWeatherGood = false;

        if($str != "Hello" || $isWeatherGood == false){
            echo 'First';
        }  else{
            echo 'Second';
        }
        //когда првоеряют на значение или то нам нужно чтобы хотя бы одно из условий было правильным
        //$isWeatherGood(проверяет так на true) или же !isWeatherGood(проверяет на false ), сокращенная запись
        // так же можно проверять множество проверок
        

        $str = "Hello";
        $isWeatherGood = false;

            if($str != "Hello" && $isWeatherGood == false){
                echo 'First';
            }  else{
                echo 'Second';
            }

        // оператор &&(и), если два условия будут верны то только тогда будет выводить
        // все так же можно проверять множество условий