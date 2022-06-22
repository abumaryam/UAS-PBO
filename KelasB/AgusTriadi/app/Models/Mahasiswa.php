<?php
namespace App\Models;
use App\Models\User;

class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $perguruanTinggi;

    public function __cunstruct($nim, $nama, $IPK, $alamat,PerguruanTinggi $perguruanTinggi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
    }

    public function inputMakul(){

    }

    public function updateProfil(){

    }
}