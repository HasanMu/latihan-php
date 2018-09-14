<?php
    if (isset($_POST['pilih'])) {
        $jurusan = $_POST['jurusan'];
        echo 'Jurusan anda adalah : <b>'.$jurusan.'</b>';
    }
?>