<?php
    function tambah_string($str)
    {
        
        $str= $str.", Jakarta";
        return $str; 
    }

    $str= "Universitas Budi Luhur";
    echo "\$str= $str<br>";
    echo tambah_string($str)."<br>";
    echo " 15 Desember, $str<br>";

    echo "\$str = $str<br>";
    
    echo "<hr>";

//kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk

    function tambah_string1(&$str1) {
        $str1 = $str1 . ", Jakarta";
        return $str1;

    }
    
    $str1= "Universitas Budi Luhur";
    echo "\$str= $str1<br>";
    echo tambah_string1($str1). "<br>";
    echo " 15 Desember, $str1<br>";
    echo "\$str1 = $str1<br>";
?>