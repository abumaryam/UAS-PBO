<?php
namespace App\Models;
use App\Models\TugasAkhir;

class Mahasiswa{
    private $nim;
    private $nama;
    private $IPK;
    private $perguruan_tinggi;
    private $tugas_akhir;

    public function inputMakul()
    {

    }
    public function updateProfil()
    {

    }

    //Constructor
    public function __construct($nama, $nim, $IPK, $alamat, PerguruanTinggi $perguruan_tinggi)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    //One to one TugasAkhir
    public function setTugasAkhir(TugasAkhir $tugas_akhir)
    {

    }
    public function getTugasAkhir()
    {
        return $this->tugas_akhir;
    }

    // DP: Kurang getter dan setter yang lain
}