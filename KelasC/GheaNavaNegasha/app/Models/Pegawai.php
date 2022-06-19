<?php
namespace App\ModeL;

class Pegawai implements TenagaKependidikan {
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

