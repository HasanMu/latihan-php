<?php

class BilanganPrima {

    function __invoke(int $angka) {
        $angka_prima = true;
        for ($i = 2; $i < $angka; $i++) {
            if ($angka % $i == 0) {
                $angka_prima = false;
                break;
            }
        }

        return $angka_prima;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
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

        <span>Bilangan : <?= $_GET['angka'] ?> adalah bilangn <?= (new BilanganPrima)($_GET['angka']) ? 'prima' : 'bukan prima' ?></span>
    <?php endif; ?>
</body>
</html>