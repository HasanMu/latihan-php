<?php
    $tahun = date('Y');
    $kabisat = ($tahun%4==0) ? "Kabisat" : "Bukan Kabisat";
    echo 'Tahun <b>'.$tahun.'</b> : '.$kabisat.'';

    $a = 12004%3;
        echo $a;
    
    /*for($i=1; $i<=6; $i++){
        echo '<h'.$i.'> Bakaaa </h'.$i.'>';
        for($j=6; $j>=1; $j--){
            echo '<h'.$j.'> Bakaaa </h'.$j.'>';
        }
    }*/
?>