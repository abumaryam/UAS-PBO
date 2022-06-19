<?php

namespace App\Models;
require_once ('User.php');
use App\Pegawai;

class Dosen extends User implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;
    private $perguruanTinggi;

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
        return this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return this->nama;
    }

    public function setNoTelp($no_telp)
    {
        $this->no_telp = $no_telp;
    }

    public function getNoTelp()
    {
        return this->no_telp;
    }

    public function setTugasAkhir(TugasAkhir $tgsAkhir)
    {
        $this->tugasAkhir = $tgsAkhir;
    }

    public function getTugasAkhir(TugasAkhir $tgsAkhir)
    {
        return this->tugasAkhir;
    }

    public function __construct($id, $namaPT, $akreditasi)
    {
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
    }

    public function setPerguruanTinggi(PerguruanTinggi $prgrnTinggi)
    {
        $this->PerguruanTinggi = $prgrnTinggi;
    }

    public function getPerguruanTinggi()
    {
        return $this->perguruanTinggi;
    }
}