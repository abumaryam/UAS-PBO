<?php

namespace App\Models;
use App\Models\Pegawai;
use App\Models\PerguruanTinggi;
use App\Models\TugasAkhir;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;
    private $tugas_akhir = [];
    private $perguruan_tinggi;

    public function validasiMahasiswa()
    {

    }
    //implementasi dari class interface Pegawai
    public function presensiMasuk()
    {

    }
    public function setNama($nama)
    {
        $this ->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function setNip($nip)
    {
        $this->nip = $nip;
    }
    public function getNip()
    {
        return $this->nip;
    }
    //construct kelas sendiri
    public function __construct($nip, $nama, $no_telp)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }
    //agregasi dari class PerguruanTinggi
    public function setPerguruanTinggi(PerguruanTinggi $perguruan_tinggi)
    {
        $this->perguruan_tinggi = $perguruan_tinggi;
    }
    public function getPerguranTinggi()
    {
        return $this->perguruan_tinggi;
    }
    //relasi one to many dengan TugasAkhir
    public function setTugasAkhir(TugasAkhir $tugas_akhir)
    {
        $this->tugas_akhir[] = $tugas_akhir;
    }
    public function getTugasAkhir()
    {
        return $this->tugas_akhir;
    }
}