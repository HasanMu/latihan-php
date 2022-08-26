<?php

class ToStringArray {

    public $items = [];

    public function tambahProduk(string $nama_produk, int $harga)
    {
        $this->items[] = [
            'nama_produk' => $nama_produk,
            "harga"       => $harga
        ];

        return $this;
    }

    public function __toString()
    {
        return json_encode($this->items);
    }
}

$produk = new ToStringArray();

$produk->tambahProduk('Mangga', 5000)
        ->tambahProduk('Apel', 7000)
        ->tambahProduk('Jeruk', 4500);

print_r ($produk);
