<?php
    $nilai1 = array('Ani' => 80, 'Otim' => 90, 'Ana' => 75, 'Budi' => 85);
    echo 'Menampilkan array dengan foreach : <br>';
    foreach ($nilai1 as $nama => $nilai) {
        echo " Nilai $nama =  $nilai<br>";
    }

    reset ($nilai1);
        echo "<br>Menampilkan isi array dengan while dan list : <br>";
        while (list($nama, $nilai) = each($nilai1)) {
            echo "Nilai $nama => $nilai<br>";
        }
?>