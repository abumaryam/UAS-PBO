<?php

namespace App\Models;
use App\Models\User;

class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $namaPT;
    private $pengujiTA = [];

    public function inputMatkul(){
        return TRUE;
        return FALSE;
    }

    public function updateProfil(){

    }
    public function __construct($nim, $nama, $IPK, $alamat, PerguruanTinggi $namaPT){
        $this->nim=$nim;
        $this->nama=$nama;
        $this->IPK=$IPK;
        $this->alamat=$alamat;
        $this->namaPT=$namaPT;
    }
    Public function setTugasAkhir(TugasAkhir $pengujiTA){
        $this->judulTA = $pengujiTA;
    }
    public function getTugasAkhir(){
        return $this->pengujiTA; 
    }
}