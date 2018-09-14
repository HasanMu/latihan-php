<?php 
    $user = 'admin';
    $pass = 'demo';
    if($user=='admin'&&$pass=='demo'):
        echo 'Login berhasil!';
    elseif ($user=='admin'||$pass=='demo'):
        echo 'Username atau Password Salah!';
    else:
        echo 'Login Gagal!';
    endif;
?>