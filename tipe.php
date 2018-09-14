<?php
    $nim = 1234567890;
    $nama = 'Hasan Muhammad';
    $umur = 16;
    $nilai = 87.25;
    $status = true;
    echo "NIM : ".$nim."<br>";
    echo "Nama : ".$nama."<br>";
    print "Umur : ".$umur."<br>";
    printf("Nilai : %.2f<br>", $nilai);
    if($status) {
        echo "Status : Aktif";
    } else {
        echo "Status : Tidak Aktif ";
    }
?>