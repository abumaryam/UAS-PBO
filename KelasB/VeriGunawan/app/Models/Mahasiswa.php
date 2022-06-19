<?php
namespace App\Models;
use App\Models\TugasAkhir;

class Mahasiswa{
    private $nama;
    private $nim;
    private $IPK;
    private $alamat;
    private $perguruan_tinggi;
    private $tugas_akhir;

    public function inputMakul()
    {

    }
    public function updateProfile()
    {

    }
    public function __construct ($nama, $nim, $IPK, $alamat, PerguruanTinggi $perguruan_tinggi)
    {
        $this ->nama = $nama;
        $this ->nim = $nim;
        $this ->IPK = $IPK;
        $this ->alamat = $alamat;
        $this ->perguruan_tinggi = $perguruan_tinggi;
    }
    public function setTugasAkhir(TugasAkhir $tugas_akhir)
    {
        $this ->tugas_akhir = $tugas_akhir;
    }
    public function getTugasAkhir()
    {
        return $this -> tugas_akhir;
    }
}