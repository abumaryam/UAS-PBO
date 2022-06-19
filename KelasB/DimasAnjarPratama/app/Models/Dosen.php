<?php

namespace App\Models;

use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;

class Dosen extends User implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;
    private $pt;
    private $ta = [];

    public function __construct($nip, $nama, $no_telp)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->nama = $no_telp;
    }

    public function setPerguruanTinggi(PerguruanTinggi $pt)
    {
        $this->pt = $pt;
    }

    public function getPerguruanTinggi()
    {
        return $this->pt;
    }

    public function setTugasAkhir(TugasAkhir $ta)
    {
        $this->ta[] = $ta;
    }

    public function getTugasAkhir()
    {
        return $this->ta;
    }

    public function validasiMahasiswa()
    {
        //
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function presensiMasuk()
    {
        //
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
}