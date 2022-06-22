<?php
namespace App\Models;

use App\Models\TugasAkhir;

class Mahasiswa{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $tugas_akhir;
    private $perguruan_tinggi;

    public function inputMakul(){

    }

    public function updateProfil(){

    }

    // Lengkapi dengan constructor karena class Mahasiswa berelasi komposisi dengan class PerguruanTinggi dan agar bisa diperoleh oleh class TugasAkhir

    public function __construct($nim, $nama, $IPK, $alamat, PerguruanTinngi $perguruan_tinggi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $IPK;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    // Relasi One to One dengan class TugasAkhir
    
    public function setTugasAkhir(TugasAkhir $tugas_akhir){
        $this->tugas_akhir = $tugas_akhir = $tugas_akhir;
    }

    public function getTugasAkhir(){
        return $this->tugas_akhir;
    }

    // DP: Kurang setter dan getter untuk atribut yang private
}