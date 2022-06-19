<?php
namespace App\Models;
use App\Models\User;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Mahasiswa extends user{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $perguruan_tinggi;
    private $tugas_akhir;

    public function inputMatkul()
    {
        
    }
    public function updateProfil()
    {
        
    }
    //komposisi dengan perguruan tinggi
    public function __construct($nim, $nama, $IPK, $alamat, PerguruanTinggi $perguruan_tinggi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    //one to one dengan TugasAkhir
    public function setTugasAkhir(TugasAkhir $tugas_akhir)
    {
        $this->tugas_akhir = $tugas_akhir;
    }
    public function getTugasAkhir()
    {
        return $this->tugas_akhir;
    }
}