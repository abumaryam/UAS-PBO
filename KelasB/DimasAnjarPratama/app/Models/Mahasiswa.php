<?php

namespace App\Models;

use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Mahasiswa extends User
{
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;
    private $pt;
    private $ta;

    public function __construct($nim, $nama, $ipk, $alamat, PerguruanTinggi $pt)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
        $this->alamat = $alamat;
        $this->pt = $pt;
    }

    public function setTugasAkhir()
    {
        $this->ta = $ta;
    }

    public function getTugasAkhir()
    {
        return $this->ta;
    }

    public function inputMatkul()
    {
        return true;
        return false;
    }

    public function inputProfil()
    {
        //
    }
}