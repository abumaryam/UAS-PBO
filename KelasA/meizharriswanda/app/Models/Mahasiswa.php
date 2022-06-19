<?php

namespace App\Models;

use Illuminate\Foundation\Auth\Mahasiswa;

class Mahasiswa {
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;

    public function setNim($nim)
    {
        echo $this->nim."H1101201027";
    }

    public function setNama()
    {
        echo $this->nama."Meizhar Riswanda";
    }

    public function setIpk()
    {
        echo $this->ipk."4.0";
    }

    public function setAlamat()
    {
        echo $this->alamat."Sungai Jawi";
    }

} 

