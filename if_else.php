<?php
    $umur = 17;
    if($umur<=10):
        echo 'Umur anda Masih anak-anak!';
    elseif ($umur>=10&&$umur<=15):
        echo 'Umur anda Mulai Remaja';
    else:
        echo "Umur anda Mulai Dewasa";
    endif;
?>