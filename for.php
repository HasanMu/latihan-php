<?php
    for ($i=0; $i <10 ; $i++) { 
        # code...
        echo $i.' ';
    }

    echo '<br>';

    for ($a=0; ; $a++) { 
        # code...
        if($a>10){
            break;        
        }
    echo $a.' ';
    }

    echo '<br>';

    $x = 1;
    for(; ; ){
        if($x>10){
            break;
        }
        echo $x;
        $x++;
    }

    echo '<br>';

    for($s=1; $s<=10; print $s." ", $s++);
?> 