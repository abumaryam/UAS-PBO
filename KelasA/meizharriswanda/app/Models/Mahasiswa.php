<?php

namespace App\Models;

use Illuminate\Foundation\Auth\Mahasiswa;

class Mahasiswa {
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;

    public function setNim($nim) // tidak seperti ini cara membuat setter (skor: 0.5)
    {
        echo $this->nim."H1101201027";
    }

    public function setNama()// tidak seperti ini cara membuat setter (skor: 0.5)
    {
        echo $this->nama."Meizhar Riswanda";
    }

    public function setIpk()// tidak seperti ini cara membuat setter (skor: 0.5)
    {
        echo $this->ipk."4.0";
    }

    public function setAlamat()// tidak seperti ini cara membuat setter (skor: 0.5)
    {
        echo $this->alamat."Sungai Jawi";
    }

} 

