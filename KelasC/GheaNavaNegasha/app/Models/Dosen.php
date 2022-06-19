<?php
namespace App\Model;

class Dosen extends Pegawai {
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa() {
    }
    private $Nip;
    public function setNip($Nip)
    {
        $this->Nip = $Nip;
    }
    public function presensiMasuk() 
    {
        return "presensi berhasil";
    }
    public function getNip()
    {
       return this->Nip;
    }
    private $Nama;
    public function setNama($Nama)
    {
        $this->Nama = $Nama;
    }
    public function getNama()
    {
        return this->Nama;
    } 
}