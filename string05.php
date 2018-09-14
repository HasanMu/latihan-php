<?php
    echo 'Menampilkan bilangan ASCII<br>';
    for ($i=1; $i<=256; $i++) { 
        echo "<br>$i.\t".chr($i);
    }
?>