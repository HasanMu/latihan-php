<?php
$arrBuah = array ("Mangga", "Apel", "Pisang", "Kedondong",
"Jeruk");
if (array_key_exists("apel", $arrBuah)):
    echo "Ada buah Kedondong di sini";
else:
    echo "Tidak ada buah Kedondong di sini";
endif;
?>