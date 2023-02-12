<?php
//функции небольшие подпрограммы на которые мы можем ссылаться, чтобы постоянно не прописываться одно и тоже
// функция ничего из себя не представляет до ее вызова  
        


//function space для того чтобы постонно не прописывать перенос строки
        function space($space){
            echo "$space<br>";
        }

 echo "Если параметр пуст:<br>";
        function info(){
                echo "info printed <br>";
            }
            

        info();
        info();
 
        echo "Если в параметр что либо передаем, можем передать что угодно:<br>";
        function exit_in_parametr($word){
            echo "$word <br>";
            
        }

        exit_in_parametr(4);
        exit_in_parametr("Hello");
        exit_in_parametr(4.73);
        exit_in_parametr(true);


        echo "Можно работать с любым количеством параметров, а так же можем вызывать другие функции по типу info:<br>";
        function math($x, $y){
            $rest = $x + $y;
            //info($rest);
            // return $x+$y; можно было записать так
            return $rest;// для того чтобы фунция выполнилась, для этого и возвращаем значение с помощью return
            echo $rest. '<br>';
        }

        $res1 = math(4, 6);//помещаем в переменную значение вычеслений функции внутрь переменной используя другую функцию для переноса стрки
        $res2 = math(15, 24);
        $res3 = math(10, 8);
        space($res1);
        space($res2);
        space($res3);
             

            echo "///////////////////////////////////////////////";
            echo "///////////////////////////////////////////////";
            echo "///////////////////////////////////////////////";
            echo "///////////////////////////////////////////////<br>";

        function summary($arr){//перебираем все элементы и подсчитываем ее
            $summa = 0;
                foreach ($arr as $value){
                    $summa += $value;
                }
                    return $summa;
        }

            $list = [5, 7, 3];
            echo summary($list)."<br>";
            echo summary([3, 2, 1])."<br>";
            
;
        