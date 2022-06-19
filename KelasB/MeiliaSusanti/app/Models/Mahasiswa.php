<?php

namespace App\Models;
use App\Models\TugasAkhir;

class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $ipk;
    private $alamat;
    private $perguruan_tinggi;
    private $tugas_akhir;
    
//komposisi dengan perguruan tinggi
    public function __construct($nim,$nama,$ipk,$alamat, PerguruanTinggi $perguruan_tinggi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    public function inputMakul(){
        return true;
        return false;
    }

    public function updateProfil(){
        //
    }

// 1 to 1 tugas akhir
    public function setTugasAkhir(TugasAkhir $tugas_akhir){
        $this->tugas_akhir = $tugas_akhir;
    }

    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }
}