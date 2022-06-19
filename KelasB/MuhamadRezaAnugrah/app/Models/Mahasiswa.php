<?php
namespace App\Models;

use App\Models\User;

class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $namaPT;

    public function __construct($nim, $nama, $IPK, $alamat, PerguruanTinggi $PT){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
        $this->PT = $PT;
    }

    public function inputMatkul(){

    }

    public function updateProfil(){

    }
}