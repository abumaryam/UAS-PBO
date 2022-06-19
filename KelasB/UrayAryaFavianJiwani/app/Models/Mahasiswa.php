<?php

namespace App\Models;
require_once ('User.php');
use App\Models\TugasAkhir;

class Dosen extends User
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    
    public function inputmMatkul()
    {

    }

    public function updateProfil()
    {

    }

    function __construct($nim, $nama, $IPK, $alamat)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
    }
}