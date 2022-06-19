<?php

namespace App\Models;

use App\Models\Pegawai;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends User implements Pegawai{
    private $nip; /*String*/
    private $nama; /*String*/
    private $no_telp; /*String*/

    public function __construct($id, $namaPT)
    {
        $this->id = $id;
        $this->namaPT = $namaPT;
    }

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
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getnama()
    {
        return $this-> nama;
    }
}