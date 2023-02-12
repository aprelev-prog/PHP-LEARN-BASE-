<?php
// позволяет проверить одну переменную на множество значений
    $x = 10;

        switch($x){
            case 5://нельзя указывать > <, лишь проверка с той переменной с которой хотите посмотреть
                echo "Var: 5";
                break;
            case 7:
                echo "Var: 7";
                break;
             case 9:
                echo "Var: 9";
                break;
            case 6:
                echo "Var: 6";
                break;
            default://как else(если предыдущие условия не были удовлетворены)
                 echo "Default work";
                 break;
        }  
    
