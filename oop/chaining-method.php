<?php

class Artimatika
{

    /**
     * @var int|double $hasil
     */
    private $hasil = 0;

    public function tambah(int $angka) // --> penjumlahan
    {
        $this->hasil = $this->hasil + $angka;

        return $this;
    }

    public function kurang(int $angka) // --> pengurangan
    {
        $this->hasil = $this->hasil - $angka;

        return $this;
    }

    public function kali(int $angka) // --> perkalian
    {
        $this->hasil = $this->hasil * $angka;

        return $this;
    }

    public function bagi(int $angka) // --> pembagian
    {
        $this->hasil = $this->hasil / $angka;

        return $this;
    }

    public function hasil()
    {
        return $this->hasil;
    }
}

// --> membuat objek dari class Artimatika sekaligus menjalankan method __construct dengan memberikkab 2 buah parameter
$artimatika_tambah = new Artimatika();

// --> melakukan operasi pertambahan
$artimatika_tambah->tambah(10)
                ->tambah(5)
                ->kali(5);

// --> menampilkan hasil
echo 'Hasil penjumlahan : ' . $artimatika_tambah->hasil() . '<br>'; // --> 10 + 5 = 15
