<?php

namespace App\Models;
use App\Models\TugasAkhir;
use illuminate\Database\Eloquent\Model;

class Mahasiswa extends User
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function InputMatkul()
    {

    }

    public function updateProfil()
    {

    }

    public function __construct ($nim, $nama, $ipk, $alamat)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;

    }
}

