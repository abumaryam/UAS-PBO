<?php

namespace App\Models;
use App\Pegawai;
require_once ('Pegawai.php');

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    public $TugasAkhir = [];

    public function validasiMahasiswa()
    {

    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function presensiMasuk()
    {
        
    }
    public function getNip()
    {
        $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setTugasAkhir(TugasAkhir $tugasakhir)
    {
        $this->tugasAkhir = $tugasakhir;
    }

    public function getTugasAkhir(TugasAkhir $tugasakhir)
    {
        return $this->tugasakhir;
    }
}