<?php
    function cetak_ganjil()
    {
        for ($i=10; $i <100 ; $i++) { 
            if ($i%2==1) {
                echo $i.' ';
            }
        }
    }

    cetak_ganjil();
?>