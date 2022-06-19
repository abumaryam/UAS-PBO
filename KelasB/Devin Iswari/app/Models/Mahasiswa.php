<?php

namespace APP\Models;
use App\Models;

class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    public function __construct($nim, $nama, $IPK, $alamat){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
    }

    public function inputMakul(){

    }
    public function updateProfil(){
        return "$this->nim, $this->nama, $this->IPK, $this->alamat";

    }
}

$mahasiswa1 = new Mahasiswa ("H1101", "Haku",3.2, " Adisucipto");

echo "Profil : ". $mahasiswa1->updateProfil();