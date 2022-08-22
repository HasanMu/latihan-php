<?php

class GanjilGenap {

    function __invoke(int $angka) {
        if ($angka % 2 == 0) {
            return "Genap";
        } else {
            return "Ganjil";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganjil Genap</title>
</head>
<body>
    <form>
        <label for="angka">Masukkan angka : </label>
        <input type="number" name="angka" />
        <button type="submit">Cari</button>
    </form>

    <?php if (isset($_GET['angka'])) : ?>
        <span>Hasil : </span>
        <br />

        <span>Bilangan angka : <?= $_GET['angka'] ?> adalah bilangan <?= (new GanjilGenap)($_GET['angka']); ?></span>
    <?php endif; ?>
</body>
</html>