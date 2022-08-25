<?php

class MagicMethod
{
    private $nama_lengkap;

    public function __construct(string $nama)
    {
        $this->nama_lengkap = $nama;
    }

    public function __toString()
    {
        return 'Hai, nama saya adalah : '. $this->nama_lengkap; 
    }
}

$class = new MagicMethod("Hasan Muhammad");

echo $class; // --> maka akan keluar (Hai, nama saya adalah : Hasan Muhammad)

// Jika tidak ada method __toString()
// Maka akan muncul error berikut
// Fatal error: Uncaught Error: Object of class MagicMethod could not be converted to string
