<?php 

//Стандартные математические операции
    $x = 10;
    $y = 20;
        echo $x + $y.'<br>';
        echo $x - $y.'<br>';
        echo $x * $y.'<br>';
        echo $x / $y.'<br>';
        echo $x % $y.'<br>';
    
    $x = $x + 10;
    $x += 10;//простая запись
    $y -= 10;
    echo $x.'<br>';
    echo $y. '<br>';

  
    $x++;//  $x += 1;
    $x--;//  $x -= 1;

//Сложные математические операции(встроены в PHP)
echo M_PI.'<br>';
echo M_E.'<br>';
//Встроенные функции
echo abs(-22).'<br>';//число по модулю, если негативное то возвращено в позитивное
echo ceil(3.1).'<br>';//округляет число к большему
echo floor(3.9).'<br>';//округляет к меньшему
echo round(3.6).'<br>';//нейтральная функция, если число ближе к 4, то и округлит к 4, а если к 3, то и к 3 округлит(достаточно логическая функция)
echo round(3.55).'<br>';
echo round(3.4).'<br>';
echo round(3.6453453453, 2).'<br>';//сколько чисел после запятой я хочу вывести
echo mt_rand(1,20).'<br>';//можно вывести рандомное число в определенном диапазоне например от 1 до 20
$rand = mt_rand(1,40).'<br>';//можно внести в переменную 
echo min(2, 5, 6, 8, 9, 14).'<br>';//находит минимальное значение среди всех указанных перменных
echo max(2, 5, 6, 8, 9, 14).'<br>';//находит максимальное значение среди всех указанных перменных
