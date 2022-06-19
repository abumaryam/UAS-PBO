<?php

namespace App\Models;


class Pegawai implements TenagaPendidikan{
    
    private function setNip($nip){
        $this->nip = $nip;
    }
    public function presensiMasuk(){

    }
    private function getNip(){
        return $this->nip;
    }
    private function setNama($nama){
        $this->nama = $nama;
    }
    private function getNama(){
        return $yhis->nama;
    }
}