<?php
    function luas_segitiga($alas, $tinggi)
    {
        return 1/2 * $alas *$tinggi;
    }
    
    function luas_persegiPanjang($p, $l)
    {
        return $p * $l;
    }

    $alas = 5;
    $tinggi = 10;
    echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah : ";
    echo luas_segitiga($alas, $tinggi);

echo "<br>";

    $panjang = 20;
    $lebar = 50;
echo "Luas persegi Panjang dengan panjang $panjang dan lebar $lebar adalah : ";
    echo luas_persegiPanjang($panjang, $lebar);

?>