<?php

namespace App\Models;

use App\Models\User;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;
use App\Models\Pegawai;

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    private $perguruan_tinggi;
    private $tugas_akhir = [];

    public function validasiMahasiswa()
    {
        
    }

    //agregasi dengan perguruantinggi
    //construct pribadi
    public function __construct($nip, $nama, $no_telp)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }

    public function setPerguruanTinggi(PerguruanTinggi $perguruan_tinggi)
    {
        $this->perguruan_tinggi = $perguruan_tinggi;
    }
    public function getPerguruanTinggi()
    {
        return $this->perguruan_tinggi;
    }

    //one to many dengan tugasakhir
    public function setTugasAkhir(TugasAkhir $tugas_akhir)
    {
        $this->tugas_akhir[] = $tugas_akhir;
    }
    public function getTugasAkhir()
    {
        return $this->tugas_akhir;
    }
    
    //implement dari pegawai
    public function setNip($nip)
    {
        $this->nip = $nip;
    }
    public function presensiMasuk()
    {
        
    }
    public function getNip()
    {
        return $this->nip;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }

    // DP: Kurang getNoTelp(){ }
}