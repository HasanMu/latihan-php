<?php

class Artimatika {

    /**
     * @var int $angka1
     */
    private $angka1;

    /**
     * @var int $angka2
     */
    private $angka2;

    /**
     * @var int|double $hasil
     */
    private $hasil;

    public function __construct($bilangan_1, $bilangan_2) // --> method / fungsi yang pertama kali dijalan (otomatis) oleh class
    {
        $this->angka1 = $bilangan_1;
        $this->angka2 = $bilangan_2;
    }

    public function tambah() // --> penjumlahan
    {
        $this->hasil = $this->angka1 + $this->angka2;
    }

    public function kurang() // --> pengurangan
    {
        $this->hasil = $this->angka1 - $this->angka2;
    }

    public function kali() // --> perkalian
    {
        $this->hasil = $this->angka1 * $this->angka2;
    }

    public function bagi() // --> pembagian
    {
        $this->hasil = $this->angka1 / $this->angka2;
    }

    public function hasil()
    {
        return $this->hasil;
    }
}

// --> membuat objek dari class Artimatika sekaligus menjalankan method __construct dengan memberikkab 2 buah parameter
$artimatika_tambah = new Artimatika(10, 5); 

// --> melakukan operasi pertambahan
$artimatika_tambah->tambah();

// --> menampilkan hasil
echo 'Hasil penjumlahan : ' . $artimatika_tambah->hasil() . '<br>'; // --> 10 + 5 = 15

/**
 * ================
 */

// --> membuat objek dari class Artimatika sekaligus menjalankan method __construct dengan memberikkab 2 buah parameter
$artimatika_kurang = new Artimatika(10, 5); 

// --> melakukan operasi pengurangan
$artimatika_kurang->kurang();

// --> menampilkan hasil
echo 'Hasil pengurangan : ' . $artimatika_kurang->hasil() . '<br>'; // --> 10 - 5 = 5

/**
 * ================
 */

// --> membuat objek dari class Artimatika sekaligus menjalankan method __construct dengan memberikkab 2 buah parameter
$artimatika_kali = new Artimatika(10, 5); 

// --> melakukan operasi pengurangan
$artimatika_kali->kali();

// --> menampilkan hasil
echo 'Hasil pengurangan : ' . $artimatika_kali->hasil() . '<br>'; // --> 10 x 5 = 50

/**
 * ================
 */

// --> membuat objek dari class Artimatika sekaligus menjalankan method __construct dengan memberikkab 2 buah parameter
$artimatika_bagi = new Artimatika(10, 5); 

// --> melakukan operasi pengurangan
$artimatika_bagi->bagi();

// --> menampilkan hasil
echo 'Hasil pengurangan : ' . $artimatika_bagi->hasil() . '<br>'; // --> 10 / 5 = 2