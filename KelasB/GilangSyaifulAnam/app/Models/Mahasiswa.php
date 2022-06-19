<?php
namespace App\Models;
use App\Models\getTugasAkhir;
use App\Models\PerguruanTinggi;


class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $perguruan_tinggi;
    private $tugas_akhir;


    public function inputMatkul(){

    }
    public function updateProfil(){

    }
// komposisi dg perrguruantinggi
    public function __construct($nama,$nim,$IPK,$alamt,PerguruTinggi $perguruan_tinggi){
        $this->nama=$nama;
        $this->nim=$nim;
        $this->IPK=$IPK;
        $this->alamat=$alamat;
        $this->perguruan_tinggi=$perguruan_tinggi;
    }

// 1 to 1 dg tugasakhir

    public function setTugasAkhir(TugasAkhir $tugas_akhir){
        $this->tugas_akhir=$tugas_akhir;
    }

    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }

}