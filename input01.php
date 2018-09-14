
<html>
<head>
    <title>Pengolahan Form</title>
</head>
<body>
    <form action="" method="POST" name="input">
        Nama anda : <input type="text" name="nama"><br>
        <input type="submit" name="Input" value="Input">
    <hr>
    <h3>Operator Aritmatika <br></h3>
    <input type="text" name="x" placeholder="Bilangan pertama"><br>
    <input type="text" name="y" placeholder="Bilangan kedua"><br>
    <input type="button" value="+" name="pertambahan">
    <input type="button" value="x" name="perkalian">
    <input type="button" value="-" name="pengurangan">
    <input type="button" value="/" name="pembagian">
    <input type="submit" name="Input1" value="Input">

    </form>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];

    echo 'Nama anda : '.$nama.'<br>';
}
if (isset($_POST['Input1'])){
    $tambah = $_POST['pertambahan'];
    $kali = $_POST['perkalian'];
    $kurang = $_POST['perkurangan'];
    $bagi = $_POST['pembagian'];
    $bilangan_pertama = $_POST['x'];
    $bilangan_kedua = $_POST['y'];

    if(($bilangan_pertama&&$bilangan_kedua)||$tambah):
        $hasil = $bilangan_pertama+$bilangan_kedua;
        echo 'Hasil dari '.$bilangan_pertama.' + '.$bilangan_kedua.' = '.$hasil;
        
    elseif (($bilangan_pertama&&$bilangan_kedua)||$kali):
        $hasil = $bilangan_pertama*$bilangan_kedua;
        echo 'Hasil dari '.$bilangan_pertama.' x '.$bilangan_kedua.' = '.$hasil;
    elseif (($bilangan_pertama&&$bilangan_kedua)||$kurang):
        $hasil = $bilangan_pertama-$bilangan_kedua;
        echo 'Hasil dari '.$bilangan_pertama.' - '.$bilangan_kedua.' = '.$hasil;

    endif;
}
?>