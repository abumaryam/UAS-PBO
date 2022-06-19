<?php

namespace App\Models;
use App\Models\User;
use App\Models\TugasAkhir;

class Mahasiswa extends User{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    private $perguruan_tinggi;
    private $tugas_akhir;

    // constructor karena adanya relasi komposisi
    public function __construct($nim, $nama, $IPK, $alamat, PerguruanTinggi $perguruan_tinggi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $IPK;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    public function inputMatkul()
    {
        
    }

    public function updateProfil()
    {
        
    }

    // getter untuk mengakses atribut dengan visibility private
    public function getNim($nim)
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getIPK()
    {
        return $this->IPK;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    // setter dan getter untuk relasi komposisi
    public function setPerguruanTinggi(PerguruanTinggi $perguruan_tinggi)
    {
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    public function getPerguruanTinggi()
    {
        return $this->perguruan_tinggi;
    }

    // setter dan getter untuk relasi one to one
    public function setTugasAkhir(TugasAkhir $tugas_akhir)
    {
        $this->tugas_akhir = $tugas_akhir;
    }

    public function getTugasAkhir()
    {
        return $this->tugas_akhir;
    }
}