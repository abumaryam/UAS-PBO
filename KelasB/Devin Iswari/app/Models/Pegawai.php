<?php

namespace App\Models;

use App\Models;

class Pegawai implements TenagaKependidikan{
    private $nip;
    private $nama;
    private $alamat;

    private function setNIP(){
        $this->nip = $nip;
    }

    public function presensiMasuk(){
        echo "Jumlah presensi masuknya adalah";
    }

    private function getNip(){
        return "$this->nip";
    }

    private function setNama(){
        $this->nama = $nama;
    }

    private function getNama(){
        return "$this->nama";
    }
}
