<?php
    $warna = array('Blue', 'Black', 'Red', 'Yellow', 'Green');

    echo 'Menampilkan Isi Array dengan for : <br>';
    for ($i=0; $i <count($warna) ; $i++) { 
        echo "Do you like <font color=".$warna[$i].">". $warna[$i]
        ."</font> ?<br>";    
    }

    echo 'Menampilkan Array dengan foreach : <br>';
    foreach ($warna as $warna) {
        echo "Do you Like <font color=".$warna.">".$warna."</font> ? <br>";
    }
?>