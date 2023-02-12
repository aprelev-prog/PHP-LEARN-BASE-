<?php 
//break
    for($el = 100; $el > 10; $el/=2){
        if($el<50)
            break;
        
        echo $el. '<br>';
    }


//continiue - не выходит из цикла а все что будет прописано после continiue, обратно возвращается в круг цикла
    for($con = 100; $con > 10; $con/=2){
        if($con<15)
            break;

        if($con % 2 == 0)
            continue;
        
        echo $con. '<br>';
    }

