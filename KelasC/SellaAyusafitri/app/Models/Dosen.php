<?php
namespace App\Models;
require_once('Model.php');
use App\Pegawai;

class Dosen extends Model implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;
    public $tugasAkhir = [];
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
    public function getNama()
    {
        return $this->nama;
    }
    public function setTugasAkhir(TugasAkhir $tgsAkhir)
    {
        $this->tugasAkhir = $tgsAkhir;
    }
    public function getTugasAkhir(TugasAkhir $tgsAkhir)
    {
        return $this->tugasAkhir;
    }
}