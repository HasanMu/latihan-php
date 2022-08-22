<?php 

class ATM {

    // private $nama;

    private $saldo = 0; // -> properti

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

echo 'setorTunai : ' .$atm->setorTunai(100) . '<br>';
echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';
echo 'setorTunai : ' .$atm->setorTunai(200) . '<br>';
echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';

echo 'tarikTunai : ' .$atm->tarikTunai(50) . '<br>';
echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';