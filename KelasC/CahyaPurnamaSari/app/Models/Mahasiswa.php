<?php

namespace App\Models;
Use Illuminate\Database\Eloquent\Model;
Use App\Models\PerguruanTinggi;

Class Mahasiswa extends Model{
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;

    public function inputMakul() {

    }

    public function updateProfil() {

    }

    public function __construct($nim, $nama, $ipk, $alamat) {
        $this->nim = "H1101201006";
        $this->nama = "Cahya Purnama Sari";
        $this->ipk = 4.0;
        $this->alamat = "Jl. Tanjung raya 2";
    }

    public function setPerguruanTinggi ($perguruan_tinggi) {
    
    }

    public function getPerguruanTinggi () {
        return $this->nama;
    }

    public function setTugasAkhir ($tugas_akhir) {
    
    }

    public function getTugasAkhir () {
        return $this->nama;

    }
}