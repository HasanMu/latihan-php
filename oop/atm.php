<?php 

class ATM {

    private $nama;

    private $saldo = 0; // -> properti

    public function setNamaPemilik(string $nama)
    {
        $this->nama = $nama;
    }

    public function getNamaPemilik()
    {
        return $this->nama;
    }

    public function setorTunai(int $jumlah) {
        $this->saldo = $this->saldo + $jumlah;

        return $jumlah;
    }

    public function tarikTunai(int $jumlah)
    {
        $this->saldo = $this->saldo - $jumlah;

        return $jumlah;
    }

    public function lihatSaldo()
    {
        return $this->saldo;
    }
}

$atm = new ATM();

$atm->setNamaPemilik("Hasan Muhammad");

echo 'Nama pemilik ATM : ' . $atm->getNamaPemilik() . '<br>';
echo 'setorTunai : ' .$atm->setorTunai(100) . '<br>';
echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';
echo 'setorTunai : ' .$atm->setorTunai(200) . '<br>';
echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';

echo 'tarikTunai : ' .$atm->tarikTunai(50) . '<br>';
echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';