<?php

namespace App\Models;
require_once('Model.php');
use App\Models\TugasAkhir;

class Mahasiswa extends Model
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function inputMakul()
    {

    }
    public function updateProfil()
    {

    }
    function __construct($nim, $nama, $ipk, $alamat)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;
    }
}