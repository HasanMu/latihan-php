<?php
    $uang = 50000;
    $makan = 25000;
    $minum = 10000;
    $sisa = ($uang - $makan) - $minum;
    $pembelian = $makan+$minum;

    echo 'Uang Hari Adalah Rp.'.$uang.'<br>';

    if($sisa>=1):
        echo 'Makanan  : Rp.'.$makan.' <br>Minuman  : Rp.'.$minum.'<br>';
        echo 'Hari menghabiskan uang sebesar Rp. '.$pembelian.'<br>';
        echo 'Sisa uang Hari Adalah Rp.'.$sisa.'<br>';
        echo 'Hari <b>Bukan Pemboros!</b> <br>';
    elseif($sisa<1):
        echo 'Membeli Makanan dengan harga Rp.'.$makan.' dan minuman Rp.'.$minum.'<br>';
        echo 'Hari menghabiskan uang sebesar Rp. '.$pembelian.'<br>';
        echo 'Sisa uang Hari Adalah Rp.'.$sisa.'<br>';
        echo 'Hari <b>Pemboros!</b> <br>';
    endif;
?>