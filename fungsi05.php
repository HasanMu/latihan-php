<?php
    function tambah_string (&$str) {
        $str = $str . ", Jakarta";
        return $str;
    }
    
    $wew = "Universitas Budi Luhur";
    echo "\$wew = $wew<br>";
    echo tambah_string ($str). "<br>";
    echo "\$wew = $wew<br>";
?>