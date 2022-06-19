<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenagaKependidikan extends Model implements Pegawai{
    private $nip,
            $nama,
            $alamat;
    
    public function hitungTunjanganKinerja(){

    }

    public function setNip($nip){
        $this->nip = $nip;
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

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }
}