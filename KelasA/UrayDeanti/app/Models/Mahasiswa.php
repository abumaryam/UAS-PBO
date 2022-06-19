<?php

namespace App\Models;
use App\Models\TugasAkhir;

class Mahasiswa{
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;
    private $perguruan_tinggi;
    private $tugas_akhir;

    public function inputMatkul(){

    }
    public function updateProfil(){

    }

    public function __construct($nim, $nama, $ipk, $alamat, PerguruanTinggi $perguruan_tinggi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    public function setTugasAkhir(TugasAkhir $tugas_akhir){
        $this->tugas_akhir = $tugas_akhir;
    }
    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }
}