<?php

namespace App\Models;

use App\Models\TugasAkhir;
use App\Models\PerguruanTinggi;

class Dosen extends User implements Pegawai
{
    private $id;
    private $nip;
    private $nama;
    private $no_telp;
    public $nama_pt;
    private $tugas_akhir = [];

    public function setNip($nip)
    {

    }

    public function getNip()
    {

    }

    public function setNama($nama)
    {

    }

    public function getNama()
    {

    }

    public function setNoTelp($telp)
    {

    }

    public function getNoTelp()
    {

    }

    public function setPT(PerguruanTinggi $perguruanTinggi)
    {

    }

    public function getPT()
    {

    }

    public function presensiMasuk()
    {

    }

    public function setId($id)
    {

    }

    public function validasiMahasiswa()
    {

    }

    public function setTugasAkhir(TugasAkhir $ta)
    {

    }

}