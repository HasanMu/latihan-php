<form action="" method="post">
    NIM Anda : 
    <input type="text" name="txtnim"><br>
    <input type="submit" value="Proses" name="submit">
</form>

<?php

if (isset($_POST['submit'])) {
    $nim = $_POST['txtnim'];
    $a = substr($nim, 2, 2);
    switch ($a) {
        case 11:
            $jurusan = "Teknik informarika";
            break;
        case 22:
            $jurusan = "Sistem informarika";
        break;
        case 33:
            $jurusan = "Sistem komputer";
        break;
        case 44:
            $jurusan = "Komputerisasi akutansi";
        break;
        default:
        $jurusan = "salah jurusan";
            break;
    }
    echo "Nim Anda : $nim<br>";
    echo "Jurusan Anda : $jurusan";
}