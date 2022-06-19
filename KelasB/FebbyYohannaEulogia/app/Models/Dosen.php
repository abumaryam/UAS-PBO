<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends User implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    private $perguruan_tinggi;
    private $tugas_akhir = [];

    // constructor karena adanya relasi agregasi
    public function __construct($nip, $nama, $no_telp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }

    public function validasiMahasiswa()
    {
        
    }

    // method dari interface
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

    // getter untuk mengakses atribut dengan visibility private
    public function getNoTelp()
    {
        return $this->no_telp;
    }

    //setter dan getter dari relasi agregasi
    public function setPerguruanTinggi(PerguruanTinggi $perguruan_tinggi)
    {
        $this->perguruan_tinggi = $perguruan_tinggi;
    }

    public function getPerguruanTinggi()
    {
        return $this->perguruan_tinggi;
    }

    // setter dan getter dari relasi one to many
    public function setTugasAkhir(TugasAkhir $tgs_akhir)
    {
        $this->tugas_akhir[] = $tgs_akhir;
    }

    public function getTugasAkhir()
    {
        return $this->tugas_akhir;
    }
}