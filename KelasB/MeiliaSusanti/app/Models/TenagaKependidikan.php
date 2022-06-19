<?php

namespace App\Models;
use App\Models\User;

class TenagaKependidikan extends User implements Pegawai{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja(){
        //
    }

//Implementasi interface pegawai
    public function setNip($nip){
        $this->nip = $nip;
    }

    public function presensiMasuk(){
        //
    }

    public function getNip(){
        return $this->nip;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}