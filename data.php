<?php
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $alamat = nl2br($_POST['alamat']);
    $jk = $_POST['jenis_kelamin'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $email = $_POST['email'];
    $orang_tua = $_POST['orang_tua'];
    $nilai = $_POST['nilai_ijazah'];

    if (isset($_POST['kirim'])) {
        echo 'Nama : <b>'.$nama.'</b><br>';
        echo 'NIS  : <b>'.$nis.'</b><br>';
        echo 'Alamat   : <b>'.$alamat.'</b><br>';
        echo 'Jenis kelamin : <b>'.$jk.'</b><br>';
        echo 'Agama : <b>'.$_POST['agama'].'</b><br>';
        
    
    echo 'Asal sekolah  : <b>'.$asal_sekolah.'</b><br>';
    echo 'Email : <b>'.$email.'</b><br>';
    echo 'Nama Orang Tua/Wali   : <b>'.$orang_tua.'</b><br>';
    echo 'Mata pelajaran    : <b>'.'</b>';
    if (isset($_POST['mata_pelajaran'])) {
        echo '<b>'.$_POST['mata_pelajaran'].'</b>. ';
    }
    if (isset($_POST['mata_pelajaran1'])) {
        echo '<b>'.$_POST['mata_pelajaran1'].'</b>. ';
    }
    if (isset($_POST['mata_pelajaran2'])) {
        echo '<b>'.$_POST['mata_pelajaran2'].'</b>. ';
    }
    if (isset($_POST['mata_pelajaran3'])) {
        echo '<b>'.$_POST['mata_pelajaran3'].'</b>. ';
    }
    if (isset($_POST['mata_pelajaran4'])) {
        echo '<b>'.$_POST['mata_pelajaran4'].'</b>. ';
    }
    if (isset($_POST['mata_pelajaran5'])) {
        echo '<b>'.$_POST['mata_pelajaran5'].'</b>. ';
    }

    echo '<br>Nilai Ijazah  : <b>'.$nilai.'<b><br>';
        if($nilai>23):
            echo 'Selamat anda Lulus!<br>';
        else:
            echo 'Anda tidak lulus!';
        endif;
    }


?>