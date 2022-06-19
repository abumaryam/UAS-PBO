<?php

namespace App\Models;

use App\Models\User;

class TenagaKependidikan extends User implements Pegawai{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjangan(){

    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama($nama){
        return $this->$nama;
    }

    public function setNIP($nip){
        $this->nip = $nip;
    }

    public function getNIP(){
        return $this->$nip;
    }

    public function presensiMasuk(){
        
    }

}