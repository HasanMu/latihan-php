<?php
    for ($i=1; $i < 8 ; $i++) { 
        # code...
        if($i==3){
            continue;
        }
        if ($i==6) {
            break;
        }
        echo $i.' ';
    }
?>